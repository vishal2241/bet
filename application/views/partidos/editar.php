<?php $this->load->view('overall/header'); ?>
<body>
	<?php $this->load->view('overall/nav'); ?>
	<div class="container">
		<h3 align="center">
			<img width="48" src="<?= base_url() ?>/public/img/logos/country/<?= $pais[0]->IMG ?>.png">
			<?= $partido[0]->LOCAL .' vs. '. $partido[0]->VISITANTE ?>
		</h3>
		<br>
		<div class="">
			<div class="col-md-12">
				<?=  form_open_multipart('partidos/editar/'.$partido[0]->LOCAL.' ', 'class="form-horizontal"');  ?>
				<table class="table table-striped table-hover" >
					<thead>
						<tr>
							<th >Fecha</th>
							<th>Hora</th>
							<th>Competencia</th>
							<th>Estado</th>
							<th>Autorizado</th>
							<th>Verificado</th>

						</tr>
					</thead>
					<tbody>
						<tr>
							<td> <input type="text" class="form-control" id="" value="<?= $partido[0]->FECHA ?>"></td>
							<td> <input type="text" class="form-control" id="" value="<?= $partido[0]->HORARIO ?>"></td>
							<td> <input type="text" class="form-control" id="" value="<?= $partido[0]->ID_COMPETENCIA ?>"></td>
							<td> <input type="text" class="form-control" id="" value="<?= $partido[0]->ESTADO ?>"></td>
							<td> <input type="text" class="form-control" id="" value="<?= $partido[0]->AUTORIZADO ?>"></td>
							<td> <input type="text" class="form-control" id="" value="<?= $partido[0]->VERIFICADO ?>"></td>

						</tr>
						<tr>

							<th>1 HT</th>
							<th>2 HT</th>
							<th>1 FINAL</th>
							<th>2 FINAL</th>
						</tr>
						<tr>
							
							<td> <input type="text" class="form-control" id="" value="<?= $partido[0]->LOCAL_HT ?>"></td>
							<td> <input type="text" class="form-control" id="" value="<?= $partido[0]->VISITANTE_HT ?>"></td>
							<td> <input type="text" class="form-control" id="" value="<?= $partido[0]->GOLES_LOCAL ?>"></td>
							<td> <input type="text" class="form-control" id="" value="<?= $partido[0]->GOLES_VISITANTE ?>"></td>

						</tr>
					</tbody>
				</table>


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