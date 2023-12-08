<?php

session_cache_limiter('nocache,private');
session_name('newuser');
session_start();
require '../assets/makeanorder.inc.php';
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

  <!-- Scripts -->
  <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script type="text/javascript" src="../js/materialize.js"></script>
  <script type="text/javascript" src="../js/init.js"></script>

  <link rel="icon" type="image/png" href="../img/RM.png" />

  <script type="module" src="../js/app.js"></script>

</head>

<body>
  <nav>
    <?php
    nav_cookies();
    ?>
  </nav>
  <main>

    <div class="firstplate">

      <nav class="m-button">
        <div class="nav-wrapper">
          <div class="col s12">
            <a href="#!" class="breadcrumb">First Plate</a>
          </div>
        </div>
      </nav>

      <div id="one">

        <div class="row flex-cc">
          <div class="card s4 w-3">
            <div class="card-image waves-effect waves-block waves-light">
              <img class="activator" src="https://apiimg.iberostar.com/uploads/image/32303/crops/16:9/720/image.jpeg">
            </div>
            <div class="card-content">
              <span class="card-title activator grey-text text-darken-4">Salmon Salad $15.99<i class="material-icons right">more_vert</i></span>
              <a class="btn waves-effect waves-light" id="c1">Add</a>
            </div>
            <div class="card-reveal">
              <span class="card-title grey-text text-darken-4">Salmon Salad $15.99<i class="material-icons right">close</i></span>
              <p>
                Calories: 350,
                Protein: 25g,
                Carbohydrates: 15g,
                Fat: 20g
              </p>
            </div>
          </div>
        </div>

        <div class="row flex-cc">
          <div class="card s4 w-3">
            <div class="card-image waves-effect waves-block waves-light">
              <img class="activator" src="https://media.istockphoto.com/id/1165399909/es/foto/deliciosa-comida-en-un-plato-negro-vista-superior-espacio-de-copia.jpg?s=612x612&w=0&k=20&c=WVPqUu2friqxwlr385Ax-QQ_IvylhR_5wl46P5jQbb4=">
            </div>
            <div class="card-content">
              <span class="card-title activator grey-text text-darken-4">Grilled Chicken $12.99<i class="material-icons right">more_vert</i></span>
              <a class="btn waves-effect waves-light" id="c2">Add</a>
            </div>
            <div class="card-reveal">
              <span class="card-title grey-text text-darken-4">Grilled Chicken $12.99<i class="material-icons right">close</i></span>
              <p>Calories: 300,
                Protein: 30g,
                Carbohydrates: 10g,
                Fat: 15g</p>
            </div>
          </div>
        </div>

        <div class="row flex-cc">
          <div class="card s4 w-3">
            <div class="card-image waves-effect waves-block waves-light">
              <img class="activator" src="https://www.guiarepsol.com/content/dam/repsol-guia/contenidos-imagenes/comer/nuestros-favoritos/restaurante-casa-pepe-juderia-cordoba/gr-cms-media-featured_images-none-1eee71eb-1540-4641-9c9a-6bd1cf267150-01-guia-repsol-casa-pepe-cordoba-22-de-enero-de-2022-177.jpg.transform/rp-rendition-md/image.jpg">
            </div>
            <div class="card-content">
              <span class="card-title activator grey-text text-darken-4">Rosse Pasta $14.99<i class="material-icons right">more_vert</i></span>
              <a class="btn waves-effect waves-light" id="c3">Add</a>
            </div>
            <div class="card-reveal">
              <span class="card-title grey-text text-darken-4">Rosse Pasta $14.99<i class="material-icons right">close</i></span>
              <p>Calories: 400,
                Protein: 12g,
                Carbohydrates: 50g,
                Fat: 18g</p>
            </div>
          </div>
        </div>

        <ul class="pagination center">
          <li class="disabled"><a href="#!"><i class="material-icons">chevron_left</i></a></li>
          <li class="active"><a href="#!">1</a></li>
          <li class="waves-effect" id="passp2"><a href="#!">2</a></li>
          <li class="waves-effect" id="passp"><a href="#!"><i class="material-icons">chevron_right</i></a></li>
        </ul>

      </div>

      <div id="two" class="none">

        <div class="row flex-cc">
          <div class="card s4 w-3">
            <div class="card-image waves-effect waves-block waves-light">
              <img class="activator" src="https://www.guiarepsol.com/content/dam/repsol-guia/contenidos-imagenes/comer/nuestros-favoritos/restaurante-casa-pepe-juderia-cordoba/gr-cms-media-featured_images-none-1eee71eb-1540-4641-9c9a-6bd1cf267150-01-guia-repsol-casa-pepe-cordoba-22-de-enero-de-2022-177.jpg.transform/rp-rendition-md/image.jpg">
            </div>
            <div class="card-content">
              <span class="card-title activator grey-text text-darken-4">Beef Stir-Fry $14.99<i class="material-icons right">more_vert</i></span>
              <a class="btn waves-effect waves-light" id="c4">Add</a>
            </div>
            <div class="card-reveal">
              <span class="card-title grey-text text-darken-4">Beef Stir-Fry $14.99<i class="material-icons right">close</i></span>
              <p>Calories: 380,
                Protein: 22g,
                Carbohydrates: 25g,
                Fat: 24g</p>
            </div>
          </div>
        </div>

        <ul class="pagination center">
          <li class="waves-effect" id="passp3"><a href="#!"><i class="material-icons">chevron_left</i></a></li>
          <li class="waves-effect" id="passp4"><a href="#!">1</a></li>
          <li class="active"><a href="#!">2</a></li>
          <li class="disabled"><a href="#!"><i class="material-icons">chevron_right</i></a></li>
        </ul>

      </div>

    </div>



    <div class="secondplate none">

      <nav class="m-button">
        <div class="nav-wrapper">
          <div class="col s12">
            <a href="#!" class="breadcrumb">First Plate</a>
            <a href="#!" class="breadcrumb">Second Plate</a>
          </div>
        </div>
      </nav>

      <div id="three">

        <div class="row flex-cc">
          <div class="card s4 w-3">
            <div class="card-image waves-effect waves-block waves-light">
              <img class="activator" src="https://www.laparcelacr.com/wp-content/uploads/2014/11/platos-fuertes-menu.jpg">
            </div>
            <div class="card-content">
              <span class="card-title activator grey-text text-darken-4">Shrimp Scampi $17.99<i class="material-icons right">more_vert</i></span>
              <a class="btn waves-effect waves-light" id="c5">Add</a>
            </div>
            <div class="card-reveal">
              <span class="card-title grey-text text-darken-4">Shrimp Scampi $17.99<i class="material-icons right">close</i></span>
              <p>
                Calories: 350,
                Protein: 25g,
                Carbohydrates: 15g,
                Fat: 20g
              </p>
            </div>
          </div>
        </div>

        <div class="row flex-cc">
          <div class="card s4 w-3">
            <div class="card-image waves-effect waves-block waves-light">
              <img class="activator" src="https://www.huariques.com/wp-content/uploads/2010/03/lomo_saltado-1.jpg">
            </div>
            <div class="card-content">
              <span class="card-title activator grey-text text-darken-4">Pizza $11.99<i class="material-icons right">more_vert</i></span>
              <a class="btn waves-effect waves-light" id="c6">Add</a>
            </div>
            <div class="card-reveal">
              <span class="card-title grey-text text-darken-4">Pizza $11.99<i class="material-icons right">close</i></span>
              <p>
                Calories: 350,
                Protein: 25g,
                Carbohydrates: 15g,
                Fat: 20g
              </p>
            </div>
          </div>
        </div>

        <div class="row flex-cc">
          <div class="card s4 w-3">
            <div class="card-image waves-effect waves-block waves-light">
              <img class="activator" src="https://viajes.chavetas.es/wp-content/uploads/albums/hongkong11/comerenmacao02.jpg">
            </div>
            <div class="card-content">
              <span class="card-title activator grey-text text-darken-4">Teriyaki Salmon $12.99<i class="material-icons right">more_vert</i></span>
              <a class="btn waves-effect waves-light" id="c7">Add</a>
            </div>
            <div class="card-reveal">
              <span class="card-title grey-text text-darken-4">Teriyaki Salmon $12.99<i class="material-icons right">close</i></span>
              <p>
                Calories: 350,
                Protein: 25g,
                Carbohydrates: 15g,
                Fat: 20g
              </p>
            </div>
          </div>
        </div>


        <ul class="pagination center">
          <li class="disabled"><a href="#!"><i class="material-icons">chevron_left</i></a></li>
          <li class="active"><a href="#!">1</a></li>
          <li class="waves-effect" id="passp5"><a href="#!">2</a></li>
          <li class="waves-effect" id="passp6"><a href="#!"><i class="material-icons">chevron_right</i></a></li>
        </ul>

      </div>

      <div id="four" class="none">

        <div class="row flex-cc">
          <div class="card s4 w-3">
            <div class="card-image waves-effect waves-block waves-light">
              <img class="activator" src="https://www.lazarola.com/wp-content/uploads/2018/04/Screenshot_3.jpg">
            </div>
            <div class="card-content">
              <span class="card-title activator grey-text text-darken-4">Beef and Broccoli $18.99<i class="material-icons right">more_vert</i></span>
              <a class="btn waves-effect waves-light" id="c8">Add</a>
            </div>
            <div class="card-reveal">
              <span class="card-title grey-text text-darken-4">Beef and Broccoli $18.99<i class="material-icons right">close</i></span>
              <p>
                Calorías: 350,
                Proteínas: 25g,
                Carbohidratos: 28g,
                Grasas: 16g
              </p>
            </div>
          </div>
        </div>

        <ul class="pagination center">
          <li class="waves-effect" id="passp7"><a href="#!"><i class="material-icons">chevron_left</i></a></li>
          <li class="waves-effect" id="passp8"><a href="#!">1</a></li>
          <li class="active"><a href="#!">2</a></li>
          <li class="disabled"><a href="#!"><i class="material-icons">chevron_right</i></a></li>
        </ul>
      </div>

    </div>



    <div class="dessert none">


      <nav class="m-button">
        <div class="nav-wrapper">
          <div class="col s12">
            <a href="#!" class="breadcrumb">First Plate</a>
            <a href="#!" class="breadcrumb">Second Plate</a>
            <a href="#!" class="breadcrumb">Dessert</a>
          </div>
        </div>
      </nav>

      <div class="row flex-cc">
        <div class="card s4 w-3">
          <div class="card-image waves-effect waves-block waves-light">
            <img class="activator" src="https://www.circuitogastronomico.com/wp-content/uploads/2022/03/tucson-postre.jpg">
          </div>
          <div class="card-content">
            <span class="card-title activator grey-text text-darken-4">Chocolate Lava Cake $10.99<i class="material-icons right">more_vert</i></span>
            <a class="btn waves-effect waves-light" id="c9">Add</a>
          </div>
          <div class="card-reveal">
            <span class="card-title grey-text text-darken-4">Chocolate Lava Cake $10.99<i class="material-icons right">close</i></span>
            <p>
              Calorías: 400,
              Proteínas: 5g,
              Carbohidratos: 45g,
              Grasas: 22g
            </p>
          </div>
        </div>
      </div>

      <div class="row flex-cc">
        <div class="card s4 w-3">
          <div class="card-image waves-effect waves-block waves-light">
            <img class="activator" src="https://saposyprincesas.elmundo.es/wp-content/uploads/2019/07/postres-veraniegos-sin-horno-con-frambuesas.jpg">
          </div>
          <div class="card-content">
            <span class="card-title activator grey-text text-darken-4">Fresh Fruit Salad $4.99<i class="material-icons right">more_vert</i></span>
            <a class="btn waves-effect waves-light" id="c10">Add</a>
          </div>
          <div class="card-reveal">
            <span class="card-title grey-text text-darken-4">Fresh Fruit Salad $4.99<i class="material-icons right">close</i></span>
            <p>
              Calorías: 150, 
              Proteínas: 2g, 
              Carbohidratos: 35g, 
              Grasas: 1g
            </p>
          </div>
        </div>
      </div>
    </div>
  </main>

</body>

</html>