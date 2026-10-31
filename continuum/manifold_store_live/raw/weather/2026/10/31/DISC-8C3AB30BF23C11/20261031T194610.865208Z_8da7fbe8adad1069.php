<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="DC.title" content="Tropical Guidance: Models and Storms">
<meta name="DC.description" content="Displays Tropical Guidance Models and Storms for a user to choose from">
<meta name="DC.creator" content="DOC/NOAA/NWS/NCEP Central Operations">
<meta name="DC.publisher" content="NOAA's National Weather Service">
<meta name="DC.contributor" content="NOAA/NWS/Software Development Branch">
<meta name="DC.rights" content="http://www.weather.gov/disclaimer.php">
<meta name="DC.robot" content="index,follow">
<meta name="DC.Distribution" content="Global">
<meta name="DC.date.created" content="2017-12-29">
<meta name="DC.date.reviewed" content="2018-01-15">
<meta name="DC.language" content="en-us">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Tropical Guidance: Models and Storms</title>
<link rel="stylesheet" href="/bundles/noaatemplating/css/weather.css?MAGv7.0.0">
<link rel="stylesheet" href="/css/main.css?MAGv7.0.0">
<link rel="stylesheet" href="/bundles/noaatemplating/css/com/header.css?MAGv7.0.0">
<link rel="stylesheet" href="/bundles/noaatemplating/css/com/navbar.css?MAGv7.0.0">
<link rel="stylesheet" href="/bundles/noaatemplating/css/com/footer.css?MAGv7.0.0">
<link rel="stylesheet" href="/css/mag_styles.css?MAGv7.0.0">
<script src="/bundles/noaatemplating/cdn/js/jquery.3.7.1.min.js?MAGv7.0.0"></script><script src="/js/image_scripts.js?MAGv7.0.0"></script>
<script src="/js/mag_scripts.js?MAGv7.0.0"></script>
<script src="/js/ajax.js?MAGv7.0.0"></script>
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-G1F0K33KY9"></script>
<script async src="js/google-analytics-setup.js"></script>
</head><body><main id="main"><header id="header" class="row">
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
<div class="mag_header_bar largefont">   Model Analyses and Guidance</div>

<table class="noborder_center_100">
  <tr>
    <td style="text-align: center; width: 15%">
      <!-- back button -->
      <button type="button" id="backButton" class="nav_button">Back</button>
    </td>
    <td style="text-align: center">
      <!-- Heading -->
      <span class="page_heading">Tropical Guidance</span>
    </td>
    <td style="text-align: center; width: 15%">
      <!-- home button -->
      <button type="button" id="homeButton" class="nav_button">Home</button>
    </td>
  </tr>
</table>

<div class="noborder_center_100">
   <div style="width:100%;text-align:center;">
      <span id="selection_prompt" class="page_sub_heading boldorange" >
           To view images, select a Model Type and Model Storm
      </span>
      <button type="button" class="info_button" id="resetSelectionButton">Reset Selection</button>

   </div>
</div>
<br>

<table id="modtype" class="param_table">
<tr> 
<th id="Model_Type" class="param_header_bar Model Type" colspan="4" title="Model Type"><div class="param_text_header">Model Type</div></th> 
</tr> 
<tr> 
<td headers="Model_Type" class="border_td HFSA-PARENT" > 
<div class="param_text"> 
<a id='modtype_HFSA-PARENT' class='js-model-link HFSA-PARENT' href='#' data-group='Tropical Guidance' data-model='HFSA-PARENT' title='Hurricane Analysis and Forecast System-A - Full Domain'>HFSA-PARENT</a></div>
</td>
<td headers="Model_Type" class="border_td HFSA-NESTED" > 
<div class="param_text"> 
<a id='modtype_HFSA-NESTED' class='js-model-link HFSA-NESTED' href='#' data-group='Tropical Guidance' data-model='HFSA-NESTED' title='Hurricane Analysis and Forecast System-A - Nested Domain'>HFSA-NESTED</a></div>
</td>
<td headers="Model_Type" class="border_td HFSB-PARENT" > 
<div class="param_text"> 
<a id='modtype_HFSB-PARENT' class='js-model-link HFSB-PARENT' href='#' data-group='Tropical Guidance' data-model='HFSB-PARENT' title='Hurricane Analysis and Forecast System-B Full Domain'>HFSB-PARENT</a></div>
</td>
<td headers="Model_Type" class="border_td HFSB-NESTED" > 
<div class="param_text"> 
<a id='modtype_HFSB-NESTED' class='js-model-link HFSB-NESTED' href='#' data-group='Tropical Guidance' data-model='HFSB-NESTED' title='Hurricane Analysis and Forecast System-B - Nested Domain'>HFSB-NESTED</a></div>
</td>
</tr>
<tr> 
<td headers="Model_Type" class="border_td ATCF" > 
<div class="param_text"> 
<a id='modtype_ATCF' class='js-model-link ATCF' href='#' data-group='Tropical Guidance' data-model='ATCF' title='Automated Tropical Cyclone Forecast - Track/Intensity Model Guidance'>ATCF</a></div>
</td>
<td headers="Model_Type" class="border_td " > 
<div class="param_text"> 
&nbsp;</div>
</td>
<td headers="Model_Type" class="border_td " > 
<div class="param_text"> 
&nbsp;</div>
</td>
<td headers="Model_Type" class="border_td " > 
<div class="param_text"> 
&nbsp;</div>
</td>
</tr>
</table>
<table id="modstorm" class="param_table" > 
<tr> 
<th id="Model_Storm" class="param_header_bar Model Storm" colspan="2" title="Model Storm"><div class="param_text_header">Model Storm</div></th> 
</tr> 
<tr> 
<td headers="Model_Storm" class="border_td in-fa30w" > 
<div class="param_text"><a id='modstorm_in-fa30w' class='js-storm-link in-fa30w' href='#' data-group='Tropical Guidance' data-storm='in-fa30w' title='in-fa30w'>in-fa30w</a></div> 
</td> 
<td headers="Model_Storm" class="border_td invest91b" > 
<div class="param_text"><a id='modstorm_invest91b' class='js-storm-link invest91b' href='#' data-group='Tropical Guidance' data-storm='invest91b' title='invest91b'>invest91b</a></div> 
</td> 
</tr> 
</table> 
 

