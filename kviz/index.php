<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Kviz</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<h1>Dobro dosli u moju probnu kviz aplikaciju</h1>
	<div>
		<p>*Upisite svoje ime da bi ste zapoceli kviz</p>
		<form method="POST" action="includes/inc.magic.php">
			<label for="username">Vase ime:</label><input type="text" name="username" id="username">
			<button type="submit" name="submit">Pocni</button>
		</form>
	</div>
	<h2>Rezultati</h2>
	<?php include_once "includes/inc.display.magic.php"; ?>
</body>
</html>