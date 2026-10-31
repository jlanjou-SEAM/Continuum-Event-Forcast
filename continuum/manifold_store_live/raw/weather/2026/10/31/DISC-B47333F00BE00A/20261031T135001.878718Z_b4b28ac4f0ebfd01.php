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
<script>NS_CSM_td=1248386616;NS_CSM_pd=275116648;NS_CSM_u="/clm10";NS_CSM_col="AAAAAAU9/a8Ee7UMGUHItxTNG98tmawtqJgfMxvU+HUJOnqeVwuLXGqasGJvw0p4tr80oBw=";</script><script type="text/javascript">function sendTimingInfoInit(){setTimeout(sendTimingInfo,0)}function sendTimingInfo(){var wp=window.performance;if(wp){var c1,c2,t;c1=wp.timing;if(c1){var cm={};cm.ns=c1.navigationStart;if((t=c1.unloadEventStart)>0)cm.us=t;if((t=c1.unloadEventEnd)>0)cm.ue=t;if((t=c1.redirectStart)>0)cm.rs=t;if((t=c1.redirectEnd)>0)cm.re=t;cm.fs=c1.fetchStart;cm.dls=c1.domainLookupStart;cm.dle=c1.domainLookupEnd;cm.cs=c1.connectStart;cm.ce=c1.connectEnd;if((t=c1.secureConnectionStart)>0)cm.scs=t;cm.rqs=c1.requestStart;cm.rss=c1.responseStart;cm.rse=c1.responseEnd;cm.dl=c1.domLoading;cm.di=c1.domInteractive;cm.dcls=c1.domContentLoadedEventStart;cm.dcle=c1.domContentLoadedEventEnd;cm.dc=c1.domComplete;if((t=c1.loadEventStart)>0)cm.ls=t;if((t=c1.loadEventEnd)>0)cm.le=t;cm.tid=NS_CSM_td;cm.pid=NS_CSM_pd;cm.ac=NS_CSM_col;var xhttp=new XMLHttpRequest();if(xhttp){var JSON=JSON||{};JSON.stringify=JSON.stringify||function(ob){var t=typeof(ob);if(t!="object"||ob===null){if(t=="string")ob='"'+ob+'"';return String(ob);}else{var n,v,json=[],arr=(ob&&ob.constructor==Array);for(n in ob){v=ob[n];t=typeof(v);if(t=="string")v='"'+v+'"';else if(t=="object"&&v!==null)v=JSON.stringify(v);json.push((arr?"":'"'+n+'":')+String(v));}return(arr?"[":"{")+String(json)+(arr?"]":"}");}};xhttp.open("POST",NS_CSM_u,true);xhttp.send(JSON.stringify(cm));}}}}if(window.addEventListener)window.addEventListener("load",sendTimingInfoInit,false);else if(window.attachEvent)window.attachEvent("onload",sendTimingInfoInit);else window.onload=sendTimingInfoInit;</script></head>
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
<div id="nomads_body"><div id="home_body"><h1>Fast downloading of GRIB2 Files from the NCEP NOMADS Server<br>(Partial HTTP Transfers)</h1>

<h2>Introduction</h2>

<p>
Using this procedure, you can download just the data you need from a remote GRIB2 file.
</p><p>
Note that in the examples
below, the convention for the index files uses the ".idx" suffix, used
on both the WOC ftpprd.ncep.noaa.gov server and the nomads.ncep.noaa.gov server.
</p><p>
These instructions were adapted for this site from
<a href="http://www.cpc.ncep.noaa.gov/products/wesley/fast_downloading_grib.html" target="_blank" rel="noopener noreferrer">
Wesley Ebisuzaki's Fast Downloading of GRIB files</a> website.&nbsp; Please visit this site for more details.
</p>

<h2>Details</h2>

<p>
The http protocol allows "random access" reading of GRIB files.&nbsp; This procedure requires an index file and an http
program that supports random access.&nbsp;&nbsp; The <a href="http://www.cpc.ncep.noaa.gov/products/wesley/wgrib.html">
wgrib</a> inventory is used for the index file, and <a href="http://curl.haxx.se/">cURL</a> is used for the random-access http program.&nbsp;&nbsp;
Both are freely
available, widely used, work on many platforms and are easily
scripted/automated/put into a cronjob.&nbsp; Two perl scripts are also
required, get_inf.pl and get_grib.pl,&nbsp; which are downloadable from
the NCEP CPC website (see "Requirements" below).
</p><p>
The basic format of the quick download is:
</p> <p>
&nbsp;&nbsp;&nbsp;get_inv.pl <span style="font-weight: bold;">INV_URL</span> | grep <span style="font-weight: bold;">FIELDS</span> | get_grib.pl <span style="font-weight: bold;">GRIB_URL</span> <span style="font-weight: bold;">OUTPUT</span>
&nbsp;
</p>

<ul>
<li>
  INV_URL is the URL of a wgrib inventory, for example:<br>
  http://nomad.ncep.noaa.gov/pub/data/nccf/com/gfs/prod/gfs.2008120200/gfs.t00z.pgrbf12.grib2.idx
