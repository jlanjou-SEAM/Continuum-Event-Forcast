<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>NOMADS Information</title><link rel="stylesheet" href="/bundles/noaatemplating/css/weather.css?2.3.27">
<link rel="stylesheet" href="/bundles/noaatemplating/css/com/header.css?2.3.27">
<link rel="stylesheet" href="/bundles/noaatemplating/css/com/navbar.css?2.3.27">
<link rel="stylesheet" href="/bundles/noaatemplating/css/com/footer.css?2.3.27">
<link rel="stylesheet" href="/css/nomads.css?2.3.27">
<script src="/bundles/noaatemplating/cdn/js/jquery.3.7.1.min.js?2.3.27"></script>
<script src="/js/nomads.js"></script>
<script>NS_CSM_td=1248075813;NS_CSM_pd=275116664;NS_CSM_u="/clm10";NS_CSM_col="AAAAAAU7PFvASuXrsHHkZhwBx+qVLMbVyYpf+xtt0I8tVCUB/VLsxGVxCjsC8Oh9Fg1n9gc=";</script><script type="text/javascript">function sendTimingInfoInit(){setTimeout(sendTimingInfo,0)}function sendTimingInfo(){var wp=window.performance;if(wp){var c1,c2,t;c1=wp.timing;if(c1){var cm={};cm.ns=c1.navigationStart;if((t=c1.unloadEventStart)>0)cm.us=t;if((t=c1.unloadEventEnd)>0)cm.ue=t;if((t=c1.redirectStart)>0)cm.rs=t;if((t=c1.redirectEnd)>0)cm.re=t;cm.fs=c1.fetchStart;cm.dls=c1.domainLookupStart;cm.dle=c1.domainLookupEnd;cm.cs=c1.connectStart;cm.ce=c1.connectEnd;if((t=c1.secureConnectionStart)>0)cm.scs=t;cm.rqs=c1.requestStart;cm.rss=c1.responseStart;cm.rse=c1.responseEnd;cm.dl=c1.domLoading;cm.di=c1.domInteractive;cm.dcls=c1.domContentLoadedEventStart;cm.dcle=c1.domContentLoadedEventEnd;cm.dc=c1.domComplete;if((t=c1.loadEventStart)>0)cm.ls=t;if((t=c1.loadEventEnd)>0)cm.le=t;cm.tid=NS_CSM_td;cm.pid=NS_CSM_pd;cm.ac=NS_CSM_col;var xhttp=new XMLHttpRequest();if(xhttp){var JSON=JSON||{};JSON.stringify=JSON.stringify||function(ob){var t=typeof(ob);if(t!="object"||ob===null){if(t=="string")ob='"'+ob+'"';return String(ob);}else{var n,v,json=[],arr=(ob&&ob.constructor==Array);for(n in ob){v=ob[n];t=typeof(v);if(t=="string")v='"'+v+'"';else if(t=="object"&&v!==null)v=JSON.stringify(v);json.push((arr?"":'"'+n+'":')+String(v));}return(arr?"[":"{")+String(json)+(arr?"]":"}");}};xhttp.open("POST",NS_CSM_u,true);xhttp.send(JSON.stringify(cm));}}}}if(window.addEventListener)window.addEventListener("load",sendTimingInfoInit,false);else if(window.attachEvent)window.attachEvent("onload",sendTimingInfoInit);else window.onload=sendTimingInfoInit;</script></head>
<body><main id="main"><header id="header" class="row">
   <a href="http://www.noaa.gov" id="header-noaa">
       <img src="/bundles/noaatemplating/images/header_noaa.png" 
            alt="National Oceanic and Atmospheric Administration">
   </a>
   <a href="https://www.weather.gov" id="header-nws">
       <img src="/bundles/noaatemplating/images/header_nws.png" 
            alt="National Weather Service">
   </a>
   <a href="http://www.commerce.gov" id="header-doc">
       <img src="/bundles/noaatemplating/images/header_doc.png" 
            alt="United States Department of Commerce">
   </a>
   <div style="clear:both"></div>
</header>

<div class="header-shadow">
  <div class="header-shadow-content"></div>
