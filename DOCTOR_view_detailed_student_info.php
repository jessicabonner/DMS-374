<?php
/*
	//this will display an error message if the user tries to accept a student already accepted in the database
	if (isset($_GET['error']))
	{
		echo '<script language="javascript">';
		echo 'alert("This student is already accepted. Cannot accept again.")';
		echo '</script>';

	}
	*/
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
        <a href="DOCTOR_dashboard.php" onclick="w3_close()" class="nav-link has-child nolink">Home</a>                  <div class="sub-nav-wrapper">
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


	<hr style="min-width:100%;border:5px solid #BF5700" align="left" class="w3-round">
</div>
</html>





<?php
require 'DOCTOR_functionality.php';
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

	//TODO add if user is supervisor, redirect to potential_student_list
	echo "<form action='DOCTOR_dashboard.php' method='get'>
		 <input type='submit' value='Return to list' />
		 <input type='hidden' name=select_application value=$application_id>
		</form>"


?>
<form action='DOCTOR_update_review.php' method='POST'>
	<table width=100% table style>

<tr>

</tr>

<?php
	while ($row=$query->fetch(PDO::FETCH_ASSOC))
	{
		// Display applicants's ID
		echo "<tr>";
		echo "<th>ID</th>";
		//echo "<td width='50%'>" . $row['user_id'] .  "</td>";
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
			<br></br>
			<th>Availability for the upcoming semester</th>
			<td><input type='checkbox' name='availability_list[]' value='NA' <?php if (in_array('NA',$availability_array))echo 'checked="checked"'?>disabled>Unknown</td>
			<tr class="blankrow">



<table width=100% table style>


			<tr>
				<td></td>
				<td>Monday</td>
				<td>Tuesday</td>
				<td>Wednesday</td>
				<td>Thursday</td>
				<td>Friday</td>
			</tr>
			<tr class='blankrow'>
				<td><br></td>


			<!--input checkboxes and row names-->
			<tr>
				<td>8am-9am</td>
				<td><input type='checkbox' name='availability_list[]' value='M8' id='M8' <?php if (in_array('M8',$availability_array))echo 'checked="checked"'?> disabled></td>
				<td><input type='checkbox' name='availability_list[]' value='T8' id='T8' <?php if (in_array('T8',$availability_array))echo 'checked="checked"'?>disabled></td>
				<td><input type='checkbox' name='availability_list[]' value='W8' id='W8' <?php if (in_array('W8',$availability_array))echo 'checked="checked"'?>disabled></td>
				<td><input type='checkbox' name='availability_list[]' value='TH8' id='TH8' <?php if (in_array('TH8',$availability_array))echo 'checked="checked"'?>disabled></td>
				<td><input type='checkbox' name='availability_list[]' value='F8' id='F8' <?php if (in_array('F8',$availability_array))echo 'checked="checked"'?>disabled></td>
			</tr>

			<tr>
				<td>9am-10am</td>
				<td><input type='checkbox' name='availability_list[]' value='M9' id='M9' <?php if (in_array('M9',$availability_array))echo 'checked="checked"'?>disabled></td>
				<td><input type='checkbox' name='availability_list[]' value='T9' id='T9' <?php if (in_array('T9',$availability_array))echo 'checked="checked"'?>disabled></td>
				<td><input type='checkbox' name='availability_list[]' value='W9' id='W9' <?php if (in_array('W9',$availability_array))echo 'checked="checked"'?>disabled></td>
				<td><input type='checkbox' name='availability_list[]' value='TH9' id='TH9' <?php if (in_array('TH9',$availability_array))echo 'checked="checked"'?>disabled></td>
				<td><input type='checkbox' name='availability_list[]' value='F9' id='F9' <?php if (in_array('F9',$availability_array))echo 'checked="checked"'?>disabled></td>
			</tr>

			<tr>
				<td>10am-11am</td>
				<td><input type='checkbox' name='availability_list[]' value='M10' id='M10' <?php if (in_array('M10',$availability_array))echo 'checked="checked"'?>disabled></td>
				<td><input type='checkbox' name='availability_list[]' value='T10' id='T10' <?php if (in_array('T10',$availability_array))echo 'checked="checked"'?>disabled></td>
				<td><input type='checkbox' name='availability_list[]' value='W10' id='W10' <?php if (in_array('W10',$availability_array))echo 'checked="checked"'?>disabled></td>
				<td><input type='checkbox' name='availability_list[]' value='TH10' id='TH10' <?php if (in_array('TH10',$availability_array))echo 'checked="checked"'?>disabled></td>
				<td><input type='checkbox' name='availability_list[]' value='F10' id='F10' <?php if (in_array('F10',$availability_array))echo 'checked="checked"'?>disabled></td>
			</tr>

			<tr>
				<td>11am-12pm</td>
				<td><input type='checkbox' name='availability_list[]' value='M11' id='M11' <?php if (in_array('M11',$availability_array))echo 'checked="checked"'?>disabled></td>
				<td><input type='checkbox' name='availability_list[]' value='T11' id='T11' <?php if (in_array('T11',$availability_array))echo 'checked="checked"'?>disabled></td>
				<td><input type='checkbox' name='availability_list[]' value='W11' id='W11' <?php if (in_array('W11',$availability_array))echo 'checked="checked"'?>disabled></td>
				<td><input type='checkbox' name='availability_list[]' value='TH11' id='TH11' <?php if (in_array('TH11',$availability_array))echo 'checked="checked"'?>disabled></td>
				<td><input type='checkbox' name='availability_list[]' value='F11' id='F11' <?php if (in_array('F11',$availability_array))echo 'checked="checked"'?>disabled></td>
			</tr>

			<tr>
				<td>12am-1pm</td>
				<td><input type='checkbox' name='availability_list[]' value='M12' id='M12' <?php if (in_array('M12',$availability_array))echo 'checked="checked"'?>disabled></td>
				<td><input type='checkbox' name='availability_list[]' value='T12' id='T12' <?php if (in_array('T12',$availability_array))echo 'checked="checked"'?>disabled></td>
				<td><input type='checkbox' name='availability_list[]' value='W12' id='W12' <?php if (in_array('W12',$availability_array))echo 'checked="checked"'?>disabled></td>
				<td><input type='checkbox' name='availability_list[]' value='TH12' id='TH12' <?php if (in_array('TH12',$availability_array))echo 'checked="checked"'?>disabled></td>
				<td><input type='checkbox' name='availability_list[]' value='F12' id='F12' <?php if (in_array('F12',$availability_array))echo 'checked="checked"'?>disabled></td>
			</tr>

			<tr>
				<td>1pm-2pm</td>
				<td><input type='checkbox' name='availability_list[]' value='M1' id='M1' <?php if (in_array('M1',$availability_array))echo 'checked="checked"'?>disabled></td>
				<td><input type='checkbox' name='availability_list[]' value='T1' id='T1' <?php if (in_array('T1',$availability_array))echo 'checked="checked"'?>disabled></td>
				<td><input type='checkbox' name='availability_list[]' value='W1' id='W1' <?php if (in_array('W1',$availability_array))echo 'checked="checked"'?>disabled></td>
				<td><input type='checkbox' name='availability_list[]' value='TH1' id='TH1' <?php if (in_array('TH1',$availability_array))echo 'checked="checked"'?>disabled></td>
				<td><input type='checkbox' name='availability_list[]' value='F1' id='F1' <?php if (in_array('F1',$availability_array))echo 'checked="checked"'?>disabled></td>
			</tr>

			<tr>
				<td>2pm-3pm</td>
				<td><input type='checkbox' name='availability_list[]' value='M2' id='M2' <?php if (in_array('M2',$availability_array))echo 'checked="checked"'?>disabled></td>
				<td><input type='checkbox' name='availability_list[]' value='T2' id='T2' <?php if (in_array('T2',$availability_array))echo 'checked="checked"'?>disabled></td>
				<td><input type='checkbox' name='availability_list[]' value='W2' id='W2' <?php if (in_array('W2',$availability_array))echo 'checked="checked"'?>disabled></td>
				<td><input type='checkbox' name='availability_list[]' value='TH2' id='TH2' <?php if (in_array('TH2',$availability_array))echo 'checked="checked"'?>disabled></td>
				<td><input type='checkbox' name='availability_list[]' value='F2' id='F2' <?php if (in_array('F2',$availability_array))echo 'checked="checked"'?>disabled></td>
			</tr>

			<tr>
				<td>3pm-4pm</td>
				<td><input type='checkbox' name='availability_list[]' value='M3' id='M3' <?php if (in_array('M3',$availability_array))echo 'checked="checked"'?>disabled></td>
				<td><input type='checkbox' name='availability_list[]' value='T3' id='T3' <?php if (in_array('T3',$availability_array))echo 'checked="checked"'?>disabled></td>
				<td><input type='checkbox' name='availability_list[]' value='W3' id='W3' <?php if (in_array('W3',$availability_array))echo 'checked="checked"'?>disabled></td>
				<td><input type='checkbox' name='availability_list[]' value='TH3' id='TH3' <?php if (in_array('TH3',$availability_array))echo 'checked="checked"'?>disabled></td>
				<td><input type='checkbox' name='availability_list[]' value='F3' id='F3' <?php if (in_array('F3',$availability_array))echo 'checked="checked"'?>disabled></td>
			</tr>

			<tr>
				<td>4pm-5pm</td>
				<td><input type='checkbox' name='availability_list[]' value='M4' id='M4' <?php if (in_array('M4',$availability_array))echo 'checked="checked"'?>disabled></td>
				<td><input type='checkbox' name='availability_list[]' value='T4' id='T4'<?php if (in_array('T4',$availability_array))echo 'checked="checked"'?>disabled></td>
				<td><input type='checkbox' name='availability_list[]' value='W4' id='W4'<?php if (in_array('W4',$availability_array))echo 'checked="checked"'?>disabled></td>
				<td><input type='checkbox' name='availability_list[]' value='TH4' id='TH4' <?php if (in_array('TH4',$availability_array))echo 'checked="checked"'?>disabled></td>
				<td><input type='checkbox' name='availability_list[]' value='F4' id='F4' <?php if (in_array('F4',$availability_array))echo 'checked="checked"'?>disabled></td>
			</tr>

			<tr>
				<td><br></td>
			</tr>
</table>
<table width=100% table style>
		<?php
		while ($number_unique_questions>0)
		{
			$number_unique_questions-=1;
			$question=question_unique_question($application_id, $number_unique_questions);
			$answer=answer_unique_question($number_unique_questions, $application_id, $id);
			
			echo "
				<tr><td><br></td>
				<tr><td><br></td>
				<tr><td><br></td>
				<tr>
				</tr>";
			

				
			echo "
				<tr>
					<th>".$question."</th>
					<td>".$answer."</td>
				</tr>";

		}

		// Display applicants's review status
		//echo "<tr>";
		echo "<th>Review</th>";

		$stmt = $dbc->query("SELECT * FROM review WHERE user_id=$id AND application_id=$application_id;");
       	$x = $stmt->fetch();

		if ($x['competitive']=="2") //if competitive = 2 (Competitive) in the db, show the correct selected value
		{
			echo '
				<td><select name="new_review">
				<option value="competitive = 0 WHERE user_id='.$row['user_id'].'">N/A</option>
				<option value="competitive = 1 WHERE user_id='.$row['user_id'].'">Noncompetitive</option>
				<option value="competitive = 2 WHERE user_id='.$row['user_id'].'" selected="selected">Competitive</option>
			</select></td>';
		}
		elseif ($x['competitive']=="1") //if competitive = 1 (Noncompetitive) in the db, show the correct selected value
		{
			echo'
				<td><select name="new_review">
				<option value="competitive = 0 WHERE user_id='.$row['user_id'].'">N/A</option>
				<option value="competitive = 1 WHERE user_id='.$row['user_id'].'" selected="selected">Noncompetitive</option>
				<option value="competitive = 2 WHERE user_id='.$row['user_id'].'">Competitive</option>
			</select></td>';
		}
		else //if competitive = 0 (N/A) in the db, show the correct selected value
		{
			echo '
				<td><select name="new_review">
				<option value="competitive = 0 WHERE user_id='.$row['user_id'].'"selected="selected">N/A</option>
				<option value="competitive = 1 WHERE user_id='.$row['user_id'].'">Noncompetitive</option>
				<option value="competitive = 2 WHERE user_id='.$row['user_id'].'">Competitive</option>
			</select></td>';
		}

		echo "</tr>";
		/*
		echo "
			<tr><td><br></td>
			<tr>
			<th>Accept Candidate</th>";
			if ($x['accepted_by_dms']=="1")
			{
				echo '<td><input type="checkbox" name="accepted_by_dms" value="1" checked="checked"></td>';
			}
			else
			{
				echo '<td><input type="checkbox" name="accepted_by_dms" value="1"></td>';
			}
		*/

		echo "
			<tr><td><br></td>
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

		echo "<tr><td><br></td>
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

		while ($number_unique_questions>0)
		{
			$number_unique_questions-=1;
			$question=question_unique_question($application_id, $number_unique_questions);
			$answer=answer_unique_question($number_unique_questions, $application_id, $id);
			
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

		}
		
		$accepted_by_dms = $x['accepted_by_dms'];
		
		//set variable to change whether doctors can accept or unaccept an applicant
		//0 is false 1 is true
		
		//$application_id = $row['application_id'];
		if ($accepted_by_dms=='0')
		{
			$accept_unaccept='Accept';
			$value="1";
		}
		else
		{
			$accept_unaccept='Unaccept';
			$value="0";
		}
		
		echo "<tr><td><br></td>
			<tr><th>$accept_unaccept Candidate</th></td>
			<td><input type='checkbox' name='new_accepted_by_DMS' value=$value >
			<input type='hidden' name='user_id' value=$id><br /></td>
			<input type='hidden' name='application_id' value=$application_id>
			</tr>";

	}

?>

</table>
	<tr><td><br></td>
		<td><input type='submit' name= "accept" value= '  <?php echo $accept_unaccept ?>  ' onclick="return confirm('Are you sure you want to change the Acceptance Status of this student?')"style="background-color:#bf5700;color:white;text-shadow: #000 0px 0px 1px;"></td>
		<td><input type='submit' name= "update" value='  Save Changes  ' onclick="return confirm('Are you sure you want to SAVE the changes to review status?')"style="background-color:#bf5700;color:white;text-shadow: #000 0px 0px 1px;"></td>
	<tr>
		<tr><td><br></td>
		<tr><td><br></td>
		<tr><td><br></td>
</form>
