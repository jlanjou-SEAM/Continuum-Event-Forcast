<!-- End PHP -->

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "https://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en">


<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="robots" content="noindex">

<title>National Weather Service Conus - 90 Day Outlook</title>

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<link rel="stylesheet" href="//js.arcgis.com/3.34/dijit/themes/claro/claro.css">
<link rel="stylesheet" href="https://js.arcgis.com/3.34/esri/css/esri.css">
<script src="https://js.arcgis.com/3.34/"></script> 

<script type="text/javascript" src="js/esri_map.js"></script>
<link rel="stylesheet" href="css/esri_map.css">

<link href="includes/styles.css" rel="stylesheet" type="text/css">
<link href="../../../../nwscwi/main.css" type="text/css" rel="STYLESHEET">

<link rel="stylesheet" href="css/esri_map.css" type="text/css">
<link rel="stylesheet" href="css/map_control.css" type="text/css">
 
<!--<script src="js/jquery-1.11.3.js"></script>adding JQuery-->
<script src="https://code.jquery.com/jquery-3.6.1.min.js"
	integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>

<style>
.maxt_radio label {
    display:inline-block;
    background-color:#ddd;
    padding:4px 11px;
    font-family:Arial;
    font-size:16px;
}

  #op_slider {
      position: relative;
      top: 0px;
      left: -15px;
      z-index: 999;
      background-color: transparent;
}
	
      .claro .dijitRuleLabel {
        color: #fcc;
      }
      .claro .dijitRuleMark {
        border: 1px solid #fcc;
      }
	  

</style>
</head>

<body class="claro" background="/nwscwi/background-white.gif">

<!-- Begin PHP -->
<script src="https://www.weather.gov/source/nws/govshutdown.js" defer></script>

<table cellspacing="0" cellpadding="0" width="100%" border="0" background="/nwscwi/topbanner.jpg" >
	<tbody>
		<tr>
			<td align="right" height="19">
				<a href="#contents"><img height="1" alt="Skip Navigation Links" src="/nwscwi/skipgraphic.gif" width="1" border="0"></a>
				<a href="https://www.nws.noaa.gov/" class="homepagelinks"><span class="nwslink">www.nws.noaa.gov</span></a>&nbsp;
			</td>
		</tr>
	</tbody>
</table>
<!-- -->
<table cellspacing="0" cellpadding="0" width="100%" border="0">
	<tbody>
		<tr>
			<td rowspan="2"><a href="https://www.noaa.gov/"><img height="78" alt="NOAA logo - Click to go to the NOAA home page" src="/nwscwi/noaaleft.jpg" width="85" border="0"></a></td>
			<td align="left"><img height="20" alt="National Weather Service" src="/nwscwi/nws_title.jpg" width="500" border="0"></td>
			<td rowspan="2" width="100%" background="/nwscwi/ncep_bkgrnd.jpg">&nbsp;</td>
			<td rowspan="2" align="right"><a href="https://www.nws.noaa.gov/"><img height="78" alt="NWS logo - Click to go to the NWS home page" src="/nwscwi/nwsright.jpg" width="85" border="0"></a></td>
		</tr>
		<tr>
			<td><img height="58" alt="Climate Prediction Center" src="/nwscwi/cpc.jpg" width="500" border="0"></td>
		</tr>
	</tbody>
