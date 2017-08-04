<?php $this->load->view('overall/header'); ?>
<body>
	<?php $this->load->view('overall/nav2'); ?>
	<div class="container">
		<h3 align="center">
			<img width="48" src="<?= base_url() ?>/public/img/logos/country/<?= $pais[0]->IMG ?>.png">
			<?= $partido[0]->LOCAL .' vs. '. $partido[0]->VISITANTE ?>
		</h3>
		<br>
		<div class="">
			<div class="col-md-10 col-md-offset-1">
				<?=  form_open_multipart('partidos/editar/'.$partido[0]->LOCAL.' ', 'class="form-horizontal"');  ?>
				<fieldset>
					<div class="form-group">
						<div class="col-md-3">
							<label class="control-label" for="local">Local</label>
							<input class="form-control" id="local" type="text" value="<?= $partido[0]->LOCAL ?>">
						</div>
						<div class="col-md-1">
							<label class="control-label" for="hora">Score</label>
							<input class="form-control" id="hora" type="text" value="<?= $partido[0]->GOLES_LOCAL ?>">
						</div>
						<div class="col-md-3">
							<label class="control-label" for="visitante">Visitante</label>
							<input class="form-control" id="visitante" type="text" value="<?= $partido[0]->VISITANTE ?>">
						</div>
						<div class="col-md-1">
							<label class="control-label" for="hora">Score</label>
							<input class="form-control" id="hora" type="text" value="<?= $partido[0]->GOLES_VISITANTE ?>">
						</div>
						<div class="col-md-2">
							<label class="control-label" for="fecha">Fecha</label>
							<input class="form-control" id="fecha" type="text" value="<?= $partido[0]->FECHA ?>">
						</div>
						<div class="col-md-2">
							<label class="control-label" for="hora">Horario</label>
							<input class="form-control" id="hora" type="text" value="<?= $partido[0]->HORARIO ?>">
						</div>
						
					</div>
					<div class="form-group">
						<div class="col-md-1">
							<label class="control-label" for="hora">HT</label>
							<input class="form-control" id="hora" type="text" value="<?= $partido[0]->GOLES_LOCAL ?>">
						</div>
						<div class="col-md-1">
							<label class="control-label" for="hora">HT</label>
							<input class="form-control" id="hora" type="text" value="<?= $partido[0]->GOLES_LOCAL ?>">
						</div>
						<div class="col-md-2">
							<label class="control-label" for="estado">Estado</label>
							<select class="form-control" id="estado">
								<option value="">[...]</option>
								<option value="Canc.">Cancelado</option>
								<option value="FT">Finalizado</option>
								<option value="Postp.">Postergado</option>
							</select>
						</div>
						<div class="col-md-2">
							<label class="control-label" for="autorizado">Autorizado</label>
							<select class="form-control" id="autorizado">
								<option value="NO">No</option>
								<option value="SI">Si</option>
							</select>
						</div>
						<div class="col-md-2">
							<label class="control-label" for="verificado">Verificado</label>
							<select class="form-control" id="verificado">
								<option value="NO">No</option>
								<option value="SI">Si</option>
							</select>
						</div>
					</div>
				</fieldset>

				<?=   form_close(); ?>
			</div>
		</div>  
	</div>
	<?php $this->load->view('overall/footer'); ?>

	<script>
		$("#TIPO").val("<?php echo $partido[0]->LOCAL;  ?>");
	</script>


</body>
</html>   