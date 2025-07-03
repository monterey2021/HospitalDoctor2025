<nav class="navbar navbar-static-top" role="navigation">
    <button class="btn" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <img src=" <?php if (!empty($_SESSION['foto'])){ echo $_SESSION['foto'];}else{echo "img/iconosinperfil.svg";}?>" class="user-image" alt="">
            <span><?php echo $_SESSION['alias'];?></span>
    </button>
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasRightLabel">
                <?php echo $_SESSION['nombre_completo'];?>
            </h5>
            <div>
                <img src="<?php if(!empty($_SESSION['foto'])){ echo $_SESSION['foto'];}else{ echo "img/no_disponible.jpg";}?>" class="img-thumbnail" alt="User Image">
            </div>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <p>
                <?php echo $_SESSION['nombre_completo'];?>
                <small>Cargo: <?php if(!empty($_SESSION['cargo'])){ echo $_SESSION['cargo'];}else{ echo "No especificado";}?></small>
            </p>
            <div class="dropdown mt-3">
                <button class="btn btn-info dropdown-toggle" type="button" data-bs-toggle="dropdown">
                    <a href="/HospitalDoctor2025/perfil.php" class="btn btn-default">Perfil</a>
                </button>
                <button class="btn btn-danger dropdown-toggle" type="button" data-bs-toggle="dropdown">
                    <a href="/HospitalDoctor2025" class="btn btn-default">Salir</a>
                </button>
            </div>
        </div>
    </div>
</nav>