
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Calificaciones
      </h1>
    </section>
    <!-- creditos = ht*2 +hp -->

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Asignar Calificación - <?php echo $alumno['nombre']." ".$alumno['paterno']." ".$alumno['materno'] ?></h3>
        </div>  
        <div class="box-body">
          <form class="form-horizontal" action="<?php echo site_url()?>/Calificaciones/calificar" method="post">
          <input type="hidden" name="clave" value="<?php echo $calificaciones['clave'] ?>">
          <div class="form-group">
            <label for="examen" class="col-sm-4 control-label">Examen a calificar</label>
              <div class="col-sm-4">
                <select class="form-control" id="examen" name="examen" required>
                <?php 
                    if (($calificaciones['ordinario']=='--')) {
                      echo '<option value="ordinario">Ordinario</option>';
                    }

                    if (($calificaciones['extra']=='--')) {
                      echo '<option value="extra">Extra</option>';
                    }

                    if (($calificaciones['titulo']=='--')) {
                      echo '<option value="titulo">Título</option>';
                    }
                ?>
                </select>
              </div>
          </div>

          <div class="form-group">
            <label for="calificacion" class="col-sm-4 control-label">Calificación</label>
              <div class="col-sm-4">
                <input type="text" class="form-control" id="calificacion" name="calificacion" placeholder="Calificación" value="<?php echo $calificaciones['extra'] ?>" required>
              </div>
          </div>
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
          <button type="submit" class="btn btn-info pull-right">Guardar</button>
          </form>
        </div>
        <!-- /.box-footer -->   
      </div>
      <!-- /.box -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

<script>

</script>