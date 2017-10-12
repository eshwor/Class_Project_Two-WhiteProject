<?php
include_once("Constants.php");
mysql_connect(HOST,USERNAME,PASSWORD);
mysql_select_db(DATABASENAME);
if($_GET['data']=="adminUser")
{     
adminUserList(TABLE_ADMINUSER);
}


function adminUserList($tableName=null)
{	
	$line1 = "Username".",";
	$line1 .= "Password".",";
	$line1 .= "Fullname".",";
	
		
	$line2 = trim($line1)."\n";
	
	  $select = "SELECT  * FROM ".$tableName."  order by id desc"; 
      $recordStart       =      mysql_query($select);
	 while($row = mysql_fetch_array($recordStart)) {
				
			$value = "\"".$row['username']."\",";
			$value .= "\"".base64_decode($row['password'])."\",";
			$value .= "\"".$row['fullname']."\",";
			if(strlen(trim($value))>0)		
			$data .= trim($value)."\n";
	}
	
    $finalData = trim($line2.$data);
	
	header("Content-type: application/x-msdownload");
	header("Content-Disposition: attachment; filename=whiteadminUser".date('Y-m-d').".csv");
	print $finalData; 
 } 
 


 ?>