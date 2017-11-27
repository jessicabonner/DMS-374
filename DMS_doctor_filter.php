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
	function filter($filter_criteria, $and_or)
	{
		require 'DMS_db.php';
		
		$filter_criteria_sql=implode($and_or,$filter_criteria);
		
		$sql="SELECT * FROM student_info WHERE ($filter_criteria_sql)";
		
		$query= $dbc->query($sql);;
		
		echo "Displaying students where $filter_criteria_sql";
		return $query;
		
		
	}
	
	function filter_with_gpa($filter_criteria, $and_or, $GPA, $greater_less)
	{
		require 'DMS_db.php';
		
		$filter_criteria_sql=implode($and_or,$filter_criteria);
		$filter_criteria_sql=$filter_criteria_sql." ".$and_or." GPA".$greater_less.$GPA;
		
		$sql="SELECT * FROM student_info WHERE ( $filter_criteria_sql)";
		
		$query= $dbc->query($sql);;
		
		echo "Displaying students where $filter_criteria_sql";
		return $query;
	}
	
	function filter_only_gpa($GPA, $greater_less)
	{
		require 'DMS_db.php';
		
		$filter_criteria_sql="";
		$filter_criteria_sql=$filter_criteria_sql."GPA".$greater_less.$GPA;
		
		$sql="SELECT * FROM student_info WHERE $filter_criteria_sql";
		
		$query= $dbc->query($sql);;
		
		echo "Displaying students with GPA".$greater_less.$GPA;
		return $query;
	}
	
	
	function search($search_criteria)
	{
		require 'DMS_db.php';
		
	//if (isset($_GET['search_criteria']))
	//{
		
		$search_criteria=$_GET['search_criteria'];
		
		
		$sql="SELECT * FROM student_info WHERE (
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
			OR major_2 LIKE '%$search_criteria%')";
		$query= $dbc->query($sql);;
		
		echo "Displaying students containing '$search_criteria'";
		return $query;
	if (!$query) {
		die ('SQL Error: ' . mysqli_error($dbc));
	}
	}
	
	
	$sql="SELECT * FROM student_info";
	//$stmt=$dbc->prepare($sql);
	//$stmt->execute();
	//$students = $stmt->fetch();
	$query= $dbc->query($sql);;

	if (!$query) {
		die ('SQL Error: ' . mysqli_error($dbc));
	}
	


?>