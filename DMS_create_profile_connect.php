<?php

//link to file containing database connection string
require 'DMS_db.php';

try{
	
	$username=$_POST['username'];
	$password=$_POST['password'];
	
	//prepare SQL statement to prevent SQL injection
	$stmt = $dbc-> prepare('INSERT INTO user (username, password) VALUES (:username, :password)');


	//bind variables to prepared statement and execute
	$stmt->execute(array('username' => $username,'password' => $password));

	$user_id=$dbc->lastInsertId();

	header('Location: DMS_Student_Info.php?user_id='.$user_id);
	die();
}

catch(Exception $e)
{
	echo 'Caught exception: ',  $e->getMessage(), "\n";
}




?>