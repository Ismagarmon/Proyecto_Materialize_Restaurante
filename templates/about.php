<?php

session_cache_limiter('nocache,private');
session_name('newuser');
session_start();
require '../assets/aboutheader.inc.php';
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
    if (isset($_COOKIE['ID_USUARIO']))
      nav_cookies();
    else
      nav_no_cookies()

    ?>
  </nav>
  <main>
    <div class="aboutus">
      <h1>Discover Our Culinary Story</h1>
      <p id="fontsize">Welcome to Balsamiq Restaurant, where passion for food meets a commitment to culinary excellence. Nestled in the heart of Spain, our restaurant is more than just a dining destination; 
        it's a celebration of flavors, a symphony of tastes that reflects our dedication to creating unforgettable culinary experiences.
      </p>
      <p id="fontsize">At Balsamiq Restaurant, we believe that dining is an art form, and our kitchen is the canvas where our talented chefs craft masterpieces. 
        Our culinary journey is inspired by a rich tapestry of global influences, 
        blending traditional techniques with innovative twists to create dishes that are not just meals but moments to be savored.
      </p>
      <p id="fontsize">Beyond the exceptional food, our restaurant is a haven of warm hospitality and inviting ambiance. 
        From the moment you step through our doors, you're welcomed into a space where every detail is designed to enhance your dining experience. 
        Whether you're here for a romantic evening, a family celebration, or a casual gathering with friends, we strive to make every visit special.
      </p>
      <p id="fontsize">Our commitment to quality extends beyond the plate. 
        We source the finest ingredients, prioritizing freshness and sustainability. 
        The result is a menu that showcases the best of seasonal produce, premium meats, and thoughtfully curated flavors. 
        Each dish tells a story, a narrative of our dedication to providing a culinary journey that delights the senses.
      </p>
      
    </div>
    <div class="comments">
      <p id="fontsize">These are four of the comments that the people have add to our web blog:</p>
      <div class="collectionpersonal">
        <ul class="collection">
          <li class="collection-item avatar" style="margin-bottom: 5px;">
            <img src="https://www.metlife.es/content/dam/metlifecom/es/img/blog/5-habitos-personas-felices.jpg" alt="" class="circle">
            <span style="margin-bottom: 5px;" class="title">Savoring Elegance at Bistro Bliss</span>
            <p style="color: black">Step into Bistro Bliss for a gastronomic journey that transcends ordinary dining. <br>
              The menu, a fusion of innovation and tradition, invites guests to savor every moment in a setting of refined elegance.
            </p>
          </li>
          <li class="collection-item avatar" style="margin-bottom: 5px;">
            <img src="https://images.pexels.com/photos/614810/pexels-photo-614810.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt="" class="circle">
            <span style="margin-bottom: 5px;" class="title">Flavors of Fusion Delight at Spice Horizon</span>
            <p style="color: black">Embark on a culinary adventure at Spice Horizon, where the diverse tapestry of flavors tells a tale of culinary creativity.  <br>
            This restaurant seamlessly fuses global influences, promising a taste journey that captivates the senses.
            </p>
          </li>
          <li class="collection-item avatar" style="margin-bottom: 5px;">
            <img src="https://images.pexels.com/photos/4065129/pexels-photo-4065129.jpeg?cs=srgb&dl=pexels-cottonbro-studio-4065129.jpg&fm=jpg" alt="" class="circle">
            <span style="margin-bottom: 5px;" class="title">Cozy Comforts and Culinary Wonders at Hearthside Bites</span>
            <p style="color: black">Hearthside Bites is not just a restaurant; it's a warm embrace of comfort and culinary wonders. <br>
            The menu, a celebration of familiar flavors with a modern twist, promises to turn every visit into a delightful experience.
            </p>
          </li>
          <li class="collection-item avatar">
            <img src="https://img.freepik.com/foto-gratis/retrato-hermoso-mujer-joven-posicion-pared-gris_231208-10760.jpg" alt="" class="circle">
            <span style="margin-bottom: 5px;" class="title">Seafood Symphony: A Coastal Feast at Tides & Tastes</span>
            <p style="color: black">Tides & Tastes invites you to a coastal feast where the symphony of fresh seafood takes center stage. <br>
            With a menu curated to celebrate the bounty of the sea, every dish is a flavorful ode to oceanic indulgence.
            </p>
          </li>
        </ul>
      </div>
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