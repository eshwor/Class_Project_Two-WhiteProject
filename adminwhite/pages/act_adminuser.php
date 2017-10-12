<?php
include_once("../includes/application_top.php");
$action   =  $_GET['action'];
$funObj->table  = TABLE_ADMINUSER;
$aid   =  $_GET['aid']; 

if(isset($_POST['save']))
{
	$username    =   $_POST['username'];
	$password    =   $_POST['password'];
	$fullname    =   $_POST['fullname'];
	
	$funObj->data  =  array("username"=>$username,
							"password"=>base64_encode($password),
							"fullname"=>$fullname
							
							);
	
	
	if($action=='add')
	{
		$funObj->insert();
		$_SESSION['successMessage']  =  "Data Added Successfully!!";
		$url  =  "../index.php?_page=adminUserList";
		$funObj->redirect($url);
		
	}
	
		if($action=='edit')
	{
		$funObj->cond=array("id"=>$aid);
			$funObj->update();
		$_SESSION['successMessage']  =  "Data Edited Successfully!!";
		$url  =  "../index.php?_page=adminUserList";
		$funObj->redirect($url);
	}
}
else
{
   if($action=='delete')
   {
	    $funObj->cond=array("id"=>$aid);
		$funObj->delete();
		$_SESSION['successMessage']  =  "Data Deleted Successfully!!";
		$url  =  "../index.php?_page=adminUserList";
		$funObj->redirect($url);   
   }
}



?>