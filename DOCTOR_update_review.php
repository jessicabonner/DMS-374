<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '/Applications/XAMPP/xamppfiles/htdocs/dms-374/phpmailer/libs/PHPMailer-Master/src/Exception.php';
require '/Applications/XAMPP/xamppfiles/htdocs/dms-374/phpmailer/libs/PHPMailer-Master/src/PHPMailer.php';
require '/Applications/XAMPP/xamppfiles/htdocs/dms-374/phpmailer/libs/PHPMailer-Master/src/SMTP.php';


	$role_id="2";
	require "DMS_authenticate.php";
	$user_id = $_SESSION['user_id'];
	
	date_default_timezone_set('America/Chicago');
	
	//THIS FOR WILL BE LINKED TO DOCTOR_view_detailed_student_info.php TO Change accepted_by_dms

	require 'DMS_db.php';

	$student_id=$_POST['user_id'];
	$application_id=$_POST['application_id'];
	$current_date=date('Y-m-d');
	

	//if user clicked submit button named accept to accept a student
	if(isset($_POST['accept']))
	{

		$student_id=$_POST['user_id'];
	
		$new_accepted_by_DMS = $_POST['new_accepted_by_DMS'];

		//check if student is already accepted in the database
		$stmt = $dbc->query("SELECT * FROM review WHERE accepted_by_dms=$new_accepted_by_DMS AND application_id=". $_POST['application_id']." AND user_id='".$student_id."'");
		$x = $stmt->fetch();
		
		//if the student is already accepted, redirect back to the DOCTOR_dashboard.php page along with an indication that there was an error
		if (count($x['user_id'])>0)
		{
			header('Location: DOCTOR_view_detailed_student_info.php?error="1" & id='.$student_id.' &selected_application='.$_POST['application_id'].'');
			die();
		}

		//if student is not already accepted, update "accepted" field to true
		if ( ($_POST['new_accepted_by_DMS'])!== null)
		{
			$new_accepted_by_DMS = $_POST['new_accepted_by_DMS'];
			$sql = "UPDATE review SET accepted_by_dms = '".$new_accepted_by_DMS."', application_accept_date='".$current_date."'  WHERE user_id ='".$student_id."' AND application_id='".$_POST['application_id']."'";
			//$stmt=$dbc->prepare($sql);
			//$stmt->execute();
			
			//$sql2 = "SELECT name_of_program FROM programs WHERE application_id = '".$application_id."'";
			//$query = $dbc->query($sql2);
			
			//require 'DOCTOR_functionality.php';
			
			
			
			
			//If the doctor accepts a student, this will send an email notification to the student
			if(($_POST['new_accepted_by_DMS'])== '1')
			{
				$sql2="SELECT * FROM applications WHERE application_id=18";
				$stmt=$dbc->prepare($sql2);
				//$stmt->execute();
				//$application= $stmt->fetch();
				//'".$application_id."'
		
				while ($row=$stmt->fetch(PDO::FETCH_ASSOC))
				{
					$program_id= $row['program_id'];
					//$program_id= '1';
					//$name_of_program= $row['name_of_program'];
				}
				//$program_id= '1';
				
				//The Email Sender information
	    		$from = 'tanniarodriguez@utexas.edu'; //This will need to change
	    		$from_name = 'Dell Medical School';
	   	 		$subject = 'DMS Application';
	   	 		//$text = $_POST['elvismail'];
				//$mail->Body = "<p>Congratulations, you're Dell Medical School volunteer/internship application has been reviewed. This is your acceptance notification for $program_id to respond to your acceptance login to your your account!</p>";
				$msg = "Congratulations, you're Dell Medical School volunteer/internship application has been reviewed. This is your acceptance notification for your DMS application, please visit your account to view and accept your offer";
			
			
				
		
				//Finds the email of the student the doctor accepted
				$sql2 = "SELECT email FROM student_info WHERE user_id = '".$student_id."'";
				$query = $dbc->query($sql2);
				
				
				//$recipients_array = array();
				
				while ($row=$query->fetch(PDO::FETCH_ASSOC))
				{
					//$recipients_array[] = $row['email'];
					$recipient = $row['email'];
				}
	
				//$recipients_string = implode(",", $recipients_array);
	
				//echo $recipients_string;
				
	
	    		//foreach ($recipients_array as $value)
				//{
	
					
					//$program_id = 'Mobile Program';
					//$msg = "Congratulations, you're Dell Medical School volunteer/internship application has been reviewed. This is your acceptance notification for $program_id to respond to your acceptance login to your your account!";

			    	$mail = new PHPMailer(true);
					$mail->SMTPDebug = 2;   
			    	$mail->IsSMTP();
			    	$mail->Host = 'smtp.gmail.com'; 
			    	$mail->SMTPAuth = true;
			    	$mail->Username = 'example@utexas.edu';  // Sender's gmail address
			    	$mail->Password = 'Password';  // Sender's gmail password
				    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
				    $mail->Port = 587; 
			    	$mail->From = "$from";  // Sender's email address
			    	$mail->FromName = "$from_name"; // senders name 
			    	$mail->Body = "$msg";
			    	$mail->Subject = "$subject";
			    	$mail->AddAddress($recipient);  // Recipient
				    //$mail->send();
			
						if(!$mail->send())
				 		{
				  			echo 'Email sent to:' . $recipient . '<br/ >';
				      	  	echo "Mailer Error: " . $mail->ErrorInfo;
				   		}
				    	else
				    	{
				       	 	echo 'Email sent to:' . $recipient . '<br/ >';
				    	}	
				
			
				//}
			}
			$stmt=$dbc->prepare($sql);
			$stmt->execute();
			
	}
		
}
	
	
	//if user clicked submit button named update to save the review field
	elseif(isset($_POST['update']))
		{
			
			$new_review = $_POST['new_review'];
			$student_id=$_POST['user_id'];
			
			$hours_working_week=$_POST['hours_working_week'];
			$hourly_rate =$_POST['hourly_rate'];

			// if $new_review exists, update database to set student's review to the new value
			if( ($_POST['new_review'])!== null)
				{
					$new_review = $_POST['new_review'];
					$sql = "UPDATE review SET $new_review AND application_id='".$_POST['application_id']."'";
					$stmt=$dbc->prepare($sql);
					$stmt->execute();
				}
			if( ($_POST['potential'])!== null)
			{
					$new_potential = $_POST['potential'];
					$sql = "UPDATE review SET potential=$new_potential WHERE user_id= '".$user_id."' AND application_id='".$_POST['application_id']."'";
					$stmt=$dbc->prepare($sql);
					$stmt->execute();
			}
			elseif( ($_POST['potential'])== null)
			{
					
					$sql = "UPDATE review SET potential=0 WHERE user_id= '".$student_id."' AND application_id='".$_POST['application_id']."'";
					$stmt=$dbc->prepare($sql);
					$stmt->execute();
			}
			if( ($_POST['interview'])!== null)
			{
					$new_interview = $_POST['interview'];
					$sql = "UPDATE review SET interview=$new_interview WHERE user_id= '".$student_id."' AND application_id='".$_POST['application_id']."'";
					$stmt=$dbc->prepare($sql);
					$stmt->execute();
			}
			elseif( ($_POST['interview'])== null)
			{
					
					$sql = "UPDATE review SET interview=NULL WHERE user_id= '".$student_id."' AND application_id='".$_POST['application_id']."'";
					$stmt=$dbc->prepare($sql);
					$stmt->execute();
			}
			
			$stmt2 = $dbc-> prepare('UPDATE student_info SET hours_working_week=:hours_working_week, hourly_rate=:hourly_rate
			WHERE user_id= :student_id');
		
			$stmt2->execute(array('hours_working_week' => $hours_working_week, 'student_id' => "'".$student_id."'" , 'hourly_rate' => $hourly_rate));
			
			}
			
			
			
	//if the statement fails, display an error
	if (!$stmt)
	{
		die ('SQL Error: ' . mysqli_error($dbc));
	}
	//if the statement doesn't fail, redirect back to dms_viewapp and pass student_id in the url
	else
	{
		header('Location: DOCTOR_view_detailed_student_info.php?id='.$student_id.'&selected_application='.$_POST['application_id']);
		die();
	}

?>
