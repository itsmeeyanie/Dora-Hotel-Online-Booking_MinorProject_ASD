<?php

include('server.php');

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
    <link href="css/one-page-wonder.css" rel="stylesheet">
    <link href="css/easy-responsive-tabs.css" rel='stylesheet' type='text/css'/>

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
              <a class="nav-link" href="indx.php">Home
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
    <!-- LOGIN MODAL -->
    <div class="modal fade" id="popUpWindow">
      <div class="modal-dialog">
        <div class="modal-content">
          
          <!-- header -->
          <!-- <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times</button>
          </div -->

           <!-- body (form) -->
           <!-- <div class="modal-body">
             <form role="form">
               <div class="form-group">
                 <input type="email" class="form-control" placeholder="Email">
               </div>
               <div class="form-group">
                 <input type="password" class="form-control" placeholder="Password">
               </div>
             </form>
           </div> -->

            <!-- button -->
           <!--  <div class="modal-footer">
              <button class="btn btn-primary btn-block">LOGIN</button>
            </div>
        </div>
      </div>
    </div> -->
<form action="reservation.php">
    <div class="panel-body">
      <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times</button>
          </div>
          <br>
                    <form class="form-horizontal" action="login.php" method="post">
                      <!--   {{ csrf_field() }} -->

                       <!--  <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}"> -->
                            <!-- <label for="email" class="col-md-4 control-label">Username</label> -->

                            <div class="col-md-8">
                                <input id="name" name="username" type="username" class="form-control" placeholder="Username" required autofocus>

                               <!--  @if ($errors->has('email')) -->
                                    <!-- <span class="help-block"> -->
                                        <!-- <strong>{{ $errors->first('email') }}</strong> -->
                                   <!--  </span> -->
                              <!--   @endif -->
                            </div>
                       <!--  </div> -->
                        <br>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <!-- <label for="password" class="col-md-4 control-label">Password</label> -->

                            <div class="col-md-8">
                                <input type="password_1" class="form-control" placeholder="Password" required>

                              <!--   @if ($errors->has('password')) -->
                                    <span class="help-block">
                                      <!--   <strong>{{ $errors->first('password') }}</strong> -->
                                    </span>
                               <!--  @endif -->
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Login
                                </button>

                                <a class="btn btn-link" href="register.php">
                                    Forgot Your Password?
                                </a>
                            </div>
                          <br>
                        <div>
                         <p>If you don't have an account, click <a href="signup.php">here</a> to Sign Up.</p>
                        </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</form>


        <!-- Sign up -->



    <!-- slideshow -->
    <header class="masthead">
    			<div id="my-slider" class="carousel slide" data-ride="carousel">
    				<!-- indicators dot nov -->
    				<ol class="carousel-indicators">
    					<li data-target="#my-slider" data-slide-to="0" class="active"></li>
    					<li data-target="#my-slider" data-slide-to="1"></li>
    					<li data-target="#my-slider" data-slide-to="2"></li>
    				</ol>

    				<!-- wrapper for slides -->
    				<div class="carousel-inner no-gutters" role="listbox">
    					<div class="carousel-item active">
    						<img src="images/pic1.jpg">
    						<div class="carousel-caption">
    							<h1 class="caption">EXPLORE</h1>
    						</div>
    					</div>
    					<div class="carousel-item">
    						<img src="images/pic2.jpg">
    						<div class="carousel-caption">
    							<h1 class="caption" style="color: #343a40;">EXTRAORDINARY</h1>
    						</div>
    					</div>
    					<div class="carousel-item">
    						<img src="images/pic3.jpg">
    						<div class="carousel-caption">
    							<h1 class="caption">EXPERIENCE</h1>
    						</div>
    					</div>
    					<div class="card-img-overlay">
					      	<div class="container">
					      	  <h1 class="intro1 position-relative">dora</h1>
					          <h2 class="intro2 position-relative">Will Rock Your Socks Off</h2>
					      	</div>
					    </div>
              <div class="card-img-overlay">
                <div class="container">
                  <button class="btn booknow_button btn-dark" type="button" data-toggle="modal" data-target="#modal-1">BOOK NOW</button>
                  <div class="modal" id="modal-1">
                    <div class="modal-dialog ">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h4 class="modal-title">Book Your Stay With Us</h4>
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                         <div class="modal-body">
                           <form role="form" action="reservation.php">
                             <div class="form-group">
                                CHECK IN: <input type="date" class="form-control">
                             </div>
                             <div class="form-group">
                               CHECK OUT: <input type="date" class="form-control" placeholder="Check-out date">
                             </div>
                             <!-- button -->
                              <div class="modal-footer">
                                <button class="btn btn-primary btn-block">SUBMIT</button>
                              </div>
                           </form>
                         </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
    				</div>

    				<!-- controls or next and prev buttons -->
    				<a class="left carousel-control-prev" href="#my-slider" role="button" data-slide="prev">
    					<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    					<span class="sr-only">Previous</span>
    				</a>
    				<a class="right carousel-control-next" href="#my-slider" role="button" data-slide="next">
    					<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    					<span class="sr-only">Next</span>
    				</a>
    			</div>
    </header>

    <!-- ABOUT US -->
    <section>
      <div class="wrapper1 m-auto p-5 ">
        <div class="about">
          ABOUT DORA
           <div class="col-md-8 order-1 m-auto">
             <p class="a-content">
              Wanna have peace yet a wild place to stay? Dora Hotel offers you to take a rest and enjoy our best luxury and foods that are cook by our Chef masters. Dora Hotel would also like our customers to be a food critique of our different variety of food. So what are you waiting for? Come, take a rest, Party wild, Eat and bury the burdens.
             </p>
            </div>
          </div>

          <!-- /about -->
  <div class="about-wthree" id="about">
      <div class="container">
           <div class="ab-w3l-spa">
               <img src="images/about.jpg" class="img-responsive" alt="Hair Salon">
                    <div class="w3l-slider-img">
                      <!-- <img src="images/a1.jpg" class="img-responsive" alt="Hair Salon"> -->
                    </div>
                                       <div class="w3ls-info-about">
                        <h4>You will love all the amenities we offer!</h4>
                      <p>Lorem ipsum dolor sit amet, ut magna aliqua. </p>
                    </div>
              </div>
        <div class="clearfix"> </div>
    </div>
