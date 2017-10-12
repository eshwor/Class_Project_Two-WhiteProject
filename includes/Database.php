<?php
include_once("Constants.php");
include_once("class.paging.php");
class Database 
{
var $con;
public $rs;
public $rsa;


	function connect_db() 
	{
		$this->con = mysqli_connect('localhost',constant("USERNAME"),constant("PASSWORD")) or  die("Failed Connecting To Mysql");
		mysqli_select_db(constant("$this->con","DATABASENAME")) or Die("Failed Connecting To Database");	
		return $this->con;
	}
	
	
	function disconnect_db()
	{
		mysqli_close($this->con);
	}
	
	
	function insert()
	    {
		$query="INSERT INTO $this->table SET ";
		foreach($this->data as $k=>$v)
		{
			$arr[$k]="$k='$v'";
		}
		if(count($arr)>0)
		{
			$query.=implode(",",$arr);
		}
		else
		{
			echo "Wrong Query";
			exit;
		}
		$this->exec($query);
	
	}
	
	function update()
	{
	$query="UPDATE $this->table SET ";
	foreach($this->data as $key=>$value)
	    {
		$arr[$key]="$key='$value'";
		}
		if(count($arr)>0)
		{
		$query.=implode(",",$arr);
		}
		
		foreach($this->cond as $key=>$value)
	    {
		$val[$key]="$key='$value'";
		}
		if(count($val)>0)
		{
		$query.=" WHERE ".implode(" and ",$val);
		
		}
		$this->exec($query);
	}
	
	function delete()
	{
		$query="DELETE FROM $this->table ";
		foreach($this->cond as $key=>$val)
		{
			$value[$key]="$key='$val'";
		}
		
		if(count($value)>0)
		{
			$query.=" WHERE ".implode(" and " , $value);
		}
		
				$this->exec($query);
		
	}
	
	
	
	function exec($sql)
	{
		$result=mysql_query($sql) or die(mysql_error("error_occur here at exec"));
		if($result)
		{
			return $result;
		}
		
		
	}
	
	public function fetch_array($rs)
	{   
	return mysql_fetch_array($rs);
	}
	
	public function fetch_object($rs)
	{
		return mysql_fetch_object($rs);
	}


    public function fetch_assoc($rs)
	{
		return mysql_fetch_assoc($rs);
	}

	
	public function total_rows($rs)
	{
		return mysql_num_rows($rs);
	}
	
	
     public function fetch_row($rs)
	{
		return mysql_fetch_row($rs);
	}
	
	public function rows_id()
	{
		return mysql_insert_id();
	}
	
	public function error($rs)
	{
		return mysql_error($rs);
	}
	
	public function select($sql, $debug=false){
	
		if($debug){
			die($sql);
		}
		else{
			$myresult=$this->exec($sql);
			if($this->total_rows($myresult)>0){
				$this->rs = $this->fetch_object($myresult);
				return $this->rs;
			}
			else{
				return false;
			}
		}
	}
	
	public function selectArray($sql, $debug=false){
	
		if($debug){
			die($sql);
		}
		else{
			$myresult=$this->exec($sql);
			if($this->total_rows($myresult)>0){
				$this->rs = $this->fetch_assoc($myresult);
				return $this->rs;
			}
			else{
				return false;
			}
		}
	}
	
	public function selectAll($sql, $debug=false){
	
		if($debug){
			die($sql);
		}
		else{
			$myresult=$this->exec($sql);
			if($this->total_rows($myresult)>0){
				$count = 0;
				while($ars = $this->fetch_assoc($myresult)) {
					foreach($ars as $key => $val) {
							$this->rsa[$count][$key] = $val; 
					}				
					$count++;									
				}
				return $this->rsa;				
			}
			else{
				return false;
			}
		}
	}
	
	public function listings($sql, $path, $plimit=10000, $seo=0, $debug=false) { 
	
		if($debug){
			die($sql);
		}
		else{
			$pagelist=$sql;
			$pageid =1;	// Get the pid value 	
			if(isset($_REQUEST['np'])) $pageid = $_REQUEST['np'];
			$Paging = new paging($seo);
			$Paging->conObj = $this->obj=new Database;
			$records = $Paging->myRecordCount($pagelist); // count records
			$totalpage = $Paging->processPaging($plimit,$pageid);
			$resultlist = $Paging->startPaging($pagelist); // get records in the databse
			$links = $Paging->pageLinks($path.(isset($queryString)?"?".$queryString:"")); // 1234 links
			unset($Paging);
			
			$pagingValue = array($records,$resultlist,$links);
			return $pagingValue; 
		}
	}
	
	
}

?>