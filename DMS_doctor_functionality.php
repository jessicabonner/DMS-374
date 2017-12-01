<?php
//ALL THE FUNCTIONS FOR THE DMS_doctor PAGE
	
	require 'DMS_db.php';
	
	
	//return all records contained in the given $student_applicants list
	function select_student_from_list($student_applicants)
	{
		require 'DMS_db.php';
		//select students from student_info using their user_id
		$sql = "SELECT * FROM student_info WHERE user_id IN ($student_applicants)";
		$query= $dbc->query($sql);;
		return $query;
	}

	
	//return student in student_info where the user_id matches the given user_id
	function select_student($user_id)
	{
		require 'DMS_db.php';
		$stmt = $dbc->query("SELECT * FROM student_info WHERE user_id=$user_id;");
		$student = $stmt->fetch();
		return	$student;
	}
	
	function select_student2($id)
	{
		require 'DMS_db.php';
		$result = "SELECT * FROM student_info WHERE user_id = '$id'";
		$student = $dbc->query($result);
		return $student;
	}

	
	//return all applications that are not archived
	function select_all_applications()
	{
		require 'DMS_db.php';
		//select all the applications that are active
		$sql="SELECT * FROM applications WHERE archived='FALSE'";
		$stmt=$dbc->prepare($sql);
		$stmt->execute();
		$applications= $stmt->fetchAll();
		return $applications;
	}

	
	//return the application that corresponds to a given id
	function select_application($application_id)
	{
		require 'DMS_db.php';
		// select a specific application using application_id
		$sql="SELECT * FROM applications WHERE application_id=$application_id";
		$stmt=$dbc->prepare($sql);
		$stmt->execute();
		$application= $stmt->fetch();
		return $application;
	}
	
	function select_application2($application_id)
	{
		require 'DMS_db.php';
		// select a specific application using application_id
		$result = "SELECT * FROM applications WHERE application_id = '$application_id'";
		$query= $dbc->query($result);;

		if (!$query)
		{
			die ('SQL Error: ' . mysqli_error($dbc));
		}
		
		return $query;
	}
	
	
	//return a particular application's table name when given only the application_id
	function get_application_table_name($application_id)
	{
		require 'DMS_db.php';
		// get application names
		$sql="SELECT * FROM applications WHERE application_id=$application_id";
		$stmt=$dbc->prepare($sql);
		$stmt->execute();
		$application= $stmt->fetch();
		$name_of_program=get_program($application['program_id']);
		$name_of_table= $application_id."_".str_replace(' ', '_', $name_of_program)."_".$application['term']."_".$application['year'];
		return $name_of_table;
	}

	
	//return the name of a program from its program_id
	function get_program_name($program_id)
	{
		require 'DMS_db.php';
					
			$sql="SELECT name_of_program FROM programs WHERE program_id=$program_id";
			$stmt=$dbc->prepare($sql);
			$stmt->execute();
			$program = $stmt->fetch();
			$name_of_program=$program['name_of_program'];

			return $name_of_program;
	}
	



	//return an array of the id's of all student applicants
	function get_id_array($name_of_table)
	{
		require 'DMS_db.php';
		// get application id
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
		$student_applicant_id_list=implode(',',$student_applicant_id_array);
		return $student_applicant_id_list;
	}
	
	
	//return an array of all students who have applied to the given application
	function select_application_student_list($application_id)
	{
		require 'DMS_db.php';
		// select different student info
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


	function filter($filter_criteria, $and_or, $selected_application_id)
	{
		require 'DMS_db.php';
		// filtering applicants using selected criteria
		$filter_criteria_sql=implode($and_or,$filter_criteria);
		$name_of_table=get_application_table_name($selected_application_id);
		$applicant_id_array= get_id_array($name_of_table);
		$sql="SELECT * FROM student_info WHERE ($filter_criteria_sql) AND user_id IN ($applicant_id_array)";
		$query= $dbc->query($sql);;
		echo "Displaying students where $filter_criteria_sql";
		return $query;
	}

	function filter_with_gpa($filter_criteria, $and_or, $GPA, $greater_less, $selected_application_id)
	{
		require 'DMS_db.php';
		// filter applicants with gpa
		$filter_criteria_sql=implode($and_or,$filter_criteria);
		$filter_criteria_sql=$filter_criteria_sql." ".$and_or." GPA".$greater_less.$GPA;
		$name_of_table=get_application_table_name($selected_application_id);
		$applicant_id_array= get_id_array($name_of_table);
		$sql="SELECT * FROM student_info WHERE ( $filter_criteria_sql) AND user_id IN ($applicant_id_array)";
		$query= $dbc->query($sql);;
		echo "Displaying students where $filter_criteria_sql";
		return $query;
	}

	function filter_only_gpa($GPA, $greater_less, $selected_application_id)
	{
		require 'DMS_db.php';
		// filter applicants by gpa only
		$filter_criteria_sql="";
		$filter_criteria_sql=$filter_criteria_sql."GPA".$greater_less.$GPA;

		$name_of_table=get_application_table_name($selected_application_id);
		$applicant_id_array= get_id_array($name_of_table);

		$sql="SELECT * FROM student_info WHERE $filter_criteria_sql AND user_id IN ($applicant_id_array)";

		$query= $dbc->query($sql);;

		echo "Displaying students with GPA".$greater_less.$GPA;
		return $query;
	}
	function doctor_sort($sort_criteria, $selected_application_id)
	{
		require 'DMS_db.php';
		//get applicant id based on sort criteria
		$name_of_table=get_application_table_name($selected_application_id);
		$applicant_id_array= get_id_array($name_of_table);

		$sql="SELECT * FROM student_info WHERE user_id IN ($applicant_id_array) ORDER BY $sort_criteria";

		$query= $dbc->query($sql);;
		return $query;

	}


	function search($search_criteria, $selected_application_id)
	{
		require 'DMS_db.php';

	//if (isset($_GET['search_criteria']))
	//{
		//get the search result
		$search_criteria=$_GET['search_criteria'];

		$name_of_table=get_application_table_name($selected_application_id);
		$applicant_id_array= get_id_array($name_of_table);


		$sql="SELECT * FROM student_info WHERE
			user_id IN ($applicant_id_array) AND(
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




	/* $sql="SELECT * FROM student_info";
	//$stmt=$dbc->prepare($sql);
	//$stmt->execute();
	//$students = $stmt->fetch();
	$query= $dbc->query($sql);;

	if (!$query) {
		die ('SQL Error: ' . mysqli_error($dbc));
	}
	 */


?>
