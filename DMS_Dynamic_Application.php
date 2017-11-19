<!DOCTYPE html>
<html>

<head>
	<link href='application.css' type='text/css' rel='stylesheet'>
	<script src="https://code.jquery.com/jquery-3.1.1.js"></script>
</head>


<body>
	<!--this form will post to DMS_connect in order to submit data to DB-->
	<form name="apply_form" action = "DMS_CreateApplication_connect.php" method= "post" onsubmit="return confirm('Are you sure you want to submit? This action cannot be undone');">

		<table>