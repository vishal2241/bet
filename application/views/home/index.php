<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<html>
<head>
  <?php $this->load->view('overall/header'); ?>
</head>

<body class="fixed-nav" id="page-top">

  <!-- Navigation -->
  <?php $this->load->view('overall/nav'); ?>
  <div class="content-wrapper py-3">

    <div class="container-fluid">
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="<?= base_url(); ?>#">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">My Dashboard</li>
      </ol>
    </div>
  </div>
</div>

</div>

<a class="scroll-to-top rounded" href="<?= base_url(); ?>#page-top">
  <i class="fa fa-angle-up"></i>
</a>

<!-- ############## Logout Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Select "Logout" below if you are ready to end your current session.
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        <a class="btn btn-primary" href="<?= base_url(); ?>login.html">Logout</a>
      </div>
    </div>
  </div>
</div>
<?php $this->load->view('overall/footer'); ?>
</body>

</html>
