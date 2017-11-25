

  <!-- Header -->
<div class="w3-container" style="margin-top:80px" id="showcase">
	<h1 class="w3-jumbo">
		<b>Applicants</b>
	</h1>
	
	<hr style="width:800px;border:5px solid #BF5700" class="w3-round">
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




	
	<!--search bar-->
	<form name="search" method= "get">
		<tr>
			<td><input id='search' type='text' name='search_criteria' size='20'/></td>
			<td><input id='submit' type='submit' value='Search'/></td>
		</tr>
	</form>
	
	<details>
	<summary>filter search</summary>
	<p>
	<form name="filter" method= "get">
		<tr>
				<td>GPA Greater than</td>
			</tr>
			<tr class="blankrow">
				
			<tr>
				<td><input type="text" name="GPA_greater" size="20"/></td>
			</tr>
			<tr>
			<td><br></td>
			<td>GPA less than</td>
			</tr>
			<tr class="blankrow">
				
			<tr>
				<td><input type="text" name="GPA_less" size="20"/></td>
			</tr>
			
			
			<!--checkbox buttons for student's classification-->
			<tr>
			<td><br></td>
			<td><br></td>
				<td>Classification</td>
			</tr>
			<tr class="blankrow">
				<td><br></td>
			<tr>
				<td><input type="checkbox" name="filter_criteria[]" value=" classification='1st year' " >1st year undergrad<br></td>
			</tr>
			<tr>
				<td><input type="checkbox" name="filter_criteria[]" value=" classification='2nd year' ">2nd year undergrad<br></td>
			</tr>
			<tr>
				<td><input type="checkbox" name="filter_criteria[]" value=" classification='3rd year' ">3rd year undergrad<br></td>
			</tr>
			<tr>
				<td><input type="checkbox" name="filter_criteria[]" value=" classification='4th year' ">4th year undergrad<br></td>
			</tr>
			<tr>
				<td><input type="checkbox" name="filter_criteria[]" value=" classification='5th year' ">5th year undergrad<br></td>
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

			<td><input id='submit' type='submit' value='Search'/></td>
	
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
	<caption class="title">Students accepted by DMS</caption>
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
				<th>Degree Type</th>
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
				
				if ($row['offer_accepted']=='1')
				{
					$offer_accepted="Yes";
				}
				else
				{
					$offer_accepted="No";
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
						<td>'.$row['degree_type'].'</td>
						<td>'.$row['major'].'</td>
						<td>'.$row['major_2'].'</td>
						<td>'.$row['GPA'].'</td>
						<td>'.$offer_accepted.'</td>
					</tr>';
		}?>
		
		
		
		
		
		</tbody>

		
	</table>
</body>
</html>