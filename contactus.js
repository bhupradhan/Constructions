function validation(){
	
	var email = document.getElementById("e").value;
	var phone = document.getElementById("t").value;
	var project = document.getElementById("p").value;
	var enquiry = document.getElementById("en").value;
	var errors = document.getElementById("error").value;
	var text;
	e = document.getElementById("error").style.padding="10px";
	
	var names = document.frm.name.value;
	if (names == "")
{
text="please enter something in name field";
	q = document.getElementById("error").innerHTML=text;
frm.name.focus();
return false;
}
	var u=/^[A-Za-z]+$/;


if( !frm.name.value.match(u))
{
	
text="please enter valid name";
	q = document.getElementById("error").innerHTML=text;
	frm.name.focus();
	
	return false;
}
if(email.indexOf('@')<=0||email == "" ){
		text="please enter valid email";
		q = document.getElementById("error").innerHTML=text;
		
		return false;
	}
if(phone.length!=10 || isNaN(phone)){
			text="please enter phone";
		q = document.getElementById("error").innerHTML=text;
			return false;
		}
		if((phone.charAt('0')!=7) && (phone.charAt('0')!=8) && (phone.charAt('0')!=9)){
			text="please enter phone starting with 7, 8 or 9";
		q = document.getElementById("error").innerHTML=text;
			return false;
		}
if (enquiry == "")
{
text="please enter something in enquiry";
	q = document.getElementById("error").innerHTML=text;
frm.name.focus();
return false;
}

}
