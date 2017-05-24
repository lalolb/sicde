  <!-- =============================================== -->
  <!-- Página o contenido principal -->
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Cambiar foto
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
      <?php
        if ($error != null) {
          echo "<div class=\"alert alert-danger alert-dismissible\">
                  <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>
                  <h4><i class=\"icon fa fa-ban\"></i> Error!</h4>
                  El archivo que seleccionaste no tiene el formato o tamaño adecuado.
                </div>";
        }
        
      ?>
      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Cambiar foto de perfil</h3>
        </div>
        <!-- form start -->
        <form class="form" action="<?php echo site_url('/Usuarios/cambiarFoto')?>" method="post" enctype="multipart/form-data">
          <div class="box-body">
            <div class="form-group">
                  <label for="foto">Selecciona la foto a subir</label>
                  <input type="file" id="foto" name="foto" required>
                  <p class="help-block">La foto debe de ser en formato JPG.</p>
            </div>
          </div>
          <!-- /.box-body -->
          <div class="box-footer">
            <button type="submit" class="btn btn-info pull-right">Guardar</button>
          </div>
          <!-- /.box-footer -->
        </form>
        <!-- /.form -->
      </div>
      <!-- /.box -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->