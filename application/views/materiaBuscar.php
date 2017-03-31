 <script src="<?php echo base_url() ?>assets/select2/dist/js/select2.min.js"></script>
  <link rel="stylesheet"  type="text/css"  href="<?php echo base_url() ?>assets/select2/dist/css/select2.min.css">

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
          <h3 class="box-title">Buscar Materias</h3>
        </div>

        <div class="box-body">
          <form class="form-horizontal" action="<?php echo site_url('/Paginas/'.$accion.'Materia')?>" method="get">
           <div class="form-group">
              <label for="materia" class="col-sm-2 control-label">Materia</label>
                <div class="col-sm-7">
                    <select id="materia" name="materia" class="form-control">
                        <option > </option>
                      <?php
                        foreach ($materias as $key => $materia) {

                          echo "<option value='".$materia['clave']."'>".$materia['nombre']."</option>";
                        }
                      ?>
                    </select>
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

   <script type="text/javascript">
                 $(document).ready(function(){
                 
                   $("#materia").select2({
                        placeholder: "Selecciona una materia"
                       });
                  });

               </script>