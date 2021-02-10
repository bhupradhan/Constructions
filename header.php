<?php

session_start();

?>
<!DOCTYPE html>
<html>
<head>

	<title>Constructions</title>
	
	<style>


body { 
  
  ont-family: Arial, Helvetica, sans-serif;
}

.header {
  overflow: hidden;
  background-color: #000000;
  padding: 20px 10px;
  opacity: 1;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);

   background-image: url(images/deg5.jpg);
}

.header a {
  float: left;
 
  text-align: center;
  padding: 10px;
  text-decoration: none;
  font-size: 25px; 
  line-height: 25px;
  border-radius: 1px;
  opacity: 3.0;
  color: #f3ca20;
 
}


.header a.logo {
  font-size: 25px;
  font-weight: bold;
  opacity: 3.0;

}
.header a:hover {
  ackground-color: #ddd;
  transform: scale(1.1);
  
}

.header a.active {
  background-color: #f3ca20;
  color: white;
}

.header-right {
  float: right;
}

@media screen and (max-width: 500px) {
  .header a {
    float: none;
    display: block;
    text-align: left;
  }
  
  .header-right {
    float: none;
  }
}

.bg-img {
  /* The image used */
  background-image: url("images/timelne.jpg");

  /*min-height: 380px; */ 

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  
  /* Needed to position the navbar */
  position: relative;
}






</style>
	
</head>
<body>

<header>
	<div class="bg-img">
<div class="header">

  <img style=" 
  height: 60px;
  width: 200px;
  float: left;" src="images/logo1.png"> 
  <div class="header-right">

    
    <a href="contact.php">Contact</a>
    <a href="aboutus.html">About</a>
    <a href="sites.php">Projects</a>
 


			
			
			<?php

			if(isset($_SESSION['userId'])||isset($_SESSION['ouserId'])||isset($_SESSION['auserId'])||isset($_SESSION['muserId'])){
		   // if(isset($_SESSION['userId'])){

			/*	echo '<form action="includes/logout.inc.php" method="post">
				
				<button type="submit" name="logout-submit">Logout</button>
      </form><p> You are logged in </p>'; */
      
     
			echo'<a href="includes/logout.inc.php" name="logout-sbmit">Logout</a>';

			}
			else{
			/*	echo'<form action="login.php" method="post">
				
				<button type="submit">Login</button>
      </form>'; */
      echo' <a  href="index.php"><img src="images/home.png"></a>';
			echo'<a href="astartpage.php">Login</a><a href="astartpagesignup.php">Signup</a>';

      

			}
			?>
	 </div>
</div>

		
</div>
		
		

	
</header>

</body>
</html>