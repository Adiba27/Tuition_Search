<?php 
require_once('DBconnectcomplaint.php');




if (isset($_POST['C_id']) && isset($_POST['UP'])){
 $i = $_POST['C_id'];
 $s = $_POST['UP'];
 $sql = "UPDATE complaintlist SET Status = '$s' WHERE Complaint_id='$i' ";


 $result = mysqli_query($conn, $sql);

 if (mysqli_affected_rows($conn) ){
 	header ("Location: ShowC.php");

 }
 else{
 	echo "Data incorrect";
 }
}

 ?>
 <div style="background-image: url('images/black.jpg');">