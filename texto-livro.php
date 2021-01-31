<?php
include_once './class/class.Biblia.php';

$versao = !empty($_GET['versao']) ? $_GET['versao'] : 'nvi';
$conteudo = !empty($_GET['conteudo']) ? $_GET['conteudo'] : 'Gn||Gênesis||50';
$capitulo = !empty($capitulo) ? $capitulo : 1;

$b = new Biblia();
$dados = explode("||", $conteudo);

$livro = $dados[0];
$nome = $dados[1];
$ultimoCap = $dados[2];

$textoCapitulo = $b->buscaTexto($versao, $livro, $capitulo, $nome);
print_r($textoCapitulo);
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



        $( ".conteudo-biblia" ).click(function() {
          var conteudo = $(this).attr('conteudo');
          console.log(conteudo);
          console.log('<?=$versao?>');
          ///var dados = this.data.title.split('||'); 

          //var ultimoCap = dados[2];
          //app.registraAcesso('ntlh/textoLivro.html?livro='+dados[0]+'&cap='+dados[3]);
          //var versaoId = window.localStorage.getItem('versao-biblia');

          //app.buscaTexto(versaoId,dados[0],dados[3], dados[1]);

          

          /*$.ajax({
            method: "GET",
            url: "biblia-sagrada/"+versao+".json"
          })
          .done(function(msg) {
            console.log(msg);
          });*/

          $( "#dialog" ).dialog({
            modal: true
          });
        });
      });
    </script>
  </body>
</html>
