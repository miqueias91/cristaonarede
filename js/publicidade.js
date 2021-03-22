$(document).ready(function(){
  var array_publicidade_link = new Array();

  //array_publicidade_link = ['<a target="_blank"  href="https://www.amazon.com.br/gp/product/B00N28818A/ref=as_li_tl?ie=UTF8&camp=1789&creative=9325&creativeASIN=B00N28818A&linkCode=as2&tag=miqueias91-20&linkId=c105796f9ff912650a27839b2c72ecf4"><img border="0" src="//ws-na.amazon-adsystem.com/widgets/q?_encoding=UTF8&MarketPlace=BR&ASIN=B00N28818A&ServiceVersion=20070822&ID=AsinImage&WS=1&Format=_SL250_&tag=miqueias91-20" ></a>'];

if (array_publicidade_link.length > 0) {  
  var i = parseInt(Math.random() * (array_publicidade_link.length))

  var link = array_publicidade_link[i];
  $('.modal').modal();
  var html_publicidade = link;

  $("#publicidade").html(html_publicidade);
  $( "#publicidade" ).dialog({
    modal: true,
  });
}
});