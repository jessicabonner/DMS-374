<?php
//THIS FILE TAKES THE INFORMATION SUBMITTED IN DMS_CreateApplication.php AND COMMITS IT TO THE DATABASE 
//IN ORDER TO LET THE USER CREATE NEW APPLICATONS


	//require file containing db string
	require 'DMS_db.php';
	
	//if user submits the DMS_CreateApplication.php form to create a new application
	if(isset($_POST['submit']))
	{
		//get all info submitted through the form
		$number_unique_questions=$_POST['number_unique_questions'];
		$term=$_POST['term'];
		$year=$_POST['year'];
		$program_id=$_POST['program_id'];
		$array_unique_questions=$_POST['list_unique_questions'];
		
		//turn the array of questions into a string
		$list_unique_questions= implode('(#!BREAK!#)', $_POST['list_unique_questions']);
		
		
		
		
		//check if the application already exists in the database
		$stmt = $dbc->query("SELECT * FROM applications WHERE program_id='".$program_id."' AND term='".$term."' AND year='".$year."'" );
		$x = $stmt->fetch();
		
		//if the application already exists, redirect back to the DMS_CreateApplication.php page along with an indication that there was an error
		if (count($x['application_id'])>0)
		{
			
			header('Location: DMS_CreateApplication.php?error="1"');
			die();
		}
		
			
		
		
		//below is making a new field in the applications table for this application
		//prepare SQL statement to prevent SQL injection
		$stmt = $dbc-> prepare('INSERT INTO applications(term,year,number_unique_questions,list_unique_questions,program_id, archived) 
		VALUES (:term,:year,:number_unique_questions, :list_unique_questions, :program_id, :archived)');
		
		//bind variables to prepared statement and execute
		$stmt->execute(array('term'=>$term,'year'=>$year,'number_unique_questions' => $number_unique_questions, 'list_unique_questions' => $list_unique_questions, 'program_id'=>$program_id, 'archived'=>'FALSE'));
		
		
		//get the primary key (application_id) that was just created
		$application_id=$dbc->lastInsertId();
		
		
		
		//Below is making a new table for the specific program
		$sql_table_fields="";
		
		//go through the array of questions to create the sql code that will make each question field in the table
		foreach ($array_unique_questions as $x=>$value)
		{
			$sql_table_fields .= ", question_".$x." VARCHAR(30) NOT NULL";
			
		}
		
		//get the name of the program that this application corresponds to
		$column_name="name_of_program";
		$stmt = $dbc->query("SELECT $column_name FROM programs WHERE program_id='".$program_id."'");
		$x = $stmt->fetch();
		$name_of_program = $x[$column_name];
		
		
		//use the application_id from the applications table, the name of the corrresponding program, the term, and the year
		//to create a unique table name for this specific application
		$name_of_table= $application_id."_".str_replace(' ', '_', $name_of_program)."_".$term."_".$year;
		
		
		
		try {
			//create the new table
			$sql="CREATE TABLE $name_of_table (
			user_id INT(11),
			competitive VARCHAR(1)
			$sql_table_fields
			,PRIMARY KEY(user_id)
			,FOREIGN KEY (user_id) REFERENCES user(user_id))";
		
			$dbc->exec($sql);
			
			//direct back to the admin dashboard with a message that the application has been successfully completed
			header('Location: DMS_Admin_Dashboard.php?message=1');
			die();
		}

		//catch any error display error messge
		catch(Exception $e)
		{
			
			echo "there was an error";
		}
			
	}	
?>