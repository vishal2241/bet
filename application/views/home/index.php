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
					<div class="col-md-9 content">
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
						<div class="panel panel-primary" id="tiquete"  >
							<div class="panel-heading text-center "><b>Tiquete <i class="fa fa-money" aria-hidden="true"></i></b></div>
							<div class="panel-body" style="padding:0px">
								<div class="col-md-12">
									<table class="table table-condensed table-striped table-bordered" >
										<thead class="tiquete">
											<tr>
												<th class="text-success text-center">PARTIDOS</th>
												<th class="text-success text-center" colspan="2">CUOTAS</th>
											</tr>
										</thead>
										<tbody id="detalle">
										</tbody>
									</table>
								</div>	
								<form>
									<div class="col-md-6">
										<div class="form-group label-floating">
											<label class="control-label">Cantidad</label>
											<input type="number" class="form-control" id="cantidad" value="1000">
										</div>	
									</div>	
									<div class="col-md-6">
										<div class="form-group is-empty">
											<div  class="ganancia">
												<i class="fa fa-money" aria-hidden="true"></i> 
												<span id="ganancia">0</span>
											</div>										
										</div>
									</div>	
								</form>
							</div>
						</div>
					</div>
				</div>


				<?php $this->load->view('overall/footer'); ?>


				<script type="text/javascript" src="<?= base_url(); ?>public/plugins/datatables/js/jquery.dataTables.js"></script>
				<script type="text/javascript" src="<?= base_url(); ?>public/plugins/datatables/js/dataTables.bootstrap.js"></script>
				<script type="text/javascript">

					function getMoney() {
						var creditos = '1.00';
						$("#detalle").find("[value]").each(function() {
							var tmp      = $.number($(this).attr("value"),2, '.' , ',');
							creditos     = (parseFloat(creditos) * parseFloat(tmp));
							creditos     = $.number( creditos,2, '.' , ',');					
						});
						var cantidad = $("#cantidad").val();
						var ganancia = creditos*cantidad;
						$("#ganancia").empty()
						$("#ganancia").append($.number( ganancia,0, '' , '.'))



					}

					$( document ).ready(function() {
						//fixed tiquete
						$("#tiquete").sticky({topSpacing:100});
					//Clic odd
					$('#all').on('click', '[data-type="odd"]', function(){
						
						var value = $(this).text();
						var conse = $(this).attr('id');
						var local = $(this).attr('local');
						var visitante = $(this).attr('visitante');
						var text = $(this).attr('text');
						var match = $(this).closest('tr').attr('data-match');
						//Borrar de detalle
						$("#detalle").find("[id_match="+match+"]").remove();
						if ($(this).hasClass("actived")) {
							$(this).closest('tr').find('.actived').removeClass('actived');
							$(this).removeClass( "actived" );
							//console.log("borrado")
						}	else {
							$(this).closest('tr').find('.actived').removeClass('actived');
							$(this).addClass( "actived" );
							//console.log("add")
							//ADD detalle
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
