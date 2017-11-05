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
    <h1>About</h1>

    <div style="width: 100%; max-width: 800px; display: inline-block;">
        <div align="center">
            <br>
            <table width="690" border="0" cellspacing="0" cellpadding="0">
                <tr>
                    <td id="mainText">
                        <div align="left">
                            <p>
                                <img src="images/about_pic.jpg" alt="" height="190" width="326" align="right" border="0"><span class="body">Welcome to the  Special Events Department!</span></p>
                            <p>
                                <span class="body"><strong>Mission Statement:</strong><br />
                                    To provide quality special events for the citizens of Mobile.</span><span class="body"><br>
                                    </span>
                                <br>
                                <span class="body"><b>What we&#146;re doing:<br>
                                </b>&#149; Produce 100 events annually<br>
                                    &#149; Assist non-profit organizations with event production<br>
                                    &#149; Coordinate Downtown Banner Program<br>
                                    <br>
                                    <b>The Special Events Department produces:<br>
                                    </b>&#149; Brown Bag in Bienville Concerts<br>
                                    &#149; 4th of July Celebration<br>
                                    &#149; Kids Days in Bienville<br>
                                    &#149; The Mobile International Festival<br>
                                    &#149; LoDa ArtWalks<br>
                                    &#149; The Market on the Square<br>
                                    &#149; The Market on The Hill<br>
                                    &#149; Dauphin Street Beer Festival<br>
                                    &#149; Lighting of the Tree in Bienville<br>
                                    &#149; Downtown Banner Program<br>
                                    &#149; Elfapaloosa<br>
                                    &#149; Holiday Market & Christmas Kids Day<br>
                                    &#149; Riverside Ice<br>
                                    &nbsp;<br>
                                    <br>
                                    We also invite neighborhood organizations and Community Action Groups (CAGs) to submit event information that will be posted on our website so citizens can learn what is going on in other districts. Our goal is to help you share the best practices and grow your relationship with our administration.<br />
                                </span>
                            </p>
                            <p>
                                <span class="body">We look forward to working with you!</span><br />
                                <br />
                            </p>
                            <p><b>
                                <img src="images/about_2.jpg" alt="" height="239" width="350" align="left" border="0" /></b></p>
                            <p>
                                <br>
                                &nbsp;&nbsp;</span>
                            </p>
                        </div>
                        <div align="left"></div>
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