</div>
  <!-- //about -->

    </section>

    <!-- OUR SERVICES -->
    <section>
    <!--sevices-->
      <div class="advantages">
        <div class="container">
          <div class="container-fluid">
              <h3 class="title-w3-agileits">Our Services</h3>
             <div class="row">
             <div class="col-md-6 advantage-grid left-w3ls wow bounceInLeft" data-wow-delay="0.3s">
              <div class="advantage-block ">
                <i class="fa fa-credit-card" aria-hidden="true"></i>
                <h4>Stay First, Pay After! </h4>
                <p>Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates.</p>
                <p><i class="fa fa-check" aria-hidden="true"></i>Decorated room, proper air conditioned</p>
                <p><i class="fa fa-check" aria-hidden="true"></i>Private balcony</p>
                
              </div>
             </div>
             <div class="col-md-6 advantage-grid right-w3ls wow zoomIn" data-wow-delay="0.3s">
              <div class="advantage-block">
                <i class="fa fa-clock-o" aria-hidden="true"></i>
                <h4>24 Hour Restaurant</h4>
                <p>Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates.</p>
                <p><i class="fa fa-check" aria-hidden="true"></i>24 hours room service</p>
                <p><i class="fa fa-check" aria-hidden="true"></i>24-hour Concierge service</p>
              </div>
             </div>
            <div class="clearfix"> </div>
            </div>
          </div>
        </div>
      </div>
    <!--//sevices-->

      

    </section>

   <section>
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-6 order-2">
            <div class="p-5">
              <img class="img-fluid rounded-circle" src="images/c1.jpg" alt="">
            </div>
          </div>
          <div class="col-md-6 order-1">
            <div class="p-5">
              <h2 class="display-4">For those about to rock the Dora...</h2>
              <p>Wanna have peace yet a wild place to stay ? Dora Hotel offers you to take a rest and enjoy our best luxury and foods that are cook by our Chef masters. Dora Hotel would also like our customers to be a food critique of our different variety of food. So what are you waiting for? Come, take a rest, Party wild, Eat and bury the burdens.</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section>
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-6">
            <div class="p-5">
              <img class="img-fluid rounded-circle" src="images/c2.jpg" alt="">
            </div>
          </div>
          <div class="col-md-6">
            <div class="p-5">
              <h2 class="display-4">We salute you!</h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod aliquid, mollitia odio veniam sit iste esse assumenda amet aperiam exercitationem, ea animi blanditiis recusandae! Ratione voluptatum molestiae adipisci, beatae obcaecati.</p>
            </div>
          </div>
        </div>
      </div>
    </section> 

    <section>
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-6 order-2">
            <div class="p-5">
              <img class="img-fluid rounded-circle" src="images/c3.jpg" alt="">
            </div>
          </div>
          <div class="col-md-6 order-1">
            <div class="p-5">
              <h2 class="display-4">Let there be rock!</h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod aliquid, mollitia odio veniam sit iste esse assumenda amet aperiam exercitationem, ea animi blanditiis recusandae! Ratione voluptatum molestiae adipisci, beatae obcaecati.</p>
            </div>
          </div>
        </div>
      </div>

      <!-- CONTACT US -->
    </section>
      <div class="q2">
		    Experience a good stay with us.
	    </div>
      <div class="wrapper m-auto" style="">
        Contact Us
      </div>

    </section>

    <!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright 2017 &copy; Dora Hotels. All Rights Reserved | Designed by 
          <a href="#" class="dora">DORA</a>
        </p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


  </body>
  
</html>
<?php


mysqli_close($conn);

?>