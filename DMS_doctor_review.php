<?php

//require file containing db string
require 'DMS_db.php';

if (isset($_POST['save'])) {
        # Save-button was clicked
		$review= $_POST['application_review_list'];
		//$id= $_POST['user_id'];

		foreach($review as $value)
		{
			require 'DMS_db.php';

				$sql="UPDATE student_info SET $value";
				$stmt=$dbc->prepare($sql);
				$stmt->execute();
	
				//echo $id;
		}
		
    }
    elseif (isset($_POST['accept'])) {
        # Accept-button was clicked
		$accept= $_POST['application_accept_list'];
		//$id= $_POST['user_id'];
		
		$accept_list=implode(',',$accept);
		//check if student is already accepted in the database
		$stmt = $dbc->query("SELECT * FROM student_info WHERE accepted_by_dms= '1' AND user_id IN ($accept_list)");
		$x = $stmt->fetch();
		
		//if the student is already accepted, redirect back to the DMS_doctor.php page along with an indication that there was an error
		if (count($x['user_id'])>0)
		{
			
			header('Location: DMS_doctor.php?error="1"');
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
    }
	
	if (!$stmt) {
		die ('SQL Error: ' . mysqli_error($dbc));
	}
	else{
		header('Location: DMS_doctor.php');
		die();
	}

?>