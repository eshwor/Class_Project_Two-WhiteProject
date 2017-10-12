<?php
include_once("../includes/application_top.php");
$action   =  $_GET['action'];
$funObj->table  = TABLE_STATIC;
$aid   =  $_GET['aid']; 

if(isset($_POST['save']))
{
	$pagename    =   $funObj->check($_POST['pagename']);
	$pagetitle    =   $funObj->check($_POST['pagetitle']);
    $metaname    =   $funObj->check($_POST['metaname']);
     $metadesc    =   $funObj->check($_POST['metadesc']);
     $metakeyword    =   $funObj->check($_POST['metakeyword']);
	$pagedesc    =   $_POST['pagedesc'];
	
	$funObj->data  =  array("pagename"=>$pagename,
						    "pagetitle"=>$pagetitle,
							"pagedesc"=>htmlentities( $pagedesc ),
						    "metaname"=>$metaname,
							"metadesc"=>$metadesc,
						    "metakeyword"=>$metakeyword
							);
	
	
	if($action=='add')
	{
		$funObj->insert();
		$_SESSION['successMessage']  =  "Data Added Successfully!!";
		$url  =  "../index.php?_page=staticPageList";
		$funObj->redirect($url);
		
	}
	
		if($action=='edit')
	{
		$funObj->cond=array("id"=>$aid);
			$funObj->update();
		$_SESSION['successMessage']  =  "Data Edited Successfully!!";
		$url  =  "../index.php?_page=staticPageList";
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
		$url  =  "../index.php?_page=staticPageList";
		$funObj->redirect($url);   
   }
}



?>