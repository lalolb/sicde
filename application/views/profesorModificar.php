  <!-- =============================================== -->
  <!-- Página o contenido principal -->
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Profesor
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Modificar un profesor</h3>
        </div>
        <!-- form start -->
        <form class="form-horizontal" action="<?php echo site_url()?>/Alumnos/modificarAlumno" method="post">
          <div class="box-body">
          <h3>Datos generales</h3>
            <div class="form-group">
              <label for="nombre" class="col-sm-2 control-label">Nombre</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="nombre" name="nombreA" placeholder="Nombre" value="<?php echo $profesor['nombre'] ?>" required>
                </div>
            </div>
            <!-- /.form group -->
            <input type="hidden" name="cve_datos" value="<?php echo $profesor['clave'] ?>">
            <div class="form-group">
              <label for="apaterno" class="col-sm-2 control-label">Apellido Paterno</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="apaterno" name="apaterno" placeholder="A. Paterno"  value="<?php echo $profesor['paterno'] ?>" required>
                </div>
            </div>
            <!-- /.form group -->

            <div class="form-group">
              <label for="amaterno" class="col-sm-2 control-label">Apellido Materno</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="amaterno" name="amaterno" placeholder="A. Materno" value="<?php echo $profesor['materno'] ?>" required>
                </div>
            </div>
            <!-- /.form group -->

            <div class="form-group">
              <label for="nacimiento" class="col-sm-2 control-label">Fecha de nacimiento</label>
                <div class="col-sm-10">
                    <input name="fecha_nacimiento" type="text" class="form-control" data-inputmask="'alias': 'yyyy/mm/dd'" data-mask value="<?php echo $profesor['fecha_nacimiento'] ?>" required>
                </div>
            </div>
            <!-- /.form group -->

            <div class="form-group">
              <label class="col-sm-2 control-label">Género</label>
              <div class="col-sm-2">
                <div class="radio">
                  <label>
                    <input type="radio" name="genero" id="generoM" value="M" <?php if($profesor['genero']=='M'){echo "checked";}?>>
                      Masculino
                  </label>
                </div>
              </div>
              <div class="col-sm-3">
                <div class="radio">
                  <label>
                    <input type="radio" name="genero" id="generoF" value="F" <?php if($profesor['genero']=='F'){echo "checked";}?>>
                      Femenino
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
                    <input type="text" class="form-control" id="curp" name="curp" placeholder="CURP" onkeyup="validaCURP()" value="<?php echo $profesor['curp'] ?>" required>
                </div>
                <span id="help-block-CURP" class="help-block col-sm-4"></span>
            </div>
            <!-- /.form group -->

            <div class="form-group">
              <label for="correo" class="col-sm-2 control-label">E-mail</label>
                <div class="col-sm-10">
                    <input id="correo" name="correo" type="email" class="form-control" placeholder="E-mail" value="<?php echo $profesor['correo_personal'] ?>" required>
                </div>
            </div>
            <!-- /.form group -->

            <div class="form-group">
              <label for="nacionalidad" class="col-sm-2 control-label">País de nacionalidad</label>
                <div class="col-sm-10">
                    <input id="nacionalidad" name="nacionalidad" type="text" class="form-control" placeholder="País de nacionalidad" value="<?php echo $profesor['pais'] ?>" required>
                </div>
            </div>
            <!-- /.form group -->

            <div class="form-group">
              <label for="pais_nacimiento" class="col-sm-2 control-label">País de nacimiento</label>
                <div class="col-sm-10">
                    <input id="pais_nacimiento" name="pais_nacimiento" type="text" class="form-control" placeholder="País de nacimiento" value="<?php echo $profesor['pais_nacimiento'] ?>" required>
                </div>
            </div>
            <!-- /.form group -->
            <input type="hidden" id="estado_alumno" value="<?php echo $profesor['estado'] ?>">
            <div class="form-group">
              <label for="estado" class="col-sm-2 control-label">Estado de nacimiento</label>
                <div class="col-sm-10">
                    <select id="estado" name="estado" class="form-control">
                      <option value="Aguascalientes">Aguascalientes</option>
                      <option value="Baja California">Baja California</option>
                      <option value="Baja California Sur">Baja California Sur</option>
                      <option value="Campeche">Campeche</option>
                      <option value="Coahuila de Zaragoza">Coahuila de Zaragoza</option>
                      <option value="Colima">Colima</option>
                      <option value="Chiapas">Chiapas</option>
                      <option value="Chihuahua">Chihuahua</option>
                      <option value="CDMX">Ciudad de México</option>
                      <option value="Durango">Durango</option>
                      <option value="Guanajuato">Guanajuato</option>
                      <option value="Guerrero">Guerrero</option>
                      <option value="Hidalgo">Hidalgo</option>
                      <option value="Jalisco">Jalisco</option>
                      <option value="México">México</option>
                      <option value="Michoacán de Ocampo">Michoacán de Ocampo</option>
                      <option value="Morelos">Morelos</option>
                      <option value="Nayarit">Nayarit</option>
                      <option value="Nuevo León">Nuevo León</option>
                      <option value="Oaxaca">Oaxaca</option>
                      <option value="Puebla">Puebla</option>
                      <option value="Querétaro">Querétaro</option>
                      <option value="Quintana Roo">Quintana Roo</option>
                      <option value="San Luis Potosí">San Luis Potosí</option>
                      <option value="Sinaloa">Sinaloa</option>
                      <option value="Sonora">Sonora</option>
                      <option value="Tabasco">Tabasco</option>
                      <option value="Tamaulipas">Tamaulipas</option>
                      <option value="Tlaxcala">Tlaxcala</option>
                      <option value="Veracruz">Veracruz</option>
                      <option value="Yucatán">Yucatán</option>
                      <option value="Zacatecas">Zacatecas</option>
                    </select>
                </div>
            </div>
            <!-- /.form group -->

            <div class="form-group">
              <label for="municipio_nacimiento" class="col-sm-2 control-label">Municipio de nacimiento</label>
                <div class="col-sm-10">
                    <input id="municipio_nacimiento" name="municipio_nacimiento" type="text" class="form-control" placeholder="Municipio de nacimiento" value="<?php echo $profesor['municipio'] ?>" required>
                </div>
            </div>
            <!-- /.form group -->

            <div class="form-group">
              <label for="sangre" class="col-sm-2 control-label">Tipo de Sangre</label>
                <div class="col-sm-3">
                    <input id="sangre" name="sangre" type="text" class="form-control" placeholder="Tipo de Sangre" value="<?php echo $profesor['tipo_sangre'] ?>" required>
                </div>
              <label for="imss" class="col-sm-2 control-label">Clave del IMSS</label>
                <div class="col-sm-5">
                    <input id="imss" name="imss" type="text" class="form-control" placeholder="Clave del IMSS" value="<?php echo $profesor['clave_imss'] ?>" required>
                </div>
            </div>
            <!-- /.form group -->

            <div class="form-group">
              <label for="tutor" class="col-sm-2 control-label">Padre/Madre o Tutor</label>
                <div class="col-sm-10">
                    <input id="tutor" name="tutor" type="text" class="form-control" placeholder="Padre/Madre o Tutor" value="<?php echo $profesor['contacto_emergencia'] ?>" required>
                </div>
            </div>
            <!-- /.form group -->

            <div class="form-group">
              <label for="grupo_i" class="col-sm-2 control-label">Grupo indígena</label>
                <div class="col-sm-4">
                    <select id="grupo_i" name="grupo_i" class="form-control">
                    <?php
                    if ($profesor['grupo_indigena']=="No") {
                      echo "<option value=\"No\" selected>No</option>";
                      echo "<option value=\"Si\">Si</option>";
                    }else{
                      echo "<option value=\"No\">No</option>";
                      echo "<option value=\"Si\" selected>Si</option>";
                    }
                    ?>
                    </select>
                </div>
              <label for="dialecto_i" class="col-sm-2 control-label">Dialecto indígena</label>
                <div class="col-sm-4">
                    <select id="dialecto_i" name="dialecto_i" class="form-control">
                      <?php
                      if ($profesor['dialecto_indigena']=="No") {
                        echo "<option value=\"No\" selected>No</option>";
                        echo "<option value=\"Si\">Si</option>";
                      }else{
                        echo "<option value=\"No\">No</option>";
                        echo "<option value=\"Si\" selected>Si</option>";
                      }
                    ?>
                    </select>
                </div>
            </div>
            <!-- /.form group -->

          </div>
          <!-- /.box-body -->
          <div class="box-footer">
            <button type="submit" class="btn btn-info pull-right">Enviar</button>
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

  <!-- InputMask -->