</li><li>
  FIELDS is string that selects the desired fields (wgrib compatible), for example:<br>
  ":HGT:500 mb:"
</li><li>
  GRIB_URL is the URL of the grib file, for example: <br>
  http://nomad.ncep.noaa.gov/pub/data/nccf/com/gfs/prod/gfs.2008120200/gfs.t00z.pgrbf12.grib2
</li><li>
  OUTPUT is the name of the for the downloaded grib file<br>
</li>
</ul>

<p>
The "get_inv.pl INV_URL" downloads the wgrib inventory off the net and adds
a range field.
</p><p>
The "grep FIELDS" uses the grep command to select desired
fields from the inventory.  Use of the "grep FIELDS" is similar to the
procedure used when using wgrib to extract fields.
</p><p>
The "get_grib.pl
GRIB_URL OUTPUT" uses the filtered inventory to select the fields
from GRIB_URL to download. The selected fields are saved in OUTPUT.&nbsp;&nbsp;
</p><p>
See the <a href="http://www.cpc.ncep.noaa.gov/products/wesley/wgrib.html">
wgrib home page</a> for more information and tricks on using grep and egrep.
</p>

<h2>Examples</h2>

<br><strong>This example downloads the the 500 mb height from the 12 hour (f12) from the 00Z (t00z)
GFS fcst from the NCEP NOMAD server:</strong><br><br>

INV_URL="http://nomad.ncep.noaa.gov/pub/data/nccf/com/gfs/prod/gfs.20081202100gfs.t00z.pgrbf12.grib2.idx"<br>
GRIB_URL="http://nomad.ncep.noaa.gov/pub/data/nccf/com/gfs/prod/gfs.2008120200/gfs.t00z.pgrbf12.grib2"<br>
      get_inv.pl $INV_URL | grep ":HGT:500 mb:" | get_grib.pl $GRIB_URL out.grb<br>


<br><strong>This example is similar to the above example except it downloads both the
500 mb height and the 1000 mb temperature:</strong><br><br>

INV_URL="http://nomad.ncep.noaa.gov/pub/data/nccf/com/gfs/prod/gfs.20081202100gfs.t00z.pgrbf12.grib2.idx"<br>
GRIB_URL="http://nomad.ncep.noaa.gov/pub/data/nccf/com/gfs/prod/gfs.2008120200/gfs.t00z.pgrbf12.grib2"<br>
get_inv.pl $INV_URL| grep "(:HGT:500 mb:|:TMP:1000 mb:)" | get_grib.pl&nbsp; $GRIB_URL out.grb<br><br>

<br><strong> If you want to download multiple fields, for example, precipitation and 2 meter temperature, you
can type, &nbsp;</strong><br><br>

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;URL="http://nomads.ncep.noaa.gov/data/nccf/com/gfs/prod/gfs.2006070312/gfs.t12z.pgrb2f00.grib2"<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;get_inv.pl $URL.idx | egrep ':(PRATE|TMP:2 m above gnd):' | get_grib.pl $URL out<br>
<br>
The above code will put the precipiation and 2-m temp in the file "out". Egrep understands
regular expressions which is a very powerful feature.<br>

<br><strong>If you are doing multiple downloads from the same file, you can save time by keeping a local
copy of the inventory.  For example:</strong> <br>

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;URL="http://nomads.ncep.noaa.gov/data/nccf/com/gfs/prod/gfs.2006070312/gfs.t12z.pgrb2f00.grib2"<br>

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;get_inv.pl $URL.idx &gt; my_inv<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;grep ":UGRD:" &lt; my_inv | get_grib.pl $URL ugrd.grb<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;grep ":VGRD:" &lt; my_inv | get_grib.pl $URL vgrd.grb<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;grep ":TMP:" &lt; my_inv | get_grib.pl $URL tmp.grb<br>
&nbsp;<br>
The above code saves two extra downloads of the inventory.&nbsp;

<br><br>

<h2>Requirements</h2>

<ol>
<li>
  perl
</li><li> 
  grep
</li><li> 
  <a href="http://curl.haxx.se/">cURL</a>
</li><li>
  grib files and their wgrib inventory on an http server
</li><li> 
  <a href="ftp://ftp.cpc.ncep.noaa.gov/wd51we/fast_downloading_grib/get_inv.pl">get_inv.pl</a>
</li><li> 
  <a href="ftp://ftp.cpc.ncep.noaa.gov/wd51we/fast_downloading_grib/get_grib.pl">get_grib.pl</a>
</li>
</ol>

<h2>Configuration (UNIX/Linux)</h2>
<p>
The first two lines of get_inv.pl and get_grib.pl need to be modified.
The first line should point to your perl interpreter. The
second line needs to point to the location of curl if it is not
on your path.<br><br>
</p>

<h2>Usage: Windows</h2>
<p>
There have been some reports that the perl scripts didn't work on Windows machines. Please see 
<a href="http://www.cpc.ncep.noaa.gov/products/wesley/fast_downloading_grib.html" target="_blank" rel="noopener noreferrer">
Wesley Ebisuzaki's Fast Downloading of GRIB files page </a>
for more information and solutions to Windows access problems.<br>
</p>


<br><br>
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

