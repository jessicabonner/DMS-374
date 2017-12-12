<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

//require '/Applications/XAMPP/xamppfiles/htdocs/dms-374/phpmailer/libs/PHPMailer-Master/src/Exception.php';
//require '/Applications/XAMPP/xamppfiles/htdocs/dms-374/phpmailer/libs/PHPMailer-Master/src/PHPMailer.php';
//require '/Applications/XAMPP/xamppfiles/htdocs/dms-374/phpmailer/libs/PHPMailer-Master/src/SMTP.php';

require '/var/www/html/phpmailer/libs/PHPMailer-master/src/Exception.php';
require '/var/www/html/phpmailer/libs/PHPMailer-master/src/PHPMailer.php';
require '/var/www/html/phpmailer/libs/PHPMailer-master/src/SMTP.php';

	if(isset($_POST['submit_email']) && $_POST['email'])
	{
  	  require "DMS_db.php";

	  $email = $_POST['email'];

	  $sql = "SELECT student_info.email, student_info.user_id, user.password FROM student_info INNER JOIN user ON student_info.user_id = user.user_id WHERE student_info.email ='".$email."'";
	  //$x = $sql->fetch();
	  $x=$dbc->prepare($sql);
	  $x->execute();

	  while ($row=$x->fetch(PDO::FETCH_ASSOC))
	  {
		  $user_id2= $row['user_id'];
	      $email2= $row['email'];
	      $pass2= $row['password'];  
	  }

//$sql = "UPDATE review SET accepted_by_dms = '".$new_accepted_by_DMS."', application_accept_date='".$current_date."'  WHERE user_id ='".$student_id."' AND application_id='".$_POST['application_id']."'";

  
  //$select=mysql_query("select email,password from user where email='$email'");
  /*if(mysql_num_rows($select)==1)
  {
    while($row=mysql_fetch_array($select))
    {
      $email=md5($row['email']);
      $pass=md5($row['password']);
    }
  */
    //$link="<a href='www.samplewebsite.com/reset.php?key=".$email."&reset=".$pass."'>Click To Reset password</a>";
	$link="<a href='localhost/dms-374/DMS_reset_password.php?key=".$email2."&reset=".$pass2."'>Click To Reset password</a>";

    //require_once('phpmail/PHPMailerAutoload.php');
	
	$from = 'DellMed.Notifications@gmail.com'; //This will need to change
	$from_name = 'Dell Medical School';
	$subject = 'Reset Password - Dell Medical School';
	$mail = new PHPMailer(true);
	
	//$mail->SMTPDebug = 2;   
	$mail->IsSMTP();
	$mail->Host = 'smtp.gmail.com'; 
	$mail->SMTPAuth = true;
	$mail->Username = 'DellMed.Notifications@gmail.com';  // Sender's gmail address
	$mail->Password = 'KCal7Z0dp';  // Sender's gmail password
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587; 
	$mail->From = "$from";  // Sender's email address
	$mail->FromName = "$from_name"; // senders name 
	//$mail->Body = "$msg";
	$mail->Body = "<p>Here is your reset password link '".$link."'.</p><p>Sincerely,</p>DMS Team";
	
	$mail->AltBody = 'Here is your reset password link "'.$link.'". Sincerely, DMS Team';
	
	$mail->Subject = "$subject";
	$mail->AddAddress("$email2");  // Recipient

    	if($mail->Send())
    	{
    		echo "A message has been emailed. Check your email and click on the link to reset your password.";
    	}
    	else
    	{
    		echo "Mail Error - >".$mail->ErrorInfo;
    	}
	
}

?>