<!--Form to allow students to apply to dell med school internship programs-->
<!DOCTYPE html>
<html>
<head>
	<link href='application.css' type='text/css' rel='stylesheet'>
	<!--<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>-->
	<script src="https://code.jquery.com/jquery-3.1.1.js"></script>
</head>


<title>
	Dell Medical School - Apply
</title>



<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">


<style>
	body,h1,h2,h3,h4,h5 {font-family: "Open Sans", serif}	
	body {font-size:16px;}
	.w3-half img{margin-bottom:-6px;margin-top:16px;opacity:0.8;cursor:pointer}
	.w3-half img:hover{opacity:1}
</style>


  <!-- Sidebar/menu -->
<nav class="w3-sidebar w3-collapse w3-top w3-large w3-padding" style="background-color:#BF5700;z-index:3;width:350px;font-weight:bold;" 
id="mySidebar"><br>
	
	<a href="javascript:void(0)" onclick="w3_close()" class="w3-button w3-hide-large w3-display-topleft" style="width:100%;font-size:22px">Close Menu</a>
	
	
	<div class="w3-container">
		<!--<h3 class="w3-padding-64"><b>Dell Medical</br>School</b></h3>-->
		<img src="DMS_logo2.jpg" alt="Dell Medical School" height="75px"/>
	</div>
	
    <div class="w3-bar-block">
		<a href="#" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Home</a>
		<a href="#showcase" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Apply</a>
		<a href="#showcase" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Programs</a>
	</div>
</nav>


<!-- Top menu on small screens -->
<header class="w3-container w3-top w3-hide-large w3-xlarge w3-padding" style="background-color:#BF5700">
  <a href="javascript:void(0)" class="w3-button w3-margin-right" style="background-color:#BF5700" onclick="w3_open()">☰</a>
  <span style="background-color:#BF5700">Dell Medical School</span>
</header>


<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:390px;margin-right:40px">

  <!-- Header -->
<div class="w3-container" style="margin-top:80px" id="showcase">
	<h1 class="w3-jumbo">
		<b>Student Application</b>
	</h1>
	
	<hr style="width:800px;border:5px solid #BF5700" class="w3-round">
</div>
</html>


<?php
require 'DMS_db.php';


// Get ID from the URL
$id = $_GET['id'];

//$result = mysqli_query($dbc, "SELECT * FROM application WHERE ApplicationID = '$id'");
$result = "SELECT * FROM applications WHERE application_id = '$id'";
	
$query= $dbc->query($result);;	

if (!$query) {
	die ('SQL Error: ' . mysqli_error($dbc));
}


echo "<table width=100%>
<tr>

</tr>";

//while($row = mysqli_fetch_array($result))
while ($row=$query->fetch(PDO::FETCH_ASSOC))
{
	//get program name
$sql="SELECT name_of_program FROM programs WHERE program_id=$row[program_id]";
$stmt=$dbc->prepare($sql);
$stmt->execute();

$program = $stmt->fetch();
$name_of_program=$program['name_of_program'];


//get the list of questions and turn into an array
$list_unique_questions = $row['list_unique_questions'];
$array_unique_questions=explode('(#!BREAK!#)', $list_unique_questions);

//convert applcation closed value to words
//0 is false 1 is true
if ($row['application_closed']==0)
				{
					$application_closed="Yes";
				}
				else{
					$application_closed="No";
				}
				




echo "<tr>";
echo "<th>ID</th>";
echo "<td>" . $row['application_id'] .  "</td>";
echo "</tr>";

echo "<tr>";
echo "<th>Program</th>";
echo "<td>" . $name_of_program .  "</td>";
echo "</tr>";

echo "<tr>";
echo "<th>Term</th>";
echo "<td>" . $row['term'] .  "</td>";
echo "</tr>";

echo "<tr>";
echo "<th>Year</th>";
echo "<td>" . $row['year'] .  "</td>";
echo "</tr>";

//loop through the array of questions and display all
echo "<tr>";
echo "<th>Questions</th>";


				foreach($array_unique_questions as $key=>$value)
				{
					if ($key==0)
					{
						echo "<td>$value</td>";
					}
					else
					{
						echo "<tr><td></td>";
						echo "<td>$value</td></tr>";
					}
				}
echo "</tr>";


//break
echo "<tr><td><br></td></tr>";

echo "<tr>";
echo "<th>Open?</th>";
echo "<td>" . $application_closed.  "</td>";


echo "</tr>";


echo "</tr>";
}

//break
echo "<tr><td><br></td></tr>";

//set variable to change whether she can close or open an application
//0 is false 1 is true
if ($application_closed=="No")
{
	$close_open="Open";
	$value="0";
}
else
{
		$close_open="Close";
		$value="1";
}

echo "<form action='DMS_close_applcation.php' method='POST'>

<tr><td></td> 
<td></td>
<td><input type='checkbox' name='new_close_application' value=$value> Check to $close_open Application<br />
<input type='hidden' name='application_id' value=$id><br /></td></tr>
<tr><td></td>
<td></td>
<td><input type='submit' value=' Enter '></td></tr>
</form>";

echo "</table>";







?>