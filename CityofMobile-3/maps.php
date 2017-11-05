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
    <h1>Maps</h1>

    <div style="width: 100%; max-width: 800px; display: inline-block;">
        <div align="center">
            <br>
            <table width="737" border="0" cellspacing="0" cellpadding="0">
                <tr>
                    <td id="mainText" valign="top" width="294">
                        <div align="left">
                            <ul>
                                <div align="left">
                                    <li class="larger"><a href="http://maps.cityofmobile.org/webmapping/default.aspx" target="_blank">Web Mapping System</a>
                                    <li class="larger"><a href="http://www.cityofmobile.org/mapsnfacts/maps.php" target="_blank">Mobile Area Maps</a>
                                    <li class="larger"><a href="http://www.cityofmobile.org/mapsnfacts/councilmaps.php" target="_blank">City Council District Maps</a>
                                    <li class="larger"><a href="http://www.cityofmobile.org/mapsnfacts/councilmaps.php" target="_blank">School District Maps</a>
                                    <li class="larger"><a href="http://www.mobilehd.org/historic_maps.php" target="_blank">Historic Districts Maps</a>
                                    <li class="larger"><a href="http://www.cityofmobile.org/mapsnfacts/zipcodes.php" target="_blank">City Zip Codes Map</a>
                                    <li class="larger"><a href="http://www.cityofmobile.org/mapsnfacts/firestations.php" target="_blank">Fire Stations Map</a>
                                    <li class="larger"><a href="http://www.cityofmobile.org/mapsnfacts/precincts.php" target="_blank">Police Precincts Map</a>
                                    <li class="larger"><a href="http://www.cityofmobile.org/mapsnfacts/animalshelters.php" target="_blank">Animal Shelters</a>
                                    <li class="larger"><a href="http://www.cityofmobile.org/parks/parklist.php" target="_blank">Parks and Facilities</a>
                                    <li class="larger"><a href="http://www.mobileunited.org/MU_trails.php" target="_blank">Biking Trails<br>
                                        <b>
                                            <br>
                                            <br>
                                        </b></a>
                                </div>
                            </ul>
                        </div>
                    </td>
                    <td id="Td1">
                        <img src="images/maps_map.jpg" alt="" height="460" width="355" border="0"></td>
                </tr>
            </table>
            <br>
        </div>

    </div>
</div>

<?php 
include("footer.php");
?>