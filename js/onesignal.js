OneSignal.push(function() {
  	/* These examples are all valid */
  	OneSignal.getUserId(function(userId) {
	    window.localStorage.setItem('userId',userId);

	    var userId = window.localStorage.getItem('userId');
	    var uid = window.localStorage.getItem('uid');

      $("#userId").val(window.localStorage.getItem('userId'));
      $("#uid").val(window.localStorage.getItem('uid'));

	    if (userId && uid) {
	      $.ajax({
	        url: "https://www.innovatesoft.com.br/webservice/app/cadastraUser.php",
	        dataType: 'html',
	        type: 'POST',
	        data: {
	          'userId': userId,
	          'pushToken': '',
	          'uid': uid,
	          'datacadastro': dateTime(),
	          'ultimoacesso': dateTime(),
	          'app': 'site-cristaonarede',
	        },
	      });
	    }
	});
});



function dateTime() {
    let now = new Date;
    let ano = now.getFullYear();
    let mes = now.getMonth() + 1;
    let dia = now.getDate();

    let hora = now.getHours();
    let min = now.getMinutes();
    let seg = now.getSeconds();

    if (parseInt(mes) < 10) {
      mes = '0'+mes;
    }
    if (parseInt(dia) < 10) {
      dia = '0'+dia;
    }
    if (parseInt(hora) < 10) {
      hora = '0'+hora;
    }
    if (parseInt(min) < 10) {
      min = '0'+min;
    }
    if (parseInt(seg) < 10) {
      seg = '0'+seg;
    }
    return ano+'-'+mes+'-'+dia+' '+hora+':'+min+':'+seg;
}