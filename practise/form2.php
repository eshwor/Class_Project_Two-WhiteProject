<?php
if(isset($_POST['sub']))
{
     $name   = $_POST['uname'];
     $pass   = $_POST['pass'];
	 echo $name;
	 echo "<br>";
	 echo $pass;
	
}
else
{
header("location:form1.php");	
}


?>