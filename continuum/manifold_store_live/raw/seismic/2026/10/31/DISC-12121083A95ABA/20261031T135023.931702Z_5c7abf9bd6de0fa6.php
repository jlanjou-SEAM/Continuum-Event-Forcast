<!DOCTYPE html>
<html>
<head>
  <title>Spreadsheet Format</title>
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
      <h1>Spreadsheet Format</h1>
    </header>

    <div class="page-content">
      
<div class="row feed-format">
  <div class="column three-of-five">
    <h2>Description</h2>
    <p>
      CSV is a &ldquo;comma separated values&rdquo; text file.
      See the <a
          href="http://en.wikipedia.org/wiki/Comma-separated_values"
          target="_blank">wikipedia</a> for more information on this format.
    </p>
    <p>
      This feed adheres to the USGS Earthquakes
      <a href="/earthquakes/feed/policy.php">Feed Lifecycle Policy</a>.
    </p>

    <h3>Usage</h3>
    <p>
      A simple text format suitable for loading data into spreadsheet
      applications like Microsoft Excel&trade;. This is a good option for
      manual scientific analysis.
    </p>

    <h2>Output</h2>
    <p>
      Below are the fields included in the spreadsheet output:
    </p>
    <ul>
      <li><a href="/data/comcat/data-eventterms.php#time">time</a></li>
      <li><a href="/data/comcat/data-eventterms.php#latitude">latitude</a></li>
      <li><a href="/data/comcat/data-eventterms.php#longitude">longitude</a></li>
      <li><a href="/data/comcat/data-eventterms.php#depth">depth</a></li>
      <li><a href="/data/comcat/data-eventterms.php#mag">mag</a></li>
      <li><a href="/data/comcat/data-eventterms.php#magType">magType</a></li>
      <li><a href="/data/comcat/data-eventterms.php#nst">nst</a></li>
      <li><a href="/data/comcat/data-eventterms.php#gap">gap</a></li>
      <li><a href="/data/comcat/data-eventterms.php#dmin">dmin</a></li>
      <li><a href="/data/comcat/data-eventterms.php#rms">rms</a></li>
      <li><a href="/data/comcat/data-eventterms.php#net">net</a></li>
      <li><a href="/data/comcat/data-eventterms.php#id">id</a></li>
      <li><a href="/data/comcat/data-eventterms.php#updated">updated</a></li>
      <li><a href="/data/comcat/data-eventterms.php#place">place</a></li>
      <li><a href="/data/comcat/data-eventterms.php#type">type</a></li>
      <li><a href="/data/comcat/data-eventterms.php#locationSource">locationSource</a></li>
      <li><a href="/data/comcat/data-eventterms.php#magSource">magSource</a></li>
      <li><a href="/data/comcat/data-eventterms.php#horizontalError">horizontalError</a></li>
      <li><a href="/data/comcat/data-eventterms.php#depthError">depthError</a></li>
      <li><a href="/data/comcat/data-eventterms.php#magError">magError</a></li>
      <li><a href="/data/comcat/data-eventterms.php#magNst">magNst</a></li>
      <li><a href="/data/comcat/data-eventterms.php#status">status</a></li>
    </ul>

    <p>
      Screenshot of the spreadsheet format, loaded into Microsoft Excel&trade;.
    </p>
    <img src="images/screenshot_csv.jpg" class="screenshot"
        alt="screenshot of kml feed in google earth" />
  </div>

  <div class="column two-of-five">
    <h2>Feeds</h2>
    

      <h3>Past Hour</h3><small>Updated every minute.</small>
      <ul>
        <li><a href="/earthquakes/feed/v1.0/summary/significant_hour.csv">Significant Earthquakes</a>
        </li>
      
        <li><a href="/earthquakes/feed/v1.0/summary/4.5_hour.csv">M4.5+ Earthquakes</a>
        </li>
      
        <li><a href="/earthquakes/feed/v1.0/summary/2.5_hour.csv">M2.5+ Earthquakes</a>
        </li>
      
        <li><a href="/earthquakes/feed/v1.0/summary/1.0_hour.csv">M1.0+ Earthquakes</a>
        </li>
      
        <li><a href="/earthquakes/feed/v1.0/summary/all_hour.csv">All Earthquakes</a>
        </li>
      </ul>
      <h3>Past Day</h3><small>Updated every minute.</small>
      <ul>
        <li><a href="/earthquakes/feed/v1.0/summary/significant_day.csv">Significant Earthquakes</a>
        </li>
      
        <li><a href="/earthquakes/feed/v1.0/summary/4.5_day.csv">M4.5+ Earthquakes</a>
        </li>
      
        <li><a href="/earthquakes/feed/v1.0/summary/2.5_day.csv">M2.5+ Earthquakes</a>
        </li>
      
        <li><a href="/earthquakes/feed/v1.0/summary/1.0_day.csv">M1.0+ Earthquakes</a>
        </li>
      
        <li><a href="/earthquakes/feed/v1.0/summary/all_day.csv">All Earthquakes</a>
        </li>
      </ul>
      <h3>Past 7 Days</h3><small>Updated every minute.</small>
      <ul>
        <li><a href="/earthquakes/feed/v1.0/summary/significant_week.csv">Significant Earthquakes</a>
        </li>
      
        <li><a href="/earthquakes/feed/v1.0/summary/4.5_week.csv">M4.5+ Earthquakes</a>
        </li>
      
        <li><a href="/earthquakes/feed/v1.0/summary/2.5_week.csv">M2.5+ Earthquakes</a>
        </li>
      
        <li><a href="/earthquakes/feed/v1.0/summary/1.0_week.csv">M1.0+ Earthquakes</a>
        </li>
      
        <li><a href="/earthquakes/feed/v1.0/summary/all_week.csv">All Earthquakes</a>
        </li>
      </ul>
      <h3>Past 30 Days</h3><small>Updated every minute.</small>
      <ul>
        <li><a href="/earthquakes/feed/v1.0/summary/significant_month.csv">Significant Earthquakes</a>
        </li>
      
        <li><a href="/earthquakes/feed/v1.0/summary/4.5_month.csv">M4.5+ Earthquakes</a>
        </li>
      
        <li><a href="/earthquakes/feed/v1.0/summary/2.5_month.csv">M2.5+ Earthquakes</a>
        </li>
      
        <li><a href="/earthquakes/feed/v1.0/summary/1.0_month.csv">M1.0+ Earthquakes</a>
        </li>
      
        <li><a href="/earthquakes/feed/v1.0/summary/all_month.csv">All Earthquakes</a>
        </li>
      </ul>  </div>