</div>
<nav id="topnav" class="nav navbar-top">
   <div id="m-menu" class="m-navbar">
      <button type="button" class="navbar-toggle">
         <span class="icon-bar"></span>
         <span class="icon-bar"></span>
         <span class="icon-bar"></span>
      </button>
   </div>
   <div id="menu" class="navbar">

      <ul class="nav-menu">
         <!--
         Doesn't work with the class.
         <li><a class="nav-menu-link" href="/">Home</a></li>
         -->
         <li><a class="" href="/">HOME</a></li>

         <li class="dropdown">
            <a class="nav-menu-link" href="https://www.weather.gov/forecastmaps">Forecast<span class="chevron"></span></a>
               <ul class="dropdown-menu" role="menu">
                  <li><a class="dropdown-link" href="https://www.weather.gov">Local</a></li>
                  <li><a class="dropdown-link" href="https://digital.weather.gov">Graphical</a></li>
                  <li><a class="dropdown-link" href="https://www.aviationweather.gov/">Aviation</a></li>
                  <li><a class="dropdown-link" href="https://www.weather.gov/marine">Marine</a></li>
                  <li><a class="dropdown-link" href="https://water.weather.gov/ahps/">Rivers and Lakes</a></li>
                  <li><a class="dropdown-link" href="https://www.nhc.noaa.gov/">Hurricanes</a></li>
                  <li><a class="dropdown-link" href="https://www.spc.noaa.gov/">Severe Weather</a></li>
                  <li><a class="dropdown-link" href="https://www.weather.gov/fire">Fire Weather</a></li>
                  <li><a class="dropdown-link" href="https://www.swpc.noaa.gov/">Space Weather</a></li>
                  <li><a class="dropdown-link" href="https://gml.noaa.gov/grad/solcalc/sunrise.html">Sun/Moon</a></li>
                  <li><a class="dropdown-link" href="https://www.cpc.ncep.noaa.gov/">Long Range Forecasts</a></li>
                  <li><a class="dropdown-link" href="https://www.cpc.ncep.noaa.gov">Climate Prediction</a></li>
               </ul>
         </li>

         <li class="dropdown">
            <a class="nav-menu-link" href="https://www.nws.noaa.gov/climate">Past&nbsp;Weather<span class="chevron"></span></a>
            <ul class="dropdown-menu" role="menu">
               <li><a href="https://w2.weather.gov/climate">Past Weather</a></li>
               <li><a href="https://w2.weather.gov/climate">Heating/Cooling Days</a></li>
               <li><a href="https://w2.weather.gov/climate">Monthly Temperatures</a></li>
               <li><a href="https://w2.weather.gov/climate">Records</a></li>
               <li><a href="https://www.usno.navy.mil">Astronomical Data</a></li>
            </ul>
         </li>

         <li class="dropdown">
            <a class="nav-menu-link" href="https://www.weather.gov/safety">Safety<span class="chevron"></span></a>
            <ul class="dropdown-menu" role="menu">
               <li><a href="https://www.weather.gov/safety/flood">Floods</a></li>
               <li><a href="https://www.nws.noaa.gov/om/Tsunami/index.html">Tsunami</a></li>
               <li><a href="https://www.weather.gov/safety/beachhazards">Beach Hazards</a></li>
               <li><a href="https://www.nws.noaa.gov/om/fire/">Wildfire</a></li>
               <li><a href="https://www.weather.gov/safety/cold">Cold</a></li>
               <li><a href="https://www.weather.gov/safety/tornado/">Tornadoes</a></li>
               <li><a href="https://www.weather.gov/safety/fog/">Fog</a>
               <li><a href="https://www.weather.gov/safety/airquality/">Air Quality</a></li>
               <li><a href="https://www.weather.gov/safety/heat">Heat</a></li>
               <li><a href="https://www.weather.gov/safety/hurricane">Hurricanes</a></li>
               <li><a href="https://www.weather.gov/safety/lightning">Lightning</a></li>
               <li><a href="https://www.weather.gov/safety/safeboating/">Safe Boating</a></li>
               <li><a href="https://www.weather.gov/safety/ripcurrent">Rip Currents</a></li>
               <li><a href="https://www.weather.gov/safety/thunderstorm/">Thunderstorms</a></li>
               <li><a href="https://www.weather.gov/safety/space">Space Weather</a></li>
               <li><a href="https://www.weather.gov/safety/heat-uv">Sun (Ultraviolet Radiation)</a></li>
               <li><a href="https://www.weather.gov/safetycampaign">Safety Campaigns</a></li>
               <li><a href="https://www.weather.gov/safety/wind">Wind</a></li>
               <li><a href="https://www.weather.gov/safety/drought/">Drought</a></li>
               <li><a href="https://www.weather.gov/safety/winter">Winter Weather</a></li>
            </ul>
         </li>

         <li class="dropdown">
            <a class="nav-menu-link" href="https://www.weather.gov/informationcenter">Information<span class="chevron"></span></a>
            <ul class="dropdown-menu" role="menu">
               <li><a href="https://www.weather.gov/wrn/wea">Wireless Emergency Alerts</a></li>
               <li><a href="https://www.weather.gov/owlie/publication_brochures">Brochures</a></li>
               <li><a href="https://www.weather.gov/wrn/">Weather-Ready Nation</a></li>
               <li><a href="https://www.nws.noaa.gov/om/coop/">Cooperative Observers</a></li>
               <li><a href="https://www.weather.gov/briefing/">Daily Briefing</a></li>
               <li><a href="https://www.nws.noaa.gov/om/hazstats.shtml">Damage/Fatality/Injury Statistics</a></li>
               <li><a href="https://mag.ncep.noaa.gov/">Forecast Models</a></li>
               <li><a href="https://www.weather.gov/gis">GIS Data Portal</a></li>
               <li><a href="https://www.nws.noaa.gov/nwr/">NOAA Weather Radio</a></li>
               <li><a href="https://www.weather.gov/publications">Publications</a></li>
               <li><a href="https://www.weather.gov/skywarn/">SKYWARN Storm Spotters</a></li>
               <li><a href="https://www.weather.gov/stormready/">StormReady</a></li>
               <li><a href="https://www.weather.gov/TsunamiReady">TsunamiReady</a></li>
               <li><a href="https://www.weather.gov/notification">Service Change Notices</a></li>
            </ul>
         </li>

         <li class="dropdown">
            <a class="nav-menu-link" href="https://www.weather.gov/owlie">Education<span class="chevron"></span></a>
            <ul class="dropdown-menu" role="menu">
               <li><a href="https://www.weather.gov/wrn/force">Be A Force of Nature</a></li>
               <li><a href="https://www.weather.gov/education">NWS Education Home</a></li>
            </ul>
         </li>

         <li class="dropdown">
            <a class="nav-menu-link" href="https://www.weather.gov/contact-media/">News<span class="chevron"></span></a>
            <ul class="dropdown-menu" role="menu">
               <li><a class="dropdown-link" href="https://www.weather.gov/news">NWS News</a></li>
               <li><a href="https://www.weather.gov/wrn/calendar">Events</a></li>
               <li><a href="https://www.weather.gov/socialmedia">Social Media</a></li>
               <li><a href="https://www.weather.gov/owlie/publication_brochures">Pubs/Brochures/Booklets </a></li>
               <li><a href="https://www.noaa.gov/NOAA-Communications">NWS Media Contacts</a></li>
            </ul>
         </li>

         <li class="dropdown">
            <a class="nav-menu-link site-search" href="https://www.weather.gov/search">Search<span class="chevron"></span></a>
            <ul class="dropdown-menu" role="menu" id="menu-search">
               <li>
                  <div id="site-search" class="">
                     <form method="get" action="//search.usa.gov/search">
                        <input type="hidden" name="v:project" value="firstgov">
                        <label for="query">Search For</label>
                        <input type="text" name="query" id="query" size="12">
                        <input type="submit" id="search-submit" value="Go">
                        <p>
                           <input type="radio" name="affiliate" checked="checked" value="nws.noaa.gov" id="nws">
                           <label for="nws" id="search-nws-label" class="search-scope">NWS</label>
                           <input type="radio" name="affiliate" value="noaa.gov" id="noaa">
                           <label for="noaa" id="search-noaa-label" class="search-scope">All NOAA</label>
                        </p>
                     </form>
                  </div>
               </li>
            </ul>
         </li>

         <li class="dropdown">
            <a class="nav-menu-link" href="https://www.weather.gov/about">About<span class="chevron"></span></a>
            <ul class="dropdown-menu" role="menu" id="menu-about">
               <li><a href="https://www.weather.gov/about">About NWS</a></li>
               <li><a href="https://www.weather.gov/organization">Organization</a></li>
               <li><a href="https://www.weather.gov/media/wrn/NWS_Weather-Ready-Nation_Strategic_Plan_2019-2022.pdf">Strategic Plan</a></li>
               <li><a href="https://www.weather.gov/careers/#diversity">Commitment to Diversity</a></li>
               <li><a href="https://sites.google.com/noaa.gov/nws-insider/home">For NWS Employees</a></li>
               <li><a href="https://www.weather.gov/international/">International</a></li>
               <li><a href="https://www.weather.gov/organization">National Centers</a></li>
               <li><a href="https://www.weather.gov/careers">Careers</a></li>
               <li><a href="https://www.weather.gov/contact">Contact Us</a></li>
               <li><a href="https://w1.weather.gov/glossary">Glossary</a></li>
            </ul>
         </li>

      </ul>

   </div> <!-- navbar -->
