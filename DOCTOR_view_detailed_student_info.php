<?php

	$role_id_array=array('2','4','1');
	require "DMS_authenticate.php";
	$user_id = $_SESSION['user_id'];

	
	
?>

<?php  if ($_SESSION['role']=='1'): ?>

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
	<link type="text/css" rel="stylesheet" href="DMS_Stylesheet.css" media="all" />
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
						<a href="http://dellmed.utexas.edu" on-click="w3-close()" class="main-logo"><img src ="Dell_Medical_School_logo.png" alt="Home" /></a>
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
								<div class="parent-banner-links">
								<!--<a href="DMS_reset_password.html" style="position:relative;left:-40px;top:-12px;color:white;" onclick="w3_close()"><font size="5">Change Password</font></a>-->
								<a href="DMS_logout.php" style="position:relative;left:-20px;top:-12px;color:white;" onclick="w3_close()"><font size="4">Logout</font></a>
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

				<!-- Admin Dashboard Tabs -->
				<div class="container container-nav container-nav-phase2">
					<div class="row">
						<div class="column small-12">
							<nav>
								<ul class="nav" id="main-nav" role="menu">
									<li class="nav-item" role="menuitem">
										<a href="ADMIN_dashboard.php" onclick="w3_close()" class="nav-link">Home</a>
									</li>
									<li class="nav-item" role="menuitem">
										<a href="#" class="nav-link has-child nolink">Manage Profiles</a>
										<div class="sub-nav-wrapper">
											<div class="sub-nav-row">
					                                          <ul class="sub-nav">
					                                                      <li class="sub-nav-item">
					                      <a href="ADMIN_manage_roles.php" onclick="w3_close()"  class="sub-nav-link"><span>Manage Roles</span></a>                    </li>
					                                                                        <li class="sub-nav-item">
					                      <a href="ADMIN_create_profile.php" onclick="w3_close()" class="sub-nav-link"><span>New Profile</span></a>                    </li>
					                                                                                                                    </ul>
					            </div>
										</div>
									</li>
									<li class="nav-item" role="menuitem">
										<a href="ADMIN_create_program.php" onclick="w3_close()" class="nav-link">New Program</a>
									</li>
									<li class="nav-item" role="menuitem">
										<a href="#" class="nav-link has-child nolink">Applications</a>
										<div class="sub-nav-wrapper">
											<div class="sub-nav-row">
					                                          <ul class="sub-nav">
					                                                      <li class="sub-nav-item">
					                      <a href="ADMIN_create_application.php" onclick="w3_close()"  class="sub-nav-link"><span>New Application</span></a>                    </li>
					                                                                        <li class="sub-nav-item">
					                      <a href="ADMIN_view_all_active_applications.php" onclick="w3_close()" class="sub-nav-link"><span>Edit Applications</span></a>                    </li>
					                                                                        <li class="sub-nav-item">
					                      <a href="ADMIN_view_archived_applications.php" onclick="w3_close()" class="sub-nav-link"><span>Delete Applications</span></a>                    </li>
					                                                                        <li class="sub-nav-item">
					                                                                                                                    </ul>
					            </div>
										</div>
									</li>
									<li class="nav-item" role="menuitem">
										<a href="DOCTOR_dashboard.php" onclick="w3_close()" class="nav-link">View All Applicants</a>
									</li>
									<li class="nav-item" role="menuitem">
										<a href="HR_dashboard.php" onclick="w3_close()" class="nav-link">View All Accepted Students</a>
									</li>
									<li class="nav-item" role="menuitem">
									</li>
								</ul>
							</nav>
						</div>
					</div>
				</div> <!-- container-nav-phase2 -->
			</div> <!-- nav-wrapper -->


			<!-- !PAGE CONTENT! -->
			<div class="w3-main" style="margin-left:40px;margin-right:450px">
			
<?php else: ?>