</div>
    </div>

    <footer class="page-footer"><p><a href="mailto:gs-haz_dev_team_group@usgs.gov?subject=EHP%20Website%20Email%20">Questions or comments?</a></p><nav class="page-social" aria-label="Share this page"> <a href="https://www.facebook.com/sharer.php?u=https%3A%2F%2F" title="Share using Facebook" class="facebook" data-link-template="https://www.facebook.com/sharer.php?u={URL}">Facebook</a> <a href="https://twitter.com/intent/tweet?url=https%3A%2F%2F&amp;text=USGS%20%7C%20Spreadsheet+Format" title="Share using Twitter" class="twitter" data-link-template="https://twitter.com/intent/tweet?url={URL}&amp;text=USGS%20%7C%20{TITLE}">Twitter</a> <a href="https://plusone.google.com/_/+1/confirm?url=https%3A%2F%2F" title="Share using Google" class="google-plus" data-link-template="https://plusone.google.com/_/+1/confirm?url={URL}">Google</a> <a href="mailto:?to=&amp;subject=Spreadsheet+Format&amp;body=https%3A%2F%2F" title="Share using Email" class="email" data-link-template="mailto:?to=&amp;subject={TITLE}&amp;body={URL}">Email</a></nav></footer>  </main>

  <nav class="site-footer">
    <section id="site-sectionnav" class="site-sectionnav" aria-label="Section Navigation"><a href='/earthquakes/feed/' class='up-one-level'>Feeds and Notifications</a><section><header>Real-time Notifications</header><a href="/ens/">Earthquake Notification Service</a><a href="https://twitter.com/usgsted">Tweet Earthquake Dispatch</a></section><section><header>Real-time Feeds</header><a href="/earthquakes/feed/v1.0/atom.php">ATOM</a><a href="/earthquakes/feed/v1.0/kml.php">KML</a><a class="selected" href="/earthquakes/feed/v1.0/csv.php">Spreadsheet</a><a href="/earthquakes/feed/v1.0/quakeml.php">QuakeML</a><a href="/earthquakes/feed/v1.0/geojson.php">GeoJSON Summary</a><a href="/earthquakes/feed/v1.0/geojson_detail.php">GeoJSON Detail</a></section><section><header>For Developers</header><a href="/fdsnws/event/1/">API Documentation - EQ Catalog</a><a href="/earthquakes/feed/v1.0/changelog.php">Change Log</a><a href="/earthquakes/feed/policy.php">Feed Lifecycle Policy</a><a href="/earthquakes/feed/v1.0/developers.php">Developer's Corner</a><a href="/ws/">Web Services</a><a href="https://public.govdelivery.com/accounts/USDOIGS/signup/39369">Mailing List-Announcements</a></section></section><section class="site-sitenav" aria-label="Site Navigation"><a href="https://earthquake.usgs.gov">Home</a><a href="https://www.usgs.gov/programs/earthquake-hazards/earthquakes">Earthquakes</a><a href="https://www.usgs.gov/programs/earthquake-hazards/hazards">Hazards</a><a href="https://www.usgs.gov/programs/earthquake-hazards/science">Science</a><a href="https://www.usgs.gov/programs/earthquake-hazards/products">Products</a><a href="https://www.usgs.gov/programs/earthquake-hazards/monitoring">Monitoring</a><a href="https://www.usgs.gov/programs/earthquake-hazards/education">Education</a><a href="https://www.usgs.gov/programs/earthquake-hazards/data">Data</a><a href="https://www.usgs.gov/programs/earthquake-hazards/maps">Maps</a><a href="https://www.usgs.gov/programs/earthquake-hazards/multimedia">Multimedia</a><a href="https://www.usgs.gov/programs/earthquake-hazards/publications">Publications</a><a href="https://www.usgs.gov/programs/earthquake-hazards/tools">Web Tools</a><a href="https://www.usgs.gov/programs/earthquake-hazards/software">Software</a><a href="https://www.usgs.gov/programs/earthquake-hazards/news">News</a><a href="https://www.usgs.gov/programs/earthquake-hazards/connect">Connect</a><a href="https://www.usgs.gov/programs/earthquake-hazards/partners">Partners</a><a href="https://www.usgs.gov/programs/earthquake-hazards/about">About</a></section>
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
