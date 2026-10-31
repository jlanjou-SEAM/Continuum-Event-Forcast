
	

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="IMD_IT_TEAM">
    <meta name="generator" content="IMD_GANGTOK">

    <meta property="og:title" content="Radar Images" />
    <meta property="og:description" content="Radar Image for Delhi-HQ." />
    <meta property="og:image" content="https://mausam.imd.gov.in/Radar/caz_delhi.gif" />
    <meta property="og:url" content="https://mausam.imd.gov.in/responsive/radar.php" />
    <meta property="og:type" content="website" />

    <!-- <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Radar Image for Delhi-HQ.">
    <meta name="twitter:description" content="Radar Image for Delhi-HQ.">
    <meta name="twitter:image" content="https://mausam.imd.gov.in/Radar/caz_delhi.gif">
    <meta name="twitter:url" content="https://mausam.imd.gov.in/responsive/radar.php"> -->

    <title>RADAR SERVICES | India Meteorological Department</title>
   
    <!-- Bootstrap core CSS -->
		<link href="assets/css/bootstrap.min.css" rel="stylesheet"> 
    <!-- Amcharts export css -->
		<link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all"/>  

    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-in.css" rel="stylesheet">
    <!-- Leaflet CSS for styling -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />
    <style>
        /* Set map container size */
        #chartdiv {
            width: 100%;
            height: 820px;
            background-color: transparent; /* Transparent background */
        }
		/* Simple tooltip styling */
        .leaflet-tooltip {
            background: none; /* No background */
            color: black; /* Simple text color */
            font-size: 11px; /* Adjust the text size */
            /*font-weight: bold; /* Normal font weight */*/
            padding: 0; /* No padding */
            border: none; /* No border */
            box-shadow: none; /* No shadow */
            white-space: nowrap; /* Prevent the text from breaking into multiple lines */
        }
        .radar-station-label {
            background: rgba(255, 255, 255, 0.85) !important;
            border: none !important;
            border-radius: 3px;
            box-shadow: none !important;

            color: #111 !important;
            font-size: 9px;
            font-weight: 600;

            padding: 1px 3px !important;
            margin-top: -10px;

            white-space: nowrap;
            text-align: center;
        }

        .radar-station-label::before {
            display: none !important;
        }

        /* Adjust the position of the tooltip near the marker */
        .leaflet-tooltip-left,
        .leaflet-tooltip-right {
            margin-top: -10px; /* Optional: adjusts tooltip vertical position */
        }

        /* Make the tooltip arrow less prominent */
        .leaflet-tooltip::before {
            border: none; /* Remove the default arrow */
        }
        /* 
        .image-container-span {
            display:inline-block;
            position:relative;
        }

        .share-link {
            display:block;
            position: absolute;
            opacity: 0;
            top: calc(50% - 30px);
            left: calc(50% - 15px);
            width: 30px;
            height: 30px;
            line-height: 30px;
            text-align: center;
            color: white!important;
            padding: 0;
            background: rgba(0,0,0,0.5);
            border-radius: 100px;
            text-decoration: none;
            font-size: 16px;
            transform: scale(0.8);
            transition: opacity 0.3s ease, transform 0.3s ease;
        }

        .image-container-span:hover .share-link {
            opacity: 1;
            transform: scale(1);
        } */


    </style>
		<!-- Favicon -->
		<link rel="shortcut icon" href="img/logo/imd_icon.ico">
  </head>
   <body>
    <!-- header + navigation include -->
		<!-- header -->
<section class="header">
	<!-- header top area -->
	<div class="header-top">
		<div class="container-xxl">
			<div class="social-media">
				<a href="https://www.facebook.com/India.Meteorological.Department/" target="new" class="sm-link facebook" title=""><i class="bi bi-facebook"></i></a>
				<a href="https://www.youtube.com/channel/UC_qxTReoq07UVARm87CuyQw/featured?view_as=subscriber" target="new" class="sm-link youTube" title=""><i class="bi bi-youtube"></i></a>
				<a href="https://twitter.com/Indiametdept" target="new" class="sm-link twitter" title=""><i class="bi bi-twitter"></i></a>
				<a href="https://instagram.com/mausam_nwfc/" target="new" class="sm-link instagram" title=""><i class="bi bi-instagram"></i></a>
				<a href="https://imdweather1875.wordpress.com/" target="new" class="sm-link instagram" title=""><i class="bi bi-chat-fill"></i></a>

				<a href="/index.php" class="hindi">हिन्दी वेबसाईट</a>
				<!-- <a href="?lang=hi" class="hindi">हिन्दी वेबसाईट</a> -->
			</div>
		</div>
	</div>
	<div class="container-xxl">
		<div class="header-content">
			<div class="logo-area">
				<img src="img/logo/logo_emb.png" class="logo img-fluid" alt="EMBLEM">
				<h4>India Meteorological Department</h4>
				<h4>Ministry of Earth Sciences</h4>
				<h4>Government of India</h4>
			</div>
			<div class="social-area">
				<form class="d-flex form-inline" action="https://www.google.com/search" method="get" target="_blank" onsubmit="this.q.value = 'site:*.imd.gov.in ' + this.sr.value;return true;">
							<input class="form-control rounded me-1" type="search" name="sr" id="sr" placeholder="Search here...">
							<input class="form-control rounded me-1" type="hidden" name="q" id="q" placeholder="Search here...">
							<button class="btn rounded" value="Search" name="Search" id="Search" type="submit"><i class="bi bi-search"></i></button>
						</form>
				<div class="clearfix"></div>
			</div>
			<div class="lmdlogo-area">
				<img src="img/logo/imd_logo_a.webp" class="logo" alt="IMD_LOGO" />
				<img src="img/logo/esso.png" class="logo-150-right img-fluid" alt="ESSO" style="height:85px;" />
				<a href="https://mausam.imd.gov.in/event/" target="_blank" rel="noopener noreferrer"><img src="img/logo/imd150t.webp" class="logo-150-right img-fluid" alt="IMD_150" /></a>
				<a href="https://2025.coop/" target="_blank" rel="noopener noreferrer"><img src="img/logo/iyc2025.png" class="logo-150-right img-fluid" alt="IYC 2025" /></a>

			</div>
		</div>
		<div class="text-center">
			<img src="img/logo/esso.png" class="logo-150-center-xs" alt="ESSO" />
			<a href="https://mausam.imd.gov.in/event/" target="_blank" rel="noopener noreferrer"><img src="img/logo/imd150t.webp" class="logo-150-center-xs" alt="IMD_150" /></a>
		</div>

	</div>
