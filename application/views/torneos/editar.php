<?php $this->load->view('overall/header'); ?>
<body>
	<?php $this->load->view('overall/nav2'); ?>
	<div class="container">
		<h2 align="center"> 
			<?php echo $equipo[0]->NOMBRE;  ?>
			<img width="64" src="<?= base_url(); ?>public/img/logos/team/<?= $equipo[0]->IMG_PAIS ?>/<?= $equipo[0]->IMG ?>">
		</h2>
		<br>
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<?=  form_open_multipart('equipos/editar/'.$equipo[0]->ID_EQUIPO.' ', 'class="form-horizontal"');  ?>
				<fieldset>
					<div class="form-group">
						<label for="" class="col-md-3 control-label bold">Nombre</label>
						<div class="col-md-9">
							<input type="text" class="form-control" name="NOMBRE" id="NOMBRE" value="<?php echo $equipo[0]->NOMBRE;  ?>">
						</div>
					</div> 
					
					<div class="form-group">
						<label for="" class="col-md-3 control-label bold">Pais</label>
						<div class="col-md-9">
							<select  class="form-control" name="ID_PAIS" id="ID_PAIS">
								<option value="">[...]</option>
								<?php foreach ($paises as $key => $value): ?>
									<option value="<?= $value->ID_PAIS ?>"><?= $value->NOMBRE ?></option>
								<?php endforeach ?>
							</select>
						</div>
					</div>

					<div class="form-group">
						<label for="" class="col-md-3 control-label bold">Imagen</label>
						<div class="col-md-9">
							<input type="text" class="form-control" name="IMG" id="IMG" value="<?php echo $equipo[0]->IMG;  ?>">
						</div>
					</div>   

					<div class="form-group" align="center">
						<div class="col-lg-10 col-lg-offset-2">
							<button type="submit" class="btn btn-success">Guardar</button>
						</div>
					</div>
				</fieldset>
				<?=   form_close(); ?>
			</div>
			<div class="col-md-2"></div>
		</div>  
	</div>
	<?php $this->load->view('overall/footer'); ?>

	<script>
		$("#ID_PAIS").val("<?php echo $equipo[0]->ID_PAIS;  ?>");
	</script>

</body>
</html>   