<?php
session_start();
include 'register.php';

?>

<html>
<head>
	<title>Signup</title>
	<link rel=stylesheet type=text/css href=signup1.css>
	<script src="signup1.js"></script>

</head>
<body>
	<?php
if (isset($_POST['buttons'])){
		
		$name = $_POST['name'];
		$email = $_POST['email'];
		$phno = $_POST['tele'];
		$username = $_POST['username'];
		$password = $_POST['password'];
		$cpassword = $_POST['passwords'];
		$sid = $_POST['s_id'];
		$sql = "SELECT * FROM signups where user='$username'";
		$result = mysqli_query($conn,$sql);
		$num = mysqli_num_rows($result);
		if($num==1){
			echo "username already taken";
		}
		else{
			$reg = "INSERT INTO signups values('$name','$email','$phno' , '$username' , '$password' , '$cpassword' , '$sid'  )";
			mysqli_query($conn,$reg);
			echo "registration successfull";
		}
		//$sql = "INSERT INTO signups values('$name','$email','$phno' , '$username' , '$password' , '$cpassword' , 'sid'  )";
		//$result = $conn->query($sql);
		
	}
?>
	<div class=main><h2>SIGNUP</h2></div>
	<div class=m1>

			
			<div class=m2>
				<div id='error'></div>
			<form method="POST"  onsubmit="return validation()" name="frm"  >
				<label for="name">Name :</label><input type="text" name="name" placeholder="Enter your name" id="namea" autocomplete="off" >
				<span id=n></span><span id=n1></span><span id=n2></span><br><br>
				<label for="email">Email :</label><input type="text" name="email"  id="email" placeholder="Enter your email" autocomplete="off" >
				<span id=e></span><span id=e1></span><span id=e2></span><br><br>
				<label for="tele">Phone :</label><input type="tel" name="tele" placeholder="Enter 10 digits"  id="phone" autocomplete="off" >
				<span id=t></span><span id=t1></span><span id=t2></span><br><br>
				<label for="username">Username :</label><input type="text" name="username" placeholder="Enter your username" id="user" autocomplete="off" >
				<span id=u></span><span id=u1></span><span id=u2></span><br><br>
				<label for="password">Password :</label><input type="password"  name="password" placeholder="Enter your password" id="pass" autocomplete="off" ><br><br>
				<label for="password">Confirm Password :</label><input type="password"  name="passwords" placeholder="Enter your password again" id="pwd" autocomplete="off" >
				<span id=p></span><span id=p1></span><span id=p2></span><br><br>
				<label for="s_id">Site ID :</label><input type="text" name="s_id" placeholder="Enter your site id" id="site" autocomplete="off">
				<span id=s></span><span id=s1></span><span id=s2></span><br><br>

				<input type="submit" name="buttons" value="Signup"> 
				

		

			</form>
		</div>
</div>

</body>
</html>