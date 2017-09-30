
<nav class="navbar navbar-default" role="navigation">
	<div class="container-fluid">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" style="font-size: 17px" href="<?= base_url(); ?>"><b>Bet</b>365  <b></b></a>
		</div>
		<?php if ($this->session->userdata('type')==1): ?>
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav">
					<li class="dropdown ">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="true"> EQUIPOS <span class="caret"></span></a>
						<ul class="dropdown-menu" role="menu">
							<li><a href="<?= base_url(); ?>equipos">Listar</a></li>
							<li class="divider"></li>
							<li><a href="<?= base_url(); ?>equipos/fm">Logos</a></li>
						</ul>
					</li>
				</ul>
				<ul class="nav navbar-nav">
					<li><a href="<?= base_url(); ?>Paises">PAISES</a></li> 
				</ul>
				<ul class="nav navbar-nav">
					<li><a href="<?= base_url(); ?>Partidos">PARTIDOS</a></li> 
				</ul>
				<ul class="nav navbar-nav">
					<li class="dropdown ">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="true"> SYNC <span class="caret"></span></a>
						<ul class="dropdown-menu" role="menu">
							<li><a href="<?= base_url(); ?>sync/syncMatches">Partidos</a></li> 
							<li class="divider"></li>
							<li><a href="<?= base_url(); ?>sync/syncScores">Resultados</a></li> 
							<li class="divider"></li>
							<li><a href="<?= base_url(); ?>sync/syncBets">Apuestas</a></li> 
						</ul>
					</li>
				</ul>
			<?php endif ?>
			<?php if ( $this->session->userdata('type')==1 || $this->session->userdata('type')==3  ): ?>
				<ul class="nav navbar-nav">
					<li><a href="<?= base_url(); ?>usuarios">USUARIOS</a></li> 
				</ul>
				<ul class="nav navbar-nav">
					<li class="dropdown ">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="true"> INFORMES <span class="caret"></span></a>
						<ul class="dropdown-menu" role="menu">
							<li><a href="<?= base_url(); ?>apuestas/informe">Apuestas</a></li>
						</ul>
					</li>
				</ul>
			<?php endif ?>
			<ul  class="nav navbar-nav navbar-right">
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><b><?php echo ucwords($this->session->userdata('name')); ?></b> <span class="caret"></span></a>
					<ul class="dropdown-menu" role="menu">
						<li><a href="#">Mi Perfil</a></li>
						<li class="divider"></li>
						<li><a href="<?= base_url(); ?>login/logout">Salir</a></li>
					</ul>
				</li>
			</ul>
		</div>
	</nav> 