</nav>
<div class="nomads_header_bar largefont">NOAA Operational Model Archive and Distribution System</div><div class="help_line">
<div class="links_line">
<ul>

<li>
   <a href="http://www.ncep.noaa.gov/" title="National Centers for Environmental Prediction">NCEP</a> &gt;
   <a href="http://www.nco.ncep.noaa.gov/" title="NCEP Central Operations">NCO</a> &gt;&nbsp;
   <a href="/" title="NOMADS Home">NOMADS</a>
</li><li>
   &nbsp;&nbsp;|&nbsp;&nbsp;
</li><li>
  <a href="/info.php?page=overview" title="NOMADS Overview">NOMADS Overview</a>
</li><li>
   &nbsp;&nbsp;|&nbsp;&nbsp;
</li><li>
  <a href="/info.php?page=help">Information</a>
</li><li>
   &nbsp;&nbsp;|&nbsp;&nbsp;
</li><li>
  <a href="/info.php?page=documents">Documents</a>
</li><li>
   &nbsp;&nbsp;|&nbsp;&nbsp;
</li><li>
  <a href="/info.php?page=whatsnew">What's New?</a>
</li><li>
   &nbsp;&nbsp;|&nbsp;&nbsp;
</li><li>
  <a href="/status.php">NOMADS Status</a>
