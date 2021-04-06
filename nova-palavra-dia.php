<?php
header('Access-Control-Allow-Origin: *');  
header("Content-type: text/json");
include_once "config/config.php";
include_once "$CLASS_PATH/class.Biblia.php";


$app = new Biblia();
$mensagem = $app->palavraDia();
$mensagem = $mensagem[0];

echo json_encode($mensagem);