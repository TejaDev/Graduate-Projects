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
function InsertNewEvent($txtdate,$txteventtitle,$ddlCategory,$txtdescription,$txtcontact,$txtaddress)
{
	global $host,$user,$pass,$db;
	$con=mysqli_connect($host,$user,$pass);
	$database=mysqli_select_db($con,$db);
	//Insert into cal_events
	$query ="insert into cal_events(title,categories,contact,description,address,approve) 
			  values('$txteventtitle','$ddlCategory','$txtcontact','$txtdescription','$txtaddress','0')";
	$cmd=mysqli_query($con,$query)  or die("Error in Insert query");
	
	//Get the last inserted id
	$id = mysqli_insert_id($con);
	//Insert into cal_dates
	$query ="insert into cal_dates(date,event) values ('$txtdate','$id')";
	$cmd=mysqli_query($con,$query)  or die("Error in Insert query");
	mysqli_close($con);
	}
	
//Select query from any page	
function Select($query)
{
	global $host,$user,$pass,$db;
	$con=mysqli_connect($host,$user,$pass);
	$database=mysqli_select_db($con,$db);
	$cmd=mysqli_query($con,$query) or die("Error in Select query");
	mysqli_close($con);
	return $cmd;
	}

//Update query from admin side only
//call from admin/Details.php and admin/index.php(for event approvel)
function Update($query)
{
	global $host,$user,$pass,$db;
	$con=mysqli_connect($host,$user,$pass);
	$database=mysqli_select_db($con,$db);
	$cmd=mysqli_query($con,$query);
	mysqli_close($con);
	}
	
//Delete query from admin side only
//call from admin/Details.php 
	function Delete($query)
{
	global $host,$user,$pass,$db;
	$con=mysqli_connect($host,$user,$pass);
	$database=mysqli_select_db($con,$db);
	$cmd=mysqli_query($con,$query);
	mysqli_close($con);
	}
?>