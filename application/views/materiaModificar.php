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
          <h3 class="box-title">Modificar una materia</h3>
        </div>
        <div class="box-body">
          <form class="form-horizontal">
            <div class="form-group">
              <label for="nombre" class="col-sm-2 control-label">Nombre</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre" required>
                </div>
            </div>
            <!-- /.form group -->
            <div class="form-group">
              <label for="apaterno" class="col-sm-2 control-label">Horas teóricas</label>
                <div class="col-sm-8">
                    <input type="number" class="form-control" onkeyup= "calcula()" id="hteoricas" name="hteoricas" placeholder="Horas teóricas" required>
                </div>
            </div>
            <!-- /.form group -->
            <div class="form-group">
              <label for="amaterno" class="col-sm-2 control-label">Horas prácticas</label>
                <div class="col-sm-8">
                    <input type="number" class="form-control" onkeyup= "calcula()" id="hpracticas" name="hpracticas" placeholder="Horas prácticas" required>
                </div>
            </div>

            <!-- /.form group -->
           <div class="form-group">
              <label for="amaterno" class="col-sm-2 control-label">Créditos</label>
                <div class="col-sm-1">
                    <input type="text" class="form-control"  id="creditos" name="creditos" placeholder=""  disabled="">
                </div>
            </div>

            
        <div class="form-group">
                 <label for="amaterno" class="col-sm-2 control-label">Carrera</label>
                 <div class="col-sm-2">
                  <select name="tipo" class="form-control" required>
                    <option value="ico" selected>ICO</option>
                    <option value="ici">ICI</option>
                    <option value="iel">IEL</option>
                    <option value="ime">IME</option>
                    <option value="ises">ISES</option>
                  </select>
                  </div>
      </div>            
        </div>
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

<script type="text/javascript"> 
function calcula(){
  var hp = parseInt($('#hpracticas').val());
  var ht = parseInt($('#hteoricas').val());
  var creditos = (ht*2)+hp;
  console.log(creditos);
  $('#creditos').val(creditos);
}
</script>