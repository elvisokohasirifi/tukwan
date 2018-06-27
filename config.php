<?php

session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tukwandb";
$db = mysqli_connect($servername,$username,$password,$dbname);


$connection = new mysqli($servername, $username, $password, $dbname);  
if ($connection->connect_error) die($connection->connect_error);

?>