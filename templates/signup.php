<?php
require '../PDO/parametros.php';
session_cache_limiter('nocache,private');
session_name('newuser');
session_start();
$db = new PDO('mysql:host=' . $servidor . ';dbname=' . $bd, $usuario, $contrasenia);
require '../assets/signupheader.inc.php';

if (isset($_REQUEST['createuser'])) {
  $consulta = $db->prepare('INSERT INTO Usuarios (Nombre,Apellidos,Correo,Contraseña) VALUES (:nombre,:apellido,:correo,:contrasena)');
  $password = $_REQUEST['password'];
  $correo = $_REQUEST['email'];
  $nombre = $_REQUEST['name'];
  $apellido = $_REQUEST['surnames'];
  $consulta->bindParam(':correo', $correo);
  $consulta->bindParam(':nombre', $nombre);
  $consulta->bindParam(':apellido', $apellido);
  $consulta->bindParam(':contrasena', $password);
  $consulta->execute();
  echo '<script>alert("Te has registrado correctamente")</script>';
  sleep(1);
  header('Location: ../index.php', true, 301);
  exit();
}

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
</head>

<body>
  <nav>
    <?php
      nav_no_cookies();
    ?>
  </nav>
  <main class="main">
    <form method="post" action="signup.php">
      <fieldset>
        <legend style="color: white">
          REGISTER
        </legend>
        <div class="row flex-cc">
          <div class="input-field margin-l">
            <input id="last_name" type="text" placeholder="Username" name="name">
            <label for="last_name">First Name</label>
          </div>
        </div>
        <div class="row flex-cc">
          <div class="input-field margin-l">
            <input id="last_name" type="text" placeholder="Surnames" name="surnames">
            <label for="last_name">Last Name</label>
          </div>
        </div>
        <div class="row flex-cc">
          <div class="input-field margin-l">
            <input id="last_name" type="text" class="validate" placeholder="Email" name="email">
            <label for="last_name">Correo</label>
          </div>
        </div>
        <div class="row flex-cc">
          <div class="input-field margin-l">
            <input id="last_name" type="password" class="validate" placeholder="Password" name="password">
            <label for="last_name">Password</label>
          </div>
        </div>
        <div class="row center margin-top">
          <button class="btn waves-effect waves-light" type="submit" name="action">Enter
            <i class="material-icons right">send</i>
          </button>
        </div>
      </fieldset>
      <input hidden name="createuser">
    </form>

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