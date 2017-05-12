  <!-- =============================================== -->
  <!-- Página o contenido principal -->
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Datos de domicilio
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Domicilio</h3>
          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fa fa-minus"></i></button>
          </div>
        </div>
        <div class="box-body">
          <div class="col-md-6">
            <p><strong>Calle:</strong> <?php echo $humano['calle'] ?></p>
            <p><strong>Colonia:</strong> <?php echo $humano['colonia'] ?></p>
            <p><strong>CP:</strong> <?php echo $humano['cp'] ?></p>
            <p><strong>Teléfono:</strong> <?php echo $humano['telefono'] ?></p>
            <p><strong>País:</strong> <?php echo $humano['pais'] ?></p>
            <p><strong>Estado:</strong> <?php echo $humano['estado'] ?></p>
            <p><strong>Municipio:</strong> <?php echo $humano['municipio'] ?></p>
          </div>
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
              <a href="<?php echo site_url('Paginas/domicilioModificar/'.$humano['clave']); ?>" class="btn btn-primary pull-right">Editar</a>
        </div>
          <!-- /.box-footer -->
      </div>
      <!-- /.box -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
