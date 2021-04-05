<?php
include_once "./config/config.php";
include_once "$CLASS_PATH/class.System.php";
include_once "$CLASS_PATH/class.Dicionario.php";

$sys = new System();
$dc = new Dicionario();

$_POST['exemplo'] = empty($_POST['exemplo']) ? null : trim($_POST['exemplo']);
echo "<pre>";print_r($_GET);
echo "<pre>";print_r($_POST);die;
if ($_POST) {
	$dc->registraDicionario($_POST['giria'], $_POST['significado'], $_POST['userId'], $_POST['exemplo']);
	echo "<script>alert('Palavra enviada com sucesso.');window.location.href='./dicionario.php';</script>";
}