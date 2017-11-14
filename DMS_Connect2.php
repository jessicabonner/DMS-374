<?php

//link to file containing database connection string
require 'DMS_db.php';


//create variables from those submitted through application form (DMS_Apply.html)
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
$worked_at_dms=$_POST['worked_at_dms'];
$volunteered_at_seton=$_POST['volunteered_at_seton'];
$car=$_POST['car'];
$semester_commitment=$_POST['semester_commitment'];
$essay_q1=$_POST['essay_q1'];
$essay_q2=$_POST['essay_q2'];
$essay_q3=$_POST['essay_q3'];
$essay_q4=$_POST['essay_q4'];
$essay_q5=$_POST['essay_q5'];

//turn availability_list into a string 
$availability= implode(',', $_POST['availability_list']);



//create sql code to insert record into application table
$sql = "INSERT INTO application (first_name, middle_name, last_name, EID, address, city, state, zip_code, phone, email, employment,
classification, degree_type, major, major_2, worked_at_dms, volunteered_at_seton, car, semester_commitment, essay_q1,
essay_q2, essay_q3, essay_q4, essay_q5, availability) VALUES ('$first_name', '$middle_name', '$last_name', '$EID', '$address', '$city',
'$state', '$zip_code', '$phone', '$email', '$employment', '$classification', '$degree_type', '$major', '$major_2', '$worked_at_dms',
'$volunteered_at_seton', '$car', '$semester_commitment', '$essay_q1', '$essay_q2', '$essay_q3', '$essay_q4', '$essay_q5', '$availability')";

//commit sql code
$result= mysqli_query($dbc, $sql) or die(mysqli_error($dbc));


/*
if ($sql=$mysqli -> prepare("INSERT INTO application (first_name, middle_name, last_name, EID, address, city, state, zip_code, phone, email, employment,
classification, degree_type, major, major_2, worked_at_dms, volunteered_at_seton, car, semester_commitment, essay_q1,
essay_q2, essay_q3, essay_q4, essay_q5, availability) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)")){

	$sql->bind_param("sssssssssssssssssssssssss",$first_name, $middle_name, $last_name, $EID, $address, $city,
	$state, $zip_code, $phone, $email, $employment, $classification, $degree_type, $major, $major_2, $worked_at_dms,
	$volunteered_at_seton, $car, $semester_commitment, $essay_q1, $essay_q2, $essay_q3, $essay_q4, $essay_q5, $availability);

	$sql-> execute();

	$sql->close();
}
*/


echo '<h1 style= "text-align:center;color:#BF5700">Your application has been received! Thanks for applying!</h1>';

?>
