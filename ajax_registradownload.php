<?php 
if (isset($_GET['id'])) {
	include_once "config/config.php";
	include_once "$CLASS_PATH/class.Midias.php";
	$md = new Midias();
	$midias = $md->registraDownload($_GET['id']);
}