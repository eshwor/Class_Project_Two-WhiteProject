<?php
include_once("includes/application_top.php");

if( isset( $_POST['loginbtn']))
{
	  $user =  $_POST['username'];
	  $pass =  $_POST['password'];
	 
	 $funObj->loginCheck( $user, $pass );
	
}


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>White Project Login</title>
<link rel="stylesheet" href="control/login.css" />
<script language="javascript" src="js/loginvalid.js"></script>
</head>

<body onload="focusMe();">
<div id="logindiv">
<form action="" method="post" name="loginform" onsubmit="return checkLogin();">
<table width="400" border="0" class="tablelogin" cellpadding="5" cellspacing="5">
  <tr>
    <td  class="table_td"><b class="login_text">Login</b></td>
    <td class="table_td"><div id="loginErr"><?php if(isset($_SESSION['loginFailurMesage']))
	{ echo $_SESSION['loginFailurMesage'];
	unset($_SESSION['loginFailurMesage']);
	}
	?></div>
   </td>
    
  </tr>
  <tr>
    <td width="120">Username</td>
    <td><input type="text" name="username" id="username" onkeyup="remove();" /></td>
  </tr>
  <tr>
    <td>Password</td>
    <td><input type="password" name="password" id="password" onkeyup="remove();" /></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><label>
      <input type="submit" name="loginbtn" id="loginbtn" value="Login" />
    </label></td>
  </tr>
</table>

</form>

</div>


</body>
</html>