<?php
session_start();

$_SESSION['name']   =  "test the system";
$_SESSION['roll']    =  25;

?>
<a href="session2.php">goto next page</a>