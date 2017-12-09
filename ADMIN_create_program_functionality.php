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
		    $supervisor_first_name=$_POST['supervisor_first_name'];
		    $supervisor_middle_name=$_POST['supervisor_middle_name'];
		    $supervisor_last_name=$_POST['supervisor_last_name'];
		    $doctor_EID=$_POST['doctor_EID'];
		    $assignment_length=$_POST['assignment_length'];
		    $start_date=$_POST['start_date'];
		    $end_date=$_POST['end_date'];
		    $renew=$_POST['renew'];
		    $student_type=$_POST['student_type'];
		    $it_equipment=$_POST['it_equipment'];
		    $work_location=$_POST['work_location'];
		    $hours_per_week=$_POST['hours_per_week'];
		    $hourly_rate=$_POST['hourly_rate'];
			$position_type=$_POST['position_type'];
			$program_description=$_POST['program_description'];
			
			//prepare SQL statement to prevent SQL injection		
		    $stmt = $dbc-> prepare('INSERT INTO programs (name_of_program, program_description, position_type, supervisor_first_name, supervisor_middle_name, supervisor_last_name, doctor_EID, assignment_length, start_date, end_date, renew, student_type, it_equipment, work_location, hours_per_week, hourly_rate) 
		    VALUES (:name_of_program, :program_description, :position_type, :supervisor_first_name, :supervisor_middle_name, :supervisor_last_name, :doctor_EID, :assignment_length, :start_date, :end_date, :renew, :student_type,
		  :it_equipment, :work_location, :hours_per_week, :hourly_rate)');

			//bind variables to prepared statement and execute
			$stmt->execute(array('name_of_program' => $name_of_program, 'program_description' => $program_description, 'position_type' => $position_type, 'supervisor_first_name' => $supervisor_first_name, 'supervisor_middle_name' => $supervisor_middle_name, 'supervisor_last_name' => $supervisor_last_name,'doctor_EID' => $doctor_EID,'assignment_length' => $assignment_length,'start_date' => $start_date,'end_date' => $end_date,'renew' => $renew,'student_type' => $student_type,'it_equipment' => $it_equipment,'work_location' => $work_location,'hours_per_week' => $hours_per_week,'hourly_rate' => $hourly_rate ));

			//direct back to admin dashboard with a message that the program has been successfully created
			header('Location: ADMIN_dashboard.php?message=0');
			die();
		}

		//if there is an error, display error message
		catch(Exception $e)
		{
			echo "There was an error";
			//echo 'Caught exception: ',  $e->getMessage(), "\n";
			echo $e;
		}
	}
?>
