
  <!-- FontAwesome Styles-->
    <link href="../admin/assets/css/font-awesome.css" rel="stylesheet" />

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="../public/index.php" style="font-family: Sweet Pea">Dora Dora</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="../public/index.php">Home</a>
            </li>
            <li class="nav-item ">
              <a class="nav-link" href="#about">About</a>
            </li>
            <li class="nav-item"> 
              <a class="nav-link" href="#services">Services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#contact">Contact</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="reservation.php">My Reservation</a>
            </li>
              <ul class="nav navbar-top-links p-2 text-white text-center">
                  <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                      <i class="fa fa-user fa-fw text-white"></i> 
                  </a>
                  <p style="font-weight: normal; font-family: monospace; margin-left: 10px;">
                    <?php
                        if(isset($_Session['user'])){
                          echo "Welcome". $_Session['user'] ."!";
                        }
                    ?>
                  </p>
                  <ul class="dropdown-menu dropdown-user" style="right: 0; left: auto; background-color: #343a40; ">
                      <li><a href="../includes/logout.php" class="text-white" style="text-decoration: none;"><i class="fa fa-fw"></i> Logout</a></li>
                  </ul>
              </ul>
        </div>
      </div>
    </nav>