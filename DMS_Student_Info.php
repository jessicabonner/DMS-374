<?php

	if (isset($_GET['error']))
	{
		echo '<script language="javascript">';
		echo 'alert("You have already submitted your Student Information")';
		echo '</script>';
	}

	require "DMS_db.php";
	$user_id=$_GET['user_id'];
	//check if the application already exists in the database
	$stmt = $dbc->query("SELECT * FROM student_info WHERE user_id='".$user_id."'" );
	$x = $stmt->fetch();

	//if the application already exists, redirect back to the DMS_CreateApplication.php page along with an indication that there was an error
	if (count($x['user_id'])>0)
	{

		header("Location: DMS_confirm_profile_information.php?user_id=$user_id");
		die();
	}


?>
<!doctype html>
<html lang="en" dir="ltr">
<head>
	<script src="https://code.jquery.com/jquery-3.1.1.js"></script>
</head>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link rel="apple-touch-icon" sizes="180x180" 	href="/sites/all/themes/phase2_theme1/img/favicon/apple-touch-icon-180x180.png" />
	<link rel="apple-touch-icon" sizes="152x152" 	href="/sites/all/themes/phase2_theme1/img/favicon/apple-touch-icon-152x152.png" />
	<link rel="apple-touch-icon" sizes="144x144" 	href="/sites/all/themes/phase2_theme1/img/favicon/apple-touch-icon-144x144.png" />
	<link rel="icon" href="/sites/all/themes/phase2_theme1/img/favicon/favicon.ico" />
	<!--[if IE]><link rel="shortcut icon" href="/sites/all/themes/phase2_theme1/img/favicon/favicon.ico" />
	<![endif]--><meta name="apple-mobile-web-app-title" content="UT Austin" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />
	<meta name="msapplication-TileImage" 	content="/sites/all/themes/phase2_theme1/img/favicon/apple-touch-icon-144x144.png" />
	<meta name="msapplication-TileColor" content="#bf5700" />
	<link rel="apple-touch-icon" sizes="120x120" 	href="/sites/all/themes/phase2_theme1/img/favicon/apple-touch-icon-120x120.png" />
	<link rel="apple-touch-icon" sizes="76x76" 	href="/sites/all/themes/phase2_theme1/img/favicon/apple-touch-icon-76x76.png" />
	<link rel="apple-touch-icon" sizes="114x114" 	href="/sites/all/themes/phase2_theme1/img/favicon/apple-touch-icon-114x114.png" />
	<link rel="apple-touch-icon" sizes="57x57" 	href="/sites/all/themes/phase2_theme1/img/favicon/apple-touch-icon-57x57.png" />
	<link rel="apple-touch-icon" href="/sites/all/themes/phase2_theme1/img/favicon/apple-touch-icon.png" />
	<link rel="apple-touch-icon" sizes="60x60" 	href="/sites/all/themes/phase2_theme1/img/favicon/apple-touch-icon-60x60.png" />
	<link rel="apple-touch-icon" sizes="72x72" 	href="/sites/all/themes/phase2_theme1/img/favicon/apple-touch-icon-72x72.png" />
	<meta name="description" content="Dell Medical School at The University of Texas at Austin is the first med school in decades to be built from the ground up at a Tier 1 research university." />
	<meta name="robots" content="follow, index" />
	<meta name="generator" content="Drupal 7 (http://drupal.org)" />
	<link rel="canonical" href="https://dellmed.utexas.edu" />
	<link rel="shortlink" href="https://dellmed.utexas.edu" />
	<title>Dell Medical School | The University of Texas at Austin</title>
	<link type="text/css" rel="stylesheet" 	href="https://dellmed.utexas.edu/sites/default/files/css/css_xE-rWrJf-fncB6ztZfd2huxqgxu4WO-qwma6Xer30m4.css" media="all" />
	<link type="text/css" rel="stylesheet" 	href="https://dellmed.utexas.edu/sites/default/files/css/css_tKJ8QKUw8OLBfSpVi3r2kqhI0EM9KvnZzuv9rNVL1dE.css" media="all" />
	<link type="text/css" rel="stylesheet" 	href="https://dellmed.utexas.edu/sites/default/files/css/css_ObkY4Fv7biAuohhzB1p-hgy32GQxKG4rzg9E0b42Xo0.css" media="all" />
	<link type="text/css" rel="stylesheet" 	href="https://dellmed.utexas.edu/sites/default/files/css/css_YytGlvj-rOSj7aCuw23k0KHgv0uW_7b2NUNxl_vdSsM.css" media="all" />
	<style type="text/css" media="all">
		/*--><![CDATA[/*><!--*/
		#main-nav li a{font-family:open_sans;}
		.UT-page{margin-top:50px;}
		/*]]>*/
	</style>
	<link type="text/css" rel="stylesheet" 	href="https://dellmed.utexas.edu/sites/default/files/css/css_a-iX8Z0TGtqOTsvj7qkSGIxcKy1DQVow38xs9TgeR0g.css" media="all" />
	<script type="text/javascript" src="https://dellmed.utexas.edu/sites/default/files/js/js_nGsGFAVr6D4cI4gpxlZHFJ7PJaRNEW3-0MdbO3ITML0.js"></script>