</li>

</ul>
</div>
</div>
<div id="nomads_body"><div id="home_body"><h1>What's New for NOMADS 2.3.27</h1>
<h2>HTTPS Data</h2>
<ul>
  <li>CIP v2.0</li>
  <ul>
    <li>CIP v2.0 moved to production.</li>
  </ul>
</ul>
<h1>What's New for NOMADS 2.3.26</h1>
<h2>HTTPS Data</h2>
<ul>
  <li>HAFS v2.2</li>
  <ul>
    <li>HAFS v2.2 moved to production.</li>
  </ul>
</ul>
<h1>What's New for NOMADS 2.3.25</h1>
<h2>HTTPS Data</h2>
<ul>
  <li>NWPS v1.5</li>
  <ul>
    <li>Parallel model data added for public evaluation</li>
  </ul>
</ul>
<h1>What's New for NOMADS 2.3.25</h1>
<h2>HTTPS Data</h2>
<ul>
  <li>CIP v2.0</li>
  <ul>
    <li>Parallel model data added for public evaluation</li>
  </ul>
</ul>
<h1>What's New for NOMADS 2.3.24</h1>
<h2>HTTPS Data</h2>
<ul>
  <li>HAFS v2.2</li>
  <ul>
    <li>Parallel model data added for public evaluation</li>
  </ul>
  <li>HYSPLIT v9.1</li>
  <ul>
    <li>Parallel model data added for public evaluation</li>
  </ul>
  <li>SPC Post Model v3.0</li>
  <ul>
    <li>Parallel model data added for public evaluation</li>
  </ul>
</ul>
<h1>What's New for NOMADS 2.3.23</h1>
<h2>HTTPS Data</h2>
<ul>
  <li>NWM v3.1</li>
  <ul>
    <li>NWM v3.1 moved to production.</li>
  </ul>
</ul>
<h1>What's New for NOMADS 2.3.22</h1>
<h2>HTTPS Data</h2>
<ul>
  <li>STOFS v3.1</li>
  <ul>
    <li>STOFS v3.1 moved to production.</li>
  </ul>
</ul>
<h1>What's New for NOMADS 2.3.21</h1>
<h2>HTTPS Data</h2>
<ul>
  <li>RRFS v1.0 and REFS v1.0</li>
  <ul>
    <li>RRFS v1.0 and REFS v1.0 added for public evaluation.</li>
  </ul>
</ul>
<h1>What's New for NOMADS 2.3.20</h1>
<h2>HTTPS Data</h2>
<ul>
  <li>NFC Ensemble</li>
  <ul>
    <li>Deprecated NFC Ensemble model</li>
  </ul>