<!--Doctor's view that displays applicants-->
<!doctype html>
<html lang="en" dir="ltr">
<head>
	<script src="https://code.jquery.com/jquery-3.1.1.js"></script>
	<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
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
<link type="text/css" rel="stylesheet" href="https://dellmed.utexas.edu/sites/default/files/css/css_YytGlvj-rOSj7aCuw23k0KHgv0uW_7b2NUNxl_vdSsM.css" media="all" />
<link type="text/css" rel="stylesheet" href="DMS_Stylesheet.css" media="all" />
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
		 
		 <li class="nav-item" role="menuitem">
            </div>
            </div>
        </li>
        </ul>
        </nav>
        </div>


    </div> <!-- nav-wrapper -->

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:40px;margin-right:450px">

<?php endif; ?>

  <!-- Header -->
<div class="w3-container" style="margin-top:40px; font-familt:benton sans;" id="showcase">
	<h1 class="w3-jumbo">
		<b>Program Applicant</b>
	</h1>


	<hr style="min-width:100%;border:5px solid #BF5700" align="left" class="w3-round">
</div>
</html>





<?php
require 'DOCTOR_functionality.php';
require 'DMS_general_functions.php';


	// Get ID from the URL
	$student_id = $_GET['id'];

	$application_id=$_GET['selected_application'];


	$query = select_student2($student_id);



	//TODO: DeleteThis Later
	if (!$query)
	{
		die ('SQL Error: ' . mysqli_error($dbc));
	}


	$number_unique_questions=get_number_questions($application_id);
if($_SESSION['role']=='4')
{

	echo "<form action='DOCTOR_potential_student_table.php' method='get'>
		 <input type='submit' value='Return to list' />
		 <input type='hidden' name=select_application value=$application_id>
		</form>";
}
else
{
	echo "<form action='DOCTOR_dashboard.php' method='get'>
		 <input type='submit' value='Return to list' />
		 <input type='hidden' name=select_application value=$application_id>
		</form>";
}


?>
<form action='DOCTOR_update_review.php' method='POST'>
	<!--<table width=100% table style>-->
	<table class='data-table2'>

<tr>

</tr>

