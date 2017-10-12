<?php
include_once("includes/application_top.php");
session_destroy();
unset($_SESSION);
$funObj->redirect("index.php");


?>