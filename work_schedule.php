<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="css/style.css">
	<title>Ligonine</title>
	<meta charset='UTF-8'>
	<style>
table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
}
th, td {
    padding: 5px;
    text-align: left;
}
</style>
</head>
<body>
	<?php require './imports/connect.php'; ?>
	<?php include './imports/main_menu.php'; ?>
	<p>Darbo grafikai</p>
	
	<?php include 'phpscripts/work_schedule.php'; ?>
	
</body>
</html>
