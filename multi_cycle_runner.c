#include <stdio.h>
#include <stdlib.h>
#include <string.h>
#include <pthread.h>
#include <curl/curl.h>
#include <time.h>
#include <unistd.h>

#define MAX_SOURCES 7000
#define MAX_THREADS 128
#define TIMEOUT_SECONDS 90
#define URL_MAX 2048

typedef struct {
    char provider[256];
    char dataset[256];
    char url[URL_MAX];
    int connects;
    long response_time_ms;
} Source;

typedef struct {
    int thread_id;
    Source *sources;
    int source_count;
    int start_idx;
    int end_idx;
    int completed;
    int errors;
} ThreadArgs;

static size_t write_callback(void *contents, size_t size, size_t nmemb, void *userp) {
    return size * nmemb;
}

void* fetch_thread(void *arg) {
    ThreadArgs *args = (ThreadArgs *)arg;
    CURL *curl = curl_easy_init();
    struct curl_slist *headers = NULL;

    headers = curl_slist_append(headers, "User-Agent: SEAM-Continuum/1.0");
    headers = curl_slist_append(headers, "Accept: application/json");

    for (int i = args->start_idx; i < args->end_idx; i++) {
        Source *src = &args->sources[i];
        long http_code = 0;
        struct timeval start, end;

        gettimeofday(&start, NULL);

        curl_easy_setopt(curl, CURLOPT_URL, src->url);
        curl_easy_setopt(curl, CURLOPT_HTTPHEADER, headers);
        curl_easy_setopt(curl, CURLOPT_TIMEOUT, 5L);
        curl_easy_setopt(curl, CURLOPT_CONNECTTIMEOUT, 3L);
        curl_easy_setopt(curl, CURLOPT_WRITEFUNCTION, write_callback);
        curl_easy_setopt(curl, CURLOPT_FOLLOWLOCATION, 1L);
        curl_easy_setopt(curl, CURLOPT_MAXREDIRS, 3L);

        CURLcode res = curl_easy_perform(curl);

        gettimeofday(&end, NULL);
        src->response_time_ms = (end.tv_sec - start.tv_sec) * 1000 +
                               (end.tv_usec - start.tv_usec) / 1000;

        if (res == CURLE_OK) {
            curl_easy_getinfo(curl, CURLINFO_RESPONSE_CODE, &http_code);
            src->connects = (http_code >= 200 && http_code < 400) ? 1 : 0;
        } else {
            src->connects = 0;
            args->errors++;
        }
        args->completed++;

        if (args->completed % 500 == 0) {
            fprintf(stderr, "[%d/%d] completed\n", args->completed, args->source_count);
        }
    }

    curl_slist_free_all(headers);
    curl_easy_cleanup(curl);

    return NULL;
}

int main(int argc, char *argv[]) {
    FILE *registry_file = fopen("continuum/continuum_combined_registry.json", "r");
    if (!registry_file) {
        fprintf(stderr, "Error: Cannot open registry\n");
        return 1;
    }

    Source sources[MAX_SOURCES];
    int source_count = 0;
    char line[4096];

    fprintf(stderr, "SEAM Multi-Cycle Runner (C)\n");
    fprintf(stderr, "====================================\n");
    fprintf(stderr, "Loading registry...\n");

    while (fgets(line, sizeof(line), registry_file)) {
        if (strstr(line, "\"data_endpoint\"")) {
            char *url_start = strstr(line, "\"http");
            if (url_start) {
                url_start++;
                char *url_end = strstr(url_start, "\"");
                int url_len = url_end - url_start;
                strncpy(sources[source_count].url, url_start,
                       (url_len < URL_MAX) ? url_len : URL_MAX-1);
                source_count++;

                if (source_count >= MAX_SOURCES) break;
            }
        }
    }
    fclose(registry_file);

    fprintf(stderr, "Loaded %d sources\n", source_count);
    fprintf(stderr, "Starting %d threads...\n", MAX_THREADS);

    pthread_t threads[MAX_THREADS];
    ThreadArgs thread_args[MAX_THREADS];
    time_t start_time = time(NULL);

    int sources_per_thread = (source_count + MAX_THREADS - 1) / MAX_THREADS;

    for (int i = 0; i < MAX_THREADS; i++) {
        thread_args[i].thread_id = i;
        thread_args[i].sources = sources;
        thread_args[i].source_count = source_count;
        thread_args[i].start_idx = i * sources_per_thread;
        thread_args[i].end_idx = (i + 1) * sources_per_thread;
        if (thread_args[i].end_idx > source_count) {
            thread_args[i].end_idx = source_count;
        }
        thread_args[i].completed = 0;
        thread_args[i].errors = 0;

        if (thread_args[i].start_idx < source_count) {
            pthread_create(&threads[i], NULL, fetch_thread, &thread_args[i]);
        }
    }

    int total_completed = 0;
    int total_errors = 0;
    for (int i = 0; i < MAX_THREADS; i++) {
        if (thread_args[i].start_idx < source_count) {
            pthread_join(threads[i], NULL);
            total_completed += thread_args[i].completed;
            total_errors += thread_args[i].errors;
        }
    }

    time_t end_time = time(NULL);
    int elapsed = end_time - start_time;

    int connected = 0;
    int total_response_time = 0;
    for (int i = 0; i < source_count; i++) {
        if (sources[i].connects) connected++;
        total_response_time += sources[i].response_time_ms;
    }

    fprintf(stderr, "\n====================================\n");
    fprintf(stderr, "COLLECTION COMPLETE\n");
    fprintf(stderr, "====================================\n");
    fprintf(stderr, "Total sources: %d\n", source_count);
    fprintf(stderr, "Connected: %d\n", connected);
    fprintf(stderr, "Errors: %d\n", total_errors);
    fprintf(stderr, "Elapsed time: %d seconds\n", elapsed);
    fprintf(stderr, "Avg response: %.0f ms\n", (float)total_response_time / source_count);
    fprintf(stderr, "Throughput: %.1f sources/sec\n", (float)source_count / elapsed);

    return 0;
}
