<?php 
  include '../myfunctions.php';
  include '../headers.php'; 
?>
<!DOCTYPE html>
<html lang="en">

  <?php 
    if (isset($_GET['site'])) $place = $_GET['site'];
    else $place = 'Lake Bosomtwe';
    echo nav('Tukwan - '.$place); 
    $array = loadSite($place);
  ?>

    <!-- Page Content -->
    <div class="container">

      <!-- Portfolio Item Heading -->
      <h1 class="my-4" style="color: #005ce6"><?php echo $array[4]; ?>
        <small> (<?php echo $array[7]; ?>)</small>
      </h1>

      <!-- Portfolio Item Row -->
      <div class="row">

        <div class="col-md-8">
          <img class="img-fluid" src="../images/<?php echo $array[0]; ?>" alt="">
        </div>

        <div class="col-md-4">
          <h3 class="my-3" style="color: #005ce6">Description</h3>
          <p style="font-size: 95%; line-height: 18px;"><?php echo $array[3]; ?></p>
          <h3 class="my-3">Details</h3>
          <p>
            <b>Contact:</b> <?php echo $array[5]; ?> <br>
            <b>Working hours:</b> <?php echo $array[6]; ?>
          </p>
        </div>

      </div>
      <!-- /.row -->

      <!-- Related Projects Row -->
      <h3 class="my-4" style="color: #005ce6">Related Images</h3>

      <div class="row">

        <div class="col-md-3 col-sm-6 mb-4">
          <a href="#">
            <img class="img-fluid" src="../images/<?php echo $array[1]; ?>" alt="">
          </a>
        </div>

        <div class="col-md-3 col-sm-6 mb-4">
          <a href="#">
            <img class="img-fluid" src="../images/<?php echo $array[2]; ?>" alt="">
          </a>
        </div>
      </div>
      <!-- /.row -->

    </div>
    <?php echo footer(); ?>
  </body>

</html>
