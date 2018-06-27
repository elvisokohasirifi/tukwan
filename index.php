<!DOCTYPE html>
<?php  
  include 'myfunctions.php';
?>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Tukwan - Home</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/modern-business.css" rel="stylesheet">

  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light fixed-top">
      <div class="container">
        <a class="navbar-brand" href="index.php"><img src="images/tukwanlogo.png" height="40px"></a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="about/" style="color: #005ce6">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="services/" style="color: #005ce6">Services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="tourguides/" style="color: #005ce6">Tour Guides</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownPortfolio" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: #005ce6">
                Bookings
              </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownPortfolio">
                <a class="dropdown-item" href="hotels/" style="color: #005ce6">Hotel Reservation</a>
                <a class="dropdown-item" href="carrentals/" style="color: #005ce6">Car Rental</a>
                <a class="dropdown-item" href="tourguides/" style="color: #005ce6">Tour Guides</a>
              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownBlog" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: #005ce6">
                Events
              </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownBlog">
                <a class="dropdown-item" href="tourevents/" style="color: #005ce6">Tour Events</a>
                <a class="dropdown-item" href="otherevents/" style="color: #005ce6">Other Events</a>
                <a class="dropdown-item" href="createevent/" style="color: #005ce6">Create an Event</a>

              </div>
            </li>  
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownPortfolio" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: #005ce6">
                Places
              </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownPortfolio">
                <a class="dropdown-item" href="toursites/" style="color: #005ce6">Tour Sites</a>
                <a class="dropdown-item" href="terminals/" style="color: #005ce6">Bus Terminals</a>
                <a class="dropdown-item" href="landmarks/" style="color: #005ce6">Important Landmarks</a>
              </div>
            </li>          
            <li class="nav-item">
              <a class="nav-link" href="contact/" style="color: #005ce6">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <header>
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
          <!-- Slide One - Set the background image for this slide in the line below -->
          <div class="carousel-item active" style="background-image: url('images/kakum.jpg')">
            <div class="carousel-caption d-none d-md-block" style="background-color: rgba(0,0,0,0.6);">
              <h3>Tour the beautiful rainforests of Africa</h3>
              <p>Visit the surviving rainforests in Africa and appreciate the beauty of nature.</p>
            </div>
          </div>
          <!-- Slide Two - Set the background image for this slide in the line below -->
          <div class="carousel-item" style="background-image: url('images/kempinski.jpg')">
            <div class="carousel-caption d-none d-md-block" style="background-color: rgba(0,0,0,0.6);">
              <h3>Hotel reservations made easier</h3>
              <p>With Tukwan, you do not have to worry about hotel reservations. We take charge!</p>
            </div>
          </div>
          <!-- Slide Three - Set the background image for this slide in the line below -->
          <div class="carousel-item" style="background-image: url('images/restaurant.jpg')">
            <div class="carousel-caption d-none d-md-block" style="background-color: rgba(0,0,0,0.6);">
              <h3>Locations of important landmarks</h3>
              <p>Find the locations of important landmarks such as restaurants, bus terminals and ATMS.</p>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </header>

    <!-- Page Content -->
    <div class="container">

      <div class="py-5 bg-white" id="about">
        <div class="container text-center">
          <div class="row">
            <div class="col-lg-10 mx-auto">
              <h2 style="color: #005ce6">Tukwan</h2>
              <p class="lead mb-5">"Tukwan" a Twi word which simply means "travel". We are bringing everything closer to your fingers when travelling. When travelling, just go because we will carry your stress while you enjoy. Tukwan should be a global word at the mention of travel or tour.
              </p>
            </div>
          </div>
        </div>
      </div>

      <!-- Portfolio Section -->
      <h2 style="color: #005ce6">Bookings</h2>

      <div class="row">
        <div class="col-lg-4 col-sm-6 portfolio-item">
          <div class="card h-100">
            <a href="#"><img class="card-img-top" src="images/site1.jpg" alt="" height="250px"></a>
            <div class="card-body">
              <h4 class="card-title">
                <a href="#">Book a tour</a>
              </h4>
              <p class="card-text">Book a tour at great discounts. We have offers for families and groups at amazingly affordable prices.</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6 portfolio-item">
          <div class="card h-100">
            <a href="#"><img class="card-img-top" src="images/kempinski.jpg" alt="" height="250px"></a>
            <div class="card-body">
              <h4 class="card-title">
                <a href="#">Hotel Reservation</a>
              </h4>
              <p class="card-text">Make great savings by making all your hotel reservations with us. Our prices are unbeatable.</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6 portfolio-item">
          <div class="card h-100">
            <a href="#"><img class="card-img-top" src="images/car1.png" alt="" height="250px"></a>
            <div class="card-body">
              <h4 class="card-title">
                <a href="#">Car Rental</a>
              </h4>
              <p class="card-text">We offer you huge discounts on all your car rentals for your weddings, parties, excursions, etc. You select, we deliver.</p>
            </div>
          </div>
        </div>
      </div>
      <!-- /.row -->
      <h2 style="color: #005ce6">Traveller's Guide</h2>

      <div class="row">
        <div class="col-lg-4 col-sm-6 portfolio-item">
          <div class="card h-100">
            <a href="#"><img class="card-img-top" src="images/bus1.jpg" alt="" height="250px"></a>
            <div class="card-body">
              <h4 class="card-title">
                <a href="#">Bus terminals</a>
              </h4>
              <p class="card-text">Locate all bus important bus terminals in Africa with ease.</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6 portfolio-item">
          <div class="card h-100">
            <a href="#"><img class="card-img-top" src="images/site2.jpg" alt="" height="250px"></a>
            <div class="card-body">
              <h4 class="card-title">
                <a href="#">Tourist Sites</a>
              </h4>
              <p class="card-text">Find all necessary information about tourist sites with ease.</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6 portfolio-item">
          <div class="card h-100">
            <a href="#"><img class="card-img-top" src="images/guide1.jpg" alt="" height="250px"></a>
            <div class="card-body">
              <h4 class="card-title">
                <a href="#">Tour Guides</a>
              </h4>
              <p class="card-text">Hire a tour guide at your own convenience.</p>
            </div>
          </div>
        </div>
      </div>

      <h2 style="color: #005ce6">Upcoming Events</h2>
      <div style="margin-top: 50px; margin-bottom: 50px" id="content">
          <?php 
            echo loadEvents();
          ?>
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container -->
    <!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Tukwan 2018</p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="js.js"></script>

  </body>

</html>