</ul>
<h1>What's New for NOMADS 2.3.19</h1>
<h2>HTTPS Data</h2>
<ul>
  <li>GTGN v1.0</li>
  <ul>
    <li>GTGN v1.0 moved to production.</li>
  </ul>
</ul>
<h1>What's New for NOMADS 2.3.18</h1>
<h2>HTTPS Data</h2>
<ul>
  <li>SmartInit</li>
  <ul>
    <li>Deprecated SmartInit model</li>
  </ul>
  <li>AIGFS v1.1</li>
  <ul>
    <li>DAIGFS upgraded to v1.1</li>
  </ul>
</ul>
<h1>What's New for NOMADS 2.3.17</h1>
<h2>HTTPS Data</h2>
<ul>
  <li>National Water Model v3.1</li>
  <ul>
    <li>Parallel model data added for public evaluation</li>
  </ul>
</ul>
<h1>What's New for NOMADS 2.3.16</h1>
<h2>HTTPS Data</h2>
<ul>
  <li>GTGN v1.0</li>
  <ul>
    <li>GTGN v1.0 added for public evaluation.</li>
  </ul>
</ul>
<h1>What's New for NOMADS 2.3.15</h1>
<h2>HTTPS Data</h2>
<ul>
  <li>P-SURGE v3.2</li>
  <ul>
    <li>P-SURGE v3.2 moved to production.</li>
  </ul>
  <li>STOFS v3.1</li>
  <ul>
    <li>STOFS v3.1 added for public evaluation.</li>
  </ul>
</ul>
<h1>What's New for NOMADS 2.3.14</h1>
<h2>HTTPS Data</h2>
<ul>
  <li>P-Surge v3.2</li>
    <ul>
      <li>P-Surge v3.2 added for public evaluation.</li>
    </ul>
  </li>
</ul>
<h1>What's New for NOMADS 2.3.13</h1>
<h2>HTTPS Data</h2>
<ul>
  <li>National Blend of Models (NBM) v5.0</li>
    <ul>
      <li>NBM v5.0 moved to production.</li>
    </ul>
  </li>
    <li>HYSPLIT v9.0</li>
    <ul>
      <li>HYSPLIT v9.0 moved to production.</li>
    </ul>
  </li>
</ul>
<h2>Grib Filter</h2>
<ul>
  <li>National Blend of Models (NBM) v5.0</li>
    <ul>
      <li>NBM grib filter parameters updated to reflect NBM v5.0 changes.</li>
    </ul>
  </li>
</ul>
<h1>What's New for NOMADS 2.3.12</h1>
<h2>HTTPS Data</h2>
<ul>
  <li>DAFS</li>
    <ul>
      <li>DAFS v1.0 moved to production.</li>
    </ul>
  </li>
</ul>
<h1>What's New for NOMADS 2.3.11</h1>
<h2>HTTPS Data</h2>
<ul>
  <li>Conventional Observation Reanalysis (CORe) v1.0</li>
    <ul>
      <li>CORe v1.0 moved to production.</li>
    </ul>
  </li>
</ul>
<h1>What's New for NOMADS 2.3.10</h1>
<h2>HTTPS Data</h2>
<ul>
  <li>National Blend of Models (NBM) v5.0</li>
    <ul>
      <li>NBM v5.0 added for public evaluation.</li>
    </ul>
  </li>
  <li>HYSPLIT v9.0</li>
    <ul>
      <li>HYSPLIT v9.0 added for public evaluation.</li>
    </ul>
  </li>
</ul>
<h1>What's New for NOMADS 2.3.9</h1>
<h2>OpenDAP Removal</h2>
<ul>
  <li>Removal of OpenDAP model data</li>
</ul>
<h1>What's New for NOMADS 2.3.8</h1>
<h2>HTTPS Data</h2>
<ul>
  <li>Conventional Observation Reanalysis (CORe) v1.0</li>
    <ul>
      <li>CORe v1.0 added for public evaluation.</li>
    </ul>
  </li>
</ul>
<h1>What's New for NOMADS 2.3.7</h1>
<h2>HTTPS Data</h2>
<ul>
  <li>North American Rapid Refresh Ensemble (NARRE) Model Decommission</li>
    <ul>
      <li>Removal of NARRE model data</li>
    </ul>
  </li>
