function Validate() 
{
  var x = document.vform.oname.value;
  if (x == "") 
  {
    alert("Username must be filled out");
    vform.oname.focus();
    return false;
  }
  else
  {
    var u=/^[A-Za-z]+$/;
    //alert(vform.username.value.match(u));
    if( ! vform.oname.value.match(u))
    {
      alert("Username must be charactors ");
      return false;
    }
    
  }

 var k = document.vform.sitename.value;
  if (k == "") 
  {
    alert("sitename must be filled out");
    vform.sitename.focus();
    return false;
  }
  


 var l = document.vform.comment.value;
  if (l == "") 
  {
    alert("Comment must be filled out");
    vform.comment.focus();
    return false;
  }
 

}