<?php
require "DMS_general_functions.php";
	$role_id_array=array("3","1");
	require "DMS_authenticate.php";
	$user_id = $_SESSION['user_id'];

if ($_SESSION['role']=='1'): ?>

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
																<li class="sub-nav-item">
													<a href="ADMIN_change_user_password.php" onclick="w3_close()"  class="sub-nav-link"><span>Change User's Password</span></a>                    </li>
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
										<a href="HR_dashboard.php" onclick="w3_close()" class="nav-link">View All Filled Positions</a>
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
/*-->
<![CDATA[/*><!--*/
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
          <ul class="topnav-constituents" role="menu">
		   <li class="nav-item" role="menuitem"><a href="/maps" id="cta-button-style1" class="nav-link">Maps</a></li>
		   <li class="nav-item" role="menuitem"><a href="/philanthropy" id="cta-button-style2" class="nav-link">Give</a></li>
		   <li class="nav-item" role="menuitem"><a href="/events" class="nav-link">Events</a></li>
		   <li class="nav-item" role="menuitem"><a href="/in-the-news" class="nav-link">News</a></li>
		  </ul>
		 </div>
          <div class="parent-banner-links">

						<a href="DMS_change_password.php" style="position:relative;left:-40px;top:-12px;color:white;" onclick="w3_close()"><font size="2">Change Password</font></a>
						<a href="DMS_logout.php" style="position:relative;left:-20px;top:-12px;color:white;" onclick="w3_close()"><font size="2">Logout</font></a>
           <h2 class="UT-secondary-logo">
            <a href="http://www.utexas.edu" class="logo-link"><img src="Texas_logo.png" alt="UTexas Home" /></a>
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
</div>

     <div class="container container-nav container-nav-phase2">
      <div class="row">
       <div class="column small-12">
        <nav>
         <ul class="nav" id="main-nav" role="menu">
          <li class="nav-item" role="menuitem">
			<a href="HR_dashboard.php" onclick="w3_close()" class="nav-link has-child nolink">Home</a>
			<div class="sub-nav-wrapper"></div>
          </li>


          <li class="nav-item" role="menuitem">
			<a href="HR_view_all_applications.php" onclick="w3_close()" class="nav-link has-child nolink">All Applications</a>
			<div class="sub-nav-wrapper"></div>
          </li>
          <li class="nav-item" role="menuitem">
       </div>
      </div>
          </li>
         </ul>
        </nav>
     </div>
    </div>
<!-- container-nav-phase2 -->

</div><!-- nav-wrapper -->

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:40px;margin-right:450px">

<?php endif; ?>

  <!-- Header -->
<div class="w3-container" style="margin-top:40px; font-familt:benton sans;" id="showcase">
	<h1 class="w3-jumbo">
		<b>Program Applicant</b>
	</h1>


	<hr style="min-width:100%;border:5px solid #BF5700" align="left" class="w3-round">
	<br>
	<b> </b>
	<br>
	<br>
</div>
</html>


<?php
require 'DMS_db.php';

//this will display an error message if the user tries to accept a student already accepted in the database

//echo "<form action='DOCTOR_update_review.php' method='POST'">

// Get ID from the URL
$id = $_GET['id'];

//$result = mysqli_query($dbc, "SELECT * FROM application WHERE ApplicationID = '$id'");
$result = "SELECT * FROM student_info WHERE user_id = '$id'";

$query= $dbc->query($result);


$query= $dbc->query($result);;

if (!$query) {
	die ('SQL Error: ' . mysqli_error($dbc));
}

echo "<form action='HR_dashboard.php' method='get'>
	 <input type='submit' style='background-color:#bf5700;color:white;text-shadow: #000 0px 0px 1px;' value='Return to list' />
	 <input type='hidden' name=user_id value=$id>
	</form>"

?>
<form action='HR_working_for_dms.php' method='post'>
<input type="hidden" name="user_id" value=<?php echo $id ?>>
<!--<table width=100% table border>-->
<tr>

</tr>

<table class="data-table2">

