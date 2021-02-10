<?php
session_start();
$conn = mysqli_connect('localhost','root','','wdpbl');
$error = "<h4 align='center'>username/password incorrect</h4>";
$name = $_POST['name'];
$username = $_POST['username'];
$password = $_POST['password'];
$siteid = $_POST['s_id'];
$sql = "SELECT * FROM signups where  user='$username'";
$result = mysqli_query($conn,$sql);
$num = mysqli_num_rows($result);
if($num==1){
	$_SESSION['name'] = $name;
	$_SESSION['siteid'] = $siteid;
	$_SESSION['uid'] = $username;
	
	header('location:user.php');
}
else{
$_SESSION["error"] = $error;
	header('location:loginu.php');

}




?>