function refreshPage(){
    	window.location.reload();
		} 

function Validate(){
	var fn = document.contact.firstname.value;
	var ln = document.contact.lastname.value;
	var mn = document.contact.number.value;
	var em = document.contact.email.value;
	var en = document.contact.enquiry.value;
	if (fn=='')
	{
		alert("Please Enter your First Name..");
		contact.firstname.focus();
		return false;
	}

	else if(ln=='')
	{
		alert("Please Enter your Last Name..");
		contact.lastname.focus();
		return false;
	}
	else if (em='') 
	{
		alert("Please Enter your email..");
		contact.email.focus();
		return false;	
	}
	else if (mn='') {
		alert("Please Enter your Phone Number");
		contact.number.focus();
		return false;
	}
	else if (en='') {
		alert("Please Enter your enquiry");
		contact.enquiry.focus();
		return false;
	}
}