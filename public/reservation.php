<?php
    include("../includes/config.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>DORA</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template 
    <link href="css/custom-styles.css" rel="stylesheet">
    <link href="css/one-page-wonder.css" rel="stylesheet">-->

    <link href="https://fonts.googleapis.com/css?family=Droid+Sans:400,700" rel="stylesheet"> <!--font-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.css">
    <link rel="stylesheet" href="thumbnail/thumbnail-gallery.css">

    <link rel="stylesheet" type="text/css" href="fonts/FUTRFW.TTF">
    <link rel="stylesheet" type="text/css" href="fonts/TheLightFont.ttf">
    <link rel="stylesheet" type="text/css" href="fonts/Better Together Script.ttf">
  </head>
<body>

    <!-- Navigation -->
    <?php
        if (confirm_logged_in()) {
          include("../includes/nav-login.php");
        }else{
          include("../includes/header.php");
        }
    ?>
    

<section style="background-color: rgb( 230, 230, 230 );">
    <?php
      include("../includes/rooms_gallery.php");
    ?>  
  <div class="row advantage-grid left-w3ls">
    <div class="container p-5 m-auto"> 
      <div class="row" >
        <div class="col-md-8 col-sm-2">
          <div class="panel panel-primary">
            <div class="panel-heading p-4"> <strong> <h5>RESERVATION INFORMATION</h5> </strong> </div>
              <div class="panel-body">
                <!-- FORM -->
                <form class="form-horizontal" action="../includes/config.php" method="POST">
                    <div class="form-group">
                        <label>Full Name *</label>
                        <input type="text" class="form-control" name="fullName" required="">
                    </div>
                    
                    <div class="form-group">
                        <label>Phone *</label>
                            <input type="text" class="form-control" name="phone" required="">
                    </div>

                    <div class="form-group">
                      <label>Type Of Room *</label>
                        <select name="rType"  class="form-control" required>
                          <option value selected ></option>
                          <option value="Superior Room">SUPERIOR ROOM</option>
                          <option value="Deluxe Room">DELUXE ROOM</option>
                          <option value="Business Class">BUSINESS CLASS</option>
                        </select>
                    </div>

                    <div class="form-group">
                      <label>Room Name</label>
                        <input type="text" name="rName" class="form-control" required>
                    </div>

                    <div class="form-group">
                      <label>Check-In</label>
                        <input name="cin" type ="date" class="form-control" value="" required="">
                    </div>
                    <div class="form-group">
                      <label>Check-Out</label>
                        <input name="cout" type ="date" class="form-control" value="" required="">
                    </div>
                    <div class="form-group">
                      <button type="submit" name="reservation" class="btn btn-primary">Submit</button>
                        
                    </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>		
  </div>
</section>

 <!-- LOGIN MODAL -->
    <div class="modal fade" id="popUpWindow">
      <div class="modal-dialog">
        <div class="modal-content panel">
        <div class="panel-body p-2">
          <div class="panel-heading modal-header" style="background-color: gray;">
            <h5 class="text-center text-white">LOGIN</h5>
            <button type="button" class="close" data-dismiss="modal">&times</button>
                </div>

                     <br>
                      <form class="form-horizontal" action="../includes/config.php" method="post">
                            <div class="form-group">
                                <div class="col-md-8">
                                    <input name="username" type="text" class="form-control" placeholder="Username" value="">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-8">
                                    <input type="password" name="password" class="form-control" placeholder="Password" value="">
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-8 col-md-offset-4">
                                    <button type="submit" name="login" value="Submit" class="btn btn-dark">
                                        Login
                                    </button>
                                </div>

                            <br>
                             <p class="p-3">If you don't have an account, click <a href="signup.php">here</a> to Sign Up.</p>
                            </div>
                          </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

<!-- Footer -->
    <?php include("../includes/footer.php"); ?>

</body>
</html>