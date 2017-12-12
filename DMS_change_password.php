<?php

	session_start();
	$user_id=$_SESSION['user_id'];
	
	if (isset($_GET['message']))
	{
		if ($_GET['message']=="0"){
			echo '<script language="javascript">';
			echo 'alert("Error: The current password entered is incorrect")';
			echo '</script>';
		}
		elseif ($_GET['message']=="1"){
			echo '<script language="javascript">';
			echo 'alert("Error: The passwords do not match")';
			echo '</script>';
		}
		
	}

?>				
				
				
				<!-- Header -->
				<div class="w3-container" style="margin-top:40px" id="showcase">
					<h1 class="w3-jumbo">
						<b>Change Password</b>
					</h1>

					<hr style="width:100%;border:5px solid #BF5700" align="left" class="w3-round">
				</div>



				<div class="w3-container" id="application" style="margin-top:10px"></div>


					<body>
					<table>
						<form name="change_password_form" action = "DMS_change_password_connect.php" method= "post">
							<tr>
								<td><p>Current Password</p></td>
							</tr>
							<tr>
								<td><input type="text" name="current_password" required></td>
							</tr>
							

							<!--text box for students middle name-->
						<tr>
							<td>New Password</td>
						</tr>
						<tr>
							<td><input type="text" name="password" size="20" maxlength="30" required/></td>
						</tr>

						<!--text box for students middle name-->
						<tr>
							<td>Re-enter password</td>
						</tr>
						<tr>
							<td><input type="text" name="password_2" size="20" maxlength="30" required/></td>
						</tr>

							<td><input type='submit' value='Change password' style="background-color:#bf5700;color:white;text-shadow: #000 0px 0px 1px;" onclick="return confirm('Are you sure you want to change your password?')"></td>
						</form>

						