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
        <title>Iniciar sesión</title>
        <link rel="shortcut icon" href="img/icono.ico" type="image/x-icon">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="css/estilos.css"/>
    </head>
    <body>
        <div class="cont-principal" id="acceso">
            <div class="cont-logo" id="logo-acceso">
                <img src="img/acceso.png" alt="logo de acceso" class="img-responsive"/>
            </div>
            <div class="cont-formdeacceso" id="form-acceso">
                <form class="acceso-usuario" action="acceso.php" method="post">
                    <div class="cont-titulodeacceso" id="inicio">
                        <h1>Iniciar Sesión</h1>
                    </div>
                    <div class="cont-cajadetexto">
                        <input type="text" name="usuario" required="" autofocus="" placeholder="Nombre de usuario"/>
                        <img src="img/user.png" alt="usuario" class="icono-input" />
                    </div>
                    <div class="cont-cajadetexto">
                        <input type="password" id="input-contraseña" name="contraseña" placeholder="Contraseña"/>
                        <button type="button" class="toggle-password" onclick="mostrarContraseña()">
                            <img src="img/eye-open.png" alt="mostrar" id="icono-ojo" />
                        </button>
                    </div>
                    <button class="cont-botonacceso" id="boton-acceso" type="submit">Acceder</button>
                    <div class="cont-contraseña">
                        <p class="help-block"><a href="/Agendamiento2024/autoregistro_index.php">Registrar</a></p>
                        <p class="help-block"><a href="/Agendamiento2024/recuperar_index.php">¿Olvidaste tu contraseña?</a></p>
                    </div>
                        <?php if (!empty($_SESSION['error'])) { ?>
                    <div class="alerta-flotante">
                        <img src="img/alerta.png" alt="error" class="icono-alerta" />
                            <?php echo $_SESSION['error']; ?>
                    </div>
                        <?php } ?>
                </form>
            </div>
        </div>
        <script src="js/jquery-1.12.2.min.js"></script>
        <script src="js/scripts.js"></script>
    </body>
</html>
