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
					<div class="col-md-9">
						<div class="tim-container">
							<button class="btn btn-success  btn-sm" id="today">
								<i class="material-icons">alarm</i> Hoy
							</button>
							<button class="btn btn-success  btn-sm" id="tomorrow">
								<i class="material-icons">event</i>  
							</button>
							<button class="btn btn-success  btn-sm" id="after-tomorrow">
								<i class="material-icons">event</i>  
							</button>
							<button class="btn btn-success  btn-sm" id="after3">
								<i class="material-icons">event</i>  
							</button>
							<!-- tables row -->
							<h3 class="text-center text-uppercase bold"  id="titulo"></h3>
							<p class="text-center text-uppercase bold"  id="totalDia"></p>
							<div id="all">
								
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
					
					//Clic odd
					$('#all').on('click', '[data-type="odd"]', function(){
						

						if ($(this).hasClass("actived")) {
							$(this).closest('tr').find('.actived').removeClass('actived');
							$(this).removeClass( "actived" );
						}	else {
							$(this).closest('tr').find('.actived').removeClass('actived');
							$(this).addClass( "actived" );
						}
						
					});



					//Botones
					$("#tomorrow").empty();
					$("#tomorrow").append(moment().add(1, 'days').format('dddd Do [de] MMMM'));
					$("#after-tomorrow").empty();
					$("#after-tomorrow").append(moment().add(2, 'days').format('dddd Do [de] MMMM'));
					$("#after3").empty();
					$("#after3").append(moment().add(3, 'days').format('dddd Do [de] MMMM'));

					//Cargados automaticamente
					var url= '<?= base_url(); ?>';
					var fecha=moment().format('YYYY-MM-DD');  
					$("#titulo").empty();
					$("#titulo").append(moment().format('dddd Do [de] MMMM'));
					get_bets(fecha, url);
					get_totalMatch(fecha, url);

					//Clic today
					$( "#today" ).click(function() {
						$("#titulo").empty();
						$("#titulo").append(moment().format('dddd Do [de] MMMM'));
						var fecha=moment().format('YYYY-MM-DD');  
						$("#bets > tbody").empty();
						get_bets(fecha, url);
						get_totalMatch(fecha, url);
					});
					//Clic tomorrow
					$( "#tomorrow" ).click(function() {
						$("#titulo").empty();
						$("#titulo").append(moment().add(1, 'days').format('dddd Do [de] MMMM'));
						var fecha=moment().add(1, 'days').format('YYYY-MM-DD');  
						$("#bets > tbody").empty();
						get_bets(fecha, url);
						get_totalMatch(fecha, url);
					});
					//Clic after tomorrow
					$( "#after-tomorrow" ).click(function() {
						$("#titulo").empty();
						$("#titulo").append(moment().add(2, 'days').format('dddd Do [de] MMMM'));
						var fecha=moment().add(2, 'days').format('YYYY-MM-DD');  
						$("#bets > tbody").empty();
						get_totalMatch(fecha, url);
						get_bets(fecha, url);
					});
					//Clic after 3 days
					$( "#after3" ).click(function() {
						$("#titulo").empty();
						$("#titulo").append(moment().add(3, 'days').format('dddd Do [de] MMMM'));
						var fecha=moment().add(3, 'days').format('YYYY-MM-DD');  
						$("#bets > tbody").empty();
						get_totalMatch(fecha, url);
						get_bets(fecha, url);
					});


				});



			</script>
			</html>
