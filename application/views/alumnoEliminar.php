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
          <h3 class="box-title">Eliminar un alumno</h3>
        </div>
        <!-- form start -->
        <form class="form-horizontal" action="<?php echo site_url()?>/Alumnos/eliminaAlumno" method="post">
          <div class="box-body">
          <h3>Datos generales</h3>
            <div class="form-group">
              <label for="nombre" class="col-sm-2 control-label">Nombre</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="nombre" name="nombreA" placeholder="Nombre" value="<?php echo $alumno['nombre'] ?>" readonly>
                </div>
            </div>
            <!-- /.form group -->
            <input type="hidden" name="cve_datos" value="<?php echo $alumno['clave'] ?>">
            <input type="hidden" name="cve_alumno" value="<?php echo $clave_alumno ?>">
            <input type="hidden" name="datos_domicilio" value="<?php echo $alumno['datos_domicilio'] ?>">

            <div class="form-group">
              <label for="apaterno" class="col-sm-2 control-label">Apellido Paterno</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="apaterno" name="apaterno" placeholder="A. Paterno"  value="<?php echo $alumno['paterno'] ?>" readonly>
                </div>
            </div>
            <!-- /.form group -->

            <div class="form-group">
              <label for="amaterno" class="col-sm-2 control-label">Apellido Materno</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="amaterno" name="amaterno" placeholder="A. Materno" value="<?php echo $alumno['materno'] ?>" readonly>
                </div>
            </div>
            <!-- /.form group -->

            <div class="form-group">
              <label for="nacimiento" class="col-sm-2 control-label">Fecha de nacimiento</label>
                <div class="col-sm-10">
                    <input name="fecha_nacimiento" type="text" class="form-control" data-inputmask="'alias': 'yyyy/mm/dd'" data-mask value="<?php echo $alumno['fecha_nacimiento'] ?>" readonly>
                </div>
            </div>
            <!-- /.form group -->

            <div class="form-group">
              <label class="col-sm-2 control-label">Género</label>
              <div class="col-sm-2">
                <div class="radio">
                  <label>
                    <input type="radio" name="genero" value="<?php echo $alumno['genero']?>" checked>
                    <?php if($alumno['genero']=='M'){
                      echo "Masculino";
                      }else{
                        echo "Femenino";
                      }?>
                  </label>
                </div>
              </div>
            </div>
            <!-- /.form group -->

            <div class="form-group" id="divRFC">
              <label for="rfc" class="col-sm-2 control-label">RFC</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" id="rfc" name="rfc" placeholder="RFC" onkeyup="validaRFC()" value="<?php echo $alumno['RFC'] ?>" readonly>
                </div>
                <span id="help-block-RFC" class="help-block col-sm-4"></span>
            </div>
            <!-- /.form group -->

            <div class="form-group" id="divCURP">
              <label for="curp" class="col-sm-2 control-label">CURP</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" id="curp" name="curp" placeholder="CURP" onkeyup="validaCURP()" value="<?php echo $alumno['curp'] ?>" readonly>
                </div>
                <span id="help-block-CURP" class="help-block col-sm-4"></span>
            </div>
            <!-- /.form group -->

            <div class="form-group">
              <label for="correo" class="col-sm-2 control-label">E-mail</label>
                <div class="col-sm-10">
                    <input id="correo" name="correo" type="email" class="form-control" placeholder="E-mail" value="<?php echo $alumno['correo_personal'] ?>" readonly>
                </div>
            </div>
            <!-- /.form group -->

            <div class="form-group">
              <label for="carrera" class="col-sm-2 control-label">Carrera</label>
                <div class="col-sm-10">
                    <input id="carrera" name="carrera" type="text" class="form-control" value="<?php echo $carrera['nombre'] ?>" readonly>
                </div>
            </div>
            <!-- /.form group -->
          </div>
          <!-- /.box-body -->
          <div class="box-footer">
            <button type="submit" class="btn btn-danger pull-right">Eliminar</button>
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