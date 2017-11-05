 <?php
 include("header.php");
 include("connection.php");
 if(isset($_POST["btnapprove"]))
 {
	 extract($_POST);
	 ApproveEvents($approve_event);
 }
 
	 $query = Select("SELECT 	cal_events.event_id,
								cal_events.categories,
								cal_events.title,
								cal_dates.date,
								cal_events.approve
					FROM cal_events Inner join cal_dates
								ON cal_events.event_id = cal_dates.event
					ORDER BY cal_events.event_id DESC"); 
 if(isset($_POST["btnsearch"])){
	 extract($_POST);
	 if( $txtscdate=="")
	 {
		 $query =  $query = Select("SELECT 	cal_events.event_id,
								cal_events.categories,
								cal_events.title,
								cal_dates.date,
								cal_events.approve
					FROM cal_events Inner join cal_dates
								ON cal_events.event_id = cal_dates.event
					WHERE cal_events.categories = '$ddlscCategory' 
	ORDER BY cal_events.event_id DESC"); 
		 
	 }
	else if ($ddlscCategory=="Select")
	{
		$query =  $query = Select("SELECT 	cal_events.event_id,
								cal_events.categories,
								cal_events.title,
								cal_dates.date,
								cal_events.approve
					FROM cal_events Inner join cal_dates
								ON cal_events.event_id = cal_dates.event
					WHERE cal_dates.date='$txtscdate'
	ORDER BY cal_events.event_id DESC"); 
		
	}
	else{
	 $query =  $query = Select("SELECT 	cal_events.event_id,
								cal_events.categories,
								cal_events.title,
								cal_dates.date,
								cal_events.approve
					FROM cal_events Inner join cal_dates
								ON cal_events.event_id = cal_dates.event
					WHERE cal_events.categories = '$ddlscCategory' AND cal_dates.date='$txtscdate'
	ORDER BY cal_events.event_id DESC"); }
 }
 
 ?>
 		<!-- header-starts -->
 <!-- main content start-->
 <div class="main-content main-content4">
 
 
 
		<div class="bs-example4" data-example-id="contextual-table">
		<a  href="../Create_xml_calendar.php"><h3>Update Calendar</h3></a>	
		<form method="post">
		<table class="table">
		<tr>
		<td>Date</td>
		<td><input class="form-control" style="color:black"  type="date" name="txtscdate"></td>
		<td>Category</td>
		<td>
        <select class="form-control" style="color:black" name="ddlscCategory">
            <option value="Select">---Select---</option>
            <option value="Arts and Culture">Arts and Culture</option>
            <option value="Business Events">Business Events</option>
            <option value="Sporting Events">Sporting Events</option>
            <option value="City Special Events">City Special Events</option>
        </select>
        </td>
		<td><input class="form-control" style="background-color: cadetblue;" type="Submit" value="Search" name="btnsearch"></td>
		</tr>
		</table>
		</form>
		<form method="post">
		<table class="table">
		<thead>
		<tr>
		<th><input type="submit" name="btnapprove" value="Approve"></th>
		<th>#</th>
		<th>Title</th>
		<th>categories</th>
		<th>date</th>
		<th>Links</th>
		</tr>
		<tbody>
 <?php
 
				
    while($values_query = mysqli_fetch_assoc($query))
    {?>

		<tr class="active">
		<td><?php if($values_query['approve']==0) {?><input type="checkbox" name="approve_event[]" value="<?php echo $values_query['event_id']; ?>"><?php }?></td>
		  <th ><?php echo $values_query['event_id']; ?></</th>
		  <td><?php echo $values_query['categories']; ?></td>
		  <td><?php echo $values_query['title']; ?></td>		  
		  <td><?php echo $values_query['date']; ?></td>
		  <td>
		  <a  href="Details.php?id=<?php echo $values_query['event_id'];?>&mode=Detail"> Detail</a> | 
		  <a href="Details.php?id=<?php echo $values_query['event_id'];?>&mode=Update">Edit</a> | 
		  <a  href="Details.php?id=<?php echo $values_query['event_id'];?>&mode=Delete"> Delete</a></td>
		</tr>

<?php
	}
?>		
			</tbody>
			</form>
		</table>
	</div>
	</div>

 <!-- main content end-->
 
  <?php
 include("footer.php");
 ?>