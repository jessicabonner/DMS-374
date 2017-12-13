<?php

//link to file containing database connection string
require 'DMS_db.php';
	
	$password_hash=hash('sha512',$_GET['password']);
	$user_id=strtolower($_GET['username']);
	
	
	
	//prepare SQL statement to prevent SQL injection
	$stmt = $dbc-> prepare('SELECT * FROM user WHERE user_id= :user_id AND password= :password');
	//bind variables to prepared statement and execute
	$stmt->execute(array('user_id' => $user_id, 'password' => $password_hash));
	$user = $stmt->fetch();
	
	
	
	
	if (count($user['user_id'])==0)
	{	
		header("Location: DMS_login.php?error=1");
		die();
	}
	
	
	
	
	session_start();
	$_SESSION["user_id"] = $user_id;
	$_SESSION["password_hash"]=$password_hash; 
	$_SESSION["role"]=$user["role_id"];
	$_SESSION['timeout'] = time();

	
	if($_SESSION["role"]=="5")
	{
		header("Location: STUDENT_dashboard.php");
		die();
	}
	elseif($_SESSION["role"]=="4")
	{
		header("Location: DOCTOR_potential_student_table.php");
		die();
	}
	elseif($_SESSION["role"]=="3")
	{
		header("Location: HR_dashboard.php");
		die();
	}
	elseif($_SESSION["role"]=="2")
	{
		header("Location: DOCTOR_dashboard.php");
		die();
	}
	elseif($_SESSION["role"]=="1")
	{
		header("Location: ADMIN_dashboard.php");
		die();
	}

	else
	{
		echo "error";
		die();
	}
/*

require 'DMS_ldap_functionality.php';
session_start();

$user_id=$_GET['user_id'];
$password=$_GET['password'];

//$file=file_get_contents('DMS_ldap_config.php');

$ldap= new ldap(("DMS_ldap_config.php"));

$x= $ldap->login($user_id, $password);
echo $x;
*/


//$ldap->login($user_id,$password);
//echo $x;

//echo $_SESSION['user_id'];
//echo $_SESSION['firstName'];
//echo $_SESSION['lastName'];

//$_SESSION=array();
//session_destroy();

?>