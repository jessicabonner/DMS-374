
<?php
//pulling all programs from the database

	require 'DMS_db.php';
				
	$sql="SELECT program_id, application_id FROM applications";
	$stmt=$dbc->prepare($sql);
	$stmt->execute();
	$applications= $stmt->fetchAll();


?>




<html>

<head>
	<link href='application.css' type='text/css' rel='stylesheet'>
	<script src="https://code.jquery.com/jquery-3.1.1.js"></script>
</head>

<body>
	
	<form name="apply_form" action = "DMS_Dynamic_Application.php" method= "post">
		<table>
			<tr> 
				<td>Which program do you want to apply to?</td>
			</tr>
			
				<?php
				
					foreach($applications as $application)
					{
						$sql="SELECT name_of_program FROM programs WHERE program_id=$application[program_id]";
						$stmt=$dbc->prepare($sql);
						$stmt->execute();
						
						$program = $stmt->fetch();
						$name_of_program = $program['name_of_program'];
						
						echo "<tr><td><input type='radio' name='application_id' value=$application[application_id] required>$name_of_program<br></td></tr>";
					}
				?>
			
			
			

		</table>
		
		<td colspan="1" style="text-align: center; float: center;"><input type="submit" value="Submit" name="submit"/> </td>

</body>