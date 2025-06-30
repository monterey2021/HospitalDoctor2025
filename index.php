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
        <title>Acceso</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <style>
            body {
                /*padding-top: 100px;
                padding-bottom: 100px;*/
                display: flex;
                justify-content: center;
                align-items: center;
                height: 100vh;
                margin: 0;
                padding: 0;
                background-color: #f8f9fa;
            }
            .acceso-usuario {
                max-width: 330px;
                padding: 15px;
                margin: 0 auto;
            }
            #sha {
                background-color: white;
                max-width: 340px;
                box-shadow: 0px 0px 18px 0px rgba(48,50,50,0.48);
                border-radius: 6%;
            }
            #logo-acceso {
                margin: 0px auto 10px;
                display: block;
                border-radius: 50%;
            }
            .acceso-usuario {
                font-family: 'Lucida Sans Unicode';
            }
            recuperar {
                /*padding-top: 100px;
                padding-bottom: 100px;*/
                display: flex;
                justify-content: center;
                align-items: center;
                height: 100vh;
                margin: 0;
                padding: 0;
                background-color: #f8f9fa;
            }
        </style>
    </head>
    <body>
        <div class="container well" id="sha">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <img src="img/acceso.png" alt="logo-acceso" class="img-responsive" id="logo-acceso"/>
                </div>
            </div>
            <form class="acceso-usuario" action="acceso.php" method="post">
                <div class="form-group has-feedback">
                    <input type="text" class="form-control" name="usuario" required="" autofocus="" placeholder="Usuario"/>
                    <span class="glyphicon glyphicon-user form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                    <input type="password" class="form-control" name="contraseña" required="" placeholder="Contraseña"/>
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                </div>
                <button class="btn btn-lg btn-primary btn-block" type="submit">Iniciar Sesión</button>
                <div class="checkbox" style="text-align: center;">
                    <label class="checkbox">
                        <input type="checkbox" value="1" name="recordarsesion"/>Recordar mi sesion
                    </label>
                    <p class="help-block"><a href="/Agendamiento2024/recuperar_index.php">¿Olvidaste tu contraseña?</a></p>
                </div>
                <?php
                if (!empty($_SESSION['error'])){?>
                <div class="alert alert-danger" role="alert">
                    <span class="glyphicon glyphicon-exclamation-sign"></span>
                    <?php echo $_SESSION['error']; ?>
                    </div>
                <?php }?>
            </form>
        </div>
        <script src="js/jquery-1.12.2.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </body>
</html>
