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
    

<section style="background-color: rgb( 230, 230, 230 );">
    <div class="container p-5 m-auto"> 
        <div class="row pt-5">
            <div class="col-md-6"><h1 class="page-header">RESERVATION</h1></div>
        </div><br>
      <div class="row pb-5" >
        <div class="col-md-4 col-sm-4">
          <div class="panel panel-primary">
            <div class="panel-heading"> <strong> RESERVATION INFORMATION </strong> </div>
              <div class="panel-body">
                <!-- FORM -->
                <form class="form-horizontal" action="../includes/config.php" method="POST">
                    <div class="form-group">
                        <label>Full Name *</label>
                        <input type="text" class="form-control" name="fullName" required="">
                    </div>
                    <div class="form-group">
                        <label>Email *</label>
                            <input type="text" class="form-control" name="email" required="">
                    </div>
                    <div class="form-group">
                        <label>Phone *</label>
                            <input type="text" class="form-control" name="phone" required="">
                    </div>

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
                          </select>
                    </div>
                    <div class="form-group">
                      <label>Amenities</label>
                          <select name="meal" class="form-control" required>
                            <option value selected ></option>
                            <option value="Room only">Room only</option>
                            <option value="Breakfast">Breakfast</option>
                            <option value="Half Board">Half Board</option>
                            <option value="Full Board">Full Board</option>
                          </select>
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

			
</section>

<!-- Footer -->
    <?php include("../includes/footer.php"); ?>

</body>
</html>