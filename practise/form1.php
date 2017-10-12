<style>
*
{
margin:0 auto;
padding:0px;
}


#loginforms
{
background:#333;
color:#F00;
border:1ps solid #390;
	
}

.tablelogin
{
	background:#09C;
	
}


</style>

<div id="loginforms">
<form action="form2.php" method="post" name="loginform">
<table cellpadding="5" cellspacing="5" class="tablelogin">
<tr>
<td>username</td>
<td>  <input type="text" name="uname" id="uname"></td>
</tr>

<tr>
<td>Password</td>
<td>  <input type="password" name="pass" id="pass"></td>
</tr>

<tr>
<td></td>
<td><input type="submit" name="sub" id="sub" value="login">
</td>
</tr>

</form>
</div>