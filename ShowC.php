
<?php
include ('header.php');
?> 
<div style="background-image: url('images/black.jpg');">
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

</head>

  <div style="background-image: url('img/background.jpg'); width: 100%;">    


<section>


<h1><font size="+5" style="color: white"><center>Complaint list</center></font></h1>
</br></br>


<center><a href="PUPage.php" size="+4" class="w3-button w3-white">Please click here to update</a></center>
</section>

<div style="margin-left:0%; margin-right: 0%; margin-top: 50px; margin-bottom: 50px; text-align: center;">
<div class="row" style="padding: 10px;">
	<div class="col-sm-1" style="color: white"> <b> Submit </b></div>
	<div class="col-sm-1" style="color: white"> <b>Process </b></div>
	<div class="col-sm-1" style="color: white"> <b>Complaint_ID </b></div>
	<div class="col-sm-1" style="color: white"> <b>Type </b></div>
	<div class="col-sm-1" style="color: white"> <b>Status </b></div>
	<div class="col-sm-1" style="color: white"> <b>City </b></div>
	<div class="col-sm-1" style="color: white"> <b>Short_description </b></div>
	<div class="col-sm-1" style="color: white"> <b>Location </b></div>
	<div class="col-sm-1" style="color: white"> <b>Day </b></div>
	<div class="col-sm-1" style="color: white"> <b>Month </b></div>
	<div class="col-sm-1" style="color: white"> <b>Year </b></div>
	<div class="col-sm-1" style="color: white"> <b>Time </b></div>
</div>

<hr>


<?php 
require_once("DBconnect.php");
$sql= "SELECT * FROM complaintlist";
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
	<div class="col-sm-1" style="color: white"> <?php echo $row[9]; ?> </div>
	<div class="col-sm-1" style="color: white"> <?php echo $row[10]; ?> </div>
	<div class="col-sm-1" style="color: white"> <?php echo $row[11]; ?> </div>
</div>
	
<hr>





<?php

}
}
?>
<?php
include ('footer.php');
?>
</div>
