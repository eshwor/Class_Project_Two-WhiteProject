<?php
include_once("../includes/application_top.php");

if(isset($_POST['Save']))
{
	if($_SESSION['security_code']==$_POST['security_code'] and isset($_SESSION['security_code']))
	{
	  unset($_SESSION['security_code']);
	  echo "inset into database";
	  // here insert the data into database
	 /* $funObj->table  ="";
	  $funObj->data  = array(""=>$dfdsf,
							 ""=>$sdfdsf
							 );
      $funObj->insert();
	  $funObjj->redirect();*/
		
	}
	else
	{
		$_SESSION['securityCodeError']  = "Invalid Security code!!";
        $funObj->redirect( $_SERVER['HTTP_REFERER'] );		

		
	}
	
}

?>