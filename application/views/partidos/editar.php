<?php $this->load->view('overall/header'); ?>
<body>
	<?php $this->load->view('overall/nav2'); ?>
	<div class="container">
		<h3 align="center">
			<img width="48" src="<?= base_url() ?>/public/img/logos/country/<?= $pais[0]->IMG ?>.png">
			<?= $local[0]->NOMBRE .' vs. '. $visitante[0]->NOMBRE ?>
		</h3>
		<br>
		<div class="">
			<div class="col-md-10 col-md-offset-1">
			<?=  form_open_multipart('partidos/editar/'.$partido[0]->ID_PARTIDO.' ', 'class="form-horizontal"');  ?>				<fieldset>
				<div class="form-group">
					<div class="col-md-3">
						<label class="control-label" for="local">Local</label>
						<input class="form-control" id="local" type="text" value="<?= $local[0]->NOMBRE ?>">
					</div>
					<div class="col-md-1">
						<label class="control-label" for="score_1">Score 1</label>
						<input class="form-control" id="score_1" type="number" value="<?= $partido[0]->SCORE_1 ?>">
					</div>
					<div class="col-md-3">
						<label class="control-label" for="visitante">Visitante</label>
						<input class="form-control" id="visitante" type="text" value="<?= $visitante[0]->NOMBRE ?>">
					</div>
					<div class="col-md-1">
						<label class="control-label" for="score_2">Score 2</label>
						<input class="form-control" id="score_2" type="number" value="<?= $partido[0]->SCORE_2 ?>">
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
					<div class="col-md-2">
						<label class="control-label" for="score_1HT">Local HT</label>
						<input class="form-control" id="score_1HT" type="number" value="<?= $partido[0]->SCORE_1_HT ?>">
					</div>
					<div class="col-md-2">
						<label class="control-label" for="score_2HT">Visitante HT</label>
						<input class="form-control" id="score_2HT" type="number" value="<?= $partido[0]->SCORE_2_HT ?>">
					</div>
					<div class="col-md-3">
						<label class="control-label" for="estado">Estado</label>
						<select class="form-control" id="estado">
							<option value="">[...]</option>
							<option value="Abandoned">Abandonado</option>
							<option value="Cancelled">Cancelado</option>
							<option value="inprogress">En juego</option>
							<option value="Finished">Finalizado</option>
							<option value="Interrupted">Interrumpido</option>
							<option value="NSY">Sin Iniciar</option>
							<option value="Postponed">Pospuesto</option>
						</select>
					</div>
					<div class="col-md-3">
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
<!--					<h3 class="text-center text-success">Cuotas <i class="fa fa-money" aria-hidden="true"></i></h3>

					<?php foreach ($cuotas as $key => $couta):
					#print_r($couta);
					?>
					 
						<div class="form-group">
							<label class="control-label col-md-3" for="<?= $couta->NOMBRE ?>"><?= $couta->DESCRIPCION ?>:</label>
							<div class="col-md-7">
								<input type="number" class="form-control" id="<?= $couta->NOMBRE ?>" placeholder="0.00" value="<?= $couta->VALOR ?>">
							</div>
						</div>
			
					<?php endforeach ?> -->
				</div>
				<div class="form-group" align="center">
					<div class="col-md-10 col-lg-offset-2">
						<button type="submit" class="btn btn-success">Guardar</button>
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