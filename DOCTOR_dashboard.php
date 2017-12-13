<?php

	$role_id_array=array("2","1");
	require "DMS_authenticate.php";
	$user_id = $_SESSION['user_id'];

	//require file containing all doctor functions
	require 'DOCTOR_functionality.php';
	require 'DMS_general_functions.php';

	//this will display an error message if the user tries to accept a student already accepted in the database
	if (isset($_GET['error']))
	{
		echo '<script language="javascript">';
		echo 'alert("The selected list contains students that are already accepted. Please try again.")';
		echo '</script>';
	}
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
								<a href="DMS_change_password.php" style="position:relative;left:-40px;top:-12px;color:white;" onclick="w3_close()"><font size="2">Change Password</font></a>
								<a href="DMS_logout.php" style="position:relative;left:-20px;top:-12px;color:white;" onclick="w3_close()"><font size="2">Logout</font></a>
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
			
<?php elseif($_SESSION['role']=='2'): ?>

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
								<a href="DMS_change_password.php" style="position:relative;left:-40px;top:-12px;color:white;" onclick="w3_close()"><font size="2">Change Password</font></a>
								<a href="DMS_logout.php" style="position:relative;left:-20px;top:-12px;color:white;" onclick="w3_close()"><font size="2">Logout</font></a>
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
	 
        
       
        </div>


    </div> <!-- nav-wrapper -->

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:40px;margin-right:450px">

<?php endif; ?>

  <!-- Header -->
<div class="w3-container" style="margin-top:120px; font-familt:benton sans;" id="showcase">
	<h1 class="w3-jumbo">
		<b>Student Applicants</b>
	</h1>

	<hr style="min-width:100%;border:5px solid #BF5700" align="left" class="w3-round">
	<br>
	<b> </b>
</div>

<?php
	if ($_SESSION['role']=='2')
	{
		$applications=select_all_doctor_applications();
	}
	else
	{
		//get list of applications to populate dropdown
		$applications=select_all_applications();
	}
	

