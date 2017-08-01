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
			<div class="container">
				<div class="row">
					<div class="col-md-9">
						<div class="tim-container">
							<button class="btn btn-info  btn-sm" id="today">
								<i class="material-icons">alarm</i> Hoy
							</button>
							<button class="btn btn-info  btn-sm" id="tomorrow">
								<i class="material-icons">event</i> Mañana
							</button>
							<button class="btn btn-info  btn-sm">
								<i class="material-icons">event</i> Todos
							</button>
							<!-- tables row -->
							<h2 class="text-center" id="titulo"></h2>
							<div class="table-responsive" id="all">
								<table class="table" id="bets">
									<tbody>
									</tbody>
								</table>
							</div>
							<!-- end container -->
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


				$( document ).ready(function() {
					moment.locale('es');
					var url= '<?= base_url(); ?>';
					var fecha=moment().format('YYYY-MM-DD');  
					$("#titulo").empty();
					$("#titulo").append(moment().format('dddd Do [de] MMMM'));
		 
					get_bets(fecha, url);


					$( "#today" ).click(function() {
						$("#titulo").empty();
						$("#titulo").append(moment().format('dddd Do [de] MMMM'));
						var fecha=moment().format('YYYY-MM-DD');  
						$("#bets > tbody").empty();
						get_bets(fecha, url);
					});

					$( "#tomorrow" ).click(function() {
						$("#titulo").empty();
						$("#titulo").append(moment().add(1, 'days').format('dddd Do [de] MMMM'));
						var fecha=moment().add(1, 'days').format('YYYY-MM-DD');  
						$("#bets > tbody").empty();
						get_bets(fecha, url);
					});



				});



			</script>
			</html>