</table>
<!-- -->
<table cellspacing="0" cellpadding="0" width="100%" background="/nwscwi/navbkgrnd.gif" border="0">
	<tbody>
		<tr>
			<td align="left" width="135"><img height="23" alt="" src="/nwscwi/navbarleft.jpg" width="94" border="0"></td>
			<td class="nav" align="center" width="10%"><a href="/" class="menu" title="to the Climate Prediction Center home page">Home</a></td>
			<td class="nav" align="center" width="10%"><a href="/products/site_index.shtml" class="menu" title="to Climate Prediction Center site map">Site Map</a></td> 
			<td class="nav" align="right" width="10%"><a href="https://www.weather.gov/news" class="menu" title="to National Weather Service news page">News</a></td>
			<td class="nav" align="right" width="19%"><a href="https://www.weather.gov/organization.php" class="menu">Organization</a></td>
			<td class="searchinput" align="right" width="30%">
				<form method="get" action="https://search.usa.gov/search" style="margin-bottom:0; margin-top:0;">
					<label for="Search"><span class="yellow">Search</span>&nbsp;&nbsp;</label>
					<input type="hidden" name="affiliate" value="nws.noaa.gov" />
					<input type="hidden" name="v:project" value="firstgov" />
					<input name="query" type="text" value="" size="20" maxlength="256" id="Search" />
					<input type="submit" value="Go" />
				</form>
			</td>
			<td align="right"><img height="23" alt="" src="/nwscwi/navbarendcap.jpg" width="24" border="0"></td>
		</tr>
	</tbody>
</table>
<!-- End PHP -->

<!-- Main content frame -->

<div id="updated_div" style="position: relative; top: 30px; left: 280px; font-size:10px;" ><p class="experiment"><b>interactive display - Updated: 15 Oct 2026</b></p></div>
	<form  method="POST" action="" name="myForm" id ="myForm">
	<div id=temp_container >
	 <div id=temp_fcst_label style="visibility:visible;width:100px;position:relative;left:50px;top:0px; font-size:14px;font-family: Georgia, 'Times New Roman', Times, serif;font-style:italic;font-weight:bold">
			Temperature	</div>
	  <div id="temp_fcst_radio" style="visibility:visible;position:relative;left:45px;top:1px;font-size:12px;width:220px;">

			 <input type="radio" style="visibility:visible;position:relative;left:0px;top:1px;font-size:12px" name="called" value="0" id='avgtemp_radio' checked="checked">Outlook</input> <!--| <strong>Normal:</strong>-->
<!-- 			  <input type="radio" style="visibility:visible;position:relative;left:0px;top:2px;font-size:12px" name="called" id='maxt_radio' value="1"><font style="color:#660000">Max</font>
			  <input type="radio" style="visibility:visible;position:relative;left:0px;top:2px;font-size:12px;" name="called" id='mint_radio' value="2"><font style="color:#000066">Min</font> 
-->
			
		</div>

	<div id=prcp_container>
		<div id=prcp_fcst_label style="visibility:visible;width:100px;position:relative;left:20px;top:0px;font-size:14px;font-family: Georgia, 'Times New Roman', Times, serif;font-style:italic;font-weight:bold">
			Precipitation
		</div>
		<div id=temp_fcst_radio style="visibility:visible;position:relative;left:15px;top:1px;font-size:12px;width:200px;">
				<input type="radio" style="visibility:visible;position:relative;left:0px;top:1px;font-size:12px" name="called" id='precip_fcst_radio'  value="3">Outlook</input>
<!--				<input type="radio" style="visibility:visible;position:relative;left:0px;top:1px;font-size:12px" name="called" id='avgp_radio' value="4">Normal</input>	-->
			</div>
		</div>



		<div id=lead_container>
                <div id=lead_fcst_label style="visibility:visible;width:100px;position:absolute;left:200px;top:-38px;font-size:14px;font-family: Georgia, 'Times New Roman', Times, serif;font-style:italic;font-weight:bold">
                       <!--Change Lead-->
                </div>
                    <div id=lead_fcst_radio style="visibility:visible;position:relative;left:-50px;top:-90px;font-size:20px;width:300px;">
<!--                              <input type="select" style="visibility:visible;position:relative;left:0px;top:1px;font-size:12px" name="calledL" id='leadd_fcst_radio' value="Lead2">Lead2</input>
                               <input type="radio" style="visibility:hidden;position:relative;left:0px;top:1px;font-size:12px" name="called2" id='leadd_fcst_radio' value="Lead1" checked="checked"></input>
