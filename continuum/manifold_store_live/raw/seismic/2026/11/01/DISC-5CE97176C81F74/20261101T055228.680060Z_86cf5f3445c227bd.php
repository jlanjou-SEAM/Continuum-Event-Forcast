<!DOCTYPE html>
<html>
<head>
  <title>GeoJSON Detail Format</title>
  <meta charset="utf-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  <link rel="stylesheet icon" href="/theme/site/earthquake/index.css"/><link rel="stylesheet" href="css/feedPages.css"/><meta name="description" content="USGS Earthquake Hazards Program, responsible for monitoring, reporting, and researching earthquakes and earthquake hazards"/><meta name="keywords" content="aftershock,earthquake,epicenter,fault,foreshock,geologist,geophysics,hazard,hypocenter,intensity,intensity scale,magnitude,magnitude scale,mercalli,plate,richter,seismic,seismicity,seismogram,seismograph,seismologist,seismology,subduction,tectonics,tsunami,quake,sismologico,sismologia"/><script id="_fed_an_ua_tag" async="async" src="https://dap.digitalgov.gov/Universal-Federated-Analytics-Min.js?agency=DOI&amp;subagency=USGS"></script>  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons|Merriweather:400,400italic,700|Source+Sans+Pro:400,300,700"/>
</head>
<body>

  <header role="banner" class="site-header">
    <a class="site-logo" href="/" title="U.S. Geological Survey">
      <img src="/theme/images/usgs-logo.svg" alt=""/>
    </a>
    <a class="jumplink-navigation" href="#site-sectionnav">Jump to Navigation</a>
      </header>

  <main role="main" class="page" aria-labelledby="page-header">
    <header class="page-header" id="page-header">
      <h1>GeoJSON Detail Format</h1>
    </header>

    <div class="page-content">
      
