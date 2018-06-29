<?php 
	function nav($head='Tukwan'){
		return '<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>'.$head.'</title>

    <!-- Bootstrap core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="../css/modern-business.css" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,600">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.6/css/all.css">
    <link rel="stylesheet" href="../assets/css/animate.css">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/media-queries.css">
    <style type="text/css">
      h3{color: white;}
      body, p, h2, h3, a, li{
        font-family: Trebuchet MS;
      }
    </style>
  </head>
  <body>

    <!-- Navigation -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light fixed-top">
      <div class="container">
        <a class="navbar-brand" href="../index.php"><img src="../images/tukwanlogo.png" height="40px"></a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="about/" style="color: #005ce6">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../services/" style="color: #005ce6">Services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../tourguides/" style="color: #005ce6">Tour Guides</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownPortfolio" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: #005ce6">
                Bookings
              </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownPortfolio">
                <a class="dropdown-item" href="../hotels/" style="color: #005ce6">Hotel Reservation</a>
                <a class="dropdown-item" href="../carrentals/" style="color: #005ce6">Car Rental</a>
                <a class="dropdown-item" href="../tourguides/" style="color: #005ce6">Tour Guides</a>
              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownBlog" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: #005ce6">
                Events
              </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownBlog">
                <a class="dropdown-item" href="../tourevents/" style="color: #005ce6">Tour Events</a>
                <a class="dropdown-item" href="../otherevents/" style="color: #005ce6">Other Events</a>
                <a class="dropdown-item" href="../createevent/" style="color: #005ce6">Create an Event</a>

              </div>
            </li>  
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownPortfolio" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: #005ce6">
                Places
              </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownPortfolio">
                <a class="dropdown-item" href="../toursites/" style="color: #005ce6">Tour Sites</a>
                <a class="dropdown-item" href="../terminals/" style="color: #005ce6">Bus Terminals</a>
                <a class="dropdown-item" href="../landmarks/" style="color: #005ce6">Important Landmarks</a>
              </div>
            </li>          
            <li class="nav-item">
              <a class="nav-link" href="../contact/" style="color: #005ce6">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>';
	}

	function footer(){
		return '<footer>
          <div class="footer-top">
            <div class="container">
              <div class="row">
                <div class="col-md-3 footer-about wow fadeInUp">
                  <img class="logo-footer" src="../images/tukwanbaglogo.png" alt="logo-footer" data-at2x="../images/tukwanbaglogo.png" align="center">
                  <p>
                    We are the name behind a successful and enjoyable touring experience.
                  </p>
                  <p><a href="#">Our Team</a></p>
                      </div>
                <div class="col-md-4 offset-md-1 footer-contact wow fadeInDown">
                  <h3>Contact</h3>
                      <p><i class="fas fa-map-marker-alt"></i> Via Rossini 10, 10136 Turin Italy</p>
                      <p><i class="fas fa-phone"></i> Phone: (0039) 333 12 68 347</p>
                      <p><i class="fas fa-envelope"></i> Email: <a href="mailto:hello@domain.com">hello@domain.com</a></p>
                      <p><i class="fab fa-skype"></i> Skype: you_online</p>
                      </div>
                      <div class="col-md-4 footer-links wow fadeInUp">
                        <div class="row">
                          <div class="col">
                            <h3>Links</h3>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-6">
                            <p><a class="scroll-link" href="../index.php">Home</a></p>
                            <p><a href="../about/">About</a></p>
                            <p><a href="../services/">Services</a></p>
                            <p><a href="../toursites/">Tour Sites</a></p>
                          </div>
                          <div class="col-md-6">
                            <p><a href="../tourguides/">Tour Guides</a></p>
                            <p><a href="../tourevents/">Events</a></p>
                            <p><a href="../contact/">Contact</a></p>
                          </div>
                        </div>
                      </div>
                </div>
            </div>
          </div>
          <div class="footer-bottom">
            <div class="container">
              <div class="row">
                  <div class="col-md-6 footer-copyright">
                        &copy; Tukwan 2018
                      </div>
                  <div class="col-md-6 footer-social">
                        <a href="#"><i class="fab fa-facebook-f"></i></a> 
              <a href="#"><i class="fab fa-twitter"></i></a> 
              <a href="#"><i class="fab fa-google-plus-g"></i></a> 
              <a href="#"><i class="fab fa-instagram"></i></a> 
              <a href="#"><i class="fab fa-pinterest"></i></a>
                      </div>
                </div>
            </div>
          </div>
        </footer>
        <script src="../images/../vendor/jquery/jquery.min.js"></script>
    	<script src="../images/../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        ';
	}

  function navHome(){
    return '<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Tukwan - Welcome</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="css/modern-business.css" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,600">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.6/css/all.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/media-queries.css">
    <style type="text/css">
      h3{color: white;}
      body, p, h2, h3, a, li{
        font-family: Trebuchet MS;
      }
    </style>
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
    </nav>';
  }

  function footerHome(){
    return '<footer>
          <div class="footer-top">
            <div class="container">
              <div class="row">
                <div class="col-md-3 footer-about wow fadeInUp">
                  <img class="logo-footer" src="images/tukwanbaglogo.png" alt="logo-footer" data-at2x="images/tukwanbaglogo.png" align="center">
                  <p>
                    We are the name behind a successful and enjoyable touring experience.
                  </p>
                  <p><a href="#">Our Team</a></p>
                      </div>
                <div class="col-md-4 offset-md-1 footer-contact wow fadeInDown">
                  <h3>Contact</h3>
                      <p><i class="fas fa-map-marker-alt"></i> Via Rossini 10, 10136 Turin Italy</p>
                      <p><i class="fas fa-phone"></i> Phone: (0039) 333 12 68 347</p>
                      <p><i class="fas fa-envelope"></i> Email: <a href="mailto:hello@domain.com">hello@domain.com</a></p>
                      <p><i class="fab fa-skype"></i> Skype: you_online</p>
                      </div>
                      <div class="col-md-4 footer-links wow fadeInUp">
                        <div class="row">
                          <div class="col">
                            <h3>Links</h3>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-6">
                            <p><a class="scroll-link" href="index.php">Home</a></p>
                            <p><a href="about/">About</a></p>
                            <p><a href="services/">Services</a></p>
                            <p><a href="toursites/">Tour Sites</a></p>
                          </div>
                          <div class="col-md-6">
                            <p><a href="tourguides/">Tour Guides</a></p>
                            <p><a href="tourevents/">Events</a></p>
                            <p><a href="contact/">Contact</a></p>
                          </div>
                        </div>
                      </div>
                </div>
            </div>
          </div>
          <div class="footer-bottom">
            <div class="container">
              <div class="row">
                  <div class="col-md-6 footer-copyright">
                        &copy; Tukwan 2018
                      </div>
                  <div class="col-md-6 footer-social">
                        <a href="#"><i class="fab fa-facebook-f"></i></a> 
              <a href="#"><i class="fab fa-twitter"></i></a> 
              <a href="#"><i class="fab fa-google-plus-g"></i></a> 
              <a href="#"><i class="fab fa-instagram"></i></a> 
              <a href="#"><i class="fab fa-pinterest"></i></a>
                      </div>
                </div>
            </div>
          </div>
        </footer>
        <script src="vendor/jquery/jquery.min.js"></script>
      <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        ';
  }
?>
