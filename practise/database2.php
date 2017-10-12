<?php
//server connection
$con    =   mysql_connect("localhost","root","") or die("Failed connecting to server".mysql_error());
if($con)
{
	//echo "server connected succesfully<br>";
}

$seldb    =   mysql_select_db("db_whitehouse") or die("Failed connecting to database".mysql_error());
if($seldb)
{
	//echo "database connected succesfully<br>";
}


     if(isset($_POST['sub']))
	 {
		$username   =   $_POST['username'];
    	$password   =   $_POST['password'];
		$fullname   =   $_POST['fullname'];
		$phone      =   $_POST['phone'];
		$location   =   $_POST['location'];
		
		$sql   =   "insert into tbl_user set   username='$username',
                                        	   password='$password',
											   fullname='$fullname'
		                                       ";
       mysql_query($sql);
	   $InsertId     =    mysql_insert_id();
	   
	   $sql_desc   =   "insert into tbl_user_desc set   user_id='$InsertId',
                                        	        phone='$phone',
											        location='$location'
		                                            ";
      $result = mysql_query($sql_desc);
	  if($result)
	  {
		header("Location:viewUserList.php");
	  }

		 
		 
		 
	 }


?>