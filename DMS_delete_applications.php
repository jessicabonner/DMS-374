<?php



$availability= $_POST['application_delete_list'];
foreach($availability as $value)
{
	require 'DMS_db.php';
	
	$sql= "SELECT * FROM applications WHERE application_id=$value";
	$stmt=$dbc->prepare($sql);
	$stmt->execute();
	$application = $stmt->fetch();
	
	$program_id=$application['program_id'];
	$sql= "SELECT name_of_program FROM programs WHERE program_id=$program_id";
	$stmt=$dbc->prepare($sql);
	$stmt->execute();
	$program = $stmt->fetch();
	$name_of_program=$program['name_of_program'];
	
	
	$term=$application['term'];
	$year=$application['year'];
	
	
	$name_of_table= $value."_".str_replace(' ', '_', $name_of_program)."_".$term."_".$year;
	
	
	$sql="DROP TABLE $name_of_table";
	$stmt=$dbc->prepare($sql);
	$stmt->execute();
	
	$sql="DELETE FROM applications WHERE application_id=$value";
	$stmt=$dbc->prepare($sql);
	$stmt->execute();

}



















?>