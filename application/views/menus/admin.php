 <!-- =============================================== -->
  <!-- Aqui se maneja todo lo del menú lateral -->
  <!-- Left side column. contains the sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo base_url() ?>assets/dist/img/avatar04.png" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php echo $nombre?></p>
        </div>
      </div>
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <!-- Nombre de los iconos http://fontawesome.io/icons/ -->
      <ul class="sidebar-menu">
        <li class="header">MENU PRINCIPAL</li>
        <!-- OPCIONES PARA ALUMNOS -->
        <li class="treeview">
          <a href="#">
            <i class="fa fa-child"></i>
            <span>Alumnos</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo site_url(); ?>/Paginas/crearAlumno"><i class="fa fa-circle-o"></i>Alta</a></li>
            <li><a href="<?php echo site_url(); ?>/Paginas/alumnoBuscar/Modificar"><i class="fa fa-circle-o"></i>Modificar</a></li>
            <li><a href="<?php echo site_url(); ?>/Paginas/alumnoConsultar"><i class="fa fa-circle-o"></i>Consultar</a></li>
            <li><a href="<?php echo site_url(); ?>/Paginas/alumnoBuscar/Eliminar"><i class="fa fa-circle-o"></i>Eliminar</a></li>
          </ul>
        </li>
        <!-- OPCIONES PARA PROFESORES -->
        <li class="treeview">
          <a href="#">
            <i class="fa fa-user-secret"></i>
            <span>Profesores</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo site_url(); ?>/Paginas/profesorCrear"><i class="fa fa-circle-o"></i>Alta</a></li>
            <li><a href="<?php echo site_url(); ?>/Paginas/profesorBuscar/Modificar"><i class="fa fa-circle-o"></i>Modificar</a></li>
            <li><a href="<?php echo site_url(); ?>/Paginas/profesorConsultar"><i class="fa fa-circle-o"></i>Consultar</a></li>
            <li><a href="<?php echo site_url(); ?>/Paginas/profesorBuscar/Eliminar"><i class="fa fa-circle-o"></i>Eliminar</a></li>
          </ul>
        </li>
        <!-- OPCIONES PARA MATERIAS -->
        <li class="treeview">
          <a href="#">
            <i class="fa fa-book"></i>
            <span>Materias</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo site_url(); ?>/Paginas/materiaCrear"><i class="fa fa-circle-o"></i>Alta</a></li>
            <li><a href="<?php echo site_url(); ?>/Paginas/materiaModificar"><i class="fa fa-circle-o"></i>Modificar</a></li>
            <li><a href=""><i class="fa fa-circle-o"></i>Consultar</a></li>
            <li><a href=""><i class="fa fa-circle-o"></i>Eliminar</a></li>
          </ul>
        </li>
        <!-- OPCIONES PARA GRUPOS -->
        <li class="treeview">
          <a href="#">
            <i class="fa fa-users"></i>
            <span>Grupos</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo site_url(); ?>/Paginas/grupoCrear"><i class="fa fa-circle-o"></i>Alta</a></li>
            <li><a href="<?php echo site_url(); ?>/Paginas/grupoModificar"><i class="fa fa-circle-o"></i>Modificar</a></li>
            <li><a href=""><i class="fa fa-circle-o"></i>Consultar</a></li>
            <li><a href=""><i class="fa fa-circle-o"></i>Eliminar</a></li>
          </ul>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>