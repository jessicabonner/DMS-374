<?php

session_start();
require("DMS_db.php");

/* function check_role($role)
{
	$user_id=$_SESSION['user_id'];
	require "DMS_db.php";
	
	
}
 */

	
	

	if (!isset($_SESSION)||!isset($_SESSION['user_id'])||!isset($_SESSION['password_hash']))
	{
		
		header("Location: DMS_login.php");
		
	}
	
	
	//prepare SQL statement to prevent SQL injection
	$stmt = $dbc-> prepare('SELECT * FROM user WHERE user_id= :user_id AND password= :password');
	//bind variables to prepared statement and execute
	$stmt->execute(array('user_id' => $_SESSION['user_id'], 'password' => $_SESSION['password_hash']));
	$user = $stmt->fetch();
	
	
	if (count($user['user_id'])==0)
	{	
		header("Location: DMS_login.php");
		die();
	}

	
	foreach($role_id_array as $role_id)
	{
		if ($role_id == $_SESSION['role'])
			{
				$access_granted="true";
			}
	}
	
	if (!isset($access_granted))
	{
		echo "You do not have access to view this page";
		echo "<br><a href='DMS_login.php'>Login</a>";
		die();
	}
	
	




?>