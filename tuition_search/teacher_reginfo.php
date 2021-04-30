<?php
require_once('dbconnect.php');

if($conn){
	echo "Connection successful";
}
else{
	echo "No connection";
}
mysqli_select_db($conn, 'tuition_search');
$usert_ID= $_POST['usert_ID'];
$usert_name= $_POST['usert_name'];
$usert_password= $_POST['usert_password'];
$usert_email= $_POST['usert_email'];
$usert_phone= $_POST['usert_phone'];
$usert_degree= $_POST['usert_degree'];
$usert_subject= $_POST['usert_subject'];

$query = " insert into teacher(ID, Name, Password, Email, Phone,Degree,Subject)
values('$usert_ID','$usert_name','$usert_password', '$usert_email', '$usert_phone','$usert_degree','$usert_subject')";


mysqli_query($conn, $query);

header('location: Show_teacher.php');
?>