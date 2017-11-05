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
    <h1>Contact Us</h1>

    <div style="width: 100%; max-width: 800px; display: inline-block;">
        <div align="center">
            <br>
            <table width="717" border="0" cellspacing="0" cellpadding="0">
                <tr>
                    <td id="mainText" width="570">
                        <div align="left">
                            <span class="body">We are located at 2900 Dauphin Street, phone number: <strong>(251) 208-1550.</strong><br>
                                &nbsp;<br>
                                <b>Ann Rambeau</b>, Manager  <a href="mailto:ann.rambeau@cityofmobile.org">ann.rambeau@cityofmobile.org</a><br>
                                <b>Greg Cyprian</b>, Assistant Manager  <a href="mailto:gcyprian@cityofmobile.org">gcyprian@cityofmobile.org</a><br>
                                <b>Joanie Stiff</b>, Special Events Coordinator  <strong>(251) 208-1553</strong> <a href="mailto:joanie.stiff@cityofmobile.org">joanie.stiff@cityofmobile.org</a><br>
                                <b>William Amos</b>, Special Events Coordinator  <strong>(251) 208-1557</strong>  <a href="mailto:wamos@cityofmobile.org">wamos@cityofmobile.org</a><br>
                                <b>Debbie Goff</b>, Administrative Assistant  <strong>(251) 208-1554</strong>  <a href="mailto:debbie.goff@cityofmobile.org">debbie.goff@cityofmobile.org</a><br>
                                <b>Cassee Young</b>, Office Assistant  <strong>(251) 208-1558 </strong><a href="mailto:youngc@cityofmobile.org">youngc@cityofmobile.org</a><br>
                            </span>
                        </div>
                    </td>
                </tr>
            </table>
            <br>
            <img src="images/Cathedral.jpg" alt="" height="261" width="530" border="0"><br>
            <br>
        </div>

    </div>
</div>

<?php 
include("footer.php");
?>