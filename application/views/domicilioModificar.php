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
          <h3 class="box-title">Modificar domicilio</h3>
        </div>
        <!-- form start -->
        <form class="form-horizontal" action="<?php echo site_url()?>/Domicilio/domicilioModificar" method="post">
          <input type="hidden" name="clave" value="<?php echo $domicilio['clave'] ?>">
          <div class="box-body">
          <h3>Datos de domicilio</h3>
            <div class="form-group">
              <label for="calle" class="col-sm-2 control-label">Calle</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="calle" name="calle" placeholder="Calle" value="<?php echo $domicilio['calle'] ?>" required>
                </div>
            </div>
            <!-- /.form group -->

            <div class="form-group">
              <label for="colonia" class="col-sm-2 control-label">Colonia</label>
                <div class="col-sm-2">
                    <input id="colonia" name="colonia" type="text" class="form-control" placeholder="Colonia" value="<?php echo $domicilio['colonia'] ?>" required>
                </div>

              <label for="cp" class="col-sm-1 control-label">C.P.</label>
                <div class="col-sm-2">
                    <input id="cp" name="cp" type="number" class="form-control" placeholder="CP" value="<?php echo $domicilio['cp'] ?>" required>
                </div>

              <label for="telefono" class="col-sm-2 control-label">Teléfono</label>
                  <div class="col-sm-2">
                    <input name="telefono" type="text" class="form-control" data-inputmask='"mask": "(999) 999-9999"' data-mask value="<?php echo $domicilio['telefono'] ?>">
                  </div>
            </div>
            <!-- /.form group -->

            <div class="form-group">
              <label for="pais" class="col-sm-2 control-label">País</label>
                <div class="col-sm-10">
                    <input id="pais" name="pais" type="text" class="form-control" placeholder="País" value="<?php echo $domicilio['pais'] ?>" required>
                </div>
            </div>
            <!-- /.form group -->

            <div class="form-group">
              <label for="estado" class="col-sm-2 control-label">Estado</label>
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
                      <option value="México" selected>México</option>
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
              <label for="municipio" class="col-sm-2 control-label">Municipio</label>
                <div class="col-sm-10">
                    <input id="municipio" name="municipio" type="text" class="form-control" placeholder="Municipio" value="<?php echo $domicilio['municipio'] ?>" required>
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
  $(function () {
    //Datemask dd/mm/yyyy
    $("#datemask").inputmask("yyyy/mm/dd", {"placeholder": "yyyy/mm/dd"});
    //Datemask2 mm/dd/yyyy
    $("#datemask2").inputmask("mm/dd/yyyy", {"placeholder": "mm/dd/yyyy"});
    //Money Euro
    $("[data-mask]").inputmask();
  });
</script>