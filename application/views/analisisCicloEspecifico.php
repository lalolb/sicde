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
          <h3 class="box-title">Análisis por Ciclo</h3>
        </div>
          
      <div class="box-body">
            <!-- START CUSTOM TABS -->
     

      <div class="row">
        <div class="col-md-12">
          <!-- Custom Tabs -->
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#tab_1" data-toggle="tab">Materias</a></li>
              <li><a href="#tab_2" data-toggle="tab">Calificaciones</a></li>
              <li><a href="#tab_3" data-toggle="tab">Horarios</a></li>
              
             
            </ul>
            <div class="tab-content">
              <div class="tab-pane active" id="tab_1">
                <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>Clave</th>
                  <th>Asignatura</th>
                  <th>Grupo</th>
                  
              
                </tr>
                </thead>
                <tbody>
                <?php

                  
                  foreach ($alumnos as $key => $alumno) {
                    if($alumno['clave']==$clave){
                      
                      foreach ($calificaciones as $key => $calificacion) {
                        if($calificacion['cve_semestre']==$idSemestres){
                          echo "<tr>";
                          echo "<td>".$calificacion['clave'];          
                          echo "</td>";
                          echo "<td>".$calificacion['nombre'];        
                          echo "</td>";
                          echo "<td>".$calificacion['cve_grupo']."</td>";
                          echo "</tr>";
                        }
                      }
                      
                      

                     
                     }                  
                   }

                  
                ?>
                
                </tbody>
              </table>
                
              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="tab_2">
                <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>Cve Materia</th>
                  <th>U/A Asignatura</th>
                  <th>Ordinario</th>
                  <th>Extra</th>
                  <th>Título</th>
                  <th>Indicador</th>
              
                </tr>
                </thead>
                <tbody>
                  <?php

                  $cont1=0; 
                  $cont2=0; 
                 foreach ($alumnos as $key => $alumno) {
                    if($alumno['clave']==$clave){
                      foreach ($calificaciones as $key => $calificacion) {

                        if($calificacion['cve_semestre']==$idSemestres){
                            echo "<tr>";
                            echo "<td>".$calificacion['clave'];
                            echo "</td>";                        
                            echo "<td>".$calificacion['nombre'];
                            echo "</td>"; 
                            echo "<td>".$calificacion['ordinario'];
                            echo "</td>";
                            echo "<td>".$calificacion['extra'];
                            echo "</td>"; 
                            echo "<td>".$calificacion['titulo'];
                            echo "</td>"; 
                            if($calificacion['aprobado']==1){
                              echo "<td> Aprobada";
                              echo "</td>";
                              $cont1 = $cont1+1; 
                            }else{
                              echo "<td> Reprobada";
                              echo "</td>";
                              $cont2 = $cont2+1;
                            }            
                     
                       }
                    }
                     
                     }                  
                   
                  }


                  
                ?>
              
                </tbody>
              </table>
              </div>
              <!-- /.tab-pane  HORARIOS-->
              <div class="tab-pane" id="tab_3">

              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>Cve Materia</th>
                  <th>Materia</th>
                  <th>Profesor</th>
                  <th>Grupo</th>
                  <th>Horarios</th>
              
                </tr>
                </thead>
                <tbody>
                <?php
                
                  foreach ($alumnos as $key => $alumno) {
                    if($alumno['clave']==$clave){
                      foreach ($calificaciones as $key => $calificacion) {

                        if($calificacion['cve_semestre']==$idSemestres){
                          echo "<tr>";
                          echo "<td>".$calificacion['clave'];          
                          echo "</td>";
                          echo "<td>".$calificacion['nombre']."</td>";
                         foreach ($profesores as $key => $profesor) {
                            if($profesor['clave']==$calificacion['cve_profesor']){
                                echo "<td>".$profesor['nombre']." ".$profesor['paterno']." ".$profesor['materno'];          
                                echo "</td>";
                            }
                         }
                          
                          echo "<td>".$calificacion['cve_grupo']." </td>";
                          
                          echo "<td>".$calificacion['horario'];          
                          echo "</td>";
                          echo "</tr>";
                        }
                      }
                     
                     }                  
                   }

                  
                ?>
                
                </tbody>
              </table>




              </div>
              <!-- /.tab-pane -->
            

       
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
<script src="<?php echo base_url() ?>assets/plugins/knob/jquery.knob.js"></script>


<script>
  $(function () {
    //$("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": true,
      "info": true,
      "autoWidth": false
    });
  });
</script>

