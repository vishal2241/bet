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
							<button class="btn btn-info  btn-sm" id="today">
								<i class="material-icons">alarm</i> Hoy
							</button>
							<button class="btn btn-info  btn-sm" id="tomorrow">
								<i class="material-icons">event</i> Mañana
							</button>
							<button class="btn btn-info  btn-sm" id="after-tomorrow">
								<i class="material-icons">event</i> Pasado Mañana
							</button>
							<!-- tables row -->
							<h3 class="text-center text-uppercase bold"  id="titulo"></h3>
							<p class="text-center text-uppercase bold"  id="totalDia"></p>
							<div class="table-responsive" id="all">
								<table class="table table-bordered" id="bets">
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

				function get_bets (fecha, url) {

					$.post(url+'ajax/json_compe', {fecha: fecha}, function(jsonCompe) {
						if (jsonCompe!=null) {
							$.each(jsonCompe, function(i, item) {

								$("#bets > tbody").append('\
									<tr id='+ item.ID+'>\
										<td colspan="16" class="text-left" >\
											<h4>\
												<img width="64" src="'+url+'public/img/logos/country/'+item.IMG+'.png"> \
												<b>'+ item.PAIS+': </b> '+ item.COMPE+'  \
											</h4>\
										</td>\
									</tr>\
									');
								var compe = item.ID;

								$.post(url+'ajax/json_matchByCompe', {fecha: fecha, compe:compe}, function(jsonMatch) {		

									$.each(jsonMatch, function(a, row) {
										if (row.IMG_L=='NO' || row.IMG_L==null ) {
											var imL='default.png';
										} else {
											var imL='team/'+row.PAIS_L+'/'+row.IMG_L+'.png';
										}
										if (row.IMG_V=='NO' || row.IMG_L==null) {
											var imV='default.png';
										} else {
											var imV='team/'+row.PAIS_L+'/'+row.IMG_V+'.png';
										}

										$("#bets > tbody #"+compe+"").after('\
											<tr id='+ row.ID_PARTIDO+'>\
												<td  class="text-center bold" width="6%" >'+ row.HORARIO+'</td>\
												<td  class="text-center bold" width="12%" ><img width="35" src="'+url+'public/img/logos/'+imL+'"><br>'+ row.LOCAL+'</td>'+
												'<td  class="text-center bold" width="12%" ><img width="35" src="'+url+'public/img/logos/'+imV+'"><br>'+ row.VISITANTE+'</td>');

										var match=row.ID_PARTIDO;
										$.post(''+url+'ajax/json_odds', {match: match}, function(jsonOdds) {
											
											$.each(jsonOdds, function(a, rowMatch) { 
												$("#"+match+"").append('<td  class="odd text-center"   width="5%" id="'+rowMatch.NOMBRE+'">'+ isEmpty($.number(rowMatch.VALOR, 2, '.', ' '))+'</td>');
											});
										}, "json");

										$("#bets > tbody #"+compe+"").after('</tr>');
									});
									$("#bets > tbody #"+compe+"").after('\
										<tr>\
											<th class="text-center">Hora</th>\
											<th class="text-center">Local</th>\
											<th class="text-center">Visitante</th>\
											<th class="text-center">1</th>\
											<th class="text-center">X</th>\
											<th class="text-center">2</th>\
											<th class="text-center">UN</th>\
											<th class="text-center">OV</th>\
											<th class="text-center">1X</th>\
											<th class="text-center">2X</th>\
											<th class="text-center">12</th>\
											<th class="text-center">1HT</th>\
											<th class="text-center">XHT</th>\
											<th class="text-center">2HT</th>\
											<th class="text-center">GG</th>\
											<th class="text-center">NG</th>\
										</tr>\
										');
									
								}, "json");

							});
						} //if Compe
					},"json");
				} // End get_bets()

				function get_totalMatch(fecha, url) {
					$.post(url+'ajax/json_totalMatch', {fecha: fecha}, function(data, status){
						$.each(data, function(a, row) { 
							$("#totalDia").empty();
							$("#totalDia").append("Total partidos : "+row.TOTAL);
							
						});

					}, 'json');
				}


				$( document ).ready(function() {
					moment.locale('es');
					var url= '<?= base_url(); ?>';
					var fecha=moment().format('YYYY-MM-DD');  

					$("#titulo").empty();
					$("#titulo").append(moment().format('dddd Do [de] MMMM'));

					get_bets(fecha, url);
					get_totalMatch(fecha, url);

					$( "#today" ).click(function() {
						$("#titulo").empty();
						$("#titulo").append(moment().format('dddd Do [de] MMMM'));
						var fecha=moment().format('YYYY-MM-DD');  
						$("#bets > tbody").empty();
						get_bets(fecha, url);
						get_totalMatch(fecha, url);
					});

					$( "#tomorrow" ).click(function() {
						$("#titulo").empty();
						$("#titulo").append(moment().add(1, 'days').format('dddd Do [de] MMMM'));
						var fecha=moment().add(1, 'days').format('YYYY-MM-DD');  
						$("#bets > tbody").empty();
						get_bets(fecha, url);
						get_totalMatch(fecha, url);
					});

					$( "#after-tomorrow" ).click(function() {
						$("#titulo").empty();
						$("#titulo").append(moment().add(2, 'days').format('dddd Do [de] MMMM'));
						var fecha=moment().add(2, 'days').format('YYYY-MM-DD');  
						$("#bets > tbody").empty();
						get_totalMatch(fecha, url);
						get_bets(fecha, url);
					});


				});



			</script>
			</html>
