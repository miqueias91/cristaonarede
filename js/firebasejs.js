  // Your web app's Firebase configuration
  // For Firebase JS SDK v7.20.0 and later, measurementId is optional
  var firebaseConfig = {
    apiKey: "AIzaSyBcEM9D2fDvZKd1GRR6dB8S_tAV72ZfVXc",
    authDomain: "cristao-na-rede.firebaseapp.com",
    databaseURL: "https://cristao-na-rede-default-rtdb.firebaseio.com",
    projectId: "cristao-na-rede",
    storageBucket: "cristao-na-rede.appspot.com",
    messagingSenderId: "356851272550",
    appId: "1:356851272550:web:d6f0571eed0c2eacccd6a7",
    measurementId: "G-FNSSN115D1"
  };
  // Initialize Firebase
  firebase.initializeApp(firebaseConfig);
  firebase.analytics();

  firebase.auth().onAuthStateChanged(function(user) {
    if (user) {
      var isAnonymous = user.isAnonymous;
      var uid = user.uid;
      window.localStorage.setItem('uid',uid);
    }
  });