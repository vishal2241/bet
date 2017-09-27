<?php $this->load->view('overall/header'); ?>
<body>
	<?php $this->load->view('overall/nav2'); ?>
	<div class="container">
		<h2 align="center"> 
			<?php echo $pais[0]->NOMBRE;  ?>
			<img width="64" src="<?= base_url(); ?>public/img/logos/country/<?= $pais[0]->IMG ?>">
		</h2>
		<br>
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<?=  form_open_multipart('paises/editar/'.$pais[0]->ID_PAIS.' ', 'class="form-horizontal"');  ?>
				<fieldset>
					<div class="form-group">
						<label for="" class="col-md-3 control-label">Nombre</label>
						<div class="col-md-9">
							<input type="text" class="form-control" name="NOMBRE" id="NOMBRE" value="<?php echo $pais[0]->NOMBRE;  ?>">
						</div>
					</div> 
					<div class="form-group">
						<label for="" class="col-md-3 control-label">Imagen</label>
						<div class="col-md-9">
							<input type="text" class="form-control" name="IMG" id="IMG" value="<?php echo $pais[0]->IMG;  ?>">
						</div>
					</div>   
					<div class="form-group">
						<label for="" class="col-md-3 control-label">Favorito</label>
						<div class="col-md-9">
							<select  class="form-control" name="FAVORITO" id="FAVORITO">
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
							</select>
						</div>
					</div>

					<div class="form-group">
						<label for="" class="col-md-3 control-label">Folder</label>
						<div class="col-md-9">
							<div class="radio">
								<label><input type="radio" name="FOLDER" value="SI" <?php echo ($pais[0]->FOLDER=='SI' ? 'checked': null ) ?> >SI</label>
								<label><input type="radio" name="FOLDER" value="NO" <?php echo ($pais[0]->FOLDER=='NO' ? 'checked': null ) ?>>NO</label>
							</div>
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
		$("#TIPO").val("<?php echo $pais[0]->TIPO;  ?>");
	</script>


</body>
</html>   