<?php
include_once "config/config.php";
include_once "$CLASS_PATH/class.System.php";
include_once "$CLASS_PATH/class.Dicionario.php";

$sys = new System();
$dc = new Dicionario();

if ($_POST) {
	$dc->registraDenunciaDicionario($_GET['id'], $_POST['userId'], $_POST['motivo']);
}