-->				 <input type="radio" style="visibility:hidden;position:relative;left:0px;top:1px;font-size:12px" name="called2" id='lead_radio' value="Lead1" checked="checked"></input>
                                 <input type="radio" style="visibility:hidden;position:relative;left:0px;top:1px;font-size:12px" name="called3" id='param_radio' value="" checked="checked"></input>      
<!--OnSelectionChange(this)-->
                     		<select style="visibility:visible;position:relative;left:5px;top:0px;font-size:20px;background-color:yellow;box-shadow:0px 0px 1px 1px" id="LeadSel" name="LeadSel" onchange="myForm.submit();OnSelectionChange(this)">
                                        <option value="">Select Lead</option>
					<option value="Lead1">Lead 1</option>
                                        <option value="Lead2">Lead 2</option>
                                        <option value="Lead3">Lead 3</option>
					<option value="Lead4">Lead 4</option>
                                        <option value="Lead5">Lead 5</option>
                                        <option value="Lead6">Lead 6</option>
					<option value="Lead7">Lead 7</option>
                                        <option value="Lead8">Lead 8</option>
                                        <option value="Lead9">Lead 9</option>
					<option value="Lead10">Lead 10</option>
                                        <option value="Lead11">Lead 11</option>
                                        <option value="Lead12">Lead 12</option>
					<option value="Lead13">Lead 13</option>
                               </select>




	 </div>                               


                </div>

	</div>
	</form>
	
	<div id=trans_container>
		 <div id=op_label style="padding-bottom: 9px;position:relative;left:60px;top:0px; font-size:14px;font-family: Georgia, 'Times New Roman', Times, serif;font-style:italic;font-weight:bold"></div>
		<div id="op_slider"></div>
	</div>

	<img id=legend_div style="margin-top:1px;height:20px;width:460px"</img><!--legend call in js-->

