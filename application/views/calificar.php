
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
            <label for="ordinario" class="col-sm-4 control-label">Ordinario</label>
              <div class="col-sm-4">
                <input type="text" class="form-control" id="ordinario" name="ordinario" placeholder="Ordinario" value="<?php echo $calificaciones['ordinario'] ?>">
              </div>
          </div>

          <div class="form-group">
            <label for="extra" class="col-sm-4 control-label">Extra</label>
              <div class="col-sm-4">
                <input type="text" class="form-control" id="extra" name="extra" placeholder="Extra" value="<?php echo $calificaciones['extra'] ?>">
              </div>
          </div>

          <div class="form-group">
            <label for="titulo" class="col-sm-4 control-label">Título</label>
              <div class="col-sm-4">
                <input type="text" class="form-control" id="titulo" name="titulo" placeholder="Título" value="<?php echo $calificaciones['titulo'] ?>">
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