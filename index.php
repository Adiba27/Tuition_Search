<?php
include ('headerM.php');
?>

<div style="background-image: url('images/221.png');">

<section>
<p><font size="+2"><center>Teacher/Student Panel</center></font></p>
<h1><font size="+7"><center>LOG IN</center></font></h1>
<p><font size="+3"><center>Please log in to continue</center></font></p>

<br/><br/><br/>

 <center>   
  <form action = "signin.php"  class= "form_design" method="post">
  Username: <input type="text" name="fname"> <br/><br/><br/>
  Password: <input type="password" name="pass"><br/><br/><br/>
  <input type="submit" value="Sign In"/>
  <br/><br/><br/><br/><br/><br/><br/><br/><br/>
   <br/><br/><br/><br/><br/><br/>
</form>
</center>
</section>



<?php
include ('footer.php');
?>