<table class="param_table" >
  <tr>
    <td class="border_td">
      <img alt="nco_world Page" id="world_map_id" src="mag_images/mag-world-background.gif" />
    </td>
  </tr>
</table>

<div id="fourPanelData" data-fourpanel="&quot;&quot;"></div><div id="pageInfo" data-self-url="/tropical-guidance-model-storm.php"></div><div id="modelStorm2dData" data-storms="[[],[&quot;&quot;,&quot;HFSA-PARENT&quot;,&quot;in-fa30w&quot;],[&quot;&quot;,&quot;HFSA-PARENT&quot;,&quot;invest91b&quot;],[&quot;&quot;,&quot;HFSA-NESTED&quot;,&quot;in-fa30w&quot;],[&quot;&quot;,&quot;HFSA-NESTED&quot;,&quot;invest91b&quot;],[&quot;&quot;,&quot;ATCF&quot;,&quot;in-fa30w&quot;],[&quot;&quot;,&quot;ATCF&quot;,&quot;invest91b&quot;]]"></div><div id="modelArea2dData" data-model-areas="&quot;&quot;"></div><div id="stormModel2dData" data-storms-models="[[],[&quot;&quot;,&quot;in-fa30w&quot;,&quot;HFSA-PARENT&quot;],[&quot;&quot;,&quot;invest91b&quot;,&quot;HFSA-PARENT&quot;],[&quot;&quot;,&quot;in-fa30w&quot;,&quot;HFSA-NESTED&quot;],[&quot;&quot;,&quot;invest91b&quot;,&quot;HFSA-NESTED&quot;],[&quot;&quot;,&quot;in-fa30w&quot;,&quot;ATCF&quot;],[&quot;&quot;,&quot;invest91b&quot;,&quot;ATCF&quot;]]"></div><div id="areaModel2dData" data-area-models="&quot;&quot;"></div><div id="cycleInfo" data-cycle-name="&quot;&quot;"></div><div id="paramData" data-param-name="&quot;&quot;"></div><noscript>The MAG website requires JavaScript. Please enable JavaScript.</noscript>

    <script src="js/mag_scripts_json.js"></script>
    <script src="js/tropicalguidance_scripts.js"></script>

<div id="mag_info_bar" class="center smallfont">
  <a class="redhover" href="version_updates.php" target="_blank">What's New | </a>
  <a class="redhover" href="help/index.php" target="_blank">User's Guide |</a>
  <a class="redhover" href="docs/faq.pdf" target="_blank">Frequently Asked Questions | </a>
  <a class="redhover" href="docs/NCEP_PDD_MAG.pdf" target="_blank">Product Description Document</a>

  <br>

  MAG v7.0.0
  &nbsp; &nbsp; &nbsp; College Park, MD

</div>

<footer id="footer">
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
            <li><a href="https://www.foia.gov/">Freedom of Information Act (FOIA)</a></li>
            <li><a href="https://www.weather.gov/about">About Us</a></li>
            <li><a href="https://www.weather.gov/careers">Career Opportunities</a></li>
         </ul>
      </div>

   </div>
   <!-- end footer.twig -->
</footer>
<span class="gray" style="margin-left:20px">Page last modified:August 17 2026 18:43 PM UTC.</span><script src="/bundles/noaatemplating/js/general-dom.js?MAGv7.0.0"></script>
<script src="/bundles/noaatemplating/cdn/js/modernizr.2.8.3.min.js?MAGv7.0.0"></script>
<script src="/bundles/noaatemplating/js/nav.js?MAGv7.0.0"></script>
<script src="/bundles/noaatemplating/cdn/js/jquery.autocomplete.1.2.22.min.js?MAGv7.0.0"></script>
<script src="/bundles/noaatemplating/cdn/js/store+json.1.3.20.min.js?MAGv7.0.0"></script>
<script src="/bundles/noaatemplating/js/forecast.search.js?MAGv7.0.0"></script>

</main>
</body>
</html>

