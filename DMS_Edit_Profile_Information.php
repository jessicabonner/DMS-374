<?php
	
	require "DMS_db.php";
	
	$user_id=$_GET['user_id'];
	
        
		/* 
		$statement = $dbc->prepare("SELECT * FROM student_info WHERE user_id = :user_id");
		$statement->execute(array(':user_id' => $user_id));
		$row = $statement->fetch(); */
		
		$stmt = $dbc->query("SELECT * FROM student_info WHERE user_id = $user_id");
		$row = $stmt->fetch();
		
		$availability_array=explode(',',$row['availability'])
		
		

        ?>
		
		<head>
			<script src="https://code.jquery.com/jquery-3.1.1.js"></script>
		</head>

        <form action="DMS_Edit_Profile_Information_Connect.php" method="post">
			<input type="hidden" name="user_id" value=<?php echo $user_id ?>>
		
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
			<tr>
				<td>State</td>
			</tr>
			<tr>
				<td><select name="state" required>
					<option value="AL" <?php if($row['state'] == "AL") echo 'selected="selected"'?>>Alabama</option>
					<option value="AK" <?php if($row['state'] == "AK") echo 'selected="selected"'?>>Alaska</option>
					<option value="AZ"<?php if($row['state'] == "AZ") echo 'selected="selected"'?>>Arizona</option>
					<option value="AR"<?php if($row['state'] == "AR") echo 'selected="selected"'?>>Arkansas</option>
					<option value="CA"<?php if($row['state'] == "CA") echo 'selected="selected"'?>>California</option>
					<option value="CO"<?php if($row['state'] == "CO") echo 'selected="selected"'?>>Colorado</option>
					<option value="CT"<?php if($row['state'] == "CT") echo 'selected="selected"'?>>Connecticut</option>
					<option value="DE"<?php if($row['state'] == "DE") echo 'selected="selected"'?>>Delaware</option>
					<option value="DC"<?php if($row['state'] == "DC") echo 'selected="selected"'?>>District Of Columbia</option>
					<option value="FL"<?php if($row['state'] == "FL") echo 'selected="selected"'?>>Florida</option>
					<option value="GA"<?php if($row['state'] == "GA") echo 'selected="selected"'?>>Georgia</option>
					<option value="HI"<?php if($row['state'] == "HI") echo 'selected="selected"'?>>Hawaii</option>
					<option value="ID"<?php if($row['state'] == "ID") echo 'selected="selected"'?>>Idaho</option>
					<option value="IL"<?php if($row['state'] == "IL") echo 'selected="selected"'?>>Illinois</option>
					<option value="IN"<?php if($row['state'] == "IN") echo 'selected="selected"'?>>Indiana</option>
					<option value="IA"<?php if($row['state'] == "IA") echo 'selected="selected"'?>>Iowa</option>
					<option value="KS"<?php if($row['state'] == "KS") echo 'selected="selected"'?>>Kansas</option>
					<option value="KY"<?php if($row['state'] == "KY") echo 'selected="selected"'?>>Kentucky</option>
					<option value="LA"<?php if($row['state'] == "LA") echo 'selected="selected"'?>>Louisiana</option>
					<option value="ME"<?php if($row['state'] == "ME") echo 'selected="selected"'?>>Maine</option>
					<option value="MD"<?php if($row['state'] == "MD") echo 'selected="selected"'?>>Maryland</option>
					<option value="MA"<?php if($row['state'] == "MA") echo 'selected="selected"'?>>Massachusetts</option>
					<option value="MI"<?php if($row['state'] == "MI") echo 'selected="selected"'?>>Michigan</option>
					<option value="MN"<?php if($row['state'] == "MN") echo 'selected="selected"'?>>Minnesota</option>
					<option value="MS"<?php if($row['state'] == "MS") echo 'selected="selected"'?>>Mississippi</option>
					<option value="MO"<?php if($row['state'] == "MO") echo 'selected="selected"'?>>Missouri</option>
					<option value="MT"<?php if($row['state'] == "MT") echo 'selected="selected"'?>>Montana</option>
					<option value="NE"<?php if($row['state'] == "NE") echo 'selected="selected"'?>>Nebraska</option>
					<option value="NV"<?php if($row['state'] == "NV") echo 'selected="selected"'?>>Nevada</option>
					<option value="NH"<?php if($row['state'] == "NH") echo 'selected="selected"'?>>New Hampshire</option>
					<option value="NJ"<?php if($row['state'] == "NJ") echo 'selected="selected"'?>>New Jersey</option>
					<option value="NM"<?php if($row['state'] == "NM") echo 'selected="selected"'?>>New Mexico</option>
					<option value="NY"<?php if($row['state'] == "NY") echo 'selected="selected"'?>>New York</option>
					<option value="NC"<?php if($row['state'] == "NC") echo 'selected="selected"'?>>North Carolina</option>
					<option value="ND"<?php if($row['state'] == "ND") echo 'selected="selected"'?>>North Dakota</option>
					<option value="OH"<?php if($row['state'] == "OH") echo 'selected="selected"'?>>Ohio</option>
					<option value="OK"<?php if($row['state'] == "OK") echo 'selected="selected"'?>>Oklahoma</option>
					<option value="OR"<?php if($row['state'] == "OR") echo 'selected="selected"'?>>Oregon</option>
					<option value="PA"<?php if($row['state'] == "PA") echo 'selected="selected"'?>>Pennsylvania</option>
					<option value="RI"<?php if($row['state'] == "RI") echo 'selected="selected"'?>>Rhode Island</option>
					<option value="SC"<?php if($row['state'] == "SC") echo 'selected="selected"'?>>South Carolina</option>
					<option value="SD"<?php if($row['state'] == "SD") echo 'selected="selected"'?>>South Dakota</option>
					<option value="TN"<?php if($row['state'] == "TN") echo 'selected="selected"'?>>Tennessee</option>
					<option value="TX"<?php if($row['state'] == "TX") echo 'selected="selected"'?>>Texas</option>
					<option value="UT"<?php if($row['state'] == "UT") echo 'selected="selected"'?>>Utah</option>
					<option value="VT"<?php if($row['state'] == "VT") echo 'selected="selected"'?>>Vermont</option>
					<option value="VA"<?php if($row['state'] == "VA") echo 'selected="selected"'?>>Virginia</option>
					<option value="WA"<?php if($row['state'] == "WA") echo 'selected="selected"'?>>Washington</option>
					<option value="WV"<?php if($row['state'] == "WV") echo 'selected="selected"'?>>West Virginia</option>
					<option value="WI"<?php if($row['state'] == "WI") echo 'selected="selected"'?>>Wisconsin</option>
					<option value="WY"<?php if($row['state'] == "WY") echo 'selected="selected"'?>>Wyoming</option>
				</select></td>

			</tr>
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
				<td><input type="checkbox" name="availability_list[]" value="NA" <?php if (in_array("NA",$availability_array))echo 'checked="checked"'?>>Unknown</td>
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
				<td><input type="checkbox" name="availability_list[]" value="M8" id="M8" <?php if (in_array("M8",$availability_array))echo 'checked="checked"'?>></td>
				<td><input type="checkbox" name="availability_list[]" value="T8" id="T8" <?php if (in_array("T8",$availability_array))echo 'checked="checked"'?>></td>
				<td><input type="checkbox" name="availability_list[]" value="W8" id="W8" <?php if (in_array("W8",$availability_array))echo 'checked="checked"'?>></td>
				<td><input type="checkbox" name="availability_list[]" value="TH8" id="TH8" <?php if (in_array("TH8",$availability_array))echo 'checked="checked"'?>></td>
				<td><input type="checkbox" name="availability_list[]" value="F8" id="F8" <?php if (in_array("F8",$availability_array))echo 'checked="checked"'?>></td>
			</tr>

			<tr>
				<td>9am-10am</td>
				<td><input type="checkbox" name="availability_list[]" value="M9" id="M9" <?php if (in_array("M9",$availability_array))echo 'checked="checked"'?>></td>
				<td><input type="checkbox" name="availability_list[]" value="T9" id="T9" <?php if (in_array("T9",$availability_array))echo 'checked="checked"'?>></td>
				<td><input type="checkbox" name="availability_list[]" value="W9" id="W9" <?php if (in_array("W9",$availability_array))echo 'checked="checked"'?>></td>
				<td><input type="checkbox" name="availability_list[]" value="TH9" id="TH9" <?php if (in_array("TH9",$availability_array))echo 'checked="checked"'?>></td>
				<td><input type="checkbox" name="availability_list[]" value="F9" id="F9" <?php if (in_array("F9",$availability_array))echo 'checked="checked"'?>></td>
			</tr>

			<tr>
				<td>10am-11am</td>
				<td><input type="checkbox" name="availability_list[]" value="M10" id="M10" <?php if (in_array("M10",$availability_array))echo 'checked="checked"'?>></td>
				<td><input type="checkbox" name="availability_list[]" value="T10" id="T10" <?php if (in_array("T10",$availability_array))echo 'checked="checked"'?>></td>
				<td><input type="checkbox" name="availability_list[]" value="W10" id="W10" <?php if (in_array("W10",$availability_array))echo 'checked="checked"'?>></td>
				<td><input type="checkbox" name="availability_list[]" value="TH10" id="TH10" <?php if (in_array("TH10",$availability_array))echo 'checked="checked"'?>></td>
				<td><input type="checkbox" name="availability_list[]" value="F10" id="F10" <?php if (in_array("F10",$availability_array))echo 'checked="checked"'?>></td>
			</tr>

			<tr>
				<td>11am-12pm</td>
				<td><input type="checkbox" name="availability_list[]" value="M11" id="M11" <?php if (in_array("M11",$availability_array))echo 'checked="checked"'?>></td>
				<td><input type="checkbox" name="availability_list[]" value="T11" id="T11" <?php if (in_array("T11",$availability_array))echo 'checked="checked"'?>></td>
				<td><input type="checkbox" name="availability_list[]" value="W11" id="W11" <?php if (in_array("W11",$availability_array))echo 'checked="checked"'?>></td>
				<td><input type="checkbox" name="availability_list[]" value="TH11" id="TH11" <?php if (in_array("TH11",$availability_array))echo 'checked="checked"'?>></td>
				<td><input type="checkbox" name="availability_list[]" value="F11" id="F11" <?php if (in_array("F11",$availability_array))echo 'checked="checked"'?>></td>
			</tr>

			<tr>
				<td>12am-1pm</td>
				<td><input type="checkbox" name="availability_list[]" value="M12" id="M12" <?php if (in_array("M12",$availability_array))echo 'checked="checked"'?>></td>
				<td><input type="checkbox" name="availability_list[]" value="T12" id="T12" <?php if (in_array("T12",$availability_array))echo 'checked="checked"'?>></td>
				<td><input type="checkbox" name="availability_list[]" value="W12" id="W12" <?php if (in_array("W12",$availability_array))echo 'checked="checked"'?>></td>
				<td><input type="checkbox" name="availability_list[]" value="TH12" id="TH12" <?php if (in_array("TH12",$availability_array))echo 'checked="checked"'?>></td>
				<td><input type="checkbox" name="availability_list[]" value="F12" id="F12" <?php if (in_array("F12",$availability_array))echo 'checked="checked"'?>></td>
			</tr>

			<tr>
				<td>1pm-2pm</td>
				<td><input type="checkbox" name="availability_list[]" value="M1" id="M1" <?php if (in_array("M1",$availability_array))echo 'checked="checked"'?>></td>
				<td><input type="checkbox" name="availability_list[]" value="T1" id="T1" <?php if (in_array("T1",$availability_array))echo 'checked="checked"'?>></td>
				<td><input type="checkbox" name="availability_list[]" value="W1" id="W1" <?php if (in_array("W1",$availability_array))echo 'checked="checked"'?>></td>
				<td><input type="checkbox" name="availability_list[]" value="TH1" id="TH1" <?php if (in_array("TH1",$availability_array))echo 'checked="checked"'?>></td>
				<td><input type="checkbox" name="availability_list[]" value="F1" id="F1" <?php if (in_array("F1",$availability_array))echo 'checked="checked"'?>></td>
			</tr>

			<tr>
				<td>2pm-3pm</td>
				<td><input type="checkbox" name="availability_list[]" value="M2" id="M2" <?php if (in_array("M2",$availability_array))echo 'checked="checked"'?>></td>
				<td><input type="checkbox" name="availability_list[]" value="T2" id="T2" <?php if (in_array("T2",$availability_array))echo 'checked="checked"'?>></td>
				<td><input type="checkbox" name="availability_list[]" value="W2" id="W2" <?php if (in_array("W2",$availability_array))echo 'checked="checked"'?>></td>
				<td><input type="checkbox" name="availability_list[]" value="TH2" id="TH2" <?php if (in_array("TH2",$availability_array))echo 'checked="checked"'?>></td>
				<td><input type="checkbox" name="availability_list[]" value="F2" id="F2" <?php if (in_array("F2",$availability_array))echo 'checked="checked"'?>></td>
			</tr>

			<tr>
				<td>3pm-4pm</td>
				<td><input type="checkbox" name="availability_list[]" value="M3" id="M3" <?php if (in_array("M3",$availability_array))echo 'checked="checked"'?>></td>
				<td><input type="checkbox" name="availability_list[]" value="T3" id="T3" <?php if (in_array("T3",$availability_array))echo 'checked="checked"'?>></td>
				<td><input type="checkbox" name="availability_list[]" value="W3" id="W3" <?php if (in_array("W3",$availability_array))echo 'checked="checked"'?>></td>
				<td><input type="checkbox" name="availability_list[]" value="TH3" id="TH3" <?php if (in_array("TH3",$availability_array))echo 'checked="checked"'?>></td>
				<td><input type="checkbox" name="availability_list[]" value="F3" id="F3" <?php if (in_array("F3",$availability_array))echo 'checked="checked"'?>></td>
			</tr>

			<tr>
				<td>4pm-5pm</td>
				<td><input type="checkbox" name="availability_list[]" value="M4" id="M4" <?php if (in_array("M4",$availability_array))echo 'checked="checked"'?>></td>
				<td><input type="checkbox" name="availability_list[]" value="T4" id="T4"<?php if (in_array("T4",$availability_array))echo 'checked="checked"'?>></td>
				<td><input type="checkbox" name="availability_list[]" value="W4" id="W4"<?php if (in_array("W4",$availability_array))echo 'checked="checked"'?>></td>
				<td><input type="checkbox" name="availability_list[]" value="TH4" id="TH4" <?php if (in_array("TH4",$availability_array))echo 'checked="checked"'?>></td>
				<td><input type="checkbox" name="availability_list[]" value="F4" id="F4" <?php if (in_array("F4",$availability_array))echo 'checked="checked"'?>></td>
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