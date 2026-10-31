<!DOCTYPE html>
<html>
<head>
  <title>Change Log</title>
  <meta charset="utf-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  <link rel="stylesheet icon" href="/theme/site/earthquake/index.css"/><meta name="description" content="USGS Earthquake Hazards Program, responsible for monitoring, reporting, and researching earthquakes and earthquake hazards"/><meta name="keywords" content="aftershock,earthquake,epicenter,fault,foreshock,geologist,geophysics,hazard,hypocenter,intensity,intensity scale,magnitude,magnitude scale,mercalli,plate,richter,seismic,seismicity,seismogram,seismograph,seismologist,seismology,subduction,tectonics,tsunami,quake,sismologico,sismologia"/><script id="_fed_an_ua_tag" async="async" src="https://dap.digitalgov.gov/Universal-Federated-Analytics-Min.js?agency=DOI&amp;subagency=USGS"></script>  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons|Merriweather:400,400italic,700|Source+Sans+Pro:400,300,700"/>
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
      <h1>Change Log</h1>
    </header>

    <div class="page-content">
      
<p class="alert info">
  Newer release information is available on the
  <a href="https://code.usgs.gov/ghsc/hazdev/earthquake-event-ws/-/releases">
    earthquake-event-ws GitLab Releases Page
  </a>.
</p>


<h2>v1.0.18 <small>2015-01-20</small></h2>
<ul>
  <li>Change default expires for static resources to 1 day.</li>
  <li>Replace event type underscore with spaces.</li>
</ul>

<h2>v1.0.17 <small>2014-12-16</small></h2>
<ul>
  <li>Added plain text feed format.</li>
  <li>Reorganized search page layout.</li>
  <li>Fixed bug where un-reported values were displayed as 0.0.</li>
  <li>Set default event type to be &ldquo;earthquake&rdquo;.</li>
  <li>Support XML extension as valid feed format.</li>
  <li>Added nodata parameter to FDSN web service.</li>
  <li>Added option for &ldquo;includesuperceded&rsquo;.</li>
  <li>Restricted feed requests to HTTP GET method.</li>
  <li>Fixed event-time property for moment tensors.</li>
  <li>Added support for searching rectangle regions on a map.</li>
</ul>

<h2>v1.0.16 <small>2014-06-11</small></h2>
<ul>
  <li>Added access control headers for product contents.</li>
  <li>Increased marker size for small earthquakes in KML.</li>
  <li>Fixed network link bug in KML.</li>
  <li>Add kmlraw support to web service.</li>
  <li>Fixed string based time comparison when determining preferred order.</li>
  <li>Updated product ordering and enabled content in event KML.</li>
  <li>Updated ShakeMap information in event KML.</li>
  <li>Updated DYFI information in event KML.</li>
  <li>Added DYFI legend to event KML.</li>
</ul>

<h2>v1.0.15 <small>2014-06-02</small></h2>
<ul>
  <li>Fixed bug in KML format.</li>
  <li>Increased the significance value of a pager yellow alert to 650.</li>
  <li>
    Added programmatic access and mailing list sections to the
    summary page.
  </li>
  <li>Fixed Tsunami warning bug.</li>
  <li>Removed unused files, and cleaned up existing code.</li>
</ul>

<h2>v1.0.14 <small>2014-05-13</small></h2>
<ul>
  <li>Fixed various typos and normalized naming conventions.</li>
  <li>Cleaned up installation process.</li>
  <li>Migrated source code for offline development.</li>
  <li>Fixed bug in QuakeML output related to publicID.</li>
  <li>Updated maxradiuskm to allow for larger circular searches.</li>
  <li>Excludes deleted products from results.</li>
</ul>

<h2>v1.0.13 <small>2013-11-07</small></h2>
<ul>
  <li>Updated links and text at the top of search page.</li>
</ul>

