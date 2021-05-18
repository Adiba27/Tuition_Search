
<?php 
require_once('DBconnectadmin.php');


if (isset($_POST['passe']) && isset($_POST['fnamee'])){
 $p = $_POST['passe'];
 $u = $_POST['fnamee'];
 $sql = "SELECT * FROM admin WHERE Name = '$u' AND Password = '$p' ";


 $result = mysqli_query($conn, $sql);

 if (mysqli_num_rows($result) != 0 ){
 	header ("Location: Complaints.php");

 }
 else{
 	echo "Username or password is incorrect";
 }
}

 ?>