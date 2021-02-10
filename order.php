
<?php session_start();?>

<!DOCTYPE html>
<html>
<head>
	<style type="text/css">
	body{
			background-image: url(css/images/const.jpg);
		}
		#box{
    background-color: #202020;
    margin-left: 15%;
    margin-top: 7%;
    width: 70%;
    height: 75%;
    border-radius: 10px;
    text-align: center;
    color: #ffffff;
    font-family: "Century Gothic", CenturyGothic, AppleGothic, sans-serif;
}
#box:hover{
    transform: scale(1.01);
    box-shadow:0 0 10px rgba(255,255,255,0.3);
}
#bb{
	margin-bottom: 3%;
}

input {
  width: 70%;
}
input[type=submit]{
	wodth:50%;
}
#ba{
	width: 50%;
	margin-left: 25%
}
		</style>
		<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<title></title>
</head>
<body>
<div class="container">
	<div id="box">
		<div class="divf">
<form action="includes/order.inc.php" method="POST" class="form-group">
		

  <label for="mat"><h3>Choose your material from the list:</h3></label><br>

  <input list="mats" name="mat" id="mat" >
  <datalist id="mats">
    <option value="Cement" selected="selected"></option>
    <option value="Sand"></option>
    <option value="Rock"></option>
    <option value="Metal rods"></option>
    <option value="Paint"></option>
  </datalist><br><br>

		
		<input type="text" name="quan" placeholder="Enter quantity" required autocomplete= off  ><br><br>
		<input type="text" name="brand" placeholder="Enter brand" required autocomplete= off ><br><br>
		<input type="text" name="username" placeholder="Enter username" required autocomplete= off ><br><br>
		<input type="text" name="siteid" placeholder="Enter siteid" required autocomplete= off ><br><br>
		<input type="text" name="sitename" placeholder="Enter sitename" required autocomplete= off><br><br>
		<input type="submit" name="sorder" class="btn btn-secondary" id="bb">





		

	</form>
</div>
</div>
<!--
<form action="includes/admin.inc.php" method="POST">
	
<input type="submit" name="admin" value="Admin" class="btn btn-danger" id="ba">

</form>
-->
<?php
                    if(isset($_SESSION["error"])){
                        $error = $_SESSION["error"];
                        echo "<span> $error</span>";
                    }
                ?> 
<?php


/*
require 'includes/dbh.inc.php';
$idUsers=$_SESSION['muserId'];
$sql = "SELECT muidUsers FROM manageusers where midUsers='".$idUsers."'";
$result = mysqli_query($conn, $sql);
	 	
	 	$resultCheck = mysqli_num_rows($result);

	 	$row=mysqli_fetch_array($result);
	 	$uidUsers= $row['muidUsers'];
	//echo $uidUsers;


$sql = "SELECT * FROM managerusers where muidUsers='".$uidUsers."'"/*Changed siteorder with managerusers 
$result = mysqli_query($conn, $sql);
	 	
	 	$resultCheck = mysqli_num_rows($result);

	 	while($row2=mysqli_fetch_array($result)){

	 	$status=$row2[7];
	 	echo $status."<BR>";
}

*/

?>

<?php
unset($_SESSION["error"]);
?>
</div>
</body>
</html>