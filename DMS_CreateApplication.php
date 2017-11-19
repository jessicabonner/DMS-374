<!DOCTYPE html>
<html>

<head>
	<link href='application.css' type='text/css' rel='stylesheet'>
	<script src="https://code.jquery.com/jquery-3.1.1.js"></script>
</head>


<body>
	<!--this form will post to DMS_connect in order to submit data to DB-->
	<form name="apply_form" action = "DMS_CreateApplication_connect.php" method= "post" onsubmit="return confirm('Are you sure you want to submit? This action cannot be undone');">

		<table>

			<!--get all program names to populate dropdown-->
			<?php
				//link to file containing database connection string
				require 'DMS_db.php';
				
				$sql="SELECT program_id, name_of_program FROM programs";
				$stmt=$dbc->prepare($sql);
				$stmt->execute();
				$programs= $stmt->fetchAll();
			?>
			
			<tr>
			
				<td>Please select which program this application is for</td>
			</tr>
			
			<tr>
				<td>
					<select name="program_id" required>
						<?php foreach($programs as $program): ?>
						<option value="<?= $program['program_id']; ?>"><?= $program['name_of_program']; ?></option>
						<?php endforeach; ?>
					</select>
				</td>
			</tr>
			
			<!--break-->
			<tr>
				<td><br></td>
			</tr>
			
			<tr>
			
				<td>Please enter the year and semester that this application is for</td>
			</tr>
			
			
			<tr>
				<td>
					<select name="term" required>
						<option value="Fall">Fall</option>
						<option value="Spring">Spring</option>
						<option value="Summer">Summer</option>
						<option value="All_Year">All Year</option>
						<option value="School_Year">School Year</option>
					</select>
				</td>
			</tr>
			
			<tr>
				
				<td>
					<input type="text" placeholder="ex: 2017" name="year" maxlength="4" pattern="^[0-9]*$" required/>
				</td>
			</tr>
			
			<!--break-->
			<tr>
				<td><br></td>
			</tr>
			
			<!--text box for number of programs to create-->
			<tr>
				<td>Please enter the number of custom questions that you wish to create</td>
			</tr>
			<tr>
				<td><input type="text" name="number_unique_questions" id="number_unique_questions" size="20" maxlength="2" pattern="^[0-9]+$" required/></td>
				
			</tr>


		</table>
		
		
		<!--break-->
		<tr>
			<td><br></td>
		</tr> 
		
		<table id="unique_questions_table">
			
		
		</table>
		
		
		<!--break-->
		<tr>
			<td><br></td>
		</tr>


		<!--submit button. Will post info.-->
		<td colspan="1" style="text-align: center; float: center;"><input type="submit" value="Submit" name="submit"/> </td>
		
		
		
	
	
	
	<script>
	
		$("#number_unique_questions").keyup(function(){
			//$("p").hide();
			
			
			var question_number = $("#number_unique_questions").val();
			
			$("#unique_questions_table").empty();
			$("#unique_questions_table").prepend("Enter the unique questions below");
			while (question_number>0){
				
				var text = $("<tr></tr>").html("<input type='text' name='list_unique_questions[]' id='unique_question' required/>");
				$("#unique_questions_table").append(text);
				question_number-=1;
			}
			
		});
	
	</script>
	
	</body>
</html>

