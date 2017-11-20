<?php

//THIS FOR WILL BE LINKED TO DMS_view_application.php TO CHANGE THE STATUS OF AN APPLICATION TO CLOSED/OPEN

require 'DMS_db.php';

if( isset($_POST['new_close_application']))
{	//echo $_POST['new_close_application'];
	
	$applcation_id=$_POST['application_id'];
	//echo $application_id;
	
	$new_close_application = $_POST['new_close_application'];
	$application_id = $_POST['application_id'];
	
	
	$sql = "UPDATE applications SET application_closed = '".$new_close_application."' WHERE application_id ='".$application_id."'";

	//echo $sql;
	
	//$query= $dbc->query($sql);
	$stmt=$dbc->prepare($sql);
	$stmt->execute();

	
			
			
	if (!$stmt) {
		die ('SQL Error: ' . mysqli_error($dbc));
	}
	else{
		header('Location: DMS_view_application.php?id='.$applcation_id);
		die();
	}
	
}



?>