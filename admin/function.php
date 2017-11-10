<?php 

function navigation () {
	<ul class="nav" id="main-menu">

                    <li>
                        <a  href="../public/index.php"><i class="fa fa-home"></i> Homepage</a>
                    </li>
                    
                </ul>

                <ul class="nav" id="main-menu">

                    <li>
                        <a href="../admin/index.php?status=<?php echo urlencode("Status");?>">
                          <i class="fa fa-info-circle"></i>Status</a>
                    </li>
                    
                </ul>

                <ul class="nav" id="main-menu">

                    <li>
                        <a  href="../admin/index.php?room_Booking=<?php echo urlencode("Room Booking");?>"><i class="fa fa-tasks"></i> Room Booking</a>
                    </li>
                    
                </ul>

                <ul class="nav" id="main-menu">

                    <li>
                        <a href="../admin/index.php?payment=<?php echo urlencode("Payment");?>"><i class="fa fa-money"></i> Payment</a>
                    </li>
                    
                </ul>

                <ul class="nav" id="main-menu">

                    <li>
                        <a href="../admin/index.php?users=<?php echo urlencode("Users");?>"><i class="fa fa-user"></i> Users</a>
                    </li>
                    
                </ul>

                <ul class="nav" id="main-menu">

                    <li>
                        <a href="../admin/index.php?settings=<?php echo urlencode("Settings");?>"><i class="fa fa-edit"></i> Settings</a>
                    </li>
                    
                </ul>

                <ul class="nav" id="main-menu">

                    <li>
                        <a  href="../admin/index.php?logout=<?php echo urlencode("Logout");?>"><i class="fa fa-sign-out"></i> Log out</a>
                    </li>
                    
                </ul>

}
 
?>