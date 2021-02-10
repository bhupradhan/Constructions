function Validate() 
{

  var x = document.vform.oname.value;
  if (x == "") 
  {
    //alert("Username must be filled out");
    error.textContent = "name must be filled out" 
    error.style.color = "red"
    vform.oname.focus();
    return false;
  }
  else
  {
    var u=/^[A-Za-z]+$/;
    //alert(vform.username.value.match(u));
    if( ! vform.oname.value.match(u))
    {
      //alert("Username must be charactors ");
      error.textContent = "name must be charactors only" 
      error.style.color = "red"
      return false;
    }
    else{
      error.textContent = "" 
    }
    
  }

 var k = document.vform.sitename.value;
  if (k == "") 
  {
   // alert("sitename must be filled out");
  error1.textContent = "sitename must be filled out" 
  error1.style.color = "red"
    vform.sitename.focus();
    return false;
  }
  
  else{
    error1.textContent = "" 
  }

 var l = document.vform.comment.value;
  if (l == "") 
  {
    //alert("Comment must be filled out");
    error2.textContent = "Comment must be filled out" 
    error2.style.color = "red"
    vform.comment.focus();
    return false;
  }
  else{
    error2.textContent = "" 
  }

return alert("Successfull")
}

