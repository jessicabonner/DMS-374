<?php
	require 'DMS_db.php';	
	
	$user_id=$_POST['user_id'];
		
	$application_id=$_POST['application_id'];
	
	$sql="SELECT program_id FROM applications WHERE application_id=$application_id";
	$stmt=$dbc->prepare($sql);
	$stmt->execute();
	$application = $stmt->fetch();
	
	$sql="SELECT name_of_program FROM programs WHERE program_id=$application[program_id]";
	$stmt=$dbc->prepare($sql);
	$stmt->execute();
						
	$program = $stmt->fetch();
	$name_of_program=$program['name_of_program'];

	
				
	$sql="SELECT number_unique_questions, list_unique_questions FROM applications WHERE application_id='".$application_id."'";
	$stmt=$dbc->prepare($sql);
	$stmt->execute();
	
	$x = $stmt->fetch();
	$number_unique_questions = $x['number_unique_questions'];
	$list_unique_questions = $x['list_unique_questions'];

	//echo $number_unique_questions;
	//echo $list_unique_questions;
	
	$array_unique_questions=explode('(#!BREAK!#)', $list_unique_questions);
	
	
	
?>




<!DOCTYPE html>
<html>
<head>
	<link href='application.css' type='text/css' rel='stylesheet'>
	<!--<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>-->
	<script src="https://code.jquery.com/jquery-3.1.1.js"></script>
</head>


<title>
	Dell Medical School 
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
		<!--no link to apply since they are already on the apply page-->
		<a href="" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Apply</a>
		<a href="#showcase" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Dashboard</a>
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
		<b><?php echo $name_of_program ?></b>
	</h1>
	
	
	<hr style="width:800px;border:5px solid #BF5700" class="w3-round">
	
	
</div>




<div class="w3-container" id="application" style="margin-top:10px">



<body>


	<!--this form will post to DMS_connect in order to submit data to DB-->
	<form name="apply_form" action = "DMS_Dynamic_Application_connect.php" method= "post" onsubmit="return confirm('Are you sure you want to submit?');">
		<input type="hidden" name="application_id" value="<?php echo $application_id?>"/>
		<input type="hidden" name="user_id" value="<?php echo $user_id?>"/>
		<table>
			<?php
				foreach($array_unique_questions as $key=>$value)
				{
					echo "<tr><td>$value</td></td>";
					echo "<tr><td><textarea class='written' placeholder='Please enter your response here' name='question_$key' rows='10' 
					cols'800' required></textarea></td></tr>";
				}
			?>
			
		</table>
		<!--submit button. Will post info.-->
		<td colspan="1" style="text-align: center; float: center;"><input type="submit" value="Submit" name="submit"/> </td>
		
	</form>
</body>
</html>