<?php 
if (isset($_POST['id'])) {
	include_once "config/config.php";
	include_once "$CLASS_PATH/class.Midias.php";
	$md = new Midias();
	$midias = $md->registraDownload($_POST['id']);
}