<?php
if ($_SESSION['role']=='1')
{
	$disabled='disabled';
}
else
{
	$disabled="";
}

//while($row = mysqli_fetch_array($result))
while ($row=$query->fetch(PDO::FETCH_ASSOC))
{

echo "<tr><thead>";
echo "<th>ID</th>";
echo "<td>" . $row['user_id'] .  "</td>";
echo "</tr>";

echo "<tr>";
echo "<th>First Name</th>";
echo "<td>" . $row['first_name'] .  "</td>";
echo "</tr>";

echo "<tr>";
echo "<th>Middle Name</th>";
echo "<td>" . $row['middle_name'] .  "</td>";
echo "</tr>";

echo "<tr>";
echo "<th>Last Name</th>";
echo "<td>" . $row['last_name'] .  "</td>";
echo "</tr>";

echo "<tr>";
echo "<th>Email</th>";
echo "<td>" . $row['email'] .  "</td>";
echo "</tr>";

echo "<tr>";
echo "<th>Address</th>";
echo "<td>" . $row['address'] .  "</td>";
echo "</tr>";

echo "<tr>";
echo "<th>City</th>";
echo "<td>" . $row['city'] .  "</td>";
echo "</tr>";

echo "<tr>";
echo "<th>State</th>";
echo "<td>" . $row['state'] .  "</td>";
echo "</tr>";

echo "<tr>";
echo "<th>Zip Code</th>";
echo "<td>" . $row['zip_code'] .  "</td>";
echo "</tr>";

echo "<tr>";
echo "<th>Phone Number</th>";
echo "<td>" . $row['phone'] .  "</td>";
echo "</tr>";

echo "<tr>";
echo "<th>Employment</th>";
echo "<td>" . $row['employment'] .  "</td>";
echo "</tr>";

echo "<tr>";
echo "<th>Classification</th>";
echo "<td>" . $row['classification'] .  "</td>";
echo "</tr>";

echo "<tr>";
echo "<th>Student Type</th>";
echo "<td>" . $row['student_type'] .  "</td>";
echo "</tr>";

echo "<tr>";
echo "<th>Degree Type</th>";
echo "<td>" . $row['degree_type'] .  "</td>";
echo "</tr>";

/*echo "<tr>";
echo "<th>Major</th>";
echo "<td>" . $row['major'] .  "</td>";
echo "</tr>";

if ($row['major_2']=='')
{
	$major_2="None";
}

echo "<tr>";
echo "<th>Second Major</th>";
//echo "<td>" . $row['major_2'] .  "</td>";
if (isset($major_2)){
echo "<td>$major_2</td>";}
echo "</tr>";
*/

echo "<tr>";
echo "<th>Credit Hours Enrollment</th>";
echo "<td>" . $row['credit_hours'] .  " credit hours</td>";
echo "</tr>";

if ($row['worked_at_dms']==0)
{
	$worked_at_dms="No";
}
else{
	$worked_at_dms="Yes";
}

echo "<tr>";
echo "<th>Has worked at DMS before?</th>";
//echo "<td>" . $row['worked_at_dms'] .  "</td>";
echo "<td>$worked_at_dms</td>";
echo "</tr>";

if ($row['volunteered_at_seton']==0)
{
	$volunteered_at_seton="No";
}
else{
	$volunteered_at_seton="Yes";
}

echo "<tr>";
echo "<th>Has volunteered at Seton before?</th>";
//echo "<td>" . $row['volunteered_at_seton'] .  "</td>";
echo "<td>$volunteered_at_seton</td>";
echo "</tr>";

if ($row['car']==0)
{
	$car="No";
}
else{
	$car="Yes";
}

echo "<tr>";
echo "<th>Has a car?</th>";
//echo "<td>" . $row['car'] .  "</td>";
echo "<td>$car</td>";
echo "</tr>";

echo "<tr>";
echo "<th>Hours Working</th>";
//echo "<td>" . $row['hours_working_week'] .  " hours/week</td>";
//echo "<td><input type='text' name='hours_working_week' value='$row['hours_working_week']'</td>";
echo '<td><input type="text" name="hours_working_week" value="'.$row['hours_working_week'].'"'. $disabled.'></td>';
echo "</tr>";

echo "<tr>";
echo "<th>Hourly Rate</th>";
//echo "<td>$" . $row['hourly_rate'] .  "/hour</td>";
echo '<td><input type="text" name="hourly_rate" value="'.$row['hourly_rate'].'"'.$disabled.' ></td>';
echo "</tr>";

//This will allow the checkbox to be checked if the value =1 and unchecked if the value = 0
$working_for_dms = $row['working_for_dms'];
if($working_for_dms == 1)
{
	$checked = 1;
	$check= 'checked="checked"';
}
else
{
	$checked = 0;
	$check= '';
}

echo "<tr>";
echo "<th>Working for DMS?</th>";

echo '<td><input type="checkbox" name="new_working_for_dms" value="1" '.$check.' '.$disabled.'></td>';
echo '<input type="hidden" name="user_id" value='.$row['user_id'].'>';
//echo "</tr>"Check<br/>;

//


/* echo "<tr>";
echo "<th>Review</th>";

$stmt = $dbc->query("SELECT review FROM student_info WHERE user_id=$id;");
        $x = $stmt->fetch();

		if ($x['review']=="2") //if review = 2 (Competitive) in the db, show the correct selected value
		{
			echo '<td><select name="new_review">
				<option value="review = 0 WHERE user_id='.$row['user_id'].'">N/A</option>
				<option value="review = 1 WHERE user_id='.$row['user_id'].'">Noncompetitive</option>
				<option value="review = 2 WHERE user_id='.$row['user_id'].'" selected="selected">Competitive</option>
			</select></td>';
		}
		elseif ($x['review']=="1") //if review = 1 (Noncompetitive) in the db, show the correct selected value
		{
			echo'<td><select name="new_review">
				<option value="review = 0 WHERE user_id='.$row['user_id'].'">N/A</option>
				<option value="review = 1 WHERE user_id='.$row['user_id'].'" selected="selected">Noncompetitive</option>
				<option value="review = 2 WHERE user_id='.$row['user_id'].'">Competitive</option>
			</select></td>';
		}
		else{ //if review = 0 (N/A) in the db, show the correct selected value
			echo '<td><select name="new_review">
				<option value="review = 0 WHERE user_id='.$row['user_id'].'"selected="selected">N/A</option>
				<option value="review = 1 WHERE user_id='.$row['user_id'].'">Noncompetitive</option>
				<option value="review = 2 WHERE user_id='.$row['user_id'].'">Competitive</option>
			</select></td>';
		}

echo "</tr>"; */


//echo "<br>"

echo "</tr>";
}

