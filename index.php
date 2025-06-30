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
        <title>Iniciar Sesión</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" href="img/icono.ico" type="image/x-icon">
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>
        <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">-->
        <link href="https://cdn.lineicons.com/4.0/lineicons.css" rel="stylesheet" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
              integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    </head>
    <body>
        <section id="login">
            <div class="container-fluid">
                <div class="row vh-100">
            <div class="container well" id="sha">
                <div class="col-5 d-none d-lg-block position-relative">
                    <div class="bg-image"></div>
                </div>
                <div class="col-sm-10 col-lg-6 px-md-5 align-self-center mx-auto">
                    <div class="text-center mb-4">
                        <h6>Inicia sesión con tu cuenta</h6>
                    </div>
                    <div class="card border-0 round-3 px-md-5 py-2">
                        <div class="card-header bg-white border-bottom-0 text-center">
                                <img src="img/Hospital.png" alt="">
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
                    </div>
                    </div>
                    </div>
                </div>
        </section>
        <script src="js/jquery-1.12.2.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </body>
</html>
