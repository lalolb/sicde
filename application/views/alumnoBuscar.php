   <!-- Select2 -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/select2/select2.min.css">
  <!-- =============================================== -->
  <!-- Página o contenido principal -->
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Alumnos
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title"><?php echo $accion ?> un alumno</h3>
        </div>
        <!-- form start -->
        <form class="form-horizontal" method="get" action="<?php echo site_url('/Paginas/alumno'.$accion)?>" method="post">
          <div class="box-body">
            <div class="form-group">
              <label for="alumno" class="col-sm-2 control-label">Clave o Nombre del alumno</label>
                <div class="col-sm-10">
                  <select name="alumno" id="alumno" class="form-control select2" style="width: 100%;">
                  <?php
                    foreach ($alumnos as $key => $alumno) {
                      echo "<option value=\"".$alumno['clave']."\">".$alumno['clave']." - ".$alumno['nombre']." ".$alumno['paterno']." ".$alumno['materno']."</option>";
                    }
                  ?>
                  </select>
                </div>
            </div>
            <!-- /.form group -->
          </div>
          <!-- /.box-body -->
          <div class="box-footer">
            <button type="submit" class="btn btn-info pull-right">Buscar</button>
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

  <!-- Select2 -->
<script src="<?php echo base_url()?>assets/plugins/select2/select2.full.min.js"></script>

<script>
  $(function () {
    //Initialize Select2 Elements
    $(".select2").select2();
  });
</script>