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
										<input type="date" class="form-control" id="from" >
									</div>
								</td>
								<td>
									<div class="form-group">
										<label for="fecha">Fin : </label>
										<input type="date" class="form-control" id="to">
									</div>
								</td>
								<td>
									<div>
										&nbsp;<button class="btn btn-Primary" id="go">Go</button>
									</div>
								</td>
							</tr>
						</table>	
						<table class="table table-striped table-hover dataTable" id="match" >
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
									<th width="">&nbsp;</i></th>
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
						var url= '<?= base_url(); ?>';
						$("#from").val(moment().subtract(3, 'days').format('YYYY-MM-DD'));
						$("#to").val(moment().format('YYYY-MM-DD'));


						var table =   $('.dataTable').DataTable({
							"bPaginate": true,
							"bLengthChange": false,
							"bFilter": true,
							"bInfo": true,
							"bAutoWidth": false,
							"order": [[ 2, 'desc' ], [ 5, 'asc' ]],
							"lengthMenu": [[10, 50, 100, -1], [10, 50, 100, "All"]],
							"iDisplayLength": 100
						});

						function get_apuestas (from, to) {
							$.ajax({
								dataType: 'json',
								async: true,
								url: url+'ajax/json_apuestas',
								type: 'post',
								data: {from: from, to:to},
								success: function(data){

									if (data!=null) {
										$.each(data, function(a, row) {
											switch (row.RESULTADO){
												case "GANADOR":
												var resultado="success";
												break;
												case "PERDEDOR":
												var resultado="danger";
												break;
											}
											switch (row.ESTADO){
												case "FINALIZADA":
												var estado="info";
												break;
												case "JUGANDO":
												var resultado="warning";
												var estado="warning";
												break;
											}
											var rowNode=   table.row.add( [ 
												''+row.ID_APUESTA+'',
												''+row.NRO_EVENTOS+'',
												''+row.FECHA+'',
												''+$.number(row.VALOR, 0, ',', '.' )+'',
												''+$.number(row.GANANCIA, 0, ',', '.' )+'',
												'<span class="label label-'+estado+' ">'+row.ESTADO+'</span>',
												'<span class="label label-'+resultado+' ">'+row.RESULTADO+'</span>',
												'<a   href="'+url+'apuestas/ver/'+row.ID_APUESTA+'"  target="_blank"><i style="font-size:20px" class="fa fa-eye" aria-hidden="true"></i></a>\
												&nbsp; <a   href="'+url+'apuestas/print/'+row.ID_APUESTA+'"  target="_blank"><i style="font-size:20px" class="fa fa-print" aria-hidden="true"></i></a>' 
												] )
											.draw()
											.node();
										});
									}
									
								},
								error: function(e){
									console.log(e);
								}
							});
						}

						var from = $("#from").val();
						var to   = $("#to").val();

						get_apuestas(from, to);


						$( "#go" ).click(function() {
							table
							.clear()
							.draw();
							get_apuestas($('#from').val(), $('#to').val(), $( "#filtro option:selected" ).text());
						});





					} );
				</script>
				</html>