<?php

	while ($row=$query->fetch(PDO::FETCH_ASSOC))
	{
		// Display applicants's ID
		echo "<tr><thead>";
		echo "<th>EID</th>";
		echo "<td>" . $row['user_id'] .  "</td>";
		echo "</tr>";
		// Display applicants's First Name
		echo "<tr>";
		echo "<th>First Name</th>";
		echo "<td>" . $row['first_name'] .  "</td>";
		echo "</tr>";
		// Display applicants's Last Name
		echo "<tr>";
		echo "<th>Last Name</th>";
		echo "<td>" . $row['last_name'] .  "</td>";
		echo "</tr>";

		// Display applicants's Email
		echo "<tr>";
		echo "<th>Email</th>";
		echo "<td>" . $row['email'] .  "</td>";
		echo "</tr>";
		// Display applicants's Address
		echo "<tr>";
		echo "<th>Address</th>";
		echo "<td>" . $row['address'] .  "</td>";
		echo "</tr>";
		// Display applicants's City
		echo "<tr>";
		echo "<th>City</th>";
		echo "<td>" . $row['city'] .  "</td>";
		echo "</tr>";
		// Display applicants's State
		echo "<tr>";
		echo "<th>State</th>";
		echo "<td>" . $row['state'] .  "</td>";
		echo "</tr>";
		// Display applicants's Zip Code
		echo "<tr>";
		echo "<th>Zip Code</th>";
		echo "<td>" . $row['zip_code'] .  "</td>";
		echo "</tr>";
		// Display applicants's Phone Number
		echo "<tr>";
		echo "<th>Phone Number</th>";
		echo "<td>" . $row['phone'] .  "</td>";
		echo "</tr>";
		// Display applicants's Employment
		echo "<tr>";
		echo "<th>Employment</th>";
		echo "<td>" . $row['employment'] .  "</td>";
		echo "</tr>";
		// Display applicants's Classification
		echo "<tr>";
		echo "<th>Classification</th>";
		echo "<td>" . $row['classification'] .  "</td>";
		echo "</tr>";
		// Display applicants's Degree Type
		echo "<tr>";
		echo "<th>Degree Type</th>";
		echo "<td>" . $row['degree_type'] .  "</td>";
		echo "</tr>";
		// Display applicants's Major
		echo "<tr>";
		echo "<th>Major</th>";
		echo "<td>" . $row['major'] .  "</td>";
		echo "</tr>";

		echo "<tr>";
		echo "<th>Second Major</th>";

		if (isset($row['major_2']))
		{
			echo "<td>".$row['major_2']."</td>";
			echo "</tr>";
		}


		// Display applicants's GPA
		echo "<tr>";
		echo "<th>GPA</th>";
		echo "<td>" . $row['GPA'] .  "</td>";
		echo "</tr>";
		// Display applicants's Credit Hours
		echo "<tr>";
		echo "<th>Credit Hours Enrollment</th>";
		echo "<td>" . $row['credit_hours'] .  " credit hours</td>";
		echo "</tr>";
		// Check if the applicant has worked for DMS before
		if ($row['worked_at_dms']==0)
		{
			$worked_at_dms="No";
		}
		else
		{
			$worked_at_dms="Yes";
		}
		// Display applicants's work history with DMS
		echo "<tr>";
		echo "<th>Has worked at DMS before?</th>";
		echo "<td>$worked_at_dms</td>";
		echo "</tr>";
		// Check if the applicant has volunteered for Seton before
		if ($row['volunteered_at_seton']==0)
		{
			$volunteered_at_seton="No";
		}
		else
		{
			$volunteered_at_seton="Yes";
		}
		// Display applicants's volunteer history with Seton
		echo "<tr>";
		echo "<th>Has volunteered at Seton before?</th>";
		echo "<td>$volunteered_at_seton</td>";
		echo "</tr>";
		// Check if the applicant owns a car
		if ($row['car']=='0')
		{
			$car="No";
		}
		else
		{
			$car="Yes";
		}
		// Display if the applicant has a car
		echo "<tr>";
		echo "<th>Has a car?</th>";
		echo "<td>$car</td>";
		echo "</tr>";
		// Display the languages the applicant is fluent in
		echo "<tr>";
		echo "<th>Fluent in the following language(s):</th>";
		echo "<td>". $row['bilingual']."</td>";
		echo "</tr>";
		// Display applicants's Semester Committment
		echo "<tr>";
		echo "<th>Semester Committment</th>";
		echo "<td>" . $row['semester_commitment'] .  " semester(s)</td>";
		echo "</tr>";
		// Display the programs the applicant has applied to
		echo "<tr>";
		echo "<th>Programs they applied to:</th>";
		echo "<td>" . $row['other_programs'] .  "</td>";
		echo "</tr>";

		echo "<tr>";
		echo "<th>Hours Working</th>";
		echo '<td><input type="text" name="hours_working_week" value="'.$row['hours_working_week'].'"; ></td>';
		echo "</tr>";

		echo "<tr>";
		echo "<th>Hourly Rate</th>";
		echo '<td><input type="text" name="hourly_rate" value="'.$row['hourly_rate'].'"; ></td>';
		echo "</tr>";


		$availability_array=explode(',',$row['availability']);
		?>
</table>
<table class='data-table2'>
			<br></br><thead>
			<th>Semester Availability</th>

			<br></br>

			<td><input type='checkbox' name='availability_list[]' value='NA'<?php if (in_array('NA',$availability_array))echo 'checked="checked"'?>disabled><td>Unknown</td></td>
			<tr class="blankrow">
				</table>
<br></br>
<!--<table width=100% table style>-->

<table class='data-table2'>

			<tr><thead>
				<th></th>
				<th>Monday</th>
				<th>Tuesday</th>
				<th>Wednesday</th>
				<th>Thursday</th>
				<th>Friday</th>
			</tr>


			<!--input checkboxes and row names-->
			<tr>
				<th>8am-9am</th>
				<td><input type='checkbox' class="checkboxtext" name='availability_list[]' value='M8' id='M8' <?php if (in_array('M8',$availability_array))echo 'checked="checked"'?> disabled></td>
				<td><input type='checkbox' class="checkboxtext" name='availability_list[]' value='T8' id='T8' <?php if (in_array('T8',$availability_array))echo 'checked="checked"'?>disabled></td>
				<td><input type='checkbox' class="checkboxtext" name='availability_list[]' value='W8' id='W8' <?php if (in_array('W8',$availability_array))echo 'checked="checked"'?>disabled></td>
				<td><input type='checkbox' class="checkboxtext" class="largerCheckbox" name='availability_list[]' value='TH8' id='TH8' <?php if (in_array('TH8',$availability_array))echo 'checked="checked"'?>disabled></td>
				<td><input type='checkbox' class="checkboxtext" class="largerCheckbox" name='availability_list[]' value='F8' id='F8' <?php if (in_array('F8',$availability_array))echo 'checked="checked"'?>disabled></td>
			</tr>

			<tr>
				<th>9am-10am</th>
				<td><input type='checkbox' class="checkboxtext" name='availability_list[]' value='M9' id='M9' <?php if (in_array('M9',$availability_array))echo 'checked="checked"'?>disabled></td>
				<td><input type='checkbox' class="checkboxtext" name='availability_list[]' value='T9' id='T9' <?php if (in_array('T9',$availability_array))echo 'checked="checked"'?>disabled></td>
				<td><input type='checkbox' class="checkboxtext" name='availability_list[]' value='W9' id='W9' <?php if (in_array('W9',$availability_array))echo 'checked="checked"'?>disabled></td>
				<td><input type='checkbox' class="checkboxtext" name='availability_list[]' value='TH9' id='TH9' <?php if (in_array('TH9',$availability_array))echo 'checked="checked"'?>disabled></td>
				<td><input type='checkbox' class="checkboxtext" name='availability_list[]' value='F9' id='F9' <?php if (in_array('F9',$availability_array))echo 'checked="checked"'?>disabled></td>
			</tr>

			<tr>
				<th>10am-11am</th>
				<td><input type='checkbox' class="checkboxtext" name='availability_list[]' value='M10' id='M10' <?php if (in_array('M10',$availability_array))echo 'checked="checked"'?>disabled></td>
				<td><input type='checkbox' class="checkboxtext" name='availability_list[]' value='T10' id='T10' <?php if (in_array('T10',$availability_array))echo 'checked="checked"'?>disabled></td>
				<td><input type='checkbox' class="checkboxtext" name='availability_list[]' value='W10' id='W10' <?php if (in_array('W10',$availability_array))echo 'checked="checked"'?>disabled></td>
				<td><input type='checkbox' class="checkboxtext" name='availability_list[]' value='TH10' id='TH10' <?php if (in_array('TH10',$availability_array))echo 'checked="checked"'?>disabled></td>
				<td><input type='checkbox' class="checkboxtext" name='availability_list[]' value='F10' id='F10' <?php if (in_array('F10',$availability_array))echo 'checked="checked"'?>disabled></td>
			</tr>

			<tr>
				<th>11am-12pm</th>
				<td><input type='checkbox' class="checkboxtext" name='availability_list[]' value='M11' id='M11' <?php if (in_array('M11',$availability_array))echo 'checked="checked"'?>disabled></td>
				<td><input type='checkbox' class="checkboxtext" name='availability_list[]' value='T11' id='T11' <?php if (in_array('T11',$availability_array))echo 'checked="checked"'?>disabled></td>
				<td><input type='checkbox' class="checkboxtext" name='availability_list[]' value='W11' id='W11' <?php if (in_array('W11',$availability_array))echo 'checked="checked"'?>disabled></td>
				<td><input type='checkbox' class="checkboxtext" name='availability_list[]' value='TH11' id='TH11' <?php if (in_array('TH11',$availability_array))echo 'checked="checked"'?>disabled></td>
				<td><input type='checkbox' class="checkboxtext" name='availability_list[]' value='F11' id='F11' <?php if (in_array('F11',$availability_array))echo 'checked="checked"'?>disabled></td>
			</tr>

			<tr>
				<th>12am-1pm</th>
				<td><input type='checkbox' class="checkboxtext" name='availability_list[]' value='M12' id='M12' <?php if (in_array('M12',$availability_array))echo 'checked="checked"'?>disabled></td>
				<td><input type='checkbox' class="checkboxtext" name='availability_list[]' value='T12' id='T12' <?php if (in_array('T12',$availability_array))echo 'checked="checked"'?>disabled></td>
				<td><input type='checkbox' class="checkboxtext" name='availability_list[]' value='W12' id='W12' <?php if (in_array('W12',$availability_array))echo 'checked="checked"'?>disabled></td>
				<td><input type='checkbox' class="checkboxtext" name='availability_list[]' value='TH12' id='TH12' <?php if (in_array('TH12',$availability_array))echo 'checked="checked"'?>disabled></td>
				<td><input type='checkbox' class="checkboxtext" name='availability_list[]' value='F12' id='F12' <?php if (in_array('F12',$availability_array))echo 'checked="checked"'?>disabled></td>
			</tr>

			<tr>
				<th>1pm-2pm</th>
				<td><input type='checkbox' class="checkboxtext" name='availability_list[]' value='M1' id='M1' <?php if (in_array('M1',$availability_array))echo 'checked="checked"'?>disabled></td>
				<td><input type='checkbox' class="checkboxtext" name='availability_list[]' value='T1' id='T1' <?php if (in_array('T1',$availability_array))echo 'checked="checked"'?>disabled></td>
				<td><input type='checkbox' class="checkboxtext" name='availability_list[]' value='W1' id='W1' <?php if (in_array('W1',$availability_array))echo 'checked="checked"'?>disabled></td>
				<td><input type='checkbox' class="checkboxtext" name='availability_list[]' value='TH1' id='TH1' <?php if (in_array('TH1',$availability_array))echo 'checked="checked"'?>disabled></td>
				<td><input type='checkbox' class="checkboxtext" name='availability_list[]' value='F1' id='F1' <?php if (in_array('F1',$availability_array))echo 'checked="checked"'?>disabled></td>
			</tr>

			<tr>
				<th>2pm-3pm</th>
				<td><input type='checkbox' class="checkboxtext"name='availability_list[]' value='M2' id='M2' <?php if (in_array('M2',$availability_array))echo 'checked="checked"'?>disabled></td>
				<td><input type='checkbox' class="checkboxtext" name='availability_list[]' value='T2' id='T2' <?php if (in_array('T2',$availability_array))echo 'checked="checked"'?>disabled></td>
				<td><input type='checkbox' class="checkboxtext" name='availability_list[]' value='W2' id='W2' <?php if (in_array('W2',$availability_array))echo 'checked="checked"'?>disabled></td>
				<td><input type='checkbox' class="checkboxtext" name='availability_list[]' value='TH2' id='TH2' <?php if (in_array('TH2',$availability_array))echo 'checked="checked"'?>disabled></td>
				<td><input type='checkbox' class="checkboxtext" name='availability_list[]' value='F2' id='F2' <?php if (in_array('F2',$availability_array))echo 'checked="checked"'?>disabled></td>
			</tr>

			<tr>
				<th>3pm-4pm</th>
				<td><input type='checkbox' class="checkboxtext" name='availability_list[]' value='M3' id='M3' <?php if (in_array('M3',$availability_array))echo 'checked="checked"'?>disabled></td>
				<td><input type='checkbox' class="checkboxtext" name='availability_list[]' value='T3' id='T3' <?php if (in_array('T3',$availability_array))echo 'checked="checked"'?>disabled></td>
				<td><input type='checkbox' class="checkboxtext" name='availability_list[]' value='W3' id='W3' <?php if (in_array('W3',$availability_array))echo 'checked="checked"'?>disabled></td>
				<td><input type='checkbox' class="checkboxtext" name='availability_list[]' value='TH3' id='TH3' <?php if (in_array('TH3',$availability_array))echo 'checked="checked"'?>disabled></td>
				<td><input type='checkbox' class="checkboxtext" name='availability_list[]' value='F3' id='F3' <?php if (in_array('F3',$availability_array))echo 'checked="checked"'?>disabled></td>
			</tr>

			<tr>
				<th>4pm-5pm</th>
				<td><input type='checkbox' class="checkboxtext" name='availability_list[]' value='M4' id='M4' <?php if (in_array('M4',$availability_array))echo 'checked="checked"'?>disabled></td>
				<td><input type='checkbox' class="checkboxtext" name='availability_list[]' value='T4' id='T4'<?php if (in_array('T4',$availability_array))echo 'checked="checked"'?>disabled></td>
				<td><input type='checkbox' class="checkboxtext" name='availability_list[]' value='W4' id='W4'<?php if (in_array('W4',$availability_array))echo 'checked="checked"'?>disabled></td>
				<td><input type='checkbox' class="checkboxtext" name='availability_list[]' value='TH4' id='TH4' <?php if (in_array('TH4',$availability_array))echo 'checked="checked"'?>disabled></td>
				<td><input type='checkbox' class="checkboxtext" name='availability_list[]' value='F4' id='F4' <?php if (in_array('F4',$availability_array))echo 'checked="checked"'?>disabled></td>
			</tr>
			</table>

			<tr>
				<td><br></td>
			</tr>

<!--<table width=100% table style>-->

	<tr>
		<td><br></td>
	</tr>
<table class="data-table2">
<!--<table class='data-table'>-->
		<?php
		while ($number_unique_questions>0)
		{
			$number_unique_questions-=1;
			$question=question_unique_question($application_id, $number_unique_questions);
			$answer=answer_unique_question($number_unique_questions, $application_id, $student_id);

			echo "
				<tr>
				</tr>";



			echo "
				<tr><thead>
					<th>".$question."</th>
					<td>".$answer."</td>
				</tr>";

		}
if ($_SESSION['role']=='2')
{
		// Display applicants's review status
		//echo "<tr>";
		echo "<th>Review</th>";

		$stmt = $dbc->query("SELECT * FROM review WHERE user_id='".$student_id."' AND application_id=$application_id;");
       	$x = $stmt->fetch();

		if ($x['competitive']=="2") //if competitive = 2 (Competitive) in the db, show the correct selected value
		{
			echo '
				<td><select name="new_review">
				<option value="competitive = 0">N/A</option>
				<option value="competitive = 1">Noncompetitive</option>
				<option value="competitive = 2" selected="selected">Competitive</option>
			</select></td>';
		}
		elseif ($x['competitive']=="1") //if competitive = 1 (Noncompetitive) in the db, show the correct selected value
		{
			echo'
				<td><select name="new_review">
				<option value="competitive = 0">N/A</option>
				<option value="competitive = 1" selected="selected">Noncompetitive</option>
				<option value="competitive = 2">Competitive</option>
			</select></td>';
		}
		else //if competitive = 0 (N/A) in the db, show the correct selected value
		{
			echo '
				<td><select name="new_review">
				<option value="competitive = 0"selected="selected">N/A</option>
				<option value="competitive = 1">Noncompetitive</option>
				<option value="competitive = 2">Competitive</option>
			</select></td>';
		}

		echo "</tr>";

		echo "
			<tr>
			<th>Potential Candidate</th>";
			if ($x['potential']=="1")
			{
				echo '<td><input type="checkbox" name="potential" value="1" checked="checked"></td>';
			}
			else
			{
				echo '<td><input type="checkbox" name="potential" value="1"></td>';
			}

		echo "
			<tr>
			<th>Interview Candidate</th>";
			if ($x['interview']=="1")
			{
				echo '<td><input type="checkbox" name="interview" value="1" checked="checked"></td>';
			}
			else
			{
				echo '<td><input type="checkbox" name="interview" value="1"></td>';
			}

}

		while ($number_unique_questions>0)
		{
			$number_unique_questions-=1;
			$question=question_unique_question($application_id, $number_unique_questions);
			$answer=answer_unique_question($number_unique_questions, $application_id, $student_id);

			echo "
				<tr><td><br></td>
				<tr><td><br></td>
				<tr><td><br></td>
				<tr><td><br></td>
				<tr><td><br></td>
				<tr><td><br></td>
				<tr>
				<tr><th>Application Questions:</th></tr>";
			echo "
				<tr><td><br></td>
				<tr><td><br></td>
				<tr>
			<th>".$question."</th>
			<td>".$answer."</td>


			<td><br></td></tr>
			<td><br></td></tr>";

			echo "</tr>";


		}
if ($_SESSION['role']=='2')
{
		$accepted_by_dms = $x['accepted_by_dms'];


		//set variable to change whether doctors can accept or unaccept an applicant
		//0 is false 1 is true

		//$application_id = $row['application_id'];
		if ($accepted_by_dms=='1')
		{
			$accept_unaccept='Unaccept';
			$value="0";

		}
		else
		{
			$accept_unaccept='Accept';
			$value="1";
		}

		echo "
			<tr><th>$accept_unaccept Candidate</th></td>
			<td><input type='checkbox' name='new_accepted_by_DMS' id='accept_checkbox' value=$value >
			<input type='hidden' name='user_id' value=$student_id><br /></td>
			<input type='hidden' name='application_id' value=$application_id>
			</tr>";

	}


	}
