<?php include '../headers.php'; ?>
<!DOCTYPE html>
<html lang="en">

  <?php echo nav('Tukwan - Services'); ?>

    <header>
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
          <!-- Slide One - Set the background image for this slide in the line below -->
          <div class="carousel-item active" style="background-image: url('../images/kakum.jpg')">
            <div class="carousel-caption d-none d-md-block" style="background-color: rgba(0,0,0,0.6);">
              <h3>Tour the beautiful rainforests of Africa</h3>
              <p>Visit the surviving rainforests in Africa and appreciate the beauty of nature.</p>
            </div>
          </div>
          <!-- Slide Two - Set the background image for this slide in the line below -->
          <div class="carousel-item" style="background-image: url('../images/kempinski.jpg')">
            <div class="carousel-caption d-none d-md-block" style="background-color: rgba(0,0,0,0.6);">
              <h3>Hotel reservations made easier</h3>
              <p>With Tukwan, you do not have to worry about hotel reservations. We take charge!</p>
            </div>
          </div>
          <!-- Slide Three - Set the background image for this slide in the line below -->
          <div class="carousel-item" style="background-image: url('../images/restaurant.jpg')">
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

      <!-- Page Heading/Breadcrumbs -->
      <h1 class="mt-4 mb-3" style="color: #005ce6">Services
        <small>we provide</small>
      </h1>

      <!-- Marketing Icons Section -->
      <div class="row text-center">

        <div class="col-lg-3 col-md-6 mb-4">
          <div class="card">
            <img class="card-img-top" src="../images/site2.jpg" alt="" height="150px">
            <div class="card-body">
              <h4 class="card-title">Book a tour</h4>
              <p class="card-text">Book a tour and visit any tour site you desire. We have offers for groups at amazingly affordable prices.</p>
            </div>
            <div class="card-footer">
              <a href="../tourevents/" class="btn btn-primary">Book a tour!</a>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 mb-4">
          <div class="card">
            <img class="card-img-top" src="../images/hotel1.jpg" alt="" height="150px">
            <div class="card-body">
              <h4 class="card-title">Hotel Reservation</h4>
              <p class="card-text">Make great savings by making all your hotel reservations with us. Our prices are unbeatable.</p>
            </div>
            <div class="card-footer">
              <a href="../hotels/" class="btn btn-primary">Make a reservation!</a>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 mb-4">
          <div class="card">
            <img class="card-img-top" src="../images/car2.png" alt="" height="150px">
            <div class="card-body">
              <h4 class="card-title">Car Rental</h4>
              <p class="card-text">We offer you huge discounts on all your car rentals for your weddings, parties, excursions, etc. You select, we deliver.</p>
            </div>
            <div class="card-footer">
              <a href="../carrentals/" class="btn btn-primary">Rent a car!</a>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 mb-4">
          <div class="card">
            <img class="card-img-top" src="../images/guide1.jpg" alt="" height="150px">
            <div class="card-body">
              <h4 class="card-title">Tour Guide Hiring</h4>
              <p class="card-text">We also give you the chance to hire your own tour guide the same way to pick an Uber cab.</p>
            </div>
            <div class="card-footer">
              <a href="../tourguides/" class="btn btn-primary">Hire one now!</a>
            </div>
          </div>
        </div>

      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->

    <?php echo footer(); ?>

  </body>

</html>
