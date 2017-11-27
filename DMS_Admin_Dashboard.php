<?php
	//this will display a message when a user is redirected to this page after completing an action
	if (isset($_GET['message']))
	{
		if ($_GET['message']=="0"){
			echo '<script language="javascript">';
			echo 'alert("The new program has been created successfully")';
			echo '</script>';
		}
		if ($_GET['message']=="1"){
			echo '<script language="javascript">';
			echo 'alert("The new application has been created successfully")';
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
	<style type="text/css" media="all">
		/*--><![CDATA[/*><!--*/
		#main-nav li a{font-family:open_sans;}
		.UT-page{margin-top:50px;}
		/*]]>*/
	</style>
	<link type="text/css" rel="stylesheet" href="https://dellmed.utexas.edu/sites/default/files/css/css_a-iX8Z0TGtqOTsvj7qkSGIxcKy1DQVow38xs9TgeR0g.css" media="all" />
	<script type="text/javascript" src="https://dellmed.utexas.edu/sites/default/files/js/js_nGsGFAVr6D4cI4gpxlZHFJ7PJaRNEW3-0MdbO3ITML0.js"></script>
	
	<title>Program Applicants</title>
				<style type="text/css">
					body {
						font-size: 15px;
						color: #343d44;
						font-family: "segoe-ui", "open-sans", tahoma, arial;
						padding: 0;
						margin: 0;
					}
					table {
						margin: auto;
						font-family: "Lucida Sans Unicode", "Lucida Grande", "Segoe Ui";
						font-size: 12px;
					}
					h1 {
						margin: 25px auto 0;
						text-align: center;
						text-transform: uppercase;
						font-size: 17px;
					}

					table td {
						transition: all .5s;
					}
			
					/* Table */
					.data-table {
						border-collapse: collapse;
						font-size: 14px;
						min-width: 537px;
					}

					.data-table th, 
					.data-table td {
						border: 1px solid #e1edff;
						padding: 7px 17px;
					}
					.data-table caption {
						margin: 7px;
					}
	
					/* Table Header */
					.data-table thead th {
						background-color: #ff751a;
						color: #FFFFFF;
						border-color: #ff751a !important;
						text-transform: uppercase;
					}

					/* Table Body */
					.data-table tbody td {
						color: #353535;
					}
					.data-table tbody td:first-child,
					.data-table tbody td:nth-child(4),
					.data-table tbody td:last-child {
						text-align: right;
					}

					.data-table tbody tr:nth-child(odd) td {
						background-color: #f4fbff;
					}
					.data-table tbody tr:hover td {
						background-color: #ffd1b3;
						border-color: #ffd1b3;
					}

					/* Table Footer */
					.data-table tfoot th {
						background-color: #e5f5ff;
						text-align: right;
					}
					.data-table tfoot th:first-child {
						text-align: left;
					}
					/* Color for an empy table field */
					/*.data-table tbody td:empty{
						background-color: #ffcccc;
					} */
				</style>
	
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
								<div class="hide-for-large-up">
									<ul class="topnav-constituents" role="menu">
										<li class="nav-item" role="menuitem"><a href="/maps" id="cta-button-style1" class="nav-link">Maps</a></li>
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
										<a href="DMS_Admin_Dashboard.php" onclick="w3_close()" class="nav-link has-child nolink">Home</a> 
										<div class="sub-nav-wrapper">
										</div>
									</li>
									<li class="nav-item" role="menuitem">
										<a href="DMS_CreateProgram.html" onclick="w3_close()" class="nav-link has-child nolink">New Program</a> 
										<div class="sub-nav-wrapper">
										</div>
									</li>
									<li class="nav-item" role="menuitem">
										<a href="DMS_CreateApplication.php" onclick="w3_close()" class="nav-link has-child nolink">New Application</a>                 
										<div class="sub-nav-wrapper">
										</div>
									</li>
									<li class="nav-item" role="menuitem">
										<a href="DMS_View_All_Applications.php" onclick="w3_close()" class="nav-link has-child nolink">Edit Applications</a>                  
										<div class="sub-nav-wrapper">
										</div>
									</li>
									<li class="nav-item" role="menuitem">
										<a href="DMS_Doctor.php" onclick="w3_close()" class="nav-link has-child nolink">View All Applicants</a> 
										<div class="sub-nav-wrapper">
										</div>
									</li>
									<li class="nav-item" role="menuitem">
										<a href="DMS_HR_Dashboard.php" onclick="w3_close()" class="nav-link has-child nolink">View All Accepted Students</a>                  
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
						<b>Welcome to the Admin Dashboard</b>
					</h1>



					<hr style="width:800px;border:5px solid #BF5700" class="w3-round">
				</div>



				<div class="w3-container" id="application" style="margin-top:10px"></div>





				<table class="data-table">
					<caption class="title">All Open Applications</caption>
					<thead>
						<tr>
							<th>ID</th>
							<th>Program Name</th>
							<th>Term</th>
							<th>Year</th>
							<th>Applicants</th>
				
						</tr>
					</thead>
		
					<tbody>
<?php

	require 'DMS_db.php';

	$sql = 'SELECT application_id, term, year, number_unique_questions, list_unique_questions, program_id, application_closed
	FROM applications WHERE application_closed=0 ORDER BY application_id DESC';

	$query= $dbc->query($sql);;

	if (!$query) {
		die ('SQL Error: ' . mysqli_error($dbc));
	}
	
	while ($row=$query->fetch(PDO::FETCH_ASSOC)){
		
		$id = $row['application_id'];
				
		$sql="SELECT name_of_program FROM programs WHERE program_id=$row[program_id]";
		$stmt=$dbc->prepare($sql);
		$stmt->execute();
	
		$program = $stmt->fetch();
		$name_of_program=$program['name_of_program'];
				
		//get the table name for this application
		$name_of_table= $id."_".str_replace(' ', '_', $name_of_program)."_".$row['term']."_".$row['year'];
				
		//get a count of all applicants in the table
		$sql="SELECT COUNT(*) as number_of_applicants from $name_of_table";
		$stmt=$dbc->prepare($sql);
		$stmt->execute();
		$application=$stmt->fetch();
				
		echo "<td> <a href='DMS_view_application.php?id= $id '>" .$row['application_id'] . "</a> </td>";
	
		echo '
			<td>'.$name_of_program.'</td>
			<td>'.$row['term'].'</td>
			<td>'.$row['year'].'</td>
			<td>'.$application['number_of_applicants'].'</td>		
			</tr>';
			
	}
?>
					</tbody>

				</table>
