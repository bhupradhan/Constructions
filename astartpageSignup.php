<html>
<head>
	<title>Select User</title>
	<link rel="stylesheet" type="text/css" href="css/startpage.css">
	<link rel="icon" type="image/png" href="css/images/icon1.png">
	<meta name="viewport" content="width=device-width, initial-scale=-1">
</head>
<body>
<div class="box">
	<pre>
			<p align="center">Select signup</p>
			<div class="image">
				<img src="css/images/icons8-lock-256.png">
	</div>
	<div class="formin">
	<form method="post">
		<input type="submit" name="user" value="User"><br>
		<input type="submit" name="admin" value="Admin"><br>
		<input type="submit" name="owner" value="Owner"><br>
		<input type="submit" name="manager" value="Manager">
		
		<?php
if (isset($_POST['user'])) {
	header("location:signup.php");
}
if (isset($_POST['admin'])) {
	header("location:signup_a.php");
}
if (isset($_POST['owner'])) {
	header("location:signup_o.php");
}
if (isset($_POST['manager'])) {
	header("location:signup_m.php");
}

?>
	</form>
</div>
<footer>
</pre>
	<p align="center">2020 Web design PBL-sem 5 </p>
</footer>
	</div>
	
	<?php
require "footer.php";
?>
</body>
</html>
