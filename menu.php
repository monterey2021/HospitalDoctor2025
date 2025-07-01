<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Menú Principal</title>
        <link rel="shortcut icon" href="img/icono.ico" type="image/x-icon">
        <link href="https://cdn.lineicons.com/4.0/lineicons.css" rel="stylesheet" />
        <link rel="stylesheet" href="menu/style.css">
            <?php
            session_start();
            require 'menu/css_lte.ctp'
            ?>
    </head>
    <body class="hold-transition skin-blue sidebar-mini">
        <div class="wrapper">
            <?php require 'menu/header_lte.ctp'; ?>
            <?php require 'menu/toolbar_lte.ctp';?>
            <div class="content-wrapper">
                
            </div>
                  <?php require 'menu/footer_lte.ctp'; ?><!--ARCHIVOS JS-->  
            </div>                  
        <?php require 'menu/js_lte.ctp'; ?><!--ARCHIVOS JS-->
    </body>
    <script src="js/scripts.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/js/adminlte.min.js"></script>
</html>


