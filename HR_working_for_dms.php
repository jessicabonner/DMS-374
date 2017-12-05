<?php

//THIS FOR WILL BE LINKED TO DMS_ViewApp.php TO Change accepted_by_dms 

require 'DMS_db.php';

	$user_id=$_POST['user_id'];


	if( ($_POST['save']))
	{	
		$id=$_POST['user_id'];
		
		$new_working_for_dms = $_POST['new_working_for_dms'];
		
		
		//Set all checkboxes to 0 (unchecked)
		$sql = "UPDATE student_info SET working_for_dms = '0'";
		$stmt=$dbc->prepare($sql);
		$stmt->execute();
		
		/*
		//check if student is already accepted in the database
		$stmt = $dbc->query("SELECT * FROM student_info WHERE working_for_dms= '0'");
		$x = $stmt->fetch();
		
		
		//if the student is already accepted, redirect back to the DMS_doctor.php page along with an indication that there was an error
		if (count($x['user_id'])>0)
		{
			
			header('Location: HR_view_student.php?error="1" & id='.$user_id.'');
			die();
		}
		*/
		
		if(!empty($_POST['new_working_for_dms']))
		{
			require 'DMS_db.php';
			
			$id=$_POST['user_id'];

			$sql="UPDATE student_info SET working_for_dms = 1 WHERE user_id = '".$id."'";
			$stmt=$dbc->prepare($sql);
			$stmt->execute();
	
		}
		
		/*
		if ( ($_POST['new_working_for_dms'])!== null)
		{
			$id=$_POST['user_id'];
			
			$new_working_for_dms = $_POST['new_working_for_dms'];
			$sql = "UPDATE student_info SET working_for_dms = '".$new_working_for_dms."' WHERE user_id ='".$id."'";
			$stmt=$dbc->prepare($sql);
			$stmt->execute();

		}
		*/

	
	}
	/*
	elseif( ($_POST['save']))
	{
		$new_review = $_POST['new_review'];
		$user_id=$_POST['user_id'];
		
		if( ($_POST['new_review'])!== null)
		{
			$new_review = $_POST['new_review'];
			$sql = "UPDATE student_info SET $new_review";
			$stmt=$dbc->prepare($sql);
			$stmt->execute();

		}
	}
	*/

	if (!$stmt) 
	{
		die ('SQL Error: ' . mysqli_error($dbc));
	}
	else
	{
		header('Location: HR_view_student.php?id='.$id);
		die();
	}
	
?>