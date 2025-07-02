<nav class="navbar navbar-static-top" role="navigation">
    <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
            <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <img src="<?php if(!empty($_SESSION['foto'])){ echo $_SESSION['foto'];}else{ echo "img/no_disponible.jpg";}?>" class="user-image" alt="User Image">
                    <span class="hidden-xs"><?php echo $_SESSION['alias'];?></span>
                </a>
                <ul class="dropdown-menu">
                    <li class="user-header">
                        <img src="<?php if(!empty($_SESSION['foto'])){ echo $_SESSION['foto'];}else{ echo "img/no_disponible.jpg";}?>" class="img-circle" alt="User Image">
                        <p>
                            <?php echo $_SESSION['nombre_completo'];?>
                            <small>Cargo: <?php if(!empty($_SESSION['cargo'])){ echo $_SESSION['cargo'];}else{ echo "No especificado";}?></small>
                        </p>
                    </li>
                    <li class="user-footer">
                        <div class="pull-left">
                            <a href="/HospitalDoctor2025/perfil.php" class="btn btn-default">Perfil</a>
                        </div>
                        <div class="pull-right">
                            <a href="/HospitalDoctor2025" class="btn btn-default">Salir</a>
                        </div>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</nav>