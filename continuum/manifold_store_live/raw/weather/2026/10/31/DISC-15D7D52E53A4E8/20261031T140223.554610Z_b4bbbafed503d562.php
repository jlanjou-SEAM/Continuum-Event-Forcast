<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Grib Filter gefs_chem_0p50</title><link rel="stylesheet" href="/bundles/noaatemplating/css/weather.css?2.3.27">
<link rel="stylesheet" href="/bundles/noaatemplating/css/com/header.css?2.3.27">
<link rel="stylesheet" href="/bundles/noaatemplating/css/com/navbar.css?2.3.27">
<link rel="stylesheet" href="/bundles/noaatemplating/css/com/footer.css?2.3.27">
<link rel="stylesheet" href="/css/nomads.css?2.3.27">
<script src="/bundles/noaatemplating/cdn/js/jquery.3.7.1.min.js?2.3.27"></script>
<script src="/js/nomads.js"></script>
<script>NS_CSM_td=1249499874;NS_CSM_pd=275116641;NS_CSM_u="/clm10";NS_CSM_col="AAAAAAXIWKEDJOgcqPtufyTC98za809n71kfgE1Yui7QP0B/LGwXnr6b9654M7/caPS4Bo8=";</script><script type="text/javascript">function sendTimingInfoInit(){setTimeout(sendTimingInfo,0)}function sendTimingInfo(){var wp=window.performance;if(wp){var c1,c2,t;c1=wp.timing;if(c1){var cm={};cm.ns=c1.navigationStart;if((t=c1.unloadEventStart)>0)cm.us=t;if((t=c1.unloadEventEnd)>0)cm.ue=t;if((t=c1.redirectStart)>0)cm.rs=t;if((t=c1.redirectEnd)>0)cm.re=t;cm.fs=c1.fetchStart;cm.dls=c1.domainLookupStart;cm.dle=c1.domainLookupEnd;cm.cs=c1.connectStart;cm.ce=c1.connectEnd;if((t=c1.secureConnectionStart)>0)cm.scs=t;cm.rqs=c1.requestStart;cm.rss=c1.responseStart;cm.rse=c1.responseEnd;cm.dl=c1.domLoading;cm.di=c1.domInteractive;cm.dcls=c1.domContentLoadedEventStart;cm.dcle=c1.domContentLoadedEventEnd;cm.dc=c1.domComplete;if((t=c1.loadEventStart)>0)cm.ls=t;if((t=c1.loadEventEnd)>0)cm.le=t;cm.tid=NS_CSM_td;cm.pid=NS_CSM_pd;cm.ac=NS_CSM_col;var xhttp=new XMLHttpRequest();if(xhttp){var JSON=JSON||{};JSON.stringify=JSON.stringify||function(ob){var t=typeof(ob);if(t!="object"||ob===null){if(t=="string")ob='"'+ob+'"';return String(ob);}else{var n,v,json=[],arr=(ob&&ob.constructor==Array);for(n in ob){v=ob[n];t=typeof(v);if(t=="string")v='"'+v+'"';else if(t=="object"&&v!==null)v=JSON.stringify(v);json.push((arr?"":'"'+n+'":')+String(v));}return(arr?"[":"{")+String(json)+(arr?"]":"}");}};xhttp.open("POST",NS_CSM_u,true);xhttp.send(JSON.stringify(cm));}}}}if(window.addEventListener)window.addEventListener("load",sendTimingInfoInit,false);else if(window.attachEvent)window.attachEvent("onload",sendTimingInfoInit);else window.onload=sendTimingInfoInit;</script></head>
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
<div id="grib_filter_body"><h1>NCEP GEFS CHEM 0.5 Degree Model Forecasts</h1><div id="col_container"><p class="breadcrumb">Directory:&nbsp;&nbsp;<span id="id_breadcrumb"></span></p><div class="col_1"><h2>Available Data Dates:</h2><div id="div_subdir_0" style="border:solid 0px black"><span class="selectable"><span class="selected unselected subdir_0" onClick="click_subdir(0, 'gefs.20261031', this)">gefs.20261031</span></span><br><span class="selectable"><span class="unselected subdir_0" onClick="click_subdir(0, 'gefs.20261030', this)">gefs.20261030</span></span><br><span class="selectable"><span class="unselected subdir_0" onClick="click_subdir(0, 'gefs.20261029', this)">gefs.20261029</span></span><br><span class="selectable"><span class="unselected subdir_0" onClick="click_subdir(0, 'gefs.20261028', this)">gefs.20261028</span></span><br></div></div><div class="col_2"><h2>Cycle:</h2><div id="div_subdir_1" style="border:solid 0px black"><span class="selectable"><span class="selected unselected subdir_1" onClick="click_subdir(1, '06', this)">06</span></span><br><span class="selectable"><span class="unselected subdir_1" onClick="click_subdir(1, '00', this)">00</span></span><br></div><h2>Subdirectories:</h2><div id="div_subdir_2" style="border:solid 0px black"><span class="dirNoChoice subdir_2" >chem</span><br></div><div id="div_subdir_3" style="border:solid 0px black"><span class="dirNoChoice subdir_3" >pgrb2ap5</span><br></div></div><div class="col_3"><h2>Available Files (file size):</h2><div id="div_files" ><select id="file_selector" onChange="setFile(this.value)"><option value="gefs.chem.t06z.a3d_0p50.f000.grib2"  selected>gefs.chem.t06z.a3d_0p50.f000.grib2 (204355625)</option><option value="gefs.chem.t06z.a3d_0p50.f003.grib2" >gefs.chem.t06z.a3d_0p50.f003.grib2 (203605072)</option><option value="gefs.chem.t06z.a3d_0p50.f006.grib2" >gefs.chem.t06z.a3d_0p50.f006.grib2 (204338224)</option><option value="gefs.chem.t06z.a3d_0p50.f009.grib2" >gefs.chem.t06z.a3d_0p50.f009.grib2 (204178559)</option><option value="gefs.chem.t06z.a3d_0p50.f012.grib2" >gefs.chem.t06z.a3d_0p50.f012.grib2 (203426050)</option><option value="gefs.chem.t06z.a3d_0p50.f015.grib2" >gefs.chem.t06z.a3d_0p50.f015.grib2 (203313258)</option><option value="gefs.chem.t06z.a3d_0p50.f018.grib2" >gefs.chem.t06z.a3d_0p50.f018.grib2 (203690760)</option><option value="gefs.chem.t06z.a3d_0p50.f021.grib2" >gefs.chem.t06z.a3d_0p50.f021.grib2 (203857141)</option><option value="gefs.chem.t06z.a3d_0p50.f024.grib2" >gefs.chem.t06z.a3d_0p50.f024.grib2 (204189800)</option><option value="gefs.chem.t06z.a3d_0p50.f027.grib2" >gefs.chem.t06z.a3d_0p50.f027.grib2 (203818405)</option><option value="gefs.chem.t06z.a3d_0p50.f030.grib2" >gefs.chem.t06z.a3d_0p50.f030.grib2 (203787383)</option><option value="gefs.chem.t06z.a3d_0p50.f033.grib2" >gefs.chem.t06z.a3d_0p50.f033.grib2 (203508600)</option><option value="gefs.chem.t06z.a3d_0p50.f036.grib2" >gefs.chem.t06z.a3d_0p50.f036.grib2 (201654280)</option><option value="gefs.chem.t06z.a3d_0p50.f039.grib2" >gefs.chem.t06z.a3d_0p50.f039.grib2 (203894071)</option><option value="gefs.chem.t06z.a3d_0p50.f042.grib2" >gefs.chem.t06z.a3d_0p50.f042.grib2 (203083572)</option><option value="gefs.chem.t06z.a3d_0p50.f045.grib2" >gefs.chem.t06z.a3d_0p50.f045.grib2 (202850294)</option><option value="gefs.chem.t06z.a3d_0p50.f048.grib2" >gefs.chem.t06z.a3d_0p50.f048.grib2 (203106951)</option><option value="gefs.chem.t06z.a3d_0p50.f051.grib2" >gefs.chem.t06z.a3d_0p50.f051.grib2 (203420708)</option><option value="gefs.chem.t06z.a3d_0p50.f054.grib2" >gefs.chem.t06z.a3d_0p50.f054.grib2 (202576943)</option><option value="gefs.chem.t06z.a3d_0p50.f057.grib2" >gefs.chem.t06z.a3d_0p50.f057.grib2 (202624908)</option><option value="gefs.chem.t06z.a3d_0p50.f060.grib2" >gefs.chem.t06z.a3d_0p50.f060.grib2 (202211925)</option><option value="gefs.chem.t06z.a3d_0p50.f063.grib2" >gefs.chem.t06z.a3d_0p50.f063.grib2 (201848212)</option><option value="gefs.chem.t06z.a3d_0p50.f066.grib2" >gefs.chem.t06z.a3d_0p50.f066.grib2 (202864174)</option><option value="gefs.chem.t06z.a3d_0p50.f069.grib2" >gefs.chem.t06z.a3d_0p50.f069.grib2 (204094672)</option><option value="gefs.chem.t06z.a3d_0p50.f072.grib2" >gefs.chem.t06z.a3d_0p50.f072.grib2 (203879955)</option><option value="gefs.chem.t06z.a3d_0p50.f075.grib2" >gefs.chem.t06z.a3d_0p50.f075.grib2 (203129846)</option><option value="gefs.chem.t06z.a3d_0p50.f078.grib2" >gefs.chem.t06z.a3d_0p50.f078.grib2 (202989849)</option><option value="gefs.chem.t06z.a3d_0p50.f081.grib2" >gefs.chem.t06z.a3d_0p50.f081.grib2 (203328820)</option><option value="gefs.chem.t06z.a3d_0p50.f084.grib2" >gefs.chem.t06z.a3d_0p50.f084.grib2 (204074140)</option><option value="gefs.chem.t06z.a3d_0p50.f087.grib2" >gefs.chem.t06z.a3d_0p50.f087.grib2 (205089767)</option><option value="gefs.chem.t06z.a3d_0p50.f090.grib2" >gefs.chem.t06z.a3d_0p50.f090.grib2 (205596391)</option><option value="gefs.chem.t06z.a3d_0p50.f093.grib2" >gefs.chem.t06z.a3d_0p50.f093.grib2 (205404037)</option><option value="gefs.chem.t06z.a3d_0p50.f096.grib2" >gefs.chem.t06z.a3d_0p50.f096.grib2 (203657936)</option><option value="gefs.chem.t06z.a3d_0p50.f099.grib2" >gefs.chem.t06z.a3d_0p50.f099.grib2 (202132507)</option><option value="gefs.chem.t06z.a3d_0p50.f102.grib2" >gefs.chem.t06z.a3d_0p50.f102.grib2 (202507269)</option><option value="gefs.chem.t06z.a3d_0p50.f105.grib2" >gefs.chem.t06z.a3d_0p50.f105.grib2 (202538744)</option><option value="gefs.chem.t06z.a3d_0p50.f108.grib2" >gefs.chem.t06z.a3d_0p50.f108.grib2 (202958236)</option><option value="gefs.chem.t06z.a3d_0p50.f111.grib2" >gefs.chem.t06z.a3d_0p50.f111.grib2 (204297684)</option><option value="gefs.chem.t06z.a3d_0p50.f114.grib2" >gefs.chem.t06z.a3d_0p50.f114.grib2 (204256939)</option><option value="gefs.chem.t06z.a3d_0p50.f117.grib2" >gefs.chem.t06z.a3d_0p50.f117.grib2 (204036363)</option><option value="gefs.chem.t06z.a3d_0p50.f120.grib2" >gefs.chem.t06z.a3d_0p50.f120.grib2 (204368968)</option></select></div></div></div><script>var subdirsArr=["gefs.20261031","06","chem","pgrb2ap5"];set_breadcrumb();</script><div style="clear:both"></div>
<form action="https://nomads.ncep.noaa.gov/cgi-bin/filter_gefs_chem_0p50.pl" method="get" id="form_id">
<input type="hidden" id="dir_id" name="dir" value="/gefs.20261031/06/chem/pgrb2ap5"><input type="hidden" id="file_id" name="file" value="gefs.chem.t06z.a3d_0p50.f000.grib2"><h2>Parameters &nbsp;<button class="" type="button" title="Check boxes of all highlighted parameters" onclick="check_all_highlighted('vars')" >Check Highlighted</button>&nbsp;<button class="" type="button" title="Check boxes of all parameter choices" onclick="check_all('cb_vars')" >Check All Parameters</button>&nbsp;<button class="" type="button" title="Uncheck boxes of all parameters" onclick="uncheck_all('cb_vars')" >Uncheck All Parameters</button></h2><div style="margin-left:20px"><span title="All Parameters - if selected, all available parameters are included in file downloads" ><input type="checkbox" name="all_var" id="all_var_chk" checked>&nbsp; all  </span><span id="var_PMTC" title="Particulate matter (coarse)" class="highlight vars" ><input type="checkbox" name="var_PMTC" id="cb_var_PMTC" class="cb_vars" onClick="uncheck_all_checkbox('var')">&nbsp;<span onClick="show_levels_for_var('PMTC');">PMTC</span> </span>&nbsp;<span id="var_PMTF" title="Particulate matter (fine)" class="highlight vars" ><input type="checkbox" name="var_PMTF" id="cb_var_PMTF" class="cb_vars" onClick="uncheck_all_checkbox('var')">&nbsp;<span onClick="show_levels_for_var('PMTF');">PMTF</span> </span>&nbsp;</div><br><h2>Levels &nbsp;<button class="" type="button" title="Check boxes of all highlighted levels" onclick="check_all_highlighted('levels')" >Check Highlighted</button>&nbsp;<button class="" type="button" title="Check boxes of all level choices" onclick="check_all('cb_levels')" >Check All Levels</button>&nbsp;<button class="" type="button" title="Uncheck boxes of all levels" onclick="uncheck_all('cb_levels')" >Uncheck All Levels</button></h2><div style="margin-left:20px"><span title="All Levels - if selected, all available levels are included in file downloads" ><input type="checkbox" name="all_lev" id="all_lev_chk" checked>&nbsp; all  </span><span id="lev_1_hybrid_level" title="1 hybrid level" class="highlight levels"><input type="checkbox" name="lev_1_hybrid_level" id="cb_lev_1_hybrid_level" class="cb_levels" onClick="uncheck_all_checkbox('lev')"><span onClick="show_vars_for_level('1_hybrid_level');">1 hybrid level</span> </span>&nbsp;<span id="lev_2_hybrid_level" title="2 hybrid level" class="highlight levels"><input type="checkbox" name="lev_2_hybrid_level" id="cb_lev_2_hybrid_level" class="cb_levels" onClick="uncheck_all_checkbox('lev')"><span onClick="show_vars_for_level('2_hybrid_level');">2 hybrid level</span> </span>&nbsp;<span id="lev_3_hybrid_level" title="3 hybrid level" class="highlight levels"><input type="checkbox" name="lev_3_hybrid_level" id="cb_lev_3_hybrid_level" class="cb_levels" onClick="uncheck_all_checkbox('lev')"><span onClick="show_vars_for_level('3_hybrid_level');">3 hybrid level</span> </span>&nbsp;<span id="lev_4_hybrid_level" title="4 hybrid level" class="highlight levels"><input type="checkbox" name="lev_4_hybrid_level" id="cb_lev_4_hybrid_level" class="cb_levels" onClick="uncheck_all_checkbox('lev')"><span onClick="show_vars_for_level('4_hybrid_level');">4 hybrid level</span> </span>&nbsp;<span id="lev_5_hybrid_level" title="5 hybrid level" class="highlight levels"><input type="checkbox" name="lev_5_hybrid_level" id="cb_lev_5_hybrid_level" class="cb_levels" onClick="uncheck_all_checkbox('lev')"><span onClick="show_vars_for_level('5_hybrid_level');">5 hybrid level</span> </span>&nbsp;<span id="lev_6_hybrid_level" title="6 hybrid level" class="highlight levels"><input type="checkbox" name="lev_6_hybrid_level" id="cb_lev_6_hybrid_level" class="cb_levels" onClick="uncheck_all_checkbox('lev')"><span onClick="show_vars_for_level('6_hybrid_level');">6 hybrid level</span> </span>&nbsp;<span id="lev_7_hybrid_level" title="7 hybrid level" class="highlight levels"><input type="checkbox" name="lev_7_hybrid_level" id="cb_lev_7_hybrid_level" class="cb_levels" onClick="uncheck_all_checkbox('lev')"><span onClick="show_vars_for_level('7_hybrid_level');">7 hybrid level</span> </span>&nbsp;<span id="lev_8_hybrid_level" title="8 hybrid level" class="highlight levels"><input type="checkbox" name="lev_8_hybrid_level" id="cb_lev_8_hybrid_level" class="cb_levels" onClick="uncheck_all_checkbox('lev')"><span onClick="show_vars_for_level('8_hybrid_level');">8 hybrid level</span> </span>&nbsp;<span id="lev_9_hybrid_level" title="9 hybrid level" class="highlight levels"><input type="checkbox" name="lev_9_hybrid_level" id="cb_lev_9_hybrid_level" class="cb_levels" onClick="uncheck_all_checkbox('lev')"><span onClick="show_vars_for_level('9_hybrid_level');">9 hybrid level</span> </span>&nbsp;<span id="lev_10_hybrid_level" title="10 hybrid level" class="highlight levels"><input type="checkbox" name="lev_10_hybrid_level" id="cb_lev_10_hybrid_level" class="cb_levels" onClick="uncheck_all_checkbox('lev')"><span onClick="show_vars_for_level('10_hybrid_level');">10 hybrid level</span> </span>&nbsp;<span id="lev_11_hybrid_level" title="11 hybrid level" class="highlight levels"><input type="checkbox" name="lev_11_hybrid_level" id="cb_lev_11_hybrid_level" class="cb_levels" onClick="uncheck_all_checkbox('lev')"><span onClick="show_vars_for_level('11_hybrid_level');">11 hybrid level</span> </span>&nbsp;<span id="lev_12_hybrid_level" title="12 hybrid level" class="highlight levels"><input type="checkbox" name="lev_12_hybrid_level" id="cb_lev_12_hybrid_level" class="cb_levels" onClick="uncheck_all_checkbox('lev')"><span onClick="show_vars_for_level('12_hybrid_level');">12 hybrid level</span> </span>&nbsp;<span id="lev_13_hybrid_level" title="13 hybrid level" class="highlight levels"><input type="checkbox" name="lev_13_hybrid_level" id="cb_lev_13_hybrid_level" class="cb_levels" onClick="uncheck_all_checkbox('lev')"><span onClick="show_vars_for_level('13_hybrid_level');">13 hybrid level</span> </span>&nbsp;<span id="lev_14_hybrid_level" title="14 hybrid level" class="highlight levels"><input type="checkbox" name="lev_14_hybrid_level" id="cb_lev_14_hybrid_level" class="cb_levels" onClick="uncheck_all_checkbox('lev')"><span onClick="show_vars_for_level('14_hybrid_level');">14 hybrid level</span> </span>&nbsp;<span id="lev_15_hybrid_level" title="15 hybrid level" class="highlight levels"><input type="checkbox" name="lev_15_hybrid_level" id="cb_lev_15_hybrid_level" class="cb_levels" onClick="uncheck_all_checkbox('lev')"><span onClick="show_vars_for_level('15_hybrid_level');">15 hybrid level</span> </span>&nbsp;<span id="lev_16_hybrid_level" title="16 hybrid level" class="highlight levels"><input type="checkbox" name="lev_16_hybrid_level" id="cb_lev_16_hybrid_level" class="cb_levels" onClick="uncheck_all_checkbox('lev')"><span onClick="show_vars_for_level('16_hybrid_level');">16 hybrid level</span> </span>&nbsp;<span id="lev_17_hybrid_level" title="17 hybrid level" class="highlight levels"><input type="checkbox" name="lev_17_hybrid_level" id="cb_lev_17_hybrid_level" class="cb_levels" onClick="uncheck_all_checkbox('lev')"><span onClick="show_vars_for_level('17_hybrid_level');">17 hybrid level</span> </span>&nbsp;<span id="lev_18_hybrid_level" title="18 hybrid level" class="highlight levels"><input type="checkbox" name="lev_18_hybrid_level" id="cb_lev_18_hybrid_level" class="cb_levels" onClick="uncheck_all_checkbox('lev')"><span onClick="show_vars_for_level('18_hybrid_level');">18 hybrid level</span> </span>&nbsp;<span id="lev_19_hybrid_level" title="19 hybrid level" class="highlight levels"><input type="checkbox" name="lev_19_hybrid_level" id="cb_lev_19_hybrid_level" class="cb_levels" onClick="uncheck_all_checkbox('lev')"><span onClick="show_vars_for_level('19_hybrid_level');">19 hybrid level</span> </span>&nbsp;<span id="lev_20_hybrid_level" title="20 hybrid level" class="highlight levels"><input type="checkbox" name="lev_20_hybrid_level" id="cb_lev_20_hybrid_level" class="cb_levels" onClick="uncheck_all_checkbox('lev')"><span onClick="show_vars_for_level('20_hybrid_level');">20 hybrid level</span> </span>&nbsp;<span id="lev_21_hybrid_level" title="21 hybrid level" class="highlight levels"><input type="checkbox" name="lev_21_hybrid_level" id="cb_lev_21_hybrid_level" class="cb_levels" onClick="uncheck_all_checkbox('lev')"><span onClick="show_vars_for_level('21_hybrid_level');">21 hybrid level</span> </span>&nbsp;<span id="lev_22_hybrid_level" title="22 hybrid level" class="highlight levels"><input type="checkbox" name="lev_22_hybrid_level" id="cb_lev_22_hybrid_level" class="cb_levels" onClick="uncheck_all_checkbox('lev')"><span onClick="show_vars_for_level('22_hybrid_level');">22 hybrid level</span> </span>&nbsp;<span id="lev_23_hybrid_level" title="23 hybrid level" class="highlight levels"><input type="checkbox" name="lev_23_hybrid_level" id="cb_lev_23_hybrid_level" class="cb_levels" onClick="uncheck_all_checkbox('lev')"><span onClick="show_vars_for_level('23_hybrid_level');">23 hybrid level</span> </span>&nbsp;<span id="lev_24_hybrid_level" title="24 hybrid level" class="highlight levels"><input type="checkbox" name="lev_24_hybrid_level" id="cb_lev_24_hybrid_level" class="cb_levels" onClick="uncheck_all_checkbox('lev')"><span onClick="show_vars_for_level('24_hybrid_level');">24 hybrid level</span> </span>&nbsp;<span id="lev_25_hybrid_level" title="25 hybrid level" class="highlight levels"><input type="checkbox" name="lev_25_hybrid_level" id="cb_lev_25_hybrid_level" class="cb_levels" onClick="uncheck_all_checkbox('lev')"><span onClick="show_vars_for_level('25_hybrid_level');">25 hybrid level</span> </span>&nbsp;<span id="lev_26_hybrid_level" title="26 hybrid level" class="highlight levels"><input type="checkbox" name="lev_26_hybrid_level" id="cb_lev_26_hybrid_level" class="cb_levels" onClick="uncheck_all_checkbox('lev')"><span onClick="show_vars_for_level('26_hybrid_level');">26 hybrid level</span> </span>&nbsp;<span id="lev_27_hybrid_level" title="27 hybrid level" class="highlight levels"><input type="checkbox" name="lev_27_hybrid_level" id="cb_lev_27_hybrid_level" class="cb_levels" onClick="uncheck_all_checkbox('lev')"><span onClick="show_vars_for_level('27_hybrid_level');">27 hybrid level</span> </span>&nbsp;<span id="lev_28_hybrid_level" title="28 hybrid level" class="highlight levels"><input type="checkbox" name="lev_28_hybrid_level" id="cb_lev_28_hybrid_level" class="cb_levels" onClick="uncheck_all_checkbox('lev')"><span onClick="show_vars_for_level('28_hybrid_level');">28 hybrid level</span> </span>&nbsp;<span id="lev_29_hybrid_level" title="29 hybrid level" class="highlight levels"><input type="checkbox" name="lev_29_hybrid_level" id="cb_lev_29_hybrid_level" class="cb_levels" onClick="uncheck_all_checkbox('lev')"><span onClick="show_vars_for_level('29_hybrid_level');">29 hybrid level</span> </span>&nbsp;<span id="lev_30_hybrid_level" title="30 hybrid level" class="highlight levels"><input type="checkbox" name="lev_30_hybrid_level" id="cb_lev_30_hybrid_level" class="cb_levels" onClick="uncheck_all_checkbox('lev')"><span onClick="show_vars_for_level('30_hybrid_level');">30 hybrid level</span> </span>&nbsp;<span id="lev_31_hybrid_level" title="31 hybrid level" class="highlight levels"><input type="checkbox" name="lev_31_hybrid_level" id="cb_lev_31_hybrid_level" class="cb_levels" onClick="uncheck_all_checkbox('lev')"><span onClick="show_vars_for_level('31_hybrid_level');">31 hybrid level</span> </span>&nbsp;<span id="lev_32_hybrid_level" title="32 hybrid level" class="highlight levels"><input type="checkbox" name="lev_32_hybrid_level" id="cb_lev_32_hybrid_level" class="cb_levels" onClick="uncheck_all_checkbox('lev')"><span onClick="show_vars_for_level('32_hybrid_level');">32 hybrid level</span> </span>&nbsp;<span id="lev_33_hybrid_level" title="33 hybrid level" class="highlight levels"><input type="checkbox" name="lev_33_hybrid_level" id="cb_lev_33_hybrid_level" class="cb_levels" onClick="uncheck_all_checkbox('lev')"><span onClick="show_vars_for_level('33_hybrid_level');">33 hybrid level</span> </span>&nbsp;<span id="lev_34_hybrid_level" title="34 hybrid level" class="highlight levels"><input type="checkbox" name="lev_34_hybrid_level" id="cb_lev_34_hybrid_level" class="cb_levels" onClick="uncheck_all_checkbox('lev')"><span onClick="show_vars_for_level('34_hybrid_level');">34 hybrid level</span> </span>&nbsp;<span id="lev_35_hybrid_level" title="35 hybrid level" class="highlight levels"><input type="checkbox" name="lev_35_hybrid_level" id="cb_lev_35_hybrid_level" class="cb_levels" onClick="uncheck_all_checkbox('lev')"><span onClick="show_vars_for_level('35_hybrid_level');">35 hybrid level</span> </span>&nbsp;<span id="lev_36_hybrid_level" title="36 hybrid level" class="highlight levels"><input type="checkbox" name="lev_36_hybrid_level" id="cb_lev_36_hybrid_level" class="cb_levels" onClick="uncheck_all_checkbox('lev')"><span onClick="show_vars_for_level('36_hybrid_level');">36 hybrid level</span> </span>&nbsp;<span id="lev_37_hybrid_level" title="37 hybrid level" class="highlight levels"><input type="checkbox" name="lev_37_hybrid_level" id="cb_lev_37_hybrid_level" class="cb_levels" onClick="uncheck_all_checkbox('lev')"><span onClick="show_vars_for_level('37_hybrid_level');">37 hybrid level</span> </span>&nbsp;<span id="lev_38_hybrid_level" title="38 hybrid level" class="highlight levels"><input type="checkbox" name="lev_38_hybrid_level" id="cb_lev_38_hybrid_level" class="cb_levels" onClick="uncheck_all_checkbox('lev')"><span onClick="show_vars_for_level('38_hybrid_level');">38 hybrid level</span> </span>&nbsp;<span id="lev_39_hybrid_level" title="39 hybrid level" class="highlight levels"><input type="checkbox" name="lev_39_hybrid_level" id="cb_lev_39_hybrid_level" class="cb_levels" onClick="uncheck_all_checkbox('lev')"><span onClick="show_vars_for_level('39_hybrid_level');">39 hybrid level</span> </span>&nbsp;<span id="lev_40_hybrid_level" title="40 hybrid level" class="highlight levels"><input type="checkbox" name="lev_40_hybrid_level" id="cb_lev_40_hybrid_level" class="cb_levels" onClick="uncheck_all_checkbox('lev')"><span onClick="show_vars_for_level('40_hybrid_level');">40 hybrid level</span> </span>&nbsp;<span id="lev_41_hybrid_level" title="41 hybrid level" class="highlight levels"><input type="checkbox" name="lev_41_hybrid_level" id="cb_lev_41_hybrid_level" class="cb_levels" onClick="uncheck_all_checkbox('lev')"><span onClick="show_vars_for_level('41_hybrid_level');">41 hybrid level</span> </span>&nbsp;<span id="lev_42_hybrid_level" title="42 hybrid level" class="highlight levels"><input type="checkbox" name="lev_42_hybrid_level" id="cb_lev_42_hybrid_level" class="cb_levels" onClick="uncheck_all_checkbox('lev')"><span onClick="show_vars_for_level('42_hybrid_level');">42 hybrid level</span> </span>&nbsp;<span id="lev_43_hybrid_level" title="43 hybrid level" class="highlight levels"><input type="checkbox" name="lev_43_hybrid_level" id="cb_lev_43_hybrid_level" class="cb_levels" onClick="uncheck_all_checkbox('lev')"><span onClick="show_vars_for_level('43_hybrid_level');">43 hybrid level</span> </span>&nbsp;<span id="lev_44_hybrid_level" title="44 hybrid level" class="highlight levels"><input type="checkbox" name="lev_44_hybrid_level" id="cb_lev_44_hybrid_level" class="cb_levels" onClick="uncheck_all_checkbox('lev')"><span onClick="show_vars_for_level('44_hybrid_level');">44 hybrid level</span> </span>&nbsp;<span id="lev_45_hybrid_level" title="45 hybrid level" class="highlight levels"><input type="checkbox" name="lev_45_hybrid_level" id="cb_lev_45_hybrid_level" class="cb_levels" onClick="uncheck_all_checkbox('lev')"><span onClick="show_vars_for_level('45_hybrid_level');">45 hybrid level</span> </span>&nbsp;<span id="lev_46_hybrid_level" title="46 hybrid level" class="highlight levels"><input type="checkbox" name="lev_46_hybrid_level" id="cb_lev_46_hybrid_level" class="cb_levels" onClick="uncheck_all_checkbox('lev')"><span onClick="show_vars_for_level('46_hybrid_level');">46 hybrid level</span> </span>&nbsp;<span id="lev_47_hybrid_level" title="47 hybrid level" class="highlight levels"><input type="checkbox" name="lev_47_hybrid_level" id="cb_lev_47_hybrid_level" class="cb_levels" onClick="uncheck_all_checkbox('lev')"><span onClick="show_vars_for_level('47_hybrid_level');">47 hybrid level</span> </span>&nbsp;<span id="lev_48_hybrid_level" title="48 hybrid level" class="highlight levels"><input type="checkbox" name="lev_48_hybrid_level" id="cb_lev_48_hybrid_level" class="cb_levels" onClick="uncheck_all_checkbox('lev')"><span onClick="show_vars_for_level('48_hybrid_level');">48 hybrid level</span> </span>&nbsp;<span id="lev_49_hybrid_level" title="49 hybrid level" class="highlight levels"><input type="checkbox" name="lev_49_hybrid_level" id="cb_lev_49_hybrid_level" class="cb_levels" onClick="uncheck_all_checkbox('lev')"><span onClick="show_vars_for_level('49_hybrid_level');">49 hybrid level</span> </span>&nbsp;<span id="lev_50_hybrid_level" title="50 hybrid level" class="highlight levels"><input type="checkbox" name="lev_50_hybrid_level" id="cb_lev_50_hybrid_level" class="cb_levels" onClick="uncheck_all_checkbox('lev')"><span onClick="show_vars_for_level('50_hybrid_level');">50 hybrid level</span> </span>&nbsp;<span id="lev_51_hybrid_level" title="51 hybrid level" class="highlight levels"><input type="checkbox" name="lev_51_hybrid_level" id="cb_lev_51_hybrid_level" class="cb_levels" onClick="uncheck_all_checkbox('lev')"><span onClick="show_vars_for_level('51_hybrid_level');">51 hybrid level</span> </span>&nbsp;<span id="lev_52_hybrid_level" title="52 hybrid level" class="highlight levels"><input type="checkbox" name="lev_52_hybrid_level" id="cb_lev_52_hybrid_level" class="cb_levels" onClick="uncheck_all_checkbox('lev')"><span onClick="show_vars_for_level('52_hybrid_level');">52 hybrid level</span> </span>&nbsp;<span id="lev_53_hybrid_level" title="53 hybrid level" class="highlight levels"><input type="checkbox" name="lev_53_hybrid_level" id="cb_lev_53_hybrid_level" class="cb_levels" onClick="uncheck_all_checkbox('lev')"><span onClick="show_vars_for_level('53_hybrid_level');">53 hybrid level</span> </span>&nbsp;<span id="lev_54_hybrid_level" title="54 hybrid level" class="highlight levels"><input type="checkbox" name="lev_54_hybrid_level" id="cb_lev_54_hybrid_level" class="cb_levels" onClick="uncheck_all_checkbox('lev')"><span onClick="show_vars_for_level('54_hybrid_level');">54 hybrid level</span> </span>&nbsp;<span id="lev_55_hybrid_level" title="55 hybrid level" class="highlight levels"><input type="checkbox" name="lev_55_hybrid_level" id="cb_lev_55_hybrid_level" class="cb_levels" onClick="uncheck_all_checkbox('lev')"><span onClick="show_vars_for_level('55_hybrid_level');">55 hybrid level</span> </span>&nbsp;<span id="lev_56_hybrid_level" title="56 hybrid level" class="highlight levels"><input type="checkbox" name="lev_56_hybrid_level" id="cb_lev_56_hybrid_level" class="cb_levels" onClick="uncheck_all_checkbox('lev')"><span onClick="show_vars_for_level('56_hybrid_level');">56 hybrid level</span> </span>&nbsp;<span id="lev_57_hybrid_level" title="57 hybrid level" class="highlight levels"><input type="checkbox" name="lev_57_hybrid_level" id="cb_lev_57_hybrid_level" class="cb_levels" onClick="uncheck_all_checkbox('lev')"><span onClick="show_vars_for_level('57_hybrid_level');">57 hybrid level</span> </span>&nbsp;<span id="lev_58_hybrid_level" title="58 hybrid level" class="highlight levels"><input type="checkbox" name="lev_58_hybrid_level" id="cb_lev_58_hybrid_level" class="cb_levels" onClick="uncheck_all_checkbox('lev')"><span onClick="show_vars_for_level('58_hybrid_level');">58 hybrid level</span> </span>&nbsp;<span id="lev_59_hybrid_level" title="59 hybrid level" class="highlight levels"><input type="checkbox" name="lev_59_hybrid_level" id="cb_lev_59_hybrid_level" class="cb_levels" onClick="uncheck_all_checkbox('lev')"><span onClick="show_vars_for_level('59_hybrid_level');">59 hybrid level</span> </span>&nbsp;<span id="lev_60_hybrid_level" title="60 hybrid level" class="highlight levels"><input type="checkbox" name="lev_60_hybrid_level" id="cb_lev_60_hybrid_level" class="cb_levels" onClick="uncheck_all_checkbox('lev')"><span onClick="show_vars_for_level('60_hybrid_level');">60 hybrid level</span> </span>&nbsp;<span id="lev_61_hybrid_level" title="61 hybrid level" class="highlight levels"><input type="checkbox" name="lev_61_hybrid_level" id="cb_lev_61_hybrid_level" class="cb_levels" onClick="uncheck_all_checkbox('lev')"><span onClick="show_vars_for_level('61_hybrid_level');">61 hybrid level</span> </span>&nbsp;<span id="lev_62_hybrid_level" title="62 hybrid level" class="highlight levels"><input type="checkbox" name="lev_62_hybrid_level" id="cb_lev_62_hybrid_level" class="cb_levels" onClick="uncheck_all_checkbox('lev')"><span onClick="show_vars_for_level('62_hybrid_level');">62 hybrid level</span> </span>&nbsp;<span id="lev_63_hybrid_level" title="63 hybrid level" class="highlight levels"><input type="checkbox" name="lev_63_hybrid_level" id="cb_lev_63_hybrid_level" class="cb_levels" onClick="uncheck_all_checkbox('lev')"><span onClick="show_vars_for_level('63_hybrid_level');">63 hybrid level</span> </span>&nbsp;<span id="lev_64_hybrid_level" title="64 hybrid level" class="highlight levels"><input type="checkbox" name="lev_64_hybrid_level" id="cb_lev_64_hybrid_level" class="cb_levels" onClick="uncheck_all_checkbox('lev')"><span onClick="show_vars_for_level('64_hybrid_level');">64 hybrid level</span> </span>&nbsp;</div>&nbsp;<br><h2>Subregion</h2><div style="margin-left:20px"><table><tr>  <td><input type="checkbox" name="subregion" id="subregion_checkbox" value="">&nbsp;make&nbsp;subregion:&nbsp;&nbsp;&nbsp;</td>  <td>top&nbsp;latitude </td><td colspan="2" style="text-align:center"><input type="text" name="toplat" value="90" onChange="change_latlon();" size=5></td><td></td></tr>  <tr><td>&nbsp;</td><td>left&nbsp;longitude <td><input type="text" name="leftlon" id="leftlon_id" value="0" onChange="change_latlon();" size=5></td>   <td><input type="text" name="rightlon" id="rightlon_id" value="360" onChange="change_latlon();" size=5></td><td>right&nbsp;longitude</td></tr> <tr>  <td></td>  <td>bottom&nbsp;latitude <td colspan="2" style="text-align:center"><input type="text" name="bottomlat" value="-90" onChange="change_latlon();" size=5></td><td></td></tr></table></div><h2>Download</h2><div style="margin-left:20px"><p>In order to not overload the server, please pause before resubmitting requests.</p><input type="button" onClick="validate_form(this.form.id);" value="Start download" title="Download the selected grib file">&nbsp;&nbsp;<input type="reset" onClick="reset_form(this.form.id)" title="Reset all page values"><br></div></form><br><div style="float:left;margin-left:20px"><input type="button" name="showurl" value="Show URL" onClick="showUrl('https://nomads.ncep.noaa.gov/cgi-bin/filter_gefs_chem_0p50.pl');" title="Display the URL that will download the grib file with selected values.  The URL text will be found in the large text box to the right of, or below this button."> <br><br><input type="button" name="clippy" value="Copy URL" onClick="copyUrl('showurl_id');" title="Copy URL text to the local clipboard.  To use the text, paste it into your text editor."> <br><br></div><div style="float:left;margin-left:10px;margin-bottom:50px"><textarea id="showurl_id" rows="6" cols="80" readonly></textarea></div></div><div style="clear:both">
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
</div></div></div><script src="js/params_levels_gefs_chem5.js"></script>
<script>g_ds = "gefs_chem_0p50";</script><div id="version_line"> NCEP NOMADS Version 2.3.27, October 2026 </div><footer id="footer">
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


