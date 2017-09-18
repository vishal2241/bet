<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<html lang="es">
<head>
	<?php $this->load->view('overall/header'); ?>
	<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>public/plugins/datatables/css/dataTables.bootstrap.css">
</head>

<body class="components-page">
	<?php $this->load->view('overall/nav'); ?>


	<div class="main main-raised">
		<div class="section">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-8 content col-md-offset-2">		
						<table class="table table-striped table-hover dataTable" id="match">
							<thead>
								<tr>
									<th class="text-center success" colspan="7">Tiquete # <?= $tiquete ?> </th>
								</tr>
								<tr>
									<th colspan="3" class="text-center ">FECHA APUESTA: <?= $fecha ?></th>
									<th colspan="1" class="text-center ">APOSTADO: $<?= number_format($apostado, 0, '.', '.') ?></th>
									<th colspan="3" class="text-center ">GANANCIA: $<?= number_format($ganancia, 0, '.', '.') ?></th>
								</tr>
								<tr>
									<th width="">Fecha</th>
									<th width="">Hora</th>
									<th width="">Partido</th>
									<th width="">Selección</th>
									<th width="">Cuota</th>
									<th width="">Estado</th>
								</tr>
							</thead>
							<tbody> 
								<?php foreach ($detalle as $key => $row): ?>
									<tr>
										<td><?= $row['FECHA'] ?></td>
										<td><?= $row['HORARIO'] ?></td>
										<td>
										<?= $row['PARTIDO'] ?>
											<br><small><?= $row['LIGA'] ?></small>
										</td>
										<td><?= strtoupper($row['CUOTA']) ?></td>
										<td><?= $row['VALOR'] ?></td>
										<td class="text-success text-center"><i class="fa fa-check" aria-hidden="true"></i></td>
									</tr>
								<?php endforeach ?>
							</tbody>
						</table>									

					</div>
				</div>
				<?php $this->load->view('overall/footer'); ?>
				<script type="text/javascript" src="<?= base_url(); ?>public/plugins/datatables/js/jquery.dataTables.js"></script>
				<script type="text/javascript" src="<?= base_url(); ?>public/plugins/datatables/js/dataTables.bootstrap.js"></script>
				<script>
					$(document).ready(function() {
						var url= '<?= base_url(); ?>';


						var table =   $('.dataTable').DataTable({
							"bPaginate": false,
							"bLengthChange": false,
							"bFilter": true,
							"bInfo": true,
							"bAutoWidth": false,
							"order": [[ 0, 'asc' ], [ 1, 'asc' ]],
							//"lengthMenu": [[10, 50, 100, -1], [10, 50, 100, "All"]],
							"iDisplayLength": 100,
							"columns": [
							{ "width": "10%" },
							{ "width": "10%" },
							{ "width": "45%" },
							{ "width": "15%" },
							{ "width": "5%" },
							{ "width": "5%" },

							]
						});
					});
				</script>
				</html>
