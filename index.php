<?php
require "header.php";
?>

<!DOCTYPE html>
<html>
<head>
<title>Home Page</title>
<link rel=stylesheet type=text/css href=css/slider.css>
<script src="js/contactus.js"></script>

<script >alert("successfull")</script>
</head>
<body>
	
	<div class='slider'>
<!--	<div class="menu-bar">
	<img src="images/logo1.png">
<ul>
<li class="active"><a href="">Home</a></li>
<li><a href="#about">About us</a></li>
<li><a href="">Login</a>
<div class="sub-menu">
<ul>
<li><a href="#">User</a></li>
<li><a href="login_u.html">Admin</a></li>
<li><a href="login_v.html">Owner</a></li>
<li><a href="#">Manager</a></li>
</ul>
</div>
</li>
<li><a href="signup.html">Sign up</a></li>
<li><a href="#ser">Services</a></li>
<li><a href="project.html">Projects</a></li>
</ul>
</div> -->
		<div class='sliderchild'>
			<div class='imagecon'>
				<div class='sub'>
					
					DREAM EMPIRE,THANE
					<span style="font-size: 25px;">The largest township in Thane</span>
					<a href="#" type=button class='design'>LEARN MORE</a>
				</div>
			</div>
			<div class='imagecon'>
				<div class='sub'>
					DREAM MEADOWS,KALYAN
					<span style="font-size: 25px;">The largest township in Kalyan</span>
					<a href="#" type=button class='design'>LEARN MORE</a>
				</div>
			</div>
			<div class='imagecon'>
				<div class='sub'>
					DREAM WORLD,PANVEL
					<span style="font-size: 25px;">The largest township in Panvel</span>
					<a href="#" type=button class='design'>LEARN MORE</a>
				</div>
			</div>
			<div class='imagecon'>
				<div class='sub'>
				DREAM TOWN,AIROLI
					<span style="font-size: 25px;">The largest township in Airoli</span>
					<a href="#" type=button class='design'>LEARN MORE</a>
				</div>
			</div>
			<div class='imagecon'>
				<div class='sub'>
					DREAM EMPIRE,THANE
					<span style="font-size: 25px;">The largest township in Thane</span>
					<a href="#" type=button >LEARN MORE</a>
				</div>
			</div>
			
			</div>
		</div>
	</div>
</div>
<a name='about'></a>
<div class="about-section">
	<div class="inner-width">
		<h1>About Us</h1>
		<div class="border"></div>
		<div class="about-row">
		<div class="about-column">
		<div class="about">
		<p>
			Established in 1978, Hiranandani Group is one of the most prestigious real estate developers based in Mumbai. Hiranandani Group has the vision of creating a new India with self-sufficient and enduring townships. Every activity, be it in real estate, education, healthcare, hospitality, leisure or entertainment has steadily focused on creating a better experience in every aspect of life. While corporate has gone from strength to strength, the Group is primarily synonymous with quality, commitment towards customers, reliability, and excellence in architecture. We are here to give an experience of a lifetime to every family, through infrastructure that is synonymous with supreme quality, beauty, and longevity.
		</p>
		<a href="aboutus.html">READ MORE</a>
	</div>
</div>
</div>
</div>
</div>

<a name='ser'>
<h1 style="text-align: center;">OUR SERVICES</h1>
<div class='border'></div>
	<div class='container1'>
		<div class='box'>
			<h2>SERVICE 1</h2>
		</div>
		<div class='box'>
			<h2>SERVICE 2</h2>
		</div>
		<div class='box'>
			<h2>SERVICE 3</h2>
		</div>
	</div>
</a>
<h1 style="text-align:center">PROJECTS</h1>
<div class="border"></div>
<h2 style="text-align:center" >NAINA TOWER</h2>
<div class="container">
<div class="gallery">
<img src="images/bg3.jpg">
<div class="desc">
<a href="atlantis.php" style="text-decoration: none">ATLANTIS</a>
</div>
</div>
<div class="gallery">
<img src="images/bg2.jpg">
<div class="desc">
<a href="#" style="text-decoration: none">CASTLE ROCK</a>
</div>
</div>
<div class="gallery">
<img src="images/demo3.jpg">
<div class="desc">
<a href="#" style="text-decoration: none">NAINA HILL</a>
</div>
</div>

</div>
<h2 style="text-align:center" >SURABHI TOWER<h2>
<div class="container">
<div class="gallery">
<img src="images/bg3.jpg">
<div class="desc">
<a href="#" style="text-decoration: none">ATHENA</a>
</div>
</div>
<div class="gallery">
<img src="images/bg2.jpg">
<div class="desc">
<a href="#" style="text-decoration: none">SENINA</a>
</div>
</div>
<div class="gallery">
<img src="images/demo3.jpg">
<div class="desc">
<a href="#" style="text-decoration: none">OBELIA</a>
</div>
</div>

</div>
<h2 style="text-align:center" >WONDER WORLD</h2>
<div class="container">
<div class="gallery">
<img src="images/bg3.jpg">
<div class="desc">
<a href="#" style="text-decoration: none">PELICAN</a>
</div>
</div>
<div class="gallery">
<img src="images/bg2.jpg">
<div class="desc">
<a href="#" style="text-decoration: none">FLAMINGO</a>
</div>
</div>
<div class="gallery">
<img src="images/demo3.jpg">
<div class="desc">
<a href="#" style="text-decoration: none">GLENWOOD</a>
</div>
</div>
</div>
<h1 style="text-align:center">CONTACT US</h1>
<div class="border"></div>
	<div class=m1>
<div class=m2>
				<div id='error'></div>
			<form method="POST" name="frm" action="contactdb.php" onsubmit="return validation()"   >
				
				<label for="name">First Name :</label><input type="text" name="firstname" id="n" placeholder="Enter your name"   autocomplete="off" >
				<br><br>
				<label for="name">Last Name :</label><input type="text" name="lastname" id="n" placeholder="Enter your name"   autocomplete="off" >
				<br><br>
				<label for="email">Email :</label><input type="text" name="email" id="e"  placeholder="Enter your email" autocomplete="off"><br><br>
				<label for="tele">Phone :</label><input type="tel" name="number" id="t" placeholder="Enter 10 digits"  autocomplete="off" ><br><br>
				<label for='pn'>Project</label><input type='text' name=pn id="p" placeholder="Enter your project" list=pname>
				<datalist id='pname'>
					<option>PROJECT 1</option>
					<option>PROJECT 2</option>
				</datalist><br><br>
				<label for="name">reason :</label><input type="text" name="reason" id="n" placeholder="Enter your name"   autocomplete="off" >
				<br><br>
				
				<label for='enquiry'>Enquiry</label><textarea style="resize:none;" name='enquiry' id="en" cols='40' row='4' placeholder="Enter your enquiry"></textarea><br>
				<input type="submit" name="button"  value="Submit"> 
				

		

			</form>
		</div>
</div>			

<pre>
	





</pre>
<footer>
<?php
require "footer.php";
?>
</footer>

</body>
</html>