</section>
<!-- header end -->

<!-- navigation -->
<section class="navigation">
	<nav class="navbar navbar-expand-lg">
		<div class="container-xxl">
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
				<i class="bi bi-stack"></i>
			</button> <span class="visible-xs"><i class="bi bi-reply-fill"></i> Navigation Menu</span>
			<div class="collapse navbar-collapse" id="navbarNavDropdown">
				<ul class="navbar-nav w-100 justify-content-between">
					<li class="nav-item">
						<a class="nav-link" href="/">Home</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="departmentalweb.php">Departmental Websites</a>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
							About IMD
						</a>
						<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
							<li><a class="dropdown-item" href="history.php">History</a></li>
							<li><a class="dropdown-item" href="mandate.php">Mandate</a></li>
							<li><a class="dropdown-item" href="orgStructure.php">Organizational Structure</a></li>
														<li><a class="dropdown-item" href="https://metnet.imd.gov.in/imdpis/imdweb_list_of_dgms.php" target="_blank" rel="noopener noreferrer">Ex DGM's of IMD</a></li>
							<li><a class="dropdown-item" href="citizenCharter.php">Citizen's/Client's Charter</a></li>
						</ul>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
							People
						</a>
						<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
														<li><a class="dropdown-item" href="people_minister_moes.php">Minister MoES</a></li>
							<li><a class="dropdown-item" href="people_secretory_moes.php">Secretary MoES</a></li>
							<li><a class="dropdown-item" href="people_dgm.php">DGM IMD</a></li>
													</ul>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
							Publications
						</a>
						<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
							<li><a class="dropdown-item" href="rashtriyPanchang.php">Rashtriya Panchang</a></li>
							<li><a class="dropdown-item" href="indianAstronomicalEphemeris.php">The Indian Astronomical Ephemeris</a></li>
							<li><a class="dropdown-item" href="https://mausamjournal.imd.gov.in/index.php/MAUSAM" target="_blank" rel="noopener noreferrer">Mausam Journal</a></li>
							<li><a class="dropdown-item" href="https://imdpune.gov.in/Reports/rainfall%20variability%20page/raintrend%20new.html" target="_blank" rel="noopener noreferrer">Observed Rainfall Trend over States</a></li>
							<li><a class="dropdown-item" href="https://www.clivar.org/sites/default/files/documents/CLIVAR%20Exchanges%2079%20Monsoon%20Mission%20Final.pdf" target="_blank" rel="noopener noreferrer">CLIVAR Exchanges</a></li>
							<li><a class="dropdown-item" href="https://internal.imd.gov.in/pages/severewx_mausam.php" target="_blank" rel="noopener noreferrer">Severe Weather Reports</a></li>
							<li><a class="dropdown-item" href="https://metnet.imd.gov.in/phps/imdweb_imdnews.php" target="_blank" rel="noopener noreferrer">IMD News</a></li>
							<li><a class="dropdown-item" href="https://metnet.imd.gov.in/imdrajbhasha/" target="_blank" rel="noopener noreferrer">मौसम मंजूषा</a></li>
							<li><a class="dropdown-item" href="imdBroucher.php">IMD Brochure</a></li>
														<li><a class="dropdown-item" href="https://metnet.imd.gov.in/phps/imdweb_imdarep.php" target="_blank" rel="noopener noreferrer">IMD Annual Report</a></li>
							<li><a class="dropdown-item" href="/responsive/met1.php" rel="noopener noreferrer">MET Monograph</a></li>
							<li><a class="dropdown-item" href="/imd_latest/contents/pdf/IMDposoco.pdf" target="_blank" rel="noopener noreferrer">Weather for Power System Operation</a></li>
							<li><a class="dropdown-item" href="/imd_latest/contents/pdf/FD2022POEMBOOK.pdf" target="_blank" rel="noopener noreferrer">FD 2022 POEM BOOK</a></li>
							<li><a class="dropdown-item" href="/imd_latest/contents/pdf/FD2022POSTERBOOK.pdf" target="_blank" rel="noopener noreferrer">FD 2022 POSTER BOOK</a></li>
							<li><a class="dropdown-item" href="/imd_latest/contents/pdf/SOUVENIR.pdf" target="_blank" rel="noopener noreferrer">SOUVENIR</a></li>
						</ul>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
							SOP
						</a>
						<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
							<li><a class="dropdown-item" href="/imd_latest/contents/pdf/aviation_sop.pdf" target="_blank" rel="noopener noreferrer">Aviation Meteorology</a></li>
							<li><a class="dropdown-item" href="/imd_latest/contents/pdf/emrc_sop.pdf" target="_blank" title="Environment Monitoring & Research Centre" rel="noopener noreferrer">EMRC</a></li>
							<li><a class="dropdown-item" href="/imd_latest/contents/pdf/gkms_sop.pdf" target="_blank" title="Gramin Krishi Mausam Sewa" rel="noopener noreferrer">GKMS</a></li>
							<li><a class="dropdown-item" href="/imd_latest/contents/pdf/cyclone_sop.pdf" target="_blank" rel="noopener noreferrer">Cyclone Warning</a></li>
							<li><a class="dropdown-item" href="/imd_latest/contents/pdf/training_sop.pdf" target="_blank" rel="noopener noreferrer">Training</a></li>
							<li><a class="dropdown-item" href="/imd_latest/contents/pdf/forecasting_sop.pdf" target="_blank" rel="noopener noreferrer">Weather Forecasting & Warning Services</a></li>
							<li><a class="dropdown-item" href="/imd_latest/contents/pdf/hydrology_sop.pdf" target="_blank" rel="noopener noreferrer">Hydrometeorological Services</a></li>
							<li><a class="dropdown-item" href="/imd_latest/contents/pdf/nwp_sop.pdf" target="_blank" title="Numerical Weather Prediction" rel="noopener noreferrer">NWP</a></li>
							<li><a class="dropdown-item" href="/imd_latest/contents/pdf/satmet_sop.pdf" target="_blank" rel="noopener noreferrer">Satellite Meteorology</a></li>
						</ul>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
							Services
						</a>
						<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
							<li><a class="dropdown-item" href="servicesHydrological.php">Hydrometeorological Services in IMD</a></li>
							<li><a class="dropdown-item" href="servicesMetAgriculture.php">Met. Services for Agriculture in India</a></li>
							<li><a class="dropdown-item" href="servicesMetCivilAviation.php">Met. Services for Civil Aviation in India</a></li>
							<li><a class="dropdown-item" href="servicesSatMet.php" title="Satellite Meteorology">SATMET Services</a></li>
							<li><a class="dropdown-item" href="servicesDwrNetwork.php" title="Doppler Weather Radar">IMD DWR Network</a></li>
							<li><a class="dropdown-item" href="servicesMetSurface.php">Surface Meteorological Instrumentataion</a></li>
							<li><a class="dropdown-item" href="servicesMetUpperAir.php">Upper Air Meteorological Instrumentataion</a></li>
							<li><a class="dropdown-item" href="servicesMetTeleComm.php">Meteorological Telecomm. in IMD</a></li>
							<li><a class="dropdown-item" href="servicesMetEnvironment.php">Environmental Monitoring</a></li>
							<li><a class="dropdown-item" href="servicesPosAstro.php">Positional Astronomy</a></li>
							<li><a class="dropdown-item" href="https://imdpune.gov.in/training/index.php" target="_blank" rel="noopener noreferrer">WMO-Regional Training Institute</a></li>
						</ul>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="https://internal.imd.gov.in/pages/press_release_mausam.php" target="_blank" rel="noopener noreferrer">Press Release</a>
					</li>
					
					<li class="nav-item">
						<a class="nav-link" href="contact.php">Contacts</a>
					</li>
					
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
							Local Forecast
						</a>
						<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
							<li><a class="dropdown-item" href="https://city.imd.gov.in/" target="_blank" rel="noopener noreferrer">Local Weather Report & Forecast</a></li>
							<li><a class="dropdown-item" href="https://mausamgram.imd.gov.in/" target="_blank" rel="noopener noreferrer">Weather At Your Location</a></li>
							<!-- <li><a class="dropdown-item" href="https://internal.imd.gov.in/pages/city_weather_main_mausam.php?id=2" target="_blank" rel="noopener noreferrer">Capital Cities Forecast</a></li>
									<li><a class="dropdown-item" href="https://internal.imd.gov.in/pages/city_weather_main_mausam.php?id=1" target="_blank" rel="noopener noreferrer">Smart Cities Forecast</a></li> -->
						</ul>
					</li>
										<li class="nav-item">
						<a class="nav-link" href="/event/" target="_blank" rel="noopener noreferrer">IMD@150</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="https://api.imd.gov.in" target="_blank" rel="noopener noreferrer">IMD API</a>
					</li>

					
				</ul>
			</div>
		</div>
	</nav>