?>

<?php if ($_SESSION['role']=='2'):?>
</table>
	<tr><td><br></td>
		<td><input type='submit' name= "accept" id="accept_button" value= '  <?php echo $accept_unaccept ?>  ' onclick="return confirm('Are you sure you want to change the Acceptance Status of this student?')"style="background-color:#bf5700;color:white;text-shadow: #000 0px 0px 1px;" disabled='disabled'></td>
		<td><input type='submit' name= "update" value='  Save Changes  ' onclick="return confirm('Are you sure you want to SAVE the changes to review status?')"style="background-color:#bf5700;color:white;text-shadow: #000 0px 0px 1px;"></td>
	<tr>
		<tr><td><br></td>
		<tr><td><br></td>
		<tr><td><br></td>

		<?php endif ?>

		</form>
		
		
		<?php if($_SESSION['role']=='1'): ?>
		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
			<script type="text/javascript">
			<!--//--><![CDATA[//><!--
			window.jQuery || document.write("<script src='/sites/all/modules/custom/utexas_admin/js/replace/backup/jquery.min.js'>\x3C/script>")
			//--><!]]>
			</script>
			<script type="text/javascript" src="https://dellmed.utexas.edu/sites/default/files/js/js_V1ZuwJK9uzfm6fFffOcHHubfxnimoxnbgG58pvTQdpY.js"></script>
			<script type="text/javascript" src="https://dellmed.utexas.edu/sites/default/files/js/js_i8ZDNK9FSclaojQobXVjwcDgllxkCNEBi7F9dR3cyG4.js"></script>
			<script type="text/javascript" src="https://dellmed.utexas.edu/sites/default/files/js/js_OQYJ-u6vDcK-675deS5Xo9mquqU3gecqRovKlzqWxgo.js"></script>
			<script type="text/javascript" src="https://dellmed.utexas.edu/sites/default/files/js/js_RrQc6CubqbOf8B1FDFLiOZd89DCZo5HaON0Jzve9S38.js"></script>
			<script type="text/javascript">
			<!--//--><![CDATA[//><!--
			jQuery.extend(Drupal.settings, {"basePath":"\/","pathPrefix":"","ajaxPageState":{"theme":"dms","theme_token":"ldwKYvqbNm9QvvSHqmM1baDbR7Wu4H0dVqepI3Y2hxU","js":{"https:\/\/ajax.googleapis.com\/ajax\/libs\/jquery\/1.10.2\/jquery.min.js":1,"0":1,"misc\/jquery.once.js":1,"misc\/drupal.js":1,"sites\/all\/libraries\/magnific-popup\/dist\/jquery.magnific-popup.js":1,"sites\/all\/modules\/contrib\/magnific_popup\/js\/behaviors.mfp-formatter.js":1,"sites\/all\/modules\/custom\/utexas_google_cse\/js\/utexas_google_cse.js":1,"sites\/all\/themes\/phase2_theme1\/js\/custom.js":1,"sites\/all\/themes\/dms\/js\/fitvids.js":1,"sites\/all\/themes\/dms\/js\/dmscustom.js":1},"css":{"modules\/system\/system.base.css":1,"modules\/system\/system.menus.css":1,"modules\/system\/system.messages.css":1,"modules\/system\/system.theme.css":1,"sites\/all\/libraries\/magnific-popup\/dist\/magnific-popup.css":1,"sites\/all\/modules\/contrib\/magnific_popup\/css\/mfp-formatter.css":1,"sites\/all\/modules\/contrib\/calendar\/css\/calendar_multiday.css":1,"sites\/all\/modules\/custom\/features\/content_types\/content_type_twitter_widget\/theme\/twitter-widget.css":1,"sites\/all\/modules\/contrib\/date\/date_api\/date.css":1,"sites\/all\/modules\/contrib\/date\/date_popup\/themes\/datepicker.1.7.css":1,"sites\/all\/modules\/custom\/features\/bundles\/featured_media\/theme\/featured_media.css":1,"modules\/field\/theme\/field.css":1,"sites\/all\/modules\/custom\/localist_integration\/css\/localist.css":1,"modules\/node\/node.css":1,"modules\/search\/search.css":1,"modules\/user\/user.css":1,"sites\/all\/modules\/custom\/utexas_fonts\/css\/fonts.css":1,"sites\/all\/modules\/custom\/utexas_google_cse\/css\/utexas_google_cse.css":1,"sites\/all\/modules\/custom\/features\/views\/views_core_home_featured_stories\/theme\/core-home-featured-stories.css":1,"sites\/all\/modules\/custom\/features\/views\/views_utexas_localist_widget\/theme\/utexas-localist-widget.css":1,"sites\/all\/modules\/contrib\/views\/css\/views.css":1,"sites\/all\/modules\/contrib\/ckeditor\/css\/ckeditor.css":1,"sites\/all\/modules\/contrib\/ctools\/css\/ctools.css":1,"sites\/all\/modules\/contrib\/oembed\/oembed.base.css":1,"sites\/all\/modules\/contrib\/oembed\/oembed.theme.css":1,"0":1,"1":1,"sites\/all\/themes\/phase2_theme1\/css\/base.css":1,"sites\/all\/themes\/phase2_theme1\/css\/phase2_pages.css":1,"sites\/all\/themes\/phase2_theme1\/css\/phase2_theme1.css":1,"sites\/all\/themes\/dms\/css\/custom.css":1,"sites\/all\/themes\/dms\/css\/overrides.css":1}},"cseId":"015663220751118638721:x0c8u6cfbrm","magnific_popup_api":{"iframe_patterns":{"youtube":{"index":"youtube.com\/","id":"v=","src":"\/\/www.youtube.com\/embed\/%id%?rel=0\u0026modestbranding=1\u0026playerapiid=mfp-iframe\u0026controls=2\u0026autoplay=1"}}}});
			//--><!]]>
			</script>
			  <script type="text/javascript" src="https://dellmed.utexas.edu/sites/default/files/js/js_9xSy2jfgzGVpfqWMRbersAVIjfBizP0C9bnfdzuyJPo.js"></script>
			<script type="text/javascript" src="//platform.twitter.com/widgets.js"></script>
			    <div class="region region-page-bottom">
			    <!-- Google Tag Manager -->
			<noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-59NMNV"
			height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
			<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
			new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
			j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
			'//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
			})(window,document,'script','dataLayer','GTM-59NMNV');</script>
			<!-- End Google Tag Manager -->  </div>
	<?php else: ?>
	
	
	<script>
		$("#accept_checkbox").click(function(){
			if (this.checked) {
				$('#accept_button').prop('disabled', false);
			}
			else{
				$('#accept_button').prop('disabled', true);
			}
	
		});
	
	
	</script>
	
	<?php endif; ?>
	
	</body>
	</html>


