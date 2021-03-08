$(document).ready(function(){
  var array_publicidade_img = new Array();
  var array_publicidade_texto = new Array();
  var array_publicidade_link = new Array();

  array_publicidade_img = [
    'publicidade_0.png',
    'publicidade_1.png',
    'publicidade_2.png',
    'publicidade_3.png',
    'publicidade_4.jpeg'
  ];

  array_publicidade_texto = [
    'Estude a Bíblia de uma forma Sistemática com 40 Disciplinas, em uma Plataforma online preparada para você com Vídeo Aulas, Apostilas em PDF Fóruns um Grupo Fechado, Certificado Online e Histórico Escolar, com um Professor com mais de 20 anos de Experiência Teológica.',
    'Um Guia entusiasmante sobre como salvar um casamento que se encontra à beira de um divórcio eminente. O método apresentado nesse guia é infálivel, e vai ajudar você nas questões que fundamentalmente deve ser resolvidas num casamento, como as formas de comunicação, entendimento e o perdão.',
    'Curso de Violão com Vídeo Aulas. Método desenvolvido para você que deseja iniciar na arte de tocar violão de um jeito fácil e interativo!',
    'Nosso CURSO DE INGLÊS PARA INICIANTES a um clique de distância. As aulas de maior reconhecimento do YouTube (+ 2 milhões e meio de visualizações) pela riqueza de detalhes e fácil compreensão agora viraram curso.',
    'Dicas claras e objetivas pra você cuidar das suas suculentas. As suculentas são plantas originais de climas áridos e quentes. Porém, precisamos tomar cuidado ao tentar cultivá-las em casa devido à diferença que o nosso ambiente apresenta em relação ao seu habitat natural.'
  ];

  array_publicidade_link = [
    'https://go.hotmart.com/W48847673Y?dp=1',
    'https://go.hotmart.com/S48847734O?dp=1',
    'https://go.hotmart.com/L48847857P',
    'https://go.hotmart.com/R48847867R?dp=1',
    'https://go.hotmart.com/L48847846A?dp=1'
  ];

  var i = parseInt(Math.random() * (array_publicidade_img.length))

  var img = array_publicidade_img[i];
  var texto = array_publicidade_texto[i];
  var link = array_publicidade_link[i];
  $('.modal').modal();

  var html_publicidade = 
      '    <div class="modal-content">'+
      '      <div class="modal-body">'+
      '        <img src="./files/publicidades/'+img+'" alt="..." class="img-thumbnail"><br>'+
      '        <br><p>'+texto+'</p>'+
      '      </div>'+
      '      <div class="modal-footer">'+
      '        <a href="'+link+'" target="T_BLANK" class="btn btn-secondary acessar" data-dismiss="modal">Saber mais</a>'+
      '      </div>'+
      '    </div>';

  $("#publicidade").html(html_publicidade);
  $( "#publicidade" ).dialog({
    modal: true,
  });
});