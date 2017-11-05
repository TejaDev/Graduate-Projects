<?php
$host="localhost";
$user="test";
$pass="test123";
$db="cityofmobile";

function Insert($query)
{
	global $host,$user,$pass,$db;
	$con=mysqli_connect($host,$user,$pass);
	$database=mysqli_select_db($con,$db);
	$cmd=mysqli_query($con,$query)  or die("Error in Insert query");;
	mysqli_close($con);
	}
	//InsertNewEvent Is a function to enter new events for calendar
	function InsertNewEvent($txtdate,$txteventtitle,$ddlCategory,$txtdescription,$txtdescription,$txtaddress)
	{
		
	global $host,$user,$pass,$db;
	$con=mysqli_connect($host,$user,$pass);
	$database=mysqli_select_db($con,$db);
	//Insert into cal_events

	$query ="insert into cal_events(title,categories,contact,description,address) 
			  values('$txteventtitle','$ddlCategory','$txtdescription','$txtdescription','$txtaddress')";
	$cmd=mysqli_query($con,$query)  or die("Error in Insert query");;
	
	//get the last inserted id
	$id = mysqli_insert_id($con);
	//Insert into cal_dates
	$query ="insert into cal_dates(date,event) values ('$txtdate','$id')";
	$cmd=mysqli_query($con,$query)  or die("Error in Insert query");;
	mysqli_close($con);
	}
	//UpdateEvent cal_events
	function UpdateEvent($eid,$txtdate,$txteventtitle,$ddlCategory,$txtdescription,$txtcontact,$txtaddress)
	{
	global $host,$user,$pass,$db;
	$con=mysqli_connect($host,$user,$pass);
	$database=mysqli_select_db($con,$db);
	//Update cal_events
	$query ="UPDATE cal_events
			SET
			title = '$txteventtitle',
			categories = '$ddlCategory',
			contact = '$txtcontact',
			description = '$txtdescription',
			address = '$txtaddress'
			WHERE event_id = '$eid'";
			
	$cmd=mysqli_query($con,$query)  or die("Error in Insert query");
	mysqli_close($con);
	}
	function DeleteEvent($eid)
	{
	global $host,$user,$pass,$db;
	$con=mysqli_connect($host,$user,$pass);
	$database=mysqli_select_db($con,$db);
	$query = "Delete from cal_dates where event = '$eid'";
	$cmd=mysqli_query($con,$query);
	$query = "Delete from cal_events where event_id = '$eid'";
	$cmd=mysqli_query($con,$query);
	mysqli_close($con);
	}
	function ApproveEvents($approve_event)
	{
		global $host,$user,$pass,$db;
	$con=mysqli_connect($host,$user,$pass);
	$database=mysqli_select_db($con,$db);
	$ids = join("','",$approve_event);   
	$query="UPDATE cal_events
			SET 
			approve = '1'
			WHERE event_id IN ('$ids') ";
	$cmd=mysqli_query($con,$query)  or die("Error in Insert query");
	mysqli_close($con);
	}
	
	function Select($query)
{
	global $host,$user,$pass,$db;
	$con=mysqli_connect($host,$user,$pass);
	$database=mysqli_select_db($con,$db);
	$cmd=mysqli_query($con,$query) or die("Error in Select query");
	mysqli_close($con);
	return $cmd;
	}
	function Update($query)
{
	global $host,$user,$pass,$db;
	$con=mysqli_connect($host,$user,$pass);
	$database=mysqli_select_db($con,$db);
	$cmd=mysqli_query($con,$query);
	mysqli_close($con);
	}
	function Delete($query)
{
	global $host,$user,$pass,$db;
	$con=mysqli_connect($host,$user,$pass);
	$database=mysqli_select_db($con,$db);
	$cmd=mysqli_query($con,$query);
	mysqli_close($con);
	}
?>