<div id='border' border="0" >
	<table>
	<tr>
	<td valign="top" width="137" ><br>
           <table cellspacing="0" cellpadding="1" width="137" border="0">
           <tr>
           <td class="searchinput" align="left">
           <form method="get" action="https://firstgovsearch.gov/search" style="margin-bottom:0; margin-top:0;">
				<label for="Search">
				<span class="yellow">Search&nbsp;the CPC</span></label>
				<input type="hidden" name="affiliate" value="ncep.noaa.gov" />
				<input type="hidden" name="v:sources" value="firstgov-affiliates-search" />
				<input type="hidden" name="v:project" value="firstgov" />
				<input type="hidden" name="query" value="site:www.cpc.ncep.noaa.gov" />
				<input name="query" type="text" value="Search" color = "#CACACA" size="10" maxlength="256" id="Search"/>
				<input type="submit" value="Go"  />
			</form>
			</td>
			</tr>
				<tr><td>&nbsp;</td></tr>
				<tr>
				<td class="white" id="menuitem" style="line-height:1.3;">
				<span class="yellow">Text-Format <br>Discussions</span><br>
				&nbsp;&nbsp;&nbsp;<a href="/products/predictions/610day/fxus06.html" class="menu">Prognostic<br>&nbsp;&nbsp;&nbsp;Discussion</a><br><br>

				</td>
			</tr>
			<tr>
				<td class="white" id="menuitem" style="line-height:1.3;">
				<span class="yellow">Graphics & Maps</span><br>
				&nbsp;&nbsp;&nbsp;<a href="/products/predictions/legend.gif" class="menu">Map Legend</a><br>
				&nbsp;&nbsp;&nbsp;<a href="/products/predictions/814day/500mb.php" class="menu">500mb Heights &#38;<br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Anomalies</a><br>
				&nbsp;&nbsp;&nbsp;<a href="/products/predictions/short_range/Hawaiian_Outlook.d264.php" class="menu">Hawaiian Outlook &#38;<br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Anomalies</a><br>
				&nbsp;&nbsp;&nbsp;<a href="/products/predictions/814day/skill_ts.php" class="menu">Surface Forecast<br>&nbsp;&nbsp;&nbsp;&nbsp; Skill</a><br>
				&nbsp;&nbsp;&nbsp;<a href="/products/predictions/short_range/tools/model_guidance.php" class="menu">Model Guidance Used</a><br>
				&nbsp;&nbsp;&nbsp;<a href="/products/archives/short_range/srarc.ind.php" class="menu">Archives [NEW]</a><br><br>
				</td>
			</tr>
			

			<tr>
				<td class="white" id="menuitem" style="line-height:1.3;">
				<span class="yellow">Verifications [NEW]</span><br>
				&nbsp;&nbsp;&nbsp;<a href="/products/predictions/short_range/verifications/html/" class="menu">Charts</a><br>
				&nbsp;&nbsp;&nbsp;<a href="/products/predictions/short_range/verifications/html/srskill_epx.html" class="menu">Explanation</a><br><br>
				</td>
			</tr>

			<tr>
				<td class="white" id="menuitem" style="line-height:1.3;" >
				<span class="yellow">Related Products</span><br>
				&nbsp;&nbsp;&nbsp;<a href="/products/predictions/610day/" class="menu">6-10 Day Outlooks</a><br>
				&nbsp;&nbsp;&nbsp;HPC: <a href="https://www.hpc.ncep.noaa.gov/medr/day6nav_color.html" class="menu">Day 6</a>, <a href="https://www.hpc.ncep.noaa.gov/medr/day7nav_color.html" class="menu">Day 7</a><br>
				&nbsp;&nbsp;&nbsp;<a href="/products/predictions/short_range/cold/wc_814.php" class="menu">Wind Chill</a><br>
				&nbsp;&nbsp;&nbsp;<a href="/products/predictions/short_range/NAEFS/Outlook_D264.00.php" class="menu">NAEFS 8-14 Day<br>&nbsp;&nbsp;&nbsp;&nbsp;Outlooks</a><br>
				&nbsp;&nbsp;&nbsp;<a href="/products/precip/CWlink/MJO/climwx.shtml" class="menu">AO/NAO/PNA/AAO</a><br><br>
				</td>
			</tr>

			<tr>
				<td class="white" id="menuitem" style="line-height:1.3;">
				<span class="yellow">About Us</span><br>
				&nbsp;&nbsp;&nbsp;<a href="/information/who_we_are/mission.shtml" class="menu">Our Mission</a><br>
				&nbsp;&nbsp;&nbsp;<a href="/information/who_we_are" class="menu">Who We Are</a><br><br>
				</td>
			</tr>

			<tr>
				<td class="white" id="menuitem" style="line-height:1.3;">
				<span class="yellow">Contact Us</span><br>
				&nbsp;&nbsp;&nbsp;<a href="/information/personnel/contacts.shtml" class="menu">CPC Information</a><br>
				&nbsp;&nbsp;&nbsp;<a href="/comment-form.html" class="menu">CPC Web Team</a><br>
				<!--&nbsp;&nbsp;&nbsp;<a href="/NWS-feedback-form.html" class="menu">Product Feedback</a><br><br>-->
				</td>
			</tr>

			<tr>
				<td class="white" id="menuitem" style="line-height:1.3;">
				<span class="yellow">Note: 6-10 Day outlooks are issued daily between 3pm & 4pm Eastern Time. All forecasts issued on weekends are completely automated while all weekday outlooks are modified by the forecaster.
				<BR>&nbsp;<BR>Please refer to the U.S. Prognostic Discussion for an explanation of terms and symbols used on these maps.</span><br><br>
				</td>
			</tr>

			<TR><TD>&nbsp;</TD></TR>
			<TR>
				<TD class="white" id="menuitem"><a href="https://www.usa.gov/">
					<img src="/nwscwi/usagov_logo_color_110wb.gif" alt="USA.gov is the U.S. Government's official Web portal to all Federal, state and local government Web resources and services." width="110" height="30" border="0"></a>
				</TD>
			</TR>
			</table>
		</td>
			
