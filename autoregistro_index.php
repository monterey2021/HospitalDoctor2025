<?php
session_start();
if ($_SESSION){
    session_destroy();
}
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Autoregistro</title>
        <link rel="shortcut icon" href="img/icono.ico" type="image/x-icon">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="css/estilos.css"/>
    </head>
    <body>
        <?php
        echo 'Proximamente...';
        ?>
    </body>
</html>