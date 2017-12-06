<?php
	if(isset($_GET['error']))
	{
		if ($_GET['error']=="1")
		{
			echo "Incorrect username or password";
		}
		
	}
?>

<!--Form to allow students to apply to dell med school internship programs-->
<!DOCTYPE html>
<html>
<head>
	<link href='application.css' type='text/css' rel='stylesheet'>
	<!--<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>-->
	<script src="https://code.jquery.com/jquery-3.1.1.js"></script>
</head>


<body>
	<!--this form will post to DMS_connect in order to submit data to DB-->
	<form name="login_form" action = "DMS_login_connect.php" method= "get">

		<table>

			<!--text box for students first name-->
			<tr>
				<td>Email address</td>
			</tr>
			<tr>
				<td><input type="text" name="username" size="20" maxlength="30" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$"/></td>
			</tr>

			<!--text box for students middle name-->
			<tr>
				<td>Enter your password</td>
			</tr>
			<tr>
				<td><input type="text" name="password" size="20" maxlength="30" required/></td>
			</tr>
			
			
			<!--break-->
		<tr>
			<td><br></td>
		</tr>


		<!--submit button. Will post info.-->
		<td colspan="1" style="text-align: center; float: center;"><input type="submit" value="Login"/> </td>
		
		
		<!--break-->
		<p><br></p>


	</form>
</body>