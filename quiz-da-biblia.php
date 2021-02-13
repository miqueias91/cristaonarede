<!doctype html>
<?php 
include_once "config/config.php";
include_once "$CLASS_PATH/class.Biblia.php";

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
        <h1 class="mt-5">Quiz da Bíblia</h1>
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
    <script type="text/javascript">
      $(function() {
        
      });
    </script>
  </body>
</html>
