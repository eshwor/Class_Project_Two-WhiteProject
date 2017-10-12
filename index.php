<?php include_once("includes/application_top.php");
$contentPage  =  isset($_GET['_page'])?$_GET['_page']:"home"; 

if(isset($_GET['sid']) and $_GET['_page']=="staticPage" )
{
$staticpageId  =  $_GET['sid'];
$row   =  $funObj->staticPageSel($staticpageId);
$pagename   =  $row['pagename'];
$pagetitle   =  $row['pagetitle'];
$pagedesc   =  $row['pagedesc'];
$metadesc   =  $row['metadesc'];
$metakeyword   =  $row['metakeyword'];

$row_ban  = $funObj->getBanner($staticpageId);
$banner_name  =  $row_ban['banner_name'];
$banner_image  =  $row_ban['banner_image'];
}

if(!isset($_GET['_page']) || $_GET['_page']!="staticPage" )
{
	
$staticpageId  =  1;
$row   =  $funObj->staticPageSel($staticpageId);
$pagename   =  $row['pagename'];
$pagetitle   =  $row['pagetitle'];
$pagedesc   =  $row['pagedesc'];
$metadesc   =  $row['metadesc'];
$metakeyword   =  $row['metakeyword'];	
$row_ban  = $funObj->getBanner($staticpageId);
$banner_name  =  $row_ban['banner_name'];
$banner_image  =  $row_ban['banner_image'];
}



?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title><?php echo $pagetitle; ?>-White House Student Project</title>
<meta name="keywords" content="<?php echo $metakeyword; ?>" />
<meta name="description" content="<?php echo $metadesc; ?>" />
<link href="control/styles.css" rel="stylesheet" type="text/css" media="screen" />
<link rel="shortcut icon" href="favicon.ico" />

<script type="text/javascript" src="thickbox/jquery-latest.js"></script>
<script type="text/javascript" src="thickbox/thickbox.js"></script>
<link href="thickbox/thickbox.css" rel="stylesheet" type="text/css" />


<link rel="stylesheet" href="scroll/scroll.css" />
<script language="javascript" src="scroll/scroll.js"></script>
<script language="javascript" src="js/valid.js"></script>
</head>
<body>
<div id="content">
<!-- header begins -->
<div id="header">
<div id="menu1">
<div id="menu">
        <?php include_once("includes/menu.php"); ?>
			</div>
</div>	
	<div id=
"logo">
		<?php include_once("includes/banner.php"); ?>
	</div>
	 	
</div>	
<!-- header ends -->
<!-- content begins -->
 <div id="main">
	<div id="right">
		    <div class="box">
			<?php if(!empty($contentPage))
			{
			include_once("pages/".$contentPage.".php");				
			}
			?>
            
           
			    
			     
				
				</div>
			
	        
	</div>
  	<div id="left">
        <div id="top"></div>
		<!---->
        <?php include_once("includes/column_left.php"); ?>

        <!---->
		<div id="bottom"></div>
		</div>
<!--content ends -->
<!--footer begins -->
<div style="clear: both"></div>
	</div>
</div>
<div id="footer">
 <?php include_once("includes/footer.php"); ?>
	</div>

<!-- footer ends-->
</body>
</html>