//$result1 = "SELECT question_0 FROM 11_Mobile_Research_Fall_2018 WHERE user_id='$id'";
//$query1= $dbc->query($result1);

/* while ($row=$query1->fetch(PDO::FETCH_ASSOC))
{

echo "<tr>";
echo "<th>Question1</th>";
echo "<td>" . $row['question_0'] .  "</td>";
echo "</tr>";
echo "</table>"; */

//}
//echo "<form action='DOCTOR_update_review.php' method='POST' onsubmit= return confirm('Are you sure you want to submit changes?');>

/* echo "
<td><br></td>
<td><br></td>
<tr><td></td>
<td></td>
<td><input type='checkbox' name='new_accepted_by_DMS' value='1'> Check to Accept Applicant<br />
<input type='hidden' name='user_id' value=$id><br /></td></tr>
<tr><td></td>
<td></td>"; */

?>
</table>

<tr><td><br></td>

<?php if ($_SESSION['role']=='3'): ?>
<td><input type='submit' name= "save" value='Save Changes' onclick="return confirm('Are you sure you want to SAVE changes?')"style="background-color:#bf5700;color:white;text-shadow: #000 0px 0px 1px;"></td><tr>
<?php endif; ?>

<td><br></td>
<td><br></td>
<td><br></td>
<td><br></td>
<td><br></td>
<td><br></td>
</form>

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
</body>
</html>
