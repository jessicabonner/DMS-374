<?php

	//THIS FOR WILL BE LINKED TO DMS_ViewApp.php TO Change accepted_by_dms

	require 'DMS_db.php';

	$user_id=$_POST['user_id'];

	if( ($_POST['accept']))
		{
			//echo $_POST['new_close_application'];

			$user_id=$_POST['user_id'];
			//echo $user_id;

			$new_accepted_by_DMS = $_POST['new_accepted_by_DMS'];

			//check if student is already accepted in the database
			$stmt = $dbc->query("SELECT * FROM student_info WHERE accepted_by_dms= '1'");
			$x = $stmt->fetch();

			//if the student is already accepted, redirect back to the DMS_doctor.php page along with an indication that there was an error
			if (count($x['user_id'])>0)
			{
				header('Location: DMS_ViewApp.php?error="1" & id='.$user_id.'');
				die();
			}

			if ( ($_POST['new_accepted_by_DMS'])!== null)
			{
				$new_accepted_by_DMS = $_POST['new_accepted_by_DMS'];
				$sql = "UPDATE student_info SET accepted_by_dms = '".$new_accepted_by_DMS."' WHERE user_id ='".$user_id."'";
				$stmt=$dbc->prepare($sql);
				$stmt->execute();
			}
		}
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
	if (!$stmt)
		{
			die ('SQL Error: ' . mysqli_error($dbc));
		}
	else
		{
			header('Location: DMS_ViewApp.php?id='.$user_id);
			die();
		}

?>
