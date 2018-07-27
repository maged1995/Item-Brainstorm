<!doctype html>
<?php
function generateRandomString($length = 32) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}

$LOGIN_SESSION('username') = '';
$LOGIN_SESSION('password') = '';
$LOGIN_SESSION('state') = generateRandomString();


?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!--<link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
    <link rel="icon" href="256_m_black.png">
    <meta name="description" content="Free Web tutorials">
    <meta name="keywords" content="HTML,CSS,XML,JavaScript">
    <meta name="author" content="John Doe"> -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="main.css">
    <title>Hello</title>
  </head>

  <body>

    <?php include 'header.html';?>
    <main>
      <div>

      </div>
    </main>
    <footer>

    </footer>
  </body>
</html>
