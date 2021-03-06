<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<html lang="es">
<head>
	<?php $this->load->view('overall/header'); ?>
	<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>public/plugins/datatables/css/dataTables.bootstrap.css">
</head>

<body class="components-page">
	<?php $this->load->view('overall/nav2'); ?>
	<div class="main main-raised">
		<div class="section">
			<div class="container">
				<div class="row">
					<div class="col-md-9">
						<div class="tim-container">
							<!-- tables row -->
							<div class="tim-row" id="tables-row">					 
								<div class="table-responsive">
									<h2>Api BetFair</h2>
									<table class="table">
										<tbody>
											<tr>
												<td>
													<a  class="btn btn-success btn-sm" href="<?php echo base_url(); ?>syncBetfair/syncPaises">Sync Paises <i class="fa fa-cog" aria-hidden="true"></i></a> 
												</td>
												<td>
													<a  class="btn btn-success btn-sm" href="<?php echo base_url(); ?>syncBetfair/syncCompetencias">Sync Competencias <i class="fa fa-cog" aria-hidden="true"></i></a> 
												</td>
												<td>
													<a  class="btn btn-success btn-sm" href="<?php echo base_url(); ?>syncBetfair/syncEventos">Sync Eventos <i class="fa fa-cog" aria-hidden="true"></i></a> 
												</td>
												<td>
													<a  class="btn btn-success btn-sm" href="<?php echo base_url(); ?>syncBetfair/syncTipoOdds">Sync Catalogo <i class="fa fa-cog" aria-hidden="true"></i></a> 
												</td>
												
											</tr>
										</tbody>
									</table>
									<!--<h2>Api Football</h2>
									<table class="table">
										<tbody>
											<tr>
												<td>
													<a  class="btn btn-success btn-sm" href="<?php echo base_url(); ?>sync/syncPaises">Sincronizar Paises  <i class="fa fa-cog" aria-hidden="true"></i></a> 
												</td>
												<td>
													<a  class="btn btn-success btn-sm" href="<?php echo base_url(); ?>sync/syncCompeticiones">Sincronizar Torneos  <i class="fa fa-cog" aria-hidden="true"></i></a> 
												</td>
												<td>
													<a  class="btn btn-success btn-sm" href="<?php echo base_url(); ?>sync/syncPartidos">Sincronizar Partidos  <i class="fa fa-cog" aria-hidden="true"></i></a> 
												</td>
												<td>
													<a  class="btn btn-success btn-sm" href="<?php echo base_url(); ?>sync/syncCuota">Sincronizar Cuotas  <i class="fa fa-cog" aria-hidden="true"></i></a> 
												</td>
											</tr>
										</tbody>
									</table>
									<h2>Betting Odds Api</h2>
									<table class="table">
										<tbody>
											<tr>
												<td>
													<a  class="btn btn-info btn-sm" href="<?php echo base_url(); ?>sync/syncCorredores">Sincronizar Corredores  <i class="fa fa-cog" aria-hidden="true"></i></a> 
												</td>
												<td>
													<a  class="btn btn-info btn-sm" href="<?php echo base_url(); ?>sync/syncLigas">Sincronizar Ligas  <i class="fa fa-cog" aria-hidden="true"></i></a> 
												</td>
												<td>
													<a  class="btn btn-info btn-sm" href="<?php echo base_url(); ?>sync/syncTipos">Sincronizar Tipos Cuota  <i class="fa fa-cog" aria-hidden="true"></i></a> 
												</td>
												<td>
													<a  class="btn btn-info btn-sm" href="<?php echo base_url(); ?>sync/syncEventos">Sincronizar Partidos  <i class="fa fa-cog" aria-hidden="true"></i></a> 
												</td>
											</tr>
										</tbody>
									</table> -->
								</div>
								<!-- end container -->
							</div>
						</div>
					</div>
					<div class="col-md-3">
						<div class="panel panel-default">
							<div class="panel-heading text-center"><b>Tiquete <i class="fa fa-money" aria-hidden="true"></i></b></div>
							<div class="panel-body">
								<div class="col-md-12">
									<table class="table table-condensed" >
										<thead class="tiquete">
											<tr>
												<th class="text-success">Partido</th>
												<th class="text-success" colspan="2">Cuota</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>
													Tolima vs Nacional
													<br>
													<b><span class="text-info text-bold bet">Gana Tolima</span></b>
												</td>
												<td>
													2.00
												</td>
												<td valign="middle">
													<span class="text-danger">
														<b><i class="fa fa-window-close " aria-hidden="true"></i> </b>
													</span>
												</td>
											</tr>



										</tbody>
									</table>
								</div>	
								<form>
									<div class="col-md-6">
										<div class="form-group label-floating">
											<label class="control-label">Cantidad</label>
											<input type="number" class="form-control">
										</div>	
									</div>	
									<div class="col-md-6">
										<div class="form-group label-floating">
											<label class="control-label">Ganancia</label>
											<input type="number" class="form-control" readonly>
										</div>	
									</div>	
									<button class="btn btn-primary col-md-12"><b>JUGAR </b> <i class="fa fa-futbol-o" aria-hidden="true"></i></button>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>

			<?php $this->load->view('overall/footer'); ?>


			<script type="text/javascript" src="<?= base_url(); ?>public/plugins/datatables/js/jquery.dataTables.js"></script>
			<script type="text/javascript" src="<?= base_url(); ?>public/plugins/datatables/js/dataTables.bootstrap.js"></script>
			<script type="text/javascript">
				$(document).ready(function() {
					$('#bets').DataTable({
						"iDisplayLength": -1,
					});
				} );


				/*for (var i = 0; i < 40; i++) {
				$("#bets > tbody").append('<tr> \
				<td class="text-center">19:00</td> \
				<td class="text-center">Botafogo PB</td> \
				<td class="text-center">Fortaleza</td> \
				<td class="text-center">2.00</td> \
				<td class="text-center"3.15</td> \
					<td class="text-center">3.30</td> \
					<td class="text-center">2.05</td> \
					<td class="text-center">1.58</td> \
					<td class="text-center">2.30</td> \
					<td class="text-center">1.98</td> \
					<td class="text-center">3.60</td> \
					<td class="text-center">1.21</td> \
					<td class="text-center">1.32</td> \
					<td class="text-center">1.59</td> \
					<td class="text-center">11.00</td> \
					<td class="text-center">7.60</td> \
				</tr>');
			} */


			var header_height;
			var fixed_section;
			var floating = false;

			$().ready(function(){
				suggestions_distance = $("#suggestions").offset();
				pay_height = $('.fixed-section').outerHeight();

				$(window).on('scroll', materialKit.checkScrollForTransparentNavbar);

			});

		</script>
		</html>
