  <!-- =============================================== -->
  <!-- Página o contenido principal -->
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Contraseña
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">

    <div class="alert alert-danger alert-dismissible" id="error" style="display: none;">
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
      <h4><i class="icon fa fa-ban"></i> Error!</h4>
      Hace falta llenar algún campo, las contraseñas no coinciden o no cumplen con los criterios indicados.
    </div>

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Cambiar contraseña</h3>
        </div>
        <!-- form start -->
        <form class="form" action="<?php echo site_url('/Usuarios/'.$tipo.'CambiarPass')?>" method="post" id="formularioPass">
          <div class="box-body">
            <div class="form-group">
              <label for="password">Contraseña anterior:</label>
              <input type="password" class="form-control" id="password" name="password" placeholder="Contraseña" required>
            </div>

            <div class="form-group" id="pass_nueva_1">
              <label for="exampleInputPassword1">Contraseña nueva:</label>
              <input type="password" class="form-control" id="password_new_1" name="password_new_1" placeholder="Contraseña nueva" onkeyup="verificarPass(1)" required>
              <span id="error_formato_1" class="help-block">La contraseña debe contener al menos una minúscula, una mayúscula, un número y una longitud de 8-20 caracteres.</span>
            </div>

            <div class="form-group" id="pass_nueva_2">
              <label for="exampleInputPassword1">Vuelve a ingresar la contraseña nueva:</label>
              <input type="password" class="form-control" id="password_new_2" name="password_new_2" placeholder="Contraseña nueva" onkeyup="passIguales()" required>
              <span id="error_coincidencia" class="help-block">Las contraseñas no coinciden.</span>
              <span id="error_formato_2" class="help-block">La contraseña debe contener al menos una minúscula, una mayúscula, un número y una longitud de 8-20 caracteres.</span>
            </div>

          </div>
          <!-- /.box-body -->
          </form>
          <div class="box-footer">
            <button onclick="enviarForm()" class="btn btn-info pull-right">Guardar</button>
          </div>
          <!-- /.box-footer -->
        
        <!-- /.form -->
      </div>
      <!-- /.box -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <script type="text/javascript">
  
  $("#error_coincidencia").css('display','none');
  $("#error_formato_1").css('display','none');
  $("#error_formato_2").css('display','none');

  var todoBien = false;

    function passIguales() {
      var nueva = $("#password_new_1").val();
      var confirmar = $("#password_new_2").val();

      if (nueva==confirmar){
        //Si las contraseñas son iguales
        $("#pass_nueva_2").removeClass("has-error");
        $("#pass_nueva_2").addClass("has-success");
        $("#error_coincidencia").css('display','none');
        todoBien = verificarPass(2);
      }else{
        //Si las contraseñas no son iguales
        $("#pass_nueva_2").removeClass("has-success");
        $("#pass_nueva_2").addClass("has-error");
        $("#error_coincidencia").css('display','initial');
        todoBien = false;
      }
    }

    function verificarPass(id) {
      var nueva = $("#password_new_"+id).val();
      var re = new RegExp("^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.{8,20})"); //Expresión regular
      if (re.test(nueva)){
        //Si la cadena coincide
        $("#pass_nueva_"+id).removeClass("has-error");
        $("#pass_nueva_"+id).addClass("has-success");
        $("#error_formato_"+id).css('display','none');
        return true;
      }else{
        //Si la cadena no coincide
        $("#pass_nueva_"+id).removeClass("has-success");
        $("#pass_nueva_"+id).addClass("has-error");
        $("#error_formato_"+id).css('display','initial');
        return false;
      }
    }

    function enviarForm() {
      if (todoBien){
        document.getElementById("formularioPass").submit();
      }else{
        $("#error").css('display','block');
      }
    }
  </script>