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
	<form name="apply_form" action = "STUDENT_create_profile_functionality.php" method= "post">

		<table>

			<!--text box for students first name-->
			<tr>
				<td>Username</td>
			</tr>
			<tr>
				<td><input type="text" name="username" size="20" maxlength="30" required/></td>
			</tr>

		
			<!--text box for students middle name-->
			<tr>
				<td>Password</td>
			</tr>
			<tr>
				<td><input type="text" name="password" size="20" maxlength="30" required/></td>
			</tr>
			
			
			<!--break-->
		<tr>
			<td><br></td>
		</tr>


		<!--submit button. Will post info.-->
		<td colspan="1" style="text-align: center; float: center;"><input type="submit" value="Create Profile"/> </td>
		
		
		<!--break-->
		<p><br></p>


	</form>
</body>