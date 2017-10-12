<?php
include_once("includes/application_top.php");
$contentpage    =   isset($_GET['_page'])?$_GET['_page']:"home";

if(!isset($_SESSION['adminUserId']))
{
	    $url   =  "login.php";
		$funObj->redirect($url); 
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>White Housee Administrator section</title>
<link rel="stylesheet" href="control/main.css" />
<script language="javascript" src="js/validation.js"></script>


<!--changed for calender -->
    <link rel="stylesheet" type="text/css" href="../calender/JSCal2/css/jscal2.css" />
    <link rel="stylesheet" type="text/css" href="../calender/JSCal2/css/border-radius.css" />
    <link rel="stylesheet" type="text/css" href="../calender/JSCal2/css/gold/gold.css" />
    <script type="text/javascript" src="../calender/JSCal2/js/jscal2.js"></script>
    <script type="text/javascript" src="../calender/JSCal2/js/lang/en.js"></script>
     <!--changed for calender -->
     
       <!-- start script for the lytebox-->
 <script language="JavaScript" src="../lytebox/lytebox.js"></script>
 <link rel="stylesheet" href="../lytebox/lytebox.css" type="text/css" media="screen" />
  <!--  end script for the lytebox-->

</head>

<body>
<div id="wrapper">
<div id="header">
<?php include_once("includes/header.php"); ?>

</div>

<div id="menu">
<?php include_once("includes/menu.php"); ?>
</div>

<div id="content">
<br />
<?php
if(!empty($contentpage))
{
include_once("pages/".$contentpage.".php");	
}

?>
</div>



</div>


</body>
</html>