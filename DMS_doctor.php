<?php

require 'DMS_db.php';

$sql = 'SELECT ApplicationID, first_name, last_name, EID, email, classification, major, accepted_by_DMS
		FROM application';
		
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
				<th>Accepted?</th>
			</tr>
		</thead>
		
		<tbody>
		<?php
		//while ($row = mysqli_fetch_array($query))
			
		while ($row=$query->fetch(PDO::FETCH_ASSOC))
		{
			echo '<tr>
					<td>'.$row['ApplicationID'].'</td>
					<td>'.$row['first_name'].'</td>
					<td>'.$row['last_name'].'</td>
					<td>'.$row['EID'].'</td>
					<td>'.$row['email'].'</td>
					<td>'.$row['classification'].'</td>
					<td>'.$row['major'].'</td>
					<td>'.$row['accepted_by_DMS'].'</td>
				</tr>';
		}?>
		</tbody>

		
	</table>
</body>
</html>