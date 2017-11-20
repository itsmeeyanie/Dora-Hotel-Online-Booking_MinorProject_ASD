 <?php

	function redirect_to($new_location) {
		header("refresh:5 ; Location: ". $new_location);
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
				redirect_to("../public/index.php");
				echo("<meta http-equiv='refresh' content='1'>");
					
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
		$phone = mysqli_real_escape_string($connection, $_POST['phone']);
		$room = mysqli_real_escape_string($connection, $_POST['rName']);
		$room_explode = explode('|', $room);
		$rname = $room_explode[0];
		$room_no = $room_explode[1];
		$rtype = mysqli_real_escape_string($connection, $_POST['rType']);
		$cin = mysqli_real_escape_string($connection, $_POST['cin']);
		$cout = mysqli_real_escape_string($connection, $_POST['cout']);

		$total = "SELECT status from rooms where status = 0";
	    $tnum = mysqli_query($connection, $total);
	    if(!$tnum) {
	      die("Database query failed.");
	    }else{
	      $roomcount=mysqli_num_rows($tnum);
	    }

	    if($roomcount==0){
	    	echo "<script type='text/javascript'> alert('Dora is Fully Booked!')</script>";
	    }else{
		    $available = "SELECT status from rooms where status = 1";
		    $aviroom = mysqli_query($connection, $available);
		    if(!$aviroom) {
		      die("Database query failed. " . mysqli_error($connection));
		    }

		    while($row=mysqli_fetch_assoc($aviroom)){
				// echo "Available: <th>".$row['rName']."</th> <th>".$row['rType']."</th>";

			}	

	    }

		if(strcmp($rtype, "Superior Room")==0){
			$checksup = "SELECT roombook.room_no FROM roombook LEFT JOIN rooms ON roombook.room_no = rooms.id AND (cin BETWEEN '$cin' AND '$cout' OR cout BETWEEN '$cin' AND '$cout') WHERE rooms.status = 1";
		    	$check1 = mysqli_query($connection, $checksup);
			    if(!$check1) {
			      die("Database query failed.");
			    }else{
			      $checksuperior=mysqli_num_rows($check1);
			    }
   			if($checksuperior>0){
		    	$superior = "SELECT rType from rooms where rType='Superior Room' and status=0";
			    $sup = mysqli_query($connection, $superior);
			    if(!$sup) {
			      die("Database query failed. " . mysqli_error($connection));
			    }else{
			      $supcount=mysqli_num_rows($sup);
			    }
				    if($supcount!=0){
						$query = "INSERT INTO roombook(fullName, phone, rName, rType, cin, cout, room_no) values ('{$fname}', '{$phone}', '{$rname}', '{$rtype}', '{$cin}', '{$cout}', '{$room_no}')";
						$result = mysqli_query($connection, $query);
						if($result) {
							echo "<script type='text/javascript'> alert('Your reservation is successful!')</script>";
							echo("<meta http-equiv='refresh' content='1'>");
							redirect_to("../includes/confirm.php");
						}else{
							die("Database query failed. " . mysqli_error($connection));
						}
				    }else{
				    	echo "<script type='text/javascript'> alert('Not available within that date. Sorry.')</script>";
				    	$url = '../includes/available_room.php';
				    	$url .= '?cin='.$cin.'';
				    	$url .= '&cout='.$cout.'';
				    	header('Location: ' .$url);
				    }

			    
			}else{
				$query = "INSERT INTO roombook(fullName, phone, rName, rType, cin, cout, room_no) values ('{$fname}', '{$phone}', '{$rname}', '{$rtype}', '{$cin}', '{$cout}', '{$room_no}')";
				$result = mysqli_query($connection, $query);
				if($result) {
					echo "<script type='text/javascript'> alert('Your reservation is successful!')</script>";
					echo("<meta http-equiv='refresh' content='1'>");
					redirect_to("../includes/confirm.php");
				}else{
					die("Database query failed. " . mysqli_error($connection));
				}
			}
		}
		if(strcmp($rtype, "Deluxe Room")==0){

    		$checkdel = "SELECT roombook.room_no FROM roombook LEFT JOIN rooms ON roombook.room_no = rooms.id AND (cin BETWEEN '$cin' AND '$cout' OR cout BETWEEN '$cin' AND '$cout') WHERE rooms.status = 1";
			$check2 = mysqli_query($connection, $checkdel);
				if(!$check2) {
				      die("Database query failed. " . mysqli_error($connection));
				}else{
				      $checkdeluxe=mysqli_num_rows($check2);
				}

   			if($checkdeluxe>0){
		    	$deluxe = "SELECT rType from rooms where rType='Deluxe Room' and status=0";
			    $del = mysqli_query($connection, $deluxe);
			    if(!$del) {
			      die("Database query failed.");
			    }else{
			      $delcount=mysqli_num_rows($del);
			    }
				    if($delcount!=0){
						$query = "INSERT INTO roombook(fullName, phone, rName, rType, cin, cout, room_no) values ('{$fname}', '{$phone}', '{$rname}', '{$rtype}', '{$cin}', '{$cout}', '{$room_no}')";
						$result = mysqli_query($connection, $query);
						if($result) {
							echo "<script type='text/javascript'> alert('Your reservation is successful!')</script>";
							echo("<meta http-equiv='refresh' content='1'>");
							redirect_to("../includes/confirm.php");
						}else{
							die("Database query failed. " . mysqli_error($connection));
						}
				    }else{
				    	echo "<script type='text/javascript'> alert('Not available within that date. Sorry.')</script>";
				    	redirect_to("../includes/available_room.php");
				    }
			}else{
				$query = "INSERT INTO roombook(fullName, phone, rName, rType, cin, cout, room_no) values ('{$fname}', '{$phone}', '{$rname}', '{$rtype}', '{$cin}', '{$cout}', '{$room_no}')";
				$result = mysqli_query($connection, $query);
				if($result) {
					echo "<script type='text/javascript'> alert('Your reservation is successful!')</script>";
					echo("<meta http-equiv='refresh' content='1'>");
					redirect_to("../includes/confirm.php");
				}else{
					die("Database query failed. " . mysqli_error($connection));
					echo $room_no;
				}
			}

		}
		if(strcmp($rtype, "Business Class")==0){
			$checkb = "SELECT roombook.room_no FROM roombook LEFT JOIN rooms ON roombook.room_no = rooms.id AND (cin BETWEEN '$cin' AND '$cout' OR cout BETWEEN '$cin' AND '$cout') WHERE rooms.status = 1";
			$check3 = mysqli_query($connection, $checkb);
				if(!$check3) {
				      die("Database query failed.");
				}else{
				      $checkbusiness=mysqli_num_rows($check3);
				}
   			if($checkbusiness>0){
		    	$businessclass = "SELECT rType from rooms where rType='Business Class' and status=0";
			    $bclass = mysqli_query($connection, $businessclass);
			    if(!$bclass) {
			      die("Database query failed. " . mysqli_error($connection));
			    }else{
			      $bcount=mysqli_num_rows($bclass);
			    }
				    if($bcount!=0){
						$query = "INSERT INTO roombook(fullName, phone, rName, rType, cin, cout, room_no) values ('{$fname}', '{$phone}', '{$rname}', '{$rtype}', '{$cin}', '{$cout}', '{$room_no}')";
						$result = mysqli_query($connection, $query);
						if($result) {
							echo "<script type='text/javascript'> alert('Your reservation is successful!')</script>";
							echo("<meta http-equiv='refresh' content='1'>");
							redirect_to("../includes/confirm.php");
						}else{
							die("Database query failed. " . mysqli_error($connection));
						}
				    }else{
				    	echo "<script type='text/javascript'> alert('Not available within that date. Sorry.')</script>";
				    	redirect_to("../includes/available_room.php");
				    }

			    
			}else{
				$query = "INSERT INTO roombook(fullName, phone, rName, rType, cin, cout, room_no) values ('{$fname}', '{$phone}', '{$rname}', '{$rtype}', '{$cin}', '{$cout}', '{$room_no}')";
				$result = mysqli_query($connection, $query);
					if($result) {
						echo "<script type='text/javascript'> alert('Your reservation is successful!')</script>";
						echo("<meta http-equiv='refresh' content='1'>");
						redirect_to("../includes/confirm.php");
					}else{
						die("Database query failed. " . mysqli_error($connection));
					}
			}

		}
	}

	// function confirm(){
	// 	global $connection;
	// 	$id = mysqli_real_escape_string($connection, $_POST['id']);

	// 	$query = "UPDATE roombook set status=1 WHERE id='$id'";
	// 	$result = mysqli_query($connection, $query);
	// 	if($result) {
	// 		// redirect_to("../public/index.php");
	// 		echo "<script type='text/javascript'> alert('success!')</script>";
	// 	}else{
	// 		die("Database query failed. " . mysqli_error($connection));
	// 	}
	// }
	


	// function edit(){
	// 	global $connection;
	// 	$id = mysqli_real_escape_string($connection, $_POST['id']);
	// 	$rname = mysqli_real_escape_string($connection, $_POST['rname']);
	// 	$rtype = mysqli_real_escape_string($connection, $_POST['rtype']);
	// 	$rrate = mysqli_real_escape_string($connection, $_POST['rrate']);
	// 	$stat = mysqli_real_escape_string($connection, $_POST['status']);

	// 	$query = "UPDATE rooms set rName='$rname', rType='$rtype', rRate='$rrate', status='$stat' WHERE id='$id'";
	// 	$result = mysqli_query($connection, $query);
	// 	if($result) {
	// 		// redirect_to("../public/index.php");
	// 		echo "<script type='text/javascript'> alert('success!')</script>";
	// 	}else{
	// 		die("Database query failed. " . mysqli_error($connection));
	// 	}
	// }

	// function archive_rbook(){
	// 	global $connection;
	// 	$id = mysqli_real_escape_string($connection, $_POST['id']);
	// 	$query = "DELETE FROM roombook WHERE id='$id'";
	// 	$result = mysqli_query($connection, $query);
	// 	if($result) {
	// 		echo "<script type='text/javascript'> alert('success!')</script>";
	// 	}else{
	// 		die("Database query failed. " . mysqli_error($connection));
	// 	}

	// }


	// function archive_users(){
	// 	global $connection;
	// 	$id = mysqli_real_escape_string($connection, $_POST['id']);
	// 	$query = "DELETE FROM users WHERE id='$id'";
	// 	$result = mysqli_query($connection, $query);
	// 	if($result) {
	// 		echo "<script type='text/javascript'> alert('success!')</script>";
	// 	}else{
	// 		die("Database query failed. " . mysqli_error($connection));
	// 	}

	// }

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
					redirect_to("../admin/index.php");		  
				}else{
					$_SESSION['user'] = $logged_in_user;
					$_SESSION['success']  = "You are now logged in";
					redirect_to("../public/index.php");
				}
			}else {
				echo "<script type='text/javascript'> alert('Wrong username/password combination')</script>";
				// redirect_to("../public/index.php");
			}
	}

	function confirm_logged_in() {
		if (isset($_SESSION['user'])) {
			return true;
		}else{
			return false;
		}
	}

?>
