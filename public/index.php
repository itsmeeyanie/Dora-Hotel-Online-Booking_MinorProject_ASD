

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

    <!-- FontAwesome Styles-->
    <link href="../admin/assets/css/font-awesome.css" rel="stylesheet" />

    <!-- Custom styles for this template -->
    <link href="css/one-page-wonder.css" rel="stylesheet">
    <link href="css/easy-responsive-tabs.css" rel='stylesheet' type='text/css'/>

    <link rel="stylesheet" type="text/css" href="fonts/FUTRFW.TTF">
    <link rel="stylesheet" type="text/css" href="fonts/TheLightFont.ttf">
    <link rel="stylesheet" type="text/css" href="fonts/Better Together Script.ttf">
  </head>

  <body>

    <!-- Navigation -->
    <?php include("../includes/header.php"); ?>

    <!-- LOGIN MODAL -->
    <div class="modal fade" id="popUpWindow">
      <div class="modal-dialog">
        <div class="modal-content panel-default panel">
        <div class="panel-body">
          <div class="modal-header" style="background-color: gray;">
            <h5 class="text-center text-white">LOGIN</h5>
            <button type="button" class="close" data-dismiss="modal">&times</button>
                </div>

                     <br>
                          <?php

                              // if (!isLoggedIn()) {
                                include("../public/login.php");
                              // }else{
                              //   $_SESSION['login'];
                              // }

                          ?>
                        
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
                                CHECK IN: <input type="date" name="cin" class="form-control">
                             </div>
                             <div class="form-group">
                               CHECK OUT: <input type="date" class="form-control" name="cout" placeholder="Check-out date">
                             </div>
                             <!-- button -->
                              <div class="modal-footer">
                                <button class="btn btn-secondary btn-block">SUBMIT</button>
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
    <div class="wrapper1 m-auto">
      <div class="about pt-5">
        ABOUT DORA
        <div class="col-md-8 order-1 m-auto">
          <p class="a-content">
            Wanna have peace yet a wild place to stay ? Dora Hotel offers you to take a rest and enjoy our best luxury and foods that are cook by our Chef masters. Dora Hotel would also like our customers to be a food critique of our different variety of food. So what are you waiting for? Come, take a rest, Party wild, Eat and bury the burdens.
          </p>
        </div>
      </div>

      <div class="pb-5">
        <div class="container p-5 pt-5">
          <div class="ab-w3l-spa pb-5">
            <img src="images/about.jpg" class="img-responsive">
          </div>
        <div class="clearfix"> </div>
      </div>
    </div>
  </section>
<!-- //about -->

    <!-- OUR SERVICES -->
  <section>
    <div class="advantages">
      <div class="container">
        <div class="container-fluid">
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
  </section>
<!--//sevices-->


   <section>
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-6 order-2">
            <div class="p-5">
              <img class="img-fluid rounded-circle" src="images/g6.jpg" alt="">
            </div>
          </div>
          <div class="col-md-6 order-1">
            <div class="p-5">
              <h2 class="display-4">For those about to rock the Dora...</h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod aliquid, mollitia odio veniam sit iste esse assumenda amet aperiam exercitationem, ea animi blanditiis recusandae! Ratione voluptatum molestiae adipisci, beatae obcaecati.</p>
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
              <img class="img-fluid rounded-circle" src="images/g9.jpg" alt="">
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
              <img class="img-fluid rounded-circle" src="images/g10.jpg" alt="">
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

    <!-- contact -->
    <div class="q2">
    You will love the amenities we offer.
  </div>
<section class="contact-w3ls wrapper1" id="contact">
  
  <div class="m-auto p-4 row container" style="float: right;">
    <div class="col-lg-12 col-md-12 col-sm-12 contact-w3-agile1 text-left" data-aos="flip-right">
      <h4 class="pb-2">Connect With Us</h4>
      <p class="contact-agile1"><strong>Phone: </strong>09266994458</p>
      <p class="contact-agile1"><strong>Email: </strong> <a href="mailto:name@example.com">INFO@DORAHOTEL.COM</a></p>
      <p class="contact-agile1"><strong>Address: </strong>F. Torres Street, Poblacion District, Davao City </p>
                                
        <iframe width="600" height="450" frameborder="2" style="border:0;" src="https://www.google.com/maps/embed/v1/place?key=AIzaSyDotdOA-DR62SDiQMaJXpYPQc4hxSyFO9M
    &q=f.+torres+street+davao+city" allowfullscreen>
        </iframe>

        <div class="social-bnr-agileits footer-icons-agileinfo row col-md-6">
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
  </div>
</section>

   <!-- Footer -->
   <?php include("../includes/footer.php"); ?>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
