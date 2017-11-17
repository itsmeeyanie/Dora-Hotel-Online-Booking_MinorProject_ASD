
<?php
	include("../includes/functions.php");
	include("../includes/session.php");
?>


<?php  
	session_destroy();
	$_SESSION['user'] = null;
	echo "<script type='text/javascript'> alert('Logged out!')</script>";

	redirect_to("../public/index.php");
?>
