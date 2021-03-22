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

      <section class="container">
        <h1 class="mt-5">Jogo da Memória</h1>
          <div id="game" class="center" style="margin: 0 auto;text-align: center;"></div>
          <br>
          <div class="row">
            <div class="col-md-6">            
              <button id="solve" class="btn btn-outline-success">Resolver</button>
              <button id="novoJogo" class="btn btn-outline-success">Novo Jogo</button>
              <a href="https://play.google.com/store/apps/details?id=com.phonegap.jumpblock" target="_BLANK" class="btn btn-primary">Baixar App <i class="fab fa-google-play"></i></a>
            </div>
          </div>
      </section>

      <section class="container">        
        <!-- Horizontal 1 -->
        <ins class="adsbygoogle"
        style="display:block"
        data-ad-client="ca-pub-7091486462236476"
        data-ad-slot="5148404228"
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
    <script type="text/javascript">
      var l, n, m, I_S, IsOver, MaxS, StartTime, EndTime, MaxX=4, MaxY=4, S_New=2;

      series = new Array(4);

      for (l=0; l < 4; l++){
        series[l]=new Array(2); 
      }

      simbolos = new Array(MaxX);

      for (n=0; n < MaxX; n++){
        simbolos[n]=new Array(MaxY); 
      } 

      IsSolved = new Array(MaxX);

      for (n=0; n < MaxX; n++){
        IsSolved[n]=new Array(MaxY); 
      } 

      PicNum = new Array(41);

      Pic = new Array(42);
      for (l=0; l < 42; l++){
        Pic[l] = new Image(); 
        Pic[l].src = "./files/memo/memo"+eval(l)+".jpeg"; 
      }

      function SetSeriesLen(ll){
        S_New=ll;
        Scramble();
      };

      function Clicked(nn, mm){
        if (Pressed(nn, mm)){
          RefreshScreen();
        }
      };

      function Show(){
        if (IsOver)
          alert('Tudo é certo.');
        else{ 
          for (n=0; n < MaxX; n++){
            for (m=0; m < MaxY; m++)
              IsSolved[n][m]=true;
          }
          RefreshScreen();
          IsOver=true;
        }
      };
  
      function Scramble(){
        var ll;
        var nn;
        var mm;
        MaxS=S_New;

        for (l=0; l<41; l++){
          PicNum[l]=l;
        }
        for (ll=0; ll<108; ll++){
          n=Math.round(Math.random()*100)%41;
          m=Math.round(Math.random()*100)%41;
          l=PicNum[n];
          PicNum[n]=PicNum[m];
          PicNum[m]=l;
        }
        l=0;
        for (n=0; n<MaxX; n++){ 
          for (m=0; m<MaxY; m++){ 
            IsSolved[n][m]=false;
            simbolos[n][m]=l % (MaxX*MaxY/MaxS);
            l++;
          }
        }
        for (l=0; l<1080; l++){ 
          n=Math.round(Math.random()*100)%MaxX;
          m=Math.round(Math.random()*100)%MaxY;
          nn=Math.round(Math.random()*100)%MaxX;
          mm=Math.round(Math.random()*100)%MaxY;
          ll=simbolos[n][m];
          simbolos[n][m]=simbolos[nn][mm];
          simbolos[nn][mm]=ll;
        }
        I_S=0;
        Moves=0;
        IsOver=false;
        RefreshScreen();  
        Now = new Date();
        StartTime = Now.getTime() / 1000;
      };

      function Pressed(nn, mm){ 
        if (IsOver){
          return(false);
        }
        if (IsSolved[nn][mm]){
          return(false);
        }
        for (l=0; l<I_S; l++){ 
          if ((series[l][0]==nn)&&(series[l][1]==mm))
            return(false);
        }
        l=simbolos[nn][mm];
        if (I_S==0){ 
          series[0][0]=nn;
          series[0][1]=mm;
          I_S=1;
        }
        else{ 
          if (simbolos[series[0][0]][series[0][1]]!=l){ 
            series[0][0]=nn;
            series[0][1]=mm;
            I_S=1;
          }
          else{ 
            series[I_S][0]=nn;
            series[I_S][1]=mm;
            I_S++;
          }
        }
        if (I_S==MaxS){ 
          for (l=0; l<I_S; l++){
            IsSolved[series[l][0]][series[l][1]]=true;
          }
          I_S=0;
          IsOver=true;
          for (n=0; n<MaxX; n++){ 
            for (m=0; m<MaxY; m++){ 
              if (! IsSolved[n][m])
                IsOver=false;
            }
          }
        }
        Moves++;
        return(true);
      };

      function RefreshScreen(){
        var ll;
        for (m=0; m < MaxY; m++){ 
          for (n=0; n < MaxX; n++) { 
            if (IsSolved[n][m]){
              l=PicNum[simbolos[n][m]]+1;
            }
            else {
              l=0;
            }
            for (ll=0; ll<I_S; ll++){ 
              if ((series[ll][0]==n)&&(series[ll][1]==m)){ 
                l=PicNum[simbolos[n][m]]+1;
              }
            }
            window.document.images[MaxX*m+n].src = Pic[l].src;
          }     
        }
        if (IsOver){ 
          Now = new Date();
          EndTime = Now.getTime() / 1000;
          ll=Math.floor(EndTime - StartTime);
          if (window.opener){ 
            if (window.opener.SetHighscores)
              window.opener.SetHighscores("Memória",S_New+" pics",ll,-1);
          }
         alert("Valeu, você resolveu este jogo com "+Moves+" lances em "+ll+" segundos!");
        }
      };

      
      $(function() {


        var tabuleiro = '';
        var width = "width='100%'";
        var style = ""
    
        for (m=0; m < MaxY; m++){
            tabuleiro += '<div class="row" style="margin-bottom: 13px;">';
            for (n=0; n < MaxX; n++){
                tabuleiro += "<div class='col-md-2'><img class='img-thumbnail' "+width+" style='"+style+"' src=\"./files/memo/memo0.jpeg\" border=0 onMouseDown=\"Clicked("+n+","+m+")\"></div>";
            }
            tabuleiro += '</div>';
        }
        width = '';
        $('#game').html(tabuleiro);
        Scramble();

        $( "#solve" ).click(function() {
          Show();
        });

        $( "#novoJogo" ).click(function() {
          Scramble();
        });

   
      });
    </script>
  </body>
</html>
