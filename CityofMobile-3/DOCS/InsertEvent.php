<?php
include ("connection.php");
if(isset($_POST["btnsubmit"]))
	{
		if($_POST["ddlCategory"] != "Select")
		{
		extract($_POST);
      // call Function to insert values in database
      //InsertNewEvent($txtdate,$txteventtitle,$ddlCategory,$txtdescription,$txtcontact,$txtaddress);
		header("location:calendar.php?mode=add");
		}
		else
		{
			echo "<script>alert('Please select Category');</script>";
		}
	
	}
	
?>
  