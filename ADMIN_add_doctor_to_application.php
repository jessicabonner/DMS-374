<?php
	require 'DMS_general_functions.php';
	$role_id_array=array("1");
	require "DMS_authenticate.php";
	$user_id = $_SESSION['user_id'];
	require "admin_header.html";
?>

<?php
	require 'ADMIN_add_doctor_to_application_functionality.php';
	require 'DOCTOR_functionality.php';
	//this will display a message when a user is redirected to this page after completing an action
	if (isset($_GET['error']))
	{
		if ($_GET['error']=="0"){
			echo '<script language="javascript">';
			echo 'alert("The user entered does not exist")';
			echo '</script>';
		}
		if ($_GET['error']=="1"){
			echo '<script language="javascript">';
			echo 'alert("The user entered does not have access to view this page. Please change their role before continuing")';
			echo '</script>';
		}
	}
?>
				<!-- Header -->
				<div class="w3-container" style="margin-top:40px" id="showcase">
					<h1 class="w3-jumbo">
						<b><?php
						$application=select_application($_GET['select_application']);
						echo get_program_from_app_id($_GET['select_application']).' '.$application['term'].' '.$application['year']?></b>
					</h1>

					<hr style="width:100%;border:5px solid #BF5700" align="left" class="w3-round">
				</div>



				<div class="w3-container" id="application" style="margin-top:10px"></div>
					<b>The following people can view who has applied to this program<b><br><br>
					<table class="data-table">

						<thead>
							<th>EID</th>
							<th>view only?</th>
							<th></th<
						</thead>

						<tbody>
				<?php


							$doctor_array= get_doctor_list($_GET['select_application']);
							$application_id=$application['application_id'];

							if (empty($doctor_array))
							{
								echo "No one has access yet";
							}
							else
							{
							foreach($doctor_array as $doctor)
							{

								echo "<tr>";
									echo "<td>".$doctor."<p></td>";

									$role_id=get_role($doctor);
									if ($role_id == '4')
									{
										echo "<td>&#10004;</td>";

									}
									else
									{
										echo "<td></td>";
									}

									echo "<td><a href='ADMIN_add_doctor_to_application_functionality.php?action=delete&id=$doctor&select_application=$application_id'>Remove</a></td>";
								echo "</tr>";
							}
							}




				?>
						</tbody>
					</table>

					<br><br>
					<form name="apply_form" action = "ADMIN_add_doctor_to_application_functionality.php" method= "post">


						<input type="text" name="new_doctor" size="10" maxlength="30" required/>



						<input type="hidden" name="select_application" value=<?php echo $_GET['select_application'] ?>>
						<!--submit button. Will post info.-->
						<input type="submit" value="Give user access to this application" style="background-color:#bf5700;color:white;text-shadow: #000 0px 0px 1px;"/>

						<!--break-->
						<p><br></p>
					</form>
			</body>
	</html>
