<?php

	require 'DMS_db.php';
/*
	$sql="SELECT * FROM student_info WHERE accepted_by_dms='1'";
	//$stmt=$dbc->prepare($sql);
	//$stmt->execute();
	//$students = $stmt->fetch();
	$query= $dbc->query($sql);;

	if (!$query) {
		die ('SQL Error: ' . mysqli_error($dbc));
	}
	
	*/
	
	
	
	function search($search_criteria)
	{
		require 'DMS_db.php';
		
	//if (isset($_GET['search_criteria']))
	//{
		
		$search_criteria=$_GET['search_criteria'];
		
		
		$sql="SELECT * FROM student_info WHERE 
			first_name LIKE '%$search_criteria%' 
			OR middle_name LIKE '%$search_criteria%' 
			OR last_name LIKE '%$search_criteria%'
			OR EID LIKE '%$search_criteria%'
			OR address LIKE '%$search_criteria%'
			OR city LIKE '%$search_criteria%'
			OR state LIKE '%$search_criteria%'
			OR zip_code LIKE '%$search_criteria%'
			OR phone LIKE '%$search_criteria%'
			OR email LIKE '%$search_criteria%'
			OR degree_type LIKE '%$search_criteria%'
			OR major LIKE '%$search_criteria%'
			OR major_2 LIKE '%$search_criteria%'";
		$query= $dbc->query($sql);;
		return $query;
	if (!$query) {
		die ('SQL Error: ' . mysqli_error($dbc));
	}
	}
	
	
		$sql="SELECT * FROM student_info WHERE accepted_by_dms='1'";
	//$stmt=$dbc->prepare($sql);
	//$stmt->execute();
	//$students = $stmt->fetch();
	$query= $dbc->query($sql);;

	if (!$query) {
		die ('SQL Error: ' . mysqli_error($dbc));
	}
	


?>