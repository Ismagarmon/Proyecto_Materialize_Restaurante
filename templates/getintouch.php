<?php

session_cache_limiter('nocache,private');
session_name('newuser');
session_start();
require '../assets/getintouchheader.inc.php';
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

  <script type="module" src="../js/getit.js"></script>
</head>

<body>
  <nav>
    <?php
    if (isset($_COOKIE['ID_USUARIO']))
      nav_cookies();
    else
      nav_no_cookies()

    ?>
  </nav>
  <main>
    <div class="loader none">
      <div class="preloader-wrapper small active">
        <div class="spinner-layer spinner-green-only">
          <div class="circle-clipper left">
            <div class="circle"></div>
          </div>
          <div class="gap-patch">
            <div class="circle"></div>
          </div>
          <div class="circle-clipper right">
            <div class="circle"></div>
          </div>
        </div>
      </div>
    </div>
    <div class="form">
      <form>
        <fieldset>
          <legend>Contact to me</legend>
          <div class="row flex-cc">
            <div class="input-field margin-l">
              <input id="last_name" type="text" class="validate" placeholder="Name">
              <label for="last_name">First Name</label>
            </div>
          </div>
          <div class="row flex-cc">
            <div class="input-field margin-l">
              <input id="last_name" type="text" class="validate" placeholder="Last two names">
              <label for="last_name">Last Name</label>
            </div>
          </div>
          <div class="row flex-cc">
            <div class="input-field margin-l">
              <input id="last_name" type="text" class="validate" placeholder="Example: qwerty@gmail.com">
              <label for="last_name">Email</label>
            </div>
          </div>
          <div class="row flex-cc">
            <div class="input-field margin-l">
              <input id="icon_telephone" type="tel" class="validate">
              <label for="icon_telephone">Telephone</label>
            </div>
          </div>
          <div class="row flex-cc">
            <div class="input-field margin-l">
              <textarea id="textarea1" class="materialize-textarea"></textarea>
              <label for="textarea1">Textarea</label>
            </div>
          </div>
          <div class="row flex-cc margin-top">
            <button class="btn waves-effect waves-light" type="submit" name="action">Submit
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
          <p class="grey-text text-lighten-4">In this Restaurant you're going to be able to make your order, choosing the meat you want, including vegan food, but there isn't a custom order</p>
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