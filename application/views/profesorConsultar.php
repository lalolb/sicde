  <!-- DataTables -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/datatables/dataTables.bootstrap.css">
  <!-- =============================================== -->
  <!-- Página o contenido principal -->
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Profesores
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Consultar Profesores</h3>
        </div>
          <div class="box-body">
            <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>RFC</th>
                  <th>Nombre</th>
                  <th>A. Paterno</th>
                  <th>A. Materno</th>
                </tr>
                </thead>
                <tbody>
                <?php
                foreach ($profesores as $key => $profesor) {
                  echo "<tr>";
                  echo "<td>".$profesor['clave']."</td>";
                  echo "<td>".$profesor['nombre']."</td>";
                  echo "<td>".$profesor['paterno']."</td>";
                  echo "<td>".$profesor['materno']."</td>";
                  echo "</tr>";
                }
                ?>
                </tbody>
              </table>
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