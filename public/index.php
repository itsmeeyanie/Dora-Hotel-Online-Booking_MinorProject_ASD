<?php 
  include("../includes/session.php");
  include("../includes/functions.php");
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>DORA</title>

   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script>
    $(document).ready(function(){
      $("a").on('click', function(event) {

        if (this.hash !== "") {
          event.preventDefault();

          var hash = this.hash;

          $('html, body').animate({
            scrollTop: $(hash).offset().top
          }, 800, function(){
            window.location.hash = hash;
          });
        } 
      });
    });
    </script>
    <style>
    body, html, .main {
        height: 100%;
    }

    section {
        min-height: 100%;
    }
    </style>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../public/css/one-page-wonder.css" rel="stylesheet">
    <link href="../public/css/easy-responsive-tabs.css" rel='stylesheet' type='text/css'/>
     <!-- FontAwesome Styles-->
    <link href="../admin/assets/css/font-awesome.css" rel="stylesheet" />

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
                                    <input name="username" type="text" class="form-control" placeholder="Username" value="" required="">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-8">
                                    <input type="password" name="password" class="form-control" placeholder="Password" value="" required="">
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
    

    <!-- slideshow -->
    <header class="masthead pt-5">
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
                <div class="container text-center">
                  <a href="../public/reservation.php">
                    <button class="btn booknow_button btn-dark" type="button">BOOK NOW</button>
                  </a>
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
    <div class="wrapper1 m-auto">
      <div class="about pt-5" id="about">
        ABOUT DORA
        <div class="col-md-8 order-1 m-auto">
          <p class="a-content">
            Wanna have peace yet a wild place to stay ? Dora Hotel offers you to take a rest and enjoy our best luxury and foods that are cook by our Chef masters. Dora Hotel would also like our customers to be a food critique of our different variety of food. So what are you waiting for? Come, take a rest, Party wild, Eat and bury the burdens.
          </p>
        </div>
      </div>
  <!-- banner-bottom -->
  <div class="banner-bottom p-5 pb-5">
    <div class="container"> 
      <div class="w3ls_banner_bottom_grids">
        <ul class="cbp-ig-grid">
          <li>
            <div class="w3_grid_effect">
              <span class="cbp-ig-icon fa fa-credit-card"></span>
              <h4 class="cbp-ig-title">AFFORDABLE</h4>
              <span class="cbp-ig-category">DORA HOTEL</span>
            </div>
          </li>
          <li>
            <div class="w3_grid_effect">
              <span class="cbp-ig-icon fa fa-eye"></span>
              <h4 class="cbp-ig-title">SKY VIEW HOTEL</h4>
              <span class="cbp-ig-category">DORA HOTEL</span>
            </div>
          </li>
          <li>
            <div class="w3_grid_effect">
              <span class="cbp-ig-icon w3_users"></span>
              <h4 class="cbp-ig-title">LARGE COFFEE</h4>
              <span class="cbp-ig-category">DORA HOTEL</span>
            </div>
          </li>
          <li>
            <div class="w3_grid_effect">
              <span class="cbp-ig-icon fa fa-signal"></span>
              <h4 class="cbp-ig-title">FAST INTERNET</h4>
              <span class="cbp-ig-category">DORA HOTEL</span>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </div>
<!-- //banner-bottom -->

      <div class="pb-5">
        <div class="container p-5 pt-5">
          <div class="ab-w3l-spa pb-5">
            <!-- <img src="images/about.jpg" class="img-responsive"> -->
          </div>
        <div class="clearfix"> </div>
      </div>
    </div>
  </section>
