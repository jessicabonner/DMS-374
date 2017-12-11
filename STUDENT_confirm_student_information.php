<?php
	$role_id_array=array("5");
	require "DMS_authenticate.php";
	$user_id=$_SESSION['user_id'];
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
								<a href="DMS_reset_password.html" style="position:relative;left:-40px;top:-12px;color:white;" onclick="w3_close()"><font size="5">Change Password</font></a>
								<a href="DMS_logout.php" style="position:relative;left:-20px;top:-12px;color:white;" onclick="w3_close()"><font size="5">Logout</font></a>
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
        <a href="STUDENT_dashboard.php?user_id= <?php echo $user_id ?>" onclick="w3_close()" class="nav-link has-child nolink">Home</a>                  <div class="sub-nav-wrapper">
          </div>
              </li>
                <li class="nav-item" role="menuitem">
        <a href="STUDENT_edit_profile_information.php?user_id= <?php echo $user_id ?>" onclick="w3_close()" class="nav-link has-child nolink">Edit Profile</a>                  <div class="sub-nav-wrapper">
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
<link type="text/css" rel="stylesheet" href="DMS_Stylesheet.css" media="all" />
<table class='data-table2'>
  <!-- Header -->
<div class="w3-container" style="margin-top:40px" id="showcase">
	<h1 class="w3-jumbo">
		<b>Confirm</b>
	</h1>


	<hr style="width:800px;border:5px solid #BF5700" align="left" class="w3-round">
</div>

<?php

	require "DMS_db.php";




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
	$credit_hours=$row['credit_hours'];
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
	$bilingual=$row['bilingual'];
	$semester_commitment=$row['semester_commitment'];
	$other_programs=$row['other_programs'];

		echo "Before you apply, please confirm your profile information";

		echo "<tr><thead><th>First Name </th><td>$first_name</td></tr>";
		echo "<tr><th>Middle Name</th> <td>$middle_name</td></tr>";
		echo "<tr><th>Last Name</th> <td>$last_name</td></tr>";
		echo "<tr><th>Address</th> <td>$address</td></tr>";
		echo "<tr><th>City</th> <td>$city</td></tr>";
		echo "<tr><th>State</th> <td>$state</td></tr>";
		echo "<tr><th>Zip</th> <td>$zip_code</td></tr>";
		echo "<tr><th>Phone</th> <td>$phone</td></tr>";
		echo "<tr><th>Employment</th> <td>$employment</td></tr>";
		echo "<tr><th>Type of student</th> <td>$student_type</td></tr>";
		echo "<tr><th>Classification</th> <td>$classification</td></tr>";
		echo "<tr><th>degree type/td> <td>$degree_type</td></tr>";
		echo "<tr><th>Major</th> <td>$major</td></tr>";
		echo "<tr><th>2nd Major</th> <td>$major_2</td></tr>";
		echo "<tr><th>GPA</th> <td>$GPA</td></tr>";
		echo "<tr><th>Credit Hours Enrollment</th> <td>$credit_hours</td></tr>";
		echo "<tr><th>Have you worked at DMS before?</th> <td>$worked_at_dms</td></tr>";
		echo "<tr><th>Have you volunteered at Seton before?</th> <td>$volunteered_at_seton</td></tr>";
		echo "<tr><th>Do you own a car?</th> <td>$car</td></tr>";
		echo "<tr><th>Fluent in the following language(s):</th> <td>$bilingual</td></tr>";
		echo "<tr><th>How many semesters are you willing to commit?</th> <td>$semester_commitment</td></tr><br>";
		echo "<tr><th>DMS Programs you have already applied to:</th> <td>$other_programs</td></tr><br>";
	?>
		<table>
			<br></br>
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

		<form action="STUDENT_edit_profile_information.php" method="get">

			<input type="submit" style="background-color:#bf5700;color:white;text-shadow: #000 0px 0px 1px;" value="Edit"/>
		</form>

		<form action="STUDENT_select_program_apply.php" method="get">

			<input type="submit" style="background-color:#bf5700;color:white;text-shadow: #000 0px 0px 1px;" value="Confirm"/>
		</form>
