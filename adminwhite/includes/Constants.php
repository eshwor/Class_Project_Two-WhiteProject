<?php
$application = "local";
if ($application == "local")
{
	define("HOST","localhost");
	define("USERNAME","root");
	define("PASSWORD","");
	define("DATABASENAME","db_whitehouse");
}


define("TABLE_ADMINUSER","tbl_adminuser");
define("TABLE_STATIC","tbl_static");
define("TABLE_NEWS","tbl_news");
define("TABLE_BANNER","tbl_banner");
?>