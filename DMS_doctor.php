<!--Form to allow students to apply to dell med school internship programs-->
<!DOCTYPE html>
<html>
<head>
	<link href='application.css' type='text/css' rel='stylesheet'>
	<!--<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>-->
	<script src="https://code.jquery.com/jquery-3.1.1.js"></script>
</head>


<title>
	Dell Medical School - Apply
</title>



<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">


<style>
	body,h1,h2,h3,h4,h5 {font-family: "Open Sans", serif}	
	body {font-size:16px;}
	.w3-half img{margin-bottom:-6px;margin-top:16px;opacity:0.8;cursor:pointer}
	.w3-half img:hover{opacity:1}
</style>


  <!-- Sidebar/menu -->
<nav class="w3-sidebar w3-collapse w3-top w3-large w3-padding" style="background-color:#BF5700;z-index:3;width:350px;font-weight:bold;" 
id="mySidebar"><br>
	
	<a href="javascript:void(0)" onclick="w3_close()" class="w3-button w3-hide-large w3-display-topleft" style="width:100%;font-size:22px">Close Menu</a>
	
	
	<div class="w3-container">
		<!--<h3 class="w3-padding-64"><b>Dell Medical</br>School</b></h3>-->
		<img src="DMS_logo2.jpg" alt="Dell Medical School" height="75px"/>
	</div>
	
    <div class="w3-bar-block">
		<a href="#" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Home</a>
		<a href="#showcase" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Apply</a>
		<a href="#showcase" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Programs</a>
	</div>
</nav>


<!-- Top menu on small screens -->
<header class="w3-container w3-top w3-hide-large w3-xlarge w3-padding" style="background-color:#BF5700">
  <a href="javascript:void(0)" class="w3-button w3-margin-right" style="background-color:#BF5700" onclick="w3_open()">☰</a>
  <span style="background-color:#BF5700">Applicants
  </span>
</header>


<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:390px;margin-right:40px">

  <!-- Header -->
<div class="w3-container" style="margin-top:80px" id="showcase">
	<h1 class="w3-jumbo">
		<b>Applicants</b>
	</h1>
	
	<hr style="width:800px;border:5px solid #BF5700" class="w3-round">
</div>
</html>

<?php

require 'DMS_db.php';

$sql = 'SELECT user_id, first_name, last_name, EID, email, classification, major, accepted_by_DMS
		FROM student_info';
		
//$query = mysqli_query($dbc, $sql); //what's the error

$query= $dbc->query($sql);;

if (!$query) {
	die ('SQL Error: ' . mysqli_error($dbc));
}
?>
<html>
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
		/*.data-table tbody td:empty
		{
			background-color: #ffcccc;
		} */
	</style>
</head>
<body>
	<h1>Applicants</h1>
	<table class="data-table">
		<caption class="title">Applicant Data of DMS</caption>
		<thead>
			<tr>
				<th>ID</th>
				<th>First Name</th>
				<th>Last Name</th>
				<th>EID</th>
				<th>Email</th>
				<th>Classification</th>
				<th>Major</th>
				<th>Accepted</th>
			</tr>
		</thead>
		
		<tbody>
		<?php
		//while ($row = mysqli_fetch_array($query))
			
		while ($row=$query->fetch(PDO::FETCH_ASSOC))
		{
				$id = $row['user_id'];
				$accepted_by_DMS = $row['accepted_by_DMS'];
								
				echo "<td> <a href='DMS_ViewApp.php?id= $id '>" .$row['user_id'] . "</a> </td>";
	
				echo '
						<td>'.$row['first_name'].'</td>
						<td>'.$row['last_name'].'</td>
						<td>'.$row['EID'].'</td>
						<td>'.$row['email'].'</td>
						<td>'.$row['classification'].'</td>
						<td>'.$row['major'].'</td>';
						//Still need to do: Display 1 - accepted & 0 - not accepted
						if($accepted_by_DMS = '1'){
							$accepted_by_DMS = 'accepted';
						}
				echo '  <td>'.$row['accepted_by_DMS'].'</td>
					</tr>';
		}?>
		</tbody>

		
	</table>
</body>
</html>