</ul>
<h1>What's New for NOMADS 2.3.6</h1>
<h2>OpenDAP Migration Guide</h2>
<ul>
  <li>New <a href="info.php?page=opendap_grib_migration">OpenDAP to Grib Filter Migration</a> page added.</li>
</ul>
<h1>What's New for NOMADS 2.3.5</h1>
<h2>HTTPS Data</h2>
<ul>
  <li>AIGFS, AIGEFS, and HGEFS</li>
    <ul>
      <li>AIGFS v1.0, AIGEFS v1.0, and HGEFS v1.0 moved to production.</li>
    </ul>
  </li>
</ul>
<h1>What's New for NOMADS 2.3.4</h1>
<h2>HTTPS Data</h2>
<ul>
  <li>AIGFS, AIGEFS, and HGEFS</li>
    <ul>
      <li>AIGFS v1.0, AIGEFS v1.0, and HGEFS v1.0 added for public evaluation.</li>
    </ul>
  </li>
</ul>
<h1>What's New for NOMADS 2.3.3</h1>
<h2>HTTPS Data</h2>
<ul>
  <li>DAFSv1.0</li>
    <ul>
      <li>DAFSv1.0 added for public evaluation.</li>
    </ul>
  </li>
  <li>UKMET</li>
    <ul>
      <li>Deprecated UKMET external model link removed.</li>
    </ul>
  </li>
</ul>
<h1>What's New for NOMADS 2.3.2</h1>
<h2>HTTPS Data</h2>
<ul>
  <li>LAMPv2.7 and GLMPv2.7</li>
    <ul>
      <li>LAMPv2.7 and GLMPv2.7 moved to production.</li>
    </ul>
  </li>
</ul>
<h1>What's New for NOMADS 2.3.1</h1>
<h2>HTTPS Data</h2>
<ul>
  <li>ETSSv1.4, PETSSv1.4</li>
    <ul>
      <li>ETSSv1.4, PETSSv1.4 moved to production.</li>
    </ul>
  </li>
</ul>
<h1>What's New for NOMADS 2.3.0</h1>
<h2>Features</h2>
<ul>
  <li>Addition of a human readable NOMADS Status Page</li>
  <li>Addition of a machine readable NOMADS Status JSON</li>
</ul>
<h1>What's New for NOMADS 2.2.19</h1>
<h2>HTTPS Data</h2>
<ul>
  <li>LAMPv2.7 and GLMPv2.7</li>
    <ul>
      <li>LAMPv2.7 and GLMPv2.7 added for public evaluation.</li>
    </ul>
  </li>
</ul>
<h1>What's New for NOMADS 2.2.18</h1>
<h2>HTTPS Data</h2>
<ul>
  <li>NWMv3.1 Pre-Para</li>
    <ul>
      <li>NWMv3.1 Pre-para data moved to hydrology.nws.noaa.gov for public evaluation.</li>
    </ul>
  </li>
</ul>
<h1>What's New for NOMADS 2.2.17</h1>
<h2>HTTPS Data</h2>
<ul>
    <li>HAFSv2.1, RTOFSv2.5 ETSSv1.4, PETSSv1.4</li>
    <ul>
      <li>HAFSv2.1 and RTOFSv2.5 model moved to production.</li>
      <li>ETSSv1.4, PETSSv1.4 added for public evaluation.</li>
    </ul>
  </li>
</ul>
<h1>What's New for NOMADS 2.2.16</h1>
<h2>HTTPS Data</h2>
<ul>
    <li>HAFSv2.1 and RTOFSv2.5</li>
    <ul>
      <li>Parallel HAFSv2.1 and RTOFSv2.5 model data added for public evaluation</li>
    </ul>
  </li>
</ul>
<h1>What's New for NOMADS 2.2.15</h1>
<h2>HTTPS Data</h2>
<ul>
    <li>National Blend of Models v4.3</li>
    <ul>
      <li>Production National Blend of Models v4.3 model data added and PRSVR variable added to grib filter.</li>
      <li>Parallel model data removed</li>
    </ul>
    <li>SPC Post Model v2.1</li>
    <ul>
      <li>Production SPC Post v2.1 model data added and new lightning density added to grib filter. Text description has also been updated.</li>
      <li>Parallel model data removed</li>
    </ul>
