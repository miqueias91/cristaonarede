$(document).ready(function(){
  var array_publicidade_link = new Array();

  array_publicidade_link = [
    //'<a target="_blank"  href="https://www.amazon.com.br/gp/product/8573258926/ref=as_li_tl?ie=UTF8&camp=1789&creative=9325&creativeASIN=8573258926&linkCode=as2&tag=miqueias91-20&linkId=f85e97e43c2dc3608bb5e997408dcce6"><img border="0" src="//ws-na.amazon-adsystem.com/widgets/q?_encoding=UTF8&MarketPlace=BR&ASIN=8573258926&ServiceVersion=20070822&ID=AsinImage&WS=1&Format=_SL250_&tag=miqueias91-20" ></a>',
    //'<a target="_blank"  href="https://www.amazon.com.br/gp/product/8527502704/ref=as_li_tl?ie=UTF8&camp=1789&creative=9325&creativeASIN=8527502704&linkCode=as2&tag=miqueias91-20&linkId=e3986a43b9d65ad1a40ae40be63e0d34"><img border="0" src="//ws-na.amazon-adsystem.com/widgets/q?_encoding=UTF8&MarketPlace=BR&ASIN=8527502704&ServiceVersion=20070822&ID=AsinImage&WS=1&Format=_SL250_&tag=miqueias91-20" ></a>',
    //'<a target="_blank"  href="https://www.amazon.com.br/gp/product/8577422399/ref=as_li_tl?ie=UTF8&camp=1789&creative=9325&creativeASIN=8577422399&linkCode=as2&tag=miqueias91-20&linkId=ba89936da5324884481a1772f7165f11"><img border="0" src="//ws-na.amazon-adsystem.com/widgets/q?_encoding=UTF8&MarketPlace=BR&ASIN=8577422399&ServiceVersion=20070822&ID=AsinImage&WS=1&Format=_SL250_&tag=miqueias91-20" ></a>',
    '<a target="_blank"  href="https://www.amazon.com.br/gp/product/B00N28818A/ref=as_li_tl?ie=UTF8&camp=1789&creative=9325&creativeASIN=B00N28818A&linkCode=as2&tag=miqueias91-20&linkId=c105796f9ff912650a27839b2c72ecf4"><img border="0" src="//ws-na.amazon-adsystem.com/widgets/q?_encoding=UTF8&MarketPlace=BR&ASIN=B00N28818A&ServiceVersion=20070822&ID=AsinImage&WS=1&Format=_SL250_&tag=miqueias91-20" ></a>'
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