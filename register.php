<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="css/style.css">
	<title>Ligonine</title>
	<meta charset='UTF-8'>
</head>
<body>
	<?php require'./imports/main_menu.php'?>
	
	<form method="POST" action="phpscripts/registration.php">
		<div class="form-group">
			<label for="snumber">Asmens kodas</label>
			<input type="text" name="snumber" id="snumber">
		</div>
		<div class="form-group">
			<label for="lastname">Pavarde</label>
			<input type="text" name="lastname" id="lastname">
		</div>
		<div class="form-group">
			<label for="email">Email</label>
			<input type="email" name="email" id="email">
		</div>
		<div class="form-group">
			<label for="password">Slaptažodis</label>
			<input type="password" name="password" id="password">
		</div>
		<div class="form-group">
			<input type="submit" value="Registruotis">
		</div>
		<div class="form-text">
			<p>Pagal asmens kodą ir pavardę sistema patikrins ar priklausote kuriai nors įstaigos apylinkei ir suteiks slaptažodį toliau registruotis pas gydytoją.</p>
		</div>
	</form>
	
</body>
</html>
