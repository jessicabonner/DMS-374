<?php

require 'DMS_db.php';



if( isset($_GET['id']))
{
	$user_id = $_GET['id'];
	//echo $user_id;
	
	//$res = mysqli_query("SELECT * from student_info WHERE user_id='$user_id");
	$sql = "SELECT * from student_info WHERE user_id='$user_id'";
	
	$query= $dbc->query($sql);

	if (!$query) {
		die ('SQL Error: ' . mysqli_error($dbc));
	}
	
	//$row = mysqli_fetch_array($sql);
	$row = $query->fetch(PDO::FETCH_ASSOC);
	$user_id=$row['user_id'];
	
}
//while ($row = mysqli_fetch_array($query))
//while ($row=$query->fetch(PDO::FETCH_ASSOC))

if( isset($_POST['new_accepted_by_DMS']))
{	//echo $_POST['new_accepted_by_DMS'];
	
	$user_id=$_POST['user_id'];
	//echo $user_id;
	
	$new_accepted_by_DMS = $_POST['new_accepted_by_DMS'];
	$user_id = $_POST['user_id'];
	$sql = "UPDATE student_info SET accepted_by_DMS = '".$new_accepted_by_DMS."' WHERE user_id ='".$user_id."'";

	
	
	//$query= $dbc->query($sql);
	$stmt=$dbc->prepare($sql);
	$stmt->execute();

	if (!$stmt) {
		die ('SQL Error: ' . mysqli_error($dbc));
	}
	else{
		echo 'the student has successfully been accepted';
	}
	
}

//<?php echo $row[accepted_by_DMS]; 

?>
<form action="AcceptApp.php" method="POST">
Check to Accept Candidate <input type="checkbox" name="new_accepted_by_DMS" value="1"><br />
<input type="hidden" name="user_id" value="<?php echo $user_id ?>"><br />
<input type="submit" value=" Enter ">
</form>
