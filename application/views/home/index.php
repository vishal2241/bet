<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<html lang="es">
<head>
	<?php $this->load->view('overall/header'); ?>
</head>

<body class="signup-page inverse" >

	<nav class="navbar navbar-info">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>                        
				</button>
				<a class="navbar-brand" href="#">Logo</a>
			</div>
			<div class="collapse navbar-collapse" id="myNavbar">
				<ul class="nav navbar-nav">
					<li class="active"><a href="#">Home</a></li>
					<li><a href="#">About</a></li>
					<li><a href="#">Projects</a></li>
					<li><a href="#">Contact</a></li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
					<li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
				</ul>
			</div>
		</div>
	</nav>

	<div class="container-fluid text-center">    
		<div class="row content">

			<div class="col-sm-8 text-left col-sm-offset-1"> 
				<table class="table">
					<thead>
						<tr>
							<th class="text-center">#</th>
							<th>Name</th>
							<th>Job Position</th>
							<th>Since</th>
							<th class="text-right">Salary</th>
							<th class="text-right">Actions</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td class="text-center">1</td>
							<td>Andrew Mike</td>
							<td>Develop</td>
							<td>2013</td>
							<td class="text-right">&euro; 99,225</td>
							<td class="td-actions text-right">
								<button type="button" rel="tooltip" title="View Profile" class="btn btn-info btn-simple btn-xs">
									<i class="fa fa-user"></i>
								</button>
								<button type="button" rel="tooltip" title="Edit Profile" class="btn btn-success btn-simple btn-xs">
									<i class="fa fa-edit"></i>
								</button>
								<button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-simple btn-xs">
									<i class="fa fa-times"></i>
								</button>
							</td>
						</tr>
						
					</tbody>
				</table>

			</div>
			<div class="col-sm-3 sidenav">
				<div class="">
					<form>
						<div class="form-group">
							<input type="text" value="" placeholder="Regular" class="form-control" />
						</div>
						<div class="form-group">
							<input type="text" value="" placeholder="Regular" class="form-control" />
						</div>
					</form>

				</div>
			</div>
		</div>
	</div>

</body>
<?php $this->load->view('overall/footer'); ?>
</html>
