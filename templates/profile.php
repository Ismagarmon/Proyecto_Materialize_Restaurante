<?php

session_cache_limiter('nocache,private');
session_name('newuser');
session_start();
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
    <script type="module" src="../js/app.js"></script>

    <link rel="icon" type="image/png" href="../img/RM.png" />

</head>

<body>
    <nav>

    </nav>

    <main>
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