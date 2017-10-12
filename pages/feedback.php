<?php
include_once("../includes/application_top.php");

if(isset($_POST['sub']))
{
	
	$sql   =   "select * from tbl_config where config_name='primary_email'";
	$result  = $funObj->exec($sql);
	$row  =   $funObj->fetch_assoc($result);
	
	$receiverEmail  =  $row['config_value'];
	
	
	foreach($_POST as $key=>$val)
	{ $$key=$val; }
	
	
	/* To send HTML mail, you can set the Content-type header. */
$headers  = "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/html; charset=iso-8859-1\r\n";

/* additional headers */
$headers .= "From: $name <$email>\r\n";
/* and now mail it */
//mail($receiverEmail, $subject, $message, $headers);
$funObj->sendEmail($name, $email, $receiverEmail, $subject, $message, "", false);	
}

?>

<form action="" method="post"  id="loginform">
<table width="400" border="0" cellpadding="5" cellspacing="5">
  <tr>
    <td colspan="2"><div id="loginErr">FeedBack Form</div></td>
    </tr>
  <tr>
    <td>Name</td>
    <td><label>
      <input type="text" name="name" id="name" />
    </label></td>
  </tr>
  <tr>
    <td>Email</td>
    <td><input type="email" name="email" id="email"/></td>
  </tr>
  <tr>
    <td>Subject</td>
    <td><input type="text" name="subject" id="subject"/></td>
  </tr>
   <tr>
    <td>Message</td>
    <td><textarea name="message" id="message" rows="10" cols="40"></textarea>
    
    </td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><label>
      <input type="submit" name="sub" id="sub" value="Login" />
    </label></td>
  </tr>
</table>

</form>