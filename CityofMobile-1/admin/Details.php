 <?php
 include("header.php");

 include("connection.php");
 $id = $_GET['id'];
 $mode = $_GET['mode'];
if(isset($_POST["btnupdate"]))
{
   extract($_POST);
   // Update only the cal_event table
   UpdateEvent($eid,$txtdate,$txteventtitle,$ddlCategory,$txtdescription,$txtcontact,$txtaddress);
   //header("location:calendar.php?mode=add");
}
if(isset($_POST["btndelete"]))
{
   extract($_POST);
   // Delete all Details  abut event
   DeleteEvent($eid);
   //header("location:calendar.php?mode=add");
}

$vwevents = "SELECT  cal_events.event_id,
					 cal_events.categories,
					 cal_events.description,
					 cal_events.title,
					 cal_events.contact,
					 cal_events.address,
					 cal_dates.date 
			FROM cal_events LEFT JOIN cal_dates
			ON cal_events.event_id = cal_dates.event
			where cal_events.event_id ='$id'";
$output=SELECT($vwevents);

$answer = mysqli_fetch_assoc($output);
 ?>
 <!-- main content start-->
 <div class="main-content main-content4">
 <form class="form-horizontal" method="post">
		<div class="form-group">
			<label for="title" class="col-sm-2 control-label">Event Title</label>
			<div class="col-sm-5">
			<input type="hidden" name="eid" value="<?php echo $answer['event_id'];?>">
			<input type="text" <?php if($mode!="Update"){ echo 'disabled'; }?> class="form-control1" id="title" name="txteventtitle" value="<?php echo $answer['title'];?>" placeholder="Event Title">
			</div>
			
		</div>
		<div class="form-group">
			<label for="Categories" class="col-sm-2 control-label">Categories</label>
				<div class="col-sm-5"><select <?php if($mode!="Update"){ echo 'disabled'; }?> name="ddlCategory" id="Categories" class="form-control1">
				 <option value="Select">---Select---</option>
				<option value="Arts and Culture" <?php if("Arts and Culture" == $answer['categories']){ echo "selected"; }?>>Arts and Culture</option>
				<option value="Business Events" <?php if("Business Events" == $answer['categories']){ echo "selected"; }?>>Business Events</option>
				<option value="Sporting Events" <?php if("Sporting Events" == $answer['categories']){ echo "selected"; }?>>Sporting Events</option>
				<option value="City Special Events" <?php if("City Special Events" == $answer['categories']){ echo "selected"; }?>>City Special Events</option>
			</select></div>
			</div>
		<div class="form-group">
			<label for="date" class="col-sm-2 control-label">Date</label>
			<div class="col-sm-5">
			<input type="date" class="form-control1" <?php if($mode!="Update"){ echo 'disabled'; }?> name="txtdate" value="<?php echo $answer['date'];?>" id="date" placeholder="Default Input">
			</div>
			
		</div>
		<div class="form-group">
			<label for="contact" class="col-sm-2 control-label">Contact</label>
			<div class="col-sm-5">
			<input type="text" <?php if($mode!="Update"){ echo 'disabled'; }?> class="form-control1" id="contact" name="txtcontact" value="<?php echo $answer['contact'];?>" placeholder="Contact">
			</div>
			
		</div>
		<div class="form-group">
			<label for="address" class="col-sm-2 control-label">Address</label>
			<div class="col-sm-5"><textarea <?php if($mode!="Update"){ echo 'disabled'; }?> style="height: 100px;" name="txtaddress"  id="address" cols="50" rows="500" class="form-control1"><?php echo $answer['address'];?></textarea></div>
		</div>
		<div class="form-group">
			<label for="description" class="col-sm-2 control-label">Description</label>
			<div class="col-sm-5"><textarea <?php if($mode!="Update"){ echo 'disabled'; }?> style="height: 100px;" name="txtdescription"  id="description" cols="50" rows="500" class="form-control1"><?php echo $answer['description'];?></textarea></div>
		</div>
		<div class="form-group">
		<label for="focusedinput" class="col-sm-2 control-label"></label>
		<div class="col-sm-5">
		<?php if($mode == "Update"){?><input type="submit" name="btnupdate" value="Update" class="btn-success btn"><?php }?>
		<?php if($mode == "Delete"){?><input type="submit" name="btndelete" value="Delete" class="btn-success btn"><?php }?>
		<a href="index.php" class="btn-default btn">Cancel</a></button>
		</div>
		
		</div>
	</form>
 </div>
 <!--End main content-->
  <?php
 include("footer.php");
 ?>