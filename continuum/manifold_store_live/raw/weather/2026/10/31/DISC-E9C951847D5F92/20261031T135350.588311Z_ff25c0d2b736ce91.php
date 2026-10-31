<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">

<html>

<head>
    <title>Probabilistic Hazards Outlook</title>

    <meta http-equiv=Content-Type content="text/html; charset=windows-1252">
    <meta content="NCEP Web Team" name="GENERATOR">
    <meta name="description" content="This page displays the most recent verification of the Climate Prediction Center's Monthly Forecasts">
    <meta name="keywords" content="Climate,Climate Prediction Center,National Weather Service,National Oceanic &amp; Atmospheric Administration,NOAA,climate outlooks,monthly verification,verification,monthly outlook,monthly outlooks,outlooks,temperature,precipitation,CLIMATE,CLIMATE PREDICTION CENTER,CLIMATE OUTLOOKS,ASSESSMENTS">

    <link href="/nwscwi/main.css" type="text/css" rel="STYLESHEET">
    

    <style>
      html[height: 100%]
      body[height:100%;margin:0;padding:0]

      #topbanner{
        position:fixed;
        background-image:url("/nwscwi/topbanner.jpg");
        top:0%;
        height:93px;
        width:100%;
        z-index:10;
      }

      #header-wrapper {
        /*position:fixed;*/
        z-index: 1000;
      }

      #leftcol{
        position: absolute;
        top: 120px;
        display: inline-block;
        padding: 20px 10px;
        width: 140px;
        height: 100%;
        min-height: 3000px;
        background-image: url("/nwscwi/navbkgrnd.gif");
        z-index: 50;
      }

      #bodycol{
        position: relative;
        display: inline-block;
        margin-left: 180px;
        width: 850px;
        min-width: 800px;
        min-height: 800px;
        height: 100%;
        top: 10px;
        z-index: 10;
      }

      #noaalogo{
        position:fixed;
        left: 0%;
        top: 15px;
        width: 85px;
        height: 78px;
        background-image: url("/nwscwi/noaaleft.jpg");
        z-index: -2;
      }

      #cpclogo{
        position:fixed;
        left:84px;
        top:36px;
        width:500px;
        height:58px;
        background-image:url("/nwscwi/cpc.jpg");
        z-index:-1;
      }

      #nwstitle{
        position:fixed;
        left:84px;
        top:16px;
        width:500px;
        height:25px;
        background-image:url("/nwscwi/nws_title.jpg");
        z-index:-2;
      }

      #nwsright{
        position:fixed;
        left:91%;
        top:0%;
        height:5%;
        width:5%;
        z-index:0
      }

      #nwsbanner{
        position:fixed;
        left:94%;
        top:2%;
        height:78px;
        width:85px;
        z-index:-1;
        background-image:url("/nwscwi/nwsright.jpg");
      }

      #endcaps{
        position:fixed;
        left:98.7%;
        top:89px;
        width:24px;
        height:23px;
        background-image:url("/nwscwi/navbarendcap.jpg");
      }

      #barleft{
        position:fixed;
        left:0%;
        top:89px;
        width:94px;
        height:23px;
        background-image:url("/nwscwi/navbarleft.jpg");
        z-index:1;
      }

      #sitemap{
        position:fixed;
        left:94px;
        width:93%;
        height:23px;
        top:89px;
        background-image:url("/nwscwi/navbkgrnd.gif");
      }

      #legendDiv{
        float:left;
        position:relative;
        top:5px; 
        left:5px;
        width:815px;
        height:227px;
        background-image:url("week2_hazards_legend_scaled.png");
        background-repeat: no-repeat;
        background-size:790px;
      }

      #viewDiv{
      /*	position:absolute;
        top:220px;
        left:5px;*/
        width:850px;
        height:480px;
      }
      #textDiv{
      /*        position:absolute;
              top:200px;
              left:10px;*/
        width:100%;
        margin-left:70px;
        margin-right:40px;
      }
      #discDiv{
        position:relative;
        top:10px;
        left:10px;
      }
      #tablesel{
        position:relative;
        left:2px;
        top:10px;
      }
      .white {
          font-size: 9pt;
          color: #FFF !important;
          font-weight: bold;
          font-family: Arial,Helvetica,San Serif;
      }
      .leftlinks {
        color:white !important;
        text-decoration:none;
      }
      .HazTableColHead{
        text-align: center;
        font-weight: bold;
      }
      table#hazsel { background-color:white; padding: 0px; width: 100%;}
      table#hazsel a:hover { border: none; cursor:pointer; } 
      table#hazsel a { border: none;cursor:pointer; color:blue; } 
      table#hazsel td {
        margin: 0 0px 0 0; 
        padding: 10px 2px; 
        color: black; 
        text-align:center;;text-decoration: none; height: 20px; font-size:15px; border: 1px solid black;
      }

      button:hover {
        background:#00BFFF;
      }

      button {
        background: #0A2390; 
        color: white;
      }
    </style>


	<link rel="stylesheet" href="https://js.arcgis.com/4.34/esri/themes/light/main.css" />
    <script src="https://js.arcgis.com/4.34/"></script>
	<script>
	var map = '';
	
      require([
        "esri/Map",
        "esri/views/MapView",
        "esri/layers/KMLLayer",
		"esri/Basemap",
		"esri/widgets/Legend",
		"esri/widgets/LayerList",
      ], function(Map, MapView, KMLLayer, Basemap, Legend, LayerList) {
        
        // 1. Initialize the KML Layer (Must be a publicly accessible URL)
		const temp_prob_kml = new KMLLayer({
          url: "https://www.cpc.ncep.noaa.gov/products/predictions/threats/temp_prob_D8_14.kml",
		  id: "temp_prob",
		  refreshInterval: 1,
		  visible: true
        });
		
		const heat_prob_kml = new KMLLayer({
          url: "https://www.cpc.ncep.noaa.gov/products/predictions/threats/excess_heat_prob_D8_14.kml",
		  id: "heat_prob",
		  refreshInterval: 1,
		  visible: true
        });
		
        const prcp_prob_kml = new KMLLayer({
          url: "https://www.cpc.ncep.noaa.gov/products/predictions/threats/prcp_prob_D8_14.kml",
		  id: "prcp_prob",
		  refreshInterval: 1,
		  visible: true
        });
		
        const snow_prob_kml = new KMLLayer({
          url: "https://www.cpc.ncep.noaa.gov/products/predictions/threats/snow_prob_D8_14.kml",
		  id: "snow_prob",
		  refreshInterval: 1,
		  visible: true
        });

        const wind_prob_kml = new KMLLayer({
          url: "https://www.cpc.ncep.noaa.gov/products/predictions/threats/wind_prob_D8_14.kml",
		  id: "wind_prob",
		  refreshInterval: 1,
		  visible: true
        });

        const rod_det_kml = new KMLLayer({
          url: "https://www.cpc.ncep.noaa.gov/products/predictions/threats/soils_D8_14.kml",
		  id: "rod_det",
		  refreshInterval: 1,
		  visible: true
        });

        const prcp_det_kml = new KMLLayer({
          url: "https://www.cpc.ncep.noaa.gov/products/predictions/threats/prcp_D8_14.kml",
		  id: "prcp_det",
		  refreshInterval: 1,
		  visible: true
        });
		
        const snow_det_kml = new KMLLayer({
          url: "https://www.cpc.ncep.noaa.gov/products/predictions/threats/snow_D8_14.kml",
		  id: "snow_det",
		  refreshInterval: 1,
		  visible: true
        });
		
		const wind_det_kml = new KMLLayer({
          url: "https://www.cpc.ncep.noaa.gov/products/predictions/threats/wind_D8_14.kml",
		  id: "wind_det",
		  refreshInterval: 1,
		  visible: true
        });
		
		const temp_det_kml = new KMLLayer({
          url: "https://www.cpc.ncep.noaa.gov/products/predictions/threats/temp_D8_14.kml",
		  id: "temp_det",
		  refreshInterval: 1,
		  visible: true
        });
		

		const goa_basemap = new Basemap({
			portalItem: {
				id: "c5b0e6e1ded840639b8b4ff3d9927145" // Light Gray Canvas (US worldview) This version has Gulf of America
			}
		});

		map = new Map({
			basemap: goa_basemap,
			layers: [prcp_prob_kml, snow_prob_kml, wind_prob_kml, temp_prob_kml, heat_prob_kml, rod_det_kml, prcp_det_kml, snow_det_kml, wind_det_kml, temp_det_kml]
		});
		
        // 3. Render the MapView
        const view = new MapView({
          container: "viewDiv",
          map: map,
          center: [-98.5795, 39.8282], // Longitude, Latitude
          zoom: 3
        });
		
      });
	  
	function displaykmls(bx){
		console.log('bx = '+bx);
		checkbox=document.getElementById(bx);
		// Logic for checkboxes for dynamic map to show or hide layers of KMLs
		if(checkbox){
			// If the temperature probability box is selected in the form, display the probabilistic heat extremes kml.
			if(bx=='temp_prob'){
				map.findLayerById('heat_prob').visible = checkbox.checked;
			}
			map.findLayerById(bx).visible = checkbox.checked;
		}
	}
	
	function show_fcst(typ){	
		if(typ==8){
			document.getElementById("fcst").src="hazards_d8_14_contours.png";
			document.getElementById("link").href="hazards_d8_14_contours.png";	
		}
		if(typ=="temp"){
			document.getElementById("fcst").src="temp_probhazards_d8_14_contours.png";
			document.getElementById("link").href="temp_probhazards_d8_14_contours.png";
		}
		if(typ=="precip"){
			document.getElementById("fcst").src="precip_probhazards_d8_14_contours.png";
			document.getElementById("link").href="precip_probhazards_d8_14_contours.png";
		}
		if(typ=="wind"){
			document.getElementById("fcst").src="wind_probhazards_d8_14_contours.png";
			document.getElementById("link").href="wind_probhazards_d8_14_contours.png";
		}
		if(typ=="snow"){
			document.getElementById("fcst").src="snow_probhazards_d8_14_contours.png";
			document.getElementById("link").href="snow_probhazards_d8_14_contours.png";
		}

	}
    </script>

    

    <!-- Required Digital Analytics Program (DAP) code -->
    <script src="//dap.digitalgov.gov/Universal-Federated-Analytics-Min.js?agency=DOC&amp;subagency=NOAA" id="_fed_an_ua_tag"></script>
