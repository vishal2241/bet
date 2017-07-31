 
<?php $this->load->view('overall/header'); ?>
<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>public/plugins/datatables/css/dataTables.bootstrap.css">

<body>
  <?php $this->load->view('overall/nav'); ?>
  <div id="container">
    <h2 align="center"></h2>
    <div class="">
      <div class="col-md-2"></div>
      <div class="col-md-8">
        <table class="table table-striped table-hover dataTable" id="">
          <thead>
            <tr>
              <th>
                <div class="form-group">
                <label for="fecha">Fecha:</label>
                  <input type="date" class="form-control" id="fecha">
                </div>
              </th>
              <th colspan="4" ></th>
            </tr> 
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


      $.getJSON(''+url+'ajax/json_match_all', {fecha: fecha}, function(match) {
        $.each(match, function(a, row) {
          $("#bets > tbody #"+compe+"").after('\
            <tr id='+ row.ID+'>\
              <td  class="text-center" width="6%" >'+ row.HORARIO+'</td>\
              <td  class="text-left" width="12%" >'+ row.LOCAL+'</td>\
              <td  class="text-left" width="12%" >'+ row.VISITANTE+'</td>\
              <td  class="text-center" width="7%" >'+ isEmpty(row._1)+'</td>\
              <td  class="text-center" width="7%" >'+ isEmpty(row._X)+'</td>\
              <td  class="text-center" width="7%" >'+ isEmpty(row._2)+'</td>\
              <td  class="text-center" width="7%" >'+ isEmpty(row._1X)+'</td>\
              <td  class="text-center" width="7%" >'+ isEmpty(row._12)+'</td>\
              <td  class="text-center" width="7%" >'+ isEmpty(row._2X)+'</td>\
              <td  class="text-center" width="7%" >'+ isEmpty(row.UNDER_25)+'</td>\
              <td  class="text-center" width="7%" >'+ isEmpty(row.OVER_25)+'</td>\
              <td  class="text-center" width="7%" >'+ isEmpty(row.GG)+'</td>\
              <td  class="text-center" width="7%" >'+ isEmpty(row.NG)+'</td>\
            </tr>\
            ');
        });
       

      });









      var table =   $('.dataTable').DataTable({
        "bPaginate": true,
        "bLengthChange": false,
        "bFilter": true,
        "bInfo": true,
        "bAutoWidth": false,
        "order": [[ 2, 'desc' ], [ 3, 'desc' ]]
      });

    } );
  </script>
</body>
</html>   