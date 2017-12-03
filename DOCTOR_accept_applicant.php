<?php
//THIS FILE TAKES INPUT AS THE ID OF STUDENTS INDICATED TO BE ACCEPTED AND CHANGES 
//THEIR STATUS TO ACCEPTED

require 'DMS_db.php';


//if the user_id is set, get all student info
if( isset($_GET['id']))
{
	$user_id = $_GET['id'];
	
	$sql = "SELECT * from student_info WHERE user_id='$user_id'";
	
	$query= $dbc->query($sql);

	if (!$query) {
		die ('SQL Error: ' . mysqli_error($dbc));
	}
	
	$row = $query->fetch(PDO::FETCH_ASSOC);
	
	
}


if( isset($_POST['new_accepted_by_DMS']))
{	//update the accepted student's status to "accepted"
	$new_accepted_by_DMS = $_POST['new_accepted_by_DMS'];
	$user_id = $_POST['user_id'];
	$sql = "UPDATE student_info SET accepted_by_DMS = '".$new_accepted_by_DMS."' WHERE user_id ='".$user_id."'";

	
	//$query= $dbc->query($sql);
	$stmt=$dbc->prepare($sql);
	$stmt->execute();
	
	//if the sql statement does not work, display an error
	if (!$stmt) {
		die ('SQL Error: ' . mysqli_error($dbc));
	}
	//confirmation message that the student was accepted
	else{
		echo 'The student has successfully been accepted';
	}
	
}


//<?php echo $row[accepted_by_DMS]; 

?>
<form action="DOCTOR_accept_applicant.php" method="POST">
Check to Accept Candidate <input type="checkbox" name="new_accepted_by_DMS" value="1"><br />
<input type="hidden" name="user_id" value="<?php echo $user_id ?>"><br />
<input type="submit" value=" Enter ">
</form>

