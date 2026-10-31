<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>















	<link rel="stylesheet" type="text/css" href="styles/winMenus.css">
	<link rel="stylesheet" type="text/css" href="styles/winStyle.css">








	<title>CAP System Status</title>
	<META http-equiv="Refresh" content="720">
	<META http-equiv="Expires" content="Mon, 06 Jan 1990 00:00:01 GMT">
	<META name="keywords" content="profiler, wind, cap, status" http-equiv="Keywords">







	<STYLE TYPE="text/css">
		#dek {POSITION:absolute;VISIBILITY:hidden;Z-INDEX:200;}
		.popup{
			font-family : "Courier New", Courier, monospace;
			font-size : 12px;
		}
	</style>
	<script type="text/javascript">
	<!--
	conusMapArySiteName = new Array( "ABTQC", "ARMOK", "ASTOR", "AMDQC", "BMTKS", "BPATX", "BBHAR", "BLTMD", "BO2OR", "BOROR", "BBYCA", "KSCFL", "FCPFL", "MIDFL", "MLNFL", "SCPFL", "RCOFL", "CFDUT", "CHANC", "CCOCA", "CTNNC", "FHHAZ", "CFCCA", "CCRCA", "CD2OR", "CDNOR", "DR2OR", "EGBQC", "CARON", "EPSTX", "191OR", "FKSWA", "FPDUT", "GNQQC", "GLAMN", "GDLWA", "GV2OR", "GRICA", "HRWQC", "HGDUT", "HPLMD", "HSNTX", "IRVCA", "JD2OR", "JZISC", "ARVWI", "LMNOK", "LPTTX", "LWSDE", "197OR", "LVRCA", "200OR", "LNMCO", "LAXCA", "RESTX", "LBKTX", "DALNS", "MRONC", "MSYQC", "MCGQC", "ACVCA", "MDCKS", "MKROK", "MMRCA", "NPSCA", "MCGQU", "MOVCA", "352OR", "PQLMS", "NCKQC", "EWNNC", "RUTNJ", "OTHOR", "OFTNC", "OHKTN", "446OR", "ONTCA", "OVECA", "PNRMD", "PVLCO", "265WA", "PTLCA", "PTMCA", "PTSCA", "PRWWI", "PV2OR", "PVEOR", "RTPNC", "RTPTX", "204OR", "SACCA", "SBACA", "SEAWA", "360OR", "SUACA", "SLDUT", "STWMA", "SNYFL", "DGWUT", "TCYCA", "TDEOR", "PAPAZ", "TCICA", "VISCA", "WWLWA", "WLMQC", "WC2OR", "WCOOR", "WPTWA", "WTNTX", "WHPCA", "WFCQC", "WILDE", "YKMWA", "YUMAZ" );
	conusMapAryLngName = new Array( "ABITIBI, QC", "ARM SGP OK", "ASTORIA OR", "AUMOND, QC", "BEAUMONT KS", "BEAUMONT PORT ARTHUR, TX", "BEE BRANCH, AR", "BELTSVILLE MD", "BOARDMAN (SODAR), OR", "BOARDMAN, OR", "BODEGA BAY CA", "CAPE CANAVERAL (50 MHZ) FL", "CAPE CANAVERAL (FALSECAPE) FL", "CAPE CANAVERAL (MERRITT) FL", "CAPE CANAVERAL (MOSQUITOLAGOON", "CAPE CANAVERAL (SOUTHCAPE) FL", "CAPE CANAVERAL (TI-CO) FL", "CARR, UT", "CHARLOTTE NC", "CHICO CA", "CLAYTON NC", "CMO AZ", "COLFAX CA", "CONCORD, CA", "CONDON (SODAR), OR", "CONDON, OR", "DECKER RANCH AIRSTRIP (SODAR), OR", "EGBERT, QC", "EGBERT ON", "EL PASO TX", "FAIRBANKS, OR", "FORKS WA", "FRIES PARK, UT", "GANANOQUE, QC", "GLACIAL RIDGE MN", "GOLDENDALE, WA (SODAR)", "GRASS VALLEY, OR", "GRIZZLY ISLAND", "HARROW", "HORIZONTAL GRID UT", "HORN POINT LAB", "HOUSTON COASTAL CENTER TX", "IRVINE CA", "JOHN DAY (SODAR), OR", "JOHNS ISLAND, SC", "LAKELAND, WI", "LAMONT OK ARM", "LAPORTE TX", "LEWES, DE", "LEXINGTON. OR", "LIVERMORE CA", "LOCUST GROVE, OR", "LONGMONT CO", "LOS ANGELES, CA", "LUBBOCK, TX (SODAR)", "LUBBOCK TX (REESE CENTER)", "LUNENBURG NS", "MARION,NC", "MARKSTAY", "MCGILL, QC", "MCKINLEYVILLE", "MEDICINE LODGE KS", "MEEKER, OK", "MIRAMAR CA", "MONTEREY CA", "MONTREAL QU", "MORENO VALLEY CA", "MORO, OR", "MOSS POINT MS", "NEGROCREEK, QC", "NEW BERN NC", "NEW BRUNSWICK, NJ", "NORTH BEND, OR", "OLD FORT,NC", "OLD HICKORY TN", "OLEX, OR", "ONTARIO CA", "OROVILLE", "PINEY RUN, MD", "PLATTEVILLE (449)", "PLYMOUTH, WA", "POINT LOMA CA", "POINT MUGU, CA", "POINT SUR CA", "PRENTICE, WI", "PRINEVILLE (SODAR), OR", "PRINEVILLE, OR", "RESEARCH TRIANGLE PARK, NC", "ROUND TOP,TX", "RUFUS, OR", "SACRAMENTO CA", "SANTA BARBARA", "SEATTLE WA", "SHELL ROCK ROAD, OR", "SIMI VALLEY UPPER AIR ATMOSPHERIC PROFILER", "SL-TEST, UT", "STOW MA", "SYDNEY FL", "TOWER GRID UT", "TRACY CA", "TROUTDALE, WA", "TUCSON AZ", "TWITCHELL ISLAND", "VISALIA CA", "WALLA WALLA, WA (SODAR)", "WALSINGHAM", "WASCO (SODAR), OR", "WASCO, OR", "WESTPORT WA", "WHARTON TX", "WHITEMAN AIRPORT PACOIMA CA", "WILBERFORCE, QC", "WILMINGTON DE", "YAKIMA, WA (SODAR)", "YUMA AZ" );
	conusMapAryLon = new Array( "-81.57", "-97.50", "-123.88", "-75.9", "-96.54", "-94.10", "-92.379900", "-76.8785", "-119.811766", "-119.811766", "-123.07", "-80.70", "-80.60", "-80.70", "-80.70", "-80.60", "-80.80", "-112.88778683", "-80.93", "-121.91", "-78.46", "-110.30", "-120.94", "-122.06", "-120.1705", "-120.166450", "-120.659415", "-79.78", "-79.79", "-106.50", "-121.06780", "-124.40", "-112.775993", "-76.247", "-96.26", "-120.8486", "-120.744273", "-121.90", "-82.892", "-113.17", "-76.14", "-95.04", "-117.73", "-120.70", "-80.01", "-89.73", "-97.5", "-95.06", "-75.085278", "-119.49100", "-121.90", "-120.74730", "-105.12", "-118.44", "-102.0496", "-102.00", "-63.60", "-81.9609", "-80.54", "-73.94", "-124.11", "-98.93", "-96.90", "-117.10", "-121.76", "-73.57", "-117.22", "-120.78070", "-88.53", "-80.859", "-77.05", "-74.43", "-124.240000", "-82.161", "-86.56", "-120.15550", "-117.58", "-121.629200", "-79.0121", "-104.73", "-119.40590", "-117.25", "-119.10", "-121.89", "-90.28", "-120.900835", "-120.90", "-78.87", "-96.746", "-120.67987", "-121.42", "-119.85", "-122.26", "-121.32397", "-118.7975", "-113.4505005", "-71.30", "-82.23", "-113.17", "-121.44", "-122.39", "-111.34", "-121.650200", "-119.39", "-118.2617", "-80.572", "-120.67", "-120.67", "-124.11", "-96.15", "-118.41", "-78.21", "-75.52", "-120.5510", "-114.50" );
	conusMapAryLat = new Array( "49.88", "36.60", "46.16", "46.45", "37.63", "30.10", "35.427100", "39.0554", "45.816185", "45.816185", "38.32", "28.63", "28.60", "28.60", "28.70", "28.40", "28.50", "40.1808661667", "35.21", "39.69", "35.59", "31.60", "39.08", "37.99", "45.246239", "45.244780", "45.170202", "44.23", "44.23", "31.77", "45.63102", "47.97", "40.214569167", "44.408", "47.72", "45.8061", "45.372959", "38.10", "42.037", "40.20", "38.59", "29.39", "33.69", "45.72", "32.70", "45.92", "36.6", "29.67", "38.770278", "45.50483", "37.70", "45.57451", "40.16", "33.94", "33.61006", "33.50", "44.60", "35.6547", "46.54", "45.41", "40.97", "37.28", "35.50", "32.90", "36.69", "45.50", "33.87", "45.51586", "30.47", "44.362", "35.08", "40.46", "43.420000", "35.643", "36.25", "45.55357", "34.06", "39.511930", "39.7057", "40.18", "45.93761", "32.70", "34.10", "36.30", "45.54", "44.285791", "44.29", "35.88", "29.963", "45.63742", "38.30", "34.43", "47.69", "45.37397", "34.29111", "40.1350785", "42.50", "27.97", "40.20", "37.68", "45.55", "32.51", "38.096890", "36.31", "46.0949", "42.638", "45.59", "45.59", "46.91", "29.26", "34.26", "45.06", "39.73", "46.5725", "32.80" );
	conusMapAryElev = new Array( "207", "310", "3", "217", "478", "5", "232", "53", "112", "112", "12", "1", "3", "3", "5", "3", "5", "1319.5", "220", "41", "76", "1444", "644", "14", "887", "891", "795", "251", "252", "1160", "166", "92", "1468.9", "120", "349", "503", "697.1", "0", "191", "1299", "4", "5", "122", "67.2", "16", "497", "310", "8", "7", "706", "108", "456", "1517", "47", "1017", "1018", "34", "384", "248", "29", "56", "585", "275", "126", "51", "92", "452", "731", "9", "315", "3", "10", "5", "434", "178", "356", "280", "56", "763", "1503", "116", "23", "2", "10", "481", "959", "969", "164", "137", "432", "6", "4", "11", "827", "279", "1291.4", "91", "27", "1299", "61", "12", "578", "0", "81", "381", "200", "462", "462", "5", "52", "300", "385", "28", "329", "97" );
	conusMapAryType = new Array( "3", "1", "1", "3", "1", "1", "1", "1", "4", "1", "1", "3", "1", "1", "1", "1", "1", "2", "1", "1", "1", "1", "1", "1", "4", "1", "4", "3", "1", "1", "4", "1", "2", "3", "1", "4", "4", "1", "3", "2", "1", "1", "1", "4", "1", "1", "1", "1", "1", "4", "1", "4", "1", "1", "4", "1", "1", "1", "3", "3", "1", "1", "1", "1", "1", "1", "1", "4", "1", "3", "1", "1", "1", "1", "1", "4", "1", "1", "1", "1", "4", "1", "1", "1", "1", "4", "1", "1", "1", "4", "1", "1", "1", "4", "1", "2", "1", "1", "2", "1", "1", "1", "1", "1", "4", "3", "4", "1", "1", "1", "1", "3", "1", "4", "1" );
	conusMapAryState = new Array( "OPER", "OPER", "OPER", "OPER", "OPER", "OPER", "OPER", "OPER", "OPER", "OPER", "OPER", "OPER", "OPER", "OPER", "OPER", "OPER", "OPER", "OPER", "OPER", "OPER", "OPER", "OPER", "OPER", "OPER", "OPER", "OPER", "OPER", "OPER", "OPER", "OPER", "OPER", "OPER", "OPER", "OPER", "OPER", "OPER", "OPER", "OPER", "OPER", "OPER", "OPER", "OPER", "OPER", "OPER", "OPER", "OPER", "OPER", "OPER", "OPER", "OPER", "OPER", "OPER", "OPER", "OPER", "OPER", "OPER", "OPER", "OPER", "OPER", "OPER", "OPER", "OPER", "OPER", "OPER", "OPER", "OPER", "OPER", "OPER", "OPER", "OPER", "OPER", "OPER", "OPER", "OPER", "OPER", "OPER", "OPER", "OPER", "OPER", "OPER", "OPER", "OPER", "OPER", "OPER", "OPER", "OPER", "OPER", "OPER", "OPER", "OPER", "OPER", "OPER", "OPER", "OPER", "OPER", "OPER", "OPER", "OPER", "OPER", "OPER", "OPER", "OPER", "OPER", "OPER", "OPER", "OPER", "OPER", "OPER", "OPER", "OPER", "OPER", "OPER", "OPER", "OPER", "OPER" );
	conusMapArySrcOrg = new Array( "OQNET", "ARM", "PSD", "OQNET", "ANL/ARM", "TNRCC", "PSD", "MDE", "ARL", "ARL", "PSD", "KSC-CCAFS", "KSC-CCAFS", "KSC-CCAFS", "KSC-CCAFS", "KSC-CCAFS", "KSC-CCAFS", "DGP", "NCDE-DENR", "PSD", "PSD", "EPG", "PSD", "PSD", "NREL", "PSD", "NREL", "OQNET", "EC-CARE", "TNRCC", "VAISALA", "PSD", "DGP", "OQNET", "UND", "ANL", "PNNL", "CARB", "OQNET", "DPG", "MDE", "MMS", "SCQ", "ND", "PSD", "PSD", "ARM", "TNRCC", "DNREC", "VAISALA", "BAAQMD", "VAISALA", "DETECT", "SCQ", "NCSU", "TTU", "EC", "PSD", "OQNET", "OQNET", "PSL", "ARM", "ARM", "SDAPCD", "NPS-DM", "MCGILL", "SCQ", "VAISALA", "PSD", "OQNET", "PSD", "RU/NJDEP", "PSD", "PSD", "PSD", "VAISALA", "SCQ", "PSD", "MDE", "PSD", "VAISALA", "SDAPCD", "NPS-NAVAIR", "PSD", "PSD", "ARL", "PSD", "EPA", "PSD", "VAISALA", "SMAQMD", "PSD", "UW/NWS", "VAISALA", "VCAPCD", "DGP", "MDOEPAAB", "PSD", "DPG", "SJV-APCD", "PSD", "PSD", "PSD", "SJV-APCD", "ANL", "OQNET", "ARL", "PSD", "PSD", "PSD", "SCQ", "OQNET", "DNREC", "ANL", "YPG" );
	conusMapAryLatestWind = new Array( "2017-Aug-31 00:00", "2006-Apr-27 14:00", "2026-Oct-31 05:00", "2017-Feb-20 08:00", "2006-Apr-27 14:00", "2015-Feb-06 15:00", "2015-Nov-09 20:00", "2026-Oct-14 10:00", "2017-Mar-06 15:30", "2017-Feb-21 23:00", "2026-Oct-31 11:00", "2013-Mar-20 20:00", "2013-Mar-22 06:30", "2013-Mar-22 11:45", "2013-Feb-04 14:30", "2013-Mar-22 11:45", "2013-Mar-22 11:45", "2023-Oct-24 14:00", "2017-Nov-15 15:00", "2018-Jun-05 16:00", "2020-Apr-21 12:00", "2006-Nov-29 20:00", "2015-Jun-24 23:00", "2011-Mar-22 20:00", "2017-Mar-06 15:15", "2017-Feb-21 23:00", "2017-Apr-07 16:30", "2016-Oct-08 15:00", "2014-Jul-18 17:30", "2019-Jul-30 23:00", "2017-Aug-17 22:10", "2026-Oct-31 11:00", "2026-Oct-31 03:00", "2016-Feb-05 02:00", "2015-Mar-03 06:00", "2017-Mar-06 15:15", "2017-Mar-06 15:00", "2005-Dec-31 21:00", "2020-Jul-24 21:00", "2026-Oct-31 11:00", "2026-Oct-31 11:00", "2018-Aug-07 22:30", "2016-Apr-28 19:00", "2017-Jan-27 20:45", "2015-Nov-05 17:00", "2019-Oct-29 17:00", "2011-Feb-24 22:00", "2024-Aug-01 17:00", "2018-May-14 17:00", "2017-Aug-17 16:20", "2011-Mar-11 22:00", "2017-Aug-22 17:00", "2015-Sep-14 22:55", "2020-Jan-02 22:00", "2012-Sep-22 12:30", "2016-Mar-07 15:30", "2015-Nov-15 10:00", "2014-Oct-27 15:00", "2020-Sep-22 01:00", "2014-Aug-23 14:00", "2026-Mar-30 15:00", "2005-Nov-16 18:00", "2007-Jul-14 09:00", "2014-Apr-04 18:00", "2025-Aug-21 13:00", "2010-May-28 19:00", "2014-Oct-28 13:00", "2017-Dec-15 22:20", "2015-Nov-08 13:00", "2017-Feb-21 19:00", "2015-Nov-04 13:00", "2025-May-10 02:00", "2026-Oct-31 11:00", "2014-Oct-29 16:00", "2013-Aug-06 13:00", "2017-Dec-15 22:50", "2014-Jul-25 06:00", "2026-Oct-31 11:00", "2026-Oct-31 11:00", "2024-Oct-23 17:00", "2017-Dec-15 22:20", "2010-Apr-14 19:00", "2018-Oct-04 21:00", "2025-Aug-21 13:00", "2019-Oct-30 14:00", "2017-Mar-06 15:30", "2017-Feb-21 23:00", "2018-Jan-03 06:00", "2013-Oct-23 17:00", "2017-Dec-15 22:40", "2016-Jun-09 17:00", "2026-Oct-31 11:00", "2019-Apr-16 19:00", "2017-Dec-15 22:10", "2023-May-09 11:00", "2020-Jul-23 22:00", "2011-Sep-07 07:00", "2015-Nov-07 12:00", "2026-Oct-31 03:00", "2017-Aug-30 19:00", "2019-Aug-14 18:00", "2011-Jan-31 20:00", "2026-Oct-31 07:00", "2020-Sep-22 00:00", "2017-Mar-06 15:15", "2017-Feb-21 23:00", "2017-Mar-06 15:30", "2017-Feb-21 21:00", "2013-Nov-13 16:00", "2013-Oct-23 12:00", "2013-Feb-12 18:00", "2020-Sep-18 14:00", "2011-Sep-20 12:30", "2017-May-15 04:15", "2003-Nov-19 13:30" );
	conusMapAryLatestRass = new Array( "Unavailable", "2006-May-04 03:05", "2026-Oct-31 07:00", "Unavailable", "2006-May-04 03:05", "Unavailable", "2015-Nov-09 20:00", "2026-Jun-12 21:00", "Unavailable", "2016-Dec-31 00:00", "2026-Oct-31 11:00", "Unavailable", "Unavailable", "Unavailable", "Unavailable", "Unavailable", "Unavailable", "2020-Jul-23 07:40", "2017-Nov-15 16:00", "2018-Jun-05 16:00", "2016-Mar-21 10:00", "Unavailable", "Unavailable", "Unavailable", "Unavailable", "2017-Feb-21 23:00", "Unavailable", "Unavailable", "Unavailable", "Unavailable", "Unavailable", "2026-Oct-31 06:00", "2020-Mar-09 17:50", "Unavailable", "Unavailable", "Unavailable", "Unavailable", "2005-Dec-31 21:00", "Unavailable", "2020-Jun-15 10:35", "2026-Oct-31 05:00", "2018-Aug-07 22:30", "2016-Apr-28 19:00", "Unavailable", "Unavailable", "2019-Oct-29 17:00", "2011-Feb-24 21:05", "Unavailable", "2018-May-14 17:00", "Unavailable", "2011-Mar-22 13:00", "Unavailable", "Unavailable", "2020-Jan-06 03:00", "Unavailable", "2016-Mar-07 15:00", "2015-Nov-15 10:00", "Unavailable", "Unavailable", "Unavailable", "2026-Mar-30 14:00", "2005-Nov-16 16:05", "2007-Jul-14 08:05", "2014-Apr-04 18:00", "2025-Aug-19 18:00", "2010-May-28 19:00", "2014-Oct-28 13:00", "Unavailable", "Unavailable", "Unavailable", "Unavailable", "2025-May-09 17:00", "2026-Oct-31 11:00", "Unavailable", "Unavailable", "Unavailable", "2014-Jul-25 06:00", "2026-Oct-31 07:00", "2026-Jul-27 18:00", "2024-Oct-23 11:00", "Unavailable", "2010-Apr-14 18:55", "2018-Oct-04 20:00", "2025-Aug-21 13:00", "2019-Oct-30 10:00", "Unavailable", "2017-Feb-21 23:00", "2018-Jan-03 06:00", "Unavailable", "Unavailable", "2016-Jun-08 18:00", "2026-Oct-31 11:00", "2019-Apr-16 19:00", "Unavailable", "2023-May-09 09:00", "2020-Jul-18 08:10", "2011-Sep-07 07:00", "2002-May-31 17:00", "2020-Jul-23 03:40", "2017-Sep-11 22:30", "2019-Aug-14 18:00", "Unavailable", "Unavailable", "2009-Nov-05 16:00", "Unavailable", "Unavailable", "Unavailable", "2017-Feb-21 23:00", "2002-Mar-27 17:00", "Unavailable", "2013-Feb-12 16:00", "Unavailable", "2011-Sep-20 14:00", "Unavailable", "2003-Nov-19 13:30" );

	juneauMapArySiteName = new Array( "LMCAK", "DGNAK", "DGSAK" );
	juneauMapAryLngName = new Array( "JUNEAU (LEMON CREEK) AK", "JUNEAU (NORTH DOUGLAS) AK", "JUNEAU (SOUTH DOUGLAS) AK" );
	juneauMapAryLon = new Array( "-134.51", "-134.56", "-134.39" );
	juneauMapAryLat = new Array( "58.36", "58.34", "58.28" );
	juneauMapAryElev = new Array( "5", "45", "4" );
	juneauMapAryType = new Array( "1", "1", "1" );
	juneauMapAryState = new Array( "OPER", "OPER", "OPER" );
	juneauMapArySrcOrg = new Array( "NCAR/FAA", "NCAR/FAA", "NCAR/FAA" );
	juneauMapAryLatestWind = new Array( "2016-Jul-06 19:40", "2016-Jul-06 19:40", "2016-Jul-06 19:40" );
	juneauMapAryLatestRass = new Array( "Unavailable", "Unavailable", "Unavailable" );

	japanMapArySiteName = new Array( "616JP", "755JP", "805JP", "HK1CN", "848JP", "678JP", "800JP", "674JP", "640JP", "893JP", "626JP", "819JP", "795JP", "945JP", "629JP", "585JP", "423JP", "636JP", "909JP", "822JP", "417JP", "815JP", "663JP", "406JP", "587JP", "898JP", "656JP", "612JP", "891JP", "746JP", "836JP", "912JP" );
	japanMapAryLngName = new Array( "FUKUI JP", "HAMADA JP", "HIRADO JP", "HONG KONG CHINA", "ICHIKI (KAGOSHIMA) JP", "ICHIKI JP", "IZUHARA JP", "KATSUURA JP", "KAWAGUCHIKO JP", "KOHCHI JP", "KUMAGAYA JP", "KUMAMOTO JP", "MIHAMA (WAKAYAMA) JP", "MINAMIDAITO JP", "MITO JP", "MIYAKO JP", "MURORAN JP", "NAGOYA JP", "NAZE JP", "NOBEOKA JP", "OBIHIRO JP", "OHITA JP", "OWASE JP", "RUMOI JP", "SAKATA JP", "SHIMIZU JP", "SHIZUOKA JP", "TAKADA JP", "TAKAMATSU JP", "TOTTORI JP", "YAKUSHIMA JP", "YONAGUNI JP" );
	japanMapAryLon = new Array( "136.23", "132.07", "129.55", "114.17", "130.32", "139.78", "129.23", "140.32", "138.76", "133.55", "139.38", "130.71", "135.13", "131.23", "140.47", "141.97", "140.97", "136.97", "129.50", "131.66", "143.22", "131.62", "136.2", "141.64", "139.85", "133.01", "138.41", "138.25", "134.06", "134.20", "130.66", "123.01" );
	japanMapAryLat = new Array( "36.05", "34.89", "33.36", "22.33", "31.71", "33.12", "34.15", "35.15", "35.5", "33.57", "36.15", "32.81", "33.90", "25.83", "36.38", "39.65", "42.32", "35.17", "28.38", "32.58", "42.92", "33.23", "34.07", "43.94", "38.91", "32.72", "34.97", "37.1", "34.31", "35.53", "30.38", "24.46" );
	japanMapAryElev = new Array( "9", "20", "58", "26", "25", "152", "130", "12", "860", "3", "30", "38", "3", "16", "29", "43", "3", "51", "3", "19", "38", "5", "15", "23", "3", "31", "14", "13", "9", "6", "36", "30" );
	japanMapAryType = new Array( "1", "1", "1", "1", "1", "1", "1", "1", "1", "1", "1", "1", "1", "1", "1", "1", "1", "1", "1", "1", "1", "1", "1", "1", "1", "1", "1", "1", "1", "1", "1", "1" );
	japanMapAryState = new Array( "OPER", "OPER", "OPER", "OPER", "OPER", "OPER", "OPER", "OPER", "OPER", "OPER", "OPER", "OPER", "OPER", "OPER", "OPER", "OPER", "OPER", "OPER", "OPER", "OPER", "OPER", "OPER", "OPER", "OPER", "OPER", "OPER", "OPER", "OPER", "OPER", "OPER", "OPER", "OPER" );
	japanMapArySrcOrg = new Array( "JMA", "JMA", "JMA", "HKOBS", "JMA", "JMA", "JMA", "JMA", "JMA", "JMA", "JMA", "JMA", "JMA", "JMA", "JMA", "JMA", "JMA", "JMA", "JMA", "JMA", "JMA", "JMA", "JMA", "JMA", "JMA", "JMA", "JMA", "JMA", "JMA", "JMA", "JMA", "JMA" );
	japanMapAryLatestWind = new Array( "2016-Aug-23 13:00", "2016-Aug-23 13:00", "2016-Aug-23 13:00", "2016-Aug-23 14:00", "2016-Aug-23 13:00", "2016-Aug-23 13:00", "2016-Aug-23 13:00", "2016-Aug-23 13:00", "2016-Aug-23 13:00", "2016-Aug-23 13:00", "2016-Aug-23 13:00", "2016-Aug-23 13:00", "2016-Aug-23 13:00", "2016-Aug-23 13:00", "2016-Aug-23 13:00", "2016-Aug-23 13:00", "2016-Aug-23 11:00", "2016-Aug-23 13:00", "2016-Aug-23 13:00", "2016-Aug-23 13:00", "2016-Aug-23 13:00", "2016-Aug-23 13:00", "2016-Aug-23 13:00", "2016-Aug-23 13:00", "2016-Aug-23 10:00", "2016-Aug-23 13:00", "2016-Aug-23 13:00", "2016-Aug-23 13:00", "2016-Aug-23 13:00", "2016-Aug-23 13:00", "2016-Aug-23 13:00", "2016-Aug-23 13:00" );
	japanMapAryLatestRass = new Array( "Unavailable", "Unavailable", "Unavailable", "Unavailable", "Unavailable", "Unavailable", "Unavailable", "Unavailable", "Unavailable", "Unavailable", "Unavailable", "Unavailable", "Unavailable", "Unavailable", "Unavailable", "Unavailable", "Unavailable", "Unavailable", "Unavailable", "Unavailable", "Unavailable", "Unavailable", "Unavailable", "Unavailable", "Unavailable", "Unavailable", "Unavailable", "Unavailable", "Unavailable", "Unavailable", "Unavailable", "Unavailable" );

	spacMapArySiteName = new Array( "ABTQC", "ARMOK", "ASTOR", "AMDQC", "BMTKS", "BPATX", "BBHAR", "BLTMD", "BO2OR", "BOROR", "BBYCA", "KSCFL", "FCPFL", "MIDFL", "MLNFL", "SCPFL", "RCOFL", "CFDUT", "CHANC", "CCOCA", "CTNNC", "FHHAZ", "CFCCA", "CCRCA", "CD2OR", "CDNOR", "DR2OR", "EGBQC", "CARON", "EPSTX", "191OR", "FKSWA", "FPDUT", "616JP", "GNQQC", "GLAMN", "GDLWA", "GV2OR", "GRICA", "755JP", "HRWQC", "HRDHI", "805JP", "HK1CN", "HGDUT", "HPLMD", "HSNTX", "848JP", "678JP", "IRVCA", "800JP", "JD2OR", "JZISC", "LMCAK", "DGNAK", "DGSAK", "KHWHI", "KATHI", "674JP", "640JP", "893JP", "626JP", "819JP", "ARVWI", "LMNOK", "LPTTX", "LWSDE", "197OR", "LVRCA", "200OR", "LNMCO", "LAXCA", "RESTX", "LBKTX", "DALNS", "MRONC", "MSYQC", "MCGQC", "ACVCA", "MDCKS", "MKROK", "795JP", "945JP", "MMRCA", "629JP", "585JP", "NPSCA", "MCGQU", "MOVCA", "352OR", "PQLMS", "423JP", "NAAHI", "636JP", "909JP", "NCKQC", "EWNNC", "RUTNJ", "822JP", "OTHOR", "417JP", "815JP", "OFTNC", "OHKTN", "446OR", "ONTCA", "OVECA", "663JP", "PNRMD", "PRAPE", "PVLCO", "265WA", "PTLCA", "PTMCA", "PTSCA", "PRWWI", "PV2OR", "PVEOR", "PUUHI", "RTPNC", "RTPTX", "204OR", "406JP", "SACCA", "587JP", "SBACA", "SEAWA", "360OR", "898JP", "656JP", "SUACA", "SLDUT", "SPTHI", "STWMA", "SNYFL", "612JP", "891JP", "746JP", "DGWUT", "TCYCA", "TDEOR", "PAPAZ", "TBWHI", "TCICA", "VISCA", "WAEHI", "WWLWA", "WLMQC", "WC2OR", "WCOOR", "WPTWA", "WTNTX", "WHPCA", "WFCQC", "WILDE", "YKMWA", "836JP", "912JP", "YUMAZ" );
	spacMapAryLngName = new Array( "ABITIBI, QC", "ARM SGP OK", "ASTORIA OR", "AUMOND, QC", "BEAUMONT KS", "BEAUMONT PORT ARTHUR, TX", "BEE BRANCH, AR", "BELTSVILLE MD", "BOARDMAN (SODAR), OR", "BOARDMAN, OR", "BODEGA BAY CA", "CAPE CANAVERAL (50 MHZ) FL", "CAPE CANAVERAL (FALSECAPE) FL", "CAPE CANAVERAL (MERRITT) FL", "CAPE CANAVERAL (MOSQUITOLAGOON", "CAPE CANAVERAL (SOUTHCAPE) FL", "CAPE CANAVERAL (TI-CO) FL", "CARR, UT", "CHARLOTTE NC", "CHICO CA", "CLAYTON NC", "CMO AZ", "COLFAX CA", "CONCORD, CA", "CONDON (SODAR), OR", "CONDON, OR", "DECKER RANCH AIRSTRIP (SODAR), OR", "EGBERT, QC", "EGBERT ON", "EL PASO TX", "FAIRBANKS, OR", "FORKS WA", "FRIES PARK, UT", "FUKUI JP", "GANANOQUE, QC", "GLACIAL RIDGE MN", "GOLDENDALE, WA (SODAR)", "GRASS VALLEY, OR", "GRIZZLY ISLAND", "HAMADA JP", "HARROW", "HAWI  BIG ISLAND, HI", "HIRADO JP", "HONG KONG CHINA", "HORIZONTAL GRID UT", "HORN POINT LAB", "HOUSTON COASTAL CENTER TX", "ICHIKI (KAGOSHIMA) JP", "ICHIKI JP", "IRVINE CA", "IZUHARA JP", "JOHN DAY (SODAR), OR", "JOHNS ISLAND, SC", "JUNEAU (LEMON CREEK) AK", "JUNEAU (NORTH DOUGLAS) AK", "JUNEAU (SOUTH DOUGLAS) AK", "KAHEAWA (SODAR), HI", "KANEOHE, OAHU, HI", "KATSUURA JP", "KAWAGUCHIKO JP", "KOHCHI JP", "KUMAGAYA JP", "KUMAMOTO JP", "LAKELAND, WI", "LAMONT OK ARM", "LAPORTE TX", "LEWES, DE", "LEXINGTON. OR", "LIVERMORE CA", "LOCUST GROVE, OR", "LONGMONT CO", "LOS ANGELES, CA", "LUBBOCK, TX (SODAR)", "LUBBOCK TX (REESE CENTER)", "LUNENBURG NS", "MARION,NC", "MARKSTAY", "MCGILL, QC", "MCKINLEYVILLE", "MEDICINE LODGE KS", "MEEKER, OK", "MIHAMA (WAKAYAMA) JP", "MINAMIDAITO JP", "MIRAMAR CA", "MITO JP", "MIYAKO JP", "MONTEREY CA", "MONTREAL QU", "MORENO VALLEY CA", "MORO, OR", "MOSS POINT MS", "MURORAN JP", "NAALEHU (SODAR), HI", "NAGOYA JP", "NAZE JP", "NEGROCREEK, QC", "NEW BERN NC", "NEW BRUNSWICK, NJ", "NOBEOKA JP", "NORTH BEND, OR", "OBIHIRO JP", "OHITA JP", "OLD FORT,NC", "OLD HICKORY TN", "OLEX, OR", "ONTARIO CA", "OROVILLE", "OWASE JP", "PINEY RUN, MD", "PIURA (2) PERU", "PLATTEVILLE (449)", "PLYMOUTH, WA", "POINT LOMA CA", "POINT MUGU, CA", "POINT SUR CA", "PRENTICE, WI", "PRINEVILLE (SODAR), OR", "PRINEVILLE, OR", "PUUNENE, HI", "RESEARCH TRIANGLE PARK, NC", "ROUND TOP,TX", "RUFUS, OR", "RUMOI JP", "SACRAMENTO CA", "SAKATA JP", "SANTA BARBARA", "SEATTLE WA", "SHELL ROCK ROAD, OR", "SHIMIZU JP", "SHIZUOKA JP", "SIMI VALLEY UPPER AIR ATMOSPHERIC PROFILER", "SL-TEST, UT", "SOUTH POINT (SODAR), HI", "STOW MA", "SYDNEY FL", "TAKADA JP", "TAKAMATSU JP", "TOTTORI JP", "TOWER GRID UT", "TRACY CA", "TROUTDALE, WA", "TUCSON AZ", "TURTLE BAY, HI", "TWITCHELL ISLAND", "VISALIA CA", "WAENA (SODAR), HI", "WALLA WALLA, WA (SODAR)", "WALSINGHAM", "WASCO (SODAR), OR", "WASCO, OR", "WESTPORT WA", "WHARTON TX", "WHITEMAN AIRPORT PACOIMA CA", "WILBERFORCE, QC", "WILMINGTON DE", "YAKIMA, WA (SODAR)", "YAKUSHIMA JP", "YONAGUNI JP", "YUMA AZ" );
	spacMapAryLon = new Array( "-81.57", "-97.50", "-123.88", "-75.9", "-96.54", "-94.10", "-92.379900", "-76.8785", "-119.811766", "-119.811766", "-123.07", "-80.70", "-80.60", "-80.70", "-80.70", "-80.60", "-80.80", "-112.88778683", "-80.93", "-121.91", "-78.46", "-110.30", "-120.94", "-122.06", "-120.1705", "-120.166450", "-120.659415", "-79.78", "-79.79", "-106.50", "-121.06780", "-124.40", "-112.775993", "136.23", "-76.247", "-96.26", "-120.8486", "-120.744273", "-121.90", "132.07", "-82.892", "-155.847", "129.55", "114.17", "-113.17", "-76.14", "-95.04", "130.32", "139.78", "-117.73", "129.23", "-120.70", "-80.01", "-134.51", "-134.56", "-134.39", "-156.5389", "-157.757353", "140.32", "138.76", "133.55", "139.38", "130.71", "-89.73", "-97.5", "-95.06", "-75.085278", "-119.49100", "-121.90", "-120.74730", "-105.12", "-118.44", "-102.0496", "-102.00", "-63.60", "-81.9609", "-80.54", "-73.94", "-124.11", "-98.93", "-96.90", "135.13", "131.23", "-117.10", "140.47", "141.97", "-121.76", "-73.57", "-117.22", "-120.78070", "-88.53", "140.97", "-155.5852028", "136.97", "129.50", "-80.859", "-77.05", "-74.43", "131.66", "-124.240000", "143.22", "131.62", "-82.161", "-86.56", "-120.15550", "-117.58", "-121.629200", "136.2", "-79.0121", "-80.64", "-104.73", "-119.40590", "-117.25", "-119.10", "-121.89", "-90.28", "-120.900835", "-120.90", "-156.5058333", "-78.87", "-96.746", "-120.67987", "141.64", "-121.42", "139.85", "-119.85", "-122.26", "-121.32397", "133.01", "138.41", "-118.7975", "-113.4505005", "-155.6822111", "-71.30", "-82.23", "138.25", "134.06", "134.20", "-113.17", "-121.44", "-122.39", "-111.34", "-157.988994", "-121.650200", "-119.39", "-156.4136930", "-118.2617", "-80.572", "-120.67", "-120.67", "-124.11", "-96.15", "-118.41", "-78.21", "-75.52", "-120.5510", "130.66", "123.01", "-114.50" );
	spacMapAryLat = new Array( "49.88", "36.60", "46.16", "46.45", "37.63", "30.10", "35.427100", "39.0554", "45.816185", "45.816185", "38.32", "28.63", "28.60", "28.60", "28.70", "28.40", "28.50", "40.1808661667", "35.21", "39.69", "35.59", "31.60", "39.08", "37.99", "45.246239", "45.244780", "45.170202", "44.23", "44.23", "31.77", "45.63102", "47.97", "40.214569167", "36.05", "44.408", "47.72", "45.8061", "45.372959", "38.10", "34.89", "42.037", "20.25692", "33.36", "22.33", "40.20", "38.59", "29.39", "31.71", "33.12", "33.69", "34.15", "45.72", "32.70", "58.36", "58.34", "58.28", "20.8102667", "21.437586", "35.15", "35.5", "33.57", "36.15", "32.81", "45.92", "36.6", "29.67", "38.770278", "45.50483", "37.70", "45.57451", "40.16", "33.94", "33.61006", "33.50", "44.60", "35.6547", "46.54", "45.41", "40.97", "37.28", "35.50", "33.90", "25.83", "32.90", "36.38", "39.65", "36.69", "45.50", "33.87", "45.51586", "30.47", "42.32", "19.03743056", "35.17", "28.38", "44.362", "35.08", "40.46", "32.58", "43.420000", "42.92", "33.23", "35.643", "36.25", "45.55357", "34.06", "39.511930", "34.07", "39.7057", "-5.17", "40.18", "45.93761", "32.70", "34.10", "36.30", "45.54", "44.285791", "44.29", "20.8875", "35.88", "29.963", "45.63742", "43.94", "38.30", "38.91", "34.43", "47.69", "45.37397", "32.72", "34.97", "34.29111", "40.1350785", "18.9147222", "42.50", "27.97", "37.1", "34.31", "35.53", "40.20", "37.68", "45.55", "32.51", "21.6954083", "38.096890", "36.31", "20.848046", "46.0949", "42.638", "45.59", "45.59", "46.91", "29.26", "34.26", "45.06", "39.73", "46.5725", "30.38", "24.46", "32.80" );
	spacMapAryElev = new Array( "207", "310", "3", "217", "478", "5", "232", "53", "112", "112", "12", "1", "3", "3", "5", "3", "5", "1319.5", "220", "41", "76", "1444", "644", "14", "887", "891", "795", "251", "252", "1160", "166", "92", "1468.9", "9", "120", "349", "503", "697.1", "0", "20", "191", "105", "58", "26", "1299", "4", "5", "25", "152", "122", "130", "67.2", "16", "5", "45", "4", "670", "1", "12", "860", "3", "30", "38", "497", "310", "8", "7", "706", "108", "456", "1517", "47", "1017", "1018", "34", "384", "248", "29", "56", "585", "275", "3", "16", "126", "29", "43", "51", "92", "452", "731", "9", "3", "190", "51", "3", "315", "3", "10", "19", "5", "38", "5", "434", "178", "356", "280", "56", "15", "763", "40", "1503", "116", "23", "2", "10", "481", "959", "969", "48.5", "164", "137", "432", "23", "6", "3", "4", "11", "827", "31", "14", "279", "1291.4", "10", "91", "27", "13", "9", "6", "1299", "61", "12", "578", "7.6", "0", "81", "111", "381", "200", "462", "462", "5", "52", "300", "385", "28", "329", "36", "30", "97" );
	spacMapAryType = new Array( "3", "1", "1", "3", "1", "1", "1", "1", "4", "1", "1", "3", "1", "1", "1", "1", "1", "2", "1", "1", "1", "1", "1", "1", "4", "1", "4", "3", "1", "1", "4", "1", "2", "1", "3", "1", "4", "4", "1", "1", "3", "4", "1", "1", "2", "1", "1", "1", "1", "1", "1", "4", "1", "1", "1", "1", "4", "4", "1", "1", "1", "1", "1", "1", "1", "1", "1", "4", "1", "4", "1", "1", "4", "1", "1", "1", "3", "3", "1", "1", "1", "1", "1", "1", "1", "1", "1", "1", "1", "4", "1", "1", "4", "1", "1", "3", "1", "1", "1", "1", "1", "1", "1", "1", "4", "1", "1", "1", "1", "3", "1", "4", "1", "1", "1", "1", "4", "1", "4", "1", "1", "4", "1", "1", "1", "1", "1", "4", "1", "1", "1", "2", "4", "1", "1", "1", "1", "1", "2", "1", "1", "1", "4", "1", "1", "4", "4", "3", "4", "1", "1", "1", "1", "3", "1", "4", "1", "1", "1" );
	spacMapAryState = new Array( "OPER", "OPER", "OPER", "OPER", "OPER", "OPER", "OPER", "OPER", "OPER", "OPER", "OPER", "OPER", "OPER", "OPER", "OPER", "OPER", "OPER", "OPER", "OPER", "OPER", "OPER", "OPER", "OPER", "OPER", "OPER", "OPER", "OPER", "OPER", "OPER", "OPER", "OPER", "OPER", "OPER", "OPER", "OPER", "OPER", "OPER", "OPER", "OPER", "OPER", "OPER", "OPER", "OPER", "OPER", "OPER", "OPER", "OPER", "OPER", "OPER", "OPER", "OPER", "OPER", "OPER", "OPER", "OPER", "OPER", "OPER", "OPER", "OPER", "OPER", "OPER", "OPER", "OPER", "OPER", "OPER", "OPER", "OPER", "OPER", "OPER", "OPER", "OPER", "OPER", "OPER", "OPER", "OPER", "OPER", "OPER", "OPER", "OPER", "OPER", "OPER", "OPER", "OPER", "OPER", "OPER", "OPER", "OPER", "OPER", "OPER", "OPER", "OPER", "OPER", "OPER", "OPER", "OPER", "OPER", "OPER", "OPER", "OPER", "OPER", "OPER", "OPER", "OPER", "OPER", "OPER", "OPER", "OPER", "OPER", "OPER", "OPER", "OPER", "OPER", "OPER", "OPER", "OPER", "OPER", "OPER", "OPER", "OPER", "OPER", "OPER", "OPER", "OPER", "OPER", "OPER", "OPER", "OPER", "OPER", "OPER", "OPER", "OPER", "OPER", "OPER", "OPER", "OPER", "OPER", "OPER", "OPER", "OPER", "OPER", "OPER", "OPER", "OPER", "OPER", "OPER", "OPER", "OPER", "OPER", "OPER", "OPER", "OPER", "OPER", "OPER", "OPER", "OPER", "OPER", "OPER", "OPER", "OPER" );
	spacMapArySrcOrg = new Array( "OQNET", "ARM", "PSD", "OQNET", "ANL/ARM", "TNRCC", "PSD", "MDE", "ARL", "ARL", "PSD", "KSC-CCAFS", "KSC-CCAFS", "KSC-CCAFS", "KSC-CCAFS", "KSC-CCAFS", "KSC-CCAFS", "DGP", "NCDE-DENR", "PSD", "PSD", "EPG", "PSD", "PSD", "NREL", "PSD", "NREL", "OQNET", "EC-CARE", "TNRCC", "VAISALA", "PSD", "DGP", "JMA", "OQNET", "UND", "ANL", "PNNL", "CARB", "JMA", "OQNET", "HI-AWST", "JMA", "HKOBS", "DPG", "MDE", "MMS", "JMA", "JMA", "SCQ", "JMA", "ND", "PSD", "NCAR/FAA", "NCAR/FAA", "NCAR/FAA", "HI-AWST", "HI-AWST", "JMA", "JMA", "JMA", "JMA", "JMA", "PSD", "ARM", "TNRCC", "DNREC", "VAISALA", "BAAQMD", "VAISALA", "DETECT", "SCQ", "NCSU", "TTU", "EC", "PSD", "OQNET", "OQNET", "PSL", "ARM", "ARM", "JMA", "JMA", "SDAPCD", "JMA", "JMA", "NPS-DM", "MCGILL", "SCQ", "VAISALA", "PSD", "JMA", "HI-AWST", "JMA", "JMA", "OQNET", "PSD", "RU/NJDEP", "JMA", "PSD", "JMA", "JMA", "PSD", "PSD", "VAISALA", "SCQ", "PSD", "JMA", "MDE", "UDEP", "PSD", "VAISALA", "SDAPCD", "NPS-NAVAIR", "PSD", "PSD", "ARL", "PSD", "HI-AWST", "EPA", "PSD", "VAISALA", "JMA", "SMAQMD", "JMA", "PSD", "UW/NWS", "VAISALA", "JMA", "JMA", "VCAPCD", "DGP", "HI-AWST", "MDOEPAAB", "PSD", "JMA", "JMA", "JMA", "DPG", "SJV-APCD", "PSD", "PSD", "HI-AWST", "PSD", "SJV-APCD", "HI-AWST", "ANL", "OQNET", "ARL", "PSD", "PSD", "PSD", "SCQ", "OQNET", "DNREC", "ANL", "JMA", "JMA", "YPG" );
	spacMapAryLatestWind = new Array( "2017-Aug-31 00:00", "2006-Apr-27 14:00", "2026-Oct-31 05:00", "2017-Feb-20 08:00", "2006-Apr-27 14:00", "2015-Feb-06 15:00", "2015-Nov-09 20:00", "2026-Oct-14 10:00", "2017-Mar-06 15:30", "2017-Feb-21 23:00", "2026-Oct-31 11:00", "2013-Mar-20 20:00", "2013-Mar-22 06:30", "2013-Mar-22 11:45", "2013-Feb-04 14:30", "2013-Mar-22 11:45", "2013-Mar-22 11:45", "2023-Oct-24 14:00", "2017-Nov-15 15:00", "2018-Jun-05 16:00", "2020-Apr-21 12:00", "2006-Nov-29 20:00", "2015-Jun-24 23:00", "2011-Mar-22 20:00", "2017-Mar-06 15:15", "2017-Feb-21 23:00", "2017-Apr-07 16:30", "2016-Oct-08 15:00", "2014-Jul-18 17:30", "2019-Jul-30 23:00", "2017-Aug-17 22:10", "2026-Oct-31 11:00", "2026-Oct-31 03:00", "2016-Aug-23 13:00", "2016-Feb-05 02:00", "2015-Mar-03 06:00", "2017-Mar-06 15:15", "2017-Mar-06 15:00", "2005-Dec-31 21:00", "2016-Aug-23 13:00", "2020-Jul-24 21:00", "2020-Jan-01 00:00", "2016-Aug-23 13:00", "2016-Aug-23 14:00", "2026-Oct-31 11:00", "2026-Oct-31 11:00", "2018-Aug-07 22:30", "2016-Aug-23 13:00", "2016-Aug-23 13:00", "2016-Apr-28 19:00", "2016-Aug-23 13:00", "2017-Jan-27 20:45", "2015-Nov-05 17:00", "2016-Jul-06 19:40", "2016-Jul-06 19:40", "2016-Jul-06 19:40", "2016-Mar-24 18:50", "2020-Jan-01 00:00", "2016-Aug-23 13:00", "2016-Aug-23 13:00", "2016-Aug-23 13:00", "2016-Aug-23 13:00", "2016-Aug-23 13:00", "2019-Oct-29 17:00", "2011-Feb-24 22:00", "2024-Aug-01 17:00", "2018-May-14 17:00", "2017-Aug-17 16:20", "2011-Mar-11 22:00", "2017-Aug-22 17:00", "2015-Sep-14 22:55", "2020-Jan-02 22:00", "2012-Sep-22 12:30", "2016-Mar-07 15:30", "2015-Nov-15 10:00", "2014-Oct-27 15:00", "2020-Sep-22 01:00", "2014-Aug-23 14:00", "2026-Mar-30 15:00", "2005-Nov-16 18:00", "2007-Jul-14 09:00", "2016-Aug-23 13:00", "2016-Aug-23 13:00", "2014-Apr-04 18:00", "2016-Aug-23 13:00", "2016-Aug-23 13:00", "2025-Aug-21 13:00", "2010-May-28 19:00", "2014-Oct-28 13:00", "2017-Dec-15 22:20", "2015-Nov-08 13:00", "2016-Aug-23 11:00", "2017-Dec-07 22:30", "2016-Aug-23 13:00", "2016-Aug-23 13:00", "2017-Feb-21 19:00", "2015-Nov-04 13:00", "2025-May-10 02:00", "2016-Aug-23 13:00", "2026-Oct-31 11:00", "2016-Aug-23 13:00", "2016-Aug-23 13:00", "2014-Oct-29 16:00", "2013-Aug-06 13:00", "2017-Dec-15 22:50", "2014-Jul-25 06:00", "2026-Oct-31 11:00", "2016-Aug-23 13:00", "2026-Oct-31 11:00", "2007-Jan-27 08:00", "2024-Oct-23 17:00", "2017-Dec-15 22:20", "2010-Apr-14 19:00", "2018-Oct-04 21:00", "2025-Aug-21 13:00", "2019-Oct-30 14:00", "2017-Mar-06 15:30", "2017-Feb-21 23:00", "2017-Jun-21 18:30", "2018-Jan-03 06:00", "2013-Oct-23 17:00", "2017-Dec-15 22:40", "2016-Aug-23 13:00", "2016-Jun-09 17:00", "2016-Aug-23 10:00", "2026-Oct-31 11:00", "2019-Apr-16 19:00", "2017-Dec-15 22:10", "2016-Aug-23 13:00", "2016-Aug-23 13:00", "2023-May-09 11:00", "2020-Jul-23 22:00", "2019-Dec-31 19:30", "2011-Sep-07 07:00", "2015-Nov-07 12:00", "2016-Aug-23 13:00", "2016-Aug-23 13:00", "2016-Aug-23 13:00", "2026-Oct-31 03:00", "2017-Aug-30 19:00", "2019-Aug-14 18:00", "2011-Jan-31 20:00", "2019-Sep-19 18:30", "2026-Oct-31 07:00", "2020-Sep-22 00:00", "2019-Feb-16 07:00", "2017-Mar-06 15:15", "2017-Feb-21 23:00", "2017-Mar-06 15:30", "2017-Feb-21 21:00", "2013-Nov-13 16:00", "2013-Oct-23 12:00", "2013-Feb-12 18:00", "2020-Sep-18 14:00", "2011-Sep-20 12:30", "2017-May-15 04:15", "2016-Aug-23 13:00", "2016-Aug-23 13:00", "2003-Nov-19 13:30" );
	spacMapAryLatestRass = new Array( "Unavailable", "2006-May-04 03:05", "2026-Oct-31 07:00", "Unavailable", "2006-May-04 03:05", "Unavailable", "2015-Nov-09 20:00", "2026-Jun-12 21:00", "Unavailable", "2016-Dec-31 00:00", "2026-Oct-31 11:00", "Unavailable", "Unavailable", "Unavailable", "Unavailable", "Unavailable", "Unavailable", "2020-Jul-23 07:40", "2017-Nov-15 16:00", "2018-Jun-05 16:00", "2016-Mar-21 10:00", "Unavailable", "Unavailable", "Unavailable", "Unavailable", "2017-Feb-21 23:00", "Unavailable", "Unavailable", "Unavailable", "Unavailable", "Unavailable", "2026-Oct-31 06:00", "2020-Mar-09 17:50", "Unavailable", "Unavailable", "Unavailable", "Unavailable", "Unavailable", "2005-Dec-31 21:00", "Unavailable", "Unavailable", "Unavailable", "Unavailable", "Unavailable", "2020-Jun-15 10:35", "2026-Oct-31 05:00", "2018-Aug-07 22:30", "Unavailable", "Unavailable", "2016-Apr-28 19:00", "Unavailable", "Unavailable", "Unavailable", "Unavailable", "Unavailable", "Unavailable", "Unavailable", "Unavailable", "Unavailable", "Unavailable", "Unavailable", "Unavailable", "Unavailable", "2019-Oct-29 17:00", "2011-Feb-24 21:05", "Unavailable", "2018-May-14 17:00", "Unavailable", "2011-Mar-22 13:00", "Unavailable", "Unavailable", "2020-Jan-06 03:00", "Unavailable", "2016-Mar-07 15:00", "2015-Nov-15 10:00", "Unavailable", "Unavailable", "Unavailable", "2026-Mar-30 14:00", "2005-Nov-16 16:05", "2007-Jul-14 08:05", "Unavailable", "Unavailable", "2014-Apr-04 18:00", "Unavailable", "Unavailable", "2025-Aug-19 18:00", "2010-May-28 19:00", "2014-Oct-28 13:00", "Unavailable", "Unavailable", "Unavailable", "Unavailable", "Unavailable", "Unavailable", "Unavailable", "Unavailable", "2025-May-09 17:00", "Unavailable", "2026-Oct-31 11:00", "Unavailable", "Unavailable", "Unavailable", "Unavailable", "Unavailable", "2014-Jul-25 06:00", "2026-Oct-31 07:00", "Unavailable", "2026-Jul-27 18:00", "Unavailable", "2024-Oct-23 11:00", "Unavailable", "2010-Apr-14 18:55", "2018-Oct-04 20:00", "2025-Aug-21 13:00", "2019-Oct-30 10:00", "Unavailable", "2017-Feb-21 23:00", "Unavailable", "2018-Jan-03 06:00", "Unavailable", "Unavailable", "Unavailable", "2016-Jun-08 18:00", "Unavailable", "2026-Oct-31 11:00", "2019-Apr-16 19:00", "Unavailable", "Unavailable", "Unavailable", "2023-May-09 09:00", "2020-Jul-18 08:10", "Unavailable", "2011-Sep-07 07:00", "2002-May-31 17:00", "Unavailable", "Unavailable", "Unavailable", "2020-Jul-23 03:40", "2017-Sep-11 22:30", "2019-Aug-14 18:00", "Unavailable", "Unavailable", "Unavailable", "2009-Nov-05 16:00", "Unavailable", "Unavailable", "Unavailable", "Unavailable", "2017-Feb-21 23:00", "2002-Mar-27 17:00", "Unavailable", "2013-Feb-12 16:00", "Unavailable", "2011-Sep-20 14:00", "Unavailable", "Unavailable", "Unavailable", "2003-Nov-19 13:30" );

	
	function conusMap_OnMouseOver(site_id)
	{
		//alert("MouseOverEvent");
		popupWidth = 300;
		Xoffset=-300;   // modify these values to ...
		Yoffset=20;    // change the popup position.
		
		var i = site_id; var type = ""; var rassLine = "";
		if (conusMapAryType[i] == "1") type = "BLP";
		 else if (conusMapAryType[i] == "2") type = "UHF";
		 else if (conusMapAryType[i] == "3") type = "VHF";
		 else type = "Unknown";
		if (conusMapAryLatestRass[i] != "Unavailable")
			rassLine = "&nbsp;&nbsp;Latest RASS: "+conusMapAryLatestRass[i]+"<br>\n"
		var msg = 
                                 "Site Location: "+conusMapAryLngName[i]+"<br>\n"+
   "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Site ID: "+conusMapArySiteName[i]+"<br>\n"+
                  "&nbsp;&nbsp;&nbsp;Radar Type: "+type+"<br>\n"+
		                    "&nbsp;Lat/Lon/Elev: "+conusMapAryLat[i]+"/"+conusMapAryLon[i]+"/"+conusMapAryElev[i]+"m<br>\n"+
		                    "&nbsp;Latest Winds: "+conusMapAryLatestWind[i]+"<br>\n"+
		                                          rassLine+
        "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Provider: "+conusMapArySrcOrg[i]+"<br>\n";
		//alert("ImgMap Mouse Over msg="+ msg);
		popup(msg,"white",popupWidth);
	}
	function juneauMap_OnMouseOver(site_id)
	{
		//alert("MouseOverEvent");
		popupWidth = 300;
		Xoffset=-300;   // modify these values to ...
		Yoffset=20;    // change the popup position.
		
		var i = site_id; var type = ""; var rassLine = "";
		if (juneauMapAryType[i] == "1") type = "BLP";
		 else if (juneauMapAryType[i] == "2") type = "UHF";
		 else if (juneauMapAryType[i] == "3") type = "VHF";
		 else type = "Unknown";
		if (juneauMapAryLatestRass[i] != "Unavailable")
			rassLine = "&nbsp;&nbsp;Latest RASS: "+juneauMapAryLatestRass[i]+"<br>\n"
		var msg = 
                                 "Site Location: "+juneauMapAryLngName[i]+"<br>\n"+
   "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Site ID: "+juneauMapArySiteName[i]+"<br>\n"+
                  "&nbsp;&nbsp;&nbsp;Radar Type: "+type+"<br>\n"+
		                    "&nbsp;Lat/Lon/Elev: "+juneauMapAryLat[i]+"/"+juneauMapAryLon[i]+"/"+juneauMapAryElev[i]+"m<br>\n"+
		                    "&nbsp;Latest Winds: "+juneauMapAryLatestWind[i]+"<br>\n"+
		                                          rassLine+
        "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Provider: "+juneauMapArySrcOrg[i]+"<br>\n";
		//alert("ImgMap Mouse Over msg="+ msg);
		popup(msg,"white",popupWidth);
	}
	function japanMap_OnMouseOver(site_id)
	{
		//alert("MouseOverEvent");
		popupWidth = 300;
		Xoffset=-300;   // modify these values to ...
		Yoffset=20;    // change the popup position.
		
		var i = site_id; var type = ""; var rassLine = "";
		if (japanMapAryType[i] == "1") type = "BLP";
		 else if (japanMapAryType[i] == "2") type = "UHF";
		 else if (japanMapAryType[i] == "3") type = "VHF";
		 else type = "Unknown";
		if (japanMapAryLatestRass[i] != "Unavailable")
			rassLine = "&nbsp;&nbsp;Latest RASS: "+japanMapAryLatestRass[i]+"<br>\n"
		var msg = 
                                 "Site Location: "+japanMapAryLngName[i]+"<br>\n"+
   "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Site ID: "+japanMapArySiteName[i]+"<br>\n"+
                  "&nbsp;&nbsp;&nbsp;Radar Type: "+type+"<br>\n"+
		                    "&nbsp;Lat/Lon/Elev: "+japanMapAryLat[i]+"/"+japanMapAryLon[i]+"/"+japanMapAryElev[i]+"m<br>\n"+
		                    "&nbsp;Latest Winds: "+japanMapAryLatestWind[i]+"<br>\n"+
		                                          rassLine+
        "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Provider: "+japanMapArySrcOrg[i]+"<br>\n";
		//alert("ImgMap Mouse Over msg="+ msg);
		popup(msg,"white",popupWidth);
	}
	function spacMap_OnMouseOver(site_id)
	{
//		alert("MouseOverEvent");
		popupWidth = 300;
		Xoffset=-300;   // modify these values to ...
		Yoffset=20;    // change the popup position.
		
		var i = site_id; var type = ""; var rassLine = "";
		if (spacMapAryType[i] == "1") type = "BLP";
		 else if (spacMapAryType[i] == "2") type = "UHF";
		 else if (spacMapAryType[i] == "3") type = "VHF";
		 else type = "Unknown";
		if (spacMapAryLatestRass[i] != "Unavailable")
			rassLine = "&nbsp;&nbsp;Latest RASS: "+spacMapAryLatestRass[i]+"<br>\n"
		var msg = 
                                 "Site Location: "+spacMapAryLngName[i]+"<br>\n"+
   "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Site ID: "+spacMapArySiteName[i]+"<br>\n"+
                  "&nbsp;&nbsp;&nbsp;Radar Type: "+type+"<br>\n"+
		                    "&nbsp;Lat/Lon/Elev: "+spacMapAryLat[i]+"/"+spacMapAryLon[i]+"/"+spacMapAryElev[i]+"m<br>\n"+
		                    "&nbsp;Latest Winds: "+spacMapAryLatestWind[i]+"<br>\n"+
		                                          rassLine+
        "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Provider: "+spacMapArySrcOrg[i]+"<br>\n";
		//alert("ImgMap Mouse Over msg="+ msg);
		popup(msg,"white",popupWidth);
	}
	//-->
	</script>
