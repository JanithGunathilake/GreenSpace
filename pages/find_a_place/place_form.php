<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "green_space";

//Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

//Check connection
if ($conn->connect_error){
    die("Connection failed: " . $conn->connect_error);
}

//$conn = mysqli_connect('localhost','root','','user_db');







?>
