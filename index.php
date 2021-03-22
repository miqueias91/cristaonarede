<!doctype html>
<?php 
include_once "config/config.php";
include_once "$CLASS_PATH/class.Biblia.php";
include_once "$CLASS_PATH/class.System.php";
$sys = new System();
if (!$ambiente_desenvolvimento) {
  $sys->registraAcesso();
}

$palavraDia = array(
array('livro' => 'Mt','cap' => '11', 'ver' => '28'),
array('livro' => 'Jo', 'cap' => '15', 'ver' => '7'),
array('livro' => 'at', 'cap' => '1', 'ver' => '8'),
array('livro' => 'Fp', 'cap' => '1', 'ver' => '6'),
array('livro' => '2Sm', 'cap' => '22', 'ver' => '31'),
array('livro' => 'Mt', 'cap' => '11', 'ver' => '28'),
array('livro' => 'Hb', 'cap' => '10', 'ver' => '23'),
array('livro' => 'Fp', 'cap' => '1', 'ver' => '6'),
array('livro' => '2Pe', 'cap' => '1', 'ver' => '4'),
array('livro' => 'Mt', 'cap' => '5', 'ver' => '8'),
array('livro' => 'Rm', 'cap' => '1', 'ver' => '6'),
array('livro' => 'Mt', 'cap' => '10', 'ver' => '32'),
array('livro' => 'Is', 'cap' => '44', 'ver' => '3'),
array('livro' => 'Jr', 'cap' => '29', 'ver' => '11'),
array('livro' => 'Fp', 'cap' => '4', 'ver' => '19'),
array('livro' => 'Ap', 'cap' => '3', 'ver' => '20'),
array('livro' => 'Ef', 'cap' => '1', 'ver' => '4'),
array('livro' => 'Ef', 'cap' => '1', 'ver' => '13'),
array('livro' => 'Mt', 'cap' => '28', 'ver' => '19'),
array('livro' => 'Jo', 'cap' => '14', 'ver' => '18'),
array('livro' => 'Jo', 'cap' => '8', 'ver' => '32'),
array('livro' => 'Mt', 'cap' => '24', 'ver' => '35'),
array('livro' => 'Sl', 'cap' => '126', 'ver' => '5'),
array('livro' => 'Jo', 'cap' => '8', 'ver' => '12'),
array('livro' => 'Jo', 'cap' => '15', 'ver' => '16'),
array('livro' => 'Hb', 'cap' => '13', 'ver' => '5'),
array('livro' => 'Tg', 'cap' => '4', 'ver' => '7'),
array('livro' => 'Mt', 'cap' => '6', 'ver' => '33'),
array('livro' => 'Jo', 'cap' => '10', 'ver' => '10'),
array('livro' => 'Jr', 'cap' => '33', 'ver' => '3'),
array('livro' => 'at', 'cap' => '1', 'ver' => '8'),
array('livro' => '1Jo', 'cap' => '5', 'ver' => '4'),
array('livro' => 'Js', 'cap' => '1', 'ver' => '9'),
array('livro' => 'Js', 'cap' => '1', 'ver' => '9'),
array('livro' => 'Rm', 'cap' => '8', 'ver' => '1'),
array('livro' => 'Sl', 'cap' => '31', 'ver' => '24'),
array('livro' => 'Sl', 'cap' => '91', 'ver' => '1'),
array('livro' => 'Hb', 'cap' => '12', 'ver' => '1'),
array('livro' => '2Tm', 'cap' => '4', 'ver' => '7'),
array('livro' => 'Rm', 'cap' => '12', 'ver' => '21'),
array('livro' => 'Jo', 'cap' => '14', 'ver' => '18'),
array('livro' => '1Co', 'cap' => '15', 'ver' => '55'),
array('livro' => 'Sl', 'cap' => '41', 'ver' => '1'),
array('livro' => 'Rm', 'cap' => '8', 'ver' => '31'),
array('livro' => 'Fp', 'cap' => '4', 'ver' => '6'),
array('livro' => 'Fp', 'cap' => '4', 'ver' => '13'),
array('livro' => 'Nm', 'cap' => '23', 'ver' => '19'),
array('livro' => 'Js', 'cap' => '21', 'ver' => '45'),
array('livro' => 'Js', 'cap' => '23', 'ver' => '14'),
array('livro' => '1Jo', 'cap' => '2', 'ver' => '25'),
array('livro' => 'Ez', 'cap' => '36', 'ver' => '26'),
array('livro' => '1Jo', 'cap' => '1', 'ver' => '9'),
array('livro' => '1Rs', 'cap' => '8', 'ver' => '56'),
array('livro' => 'Dt', 'cap' => '28', 'ver' => '9'),
array('livro' => 'Jl', 'cap' => '2', 'ver' => '32'),
array('livro' => 'Sl', 'cap' => '145', 'ver' => '13'),
array('livro' => '2Pe', 'cap' => '1', 'ver' => '4'),
array('livro' => 'Tg', 'cap' => '1', 'ver' => '12'),
array('livro' => 'Sl', 'cap' => '138', 'ver' => '4'),
array('livro' => '2Co', 'cap' => '7', 'ver' => '1'),
array('livro' => 'Sl', 'cap' => '119', 'ver' => '50'),
array('livro' => '2Pe', 'cap' => '3', 'ver' => '9'),
array('livro' => 'Gl', 'cap' => '3', 'ver' => '16'),
array('livro' => 'Jo', 'cap' => '16', 'ver' => '33'),
array('livro' => 'Mt', 'cap' => '6', 'ver' => '26'),
array('livro' => 'Sl', 'cap' => '34', 'ver' => '10'),
array('livro' => 'Mt', 'cap' => '6', 'ver' => '11'),
array('livro' => 'Sl', 'cap' => '23', 'ver' => '1'),
array('livro' => 'Sl', 'cap' => '4', 'ver' => '8'),
array('livro' => 'Is', 'cap' => '40', 'ver' => '31'),
array('livro' => 'Jo', 'cap' => '14', 'ver' => '27'),
array('livro' => 'Lc', 'cap' => '12', 'ver' => '15'),
array('livro' => 'Dt', 'cap' => '31', 'ver' => '6'),
array('livro' => 'Hb', 'cap' => '13', 'ver' => '6'),
array('livro' => 'Rm', 'cap' => '8', 'ver' => '28'),
array('livro' => 'Tg', 'cap' => '1', 'ver' => '5'),
array('livro' => 'Sl', 'cap' => '37', 'ver' => '4'),
array('livro' => 'Mt', 'cap' => '17', 'ver' => '20'),
array('livro' => 'Is', 'cap' => '41', 'ver' => '10'));
$palavra = ($palavraDia[mt_rand(0, (count($palavraDia)-1))]);
$app = new Biblia();
$mensagem = $app->buscaVersiculo($palavra['livro'], $palavra['cap'], $palavra['ver']);
$mensagem = $mensagem[0];
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
      <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
      <!-- Vertical 1 -->
      <ins class="adsbygoogle"
           style="display:block"
           data-ad-client="ca-pub-7091486462236476"
           data-ad-slot="8888783157"
           data-ad-format="auto"
           data-full-width-responsive="true"></ins>
      <script>
           (adsbygoogle = window.adsbygoogle || []).push({});
      </script>

      <section class="container">
        <h1 class="mt-5">Recomendados para você</h1>

          <iframe style="width:120px;height:240px;" marginwidth="0" marginheight="0" scrolling="no" frameborder="0" src="//ws-na.amazon-adsystem.com/widgets/q?ServiceVersion=20070822&OneJS=1&Operation=GetAdHtml&MarketPlace=BR&source=ac&ref=tf_til&ad_type=product_link&tracking_id=miqueias91-20&marketplace=amazon&amp;region=BR&placement=8531112893&asins=8531112893&linkId=640cdb06cbaa8afcdfc0e440a757ac56&show_border=false&link_opens_in_new_window=false&price_color=333333&title_color=0066c0&bg_color=ffffff">
          </iframe>

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
        <h1 class="mt-5">Palavra do Dia</h1>
        <div style="background: #7ED957;color: #072040;border-radius: 5px;margin: 1.2em 0;padding: 1em;-webkit-box-shadow: 0 0 2px rgba(0,0,0,.1),0 1px 5px rgba(0,0,0,.1);box-shadow: 0 0 2px rgba(0,0,0,.1),0 1px 5px rgba(0,0,0,.1);">          
          <p class="lead"><?=$mensagem['text']?></p>
          <p class="text-right"><?=strtoupper($palavra['livro']).' '.$palavra['cap'].':'.$palavra['ver']?></p>
        </div>
      </section>

      <section class="container">
        <h2 class="mt-2">Bíblias</h2>
        <div class="row">
          <div class="col-md-3">            
            <p class="lead"><a target="_BLANK" href="https://play.google.com/store/apps/details?id=br.com.innovatesoft.bibliaaa" versao="aa">Nova Almeida Atualizada</a></p>
          </div>
          <div class="col-md-3">            
            <p class="lead"><a target="_BLANK" href="https://play.google.com/store/apps/details?id=br.com.innovatesoft.abibliasagrada" versao="acf">Almeida Corrigida Fiel</a></p>
          </div>
          <div class="col-md-3">            
            <p class="lead"><a target="_BLANK" href="https://play.google.com/store/apps/details?id=br.com.innovatesoft.bibliaarc" versao="arc">Almeida Revista e Corrigida</a></p>
          </div>
          <div class="col-md-3">            
            <p class="lead"><a target="_BLANK" href="https://play.google.com/store/apps/details?id=br.com.innovatesoft.abibliasagrada" versao="en_kjv">King James Version EN</a></p>
          </div>
        </div>
        <div class="row">
          <div class="col-md-3">            
            <p class="lead"><a target="_BLANK" href="https://play.google.com/store/apps/details?id=br.com.innovatesoft.bibliantlh" versao="ntlh">Nova Tradução na Linguagem de Hoje</a></p>
          </div>
          <div class="col-md-3">            
            <p class="lead"><a target="_BLANK" href="https://play.google.com/store/apps/details?id=br.com.innovatesoft.abibliasagrada" versao="nvi">Nova Versão Internacional</a></p>
          </div>
          <div class="col-md-3">            
            <p class="lead"><a target="_BLANK" href="https://play.google.com/store/apps/details?id=br.com.innovatesoft.abibliasagrada" versao="pt_kjv">King James Version PT</a></p>
          </div>
          <div class="col-md-3">            
            <p class="lead"><a target="_BLANK" href="https://play.google.com/store/apps/details?id=br.com.innovatesoft.abibliasagrada" versao="viva">Nova Bíblia Viva</a></p>
          </div>
        </div>
      </section>

      <section class="container">
        <h2 class="mt-2">Antigo Testamento</h2>
        <div class="row">
          <div class="col-md-3"><p><a class="conteudo-biblia lead" href="./texto-livro.php?versao=aa&abrev=Gn&livro=Gênesis&cap=50">Gênesis</a></p></div>
          <div class="col-md-3"><p><a class="conteudo-biblia lead" href="./texto-livro.php?versao=aa&abrev=Ex&livro=Êxodo&cap=40">Êxodo</a></p></div>
          <div class="col-md-3"><p><a class="conteudo-biblia lead" href="./texto-livro.php?versao=aa&abrev=Lv&livro=Levítico&cap=27">Levítico</a></p></div>
          <div class="col-md-3"><p><a class="conteudo-biblia lead" href="./texto-livro.php?versao=aa&abrev=Nm&livro=Números&cap=36">Números</a></p></div>
        </div>
        <div class="row">          
          <div class="col-md-3"><p><a class="conteudo-biblia lead" href="./texto-livro.php?versao=aa&abrev=Dt&livro=Deuteronômio&cap=34">Deuteronômio</a></p></div>
          <div class="col-md-3"><p><a class="conteudo-biblia lead" href="./texto-livro.php?versao=aa&abrev=Js&livro=Josué&cap=24">Josué</a></p></div>
          <div class="col-md-3"><p><a class="conteudo-biblia lead" href="./texto-livro.php?versao=aa&abrev=Jz&livro=Juízes&cap=21">Juízes</a></p></div>
          <div class="col-md-3"><p><a class="conteudo-biblia lead" href="./texto-livro.php?versao=aa&abrev=Rt&livro=Rute&cap=4">Rute</a></p></div>
        </div>
        <div class="row">          
          <div class="col-md-3"><p><a class="conteudo-biblia lead" href="./texto-livro.php?versao=aa&abrev=1Sm&livro=1º Samuel&cap=31">1 Samuel</a></p></div>
          <div class="col-md-3"><p><a class="conteudo-biblia lead" href="./texto-livro.php?versao=aa&abrev=2Sm&livro=2º Samuel&cap=24">2 Samuel</a></p></div>
          <div class="col-md-3"><p><a class="conteudo-biblia lead" href="./texto-livro.php?versao=aa&abrev=1Rs&livro=1º Reis&cap=22">1 Reis</a></p></div>
          <div class="col-md-3"><p><a class="conteudo-biblia lead" href="./texto-livro.php?versao=aa&abrev=2Rs&livro=2º Reis&cap=25">2 Reis</a></p></div>
        </div>
        <div class="row">          
          <div class="col-md-3"><p><a class="conteudo-biblia lead" href="./texto-livro.php?versao=aa&abrev=1Cr&livro=1º Crônicas&cap=29">1 Crônicas</a></p></div>
          <div class="col-md-3"><p><a class="conteudo-biblia lead" href="./texto-livro.php?versao=aa&abrev=2Cr&livro=2º Crônicas&cap=36">2 Crônicas</a></p></div>
          <div class="col-md-3"><p><a class="conteudo-biblia lead" href="./texto-livro.php?versao=aa&abrev=Ed&livro=Esdras&cap=10">Esdras</a></p></div>
          <div class="col-md-3"><p><a class="conteudo-biblia lead" href="./texto-livro.php?versao=aa&abrev=Ne&livro=Neemias&cap=13">Neemias</a></p></div>
        </div>
        <div class="row">          
          <div class="col-md-3"><p><a class="conteudo-biblia lead" href="./texto-livro.php?versao=aa&abrev=Et&livro=Ester&cap=10">Ester</a></p></div>
          <div class="col-md-3"><p><a class="conteudo-biblia lead" href="./texto-livro.php?versao=aa&abrev=jó&livro=Jó&cap=42">Jó</a></p></div>
          <div class="col-md-3"><p><a class="conteudo-biblia lead" href="./texto-livro.php?versao=aa&abrev=Sl&livro=Salmos&cap=150">Salmos</a></p></div>
          <div class="col-md-3"><p><a class="conteudo-biblia lead" href="./texto-livro.php?versao=aa&abrev=Pv&livro=Provérbios&cap=31">Provérbios</a></p></div>
        </div>
        <div class="row">          
          <div class="col-md-3"><p><a class="conteudo-biblia lead" href="./texto-livro.php?versao=aa&abrev=Ec&livro=Eclesiastes&cap=12">Eclesiastes</a></p></div>
          <div class="col-md-3"><p><a class="conteudo-biblia lead" href="./texto-livro.php?versao=aa&abrev=Ct&livro=Cantares ou Cânticos dos Cânticos&cap=8">Cânticos</a></p></div>
          <div class="col-md-3"><p><a class="conteudo-biblia lead" href="./texto-livro.php?versao=aa&abrev=Is&livro=Isaías&cap=66">Isaías</a></p></div>
          <div class="col-md-3"><p><a class="conteudo-biblia lead" href="./texto-livro.php?versao=aa&abrev=Jr&livro=Jeremias&cap=52">Jeremias</a></p></div>
        </div>
        <div class="row">          
          <div class="col-md-3"><p><a class="conteudo-biblia lead" href="./texto-livro.php?versao=aa&abrev=Lm&livro=Lamentações de Jeremias&cap=5">Lamentações</a></p></div>
          <div class="col-md-3"><p><a class="conteudo-biblia lead" href="./texto-livro.php?versao=aa&abrev=Ez&livro=Ezequiel&cap=48">Ezequiel</a></p></div>
          <div class="col-md-3"><p><a class="conteudo-biblia lead" href="./texto-livro.php?versao=aa&abrev=Dn&livro=Daniel&cap=12">Daniel</a></p></div>
          <div class="col-md-3"><p><a class="conteudo-biblia lead" href="./texto-livro.php?versao=aa&abrev=Os&livro=Oséias&cap=14">Oséias</a></p></div>
        </div>
        <div class="row">          
          <div class="col-md-3"><p><a class="conteudo-biblia lead" href="./texto-livro.php?versao=aa&abrev=Jl&livro=Joel&cap=3">Joel</a></p></div>
          <div class="col-md-3"><p><a class="conteudo-biblia lead" href="./texto-livro.php?versao=aa&abrev=Am&livro=Amós&cap=9">Amós</a></p></div>
          <div class="col-md-3"><p><a class="conteudo-biblia lead" href="./texto-livro.php?versao=aa&abrev=Ob&livro=Obadias&cap=1">Obadias</a></p></div>
          <div class="col-md-3"><p><a class="conteudo-biblia lead" href="./texto-livro.php?versao=aa&abrev=Jn&livro=Jonas&cap=4">Jonas</a></p></div>
        </div>
        <div class="row">          
          <div class="col-md-3"><p><a class="conteudo-biblia lead" href="./texto-livro.php?versao=aa&abrev=Mq&livro=Miquéias&cap=7">Miquéias</a></p></div>
          <div class="col-md-3"><p><a class="conteudo-biblia lead" href="./texto-livro.php?versao=aa&abrev=Na&livro=Naum&cap=3">Naum</a></p></div>
          <div class="col-md-3"><p><a class="conteudo-biblia lead" href="./texto-livro.php?versao=aa&abrev=Hc&livro=Habacuque&cap=3">Habacuque</a></p></div>
          <div class="col-md-3"><p><a class="conteudo-biblia lead" href="./texto-livro.php?versao=aa&abrev=Sf&livro=Sofonias&cap=3">Sofonias</a></p></div>
        </div>
        <div class="row">
          <div class="col-md-3"><p><a class="conteudo-biblia lead" href="./texto-livro.php?versao=aa&abrev=Ag&livro=Ageu&cap=2">Ageu</a></p></div>
          <div class="col-md-3"><p><a class="conteudo-biblia lead" href="./texto-livro.php?versao=aa&abrev=Zc&livro=Zacarias&cap=14">Zacarias</a></p></div>
          <div class="col-md-3"><p><a class="conteudo-biblia lead" href="./texto-livro.php?versao=aa&abrev=Ml&livro=Malaquias&cap=4">Malaquias</a></p></div>
        </div>
      </section>

      <section class="container">
        <h2 class="mt-2">Novo Testamento</h2>
          <div class="row">
            <div class="col-md-3"><p><a class="conteudo-biblia lead" href="./texto-livro.php?versao=aa&abrev=Mt&livro=Mateus&cap=28">Mateus</a></p></div>
            <div class="col-md-3"><p><a class="conteudo-biblia lead" href="./texto-livro.php?versao=aa&abrev=Mc&livro=Marcos&cap=16">Marcos</a></p></div>
            <div class="col-md-3"><p><a class="conteudo-biblia lead" href="./texto-livro.php?versao=aa&abrev=Lc&livro=Lucas&cap=24">Lucas</a></p></div>
            <div class="col-md-3"><p><a class="conteudo-biblia lead" href="./texto-livro.php?versao=aa&abrev=Jo&livro=João&cap=21">João</a></p></div>
          </div>
          <div class="row">
            <div class="col-md-3"><p><a class="conteudo-biblia lead" href="./texto-livro.php?versao=aa&abrev=at&livro=Atos dos Apóstolos&cap=28">Atos</a></p></div>
            <div class="col-md-3"><p><a class="conteudo-biblia lead" href="./texto-livro.php?versao=aa&abrev=Rm&livro=Romanos&cap=16">Romanos</a></p></div>
            <div class="col-md-3"><p><a class="conteudo-biblia lead" href="./texto-livro.php?versao=aa&abrev=1Co&livro=1ª Coríntios&cap=16">1 Coríntios</a></p></div>
            <div class="col-md-3"><p><a class="conteudo-biblia lead" href="./texto-livro.php?versao=aa&abrev=2Co&livro=2ª Coríntios&cap=13">2 Coríntios</a></p></div>
          </div>
          <div class="row">            
          <div class="col-md-3"><p><a class="conteudo-biblia lead" href="./texto-livro.php?versao=aa&abrev=Gl&livro=Gálatas&cap=6">Gálatas</a></p></div>
            <div class="col-md-3"><p><a class="conteudo-biblia lead" href="./texto-livro.php?versao=aa&abrev=Ef&livro=Efésios&cap=6">Efésios</a></p></div>
            <div class="col-md-3"><p><a class="conteudo-biblia lead" href="./texto-livro.php?versao=aa&abrev=Fp&livro=Filipenses&cap=4">Filipenses</a></p></div>
            <div class="col-md-3"><p><a class="conteudo-biblia lead" href="./texto-livro.php?versao=aa&abrev=Cl&livro=Colossenses&cap=4">Colossenses</a></p></div>
          </div>
          <div class="row">            
            <div class="col-md-3"><p><a class="conteudo-biblia lead" href="./texto-livro.php?versao=aa&abrev=1Ts&livro=1ª Tessalonicenses&cap=5">1 Tessalonicenses</a></p></div>
            <div class="col-md-3"><p><a class="conteudo-biblia lead" href="./texto-livro.php?versao=aa&abrev=2Ts&livro=2ª Tessalonicenses&cap=3">2 Tessalonicenses</a></p></div>
            <div class="col-md-3"><p><a class="conteudo-biblia lead" href="./texto-livro.php?versao=aa&abrev=1Tm&livro=1ª Timóteo&cap=6">1 Timóteo</a></p></div>
            <div class="col-md-3"><p><a class="conteudo-biblia lead" href="./texto-livro.php?versao=aa&abrev=2Tm&livro=2ª Timóteo&cap=4">2 Timóteo</a></p></div>
          </div>
          <div class="row">            
            <div class="col-md-3"><p><a class="conteudo-biblia lead" href="./texto-livro.php?versao=aa&abrev=Tt&livro=Tito&cap=3">Tito</a></p></div>
            <div class="col-md-3"><p><a class="conteudo-biblia lead" href="./texto-livro.php?versao=aa&abrev=Fm&livro=Filemom&cap=1">Filemom</a></p></div>
            <div class="col-md-3"><p><a class="conteudo-biblia lead" href="./texto-livro.php?versao=aa&abrev=Hb&livro=Hebreus&cap=13">Hebreus</a></p></div>
            <div class="col-md-3"><p><a class="conteudo-biblia lead" href="./texto-livro.php?versao=aa&abrev=Tg&livro=Tiago&cap=5">Tiago</a></p></div>
        </div>
        <div class="row">
          <div class="col-md-3"><p><a class="conteudo-biblia lead" href="./texto-livro.php?versao=aa&abrev=1Pe&livro=1ª Pedro&cap=5">1 Pedro</a></p></div>
          <div class="col-md-3"><p><a class="conteudo-biblia lead" href="./texto-livro.php?versao=aa&abrev=2Pe&livro=2ª Pedro&cap=3">2 Pedro</a></p></div>
          <div class="col-md-3"><p><a class="conteudo-biblia lead" href="./texto-livro.php?versao=aa&abrev=1Jo&livro=1ª João&cap=5">
          <div class="col-md-3"><p><a class="conteudo-biblia lead" href="./texto-livro.php?versao=aa&abrev=2Jo&livro=2ª João&cap=1">2 João</a></p></div>
        </div>
        <div class="row">            
          <div class="col-md-3"><p><a class="conteudo-biblia lead" href="./texto-livro.php?versao=aa&abrev=3Jo&livro=3ª João&cap=1">3 João</a></p></div>
          <div class="col-md-3"><p><a class="conteudo-biblia lead" href="./texto-livro.php?versao=aa&abrev=Jd&livro=Judas&cap=1">Judas</a></p></div>
          <div class="col-md-3"><p><a class="conteudo-biblia lead" href="./texto-livro.php?versao=aa&abrev=Ap&livro=Apocalipse&cap=22">Apocalipse</a></p></div>   
        </div>
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
    <script>
      // Your web app's Firebase configuration
      // For Firebase JS SDK v7.20.0 and later, measurementId is optional
      var firebaseConfig = {
        apiKey: "AIzaSyBcEM9D2fDvZKd1GRR6dB8S_tAV72ZfVXc",
        authDomain: "cristao-na-rede.firebaseapp.com",
        projectId: "cristao-na-rede",
        storageBucket: "cristao-na-rede.appspot.com",
        messagingSenderId: "356851272550",
        appId: "1:356851272550:web:d6f0571eed0c2eacccd6a7",
        measurementId: "G-FNSSN115D1"
      };
      // Initialize Firebase
      firebase.initializeApp(firebaseConfig);
      firebase.analytics();


      firebase.auth().signInAnonymously().catch(function(error) {
        var errorCode = error.code;
        var errorMessage = error.message;
        console.log(errorMessage)
      });

      
    </script>

  </body>
</html>
