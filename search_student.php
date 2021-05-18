
<?php
include ('header.php');
?> 
<div style="background-image: url('images/black.jpg');">
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

</head>

  <div style="background-image: url('img/background.jpg'); width: 100%;">    


<section>


<h1><font size="+5" style="color: white"><center>FIND STUDENTS HERE</center></font></h1>
</br></br>



<div style="margin-left:0%; margin-right: 0%; margin-top: 50px; margin-bottom: 50px; text-align: center;">
<div class="row" style="padding: 10px;">
	<div class="col-sm-1" style="color: white"> <b> ID </b></div>
	<div class="col-sm-1" style="color: white"> <b>Name </b></div>
	<div class="col-sm-1" style="color: white"> <b>Email</b></div>
	<div class="col-sm-1" style="color: white"> <b>Contact</b></div>
	<div class="col-sm-1" style="color: white"> <b>Address </b></div>
	<div class="col-sm-1" style="color: white"> <b>Institution </b></div>
	<div class="col-sm-1" style="color: white"> <b>Class </b></div>
	<div class="col-sm-1" style="color: white"> <b>Subject </b></div>
	<div class="col-sm-1" style="color: white"> <b>Honorarium </b></div>

</div>

<hr>


<?php 
require_once("DBconnect.php");
$sql= "SELECT * FROM student";
$result= mysqli_query($conn, $sql);
if (mysqli_num_rows($result) !=0){
	while ($row = mysqli_fetch_array($result)){
		?>

		<div class="row" style="padding: 10px;">
	<div class="col-sm-1" style="color: white"> <?php echo $row[0]; ?> </div>
	<div class="col-sm-1" style="color: white"> <?php echo $row[1]; ?> </div>
	<div class="col-sm-1" style="color: white"> <?php echo $row[2]; ?> </div>
	<div class="col-sm-1" style="color: white"> <?php echo $row[3]; ?> </div>
	<div class="col-sm-1" style="color: white"> <?php echo $row[4]; ?> </div>
	<div class="col-sm-1" style="color: white"> <?php echo $row[5]; ?> </div>
	<div class="col-sm-1" style="color: white"> <?php echo $row[6]; ?> </div>
	<div class="col-sm-1" style="color: white"> <?php echo $row[7]; ?> </div>
	<div class="col-sm-1" style="color: white"> <?php echo $row[8]; ?> </div>

</div>
	
<hr>





<?php

}
}
?>

</div>
<?php
include ('footer.php');
?>