<!-- //about -->

    <!-- OUR SERVICES -->
  <section>
    <div class="advantages">
      <div class="container p-5" id="services">
        <div class="container-fluid" >
          <h3 class="title-w3-agileits">Our Services</h3>
            <div class="row">
              <div class="col-md-6 advantage-grid left-w3ls wow bounceInLeft" data-wow-delay="0.3s">
                <div class="advantage-block ">
                  <i class="fa fa-credit-card" style="color: teal;" aria-hidden="true"></i>
                  <h4>Pay First Then Enjoy Your Stay </h4>
                  <p>You will surely enjoy the luxury of our hotel with an affordable cost and perfect amenities which will provide you a memory to remember.</p>
                    <p><i class="fa fa-check" style="color: teal;" aria-hidden="true"></i>Decorated room, proper air conditioned</p>
                    <p><i class="fa fa-check" style="color: teal;" aria-hidden="true"></i>Private balcony</p>
                  </div>
              </div>
              <div class="col-md-6 advantage-grid right-w3ls wow zoomIn" data-wow-delay="0.3s">
                <div class="advantage-block">
                  <i class="fa fa-clock-o" style="color: teal;" aria-hidden="true"></i>
                  <h4>24 Hour Restaurant</h4>
                  <p>The excitement will last anytime you want and enjoy it with a hundred percent service from our passionate and well-trained crew. </p>
                    <p><i class="fa fa-check" style="color: teal;" aria-hidden="true"></i>24 hours room service</p>
                    <p><i class="fa fa-check" style="color: teal;" aria-hidden="true"></i>24-hour Concierge service</p>
                  </div>
              </div>
            <div class="clearfix"> </div>
          </div>
        </div>
      </div>
    </div>
    <!-- <div class="q2">
    You will love the amenities we offer.
    </div> -->
  </section>

<!--//sevices-->

   <section class="pb-5">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-6 order-2">
            <div>
              <img class="img-fluid rounded-circle" src="images/g6.jpg" alt="">
            </div>
          </div>
          <div class="col-md-6 order-1">
            <div>
              <h2 class="display-4">For those about to rock the Dora...</h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod aliquid, mollitia odio veniam sit iste esse assumenda amet aperiam exercitationem, ea animi blanditiis recusandae! Ratione voluptatum molestiae adipisci, beatae obcaecati.</p>
            </div>
          </div>
        </div>
      </div>

      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-6">
            <div>
              <img class="img-fluid rounded-circle" src="images/g9.jpg" alt="">
            </div>
          </div>
          <div class="col-md-6">
            <div>
              <h2 class="display-4">We salute you!</h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod aliquid, mollitia odio veniam sit iste esse assumenda amet aperiam exercitationem, ea animi blanditiis recusandae! Ratione voluptatum molestiae adipisci, beatae obcaecati.</p>
            </div>
          </div>
        </div>
      </div>

      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-6 order-2">
            <div>
              <img class="img-fluid rounded-circle" src="images/g10.jpg" alt="">
            </div>
          </div>
          <div class="col-md-6 order-1">
            <div>
              <h2 class="display-4">Let there be rock!</h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod aliquid, mollitia odio veniam sit iste esse assumenda amet aperiam exercitationem, ea animi blanditiis recusandae! Ratione voluptatum molestiae adipisci, beatae obcaecati.</p>
            </div>
          </div>
        </div>
      </div>
    </section>
      <!-- CONTACT US -->

    <!-- contact -->
    <div class="q2">
    You will love the amenities we offer.
    </div>
<section class="contact-w3ls wrapper1" id="contact">
  
  <div class="m-auto row container" >
    <div class="col-lg-6 col-md-6 col-sm-12 contact-w3-agile1 text-left" data-aos="flip-right">
      <h4 class="pb-2">Connect With Us</h4>
      <p class="contact-agile1"><strong>Phone: </strong>09266994458</p>
      <p class="contact-agile1"><strong>Email: </strong> <a href="mailto:name@example.com">INFO@DORAHOTEL.COM</a></p>
      <p class="contact-agile1"><strong>Address: </strong>F. Torres Street, Poblacion District, Davao City </p>
                                
        <iframe width="600" height="450" frameborder="2" style="border:0;" src="https://www.google.com/maps/embed/v1/place?key=AIzaSyDotdOA-DR62SDiQMaJXpYPQc4hxSyFO9M
    &q=f.+torres+street+davao+city" allowfullscreen>
        </iframe>

        <div class="social-bnr-agileits footer-icons-agileinfo row">
        <ul class="social-icons3 nav p-5">
          <li><a href="#" class="fa fa-facebook icon-border facebook"> </a></li>     
        </ul>
        <ul class="social-icons3 nav p-5">
          <li><a href="#" class="fa fa-twitter icon-border twitter"> </a></li>
        </ul>
        <ul class="social-icons3 nav p-5">
          <li><a href="#" class="fa fa-google-plus icon-border googleplus"> </a></li>      
        </ul>
      </div>
      <div>
        
      </div>

    </div>
  </div>
</section>

   <!-- Footer -->
   <?php include("../includes/footer.php"); ?>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    




  </body>

</html>
