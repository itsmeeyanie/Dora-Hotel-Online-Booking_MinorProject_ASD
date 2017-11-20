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
	 $errors = array();

	if(isset($_POST['signup'])) { 
		$pass_1 = mysqli_real_escape_string($connection, $_POST['password']);
		$pass_2 = mysqli_real_escape_string($connection, $_POST['password_confirmation']);
		if($pass_1 != $pass_2) 
        {
        	array_push($errors, "Passwords do not match");
        	echo "<script type='text/javascript'> alert('Passwords do not match')</script>";
        }else{
        	register();
        }
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

<!-- roombook Confirmation -->
<?php

	if(isset($_POST['confirm'])) { 

		
	}
?>

<!-- rooms edit -->
<?php

	if(isset($_POST['edit'])) { 
		
	}
?>

<!-- archive roombook -->
<?php

	if(isset($_POST['submit']) && isset($_POST['id']) && !empty($_POST['id'])) {
		
	}
?>

<!-- archive user -->
<?php

	if(isset($_POST['archive_users'])) { 
		
	}
?>


<?php
	mysqli_close($connection);
?>