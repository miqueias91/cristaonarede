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
    <title>Cristão na Rede · Bem-Vindo a Rede</title>
    

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
    <header>
      <!-- Fixed navbar -->
      <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="./">CRISTÃO NA REDE</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav me-auto mb-2 mb-md-0">
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="./">Início</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Bíblia Sagrada
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item biblia" href="./biblia-sagrada.php?versao=aa" versao="aa">Bíblia Almeida</a></li>
                  <li><a class="dropdown-item biblia" href="./biblia-sagrada.php?versao=acf" versao="acf">Bíblia ACF</a></li>
                  <li><a class="dropdown-item biblia" href="./biblia-sagrada.php?versao=arc" versao="arc">Bíblia ARC</a></li>
                  <li><a class="dropdown-item biblia" href="./biblia-sagrada.php?versao=en_kjv" versao="kjv en">Bíblia KJV EN</a></li>
                  <li><a class="dropdown-item biblia" href="./biblia-sagrada.php?versao=pt_kjv" versao="kjv pt">Bíblia KJV PT</a></li>
                  <li><a class="dropdown-item biblia" href="./biblia-sagrada.php?versao=ntlh" versao="ntlh">Bíblia NTLH</a></li>
                  <li><a class="dropdown-item biblia" href="./biblia-sagrada.php?versao=nvi" versao="nvi">Bíblia NVI</a></li>
                  <li><a class="dropdown-item biblia" href="./biblia-sagrada.php?versao=viva" versao="viva">Bíblia Viva</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="./mensagem.php">Mensagem</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="./quiz-da-biblia.php">Quiz da Bíblia</a>
              </li>
            </ul>
            <form class="d-flex">
              <input class="form-control me-2" type="search" placeholder="Buscar..." aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Buscar</button>
            </form>
          </div>
        </div>
      </nav>
    </header>

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
            <p><a class="conteudo-biblia" href="./texto-livro.php?versao=<?=$versao?>&conteudo=Gn||Gênesis||50">Gênesis</a></p>
            <p><a class="conteudo-biblia" href="./texto-livro.php?versao=<?=$versao?>&conteudo=Ex||Êxodo||40">Êxodo</a></p>
            <p><a class="conteudo-biblia" href="./texto-livro.php?versao=<?=$versao?>&conteudo=Lv||Levítico||27">Levítico</a></p>
            <p><a class="conteudo-biblia" href="./texto-livro.php?versao=<?=$versao?>&conteudo=Nm||Números||36">Números</a></p>
            <p><a class="conteudo-biblia" href="./texto-livro.php?versao=<?=$versao?>&conteudo=Dt||Deuteronômio||34">Deuteronômio</a></p>

            <p class="lead">Históricos</p>
            <p><a class="conteudo-biblia" href="./texto-livro.php?versao=<?=$versao?>&conteudo=Js||Josué||24">Josué</a></p>
            <p><a class="conteudo-biblia" href="./texto-livro.php?versao=<?=$versao?>&conteudo=Jz||Juízes||21">Juízes</a></p>
            <p><a class="conteudo-biblia" href="./texto-livro.php?versao=<?=$versao?>&conteudo=Rt||Rute||4">Rute</a></p>
            <p><a class="conteudo-biblia" href="./texto-livro.php?versao=<?=$versao?>&conteudo=1Sm||1º Samuel||31">1 Samuel</a></p>
            <p><a class="conteudo-biblia" href="./texto-livro.php?versao=<?=$versao?>&conteudo=2Sm||2º Samuel||24">2 Samuel</a></p>
            <p><a class="conteudo-biblia" href="./texto-livro.php?versao=<?=$versao?>&conteudo=1Rs||1º Reis||22">1 Reis</a></p>
            <p><a class="conteudo-biblia" href="./texto-livro.php?versao=<?=$versao?>&conteudo=2Rs||2º Reis||25">2 Reis</a></p>
            <p><a class="conteudo-biblia" href="./texto-livro.php?versao=<?=$versao?>&conteudo=1Cr||1º Crônicas||29">1 Crônicas</a></p>
            <p><a class="conteudo-biblia" href="./texto-livro.php?versao=<?=$versao?>&conteudo=2Cr||2º Crônicas||36">2 Crônicas</a></p>
            <p><a class="conteudo-biblia" href="./texto-livro.php?versao=<?=$versao?>&conteudo=Ed||Esdras||10">Esdras</a></p>
            <p><a class="conteudo-biblia" href="./texto-livro.php?versao=<?=$versao?>&conteudo=Ne||Neemias||13">Neemias</a></p>
            <p><a class="conteudo-biblia" href="./texto-livro.php?versao=<?=$versao?>&conteudo=Et||Ester||10">Ester</a></p>

            <p class="lead">Poéticos</p>
            <p><a class="conteudo-biblia" href="./texto-livro.php?versao=<?=$versao?>&conteudo=jó||Jó||42">Jó</a></p>
            <p><a class="conteudo-biblia" href="./texto-livro.php?versao=<?=$versao?>&conteudo=Sl||Salmos||150">Salmos</a></p>
            <p><a class="conteudo-biblia" href="./texto-livro.php?versao=<?=$versao?>&conteudo=Pv||Provérbios||31">Provérbios</a></p>
            <p><a class="conteudo-biblia" href="./texto-livro.php?versao=<?=$versao?>&conteudo=Ec||Eclesiastes||12">Eclesiastes</a></p>
            <p><a class="conteudo-biblia" href="./texto-livro.php?versao=<?=$versao?>&conteudo=Ct||Cantares ou Cânticos dos Cânticos||8">Cânticos</a></p>

            <p class="lead">Profetas Maiores</p>
            <p><a class="conteudo-biblia" href="./texto-livro.php?versao=<?=$versao?>&conteudo=Is||Isaías||66">Isaías</a></p>
            <p><a class="conteudo-biblia" href="./texto-livro.php?versao=<?=$versao?>&conteudo=Jr||Jeremias||52">Jeremias</a></p>
            <p><a class="conteudo-biblia" href="./texto-livro.php?versao=<?=$versao?>&conteudo=Lm||Lamentações de Jeremias||5">Lamentações</a></p>
            <p><a class="conteudo-biblia" href="./texto-livro.php?versao=<?=$versao?>&conteudo=Ez||Ezequiel||48">Ezequiel</a></p>
            <p><a class="conteudo-biblia" href="./texto-livro.php?versao=<?=$versao?>&conteudo=Dn||Daniel||12">Daniel</a></p>

            <p class="lead">Profetas Menores</p>
            <p><a class="conteudo-biblia" href="./texto-livro.php?versao=<?=$versao?>&conteudo=Os||Oséias||14">Oséias</a></p>
            <p><a class="conteudo-biblia" href="./texto-livro.php?versao=<?=$versao?>&conteudo=Jl||Joel||3">Joel</a></p>
            <p><a class="conteudo-biblia" href="./texto-livro.php?versao=<?=$versao?>&conteudo=Am||Amós||9">Amós</a></p>
            <p><a class="conteudo-biblia" href="./texto-livro.php?versao=<?=$versao?>&conteudo=Ob||Obadias||1">Obadias</a></p>
            <p><a class="conteudo-biblia" href="./texto-livro.php?versao=<?=$versao?>&conteudo=Jn||Jonas||4">Jonas</a></p>
            <p><a class="conteudo-biblia" href="./texto-livro.php?versao=<?=$versao?>&conteudo=Mq||Miquéias||7">Miquéias</a></p>
            <p><a class="conteudo-biblia" href="./texto-livro.php?versao=<?=$versao?>&conteudo=Na||Naum||3">Naum</a></p>
            <p><a class="conteudo-biblia" href="./texto-livro.php?versao=<?=$versao?>&conteudo=Hc||Habacuque||3">Habacuque</a></p>
            <p><a class="conteudo-biblia" href="./texto-livro.php?versao=<?=$versao?>&conteudo=Sf||Sofonias||3">Sofonias</a></p>
            <p><a class="conteudo-biblia" href="./texto-livro.php?versao=<?=$versao?>&conteudo=Ag||Ageu||2">Ageu</a></p>
            <p><a class="conteudo-biblia" href="./texto-livro.php?versao=<?=$versao?>&conteudo=Zc||Zacarias||14">Zacarias</a></p>
            <p><a class="conteudo-biblia" href="./texto-livro.php?versao=<?=$versao?>&conteudo=Ml||Malaquias||4">Malaquias</a></p>
          </div>

          <div class="col-md-6">
            <h5 class="mt-5">Novo Testamento</h5>
            <p class="lead">Os Evangelhos</p>
            <p><a class="conteudo-biblia" href="./texto-livro.php?versao=<?=$versao?>&conteudo=Mt||Mateus||28">Mateus</a></p>
            <p><a class="conteudo-biblia" href="./texto-livro.php?versao=<?=$versao?>&conteudo=Mc||Marcos||16">Marcos</a></p>
            <p><a class="conteudo-biblia" href="./texto-livro.php?versao=<?=$versao?>&conteudo=Lc||Lucas||24">Lucas</a></p>
            <p><a class="conteudo-biblia" href="./texto-livro.php?versao=<?=$versao?>&conteudo=Jo||João||21">João</a></p>

            <p class="lead">Atos</p>
            <p><a class="conteudo-biblia" href="./texto-livro.php?versao=<?=$versao?>&conteudo=at||Atos dos Apóstolos||28">Atos</a></p>

            <p class="lead">Epístolas Paulinas</p>
            <p><a class="conteudo-biblia" href="./texto-livro.php?versao=<?=$versao?>&conteudo=Rm||Romanos||16">Romanos</a></p>
            <p><a class="conteudo-biblia" href="./texto-livro.php?versao=<?=$versao?>&conteudo=1Co||1ª Coríntios||16">1 Coríntios</a></p>
            <p><a class="conteudo-biblia" href="./texto-livro.php?versao=<?=$versao?>&conteudo=2Co||2ª Coríntios||13">2 Coríntios</a></p>
            <p><a class="conteudo-biblia" href="./texto-livro.php?versao=<?=$versao?>&conteudo=Gl||Gálatas||6">Gálatas</a></p>
            <p><a class="conteudo-biblia" href="./texto-livro.php?versao=<?=$versao?>&conteudo=Ef||Efésios||6">Efésios</a></p>
            <p><a class="conteudo-biblia" href="./texto-livro.php?versao=<?=$versao?>&conteudo=Fp||Filipenses||4">Filipenses</a></p>
            <p><a class="conteudo-biblia" href="./texto-livro.php?versao=<?=$versao?>&conteudo=Cl||Colossenses||4">Colossenses</a></p>
            <p><a class="conteudo-biblia" href="./texto-livro.php?versao=<?=$versao?>&conteudo=1Ts||1ª Tessalonicenses||5">1 Tessalonicenses</a></p>
            <p><a class="conteudo-biblia" href="./texto-livro.php?versao=<?=$versao?>&conteudo=2Ts||2ª Tessalonicenses||3">2 Tessalonicenses</a></p>
            <p><a class="conteudo-biblia" href="./texto-livro.php?versao=<?=$versao?>&conteudo=1Tm||1ª Timóteo||6">1 Timóteo</a></p>
            <p><a class="conteudo-biblia" href="./texto-livro.php?versao=<?=$versao?>&conteudo=2Tm||2ª Timóteo||4">2 Timóteo</a></p>
            <p><a class="conteudo-biblia" href="./texto-livro.php?versao=<?=$versao?>&conteudo=Tt||Tito||3">Tito</a></p>
            <p><a class="conteudo-biblia" href="./texto-livro.php?versao=<?=$versao?>&conteudo=Fm||Filemom||1">Filemom</a></p>
            <p><a class="conteudo-biblia" href="./texto-livro.php?versao=<?=$versao?>&conteudo=Hb||Hebreus||13">Hebreus</a></p>

            <p class="lead">Tiago</p>
            <p><a class="conteudo-biblia" href="./texto-livro.php?versao=<?=$versao?>&conteudo=Tg||Tiago||5">Tiago</a></p>

            <p class="lead">Pedro</p>
            <p><a class="conteudo-biblia" href="./texto-livro.php?versao=<?=$versao?>&conteudo=1Pe||1ª Pedro||5">1 Pedro</a></p>
            <p><a class="conteudo-biblia" href="./texto-livro.php?versao=<?=$versao?>&conteudo=2Pe||2ª Pedro||3">2 Pedro</a></p>

            <p class="lead">João</p>
            <p><a class="conteudo-biblia" href="./texto-livro.php?versao=<?=$versao?>&conteudo=1Jo||1ª João||5'})">
            <div class="left"></div>">1 João</a></p>
            <p><a class="conteudo-biblia" href="./texto-livro.php?versao=<?=$versao?>&conteudo=2Jo||2ª João||1">2 João</a></p>
            <p><a class="conteudo-biblia" href="./texto-livro.php?versao=<?=$versao?>&conteudo=3Jo||3ª João||1">3 João</a></p>

            <p class="lead">Judas</p>
            <p><a class="conteudo-biblia" href="./texto-livro.php?versao=<?=$versao?>&conteudo=Jd||Judas||1">Judas</a></p>

            <p class="lead">Apocalipse</p>
            <p><a class="conteudo-biblia" href="./texto-livro.php?versao=<?=$versao?>&conteudo=Ap||Apocalipse||22">Apocalipse</a></p>   
          </div>
        </div>
      </section>


    </main>

    <footer class="footer mt-auto py-3 bg-light">
      <div class="container">
        <span class="text-muted">Place sticky footer content here.</span>
      </div>
    </footer>
    <script src="./js/bootstrap.bundle.min.js"></script>
    <script src="./js/jquery-3.5.1.min.js"></script>  
    <script src="./css/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
    <script type="text/javascript">
      $(function() {



 
      });
    </script>
  </body>
</html>
