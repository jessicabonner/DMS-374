<?php

function get_applications_student_applied_to($user_id)
{
	require 'DMS_db.php';
	//select all the applications that are active
	$sql="SELECT application_id FROM review WHERE user_id= $user_id";
	$stmt=$dbc->prepare($sql);
	$stmt->execute();
	$reviews= $stmt->fetchAll();
	
	$application_array=array();
	
	foreach ($reviews as $review)
	{
		$sql="SELECT * FROM applications WHERE application_id= ".$review['application_id'];
		$stmt=$dbc->prepare($sql);
		$stmt->execute();
		$application= $stmt->fetch();
		
		$application_array[]=$application;
	}
	
	return $application_array;
}


function get_application_submit_time($user_id, $application_id)
{
	require 'DMS_db.php';
	//select all the applications that are active
	$sql="SELECT application_submit_time FROM review WHERE user_id= $user_id AND application_id=$application_id";
	$stmt=$dbc->prepare($sql);
	$stmt->execute();
	$review= $stmt->fetch();
	
	$date= $review['application_submit_time'];
	
	
	return date('m-d-Y',strtotime($date));
}


function get_accepted($user_id, $application_id)
{
	require 'DMS_db.php';
	//select all the applications that are active
	$sql="SELECT accepted_by_dms FROM review WHERE user_id= $user_id AND application_id=$application_id";
	$stmt=$dbc->prepare($sql);
	$stmt->execute();
	$review= $stmt->fetch();
	
	if ($review['accepted_by_dms'] == '1')
	{
		return "Accepted";
	}
	else
	{
		return "";
	}
}






















?>
