<?php

require 'DMS_db.php';

function dynamic_application($user_id,$application_id)
{
	//$user_id=$_POST['user_id'];

	//$application_id=$_POST['application_id'];

	$sql="SELECT program_id FROM applications WHERE application_id=$application_id";
	$stmt=$dbc->prepare($sql);
	$stmt->execute();
	$application = $stmt->fetch();

	$sql="SELECT name_of_program FROM programs WHERE program_id=$application[program_id]";
	$stmt=$dbc->prepare($sql);
	$stmt->execute();

	$program = $stmt->fetch();
	//$name_of_program=$program['name_of_program'];



	$sql="SELECT number_unique_questions, list_unique_questions FROM applications WHERE application_id='".$application_id."'";
	$stmt=$dbc->prepare($sql);
	$stmt->execute();

	$x = $stmt->fetch();
	
	return $application,$program, $x
}




?>