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
              <a class="nav-link" href="reservation.php">My Reservation</a>
            </li>
            <li class="nav-item">
              <button class="btn btn-outline-light" type="button" data-toggle="modal" data-target="#popUpWindow">LOGIN</button>
            </li>
            <!-- <li class="nav-item">
              <button class="btn btn-outline-light" type="button" data-toggle="modal" data-target="#exampleModal">SIGN UP</button>
            </li> -->
          </ul>
        </div>
      </div>
    </nav>
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
                
                <div style="font-size: 20px;">
                    CREATE AN ACCOUNT TO SPEED UP FUTURE BOOKINGS
                </div>
            <br>
                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="index.php">
                     <!--    {{ csrf_field() }} -->

                            <!-- <label for="name" class="col-md-4 control-label">Name</label> -->

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" placeholder="First Name" required autofocus>
<!-- 
                               <!--  @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif -->
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('') ? ' has-error' : '' }}">
                            <!-- <label for="email" class="col-md-4 control-label">Username</label> -->

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" placeholder="Last Name" required>

                               <!--  @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif -->
                            </div>
                        </div>

                        <br>

                        <div class="form-group{{ $errors->has('') ? ' has-error' : '' }}">
                            <!-- <label for="email" class="col-md-4 control-label">Username</label> -->

                            <div class="col-md-6">
                                <input type="number" class="form-control" name="phone number" placeholder="+63" required>

                               <!--  @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif -->
                            </div>
                        </div>

                        <br>

                        <div class="form-group{{ $errors->has('') ? ' has-error' : '' }}">
                            <!-- <label for="email" class="col-md-4 control-label">Username</label> -->

                            <div class="col-md-6">
                                <input type="date" class="form-control" name="birthdate" value="Birthday" placeholder="Birthday" required>

                               <!--  @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif -->
                            </div>
                        </div>

                        <br>

                        <div class="form-group{{ $errors->has('') ? ' has-error' : '' }}">
                            <!-- <label for="email" class="col-md-4 control-label">Username</label> -->

                            <div class="col-md-6">
                                <input id="address" type="address" class="form-control" name="address" placeholder="Address" required>

                               <!--  @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif -->
                            </div>
                        </div>

                        <br>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <!-- <label for="password" class="col-md-4 control-label">Password</label>
 -->
                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" placeholder="Email" required>

                                <!-- @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif -->
                            </div>
                        </div>

                        <br>

                        <div class="form-group">
                            <!-- <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label> -->

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" placeholder="Password" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <!-- <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label> -->

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Confirm Password" required>
                            </div>
                        </div>


                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
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
</form>
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