</head>


<body>


    <div id="header-wrapper">
        <table cellspacing="0" cellpadding="0" width="100%" background="/nwscwi/topbanner.jpg" border="0">
            <tr>
                <td align="right" height="19">
                    <a href="#contents"><img height="1" alt="Skip Navigation Links" src="/nwscwi/skipgraphic.gif" width="1" border="0"></a>
                    <a href="http://www.nws.noaa.gov/" class="homepagelinks"><span class="nwslink">www.nws.noaa.gov</span></a></td>
            </tr>
        </table>

        <table cellspacing="0" cellpadding="0" width="100%" border="0">
          <tr>
            <td rowspan="2"><a href="http://www.noaa.gov/">
              <img height="78" alt="NOAA logo - Click to go to the NOAA home page"
              src="/nwscwi/noaaleft.jpg" width="85" border="0"></a></td>
            <td align="left"><img height="20" alt="National Weather Service"
              src="/nwscwi/nws_title.jpg" width="500" border="0"></td>
            <td rowspan="2" width="100%" background="/nwscwi/ncep_bkgrnd.jpg">&nbsp;</td>
            <td rowspan="2" align="right"><a href="http://www.nws.noaa.gov/">
              <img height="78" alt="NWS logo - Click to go to the NWS home page"
              src="/nwscwi/nwsright.jpg" width="85" border="0"></a></td>
          </tr>
          <tr>
            <td><img height="58" alt="Climate Prediction Center" src="/nwscwi/cpc.jpg"
                    width="500" border="0"></td>    <!-- Put your center header image here. -->
          </tr>
        </table>

        <table cellspacing="0" cellpadding="0" width="100%" background="/nwscwi/navbkgrnd.gif" border="0">
            <tr>
                <td align="left" valign="top" width="94">
                  <img height="23" alt="" src="/nwscwi/navbarleft.jpg" width="94" border="0"></td>
                <td class="nav" align="center" width="15%">
                  <a href="/products/site_index.html" class="menu">Site Map</a></td>
                <td class="nav" align="right" width="15%">
                  <a href="http://www.nws.noaa.gov/pa/" class="menu">News</a></td>
                <td class="nav" id="menuitem" align="right" width="20%">
                  <a href="http://www.wrh.noaa.gov/wrhq/nwspage.html" class="menu">Organization</a></td>
                <td align="right" width="20%"></td>
                <td align="left" class="searchinput" width="20%" nowrap>
                    <form action="http://www.firstgov.gov/fgsearch/index.jsp" name="query">
                        <label for="search" class="yellow">Search</label>
                        <input type="hidden" name="parsed" value="true">
                        <input type="hidden" name="rn" value="3">
                        <input type="hidden" name="in0" value="domain">
                        <input type="hidden" name="dom0" value="nws.noaa.gov, weather.gov, wrh.noaa.gov, srh.noaa.gov, crh.noaa.gov, prh.noaa.gov, arh.noaa.gov, alaska.net/~nwsar, erh.noaa.gov, ncep.noaa.gov, wwb.noaa.gov, spc.noaa.gov, nhc.noaa.gov, sec.noaa.gov, aviationweather.gov, aviationweather.noaa.gov, weather.noaa.gov, roc.noaa.gov, nohrsc.nws.gov, nwstc.noaa.gov, wdtb.noaa.gov, npmoc.navy.mil, ndbc.noaa.gov">
                        <input type="text" name="mw0" value="All NWS Search" id="search" size="20" maxlength="256">
                        <input type="submit" name="Go2" value="Go">
                    </form>
                </td>
                <td width="10%">&nbsp;</td>
                <td align="right" valign="bottom" width="24"><img height="23" alt="" src="/nwscwi/navbarendcap.jpg" width="24" border="0"></td>
            </tr>
        </table>
    </div>


    <div id="leftcol">

      <form method="get" action="https://search.usa.gov/search" style="margin-bottom:0; margin-top:0;">
        <label for="Search">
        <span class="yellow">Search&nbsp;the CPC</span></label>
        <input type="hidden" name="affiliate" value="ncep.noaa.gov" />
        <input type="hidden" name="v:sources" value="firstgov-affiliates-search" />
        <input type="hidden" name="v:project" value="firstgov" />
        <input type="hidden" name="query" value="site:www.cpc.ncep.noaa.gov" />
        <input name="query" type="text" value="" size="10" maxlength="256" id="Search"/>
        <input type="submit" value="Go" />
      </form>

      <span class="white">Files are updated with the forecast</span>
      <br><br>

      <span class="yellow">Download Day 8-14 KML</span>
      <br>

      <span class="white"><a class="leftlinks" href="temp_D8_14.kml" target="_blank">Temperature</a></span>
      <br>

      <span class="white"><a class="leftlinks" href="prcp_D8_14.kml" target="_blank">Precipitation</a></span>
      <br>

      <span class="white"><a class="leftlinks" href="snow_D8_14.kml" target="_blank">Snow</a></span>
      <br>

      <span class="white"><a class="leftlinks" href="wind_D8_14.kml" target="_blank">Wind</a></span>
      <br>

      <span class="white"><a class="leftlinks" href="soils_D8_14.kml" target="_blank">Rapid Onset Drought</a></span>
      <br>

      <span class="white"><a class="leftlinks" href="temp_prob_D8_14.kml" target="_blank">Probabilistic Temperature</a></span>
      <br>

      <span class="white"><a class="leftlinks" href="excess_heat_prob_D8_14.kml" target="_blank">Probabilistic Extreme Heat</a></span>
      <br>

      <span class="white"><a class="leftlinks" href="prcp_prob_D8_14.kml" target="_blank">Probabilistic Precipitation</a></span>
      <br>

      <span class="white"><a class="leftlinks" href="snow_prob_D8_14.kml" target="_blank">Probabilistic Snow</a></span>
      <br>

      <span class="white"><a class="leftlinks" href="wind_prob_D8_14.kml" target="_blank">Probabilistic Wind</a></span>
      <br><br>

      <span class="yellow">Download Day 8-14 Shapefiles</span>
      <br>

      <span class="white"><a class="leftlinks" href="https://ftp.cpc.ncep.noaa.gov/GIS/us_hazards/Temp_D8-14_20261031.zip" target="_blank">Temperature</a></span>
      <br>

      <span class="white"><a class="leftlinks" href="https://ftp.cpc.ncep.noaa.gov/GIS/us_hazards/Prcp_D8-14_20261031.zip" target="_blank">Precipitation</a></span
      <br>

      <span class="white"><a class="leftlinks" href="https://ftp.cpc.ncep.noaa.gov/GIS/us_hazards/Snow_D8-14_20261031.zip" target="_blank">Snow</a></span>
      <br>

      <span class="white"><a class="leftlinks" href="https://ftp.cpc.ncep.noaa.gov/GIS/us_hazards/Wind_D8-14_20261031.zip" target="_blank">Wind</a></span>
      <br>

      <span class="white"><a class="leftlinks" href="https://ftp.cpc.ncep.noaa.gov/GIS/us_hazards/Soils_D8-14_20261031.zip" target="_blank">Rapid Onset Drought</a></span>
      <br>

      <span class="white"><a class="leftlinks" href="https://ftp.cpc.ncep.noaa.gov/GIS/us_hazards/Tempprob_D8-14_20261031.zip" target="_blank">Probabilistic Temperature</a></span>
      <br>

      <span class="white"><a class="leftlinks" href="https://ftp.cpc.ncep.noaa.gov/GIS/us_hazards/Heatprob_D8-14_20261031.zip" target="_blank">Probabilistic Extreme Heat</a></span>
      <br>

      <span class="white"><a class="leftlinks" href="https://ftp.cpc.ncep.noaa.gov/GIS/us_hazards/Prcpprob_D8-14_20261031.zip" target="_blank">Probabilistic Precipitation</a></span>
      <br>

      <span class="white"><a class="leftlinks" href="https://ftp.cpc.ncep.noaa.gov/GIS/us_hazards/Snowprob_D8-14_20261031.zip" target="_blank">Probabilistic Snow</a></span>
      <br>

      <span class="white"><a class="leftlinks" href="https://ftp.cpc.ncep.noaa.gov/GIS/us_hazards/Windprob_D8-14_20261031.zip" target="_blank">Probabilistic Wind</a></span>
      <br><br>

      <span class="white"><a class="leftlinks" href="/products/archives/hazards/gethazards.php">Hazards Forecast Archives</a></span>
      <br><br>
      
      <span class="yellow">Model Guidance Tools</span>
      <br>

      <span class="white"><a class="leftlinks" href="/products/predictions/threats/extremesTool.php">Probabilistic Extremes Tool</a></span>
      <br><br>
        
      <span class="yellow">About Us</span>
      <br>

      <span class="white"><a class="leftlinks" href="/information/who_we_are/mission.shtml">Our Mission</a></span>
      <br>

      <span class="white"><a class="leftlinks" href="/information/who_we_are/index.shtml">Who We Are</a></span>
      <br><br>

      <span class="yellow">Contact Us</span>
      <br>

      <span class="white"><a class="leftlinks" href="/information/personnel/contacts.shtml">CPC Information</a></span>
      <br>

      <span class="white"><a class="leftlinks" href="/comment-form.html">CPC Web Team</a></span>

    </div><!-- end #leftcol -->


    <div id="bodycol">

      <p style="font-family:verdana,arial,serif; font-size:10px;"><a href="/index.php" class="homepagelinks"><b>HOME</b></a> > <a href="/products/expert_assessment/" class="homepagelinks">Expert Assessments</a> > Hazards Outlook</p>

      <h4>For 3-7 day hazards see Weather Prediction Center's: <a href="https://www.wpc.ncep.noaa.gov/threats/threats.php" target="_blank" rel="noopener">WPC 3-7 Day Hazards</a></h4>

      <center><h3>  U.S. Week-2 Hazards Outlook - Made October 30, 2026 | <a href="./week2_us_hazards_info.pdf" target="_blank">About the Hazards Outlook</a></h3></center>
      <form name="hazards">
        <table border='1' width="805">
          <tr>
            <td><b>Type and Period</b></td>
            <td class="HazTableColHead">Temperature</td>
            <td class="HazTableColHead">Precipitation</td>
            <td class="HazTableColHead">Snow</td>
            <td class="HazTableColHead">Wind</td>
            <td class="HazTableColHead">Rapid Onset<br>Drought</td>
          </tr>

          <tr>
            <td> Composite Days 8-14 Map</td>
              <td align='center'>No Hazards</td><td align='center'>No Hazards</td><td align='center'>No Hazards</td><td align='center'>No Hazards</td><td align='center'>No Hazards</td>          </tr>

          <tr>
            <td>Probabilistic Days 8-14 Map</td>
              <td align='center'>No Hazards</td><td align='center'><input type='checkbox' name='haztype' id='prcp_prob' value='precipp' onclick='displaykmls(this.id)' checked></td><td align='center'><input type='checkbox' name='haztype' id='snow_prob' value='snowp' onclick='displaykmls(this.id)' checked></td><td align='center'><input type='checkbox' name='haztype' id='wind_prob' value='windp' onclick='displaykmls(this.id)' checked></td>          </tr>
        </table>
      </form>

      <div id="viewDiv"></div>

      <div id="legendDiv"></div>

      <br>

      <div id="tablesel"> 
          <table id="hazsel">
              <tr>
              <td>Composite Map<br>
              <button onclick="show_fcst(8)"/>Day 8-14
              </td>
              
              <td>Probabilistic Outlooks<br>
                  <button onclick="show_fcst('temp')">Temperature Hazards
                      <button onclick="show_fcst('precip')">Precipitation Hazards
                      <button onclick="show_fcst('wind')">Wind Hazards
                      <button onclick="show_fcst('snow')">Snow Hazards
                  </td>
            </tr>
          </table>


          <table>
              <tr>
                  <td colspan=2><a id="link" href="hazards_d8_14_contours.png"><img id="fcst" src="hazards_d8_14_contours.png" width="100%" ></a></td>
              </tr>
          </table>
      </div><!-- end .tablesel -->

      <div id="discDiv">
          <h2>Valid Saturday November 07, 2026 to Friday November 13, 2026</h2>US Hazards Outlook<br>NWS Climate Prediction Center College Park MD<br>300 PM 