</section>
<!-- navigation end -->
	<center>	
		<!-- main content -->
		<section class="main-content">
		
			<!-- quick links  -->
						<div class="quick-links">
				<div class="container-xxl">
					<div class="row g-0">
						<div class="col-lg-3 col-sm-6">
							<div class="ql-item">
								<h2>Warnings</h2>
								<!-- link for information -->
								<a href="subDivisionWiseWarningGIS.php">Subdivisionwise</a>
								&nbsp;|&nbsp;
								<a href="districtWiseWarningGIS.php">Districtwise</a>
							</div>
						</div>
						<div class="col-lg-3 col-sm-6">
							<div class="ql-item">
								<h2>Nowcast</h2>
								<!-- link for information -->
								<a href="districtWiseNowcastGIS.php">Districtwise</a>
								&nbsp;|&nbsp;
								<a href="stationWiseNowcastGIS.php">Stationwise</a>
							</div>
						</div>
						<div class="col-lg-3 col-sm-6">
							<div class="ql-item bg-qlinks-green">
								<h2>Public Observation</h2>
								<!-- link for information -->
								(<a href="https://city.imd.gov.in/citywx/crowd/enter_th_datag_multilang.php" title="Download Mausam App for CrowdSource Observation" target="_blank" rel="noopener noreferrer">Multi Indian Languages</a>)
								&nbsp;|&nbsp;
								<a href="wxRealized.php" title="Temperature & Rainfall">Weather Realized</a>
							</div>
						</div>
						<div class="col-lg-3 col-sm-6">
							<div class="ql-item bg-qlinks-yellow lh-70 sub-menu">
								<h2 class="text-dark">Specialized Forecast <i class="bi bi-sort-down"></i></h2>
								<ul class="list-unstyled sp-items">
									<li><a href="https://dss.imd.gov.in/dwr_img/GIS/amarnath_public_portal/amarnath_oper.html" target="_blank">Amarnath Yatra</a></li>
									<li><a href="marine_forecast.php">Marine Forecast</a></li>
									<li><a href="https://imdpune.gov.in/caui/health.pdf" target="_blank" rel="noopener noreferrer">Health Meteorological Bulletin</a></li>
									<li><a href="https://internal.imd.gov.in/pages/tourism_forecast_mausam.php" target="_blank" rel="noopener noreferrer">Tourism Forecast</a></li>
									<li><a href="http://srf.tropmet.res.in/srf/ts_prediction_system/index.php" target="_blank" rel="noopener noreferrer">Thunderstorm Prediction</a></li>
																											<!--<li><a href="http://internal.imd.gov.in/pages/fogmain_mausam.php" target="_blank" rel="noopener noreferrer">Winter Weather Guidance</a></li>-->
									<li><a href="flashFloodBulletin.php">Flash Flood Bulletin</a></li>			   
									<li><a href="https://ews.tropmet.res.in/" target="_blank" rel="noopener noreferrer" title="AIR QUALITY EARLY WARNING SYSTEM">AQEWS</a></li>
									<li><a href="https://nwp.imd.gov.in/silam_imd.php" target="_blank" rel="noopener noreferrer">Air Quality forecast</a></li>
									<li><a href="https://nwp.imd.gov.in/enfuser_imd.php" target="_blank" rel="noopener noreferrer" title="Environmental Information Fusion Service">ENFUSER AQ</a></li>	   
									<!-- <li><a href="http://safar.tropmet.res.in/" target="_blank" rel="noopener noreferrer" title="System of Air Quality and Weather Forecasting And Research">SAFAR</a></li> -->
									<li><a href="https://internal.imd.gov.in/power/NRLDC/" target="_blank" rel="noopener noreferrer">Power Sector</a></li>
									<!--<li><a href="http://14.139.247.5/power/NRLDC/" target="_blank" rel="noopener noreferrer">Power Sector</a></li>-->
									<!-- <li><a href="pilgrimage_forecast.php">Pilgrimage Forecast</a></li> -->
									<li><a href="https://dss.imd.gov.in/dwr_img/GIS/chardham_public_portal/char_dham_oper.html" target="_blank" rel="noopener noreferrer">Pilgrimage Forecast</a></li>
									<li><a href="https://internal.imd.gov.in/section/nhac/dynamic/hmc.pdf" target="_blank" rel="noopener noreferrer">Mountain Weather Bulletin</a></li>
									<li><a href="highwayForecast.php">Highway Forecast</a></li>
																		<li><a href="https://dss.imd.gov.in/dwr_img/GIS/railway_dashboard/railway_monitoring.html" target="_blank" rel="noopener noreferrer">INDIAN RAILWAYS Forecast</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div><!-- quick links end -->
			
			<!-- marquee content -->
			<section class="mrq">
				<div class="container-xxl">
					<marquee direction="scroll" scrollamount="4" onmouseover="this.stop();" onmouseout="this.start();">
						<!-- paragraps -->
						<p><a href='/Forecast/marquee_data/Press_Release_NOV_31oct_2026.pdf' style='color: #000000' target='_blank'>Press Release: Monthly Outlook for Rainfall and Temperature for November 2026</a></p><p><a href='/Forecast/marquee_data/ विज्ञप्ति _NOV_31.10.26.pdf' style='color: #000000' target='_blank'>प्रेस विज्ञप्ति:नवंबर 2026 के लिए वर्षा और तापमान का मासिक आउटलुक</a></p><p><a href='/Forecast/marquee_data/ विज्ञप्ति 31.10.2026.pdf' style='color: #000000' target='_blank'>प्रेस विज्ञप्ति तारीखः 31 अक्टूबर, 2026</a></p><p><a href='/Forecast/marquee_data/Press Release 31-10-2026.pdf' style='color: #000000' target='_blank'>Press Release  Date: 31st October 2026 </a></p><p><a href='/Forecast/marquee_data/Monthly press release.pdf' style='color: #000000' target='_blank'>*Subject: Virtual Press Conference on “Monthly Outlook for Rainfall & Temperature for November,2026” on 31st October 2026 at 1600 IST</a></p><p><a href='/Forecast/marquee_data/ERF.pdf' style='color: #000000' target='_blank'>SUBJECT: CURRENT WEATHER STATUS AND EXTENDED RANGE FORECAST FOR THE NEXT TWO WEEKS (29 OCTOBER TO 11 NOVEMBER 2026)</a></p><p><a href='/Forecast/marquee_data/ERF 22.10.26.pdf' style='color: #000000' target='_blank'>Current Weather Status and Extended Range Forecast for the next two weeks (22 October to 04 November 2026)</a></p><p><a href='/Forecast/marquee_data/Press release 17.10 egovernence.pdf' style='color: #000000' target='_blank'>IMD Reaffirms Commitment to Good Governance and Citizen-Centric Services through e Governance.</a></p>					</marquee>
				</div>
			</section>
			
			<!-- inner page content area -->
			<div class="inner-page-content">
				<div class="container-xxl">  
					<!-- page title -->
					<h3 class="ipc-title">RADAR - Delhi-HQ</h3>
					<h4 class="ipc-title">(<a href="radar_animation.php">Animations - RADAR<?php// echo $radar; ?></a>)</h4>
          <!-- citizen charter page content -->
          <div class="default-block">  
            <div class="row g-3">

	<!-- Below two lines commented to restrict certain radar stations -->
            
              <div class="col-md-12">
								<p class="lead mb-3 text-center text-primary fs-6">Click on Image for (<i class="bi bi-zoom-in fs-6"></i>) Zoom-In &amp; for RADAR Network scroll down the page. <a href="radar_animation.php">For 3 Hrs Animation RADAR, Click here</a></p>
								<!-- RADAR block images -->
                
                <div class="radar-images">
                            
                                                                            

                                    <span class="image-container-span">
                                        <a href="https://www.facebook.com/sharer/sharer.php?u=https://mausam.imd.gov.in/Radar/caz_delhi.gif" target="_blank"
                                            class="share-link" title="Share on Facebook" style="--index: 1;"
                                        ><i class="bi bi-facebook"></i></a>
                                        <a href="https://api.whatsapp.com/send?text=RADAR%20-%20Delhi-HQ!%20https://mausam.imd.gov.in/Radar/caz_delhi.gif" target="_blank"
                                            class="share-link" title="Share on Whatsapp" style="--index: 2;"
                                        ><i class="bi bi-whatsapp"></i></a>
                                        <!-- MAX (Z) -->
                                        <img src="../../../Radar/caz_delhi.gif" class="ri-icons" title="MAX (Z)">
                                    </span>
									<!-- Plan Position Indicator (Z) - Close Range -->
									<img src="../../../Radar/ppi_delhi.gif" class="ri-icons" title="Plan Position Indicator (Z) - Close Range">
									<!-- Surface Rainfall Intensity -->
									<img src="../../../Radar/sri_delhi.gif" class="ri-icons" title="Surface Rainfall Intensity">
									<!-- Plan Position Indicator (Z) -->
									<img src="../../../Radar/ppz_delhi.gif" class="ri-icons" title="Plan Position Indicator (Z)">
									<!-- Precipitation Accumulation -->
									<img src="../../../Radar/pac_delhi.gif" class="ri-icons" title="Precipitation Accumulation">
									<!-- Plan Position Indicator (V) -->
									<img src="../../../Radar/ppv_delhi.gif" class="ri-icons" title="Plan Position Indicator (V)">
									<!-- Volume Velocity Processing(2) -->
																		<img src="../../../Radar/vp2_delhi.gif" class="ri-icons" id="rdrImage" title="Volume Velocity Processing(2)">
									                                								</div>
              </div>
	     <!-- Below line commented to restrict certain radar stations -->
              <?php// } ?>
              <div class="col-md-12">
								<h1 class="display-6 text-center text-danger">OUR RADAR NETWORK</h1>
								<div id="chartdiv"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
			
		</section>
		<!-- main content end -->        
	</center>	
		<!-- footer include -->
		<section class="footer border-top">
	<div class="container-xxl">
		<!-- footer widget -->
		<div class="row">
			<div class="col-lg-3 col-sm-6">
				<!-- footer widget items -->
				<div class="fw-item">
					<!-- heading/title -->
					<h3 class="fw-title">Forecasts</h3>
					<!-- footer widget body -->
					<div class="fw-body">
						<ul class="list-unstyled">
							<li><a href="http://internal.imd.gov.in/pages/city_weather_main_mausam.php" target="_blank" rel="noopener noreferrer">Urban Meteorological Services </a></li>
							<li><a href="http://nwp.imd.gov.in/gfsproducts_cycle00_mausam.php" target="_blank">Short to Medium Range Model Guidance</a></li>
							<li><a href="extendedRangeForecast.php">Extended Range Model Guidance</a></li>
							<li><a href="seasonal_forecast.php">Seasonal Forecast</a></li>
							<li><a href="quantPrecipForecast.php">Quantitative Precipitation Forecast</a></li>
							<li><a href="https://cap-sources.s3.amazonaws.com/in-imd-en/rss.xml" target="_blank">Latest CAP Alerts</a></li>
						</ul>
					</div>
					<br>
					<div class="fw-body">
						<h3 class="fw-title">for historical data related query</h3>

						<div class="fw-body">
							<p class="address">1. Mr. Ranjan Phukan, Sc. D<br>Contact No: <a href="tel:+919435669264">+91 9435669264</a>, ranjan.phukan[at]imd[dot]gov[dot]in
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-sm-6">
				<!-- footer widget items -->
				<div class="fw-item">
					<!-- heading/title -->
					<h3 class="fw-title">Specialised products &amp; forecasts</h3>
					<!-- footer widget body -->
					<div class="fw-body">
						<ul class="list-unstyled">
							<li><a href="cycloneinformation.php">Cyclones</a> &nbsp;|&nbsp;
								<a href="monsooninformation.php">Monsoon</a> &nbsp;|&nbsp;
								<a href="satellite.php">Satellite</a><!-- <a href="https://www.mosdac.gov.in/" target="_new">Satellite</a>-->
							</li>
							<li><a href="radar.php">Radar</a> &nbsp;|&nbsp;
								<a href="rainfallinformation.php">Rainfall</a> &nbsp;|&nbsp;
								<a href="agromet_adv_ser_state_current.php">Agromet Advisories</a>
							</li>
							<li>MAUSAM : <a href="https://play.google.com/store/apps/details?id=com.imd.masuam" target="_blank" rel="noopener noreferrer"><img src="img/icons/android.png" alt="ANDROID"></a> &nbsp;|&nbsp;
								<a href="https://apps.apple.com/us/app/id1522893967" target="_blank"><img src="img/icons/apple.png" alt="APPLE"></a> |
								<a href="videos/mausam_app_v1.mp4" target="_blank" rel="noopener noreferrer">Video</a>
							</li>
							<li>Meghdoot Agro : <a href="https://play.google.com/store/apps/details?id=com.aas.meghdoot" target="_blank" rel="noopener noreferrer"><img src="img/icons/android.png" alt="ANDROID"></a> &nbsp;|&nbsp;
								<a href="https://apps.apple.com/in/app/meghdoot/id1474048155" target="_blank" rel="noopener noreferrer"><img src="img/icons/apple.png" alt="APPLE"></a> |
								<a href="videos/meghdoot_app.mp4" target="_blank" rel="noopener noreferrer">Video</a>
							</li>
							<!-- <li>Public Observation-IMD : <a href="https://play.google.com/store/apps/details?id=com.mausam.crowdsource" target="_blank" rel="noopener noreferrer"><img src="img/icons/android.png" alt="ANDROID"></a></a>&nbsp;|&nbsp;
								<a href="https://apps.apple.com/in/app/public-observation-imd/id1618055762" target="_blank"><img src="img/icons/apple.png"></a> |
								<a href="/imd_latest/weather_video/Crowd%20Sourcing%20Observation.mp4" target="_blank">Video</a>
							</li> -->
							<li>Damini Lightning : <a href="https://play.google.com/store/apps/details?id=com.lightening.live.damini" target="_blank" rel="noopener noreferrer"><img src="img/icons/android.png" alt="ANDROID"></a> &nbsp;|&nbsp;
								<a href="https://itunes.apple.com/WebObjects/MZStore.woa/wa/viewSoftware?id=1502385645" target="_blank" rel="noopener noreferrer"><img src="img/icons/apple.png" alt="APPLE"></a>
							</li>
							<li>UMANG : <a href="https://play.google.com/store/apps/details?id=in.gov.umang.negd.g2c" target="_blank" rel="noopener noreferrer"><img src="img/icons/android.png" alt="ANDROID"></a> &nbsp;|&nbsp;
								<a href="https://apps.apple.com/in/app/umang/id1236448857" target="_blank" rel="noopener noreferrer"><img src="img/icons/apple.png" alt="APPLE"></a>
							</li>
							<li><a href="https://dsp.imdpune.gov.in/" target="_blank" rel="noopener noreferrer"><b>Data Service Portal - Meteorological Data</b></a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-sm-6">
				<!-- footer widget items -->
				<div class="fw-item">
					<!-- heading/title -->
					<h3 class="fw-title">Miscellaneous</h3>
					<!-- footer widget body -->
					<div class="fw-body">
						<ul class="list-unstyled">
							<li>
																<a href="citizenCharter.php">Citizen’s Charter</a> &nbsp;|&nbsp;
								<a href="hindi_section.php" target="_blank" rel="noopener noreferrer">संगोष्ठी</a>
							</li>
							<li>
								<a href="faq.php">Frequently Asked Questions</a>
							</li>
							<li><a href="https://internal.imd.gov.in/pages/rti_mausam.php" target="_blank" rel="noopener noreferrer">RTI</a> &nbsp;|&nbsp;
								<a href="feedback/feedback.php" target="_blank" rel="noopener noreferrer">Feedback</a>&nbsp;|&nbsp;
								<a href="/responsive/PoSH.php" target="_blank" rel="noopener noreferrer">Internal Complaint Committee</a>
							</li>
							<li><a href="https://shebox.wcd.gov.in/" target="_blank" rel="noopener noreferrer">Sexual Harassment complaint portal</a></li>

							<li><a href="https://www.youtube.com/playlist?list=PLeEHd98fYDxjqoVoGRmyzQeJlIVClRQts">Weather Video</a> &nbsp;|&nbsp;
								<a href="https://internal.imd.gov.in/advertisements/20260514_advt_119.pdf" target="_blank" rel="noopener noreferrer">GKMS News Letter</a>
							</li>
							<li><a href="/Forecast/login.php" target="_blank" rel="noopener noreferrer">Database Login</a> &nbsp;|&nbsp;
								<a href="/backend/auth/login" target="_blank" rel="noopener noreferrer">Admin Login</a>
							</li>
							<li><a href="http://internal.imd.gov.in/pages/tenders_mausam.php" target="_blank" rel="noopener noreferrer">Tenders</a> &nbsp;|&nbsp;
								<a href="https://internal.imd.gov.in/pages/recruits_mausam.php?id=1" target="_blank" rel="noopener noreferrer">WMO recruitment</a> &nbsp;|&nbsp;
								<a href="https://internal.imd.gov.in/pages/advertisements_mausam.php" target="_blank" rel="noopener noreferrer">Circulars</a>
							</li>
							<li><a href="http://internal.imd.gov.in/pages/recruits_mausam.php" target="_blank" rel="noopener noreferrer">Recruitment</a> &nbsp;|&nbsp; <a href="https://internal.imd.gov.in/pages/recruits_mausam.php?id=2" target="_blank" rel="noopener noreferrer">Compassionate Appointment</a></li>
							</li>
							<li><a href="https://metnet.imd.gov.in/phps/imdweb_ip_main2.php" target=_blank>Immovable Property Return</a></li>
							<li><a href="disclaimer.php">Disclaimer</a> &nbsp;|&nbsp;
								<a href="sitemap.php">Sitemap</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-sm-6">
				<!-- footer widget items -->
				<div class="fw-item">
					<!-- heading/title -->
					<h3 class="fw-title"><a href="contact.php">Contact Us</a></h3>
					<!-- footer widget body -->
					<div class="fw-body">
						<p class="address">Office of Director General of Meteorology<br />
							India Meteorological Department (IMD)<br />
							Mausam Bhawan, Lodhi Road<br />
							New Delhi - 110003</p><br>
						<!-- heading/title -->
						<h3 class="fw-title">Weather related query for Media</h3>
						<h4 style="font-size:15px;">Query Time: 10:00am to 5:00pm</h4>

						<!-- footer widget body -->
						<div class="fw-body">
							<p class="address">1. Dr. Naresh Kumar, Sc. F<br>Contact No: <a href="tel:+919968680077">+91 9968680077</a>, naresh.nhac[at]gmail[dot]com<br />
								2. Dr. Akhil Srivastava, Sc. D<br>Contact No: <a href="tel:+918285281968">+91 8285281968</a>, akhil.srivastava[at]imd[dot]gov[dot]in<br /></p>
						</div>
						<!-- heading/title -->
						<!--<h3 class="fw-title mt-4">Total Visits</h3>-->
						<!-- footer widget body -->
						<div class="fw-body">
							<!-- visit count display -->
													</div>
					</div>
				</div>
			</div>
			<!-- footer social media -->
			<div class="social-media">
				<a href="https://www.facebook.com/India.Meteorological.Department/" class="sm-link facebook" title=""><i class="bi bi-facebook"></i></a>
				<a href="https://www.youtube.com/channel/UC_qxTReoq07UVARm87CuyQw/featured?view_as=subscriber" class="sm-link youTube" title=""><i class="bi bi-youtube"></i></a>
				<a href="https://twitter.com/Indiametdept" class="sm-link twitter" title=""><i class="bi bi-twitter"></i></a>
				<a href="https://instagram.com/mausam_nwfc/" target="new" class="sm-link instagram" title=""><i class="bi bi-instagram"></i></a>
			</div>
			<p class="copy-right">&copy; Copyright 2026, Developed by IT Team, India Meteorological Department<br />Ministry of Earth Sciences, New Delhi, India</p>
		</div>
</section>


<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-157746104-1"></script>
<script>
	window.dataLayer = window.dataLayer || [];

	function gtag() {
		dataLayer.push(arguments);
	}
	gtag('js', new Date());

	gtag('config', 'UA-157746104-1');
</script>

				
		<!-- Scroll to top -->
		<span class="totop"><a href="#"><i class="bi bi-arrow-up-circle-fill"></i></a></span> 

		<!-- jQuery v1.11.3 -->
    <script src="js/libs/jquery.min.js"></script>
		<!-- bootstrap js 5.0 -->
    <script src="assets/js/bootstrap.bundle.min.js"></script>
		<!-- viewer js/css -->
		<script src="assets/dist/viewer.js"></script>
		<link  href="assets/dist/viewer.css" rel="stylesheet">
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>

    <script>
	    
function imageViewer() {
    var $image = $('#image');
    $image.viewer({
        inline: true,
        viewed: function() {
            $image.viewer('zoomTo', 1);
        }
    });
    // Get the Viewer.js instance after initialized
    var viewer = $image.data('viewer');
    // View a list of images
    $('.radar-images').viewer();
}

$(document).ready(function() {
    imageViewer();
});
        // Initialize map with minimum zoom level set to 4
        var map = L.map('chartdiv', {
            center: [22.5937, 82.9629],  // India Centered
            zoom: 5,  // Initial zoom level
            minZoom: 5,  // Minimum zoom level set to 4
            zoomControl: true,
			attributionControl: false  // Disable attribution control (Leaflet reference)
        });



        // Load India's state boundary JSON file
        fetch('../imd_latest/contents/district_shapefiles/INDIA_STATE_UT.json')  // Replace with correct path
            .then(response => response.json())
            .then(data => {
                // Create a GeoJSON layer for state boundaries
                var geojsonLayer = L.geoJSON(data, {
                    style: function (feature) {
                        return {
                            color: '#000000',
                            weight: 0.1,
                            fillColor: '#AAF0D1',
                            fillOpacity: 1
                        };
                    },
                    onEachFeature: function (feature, layer) {
                        layer.on({
                            mouseover: function (e) {
                                var layer = e.target;
                                layer.setStyle({
                                    weight: 0.1,
                                    color: '#000000',
                                    fillColor: '#0000FF',  // Change color on hover
                                    fillOpacity: 0.5
                                });
                            },
                            mouseout: function (e) {
                                geojsonLayer.resetStyle(e.target);  // Restore original state style
                            }//,
                            //click: function (e) {
                            //    alert('You clicked on ' + feature.properties.name);  // Display state name
                            //}
                        });
                    }
                }).addTo(map);
            });

        // Function to add a marker that adjusts according to zoom level
        //function addMarker(location, title, description) {
    	function addMarker(location, title, description, direction = 'top', offset = [0, -8]) {

            var marker = L.marker(location, {
                icon: L.icon({
                    iconUrl: '../../imd_latest/contents/map-marker-icon-png-green.png',
                    iconSize: [20, 20],
                    iconAnchor: [10, 20],
                    popupAnchor: [0, -20]
                })
            }).addTo(map).bindPopup(
                '<b>' + title + '</b><br>' + description
            );

            // Station name
            marker.bindTooltip(title, {
                permanent: true,
                direction: direction,
                offset: offset,
                className: 'radar-station-label',
                interactive: true
            });

            // Radar page URL
            var url = 'https://mausam.imd.gov.in/responsive/radar.php?id=' + title;

            marker.on('click', function () {
                window.location.href = url;
            });

            return marker;
        }


        

        var location1 = [23.2599, 77.4126];  
        addMarker(location1, 'Bhopal', 'Bhopal', 'right', [5, 0]);


        var location2 = [23.8315, 91.2868];  
        addMarker(location2, 'Agartala', 'Agartala');


        var location3 = [28.483333, 77.125];  
        addMarker(location3, 'Ayanagar', 'Delhi-Ayanagar', 'bottom', [0, 10]);


        var location4 = [28.5632, 77.1912];  
        addMarker(location4, 'Delhi', 'Delhi-HQ', 'right', [5, 0]);

        
        var location4 = [25.90278, 93.70306];  
        addMarker(location4, 'Dimapur', 'Dimapur', 'right', [5, 0]);


        var location5 = [23.242,69.6669];  
        addMarker(location5, 'Bhuj', 'Bhuj');


        var location6 = [12.9333333, 80.2];  
        addMarker(location6, 'Chennai', 'Chennai', 'left', [-5, 0]);


        var location7 = [15.4909, 73.8278];  
        addMarker(location7, 'Goa', 'Goa');


        var location8 = [17.6599, 75.9064];  
        addMarker(location8, 'Solapur', 'Solapur', 'bottom', [0, 10]);


        var location9 = [19.2647, 84.8620];  
        addMarker(location9, 'Gopalpur', 'Gopalpur');


        var location10 = [17.3850, 78.4867];  
        addMarker(location10, 'Hyderabad', 'Hyderabad');


        var location11 = [26.9124, 75.7873];  
        addMarker(location11, 'Jaipur', 'Jaipur', 'left', [-5, 0]);


        var location12 = [22.5726, 88.3639];  
        addMarker(location12, 'Kolkata', 'Kolkata');


        var location13 = [9.9312, 76.2673];  
        addMarker(location13, 'Kochi', 'Kochi', 'left', [-5, 0]);


        var location14 = [10.9254, 79.8380];  
        addMarker(location14, 'Karaikal', 'Karaikal', 'right', [5, 0]);


        var location15 = [26.8467, 80.9462];  
        addMarker(location15, 'Lucknow', 'Lucknow');


        var location16 = [16.1905, 81.1362];  
        addMarker(location16, 'Machilipatnam', 'Machilipatnam');


        var location17 = [33.51, 75.205];  
        addMarker(location17, 'Banihal', 'Banihal', 'left', [-5, 0]);

        var location43 = [18.93194444, 73.16222222];  
            addMarker(location43, 'Panvel', 'Panvel', 'left', [-10, 10]);    
        var location44 = [19.10722222, 72.83694444];  
            addMarker(location44, 'Vile Parle', 'Vile Parle', 'right', [10, 15]);    
        var location45 = [19.22666667, 73.11833333];  
            addMarker(location45, 'Kalyan-Dombivli', 'Kalyan-Dombivli', 'right', [5, 0]);    
        var location46 = [19.38388889, 72.82861111];  
            addMarker(location46, 'Vasai-Virar', 'Vasai-Virar');    
        var location47 = [21.5374, 83.9809];  
            addMarker(location47, 'Sambalpur', 'Sambalpur');
        var location48 = [23.2489, 91.4630];  
            addMarker(location48, 'Belonia', 'Belonia', 'right', [5, 0]);
        var location34 = [19.1342, 72.8672];  
        addMarker(location34, 'Mumbai-Veravali', 'Veravali', 'left', [-5, -10]);
        var location49 = [17.9217, 73.6556];  
            addMarker(location49, 'Mahabaleshwar', 'Mahabaleshwar', 'left', [-5, 0]);

        var location18 = [19.0760, 72.8777];  
        addMarker(location18, 'Mumbai-Colaba', 'Mumbai-Colaba', 'left', [-5, 0]);
		
		
        var location19 = [21.1458, 79.0882];  
        addMarker(location19, 'Nagpur', 'Nagpur');


        var location20 = [25.2702, 91.7323];  
        addMarker(location20, 'Sohra', 'Sohra');


        var location21 = [30.3398, 76.3869];  
        addMarker(location21, 'Patiala', 'Patiala');


        var location22 = [25.5941, 85.1376];  
        addMarker(location22, 'Patna', 'Patna');


        var location23 = [34.28333333, 77.2833333];  
        addMarker(location23, 'Leh', 'Leh');


        var location24 = [34.0516666, 74.805];  
        addMarker(location24, 'Srinagar', 'Srinagar');


        var location38 = [32.78166, 74.83];  
        addMarker(location38, 'Jammu', 'Jammu', 'left', [-5, 0]);


        var location25 = [26.638510, 92.81460];  
        addMarker(location25, 'Tezpur', 'Tezpur');


        var location25 = [8.5241, 76.9366];  
        addMarker(location25, 'Thiruvananthapuram', 'Thiruvananthapuram', 'bottom', [0, 10]);


        var location26 = [17.6868, 83.2185];  
        addMarker(location26, 'Visakhapatnam', 'Visakhapatnam');


        var location27 = [27.4728, 94.9120];  
        addMarker(location27, 'Mohanbari', 'Mohanbari');


        var location28 = [20.3166, 86.6114];  
        addMarker(location28, 'Paradip', 'Paradip');


        var location29 = [13.7259, 80.2266];  
        addMarker(location29, 'Sriharikota', 'Sriharikota');


        var location30 = [32.48666, 76.2673];  
        addMarker(location30, 'Jot', 'Jot');


        var location31 = [31.505, 76.81333];  
        addMarker(location31, 'Murari', 'Murari', 'left', [-5, 0]);


        var location32 = [28.5901, 77.0888];  
        addMarker(location32, 'Palam', 'Delhi-Palam', 'left', [-5, 0]);


        var location33 = [29.46, 79.66];  
        addMarker(location33, 'Mukteshwar', 'Mukteshwar', 'right', [5, 0]);

        var location35 = [31.0983333, 77.265];  
        addMarker(location35, 'Kufri', 'Kufri', 'right', [5, 0]);


        var location36 = [30.41166, 78.28833];  
        addMarker(location36, 'Surkandaji', 'Surkandaji', 'right', [5, 0]);


        var location37 = [29.85, 78.676666];  	
        addMarker(location37, 'Lansdowne', 'Lansdowne', 'left', [-5, 0]);	


        var location38 = [21.25, 81.629997];  
        addMarker(location38, 'Raipur', 'Raipur');		

        var location39 = [12.95, 74.84];  
            addMarker(location39, 'Mangaluru', 'Mangaluru', 'right', [5, 0]);

        var location40 = [12.9451, 80.2115];  
            addMarker(location40, 'Pallikaranai', 'Pallikaranai', 'right', [5, 0]);	

        var location41 = [26.71689, 94.19397];  
            addMarker(location41, 'Jorhat', 'Jorhat', 'right', [0, 0]);
            
        var location42 = [23.5716, 77.2461];  
            addMarker(location42, 'Silkheda', 'Silkheda');
    </script>

 </body>
</html>