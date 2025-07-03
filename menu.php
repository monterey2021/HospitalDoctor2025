<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Menú Principal</title>
        <link rel="shortcut icon" href="img/icono.ico" type="image/x-icon">
        <link rel="stylesheet" href="menu/style.css">
            <?php
            session_start();
            require 'menu/css_lte.ctp'
            ?>
    </head>
    <body class="p-3 m-0 border-0 bd-example m-0 border-0">
        <div class="wrapper">
            
            <?php require 'menu/toolbar_lte.ctp';?>
            <div class="content-wrapper">
            </div>
                <?php require 'menu/footer_lte.ctp'; ?><!--ARCHIVOS JS-->  
            </div>                  
        <?php require 'menu/js_lte.ctp'; ?>
    </body>
</html>
