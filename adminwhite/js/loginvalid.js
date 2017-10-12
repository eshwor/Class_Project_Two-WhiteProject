// JavaScript Document
function focusMe()
{
	document.getElementById('username').focus();
	
}

function checkLogin()
{
    if(document.getElementById('username').value=="")
	{
		//alert('Please enter the Username!!');
		document.getElementById('loginErr').innerHTML='Please enter the Username!!';
		document.getElementById('username').focus();
	return false;	
	}
	else  if(document.getElementById('password').value=="")
	{
		//alert('Please enter the password!!');
		document.getElementById('loginErr').innerHTML='Please enter the password!!';
		document.getElementById('password').focus();
	return false;	
	}
	else
	return true;
	
	
}

function remove()
{
	document.getElementById('loginErr').innerHTML='';
}

