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
                <li><a class="btn-floating red"><i class="medium material-icons">home</i></a></li>
                <li><a class="btn-floating yellow darken-1"><i class="medium material-icons">format_quote</i></a></li>
                <li><a class="btn-floating green"><i class="medium material-icons">publish</i></a></li>
                <li><a class="btn-floating blue"><i class="medium material-icons">attach_file</i></a></li>
            </ul>
        </div>
    </main>
</body>

</html>