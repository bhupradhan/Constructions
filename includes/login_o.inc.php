<?php
session_start();
if(isset($_POST['login-submit'])){
$error = "<h4 align='center'>username/password incorrect</h4>";

	require'dbh.inc.php';


	$mailuid = $_POST['mailuid'];
	$password = $_POST['pwd'];

	if (empty($mailuid) || empty($password)){
		  $_SESSION["error"] = $error;
		header("Location: ../login_o.php?error=emptyfields");
		exit();
	}
	else{

		$sql = "SELECT * FROM ownerusers WHERE ouidUsers=? OR oemailUsers=?;";
		$stmt = mysqli_stmt_init($conn);

		if(!mysqli_stmt_prepare($stmt, $sql)){
			  $_SESSION["error"] = $error;
			header("Location ../login_o.php?error=sqlerror");
			exit();
		}

		else{

			mysqli_stmt_bind_param($stmt, "ss", $mailuid, $mailuid );
			mysqli_stmt_execute($stmt);
			$result = mysqli_stmt_get_result($stmt);
			if($row = mysqli_fetch_assoc($result)){
				$pwdCheck = password_verify($password, $row['opwdUsers']);

				if($pwdCheck == false){
					  $_SESSION["error"] = $error;
				header("Location: ../login_o.php?error=wrongpwd");
				exit();
				}
			
				elseif($pwdCheck==true){


			

				session_start();
				$_SESSION['ouserId'] = $row['oidUsers'];
				$_SESSION['ouserUid'] = $row['ouidUsers'];
				//$_SESSION['result'] = $result;


				header("Location: ../owner.php?login=success");
				exit();


				}
				

				

			}
			else{
					  $_SESSION["error"] = $error;
					header("Location: ../login_o.php?error=Nouserfound");
				exit();

			}	
		}

	
	}



}
else{
	  $_SESSION["error"] = $error;
	header("Location: ../login_o.php");
	exit();
}