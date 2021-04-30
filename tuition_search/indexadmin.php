<?php
include ('header.php');
?>

<div style="background-image: url('images/222.png');">

<section>
<h1><font size="+7"><center>ADMIN PANEL</center></font></h1>
<p><font size="+3"><center>Please log in to continue</center></font></p>

<br/><br/><br/>

 <center>   
  <form action = "signinadmin.php"  class= "form_design" method="post">
  Username: <input type="text" name="fnamee"> <br/><br/><br/>
  Password: <input type="password" name="passe"><br/><br/><br/>
  <input type="submit" value="Sign In"/>
  <br/><br/><br/><br/><br/><br/><br/><br/><br/>
   <br/><br/><br/><br/><br/><br/>
</form>
</center>
</section>



<?php
include ('footer.php');
?>

