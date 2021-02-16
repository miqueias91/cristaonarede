<?php
include_once "config/config.php";
include_once "$CLASS_PATH/class.Biblia.php";

$app = new Biblia();
$texto = $app->insereTexto($versao);
?>