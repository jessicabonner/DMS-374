<?php
//THIS FILE TAKES THE INFORMATION SUBMITTED IN ADMIN_create_program.php AND COMMITS IT TO THE DATABASE
//IN ORDER TO LET THE USER CREATE NEW PROGRAMS

	//require file containing database string
	require 'DMS_db.php';

	//if user submitted the ADMIN_create_program.php
	if(isset($_POST['submit']))
	{
		try
		{
			//get information from the create program page
			$name_of_program=$_POST['name_of_program'];
			$doctor_EID=$_POST['doctor_EID'];

			//prepare SQL statement to prevent SQL injection
			$stmt = $dbc-> prepare('INSERT INTO programs(name_of_program, doctor_EID, parent_program_id)
			VALUES (:name_of_program, :doctor_EID, :parent_program_id)');

			//bind variables to prepared statement and execute
			$stmt->execute(array('name_of_program' => $name_of_program, 'doctor_EID' => $doctor_EID, 'parent_program_id'=>$parent_program_id));

			//direct back to admin dashboard with a message that the program has been successfully created
			header('Location: ADMIN_dashboard.php?message=0');
			die();
		}

		//if there is an error, display error message
		catch(Exception $e)
		{
			echo "There was an error";
			//echo 'Caught exception: ',  $e->getMessage(), "\n";
		}
	}
?>
