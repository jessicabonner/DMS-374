<?php

$review= $_POST['application_review_list'];
//$id= $_POST['user_id'];


foreach($review as $value)
{
	require 'DMS_db.php';
	//user_id is hardcoded right now, but it needs to get the id for each record
		$sql="UPDATE student_info SET review = $value WHERE user_id=2";
		$stmt=$dbc->prepare($sql);
		$stmt->execute();
	
		//echo $id;
}


?>