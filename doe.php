<?php 
include_once "config/config.php";
include_once "$CLASS_PATH/class.Biblia.php";
include_once "$CLASS_PATH/class.System.php";
$sys = new System();
if (!$ambiente_desenvolvimento) {
  $sys->registraAcesso();
}
header('Location: https://www.paypal.com/donate?hosted_button_id=UVT2DU89C2X6N');