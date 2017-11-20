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
	$cin = $_GET['cin'];
	$cout = $_GET['cout'];
    $sql = "SELECT distinct roombook.room_no, roombook.rType, roombook.rName FROM roombook LEFT JOIN rooms ON roombook.room_no = rooms.id AND (cin not BETWEEN '$cin' AND '$cout' OR cout not BETWEEN '$cin' AND '$cout') where rooms.status =1 ORDER BY roombook.room_no ASC";
    $mysql = mysqli_query($connection, $sql);
    if(!$mysql) {
      die("Database query failed. " . mysqli_error($connection));
    }
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>DORA ADMIN</title>
    <!-- Bootstrap core CSS -->
    <link href="../public/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="assets/css/custom-styles.css" rel="stylesheet">
    <link href="../public/css/one-page-wonder.css" rel="stylesheet">
    <link href="../public/css/easy-responsive-tabs.css" rel='stylesheet' type='text/css'/>
  <!-- Bootstrap Styles-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FontAwesome Styles-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
        <!-- Custom Styles-->
    <link href="assets/css/custom-styles.css" rel="stylesheet" />
     <!-- Google Fonts-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>

<body>
	<p class="p-5">This are the available rooms for <?php echo $cin;?> and <?php echo $cout;?>.</p>
	<div class="row">
	    <div class="col-md-6 p-3">
	        <div class="panel-default">
	            <div class="panel-body">
	                <div class="panel-group" id="accordion">
						<div class="panel">
	                        <div class="panel-heading p-3" style="background-color: #17a2b8; ">
	                            <h4 class="panel-title" style="color: white;">
	                            	Available Rooms 
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
                                            <th>Room Name</th>
                                            <th>Room type</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
		                                <?php
											while($row=mysqli_fetch_assoc($mysql)){
												echo "<tr>";
												foreach ($row as $value) {
													echo "<td>".$value."</td>";
												}
												echo "<tr>";

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
	<div class="p-3">
		<a href="#" onclick="history.go(-1)"><button class="btn btn-secondary">Back</button></a>
	</div>
	


	
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