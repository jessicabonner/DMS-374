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
	function get_program($program_id)
	{
		require 'DMS_db.php';
		
		$sql="SELECT name_of_program FROM programs WHERE program_id=$program_id";
		$stmt=$dbc->prepare($sql);
		$stmt->execute();
		$program= $stmt->fetch();
		return $program['name_of_program'];
	}
	function select_application($application_id)
	{
		require 'DMS_db.php';

		/* $sql="SELECT * FROM programs WHERE program_id=$program_id";
		$stmt=$dbc->prepare($sql);
		$stmt->execute();
		$program= $stmt->fetch();
		$name_of_program= $program['name_of_program']; */
		
		
		
		$sql="SELECT * FROM applications WHERE application_id=$application_id";
		$stmt=$dbc->prepare($sql);
		$stmt->execute();
		$application= $stmt->fetch();
		
		$name_of_program=get_program($application['program_id']);
		
		$term=$application['term'];
		$year=$application['year'];
		
		$name_of_table= $application_id."_".str_replace(' ', '_', $name_of_program)."_".$term."_".$year;
		
		$sql="SELECT * FROM $name_of_table";
		$stmt=$dbc->prepare($sql);
		$stmt->execute();
		$student_applicants= $stmt->fetchAll();
		
		$student_applicant_id_array=array();
		foreach($student_applicants as $key=>$value)
		{
			$student_applicant_id_array[]=$value["user_id"];
			//echo $value['user_id'];
		}
		return $student_applicant_id_array;
	}
	
	
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