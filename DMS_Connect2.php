<?php
//THIS FILE PULLS TAKES THE DATA SUBMITTED THROUGH DMS_Student_Info.php AND ADDS IT TO THE student_info TABLE ON THE DATABASE
//THIS RECORD WILL BE LINKED TO THE USERS PROFILE 

	//link to file containing database connection string
	require 'DMS_db.php';

	//get the user id which was passed through the url when student logged in/created a profile
	$user_id = $_POST['user_id'];
	
	//create variables from those submitted through application form (DMS_Student_Info.php)
	$first_name=$_POST['first_name'];
	$middle_name=$_POST['middle_name'];
	$last_name=$_POST['last_name'];
	$EID=$_POST['EID'];
	$address=$_POST['address'];
	$city=$_POST['city'];
	$state=$_POST['state'];
	$zip_code=$_POST['zip_code'];
	$phone=$_POST['phone'];
	$email=$_POST['email'];
	$employment=$_POST['employment'];
	$classification=$_POST['classification'];
	$degree_type=$_POST['degree_type'];
	$major=$_POST['major'];
	$major_2=$_POST['major_2'];
	$GPA=$_POST['GPA'];
	$worked_at_dms=$_POST['worked_at_dms'];
	$volunteered_at_seton=$_POST['volunteered_at_seton'];
	$car=$_POST['car'];
	$semester_commitment=$_POST['semester_commitment'];

	//turn availability_list into a string 
	$availability= implode(',', $_POST['availability_list']);
	


	//prepare SQL statement to prevent SQL injection
	$stmt = $dbc-> prepare('INSERT INTO student_info (user_id, first_name, middle_name, last_name, EID, address, city, state, zip_code, phone, email, employment,
	classification, degree_type, major, major_2, GPA, worked_at_dms, volunteered_at_seton, car, semester_commitment, availability) VALUES (:user_id, :first_name, :middle_name, :last_name, :EID, :address, :city, :state, :zip_code, :phone, 
	:email, :employment, :classification, :degree_type, :major, :major_2, :GPA, :worked_at_dms, :volunteered_at_seton, :car, :semester_commitment, :availability)');


	//bind variables to prepared statement and execute
	$stmt->execute(array('user_id' => $user_id, 'first_name' => $first_name, 'middle_name' => $middle_name, 'last_name' => $last_name,'EID' => $EID,'address' => $address,'city' => $city,
	'state' => $state,'zip_code' => $zip_code,'phone' => $phone,'email' => $email,'employment' => $employment,'classification' => $classification,
	'degree_type' => $degree_type,'major' => $major,'major_2' => $major_2, 'GPA'=>$GPA, 'worked_at_dms' => $worked_at_dms,'volunteered_at_seton' => $volunteered_at_seton,
	'car'=>$car,'semester_commitment' => $semester_commitment,'availability' => $availability ));

	

	//direct to page to let student select which program to apply to
	header('Location: DMS_Select_Program_Apply.php?user_id='.$user_id);
	die();


?>
