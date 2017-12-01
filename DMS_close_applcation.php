<?php

//THIS FOR WILL BE LINKED TO DMS_view_application.php TO CHANGE THE STATUS OF AN APPLICATION TO CLOSED/OPEN

require 'DMS_db.php';

//if the user has indicated that they want to close or open an application
if( isset($_POST['new_close_application']))
{	
	//get whether to open or close and application as well as the value of the application to be closed
	$new_close_application = $_POST['new_close_application'];
	$application_id = $_POST['application_id'];
	
	
	//change the application's application_closed field to the opposite value (closed or open)
	$sql = "UPDATE applications SET application_closed = '".$new_close_application."' WHERE application_id ='".$application_id."'";
	$stmt=$dbc->prepare($sql);
	$stmt->execute();
		

	//if statement fails, display error
	if (!$stmt) {
		die ('SQL Error: ' . mysqli_error($dbc));
	}
	//if statement does not fail, redirect back to DMS_view_application and pass the application id through the url
	else{
		header('Location: DMS_view_application.php?id='.$application_id);
		die();
	}
	
}

//if the user has indicated that they want to unarchive an application
elseif(isset($_POST['unarchive_application']))
{
	$application_id = $_POST['application_id'];
	
	
	//update the application's "archived" field to false
	$sql = "UPDATE applications SET archived= 'FALSE' WHERE application_id ='".$application_id."'";	
	$stmt=$dbc->prepare($sql);
	$stmt->execute();

	
	//if statement fails, display error
	if (!$stmt) {
		die ('SQL Error: ' . mysqli_error($dbc));
	}
	//if statement does not fail, redirect back to DMS_view_application and pass the application id through the url
	else{
		header('Location: DMS_view_application.php?id='.$application_id);
		die();
	}
}



?>