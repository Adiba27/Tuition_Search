<?php
require_once('dbconnect.php');

if($conn){
	echo "Connection successful";
}
else{
	echo "No connection";
}
mysqli_select_db($conn, 'tuition_search');
$users_ID= $_POST['users_ID'];
$users_name= $_POST['users_name'];
$users_email= $_POST['users_email'];
$users_phone= $_POST['users_phone'];
$users_address= $_POST['users_address'];
$users_institution= $_POST['users_institution'];
$users_class= $_POST['users_class'];
$users_subject= $_POST['users_subject'];
$users_honorarium= $_POST['users_honorarium'];

$query = " insert into student (ID, Name, Email, Contact, Address,Institution,Class,Subject,Honorarium) values('$users_ID','$users_name', '$users_email', '$users_phone', '$users_address','$users_institution','$users_class','$users_subject','$users_honorarium')";


mysqli_query($conn, $query) ;

header('location: search_student.php');
?>