<h2>v1.0.12 <small>2013-10-23</small></h2>
<ul>
  <li>
    For GeoJSON(P) when timezone (tz) data does not exist, a null timezone
    value is returned.
  </li>
  <li>
    Fixed region searches. Fractional numbers are allowable for
    latitude/longitude searches.
  </li>
  <li>Fixed circle searches.</li>
</ul>

<h2>v1.0.11 <small>2013-09-04</small></h2>
<ul>
  <li>Fixed search form so CSV/KML/QuakeML/GeoJSON work properly.</li>
</ul>

<h2>v1.0.10 <small>2013-09-03</small></h2>
<ul>
  <li>Added event-type information to all feed formats.</li>
  <li>
    New <a href="/earthquakes/search/">search form location</a>,
    layout, and features.
  </li>
  <li>
    Count method now properly reports number of earthquakes when query
    includes limit parameter.
  </li>
  <li>
    Can now search by multiple event types using comma-separated input values.
  </li>
  <li>
    New
    <a href="/fdsnws/event/1/application.json">application.json</a>
    method for fetching available values for enumerated input fields.
  </li>
  <li>
    Deleted products now excluded from results unless specifically requested.
  </li>
  <li>
    Can now specify min/max radius for circle searches in kilometers using
    new <a href="/fdsnws/event/1/#minradiuskm">minradiuskm</a> and
    <a href="/fdsnws/event/1/#maxradiuskm">maxradiuskm</a> parameters.
  </li>
</ul>

<h2>v1.0.9 <small>2013-07-29</small></h2>
<ul>
  <li>Implemented &ldquo;count&rdquo; method for FDSN queries.</li>
  <li>Updated feed descriptions to reference feed lifecycle policy.</li>
  <li>Corrected documentation for Tsunami flag usage.</li>
  <li>
    Now supports QuakeML output format for data feeds as well as searches.
  </li>
</ul>

<h2>v1.0.8 <small>2013-06-25</small></h2>
<ul>
  <li>
    Fixed problem with timestamps for events occurring prior to the epoch.
  </li>
  <li>
    Changed how catalog, contributor parameters are searched. Fixed logic error
    in query, which potentially excluded events.
  </li>
</ul>

<h2>v1.0.7 <small>2013-06-11</small></h2>
<ul>
  <li>Optimized performance for larger searches.</li>
</ul>

<h2>v1.0.6 <small>2013-06-11</small></h2>
<ul>
  <li>Improved join performance</li>
  <li>
    Added &ldquo;jsonerror&rdquo; parameter to web service, supporting json
    formatted error output.
  </li>
  <li>Stop escaping ampersands in GeoJSON &ldquo;detail&rdquo; urls.</li>
  <li>Updated Quakeml eventParameters to be unique per request.</li>
</ul>

<h2>v1.0.5 <small>2013-05-30</small></h2>
<ul>
  <li>Fixed output for KML format searches.</li>
  <li>
    GeoJSON format &ldquo;bbox&rdquo; property now reflects actual data
    extent rather than input query extent. This affects both feeds and
    searches.
  </li>
  <li>
    GeoJSON format now includes a &ldquo;type&rdquo; property indicating
    the type of seismic event for each feature.
  </li>
  <li>ATOM format now includes link to CAP alerts when available.</li>
</ul>

<h2>v1.0.4 <small>2013-05-20</small></h2>
<ul>
  <li>Display USGS logo and earthquake marker images inside the KML feed.</li>
</ul>

<h2>v1.0.0 <small>2013-04-30</small></h2>
<ul>
  <li>Eliminated HTML output format.</li>
  <li>
    Converted Numeric GeoJSON detail and summary properties from Strings to
    Numbers.
  </li>
  <li>Eliminated redundant GeoJSON detail properties.</li>
  <li>Added KML search output format.</li>
  <li>Separated KML feeds into separate feeds.</li>
