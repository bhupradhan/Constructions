<script >alert("successfull")</script>
<?php

require 'header.php';
  require "includes/dbh.inc.php";
  if($_SESSION==null){

    //  header("Location: ../login_u.php?");
    echo"PAGE NOT FOUND";
                exit();
    }

 
	?>
	

<!DOCTYPE html>
<html>
<head>
	<title>Home</title>

	<script src="js/owner.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="css/owner.css">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lexend Peta">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto Mono">

<style>
body {
  font-family: "Lato", sans-serif;
  background-image: url(images/abc.jpg);
  background-size: cover;
 
}
/* side nav bar */



.sidenav {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  opacity: 1;
  background-color: #17202A  ;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px;
  text-align:center;
  
}

.sidenav a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 25px;
  color: #818181;
  display: block;
  transition: 0.3s;
   

}

.sidenav a:hover{
  color: #f1f1f1;
   
}

.sidenav .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
   
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}



</style>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {box-sizing: border-box;}
body {font-family: Verdana, sans-serif;}
.mySlides {display: none;}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}
</style>

	
</head>
<body>




<main>
<?php
if(isset($_SESSION['ouserId'])){

	
	// echo'<a href="includes/logout.inc.php" name="logout-sbmit"><h4 align="right">Logout</h4></a>';	                                    /* TO RETRIEVE DATA USE THIS */
	$idUsers=$_SESSION['ouserId'];
	 	
	$sql = "SELECT * FROM ownerusers WHERE oidUsers='".$idUsers."'";
	$result = mysqli_query($conn, $sql);
	$resultCheck = mysqli_num_rows($result);
	$row=mysqli_fetch_array($result);
	 	
	 	
	//$emailUsers = $row[2]; 	
	$uidUsers = $row[1];
	//$sitename = $row[4];
	//$category = $row[6];
	//$siteid = $row[7];






		
	 	echo '<h4 align="center">HI!'.$uidUsers.'</h4>'; 
	 	

	 	

		
	 		
/*
	 
echo '<a href="details1.php" style="text-decoration:none">
<div class="box" allign="left">
	<br><br>
	<h3 align="center">ATLANTIS</h3>
	<h1 align="center">2 BHK Apartments</h1>
	<h1 align="center">OC RECEIVED + NO GST</h1>
	
	 	</div>

	</a>
	<a href="details1.php" style="text-decoration:none">
<div class="box align="center">
	<br><br>
	<h3 align="center">ATLANTIS</h3>
	<h1 align="center">2 BHK Apartments</h1>
	<h1 align="center">OC RECEIVED + NO GST</h1>
	
	 	</div>

	</a>';
	*/


//else{

//	echo'<li><a href="login_u.php">Login</a></li><li><a href="signup.php">Signup</a></li>';
//}



?>
<!--OPEN-->
<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  
  <a href="#"><h4 >Services</h4></a>
  <a href="details1.php"><h4 >sites data</h4></a>
  <a href="sites.php"><h4 >sites</h4></a>
  <a href="feedbackjs.php"><h4 >complaints/Feedback</h4></a>
  
</div>


<span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; open</span>

<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "100%";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}
</script>

<h1 align="center" >Projects</h1>

<!--slide show -->

<div class="box">
<div class="box-img">
	
<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src="images/res.jpg" style="width:100%">
  <div class="text">Caption Text</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="images/res1.jpg" style="width:100%">
  <div class="text">Caption Two</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="images/res2.jpg" style="width:100%">
  <div class="text">Caption Three</div>
</div>

</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>
</div>
</div>
<script>
var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>



<?php } ?>

</main>
</body>
</html>