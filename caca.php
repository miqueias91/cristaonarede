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
 <!--          <div class="col-md-2">
            <label for="quantidadePalavras">Quantidade de palavras</label>
            <select class="form-select form-select-lg" id="quantidadePalavras">
              <?php 
                for ($i=1; $i <= 10; $i++) { 
                  echo '<option value="'.$i.'0">'.$i.'0</option>';
                }
              ?>
            </select>          
          </div> -->
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
          'Salmos',
          'Provérbios',
          'Eclesiastes',
          'Cânticos',
          'Isaías',
          'Jeremias',
          'Lamentações',
          'Ezequiel',
          'Daniel',
          'Oséias',
          'Joel',
          'Amós',
          'Obadias',
          'Jonas',
          'Miquéias',
          'Naum',
          'Habacuque',
          'Sofonias',
          'Ageu',
          'Zacarias',
          'Malaquias',
          'Mateus',
          'Marcos',
          'Lucas',
          'João',
          'Atos',
          'Romanos',
          'Coríntios',
          'Gálatas',
          'Efésios',
          'Filipenses',
          'Colossenses',
          'Tessalonicenses',
          'Timóteo',
          'Tito',
          'Filemom',
          'Hebreus',
          'Tiago',
          'Pedro',
          'Judas',
          'Apocalipse',
          'Pentecostes',
          'Pentateuco',
          'Sinai',
          'Páscoa',
          'Epístolas',
          'Bíblia',
          'Cristão',
          'Harpa',
          'Dispensação',
          'Filho',
          'Pródigo',
          'Sagrado',
          'Arca',
          'Aliança',
          'Trombeta',
          'Revelação'
        ];

        var quantidadePalavras = 10;
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


        // $( "#quantidadePalavras" ).change(function() {
        //   var words = [
        //     'Davi',
        //     'Ester',
        //     'Jacó',
        //     'Jesus',
        //     'Jonas',
        //     'José',
        //     'Maria',
        //     'Paulo',
        //     'Rute',
        //     'Salomão',
        //     'Sansão',
        //     'Saul', 
        //     'Tabita',
        //     'Zaqueu',
        //     'Jeová',
        //     'Escravidão',
        //     'Salvação',
        //     'Servo',
        //     'Justiça',
        //     'Adoração',
        //     'Fraternal',
        //     'Humano',
        //     'Monte',
        //     'Vale',
        //     'Deserto',
        //     'Varão',
        //     'Varoa',
        //     'Menina',
        //     'Deus',
        //     'Gênesis',
        //     'Êxodo',
        //     'Levítico',
        //     'Números',
        //     'Deuteronômio',
        //     'Josué',
        //     'Juízes',
        //     'Rute',
        //     'Samuel',
        //     'Reis' , 
        //     'Crônicas',
        //     'Esdras',
        //     'Neemias',
        //     'Jó',
        //     'Salmos',
        //     'Provérbios',
        //     'Eclesiastes',
        //     'Cânticos',
        //     'Isaías',
        //     'Jeremias',
        //     'Lamentações',
        //     'Ezequiel',
        //     'Daniel',
        //     'Oséias',
        //     'Joel',
        //     'Amós',
        //     'Obadias',
        //     'Jonas',
        //     'Miquéias',
        //     'Naum',
        //     'Habacuque',
        //     'Sofonias',
        //     'Ageu',
        //     'Zacarias',
        //     'Malaquias',
        //     'Mateus',
        //     'Marcos',
        //     'Lucas',
        //     'João',
        //     'Atos',
        //     'Romanos',
        //     'Coríntios',
        //     'Gálatas',
        //     'Efésios',
        //     'Filipenses',
        //     'Colossenses',
        //     'Tessalonicenses',
        //     'Timóteo',
        //     'Tito',
        //     'Filemom',
        //     'Hebreus',
        //     'Tiago',
        //     'Pedro',
        //     'Judas',
        //     'Apocalipse',
        //     'Pentecostes',
        //     'Pentateuco',
        //     'Sinai',
        //     'Páscoa',
        //     'Epístolas',
        //     'Bíblia',
        //     'Cristão',
        //     'Harpa',
        //     'Dispensação',
        //     'Filho',
        //     'Pródigo',
        //     'Sagrado',
        //     'Arca',
        //     'Aliança',
        //     'Trombeta',
        //     'Revelação'
        //   ];

        //   var quantidadePalavras = $(this).val();
        //   selectWorks = new Array();
        //   for (var i = 0; i < shuffle(words).length; i++) {
        //     if (i < quantidadePalavras) {
        //       selectWorks.push(words[i]);
        //     }
        //   }
        //   console.log(selectWorks)
        //   $("#words ul").remove();
        //   // start a word find game
        //   var gamePuzzle = wordfindgame.create(selectWorks, '#puzzle', '#words');

        //   $('#solve').click( function() {
        //     wordfindgame.solve(gamePuzzle, selectWorks);
        //   });

        //   // create just a puzzle, without filling in the blanks and print to console
        //   var puzzle = wordfind.newPuzzle( selectWorks, {
        //     height: 20,
        //     width: 20
        //   });
        //   wordfind.print(puzzle);
        // });
      });
    </script>
  </body>
</html>
