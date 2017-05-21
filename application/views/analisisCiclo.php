    <!-- DataTables -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/datatables/dataTables.bootstrap.css">
  <!-- =============================================== -->
  <!-- Página o contenido principal -->
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Alumno
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
     
     
       <form class="form-horizontal" action="<?php echo site_url()?>/Paginas/periodo" method="post">
      <div class="row">
        <div class="col-md-12">

         <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>Periodo</th>
                  <th>Promedio</th>
                  <th>Situación</th>
                  <th>Reprobadas</th>
                  <th>Créditos</th>
                  <th>Operación</th>
              
                </tr>
                </thead>
                <tbody>
                  <?php

                  // CALCULA EL PROMEDIO DEL ULTIMO SEMESTRE
                 
                $vector[0]=0;
                $ind = 0;
                $band=0;
                 foreach ($alumnos as $key => $alumno) {
                    if($alumno['clave']==$clave){
                      foreach ($calificaciones as $key => $calificacion) {
                        
                        foreach ($vector as $key => $vec) {
                          if($vec!=$calificacion['cve_semestre']){
                            $band=0;
                          }else{
                            $band=1;
                            break;
                          }
                          
                        }

                      //  echo $band;
                         if($band==0){

                            $claveS= $calificacion['cve_semestre'];
                            $ind++;
                            $vector[$ind]= $claveS;
                    //    echo $vector[$claveS];
                            echo "<tr>";
                            echo "<td>".$calificacion['anio'].$calificacion['letra'];
                            echo "</td>"; 
                            
                          //CALCULA PROMEDIO POR SEMESTRE
                            $i=0;
                            $j=0;
                            $k=0;
                            $sum = 0;
                            $promedioU=0;
                            
                            foreach ($calificaciones as $key => $calificacion) {
                            //  echo "Semestre:".$claveS."  FOR:".$calificacion['cve_semestre'];
                              if($calificacion['cve_semestre']==$claveS){
                           //     echo"ENTRO";
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
                               
                                //Calcular examenes reprbados por semestre

                                if($calificacion['titulo']!="--" && $calificacion['titulo']!="NP" && $calificacion['titulo']!="SD"){
                                  if($calificacion['titulo']<6){
                                    $k++; 
                                   
                                  }
                                }
                                if($calificacion['extra']!="--" && $calificacion['extra']!="NP" && $calificacion['extra']!="SD"){
                                    if($calificacion['extra']<6){
                                      $k++; 
                                  }
                                 }
                                 if($calificacion['ordinario']!="--" && $calificacion['extra']!="NP" && $calificacion['extra']!="SD"){
                                    if($calificacion['ordinario']<6){
                                      $k++; 
                                  }
                                }

                            }
                              $j++;
                             // echo $sum;
                         }//fin foreach
                          $promedioU = $sum/$i;
                          $promedioU=  number_format((float)$promedioU, 1, '.', '');            

                          echo "<td>".$promedioU;
                          echo "</td>"; 
                          foreach ($semestres as $key => $semestre) {
                              if($semestre['cve_semestre']==$claveS){
                                echo "<td>".$semestre['situacion'];
                                echo "</td>";
                              }
                          }
                          
                          echo "<td>".$k; //Examenes reprobados
                          echo "</td>"; 
                          //CREDITOS X SEMESTRE
                          $totCred=0;
                          foreach ($creditos as $key => $credito) {
                            if($credito['cve_semestre']==$claveS){
                              $totCred = $credito['creditos']+$totCred;
                            }
                          }

                          echo "<td>".$totCred;
                          echo "</td>"; 
                          echo "<td> <button type=\"submit\" class=\"btn btn-block btn-primary  btn-sm\"  id=\"".$claveS."\" onClick=\"reply_click(this.id)\">Consultar</button> ";
                           

                          echo "</td>";
                          echo "</tr>";
                                  
                     
                      }//fin if vector
                   


                    }
                     
                     }                  
                   
                  }

                 

                ?>
              
                </tbody>
              </table>  
          
        </div>
          <!-- /.box-body -->
      </div>
      <?php  echo "<input type=\"hidden\" name=\"cve_s\" id=\"cve_s\"  value=\"\">"; ?>
      </form>
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
      "info": true,
      "autoWidth": false
    });
  });
</script>

<script type="text/javascript">
function reply_click(clicked_id)
{
      
    var click = clicked_id;
    
  $('#cve_s').val(clicked_id);
}
</script>