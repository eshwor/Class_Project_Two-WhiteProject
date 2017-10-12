<?php
include_once("Database.php");
include_once("class.phpmailer.php");
@include_once("../fckeditor/fckeditor.php");
class Functions extends Database
{
	    function check($field)
	   {
	   $field   =  strip_tags($field);
  	   $field   =  trim($field);
   	   $field   =  stripslashes($field);
   	   $field   =  mysql_real_escape_string($field);
       return $field;	   
	   }
	   
	   
		function tep_session_register($sesion_name)
		{
		return session_register($sesion_name);
		}

		function redirect($url)
		{
				if(headers_sent()){
				echo "<script language=\"Javascript\">window.location.href='$url';</script>";
				exit;
				}
				else{
				session_write_close();
				header("Location:$url");
				exit;
	           }
		}
		
		function subString($str,$strlen,$strpos=0){
	
		if(strlen($str)>$strlen)
			return substr(strip_tags(html_entity_decode($str)),$strpos,$strlen)."...";
		else
			return strip_tags(html_entity_decode($str));
	}

/**
	* Get current date
	* @return current date
	*/
	function currentDate(){ 
	
		return date('Y-m-d');
	}
	
	/**
	* Get current time	
	* @return current time
	*/
	function currentTime(){
	
		return date("H:i:s");
	}
	
	/**
	* Add Days
	* @return added date
	*/
	function addDays ($days, $fmt="Y-m-d", $date=NULL) {
	// Adds days to date or from now // By JM, www.Timehole.com
		if ($date==NULL) { $t1 = time(); }
		else $t1 = strtotime($date);
		$t2 = $days * 86400; // make days to seconds
		return date($fmt,($t2+$t1));
	}

	/**
	* Get current time	
	* @return current time
	*/
	function currentTimestamp(){
	
		return $this->currentDate()." ".$this->currentTime();
	}
	
	/**
	* Format date
	* @param date $date	
	* @return formatted date
	*/
	function getDateFormatted($date){
	
		$date = date('d/m/Y H:i:s', strtotime($date));
		return $date;
	}
	
	/**
	* Email function
	* @param string $fromName	
	* @param string $fromEmail	
	* @param string $receiverEmail	
	* @param string $subject	
	* @param string $content	
	* @param string $replyName	
	* @param boolean $debug	
	* @return 1 or null
	*/
	function sendEmail($fromName, $fromEmail, $receiverEmail, $subject, $content, $replyTo="", $debug=false) {
	
		$sendMail = new PHPMailer();
		$sendMail->FromName = $fromName;
		$sendMail->From = $fromEmail;
		$sendMail->AddAddress($receiverEmail);	
		if(trim($replyTo)!="")
			$sendMail->AddReplyTo($replyTo);
		$sendMail->IsHtml(true);
		$sendMail->Subject = $subject;
		$sendMail->Body = html_entity_decode($content);
		if($debug)
			die(html_entity_decode($content));
		else
			return $sendMail->Send();
	}
	
	/**
	* Generate random keys	
	* @param integer $length	
	* @return string $key
	*/
	function randomkeys($length){
	
	   $pattern = "1234567890abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
	   for($i=0;$i<$length;$i++){
	   
		 $key .= $pattern{rand(0,62)};
	   }
	   return $key;
	}
	
	/**
	* Display FCKEditor	
	* @param string $elementName	
	* @param string $elementValue	
	* @param string $fckPath	
	* @param string $toolbarSet	
	* @param string $fckHeight	
	* @param string $fckWidth		
	* @return fckeditor
	*/
	function fckEditor($elementName, $elementValue, $fckPath="", $toolbarSet="Default", $fckHeight="200", $fckWidth="100%"){
		
		$oFCKeditor = new FCKeditor($elementName) ;
		$oFCKeditor->BasePath = $fckPath."fckeditor/" ;
		$oFCKeditor->ToolbarSet = $toolbarSet; 
		$oFCKeditor->Value = html_entity_decode($elementValue); 
		$oFCKedtior->Height = $fckHeight;
		$oFCKedtior->Width = $fckWidth;
		return $oFCKeditor->Create() ;
	}


/**
	* Rename the uploaded image	
	* @param string $imageName	
	* @param string $imageId	
	* @param string $extra		
	* @return new image name
	*/
	function renameImage($imageName, $imageId, $extra=""){
		$imgExt = substr($imageName, strrpos($imageName,"."));	
		return $imageId.$extra.$imgExt;
	}
	
