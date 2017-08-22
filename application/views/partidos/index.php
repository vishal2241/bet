 
<?php $this->load->view('overall/header'); ?>
<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>public/plugins/datatables/css/dataTables.bootstrap.css">

<body>
  <?php $this->load->view('overall/nav2'); ?>
  <div id="container">
    <div class="">
      <div class="col-md-8 col-md-offset-2" >
        <table  width="100%">
          <tr>
            <td>
              <div class="form-group">
                <label for="fecha">Inicio : </label>
                <input type="date" class="form-control" id="from" value="<?= date ('Y-m-d')?>">
              </div>
            </td>
            <td>
              <div class="form-group">
                <label for="fecha">Fin : </label>
                <input type="date" class="form-control" id="to" value="<?= date ('Y-m-d')?>">
              </div>
            </td>
            <td>
              <div class="form-group">
                <label for="fecha">Filtro : </label>
                <select class="form-control" id="filtro">
                  <option value="Autorizados">Autorizados</option>
                  <option value="NoAutorizados" selected>No autorizados</option>
                  <option  value="Todos" >Todos</option>
                  <option value="Cancelados">Cancelados</option>
                </select>
              </div>
            </td>
            <td>
              <div class="">
                &nbsp;<button class="btn btn-Primary" id="go">Go</button>
              </div>
            </td>
            <td>
              <div class="">
               <a href="<?= base_url(); ?>partidos/agregar" class="btn btn-success" ><i class="fa fa-plus-square" aria-hidden="true"></i></a>
             </div>
           </td>
         </tr>
       </table>
       <table class="table table-striped table-hover dataTable" id="match">
        <thead>
          <tr>
            <th colspan="5" class="text-center success">Partidos</th>
          </tr>
          <tr>
            <th width="12%">Fecha</th>
            <th width="5%">Hora</th>
            <th width="43%">Partido</th>
            <th width="20%">Estado</th>
            <th width="20%">Editar/Eliminar <i class="fa fa-pencil-square-o" aria-hidden="true"></i></th>
          </tr>
        </thead>
        <tbody> 
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
  $(document).ready(function() {

    var table =   $('.dataTable').DataTable({
      "bPaginate": true,
      "bLengthChange": false,
      "bFilter": true,
      "bInfo": true,
      "bAutoWidth": false,
      "order": [[ 0, 'desc' ], [ 1, 'asc' ]],
      "lengthMenu": [[10, 50, 100, -1], [10, 50, 100, "All"]],
      "iDisplayLength": 100
    });

    function get_partidos (from, to, filtro) {
      $.post('<?= base_url(); ?>ajax/json_partidos', {from: from, to:to, filtro:filtro}, function(match) {
       if (match!=null) {
         $.each(match, function(a, row) {
          var rowNode=   table.row.add( [ 
            ''+row.FECHA+'' , 
            ''+row.HORARIO+'' , 
            row.LOCAL+' VS. '+row.VISITANTE+'<br><small>'+row.PAIS + ' - ' + row.TORNEO + '</small>', 
            ''+row.ESTADO+'' , 
            '<a  class="btn btn-warning btn-sm" href="<?=  base_url() ?>partidos/editar/'+row.ID_PARTIDO+'"><i class="fa fa-cog" aria-hidden="true"></i></a> \
            <a  class="btn btn-danger btn-sm" onclick="DeleteItem(\'<?= base_url() ?>partidos/editar/'+row.ID_PARTIDO+'\')" >\
              <i class="fa fa-trash" aria-hidden="true"></i>\
            </a> ' 
            ] )
          .draw()
          .node();
        });
       }
     }, "json");

    }
    var from = $("#from").val();
    var to   = $("#to").val();

    get_partidos(from, to, 'NoAutorizados');


    $( "#go" ).click(function() {
      table
      .clear()
      .draw();
      get_partidos($('#from').val(), $('#to').val(), $( "#filtro option:selected" ).text());
    });





  } );
</script>
</body>
</html>   