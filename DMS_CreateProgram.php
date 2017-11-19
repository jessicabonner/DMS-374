<?php
	
	require 'DMS_db.php';
	
	
	if(isset($_POST['submit']))
	{
		
		$name_of_program=$_POST['name_of_program'];   
		$doctor_EID=$_POST['doctor_EID'];
		
		
		//for now-- need to add a dropdown next
		$parent_program_id="";
		
		$name_of_table= str_replace(' ', '_', $name_of_program);
		
		//prepare SQL statement to prevent SQL injection
		$stmt = $dbc-> prepare('INSERT INTO programs(name_of_program, doctor_EID, parent_program_id) 
		VALUES (:name_of_program, :doctor_EID, :parent_program_id)');
		
		//bind variables to prepared statement and execute
		$stmt->execute(array('name_of_program' => $name_of_program, 'doctor_EID' => $doctor_EID, 'parent_program_id'=>$parent_program_id));
		
		
		
	}	
?>