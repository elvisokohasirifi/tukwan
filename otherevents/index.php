<?php 
  include '../myfunctions.php';
  include '../headers.php'; 
?>
<!DOCTYPE html>
<html lang="en">

  <?php echo nav('Tukwan - Other Events'); 
  ?>


  <header class="py-5 bg-image-full" 
  style="background-image: url('../images/eastern1.jpg'); background-repeat: no-repeat;background-position: center; background-size: cover;
  position: relative; opacity: 0.7;
  width: 100%;
  height: 50%;">
      <img class="img-fluid d-block mx-auto" src="../images/tukwanbaglogo.png" alt="" width="10%">
    </header>

      <div class="container">
      <!-- Page Heading -->
      <h1 class="my-4" style="color: #005ce6">Upcoming
        <small>Events</small>
      </h1>
      <?php echo loadOtherEvents(); ?>
      <!-- Pagination -->
      <ul class="pagination justify-content-center">
        <li class="page-item">
          <a class="page-link" href="#" aria-label="Previous">
            <span aria-hidden="true">&laquo;</span>
            <span class="sr-only">Previous</span>
          </a>
        </li>
        <li class="page-item">
          <a class="page-link" href="#">1</a>
        </li>
        <li class="page-item">
          <a class="page-link" href="#">2</a>
        </li>
        <li class="page-item">
          <a class="page-link" href="#">3</a>
        </li>
        <li class="page-item">
          <a class="page-link" href="#" aria-label="Next">
            <span aria-hidden="true">&raquo;</span>
            <span class="sr-only">Next</span>
          </a>
        </li>
      </ul>

    </div>
    <!-- /.container -->
    <?php echo footer(); ?>
  </body>

</html>
