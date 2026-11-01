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

      <span class="white"><a class="leftlinks" href="https://ftp.cpc.ncep.noaa.gov/GIS/us_hazards/Temp_D8-14_20261101.zip" target="_blank">Temperature</a></span>
      <br>

      <span class="white"><a class="leftlinks" href="https://ftp.cpc.ncep.noaa.gov/GIS/us_hazards/Prcp_D8-14_20261101.zip" target="_blank">Precipitation</a></span
      <br>

      <span class="white"><a class="leftlinks" href="https://ftp.cpc.ncep.noaa.gov/GIS/us_hazards/Snow_D8-14_20261101.zip" target="_blank">Snow</a></span>
      <br>

      <span class="white"><a class="leftlinks" href="https://ftp.cpc.ncep.noaa.gov/GIS/us_hazards/Wind_D8-14_20261101.zip" target="_blank">Wind</a></span>
      <br>

      <span class="white"><a class="leftlinks" href="https://ftp.cpc.ncep.noaa.gov/GIS/us_hazards/Soils_D8-14_20261101.zip" target="_blank">Rapid Onset Drought</a></span>
      <br>

      <span class="white"><a class="leftlinks" href="https://ftp.cpc.ncep.noaa.gov/GIS/us_hazards/Tempprob_D8-14_20261101.zip" target="_blank">Probabilistic Temperature</a></span>
      <br>

      <span class="white"><a class="leftlinks" href="https://ftp.cpc.ncep.noaa.gov/GIS/us_hazards/Heatprob_D8-14_20261101.zip" target="_blank">Probabilistic Extreme Heat</a></span>
      <br>

      <span class="white"><a class="leftlinks" href="https://ftp.cpc.ncep.noaa.gov/GIS/us_hazards/Prcpprob_D8-14_20261101.zip" target="_blank">Probabilistic Precipitation</a></span>
      <br>

      <span class="white"><a class="leftlinks" href="https://ftp.cpc.ncep.noaa.gov/GIS/us_hazards/Snowprob_D8-14_20261101.zip" target="_blank">Probabilistic Snow</a></span>
      <br>

      <span class="white"><a class="leftlinks" href="https://ftp.cpc.ncep.noaa.gov/GIS/us_hazards/Windprob_D8-14_20261101.zip" target="_blank">Probabilistic Wind</a></span>
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

      <center><h3>  U.S. Week-2 Hazards Outlook - Made November 01, 2026 | <a href="./week2_us_hazards_info.pdf" target="_blank">About the Hazards Outlook</a></h3></center>
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
              <td align='center'>No Hazards</td><td align='center'><input type='checkbox' name='haztype' id='prcp_det' value='prcp8' onclick='displaykmls(this.id)' checked></td><td align='center'><input type='checkbox' name='haztype' id='snow_det' value='snow8' onclick='displaykmls(this.id)' checked></td><td align='center'><input type='checkbox' name='haztype' id='wind_det' value='wind8' onclick='displaykmls(this.id)' checked></td><td align='center'>No Hazards</td>          </tr>

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
          <h2>Valid Monday November 09, 2026 to Sunday November 15, 2026</h2>US Hazards Outlook<br>NWS Climate Prediction Center College Park MD<br>300 PM 
