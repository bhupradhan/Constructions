<?php  
require 'header.php';
require "includes/dbh.inc.php";
?>
<br>

<!DOCTYPE html>
<html>
<head>
  <title></title>
  <link rel="stylesheet" type="text/css" href="css/sites.css">
</head>
<body>
<a href="owner.php">
  <img src="images/back-button.png"></a><br><br>
  
<?php

if(isset($_SESSION['ouserId'])){


     //   $sql = "SELECT * FROM ownerusers WHERE oidUsers='".$_SESSION['ouserId']."'";
     //   $result = mysqli_query($conn, $sql);
     //   $resultCheck = mysqli_num_rows($result);
      //  $row=mysqli_fetch_array($result);



      //  $category = $row[6];
      //  if($category== 'owner'){

          
        


$sql = "SELECT * FROM prop ";
	 

	 	$result = mysqli_query($conn, $sql);
	 	
	 	$resultCheck = mysqli_num_rows($result);

	 	
/*
	 	while($row1=mysqli_fetch_array($result)){

	 		echo "<BR> sitename<BR>".$row1["sitename"]."<BR>Address<BR>".$row1["address"] ;
	 	}
*/



echo "<table align='center'>

<tr>
<th>SITE ID</th>
<th>SITE NAME</th>
<th>SITE ADDRESS</th>
<th>SITE MANAGER</th>
<th>NUMBER OF WORKERS</th>
<th>START DATE</th>
<th>PREDICTED END DATE</th>



</tr>";
while($row1=mysqli_fetch_array($result)){
echo "<tr>";


echo "<td>" . $row1[0] . "</td>";
echo "<td>" . $row1[1] . "</td>";
echo "<td>" . $row1[2] . "</td>";
echo "<td>" . $row1[3] . "</td>";
echo "<td>" . $row1[4] . "</td>";
echo "<td>" . $row1[5] . "</td>";
echo "<td>" . $row1[6] . "</td>";

echo "</tr>";
}
echo "</table>";









	 
	}	
	 	?>



   
 </body>
</html>










<pre>




























</pre>
<?php  
require 'footer.php';

?>