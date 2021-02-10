<?php session_start();?>
<html>
<head>
	<title>Login</title>
<link rel="stylesheet" type="text/css" href="css/login_u.css">
<link rel="icon" type="image/png" href="css/images/icon1.png">
<script type="text/javascript" src="js/signup1.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	<div class="box">
		<div class="formin">
			<h3 align="center">User Login</h3>
			<div class="image">
				</div>
			<form action="includes/login_m.inc.php" method="POST" >
				<!--<label for="name">Name :</label><input type="text" name="name" placeholder="Enter your name"><br><br>-->

				<table>

				<label for="mailid">Email : </label><input type="email" name="mailuid" placeholder="Enter your email" required autocomplete=off><br><br>
				<label for="pwd">Password : </label><input type="password" name="pwd" placeholder="Enter your password" required><br><br><br>
				<input type="submit" name="login-submit"> 

				</table>
				<?php
                    if(isset($_SESSION["error"])){
                        $error = $_SESSION["error"];
                        echo "<span> $error</span>";
                    }
                ?> 

		<?php
		/*
			if (isset($_POST['login-submit'])) {
				echo '<script type="text/javascript">';
				echo ' alert("Login Successful")'; 
				echo '</script>';
				header("location:includes/login.inc.php");
			}

			*/
			?>

			</form>
			<p align="center">Not registered ?<br> <a href="signup.php"> Click here to register</a></p>
		</div>
	</div>



<?php
require "footer.php";

unset($_SESSION["error"]);
?>

</body>
</html>