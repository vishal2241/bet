 
<?php $this->load->view('overall/header'); ?>
<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>public/plugins/datatables/css/dataTables.bootstrap.css">

<body>
  <?php $this->load->view('overall/nav2'); ?>
  <div id="container">
    <div class="row">
      <div class="col-md-8 col-md-offset-2" >
       <h2 align="center">Usuarios</h2>
       <table class="table table-striped table-hover dataTable" id="match">
        <thead>
         <tr>
          <th colspan="6" class="text-right">
           <a  class="btn btn-success" href="<?= base_url(); ?>/usuarios/agregar">Nuevo &nbsp; <i class="fa fa-plus" aria-hidden="true"></i></a> 
         </th>
       </tr>
       <tr>
        <th colspan="6" class="text-center bg-primary">USUARIOS</th>
      </tr>
      <tr>
        <th width="">Cedula</th>
        <th width="">Nombre</th>
        <th width="">Usuario</th>
        <th width="">Saldo</th>
        <?php if ($this->session->userdata('type')==1): ?>
          <th width="">Editar/Eliminar <i class="fa fa-pencil-square-o" aria-hidden="true"></i></th>
        <?php endif ?>
        <th width="">Recargar</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($usuarios as $key => $value): ?>
       <tr>
        <td><?= $value->CEDULA  ?></td>
        <td><?= strtoupper($value->NOMBRE)  ?></td>
        <td><?= strtoupper($value->USUARIO)  ?></td>
        <td><?= $value->SALDO ?></td>
        <?php if ($this->session->userdata('type')==1): ?>
          <td>
            <a  class="btn btn-warning" href="<?php echo base_url(); ?>usuarios/editar/<?= $value->CEDULA  ?>"><i class="fa fa-cog" aria-hidden="true"></i></a> 
            <a  class="btn btn-danger" onclick="DeleteItem('<?php echo base_url(); ?>usuarios/eliminar/<?= $value->CEDULA  ?>')" >
              <i class="fa fa-trash" aria-hidden="true"></i>
            </a> 
          </td>
        <?php endif ?>
        <td>
          <a  class="btn btn-success" href="<?php echo base_url(); ?>usuarios/recargar/<?= $value->CEDULA  ?>"><i class="fa fa-money" aria-hidden="true"></i></a> 
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
      "order": [[ 1, 'desc' ]]
    });
  } );
</script>
</body>
</html>   