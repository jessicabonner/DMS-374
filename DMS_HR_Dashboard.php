<?php
	//this will display an error message if the user tries to create an application that already exists in the database
	if (isset($_GET['message']))
	{
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
		<b>Human Resources Dashboard</b>
	</h1>


	<hr style="min-width:100%;border:5px solid #BF5700" class="w3-round">
	<br>
	<b> </b>
	<br>
	<br>
</div>


<head>
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
			font-size: 10px;
			text-align-last: center;
		}

		/* Table */
		.data-table {
			border-collapse: collapse;
			font-size: 14px;
		}

		.data-table th,
		.data-table td {
			border: 1px solid #e1edff;
			padding: 7px 17px;
			text-align: center;
			font-size: 10px;
		}
		.data-table caption {
			margin: 7px;
			font-size: 18px;
		}

		/* Table Header */
		.data-table thead th {
			background-color: #bf5700;
			color: #FFFFFF;
			border-color: #000000 !important;
			text-transform: uppercase;
			text-align: center;
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
		/*.data-table tbody td:empty
		{
			background-color: #ffcccc;
		} */

	</style>
</head>
<body>





	<!--search bar-->
	<form name="search" method= "get">
		<tr>
			<td><input id='search' type='text' name='search_criteria' size='20' placeholder="Search" style="width: 50%;"/></td>
		</tr>
	</form>

	<details>
	<summary>Filter</summary>
	<p>
	<form name="filter" method= "get">
		<tr>
				<td>GPA Greater than</td>
			</tr>
			<tr class="blankrow">

			<tr>
				<td><input type="text" name="GPA_greater" size="20" style="width:25%;"/></td>
			</tr>
			<tr>
			<td>GPA Less than</td>
			</tr>
			<tr class="blankrow">

			<tr>
				<td><input type="text" name="GPA_less" size="20" style="width:25%;"/></td>
			</tr>


			<!--checkbox buttons for student's classification-->
				<td>Classification</td>
			</tr>
			<tr class="blankrow">
				<td><br></td>
				<tr class="blankrow">
					<td><br></td>
			<tr>
				<td><input type="checkbox" name="filter_criteria[]" value=" classification='1st year' " >1st year Undergrad<br></td>
			</tr>
			<tr>
				<td><input type="checkbox" name="filter_criteria[]" value=" classification='2nd year' ">2nd year Undergrad<br></td>
			</tr>
			<tr>
				<td><input type="checkbox" name="filter_criteria[]" value=" classification='3rd year' ">3rd year Undergrad<br></td>
			</tr>
			<tr>
				<td><input type="checkbox" name="filter_criteria[]" value=" classification='4th year' ">4th year Undergrad<br></td>
			</tr>
			<tr>
				<td><input type="checkbox" name="filter_criteria[]" value=" classification='5th year' ">5th year Undergrad<br></td>
			</tr>
			<tr>
				<td><input type="checkbox" name="filter_criteria[]" value=" classification='Grad' ">Graduate Student<br></td>
			</tr>
			<tr>
				<td><input type="checkbox" name="filter_criteria[]" value=" classification='Other' ">Other<br></td>
			</tr>

			<!--checkbox buttons for if student is eligible to work in US/employed at UT-->
			<tr>
			<td><br></td>
				<td>Work eligibility</td>
			</tr>
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
			<td><br></td>
				<td>Previously worked at Dell Medical School?</td>
			</tr>
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


			<!--checkbox buttons for if they have volunteered at seton before-->
			<tr>
			<td><br></td>
				<td>Previously volunteered at Seton Hospital?</td>
			</tr>
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

			<tr>
			<td><br></td>
				<td>Accepted offer?</td>
			</tr>
			<tr class="blankrow">
				<td><br></td>
				<tr class="blankrow">
					<td><br></td>
			<tr>
				<td><input type="checkbox" name="filter_criteria[]" value=" accepted_offer='1' ">Yes<br></td>
			</tr>
			<tr>
				<td><input type="checkbox" name="filter_criteria[]" value=" accepted_offer='0' ">No<br></td>
			</tr>

			<!--break-->
			<tr>
				<td><br></td>
			</tr>



			<tr>
				<td><b><input type="radio" name="and_or" value="AND" required>Search for records containing all criteria<br></b></td>
			</tr>
			<tr>
				<td><b><input type="radio" name="and_or" value="OR">Search for records containing at least one criteria<br></b></td>
			</tr>

			<td><input id='submit' type='submit' style='background-color:#AAAAAA;font-color:#66727B;' value='Search'/></td>

	</form>
	</p>
	</details>

	<?php
		require 'DMS_HR.php';
		if(isset($_GET['search_criteria'])&&  $_GET['search_criteria']!=""){
			$query=search($_GET['search_criteria']); //call search_criteria function
		}
		if(isset($_GET['filter_criteria'])){
			/* if(isset($_GET['GPA_greater'])&& isset($_GET['GPA_less']))
			{

				echo "<script type=\"text/javascript\">window.alert('Choose either GPA greater than or less than')";
			} */
			if ($_GET['GPA_greater']!="")
			{
				$query=filter_with_gpa($_GET['filter_criteria'], $_GET['and_or'],$_GET['GPA_greater'],'>');

			}

			elseif($_GET['GPA_less']!="")
			{
					$query=filter_with_gpa($_GET['filter_criteria'], $_GET['and_or'],$_GET['GPA_less'],'<');
			}

			else
			{
				$query=filter($_GET['filter_criteria'], $_GET['and_or']); //call filter_criteria function

			}
		}

		if(!isset($_GET['filter_criteria']) && (isset($_GET['GPA_greater'])||isset($_GET['GPA_less'])))
		{
			if($_GET['GPA_greater']!="")
			{
				$query=filter_only_gpa($_GET['GPA_greater'],'>');
			}

			elseif($_GET['GPA_less']!="")
			{
				$query=filter_only_gpa($_GET['GPA_less'],'<');
			}
		}
	?>

	<table class="data-table">
	<caption class="title">Students Accepted by DMS</caption>
		<thead>
			<tr>
				<th>ID</th>
				<th>First Name</th>
				<th>Middle Name</th>
				<th>Last Name</th>
				<th>Address</th>
				<th>City</th>
				<th>State</th>
				<th>Zip</th>
				<th>EID</th>
				<th>Email</th>
				<th>Classification</th>
				<th>Major</th>
				<th>2nd Major</th>
				<th>GPA</th>
				<th>Accepted Offer?</th>
			</tr>
		</thead>

		<tbody>
		<?php
		//while ($row = mysqli_fetch_array($query))

		require 'DMS_db.php';



		while ($row=$query->fetch(PDO::FETCH_ASSOC))
		{
				$id = $row['user_id'];

				if ($row['accepted_offer']=='1')
				{
					$accepted_offer="Yes";
				}
				else
				{
					$accepted_offer="No";
				}

				echo "<td> <a href='DMS_ViewApp.php?id= $id '>" .$row['user_id'] . "</a> </td>";

				echo '
						<td>'.$row['first_name'].'</td>
						<td>'.$row['middle_name'].'</td>
						<td>'.$row['last_name'].'</td>
						<td>'.$row['address'].'</td>
						<td>'.$row['city'].'</td>
						<td>'.$row['state'].'</td>
						<td>'.$row['zip_code'].'</td>
						<td>'.$row['EID'].'</td>
						<td>'.$row['email'].'</td>
						<td>'.$row['classification'].'</td>
						<td>'.$row['major'].'</td>
						<td>'.$row['major_2'].'</td>
						<td>'.$row['GPA'].'</td>
						<td>'.$accepted_offer.'</td>
					</tr>';
		}?>





		</tbody>


	</table>
</body>
</html>
