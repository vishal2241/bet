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
								<table class="table  table-hover tableOdds" id="bets">
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
					$.post(url+'ajax/json_compe', {fecha: fecha}, function(resp) {
						if (resp!=null) {
							$.each(resp, function(i, item) {

								$("#bets > tbody").append('\
									<tr id='+ item.ID+'>\
										<td colspan="16" class="text-left" >\
											<h4>\
												<img width="40" src="'+url+'public/img/logos/country/'+item.IMG+'.png"> \
												<b>'+ item.PAIS+': </b> '+ item.COMPE+'  \
											</h4>\
										</td>\
									</tr>\
									');
								var compe = item.ID;

								$.post(url+'ajax/json_matchByCompe', {fecha: fecha, compe:compe}, function(match) {
									
									$.each(match, function(a, row) {
										$("#bets > tbody #"+compe+"").after('\
											<tr id='+ row.ID_PARTIDO+'>\
												<td  class="text-center" width="6%" >'+ row.HORARIO+'</td>\
												<td  class="text-center x12" width="12%" ><img width="35" src="'+url+'public/img/logos/team/'+row.PAIS_L+'/'+row.IMG_L+'.png"><br>'+ row.LOCAL+'</td>'+
													'<td  class="text-center x12" width="12%" ><img width="35" src="'+url+'public/img/logos/team/'+row.PAIS_V+'/'+row.IMG_V+'.png"><br>'+ row.VISITANTE+'</td>');

										var match=row.ID_PARTIDO;
										$.post(''+url+'ajax/json_odds', {match: match}, function(odds) {
											 
											$.each(odds, function(a, rowMatch) {
												switch(rowMatch.NOMBRE) {
													case "_1":
													var _1='<td  class="text-center" width="5%" id="'+rowMatch.NOMBRE+'">'+ isEmpty($.number(rowMatch.VALOR, 2, '.', ' '))+'</td>';
													break;
													case "_X":
													var _X='<td  class="text-center" width="5%" id="'+rowMatch.NOMBRE+'">'+ isEmpty($.number(rowMatch.VALOR, 2, '.', ' '))+'</td>';
													break;
													case "_2":
													var _2='<td  class="text-center" width="5%" id="'+rowMatch.NOMBRE+'">'+ isEmpty($.number(rowMatch.VALOR, 2, '.', ' '))+'</td>';
													break;
													case "_1HT":
													var _1HT='<td  class="text-center" width="5%" id="'+rowMatch.NOMBRE+'">'+ isEmpty($.number(rowMatch.VALOR, 2, '.', ' '))+'</td>';
													break;
													case "_XHT":
													var _XHT='<td  class="text-center" width="5%" id="'+rowMatch.NOMBRE+'">'+ isEmpty($.number(rowMatch.VALOR, 2, '.', ' '))+'</td>';
													break;
													case "_2HT":
													var _2HT='<td  class="text-center" width="5%" id="'+rowMatch.NOMBRE+'">'+ isEmpty($.number(rowMatch.VALOR, 2, '.', ' '))+'</td>';
													break;
													case "_1X":
													var _1X='<td  class="text-center" width="5%" id="'+rowMatch.NOMBRE+'">'+ isEmpty($.number(rowMatch.VALOR, 2, '.', ' '))+'</td>';
													break;
													case "_12":
													var _12='<td  class="text-center" width="5%" id="'+rowMatch.NOMBRE+'">'+ isEmpty($.number(rowMatch.VALOR, 2, '.', ' '))+'</td>';
													break;
													case "_2X":
													var _2X='<td  class="text-center" width="5%" id="'+rowMatch.NOMBRE+'">'+ isEmpty($.number(rowMatch.VALOR, 2, '.', ' '))+'</td>';
													break;
													case "over":
													var OV='<td  class="text-center" width="5%" id="'+rowMatch.NOMBRE+'">'+ isEmpty($.number(rowMatch.VALOR, 2, '.', ' '))+'</td>';
													break;
													case "under":
													var UN='<td  class="text-center" width="5%" id="'+rowMatch.NOMBRE+'">'+ isEmpty($.number(rowMatch.VALOR, 2, '.', ' '))+'</td>';
													break;
													case "GG":
													var GG='<td  class="text-center" width="5%" id="'+rowMatch.NOMBRE+'">'+ isEmpty($.number(rowMatch.VALOR, 2, '.', ' '))+'</td>';
													break;
													case "NG":
													var NG='<td  class="text-center" width="5%" id="'+rowMatch.NOMBRE+'">'+ isEmpty($.number(rowMatch.VALOR, 2, '.', ' '))+'</td>';
													break;
												}
												$("#"+match+"").append(_1+_X+_2+_1HT+_XHT+_2HT+_1X+_12+_2X+OV+UN+GG+NG);
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
											<th class="text-center">1HT</th>\
											<th class="text-center">XHT</th>\
											<th class="text-center">2HT</th>\
											<th class="text-center">1X</th>\
											<th class="text-center">12</th>\
											<th class="text-center">2X</th>\
											<th class="text-center">OV</th>\
											<th class="text-center">UN</th>\
											<th class="text-center">GG</th>\
											<th class="text-center">NG</th>\
										</tr>\
										');

								}, "json");

});
}
},"json");
}
$( document ).ready(function() {
	moment.locale('es');
	var url= '<?= base_url(); ?>';
					//var fecha=moment().format('YYYY-MM-DD');  
					var fecha=moment().add(1, 'days').format('YYYY-MM-DD');
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
