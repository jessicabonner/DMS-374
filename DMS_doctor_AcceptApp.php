<?php

//THIS FOR WILL BE LINKED TO DMS_ViewApp.php TO Change accepted_by_dms 

require 'DMS_db.php';

if( isset($_POST['new_accepted_by_DMS']))
{	//echo $_POST['new_close_application'];
	
	$user_id=$_POST['user_id'];
	//echo $user_id;
	
	$new_accepted_by_DMS = $_POST['new_accepted_by_DMS'];
	//echo $new_accepted_by_DMS;
	
	
	$sql = "UPDATE student_info SET accepted_by_dms = '".$new_accepted_by_DMS."' WHERE user_id ='".$user_id."'";

	//echo $sql;
	
	//$query= $dbc->query($sql);
	$stmt=$dbc->prepare($sql);
	$stmt->execute();
		
			
	if (!$stmt) {
		die ('SQL Error: ' . mysqli_error($dbc));
	}
	else{
		header('Location: DMS_ViewApp.php?id='.$user_id);
		die();
	}
	
	
}

?>