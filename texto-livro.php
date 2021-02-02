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

//$textoCapitulo = $b->buscaTexto($versao, $livro, $capitulo, $nome);
//print_r($textoCapitulo);die;
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
        <h1 class="mt-5 text-center"><span id="texto-livro-capitulo"></span></h1>
      </section>

      <section class="container">
        <div class="row" id="texto-livro"></div>
      </section>


    </main>

    <?php include_once './footer.php'; ?>

    <script src="./js/bootstrap.bundle.min.js"></script>
    <script src="./js/jquery-3.5.1.min.js"></script>  
    <script src="./css/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
    <script type="text/javascript">

      function buscaTexto(versaoId,livro,capitulo, nome) {
        var versaoId = versaoId || "nvi";
        var selector = this;
        var texts = [];
        $.ajax({
          type : "GET",
          url : "biblia-sagrada/"+versaoId+".json",
          dataType : "json",
          success : function(data){
            $(selector).each(function(){
              var ref = livro+""+capitulo+".1-200";
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
                    '<div id="txt_versiculo'+livro+'_'+capitulo+'_'+i+'_">'+
                      '<p style="text-align:justify;"  id="txt_versiculo'+livro+'_'+capitulo+'_'+i+'" class="txt_versiculo" livro="'+livro+'" num_capitulo="'+capitulo+'" num_versiculo="'+i+'">'+
                        '<span style="font-weight:bold;">'+(parseInt(i)+1)+'</span>'+
                        '&nbsp;&nbsp;'+texto+ 
                      '</p>'+
                    '</div>';
                }
                $("#texto-livro-capitulo").html(nome+" "+capitulo+' - Bíblia <?=strtoupper($versao)?>');
                $("#texto-livro").html(obj.text)
              }
            });
          }
        });
      }
      $(function() {
        buscaTexto('<?=$versao?>','<?=$livro?>','<?=$capitulo?>', '<?=$nome?>');


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
