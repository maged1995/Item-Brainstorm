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
        <!-- google, facebook, and other login api's will be here -->
      </div>
    </main>
  </body>
</html>
