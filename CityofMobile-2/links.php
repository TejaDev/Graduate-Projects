<?php
include ("Header.php");


/*
$username="test";
$pass="test123";
$database="cityofmobile";
$host="localhost";
$con1=mysqli_connect($host,$username,$pass);
$db=mysqli_select_db($con1,$database);

$myFile = "events.xml";
$fh = fopen($myFile, 'w') or die("can't open file");
$rss_txt = "";
$rss_txt .= '<?xml version="1.0"?>';

$rss_txt .= '<monthly>';
    $query = mysqli_query($con1,"SELECT * FROM tblevents");
    while($values_query = mysqli_fetch_assoc($query))
    {
        $rss_txt .= '<event>';

        $rss_txt .= '<id>' .$values_query['id']. '</id>';
        $rss_txt .= '<name>' .$values_query['name']. '</name>';
        $rss_txt .= '<startdate>' .$values_query['startdate']. '</startdate>';
		$rss_txt .= '<enddate>' .$values_query['enddate']. '</enddate>';
		$rss_txt .= '<starttime>' .$values_query['starttime']. '</starttime>';
		$rss_txt .= '<endtime>' .$values_query['endtime']. '</endtime>';
		$rss_txt .= '<color>' .$values_query['color']. '</color>';
		$rss_txt .= '<url>' ."Detail.php?id=".$values_query['id']. '</url>';

        $rss_txt .= '</event>';
    }
$rss_txt .= '</monthly>';

fwrite($fh, $rss_txt);

fclose($fh);
	mysqli_close($con1);
	*/
