<!DOCTYPE html>
<html>

<head>
	<link href='application.css' type='text/css' rel='stylesheet'>
	<script src="https://code.jquery.com/jquery-3.1.1.js"></script>
</head>


<body>
	<!--this form will post to DMS_connect in order to submit data to DB-->
	<form name="apply_form" action = "DMS_CreateProgram.php" method= "post" onsubmit="return confirm('Are you sure you want to submit? This action cannot be undone');">

		<table>

			<!--text box for name of program-->
			<!--This will become the name of the program's application table?-->
			<tr>
				<td><p>Name of Program</p></td>
			</tr>
			<tr>
				<td><input type="text" name="name_of_program" size="20" required/></td>
			</tr>
			
			<!--text box for students first name!-->
			<tr>
				<td>Doctor EID</td>
			</tr>
			<tr>
				<td><input type="text" name="doctor_EID" size="20" maxlength="10" required/></td>
			</tr>
			
			<!--text box for students first name!-->
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

<?php
	
	require 'DMS_db.php';
	
	
	if(isset($_POST['submit']))
	{
		
		$name_of_program=$_POST['name_of_program'];
		$doctor_EID=$_POST['doctor_EID'];
		$number_unique_questions=$_POST['number_unique_questions'];
		
		$array_unique_questions=$_POST['list_unique_questions'];
		$list_unique_questions= implode(',', $_POST['list_unique_questions']);
		
		//for now-- need to add a dropdown next
		$parent_program_id="";
		
		
		//prepare SQL statement to prevent SQL injection
		$stmt = $dbc-> prepare('INSERT INTO programs(name_of_program, doctor_EID, number_unique_questions,list_unique_questions, parent_program_id) 
		VALUES (:name_of_program, :doctor_EID, :number_unique_questions, :list_unique_questions, :parent_program_id)');
		
		//bind variables to prepared statement and execute
		$stmt->execute(array('name_of_program' => $name_of_program, 'doctor_EID' => $doctor_EID, 'number_unique_questions' => $number_unique_questions,
		'list_unique_questions' => $list_unique_questions, 'parent_program_id'=>$parent_program_id));
		
		
		echo gettype($array_unique_questions);
		
		
		//Below is making the table for the specific program
		$sql_table_fields="";
		foreach ($array_unique_questions as $x=>$value)
		{
			$sql_table_fields .= ", question_".$x." VARCHAR(30) NOT NULL";
			
		}
		
		try {
			$sql="CREATE TABLE $name_of_program (
			id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY
			$sql_table_fields)";
		
			$dbc->exec($sql);
			echo "Table MyGuests created successfully";
		}
		
		catch(PDOException $e)
		{
			echo $sql . "<br>" . $e->getMessage();
		}
		
		
		
		
	}	
?>