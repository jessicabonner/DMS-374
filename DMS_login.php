<?php 
//LOGIN PAGE
require 'DMS_general_functions.php'; 
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
    	</div>
<!-- container-topnav -->
		<div class="container container-nav container-nav-phase2">
        <div class="row">
        <div class="column small-12">
        <nav>
        <ul class="nav" id="main-nav" role="menu">

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




		<head>
			<link href='application.css' type='text/css' rel='stylesheet'>
			<!--<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>-->
			<script src="https://code.jquery.com/jquery-3.1.1.js"></script>
		</head>




		<!-- !PAGE CONTENT! -->
		<div class="w3-main" style="margin-left:40px;margin-right:450px">

  		<!-- Header -->
		<div class="w3-container" style="margin-top:40px" id="showcase">
			<h1 class="w3-jumbo">
				<b>Login</b>
			</h1>
		<hr style="width:800px;border:5px solid #BF5700" align="left" class="w3-round">
		<br>
			<b>Please enter your UT EID and a password below.
			</b>
		<br>
		<?php
	if(isset($_GET['error']))
	{
		if ($_GET['error']=="1")
		{
			echo "<br>";
			echo "<font color=#ff0000;>*Incorrect username or password</font>";
			echo "<br>";
		}

	}
?>
		</div>

		<div class="w3-container" id="application" style="margin-top:10px">
	<body>
	<!--this form will post to DMS_connect in order to submit data to DB-->
	<form name="login_form" action = "DMS_login_connect.php" method= "post">

		<table>

			<!--text box for students first name-->
			<tr>
				<td>UT EID</td>
			</tr>
			<tr>
				<td><input type="text" name="username" size="20" maxlength="30" required/></td>
			</tr>

			<!--text box for students middle name-->
			<tr>
				<td>Enter your password</td>
			</tr>
			<tr>
				<td><input type="password" name="password" size="20" maxlength="30" required/></td>
			</tr>


			<!--break-->
		<tr>
			<td><br></td>
		</tr>


		<!--submit button. Will post info.-->
		<td colspan="1" style="text-align: center; float: center;"><input type="submit" style="background-color:#bf5700;color:white;text-shadow: #000 0px 0px 1px;" value="Login"/> </td>


		<tr>
			<td><br></td>
		</tr>
		<tr>
			<td><br></td>
		</tr>

		<tr>
			<td><a href='STUDENT_create_profile.php'>Create Profile</a> </td>
		</tr>

		<tr>
			<td><br></td>
		</tr>

		<tr>
			<td><a href='DMS_reset_password.html'>Forgot Password?</a> </td>
		</tr>


		<tr>
			<td><br></td>
		</tr>
		<tr>
			<td><br></td>
		</tr>
	</form>
</body>
