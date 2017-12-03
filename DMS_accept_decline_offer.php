<?php
	require "DMS_db.php";
	
	$user_id=$_POST['user_id'];
	$application_id=$_POST['application_id'];

	if (isset($_POST['accept']))
	{
		$sql = "UPDATE review SET student_accept_offer = '1' WHERE user_id ='".$user_id."' AND application_id='".$application_id."'";
		$stmt=$dbc->prepare($sql);
		$stmt->execute();
		
		header("Location: DMS_student_home.php?user_id=$user_id&message=2");
		die();
	}
	elseif (isset($_POST['decline']))
	{
		$sql = "UPDATE review SET student_accept_offer = '0' WHERE user_id ='".$user_id."' AND application_id='".$application_id."'";
		$stmt=$dbc->prepare($sql);
		$stmt->execute();
		
		header("Location: DMS_student_home.php?user_id=$user_id&message=3");
		die();
	}




?>