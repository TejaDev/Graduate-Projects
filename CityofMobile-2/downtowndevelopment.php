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
    <h1>Downtown Development</h1>

    <div style="width: 100%; max-width: 800px; display: inline-block;">
        <div align="center">
            <br>
            <table width="710" border="0" cellspacing="0" cellpadding="0">
                <tr>
                    <td id="mainText">
                        <table border="0" cellspacing="1" cellpadding="6">
                            <tr>
                                <td valign="top" width="674">
                                    <div align="left">
                                        <p>A partnership between our various city departments and the Downtown Mobile Alliance is what keeps people abreast of Progress downtown.&nbsp; A combination of the exciting economic climate in Mobile, as well as through the Alliance&#146;s efforts to keep the area clean, safe and inhabitable for citizens, employees and visitors of downtown, there has been a tremendous amount of growth and redevelopment in the downtown area.&nbsp; You only need to step outside and count the amount of cranes, street blockages and construction signs around every corner.&nbsp;</p>
                                        <br>
                                        &nbsp;<br>
                                        <img src="images/dwntn_dev_pic.jpg" alt="" height="259" width="400" align="right" border="0">
                                        <p>To find out more about the Alliance, please visit <a href="http://www.downtownmobile.org/" target="_blank">www.downtownmobile.org</a>. &nbsp;To join in the commercial and residential redevelopment of downtown, <a href="http://www.downtownmobile.org/realestate.php" target="_blank">click here</a> to find an updated list of real estate properties that are available.</p>
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