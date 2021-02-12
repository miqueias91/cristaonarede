<?php
$versao = !empty($_GET['versao']) ? $_GET['versao'] : 'nvi';
$abrev = !empty($_GET['abrev']) ? $_GET['abrev'] : 'Gn';
$livro = !empty($_GET['livro']) ? $_GET['livro'] : 'Gênesis';
$ultimocap = !empty($_GET['cap']) ? $_GET['cap'] : '50';
$capatual = !empty($capatual) ? $capatual : 1;

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
        <h1 class="mt-5 text-center"><span id="texto-livro-capitulo"></span></h1>
      </section>

      <section class="container">
        <div class="row" id="texto-livro">
          <center>
            <img src="./img/carregando1.gif">
          </center>
        </div>
        <div class="row" id="botoes" style="display: none;">
          <div class="col-md-6">
            <button id="ant-texto-livro" class="btn btn-outline-success" type="submit">Anterior</button>
            <button id="pro-texto-livro" class="btn btn-primary" type="submit">Próximo</button>
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

      var versao = '<?=$versao?>';
      var abrev = '<?=$abrev?>';
      var livro = '<?=$livro?>';
      var capatual = parseInt('<?=$capatual?>');
      var ultimocap = parseInt('<?=$ultimocap?>');

      function buscaTexto(versaoId,abrev,capatual, livro) {
        $("#texto-livro").html("<br><br><center><img src='./img/carregando1.gif'></center>");
        $("#botoes").hide();
        
        var versaoId = versaoId || "nvi";
        var selector = this;
        var texts = [];
        $.ajax({
          type : "GET",
          url : "biblia-sagrada/"+versaoId+".json",
          dataType : "json",
          success : function(data){
            $(selector).each(function(){
              var ref = abrev+""+capatual+".1-200";
              var reg = new RegExp('([0-9]?[a-zA-Záàâãéèêíïó]{2,3})([0-9]+)[\.|:]([0-9]+)-?([0-9]{1,3})?');
              var regex = reg.exec(ref);                    
              var myBook = null;
              var obj = {
                ref : ref,
                book : regex[1].toLowerCase(),
                chapter : parseInt(regex[2]),
                text : ""
              };

              for(i in data){
                if(data[i].abbrev == obj.book){
                    myBook = data[i];
                }
              }
              for (var i in myBook.chapters[obj.chapter - 1]) {
                if (myBook.chapters[obj.chapter - 1]) {
                  var texto = myBook.chapters[obj.chapter - 1][i];
                  obj.text += 
                    '<div id="txt_versiculo'+abrev+'_'+capatual+'_'+i+'_">'+
                      '<p style="text-align:justify;"  id="txt_versiculo'+abrev+'_'+capatual+'_'+i+'" class="txt_versiculo" abrev="'+abrev+'" num_capitulo="'+capatual+'" num_versiculo="'+i+'">'+
                        '<span style="font-weight:bold;">'+(parseInt(i)+1)+'</span>'+
                        '&nbsp;&nbsp;'+texto+ 
                      '</p>'+
                    '</div>';
                }
                $("#texto-livro-capitulo").html(livro+" "+capatual+' - Bíblia <?=strtoupper($versao)?>');
                $("#texto-livro").html(obj.text);
              }
              $("#botoes").fadeIn();
            });
          }
        });
      }
      $(function() {
        buscaTexto(versao, abrev, capatual, livro);

        $( "#ant-texto-livro" ).click(function() {
          if (capatual <= 0) {
            capatual = 1;
          }
          else {
            capatual--;
          }

          if (capatual > 0) {
            buscaTexto(versao, abrev, capatual, livro);
          }
        });

        $( "#pro-texto-livro" ).click(function() {
          if (capatual <= 0) {
            capatual = 2;
          }
          else if (capatual > ultimocap) {
            capatual = ultimocap;
          }
          else {
            capatual++;
          }

          if (capatual <= ultimocap) {
            buscaTexto(versao, abrev, capatual, livro);
          }

          if (capatual > ultimocap) {
            capatual = ultimocap;
          }
        });
      });
    </script>

  </body>
</html>
