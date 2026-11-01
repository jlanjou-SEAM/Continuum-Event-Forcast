<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Grib Filter gfs_sflux</title><link rel="stylesheet" href="/bundles/noaatemplating/css/weather.css?2.3.27">
<link rel="stylesheet" href="/bundles/noaatemplating/css/com/header.css?2.3.27">
<link rel="stylesheet" href="/bundles/noaatemplating/css/com/navbar.css?2.3.27">
<link rel="stylesheet" href="/bundles/noaatemplating/css/com/footer.css?2.3.27">
<link rel="stylesheet" href="/css/nomads.css?2.3.27">
<script src="/bundles/noaatemplating/cdn/js/jquery.3.7.1.min.js?2.3.27"></script>
<script src="/js/nomads.js"></script>
<script>NS_CSM_td=1560604535;NS_CSM_pd=275116640;NS_CSM_u="/clm10";NS_CSM_col="AAAAAAUt+9xaRq9SjXEt60BszW1ILvel29N1GfhCL15N6H+eaHWwFgImngQIOfNmLbkfpww=";</script><script type="text/javascript">function sendTimingInfoInit(){setTimeout(sendTimingInfo,0)}function sendTimingInfo(){var wp=window.performance;if(wp){var c1,c2,t;c1=wp.timing;if(c1){var cm={};cm.ns=c1.navigationStart;if((t=c1.unloadEventStart)>0)cm.us=t;if((t=c1.unloadEventEnd)>0)cm.ue=t;if((t=c1.redirectStart)>0)cm.rs=t;if((t=c1.redirectEnd)>0)cm.re=t;cm.fs=c1.fetchStart;cm.dls=c1.domainLookupStart;cm.dle=c1.domainLookupEnd;cm.cs=c1.connectStart;cm.ce=c1.connectEnd;if((t=c1.secureConnectionStart)>0)cm.scs=t;cm.rqs=c1.requestStart;cm.rss=c1.responseStart;cm.rse=c1.responseEnd;cm.dl=c1.domLoading;cm.di=c1.domInteractive;cm.dcls=c1.domContentLoadedEventStart;cm.dcle=c1.domContentLoadedEventEnd;cm.dc=c1.domComplete;if((t=c1.loadEventStart)>0)cm.ls=t;if((t=c1.loadEventEnd)>0)cm.le=t;cm.tid=NS_CSM_td;cm.pid=NS_CSM_pd;cm.ac=NS_CSM_col;var xhttp=new XMLHttpRequest();if(xhttp){var JSON=JSON||{};JSON.stringify=JSON.stringify||function(ob){var t=typeof(ob);if(t!="object"||ob===null){if(t=="string")ob='"'+ob+'"';return String(ob);}else{var n,v,json=[],arr=(ob&&ob.constructor==Array);for(n in ob){v=ob[n];t=typeof(v);if(t=="string")v='"'+v+'"';else if(t=="object"&&v!==null)v=JSON.stringify(v);json.push((arr?"":'"'+n+'":')+String(v));}return(arr?"[":"{")+String(json)+(arr?"]":"}");}};xhttp.open("POST",NS_CSM_u,true);xhttp.send(JSON.stringify(cm));}}}}if(window.addEventListener)window.addEventListener("load",sendTimingInfoInit,false);else if(window.attachEvent)window.attachEvent("onload",sendTimingInfoInit);else window.onload=sendTimingInfoInit;</script></head>
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
<div id="grib_filter_body"><h1>NCEP GFS Forecasts Sflux</h1><div id="col_container"><p class="breadcrumb">Directory:&nbsp;&nbsp;<span id="id_breadcrumb"></span></p><div class="col_1"><h2>Available Data Dates:</h2><div id="div_subdir_0" style="border:solid 0px black"><span class="selectable"><span class="selected unselected subdir_0" onClick="click_subdir(0, 'gfs.20261101', this)">gfs.20261101</span></span><br><span class="selectable"><span class="unselected subdir_0" onClick="click_subdir(0, 'gfs.20261031', this)">gfs.20261031</span></span><br><span class="selectable"><span class="unselected subdir_0" onClick="click_subdir(0, 'gfs.20261030', this)">gfs.20261030</span></span><br><span class="selectable"><span class="unselected subdir_0" onClick="click_subdir(0, 'gfs.20261029', this)">gfs.20261029</span></span><br><span class="selectable"><span class="unselected subdir_0" onClick="click_subdir(0, 'gfs.20261028', this)">gfs.20261028</span></span><br><span class="selectable"><span class="unselected subdir_0" onClick="click_subdir(0, 'gfs.20261027', this)">gfs.20261027</span></span><br><span class="selectable"><span class="unselected subdir_0" onClick="click_subdir(0, 'gfs.20261026', this)">gfs.20261026</span></span><br><span class="selectable"><span class="unselected subdir_0" onClick="click_subdir(0, 'gfs.20261025', this)">gfs.20261025</span></span><br><span class="selectable"><span class="unselected subdir_0" onClick="click_subdir(0, 'gfs.20261024', this)">gfs.20261024</span></span><br><span class="selectable"><span class="unselected subdir_0" onClick="click_subdir(0, 'gfs.20261023', this)">gfs.20261023</span></span><br></div></div><div class="col_2"><h2>Cycle:</h2><div id="div_subdir_1" style="border:solid 0px black"><span class="selectable"><span class="selected unselected subdir_1" onClick="click_subdir(1, '18', this)">18</span></span><br><span class="selectable"><span class="unselected subdir_1" onClick="click_subdir(1, '12', this)">12</span></span><br><span class="selectable"><span class="unselected subdir_1" onClick="click_subdir(1, '06', this)">06</span></span><br><span class="selectable"><span class="unselected subdir_1" onClick="click_subdir(1, '00', this)">00</span></span><br></div><h2>Subdirectory:</h2><div id="div_subdir_2" style="border:solid 0px black"><span class="dirNoChoice subdir_2" >atmos</span><br></div></div><div class="col_3"><h2>Available Files (file size):</h2><div id="div_files" ><select id="file_selector" onChange="setFile(this.value)"><option value="gfs.t18z.sfluxgrbf000.grib2"  selected>gfs.t18z.sfluxgrbf000.grib2 (127929708)</option><option value="gfs.t18z.sfluxgrbf001.grib2" >gfs.t18z.sfluxgrbf001.grib2 (289589616)</option><option value="gfs.t18z.sfluxgrbf002.grib2" >gfs.t18z.sfluxgrbf002.grib2 (292858427)</option><option value="gfs.t18z.sfluxgrbf003.grib2" >gfs.t18z.sfluxgrbf003.grib2 (295762448)</option><option value="gfs.t18z.sfluxgrbf004.grib2" >gfs.t18z.sfluxgrbf004.grib2 (300572887)</option><option value="gfs.t18z.sfluxgrbf005.grib2" >gfs.t18z.sfluxgrbf005.grib2 (308233740)</option><option value="gfs.t18z.sfluxgrbf006.grib2" >gfs.t18z.sfluxgrbf006.grib2 (309701950)</option><option value="gfs.t18z.sfluxgrbf007.grib2" >gfs.t18z.sfluxgrbf007.grib2 (283101339)</option><option value="gfs.t18z.sfluxgrbf008.grib2" >gfs.t18z.sfluxgrbf008.grib2 (288297189)</option><option value="gfs.t18z.sfluxgrbf009.grib2" >gfs.t18z.sfluxgrbf009.grib2 (291645581)</option><option value="gfs.t18z.sfluxgrbf010.grib2" >gfs.t18z.sfluxgrbf010.grib2 (298473443)</option><option value="gfs.t18z.sfluxgrbf011.grib2" >gfs.t18z.sfluxgrbf011.grib2 (302845663)</option><option value="gfs.t18z.sfluxgrbf012.grib2" >gfs.t18z.sfluxgrbf012.grib2 (307759563)</option><option value="gfs.t18z.sfluxgrbf013.grib2" >gfs.t18z.sfluxgrbf013.grib2 (289722647)</option><option value="gfs.t18z.sfluxgrbf014.grib2" >gfs.t18z.sfluxgrbf014.grib2 (294314366)</option><option value="gfs.t18z.sfluxgrbf015.grib2" >gfs.t18z.sfluxgrbf015.grib2 (297412472)</option><option value="gfs.t18z.sfluxgrbf016.grib2" >gfs.t18z.sfluxgrbf016.grib2 (301803913)</option><option value="gfs.t18z.sfluxgrbf017.grib2" >gfs.t18z.sfluxgrbf017.grib2 (307327175)</option><option value="gfs.t18z.sfluxgrbf018.grib2" >gfs.t18z.sfluxgrbf018.grib2 (311585623)</option><option value="gfs.t18z.sfluxgrbf019.grib2" >gfs.t18z.sfluxgrbf019.grib2 (290483483)</option><option value="gfs.t18z.sfluxgrbf020.grib2" >gfs.t18z.sfluxgrbf020.grib2 (295938564)</option><option value="gfs.t18z.sfluxgrbf021.grib2" >gfs.t18z.sfluxgrbf021.grib2 (298480323)</option><option value="gfs.t18z.sfluxgrbf022.grib2" >gfs.t18z.sfluxgrbf022.grib2 (302483255)</option><option value="gfs.t18z.sfluxgrbf023.grib2" >gfs.t18z.sfluxgrbf023.grib2 (306350170)</option><option value="gfs.t18z.sfluxgrbf024.grib2" >gfs.t18z.sfluxgrbf024.grib2 (308367268)</option><option value="gfs.t18z.sfluxgrbf025.grib2" >gfs.t18z.sfluxgrbf025.grib2 (284970673)</option><option value="gfs.t18z.sfluxgrbf026.grib2" >gfs.t18z.sfluxgrbf026.grib2 (292519728)</option><option value="gfs.t18z.sfluxgrbf027.grib2" >gfs.t18z.sfluxgrbf027.grib2 (295860310)</option><option value="gfs.t18z.sfluxgrbf028.grib2" >gfs.t18z.sfluxgrbf028.grib2 (301018376)</option><option value="gfs.t18z.sfluxgrbf029.grib2" >gfs.t18z.sfluxgrbf029.grib2 (307311017)</option><option value="gfs.t18z.sfluxgrbf030.grib2" >gfs.t18z.sfluxgrbf030.grib2 (314590403)</option><option value="gfs.t18z.sfluxgrbf031.grib2" >gfs.t18z.sfluxgrbf031.grib2 (290730423)</option><option value="gfs.t18z.sfluxgrbf032.grib2" >gfs.t18z.sfluxgrbf032.grib2 (292496857)</option><option value="gfs.t18z.sfluxgrbf033.grib2" >gfs.t18z.sfluxgrbf033.grib2 (294835589)</option><option value="gfs.t18z.sfluxgrbf034.grib2" >gfs.t18z.sfluxgrbf034.grib2 (302564533)</option><option value="gfs.t18z.sfluxgrbf035.grib2" >gfs.t18z.sfluxgrbf035.grib2 (308613684)</option></select></div></div></div><script>var subdirsArr=["gfs.20261101","18","atmos"];set_breadcrumb();</script><div style="clear:both"></div>
<form action="https://nomads.ncep.noaa.gov/cgi-bin/filter_gfs_sflux.pl" method="get" id="form_id">
<input type="hidden" id="dir_id" name="dir" value="/gfs.20261101/18/atmos"><input type="hidden" id="file_id" name="file" value="gfs.t18z.sfluxgrbf000.grib2"><h2>Parameters &nbsp;<button class="" type="button" title="Check boxes of all highlighted parameters" onclick="check_all_highlighted('vars')" >Check Highlighted</button>&nbsp;<button class="" type="button" title="Check boxes of all parameter choices" onclick="check_all('cb_vars')" >Check All Parameters</button>&nbsp;<button class="" type="button" title="Uncheck boxes of all parameters" onclick="uncheck_all('cb_vars')" >Uncheck All Parameters</button></h2><div style="margin-left:20px"><span title="All Parameters - if selected, all available parameters are included in file downloads" ><input type="checkbox" name="all_var" id="all_var_chk" checked>&nbsp; all  </span><span id="var_ACOND" title="Aerodynamic conductance" class="highlight vars" ><input type="checkbox" name="var_ACOND" id="cb_var_ACOND" class="cb_vars" onClick="uncheck_all_checkbox('var')">&nbsp;<span onClick="show_levels_for_var('ACOND');">ACOND</span> </span>&nbsp;<span id="var_ALBDO" title="Albedo" class="highlight vars" ><input type="checkbox" name="var_ALBDO" id="cb_var_ALBDO" class="cb_vars" onClick="uncheck_all_checkbox('var')">&nbsp;<span onClick="show_levels_for_var('ALBDO');">ALBDO</span> </span>&nbsp;<span id="var_CDUVB" title="Clear sky UV-B downward solar flux" class="highlight vars" ><input type="checkbox" name="var_CDUVB" id="cb_var_CDUVB" class="cb_vars" onClick="uncheck_all_checkbox('var')">&nbsp;<span onClick="show_levels_for_var('CDUVB');">CDUVB</span> </span>&nbsp;<span id="var_CNWAT" title="Plant canopy surface water" class="highlight vars" ><input type="checkbox" name="var_CNWAT" id="cb_var_CNWAT" class="cb_vars" onClick="uncheck_all_checkbox('var')">&nbsp;<span onClick="show_levels_for_var('CNWAT');">CNWAT</span> </span>&nbsp;<span id="var_CPOFP" title="Percent frozen precipitation" class="highlight vars" ><input type="checkbox" name="var_CPOFP" id="cb_var_CPOFP" class="cb_vars" onClick="uncheck_all_checkbox('var')">&nbsp;<span onClick="show_levels_for_var('CPOFP');">CPOFP</span> </span>&nbsp;<span id="var_CPRAT" title="Convective precipitation rate" class="highlight vars" ><input type="checkbox" name="var_CPRAT" id="cb_var_CPRAT" class="cb_vars" onClick="uncheck_all_checkbox('var')">&nbsp;<span onClick="show_levels_for_var('CPRAT');">CPRAT</span> </span>&nbsp;<span id="var_CSDLF" title="Clear Sky downward long wave flux" class="highlight vars" ><input type="checkbox" name="var_CSDLF" id="cb_var_CSDLF" class="cb_vars" onClick="uncheck_all_checkbox('var')">&nbsp;<span onClick="show_levels_for_var('CSDLF');">CSDLF</span> </span>&nbsp;<span id="var_CSDSF" title="Clear Sky Downward Solar Flux" class="highlight vars" ><input type="checkbox" name="var_CSDSF" id="cb_var_CSDSF" class="cb_vars" onClick="uncheck_all_checkbox('var')">&nbsp;<span onClick="show_levels_for_var('CSDSF');">CSDSF</span> </span>&nbsp;<span id="var_CSULF" title="Clear Sky Downward Solar Flux " class="highlight vars" ><input type="checkbox" name="var_CSULF" id="cb_var_CSULF" class="cb_vars" onClick="uncheck_all_checkbox('var')">&nbsp;<span onClick="show_levels_for_var('CSULF');">CSULF</span> </span>&nbsp;<span id="var_CSUSF" title="Clear Sky Upward Solar Flux" class="highlight vars" ><input type="checkbox" name="var_CSUSF" id="cb_var_CSUSF" class="cb_vars" onClick="uncheck_all_checkbox('var')">&nbsp;<span onClick="show_levels_for_var('CSUSF');">CSUSF</span> </span>&nbsp;<span id="var_CWORK" title="Cloud work function" class="highlight vars" ><input type="checkbox" name="var_CWORK" id="cb_var_CWORK" class="cb_vars" onClick="uncheck_all_checkbox('var')">&nbsp;<span onClick="show_levels_for_var('CWORK');">CWORK</span> </span>&nbsp;<span id="var_DLWRF" title="Downward long-wave radiation flux" class="highlight vars" ><input type="checkbox" name="var_DLWRF" id="cb_var_DLWRF" class="cb_vars" onClick="uncheck_all_checkbox('var')">&nbsp;<span onClick="show_levels_for_var('DLWRF');">DLWRF</span> </span>&nbsp;<span id="var_DSWRF" title="Downward short-wave radiation flux" class="highlight vars" ><input type="checkbox" name="var_DSWRF" id="cb_var_DSWRF" class="cb_vars" onClick="uncheck_all_checkbox('var')">&nbsp;<span onClick="show_levels_for_var('DSWRF');">DSWRF</span> </span>&nbsp;<span id="var_DUVB" title="UV-B downward solar flux" class="highlight vars" ><input type="checkbox" name="var_DUVB" id="cb_var_DUVB" class="cb_vars" onClick="uncheck_all_checkbox('var')">&nbsp;<span onClick="show_levels_for_var('DUVB');">DUVB</span> </span>&nbsp;<span id="var_EVBS" title="Direct evaporation from bare soil" class="highlight vars" ><input type="checkbox" name="var_EVBS" id="cb_var_EVBS" class="cb_vars" onClick="uncheck_all_checkbox('var')">&nbsp;<span onClick="show_levels_for_var('EVBS');">EVBS</span> </span>&nbsp;<span id="var_EVCW" title="Canopy water evaporation" class="highlight vars" ><input type="checkbox" name="var_EVCW" id="cb_var_EVCW" class="cb_vars" onClick="uncheck_all_checkbox('var')">&nbsp;<span onClick="show_levels_for_var('EVCW');">EVCW</span> </span>&nbsp;<span id="var_FLDCP" title="Field capacity" class="highlight vars" ><input type="checkbox" name="var_FLDCP" id="cb_var_FLDCP" class="cb_vars" onClick="uncheck_all_checkbox('var')">&nbsp;<span onClick="show_levels_for_var('FLDCP');">FLDCP</span> </span>&nbsp;<span id="var_FRICV" title="Surface friction velocity" class="highlight vars" ><input type="checkbox" name="var_FRICV" id="cb_var_FRICV" class="cb_vars" onClick="uncheck_all_checkbox('var')">&nbsp;<span onClick="show_levels_for_var('FRICV');">FRICV</span> </span>&nbsp;<span id="var_GFLUX" title="Ground heat flux" class="highlight vars" ><input type="checkbox" name="var_GFLUX" id="cb_var_GFLUX" class="cb_vars" onClick="uncheck_all_checkbox('var')">&nbsp;<span onClick="show_levels_for_var('GFLUX');">GFLUX</span> </span>&nbsp;<span id="var_HCDC" title="High Cloud Cover" class="highlight vars" ><input type="checkbox" name="var_HCDC" id="cb_var_HCDC" class="cb_vars" onClick="uncheck_all_checkbox('var')">&nbsp;<span onClick="show_levels_for_var('HCDC');">HCDC</span> </span>&nbsp;<span id="var_HGT" title="Geopotential height" class="highlight vars" ><input type="checkbox" name="var_HGT" id="cb_var_HGT" class="cb_vars" onClick="uncheck_all_checkbox('var')">&nbsp;<span onClick="show_levels_for_var('HGT');">HGT</span> </span>&nbsp;<span id="var_HPBL" title="Planetary boundary layer height" class="highlight vars" ><input type="checkbox" name="var_HPBL" id="cb_var_HPBL" class="cb_vars" onClick="uncheck_all_checkbox('var')">&nbsp;<span onClick="show_levels_for_var('HPBL');">HPBL</span> </span>&nbsp;<span id="var_ICEC" title="Ice cover" class="highlight vars" ><input type="checkbox" name="var_ICEC" id="cb_var_ICEC" class="cb_vars" onClick="uncheck_all_checkbox('var')">&nbsp;<span onClick="show_levels_for_var('ICEC');">ICEC</span> </span>&nbsp;<span id="var_ICETK" title="Ice thickness" class="highlight vars" ><input type="checkbox" name="var_ICETK" id="cb_var_ICETK" class="cb_vars" onClick="uncheck_all_checkbox('var')">&nbsp;<span onClick="show_levels_for_var('ICETK');">ICETK</span> </span>&nbsp;<span id="var_LAND" title="Land cover" class="highlight vars" ><input type="checkbox" name="var_LAND" id="cb_var_LAND" class="cb_vars" onClick="uncheck_all_checkbox('var')">&nbsp;<span onClick="show_levels_for_var('LAND');">LAND</span> </span>&nbsp;<span id="var_LCDC" title="Low Cloud Cover" class="highlight vars" ><input type="checkbox" name="var_LCDC" id="cb_var_LCDC" class="cb_vars" onClick="uncheck_all_checkbox('var')">&nbsp;<span onClick="show_levels_for_var('LCDC');">LCDC</span> </span>&nbsp;<span id="var_LFTX" title="Surface lifted index" class="highlight vars" ><input type="checkbox" name="var_LFTX" id="cb_var_LFTX" class="cb_vars" onClick="uncheck_all_checkbox('var')">&nbsp;<span onClick="show_levels_for_var('LFTX');">LFTX</span> </span>&nbsp;<span id="var_LHTFL" title="Latent heat net flux" class="highlight vars" ><input type="checkbox" name="var_LHTFL" id="cb_var_LHTFL" class="cb_vars" onClick="uncheck_all_checkbox('var')">&nbsp;<span onClick="show_levels_for_var('LHTFL');">LHTFL</span> </span>&nbsp;<span id="var_MCDC" title="Middle Cloud Cover" class="highlight vars" ><input type="checkbox" name="var_MCDC" id="cb_var_MCDC" class="cb_vars" onClick="uncheck_all_checkbox('var')">&nbsp;<span onClick="show_levels_for_var('MCDC');">MCDC</span> </span>&nbsp;<span id="var_NBDSF" title="Near IR beam downward solar flux" class="highlight vars" ><input type="checkbox" name="var_NBDSF" id="cb_var_NBDSF" class="cb_vars" onClick="uncheck_all_checkbox('var')">&nbsp;<span onClick="show_levels_for_var('NBDSF');">NBDSF</span> </span>&nbsp;<span id="var_NDDSF" title="Near IR diffuse downward solar flux" class="highlight vars" ><input type="checkbox" name="var_NDDSF" id="cb_var_NDDSF" class="cb_vars" onClick="uncheck_all_checkbox('var')">&nbsp;<span onClick="show_levels_for_var('NDDSF');">NDDSF</span> </span>&nbsp;<span id="var_PEVPR" title="Potential Evaporation Rate" class="highlight vars" ><input type="checkbox" name="var_PEVPR" id="cb_var_PEVPR" class="cb_vars" onClick="uncheck_all_checkbox('var')">&nbsp;<span onClick="show_levels_for_var('PEVPR');">PEVPR</span> </span>&nbsp;<span id="var_PRATE" title="Precipitation Rate" class="highlight vars" ><input type="checkbox" name="var_PRATE" id="cb_var_PRATE" class="cb_vars" onClick="uncheck_all_checkbox('var')">&nbsp;<span onClick="show_levels_for_var('PRATE');">PRATE</span> </span>&nbsp;<span id="var_PRES" title="Pressure" class="highlight vars" ><input type="checkbox" name="var_PRES" id="cb_var_PRES" class="cb_vars" onClick="uncheck_all_checkbox('var')">&nbsp;<span onClick="show_levels_for_var('PRES');">PRES</span> </span>&nbsp;<span id="var_PWAT" title="Precipitable Water" class="highlight vars" ><input type="checkbox" name="var_PWAT" id="cb_var_PWAT" class="cb_vars" onClick="uncheck_all_checkbox('var')">&nbsp;<span onClick="show_levels_for_var('PWAT');">PWAT</span> </span>&nbsp;<span id="var_QMAX" title="Maximum specific humidity at 2m" class="highlight vars" ><input type="checkbox" name="var_QMAX" id="cb_var_QMAX" class="cb_vars" onClick="uncheck_all_checkbox('var')">&nbsp;<span onClick="show_levels_for_var('QMAX');">QMAX</span> </span>&nbsp;<span id="var_QMIN" title="Minimum specific humidity at 2m" class="highlight vars" ><input type="checkbox" name="var_QMIN" id="cb_var_QMIN" class="cb_vars" onClick="uncheck_all_checkbox('var')">&nbsp;<span onClick="show_levels_for_var('QMIN');">QMIN</span> </span>&nbsp;<span id="var_SBSNO" title="Sublimation (evaporation from snow)" class="highlight vars" ><input type="checkbox" name="var_SBSNO" id="cb_var_SBSNO" class="cb_vars" onClick="uncheck_all_checkbox('var')">&nbsp;<span onClick="show_levels_for_var('SBSNO');">SBSNO</span> </span>&nbsp;<span id="var_SFCR" title="Surface roughness" class="highlight vars" ><input type="checkbox" name="var_SFCR" id="cb_var_SFCR" class="cb_vars" onClick="uncheck_all_checkbox('var')">&nbsp;<span onClick="show_levels_for_var('SFCR');">SFCR</span> </span>&nbsp;<span id="var_SFEXC" title="Sedimentation Mass Flux" class="highlight vars" ><input type="checkbox" name="var_SFEXC" id="cb_var_SFEXC" class="cb_vars" onClick="uncheck_all_checkbox('var')">&nbsp;<span onClick="show_levels_for_var('SFEXC');">SFEXC</span> </span>&nbsp;<span id="var_SHTFL" title="Sensible Heat Net Flux" class="highlight vars" ><input type="checkbox" name="var_SHTFL" id="cb_var_SHTFL" class="cb_vars" onClick="uncheck_all_checkbox('var')">&nbsp;<span onClick="show_levels_for_var('SHTFL');">SHTFL</span> </span>&nbsp;<span id="var_SLTYP" title="Surface slope type" class="highlight vars" ><input type="checkbox" name="var_SLTYP" id="cb_var_SLTYP" class="cb_vars" onClick="uncheck_all_checkbox('var')">&nbsp;<span onClick="show_levels_for_var('SLTYP');">SLTYP</span> </span>&nbsp;<span id="var_SNOD" title="Snow Depth" class="highlight vars" ><input type="checkbox" name="var_SNOD" id="cb_var_SNOD" class="cb_vars" onClick="uncheck_all_checkbox('var')">&nbsp;<span onClick="show_levels_for_var('SNOD');">SNOD</span> </span>&nbsp;<span id="var_SNOHF" title="Snow phase-change heat flux" class="highlight vars" ><input type="checkbox" name="var_SNOHF" id="cb_var_SNOHF" class="cb_vars" onClick="uncheck_all_checkbox('var')">&nbsp;<span onClick="show_levels_for_var('SNOHF');">SNOHF</span> </span>&nbsp;<span id="var_SNOWC" title="Snow Cover" class="highlight vars" ><input type="checkbox" name="var_SNOWC" id="cb_var_SNOWC" class="cb_vars" onClick="uncheck_all_checkbox('var')">&nbsp;<span onClick="show_levels_for_var('SNOWC');">SNOWC</span> </span>&nbsp;<span id="var_SOILL" title="Liquid volumetric soil moisture (non-frozen)" class="highlight vars" ><input type="checkbox" name="var_SOILL" id="cb_var_SOILL" class="cb_vars" onClick="uncheck_all_checkbox('var')">&nbsp;<span onClick="show_levels_for_var('SOILL');">SOILL</span> </span>&nbsp;<span id="var_SOILM" title="Soil moisture content" class="highlight vars" ><input type="checkbox" name="var_SOILM" id="cb_var_SOILM" class="cb_vars" onClick="uncheck_all_checkbox('var')">&nbsp;<span onClick="show_levels_for_var('SOILM');">SOILM</span> </span>&nbsp;<span id="var_SOILW" title="Volumetric Soil Moisture Content" class="highlight vars" ><input type="checkbox" name="var_SOILW" id="cb_var_SOILW" class="cb_vars" onClick="uncheck_all_checkbox('var')">&nbsp;<span onClick="show_levels_for_var('SOILW');">SOILW</span> </span>&nbsp;<span id="var_SOTYP" title="Soil type (as in Zobler)" class="highlight vars" ><input type="checkbox" name="var_SOTYP" id="cb_var_SOTYP" class="cb_vars" onClick="uncheck_all_checkbox('var')">&nbsp;<span onClick="show_levels_for_var('SOTYP');">SOTYP</span> </span>&nbsp;<span id="var_SPFH" title="Specific Humidity" class="highlight vars" ><input type="checkbox" name="var_SPFH" id="cb_var_SPFH" class="cb_vars" onClick="uncheck_all_checkbox('var')">&nbsp;<span onClick="show_levels_for_var('SPFH');">SPFH</span> </span>&nbsp;<span id="var_SSRUN" title="Storm Surface runoff (non-infiltrating)" class="highlight vars" ><input type="checkbox" name="var_SSRUN" id="cb_var_SSRUN" class="cb_vars" onClick="uncheck_all_checkbox('var')">&nbsp;<span onClick="show_levels_for_var('SSRUN');">SSRUN</span> </span>&nbsp;<span id="var_SUNSD" title="Sunshine Duration" class="highlight vars" ><input type="checkbox" name="var_SUNSD" id="cb_var_SUNSD" class="cb_vars" onClick="uncheck_all_checkbox('var')">&nbsp;<span onClick="show_levels_for_var('SUNSD');">SUNSD</span> </span>&nbsp;<span id="var_TCDC" title="Total Cloud Cover" class="highlight vars" ><input type="checkbox" name="var_TCDC" id="cb_var_TCDC" class="cb_vars" onClick="uncheck_all_checkbox('var')">&nbsp;<span onClick="show_levels_for_var('TCDC');">TCDC</span> </span>&nbsp;<span id="var_TMAX" title="Maximum Temperature" class="highlight vars" ><input type="checkbox" name="var_TMAX" id="cb_var_TMAX" class="cb_vars" onClick="uncheck_all_checkbox('var')">&nbsp;<span onClick="show_levels_for_var('TMAX');">TMAX</span> </span>&nbsp;<span id="var_TMIN" title="Minimum Temperature" class="highlight vars" ><input type="checkbox" name="var_TMIN" id="cb_var_TMIN" class="cb_vars" onClick="uncheck_all_checkbox('var')">&nbsp;<span onClick="show_levels_for_var('TMIN');">TMIN</span> </span>&nbsp;<span id="var_TMP" title="Temperature" class="highlight vars" ><input type="checkbox" name="var_TMP" id="cb_var_TMP" class="cb_vars" onClick="uncheck_all_checkbox('var')">&nbsp;<span onClick="show_levels_for_var('TMP');">TMP</span> </span>&nbsp;<span id="var_TRANS" title="Transpiration" class="highlight vars" ><input type="checkbox" name="var_TRANS" id="cb_var_TRANS" class="cb_vars" onClick="uncheck_all_checkbox('var')">&nbsp;<span onClick="show_levels_for_var('TRANS');">TRANS</span> </span>&nbsp;<span id="var_TSOIL" title="Soil Temperaure" class="highlight vars" ><input type="checkbox" name="var_TSOIL" id="cb_var_TSOIL" class="cb_vars" onClick="uncheck_all_checkbox('var')">&nbsp;<span onClick="show_levels_for_var('TSOIL');">TSOIL</span> </span>&nbsp;<span id="var_UFLX" title="Momentum flux, u component" class="highlight vars" ><input type="checkbox" name="var_UFLX" id="cb_var_UFLX" class="cb_vars" onClick="uncheck_all_checkbox('var')">&nbsp;<span onClick="show_levels_for_var('UFLX');">UFLX</span> </span>&nbsp;<span id="var_UGRD" title="U-Component of Wind" class="highlight vars" ><input type="checkbox" name="var_UGRD" id="cb_var_UGRD" class="cb_vars" onClick="uncheck_all_checkbox('var')">&nbsp;<span onClick="show_levels_for_var('UGRD');">UGRD</span> </span>&nbsp;<span id="var_U-GWD" title="Zonal flux of gravity wave stress" class="highlight vars" ><input type="checkbox" name="var_U-GWD" id="cb_var_U-GWD" class="cb_vars" onClick="uncheck_all_checkbox('var')">&nbsp;<span onClick="show_levels_for_var('U-GWD');">U-GWD</span> </span>&nbsp;<span id="var_ULWRF" title="Upward long wave rad. flux" class="highlight vars" ><input type="checkbox" name="var_ULWRF" id="cb_var_ULWRF" class="cb_vars" onClick="uncheck_all_checkbox('var')">&nbsp;<span onClick="show_levels_for_var('ULWRF');">ULWRF</span> </span>&nbsp;<span id="var_USWRF" title="Upward short wave radiation flux" class="highlight vars" ><input type="checkbox" name="var_USWRF" id="cb_var_USWRF" class="cb_vars" onClick="uncheck_all_checkbox('var')">&nbsp;<span onClick="show_levels_for_var('USWRF');">USWRF</span> </span>&nbsp;<span id="var_VBDSF" title="Visible beam downward solar flux" class="highlight vars" ><input type="checkbox" name="var_VBDSF" id="cb_var_VBDSF" class="cb_vars" onClick="uncheck_all_checkbox('var')">&nbsp;<span onClick="show_levels_for_var('VBDSF');">VBDSF</span> </span>&nbsp;<span id="var_VDDSF" title="Visible diffuse downward solar flux" class="highlight vars" ><input type="checkbox" name="var_VDDSF" id="cb_var_VDDSF" class="cb_vars" onClick="uncheck_all_checkbox('var')">&nbsp;<span onClick="show_levels_for_var('VDDSF');">VDDSF</span> </span>&nbsp;<span id="var_VEG" title="Vegetation" class="highlight vars" ><input type="checkbox" name="var_VEG" id="cb_var_VEG" class="cb_vars" onClick="uncheck_all_checkbox('var')">&nbsp;<span onClick="show_levels_for_var('VEG');">VEG</span> </span>&nbsp;<span id="var_VFLX" title="Momentum flux, v component" class="highlight vars" ><input type="checkbox" name="var_VFLX" id="cb_var_VFLX" class="cb_vars" onClick="uncheck_all_checkbox('var')">&nbsp;<span onClick="show_levels_for_var('VFLX');">VFLX</span> </span>&nbsp;<span id="var_VGRD" title="V-Component of Wind" class="highlight vars" ><input type="checkbox" name="var_VGRD" id="cb_var_VGRD" class="cb_vars" onClick="uncheck_all_checkbox('var')">&nbsp;<span onClick="show_levels_for_var('VGRD');">VGRD</span> </span>&nbsp;<span id="var_VGTYP" title="Vegetation type" class="highlight vars" ><input type="checkbox" name="var_VGTYP" id="cb_var_VGTYP" class="cb_vars" onClick="uncheck_all_checkbox('var')">&nbsp;<span onClick="show_levels_for_var('VGTYP');">VGTYP</span> </span>&nbsp;<span id="var_V-GWD" title="Meridional flux of gravity wave stress" class="highlight vars" ><input type="checkbox" name="var_V-GWD" id="cb_var_V-GWD" class="cb_vars" onClick="uncheck_all_checkbox('var')">&nbsp;<span onClick="show_levels_for_var('V-GWD');">V-GWD</span> </span>&nbsp;<span id="var_WATR" title="Water runoff" class="highlight vars" ><input type="checkbox" name="var_WATR" id="cb_var_WATR" class="cb_vars" onClick="uncheck_all_checkbox('var')">&nbsp;<span onClick="show_levels_for_var('WATR');">WATR</span> </span>&nbsp;<span id="var_WEASD" title="Water equiv. of accum. snow depth" class="highlight vars" ><input type="checkbox" name="var_WEASD" id="cb_var_WEASD" class="cb_vars" onClick="uncheck_all_checkbox('var')">&nbsp;<span onClick="show_levels_for_var('WEASD');">WEASD</span> </span>&nbsp;<span id="var_WILT" title="Wilting point" class="highlight vars" ><input type="checkbox" name="var_WILT" id="cb_var_WILT" class="cb_vars" onClick="uncheck_all_checkbox('var')">&nbsp;<span onClick="show_levels_for_var('WILT');">WILT</span> </span>&nbsp;</div><br><h2>Levels &nbsp;<button class="" type="button" title="Check boxes of all highlighted levels" onclick="check_all_highlighted('levels')" >Check Highlighted</button>&nbsp;<button class="" type="button" title="Check boxes of all level choices" onclick="check_all('cb_levels')" >Check All Levels</button>&nbsp;<button class="" type="button" title="Uncheck boxes of all levels" onclick="uncheck_all('cb_levels')" >Uncheck All Levels</button></h2><div style="margin-left:20px"><span title="All Levels - if selected, all available levels are included in file downloads" ><input type="checkbox" name="all_lev" id="all_lev_chk" checked>&nbsp; all  </span><span id="lev_0-0.1_m_below_ground" title="0-0.1 m below ground" class="highlight levels"><input type="checkbox" name="lev_0-0.1_m_below_ground" id="cb_lev_0-0.1_m_below_ground" class="cb_levels" onClick="uncheck_all_checkbox('lev')"><span onClick="show_vars_for_level('0-0.1_m_below_ground');">0-0.1 m below ground</span> </span>&nbsp;<span id="lev_0.1-0.4_m_below_ground" title="0.1-0.4 m below ground" class="highlight levels"><input type="checkbox" name="lev_0.1-0.4_m_below_ground" id="cb_lev_0.1-0.4_m_below_ground" class="cb_levels" onClick="uncheck_all_checkbox('lev')"><span onClick="show_vars_for_level('0.1-0.4_m_below_ground');">0.1-0.4 m below ground</span> </span>&nbsp;<span id="lev_0.4-1_m_below_ground" title="0.4-1 m below ground" class="highlight levels"><input type="checkbox" name="lev_0.4-1_m_below_ground" id="cb_lev_0.4-1_m_below_ground" class="cb_levels" onClick="uncheck_all_checkbox('lev')"><span onClick="show_vars_for_level('0.4-1_m_below_ground');">0.4-1 m below ground</span> </span>&nbsp;<span id="lev_1-2_m_below_ground" title="1-2 m below ground" class="highlight levels"><input type="checkbox" name="lev_1-2_m_below_ground" id="cb_lev_1-2_m_below_ground" class="cb_levels" onClick="uncheck_all_checkbox('lev')"><span onClick="show_vars_for_level('1-2_m_below_ground');">1-2 m below ground</span> </span>&nbsp;<span id="lev_0-2_m_below_ground" title="0-2 m below ground" class="highlight levels"><input type="checkbox" name="lev_0-2_m_below_ground" id="cb_lev_0-2_m_below_ground" class="cb_levels" onClick="uncheck_all_checkbox('lev')"><span onClick="show_vars_for_level('0-2_m_below_ground');">0-2 m below ground</span> </span>&nbsp;<span id="lev_2_m_above_ground" title="2 m above ground" class="highlight levels"><input type="checkbox" name="lev_2_m_above_ground" id="cb_lev_2_m_above_ground" class="cb_levels" onClick="uncheck_all_checkbox('lev')"><span onClick="show_vars_for_level('2_m_above_ground');">2 m above ground</span> </span>&nbsp;<span id="lev_10_m_above_ground" title="10 m above ground" class="highlight levels"><input type="checkbox" name="lev_10_m_above_ground" id="cb_lev_10_m_above_ground" class="cb_levels" onClick="uncheck_all_checkbox('lev')"><span onClick="show_vars_for_level('10_m_above_ground');">10 m above ground</span> </span>&nbsp;<span id="lev_1_hybrid_level" title="1 hybrid level" class="highlight levels"><input type="checkbox" name="lev_1_hybrid_level" id="cb_lev_1_hybrid_level" class="cb_levels" onClick="uncheck_all_checkbox('lev')"><span onClick="show_vars_for_level('1_hybrid_level');">1 hybrid level</span> </span>&nbsp;<span id="lev_surface" title="surface" class="highlight levels"><input type="checkbox" name="lev_surface" id="cb_lev_surface" class="cb_levels" onClick="uncheck_all_checkbox('lev')"><span onClick="show_vars_for_level('surface');">surface</span> </span>&nbsp;<span id="lev_boundary_layer_cloud_layer" title="boundary layer cloud layer" class="highlight levels"><input type="checkbox" name="lev_boundary_layer_cloud_layer" id="cb_lev_boundary_layer_cloud_layer" class="cb_levels" onClick="uncheck_all_checkbox('lev')"><span onClick="show_vars_for_level('boundary_layer_cloud_layer');">boundary layer cloud layer</span> </span>&nbsp;<span id="lev_entire_atmosphere" title="entire atmosphere" class="highlight levels"><input type="checkbox" name="lev_entire_atmosphere" id="cb_lev_entire_atmosphere" class="cb_levels" onClick="uncheck_all_checkbox('lev')"><span onClick="show_vars_for_level('entire_atmosphere');">entire atmosphere</span> </span>&nbsp;<span id="lev_entire_atmosphere_(considered_as_a_single_layer)" title="entire atmosphere (considered as a single layer)" class="highlight levels"><input type="checkbox" name="lev_entire_atmosphere_(considered_as_a_single_layer)" id="cb_lev_entire_atmosphere_(considered_as_a_single_layer)" class="cb_levels" onClick="uncheck_all_checkbox('lev')"><span onClick="show_vars_for_level('entire_atmosphere_(considered_as_a_single_layer)');">entire atmosphere (considered as a single layer)</span> </span>&nbsp;<span id="lev_top_of_atmosphere" title="top of atmosphere" class="highlight levels"><input type="checkbox" name="lev_top_of_atmosphere" id="cb_lev_top_of_atmosphere" class="cb_levels" onClick="uncheck_all_checkbox('lev')"><span onClick="show_vars_for_level('top_of_atmosphere');">top of atmosphere</span> </span>&nbsp;<span id="lev_convective_cloud_layer" title="convective cloud layer" class="highlight levels"><input type="checkbox" name="lev_convective_cloud_layer" id="cb_lev_convective_cloud_layer" class="cb_levels" onClick="uncheck_all_checkbox('lev')"><span onClick="show_vars_for_level('convective_cloud_layer');">convective cloud layer</span> </span>&nbsp;<span id="lev_convective_cloud_bottom_level" title="convective cloud bottom level" class="highlight levels"><input type="checkbox" name="lev_convective_cloud_bottom_level" id="cb_lev_convective_cloud_bottom_level" class="cb_levels" onClick="uncheck_all_checkbox('lev')"><span onClick="show_vars_for_level('convective_cloud_bottom_level');">convective cloud bottom level</span> </span>&nbsp;<span id="lev_convective_cloud_top_level" title="convective cloud top level" class="highlight levels"><input type="checkbox" name="lev_convective_cloud_top_level" id="cb_lev_convective_cloud_top_level" class="cb_levels" onClick="uncheck_all_checkbox('lev')"><span onClick="show_vars_for_level('convective_cloud_top_level');">convective cloud top level</span> </span>&nbsp;<span id="lev_low_cloud_layer" title="low cloud layer" class="highlight levels"><input type="checkbox" name="lev_low_cloud_layer" id="cb_lev_low_cloud_layer" class="cb_levels" onClick="uncheck_all_checkbox('lev')"><span onClick="show_vars_for_level('low_cloud_layer');">low cloud layer</span> </span>&nbsp;<span id="lev_low_cloud_bottom_level" title="low cloud bottom level" class="highlight levels"><input type="checkbox" name="lev_low_cloud_bottom_level" id="cb_lev_low_cloud_bottom_level" class="cb_levels" onClick="uncheck_all_checkbox('lev')"><span onClick="show_vars_for_level('low_cloud_bottom_level');">low cloud bottom level</span> </span>&nbsp;<span id="lev_low_cloud_top_level" title="low cloud top level" class="highlight levels"><input type="checkbox" name="lev_low_cloud_top_level" id="cb_lev_low_cloud_top_level" class="cb_levels" onClick="uncheck_all_checkbox('lev')"><span onClick="show_vars_for_level('low_cloud_top_level');">low cloud top level</span> </span>&nbsp;<span id="lev_middle_cloud_layer" title="middle cloud layer" class="highlight levels"><input type="checkbox" name="lev_middle_cloud_layer" id="cb_lev_middle_cloud_layer" class="cb_levels" onClick="uncheck_all_checkbox('lev')"><span onClick="show_vars_for_level('middle_cloud_layer');">middle cloud layer</span> </span>&nbsp;<span id="lev_middle_cloud_bottom_level" title="middle cloud bottom level" class="highlight levels"><input type="checkbox" name="lev_middle_cloud_bottom_level" id="cb_lev_middle_cloud_bottom_level" class="cb_levels" onClick="uncheck_all_checkbox('lev')"><span onClick="show_vars_for_level('middle_cloud_bottom_level');">middle cloud bottom level</span> </span>&nbsp;<span id="lev_middle_cloud_top_level" title="middle cloud top level" class="highlight levels"><input type="checkbox" name="lev_middle_cloud_top_level" id="cb_lev_middle_cloud_top_level" class="cb_levels" onClick="uncheck_all_checkbox('lev')"><span onClick="show_vars_for_level('middle_cloud_top_level');">middle cloud top level</span> </span>&nbsp;<span id="lev_high_cloud_layer" title="high cloud layer" class="highlight levels"><input type="checkbox" name="lev_high_cloud_layer" id="cb_lev_high_cloud_layer" class="cb_levels" onClick="uncheck_all_checkbox('lev')"><span onClick="show_vars_for_level('high_cloud_layer');">high cloud layer</span> </span>&nbsp;<span id="lev_high_cloud_bottom_level" title="high cloud bottom level" class="highlight levels"><input type="checkbox" name="lev_high_cloud_bottom_level" id="cb_lev_high_cloud_bottom_level" class="cb_levels" onClick="uncheck_all_checkbox('lev')"><span onClick="show_vars_for_level('high_cloud_bottom_level');">high cloud bottom level</span> </span>&nbsp;<span id="lev_high_cloud_top_level" title="high cloud top level" class="highlight levels"><input type="checkbox" name="lev_high_cloud_top_level" id="cb_lev_high_cloud_top_level" class="cb_levels" onClick="uncheck_all_checkbox('lev')"><span onClick="show_vars_for_level('high_cloud_top_level');">high cloud top level</span> </span>&nbsp;</div>&nbsp;<br><h2>Subregion</h2><div style="margin-left:20px"><table><tr>  <td><input type="checkbox" name="subregion" id="subregion_checkbox" value="">&nbsp;make&nbsp;subregion:&nbsp;&nbsp;&nbsp;</td>  <td>top&nbsp;latitude </td><td colspan="2" style="text-align:center"><input type="text" name="toplat" value="90" onChange="change_latlon();" size=5></td><td></td></tr>  <tr><td>&nbsp;</td><td>left&nbsp;longitude <td><input type="text" name="leftlon" id="leftlon_id" value="0" onChange="change_latlon();" size=5></td>   <td><input type="text" name="rightlon" id="rightlon_id" value="360" onChange="change_latlon();" size=5></td><td>right&nbsp;longitude</td></tr> <tr>  <td></td>  <td>bottom&nbsp;latitude <td colspan="2" style="text-align:center"><input type="text" name="bottomlat" value="-90" onChange="change_latlon();" size=5></td><td></td></tr></table></div><h2>Download</h2><div style="margin-left:20px"><p>In order to not overload the server, please pause before resubmitting requests.</p><input type="button" onClick="validate_form(this.form.id);" value="Start download" title="Download the selected grib file">&nbsp;&nbsp;<input type="reset" onClick="reset_form(this.form.id)" title="Reset all page values"><br></div></form><br><div style="float:left;margin-left:20px"><input type="button" name="showurl" value="Show URL" onClick="showUrl('https://nomads.ncep.noaa.gov/cgi-bin/filter_gfs_sflux.pl');" title="Display the URL that will download the grib file with selected values.  The URL text will be found in the large text box to the right of, or below this button."> <br><br><input type="button" name="clippy" value="Copy URL" onClick="copyUrl('showurl_id');" title="Copy URL text to the local clipboard.  To use the text, paste it into your text editor."> <br><br></div><div style="float:left;margin-left:10px;margin-bottom:50px"><textarea id="showurl_id" rows="6" cols="80" readonly></textarea></div></div><div style="clear:both">
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
</div></div></div><script src="js/params_levels_gflux.js"></script>
<script>g_ds = "gfs_sflux";</script><div id="version_line"> NCEP NOMADS Version 2.3.27, October 2026 </div><footer id="footer">
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


