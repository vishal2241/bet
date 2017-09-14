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
									<div>
										&nbsp;<button class="btn btn-Primary" id="go">Go</button>
									</div>
								</td>
							</tr>
						</table>	
						<table class="table table-striped table-hover dataTable" id="match">
							<thead>
								<tr>
									<th colspan="9" class="text-center success">Mis Apuestas</th>
								</tr>
								<tr>
									<th width=""># Tiquete</th>
									<th width="">Eventos</th>
									<th width="">Fecha</th>
									<th width="">Jugado</th>
									<th width="">Ganancia</th>
									<th width="">Estado</th>
									<th width="">Resultado</th>
									<th width=""> <i class="fa fa-print" aria-hidden="true"></i></th>
								</tr>
							</thead>
							<tbody> 
							</tbody>
						</table>									

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

						function get_apuestas (from, to) {
							$.post('<?= base_url(); ?>ajax/json_apuestas', {from: from, to:to}, function(data) {
								console.log(data)
								if (data!=null) {
									$.each(data, function(a, row) {
										var rowNode=   table.row.add( [ 
											''+row.FECHA+'' , 
											] )
										.draw()
										.node();
									});
								}
							}, "json");

						}
						var from = $("#from").val();
						var to   = $("#to").val();

						get_apuestas(from, to, 'NoAutorizados');


						$( "#go" ).click(function() {
							table
							.clear()
							.draw();
							get_partidos($('#from').val(), $('#to').val(), $( "#filtro option:selected" ).text());
						});





					} );
				</script>
				</html>
