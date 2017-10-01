 
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
            <th width="">#</th>
            <th width="">Privilegio</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($privilegios as $key => $row): ?>
            <tr>
              <td><?= $row->ID_PRIVILEGIO ?></td>
              <td><?= $row->NOMBRE?></td>
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

</body>
</html>   