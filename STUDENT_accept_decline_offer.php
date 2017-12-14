<?php
require "DMS_general_functions.php";
$role_id_array=array("5");
require "DMS_authenticate.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

//require '/Applications/XAMPP/xamppfiles/htdocs/dms-374/phpmailer/libs/PHPMailer-Master/src/Exception.php';
//require '/Applications/XAMPP/xamppfiles/htdocs/dms-374/phpmailer/libs/PHPMailer-Master/src/PHPMailer.php';
//require '/Applications/XAMPP/xamppfiles/htdocs/dms-374/phpmailer/libs/PHPMailer-Master/src/SMTP.php';


require './Exception.php';
require './PHPMailer.php';



	

	require "DMS_db.php";

	
	$user_id=$_SESSION['user_id'];
	
	$application_id=$_POST['application_id'];
	
	$program_id= get_program_id_from_app_id($application_id);

	if (isset($_POST['accept']))
	{
		$sql = "UPDATE review SET student_accept_offer = '1' WHERE user_id ='".$user_id."' AND application_id='".$application_id."'";
		$stmt=$dbc->prepare($sql);
		$stmt->execute();
		
		$sql = "UPDATE student_info SET program_id=".$program_id."  WHERE user_id ='".$user_id."'";
		$stmt=$dbc->prepare($sql);
		$stmt->execute();
		
		
		$sql1 = "SELECT student_accept_offer FROM review WHERE user_id ='".$user_id."' AND application_id='".$application_id."'";
		$result=$dbc->prepare($sql1);
		
		//while ($row=$result->fetch(PDO::FETCH_ASSOC))
		//{
		//	$student_accept_offer= $row['student_accept_offer'];
		//}
		
		//If the student accepts an offer, this will send an email notification and Biographical Data Form to the student
		
		//if ($student_accept_offer == '1')
		//{
			
			
		//Gets the program information for the accepted application
			$sql2="SELECT * FROM applications WHERE application_id='".$application_id."'";
			$stmt=$dbc->prepare($sql2);
	
			while ($row=$stmt->fetch(PDO::FETCH_ASSOC))
			{
				$program_id= $row['program_id'];
			}
			
			//The Email Sender information
    		$from = 'DellMed.Notifications@gmail.com'; //This will need to change
    		$from_name = 'Dell Medical School';
   	 		$subject = 'ACTION Required: Employee Biographical Information Form';
			$msg = "You have officially accepted your offer. If you've accepted a non-paid position, please fill out the attached Employee Biographical Information Form which will start the onboarding process. Email your completed form to Katherine Clayton at kclayon@austin.utexas.edu. If you accepted a paid position, please disregard the Employee Biographical Information Form and directly contact Katherine Clayton about your recently accepted paid position.";
		
			
	
			//Finds the email of the student that accepted offer
			$sql2 = "SELECT email FROM student_info WHERE user_id = '".$user_id."'";
			$query = $dbc->query($sql2);
			
			
			//$recipients_array = array();
			
			while ($row=$query->fetch(PDO::FETCH_ASSOC))
			{
				$recipient = $row['email'];
			}

		    	$mail = new PHPMailer;
				//$mail->SMTPDebug = 2;   
		    	//$mail->IsSMTP();
				/*
		    	$mail->Host = 'smtp.gmail.com'; 
		    	$mail->SMTPAuth = true;
		    	$mail->Username = 'DellMed.Notifications@gmail.com';  // Sender's gmail address
		    	$mail->Password = 'KCal7Z0dp';  // Sender's gmail password
			    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
			    $mail->Port = 587; 
				*/
		    	$mail->From = "$from";  // Sender's email address
		    	$mail->FromName = "$from_name"; // senders name 
		    	$mail->Body = "$msg";
		    	$mail->Subject = "$subject";
				//$mail->addAttachment('/Applications/XAMPP/xamppfiles/htdocs/dms-374/phpmailer/files/Biographical Data Form.pdf');
				$mail->addAttachment('./Biographical Data Form1.pdf');
		    	$mail->AddAddress($recipient);  // Recipient
		
					if(!$mail->send())
			 		{
			  			echo 'Email sent to:' . $recipient . '<br/ >';
			      	  	echo "Mailer Error: " . $mail->ErrorInfo;
			   		}
					/*
			    	else
			    	{
			       	 	echo 'Email sent to:' . $recipient . '<br/ >';
			    	}	
					*/

		
				
					//}
		
		
		header("Location: STUDENT_dashboard.php?message=2");
		die();
	}
	elseif (isset($_POST['decline']))
	{
		$sql = "UPDATE review SET student_accept_offer = '0' WHERE user_id ='".$user_id."' AND application_id='".$application_id."'";
		$stmt=$dbc->prepare($sql);
		$stmt->execute();
		
		header("Location: STUDENT_dashboard.php?message=3");
		die();
	}




?>