EST November 01 2026<br><br><u>Synopsis</u>: Dynamical models are in good 
agreement regarding very potent mid-level low pressure moving closer to the 
west coast of the contiguous U.S. (CONUS) during the week-2 period. Therefore 
confidence is increasing for prolonged impacts from heavy precipitation, 
coastal high winds, and high elevation heavy snow, especially across the 
Pacific Northwest into northern California. An extension of hazardous weather 
into central and southern portions of California and the Southwest is possible 
later in week-2. Elsewhere, more tranquil and unseasonably warm weather is 
forecast across much of the interior CONUS underneath mid-level high pressure. 
Surface low pressure favors potentially unsettled weather along the East Coast 
early in the period. <br><br><u>Hazards</u> <ul><li>Moderate risk of heavy 
precipitation across much of the Pacific Northwest into northern California, 
Tue-Fri, Nov 10-13.<li>Moderate risk of heavy snow across portions of the Cascades, Klamath, and 
northern Sierra Nevada Mountains, Tue-Fri, Nov 10-13.<li>Moderate risk of high winds across coastal portions of Washington, Oregon, 
and northwestern California, Tue-Fri, Nov 10-13.<li>Slight risk of heavy precipitation across the Pacific Northwest and 
northern California through the San Francisco Bay area, Mon-Sun, Nov 9-15.<li>Slight risk of heavy precipitation across portions of central and southern 
California into Arizona, Wed-Sun, Nov 11-15.<li>Slight risk of heavy precipitation across portions of the Northeast, 
Mid-Atlantic, and Appalachians, Mon-Wed, Nov 9-11.<li>Slight risk of heavy snow across the Cascades, Klamath, and northern Sierra 
Nevada Mountains, Mon-Sun, Nov 9-15.<li>Slight risk of heavy snow across the southern Sierra Nevada Mountains, 
Wed-Sun, Nov 11-15.<li>Slight risk of high winds across coastal portions of Washington, Oregon, 
and northern California through San Francisco Bay, Mon-Sun, Nov 9-15. 
</li></ul><u>Detailed Summary</u><br><br>For Wednesday November 04 - Sunday 
November 08: <a name='3-7days' 
href=https://www.wpc.ncep.noaa.gov/threats/threats.php> WPC Days 3-7 U.S. 
Hazards</a> <br><br><a name='8-14days' 
href='/products/predictions/814day/index.php'> For Monday November 09 - Sunday 
November 15: </a> The major story for week-2 will be deep 500-hPa troughing 
approaching the West Coast of the CONUS, with surface low pressure over the 
Gulf of Alaska, leading to increasing Pacific flow and subsequently increasing 
confidence for heavy precipitation along with high elevation heavy snow and 
coastal high winds. Daily ensemble means from the 0z GEFS, ECMWF, and Canadian 
ensembles depict the strongest moisture advection beginning around day-9 (Nov 
10), with daily ensemble mean precipitation totals upwards of 0.75 to 1-inch 
across the Pacific Northwest and northern California. While the ECMWF and GEFS 
Probabilistic Extremes Tools (PETs) only depict probabilities in the 20-40 
percent range for 3-day amounts exceeding the 85th climatological percentile, 
the uncalibrated guidance is much more robust, indicating some areas with at 
least a 50 percent chance for 3-day precipitation to exceed 2-inches, 
particularly during the middle portion of week-2. Given these stronger signals 
and continued eastward progression of the anomalous mid-level troughing, a 
moderate risk of heavy precipitation is posted across the Pacific Northwest 
into northern California, Nov 10-13. A corresponding moderate risk of heavy 
snow is highlighted across the Cascades, Klamath, and northern Sierra Nevada 
Mountains, Nov 10-13, where the uncalibrated GEFS and ECMWF ensembles depict 
3-day snow totals exceeding 6 to 12 inches. A moderate risk of high winds is 
posted across coastal portions of Washington, Oregon, and northwestern 
California for the same time frame, tied to an increasing pressure gradient and 
an enhanced chance of wind speeds greater than 40-mph as depicted in the PETs.<br><br>Slight risks of heavy precipitation, heavy snow, and high winds surround 
the respective moderate risks and are valid for all of week-2 given the 
persistence of the offshore trough. Some of this enhanced moisture may advect 
into portions of the Northern and Central Rockies by the second half of the 
period, resulting in periods of heavy snow farther inland over higher 
elevations. The ECMWF indicates a potential southward expansion of heavy 
precipitation into southern California and the Southwest later in week-2, with 
strong probabilities (above 60 percent) for 3-day precipitation totals 
exceeding the 85th climatological percentile being indicated. While these high 
probabilities are partially attributed to the lower climatology compared to 
farther north, the ECMWF PET indicates some areas of southern California into 
Arizona with at least a 20 percent chance of 3-day precipitation amounts 
exceeding 1-inch. Probabilities in the GEFS PET are notably lower resulting in 
greater uncertainty across this area, with only a slight risk of heavy 
precipitation, Nov 11-15. In addition, a slight risk of heavy snow is posted 
across the southern Sierra Nevada Mountains, also valid Nov 11-15.<br><br>Elsewhere across the CONUS, above-normal temperatures are favored for most 
areas underneath broad mid-level ridging with the exception of parts of the 
Southeast where closer to normal temperatures are forecast. There are no 
indications of any hazardous weather across the interior CONUS during the 
week-2 period. However, a transient shortwave trough is forecast to move across 
the eastern U.S. late in week-1 into the early part of week-2. Surface low 
development is possible along the East Coast early in week-2 with the 0z ECMWF 
ensemble most robust with a nor-easter-like system along the coast. While the 
signal for this system is weaker in the 0z GEFS, both the AI-based 0z ECMWF and 
GEFS ensembles lean closer to the dynamical ECMWF with a surface low track 
closer to the East Coast. Considering some agreement from the AI tools, a 
slight risk of heavy precipitation is posted across the Northeast, 
Mid-Atlantic, and Appalachians, Nov 9-11. If this system materializes, gusty 
winds are possible on its backside, but the increased uncertainty precludes a 
related wind hazard at this time.<br><br>While the storm system near the West Coast of the CONUS is likely to result 
in periods of strong winds and heavy precipitation along the southern and 
southeastern coast of Alaska as well, hazardous thresholds are not expected to 
be exceeded so no hazards are posted for Alaska at this time. Above-normal 
temperatures are forecast across much of eastern Mainland and Southeast Alaska, 
with near- to slightly below-normal temperatures more likely across the western 
Mainland and the Aleutians.<br><br>Forecaster: Thomas Collow<br><br>$$

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
