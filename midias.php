<!doctype html>
<?php 
include_once "config/config.php";
include_once "$CLASS_PATH/class.Biblia.php";
include_once "$CLASS_PATH/class.System.php";
$sys = new System();
if (!$ambiente_desenvolvimento) {
  $sys->registraAcesso();
}


?>
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
        <h1 class="mt-5">Mídias</h1>
        <div class="row">
          <div class="col-md-3">            
            <p class="lead"><a href="./biblia-sagrada.php?versao=aa" versao="aa">Nova Almeida Atualizada</a></p>
          </div>
          <div class="col-md-3">            
            <p class="lead"><a href="./biblia-sagrada.php?versao=acf" versao="acf">Almeida Corrigida Fiel</a></p>
          </div>
          <div class="col-md-3">            
            <p class="lead"><a href="./biblia-sagrada.php?versao=arc" versao="arc">Almeida Revista e Corrigida</a></p>
          </div>
          <div class="col-md-3">            
            <p class="lead"><a href="./biblia-sagrada.php?versao=en_kjv" versao="en_kjv">King James Version EN</a></p>
          </div>
        </div>
        
        <div class="row">
          <div class="col-md-3">            
            <p class="lead"><a href="./biblia-sagrada.php?versao=ntlh" versao="ntlh">Nova Tradução na Linguagem de Hoje</a></p>
          </div>
          <div class="col-md-3">            
            <p class="lead"><a href="./biblia-sagrada.php?versao=nvi" versao="nvi">Nova Versão Internacional</a></p>
          </div>
          <div class="col-md-3">            
            <p class="lead"><a href="./biblia-sagrada.php?versao=pt_kjv" versao="pt_kjv">King James Version PT</a></p>
          </div>
          <div class="col-md-3">            
            <p class="lead"><a href="./biblia-sagrada.php?versao=viva" versao="viva">Nova Bíblia Viva</a></p>
          </div>
        </div>
      </section>

   
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
  </body>
</html>
