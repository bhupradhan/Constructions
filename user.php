<?php
session_start();
include 'comments.php';

?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<link rel="stylesheet" href="style3.css">
<body>
<div class="head">
	<a href="logout.php">LOGOUT</a>
</div>

<div class="images">
	


<h1>Welcome <?php  echo $_SESSION['name']; ?> </h1>


</div>
<h1 id="enq">ENQUIRY</h1>
<?php
echo "<div class='box'>";
echo" 
<form method='POST' action='".setComment($conn)."'>
<input type='hidden' name='username' >


<textarea name='message'></textarea><br>
<button type='submit' name='commentSubmit'>Submit</button>
</form>
";
echo "</div>";
echo "<div class='main'>
PREVIOUS ENQUIRIES";
echo "</div>";
getComment($conn);


?>


</body>
</html>