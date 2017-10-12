<?php
if(isset($_POST['sub']))
{
	if(isset($_POST['remember']))
	{
	setcookie("remu",$_POST['uname'],time()+60*60);
    setcookie("remp",$_POST['pass'],time()+60*60);
	}
	else
	{	setcookie("remu","",time()-60*60);
        setcookie("remp","",time()-60*60);
	}
    
	echo "<a href='cookie1.php'>Go to previous page</a>";
}
else
{
print "<script>window.location.href='cookie1.php'</script>";	
}
?>