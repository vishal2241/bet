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
						<div>
							<table class="table table-bordered" >
								<thead>
									<tr>
										<th class="text-center">FECHA</th>
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
									<tr>
										<th class="text-center">
											<div class="form-group label-floating">
												<label class="control-label">Buscar Partido</label>
												<input type="text" class="form-control" id="search">
											</div>	
										</th>
									</tr>
									<tr>
										<th class="text-center">
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
				<script type="text/javascript" src="<?= base_url(); ?>public/js/jquery.scrollTo.js"></script>
				<script type="text/javascript" src="<?= base_url(); ?>public/js/numeral.js"></script>
				<script type="text/javascript">

					$( document ).ready(function() {
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
								var odd = $(this).attr('id_trans');
								$("#all").find("[data-type=odd]").each(function() { 
									var oddTmp = $(this).attr('id');
									if (odd==oddTmp) {
										$(this).addClass( "actived" );
									}  
								});
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


						
						$('#cantidad').keyup(function(){
							getMoney();							
						});
						$('#jugar').click(function(){
							console.log("jugar")							
						});

					});



				</script>
				</html>
