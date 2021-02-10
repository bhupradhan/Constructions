
<?php
$servername = "localhost";
$database = "wdpbl";
$username = "root";
$password = "";

// Create connection

$conn = mysqli_connect($servername, $username, $password, $database);

global $conn;
if ($conn==false) {
die("Connection failed: " . mysqli_connect_error());
}

$fn=$_POST['firstname'];
$ln=$_POST['lastname'];
$nu=$_POST['number'];
$em=$_POST['email'];
$re=$_POST['reason'];
$en=$_POST['enquiry'];

$sql = "INSERT INTO contact VALUES ('$fn','$ln',$nu,'$em','$re','$en')";
if(mysqli_query($conn, $sql)){
    header("location:index.php");

} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
    //header("Location: sqlin.html"); 
}
mysqli_close($conn);

?>



?>
