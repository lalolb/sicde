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
          <h3 class="box-title">Consultar Alumnos</h3>
        </div>
          <div class="box-body">
            <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>Indicador</th>
                  <th>Valor</th>
                </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Alumnos hombres:</td>
                    <td><?php echo $alumnos_M['v'] ?></td>
                  </tr>

                  <tr>
                    <td>Alumnos mujeres:</td>
                    <td><?php echo $alumnos_F['v'] ?></td>
                  </tr>
                  <tr>
                    <td>Alumnos provenientes de Estado de México:</td>
                    <td><?php echo $alumnos_edo['v'] ?></td>
                  </tr>
                  <tr>
                    <td>Alumnos provenientes fuera del Estado de México:</td>
                    <td><?php echo $alumnos_fuera['v'] ?></td>
                  </tr>
                  <tr>
                    <td>Profesores hombres:</td>
                    <td><?php echo $profesores_M['v'] ?></td>
                  </tr>
                  <tr>
                    <td>Profesores mujeres:</td>
                    <td><?php echo $profesores_F['v'] ?></td>
                  </tr>
                  <tr>
                    <td>Profesores provenientes de Estado de México:</td>
                    <td><?php echo $profesores_edo['v'] ?></td>
                  </tr>
                  <tr>
                    <td>Profesores provenientes fuera del Estado de México:</td>
                    <td><?php echo $profesores_fuera['v'] ?></td>
                  </tr>
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
      "paging": false,
      "lengthChange": false,
      "searching": true,
      "ordering": false,
      "info": true,
      "autoWidth": false
    });
  });
</script>