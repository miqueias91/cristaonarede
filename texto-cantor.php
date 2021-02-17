<?php
include_once "config/config.php";
include_once "$CLASS_PATH/class.Cantor.php";

if ($_GET['id'] < 1) {
  $_GET['id'] = 1;
}
else if  ($_GET['id'] > 581){
  $_GET['id'] = 581;
}

$n = $_GET['id'] ? $_GET['id'] : '1';

$app = new Cantor();
$texto = $app->buscaTextoCantor($n);

$num_prox = $n+1;
if ($num_prox > 581) {
  $num_prox = 581;
}
$num_ant = $n-1;
if ($num_ant <= 0) {
  $num_ant = 1;
}
?>
<!doctype html>
<html lang="pt-br" class="h-100">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Diversas traduções e versões da Bíblia Sagrada, Quiz da Bíblia, Cifras e Harpa Cristã. Versículos e mensagens bíblicas da palavra de Deus diária para cada ocasião.">
    <meta name="author" content="Innovate Soft, and Miqueias Matias Caetano">
    <meta name="generator" content="Innovate Soft">
    <title>Cristão na Rede · Conteúdo cristão de qualidade</title>
    

    <!-- Bootstrap core CSS -->
    <link href="./css/bootstrap.min.css" rel="stylesheet">
    <link href="./css/sticky-footer-navbar.css" rel="stylesheet">
    <link href="./css/jquery-ui-1.12.1.custom/jquery-ui.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./css/fontawesome-free-5.6.3-web/css/all.css">
    <link href="./css/style.css" rel="stylesheet">
    <link rel="shortcut icon" href="img/favicon.ico" />
    <script data-ad-client="ca-pub-7091486462236476" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
  </head>
  <body class="d-flex flex-column h-100">
    <?php include_once './header.php'; ?>

    <!-- Begin page content -->
    <main class="flex-shrink-0">
      <section class="container">
        <h1 class="mt-5 text-center" id="titulo-cantor"><?=$texto['id']?> - <?=$texto['titulo']?></h1>
      </section>

      <section class="container">
        <div class="col-md" id="conteudoCantor">      
          <?php
            foreach ($texto['hinario'] as $row) {
              if (is_numeric(substr($row, 0,1))) {
                echo '<br><br>';
              }
              if (substr($row, 0,1) == '*') {
                echo '<p class="lead"><b>'.$row.'</b></p>';
              }
              else{
                echo '<p class="lead">'.$row.'</p>';
              }
            } 
          ?>
        </div>
        <div class="row" id="botoes">
          <div class="col-md-6">
            <button id="ant-texto-livro" class="btn btn-outline-success" type="submit">Anterior</button>
            <button id="pro-texto-livro" class="btn btn-primary" type="submit">Próximo</button>
          </div>
        </div>
    </main>
   <!-- Anuncio1 -->
    <ins class="adsbygoogle"
    style="display:block"
    data-ad-client="ca-pub-7091486462236476"
    data-ad-slot="5148404228"
    data-ad-format="auto"
    data-full-width-responsive="true"></ins>
    <script>
    (adsbygoogle = window.adsbygoogle || []).push({});
    </script>
    
    <?php include_once './footer.php'; ?>

    <script src="./js/bootstrap.bundle.min.js"></script>
    <script src="./js/jquery-3.5.1.min.js"></script>  
    <script src="./css/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
    <script type="text/javascript">
   
      $(function() { 

        $( "#ant-texto-livro" ).click(function() {
          location.href = 'texto-cantor.php?id='+<?=$num_ant?>;
        });

        $( "#pro-texto-livro" ).click(function() {
          location.href = 'texto-cantor.php?id='+<?=$num_prox?>;
        });
      });
    </script>
 
  </body>
</html>
