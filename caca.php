<!doctype html>
<?php 
include_once "config/config.php";

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
    <link rel="stylesheet" type="text/css" href="./css/normalize.css">
    <link href="./css/caca.css" rel="stylesheet">
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
        <h1 class="mt-5">Caça Palavra</h1>
        <div class="row">
          <div class="col-md-6">            
            <div id='puzzle'></div>
          </div>
          <div class="col-md-6">            
            <div id='words'></div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">            
            <button id="solve" class="btn btn-outline-success">Resolver Caça Palavra</button>
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
    <script src="./js/wordfind.js"></script>
    <script type="text/javascript" src="./js/wordfindgame.js"></script>
    <script type="text/javascript">
      
      $(function() {
   
        var words = [
          'Davi',
          'Ester',
          'Jacó',
          'Jesus',
          'Jonas',
          'José',
          'Maria',
          'Paulo',
          'Rute',
          'Salomão',
          'Sansão',
          'Saul', 
          'Tabita',
          'Zaqueu',
          'Jeová',
          'Escravidão',
          'Salvação',
          'Servo',
          'Justiça',
          'Adoração',
          'Fraternal',
          'Humano',
          'Monte',
          'Vale',
          'Deserto',
          'Varão',
          'Varoa',
          'Menina',
          'Deus',
          'Gênesis',
          'Êxodo',
          'Levítico',
          'Números',
          'Deuteronômio',
          'Josué',
          'Juízes',
          'Rute',
          'Samuel',
          'Reis' , 
          'Crônicas',
          'Esdras',
          'Neemias',
          'Jó',
          'áreassocial',
          'reutilização',
          'reciclagem',
          'suprimentos',
          'departamento',
          'nicho',
          'Governos',
          'Sociedade',
          'metas',
          'MeioAmbiente',
          'Qualidade',
          'entradas',
          'operações',
          'Processos',
          'evolução',
          'Tratamento',
          'prevenção',
          'disposição',
          'mercadorias',
          'Ecológica',
          'Cultural',
          'Stakeholders',
          'benefícios',
          'permanência',
          'naturais',
          'educação',
          'administração',
          'conservar',
          'favorecer',
          'desenvolvimento',
          'experiências',
          'conhecimento',
          'cada',
          'individuo',
          'práticas',
          'manutenção',
          'responsabilidade',
          'sobrevivência',
          'dependente',
          'conservação',
          'florestas',
          'matas',
          'rios',
          'lagos',
          'oceanos',
          'sacolas',
          'resíduos',
          'lugares',
          'lixo',
          'desperdício',
          'suporte',
          'atitude',
          'prédio'
        ];

        // start a word find game
        var gamePuzzle = wordfindgame.create(words, '#puzzle', '#words');

        $('#solve').click( function() {
          wordfindgame.solve(gamePuzzle, words);
        });

        // create just a puzzle, without filling in the blanks and print to console
        var puzzle = wordfind.newPuzzle( words, {
          height: 20,
          width: 20
        });
        wordfind.print(puzzle);
      });
    </script>
  </body>
</html>
