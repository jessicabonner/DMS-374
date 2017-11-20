<!--Form to allow students to apply to dell med school internship programs-->
<!DOCTYPE html>
<html>
<head>
	<link href='application.css' type='text/css' rel='stylesheet'>
	<!--<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>-->
	<script src="https://code.jquery.com/jquery-3.1.1.js"></script>
</head>


<title>
	Dell Medical School 
</title>



<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">


<style>
	body,h1,h2,h3,h4,h5 {font-family: "Open Sans", serif}	
	body {font-size:16px;}
	.w3-half img{margin-bottom:-6px;margin-top:16px;opacity:0.8;cursor:pointer}
	.w3-half img:hover{opacity:1}
</style>


  <!-- Sidebar/menu -->
<nav class="w3-sidebar w3-collapse w3-top w3-large w3-padding" style="background-color:#BF5700;z-index:3;width:350px;font-weight:bold;" 
id="mySidebar"><br>
	
	<a href="javascript:void(0)" onclick="w3_close()" class="w3-button w3-hide-large w3-display-topleft" style="width:100%;font-size:22px">Close Menu</a>
	
	
	<div class="w3-container">
		<!--<h3 class="w3-padding-64"><b>Dell Medical</br>School</b></h3>-->
		<img src="DMS_logo2.jpg" alt="Dell Medical School" height="75px"/>
	</div>
	
    <div class="w3-bar-block">
		<!--no link to apply so they can't bypass the student info part-->
		<a href="" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Apply</a>
		<a href="#showcase" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Dashboard</a>
	</div>
</nav>


<!-- Top menu on small screens -->
<header class="w3-container w3-top w3-hide-large w3-xlarge w3-padding" style="background-color:#BF5700">
  <a href="javascript:void(0)" class="w3-button w3-margin-right" style="background-color:#BF5700" onclick="w3_open()">☰</a>
  <span style="background-color:#BF5700">Dell Medical School</span>
</header>


<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:390px;margin-right:40px">

  <!-- Header -->
<div class="w3-container" style="margin-top:80px" id="showcase">
	<h1 class="w3-jumbo">
		<b>Profile information</b>
	</h1>
	
	
	<hr style="width:800px;border:5px solid #BF5700" class="w3-round">
	
	<b>Before you apply, please enter your basic profile information. </b>
</div>




<div class="w3-container" id="application" style="margin-top:10px">

