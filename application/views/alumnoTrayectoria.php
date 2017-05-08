    <!-- DataTables -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/datatables/dataTables.bootstrap.css">
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
          <h3 class="box-title">Trayectoria Academica</h3>
        </div>
          
      <div class="box-body">
            <!-- START CUSTOM TABS -->
     

      <div class="row">
        <div class="col-md-12">
          <!-- Custom Tabs -->
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#tab_1" data-toggle="tab">Detalle</a></li>
              <li><a href="#tab_2" data-toggle="tab">Calificaciones</a></li>
              <li><a href="#tab_3" data-toggle="tab">Indicadoress</a></li>
              
             
            </ul>
            <div class="tab-content">
              <div class="tab-pane active" id="tab_1">
                <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>Campo</th>
                  <th>Valor</th>
              
                </tr>
                </thead>
                <tbody>
                <?php

                  echo "<tr>";
                  echo "<td>Nombre";          
                  echo "</td>";
                  foreach ($alumnos as $key => $alumno) {
                    if($alumno['clave']==$clave){
                       echo "<td>".$alumno['nombre']." ".$alumno['paterno']." ".$alumno['materno'];
                     }                  
                   }
                   echo "</tr>";

                   echo "<tr>";
                  echo "<td>Clave";          
                  echo "</td>";
                  foreach ($alumnos as $key => $alumno) {
                    if($alumno['clave']==$clave){
                       echo "<td>".$alumno['clave'];
                     }                  
                   }
                   echo "</tr>";
                  
                   echo "<tr>";
                  echo "<td>Carrera";          
                  echo "</td>";
                  foreach ($alumnos as $key => $alumno) {
                    if($alumno['clave']==$clave){
                       echo "<td>".$alumno['cve_carrera'];
                     }                  
                   }
                   echo "</tr>";
                ?>
                
                </tbody>
              </table>
                
              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="tab_2">
                <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>Campo</th>
                  <th>Valor</th>
              
                </tr>
                </thead>
                <tbody>
                <?php

                  
                  foreach ($alumnos as $key => $alumno) {
                    if($alumno['clave']==$clave){
                      echo "<tr>";
                      echo "<td>Nombre";          
                      echo "</td>";
                      echo "<td>".$alumno['nombre']." ".$alumno['paterno']." ".$alumno['materno'];
                      echo "</tr>";

                      echo "<tr>";
                      echo "<td>Clave";          
                      echo "</td>";
                      echo "<td>".$alumno['clave'];
                      echo "</tr>";
                  
                      echo "<tr>";
                      echo "<td>Carrera";          
                      echo "</td>";
                      echo "<td>".$alumno['cve_carrera'];
                      echo "</tr>";
                     }                  
                   }

                  
                ?>
              
                </tbody>
              </table>
              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="tab_3">
                Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                It has survived not only five centuries, but also the leap into electronic typesetting,
                remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset
                sheets containing Lorem Ipsum passages, and more recently with desktop publishing software
                like Aldus PageMaker including versions of Lorem Ipsum.
              </div>
              <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
          </div>
          <!-- nav-tabs-custom -->
        </div>
        <!-- /.col -->

       
      <!-- END CUSTOM TABS -->
          </div>
          <!-- /.box-body -->
      </div>
      <!-- /.box -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

   <!-- DataTables -->
<script src="<?php echo base_url() ?>assets/plugins/datatables/jquery.dataTables.js"></script>
<script src="<?php echo base_url() ?>assets/plugins/datatables/dataTables.bootstrap.js"></script>

<script>
  $(function () {
    //$("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": true,
      "ordering": true,
      "info": true,
      "autoWidth": false
    });
  });
</script>