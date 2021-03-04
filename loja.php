<!doctype html>
<?php 
include_once "config/config.php";
include_once "$CLASS_PATH/class.Biblia.php";
include_once "$CLASS_PATH/class.System.php";
$sys = new System();
if (!$ambiente_desenvolvimento) {
  $sys->registraAcesso();
}

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
      .card {
        margin-top: 10px;
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
        <h1 class="mt-5">Loja</h1>
          <div class="row card">
            <div class="col-md-12 card-body">
              <a class="dropdown-item" target="_blank" href="https://www.amazon.com.br/gp/search?ie=UTF8&tag=miqueias91-20&linkCode=ur2&linkId=b4a22c34a9136fdaf41666ff22cb8e98&camp=1789&creative=9325&index=books&keywords=Bíblias">Bíblias
              <span style="float:right"><i class="fas fa-external-link-alt"></i></span></a>
            </div>
          </div>
          <div class="row card">
            <div class="col-md-12 card-body">
              <a class="dropdown-item" target="_blank" href="https://www.amazon.com.br/b?_encoding=UTF8&tag=miqueias91-20&linkCode=ur2&linkId=c44abde5141a577b7d673475ea32d5ea&camp=1789&creative=9325&node=7874675011">Livros
              <span style="float:right"><i class="fas fa-external-link-alt"></i></span></a>
            </div>
          </div>
          <div class="row card">
            <div class="col-md-12 card-body">
              <a class="dropdown-item" target="_blank" href="https://www.amazon.com.br/gp/search?ie=UTF8&tag=miqueias91-20&linkCode=ur2&linkId=84d230189a204705d2f30c6fc64b7ddd&camp=1789&creative=9325&index=books&keywords=catolicismo">Catolicismo
              <span style="float:right"><i class="fas fa-external-link-alt"></i></span></a>
          </div>
          </div>
          <div class="row card">
            <div class="col-md-12 card-body">
              <a class="dropdown-item" target="_blank" href="https://www.amazon.com.br/gp/search?ie=UTF8&tag=miqueias91-20&linkCode=ur2&linkId=512b015aee30b1121e35104a56b228d9&camp=1789&creative=9325&index=books&keywords=teologia">Teologia
              <span style="float:right"><i class="fas fa-external-link-alt"></i></span></a>
            </div>
          </div>
          <div class="row card">
            <div class="col-md-12 card-body">
              <a class="dropdown-item" target="_blank" href="https://www.amazon.com.br/gp/search?ie=UTF8&tag=miqueias91-20&linkCode=ur2&linkId=8117835ddda0f85bb6fa19c6b9703b18&camp=1789&creative=9325&index=books&keywords=vida cristã">Vida Cristã
              <span style="float:right"><i class="fas fa-external-link-alt"></i></span></a>
            </div>
          </div>
          <div class="row card">
            <div class="col-md-12 card-body">
              <a class="dropdown-item" target="_blank" href="https://www.amazon.com.br/gp/search?ie=UTF8&tag=miqueias91-20&linkCode=ur2&linkId=fb65ae0ccd0f38f3d5674752e76c826c&camp=1789&creative=9325&index=books&keywords=judaísmo">Judaísmo
              <span style="float:right"><i class="fas fa-external-link-alt"></i></span></a>
            </div>
          </div>
          <div class="row card">
            <div class="col-md-12 card-body">
              <a class="dropdown-item" target="_blank" href="https://www.amazon.com.br/gp/search?ie=UTF8&tag=miqueias91-20&linkCode=ur2&linkId=eb844acd3e92995861f8645e93ecd393&camp=1789&creative=9325&index=books&keywords=Estudos da Religião">Estudos da Religião
              <span style="float:right"><i class="fas fa-external-link-alt"></i></span></a>
            </div>
          </div>
      </section>


      <div class="modal" id="myModal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">Publicidade</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <img src="./files/publicidades/publicidade_0.png" alt="..." class="img-thumbnail">
              <p>Estude a Bíblia de uma forma Sistemática com 40 Disciplinas, em uma Plataforma online preparada para você com Vídeo Aulas, Apostilas em PDF Fóruns um Grupo Fechado, Certificado Online e Histórico Escolar, com um Professor com mais de 20 anos de Experiência Teológica.</p>
            </div>
            <div class="modal-footer">
              <a href="https://go.hotmart.com/W48847673Y" target="T_BLANK" class="btn btn-secondary acessar" data-dismiss="modal">Saber mais</a>
            </div>
          </div>
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

    <script src="https://www.gstatic.com/firebasejs/8.2.8/firebase-app.js"></script>
    <script src="https://www.gstatic.com/firebasejs/8.2.8/firebase-analytics.js"></script>
    <script src="https://www.gstatic.com/firebasejs/8.2.8/firebase-database.js"></script>
    <script src="https://www.gstatic.com/firebasejs/8.2.8/firebase-auth.js"></script>
    <script>
      $(function() {

        $('#myModal').modal('show');
        $( ".close" ).click(function() {
          $('#myModal').modal('hide');
        }); 

      });
    </script>

  </body>
</html>
