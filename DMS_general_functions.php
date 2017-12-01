<?php
//THIS FILE CONTAINS FUNCTIONS THAT ARE REGULARLY ACCESSED ACROSS ALL DMS_ FILES

	//gets the name of a specific program based on its id
	function get_program($program_id)
	{
		require 'DMS_db.php';
		
		$sql="SELECT name_of_program FROM programs WHERE program_id=$program_id";
		$stmt=$dbc->prepare($sql);
		$stmt->execute();
		$program= $stmt->fetch();
		return $program['name_of_program'];
	}
	

	//gets the information on all programs listed in the "programs" table of the database
	function get_all_programs()
	{
		require 'DMS_db.php';
		
		$sql="SELECT program_id, name_of_program FROM programs";
		$stmt=$dbc->prepare($sql);
		$stmt->execute();
		$programs= $stmt->fetchAll();
		
		return $programs;
	}

	
	//pulling a list of all applications from the database
	function get_all_applications()
	{	
		require 'DMS_db.php';
		
		$sql="SELECT * FROM applications";
		$stmt=$dbc->prepare($sql);
		$stmt->execute();
		$applications= $stmt->fetchAll();
		
		return $applications;
	}
?>