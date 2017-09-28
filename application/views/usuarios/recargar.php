<?php $this->load->view('overall/header'); ?>
<body>
	<?php $this->load->view('overall/nav2'); ?>
	<div class="container">
		<h2 align="center"> 
			<?= $usuario->P_NOMBRE .' '. $usuario->P_APELLIDO  ?>
		</h2>
		<br>
		<div class="row">
			<div class="col-md-7 col-md-offset-2">
				<?=  form_open_multipart('usuarios/recargar/'.$usuario->CEDULA.' ', 'class="form-horizontal"');  ?>
				<fieldset>
					<div class="form-group">
						<label for="" class="col-md-3 control-label bold">Valor a recargar</label>
						<div class="col-md-9">
							<input type="number" class="form-control" name="SALDO" id="SALDO" >
						</div>
					</div>   
					<div class="form-group" align="center">
						<div class="col-lg-10 col-lg-offset-2">
							<button type="submit" class="btn btn-success">Recargar</button>
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