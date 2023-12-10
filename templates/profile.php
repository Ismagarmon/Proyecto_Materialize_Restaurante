<?php
require '../PDO/parametros.php';
session_cache_limiter('nocache,private');
session_name('newuser');
session_start();
$db = new PDO('mysql:host=' . $servidor . ';dbname=' . $bd, $usuario, $contrasenia);

$consulta = $db->prepare('SELECT * FROM USERS WHERE Email = :correo');
$email = $_COOKIE['Correo'];
$consulta->bindParam(':correo', $email);
$consulta->execute();
while ($fila = $consulta->fetch(PDO::FETCH_OBJ)) {
    $name = $fila -> Name;
    $surnames = $fila -> Surnames;
    $email = $_COOKIE['Correo'];
    $balance = $fila -> Balance;
}


if(isset($_REQUEST['insertmoney'])){

    $nuevosaldoaactualizado = 0;
    $consultasaldoactualizar = $db->prepare('SELECT Balance FROM USERS WHERE Email = :correo');
    $consultasaldoactualizar->bindParam(':correo', $_COOKIE['Correo']);
    $consultasaldoactualizar->execute();
    while ($fila = $consultasaldoactualizar->fetch(PDO::FETCH_OBJ)) {
        $nuevosaldoaactualizado = $fila->Balance;
    }

    $nuevosaldoaactualizado += (int) $_REQUEST['money'];

    $actualizarsaldo = $db->prepare("UPDATE USERS SET Balance = :saldo WHERE ID_USER = :idUsuario");
    $actualizarsaldo->bindParam(':idUsuario', $_COOKIE['ID_USUARIO']);
    $actualizarsaldo->bindParam(':saldo', $nuevosaldoaactualizado);
    $actualizarsaldo->execute();
    echo "<script>alert('Balance updated correctly')</script>";
    sleep(1);
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

    <!-- Scripts -->
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="../js/materialize.js"></script>
    <script type="text/javascript" src="../js/init.js"></script>
    <script type="module" src="../js/profile.js"></script>

    <link rel="icon" type="image/png" href="../img/RM.png" />

</head>

<body>


    <main id="absolute">
        <div class="nav">
            <ul>
                <li id="pd">Personal Data</li>
                <li id="ean">Emails and notifications</li>
            </ul>
        </div>
        <div class="loader flex-cc none" id="loader">
            <div class="preloader-wrapper active">
                <div class="spinner-layer spinner-red-only">
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
        <div class="pd" id="divpd">
            <h1>Your personal data</h1>
            <?php 
            $consulta = $db->prepare('SELECT * FROM USERS WHERE Email = :correo');
            $email = $_COOKIE['Correo'];
            $consulta->bindParam(':correo', $email);
            $consulta->execute();
            while ($fila = $consulta->fetch(PDO::FETCH_OBJ)) {
                $name = $fila -> Name;
                $surnames = $fila -> Surnames;
                $email = $_COOKIE['Correo'];
                $balance = $fila -> Balance;
            }
            ?>
            <p>Name: <?php echo $name  ?></p>
            <p>Surnames: <?php echo $surnames?></p>
            <p>Email: <?php echo $email ?></p>
            <p>Balance: <?php echo $balance ?>€</p>
            <form method="post" action="profile.php">
                <input hidden name="insertmoney">
                <input id="money" name="money" type="text" pattern="[\d+]{1,5}" title="Only add numbers" placeholder="Introduce the quantity">
                <input type="submit" value="Recharge">
            </form> 
        </div>
        <div class="ean none" id="divean">

        </div>
        <div class="fixed-action-btn">
            <a class="btn-floating btn-large red">
                <i class="large material-icons">settings</i>
            </a>
            <ul>
                <li><a href="../index.php" class="btn-floating red"><i class="medium material-icons">home</i></a></li>
                <li><a href="getintouch.php" class="btn-floating yellow darken-1"><i class="medium material-icons">contact_mail</i></a></li>
                <li id="logout"><a class="btn-floating green"><i class="medium material-icons">exit_to_app</i></a></li>
                <li><a href="makeorder.php" class="btn-floating blue"><i class="medium material-icons">local_dining</i></a></li>
            </ul>
        </div>
    </main>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var elems = document.querySelectorAll('.fixed-action-btn');
            var instances = M.FloatingActionButton.init(elems, {
                hoverEnabled: false
            })
        })
    </script>
</body>

</html>