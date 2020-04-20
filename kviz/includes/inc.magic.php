<?php
//inc.magic.php
include_once "magic.php";
if (isset($_POST["submit"])) {
	$username = $_POST["username"];
	$object = new Quiz();
	$object->user($username);
}
else{
	header("location:../index.php?greska");
	exit();
}
?>