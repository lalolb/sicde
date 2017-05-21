  <style type="text/css">
    .foto{
      max-width: 250px;
      max-height: 250px;
    }
  </style>
  <!-- =============================================== -->
  <!-- Página o contenido principal -->
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Datos personales
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Perfil</h3>
          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fa fa-minus"></i></button>
          </div>
        </div>
        <div class="box-body">
          <div class="col-md-4">
            <img src="<?php echo base_url('uploads/'.$foto) ?>" class="img-circle foto" alt="User Image">
            <a href="<?php echo site_url('Paginas/cambiarFoto') ?>" class="btn btn-primary">Cambiar</a>
          </div>
          <div class="col-md-4">
          <p><strong>No. cuenta:</strong> <?php echo $clave ?></p>
            <p><strong>Nombre:</strong> <?php echo $humano['nombre'] ?></p>
            <p><strong>Apellido paterno:</strong> <?php echo $humano['paterno'] ?></p>
            <p><strong>Apellido materno:</strong> <?php echo $humano['materno'] ?></p>
            <p><strong>Fecha de nacimiento:</strong> <?php echo $humano['fecha_nacimiento'] ?></p>
            <p><strong>RFC:</strong> <?php echo $humano['RFC'] ?></p>
            <p><strong>CURP:</strong> <?php echo $humano['curp'] ?></p>
            <p><strong>Correo:</strong> <?php echo $humano['correo_personal'] ?></p>
          </div>

          <div class="col-md-4">
          <p><strong>País de nacionalidad:</strong> <?php echo $humano['pais'] ?></p>
            <p><strong>País de nacimiento:</strong> <?php echo $humano['pais_nacimiento'] ?></p>
            <p><strong>Estado de nacimiento:</strong> <?php echo $humano['estado'] ?></p>
            <p><strong>Municipio de nacimiento:</strong> <?php echo $humano['municipio'] ?></p>
            <p><strong>Tipo de sangre:</strong> <?php echo $humano['tipo_sangre'] ?></p>
            <p><strong>IMSS:</strong> <?php echo $humano['clave_imss'] ?></p>
            <p><strong>Grupo indígena:</strong> <?php echo $humano['grupo_indigena'] ?></p>
            <p><strong>Dialecto indígena:</strong> <?php echo $humano['dialecto_indigena'] ?></p>
          </div>
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
            <form method="get" action="<?php echo site_url('Paginas/'.$tipo.'Modificar'); ?>">
              <input type="hidden" name="<?php echo $tipo ?>" value="<?php echo $clave; ?>">
              <button type="submit" class="btn btn-primary pull-right">Editar</button>
            </form>
        </div>
          <!-- /.box-footer -->
      </div>
      <!-- /.box -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
