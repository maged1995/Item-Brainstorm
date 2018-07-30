<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="main.css">
    <title>Sign in</title>
    <script src="https://www.gstatic.com/firebasejs/5.3.0/firebase.js"></script>
    <script>
      // Initialize Firebase
      // TODO: Replace with your project's customized code snippet
      var config = {
        apiKey: "AIzaSyAKmzy8uOasVhEtTlCDaRoa7G18nF98CTw",
        authDomain: "item-brainstorm.firebaseapp.com",
        databaseURL: "https://item-brainstorm.firebaseio.com",
        projectId: "item-brainstorm",
        storageBucket: "item-brainstorm.appspot.com",
        messagingSenderId: "334249970569"
      };
      firebase.initializeApp(config);
    </script>
    <script>
      function callGoogleSignIn(){
        var provider = new firebase.auth.GoogleAuthProvider();
        firebase.auth().signInWithPopup(provider).then(function(result) {
          // This gives you a Google Access Token. You can use it to access the Google API.
          var token = result.credential.accessToken;
          // The signed-in user info.
          var user = result.user;
          // ...
        }).catch(function(error) {
          // Handle Errors here.
          var errorCode = error.code;
          var errorMessage = error.message;
          // The email of the user's account used.
          var email = error.email;
          // The firebase.auth.AuthCredential type that was used.
          var credential = error.credential;
          // ...
        });
      }
    </script>
  </head>
  <body>
    <?php include "header.html" ?>
    <main>
      <div class="container">
        <h1 class="title">Sign in</h1>
        <form>
          <label for="username">Email or Username: </label><input type="text" placeholder="Email or Password..." name="username"/><br/>
          <label for="password">Password: </label><input type="password" placeholder="Username.." name="password"/><br/>
          <input type="submit" value="login"/>
        </form>
        <input type="button" onclick=callGoogleSignIn() value="Google Sign In"/>
        <!-- google, facebook, and other login api's will be here -->
      </div>
    </main>
  </body>
</html>
