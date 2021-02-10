<?php
$conn = mysqli_connect('localhost','root','','wdpbl');

function setComment($conn){
	if (isset($_POST['commentSubmit'])){
		
		$message = $_POST['message'];
		
		$site = $_SESSION['siteid'];
		$uid = $_SESSION['uid'];
		$sql = "INSERT INTO comment(message,u_id) values('$message','$uid' )";
		$result = $conn->query($sql);
	}
	
	
}
function getComment($conn){
	$uid = $_SESSION['uid'];
	$sql = "SELECT message FROM comment WHERE u_id = '$uid'";
	$result = $conn->query($sql);
	while($row = $result->fetch_assoc()){
			echo "<div class='enquiry-box'>";
			
			echo $row['message']."<br><br>";
		echo "</div>";
	}
}








