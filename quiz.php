<!doctype html>

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
        <h1 class="mt-5">Quiz da Bíblia</h1>
            <br>
            <div class="row">
              <div class="col-md-4" style="font-weight: bold;"><span id="acerto">ACERTOS: 0</span></div>
              <div class="col-md-4" style="font-weight: bold;"><span id="erro">ERROS: 0</span></div>
              <!--<div class="col-md-4" style="font-weight: bold;"><span id="tempo">00:00:00</span></div>-->
            </div>
            <div id="textoquiz"></div>
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
      //INICIALIZO VARIAVEIS
      var timeout = 5000;
      var num_perg = 0;
      var acertos = 0;
      var erros = 0;
      var pulos = 3;
      var eliminar = 1;

      function buscaPergunta(num_pergunta) {
        $("#textoquiz").html('');
        var selector = this;
        //BUSCO AS PERGUNTAS
        var data = JSON.parse(localStorage.getItem('lista-quiz'));

        //VERIFICO SE EXISTE PERGUNTAS
        if (data) {      
          $(selector).each(function(){
            var pergunta = null;
            var respostas = null;
            var resposta = null;        
            var obj = {
              id : num_pergunta,
              opcoes : ""
            };
            var total_perguntas = 0;

            for(i in data){
              total_perguntas++
              //CARREGO A PERGUNTA ATUAL
              if(i == obj.id){
                pergunta = data[i]['pergunta'];
                respostas = data[i]['opcoes'];
                resposta = data[i]['resposta'];
                //PASSO A PERGUNTA ATUAL PARA UMA VARIAVEL
                var perguntaAtual = data[i];
              }
            }

            if (pergunta) {            
              obj.opcoes = '<br><p class="lead"><b>'+(num_pergunta+1)+' - '+pergunta+'</b></p>';
              for (var i in respostas) {
                if (respostas[i]) {
                  obj.opcoes += 
                  '<div style="font-size: 20px;">'+
                  " <input type='radio' name='quiz_' class='quiz_' id='quiz"+i+"' value='"+respostas[i]+"'/>"+
                  ' <label for="quiz'+i+'" class="center">'+respostas[i]+'</label>'+
                  '</div>';
                }
              }
            }
                      
            obj.opcoes +=
            '<div style="display: none;">'+
            ' <input type="radio" class="quiz_" id="quiz_" value=""/>'+
            ' <label for="quiz_" class="center">nenhum</label>'+
            '</div>';

            obj.opcoes +=
            '<div class="row" style="margin-top: 20px">'+
            ' <div class="col-md-3" style="margin:20px 0">'+
            '  <button class="btn btn-outline-success responder">RESPONDER</button>'+
            ' </div>'+
            ' <div class="col-md-3" style="margin:20px 0">'+
            '  <button class="btn btn-primary pular">PULAR ('+pulos+'X)</button>'+
            ' </div>'+
            ' <div class="col-md-3" style="margin:20px 0">'+
            '  <button class="btn btn-primary eliminar">ELIMINAR ('+eliminar+'X)</button>'+
            ' </div>'+
            ' <div class="col-md-3" style="margin:20px 0">'+
            '  <button class="btn btn-primary finalizar">FINALIZAR</button>'+
            ' </div>'+
            '</div>';

            $("#textoquiz").html(obj.opcoes);

            var currentId = 'quiz_';
            var currentValue = '';
            var radios = document.querySelectorAll('.quiz_');

            for (var i = 0; i < radios.length; i++) {
              var radio = radios[i];
              radio.addEventListener('change', function (event) {
                if (event.target.value !== currentValue) {
                    document.getElementById(currentId).checked = false;
                    currentId = event.target.id;
                    currentValue = event.target.value;
                }
              })
            }

            //BOTAO RESPONDER
            $( ".responder" ).click(function() {
              //VERIFICO SE SELECIONOU ALGUMA OPCAO
              if (currentValue != '') {
                //SE A RESPOSTA ESTIVER ERRADA
                if (currentValue != resposta) {
                  //PEGO A LISTA DE PERGUNTAS
                  var data = JSON.parse(localStorage.getItem('lista-quiz'));
                  //ACRESCENTO AO FINAL A PERGUNTA QUE O JOGADOR ERROU
                  data.push(perguntaAtual);
                  //SALVO A NOVA LISTA
                  localStorage.setItem("lista-quiz", JSON.stringify(data));
                  //INCREMENTO A QUANTIDADE DE PERGUNTAS
                  total_perguntas++;             
                  //INCREMENTO OS ERROS
                  erros++
                  //EXIBO A MENSAGEM DE ERRO 
                  alert("Resposta errada!\n\nA resposta correta é: "+resposta);
                  //INCREMENTO PARA A PROXIMA PERGUNTA
                  num_perg++;
                  //VERIFICO SE AINDA NAO CHEGOU AO FINAL DAS PERGUNTAS
                  if (num_perg < total_perguntas) {
                    //BUSCO A PROXIMA PERGUNTA
                    buscaPergunta(num_perg);
                  }
                  else{
                    alert('Parabêns! Você chegou ao fim do quiz.\n\nSua pontuação: '+acertos);
                    location.href = 'quiz-da-biblia.php';
                  }
                }
                //RESPOSTA CERTA
                else{
                  acertos++
                  alert('Resposta certa!');
                  num_perg++;
                  if (num_perg < total_perguntas) {
                    buscaPergunta(num_perg);
                  }
                  else{
                    alert('Parabêns! Você chegou ao fim do quiz.\n\nSua pontuação: '+acertos);
                    location.href = 'quiz-da-biblia.php';
                  }
                }
                currentId = 'quiz_';
                currentValue = '';
                $('.quiz_').prop('checked', false);
                $('#acerto').html('Acertos: '+acertos);
                $('#erro').html('Erros: '+erros);
              }
              else{
                alert('Escolha uma opção!');
              }
            });

            //BOTAO PULAR
            $( ".pular" ).click(function() {
              //VERIFICO SE PODE PULAR
              if (pulos > 0) {
                //PEGO A LISTA DE PERGUNTAS
                var data = JSON.parse(localStorage.getItem('lista-quiz'));
                //ACRESCENTO AO FINAL A PERGUNTA QUE O JOGADOR PULOU
                data.push(perguntaAtual);
                //SALVO A NOVA LISTA
                localStorage.setItem("lista-quiz", JSON.stringify(data));
                //INCREMENTO A QUANTIDADE DE PERGUNTAS
                total_perguntas++;

                currentId = 'quiz_';
                currentValue = '';
                num_perg++;
                pulos--;

                if (num_perg < total_perguntas) {
                  buscaPergunta(num_perg);
                }
                else{
                  alert('Parabêns! Você chegou ao fim do quiz.\n\nSua pontuação: '+acertos);
                  location.href = 'quiz-da-biblia.php';
                }
              }
              else{
                alert('Você não pode pular mais nenhuma pergunta.');
              }
            });

            //BOTAO ELIMINAR
            $( ".eliminar" ).click(function() {
              //VERIFICO SE PODE ELIMINAR UMA PERGUNTA
              if (eliminar > 0) {
                //INCREMENTO 1 ACERTO
                acertos++
                $('#acerto').html('Acertos: '+acertos);
                currentId = 'quiz_';
                currentValue = '';
                num_perg++;
                eliminar--;

                if (num_perg < total_perguntas) {
                  buscaPergunta(num_perg);
                }
                else{
                  alert('Parabêns! Você chegou ao fim do quiz.\n\nSua pontuação: '+acertos);
                  location.href = 'quiz-da-biblia.php';
                }
              }
              else{
                alert('Você não pode eliminar mais nenhuma pergunta.');
              }
            });

            $( ".finalizar" ).click(function() {
              if (acertos > 0) {
                lista_score.push(acertos);
                localStorage.setItem("lista-score", JSON.stringify(lista_score));              
              }
              alert('Sua pontuação: '+acertos);
              location.href = 'quiz-da-biblia.php';
            });
          });        
        }
        else{
            opcoes ='<br><p class="lead">Atualize a página para carregar as perguntas!</p>';
          $("#textoquiz").html(opcoes);
        }
      }

      function shuffleArray(array) {
        for (var i = array.length - 1; i > 0; i--) {
          var j = Math.floor(Math.random() * (i + 1));
          var temp = array[i];
          array[i] = array[j];
          array[j] = temp;
        }
        return array;
      }

      function carregaQuiz() {
        localStorage.removeItem('lista-quiz');
        var quiz = "quiz";
        $.ajax({
          type : "GET",
          url : "files/quiz-da-biblia/"+quiz+".json",
          dataType : "json",
          success : function(data){
            if (data) {
              localStorage.setItem("lista-quiz", JSON.stringify(shuffleArray(data)));              
            }
            buscaPergunta(num_perg);
          }
        });
      }

      $(function() {
        carregaQuiz();
        
      });
    </script>
  </body>
</html>