<div class="feed-format">

    <h2>Description</h2>
    <p>
      GeoJSON Detail output includes detailed information about a single
      earthquake. This matches the <a href="geojson.php">GeoJSON Summary
      output for a single feature</a>, and includes an additional property
      &ldquo;products&rdquo;, with additional information from all
      contributors to an event.
    </p>
    <p>
      Links to GeoJSON Detail feeds are included in <a href="geojson.php">
      GeoJSON Summary</a> feeds as the feature property &ldquo;detail&rdquo;.
    </p>
    <p>
      This feed adheres to the USGS Earthquakes
      <a href="/earthquakes/feed/policy.php">Feed Lifecycle Policy</a>.
    </p>

    <h2>Usage</h2>
    <p>
      GeoJSON is intended to be used as a programatic interface for
      applications.
    </p>

    <h2>Output</h2>
    <pre><code class="geojson">{
  type: "Feature",
  properties: {
    <a href='/data/comcat/data-eventterms.php#mag'>mag</a>: Decimal,
    <a href='/data/comcat/data-eventterms.php#place'>place</a>: String,
    <a href='/data/comcat/data-eventterms.php#time'>time</a>: Long Integer,
    <a href='/data/comcat/data-eventterms.php#updated'>updated</a>: Long Integer,
    <a href='/data/comcat/data-eventterms.php#tz'>tz</a>: Integer,
    <a href='/data/comcat/data-eventterms.php#url'>url</a>: String,
    <a href='/data/comcat/data-eventterms.php#felt'>felt</a>:Integer,
    <a href='/data/comcat/data-eventterms.php#cdi'>cdi</a>: Decimal,
    <a href='/data/comcat/data-eventterms.php#mmi'>mmi</a>: Decimal,
    <a href='/data/comcat/data-eventterms.php#alert'>alert</a>: String,
    <a href='/data/comcat/data-eventterms.php#status(review)'>status</a>: String,
    <a href='/data/comcat/data-eventterms.php#tsunami'>tsunami</a>: Integer,
    <a href='/data/comcat/data-eventterms.php#sig'>sig</a>:Integer,
    <a href='/data/comcat/data-eventterms.php#net'>net</a>: String,
    <a href='/data/comcat/data-eventterms.php#code'>code</a>: String,
    <a href='/data/comcat/data-eventterms.php#ids'>ids</a>: String,
    <a href='/data/comcat/data-eventterms.php#sources'>sources</a>: String,
    <a href='/data/comcat/data-eventterms.php#types'>types</a>: String,
    <a href='/data/comcat/data-eventterms.php#nst'>nst</a>: Integer,
    <a href='/data/comcat/data-eventterms.php#dmin'>dmin</a>: Decimal,
    <a href='/data/comcat/data-eventterms.php#rms'>rms</a>: Decimal,
    <a href='/data/comcat/data-eventterms.php#gap'>gap</a>: Decimal,
    <a href='/data/comcat/data-eventterms.php#magType'>magType</a>: String,
    <a href="/data/comcat/data-eventterms.php#type">type</a>: String,
    products: {
      <a href="/data/comcat/data-eventterms.php#productType">&lt;productType&gt;</a>: [
        {
          <a href="/data/comcat/data-eventterms.php#product_id">id</a>: String,
          <a href="/data/comcat/data-eventterms.php#product_id">type</a>: String,
          <a href="/data/comcat/data-eventterms.php#product_id">code</a>: String,
          <a href="/data/comcat/data-eventterms.php#product_id">source</a>: String,
          <a href="/data/comcat/data-eventterms.php#product_id">updateTime</a>: Integer,
          <a href="/data/comcat/data-eventterms.php#product_status">status</a>: String,
          properties: {
            <a href="/data/comcat/data-eventterms.php#product_propertyName">&lt;key&gt;</a>: String,
            &hellip;
          },
          <a href="/data/comcat/data-eventterms.php#preferredWeight">preferredWeight</a>: Integer,
          contents: {
            <a href="/data/comcat/data-eventterms.php#product_content">&lt;path&gt;</a>: {
              <a href="/data/comcat/data-eventterms.php#product_content">contentType</a>: String,
              <a href="/data/comcat/data-eventterms.php#product_content">lastModified</a>: Long Integer,
              <a href="/data/comcat/data-eventterms.php#product_content">length</a>: Integer,
              <a href="/data/comcat/data-eventterms.php#product_content">url</a>: String
            },
            &hellip;
          }
        },
        &hellip;
      ],
      &hellip;
    }
  },
  geometry: {
    type: "Point",
    coordinates: [
      <a href='/data/comcat/data-eventterms.php#longitude'>longitude</a>,
      <a href='/data/comcat/data-eventterms.php#latitude'>latitude</a>,
      <a href='/data/comcat/data-eventterms.php#depth'>depth</a>
    ]
  },
  <a href='/data/comcat/data-eventterms.php#id'>id</a>: String
}</code></pre>
</div>
    </div>

    <footer class="page-footer"><p><a href="mailto:gs-haz_dev_team_group@usgs.gov?subject=EHP%20Website%20Email%20">Questions or comments?</a></p><nav class="page-social" aria-label="Share this page"> <a href="https://www.facebook.com/sharer.php?u=https%3A%2F%2F" title="Share using Facebook" class="facebook" data-link-template="https://www.facebook.com/sharer.php?u={URL}">Facebook</a> <a href="https://twitter.com/intent/tweet?url=https%3A%2F%2F&amp;text=USGS%20%7C%20GeoJSON+Detail+Format" title="Share using Twitter" class="twitter" data-link-template="https://twitter.com/intent/tweet?url={URL}&amp;text=USGS%20%7C%20{TITLE}">Twitter</a> <a href="https://plusone.google.com/_/+1/confirm?url=https%3A%2F%2F" title="Share using Google" class="google-plus" data-link-template="https://plusone.google.com/_/+1/confirm?url={URL}">Google</a> <a href="mailto:?to=&amp;subject=GeoJSON+Detail+Format&amp;body=https%3A%2F%2F" title="Share using Email" class="email" data-link-template="mailto:?to=&amp;subject={TITLE}&amp;body={URL}">Email</a></nav></footer>  </main>

  <nav class="site-footer">
    <section id="site-sectionnav" class="site-sectionnav" aria-label="Section Navigation"><a href='/earthquakes/feed/' class='up-one-level'>Feeds and Notifications</a><section><header>Real-time Notifications</header><a href="/ens/">Earthquake Notification Service</a><a href="https://twitter.com/usgsted">Tweet Earthquake Dispatch</a></section><section><header>Real-time Feeds</header><a href="/earthquakes/feed/v1.0/atom.php">ATOM</a><a href="/earthquakes/feed/v1.0/kml.php">KML</a><a href="/earthquakes/feed/v1.0/csv.php">Spreadsheet</a><a href="/earthquakes/feed/v1.0/quakeml.php">QuakeML</a><a href="/earthquakes/feed/v1.0/geojson.php">GeoJSON Summary</a><a class="selected" href="/earthquakes/feed/v1.0/geojson_detail.php">GeoJSON Detail</a></section><section><header>For Developers</header><a href="/fdsnws/event/1/">API Documentation - EQ Catalog</a><a href="/earthquakes/feed/v1.0/changelog.php">Change Log</a><a href="/earthquakes/feed/policy.php">Feed Lifecycle Policy</a><a href="/earthquakes/feed/v1.0/developers.php">Developer's Corner</a><a href="/ws/">Web Services</a><a href="https://public.govdelivery.com/accounts/USDOIGS/signup/39369">Mailing List-Announcements</a></section></section><section class="site-sitenav" aria-label="Site Navigation"><a href="https://earthquake.usgs.gov">Home</a><a href="https://www.usgs.gov/programs/earthquake-hazards/earthquakes">Earthquakes</a><a href="https://www.usgs.gov/programs/earthquake-hazards/hazards">Hazards</a><a href="https://www.usgs.gov/programs/earthquake-hazards/science">Science</a><a href="https://www.usgs.gov/programs/earthquake-hazards/products">Products</a><a href="https://www.usgs.gov/programs/earthquake-hazards/monitoring">Monitoring</a><a href="https://www.usgs.gov/programs/earthquake-hazards/education">Education</a><a href="https://www.usgs.gov/programs/earthquake-hazards/data">Data</a><a href="https://www.usgs.gov/programs/earthquake-hazards/maps">Maps</a><a href="https://www.usgs.gov/programs/earthquake-hazards/multimedia">Multimedia</a><a href="https://www.usgs.gov/programs/earthquake-hazards/publications">Publications</a><a href="https://www.usgs.gov/programs/earthquake-hazards/tools">Web Tools</a><a href="https://www.usgs.gov/programs/earthquake-hazards/software">Software</a><a href="https://www.usgs.gov/programs/earthquake-hazards/news">News</a><a href="https://www.usgs.gov/programs/earthquake-hazards/connect">Connect</a><a href="https://www.usgs.gov/programs/earthquake-hazards/partners">Partners</a><a href="https://www.usgs.gov/programs/earthquake-hazards/about">About</a></section>
    <form class="site-search" role="search" action="//search.usa.gov/search" method="get" accept-charset="UTF-8">
      <input name="utf8" type="hidden" value="✓"/>
      <input name="affiliate" type="hidden" value="usgs"/>
      <input name="sitelimit" type="hidden" value="https://earthquake.usgs.gov"/>
      <input id="query" name="query" type="search" placeholder="Search..." title="Search"/>
      <button type="submit">Search</button>
    </form>
  </nav>

  <footer class="site-commonnav"><a href="https://www.usgs.gov/policies-and-notices">Legal</a></footer><!--[if lte IE 9]><script src="/theme/js/classList.js"></script><![endif]--><script src="/theme/js/index.js"></script></body>
</html>
