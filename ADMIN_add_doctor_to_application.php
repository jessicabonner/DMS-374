<?php

	$role_id_array=array("1");
	require "DMS_authenticate.php";
	$user_id = $_SESSION['user_id'];
	
	
	require 'DMS_general_functions.php';
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
								<a href="#" style="position:relative;left:-40px;top:-12px;color:white;" onclick="w3_close()"><font size="5">Change Password</font></a>							
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
										<a href="ADMIN_create_profile.php" onclick="w3_close()" class="nav-link">New Profile</a>
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
					                      <a href="ADMIN_create_application.php" onclick="w3_close()"  class="sub-nav-link"><span>New Applications</span></a>                    </li>
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
						</thead>
				
						<tbody>
				<?php
				
					
							$doctor_array= get_doctor_list($_GET['select_application']);
					
							foreach($doctor_array as $doctor)
							{
								echo "<tr>";
									echo "<td>".$doctor."<p></td>";
									
									$role_id_array=array(get_role($doctor));
									if ($role_id_array=array('4'))
									{
										echo "<td>&#10004;</td>";
									}
									else
									{
										echo "<td></td>";
									}
								echo "</tr>";
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
				