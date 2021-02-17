<!doctype html>
<?php 
include_once "config/config.php";
include_once "$CLASS_PATH/class.Midias.php";
$md = new Midias();
$midias = $md->buscaMidias();
$arrayMidias = array();
if ($midias) {
  foreach ($midias as $key => $value) {
    $arrayMidias[$value['tipomidia']][] = $value;
  }
}
//echo "<pre>";
//print_r($arrayMidias);die;

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
        <h1 class="mt-5">Mídias</h1>
        <div class="row">
          <h2 class="mt-2">Imagens</h2>
          <?php 
            if (isset($arrayMidias['imagem'])) {
              foreach ($arrayMidias['imagem'] as $m => $img) {
          ?>
              <div class="col-md-3 img_download" id="<?=$img['id_cristaonarede_midia']?>">
                <a href="<?=$img['caminho']?>" download="<?=$img['nome']?>" title="Baixar">
                  <span class="span_icon">
                    <i class="fas fa-download"></i>
                    <img src="<?=$img['caminho']?>" alt="<?=$img['nome']?>" class="img-thumbnail">
                  </span>
               </a>

              </div>
          <?php 
              }
            }
            else{
              echo '<div class="col-md-12">            
                <p class="lead">Nenhuma imagem postada no momento.</p>
              </div>';
            }
          ?>
        </div>

        <div class="row">
          <h2 class="mt-2">Vídeos</h2>
          <?php 
            if (isset($arrayMidias['videos'])) {
              foreach ($arrayMidias['videos'] as $v => $videos) {
          ?>
              <div class="col-md-3">            
                <img src="<?=$videos['caminho']?>" alt="<?=$videos['nome']?>" class="img-thumbnail">
              </div>
          <?php 
              }
            }
            else{
              echo '<div class="col-md-12">            
                <p class="lead">Nenhum vídeo postado no momento.</p>
              </div>';
            }
          ?>
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
    <script type="text/javascript">
      
      $(function() {
        $( ".img_download" ).click(function() {
          var id = $(this).attr('id');
          $.ajax({
            url: "ajax_registradownload.php",
            data: {id: id}
          });
        });

      });
    </script>
  </body>
</html>
