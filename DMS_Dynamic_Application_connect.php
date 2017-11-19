<?php


//link to file containing database connection string
require 'DMS_db.php';

echo $_POST['application_id'];

/*
//create variables from those submitted through application form (DMS_Apply.html)
$first_name=$_POST['first_name'];

//prepare SQL statement to prevent SQL injection
$stmt = $dbc-> prepare('INSERT INTO application (first_name,)VALUES (:first_name,)');

$stmt->execute(array('first_name' => $first_name,));
*/

?>