<?php
	//this will display an error message if the user tries to create an application that already exists in the database
	if (isset($_GET['error']))
	{
		echo '<script language="javascript">';
		echo 'alert("The application already exists")';
		echo '</script>';

	}
?>

<!doctype html>
<html lang="en" dir="ltr">
<head>
	<script src="https://code.jquery.com/jquery-3.1.1.js"></script>
</head>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link rel="apple-touch-icon" sizes="180x180" href="/sites/all/themes/phase2_theme1/img/favicon/apple-touch-icon-180x180.png" />
	<link rel="apple-touch-icon" sizes="152x152" href="/sites/all/themes/phase2_theme1/img/favicon/apple-touch-icon-152x152.png" />
	<link rel="apple-touch-icon" sizes="144x144" href="/sites/all/themes/phase2_theme1/img/favicon/apple-touch-icon-144x144.png" />
	<link rel="icon" href="/sites/all/themes/phase2_theme1/img/favicon/favicon.ico" />
	<!--[if IE]><link rel="shortcut icon" href="/sites/all/themes/phase2_theme1/img/favicon/favicon.ico" />
	<![endif]-->
	<meta name="apple-mobile-web-app-title" content="UT Austin" />
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
						<a href="http://dellmed.utexas.edu" on-click="w3_close()" class="main-logo"><img src ="Dell_Medical_School_logo.png" alt="Home" /></a>
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
									</ul>
								</div>
								<div class="parent-banner-links">
									<h2 class="UT-secondary-logo">
										<a href="http://www.utexas.edu" class="logo-link"><img src="Texas_logo.png" alt="UTexas Home" /><br></a>
										<a href="DMS_logout.php" onclick="w3_close()">Logout</a> 
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
				<!-- Page tabs -->
				<div class="container container-nav container-nav-phase2">
					<div class="row">
						<div class="column small-12">
							<nav>
								<ul class="nav" id="main-nav" role="menu">
									<li class="nav-item" role="menuitem">
										<a href="ADMIN_dashboard.php" onclick="w3_close()" class="nav-link has-child nolink">Home</a>
										<div class="sub-nav-wrapper">
										</div>
									</li>
									<li class="nav-item" role="menuitem">
										<a href="ADMIN_create_program.php" onclick="w3_close()" class="nav-link has-child nolink">New Program</a>
										<div class="sub-nav-wrapper">
										</div>
									</li>
									<li class="nav-item" role="menuitem">
										<a href="ADMIN_create_application.php" onclick="w3_close()" class="nav-link has-child nolink">New Application</a>
										<div class="sub-nav-wrapper">
										</div>
									</li>
									<li class="nav-item" role="menuitem">
										<a href="ADMIN_view_all_active_applications.php" onclick="w3_close()" class="nav-link has-child nolink">Edit Applications</a>
										<div class="sub-nav-wrapper">
										</div>
									</li>
									<li class="nav-item" role="menuitem">
										<a href="DOCTOR_dashboard.php" onclick="w3_close()" class="nav-link has-child nolink">View All Applicants</a>
										<div class="sub-nav-wrapper">
										</div>
									</li>
									<li class="nav-item" role="menuitem">
										<a href="HR_dashboard.php" onclick="w3_close()" class="nav-link has-child nolink">View All Accepted Students</a>
										<div class="sub-nav-wrapper">
										</div>
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

			<!-- Header -->
			<div class="w3-container" style="margin-top:40px" id="showcase">
				<h1 class="w3-jumbo">
					<b>Create a New Application</b>
				</h1>

				<!-- Instructions to create new program -->
				<hr style="width:800px;border:5px solid #BF5700" align="left" class="w3-round">
				<br>
				<b>Please enter the following application information: </b>
				<br>
				<br>
			</div>


			<div class="w3-container" id="application">

				<body>
					<!--this form will post to DMS_connect in order to submit data to DB-->
					<form name="apply_form" action = "ADMIN_create_application_functionality.php" method= "post">

						<table>

							<!--get all program names to populate dropdown-->
							<?php
							//link to file containing this function (line 18)
							require 'DMS_general_functions.php';

							$programs= get_all_programs()
							?>
							<!--specify program application is for & # of unique questions -->
							<tr>
								<td>Program Name</td>
							</tr>
							<tr class="blankrow">
								<td><br></td>
							</tr>
							<tr>
								<td>
									<select name="program_id" required>
										<?php foreach($programs as $program): ?>
											<option value="<?= $program['program_id']; ?>"><?= $program['name_of_program']; ?></option>
										<?php endforeach; ?>
									</select>
								</td>
							</tr>

							<!-- specify term and year for application -->
							<tr>
								<td>Application Term</td>
							</tr>
							<tr class="blankrow">
								<td><br></td>
							</tr>
							<tr>
								<td>
									<select name="term" required>
										<option value="Fall">Fall</option>
										<option value="Spring">Spring</option>
										<option value="Summer">Summer</option>
										<option value="All_Year">All Year</option>
										<option value="School_Year">School Year</option>
									</select>
								</td>
							</tr>
							
							<tr>
								<td>Application Year</td>
							</tr>
							<tr class="blankrow">
								<td><br></td>
							</tr>
							<tr>
								<td>
									<input type="text" placeholder="ex: 2017" name="year" maxlength="4" pattern="^[0-9]*$" required/>
								</td>
							</tr>
							
								<!--text box for number of questions to create-->
								<tr>
									<td>Enter the number of custom application questions</td>
								</tr>
								<tr class="blankrow">
									<td><br></td>
								</tr>
								<tr>
									<td><input type="text" name="number_unique_questions" id="number_unique_questions" size="20" maxlength="2" pattern="^[0-9]+$" required/></td>

								</tr>
								
							</table>

							<table id="unique_questions_table">

							</table>
							</tr>
							
							
							<tr>
								<td><br><td>
							</tr>
							<td><br><b>Please enter the following position information: </b></br><td>
							<tr>
								<td><br><td>
							</tr>
							
							<!--drop-down menu for postion_type-->
							<tr>
								<td>Position Type</td>
							</tr>
							<tr>
								<td><br><td>
							</tr>
							<tr class="blankrow">
								<td><br></td>
							<tr>
							<!--populates the drop-down menu with different opttions-->
							<tr>
								<td><select name="position_type" required>
									<option value="Paid">Paid</option>
									<option value="Non-Paid">Non-Paid</option>
								</select></td>
							</tr>
							
							<!--text box for first name-->
							<tr class="blankrow">
								<td><br></td>
							<tr>
								<td>Position Title</td>
							</tr>
							<tr>
								<td><br><td>
							</tr>
							<tr class="blankrow">
								<td><br></td>
							<tr>
							<tr>
								<td><input type="text" name="position_title" size="20" maxlength="30" required/></td>
							</tr>
							
							
							<!--text box for first name-->
							<tr class="blankrow">
								<td><br></td>
							<tr>
								<td>Supervisor's First Name</td>
							</tr>
							<tr>
								<td><br><td>
							</tr>
							<tr class="blankrow">
								<td><br></td>
							<tr>
							<tr>
								<td><input type="text" name="supervisor_first_name" size="20" maxlength="30" required/></td>
							</tr>

							<!--text box for middle name-->
							<tr>
								<td>Supervisor's Middle Name (if applicable)</td>
							</tr>
							<tr>
								<td><br><td>
							</tr>
							<tr class="blankrow">
								<td><br></td>
							<tr>
							<tr>
								<td><input type="text" name="supervisor_middle_name" size="20" maxlength="30"/></td>
							</tr>

							<!--text box for last name-->
							<tr>
								<td>Supervisor's Last Name</td>
							</tr>
							<tr>
								<td><br><td>
							</tr>
							<tr class="blankrow">
								<td><br></td>
							<tr>
							<tr>
								<td><input type="text" name="supervisor_last_name" size="20" maxlength="30" required/></td>
							</tr>

							<!--text box for eid
							<tr>
								<td>Program Administrator EID</td>
							</tr>
							<tr class="blankrow">
								<td><br></td>
							<tr>
							<tr>
								<td><input type="text" name="doctor_EID" size="20" maxlength="10" required/></td>
							</tr>-->

							<!--drop-down menu for assignment_length-->
							<tr>
								<td>Assignment Length</td>
							</tr>
							<tr class="blankrow">
								<td><br></td>
							<tr>
							<!--populates the drop-down menu with different opttions-->
							<tr>
								<td><select name="assignment_length" required>
									<option value="Semester">Semester</option>
									<option value="Summer">Summer</option>
									<option value="School">School Year</option>
									<option value="Other">Other</option>
								</select></td>
							</tr>

							<!--text boxes for dates-->
							<tr>
								<td>Start Date:</td>
							</tr>
							<tr class="blankrow">
								<td><br></td>
							<tr>
							<tr>
								<td><input type="date" name="start_date" placeholder="mm/dd/yyyy" size="20" maxlength="30" required/></td>
							</tr>
							<!--text boxes for dates-->
							<tr>
								<td>End Date:</td>
							</tr>
							<tr class="blankrow">
								<td><br></td>
							<tr>
							<tr>
								<td><input type="date" name="end_date" placeholder="mm/dd/yyyy" size="20" maxlength="30" required pattern="^\d{2}/\d{2}/\d{4}$"/></td>
							</tr>
								
								
							<!--drop-down menu to specify if the postions is renewable-->
							<tr>
								<td>Renewable position:</td>
							</tr>
							<tr class="blankrow">
								<td><br></td>
							<tr>
							<tr>
								<td><select name="renew" required>
									<option value="1">Yes</option>
									<option value="0">No</option>
								</select></td>
							</tr>
							
							
							<!--drop-down menu to specify the classification for which students need to be-->
							<tr>
								<td>Student Type:</td>
							<tr>
								<tr class="blankrow">
									<td><br></td>
								<tr>
							<tr>
								<td><select name="student_type" required>
									<option value="undergrad">Undergraduate</option>
									<option value="graduate">Graduate</option>
									<option value="other">Other</option>
								</select></td>
							</tr>

							<!--text box for IT Equipment-->
							<tr>
								<td>IT Equipment:</td>
							</tr>
							<tr class="blankrow">
								<td><br></td>
							<tr>
							<tr>
								<td><input type="text" name="it_equipment" size="20" maxlength="30" required/></td>
							</tr>

							<!--text box for Work Location-->
							<tr>
								<td>Specify the Student's Work Location:</td>
							</tr>
							<tr>
								<td>(For students working remotely, specify the supervisor's work location.)</td>
							</tr>
							<tr class="blankrow">
								<td><br></td>
							<tr>
							<tr>
								<td><input type="text" name="work_location" placeholder="ex. station #, seat #" size="20" maxlength="30" required/></td>
							</tr>

							<!--text box for Hours Per Week-->
							<tr>
								<td>Maximum expected Hours Per Week:</td>
							</tr>
							<tr class="blankrow">
								<td><br></td>
							<tr>
							<tr>
								<td><input type="text" name="hours_per_week" placeholder="ex. 20" size="20" maxlength="30" required/></td>
							</tr>

							<!--text box for hourly rate-->
							<tr>
								<td>Maximum expected Hourly Rate:</td>
							</tr>
							<tr class="blankrow">
								<td><br></td>
							<tr>
							<tr>
								<td><input type="text" name="hourly_rate" placeholder="ex. 10" size="20" maxlength="30" required/></td>
							</tr>
	
						<!--submit button. Will post info.-->
						<td colspan="1" style="text-align: center; float: center;"><input type="submit" value="Submit" style="background-color:#bf5700;color:white;text-shadow: #000 0px 0px 1px;" name="submit"/> </td>

					<script>

						$("#number_unique_questions").keyup(function(){
							var question_number = $("#number_unique_questions").val();

							$("#unique_questions_table").empty();
							$("#unique_questions_table").prepend("Enter the unique questions below");
							while (question_number>0){

								var text = $("<tr></tr>").html("<td><input type='text' name='list_unique_questions[]' id='unique_question' required/></td>");
								$("#unique_questions_table").append(text);

								question_number-=1;
							}

						});
					</script>

				</body>
</html>
