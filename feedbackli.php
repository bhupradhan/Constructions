<?php

session_start();

include('includes/dbh.inc.php');
// Check connection
global $conn;
if ($conn==false) {
die("Connection failed: " . mysqli_connect_error());
}


$error = "<script>alert('Successfull')</script>";

$name=$_POST['oname'];
$sitename=$_POST['sitename'];
$comment=$_POST['comment'];

$sql = "INSERT INTO feedback VALUES ('$name','$sitename','$comment')";
if(mysqli_query($conn, $sql)){
	 $_SESSION["error"] = $error;
	header("Location: ../final/feedbackjs.php?feedback=success");
    } else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
    //header("Location: sqlin.html"); 
}
mysqli_close($conn);

?>
