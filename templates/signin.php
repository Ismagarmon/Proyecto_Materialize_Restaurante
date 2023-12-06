<?php

session_cache_limiter('nocache,private');
session_name('newuser');
session_start();

$db = new PDO('mysql:host=' . $servidor . ';dbname=' . $bd, $usuario, $contrasenia);

?>

<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Restaurante D.I.W</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="../css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection" />
  <link href="../css/style.css" type="text/css" rel="stylesheet" media="screen,projection" />

  <!--  Scripts-->
  <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script type="text/javascript" src="../js/materialize.js"></script>
  <script type="text/javascript" src="../js/init.js"></script>

  <link rel="icon" type="image/png" href="../img/RM.png" />

  <script type="module" src="../js/app.js"></script>
</head>

<body>
  <nav>
  <div class="nav-wrapper">
      <a href="index.php" class="brand-logo a-height"><img src="img/RM.png" alt="Logo" class="brand-logo" width="60rem" height="100%"></a>
      <ul class="right hide-on-med-and-down">
        <li class="active">
          <a href="index.php" id="home">Home</a>
        </li>
        <li>
          <a href="templates/about.php" id="about">About Us</a>
        </li>
        <li>
          <a href="templates/makeorder.php" id="makeorder">Make an order</a>
        </li>
        <li>
          <a href="templates/getintouch.php" id="contact">Get in touch</a>
        </li>
        <li>
          <a class="btn waves-effect waves-light" href="signup.php">Sign Up</a>
        </li>
      </ul>
      <ul class="sidenav" id="nav-mobile">
        <li><a href="../index.php" id="home">Home</a></li>
        <li><a href="about.php" id="about">About Us</a></li>
        <li>
          <a href="makeorder.php" id="makeorder">Make an order</a>
        </li>
        <li><a href="getintouch.php" id="contact">Get in touch</a></li>
        <li><a class="btn waves-effect waves-light" href="signup.php">Sign Up</a></li>
      </ul>
      <a href="#!" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
    </div>
  </nav>
  <main>
    <div class="form">
      <form class="n-padding" method="POST" action="signin.php">
        <fieldset>
          <div class="row flex-cc">
            <div class="input-field margin-l">
              <input id="last_name" type="text" placeholder="Username" pattern="/^[A-Za-z\s]+$" title="The name must have mayus and minus">
              <label for="last_name">First Name</label>
            </div>
          </div>
          <div class="row flex-cc">
            <div class="input-field margin-l">
              <input id="last_name" type="text" class="validate" placeholder="Password">
              <label for="last_name">Password</label>
            </div>
          </div>
          <div class="row center margin-top">
            <button class="btn waves-effect waves-light" type="submit" name="action">Enter
              <i class="material-icons right">send</i>
            </button>
          </div>
        </fieldset>
      </form>
    </div>
  </main>
  <footer class="page-footer" id="footer">
    <div class="container">
      <div class="row">
        <div class="col l6 s12">
          <h5 class="white-text">Balsamiq Restaurant</h5>
          <p class="grey-text text-lighten-4">In this Restaurant you're going to be able to make your order, choosing the meat you want, including vegan food, but there
            isn't a custom order</p>
        </div>
        <div class="col l4 offset-l2 s12">
          <h5 class="white-text">These sites are where I buy the ingredients</h5>
          <ul>
            <li><a class="grey-text text-lighten-3" href="https://iruki.es/tienda-online/" target="_blank">Meat used</a></li>
            <li><a class="grey-text text-lighten-3" href="https://verduras.consumer.es/" target="_blank">Vegatables used</a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="footer-copyright flex-cc">
      <div class="container">
        © 2014 Copyright Text
        <a class="grey-text text-lighten-4 right" href="https://www.instagram.com/" target="_blank">Instagram</a>
      </div>
    </div>
  </footer>
</body>

</html>