</head>

<body class="html front not-logged-in no-sidebars page-node"  >
	<div id="skip-link">
    <a href="#ut-page-content" class="element-invisible element-focusable">Skip to main content</a>
	</div>
	<header class="UT-header theme1">
		<div class="container container-logo-p2">
        <div class="row">
        <div class="column small-12">
        <div class="p2-logo">
        <a href="http://dellmed.utexas.edu" onclick="w3_close()" class="main-logo"><img src ="Dell_Medical_School_logo.png" alt="Home" /></a>
  	    </div>
   		</div>
   		</div>
        <a href="#" class="UT-nav-hamburger icon-menu" id="menu-icon"><span class="hiddenText">Menu</span></a>
    	</div> <!-- container-logo -->
    	<div class="nav-overlay" id="nav-overlay">
   	 	</div>
    	<div class="nav-wrapper" role="navigation">
      	<div class="container container-topnav">
        <div class="row">
        <div class="column small-12">
        <div class="topnav">
        <div class="hide-for-large-up">
        <ul class="topnav-constituents" role="menu"><li class="nav-item" role="menuitem"><a href="/maps" id="cta-button-style1" class="nav-link">Maps</a></li>
<li class="nav-item" role="menuitem"><a href="/philanthropy" id="cta-button-style2" class="nav-link">Give</a></li>
<li class="nav-item" role="menuitem"><a href="/events" class="nav-link">Events</a></li>
<li class="nav-item" role="menuitem"><a href="/in-the-news" class="nav-link">News</a></li>
		</ul>
		</div>
		<div class="parent-banner-links">
    	<h2 class="UT-secondary-logo">
    	<a href="http://www.utexas.edu" class="logo-link"><img src="Texas_logo.png" alt="UTexas Home" /><br></a>
    	</h2>
		</div>
    	<div class="hide-for-large-up">
        <div class="parent-links" id="parents">
        	<a href="http://www.utexas.edu">The University of Texas at Austin</a>
    	</div>
			<a href="/" class="current-directory" id="show-parents"><span class="name">Dell Medical School</span><span class="toggle"></span></a>
    	</div>
    		<br>
        	<br>
        	<br>
    	</div>
    	</div>
    	</div>
    	</div> <!-- container-topnav -->
		<div class="container container-nav container-nav-phase2">
        <div class="row">
        <div class="column small-12">
        <nav>
        <ul class="nav" id="main-nav" role="menu">
        <li class="nav-item" role="menuitem">
        	<a href="" onclick="w3_close()" class="nav-link has-child nolink">Home</a>
			<div class="sub-nav-wrapper">
            </div>
        </li>
        <li class="nav-item" role="menuitem">
        	<a href="" onclick="w3_close()" class="nav-link has-child nolink">Edit Profile</a>                  <div class="sub-nav-wrapper">
          	</div>
        </li>
        <li class="nav-item" role="menuitem">
        	<a href="" onclick="w3_close()" class="nav-link has-child nolink">New Application</a>                  <div class="sub-nav-wrapper">
          	</div>
        </li>
        <li class="nav-item" role="menuitem">
            </div>
            </div>
        </li>
        </ul>
        </nav>
        </div>
        </div>
  		</div> <!-- container-nav-phase2 -->
    	</div> <!-- nav-wrapper -->

		<!-- !PAGE CONTENT! -->
		<div class="w3-main" style="margin-left:40px;margin-right:450px">

  		<!-- Header -->
		<div class="w3-container" style="margin-top:40px" id="showcase">
			<h1 class="w3-jumbo">
				<b>Profile Information</b>
			</h1>
		<hr style="width:800px;border:5px solid #BF5700" class="w3-round">
		<br>
			<b>Before you apply, please enter your basic profile information.
			</b>
		<br>
		</div>

		<div class="w3-container" id="application" style="margin-top:10px">
	<body>
	<!--this form will post to DMS_connect in order to submit data to DB-->
	<form name="apply_form" action = "DMS_connect2.php" method= "post">
	<input type="hidden" name="user_id" value="<?php echo $_GET['user_id']?>"/>
		<table>
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
			<!--radio buttons for if student is eligible to work in US/employed at UT-->
			<tr>
				<td>Are you:</td>
			</tr>
			</tr>
			<tr>
				<td><input type="radio" name="employment" value="UT" required> Currently employed at UT<br></td>
			</tr>
			<tr>
				<td><input type="radio" name="employment" value="eligible"> Eligible to work in the US with no restrictions<br></td>
			</tr>
			<tr>
				<td><input type="radio" name="employment" value="none"> None of the above<br></td>
			</tr>
			<tr class="blankrow">
				<td><br></td>
			<!--Radio buttons for student's classification-->
			<tr>
				<td>Type of student:</td>
			</tr>
			<tr>
				<td><input type="radio" name="student_type" value="Undergraduate" required> Undergraduate Student<br></td>
			</tr>
			<tr>
				<td><input type="radio" name="student_type" value="Graduate"> Graduate Student<br></td>
			</tr>
			<tr>
				<td><input type="radio" name="student_type" value="PhD"> PhD Student<br></td>
			</tr>
			<tr>
				<td><input type="radio" name="student_type" value="Other"> Other<br></td>
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
				<td><input type="radio" name="classification" value="1st year" required> 1st year<br></td>
			</tr>
			<tr>
				<td><input type="radio" name="classification" value="2nd year"> 2nd year<br></td>
			</tr>
			<tr>
				<td><input type="radio" name="classification" value="3rd year"> 3rd year<br></td>
			</tr>
			<tr>
				<td><input type="radio" name="classification" value="4th year"> 4th year<br></td>
			</tr>
			<tr>
				<td><input type="radio" name="classification" value="5th year"> 5th year<br></td>
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
			<tr>
				<td>What is your GPA?</td>
			</tr>
			<tr>
				<td><input type="text" name="GPA" size="20" required pattern="^[0]|[0-3]\.(\d?\d?)|[4].[0]$"/></td>
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
			<!--text box for how many semesters they plan to commit-->
			<tr>
				<td>How many semesters do you expect to commit to this role?</td>
			</tr>
			<tr>
				<td><input type="text" placeholder="ex: 3" name="semester_commitment" size="20" maxlength="2" required pattern="^[0-9]*$"/></td>
			</tr>
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
			</table>


			<!--break-->
			<tr>
				<td><br></td>
			</tr>


			<!--submit button. Will post info.-->
			<td colspan="1" style="text-align: center; float: center;"><input type="submit" value="Save profile information"/> </td>


			<!--break-->
			<p><br></p>
			</form>


			<!--JQuery used to ensure at least one checkbox is checked off for availability-->

	<script>

		//function will remove required tags from checkboxes as long as at least one box is checked off
		$(function()
		{

			var requiredCheckboxes = $(':checkbox[required]');

			requiredCheckboxes.change(function()
				{

					if(requiredCheckboxes.is(':checked'))
					{
						requiredCheckboxes.removeAttr('required');
					}

					else
					{
					requiredCheckboxes.attr('required', 'required');
					}
				});

		});

	</script>
</body>
</div>

</html>
