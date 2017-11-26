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


?>