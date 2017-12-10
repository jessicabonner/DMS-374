<?php

if(isset($_POST['submit_password']) && $_POST['email'] && $_POST['password'])
{
	require "DMS_db.php";
	$email=$_POST['email'];
	$pass=$_POST['password'];
	
	$password_hash=hash('sha512',$pass);

  	//$select=mysql_query("update user set password='$pass' where email='$email'");

	$sql1 = "SELECT user_id FROM student_info WHERE email = '".$email."'";
	$stmt=$dbc->prepare($sql1);
	$stmt->execute();
	
	while ($row=$stmt->fetch(PDO::FETCH_ASSOC))
	{
		$user_id= $row['user_id'];
	}
	
	$sql = "UPDATE user SET password = '".$password_hash."' WHERE user_id ='".$user_id."'";
	$stmt=$dbc->prepare($sql);
	$stmt->execute();
	
	//if the statement fails, display an error
	if (!$stmt)
	{
		die ('SQL Error: ' . mysqli_error($dbc));
	}
	//if the statement doesn't fail, redirect back to dms_viewapp and pass student_id in the url
	else
	{	
		echo "You have successfully reset your password. Please login<td> <a href='STUDENT_dashboard.php'> here.</a> </td>";
		
	}
	//header('Location: STUDENT_dashboard.php');
	//die();
}
?>