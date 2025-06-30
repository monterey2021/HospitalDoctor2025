<nav class="navbar navbar-expand-lg bg-body-tertiary">
      <div class="container-fluid">
        <a class="navbar-brand" href="/Agendamiento2024/menu.php">
          <img src="img/logo-menu.ico" alt="Logo"
            width="30"
            height="24"
            class="d-inline-block align-text-top"/>HOSPITAL</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" _msthidden="A" _mstaria-label="320099" _msthash="214">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a
                class="nav-link active"
                aria-current="page"
                href="#"
                _msttexthash="59059"
                _msthash="215"
                >Inicio</a
              >
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#" _msttexthash="72878" _msthash="216"
                >Enlace</a
              >
            </li>
            <li class="nav-item dropdown">
              <a
                class="nav-link dropdown-toggle"
                href="#"
                role="button"
                data-bs-toggle="dropdown"
                aria-expanded="false"
                _msttexthash="300144"
                _msthash="217"
              >
                Menú desplegable
              </a>
              <ul class="dropdown-menu" _msthidden="3">
                <li _msthidden="1">
                  <a
                    class="dropdown-item"
                    href="#"
                    _msttexthash="76466"
                    _msthidden="1"
                    _msthash="218"
                    >Action</a
                  >
                </li>
                <li _msthidden="1">
                  <a
                    class="dropdown-item"
                    href="#"
                    _msttexthash="232752"
                    _msthidden="1"
                    _msthash="219"
                    >Another action</a
                  >
                </li>
                <li><hr class="dropdown-divider" /></li>
                <li _msthidden="1">
                  <a
                    class="dropdown-item"
                    href="#"
                    _msttexthash="349791"
                    _msthidden="1"
                    _msthash="220"
                    >Something else here</a
                  >
                </li>
              </ul>
            </li>
            <li class="nav-item">
              <a
                class="nav-link disabled"
                aria-disabled="true"
                _msttexthash="227084"
                _msthash="221"
                >Deshabilitado</a
              >
            </li>
          </ul>
        </div>
      </div>
    </nav>
<!-- Header Navbar: style can be found in header.less -->
<nav class="navbar navbar-static-top" role="navigation">
    <!-- Sidebar toggle button-->
    <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
    </a>
    <!-- Menu emergente derecho -->
    <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">

            <!-- User Account: style can be found in dropdown.less -->
            <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <img src="<?php if(!empty($_SESSION['foto'])){ echo $_SESSION['foto'];}else{ echo "img/no_disponible.jpg";}?>" class="user-image" alt="User Image">
                    <span class="hidden-xs"><?php echo $_SESSION['alias'];?></span>
                </a>
                <ul class="dropdown-menu">
                    <!-- Imagen de Usuario -->
                    <li class="user-header">
                        <img src="<?php if(!empty($_SESSION['foto'])){ echo $_SESSION['foto'];}else{ echo "img/no_disponible.jpg";}?>" class="img-circle" alt="User Image">
                        <p>
                            <?php echo $_SESSION['nombre_completo'];?>
                            <small>Cargo: <?php if(!empty($_SESSION['cargo'])){ echo $_SESSION['cargo'];}else{ echo "No especificado";}?></small>
                        </p>
                    </li>

                    <!-- acciones dentro del menu emergente-->
                    <li class="user-footer">
                        <div class="pull-left">
                            <a href="/Agendamiento2024/perfil.php" class="btn btn-default">Perfil</a>
                        </div>
                        <div class="pull-right">
                            <a href="/Agendamiento2024" class="btn btn-default">Salir</a>
                        </div>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</nav>