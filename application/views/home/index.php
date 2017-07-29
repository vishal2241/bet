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
							<!-- tables row -->
							<div class="table-responsive">
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

				var header_height;
				var fixed_section;
				var floating = false;

				$().ready(function(){
					suggestions_distance = $("#suggestions").offset();
					pay_height = $('.fixed-section').outerHeight();

					$(window).on('scroll', materialKit.checkScrollForTransparentNavbar);

				});


				function isEmpty(val){
					return (val === undefined || val == null || val.length <= 0) ? '0' : val;
				}

				var fecha='2017-07-29';
				$.getJSON('<?= base_url(); ?>ajax/json_compe', {fecha: fecha}, function(resp) {
					$.each(resp, function(i, item) {
						$("#bets > tbody").append('\
							<tr id='+ item.ID+'>\
								<td colspan="13" class="text-left" >\
									<h4>\
										<img width="24" src="<?= base_url(); ?>public/img/logos/country/'+item.IMG+'.png"> \
										<b>'+ item.PAIS+': </b> '+ item.COMPE+'  \
									</h4>\
								</td>\
							</tr>\
							');
						var compe = item.ID;
						$.getJSON('<?= base_url(); ?>ajax/json_match', {fecha: fecha, compe:compe}, function(match) {
							$.each(match, function(a, row) {
								$("#bets > tbody #"+compe+"").after('\
									<tr id='+ row.ID+'>\
										<td class="" >'+ row.HORARIO+'</td>\
										<td class="" >'+ row.LOCAL+'</td>\
										<td class="" >'+ row.VISITANTE+'</td>\
										<td class="" >'+ isEmpty(row._1)+'</td>\
										<td class="" >'+ isEmpty(row._X)+'</td>\
										<td class="" >'+ isEmpty(row._2)+'</td>\
										<td class="" >'+ isEmpty(row._1X)+'</td>\
										<td class="" >'+ isEmpty(row._12)+'</td>\
										<td class="" >'+ isEmpty(row._2X)+'</td>\
										<td class="" >'+ isEmpty(row.UNDER_25)+'</td>\
										<td class="" >'+ isEmpty(row.OVER_25)+'</td>\
										<td class="" >'+ isEmpty(row.GG)+'</td>\
										<td class="" >'+ isEmpty(row.NG)+'</td>\
									</tr>\
									');
							});
						});

					});

				});




			</script>
			</html>
