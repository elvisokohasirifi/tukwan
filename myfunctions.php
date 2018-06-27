<?php 

	include 'config.php';

	function test_input($data) {
	  $data = trim($data);
	  $data = stripslashes($data);
	  $data = htmlspecialchars($data);
	  return $data;
	}

	function queryMysql($query) {    
	  	global $connection;    
	  	$result = $connection->query($query);    
	  	if (!$result) 
	  		die($connection->error);    
	  	return $result;  
	}

	function loadSites($query='Ashanti'){
		$sql = "select * from place inner join touristsite on place.placeid = touristsite.place where region = '$query'";
		$result = queryMysql($sql);	
		if($result -> num_rows > 0)
			return $result;
		echo "Failed";
	}

	function loadEvents($var=""){
    $ans = '';
    $result = queryMysql("select * from event where startdate > CURDATE() and status = 'yes'");
    $count = 0;
    if($result -> num_rows > 0){
      while($row = $result -> fetch_assoc()){
          $ans .= '
          <div class="row myslides" style="display:none">
          <div class="col-lg-6">
          <p><b>Event name:</b> '. $row['eventname'] .'</p>
            <b>Date:</b> '.$row['startdate'].'</p>
		            <p><b>Time:</b> '.$row['starttime'].'</p>
		            <p><b>Venue:</b> '.$row['venue'].'</p>
		            <p><b>Rate:</b> $'.$row['rate'].'</p>
		         </ul>
		         <p>'.$row['description'].'</p>
		         </div>
        <div class="col-lg-6">
          <img class="img-fluid rounded" src="images/'.$row['flyer'].'" alt=""></div></div>';
      }
    }
    else{
    	$ans = '<p></p>';
    }
    return $ans;
  }

?>