</head>

<body topmargin="0" leftmargin="0" rightmargin="0">
<DIV id="dek">
<SCRIPT TYPE="text/javascript">
<!--
	Xoffset=-100;    // modify these values to ...
	Yoffset= 20;    // change the popup position.
	var old,skn,iex=(document.all),yyy=-1000;
	var ns4=document.layers
	var ns6=document.getElementById&&!document.all
	//var ns6=document.getElementById;
	var ie4=document.all
	if (ns4)
		skn=document.dek
	else if (ns6)
		skn=document.getElementById("dek").style
	else if (ie4)
		skn=document.all.dek.style
	if(ns4)
		document.captureEvents(Event.MOUSEMOVE);
	else
	{
		skn.visibility="visible"
		skn.display="none"
	}
	document.onmousemove=get_mouse;
	function popup(msg,bak,wid){
		var content="<TABLE  WIDTH="+wid+" BORDER=1 BORDERCOLOR=black CELLPADDING=2 CELLSPACING=0 "+
		"BGCOLOR="+bak+"><TD class=popup ALIGN=left>"+msg+"</TD></TABLE>";
		yyy=Yoffset;
		 if(ns4){skn.document.write(content);skn.document.close();skn.visibility="visible"}
		 if(ns6){document.getElementById("dek").innerHTML=content;skn.display=''}
		 if(ie4){document.all("dek").innerHTML=content;skn.display=''}
	}
	function get_mouse(e){
		var x=(ns4||ns6)?e.pageX:event.x+document.body.scrollLeft;
		skn.left=x+Xoffset;
		var y=(ns4||ns6)?e.pageY:event.y+document.body.scrollTop;
		skn.top=y+yyy;
	}
	function kill(){
		yyy=-1000;
		if(ns4){skn.visibility="hidden";}
		else if (ns6||ie4)
		skn.display="none"
	}
