<?php
include ("connection.php");
  if(isset($_POST["btnsubmit"]))
	{
		if($_POST["ddlCategory"] != "Select")// validation for Dropdownlist ddlCategory
		{
		extract($_POST);
		// call Function to insert values in database
		for($i=0;$i<3000;$i++)
		{
		InsertNewEvent($txtdate,$txteventtitle,$ddlCategory,$txtdescription,$txtcontact,$txtaddress);
		}
		header("location:calendar.php");
		}
		else
		{
			echo "<script>alert('Please select Category');</script>";
		}
	
	}
include("header.php");
?>
<style type="text/css">
    #addevent {text-align:center;}
    #addevent th, td {
    padding: 10px 15px 10px 15px;
    text-align: left;}
    #addevent tr:hover {background-color: #f5f5f5}
</style>
 
<div class="container">
            <div class="row">
                <div class="col-md-offset-1 col-md-10">
                    
<div style="Padding-top:inherit;">
 
<div class="form-group" style="font-color:black;">
<div id="addevent" >
<p>Please enter the information for your event below, then click the Submit button.
<br />All events will be reviewed before being added to the calendar.</p>
 <form action="" method="post">
  
 <table align="center">
    <tr>
        <td>Event Title</td>
        <td><input class="form-control" style="color:black" type="textbox" name="txteventtitle" required></td>
    </tr>
    <tr>
        <td>Category</td>
        <td>
        <select class="form-control" style="color:black" name="ddlCategory">
            <option value="Select">---Select---</option>
            <option value="Arts and Culture">Arts and Culture</option>
            <option value="Business Events">Business Events</option>
            <option value="Sporting Events">Sporting Events</option>
            <option value="City Special Events">City Special Events</option>
        </select>
        </td>
    </tr>
    <tr>
        <td>Start Date</td>
        <td><input class="form-control" style="color:black"  type="date" name="txtdate" required></td>
    </tr>
    <tr>
        <td>Address</td>
        <td><textarea class="form-control" style="color:black;width: 400px;height: 70px;" name="txtaddress" required></textarea></td>
    </tr>
    <tr>
        <td>Detail</td>
        <td><textarea width="150px" class="form-control" style="color:black;width: 400px;height: 70px;" name="txtdescription" required></textarea></td>
    </tr>
	<tr>
        <td>Contact</td>
        <td><textarea width="150px" class="form-control" style="color:black;width: 400x;height: 70px;" name="txtcontact" required></textarea></td>
    </tr>
    <tr  align="Center">
        <td colspan="2"><input class="form-control" style="background-color: cadetblue;" type="Submit"  name="btnsubmit"></td>

</script>   
   </tr>
 </table>
 
 </form>
 </div>
 </div>
</div>
</div>
</div>
</div>
 
<!-- Insert into database--!>
<?php
 
 
  ?>
<?php
include("footer.php");
?>