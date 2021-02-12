<?php
  header("Access-Control-Allow-Origin: *");
  
  $base     ="/var/www/cristaonarede";
  $base_http    = "http://www.localhost/cristaonarede/";

  $PATH_BASE_HTTP = $base_http;
  $CLASS_PATH    = $base."/class" ;
  $PATH_CLASS    = $CLASS_PATH ;
  $SCRIPT_PATH  = $base_http."/css" ;
  $PATH_CSS    = $SCRIPT_PATH ;
  $PATH_JS    = $base_http."/js" ;
  $FUNCTION_PATH  = $base."/funcoes" ;
  $PATH_FUNCTION  = $FUNCTION_PATH ;
  $IMAGE_PATH    = $base_http."/img" ;


  include_once( "$base/class/class.Conexao.php" );
  /*****************************************
   *       Conexao com o db principal      *
   *****************************************/   
  $conexao = Conexao::getInstance();

  if(empty($extraidos)){
    extract($_POST);
    extract($_GET);
    extract($_FILES);
    if(isset($_SESSION))
      extract($_SESSION);
    $extraidos = 1;
  }
  
    $ambiente_desenvolvimento = 1;

  
  $app_id_onesignal = "";