<body>
	<!--this form will post to DMS_connect in order to submit data to DB-->
	<form name="apply_form" action = "DMS_connect2.php" method= "post" onsubmit="return confirm('Are you sure you want to submit?');">
	<input type="hidden" name="user_id" value="<?php echo $_GET['user_id']?>"/>

		<table>

			<!--text box for students first name!-->
			<tr>
				<td>First Name</td>
			</tr>
			<tr>
				<td><input type="text" name="first_name" size="20" maxlength="30" required/></td>
			</tr>

		
			<!--text box for students middle name-->
			<tr>
				<td>Middle Name (if applicable)</td>
			</tr>
			<tr>
				<td><input type="text" name="middle_name" size="20" maxlength="30"/></td>
			</tr>


			<!--text box for last name-->
			<tr>
				<td>Last Name</td>
			</tr>
			<tr>
				<td><input type="text" name="last_name" size="20" maxlength="30" required/></td>
			</tr>


			<!--text box for eid-->
			<tr>
				<td>UT EID</td>
			</tr>
			<tr>
				<td><input type="text" name="EID" size="20" maxlength="10" required/></td>
			</tr>


			<!--text boxes for address-->
			<tr>
				<td>Street Address</td>
			</tr>
			<tr>
				<td><input type="text" name="address" size="20" maxlength="30" required/></td>
			</tr>

			<tr>
				<td>City</td>
			</tr>
			<tr>
				<td><input type="text" name="city" size="20" maxlength="30" required/></td>
			</tr>

			<tr>
				<td>State</td>
			</tr>
			<tr>
				<td><select name="state" required>
					<option value="AL">Alabama</option>
					<option value="AK">Alaska</option>
					<option value="AZ">Arizona</option>
					<option value="AR">Arkansas</option>
					<option value="CA">California</option>
					<option value="CO">Colorado</option>
					<option value="CT">Connecticut</option>
					<option value="DE">Delaware</option>
					<option value="DC">District Of Columbia</option>
					<option value="FL">Florida</option>
					<option value="GA">Georgia</option>
					<option value="HI">Hawaii</option>
					<option value="ID">Idaho</option>
					<option value="IL">Illinois</option>
					<option value="IN">Indiana</option>
					<option value="IA">Iowa</option>
					<option value="KS">Kansas</option>
					<option value="KY">Kentucky</option>
					<option value="LA">Louisiana</option>
					<option value="ME">Maine</option>
					<option value="MD">Maryland</option>
					<option value="MA">Massachusetts</option>
					<option value="MI">Michigan</option>
					<option value="MN">Minnesota</option>
					<option value="MS">Mississippi</option>
					<option value="MO">Missouri</option>
					<option value="MT">Montana</option>
					<option value="NE">Nebraska</option>
					<option value="NV">Nevada</option>
					<option value="NH">New Hampshire</option>
					<option value="NJ">New Jersey</option>
					<option value="NM">New Mexico</option>
					<option value="NY">New York</option>
					<option value="NC">North Carolina</option>
					<option value="ND">North Dakota</option>
					<option value="OH">Ohio</option>
					<option value="OK">Oklahoma</option>
					<option value="OR">Oregon</option>
					<option value="PA">Pennsylvania</option>
					<option value="RI">Rhode Island</option>
					<option value="SC">South Carolina</option>
					<option value="SD">South Dakota</option>
					<option value="TN">Tennessee</option>
					<option value="TX">Texas</option>
					<option value="UT">Utah</option>
					<option value="VT">Vermont</option>
					<option value="VA">Virginia</option>
					<option value="WA">Washington</option>
					<option value="WV">West Virginia</option>
					<option value="WI">Wisconsin</option>
					<option value="WY">Wyoming</option>
				</select></td>
		
			</tr>

			<tr>
				<td>Zip Code</td>
			<tr>
			<tr>
				<td><input type="text" name="zip_code" size="20" maxlength="5" required pattern="[0-9]{5}"/></td>
			</tr>


			<!--text box for phone number-->
			<tr>
				<td>Phone Number</td>
			</tr>
			<tr>
				<td><input type="text" placeholder="ex: 123-456-7890" name="phone" size="20" maxlength="16" required pattern="^\d{3}-\d{3}-\d{4}$"/></td>
			</tr>


			<!--text box for email-->
			<tr>
				<td>Email Address</td>
			</tr>
			<tr>
				<td><input type="text" placeholder="ex: John@utexas.edu" name="email" size="20" maxlength="30" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$"/></td>
			</tr>


			<!--break between text box questions and radio button questions-->
			<tr>
				<td><br></td>
			</tr>

			<!--radio buttons for if student is eligible to work in US/employed at UT-->
			<tr>
				<td>Are you:</td>
			</tr>
			<tr>
				<td><input type="radio" name="employment" value="UT" required>Currently employed at UT<br></td>
			</tr>
			<tr>
				<td><input type="radio" name="employment" value="eligible">Eligible to work in the US with no restrictions<br></td>
			</tr>
			<tr>
				<td><input type="radio" name="employment" value="none">None of the above<br></td>
			</tr>



			<!--break between radio button questions-->
			<tr>
				<td><br></td>
			</tr>

			<!--Radio buttons for student's classification-->
			<tr>
				<td>What is your classification?</td>
			</tr>
			<tr>
				<td><input type="radio" name="classification" value="1st year" required>1st year undergrad<br></td>
			</tr>
			<tr>
				<td><input type="radio" name="classification" value="2nd year">2nd year undergrad<br></td>
			</tr>
			<tr>
				<td><input type="radio" name="classification" value="3rd year">3rd year undergrad<br></td>
			</tr>
			<tr>
				<td><input type="radio" name="classification" value="4th year">4th year undergrad<br></td>
			</tr>
			<tr>
				<td><input type="radio" name="classification" value="5th year">5th year undergrad<br></td>
			</tr>
			<tr>
				<td><input type="radio" name="classification" value="Grad">Graduate Student<br></td>
			</tr>
			<tr>
				<td><input type="radio" name="classification" value="Other">Other<br></td>
			</tr>

		
			<!--break-->
			<tr>
				<td><br></td>
			</tr>

		
			<!--text box for degree type-->
			<tr>
				<td>What is your degree type? (E.g. BS, MS)</td>
			</tr>
			<tr>
				<td><input type="text" name="degree_type" size="20" maxlength="10" required/></td>
			</tr>

		
			<!--text box for major-->
			<tr>
				<td>What is your major?</td>
			</tr>
			<tr>
				<td><input type="text" name="major" size="20" maxlength="30" required/></td>
			</tr>

		
			<!--text box for 2nd major-->
			<tr>
				<td>What is your 2nd major? (if applicable)</td>
			</tr>
			<tr>
				<td><input type="text" name="major_2" size="20" maxlength="30"/></td>
			</tr>


			<!--Radio buttons for if they have worked at dell med school before-->
			<tr>
				<td>Have you previously worked at Dell Medical School?</td>
			</tr>
			<tr>
				<td><input type="radio" name="worked_at_dms" value="1" required>Yes<br></td>
			</tr>
			<tr>
				<td><input type="radio" name="worked_at_dms" value="0">No<br></td>
			</tr>

		
			<!--break-->
			<tr>
				<td><br></td>
			</tr>


			<!--radio buttons for if they have volunteered at seton before-->
			<tr>
				<td>Have you previously volunteered at Seton Hospital?</td>
			</tr>
			<tr>
				<td><input type="radio" name="volunteered_at_seton" value="1" required>Yes<br></td>
			</tr>
			<tr>
				<td><input type="radio" name="volunteered_at_seton" value="0">No<br></td>
			</tr>
		
			<!--break-->
			<tr>
				<td><br></td>
			</tr>


			<!--Radio buttons for if they have a car-->
			<tr>
				<td>Do you own a car?</td>
			</tr>
			<tr>
				<td><input type="radio" name="car" value="1" required>Yes<br></td>
			</tr>
			<tr>
				<td><input type="radio" name="car" value="0">No<br></td>
			</tr>

		
			<!--break-->
			<tr>
				<td><br></td>
			</tr>

		
			<!--text box for how many semesters they plan to commit-->
			<tr>
				<td>How many semesters do you expect to commit to this role?</td>
			</tr>
			<tr>
				<td><input type="text" placeholder="ex: 3" name="semester_commitment" size="20" maxlength="2" required/ pattern="^[0-9]*$"></td>
			</tr>

		
			<!--break-->
			<tr>
				<td><br></td>
			</tr>

	
	<!--Commented out all textarea questions
			<tr>
				<td>What are your career goal(s) and your plan to achieve them? (500 word limit)</td>
			</tr>
			<tr>
				<td><textarea class="written" placeholder="Please enter your response here" name="essay_q1" rows="10" 
				cols="800" required></textarea></td>
			</tr>


			
			<tr>
				<td><br></td>
			</tr>


			
			<tr>
				<td>Why do you want to work at Dell Medical School, and how can we help you further your goals? (500 word limit)</td>
			</tr>
			<tr>
				<td><textarea class="written" placeholder="Please enter your response here" name="essay_q2" rows="10" 
				cols="800" required></textarea></td>
			</tr>

		
			
			<tr>
				<td><br></td>
			</tr>

		
			
			<tr>
				<td>How would you create value to the program you are applying for? (500 word limit)</td>
			</tr>
			<tr>
				<td><textarea class="written" placeholder="Please enter your response here" name="essay_q3" 
				rows="10" cols="800" required></textarea></td>
			</tr>


			<tr>
				<td><br></td>
			</tr>

		
			<tr>
				<td>Describe your personality. (500 word limit)</td>
			</tr>
			<tr>
				<td><textarea class="written" placeholder="Please enter your response here" name="essay_q4" 
				rows="10" cols="800" required></textarea></td>
			</tr>

		
			
			<tr>
				<td><br></td>
			</tr>

		
		
			<tr>
				<td>If you don't get this position, how else will you fill your time? (500 word limit)</td>
			</tr>
			<tr>
				<td><textarea class="written" placeholder="Please enter your response here" name="essay_q5" 
				rows="10" cols="800" required></textarea></td>
			</tr>
	-->
	
		</table>

	
		<!--break-->
		<tr>
			<td><br></td>
		</tr>

	
		<!--Checkboxes for availibility for next semester-->
		<table>
		
		
			<tr>What is your availability for the upcoming semester?</tr>

			
			
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
		<td colspan="1" style="text-align: center; float: center;"><input type="submit" value="Submit Application"/> </td>
		
		
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
		
		
		//function to limit the amount of characters in textarea 
		$("textarea").keyup(function(){
			
			 var words = this.value.match(/\S+/g).length;

			if (words > 500) {
			// Split the string on first 200 words and rejoin on spaces
			var trimmed = $(this).val().split(/\s+/, 500).join(" ");
			// Add a space at the end to make sure more typing creates new words
			$(this).val(trimmed + " ");
			}
		});
	</script>
</body>
</div>

</html>




