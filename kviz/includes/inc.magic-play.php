<?php
//inc.magic-play.php
include_once "magic.php";
if (isset($_POST["submit"])) {
	$question_1 = $_POST["question_1"];
	$question_2 = $_POST["question_2"];
	$question_3 = $_POST["question_3"];

	$object = new Quiz();
	$object->play($question_1,$question_2,$question_3);
}
else{
	header("location:../quiz.php?greska");
	exit();
}
?> 