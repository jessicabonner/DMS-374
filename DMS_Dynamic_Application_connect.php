<?php


	//link to file containing database connection string
	require 'DMS_db.php';

	$application_id= $_POST['application_id'];
	//echo $_POST['question_0'];
	
	require 'DMS_db.php';
				
	$sql="SELECT term, year, number_unique_questions, list_unique_questions, program_id FROM applications WHERE application_id='".$application_id."'";
	$stmt=$dbc->prepare($sql);
	$stmt->execute();
	
	$x = $stmt->fetch();
	$number_unique_questions = $x['number_unique_questions'];
	$list_unique_questions = $x['list_unique_questions'];
	$term=$x['term'];
	$year=$x['year'];
	$program_id=$x['program_id'];

	//echo $number_unique_questions;
	//echo $list_unique_questions;
	
	$array_unique_questions=explode('(#!BREAK!#)', $list_unique_questions);
	
	$sql="SELECT name_of_program FROM programs WHERE program_id='".$program_id."'";
	$stmt=$dbc->prepare($sql);
	$stmt->execute();
	
	$y = $stmt->fetch();
	

	
	$sql_fields="";
	$sql_values="";
	$sql_array="";
	foreach((array) $array_unique_questions as $key=>$value)
	{
		$question_.$key=$_POST['question_'.$key];
		//echo $question;
		if ($sql_fields=="")
		{
			$sql_fields=$sql_fields.'question_'.$key;
			$sql_values=$sql_values.':question_'.$key;
			$sql_array=$sql_array."'question_".$key."' =>".'$question_'.$key;
		}
		else
		{
			$sql_fields=$sql_fields.',question_'.$key;
			$sql_values=$sql_values.',:question_'.$key;
			$sql_array=$sql_array.",'question_".$key."' =>".'$question_'.$key;
		}
	}
	


//create variables from those submitted through application form (DMS_Apply.html)
//$first_name=$_POST['first_name'];

//prepare SQL statement to prevent SQL injection
$stmt = $dbc-> prepare("INSERT INTO application ($sql_fields)VALUES ($sql_values)");

$stmt->execute(array($sql_array));


?>