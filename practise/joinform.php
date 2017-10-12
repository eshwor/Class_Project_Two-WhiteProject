<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<style>
*
{
margin:0px auto;
padding:0px;
}

body
{
margin:0px auto;
padding:0px;
background:#CCC;
}

#registration
{
border:1px dotted #060;	
	width:500px;
	margin-top:100px;
}

</style>
<script language="javascript">
function registerCheck()
{
    if(document.getElementById('username').value=="")
	{
	alert('Please enter the Username!!');	
	document.getElementById('username').focus();	
	return false;	
	}
	else  if(document.getElementById('password').value=="")
	{
	alert('Please enter the password!!');	
	document.getElementById('password').focus();	
	return false;	
	}
	else  if(document.getElementById('fullname').value=="")
	{
	alert('Please enter the fullname!!');	
	document.getElementById('fullname').focus();	
	return false;	
	}
	else  if(document.getElementById('phone').value=="")
	{
	alert('Please enter the phone!!');	
	document.getElementById('phone').focus();	
	return false;	
	}
	
	else  if(isNaN(document.getElementById('phone').value))
	{
	alert('Please enter the Valid phone!!');	
	document.getElementById('phone').focus();	
	return false;	
	}
	
	
	
	else  if(document.getElementById('location').value=="")
	{
	alert('Please enter the location!!');	
	document.getElementById('location').focus();	
	return false;	
	}
	else
	return true;
	
	
}

function checkNumber()
{
 if(isNaN(document.getElementById('phone').value))
	{
	document.getElementById('phoneErr').innerHTML='Please enter the Valid phone!!';
    document.getElementById('phone').focus();	
	}
	
	 if(!isNaN(document.getElementById('phone').value))
	{
	document.getElementById('phoneErr').innerHTML='';
    document.getElementById('phone').focus();	
	}
}

</script>

<div id="registration">
<form action="database2.php" method="post" onsubmit="return registerCheck();">
<table width="500" border="0" cellpadding="5" cellspacing="5">
  <tr>
    <td><b>User Registration</b><hr /></td>
    </tr>

  <tr>
    <td>Username</td>
    <td><input type="text" name="username" id="username"  /></td>
  </tr>
  <tr>
    <td>Password</td>
    <td><input type="password" name="password" id="password"  /></td>
  </tr>
  <tr>
    <td>Fullname</td>
    <td><input type="text" name="fullname" id="fullname"  /></td>
  </tr>
  <tr>
    <td>Phone</td>
    <td><input type="text" name="phone" id="phone"  onkeyup="checkNumber();" />
    <div id="phoneErr"></div>
    </td>
  </tr>
  <tr>
    <td>Location</td>
    <td><input type="text" name="location" id="location"  /></td>
  </tr>
  
    <tr>
    <td>&nbsp;</td>
    <td><input type="submit" name="sub" id="sub" value="Save"  />
    <input type="reset" />
    </td>
  </tr>
</table>
</form>
</div>


</body>
</html>