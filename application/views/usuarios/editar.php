<?php $this->load->view('overall/header'); ?>
<body>
	<?php $this->load->view('overall/nav2'); ?>
	<div class="container">
		<h2 align="center"> 
			<?= $usuario->P_NOMBRE .' '. $usuario->P_APELLIDO  ?>
		</h2>
		<br>
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<?=  form_open_multipart('usuarios/editar/'.$usuario->CEDULA.' ', 'class="form-horizontal"');  ?>
				<fieldset>
					<?php if ($this->session->userdata('type')==1): ?>
						<div class="form-group">
							<label for="" class="col-md-3 control-label bold">Tipo Usuario</label>
							<div class="col-md-9">
								<select  class="form-control" name="ID_TIPO" id="ID_TIPO">
									<option value="1">Administrador</option>
									<option value="2">Estación </option>
									<option value="3">Casa de Apuestas</option>
									<option value="4">Usuario</option>
								</select>
							</div>
						</div>
					<?php endif ?>
					<div class="form-group">
						<label for="" class="col-md-3 control-label bold">Primer Nombre</label>
						<div class="col-md-9">
							<input type="text" class="form-control" name="P_NOMBRE" id="P_NOMBRE" value="<?php echo $usuario->P_NOMBRE;  ?>">
						</div>
					</div> 
					<div class="form-group">
						<label for="" class="col-md-3 control-label bold">Segundo Nombre</label>
						<div class="col-md-9">
							<input type="text" class="form-control" name="S_NOMBRE" id="S_NOMBRE" value="<?php echo $usuario->S_NOMBRE;  ?>">
						</div>
					</div> 
					<div class="form-group">
						<label for="" class="col-md-3 control-label bold">Primer Apellido</label>
						<div class="col-md-9">
							<input type="text" class="form-control" name="P_APELLIDO" id="P_APELLIDO" value="<?php echo $usuario->P_APELLIDO;  ?>">
						</div>
					</div> 
					<div class="form-group">
						<label for="" class="col-md-3 control-label bold">Segundo Apellido</label>
						<div class="col-md-9">
							<input type="text" class="form-control" name="S_APELLIDO" id="S_APELLIDO" value="<?php echo $usuario->S_APELLIDO;  ?>">
						</div>
					</div> 
					<div class="form-group">
						<label for="" class="col-md-3 control-label bold">Correo Electrónico</label>
						<div class="col-md-9">
							<input type="mail" class="form-control" name="EMAIL" id="EMAIL" value="<?php echo $usuario->EMAIL;  ?>">
						</div>
					</div> 
					<div class="form-group">
						<label for="" class="col-md-3 control-label bold">Nick Usuario</label>
						<div class="col-md-9">
							<input type="text" class="form-control" name="USUARIO" id="USUARIO" value="<?php echo $usuario->USUARIO;  ?>">
						</div>
					</div> 
					<div class="form-group">
						<label for="" class="col-md-3 control-label bold">Contraseña</label>
						<div class="col-md-9">
							<input type="password" class="form-control" name="CLAVE" id="CLAVE" value="<?php echo $usuario->CLAVE;  ?>">
						</div>
					</div> 
					<div class="form-group">
						<label for="" class="col-md-3 control-label bold">Dirección</label>
						<div class="col-md-9">
							<input type="text" class="form-control" name="DIRECCION" id="DIRECCION" value="<?php echo $usuario->DIRECCION;  ?>">
						</div>
					</div> 
					<div class="form-group">
						<label for="" class="col-md-3 control-label bold">Celular</label>
						<div class="col-md-9">
							<input type="number" class="form-control" name="TELEFONO" id="TELEFONO" value="<?php echo $usuario->TELEFONO;  ?>">
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
	<?php if ($this->session->userdata('type')==1): ?>
		<script>
			$("#ID_TIPO").val("<?php echo $usuario->ID_TIPO;  ?>");
		</script>
	<?php endif ?>

</body>
</html>   