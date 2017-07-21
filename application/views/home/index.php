<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<html lang="es">
<head>
	<?php $this->load->view('overall/header'); ?>
</head>

<body class="components-page">

	<!--<nav class="navbar navbar-transparent navbar-fixed-top navbar-color-on-scroll" role="navigation">-->
	<nav class="navbar navbar-transparent navbar-fixed-top  " role="navigation">
		<div class="container">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button id="menu-toggle" type="button" class="navbar-toggle" data-target="#navigation-doc">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar bar1"></span>
					<span class="icon-bar bar2"></span>
					<span class="icon-bar bar3"></span>
				</button>
				<!--<a href="">
					<div class="logo-container">
						<div class="logo">
							 <img src="assets/img/logo.png" alt="Creative Tim Logo"> 
						</div>
						<div class="brand">
							Creative Tim
						</div>
					</div>
				</a>-->
			</div>

			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="navigation-doc">
				<ul  class="nav navbar-nav navbar-right">
					<li>
						<a href="index.html">Back to Kit</a>
					</li>
					<li>
						<a href="https://github.com/timcreative/material-kit/issues">Have an issue?</a>
					</li>
					<li>
						<a href="http://demos.creative-tim.com/material-kit-pro/presentation.html?ref=utp-freebie" target="_blank">
							<i class="material-icons">unarchive</i> Upgrade to PRO
						</a>
					</li>
				</ul>

			</div><!-- /.navbar-collapse -->
		</div><!-- /.container-fluid -->
	</nav>

	<div class="wrapper">
		<div class="header header-filter" style="background-image: url('<?= base_url(); ?>public/img/header.jpg');">
			<!--<div class="container">
				<div class="row">
					<div class="col-md-6 col-md-offset-3">
						<h1 class="title text-center">Components Documentation</h1>
					</div>
				</div> 
			</div>-->
		</div>

		<div class="main main-raised">
			<div class="section">
				<div class="container">
					<div class="row">
						<div class="col-md-9">
							<div class="tim-container">
								<!-- tables row -->
								<div class="tim-row" id="tables-row">					 
									<div class="table-responsive">
										<table class="table" id="bets">
											<thead>
												<tr>
													<th colspan="16" class="text-left" >
														<h4>
															<img src="<?= base_url(); ?>public/img/banderas/48/Colombia.png"> 
															<b>Colombia: </b> Liga Aguila
														</h4>
													</th>
												</tr>
												<tr>
													<th class="text-center">Hora</th>
													<th class="text-center">Local</th>
													<th class="text-center">Visitante</th>
													<th class="text-center">1</th>
													<th class="text-center"x</th>
														<th class="text-center">2</th>
														<th class="text-center">Over</th>
														<th class="text-center">Under</th>
														<th class="text-center">1-1st</th>
														<th class="text-center">x-1st</th>
														<th class="text-center">2-1st</th>
														<th class="text-center">1x</th>
														<th class="text-center">1-2</th>
														<th class="text-center">2x</th>
														<th class="text-center">GG</th>
														<th class="text-center">NG</th>
													</tr>
												</thead>
												<tbody>

												</tbody>
											</table>
										</div>
										<!-- end container -->
									</div>
								</div>
							</div>
							<div class="col-md-3">
								<h2>Cupon</h2>
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
									<button class="btn btn-success col-md-12">JUGAR</button>
								</form>

							</div>
						</div>
					</div>
					<footer class="footer footer-transparent">
						<div class="container">
							<nav class="pull-left">
								<ul>
									<li>
										<a href="http://www.creative-tim.com">
											Creative Tim
										</a>
									</li>
									<li>
										<a href="http://presentation.creative-tim.com">
											About Us
										</a>
									</li>
									<li>
										<a href="http://blog.creative-tim.com">
											Blog
										</a>
									</li>
									<li>
										<a href="http://www.creative-tim.com/license">
											Licenses
										</a>
									</li>
								</ul>
							</nav>
							<div class="social-area pull-right">
								<a class="btn btn-social btn-twitter btn-simple" href="https://twitter.com/CreativeTim">
									<i class="fa fa-twitter"></i>
								</a>
								<a class="btn btn-social btn-facebook btn-simple" href="https://www.facebook.com/CreativeTim">
									<i class="fa fa-facebook-square"></i>
								</a>
								<a class="btn btn-social btn-google btn-simple" href="https://plus.google.com/+CreativetimPage">
									<i class="fa fa-google-plus"></i>
								</a>
							</div>
							<div class="copyright">
								&copy; 2016 Creative Tim, made with love
							</div>
						</div>
					</footer>

				</div>

				<!-- Modal Core -->
				<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
								<h4 class="modal-title" id="myModalLabel">Modal title</h4>
							</div>
							<div class="modal-body">
								Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth. Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-default btn-simple" data-dismiss="modal">Close</button>
								<button type="button" class="btn btn-info btn-simple">Save</button>
							</div>
						</div>
					</div>
				</div>
			</body>
			<?php $this->load->view('overall/footer'); ?>
			<script>
				for (var i = 0; i < 40; i++) {
					$("#bets > tbody").append('<tr> \
						<td class="text-center">19:00</td> \
						<td class="text-center">Botafogo PB</td> \
						<td class="text-center">Fortaleza</td> \
						<td class="text-center">2.00</td> \
						<td class="text-center"3.15</td> \
							<td class="text-center">3.30</td> \
							<td class="text-center">2.05</td> \
							<td class="text-center">1.58</td> \
							<td class="text-center">2.30</td> \
							<td class="text-center">1.98</td> \
							<td class="text-center">3.60</td> \
							<td class="text-center">1.21</td> \
							<td class="text-center">1.32</td> \
							<td class="text-center">1.59</td> \
							<td class="text-center">11.00</td> \
							<td class="text-center">7.60</td> \
						</tr>');
				}

			</script>
			</html>
