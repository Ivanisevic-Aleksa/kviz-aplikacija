<?php session_start();
	include_once "includes/magic.php";
	$object = new Quiz();
	$object->session(); 
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Kviz</title>
</head>
<body>
	<?php echo "<p>Korisnicko ime"." ".$_SESSION["username"]; ?>
	<form method="POST" action="includes/inc.magic-play.php">
		<div>
			<h3>Prvo pitanje</h3>
			<p>Koliko je 2 + 2?</p>
			<input type="radio" name="question_1" value="2" id="question_1-1">
			<label for="question_1-1">2</label><br>
			<input type="radio" name="question_1" value="6" id="question_2-1">
			<label for="question_2-1">6</label><br>
			<input type="radio" name="question_1" value="4" id="question_3-1">
			<label for="question_3-1">4</label><br>
			<input type="radio" name="question_1" value="1" id="question_4-1">
			<label for="question_4-1">1</label>
			<hr>
		</div>

		<div>
			<h3>Drugo pitanje</h3>
			<p>Koji je glavni grad Republike Srbije?</p>
			<input type="radio" name="question_2" value="nis" id="question_1-2">
			<label for="question_1-2">Nis</label><br>
			<input type="radio" name="question_2" value="beograd" id="question_2-2">
			<label for="question_2-2">Beograd</label><br>
			<input type="radio" name="question_2" value="leskovac" id="question_3-2">
			<label for="question_3-2">Leskovac</label><br>
			<input type="radio" name="question_2" value="novisad" id="question_4-2">
			<label for="question_4-2">Novi Sad</label>
			<hr>
		</div>

		<div>
			<h3>Drugo pitanje</h3>
			<p>Koji je tacan raspored boja na zastavi Republike Srbije? (odozgo ka dole)</p>
			<input type="radio" name="question_3" value="boja_1" id="question_1-3">
			<label for="question_1-3">crvena, bela, plava</label><br>
			<input type="radio" name="question_3" value="boja_2" id="question_2-3">
			<label for="question_2-3">plava, crvena, bela</label><br>
			<input type="radio" name="question_3" value="boja_3" id="question_3-3">
			<label for="question_3-3">crvena, plava, bela</label><br>
			<input type="radio" name="question_3" value="boja_4" id="question_4-3">
			<label for="question_4-3">bela, crvena, plava</label>
			<hr>
		</div>

		<div>
			<button type="submit" name="submit">Prikazi rezultate</button>
		</div>
		
	</form>
</body>
</html>