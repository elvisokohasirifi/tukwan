<?php

	include 'config.php';
	require_once "libchart/libchart/classes/libchart.php";

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

	function loadStudents($query=''){
		$sql = "SELECT customerid, msisdn, first_name, last_name, gender, date_of_birth, phone_no, occupation, beneficiaries, relation, phone, join_date, planned_amount, frequency, association, social_sec_no, nature_of_business, location, zone_of_business, id_type, id_number, name, registration_officer from customer, user where registration_officer = userid " . $query . " order by first_name";
		$ans = '';
		$result = queryMysql($sql);
		if($result -> num_rows > 0){
	      while($row = $result -> fetch_assoc()){
	      	$ans .= '<tr>
	      			  <td>'.$row['msisdn'].'</td>
                      <td>'.$row['first_name'].'</td>
                      <td>'.$row['last_name'].'</td>
                      <td>'.$row['gender'].'</td>
                      <td>'.$row['date_of_birth'].'</td>
                      <td>'.$row['phone_no'].'</td>
                      <td>'.$row['occupation'].'</td>
                      <td>'.$row['beneficiaries'].'</td>
                      <td>'.$row['relation'].'</td>
                      <td>'.$row['phone'].'</td>
                      <td>'.$row['join_date'].'</td>          
                      <td>'.$row['planned_amount'].'</td>
                      <td>'.$row['frequency'].'</td>
                      <td>'.$row['association'].'</td>
                      <td>'.$row['social_sec_no'].'</td>
                      <td>'.$row['nature_of_business'].'</td>
                      <td>'.$row['location'].'</td>
                      <td>'.$row['zone_of_business'].'</td>
                      <td>'.$row['id_type'].'</td>
                      <td>'.$row['id_number'].'</td>
                      <td>'.$row['name'].'</td>
                      <td><a href="javascript:void(0)" onclick="update('.$row['customerid'].', \''.$row['msisdn'].'\', 
                      \''.$row['first_name'].'\', \''.$row['last_name'].'\', \''.$row['gender'].'\', \''.$row['date_of_birth'].'\', \''.$row['phone_no'].'\', \''.$row['occupation'].'\', \''.$row['beneficiaries'].'\', \''.$row['relation'].'\', \''.$row['phone'].'\', \''.$row['join_date'].'\', \''.$row['planned_amount'].'\', \''.$row['frequency'].'\', \''.$row['association'].'\',
      				\''.$row['social_sec_no'].'\', \''.$row['nature_of_business'].'\', \''.$row['location'].'\', \''.$row['zone_of_business'].'\', \''.$row['id_type'].'\', \''.$row['id_number'].'\')" style="font-family: \'Trebuchet MS\', Arial" data-toggle="modal" data-target="#student"><i style="font-size:18px" class="fa fa-pencil-square-o"> Edit </i></a> 

	      					<a href="javascript:void(0)" onclick="deleteStudent('.$row['customerid'].')" style="font-family: \'Trebuchet MS\', Arial"><i style="font-size:18px" class="fa fa-trash-o"> Delete</i></a> </td>
	      			</tr>';
	      }
	    }
	    else{
	    	$ans = '';
	    }
	    return $ans;
	}

	function loadAttendance($query=''){
		$sql = "SELECT count(distinct(date)) from attendance";
		$result = queryMysql($sql);	
		$total = $result->fetch_assoc()['count(distinct(date))'];

		$sql = "SELECT * from student " . $query;
		$ans = '';
		$result = queryMysql($sql);
		if($result -> num_rows > 0){
	      while($row = $result -> fetch_assoc()){
	      	$sql1 = "select COUNT(attendance.attendanceid) AS attendance FROM attendance 
					LEFT JOIN student ON student.studentid = attendance.studentid
					where attend = 'Yes' and attendance.studentid = ".$row['studentid']."
					GROUP BY attendance.studentid";
			$result1 = queryMysql($sql1);	
			$attended = $result1->fetch_assoc()['attendance'];
			if($attended == '')
				$attended = 0;
	      	$ans .= '<tr>
	      				<td>'.$row['fname'].'</td>
	      				<td>'.$row['lname'].'</td>
	      				<td>'.$attended.' / '.$total.'</td>
	      			</tr>';
	      }
	    }
	    else{
	    	$ans = '<span>No student has been added yet</span>';
	    }
	    return $ans;
	}

	function loadStudentPayment($query=''){
		$sql = "SELECT * from contribution";
		$result = queryMysql($sql);	
		$amount = $result->fetch_assoc()['amount'];
		$sql = "select * from student ". $query;
		$result = queryMysql($sql);
		$ans = '';
		if($result -> num_rows > 0){
	      while($row = $result -> fetch_assoc()){
	      	$sql1 = "select COUNT(attendance.attendanceid) AS attendance FROM attendance 
					LEFT JOIN student ON student.studentid = attendance.studentid
					where attend = 'Yes' and attendance.studentid = ".$row['studentid']."
					GROUP BY attendance.studentid";
			$result1 = queryMysql($sql1);	
			$attended = $result1->fetch_assoc()['attendance'];

			$sql1 = "select sum(payment.amount) AS paid FROM payment 
				LEFT JOIN student ON student.studentid = payment.studentid
				where payment.studentid = ".$row['studentid']."
				GROUP BY payment.studentid";
			$result1 = queryMysql($sql1);	
			$paid = $result1->fetch_assoc()['paid'];
			if($paid == '') 
				$paid = 0;
			if($attended == '')
				$attended = 0;
			$owing = ($attended * $amount) - $paid;

	      	$ans .= '<tr>
	      				<td>'.$row['fname'].'</td>
	      				<td>'.$row['lname'].'</td>
	      				<td>'.$attended.'</td>
	      				<td>'.$paid.'</td>
	      				<td>'.$owing.'</td>
	      			</tr>';
	      }
	    }
	    else{
	    	$ans = '';
	    }
	    return $ans;
	}

	function insertStudent($fname, $lname, $gender,$date,$msisdn,$pnum,$occupation,$nob,$location,$zone,$beneficiary, $relation, $bpnum, $amount ,$frequency,$association,$ssn,$idtype,$idnum, $ro, $joined){
		$sql = "insert into customer(first_name, last_name, gender, date_of_birth, msisdn, phone_no, occupation, nature_of_business, location, zone_of_business, beneficiaries, relation, phone, planned_amount, frequency, association, social_sec_no, id_type, id_number, registration_officer, join_date) values('$fname', '$lname', '$gender', '$date', '$msisdn', '$pnum', '$occupation', '$nob', '$location', '$zone', '$beneficiary', '$relation', '$bpnum', '$amount', '$frequency', '$association', '$ssn', '$idtype', '$idnum', '$ro', '$joined')";
		$result = queryMysql($sql);
		echo ($result) ? "Success" :  "Failed";
	}

	function insertPayment($customerid, $userid, $date, $amount, $type){
		$sql = "insert into contribution(customerid, enteredby, date, amount, type) values('$customerid', '$userid', '$date', '$amount', '$type')";
		$result = queryMysql($sql);
		echo ($result) ? "Success" :  "Failed";
	}

	function insertAttendance($studentid, $date, $attend){
		$sql = "insert into payment(studentid, date, attend) values('$studentid', '$date', '$attend')";
		$result = queryMysql($sql);
		echo ($result) ? "Success" :  "Failed";
	}

	function updateStudent($fname, $lname, $gender,$date,$msisdn,$pnum,$occupation,$nob,$location,$zone,$beneficiary, $relation, $bpnum, $amount ,$frequency,$association,$ssn,$idtype,$idnum, $jdate, $id){
		$sql = "update customer set 
				msisdn = '$msisdn', 
				first_name = '$fname', 
				last_name = '$lname', 
				gender = '$gender', 
				date_of_birth = '$date', 
				phone_no = '$pnum', 
				occupation = '$occupation', 
				nature_of_business = '$nob', 
				location = '$location', 
				zone_of_business = '$zone', 
				beneficiaries = '$beneficiary', 
				relation = '$relation', 
				phone = '$bpnum', 
				planned_amount = '$amount', 
				frequency = '$frequency', 
				association = '$association', 
				social_sec_no = '$ssn', 
				id_type = '$idtype', 
				id_number = '$idnum'  
				where customerid = ". $id;
		$result = queryMysql($sql);
		echo ($result) ? "Success" :  "Failed";
	}

	function updatePayment($paymentid, $date, $amount){
		$sql = "update contribution set date = '$date', amount = '$amount' where contributionid = '$paymentid'";
		$result = queryMysql($sql);
		echo ($result) ? "Success" :  "Failed";
	}

	function updateAttendance($studentid, $date, $attend){
		$sql = "update attendance set studentid = '$studentid', date = '$date', attend = '$attend' where attendanceid = '$attendanceid'";
		$result = queryMysql($sql);
		echo ($result) ? "Success" :  "Failed";
	}

	function deleteStudent($studentid){
		$sql = "delete from contribution where customerid = ".$studentid;
		$result = queryMysql($sql);
		$sql = "delete from customer where customerid = ".$studentid;
		$result = queryMysql($sql);
		echo ($result) ? "Success" :  "Failed";
	}

	function deletePayment($studentid){
		$sql = "delete from Contribution where contributionid = ".$studentid;
		$result = queryMysql($sql);
		echo ($result) ? "Success" :  "Failed";
	}

	function deleteAttendance($studentid){
		$sql = "delete from attendance where attendanceid = ".$studentid;
		$result = queryMysql($sql);
		echo ($result) ? "Success" :  "Failed";
	}

	function loadStudentNames($query = ""){
		$sql = "SELECT * from customer " . $query;
		$ans = '';
		$result = queryMysql($sql);
		if($result -> num_rows > 0){
	      while($row = $result -> fetch_assoc()){
	      	$ans .= '<option value="'.$row['customerid'].'">
	      				'.$row['first_name']." ".$row['last_name'].'
	      			</option>';
	      }
	    }
	    else{
	    	$ans = '<span>No customer has been added yet</span>';
	    }
	    return $ans;
	}

	function loadStudentsRegister($query = ""){
		$sql = "SELECT customerid, first_name, last_name from customer". $query;
		$ans = '';
		$result = queryMysql($sql);
		if($result -> num_rows > 0){
	      while($row = $result -> fetch_assoc()){
	      	$sql1 = "select sum(amount) as total from contribution where type = 'Contribution' and customerid = ".$row['customerid'];
	      	//echo $row['customerid'];
			$result1 = queryMysql($sql1);	
			$cont = $result1->fetch_assoc()['total'];
			if ($cont == '')
				$cont = 0;

			$sql1 = "select sum(amount) as total from contribution where type = 'Withdrawal' and customerid = ".$row['customerid'];

			$result1 = queryMysql($sql1);	
			$with = $result1->fetch_assoc()['total'];

			if($with == '')
				$with = 0;

			$ans .= '<tr>
						<td>'.$row['first_name'].'</td>
						<td>'.$row['last_name'].'</td>
						<td>'.$cont.'</td>
						<td>'.$with.'</td>
						<td>'.($cont - $with).'</td>
						<td><a href="printStatement.php?q='.$row['customerid'].'" style="font-size:16px; font-family: \'Trebuchet MS\', Arial;">Print Statement</a></td>
					</tr>';
	      	
	      }
	    }
	    else{
	    	$ans = '';
	    }
	    return $ans;
	}

	function markAttendance($id, $value, $date){
		$result = "";
		if($value == 'No')
			$result = queryMysql('delete from attendance where studentid = '.$id. ' and date = "'. $date. '"');
		else
			$result = queryMysql("insert into attendance(date, attend, studentid) values('$date', '$value', '$id')");
		echo ($result) ? "Success" :  "Failed";
	}

	function loadPayments($query = 'Contribution'){
		$sql = "SELECT concat(first_name, ' ' ,last_name) as fullname, contributionid, amount, date, name from contribution, customer, user where customer.customerid = contribution.customerid and user.userid = contribution.enteredby and type = '$query' order by date desc";
		$ans = '';
		$result = queryMysql($sql);
		if($result -> num_rows > 0){
	      while($row = $result -> fetch_assoc()){
	      	$ans .= '<tr>
	      				<td>'.$row['fullname'].'</td>
	      				<td>'.$row['amount'].'</td>
	      				<td>'.$row['date'].'</td>
	      				<td>'.$row['name'].'</td>
	      				<td><a href="javascript:void(0)" onclick="editPay('.$row['contributionid'].', \''.$row['fullname'].'\', \''.$row['amount'].'\', \''.$row['date'].'\', \''.$query.'\')" data-toggle="modal" data-target="#payment" style="font-size:16px; font-family: \'Trebuchet MS\', Arial;"><i style="font-size:18px" class="fa fa-pencil-square-o"> Edit </i></a> 

	      					<a href="javascript:void(0)" onclick="deletePay('.$row['contributionid'].')" style="font-size:16px; font-family: \'Trebuchet MS\', Arial;"><i style="font-size:18px" class="fa fa-trash-o"> Delete</i></a> 
                 		</td>
	      			</tr>';
	      }
	    }
	    else{
	    	$ans = '';
	    }
	    return $ans;
	}

	function loadWithdrawals($query = ''){
		$sql = "SELECT first_name, last_name, amount, date, name from contribution, customer, user where customer.customerid = contribution.customerid and user.name = contribution.enteredby and type = 'Withdrawal' order by date desc";
		$ans = '';
		$result = queryMysql($sql);
		if($result -> num_rows > 0){
	      while($row = $result -> fetch_assoc()){
	      	$ans .= '<tr>
	      				<td>'.$row['first_name'].'</td>
	      				<td>'.$row['last_name'].'</td>
	      				<td>'.$row['amount'].'</td>
	      				<td>'.$row['date'].'</td>
	      				<td>'.$row['name'].'</td>
	      				<td><a href="javascript:void(0)" onclick="editPay('.$row['contributionid'].')" data-toggle="modal" data-target="#payment" style="font-size:16px; font-family: \'Trebuchet MS\', Arial;"><i style="font-size:18px" class="fa fa-pencil-square-o"> Edit </i></a> 

	      					<a href="javascript:void(0)" onclick="deletePay('.$row['contributionid'].')" style="font-size:16px; font-family: \'Trebuchet MS\', Arial;"><i style="font-size:18px" class="fa fa-trash-o"> Delete</i></a> 
                 		</td>
	      			</tr>';
	      }
	    }
	    else{
	    	$ans = '';
	    }
	    return $ans;
	}


	if(isset($_POST['addStudent'])){
		$fname = $lname = $gender = $date = $msisdn = $pnum = $occupation = $nob = $location = $zone = $beneficiary = $relation = $bpnum = $amount = $frequency = $association = $ssn = $idtype = $idnum = "";
		$fname = test_input($_POST['fname']);
		$lname = test_input($_POST['lname']);
		$gender = test_input($_POST['gender']);
		$date = test_input($_POST['date']);
		$msisdn = test_input($_POST['msisdn']);
		$pnum = test_input($_POST['pnum']);
		$occupation = test_input($_POST['occupation']);
		$nob = test_input($_POST['nob']);
		$location = test_input($_POST['location']);
		$zone = test_input($_POST['zone']);
		$beneficiary = test_input($_POST['beneficiary']);
		$relation = test_input($_POST['relation']);
		$bpnum = test_input($_POST['bpnum']);
		$amount = test_input($_POST['pamount']);
		$frequency = test_input($_POST['frequency']);
		$association = test_input($_POST['association']);
		$ssn = test_input($_POST['ssn']);
		$idtype = test_input($_POST['idtype']);
		$idnum = test_input($_POST['idnum']);
		insertStudent($fname, $lname, $gender,$date,$msisdn,$pnum,$occupation,$nob,$location,$zone,$beneficiary, $relation, $bpnum, $amount ,$frequency,$association,$ssn,$idtype,$idnum, $_SESSION['userid'], date('Y-m-d'));
		header('Location: dashboard_home.php');
	}

	if(isset($_POST['updateStudent'])){
		$fname = $lname = $gender = $date = $msisdn = $pnum = $occupation = $nob = $location = $zone = $beneficiary = $relation = $bpnum = $amount = $frequency = $association = $ssn = $idtype = $idnum = $jdate = $id ="";
		$fname = test_input($_POST['fname']);
		$lname = test_input($_POST['lname']);
		$gender = test_input($_POST['gender']);
		$date = test_input($_POST['date']);
		$msisdn = test_input($_POST['msisdn']);
		$pnum = test_input($_POST['pnum']);
		$occupation = test_input($_POST['occupation']);
		$nob = test_input($_POST['nob']);
		$location = test_input($_POST['location']);
		$zone = test_input($_POST['zone']);
		$beneficiary = test_input($_POST['beneficiary']);
		$relation = test_input($_POST['relation']);
		$bpnum = test_input($_POST['bpnum']);
		$amount = test_input($_POST['pamount']);
		$frequency = test_input($_POST['frequency']);
		$association = test_input($_POST['association']);
		$ssn = test_input($_POST['ssn']);
		$idtype = test_input($_POST['idtype']);
		$idnum = test_input($_POST['idnum']);
		$jdate = test_input($_POST['jdate']);
		$id = test_input($_POST['hidden']);
		
		updateStudent($fname, $lname, $gender,$date,$msisdn,$pnum,$occupation,$nob,$location,$zone,$beneficiary, $relation, $bpnum, $amount ,$frequency,$association,$ssn,$idtype,$idnum, $jdate, $id);
		header('Location: dashboard_students.php');
	}

	if(isset($_POST['submitPayment'])){
		$id = $date = $amount = "";
		$date = test_input($_POST['datePay']);
		$id = test_input($_POST['studentid']);
		$amount = test_input($_POST['amount']);
		insertPayment($id, $_SESSION['userid'], $date, $amount, 'Contribution');
		header('Location: dashboard_home.php');
	}

	if(isset($_POST['submitWithdrawal'])){
		$id = $date = $amount = "";
		$date = test_input($_POST['datePay']);
		$id = test_input($_POST['studentid']);
		$amount = test_input($_POST['amount']);
		insertPayment($id, $_SESSION['userid'], $date, $amount, 'Withdrawal');
		header('Location: dashboard_home.php');
	}

	if(isset($_POST['updateStudent'])){
		$fname = $lname = $gender = $date = $parentname = $id = "";
		$fname = test_input($_POST['fname']);
		$lname = test_input($_POST['lname']);
		$date = test_input($_POST['date']);
		$gender = test_input($_POST['gender']);
		$parentname = test_input($_POST['parent']);
		$id = test_input($_POST['hidden']);
		updateStudent($id, $fname, $lname, $date, $gender, $parentname);
		header('Location: dashboard_students.php');
	}

	if(isset($_POST['updatePayment'])){
		$amount = test_input($_POST['amount']);
		$date = test_input($_POST['datePay']);
		$id = test_input($_POST['hidden']);
		$url = test_input($_POST['hidden2']);
		updatePayment($id, $date, $amount);
		header('Location: dashboard_payment.php');
	}

	if(isset($_POST['updatePayment2'])){
		$amount = test_input($_POST['amount']);
		$date = test_input($_POST['datePay']);
		$id = test_input($_POST['hidden']);
		$url = test_input($_POST['hidden2']);
		updatePayment($id, $date, $amount);
		header('Location: dashboard_attendance.php');
	}

	function drawStudentsPie(){
 
	    //new pie chart instance
	    $chart = new PieChart();
	 
	    //data set instance
	    $dataSet = new XYDataSet();
	 
	    //query all records from tde database
	    $query = "select gender, count(customerid) as number from customer group by gender";
	 
	    //execute tde query
	    $result = queryMysql( $query );
	 
	    //get number of rows returned
	    $num_results = $result->num_rows;
	 	
	    if( $num_results > 0){	    
	        while( $row = $result->fetch_assoc() ){
	            $dataSet->addPoint(new Point($row['gender'], $row['number']));
	            //echo $row['gender'] ." " .$row['number'];
	        }
	    
	        //finalize dataset
	        $chart->setDataSet($dataSet);
	 
	        //set chart title
	        $chart->setTitle("");
	        
	        //render as an image and store under "generated" folder
	        $chart->render("1.png");
	    
	        //pull tde generated chart where it was stored
	        return "<img alt='Pie chart'  src='1.png'/>";
	    
	    }else{
	        return "No customer found in the database.";
	    }
	}


	function drawPaymentsBarGraph(){
		$year = date("Y");
		$sql = "SELECT month(contribution.date) AS month, sum(amount) as number
				FROM contribution
				where year(date) = '".$year."' and type = 'Contribution'
				GROUP By month(contribution.date)";
		$montds = array('Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec');
		
		$chart = new VerticalBarChart();
	    //data set instance
	    $dataSet = new XYDataSet();
	 
	    $result = queryMysql( $sql );
	 
	    //get number of rows returned
	    $num_results = $result->num_rows;
	 	
	    if( $num_results > 0){	    
	        while( $row = $result->fetch_assoc() ){
	        	$montd = $montds[$row['month']-1];
	            $dataSet->addPoint(new Point($montd, $row['number']));
	            //echo $row['gender'] ." " .$row['number'];
	        }
	    
	        //finalize dataset
	        $chart->setDataSet($dataSet);

	        $chart->getPlot()->setGraphPadding(new Padding(5, 30, 20, 50));

	 
	        //set chart title
	        $chart->setTitle("");
	        
	        //render as an image and store under "generated" folder
	        $chart->render("2.png");
	    
	        //pull tde generated chart where it was stored
	        return "<img alt='Bar chart'  src='2.png'/>";
	    
	    }else{
	        return "No payments found in the database.";
	    }
	}

	function drawPaymentsBarGraph2(){
		$year = date("Y");
		$sql = "SELECT month(contribution.date) AS month, sum(amount) as number
				FROM contribution
				where year(date) = '".$year."' and type = 'Withdrawal'
				GROUP By month(contribution.date)";
		$montds = array('Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec');
		
		$chart = new VerticalBarChart();
	    //data set instance
	    $dataSet = new XYDataSet();
	 
	    $result = queryMysql( $sql );
	 
	    //get number of rows returned
	    $num_results = $result->num_rows;
	 	
	    if( $num_results > 0){	    
	        while( $row = $result->fetch_assoc() ){
	        	$montd = $montds[$row['month']-1];
	            $dataSet->addPoint(new Point($montd, $row['number']));
	            //echo $row['gender'] ." " .$row['number'];
	        }
	    
	        //finalize dataset
	        $chart->setDataSet($dataSet);

	        $chart->getPlot()->setGraphPadding(new Padding(5, 30, 20,50));

	 
	        //set chart title
	        $chart->setTitle("");
	        
	        //render as an image and store under "generated" folder
	        $chart->render("3.png");
	    
	        //pull tde generated chart where it was stored
	        return "<img alt='Bar chart'  src='3.png'/>";
	    
	    }else{
	        return "No payments found in the database.";
	    }
	}

	function drawBarForWeek(){
		$year = date("Y");
		$sql = "SELECT date, sum(amount) as number FROM contribution WHERE date >= ADDDATE(CURDATE(), INTERVAL 2-DAYOFWEEK(CURDATE()) DAY) AND date <= CURDATE() and type = 'Contribution' group by date";
		$montds = array('Mon', 'Tue', 'Wed', 'tdu', 'Fri');
		
		$chart = new HorizontalBarChart();
	    //data set instance
	    $dataSet = new XYDataSet();
	 
	    $result = queryMysql( $sql );
	 
	    //get number of rows returned
	    $num_results = $result->num_rows;
	 	
	    if( $num_results > 0){	    
	        while( $row = $result->fetch_assoc() ){
	        	$date = $row['date'];
	            $dataSet->addPoint(new Point($date, $row['number']));
	            //echo $row['gender'] ." " .$row['number'];
	        }
	    
	        //finalize dataset
	        $chart->setDataSet($dataSet);

	        $chart->getPlot()->setGraphPadding(new Padding(5, 30, 20, 80));

	 
	        //set chart title
	        $chart->setTitle("");
	        
	        //render as an image and store under "generated" folder
	        $chart->render("4.png");
	    
	        //pull tde generated chart where it was stored
	        return "<img alt='Bar chart'  src='4.png'/>";
	    
	    }else{
	        return "No payments found in the database.";
	    }
	}

	function drawBarForWeek2(){
		$year = date("Y");
		$sql = "SELECT date, sum(amount) as number FROM contribution WHERE date >= ADDDATE(CURDATE(), INTERVAL 2-DAYOFWEEK(CURDATE()) DAY) AND date <= CURDATE() and type = 'Withdrawal' group by date";
		$montds = array('Mon', 'Tue', 'Wed', 'tdu', 'Fri');
		
		$chart = new HorizontalBarChart();
	    //data set instance
	    $dataSet = new XYDataSet();
	 
	    $result = queryMysql( $sql );
	 
	    //get number of rows returned
	    $num_results = $result->num_rows;
	 	
	    if( $num_results > 0){	    
	        while( $row = $result->fetch_assoc() ){
	        	$date = $row['date'];
	            $dataSet->addPoint(new Point($date, $row['number']));
	            //echo $row['gender'] ." " .$row['number'];
	        }
	    
	        //finalize dataset
	        $chart->setDataSet($dataSet);

	        $chart->getPlot()->setGraphPadding(new Padding(5, 30, 20, 80));

	 
	        //set chart title
	        $chart->setTitle("");
	        
	        //render as an image and store under "generated" folder
	        $chart->render("5.png");
	    
	        //pull tde generated chart where it was stored
	        return "<img alt='Bar chart'  src='5.png'/>";
	    
	    }else{
	        return "No payments found in the database.";
	    }
	}

	function getDayPayment(){
		$sql = "SELECT sum(amount) as amount from Contribution where date = '" .date('Y-m-d')."'" ;
		$result = queryMysql($sql);	
		$amount = $result->fetch_assoc()['amount'];
		if ($amount == '')
			$amount = 0;
		return $amount;
	}

	function getWeekPayment(){
		$sql = "SELECT sum(amount) as amount FROM contribution WHERE date >= ADDDATE(CURDATE(), INTERVAL 2-DAYOFWEEK(CURDATE()) DAY) AND date <= CURDATE()";
		$result = queryMysql($sql);	
		$amount = $result->fetch_assoc()['amount'];
		if ($amount == '')
			$amount = 0;
		return $amount;
	}

	function getMonthPayment(){
		$sql = "SELECT sum(amount) as amount from contribution where month(date) = '" .date('m')."' and year(date) = '" . date('Y') . "'" ;
		$result = queryMysql($sql);	
		$amount = $result->fetch_assoc()['amount'];
		if ($amount == '')
			$amount = 0;
		return $amount;
	}

	function getYearPayment(){
		$sql = "SELECT sum(amount) as amount from contribution where year(date) = '" . date('Y') . "'" ;
		$result = queryMysql($sql);	
		$amount = $result->fetch_assoc()['amount'];
		if ($amount == '')
			$amount = 0;
		return $amount;
	}
	//drawPaymentsBarGraph();
?>