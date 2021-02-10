<?php

if(isset($_POST['sorder'])){

	require 'dbh.inc.php';




	$mat = $_POST['mat'];
	$quan = $_POST['quan'];
	$brand = $_POST['brand'];
	$username=$_POST['username'];
	$siteid= $_POST['siteid'];
	$sitename = $_POST['sitename'];
	$status= "pending";
	





$sql = "INSERT INTO siteorder (mat, quan, brand, username, siteid, sitename,status) VALUES (?, ?, ?, ?, ?, ?,?)";
			$stmt = mysqli_stmt_init($conn);
			if(!mysqli_stmt_prepare($stmt, $sql)){

				header("Location: ../order.php?error=sqlError");
		exit();
	}
			else{
				
			mysqli_stmt_bind_param($stmt, "sssssss", $mat, $quan, $brand, $username, $siteid, $sitename, $status);
			mysqli_stmt_execute($stmt);

				header("Location: ../order.php?task=success");
				exit();

			}


mysqli_stmt_close($stmt);
mysqli_close($conn);

}