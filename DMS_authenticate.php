<?php

session_start();
require("DMS_db.php");

/* function check_role($role)
{
	$user_id=$_SESSION['user_id'];
	require "DMS_db.php";
	
	
}
 */

	
	

	if (!isset($_SESSION)||!isset($_SESSION['username'])||!isset($_SESSION['password_hash']))
	{
		
		header("Location: DMS_login.php");
		
	}
	
	
	//prepare SQL statement to prevent SQL injection
	$stmt = $dbc-> prepare('SELECT * FROM user WHERE username= :username AND password= :password');
	//bind variables to prepared statement and execute
	$stmt->execute(array('username' => $_SESSION['username'], 'password' => $_SESSION['password_hash']));
	$user = $stmt->fetch();
	
	
	if (count($user['user_id'])==0)
	{	
		header("Location: DMS_login.php");
		die();
	}

	
	if ($role_id != $_SESSION['role'])
	{
		echo "You do not have access to view this page";
		die();
	}
	
	




?>