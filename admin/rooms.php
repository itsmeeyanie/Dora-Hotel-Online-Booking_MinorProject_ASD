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
		$query = "select * from rooms";
		$result = mysqli_query($connection, $query);
		if(!$result) {
			die("Database query failed.");
		}
	?>

	<?php
		$count = "SELECT COUNT (*) from rooms where status = 0";
		$num = mysqli_query($connection, $count);
		if(!$result) {
			die("Database query failed.");
		}
	?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>


	<div class="col-md-4 col-sm-4">
                    <div class="panel panel-default p-4 panel-group">
                        <div class="panel-heading text-white" style="background-color: #17a2b8;">
                           Available Room Details
                        </div>
                        <div class="panel-body">
						<table width="200px">
							
							<tr>
								<td><b>Superior Room	 </b></td>
								<td><button type="button" class="btn btn-primary btn-circle">
									<?php  
									// $f1 =$sc - $csc;
									// if($f1 <=0 )
									// {	$f1 = "NO";
									// 	echo $f1;
									// }
									// else{
									// 		echo $f1;
									// }
									?> 
								</button></td> 
							</tr>
							<tr>
								<td><b>Guest House</b>	 </td>
								<td><button type="button" class="btn btn-primary btn-circle">
									<?php 
										// $f2 =  $gh -$cgh;
										// if($f2 <=0 )
										// 	{	$f2 = "NO";
										// 		echo $f2;
										// 	}
										// 	else{
										// 			echo $f2;
										// 	}
									?> 
								</button></td> 
							</tr>
							<tr>
								<td><b>Single Room	 </b></td>
								<td><button type="button" class="btn btn-primary btn-circle">
									<?php
										// $f3 =$sr - $csr;
										// if($f3 <=0 )
										// 	{	$f3 = "NO";
										// 		echo $f3;
										// 	}
										// 	else{
										// 			echo $f3;
										// 	}
									?> 
								</button></td> 
							</tr>
							<tr>
								<td><b>Deluxe Room</b>	 </td>
								<td><button type="button" class="btn btn-primary btn-circle">

									<?php 
								
										// $f4 =$dr - $cdr; 
										// if($f4 <=0 )
										// 	{	$f4 = "NO";
										// 		echo $f4;
										// 	}
										// 	else{
										// 			echo $f4;
										// 	}
									?> 
							</button></td> 
							</tr>
							<tr>
								<td><b>Total Rooms	</b> </td>
								<td> <button type="button" class="btn btn-danger btn-circle">
								<?php 
									// $total = mysqli_fetch_assoc($num);
									
								 ?> 

								</button></td> 
							</tr>
						</table>
						
						
						
                        
						
						</div>
                        <div class="panel-footer" style="background-color: #17a2b8;">
                            
                        </div>
                    </div>
					</div>

					<div class="row">
	    <div class="col-md-12">
	        <div class="panel-default">
	            <div class="panel-body">
	                <div class="panel-group" id="accordion">
						<div class="panel">
							<div class="panel-heading p-4" style="background-color: #17a2b8; ">
	                            
	                        </div>
	                        
	            
	                <div class="panel-body">
	                    <div class="panel panel-default">
	                     <div class="panel-body">
	                        <div class="table-responsive">
	                            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                	<thead>
                                    	<tr>
                                            <th>#</th>
                                            <th>Name</th>
                                            <th>Room type</th>
                                            <th>Rate</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
		                                <?php
											while($row=mysqli_fetch_assoc($result)){
												echo"<tr>
													<th>".$row['id']."</th>
													<th>".$row['rName']."</th>
													<th>".$row['rType']."</th>
													<th>".$row['rRate']."</th>";
													
													if($row['status']){
														echo "<th>"."Not Available"."</th>";
													}else{
														echo "<th>"."Available"."</th>";
													}

													echo "<td><button class=\"btn btn-success\"> Edit </button></td>
													</tr>";
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
</body>
</html>

<?php
	mysqli_free_result($result);
?>

<?php
	mysqli_close($connection);
?>