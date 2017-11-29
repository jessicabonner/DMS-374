<?php
	
	require "DMS_db.php";
	
	$user_id=$_GET['user_id'];
	
        
		
	$statement = $dbc->prepare("SELECT * FROM student_info WHERE user_id = :user_id");
	$statement->execute(array(':user_id' => $user_id));
	$row = $statement->fetch(); 
		
		/* $stmt = $dbc->query("SELECT * FROM student_info WHERE user_id = $user_id");
		$row = $stmt->fetch(); */
		
	$availability_array=explode(',',$row['availability']);
	$first_name=$row['first_name'];
	$middle_name=$row['middle_name'];
	$last_name=$row['last_name'];
	$address=$row['address'];
	$city=$row['city'];
	$state=$row['state'];
	$zip_code=$row['zip_code'];
	$phone=$row['phone'];
	$email=$row['email'];
	$employment=$row['employment'];
	$student_type=$row['student_type'];
	$classification=$row['classification'];
	$degree_type=$row['degree_type'];
	$major=$row['major'];
	$major_2=$row['major_2'];
	$GPA=$row['GPA'];
	if ($row['worked_at_dms']=="0")
	{
		$worked_at_dms="No";
	}
	else
	{
		$worked_at_dms="Yes";
	}
	if($row['volunteered_at_seton']=="0")
	{
		$volunteered_at_seton="No";
	}
	else
	{
		$volunteered_at_seton="Yes";
	}
	if($row['car']=="0")
	{
		$car="No";
	}
	else
	{
			$car="Yes";
	}
	$semester_commitment=$row['semester_commitment'];
	
		echo "Please confirm your profile information<br>";
		
		echo "<tr><td><b>First Name</b></td> <td>$first_name</td></tr><br>";
		echo "<tr><td><b>Middle Name</b></td> <td>$middle_name</td></tr><br>";
		echo "<tr><td><b>Last Name</b></td> <td>$last_name</td></tr><br>";
		echo "<tr><td><b>Address</b></td> <td>$address</td></tr><br>";
		echo "<tr><td><b>City</b></td> <td>$city</td></tr><br>";
		echo "<tr><td><b>State</b></td> <td>$state</td></tr><br>";
		echo "<tr><td><b>Zip</b></td> <td>$zip_code</td></tr><br>";
		echo "<tr><td><b>Phone</b></td> <td>$phone</td></tr><br>";
		echo "<tr><td><b>Employment</b></td> <td>$employment</td></tr><br>";
		echo "<tr><td><b>Type of student</b></td> <td>$student_type</td></tr><br>";
		echo "<tr><td><b>Classification</b></td> <td>$classification</td></tr><br>";
		echo "<tr><td><b>degree type</b></td> <td>$degree_type</td></tr><br>";
		echo "<tr><td><b>Major</b></td> <td>$major</td></tr><br>";
		echo "<tr><td><b>2nd Major</b></td> <td>$major_2</td></tr><br>";
		echo "<tr><td><b>GPA</b></td> <td>$GPA</td></tr><br>";
		echo "<tr><td><b>Have you worked at DMS before?</b></td> <td>$worked_at_dms</td></tr><br>";
		echo "<tr><td><b>Have you volunteered at Seton before?</b></td> <td>$volunteered_at_seton</td></tr><br>";
		echo "<tr><td><b>Dp you own a car?</b></td> <td>$car</td></tr><br>";
		echo "<tr><td><b>How many semesters are you willing to commit?</b></td> <td>$semester_commitment</td></tr><br>";
	?>
		<table>
			<tr>What is your availability for the upcoming semester?</tr>
			<tr class="blankrow">
				<td><br></td>



			<tr>
				<td><input type="checkbox" name="availability_list[]" value="NA" <?php if (in_array("NA",$availability_array))echo 'checked="checked"'?>disabled>Unknown</td>
			</tr>

			<!--create column names-->
			<tr>
				<td></td>
				<td>Monday</td>
				<td>Tuesday</td>
				<td>Wednesday</td>
				<td>Thursday</td>
				<td>Friday</td>
			</tr>
			<tr class="blankrow">
				<td><br></td>


			<!--input checkboxes and row names-->
			<tr>
				<td>8am-9am</td>
				<td><input type="checkbox" name="availability_list[]" value="M8" id="M8" <?php if (in_array("M8",$availability_array))echo 'checked="checked"'?> disabled></td>
				<td><input type="checkbox" name="availability_list[]" value="T8" id="T8" <?php if (in_array("T8",$availability_array))echo 'checked="checked"'?>disabled></td>
				<td><input type="checkbox" name="availability_list[]" value="W8" id="W8" <?php if (in_array("W8",$availability_array))echo 'checked="checked"'?>disabled></td>
				<td><input type="checkbox" name="availability_list[]" value="TH8" id="TH8" <?php if (in_array("TH8",$availability_array))echo 'checked="checked"'?>disabled></td>
				<td><input type="checkbox" name="availability_list[]" value="F8" id="F8" <?php if (in_array("F8",$availability_array))echo 'checked="checked"'?>disabled></td>
			</tr>

			<tr>
				<td>9am-10am</td>
				<td><input type="checkbox" name="availability_list[]" value="M9" id="M9" <?php if (in_array("M9",$availability_array))echo 'checked="checked"'?>disabled></td>
				<td><input type="checkbox" name="availability_list[]" value="T9" id="T9" <?php if (in_array("T9",$availability_array))echo 'checked="checked"'?>disabled></td>
				<td><input type="checkbox" name="availability_list[]" value="W9" id="W9" <?php if (in_array("W9",$availability_array))echo 'checked="checked"'?>disabled></td>
				<td><input type="checkbox" name="availability_list[]" value="TH9" id="TH9" <?php if (in_array("TH9",$availability_array))echo 'checked="checked"'?>disabled></td>
				<td><input type="checkbox" name="availability_list[]" value="F9" id="F9" <?php if (in_array("F9",$availability_array))echo 'checked="checked"'?>disabled></td>
			</tr>

			<tr>
				<td>10am-11am</td>
				<td><input type="checkbox" name="availability_list[]" value="M10" id="M10" <?php if (in_array("M10",$availability_array))echo 'checked="checked"'?>disabled></td>
				<td><input type="checkbox" name="availability_list[]" value="T10" id="T10" <?php if (in_array("T10",$availability_array))echo 'checked="checked"'?>disabled></td>
				<td><input type="checkbox" name="availability_list[]" value="W10" id="W10" <?php if (in_array("W10",$availability_array))echo 'checked="checked"'?>disabled></td>
				<td><input type="checkbox" name="availability_list[]" value="TH10" id="TH10" <?php if (in_array("TH10",$availability_array))echo 'checked="checked"'?>disabled></td>
				<td><input type="checkbox" name="availability_list[]" value="F10" id="F10" <?php if (in_array("F10",$availability_array))echo 'checked="checked"'?>disabled></td>
			</tr>

			<tr>
				<td>11am-12pm</td>
				<td><input type="checkbox" name="availability_list[]" value="M11" id="M11" <?php if (in_array("M11",$availability_array))echo 'checked="checked"'?>disabled></td>
				<td><input type="checkbox" name="availability_list[]" value="T11" id="T11" <?php if (in_array("T11",$availability_array))echo 'checked="checked"'?>disabled></td>
				<td><input type="checkbox" name="availability_list[]" value="W11" id="W11" <?php if (in_array("W11",$availability_array))echo 'checked="checked"'?>disabled></td>
				<td><input type="checkbox" name="availability_list[]" value="TH11" id="TH11" <?php if (in_array("TH11",$availability_array))echo 'checked="checked"'?>disabled></td>
				<td><input type="checkbox" name="availability_list[]" value="F11" id="F11" <?php if (in_array("F11",$availability_array))echo 'checked="checked"'?>disabled></td>
			</tr>

			<tr>
				<td>12am-1pm</td>
				<td><input type="checkbox" name="availability_list[]" value="M12" id="M12" <?php if (in_array("M12",$availability_array))echo 'checked="checked"'?>disabled></td>
				<td><input type="checkbox" name="availability_list[]" value="T12" id="T12" <?php if (in_array("T12",$availability_array))echo 'checked="checked"'?>disabled></td>
				<td><input type="checkbox" name="availability_list[]" value="W12" id="W12" <?php if (in_array("W12",$availability_array))echo 'checked="checked"'?>disabled></td>
				<td><input type="checkbox" name="availability_list[]" value="TH12" id="TH12" <?php if (in_array("TH12",$availability_array))echo 'checked="checked"'?>disabled></td>
				<td><input type="checkbox" name="availability_list[]" value="F12" id="F12" <?php if (in_array("F12",$availability_array))echo 'checked="checked"'?>disabled></td>
			</tr>

			<tr>
				<td>1pm-2pm</td>
				<td><input type="checkbox" name="availability_list[]" value="M1" id="M1" <?php if (in_array("M1",$availability_array))echo 'checked="checked"'?>disabled></td>
				<td><input type="checkbox" name="availability_list[]" value="T1" id="T1" <?php if (in_array("T1",$availability_array))echo 'checked="checked"'?>disabled></td>
				<td><input type="checkbox" name="availability_list[]" value="W1" id="W1" <?php if (in_array("W1",$availability_array))echo 'checked="checked"'?>disabled></td>
				<td><input type="checkbox" name="availability_list[]" value="TH1" id="TH1" <?php if (in_array("TH1",$availability_array))echo 'checked="checked"'?>disabled></td>
				<td><input type="checkbox" name="availability_list[]" value="F1" id="F1" <?php if (in_array("F1",$availability_array))echo 'checked="checked"'?>disabled></td>
			</tr>

			<tr>
				<td>2pm-3pm</td>
				<td><input type="checkbox" name="availability_list[]" value="M2" id="M2" <?php if (in_array("M2",$availability_array))echo 'checked="checked"'?>disabled></td>
				<td><input type="checkbox" name="availability_list[]" value="T2" id="T2" <?php if (in_array("T2",$availability_array))echo 'checked="checked"'?>disabled></td>
				<td><input type="checkbox" name="availability_list[]" value="W2" id="W2" <?php if (in_array("W2",$availability_array))echo 'checked="checked"'?>disabled></td>
				<td><input type="checkbox" name="availability_list[]" value="TH2" id="TH2" <?php if (in_array("TH2",$availability_array))echo 'checked="checked"'?>disabled></td>
				<td><input type="checkbox" name="availability_list[]" value="F2" id="F2" <?php if (in_array("F2",$availability_array))echo 'checked="checked"'?>disabled></td>
			</tr>

			<tr>
				<td>3pm-4pm</td>
				<td><input type="checkbox" name="availability_list[]" value="M3" id="M3" <?php if (in_array("M3",$availability_array))echo 'checked="checked"'?>disabled></td>
				<td><input type="checkbox" name="availability_list[]" value="T3" id="T3" <?php if (in_array("T3",$availability_array))echo 'checked="checked"'?>disabled></td>
				<td><input type="checkbox" name="availability_list[]" value="W3" id="W3" <?php if (in_array("W3",$availability_array))echo 'checked="checked"'?>disabled></td>
				<td><input type="checkbox" name="availability_list[]" value="TH3" id="TH3" <?php if (in_array("TH3",$availability_array))echo 'checked="checked"'?>disabled></td>
				<td><input type="checkbox" name="availability_list[]" value="F3" id="F3" <?php if (in_array("F3",$availability_array))echo 'checked="checked"'?>disabled></td>
			</tr>

			<tr>
				<td>4pm-5pm</td>
				<td><input type="checkbox" name="availability_list[]" value="M4" id="M4" <?php if (in_array("M4",$availability_array))echo 'checked="checked"'?>disabled></td>
				<td><input type="checkbox" name="availability_list[]" value="T4" id="T4"<?php if (in_array("T4",$availability_array))echo 'checked="checked"'?>disabled></td>
				<td><input type="checkbox" name="availability_list[]" value="W4" id="W4"<?php if (in_array("W4",$availability_array))echo 'checked="checked"'?>disabled></td>
				<td><input type="checkbox" name="availability_list[]" value="TH4" id="TH4" <?php if (in_array("TH4",$availability_array))echo 'checked="checked"'?>disabled></td>
				<td><input type="checkbox" name="availability_list[]" value="F4" id="F4" <?php if (in_array("F4",$availability_array))echo 'checked="checked"'?>disabled></td>
			</tr>

			<tr>
				<td><br></td>
			</tr>
			

		</table>
		
		<form action="DMS_Edit_Profile_Information.php" method="get">
			<input type="hidden" name="user_id" value="<?php echo $user_id?>"/>
			<input type="submit" value="Edit"/> 
		</form>
		
		<form action="DMS_Select_Program_Apply.php" method="get">
		<input type="hidden" name="user_id" value="<?php echo $user_id?>"/>
			<input type="submit" value="Confirm"/> 
		</form>
		

        