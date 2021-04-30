<?php 


$servername = "localhost";
$name = "root";
$password = "";
$dbname = "complaint";

$conn = new mysqli($servername, $name, $password);

if($conn-> connect_error){
	die("Connection failed: ". $conn->connect_error);
   }
else{
	mysqli_select_db($conn, $dbname);
	echo "";
}


 ?>