	/**
	* Set Message
	* @param string $sessionName
	* @return string
	*/
	function setMessage($msg, $sessionName){
		$_SESSION[$sessionName] = $msg;		
	}
	
	
	// To find the extension of the given $filename
	function getExtension($fileName){
		
		$ext =explode(".",$fileName);
		$fileExt=$ext[sizeof($ext)-1];
		
		return $fileExt;
	}

		
	public function cmsList3()
	{
		$sql = "SELECT * FROM `tblcmscontent` where 1=1 ".$add_query." order by id desc";
		$vals = $this->listings($sql, "home.php?_page=content", 5, 0,false); 
		return $vals;
	}
	
	function loginCheck( $u, $p )
	{
		
	  $sql  =  "select * from ".TABLE_ADMINUSER." where username='$u' and password='".base64_encode($p)."'";	
	 $result  =  $this->exec($sql);
	 $num   =  $this->total_rows($result);
	 
	 if($num==1)
	 {
		$row   =  $this->fetch_assoc($result);
		$_SESSION['adminUserId'] = $row['id'];
		$_SESSION['fullname'] = $row['fullname'];
		$url   =  "index.php";
		$this->redirect($url);
 		 
	 }
	 else
	 {
		$_SESSION['loginFailurMesage'] ="Username or Password doesnot match!!";
		$url   =  "login.php";
		$this->redirect($url); 
	 }
		
	}
	function adminUserListpage( $searchText="" )
	{   
	 $addQuery ="";
		if(!empty($searchText))
		{
		 $addQuery = " where 1=1 and ( username like '%$searchText%' 
									|| fullname like '%$searchText%'
									  )";	
		}
	 $sql  =  "select * from `".TABLE_ADMINUSER."`  ".$addQuery."  order by id desc";	
		$vals = $this->listings($sql, "index.php?_page=adminUserList", 5, 0,false); 
		return $vals;
	}
	
	function adminUserList()
	{
	$sql  =  "select * from ".TABLE_ADMINUSER." order by id desc";	
     return 	 $this->exec($sql);
	}
	
	function adminUserSel($id)
	{
	$sql  =  "select * from ".TABLE_ADMINUSER." where id='$id'";	
     $result =  $this->exec($sql);
	 return $this->fetch_array($result);
		
	}
	
	function staticPageListpage( )
	{   
	 
	 $sql  =  "select * from `".TABLE_STATIC."`  order by id desc";	
		$vals = $this->listings($sql, "index.php?_page=staticPageList", 5, 0,false); 
		return $vals;
	}
	
	
	function staticPageSel($id)
	{
	$sql  =  "select * from ".TABLE_STATIC." where id='$id'";	
     $result =  $this->exec($sql);
	 return $this->fetch_array($result);
		
	}
		function newsPageListpage()
	{
		$sql  =  "select * from ".TABLE_NEWS." order by id desc";	
		$vals = $this->listings($sql, "index.php?_page=newsPageList", 3, 0,false); 
		return $vals;
	}
	
	
	function newsPageSel($id)
	{
	$sql  =  "select * from ".TABLE_NEWS." where id='$id'";	
     $result =  $this->exec($sql);
	 return $this->fetch_array($result);
		
	}
	
	function bannerListpage()
	{
		$sql  =  "select * from ".TABLE_BANNER." order by id desc";	
		$vals = $this->listings($sql, "index.php?_page=bannerList", 3, 0,false); 
		return $vals;
	}
	
	
	function bannerSel($id)
	{
	$sql  =  "select * from ".TABLE_BANNER." where id='$id'";	
     $result =  $this->exec($sql);
	 return $this->fetch_array($result);
		
	}
    
	function staticPagename($id)
	{
	$sql  =  "select * from ".TABLE_STATIC." where id='$id'";	
     $result =  $this->exec($sql);
	 $row  =  $this->fetch_array($result);
	 
	 return $row['pagename'];
		
	}
	
	
	function staticpages()
	{
		$sql  =  "select * from ".TABLE_STATIC." order by id desc";	
		 return  $result =  $this->exec($sql);
	}
	
		
} // end class
?>