</ul>
    </div>

    <footer class="page-footer"><p><a href="mailto:gs-haz_dev_team_group@usgs.gov?subject=EHP%20Website%20Email%20">Questions or comments?</a></p><nav class="page-social" aria-label="Share this page"> <a href="https://www.facebook.com/sharer.php?u=https%3A%2F%2F" title="Share using Facebook" class="facebook" data-link-template="https://www.facebook.com/sharer.php?u={URL}">Facebook</a> <a href="https://twitter.com/intent/tweet?url=https%3A%2F%2F&amp;text=USGS%20%7C%20Change+Log" title="Share using Twitter" class="twitter" data-link-template="https://twitter.com/intent/tweet?url={URL}&amp;text=USGS%20%7C%20{TITLE}">Twitter</a> <a href="https://plusone.google.com/_/+1/confirm?url=https%3A%2F%2F" title="Share using Google" class="google-plus" data-link-template="https://plusone.google.com/_/+1/confirm?url={URL}">Google</a> <a href="mailto:?to=&amp;subject=Change+Log&amp;body=https%3A%2F%2F" title="Share using Email" class="email" data-link-template="mailto:?to=&amp;subject={TITLE}&amp;body={URL}">Email</a></nav></footer>  </main>

  <nav class="site-footer">
    <section id="site-sectionnav" class="site-sectionnav" aria-label="Section Navigation"><a href='/earthquakes/feed/' class='up-one-level'>Feeds and Notifications</a><section><header>Real-time Notifications</header><a href="/ens/">Earthquake Notification Service</a><a href="https://twitter.com/usgsted">Tweet Earthquake Dispatch</a></section><section><header>Real-time Feeds</header><a href="/earthquakes/feed/v1.0/atom.php">ATOM</a><a href="/earthquakes/feed/v1.0/kml.php">KML</a><a href="/earthquakes/feed/v1.0/csv.php">Spreadsheet</a><a href="/earthquakes/feed/v1.0/quakeml.php">QuakeML</a><a href="/earthquakes/feed/v1.0/geojson.php">GeoJSON Summary</a><a href="/earthquakes/feed/v1.0/geojson_detail.php">GeoJSON Detail</a></section><section><header>For Developers</header><a href="/fdsnws/event/1/">API Documentation - EQ Catalog</a><a class="selected" href="/earthquakes/feed/v1.0/changelog.php">Change Log</a><a href="/earthquakes/feed/policy.php">Feed Lifecycle Policy</a><a href="/earthquakes/feed/v1.0/developers.php">Developer's Corner</a><a href="/ws/">Web Services</a><a href="https://public.govdelivery.com/accounts/USDOIGS/signup/39369">Mailing List-Announcements</a></section></section><section class="site-sitenav" aria-label="Site Navigation"><a href="https://earthquake.usgs.gov">Home</a><a href="https://www.usgs.gov/programs/earthquake-hazards/earthquakes">Earthquakes</a><a href="https://www.usgs.gov/programs/earthquake-hazards/hazards">Hazards</a><a href="https://www.usgs.gov/programs/earthquake-hazards/science">Science</a><a href="https://www.usgs.gov/programs/earthquake-hazards/products">Products</a><a href="https://www.usgs.gov/programs/earthquake-hazards/monitoring">Monitoring</a><a href="https://www.usgs.gov/programs/earthquake-hazards/education">Education</a><a href="https://www.usgs.gov/programs/earthquake-hazards/data">Data</a><a href="https://www.usgs.gov/programs/earthquake-hazards/maps">Maps</a><a href="https://www.usgs.gov/programs/earthquake-hazards/multimedia">Multimedia</a><a href="https://www.usgs.gov/programs/earthquake-hazards/publications">Publications</a><a href="https://www.usgs.gov/programs/earthquake-hazards/tools">Web Tools</a><a href="https://www.usgs.gov/programs/earthquake-hazards/software">Software</a><a href="https://www.usgs.gov/programs/earthquake-hazards/news">News</a><a href="https://www.usgs.gov/programs/earthquake-hazards/connect">Connect</a><a href="https://www.usgs.gov/programs/earthquake-hazards/partners">Partners</a><a href="https://www.usgs.gov/programs/earthquake-hazards/about">About</a></section>
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
