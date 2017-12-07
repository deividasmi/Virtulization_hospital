<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="css/style.css">
	<title>Ligonine</title>
	<meta charset='UTF-8'>
</head>
<body>
	<?php require'./imports/main_menu.php'?>
	
	<div class="text">
	Dėmesio besiregistruojantiems internetu ir naudojantiems (outlook.com, hotmail.com) el. paštą.
	Jums išsiųstą slaptažodį galėsite gauti tik tuomet, kai mūsų polikliniką įtrauksite į savo el. pašto nustatymuose įrašytų patikimų siuntėjų sąrašą !
	Atsidarykite (naudodami ne mobilų įrenginį) <a href="https://outlook.live.com/owa/?realm=outlook.com&path=/options/safesenderslist">šią nuorodą ir prisijunkite prie savo outlook pašto.</a>
	Į atsidariusį langą įrašykite, po to išsaugokite, nurodytą elektroninio pašto adresą: siuntimai@vrcp.lt

	Dėmesio!!! Daugiau apię negaunamą (outlook) paštą skaitykite:
	<a href="https://support.office.com/lt-lt/article/-Outlook-com-el-pa%C5%A1to-sinchronizavimo-problem%C5%B3-taisymas-d39e3341-8d79-4bf1-b3c7-ded602233642?ui=lt-LT&rs=lt-LT&ad=LT">čia...</a>
	</div>
	
	<form method="POST" action="phpscripts/loginUser.php">
		<div class="form-group">
			<label for="lastname">Pavarde</label>
			<input type="text" name="lastname" id="lastname">
		</div>
		<div class="form-group">
			<label for="password">Slaptazodis</label>
			<input type="password" name="password" id="password">
		</div>
		<div class="form-group">
			<input type="submit" value="Registruotis">
			<button>Pamirsau slaptazodi</button>
		</div>
		<div class="form-text">
			<p>Pranešame, kad dėl saugumo reikalavimų pakeistas ankstesnis registracijos būdas.</p>
			<p>Jei šiuo būdu registruojatės pirmą kartą, spauskite: <a href="register.php">PRAŠAU SUTEIKTI MAN SLAPTAŽODĮ</a></p>
			<p>Jei užmiršote Jums jau suteiktą slaptažodį, spauskite: <a href="remind.php">PRAŠAU PRIMINTI MAN SLAPTAŽODĮ</a></p>
		</div>
		<div class="caution">NAUDOKITE TIK LIETUVIŠKUS RAŠMENIS !  </div>
	</form>
	
</body>
</html>
