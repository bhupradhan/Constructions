<?php
  
require 'header.php';
require "includes/dbh.inc.php";
?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/sites.css">
	<title></title>

	<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
.btn {
  border: none;
  color: black;
  padding: 14px 28px;
  font-size: 16px;
  cursor: pointer;
}

.success {background-color: #4CAF50;} /* Green */
.success:hover {background-color: #46a049;}

.info {background-color: #2196F3;} /* Blue */
.info:hover {background: #0b7dda;}

.warning {background-color: #ff9800;} /* Orange */
.warning:hover {background: #e68a00;}

.danger {background-color: #f44336;} /* Red */ 
.danger:hover {background: #da190b;}

.default {background-color: #e7e7e7; color: black;} /* Gray */ 
.default:hover {background: #ddd;}
</style>
	<style>
		
		.sidenav {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  opacity: 1;
  background-color: #17202A  ;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px;
  text-align:center;
  
}

.sidenav a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 25px;
  color: #818181;
  display: block;
  transition: 0.3s;
   

}

.sidenav a:hover{
  color: #f1f1f1;
   
}

.sidenav .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
   
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}

	</style>
</head>
<body>
	<a style="position: absolute; top: 120px;" href="test.php">
  <img src="images/back-button.png"></a>
<br>
<form method="POST" action="feedout.php">
<input value="Feedbacks" style=" position: absolute; top: 160px; left:25px;"class="btn success" type="submit" name="feed">
</form>

<form  method="POST" action="feedout.php">
<input value="Enquiries" style=" position: absolute; top: 160px; left:165px;" class="btn success" type="submit" name="com">
</form>
<br><br><br>
<br><br>
<hr>

<?php  
if(isset($_SESSION['auserId'])){


     //   $sql = "SELECT * FROM ownerusers WHERE oidUsers='".$_SESSION['ouserId']."'";
     //   $result = mysqli_query($conn, $sql);
     //   $resultCheck = mysqli_num_rows($result);
      //  $row=mysqli_fetch_array($result);



      //  $category = $row[6];
      //  if($category== 'owner'){

          
        

if(isset($_POST['feed'])){




$sql = "SELECT * FROM feedback ";
	 

	 	$result = mysqli_query($conn, $sql);
	 	
	 	$resultCheck = mysqli_num_rows($result);

	 	
/*
	 	while($row1=mysqli_fetch_array($result)){

	 		echo "<BR> sitename<BR>".$row1["sitename"]."<BR>Address<BR>".$row1["address"] ;
	 	}
*/


echo "<br>";

echo "<h1 align='center'>Feedback from owner</h1>";
echo "<table align='center'>

<tr>
<th>OWNER NAME</th>
<th>SITE NAME</th>
<th>COMMENT</th>




</tr>";
while($row1=mysqli_fetch_array($result)){
echo "<tr>";


echo "<td>" . $row1[0] . "</td>";
echo "<td>" . $row1[1] . "</td>";
echo "<td>" . $row1[2] . "</td>";
//echo "<td>" . $row1[3] . "</td>";
//echo "<td>" . $row1[4] . "</td>";
//echo "<td>" . $row1[5] . "</td>";
//echo "<td>" . $row1[6] . "</td>";

echo "</tr>";
}
echo "</table>";
}
/*------------------------------------------Comments----------------------------------------*/
elseif (isset($_POST['com'])) {
	

$sql = "SELECT * FROM contact ";
	 

	 	$result = mysqli_query($conn, $sql);
	 	
	 	$resultCheck = mysqli_num_rows($result);

	 	
/*
	 	while($row1=mysqli_fetch_array($result)){

	 		echo "<BR> sitename<BR>".$row1["sitename"]."<BR>Address<BR>".$row1["address"] ;
	 	}
*/


echo "<br>";
echo "<h1 align='center'>Enquiries</h1>";
echo "<table align='center'>

<tr>
<th>FIRST NAME</th>
<th>LAST NAME</th>
<th>NUMBER</th>
<th>EMAIL</th>
<th>PURPOSE</th>
<th>ENQUIRY</th>





</tr>";
while($row1=mysqli_fetch_array($result)){
echo "<tr>";


echo "<td>" . $row1[0] . "</td>";
echo "<td>" . $row1[1] . "</td>";
echo "<td>" . $row1[2] . "</td>";
echo "<td>" . $row1[3] . "</td>";
echo "<td>" . $row1[4] . "</td>";
echo "<td>" . $row1[5] . "</td>";
//echo "<td>" . $row1[5] . "</td>";
//echo "<td>" . $row1[6] . "</td>";

echo "</tr>";
}
echo "</table>";



}



	 
	}	
	 	?>










</body>
</html>