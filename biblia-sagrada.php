<?php
$versao = $_GET['versao'] ? $_GET['versao'] : 'nvi';
?>
<html lang="pt-br" class="h-100">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.79.0">
    <title>Cristão na Rede · Conteúdo cristão de qualidade</title>
    

    <!-- Bootstrap core CSS -->
    <link href="./css/bootstrap.min.css" rel="stylesheet">
    <link href="./css/sticky-footer-navbar.css" rel="stylesheet">
    <link href="./css/jquery-ui-1.12.1.custom/jquery-ui.min.css" rel="stylesheet">
    <link href="./css/style.css" rel="stylesheet">
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
        <h1 class="mt-5 text-center">Bíblia <?=strtoupper($versao)?></h1>
      </section>

      <section class="container">
        <div class="row">
          <div class="col-md-6">
            <h5 class="mt-5">Antigo Testamento</h5>

            <p class="lead">Pentateuco</p>
            <p><a class="conteudo-biblia" href="./texto-livro.php?versao=<?=$versao?>&abrev=Gn&livro=Gênesis&cap=50">Gênesis</a></p>
            <p><a class="conteudo-biblia" href="./texto-livro.php?versao=<?=$versao?>&abrev=Ex&livro=Êxodo&cap=40">Êxodo</a></p>
            <p><a class="conteudo-biblia" href="./texto-livro.php?versao=<?=$versao?>&abrev=Lv&livro=Levítico&cap=27">Levítico</a></p>
            <p><a class="conteudo-biblia" href="./texto-livro.php?versao=<?=$versao?>&abrev=Nm&livro=Números&cap=36">Números</a></p>
            <p><a class="conteudo-biblia" href="./texto-livro.php?versao=<?=$versao?>&abrev=Dt&livro=Deuteronômio&cap=34">Deuteronômio</a></p>

            <p class="lead">Históricos</p>
            <p><a class="conteudo-biblia" href="./texto-livro.php?versao=<?=$versao?>&abrev=Js&livro=Josué&cap=24">Josué</a></p>
            <p><a class="conteudo-biblia" href="./texto-livro.php?versao=<?=$versao?>&abrev=Jz&livro=Juízes&cap=21">Juízes</a></p>
            <p><a class="conteudo-biblia" href="./texto-livro.php?versao=<?=$versao?>&abrev=Rt&livro=Rute&cap=4">Rute</a></p>
            <p><a class="conteudo-biblia" href="./texto-livro.php?versao=<?=$versao?>&abrev=1Sm&livro=1º Samuel&cap=31">1 Samuel</a></p>
            <p><a class="conteudo-biblia" href="./texto-livro.php?versao=<?=$versao?>&abrev=2Sm&livro=2º Samuel&cap=24">2 Samuel</a></p>
            <p><a class="conteudo-biblia" href="./texto-livro.php?versao=<?=$versao?>&abrev=1Rs&livro=1º Reis&cap=22">1 Reis</a></p>
            <p><a class="conteudo-biblia" href="./texto-livro.php?versao=<?=$versao?>&abrev=2Rs&livro=2º Reis&cap=25">2 Reis</a></p>
            <p><a class="conteudo-biblia" href="./texto-livro.php?versao=<?=$versao?>&abrev=1Cr&livro=1º Crônicas&cap=29">1 Crônicas</a></p>
            <p><a class="conteudo-biblia" href="./texto-livro.php?versao=<?=$versao?>&abrev=2Cr&livro=2º Crônicas&cap=36">2 Crônicas</a></p>
            <p><a class="conteudo-biblia" href="./texto-livro.php?versao=<?=$versao?>&abrev=Ed&livro=Esdras&cap=10">Esdras</a></p>
            <p><a class="conteudo-biblia" href="./texto-livro.php?versao=<?=$versao?>&abrev=Ne&livro=Neemias&cap=13">Neemias</a></p>
            <p><a class="conteudo-biblia" href="./texto-livro.php?versao=<?=$versao?>&abrev=Et&livro=Ester&cap=10">Ester</a></p>

            <p class="lead">Poéticos</p>
            <p><a class="conteudo-biblia" href="./texto-livro.php?versao=<?=$versao?>&abrev=jó&livro=Jó&cap=42">Jó</a></p>
            <p><a class="conteudo-biblia" href="./texto-livro.php?versao=<?=$versao?>&abrev=Sl&livro=Salmos&cap=150">Salmos</a></p>
            <p><a class="conteudo-biblia" href="./texto-livro.php?versao=<?=$versao?>&abrev=Pv&livro=Provérbios&cap=31">Provérbios</a></p>
            <p><a class="conteudo-biblia" href="./texto-livro.php?versao=<?=$versao?>&abrev=Ec&livro=Eclesiastes&cap=12">Eclesiastes</a></p>
            <p><a class="conteudo-biblia" href="./texto-livro.php?versao=<?=$versao?>&abrev=Ct&livro=Cantares ou Cânticos dos Cânticos&cap=8">Cânticos</a></p>

            <p class="lead">Profetas Maiores</p>
            <p><a class="conteudo-biblia" href="./texto-livro.php?versao=<?=$versao?>&abrev=Is&livro=Isaías&cap=66">Isaías</a></p>
            <p><a class="conteudo-biblia" href="./texto-livro.php?versao=<?=$versao?>&abrev=Jr&livro=Jeremias&cap=52">Jeremias</a></p>
            <p><a class="conteudo-biblia" href="./texto-livro.php?versao=<?=$versao?>&abrev=Lm&livro=Lamentações de Jeremias&cap=5">Lamentações</a></p>
            <p><a class="conteudo-biblia" href="./texto-livro.php?versao=<?=$versao?>&abrev=Ez&livro=Ezequiel&cap=48">Ezequiel</a></p>
            <p><a class="conteudo-biblia" href="./texto-livro.php?versao=<?=$versao?>&abrev=Dn&livro=Daniel&cap=12">Daniel</a></p>

            <p class="lead">Profetas Menores</p>
            <p><a class="conteudo-biblia" href="./texto-livro.php?versao=<?=$versao?>&abrev=Os&livro=Oséias&cap=14">Oséias</a></p>
            <p><a class="conteudo-biblia" href="./texto-livro.php?versao=<?=$versao?>&abrev=Jl&livro=Joel&cap=3">Joel</a></p>
            <p><a class="conteudo-biblia" href="./texto-livro.php?versao=<?=$versao?>&abrev=Am&livro=Amós&cap=9">Amós</a></p>
            <p><a class="conteudo-biblia" href="./texto-livro.php?versao=<?=$versao?>&abrev=Ob&livro=Obadias&cap=1">Obadias</a></p>
            <p><a class="conteudo-biblia" href="./texto-livro.php?versao=<?=$versao?>&abrev=Jn&livro=Jonas&cap=4">Jonas</a></p>
            <p><a class="conteudo-biblia" href="./texto-livro.php?versao=<?=$versao?>&abrev=Mq&livro=Miquéias&cap=7">Miquéias</a></p>
            <p><a class="conteudo-biblia" href="./texto-livro.php?versao=<?=$versao?>&abrev=Na&livro=Naum&cap=3">Naum</a></p>
            <p><a class="conteudo-biblia" href="./texto-livro.php?versao=<?=$versao?>&abrev=Hc&livro=Habacuque&cap=3">Habacuque</a></p>
            <p><a class="conteudo-biblia" href="./texto-livro.php?versao=<?=$versao?>&abrev=Sf&livro=Sofonias&cap=3">Sofonias</a></p>
            <p><a class="conteudo-biblia" href="./texto-livro.php?versao=<?=$versao?>&abrev=Ag&livro=Ageu&cap=2">Ageu</a></p>
            <p><a class="conteudo-biblia" href="./texto-livro.php?versao=<?=$versao?>&abrev=Zc&livro=Zacarias&cap=14">Zacarias</a></p>
            <p><a class="conteudo-biblia" href="./texto-livro.php?versao=<?=$versao?>&abrev=Ml&livro=Malaquias&cap=4">Malaquias</a></p>
          </div>

          <div class="col-md-6">
            <h5 class="mt-5">Novo Testamento</h5>
            <p class="lead">Os Evangelhos</p>
            <p><a class="conteudo-biblia" href="./texto-livro.php?versao=<?=$versao?>&abrev=Mt&livro=Mateus&cap=28">Mateus</a></p>
            <p><a class="conteudo-biblia" href="./texto-livro.php?versao=<?=$versao?>&abrev=Mc&livro=Marcos&cap=16">Marcos</a></p>
            <p><a class="conteudo-biblia" href="./texto-livro.php?versao=<?=$versao?>&abrev=Lc&livro=Lucas&cap=24">Lucas</a></p>
            <p><a class="conteudo-biblia" href="./texto-livro.php?versao=<?=$versao?>&abrev=Jo&livro=João&cap=21">João</a></p>

            <p class="lead">Atos</p>
            <p><a class="conteudo-biblia" href="./texto-livro.php?versao=<?=$versao?>&abrev=at&livro=Atos dos Apóstolos&cap=28">Atos</a></p>

            <p class="lead">Epístolas Paulinas</p>
            <p><a class="conteudo-biblia" href="./texto-livro.php?versao=<?=$versao?>&abrev=Rm&livro=Romanos&cap=16">Romanos</a></p>
            <p><a class="conteudo-biblia" href="./texto-livro.php?versao=<?=$versao?>&abrev=1Co&livro=1ª Coríntios&cap=16">1 Coríntios</a></p>
            <p><a class="conteudo-biblia" href="./texto-livro.php?versao=<?=$versao?>&abrev=2Co&livro=2ª Coríntios&cap=13">2 Coríntios</a></p>
            <p><a class="conteudo-biblia" href="./texto-livro.php?versao=<?=$versao?>&abrev=Gl&livro=Gálatas&cap=6">Gálatas</a></p>
            <p><a class="conteudo-biblia" href="./texto-livro.php?versao=<?=$versao?>&abrev=Ef&livro=Efésios&cap=6">Efésios</a></p>
            <p><a class="conteudo-biblia" href="./texto-livro.php?versao=<?=$versao?>&abrev=Fp&livro=Filipenses&cap=4">Filipenses</a></p>
            <p><a class="conteudo-biblia" href="./texto-livro.php?versao=<?=$versao?>&abrev=Cl&livro=Colossenses&cap=4">Colossenses</a></p>
            <p><a class="conteudo-biblia" href="./texto-livro.php?versao=<?=$versao?>&abrev=1Ts&livro=1ª Tessalonicenses&cap=5">1 Tessalonicenses</a></p>
            <p><a class="conteudo-biblia" href="./texto-livro.php?versao=<?=$versao?>&abrev=2Ts&livro=2ª Tessalonicenses&cap=3">2 Tessalonicenses</a></p>
            <p><a class="conteudo-biblia" href="./texto-livro.php?versao=<?=$versao?>&abrev=1Tm&livro=1ª Timóteo&cap=6">1 Timóteo</a></p>
            <p><a class="conteudo-biblia" href="./texto-livro.php?versao=<?=$versao?>&abrev=2Tm&livro=2ª Timóteo&cap=4">2 Timóteo</a></p>
            <p><a class="conteudo-biblia" href="./texto-livro.php?versao=<?=$versao?>&abrev=Tt&livro=Tito&cap=3">Tito</a></p>
            <p><a class="conteudo-biblia" href="./texto-livro.php?versao=<?=$versao?>&abrev=Fm&livro=Filemom&cap=1">Filemom</a></p>
            <p><a class="conteudo-biblia" href="./texto-livro.php?versao=<?=$versao?>&abrev=Hb&livro=Hebreus&cap=13">Hebreus</a></p>

            <p class="lead">Tiago</p>
            <p><a class="conteudo-biblia" href="./texto-livro.php?versao=<?=$versao?>&abrev=Tg&livro=Tiago&cap=5">Tiago</a></p>

            <p class="lead">Pedro</p>
            <p><a class="conteudo-biblia" href="./texto-livro.php?versao=<?=$versao?>&abrev=1Pe&livro=1ª Pedro&cap=5">1 Pedro</a></p>
            <p><a class="conteudo-biblia" href="./texto-livro.php?versao=<?=$versao?>&abrev=2Pe&livro=2ª Pedro&cap=3">2 Pedro</a></p>

            <p class="lead">João</p>
            <p><a class="conteudo-biblia" href="./texto-livro.php?versao=<?=$versao?>&abrev=1Jo&livro=1ª João&cap=5">
            <div class="left"></div>">1 João</a></p>
            <p><a class="conteudo-biblia" href="./texto-livro.php?versao=<?=$versao?>&abrev=2Jo&livro=2ª João&cap=1">2 João</a></p>
            <p><a class="conteudo-biblia" href="./texto-livro.php?versao=<?=$versao?>&abrev=3Jo&livro=3ª João&cap=1">3 João</a></p>

            <p class="lead">Judas</p>
            <p><a class="conteudo-biblia" href="./texto-livro.php?versao=<?=$versao?>&abrev=Jd&livro=Judas&cap=1">Judas</a></p>

            <p class="lead">Apocalipse</p>
            <p><a class="conteudo-biblia" href="./texto-livro.php?versao=<?=$versao?>&abrev=Ap&livro=Apocalipse&cap=22">Apocalipse</a></p>   
          </div>
        </div>
      </section>


    </main>

    <?php include_once './footer.php'; ?>
    <script src="./js/bootstrap.bundle.min.js"></script>
    <script src="./js/jquery-3.5.1.min.js"></script>  
    <script src="./css/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
    <script type="text/javascript">
      $(function() {



 
      });
    </script>
  </body>
</html>
