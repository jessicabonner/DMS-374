<?php
	function get_doctor_list($selected_application)
	{
		require "DMS_db.php";
		
		$sql="SELECT * FROM applications WHERE application_id=$selected_application";
		$stmt=$dbc->prepare($sql);
		$stmt->execute();
		$application= $stmt->fetch();
		
		$doctor_array=explode(',', $application['doctor_eid']);
		return $doctor_array;
	}











?>