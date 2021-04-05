<?php
include_once "config/config.php";
include_once "$CLASS_PATH/class.System.php";
include_once "$CLASS_PATH/class.Dicionario.php";

$sys = new System();
$dc = new Dicionario();
echo "<pre>";print_r($_GET);
echo "<pre>";print_r($_POST);
echo "<pre>";print_r($motivo);die;
die;
if ($_POST) {
	$dc->registraDenunciaDicionario($_GET['id'], $_POST['userId'], $_POST['motivo']);
	echo "<script>alert('Denúncia enviada com sucesso.');window.location.href='./texto-dicionario.php?id=$_GET[id]';</script>";
}