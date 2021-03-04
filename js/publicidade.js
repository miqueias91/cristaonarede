$(document).ready(function(){
  var html_publicidade = 
      '<div class="modal" id="myModal" tabindex="-1" role="dialog">'+
      '  <div class="modal-dialog" role="document">'+
      '    <div class="modal-content">'+
      '      <div class="modal-header">'+
      '        <h5 class="modal-title">Publicidade</h5>'+
      '        <button type="button" class="close" data-dismiss="modal" aria-label="Close">'+
      '          <span aria-hidden="true">&times;</span>'+
      '        </button>'+
      '      </div>'+
      '      <div class="modal-body">'+
      '        <img src="./files/publicidades/publicidade_0.png" alt="..." class="img-thumbnail">'+
      '        <p>Estude a Bíblia de uma forma Sistemática com 40 Disciplinas, em uma Plataforma online preparada para você com Vídeo Aulas, Apostilas em PDF Fóruns um Grupo Fechado, Certificado Online e Histórico Escolar, com um Professor com mais de 20 anos de Experiência Teológica.</p>'+
      '      </div>'+
      '      <div class="modal-footer">'+
      '        <a href="https://go.hotmart.com/W48847673Y" target="T_BLANK" class="btn btn-secondary acessar" data-dismiss="modal">Saber mais</a>'+
      '      </div>'+
      '    </div>'+
      '  </div>'+
      '</div>';

  $("#publicidade").html(html_publicidade);
  $('#myModal').css('display','block');
  $( ".close" ).click(function() {
    $('#myModal').css('display','none');
  }); 

});