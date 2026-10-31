<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Grib Filter glwu</title><link rel="stylesheet" href="/bundles/noaatemplating/css/weather.css?2.3.27">
<link rel="stylesheet" href="/bundles/noaatemplating/css/com/header.css?2.3.27">
<link rel="stylesheet" href="/bundles/noaatemplating/css/com/navbar.css?2.3.27">
<link rel="stylesheet" href="/bundles/noaatemplating/css/com/footer.css?2.3.27">
<link rel="stylesheet" href="/css/nomads.css?2.3.27">
<script src="/bundles/noaatemplating/cdn/js/jquery.3.7.1.min.js?2.3.27"></script>
<script src="/js/nomads.js"></script>
<script>NS_CSM_td=1249805212;NS_CSM_pd=275116650;NS_CSM_u="/clm10";NS_CSM_col="AAAAAAWqI4Lta+kg93ezHPVT1FKsQRx5IZ7MZHHzYYoIzUTwbt1/slNBCoAZukdPsI/jyo8=";</script><script type="text/javascript">function sendTimingInfoInit(){setTimeout(sendTimingInfo,0)}function sendTimingInfo(){var wp=window.performance;if(wp){var c1,c2,t;c1=wp.timing;if(c1){var cm={};cm.ns=c1.navigationStart;if((t=c1.unloadEventStart)>0)cm.us=t;if((t=c1.unloadEventEnd)>0)cm.ue=t;if((t=c1.redirectStart)>0)cm.rs=t;if((t=c1.redirectEnd)>0)cm.re=t;cm.fs=c1.fetchStart;cm.dls=c1.domainLookupStart;cm.dle=c1.domainLookupEnd;cm.cs=c1.connectStart;cm.ce=c1.connectEnd;if((t=c1.secureConnectionStart)>0)cm.scs=t;cm.rqs=c1.requestStart;cm.rss=c1.responseStart;cm.rse=c1.responseEnd;cm.dl=c1.domLoading;cm.di=c1.domInteractive;cm.dcls=c1.domContentLoadedEventStart;cm.dcle=c1.domContentLoadedEventEnd;cm.dc=c1.domComplete;if((t=c1.loadEventStart)>0)cm.ls=t;if((t=c1.loadEventEnd)>0)cm.le=t;cm.tid=NS_CSM_td;cm.pid=NS_CSM_pd;cm.ac=NS_CSM_col;var xhttp=new XMLHttpRequest();if(xhttp){var JSON=JSON||{};JSON.stringify=JSON.stringify||function(ob){var t=typeof(ob);if(t!="object"||ob===null){if(t=="string")ob='"'+ob+'"';return String(ob);}else{var n,v,json=[],arr=(ob&&ob.constructor==Array);for(n in ob){v=ob[n];t=typeof(v);if(t=="string")v='"'+v+'"';else if(t=="object"&&v!==null)v=JSON.stringify(v);json.push((arr?"":'"'+n+'":')+String(v));}return(arr?"[":"{")+String(json)+(arr?"]":"}");}};xhttp.open("POST",NS_CSM_u,true);xhttp.send(JSON.stringify(cm));}}}}if(window.addEventListener)window.addEventListener("load",sendTimingInfoInit,false);else if(window.attachEvent)window.attachEvent("onload",sendTimingInfoInit);else window.onload=sendTimingInfoInit;</script></head>
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
<div class="nomads_header_bar largefont">NOMADS Grib Filter</div><div class="help_line"><div class="links_line">
<ul>
<li>
  <a href="/" title="NOMADS Home">Home</a>
</li><li>
  &nbsp;&nbsp;|&nbsp;&nbsp;
</li><li>
  <a href="info.php?page=gribfilter">General Grib Filter Help</a>
</li><li>
  &nbsp;&nbsp;|&nbsp;&nbsp;
</li><li>
  <span class="help_item" onclick="openModalBox('help_vars_div_id')">Parameters Help</span>
</li><li>
  &nbsp;&nbsp;|&nbsp;&nbsp;
</li><li>
  <span class="help_item" onclick="openModalBox('help_levels_div_id')">Levels Help</span>
