    <!DOCTYPE html>
<html>
<title>Tution Searching System</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script  src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://cdn.bootcss.com/typed.js/1.1.4/typed.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {font-family: "Lato", sans-serif}
.mySlides {display: none}

.modal-content{
    border:solid 2px powderblue ;
    /*border-radius: 27px;*/
  }
.modal-body input{
    border:solid 2px lightgreen;
}
.modal-body textarea{
    border:solid 2px lightgreen;
}

  .menu_icon{
    display: none;
  }

.w3-bar a,button{
}

.w3-bar a:hover{
  text-decoration: none;
}

</style>

<script>
</script>
<body>

<!-- Navbar -->
<?php include("headerM.php"); ?>
<br><br><br><br>

<img class="mySlides" src="images/344959.jpg" width=100% height=100% margin-top:"30px">
<img class="mySlides" src="images/12.jpg" width=100% height=100% margin-top:"30px">
<img class="mySlides" src="images/34.jpg" width=100% height=100% margin-top:"30px">


<!-- division to add a background image -->
 <div class="container">
 <br>
    <h1><font size="+7"><center>HELPLINE</center></font></h1>
     <div class="row top-buffer col-sm-12">
      
      <!-- <div class=" roow"> -->
        <div class="col col-sm-12 col-md-6 col-lg-4">
         <p><b> <a href="faq_tutor.php"> FAQ FOR TEACHERS</a></b> </p>
        </div>
        <div class=" col col-sm-12 col-md-6 col-lg-4">
          <p> <b><a href="faq_student.php"> FAQ FOR STUDENTS</a> </b></p>
        </div>
        <div class="col col-sm-12 col-md-6 col-lg-4">
          <p>  <b> <a href="ShowPC.php">Complaint Box</b></a> </p>
        </div>
      
    </div>
</div>
<br>
<br><br><br><br>
<!-- <div class="footer">
  <p><b> TUTOR  FINDER </b></p>
</div> -->
<?php include('footer.php') ?>

  <style>

  .topic{
    font-size:24px;
    color:#3AAFA9;
    margin-top: 30px;
/*    padding-left: 475px;*/
    padding-bottom: -30px;
  }
  .top-buffer{
  margin-top: 40px;
  }

  .col:hover{
    background-color:#5CDB95;
    font-color:red;
  }

  .col{
    margin-top:10px;
    height:100px;
    padding-top: 35px;
    padding-left:135px;
    border:solid 2px grey;
    border-radius:14px;

  }

  .col p{
    padding-left: 0px;
    font-size: 20px;
    color:#05386B;
  }

  .roow{
    margin-top: 5px;
    height:120px;
    border:solid 2px white;

  }
  </style>
<script>

  window.onscroll = function() {
      myFunction()};
  function myFunction() {
      var navbar = document.getElementById("myNavbar");
      if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
          navbar.className = "w3-bar" + " w3-card" + " w3-animate-top" + " w3-white";
      } else {
          navbar.className = navbar.className.replace(" w3-card w3-animate-top w3-white", "");
      }
  }

  
  function toggleFunction() {
      var x = document.getElementById("navDemo");
      if (x.className.indexOf("w3-show") == -1) {
          x.className += " w3-show";
      } else {
          x.className = x.className.replace(" w3-show", "");
      }
  }

          var slideIndex = 1;
  manual(slideIndex);

  function plusDivs(n) {
      manual(slideIndex += n);
  }

  function manual(n) {
      var i;
      var x = document.getElementsByClassName("mySlides");
      if (n > x.length) {slideIndex = 1}
      if (n < 1) {slideIndex = x.length} ;
      for (i = 0; i < x.length; i++) {
          x[i].style.display = "none";
      }
      x[slideIndex-1].style.display = "block";
  }

      var slideIndex = 0;
  automatic();

  function automatic() {
      var i;
      var x = document.getElementsByClassName("mySlides");
      for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";
      }
      slideIndex++;
      if (slideIndex > x.length) {slideIndex = 1}
      x[slideIndex-1].style.display = "block";
      setTimeout(automatic, 5000);
  }

  </script>

</body>
</html>

   