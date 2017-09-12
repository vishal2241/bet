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

	<div class="modal fade" id="modalImprimir">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title bold text-success" align="center">Transacción Exitosa</h5>
				</div>
				<div class="modal-body">
					<table width="70%">
						<thead>
							<tr>
								<th class="text-right ">Nro. Tiquete</th>
								<td>&nbsp;</td>
								<td id="modalNroTiquete"></td>
							</tr>
							<tr>
								<th class="text-right" width="40%">Fecha </th>
								<td width="5%">&nbsp;</td>
								<td width="54%" id="modalFecha"></td>
							</tr>
							<tr>
								<th class="text-right">Cantidad Apostada</th>
								<td>&nbsp;</td>
								<td id="modalApostado"></td>
							</tr>
							<tr>
								<th class="text-right">Total Eventos</th>
								<td>&nbsp;</td>
								<td id="modalNroEventos"></td>
							</tr>
							<tr>
								<th class="text-right">Ganancia</th>
								<td>&nbsp;</td>
								<td id="modalGanancia"></td>
							</tr>
						</thead>
					</table>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-info">Mis Apuestas</button>
					<button type="button" class="btn btn-success" id="printTiquete">Imprimir Tiquete</button>
					<button type="button" id="cerrar" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
				</div>
			</div>
		</div>
	</div>

	<div class="main main-raised">
		<div class="section">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-2" style="padding-left: 5px; padding-right: 5px;">
						<div>
							<table class="table table-bordered" >
								<thead>
									<tr>
										<th class="text-center text-primary">FECHA</th>
									</tr>
									<tr>
										<th class="text-center">
											<select class="select-box" id="dia">
												<option id="today" value="today">Hoy</option>
												<option id="tomorrow" value="tomorrow"></option>
												<option id="after2" value="after2"></option>
												<option id="after3" value="after3"></option>
											</select>
										</th>
									</tr>
									<!--<tr>
										<th class="text-center">
											<div class="form-group label-floating">
												<label class="control-label">Buscar Partido</label>
												<input type="text" class="form-control" id="search">
											</div>	
										</th>
									</tr>-->
									<tr>
										<th class="text-center text-primary">
											LIGAS DISPONIBLES
										</th>
										
									</tr>							
								</thead>
								<tbody id="ligas">
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
								<div class="col-md-12" style="padding:0px" >
									<table class="table table-striped" id="detalle">
										<thead>
											<tr>
												<th class="text-center">PARTIDO</th>
												<th class="text-center">CUOTA</th>
												<th class="text-center"></th>
											</tr>
										</thead>
										<tbody>

										</tbody>
									</table>
								</div>

								<div class="col-md-6">
									<div class="form-group label-floating">
										<label class="control-label">Cantidad</label>
										<input type="text" class="form-control" id="cantidad" value="3000">
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
				<script type="text/javascript" src="<?= base_url(); ?>public/js/jquery.scrollTo.js"></script>
				<script type="text/javascript" src="<?= base_url(); ?>public/js/numeral.js"></script>
				<script type="text/javascript">

					$( document ).ready(function() {
						$('#cantidad').number( true,0, ',' , '.');
						$("#tiquete").sticky({topSpacing:100});
						$('body').on('click', '[delete="true"]', function(){ 	
							var odd = $(this).closest('tr').attr('id_trans');
							$("#"+odd).removeClass( "actived" );
							$("#detalle").find("[id_trans="+odd+"]").remove();
							getMoney();
						});

						function actives(){
							$("#detalle").find("[id_trans]").each(function() {  
								//function remove, ya inicio
								var match = $(this).attr('id_match');
								var odd = $(this).attr('id_trans');
								$.post(url+'ajax/json_checkMatch', {fecha: fecha, id:match}, function(data, status){
									$.each(data, function(a, row) { 
										if (row.TOTAL=='0') {
											$("#detalle").find("[id_trans="+odd+"]").remove();
											getMoney();
										}
										else {
											//si aun no inicia se bus activar odd 
											$("#all").find("[data-type=odd]").each(function() { 
												var oddTmp = $(this).attr('id');
												if (odd==oddTmp) {
													$(this).addClass( "actived" );
												}  
											});
										}

									});

								}, 'json');

								
							});
						}

						var url= '<?= base_url(); ?>';
						var fecha=moment().format('YYYY-MM-DD');
						getCountries(fecha,url); //Primero para filtrar ligas checked en get bets
						detalle();

						$("#titulo").empty();
						$("#titulo").append(moment().format('dddd Do [de] MMMM'));
						get_bets(fecha, url);
						get_totalMatch(fecha, url);
						//Option select box
						$('#tomorrow').text(moment().add(1, 'days').format('dddd Do [de] MMMM'))
						$('#after2').text(moment().add(2, 'days').format('dddd Do [de] MMMM'))
						$('#after3').text(moment().add(3, 'days').format('dddd Do [de] MMMM'))

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
							$("#ligas").empty();
							getCountries(fecha,url);
							get_bets(fecha, url);
							get_totalMatch(fecha, url);
						});

						var timer = $.timer(function() {
							$("#all").empty();
							get_bets(fecha, url);
							actives();
							console.log("Actualizado: "+moment().format('h:mm:ss a'))

						});  
						timer.set({ time : 40000, autostart : true });

						$('#cerrar').click(function(){
							location.reload();						
						});

						$('#cantidad').keyup(function(){
							getMoney();							
						});

						$('#jugar').click(function(){
							var detalle = [];
							var cantidad= $("#cantidad").val();
							$("#detalle").find("[id_trans]").each(function() {  
								detalle.push($(this).attr('id_trans'));								
							});
							if (cantidad!=0 && cantidad>=2000 && detalle.length>0) {
								$.ajax({
									dataType: 'json',
									async: true,
									url: url+'ajax/json_saldo',
									type: 'post',
									success: function(saldo){
										if (saldo>=cantidad) {
											if (detalle) {
												$.ajax({
													dataType: 'json',
													async: true,
													url: url+'ajax/json_game',
													type: 'post',
													data: {detalle: detalle, cantidad:cantidad},
													success: function(data){
														console.log()
														$('#modalGanancia').html("$ " + $.number(data[0].ganancia, 0, ',', '.' ));
														$('#modalNroTiquete').html(data[0].tiquete);
														$('#modalFecha').html(moment().format('dddd Do [de] MMMM'));
														$('#modalApostado').html("$ "+$.number(cantidad, 0, ',', '.' ));
														$('#modalNroEventos').html(data[0].eventos);

														$("#modalImprimir").modal({
															backdrop: 'static',
															keyboard: false
														})

													},
													error: function(e){
														console.log(e);
													}
												}); 
											}
										}	
									},
									error: function(e){
										console.log(e);
									}
								});

							} else {
								console.log("No puede apostar ese valor o no ha selecionado")
							}

						});

						$('#printTiquete').click(function(){
							var tiquete= $("#modalNroTiquete").text();
							window.open(url+'home/print_tiquete/'+tiquete, '_blank');
							location.reload();
						});



					});



				</script>
				</html>
