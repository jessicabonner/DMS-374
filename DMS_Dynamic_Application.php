<!DOCTYPE html>
<html>

<head>
	<link href='application.css' type='text/css' rel='stylesheet'>
	<!--<script src="https://code.jquery.com/jquery-3.1.1.js"></script>-->
</head>

<?php
		
	$application_id="13";

	require 'DMS_db.php';
				
	$sql="SELECT number_unique_questions, list_unique_questions FROM applications WHERE application_id='".$application_id."'";
	$stmt=$dbc->prepare($sql);
	$stmt->execute();
	
	$x = $stmt->fetch();
	$number_unique_questions = $x['number_unique_questions'];
	$list_unique_questions = $x['list_unique_questions'];

	//echo $number_unique_questions;
	//echo $list_unique_questions;
	
	$array_unique_questions=explode('(#!BREAK!#)', $list_unique_questions);
	
	
	
?>


<body>

<!--APPLICATION ID HARD CODED RIGHT NOW CHANGE LATER!!!-->
	<!--this form will post to DMS_connect in order to submit data to DB-->
	<form name="apply_form" action = "DMS_Dynamic_Application_connect.php" method= "post" onsubmit="return confirm('Are you sure you want to submit?');">
		<input type="hidden" value="13" name="application_id" />
		<table>
			<?php
				foreach($array_unique_questions as $key=>$value)
				{
					echo "<tr><td>$value</td></td>";
					echo "<tr><td><textarea class='written' placeholder='Please enter your response here' name='question_$key' rows='10' 
					cols'800' required></textarea></td></tr>";
				}
			?>
			
		</table>
		<!--submit button. Will post info.-->
		<td colspan="1" style="text-align: center; float: center;"><input type="submit" value="Submit" name="submit"/> </td>
		
	</form>
</body>
</html>