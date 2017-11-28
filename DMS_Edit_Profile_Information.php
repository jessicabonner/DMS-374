<?php
	
	require "DMS_db.php";
	
	$user_id=$_GET['user_id'];
	
        
		/* 
		$statement = $dbc->prepare("SELECT * FROM student_info WHERE user_id = :user_id");
		$statement->execute(array(':user_id' => $user_id));
		$row = $statement->fetch(); */
		
		$stmt = $dbc->query("SELECT * FROM student_info WHERE user_id = $user_id");
		$row = $stmt->fetch();
		
		

        ?>
		
		<?php //if($row['Public_Services'] == 1) echo 'checked="checked"'?>

        <form action="DMS_Edit_Profile_Information_Connect.php" method="post">
            First Name
            <input type="text" name="first_name" value="<?php echo $row ['first_name']; ?> " size=10>
            Middle Name
            <input type="text" name="middle_name" value="<?php echo $row ['middle_name']; ?> " size=10>
            Last Name
            <input type="text" name="last_name" value="<?php echo $row ['last_name']; ?>" size=17>
			Street Address
            <input type="text" name="address" value="<?php echo $row ['address']; ?> " size=10>
			City
            <input type="text" name="city" value="<?php echo $row ['city']; ?> " size=10>
			Zip Code
            <input type="text" name="zip_code" value="<?php echo $row ['zip_code']; ?> " size=10>
			Phone Number
            <input type="text" name="phone" value="<?php echo $row ['phone']; ?> " size=10>
			Email
            <input type="text" name="email" value="<?php echo $row ['email']; ?> " size=10>
			<!--radio buttons for if student is eligible to work in US/employed at UT-->
			<tr>
				<td>Are you:</td>
			</tr>
			<tr class="blankrow">
				<td><br></td>
			</tr>
			<tr>
				<td><input type="radio" name="employment" value="UT" <?php if($row['employment'] == "UT") echo 'checked="checked"'?> required>Currently employed at UT<br></td>
			</tr>
			<tr>
				<td><input type="radio" name="employment" value="eligible"<?php if($row['employment'] == "eligible") echo 'checked="checked"'?>>Eligible to work in the US with no restrictions<br></td>
			</tr>
			<tr>
				<td><input type="radio" name="employment" value="none"<?php if($row['employment'] == "none") echo 'checked="checked"'?>>None of the above<br></td>
			</tr>



			<!--break between radio button questions-->
			<tr>
				<td><br></td>
			</tr>

			<!--Radio buttons for student's classification-->
			<tr>
				<td>What is your classification?</td>
			</tr>
			<tr class="blankrow">
				<td><br></td>
			<tr>
				<td><input type="radio" name="classification" value="1st year" <?php if($row['classification'] == "1st year") echo 'checked="checked"'?> required>1st year undergrad<br></td>
			</tr>
			<tr>
				<td><input type="radio" name="classification" value="2nd year" <?php if($row['classification'] == "2nd year") echo 'checked="checked"'?>>2nd year undergrad<br></td>
			</tr>
			<tr>
				<td><input type="radio" name="classification" value="3rd year" <?php if($row['classification'] == "3rd year") echo 'checked="checked"'?>>3rd year undergrad<br></td>
			</tr>
			<tr>
				<td><input type="radio" name="classification" value="4th year" <?php if($row['classification'] == "4th year") echo 'checked="checked"'?>>4th year undergrad<br></td>
			</tr>
			<tr>
				<td><input type="radio" name="classification" value="5th year" <?php if($row['classification'] == "5th year") echo 'checked="checked"'?>>5th year undergrad<br></td>
			</tr>
			<tr>
				<td><input type="radio" name="classification" value="Grad" <?php if($row['classification'] == "Grad") echo 'checked="checked"'?>>Graduate Student<br></td>
			</tr>
			<tr>
				<td><input type="radio" name="classification" value="Other" <?php if($row['classification'] == "Other") echo 'checked="checked"'?>>Other<br></td>
			</tr>

			Middle Name
            <input type="text" name="degree_type" value="<?php echo $row ['degree_type']; ?> " size=10>
			Major
            <input type="text" name="major" value="<?php echo $row ['major']; ?> " size=10>
			Second Major
            <input type="text" name="major_2" value="<?php echo $row ['major_2']; ?> " size=10>
			GPA
            <input type="text" name="GPA" value="<?php echo $row ['GPA']; ?> " size=10>
			
			<!--break-->
			<tr>
				<td><br></td>
			</tr>
			<!--Radio buttons for if they have worked at dell med school before-->
			<tr>
				<td>Have you previously worked at Dell Medical School?</td>
			</tr>
			<tr class="blankrow">
				<td><br></td>
			<tr>
				<td><input type="radio" name="worked_at_dms" value="1" required <?php if($row['worked_at_dms'] == 1) echo 'checked="checked"'?>>Yes<br></td>
			</tr>
			<tr>
				<td><input type="radio" name="worked_at_dms" value="0" <?php if($row['worked_at_dms'] == 0) echo 'checked="checked"'?>>No<br></td>
			</tr>


			<!--break-->
			<tr>
				<td><br></td>
			</tr>


			<!--radio buttons for if they have volunteered at seton before-->
			<tr>
				<td>Have you previously volunteered at Seton Hospital?</td>
			</tr>
			<tr class="blankrow">
				<td><br></td>
			<tr>
				<td><input type="radio" name="volunteered_at_seton" value="1" required <?php if($row['volunteered_at_seton'] == 1) echo 'checked="checked"'?>>Yes<br></td>
			</tr>
			<tr>
				<td><input type="radio" name="volunteered_at_seton" value="0" <?php if($row['volunteered_at_seton'] == 0) echo 'checked="checked"'?>>No<br></td>
			</tr>

			<!--break-->
			<tr>
				<td><br></td>
			</tr>


			<!--Radio buttons for if they have a car-->
			<tr>
				<td>Do you own a car?</td>
			</tr>
			<tr class="blankrow">
				<td><br></td>
			<tr>
				<td><input type="radio" name="car" value="1" required <?php if($row['car'] == 1) echo 'checked="checked"'?>>Yes<br></td>
			</tr>
			<tr>
				<td><input type="radio" name="car" value="0" <?php if($row['car'] == 0) echo 'checked="checked"'?>>No<br></td>
			</tr>
			
			Semester Commitment
            <input type="text" name="semester_commitment" value="<?php echo $row ['semester_commitment']; ?> " size=10>
			
			<table>
			<tr>What is your availability for the upcoming semester?</tr>
			<tr class="blankrow">
				<td><br></td>



			<tr>
				<td><input type="checkbox" name="availability_list[]" value="NA" required>Unknown</td>
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
				<td><input type="checkbox" name="availability_list[]" value="M8" id="M8" required></td>
				<td><input type="checkbox" name="availability_list[]" value="T8" id="T8" required></td>
				<td><input type="checkbox" name="availability_list[]" value="W8" id="W8" required></td>
				<td><input type="checkbox" name="availability_list[]" value="TH8" id="TH8" required></td>
				<td><input type="checkbox" name="availability_list[]" value="F8" id="F8" required></td>
			</tr>

			<tr>
				<td>9am-10am</td>
				<td><input type="checkbox" name="availability_list[]" value="M9" id="M9" required></td>
				<td><input type="checkbox" name="availability_list[]" value="T9" id="T9" required></td>
				<td><input type="checkbox" name="availability_list[]" value="W9" id="W9" required></td>
				<td><input type="checkbox" name="availability_list[]" value="TH9" id="TH9" required></td>
				<td><input type="checkbox" name="availability_list[]" value="F9" id="F9" required></td>
			</tr>

			<tr>
				<td>10am-11am</td>
				<td><input type="checkbox" name="availability_list[]" value="M10" id="M10" required></td>
				<td><input type="checkbox" name="availability_list[]" value="T10" id="T10" required></td>
				<td><input type="checkbox" name="availability_list[]" value="W10" id="W10" required></td>
				<td><input type="checkbox" name="availability_list[]" value="TH10" id="TH10" required></td>
				<td><input type="checkbox" name="availability_list[]" value="F10" id="F10" required></td>
			</tr>

			<tr>
				<td>11am-12pm</td>
				<td><input type="checkbox" name="availability_list[]" value="M11" id="M11" required></td>
				<td><input type="checkbox" name="availability_list[]" value="T11" id="T11" required></td>
				<td><input type="checkbox" name="availability_list[]" value="W11" id="W11" required></td>
				<td><input type="checkbox" name="availability_list[]" value="TH11" id="TH11" required></td>
				<td><input type="checkbox" name="availability_list[]" value="F11" id="F11" required></td>
			</tr>

			<tr>
				<td>12am-1pm</td>
				<td><input type="checkbox" name="availability_list[]" value="M12" id="M12" required></td>
				<td><input type="checkbox" name="availability_list[]" value="T12" id="T12" required></td>
				<td><input type="checkbox" name="availability_list[]" value="W12" id="W12" required></td>
				<td><input type="checkbox" name="availability_list[]" value="TH12" id="TH12" required></td>
				<td><input type="checkbox" name="availability_list[]" value="F12" id="F12" required></td>
			</tr>

			<tr>
				<td>1pm-2pm</td>
				<td><input type="checkbox" name="availability_list[]" value="M1" id="M1" required></td>
				<td><input type="checkbox" name="availability_list[]" value="T1" id="T1" required></td>
				<td><input type="checkbox" name="availability_list[]" value="W1" id="W1" required></td>
				<td><input type="checkbox" name="availability_list[]" value="TH1" id="TH1" required></td>
				<td><input type="checkbox" name="availability_list[]" value="F1" id="F1" required></td>
			</tr>

			<tr>
				<td>2pm-3pm</td>
				<td><input type="checkbox" name="availability_list[]" value="M2" id="M2" required></td>
				<td><input type="checkbox" name="availability_list[]" value="T2" id="T2" required></td>
				<td><input type="checkbox" name="availability_list[]" value="W2" id="W2" required></td>
				<td><input type="checkbox" name="availability_list[]" value="TH2" id="TH2" required></td>
				<td><input type="checkbox" name="availability_list[]" value="F2" id="F2" required></td>
			</tr>

			<tr>
				<td>3pm-4pm</td>
				<td><input type="checkbox" name="availability_list[]" value="M3" id="M3" required></td>
				<td><input type="checkbox" name="availability_list[]" value="T3" id="T3" required></td>
				<td><input type="checkbox" name="availability_list[]" value="W3" id="W3" required></td>
				<td><input type="checkbox" name="availability_list[]" value="TH3" id="TH3" required></td>
				<td><input type="checkbox" name="availability_list[]" value="F3" id="F3" required></td>
			</tr>

			<tr>
				<td>4pm-5pm</td>
				<td><input type="checkbox" name="availability_list[]" value="M4" id="M4" required></td>
				<td><input type="checkbox" name="availability_list[]" value="T4" id="T4"required></td>
				<td><input type="checkbox" name="availability_list[]" value="W4" id="W4"required></td>
				<td><input type="checkbox" name="availability_list[]" value="TH4" id="TH4" required></td>
				<td><input type="checkbox" name="availability_list[]" value="F" id="F4" required></td>
			</tr>

			<tr>
				<td><br></td>
			</tr>




		</table>


		<!--break-->
		<tr>
			<td><br></td>
		</tr>


		<!--submit button. Will post info.-->
		<td colspan="1" style="text-align: center; float: center;"><input type="submit" name="submit" value="Update Profile Information"> </td>


		<!--break-->
		<p><br></p>


	</form>


	<!--JQuery used to ensure at least one checkbox is checked off for availability-->

	<script>

		//function will remove required tags from checkboxes as long as at least one box is checked off
		$(function(){

			var requiredCheckboxes = $(':checkbox[required]');

			requiredCheckboxes.change(function(){

				if(requiredCheckboxes.is(':checked')) {
					requiredCheckboxes.removeAttr('required');
				}

				else {
					requiredCheckboxes.attr('required', 'required');
				}
			});

		});
		
	</script>
</body>
</div>

</html>

            
        </form>
        
        </p>
    </body>
</html>