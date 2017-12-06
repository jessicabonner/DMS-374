<?php	
	
	session_start();
    $_SESSION = array();
    session_destroy();
	
	header("Location: DMS_login.php");
	
?>