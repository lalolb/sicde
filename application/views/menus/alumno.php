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
        <li class="treeview">
          <a href="#">
            <i class="fa fa-user"></i>
            <span>Datos Personales</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo site_url('/Paginas/verPerfil/')?>"><i class="fa fa-circle-o"></i>Datos generales</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i>Domicilio</a></li>
          </ul>
        </li>
        <!-- Para que un menu se encuentre abierto se utiliza la clase treeview active-->
        <li class="treeview">
          <a href="#">
            <i class="fa fa-book"></i> <span>Datos Académicos</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo site_url('/Paginas/trayectoria/')?>"><i class="fa fa-circle-o"></i>Trayectoria académica</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i>Análisis por ciclo</a></li>
          </ul>
        </li>
    </section>
    <!-- /.sidebar -->
  </aside>