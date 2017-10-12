<?php
include_once("../includes/application_top.php");
$action   =  $_GET['action'];
$funObj->table  = TABLE_BANNER;
$aid   =  $_GET['aid']; 

if(isset($_POST['save']))
{
	$banner_name    =   $funObj->check($_POST['banner_name']);
	$static_id    =   $funObj->check($_POST['static_id']);
   $status    =   $funObj->check($_POST['status']);
   $banner_image   =  $_FILES['image']['name']; 
   
   if(!empty($banner_image))
   {
  $temp_path     = $_FILES['image']['tmp_name']; 
 
 $banner_image   =  "whiteImage_".rand(0,9999999)."_".$banner_image;
  move_uploaded_file($temp_path, "../images/banner/".$banner_image ); 
   }
   else
   {
	  $banner_image   = $_POST['old_image'];  
   }
 
	 	 	 	 	 
	$funObj->data  =  array("banner_name"=>$banner_name,
						    "banner_image"=>$banner_image,
							"static_id"=>$static_id,
						  	"status"=>$status
							);
	
	
	if($action=='add')
	{
		$funObj->insert();
		$_SESSION['successMessage']  =  "Data Added Successfully!!";
		$url  =  "../index.php?_page=bannerList";
		$funObj->redirect($url);
		
	}
	
		if($action=='edit')
	{
		$funObj->cond=array("id"=>$aid);
			$funObj->update();
		$_SESSION['successMessage']  =  "Data Edited Successfully!!";
		$url  =  "../index.php?_page=bannerList";
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
		$url  =  "../index.php?_page=bannerList";
		$funObj->redirect($url);   
   }
}



?>