<script src="<?php echo base_url()?>assets/plugins/input-mask/jquery.inputmask.js"></script>
<script src="<?php echo base_url()?>assets/plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
<script src="<?php echo base_url()?>assets/plugins/input-mask/jquery.inputmask.extensions.js"></script>

<script type="text/javascript">

$("#estado option").each(function(){
    if ($(this).val()==$("#estado_alumno").val()) {$("#estado").val($("#estado_alumno").val());}
});

  $(function () {
    //Datemask dd/mm/yyyy
    $("#datemask").inputmask("yyyy/mm/dd", {"placeholder": "yyyy/mm/dd"});
    //Datemask2 mm/dd/yyyy
    $("#datemask2").inputmask("mm/dd/yyyy", {"placeholder": "mm/dd/yyyy"});
    //Money Euro
    $("[data-mask]").inputmask();
  });

  function validaRFC(){
    var rfc = $("#rfc").val(); //Obtenemos el valor del campo
    var re = new RegExp("^[A-Z]{4}[0-9]{2}(1[0-2]|0[1-9])([0-3][0-9])$"); //Expresión regular para el RFC
    if (re.test(rfc)){
      //Si la cadena coincide
      $("#divRFC").removeClass("has-error");
      $("#divRFC").addClass("has-success");
      $("#help-block-RFC").text('');
    }else{
      //Si la cadena no coincide
      $("#divRFC").removeClass("has-success");
      $("#divRFC").addClass("has-error");
      $("#help-block-RFC").text('Formato de RFC incorrecto');
    }
  }

  function validaCURP(){
    var curp = $("#curp").val(); //Obtenemos el valor del campo
    var re = new RegExp("^[A-Z]{4}[0-9]{2}(1[0-2]|0[1-9])([0-3][0-9])[M|H][A-Z]{5}[0-9]{2}$"); //Expresión regular para el CURP
    
    if (re.test(curp)){
      //Si la cadena coincide
      $("#divCURP").removeClass("has-error");
      $("#divCURP").addClass("has-success");
      $("#help-block-CURP").text('');
    }else{
      //Si la cadena no coincide
      $("#divCURP").removeClass("has-success");
      $("#divCURP").addClass("has-error");
      $("#help-block-CURP").text('Formato de CURP incorrecto');
    }
  }
</script>