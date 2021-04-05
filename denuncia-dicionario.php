<!doctype html>
<?php 
include_once "config/config.php";
include_once "$CLASS_PATH/class.Dicionario.php";
include_once "$CLASS_PATH/class.System.php";
header("Access-Control-Allow-Origin: *");

$sys = new System();
if (!$ambiente_desenvolvimento) {
  $sys->registraAcesso();
}

$dc = new Dicionario();
$id = $_GET['id'] ? $_GET['id'] : 1;
$listaDic = $dc->buscaDicionario($id);
$giria = $listaDic[0];
//echo "<pre>";
//print_r($giria);die;

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
    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }
      .card {
        margin-top: 10px;
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
        <form method="POST" id="form" action="envia-denuncia.php?id=<?=$id?>" name='form' enctype='multipart/form-data'>
          <div class="row">
            <div class="col-md-6">
              <h1 class="mt-5">Você está denunciando o significado da palavra: <?=$giria['giria']?></h1>
            </div>

            <div class="row">
              <div class="col">
                  <div class="card-body text-center">
                    <br>
                    <br>
                    <textarea class="form-control" name="motivo" id="motivo" style="height: 100px" placeholder="Nos relate o motivo da denúncia desse significado"></textarea>
                    <br>
                    <button class="btn btn-outline-success enviar-denuncia" type="button">Enviar Denúncia</button>
                    <button class="btn btn-primary voltar-dicionario" type="button">Voltar</button>
                  </div>
              </div>
            </div>
        </form>
      </section>

      <section class="container">
        <h1 class="mt-5">Recomendados para você</h1>
          <iframe style="width:120px;height:240px;" marginwidth="0" marginheight="0" scrolling="no" frameborder="0" src="//ws-na.amazon-adsystem.com/widgets/q?ServiceVersion=20070822&OneJS=1&Operation=GetAdHtml&MarketPlace=BR&source=ac&ref=tf_til&ad_type=product_link&tracking_id=miqueias91-20&marketplace=amazon&amp;region=BR&placement=8581581889&asins=8581581889&linkId=00f507e36a7926ec53dbbff4851d0d3f&show_border=false&link_opens_in_new_window=false&price_color=333333&title_color=0066c0&bg_color=ffffff">
          </iframe>

          <iframe style="width:120px;height:240px;" marginwidth="0" marginheight="0" scrolling="no" frameborder="0" src="//ws-na.amazon-adsystem.com/widgets/q?ServiceVersion=20070822&OneJS=1&Operation=GetAdHtml&MarketPlace=BR&source=ac&ref=tf_til&ad_type=product_link&tracking_id=miqueias91-20&marketplace=amazon&amp;region=BR&placement=6556550388&asins=6556550388&linkId=72ede390be19458da7a40acb37c8cdb4&show_border=false&link_opens_in_new_window=false&price_color=333333&title_color=0066c0&bg_color=ffffff">
          </iframe>

          <iframe style="width:120px;height:240px;" marginwidth="0" marginheight="0" scrolling="no" frameborder="0" src="//ws-na.amazon-adsystem.com/widgets/q?ServiceVersion=20070822&OneJS=1&Operation=GetAdHtml&MarketPlace=BR&source=ac&ref=tf_til&ad_type=product_link&tracking_id=miqueias91-20&marketplace=amazon&amp;region=BR&placement=B076DR791V&asins=B076DR791V&linkId=4a3d61bf9311a2d45937eb9eb18b434c&show_border=false&link_opens_in_new_window=false&price_color=333333&title_color=0066c0&bg_color=ffffff">
          </iframe>

          <iframe style="width:120px;height:240px;" marginwidth="0" marginheight="0" scrolling="no" frameborder="0" src="//ws-na.amazon-adsystem.com/widgets/q?ServiceVersion=20070822&OneJS=1&Operation=GetAdHtml&MarketPlace=BR&source=ac&ref=tf_til&ad_type=product_link&tracking_id=miqueias91-20&marketplace=amazon&amp;region=BR&placement=8581581021&asins=8581581021&linkId=7f1ef5af9796ab9ccc22d7d7c9273747&show_border=false&link_opens_in_new_window=false&price_color=333333&title_color=0066c0&bg_color=ffffff">
          </iframe>

          <iframe style="width:120px;height:240px;" marginwidth="0" marginheight="0" scrolling="no" frameborder="0" src="//ws-na.amazon-adsystem.com/widgets/q?ServiceVersion=20070822&OneJS=1&Operation=GetAdHtml&MarketPlace=BR&source=ac&ref=tf_til&ad_type=product_link&tracking_id=miqueias91-20&marketplace=amazon&amp;region=BR&placement=8578601777&asins=8578601777&linkId=dea6b34e7cd40001bf2d53fbd4b93103&show_border=false&link_opens_in_new_window=false&price_color=333333&title_color=0066c0&bg_color=ffffff">
          </iframe>

          <iframe style="width:120px;height:240px;" marginwidth="0" marginheight="0" scrolling="no" frameborder="0" src="//ws-na.amazon-adsystem.com/widgets/q?ServiceVersion=20070822&OneJS=1&Operation=GetAdHtml&MarketPlace=BR&source=ac&ref=tf_til&ad_type=product_link&tracking_id=miqueias91-20&marketplace=amazon&amp;region=BR&placement=8543302536&asins=8543302536&linkId=971d64800900c112f5ff6453a3c90dec&show_border=false&link_opens_in_new_window=false&price_color=333333&title_color=0066c0&bg_color=ffffff">
          </iframe>

          <iframe style="width:120px;height:240px;" marginwidth="0" marginheight="0" scrolling="no" frameborder="0" src="//ws-na.amazon-adsystem.com/widgets/q?ServiceVersion=20070822&OneJS=1&Operation=GetAdHtml&MarketPlace=BR&source=ac&ref=tf_til&ad_type=product_link&tracking_id=miqueias91-20&marketplace=amazon&amp;region=BR&placement=8588315696&asins=8588315696&linkId=9b5a6530f1092b27f98bf0ac9cc61b80&show_border=false&link_opens_in_new_window=false&price_color=333333&title_color=0066c0&bg_color=ffffff">
          </iframe>

          <iframe style="width:120px;height:240px;" marginwidth="0" marginheight="0" scrolling="no" frameborder="0" src="//ws-na.amazon-adsystem.com/widgets/q?ServiceVersion=20070822&OneJS=1&Operation=GetAdHtml&MarketPlace=BR&source=ac&ref=tf_til&ad_type=product_link&tracking_id=miqueias91-20&marketplace=amazon&amp;region=BR&placement=8577422399&asins=8577422399&linkId=44ee84627e75eeb8b7af3bb3eef3c671&show_border=false&link_opens_in_new_window=false&price_color=333333&title_color=0066c0&bg_color=ffffff">
          </iframe>
          
          <iframe style="width:120px;height:240px;" marginwidth="0" marginheight="0" scrolling="no" frameborder="0" src="//ws-na.amazon-adsystem.com/widgets/q?ServiceVersion=20070822&OneJS=1&Operation=GetAdHtml&MarketPlace=BR&source=ac&ref=tf_til&ad_type=product_link&tracking_id=miqueias91-20&marketplace=amazon&amp;region=BR&placement=8527502704&asins=8527502704&linkId=2020e321cb7b35f76798c63bc76530d3&show_border=false&link_opens_in_new_window=false&price_color=333333&title_color=0066c0&bg_color=ffffff">
          </iframe>
      </section>
      <div id="publicidade" title="Publicidade"></div>

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

    <script src="https://www.gstatic.com/firebasejs/8.2.8/firebase-app.js"></script>
    <script src="https://www.gstatic.com/firebasejs/8.2.8/firebase-analytics.js"></script>
    <script src="https://www.gstatic.com/firebasejs/8.2.8/firebase-database.js"></script>
    <script src="https://www.gstatic.com/firebasejs/8.2.8/firebase-auth.js"></script>
    <script src="js/publicidade.js"></script>
    <script src="./js/jquery.mask.min.js"></script>

    <script>

      $(function() {
        $('.enviar-denuncia').click(function(){
          if ($("#motivo").val() == '') {
            alert('Informe o motivo da denúncia!');
          }
          else{
            if (confirm("Deseja realmente enviar a denúncia?")) {
              $('#form').submit();
            }
          }
        });

        $('.voltar-dicionario').click(function(){
          if (confirm("Deseja realmente voltar?")) {
            window.location.href='./texto-dicionario.php?id=<?=$id?>';
          }
        });

      });
    </script>

  </body>
</html>
