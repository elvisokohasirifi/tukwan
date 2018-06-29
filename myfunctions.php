<?php 
	session_start();
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "tukwandb";

	$connection = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($connection->connect_error) {
	    die("Connection failed: " . $connection->connect_error);
	}	 

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

	function regions($var='Ashanti'){
	  	$ans = queryMysql("select * from place where name like '$var%' and location = ''");
	  	$row = $ans -> fetch_assoc();
	  	$imagetwo = $row['imagetwo'];
	    $imagethree = $row['imagethree'];
	    $imageone = $row['imageone'];
	    $description = $row['description'];
	    return array($imageone, $imagetwo, $imagethree, $description, $var);
  	}

	function loadEvents($var=""){
	    $ans = '';
	    $result = queryMysql("select * from event where startdate > CURDATE() and status = 'yes'");
	    if($result -> num_rows > 0){
	      while($row = $result -> fetch_assoc()){
				$ans .= '<div class="slides" style="margin-top: 50px; margin-bottom:50px"><div class="row" style="text-align: left;">

					        <div class="col-md-6">
					          <img class="img-fluid rounded" src="images/'.$row['flyer'].'" alt="">
					        </div>

					        <div class="col-md-6">
					          <p><b>Event name:</b> '. $row['eventname'] .'<br>
					          <b>Date:</b> '.$row['startdate'].'<br>
			            	  <b>Time:</b> '.$row['starttime'].'<br>
			            	  <b>Venue:</b> '.$row['venue'].'<br>
			            	  <b>Rate:</b> $'.$row['rate'].'</p>
			         
			         		  <p style="font-size: 80%; line-height: 150%;">'.$row['description'].'</p>
					        </div>

					      </div></div>';
			}
		}
	    else{
	    	$ans = '<p></p>';
	    }
	    return $ans;
	  }

?>