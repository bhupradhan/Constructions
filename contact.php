<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="button.css">
	<script type="text/javascript" src='test2.js'></script>
	<style type="text/css">
		h1{
			text-align: center;
			background-color: green;
		}
		.p{
			background-color: #8FCE8C;
		}
			form label, input, select{

				margin-bottom:20px;
				font-family: TIMES NEW ROMAN;
				width: 200px;
			}
			input, select{
				margin: 10px 0;
				box-sizing: content-box;
			}

	</style>
	<title>Contact Us!</title>
</head>
<body style="background-color: white">
	<h1>CONTACT FORM</h1>
	<hr>
	<div class="container" style='margin-left: 600px'>
		<form name="contact" onsubmit="return Validate(this);" action="contactdb.php" method="POST">	
			
			<label>First Name:</label>
			<input class= 'p' type="text" name="firstname"   title="Name should contain letters only.." placeholder="Enter your FirstName...." >
			<br>
			<label>Last Name:</label>
			<input class= 'p' type="text" name="lastname"  title="Name should contain letters only.." placeholder="Enter your LastName...." >
			<br>
			<label>Mobile Number:</label>
			<input class= 'p' type="text" name="number"  title="Phone number should contain numbers only.." placeholder="Enter your Phone Number...." >
			<br>
			<label>Email ID:</label>
			<input class= 'p' type="Email" name="email" placeholder="Enter you Email ID...." >
			<br>
			<label>Select reason for your enquiry:</label>
			<select class= 'p' name="reason" >
			<option value="Planning to buy an apartment!">Planning to buy an apartment!</option>
			<option value="Regarding the plots under construction!">Regarding the plots under construction!</option>
			<option value="Employee of ours!">Employee of ours!</option> 
			</select>
			<br>
			<label >Enter your Enquiry:</label>
			<br>
			<textarea class= 'p' id="enquiry" name="enquiry" placeholder="Please Enter your enquiry" style="height: 200px; width: 400px" ></textarea>
			<br>
			<button type="submit" value="submit" name="contact">Submit</button><button onclick="refreshPage()">Refill</button>
		

		</form>
	</div>

</body>
</html>