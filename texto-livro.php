<?php
include_once "config/config.php";
include_once "$CLASS_PATH/class.Biblia.php";

$versao = !empty($_GET['versao']) ? $_GET['versao'] : 'nvi';
$abrev = !empty($_GET['abrev']) ? $_GET['abrev'] : 'Gn';

if (!isset($numberchapter)){
  $numberchapter = 1;
}

$app = new Biblia();
$texto = $app->buscaTexto($abrev, $numberchapter, $versao);
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
        <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
        <!-- Quadrado 1 -->
        <ins class="adsbygoogle"
             style="display:block"
             data-ad-client="ca-pub-7091486462236476"
             data-ad-slot="3860366497"
             data-ad-format="auto"
             data-full-width-responsive="true"></ins>
        <script>
             (adsbygoogle = window.adsbygoogle || []).push({});
        </script>
      </section>

      <section class="container">
        <div class="row">
          <div class="col-md-6">
            <h2 class="mt-5"><?= $texto['name']?></h2>
          </div>
          <div class="col-md-2">
            <select class="form-select form-select-lg mt-5 capitulo">
              <option selected value="<?=$texto['numberchapter']?>"><?=$texto['numberchapter']?></option>
              <?php 
                if ($texto) {
                  for ($i=1; $i <= $texto['numberallchapters']; $i++) { 
                    echo '<option value="'.$i.'">'.$i.'</option>';
                  }
                }
              ?>
            </select>
          </div>
          <div class="col-md-4">
            <h1 class="mt-5">Bíblia <?=strtoupper($versao)?></h1>
          </div>
        </div>    
      </section>

      <section class="container">
        <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
        <!-- Horizontal 2 -->
        <ins class="adsbygoogle"
             style="display:block"
             data-ad-client="ca-pub-7091486462236476"
             data-ad-slot="8888783157"
             data-ad-format="auto"
             data-full-width-responsive="true"></ins>
        <script>
             (adsbygoogle = window.adsbygoogle || []).push({});
        </script>
      </section>

      <section class="container">
        <div class="row" id="texto-livro">
          <center style='display: none;'>
            <img src="./img/carregando1.gif">
          </center>

          <?php
            if ($texto) {
              foreach ($texto['chapters'] as $key => $row) {
                echo '<div >
                  <p style="text-align:justify;" class="txt_versiculo">
                    <span style="font-weight:bold;">'.($key+1).'</span>
                    &nbsp;&nbsp;'.$row.' 
                  </p>
                </div>';
              }
            }
          ?>
        </div>
        <div class="row">
          <div class="col-md-6">
            <button id="ant-texto-livro" class="btn btn-outline-success" type="submit">Anterior</button>
            <button id="pro-texto-livro" class="btn btn-primary" type="submit">Próximo</button>
            <a href="https://play.google.com/store/apps/details?id=br.com.innovatesoft.abibliasagrada" target="_BLANK" class="btn btn-primary">Baixar App <i class="fab fa-google-play"></i></a>
          </div>
        </div>
      </section>

      <section class="container">        
        <!-- Horizontal 1 -->
        <ins class="adsbygoogle"
        style="display:block"
        data-ad-client="ca-pub-7091486462236476"
        data-ad-slot="5148404228"
        data-ad-format="auto"
        data-full-width-responsive="true"></ins>
        <script>
        (adsbygoogle = window.adsbygoogle || []).push({});
        </script>
      </section>

    </main>
     
    <?php include_once './footer.php'; ?>

    <script src="./js/bootstrap.bundle.min.js"></script>
    <script src="./js/jquery-3.5.1.min.js"></script>  
    <script src="./css/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
    <script type="text/javascript">

      var versao = '<?=$versao?>';
      var abrev = "<?=$texto['abbrev']?>";
      var numberchapter = parseInt("<?=$texto['numberchapter']?>");

      $(function() {
        $( ".capitulo" ).change(function() {
          location.href = 'texto-livro.php?versao='+versao+'&abrev='+abrev+'&numberchapter='+$(this).val();
        });

        $( "#ant-texto-livro" ).click(function() {
          numberchapter--;
          location.href = 'texto-livro.php?versao='+versao+'&abrev='+abrev+'&numberchapter='+numberchapter;
        });

        $( "#pro-texto-livro" ).click(function() {
          numberchapter++;
          location.href = 'texto-livro.php?versao='+versao+'&abrev='+abrev+'&numberchapter='+numberchapter;
        });
      });
    </script>

  </body>
</html>