<!--This is the table that defines the layout in the middle of the page.-->
		<td valign="top">
		<table border="0">

<!--first row-->

			<tr>
				<td>
					<div id="nav_under" style="visibility:visible;position:absolute;left:140px;top:150px;"><font face="verdana,arial,serif" size="1"><a href="/" class="homepagelinks"><b>Home</b></a> &gt; <a href="/products/forecasts/" class="homepagelinks">Outlooks & Forecasts</a> &gt; 90 Day Outlook</div>
				</td>
			</tr>
<!--<tr>
				<td>
						<div><p class="experiment"><b>interactive display - Updated: 15 Oct 2026</b></p></div>

				</td>
			</tr> -->

<!-- second row -->
			<tr>
				<td style="height:450px">
<!-- InLine PHP -->	<div id="interface_frame" style="visibility:visible;position:absolute;left:140px;top:200px;width:980px;height:525px;border-color:#7D7D7D;border-style:ridge;border-width:0px;background-color:#aaaaaa";>
					<div id=display_frame style="position:absolute;width:290px;height:515px;left:0px;top:0px;background-color:transparent;border-color:#7D7D7D;border-style:ridge;border-width:5px;"/>
						<!--<div id="address" style="visibility:visible;display:block;position:relative;left:5px;top:150px;"></div>-->
					<div id=loc_container style="visibility:visible;position:absolute;display:block;left:7px;top:50px;width:280px;height:25px;">
						<div id="chart_div_location" href="www.google.com" style="visibility:visible;font-size:16px;font-family: Georgia, 'Times New Roman', Times, serif;font-style:italic"></div>
					</div>

					<div id="address" style="visibility:visible;z-index:200;position:relative;left:0px;top:100px;"></div>
					
					<div id="chart_div_temp_label_max"></div>
					<div id="chart_div_temp_label_min"></div>
					<div id="chart_div_temp"></div>
                                        <div id="chart_tempval_above" style='position:relative;width:50px;height:25px;left:220px;top:152px;text-align:right;font-size:18px;'></div>
                                        <div id="chart_tempval_below" style='position:relative;width:50px;height:25px;left:220px;top:157px;text-align:right;font-size:18px;'></div>
                                        <div id="chart_tempval_normal" style='position:relative;width:50px;height:25px;left:220px;top:162px;text-align:right;font-size:18px;'></div>
					<div id="chart_div_precip_label"></div>
					<div id="chart_div_precip"></div>
                                        <div id="chart_prcpval_above" style='position:relative;width:50px;height:25px;left:220px;top:270px;text-align:right;font-size:18px;'></div>
                                        <div id="chart_prcpval_below" style='position:relative;width:50px;height:25px;left:220px;top:275px;text-align:right;font-size:18px;'></div>
                                        <div id="chart_prcpval_normal" style='position:relative;width:50px;height:25px;left:220px;top:280px;text-align:right;font-size:18px;'></div>
					</div>
<!-- InLine PHP -->	<div id="sample_frame" style="visibility:visible;position:absolute;z-index:100;left:300px;top:0px;width:670px;height:515px;border-color:#7D7D7D;border-style:ridge;border-width:5px">
<!-- Begin PHP -->
<!-- End PHP -->


<!--PRISM Credit-->
<!-- InLine PHP -->	<div id="prism_credit" style="visibility:hidden;position:absolute;z-index:200;left:10px;top:520px;font-size:8px">
									Normal Maps courtesy of the PRISM Climate Group, Oregon State University, <a href= https://prism.oregonstate.edu>prism.oregonstate.edu</a> created Oct 2008
								</div>
					<form id="region_switch">
<!-- InLine PHP -->	<div id="region_div" style="visibility:visible;border-style:outset;border-width:3px;position:absolute;z-index:200;left:10px;top:420px;width:90px;height:80px;background-color:yellow" name = 'reg' value = 'conus' >
										<a href="index_ak.php"><img id="region_thumb" src='./graphics/alaska/ak_thumb.jpg' style="visibility:visible;width:90px;height:80px;" alt="thumbs">Alaska</a>
					</div>
					</form>
