<!-- DataTables -->
<link rel="stylesheet" href="<?php echo base_url()?>assets/plugins/datatables/dataTables.bootstrap.css">

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
          <h3 class="box-title">Consultar materias</h3>
        </div>  
       

        <div class="box-body">
        <form class="form-horizontal" action=" " method="get">

      <table id="example2" class="table table-bordered table-hover">
        <thead>
            <tr>
                <th>Clave</th>
                <th>Nombre</th>
                <th>Horas teóricas</th>
                <th>Horas Prácticas</th>
                <th>Créditos</th>
                <th>Carrera </th>
            </tr>
        </thead>
         <tbody>
            <?php 
              foreach ($materias as $key => $materia) {
                echo "<tr>";
                  echo "<td>".$materia['clave']."</td>";
                  echo "<td>".$materia['nombre']."</td>";
                  echo "<td>".$materia['hrs_teoricas']."</td>";
                  echo "<td>".$materia['hrs_practicas']."</td>";
                  echo "<td>".$materia['creditos']."</td>";
                  foreach ($carreras as $key => $carrera) {
                    if($materia['cve_carrera']==$carrera['clave'])
                      echo "<td>".$carrera['nombre']."</td>";
                    }
                  
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