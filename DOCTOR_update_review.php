<?php
require "DMS_general_functions.php";
$role_id_array=array("2","4");
require "DMS_authenticate.php";
$user_id = $_SESSION['user_id'];
require 'DMS_db.php';


//use PHPMailer\PHPMailer\PHPMailer;
//use PHPMailer\PHPMailer\Exception;



//require './Exception.php';
//require './PHPMailer.php';




	
	
	date_default_timezone_set('America/Chicago');
	
	//THIS FOR WILL BE LINKED TO DOCTOR_view_detailed_student_info.php TO Change accepted_by_dms

	

	$student_id=$_POST['user_id'];
	$application_id=$_POST['application_id'];
	$current_date=date('Y-m-d');
	
	
	
	
if ($_SESSION['role']==2)
{
	//if user clicked submit button named accept to accept a student
	if(isset($_POST['accept']))
	{

	
		
		
			
			//update "accepted" field to true
		
			
			$sql = "UPDATE review SET accepted_by_dms = 1 , application_accept_date='".$current_date."'  WHERE user_id ='".$student_id."' AND application_id='".$application_id."'";
			//$stmt=$dbc->prepare($sql);
			//$stmt->execute();
			
			
echo $sql;
	

?>