</ul>
<h1>What's New for NOMADS 2.2.14</h1>
<h2>HTTPS Data</h2>
<ul>
    <li>P-Surgev3.1</li>
    <ul>
      <li>Production P-Surgev3.1 model data added to main page and text description updated for P-SURGE/ETSS/PETSS</li>
    </ul>
  </li>
  <li>P-Surge Para link removed</li>
    <ul>
      <li>Parallel model data removed</li>
    </ul>
  </li>
</ul>
<h1>What's New for NOMADS 2.2.13</h1>
<h2>HTTPS Data</h2>
<ul>
    <li>National Blend of Models v4.3</li>
    <ul>
      <li>Parallel model data added for public evaluation</li>
    </ul>
  </li>
  <li>SPC Post Model v2.1</li>
    <ul>
      <li>Parallel model data added for public evaluation</li>
    </ul>
  </li>
</ul>
<h1>What's New for NOMADS 2.2.12</h1>
<h2>HTTPS Data</h2>
<ul>
    <li>P-Surge v3.1</li>
    <ul>
      <li>Parallel model data added for public evaluation</li>
    </ul>
  </li>
</ul>
<h1>What's New for NOMADS 2.2.11</h1>
<h2>HTTPS Data</h2>
<ul>
    <li>National Water Model v3.1</li>
    <ul>
      <li>Parallel model data added for public evaluation</li>
    </ul>
  </li>
</ul>
<h1>What's New for NOMADS 2.2.10</h1>
<h2>Executive Order 14172</h2>
<ul>
  <li>Changed all references of Gulf of Mexico to Gulf of America</li>
</ul>
<h1>What's New for NOMADS 2.2.9</h1>
<h2>HTTPS Data</h2>
<ul>
  <li>LAMP & Gridded LAMP Models v2.6</li>
    <ul>
      <li>Production model data added</li>
      <li>Parallel model data removed</li>
    </ul>
</ul>
<h2>Security Update</h2>
<ul>
  <li>Update to jQuery v3.7.1</li>
</ul>
<h1>What's New for NOMADS 2.2.8</h1>
<h2>HTTPS Data</h2>
<ul>
  <li>LAMP & Gridded LAMP Models v2.6</li>
    <ul>
      <li>Parallel model data added for public evaluation</li>
    </ul>
  </li>
</ul>
<h1>What's New for NOMADS 2.2.3</h1>
<h2>Grib Filter</h2>
<ul>
<li>New models or updated model parameters
  <ul>
    <li>GLWU (Great Lakes Wave Unstructured)</li>
  </ul>
</li>
</ul>
<h1>What's New for NOMADS 2.2.2</h1>
<h2>Grib Filter</h2>
<ul>
<li>New models or updated model parameters
  <ul>
    <li>ESTOFS Global replace by STOFS 2D Global and STOFS 3D Atlantic</li>
    <li>NBM (National Blend of Models) updated</li>
  </ul>
</li>
</ul>
<h1>What's New for NOMADS 2.2.0</h1>
<h2>Grib Filter</h2>
<ul>
<li>New models or updated model parameters
  <ul>
    <li>GDAS, GDAS 0.25 </li>
    <li>GFS 0.25 Degree Hourly </li>
    <li>GFS 0.50 Degree </li>
    <li>GFS 1.00 Degree </li>
    <li>GFS Ensemble 0.25 Degree </li>
    <li>GFS Ensemble 0.5 Degree </li>
    <li>GFS Ensemble 0.5 Degree (Secondary Params) </li>
    <li>GFS Ensemble Chem 0.25 Degree </li>
    <li>GFS Ensemble Chem 0.5 Degree </li>
    <li>GFS Ensemble Wave </li>
    <li>LAMP and GLMP</li>
    <li>HWRF </li>
    <li>HIRESW </li>
    <li>NBM (National Blend of Models) </li>
    <li>Nearshore Wave Prediction System (regional)</li>
    <li>ETSS and P-ETSS</li>
    <li>RAP</li>
  </ul>