<!-- InLine PHP -->	<img id=logo_noaa src="includes/logo_noaa.png" style="visibility:hidden;position:absolute;z-index:200;left:px;top:px;width:39px;height:38px"></img>
<!-- InLine PHP -->	<img id=logo_nws src="includes/logo_nws.png" style="visibility:hidden;position:absolute;z-index:200;left:627px;top:3px;width:39px;height:38px"></img>

					<div class="titleBar">

<!-- InLine PHP -->		<span class="mainTitle">Seasonal Outlook</span></br>
	                        

<!-- InLine PHP -->		<div id="Lead1" class="secondaryTitle" style="display:block;">November 2026-January 2027   <font color='blue'> (Lead 1)</font></div> 
</div>

					
<!-- Begin PHP -->
					<div id="map">
						<div id="hover_div"></div>
					</div>
<!-- End PHP -->

					</div>
				</div>


<!--<div><input id=permalink style="display:block;z-index:200;border-style:outset;border-width:2px;cursor:pointer;position:absolute;width:67px;height:22px;left:1046px;top:290px;font-size:10px;background-color:#663300;color:#FFFFFF" type="button" value="Custom Link" title="Custom Link" onclick="create_permalink()"/></div>-->

<!--  Location box and Enter button  -->
					<!--<div id="address" style="visibility:visible;display:block;position:absolute;left:183px;top:289px;height:20px;width:130px;font-size:15px"></div>-->
					<!--<div style="display:block"><input style="visibility:visible;display:block;position:absolute;left:183px;top:289px;height:20px;width:130px;font-size:15px" type="text" id="address" value="Enter Location"  onkeypress="return addressKeyHandler(event)"/></div>-->
					<!--<div id=lab_3 style="visibility:visible;position:absolute;left:323px;top:291px;height:20px;width:100px;font-size:15px"><input type="button" value="Enter" /></div>-->
			</td>
		</tr>
</div>
<div id = "salutations" style="margin:100px; width: 980px;">
	<tr>
		<td style="text-align:center;font-family:Arial,Helvetica,San Serif;font-size:1.2em; width:963px; border-style:ridge;border-width:5px; background-color: yellow;" >
			<p> <strong>Warning: This page is currently being upgraded!</strong></p>
			 <p> Some capabilities have been removed due to technical and/or aesthetic reasons.<br>
					Maximum temperature, minimum temperature, and normal precipitation climatology maps will be added to the interface at a later date. <br>
					Please click a point on the map to receive the information in the data display frame.
			  </p>
		</td>
	</tr>
	<tr>
		<td> 
		<dl>
		<tr>
			<td style="text-align:left;font-family:Arial,Helvetica,San Serif;font-size:1.2em;width: 800px;"> 
				<dl>
					<strong>This webpage was developed in conjunction with the Weather Forecast Office in Pendleton, Oregon (WFO PDT).<br><br> 
					Many thanks to the staff there for developing the prototype and assisting in the transition to CPC.</strong>
				</dd>
			</td>
		</tr>
	</tr>
	<tr>
		<td > 
		<dl><p class="FAQ">FAQ</p>
				<dt style="text-align:left;font-family:Arial,Helvetica,San Serif;font-size:1.5em;width: 800px;" > What climatologies are used in this display?</dt>
					<dd> 
						PRISM (Parameter-elevation Regressions on Independent Slopes Model) normals are used in this display. PRISM data are inherently available as monthly values.
						For precipitation, monthly total precipitation normals are totaled over the course of the 3-month period, for a given lead, to get seasonal total precipitation normals
						(e.g. seasonal precipitation normals for December-February will be the accumulation of the monthly total precipitation normals for December, January, and February).
						For temperatures, monthly average maximum/minimum temperature normals are averaged over the course of the 3-month period, for a given lead (e.g. seasonal average
						maximum/minimum temperature normals for December-February will be the average of the monthly average maximum/minimum temperature normals for December, January, and February).<br/><br/>
					</dd>
				<dt style="text-align:left;font-family:Arial,Helvetica,San Serif;font-size:1.5em;width: 800px;" > What color scheme is used?  </dt>
					<dd> The color scheme follows that of the static images for the <a href="https://www.cpc.ncep.noaa.gov/products/predictions/long_range/lead14/index.php">Monthly forecasts</a> and <a href="https://www.cpc.ncep.noaa.gov/products/predictions/long_range/index.php">Seasonal forecasts</a>.<br/><br/></dd>
						<dt style="text-align:left;font-family:Arial,Helvetica,San Serif;font-size:1.5em" > What does the highlighting around the normal precipitation or normal maximum/minimum temperature imply?  </dt>
					<dd> 
						The color used to highlight the normal values (precipitation or maximum/minimum temperature) are used to delineate the category of the forecast at the point clicked. If the selected point is within 
						an area of enhanced odds for above-normal temperatures, the shading around the normal maximum/minimum temperature will appear red. If the selected point is within an area of enhanced odds for 
						below-normal temperatures, the shading around the normal maximum/minimum temperature will appear blue. The same idea applies to the precipitation normal values, except enhanced odds for
						above- (below-) normal precipitation values are green (brown).
					</dd>
			</td>
		</tr>
