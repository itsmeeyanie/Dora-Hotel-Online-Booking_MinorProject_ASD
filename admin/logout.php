
<?php
	include("../includes/functions.php");
	include("../includes/session.php");
?>


<?php  
	session_destroy();
	$_SESSION['user'] = null;
	redirect_to("../public/login.php");
?>