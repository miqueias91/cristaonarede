$(document).ready(function(){
  var array_publicidade_img = new Array();
  var array_publicidade_texto = new Array();
  var array_publicidade_link = new Array();

  array_publicidade_img = ['publicidade_0.png'];
  array_publicidade_texto = ['Estude a Bíblia de uma forma Sistemática com 40 Disciplinas, em uma Plataforma online preparada para você com Vídeo Aulas, Apostilas em PDF Fóruns um Grupo Fechado, Certificado Online e Histórico Escolar, com um Professor com mais de 20 anos de Experiência Teológica.'];
  array_publicidade_link = ['https://go.hotmart.com/W48847673Y?dp=1'];

  var img = array_publicidade_img[0];
  var texto = array_publicidade_texto[0];
  var link = array_publicidade_link[0];
  $('.modal').modal();

  var html_publicidade = 
      '    <div class="modal-content">'+
      '      <div class="modal-body">'+
      '        <img src="./files/publicidades/'+img+'" alt="..." class="img-thumbnail">'+
      '        <p>'+texto+'</p>'+
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