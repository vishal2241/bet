 
<?php $this->load->view('overall/header'); ?>
<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>public/plugins/datatables/css/dataTables.bootstrap.css">

<body>
  <?php $this->load->view('overall/nav'); ?>
  <div id="container">
    <h2 align="center"></h2>
    <div class="">
      <div class="col-md-2"></div>
      <div class="col-md-8">
        <table border="0" cellspacing="5" cellpadding="5">
          <tbody>
            <tr>
              <td>De:</td>
              <td><input type="text" id="from" name="from" value="<?= date('Y-m-d') ?>"></td>
            </tr>
            <tr>
              <td>Hasta:</td>
              <td><input type="text" id="to" name="to" value="<?= date('Y-m-d') ?>"></td>
            </tr>
          </tbody>
        </table>
        <table class="table table-striped table-hover dataTable" id="">
          <thead>
            <tr>
              <th colspan="5" class="text-center info">Partidos</th>
            </tr>
            <tr>
              <th width="50%">Partido</th>
              <th width="%">Estado</th>
              <th width="%">Fecha</th>
              <th width="%">Hora</th>
              <th width="%"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></th>
            </tr>
          </thead>
          <tbody > 
            <?php foreach ($partidos as $key => $row): ?>
              <tr>
                <td><b><?= $row->LOCAL .' ['.$row->GOLES_LOCAL.' vs. '. $row->GOLES_VISITANTE.'] ' .$row->VISITANTE . '</b><br>'. $row->PAIS . ' - '.  $row->TORNEO ?></td>
                <td><?= $row->ESTADO  ?></td>
                <td><?= $row->FECHA  ?></td>
                <td><?= $row->HORARIO  ?></td>
                <td>
                  <a  class="btn btn-warning btn-sm" href="<?php echo base_url(); ?>conceptos/editar/<?php echo $row->ID_PARTIDO; ?>"><i class="fa fa-cog" aria-hidden="true"></i></a> 
                  <a  class="btn btn-danger btn-sm" onclick="DeleteItem('¿Está seguro de eliminar este concepto?', '<?php echo base_url(); ?>conceptos/eliminar/<?php echo $row->ID_PARTIDO ?>')" >
                    <i class="fa fa-trash" aria-hidden="true"></i>
                  </a> 
                </td>
              </tr>
            <?php endforeach ?>


          </tbody>
        </table>

      </div>
      <div class="col-md-2"></div>
    </div>  
  </div>
  <?php $this->load->view('overall/footer'); ?>
  <script type="text/javascript" src="<?= base_url(); ?>public/plugins/datatables/js/jquery.dataTables.js"></script>
  <script type="text/javascript" src="<?= base_url(); ?>public/plugins/datatables/js/dataTables.bootstrap.js"></script>
  <script type="text/javascript">
//https://datatables.net/examples/plug-ins/range_filtering.html
    $.fn.dataTable.ext.search.push(
      function( settings, data, dataIndex ) {
        var min = parseInt( $('#from').val(), 10 );
        var max = parseInt( $('#to').val(), 10 );
        var age = parseFloat( data[2] ) || 0; // use data for the age column

        if ( ( isNaN( min ) && isNaN( max ) ) ||
         ( isNaN( min ) && age <= max ) ||
         ( min <= age   && isNaN( max ) ) ||
         ( min <= age   && age <= max ) )
        {
          return true;
        }
        return false;
      }
      );


    $(document).ready(function() {
     var table =   $('.dataTable').DataTable({
      "bPaginate": true,
      "bLengthChange": false,
      "bFilter": true,
      "bInfo": true,
      "bAutoWidth": false,
      "order": [[ 2, 'desc' ], [ 3, 'desc' ]]
    });

    // Event listener to the two range filtering inputs to redraw on input
    $('#from, #to').keyup( function() {
      table.draw();
    } );

  } );
</script>
</body>
</html>   