<?php	
	//require file containing db string
	require 'DMS_db.php';

	if (isset($_POST['save'])) 
	{	
		//Set all checkboxes to 0 (unchecked)
		$sql = "UPDATE student_info SET bio_data_form = '0', i9 = '0', seton_forms = '0'";
		$stmt=$dbc->prepare($sql);
		$stmt->execute();
		
	    # Save Changes-button was clicked
		$background_check= $_POST['background_check_list'];
		$bio_data_form= $_POST['bio_data_form_list'];
		$i9= $_POST['i9_list'];
		$seton_forms= $_POST['seton_forms_list'];
		
		$bio_data_form_list=implode(',',$bio_data_form);
		$i9_list=implode(',',$i9);
		$seton_forms_list=implode(',',$seton_forms);


		foreach($background_check as $value)
		{
			require 'DMS_db.php';

			$sql="UPDATE student_info SET $value";
			$stmt=$dbc->prepare($sql);
			$stmt->execute();
	
		}	

		
		if(!empty($_POST['bio_data_form_list']))
		{
			foreach($bio_data_form as $value)
			{
				require 'DMS_db.php';

				$sql="UPDATE student_info SET bio_data_form = 1 WHERE user_id = $value";
				$stmt=$dbc->prepare($sql);
				$stmt->execute();
	
			}	
		}
		
		if(!empty($_POST['i9_list']))
		{
			foreach($i9 as $value)
			{
				require 'DMS_db.php';

				$sql="UPDATE student_info SET i9 = 1 WHERE user_id= $value";
				$stmt=$dbc->prepare($sql);
				$stmt->execute();		
			}
		}
		
		if(!empty($_POST['seton_forms_list']))
		{
			foreach($seton_forms as $value)
			{
				require 'DMS_db.php';

				$sql="UPDATE student_info SET seton_forms = 1 WHERE user_id= $value";
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
			header("Location: HR_dashboard.php");
			die();
		}
	}

?>