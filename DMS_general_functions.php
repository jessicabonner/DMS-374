<?php

	function get_program($program_id)
	{
		require 'DMS_db.php';
		
		$sql="SELECT name_of_program FROM programs WHERE program_id=$program_id";
		$stmt=$dbc->prepare($sql);
		$stmt->execute();
		$program= $stmt->fetch();
		return $program['name_of_program'];
	}
	
	function get_all_programs()
	{
		require 'DMS_db.php';
		
		$sql="SELECT program_id, name_of_program FROM programs";
		$stmt=$dbc->prepare($sql);
		$stmt->execute();
		$programs= $stmt->fetchAll();
		
		return $programs;
	}
	
?>