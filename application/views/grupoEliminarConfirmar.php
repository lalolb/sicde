<!-- DataTables -->
<link rel="stylesheet" href="<?php echo base_url()?>assets/plugins/datatables/dataTables.bootstrap.css">

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
          <h3 class="box-title">Consultar grupos</h3>
        </div>  
       

        <div class="box-body">
        <form class="form-horizontal" action="<?php echo site_url('/Grupos/eliminarGrupo')?>" method="post">
       <?php echo "<input type=\"hidden\" name=\"claveG\" id=\"claveG\" value=\"".$grupo['clave']."\">"; ?>

      <table id="example2" class="table table-bordered table-hover">
        <thead>
            <tr>
                <th>Clave</th>
                <th>Profesor </th>
                <th>Materia</th>
                <th>Capacidad</th>
                <th>Horarios</th>
            </tr>
        </thead>
         <tbody>
            <?php 
             
                echo "<tr>";
                  echo "<td>".$grupo['clave']."</td>";
                  echo "<td>";
                  foreach ($profesores as $key => $profesor) {
                     if($profesor['RFC']==$grupo['cve_profesor']){
                       echo $profesor['nombre']." ".$profesor['paterno']." ".$profesor['materno'];
                     }
                  }
                  echo "</td>";
                  echo "<td>";
                  foreach ($materias  as $key => $materia) {
                      if($materia['clave']==$grupo['cve_materia']){
                        echo $materia['nombre'];
                             
                      }
                  }
                  echo "</td>";
                  echo "<td>".$grupo['capacidad']."</td>";
                  
                  $dias = explode(",", $grupo['horario']);
                  echo "<td>";
                  for ($i=0; $i < count($dias)-1; $i++) { 
                    echo $dias[$i]." de ".$dias[$i+1]." a ".$dias[$i+2]."<br> ";
                    $i = $i +2;
                  }
                  echo  "</td>";
                  
                echo "</tr>";
              
            ?>

      </table>
      <div>
          <button type="submit" class="btn btn-danger pull-right">Eliminar</button>
        </div>
    </form>
  </div>

        <!-- /.box-body -->
        <div class="box-footer">
          
        <!-- /.box-footer -->
       
      </div>

      <!-- /.box -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

<!-- DataTables -->
<script src="<?php echo base_url()?>assets/plugins/datatables/jquery.dataTables.js"></script>
<script src="<?php echo base_url()?>assets/plugins/datatables/dataTables.bootstrap.js"></script>

<script>
  $(function () {
    $('#example2').DataTable({
      "paging": false,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": false,
      "autoWidth": false
    });
  });
</script>