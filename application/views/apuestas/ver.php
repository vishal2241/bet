<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<html lang="es">
<head>
	<?php $this->load->view('overall/header'); ?>
	<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>public/plugins/datatables/css/dataTables.bootstrap.css">
</head>

<body class="components-page">
 


	<div class="main main-raised">
		<div class="section">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-8 content col-md-offset-2">		
						<table class="table table-striped dataTable" id="match">
							<thead>
								<tr>
									<th class="text-center <?= $color_a ?>" colspan="7"><?= $resultado ?></th>
								</tr>
								<tr>
									<th colspan="2" class="text-center ">APOSTADO: $<?= number_format($apostado, 0, '.', '.') ?></th>
									<th colspan="1" class="text-center ">GANANCIA: $<?= number_format($ganancia, 0, '.', '.') ?></th>
									<th colspan="3" class="text-center ">FECHA APUESTA: <?= $fecha ?></th>
								</tr>
								<tr>
									<th>Fecha</th>
									<th>Hora</th>
									<th>Partido</th>
									<th>Selección</th>
									<th>Cuota</th>
									<th>Resultado</th>
								</tr>
							</thead>
							<tfoot>
								<th colspan="6" class="text-center bg-faded"> Apuesta: <?= $estado ?></th>
							</tfoot>	
							<tbody> 
								<?php foreach ($detalle as $key => $row): ?>
									<tr class="text-<?= $row['COLOR'] ?>">
										<td><?= $row['FECHA'] ?></td>
										<td><?= $row['HORARIO'] ?></td>
										<td >
											<b><?= $row['PARTIDO'] ?></b>
											<br><small><?= $row['LIGA'] ?></small>
										</td>
										<td><span class="label label-primary"><?= $row['CUOTA'] ?></span></td>
										<td><?= $row['VALOR'] ?></td>
										<?php  ?>
										<td class="text-<?= $row['COLOR'] ?> text-center"><?= $row['RESULTADO_DETALLE'] ?> <i class="fa <?= $row['ICON'] ?>" aria-hidden="true"></i></td>
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
							{ "width": "40%" },
							{ "width": "15%" },
							{ "width": "5%" },
							{ "width": "15%" },

							]
						});
					});
				</script>
				</html>
