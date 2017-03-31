  <script src="<?php echo base_url() ?>assets/select2/dist/js/select2.min.js"></script>
  <link rel="stylesheet"  type="text/css"  href="<?php echo base_url() ?>assets/select2/dist/css/select2.min.css">

  <script src="<?php echo base_url() ?>assets/wickedpicker/dist/wickedpicker.min.js"></script>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/wickedpicker/dist/wickedpicker.min.css">

  <link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/iCheck/all.css" type="text/css">
  <script src="<?php echo base_url() ?>assets/plugins/iCheck/icheck.js"></script>

 <!-- =============================================== -->
  <!-- Página o contenido principal -->
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Grupos
      </h1>
    </section>
    <!-- creditos = ht*2 +hp >

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Alta de un grupo</h3>
        </div>
          <form class="form-horizontal" action="<?php echo site_url()?>/Grupos/insertarGrupo" method="post">
            <div class="box-body">
            

            <div class="form-group">
              <label for="nombre" class="col-sm-2 control-label">Profesor</label>
                <div class="col-sm-8">        
                  <select name="nombreP" id="nombreP" class="form-control select2" style="width: 100%" required>
                   <option></option>
                      <?php
                        foreach ($profesores as $key => $profesor) {
                          echo "<option value='".$profesor['RFC']."'>".$profesor['nombre']." ".$profesor['paterno']." ".$profesor['materno']."</option>";
                        }
                      ?>
                  </select>
                  </div>
            </div>

            <div class="form-group">
              <label for="amaterno" class="col-sm-2 control-label">Materia</label>
              <div class="col-sm-8">
                <select name="materia" id="materia" class="form-control select2" style="width: 100%" required>
                     <option > </option>
                      <?php
                        foreach ($materias as $key => $materia) {
                          echo "<option value='".$materia['clave']."'>".$materia['nombre']."</option>";
                        }
                      ?>
                </select>
              </div>
      </div>  

      <div class="form-group">
              <label for="amaterno" class="col-sm-2 control-label">Capacidad</label>
              <div class="col-sm-2">
                <input type="number" class="form-control" id="capacidad" name="capacidad" placeholder="# alumnos" required>

              </div>
      </div>  
     <!-- -->

            <div class="form-group">
              <div class="col-sm-2">
                <input type="checkbox" id="lunes" name="dias[]" class="minimal-green" value="lunes"> <b>Lunes</b><br>
              </div>
               

              <label for="apaterno" class="col-sm-2 control-label">Hora inicio</label>
                <div class="col-sm-2">
                    
                    <input type="text" class="form-control timepicker" id="lunesHi" name="lunesHi">
                   
                </div>

                
                <label for="apaterno" class="col-sm-2 control-label">Hora final</label>
                <div class="col-sm-2">
                    <input type="text" class="form-control" id="lunesHf" name="lunesHf">
                </div>
            </div>

     <!-- -->
              <div class="form-group">
              <div class="col-sm-2">
                 <input type="checkbox" name="dias[]"  id="martes" class="minimal-green" value="martes"> <b>Martes</b><br>
              </div>
         
                <label for="apaterno" class="col-sm-2 control-label">Hora inicio</label>
                <div class="col-sm-2">
                    <input type="text" class="form-control" id="martesHi" name="martesHi">
                </div>

                <label for="apaterno" class="col-sm-2 control-label">Hora final</label>
                <div class="col-sm-2">
                    <input type="text" class="form-control" id="martesHf" name="martesHf">
                </div>
            </div>


             <!-- -->
              <div class="form-group">
              <div class="col-sm-2">
                 <input type="checkbox" name="dias[]" id="miercoles" class="minimal-green" value="miercoles"><b>Miercoles</b><br>
              </div>
         
                <label for="apaterno" class="col-sm-2 control-label">Hora inicio</label>
                <div class="col-sm-2">
                    <input type="text" class="form-control" id="miercolesHi" name="miercolesHi">
                </div>

                <label for="apaterno" class="col-sm-2 control-label">Hora final</label>
                <div class="col-sm-2">
                    <input type="text" class="form-control" id="miercolesHf" name="miercolesHf">
                </div>
            </div>

               <!-- -->
              <div class="form-group">
              <div class="col-sm-2">
                 <input type="checkbox" name="dias[]" id="jueves" class="minimal-green" value="jueves"> <b>Jueves</b><br>
              </div>
         
                <label for="apaterno" class="col-sm-2 control-label">Hora inicio</label>
                <div class="col-sm-2">
                    <input type="text" class="form-control" id="juevesHi" name="juevesHi">
                </div>

                <label for="apaterno" class="col-sm-2 control-label">Hora final</label>
                <div class="col-sm-2">
                    <input type="text" class="form-control" id="juevesHf" name="juevesHf">
                </div>
            </div>

               <!-- -->
              <div class="form-group">
              <div class="col-sm-2">
                 <input type="checkbox" name="dias[]" id="viernes" class="minimal-green" value="viernes"><b> Viernes </b><br>
              </div>
         
                <label for="apaterno" class="col-sm-2 control-label">Hora inicio</label>
                <div class="col-sm-2">
                    <input type="text" class="form-control" id="viernesHi" name="viernesHi">
                </div>

                <label for="apaterno" class="col-sm-2 control-label">Hora final</label>
                <div class="col-sm-2">
                    <input type="text" class="form-control" id="viernesHf" name="viernesHf">
                </div>
            </div>

            <!-- -->
              <div class="form-group">
              <div class="col-sm-2">
                 <input type="checkbox" name="dias[]" id="sabado" class="minimal-green" value="sabado"><b> Sabado </b><br>
              </div>
         
                <label for="apaterno" class="col-sm-2 control-label">Hora inicio</label>
                <div class="col-sm-2">
                    <input type="text" class="form-control" id="sabadoHi" name="sabadoHi">
                </div>

                <label for="apaterno" class="col-sm-2 control-label">Hora final</label>
                <div class="col-sm-2">
                    <input type="text" class="form-control" id="sabadoHf" name="sabadoHf">
                </div>
            </div>    
        </div>




 <script type="text/javascript">
                 $(document).ready(function(){
                  var hora = $("#lun").val();
                  var options = {
                        now: "7:00",
                        upArrow: 'wickedpicker__controls__control-up', 
                        downArrow: 'wickedpicker__controls__control-down',
                        title: '',
                        minutesInterval: 30,
                        twentyFour: true
                  };
                   $("#materia").select2({
                        placeholder: "Selecciona una materia"
                       });
                   $("#nombreP").select2({
                        placeholder: "Selecciona profesor"
                       });
                   $('#lunesHi, #lunesHf,#martesHi, #martesHf,#miercolesHi,#miercolesHf, #juevesHi, #juevesHf, #viernesHi, #viernesHf, #sabadoHi, #sabadoHf').wickedpicker(options);
                   
                   //Red color scheme for iCheck
                  $('input[type="checkbox"].minimal-green').iCheck({
                      checkboxClass: 'icheckbox_minimal-green',
                      radioClass: 'iradio_minimal-green'
                    });

                   });

               </script>


        <!-- /.box-body -->
        <div class="box-footer">
          <div>
          <button type="submit" class="btn btn-info pull-right">Enviar</button>
        </div>
        <!-- /.box-footer -->
        </form>
      </div>
      <!-- /.box -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

