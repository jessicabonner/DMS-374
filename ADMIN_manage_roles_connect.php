<?php
	
	require "DMS_general_functions.php";
	require "DMS_db.php";

	$id=$_POST['id'];
	$role_id=$_POST['role_id'];
	
	$validate=check_user_exists($id);
	if ($validate=="NONEXISTENT")
	{
		header("Location: ADMIN_manage_roles.php?message=0");
		die();
	}
	
	
	
	
	
	$sql="UPDATE user SET role_id = $role_id WHERE user_id= '$id'";
	$stmt=$dbc->prepare($sql);
	$stmt->execute();
	
	header("Location: ADMIN_manage_roles.php?message=1");



?>