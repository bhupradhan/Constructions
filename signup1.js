function validation(){
		var name = document.frm.name.value;
		var email = document.getElementById('email').value;
		var phone = document.getElementById('phone').value;
		var user = document.getElementById('user').value;
		var pass = document.getElementById('pass').value;
		var site = document.getElementById('site').value;
		var check = document.getElementById('pwd').value;
		var text;
		e = document.getElementById("error").style.padding="10px";
		if(name == ""){
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
		

		if((email.indexOf('@')<=0)||(email == "")  ){
		text="please enter valid email";
		q = document.getElementById("error").innerHTML=text;
		frm.email.focus();
		return false;
		}
		if(phone.length!=10 || isNaN(phone)){
			text="please enter phone";
		q = document.getElementById("error").innerHTML=text;
		frm.tele.focus();
			return false;
		}
		if((phone.charAt('0')!=7) && (phone.charAt('0')!=8) && (phone.charAt('0')!=9)){
			text="please enter phone starting with 7, 8 or 9";
		q = document.getElementById("error").innerHTML=text;
		frm.tele.focus();
			return false;
		}

		
		if(user == ""){
			text="please enter username";
		q = document.getElementById("error").innerHTML=text;
		frm.tele.focus();
			return false;
		}
		if(!isNaN(user)){
			text="please enter only characters in username";
		q = document.getElementById("error").innerHTML=text;
		frm.username.focus();	
			return false;
		}

		if(pass == ""){
			text="please enter password";
		q = document.getElementById("error").innerHTML=text;
		frm.password.focus();
			return false;
		}
		if(pass.length<=2 || pass.length>=10){
			text="length of password should be between 2 and 10";
		q = document.getElementById("error").innerHTML=text;
		frm.password.focus();
			return false;
		}
		if(pass!=check){
			//alert("yay");
			text="password is not same";
		q = document.getElementById("error").innerHTML=text;
		frm.passwords.focus();
			return false;
		}
		if(site == ""){
			text="please fill the site id field";
		q = document.getElementById("error").innerHTML=text;
		frm.s_id.focus();
			return false;
		}
		if(isNaN(site)){
			text="siteid should be only numbers";
		q = document.getElementById("error").innerHTML=text;
		frm.s_id.focus();
			return false;
		}
	}