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

  </main>
  
</body>

</html>