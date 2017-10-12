<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<script language="javascript" src="jquery-latest.js"></script>
<script language="javascript">
 $(document).ready(function(){
  $("#username").focus();
  
  $("#logindiv").hide();
  
  $("#test1").click( function(){
							 
				 $("#logindiv").slideToggle("slow");			 
							 });
  
  $("#loginform").submit( function(){
	
    return checkLogin();
	
	
								   });
  
 });
 
 
 function checkLogin()
 {
    if($("#username").val()=="")
	{
		//alert('Please enter the username!!');
		$("#loginErr").text('Please enter the username!!');
		$("#loginErr").fadeOut(500).fadeIn(500).fadeOut(400).fadeIn(400).fadeOut(300).fadeIn(300);
		$("#loginErr").addClass('LoginErrorCss');
		//$("#loginErr").css('color','red');
		$("#username").focus();
		return false;
		
	}
	
	else if($("#password").val()=="")
	{
		//alert('Please enter the username!!');
		$("#loginErr").text('Please enter the password!!');
		$("#loginErr").fadeOut(500).fadeIn(500).fadeOut(400).fadeIn(400).fadeOut(300).fadeIn(300);
		$("#loginErr").addClass('LoginErrorCss');
		//$("#loginErr").css('color','red');
		$("#password").focus();
		return false;
		
	}
	else
	return true;
	
	
 }
 
 
 function remove()
 {
	 $("#loginErr").slideUp('slow');
	 $("#loginErr").removeClass('LoginErrorCss');
	 $("#loginErr").text('');
 }
 


</script>


<style>
*
{
margin:0 auto;
padding:0px;
}
#test1
{
	text-align:center;
	cursor:pointer;
	background:#666;
	color:#000;
	font-weight:bold;
}

#logindiv
{
margin-top:200px;
border:1px solid #000;
width:400px;
}

.LoginErrorCss
{
color:#F00;	
}

</style>
</head>

<body >
<fieldset id="test1">Login</fieldset>
<div id="logindiv">
<form action="" method="post"  id="loginform">
<table width="400" border="0" cellpadding="5" cellspacing="5">
  <tr>
    <td colspan="2"><div id="loginErr">Login Section</div></td>
    </tr>
  <tr>
    <td>Username</td>
    <td><label>
      <input type="text" name="username" id="username" onkeyup="remove();" />
    </label></td>
  </tr>
  <tr>
    <td>Password</td>
    <td><input type="password" name="password" id="password" onkeyup="remove();" /></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><label>
      <input type="submit" name="loginBtn" id="loginBtn" value="Login" />
    </label></td>
  </tr>
</table>

</form>

</div>


</body>
</html>