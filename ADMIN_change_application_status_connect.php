<?php
require 'DMS_general_functions.php';
if ($_GET['action'] == 'Close') {
    $applications= $_GET['application_list'];
	
	
	//loop through the list
	foreach($applications as $value)
	{
		echo $value;
		//require db connection string
		require 'DMS_db.php';
	
		//select the record (application) with the given id
		$sql= "SELECT * FROM applications WHERE application_id=$value";
		$stmt=$dbc->prepare($sql);
		$stmt->execute();
		$application = $stmt->fetch();
		
		$stmt = $dbc-> prepare('UPDATE applications SET application_closed="1" WHERE application_id=:application_id');
		$stmt->execute(array('application_id' => $value));
		
		header('Location: ADMIN_view_all_active_applications.php');
		die();
	}
		
		
		
} elseif ($_GET['action'] == 'Archive') {
    $applications= $_GET['application_list'];
	
	
	//loop through the list
	foreach($applications as $value)
	{
		//require db connection string
		require 'DMS_db.php';
	
		//select the record (application) with the given id
		$sql= "SELECT * FROM applications WHERE application_id=$value";
		$stmt=$dbc->prepare($sql);
		$stmt->execute();
		$application = $stmt->fetch();
		
		$stmt = $dbc-> prepare('UPDATE applications SET archived="TRUE", application_closed="1" WHERE application_id=:application_id');
		$stmt->execute(array('application_id' => $value));
		
		header('Location: ADMIN_view_all_active_applications.php');
		die();
} 
}