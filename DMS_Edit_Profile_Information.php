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
<!doctype html>
<html lang="en" dir="ltr">
<head>
	<link href='./application.css' type='text/css' rel='stylesheet'>
	<script src="https://code.jquery.com/jquery-3.1.1.js"></script>
</head>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="apple-touch-icon" sizes="180x180" href="/sites/all/themes/phase2_theme1/img/favicon/apple-touch-icon-180x180.png" />
<link rel="apple-touch-icon" sizes="152x152" href="/sites/all/themes/phase2_theme1/img/favicon/apple-touch-icon-152x152.png" />
<link rel="apple-touch-icon" sizes="144x144" href="/sites/all/themes/phase2_theme1/img/favicon/apple-touch-icon-144x144.png" />
<link rel="icon" href="/sites/all/themes/phase2_theme1/img/favicon/favicon.ico" />
<!--[if IE]><link rel="shortcut icon" href="/sites/all/themes/phase2_theme1/img/favicon/favicon.ico" />
<![endif]--><meta name="apple-mobile-web-app-title" content="UT Austin" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />
<meta name="msapplication-TileImage" content="/sites/all/themes/phase2_theme1/img/favicon/apple-touch-icon-144x144.png" />
<meta name="msapplication-TileColor" content="#bf5700" />
<link rel="apple-touch-icon" sizes="120x120" href="/sites/all/themes/phase2_theme1/img/favicon/apple-touch-icon-120x120.png" />
<link rel="apple-touch-icon" sizes="76x76" href="/sites/all/themes/phase2_theme1/img/favicon/apple-touch-icon-76x76.png" />
<link rel="apple-touch-icon" sizes="114x114" href="/sites/all/themes/phase2_theme1/img/favicon/apple-touch-icon-114x114.png" />
<link rel="apple-touch-icon" sizes="57x57" href="/sites/all/themes/phase2_theme1/img/favicon/apple-touch-icon-57x57.png" />
<link rel="apple-touch-icon" href="/sites/all/themes/phase2_theme1/img/favicon/apple-touch-icon.png" />
<link rel="apple-touch-icon" sizes="60x60" href="/sites/all/themes/phase2_theme1/img/favicon/apple-touch-icon-60x60.png" />
<link rel="apple-touch-icon" sizes="72x72" href="/sites/all/themes/phase2_theme1/img/favicon/apple-touch-icon-72x72.png" />
<meta name="description" content="Dell Medical School at The University of Texas at Austin is the first med school in decades to be built from the ground up at a Tier 1 research university." />
<meta name="robots" content="follow, index" />
<meta name="generator" content="Drupal 7 (http://drupal.org)" />
<link rel="canonical" href="https://dellmed.utexas.edu" />
<link rel="shortlink" href="https://dellmed.utexas.edu" />
  <title>Dell Medical School | The University of Texas at Austin</title>
  <link type="text/css" rel="stylesheet" href="https://dellmed.utexas.edu/sites/default/files/css/css_xE-rWrJf-fncB6ztZfd2huxqgxu4WO-qwma6Xer30m4.css" media="all" />
<link type="text/css" rel="stylesheet" href="https://dellmed.utexas.edu/sites/default/files/css/css_tKJ8QKUw8OLBfSpVi3r2kqhI0EM9KvnZzuv9rNVL1dE.css" media="all" />
<link type="text/css" rel="stylesheet" href="https://dellmed.utexas.edu/sites/default/files/css/css_ObkY4Fv7biAuohhzB1p-hgy32GQxKG4rzg9E0b42Xo0.css" media="all" />
<link type="text/css" rel="stylesheet" href="https://dellmed.utexas.edu/sites/default/files/css/css_YytGlvj-rOSj7aCuw23k0KHgv0uW_7b2NUNxl_vdSsM.css" media="all" />
<style type="text/css" media="all">
/*--><![CDATA[/*><!--*/
#main-nav li a{font-family:open_sans;}
.UT-page{margin-top:50px;}

/*]]>*/
</style>
<link type="text/css" rel="stylesheet" href="https://dellmed.utexas.edu/sites/default/files/css/css_a-iX8Z0TGtqOTsvj7qkSGIxcKy1DQVow38xs9TgeR0g.css" media="all" />
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

    <div class="nav-overlay" id="nav-overlay"></div>
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
</ul>              </div>
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
        <a href="DMS_student_home.php?user_id= <?php echo $user_id ?>" onclick="w3_close()" class="nav-link has-child nolink">Home</a>                  <div class="sub-nav-wrapper">
          </div>
              </li>
                <li class="nav-item" role="menuitem">
        <a href="DMS_Edit_Profile_Information.php?user_id= <?php echo $user_id ?>" onclick="w3_close()" class="nav-link has-child nolink">Edit Profile</a>                  <div class="sub-nav-wrapper">
          </div>
              </li>
                <li class="nav-item" role="menuitem">
        <a href="DMS_Student_Info.php?user_id= <?php echo $user_id ?>" onclick="w3_close()" class="nav-link has-child nolink">New Application</a>                  <div class="sub-nav-wrapper">
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
		<b>Edit Profile Information</b>
	</h1>


	<hr style="width:800px;border:5px solid #BF5700" class="w3-round">
	<br>
	<b>Edit any information you would like to link to all applications.</b>
	<br>
	<br>
</div>

<div class="w3-container" id="application" style="margin-top:10px">

<body>

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

			Degree Type
            <input type="text" name="degree_type" value="<?php echo $row ['degree_type']; ?> " size=10>
			Major
            <input type="text" name="major" value="<?php echo $row ['major']; ?> " size=10>
			Second Major
            <input type="text" name="major_2" value="<?php echo $row ['major_2']; ?> " size=10>
			GPA
            <input type="text" name="GPA" value="<?php echo $row ['GPA']; ?> " size=10>
			Credit Hours Enrollment
            <input type="text" name="credit_hours" value="<?php echo $row ['credit_hours']; ?> " size=10>

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
			<tr class="blankrow">
				<td><br></td>
			<tr>
				<td><input type="radio" name="car" value="1" required <?php if($row['car'] == 1) echo 'checked="checked"'?>>Yes<br></td>
			</tr>
			<tr>
				<td><input type="radio" name="car" value="0" <?php if($row['car'] == 0) echo 'checked="checked"'?>>No<br></td>
			</tr>
			
			Language(s)
            <input type="text" name="bilingual" value="<?php echo $row ['bilingual']; ?> " size=10>

			Semester Commitment
            <input type="text" name="semester_commitment" value="<?php echo $row ['semester_commitment']; ?> " size=10>
			
			DMS Program(s) already applied to
			<input type="text" name"other_programs" value= "<?php echo $row ['other_programs']; ?> " size=10>>

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

		<!--submit button. Will post info.-->
		<td colspan="1" style="text-align: center; float: center;"><input type="submit" name="submit" style="background-color:#bf5700;color:white;text-shadow: #000 0px 0px 1px;" value="Update Profile Information"> </td>


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
