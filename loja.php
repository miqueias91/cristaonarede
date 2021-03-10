<!doctype html>
<?php 
include_once "config/config.php";
include_once "$CLASS_PATH/class.Biblia.php";
include_once "$CLASS_PATH/class.System.php";
header("Access-Control-Allow-Origin: *");

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
        <div class="row">
          <div class="col-md-6">
            <h1 class="mt-5">Loja</h1>
          </div>
          <div class="col-md-6">
            <img src="./img/logoassociadoamazon.png" class="responsive mt-5 img-associado-amazon" style="width: 175px;height: 30px;">
          </div>
        </div>
          <div class="row card">
            <div class="col-md-12 card-body">
              <a class="dropdown-item" target="_blank" href="https://www.amazon.com.br/gp/search?ie=UTF8&tag=miqueias91-20&linkCode=ur2&linkId=b4a22c34a9136fdaf41666ff22cb8e98&camp=1789&creative=9325&index=books&keywords=Bíblias">Bíblias
              <span style="float:right"><i class="fas fa-external-link-alt"></i></span></a>
            </div>
          </div>
          <div class="row card">
            <div class="col-md-12 card-body">
              <a class="dropdown-item" target="_blank" href="https://www.amazon.com.br/b?_encoding=UTF8&tag=miqueias91-20&linkCode=ur2&linkId=c44abde5141a577b7d673475ea32d5ea&camp=1789&creative=9325&node=7874675011">Livros
              <span style="float:right"><i class="fas fa-external-link-alt"></i></span></a>
            </div>
          </div>
          <div class="row card">
            <div class="col-md-12 card-body">
              <a class="dropdown-item" target="_blank" href="https://www.amazon.com.br/gp/search?ie=UTF8&tag=miqueias91-20&linkCode=ur2&linkId=84d230189a204705d2f30c6fc64b7ddd&camp=1789&creative=9325&index=books&keywords=catolicismo">Catolicismo
              <span style="float:right"><i class="fas fa-external-link-alt"></i></span></a>
          </div>
          </div>
          <div class="row card">
            <div class="col-md-12 card-body">
              <a class="dropdown-item" target="_blank" href="https://www.amazon.com.br/gp/search?ie=UTF8&tag=miqueias91-20&linkCode=ur2&linkId=512b015aee30b1121e35104a56b228d9&camp=1789&creative=9325&index=books&keywords=teologia">Teologia
              <span style="float:right"><i class="fas fa-external-link-alt"></i></span></a>
            </div>
          </div>
          <div class="row card">
            <div class="col-md-12 card-body">
              <a class="dropdown-item" target="_blank" href="https://www.amazon.com.br/gp/search?ie=UTF8&tag=miqueias91-20&linkCode=ur2&linkId=8117835ddda0f85bb6fa19c6b9703b18&camp=1789&creative=9325&index=books&keywords=vida cristã">Vida Cristã
              <span style="float:right"><i class="fas fa-external-link-alt"></i></span></a>
            </div>
          </div>
          <div class="row card">
            <div class="col-md-12 card-body">
              <a class="dropdown-item" target="_blank" href="https://www.amazon.com.br/gp/search?ie=UTF8&tag=miqueias91-20&linkCode=ur2&linkId=fb65ae0ccd0f38f3d5674752e76c826c&camp=1789&creative=9325&index=books&keywords=judaísmo">Judaísmo
              <span style="float:right"><i class="fas fa-external-link-alt"></i></span></a>
            </div>
          </div>
          <div class="row card">
            <div class="col-md-12 card-body">
              <a class="dropdown-item" target="_blank" href="https://www.amazon.com.br/gp/search?ie=UTF8&tag=miqueias91-20&linkCode=ur2&linkId=eb844acd3e92995861f8645e93ecd393&camp=1789&creative=9325&index=books&keywords=Estudos da Religião">Estudos da Religião
              <span style="float:right"><i class="fas fa-external-link-alt"></i></span></a>
            </div>
          </div>
          <div class="row card">
            <div class="col-md-12 card-body">
              <a class="dropdown-item" target="_blank" href="https://www.amazon.com.br/b?_encoding=UTF8&tag=miqueias91-20&linkCode=ur2&linkId=d90dcb86201f419254c5488c30e27c24&camp=1789&creative=9325&node=18914209011">Automotivo
              <span style="float:right"><i class="fas fa-external-link-alt"></i></span></a>
            </div>
          </div>
          <div class="row card">
            <div class="col-md-12 card-body">
              <a  class="dropdown-item" target="_blank" href="https://www.amazon.com.br/b?_encoding=UTF8&tag=miqueias91-20&linkCode=ur2&linkId=90151efefafc8c0c6c098d8743737ddc&camp=1789&creative=9325&node=17242603011">Bebês
              <span style="float:right"><i class="fas fa-external-link-alt"></i></span></a>
            </div>
          </div>
         <div class="row card">
            <div class="col-md-12 card-body">
              <a  class="dropdown-item" target="_blank" href="https://www.amazon.com.br/b?_encoding=UTF8&tag=miqueias91-20&linkCode=ur2&linkId=f34dbded7ce368763d16a05eb24bc507&camp=1789&creative=9325&node=16194414011">Beleza
              <span style="float:right"><i class="fas fa-external-link-alt"></i></span></a>
            </div>
          </div>
         <div class="row card">
            <div class="col-md-12 card-body">
              <a class="dropdown-item" target="_blank" href="https://www.amazon.com.br/b?_encoding=UTF8&tag=miqueias91-20&linkCode=ur2&linkId=abe2f49f672d44acc3b4a935dd7d1b45&camp=1789&creative=9325&node=17681967011">Bolsas, Malas e Mochilas
              <span style="float:right"><i class="fas fa-external-link-alt"></i></span></a>
            </div>
          </div>
         <div class="row card">
            <div class="col-md-12 card-body">
              <a class="dropdown-item" target="_blank" href="https://www.amazon.com.br/b?_encoding=UTF8&tag=miqueias91-20&linkCode=ur2&linkId=6a9d4e2fe5dbe28bc787833b88d6d665&camp=1789&creative=9325&node=16194299011">Brinquedos e Jogos
              <span style="float:right"><i class="fas fa-external-link-alt"></i></span></a>
            </div>
          </div>
          <div class="row card">
            <div class="col-md-12 card-body">
              <a class="dropdown-item" target="_blank" href="https://www.amazon.com.br/b?_encoding=UTF8&tag=miqueias91-20&linkCode=ur2&linkId=14cb74ff99f9e2af12feeafa9c4a6a54&camp=1789&creative=9325&node=19416130011">CD e Vinil Religião e Gospel
              <span style="float:right"><i class="fas fa-external-link-alt"></i></span></a>
            </div>
          </div>
          <div class="row card">
            <div class="col-md-12 card-body">
              <a class="dropdown-item" target="_blank" href="https://www.amazon.com.br/b?_encoding=UTF8&tag=miqueias91-20&linkCode=ur2&linkId=1ab4d8d3740820e8830060197f14e839&camp=1789&creative=9325&node=16209062011">Eletrônicos
              <span style="float:right"><i class="fas fa-external-link-alt"></i></span></a>
            </div>
          </div>
          <div class="row card">
            <div class="col-md-12 card-body">
              <a class="dropdown-item" target="_blank" href="https://www.amazon.com.br/b?_encoding=UTF8&tag=miqueias91-20&linkCode=ur2&linkId=b8445ac70fcba1f7fb67feb94bb5c36e&camp=1789&creative=9325&node=18991252011">Instrumentos Musicais
              <span style="float:right"><i class="fas fa-external-link-alt"></i></span></a>
            </div>
          </div>
      </section>

      <section class="container">
        <h1 class="mt-5">Recomendados para você</h1>

          <iframe style="width:120px;height:240px;" marginwidth="0" marginheight="0" scrolling="no" frameborder="0" src="//ws-na.amazon-adsystem.com/widgets/q?ServiceVersion=20070822&OneJS=1&Operation=GetAdHtml&MarketPlace=BR&source=ac&ref=tf_til&ad_type=product_link&tracking_id=miqueias91-20&marketplace=amazon&amp;region=BR&placement=8531112893&asins=8531112893&linkId=640cdb06cbaa8afcdfc0e440a757ac56&show_border=false&link_opens_in_new_window=false&price_color=333333&title_color=0066c0&bg_color=ffffff">
          </iframe>

          <iframe style="width:120px;height:240px;" marginwidth="0" marginheight="0" scrolling="no" frameborder="0" src="//ws-na.amazon-adsystem.com/widgets/q?ServiceVersion=20070822&OneJS=1&Operation=GetAdHtml&MarketPlace=BR&source=ac&ref=tf_til&ad_type=product_link&tracking_id=miqueias91-20&marketplace=amazon&amp;region=BR&placement=8581581889&asins=8581581889&linkId=00f507e36a7926ec53dbbff4851d0d3f&show_border=false&link_opens_in_new_window=false&price_color=333333&title_color=0066c0&bg_color=ffffff">
          </iframe>

          <iframe style="width:120px;height:240px;" marginwidth="0" marginheight="0" scrolling="no" frameborder="0" src="//ws-na.amazon-adsystem.com/widgets/q?ServiceVersion=20070822&OneJS=1&Operation=GetAdHtml&MarketPlace=BR&source=ac&ref=tf_til&ad_type=product_link&tracking_id=miqueias91-20&marketplace=amazon&amp;region=BR&placement=8578604091&asins=8578604091&linkId=5f8eb5538cf2636a629f21e59afb6346&show_border=false&link_opens_in_new_window=false&price_color=333333&title_color=0066c0&bg_color=ffffff">
          </iframe>

          <iframe style="width:120px;height:240px;" marginwidth="0" marginheight="0" scrolling="no" frameborder="0" src="//ws-na.amazon-adsystem.com/widgets/q?ServiceVersion=20070822&OneJS=1&Operation=GetAdHtml&MarketPlace=BR&source=ac&ref=tf_til&ad_type=product_link&tracking_id=miqueias91-20&marketplace=amazon&amp;region=BR&placement=6556550388&asins=6556550388&linkId=72ede390be19458da7a40acb37c8cdb4&show_border=false&link_opens_in_new_window=false&price_color=333333&title_color=0066c0&bg_color=ffffff">
          </iframe>

          <iframe style="width:120px;height:240px;" marginwidth="0" marginheight="0" scrolling="no" frameborder="0" src="//ws-na.amazon-adsystem.com/widgets/q?ServiceVersion=20070822&OneJS=1&Operation=GetAdHtml&MarketPlace=BR&source=ac&ref=tf_til&ad_type=product_link&tracking_id=miqueias91-20&marketplace=amazon&amp;region=BR&placement=B076DR791V&asins=B076DR791V&linkId=4a3d61bf9311a2d45937eb9eb18b434c&show_border=false&link_opens_in_new_window=false&price_color=333333&title_color=0066c0&bg_color=ffffff">
          </iframe>

          <iframe style="width:120px;height:240px;" marginwidth="0" marginheight="0" scrolling="no" frameborder="0" src="//ws-na.amazon-adsystem.com/widgets/q?ServiceVersion=20070822&OneJS=1&Operation=GetAdHtml&MarketPlace=BR&source=ac&ref=tf_til&ad_type=product_link&tracking_id=miqueias91-20&marketplace=amazon&amp;region=BR&placement=8581581021&asins=8581581021&linkId=7f1ef5af9796ab9ccc22d7d7c9273747&show_border=false&link_opens_in_new_window=false&price_color=333333&title_color=0066c0&bg_color=ffffff">
          </iframe>

          <iframe style="width:120px;height:240px;" marginwidth="0" marginheight="0" scrolling="no" frameborder="0" src="//ws-na.amazon-adsystem.com/widgets/q?ServiceVersion=20070822&OneJS=1&Operation=GetAdHtml&MarketPlace=BR&source=ac&ref=tf_til&ad_type=product_link&tracking_id=miqueias91-20&marketplace=amazon&amp;region=BR&placement=857860184X&asins=857860184X&linkId=c6dec818f4e0cc9d5068e7d5aeff3fd7&show_border=false&link_opens_in_new_window=false&price_color=333333&title_color=0066c0&bg_color=ffffff">
          </iframe>

          <iframe style="width:120px;height:240px;" marginwidth="0" marginheight="0" scrolling="no" frameborder="0" src="//ws-na.amazon-adsystem.com/widgets/q?ServiceVersion=20070822&OneJS=1&Operation=GetAdHtml&MarketPlace=BR&source=ac&ref=tf_til&ad_type=product_link&tracking_id=miqueias91-20&marketplace=amazon&amp;region=BR&placement=8578601777&asins=8578601777&linkId=dea6b34e7cd40001bf2d53fbd4b93103&show_border=false&link_opens_in_new_window=false&price_color=333333&title_color=0066c0&bg_color=ffffff">
          </iframe>

          <iframe style="width:120px;height:240px;" marginwidth="0" marginheight="0" scrolling="no" frameborder="0" src="//ws-na.amazon-adsystem.com/widgets/q?ServiceVersion=20070822&OneJS=1&Operation=GetAdHtml&MarketPlace=BR&source=ac&ref=tf_til&ad_type=product_link&tracking_id=miqueias91-20&marketplace=amazon&amp;region=BR&placement=8543302536&asins=8543302536&linkId=971d64800900c112f5ff6453a3c90dec&show_border=false&link_opens_in_new_window=false&price_color=333333&title_color=0066c0&bg_color=ffffff">
          </iframe>

          <iframe style="width:120px;height:240px;" marginwidth="0" marginheight="0" scrolling="no" frameborder="0" src="//ws-na.amazon-adsystem.com/widgets/q?ServiceVersion=20070822&OneJS=1&Operation=GetAdHtml&MarketPlace=BR&source=ac&ref=tf_til&ad_type=product_link&tracking_id=miqueias91-20&marketplace=amazon&amp;region=BR&placement=8588315696&asins=8588315696&linkId=9b5a6530f1092b27f98bf0ac9cc61b80&show_border=false&link_opens_in_new_window=false&price_color=333333&title_color=0066c0&bg_color=ffffff">
          </iframe>
      </section>
      <div id="publicidade" title="Publicidade"></div>
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

    <script>
      $(function() {

  
      });
    </script>

  </body>
</html>
