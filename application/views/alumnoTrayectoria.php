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
              <li><a href="#tab_3" data-toggle="tab">Indicadores</a></li>
              
             
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
                  $indicador=0;
                  
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

                    
                      echo "<tr>";
                      echo "<td>Periodo inicial";          
                      echo "</td>";
                      echo "<td>".$semestres[0]['anio'].$semestres[0]['letra'];
                      echo "</tr>";

                      echo "<tr>";
                      echo "<td>Periodo actual";          
                      echo "</td>";
                      $tot = count($semestres)-1;
                      echo "<td>".$semestres[$tot]['anio'].$semestres[$tot]['letra'];
                      echo "</tr>";

                     

                       foreach ($calificaciones as $key => $calificacion) {
                        if($calificacion['cve_semestre']!=$semestres[$tot]['clave']){
                         //echo $semestres[$ultP]['anio']." clave semestre:".$semestres[$ultP]['clave'];
                            if($calificacion['titulo']!="--" && $calificacion['titulo']!="NP" && $calificacion['titulo']!="SD"){
                              if($calificacion['titulo']<6){
                                $inicador++;
                              }
                            }
                            if($calificacion['extra']!="--" && $calificacion['extra']!="NP" && $calificacion['extra']!="SD"){
                                if($calificacion['extra']<6){
                                  $indicador++;
                              }
                             }
                             if($calificacion['ordinario']!="--" && $calificacion['extra']!="NP" && $calificacion['extra']!="SD"){
                                if($calificacion['ordinario']<6){
                                  $indicador++;
                              }
                             }

                        }
                      }
                       if($indicador!=0){
                          $semestres[$tot]['situacion'] = "Irregular";
                      }else{
                          $semestres[$tot]['situacion'] = "Regurar";

                      }
                      

                      echo "<tr>";
                      echo "<td>Situación";          
                      echo "</td>";
                      echo "<td>".$semestres[$tot]['situacion'];
                      echo "</tr>";


                     }                  
                   }

                  
                ?>
                
                </tbody>
              </table>
                
              </div>
              <!-- /.tab CALIFICACIONES-->
              <div class="tab-pane" id="tab_2">
                <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>Periodo</th>
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
                        echo "<tr>";
                        echo "<td>".$calificacion['anio'].$calificacion['letra'];
                        echo "</td>";                        
                        echo "<td>".$calificacion['nombre'];
                        echo "</td>"; 
                        echo "<td>".$calificacion['ordinario'];
                        echo "</td>";
                        echo "<td>".$calificacion['extra'];
                        echo "</td>"; 
                        echo "<td>".$calificacion['titulo'];
                        echo "</td>"; 

                        if($calificacion['titulo']=="--"||$calificacion['titulo']=="NP"||$calificacion['titulo']=="SD"){
                              if($calificacion['extra']=="--"||$calificacion['extra']=="NP"||$calificacion['extra']=="SD"){
                                if($calificacion['ordinario']<6){
                                    $calificacion['aprobado'] = 0;
                                }else{
                                     $calificacion['aprobado'] = 1;
                                }
                              }else{
                                if($calificacion['extra']<6){
                                    $calificacion['extra'] = 0;
                                }else{
                                     $calificacion['extra'] = 1;
                                }
                              }
                            }else{
                              if($calificacion['titulo']<6){
                                    $calificacion['titulo'] = 0;
                                }else{
                                     $calificacion['titulo'] = 1;
                                }
                            }

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


                  
                ?>
              
                </tbody>
              </table>
              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="tab_3">

              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>Campo</th>
                  <th>Valor</th>
              
                </tr>
                </thead>
                <tbody>
                <?php
                  // CALCULA EL PROMEDIO DEL ULTIMO SEMESTRE
                  
                  $i =0;
                  $ultP = count($semestres)-2;
                 // echo $ultP;
                  foreach ($alumnos as $key => $alumno) {
                    if($alumno['clave']==$clave){
                      $sum = 0;
                      foreach ($calificaciones as $key => $calificacion) {
                        if($calificacion['cve_semestre']==$semestres[$ultP]['clave']){
                         //echo $semestres[$ultP]['anio']." clave semestre:".$semestres[$ultP]['clave'];
                            if($calificacion['titulo']=="--"||$calificacion['titulo']=="NP"||$calificacion['titulo']=="SD"){
                              if($calificacion['extra']=="--"||$calificacion['extra']=="NP"||$calificacion['extra']=="SD"){
                                $sum = $sum+ $calificacion['ordinario'];
                              }else{
                                $sum = $sum+ $calificacion['extra'];
                              }
                            }else{
                              $sum = $sum+ $calificacion['titulo'];
                            }
                            
                          $i++;
                        }
                      }
                      $promedioU = $sum/$i;
                      $promedioU=  number_format((float)$promedioU, 1, '.', '');
                     
                    }
                  }

                  // CALCULA EL PROMEDIO GENERAL
                  $i =0;
                
                  foreach ($alumnos as $key => $alumno) {
                    if($alumno['clave']==$clave){
                      $sum = 0;
                      foreach ($calificaciones as $key => $calificacion) {
                        if($calificacion['cve_semestre']!=$semestres[$tot]['clave']){
                         //echo $semestres[$ultP]['anio']." clave semestre:".$semestres[$ultP]['clave'];
                            if($calificacion['titulo']=="--"||$calificacion['titulo']=="NP"||$calificacion['titulo']=="SD"){
                              if($calificacion['extra']=="--"||$calificacion['extra']=="NP"||$calificacion['extra']=="SD"){
                                $sum = $sum+ $calificacion['ordinario'];
                              }else{
                                $sum = $sum+ $calificacion['extra'];
                              }
                            }else{
                              $sum = $sum+ $calificacion['titulo'];
                            }

                          
                          $i++;
                        }
                      }
                      $promedioG = $sum/$i;
                     // echo "i = ".$i."  sum=".$sum;
                      $promedioG=  round($promedioG, 2);
                     
                    }
                  }

                  //EXAMENES REPROBADOS
                  //AQUI
                  $i =0;
                
                  foreach ($alumnos as $key => $alumno) {
                    if($alumno['clave']==$clave){
                      $sum = 0;
                      foreach ($calificaciones as $key => $calificacion) {
                        if($calificacion['cve_semestre']!=$semestres[$tot]['clave']){
                         //echo $semestres[$ultP]['anio']." clave semestre:".$semestres[$ultP]['clave'];
                            if($calificacion['titulo']!="--" && $calificacion['titulo']!="NP" && $calificacion['titulo']!="SD"){
                              if($calificacion['titulo']<6){
                                $i++;
                              }
                            }
                            if($calificacion['extra']!="--" && $calificacion['extra']!="NP" && $calificacion['extra']!="SD"){
                                if($calificacion['extra']<6){
                                  $i++;
                              }
                             }
                             if($calificacion['ordinario']!="--" && $calificacion['extra']!="NP" && $calificacion['extra']!="SD"){
                                if($calificacion['ordinario']<6){
                                  $i++;
                              }
                             }

                        }
                      }
                   //   echo $i;
                     
                    }
                  }

                                    
                  foreach ($alumnos as $key => $alumno) {
                    if($alumno['clave']==$clave){
                      echo "<tr>";
                      echo "<td>Número de asignaturas acreditadas";          
                      echo "</td>";
                      echo "<td>".$cont1;
                      echo "</tr>";

                      echo "<tr>";
                      echo "<td>Número de materias reprobadas";          
                      echo "</td>";
                      echo "<td>".$cont2;
                      echo "</tr>";
                  
                      echo "<tr>";
                      echo "<td>Promedio último período.";          
                      echo "</td>";
                      echo "<td>".$promedioU;
                      echo "</tr>";

                    
                      echo "<tr>";
                      echo "<td>Promedio general";          
                      echo "</td>";
                      echo "<td>".$promedioG;
                      echo "</tr>";

                      $ultpP = count($semestres)-1;
                      echo "<tr>";
                      if($indicador!=0){
                          $semestres[$ultpP]['situacion'] = "Irregular";
                      }else{
                          $semestres[$ultpP]['situacion'] = "Regurar";

                      }
                      echo "<td>Situación de regular o irregular";          
                      echo "</td>";
                      echo "<td>".$semestres[$ultpP]['situacion'];
                      echo "</tr>";

                     
                     }                  
                   }

                  
                ?>
                
                </tbody>
              </table>




                <div class="row">
                  <div class="col-xs-6 col-md-3 text-center">
                  <?php
                    $credTot=0;
                    foreach ($alumnos as $key => $alumno) {
                     if($alumno['clave']==$clave){
                        foreach ($creditos as $key => $credito) {
                         $credTot =$credito['creditos']+$credTot;
                       }
                     }
                    }
                   // echo "CREDITOS= ".$credTot;
                     
                    $valor=$credTot;
                    $porcentaje = ($valor*100)/430;
                    
                    echo "<input type=\"text\" class=\"knob1\" value=\"".$valor."\" data-width=\"120\" data-height=\"120\" data-fgColor=\"#3c8dbc\" data-readonly=\"true\">";
                    ?>
                    <div class="knob-label">Créditos Acumulados</div>
                  </div>          
                
              <!-- /.row -->

                 
                  <div class="col-xs-6 col-md-3 text-center">
                  <?php
                    $valor=$cont2;
                    $porcentaje = ($valor*100)/20;
                    
                    echo "<input type=\"text\" class=\"knob\" value=\"".$valor."\" data-width=\"120\" data-height=\"120\" data-fgColor=\"#39CCCC\" data-readonly=\"true\">";
                    ?>
                    <div class="knob-label">Exámenes Reprobados (máx 20)</div>
                  </div>          
                </div>


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

<script>
    $(function() {
        $(".knob").knob({
            "min":0,
            "max":20,
            "fgColor":"#39CCCC"
            
        });
        $(".knob1").knob({
            "min":0,
            "max":430,
            "fgColor":"#932ab6"
            
        });
    });
</script>
