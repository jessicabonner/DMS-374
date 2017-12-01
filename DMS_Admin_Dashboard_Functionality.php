<?php

	function get_application_info()
	{
		require 'DMS_db.php';

		$sql = 'SELECT * FROM applications WHERE application_closed=0 ORDER BY application_id DESC';

		$query= $dbc->query($sql);;
		return $query;
	}
	
	function count_applicants($name_of_table)
	{
		require 'DMS_db.php';
		
		//get a count of all applicants in the table
		$sql="SELECT COUNT(*) as number_of_applicants from $name_of_table";
		$stmt=$dbc->prepare($sql);
		$stmt->execute();
		$application=$stmt->fetch();
		
		return $application;
	}

	
	


?>