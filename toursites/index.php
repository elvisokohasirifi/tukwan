<?php 
  include '../myfunctions.php';
  include '../headers.php'; 
?>
<!DOCTYPE html>
<html lang="en">

  <?php echo nav('Tukwan - Tour sites in Ghana'); 
    if (isset($_GET['region'])) $region = $_GET['region'];
    else $region = 'Ashanti';
    $array = regions($region);
  ?>

    <!-- Page Content -->
    <div class="container">

      <div class="row">

        <div class="col-lg-3">

          <h1 class="my-4" style="color: #005ce6">Regions</h1>
          <div class="list-group">
            <a href="../toursites/?region=Ashanti" class="list-group-item">Ashanti Region</a>
            <a href="../toursites/?region=Eastern" class="list-group-item">Eastern Region</a>
            <a href="../toursites/?region=Upper West" class="list-group-item">Upper West Region</a>
            <a href="../toursites/?region=Central" class="list-group-item">Central Region</a>
            <a href="../toursites/?region=Western" class="list-group-item">Western Region</a>
            <a href="../toursites/?region=Upper East" class="list-group-item">Upper East Region</a>
            <a href="../toursites/?region=Northern" class="list-group-item">Northern Region</a>
            <a href="../toursites/?region=Volta" class="list-group-item">Volta Region</a>
            <a href="../toursites/?region=Greater Accra" class="list-group-item">Greater Accra Region</a>
            <a href="../toursites/?region=Brong Ahafo" class="list-group-item">Brong Ahafo Region</a>
          </div>

        </div>
        <!-- /.col-lg-3 -->

        <div class="col-lg-9">
          <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
          <!-- Slide One - Set the background image for this slide in the line below -->
          <div class="carousel-item active" style="background-image: url('<?php echo '../images/'.$array[0]; ?>')">          
          </div>
          <!-- Slide Two - Set the background image for this slide in the line below -->
          <div class="carousel-item" style="background-image: url('<?php echo '../images/'.$array[1]; ?>')">
          </div>
          <!-- Slide Three - Set the background image for this slide in the line below -->
          <div class="carousel-item" style="background-image: url('<?php echo '../images/'.$array[2]; ?>')">
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

        <div class="py-5 bg-white" id="about">
        <div class="container text-center">
          <div class="row">
            <div class="col-lg-10 mx-auto">
              <h2 style="color: #005ce6">The <?php echo $array[4]; ?> Region</h2>
              <p class="lead mb-5" style="font-size: 85%; text-align: justify; line-height: 20px;"><?php echo $array[3]; ?>
              </p>
            </div>
          </div>
        </div>
      </div>

          <div class="row">
            <?php echo toursites($region); ?>
          </div>
          <!-- /.row -->

        </div>
        <!-- /.col-lg-9 -->

      </div>
      <!-- /.row -->

    </div>
    <?php echo footer(); ?>
  </body>

</html>
