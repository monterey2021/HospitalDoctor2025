<?php
session_start();
if ($_SESSION){
    session_destroy();
}
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Iniciar Sesión</title>
        <link rel="shortcut icon" href="img/icono.ico" type="image/x-icon">
        <!-- <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/> -->
        <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> -->
        <link href="https://cdn.lineicons.com/4.0/lineicons.css" rel="stylesheet" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
              integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <link rel="stylesheet" href="menu/style.css">
    </head>
    <body>
        <section id="login">
            <div class="container-fluid">
                <div class="row vh-100">
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
                                <div class="card-body pt-0">
                                    <form action="acceso.php" method="post" class="row g-3">
                                        <div class="col-md-12">
                                            <label for="Usuario" class="form-label">Usuario</label>
                                            <span class="text-danger">*</span>
                                            <input type="text" class="form-control rounded-0" name="usuario" placeholder="Ingrese su usuario"/>
                                        </div>
                                        <div class="col-md-12">
                                            <label for="Password" class="form-label">Contraseña</label>
                                            <span class="text-danger">*</span>
                                            <input type="password" class="form-control rounded-0" name="contraseña" aria-describedby="passwordHelpBlock" placeholder="Ingresa tu contraseña"/>
                                        </div>
                                        <div class="d-flex justify-content-between">
                                            <a href="#" class="f-password">
                                                <u>¿Olvidaste tu contraseña</u>
                                            </a>
                                        </div>
                                        <div class="col-md-12">
                                            <button class="btn border-0" type="submit">Acceder</button>
                                        </div>
                                            <?php
                                            if (!empty($_SESSION['error'])){?>
                                        <div class="alert alert-danger" role="alert">
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
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
        <script src="js/jquery-1.12.2.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </body>
</html>
