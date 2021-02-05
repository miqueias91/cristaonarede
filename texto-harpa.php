<?php 
$id = $id && is_numeric($id) ? $id : 1;
?>
<!doctype html>
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
        <div class="col-md" id="conteudoHarpa">
          <br><br>
        </div>
      </section>
    </main>

    <?php include_once './footer.php'; ?>

    <script src="./js/bootstrap.bundle.min.js"></script>
    <script src="./js/jquery-3.5.1.min.js"></script>  
    <script src="./css/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
    <script type="text/javascript">
      var id = '<?=$id?>';

      function buscaHinario(id) {
        var selector = this;
        var texto = "";

        $.ajax({
          type : "GET",
          url : "js/harpa.json",
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
                for (var i = 0; i < myBook['hinario'].length; i++) {
                  texto = myBook['hinario'][i];
                  obj.text += '<p class="lead">'+texto+'</p>';
                }
              }
              $("#conteudoHarpa").html('<br><br>'+obj.text);
            });
          }
        });
      }
      $(function() {
        buscaHinario(id);
      });
    </script>
  </body>
</html>
