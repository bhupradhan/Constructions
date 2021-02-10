<?php 
require 'includes/dbh.inc.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>






<?php


if(isset($_SESSION['userId'])){
	$siteid = $row['siteid'];

$sql = "SELECT * FROM prop where siteid='".$siteid."'";
	 

	 	$result = mysqli_query($conn, $sql);
	 	
	 	$resultCheck = mysqli_num_rows($result);

	 	
	 		while($row=mysqli_fetch_array($result)){

	 		echo "<BR> sitename<BR>".$row["sitename"]."<BR>Address<BR>".$row["address"] ;
	 	
	 	}




}
	 
		
	 	?>


</body>
</html>