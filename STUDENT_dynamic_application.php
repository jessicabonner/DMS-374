<?php
	require "DMS_general_functions.php";
	$role_id_array=array("5");
	require "DMS_authenticate.php";
	require 'STUDENT_dynamic_application_functionality.php';
	

	$user_id=$_SESSION['user_id'];
?>

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
        	<div class="sub-nav-wrapper">
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
		<b><?php echo $name_of_program ?></b>
	</h1>

	<hr style="width:800px;border:5px solid #BF5700" class="w3-round">

</div>
<div class="w3-container" id="application" style="margin-top:10px">

<body>



	<!--this form will post to DMS_connect in order to submit data to DB-->
	<form name="apply_form" action = "STUDENT_dynamic_application_connect.php" method= "post" onsubmit="return confirm('Are you sure you want to submit?');">
		<input type="hidden" name="application_id" value="<?php echo $application_id?>"/>

		<table>

<?php

				foreach($array_unique_questions as $key=>$value)
				{
					echo "<div>";
					echo "<p>$value<p>";
					echo "<textarea class='written' placeholder='Please enter your response here' name='question_$key' rows='10'
					cols'800' required></textarea><br>";
					echo '</div>';
				}


?>
		<tr><br>
			<br>
			<td><p style="font-size:90%;">I certify that all the information provided by me in connection with my application, whether on this document or not, is true and complete, and I understand that any misstatement, falsification, or omission of information shall be grounds for refusal to hire or, if hired, termination. I understand any current or former employment at The University of Texas at Austin must be disclosed on my application. I understand that any offer of employment is contingent upon my agreement to abide by the rules and regulations of The Board of Regents of The University of Texas System.</p><p style="font-size:90%;">I hereby authorize The University of Texas at Austin or any law enforcement agency to furnish to The University of Texas at Austin my criminal conviction record for a deferred adjudication, misdemeanor or felony offense at age 17 or older. I do hereby release all agents, servants, and employees of UT Austin, the person in charge of such law enforcement agency or department and all members of such law enforcement agency or department from all liability resulting from the furnishing of this information to The University of Texas at Austin.</p>

<p style="font-size:90%;">I authorize The University of Texas at Austin to communicate with persons listed as references, former employers, and any others with whom you desire to check. I agree to hold such persons harmless with respect to any information they may give about me.</p>

		</tr>

		<tr>
			<td><input type="checkbox" name="terms" value="1" required style="font-size:90%;"> I agree to the terms and conditions<br></td>
		</tr>



		</table>
		<br><br>
		<!--submit button. Will post info.-->
		<td colspan="1" style="text-align: center; float: center;"><input type="submit" value="Submit" style="background-color:#bf5700;color:white;text-shadow: #000 0px 0px 1px;" name="submit"/> </td>
		*Once you submit this form you will not be able to change your answers
		</form>
		<script>
		//function to limit the amount of characters in textarea
		$("textarea").keyup(function()
			{
				var words = this.value.match(/\S+/g).length;
				if (words > 500) {
				// Split the string on first 500 words and rejoin on spaces so that any words past 500 are cut off
				var trimmed = $(this).val().split(/\s+/, 500).join(" ");
				// Add a space at the end to make sure more typing creates new words to work in this function
				$(this).val(trimmed + " ");
			}
		});
</script>
</body>
</html>
