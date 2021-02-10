<?php
$conn = mysqli_connect('localhost','root','','mydemo');

function setComment($conn){
	if (isset($_POST['commentSubmit'])){
		
		$message = $_POST['message'];
		$name = $_POST['name'];
		$email = $_POST['email'];
		$phno = $_POST['phno'];
		$project = $_POST['project'];
		$sql = "INSERT INTO comment(name,email,phno,project,message) values('$name','$email','$phno' , '$project' , '$message'  )";
		$result = $conn->query($sql);

	}
	
	
}
function getComment($conn){
	$uid = $_SESSION['uid'];
	$sql = "SELECT message FROM enquiry WHERE u_id = '$uid'";
	$result = $conn->query($sql);
	while($row = $result->fetch_assoc()){
			echo "<div class='enquiry-box'>";
			
			echo $row['message']."<br><br>";
		echo "</div>";
	}
}
?>








