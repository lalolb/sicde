  <!-- =============================================== -->
  <!-- Página o contenido principal -->
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Profesores
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Eliminar un profesores</h3>
        </div>
        <!-- form start -->
        <form class="form-horizontal" action="<?php echo site_url()?>/Profesores/eliminaProfesor" method="post">
          <div class="box-body">
          <div class="alert alert-danger alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <h4><i class="icon fa fa-warning"></i> ¡Advertencia!</h4>
                Al eliminar un profesor todos los grupos asociados serán eliminados también.
          </div>
          <h3>Datos generales</h3>
            <div class="form-group">
              <label for="nombre" class="col-sm-2 control-label">Nombre</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="nombre" name="nombreA" placeholder="Nombre" value="<?php echo $profesor['nombre'] ?>" readonly>
                </div>
            </div>
            <!-- /.form group -->
            <input type="hidden" name="cve_datos" value="<?php echo $profesor['clave'] ?>">
            <input type="hidden" name="cve_profesor" value="<?php echo $rfc_profesor ?>">
            <input type="hidden" name="datos_domicilio" value="<?php echo $profesor['datos_domicilio'] ?>">

            <div class="form-group">
              <label for="apaterno" class="col-sm-2 control-label">Apellido Paterno</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="apaterno" name="apaterno" placeholder="A. Paterno"  value="<?php echo $profesor['paterno'] ?>" readonly>
                </div>
            </div>
            <!-- /.form group -->

            <div class="form-group">
              <label for="amaterno" class="col-sm-2 control-label">Apellido Materno</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="amaterno" name="amaterno" placeholder="A. Materno" value="<?php echo $profesor['materno'] ?>" readonly>
                </div>
            </div>
            <!-- /.form group -->

            <div class="form-group">
              <label for="nacimiento" class="col-sm-2 control-label">Fecha de nacimiento</label>
                <div class="col-sm-10">
                    <input name="fecha_nacimiento" type="text" class="form-control" data-inputmask="'alias': 'yyyy/mm/dd'" data-mask value="<?php echo $profesor['fecha_nacimiento'] ?>" readonly>
                </div>
            </div>
            <!-- /.form group -->

            <div class="form-group">
              <label class="col-sm-2 control-label">Género</label>
              <div class="col-sm-2">
                <div class="radio">
                  <label>
                    <input type="radio" name="genero" value="<?php echo $profesor['genero']?>" checked>
                    <?php if($profesor['genero']=='M'){
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
                    <input type="text" class="form-control" id="rfc" name="rfc" placeholder="RFC" onkeyup="validaRFC()" value="<?php echo $profesor['RFC'] ?>" readonly>
                </div>
                <span id="help-block-RFC" class="help-block col-sm-4"></span>
            </div>
            <!-- /.form group -->

            <div class="form-group" id="divCURP">
              <label for="curp" class="col-sm-2 control-label">CURP</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" id="curp" name="curp" placeholder="CURP" onkeyup="validaCURP()" value="<?php echo $profesor['curp'] ?>" readonly>
                </div>
                <span id="help-block-CURP" class="help-block col-sm-4"></span>
            </div>
            <!-- /.form group -->

            <div class="form-group">
              <label for="correo" class="col-sm-2 control-label">E-mail</label>
                <div class="col-sm-10">
                    <input id="correo" name="correo" type="email" class="form-control" placeholder="E-mail" value="<?php echo $profesor['correo_personal'] ?>" readonly>
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