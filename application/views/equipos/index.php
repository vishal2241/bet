 
<?php $this->load->view('overall/header'); ?>
<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>public/plugins/datatables/css/dataTables.bootstrap.css">

<body>
  <?php $this->load->view('overall/nav2'); ?>
  <div id="container">
    <div class="">
      <div class="col-md-8 col-md-offset-2" >

       <table class="table table-striped table-hover dataTable" id="match">
        <thead>
          <tr>
            <th colspan="5" class="text-center success">EQUIPOS</th>
          </tr>
          <tr>
            <th width="">País</th>
            <th width="">Logo</th>
            <th width="">Nombre</th>
            <th width="">Editar/Eliminar <i class="fa fa-pencil-square-o" aria-hidden="true"></i></th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($equipos as $key => $value): ?>
           <tr>
             <td>
               <img width="24" src="<?= base_url(); ?>public/img/logos/country/<?= $value->IMG_PAIS ?>.png">
             </td>
             <td>
               <img width="24" src="<?= base_url(); ?>public/img/logos/team/<?= $value->IMG_PAIS  ?>/<?= $value->IMG ?>.png">
             </td>
             <td>
              <?= strtoupper($value->NOMBRE)  ?> 
            </td>

            <td>
              <a  class="btn btn-warning" href="<?php echo base_url(); ?>equipos/editar/<?= $value->ID_EQUIPO  ?>"><i class="fa fa-cog" aria-hidden="true"></i></a> 
              <a  class="btn btn-danger" onclick="DeleteItem('<?php echo base_url(); ?>equipos/eliminar/<?= $value->ID_EQUIPO  ?>')" >
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
  $(document).ready(function() {
    $('.dataTable').DataTable({
      "iDisplayLength": 20,
      "lengthMenu": [[10, 20, 50, -1], [10, 20, 50, "All"]],
      "autoWidth": true,           
      "sPaginationType": "full_numbers",
      //"order": [[ 1, 'desc' ], [ 0, 'asc' ]]
    });
  } );
</script>
</body>
</html>   