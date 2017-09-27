
<nav class="navbar navbar-inverse" role="navigation">
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

		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			<ul class="nav navbar-nav">
				<li><a href="<?= base_url(); ?>Partidos">PARTIDOS</a></li> 
			</ul>
			<ul class="nav navbar-nav">
				<li><a href="<?= base_url(); ?>Paises">PAISES</a></li> 
			</ul>
			<ul class="nav navbar-nav">
				<li class="dropdown ">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="true"> TORNEOS <span class="caret"></span></a>
					<ul class="dropdown-menu" role="menu">
						<li><a href="<?= base_url(); ?>competiciones">Listar</a></li>
						<li class="divider"></li>
						<li><a href="<?= base_url(); ?>competiciones/agregar">Agregar</a></li>
					</ul>
				</li>
			</ul>
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
				<li class="dropdown ">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="true"> SYNC <span class="caret"></span></a>
					<ul class="dropdown-menu" role="menu">
						<li><a href="<?= base_url(); ?>sync/syncMatches">Odds</a></li> 
						<li class="divider"></li>
						<li><a href="<?= base_url(); ?>sync/index">Scores</a></li> 
					</ul>
				</li>
			</ul>
			<ul  class="nav navbar-nav navbar-right">
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><b><?php echo ucwords($this->session->userdata('name')); ?></b> <span class="caret"></span></a>
					<ul class="dropdown-menu" role="menu">
						<li><a href="#">Retirar</a></li>
						<li class="divider"></li>
						<li><a href="#">Mi Perfil</a></li>
						<li class="divider"></li>
						<li><a href="<?= base_url(); ?>login/logout">Salir</a></li>
					</ul>
				</li>
			</ul>
		</div>
	</nav> 