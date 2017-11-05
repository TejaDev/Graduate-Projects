<?php
include ("Header.php");
//Creatinf XML file to load events in calendar
//include ("Create_xml_calendar.php");
//$mode = $_GET['mode']
if(isset($_GET['mode']))
  {
	$message = "Event has been Added";
	echo "<script>alert('$message');</script>";
  }
?>

<div>
<h1>Events</h1>
	<a href="AddEvents.php"><h3>Add New Event</h3></a>
		<div style="width:100%; max-width:800px; display:inline-block;">
			
			<div class="monthly" id="mycalendar"></div>
		</div>
</div>
<?php 
include("footer.php");
?>