<?php

session_cache_limiter('nocache,private');
session_name('newuser');
session_start();
require 'assets/indexheader.inc.php';
?>

<!DOCTYPE html>
<html lang="es">

<head>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Restaurante D.I.W</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection" />
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection" />

  <!-- Scripts -->
  <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script type="text/javascript" src="js/materialize.js"></script>
  <script type="text/javascript" src="js/init.js"></script>
  <script type="module" src="js/app.js"></script>

  <link rel="icon" type="image/png" href="img/RM.png" />

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

  <main id="home">
    <h1>We have created our menus with the best selection of the ingredients of our country.</h1>
    <h4>Here you have some pictures: </h4>
    <div class="carousel">
      <a class="carousel-item" href="#one!"><img src="https://media.istockphoto.com/id/1165399909/es/foto/deliciosa-comida-en-un-plato-negro-vista-superior-espacio-de-copia.jpg?s=612x612&w=0&k=20&c=WVPqUu2friqxwlr385Ax-QQ_IvylhR_5wl46P5jQbb4="></a>
      <a class="carousel-item" href="#two!"><img src="https://www.turiweb.pe/wp-content/uploads/2020/01/restaurantes-platos-070120-1.jpg"></a>
      <a class="carousel-item" href="#three!"><img src="https://www.laparcelacr.com/wp-content/uploads/2014/11/platos-fuertes-menu.jpg"></a>
      <a class="carousel-item" href="#four!"><img src="https://www.huariques.com/wp-content/uploads/2010/03/lomo_saltado-1.jpg"></a>
      <a class="carousel-item" href="#five!"><img src="https://viajes.chavetas.es/wp-content/uploads/albums/hongkong11/comerenmacao02.jpg"></a>
    </div>
    <div class="information">
      <h5>
        Here we have some information about our suppliers:
      </h5>
      <ul class="collapsible popout">
        <li>
          <div id="divinfo" class="collapsible-header"><i class="material-icons">place</i>Fresh Cuts Inc</div>
          <div class="collapsible-body">
            <span>
              <strong>Supplier Name:</strong> Fresh Cuts Inc.<br>
              <strong>Location:</strong> Farmington, USA<br>
              <strong>Specialization:</strong> Premium cuts of beef, pork, and chicken.<br>
              <strong>Quality:</strong> Known for high-quality, organic meats.<br>
              <strong>Contact:</strong> info@freshcuts.com
            </span>
          </div>
        </li>
        <li>
          <div id="divinfo" class="collapsible-header"><i class="material-icons">place</i>Global Meats Ltd</div>
          <div class="collapsible-body">
            <span>
              <strong>Supplier Name:</strong> Global Meats Ltd.<br>
              <strong>Location:</strong> Sydney, Australia<br>
              <strong>Specialization:</strong> Diverse range of meats, including exotic options.<br>
              <strong>Quality:</strong> Emphasizes sustainable and ethically sourced products.<br>
              <strong>Contact:</strong> sales@globalmeats.com.au
            </span>
          </div>
        </li>
        <li>
          <div id="divinfo" class="collapsible-header"><i class="material-icons">whatshot</i>Balsamiq Restaurant</div>
          <div class="collapsible-body">
            <span>In the heart of the bustling city, a quaint cafe awaits, 
              offering a haven of warmth and aroma. The barista crafts each cup with precision, 
              creating a symphony of flavors. Patrons savor the moments, 
              indulging in the simple joy of a perfect brew.
            </span>
          </div>
        </li>
      </ul>
    </div>


  </main>
  <footer class="page-footer" id="footer">
    <div class="container">
      <div class="row">
        <div class="col l6 s12">
          <h5 class="white-text">Balsamiq Restaurant</h5>
          <p class="grey-text text-lighten-4">In this Restaurant you're going to be able to make your order, choosing
            the meat you want, including vegan food, but there
            isn't a custom order</p>
        </div>
        <div class="col l4 offset-l2 s12">
          <h5 class="white-text">These sites are where I buy the ingredients</h5>
          <ul>
            <li><a class="grey-text text-lighten-3" href="https://iruki.es/tienda-online/" target="_blank">Meat used</a>
            </li>
            <li><a class="grey-text text-lighten-3" href="https://verduras.consumer.es/" target="_blank">Vegatables
                used</a></li>
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