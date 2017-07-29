<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<html lang="es">
<head>
	<?php $this->load->view('overall/header'); ?>
</head>

<body class="signup-page">
	<div class="wrapper">
		<div class="header header-filter" style="background-image: url('<?= base_url(); ?>public/img/colombia.jpg'); background-size: cover; background-position: top center;">
			<div class="container">
				<div class="row">
					<div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3">
						<div class="card card-signup">
							<?=  form_open('login/form', 'class="form"');  ?>
							<div class="header header-primary text-center">
								<h4 style="color:white">Bet<b>365</b></h4>
									<!--<div class="social-line">
										<a href="#pablo" class="btn btn-simple btn-just-icon">
											<i class="fa fa-facebook-square"></i>
										</a>
										<a href="#pablo" class="btn btn-simple btn-just-icon">
											<i class="fa fa-twitter"></i>
										</a>
										<a href="#pablo" class="btn btn-simple btn-just-icon">
											<i class="fa fa-google-plus"></i>
										</a>
									</div>-->
								</div>
								<p class="text-divider">Iniciar sesión</p>
								<div class="content">
									<div class="input-group">
										<span class="input-group-addon">
											<i class="material-icons">email</i>
										</span>
										<input type="text" class="form-control" placeholder="Correo" id="EMAIL" name="EMAIL">
									</div>

									<div class="input-group">
										<span class="input-group-addon">
											<i class="material-icons">lock_outline</i>
										</span>
										<input type="password" placeholder="Contraseña" class="form-control" id="PASS" name="PASS" />
									</div>
									<div class="input-group text-center">
										<span class="input-group-addon"></span>
										<input type="submit" class="btn btn-primary btn-block btn-flat" name="" value="Ingresar">									</div>
										<br>
									</div>
									<?=   form_close(); ?>
								</div>
							</div>
						</div>
					</div>
				</div>

			</div>
			
			
			
		</body>
		<!--   Core JS Files   -->
		<script src="<?= base_url(); ?>public/js/jquery.min.js" type="text/javascript"></script>
		<script src="<?= base_url(); ?>public/js/bootstrap.min.js" type="text/javascript"></script>
		<script src="<?= base_url(); ?>public/js/material.min.js"></script>

		<!--  Plugin for the Datepicker, full documentation here: http://www.eyecon.ro/bootstrap-datepicker/ -->
		<script src="<?= base_url(); ?>public/js/bootstrap-datepicker.js" type="text/javascript"></script>
		<!-- Control Center for Material Kit: activating the ripples, parallax effects, scripts from the example pages etc -->
		<script src="<?= base_url(); ?>public/js/material-kit.js" type="text/javascript"></script>
		<script src="<?= base_url(); ?>public/js/moment.js"></script> 	
		<script src="<?= base_url(); ?>public/js/moment-with-locales.min.js"></script> 	


		

		</html>
