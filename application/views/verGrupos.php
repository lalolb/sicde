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
        <form class="form-horizontal" action=" " method="get">

      <table id="example2" class="table table-bordered table-hover">
        <thead>
            <tr>
                <th>Clave</th>
                <th>Materia</th>
                <th>Capacidad</th>
                <th>Horarios</th>
                <th></th>
            </tr>
        </thead>
         <tbody>
            <?php 
              foreach ($grupos as $key => $grupo) {
                echo "<tr>";
                  echo "<td>".$grupo['clave']."</td>";
                  echo "<td>".$grupo['nombre']."</td>";
                  echo "<td>".$grupo['capacidad']."</td>";
                  $dias = explode(",", $grupo['horario']);
                  echo "<td>";
                  for ($i=0; $i < count($dias)-1; $i++) { 
                    echo $dias[$i]." de ".$dias[$i+1]." a ".$dias[$i+2]."<br> ";
                    $i = $i +2;
                  }
                  echo  "</td>";
                  echo "<td><a href=\"".site_url('Paginas/verGrupo/'.$grupo['clave'])."\" class=\"btn btn-block btn-primary\">Ver grupo</a></td>";
                echo "</tr>";
              }

            ?>

      </table>
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
      "paging": true,
      "lengthChange": false,
      "searching": true,
      "ordering": true,
      "info": true,
      "autoWidth": false
    });
  });
</script>