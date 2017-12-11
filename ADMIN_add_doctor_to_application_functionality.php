<?php

	if(isset($_POST['new_doctor']))
	{
		require "DMS_db.php";
		$select_application=$_POST['select_application'];
		
		//check if the new doctor's eid exists in the database
		$stmt = $dbc->query("SELECT * FROM user WHERE user_id= '".$_POST['new_doctor']."'" );
		$x = $stmt->fetch();
		
		//if the application already exists, redirect back to the ADMIN_create_application.php page along with an indication that there was an error
		if (!isset($x['user_id']))
		{
			//echo $stmt;
			header("Location: ADMIN_add_doctor_to_application.php?select_application=$select_application&error=0");
			die();
		}
		elseif ($x['role_id'] != '4' && $x['role_id'] != '2')
		{
			//echo $stmt;
			header("Location: ADMIN_add_doctor_to_application.php?select_application=$select_application&error=1");
			die();
		}
		
		if (get_doctor_list($select_application)==null)
		{
			$doctor_list=implode(' , ', get_doctor_list($select_application));
			
			$doctor_list="'".$doctor_list.", ".$_POST['new_doctor']." '";
		}
		else
		{
			$doctor_list="' ".$_POST['new_doctor']." '";
		}
		
		$sql="UPDATE applications SET user_permissions_eid_list= $doctor_list WHERE application_id= $select_application";
		
		$stmt=$dbc->prepare($sql);
		$stmt->execute();
		
			
		
		
		
		header("Location: ADMIN_add_doctor_to_application.php?select_application=$select_application");
		
		
	} 
	
	


	function get_doctor_list($selected_application)
	{
		require "DMS_db.php";
		
		$sql="SELECT * FROM applications WHERE application_id=$selected_application";
		$stmt=$dbc->prepare($sql);
		$stmt->execute();
		$application= $stmt->fetch();
		
		$doctor_id_array=explode(' , ', $application['user_permissions_eid_list']);
		
		
		
		return $doctor_id_array;
	}

	
	function get_role($user_id)
	{
		require "DMS_db.php";
		
		$sql="SELECT * FROM user WHERE user_id= '".$user_id."'";
		$stmt=$dbc->prepare($sql);
		$stmt->execute();
		$doctor= $stmt->fetch();
		
		
		//return $doctor['user_id'];
		return $doctor['role_id'];
		
	}










?>