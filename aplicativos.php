<?php
include_once "config/config.php";
include_once "$CLASS_PATH/class.system.php";

$sys = new System();
if (!$ambiente_desenvolvimento) {
  $sys->registraAcesso();
}
header('Location: https://play.google.com/store/apps/developer?id=Innovate+Soft');