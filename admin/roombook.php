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
		$query = "select * from roombook";
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
                                            <th>Room type</th>
                                            <th>Bedding</th>
                                            <th>No. of Rooms</th>
                                            <th>Meal Plan</th>
                                            <th>Check-in Date</th>
                                            <th>Check-out Date</th>
                                            <th>Status Level</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
		                                <?php
											while($row=mysqli_fetch_assoc($result)){
												echo"<tr>
													<th>".$row['id']."</th>
													<th>".$row['fullName']."</th>
													<th>".$row['phone']."</th>
													<th>".$row['Bed']."</th>
													<th>".$row['Bed']."</th>
													<th>".$row['Meal']."</th>
													<th>".$row['Meal']."</th>
													<th>".$row['cin']."</th>
													<th>".$row['cout']."</th>";
													
													if($row['status']){
														echo "<th>"."Confirmed"."</th>";
													}else{
														echo "<th>"."Not yet"."</th>";
													}
													echo "</tr>";
												}
											?>
											<!-- <th><input type="submit" name="co" value="Confirm" class="btn btn-success"></th> -->

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
	mysqli_close($connection);
?>