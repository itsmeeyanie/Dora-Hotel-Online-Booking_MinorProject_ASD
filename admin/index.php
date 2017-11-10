
<?php
// include('db.php')
if(isset($_GET["status"])) {
  $selected_menu_Status = $_GET["status"];
  $selected_menu_RoomBook = null;
  $selected_menu_Rooms = null;
  $selected_menu_Payment = null;
  $selected_menu_Users = null;
  $selected_menu_Settings = null;
  $selected_menu_Logout =null;
}elseif(isset($_GET["room_Booking"])) {
  $selected_menu_RoomBook = $_GET["room_Booking"];
  $selected_menu_Status = null;
  $selected_menu_Rooms = null;
  $selected_menu_Payment = null;
  $selected_menu_Users = null;
  $selected_menu_Settings = null;
  $selected_menu_Logout =null;
}elseif(isset($_GET["rooms"])) {
  $selected_menu_Rooms = $_GET["rooms"];
  $selected_menu_Status = null;
  $selected_menu_RoomBook = null;
  $selected_menu_Users = null;
  $selected_menu_Payment = null;
  $selected_menu_Settings = null;
  $selected_menu_Logout =null;
}elseif(isset($_GET["payment"])) {
  $selected_menu_Payment = $_GET["payment"];
  $selected_menu_Status = null;
  $selected_menu_RoomBook = null;
  $selected_menu_Rooms = null;
  $selected_menu_Users = null;
  $selected_menu_Settings = null;
  $selected_menu_Logout =null;
}elseif(isset($_GET["users"])) {
  $selected_menu_Users = $_GET["users"];
  $selected_menu_Status = null;
  $selected_menu_RoomBook = null;
  $selected_menu_Rooms = null;
  $selected_menu_Payment = null;
  $selected_menu_Settings = null;
  $selected_menu_Logout =null;
}elseif(isset($_GET["settings"])) {
  $selected_menu_Settings = $_GET["settings"];
  $selected_menu_Status = null;
  $selected_menu_RoomBook = null;
  $selected_menu_Rooms = null;
  $selected_menu_Payment = null;
  $selected_menu_Users = null;
  $selected_menu_Logout =null;
}elseif(isset($_GET["logout"])) {
  $selected_menu_Logout = $_GET["logout"];
  $selected_menu_Status = null;
  $selected_menu_RoomBook = null;
  $selected_menu_Rooms = null;
  $selected_menu_Payment = null;
  $selected_menu_Users = null;
  $selected_menu_Settings = null;
}else{
  $selected_menu_Status = null;
  $selected_menu_RoomBook = null;
  $selected_menu_Rooms = null;
  $selected_menu_Payment = null;
  $selected_menu_Users = null;
  $selected_menu_Settings = null;
  $selected_menu_Logout =null;
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
    <div id="wrapper" style="background-color: #343a40;">
      
      <!-- Navigation -->
        <nav class="navbar-default navbar-side" role="navigation">
          
            <div class="sidebar-collapse">
              <h5 class="text-white p-4"> <i class="fa fa-user"></i> Administrator </h5>
                <ul class="nav" id="main-menu">
                  <li name="stat"><a href="../admin/index.php?status=<?php echo urlencode("Status");?>">
                    <i class="fa fa-dashboard"></i>Status</a>
                  </li>
                </ul>
                <ul class="nav" id="main-menu">
                  <li><a  href="../admin/index.php?room_Booking=<?php echo urlencode("Room Booking");?>">
                    <i class="fa fa-tasks"></i> Room Booking</a>
                  </li>
                </ul>
                <ul class="nav" id="main-menu">
                  <li><a  href="../admin/index.php?rooms=<?php echo urlencode("Room Availability Checker");?>">
                    <i class="fa fa-tasks"></i> Available Rooms</a>
                  </li>
                </ul>
                <ul class="nav" id="main-menu">
                  <li><a href="../admin/index.php?users=<?php echo urlencode("Users Management");?>">
                    <i class="fa fa-user"></i> Users</a>
                  </li>
                </ul>
                <ul class="nav" id="main-menu">
                  <li><a href="../admin/index.php?payment=<?php echo urlencode("Payment Details");?>">
                    <i class="fa fa-money"></i> Payment</a>
                  </li>
                </ul>
                <ul class="nav" id="main-menu">
                  <li><a href="../admin/index.php?settings=<?php echo urlencode("Settings");?>">
                    <i class="fa fa-gear"></i> Settings</a>
                  </li>
                </ul>
                <ul class="nav" id="main-menu">
                  <li><a  href="../admin/index.php?logout=<?php echo urlencode("Logout");?>">
                    <i class="fa fa-sign-out"></i> Log out</a>
                  </li>
                </ul>
              </div>
            </nav>
       <div class="p-3 text-white text-right">
        <?php 
          $current_date = date('M-j-Y');
          echo "Date: " .$current_date;
        ?>
        <br>
        <?php 
          date_default_timezone_set("Asia/Manila");
          $current_time = date("h:i:sa");
          echo "Time: " .$current_time;
        ?>
      </div>
        <div id="page-wrapper" >
          <div id="page-inner">
            <div class="row">
                <div class="col-md-12">
                  <h2 style="font-family: sans-serif;"> DORA HOTEL ONLINE BOOKING MANAGEMENT </h2>
                <h3 class="page-header pt-5" style="font-family: Monospace;">
                    <?php echo $selected_menu_Status;?>
                    <?php echo $selected_menu_Payment; ?>
                    <?php echo $selected_menu_RoomBook; ?>
                    <?php echo $selected_menu_Rooms; ?>
                    <?php echo $selected_menu_Settings; ?>
                    <?php echo $selected_menu_Users; ?>
                    <?php echo $selected_menu_Logout; ?>
                </h3>

                <?php 
                if(isset($selected_menu_Status)){
                  include("../admin/status.php");
                }elseif(isset($selected_menu_Payment)){
                  include("../admin/payment.php");
                }elseif(isset($selected_menu_RoomBook)){
                  include("../admin/roombook.php");
                }elseif(isset($selected_menu_Rooms)){
                  include("../admin/rooms.php");
                }elseif(isset($selected_menu_Settings)){
                  include("../admin/settings.php");
                }elseif(isset($selected_menu_Users)){
                  include("../admin/users.php");
                }elseif(isset($selected_menu_Logout)){
                  include("../admin/logout.php");
                }

                 ?>

              </div>
            </div>          
            
          </div>
       <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->

        </div>
     <!-- /. WRAPPER  -->
   
</body>
</html>
