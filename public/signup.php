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

    <!-- Custom styles for this template -->
    <link href="css/custom-styles.css" rel="stylesheet">
    <link href="css/one-page-wonder.css" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="fonts/FUTRFW.TTF">
    <link rel="stylesheet" type="text/css" href="fonts/TheLightFont.ttf">
    <link rel="stylesheet" type="text/css" href="fonts/Better Together Script.ttf">
  </head>
<body>

    <!-- Navigation -->
    <?php include("../includes/header.php"); ?>

    <!-- FORM -->
<section class="col-md-12 pt-5 pb-5" style="background-color: rgb( 230, 230, 230 );">
<div class="container pt-5">
     <div class="col-md-6">
        <h1 class="page-header">
            SIGN UP
        </h1>
    </div>

    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div style="font-size: 22px;">
                    CREATE AN ACCOUNT TO SPEED UP FUTURE BOOKINGS
                </div><br>
                <div class="panel-body">
                    <form class="form-horizontal" action="../includes/config.php" method="POST">

                        <div class="form-group">
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="fname" placeholder="First Name" required="">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="lname" placeholder="Last Name" required="">
                            </div>
                        </div>

                        <div class="form-group">

                            <div class="col-md-6">
                                <input type="address" class="form-control" name="address" placeholder="Address" required="">
                            </div>
                        </div>

                        <div class="form-group">

                            <div class="col-md-6">
                                <input type="email" class="form-control" name="email" placeholder="Email" required="">
                            </div>
                        </div>

                        <div class="form-group">

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="username" value placeholder="Username" required="">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6">
                                <input type="password" class="form-control" name="password" placeholder="Password" required focus>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6">
                                <input type="password" class="form-control" name="password_confirmation" placeholder="Confirm Password" required="">
                            </div>
                        </div>


                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" name="signup" class="btn btn-primary">
                                    Register
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

</section>

<!-- Footer -->
    <?php include("../includes/footer.php"); ?>

</body>
</html>

