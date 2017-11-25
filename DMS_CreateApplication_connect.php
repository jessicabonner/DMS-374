<?php
	
	require 'DMS_db.php';
	
	
	if(isset($_POST['submit']))
	{
		
		$number_unique_questions=$_POST['number_unique_questions'];
		
		$array_unique_questions=$_POST['list_unique_questions'];
		$list_unique_questions= implode('(#!BREAK!#)', $_POST['list_unique_questions']);
		
		
		//$word_limit=implode(',',$_POST['word_limit']);
		
		$term=$_POST['term'];
		$year=$_POST['year'];
		$program_id=$_POST['program_id'];
		
		
		
		
		
		
		//prepare SQL statement to prevent SQL injection
		$stmt = $dbc-> prepare('INSERT INTO applications(term,year,number_unique_questions,list_unique_questions,program_id) 
		VALUES (:term,:year,:number_unique_questions, :list_unique_questions, :program_id)');
		
		//bind variables to prepared statement and execute
		$stmt->execute(array('term'=>$term,'year'=>$year,'number_unique_questions' => $number_unique_questions, 'list_unique_questions' => $list_unique_questions, 'program_id'=>$program_id));
		
		
		
		$application_id=$dbc->lastInsertId();
		
		//Below is making the table for the specific program
		$sql_table_fields="";
		
		
		
		foreach ($array_unique_questions as $x=>$value)
		{
			$sql_table_fields .= ", question_".$x." VARCHAR(30) NOT NULL";
			
		}
		
		$column_name="name_of_program";
		$stmt = $dbc->query("SELECT $column_name FROM programs WHERE program_id='".$program_id."'");
		$x = $stmt->fetch();
		$name_of_program = $x[$column_name];
		
		
		$name_of_table= $application_id."_".str_replace(' ', '_', $name_of_program)."_".$term."_".$year;
		
		try {
			
			
			
			/*$sql="CREATE TABLE $name_of_table (
			id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY
			$sql_table_fields)";*/
			
			$sql="CREATE TABLE $name_of_table (
			user_id INT(11),
			competitive VARCHAR(1)
			$sql_table_fields
			,PRIMARY KEY(user_id)
			,FOREIGN KEY (user_id) REFERENCES user(user_id))";
		
			$dbc->exec($sql);
			
			
			header('Location: DMS_Admin_Dashboard.php');
			die();
		}

		catch(Exception $e)
		{
			//echo 'Caught exception: ',  $e->getMessage(), "\n";
			echo 'There was a problem';
		}
		
		
		
		
	}	
?>