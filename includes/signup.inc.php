<?php

if(isset($_POST['signup-submit'])){
	require"dbh.inc.php";
	$name = $_POST['name'];
	$username = $_POST['username'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$passwordRepeat = $_POST['passwords'];
	$siteid = $_POST['s_id'];
    $phno = $_POST['tele'];
	
	
	if($password !== $passwordRepeat){

		header("Location: ../signup.php?error=passwordcheckuid".$username."&email=".$email);
		exit();
	}
	else{

		$sql = "SELECT uidusers FROM users WHERE uidUsers=?";
		$stmt = mysqli_stmt_init($conn);

		if(!mysqli_stmt_prepare($stmt, $sql)){

			header("Location: ../signup.php?error=sqlerror123");
		exit();
		}
		else{

			mysqli_stmt_bind_param($stmt, "s", $username);
			mysqli_stmt_execute($stmt);
			mysqli_stmt_store_result($stmt);
			$resultCheck = mysqli_stmt_num_rows($stmt);
			if($resultCheck >0){
				header("Location: ../signup.php?error=userTaken&mail=".$email);
		exit();
	}
		else{
			$sql = "INSERT INTO users (name, uidUsers, emailUsers, pwdUsers,siteid,mob ) VALUES (?,?, ?, ?, ?, ?)";
			$stmt = mysqli_stmt_init($conn);
			if(!mysqli_stmt_prepare($stmt, $sql)){

				header("Location: ../signup.php?error=sqlError");
		exit();
	}
			else{
				$hashedPwd = password_hash($password, PASSWORD_DEFAULT);
			mysqli_stmt_bind_param($stmt, "ssssss", $name, $username, $email, $hashedPwd, $siteid , $phno);
			mysqli_stmt_execute($stmt);

				header("Location: ../astartpage.php?signup=success");


				exit();

			}
			}



		}
			
		}
		

	
	


mysqli_stmt_close($stmt);
mysqli_close($conn);


}
else{
	header("Location ../signup.php");
	exit();
}