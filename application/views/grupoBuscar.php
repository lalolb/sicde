 <script src="<?php echo base_url() ?>assets/select2/dist/js/select2.min.js"></script>
  <link rel="stylesheet"  type="text/css"  href="<?php echo base_url() ?>assets/select2/dist/css/select2.min.css">

 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Grupo
      </h1>
    </section>
    <!-- creditos = ht*2 +hp >

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Buscar Grupo</h3>
        </div>

        <div class="box-body">
          <form class="form-horizontal" action="<?php echo site_url('/Paginas/grupo'.$accion)?>" method="get">
           <div class="form-group">
              <label for="materia" class="col-sm-2 control-label">Grupo</label>
                <div class="col-sm-7">
                    <select id="grupo" name="grupo" class="form-control">
                        <option > </option>
                      <?php
                        foreach ($grupos as $key => $grupo) {
                          
                               echo "<option value='".$grupo['clave']."'>".$grupo['clave']." - ".$grupo['materia']." (".$grupo['nombre']." ".$grupo['paterno']." ".$grupo['materno'].")</option>";
                           
                            }
                      ?>
                    </select>
                </div>
            </div>         
       
        <!-- /.box-body -->
        <div class="box-footer">
          <div>
          <button type="submit" class="btn btn-info pull-right">Buscar</button>
        </div>
        <!-- /.box-footer -->
        </form>
      </div>
      <!-- /.box -->
    </section>
    <!-- /.content -->
  </div>  

   <script type="text/javascript">
                 $(document).ready(function(){
                 
                   $("#grupo").select2({
                        placeholder: "Selecciona un grupo"
                       });
                  });

               </script>