
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
						// include ('db_connection.php');
						// $query = "select * from users";
						// $users = mysqli_query($connection, $query);
						// $c =0;
						// while($row=mysqli_fetch_array($users))
						// {
								
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
	                            	User Profile <span class="badge"><!-- <?php echo $c ; ?> --></span>
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
	                                            <th>Address</th>
												<th>Email</th>
												<th>Username</th>
												<th>Status</th>
												<th>Action</th>
												
	                                        </tr>
	                                    </thead>
		                            <tbody>
		                                        
											<?php
											// $tquery = "select * from users";
											// $tusers = mysqli_query($connection, $query);
											// while($trow=mysqli_fetch_array($tusers) )
											// {	
												
											// 		echo"<tr>
											// 			<th>".$trow['id']."</th>
											// 			<th>".$trow['fname']." ".$trow['lname']."</th>
											// 			<th>".$trow['address']."</th>
											// 			<th>".$trow['email']."</th>
											// 			<th>".$trow['username']."</th>
											// 			</tr>";
												
											
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
                    
               