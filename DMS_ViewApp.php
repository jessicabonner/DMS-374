<?php

	//this will display an error message if the user tries to accept a student already accepted in the database
	if (isset($_GET['error']))
	{
		echo '<script language="javascript">';
		echo 'alert("This student is already accepted. Cannot accept again.")';
		echo '</script>';

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
      </div> <!-- container-topnav -->

      <div class="container container-nav container-nav-phase2">
        <div class="row">
          <div class="column small-12">
            <nav>
              <ul class="nav" id="main-nav" role="menu">
            <li class="nav-item" role="menuitem">
        <a href="DMS_doctor.php" onclick="w3_close()" class="nav-link has-child nolink">Home</a>                  <div class="sub-nav-wrapper">
          </div>
              </li>
                <li class="nav-item" role="menuitem">
        <a href="" onclick="w3_close()" class="nav-link has-child nolink">HR Forms</a>                  <div class="sub-nav-wrapper">
          </div>
              </li>
                <li class="nav-item" role="menuitem">
        <a href="" onclick="w3_close()" class="nav-link has-child nolink">Biographical Forms</a>                  <div class="sub-nav-wrapper">
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
<div class="w3-container" style="margin-top:40px; font-familt:benton sans;" id="showcase">
	<h1 class="w3-jumbo">
		<b>Program Applicant</b>
	</h1>


	<hr style="min-width:100%;border:5px solid #BF5700" class="w3-round">
</div>
</html>

<form action='DMS_doctor_AcceptApp.php' method='POST'>

<?php
require 'DMS_doctor_functionality.php';
require 'DMS_general_functions.php';


	// Get ID from the URL
	$id = $_GET['id'];
	$application_id=$_GET['selected_application'];

	$query = select_student2($id);

	//TODO: DeleteThis Later
	if (!$query) 
	{
		die ('SQL Error: ' . mysqli_error($dbc));
	}
	
	
	$number_unique_questions=get_number_questions($application_id);
	

?>
<form action='DMS_doctor_AcceptApp.php' method='POST'>
<table width=100% table style>
<tr>

</tr>

<?php
	while ($row=$query->fetch(PDO::FETCH_ASSOC))
	{
		// Display applicants's ID
		echo "<tr>";
		echo "<th>ID</th>";
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
		// Check if the applicant has a Second Major
		if ($row['major_2']=='')
		{
			$major_2="None";
		}
		// Display applicants's Second Major
		echo "<tr>";
		echo "<th>Second Major</th>";

		if (isset($major_2))
		{
			echo "<td>$major_2</td>";}
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
			if ($row['car']==0)
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
		// Display applicants's Semester Committment
			echo "<tr>";
			echo "<th>Semester Committment</th>";
			echo "<td>" . $row['semester_commitment'] .  " semester(s)</td>";
			echo "</tr>";
		// Display applicants's review status
			echo "<tr>";
			echo "<th>Review</th>";

			$stmt = $dbc->query("SELECT * FROM review WHERE user_id=$id AND application_id=$application_id;");
       	 	$x = $stmt->fetch();

			if ($x['competitive']=="2") //if review = 2 (Competitive) in the db, show the correct selected value
			{
				echo '<td><select name="new_review">
					<option value="competitive = 0 WHERE user_id='.$row['user_id'].'">N/A</option>
					<option value="competitive = 1 WHERE user_id='.$row['user_id'].'">Noncompetitive</option>
					<option value="competitive = 2 WHERE user_id='.$row['user_id'].'" selected="selected">Competitive</option>
				</select></td>';
			}
			elseif ($x['competitive']=="1") //if competitive = 1 (Noncompetitive) in the db, show the correct selected value
			{
				echo'<td><select name="new_review">
					<option value="competitive = 0 WHERE user_id='.$row['user_id'].'">N/A</option>
					<option value="competitive = 1 WHERE user_id='.$row['user_id'].'" selected="selected">Noncompetitive</option>
					<option value="competitive = 2 WHERE user_id='.$row['user_id'].'">Competitive</option>
				</select></td>';
			}
			else //if competitive = 0 (N/A) in the db, show the correct selected value
			{
				echo '<td><select name="new_review">
					<option value="competitive = 0 WHERE user_id='.$row['user_id'].'"selected="selected">N/A</option>
					<option value="competitive = 1 WHERE user_id='.$row['user_id'].'">Noncompetitive</option>
					<option value="competitive = 2 WHERE user_id='.$row['user_id'].'">Competitive</option>
				</select></td>';
			}
			
			echo "</tr>";
			
			echo "<tr>
				<th>Potential Candidate?</th>";
				if ($x['potential']=="1")
				{
					echo '<td><input type="checkbox" name="potential" value="1" checked="checked"></td>';
				}
				else
				{
					echo '<td><input type="checkbox" name="potential" value="1"></td>';
				}
				
				
		
			
			while ($number_unique_questions>0)
			{	
				$number_unique_questions-=1;
				$question=question_unique_question($application_id, $number_unique_questions);
				$answer=answer_unique_question($number_unique_questions, $application_id, $id);
				echo "<tr>
				<th>".$question."</th>
				<td>".$answer."</td>
				</tr>";
				
			}
			
 
		}

		//echo "<form action='DMS_doctor_AcceptApp.php' method='POST' onsubmit= return confirm('Are you sure you want to submit changes?');>";

		echo "
			<td><br></td>
			<td><br></td>
			<tr>
				<td></td>
				<td></td>
				<td><input type='checkbox' name='new_accepted_by_DMS' value=1> Check to Accept Applicant<br />
				<input type='hidden' name='user_id' value=$id><br /></td>
				<input type='hidden' name='application_id' value=$application_id>
			</tr>";

?>
</table>
	<tr><td><br></td>
		<td><input type='submit' name= "accept" value='Accept Student' onclick="return confirm('Are you sure you want to ACCEPT this student?')"style="background-color:#bf5700;color:white;text-shadow: #000 0px 0px 1px;"></td>
		<td><input type='submit' name= "update" value='Save Changes' onclick="return confirm('Are you sure you want to SAVE the changes to review status?')"style="background-color:#bf5700;color:white;text-shadow: #000 0px 0px 1px;"></td>
	<tr>
</form>
