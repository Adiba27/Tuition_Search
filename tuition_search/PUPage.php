<?php
include ('header.php');
?>


<div style="background-image: url('images/black.jpg');">
<section>
<h1><font size="+7"><center>UPDATE HERE</center></font></h1>
<p><font size="+3"><center>Please write the complaint id to update</center></font></p>

<br/><br/><br/>

 <center>   
  <form action = "PU.php"  class= "form_design" method="post">
  Complaint_ID: <input type="text" name="C_id"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  Status: <input type="text" name="UP"><br/><br/>
  <input type="submit" value="Update"/>
  <br/><br/><br/><br/><br/><br/><br/><br/><br/>
</form>
</center>
</section>



<?php
include ('footer.php');
?>

