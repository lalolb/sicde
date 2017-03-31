  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Materias
      </h1>
    </section>
    <!-- creditos = ht*2 +hp >

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Eliminar una materia</h3>
        </div>  
        <div class="box-body">
        <div class="alert alert-danger alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <h4><i class="icon fa fa-warning"></i> ¡Advertencia!</h4>
                Al eliminar la materia, los grupos relacionados a ella serán eliminados también.
          </div>
          <form class="form-horizontal" action="<?php echo site_url()?>/Materias/eliminarMateria" method="post">
            <div class="form-group">
              <label for="nombre" class="col-sm-2 control-label">Nombre</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre" value="<?php echo $materia['nombre'] ?>" readonly>
                </div>
            </div>

           <?php echo "<input type=\"hidden\" name=\"claveC\" id=\"claveC\" value=\"".$materia['clave']."\">"; ?>
            <!-- /.form group -->
            <div class="form-group">
              <label for="apaterno" class="col-sm-2 control-label">Horas teóricas</label>
                <div class="col-sm-8">
                    <input type="number" class="form-control" onkeyup= "calcula()" id="hteoricas" name="hteoricas" placeholder="Horas teóricas"  value= "<?php echo $materia['hrs_teoricas'] ?>" readonly>
                </div>
            </div>
            <!-- /.form group -->
            <div class="form-group">
              <label for="amaterno" class="col-sm-2 control-label">Horas prácticas</label>
                <div class="col-sm-8">
                    <input type="number" class="form-control" onkeyup= "calcula()" id="hpracticas" name="hpracticas" placeholder="Horas prácticas" value ="<?php echo $materia['hrs_practicas'] ?>" readonly>
                </div>
            </div>

            <!-- /.form group -->
           <div class="form-group">
              <label for="amaterno" class="col-sm-2 control-label">Créditos</label>
                <div class="col-sm-1">
                    <input type="text" class="form-control"  id="creditos" name="creditos" placeholder="" value="<?php echo $materia['creditos'] ?>" readonly>
                </div>
            </div>

            
        <div class="form-group">
                 <label for="amaterno" class="col-sm-2 control-label">Carrera</label>
                 <div class="col-sm-5">
                  <select name="carrera" class="form-control" readonly>

                
                      <?php
                        foreach ($carreras as $key => $carrera) {
                          if($carrera['clave']==$materia['cve_carrera']){
                             echo "<option value='".$carrera['clave']."'>".$carrera['nombre']."</option>";
                             
                          }
                        }
                      ?>
                  </select>
                  </div>
      </div>            
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
          <div>
          <button type="submit" class="btn btn-danger pull-right">Eliminar</button>
        </div>
        <!-- /.box-footer -->
        </form>
      </div>
      <!-- /.box -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

<script type="text/javascript"> 
function calcula(){
  var hp = parseInt($('#hpracticas').val());
  var ht = parseInt($('#hteoricas').val());
  var creditos = (ht*2)+hp;
  console.log(creditos);
  $('#creditos').val(creditos);
}
</script>