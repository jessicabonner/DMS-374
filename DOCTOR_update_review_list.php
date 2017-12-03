<?php

//require file containing db string
require 'DMS_db.php';

	if (isset($_POST['save']))
	{
  	  # Save-button was clicked
		$review= $_POST['application_review_list'];
		
		foreach($review as $value)
		{
			require 'DMS_db.php';

			$sql="UPDATE review SET $value AND application_id=".$_POST['application_id'];
			$stmt=$dbc->prepare($sql);
			$stmt->execute();
		
		}
	}
	/* elseif (isset($_POST['accept']))
	{
		# Accept-button was clicked
		$accept= $_POST['application_accept_list'];
		$accept_list=implode(',',$accept);
	
		//check if student is already accepted in the database
		$stmt = $dbc->query("SELECT * FROM student_info WHERE accepted_by_dms= '1' AND user_id IN ($accept_list)");
		$x = $stmt->fetch();

		//if the student is already accepted, redirect back to the DOCTOR_dashboard.php page along with an indication that there was an error
		if (count($x['user_id'])>0)
		{
			$select_application_id=$_POST['select_application'];
			header("Location: DOCTOR_dashboard.php?error='1'&select_application=$select_application_id");
			die();
		}
		foreach($accept as $value)
		{
			require 'DMS_db.php';

			$sql="UPDATE student_info SET accepted_by_dms = 1 WHERE user_id= $value";
			echo $sql;
			$stmt=$dbc->prepare($sql);
			$stmt->execute();
		}
	} */
	//error handling
	if (!$stmt)
	{
		die ('SQL Error: ' . mysqli_error($dbc));
	}
	else
	{
		$select_application_id=$_POST['select_application'];
		header("Location: DOCTOR_dashboard.php?select_application=$select_application_id");
		die();
	}
?>
