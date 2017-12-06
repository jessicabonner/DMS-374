<?php

//link to file containing database connection string
require 'DMS_db.php';

try{
	
	$username=$_POST['username'];
	$password=$_POST['password'];
	$password_2=$_POST['password_2'];
	
	//prepare SQL statement to prevent SQL injection
	$stmt = $dbc-> prepare('SELECT * FROM user WHERE username= :username');
	//bind variables to prepared statement and execute
	$stmt->execute(array('username' => $username));
	
	
	$x = $stmt->fetch();
	
	

	
	//if the user already exists, redirect back to the STUDENT_create_profile.php page along with an indication that there was an error
	if (count($x['user_id'])>0)
	{
			
		header("Location: STUDENT_create_profile.php?error=2");
		die();
	}
	
	if ($password!=$password_2)
	{
		
		header("Location: STUDENT_create_profile.php?error=1");
		die();
	}
	
	
	
	$password_hash=hash('sha512',$password);

	
	//prepare SQL statement to prevent SQL injection
	$stmt = $dbc-> prepare('INSERT INTO user (username, password) VALUES (:username, :password)');


	//bind variables to prepared statement and execute
	$stmt->execute(array('username' => $username,'password' => $password_hash));

	$user_id=$dbc->lastInsertId();
	
	session_start();
	$_SESSION["user_id"] = $user_id;
	$_SESSION["username"] = $username;
	$_SESSION["password_hash"]=$password_hash;

	header('Location: STUDENT_create_student_information.php?user_id='.$user_id);
	die();
}

catch(Exception $e)
{
	echo 'Caught exception: ',  $e->getMessage(), "\n";
}




?>