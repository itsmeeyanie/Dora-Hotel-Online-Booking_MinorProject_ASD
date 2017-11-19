 <?php
  
    $dbhost = "localhost";
    $dbuser = "root";
    $dbpass = "gwapami";
    $dbname = "db_dorahotel";
    $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

       if (mysqli_connect_errno()) {
             die("Database cannot connect" . mysqli_connect_error() .
              "(" . mysqli_connect_errno() . ")"
           );
       }

 ?>
 <?php
    // if register button is clicked

      if (isset($conn, $_POST['register']))
       {
      $customer_fname = mysqli_real_escape_string($conn,$_POST["customer_fname"]);
      $customer_lname = mysqli_real_escape_string($conn,$_POST["customer_lname"]);
      $address = mysqli_real_escape_string($conn,$_POST["address"]);
      $email = mysqli_real_escape_string($conn,$_POST["email"]);
      $password = mysqli_real_escape_string($conn, $_POST["password"]);
      $password_2 = mysqli_real_escape_string($conn, $_POST["password_2"]);
      $username = mysqli_real_escape_string($conn, $_POST["username"]);
      $visible = "";

              $password = md5($password);
            // INSERTING data
                   $query = "INSERT INTO users (customer_fname, customer_lname, address, email, username, password, visible) VALUES ('$customer_fname','$customer_lname', '$address','$email','$username','$password', visible)";
              
           $result = mysqli_query($conn, $query);
            if($result) {
              echo("");
              }else{

              die("Database query failed" . mysqli_error($conn));
            }
           
        } 
 
 ?>

