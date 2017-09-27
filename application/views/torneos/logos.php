<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<html lang="es">
<head>
	<?php $this->load->view('overall/header'); ?>
	<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>public/plugins/datatables/css/dataTables.bootstrap.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>public/plugins/datatables/css/buttons.dataTables.min.css">
	<style>
		.name {
			font-weight:bold;
			text-transform: uppercase;
		}
	</style>
</head>

<body class="components-page">
	<?php $this->load->view('overall/nav2'); ?>
	<div class="main main-raised">
		<div class="section">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-10 col-md-offset-1">
						<div class="tim-container">
							
							<h2 class="text-center" id="titulo">Logos FM</h2>
							<div class="table-responsive" id="all">
								<table class="table table-striped table-hover dataTable" id="FM">
									<thead>
										<tr>
											<th class="success">LOGO</th>
											<th class="success">EQUIPO</th>
											<th class="success">LIGA</th>
										</tr>
									</thead>
									<tbody>
										<?php foreach ($equipos as $key => $row): ?>
											<tr>
												<?php if ($row->IMG>0){ ?>
												<td><img src="<?= base_url() ?>public/img/logos/team/<?= $row->PAIS ?>/<?= $row->IMG ?>.png" alt=""></td>
												<?php } else { ?>
												<td><img src="<?= base_url() ?>public/img/logos/team/default.png" width="64px" alt=""></td>
												<?php } ?>
												<td><?= $row->NOMBRE  ?></td>
												<td><?= $row->PAIS ?></td>
											</tr>
										<?php endforeach ?>		
									</tbody>
								</table>
							</div>
							<!-- end container -->
						</div>
					</div>
				</div>
			</div>

			<?php $this->load->view('overall/footer'); ?>


			<script type="text/javascript" src="<?= base_url(); ?>public/plugins/datatables/js/jquery.dataTables.js"></script>
			<script type="text/javascript" src="<?= base_url(); ?>public/plugins/datatables/js/dataTables.bootstrap.js"></script>

			<script type="text/javascript" src="<?= base_url(); ?>public/plugins/datatables/js/dataTables.buttons.min.js"></script>
			<script type="text/javascript" src="<?= base_url(); ?>public/plugins/datatables/js/buttons.flash.min.js"></script>
			<script type="text/javascript" src="<?= base_url(); ?>public/plugins/datatables/js/jszip.min.js"></script>
			<script type="text/javascript" src="<?= base_url(); ?>public/plugins/datatables/js/pdfmake.min.js"></script>
			<script type="text/javascript" src="<?= base_url(); ?>public/plugins/datatables/js/vfs_fonts.js"></script>
			<script type="text/javascript" src="<?= base_url(); ?>public/plugins/datatables/js/buttons.html5.min.js"></script>
			<script type="text/javascript" src="<?= base_url(); ?>public/plugins/datatables/js/buttons.print.min.js"></script>
			<script>
				$(document).ready(function() {
					var table = 	$('.dataTable').DataTable({
						dom: 'Bfrtip',
						buttons: [
						'csv', 'excel', 'pdf', 'print'
						],
						"iDisplayLength": 50,
						"lengthMenu": [[50, 80, 100, -1], [50, 80, 100, "All"]],

						"columns": [
						{ "width": "10%" },
						{ "width": "30%", className: "name" },
						{ "width": "10%" },
						],


					});

		/*$('#FM td:first-child').each(function() {
			var id=$(this).attr('id');
			$('#'+id).after('<td>'+id+'</td>');
			console.log($(this).attr('id'));
		});*/



	} );

				//upload_table('2017-08-22','man');
//https://chrome.google.com/webstore/detail/allow-control-allow-origi/nlfbmbojpeacfghkpbjhddihlkkiljbi?hl=es-419&utm_source=chrome-ntp-launcher
</script>
</html>
