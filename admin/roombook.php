
<?php

	define("DB_SERVER", "localhost");
	define("DB_USER", "dorahotel");
	define("DB_PASS", "admin");
	define("DB_NAME", "db_dorahotel");

	$connection = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);

	if(mysqli_connect_errno()){
		die("Database connection failed: " . 
			mysqli_connect_error() . 
			"(" . mysqli_connect_errno() . ")"
		);
	}

?>

	<?php
		$query = "select * from roombook where status=1";
		$result = mysqli_query($connection, $query);
		if(!$result) {
			die("Database query failed.");
		}
	?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<body>
	<div class="row">
	    <div class="col-md-12">
	        <div class="panel-default">
	            <div class="panel-body">
	                <div class="panel-group" id="accordion">
						<div class="panel">
	                        <div class="panel-heading" style="background-color: #17a2b8; ">
	                            <h4 class="panel-title" style="color: white; font-weight: bold;">
	                            	Room Booking Information <span class="badge"><!-- <?php echo $c ; ?> --></span>
	                            </h4>
	                        </div>
	            <div id="collapseTwo" class="panel-collapse in" style="height: auto;">
	                <div class="panel-body">
	                    <div class="panel panel-default">
	                     <div class="panel-body">
	                        <div class="table-responsive">
	                            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                	<thead>
                                    	<tr>
                                            <th>#</th>
                                            <th>Name</th>
                                            <th>Contact</th>
                                            <th>Room Name</th>
                                            <th>Room type</th>
                                            <th>Check-in Date</th>
                                            <th>Check-out Date</th>
                                            <th>Status Level</th>
                                            <th>Action</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
		                                <?php
											while($row=mysqli_fetch_assoc($result)){
												echo"<tr>
													<td>".$row['id']."</td>
													<td>".$row['fullName']."</td>
													<td>".$row['phone']."</td>
													<td>".$row['rName']."</td>
													<td>".$row['rType']."</td>
													<td>".$row['cin']."</td>
													<td>".$row['cout']."</td>";
													
													if($row['status']){
														echo "<td>"."Confirmed"."</td>";
													}else{
														echo "<td>"."Not yet"."</td>";
													}
													echo "<td><form method=\"post\"><input name=\"id\" type=\"hidden\" value='".$row['id']."';><input name=\"submit\" type=\"submit\" class=\"btn btn-danger\" id=".$row['id']." value=\"Archive\"></input></form></td>
														</tr>";

												}	
											?>
											

		                            </tbody>
                                    
                                </table>
	                    </div>
	                </div>
	            </div>
			</div>
	    </div>
	</div>

	<!-- /. ROW  -->

	
	<script src="../admin/assets/js/jquery-1.10.2.js"></script>
    
     <!-- DATA TABLE SCRIPTS -->
    <script src="../admin/assets/js/dataTables/jquery.dataTables.js"></script>
    <script>
        $(document).ready(function() {
            $('#dataTables-example').dataTable({
                "paging": false;
            });

        });
    </script>				



</body>

</html>

	<?php
		mysqli_free_result($result);
	?>

	<?php

	if(isset($_POST['submit']) && isset($_POST['id']) && !empty($_POST['id'])) { 
		$id = mysqli_real_escape_string($connection, $_POST['id']);
		$query = "DELETE FROM roombook WHERE id='$id'";
		$result = mysqli_query($connection, $query);
		if($result) {
			echo "<script type='text/javascript'> alert('Archived!')</script>";
			echo("<meta http-equiv='refresh' content='1'>");
		}else{
			die("Database query failed. " . mysqli_error($connection));
		}
	}

	
?>  

<?php
	mysqli_close($connection);
?>