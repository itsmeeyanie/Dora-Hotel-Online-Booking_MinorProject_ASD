<?php

	function redirect_to($new_location) {
		header("Location: ". $new_location);
		exit;
	}

	function register() {
		global $connection;
		$fname = mysqli_real_escape_string($connection, $_POST['fname']);
		$lname = mysqli_real_escape_string($connection, $_POST['lname']);
		$ad = mysqli_real_escape_string($connection, $_POST['address']);
		$email = mysqli_real_escape_string($connection, $_POST['email']);
		$uname = mysqli_real_escape_string($connection, $_POST['username']);
		$pword = md5(mysqli_real_escape_string($connection, $_POST['password']));
		// $pword2 = md5(mysqli_real_escape_string($connection, $_POST['password_confirmation']));
		
		
			$query = "INSERT INTO users(fname, lname, address, email, username, hashed_password, user_type) values ('{$fname}', '{$lname}', '{$ad}', '{$email}', '{$uname}', '{$pword}', 'user')";
			$result = mysqli_query($connection, $query);
			if($result) {
				$logged_in_user_id = mysqli_insert_id($connection);
				$_SESSION['user'] = getUserById($logged_in_user_id); // put logged in user in session
				// $_SESSION['success']  = "You are now logged in";
				redirect_to("../public/index.php");
					
			}else{
				die("Database query failed. " . mysqli_error($connection));
			}
		
	}


	function getUserById($id){
		global $connection;
		$query = "SELECT * FROM users WHERE id=" . $id;
		$result = mysqli_query($connection, $query);

		$user = mysqli_fetch_assoc($result);
		return $user;
	}

	function reservation(){
		global $connection;
		$fname = mysqli_real_escape_string($connection, $_POST['fullName']);
		$email = mysqli_real_escape_string($connection, $_POST['email']);
		$phone = mysqli_real_escape_string($connection, $_POST['phone']);
		$troom = mysqli_real_escape_string($connection, $_POST['troom']);
		$bed = mysqli_real_escape_string($connection, $_POST['bed']);
		$nroom = mysqli_real_escape_string($connection, $_POST['nroom']);
		$meal = mysqli_real_escape_string($connection, $_POST['meal']);
		$cin = mysqli_real_escape_string($connection, $_POST['cin']);
		$cout = mysqli_real_escape_string($connection, $_POST['cout']);

		$query = "INSERT INTO roombook(fullName, email, phone, troom, bed, nroom, meal, cin, cout) values ('{$fname}', '{$email}', '{$phone}', '{$troom}', '{$bed}', '{$nroom}', '{$meal}', '{$cin}', '{$cout}')";
		$result = mysqli_query($connection, $query);
		if($result) {
			redirect_to("../public/index.php");
			echo "<script type='text/javascript'> alert('Your reservation is successful!')</script>";
		}else{
			die("Database query failed. " . mysqli_error($connection));
		}
	}

	function login(){
		global $connection;
		// grap form values
		$username = mysqli_real_escape_string($connection, $_POST['username']);
		$password = md5(mysqli_real_escape_string($connection, $_POST['password']));

			$query = "SELECT * FROM users WHERE username='$username' AND hashed_password='$password' LIMIT 1";
			$results = mysqli_query($connection, $query);

			if (mysqli_num_rows($results) == 1) { // user found
				// check if user is admin or user
				$logged_in_user = mysqli_fetch_assoc($results);
				if ($logged_in_user['user_type'] == 'admin') {
					$_SESSION['user'] = $logged_in_user;
					$_SESSION['success']  = "You are now logged in";
					echo "success";
					redirect_to("../admin/index.php");		  
				}else{
					$_SESSION['user'] = $logged_in_user;
					$_SESSION['success']  = "You are now logged in";
					echo "success";
					redirect_to("../public/index.php");
				}
			}else {
				echo "Wrong username/password combination";

			}
	}

	function isLoggedIn() {
		if (isset($_SESSION['user'])) {
			return true;
		}else{
			return false;
		}
	}

?>
