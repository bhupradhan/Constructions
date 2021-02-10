<?php 
require 'header.php';

 ?>
<!DOCTYPE html>
<html>
<head>

	<title>Admin page</title>
	<link rel="stylesheet" type="text/css" href="button.css">
	<script type="text/javascript">
	</script>
	<style>
		select {
  
  appearance: groove;
  background-color: none;
  border: groove;
  padding: 0 1em 0 0;
  margin: 10;
  width: 10%;
  font-family: inherit;
  font-size: inherit;
  cursor: inherit;
  line-height: inherit;
}
		.div{
	  		font-size: 20px;
		  	text-align: center;
		  	background-color: silver; 
		}
		tr{
			background-color: teal;
		}
		table{
			background-color:  lightblue;
			text-align: center;
			padding: 20px;
		}
		button{
	  		background-color: #4CAF50;
			border: 3;
			color: white;
			padding: 10px 20px;
			text-align: center;
			text-decoration: none;
			display: inline-block;
			font-size: 16px;
			margin: 4px 2px;
			cursor: pointer;
		}
	</style>
</head>
<?php
$servername = "localhost";
$database = "wdpbl";
$username = "root";
$password = "";

// Create connection

$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
global $conn;
if ($conn==false) {
die("Connection failed: " . mysqli_connect_error());
}

?>


<body bgcoor="gree">
	<h1 align="center" style="background-clor: #6CDFB7; font-size: 40px; padding: 20px;">ADMIN PAGE</h1>
	
	<hr>
	
	<h2 align="left" ><a href="feedout.php"><img src="admin.png"></a></h2> 
	
	<hr>
	<div class="div">
	<img src="images/building.jpg" width="400" height="400">
	<img src="images/buidling2.jpg" width="400" height="400">
	<img src="images/building3.jpg" width="400" height="400">	
	</div>
	<hr>
	<div align="center">
	<form action='test.php' method="post" name='property'>
		<label>Choose a site:</label>
		<select id="prop" name="prop">
			<?php
				$result = mysqli_query($conn, "SELECT * from prop");	
		if ($result->num_rows > 0) {
 		
  		while($row = mysqli_fetch_array($result) ) {
  			echo '<option value='.$row['sitename'].'>'.$row['sitename'].'</option>';
 		 }
 		}
			 ?>
		
	</select>
		<button type="submit" name="submit">Submit</button>
	</form>
	</div>
	<?php
	
	
	// Set session variables
	if(!isset($_POST['prop']))
	{
		$prop = $_SESSION['prop'];
	}
	else{
		$_SESSION['prop']=$_POST["prop"];
		$prop=$_POST["prop"];
	}
	
	?>
	<hr>
	<p align="center"><marquee direction='right' ><h2><?php echo $prop; ?></h2></marquee></p>
	<hr>
	<div align="center" ><h2>SITE WORKERS:-</h2></div>
	<table border="1" cellpadding="4" align="center">
		<tr>
    		<th>Name</th>
    		<th>Position</th>
    		<th>No. of Leaves</th>
    		<th>Salary</th>
    		<th>Festival Bonus</th>
    		<th>Calculated Salary</th>
 		</tr>
 		<?php
 		
 		$result = mysqli_query($conn, "SELECT * from workers");	
		if ($result->num_rows > 0) {
 		
  		while($row = mysqli_fetch_array($result) ) {
  			$sal = $row['salary']+$row['bonus'];
   	 		if($row['property']==$prop) {  	 		
 
			echo "<tr>";
	    	echo "<td>".$row['Name']."</td>";
	    	echo "<td>".$row['Position']."</td>";
	    	echo "<td>".$row['leaves']."</td>";
	    	echo "<td>".$row['salary']."</td>";
	    	echo "<td>".$row['bonus']."</td>";
	    	echo "<td>".$sal."</td>";
	  		echo"</tr>";
   	 	
 		 }

 		 }
 		}

 		?>
	</table>
	<br>

<div align="center"><h2>Site Orders:</h2></div>
		<div class="div">
		<form method="POST" action="test.php" >
		<hr>
	<?php
	
	
	
	$result = mysqli_query($conn, "SELECT * from siteorder");	
		if ($result->num_rows > 0) {
 		// echo"<hr>";
  	while($row = mysqli_fetch_array($result) ) {
  		
   	 	if($row['status']==0 && $row['sitename']==$prop) {
   	 		$num = $row['oid'];
   	 		# code...
   	 		
	
   	 		
   	 		printf($row['oid']);
  			echo "<hr>";
   	 		echo "<li>By Site Manager:". $row['muidUsers']."</li>";
   	 		echo "<p>".$row['material']."</p>";
   	 		echo "<p>".$row['brand']."</p>";
   	 		echo "<p>".$row['quantity']."</p>";
   	 		
   	 		echo "<p><button name='accept".$num."' type='submit' >Accept</button> <button  type='submit' name='reject".$num."'>Reject</button></p>";
 		 

		if(isset($_POST['accept'.$num.''])){

		        
		        if(mysqli_query($conn, 'UPDATE siteorder SET status = 1 WHERE oid ='. $num))
				{
					echo "<b>Order Number ".$num." has been accepted :)"."</b><hr>";

					}
				else{
					echo("Changes failed to be made :/");
					
				}
				
				 unset($_POST['accept']);
		    }
		    
		   else if(isset($_POST['reject'.$num.''])){
		        

		        if(mysqli_query($conn, 'UPDATE siteorder SET status = -1 WHERE oid ='. $num))
				{
					echo "<b>Order Number ".$num." has been rejected :)"."</b><hr>";
					}
				else{
					echo("Changes failed to be made :/");
					
				}
				 unset($_POST['reject']);


		    }
		    else {
		    	echo"<hr>";
		    }
		    }
 		 }
 		 
}



    


		?>

	</form>
	</div>
</body>
</html>