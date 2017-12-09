<?php 
	$role_id="5";
	require "DMS_authenticate.php";
	$user_id = $_SESSION['user_id'];
	
	date_default_timezone_set('America/Chicago');

	
	require "STUDENT_functionality.php";
	require "DMS_general_functions.php";
	
	if (isset($_GET['message']))
	{
		if ($_GET['message']=="1")
		{
			echo '<script language="javascript">';
			echo 'alert("You have already responded to this offer")';
			echo '</script>';
		}
		elseif($_GET['message']=="2")
		{
			echo '<script language="javascript">';
			echo 'alert("You have successfully accepted your offer")';
			echo '</script>';
		}
		elseif($_GET['message']=="3")
		{
			echo '<script language="javascript">';
			echo 'alert("You have successfully declined your offer")';
			echo '</script>';
		}


	}
?>

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
      </div>
<!-- container-topnav -->
		<div class="container container-nav container-nav-phase2">
        <div class="row">
        <div class="column small-12">
        <nav>
        <ul class="nav" id="main-nav" role="menu">
        <li class="nav-item" role="menuitem">
        	<a href="STUDENT_dashboard.php" onclick="w3_close()" class="nav-link has-child nolink">Home</a>
			<div class="sub-nav-wrapper">
            </div>
        </li>
        <li class="nav-item" role="menuitem">
        	<a href="STUDENT_edit_profile_information.php" onclick="w3_close()" class="nav-link has-child nolink">Edit Profile</a>                  <div class="sub-nav-wrapper">
          	</div>
        </li>
        <li class="nav-item" role="menuitem">
        	<a href="STUDENT_create_student_information.php" onclick="w3_close()" class="nav-link has-child nolink">New Application</a>                  <div class="sub-nav-wrapper">
          	</div>
        </li>
		 <li class="nav-item" role="menuitem">
        	<a href="DMS_logout.php" onclick="w3_close()" class="nav-link has-child nolink">Logout</a>                  <div class="sub-nav-wrapper">
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
				<b>Welcome!</b>
			</h1>
		<hr style="width:800px;border:5px solid #BF5700" class="w3-round">
		
		
		<br>
			<b>You have applied to the following programs. If you would like to apply to another program, click the "New Application" tab on the navigation bar.
			</b>
		<br>
		</div>
		
		
		
		<table class="data-table">
			<caption class="title">Programs</caption>
			<thead>
				<tr>
					
					<th>Program</th>
					<th>Term</th>
					<th>Year</th>
					<th>Application Submit Date</th>
					<th>Status</th>
				</tr>
			</thead>
			
			
		<?php
		
			$application_array=get_applications_student_applied_to($user_id);
			$already_accepted_offer=check_student_accepted_offer();
			
			foreach($application_array as $row)
				{
					//call function get_program from DMS_general_functions to get the program name
					echo '<tr><td>'.get_program($row['program_id']).'</td>
						<td>'.$row['term'].'</td>
						<td>'.$row['year'].'</td>
						<td>'.get_application_submit_date($user_id, $row['application_id']).'</td>';
						
						if (get_accepted_declined_offer($user_id, $row['application_id'])=="0")
						{
							echo '<td>Offer Declined</td>
							</tr>';
						}
						elseif(get_accepted_declined_offer($user_id, $row['application_id'])=="1")
						{
							echo '<td>Offer Accepted</td>
							</tr>';
							
						}
						else
						{
							if ($already_accepted_offer=="FALSE")
							{
								echo '<td><a href="STUDENT_accept_offer.php?&application_id='.$row['application_id'].'">'.get_accepted($user_id, $row['application_id']).'</a></td>
								</tr>';
							}
							elseif($already_accepted_offer=="TRUE")
							{
								echo '<td>'.get_accepted($user_id, $row['application_id']).'</td>
								</tr>';
							}
							else
							{
								echo "<td>$already_accepted_offer</td>";
							}
							
						}
						
		
				}
		
		?>
		
		</table>