/*	function getlegend() {
		setup='toolbar=no,location=no,directories=no,status=no,menubar=no,width=280,height=221'
		setup += 'scrollbars=no,resizable=no'
		pop = window.open ("","pop",setup)
		pop.document.write('<head>');
		pop.document.write('<Title>');
		pop.document.write('Legend');
		pop.document.write('</Title>');
		pop.document.write('</head>');
		pop.document.write('<body bgcolor=#FFFFFF>');
		pop.document.write('<CENTER><img src="/images/net_now_legend.gif">');
		pop.document.write('<FORM><input type="button" value="Close Window" onClick="window.close()"></form>');
		pop.document.write('</CENTER></body>'); 
	}
	function getraoblegend() {
		setup='toolbar=no,location=no,directories=no,status=no,menubar=no,width=280,height=241'
		setup += 'scrollbars=no,resizable=no'
		pop = window.open ("","pop",setup)
		pop.document.write('<head>');
		pop.document.write('<Title>');
		pop.document.write('Legend');
		pop.document.write('</Title>');
		pop.document.write('</head>');
		pop.document.write('<body bgcolor=#FFFFFF>');
		pop.document.write('<CENTER><img src="/images/raobKey.gif">');
		pop.document.write('<FORM><input type="button" value="Close Window" onClick="window.close()"></form>');
		pop.document.write('</CENTER></body>'); 
	 }
*/
//-->
</SCRIPT>
</DIV>



<table border="0" cellpadding="0" cellspacing="0" width="100%" summary="">
<tr>
	<td valign="top"   background="images/madis.png" nowrap height="61" width="108">
		<!--img src="images/madis.png" alt="MADIS Logo" border="0"-->&nbsp;
	</td>
	
	<td valign="top" background="images/capLogo3.gif" nowrap height="61" width="387">
		<!--img src="images/capLogo2.gif" alt="CAP Logo" border="0"-->&nbsp;
	</td>
	<td width="80%" valign="top">
		<table width="100%" border="0" cellpadding="0" cellspacing="0" summary="">
			<tr>
				<td valign="middle" height="28" nowrap align="center">
					<span style="font-family: Verdana, Geneva, Arial, Helvetica, sans-serif; 
						font-weight: bold; font-size: 17px;">
						CAP System Status
					</span>
				</td>
			</tr>
			<tr>
				<td height="33" bgcolor="#28648C">
					<table width="100%" border="0" cellpadding="0" cellspacing="0" align="center" summary="">
						<tr>
							<td align="center">
								<a name="home" id="home" href="/cap/index.jsp" class="mainmenu" 
								title="CAP Home Page">CAP PROFILERS</a>&nbsp;</td>
							<td align="center">
								&nbsp;<a name="status" href="/cap/sysStatus.jsp" 
								class="mainmenu" title="CAP Site Status">STATUS</a>&nbsp;</td>
							<td align="center">
								&nbsp;<a name="data" href="/cap/data.jsp" 
								class="mainmenu" title="CAP Data Displays">DATA</a>&nbsp;</td>
							<!--<td align="center">-->
								<!--&nbsp;<a name="news" href="/cap/news.jsp" -->
								<!--class="mainmenu" title="CAP News">NEWS</a>&nbsp;</td>-->
							<!--<td align="center">-->
								<!--&nbsp;<a name="forums" href="/cap/forums.jsp" -->
								<!--class="mainmenu" title="CAP Operations & Maintenance Forums">FORUMS</a>&nbsp;</td>-->
						</tr>
					</table>
				</td>
			</tr>
		</table>
	</td>
	<td valign="top" background="images/capSlope.gif" height="61" nowrap width="26">
		<!--img src="images/capSlope.gif" alt="CAP Slope" border="0"-->
	</td>
	<td background="images/capFiller2.gif" align="center" valign="top">
		<table border="0" cellpadding="0" cellspacing="0" summary="">
			<tr>
				<td>
					<a href="/cap/sysStatus.jsp?print=0" title="Show Menus">
						<img src="images/screenIcon.gif" alt="Menus On" border="0" vspace="5"></a>
				</td>
				<td>
					<a href="/cap/sysStatus.jsp?print=1" title="Hide Menus">
						<img src="images/paperIcon.gif" alt="Menus Off" border="0"></a>
				</td>
			</tr>		
		</table>
	</td>
</tr>
<tr>
	<td colspan="4" height="5" bgcolor="#28648C"></td>
