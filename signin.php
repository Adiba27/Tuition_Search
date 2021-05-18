
<?php 
require_once('DBconnect.php');


if (isset($_POST['pass']) && isset($_POST['fname'])){
 $p = $_POST['pass'];
 $u = $_POST['fname'];
 $sql = "SELECT * FROM admin WHERE Name = '$u' AND Password = '$p' ";


 $result = mysqli_query($conn, $sql);

 if (mysqli_num_rows($result) != 0 ){
 	header ("Location: homepage.php");

 }
 else{
 	echo "Username or password is incorrect";
 }
}

 ?>