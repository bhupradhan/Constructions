<?php session_start();?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
<script src="fb.js"></script>
	<style>
.box{

	margin : 80px 200px;
	padding: 50px;

	border: solid #CECECE  0.5px;

	 box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
	
	opacity:3.0;
	background-color: #FFD55A;


}
label{

	color: #293250;
	font-size: 30px;
	font-family: sans-serif;

}
input{
	display: inline-block;
	
	

	
	
	
	text-decoration: blink;
	display: inline-block;
	
	
	height: 30px;
	width: 200px;
}


h1 {
  position: absolute;
  left: 890px;
  top: 250px;

}
h1:hover{

	opacity: 0.8;

}
a{
	text-decoration: none;
	color: #293250;
}

	</style>
</head>
<body>
<?php
                    if(isset($_SESSION["error"])){
                        $error = $_SESSION["error"];
                        echo "<span> $error</span>";
                    }
                ?> 


	<a href="#"><h1><img src="images/logo1.png" width="30%"></h1></a>
<div class="box">
<form name="vform" onsubmit="return Validate(this); " action="feedbackli.php" method=post>
	<label for="oname"><b>Name:*</b></label><br>
<input type="text" name="oname" placeholder="Name" autocomplete=off > <span id="error"> </span><br><br>



<label for="sitename"><b>Site id :*</b></label><br>
<input type="text" name="sitename" placeholder="Enter site id" id="sid" onKeyUp="sname_ret()"required autocomplete=off><br>site name:<div id="suggestion"></div><br><br>



<label for="comment"><b>Comment:*</b></label><br>
<textarea style="resize: none;" rows="4" cols="50" name="comment"  placeholder="Enter Comment Here" autocomplete=off>
</textarea>  <span id="error2"> </span><br><br><br>

<input style="background-color: #6DD47E ;" type="submit" name="submit" value="submit" >
</form>
<span style="font-size: 20px;   position: absolute;
left: 650px;
top: 450px; color: red" id="error4"></span>

</div>

<h2 style="font-size: 20px;   position: absolute;
  left: 400px;
  top: 550px; color: red">NOTE: Enter comment to admin for any changes or error in website you want to report.</h2>



<script>
function sname_ret()
{
var sno = document.getElementById("sid").value;
var xhr;
 if (window.XMLHttpRequest) { // Mozilla, Safari, ...
    xhr = new XMLHttpRequest();
} else if (window.ActiveXObject) { // IE 8 and older
    xhr = new ActiveXObject("Microsoft.XMLHTTP");
}
    var data = "snum=" + sno;
    xhr.open("POST", "ajax.php", true); 
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");                  
    xhr.send(data);
xhr.onreadystatechange = display_data;

   	function display_data() {
	   if (xhr.readyState == 4) {
      if (xhr.status == 200) {
       //alert(xhr.responseText);	   
	     document.getElementById("suggestion").innerHTML = xhr.responseText;
      }
      else {
        alert('There was a problem with the request.');
      }
     }
	  }
}
</script>
<?php
unset($_SESSION["error"]);
?>
</body>
</html>