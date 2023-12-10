<?php
require '../PDO/parametros.php';
session_cache_limiter('nocache,private');
session_name('newuser');
session_start();
$db = new PDO('mysql:host=' . $servidor . ';dbname=' . $bd, $usuario, $contrasenia);

if (isset($_REQUEST['insertmoney'])) {

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

if (isset($_REQUEST['id_email'])) {

    $id_emailupdate = $_REQUEST['id_email'];

    $actualizaremail = $db->prepare("UPDATE EMAILS SET Email_Status = 'No' WHERE ID_EMAIL = :ide");
    $actualizaremail->bindParam(':ide', $id_emailupdate);
    $actualizaremail->execute();
    echo "<script>alert('Email chequecked')</script>";
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
    <nav>
        <div class="nav-wrapper">
            <ul id="nav-mobile" class="right hide-on-med-and-down">
                <li id="pd"><a>Personal Data</a></li>
                <li id="ean"><a>Emails and notifications</a></li>
            </ul>
            <ul class="sidenav" id="nav-mobile">
                <li id="pd"><a>Personal Data</a></li>
                <li id="ean"><a>Emails and notifications</a></li>
            </ul>
            <a href="#!" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
        </div>
    </nav>


    <main>

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
                $name = $fila->Name;
                $surnames = $fila->Surnames;
                $email = $_COOKIE['Correo'];
                $balance = $fila->Balance;
            }
            ?>
            <p>Name: <?php echo $name  ?></p>
            <p>Surnames: <?php echo $surnames ?></p>
            <p>Email: <?php echo $email ?></p>
            <p>Balance: <?php echo $balance ?>€</p>
            <div class="profiform">
                <form method="post" action="profile.php">
                    <input hidden name="insertmoney">
                    <div class="colocation">
                        <input id="money" name="money" type="text" pattern="[\d+]{1,5}" title="Only add numbers, max 5" placeholder="Introduce the quantity">
                    </div>
                    <br>
                    <div class="div-charge">
                        <input type="submit" value="Recharge" id="recharge" hidden>
                    </div>
                </form>
            </div>

        </div>
        <div class="ean none" id="divean">
            <div class="emails">

                <p style="text-align: center; color: white">Tienes estos correos sin ver:
                    <?php
                    $check = $db->prepare('SELECT COUNT(*) AS Total FROM EMAILS WHERE Email_Status = "Si" AND ID_USER = :idUser');
                    $check->bindParam(':idUser', $_COOKIE['ID_USUARIO']);
                    $check->execute();
                    while ($fila = $check->fetch(PDO::FETCH_OBJ)) {
                        $number = $fila->Total;
                        echo $number;
                    }
                    ?></p>
                <ul class="collapsible">
                    <?php
                    $emails = $db->prepare('SELECT * FROM EMAILS WHERE ID_USER = :idUser');
                    $emails->bindParam(':idUser', $_COOKIE['ID_USUARIO']);
                    $emails->execute();
                    while ($fila = $emails->fetch(PDO::FETCH_OBJ)) {
                        $id_email = $fila->ID_EMAIL;
                        $nameuser = $fila->Origin_User;
                        $affair = $fila->Affair;
                        $message = $fila->Message;
                        if ($fila->Email_Status == 'Si') {
                            $form = '<form method="post" action="profile.php">
                            <input hidden value="' . $id_email . '" name="id_email">
                            <input type="submit" value="Check">
                            </form>';
                            $checked = '';
                        } else {
                            $form = '';
                            $checked = ' (Check)';
                        }
                        $message_styled = '<p id="emailmessage">' . $message . '</p>';
                        echo '
                        <li>
                            <div class="collapsible-header"><i class="material-icons">account_circle</i>From: ' . $nameuser . '' . $checked . '</div>
                            <div class="collapsible-body"><span style="color: white">
                            Subject: ' . $affair . '<br><br>
                            Message: <br><br>
                            ' . $message_styled . '
                            <br><br>
                            ' . $form . '
                            </span></div>
                        </li>
                        ';
                    }
                    ?>
                </ul>


            </div>

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