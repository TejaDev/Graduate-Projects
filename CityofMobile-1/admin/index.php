 <?php
 include("header.php");
 include("connection.php");
 if(isset($_POST["btnapprove"]))
 {
	 extract($_POST);
	 ApproveEvents($approve_event);
 }
 ?>
 		<!-- header-starts -->
 <!-- main content start-->
 <div class="main-content main-content4">
 <div class="header-section">
			 
			<!--toggle button start-->
			<a class="toggle-btn  menu-collapsed"><i class="fa fa-bars"></i></a>
			
			</div>
 
		<div class="bs-example4" data-example-id="contextual-table">
		<a  href="../Create_xml_calendar.php"><h3>Update Calendar</h3></a>	
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
 $query = Select("SELECT 	cal_events.event_id,
								cal_events.categories,
								cal_events.title,
								cal_dates.date
					FROM cal_events Inner join cal_dates
								ON cal_events.event_id = cal_dates.event
					WHERE cal_events.approve = '0'
				ORDER BY cal_events.event_id DESC"); 
				
    while($values_query = mysqli_fetch_assoc($query))
    {?>

		<tr class="active">
		<td><input type="checkbox" name="approve_event[]" value="<?php echo $values_query['event_id']; ?>"></td>
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