EDT October 30 2026<br><br><u>Synopsis</u>: Multiple model ensembles indicate a 
very potent and long-lived area of low pressure at the surface and mid-levels 
over the North Pacific, bringing the potential for a variety of hazardous 
weather to portions of the West Coast. <br><br><u>Hazards</u> <ul><li>Slight 
risk of heavy precipitation for western portions of Washington, Oregon, and 
California as far south as Cape Mendocino, Sat-Fri, Nov 7-13.<li>Slight risk of heavy snow for the Cascade and Klamath Mountains, Sat-Fri, 
Nov 7-13.<li>Slight risk of high winds for coastal portions of Washington, Oregon, and 
California as far south as Cape Mendocino, Sat-Fri, Nov 7-13<li>Slight risk of heavy precipitation for western portions of Northern 
California south to Monterey Bay, Tue-Fri, Nov 10-13.<li>Slight risk of heavy snow for the northern Sierra Nevada, Tue-Fri, Nov 
10-13.<li>Slight risk of high winds for coastal portions of Northern California south 
to Monterey Bay, Tue-Fri, Nov 10-13. </li></ul><u>Detailed 
Summary</u><br><br>For Monday November 02 - Friday November 06: <a 
name='3-7days' href=https://www.wpc.ncep.noaa.gov/threats/threats.php> WPC Days 
3-7 U.S. Hazards</a> <br><br><a name='8-14days' 
href='/products/predictions/814day/index.php'> For Saturday November 07 - 
Friday November 13: </a> The main story from a hazards perspective continues to 
be a potentially potent storm system over the North Pacific. Multiple models 
depict a deep surface low and mid-level trough to become established over the 
Gulf of Alaska by the outset of week-2, slowly expanding southward through the 
forecast period. This feature has been noted in ensemble solutions for several 
days now, with the big question remaining how far south the trough shifts, and 
to what extent it induces deep moisture advection onshore. For now the models 
continue to push back the arrival of the most intense precipitation potential 
into the second half of the forecast period, precluding any increase in 
forecast confidence. For now the consensus among the model ensembles is that 
this system will likely be a slow mover, but with remarkable staying power. 
However, for now most of the energy from this storm system is favored to remain 
focused on the Canadian coast.<br><br>That said, there is still the potential for hazardous weather from this 
system for much of the Pacific Northwest throughout the forecast period, with 
this potential expanding into northern California in the second half of week-2. 
Uncalibrated probabilities from the GEFS indicate at least a 20% chance of 
3-day accumulated precipitation exceeding an inch with the highest 
probabilities near Puget Sound, and 24hr precipitation accumulation totals from 
the GEFS and ECENS ranging from a quarter inch to an inch from Cape Mendocino 
northward from the Cascades to the coast. Given this, the slight risks of heavy 
precipitation for lower elevations and heavy snow for the Cascades and Klamath 
mountains remains posted in today's outlook, now extended to cover all of 
week-2 (Nov 7-13). A slight risk of high winds also remains posted along the 
coast from Cape Mendocino to the U.S.-Canada border, valid Nov 7-13. <br><br>As noted, today's model solutions noticeably bring the trough farther south 
and with it the potential for hazardous weather farther south into California. 
Both the GEFS and ECENS 24hr precipitation totals show a significant uptick in 
potential accumulations southward to Monterey Bay around day-11 (Nov 10). One 
model or the other has hinted at this southern extension for a few runs, and 
with both models coming into better alignment, slight risks for heavy 
precipitation and high winds are added to today's outlook covering coastal 
portions of California as far south as Monterey Bay, along with a slight risk 
of heavy snow for the northern Sierra Nevadas, all valid Nov 10-13.<br><br>While this potentially potent storm system is likely to result in periods 
of strong winds and heavy precipitation along the southern and southeastern 
coast of Alaska as well, hazardous thresholds are not expected to be exceeded 
so no hazards are posted for Alaska at this time. In southwestern Alaska, much 
above normal temperatures are forecast in week-2, which is likely to bring air 
temperatures above 32 deg F. This may delay ongoing river freezing. Residents 
are advised to be wary of very thin ice on shallow bodies of 
water.<br><br>Forecaster: Danny Barandiaran<br><br>$$

          <font size="4"><b>Please consult local NWS Forecast Offices for short range forecasts and region-specific information.</b></font>
          <br><br>
          <font color="blue" size="5">Resources </font>
          <br><br>
          <font size="4"><a href="/products/predictions/threats/extremesTool.php">Week-2 Probabilistic Extremes Tool</a></font>
          <br><br>
          <font size="4"><a href="/products/predictions/threats/briefs/hgtP1.html">GFS Ensemble Forecasts</a></font><br><br>
      </div><!-- end #discDiv -->

    </div><!-- end #bodycol -->
	


</body>

</html>
