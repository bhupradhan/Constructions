<?php

session_start();
if(isset($_POST['signup-submit'])){
	require"dbh.inc.php";
$error = "<h4 align='center'>User Already Exists</h4>";
	
	$username = $_POST['uid'];
	$email = $_POST['mail'];
	$password = $_POST['password'];
	$passwordRepeat = $_POST['passwords'];
	
	$siteid = $_POST['s_id'];
    $phno = $_POST['tele'];
	if($password !== $passwordRepeat){
$_SESSION["error"] = $error;
		header("Location: ../signup_m.php?error=passwordcheckuid".$username."&mail=".$email);
		exit();
	}
	else{

		$sql = "SELECT auidusers FROM admin WHERE auidUsers=?";
		$stmt = mysqli_stmt_init($conn);

		if(!mysqli_stmt_prepare($stmt, $sql)){
$_SESSION["error"] = $error;
			header("Location: ../signup_a.php?error=sqlerror");
		exit();
		}
		else{

			mysqli_stmt_bind_param($stmt, "s", $username);
			mysqli_stmt_execute($stmt);
			mysqli_stmt_store_result($stmt);
			$resultCheck = mysqli_stmt_num_rows($stmt);
			if($resultCheck >0){
				$_SESSION["error"] = $error;
				header("Location: ../signup_a.php?error=userTaken&mail=".$email);
		exit();
	}
		else{
			$sql = "INSERT INTO admin (auidUsers, aemailUsers, apwdUsers ) VALUES (?, ?, ?)";
			$stmt = mysqli_stmt_init($conn);
			if(!mysqli_stmt_prepare($stmt, $sql)){
$_SESSION["error"] = $error;
				header("Location: ../signup_a.php?error=sqlError");
		exit();
	}
			else{
				$hashedPwd = password_hash($password, PASSWORD_DEFAULT);
			mysqli_stmt_bind_param($stmt, "sss", $username, $email, $hashedPwd );
			mysqli_stmt_execute($stmt);

				header("Location: ../signup_a.php?signup=success");
				exit();

			}
			}



		}
			
		}
		

	
	


mysqli_stmt_close($stmt);
mysqli_close($conn);


}
else{
	$_SESSION["error"] = $error;
	header("Location ../signup_a.php");
	exit();
}
