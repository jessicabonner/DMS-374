<?php

	$role_id="2";
	require "DMS_authenticate.php";
	$user_id = $_SESSION['user_id'];
	
	date_default_timezone_set('America/Chicago');
	
	//THIS FOR WILL BE LINKED TO DOCTOR_view_detailed_student_info.php TO Change accepted_by_dms

	require 'DMS_db.php';

	$student_id=$_POST['user_id'];
	$current_date=date('Y-m-d');
	

	//if user clicked submit button named accept to accept a student
	if(isset($_POST['accept']))
	{

		$student_id=$_POST['user_id'];
	
		$new_accepted_by_DMS = $_POST['new_accepted_by_DMS'];

		//check if student is already accepted in the database
		$stmt = $dbc->query("SELECT * FROM review WHERE accepted_by_dms=$new_accepted_by_DMS AND application_id=". $_POST['application_id']." AND user_id='".$student_id."'");
		$x = $stmt->fetch();
		
		//if the student is already accepted, redirect back to the DOCTOR_dashboard.php page along with an indication that there was an error
		if (count($x['user_id'])>0)
		{
			header('Location: DOCTOR_view_detailed_student_info.php?error="1" & id='.$student_id.' &selected_application='.$_POST['application_id'].'');
			die();
		}

		//if student is not already accepted, update "accepted" field to true
		if ( ($_POST['new_accepted_by_DMS'])!== null)
		{
			$new_accepted_by_DMS = $_POST['new_accepted_by_DMS'];
			$sql = "UPDATE review SET accepted_by_dms = '".$new_accepted_by_DMS."', application_accept_date='".$current_date."'  WHERE user_id ='".$student_id."' AND application_id='".$_POST['application_id']."'";
			$stmt=$dbc->prepare($sql);
			$stmt->execute();
			
			
		}
		}
	
	
	//if user clicked submit button named update to save the review field
	elseif(isset($_POST['update']))
		{
			
			$new_review = $_POST['new_review'];
			$student_id=$_POST['user_id'];
			
			$hours_working_week=$_POST['hours_working_week'];
			$hourly_rate =$_POST['hourly_rate'];

			// if $new_review exists, update database to set student's review to the new value
			if( ($_POST['new_review'])!== null)
				{
					$new_review = $_POST['new_review'];
					$sql = "UPDATE review SET $new_review AND application_id='".$_POST['application_id']."'";
					$stmt=$dbc->prepare($sql);
					$stmt->execute();
				}
			if( ($_POST['potential'])!== null)
			{
					$new_potential = $_POST['potential'];
					$sql = "UPDATE review SET potential=$new_potential WHERE user_id= '".$user_id."' AND application_id='".$_POST['application_id']."'";
					$stmt=$dbc->prepare($sql);
					$stmt->execute();
			}
			elseif( ($_POST['potential'])== null)
			{
					
					$sql = "UPDATE review SET potential=0 WHERE user_id= '".$student_id."' AND application_id='".$_POST['application_id']."'";
					$stmt=$dbc->prepare($sql);
					$stmt->execute();
			}
			if( ($_POST['interview'])!== null)
			{
					$new_interview = $_POST['interview'];
					$sql = "UPDATE review SET interview=$new_interview WHERE user_id= '".$student_id."' AND application_id='".$_POST['application_id']."'";
					$stmt=$dbc->prepare($sql);
					$stmt->execute();
			}
			elseif( ($_POST['interview'])== null)
			{
					
					$sql = "UPDATE review SET interview=NULL WHERE user_id= '".$student_id."' AND application_id='".$_POST['application_id']."'";
					$stmt=$dbc->prepare($sql);
					$stmt->execute();
			}
			
			$stmt2 = $dbc-> prepare('UPDATE student_info SET hours_working_week=:hours_working_week, hourly_rate=:hourly_rate
			WHERE user_id= :student_id');
		
			$stmt2->execute(array('hours_working_week' => $hours_working_week, 'student_id' => "'".$student_id."'" , 'hourly_rate' => $hourly_rate));
			
			}
			
			
			
	//if the statement fails, display an error
	if (!$stmt)
	{
		die ('SQL Error: ' . mysqli_error($dbc));
	}
	//if the statement doesn't fail, redirect back to dms_viewapp and pass student_id in the url
	else
	{
		header('Location: DOCTOR_view_detailed_student_info.php?id='.$student_id.'&selected_application='.$_POST['application_id']);
		die();
	}

?>