?>
<body>
	<form name="select_application" method="get">
		<select name="select_application" required>
			<?php foreach($applications as $application):
			//call function from DMS_doctor_funtionality.php to get the name of the program
			$name_of_program=get_program($application['program_id']);?>
				<option id="select_application" name="select_application" value="<?= $application['application_id']; ?>"><?= $name_of_program.' '.$application['term'].' '.$application['year'] ; ?></option>
			<?php endforeach; ?>
		</select>
		<td><input id='program' type='submit' value='Choose Program'style="background-color:#bf5700;color:white;text-shadow: #000 0px 0px 1px;"/></td>
	</form>

	<?php if(isset($_GET['select_application'])):?>
		<!--search bar-->
		<form name="search" method= "get">
			<tr>
				<td><input placeholder="Search" style="width:50%;"id='search' type='text' name='search_criteria' size='20'/></td>
				<input type="hidden" name="select_application" value="<?php echo $_GET['select_application']?>"/>
				<!--<td><input id='submit' type='submit' value='Search'/></td>-->
			</tr>
		</form>

		<details>
		<!-- Doctor sort function -->
		<summary><b>Sort By</b></summary>
		<p>
		<form name="sort" method= "get">
			<tr>
				<td><input type="radio" name="sort" value="user_id">ID<br></td>
			</tr>
			<tr>
				<td><input type="radio" name="sort" value="GPA ASC">GPA Ascending<br></td>
			</tr>
			<tr>
				<td><input type="radio" name="sort" value="GPA DESC">GPA Descending<br></td>
			</tr>
			<input type="hidden" name="select_application" value="<?php echo $_GET['select_application']?>"/>

			<td><input id='sort' type='submit' style="background-color:#bf5700;color:white;text-shadow: #000 0px 0px 1px;" value='Search'/></td>

		</form>
		</p>
	</details>
	<br>

		<details>
		<!-- Doctor filter function -->
		<summary><b>Filter</b></summary>
		<p>
		<form name="filter" method= "get">

			<form name="filter" method= "get">
				<tr>
					<td>GPA Greater than</td>
				</tr>
				<tr class="blankrow">
				<tr>
					<td><input type="text" name="GPA_greater" size="20" style="width:25%;"/></td>
				</tr>

				<tr>
					<td><br></td>
					<td>GPA Less than</td>
				</tr>
				<tr class="blankrow">
				<tr>
					<td><input type="text" name="GPA_less" size="20" style="width:25%;"/></td>
				</tr>

				<!--checkbox buttons for student's classification-->
				<tr>
					<!--Page Break-->
					<td><br></td>
					<td>Classification</td>
				</tr>
				<tr class="blankrow">
					<td><br></td>
				<tr class="blankrow">
					<td><br></td>
				<tr>
					<td><input type="checkbox" name="filter_criteria[]" value=" classification='1st year' " >1st Year<br></td>
				</tr>
				<tr>
					<td><input type="checkbox" name="filter_criteria[]" value=" classification='2nd year' ">2nd Year<br></td>
				</tr>
				<tr>
					<td><input type="checkbox" name="filter_criteria[]" value=" classification='3rd year' ">3rd Year<br></td>
				</tr>
				<tr>
					<td><input type="checkbox" name="filter_criteria[]" value=" classification='4th year' ">4th Year<br></td>
				</tr>
				<tr>
					<td><input type="checkbox" name="filter_criteria[]" value=" classification='5th year' ">5th Year<br></td>
				</tr>

				<tr>
					<!--Page Break-->
					<td><br></td>
					<td>Type of Student</td>
				</tr>
				<tr class="blankrow">
					<td><br></td>
				<tr class="blankrow">
					<td><br></td>
				<tr>
					<td><input type="checkbox" name="filter_criteria[]" value=" student_type='Undergraduate' " >Undergraduate<br></td>
				</tr>
				<tr>
					<td><input type="checkbox" name="filter_criteria[]" value=" student_type='Graduate' ">Graduate<br></td>
				</tr>
				<tr>
					<td><input type="checkbox" name="filter_criteria[]" value=" student_type='PhD' ">PhD<br></td>
				</tr>
				<tr>
					<td><input type="checkbox" name="filter_criteria[]" value=" student_type='Other' ">Other<br></td>
				</tr>

				<!--checkbox buttons for if student is eligible to work in US/employed at UT-->
				<tr>
				<!--Page Break-->
				<td><br></td>
					<td>Work eligibility</td>
				</tr>
				<!--Page Break-->
				<tr class="blankrow">
					<td><br></td>
				<tr class="blankrow">
					<td><br></td>
				</tr>
				<tr>
					<td><input type="checkbox" name="filter_criteria[]" value=" employment='UT' " >Currently employed at UT<br></td>
				</tr>
				<tr>
					<td><input type="checkbox" name="filter_criteria[]" value=" employment='eligible' ">Eligible to work in the US with no restrictions<br></td>
				</tr>
				<tr>
					<td><input type="checkbox" name="filter_criteria[]" value=" employment='none' ">None of the above<br></td>
				</tr>

				<!--checkbox buttons for if they have worked at dell med school before-->
				<tr>
				<!--Page Break-->
				<td><br></td>
					<td>Previously worked at Dell Medical School?</td>
				</tr>
				<!--Page Break-->
				<tr class="blankrow">
					<td><br></td>
				<tr class="blankrow">
					<td><br></td>
				<tr>
					<td><input type="checkbox" name="filter_criteria[]" value=" worked_at_dms='1' ">Yes<br></td>
				</tr>
				<tr>
					<td><input type="checkbox" name="filter_criteria[]" value=" worked_at_dms='0' ">No<br></td>
				</tr>


				<!--checkbox buttons for if they have volunteered at Seton before-->
				<tr>
				<!--Page Break-->
				<td><br></td>
					<td>Previously volunteered at Seton Hospital?</td>
				</tr>
				<!--Page Break-->
				<tr class="blankrow">
					<td><br></td>
				<tr class="blankrow">
					<td><br></td>
				<tr>
					<td><input type="checkbox" name="filter_criteria[]" value=" volunteered_at_seton='1' " >Yes<br></td>
				</tr>
				<tr>
					<td><input type="checkbox" name="filter_criteria[]" value=" volunteered_at_seton='0' ">No<br></td>
				</tr>

				<!--checkbox buttons for if they have volunteered at seton before-->
				<tr>
				<!--Page Break-->
				<td><br></td>
					<td>Car?</td>
				</tr>
				<!--Page Break-->
				<tr class="blankrow">
					<td><br></td>
				<tr class="blankrow">
					<td><br></td>
				<tr>
					<td><input type="checkbox" name="filter_criteria[]" value=" car='1' " >Yes<br></td>
				</tr>
				<tr>
					<td><input type="checkbox" name="filter_criteria[]" value=" car='0' ">No<br></td>
				</tr>

				<!--checkbox for review status-->
				<tr>
					<!--Page Break-->
					<td><br></td>
					<td>Review Status</td>
				</tr>
				<!--Page Break-->
				<tr class="blankrow">
					<td><br></td>
				<tr class="blankrow">
					<td><br></td>
				<tr>
					<td><input type="checkbox" name="filter_criteria[]" value=" competitive='0' ">Not yet reviewed<br></td>
				</tr>
				<tr>
					<td><input type="checkbox" name="filter_criteria[]" value=" competitive='1' ">Noncompetitive<br></td>
				</tr>
				<tr>
					<td><input type="checkbox" name="filter_criteria[]" value=" competitive='2' ">Competitive<br></td>
				</tr>

				<!--Page Break-->

				<tr class="blankrow">
					<td><br></td>
				<tr>
					<td><input type="checkbox" name="filter_criteria[]" value=" interview='1' ">Interview?<br></td>
				</tr>


				<tr>
					<td><input type="checkbox" name="filter_criteria[]" value=" potential='1' ">Potential Candidate?<br></td>
				</tr>
				
				<tr>
					<td><input type="checkbox" name="filter_criteria[]" value=" approved='1' ">Approved?<br></td>
				</tr>


				<tr>
					<td><input type="checkbox" name="filter_criteria[]" value=" accepted_by_dms='1' ">Accepted?<br></td>
				</tr>




				<!--break-->
				<tr>
					<td><br></td>
				</tr>

				<!--Radio button for AND/OR search type-->
				<tr>
					<td><b><input type="radio" name="and_or" value="AND" required>Search for records containing all criteria<br></b></td>
				</tr>
				<tr>
					<td><b><input type="radio" name="and_or" value="OR">Search for records containing at least one criteria<br></b></td>
				</tr>

				<input type="hidden" name="select_application" value="<?php echo $_GET['select_application']?>"/>

				<td><input id='submit' type='submit' style="background-color:#bf5700;color:white;text-shadow: #000 0px 0px 1px;" value='Search'/></td>

			</form>
			</p>
		</details>

	<?php
		//call select_application_student_list function from DOCTOR_functionality.php
		//to get the list of applicants for this program
		$student_applicants=select_application_student_list($_GET['select_application']);
		
		$student_applicants= implode(',',$student_applicants);


		//call select_application program from DOCTOR_functionality.php
		//to get all information on the selected application
		$selected_application = select_application($_GET['select_application']);
		$selected_application_id=$selected_application['application_id'];

		//call get_program on DOCTOR_functionality.php to get the name of the program
		$name_of_program=get_program($selected_application['program_id']);
		
			if ($_SESSION['role']=='1')
			{
				$disabled='disabled';
			}
			else
			{
				$disabled='';
			}
	?>

		<form action='DOCTOR_update_review_list.php' method='post'>
		<input type="hidden" name="select_application" value="<?php echo $_GET['select_application']?>"/>
		<!-- Doctor view for applicants -->
		<table class="data-table">
			<caption class="title"><?php echo $name_of_program.' '.$selected_application['term'].' '.$selected_application['year']; ?></caption>
			<thead>
				<tr>

					<th>EID</th>
					<th>First Name</th>
					<th>Last Name</th>
					<th>Application Status</th>

					<th>GPA</th>
					<th>Email</th>
					<th>Type</th>
					<th>Classification</th>
					<th>Major</th>
					<th>Interview?</th>
					<th>Potential Candidate?</th>
					<th>Approved</th>
					<th>Accepted?</th>
					<th>Student accepted Offer?</th>


				</tr>
			</thead>

