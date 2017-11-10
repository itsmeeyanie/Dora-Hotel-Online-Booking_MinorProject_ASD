<?php
	include("../includes/functions.php");
	include("../includes/session.php");
?>

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

<!-- SIGNUP -->

<?php

	if(isset($_POST['signup'])) { 

		register();
	}
?>

<!-- RESERVATION -->

<?php

	if(isset($_POST['reservation'])) {
		reservation();
	}
?>

<!-- login -->
<?php

	if(isset($_POST['login'])) { 

		login();
	}
?>

<!-- if (!isLoggedIn()) {
	$_SESSION['msg'] = "You must log in first";
	header('location: login.php');
} -->

<?php
	mysqli_close($connection);
?>