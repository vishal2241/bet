<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<html lang="es">
<head>
	<?php $this->load->view('overall/header'); ?>
</head>

<body class="components-page">
	<?php $this->load->view('overall/nav'); ?>
	<div class="main main-raised">
		<div class="section">
			<div class="container">
				<div class="row">
					<div class="col-md-9">
						<div class="tim-container">
							<!-- tables row -->
							<div class="tim-row" id="tables-row">					 
								<div class="table-responsive">
									<table class="table" id="bets">
										<thead>
											<tr>
												<th colspan="16" class="text-left" >
													<h4>
														<img src="<?= base_url(); ?>public/img/banderas/48/Colombia.png"> 
														<b>Colombia: </b> Liga Aguila
													</h4>
												</th>
											</tr>
											<tr>
												<th class="text-center">Hora</th>
												<th class="text-center">Torneo</th>
												<th class="text-center">Local</th>
												<th class="text-center">Visitante</th>
												<th class="text-center">1</th>
												<th class="text-center">X</th>
													<th class="text-center">2</th>
												<!--	<th class="text-center">Over</th>
													<th class="text-center">Under</th>
													<th class="text-center">1-1st</th>
													<th class="text-center">x-1st</th>
													<th class="text-center">2-1st</th>
													<th class="text-center">1x</th>
													<th class="text-center">1-2</th>
													<th class="text-center">2x</th>
													<th class="text-center">GG</th>
													<th class="text-center">NG</th>-->
												</tr>
											</thead>
											<tbody>
												<?php 
												#print_r($partidos);  
												foreach ($partidos as $key => $row): ?>
												<tr>
													<td><?= $row['HORARIO'] ?></td>
													<td align="center">
													<?= $row['TORNEO'] ?><br>
													<small><?= $row['PAIS'] ?></small>
														
													</td>
													<td class="text-center"><?= $row['LOCAL'] ?></td>
													<td class="text-center"><?= $row['VISITANTE'] ?></td>
													<td class="text-center"><?= $row['_1'] ?></td>
													<td class="text-center"><?= $row['_X'] ?></td>
													<td class="text-center"><?= $row['_2'] ?></td>
													
												</tr>
											<?php endforeach ?>
										</tbody>
									</table>
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
			<script>
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
