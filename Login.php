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
    <script src="js\GoogleLogin.js"></script>
    <script src="js\fsLogin.js"></script>
    <script src="js\twitterLogin.js"></script>
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
        <input type="button" onclick=callTwitterSignIn() value="Twitter Sign In"/>
        <div id="fb-root"></div>
        <script>(function(d, s, id) {
          var js, fjs = d.getElementsByTagName(s)[0];
          if (d.getElementById(id)) return;
          js = d.createElement(s); js.id = id;
          js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.1&appId=2156678977694115&autoLogAppEvents=1';
          fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));</script>
        <div class="fb-login-button" data-max-rows="1" data-size="large" data-button-type="continue_with" data-show-faces="false" data-auto-logout-link="false" data-use-continue-as="false"></div>
        <!-- google, facebook, and other login api's will be here -->
      </div>
      <!-- <script>
        FB.getLoginStatus(function(response) {
            statusChangeCallback(response);
        });
      </script> -->
    </main>
  </body>
</html>