</tr>
</table>


	<table summary="" cellpadding="0" cellspacing="0" border="0">
		<tr>

			<td NOWRAP valign="top" class="submenu">
				<!------------- status Submenu Links ---------------------------------  -->
				<table cellpadding=5 cellspacing=1 summary="" width="170">
					<tr>
						<td valign="top" class="submenu">
							<span class="submenuhead">Status</span><br>
							<a class="submenu" 
								href="/cap/sysStatus.jsp?capStatusView=Status+Table"> 
								Status (Table Format)</a><br>	
							<a class="submenu" 
								href="/cap/sysStatus.jsp?capStatusView=Status+Summary">Status Summary</a><br>
							<a class="submenu" 
								href="/cap/sysStatus.jsp?capStatusView=Status+Map">Status Map</a><hr>
						</td>
					</tr>
				</table>
								<!------------- Links Submenu Links ---------------------------------  -->
				<table cellpadding=5 cellspacing=1 summary="" width="170">
					<tr>
						<td valign="top" class="submenu">
							<span class="submenuhead">NOAA / DOC Links:</span><br>
							<a class="submenu" 
								href="/cap/index.jsp" 
								title="CAP Home" 
								target="_self">CAP Home</a><br>		
							<a class="submenu" 
								href="http://madis.noaa.gov/" 
								title="MADIS HOME" 
								target="_self">MADIS HOME</a><br>		
							<br>
							<br>		
							<a class="submenu" href="http://esrl.noaa.gov/gsd/" 
								title="ESRL Global Systems Division" 
								target="_self">GSD Web Site</a><br>
							<a class="submenu" href="http://esrl.noaa.gov/" 
								title="Earth System Research Laboratory" 
								target="_self">ESRL Web Site</a><br><br>
							<a class="submenu" 
								href="http://nws.noaa.gov/"
								title="National Weather Service" 
								target="_self">NWS Web Site</a><br>
							<a class="submenu" 
								href="http://spc.noaa.gov/" 
								target="_blank">Storm Prediction Center</a><br>
							<a class="submenu" 
								href="http://www.oar.noaa.gov/" 
								title="Office of Atmospheric Research Web Site" 
								target="_self">OAR's Web Site</a><br>		
							<a class="submenu" 
								href="http://www.noaa.gov/" 
								title="National Oceanic & Atmospheric Administration Web Site" 
								target="_self">NOAA's Web Site</a><br>		
							<a class="submenu" 
								href="http://www.commerce.gov/" 
								title="Department of Commerce Web Site" 
								target="_self">DOC's Web Site</a><br>		
							<hr>
						</td>
					</tr>
				</table>

			</td>

			<td valign="top" width="100%">

				<table cellpadding="5" summary="" width="100%">
					<tr>
						<td>

							<form get="post">
								<input type="submit" name="capStatusView" value="Status Map" >&nbsp;&nbsp;&nbsp;

								<input type="submit" name="capStatusView" value="Status Table" DISABLED>&nbsp;&nbsp;&nbsp;

								<input type="submit" name="capStatusView" value="Status Summary" >&nbsp;&nbsp;&nbsp;
							</form>


							<table width="100%" border="0"><tr>
								<td width="50%"><h2><a name="operStnUsa">Operational CONUS CAP Station Status</a></h2></td>
								<td align="right">
									<table>
										<tr nowrap>
											<td colspan="5" align="center">Latest Available Data</td>
										</tr>
										<tr>
											<td bgcolor="#00FF00" align="center">Current</td>
											<td bgcolor="#FFFF00" align="center">1-3 Hr</td>
											<td bgcolor="#00FFFF" align="center">3-24 Hr</td>
											<td bgcolor="#0000FF"  align="center"style="color: White;">24-72 Hr</td>
											<td bgcolor="#FF0000" align="center">>72 Hr</td>
										</tr>
										<tr nowrap>
											<td align="center"><img src="images/greenStar.gif" alt="Green Start - Current Data" title="Current Data"></td>
											<td align="center"><img src="images/yellowTri.gif" alt="Yellow Triangle - No data since one to three hours ago" title="No data since one to three hours ago"></td>
											<td align="center"><img src="images/cyanTri.gif" alt="Cyan Triangle - No data since three to 24 hours ago" title="No data since three to 24 hours ago"></td>
											<td align="center"><img src="images/blueDot.gif" alt="Blue Circle - No data since 24 to 72 hours ago" title="No data since 24 to 72 hours ago"></td>
											<td align="center"><img src="images/redSquare.gif" alt="Red Square - No data in more than 72 hours" title="No data in more than 72 hours"></td>
										</tr>
									</table>

								</td>
							</tr>
							</table>
							<!--h3>Operational Site Status</h3-->
							<table border="0">
								<tr>
									<!--th id="head0" class="tblHead">#</th-->
									<th id="head1" class="tblHead">Site ID</th>
									<th id="head2" class="tblHead">Site Location</th>
									<!--th id="head3" class="tblHead">Status</th-->
									<th id="head4" class="tblHead">Latest Wind Data</th>
									<th id="head5" class="tblHead">Latest RASS Data</th>
									<th id="head6" class="tblHead">Oldest Wind Data</th>
									<th id="head7" class="tblHead">Oldest RASS Data</th>
								</tr>
								<tr>
									<td class="tblData" bgcolor="#E0E0E0" headers="head1"><a class="alink" href="/cap/sysInfo.jsp?station=191OR">191OR</a></td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head2">FAIRBANKS, OR</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head4"><img src="images/redSquare.gif">&nbsp;2017-Aug-17 22:10</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head5">Unavailable</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head6">2016-Dec-04 03:50</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head7">Unavailable</td>
								<tr>
								<tr>
									<td class="tblData" bgcolor="#FFFFFF" headers="head1"><a class="alink" href="/cap/sysInfo.jsp?station=197OR">197OR</a></td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head2">LEXINGTON. OR</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head4"><img src="images/redSquare.gif">&nbsp;2017-Aug-17 16:20</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head5">Unavailable</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head6">2015-Oct-26 19:00</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head7">Unavailable</td>
								<tr>
								<tr>
									<td class="tblData" bgcolor="#E0E0E0" headers="head1"><a class="alink" href="/cap/sysInfo.jsp?station=200OR">200OR</a></td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head2">LOCUST GROVE, OR</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head4"><img src="images/redSquare.gif">&nbsp;2017-Aug-22 17:00</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head5">Unavailable</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head6">2015-Oct-26 19:00</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head7">Unavailable</td>
								<tr>
								<tr>
									<td class="tblData" bgcolor="#FFFFFF" headers="head1"><a class="alink" href="/cap/sysInfo.jsp?station=204OR">204OR</a></td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head2">RUFUS, OR</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head4"><img src="images/redSquare.gif">&nbsp;2017-Dec-15 22:40</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head5">Unavailable</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head6">2016-Jan-21 19:00</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head7">Unavailable</td>
								<tr>
								<tr>
									<td class="tblData" bgcolor="#E0E0E0" headers="head1"><a class="alink" href="/cap/sysInfo.jsp?station=265WA">265WA</a></td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head2">PLYMOUTH, WA</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head4"><img src="images/redSquare.gif">&nbsp;2017-Dec-15 22:20</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head5">Unavailable</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head6">2016-Jan-14 17:40</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head7">Unavailable</td>
								<tr>
								<tr>
									<td class="tblData" bgcolor="#FFFFFF" headers="head1"><a class="alink" href="/cap/sysInfo.jsp?station=352OR">352OR</a></td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head2">MORO, OR</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head4"><img src="images/redSquare.gif">&nbsp;2017-Dec-15 22:20</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head5">Unavailable</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head6">2016-Jan-05 06:20</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head7">Unavailable</td>
								<tr>
								<tr>
									<td class="tblData" bgcolor="#E0E0E0" headers="head1"><a class="alink" href="/cap/sysInfo.jsp?station=360OR">360OR</a></td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head2">SHELL ROCK ROAD, OR</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head4"><img src="images/redSquare.gif">&nbsp;2017-Dec-15 22:10</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head5">Unavailable</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head6">2016-Dec-04 17:20</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head7">Unavailable</td>
								<tr>
								<tr>
									<td class="tblData" bgcolor="#FFFFFF" headers="head1"><a class="alink" href="/cap/sysInfo.jsp?station=446OR">446OR</a></td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head2">OLEX, OR</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head4"><img src="images/redSquare.gif">&nbsp;2017-Dec-15 22:50</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head5">Unavailable</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head6">2015-Oct-26 16:10</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head7">Unavailable</td>
								<tr>
								<tr>
									<td class="tblData" bgcolor="#E0E0E0" headers="head1"><a class="alink" href="/cap/sysInfo.jsp?station=ABTQC">ABTQC</a></td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head2">ABITIBI, QC</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head4"><img src="images/redSquare.gif">&nbsp;2017-Aug-31 00:00</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head5">Unavailable</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head6">2014-Jan-16 19:00</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head7">Unavailable</td>
								<tr>
								<tr>
									<td class="tblData" bgcolor="#FFFFFF" headers="head1"><a class="alink" href="/cap/sysInfo.jsp?station=ACVCA">ACVCA</a></td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head2">MCKINLEYVILLE</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head4"><img src="images/redSquare.gif">&nbsp;2026-Mar-30 15:00</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head5"><img src="images/redSquare.gif">&nbsp;2026-Mar-30 14:00</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head6">2015-Dec-02 20:00</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head7">2015-Dec-02 20:00</td>
								<tr>
								<tr>
									<td class="tblData" bgcolor="#E0E0E0" headers="head1"><a class="alink" href="/cap/sysInfo.jsp?station=AMDQC">AMDQC</a></td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head2">AUMOND, QC</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head4"><img src="images/redSquare.gif">&nbsp;2017-Feb-20 08:00</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head5">Unavailable</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head6">2013-Oct-19 00:00</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head7">Unavailable</td>
								<tr>
								<tr>
									<td class="tblData" bgcolor="#FFFFFF" headers="head1"><a class="alink" href="/cap/sysInfo.jsp?station=AN2OR">AN2OR</a></td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head2">ARLINGTON, OR</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head4">Unavailable</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head5">Unavailable</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head6">Unavailable</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head7">Unavailable</td>
								<tr>
								<tr>
									<td class="tblData" bgcolor="#E0E0E0" headers="head1"><a class="alink" href="/cap/sysInfo.jsp?station=ARMOK">ARMOK</a></td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head2">ARM SGP OK</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head4"><img src="images/redSquare.gif">&nbsp;2006-Apr-27 14:00</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head5"><img src="images/redSquare.gif">&nbsp;2006-May-04 03:05</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head6">2004-Jun-09 21:00</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head7">2004-Jun-09 20:05</td>
								<tr>
								<tr>
									<td class="tblData" bgcolor="#FFFFFF" headers="head1"><a class="alink" href="/cap/sysInfo.jsp?station=ARVWI">ARVWI</a></td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head2">LAKELAND, WI</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head4"><img src="images/redSquare.gif">&nbsp;2019-Oct-29 17:00</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head5"><img src="images/redSquare.gif">&nbsp;2019-Oct-29 17:00</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head6">2019-Aug-09 20:00</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head7">2019-Aug-09 20:00</td>
								<tr>
								<tr>
									<td class="tblData" bgcolor="#E0E0E0" headers="head1"><a class="alink" href="/cap/sysInfo.jsp?station=ASTOR">ASTOR</a></td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head2">ASTORIA OR</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head4"><img src="images/cyanTri.gif">&nbsp;2026-Oct-31 05:00</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head5"><img src="images/cyanTri.gif">&nbsp;2026-Oct-31 07:00</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head6">2004-Jun-09 23:00</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head7">2004-Jun-09 23:00</td>
								<tr>
								<tr>
									<td class="tblData" bgcolor="#FFFFFF" headers="head1"><a class="alink" href="/cap/sysInfo.jsp?station=ATACA">ATACA</a></td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head2">ALTA CA (3GHZ)</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head4">Unavailable</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head5">Unavailable</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head6">Unavailable</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head7">Unavailable</td>
								<tr>
								<tr>
									<td class="tblData" bgcolor="#E0E0E0" headers="head1"><a class="alink" href="/cap/sysInfo.jsp?station=BBHAR">BBHAR</a></td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head2">BEE BRANCH, AR</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head4"><img src="images/redSquare.gif">&nbsp;2015-Nov-09 20:00</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head5"><img src="images/redSquare.gif">&nbsp;2015-Nov-09 20:00</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head6">2015-Oct-14 23:00</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head7">2015-Oct-14 23:00</td>
								<tr>
								<tr>
									<td class="tblData" bgcolor="#FFFFFF" headers="head1"><a class="alink" href="/cap/sysInfo.jsp?station=BBYCA">BBYCA</a></td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head2">BODEGA BAY CA</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head4"><img src="images/yellowTri.gif">&nbsp;2026-Oct-31 11:00</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head5"><img src="images/yellowTri.gif">&nbsp;2026-Oct-31 11:00</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head6">1996-Nov-20 01:00</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head7">2004-Nov-15 19:00</td>
								<tr>
								<tr>
									<td class="tblData" bgcolor="#E0E0E0" headers="head1"><a class="alink" href="/cap/sysInfo.jsp?station=BLTMD">BLTMD</a></td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head2">BELTSVILLE MD</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head4"><img src="images/redSquare.gif">&nbsp;2026-Oct-14 10:00</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head5"><img src="images/redSquare.gif">&nbsp;2026-Jun-12 21:00</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head6">2005-Jun-16 08:00</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head7">2008-May-21 01:15</td>
								<tr>
								<tr>
									<td class="tblData" bgcolor="#FFFFFF" headers="head1"><a class="alink" href="/cap/sysInfo.jsp?station=BMTKS">BMTKS</a></td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head2">BEAUMONT KS</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head4"><img src="images/redSquare.gif">&nbsp;2006-Apr-27 14:00</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head5"><img src="images/redSquare.gif">&nbsp;2006-May-04 03:05</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head6">2001-Jul-05 21:00</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head7">2004-Jun-09 23:05</td>
								<tr>
								<tr>
									<td class="tblData" bgcolor="#E0E0E0" headers="head1"><a class="alink" href="/cap/sysInfo.jsp?station=BO2OR">BO2OR</a></td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head2">BOARDMAN (SODAR), OR</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head4"><img src="images/redSquare.gif">&nbsp;2017-Mar-06 15:30</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head5">Unavailable</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head6">2015-Oct-15 01:00</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head7">Unavailable</td>
								<tr>
								<tr>
									<td class="tblData" bgcolor="#FFFFFF" headers="head1"><a class="alink" href="/cap/sysInfo.jsp?station=BOROR">BOROR</a></td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head2">BOARDMAN, OR</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head4"><img src="images/redSquare.gif">&nbsp;2017-Feb-21 23:00</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head5"><img src="images/redSquare.gif">&nbsp;2016-Dec-31 00:00</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head6">2015-Oct-14 18:00</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head7">2015-Oct-14 18:00</td>
								<tr>
								<tr>
									<td class="tblData" bgcolor="#E0E0E0" headers="head1"><a class="alink" href="/cap/sysInfo.jsp?station=BPATX">BPATX</a></td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head2">BEAUMONT PORT ARTHUR, TX</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head4"><img src="images/redSquare.gif">&nbsp;2015-Feb-06 15:00</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head5">Unavailable</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head6">2005-Jul-06 21:00</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head7">Unavailable</td>
								<tr>
								<tr>
									<td class="tblData" bgcolor="#FFFFFF" headers="head1"><a class="alink" href="/cap/sysInfo.jsp?station=CARON">CARON</a></td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head2">EGBERT ON</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head4"><img src="images/redSquare.gif">&nbsp;2014-Jul-18 17:30</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head5">Unavailable</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head6">2003-Aug-08 22:30</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head7">Unavailable</td>
								<tr>
								<tr>
									<td class="tblData" bgcolor="#E0E0E0" headers="head1"><a class="alink" href="/cap/sysInfo.jsp?station=CCOCA">CCOCA</a></td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head2">CHICO CA</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head4"><img src="images/redSquare.gif">&nbsp;2018-Jun-05 16:00</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head5"><img src="images/redSquare.gif">&nbsp;2018-Jun-05 16:00</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head6">2000-Jun-20 23:00</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head7">2004-Jun-09 23:00</td>
								<tr>
								<tr>
									<td class="tblData" bgcolor="#FFFFFF" headers="head1"><a class="alink" href="/cap/sysInfo.jsp?station=CCRCA">CCRCA</a></td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head2">CONCORD, CA</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head4"><img src="images/redSquare.gif">&nbsp;2011-Mar-22 20:00</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head5">Unavailable</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head6">2009-Dec-12 17:00</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head7">Unavailable</td>
								<tr>
								<tr>
									<td class="tblData" bgcolor="#E0E0E0" headers="head1"><a class="alink" href="/cap/sysInfo.jsp?station=CD2OR">CD2OR</a></td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head2">CONDON (SODAR), OR</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head4"><img src="images/redSquare.gif">&nbsp;2017-Mar-06 15:15</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head5">Unavailable</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head6">2015-Nov-18 01:40</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head7">Unavailable</td>
								<tr>
								<tr>
									<td class="tblData" bgcolor="#FFFFFF" headers="head1"><a class="alink" href="/cap/sysInfo.jsp?station=CDNOR">CDNOR</a></td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head2">CONDON, OR</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head4"><img src="images/redSquare.gif">&nbsp;2017-Feb-21 23:00</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head5"><img src="images/redSquare.gif">&nbsp;2017-Feb-21 23:00</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head6">2015-Oct-14 23:00</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head7">2015-Oct-14 23:00</td>
								<tr>
								<tr>
									<td class="tblData" bgcolor="#E0E0E0" headers="head1"><a class="alink" href="/cap/sysInfo.jsp?station=CFCCA">CFCCA</a></td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head2">COLFAX CA</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head4"><img src="images/redSquare.gif">&nbsp;2015-Jun-24 23:00</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head5">Unavailable</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head6">2008-Dec-12 12:00</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head7">Unavailable</td>
								<tr>
								<tr>
									<td class="tblData" bgcolor="#FFFFFF" headers="head1"><a class="alink" href="/cap/sysInfo.jsp?station=CFDUT">CFDUT</a></td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head2">CARR, UT</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head4"><img src="images/redSquare.gif">&nbsp;2023-Oct-24 14:00</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head5"><img src="images/redSquare.gif">&nbsp;2020-Jul-23 07:40</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head6">2018-Dec-24 01:20</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head7">2019-Jun-14 16:35</td>
								<tr>
								<tr>
									<td class="tblData" bgcolor="#E0E0E0" headers="head1"><a class="alink" href="/cap/sysInfo.jsp?station=CFFCA">CFFCA</a></td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head2">COLFAX CA (FMCW) (3GHZ)</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head4">Unavailable</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head5">Unavailable</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head6">Unavailable</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head7">Unavailable</td>
								<tr>
								<tr>
									<td class="tblData" bgcolor="#FFFFFF" headers="head1"><a class="alink" href="/cap/sysInfo.jsp?station=CHANC">CHANC</a></td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head2">CHARLOTTE NC</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head4"><img src="images/redSquare.gif">&nbsp;2017-Nov-15 15:00</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head5"><img src="images/redSquare.gif">&nbsp;2017-Nov-15 16:00</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head6">2001-Dec-03 01:30</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head7">2004-Jun-09 23:00</td>
								<tr>
								<tr>
									<td class="tblData" bgcolor="#E0E0E0" headers="head1"><a class="alink" href="/cap/sysInfo.jsp?station=CTNNC">CTNNC</a></td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head2">CLAYTON NC</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head4"><img src="images/redSquare.gif">&nbsp;2020-Apr-21 12:00</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head5"><img src="images/redSquare.gif">&nbsp;2016-Mar-21 10:00</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head6">2012-Dec-14 00:30</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head7">2013-Sep-11 19:00</td>
								<tr>
								<tr>
									<td class="tblData" bgcolor="#FFFFFF" headers="head1"><a class="alink" href="/cap/sysInfo.jsp?station=CZCCA">CZCCA</a></td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head2">CAZADERO CA (3GHZ)</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head4">Unavailable</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head5">Unavailable</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head6">Unavailable</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head7">Unavailable</td>
								<tr>
								<tr>
									<td class="tblData" bgcolor="#E0E0E0" headers="head1"><a class="alink" href="/cap/sysInfo.jsp?station=DALNS">DALNS</a></td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head2">LUNENBURG NS</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head4"><img src="images/redSquare.gif">&nbsp;2015-Nov-15 10:00</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head5"><img src="images/redSquare.gif">&nbsp;2015-Nov-15 10:00</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head6">2002-Aug-06 09:00</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head7">2004-Jun-09 23:00</td>
								<tr>
								<tr>
									<td class="tblData" bgcolor="#FFFFFF" headers="head1"><a class="alink" href="/cap/sysInfo.jsp?station=DGNAK">DGNAK</a></td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head2">JUNEAU (NORTH DOUGLAS) AK</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head4"><img src="images/redSquare.gif">&nbsp;2016-Jul-06 19:40</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head5">Unavailable</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head6">2001-May-02 09:50</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head7">Unavailable</td>
								<tr>
								<tr>
									<td class="tblData" bgcolor="#E0E0E0" headers="head1"><a class="alink" href="/cap/sysInfo.jsp?station=DGSAK">DGSAK</a></td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head2">JUNEAU (SOUTH DOUGLAS) AK</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head4"><img src="images/redSquare.gif">&nbsp;2016-Jul-06 19:40</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head5">Unavailable</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head6">2001-May-02 09:50</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head7">Unavailable</td>
								<tr>
								<tr>
									<td class="tblData" bgcolor="#FFFFFF" headers="head1"><a class="alink" href="/cap/sysInfo.jsp?station=DGWUT">DGWUT</a></td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head2">TOWER GRID UT</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head4"><img src="images/cyanTri.gif">&nbsp;2026-Oct-31 03:00</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head5"><img src="images/redSquare.gif">&nbsp;2020-Jul-23 03:40</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head6">1999-Aug-01 04:30</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head7">2004-Jun-09 19:30</td>
								<tr>
								<tr>
									<td class="tblData" bgcolor="#E0E0E0" headers="head1"><a class="alink" href="/cap/sysInfo.jsp?station=DR2OR">DR2OR</a></td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head2">DECKER RANCH AIRSTRIP (SODAR), OR</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head4"><img src="images/redSquare.gif">&nbsp;2017-Apr-07 16:30</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head5">Unavailable</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head6">2015-Nov-20 10:00</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head7">Unavailable</td>
								<tr>
								<tr>
									<td class="tblData" bgcolor="#FFFFFF" headers="head1"><a class="alink" href="/cap/sysInfo.jsp?station=EGBQC">EGBQC</a></td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head2">EGBERT, QC</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head4"><img src="images/redSquare.gif">&nbsp;2016-Oct-08 15:00</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head5">Unavailable</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head6">2013-Oct-23 00:00</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head7">Unavailable</td>
								<tr>
								<tr>
									<td class="tblData" bgcolor="#E0E0E0" headers="head1"><a class="alink" href="/cap/sysInfo.jsp?station=EPSTX">EPSTX</a></td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head2">EL PASO TX</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head4"><img src="images/redSquare.gif">&nbsp;2019-Jul-30 23:00</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head5">Unavailable</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head6">1999-Jun-24 17:00</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head7">Unavailable</td>
								<tr>
								<tr>
									<td class="tblData" bgcolor="#FFFFFF" headers="head1"><a class="alink" href="/cap/sysInfo.jsp?station=EWNNC">EWNNC</a></td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head2">NEW BERN NC</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head4"><img src="images/redSquare.gif">&nbsp;2015-Nov-04 13:00</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head5">Unavailable</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head6">2013-Jul-15 05:00</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head7">Unavailable</td>
								<tr>
								<tr>
									<td class="tblData" bgcolor="#E0E0E0" headers="head1"><a class="alink" href="/cap/sysInfo.jsp?station=FCPFL">FCPFL</a></td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head2">CAPE CANAVERAL (FALSECAPE) FL</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head4"><img src="images/redSquare.gif">&nbsp;2013-Mar-22 06:30</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head5">Unavailable</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head6">2002-May-24 01:45</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head7">Unavailable</td>
								<tr>
								<tr>
									<td class="tblData" bgcolor="#FFFFFF" headers="head1"><a class="alink" href="/cap/sysInfo.jsp?station=FHHAZ">FHHAZ</a></td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head2">CMO AZ</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head4"><img src="images/redSquare.gif">&nbsp;2006-Nov-29 20:00</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head5">Unavailable</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head6">2002-Jul-14 08:00</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head7">Unavailable</td>
								<tr>
								<tr>
									<td class="tblData" bgcolor="#E0E0E0" headers="head1"><a class="alink" href="/cap/sysInfo.jsp?station=FKSWA">FKSWA</a></td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head2">FORKS WA</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head4"><img src="images/yellowTri.gif">&nbsp;2026-Oct-31 11:00</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head5"><img src="images/cyanTri.gif">&nbsp;2026-Oct-31 06:00</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head6">2015-Dec-02 20:00</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head7">2015-Dec-02 20:00</td>
								<tr>
								<tr>
									<td class="tblData" bgcolor="#FFFFFF" headers="head1"><a class="alink" href="/cap/sysInfo.jsp?station=FPDUT">FPDUT</a></td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head2">FRIES PARK, UT</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head4"><img src="images/cyanTri.gif">&nbsp;2026-Oct-31 03:00</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head5"><img src="images/redSquare.gif">&nbsp;2020-Mar-09 17:50</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head6">2018-Apr-29 04:40</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head7">2019-Jun-14 21:40</td>
								<tr>
								<tr>
									<td class="tblData" bgcolor="#E0E0E0" headers="head1"><a class="alink" href="/cap/sysInfo.jsp?station=GDLWA">GDLWA</a></td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head2">GOLDENDALE, WA (SODAR)</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head4"><img src="images/redSquare.gif">&nbsp;2017-Mar-06 15:15</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head5">Unavailable</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head6">2016-Apr-01 04:15</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head7">Unavailable</td>
								<tr>
								<tr>
									<td class="tblData" bgcolor="#FFFFFF" headers="head1"><a class="alink" href="/cap/sysInfo.jsp?station=GLAMN">GLAMN</a></td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head2">GLACIAL RIDGE MN</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head4"><img src="images/redSquare.gif">&nbsp;2015-Mar-03 06:00</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head5">Unavailable</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head6">2004-Dec-08 22:00</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head7">Unavailable</td>
								<tr>
								<tr>
									<td class="tblData" bgcolor="#E0E0E0" headers="head1"><a class="alink" href="/cap/sysInfo.jsp?station=GNQQC">GNQQC</a></td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head2">GANANOQUE, QC</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head4"><img src="images/redSquare.gif">&nbsp;2016-Feb-05 02:00</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head5">Unavailable</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head6">2013-Dec-17 07:00</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head7">Unavailable</td>
								<tr>
								<tr>
									<td class="tblData" bgcolor="#FFFFFF" headers="head1"><a class="alink" href="/cap/sysInfo.jsp?station=GRICA">GRICA</a></td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head2">GRIZZLY ISLAND</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head4"><img src="images/redSquare.gif">&nbsp;2005-Dec-31 21:00</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head5"><img src="images/redSquare.gif">&nbsp;2005-Dec-31 21:00</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head6">2005-Sep-14 21:00</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head7">2005-Sep-13 09:00</td>
								<tr>
								<tr>
									<td class="tblData" bgcolor="#E0E0E0" headers="head1"><a class="alink" href="/cap/sysInfo.jsp?station=GV2OR">GV2OR</a></td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head2">GRASS VALLEY, OR</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head4"><img src="images/redSquare.gif">&nbsp;2017-Mar-06 15:00</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head5">Unavailable</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head6">2015-Dec-01 09:15</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head7">Unavailable</td>
								<tr>
								<tr>
									<td class="tblData" bgcolor="#FFFFFF" headers="head1"><a class="alink" href="/cap/sysInfo.jsp?station=HGDUT">HGDUT</a></td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head2">HORIZONTAL GRID UT</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head4"><img src="images/yellowTri.gif">&nbsp;2026-Oct-31 11:00</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head5"><img src="images/redSquare.gif">&nbsp;2020-Jun-15 10:35</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head6">2003-Jan-12 16:30</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head7">2004-Jun-09 23:00</td>
								<tr>
								<tr>
									<td class="tblData" bgcolor="#E0E0E0" headers="head1"><a class="alink" href="/cap/sysInfo.jsp?station=HPLMD">HPLMD</a></td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head2">HORN POINT LAB</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head4"><img src="images/yellowTri.gif">&nbsp;2026-Oct-31 11:00</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head5"><img src="images/cyanTri.gif">&nbsp;2026-Oct-31 05:00</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head6">2012-Jun-27 12:00</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head7">2012-Jul-01 07:15</td>
								<tr>
								<tr>
									<td class="tblData" bgcolor="#FFFFFF" headers="head1"><a class="alink" href="/cap/sysInfo.jsp?station=HRWQC">HRWQC</a></td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head2">HARROW</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head4"><img src="images/redSquare.gif">&nbsp;2020-Jul-24 21:00</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head5">Unavailable</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head6">2013-Nov-20 20:00</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head7">Unavailable</td>
								<tr>
								<tr>
									<td class="tblData" bgcolor="#E0E0E0" headers="head1"><a class="alink" href="/cap/sysInfo.jsp?station=HSNTX">HSNTX</a></td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head2">HOUSTON COASTAL CENTER TX</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head4"><img src="images/redSquare.gif">&nbsp;2018-Aug-07 22:30</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head5"><img src="images/redSquare.gif">&nbsp;2018-Aug-07 22:30</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head6">2008-Mar-13 12:00</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head7">2008-Mar-13 07:00</td>
								<tr>
								<tr>
									<td class="tblData" bgcolor="#FFFFFF" headers="head1"><a class="alink" href="/cap/sysInfo.jsp?station=IRVCA">IRVCA</a></td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head2">IRVINE CA</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head4"><img src="images/redSquare.gif">&nbsp;2016-Apr-28 19:00</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head5"><img src="images/redSquare.gif">&nbsp;2016-Apr-28 19:00</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head6">2008-Sep-30 20:00</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head7">2008-Sep-30 09:00</td>
								<tr>
								<tr>
									<td class="tblData" bgcolor="#E0E0E0" headers="head1"><a class="alink" href="/cap/sysInfo.jsp?station=JD2OR">JD2OR</a></td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head2">JOHN DAY (SODAR), OR</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head4"><img src="images/redSquare.gif">&nbsp;2017-Jan-27 20:45</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head5">Unavailable</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head6">2015-Dec-14 15:15</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head7">Unavailable</td>
								<tr>
								<tr>
									<td class="tblData" bgcolor="#FFFFFF" headers="head1"><a class="alink" href="/cap/sysInfo.jsp?station=JZISC">JZISC</a></td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head2">JOHNS ISLAND, SC</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head4"><img src="images/redSquare.gif">&nbsp;2015-Nov-05 17:00</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head5">Unavailable</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head6">2014-Aug-26 05:00</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head7">Unavailable</td>
								<tr>
								<tr>
									<td class="tblData" bgcolor="#E0E0E0" headers="head1"><a class="alink" href="/cap/sysInfo.jsp?station=KSCFL">KSCFL</a></td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head2">CAPE CANAVERAL (50 MHZ) FL</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head4"><img src="images/redSquare.gif">&nbsp;2013-Mar-20 20:00</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head5">Unavailable</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head6">1993-Jan-01 00:00</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head7">Unavailable</td>
								<tr>
								<tr>
									<td class="tblData" bgcolor="#FFFFFF" headers="head1"><a class="alink" href="/cap/sysInfo.jsp?station=LAXCA">LAXCA</a></td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head2">LOS ANGELES, CA</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head4"><img src="images/redSquare.gif">&nbsp;2020-Jan-02 22:00</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head5"><img src="images/redSquare.gif">&nbsp;2020-Jan-06 03:00</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head6">1997-Oct-21 16:00</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head7">2004-Jun-09 23:00</td>
								<tr>
								<tr>
									<td class="tblData" bgcolor="#E0E0E0" headers="head1"><a class="alink" href="/cap/sysInfo.jsp?station=LBKTX">LBKTX</a></td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head2">LUBBOCK TX (REESE CENTER)</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head4"><img src="images/redSquare.gif">&nbsp;2016-Mar-07 15:30</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head5"><img src="images/redSquare.gif">&nbsp;2016-Mar-07 15:00</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head6">2004-Nov-25 11:30</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head7">2004-Nov-25 00:00</td>
								<tr>
								<tr>
									<td class="tblData" bgcolor="#FFFFFF" headers="head1"><a class="alink" href="/cap/sysInfo.jsp?station=LMCAK">LMCAK</a></td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head2">JUNEAU (LEMON CREEK) AK</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head4"><img src="images/redSquare.gif">&nbsp;2016-Jul-06 19:40</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head5">Unavailable</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head6">2001-May-02 09:50</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head7">Unavailable</td>
								<tr>
								<tr>
									<td class="tblData" bgcolor="#E0E0E0" headers="head1"><a class="alink" href="/cap/sysInfo.jsp?station=LMNOK">LMNOK</a></td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head2">LAMONT OK ARM</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head4"><img src="images/redSquare.gif">&nbsp;2011-Feb-24 22:00</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head5"><img src="images/redSquare.gif">&nbsp;2011-Feb-24 21:05</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head6">2004-Nov-02 19:00</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head7">2004-Nov-02 18:05</td>
								<tr>
								<tr>
									<td class="tblData" bgcolor="#FFFFFF" headers="head1"><a class="alink" href="/cap/sysInfo.jsp?station=LNMCO">LNMCO</a></td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head2">LONGMONT CO</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head4"><img src="images/redSquare.gif">&nbsp;2015-Sep-14 22:55</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head5">Unavailable</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head6">2015-Sep-01 14:15</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head7">Unavailable</td>
								<tr>
								<tr>
									<td class="tblData" bgcolor="#E0E0E0" headers="head1"><a class="alink" href="/cap/sysInfo.jsp?station=LPTTX">LPTTX</a></td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head2">LAPORTE TX</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head4"><img src="images/redSquare.gif">&nbsp;2024-Aug-01 17:00</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head5">Unavailable</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head6">2005-May-10 20:30</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head7">Unavailable</td>
								<tr>
								<tr>
									<td class="tblData" bgcolor="#FFFFFF" headers="head1"><a class="alink" href="/cap/sysInfo.jsp?station=LVRCA">LVRCA</a></td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head2">LIVERMORE CA</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head4"><img src="images/redSquare.gif">&nbsp;2011-Mar-11 22:00</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head5"><img src="images/redSquare.gif">&nbsp;2011-Mar-22 13:00</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head6">2000-Jul-28 19:00</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head7">2006-Dec-01 16:00</td>
								<tr>
								<tr>
									<td class="tblData" bgcolor="#E0E0E0" headers="head1"><a class="alink" href="/cap/sysInfo.jsp?station=LWSDE">LWSDE</a></td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head2">LEWES, DE</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head4"><img src="images/redSquare.gif">&nbsp;2018-May-14 17:00</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head5"><img src="images/redSquare.gif">&nbsp;2018-May-14 17:00</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head6">2014-Mar-16 07:30</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head7">2014-Mar-16 14:00</td>
								<tr>
								<tr>
									<td class="tblData" bgcolor="#FFFFFF" headers="head1"><a class="alink" href="/cap/sysInfo.jsp?station=MCGQC">MCGQC</a></td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head2">MCGILL, QC</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head4"><img src="images/redSquare.gif">&nbsp;2014-Aug-23 14:00</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head5">Unavailable</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head6">2013-Oct-23 00:00</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head7">Unavailable</td>
								<tr>
								<tr>
									<td class="tblData" bgcolor="#E0E0E0" headers="head1"><a class="alink" href="/cap/sysInfo.jsp?station=MCGQU">MCGQU</a></td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head2">MONTREAL QU</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head4"><img src="images/redSquare.gif">&nbsp;2010-May-28 19:00</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head5"><img src="images/redSquare.gif">&nbsp;2010-May-28 19:00</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head6">1999-Aug-01 05:00</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head7">2004-Jul-13 17:00</td>
								<tr>
								<tr>
									<td class="tblData" bgcolor="#FFFFFF" headers="head1"><a class="alink" href="/cap/sysInfo.jsp?station=MDCKS">MDCKS</a></td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head2">MEDICINE LODGE KS</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head4"><img src="images/redSquare.gif">&nbsp;2005-Nov-16 18:00</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head5"><img src="images/redSquare.gif">&nbsp;2005-Nov-16 16:05</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head6">2004-Jul-13 13:00</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head7">2004-Jul-15 06:05</td>
								<tr>
								<tr>
									<td class="tblData" bgcolor="#E0E0E0" headers="head1"><a class="alink" href="/cap/sysInfo.jsp?station=MIDFL">MIDFL</a></td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head2">CAPE CANAVERAL (MERRITT) FL</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head4"><img src="images/redSquare.gif">&nbsp;2013-Mar-22 11:45</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head5">Unavailable</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head6">2002-May-05 15:30</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head7">Unavailable</td>
								<tr>
								<tr>
									<td class="tblData" bgcolor="#FFFFFF" headers="head1"><a class="alink" href="/cap/sysInfo.jsp?station=MKROK">MKROK</a></td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head2">MEEKER, OK</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head4"><img src="images/redSquare.gif">&nbsp;2007-Jul-14 09:00</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head5"><img src="images/redSquare.gif">&nbsp;2007-Jul-14 08:05</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head6">2005-Jul-27 19:00</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head7">2005-Jul-27 20:05</td>
								<tr>
								<tr>
									<td class="tblData" bgcolor="#E0E0E0" headers="head1"><a class="alink" href="/cap/sysInfo.jsp?station=MLNFL">MLNFL</a></td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head2">CAPE CANAVERAL (MOSQUITOLAGOON</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head4"><img src="images/redSquare.gif">&nbsp;2013-Feb-04 14:30</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head5">Unavailable</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head6">2002-Jun-20 01:30</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head7">Unavailable</td>
								<tr>
								<tr>
									<td class="tblData" bgcolor="#FFFFFF" headers="head1"><a class="alink" href="/cap/sysInfo.jsp?station=MMRCA">MMRCA</a></td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head2">MIRAMAR CA</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head4"><img src="images/redSquare.gif">&nbsp;2014-Apr-04 18:00</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head5"><img src="images/redSquare.gif">&nbsp;2014-Apr-04 18:00</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head6">2000-May-02 13:00</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head7">2004-Jun-09 20:00</td>
								<tr>
								<tr>
									<td class="tblData" bgcolor="#E0E0E0" headers="head1"><a class="alink" href="/cap/sysInfo.jsp?station=MOVCA">MOVCA</a></td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head2">MORENO VALLEY CA</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head4"><img src="images/redSquare.gif">&nbsp;2014-Oct-28 13:00</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head5"><img src="images/redSquare.gif">&nbsp;2014-Oct-28 13:00</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head6">2002-Aug-13 10:00</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head7">2004-Jun-09 23:00</td>
								<tr>
								<tr>
									<td class="tblData" bgcolor="#FFFFFF" headers="head1"><a class="alink" href="/cap/sysInfo.jsp?station=MRONC">MRONC</a></td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head2">MARION,NC</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head4"><img src="images/redSquare.gif">&nbsp;2014-Oct-27 15:00</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head5">Unavailable</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head6">2013-Aug-28 00:00</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head7">Unavailable</td>
								<tr>
								<tr>
									<td class="tblData" bgcolor="#E0E0E0" headers="head1"><a class="alink" href="/cap/sysInfo.jsp?station=MSYQC">MSYQC</a></td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head2">MARKSTAY</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head4"><img src="images/redSquare.gif">&nbsp;2020-Sep-22 01:00</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head5">Unavailable</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head6">2013-Oct-23 00:00</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head7">Unavailable</td>
								<tr>
								<tr>
									<td class="tblData" bgcolor="#FFFFFF" headers="head1"><a class="alink" href="/cap/sysInfo.jsp?station=NCKQC">NCKQC</a></td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head2">NEGROCREEK, QC</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head4"><img src="images/redSquare.gif">&nbsp;2017-Feb-21 19:00</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head5">Unavailable</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head6">2013-Oct-23 00:00</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head7">Unavailable</td>
								<tr>
								<tr>
									<td class="tblData" bgcolor="#E0E0E0" headers="head1"><a class="alink" href="/cap/sysInfo.jsp?station=NPSCA">NPSCA</a></td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head2">MONTEREY CA</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head4"><img src="images/redSquare.gif">&nbsp;2025-Aug-21 13:00</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head5"><img src="images/redSquare.gif">&nbsp;2025-Aug-19 18:00</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head6">1999-Dec-09 20:00</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head7">2004-Jun-09 23:00</td>
								<tr>
								<tr>
									<td class="tblData" bgcolor="#FFFFFF" headers="head1"><a class="alink" href="/cap/sysInfo.jsp?station=OFTNC">OFTNC</a></td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head2">OLD FORT,NC</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head4"><img src="images/redSquare.gif">&nbsp;2014-Oct-29 16:00</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head5">Unavailable</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head6">2013-Aug-28 23:00</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head7">Unavailable</td>
								<tr>
								<tr>
									<td class="tblData" bgcolor="#E0E0E0" headers="head1"><a class="alink" href="/cap/sysInfo.jsp?station=OHKTN">OHKTN</a></td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head2">OLD HICKORY TN</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head4"><img src="images/redSquare.gif">&nbsp;2013-Aug-06 13:00</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head5">Unavailable</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head6">2013-Jul-15 05:00</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head7">Unavailable</td>
								<tr>
								<tr>
									<td class="tblData" bgcolor="#FFFFFF" headers="head1"><a class="alink" href="/cap/sysInfo.jsp?station=ONTCA">ONTCA</a></td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head2">ONTARIO CA</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head4"><img src="images/redSquare.gif">&nbsp;2014-Jul-25 06:00</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head5"><img src="images/redSquare.gif">&nbsp;2014-Jul-25 06:00</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head6">1997-Oct-21 07:00</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head7">2004-Jun-09 22:00</td>
								<tr>
								<tr>
									<td class="tblData" bgcolor="#E0E0E0" headers="head1"><a class="alink" href="/cap/sysInfo.jsp?station=OTHOR">OTHOR</a></td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head2">NORTH BEND, OR</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head4"><img src="images/yellowTri.gif">&nbsp;2026-Oct-31 11:00</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head5"><img src="images/yellowTri.gif">&nbsp;2026-Oct-31 11:00</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head6">2015-Oct-30 20:00</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head7">2015-Oct-30 20:00</td>
								<tr>
								<tr>
									<td class="tblData" bgcolor="#FFFFFF" headers="head1"><a class="alink" href="/cap/sysInfo.jsp?station=OVECA">OVECA</a></td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head2">OROVILLE</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head4"><img src="images/yellowTri.gif">&nbsp;2026-Oct-31 11:00</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head5"><img src="images/cyanTri.gif">&nbsp;2026-Oct-31 07:00</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head6">2018-Mar-27 20:00</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head7">2018-Mar-27 20:00</td>
								<tr>
								<tr>
									<td class="tblData" bgcolor="#E0E0E0" headers="head1"><a class="alink" href="/cap/sysInfo.jsp?station=PAPAZ">PAPAZ</a></td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head2">TUCSON AZ</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head4"><img src="images/redSquare.gif">&nbsp;2011-Jan-31 20:00</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head5">Unavailable</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head6">2008-Jul-24 04:00</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head7">Unavailable</td>
								<tr>
								<tr>
									<td class="tblData" bgcolor="#FFFFFF" headers="head1"><a class="alink" href="/cap/sysInfo.jsp?station=PNRMD">PNRMD</a></td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head2">PINEY RUN, MD</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head4"><img src="images/yellowTri.gif">&nbsp;2026-Oct-31 11:00</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head5"><img src="images/redSquare.gif">&nbsp;2026-Jul-27 18:00</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head6">2005-Jun-06 00:00</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head7">2008-Jul-08 23:30</td>
								<tr>
								<tr>
									<td class="tblData" bgcolor="#E0E0E0" headers="head1"><a class="alink" href="/cap/sysInfo.jsp?station=PQLMS">PQLMS</a></td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head2">MOSS POINT MS</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head4"><img src="images/redSquare.gif">&nbsp;2015-Nov-08 13:00</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head5">Unavailable</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head6">2014-Aug-26 05:00</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head7">Unavailable</td>
								<tr>
								<tr>
									<td class="tblData" bgcolor="#FFFFFF" headers="head1"><a class="alink" href="/cap/sysInfo.jsp?station=PRWWI">PRWWI</a></td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head2">PRENTICE, WI</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head4"><img src="images/redSquare.gif">&nbsp;2019-Oct-30 14:00</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head5"><img src="images/redSquare.gif">&nbsp;2019-Oct-30 10:00</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head6">2019-Aug-09 19:00</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head7">2019-Aug-09 19:00</td>
								<tr>
								<tr>
									<td class="tblData" bgcolor="#E0E0E0" headers="head1"><a class="alink" href="/cap/sysInfo.jsp?station=PTLCA">PTLCA</a></td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head2">POINT LOMA CA</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head4"><img src="images/redSquare.gif">&nbsp;2010-Apr-14 19:00</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head5"><img src="images/redSquare.gif">&nbsp;2010-Apr-14 18:55</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head6">1997-Dec-01 09:00</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head7">2004-Jun-09 21:00</td>
								<tr>
								<tr>
									<td class="tblData" bgcolor="#FFFFFF" headers="head1"><a class="alink" href="/cap/sysInfo.jsp?station=PTMCA">PTMCA</a></td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head2">POINT MUGU, CA</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head4"><img src="images/redSquare.gif">&nbsp;2018-Oct-04 21:00</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head5"><img src="images/redSquare.gif">&nbsp;2018-Oct-04 20:00</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head6">2014-Aug-10 04:00</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head7">2014-Aug-18 00:00</td>
								<tr>
								<tr>
									<td class="tblData" bgcolor="#E0E0E0" headers="head1"><a class="alink" href="/cap/sysInfo.jsp?station=PTSCA">PTSCA</a></td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head2">POINT SUR CA</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head4"><img src="images/redSquare.gif">&nbsp;2025-Aug-21 13:00</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head5"><img src="images/redSquare.gif">&nbsp;2025-Aug-21 13:00</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head6">2008-Nov-01 00:00</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head7">2017-Sep-28 20:00</td>
								<tr>
								<tr>
									<td class="tblData" bgcolor="#FFFFFF" headers="head1"><a class="alink" href="/cap/sysInfo.jsp?station=PV2OR">PV2OR</a></td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head2">PRINEVILLE (SODAR), OR</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head4"><img src="images/redSquare.gif">&nbsp;2017-Mar-06 15:30</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head5">Unavailable</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head6">2015-Oct-16 08:30</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head7">Unavailable</td>
								<tr>
								<tr>
									<td class="tblData" bgcolor="#E0E0E0" headers="head1"><a class="alink" href="/cap/sysInfo.jsp?station=PVEOR">PVEOR</a></td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head2">PRINEVILLE, OR</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head4"><img src="images/redSquare.gif">&nbsp;2017-Feb-21 23:00</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head5"><img src="images/redSquare.gif">&nbsp;2017-Feb-21 23:00</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head6">2015-Aug-14 22:00</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head7">2015-Aug-15 01:00</td>
								<tr>
								<tr>
									<td class="tblData" bgcolor="#FFFFFF" headers="head1"><a class="alink" href="/cap/sysInfo.jsp?station=PVLCO">PVLCO</a></td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head2">PLATTEVILLE (449)</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head4"><img src="images/redSquare.gif">&nbsp;2024-Oct-23 17:00</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head5"><img src="images/redSquare.gif">&nbsp;2024-Oct-23 11:00</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head6">2019-Aug-19 22:00</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head7">2019-Aug-19 23:00</td>
								<tr>
								<tr>
									<td class="tblData" bgcolor="#E0E0E0" headers="head1"><a class="alink" href="/cap/sysInfo.jsp?station=RCOFL">RCOFL</a></td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head2">CAPE CANAVERAL (TI-CO) FL</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head4"><img src="images/redSquare.gif">&nbsp;2013-Mar-22 11:45</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head5">Unavailable</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head6">2003-Mar-09 01:45</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head7">Unavailable</td>
								<tr>
								<tr>
									<td class="tblData" bgcolor="#FFFFFF" headers="head1"><a class="alink" href="/cap/sysInfo.jsp?station=RESTX">RESTX</a></td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head2">LUBBOCK, TX (SODAR)</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head4"><img src="images/redSquare.gif">&nbsp;2012-Sep-22 12:30</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head5">Unavailable</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head6">2011-Jul-12 10:00</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head7">Unavailable</td>
								<tr>
								<tr>
									<td class="tblData" bgcolor="#E0E0E0" headers="head1"><a class="alink" href="/cap/sysInfo.jsp?station=RTPNC">RTPNC</a></td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head2">RESEARCH TRIANGLE PARK, NC</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head4"><img src="images/redSquare.gif">&nbsp;2018-Jan-03 06:00</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head5"><img src="images/redSquare.gif">&nbsp;2018-Jan-03 06:00</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head6">2013-Sep-12 08:30</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head7">2013-Sep-13 20:00</td>
								<tr>
								<tr>
									<td class="tblData" bgcolor="#FFFFFF" headers="head1"><a class="alink" href="/cap/sysInfo.jsp?station=RTPTX">RTPTX</a></td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head2">ROUND TOP,TX</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head4"><img src="images/redSquare.gif">&nbsp;2013-Oct-23 17:00</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head5">Unavailable</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head6">2013-Aug-28 00:00</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head7">Unavailable</td>
								<tr>
								<tr>
									<td class="tblData" bgcolor="#E0E0E0" headers="head1"><a class="alink" href="/cap/sysInfo.jsp?station=RUTNJ">RUTNJ</a></td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head2">NEW BRUNSWICK, NJ</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head4"><img src="images/redSquare.gif">&nbsp;2025-May-10 02:00</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head5"><img src="images/redSquare.gif">&nbsp;2025-May-09 17:00</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head6">1998-Jun-03 07:00</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head7">2004-Jun-09 23:00</td>
								<tr>
								<tr>
									<td class="tblData" bgcolor="#FFFFFF" headers="head1"><a class="alink" href="/cap/sysInfo.jsp?station=RVDWA">RVDWA</a></td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head2">RAVENSDALE WA</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head4">Unavailable</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head5">Unavailable</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head6">Unavailable</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head7">Unavailable</td>
								<tr>
								<tr>
									<td class="tblData" bgcolor="#E0E0E0" headers="head1"><a class="alink" href="/cap/sysInfo.jsp?station=SACCA">SACCA</a></td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head2">SACRAMENTO CA</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head4"><img src="images/redSquare.gif">&nbsp;2016-Jun-09 17:00</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head5"><img src="images/redSquare.gif">&nbsp;2016-Jun-08 18:00</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head6">1999-Dec-29 08:00</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head7">2004-Jun-09 23:05</td>
								<tr>
								<tr>
									<td class="tblData" bgcolor="#FFFFFF" headers="head1"><a class="alink" href="/cap/sysInfo.jsp?station=SBACA">SBACA</a></td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head2">SANTA BARBARA</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head4"><img src="images/yellowTri.gif">&nbsp;2026-Oct-31 11:00</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head5"><img src="images/yellowTri.gif">&nbsp;2026-Oct-31 11:00</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head6">2017-Sep-28 20:00</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head7">2017-Sep-28 20:00</td>
								<tr>
								<tr>
									<td class="tblData" bgcolor="#E0E0E0" headers="head1"><a class="alink" href="/cap/sysInfo.jsp?station=SCPFL">SCPFL</a></td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head2">CAPE CANAVERAL (SOUTHCAPE) FL</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head4"><img src="images/redSquare.gif">&nbsp;2013-Mar-22 11:45</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head5">Unavailable</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head6">1999-Jan-01 00:45</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head7">Unavailable</td>
								<tr>
								<tr>
									<td class="tblData" bgcolor="#FFFFFF" headers="head1"><a class="alink" href="/cap/sysInfo.jsp?station=SEAWA">SEAWA</a></td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head2">SEATTLE WA</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head4"><img src="images/redSquare.gif">&nbsp;2019-Apr-16 19:00</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head5"><img src="images/redSquare.gif">&nbsp;2019-Apr-16 19:00</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head6">1996-Dec-14 08:30</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head7">2004-Jun-09 23:00</td>
								<tr>
								<tr>
									<td class="tblData" bgcolor="#E0E0E0" headers="head1"><a class="alink" href="/cap/sysInfo.jsp?station=SLDUT">SLDUT</a></td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head2">SL-TEST, UT</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head4"><img src="images/redSquare.gif">&nbsp;2020-Jul-23 22:00</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head5"><img src="images/redSquare.gif">&nbsp;2020-Jul-18 08:10</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head6">2019-Jun-14 10:50</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head7">2019-Jun-14 21:35</td>
								<tr>
								<tr>
									<td class="tblData" bgcolor="#FFFFFF" headers="head1"><a class="alink" href="/cap/sysInfo.jsp?station=SNYFL">SNYFL</a></td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head2">SYDNEY FL</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head4"><img src="images/redSquare.gif">&nbsp;2015-Nov-07 12:00</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head5"><img src="images/redSquare.gif">&nbsp;2002-May-31 17:00</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head6">2002-May-23 16:00</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head7">2002-May-23 16:00</td>
								<tr>
								<tr>
									<td class="tblData" bgcolor="#E0E0E0" headers="head1"><a class="alink" href="/cap/sysInfo.jsp?station=STDCA">STDCA</a></td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head2">SHASTA DAM, CA</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head4">Unavailable</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head5">Unavailable</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head6">Unavailable</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head7">Unavailable</td>
								<tr>
								<tr>
									<td class="tblData" bgcolor="#FFFFFF" headers="head1"><a class="alink" href="/cap/sysInfo.jsp?station=STWMA">STWMA</a></td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head2">STOW MA</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head4"><img src="images/redSquare.gif">&nbsp;2011-Sep-07 07:00</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head5"><img src="images/redSquare.gif">&nbsp;2011-Sep-07 07:00</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head6">1998-Aug-31 06:00</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head7">2004-May-17 01:00</td>
								<tr>
								<tr>
									<td class="tblData" bgcolor="#E0E0E0" headers="head1"><a class="alink" href="/cap/sysInfo.jsp?station=SUACA">SUACA</a></td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head2">SIMI VALLEY UPPER AIR ATMOSPHERIC PROFILER</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head4"><img src="images/redSquare.gif">&nbsp;2023-May-09 11:00</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head5"><img src="images/redSquare.gif">&nbsp;2023-May-09 09:00</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head6">2014-Apr-09 09:00</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head7">2014-Jul-23 19:15</td>
								<tr>
								<tr>
									<td class="tblData" bgcolor="#FFFFFF" headers="head1"><a class="alink" href="/cap/sysInfo.jsp?station=TCICA">TCICA</a></td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head2">TWITCHELL ISLAND</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head4"><img src="images/cyanTri.gif">&nbsp;2026-Oct-31 07:00</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head5">Unavailable</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head6">2019-Aug-09 19:00</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head7">Unavailable</td>
								<tr>
								<tr>
									<td class="tblData" bgcolor="#E0E0E0" headers="head1"><a class="alink" href="/cap/sysInfo.jsp?station=TCYCA">TCYCA</a></td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head2">TRACY CA</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head4"><img src="images/redSquare.gif">&nbsp;2017-Aug-30 19:00</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head5"><img src="images/redSquare.gif">&nbsp;2017-Sep-11 22:30</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head6">2000-Jul-28 19:00</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head7">2007-Feb-03 06:30</td>
								<tr>
								<tr>
									<td class="tblData" bgcolor="#FFFFFF" headers="head1"><a class="alink" href="/cap/sysInfo.jsp?station=TDEOR">TDEOR</a></td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head2">TROUTDALE, WA</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head4"><img src="images/redSquare.gif">&nbsp;2019-Aug-14 18:00</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head5"><img src="images/redSquare.gif">&nbsp;2019-Aug-14 18:00</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head6">2015-Oct-04 16:00</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head7">2015-Oct-04 16:00</td>
								<tr>
								<tr>
									<td class="tblData" bgcolor="#E0E0E0" headers="head1"><a class="alink" href="/cap/sysInfo.jsp?station=VISCA">VISCA</a></td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head2">VISALIA CA</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head4"><img src="images/redSquare.gif">&nbsp;2020-Sep-22 00:00</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head5"><img src="images/redSquare.gif">&nbsp;2009-Nov-05 16:00</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head6">1999-Dec-17 18:00</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head7">2005-Sep-14 04:00</td>
								<tr>
								<tr>
									<td class="tblData" bgcolor="#FFFFFF" headers="head1"><a class="alink" href="/cap/sysInfo.jsp?station=WC2OR">WC2OR</a></td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head2">WASCO (SODAR), OR</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head4"><img src="images/redSquare.gif">&nbsp;2017-Mar-06 15:30</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head5">Unavailable</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head6">2015-Dec-07 22:45</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head7">Unavailable</td>
								<tr>
								<tr>
									<td class="tblData" bgcolor="#E0E0E0" headers="head1"><a class="alink" href="/cap/sysInfo.jsp?station=WCOOR">WCOOR</a></td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head2">WASCO, OR</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head4"><img src="images/redSquare.gif">&nbsp;2017-Feb-21 21:00</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head5"><img src="images/redSquare.gif">&nbsp;2017-Feb-21 23:00</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head6">2015-Oct-04 14:00</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head7">2015-Oct-04 16:00</td>
								<tr>
								<tr>
									<td class="tblData" bgcolor="#FFFFFF" headers="head1"><a class="alink" href="/cap/sysInfo.jsp?station=WFCQC">WFCQC</a></td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head2">WILBERFORCE, QC</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head4"><img src="images/redSquare.gif">&nbsp;2020-Sep-18 14:00</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head5">Unavailable</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head6">2013-Nov-25 22:00</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head7">Unavailable</td>
								<tr>
								<tr>
									<td class="tblData" bgcolor="#E0E0E0" headers="head1"><a class="alink" href="/cap/sysInfo.jsp?station=WHPCA">WHPCA</a></td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head2">WHITEMAN AIRPORT PACOIMA CA</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head4"><img src="images/redSquare.gif">&nbsp;2013-Feb-12 18:00</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head5"><img src="images/redSquare.gif">&nbsp;2013-Feb-12 16:00</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head6">2008-Sep-30 20:00</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head7">2008-Sep-30 09:00</td>
								<tr>
								<tr>
									<td class="tblData" bgcolor="#FFFFFF" headers="head1"><a class="alink" href="/cap/sysInfo.jsp?station=WILDE">WILDE</a></td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head2">WILMINGTON DE</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head4"><img src="images/redSquare.gif">&nbsp;2011-Sep-20 12:30</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head5"><img src="images/redSquare.gif">&nbsp;2011-Sep-20 14:00</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head6">2008-Aug-08 15:30</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head7">2008-Aug-08 05:30</td>
								<tr>
								<tr>
									<td class="tblData" bgcolor="#E0E0E0" headers="head1"><a class="alink" href="/cap/sysInfo.jsp?station=WLMQC">WLMQC</a></td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head2">WALSINGHAM</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head4"><img src="images/redSquare.gif">&nbsp;2017-Feb-21 23:00</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head5">Unavailable</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head6">2013-Nov-20 19:00</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head7">Unavailable</td>
								<tr>
								<tr>
									<td class="tblData" bgcolor="#FFFFFF" headers="head1"><a class="alink" href="/cap/sysInfo.jsp?station=WPCWA">WPCWA</a></td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head2">WESTPORT (3GHZ)</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head4">Unavailable</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head5">Unavailable</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head6">Unavailable</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head7">Unavailable</td>
								<tr>
								<tr>
									<td class="tblData" bgcolor="#E0E0E0" headers="head1"><a class="alink" href="/cap/sysInfo.jsp?station=WPTWA">WPTWA</a></td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head2">WESTPORT WA</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head4"><img src="images/redSquare.gif">&nbsp;2013-Nov-13 16:00</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head5"><img src="images/redSquare.gif">&nbsp;2002-Mar-27 17:00</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head6">2000-Oct-30 19:00</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head7">2000-Oct-30 18:00</td>
								<tr>
								<tr>
									<td class="tblData" bgcolor="#FFFFFF" headers="head1"><a class="alink" href="/cap/sysInfo.jsp?station=WTNTX">WTNTX</a></td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head2">WHARTON TX</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head4"><img src="images/redSquare.gif">&nbsp;2013-Oct-23 12:00</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head5">Unavailable</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head6">2013-Aug-28 00:00</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head7">Unavailable</td>
								<tr>
								<tr>
									<td class="tblData" bgcolor="#E0E0E0" headers="head1"><a class="alink" href="/cap/sysInfo.jsp?station=WW2WA">WW2WA</a></td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head2">WALLA WALLA, WA</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head4">Unavailable</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head5">Unavailable</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head6">Unavailable</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head7">Unavailable</td>
								<tr>
								<tr>
									<td class="tblData" bgcolor="#FFFFFF" headers="head1"><a class="alink" href="/cap/sysInfo.jsp?station=WWLWA">WWLWA</a></td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head2">WALLA WALLA, WA (SODAR)</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head4"><img src="images/redSquare.gif">&nbsp;2017-Mar-06 15:15</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head5">Unavailable</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head6">2016-Apr-01 04:15</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head7">Unavailable</td>
								<tr>
								<tr>
									<td class="tblData" bgcolor="#E0E0E0" headers="head1"><a class="alink" href="/cap/sysInfo.jsp?station=YK2WA">YK2WA</a></td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head2">YAKIMA, WA</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head4">Unavailable</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head5">Unavailable</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head6">Unavailable</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head7">Unavailable</td>
								<tr>
								<tr>
									<td class="tblData" bgcolor="#FFFFFF" headers="head1"><a class="alink" href="/cap/sysInfo.jsp?station=YKMWA">YKMWA</a></td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head2">YAKIMA, WA (SODAR)</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head4"><img src="images/redSquare.gif">&nbsp;2017-May-15 04:15</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head5">Unavailable</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head6">2016-Apr-01 04:15</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head7">Unavailable</td>
								<tr>
								<tr>
									<td class="tblData" bgcolor="#E0E0E0" headers="head1"><a class="alink" href="/cap/sysInfo.jsp?station=YUMAZ">YUMAZ</a></td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head2">YUMA AZ</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head4"><img src="images/redSquare.gif">&nbsp;2003-Nov-19 13:30</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head5"><img src="images/redSquare.gif">&nbsp;2003-Nov-19 13:30</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head6">2002-Jul-11 04:00</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head7">2002-Jul-10 07:30</td>
								<tr>

							</table>
							<span style="font-family: Arial, Helvetica, sans-serif; font-weight: bold;">CONUS Operational Site Count: 127</span>							
							<br><br>


							<table width="100%" border="0"><tr>
								<td width="50%"><h2><a name="operStn">Operational International CAP Station Status</a></h2></td>
								<td align="right">
									<table>
										<tr nowrap>
											<td colspan="5" align="center">Latest Available Data</td>
										</tr>
										<tr>
											<td bgcolor="#00FF00" align="center">Current</td>
											<td bgcolor="#FFFF00" align="center">1-3 Hr</td>
											<td bgcolor="#00FFFF" align="center">3-24 Hr</td>
											<td bgcolor="#0000FF"  align="center"style="color: White;">24-72 Hr</td>
											<td bgcolor="#FF0000" align="center">>72 Hr</td>
										</tr>
										<tr nowrap>
											<td align="center"><img src="images/greenStar.gif" alt="Green Start - Current Data" title="Current Data"></td>
											<td align="center"><img src="images/yellowTri.gif" alt="Yellow Triangle - No data since one to three hours ago" title="No data since one to three hours ago"></td>
											<td align="center"><img src="images/cyanTri.gif" alt="Cyan Triangle - No data since three to 24 hours ago" title="No data since three to 24 hours ago"></td>
											<td align="center"><img src="images/blueDot.gif" alt="Blue Circle - No data since 24 to 72 hours ago" title="No data since 24 to 72 hours ago"></td>
											<td align="center"><img src="images/redSquare.gif" alt="Red Square - No data in more than 72 hours" title="No data in more than 72 hours"></td>
										</tr>
									</table>

								</td>
							</tr>
							</table>
							<!--h3>Operational Site Status</h3-->
							<table border="0">
								<tr>
									<!--th id="head0" class="tblHead">#</th-->
									<th id="head1" class="tblHead">Site ID</th>
									<th id="head2" class="tblHead">Site Location</th>
									<!--th id="head3" class="tblHead">Status</th-->
									<th id="head4" class="tblHead">Latest Wind Data</th>
									<th id="head5" class="tblHead">Latest RASS Data</th>
									<th id="head6" class="tblHead">Oldest Wind Data</th>
									<th id="head7" class="tblHead">Oldest RASS Data</th>
								</tr>
								<tr>
									<td class="tblData" bgcolor="#E0E0E0" headers="head1"><a class="alink" href="/cap/sysInfo.jsp?station=406JP">406JP</a></td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head2">RUMOI JP</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head4"><img src="images/redSquare.gif">&nbsp;2016-Aug-23 13:00</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head5">Unavailable</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head6">2004-Jun-09 23:00</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head7">Unavailable</td>
								<tr>
								<tr>
									<td class="tblData" bgcolor="#FFFFFF" headers="head1"><a class="alink" href="/cap/sysInfo.jsp?station=417JP">417JP</a></td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head2">OBIHIRO JP</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head4"><img src="images/redSquare.gif">&nbsp;2016-Aug-23 13:00</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head5">Unavailable</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head6">2004-Jun-09 23:00</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head7">Unavailable</td>
								<tr>
								<tr>
									<td class="tblData" bgcolor="#E0E0E0" headers="head1"><a class="alink" href="/cap/sysInfo.jsp?station=423JP">423JP</a></td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head2">MURORAN JP</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head4"><img src="images/redSquare.gif">&nbsp;2016-Aug-23 11:00</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head5">Unavailable</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head6">2004-Jun-09 22:00</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head7">Unavailable</td>
								<tr>
								<tr>
									<td class="tblData" bgcolor="#FFFFFF" headers="head1"><a class="alink" href="/cap/sysInfo.jsp?station=585JP">585JP</a></td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head2">MIYAKO JP</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head4"><img src="images/redSquare.gif">&nbsp;2016-Aug-23 13:00</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head5">Unavailable</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head6">2004-Jun-09 22:00</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head7">Unavailable</td>
								<tr>
								<tr>
									<td class="tblData" bgcolor="#E0E0E0" headers="head1"><a class="alink" href="/cap/sysInfo.jsp?station=587JP">587JP</a></td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head2">SAKATA JP</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head4"><img src="images/redSquare.gif">&nbsp;2016-Aug-23 10:00</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head5">Unavailable</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head6">2004-Jun-09 22:00</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head7">Unavailable</td>
								<tr>
								<tr>
									<td class="tblData" bgcolor="#FFFFFF" headers="head1"><a class="alink" href="/cap/sysInfo.jsp?station=612JP">612JP</a></td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head2">TAKADA JP</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head4"><img src="images/redSquare.gif">&nbsp;2016-Aug-23 13:00</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head5">Unavailable</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head6">2004-Jun-09 22:00</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head7">Unavailable</td>
								<tr>
								<tr>
									<td class="tblData" bgcolor="#E0E0E0" headers="head1"><a class="alink" href="/cap/sysInfo.jsp?station=616JP">616JP</a></td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head2">FUKUI JP</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head4"><img src="images/redSquare.gif">&nbsp;2016-Aug-23 13:00</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head5">Unavailable</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head6">2004-Jun-09 22:00</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head7">Unavailable</td>
								<tr>
								<tr>
									<td class="tblData" bgcolor="#FFFFFF" headers="head1"><a class="alink" href="/cap/sysInfo.jsp?station=626JP">626JP</a></td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head2">KUMAGAYA JP</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head4"><img src="images/redSquare.gif">&nbsp;2016-Aug-23 13:00</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head5">Unavailable</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head6">2004-Jun-09 23:00</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head7">Unavailable</td>
								<tr>
								<tr>
									<td class="tblData" bgcolor="#E0E0E0" headers="head1"><a class="alink" href="/cap/sysInfo.jsp?station=629JP">629JP</a></td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head2">MITO JP</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head4"><img src="images/redSquare.gif">&nbsp;2016-Aug-23 13:00</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head5">Unavailable</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head6">2004-Jun-09 22:00</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head7">Unavailable</td>
								<tr>
								<tr>
									<td class="tblData" bgcolor="#FFFFFF" headers="head1"><a class="alink" href="/cap/sysInfo.jsp?station=636JP">636JP</a></td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head2">NAGOYA JP</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head4"><img src="images/redSquare.gif">&nbsp;2016-Aug-23 13:00</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head5">Unavailable</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head6">2004-Jun-09 22:00</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head7">Unavailable</td>
								<tr>
								<tr>
									<td class="tblData" bgcolor="#E0E0E0" headers="head1"><a class="alink" href="/cap/sysInfo.jsp?station=640JP">640JP</a></td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head2">KAWAGUCHIKO JP</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head4"><img src="images/redSquare.gif">&nbsp;2016-Aug-23 13:00</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head5">Unavailable</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head6">2004-Jun-09 22:00</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head7">Unavailable</td>
								<tr>
								<tr>
									<td class="tblData" bgcolor="#FFFFFF" headers="head1"><a class="alink" href="/cap/sysInfo.jsp?station=656JP">656JP</a></td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head2">SHIZUOKA JP</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head4"><img src="images/redSquare.gif">&nbsp;2016-Aug-23 13:00</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head5">Unavailable</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head6">2004-Jun-09 23:00</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head7">Unavailable</td>
								<tr>
								<tr>
									<td class="tblData" bgcolor="#E0E0E0" headers="head1"><a class="alink" href="/cap/sysInfo.jsp?station=663JP">663JP</a></td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head2">OWASE JP</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head4"><img src="images/redSquare.gif">&nbsp;2016-Aug-23 13:00</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head5">Unavailable</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head6">2004-Jun-09 23:00</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head7">Unavailable</td>
								<tr>
								<tr>
									<td class="tblData" bgcolor="#FFFFFF" headers="head1"><a class="alink" href="/cap/sysInfo.jsp?station=674JP">674JP</a></td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head2">KATSUURA JP</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head4"><img src="images/redSquare.gif">&nbsp;2016-Aug-23 13:00</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head5">Unavailable</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head6">2004-Jun-09 22:00</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head7">Unavailable</td>
								<tr>
								<tr>
									<td class="tblData" bgcolor="#E0E0E0" headers="head1"><a class="alink" href="/cap/sysInfo.jsp?station=678JP">678JP</a></td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head2">ICHIKI JP</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head4"><img src="images/redSquare.gif">&nbsp;2016-Aug-23 13:00</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head5">Unavailable</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head6">2004-Jun-09 22:00</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head7">Unavailable</td>
								<tr>
								<tr>
									<td class="tblData" bgcolor="#FFFFFF" headers="head1"><a class="alink" href="/cap/sysInfo.jsp?station=746JP">746JP</a></td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head2">TOTTORI JP</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head4"><img src="images/redSquare.gif">&nbsp;2016-Aug-23 13:00</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head5">Unavailable</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head6">2004-Jun-09 22:00</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head7">Unavailable</td>
								<tr>
								<tr>
									<td class="tblData" bgcolor="#E0E0E0" headers="head1"><a class="alink" href="/cap/sysInfo.jsp?station=755JP">755JP</a></td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head2">HAMADA JP</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head4"><img src="images/redSquare.gif">&nbsp;2016-Aug-23 13:00</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head5">Unavailable</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head6">2004-Jun-09 22:00</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head7">Unavailable</td>
								<tr>
								<tr>
									<td class="tblData" bgcolor="#FFFFFF" headers="head1"><a class="alink" href="/cap/sysInfo.jsp?station=795JP">795JP</a></td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head2">MIHAMA (WAKAYAMA) JP</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head4"><img src="images/redSquare.gif">&nbsp;2016-Aug-23 13:00</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head5">Unavailable</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head6">2004-Jun-09 22:00</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head7">Unavailable</td>
								<tr>
								<tr>
									<td class="tblData" bgcolor="#E0E0E0" headers="head1"><a class="alink" href="/cap/sysInfo.jsp?station=800JP">800JP</a></td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head2">IZUHARA JP</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head4"><img src="images/redSquare.gif">&nbsp;2016-Aug-23 13:00</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head5">Unavailable</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head6">2004-Jun-09 22:00</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head7">Unavailable</td>
								<tr>
								<tr>
									<td class="tblData" bgcolor="#FFFFFF" headers="head1"><a class="alink" href="/cap/sysInfo.jsp?station=805JP">805JP</a></td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head2">HIRADO JP</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head4"><img src="images/redSquare.gif">&nbsp;2016-Aug-23 13:00</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head5">Unavailable</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head6">2004-Jun-09 22:00</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head7">Unavailable</td>
								<tr>
								<tr>
									<td class="tblData" bgcolor="#E0E0E0" headers="head1"><a class="alink" href="/cap/sysInfo.jsp?station=815JP">815JP</a></td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head2">OHITA JP</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head4"><img src="images/redSquare.gif">&nbsp;2016-Aug-23 13:00</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head5">Unavailable</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head6">2004-Jun-09 22:00</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head7">Unavailable</td>
								<tr>
								<tr>
									<td class="tblData" bgcolor="#FFFFFF" headers="head1"><a class="alink" href="/cap/sysInfo.jsp?station=819JP">819JP</a></td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head2">KUMAMOTO JP</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head4"><img src="images/redSquare.gif">&nbsp;2016-Aug-23 13:00</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head5">Unavailable</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head6">2004-Jun-09 22:00</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head7">Unavailable</td>
								<tr>
								<tr>
									<td class="tblData" bgcolor="#E0E0E0" headers="head1"><a class="alink" href="/cap/sysInfo.jsp?station=822JP">822JP</a></td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head2">NOBEOKA JP</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head4"><img src="images/redSquare.gif">&nbsp;2016-Aug-23 13:00</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head5">Unavailable</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head6">2004-Jun-09 22:00</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head7">Unavailable</td>
								<tr>
								<tr>
									<td class="tblData" bgcolor="#FFFFFF" headers="head1"><a class="alink" href="/cap/sysInfo.jsp?station=836JP">836JP</a></td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head2">YAKUSHIMA JP</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head4"><img src="images/redSquare.gif">&nbsp;2016-Aug-23 13:00</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head5">Unavailable</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head6">2004-Jun-09 22:00</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head7">Unavailable</td>
								<tr>
								<tr>
									<td class="tblData" bgcolor="#E0E0E0" headers="head1"><a class="alink" href="/cap/sysInfo.jsp?station=848JP">848JP</a></td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head2">ICHIKI (KAGOSHIMA) JP</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head4"><img src="images/redSquare.gif">&nbsp;2016-Aug-23 13:00</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head5">Unavailable</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head6">2004-Jun-09 22:00</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head7">Unavailable</td>
								<tr>
								<tr>
									<td class="tblData" bgcolor="#FFFFFF" headers="head1"><a class="alink" href="/cap/sysInfo.jsp?station=891JP">891JP</a></td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head2">TAKAMATSU JP</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head4"><img src="images/redSquare.gif">&nbsp;2016-Aug-23 13:00</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head5">Unavailable</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head6">2004-Jun-09 22:00</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head7">Unavailable</td>
								<tr>
								<tr>
									<td class="tblData" bgcolor="#E0E0E0" headers="head1"><a class="alink" href="/cap/sysInfo.jsp?station=893JP">893JP</a></td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head2">KOHCHI JP</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head4"><img src="images/redSquare.gif">&nbsp;2016-Aug-23 13:00</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head5">Unavailable</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head6">2004-Jun-09 22:00</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head7">Unavailable</td>
								<tr>
								<tr>
									<td class="tblData" bgcolor="#FFFFFF" headers="head1"><a class="alink" href="/cap/sysInfo.jsp?station=898JP">898JP</a></td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head2">SHIMIZU JP</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head4"><img src="images/redSquare.gif">&nbsp;2016-Aug-23 13:00</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head5">Unavailable</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head6">2004-Jun-09 22:00</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head7">Unavailable</td>
								<tr>
								<tr>
									<td class="tblData" bgcolor="#E0E0E0" headers="head1"><a class="alink" href="/cap/sysInfo.jsp?station=909JP">909JP</a></td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head2">NAZE JP</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head4"><img src="images/redSquare.gif">&nbsp;2016-Aug-23 13:00</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head5">Unavailable</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head6">2004-Jun-09 23:00</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head7">Unavailable</td>
								<tr>
								<tr>
									<td class="tblData" bgcolor="#FFFFFF" headers="head1"><a class="alink" href="/cap/sysInfo.jsp?station=912JP">912JP</a></td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head2">YONAGUNI JP</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head4"><img src="images/redSquare.gif">&nbsp;2016-Aug-23 13:00</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head5">Unavailable</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head6">2004-Jun-09 22:00</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head7">Unavailable</td>
								<tr>
								<tr>
									<td class="tblData" bgcolor="#E0E0E0" headers="head1"><a class="alink" href="/cap/sysInfo.jsp?station=945JP">945JP</a></td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head2">MINAMIDAITO JP</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head4"><img src="images/redSquare.gif">&nbsp;2016-Aug-23 13:00</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head5">Unavailable</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head6">2004-Jun-09 22:00</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head7">Unavailable</td>
								<tr>
								<tr>
									<td class="tblData" bgcolor="#FFFFFF" headers="head1"><a class="alink" href="/cap/sysInfo.jsp?station=ERKQC">ERKQC</a></td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head2">EUREKA, QC</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head4"><img src="images/redSquare.gif">&nbsp;2020-Jul-15 19:00</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head5">Unavailable</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head6">2013-Oct-19 01:00</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head7">Unavailable</td>
								<tr>
								<tr>
									<td class="tblData" bgcolor="#E0E0E0" headers="head1"><a class="alink" href="/cap/sysInfo.jsp?station=HK1CN">HK1CN</a></td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head2">HONG KONG CHINA</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head4"><img src="images/redSquare.gif">&nbsp;2016-Aug-23 14:00</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head5">Unavailable</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head6">2004-Nov-30 23:00</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head7">Unavailable</td>
								<tr>
								<tr>
									<td class="tblData" bgcolor="#FFFFFF" headers="head1"><a class="alink" href="/cap/sysInfo.jsp?station=HRDHI">HRDHI</a></td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head2">HAWI  BIG ISLAND, HI</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head4"><img src="images/redSquare.gif">&nbsp;2020-Jan-01 00:00</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head5">Unavailable</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head6">1999-Nov-30 00:10</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head7">Unavailable</td>
								<tr>
								<tr>
									<td class="tblData" bgcolor="#E0E0E0" headers="head1"><a class="alink" href="/cap/sysInfo.jsp?station=KATHI">KATHI</a></td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head2">KANEOHE, OAHU, HI</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head4"><img src="images/redSquare.gif">&nbsp;2020-Jan-01 00:00</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head5">Unavailable</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head6">1999-Nov-30 00:10</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head7">Unavailable</td>
								<tr>
								<tr>
									<td class="tblData" bgcolor="#FFFFFF" headers="head1"><a class="alink" href="/cap/sysInfo.jsp?station=KHWHI">KHWHI</a></td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head2">KAHEAWA (SODAR), HI</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head4"><img src="images/redSquare.gif">&nbsp;2016-Mar-24 18:50</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head5">Unavailable</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head6">2012-Aug-08 23:20</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head7">Unavailable</td>
								<tr>
								<tr>
									<td class="tblData" bgcolor="#E0E0E0" headers="head1"><a class="alink" href="/cap/sysInfo.jsp?station=NAAHI">NAAHI</a></td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head2">NAALEHU (SODAR), HI</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head4"><img src="images/redSquare.gif">&nbsp;2017-Dec-07 22:30</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head5">Unavailable</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head6">1999-Nov-30 00:10</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head7">Unavailable</td>
								<tr>
								<tr>
									<td class="tblData" bgcolor="#FFFFFF" headers="head1"><a class="alink" href="/cap/sysInfo.jsp?station=PRAPE">PRAPE</a></td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head2">PIURA (2) PERU</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head4"><img src="images/redSquare.gif">&nbsp;2007-Jan-27 08:00</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head5">Unavailable</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head6">2002-Dec-02 01:00</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head7">Unavailable</td>
								<tr>
								<tr>
									<td class="tblData" bgcolor="#E0E0E0" headers="head1"><a class="alink" href="/cap/sysInfo.jsp?station=PUUHI">PUUHI</a></td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head2">PUUNENE, HI</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head4"><img src="images/redSquare.gif">&nbsp;2017-Jun-21 18:30</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head5">Unavailable</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head6">1999-Nov-30 00:10</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head7">Unavailable</td>
								<tr>
								<tr>
									<td class="tblData" bgcolor="#FFFFFF" headers="head1"><a class="alink" href="/cap/sysInfo.jsp?station=SPTHI">SPTHI</a></td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head2">SOUTH POINT (SODAR), HI</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head4"><img src="images/redSquare.gif">&nbsp;2019-Dec-31 19:30</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head5">Unavailable</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head6">1999-Nov-30 00:10</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head7">Unavailable</td>
								<tr>
								<tr>
									<td class="tblData" bgcolor="#E0E0E0" headers="head1"><a class="alink" href="/cap/sysInfo.jsp?station=TBWHI">TBWHI</a></td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head2">TURTLE BAY, HI</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head4"><img src="images/redSquare.gif">&nbsp;2019-Sep-19 18:30</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head5">Unavailable</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head6">1999-Nov-30 00:10</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head7">Unavailable</td>
								<tr>
								<tr>
									<td class="tblData" bgcolor="#FFFFFF" headers="head1"><a class="alink" href="/cap/sysInfo.jsp?station=WAEHI">WAEHI</a></td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head2">WAENA (SODAR), HI</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head4"><img src="images/redSquare.gif">&nbsp;2019-Feb-16 07:00</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head5">Unavailable</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head6">1999-Nov-30 00:10</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head7">Unavailable</td>
								<tr>

							</table>
