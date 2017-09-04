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
						<div id="fecha" align="center">
							<h4 class="text-info text-center bold">Fecha</h4>
							<select class="select-box" id="dia">
								<option id="today" value="today">Hoy</option>
								<option id="tomorrow" value="tomorrow"></option>
								<option id="after2" value="after2"></option>
								<option id="after3" value="after3"></option>
							</select>
						</div>
						<div id="liga">
							<h4 class="text-info text-center bold">Ligas disponibles</h4>

							<table class="table table-bordered" >
								<tbody id="ligas">
									<!--<tr class="pais" id="colombia">
										<th class="bold" style="background-color: #EEEDED; cursor: pointer;">
											<input type="checkbox" name="optionsCheckboxes">
											Colombia
										</th>
									</tr>
									<tr pais="colombia" class="hidden">
										<td class="" style="background-color: white">
											<input type="checkbox" name="optionsCheckboxes">
											Colombia
										</td>
									</tr>-->
								</tbody>
							</table>
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




					function getCountries (fecha, url) {
						var	html='';
						$.ajax({
							dataType: 'json',
							async: false,
							url: url+'ajax/json_countries',
							type: 'post',
							data: {fecha: fecha},
							success: function(pais){

								$.each(pais, function(a, row) { 
									html+=
									'<tr class="pais" id="'+row.ID+'">'+
									'<td class="bold" style="background-color: #EEEDED; cursor: pointer;">'+
									/*'<input type="checkbox" name="optionsCheckboxes"> '+*/
									row.NOMBRE+
									'</td>'+
									'</tr>'

									$.ajax({
										dataType: 'json',
										async: false,
										url: url+'ajax/jsonCompeByCountry',
										type: 'post',
										data: {fecha: fecha, pais:row.ID},
										success: function(compe){
											$.each(compe, function(b, rowCompe) { 

												html+=
												'<tr pais="'+row.ID+'" class="">'+
												'<td class="" style="background-color: white">'+
												'<input type="checkbox" name="optionsCheckboxes"> '+
												rowCompe.COMPE+
												'</td>'+
												'</tr>';

											});
										},
										error: function(e){
											console.log(e);
										}
									});

								});

							},
							error: function(e){
								console.log(e);
							}
						});

						$("#ligas").html(html)
					} //end func

					$( document ).ready(function() {
						var url= '<?= base_url(); ?>';
						var fecha=moment().format('YYYY-MM-DD');
						getCountries(fecha,url);

						$('.pais').click(function(){
							var pais = $(this).attr('id');

							$("#ligas").find("[pais="+pais+"]").each(function() { 

								if ($(this).hasClass("hidden")) {
									$(this).removeClass( "hidden" );
								} else {
									$(this).addClass("hidden")
								}
								
							});							
						});

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

						//Cargados automaticamente 
						$("#titulo").empty();
						$("#titulo").append(moment().format('dddd Do [de] MMMM'));
						get_bets(fecha, url);
						get_totalMatch(fecha, url);
						//Change usuario
						$( "#dia" ).change(function() {
							$("#titulo").empty();
							switch($(this).val()){
								case "today":
								$("#titulo").append(moment().format('dddd Do [de] MMMM'));
								fecha=moment().format('YYYY-MM-DD');  

								break;
								case "tomorrow":
								$("#titulo").append(moment().add(1, 'days').format('dddd Do [de] MMMM'));
								fecha=moment().add(1, 'days').format('YYYY-MM-DD');  

								break;
								case "after2":
								$("#titulo").append(moment().add(2, 'days').format('dddd Do [de] MMMM'));
								fecha=moment().add(2, 'days').format('YYYY-MM-DD');  
								break;
								case "after3":
								$("#titulo").append(moment().add(3, 'days').format('dddd Do [de] MMMM'));
								fecha=moment().add(3, 'days').format('YYYY-MM-DD'); 
								break;
							}
							$("#all").empty();

							get_bets(fecha, url);
							get_totalMatch(fecha, url);

						});



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


						var timer = $.timer(function() {
							$("#all").empty();
							get_bets(fecha, url);
							console.log("actualizado: "+fecha)

						});
						//timer.set({ time : 40000, autostart : true });

					});



				</script>
				</html>
