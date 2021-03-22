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
        <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
        <!-- Anuncio 2 -->
        <ins class="adsbygoogle"
             style="display:block"
             data-ad-client="ca-pub-7091486462236476"
             data-ad-slot="3860366497"
             data-ad-format="auto"
             data-full-width-responsive="true"></ins>
        <script>
             (adsbygoogle = window.adsbygoogle || []).push({});
        </script>
        <div id="jogar" style="display: none;">          
          <div class="row">
            <div class="col-md-8">
              <p class="lead">Tabuleiro</p>      
              <div id='puzzle'></div>
            </div>
            <div class="col-md-4">
              <p class="lead">Palavras</p>
              <div id='words'></div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">            
              <button id="solve" class="btn btn-outline-success">Resolver</button>
              <button id="novoJogo" class="btn btn-outline-success">Novo Jogo</button>
            </div>
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
    <script src="./js/wordfindgame.js"></script>
    <script type="text/javascript">   
      function shuffle(array) {
        var m = array.length, t, i;
        // While there remain elements to shuffle…
        while (m) {
          // Pick a remaining element…
          i = Math.floor(Math.random() * m--);
          // And swap it with the current element.
          t = array[m];
          array[m] = array[i];
          array[i] = t;
        }
        return array;
      }
      
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
          'Sansão',
          'Saul', 
          'Tabita',
          'Zaqueu',
          'Jeová',
          'Servo',
          'Monte',
          'Vale',
          'Varão',
          'Varoa',
          'Menina',
          'Deus',
          'Êxodo',
          'Josué',
          'Juízes',
          'Rute',
          'Samuel',
          'Reis' , 
          'Esdras',
          'Jó',
          'Salmos',
          'Isaías',
          'Daniel',
          'Oséias',
          'Joel',
          'Amós',
          'Jonas',
          'Naum',
          'Ageu',
          'Mateus',
          'Marcos',
          'Lucas',
          'João',
          'Atos',
          'Tito',
          'Tiago',
          'Pedro',
          'Judas',
          'Sinai',
          'Páscoa',
          'Bíblia',
          'Cristão',
          'Harpa',
          'Filho',
          'Arca'
        ];
        var jogar = true;
        var quantidadePalavras = 20;
        var larguraTela = $(window).width();
        if (larguraTela < 500) {
          quantidadePalavras = 5;
          jogar = false;
        }

        if (jogar) {
          selectWorks = new Array();
          for (var i = 0; i < shuffle(words).length; i++) {
            if (i < quantidadePalavras) {
              selectWorks.push(words[i]);
            }
          }

          // start a word find game
          var gamePuzzle = wordfindgame.create(selectWorks, '#puzzle', '#words');

          // resolver
          $('#solve').click( function() {
            wordfindgame.solve(gamePuzzle, selectWorks);
          });

          var puzzle = wordfind.newPuzzle( selectWorks, {
            height: 20,
            width: 20
          });
          wordfind.print(puzzle);

          $( "#novoJogo" ).click(function() {
            location.href = 'caca.php';
          }); 
          $("#jogar").css('display','');    
        }
        else{
          console.log(1)
          $("#jogar").css('display','');
          $("#jogar").html('<p class="lead">Utilize um dispositivo com a tela maior.</p>');
        }
      });
    </script>
  </body>
</html>
