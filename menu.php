<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Agendamiento</title>
        <link rel="shortcut icon" href="img/icono.ico" type="image/x-icon">
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
            <?php
            session_start();/*Reanudar sesion*/
            require 'menu/css_lte.ctp'
            ?>
    </head>
    <body class="p-3 m-0 border-0 bd-example m-0 border-0">
        <div class="wrapper">
            <?php require 'menu/navbar_lte.ctp'; ?><!--CABECERA PRINCIPAL-->
            <?php require 'menu/toolbar_lte.ctp';?><!--MENU PRINCIPAL-->
            <div class="content-wrapper">
                
            </div>
                  <?php require 'menu/footer_lte.ctp'; ?><!--ARCHIVOS JS-->  
            </div>                  
        <?php require 'menu/js_lte.ctp'; ?><!--ARCHIVOS JS-->
    </body>
    <script src="js/scripts.js"></script>
</html>


