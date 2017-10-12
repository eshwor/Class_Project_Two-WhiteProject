// JavaScript Document
var emailExp = /^[\w\-\.\+]+\@[a-zA-Z0-9\.\-]+\.[a-zA-z0-9]{2,4}$/;
function checkRegistrationForm()
{
   if(document.getElementById('email').value=="")
   {
	alert('Please enter the email addres!!');   
	document.getElementById('email').focus();
	return false;
   }
   else if(document.getElementById('email').value!="" && !document.getElementById('email').value.match(emailExp))
   {
	alert('Please enter the valid email addres!!');   
	document.getElementById('email').focus();
	return false;
   }
    else if(document.getElementById('security_code').value=="")
   {
	alert('Please enter the Security code!!');
	document.getElementById('security_code').focus();
	return false;
   }
   else 
   return true;
	
}