?>
<div></div>
<div>
    <h1>Links of Interest</h1>

    <div style="width: 100%; max-width: 800px; display: inline-block;">
        <div align="center">
            <br>
            <table width="698" border="0" cellspacing="0" cellpadding="0">
                <tr>
                    <td id="mainText">
                        <table width="100%" border="0" cellspacing="0" cellpadding="10">
                            <tr>
                                <td valign="top">
                                    <div align="left">
                                        <p><b>City Links</b></p>
                                        <ul>
                                            <li><a href="http://mobilechamber.com/" target="_blank">Mobile Area Chamber of Commerce</a></li>
                                            <li><a href="http://www.mobile.org">The Mobile Bay Convention &amp; Visitors Bureau</a></li>
                                            <li><a href="http://www.mobilecivicctr.com/">Mobile Civic Center</a></li>
                                            <li><a href="http://www.mobairport.com/">The Mobile Airport Authority</a></li>
                                            <li><a href="http://www.mobile-works.org/">Mobile Works Inc. - WIA</a></li>
                                            <li><a href="http://www.mhb.gov">Mobile Housing Board</a></li>
                                            <li><a href="http://www.acan.net/">The Alabama Community Access Network</a></li>
                                            <li><a href="http://www.mcpss.com">Mobile County Public School System</a></li>
                                            <li><a href="http://www.mobilealsports.com">Mobile Area Sports Commission</a></li>
                                            <li><a href="http://www.siteone.com/tourist/blakeley/index.html">Fort Blakeley</a></li>
                                            <li><a href="http://www.mplonline.org" target="_blank">Mobile Public Library</a></li>
                                            <li><a href="http://www.holland-assoc.com/afrotravel/">African-American Travel Guide</a></li>
                                            <li><a href="http://bms.usouthal.edu/cber/">Mobile Visitors &amp; Business Indicators</a></li>
                                            <li><a href="http://users.mobis.com/~newmobilians/">New Mobilians</a></li>
                                            <li><a href="http://www.lookoutmobile.org/">Lookout Mobile</a></li>
                                            <li><a href="http://www.thewavetransit.com/" target="_blank">The Wave Transit System</a></li>
                                            <li><a href="http://www.mobilelanding.com/" target="_blank">Mobile Landing</a></li>
                                            <li><a href="http://mobilebayyp.com/" target="_blank">Mobile Bay Young Professionals, llc</a>
                                            <li><a href="http://www.maypa.org/index.htm" target="_blank">Mobile Area Young Professionals Alliance</a><br>
                                        </ul>
                                        <p><b>Mardi Gras</b></p>
                                    </div>
                                    <ul>
                                        <div align="left">
                                            <li><a href="../../cityofmobile.org/mardigras.php">Mardi Gras Information</a>
                                            <li><a href="http://www.mobilecarnivalmuseum.com/" target="_blank">Mobile Carnival Museum</a>
                                        </div>
                                    </ul>
                                    <div align="left">
                                        <p><b>News and Media</b></p>
                                        <ul>
                                            <li><a href="http://www.al.com/">Alabama Live</a><a href="http://www.al.com/"></li>
                                            <li><a href="http://www.wkrg.com/" target="_blank">WKRG TV5</a></li>
                                            <li><a href="http://www.wpmi.com/" target="_blank">NBC-15</a></li>
                                            <li><a href="http://www.fox10tv.com/">FOX-10</a></li>
                                            <li><a href="http://www.92zew.net/">92.1 FM - WZEW</a></li>
                                            <li><a href="http://www.wnsp.com/">105.5 FM - WNSP Sports Radio</a></li>
                                        </ul>
                                    </div>
                                    <p><b>Arts and Culture</b></p>
                                    <div align="left">
                                        <ul>
                                            <li><a href="http://www.mobilemuseumofart.com" target="_blank">Mobile Museum of Art</a>
                                            <li><a href="http://www.museumofmobile.com/" target="_blank">Museum of Mobile</a>
                                            <li><a href="http://www.mobilearts.org" target="_blank">Mobile Arts Council</a>
                                            <li><a href="http://www.mobilesaenger.com" target="_blank">Saenger Theatre</a>
                                            <li><a href="http://www.mobileopera.org" target="_blank">Mobile Opera</a>
                                            <li><a href="http://www.mobilesymphony.org/" target="_blank">Mobile Symphony</a>
                                            <li><a href="http://www.mobileballet.org/" target="_blank">Mobile Ballet</a>
                                            <li><a href="http://www.mobilecarnivalmuseum.com/" target="_blank">Mobile Carnival Museum</a>
                                        </ul>
                                        <div align="left">
                                            <p><b>Hotels &amp; Transportation</b></p>
                                            <ul>
                                                <li><a href="http://www.mobile.org/pl_stay.php" target="_blank">Area Hotels</a>
                                                <li><a href="http://www.mobile.org/pl_cruise.php" target="_blank">Carnival Cruises</a>
                                                <li><a href="http://www.mobairport.com">Mobile Airport Authority</a>
                                                <li><a href="http://www.asdd.com/" target="_blank">Alabama State Port Authority</a>
                                                <li><a href="http://www.thewavetransit.com/" target="_blank">The Wave Transit System</a></li>
                                            </ul>
                                            <p><b>Events and Festivals</b></p>
                                            <ul>
                                                <li><a href="http://www.bayfest.com/">Bayfest</a></li>
                                                <li><a href="http://mobileinternationalfestival.org/MIF/index.htm" target="_blank">Mobile International Festival</a></li>
                                                <li><a href="http://www.ajm.org/">America's Junior Miss</a></li>
                                            </ul>
                                        </div>
                                        <div align="center">
                                            <p>
                                                <img src="images/Chak_Khan_05.jpg" alt="" height="213" width="320" border="0"></p>
                                        </div>
                                    </div>
                                </td>
                                <td valign="top">
                                    <div align="left">
                                        <div align="left">
                                            <div align="left">
                                                <div align="left">
                                                    <div align="left">
                                                        <p>
                                                            <b>
                                                                <img src="images/st_patricks_parade.jpg" alt="" height="225" width="300" align="top" border="0" vspace="6" /><br />
                                                                Sports and Leisure</b>
                                                        </p>
                                                        <ul>
                                                            <li><a href="http://www.mobilealsports.com/">Mobile Sports Commission</a>
                                                            <li><a href="http://www.mobilebaybears.com/">Mobile Bay Bears Baseball</a>
                                                            <li><a href="http://www.gmacbowl.com/" target="_blank">GMAC Bowl</a>
                                                            <li><a href="http://www.seniorbowl.com/" target="_blank">Senior Bowl</a>
                                                            <li><a href="http://www.bayfest.com" target="_blank">Bayfest</a>
                                                            <li><a href="http://www.lpgachampions.com/" target="_blank">LPGA Tournament of Champions</a>
                                                            <li><a href="http://www.cityofmobile.org/parks.php">Area Parks and Facilities</a>
                                                            <li><a href="http://www.mobileunited.org/MU_trails.php" target="_blank">Biking Trails</a>
                                                            <li><a href="http://www.mobiletenniscenter.net" target="_blank">Mobile Tennis Center</a>
                                                            <li><a href="http://www.firstlightmarathon.com">First Light Marathon</a>
                                                            <li><a href="http://www.sport.ussa.edu/">United States Sports Academy</a>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <p><b>Events Calendar</b></p>
                                                <ul>
                                                    <li><a href="../../cityofmobile.org/calendar.php">Event Listings</a>
                                                    <li><a href="../../cityofmobile.org/specialevents.php">Special Events</a>
                                                </ul>
                                                <p><b>Mobile Weather</b></p>
                                                <ul>
                                                    <li><a href="http://www.mobile.org/weather.php" target="_blank">Current Weather</a>
                                                    <li><a href="http://www.mobile.org/weather.php" target="_blank">Average Temperatures</a>
                                                </ul>
                                                <p><b>Area Attractions</b></p>
                                                <ul>
                                                    <li><a href="http://www.ussalabama.org" target="_blank">USS Alabama</a>
                                                    <li><a href="http://www.bellingrath.org" target="_blank">Bellingrath Gardens</a>
                                                    <li><a href="http://www.exploreum.net" target="_blank">Gulf Coast Exploreum Science Center</a>
                                                    <li><a href="http://www.richardsdarhouse.com" target="_blank">Richards DAR House Museum</a>
                                                </ul>
                                                <p><b>Related Alabama Web sites</b></p>
                                                <ul>
                                                    <li><a href="http://www.almtlakes.org/">Alabama Mountain Lakes</a></li>
                                                    <li><a href="http://www.olcg.com/al/atc/">Alabama Travel Council</a></li>
                                                    <li><a href="http://www.quicklink.net/ann/calhoun/">Anniston</a></li>
                                                    <li><a href="http://www.auburn-opelika.com/">Auburn-Opelika</a></li>
                                                    <li><a href="http://www.bcvb.org/">Birmingham</a></li>
                                                    <li><a href="http://www.daphneciviccenter.org">Daphne Civic Center</a></li>
                                                    <li><a href="http://www.HiWAAY.net/dcvb/">Decatur</a></li>
                                                    <li><a href="http://www.dothanalcvb.com/">Dothan</a></li>
                                                    <li><a href="http://www.flo-tour.org/">Florence</a></li>
                                                    <li><a href="http://www.gulfshores.com/">Gulf Shores/Orange Beach</a></li>
                                                    <li><a href="http://www.gulf-shores.com/">Gulf Shores Calendar of Events</a></li>
                                                    <li><a href="http://www.huntsville.org/">Huntsville</a></li>
                                                    <li><a href="http://www.civic-center.ci.montgomery.al.us/">Montgomery</a></li>
                                                    <li><a href="http://www.olcg.com/selma/">Selma</a></li>
                                                    <li><a href="http://townofdauphinisland.org/">Dauphin Island</a></li>
                                                    <li><a href="http://www.usacitylink.com/">The USA CityLink Project</a></li>
                                                </ul>
                                                <p><b>Public Utilities</b></p>
                                                <ul>
                                                    <li><a href="http://www.alabamapower.com">Alabama Power</a>
                                                    <li><a href="http://www.mawss.com" target="_blank">Mobile Area Water and Sewer</a>
                                                    <li><a href="http://www.mobile-gas.com" target="_blank">Mobile Gas</a>
                                                </ul>
                                                <p></p>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
            <br>
        </div>

    </div>
</div>

<?php 
include("footer.php");
?>