<?php




			//if user is trying to sort
			if (isset($_GET['sort']))
			{
				$query=doctor_sort($_GET['sort'], $selected_application_id);


			}
			//if user is trying to sort
			elseif(isset($_GET['search_criteria'])&&  $_GET['search_criteria']!="")
			{
				//call search_criteria function
				$query=search($_GET['search_criteria'],$selected_application_id);

			}
			//if user wants to filter by gpa only
			elseif(!isset($_GET['filter_criteria']) && (isset($_GET['GPA_greater'])||isset($_GET['GPA_less'])))
			{
				if (($_GET['GPA_greater'] !="")&&($_GET['GPA_less'] !=""))
				{
					$query=filter_both_gpa($_GET['GPA_greater'],$_GET['GPA_less'],$selected_application_id,$_GET['and_or']);

				}
				elseif($_GET['GPA_greater']!="")
				{
					$query=filter_only_gpa($_GET['GPA_greater'],'>',$selected_application_id);

				}

				elseif($_GET['GPA_less']!="")
				{
					$query=filter_only_gpa($_GET['GPA_less'],'<',$selected_application_id);

				}
			}
			//if user wants to filter by "gpa greater than" along with other filter criteria
			elseif (isset($_GET['GPA_greater']) && $_GET['GPA_greater']!="" && $_GET['GPA_less']=="")
			{
				$query=filter_with_gpa($_GET['filter_criteria'], $_GET['and_or'],$_GET['GPA_greater'],'>',$selected_application_id);

			}
			//if user wants to filter by "gpa less than" along with other filter criteria
			elseif(isset($_GET['GPA_greater']) && $_GET['GPA_less']!="" && $_GET['GPA_greater']=="")
			{
				$query=filter_with_gpa($_GET['filter_criteria'], $_GET['and_or'],$_GET['GPA_less'],'<',$selected_application_id);

			}
			elseif((isset($_GET['GPA_greater'])&&isset($_GET['GPA_less']))&&isset($_GET['filter_criteria']))
			{
				if (($_GET['GPA_greater'] !="")&&($_GET['GPA_less'] !=""))
				{
					$query=filter_with_both_gpa($_GET['filter_criteria'], $_GET['and_or'], $_GET['GPA_greater'], $_GET['GPA_less'], $selected_application_id);
				}
				else
				{
					$query=filter($_GET['filter_criteria'], $_GET['and_or'],$selected_application_id); //call filter_criteria function
				}
			}


			//if user wants to filter by anything other than gpa
			elseif(isset($_GET['filter_criteria']))
			{

				$query=filter($_GET['filter_criteria'], $_GET['and_or'],$selected_application_id); //call filter_criteria function

			}
			//if no filter, sort, or search
			elseif (isset($student_applicants))
			{
				try
				{
					$query= select_student_from_list($student_applicants);
					
				}
				//if the program has no applicants
				catch(Exception $e)
				{
					echo "No students have applied yet";
					die();
				}

			}

			//if there is an error in the query, display error
			if (!$query)
			{
				//TODO: delete this later
				//die ('SQL Error: ' . mysqli_error($dbc));
				die("There was an error");
			}


			//Use the query to get each record and display the applicant's student info in a table
			while ($row=$query->fetch(PDO::FETCH_ASSOC))
			{


				$id = $row['user_id'];
				
				$working_for_dms = $row['working_for_dms'];
				$review_array = array('1', '0');


			


				echo "<td> <a href='DOCTOR_view_detailed_student_info.php?id=$id&selected_application=$selected_application_id'>" .$row['user_id'] . "</a> </td>";

				echo '
						<td>'.$row['first_name'].'</td>
						<td>'.$row['last_name'].'</td>';

						//call function select_student from SMD_doctor_functionality.php
						//to pull the value of the competitive field in table 'review'
						$x=select_student_review($id, $_GET['select_application']);
						
						$id_format="'".$id."'";
						

						if ($x['competitive']=="2"): //if competitive = 2 (Competitive) in the db, show the correct selected value
						?>
							<td width="20%"><select name="application_review_list[]"<style="width:200px;"> <?php echo $disabled ?>>
								<option value="competitive = 0 WHERE user_id='<?php echo $id?>'">N/A</option>
								<option value="competitive = 1 WHERE user_id='<?php echo $id?>'">Noncompetitive</option>
								<option value="competitive = 2 WHERE user_id='<?php echo $id?>'" selected="selected">Competitive</option>
							</style></select></td>
				<?php
						elseif ($x['competitive']=="1"): //if competitive = 1 (Noncompetitive) in the db, show the correct selected value
				?>
							<td width="20%"><select name="application_review_list[]"<style="width:200px;"> <?php echo $disabled ?>>
								<option value="competitive = 0 WHERE user_id='<?php echo $id?>'">N/A</option>
								<option value="competitive = 1 WHERE user_id='<?php echo $id?>'" selected="selected">Noncompetitive</option>
								<option value="competitive = 2 WHERE user_id='<?php echo $id?>'">Competitive</option>
							</style></select></td>
				<?php
						else: //if competitive = 0 (N/A) in the db, show the correct selected value
						?>
						 
								<td wdith="20%"><select name="application_review_list[]"<style="width:200px;"> <?php echo $disabled ?>>
								<option value="competitive = 0 WHERE user_id='<?php echo $id?>'"selected="selected">N/A</option>
								<option value="competitive = 1 WHERE user_id='<?php echo $id?>'">Noncompetitive</option>
								<option value="competitive = 2 WHERE user_id='<?php echo $id?>'">Competitive</option>
							</style></select></td>
						<?php endif;

							echo '

								<td>'.$row['GPA'].'</td>
								<td>'.$row['email'].'</td>
								<td>'.$row['student_type'].'</td>
								<td>'.$row['classification'].'</td>
								<td>'.$row['major'].'</td>';

						/* if ($row['working_for_dms']==0)
						{
							$working_for_dms="No";
						}
						else{
							$working_for_dms="Yes";
						}

				echo '  <td>'.$working_for_dms.'</td>
					</tr>';*/


					if($x['interview']=="1")
					{
						//echo '<td><input type="checkbox" name="availability_list[]" value="M4" id="M4" checked="checked"disabled></td>';
						echo "<td>&#10004;</td>";
					}
					else
					{
						echo "<td></td>";
					}
					if($x['potential']=="1")
					{
						//echo '<td><input type="checkbox" name="availability_list[]" value="M4" id="M4" checked="checked"disabled></td>';
						echo "<td>&#10004;</td>";
					}
					else
					{
						echo "<td></td>";
					}
					if($x['approved']=="1")
					{
						//echo '<td><input type="checkbox" name="availability_list[]" value="M4" id="M4" checked="checked"disabled></td>';
						echo "<td>&#10004;</td>";
					}
					else
					{
						echo "<td></td>";
					}
					if($x['accepted_by_dms']=="1")
					{
						//echo '<td><input type="checkbox" name="availability_list[]" value="M4" id="M4" checked="checked"disabled></td>';
						echo "<td>&#10004;</td>";
					}
					else
					{
						echo "<td></td>";
					}
					if($x['student_accept_offer']=="1")
					{
						//echo '<td><input type="checkbox" name="availability_list[]" value="M4" id="M4" checked="checked"disabled></td>';
						//echo "<td>&#10004;</td>";
						echo "<td><b>Yes</b></td>";
					}
					elseif($x['student_accept_offer']=="0")
					{
						//echo "<td>&#x2717;</td>";
						echo "<td><b>No</b></td>";
					}
					else
					{
						echo "<td></td>";
					}

				echo "</tr>";


			}
		?>

		</table>

		<!--Page Break-->
		<tr>
			<td><br></td>
			<?php if ($_SESSION['role']=='2'): ?>

			<input type='hidden' name='application_id' value=<?php echo $selected_application_id ?>>
			<td><input type='submit' name= "save" value='Save Changes' style="background-color:#bf5700;color:white;text-shadow: #000 0px 0px 1px;" onclick="return confirm('Are you sure you want to SAVE the changes to review status?')"></td>
			<?php  endif; ?>
		<tr>

	</form>

	<?php endif; ?>


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
	<?php endif; ?>
	
	
	
</body>
</html>
