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
		$query = "SELECT  rName from rooms where status=1";
		$result = mysqli_query($connection, $query);
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
	<?php
		while($row=mysqli_fetch_assoc($result)){
			if($row['status']){
				echo "<th>"."Not Available"."</th>";
			}else{
				echo "<th>"."Available"."</th>";
			}
		}
	?>

	<?php
		mysqli_free_result($result);
	?>

</body>
</html>

<?php
	mysqli_close($connection);
?>