$(document).ready(function(){
  var array_publicidade_link = new Array();

  array_publicidade_link = [
      '<a target="_blank"  href="https://www.amazon.com.br/gp/product/8573258926/ref=as_li_tl?ie=UTF8&camp=1789&creative=9325&creativeASIN=8573258926&linkCode=as2&tag=miqueias91-20&linkId=f85e97e43c2dc3608bb5e997408dcce6"><img border="0" src="//ws-na.amazon-adsystem.com/widgets/q?_encoding=UTF8&MarketPlace=BR&ASIN=8573258926&ServiceVersion=20070822&ID=AsinImage&WS=1&Format=_SL250_&tag=miqueias91-20" ></a>'

  ];


  var i = parseInt(Math.random() * (array_publicidade_link.length))

  var link = array_publicidade_link[i];
  $('.modal').modal();
  var html_publicidade = link;

  $("#publicidade").html(html_publicidade);
  $( "#publicidade" ).dialog({
    modal: true,
  });
});