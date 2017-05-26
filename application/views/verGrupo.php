<!-- DataTables -->
<link rel="stylesheet" href="<?php echo base_url()?>assets/plugins/datatables/dataTables.bootstrap.css">

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Grupos
      </h1>
    </section>
    <!-- creditos = ht*2 +hp -->

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Consultar grupo</h3>
        </div>  
       

        <div class="box-body">
        <form class="form-horizontal" action=" " method="get">

      <table id="example2" class="table table-bordered table-hover">
        <thead>
            <tr>
                <th>No. Cuenta</th>
                <th>Nombre</th>
                <th>Ordinario</th>
                <th>Extra</th>
                <th>Título</th>
                <th class="noExl"></th>
            </tr>
        </thead>
         <tbody>
            <?php 
              foreach ($alumnos as $key => $alumno) {
                echo "<tr>";
                  echo "<td>".$alumno['cuenta']."</td>";
                  echo "<td>".$alumno['nombre']." ".$alumno['paterno']." ".$alumno['materno']."</td>";
                  echo "<td>".$alumno['ordinario']."</td>";
                  echo "<td>".$alumno['extra']."</td>";
                  echo "<td>".$alumno['titulo']."</td>";
                  if ($alumno['aprobado']=='0') {
                    echo "<td class=\"noExl\"><a href=\"".site_url('Paginas/calificar/'.$alumno['cuenta']).'/'.$alumno['clave']."\" class=\"btn btn-block btn-primary\">Calificar</a></td>";
                  }else{
                    echo "<td></td>";
                  }
                echo "</tr>";
              }

            ?>

      </table>
    </form>
  </div>
  <!-- /.box-body -->
  <div class="box-footer">
  	<button class="btn btn-info pull-right" onclick="descargarLista();">Descargar</button>
  </div>
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
<script src="<?php echo base_url()?>assets/plugins/table2excel/jquery.table2excel.min.js"></script>

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

  function descargarLista(){
	  $("#example2").table2excel({
	    // exclude CSS class
	    exclude: ".noExl",
	    name: "Worksheet Name",
	    filename: "SomeFile.xls" //do not include extension
	  });
  }
</script>