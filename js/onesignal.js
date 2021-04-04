window.OneSignal = window.OneSignal || [];
  OneSignal.push(function() {
    OneSignal.init({
      appId: "e3ebdf1f-bb9d-4f22-a8a5-1dfc979cf834",
    });
});


OneSignal.push(function() {
  	/* These examples are all valid */
  	OneSignal.getUserId(function(userId) {
	    console.log("OneSignal User ID:", userId);
	    window.localStorage.setItem('userId',userId);

	    var userId = window.localStorage.getItem('userId');
	    var uid = window.localStorage.getItem('uid');
	    
	    if (userId && uid) {
	      $.ajax({
	        url: "https://www.innovatesoft.com.br/webservice/app/cadastraUser.php",
	        dataType: 'html',
	        type: 'POST',
	        data: {
	          'userId': userId,
	          'pushToken': '',
	          'uid': uid,
	          'datacadastro': this.dateTime(),
	          'ultimoacesso': this.dateTime(),
	          'app': 'site-cristaonarede',
	        },
	      });
	    }
	});
});