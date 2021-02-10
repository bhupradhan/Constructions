<?php
session_start();
$conn = mysqli_connect('localhost','root','','wdpbl');
header('location:index.php');

$name = $_POST['name'];
$username = $_POST['username'];
$password = $_POST['password'];
$siteid = $_POST['s_id'];
$phno = $_POST['phno'];
$sql = "SELECT * FROM signup where u_id='$username'";
$result = mysqli_query($conn,$sql);
$num = mysqli_num_rows($result);
if($num==1){
	echo "username already taken";
}
else{
	$reg = "INSERT INTO signup values('$username','$name','$password', '$siteid', '$phno')";
	mysqli_query($conn,$reg);
	echo "registration successfull";
}




?>