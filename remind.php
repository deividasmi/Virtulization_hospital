<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="css/style.css">
	<title>Ligonine</title>
	<meta charset='UTF-8'>
</head>
<body>
	<?php require'./imports/main_menu.php'?>
	
	<form method="POST" action="">
		<div class="form-group">
			<label for="snumber">Asmens kodas</label>
			<input type="text" name="snumber" id="snumber">
		</div>
		<div class="form-group">
			<label for="lastname">Pavarde</label>
			<input type="text" name="lastname" id="lastname">
		</div>
		<div class="form-group">
			<input type="submit" value="Priminti>>">
		</div>
		<div class="form-text">
			<p>Pagal asmens kodą ir pavardę sistema patikrins ar turite prisijungimo slaptažodį ir atsiųs tuo pačiu elektroniu adresu, kuriuo Jums slaptažodis ir buvo suteiktas.</p>
		</div>
	</form>
	
</body>
</html>
