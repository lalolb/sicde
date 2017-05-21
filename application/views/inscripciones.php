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
          <h3 class="box-title">Inscripciones</h3>
        </div>
        <!-- form start -->
        <form class="form-horizontal" method="post" action="<?php echo site_url('/Alumnos/inscribirAlumno')?>">
          <div class="box-body">
            <div class="form-group">
              <label for="alumno" class="col-sm-3 control-label">Clave o Nombre del alumno</label>
                <div class="col-sm-9">
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

            <div class="form-group">
              <label for="materia" class="col-sm-3 control-label">Grupo</label>
                <div class="col-sm-9">
                    <select id="grupo" name="grupo" class="form-control select2">
                      <?php
                        foreach ($grupos as $key => $grupo) {
                          
                               echo "<option value='".$grupo['clave']."'>".$grupo['clave']." - ".$grupo['materia']." (".$grupo['nombre']." ".$grupo['paterno']." ".$grupo['materno'].")</option>";
                           
                            }
                      ?>
                    </select>
                </div>
            </div>

            <div class="form-group">
              <label for="semestre" class="col-sm-3 control-label">Semestre</label>
                <div class="col-sm-9">
                  <select name="semestre" id="semestre" class="form-control select2" style="width: 100%;">
                  <?php
                    foreach ($semestres as $key => $semestre) {
                      echo "<option value=\"".$semestre['clave']."\">".$semestre['anio'].$semestre['letra']."</option>";
                    }
                  ?>
                  </select>
                </div>
            </div>
            <!-- /.form group -->
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

<!-- Select2 -->
<script src="<?php echo base_url()?>assets/plugins/select2/select2.full.min.js"></script>

<script>
  $(function () {
    //Initialize Select2 Elements
    $(".select2").select2();
  });
</script>