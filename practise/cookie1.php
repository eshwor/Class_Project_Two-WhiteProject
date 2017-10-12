<form action="cookie2.php" method="post">
username <input type="text" name="uname" id="uname" value="<?php
if(isset($_COOKIE['remu']))
{
echo $_COOKIE['remu'];	
}


?>"  /><br>
Password <input type="password" name="pass" id="pass" value="<?php
if(isset($_COOKIE['remp']))
{
echo $_COOKIE['remp'];	
}


?>" /><br>
<input type="checkbox" name="remember"  <?php
if(isset($_COOKIE['remp']))
{
echo "checked";	
}


?>  />Remember<br>
<input type="submit" name="sub" value="login">
</form>