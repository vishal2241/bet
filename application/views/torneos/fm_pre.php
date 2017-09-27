<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<html lang="es">
<head>
	<?php $this->load->view('overall/header'); ?>
	<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>public/plugins/datatables/css/dataTables.bootstrap.css">

</head>

<body class="components-page">
	<?php $this->load->view('overall/nav'); ?>
	<div class="main main-raised">
		<div class="section">
			<div class="container">
				<div class="row">
					<div class="col-md-9">
						<div class="tim-container">
							
							<h2 class="text-center" id="titulo">Logos FM</h2>
							<div class="table-responsive" id="all">
								<table class="table table-striped table-hover dataTable" id="FM">
									<thead>
										<tr>
											<th class="coltop">Name</th>
											
											<th class="coltop">Nation</th>
											<th class="coltop">Division</th>
											<th class="coltop">Transfer Budget</th>
											<th class="coltop">Status</th>
											<th class="coltop">Stadium Capacity</th>
											<th class="coltop">Colors</th>
											<th class="coltop">Founded</th>
											<th class="coltop">Average Age</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td id="8104219">Orebro Syrianska IF</td>
											<td><img src="modules/fmsdb/img/flags/s/SWE.gif" alt="Sweden">  SWE</td>
											<td>Second Division NG</td>
											<td>0</td>
											<td>Semi-Professional</td>
											<td>1,400</td>
											<td><span class="label" style="background:#F8F000"></span> <span class="label" style="background:#E00000"></span></td>
											<td>1977</td>
											<td>23.3</td>
										</tr>
										<tr>
											<td id="1843">Orgryte IS</td>
											<td><img src="modules/fmsdb/img/flags/s/SWE.gif" alt="Sweden">  SWE</td>
											<td>First Division Elite</td>
											<td>7K</td>
											<td>Professional</td>
											<td>18,400</td>
											<td><span class="label" style="background:#001048"></span> <span class="label" style="background:#780000"></span></td>
											<td>1887</td>
											<td>25.7</td>
										</tr>
										<tr>
											<td id="4300744">Oskarshamns AIK</td>
											<td><img src="modules/fmsdb/img/flags/s/SWE.gif" alt="Sweden">  SWE</td>
											<td>First Division South</td>
											<td>7K</td>
											<td>Semi-Professional</td>
											<td>800</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1922</td>
											<td>23.9</td>
										</tr>
										<tr>
											<td id="1844">Osters IF</td>
											<td><img src="modules/fmsdb/img/flags/s/SWE.gif" alt="Sweden">  SWE</td>
											<td>First Division South</td>
											<td>0</td>
											<td>Professional</td>
											<td>12,000</td>
											<td><span class="label" style="background:#005098"></span> <span class="label" style="background:#E00000"></span></td>
											<td>1930</td>
											<td>24.8</td>
										</tr>
										<tr>
											<td id="1101813">Ostersunds FK</td>
											<td><img src="modules/fmsdb/img/flags/s/SWE.gif" alt="Sweden">  SWE</td>
											<td>Premier Division</td>
											<td>45K</td>
											<td>Professional</td>
											<td>6,200</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
											<td>1996</td>
											<td>24.6</td>
										</tr>
										<tr>
											<td id="1823">Pitea IF</td>
											<td><img src="modules/fmsdb/img/flags/s/SWE.gif" alt="Sweden">  SWE</td>
											<td>First Division North</td>
											<td>894</td>
											<td>Semi-Professional</td>
											<td>6,000</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#E00000"></span></td>
											<td>1918</td>
											<td>23.6</td>
										</tr>
										<tr>
											<td id="68003020">Prespa Birlik</td>
											<td><img src="modules/fmsdb/img/flags/s/SWE.gif" alt="Sweden">  SWE</td>
											<td>First Division South</td>
											<td>0</td>
											<td>Semi-Professional</td>
											<td>27,500</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1973</td>
											<td>25.0</td>
										</tr>
										<tr>
											<td id="2176">Qviding FIF</td>
											<td><img src="modules/fmsdb/img/flags/s/SWE.gif" alt="Sweden">  SWE</td>
											<td>First Division South</td>
											<td>0</td>
											<td>Semi-Professional</td>
											<td>4,500</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#780030"></span></td>
											<td>1987</td>
											<td>21.8</td>
										</tr>
										<tr>
											<td id="4300051">Rynninge IK</td>
											<td><img src="modules/fmsdb/img/flags/s/SWE.gif" alt="Sweden">  SWE</td>
											<td>Second Division NG</td>
											<td>0</td>
											<td>Semi-Professional</td>
											<td>1,000</td>
											<td><span class="label" style="background:#0050D0"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1932</td>
											<td>21.8</td>
										</tr>
										<tr>
											<td id="1825">Sandvikens IF</td>
											<td><img src="modules/fmsdb/img/flags/s/SWE.gif" alt="Sweden">  SWE</td>
											<td>Second Division N</td>
											<td>2K</td>
											<td>Semi-Professional</td>
											<td>4,000</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#E00000"></span></td>
											<td>1918</td>
											<td>22.8</td>
										</tr>
										<tr>
											<td id="619064">Savedalens IF</td>
											<td><img src="modules/fmsdb/img/flags/s/SWE.gif" alt="Sweden">  SWE</td>
											<td>Second Division WG</td>
											<td>0</td>
											<td>Semi-Professional</td>
											<td>2,000</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#C00000"></span></td>
											<td>1932</td>
											<td>23.0</td>
										</tr>
										<tr>
											<td id="1827">Skelleftea FF</td>
											<td><img src="modules/fmsdb/img/flags/s/SWE.gif" alt="Sweden">  SWE</td>
											<td>Second Division N</td>
											<td>0</td>
											<td>Semi-Professional</td>
											<td>3,000</td>
											<td><span class="label" style="background:#E8E060"></span> <span class="label" style="background:#000000"></span></td>
											<td>1921</td>
											<td>22.6</td>
										</tr>
										<tr>
											<td id="2643">Skiljebo SK</td>
											<td><img src="modules/fmsdb/img/flags/s/SWE.gif" alt="Sweden">  SWE</td>
											<td>Second Division NS</td>
											<td>0</td>
											<td>Semi-Professional</td>
											<td>1,000</td>
											<td><span class="label" style="background:#F8F838"></span> <span class="label" style="background:#000000"></span></td>
											<td>1944</td>
											<td>24.3</td>
										</tr>
										<tr>
											<td id="616450">Skoftebyns IF</td>
											<td><img src="modules/fmsdb/img/flags/s/SWE.gif" alt="Sweden">  SWE</td>
											<td>Second Division NG</td>
											<td>0</td>
											<td>Semi-Professional</td>
											<td>500</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1950</td>
											<td>24.3</td>
										</tr>
										<tr>
											<td id="2180">Skovde AIK</td>
											<td><img src="modules/fmsdb/img/flags/s/SWE.gif" alt="Sweden">  SWE</td>
											<td>Second Division NG</td>
											<td>0</td>
											<td>Semi-Professional</td>
											<td>4,000</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#C80000"></span></td>
											<td>1919</td>
											<td>21.6</td>
										</tr>
										<tr>
											<td id="2645">Smedby AIS</td>
											<td><img src="modules/fmsdb/img/flags/s/SWE.gif" alt="Sweden">  SWE</td>
											<td>Second Division SS</td>
											<td>0</td>
											<td>Semi-Professional</td>
											<td>1,000</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
											<td>1929</td>
											<td>22.0</td>
										</tr>
										<tr>
											<td id="2647">Soderhamns FF</td>
											<td><img src="modules/fmsdb/img/flags/s/SWE.gif" alt="Sweden">  SWE</td>
											<td>Second Division N</td>
											<td>0</td>
											<td>Semi-Professional</td>
											<td>1,000</td>
											<td><span class="label" style="background:#0050D0"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1986</td>
											<td>24.7</td>
										</tr>
										<tr>
											<td id="93054690">Sodertalje FK</td>
											<td><img src="modules/fmsdb/img/flags/s/SWE.gif" alt="Sweden">  SWE</td>
											<td>Second Division SS</td>
											<td>0</td>
											<td>Semi-Professional</td>
											<td>6,700</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#C80000"></span></td>
											<td>2012</td>
											<td>20.9</td>
										</tr>
										<tr>
											<td id="620906">Sollentuna FF</td>
											<td><img src="modules/fmsdb/img/flags/s/SWE.gif" alt="Sweden">  SWE</td>
											<td>Second Division NS</td>
											<td>0</td>
											<td>Semi-Professional</td>
											<td>4,500</td>
											<td><span class="label" style="background:#0030A0"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>2007</td>
											<td>23.2</td>
										</tr>
										<tr>
											<td id="1829">Stenungsunds IF</td>
											<td><img src="modules/fmsdb/img/flags/s/SWE.gif" alt="Sweden">  SWE</td>
											<td>Second Division NG</td>
											<td>0</td>
											<td>Semi-Professional</td>
											<td>3,000</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#E00000"></span></td>
											<td>1927</td>
											<td>22.8</td>
										</tr>
										<tr>
											<td id="68012713">Stromsbergs IF</td>
											<td><img src="modules/fmsdb/img/flags/s/SWE.gif" alt="Sweden">  SWE</td>
											<td>Second Division N</td>
											<td>0</td>
											<td>Semi-Professional</td>
											<td>1,000</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1912</td>
											<td>25.4</td>
										</tr>
										<tr>
											<td id="616330">Sundbybergs IK</td>
											<td><img src="modules/fmsdb/img/flags/s/SWE.gif" alt="Sweden">  SWE</td>
											<td>Second Division NS</td>
											<td>0</td>
											<td>Semi-Professional</td>
											<td>1,000</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#008030"></span></td>
											<td>1893</td>
											<td>25.8</td>
										</tr>
										<tr>
											<td id="2658">Syrianska FC</td>
											<td><img src="modules/fmsdb/img/flags/s/SWE.gif" alt="Sweden">  SWE</td>
											<td>First Division Elite</td>
											<td>0</td>
											<td>Professional</td>
											<td>6,700</td>
											<td><span class="label" style="background:#F8F000"></span> <span class="label" style="background:#E00000"></span></td>
											<td>1977</td>
											<td>23.5</td>
										</tr>
										<tr>
											<td id="8104683">Syrianska IF Kerburan</td>
											<td><img src="modules/fmsdb/img/flags/s/SWE.gif" alt="Sweden">  SWE</td>
											<td>Second Division NS</td>
											<td>0</td>
											<td>Semi-Professional</td>
											<td>7,044</td>
											<td><span class="label" style="background:#F8F000"></span> <span class="label" style="background:#E00000"></span></td>
											<td>1977</td>
											<td>22.5</td>
										</tr>
										<tr>
											<td id="1103728">Team TG FF</td>
											<td><img src="modules/fmsdb/img/flags/s/SWE.gif" alt="Sweden">  SWE</td>
											<td>First Division North</td>
											<td>2K</td>
											<td>Semi-Professional</td>
											<td>1,000</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#701828"></span></td>
											<td>1898</td>
											<td>24.2</td>
										</tr>
										<tr>
											<td id="4300703">Tenhults IF</td>
											<td><img src="modules/fmsdb/img/flags/s/SWE.gif" alt="Sweden">  SWE</td>
											<td>Second Division WG</td>
											<td>0</td>
											<td>Semi-Professional</td>
											<td>1,000</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1912</td>
											<td>22.9</td>
										</tr>
										<tr>
											<td id="6410294">Torns IF</td>
											<td><img src="modules/fmsdb/img/flags/s/SWE.gif" alt="Sweden">  SWE</td>
											<td>Second Division SG</td>
											<td>0</td>
											<td>Semi-Professional</td>
											<td>1,000</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#F87000"></span></td>
											<td>1965</td>
											<td>24.6</td>
										</tr>
										<tr>
											<td id="1101151">Torslanda IK</td>
											<td><img src="modules/fmsdb/img/flags/s/SWE.gif" alt="Sweden">  SWE</td>
											<td>Second Division WG</td>
											<td>894</td>
											<td>Semi-Professional</td>
											<td>1,000</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#E00000"></span></td>
											<td>1944</td>
											<td>22.4</td>
										</tr>
										<tr>
											<td id="1831">Trelleborgs FF</td>
											<td><img src="modules/fmsdb/img/flags/s/SWE.gif" alt="Sweden">  SWE</td>
											<td>First Division Elite</td>
											<td>4K</td>
											<td>Professional</td>
											<td>10,000</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#0050E8"></span></td>
											<td>1926</td>
											<td>24.6</td>
										</tr>
										<tr>
											<td id="1103878">Tvaakers IF</td>
											<td><img src="modules/fmsdb/img/flags/s/SWE.gif" alt="Sweden">  SWE</td>
											<td>First Division South</td>
											<td>0</td>
											<td>Semi-Professional</td>
											<td>1,000</td>
											<td><span class="label" style="background:#0030A0"></span> <span class="label" style="background:#E00000"></span></td>
											<td>1920</td>
											<td>25.1</td>
										</tr>
										<tr>
											<td id="4302017">Ullareds IK</td>
											<td><img src="modules/fmsdb/img/flags/s/SWE.gif" alt="Sweden">  SWE</td>
											<td>Second Division WG</td>
											<td>0</td>
											<td>Semi-Professional</td>
											<td>1,000</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#0050D0"></span></td>
											<td>1929</td>
											<td>24.3</td>
										</tr>
										<tr>
											<td id="1833">Umea FC</td>
											<td><img src="modules/fmsdb/img/flags/s/SWE.gif" alt="Sweden">  SWE</td>
											<td>First Division North</td>
											<td>0</td>
											<td>Semi-Professional</td>
											<td>9,000</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#0030A0"></span></td>
											<td>1987</td>
											<td>24.7</td>
										</tr>
										<tr>
											<td id="619076">Utsiktens BK</td>
											<td><img src="modules/fmsdb/img/flags/s/SWE.gif" alt="Sweden">  SWE</td>
											<td>First Division South</td>
											<td>9K</td>
											<td>Semi-Professional</td>
											<td>5,500</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#002060"></span></td>
											<td>1935</td>
											<td>23.8</td>
										</tr>
										<tr>
											<td id="2674">Valbo FF</td>
											<td><img src="modules/fmsdb/img/flags/s/SWE.gif" alt="Sweden">  SWE</td>
											<td>Second Division N</td>
											<td>0</td>
											<td>Semi-Professional</td>
											<td>2,000</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#E00000"></span></td>
											<td>1980</td>
											<td>25.7</td>
										</tr>
										<tr>
											<td id="93056988">Vanersborgs FK</td>
											<td><img src="modules/fmsdb/img/flags/s/SWE.gif" alt="Sweden">  SWE</td>
											<td>Second Division NG</td>
											<td>0</td>
											<td>Semi-Professional</td>
											<td>2,000</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1998</td>
											<td>21.2</td>
										</tr>
										<tr>
											<td id="2677">Varbergs BoIS</td>
											<td><img src="modules/fmsdb/img/flags/s/SWE.gif" alt="Sweden">  SWE</td>
											<td>First Division Elite</td>
											<td>0</td>
											<td>Professional</td>
											<td>5,500</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#188860"></span></td>
											<td>1925</td>
											<td>25.4</td>
										</tr>
										<tr>
											<td id="1105822">Varmbols FC</td>
											<td><img src="modules/fmsdb/img/flags/s/SWE.gif" alt="Sweden">  SWE</td>
											<td>Second Division SS</td>
											<td>0</td>
											<td>Semi-Professional</td>
											<td>1,500</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#0050D0"></span></td>
											<td>1990</td>
											<td>23.7</td>
										</tr>
										<tr>
											<td id="1105664">Varmdo IF</td>
											<td><img src="modules/fmsdb/img/flags/s/SWE.gif" alt="Sweden">  SWE</td>
											<td>Second Division NS</td>
											<td>0</td>
											<td>Semi-Professional</td>
											<td>1,000</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#0050D0"></span></td>
											<td>1948</td>
											<td>22.3</td>
										</tr>
										<tr>
											<td id="8103641">Vasalunds IF</td>
											<td><img src="modules/fmsdb/img/flags/s/SWE.gif" alt="Sweden">  SWE</td>
											<td>First Division North</td>
											<td>0</td>
											<td>Semi-Professional</td>
											<td>5,000</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#E00000"></span></td>
											<td>2003</td>
											<td>23.6</td>
										</tr>
										<tr>
											<td id="2680">Vasteras IK</td>
											<td><img src="modules/fmsdb/img/flags/s/SWE.gif" alt="Sweden">  SWE</td>
											<td>Second Division NS</td>
											<td>0</td>
											<td>Semi-Professional</td>
											<td>1,000</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F8D008"></span></td>
											<td>1898</td>
											<td>21.2</td>
										</tr>
										<tr>
											<td id="1839">Vasteras SK</td>
											<td><img src="modules/fmsdb/img/flags/s/SWE.gif" alt="Sweden">  SWE</td>
											<td>First Division North</td>
											<td>8K</td>
											<td>Semi-Professional</td>
											<td>7,044</td>
											<td><span class="label" style="background:#008030"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1904</td>
											<td>24.0</td>
										</tr>
										<tr>
											<td id="68005464">Vimmerby IF</td>
											<td><img src="modules/fmsdb/img/flags/s/SWE.gif" alt="Sweden">  SWE</td>
											<td>Second Division SS</td>
											<td>0</td>
											<td>Semi-Professional</td>
											<td>2,000</td>
											<td><span class="label" style="background:#F8F000"></span> <span class="label" style="background:#000000"></span></td>
											<td>1919</td>
											<td>24.7</td>
										</tr>
										<tr>
											<td id="2685">Vinbergs IF</td>
											<td><img src="modules/fmsdb/img/flags/s/SWE.gif" alt="Sweden">  SWE</td>
											<td>Second Division WG</td>
											<td>0</td>
											<td>Semi-Professional</td>
											<td>1,500</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#00A030"></span></td>
											<td>1932</td>
											<td>23.3</td>
										</tr>
									</tbody>
								</table>
							</div>
							<!-- end container -->
						</div>
					</div>
					<div class="col-md-3">
						<div class="panel panel-default">
							<div class="panel-heading text-center"><b>Tiquete <i class="fa fa-money" aria-hidden="true"></i></b></div>
							<div class="panel-body">
								<div class="col-md-12">
									<table class="table table-condensed" >
										<thead class="tiquete">
											<tr>
												<th class="text-success">Partido</th>
												<th class="text-success" colspan="2">Cuota</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>
													Tolima vs Nacional
													<br>
													<b><span class="text-info text-bold bet">Gana Tolima</span></b>
												</td>
												<td>
													2.00
												</td>
												<td valign="middle">
													<span class="text-danger">
														<b><i class="fa fa-window-close " aria-hidden="true"></i> </b>
													</span>
												</td>
											</tr>



										</tbody>
									</table>
								</div>	
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
									<button class="btn btn-primary col-md-12"><b>JUGAR </b> <i class="fa fa-futbol-o" aria-hidden="true"></i></button>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>

			<?php $this->load->view('overall/footer'); ?>


			<script type="text/javascript" src="<?= base_url(); ?>public/plugins/datatables/js/jquery.dataTables.js"></script>
			<script type="text/javascript" src="<?= base_url(); ?>public/plugins/datatables/js/dataTables.bootstrap.js"></script>
			<script>
				$(document).ready(function() {
					var table = 	$('.dataTable').DataTable({
						"iDisplayLength": -1,
						"lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]],

					});

					$('#FM td:first-child').each(function() {
						var id=$(this).attr('id');
						$('#'+id).after('<td>'+id+'</td>');
						console.log($(this).attr('id'));
					}); 



				} );

				//upload_table('2017-08-22','man');
//https://chrome.google.com/webstore/detail/allow-control-allow-origi/nlfbmbojpeacfghkpbjhddihlkkiljbi?hl=es-419&utm_source=chrome-ntp-launcher
</script>
</html>
