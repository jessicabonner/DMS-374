<?php
require 'DMS_general_functions.php';
$role_id_array=array("1");
require "DMS_authenticate.php";
$user_id = $_SESSION['user_id'];
require "admin_header.html";
?>

<?php

	if (isset($_GET['message']))
	{
		if ($_GET['message']=="0"){
			echo '<script language="javascript">';
			echo 'alert("The user does not exist in the database")';
			echo '</script>';
		}
		elseif ($_GET['message']=="1"){
			echo '<script language="javascript">';
			echo 'alert("The role was successfully changed")';
			echo '</script>';
		}
	}

?>
					<body>
						<form name="apply_form" action = "ADMIN_manage_roles_connect.php" method= "post">
							<tr>
								<td><p>EID</p></td>
							</tr>
							<tr>
								<td><input type="text" name="id" required></td>
							</tr>
							<!--get all role names to populate dropdown-->
							<?php

							//line 101 of dms_general_functions
							$roles= get_all_roles()
							?>

							<!--specify program application is for & # of unique questions -->
							<tr>
								<td><p>New Role</p></td>
							</tr>
							<tr>
								<td>
									<select name="role_id" required>
										<?php foreach($roles as $role): ?>
											<option value="<?= $role['role_id']; ?>"><?= $role['role_name']; ?></option>
										<?php endforeach; ?>
									</select>
								</td>
							</tr>

							<td><input type='submit' value='Change Role' onclick="return confirm('Are you sure you want to change the Role of this user?')" style="background-color:#bf5700;color:white;text-shadow: #000 0px 0px 1px;" onclick="return confirm('Are you sure you want to change this user's role?')"></td>
						</form>
			</body>
			</html>