</li>
<li>"Make Subregion" checkbox automatically checked when latitude or longitude is changed.</li>
<li>Updated data set descriptions.</li>
</ul>
<br>
<h1>What's New for NOMADS 2.0/2.1</h1>
<h2>Improved NOMADS GribFilter User Interface</h2>
<br>
<h3>- Home page:</h3>
<ul>
<li>Replaced old header/sidebar/footer with new National Weather Service banner and footer.</li>
<li>Consolidated information and documents into a row of links located under the top banner.</li>
<li>Removed the 'HREF Guam' data set links since no data is produced for it.</li>
</ul>
<h3>- Grib Filter Search/Subset page:</h3>
<ul>
<li>PHP is used to build one page containing all model selection options, instead of clicking for each option one at a time</li>
<li>Changed the name 'Variables' to 'Parameters'.</li>
<li>Help is provided to identify which parameters are found in which level, and vice versa, by highlighting the names.  When a parameter name is clicked, the corresponding levels will be highlighted.  Likewise, when a level name is clicked, the corresponding parameters will be highlighted.</li>
<li>Added new buttons 'Check All' and 'Uncheck All' for parameters and levels.</li>
<li>Added new button 'Check All Highlighted' for parameters and levels.</li>
<li>Added information describing how to use the new Parameters/Levels highlighting.</li>
<li>The 'Show URL' option that displays the code that can be used to download the user's selections is shown in a text box, rather than posting to a new page.</li>
</ul>
<h2>Improved Perl Scripts</h2>
<ul>
<li>Fixed NAM Alaska surface vars (11.25km) link to point to NCEP NAM (ETA) AK Forecasts- Surface Variables. The production erroneously points to NCEP NAM (ETA) AK Forecasts- Pressure Level Variables. Note that (a) the grib2 file names are different and (b) The available data levels for a specific parameter is also different.</li>
<li>Fixed perl script errors that show up in the CGI logs.  After the fixes, the model dataset selection from the grib filter shows no errors in the cgi logs.</li>
</ul>
<h2>Improved Security</h2>
<ul>
<li>Version 2.1 addresses security vulnerabilities found in version 2.0.</li>
</ul>
<br>
</div></div><div id="version_line"> NCEP NOMADS Version 2.3.27, October 2026 </div><footer id="footer">
   <!-- footer.twig -->
   <div class="footer-legal">

      <div id="footerLogo" class="grid col-20">
         <a href="http://www.usa.gov"><img src="/bundles/noaatemplating/images/usa_gov.png" alt="usa.gov" width="110" height="30"></a>
      </div>

      <div class="grid col-25">
         <ul class="list-unstyled">
            <li><a href="http://www.commerce.gov">US Dept of Commerce</a></li>
            <li><a href="http://www.noaa.gov">National Oceanic and Atmospheric Administration</a></li>
            <li><a href="https://www.weather.gov">National Weather Service</a></li>
            <li><a href="http://www.ncep.noaa.gov/">National Centers for Environmental Prediction</a></li>
            <li><span class="smallTxt" style="color:blue">5830 University Research Court</span></li>
            <li><span class="smallTxt" style="color:blue">College Park, MD  20740</span></li>
            <li><a href="http://www.nco.ncep.noaa.gov/mail_webmaster/">NCEP Internet Services Team</a></li>
         </ul>
      </div>

      <div class="grid col-25">
         <ul class="list-unstyled">
            <li><a href="https://www.weather.gov/disclaimer">Disclaimer</a></li>
            <li><a href="http://www.cio.noaa.gov/services_programs/info_quality.html">Information Quality</a></li>
            <li><a href="https://www.weather.gov/help">Help</a></li>
            <li><a href="https://www.weather.gov/glossary">Glossary</a></li>
            <li><a href="https://www.weather.gov/contact">Comments? Questions? Please Contact Us</a></li>
         </ul>
      </div>

      <div class="grid col-25">
         <ul class="list-unstyled">
            <li><a href="https://www.weather.gov/privacy">Privacy Policy</a></li>
            <li><a href="https://www.noaa.gov/information-technology/foia">Freedom of Information Act (FOIA)</a></li>
            <li><a href="https://www.weather.gov/about">About Us</a></li>
            <li><a href="https://www.weather.gov/careers">Career Opportunities</a></li>
         </ul>
      </div>

   </div>
   <!-- end footer.twig -->
</footer>
<script src="/bundles/noaatemplating/js/general-dom.js?2.3.27"></script>
<script src="/bundles/noaatemplating/cdn/js/modernizr.2.8.3.min.js?2.3.27"></script>
<script src="/bundles/noaatemplating/js/nav.js?2.3.27"></script>
<script src="/bundles/noaatemplating/cdn/js/jquery.autocomplete.1.2.22.min.js?2.3.27"></script>
<script src="/bundles/noaatemplating/cdn/js/store+json.1.3.20.min.js?2.3.27"></script>
<script src="/bundles/noaatemplating/js/forecast.search.js?2.3.27"></script>

</main></body>
</html>

