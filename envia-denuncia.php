<?php
include_once "./config/config.php";
include_once "class/class.system.php";
include_once "class/class.Dicionario.php";

$sys = new System();
$dc = new Dicionario();

if ($_POST) {
	$sys->registraDenunciaDicionario($['id'], $dataregistro, $userId, $motivo);
	echo "<script>alert('Denúncia enviada com sucesso.');window.location.href='./texto-dicionario.php?id=<?=$id?>';</script>";
}