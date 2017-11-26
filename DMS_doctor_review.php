<?php

$review= $_POST['application_review_list'];
//$id= $_POST['user_id'];

foreach($review as $value)
{
	require 'DMS_db.php';

		$sql="UPDATE student_info SET $value";
		$stmt=$dbc->prepare($sql);
		$stmt->execute();
	
		//echo $id;
}
$accept= $_POST['application_accept_list'];
//$id= $_POST['user_id'];

foreach($accept as $value)
{
	require 'DMS_db.php';

		$sql="UPDATE student_info SET accepted_by_DMS = 1 WHERE user_id= $value";
		$stmt=$dbc->prepare($sql);
		$stmt->execute();
	
		//echo $value;
}

?>