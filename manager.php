
<?php
require"header.php";
	require "includes/dbh.inc.php";
	?>

<!DOCTYPE html>
<html>
<head>
	<style type="text/css">
		body{
			background-image: url(css/images/const.jpg);
		}
		.button {
			margin-top: 15%;
			margin-left: 35%;
    display: block;
    width: 25%;
    height: 25%;
    
    border-radius: 75%;  
}

.snack-wrap {
  display:block;
  position:fixed;
  bottom:0px;
  left:10px;
  padding:0px;
}

.snackbar {
  display:block;
  background:#222;
  border:#f2f2f2;
  padding:10px 40px 10px 20px;
  color:#fff;
  font-family:Arial;
  position:relative;
  left:0px;
  bottom:-70px;
  transition: bottom 0.5s ease-in-out;
  z-index:9;
} 
.snackclose, label {
  bottom:-70px;
  position:absolute;
  border:0;
}
.snackclose {
  display:none;
  z-index:10;
}
label {
  z-index:11;
  display:block;
  width:100%;
  height:100%;
  color:rgba(255,255,255,0.8);
  cursor:pointer;
}
.animated {
  animation-name: snackbar-show;
  animation-duration: 2s;
  animation-direction: forwards;
  animation-timing-function: ease-in-out;
  animation-delay:0.75s;
  animation-fill-mode: forwards;
}
.snackclose:checked~.snackbar, .snackclose:checked, .snackclose:checked+label {
  animation-name: snackbar-hide;
  animation-delay:0s;
}
@keyframes snackbar-show {
   0%{ bottom:-70px; }
  90%, 95% {bottom:15px; }
  92.5%, 100% {bottom:10px; }
} 
@keyframes snackbar-hide {
   0%, 7.5% {bottom:10px; }
  5%,10% {bottom:15px; }
  100% {bottom:-70px; }
}

	</style>
	<title>Home</title>
	
	<link rel="stylesheet" type="text/css" href="css/sites.css">
</head>
<body>

<a href="order.php"><img src="css/images/ordernow.png" class="button"></a>

<main>
<?php

if(isset($_SESSION['muserId'])){

	
	 	                                    /* TO RETRIEVE DATA USE THIS <a href="order.php" class="button">Orders</a> */
	$idUsers=$_SESSION['muserId'];
	 	
	$sql = "SELECT * FROM managerusers WHERE midUsers='".$idUsers."'";
	$result = mysqli_query($conn, $sql);
	$resultCheck = mysqli_num_rows($result);
	$row=mysqli_fetch_array($result);
	 	
	$emailUsers = $row[2]; 	
	$uidUsers = $row[1];
	$sitename = $row[4];
	//$category = $row[6];
	//$siteid = $row[7];


	
		echo "<h4 align='right'  style='font-size: 25px'> Hi! ".$uidUsers."</h4>";


/*
		$sql = "SELECT * FROM prop where siteid='".$siteid."'";
	 

	 	$result = mysqli_query($conn, $sql);
	 	
	 	$resultCheck = mysqli_num_rows($result);

	 	

	 	while($row1=mysqli_fetch_array($result)){

	 		echo "<h2 align='center'>".$row1["sitename"]."</h2>"."<h2 align='center'>".$row1["address"]."</h2>" ;
	 		
	 	}
    */
		 //echo '<a href="order.php">place order</a>';

	 }

	 else{

	 	echo'server not found';
	 }

?>

</main>


<div class="snack-wrap">
  <input type="checkbox" class="snackclose animated" id="close"/><label class="snacklable animated" for="close"></label>  
  <div class="snackbar animated">
     <p><strong>Notice:</strong>Order material using above button. <i><u>dismiss</i></u></p>
  </div>
</div>


</body>
</html>
