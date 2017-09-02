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
					<div class="col-md-2" style="padding-left: 5px; padding-right: 5px;">
						<div id="ligas" align="center">
							<h4 class="text-success text-center bold">Fecha</h4>
							<select class="select-box" id="dia">
								<option id="today">Hoy</option>
								<option id="tomorrow"></option>
								<option id="after2"></option>
								<option id="after3"></option>
							</select>
						</div>
					</div>
					<div class="col-md-7 content" style="padding-left: 5px; padding-right: 5px;">											
						<!-- tables row -->
						<h3 class="text-center text-uppercase bold"  id="titulo"></h3>
						<p class="text-center text-uppercase bold"  id="totalDia"></p>
						<div id="all">

						</div>
					</div>
					<div class="col-md-3" style="padding-left: 5px; padding-right: 8px;">
						<div class="panel panel-default" id="tiquete"  >
							<div class="panel-heading text-center "><b>Tiquete <i class="fa fa-money" aria-hidden="true"></i></b></div>
							<div class="panel-body" style="padding:0px">

								<table class="table table-condensed table-striped table-bordered" id="tiquete-table" width="100%">
									<tbody id="detalle">
										<tr class="tiquete">
											<th class="text-success text-center">PARTIDOS</th>
											<th class="text-success text-center">CUOTAS</th>
										</tr>
									</tbody>
								</table>


								<div class="col-md-6">
									<div class="form-group label-floating">
										<label class="control-label">Cantidad</label>
										<input type="number" class="form-control" id="cantidad" value="1000">
									</div>	
								</div>		
								<div class="col-md-6">
									<div class="form-group is-empty">
										<div  class="ganancia">
											<!--	<i class="fa fa-money" aria-hidden="true"></i> -->
											<span id="ganancia">0</span>
										</div>										
									</div>
								</div>	
								<button class="btn btn-primary col-md-12" id="jugar"><b>JUGAR </b> <i class="fa fa-futbol-o" aria-hidden="true"></i></button>

							</div>
						</div>
					</div>
				</div>


				<?php $this->load->view('overall/footer'); ?>


				<script type="text/javascript" src="<?= base_url(); ?>public/plugins/datatables/js/jquery.dataTables.js"></script>
				<script type="text/javascript" src="<?= base_url(); ?>public/plugins/datatables/js/dataTables.bootstrap.js"></script>
				<script type="text/javascript" src="<?= base_url(); ?>public/js/jquery.timer.js"></script>
				<script type="text/javascript">
					


					$( document ).ready(function() {
						var url= '<?= base_url(); ?>';
						var fecha=moment().format('YYYY-MM-DD');
						
						$('#cantidad').keyup(function(){
							getMoney();							
						});

						$('#jugar').click(function(){
							console.log("jugar")							
						});

						//$("#ligas").sticky({topSpacing:100});
						$("#tiquete").sticky({topSpacing:100});

						
						$('#all').on('click', '[data-type="odd"]', function(){

							var value = $(this).text();
							var conse = $(this).attr('id');
							var local = $(this).attr('local');
							var visitante = $(this).attr('visitante');
							var text = $(this).attr('text');
							var match = $(this).closest('tr').attr('data-match');

							$("#detalle").find("[id_match="+match+"]").remove();
							if ($(this).hasClass("actived")) {
								$(this).closest('tr').find('.actived').removeClass('actived');
								$(this).removeClass( "actived" );

							}	else {
								$(this).closest('tr').find('.actived').removeClass('actived');
								$(this).addClass( "actived" );


								var row = 
								'<tr id_trans="'+conse+'"  id_match="'+match+'">'+
								'<td class="x12 bold ">'+
								local + ' vs. '+ visitante+
								'<br>'+
								'<b><span class="text-info text-uppercase x11">'+text+'</span></b>'+
								'</td>'+
								'<td value="'+value+'" class="text-primary text-center bold">'+
								value+
								'</td>'+
								'</tr>';
								$('#detalle').append(row);
							}

							getMoney();
						});


						//SELECT DAY'S

						$('#tomorrow').text(moment().add(1, 'days').format('dddd Do [de] MMMM'))
						$('#after2').text(moment().add(2, 'days').format('dddd Do [de] MMMM'))
						$('#after3').text(moment().add(3, 'days').format('dddd Do [de] MMMM'))


						//Cargados automaticamente 
						$("#titulo").empty();
						$("#titulo").append(moment().format('dddd Do [de] MMMM'));
						get_bets(fecha, url);
						get_totalMatch(fecha, url);

						//Clic today
						$( "#dia #today" ).change(function() {
							$("#titulo").empty();
							$("#titulo").append(moment().format('dddd Do [de] MMMM'));
							fecha=moment().format('YYYY-MM-DD');  
							$("#all").empty();
							get_bets(fecha, url);
							get_totalMatch(fecha, url);
						});
						//Clic tomorrow
						$( "#dia #tomorrow" ).change(function() {
							$("#titulo").empty();
							$("#titulo").append(moment().add(1, 'days').format('dddd Do [de] MMMM'));
							fecha=moment().add(1, 'days').format('YYYY-MM-DD');  
							$("#all").empty();
							get_bets(fecha, url);
							get_totalMatch(fecha, url);
						});
						//Clic after tomorrow
						$( "#dia #after2" ).change(function() {
							$("#titulo").empty();
							$("#titulo").append(moment().add(2, 'days').format('dddd Do [de] MMMM'));
							fecha=moment().add(2, 'days').format('YYYY-MM-DD');
							$("#all").empty();
							get_totalMatch(fecha, url);
							get_bets(fecha, url);
						});
						//Clic after 3 days
						$( "#dia #after3" ).change(function() {
							$("#titulo").empty();
							$("#titulo").append(moment().add(3, 'days').format('dddd Do [de] MMMM'));
							fecha=moment().add(3, 'days').format('YYYY-MM-DD');  
							$("#all").empty();
							get_totalMatch(fecha, url);
							get_bets(fecha, url);
						});



						var timer = $.timer(function() {
							$("#all").empty();
							get_bets(fecha, url);
							console.log("actualizado: "+fecha)

						});
						//timer.set({ time : 40000, autostart : true });

					});



				</script>
				</html>
