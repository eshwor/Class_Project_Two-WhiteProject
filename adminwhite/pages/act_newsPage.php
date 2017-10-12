<?php
include_once("../includes/application_top.php");
$action   =  $_GET['action'];
$funObj->table  = TABLE_NEWS;
$aid   =  $_GET['aid']; 

if(isset($_POST['save']))
{
	$news_title    =   $funObj->check($_POST['news_title']);
	$news_description    =   $funObj->check($_POST['news_description']);
    $news_date    =   $funObj->check($_POST['news_date']);
     $news_author    =   $funObj->check($_POST['news_author']);
     $status    =   $funObj->check($_POST['status']);

	 	 	 	 	 
	$funObj->data  =  array("news_title"=>$news_title,
						    "news_description"=>$news_description,
							"news_date"=>$news_date,
						    "news_author"=>$news_author,
							"status"=>$status
							);
	
	
	if($action=='add')
	{
		$funObj->insert();
		$_SESSION['successMessage']  =  "Data Added Successfully!!";
		$url  =  "../index.php?_page=newsPageList";
		$funObj->redirect($url);
		
	}
	
		if($action=='edit')
	{
		$funObj->cond=array("id"=>$aid);
			$funObj->update();
		$_SESSION['successMessage']  =  "Data Edited Successfully!!";
		$url  =  "../index.php?_page=newsPageList";
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
		$url  =  "../index.php?_page=newsPageList";
		$funObj->redirect($url);   
   }
}



?>