<?php 
$id = $_GET['id'] && is_numeric($_GET['id']) ? $_GET['id'] : 1;
?>
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
        <h1 class="mt-5 text-center" id="titulo-harpa"></h1>
      </section>

      <section class="container">
        <div class="col-md" id="conteudoHarpa">
          <br><br>
          <center>
            <img src='./img/carregando1.gif'>
          </center>
        </div>
        <div class="row" id="botoes" style="display: none;">
          <div class="col-md-6">
            <button id="ant-texto-livro" class="btn btn-outline-success" type="submit">Anterior</button>
            <button id="pro-texto-livro" class="btn btn-primary" type="submit">Próximo</button>
          </div>
        </div>
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
      var id = '<?=$id?>';
      var ultimo = 640;
      var atual = id;
      function buscaHinario(id) {
        $("#conteudoHarpa").html("<br><br><center><img src='./img/carregando1.gif'></center>");
        $("#botoes").hide();

        var selector = this;
        var texto = "";
        var titulo = "";

        $.ajax({
          type : "GET",
          url : "./files/harpa-crista/harpa.json",
          dataType : "json",
          success : function(data){
            $(selector).each(function(){
              var myBook = null;
              var obj = {
                id : id,
                text : ""
              };
           
              if (data) {
                for(i in data){
                  if(data[i].id == obj.id){
                      myBook = data[i];
                  }
                } 
                
                titulo = myBook['titulo'];
                id = myBook['id'];
                for (var i = 0; i < myBook['hinario'].length; i++) {
                  texto = myBook['hinario'][i];

                  if (texto.indexOf("*") != -1) {
                    obj.text += '<p class="lead"><b>'+texto+'</b></p>';
                  }
                  else{
                    obj.text += '<p class="lead">'+texto+'</p>';
                  }
                }
              }
              $("#titulo-harpa").html(id+' - '+titulo);
              $("#conteudoHarpa").html(''+obj.text);
              $("#botoes").fadeIn();
            });
          }
        });
      }
      $(function() {
        buscaHinario(id);

        $( "#ant-texto-livro" ).click(function() {
          if (atual <= 0) {
            atual = 1;
          }
          else {
            atual--;
          }

          if (atual > 0) {
            buscaHinario(atual);
          }
        });

        $( "#pro-texto-livro" ).click(function() {
          if (atual <= 0) {
            atual = 2;
          }
          else if (atual > ultimo) {
            atual = ultimo;
          }
          else {
            atual++;
          }

          if (atual <= ultimo) {
            buscaHinario(atual);
          }

          if (atual > ultimo) {
            atual = ultimo;
          }
        });
      });
    </script>
 
  </body>
</html>
