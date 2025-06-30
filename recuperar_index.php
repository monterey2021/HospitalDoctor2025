<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Restablecer contraseña</title>
        <link rel="shortcut icon" href="img/icono.ico" type="image/x-icon">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="css/estilos.css"/>
    </head>
<body>
    <div class="cont-formrecuperar" id="recuperar">
        <form class="recuperar_contraseña" action="recuperar_contrasena.php" method="post">
            <div class="cont-titulodeacceso" id="inicio">
                <h1>Ingrese su correo electrónico</h1>
            </div>
            <div class="cont-cajadetexto">
                <input type="text" name="email" required="" autofocus="" placeholder="Correo Electrónico"/>
                <img src="img/email.png" alt="email" class="icono-input" />
            </div>
            <button class="cont-botonacceso" id="boton-acceso" type="submit">Recuperar Contraseña</button>
        </form>
    </div>
</body>
</html>
