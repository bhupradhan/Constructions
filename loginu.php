<?php session_start();?>
<html>
<head>
	<title>Login</title>
<link rel="stylesheet" type="text/css" href="loginu.css">
<link rel="icon" type="image/png" href="css/images/icon1.png">
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="signup1.js"></script>
</head>
<body>
	<div class="box">
		<div class="formin">
			<h3 align="center">User Login</h3>
			<div class="image">
				</div>
			<form method="POST" action="validation.php" onsubmit="return validation(this)" name="frm" >
				<label for="name">Name :</label><input type="text" name="name" placeholder="Enter your name" id="namea" autocomplete="off" ><br><br>



				<label for="username">Username :</label><input type="text" name="username" placeholder="Enter your username" required><br><br>
				<label for="password">Password :</label><input type="password" name="password" placeholder="Enter your password" required><br><br><br>
				<label for="s_id">Site ID :</label><input type="text" name="s_id" placeholder="Enter your site id"><br><br>
				<input type="submit" name="button" value="Login"> 
				

		

			</form>

				<?php
                    if(isset($_SESSION["error"])){
                        $error = $_SESSION["error"];
                        echo "<span> $error</span>";
                    }
                ?>
			<p align="center">Not registered ?<br> <a href="signup.php"> Click here to register</a></p>
		</div>
	</div>
<?php 
unset($_SESSION["error"]);
 ?>
</body>
</html>