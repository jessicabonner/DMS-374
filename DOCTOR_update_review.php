<?php
require "DMS_general_functions.php";
$role_id_array=array("2","4");
require "DMS_authenticate.php";
$user_id = $_SESSION['user_id'];
/*

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;



require './Exception.php';
require './PHPMailer.php';
*/



	
	
	date_default_timezone_set('America/Chicago');
	
	//THIS FOR WILL BE LINKED TO DOCTOR_view_detailed_student_info.php TO Change accepted_by_dms

	require 'DMS_db.php';

	$student_id=$_POST['user_id'];
	$application_id=$_POST['application_id'];
	$current_date=date('Y-m-d');
	
	
	
	
if ($_SESSION['role']==2)
{
	//if user clicked submit button named accept to accept a student
	if(isset($_POST['accept']))
	{

		$student_id=$_POST['user_id'];
	
		$new_accepted_by_DMS = $_POST['new_accepted_by_DMS'];
		echo $student_id;
		echo $new_accepted_by_DMS;

}}

?>