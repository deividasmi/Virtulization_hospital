<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="css/style.css">
	<title>Ligonine</title>
	<meta charset='UTF-8'>
	<script src="js/jquery-3.2.1.min.js"></script>
	<script>
		$(document).ready(function(){
			//Data
			var date = document.getElementById('date');
			var today = new Date();
			var mm = today.getMonth() + 1;
			var dd = today.getDate();
			var year = today.getFullYear();
			date.setAttribute("min", year+"-"+mm+"-"+dd);
			//Get doctors
			$.post( "./phpscripts/get_doctors.php", function( data ) {
				console.log('hi');
			});
		});
	</script>
</head>
<body>
	<?php include 'imports/main_menu.php'; ?>
	<?php require 'imports/connect.php'; ?>
	<form method="POST" action="phpscripts/makeAppointment.php">
		<div class="form-group">
			<label for="profession">Specialybė</label>
			<select id="professions">
				<?php include 'phpscripts/get_professions.php'; ?>
			</select>
		</div>
		<!--
		<div class="form-group">
			<label for="lastname">Daktaras</label>
			<select>
				<?php include 'phpscripts/get_doctors.php'; ?>
			</select>
		</div>
		-->
		<div class="form-group">
			<label for="password">Data</label>
			<input type="date" name="date" id="date">
			<input type="number" name="hour" min="8" max="16">
		</div>
		<div class="form-group">
			<input type="submit" value="Registruotis">
		</div>
	</form>
</body>
</html>
