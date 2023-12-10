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
    $name = $fila->Name;
    $surnames = $fila->Surnames;
    $email = $_COOKIE['Correo'];
    $balance = $fila->Balance;
}


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

if (isset($_REQUEST['id_email'])){

    $id_emailupdate = $_REQUEST['id_email'];

    $actualizaremail = $db->prepare("UPDATE EMAILS SET Email_Status = 1 WHERE ID_EMAIL = :ide");
    $actualizaremail->bindParam(':ide', $id_emailupdate);
    $actualizaremail->execute();
    echo "<script>alert('Balance updated correctly')</script>";
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
            <form method="post" action="profile.php">
                <input hidden name="insertmoney">
                <input id="money" name="money" type="text" pattern="[\d+]{1,5}" title="Only add numbers, max 5" placeholder="Introduce the quantity">
                <input type="submit" value="Recharge" id="recharge" hidden>
            </form>
        </div>
        <div class="ean none" id="divean">
            <div class="emails">

                <p style="text-align: center; color: white">Tienes estos correos sin ver: 
                <?php 
                $check = $db -> prepare('SELECT COUNT(*) AS Total FROM EMAILS WHERE Email_Status = false AND ID_USER = :idUser');
                $check->bindParam(':idUser', $_COOKIE['ID_USUARIO']);
                $check->execute();
                while ($fila = $check->fetch(PDO::FETCH_OBJ)) {
                    $number = $fila -> Total;
                    echo $number;
                }
                ?></p>
                <ul class="collapsible">
                    <?php
                    $emails = $db->prepare('SELECT * FROM EMAILS WHERE ID_USER = :idUser');
                    $emails->bindParam(':idUser', $_COOKIE['ID_USUARIO']);
                    $emails->execute();
                    while ($fila = $emails->fetch(PDO::FETCH_OBJ)) {
                        $id_email = $fila -> ID_EMAIL;
                        $nameuser = $fila -> Origin_User;
                        $affair = $fila -> Affair;
                        $message = $fila -> Message;
                        if($fila -> Email_Status == 0){
                            $form = '<form method="post" action="profile.php">
                            <input hidden vale="'.$id_email.'" name="id_email">
                            <input type="submit" value="Check">
                            </form>';
                        }else {
                            $form = '';
                        }
                        $message_styled = '<p id="emailmessage">'.$message.'</p>';
                        echo '
                        <li>
                            <div class="collapsible-header"><i class="material-icons">account_circle</i>From: '.$nameuser.'</div>
                            <div class="collapsible-body"><span style="color: white">
                            Subject: '.$affair.'<br><br>
                            Message: <br><br>
                            '.$message_styled.'
                            <br><br>
                            '.$form.'
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