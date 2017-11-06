<!DOCTYPE html>

</!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>DORA</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/custom-styles.css" rel="stylesheet">
    <link href="css/one-page-wonder.css" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="fonts/FUTRFW.TTF">
    <link rel="stylesheet" type="text/css" href="fonts/TheLightFont.ttf">
    <link rel="stylesheet" type="text/css" href="fonts/Better Together Script.ttf">
  </head>
<body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#" style="font-family: Sweet Pea">Dora Dora</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="index.php">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item ">
              <a class="nav-link" href="#">About</a>
            </li>
            <li class="nav-item"> 
              <a class="nav-link" href="#">Services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Contact</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">My Reservation</a>
            </li>
            <li class="nav-item">
              <button class="btn btn-outline-light" type="button" data-toggle="modal" data-target="#popUpWindow">LOGIN</button>
            </li>
            
          </ul>
        </div>
      </div>
    </nav>

<section style="background-color: rgb( 230, 230, 230 );">
    <div class="container p-5 m-auto">

			<div class="row pt-5">
          <div class="col-md-6">
            <h1 class="page-header">RESERVATION</h1>
          </div>
      </div><br>
      <div class="row pb-5" >
        <div class="col-md-4 col-sm-4">
          <div class="panel panel-primary">
            <div class="panel-heading"> RESERVATION INFORMATION </div>
              <div class="panel-body">
								<div class="form-group">
                  <label>Type Of Room *</label>
                    <select name="troom"  class="form-control" required>
											<option value selected ></option>
                      <option value="Superior Room">SUPERIOR ROOM</option>
                      <option value="Deluxe Room">DELUXE ROOM</option>
											<option value="Single Room">SINGLE ROOM</option>
                    </select>
                </div>
							  <div class="form-group">
                  <label>Bedding Type</label>
                    <select name="bed" class="form-control" required>
											<option value selected ></option>
                      <option value="Single">Single</option>
                      <option value="Double">Double</option>
											<option value="Triple">Triple</option>
                    </select>
                </div>
							  <div class="form-group">
                  <label>Number of Rooms *</label>
                      <select name="nroom" class="form-control" required>
												<option value selected ></option>
                        <option value="1">1</option>
                        <option value="2">2</option>
												<option value="3">3</option>
												<option value="4">4</option>
											</select>
                </div>
							  <div class="form-group">
                  <label>Amenities</label>
                      <select name="meal" class="form-control"required>
												<option value selected ></option>
                        <option value="Room only">Room only</option>
                        <option value="Breakfast">Breakfast</option>
												<option value="Half Board">Half Board</option>
												<option value="Full Board">Full Board</option>
											</select>
                </div>
							  <div class="form-group">
                  <label>Check-In</label>
                    <input name="cin" type ="date" class="form-control">
                </div>
							  <div class="form-group">
                  <label>Check-Out</label>
                    <input name="cout" type ="date" class="form-control">
                </div>
              </div>
            </div>
          </div>
				<div class="col-md-12 col-sm-8 text-center">
          <div class="pt-5 p-5">
            <h4>USER VERIFICATION</h4>
            <p>Type Below this code <?php $Random_code=rand(); echo$Random_code; ?> </p><br />
						<p>Enter the random code<br /></p>
							<input  type="text" name="code1" title="random code" />
							<input type="hidden" name="code" value="<?php echo $Random_code; ?>" />
						  <input type="submit" name="submit" class="btn btn-primary">
						<?php
							if(isset($_POST['submit']))
							{
							$code1=$_POST['code1'];
							$code=$_POST['code']; 
							if($code1!="$code")
							{
							$msg="Invalide code"; 
							}
							else
							{
							
									$con=mysqli_connect("localhost","root","","hotel");
									$check="SELECT * FROM roombook WHERE email = '$_POST[email]'";
									$rs = mysqli_query($con,$check);
									$data = mysqli_fetch_array($rs, MYSQLI_NUM);
									if($data[0] > 1) {
										echo "<script type='text/javascript'> alert('User Already in Exists')</script>";
										
									}

									else
									{
										$new ="Not Conform";
										$newUser="INSERT INTO `roombook`(`Title`, `FName`, `LName`, `Email`, `National`, `Country`, `Phone`, `TRoom`, `Bed`, `NRoom`, `Meal`, `cin`, `cout`,`stat`,`nodays`) VALUES ('$_POST[title]','$_POST[fname]','$_POST[lname]','$_POST[email]','$_POST[nation]','$_POST[country]','$_POST[phone]','$_POST[troom]','$_POST[bed]','$_POST[nroom]','$_POST[meal]','$_POST[cin]','$_POST[cout]','$new',datediff('$_POST[cout]','$_POST[cin]'))";
										if (mysqli_query($con,$newUser))
										{
											echo "<script type='text/javascript'> alert('Your Booking application has been sent')</script>";
											
										}
										else
										{
											echo "<script type='text/javascript'> alert('Error adding user in database')</script>";
											
										}
									}

							$msg="Your code is correct";
							}
							}
							?>
						</form>
							
                    </div>
                </div>
            </div>
           
                
                </div>
        </div>
     <!-- /. WRAPPER  -->
    <!-- JS Scripts-->
    <!-- jQuery Js -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- Bootstrap Js -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- Metis Menu Js -->
    <script src="assets/js/jquery.metisMenu.js"></script>
      <!-- Custom Js -->
    <script src="assets/js/custom-scripts.js"></script>
</section>

<!-- Footer -->
    <footer class="bg-dark">
      <div class="p-4 container">
        <p class="m-0 text-center text-white" style="font-weight: normal;">Copyright 2017 &copy; Dora Hotels. All Rights Reserved | Designed by 
          <a href="#" class="dora">DORA</a>
        </p>
      </div>
      <!-- /.container -->
    </footer>

</body>
</html>



</html>