<?php

require 'DMS_db.php';



$FName=$_POST['FName'];
$MName=$_POST['MName'];
$LName=$_POST['LName'];
$EID=$_POST['EID'];
$Address=$_POST['address'];
$City=$_POST['city'];
$State=$_POST['state'];
$Zip=$_POST['zip'];
$Phone=$_POST['phone'];
$Email=$_POST['email'];
$employment=$_POST['employment'];
$classification=$_POST['classification'];
$Degree_Type=$_POST['Degree_Type'];
$Major=$_POST['Major'];
$Major_2=$_POST['Major_2'];
$Worked_at_dms=$_POST['Worked_at_dms'];
$Volunteered_at_seton=$_POST['Volunteered_at_seton'];
$Car=$_POST['Car'];
$Semester_commitment=$_POST['Semester_commitment'];
$EssayQ1=$_POST['EssayQ1'];
$EssayQ2=$_POST['EssayQ2'];
$EssayQ3=$_POST['EssayQ3'];
$EssayQ4=$_POST['EssayQ4'];
$EssayQ5=$_POST['EssayQ5'];

$Availability= implode(',', $_POST['Availability_list']);




$sql = "INSERT INTO application (FName, MName, LName, EID, Address, City, State, Zip, Phone, Email, employment, Classification, Degree_Type, Major, Major_2, Worked_at_dms, Volunteered_at_seton, Car, Semester_commitment, EssayQ1, EssayQ2, EssayQ3, EssayQ4, EssayQ5, Availability) VALUES ('$FName', '$MName', '$LName', '$EID', '$Address', '$City', '$State', '$Zip', '$Phone', '$Email', '$employment', '$classification', '$Degree_Type', '$Major', '$Major_2', '$Worked_at_dms', '$Volunteered_at_seton', '$Car', '$Semester_commitment', '$EssayQ1', '$EssayQ2', '$EssayQ3', '$EssayQ4', '$EssayQ5', '$Availability')";

$result= mysqli_query($dbc, $sql) or die(mysqli_error($dbc)); 

echo '<h1 style= "text-align: center">Thanks for applying!</h1>';

?>