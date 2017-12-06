<?php

	$role_id="5";
	require "DMS_authenticate.php";

	require "DMS_db.php";
	
	
	$user_id=$_SESSION['user_id'];
	
	$application_id=$_POST['application_id'];

	if (isset($_POST['accept']))
	{
		$sql = "UPDATE review SET student_accept_offer = '1' WHERE user_id ='".$user_id."' AND application_id='".$application_id."'";
		$stmt=$dbc->prepare($sql);
		$stmt->execute();
		
		header("Location: STUDENT_dashboard.php?message=2");
		die();
	}
	elseif (isset($_POST['decline']))
	{
		$sql = "UPDATE review SET student_accept_offer = '0' WHERE user_id ='".$user_id."' AND application_id='".$application_id."'";
		$stmt=$dbc->prepare($sql);
		$stmt->execute();
		
		header("Location: STUDENT_dashboard.php?message=3");
		die();
	}




?>