</div>
   <td valign="bottom">  
   <div style="margin: 400px 0 0 0;">
					       <TABLE cellSpacing="0" cellPadding="0" width="1000" border="0">
         <TBODY>
         <TR>
           <TD colSpan="3"><HR></TD>
         </TR>
         <TR vAlign="top">
           <TD class="gray">
             <A href="https://www.noaa.gov/" class="homepagelinks"><SPAN class="gray">NOAA/</SPAN></A>
             <A href="https://www.nws.noaa.gov/" class="homepagelinks"><SPAN class="gray">National Weather Service</SPAN></A><BR>
                            <A href="https://www.ncep.noaa.gov/" class="homepagelinks"><SPAN class="gray">National Centers for Environmental Prediction</SPAN></a><BR>
                          Climate Prediction Center<BR>
					5830 University Research Court<br>
					College Park, Maryland 20740 <br>
                          Page Author:<A href="/comment-form.html" class="homepagelinks"><SPAN class="gray"> Climate Prediction Center Internet Team</SPAN></A><BR>
           </TD>
          <TD><A href="https://www.weather.gov/disclaimer.php" class="homepagelinks">
               <SPAN class="gray">Disclaimer</SPAN></A><br>
               <A href="https://www.cio.noaa.gov/Policy_Programs/info_quality.html" class="homepagelinks">
               <SPAN class="gray">Information Quality</SPAN></A><br>
               <A href="https://www.nws.noaa.gov/credits.php" class="homepagelinks">
               <SPAN class="gray">Credits</SPAN></A><br>
               <A href="https://www.nws.noaa.gov/glossary/" class="homepagelinks">
               <SPAN class="gray">Glossary</SPAN></A><br>
           </TD>
           <TD align="right"><A href="https://www.weather.gov/privacy.php" class="homepagelinks">
               <SPAN class="gray">Privacy Policy</SPAN></A><br>
               <A href="https://www.rdc.noaa.gov/%7Efoia/" class="homepagelinks">
               <SPAN class="gray">Freedom of Information Act (FOIA)</SPAN></A><br>
               <A href="https://www.nws.noaa.gov/admin.php" class="homepagelinks">
               <SPAN class="gray">About Us</SPAN></A><br>
               <A href="https://www.nws.noaa.gov/careers.php" class="homepagelinks">
               <SPAN class="gray">Career Opportunities</SPAN></A><br>
           </TD>
          </TR>
         </TBODY>
        </TABLE>
			</div>
		</td>
		</tr>
	</table>
	</div>
  </td>
</body>
</html>

