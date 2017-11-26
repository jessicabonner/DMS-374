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

echo "<form action='DMS_doctor_AcceptApp.php' method='POST' onsubmit= return confirm('Are you sure you want to submit changes?');>";
	
// Get ID from the URL
$id = $_GET['id'];

//$result = mysqli_query($dbc, "SELECT * FROM application WHERE ApplicationID = '$id'");
$result = "SELECT * FROM student_info WHERE user_id = '$id'";
	
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

echo "<tr>";
echo "<th>ID</th>";
echo "<td>" . $row['user_id'] .  "</td>";
echo "</tr>";

echo "<tr>";
echo "<th>First Name</th>";
echo "<td>" . $row['first_name'] .  "</td>";
echo "</tr>";

echo "<tr>";
echo "<th>Last Name</th>";
echo "<td>" . $row['last_name'] .  "</td>";
echo "</tr>";

echo "<tr>";
echo "<th>Email</th>";
echo "<td>" . $row['email'] .  "</td>";
echo "</tr>";

echo "<tr>";
echo "<th>Address</th>";
echo "<td>" . $row['address'] .  "</td>";
echo "</tr>";

echo "<tr>";
echo "<th>City</th>";
echo "<td>" . $row['city'] .  "</td>";
echo "</tr>";

echo "<tr>";
echo "<th>State</th>";
echo "<td>" . $row['state'] .  "</td>";
echo "</tr>";

echo "<tr>";
echo "<th>Zip Code</th>";
echo "<td>" . $row['zip_code'] .  "</td>";
echo "</tr>";

echo "<tr>";
echo "<th>Phone Number</th>";
echo "<td>" . $row['phone'] .  "</td>";
echo "</tr>";

echo "<tr>";
echo "<th>Employment</th>";
echo "<td>" . $row['employment'] .  "</td>";
echo "</tr>";

echo "<tr>";
echo "<th>Classification</th>";
echo "<td>" . $row['classification'] .  "</td>";
echo "</tr>";

echo "<tr>";
echo "<th>Degree Type</th>";
echo "<td>" . $row['degree_type'] .  "</td>";
echo "</tr>";

echo "<tr>";
echo "<th>Major</th>";
echo "<td>" . $row['major'] .  "</td>";
echo "</tr>";

echo "<tr>";
echo "<th>Second Major</th>";
echo "<td>" . $row['major_2'] .  "</td>";
echo "</tr>";

echo "<tr>";
echo "<th>Has worked at DMS before?</th>";
echo "<td>" . $row['worked_at_dms'] .  "</td>";
echo "</tr>";

echo "<tr>";
echo "<th>Has volunteered at Seton before?</th>";
echo "<td>" . $row['volunteered_at_seton'] .  "</td>";
echo "</tr>";

echo "<tr>";
echo "<th>Has a car?</th>";
echo "<td>" . $row['car'] .  "</td>";
echo "</tr>";

echo "<tr>";
echo "<th>Semester Committment</th>";
echo "<td>" . $row['semester_commitment'] .  "</td>";
echo "</tr>";

echo "<tr>";
echo "<th>Review</th>";

$stmt = $dbc->query("SELECT review FROM student_info WHERE user_id=$id;");
        $x = $stmt->fetch();

		if ($x['review']=="2") //if review = 2 (Competitive) in the db, show the correct selected value
		{
			echo '<td><select name="new_review">
				<option value="review = 0 WHERE user_id='.$row['user_id'].'">N/A</option>
				<option value="review = 1 WHERE user_id='.$row['user_id'].'">Noncompetitive</option>
				<option value="review = 2 WHERE user_id='.$row['user_id'].'" selected="selected">Competitive</option>
			</select></td>';
		}
		elseif ($x['review']=="1") //if review = 1 (Noncompetitive) in the db, show the correct selected value
		{
			echo'<td><select name="new_review">
				<option value="review = 0 WHERE user_id='.$row['user_id'].'">N/A</option>
				<option value="review = 1 WHERE user_id='.$row['user_id'].'" selected="selected">Noncompetitive</option>
				<option value="review = 2 WHERE user_id='.$row['user_id'].'">Competitive</option>
			</select></td>';
		}
		else{ //if review = 0 (N/A) in the db, show the correct selected value
			echo '<td><select name="new_review">
				<option value="review = 0 WHERE user_id='.$row['user_id'].'"selected="selected">N/A</option>
				<option value="review = 1 WHERE user_id='.$row['user_id'].'">Noncompetitive</option>
				<option value="review = 2 WHERE user_id='.$row['user_id'].'">Competitive</option>
			</select></td>';
		}

echo "</tr>";

//echo "<br>"

echo "</tr>";
}

echo "</table>";


//echo "<form action='DMS_doctor_AcceptApp.php' method='POST' onsubmit= return confirm('Are you sure you want to submit changes?');>
echo "
<td><br></td>
<td><br></td>
<tr><td></td> 
<td></td>
<td><input type='checkbox' name='new_accepted_by_DMS' value='1'> Check to Accept Applicant<br />
<input type='hidden' name='user_id' value=$id><br /></td></tr>
<tr><td></td>
<td></td>
<td><input type='submit' name= 'update' value=' Enter '></td></tr>


<td><br></td>
<td><br></td>
<td><br></td>
<td><br></td>
<td><br></td>
<td><br></td>
</form>";
?>