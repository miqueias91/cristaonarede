<!doctype html>
<?php 
include_once "config/config.php";
include_once "$CLASS_PATH/class.Biblia.php";
include_once "$CLASS_PATH/class.System.php";
header("Access-Control-Allow-Origin: *");

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

    <meta name="google-signin-client_id" content="356851272550-hsgoobtsb8plg295ujoiovoau6dl2rfm.apps.googleusercontent.com">

    <title>Cristão na Rede · Conteúdo cristão de qualidade</title>
    <!-- Bootstrap core CSS -->
    <link href="./css/bootstrap.min.css" rel="stylesheet">
    <link href="./css/sticky-footer-navbar.css" rel="stylesheet">
    <link href="./css/jquery-ui-1.12.1.custom/jquery-ui.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./css/fontawesome-free-5.6.3-web/css/all.css">
    <link href="./css/style.css" rel="stylesheet">
    <link rel="shortcut icon" href="img/favicon.ico" />
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
        <div class="row">
          <div class="col-md-6">
            <h1 class="mt-5">Entrar</h1>
          </div>

          <div class="row">
            <div class="col">
                <div class="card-body text-center">
                  <input type="hidden" name="redirect_uri" id="redirect_uri" value="./entrar.php">
                  <br>
                  <input type="email" class="form-control email" name="email" id="email" placeholder="Seu E-mail">
                  <br>
                  <input type="password" class="form-control senha" name="senha" id="senha" placeholder="Sua Senha">
                  <br>
                  <!-- Código html do botão de login -->
                  <div id="gSignInWrapper">
                    <div id="customBtn" class="customGPlusSignIn">
                      <span class="icon"></span>
                      <span class="buttonText">Logar com o Google</span>
                    </div>
                  </div>
                  <div id="name"></div>

                  <hr/>
                  <a href="javascript:void(0);" onclick="signOut();">Deslogar</a>
                  <a>|</a>
                  <a href="javascript:void(0);" onclick="criarConta();">Criar Conta</a>
                </div>
            </div>
          </div>
      </section>

      <div id="publicidade" title="Publicidade"></div>

      <section class="container">
        <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
        <!-- Quadrado 1 -->
        <ins class="adsbygoogle"
             style="display:block"
             data-ad-client="ca-pub-7091486462236476"
             data-ad-slot="3860366497"
             data-ad-format="auto"
             data-full-width-responsive="true"></ins>
        <script>
             (adsbygoogle = window.adsbygoogle || []).push({});
        </script>
      </section>


    </main>

    <?php include_once './footer.php'; ?>

    <script src="./js/bootstrap.bundle.min.js"></script>
    <script src="./js/jquery-3.5.1.min.js"></script>  
    <script src="./css/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>

    <script src="https://www.gstatic.com/firebasejs/8.2.8/firebase-app.js"></script>
    <script src="https://www.gstatic.com/firebasejs/8.2.8/firebase-analytics.js"></script>
    <script src="https://www.gstatic.com/firebasejs/8.2.8/firebase-database.js"></script>
    <script src="https://www.gstatic.com/firebasejs/8.2.8/firebase-auth.js"></script>
    <script src="js/firebasejs.js"></script>
    <!-- Google api -->
    <script src="https://apis.google.com/js/api:client.js"></script>
    <script src="js/publicidade.js"></script>
    <script src="./js/jquery.mask.min.js"></script>
    <!-- função para iniciar o app -->

    <script>
      /**
        Função para iniciar o app
      */
      var startApp = function() {
        gapi.load('auth2', function(){
          auth2 = gapi.auth2.init({
            //nesse exemplo o client id também pode ser informado pela meta tag "google-signin-client_id"
            //caso ele não seja informado aqui
            client_id: '356851272550-hsgoobtsb8plg295ujoiovoau6dl2rfm.apps.googleusercontent.com',
            cookiepolicy: 'single_host_origin',
            scope: 'profile email' // solicitando acesso ao profile e ao e-mail do usuário
          });
          auth2.attachClickHandler(document.getElementById('customBtn'), {}, onSuccess, onFailure);
        });
      };

      /**
        Função executada quando o login é efetuado com sucesso
      */
      function onSuccess(googleUser) {
          // Recuperando o profile do usuário
          var profile = googleUser.getBasicProfile();
          console.log("ID: " + profile.getId()); // Don't send this directly to your server!
          console.log("Name: " + profile.getName());
          console.log("Image URL: " + profile.getImageUrl());
          console.log("Email: " + profile.getEmail());

          // Recuperando o token do usuario. Essa informação você necessita passar para seu backend
          var id_token = googleUser.getAuthResponse().id_token;
          // post com jQuery para enviar o token to usuário para o servidor
          console.log("ID Token: " + id_token);

          /*$.post( "https://www.innovatesoft.com.br/token",
          function(id_token) {
            console.log('sucesso')
          });*/
      }
      /**
        Função executada quando ocorrer falha no logn
      */
      function onFailure(error) {
          console.log(error);
      }

      /**
        Função de deslogar o usuario
      */
      function signOut() {
          var auth2 = gapi.auth2.getAuthInstance();
          auth2.signOut().then(function () {
              console.log('User signed out.');
          });
      }
    </script>
    <script>startApp();</script>

  </body>
</html>
