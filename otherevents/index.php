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
      <?php 
      $ans = loadOtherEvents(); 
      $pageno = $ans[1];
      $total_pages = $ans[2];
      echo $ans[0];
      ?>
      <!-- Pagination -->
      <ul class="pagination">
        <li><a href="?pageno=1">First</a></li>
        <li class="<?php if($pageno <= 1){ echo 'disabled'; } ?>">
            <a href="<?php if($pageno <= 1){ echo '#'; } else { echo "?pageno=".($pageno - 1); } ?>">Prev</a>
        </li>
        <li class="<?php if($pageno >= $total_pages){ echo 'disabled'; } ?>">
            <a href="<?php if($pageno >= $total_pages){ echo '#'; } else { echo "?pageno=".($pageno + 1); } ?>">Next</a>
        </li>
        <li><a href="?pageno=<?php echo $total_pages; ?>">Last</a></li>
    </ul>

    </div>
    <!-- /.container -->
    <?php echo footer(); ?>
  </body>

</html>