</li>
</ul>
</div>
</div>
<div id="grib_filter_body"><h1>NCEP Great Lakes Wave Model Forecasts </h1><div id="col_container"><p class="breadcrumb">Directory:&nbsp;&nbsp;<span id="id_breadcrumb"></span></p><div class="col_1"><h2>Available Data Dates:</h2><div id="div_subdir_0" style="border:solid 0px black"><span class="selectable"><span class="selected unselected subdir_0" onClick="click_subdir(0, 'glwu.20261031', this)">glwu.20261031</span></span><br><span class="selectable"><span class="unselected subdir_0" onClick="click_subdir(0, 'glwu.20261030', this)">glwu.20261030</span></span><br></div></div><div class="col_3"><h2>Available Files (file size):</h2><div id="div_files" ><select id="file_selector" onChange="setFile(this.value)"><option value="glwu.grlc_2p5km.t01z.grib2"  selected>glwu.grlc_2p5km.t01z.grib2 (71037133)</option><option value="glwu.grlc_2p5km.t07z.grib2" >glwu.grlc_2p5km.t07z.grib2 (72493083)</option><option value="glwu.grlc_2p5km.t13z.grib2" >glwu.grlc_2p5km.t13z.grib2 (72346263)</option><option value="glwu.grlc_2p5km_lc.t01z.grib2" >glwu.grlc_2p5km_lc.t01z.grib2 (1413216)</option><option value="glwu.grlc_2p5km_lc.t07z.grib2" >glwu.grlc_2p5km_lc.t07z.grib2 (1384552)</option><option value="glwu.grlc_2p5km_lc.t13z.grib2" >glwu.grlc_2p5km_lc.t13z.grib2 (1376319)</option><option value="glwu.grlc_2p5km_lc_sr.t00z.grib2" >glwu.grlc_2p5km_lc_sr.t00z.grib2 (469070)</option><option value="glwu.grlc_2p5km_lc_sr.t01z.grib2" >glwu.grlc_2p5km_lc_sr.t01z.grib2 (467929)</option><option value="glwu.grlc_2p5km_lc_sr.t02z.grib2" >glwu.grlc_2p5km_lc_sr.t02z.grib2 (467071)</option><option value="glwu.grlc_2p5km_lc_sr.t03z.grib2" >glwu.grlc_2p5km_lc_sr.t03z.grib2 (466937)</option><option value="glwu.grlc_2p5km_lc_sr.t04z.grib2" >glwu.grlc_2p5km_lc_sr.t04z.grib2 (464367)</option><option value="glwu.grlc_2p5km_lc_sr.t05z.grib2" >glwu.grlc_2p5km_lc_sr.t05z.grib2 (462926)</option><option value="glwu.grlc_2p5km_lc_sr.t06z.grib2" >glwu.grlc_2p5km_lc_sr.t06z.grib2 (462038)</option><option value="glwu.grlc_2p5km_lc_sr.t07z.grib2" >glwu.grlc_2p5km_lc_sr.t07z.grib2 (460237)</option><option value="glwu.grlc_2p5km_lc_sr.t08z.grib2" >glwu.grlc_2p5km_lc_sr.t08z.grib2 (463466)</option><option value="glwu.grlc_2p5km_lc_sr.t09z.grib2" >glwu.grlc_2p5km_lc_sr.t09z.grib2 (463178)</option><option value="glwu.grlc_2p5km_lc_sr.t10z.grib2" >glwu.grlc_2p5km_lc_sr.t10z.grib2 (461553)</option><option value="glwu.grlc_2p5km_lc_sr.t11z.grib2" >glwu.grlc_2p5km_lc_sr.t11z.grib2 (462485)</option><option value="glwu.grlc_2p5km_lc_sr.t12z.grib2" >glwu.grlc_2p5km_lc_sr.t12z.grib2 (462763)</option><option value="glwu.grlc_2p5km_lc_sr.t13z.grib2" >glwu.grlc_2p5km_lc_sr.t13z.grib2 (460752)</option><option value="glwu.grlc_2p5km_lc_sr.t14z.grib2" >glwu.grlc_2p5km_lc_sr.t14z.grib2 (462051)</option><option value="glwu.grlc_2p5km_sr.t00z.grib2" >glwu.grlc_2p5km_sr.t00z.grib2 (21890560)</option><option value="glwu.grlc_2p5km_sr.t01z.grib2" >glwu.grlc_2p5km_sr.t01z.grib2 (21848137)</option><option value="glwu.grlc_2p5km_sr.t02z.grib2" >glwu.grlc_2p5km_sr.t02z.grib2 (21785671)</option><option value="glwu.grlc_2p5km_sr.t03z.grib2" >glwu.grlc_2p5km_sr.t03z.grib2 (21749085)</option><option value="glwu.grlc_2p5km_sr.t04z.grib2" >glwu.grlc_2p5km_sr.t04z.grib2 (21701205)</option><option value="glwu.grlc_2p5km_sr.t05z.grib2" >glwu.grlc_2p5km_sr.t05z.grib2 (21597010)</option><option value="glwu.grlc_2p5km_sr.t06z.grib2" >glwu.grlc_2p5km_sr.t06z.grib2 (21569913)</option><option value="glwu.grlc_2p5km_sr.t07z.grib2" >glwu.grlc_2p5km_sr.t07z.grib2 (21622371)</option><option value="glwu.grlc_2p5km_sr.t08z.grib2" >glwu.grlc_2p5km_sr.t08z.grib2 (21737243)</option><option value="glwu.grlc_2p5km_sr.t09z.grib2" >glwu.grlc_2p5km_sr.t09z.grib2 (21720042)</option><option value="glwu.grlc_2p5km_sr.t10z.grib2" >glwu.grlc_2p5km_sr.t10z.grib2 (21691739)</option><option value="glwu.grlc_2p5km_sr.t11z.grib2" >glwu.grlc_2p5km_sr.t11z.grib2 (21650600)</option><option value="glwu.grlc_2p5km_sr.t12z.grib2" >glwu.grlc_2p5km_sr.t12z.grib2 (21671550)</option><option value="glwu.grlc_2p5km_sr.t13z.grib2" >glwu.grlc_2p5km_sr.t13z.grib2 (21642302)</option><option value="glwu.grlc_2p5km_sr.t14z.grib2" >glwu.grlc_2p5km_sr.t14z.grib2 (21575343)</option><option value="glwu.grlr_500m.t00z.grib2" >glwu.grlr_500m.t00z.grib2 (373313274)</option><option value="glwu.grlr_500m.t01z.grib2" >glwu.grlr_500m.t01z.grib2 (372467074)</option><option value="glwu.grlr_500m.t02z.grib2" >glwu.grlr_500m.t02z.grib2 (370805540)</option><option value="glwu.grlr_500m.t03z.grib2" >glwu.grlr_500m.t03z.grib2 (370009551)</option><option value="glwu.grlr_500m.t04z.grib2" >glwu.grlr_500m.t04z.grib2 (368885778)</option><option value="glwu.grlr_500m.t05z.grib2" >glwu.grlr_500m.t05z.grib2 (366839632)</option><option value="glwu.grlr_500m.t06z.grib2" >glwu.grlr_500m.t06z.grib2 (366390058)</option><option value="glwu.grlr_500m.t07z.grib2" >glwu.grlr_500m.t07z.grib2 (367823206)</option><option value="glwu.grlr_500m.t08z.grib2" >glwu.grlr_500m.t08z.grib2 (370139004)</option><option value="glwu.grlr_500m.t09z.grib2" >glwu.grlr_500m.t09z.grib2 (369983781)</option><option value="glwu.grlr_500m.t10z.grib2" >glwu.grlr_500m.t10z.grib2 (369442960)</option><option value="glwu.grlr_500m.t11z.grib2" >glwu.grlr_500m.t11z.grib2 (368343162)</option><option value="glwu.grlr_500m.t12z.grib2" >glwu.grlr_500m.t12z.grib2 (368501237)</option><option value="glwu.grlr_500m.t13z.grib2" >glwu.grlr_500m.t13z.grib2 (367952847)</option><option value="glwu.grlr_500m_lc.t00z.grib2" >glwu.grlr_500m_lc.t00z.grib2 (4724449)</option><option value="glwu.grlr_500m_lc.t01z.grib2" >glwu.grlr_500m_lc.t01z.grib2 (13765596)</option><option value="glwu.grlr_500m_lc.t02z.grib2" >glwu.grlr_500m_lc.t02z.grib2 (4679995)</option><option value="glwu.grlr_500m_lc.t03z.grib2" >glwu.grlr_500m_lc.t03z.grib2 (4684386)</option><option value="glwu.grlr_500m_lc.t04z.grib2" >glwu.grlr_500m_lc.t04z.grib2 (4633477)</option><option value="glwu.grlr_500m_lc.t05z.grib2" >glwu.grlr_500m_lc.t05z.grib2 (4612521)</option><option value="glwu.grlr_500m_lc.t06z.grib2" >glwu.grlr_500m_lc.t06z.grib2 (4583404)</option><option value="glwu.grlr_500m_lc.t07z.grib2" >glwu.grlr_500m_lc.t07z.grib2 (13128879)</option><option value="glwu.grlr_500m_lc.t08z.grib2" >glwu.grlr_500m_lc.t08z.grib2 (4607462)</option><option value="glwu.grlr_500m_lc.t09z.grib2" >glwu.grlr_500m_lc.t09z.grib2 (4600185)</option><option value="glwu.grlr_500m_lc.t10z.grib2" >glwu.grlr_500m_lc.t10z.grib2 (4567388)</option><option value="glwu.grlr_500m_lc.t11z.grib2" >glwu.grlr_500m_lc.t11z.grib2 (4588230)</option><option value="glwu.grlr_500m_lc.t12z.grib2" >glwu.grlr_500m_lc.t12z.grib2 (4594110)</option><option value="glwu.grlr_500m_lc.t13z.grib2" >glwu.grlr_500m_lc.t13z.grib2 (13061695)</option><option value="glwu.grlr_500m_lc.t14z.grib2" >glwu.grlr_500m_lc.t14z.grib2 (4591897)</option></select></div></div></div><script>var subdirsArr=["glwu.20261031"];set_breadcrumb();</script><div style="clear:both"></div>
<form action="https://nomads.ncep.noaa.gov/cgi-bin/filter_glwu.pl" method="get" id="form_id">
<input type="hidden" id="dir_id" name="dir" value="/glwu.20261031"><input type="hidden" id="file_id" name="file" value="glwu.grlc_2p5km.t01z.grib2"><h2>Parameters &nbsp;<button class="" type="button" title="Check boxes of all highlighted parameters" onclick="check_all_highlighted('vars')" >Check Highlighted</button>&nbsp;<button class="" type="button" title="Check boxes of all parameter choices" onclick="check_all('cb_vars')" >Check All Parameters</button>&nbsp;<button class="" type="button" title="Uncheck boxes of all parameters" onclick="uncheck_all('cb_vars')" >Uncheck All Parameters</button></h2><div style="margin-left:20px"><span title="All Parameters - if selected, all available parameters are included in file downloads" ><input type="checkbox" name="all_var" id="all_var_chk" checked>&nbsp; all  </span><span id="var_DIRPW" title="Primary wave direction" class="highlight vars" ><input type="checkbox" name="var_DIRPW" id="cb_var_DIRPW" class="cb_vars" onClick="uncheck_all_checkbox('var')">&nbsp;<span onClick="show_levels_for_var('DIRPW');">DIRPW</span> </span>&nbsp;<span id="var_HTSGW" title="Significant height of combined wind waves and swell" class="highlight vars" ><input type="checkbox" name="var_HTSGW" id="cb_var_HTSGW" class="cb_vars" onClick="uncheck_all_checkbox('var')">&nbsp;<span onClick="show_levels_for_var('HTSGW');">HTSGW</span> </span>&nbsp;<span id="var_PERPW" title="Primary wave mean period" class="highlight vars" ><input type="checkbox" name="var_PERPW" id="cb_var_PERPW" class="cb_vars" onClick="uncheck_all_checkbox('var')">&nbsp;<span onClick="show_levels_for_var('PERPW');">PERPW</span> </span>&nbsp;<span id="var_SWDIR" title="Direction of swell waves" class="highlight vars" ><input type="checkbox" name="var_SWDIR" id="cb_var_SWDIR" class="cb_vars" onClick="uncheck_all_checkbox('var')">&nbsp;<span onClick="show_levels_for_var('SWDIR');">SWDIR</span> </span>&nbsp;<span id="var_SWELL" title="Significant height of swell waves" class="highlight vars" ><input type="checkbox" name="var_SWELL" id="cb_var_SWELL" class="cb_vars" onClick="uncheck_all_checkbox('var')">&nbsp;<span onClick="show_levels_for_var('SWELL');">SWELL</span> </span>&nbsp;<span id="var_SWPER" title="Mean period of swell waves" class="highlight vars" ><input type="checkbox" name="var_SWPER" id="cb_var_SWPER" class="cb_vars" onClick="uncheck_all_checkbox('var')">&nbsp;<span onClick="show_levels_for_var('SWPER');">SWPER</span> </span>&nbsp;<span id="var_UGRD" title="U-Component of Wind" class="highlight vars" ><input type="checkbox" name="var_UGRD" id="cb_var_UGRD" class="cb_vars" onClick="uncheck_all_checkbox('var')">&nbsp;<span onClick="show_levels_for_var('UGRD');">UGRD</span> </span>&nbsp;<span id="var_VGRD" title="V-Component of Wind" class="highlight vars" ><input type="checkbox" name="var_VGRD" id="cb_var_VGRD" class="cb_vars" onClick="uncheck_all_checkbox('var')">&nbsp;<span onClick="show_levels_for_var('VGRD');">VGRD</span> </span>&nbsp;<span id="var_WDIR" title="Wind direction (from which blowing)" class="highlight vars" ><input type="checkbox" name="var_WDIR" id="cb_var_WDIR" class="cb_vars" onClick="uncheck_all_checkbox('var')">&nbsp;<span onClick="show_levels_for_var('WDIR');">WDIR</span> </span>&nbsp;<span id="var_WIND" title="Wind Speed" class="highlight vars" ><input type="checkbox" name="var_WIND" id="cb_var_WIND" class="cb_vars" onClick="uncheck_all_checkbox('var')">&nbsp;<span onClick="show_levels_for_var('WIND');">WIND</span> </span>&nbsp;<span id="var_WVDIR" title="Direction of wind waves (from which)" class="highlight vars" ><input type="checkbox" name="var_WVDIR" id="cb_var_WVDIR" class="cb_vars" onClick="uncheck_all_checkbox('var')">&nbsp;<span onClick="show_levels_for_var('WVDIR');">WVDIR</span> </span>&nbsp;<span id="var_WVHGT" title="Significant height of wind waves" class="highlight vars" ><input type="checkbox" name="var_WVHGT" id="cb_var_WVHGT" class="cb_vars" onClick="uncheck_all_checkbox('var')">&nbsp;<span onClick="show_levels_for_var('WVHGT');">WVHGT</span> </span>&nbsp;<span id="var_WVPER" title="Mean period of wind waves" class="highlight vars" ><input type="checkbox" name="var_WVPER" id="cb_var_WVPER" class="cb_vars" onClick="uncheck_all_checkbox('var')">&nbsp;<span onClick="show_levels_for_var('WVPER');">WVPER</span> </span>&nbsp;</div><br><h2>Levels &nbsp;<button class="" type="button" title="Check boxes of all highlighted levels" onclick="check_all_highlighted('levels')" >Check Highlighted</button>&nbsp;<button class="" type="button" title="Check boxes of all level choices" onclick="check_all('cb_levels')" >Check All Levels</button>&nbsp;<button class="" type="button" title="Uncheck boxes of all levels" onclick="uncheck_all('cb_levels')" >Uncheck All Levels</button></h2><div style="margin-left:20px"><span title="All Levels - if selected, all available levels are included in file downloads" ><input type="checkbox" name="all_lev" id="all_lev_chk" checked>&nbsp; all  </span><span id="lev_1_in_sequence" title="1 in sequence" class="highlight levels"><input type="checkbox" name="lev_1_in_sequence" id="cb_lev_1_in_sequence" class="cb_levels" onClick="uncheck_all_checkbox('lev')"><span onClick="show_vars_for_level('1_in_sequence');">1 in sequence</span> </span>&nbsp;<span id="lev_2_in_sequence" title="2 in sequence" class="highlight levels"><input type="checkbox" name="lev_2_in_sequence" id="cb_lev_2_in_sequence" class="cb_levels" onClick="uncheck_all_checkbox('lev')"><span onClick="show_vars_for_level('2_in_sequence');">2 in sequence</span> </span>&nbsp;<span id="lev_3_in_sequence" title="3 in sequence" class="highlight levels"><input type="checkbox" name="lev_3_in_sequence" id="cb_lev_3_in_sequence" class="cb_levels" onClick="uncheck_all_checkbox('lev')"><span onClick="show_vars_for_level('3_in_sequence');">3 in sequence</span> </span>&nbsp;<span id="lev_surface" title="surface" class="highlight levels"><input type="checkbox" name="lev_surface" id="cb_lev_surface" class="cb_levels" onClick="uncheck_all_checkbox('lev')"><span onClick="show_vars_for_level('surface');">surface</span> </span>&nbsp;</div>&nbsp;<br><h2>Subregion</h2><div style="margin-left:20px"><table><tr>  <td><input type="checkbox" name="subregion" id="subregion_checkbox" value="">&nbsp;make&nbsp;subregion:&nbsp;&nbsp;&nbsp;</td>  <td>top&nbsp;latitude </td><td colspan="2" style="text-align:center"><input type="text" name="toplat" value="90" onChange="change_latlon();" size=5></td><td></td></tr>  <tr><td>&nbsp;</td><td>left&nbsp;longitude <td><input type="text" name="leftlon" id="leftlon_id" value="0" onChange="change_latlon();" size=5></td>   <td><input type="text" name="rightlon" id="rightlon_id" value="360" onChange="change_latlon();" size=5></td><td>right&nbsp;longitude</td></tr> <tr>  <td></td>  <td>bottom&nbsp;latitude <td colspan="2" style="text-align:center"><input type="text" name="bottomlat" value="-90" onChange="change_latlon();" size=5></td><td></td></tr></table></div><h2>Download</h2><div style="margin-left:20px"><p>In order to not overload the server, please pause before resubmitting requests.</p><input type="button" onClick="validate_form(this.form.id);" value="Start download" title="Download the selected grib file">&nbsp;&nbsp;<input type="reset" onClick="reset_form(this.form.id)" title="Reset all page values"><br></div></form><br><div style="float:left;margin-left:20px"><input type="button" name="showurl" value="Show URL" onClick="showUrl('https://nomads.ncep.noaa.gov/cgi-bin/filter_glwu.pl');" title="Display the URL that will download the grib file with selected values.  The URL text will be found in the large text box to the right of, or below this button."> <br><br><input type="button" name="clippy" value="Copy URL" onClick="copyUrl('showurl_id');" title="Copy URL text to the local clipboard.  To use the text, paste it into your text editor."> <br><br></div><div style="float:left;margin-left:10px;margin-bottom:50px"><textarea id="showurl_id" rows="6" cols="80" readonly></textarea></div></div><div style="clear:both">
</div>
<div id="help_levels_div_id" class="modal" style="display:none;"><div class="modal-content" onClick="closeModalBox('help_levels_div_id');" ><span class="close" title="Click anywhere in this box to close it">&times;</span><div><ul>
<li> Click on a level name to show the variables that match that level. Variables that are specific to that level will be underlined and highlighted in yellow.</li>
<li>Click the checkbox to the left of a level name to select that level for the gribfilter download request. </li> 
<li>Click the "Check Highlighted" button to check the checkbox of every underlined/highlighted level.
(The levels are underlined/highlighted by clicking on a variable name.)</li>
<li>Check "all" to download all levels.  When "all" is checked, it does not matter if any other levels are checked - all levels are included.</li>
<li>Note that the gribfilter download request only includes levels that are checked.  
Underlined/highlighted level names that are not checked are not included.</li>
<li>Note that some levels are not specific to any variable.  To get data for these levels, click on "all" variables.</li>
</ul>
</div></div></div>
<div id="help_vars_div_id" class="modal" style="display:none;"><div class="modal-content" onClick="closeModalBox('help_vars_div_id');" ><span class="close" title="Click anywhere in this box to close it">&times;</span><div><ul>
<li>Hover over a variable abbreviation to display the full variable name.</li>
<li>Click on a variable name to find the levels that match that variable.  
Levels that are specific to that variable will be underlined and highlighted in yellow.</li>
<li>Click on the checkbox to the left of a variable abbreviation to select that variable for the gribfilter download request. </li> 
<li>Click the "Check Highlighted" button to check the checkbox of every underlined/highlighted variable.
(The variables are underlined/highlighted by clicking on a level name.)</li>
<li>Note that the gribfilter download request only includes variables that are checked.  
Underlined/highlighted variables that are not checked are not included in the gribfilter request.</li>
<li>Check "all" to download all variables.  When "all" is checked, it does not matter 
if any other variables are checked - all variables are included in the request.</li>
<li>Note that some variables are not specific to any layer.  To get data for these variables, click on "all" variables.</li>
</ul>
</div></div></div><script src="js/params_levels_glwu.js"></script>
<script>g_ds = "glwu";</script><div id="version_line"> NCEP NOMADS Version 2.3.27, October 2026 </div><footer id="footer">
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


