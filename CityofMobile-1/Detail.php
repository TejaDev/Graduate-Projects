<?php
include("header.php");
include("connection.php");
?>
<?php
$id = $_GET['id'];
$vwevents = "SELECT  cal_events.categories,
					 cal_events.description,
					 cal_events.title,
					 cal_events.contact,
					 cal_events.address,
					 cal_dates.date 
			FROM cal_events LEFT JOIN cal_dates
			ON cal_events.event_id = cal_dates.event
			where cal_events.event_id ='$id'";
$output=SELECT($vwevents);
//$query = mysqli_query($con1,$vwevents);
$answer = mysqli_fetch_assoc($output);
?>

<style type="text/css">
	#eventdetails {text-align:center;}
	#eventdetails th, td {
    padding: 10px 15px 10px 15px;
    text-align: left;
	border-bottom: 1px solid #ddd;}
	#eventdetails tr:hover {background-color: #f5f5f5}
</style>


<div class="container">
<div id="eventdetails" >
<h2>Event Details</h2>
<br />
<table align="center">

<tr>
<td>Title</td>
<td><?php echo $answer['title']; ?></td>
</tr>
<tr>
<td>Categories</td>
<td><?php echo $answer['categories']; ?></td>
</tr>
<tr>
<td>Description</td>
<td><?php echo $answer['description']; ?></td>
</tr>
<tr>
<td>Date</td>
<td><?php echo $answer['date']; ?></td>
</tr>
<tr>
<td>Contact</td>
<td><?php echo $answer['contact']; ?></td>
</tr>
<tr>
<td>Address</td>
<td><?php echo $answer['address']; ?></td>
</tr>
</table>
</div>
</div>
<?php
include("footer.php");
?>