<span style="font-family: Arial, Helvetica, sans-serif; font-weight: bold;">International Operational Site Count: 42</span>							
							<br><br>
							
							
							<table width="100%" border="0"><tr>
								<td width="50%"><h2><a name="operStn">Decommissioned CAP Station Status</a></h2></td>
								<td align="right">
									<table>
										<tr nowrap>
											<td colspan="5" align="center">Latest Available Data</td>
										</tr>
										<tr>
											<td bgcolor="#00FF00" align="center">Current</td>
											<td bgcolor="#FFFF00" align="center">1-3 Hr</td>
											<td bgcolor="#00FFFF" align="center">3-24 Hr</td>
											<td bgcolor="#0000FF"  align="center"style="color: White;">24-72 Hr</td>
											<td bgcolor="#FF0000" align="center">>72 Hr</td>
										</tr>
										<tr nowrap>
											<td align="center"><img src="images/greenStar.gif" alt="Green Start - Current Data" title="Current Data"></td>
											<td align="center"><img src="images/yellowTri.gif" alt="Yellow Triangle - No data since one to three hours ago" title="No data since one to three hours ago"></td>
											<td align="center"><img src="images/cyanTri.gif" alt="Cyan Triangle - No data since three to 24 hours ago" title="No data since three to 24 hours ago"></td>
											<td align="center"><img src="images/blueDot.gif" alt="Blue Circle - No data since 24 to 72 hours ago" title="No data since 24 to 72 hours ago"></td>
											<td align="center"><img src="images/redSquare.gif" alt="Red Square - No data in more than 72 hours" title="No data in more than 72 hours"></td>
										</tr>
									</table>

								</td>
							</tr>
							</table>
							<table border="0">
								<tr>
									<!--th id="head0" class="tblHead">#</th-->
									<th id="head1" class="tblHead">Site ID</th>
									<th id="head2" class="tblHead">Site Location</th>
									<!--th id="head3" class="tblHead">Status</th-->
									<th id="head4" class="tblHead">Latest Wind Data</th>
									<th id="head5" class="tblHead">Latest RASS Data</th>
									<th id="head6" class="tblHead">Oldest Wind Data</th>
									<th id="head7" class="tblHead">Oldest RASS Data</th>
								</tr>
								<tr>
									<td class="tblData" bgcolor="#E0E0E0" headers="head1"><a class="alink" href="/cap/sysInfo.jsp?station=264WA">264WA</a></td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head2">PLYMOUTH, WA</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head4">Unavailable</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head5">Unavailable</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head6">Unavailable</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head7">Unavailable</td>
								<tr>
								<tr>
									<td class="tblData" bgcolor="#FFFFFF" headers="head1"><a class="alink" href="/cap/sysInfo.jsp?station=343OR">343OR</a></td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head2">FAIRBANKS, OR</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head4"><img src="images/redSquare.gif">&nbsp;2016-Dec-03 02:30</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head5">Unavailable</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head6">2015-Oct-26 19:00</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head7">Unavailable</td>
								<tr>
								<tr>
									<td class="tblData" bgcolor="#E0E0E0" headers="head1"><a class="alink" href="/cap/sysInfo.jsp?station=400OR">400OR</a></td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head2">ODELL, OR</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head4"><img src="images/redSquare.gif">&nbsp;2016-Apr-09 06:40</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head5">Unavailable</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head6">2016-Jan-27 05:30</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head7">Unavailable</td>
								<tr>
								<tr>
									<td class="tblData" bgcolor="#FFFFFF" headers="head1"><a class="alink" href="/cap/sysInfo.jsp?station=400WA">400WA</a></td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head2">PLYMOUTH</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head4">Unavailable</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head5">Unavailable</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head6">Unavailable</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head7">Unavailable</td>
								<tr>
								<tr>
									<td class="tblData" bgcolor="#E0E0E0" headers="head1"><a class="alink" href="/cap/sysInfo.jsp?station=ANLFN">ANLFN</a></td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head2">PLACE HOLDER FOR ANL DATA</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head4">Unavailable</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head5">Unavailable</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head6">Unavailable</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head7">Unavailable</td>
								<tr>
								<tr>
									<td class="tblData" bgcolor="#FFFFFF" headers="head1"><a class="alink" href="/cap/sysInfo.jsp?station=BACCO">BACCO</a></td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head2">ERIE (3 GHZ)</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head4">Unavailable</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head5">Unavailable</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head6">Unavailable</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head7">Unavailable</td>
								<tr>
								<tr>
									<td class="tblData" bgcolor="#E0E0E0" headers="head1"><a class="alink" href="/cap/sysInfo.jsp?station=BBBCA">BBBCA</a></td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head2">BODEGA BAY, CA (449MHZ 1/4 SCALE)</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head4"><img src="images/redSquare.gif">&nbsp;2006-Aug-15 15:00</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head5">Unavailable</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head6">2005-Oct-22 12:00</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head7">Unavailable</td>
								<tr>
								<tr>
									<td class="tblData" bgcolor="#FFFFFF" headers="head1"><a class="alink" href="/cap/sysInfo.jsp?station=BDYTX">BDYTX</a></td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head2">BRADY, TX</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head4"><img src="images/redSquare.gif">&nbsp;2012-Sep-12 14:00</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head5">Unavailable</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head6">2011-Aug-06 23:00</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head7">Unavailable</td>
								<tr>
								<tr>
									<td class="tblData" bgcolor="#E0E0E0" headers="head1"><a class="alink" href="/cap/sysInfo.jsp?station=BF2SD">BF2SD</a></td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head2">BF2SD, SD(SODAR)</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head4"><img src="images/redSquare.gif">&nbsp;2012-Oct-29 22:00</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head5">Unavailable</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head6">2012-Mar-20 22:10</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head7">Unavailable</td>
								<tr>
								<tr>
									<td class="tblData" bgcolor="#FFFFFF" headers="head1"><a class="alink" href="/cap/sysInfo.jsp?station=BFLSD">BFLSD</a></td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head2">BUFFALO, SD</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head4"><img src="images/redSquare.gif">&nbsp;2012-Sep-11 14:00</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head5"><img src="images/redSquare.gif">&nbsp;2012-Sep-11 14:00</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head6">2011-Jul-06 03:00</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head7">2011-Jul-06 03:00</td>
								<tr>
								<tr>
									<td class="tblData" bgcolor="#E0E0E0" headers="head1"><a class="alink" href="/cap/sysInfo.jsp?station=BHBME">BHBME</a></td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head2">BAR HARBOR ME</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head4"><img src="images/redSquare.gif">&nbsp;2004-Sep-12 17:00</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head5"><img src="images/redSquare.gif">&nbsp;2004-Sep-12 17:00</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head6">2004-Jul-13 16:00</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head7">2004-Jul-13 17:00</td>
								<tr>
								<tr>
									<td class="tblData" bgcolor="#FFFFFF" headers="head1"><a class="alink" href="/cap/sysInfo.jsp?station=BHMTX">BHMTX</a></td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head2">BRENHAM, TX</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head4"><img src="images/redSquare.gif">&nbsp;2006-Sep-26 20:00</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head5"><img src="images/redSquare.gif">&nbsp;2006-Sep-26 19:00</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head6">2006-Jul-13 23:00</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head7">2006-Jul-13 23:00</td>
								<tr>
								<tr>
									<td class="tblData" bgcolor="#E0E0E0" headers="head1"><a class="alink" href="/cap/sysInfo.jsp?station=BJYNV">BJYNV</a></td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head2">BUSTER JANGLE YANKEE NV</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head4"><img src="images/redSquare.gif">&nbsp;2005-Jan-18 22:00</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head5"><img src="images/redSquare.gif">&nbsp;2005-Jan-24 17:00</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head6">2002-Oct-21 01:00</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head7">2004-Aug-31 22:30</td>
								<tr>
								<tr>
									<td class="tblData" bgcolor="#FFFFFF" headers="head1"><a class="alink" href="/cap/sysInfo.jsp?station=BKFCA">BKFCA</a></td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head2">BAKERSFIELD CA</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head4"><img src="images/redSquare.gif">&nbsp;2010-Sep-14 20:00</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head5"><img src="images/redSquare.gif">&nbsp;2010-Sep-14 20:00</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head6">1999-Dec-08 05:00</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head7">2010-Apr-26 17:00</td>
								<tr>
								<tr>
									<td class="tblData" bgcolor="#E0E0E0" headers="head1"><a class="alink" href="/cap/sysInfo.jsp?station=BRZ19">BRZ19</a></td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head2">BRAZOS A19 (GULF OF MEXICO)</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head4"><img src="images/redSquare.gif">&nbsp;2006-Nov-09 16:00</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head5"><img src="images/redSquare.gif">&nbsp;2006-Nov-09 08:00</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head6">2005-Oct-20 20:00</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head7">2005-Oct-20 20:00</td>
								<tr>
								<tr>
									<td class="tblData" bgcolor="#FFFFFF" headers="head1"><a class="alink" href="/cap/sysInfo.jsp?station=BVLTX">BVLTX</a></td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head2">BEEVILLE, TX</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head4"><img src="images/redSquare.gif">&nbsp;2006-Oct-19 14:00</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head5"><img src="images/redSquare.gif">&nbsp;2006-Oct-19 14:00</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head6">2005-Jun-07 20:00</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head7">2005-Jun-07 20:00</td>
								<tr>
								<tr>
									<td class="tblData" bgcolor="#E0E0E0" headers="head1"><a class="alink" href="/cap/sysInfo.jsp?station=CBENS">CBENS</a></td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head2">CHEBOGUE NS</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head4"><img src="images/redSquare.gif">&nbsp;2004-Aug-16 13:00</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head5"><img src="images/redSquare.gif">&nbsp;2004-Aug-15 00:00</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head6">2004-Jul-13 17:00</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head7">2004-Jul-13 17:00</td>
								<tr>
								<tr>
									<td class="tblData" bgcolor="#FFFFFF" headers="head1"><a class="alink" href="/cap/sysInfo.jsp?station=CC2TX">CC2TX</a></td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head2">COLORADO CITY (SODAR)</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head4"><img src="images/redSquare.gif">&nbsp;2012-Sep-10 23:30</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head5">Unavailable</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head6">2011-Sep-29 04:00</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head7">Unavailable</td>
								<tr>
								<tr>
									<td class="tblData" bgcolor="#E0E0E0" headers="head1"><a class="alink" href="/cap/sysInfo.jsp?station=CCDLA">CCDLA</a></td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head2">COCODRIE LA (LUMCON)</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head4"><img src="images/redSquare.gif">&nbsp;2012-Jan-19 16:00</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head5"><img src="images/redSquare.gif">&nbsp;2012-Jan-19 16:55</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head6">2004-Nov-09 01:00</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head7">2004-Nov-08 08:00</td>
								<tr>
								<tr>
									<td class="tblData" bgcolor="#FFFFFF" headers="head1"><a class="alink" href="/cap/sysInfo.jsp?station=CCDNH">CCDNH</a></td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head2">CONCORD NH</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head4"><img src="images/redSquare.gif">&nbsp;2005-May-10 13:00</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head5"><img src="images/redSquare.gif">&nbsp;2005-May-10 13:00</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head6">2002-Jun-20 02:00</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head7">2004-Jun-09 23:00</td>
								<tr>
								<tr>
									<td class="tblData" bgcolor="#E0E0E0" headers="head1"><a class="alink" href="/cap/sysInfo.jsp?station=CCLCA">CCLCA</a></td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head2">CHOWCHILLA CA</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head4"><img src="images/redSquare.gif">&nbsp;2011-Mar-15 22:00</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head5"><img src="images/redSquare.gif">&nbsp;2011-Mar-15 21:00</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head6">2000-Oct-11 21:00</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head7">2004-Jun-09 23:00</td>
								<tr>
								<tr>
									<td class="tblData" bgcolor="#FFFFFF" headers="head1"><a class="alink" href="/cap/sysInfo.jsp?station=CJKFL">CJKFL</a></td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head2">CUDJOE KEY, FL (TARS 449)</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head4"><img src="images/redSquare.gif">&nbsp;2012-May-25 01:00</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head5">Unavailable</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head6">2006-Dec-13 00:00</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head7">Unavailable</td>
								<tr>
								<tr>
									<td class="tblData" bgcolor="#E0E0E0" headers="head1"><a class="alink" href="/cap/sysInfo.jsp?station=CLETX">CLETX</a></td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head2">CLEBURNE TX</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head4"><img src="images/redSquare.gif">&nbsp;2020-Mar-04 05:00</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head5">Unavailable</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head6">2003-Jun-11 07:00</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head7">Unavailable</td>
								<tr>
								<tr>
									<td class="tblData" bgcolor="#FFFFFF" headers="head1"><a class="alink" href="/cap/sysInfo.jsp?station=CLSTX">CLSTX</a></td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head2">COLLEGE STATION,TX</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head4"><img src="images/redSquare.gif">&nbsp;2013-Oct-23 21:00</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head5">Unavailable</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head6">2013-Aug-28 00:00</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head7">Unavailable</td>
								<tr>
								<tr>
									<td class="tblData" bgcolor="#E0E0E0" headers="head1"><a class="alink" href="/cap/sysInfo.jsp?station=COCTX">COCTX</a></td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head2">COLORADO CITY, TX</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head4"><img src="images/redSquare.gif">&nbsp;2012-Sep-10 14:00</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head5"><img src="images/redSquare.gif">&nbsp;2012-Sep-10 16:00</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head6">2011-Jul-29 02:00</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head7">2011-Oct-27 03:00</td>
								<tr>
								<tr>
									<td class="tblData" bgcolor="#FFFFFF" headers="head1"><a class="alink" href="/cap/sysInfo.jsp?station=CPTTX">CPTTX</a></td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head2">CLEBURNE, TX (SODAR)</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head4"><img src="images/redSquare.gif">&nbsp;2012-Nov-27 13:30</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head5">Unavailable</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head6">2010-Oct-29 00:20</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head7">Unavailable</td>
								<tr>
								<tr>
									<td class="tblData" bgcolor="#E0E0E0" headers="head1"><a class="alink" href="/cap/sysInfo.jsp?station=CXECA">CXECA</a></td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head2">CALEXICO, CA</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head4"><img src="images/redSquare.gif">&nbsp;2007-Mar-06 03:30</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head5"><img src="images/redSquare.gif">&nbsp;2007-Mar-06 01:00</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head6">2005-Sep-26 02:00</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head7">2007-Feb-28 22:00</td>
								<tr>
								<tr>
									<td class="tblData" bgcolor="#FFFFFF" headers="head1"><a class="alink" href="/cap/sysInfo.jsp?station=CXXKR">CXXKR</a></td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head2">CHRISTMAS ISLAND KIRIBATI</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head4"><img src="images/redSquare.gif">&nbsp;2001-Sep-20 02:00</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head5">Unavailable</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head6">2001-May-01 01:00</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head7">Unavailable</td>
								<tr>
								<tr>
									<td class="tblData" bgcolor="#E0E0E0" headers="head1"><a class="alink" href="/cap/sysInfo.jsp?station=DEMNM">DEMNM</a></td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head2">DEMMING, NM (TARS 449MHZ)</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head4"><img src="images/redSquare.gif">&nbsp;2015-Mar-16 19:00</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head5">Unavailable</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head6">2006-Feb-02 09:00</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head7">Unavailable</td>
								<tr>
								<tr>
									<td class="tblData" bgcolor="#FFFFFF" headers="head1"><a class="alink" href="/cap/sysInfo.jsp?station=DHSNM">DHSNM</a></td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head2">DEADHORSE, NM</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head4"><img src="images/redSquare.gif">&nbsp;2005-Sep-28 04:00</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head5">Unavailable</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head6">2005-Jul-31 10:00</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head7">Unavailable</td>
								<tr>
								<tr>
									<td class="tblData" bgcolor="#E0E0E0" headers="head1"><a class="alink" href="/cap/sysInfo.jsp?station=DS2SD">DS2SD</a></td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head2">DE SMET, SD (SODAR)</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head4"><img src="images/redSquare.gif">&nbsp;2012-Oct-29 22:00</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head5">Unavailable</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head6">2012-Mar-22 00:10</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head7">Unavailable</td>
								<tr>
								<tr>
									<td class="tblData" bgcolor="#FFFFFF" headers="head1"><a class="alink" href="/cap/sysInfo.jsp?station=DSTSD">DSTSD</a></td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head2">DE SMET, SD</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head4"><img src="images/redSquare.gif">&nbsp;2012-Sep-06 13:00</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head5"><img src="images/redSquare.gif">&nbsp;2012-Sep-06 13:00</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head6">2011-Jul-06 03:00</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head7">2011-Jul-06 03:00</td>
								<tr>
								<tr>
									<td class="tblData" bgcolor="#E0E0E0" headers="head1"><a class="alink" href="/cap/sysInfo.jsp?station=EFDTX">EFDTX</a></td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head2">HOUSTON (ELLINGTON FIELD) TX</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head4"><img src="images/redSquare.gif">&nbsp;2005-May-03 15:00</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head5">Unavailable</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head6">1997-Oct-15 08:00</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head7">Unavailable</td>
								<tr>
								<tr>
									<td class="tblData" bgcolor="#FFFFFF" headers="head1"><a class="alink" href="/cap/sysInfo.jsp?station=EGPTX">EGPTX</a></td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head2">EAGLE PASS, TX (TARS 449MHZ)</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head4"><img src="images/redSquare.gif">&nbsp;2014-May-12 00:00</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head5">Unavailable</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head6">2006-May-31 01:00</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head7">Unavailable</td>
								<tr>
								<tr>
									<td class="tblData" bgcolor="#E0E0E0" headers="head1"><a class="alink" href="/cap/sysInfo.jsp?station=EPKCO">EPKCO</a></td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head2">ESTES PARK CO</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head4"><img src="images/redSquare.gif">&nbsp;2010-Apr-13 14:00</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head5">Unavailable</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head6">2006-May-02 15:00</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head7">Unavailable</td>
								<tr>
								<tr>
									<td class="tblData" bgcolor="#FFFFFF" headers="head1"><a class="alink" href="/cap/sysInfo.jsp?station=ERECO">ERECO</a></td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head2">ERIE, CO</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head4"><img src="images/redSquare.gif">&nbsp;2008-Sep-03 17:00</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head5">Unavailable</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head6">2008-Jul-16 05:00</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head7">Unavailable</td>
								<tr>
								<tr>
									<td class="tblData" bgcolor="#E0E0E0" headers="head1"><a class="alink" href="/cap/sysInfo.jsp?station=ERKCA">ERKCA</a></td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head2">EUREKA CA</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head4"><img src="images/redSquare.gif">&nbsp;2003-Apr-08 22:00</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head5"><img src="images/redSquare.gif">&nbsp;2003-Apr-08 22:00</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head6">1997-Nov-20 21:00</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head7">1997-Nov-20 21:00</td>
								<tr>
								<tr>
									<td class="tblData" bgcolor="#FFFFFF" headers="head1"><a class="alink" href="/cap/sysInfo.jsp?station=ETOMX">ETOMX</a></td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head2">ESTACION OBISPO MEXICO (915MHZ)</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head4"><img src="images/redSquare.gif">&nbsp;2006-Sep-16 17:00</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head5"><img src="images/redSquare.gif">&nbsp;2006-Sep-16 17:00</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head6">2004-Jul-14 16:00</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head7">2004-Jul-15 20:00</td>
								<tr>
								<tr>
									<td class="tblData" bgcolor="#E0E0E0" headers="head1"><a class="alink" href="/cap/sysInfo.jsp?station=EWCNC">EWCNC</a></td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head2">NEW BERN (3GHZ), NC</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head4">Unavailable</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head5">Unavailable</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head6">Unavailable</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head7">Unavailable</td>
								<tr>
								<tr>
									<td class="tblData" bgcolor="#FFFFFF" headers="head1"><a class="alink" href="/cap/sysInfo.jsp?station=FHAAZ">FHAAZ</a></td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head2">FT. HUACHUCA, AZ (TARS 449MHZ)</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head4"><img src="images/redSquare.gif">&nbsp;2019-Jan-02 16:00</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head5">Unavailable</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head6">2005-Oct-04 17:00</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head7">Unavailable</td>
								<tr>
								<tr>
									<td class="tblData" bgcolor="#E0E0E0" headers="head1"><a class="alink" href="/cap/sysInfo.jsp?station=FHCAZ">FHCAZ</a></td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head2">FT HUACHUCA AZ</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head4"><img src="images/redSquare.gif">&nbsp;2005-Apr-04 14:05</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head5">Unavailable</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head6">2001-Nov-20 18:15</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head7">Unavailable</td>
								<tr>
								<tr>
									<td class="tblData" bgcolor="#FFFFFF" headers="head1"><a class="alink" href="/cap/sysInfo.jsp?station=FMEMD">FMEMD</a></td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head2">FT. MEADE MD</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head4"><img src="images/redSquare.gif">&nbsp;2004-Sep-08 13:00</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head5"><img src="images/redSquare.gif">&nbsp;2004-Sep-08 13:00</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head6">1998-Jul-30 00:00</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head7">2004-Jun-09 23:00</td>
								<tr>
								<tr>
									<td class="tblData" bgcolor="#E0E0E0" headers="head1"><a class="alink" href="/cap/sysInfo.jsp?station=FTHAZ">FTHAZ</a></td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head2">FT HUACHUCA AZ</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head4"><img src="images/redSquare.gif">&nbsp;2005-Apr-02 02:00</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head5">Unavailable</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head6">2001-Sep-13 12:30</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head7">Unavailable</td>
								<tr>
								<tr>
									<td class="tblData" bgcolor="#FFFFFF" headers="head1"><a class="alink" href="/cap/sysInfo.jsp?station=GDNCO">GDNCO</a></td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head2">GOLDEN CO</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head4"><img src="images/redSquare.gif">&nbsp;2014-Dec-11 01:00</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head5">Unavailable</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head6">2014-Aug-26 05:00</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head7">Unavailable</td>
								<tr>
								<tr>
									<td class="tblData" bgcolor="#E0E0E0" headers="head1"><a class="alink" href="/cap/sysInfo.jsp?station=GLACA">GLACA</a></td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head2">GOLETA CA</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head4"><img src="images/redSquare.gif">&nbsp;2003-Apr-14 17:00</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head5"><img src="images/redSquare.gif">&nbsp;2003-Apr-14 17:00</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head6">1996-Nov-20 01:00</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head7">1996-Nov-20 00:00</td>
								<tr>
								<tr>
									<td class="tblData" bgcolor="#FFFFFF" headers="head1"><a class="alink" href="/cap/sysInfo.jsp?station=GLBCA">GLBCA</a></td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head2">GOLETA, CA (449 MHZ 1/4 SCALE)</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head4"><img src="images/redSquare.gif">&nbsp;2008-Sep-10 00:00</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head5"><img src="images/redSquare.gif">&nbsp;2008-Sep-10 00:00</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head6">2005-Oct-22 12:00</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head7">2005-Oct-22 12:00</td>
								<tr>
								<tr>
									<td class="tblData" bgcolor="#E0E0E0" headers="head1"><a class="alink" href="/cap/sysInfo.jsp?station=GMNCA">GMNCA</a></td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head2">GORMAN, CA</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head4"><img src="images/redSquare.gif">&nbsp;2010-Nov-03 20:00</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head5"><img src="images/redSquare.gif">&nbsp;2010-Sep-15 00:00</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head6">2010-Apr-29 18:00</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head7">2010-Apr-29 17:00</td>
								<tr>
								<tr>
									<td class="tblData" bgcolor="#FFFFFF" headers="head1"><a class="alink" href="/cap/sysInfo.jsp?station=GPCGA">GPCGA</a></td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head2">ATLANTA GA</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head4"><img src="images/redSquare.gif">&nbsp;2002-Feb-01 00:00</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head5"><img src="images/redSquare.gif">&nbsp;2002-Jan-25 00:00</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head6">2001-Jun-30 00:00</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head7">2001-Dec-31 00:00</td>
								<tr>
								<tr>
									<td class="tblData" bgcolor="#E0E0E0" headers="head1"><a class="alink" href="/cap/sysInfo.jsp?station=GVYCA">GVYCA</a></td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head2">GRASS VALLEY CA</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head4"><img src="images/redSquare.gif">&nbsp;2005-Apr-02 21:00</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head5"><img src="images/redSquare.gif">&nbsp;2005-Apr-02 21:00</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head6">2000-May-25 00:00</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head7">2004-Dec-04 07:00</td>
								<tr>
								<tr>
									<td class="tblData" bgcolor="#FFFFFF" headers="head1"><a class="alink" href="/cap/sysInfo.jsp?station=GYXME">GYXME</a></td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head2">GRAY ME</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head4"><img src="images/redSquare.gif">&nbsp;2004-Mar-24 00:00</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head5"><img src="images/redSquare.gif">&nbsp;2004-Mar-24 00:00</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head6">2002-Oct-31 12:00</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head7">2004-Mar-24 00:00</td>
								<tr>
								<tr>
									<td class="tblData" bgcolor="#E0E0E0" headers="head1"><a class="alink" href="/cap/sysInfo.jsp?station=HDRHI">HDRHI</a></td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head2">HAWI  BIG ISLAND, HI</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head4">Unavailable</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head5">Unavailable</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head6">Unavailable</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head7">Unavailable</td>
								<tr>
								<tr>
									<td class="tblData" bgcolor="#FFFFFF" headers="head1"><a class="alink" href="/cap/sysInfo.jsp?station=HSCNV">HSCNV</a></td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head2">HAZMAT SPILL CENTER NV</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head4"><img src="images/redSquare.gif">&nbsp;2006-Nov-16 15:30</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head5"><img src="images/redSquare.gif">&nbsp;2008-May-02 00:30</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head6">2003-Jan-12 16:30</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head7">2004-Jul-13 17:00</td>
								<tr>
								<tr>
									<td class="tblData" bgcolor="#E0E0E0" headers="head1"><a class="alink" href="/cap/sysInfo.jsp?station=HVETX">HVETX</a></td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head2">HUNTSVILLE TX</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head4"><img src="images/redSquare.gif">&nbsp;2006-Oct-27 01:00</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head5"><img src="images/redSquare.gif">&nbsp;2006-Oct-27 01:00</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head6">2005-Jun-22 22:00</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head7">2005-Jun-22 22:00</td>
								<tr>
								<tr>
									<td class="tblData" bgcolor="#FFFFFF" headers="head1"><a class="alink" href="/cap/sysInfo.jsp?station=JTNTX">JTNTX</a></td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head2">JAYTON, TX (SODAR)</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head4"><img src="images/redSquare.gif">&nbsp;2011-Dec-03 22:50</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head5">Unavailable</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head6">2011-Dec-03 22:50</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head7">Unavailable</td>
								<tr>
								<tr>
									<td class="tblData" bgcolor="#E0E0E0" headers="head1"><a class="alink" href="/cap/sysInfo.jsp?station=JY2MN">JY2MN</a></td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head2">SAINT JAMES, MN (SODAR)</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head4"><img src="images/redSquare.gif">&nbsp;2012-Aug-31 12:50</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head5">Unavailable</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head6">2011-Sep-12 19:00</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head7">Unavailable</td>
								<tr>
								<tr>
									<td class="tblData" bgcolor="#FFFFFF" headers="head1"><a class="alink" href="/cap/sysInfo.jsp?station=JYGMN">JYGMN</a></td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head2">SAINT JAMES, MN</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head4"><img src="images/redSquare.gif">&nbsp;2012-Sep-05 15:00</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head5"><img src="images/redSquare.gif">&nbsp;2012-Sep-05 15:00</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head6">2011-Jul-06 03:00</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head7">2011-Jul-06 03:00</td>
								<tr>
								<tr>
									<td class="tblData" bgcolor="#E0E0E0" headers="head1"><a class="alink" href="/cap/sysInfo.jsp?station=LD2ND">LD2ND</a></td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head2">LEEDS, ND (SODAR)</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head4"><img src="images/redSquare.gif">&nbsp;2012-Aug-29 16:10</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head5">Unavailable</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head6">2011-Sep-12 19:00</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head7">Unavailable</td>
								<tr>
								<tr>
									<td class="tblData" bgcolor="#FFFFFF" headers="head1"><a class="alink" href="/cap/sysInfo.jsp?station=LDSND">LDSND</a></td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head2">LEEDS, ND</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head4"><img src="images/redSquare.gif">&nbsp;2012-Sep-19 15:00</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head5"><img src="images/redSquare.gif">&nbsp;2012-Sep-19 15:00</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head6">2011-Jul-06 02:00</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head7">2011-Jul-06 02:00</td>
								<tr>
								<tr>
									<td class="tblData" bgcolor="#E0E0E0" headers="head1"><a class="alink" href="/cap/sysInfo.jsp?station=LHSCA">LHSCA</a></td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head2">LOST HILLS CA</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head4"><img src="images/redSquare.gif">&nbsp;2010-Sep-15 08:00</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head5"><img src="images/redSquare.gif">&nbsp;2010-Sep-15 08:00</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head6">1999-Dec-21 18:00</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head7">2003-Dec-23 18:00</td>
								<tr>
								<tr>
									<td class="tblData" bgcolor="#FFFFFF" headers="head1"><a class="alink" href="/cap/sysInfo.jsp?station=LIVCA">LIVCA</a></td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head2">LIVERMORE(2) CA</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head4"><img src="images/redSquare.gif">&nbsp;2006-Dec-01 00:00</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head5"><img src="images/redSquare.gif">&nbsp;2006-Dec-01 00:00</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head6">2006-Aug-18 19:00</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head7">2006-Aug-18 19:00</td>
								<tr>
								<tr>
									<td class="tblData" bgcolor="#E0E0E0" headers="head1"><a class="alink" href="/cap/sysInfo.jsp?station=LJSPR">LJSPR</a></td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head2">PUERTO RICO (TARS 449MHZ)</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head4"><img src="images/redSquare.gif">&nbsp;2015-Jul-28 03:00</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head5">Unavailable</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head6">2007-Jul-13 12:00</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head7">Unavailable</td>
								<tr>
								<tr>
									<td class="tblData" bgcolor="#FFFFFF" headers="head1"><a class="alink" href="/cap/sysInfo.jsp?station=LVWTX">LVWTX</a></td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head2">LONGVIEW TX</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head4"><img src="images/redSquare.gif">&nbsp;2007-Oct-02 16:00</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head5"><img src="images/redSquare.gif">&nbsp;2007-Oct-02 16:00</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head6">2005-Jun-28 18:00</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head7">2005-Jun-28 18:00</td>
								<tr>
								<tr>
									<td class="tblData" bgcolor="#E0E0E0" headers="head1"><a class="alink" href="/cap/sysInfo.jsp?station=MBAOR">MBAOR</a></td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head2">MCKENZIE BRIDGE OR</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head4"><img src="images/redSquare.gif">&nbsp;2002-Jan-13 17:00</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head5"><img src="images/redSquare.gif">&nbsp;2002-Jan-13 16:00</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head6">2001-Nov-20 21:00</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head7">2001-Nov-20 20:00</td>
								<tr>
								<tr>
									<td class="tblData" bgcolor="#FFFFFF" headers="head1"><a class="alink" href="/cap/sysInfo.jsp?station=MBGSD">MBGSD</a></td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head2">MOBRIDGE, SD</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head4"><img src="images/redSquare.gif">&nbsp;2012-Aug-29 16:00</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head5"><img src="images/redSquare.gif">&nbsp;2012-Aug-29 16:00</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head6">2011-Aug-15 09:00</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head7">2011-Aug-19 23:00</td>
								<tr>
								<tr>
									<td class="tblData" bgcolor="#E0E0E0" headers="head1"><a class="alink" href="/cap/sysInfo.jsp?station=MDWNM">MDWNM</a></td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head2">MIDWAY SITE NM</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head4"><img src="images/redSquare.gif">&nbsp;2004-Nov-03 23:30</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head5"><img src="images/redSquare.gif">&nbsp;2004-May-22 07:30</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head6">2002-Jul-15 16:00</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head7">2004-May-22 07:30</td>
								<tr>
								<tr>
									<td class="tblData" bgcolor="#FFFFFF" headers="head1"><a class="alink" href="/cap/sysInfo.jsp?station=MDYTX">MDYTX</a></td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head2">MOODY, TX</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head4"><img src="images/redSquare.gif">&nbsp;2007-Jun-05 16:00</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head5"><img src="images/redSquare.gif">&nbsp;2007-Jun-05 17:00</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head6">2005-Nov-02 20:00</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head7">2005-Nov-02 20:00</td>
								<tr>
								<tr>
									<td class="tblData" bgcolor="#E0E0E0" headers="head1"><a class="alink" href="/cap/sysInfo.jsp?station=MFATX">MFATX</a></td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head2">MARFA, TX (TARS 449MHZ)</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head4"><img src="images/redSquare.gif">&nbsp;2015-Jun-25 18:00</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head5">Unavailable</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head6">2006-Feb-02 06:00</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head7">Unavailable</td>
								<tr>
								<tr>
									<td class="tblData" bgcolor="#FFFFFF" headers="head1"><a class="alink" href="/cap/sysInfo.jsp?station=MIPPP">MIPPP</a></td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head2">MANUS ISLAND, PNG</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head4"><img src="images/redSquare.gif">&nbsp;2002-Aug-14 23:00</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head5">Unavailable</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head6">2001-May-01 01:00</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head7">Unavailable</td>
								<tr>
								<tr>
									<td class="tblData" bgcolor="#E0E0E0" headers="head1"><a class="alink" href="/cap/sysInfo.jsp?station=MPICA">MPICA</a></td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head2">MARIPOSA, CA</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head4">Unavailable</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head5">Unavailable</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head6">Unavailable</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head7">Unavailable</td>
								<tr>
								<tr>
									<td class="tblData" bgcolor="#FFFFFF" headers="head1"><a class="alink" href="/cap/sysInfo.jsp?station=NBFTX">NBFTX</a></td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head2">NEW BRAUNFELS, TX</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head4"><img src="images/redSquare.gif">&nbsp;2006-Oct-17 13:00</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head5"><img src="images/redSquare.gif">&nbsp;2006-Oct-17 13:00</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head6">2005-Aug-23 05:00</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head7">2005-Aug-22 16:00</td>
								<tr>
								<tr>
									<td class="tblData" bgcolor="#E0E0E0" headers="head1"><a class="alink" href="/cap/sysInfo.jsp?station=NPTOR">NPTOR</a></td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head2">NEWPORT OR</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head4"><img src="images/redSquare.gif">&nbsp;2003-Apr-07 22:00</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head5">Unavailable</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head6">1997-Nov-09 00:00</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head7">Unavailable</td>
								<tr>
								<tr>
									<td class="tblData" bgcolor="#FFFFFF" headers="head1"><a class="alink" href="/cap/sysInfo.jsp?station=NRELW">NRELW</a></td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head2">WFIP TEST FOR NREL</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head4">Unavailable</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head5">Unavailable</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head6">Unavailable</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head7">Unavailable</td>
								<tr>
								<tr>
									<td class="tblData" bgcolor="#E0E0E0" headers="head1"><a class="alink" href="/cap/sysInfo.jsp?station=NRMOK">NRMOK</a></td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head2">NORMAN OK</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head4"><img src="images/redSquare.gif">&nbsp;2004-Jul-16 15:00</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head5"><img src="images/redSquare.gif">&nbsp;2004-Jul-16 14:30</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head6">2003-Jun-03 01:00</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head7">2004-Jun-09 23:00</td>
								<tr>
								<tr>
									<td class="tblData" bgcolor="#FFFFFF" headers="head1"><a class="alink" href="/cap/sysInfo.jsp?station=NRUNR">NRUNR</a></td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head2">NAURU NR</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head4"><img src="images/redSquare.gif">&nbsp;2003-Feb-10 22:00</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head5">Unavailable</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head6">2001-May-01 01:00</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head7">Unavailable</td>
								<tr>
								<tr>
									<td class="tblData" bgcolor="#E0E0E0" headers="head1"><a class="alink" href="/cap/sysInfo.jsp?station=NWTNM">NWTNM</a></td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head2">NW30 NM</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head4"><img src="images/redSquare.gif">&nbsp;2004-Feb-17 17:00</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head5"><img src="images/redSquare.gif">&nbsp;2004-Feb-17 17:00</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head6">2003-Jul-07 08:00</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head7">2003-Jul-07 07:30</td>
								<tr>
								<tr>
									<td class="tblData" bgcolor="#FFFFFF" headers="head1"><a class="alink" href="/cap/sysInfo.jsp?station=OFCNC">OFCNC</a></td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head2">OLD FORT,NC</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head4">Unavailable</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head5">Unavailable</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head6">Unavailable</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head7">Unavailable</td>
								<tr>
								<tr>
									<td class="tblData" bgcolor="#E0E0E0" headers="head1"><a class="alink" href="/cap/sysInfo.jsp?station=OHTCA">OHTCA</a></td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head2">OAKHURST, CA</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head4"><img src="images/redSquare.gif">&nbsp;2010-Nov-04 15:00</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head5"><img src="images/redSquare.gif">&nbsp;2010-Sep-15 22:00</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head6">2010-May-04 15:00</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head7">2010-May-04 15:00</td>
								<tr>
								<tr>
									<td class="tblData" bgcolor="#FFFFFF" headers="head1"><a class="alink" href="/cap/sysInfo.jsp?station=OREMA">OREMA</a></td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head2">ORANGE MA</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head4"><img src="images/redSquare.gif">&nbsp;2003-May-06 18:00</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head5"><img src="images/redSquare.gif">&nbsp;2003-May-06 18:00</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head6">2002-Jun-29 02:00</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head7">2002-Jun-29 02:00</td>
								<tr>
								<tr>
									<td class="tblData" bgcolor="#E0E0E0" headers="head1"><a class="alink" href="/cap/sysInfo.jsp?station=OXFKS">OXFKS</a></td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head2">OXFORD KS</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head4"><img src="images/redSquare.gif">&nbsp;2004-Jun-29 19:00</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head5"><img src="images/redSquare.gif">&nbsp;2004-Jun-11 15:05</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head6">2001-Nov-08 16:00</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head7">2004-Jun-09 22:05</td>
								<tr>
								<tr>
									<td class="tblData" bgcolor="#FFFFFF" headers="head1"><a class="alink" href="/cap/sysInfo.jsp?station=OZATX">OZATX</a></td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head2">OZONA, TX (SODAR)</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head4"><img src="images/redSquare.gif">&nbsp;2012-Nov-28 20:00</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head5">Unavailable</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head6">2011-Jul-20 01:00</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head7">Unavailable</td>
								<tr>
								<tr>
									<td class="tblData" bgcolor="#E0E0E0" headers="head1"><a class="alink" href="/cap/sysInfo.jsp?station=PITPA">PITPA</a></td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head2">PITTSBURGH PA</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head4"><img src="images/redSquare.gif">&nbsp;2005-May-10 15:00</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head5"><img src="images/redSquare.gif">&nbsp;2005-May-10 15:00</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head6">2004-Jun-14 22:00</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head7">2004-Jun-14 22:00</td>
								<tr>
								<tr>
									<td class="tblData" bgcolor="#FFFFFF" headers="head1"><a class="alink" href="/cap/sysInfo.jsp?station=PNNHI">PNNHI</a></td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head2">PUUNENE, HI</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head4">Unavailable</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head5">Unavailable</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head6">Unavailable</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head7">Unavailable</td>
								<tr>
								<tr>
									<td class="tblData" bgcolor="#E0E0E0" headers="head1"><a class="alink" href="/cap/sysInfo.jsp?station=PPBCA">PPBCA</a></td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head2">PT. PIEDRAS BLANCAS CA</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head4"><img src="images/redSquare.gif">&nbsp;2013-Apr-03 15:00</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head5"><img src="images/redSquare.gif">&nbsp;2012-Apr-26 14:00</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head6">1997-Nov-05 04:00</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head7">2003-Dec-23 19:00</td>
								<tr>
								<tr>
									<td class="tblData" bgcolor="#FFFFFF" headers="head1"><a class="alink" href="/cap/sysInfo.jsp?station=PRPPE">PRPPE</a></td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head2">PIURA (NORTHERN) PERU</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head4"><img src="images/redSquare.gif">&nbsp;2003-Aug-21 13:00</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head5">Unavailable</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head6">2001-May-01 01:00</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head7">Unavailable</td>
								<tr>
								<tr>
									<td class="tblData" bgcolor="#E0E0E0" headers="head1"><a class="alink" href="/cap/sysInfo.jsp?station=PSENH">PSENH</a></td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head2">PEASE NH</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head4"><img src="images/redSquare.gif">&nbsp;2005-Sep-14 19:30</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head5"><img src="images/redSquare.gif">&nbsp;2005-Sep-14 19:00</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head6">2003-Jan-12 15:00</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head7">2004-Jun-10 13:30</td>
								<tr>
								<tr>
									<td class="tblData" bgcolor="#FFFFFF" headers="head1"><a class="alink" href="/cap/sysInfo.jsp?station=PSPNY">PSPNY</a></td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head2">PINNACLE NY</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head4"><img src="images/redSquare.gif">&nbsp;2003-May-11 11:00</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head5"><img src="images/redSquare.gif">&nbsp;2003-May-11 11:00</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head6">2002-Jun-14 02:00</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head7">2002-Jun-14 02:00</td>
								<tr>
								<tr>
									<td class="tblData" bgcolor="#E0E0E0" headers="head1"><a class="alink" href="/cap/sysInfo.jsp?station=PTCCA">PTCCA</a></td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head2">POINT SUR CA (3GHZ)</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head4">Unavailable</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head5">Unavailable</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head6">Unavailable</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head7">Unavailable</td>
								<tr>
								<tr>
									<td class="tblData" bgcolor="#FFFFFF" headers="head1"><a class="alink" href="/cap/sysInfo.jsp?station=PYMMA">PYMMA</a></td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head2">PLYMOUTH MA</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head4"><img src="images/redSquare.gif">&nbsp;2005-May-13 14:00</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head5"><img src="images/redSquare.gif">&nbsp;2005-May-13 14:00</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head6">2002-Jun-15 02:00</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head7">2004-Jun-10 20:00</td>
								<tr>
								<tr>
									<td class="tblData" bgcolor="#E0E0E0" headers="head1"><a class="alink" href="/cap/sysInfo.jsp?station=RALNC">RALNC</a></td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head2">RALEIGH NC</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head4"><img src="images/redSquare.gif">&nbsp;2008-Dec-31 14:30</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head5"><img src="images/redSquare.gif">&nbsp;2008-Dec-31 14:30</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head6">2001-Dec-04 00:30</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head7">2004-Jun-09 23:00</td>
								<tr>
								<tr>
									<td class="tblData" bgcolor="#FFFFFF" headers="head1"><a class="alink" href="/cap/sysInfo.jsp?station=RCHVA">RCHVA</a></td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head2">RICHMOND VA</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head4"><img src="images/redSquare.gif">&nbsp;2005-May-27 18:00</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head5"><img src="images/redSquare.gif">&nbsp;2005-May-27 18:00</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head6">2001-Dec-15 06:30</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head7">2004-Jun-09 23:00</td>
								<tr>
								<tr>
									<td class="tblData" bgcolor="#E0E0E0" headers="head1"><a class="alink" href="/cap/sysInfo.jsp?station=RGCTX">RGCTX</a></td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head2">RIO GRAND CITY, TX (TARS 449)</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head4"><img src="images/redSquare.gif">&nbsp;2017-Jan-21 10:00</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head5">Unavailable</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head6">2006-Jun-30 22:00</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head7">Unavailable</td>
								<tr>
								<tr>
									<td class="tblData" bgcolor="#FFFFFF" headers="head1"><a class="alink" href="/cap/sysInfo.jsp?station=RGNTX">RGNTX</a></td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head2">BIG LAKE, TX (SODAR)</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head4"><img src="images/redSquare.gif">&nbsp;2012-Nov-28 23:20</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head5">Unavailable</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head6">2011-Aug-02 06:00</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head7">Unavailable</td>
								<tr>
								<tr>
									<td class="tblData" bgcolor="#E0E0E0" headers="head1"><a class="alink" href="/cap/sysInfo.jsp?station=RKNFL">RKNFL</a></td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head2">RUSKIN FL</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head4"><img src="images/redSquare.gif">&nbsp;2002-Jun-03 16:00</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head5"><img src="images/redSquare.gif">&nbsp;2002-Jun-03 16:00</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head6">2002-Apr-28 02:00</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head7">2002-Apr-28 02:00</td>
								<tr>
								<tr>
									<td class="tblData" bgcolor="#FFFFFF" headers="head1"><a class="alink" href="/cap/sysInfo.jsp?station=RMACO">RMACO</a></td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head2">ROCKY MOUNTAIN ARSENAL</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head4"><img src="images/redSquare.gif">&nbsp;2006-Feb-09 16:00</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head5"><img src="images/redSquare.gif">&nbsp;2006-Feb-09 16:00</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head6">2004-Nov-19 23:00</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head7">2004-Nov-19 23:00</td>
								<tr>
								<tr>
									<td class="tblData" bgcolor="#E0E0E0" headers="head1"><a class="alink" href="/cap/sysInfo.jsp?station=RMDCA">RMDCA</a></td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head2">RICHMOND CA</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head4"><img src="images/redSquare.gif">&nbsp;2002-Jan-09 23:00</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head5"><img src="images/redSquare.gif">&nbsp;2002-Jan-09 22:00</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head6">2000-Feb-17 00:00</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head7">2000-Feb-16 23:00</td>
								<tr>
								<tr>
									<td class="tblData" bgcolor="#FFFFFF" headers="head1"><a class="alink" href="/cap/sysInfo.jsp?station=SCGEC">SCGEC</a></td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head2">SAN CRISTOBAL, GALAPAGOS EC</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head4"><img src="images/redSquare.gif">&nbsp;2006-May-23 19:00</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head5">Unavailable</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head6">2001-May-01 01:00</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head7">Unavailable</td>
								<tr>
								<tr>
									<td class="tblData" bgcolor="#E0E0E0" headers="head1"><a class="alink" href="/cap/sysInfo.jsp?station=SCHNY">SCHNY</a></td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head2">SCHENECTADY NY</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head4"><img src="images/redSquare.gif">&nbsp;2003-Nov-10 21:00</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head5"><img src="images/redSquare.gif">&nbsp;2003-Nov-10 21:00</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head6">2002-Jun-25 02:00</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head7">2002-Jun-27 00:00</td>
								<tr>
								<tr>
									<td class="tblData" bgcolor="#FFFFFF" headers="head1"><a class="alink" href="/cap/sysInfo.jsp?station=SFNCA">SFNCA</a></td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head2">SAN FERNANDO</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head4"><img src="images/redSquare.gif">&nbsp;2007-Apr-11 18:00</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head5"><img src="images/redSquare.gif">&nbsp;2007-Apr-11 18:00</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head6">2006-May-02 12:00</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head7">2006-May-02 02:00</td>
								<tr>
								<tr>
									<td class="tblData" bgcolor="#E0E0E0" headers="head1"><a class="alink" href="/cap/sysInfo.jsp?station=SHSCA">SHSCA</a></td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head2">SLOUGHHOUSE CA</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head4"><img src="images/redSquare.gif">&nbsp;2011-Mar-23 14:00</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head5">Unavailable</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head6">2006-Dec-01 22:00</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head7">Unavailable</td>
								<tr>
								<tr>
									<td class="tblData" bgcolor="#FFFFFF" headers="head1"><a class="alink" href="/cap/sysInfo.jsp?station=SIMCA">SIMCA</a></td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head2">SIMI VALLEY CA</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head4"><img src="images/redSquare.gif">&nbsp;2010-Apr-12 21:00</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head5"><img src="images/redSquare.gif">&nbsp;2010-Apr-12 21:00</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head6">1997-Oct-21 14:30</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head7">2004-Jun-10 13:30</td>
								<tr>
								<tr>
									<td class="tblData" bgcolor="#E0E0E0" headers="head1"><a class="alink" href="/cap/sysInfo.jsp?station=SMILA">SMILA</a></td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head2">SOUTH MARSH ISLAND LA</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head4"><img src="images/redSquare.gif">&nbsp;1960-May-26 15:51</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head5"><img src="images/redSquare.gif">&nbsp;1960-May-26 15:51</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head6">1960-May-11 23:10</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head7">1960-May-11 22:40</td>
								<tr>
								<tr>
									<td class="tblData" bgcolor="#FFFFFF" headers="head1"><a class="alink" href="/cap/sysInfo.jsp?station=SNICA">SNICA</a></td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head2">SAN NICOLAS CA</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head4"><img src="images/redSquare.gif">&nbsp;2010-Jun-26 15:00</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head5"><img src="images/redSquare.gif">&nbsp;2010-Jun-27 16:00</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head6">2003-Jan-15 02:00</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head7">2010-Jun-25 18:00</td>
								<tr>
								<tr>
									<td class="tblData" bgcolor="#E0E0E0" headers="head1"><a class="alink" href="/cap/sysInfo.jsp?station=SNRTX">SNRTX</a></td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head2">SONORA, TX</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head4"><img src="images/redSquare.gif">&nbsp;2006-Jul-11 13:00</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head5"><img src="images/redSquare.gif">&nbsp;2006-Jul-11 13:00</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head6">2005-Jul-26 20:00</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head7">2005-Jul-26 20:00</td>
								<tr>
								<tr>
									<td class="tblData" bgcolor="#FFFFFF" headers="head1"><a class="alink" href="/cap/sysInfo.jsp?station=SNSCA">SNSCA</a></td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head2">SAN NICOLAS ISLAND, CA</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head4"><img src="images/redSquare.gif">&nbsp;2013-Dec-04 00:00</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head5"><img src="images/redSquare.gif">&nbsp;2013-Dec-04 00:00</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head6">2010-Jul-01 01:00</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head7">2010-Jul-03 10:00</td>
								<tr>
								<tr>
									<td class="tblData" bgcolor="#E0E0E0" headers="head1"><a class="alink" href="/cap/sysInfo.jsp?station=SPBFL">SPBFL</a></td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head2">ST. PETERSBURG FL</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head4"><img src="images/redSquare.gif">&nbsp;2002-Jun-03 14:00</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head5"><img src="images/redSquare.gif">&nbsp;2002-Jun-03 14:00</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head6">2002-Apr-28 02:00</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head7">2002-Apr-28 02:00</td>
								<tr>
								<tr>
									<td class="tblData" bgcolor="#FFFFFF" headers="head1"><a class="alink" href="/cap/sysInfo.jsp?station=SPDCA">SPDCA</a></td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head2">SUGAR PINE CA (3GHZ)</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head4">Unavailable</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head5">Unavailable</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head6">Unavailable</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head7">Unavailable</td>
								<tr>
								<tr>
									<td class="tblData" bgcolor="#E0E0E0" headers="head1"><a class="alink" href="/cap/sysInfo.jsp?station=STCCA">STCCA</a></td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head2">SATICOY, CA</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head4"><img src="images/redSquare.gif">&nbsp;2007-Apr-11 15:00</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head5"><img src="images/redSquare.gif">&nbsp;2007-Apr-11 15:00</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head6">2007-Jan-09 01:00</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head7">2007-Jan-06 23:00</td>
								<tr>
								<tr>
									<td class="tblData" bgcolor="#FFFFFF" headers="head1"><a class="alink" href="/cap/sysInfo.jsp?station=STSCT">STSCT</a></td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head2">STORRS CT</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head4"><img src="images/redSquare.gif">&nbsp;2004-Oct-05 16:00</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head5">Unavailable</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head6">2004-Jul-13 17:00</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head7">Unavailable</td>
								<tr>
								<tr>
									<td class="tblData" bgcolor="#E0E0E0" headers="head1"><a class="alink" href="/cap/sysInfo.jsp?station=SUXIA">SUXIA</a></td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head2">SIOUX CITY, IA</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head4"><img src="images/redSquare.gif">&nbsp;2012-Sep-05 13:00</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head5"><img src="images/redSquare.gif">&nbsp;2012-Sep-05 13:00</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head6">2011-Dec-13 17:00</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head7">2011-Dec-14 19:00</td>
								<tr>
								<tr>
									<td class="tblData" bgcolor="#FFFFFF" headers="head1"><a class="alink" href="/cap/sysInfo.jsp?station=SWYWA">SWYWA</a></td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head2">SPANAWAY</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head4"><img src="images/redSquare.gif">&nbsp;2010-May-17 19:00</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head5">Unavailable</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head6">2009-Nov-26 18:00</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head7">Unavailable</td>
								<tr>
								<tr>
									<td class="tblData" bgcolor="#E0E0E0" headers="head1"><a class="alink" href="/cap/sysInfo.jsp?station=TBMCO">TBMCO</a></td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head2">TABLE MOUNTAIN CO</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head4"><img src="images/redSquare.gif">&nbsp;2008-Sep-17 17:00</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head5">Unavailable</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head6">2008-Jul-16 05:00</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head7">Unavailable</td>
								<tr>
								<tr>
									<td class="tblData" bgcolor="#FFFFFF" headers="head1"><a class="alink" href="/cap/sysInfo.jsp?station=TLGNM">TLGNM</a></td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head2">TULAG NM</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head4"><img src="images/redSquare.gif">&nbsp;2004-Jul-26 14:00</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head5"><img src="images/redSquare.gif">&nbsp;2004-Mar-22 20:30</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head6">2003-Jul-03 08:00</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head7">2003-Jul-03 07:30</td>
								<tr>
								<tr>
									<td class="tblData" bgcolor="#E0E0E0" headers="head1"><a class="alink" href="/cap/sysInfo.jsp?station=TRKCA">TRKCA</a></td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head2">TRUCKEE CA</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head4"><img src="images/redSquare.gif">&nbsp;2010-May-12 19:00</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head5">Unavailable</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head6">2006-Nov-20 23:00</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head7">Unavailable</td>
								<tr>
								<tr>
									<td class="tblData" bgcolor="#FFFFFF" headers="head1"><a class="alink" href="/cap/sysInfo.jsp?station=TRWKR">TRWKR</a></td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head2">TARAWA KIRIBATI</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head4"><img src="images/redSquare.gif">&nbsp;2002-Aug-21 20:00</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head5">Unavailable</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head6">2001-May-01 01:00</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head7">Unavailable</td>
								<tr>
								<tr>
									<td class="tblData" bgcolor="#E0E0E0" headers="head1"><a class="alink" href="/cap/sysInfo.jsp?station=VLCND">VLCND</a></td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head2">VALLEY CITY, ND</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head4"><img src="images/redSquare.gif">&nbsp;2012-Sep-18 20:00</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head5"><img src="images/redSquare.gif">&nbsp;2012-Sep-18 20:00</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head6">2011-Jul-05 19:00</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head7">2011-Jul-06 03:00</td>
								<tr>
								<tr>
									<td class="tblData" bgcolor="#FFFFFF" headers="head1"><a class="alink" href="/cap/sysInfo.jsp?station=VRMLA">VRMLA</a></td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head2">VERMILLON LA</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head4"><img src="images/redSquare.gif">&nbsp;1960-May-26 15:51</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head5"><img src="images/redSquare.gif">&nbsp;1960-May-26 15:51</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head6">1960-May-11 23:10</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head7">1960-May-11 22:40</td>
								<tr>
								<tr>
									<td class="tblData" bgcolor="#E0E0E0" headers="head1"><a class="alink" href="/cap/sysInfo.jsp?station=WFCND">WFCND</a></td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head2">WATFORD CITY, ND</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head4"><img src="images/redSquare.gif">&nbsp;2012-Sep-12 14:00</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head5"><img src="images/redSquare.gif">&nbsp;2012-Sep-12 14:00</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head6">2011-Jul-06 03:00</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head7">2011-Jul-06 03:00</td>
								<tr>
								<tr>
									<td class="tblData" bgcolor="#FFFFFF" headers="head1"><a class="alink" href="/cap/sysInfo.jsp?station=WFDCA">WFDCA</a></td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head2">WATERFORD CA</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head4"><img src="images/redSquare.gif">&nbsp;2002-Dec-09 21:00</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head5"><img src="images/redSquare.gif">&nbsp;2002-Dec-09 14:00</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head6">2000-Jun-28 22:00</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head7">2000-Jun-28 22:00</td>
								<tr>
								<tr>
									<td class="tblData" bgcolor="#E0E0E0" headers="head1"><a class="alink" href="/cap/sysInfo.jsp?station=WHWKS">WHWKS</a></td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head2">WHITEWATER KS</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head4"><img src="images/redSquare.gif">&nbsp;2004-Jul-17 13:00</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head5"><img src="images/redSquare.gif">&nbsp;2004-Jul-17 13:55</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head6">2001-Jul-05 21:00</td>
									<td class="tblData" bgcolor="#E0E0E0" headers="head7">2004-Jun-09 22:05</td>
								<tr>
								<tr>
									<td class="tblData" bgcolor="#FFFFFF" headers="head1"><a class="alink" href="/cap/sysInfo.jsp?station=YMAAZ">YMAAZ</a></td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head2">YUMA, AZ (TARS 449MHZ)</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head4"><img src="images/redSquare.gif">&nbsp;2009-Dec-01 06:00</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head5">Unavailable</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head6">2006-Feb-02 22:45</td>
									<td class="tblData" bgcolor="#FFFFFF" headers="head7">Unavailable</td>
								<tr>

							</table>
							<span style="font-family: Arial, Helvetica, sans-serif; font-weight: bold;">Decommissioned Site Count: 120</span>							
						


						</td>
					</tr>
				</table>
			</td>
		</tr>
	</table>
		
	<!-- Standard Footer -->
	<TABLE cellSpacing="0" border="0" width="100%" cellpadding="2">
		<TBODY>
	  		<TR align="center">
	    		<TD class="stdFooterTopLine">
				<A href="disclaim.jsp" class="stdFooterTopLine">Disclaimer</A> 
	      		&nbsp;&nbsp;|&nbsp;&nbsp; 
				<A href="http://www.noaa.gov/privacy.html" target="_blank" class="stdFooterTopLine">
					NOAA Privacy Policy</A> 
	      		&nbsp;&nbsp;|&nbsp;&nbsp; 
				<A href="http://www.noaa.gov/disclaimer.html" target="_blank" class="stdFooterTopLine">
					NOAA Disclaimer For External Links</A>
	      		&nbsp;&nbsp;|&nbsp;&nbsp; 
				<A href="http://esrl.noaa.gov/gsd/search.html" target="_blank" class="stdFooterTopLine">
					Search GSD</A>
				</TD>
			</tr>
			<tr>
				<td class="stdFooterBottomLine">
					<div class="footerText" align="center">
						<!--em>Please send comments or suggestions to:&nbsp; </em--!>
						<!--a href="mailto:webmaster-dd.fsl@noaa.gov" class="alink"--!>
						<!--em>webmaster-dd.fsl@noaa.gov</em></a--!>
						<em>Please send comments or suggestions to:&nbsp; </em>
						<a href="mailto:madis-support@noaa.gov" class="alink">
						<em>MADIS support</em></a>
					</div>
					
					<!-- Mod Date and Page Hit Counter -->
					<div class="footerText" align="center">
						<em>
								Page Last Modified: <b>Undetermined</b>
						</em>
						<br>
				
						
				
						
					</div>
				</td>
			</TR>
		</TBODY>
	</TABLE>
		

</body>
</html>
