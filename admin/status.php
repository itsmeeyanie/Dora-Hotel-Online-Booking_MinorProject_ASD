
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Administrator	</title>
    <!-- Bootstrap Styles-->
    <link href="../admin/assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FontAwesome Styles-->
    <link href="../admin/assets/css/font-awesome.css" rel="stylesheet" />
    <!-- Custom Styles-->
    <link href="../admin/assets/css/custom-styles.css" rel="stylesheet" />
    <!-- TABLE STYLES-->
    <link href="../admin/assets/js/dataTables/dataTables.bootstrap.css" rel="stylesheet" />
</head>
<body>
	 <!-- /. ROW  -->
				<?php
						// include ('db.php');
						// $sql = "select * from roombook";
						// $re = mysqli_query($con,$sql);
						// $c =0;
						// while($row=mysqli_fetch_array($re) )
						// {
						// 		$new = $row['stat'];
						// 		$cin = $row['cin'];
						// 		$id = $row['id'];
						// 		if($new=="Not Conform")
						// 		{
						// 			$c = $c + 1;
									
								
						// 		}
						
						// }
						
									
									

						
				?>
	<!-- ROW -->
	<div class="row">
	    <div class="col-md-12">
	        <div class="panel-default">
	            <div class="panel-body">
	                <div class="panel-group" id="accordion">
						<div class="panel">
	                        <div class="panel-heading" style="background-color: #17a2b8; ">
	                            <h4 class="panel-title" style="color: white; font-weight: bold;">
	                            	New Room Bookings <span class="badge"><!-- <?php echo $c ; ?> --></span>
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
	                                            <th>Email</th>
	                                            <th>Address</th>
												<th>Room</th>
												<th>Bedding</th>
												<th>Meal</th>
												<th>Check In</th>
												<th>Check Out</th>
												<th>Status</th>
												<th>Action</th>
												
	                                        </tr>
	                                    </thead>
		                            <tbody>
		                                        
											<?php
											// $tsql = "select * from roombook";
											// $tre = mysqli_query($con,$tsql);
											// while($trow=mysqli_fetch_array($tre) )
											// {	
											// 	$co =$trow['stat']; 
											// 	if($co=="Not Conform")
											// 	{
											// 		echo"<tr>
											// 			<th>".$trow['id']."</th>
											// 			<th>".$trow['FName']." ".$trow['LName']."</th>
											// 			<th>".$trow['Email']."</th>
											// 			<th>".$trow['Address']."</th>
											// 			<th>".$trow['TRoom']."</th>
											// 			<th>".$trow['Bed']."</th>
											// 			<th>".$trow['Meal']."</th>
											// 			<th>".$trow['cin']."</th>
											// 			<th>".$trow['cout']."</th>
											// 			<th>".$trow['stat']."</th>
														
											// 			<th><a href='roombook.php?rid=".$trow['id']." ' class='btn btn-primary'>Action</a></th>
											// 			</tr>";
											// 	}	
											
											// }
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
                "paging": false
            });

        });
    </script>



</body>
</html>
                    
               