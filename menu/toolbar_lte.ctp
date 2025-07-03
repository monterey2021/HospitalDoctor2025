<?php require ("clases/conexion.php"); ?>

<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?php if(!empty($_SESSION['foto'])){ echo $_SESSION['foto'];}else{ echo "img/no_disponible.jpg";}?>" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p><?php echo $_SESSION['nombre_completo'];?></p>
                <a href="#"><i class="fa fa-circle text-success"></i>En linea</a>
            </div>
        </div>
        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Buscar...">
                <span class="input-group-btn">
                    <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i></button>
                </span>
            </div>
        </form>
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
           <li class="header">MENU PRINCIPAL</li> 
            <li><a href="/Agendamiento2024/menu.php">
                    <span class="glyphicon glyphicon-home"></span> <strong>INICIO</strong></a></li>
        <?php
        $modulos=consultas::get_datos("select * from modulos order by id_modulo");
        foreach ($modulos as $modulo) { ?>
            <li class="treeview">
                <a href="">
                    <i class="fa fa-list"></i><span><?php echo $modulo['nombremod']?></span> <i class="fa fa-angle-left pull-right"></i>
                </a>
        <?php
        $paginas=consultas::get_datos("select * from paginas a join modulos b on a.id_modulo=b.id_modulo where nombremod='".$modulo['nombremod']."' order by nombrepag");
        ?>
                <ul class="treeview-menu">
                    <?php foreach ($paginas as $pagina) { ?>
                    <li><a href="<?php echo $pagina['enlace']?>"><i class="fa fa-circle-o"></i> <?php echo $pagina['nombrepag']?></a></li>
                    <?php };?>
                </ul>
            </li>
 <?php } ?>
        </ul>
    </section>
</aside>