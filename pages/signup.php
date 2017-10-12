<form action="pages/act_register.php" method="post" onSubmit="return checkRegistrationForm();">
<table width="300" border="0">
  <tr>
    <td colspan="2"><h2>Registration Form</h2></td>
    </tr>
  <tr>
    <td>Email</td>
    <td><label>
      <input type="text" name="email" id="email">
    </label></td>
  </tr>
  <tr>
    <td>Code</td>
    <td>	<img src="captcha/CaptchaSecurityImages.php?width=100&height=40&characters=5" /></td>
  </tr>
  <tr>
    <td>Security code</td>
    <td><input type="text" name="security_code" id="security_code">
    <div><?php 
	if(isset($_SESSION['securityCodeError']))
	{
	echo $_SESSION['securityCodeError'];
	unset($_SESSION['securityCodeError']);
	}
	?></div>
    </td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><label>
      <input type="submit" name="Save" id="Save" value="Submit">
    </label></td>
  </tr>
</table>


</form>