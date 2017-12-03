<?php	
	//require file containing db string
	require 'DMS_db.php';

	if (isset($_POST['save'])) 
	{
	    # Save Changes-button was clicked
		$background_check= $_POST['application_background_check_list'];
		//$id= $_POST['user_id'];

		foreach($background_check as $value)
		{
			require 'DMS_db.php';

			$sql="UPDATE student_info SET $value";
			$stmt=$dbc->prepare($sql);
			$stmt->execute();
	
			//echo $id;
		}	
		
		if (!$stmt)
		{
			die ('SQL Error: ' . mysqli_error($dbc));
		}
		else
		{
			header("Location: DMS_HR_Dashboard.php");
			die();
		}
	}
?>