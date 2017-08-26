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
											<!--<th class="coltop">ID</th>-->
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
											<td id="108510">Aldosivi</td>
											<td><img src="modules/fmsdb/img/flags/s/ARG.gif" alt="Argentina">  ARG</td>
											<td>Premier Division</td>
											<td>10K</td>
											<td>Professional</td>
											<td>35,354</td>
											<td><span class="label" style="background:#F8F000"></span> <span class="label" style="background:#00A030"></span></td>
											<td>1913</td>
											<td>28.6</td>
										</tr>
										<tr>
											<td id="102490">All Boys</td>
											<td><img src="modules/fmsdb/img/flags/s/ARG.gif" alt="Argentina">  ARG</td>
											<td>Second Division</td>
											<td>0</td>
											<td>Professional</td>
											<td>21,500</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1913</td>
											<td>26.6</td>
										</tr>
										<tr>
											<td id="108514">Almagro</td>
											<td><img src="modules/fmsdb/img/flags/s/ARG.gif" alt="Argentina">  ARG</td>
											<td>Second Division</td>
											<td>30K</td>
											<td>Professional</td>
											<td>16,000</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#0050D0"></span></td>
											<td>1911</td>
											<td>26.2</td>
										</tr>
										<tr>
											<td id="78">Argentinos Jrs.</td>
											<td><img src="modules/fmsdb/img/flags/s/ARG.gif" alt="Argentina">  ARG</td>
											<td>Second Division</td>
											<td>50K</td>
											<td>Professional</td>
											<td>24,800</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#E00000"></span></td>
											<td>1904</td>
											<td>24.7</td>
										</tr>
										<tr>
											<td id="102476">Arsenal de Sarandi</td>
											<td><img src="modules/fmsdb/img/flags/s/ARG.gif" alt="Argentina">  ARG</td>
											<td>Premier Division</td>
											<td>0</td>
											<td>Professional</td>
											<td>16,300</td>
											<td><span class="label" style="background:#E00000"></span> <span class="label" style="background:#60C0F8"></span></td>
											<td>1957</td>
											<td>26.1</td>
										</tr>
										<tr>
											<td id="14031194">Atl. Parana</td>
											<td><img src="modules/fmsdb/img/flags/s/ARG.gif" alt="Argentina">  ARG</td>
											<td>Second Division</td>
											<td>6K</td>
											<td>Professional</td>
											<td>5,625</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#E00000"></span></td>
											<td>1907</td>
											<td>29.7</td>
										</tr>
										<tr>
											<td id="102472">Atl. Rafaela</td>
											<td><img src="modules/fmsdb/img/flags/s/ARG.gif" alt="Argentina">  ARG</td>
											<td>Premier Division</td>
											<td>941K</td>
											<td>Professional</td>
											<td>18,600</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#60C0F8"></span></td>
											<td>1907</td>
											<td>24.9</td>
										</tr>
										<tr>
											<td id="102474">Atl. Tucuman</td>
											<td><img src="modules/fmsdb/img/flags/s/ARG.gif" alt="Argentina">  ARG</td>
											<td>Premier Division</td>
											<td>115K</td>
											<td>Professional</td>
											<td>32,700</td>
											<td><span class="label" style="background:#60C0F8"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1902</td>
											<td>26.8</td>
										</tr>
										<tr>
											<td id="80">Banfield</td>
											<td><img src="modules/fmsdb/img/flags/s/ARG.gif" alt="Argentina">  ARG</td>
											<td>Premier Division</td>
											<td>324K</td>
											<td>Professional</td>
											<td>34,901</td>
											<td><span class="label" style="background:#008030"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1896</td>
											<td>26.5</td>
										</tr>
										<tr>
											<td id="81">Belgrano</td>
											<td><img src="modules/fmsdb/img/flags/s/ARG.gif" alt="Argentina">  ARG</td>
											<td>Premier Division</td>
											<td>14K</td>
											<td>Professional</td>
											<td>46,083</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#20B0F0"></span></td>
											<td>1905</td>
											<td>28.4</td>
										</tr>
										<tr>
											<td id="82">Boca</td>
											<td><img src="modules/fmsdb/img/flags/s/ARG.gif" alt="Argentina">  ARG</td>
											<td>Premier Division</td>
											<td>77K</td>
											<td>Professional</td>
											<td>49,000</td>
											<td><span class="label" style="background:#F8D000"></span> <span class="label" style="background:#0030A0"></span></td>
											<td>1905</td>
											<td>24.8</td>
										</tr>
										<tr>
											<td id="14006366">Boca Unidos</td>
											<td><img src="modules/fmsdb/img/flags/s/ARG.gif" alt="Argentina">  ARG</td>
											<td>Second Division</td>
											<td>19K</td>
											<td>Professional</td>
											<td>0</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
											<td>1927</td>
											<td>29.5</td>
										</tr>
										<tr>
											<td id="3101502">Brown (Adrogue)</td>
											<td><img src="modules/fmsdb/img/flags/s/ARG.gif" alt="Argentina">  ARG</td>
											<td>Second Division</td>
											<td>12K</td>
											<td>Professional</td>
											<td>3,000</td>
											<td><span class="label" style="background:#901000"></span> <span class="label" style="background:#00D0D0"></span></td>
											<td>1945</td>
											<td>27.8</td>
										</tr>
										<tr>
											<td id="102493">Chacarita Jrs</td>
											<td><img src="modules/fmsdb/img/flags/s/ARG.gif" alt="Argentina">  ARG</td>
											<td>Second Division</td>
											<td>154K</td>
											<td>Professional</td>
											<td>14,600</td>
											<td><span class="label" style="background:#E00000"></span> <span class="label" style="background:#000000"></span></td>
											<td>1906</td>
											<td>25.6</td>
										</tr>
										<tr>
											<td id="102462">Colon</td>
											<td><img src="modules/fmsdb/img/flags/s/ARG.gif" alt="Argentina">  ARG</td>
											<td>Premier Division</td>
											<td>1M</td>
											<td>Professional</td>
											<td>47,000</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F00000"></span></td>
											<td>1905</td>
											<td>27.8</td>
										</tr>
										<tr>
											<td id="14022187">Crucero del Norte</td>
											<td><img src="modules/fmsdb/img/flags/s/ARG.gif" alt="Argentina">  ARG</td>
											<td>Second Division</td>
											<td>518K</td>
											<td>Professional</td>
											<td>12,000</td>
											<td><span class="label" style="background:#F87000"></span> <span class="label" style="background:#F8F000"></span></td>
											<td>1989</td>
											<td>24.8</td>
										</tr>
										<tr>
											<td id="14018428">Ctral. Cordoba (SdE)</td>
											<td><img src="modules/fmsdb/img/flags/s/ARG.gif" alt="Argentina">  ARG</td>
											<td>Second Division</td>
											<td>27K</td>
											<td>Professional</td>
											<td>18,000</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#000000"></span></td>
											<td>1919</td>
											<td>29.3</td>
										</tr>
										<tr>
											<td id="108526">Defensa y Justicia</td>
											<td><img src="modules/fmsdb/img/flags/s/ARG.gif" alt="Argentina">  ARG</td>
											<td>Premier Division</td>
											<td>58K</td>
											<td>Professional</td>
											<td>10,000</td>
											<td><span class="label" style="background:#008030"></span> <span class="label" style="background:#F8F000"></span></td>
											<td>1935</td>
											<td>23.7</td>
										</tr>
										<tr>
											<td id="102483">Douglas Haig</td>
											<td><img src="modules/fmsdb/img/flags/s/ARG.gif" alt="Argentina">  ARG</td>
											<td>Second Division</td>
											<td>8K</td>
											<td>Professional</td>
											<td>18,000</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#B00000"></span></td>
											<td>1918</td>
											<td>26.4</td>
										</tr>
										<tr>
											<td id="85">Estudiantes (LP)</td>
											<td><img src="modules/fmsdb/img/flags/s/ARG.gif" alt="Argentina">  ARG</td>
											<td>Premier Division</td>
											<td>5M</td>
											<td>Professional</td>
											<td>53,000</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#C00008"></span></td>
											<td>1905</td>
											<td>25.9</td>
										</tr>
										<tr>
											<td id="14037206">Estudiantes (San Luis)</td>
											<td><img src="modules/fmsdb/img/flags/s/ARG.gif" alt="Argentina">  ARG</td>
											<td>Second Division</td>
											<td>8K</td>
											<td>Professional</td>
											<td>12,000</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#108830"></span></td>
											<td>1920</td>
											<td>27.3</td>
										</tr>
										<tr>
											<td id="86">Ferro</td>
											<td><img src="modules/fmsdb/img/flags/s/ARG.gif" alt="Argentina">  ARG</td>
											<td>Second Division</td>
											<td>27K</td>
											<td>Professional</td>
											<td>24,800</td>
											<td><span class="label" style="background:#108830"></span> <span class="label" style="background:#00A030"></span></td>
											<td>1904</td>
											<td>27.0</td>
										</tr>
										<tr>
											<td id="3101508">Flandria</td>
											<td><img src="modules/fmsdb/img/flags/s/ARG.gif" alt="Argentina">  ARG</td>
											<td>Second Division</td>
											<td>14K</td>
											<td>Professional</td>
											<td>5,000</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F8F000"></span></td>
											<td>1941</td>
											<td>28.5</td>
										</tr>
										<tr>
											<td id="102957">Gimnasia (Jujuy)</td>
											<td><img src="modules/fmsdb/img/flags/s/ARG.gif" alt="Argentina">  ARG</td>
											<td>Second Division</td>
											<td>115K</td>
											<td>Professional</td>
											<td>25,000</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#60C0F8"></span></td>
											<td>1931</td>
											<td>26.8</td>
										</tr>
										<tr>
											<td id="87">Gimnasia (LP)</td>
											<td><img src="modules/fmsdb/img/flags/s/ARG.gif" alt="Argentina">  ARG</td>
											<td>Premier Division</td>
											<td>461K</td>
											<td>Professional</td>
											<td>24,544</td>
											<td><span class="label" style="background:#002060"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1887</td>
											<td>27.4</td>
										</tr>
										<tr>
											<td id="102491">Godoy Cruz</td>
											<td><img src="modules/fmsdb/img/flags/s/ARG.gif" alt="Argentina">  ARG</td>
											<td>Premier Division</td>
											<td>211K</td>
											<td>Professional</td>
											<td>32,268</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#0050D0"></span></td>
											<td>1921</td>
											<td>24.3</td>
										</tr>
										<tr>
											<td id="958199">Guillermo Brown (PM)</td>
											<td><img src="modules/fmsdb/img/flags/s/ARG.gif" alt="Argentina">  ARG</td>
											<td>Second Division</td>
											<td>10K</td>
											<td>Professional</td>
											<td>14,500</td>
											<td><span class="label" style="background:#0030A0"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1945</td>
											<td>25.2</td>
										</tr>
										<tr>
											<td id="88">Huracan</td>
											<td><img src="modules/fmsdb/img/flags/s/ARG.gif" alt="Argentina">  ARG</td>
											<td>Premier Division</td>
											<td>768K</td>
											<td>Professional</td>
											<td>48,314</td>
											<td><span class="label" style="background:#E00000"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1908</td>
											<td>28.8</td>
										</tr>
										<tr>
											<td id="89">Independiente</td>
											<td><img src="modules/fmsdb/img/flags/s/ARG.gif" alt="Argentina">  ARG</td>
											<td>Premier Division</td>
											<td>0</td>
											<td>Professional</td>
											<td>45,562</td>
											<td><span class="label" style="background:#D80000"></span> <span class="label" style="background:#D80000"></span></td>
											<td>1905</td>
											<td>26.1</td>
										</tr>
										<tr>
											<td id="3101453">Independiente Rivadavia</td>
											<td><img src="modules/fmsdb/img/flags/s/ARG.gif" alt="Argentina">  ARG</td>
											<td>Second Division</td>
											<td>77K</td>
											<td>Professional</td>
											<td>25,000</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#002060"></span></td>
											<td>1913</td>
											<td>27.4</td>
										</tr>
										<tr>
											<td id="102485">Instituto</td>
											<td><img src="modules/fmsdb/img/flags/s/ARG.gif" alt="Argentina">  ARG</td>
											<td>Second Division</td>
											<td>0</td>
											<td>Professional</td>
											<td>32,535</td>
											<td><span class="label" style="background:#E00000"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1918</td>
											<td>25.3</td>
										</tr>
										<tr>
											<td id="14031213">Juv. Unida (Gualeguaychu)</td>
											<td><img src="modules/fmsdb/img/flags/s/ARG.gif" alt="Argentina">  ARG</td>
											<td>Second Division</td>
											<td>0</td>
											<td>Professional</td>
											<td>0</td>
											<td><span class="label" style="background:#60C0F8"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1907</td>
											<td>30.2</td>
										</tr>
										<tr>
											<td id="90">Lanus</td>
											<td><img src="modules/fmsdb/img/flags/s/ARG.gif" alt="Argentina">  ARG</td>
											<td>Premier Division</td>
											<td>768K</td>
											<td>Professional</td>
											<td>46,619</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#680810"></span></td>
											<td>1915</td>
											<td>26.9</td>
										</tr>
										<tr>
											<td id="102495">Los Andes</td>
											<td><img src="modules/fmsdb/img/flags/s/ARG.gif" alt="Argentina">  ARG</td>
											<td>Second Division</td>
											<td>29K</td>
											<td>Professional</td>
											<td>33,942</td>
											<td><span class="label" style="background:#E00000"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1917</td>
											<td>26.4</td>
										</tr>
										<tr>
											<td id="91">Newell's</td>
											<td><img src="modules/fmsdb/img/flags/s/ARG.gif" alt="Argentina">  ARG</td>
											<td>Premier Division</td>
											<td>2M</td>
											<td>Professional</td>
											<td>42,000</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#C00008"></span></td>
											<td>1903</td>
											<td>27.5</td>
										</tr>
										<tr>
											<td id="102486">Nueva Chicago</td>
											<td><img src="modules/fmsdb/img/flags/s/ARG.gif" alt="Argentina">  ARG</td>
											<td>Second Division</td>
											<td>77K</td>
											<td>Professional</td>
											<td>28,500</td>
											<td><span class="label" style="background:#00A030"></span> <span class="label" style="background:#000000"></span></td>
											<td>1911</td>
											<td>25.9</td>
										</tr>
										<tr>
											<td id="108542">Olimpo</td>
											<td><img src="modules/fmsdb/img/flags/s/ARG.gif" alt="Argentina">  ARG</td>
											<td>Premier Division</td>
											<td>74K</td>
											<td>Professional</td>
											<td>18,000</td>
											<td><span class="label" style="background:#F8F000"></span> <span class="label" style="background:#000000"></span></td>
											<td>1910</td>
											<td>27.3</td>
										</tr>
										<tr>
											<td id="3101457">Patronato</td>
											<td><img src="modules/fmsdb/img/flags/s/ARG.gif" alt="Argentina">  ARG</td>
											<td>Premier Division</td>
											<td>14K</td>
											<td>Professional</td>
											<td>22,000</td>
											<td><span class="label" style="background:#E00000"></span> <span class="label" style="background:#000000"></span></td>
											<td>1914</td>
											<td>28.6</td>
										</tr>
										<tr>
											<td id="102487">Quilmes</td>
											<td><img src="modules/fmsdb/img/flags/s/ARG.gif" alt="Argentina">  ARG</td>
											<td>Premier Division</td>
											<td>0</td>
											<td>Professional</td>
											<td>30,200</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1887</td>
											<td>27.0</td>
										</tr>
										<tr>
											<td id="93">Racing Club</td>
											<td><img src="modules/fmsdb/img/flags/s/ARG.gif" alt="Argentina">  ARG</td>
											<td>Premier Division</td>
											<td>768K</td>
											<td>Professional</td>
											<td>50,000</td>
											<td><span class="label" style="background:#60C0F8"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1903</td>
											<td>27.1</td>
										</tr>
										<tr>
											<td id="94">River</td>
											<td><img src="modules/fmsdb/img/flags/s/ARG.gif" alt="Argentina">  ARG</td>
											<td>Premier Division</td>
											<td>371K</td>
											<td>Professional</td>
											<td>65,645</td>
											<td><span class="label" style="background:#C81018"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1901</td>
											<td>26.2</td>
										</tr>
										<tr>
											<td id="95">Rosario Central</td>
											<td><img src="modules/fmsdb/img/flags/s/ARG.gif" alt="Argentina">  ARG</td>
											<td>Premier Division</td>
											<td>192K</td>
											<td>Professional</td>
											<td>41,654</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
											<td>1889</td>
											<td>28.2</td>
										</tr>
										<tr>
											<td id="96">San Lorenzo</td>
											<td><img src="modules/fmsdb/img/flags/s/ARG.gif" alt="Argentina">  ARG</td>
											<td>Premier Division</td>
											<td>7K</td>
											<td>Professional</td>
											<td>43,494</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
											<td>1908</td>
											<td>28.5</td>
										</tr>
										<tr>
											<td id="108546">San Martin (SJ)</td>
											<td><img src="modules/fmsdb/img/flags/s/ARG.gif" alt="Argentina">  ARG</td>
											<td>Premier Division</td>
											<td>427K</td>
											<td>Professional</td>
											<td>19,000</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#008030"></span></td>
											<td>1907</td>
											<td>27.6</td>
										</tr>
										<tr>
											<td id="102466">San Martin (Tucuman)</td>
											<td><img src="modules/fmsdb/img/flags/s/ARG.gif" alt="Argentina">  ARG</td>
											<td>Second Division</td>
											<td>77K</td>
											<td>Professional</td>
											<td>26,500</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#E00000"></span></td>
											<td>1909</td>
											<td>27.7</td>
										</tr>
										<tr>
											<td id="14002964">Santamarina</td>
											<td><img src="modules/fmsdb/img/flags/s/ARG.gif" alt="Argentina">  ARG</td>
											<td>Second Division</td>
											<td>19K</td>
											<td>Professional</td>
											<td>8,000</td>
											<td><span class="label" style="background:#F8F000"></span> <span class="label" style="background:#000000"></span></td>
											<td>1913</td>
											<td>25.5</td>
										</tr>
										<tr>
											<td id="3101516">Sarmiento (Junin)</td>
											<td><img src="modules/fmsdb/img/flags/s/ARG.gif" alt="Argentina">  ARG</td>
											<td>Premier Division</td>
											<td>36K</td>
											<td>Professional</td>
											<td>22,000</td>
											<td><span class="label" style="background:#00A030"></span> <span class="label" style="background:#00A030"></span></td>
											<td>1911</td>
											<td>26.1</td>
										</tr>
										<tr>
											<td id="102489">Talleres Cba.</td>
											<td><img src="modules/fmsdb/img/flags/s/ARG.gif" alt="Argentina">  ARG</td>
											<td>Premier Division</td>
											<td>0</td>
											<td>Professional</td>
											<td>46,083</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#00A030"></span></td>
											<td>1913</td>
											<td>27.0</td>
										</tr>
										<tr>
											<td id="3100019">Temperley</td>
											<td><img src="modules/fmsdb/img/flags/s/ARG.gif" alt="Argentina">  ARG</td>
											<td>Premier Division</td>
											<td>431K</td>
											<td>Professional</td>
											<td>19,000</td>
											<td><span class="label" style="background:#082848"></span> <span class="label" style="background:#60C0F8"></span></td>
											<td>1912</td>
											<td>26.9</td>
										</tr>
										<tr>
											<td id="3100018">Tigre</td>
											<td><img src="modules/fmsdb/img/flags/s/ARG.gif" alt="Argentina">  ARG</td>
											<td>Premier Division</td>
											<td>0</td>
											<td>Professional</td>
											<td>26,282</td>
											<td><span class="label" style="background:#E00000"></span> <span class="label" style="background:#0030A0"></span></td>
											<td>1902</td>
											<td>27.5</td>
										</tr>
										<tr>
											<td id="102467">Union (SF)</td>
											<td><img src="modules/fmsdb/img/flags/s/ARG.gif" alt="Argentina">  ARG</td>
											<td>Premier Division</td>
											<td>669K</td>
											<td>Professional</td>
											<td>22,300</td>
											<td><span class="label" style="background:#E00000"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1907</td>
											<td>25.4</td>
										</tr>
										<tr>
											<td id="98">Velez</td>
											<td><img src="modules/fmsdb/img/flags/s/ARG.gif" alt="Argentina">  ARG</td>
											<td>Premier Division</td>
											<td>0</td>
											<td>Professional</td>
											<td>49,540</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
											<td>1910</td>
											<td>25.8</td>
										</tr>
										<tr>
											<td id="952724">Villa Dalmine</td>
											<td><img src="modules/fmsdb/img/flags/s/ARG.gif" alt="Argentina">  ARG</td>
											<td>Second Division</td>
											<td>11K</td>
											<td>Professional</td>
											<td>8,000</td>
											<td><span class="label" style="background:#584898"></span> <span class="label" style="background:#8070C8"></span></td>
											<td>1957</td>
											<td>28.3</td>
										</tr>
										<tr>
											<td id="8457492">Adelaide United</td>
											<td><img src="modules/fmsdb/img/flags/s/AUS.gif" alt="Australia">  AUS</td>
											<td>Hyundai A-League</td>
											<td>126K</td>
											<td>Professional</td>
											<td>16,500</td>
											<td><span class="label" style="background:#303030"></span> <span class="label" style="background:#C80030"></span></td>
											<td>2003</td>
											<td>24.8</td>
										</tr>
										<tr>
											<td id="130220">Brisbane Roar</td>
											<td><img src="modules/fmsdb/img/flags/s/AUS.gif" alt="Australia">  AUS</td>
											<td>Hyundai A-League</td>
											<td>72K</td>
											<td>Professional</td>
											<td>52,500</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F87000"></span></td>
											<td>2005</td>
											<td>25.3</td>
										</tr>
										<tr>
											<td id="1300491">Central Coast Mariners</td>
											<td><img src="modules/fmsdb/img/flags/s/AUS.gif" alt="Australia">  AUS</td>
											<td>Hyundai A-League</td>
											<td>113K</td>
											<td>Professional</td>
											<td>20,059</td>
											<td><span class="label" style="background:#384058"></span> <span class="label" style="background:#F8D000"></span></td>
											<td>2004</td>
											<td>23.8</td>
										</tr>
										<tr>
											<td id="15055151">FFA COE</td>
											<td><img src="modules/fmsdb/img/flags/s/AUS.gif" alt="Australia">  AUS</td>
											<td>100000363</td>
											<td>0</td>
											<td>Amateur</td>
											<td>1,000</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
											<td>1981</td>
											<td>17.0</td>
										</tr>
										<tr>
											<td id="15051934">Melbourne City</td>
											<td><img src="modules/fmsdb/img/flags/s/AUS.gif" alt="Australia">  AUS</td>
											<td>Hyundai A-League</td>
											<td>195K</td>
											<td>Professional</td>
											<td>30,050</td>
											<td><span class="label" style="background:#98D0F0"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>2009</td>
											<td>25.8</td>
										</tr>
										<tr>
											<td id="1300489">Melbourne Victory</td>
											<td><img src="modules/fmsdb/img/flags/s/AUS.gif" alt="Australia">  AUS</td>
											<td>Hyundai A-League</td>
											<td>145K</td>
											<td>Professional</td>
											<td>30,050</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#001040"></span></td>
											<td>2004</td>
											<td>23.9</td>
										</tr>
										<tr>
											<td id="426430">Newcastle Jets</td>
											<td><img src="modules/fmsdb/img/flags/s/AUS.gif" alt="Australia">  AUS</td>
											<td>Hyundai A-League</td>
											<td>75K</td>
											<td>Professional</td>
											<td>33,000</td>
											<td><span class="label" style="background:#D0A838"></span> <span class="label" style="background:#2850A0"></span></td>
											<td>2000</td>
											<td>23.9</td>
										</tr>
										<tr>
											<td id="123001">Perth Glory</td>
											<td><img src="modules/fmsdb/img/flags/s/AUS.gif" alt="Australia">  AUS</td>
											<td>Hyundai A-League</td>
											<td>91K</td>
											<td>Professional</td>
											<td>20,500</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#500080"></span></td>
											<td>1996</td>
											<td>25.0</td>
										</tr>
										<tr>
											<td id="1300490">Sydney FC</td>
											<td><img src="modules/fmsdb/img/flags/s/AUS.gif" alt="Australia">  AUS</td>
											<td>Hyundai A-League</td>
											<td>162K</td>
											<td>Professional</td>
											<td>45,500</td>
											<td><span class="label" style="background:#003068"></span> <span class="label" style="background:#68C0E8"></span></td>
											<td>2004</td>
											<td>26.1</td>
										</tr>
										<tr>
											<td id="15004168">Wellington Phoenix</td>
											<td><img src="modules/fmsdb/img/flags/s/AUS.gif" alt="Australia">  AUS</td>
											<td>Hyundai A-League</td>
											<td>113K</td>
											<td>Professional</td>
											<td>34,500</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F8F000"></span></td>
											<td>2007</td>
											<td>24.5</td>
										</tr>
										<tr>
											<td id="15035999">Western Sydney Wanderers</td>
											<td><img src="modules/fmsdb/img/flags/s/AUS.gif" alt="Australia">  AUS</td>
											<td>Hyundai A-League</td>
											<td>147K</td>
											<td>Professional</td>
											<td>24,000</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#E00000"></span></td>
											<td>2012</td>
											<td>25.8</td>
										</tr>
										<tr>
											<td id="16009439">AKA Burgenland</td>
											<td><img src="modules/fmsdb/img/flags/s/AUT.gif" alt="Austria">  AUT</td>
											<td>100000078</td>
											<td>0</td>
											<td>Amateur</td>
											<td>2,000</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#00C030"></span></td>
											<td>0</td>
											<td>16.0</td>
										</tr>
										<tr>
											<td id="16009435">AKA St. Polten NO</td>
											<td><img src="modules/fmsdb/img/flags/s/AUT.gif" alt="Austria">  AUT</td>
											<td>100000078</td>
											<td>0</td>
											<td>Amateur</td>
											<td>2,000</td>
											<td><span class="label" style="background:#1030C0"></span> <span class="label" style="background:#1030C0"></span></td>
											<td>2000</td>
											<td>16.1</td>
										</tr>
										<tr>
											<td id="16009432">AKA Tirol</td>
											<td><img src="modules/fmsdb/img/flags/s/AUT.gif" alt="Austria">  AUT</td>
											<td>100000078</td>
											<td>0</td>
											<td>Amateur</td>
											<td>1,000</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#E00000"></span></td>
											<td>0</td>
											<td>16.3</td>
										</tr>
										<tr>
											<td id="16009433">AKA Vorarlberg</td>
											<td><img src="modules/fmsdb/img/flags/s/AUT.gif" alt="Austria">  AUT</td>
											<td>100000078</td>
											<td>0</td>
											<td>Amateur</td>
											<td>2,800</td>
											<td><span class="label" style="background:#002080"></span> <span class="label" style="background:#E00000"></span></td>
											<td>2003</td>
											<td>16.1</td>
										</tr>
										<tr>
											<td id="16009431">FAL Linz</td>
											<td><img src="modules/fmsdb/img/flags/s/AUT.gif" alt="Austria">  AUT</td>
											<td>100000078</td>
											<td>0</td>
											<td>Amateur</td>
											<td>3,000</td>
											<td><span class="label" style="background:#205090"></span> <span class="label" style="background:#000000"></span></td>
											<td>0</td>
											<td>16.3</td>
										</tr>
										<tr>
											<td id="5605072">FC Admira Wacker Modling</td>
											<td><img src="modules/fmsdb/img/flags/s/AUT.gif" alt="Austria">  AUT</td>
											<td>Premier Division</td>
											<td>0</td>
											<td>Professional</td>
											<td>12,000</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#E00000"></span></td>
											<td>2008</td>
											<td>23.0</td>
										</tr>
										<tr>
											<td id="137962">FC BW Linz</td>
											<td><img src="modules/fmsdb/img/flags/s/AUT.gif" alt="Austria">  AUT</td>
											<td>First Division</td>
											<td>30K</td>
											<td>Semi-Professional</td>
											<td>2,000</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#0030A0"></span></td>
											<td>1997</td>
											<td>24.1</td>
										</tr>
										<tr>
											<td id="16123919">FC Liefering</td>
											<td><img src="modules/fmsdb/img/flags/s/AUT.gif" alt="Austria">  AUT</td>
											<td>First Division</td>
											<td>0</td>
											<td>Professional</td>
											<td>4,330</td>
											<td><span class="label" style="background:#E00000"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>2012</td>
											<td>18.2</td>
										</tr>
										<tr>
											<td id="158">FC Red Bull Salzburg</td>
											<td><img src="modules/fmsdb/img/flags/s/AUT.gif" alt="Austria">  AUT</td>
											<td>Premier Division</td>
											<td>4M</td>
											<td>Professional</td>
											<td>31,895</td>
											<td><span class="label" style="background:#B00000"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>2005</td>
											<td>22.6</td>
										</tr>
										<tr>
											<td id="5603779">FC Wacker Innsbruck</td>
											<td><img src="modules/fmsdb/img/flags/s/AUT.gif" alt="Austria">  AUT</td>
											<td>First Division</td>
											<td>0</td>
											<td>Professional</td>
											<td>17,400</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#006030"></span></td>
											<td>2002</td>
											<td>25.4</td>
										</tr>
										<tr>
											<td id="152">FK Austria Wien</td>
											<td><img src="modules/fmsdb/img/flags/s/AUT.gif" alt="Austria">  AUT</td>
											<td>Premier Division</td>
											<td>3M</td>
											<td>Professional</td>
											<td>17,500</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#500080"></span></td>
											<td>1911</td>
											<td>24.7</td>
										</tr>
										<tr>
											<td id="137947">Floridsdorfer AC</td>
											<td><img src="modules/fmsdb/img/flags/s/AUT.gif" alt="Austria">  AUT</td>
											<td>First Division</td>
											<td>0</td>
											<td>Professional</td>
											<td>3,660</td>
											<td><span class="label" style="background:#0050D0"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1904</td>
											<td>22.2</td>
										</tr>
										<tr>
											<td id="137958">Kapfenberger SV 1919</td>
											<td><img src="modules/fmsdb/img/flags/s/AUT.gif" alt="Austria">  AUT</td>
											<td>First Division</td>
											<td>0</td>
											<td>Professional</td>
											<td>10,000</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#E00000"></span></td>
											<td>1919</td>
											<td>22.7</td>
										</tr>
										<tr>
											<td id="154">LASK Linz</td>
											<td><img src="modules/fmsdb/img/flags/s/AUT.gif" alt="Austria">  AUT</td>
											<td>First Division</td>
											<td>0</td>
											<td>Professional</td>
											<td>7,152</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1908</td>
											<td>21.3</td>
										</tr>
										<tr>
											<td id="106363">SC Austria Lustenau</td>
											<td><img src="modules/fmsdb/img/flags/s/AUT.gif" alt="Austria">  AUT</td>
											<td>First Division</td>
											<td>0</td>
											<td>Professional</td>
											<td>8,800</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1914</td>
											<td>23.6</td>
										</tr>
										<tr>
											<td id="16011091">SC Wiener Neustadt</td>
											<td><img src="modules/fmsdb/img/flags/s/AUT.gif" alt="Austria">  AUT</td>
											<td>First Division</td>
											<td>0</td>
											<td>Professional</td>
											<td>7,700</td>
											<td><span class="label" style="background:#0050D0"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>2008</td>
											<td>22.2</td>
										</tr>
										<tr>
											<td id="137973">SCR Altach</td>
											<td><img src="modules/fmsdb/img/flags/s/AUT.gif" alt="Austria">  AUT</td>
											<td>Premier Division</td>
											<td>0</td>
											<td>Professional</td>
											<td>8,500</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1929</td>
											<td>25.7</td>
										</tr>
										<tr>
											<td id="155">SK Rapid Wien</td>
											<td><img src="modules/fmsdb/img/flags/s/AUT.gif" alt="Austria">  AUT</td>
											<td>Premier Division</td>
											<td>3M</td>
											<td>Professional</td>
											<td>28,385</td>
											<td><span class="label" style="background:#006030"></span> <span class="label" style="background:#006850"></span></td>
											<td>1899</td>
											<td>24.4</td>
										</tr>
										<tr>
											<td id="156">SK Sturm Graz</td>
											<td><img src="modules/fmsdb/img/flags/s/AUT.gif" alt="Austria">  AUT</td>
											<td>Premier Division</td>
											<td>0</td>
											<td>Professional</td>
											<td>16,364</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#000000"></span></td>
											<td>1909</td>
											<td>25.4</td>
										</tr>
										<tr>
											<td id="160">SKN St. Polten</td>
											<td><img src="modules/fmsdb/img/flags/s/AUT.gif" alt="Austria">  AUT</td>
											<td>Premier Division</td>
											<td>0</td>
											<td>Professional</td>
											<td>8,000</td>
											<td><span class="label" style="background:#002060"></span> <span class="label" style="background:#002060"></span></td>
											<td>2000</td>
											<td>26.7</td>
										</tr>
										<tr>
											<td id="5609646">SV Horn</td>
											<td><img src="modules/fmsdb/img/flags/s/AUT.gif" alt="Austria">  AUT</td>
											<td>First Division</td>
											<td>30K</td>
											<td>Professional</td>
											<td>3,600</td>
											<td><span class="label" style="background:#0030A0"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1922</td>
											<td>23.6</td>
										</tr>
										<tr>
											<td id="652653">SV Mattersburg</td>
											<td><img src="modules/fmsdb/img/flags/s/AUT.gif" alt="Austria">  AUT</td>
											<td>Premier Division</td>
											<td>0</td>
											<td>Professional</td>
											<td>15,700</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#006030"></span></td>
											<td>1922</td>
											<td>25.6</td>
										</tr>
										<tr>
											<td id="159">SV Ried</td>
											<td><img src="modules/fmsdb/img/flags/s/AUT.gif" alt="Austria">  AUT</td>
											<td>Premier Division</td>
											<td>0</td>
											<td>Professional</td>
											<td>7,680</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#188860"></span></td>
											<td>1912</td>
											<td>24.0</td>
										</tr>
										<tr>
											<td id="16034828">Wolfsberger AC</td>
											<td><img src="modules/fmsdb/img/flags/s/AUT.gif" alt="Austria">  AUT</td>
											<td>Premier Division</td>
											<td>0</td>
											<td>Professional</td>
											<td>8,100</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#000000"></span></td>
											<td>1931</td>
											<td>27.0</td>
										</tr>
										<tr>
											<td id="136550">WSG Wattens</td>
											<td><img src="modules/fmsdb/img/flags/s/AUT.gif" alt="Austria">  AUT</td>
											<td>First Division</td>
											<td>3K</td>
											<td>Professional</td>
											<td>5,500</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#287850"></span></td>
											<td>1930</td>
											<td>24.3</td>
										</tr>
										<tr>
											<td id="168">AA Gent</td>
											<td><img src="modules/fmsdb/img/flags/s/BEL.gif" alt="Belgium">  BEL</td>
											<td>Pro League</td>
											<td>4M</td>
											<td>Professional</td>
											<td>20,000</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#4890B8"></span></td>
											<td>1900</td>
											<td>25.4</td>
										</tr>
										<tr>
											<td id="256">Anderlecht</td>
											<td><img src="modules/fmsdb/img/flags/s/BEL.gif" alt="Belgium">  BEL</td>
											<td>Pro League</td>
											<td>4M</td>
											<td>Professional</td>
											<td>21,500</td>
											<td><span class="label" style="background:#A8A8F8"></span> <span class="label" style="background:#4040A0"></span></td>
											<td>1908</td>
											<td>24.3</td>
										</tr>
										<tr>
											<td id="262">Antwerp</td>
											<td><img src="modules/fmsdb/img/flags/s/BEL.gif" alt="Belgium">  BEL</td>
											<td>Pro League B</td>
											<td>0</td>
											<td>Professional</td>
											<td>13,373</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#E00000"></span></td>
											<td>1880</td>
											<td>26.3</td>
										</tr>
										<tr>
											<td id="298">Beerschot-Wilrijk</td>
											<td><img src="modules/fmsdb/img/flags/s/BEL.gif" alt="Belgium">  BEL</td>
											<td>First Division</td>
											<td>0</td>
											<td>Semi-Professional</td>
											<td>12,296</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#503098"></span></td>
											<td>1921</td>
											<td>26.9</td>
										</tr>
										<tr>
											<td id="184">Cercle Brugge</td>
											<td><img src="modules/fmsdb/img/flags/s/BEL.gif" alt="Belgium">  BEL</td>
											<td>Pro League B</td>
											<td>0</td>
											<td>Professional</td>
											<td>29,042</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#006030"></span></td>
											<td>1899</td>
											<td>23.7</td>
										</tr>
										<tr>
											<td id="263">Charleroi</td>
											<td><img src="modules/fmsdb/img/flags/s/BEL.gif" alt="Belgium">  BEL</td>
											<td>Pro League</td>
											<td>0</td>
											<td>Professional</td>
											<td>17,824</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#000000"></span></td>
											<td>1904</td>
											<td>26.0</td>
										</tr>
										<tr>
											<td id="186">Club Brugge</td>
											<td><img src="modules/fmsdb/img/flags/s/BEL.gif" alt="Belgium">  BEL</td>
											<td>Pro League</td>
											<td>3M</td>
											<td>Professional</td>
											<td>29,042</td>
											<td><span class="label" style="background:#0050D0"></span> <span class="label" style="background:#0050D0"></span></td>
											<td>1891</td>
											<td>25.2</td>
										</tr>
										<tr>
											<td id="539841">Coxyde</td>
											<td><img src="modules/fmsdb/img/flags/s/BEL.gif" alt="Belgium">  BEL</td>
											<td>First Division</td>
											<td>0</td>
											<td>Semi-Professional</td>
											<td>2,500</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#0078F8"></span></td>
											<td>0</td>
											<td>21.9</td>
										</tr>
										<tr>
											<td id="228">Deinze</td>
											<td><img src="modules/fmsdb/img/flags/s/BEL.gif" alt="Belgium">  BEL</td>
											<td>First Division</td>
											<td>30K</td>
											<td>Semi-Professional</td>
											<td>7,515</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F87000"></span></td>
											<td>1926</td>
											<td>24.0</td>
										</tr>
										<tr>
											<td id="188">Dessel</td>
											<td><img src="modules/fmsdb/img/flags/s/BEL.gif" alt="Belgium">  BEL</td>
											<td>First Division</td>
											<td>0</td>
											<td>Semi-Professional</td>
											<td>4,284</td>
											<td><span class="label" style="background:#008030"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1926</td>
											<td>23.5</td>
										</tr>
										<tr>
											<td id="194">Eupen</td>
											<td><img src="modules/fmsdb/img/flags/s/BEL.gif" alt="Belgium">  BEL</td>
											<td>Pro League</td>
											<td>86K</td>
											<td>Professional</td>
											<td>8,363</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#000000"></span></td>
											<td>1945</td>
											<td>23.6</td>
										</tr>
										<tr>
											<td id="199">FCV Dender</td>
											<td><img src="modules/fmsdb/img/flags/s/BEL.gif" alt="Belgium">  BEL</td>
											<td>First Division</td>
											<td>0</td>
											<td>Semi-Professional</td>
											<td>8,157</td>
											<td><span class="label" style="background:#003068"></span> <span class="label" style="background:#0050D0"></span></td>
											<td>1943</td>
											<td>23.8</td>
										</tr>
										<tr>
											<td id="3200585">Geel</td>
											<td><img src="modules/fmsdb/img/flags/s/BEL.gif" alt="Belgium">  BEL</td>
											<td>First Division</td>
											<td>4K</td>
											<td>Semi-Professional</td>
											<td>10,022</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#0050D0"></span></td>
											<td>1969</td>
											<td>21.7</td>
										</tr>
										<tr>
											<td id="234">Hasselt</td>
											<td><img src="modules/fmsdb/img/flags/s/BEL.gif" alt="Belgium">  BEL</td>
											<td>First Division</td>
											<td>4K</td>
											<td>Semi-Professional</td>
											<td>8,800</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#0030A0"></span></td>
											<td>1941</td>
											<td>26.4</td>
										</tr>
										<tr>
											<td id="202">Heist</td>
											<td><img src="modules/fmsdb/img/flags/s/BEL.gif" alt="Belgium">  BEL</td>
											<td>First Division</td>
											<td>0</td>
											<td>Semi-Professional</td>
											<td>3,549</td>
											<td><span class="label" style="background:#0030A0"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1941</td>
											<td>25.2</td>
										</tr>
										<tr>
											<td id="258">KRC Genk</td>
											<td><img src="modules/fmsdb/img/flags/s/BEL.gif" alt="Belgium">  BEL</td>
											<td>Pro League</td>
											<td>2M</td>
											<td>Professional</td>
											<td>24,604</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#0050D0"></span></td>
											<td>1923</td>
											<td>22.0</td>
										</tr>
										<tr>
											<td id="231">KV Kortrijk</td>
											<td><img src="modules/fmsdb/img/flags/s/BEL.gif" alt="Belgium">  BEL</td>
											<td>Pro League</td>
											<td>0</td>
											<td>Professional</td>
											<td>9,399</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#E00000"></span></td>
											<td>1901</td>
											<td>26.0</td>
										</tr>
										<tr>
											<td id="232">KV Mechelen</td>
											<td><img src="modules/fmsdb/img/flags/s/BEL.gif" alt="Belgium">  BEL</td>
											<td>Pro League</td>
											<td>258K</td>
											<td>Professional</td>
											<td>17,500</td>
											<td><span class="label" style="background:#F8F000"></span> <span class="label" style="background:#E00000"></span></td>
											<td>1904</td>
											<td>24.7</td>
										</tr>
										<tr>
											<td id="268">Lierse</td>
											<td><img src="modules/fmsdb/img/flags/s/BEL.gif" alt="Belgium">  BEL</td>
											<td>Pro League B</td>
											<td>0</td>
											<td>Professional</td>
											<td>14,538</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F8F000"></span></td>
											<td>1906</td>
											<td>23.5</td>
										</tr>
										<tr>
											<td id="265">Lokeren</td>
											<td><img src="modules/fmsdb/img/flags/s/BEL.gif" alt="Belgium">  BEL</td>
											<td>Pro League</td>
											<td>775K</td>
											<td>Professional</td>
											<td>12,461</td>
											<td><span class="label" style="background:#F8D000"></span> <span class="label" style="background:#000000"></span></td>
											<td>1915</td>
											<td>26.8</td>
										</tr>
										<tr>
											<td id="8157175">Lommel United</td>
											<td><img src="modules/fmsdb/img/flags/s/BEL.gif" alt="Belgium">  BEL</td>
											<td>Pro League B</td>
											<td>0</td>
											<td>Professional</td>
											<td>12,500</td>
											<td><span class="label" style="background:#008030"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1937</td>
											<td>22.7</td>
										</tr>
										<tr>
											<td id="8154758">Mouscron</td>
											<td><img src="modules/fmsdb/img/flags/s/BEL.gif" alt="Belgium">  BEL</td>
											<td>Pro League</td>
											<td>0</td>
											<td>Professional</td>
											<td>10,571</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#B00000"></span></td>
											<td>1922</td>
											<td>23.4</td>
										</tr>
										<tr>
											<td id="280">OHL</td>
											<td><img src="modules/fmsdb/img/flags/s/BEL.gif" alt="Belgium">  BEL</td>
											<td>Pro League B</td>
											<td>0</td>
											<td>Professional</td>
											<td>10,019</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1958</td>
											<td>24.3</td>
										</tr>
										<tr>
											<td id="233">Oostende</td>
											<td><img src="modules/fmsdb/img/flags/s/BEL.gif" alt="Belgium">  BEL</td>
											<td>Pro League</td>
											<td>65K</td>
											<td>Professional</td>
											<td>8,432</td>
											<td><span class="label" style="background:#008030"></span> <span class="label" style="background:#E00000"></span></td>
											<td>1905</td>
											<td>26.1</td>
										</tr>
										<tr>
											<td id="18008817">Oosterzonen</td>
											<td><img src="modules/fmsdb/img/flags/s/BEL.gif" alt="Belgium">  BEL</td>
											<td>First Division</td>
											<td>0</td>
											<td>Semi-Professional</td>
											<td>1,000</td>
											<td><span class="label" style="background:#F8F838"></span> <span class="label" style="background:#F8F000"></span></td>
											<td>0</td>
											<td>22.8</td>
										</tr>
										<tr>
											<td id="6600093">Oudenaarde</td>
											<td><img src="modules/fmsdb/img/flags/s/BEL.gif" alt="Belgium">  BEL</td>
											<td>First Division</td>
											<td>0</td>
											<td>Semi-Professional</td>
											<td>3,500</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F8F000"></span></td>
											<td>1911</td>
											<td>23.4</td>
										</tr>
										<tr>
											<td id="248">Patro Eisden</td>
											<td><img src="modules/fmsdb/img/flags/s/BEL.gif" alt="Belgium">  BEL</td>
											<td>First Division</td>
											<td>4K</td>
											<td>Semi-Professional</td>
											<td>4,900</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#503098"></span></td>
											<td>1942</td>
											<td>21.8</td>
										</tr>
										<tr>
											<td id="6600032">Roeselare</td>
											<td><img src="modules/fmsdb/img/flags/s/BEL.gif" alt="Belgium">  BEL</td>
											<td>Pro League B</td>
											<td>0</td>
											<td>Professional</td>
											<td>8,950</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1921</td>
											<td>25.2</td>
										</tr>
										<tr>
											<td id="216">Seraing Utd</td>
											<td><img src="modules/fmsdb/img/flags/s/BEL.gif" alt="Belgium">  BEL</td>
											<td>First Division</td>
											<td>0</td>
											<td>Semi-Professional</td>
											<td>1,000</td>
											<td><span class="label" style="background:#E00000"></span> <span class="label" style="background:#000000"></span></td>
											<td>1922</td>
											<td>22.4</td>
										</tr>
										<tr>
											<td id="3200568">Sprimont</td>
											<td><img src="modules/fmsdb/img/flags/s/BEL.gif" alt="Belgium">  BEL</td>
											<td>First Division</td>
											<td>14K</td>
											<td>Semi-Professional</td>
											<td>2,500</td>
											<td><span class="label" style="background:#0050D0"></span> <span class="label" style="background:#F8F000"></span></td>
											<td>1921</td>
											<td>24.5</td>
										</tr>
										<tr>
											<td id="250">Standard</td>
											<td><img src="modules/fmsdb/img/flags/s/BEL.gif" alt="Belgium">  BEL</td>
											<td>Pro League</td>
											<td>2M</td>
											<td>Professional</td>
											<td>26,659</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#E00000"></span></td>
											<td>1898</td>
											<td>24.5</td>
										</tr>
										<tr>
											<td id="278">STVV</td>
											<td><img src="modules/fmsdb/img/flags/s/BEL.gif" alt="Belgium">  BEL</td>
											<td>Pro League</td>
											<td>0</td>
											<td>Professional</td>
											<td>14,600</td>
											<td><span class="label" style="background:#0050D0"></span> <span class="label" style="background:#E8F800"></span></td>
											<td>1924</td>
											<td>24.1</td>
										</tr>
										<tr>
											<td id="172">Tubize</td>
											<td><img src="modules/fmsdb/img/flags/s/BEL.gif" alt="Belgium">  BEL</td>
											<td>Pro League B</td>
											<td>0</td>
											<td>Professional</td>
											<td>8,100</td>
											<td><span class="label" style="background:#F8F000"></span> <span class="label" style="background:#C80000"></span></td>
											<td>1953</td>
											<td>24.8</td>
										</tr>
										<tr>
											<td id="288">Union SG</td>
											<td><img src="modules/fmsdb/img/flags/s/BEL.gif" alt="Belgium">  BEL</td>
											<td>Pro League B</td>
											<td>19K</td>
											<td>Professional</td>
											<td>50,000</td>
											<td><span class="label" style="background:#0050D0"></span> <span class="label" style="background:#F8F000"></span></td>
											<td>1897</td>
											<td>25.4</td>
										</tr>
										<tr>
											<td id="292">Virton</td>
											<td><img src="modules/fmsdb/img/flags/s/BEL.gif" alt="Belgium">  BEL</td>
											<td>First Division</td>
											<td>0</td>
											<td>Semi-Professional</td>
											<td>4,087</td>
											<td><span class="label" style="background:#00C030"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1922</td>
											<td>23.0</td>
										</tr>
										<tr>
											<td id="215">VW Hamme</td>
											<td><img src="modules/fmsdb/img/flags/s/BEL.gif" alt="Belgium">  BEL</td>
											<td>First Division</td>
											<td>0</td>
											<td>Semi-Professional</td>
											<td>6,000</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#0050D0"></span></td>
											<td>1908</td>
											<td>23.5</td>
										</tr>
										<tr>
											<td id="539089">Waasland-Beveren</td>
											<td><img src="modules/fmsdb/img/flags/s/BEL.gif" alt="Belgium">  BEL</td>
											<td>Pro League</td>
											<td>0</td>
											<td>Professional</td>
											<td>13,290</td>
											<td><span class="label" style="background:#0050D0"></span> <span class="label" style="background:#F8F000"></span></td>
											<td>1936</td>
											<td>22.9</td>
										</tr>
										<tr>
											<td id="289">Westerlo</td>
											<td><img src="modules/fmsdb/img/flags/s/BEL.gif" alt="Belgium">  BEL</td>
											<td>Pro League</td>
											<td>0</td>
											<td>Professional</td>
											<td>7,783</td>
											<td><span class="label" style="background:#0050D0"></span> <span class="label" style="background:#E8F800"></span></td>
											<td>1933</td>
											<td>25.7</td>
										</tr>
										<tr>
											<td id="8150905">WS Bruxelles</td>
											<td><img src="modules/fmsdb/img/flags/s/BEL.gif" alt="Belgium">  BEL</td>
											<td>First Division</td>
											<td>0</td>
											<td>Professional</td>
											<td>12,434</td>
											<td><span class="label" style="background:#F08000"></span> <span class="label" style="background:#F08000"></span></td>
											<td>1947</td>
											<td>22.2</td>
										</tr>
										<tr>
											<td id="299">Zulte Waregem</td>
											<td><img src="modules/fmsdb/img/flags/s/BEL.gif" alt="Belgium">  BEL</td>
											<td>Pro League</td>
											<td>0</td>
											<td>Professional</td>
											<td>11,000</td>
											<td><span class="label" style="background:#006030"></span> <span class="label" style="background:#A00000"></span></td>
											<td>1950</td>
											<td>25.0</td>
										</tr>
										<tr>
											<td id="485682">Baranovichi</td>
											<td><img src="modules/fmsdb/img/flags/s/BLR.gif" alt="Belarus">  BLR</td>
											<td>First League</td>
											<td>0</td>
											<td>Professional</td>
											<td>3,749</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#0030A0"></span></td>
											<td>1945</td>
											<td>26.7</td>
										</tr>
										<tr>
											<td id="130875">BATE</td>
											<td><img src="modules/fmsdb/img/flags/s/BLR.gif" alt="Belarus">  BLR</td>
											<td>Highest League</td>
											<td>922K</td>
											<td>Professional</td>
											<td>13,400</td>
											<td><span class="label" style="background:#F8F000"></span> <span class="label" style="background:#0078F8"></span></td>
											<td>1996</td>
											<td>26.3</td>
										</tr>
										<tr>
											<td id="1300111">Belshina</td>
											<td><img src="modules/fmsdb/img/flags/s/BLR.gif" alt="Belarus">  BLR</td>
											<td>Highest League</td>
											<td>0</td>
											<td>Professional</td>
											<td>3,709</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#E00000"></span></td>
											<td>1977</td>
											<td>24.7</td>
										</tr>
										<tr>
											<td id="1300113">Dinamo Brest</td>
											<td><img src="modules/fmsdb/img/flags/s/BLR.gif" alt="Belarus">  BLR</td>
											<td>Highest League</td>
											<td>23K</td>
											<td>Professional</td>
											<td>10,169</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#0050D0"></span></td>
											<td>1960</td>
											<td>24.2</td>
										</tr>
										<tr>
											<td id="303">Dinamo Minsk</td>
											<td><img src="modules/fmsdb/img/flags/s/BLR.gif" alt="Belarus">  BLR</td>
											<td>Highest League</td>
											<td>46K</td>
											<td>Professional</td>
											<td>17,600</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#0050D0"></span></td>
											<td>1927</td>
											<td>25.8</td>
										</tr>
										<tr>
											<td id="1300116">Dnepr Mogilev</td>
											<td><img src="modules/fmsdb/img/flags/s/BLR.gif" alt="Belarus">  BLR</td>
											<td>First League</td>
											<td>276K</td>
											<td>Professional</td>
											<td>7,350</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#0050D0"></span></td>
											<td>1960</td>
											<td>25.4</td>
										</tr>
										<tr>
											<td id="5410568">Gomel</td>
											<td><img src="modules/fmsdb/img/flags/s/BLR.gif" alt="Belarus">  BLR</td>
											<td>First League</td>
											<td>15K</td>
											<td>Professional</td>
											<td>14,307</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1945</td>
											<td>24.9</td>
										</tr>
										<tr>
											<td id="17004081">Gorodeya</td>
											<td><img src="modules/fmsdb/img/flags/s/BLR.gif" alt="Belarus">  BLR</td>
											<td>Highest League</td>
											<td>8K</td>
											<td>Professional</td>
											<td>1,625</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#008030"></span></td>
											<td>2004</td>
											<td>27.9</td>
										</tr>
										<tr>
											<td id="485663">Granit</td>
											<td><img src="modules/fmsdb/img/flags/s/BLR.gif" alt="Belarus">  BLR</td>
											<td>Highest League</td>
											<td>0</td>
											<td>Professional</td>
											<td>3,090</td>
											<td><span class="label" style="background:#60C0F8"></span> <span class="label" style="background:#002060"></span></td>
											<td>1978</td>
											<td>22.9</td>
										</tr>
										<tr>
											<td id="7485067">Isloch</td>
											<td><img src="modules/fmsdb/img/flags/s/BLR.gif" alt="Belarus">  BLR</td>
											<td>Highest League</td>
											<td>12K</td>
											<td>Professional</td>
											<td>4,800</td>
											<td><span class="label" style="background:#707090"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>2007</td>
											<td>28.0</td>
										</tr>
										<tr>
											<td id="485669">Khimik Svetlogorsk</td>
											<td><img src="modules/fmsdb/img/flags/s/BLR.gif" alt="Belarus">  BLR</td>
											<td>First League</td>
											<td>0</td>
											<td>Professional</td>
											<td>1,500</td>
											<td><span class="label" style="background:#E00808"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1971</td>
											<td>26.8</td>
										</tr>
										<tr>
											<td id="17029580">Krumkachy</td>
											<td><img src="modules/fmsdb/img/flags/s/BLR.gif" alt="Belarus">  BLR</td>
											<td>Highest League</td>
											<td>9K</td>
											<td>Professional</td>
											<td>3,000</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#000000"></span></td>
											<td>2014</td>
											<td>25.0</td>
										</tr>
										<tr>
											<td id="130881">Lida</td>
											<td><img src="modules/fmsdb/img/flags/s/BLR.gif" alt="Belarus">  BLR</td>
											<td>First League</td>
											<td>0</td>
											<td>Professional</td>
											<td>3,000</td>
											<td><span class="label" style="background:#E00000"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1962</td>
											<td>24.9</td>
										</tr>
										<tr>
											<td id="17027934">Luch Minsk</td>
											<td><img src="modules/fmsdb/img/flags/s/BLR.gif" alt="Belarus">  BLR</td>
											<td>First League</td>
											<td>0</td>
											<td>Professional</td>
											<td>852</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#082040"></span></td>
											<td>2007</td>
											<td>22.7</td>
										</tr>
										<tr>
											<td id="17000059">Minsk</td>
											<td><img src="modules/fmsdb/img/flags/s/BLR.gif" alt="Belarus">  BLR</td>
											<td>Highest League</td>
											<td>31K</td>
											<td>Professional</td>
											<td>3,000</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#E00000"></span></td>
											<td>1954</td>
											<td>24.2</td>
										</tr>
										<tr>
											<td id="1300134">Naftan</td>
											<td><img src="modules/fmsdb/img/flags/s/BLR.gif" alt="Belarus">  BLR</td>
											<td>Highest League</td>
											<td>0</td>
											<td>Professional</td>
											<td>4,522</td>
											<td><span class="label" style="background:#F8F000"></span> <span class="label" style="background:#0050D0"></span></td>
											<td>1963</td>
											<td>25.9</td>
										</tr>
										<tr>
											<td id="307">Neman Grodno</td>
											<td><img src="modules/fmsdb/img/flags/s/BLR.gif" alt="Belarus">  BLR</td>
											<td>Highest League</td>
											<td>4K</td>
											<td>Professional</td>
											<td>8,800</td>
											<td><span class="label" style="background:#308058"></span> <span class="label" style="background:#F0C808"></span></td>
											<td>1964</td>
											<td>26.0</td>
										</tr>
										<tr>
											<td id="7483392">Orsha</td>
											<td><img src="modules/fmsdb/img/flags/s/BLR.gif" alt="Belarus">  BLR</td>
											<td>First League</td>
											<td>123K</td>
											<td>Professional</td>
											<td>2,652</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#0078F8"></span></td>
											<td>1951</td>
											<td>25.4</td>
										</tr>
										<tr>
											<td id="17030315">Oshmyany</td>
											<td><img src="modules/fmsdb/img/flags/s/BLR.gif" alt="Belarus">  BLR</td>
											<td>First League</td>
											<td>0</td>
											<td>Professional</td>
											<td>500</td>
											<td><span class="label" style="background:#002060"></span> <span class="label" style="background:#60C0F8"></span></td>
											<td>1989</td>
											<td>25.0</td>
										</tr>
										<tr>
											<td id="1300125">Shakhter Soligorsk</td>
											<td><img src="modules/fmsdb/img/flags/s/BLR.gif" alt="Belarus">  BLR</td>
											<td>Highest League</td>
											<td>19K</td>
											<td>Professional</td>
											<td>4,200</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F8F000"></span></td>
											<td>1963</td>
											<td>27.2</td>
										</tr>
										<tr>
											<td id="130879">Slavia Mozyr</td>
											<td><img src="modules/fmsdb/img/flags/s/BLR.gif" alt="Belarus">  BLR</td>
											<td>Highest League</td>
											<td>4K</td>
											<td>Professional</td>
											<td>5,253</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#E00000"></span></td>
											<td>1987</td>
											<td>26.1</td>
										</tr>
										<tr>
											<td id="17026902">Slonim</td>
											<td><img src="modules/fmsdb/img/flags/s/BLR.gif" alt="Belarus">  BLR</td>
											<td>First League</td>
											<td>0</td>
											<td>Professional</td>
											<td>2,220</td>
											<td><span class="label" style="background:#0050D0"></span> <span class="label" style="background:#F8F000"></span></td>
											<td>2012</td>
											<td>25.9</td>
										</tr>
										<tr>
											<td id="17004083">Slutsk</td>
											<td><img src="modules/fmsdb/img/flags/s/BLR.gif" alt="Belarus">  BLR</td>
											<td>Highest League</td>
											<td>8K</td>
											<td>Professional</td>
											<td>1,896</td>
											<td><span class="label" style="background:#0030A0"></span> <span class="label" style="background:#002060"></span></td>
											<td>1998</td>
											<td>26.5</td>
										</tr>
										<tr>
											<td id="17012001">Smolevichi</td>
											<td><img src="modules/fmsdb/img/flags/s/BLR.gif" alt="Belarus">  BLR</td>
											<td>First League</td>
											<td>0</td>
											<td>Professional</td>
											<td>1,600</td>
											<td><span class="label" style="background:#0078F8"></span> <span class="label" style="background:#F8F000"></span></td>
											<td>2009</td>
											<td>26.3</td>
										</tr>
										<tr>
											<td id="485674">Smorgon</td>
											<td><img src="modules/fmsdb/img/flags/s/BLR.gif" alt="Belarus">  BLR</td>
											<td>First League</td>
											<td>0</td>
											<td>Professional</td>
											<td>3,200</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#B00000"></span></td>
											<td>1978</td>
											<td>27.5</td>
										</tr>
										<tr>
											<td id="308">Torpedo Minsk</td>
											<td><img src="modules/fmsdb/img/flags/s/BLR.gif" alt="Belarus">  BLR</td>
											<td>First League</td>
											<td>23K</td>
											<td>Professional</td>
											<td>5,200</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1947</td>
											<td>23.8</td>
										</tr>
										<tr>
											<td id="485665">Torpedo Zhodino</td>
											<td><img src="modules/fmsdb/img/flags/s/BLR.gif" alt="Belarus">  BLR</td>
											<td>Highest League</td>
											<td>12K</td>
											<td>Professional</td>
											<td>6,522</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1961</td>
											<td>25.8</td>
										</tr>
										<tr>
											<td id="130877">Vitebsk</td>
											<td><img src="modules/fmsdb/img/flags/s/BLR.gif" alt="Belarus">  BLR</td>
											<td>Highest League</td>
											<td>23K</td>
											<td>Professional</td>
											<td>8,144</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#0050D0"></span></td>
											<td>1960</td>
											<td>26.3</td>
										</tr>
										<tr>
											<td id="17012003">Zheldor</td>
											<td><img src="modules/fmsdb/img/flags/s/BLR.gif" alt="Belarus">  BLR</td>
											<td>First League</td>
											<td>0</td>
											<td>Professional</td>
											<td>800</td>
											<td><span class="label" style="background:#0050D0"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>2008</td>
											<td>30.2</td>
										</tr>
										<tr>
											<td id="485662">Zvezda-BGU</td>
											<td><img src="modules/fmsdb/img/flags/s/BLR.gif" alt="Belarus">  BLR</td>
											<td>First League</td>
											<td>12K</td>
											<td>Professional</td>
											<td>1,600</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#082040"></span></td>
											<td>1995</td>
											<td>20.0</td>
										</tr>
										<tr>
											<td id="107205">ABF</td>
											<td><img src="modules/fmsdb/img/flags/s/BRA.gif" alt="Brazil">  BRA</td>
											<td>Third Division</td>
											<td>24K</td>
											<td>Professional</td>
											<td>18,000</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#D00818"></span></td>
											<td>1915</td>
											<td>27.7</td>
										</tr>
										<tr>
											<td id="107201">AMG</td>
											<td><img src="modules/fmsdb/img/flags/s/BRA.gif" alt="Brazil">  BRA</td>
											<td>First Division</td>
											<td>59K</td>
											<td>Professional</td>
											<td>23,018</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#E00020"></span></td>
											<td>1912</td>
											<td>26.3</td>
										</tr>
										<tr>
											<td id="301100">ARA</td>
											<td><img src="modules/fmsdb/img/flags/s/BRA.gif" alt="Brazil">  BRA</td>
											<td>Third Division</td>
											<td>24K</td>
											<td>Professional</td>
											<td>12,500</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#C80000"></span></td>
											<td>1977</td>
											<td>27.1</td>
										</tr>
										<tr>
											<td id="107203">ARN</td>
											<td><img src="modules/fmsdb/img/flags/s/BRA.gif" alt="Brazil">  BRA</td>
											<td>Third Division</td>
											<td>48K</td>
											<td>Professional</td>
											<td>32,000</td>
											<td><span class="label" style="background:#F8F800"></span> <span class="label" style="background:#0000F8"></span></td>
											<td>1915</td>
											<td>26.6</td>
										</tr>
										<tr>
											<td id="301151">ATG</td>
											<td><img src="modules/fmsdb/img/flags/s/BRA.gif" alt="Brazil">  BRA</td>
											<td>Second Division</td>
											<td>71K</td>
											<td>Professional</td>
											<td>54,049</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#0050D0"></span></td>
											<td>1937</td>
											<td>25.8</td>
										</tr>
										<tr>
											<td id="314">ATM</td>
											<td><img src="modules/fmsdb/img/flags/s/BRA.gif" alt="Brazil">  BRA</td>
											<td>First Division</td>
											<td>2M</td>
											<td>Professional</td>
											<td>23,018</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#C80000"></span></td>
											<td>1908</td>
											<td>27.1</td>
										</tr>
										<tr>
											<td id="107206">ATP</td>
											<td><img src="modules/fmsdb/img/flags/s/BRA.gif" alt="Brazil">  BRA</td>
											<td>First Division</td>
											<td>476K</td>
											<td>Professional</td>
											<td>42,000</td>
											<td><span class="label" style="background:#0030A0"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1924</td>
											<td>23.9</td>
										</tr>
										<tr>
											<td id="107208">AVA</td>
											<td><img src="modules/fmsdb/img/flags/s/BRA.gif" alt="Brazil">  BRA</td>
											<td>Second Division</td>
											<td>178K</td>
											<td>Professional</td>
											<td>17,800</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
											<td>1923</td>
											<td>25.5</td>
										</tr>
										<tr>
											<td id="315">BAH</td>
											<td><img src="modules/fmsdb/img/flags/s/BRA.gif" alt="Brazil">  BRA</td>
											<td>Second Division</td>
											<td>713K</td>
											<td>Professional</td>
											<td>50,443</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#B00000"></span></td>
											<td>1931</td>
											<td>25.8</td>
										</tr>
										<tr>
											<td id="310700">BEC</td>
											<td><img src="modules/fmsdb/img/flags/s/BRA.gif" alt="Brazil">  BRA</td>
											<td>Third Division</td>
											<td>48K</td>
											<td>Professional</td>
											<td>13,000</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#008030"></span></td>
											<td>1947</td>
											<td>25.6</td>
										</tr>
										<tr>
											<td id="316">BOT</td>
											<td><img src="modules/fmsdb/img/flags/s/BRA.gif" alt="Brazil">  BRA</td>
											<td>First Division</td>
											<td>119K</td>
											<td>Professional</td>
											<td>44,461</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#E00000"></span></td>
											<td>1904</td>
											<td>26.4</td>
										</tr>
										<tr>
											<td id="301208">BPB</td>
											<td><img src="modules/fmsdb/img/flags/s/BRA.gif" alt="Brazil">  BRA</td>
											<td>Third Division</td>
											<td>59K</td>
											<td>Professional</td>
											<td>19,000</td>
											<td><span class="label" style="background:#283030"></span> <span class="label" style="background:#E85888"></span></td>
											<td>1931</td>
											<td>27.2</td>
										</tr>
										<tr>
											<td id="317">BRA</td>
											<td><img src="modules/fmsdb/img/flags/s/BRA.gif" alt="Brazil">  BRA</td>
											<td>Second Division</td>
											<td>12K</td>
											<td>Professional</td>
											<td>16,119</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#C80000"></span></td>
											<td>1928</td>
											<td>27.0</td>
										</tr>
										<tr>
											<td id="301264">BRP</td>
											<td><img src="modules/fmsdb/img/flags/s/BRA.gif" alt="Brazil">  BRA</td>
											<td>Second Division</td>
											<td>12K</td>
											<td>Professional</td>
											<td>20,000</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#FFFFFF"></span></td>
											<td>1911</td>
											<td>30.2</td>
										</tr>
										<tr>
											<td id="121265">BTF</td>
											<td><img src="modules/fmsdb/img/flags/s/BRA.gif" alt="Brazil">  BRA</td>
											<td>Third Division</td>
											<td>0</td>
											<td>Professional</td>
											<td>29,292</td>
											<td><span class="label" style="background:#E00000"></span> <span class="label" style="background:#F8F000"></span></td>
											<td>1918</td>
											<td>26.3</td>
										</tr>
										<tr>
											<td id="301102">CBR</td>
											<td><img src="modules/fmsdb/img/flags/s/BRA.gif" alt="Brazil">  BRA</td>
											<td>Second Division</td>
											<td>119K</td>
											<td>Professional</td>
											<td>17,126</td>
											<td><span class="label" style="background:#101010"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1912</td>
											<td>28.5</td>
										</tr>
										<tr>
											<td id="104749">CEA</td>
											<td><img src="modules/fmsdb/img/flags/s/BRA.gif" alt="Brazil">  BRA</td>
											<td>Second Division</td>
											<td>238K</td>
											<td>Professional</td>
											<td>64,846</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
											<td>1914</td>
											<td>27.3</td>
										</tr>
										<tr>
											<td id="321">CEC</td>
											<td><img src="modules/fmsdb/img/flags/s/BRA.gif" alt="Brazil">  BRA</td>
											<td>First Division</td>
											<td>2M</td>
											<td>Professional</td>
											<td>75,783</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#E00000"></span></td>
											<td>1921</td>
											<td>26.1</td>
										</tr>
										<tr>
											<td id="301304">CHA</td>
											<td><img src="modules/fmsdb/img/flags/s/BRA.gif" alt="Brazil">  BRA</td>
											<td>First Division</td>
											<td>71K</td>
											<td>Professional</td>
											<td>15,000</td>
											<td><span class="label" style="background:#F8F000"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1973</td>
											<td>27.0</td>
										</tr>
										<tr>
											<td id="301323">CON</td>
											<td><img src="modules/fmsdb/img/flags/s/BRA.gif" alt="Brazil">  BRA</td>
											<td>Third Division</td>
											<td>0</td>
											<td>Professional</td>
											<td>15,575</td>
											<td><span class="label" style="background:#287850"></span> <span class="label" style="background:#287850"></span></td>
											<td>1936</td>
											<td>27.9</td>
										</tr>
										<tr>
											<td id="319">COR</td>
											<td><img src="modules/fmsdb/img/flags/s/BRA.gif" alt="Brazil">  BRA</td>
											<td>First Division</td>
											<td>1M</td>
											<td>Professional</td>
											<td>48,000</td>
											<td><span class="label" style="background:#101010"></span> <span class="label" style="background:#F8D000"></span></td>
											<td>1910</td>
											<td>24.7</td>
										</tr>
										<tr>
											<td id="320">CRI</td>
											<td><img src="modules/fmsdb/img/flags/s/BRA.gif" alt="Brazil">  BRA</td>
											<td>Second Division</td>
											<td>71K</td>
											<td>Professional</td>
											<td>22,000</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#0030A0"></span></td>
											<td>1948</td>
											<td>24.8</td>
										</tr>
										<tr>
											<td id="104776">CTB</td>
											<td><img src="modules/fmsdb/img/flags/s/BRA.gif" alt="Brazil">  BRA</td>
											<td>First Division</td>
											<td>119K</td>
											<td>Professional</td>
											<td>34,872</td>
											<td><span class="label" style="background:#C0F888"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1909</td>
											<td>26.0</td>
										</tr>
										<tr>
											<td id="318915">CUI</td>
											<td><img src="modules/fmsdb/img/flags/s/BRA.gif" alt="Brazil">  BRA</td>
											<td>Third Division</td>
											<td>0</td>
											<td>Professional</td>
											<td>42,958</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#68C0E8"></span></td>
											<td>2001</td>
											<td>28.0</td>
										</tr>
										<tr>
											<td id="301306">FIG</td>
											<td><img src="modules/fmsdb/img/flags/s/BRA.gif" alt="Brazil">  BRA</td>
											<td>First Division</td>
											<td>178K</td>
											<td>Professional</td>
											<td>19,069</td>
											<td><span class="label" style="background:#F8F000"></span> <span class="label" style="background:#B00000"></span></td>
											<td>1921</td>
											<td>25.9</td>
										</tr>
										<tr>
											<td id="322">FLA</td>
											<td><img src="modules/fmsdb/img/flags/s/BRA.gif" alt="Brazil">  BRA</td>
											<td>First Division</td>
											<td>5M</td>
											<td>Professional</td>
											<td>78,838</td>
											<td><span class="label" style="background:#E00000"></span> <span class="label" style="background:#0050D0"></span></td>
											<td>1895</td>
											<td>26.6</td>
										</tr>
										<tr>
											<td id="323">FLU</td>
											<td><img src="modules/fmsdb/img/flags/s/BRA.gif" alt="Brazil">  BRA</td>
											<td>First Division</td>
											<td>1M</td>
											<td>Professional</td>
											<td>78,838</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#E00000"></span></td>
											<td>1902</td>
											<td>26.2</td>
										</tr>
										<tr>
											<td id="104750">FOR</td>
											<td><img src="modules/fmsdb/img/flags/s/BRA.gif" alt="Brazil">  BRA</td>
											<td>Third Division</td>
											<td>95K</td>
											<td>Professional</td>
											<td>64,846</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#60C0F8"></span></td>
											<td>1918</td>
											<td>28.0</td>
										</tr>
										<tr>
											<td id="314774">GFL</td>
											<td><img src="modules/fmsdb/img/flags/s/BRA.gif" alt="Brazil">  BRA</td>
											<td>Third Division</td>
											<td>24K</td>
											<td>Professional</td>
											<td>15,769</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#0050D0"></span></td>
											<td>1998</td>
											<td>21.5</td>
										</tr>
										<tr>
											<td id="102555">GOI</td>
											<td><img src="modules/fmsdb/img/flags/s/BRA.gif" alt="Brazil">  BRA</td>
											<td>Second Division</td>
											<td>214K</td>
											<td>Professional</td>
											<td>54,049</td>
											<td><span class="label" style="background:#F8F000"></span> <span class="label" style="background:#003068"></span></td>
											<td>1943</td>
											<td>27.0</td>
										</tr>
										<tr>
											<td id="324">GRE</td>
											<td><img src="modules/fmsdb/img/flags/s/BRA.gif" alt="Brazil">  BRA</td>
											<td>First Division</td>
											<td>1M</td>
											<td>Professional</td>
											<td>60,170</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#C80000"></span></td>
											<td>1903</td>
											<td>24.2</td>
										</tr>
										<tr>
											<td id="325">GUA</td>
											<td><img src="modules/fmsdb/img/flags/s/BRA.gif" alt="Brazil">  BRA</td>
											<td>Third Division</td>
											<td>24K</td>
											<td>Professional</td>
											<td>30,888</td>
											<td><span class="label" style="background:#101010"></span> <span class="label" style="background:#A8F828"></span></td>
											<td>1911</td>
											<td>27.0</td>
										</tr>
										<tr>
											<td id="326">INT</td>
											<td><img src="modules/fmsdb/img/flags/s/BRA.gif" alt="Brazil">  BRA</td>
											<td>First Division</td>
											<td>2M</td>
											<td>Professional</td>
											<td>50,128</td>
											<td><span class="label" style="background:#800040"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1909</td>
											<td>25.5</td>
										</tr>
										<tr>
											<td id="301310">JOI</td>
											<td><img src="modules/fmsdb/img/flags/s/BRA.gif" alt="Brazil">  BRA</td>
											<td>Second Division</td>
											<td>71K</td>
											<td>Professional</td>
											<td>22,000</td>
											<td><span class="label" style="background:#C80000"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1976</td>
											<td>26.7</td>
										</tr>
										<tr>
											<td id="327">JUV</td>
											<td><img src="modules/fmsdb/img/flags/s/BRA.gif" alt="Brazil">  BRA</td>
											<td>Third Division</td>
											<td>0</td>
											<td>Professional</td>
											<td>23,726</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#008030"></span></td>
											<td>1913</td>
											<td>25.9</td>
										</tr>
										<tr>
											<td id="900678">LEC</td>
											<td><img src="modules/fmsdb/img/flags/s/BRA.gif" alt="Brazil">  BRA</td>
											<td>Second Division</td>
											<td>83K</td>
											<td>Professional</td>
											<td>31,000</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#008030"></span></td>
											<td>1956</td>
											<td>26.3</td>
										</tr>
										<tr>
											<td id="8832317">LUV</td>
											<td><img src="modules/fmsdb/img/flags/s/BRA.gif" alt="Brazil">  BRA</td>
											<td>Second Division</td>
											<td>12K</td>
											<td>Professional</td>
											<td>5,000</td>
											<td><span class="label" style="background:#0050D0"></span> <span class="label" style="background:#008030"></span></td>
											<td>2004</td>
											<td>25.8</td>
										</tr>
										<tr>
											<td id="311971">MAC</td>
											<td><img src="modules/fmsdb/img/flags/s/BRA.gif" alt="Brazil">  BRA</td>
											<td>Third Division</td>
											<td>36K</td>
											<td>Professional</td>
											<td>15,000</td>
											<td><span class="label" style="background:#FFFFFF"></span> <span class="label" style="background:#0030A0"></span></td>
											<td>1990</td>
											<td>26.1</td>
										</tr>
										<tr>
											<td id="107222">MOG</td>
											<td><img src="modules/fmsdb/img/flags/s/BRA.gif" alt="Brazil">  BRA</td>
											<td>Third Division</td>
											<td>0</td>
											<td>Professional</td>
											<td>26,400</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#B00000"></span></td>
											<td>1932</td>
											<td>25.2</td>
										</tr>
										<tr>
											<td id="328">NAU</td>
											<td><img src="modules/fmsdb/img/flags/s/BRA.gif" alt="Brazil">  BRA</td>
											<td>Second Division</td>
											<td>119K</td>
											<td>Professional</td>
											<td>45,500</td>
											<td><span class="label" style="background:#0078F8"></span> <span class="label" style="background:#205090"></span></td>
											<td>1901</td>
											<td>25.6</td>
										</tr>
										<tr>
											<td id="311028">OES</td>
											<td><img src="modules/fmsdb/img/flags/s/BRA.gif" alt="Brazil">  BRA</td>
											<td>Second Division</td>
											<td>12K</td>
											<td>Professional</td>
											<td>14,074</td>
											<td><span class="label" style="background:#008030"></span> <span class="label" style="background:#F8F000"></span></td>
											<td>1921</td>
											<td>25.6</td>
										</tr>
										<tr>
											<td id="330">PAR</td>
											<td><img src="modules/fmsdb/img/flags/s/BRA.gif" alt="Brazil">  BRA</td>
											<td>Second Division</td>
											<td>0</td>
											<td>Professional</td>
											<td>17,000</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#0078F8"></span></td>
											<td>1989</td>
											<td>27.3</td>
										</tr>
										<tr>
											<td id="331">PAY</td>
											<td><img src="modules/fmsdb/img/flags/s/BRA.gif" alt="Brazil">  BRA</td>
											<td>Second Division</td>
											<td>29K</td>
											<td>Professional</td>
											<td>15,000</td>
											<td><span class="label" style="background:#E00000"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1914</td>
											<td>27.2</td>
										</tr>
										<tr>
											<td id="332">PON</td>
											<td><img src="modules/fmsdb/img/flags/s/BRA.gif" alt="Brazil">  BRA</td>
											<td>First Division</td>
											<td>119K</td>
											<td>Professional</td>
											<td>19,722</td>
											<td><span class="label" style="background:#E00000"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1900</td>
											<td>25.5</td>
										</tr>
										<tr>
											<td id="333">POR</td>
											<td><img src="modules/fmsdb/img/flags/s/BRA.gif" alt="Brazil">  BRA</td>
											<td>Third Division</td>
											<td>119K</td>
											<td>Professional</td>
											<td>25,470</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#008030"></span></td>
											<td>1920</td>
											<td>25.9</td>
										</tr>
										<tr>
											<td id="334">REM</td>
											<td><img src="modules/fmsdb/img/flags/s/BRA.gif" alt="Brazil">  BRA</td>
											<td>Third Division</td>
											<td>24K</td>
											<td>Professional</td>
											<td>20,000</td>
											<td><span class="label" style="background:#F8F000"></span> <span class="label" style="background:#1838F8"></span></td>
											<td>1905</td>
											<td>29.1</td>
										</tr>
										<tr>
											<td id="301245">RIV</td>
											<td><img src="modules/fmsdb/img/flags/s/BRA.gif" alt="Brazil">  BRA</td>
											<td>Third Division</td>
											<td>0</td>
											<td>Professional</td>
											<td>52,296</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F87000"></span></td>
											<td>1946</td>
											<td>29.0</td>
										</tr>
										<tr>
											<td id="19005119">SAL</td>
											<td><img src="modules/fmsdb/img/flags/s/BRA.gif" alt="Brazil">  BRA</td>
											<td>Third Division</td>
											<td>71K</td>
											<td>Professional</td>
											<td>9,916</td>
											<td><span class="label" style="background:#E00000"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1972</td>
											<td>27.8</td>
										</tr>
										<tr>
											<td id="107230">SAM</td>
											<td><img src="modules/fmsdb/img/flags/s/BRA.gif" alt="Brazil">  BRA</td>
											<td>Second Division</td>
											<td>14K</td>
											<td>Professional</td>
											<td>40,000</td>
											<td><span class="label" style="background:#004068"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1923</td>
											<td>27.8</td>
										</tr>
										<tr>
											<td id="335">SAN</td>
											<td><img src="modules/fmsdb/img/flags/s/BRA.gif" alt="Brazil">  BRA</td>
											<td>First Division</td>
											<td>238K</td>
											<td>Professional</td>
											<td>17,000</td>
											<td><span class="label" style="background:#002060"></span> <span class="label" style="background:#002060"></span></td>
											<td>1912</td>
											<td>25.1</td>
										</tr>
										<tr>
											<td id="329">SEP</td>
											<td><img src="modules/fmsdb/img/flags/s/BRA.gif" alt="Brazil">  BRA</td>
											<td>First Division</td>
											<td>2M</td>
											<td>Professional</td>
											<td>43,603</td>
											<td><span class="label" style="background:#0030A0"></span> <span class="label" style="background:#E00000"></span></td>
											<td>1914</td>
											<td>26.6</td>
										</tr>
										<tr>
											<td id="337">SPO</td>
											<td><img src="modules/fmsdb/img/flags/s/BRA.gif" alt="Brazil">  BRA</td>
											<td>First Division</td>
											<td>1M</td>
											<td>Professional</td>
											<td>77,011</td>
											<td><span class="label" style="background:#C80000"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1930</td>
											<td>25.0</td>
										</tr>
										<tr>
											<td id="338">SPT</td>
											<td><img src="modules/fmsdb/img/flags/s/BRA.gif" alt="Brazil">  BRA</td>
											<td>First Division</td>
											<td>476K</td>
											<td>Professional</td>
											<td>30,520</td>
											<td><span class="label" style="background:#002060"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1905</td>
											<td>26.8</td>
										</tr>
										<tr>
											<td id="107232">STA</td>
											<td><img src="modules/fmsdb/img/flags/s/BRA.gif" alt="Brazil">  BRA</td>
											<td>First Division</td>
											<td>238K</td>
											<td>Professional</td>
											<td>60,044</td>
											<td><span class="label" style="background:#C80000"></span> <span class="label" style="background:#202020"></span></td>
											<td>1914</td>
											<td>26.3</td>
										</tr>
										<tr>
											<td id="318860">TOM</td>
											<td><img src="modules/fmsdb/img/flags/s/BRA.gif" alt="Brazil">  BRA</td>
											<td>Third Division</td>
											<td>2K</td>
											<td>Professional</td>
											<td>2,000</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1914</td>
											<td>26.3</td>
										</tr>
										<tr>
											<td id="301198">TPC</td>
											<td><img src="modules/fmsdb/img/flags/s/BRA.gif" alt="Brazil">  BRA</td>
											<td>Second Division</td>
											<td>24K</td>
											<td>Professional</td>
											<td>14,185</td>
											<td><span class="label" style="background:#0030A0"></span> <span class="label" style="background:#F8D000"></span></td>
											<td>1912</td>
											<td>25.7</td>
										</tr>
										<tr>
											<td id="339">VDG</td>
											<td><img src="modules/fmsdb/img/flags/s/BRA.gif" alt="Brazil">  BRA</td>
											<td>Second Division</td>
											<td>1M</td>
											<td>Professional</td>
											<td>24,311</td>
											<td><span class="label" style="background:#F8D000"></span> <span class="label" style="background:#C80000"></span></td>
											<td>1898</td>
											<td>28.6</td>
										</tr>
										<tr>
											<td id="107236">VIL</td>
											<td><img src="modules/fmsdb/img/flags/s/BRA.gif" alt="Brazil">  BRA</td>
											<td>Second Division</td>
											<td>12K</td>
											<td>Professional</td>
											<td>54,049</td>
											<td><span class="label" style="background:#282890"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1943</td>
											<td>27.8</td>
										</tr>
										<tr>
											<td id="340">VIT</td>
											<td><img src="modules/fmsdb/img/flags/s/BRA.gif" alt="Brazil">  BRA</td>
											<td>First Division</td>
											<td>238K</td>
											<td>Professional</td>
											<td>38,000</td>
											<td><span class="label" style="background:#006030"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1899</td>
											<td>25.3</td>
										</tr>
										<tr>
											<td id="319160">YPI</td>
											<td><img src="modules/fmsdb/img/flags/s/BRA.gif" alt="Brazil">  BRA</td>
											<td>Third Division</td>
											<td>0</td>
											<td>Professional</td>
											<td>30,000</td>
											<td><span class="label" style="background:#F8F000"></span> <span class="label" style="background:#002080"></span></td>
											<td>1924</td>
											<td>27.6</td>
										</tr>
										<tr>
											<td id="22011462">Bansko</td>
											<td><img src="modules/fmsdb/img/flags/s/BUL.gif" alt="Bulgaria">  BUL</td>
											<td>Second League</td>
											<td>1K</td>
											<td>Professional</td>
											<td>3,000</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#D02028"></span></td>
											<td>1951</td>
											<td>26.2</td>
										</tr>
										<tr>
											<td id="341">Beroe</td>
											<td><img src="modules/fmsdb/img/flags/s/BUL.gif" alt="Bulgaria">  BUL</td>
											<td>First League</td>
											<td>88K</td>
											<td>Professional</td>
											<td>13,500</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
											<td>1959</td>
											<td>25.8</td>
										</tr>
										<tr>
											<td id="7508916">Botev Galabovo</td>
											<td><img src="modules/fmsdb/img/flags/s/BUL.gif" alt="Bulgaria">  BUL</td>
											<td>Second League</td>
											<td>0</td>
											<td>Professional</td>
											<td>3,000</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F00000"></span></td>
											<td>1945</td>
											<td>25.0</td>
										</tr>
										<tr>
											<td id="22033833">Botev Plovdiv</td>
											<td><img src="modules/fmsdb/img/flags/s/BUL.gif" alt="Bulgaria">  BUL</td>
											<td>First League</td>
											<td>22K</td>
											<td>Professional</td>
											<td>18,037</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F8F000"></span></td>
											<td>1912</td>
											<td>23.3</td>
										</tr>
										<tr>
											<td id="22003932">Botev Vratsa</td>
											<td><img src="modules/fmsdb/img/flags/s/BUL.gif" alt="Bulgaria">  BUL</td>
											<td>Second League</td>
											<td>0</td>
											<td>Professional</td>
											<td>21,000</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#00A030"></span></td>
											<td>1921</td>
											<td>25.4</td>
										</tr>
										<tr>
											<td id="138156">Cherno more</td>
											<td><img src="modules/fmsdb/img/flags/s/BUL.gif" alt="Bulgaria">  BUL</td>
											<td>First League</td>
											<td>40K</td>
											<td>Professional</td>
											<td>5,000</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#008030"></span></td>
											<td>1913</td>
											<td>26.2</td>
										</tr>
										<tr>
											<td id="22069955">CSKA-Sofia</td>
											<td><img src="modules/fmsdb/img/flags/s/BUL.gif" alt="Bulgaria">  BUL</td>
											<td>First League</td>
											<td>132K</td>
											<td>Professional</td>
											<td>22,015</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#C81018"></span></td>
											<td>1948</td>
											<td>23.8</td>
										</tr>
										<tr>
											<td id="22040114">Dunav</td>
											<td><img src="modules/fmsdb/img/flags/s/BUL.gif" alt="Bulgaria">  BUL</td>
											<td>First League</td>
											<td>5K</td>
											<td>Professional</td>
											<td>7,622</td>
											<td><span class="label" style="background:#60C0F8"></span> <span class="label" style="background:#60C0F8"></span></td>
											<td>1949</td>
											<td>25.3</td>
										</tr>
										<tr>
											<td id="7501927">Etar</td>
											<td><img src="modules/fmsdb/img/flags/s/BUL.gif" alt="Bulgaria">  BUL</td>
											<td>Second League</td>
											<td>4K</td>
											<td>Professional</td>
											<td>25,000</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#501080"></span></td>
											<td>1924</td>
											<td>25.9</td>
										</tr>
										<tr>
											<td id="349">Levski</td>
											<td><img src="modules/fmsdb/img/flags/s/BUL.gif" alt="Bulgaria">  BUL</td>
											<td>First League</td>
											<td>132K</td>
											<td>Professional</td>
											<td>19,000</td>
											<td><span class="label" style="background:#2838A0"></span> <span class="label" style="background:#1068F8"></span></td>
											<td>1914</td>
											<td>25.8</td>
										</tr>
										<tr>
											<td id="7508944">Levski Karlovo</td>
											<td><img src="modules/fmsdb/img/flags/s/BUL.gif" alt="Bulgaria">  BUL</td>
											<td>Second League</td>
											<td>0</td>
											<td>Professional</td>
											<td>5,000</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#0050D0"></span></td>
											<td>1923</td>
											<td>27.5</td>
										</tr>
										<tr>
											<td id="350">Lokomotiv Gorna</td>
											<td><img src="modules/fmsdb/img/flags/s/BUL.gif" alt="Bulgaria">  BUL</td>
											<td>First League</td>
											<td>15K</td>
											<td>Professional</td>
											<td>11,800</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#000000"></span></td>
											<td>1932</td>
											<td>26.6</td>
										</tr>
										<tr>
											<td id="351">Lokomotiv Plovdiv</td>
											<td><img src="modules/fmsdb/img/flags/s/BUL.gif" alt="Bulgaria">  BUL</td>
											<td>First League</td>
											<td>15K</td>
											<td>Professional</td>
											<td>11,800</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#000000"></span></td>
											<td>1936</td>
											<td>26.3</td>
										</tr>
										<tr>
											<td id="352">Lokomotiv Sofia</td>
											<td><img src="modules/fmsdb/img/flags/s/BUL.gif" alt="Bulgaria">  BUL</td>
											<td>Second League</td>
											<td>0</td>
											<td>Professional</td>
											<td>15,000</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
											<td>1929</td>
											<td>23.8</td>
										</tr>
										<tr>
											<td id="22003969">Ludogorets</td>
											<td><img src="modules/fmsdb/img/flags/s/BUL.gif" alt="Bulgaria">  BUL</td>
											<td>First League</td>
											<td>1M</td>
											<td>Professional</td>
											<td>7,622</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#008030"></span></td>
											<td>1945</td>
											<td>27.0</td>
										</tr>
										<tr>
											<td id="353">Montana</td>
											<td><img src="modules/fmsdb/img/flags/s/BUL.gif" alt="Bulgaria">  BUL</td>
											<td>First League</td>
											<td>15K</td>
											<td>Professional</td>
											<td>8,114</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#0050D0"></span></td>
											<td>1921</td>
											<td>25.2</td>
										</tr>
										<tr>
											<td id="22029000">Neftochimic 1962</td>
											<td><img src="modules/fmsdb/img/flags/s/BUL.gif" alt="Bulgaria">  BUL</td>
											<td>First League</td>
											<td>15K</td>
											<td>Professional</td>
											<td>18,037</td>
											<td><span class="label" style="background:#00A030"></span> <span class="label" style="background:#108830"></span></td>
											<td>1962</td>
											<td>26.5</td>
										</tr>
										<tr>
											<td id="7500423">Nesebar</td>
											<td><img src="modules/fmsdb/img/flags/s/BUL.gif" alt="Bulgaria">  BUL</td>
											<td>Second League</td>
											<td>0</td>
											<td>Professional</td>
											<td>8,000</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#0050D0"></span></td>
											<td>1946</td>
											<td>24.8</td>
										</tr>
										<tr>
											<td id="22029419">Oborishte</td>
											<td><img src="modules/fmsdb/img/flags/s/BUL.gif" alt="Bulgaria">  BUL</td>
											<td>Second League</td>
											<td>2K</td>
											<td>Professional</td>
											<td>3,000</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#008030"></span></td>
											<td>1925</td>
											<td>24.4</td>
										</tr>
										<tr>
											<td id="354">Pirin Blagoevgrad</td>
											<td><img src="modules/fmsdb/img/flags/s/BUL.gif" alt="Bulgaria">  BUL</td>
											<td>First League</td>
											<td>9K</td>
											<td>Professional</td>
											<td>8,250</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#48A068"></span></td>
											<td>1934</td>
											<td>25.2</td>
										</tr>
										<tr>
											<td id="7500426">Pomorie</td>
											<td><img src="modules/fmsdb/img/flags/s/BUL.gif" alt="Bulgaria">  BUL</td>
											<td>Second League</td>
											<td>0</td>
											<td>Professional</td>
											<td>3,300</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#0078F8"></span></td>
											<td>1964</td>
											<td>24.4</td>
										</tr>
										<tr>
											<td id="116384">Septemvri Sofia</td>
											<td><img src="modules/fmsdb/img/flags/s/BUL.gif" alt="Bulgaria">  BUL</td>
											<td>Second League</td>
											<td>0</td>
											<td>Professional</td>
											<td>2,000</td>
											<td><span class="label" style="background:#5898E0"></span> <span class="label" style="background:#B00000"></span></td>
											<td>1944</td>
											<td>23.8</td>
										</tr>
										<tr>
											<td id="356">Slavia Sofia</td>
											<td><img src="modules/fmsdb/img/flags/s/BUL.gif" alt="Bulgaria">  BUL</td>
											<td>First League</td>
											<td>40K</td>
											<td>Professional</td>
											<td>43,208</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
											<td>1913</td>
											<td>24.4</td>
										</tr>
										<tr>
											<td id="7508658">Sozopol</td>
											<td><img src="modules/fmsdb/img/flags/s/BUL.gif" alt="Bulgaria">  BUL</td>
											<td>Second League</td>
											<td>9K</td>
											<td>Professional</td>
											<td>3,000</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#B0E0F8"></span></td>
											<td>2008</td>
											<td>25.6</td>
										</tr>
										<tr>
											<td id="22033716">Spartak Pleven</td>
											<td><img src="modules/fmsdb/img/flags/s/BUL.gif" alt="Bulgaria">  BUL</td>
											<td>Second League</td>
											<td>0</td>
											<td>Professional</td>
											<td>21,000</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#2858B0"></span></td>
											<td>1919</td>
											<td>23.4</td>
										</tr>
										<tr>
											<td id="22070141">Tsarsko selo</td>
											<td><img src="modules/fmsdb/img/flags/s/BUL.gif" alt="Bulgaria">  BUL</td>
											<td>Second League</td>
											<td>0</td>
											<td>Professional</td>
											<td>15,000</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#E00000"></span></td>
											<td>2007</td>
											<td>24.4</td>
										</tr>
										<tr>
											<td id="22006538">Vereya</td>
											<td><img src="modules/fmsdb/img/flags/s/BUL.gif" alt="Bulgaria">  BUL</td>
											<td>First League</td>
											<td>15K</td>
											<td>Professional</td>
											<td>13,500</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#0050D0"></span></td>
											<td>2001</td>
											<td>26.6</td>
										</tr>
										<tr>
											<td id="7508865">Vitosha Bistritsa</td>
											<td><img src="modules/fmsdb/img/flags/s/BUL.gif" alt="Bulgaria">  BUL</td>
											<td>Second League</td>
											<td>10K</td>
											<td>Professional</td>
											<td>2,000</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#48A068"></span></td>
											<td>1958</td>
											<td>26.6</td>
										</tr>
										<tr>
											<td id="105180">Montreal Impact</td>
											<td><img src="modules/fmsdb/img/flags/s/CAN.gif" alt="Canada">  CAN</td>
											<td>MLS</td>
											<td>1M</td>
											<td>Professional</td>
											<td>20,800</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#2870B0"></span></td>
											<td>1993</td>
											<td>26.7</td>
										</tr>
										<tr>
											<td id="72000789">Toronto FC</td>
											<td><img src="modules/fmsdb/img/flags/s/CAN.gif" alt="Canada">  CAN</td>
											<td>MLS</td>
											<td>2M</td>
											<td>Professional</td>
											<td>28,000</td>
											<td><span class="label" style="background:#383838"></span> <span class="label" style="background:#D02848"></span></td>
											<td>2007</td>
											<td>25.7</td>
										</tr>
										<tr>
											<td id="4400014">Vancouver</td>
											<td><img src="modules/fmsdb/img/flags/s/CAN.gif" alt="Canada">  CAN</td>
											<td>MLS</td>
											<td>576K</td>
											<td>Professional</td>
											<td>54,320</td>
											<td><span class="label" style="background:#C0C8C8"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1974</td>
											<td>25.3</td>
										</tr>
										<tr>
											<td id="130778">Audax Italiano</td>
											<td><img src="modules/fmsdb/img/flags/s/CHI.gif" alt="Chile">  CHI</td>
											<td>First Division</td>
											<td>231K</td>
											<td>Professional</td>
											<td>12,000</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#008030"></span></td>
											<td>1910</td>
											<td>24.2</td>
										</tr>
										<tr>
											<td id="104359">Cobreloa</td>
											<td><img src="modules/fmsdb/img/flags/s/CHI.gif" alt="Chile">  CHI</td>
											<td>First Division B</td>
											<td>231K</td>
											<td>Professional</td>
											<td>12,312</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#F87000"></span></td>
											<td>1977</td>
											<td>24.1</td>
										</tr>
										<tr>
											<td id="130795">Cobresal</td>
											<td><img src="modules/fmsdb/img/flags/s/CHI.gif" alt="Chile">  CHI</td>
											<td>First Division</td>
											<td>14K</td>
											<td>Professional</td>
											<td>20,752</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1979</td>
											<td>25.7</td>
										</tr>
										<tr>
											<td id="399">Colo Colo</td>
											<td><img src="modules/fmsdb/img/flags/s/CHI.gif" alt="Chile">  CHI</td>
											<td>First Division</td>
											<td>692K</td>
											<td>Professional</td>
											<td>47,017</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1925</td>
											<td>23.5</td>
										</tr>
										<tr>
											<td id="120924">Coquimbo Unido</td>
											<td><img src="modules/fmsdb/img/flags/s/CHI.gif" alt="Chile">  CHI</td>
											<td>First Division B</td>
											<td>8K</td>
											<td>Professional</td>
											<td>18,750</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F8F000"></span></td>
											<td>1958</td>
											<td>25.2</td>
										</tr>
										<tr>
											<td id="5250445">Curico Unido</td>
											<td><img src="modules/fmsdb/img/flags/s/CHI.gif" alt="Chile">  CHI</td>
											<td>First Division B</td>
											<td>5K</td>
											<td>Professional</td>
											<td>8,000</td>
											<td><span class="label" style="background:#E00000"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1973</td>
											<td>24.7</td>
										</tr>
										<tr>
											<td id="130790">Deportes Antofagasta</td>
											<td><img src="modules/fmsdb/img/flags/s/CHI.gif" alt="Chile">  CHI</td>
											<td>First Division</td>
											<td>35K</td>
											<td>Professional</td>
											<td>21,178</td>
											<td><span class="label" style="background:#3088B8"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1966</td>
											<td>25.3</td>
										</tr>
										<tr>
											<td id="5250434">Deportes Copiapo</td>
											<td><img src="modules/fmsdb/img/flags/s/CHI.gif" alt="Chile">  CHI</td>
											<td>First Division B</td>
											<td>0</td>
											<td>Professional</td>
											<td>8,000</td>
											<td><span class="label" style="background:#D0D0D0"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1999</td>
											<td>24.7</td>
										</tr>
										<tr>
											<td id="130787">Deportes Iquique</td>
											<td><img src="modules/fmsdb/img/flags/s/CHI.gif" alt="Chile">  CHI</td>
											<td>First Division</td>
											<td>17K</td>
											<td>Professional</td>
											<td>13,600</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#60C0F8"></span></td>
											<td>2002</td>
											<td>23.5</td>
										</tr>
										<tr>
											<td id="130796">Deportes La Serena</td>
											<td><img src="modules/fmsdb/img/flags/s/CHI.gif" alt="Chile">  CHI</td>
											<td>First Division B</td>
											<td>9K</td>
											<td>Professional</td>
											<td>17,641</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#B00000"></span></td>
											<td>1955</td>
											<td>24.1</td>
										</tr>
										<tr>
											<td id="130781">Deportes Puerto Montt</td>
											<td><img src="modules/fmsdb/img/flags/s/CHI.gif" alt="Chile">  CHI</td>
											<td>First Division B</td>
											<td>5K</td>
											<td>Professional</td>
											<td>10,000</td>
											<td><span class="label" style="background:#008000"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1983</td>
											<td>27.4</td>
										</tr>
										<tr>
											<td id="104363">Deportes Temuco</td>
											<td><img src="modules/fmsdb/img/flags/s/CHI.gif" alt="Chile">  CHI</td>
											<td>First Division</td>
											<td>7K</td>
											<td>Professional</td>
											<td>18,500</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#008030"></span></td>
											<td>1965</td>
											<td>24.9</td>
										</tr>
										<tr>
											<td id="75000008">Deportes Valdivia</td>
											<td><img src="modules/fmsdb/img/flags/s/CHI.gif" alt="Chile">  CHI</td>
											<td>First Division B</td>
											<td>0</td>
											<td>Professional</td>
											<td>5,397</td>
											<td><span class="label" style="background:#E00000"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>2003</td>
											<td>22.8</td>
										</tr>
										<tr>
											<td id="130782">Everton (CHI)</td>
											<td><img src="modules/fmsdb/img/flags/s/CHI.gif" alt="Chile">  CHI</td>
											<td>First Division</td>
											<td>12K</td>
											<td>Professional</td>
											<td>21,913</td>
											<td><span class="label" style="background:#F8D000"></span> <span class="label" style="background:#002080"></span></td>
											<td>1909</td>
											<td>23.1</td>
										</tr>
										<tr>
											<td id="104362">Huachipato</td>
											<td><img src="modules/fmsdb/img/flags/s/CHI.gif" alt="Chile">  CHI</td>
											<td>First Division</td>
											<td>11K</td>
											<td>Professional</td>
											<td>10,500</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#0030A0"></span></td>
											<td>1947</td>
											<td>21.7</td>
										</tr>
										<tr>
											<td id="5251725">Iberia</td>
											<td><img src="modules/fmsdb/img/flags/s/CHI.gif" alt="Chile">  CHI</td>
											<td>First Division B</td>
											<td>0</td>
											<td>Professional</td>
											<td>3,210</td>
											<td><span class="label" style="background:#E00000"></span> <span class="label" style="background:#0030A0"></span></td>
											<td>1933</td>
											<td>27.0</td>
										</tr>
										<tr>
											<td id="130797">Magallanes</td>
											<td><img src="modules/fmsdb/img/flags/s/CHI.gif" alt="Chile">  CHI</td>
											<td>First Division B</td>
											<td>3K</td>
											<td>Professional</td>
											<td>4,000</td>
											<td><span class="label" style="background:#0078F8"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1897</td>
											<td>24.0</td>
										</tr>
										<tr>
											<td id="130798">Nublense</td>
											<td><img src="modules/fmsdb/img/flags/s/CHI.gif" alt="Chile">  CHI</td>
											<td>First Division B</td>
											<td>9K</td>
											<td>Professional</td>
											<td>12,000</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#E00000"></span></td>
											<td>1916</td>
											<td>25.3</td>
										</tr>
										<tr>
											<td id="400">O'Higgins</td>
											<td><img src="modules/fmsdb/img/flags/s/CHI.gif" alt="Chile">  CHI</td>
											<td>First Division</td>
											<td>77K</td>
											<td>Professional</td>
											<td>13,839</td>
											<td><span class="label" style="background:#60C0F8"></span> <span class="label" style="background:#60C0F8"></span></td>
											<td>1955</td>
											<td>23.2</td>
										</tr>
										<tr>
											<td id="130780">Palestino</td>
											<td><img src="modules/fmsdb/img/flags/s/CHI.gif" alt="Chile">  CHI</td>
											<td>First Division</td>
											<td>154K</td>
											<td>Professional</td>
											<td>10,000</td>
											<td><span class="label" style="background:#108830"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1920</td>
											<td>23.5</td>
										</tr>
										<tr>
											<td id="130788">Rangers (CHI)</td>
											<td><img src="modules/fmsdb/img/flags/s/CHI.gif" alt="Chile">  CHI</td>
											<td>First Division B</td>
											<td>8K</td>
											<td>Professional</td>
											<td>8,324</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#E00000"></span></td>
											<td>1902</td>
											<td>24.3</td>
										</tr>
										<tr>
											<td id="5250433">San Luis (CHI)</td>
											<td><img src="modules/fmsdb/img/flags/s/CHI.gif" alt="Chile">  CHI</td>
											<td>First Division</td>
											<td>8K</td>
											<td>Professional</td>
											<td>7,680</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F8F000"></span></td>
											<td>1919</td>
											<td>24.9</td>
										</tr>
										<tr>
											<td id="130785">San Marcos de Arica</td>
											<td><img src="modules/fmsdb/img/flags/s/CHI.gif" alt="Chile">  CHI</td>
											<td>First Division B</td>
											<td>5K</td>
											<td>Professional</td>
											<td>9,746</td>
											<td><span class="label" style="background:#0000F8"></span> <span class="label" style="background:#002080"></span></td>
											<td>1978</td>
											<td>24.6</td>
										</tr>
										<tr>
											<td id="130779">Santiago Morning</td>
											<td><img src="modules/fmsdb/img/flags/s/CHI.gif" alt="Chile">  CHI</td>
											<td>First Division B</td>
											<td>6K</td>
											<td>Professional</td>
											<td>4,000</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1936</td>
											<td>23.6</td>
										</tr>
										<tr>
											<td id="120921">Santiago Wanderers</td>
											<td><img src="modules/fmsdb/img/flags/s/CHI.gif" alt="Chile">  CHI</td>
											<td>First Division</td>
											<td>77K</td>
											<td>Professional</td>
											<td>23,062</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#006030"></span></td>
											<td>1892</td>
											<td>22.5</td>
										</tr>
										<tr>
											<td id="120064">Union Espanola</td>
											<td><img src="modules/fmsdb/img/flags/s/CHI.gif" alt="Chile">  CHI</td>
											<td>First Division</td>
											<td>692K</td>
											<td>Professional</td>
											<td>22,000</td>
											<td><span class="label" style="background:#F8D000"></span> <span class="label" style="background:#E00000"></span></td>
											<td>1897</td>
											<td>22.4</td>
										</tr>
										<tr>
											<td id="5250019">Union La Calera</td>
											<td><img src="modules/fmsdb/img/flags/s/CHI.gif" alt="Chile">  CHI</td>
											<td>First Division B</td>
											<td>77K</td>
											<td>Professional</td>
											<td>12,000</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#E00000"></span></td>
											<td>1954</td>
											<td>24.3</td>
										</tr>
										<tr>
											<td id="130784">Union San Felipe</td>
											<td><img src="modules/fmsdb/img/flags/s/CHI.gif" alt="Chile">  CHI</td>
											<td>First Division B</td>
											<td>9K</td>
											<td>Professional</td>
											<td>12,000</td>
											<td><span class="label" style="background:#E00000"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1956</td>
											<td>22.7</td>
										</tr>
										<tr>
											<td id="403">Universidad Catolica</td>
											<td><img src="modules/fmsdb/img/flags/s/CHI.gif" alt="Chile">  CHI</td>
											<td>First Division</td>
											<td>2M</td>
											<td>Professional</td>
											<td>16,000</td>
											<td><span class="label" style="background:#0030A0"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1937</td>
											<td>23.8</td>
										</tr>
										<tr>
											<td id="404">Universidad de Chile</td>
											<td><img src="modules/fmsdb/img/flags/s/CHI.gif" alt="Chile">  CHI</td>
											<td>First Division</td>
											<td>3M</td>
											<td>Professional</td>
											<td>49,000</td>
											<td><span class="label" style="background:#E00000"></span> <span class="label" style="background:#0030A0"></span></td>
											<td>1927</td>
											<td>23.0</td>
										</tr>
										<tr>
											<td id="130789">Universidad de Concepcion</td>
											<td><img src="modules/fmsdb/img/flags/s/CHI.gif" alt="Chile">  CHI</td>
											<td>First Division</td>
											<td>38K</td>
											<td>Professional</td>
											<td>30,000</td>
											<td><span class="label" style="background:#000080"></span> <span class="label" style="background:#F8F800"></span></td>
											<td>1994</td>
											<td>24.8</td>
										</tr>
										<tr>
											<td id="406">Beijing</td>
											<td><img src="modules/fmsdb/img/flags/s/CHN.gif" alt="China">  CHN</td>
											<td>Super League</td>
											<td>6M</td>
											<td>Professional</td>
											<td>66,161</td>
											<td><span class="label" style="background:#106838"></span> <span class="label" style="background:#00A030"></span></td>
											<td>1992</td>
											<td>27.7</td>
										</tr>
										<tr>
											<td id="23291963">Beikong</td>
											<td><img src="modules/fmsdb/img/flags/s/CHN.gif" alt="China">  CHN</td>
											<td>First Division</td>
											<td>576K</td>
											<td>Professional</td>
											<td>25,000</td>
											<td><span class="label" style="background:#0030A0"></span> <span class="label" style="background:#E00000"></span></td>
											<td>0</td>
											<td>28.6</td>
										</tr>
										<tr>
											<td id="131135">Changchun</td>
											<td><img src="modules/fmsdb/img/flags/s/CHN.gif" alt="China">  CHN</td>
											<td>Super League</td>
											<td>1M</td>
											<td>Professional</td>
											<td>32,000</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#C80000"></span></td>
											<td>1996</td>
											<td>28.0</td>
										</tr>
										<tr>
											<td id="23245672">Chaoyue</td>
											<td><img src="modules/fmsdb/img/flags/s/CHN.gif" alt="China">  CHN</td>
											<td>First Division</td>
											<td>174K</td>
											<td>Professional</td>
											<td>30,872</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#0078F8"></span></td>
											<td>2013</td>
											<td>26.8</td>
										</tr>
										<tr>
											<td id="115940">Chongqing</td>
											<td><img src="modules/fmsdb/img/flags/s/CHN.gif" alt="China">  CHN</td>
											<td>Super League</td>
											<td>2M</td>
											<td>Professional</td>
											<td>58,680</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#D00000"></span></td>
											<td>2000</td>
											<td>28.6</td>
										</tr>
										<tr>
											<td id="23147325">Fuli</td>
											<td><img src="modules/fmsdb/img/flags/s/CHN.gif" alt="China">  CHN</td>
											<td>Super League</td>
											<td>2M</td>
											<td>Professional</td>
											<td>30,000</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#B0E0F8"></span></td>
											<td>2011</td>
											<td>26.3</td>
										</tr>
										<tr>
											<td id="409">Guangzhou</td>
											<td><img src="modules/fmsdb/img/flags/s/CHN.gif" alt="China">  CHN</td>
											<td>Super League</td>
											<td>23M</td>
											<td>Professional</td>
											<td>58,500</td>
											<td><span class="label" style="background:#D8B028"></span> <span class="label" style="background:#C80000"></span></td>
											<td>1994</td>
											<td>27.3</td>
										</tr>
										<tr>
											<td id="23077977">Hangzhou</td>
											<td><img src="modules/fmsdb/img/flags/s/CHN.gif" alt="China">  CHN</td>
											<td>Super League</td>
											<td>806K</td>
											<td>Professional</td>
											<td>52,672</td>
											<td><span class="label" style="background:#F8E860"></span> <span class="label" style="background:#00C030"></span></td>
											<td>1998</td>
											<td>26.2</td>
										</tr>
										<tr>
											<td id="131162">Henan</td>
											<td><img src="modules/fmsdb/img/flags/s/CHN.gif" alt="China">  CHN</td>
											<td>Super League</td>
											<td>1M</td>
											<td>Professional</td>
											<td>29,860</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#B00000"></span></td>
											<td>1994</td>
											<td>25.3</td>
										</tr>
										<tr>
											<td id="23257514">Huanghai</td>
											<td><img src="modules/fmsdb/img/flags/s/CHN.gif" alt="China">  CHN</td>
											<td>First Division</td>
											<td>346K</td>
											<td>Professional</td>
											<td>45,000</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>2012</td>
											<td>27.4</td>
										</tr>
										<tr>
											<td id="23295502">Huaxia Xingfu</td>
											<td><img src="modules/fmsdb/img/flags/s/CHN.gif" alt="China">  CHN</td>
											<td>Super League</td>
											<td>14M</td>
											<td>Professional</td>
											<td>35,000</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#E00000"></span></td>
											<td>2010</td>
											<td>26.4</td>
										</tr>
										<tr>
											<td id="131169">Jiangsu</td>
											<td><img src="modules/fmsdb/img/flags/s/CHN.gif" alt="China">  CHN</td>
											<td>Super League</td>
											<td>17M</td>
											<td>Professional</td>
											<td>61,443</td>
											<td><span class="label" style="background:#F8F000"></span> <span class="label" style="background:#0030A0"></span></td>
											<td>2000</td>
											<td>25.8</td>
										</tr>
										<tr>
											<td id="128051">Liaoning</td>
											<td><img src="modules/fmsdb/img/flags/s/CHN.gif" alt="China">  CHN</td>
											<td>Super League</td>
											<td>461K</td>
											<td>Professional</td>
											<td>60,000</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#E00000"></span></td>
											<td>1995</td>
											<td>27.7</td>
										</tr>
										<tr>
											<td id="23199255">Meizhou</td>
											<td><img src="modules/fmsdb/img/flags/s/CHN.gif" alt="China">  CHN</td>
											<td>First Division</td>
											<td>230K</td>
											<td>Professional</td>
											<td>15,000</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#E00000"></span></td>
											<td>2013</td>
											<td>27.5</td>
										</tr>
										<tr>
											<td id="412">Qingdao</td>
											<td><img src="modules/fmsdb/img/flags/s/CHN.gif" alt="China">  CHN</td>
											<td>First Division</td>
											<td>115K</td>
											<td>Professional</td>
											<td>23,000</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#F85000"></span></td>
											<td>1993</td>
											<td>26.7</td>
										</tr>
										<tr>
											<td id="23325084">Quanjian</td>
											<td><img src="modules/fmsdb/img/flags/s/CHN.gif" alt="China">  CHN</td>
											<td>First Division</td>
											<td>9M</td>
											<td>Professional</td>
											<td>30,000</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#A0C8F0"></span></td>
											<td>2007</td>
											<td>27.4</td>
										</tr>
										<tr>
											<td id="23172080">Renhe</td>
											<td><img src="modules/fmsdb/img/flags/s/CHN.gif" alt="China">  CHN</td>
											<td>First Division</td>
											<td>3M</td>
											<td>Professional</td>
											<td>33,000</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F88000"></span></td>
											<td>0</td>
											<td>28.5</td>
										</tr>
										<tr>
											<td id="116403">Shandong</td>
											<td><img src="modules/fmsdb/img/flags/s/CHN.gif" alt="China">  CHN</td>
											<td>Super League</td>
											<td>12M</td>
											<td>Professional</td>
											<td>56,808</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#F87000"></span></td>
											<td>1998</td>
											<td>27.0</td>
										</tr>
										<tr>
											<td id="23292170">Shanggang</td>
											<td><img src="modules/fmsdb/img/flags/s/CHN.gif" alt="China">  CHN</td>
											<td>Super League</td>
											<td>9M</td>
											<td>Professional</td>
											<td>56,842</td>
											<td><span class="label" style="background:#901000"></span> <span class="label" style="background:#E00000"></span></td>
											<td>2005</td>
											<td>25.5</td>
										</tr>
										<tr>
											<td id="414">Shenhua</td>
											<td><img src="modules/fmsdb/img/flags/s/CHN.gif" alt="China">  CHN</td>
											<td>Super League</td>
											<td>691K</td>
											<td>Professional</td>
											<td>33,060</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#0050D0"></span></td>
											<td>1993</td>
											<td>28.1</td>
										</tr>
										<tr>
											<td id="23176734">Shenxin</td>
											<td><img src="modules/fmsdb/img/flags/s/CHN.gif" alt="China">  CHN</td>
											<td>First Division</td>
											<td>346K</td>
											<td>Professional</td>
											<td>30,000</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#F8F038"></span></td>
											<td>2004</td>
											<td>25.1</td>
										</tr>
										<tr>
											<td id="115942">Shenzhen</td>
											<td><img src="modules/fmsdb/img/flags/s/CHN.gif" alt="China">  CHN</td>
											<td>First Division</td>
											<td>346K</td>
											<td>Professional</td>
											<td>33,000</td>
											<td><span class="label" style="background:#C0C8C8"></span> <span class="label" style="background:#2070B0"></span></td>
											<td>1994</td>
											<td>27.8</td>
										</tr>
										<tr>
											<td id="416">Tianjin</td>
											<td><img src="modules/fmsdb/img/flags/s/CHN.gif" alt="China">  CHN</td>
											<td>Super League</td>
											<td>6M</td>
											<td>Professional</td>
											<td>60,000</td>
											<td><span class="label" style="background:#501080"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1998</td>
											<td>27.0</td>
										</tr>
										<tr>
											<td id="23245287">Tianshan</td>
											<td><img src="modules/fmsdb/img/flags/s/CHN.gif" alt="China">  CHN</td>
											<td>First Division</td>
											<td>12K</td>
											<td>Professional</td>
											<td>45,000</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#008030"></span></td>
											<td>2012</td>
											<td>26.8</td>
										</tr>
										<tr>
											<td id="23165273">Wuhan</td>
											<td><img src="modules/fmsdb/img/flags/s/CHN.gif" alt="China">  CHN</td>
											<td>First Division</td>
											<td>230K</td>
											<td>Professional</td>
											<td>32,203</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F84000"></span></td>
											<td>2009</td>
											<td>26.7</td>
										</tr>
										<tr>
											<td id="23025595">Xiangtao</td>
											<td><img src="modules/fmsdb/img/flags/s/CHN.gif" alt="China">  CHN</td>
											<td>First Division</td>
											<td>58K</td>
											<td>Professional</td>
											<td>30,000</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#E00000"></span></td>
											<td>2007</td>
											<td>27.1</td>
										</tr>
										<tr>
											<td id="115946">Yanbian</td>
											<td><img src="modules/fmsdb/img/flags/s/CHN.gif" alt="China">  CHN</td>
											<td>Super League</td>
											<td>806K</td>
											<td>Professional</td>
											<td>30,000</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#E00000"></span></td>
											<td>1994</td>
											<td>25.7</td>
										</tr>
										<tr>
											<td id="23325085">Yifang</td>
											<td><img src="modules/fmsdb/img/flags/s/CHN.gif" alt="China">  CHN</td>
											<td>First Division</td>
											<td>806K</td>
											<td>Professional</td>
											<td>60,000</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#0030A0"></span></td>
											<td>2009</td>
											<td>25.9</td>
										</tr>
										<tr>
											<td id="131225">Yiteng</td>
											<td><img src="modules/fmsdb/img/flags/s/CHN.gif" alt="China">  CHN</td>
											<td>First Division</td>
											<td>35K</td>
											<td>Professional</td>
											<td>40,000</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#0050D0"></span></td>
											<td>1994</td>
											<td>27.2</td>
										</tr>
										<tr>
											<td id="23194491">Yongchang</td>
											<td><img src="modules/fmsdb/img/flags/s/CHN.gif" alt="China">  CHN</td>
											<td>Super League</td>
											<td>2M</td>
											<td>Professional</td>
											<td>30,000</td>
											<td><span class="label" style="background:#F8B000"></span> <span class="label" style="background:#002060"></span></td>
											<td>2012</td>
											<td>28.2</td>
										</tr>
										<tr>
											<td id="23025593">Zhicheng</td>
											<td><img src="modules/fmsdb/img/flags/s/CHN.gif" alt="China">  CHN</td>
											<td>First Division</td>
											<td>12K</td>
											<td>Professional</td>
											<td>52,888</td>
											<td><span class="label" style="background:#E00000"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>2005</td>
											<td>26.7</td>
										</tr>
										<tr>
											<td id="23291989">Zhongyou</td>
											<td><img src="modules/fmsdb/img/flags/s/CHN.gif" alt="China">  CHN</td>
											<td>First Division</td>
											<td>58K</td>
											<td>Professional</td>
											<td>60,000</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F8F838"></span></td>
											<td>2011</td>
											<td>26.7</td>
										</tr>
										<tr>
											<td id="309345">Alianza Petrolera</td>
											<td><img src="modules/fmsdb/img/flags/s/COL.gif" alt="Colombia">  COL</td>
											<td>First Division</td>
											<td>346K</td>
											<td>Professional</td>
											<td>10,400</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F8F000"></span></td>
											<td>1990</td>
											<td>24.7</td>
										</tr>
										<tr>
											<td id="417">America de Cali</td>
											<td><img src="modules/fmsdb/img/flags/s/COL.gif" alt="Colombia">  COL</td>
											<td>Second Division</td>
											<td>538K</td>
											<td>Professional</td>
											<td>38,648</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#E00000"></span></td>
											<td>1927</td>
											<td>28.6</td>
										</tr>
										<tr>
											<td id="2200063">Atletico F.C.</td>
											<td><img src="modules/fmsdb/img/flags/s/COL.gif" alt="Colombia">  COL</td>
											<td>Second Division</td>
											<td>138K</td>
											<td>Professional</td>
											<td>38,648</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>2005</td>
											<td>24.9</td>
										</tr>
										<tr>
											<td id="427">Atletico Nacional</td>
											<td><img src="modules/fmsdb/img/flags/s/COL.gif" alt="Colombia">  COL</td>
											<td>First Division</td>
											<td>4M</td>
											<td>Professional</td>
											<td>48,700</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#00A030"></span></td>
											<td>1951</td>
											<td>27.2</td>
										</tr>
										<tr>
											<td id="5261738">Barranquilla F.C.</td>
											<td><img src="modules/fmsdb/img/flags/s/COL.gif" alt="Colombia">  COL</td>
											<td>Second Division</td>
											<td>161K</td>
											<td>Professional</td>
											<td>20,000</td>
											<td><span class="label" style="background:#008030"></span> <span class="label" style="background:#E00000"></span></td>
											<td>2005</td>
											<td>21.7</td>
										</tr>
										<tr>
											<td id="309353">Bogota F.C.</td>
											<td><img src="modules/fmsdb/img/flags/s/COL.gif" alt="Colombia">  COL</td>
											<td>Second Division</td>
											<td>196K</td>
											<td>Professional</td>
											<td>12,000</td>
											<td><span class="label" style="background:#E00000"></span> <span class="label" style="background:#F8F000"></span></td>
											<td>2003</td>
											<td>21.3</td>
										</tr>
										<tr>
											<td id="5260325">Boyaca Chico F.C.</td>
											<td><img src="modules/fmsdb/img/flags/s/COL.gif" alt="Colombia">  COL</td>
											<td>First Division</td>
											<td>446K</td>
											<td>Professional</td>
											<td>30,000</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F860A8"></span></td>
											<td>2002</td>
											<td>27.3</td>
										</tr>
										<tr>
											<td id="130802">Bucaramanga</td>
											<td><img src="modules/fmsdb/img/flags/s/COL.gif" alt="Colombia">  COL</td>
											<td>First Division</td>
											<td>346K</td>
											<td>Professional</td>
											<td>30,000</td>
											<td><span class="label" style="background:#00A030"></span> <span class="label" style="background:#F8F000"></span></td>
											<td>1949</td>
											<td>27.8</td>
										</tr>
										<tr>
											<td id="312">Cortulua</td>
											<td><img src="modules/fmsdb/img/flags/s/COL.gif" alt="Colombia">  COL</td>
											<td>First Division</td>
											<td>423K</td>
											<td>Professional</td>
											<td>16,000</td>
											<td><span class="label" style="background:#008030"></span> <span class="label" style="background:#E00000"></span></td>
											<td>1967</td>
											<td>23.5</td>
										</tr>
										<tr>
											<td id="309346">Cucuta Deportivo</td>
											<td><img src="modules/fmsdb/img/flags/s/COL.gif" alt="Colombia">  COL</td>
											<td>Second Division</td>
											<td>438K</td>
											<td>Professional</td>
											<td>45,000</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#E00000"></span></td>
											<td>1924</td>
											<td>25.7</td>
										</tr>
										<tr>
											<td id="421">Deportivo Cali</td>
											<td><img src="modules/fmsdb/img/flags/s/COL.gif" alt="Colombia">  COL</td>
											<td>First Division</td>
											<td>3M</td>
											<td>Professional</td>
											<td>52,000</td>
											<td><span class="label" style="background:#008030"></span> <span class="label" style="background:#108830"></span></td>
											<td>1912</td>
											<td>25.7</td>
										</tr>
										<tr>
											<td id="120936">Envigado F.C.</td>
											<td><img src="modules/fmsdb/img/flags/s/COL.gif" alt="Colombia">  COL</td>
											<td>First Division</td>
											<td>607K</td>
											<td>Professional</td>
											<td>11,000</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#F88000"></span></td>
											<td>1989</td>
											<td>22.8</td>
										</tr>
										<tr>
											<td id="76019314">Fortaleza F.C.</td>
											<td><img src="modules/fmsdb/img/flags/s/COL.gif" alt="Colombia">  COL</td>
											<td>First Division</td>
											<td>346K</td>
											<td>Professional</td>
											<td>10,000</td>
											<td><span class="label" style="background:#082040"></span> <span class="label" style="background:#E00000"></span></td>
											<td>2011</td>
											<td>26.2</td>
										</tr>
										<tr>
											<td id="130804">Huila</td>
											<td><img src="modules/fmsdb/img/flags/s/COL.gif" alt="Colombia">  COL</td>
											<td>First Division</td>
											<td>538K</td>
											<td>Professional</td>
											<td>27,000</td>
											<td><span class="label" style="background:#008030"></span> <span class="label" style="background:#F8F000"></span></td>
											<td>1990</td>
											<td>24.3</td>
										</tr>
										<tr>
											<td id="76034968">Jaguares (COL)</td>
											<td><img src="modules/fmsdb/img/flags/s/COL.gif" alt="Colombia">  COL</td>
											<td>First Division</td>
											<td>423K</td>
											<td>Professional</td>
											<td>8,000</td>
											<td><span class="label" style="background:#60C0F8"></span> <span class="label" style="background:#0078F8"></span></td>
											<td>2012</td>
											<td>26.8</td>
										</tr>
										<tr>
											<td id="419">Junior</td>
											<td><img src="modules/fmsdb/img/flags/s/COL.gif" alt="Colombia">  COL</td>
											<td>First Division</td>
											<td>3M</td>
											<td>Professional</td>
											<td>49,612</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#E00000"></span></td>
											<td>1924</td>
											<td>27.1</td>
										</tr>
										<tr>
											<td id="5261741">La Equidad</td>
											<td><img src="modules/fmsdb/img/flags/s/COL.gif" alt="Colombia">  COL</td>
											<td>First Division</td>
											<td>538K</td>
											<td>Professional</td>
											<td>10,000</td>
											<td><span class="label" style="background:#80E030"></span> <span class="label" style="background:#008030"></span></td>
											<td>1982</td>
											<td>26.2</td>
										</tr>
										<tr>
											<td id="309348">Leones F.C.</td>
											<td><img src="modules/fmsdb/img/flags/s/COL.gif" alt="Colombia">  COL</td>
											<td>Second Division</td>
											<td>192K</td>
											<td>Professional</td>
											<td>12,000</td>
											<td><span class="label" style="background:#00A030"></span> <span class="label" style="background:#F8F000"></span></td>
											<td>1957</td>
											<td>22.4</td>
										</tr>
										<tr>
											<td id="76033284">Llaneros F.C.</td>
											<td><img src="modules/fmsdb/img/flags/s/COL.gif" alt="Colombia">  COL</td>
											<td>Second Division</td>
											<td>177K</td>
											<td>Professional</td>
											<td>15,000</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>2012</td>
											<td>23.5</td>
										</tr>
										<tr>
											<td id="425">Medellin</td>
											<td><img src="modules/fmsdb/img/flags/s/COL.gif" alt="Colombia">  COL</td>
											<td>First Division</td>
											<td>3M</td>
											<td>Professional</td>
											<td>48,700</td>
											<td><span class="label" style="background:#101050"></span> <span class="label" style="background:#E00000"></span></td>
											<td>1914</td>
											<td>26.2</td>
										</tr>
										<tr>
											<td id="426">Millonarios</td>
											<td><img src="modules/fmsdb/img/flags/s/COL.gif" alt="Colombia">  COL</td>
											<td>First Division</td>
											<td>2M</td>
											<td>Professional</td>
											<td>40,312</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#0050D0"></span></td>
											<td>1946</td>
											<td>27.3</td>
										</tr>
										<tr>
											<td id="420">Once Caldas</td>
											<td><img src="modules/fmsdb/img/flags/s/COL.gif" alt="Colombia">  COL</td>
											<td>First Division</td>
											<td>845K</td>
											<td>Professional</td>
											<td>28,678</td>
											<td><span class="label" style="background:#E00000"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1961</td>
											<td>26.1</td>
										</tr>
										<tr>
											<td id="76045729">Orsomarso S.C.</td>
											<td><img src="modules/fmsdb/img/flags/s/COL.gif" alt="Colombia">  COL</td>
											<td>Second Division</td>
											<td>146K</td>
											<td>Professional</td>
											<td>9,000</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#0050D0"></span></td>
											<td>2012</td>
											<td>25.2</td>
										</tr>
										<tr>
											<td id="130800">Pasto</td>
											<td><img src="modules/fmsdb/img/flags/s/COL.gif" alt="Colombia">  COL</td>
											<td>First Division</td>
											<td>692K</td>
											<td>Professional</td>
											<td>28,400</td>
											<td><span class="label" style="background:#E00000"></span> <span class="label" style="background:#0030A0"></span></td>
											<td>1949</td>
											<td>26.8</td>
										</tr>
										<tr>
											<td id="5261740">Patriotas Boyaca</td>
											<td><img src="modules/fmsdb/img/flags/s/COL.gif" alt="Colombia">  COL</td>
											<td>First Division</td>
											<td>538K</td>
											<td>Professional</td>
											<td>30,000</td>
											<td><span class="label" style="background:#E00000"></span> <span class="label" style="background:#E00000"></span></td>
											<td>2003</td>
											<td>25.4</td>
										</tr>
										<tr>
											<td id="308516">Pereira</td>
											<td><img src="modules/fmsdb/img/flags/s/COL.gif" alt="Colombia">  COL</td>
											<td>Second Division</td>
											<td>330K</td>
											<td>Professional</td>
											<td>30,297</td>
											<td><span class="label" style="background:#E00000"></span> <span class="label" style="background:#F8F000"></span></td>
											<td>1944</td>
											<td>28.0</td>
										</tr>
										<tr>
											<td id="130803">Quindio</td>
											<td><img src="modules/fmsdb/img/flags/s/COL.gif" alt="Colombia">  COL</td>
											<td>Second Division</td>
											<td>254K</td>
											<td>Professional</td>
											<td>21,900</td>
											<td><span class="label" style="background:#00A030"></span> <span class="label" style="background:#00A030"></span></td>
											<td>1951</td>
											<td>25.9</td>
										</tr>
										<tr>
											<td id="130801">Real Cartagena</td>
											<td><img src="modules/fmsdb/img/flags/s/COL.gif" alt="Colombia">  COL</td>
											<td>Second Division</td>
											<td>269K</td>
											<td>Professional</td>
											<td>20,000</td>
											<td><span class="label" style="background:#108830"></span> <span class="label" style="background:#F8F000"></span></td>
											<td>1971</td>
											<td>28.0</td>
										</tr>
										<tr>
											<td id="76003535">Real Santander</td>
											<td><img src="modules/fmsdb/img/flags/s/COL.gif" alt="Colombia">  COL</td>
											<td>Second Division</td>
											<td>138K</td>
											<td>Professional</td>
											<td>12,000</td>
											<td><span class="label" style="background:#0078F8"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>2006</td>
											<td>23.8</td>
										</tr>
										<tr>
											<td id="8830831">Rionegro Aguilas</td>
											<td><img src="modules/fmsdb/img/flags/s/COL.gif" alt="Colombia">  COL</td>
											<td>First Division</td>
											<td>400K</td>
											<td>Professional</td>
											<td>14,000</td>
											<td><span class="label" style="background:#F00000"></span> <span class="label" style="background:#C00008"></span></td>
											<td>2008</td>
											<td>27.3</td>
										</tr>
										<tr>
											<td id="423">Santa Fe</td>
											<td><img src="modules/fmsdb/img/flags/s/COL.gif" alt="Colombia">  COL</td>
											<td>First Division</td>
											<td>3M</td>
											<td>Professional</td>
											<td>40,312</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#E00000"></span></td>
											<td>1941</td>
											<td>26.5</td>
										</tr>
										<tr>
											<td id="5261737">Tigres F.C.</td>
											<td><img src="modules/fmsdb/img/flags/s/COL.gif" alt="Colombia">  COL</td>
											<td>Second Division</td>
											<td>138K</td>
											<td>Professional</td>
											<td>5,000</td>
											<td><span class="label" style="background:#B0C0E0"></span> <span class="label" style="background:#708090"></span></td>
											<td>1997</td>
											<td>24.9</td>
										</tr>
										<tr>
											<td id="429">Tolima</td>
											<td><img src="modules/fmsdb/img/flags/s/COL.gif" alt="Colombia">  COL</td>
											<td>First Division</td>
											<td>730K</td>
											<td>Professional</td>
											<td>26,000</td>
											<td><span class="label" style="background:#D8B028"></span> <span class="label" style="background:#701030"></span></td>
											<td>1954</td>
											<td>26.7</td>
										</tr>
										<tr>
											<td id="104386">Union Magdalena</td>
											<td><img src="modules/fmsdb/img/flags/s/COL.gif" alt="Colombia">  COL</td>
											<td>Second Division</td>
											<td>246K</td>
											<td>Professional</td>
											<td>4,500</td>
											<td><span class="label" style="background:#E00000"></span> <span class="label" style="background:#0030A0"></span></td>
											<td>1953</td>
											<td>26.6</td>
										</tr>
										<tr>
											<td id="5261646">Universitario Popayan</td>
											<td><img src="modules/fmsdb/img/flags/s/COL.gif" alt="Colombia">  COL</td>
											<td>Second Division</td>
											<td>154K</td>
											<td>Professional</td>
											<td>5,000</td>
											<td><span class="label" style="background:#E00000"></span> <span class="label" style="background:#0050D0"></span></td>
											<td>2012</td>
											<td>23.3</td>
										</tr>
										<tr>
											<td id="8830832">Valledupar F.C.</td>
											<td><img src="modules/fmsdb/img/flags/s/COL.gif" alt="Colombia">  COL</td>
											<td>Second Division</td>
											<td>146K</td>
											<td>Professional</td>
											<td>10,000</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#108048"></span></td>
											<td>2003</td>
											<td>25.7</td>
										</tr>
										<tr>
											<td id="430">Cibalia</td>
											<td><img src="modules/fmsdb/img/flags/s/CRO.gif" alt="Croatia">  CRO</td>
											<td>First League</td>
											<td>0</td>
											<td>Professional</td>
											<td>10,000</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#60C0F8"></span></td>
											<td>1919</td>
											<td>23.0</td>
										</tr>
										<tr>
											<td id="432">Dinamo</td>
											<td><img src="modules/fmsdb/img/flags/s/CRO.gif" alt="Croatia">  CRO</td>
											<td>First League</td>
											<td>2M</td>
											<td>Professional</td>
											<td>35,123</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#0070C0"></span></td>
											<td>1911</td>
											<td>24.1</td>
										</tr>
										<tr>
											<td id="661027">Dugopolje</td>
											<td><img src="modules/fmsdb/img/flags/s/CRO.gif" alt="Croatia">  CRO</td>
											<td>Second League</td>
											<td>0</td>
											<td>Professional</td>
											<td>5,200</td>
											<td><span class="label" style="background:#D8B028"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1952</td>
											<td>21.4</td>
										</tr>
										<tr>
											<td id="433">Hajduk</td>
											<td><img src="modules/fmsdb/img/flags/s/CRO.gif" alt="Croatia">  CRO</td>
											<td>First League</td>
											<td>129K</td>
											<td>Professional</td>
											<td>34,448</td>
											<td><span class="label" style="background:#0030A0"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1911</td>
											<td>22.6</td>
										</tr>
										<tr>
											<td id="24013516">HNK Gorica</td>
											<td><img src="modules/fmsdb/img/flags/s/CRO.gif" alt="Croatia">  CRO</td>
											<td>Second League</td>
											<td>0</td>
											<td>Professional</td>
											<td>8,000</td>
											<td><span class="label" style="background:#303030"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>2009</td>
											<td>23.5</td>
										</tr>
										<tr>
											<td id="1300241">Hr. Dragovoljac</td>
											<td><img src="modules/fmsdb/img/flags/s/CRO.gif" alt="Croatia">  CRO</td>
											<td>Second League</td>
											<td>0</td>
											<td>Professional</td>
											<td>5,000</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#000000"></span></td>
											<td>1994</td>
											<td>23.6</td>
										</tr>
										<tr>
											<td id="129872">Imotski</td>
											<td><img src="modules/fmsdb/img/flags/s/CRO.gif" alt="Croatia">  CRO</td>
											<td>Second League</td>
											<td>0</td>
											<td>Semi-Professional</td>
											<td>4,000</td>
											<td><span class="label" style="background:#101010"></span> <span class="label" style="background:#E00000"></span></td>
											<td>1991</td>
											<td>24.4</td>
										</tr>
										<tr>
											<td id="659403">Inter Zapresic</td>
											<td><img src="modules/fmsdb/img/flags/s/CRO.gif" alt="Croatia">  CRO</td>
											<td>First League</td>
											<td>86K</td>
											<td>Professional</td>
											<td>5,528</td>
											<td><span class="label" style="background:#0050D0"></span> <span class="label" style="background:#F8F000"></span></td>
											<td>1929</td>
											<td>22.8</td>
										</tr>
										<tr>
											<td id="662735">Istra 1961</td>
											<td><img src="modules/fmsdb/img/flags/s/CRO.gif" alt="Croatia">  CRO</td>
											<td>First League</td>
											<td>43K</td>
											<td>Professional</td>
											<td>9,200</td>
											<td><span class="label" style="background:#181818"></span> <span class="label" style="background:#E0F810"></span></td>
											<td>1961</td>
											<td>24.1</td>
										</tr>
										<tr>
											<td id="129859">Lokomotiva</td>
											<td><img src="modules/fmsdb/img/flags/s/CRO.gif" alt="Croatia">  CRO</td>
											<td>First League</td>
											<td>43K</td>
											<td>Professional</td>
											<td>8,850</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#2850A0"></span></td>
											<td>1914</td>
											<td>21.0</td>
										</tr>
										<tr>
											<td id="653229">Lucko</td>
											<td><img src="modules/fmsdb/img/flags/s/CRO.gif" alt="Croatia">  CRO</td>
											<td>Second League</td>
											<td>0</td>
											<td>Professional</td>
											<td>1,500</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1931</td>
											<td>21.7</td>
										</tr>
										<tr>
											<td id="24021033">Novigrad</td>
											<td><img src="modules/fmsdb/img/flags/s/CRO.gif" alt="Croatia">  CRO</td>
											<td>Second League</td>
											<td>420K</td>
											<td>Semi-Professional</td>
											<td>1,000</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#E00000"></span></td>
											<td>0</td>
											<td>23.4</td>
										</tr>
										<tr>
											<td id="440">Osijek</td>
											<td><img src="modules/fmsdb/img/flags/s/CRO.gif" alt="Croatia">  CRO</td>
											<td>First League</td>
											<td>861K</td>
											<td>Professional</td>
											<td>19,500</td>
											<td><span class="label" style="background:#2850A0"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1947</td>
											<td>26.1</td>
										</tr>
										<tr>
											<td id="441">Rijeka</td>
											<td><img src="modules/fmsdb/img/flags/s/CRO.gif" alt="Croatia">  CRO</td>
											<td>First League</td>
											<td>1M</td>
											<td>Professional</td>
											<td>8,000</td>
											<td><span class="label" style="background:#20B0F0"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1946</td>
											<td>24.1</td>
										</tr>
										<tr>
											<td id="658353">Rudes</td>
											<td><img src="modules/fmsdb/img/flags/s/CRO.gif" alt="Croatia">  CRO</td>
											<td>Second League</td>
											<td>0</td>
											<td>Semi-Professional</td>
											<td>3,000</td>
											<td><span class="label" style="background:#901000"></span> <span class="label" style="background:#002080"></span></td>
											<td>1957</td>
											<td>22.9</td>
										</tr>
										<tr>
											<td id="24014012">Sesvete</td>
											<td><img src="modules/fmsdb/img/flags/s/CRO.gif" alt="Croatia">  CRO</td>
											<td>Second League</td>
											<td>0</td>
											<td>Professional</td>
											<td>1,000</td>
											<td><span class="label" style="background:#E00000"></span> <span class="label" style="background:#000000"></span></td>
											<td>1941</td>
											<td>22.6</td>
										</tr>
										<tr>
											<td id="442">Sibenik</td>
											<td><img src="modules/fmsdb/img/flags/s/CRO.gif" alt="Croatia">  CRO</td>
											<td>Second League</td>
											<td>0</td>
											<td>Professional</td>
											<td>5,500</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F88000"></span></td>
											<td>1932</td>
											<td>23.1</td>
										</tr>
										<tr>
											<td id="106749">Slaven Belupo</td>
											<td><img src="modules/fmsdb/img/flags/s/CRO.gif" alt="Croatia">  CRO</td>
											<td>First League</td>
											<td>43K</td>
											<td>Professional</td>
											<td>3,134</td>
											<td><span class="label" style="background:#002060"></span> <span class="label" style="background:#0030A0"></span></td>
											<td>1907</td>
											<td>24.2</td>
										</tr>
										<tr>
											<td id="126423">Solin</td>
											<td><img src="modules/fmsdb/img/flags/s/CRO.gif" alt="Croatia">  CRO</td>
											<td>Second League</td>
											<td>0</td>
											<td>Semi-Professional</td>
											<td>5,000</td>
											<td><span class="label" style="background:#D0C090"></span> <span class="label" style="background:#0030A0"></span></td>
											<td>1919</td>
											<td>22.7</td>
										</tr>
										<tr>
											<td id="126424">Split</td>
											<td><img src="modules/fmsdb/img/flags/s/CRO.gif" alt="Croatia">  CRO</td>
											<td>First League</td>
											<td>172K</td>
											<td>Professional</td>
											<td>4,075</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#C80000"></span></td>
											<td>1912</td>
											<td>22.6</td>
										</tr>
										<tr>
											<td id="444">Zagreb</td>
											<td><img src="modules/fmsdb/img/flags/s/CRO.gif" alt="Croatia">  CRO</td>
											<td>Second League</td>
											<td>17K</td>
											<td>Professional</td>
											<td>8,850</td>
											<td><span class="label" style="background:#E00000"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1903</td>
											<td>21.6</td>
										</tr>
										<tr>
											<td id="1300301">Banik Ostrava</td>
											<td><img src="modules/fmsdb/img/flags/s/CZE.gif" alt="Czech Republic">  CZE</td>
											<td>Second Division</td>
											<td>239K</td>
											<td>Professional</td>
											<td>15,275</td>
											<td><span class="label" style="background:#0050D0"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1922</td>
											<td>24.2</td>
										</tr>
										<tr>
											<td id="463">Bohemians 1905</td>
											<td><img src="modules/fmsdb/img/flags/s/CZE.gif" alt="Czech Republic">  CZE</td>
											<td>First Division</td>
											<td>239K</td>
											<td>Professional</td>
											<td>5,000</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#006030"></span></td>
											<td>1905</td>
											<td>26.0</td>
										</tr>
										<tr>
											<td id="465">Brno</td>
											<td><img src="modules/fmsdb/img/flags/s/CZE.gif" alt="Czech Republic">  CZE</td>
											<td>First Division</td>
											<td>239K</td>
											<td>Professional</td>
											<td>12,550</td>
											<td><span class="label" style="background:#000030"></span> <span class="label" style="background:#E00000"></span></td>
											<td>1913</td>
											<td>25.7</td>
										</tr>
										<tr>
											<td id="470">Ceske Budejovice</td>
											<td><img src="modules/fmsdb/img/flags/s/CZE.gif" alt="Czech Republic">  CZE</td>
											<td>Second Division</td>
											<td>239K</td>
											<td>Professional</td>
											<td>6,681</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#000000"></span></td>
											<td>1905</td>
											<td>24.6</td>
										</tr>
										<tr>
											<td id="5640780">Dukla Prague</td>
											<td><img src="modules/fmsdb/img/flags/s/CZE.gif" alt="Czech Republic">  CZE</td>
											<td>First Division</td>
											<td>559K</td>
											<td>Professional</td>
											<td>18,000</td>
											<td><span class="label" style="background:#F8F000"></span> <span class="label" style="background:#F8F000"></span></td>
											<td>1948</td>
											<td>25.0</td>
										</tr>
										<tr>
											<td id="136181">Frydek-Mistek</td>
											<td><img src="modules/fmsdb/img/flags/s/CZE.gif" alt="Czech Republic">  CZE</td>
											<td>Second Division</td>
											<td>160K</td>
											<td>Professional</td>
											<td>12,400</td>
											<td><span class="label" style="background:#0050D0"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1919</td>
											<td>24.6</td>
										</tr>
										<tr>
											<td id="472">Hradec Kralove</td>
											<td><img src="modules/fmsdb/img/flags/s/CZE.gif" alt="Czech Republic">  CZE</td>
											<td>First Division</td>
											<td>239K</td>
											<td>Professional</td>
											<td>5,000</td>
											<td><span class="label" style="background:#E8E8E8"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1905</td>
											<td>25.6</td>
										</tr>
										<tr>
											<td id="468">Jablonec</td>
											<td><img src="modules/fmsdb/img/flags/s/CZE.gif" alt="Czech Republic">  CZE</td>
											<td>First Division</td>
											<td>559K</td>
											<td>Professional</td>
											<td>6,108</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#006030"></span></td>
											<td>1945</td>
											<td>24.5</td>
										</tr>
										<tr>
											<td id="136153">Jihlava</td>
											<td><img src="modules/fmsdb/img/flags/s/CZE.gif" alt="Czech Republic">  CZE</td>
											<td>First Division</td>
											<td>399K</td>
											<td>Professional</td>
											<td>4,155</td>
											<td><span class="label" style="background:#0020F8"></span> <span class="label" style="background:#002080"></span></td>
											<td>1948</td>
											<td>25.2</td>
										</tr>
										<tr>
											<td id="1300307">Karvina</td>
											<td><img src="modules/fmsdb/img/flags/s/CZE.gif" alt="Czech Republic">  CZE</td>
											<td>First Division</td>
											<td>239K</td>
											<td>Professional</td>
											<td>4,833</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1920</td>
											<td>24.8</td>
										</tr>
										<tr>
											<td id="136156">Mlada Boleslav</td>
											<td><img src="modules/fmsdb/img/flags/s/CZE.gif" alt="Czech Republic">  CZE</td>
											<td>First Division</td>
											<td>559K</td>
											<td>Professional</td>
											<td>5,000</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1902</td>
											<td>26.8</td>
										</tr>
										<tr>
											<td id="130859">Opava</td>
											<td><img src="modules/fmsdb/img/flags/s/CZE.gif" alt="Czech Republic">  CZE</td>
											<td>Second Division</td>
											<td>160K</td>
											<td>Professional</td>
											<td>7,724</td>
											<td><span class="label" style="background:#F8F000"></span> <span class="label" style="background:#002060"></span></td>
											<td>1907</td>
											<td>26.3</td>
										</tr>
										<tr>
											<td id="5647950">Pardubice</td>
											<td><img src="modules/fmsdb/img/flags/s/CZE.gif" alt="Czech Republic">  CZE</td>
											<td>Second Division</td>
											<td>160K</td>
											<td>Professional</td>
											<td>3,000</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#E00000"></span></td>
											<td>2008</td>
											<td>22.5</td>
										</tr>
										<tr>
											<td id="116156">Pribram</td>
											<td><img src="modules/fmsdb/img/flags/s/CZE.gif" alt="Czech Republic">  CZE</td>
											<td>First Division</td>
											<td>239K</td>
											<td>Professional</td>
											<td>9,100</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
											<td>1948</td>
											<td>25.7</td>
										</tr>
										<tr>
											<td id="136158">Prostejov</td>
											<td><img src="modules/fmsdb/img/flags/s/CZE.gif" alt="Czech Republic">  CZE</td>
											<td>Second Division</td>
											<td>80K</td>
											<td>Professional</td>
											<td>3,500</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#0050D0"></span></td>
											<td>1904</td>
											<td>23.8</td>
										</tr>
										<tr>
											<td id="473">Sigma Olomouc</td>
											<td><img src="modules/fmsdb/img/flags/s/CZE.gif" alt="Czech Republic">  CZE</td>
											<td>Second Division</td>
											<td>319K</td>
											<td>Professional</td>
											<td>12,541</td>
											<td><span class="label" style="background:#0050A0"></span> <span class="label" style="background:#0050D0"></span></td>
											<td>1919</td>
											<td>24.2</td>
										</tr>
										<tr>
											<td id="474">Slavia Prague</td>
											<td><img src="modules/fmsdb/img/flags/s/CZE.gif" alt="Czech Republic">  CZE</td>
											<td>First Division</td>
											<td>2M</td>
											<td>Professional</td>
											<td>20,800</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#E00000"></span></td>
											<td>1892</td>
											<td>25.1</td>
										</tr>
										<tr>
											<td id="131289">Slovacko</td>
											<td><img src="modules/fmsdb/img/flags/s/CZE.gif" alt="Czech Republic">  CZE</td>
											<td>First Division</td>
											<td>239K</td>
											<td>Professional</td>
											<td>8,000</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>2000</td>
											<td>24.9</td>
										</tr>
										<tr>
											<td id="475">Slovan Liberec</td>
											<td><img src="modules/fmsdb/img/flags/s/CZE.gif" alt="Czech Republic">  CZE</td>
											<td>First Division</td>
											<td>559K</td>
											<td>Professional</td>
											<td>9,900</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#0050D0"></span></td>
											<td>1958</td>
											<td>24.1</td>
										</tr>
										<tr>
											<td id="5652959">Sokolov</td>
											<td><img src="modules/fmsdb/img/flags/s/CZE.gif" alt="Czech Republic">  CZE</td>
											<td>Second Division</td>
											<td>160K</td>
											<td>Professional</td>
											<td>5,000</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F8F000"></span></td>
											<td>1948</td>
											<td>24.2</td>
										</tr>
										<tr>
											<td id="476">Sparta Prague</td>
											<td><img src="modules/fmsdb/img/flags/s/CZE.gif" alt="Czech Republic">  CZE</td>
											<td>First Division</td>
											<td>2M</td>
											<td>Professional</td>
											<td>18,994</td>
											<td><span class="label" style="background:#901000"></span> <span class="label" style="background:#B00000"></span></td>
											<td>1893</td>
											<td>26.1</td>
										</tr>
										<tr>
											<td id="136237">Taborsko</td>
											<td><img src="modules/fmsdb/img/flags/s/CZE.gif" alt="Czech Republic">  CZE</td>
											<td>Second Division</td>
											<td>239K</td>
											<td>Professional</td>
											<td>2,500</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#0050D0"></span></td>
											<td>1921</td>
											<td>26.0</td>
										</tr>
										<tr>
											<td id="1300309">Teplice</td>
											<td><img src="modules/fmsdb/img/flags/s/CZE.gif" alt="Czech Republic">  CZE</td>
											<td>First Division</td>
											<td>399K</td>
											<td>Professional</td>
											<td>18,221</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#F8F000"></span></td>
											<td>1945</td>
											<td>25.8</td>
										</tr>
										<tr>
											<td id="136157">Trinec</td>
											<td><img src="modules/fmsdb/img/flags/s/CZE.gif" alt="Czech Republic">  CZE</td>
											<td>Second Division</td>
											<td>80K</td>
											<td>Professional</td>
											<td>2,200</td>
											<td><span class="label" style="background:#E00000"></span> <span class="label" style="background:#E00000"></span></td>
											<td>1921</td>
											<td>26.0</td>
										</tr>
										<tr>
											<td id="136249">Usti nad Labem</td>
											<td><img src="modules/fmsdb/img/flags/s/CZE.gif" alt="Czech Republic">  CZE</td>
											<td>Second Division</td>
											<td>160K</td>
											<td>Professional</td>
											<td>4,000</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#0050D0"></span></td>
											<td>1927</td>
											<td>24.0</td>
										</tr>
										<tr>
											<td id="136208">Varnsdorf</td>
											<td><img src="modules/fmsdb/img/flags/s/CZE.gif" alt="Czech Republic">  CZE</td>
											<td>Second Division</td>
											<td>160K</td>
											<td>Professional</td>
											<td>2,500</td>
											<td><span class="label" style="background:#F8F080"></span> <span class="label" style="background:#F8F000"></span></td>
											<td>1938</td>
											<td>23.1</td>
										</tr>
										<tr>
											<td id="477">Viktoria Plzen</td>
											<td><img src="modules/fmsdb/img/flags/s/CZE.gif" alt="Czech Republic">  CZE</td>
											<td>First Division</td>
											<td>1M</td>
											<td>Professional</td>
											<td>11,700</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#E00000"></span></td>
											<td>1911</td>
											<td>26.3</td>
										</tr>
										<tr>
											<td id="478">Viktoria Zizkov</td>
											<td><img src="modules/fmsdb/img/flags/s/CZE.gif" alt="Czech Republic">  CZE</td>
											<td>Second Division</td>
											<td>160K</td>
											<td>Professional</td>
											<td>5,334</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#E00000"></span></td>
											<td>1903</td>
											<td>25.1</td>
										</tr>
										<tr>
											<td id="136152">Vitkovice</td>
											<td><img src="modules/fmsdb/img/flags/s/CZE.gif" alt="Czech Republic">  CZE</td>
											<td>Second Division</td>
											<td>80K</td>
											<td>Professional</td>
											<td>15,275</td>
											<td><span class="label" style="background:#0050D0"></span> <span class="label" style="background:#0050D0"></span></td>
											<td>1919</td>
											<td>24.4</td>
										</tr>
										<tr>
											<td id="25001307">Vlasim</td>
											<td><img src="modules/fmsdb/img/flags/s/CZE.gif" alt="Czech Republic">  CZE</td>
											<td>Second Division</td>
											<td>160K</td>
											<td>Professional</td>
											<td>1,200</td>
											<td><span class="label" style="background:#0050D0"></span> <span class="label" style="background:#0050D0"></span></td>
											<td>1969</td>
											<td>23.5</td>
										</tr>
										<tr>
											<td id="467">Zlin</td>
											<td><img src="modules/fmsdb/img/flags/s/CZE.gif" alt="Czech Republic">  CZE</td>
											<td>First Division</td>
											<td>239K</td>
											<td>Professional</td>
											<td>5,783</td>
											<td><span class="label" style="background:#F8F000"></span> <span class="label" style="background:#F8F000"></span></td>
											<td>1919</td>
											<td>24.5</td>
										</tr>
										<tr>
											<td id="136289">Znojmo</td>
											<td><img src="modules/fmsdb/img/flags/s/CZE.gif" alt="Czech Republic">  CZE</td>
											<td>Second Division</td>
											<td>239K</td>
											<td>Professional</td>
											<td>2,599</td>
											<td><span class="label" style="background:#0030A0"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1953</td>
											<td>24.3</td>
										</tr>
										<tr>
											<td id="483">AaB</td>
											<td><img src="modules/fmsdb/img/flags/s/DEN.gif" alt="Denmark">  DEN</td>
											<td>Superliga</td>
											<td>463K</td>
											<td>Professional</td>
											<td>13,800</td>
											<td><span class="label" style="background:#E00000"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1885</td>
											<td>23.4</td>
										</tr>
										<tr>
											<td id="925050">Aarhus Fremad</td>
											<td><img src="modules/fmsdb/img/flags/s/DEN.gif" alt="Denmark">  DEN</td>
											<td>Second Division</td>
											<td>0</td>
											<td>Amateur</td>
											<td>5,000</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
											<td>1947</td>
											<td>25.1</td>
										</tr>
										<tr>
											<td id="480">AB</td>
											<td><img src="modules/fmsdb/img/flags/s/DEN.gif" alt="Denmark">  DEN</td>
											<td>First Division</td>
											<td>0</td>
											<td>Semi-Professional</td>
											<td>13,800</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
											<td>1889</td>
											<td>24.6</td>
										</tr>
										<tr>
											<td id="481">AC Horsens</td>
											<td><img src="modules/fmsdb/img/flags/s/DEN.gif" alt="Denmark">  DEN</td>
											<td>Superliga</td>
											<td>173K</td>
											<td>Professional</td>
											<td>10,495</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F8D000"></span></td>
											<td>1915</td>
											<td>24.9</td>
										</tr>
										<tr>
											<td id="482">AGF</td>
											<td><img src="modules/fmsdb/img/flags/s/DEN.gif" alt="Denmark">  DEN</td>
											<td>Superliga</td>
											<td>116K</td>
											<td>Professional</td>
											<td>20,200</td>
											<td><span class="label" style="background:#083078"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1880</td>
											<td>24.3</td>
										</tr>
										<tr>
											<td id="2104">Avarta</td>
											<td><img src="modules/fmsdb/img/flags/s/DEN.gif" alt="Denmark">  DEN</td>
											<td>Second Division</td>
											<td>0</td>
											<td>Amateur</td>
											<td>6,000</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#009878"></span></td>
											<td>1953</td>
											<td>22.9</td>
										</tr>
										<tr>
											<td id="493">B 93</td>
											<td><img src="modules/fmsdb/img/flags/s/DEN.gif" alt="Denmark">  DEN</td>
											<td>Second Division</td>
											<td>0</td>
											<td>Semi-Professional</td>
											<td>4,400</td>
											<td><span class="label" style="background:#002060"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1893</td>
											<td>23.6</td>
										</tr>
										<tr>
											<td id="930105">Brabrand IF</td>
											<td><img src="modules/fmsdb/img/flags/s/DEN.gif" alt="Denmark">  DEN</td>
											<td>Second Division</td>
											<td>0</td>
											<td>Semi-Professional</td>
											<td>1,500</td>
											<td><span class="label" style="background:#F88000"></span> <span class="label" style="background:#005098"></span></td>
											<td>1934</td>
											<td>24.9</td>
										</tr>
										<tr>
											<td id="496">Brondby IF</td>
											<td><img src="modules/fmsdb/img/flags/s/DEN.gif" alt="Denmark">  DEN</td>
											<td>Superliga</td>
											<td>810K</td>
											<td>Professional</td>
											<td>29,000</td>
											<td><span class="label" style="background:#0030A0"></span> <span class="label" style="background:#F8F838"></span></td>
											<td>1964</td>
											<td>24.9</td>
										</tr>
										<tr>
											<td id="497">Bronshoj</td>
											<td><img src="modules/fmsdb/img/flags/s/DEN.gif" alt="Denmark">  DEN</td>
											<td>Second Division</td>
											<td>0</td>
											<td>Semi-Professional</td>
											<td>3,000</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
											<td>1919</td>
											<td>22.5</td>
										</tr>
										<tr>
											<td id="499">Dalum</td>
											<td><img src="modules/fmsdb/img/flags/s/DEN.gif" alt="Denmark">  DEN</td>
											<td>Second Division</td>
											<td>0</td>
											<td>Amateur</td>
											<td>4,000</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#E00000"></span></td>
											<td>1931</td>
											<td>25.5</td>
										</tr>
										<tr>
											<td id="502">Esbjerg fB</td>
											<td><img src="modules/fmsdb/img/flags/s/DEN.gif" alt="Denmark">  DEN</td>
											<td>Superliga</td>
											<td>231K</td>
											<td>Professional</td>
											<td>18,000</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
											<td>1924</td>
											<td>24.0</td>
										</tr>
										<tr>
											<td id="504">FC Fredericia</td>
											<td><img src="modules/fmsdb/img/flags/s/DEN.gif" alt="Denmark">  DEN</td>
											<td>First Division</td>
											<td>29K</td>
											<td>Professional</td>
											<td>4,000</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#E00000"></span></td>
											<td>1991</td>
											<td>22.6</td>
										</tr>
										<tr>
											<td id="516">FC Helsingor</td>
											<td><img src="modules/fmsdb/img/flags/s/DEN.gif" alt="Denmark">  DEN</td>
											<td>First Division</td>
											<td>0</td>
											<td>Semi-Professional</td>
											<td>4,500</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#60C0F8"></span></td>
											<td>1899</td>
											<td>24.1</td>
										</tr>
										<tr>
											<td id="505">FC Kobenhavn</td>
											<td><img src="modules/fmsdb/img/flags/s/DEN.gif" alt="Denmark">  DEN</td>
											<td>Superliga</td>
											<td>3M</td>
											<td>Professional</td>
											<td>38,076</td>
											<td><span class="label" style="background:#304078"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1992</td>
											<td>25.2</td>
										</tr>
										<tr>
											<td id="526">FC Midtjylland</td>
											<td><img src="modules/fmsdb/img/flags/s/DEN.gif" alt="Denmark">  DEN</td>
											<td>Superliga</td>
											<td>578K</td>
											<td>Professional</td>
											<td>11,500</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#E01818"></span></td>
											<td>1999</td>
											<td>24.6</td>
										</tr>
										<tr>
											<td id="932443">FC Nordsj?lland</td>
											<td><img src="modules/fmsdb/img/flags/s/DEN.gif" alt="Denmark">  DEN</td>
											<td>Superliga</td>
											<td>867K</td>
											<td>Professional</td>
											<td>10,100</td>
											<td><span class="label" style="background:#707090"></span> <span class="label" style="background:#B81018"></span></td>
											<td>1991</td>
											<td>21.9</td>
										</tr>
										<tr>
											<td id="943835">FC Roskilde</td>
											<td><img src="modules/fmsdb/img/flags/s/DEN.gif" alt="Denmark">  DEN</td>
											<td>First Division</td>
											<td>29K</td>
											<td>Semi-Professional</td>
											<td>6,000</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
											<td>1906</td>
											<td>26.2</td>
										</tr>
										<tr>
											<td id="557">FC Svendborg</td>
											<td><img src="modules/fmsdb/img/flags/s/DEN.gif" alt="Denmark">  DEN</td>
											<td>Second Division</td>
											<td>0</td>
											<td>Semi-Professional</td>
											<td>7,700</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F85000"></span></td>
											<td>1901</td>
											<td>25.9</td>
										</tr>
										<tr>
											<td id="27032607">FC Sydvest</td>
											<td><img src="modules/fmsdb/img/flags/s/DEN.gif" alt="Denmark">  DEN</td>
											<td>Second Division</td>
											<td>0</td>
											<td>Amateur</td>
											<td>1,500</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>2005</td>
											<td>24.5</td>
										</tr>
										<tr>
											<td id="933929">Fredensborg</td>
											<td><img src="modules/fmsdb/img/flags/s/DEN.gif" alt="Denmark">  DEN</td>
											<td>Second Division</td>
											<td>0</td>
											<td>Amateur</td>
											<td>2,000</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
											<td>1908</td>
											<td>25.0</td>
										</tr>
										<tr>
											<td id="507">Frem</td>
											<td><img src="modules/fmsdb/img/flags/s/DEN.gif" alt="Denmark">  DEN</td>
											<td>Second Division</td>
											<td>0</td>
											<td>Semi-Professional</td>
											<td>12,000</td>
											<td><span class="label" style="background:#002080"></span> <span class="label" style="background:#E00000"></span></td>
											<td>1886</td>
											<td>25.6</td>
										</tr>
										<tr>
											<td id="508">Fremad Amager</td>
											<td><img src="modules/fmsdb/img/flags/s/DEN.gif" alt="Denmark">  DEN</td>
											<td>First Division</td>
											<td>6K</td>
											<td>Semi-Professional</td>
											<td>7,200</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#0050D0"></span></td>
											<td>1910</td>
											<td>25.9</td>
										</tr>
										<tr>
											<td id="2112">Greve</td>
											<td><img src="modules/fmsdb/img/flags/s/DEN.gif" alt="Denmark">  DEN</td>
											<td>Second Division</td>
											<td>0</td>
											<td>Amateur</td>
											<td>7,000</td>
											<td><span class="label" style="background:#002080"></span> <span class="label" style="background:#0030A0"></span></td>
											<td>1935</td>
											<td>24.1</td>
										</tr>
										<tr>
											<td id="27035536">HB Koge</td>
											<td><img src="modules/fmsdb/img/flags/s/DEN.gif" alt="Denmark">  DEN</td>
											<td>First Division</td>
											<td>6K</td>
											<td>Semi-Professional</td>
											<td>8,000</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
											<td>2009</td>
											<td>21.1</td>
										</tr>
										<tr>
											<td id="512">HIK</td>
											<td><img src="modules/fmsdb/img/flags/s/DEN.gif" alt="Denmark">  DEN</td>
											<td>Second Division</td>
											<td>0</td>
											<td>Semi-Professional</td>
											<td>10,000</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1900</td>
											<td>22.8</td>
										</tr>
										<tr>
											<td id="930210">Hobro IK</td>
											<td><img src="modules/fmsdb/img/flags/s/DEN.gif" alt="Denmark">  DEN</td>
											<td>First Division</td>
											<td>29K</td>
											<td>Professional</td>
											<td>10,225</td>
											<td><span class="label" style="background:#002060"></span> <span class="label" style="background:#F8F000"></span></td>
											<td>1913</td>
											<td>25.5</td>
										</tr>
										<tr>
											<td id="27017889">Holb?k</td>
											<td><img src="modules/fmsdb/img/flags/s/DEN.gif" alt="Denmark">  DEN</td>
											<td>Second Division</td>
											<td>0</td>
											<td>Semi-Professional</td>
											<td>10,000</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#0050D0"></span></td>
											<td>1931</td>
											<td>22.3</td>
										</tr>
										<tr>
											<td id="524">Hvidovre IF</td>
											<td><img src="modules/fmsdb/img/flags/s/DEN.gif" alt="Denmark">  DEN</td>
											<td>Second Division</td>
											<td>0</td>
											<td>Semi-Professional</td>
											<td>1,200</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#C80000"></span></td>
											<td>1925</td>
											<td>24.2</td>
										</tr>
										<tr>
											<td id="2116">Jammerbugt FC</td>
											<td><img src="modules/fmsdb/img/flags/s/DEN.gif" alt="Denmark">  DEN</td>
											<td>Second Division</td>
											<td>0</td>
											<td>Semi-Professional</td>
											<td>6,000</td>
											<td><span class="label" style="background:#00A8E8"></span> <span class="label" style="background:#00A8E8"></span></td>
											<td>1973</td>
											<td>22.1</td>
										</tr>
										<tr>
											<td id="27010375">Kjellerup</td>
											<td><img src="modules/fmsdb/img/flags/s/DEN.gif" alt="Denmark">  DEN</td>
											<td>Second Division</td>
											<td>0</td>
											<td>Amateur</td>
											<td>1,500</td>
											<td><span class="label" style="background:#0078F8"></span> <span class="label" style="background:#F8F000"></span></td>
											<td>1907</td>
											<td>24.4</td>
										</tr>
										<tr>
											<td id="2121">Kolding IF</td>
											<td><img src="modules/fmsdb/img/flags/s/DEN.gif" alt="Denmark">  DEN</td>
											<td>Second Division</td>
											<td>0</td>
											<td>Semi-Professional</td>
											<td>12,000</td>
											<td><span class="label" style="background:#0050D0"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>0</td>
											<td>23.4</td>
										</tr>
										<tr>
											<td id="533">Lyngby</td>
											<td><img src="modules/fmsdb/img/flags/s/DEN.gif" alt="Denmark">  DEN</td>
											<td>Superliga</td>
											<td>58K</td>
											<td>Professional</td>
											<td>10,106</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
											<td>1921</td>
											<td>27.1</td>
										</tr>
										<tr>
											<td id="930181">Marienlyst</td>
											<td><img src="modules/fmsdb/img/flags/s/DEN.gif" alt="Denmark">  DEN</td>
											<td>Second Division</td>
											<td>0</td>
											<td>Amateur</td>
											<td>1,200</td>
											<td><span class="label" style="background:#E00000"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1922</td>
											<td>24.9</td>
										</tr>
										<tr>
											<td id="930248">Middelfart</td>
											<td><img src="modules/fmsdb/img/flags/s/DEN.gif" alt="Denmark">  DEN</td>
											<td>Second Division</td>
											<td>0</td>
											<td>Semi-Professional</td>
											<td>4,000</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#0078F8"></span></td>
											<td>1964</td>
											<td>22.4</td>
										</tr>
										<tr>
											<td id="541">N?sby</td>
											<td><img src="modules/fmsdb/img/flags/s/DEN.gif" alt="Denmark">  DEN</td>
											<td>Second Division</td>
											<td>0</td>
											<td>Amateur</td>
											<td>2,500</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#0050D0"></span></td>
											<td>1938</td>
											<td>25.1</td>
										</tr>
										<tr>
											<td id="542">N?stved</td>
											<td><img src="modules/fmsdb/img/flags/s/DEN.gif" alt="Denmark">  DEN</td>
											<td>First Division</td>
											<td>12K</td>
											<td>Semi-Professional</td>
											<td>17,500</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#008888"></span></td>
											<td>1939</td>
											<td>25.1</td>
										</tr>
										<tr>
											<td id="539">Nykobing FC</td>
											<td><img src="modules/fmsdb/img/flags/s/DEN.gif" alt="Denmark">  DEN</td>
											<td>First Division</td>
											<td>116K</td>
											<td>Semi-Professional</td>
											<td>10,000</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
											<td>1994</td>
											<td>25.8</td>
										</tr>
										<tr>
											<td id="545">OB</td>
											<td><img src="modules/fmsdb/img/flags/s/DEN.gif" alt="Denmark">  DEN</td>
											<td>Superliga</td>
											<td>347K</td>
											<td>Professional</td>
											<td>15,761</td>
											<td><span class="label" style="background:#2858B0"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1887</td>
											<td>23.7</td>
										</tr>
										<tr>
											<td id="930256">Odder</td>
											<td><img src="modules/fmsdb/img/flags/s/DEN.gif" alt="Denmark">  DEN</td>
											<td>Second Division</td>
											<td>0</td>
											<td>Amateur</td>
											<td>2,000</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#0050D0"></span></td>
											<td>1899</td>
											<td>23.6</td>
										</tr>
										<tr>
											<td id="930621">Randers FC</td>
											<td><img src="modules/fmsdb/img/flags/s/DEN.gif" alt="Denmark">  DEN</td>
											<td>Superliga</td>
											<td>289K</td>
											<td>Professional</td>
											<td>11,000</td>
											<td><span class="label" style="background:#101050"></span> <span class="label" style="background:#B8D8E8"></span></td>
											<td>1898</td>
											<td>24.6</td>
										</tr>
										<tr>
											<td id="551">Silkeborg IF</td>
											<td><img src="modules/fmsdb/img/flags/s/DEN.gif" alt="Denmark">  DEN</td>
											<td>Superliga</td>
											<td>116K</td>
											<td>Professional</td>
											<td>10,000</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#E00000"></span></td>
											<td>1917</td>
											<td>23.6</td>
										</tr>
										<tr>
											<td id="552">Skive IK</td>
											<td><img src="modules/fmsdb/img/flags/s/DEN.gif" alt="Denmark">  DEN</td>
											<td>First Division</td>
											<td>17K</td>
											<td>Semi-Professional</td>
											<td>5,500</td>
											<td><span class="label" style="background:#0050D0"></span> <span class="label" style="background:#F8F000"></span></td>
											<td>1901</td>
											<td>22.1</td>
										</tr>
										<tr>
											<td id="926867">SonderjyskE</td>
											<td><img src="modules/fmsdb/img/flags/s/DEN.gif" alt="Denmark">  DEN</td>
											<td>Superliga</td>
											<td>405K</td>
											<td>Professional</td>
											<td>10,000</td>
											<td><span class="label" style="background:#C0D0E0"></span> <span class="label" style="background:#D0E0E8"></span></td>
											<td>1906</td>
											<td>25.2</td>
										</tr>
										<tr>
											<td id="562">Thisted FC</td>
											<td><img src="modules/fmsdb/img/flags/s/DEN.gif" alt="Denmark">  DEN</td>
											<td>Second Division</td>
											<td>0</td>
											<td>Semi-Professional</td>
											<td>6,000</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
											<td>1904</td>
											<td>23.1</td>
										</tr>
										<tr>
											<td id="2141">Vejgaard</td>
											<td><img src="modules/fmsdb/img/flags/s/DEN.gif" alt="Denmark">  DEN</td>
											<td>Second Division</td>
											<td>0</td>
											<td>Amateur</td>
											<td>1,200</td>
											<td><span class="label" style="background:#0030A0"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>0</td>
											<td>23.7</td>
										</tr>
										<tr>
											<td id="2142">Vejle</td>
											<td><img src="modules/fmsdb/img/flags/s/DEN.gif" alt="Denmark">  DEN</td>
											<td>First Division</td>
											<td>173K</td>
											<td>Professional</td>
											<td>10,418</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#F00000"></span></td>
											<td>1891</td>
											<td>22.7</td>
										</tr>
										<tr>
											<td id="521">Vendsyssel FF</td>
											<td><img src="modules/fmsdb/img/flags/s/DEN.gif" alt="Denmark">  DEN</td>
											<td>First Division</td>
											<td>58K</td>
											<td>Professional</td>
											<td>7,500</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1886</td>
											<td>24.8</td>
										</tr>
										<tr>
											<td id="569">Viborg FF</td>
											<td><img src="modules/fmsdb/img/flags/s/DEN.gif" alt="Denmark">  DEN</td>
											<td>Superliga</td>
											<td>173K</td>
											<td>Professional</td>
											<td>9,566</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
											<td>1896</td>
											<td>26.0</td>
										</tr>
										<tr>
											<td id="27128372">VSK Aarhus</td>
											<td><img src="modules/fmsdb/img/flags/s/DEN.gif" alt="Denmark">  DEN</td>
											<td>Second Division</td>
											<td>0</td>
											<td>Amateur</td>
											<td>1,000</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
											<td>2016</td>
											<td>22.4</td>
										</tr>
										<tr>
											<td id="109210">Accrington</td>
											<td><img src="modules/fmsdb/img/flags/s/ENG.gif" alt="England">  ENG</td>
											<td>Sky Bet League Two</td>
											<td>0</td>
											<td>Professional</td>
											<td>5,070</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
											<td>1968</td>
											<td>25.5</td>
										</tr>
										<tr>
											<td id="8601358">AFC Fylde</td>
											<td><img src="modules/fmsdb/img/flags/s/ENG.gif" alt="England">  ENG</td>
											<td>Vanarama North</td>
											<td>10K</td>
											<td>Professional</td>
											<td>5,085</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1988</td>
											<td>25.5</td>
										</tr>
										<tr>
											<td id="8604272">AFC Telford</td>
											<td><img src="modules/fmsdb/img/flags/s/ENG.gif" alt="England">  ENG</td>
											<td>Vanarama North</td>
											<td>0</td>
											<td>Semi-Professional</td>
											<td>6,000</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>2004</td>
											<td>23.1</td>
										</tr>
										<tr>
											<td id="5110769">AFC Wimbledon</td>
											<td><img src="modules/fmsdb/img/flags/s/ENG.gif" alt="England">  ENG</td>
											<td>Sky Bet League One</td>
											<td>175K</td>
											<td>Professional</td>
											<td>5,027</td>
											<td><span class="label" style="background:#0050D0"></span> <span class="label" style="background:#083880"></span></td>
											<td>2002</td>
											<td>25.4</td>
										</tr>
										<tr>
											<td id="573">Aldershot</td>
											<td><img src="modules/fmsdb/img/flags/s/ENG.gif" alt="England">  ENG</td>
											<td>Vanarama National</td>
											<td>0</td>
											<td>Professional</td>
											<td>7,350</td>
											<td><span class="label" style="background:#2050B0"></span> <span class="label" style="background:#B80020"></span></td>
											<td>1992</td>
											<td>23.4</td>
										</tr>
										<tr>
											<td id="5100015">Alfreton</td>
											<td><img src="modules/fmsdb/img/flags/s/ENG.gif" alt="England">  ENG</td>
											<td>Vanarama North</td>
											<td>10K</td>
											<td>Semi-Professional</td>
											<td>3,600</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#E00000"></span></td>
											<td>1959</td>
											<td>25.1</td>
										</tr>
										<tr>
											<td id="601">Altrincham</td>
											<td><img src="modules/fmsdb/img/flags/s/ENG.gif" alt="England">  ENG</td>
											<td>Vanarama North</td>
											<td>0</td>
											<td>Semi-Professional</td>
											<td>6,085</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#E00808"></span></td>
											<td>1891</td>
											<td>26.2</td>
										</tr>
										<tr>
											<td id="602">Arsenal</td>
											<td><img src="modules/fmsdb/img/flags/s/ENG.gif" alt="England">  ENG</td>
											<td>Premier Division</td>
											<td>39M</td>
											<td>Professional</td>
											<td>60,432</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#F02010"></span></td>
											<td>1886</td>
											<td>26.1</td>
										</tr>
										<tr>
											<td id="603">Aston Villa</td>
											<td><img src="modules/fmsdb/img/flags/s/ENG.gif" alt="England">  ENG</td>
											<td>Sky Bet Championship</td>
											<td>0</td>
											<td>Professional</td>
											<td>42,785</td>
											<td><span class="label" style="background:#98D0F0"></span> <span class="label" style="background:#882840"></span></td>
											<td>1874</td>
											<td>26.3</td>
										</tr>
										<tr>
											<td id="605">Barnet</td>
											<td><img src="modules/fmsdb/img/flags/s/ENG.gif" alt="England">  ENG</td>
											<td>Sky Bet League Two</td>
											<td>10K</td>
											<td>Professional</td>
											<td>5,233</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
											<td>1888</td>
											<td>25.5</td>
										</tr>
										<tr>
											<td id="606">Barnsley</td>
											<td><img src="modules/fmsdb/img/flags/s/ENG.gif" alt="England">  ENG</td>
											<td>Sky Bet Championship</td>
											<td>1M</td>
											<td>Professional</td>
											<td>23,287</td>
											<td><span class="label" style="background:#B00810"></span> <span class="label" style="background:#B00810"></span></td>
											<td>1887</td>
											<td>22.6</td>
										</tr>
										<tr>
											<td id="607">Barrow</td>
											<td><img src="modules/fmsdb/img/flags/s/ENG.gif" alt="England">  ENG</td>
											<td>Vanarama National</td>
											<td>20K</td>
											<td>Professional</td>
											<td>4,416</td>
											<td><span class="label" style="background:#002090"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1901</td>
											<td>23.7</td>
										</tr>
										<tr>
											<td id="608">Bath</td>
											<td><img src="modules/fmsdb/img/flags/s/ENG.gif" alt="England">  ENG</td>
											<td>Vanarama South</td>
											<td>1K</td>
											<td>Semi-Professional</td>
											<td>8,840</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#000000"></span></td>
											<td>1889</td>
											<td>24.4</td>
										</tr>
										<tr>
											<td id="609">Birmingham</td>
											<td><img src="modules/fmsdb/img/flags/s/ENG.gif" alt="England">  ENG</td>
											<td>Sky Bet Championship</td>
											<td>500K</td>
											<td>Professional</td>
											<td>30,016</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#304078"></span></td>
											<td>1875</td>
											<td>26.9</td>
										</tr>
										<tr>
											<td id="611">Bishop's Stortford</td>
											<td><img src="modules/fmsdb/img/flags/s/ENG.gif" alt="England">  ENG</td>
											<td>Vanarama South</td>
											<td>1K</td>
											<td>Semi-Professional</td>
											<td>4,000</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#284890"></span></td>
											<td>1874</td>
											<td>23.6</td>
										</tr>
										<tr>
											<td id="612">Blackburn</td>
											<td><img src="modules/fmsdb/img/flags/s/ENG.gif" alt="England">  ENG</td>
											<td>Sky Bet Championship</td>
											<td>300K</td>
											<td>Professional</td>
											<td>31,154</td>
											<td><span class="label" style="background:#0030A8"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1875</td>
											<td>25.8</td>
										</tr>
										<tr>
											<td id="613">Blackpool</td>
											<td><img src="modules/fmsdb/img/flags/s/ENG.gif" alt="England">  ENG</td>
											<td>Sky Bet League Two</td>
											<td>50K</td>
											<td>Professional</td>
											<td>17,338</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#F08000"></span></td>
											<td>1887</td>
											<td>25.0</td>
										</tr>
										<tr>
											<td id="614">Bolton</td>
											<td><img src="modules/fmsdb/img/flags/s/ENG.gif" alt="England">  ENG</td>
											<td>Sky Bet League One</td>
											<td>0</td>
											<td>Professional</td>
											<td>28,723</td>
											<td><span class="label" style="background:#283868"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1874</td>
											<td>26.0</td>
										</tr>
										<tr>
											<td id="109212">Boreham Wood</td>
											<td><img src="modules/fmsdb/img/flags/s/ENG.gif" alt="England">  ENG</td>
											<td>Vanarama National</td>
											<td>3K</td>
											<td>Professional</td>
											<td>4,502</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1948</td>
											<td>24.1</td>
										</tr>
										<tr>
											<td id="615">Boston Utd</td>
											<td><img src="modules/fmsdb/img/flags/s/ENG.gif" alt="England">  ENG</td>
											<td>Vanarama North</td>
											<td>0</td>
											<td>Semi-Professional</td>
											<td>6,643</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
											<td>1933</td>
											<td>23.9</td>
										</tr>
										<tr>
											<td id="600">Bournemouth</td>
											<td><img src="modules/fmsdb/img/flags/s/ENG.gif" alt="England">  ENG</td>
											<td>Premier Division</td>
											<td>4M</td>
											<td>Professional</td>
											<td>11,464</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#E82010"></span></td>
											<td>1899</td>
											<td>26.0</td>
										</tr>
										<tr>
											<td id="5100088">Brackley</td>
											<td><img src="modules/fmsdb/img/flags/s/ENG.gif" alt="England">  ENG</td>
											<td>Vanarama North</td>
											<td>0</td>
											<td>Semi-Professional</td>
											<td>3,500</td>
											<td><span class="label" style="background:#E00000"></span> <span class="label" style="background:#000000"></span></td>
											<td>1890</td>
											<td>23.5</td>
										</tr>
										<tr>
											<td id="616">Bradford City</td>
											<td><img src="modules/fmsdb/img/flags/s/ENG.gif" alt="England">  ENG</td>
											<td>Sky Bet League One</td>
											<td>50K</td>
											<td>Professional</td>
											<td>25,136</td>
											<td><span class="label" style="background:#F8A800"></span> <span class="label" style="background:#780818"></span></td>
											<td>1903</td>
											<td>26.4</td>
										</tr>
										<tr>
											<td id="4002013">Bradford PA</td>
											<td><img src="modules/fmsdb/img/flags/s/ENG.gif" alt="England">  ENG</td>
											<td>Vanarama North</td>
											<td>0</td>
											<td>Semi-Professional</td>
											<td>5,000</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#70E088"></span></td>
											<td>1907</td>
											<td>26.6</td>
										</tr>
										<tr>
											<td id="134732">Braintree</td>
											<td><img src="modules/fmsdb/img/flags/s/ENG.gif" alt="England">  ENG</td>
											<td>Vanarama National</td>
											<td>8K</td>
											<td>Semi-Professional</td>
											<td>4,222</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#E87028"></span></td>
											<td>1898</td>
											<td>24.4</td>
										</tr>
										<tr>
											<td id="617">Brentford</td>
											<td><img src="modules/fmsdb/img/flags/s/ENG.gif" alt="England">  ENG</td>
											<td>Sky Bet Championship</td>
											<td>500K</td>
											<td>Professional</td>
											<td>12,802</td>
											<td><span class="label" style="background:#F80020"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1889</td>
											<td>23.8</td>
										</tr>
										<tr>
											<td id="618">Brighton</td>
											<td><img src="modules/fmsdb/img/flags/s/ENG.gif" alt="England">  ENG</td>
											<td>Sky Bet Championship</td>
											<td>5M</td>
											<td>Professional</td>
											<td>30,384</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
											<td>1901</td>
											<td>27.2</td>
										</tr>
										<tr>
											<td id="619">Bristol City</td>
											<td><img src="modules/fmsdb/img/flags/s/ENG.gif" alt="England">  ENG</td>
											<td>Sky Bet Championship</td>
											<td>6M</td>
											<td>Professional</td>
											<td>27,000</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#D01028"></span></td>
											<td>1897</td>
											<td>24.7</td>
										</tr>
										<tr>
											<td id="620">Bristol Rovers</td>
											<td><img src="modules/fmsdb/img/flags/s/ENG.gif" alt="England">  ENG</td>
											<td>Sky Bet League One</td>
											<td>25K</td>
											<td>Professional</td>
											<td>12,300</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#0060B8"></span></td>
											<td>1883</td>
											<td>25.7</td>
										</tr>
										<tr>
											<td id="5100153">Bromley</td>
											<td><img src="modules/fmsdb/img/flags/s/ENG.gif" alt="England">  ENG</td>
											<td>Vanarama National</td>
											<td>10K</td>
											<td>Semi-Professional</td>
											<td>5,000</td>
											<td><span class="label" style="background:#E8E8E8"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1892</td>
											<td>27.1</td>
										</tr>
										<tr>
											<td id="622">Burnley</td>
											<td><img src="modules/fmsdb/img/flags/s/ENG.gif" alt="England">  ENG</td>
											<td>Premier Division</td>
											<td>10M</td>
											<td>Professional</td>
											<td>22,546</td>
											<td><span class="label" style="background:#90C0E0"></span> <span class="label" style="background:#701038"></span></td>
											<td>1882</td>
											<td>26.0</td>
										</tr>
										<tr>
											<td id="4001706">Burton</td>
											<td><img src="modules/fmsdb/img/flags/s/ENG.gif" alt="England">  ENG</td>
											<td>Sky Bet Championship</td>
											<td>150K</td>
											<td>Professional</td>
											<td>6,972</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F8F000"></span></td>
											<td>1950</td>
											<td>26.7</td>
										</tr>
										<tr>
											<td id="623">Bury</td>
											<td><img src="modules/fmsdb/img/flags/s/ENG.gif" alt="England">  ENG</td>
											<td>Sky Bet League One</td>
											<td>0</td>
											<td>Professional</td>
											<td>11,376</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
											<td>1885</td>
											<td>25.4</td>
										</tr>
										<tr>
											<td id="624">Cambridge</td>
											<td><img src="modules/fmsdb/img/flags/s/ENG.gif" alt="England">  ENG</td>
											<td>Sky Bet League Two</td>
											<td>100K</td>
											<td>Professional</td>
											<td>8,696</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
											<td>1912</td>
											<td>24.4</td>
										</tr>
										<tr>
											<td id="625">Cardiff</td>
											<td><img src="modules/fmsdb/img/flags/s/ENG.gif" alt="England">  ENG</td>
											<td>Sky Bet Championship</td>
											<td>1M</td>
											<td>Professional</td>
											<td>33,316</td>
											<td><span class="label" style="background:#002080"></span> <span class="label" style="background:#0030A0"></span></td>
											<td>1899</td>
											<td>26.8</td>
										</tr>
										<tr>
											<td id="626">Carlisle</td>
											<td><img src="modules/fmsdb/img/flags/s/ENG.gif" alt="England">  ENG</td>
											<td>Sky Bet League Two</td>
											<td>64K</td>
											<td>Professional</td>
											<td>16,683</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
											<td>1904</td>
											<td>25.2</td>
										</tr>
										<tr>
											<td id="628">Charlton</td>
											<td><img src="modules/fmsdb/img/flags/s/ENG.gif" alt="England">  ENG</td>
											<td>Sky Bet League One</td>
											<td>0</td>
											<td>Professional</td>
											<td>27,111</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#E00000"></span></td>
											<td>1905</td>
											<td>25.1</td>
										</tr>
										<tr>
											<td id="629">Chelmsford</td>
											<td><img src="modules/fmsdb/img/flags/s/ENG.gif" alt="England">  ENG</td>
											<td>Vanarama South</td>
											<td>0</td>
											<td>Semi-Professional</td>
											<td>3,016</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#800020"></span></td>
											<td>1938</td>
											<td>24.9</td>
										</tr>
										<tr>
											<td id="630">Chelsea</td>
											<td><img src="modules/fmsdb/img/flags/s/ENG.gif" alt="England">  ENG</td>
											<td>Premier Division</td>
											<td>40M</td>
											<td>Professional</td>
											<td>41,629</td>
											<td><span class="label" style="background:#304898"></span> <span class="label" style="background:#304898"></span></td>
											<td>1905</td>
											<td>26.2</td>
										</tr>
										<tr>
											<td id="631">Cheltenham</td>
											<td><img src="modules/fmsdb/img/flags/s/ENG.gif" alt="England">  ENG</td>
											<td>Sky Bet League Two</td>
											<td>0</td>
											<td>Professional</td>
											<td>7,027</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#E01820"></span></td>
											<td>1887</td>
											<td>24.0</td>
										</tr>
										<tr>
											<td id="29066004">Chester</td>
											<td><img src="modules/fmsdb/img/flags/s/ENG.gif" alt="England">  ENG</td>
											<td>Vanarama National</td>
											<td>0</td>
											<td>Professional</td>
											<td>5,453</td>
											<td><span class="label" style="background:#104098"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>2010</td>
											<td>22.0</td>
										</tr>
										<tr>
											<td id="634">Chesterfield</td>
											<td><img src="modules/fmsdb/img/flags/s/ENG.gif" alt="England">  ENG</td>
											<td>Sky Bet League One</td>
											<td>100K</td>
											<td>Professional</td>
											<td>10,504</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
											<td>1866</td>
											<td>24.9</td>
										</tr>
										<tr>
											<td id="635">Chorley</td>
											<td><img src="modules/fmsdb/img/flags/s/ENG.gif" alt="England">  ENG</td>
											<td>Vanarama North</td>
											<td>0</td>
											<td>Semi-Professional</td>
											<td>4,100</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1883</td>
											<td>26.2</td>
										</tr>
										<tr>
											<td id="636">Colchester</td>
											<td><img src="modules/fmsdb/img/flags/s/ENG.gif" alt="England">  ENG</td>
											<td>Sky Bet League Two</td>
											<td>20K</td>
											<td>Professional</td>
											<td>10,105</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
											<td>1937</td>
											<td>23.7</td>
										</tr>
										<tr>
											<td id="8325133">Concord</td>
											<td><img src="modules/fmsdb/img/flags/s/ENG.gif" alt="England">  ENG</td>
											<td>Vanarama South</td>
											<td>0</td>
											<td>Semi-Professional</td>
											<td>3,300</td>
											<td><span class="label" style="background:#0050D0"></span> <span class="label" style="background:#F8F000"></span></td>
											<td>1967</td>
											<td>24.3</td>
										</tr>
										<tr>
											<td id="639">Coventry</td>
											<td><img src="modules/fmsdb/img/flags/s/ENG.gif" alt="England">  ENG</td>
											<td>Sky Bet League One</td>
											<td>0</td>
											<td>Professional</td>
											<td>32,609</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
											<td>1883</td>
											<td>23.2</td>
										</tr>
										<tr>
											<td id="640">Crawley</td>
											<td><img src="modules/fmsdb/img/flags/s/ENG.gif" alt="England">  ENG</td>
											<td>Sky Bet League Two</td>
											<td>10K</td>
											<td>Professional</td>
											<td>6,134</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F00000"></span></td>
											<td>1896</td>
											<td>23.7</td>
										</tr>
										<tr>
											<td id="641">Crewe</td>
											<td><img src="modules/fmsdb/img/flags/s/ENG.gif" alt="England">  ENG</td>
											<td>Sky Bet League Two</td>
											<td>30K</td>
											<td>Professional</td>
											<td>10,153</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
											<td>1877</td>
											<td>22.6</td>
										</tr>
										<tr>
											<td id="642">Crystal Palace</td>
											<td><img src="modules/fmsdb/img/flags/s/ENG.gif" alt="England">  ENG</td>
											<td>Premier Division</td>
											<td>11M</td>
											<td>Professional</td>
											<td>26,297</td>
											<td><span class="label" style="background:#003098"></span> <span class="label" style="background:#C80030"></span></td>
											<td>1905</td>
											<td>27.5</td>
										</tr>
										<tr>
											<td id="5103697">Curzon Ashton</td>
											<td><img src="modules/fmsdb/img/flags/s/ENG.gif" alt="England">  ENG</td>
											<td>Vanarama North</td>
											<td>0</td>
											<td>Semi-Professional</td>
											<td>4,200</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#0030A0"></span></td>
											<td>1963</td>
											<td>24.2</td>
										</tr>
										<tr>
											<td id="643">Dag &amp; Red</td>
											<td><img src="modules/fmsdb/img/flags/s/ENG.gif" alt="England">  ENG</td>
											<td>Vanarama National</td>
											<td>10K</td>
											<td>Professional</td>
											<td>6,078</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
											<td>1992</td>
											<td>24.0</td>
										</tr>
										<tr>
											<td id="29130446">Darlington 1883</td>
											<td><img src="modules/fmsdb/img/flags/s/ENG.gif" alt="England">  ENG</td>
											<td>Vanarama North</td>
											<td>5K</td>
											<td>Semi-Professional</td>
											<td>3,000</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>2011</td>
											<td>26.6</td>
										</tr>
										<tr>
											<td id="5100123">Dartford</td>
											<td><img src="modules/fmsdb/img/flags/s/ENG.gif" alt="England">  ENG</td>
											<td>Vanarama South</td>
											<td>9K</td>
											<td>Semi-Professional</td>
											<td>6,000</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1888</td>
											<td>25.0</td>
										</tr>
										<tr>
											<td id="645">Derby</td>
											<td><img src="modules/fmsdb/img/flags/s/ENG.gif" alt="England">  ENG</td>
											<td>Sky Bet Championship</td>
											<td>4M</td>
											<td>Professional</td>
											<td>33,597</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1884</td>
											<td>26.0</td>
										</tr>
										<tr>
											<td id="646">Doncaster</td>
											<td><img src="modules/fmsdb/img/flags/s/ENG.gif" alt="England">  ENG</td>
											<td>Sky Bet League Two</td>
											<td>50K</td>
											<td>Professional</td>
											<td>15,231</td>
											<td><span class="label" style="background:#E00000"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1879</td>
											<td>25.3</td>
										</tr>
										<tr>
											<td id="647">Dover</td>
											<td><img src="modules/fmsdb/img/flags/s/ENG.gif" alt="England">  ENG</td>
											<td>Vanarama National</td>
											<td>8K</td>
											<td>Semi-Professional</td>
											<td>6,500</td>
											<td><span class="label" style="background:#181818"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1983</td>
											<td>25.5</td>
										</tr>
										<tr>
											<td id="5103648">East Thurrock</td>
											<td><img src="modules/fmsdb/img/flags/s/ENG.gif" alt="England">  ENG</td>
											<td>Vanarama South</td>
											<td>0</td>
											<td>Semi-Professional</td>
											<td>3,000</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F0B010"></span></td>
											<td>1969</td>
											<td>24.6</td>
										</tr>
										<tr>
											<td id="5103643">Eastbourne Boro</td>
											<td><img src="modules/fmsdb/img/flags/s/ENG.gif" alt="England">  ENG</td>
											<td>Vanarama South</td>
											<td>1K</td>
											<td>Semi-Professional</td>
											<td>4,121</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#D02028"></span></td>
											<td>1964</td>
											<td>24.7</td>
										</tr>
										<tr>
											<td id="5103760">Eastleigh</td>
											<td><img src="modules/fmsdb/img/flags/s/ENG.gif" alt="England">  ENG</td>
											<td>Vanarama National</td>
											<td>95K</td>
											<td>Professional</td>
											<td>5,192</td>
											<td><span class="label" style="background:#183878"></span> <span class="label" style="background:#104098"></span></td>
											<td>1946</td>
											<td>26.2</td>
										</tr>
										<tr>
											<td id="5100157">Ebbsfleet</td>
											<td><img src="modules/fmsdb/img/flags/s/ENG.gif" alt="England">  ENG</td>
											<td>Vanarama South</td>
											<td>80K</td>
											<td>Professional</td>
											<td>4,098</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#E00000"></span></td>
											<td>1946</td>
											<td>25.4</td>
										</tr>
										<tr>
											<td id="650">Everton</td>
											<td><img src="modules/fmsdb/img/flags/s/ENG.gif" alt="England">  ENG</td>
											<td>Premier Division</td>
											<td>45M</td>
											<td>Professional</td>
											<td>39,572</td>
											<td><span class="label" style="background:#F8F870"></span> <span class="label" style="background:#204098"></span></td>
											<td>1878</td>
											<td>27.4</td>
										</tr>
										<tr>
											<td id="651">Exeter</td>
											<td><img src="modules/fmsdb/img/flags/s/ENG.gif" alt="England">  ENG</td>
											<td>Sky Bet League Two</td>
											<td>0</td>
											<td>Professional</td>
											<td>8,830</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#E00000"></span></td>
											<td>1901</td>
											<td>25.7</td>
										</tr>
										<tr>
											<td id="90002300">FC Halifax</td>
											<td><img src="modules/fmsdb/img/flags/s/ENG.gif" alt="England">  ENG</td>
											<td>Vanarama North</td>
											<td>40K</td>
											<td>Semi-Professional</td>
											<td>14,061</td>
											<td><span class="label" style="background:#304078"></span> <span class="label" style="background:#0050D0"></span></td>
											<td>2008</td>
											<td>24.8</td>
										</tr>
										<tr>
											<td id="8611092">FC United</td>
											<td><img src="modules/fmsdb/img/flags/s/ENG.gif" alt="England">  ENG</td>
											<td>Vanarama North</td>
											<td>9K</td>
											<td>Semi-Professional</td>
											<td>4,238</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#C80000"></span></td>
											<td>2005</td>
											<td>26.3</td>
										</tr>
										<tr>
											<td id="5103834">Fleetwood</td>
											<td><img src="modules/fmsdb/img/flags/s/ENG.gif" alt="England">  ENG</td>
											<td>Sky Bet League One</td>
											<td>10K</td>
											<td>Professional</td>
											<td>5,532</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#E00000"></span></td>
											<td>1908</td>
											<td>23.9</td>
										</tr>
										<tr>
											<td id="109206">Forest Green</td>
											<td><img src="modules/fmsdb/img/flags/s/ENG.gif" alt="England">  ENG</td>
											<td>Vanarama National</td>
											<td>17K</td>
											<td>Professional</td>
											<td>5,147</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
											<td>1889</td>
											<td>24.9</td>
										</tr>
										<tr>
											<td id="654">Fulham</td>
											<td><img src="modules/fmsdb/img/flags/s/ENG.gif" alt="England">  ENG</td>
											<td>Sky Bet Championship</td>
											<td>400K</td>
											<td>Professional</td>
											<td>25,700</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
											<td>1879</td>
											<td>25.7</td>
										</tr>
										<tr>
											<td id="4001092">Gainsborough</td>
											<td><img src="modules/fmsdb/img/flags/s/ENG.gif" alt="England">  ENG</td>
											<td>Vanarama North</td>
											<td>0</td>
											<td>Semi-Professional</td>
											<td>4,304</td>
											<td><span class="label" style="background:#2858B0"></span> <span class="label" style="background:#2858B0"></span></td>
											<td>1873</td>
											<td>24.7</td>
										</tr>
										<tr>
											<td id="655">Gateshead</td>
											<td><img src="modules/fmsdb/img/flags/s/ENG.gif" alt="England">  ENG</td>
											<td>Vanarama National</td>
											<td>35K</td>
											<td>Professional</td>
											<td>11,800</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1977</td>
											<td>22.3</td>
										</tr>
										<tr>
											<td id="656">Gillingham</td>
											<td><img src="modules/fmsdb/img/flags/s/ENG.gif" alt="England">  ENG</td>
											<td>Sky Bet League One</td>
											<td>50K</td>
											<td>Professional</td>
											<td>11,440</td>
											<td><span class="label" style="background:#002060"></span> <span class="label" style="background:#0840B0"></span></td>
											<td>1893</td>
											<td>24.9</td>
										</tr>
										<tr>
											<td id="657">Gloucester</td>
											<td><img src="modules/fmsdb/img/flags/s/ENG.gif" alt="England">  ENG</td>
											<td>Vanarama North</td>
											<td>0</td>
											<td>Semi-Professional</td>
											<td>7,027</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#E8E010"></span></td>
											<td>1889</td>
											<td>23.6</td>
										</tr>
										<tr>
											<td id="5103761">Gosport</td>
											<td><img src="modules/fmsdb/img/flags/s/ENG.gif" alt="England">  ENG</td>
											<td>Vanarama South</td>
											<td>0</td>
											<td>Semi-Professional</td>
											<td>4,500</td>
											<td><span class="label" style="background:#083078"></span> <span class="label" style="background:#F8F000"></span></td>
											<td>1944</td>
											<td>26.6</td>
										</tr>
										<tr>
											<td id="658">Grimsby</td>
											<td><img src="modules/fmsdb/img/flags/s/ENG.gif" alt="England">  ENG</td>
											<td>Sky Bet League Two</td>
											<td>10K</td>
											<td>Professional</td>
											<td>9,052</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
											<td>1878</td>
											<td>26.2</td>
										</tr>
										<tr>
											<td id="578">Guiseley</td>
											<td><img src="modules/fmsdb/img/flags/s/ENG.gif" alt="England">  ENG</td>
											<td>Vanarama National</td>
											<td>0</td>
											<td>Semi-Professional</td>
											<td>4,000</td>
											<td><span class="label" style="background:#D8D8D0"></span> <span class="label" style="background:#F8F8F0"></span></td>
											<td>1909</td>
											<td>27.4</td>
										</tr>
										<tr>
											<td id="5100186">Hampton &amp; Richmond</td>
											<td><img src="modules/fmsdb/img/flags/s/ENG.gif" alt="England">  ENG</td>
											<td>Vanarama South</td>
											<td>0</td>
											<td>Semi-Professional</td>
											<td>3,000</td>
											<td><span class="label" style="background:#E00000"></span> <span class="label" style="background:#003068"></span></td>
											<td>1920</td>
											<td>26.6</td>
										</tr>
										<tr>
											<td id="5100047">Harrogate</td>
											<td><img src="modules/fmsdb/img/flags/s/ENG.gif" alt="England">  ENG</td>
											<td>Vanarama North</td>
											<td>6K</td>
											<td>Semi-Professional</td>
											<td>3,800</td>
											<td><span class="label" style="background:#F8F000"></span> <span class="label" style="background:#000000"></span></td>
											<td>1919</td>
											<td>26.3</td>
										</tr>
										<tr>
											<td id="661">Hartlepool</td>
											<td><img src="modules/fmsdb/img/flags/s/ENG.gif" alt="England">  ENG</td>
											<td>Sky Bet League Two</td>
											<td>25K</td>
											<td>Professional</td>
											<td>7,856</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
											<td>1908</td>
											<td>25.0</td>
										</tr>
										<tr>
											<td id="5100225">Hemel Hempstead</td>
											<td><img src="modules/fmsdb/img/flags/s/ENG.gif" alt="England">  ENG</td>
											<td>Vanarama South</td>
											<td>2K</td>
											<td>Semi-Professional</td>
											<td>3,152</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#E00000"></span></td>
											<td>1885</td>
											<td>25.8</td>
										</tr>
										<tr>
											<td id="664">Huddersfield</td>
											<td><img src="modules/fmsdb/img/flags/s/ENG.gif" alt="England">  ENG</td>
											<td>Sky Bet Championship</td>
											<td>1M</td>
											<td>Professional</td>
											<td>24,590</td>
											<td><span class="label" style="background:#3878B0"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1908</td>
											<td>25.2</td>
										</tr>
										<tr>
											<td id="665">Hull</td>
											<td><img src="modules/fmsdb/img/flags/s/ENG.gif" alt="England">  ENG</td>
											<td>Premier Division</td>
											<td>6M</td>
											<td>Professional</td>
											<td>25,586</td>
											<td><span class="label" style="background:#F8A800"></span> <span class="label" style="background:#000000"></span></td>
											<td>1904</td>
											<td>26.0</td>
										</tr>
										<tr>
											<td id="5103652">Hungerford</td>
											<td><img src="modules/fmsdb/img/flags/s/ENG.gif" alt="England">  ENG</td>
											<td>Vanarama South</td>
											<td>1K</td>
											<td>Semi-Professional</td>
											<td>2,500</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1886</td>
											<td>26.6</td>
										</tr>
										<tr>
											<td id="667">Ipswich</td>
											<td><img src="modules/fmsdb/img/flags/s/ENG.gif" alt="England">  ENG</td>
											<td>Sky Bet Championship</td>
											<td>500K</td>
											<td>Professional</td>
											<td>30,311</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#1830E8"></span></td>
											<td>1878</td>
											<td>26.0</td>
										</tr>
										<tr>
											<td id="669">Kidderminster</td>
											<td><img src="modules/fmsdb/img/flags/s/ENG.gif" alt="England">  ENG</td>
											<td>Vanarama North</td>
											<td>18K</td>
											<td>Professional</td>
											<td>6,444</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#E00000"></span></td>
											<td>1886</td>
											<td>22.3</td>
										</tr>
										<tr>
											<td id="671">Leeds</td>
											<td><img src="modules/fmsdb/img/flags/s/ENG.gif" alt="England">  ENG</td>
											<td>Sky Bet Championship</td>
											<td>100K</td>
											<td>Professional</td>
											<td>37,890</td>
											<td><span class="label" style="background:#0030A0"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1919</td>
											<td>24.8</td>
										</tr>
										<tr>
											<td id="673">Leicester</td>
											<td><img src="modules/fmsdb/img/flags/s/ENG.gif" alt="England">  ENG</td>
											<td>Premier Division</td>
											<td>10M</td>
											<td>Professional</td>
											<td>32,312</td>
											<td><span class="label" style="background:#0030A0"></span> <span class="label" style="background:#002080"></span></td>
											<td>1884</td>
											<td>27.2</td>
										</tr>
										<tr>
											<td id="674">Leyton Orient</td>
											<td><img src="modules/fmsdb/img/flags/s/ENG.gif" alt="England">  ENG</td>
											<td>Sky Bet League Two</td>
											<td>0</td>
											<td>Professional</td>
											<td>9,311</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F00000"></span></td>
											<td>1881</td>
											<td>24.1</td>
										</tr>
										<tr>
											<td id="675">Lincoln</td>
											<td><img src="modules/fmsdb/img/flags/s/ENG.gif" alt="England">  ENG</td>
											<td>Vanarama National</td>
											<td>86K</td>
											<td>Professional</td>
											<td>10,120</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#E00000"></span></td>
											<td>1884</td>
											<td>25.4</td>
										</tr>
										<tr>
											<td id="676">Liverpool</td>
											<td><img src="modules/fmsdb/img/flags/s/ENG.gif" alt="England">  ENG</td>
											<td>Premier Division</td>
											<td>40M</td>
											<td>Professional</td>
											<td>54,074</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#D81818"></span></td>
											<td>1892</td>
											<td>24.7</td>
										</tr>
										<tr>
											<td id="677">Luton</td>
											<td><img src="modules/fmsdb/img/flags/s/ENG.gif" alt="England">  ENG</td>
											<td>Sky Bet League Two</td>
											<td>70K</td>
											<td>Professional</td>
											<td>10,110</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#E85020"></span></td>
											<td>1885</td>
											<td>23.9</td>
										</tr>
										<tr>
											<td id="678">Macclesfield</td>
											<td><img src="modules/fmsdb/img/flags/s/ENG.gif" alt="England">  ENG</td>
											<td>Vanarama National</td>
											<td>0</td>
											<td>Professional</td>
											<td>5,988</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#204098"></span></td>
											<td>1874</td>
											<td>24.7</td>
										</tr>
										<tr>
											<td id="5100192">Maidenhead</td>
											<td><img src="modules/fmsdb/img/flags/s/ENG.gif" alt="England">  ENG</td>
											<td>Vanarama South</td>
											<td>1K</td>
											<td>Semi-Professional</td>
											<td>4,500</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1870</td>
											<td>25.9</td>
										</tr>
										<tr>
											<td id="8325049">Maidstone</td>
											<td><img src="modules/fmsdb/img/flags/s/ENG.gif" alt="England">  ENG</td>
											<td>Vanarama National</td>
											<td>10K</td>
											<td>Semi-Professional</td>
											<td>2,500</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F8A808"></span></td>
											<td>1992</td>
											<td>24.4</td>
										</tr>
										<tr>
											<td id="679">Man City</td>
											<td><img src="modules/fmsdb/img/flags/s/ENG.gif" alt="England">  ENG</td>
											<td>Premier Division</td>
											<td>29M</td>
											<td>Professional</td>
											<td>55,097</td>
											<td><span class="label" style="background:#304878"></span> <span class="label" style="background:#98D0F0"></span></td>
											<td>1880</td>
											<td>27.6</td>
										</tr>
										<tr>
											<td id="680">Man Utd</td>
											<td><img src="modules/fmsdb/img/flags/s/ENG.gif" alt="England">  ENG</td>
											<td>Premier Division</td>
											<td>31M</td>
											<td>Professional</td>
											<td>75,635</td>
											<td><span class="label" style="background:#E00000"></span> <span class="label" style="background:#C80000"></span></td>
											<td>1878</td>
											<td>26.1</td>
										</tr>
										<tr>
											<td id="681">Mansfield</td>
											<td><img src="modules/fmsdb/img/flags/s/ENG.gif" alt="England">  ENG</td>
											<td>Sky Bet League Two</td>
											<td>25K</td>
											<td>Professional</td>
											<td>9,186</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
											<td>1897</td>
											<td>25.8</td>
										</tr>
										<tr>
											<td id="5100134">Margate</td>
											<td><img src="modules/fmsdb/img/flags/s/ENG.gif" alt="England">  ENG</td>
											<td>Vanarama South</td>
											<td>5K</td>
											<td>Semi-Professional</td>
											<td>3,000</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#3860D0"></span></td>
											<td>1896</td>
											<td>24.5</td>
										</tr>
										<tr>
											<td id="685">Middlesbrough</td>
											<td><img src="modules/fmsdb/img/flags/s/ENG.gif" alt="England">  ENG</td>
											<td>Premier Division</td>
											<td>3M</td>
											<td>Professional</td>
											<td>34,746</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
											<td>1876</td>
											<td>26.4</td>
										</tr>
										<tr>
											<td id="686">Millwall</td>
											<td><img src="modules/fmsdb/img/flags/s/ENG.gif" alt="England">  ENG</td>
											<td>Sky Bet League One</td>
											<td>0</td>
											<td>Professional</td>
											<td>20,146</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
											<td>1885</td>
											<td>24.4</td>
										</tr>
										<tr>
											<td id="151027">MK Dons</td>
											<td><img src="modules/fmsdb/img/flags/s/ENG.gif" alt="England">  ENG</td>
											<td>Sky Bet League One</td>
											<td>50K</td>
											<td>Professional</td>
											<td>30,582</td>
											<td><span class="label" style="background:#D8B028"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>2004</td>
											<td>24.2</td>
										</tr>
										<tr>
											<td id="687">Morecambe</td>
											<td><img src="modules/fmsdb/img/flags/s/ENG.gif" alt="England">  ENG</td>
											<td>Sky Bet League Two</td>
											<td>0</td>
											<td>Professional</td>
											<td>6,476</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
											<td>1920</td>
											<td>24.1</td>
										</tr>
										<tr>
											<td id="810130">A. Baleares</td>
											<td><img src="modules/fmsdb/img/flags/s/ESP.gif" alt="Spain">  ESP</td>
											<td>Second Division B3</td>
											<td>0</td>
											<td>Professional</td>
											<td>3,000</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#0050D0"></span></td>
											<td>1942</td>
											<td>28.6</td>
										</tr>
										<tr>
											<td id="1664">A. Bilbao</td>
											<td><img src="modules/fmsdb/img/flags/s/ESP.gif" alt="Spain">  ESP</td>
											<td>First Division</td>
											<td>9M</td>
											<td>Professional</td>
											<td>53,332</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#B83020"></span></td>
											<td>1898</td>
											<td>26.9</td>
										</tr>
										<tr>
											<td id="1665">A. Bilbao B</td>
											<td><img src="modules/fmsdb/img/flags/s/ESP.gif" alt="Spain">  ESP</td>
											<td>Second Division B2</td>
											<td>0</td>
											<td>Professional</td>
											<td>2,250</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#E00000"></span></td>
											<td>1964</td>
											<td>20.8</td>
										</tr>
										<tr>
											<td id="1687">A. Madrid</td>
											<td><img src="modules/fmsdb/img/flags/s/ESP.gif" alt="Spain">  ESP</td>
											<td>First Division</td>
											<td>4M</td>
											<td>Professional</td>
											<td>54,851</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
											<td>1903</td>
											<td>25.0</td>
										</tr>
										<tr>
											<td id="67118675">A. Sagunto</td>
											<td><img src="modules/fmsdb/img/flags/s/ESP.gif" alt="Spain">  ESP</td>
											<td>Second Division B3</td>
											<td>0</td>
											<td>Semi-Professional</td>
											<td>4,000</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
											<td>1922</td>
											<td>25.2</td>
										</tr>
										<tr>
											<td id="1688">Alaves</td>
											<td><img src="modules/fmsdb/img/flags/s/ESP.gif" alt="Spain">  ESP</td>
											<td>First Division</td>
											<td>0</td>
											<td>Professional</td>
											<td>19,200</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#2068B0"></span></td>
											<td>1921</td>
											<td>25.0</td>
										</tr>
										<tr>
											<td id="1660">Albacete</td>
											<td><img src="modules/fmsdb/img/flags/s/ESP.gif" alt="Spain">  ESP</td>
											<td>Second Division B2</td>
											<td>25K</td>
											<td>Professional</td>
											<td>16,551</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1940</td>
											<td>24.5</td>
										</tr>
										<tr>
											<td id="810090">Alcorcon</td>
											<td><img src="modules/fmsdb/img/flags/s/ESP.gif" alt="Spain">  ESP</td>
											<td>Second Division</td>
											<td>49K</td>
											<td>Professional</td>
											<td>5,400</td>
											<td><span class="label" style="background:#0050D0"></span> <span class="label" style="background:#E8C810"></span></td>
											<td>1971</td>
											<td>25.4</td>
										</tr>
										<tr>
											<td id="1689">Alcoyano</td>
											<td><img src="modules/fmsdb/img/flags/s/ESP.gif" alt="Spain">  ESP</td>
											<td>Second Division B3</td>
											<td>0</td>
											<td>Professional</td>
											<td>5,000</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#0050D0"></span></td>
											<td>1929</td>
											<td>26.0</td>
										</tr>
										<tr>
											<td id="1661">Almeria</td>
											<td><img src="modules/fmsdb/img/flags/s/ESP.gif" alt="Spain">  ESP</td>
											<td>Second Division</td>
											<td>431K</td>
											<td>Professional</td>
											<td>15,200</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#E00000"></span></td>
											<td>1989</td>
											<td>26.5</td>
										</tr>
										<tr>
											<td id="6706354">Amorebieta</td>
											<td><img src="modules/fmsdb/img/flags/s/ESP.gif" alt="Spain">  ESP</td>
											<td>Second Division B2</td>
											<td>0</td>
											<td>Professional</td>
											<td>2,500</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#0030A0"></span></td>
											<td>1925</td>
											<td>25.8</td>
										</tr>
										<tr>
											<td id="814437">Arandina</td>
											<td><img src="modules/fmsdb/img/flags/s/ESP.gif" alt="Spain">  ESP</td>
											<td>Second Division B1</td>
											<td>0</td>
											<td>Semi-Professional</td>
											<td>5,000</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#0078F8"></span></td>
											<td>1987</td>
											<td>24.2</td>
										</tr>
										<tr>
											<td id="1685">Atletico Pamplona</td>
											<td><img src="modules/fmsdb/img/flags/s/ESP.gif" alt="Spain">  ESP</td>
											<td>First Division</td>
											<td>0</td>
											<td>Professional</td>
											<td>19,800</td>
											<td><span class="label" style="background:#2838A0"></span> <span class="label" style="background:#A82030"></span></td>
											<td>1920</td>
											<td>26.2</td>
										</tr>
										<tr>
											<td id="4200564">Atletico Pamplona B</td>
											<td><img src="modules/fmsdb/img/flags/s/ESP.gif" alt="Spain">  ESP</td>
											<td>Second Division B1</td>
											<td>0</td>
											<td>Professional</td>
											<td>4,000</td>
											<td><span class="label" style="background:#E00000"></span> <span class="label" style="background:#E00000"></span></td>
											<td>1962</td>
											<td>20.0</td>
										</tr>
										<tr>
											<td id="6706380">Badalona</td>
											<td><img src="modules/fmsdb/img/flags/s/ESP.gif" alt="Spain">  ESP</td>
											<td>Second Division B3</td>
											<td>0</td>
											<td>Professional</td>
											<td>1,000</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
											<td>1903</td>
											<td>26.5</td>
										</tr>
										<tr>
											<td id="1667">Barakaldo</td>
											<td><img src="modules/fmsdb/img/flags/s/ESP.gif" alt="Spain">  ESP</td>
											<td>Second Division B2</td>
											<td>0</td>
											<td>Professional</td>
											<td>8,000</td>
											<td><span class="label" style="background:#F8F000"></span> <span class="label" style="background:#000000"></span></td>
											<td>1917</td>
											<td>24.8</td>
										</tr>
										<tr>
											<td id="1708">Barcelona</td>
											<td><img src="modules/fmsdb/img/flags/s/ESP.gif" alt="Spain">  ESP</td>
											<td>First Division</td>
											<td>10M</td>
											<td>Professional</td>
											<td>99,394</td>
											<td><span class="label" style="background:#D02028"></span> <span class="label" style="background:#204080"></span></td>
											<td>1899</td>
											<td>25.6</td>
										</tr>
										<tr>
											<td id="1668">Barcelona B</td>
											<td><img src="modules/fmsdb/img/flags/s/ESP.gif" alt="Spain">  ESP</td>
											<td>Second Division B3</td>
											<td>0</td>
											<td>Professional</td>
											<td>15,276</td>
											<td><span class="label" style="background:#D02028"></span> <span class="label" style="background:#204080"></span></td>
											<td>1970</td>
											<td>20.1</td>
										</tr>
										<tr>
											<td id="67105751">Boiro</td>
											<td><img src="modules/fmsdb/img/flags/s/ESP.gif" alt="Spain">  ESP</td>
											<td>Second Division B1</td>
											<td>0</td>
											<td>Semi-Professional</td>
											<td>0</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1966</td>
											<td>26.1</td>
										</tr>
										<tr>
											<td id="4200566">Burgos</td>
											<td><img src="modules/fmsdb/img/flags/s/ESP.gif" alt="Spain">  ESP</td>
											<td>Second Division B1</td>
											<td>0</td>
											<td>Professional</td>
											<td>12,200</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1994</td>
											<td>26.3</td>
										</tr>
										<tr>
											<td id="1682">Cadiz</td>
											<td><img src="modules/fmsdb/img/flags/s/ESP.gif" alt="Spain">  ESP</td>
											<td>Second Division</td>
											<td>74K</td>
											<td>Professional</td>
											<td>25,033</td>
											<td><span class="label" style="background:#0050D0"></span> <span class="label" style="background:#F8F838"></span></td>
											<td>1910</td>
											<td>27.3</td>
										</tr>
										<tr>
											<td id="4203003">Cartagena</td>
											<td><img src="modules/fmsdb/img/flags/s/ESP.gif" alt="Spain">  ESP</td>
											<td>Second Division B4</td>
											<td>0</td>
											<td>Professional</td>
											<td>16,000</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#000000"></span></td>
											<td>1995</td>
											<td>26.0</td>
										</tr>
										<tr>
											<td id="1704">Cordoba</td>
											<td><img src="modules/fmsdb/img/flags/s/ESP.gif" alt="Spain">  ESP</td>
											<td>Second Division</td>
											<td>23K</td>
											<td>Professional</td>
											<td>21,822</td>
											<td><span class="label" style="background:#008030"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1954</td>
											<td>26.8</td>
										</tr>
										<tr>
											<td id="814485">Cordoba B</td>
											<td><img src="modules/fmsdb/img/flags/s/ESP.gif" alt="Spain">  ESP</td>
											<td>Second Division B4</td>
											<td>0</td>
											<td>Professional</td>
											<td>3,000</td>
											<td><span class="label" style="background:#008030"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1954</td>
											<td>20.1</td>
										</tr>
										<tr>
											<td id="814086">Cornella</td>
											<td><img src="modules/fmsdb/img/flags/s/ESP.gif" alt="Spain">  ESP</td>
											<td>Second Division B3</td>
											<td>0</td>
											<td>Professional</td>
											<td>1,500</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#008030"></span></td>
											<td>1951</td>
											<td>25.0</td>
										</tr>
										<tr>
											<td id="1705">Coruna</td>
											<td><img src="modules/fmsdb/img/flags/s/ESP.gif" alt="Spain">  ESP</td>
											<td>First Division</td>
											<td>0</td>
											<td>Professional</td>
											<td>34,611</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#0030A0"></span></td>
											<td>1906</td>
											<td>26.5</td>
										</tr>
										<tr>
											<td id="7452056">Coruxo</td>
											<td><img src="modules/fmsdb/img/flags/s/ESP.gif" alt="Spain">  ESP</td>
											<td>Second Division B1</td>
											<td>0</td>
											<td>Professional</td>
											<td>1,500</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#00A030"></span></td>
											<td>1930</td>
											<td>25.9</td>
										</tr>
										<tr>
											<td id="814907">Ebro</td>
											<td><img src="modules/fmsdb/img/flags/s/ESP.gif" alt="Spain">  ESP</td>
											<td>Second Division B3</td>
											<td>57K</td>
											<td>Professional</td>
											<td>1,220</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#0040A8"></span></td>
											<td>1942</td>
											<td>26.1</td>
										</tr>
										<tr>
											<td id="1753">Eibar</td>
											<td><img src="modules/fmsdb/img/flags/s/ESP.gif" alt="Spain">  ESP</td>
											<td>First Division</td>
											<td>431K</td>
											<td>Professional</td>
											<td>6,300</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
											<td>1940</td>
											<td>24.4</td>
										</tr>
										<tr>
											<td id="67182750">El Ejido</td>
											<td><img src="modules/fmsdb/img/flags/s/ESP.gif" alt="Spain">  ESP</td>
											<td>Second Division B4</td>
											<td>34K</td>
											<td>Professional</td>
											<td>7,870</td>
											<td><span class="label" style="background:#B0D0E0"></span> <span class="label" style="background:#B0D0E0"></span></td>
											<td>2012</td>
											<td>23.2</td>
										</tr>
										<tr>
											<td id="1707">Elche</td>
											<td><img src="modules/fmsdb/img/flags/s/ESP.gif" alt="Spain">  ESP</td>
											<td>Second Division</td>
											<td>43K</td>
											<td>Professional</td>
											<td>34,000</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
											<td>1923</td>
											<td>26.6</td>
										</tr>
										<tr>
											<td id="4212207">Eldense</td>
											<td><img src="modules/fmsdb/img/flags/s/ESP.gif" alt="Spain">  ESP</td>
											<td>Second Division B3</td>
											<td>0</td>
											<td>Professional</td>
											<td>4,036</td>
											<td><span class="label" style="background:#B00000"></span> <span class="label" style="background:#0050D0"></span></td>
											<td>1921</td>
											<td>25.0</td>
										</tr>
										<tr>
											<td id="1725">Espanyol</td>
											<td><img src="modules/fmsdb/img/flags/s/ESP.gif" alt="Spain">  ESP</td>
											<td>First Division</td>
											<td>861K</td>
											<td>Professional</td>
											<td>40,000</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#0050D0"></span></td>
											<td>1900</td>
											<td>26.2</td>
										</tr>
										<tr>
											<td id="2097">Espanyol B</td>
											<td><img src="modules/fmsdb/img/flags/s/ESP.gif" alt="Spain">  ESP</td>
											<td>Second Division B3</td>
											<td>0</td>
											<td>Professional</td>
											<td>1,500</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#0050D0"></span></td>
											<td>1994</td>
											<td>19.3</td>
										</tr>
										<tr>
											<td id="67096539">Extremadura</td>
											<td><img src="modules/fmsdb/img/flags/s/ESP.gif" alt="Spain">  ESP</td>
											<td>Second Division B4</td>
											<td>0</td>
											<td>Semi-Professional</td>
											<td>12,000</td>
											<td><span class="label" style="background:#E00000"></span> <span class="label" style="background:#0030A0"></span></td>
											<td>2007</td>
											<td>26.2</td>
										</tr>
										<tr>
											<td id="1727">Ferrol</td>
											<td><img src="modules/fmsdb/img/flags/s/ESP.gif" alt="Spain">  ESP</td>
											<td>Second Division B1</td>
											<td>11K</td>
											<td>Professional</td>
											<td>12,042</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#00A030"></span></td>
											<td>1919</td>
											<td>24.5</td>
										</tr>
										<tr>
											<td id="109017">Fuenlabrada</td>
											<td><img src="modules/fmsdb/img/flags/s/ESP.gif" alt="Spain">  ESP</td>
											<td>Second Division B2</td>
											<td>0</td>
											<td>Professional</td>
											<td>2,500</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#0078F8"></span></td>
											<td>1975</td>
											<td>27.0</td>
										</tr>
										<tr>
											<td id="109031">Gava</td>
											<td><img src="modules/fmsdb/img/flags/s/ESP.gif" alt="Spain">  ESP</td>
											<td>Second Division B3</td>
											<td>0</td>
											<td>Semi-Professional</td>
											<td>4,500</td>
											<td><span class="label" style="background:#0050D0"></span> <span class="label" style="background:#901000"></span></td>
											<td>1921</td>
											<td>24.4</td>
										</tr>
										<tr>
											<td id="109009">Gernika</td>
											<td><img src="modules/fmsdb/img/flags/s/ESP.gif" alt="Spain">  ESP</td>
											<td>Second Division B2</td>
											<td>0</td>
											<td>Semi-Professional</td>
											<td>2,500</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1922</td>
											<td>25.6</td>
										</tr>
										<tr>
											<td id="1710">Getafe</td>
											<td><img src="modules/fmsdb/img/flags/s/ESP.gif" alt="Spain">  ESP</td>
											<td>Second Division</td>
											<td>0</td>
											<td>Professional</td>
											<td>17,700</td>
											<td><span class="label" style="background:#002060"></span> <span class="label" style="background:#2068B0"></span></td>
											<td>1983</td>
											<td>27.9</td>
										</tr>
										<tr>
											<td id="102029">Getxo</td>
											<td><img src="modules/fmsdb/img/flags/s/ESP.gif" alt="Spain">  ESP</td>
											<td>Second Division B2</td>
											<td>0</td>
											<td>Semi-Professional</td>
											<td>1,200</td>
											<td><span class="label" style="background:#E00000"></span> <span class="label" style="background:#000000"></span></td>
											<td>1909</td>
											<td>27.8</td>
										</tr>
										<tr>
											<td id="814089">Girona</td>
											<td><img src="modules/fmsdb/img/flags/s/ESP.gif" alt="Spain">  ESP</td>
											<td>Second Division</td>
											<td>67K</td>
											<td>Professional</td>
											<td>9,286</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#E00000"></span></td>
											<td>1930</td>
											<td>25.7</td>
										</tr>
										<tr>
											<td id="1714">Granada</td>
											<td><img src="modules/fmsdb/img/flags/s/ESP.gif" alt="Spain">  ESP</td>
											<td>First Division</td>
											<td>861K</td>
											<td>Professional</td>
											<td>23,000</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#F00000"></span></td>
											<td>1931</td>
											<td>25.0</td>
										</tr>
										<tr>
											<td id="67040821">Granada B</td>
											<td><img src="modules/fmsdb/img/flags/s/ESP.gif" alt="Spain">  ESP</td>
											<td>Second Division B4</td>
											<td>0</td>
											<td>Professional</td>
											<td>23,000</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#F00000"></span></td>
											<td>1947</td>
											<td>20.1</td>
										</tr>
										<tr>
											<td id="7442930">Guijuelo</td>
											<td><img src="modules/fmsdb/img/flags/s/ESP.gif" alt="Spain">  ESP</td>
											<td>Second Division B1</td>
											<td>0</td>
											<td>Professional</td>
											<td>1,500</td>
											<td><span class="label" style="background:#48A068"></span> <span class="label" style="background:#48A068"></span></td>
											<td>1974</td>
											<td>25.3</td>
										</tr>
										<tr>
											<td id="1716">Heracles</td>
											<td><img src="modules/fmsdb/img/flags/s/ESP.gif" alt="Spain">  ESP</td>
											<td>Second Division B3</td>
											<td>34K</td>
											<td>Professional</td>
											<td>29,500</td>
											<td><span class="label" style="background:#2070B0"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1922</td>
											<td>26.0</td>
										</tr>
										<tr>
											<td id="4203009">Hospitalet</td>
											<td><img src="modules/fmsdb/img/flags/s/ESP.gif" alt="Spain">  ESP</td>
											<td>Second Division B3</td>
											<td>0</td>
											<td>Professional</td>
											<td>6,740</td>
											<td><span class="label" style="background:#E00000"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1957</td>
											<td>24.5</td>
										</tr>
										<tr>
											<td id="1751">Huelva</td>
											<td><img src="modules/fmsdb/img/flags/s/ESP.gif" alt="Spain">  ESP</td>
											<td>Second Division B4</td>
											<td>89K</td>
											<td>Professional</td>
											<td>19,860</td>
											<td><span class="label" style="background:#0050D0"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1889</td>
											<td>24.1</td>
										</tr>
										<tr>
											<td id="4212294">Huesca</td>
											<td><img src="modules/fmsdb/img/flags/s/ESP.gif" alt="Spain">  ESP</td>
											<td>Second Division</td>
											<td>0</td>
											<td>Professional</td>
											<td>5,000</td>
											<td><span class="label" style="background:#A83040"></span> <span class="label" style="background:#2068B0"></span></td>
											<td>1960</td>
											<td>26.6</td>
										</tr>
										<tr>
											<td id="4212275">Izarra</td>
											<td><img src="modules/fmsdb/img/flags/s/ESP.gif" alt="Spain">  ESP</td>
											<td>Second Division B1</td>
											<td>0</td>
											<td>Semi-Professional</td>
											<td>3,500</td>
											<td><span class="label" style="background:#0050D0"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1924</td>
											<td>24.3</td>
										</tr>
										<tr>
											<td id="67156328">Jumilla</td>
											<td><img src="modules/fmsdb/img/flags/s/ESP.gif" alt="Spain">  ESP</td>
											<td>Second Division B4</td>
											<td>0</td>
											<td>Professional</td>
											<td>3,000</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#0050D0"></span></td>
											<td>2011</td>
											<td>27.0</td>
										</tr>
										<tr>
											<td id="7446450">La Roda</td>
											<td><img src="modules/fmsdb/img/flags/s/ESP.gif" alt="Spain">  ESP</td>
											<td>Second Division B4</td>
											<td>6K</td>
											<td>Professional</td>
											<td>3,000</td>
											<td><span class="label" style="background:#0030A0"></span> <span class="label" style="background:#F00000"></span></td>
											<td>1999</td>
											<td>24.4</td>
										</tr>
										<tr>
											<td id="1772">Las Palmas</td>
											<td><img src="modules/fmsdb/img/flags/s/ESP.gif" alt="Spain">  ESP</td>
											<td>First Division</td>
											<td>431K</td>
											<td>Professional</td>
											<td>32,000</td>
											<td><span class="label" style="background:#1068F8"></span> <span class="label" style="background:#F8F000"></span></td>
											<td>1949</td>
											<td>27.0</td>
										</tr>
										<tr>
											<td id="109003">Lealtad</td>
											<td><img src="modules/fmsdb/img/flags/s/ESP.gif" alt="Spain">  ESP</td>
											<td>Second Division B1</td>
											<td>0</td>
											<td>Semi-Professional</td>
											<td>3,000</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#000000"></span></td>
											<td>1919</td>
											<td>24.9</td>
										</tr>
										<tr>
											<td id="1678">Leganes</td>
											<td><img src="modules/fmsdb/img/flags/s/ESP.gif" alt="Spain">  ESP</td>
											<td>First Division</td>
											<td>0</td>
											<td>Professional</td>
											<td>11,000</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#0050D0"></span></td>
											<td>1928</td>
											<td>25.3</td>
										</tr>
										<tr>
											<td id="67059945">Leioa</td>
											<td><img src="modules/fmsdb/img/flags/s/ESP.gif" alt="Spain">  ESP</td>
											<td>Second Division B2</td>
											<td>0</td>
											<td>Semi-Professional</td>
											<td>2,000</td>
											<td><span class="label" style="background:#0030A0"></span> <span class="label" style="background:#D02028"></span></td>
											<td>1948</td>
											<td>23.9</td>
										</tr>
										<tr>
											<td id="2093">Leonesa</td>
											<td><img src="modules/fmsdb/img/flags/s/ESP.gif" alt="Spain">  ESP</td>
											<td>Second Division B1</td>
											<td>43K</td>
											<td>Professional</td>
											<td>13,451</td>
											<td><span class="label" style="background:#800020"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1923</td>
											<td>24.0</td>
										</tr>
										<tr>
											<td id="1717">Levante</td>
											<td><img src="modules/fmsdb/img/flags/s/ESP.gif" alt="Spain">  ESP</td>
											<td>Second Division</td>
											<td>0</td>
											<td>Professional</td>
											<td>25,354</td>
											<td><span class="label" style="background:#982028"></span> <span class="label" style="background:#2850A0"></span></td>
											<td>1909</td>
											<td>25.4</td>
										</tr>
										<tr>
											<td id="814092">Levante B</td>
											<td><img src="modules/fmsdb/img/flags/s/ESP.gif" alt="Spain">  ESP</td>
											<td>Second Division B3</td>
											<td>0</td>
											<td>Professional</td>
											<td>2,500</td>
											<td><span class="label" style="background:#E00000"></span> <span class="label" style="background:#305098"></span></td>
											<td>1939</td>
											<td>20.5</td>
										</tr>
										<tr>
											<td id="67174187">Linares</td>
											<td><img src="modules/fmsdb/img/flags/s/ESP.gif" alt="Spain">  ESP</td>
											<td>Second Division B4</td>
											<td>0</td>
											<td>Professional</td>
											<td>10,000</td>
											<td><span class="label" style="background:#0030A0"></span> <span class="label" style="background:#002080"></span></td>
											<td>2009</td>
											<td>24.1</td>
										</tr>
										<tr>
											<td id="4212111">Linense</td>
											<td><img src="modules/fmsdb/img/flags/s/ESP.gif" alt="Spain">  ESP</td>
											<td>Second Division B4</td>
											<td>7K</td>
											<td>Professional</td>
											<td>15,000</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1912</td>
											<td>25.2</td>
										</tr>
										<tr>
											<td id="67083594">Llagostera</td>
											<td><img src="modules/fmsdb/img/flags/s/ESP.gif" alt="Spain">  ESP</td>
											<td>Second Division B3</td>
											<td>11K</td>
											<td>Professional</td>
											<td>5,824</td>
											<td><span class="label" style="background:#C82030"></span> <span class="label" style="background:#304078"></span></td>
											<td>1947</td>
											<td>26.0</td>
										</tr>
										<tr>
											<td id="67148466">Lleida</td>
											<td><img src="modules/fmsdb/img/flags/s/ESP.gif" alt="Spain">  ESP</td>
											<td>Second Division B3</td>
											<td>10K</td>
											<td>Professional</td>
											<td>13,500</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#1850F8"></span></td>
											<td>2011</td>
											<td>24.8</td>
										</tr>
										<tr>
											<td id="67089705">Logrones</td>
											<td><img src="modules/fmsdb/img/flags/s/ESP.gif" alt="Spain">  ESP</td>
											<td>Second Division B2</td>
											<td>74K</td>
											<td>Professional</td>
											<td>16,000</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#E00000"></span></td>
											<td>2009</td>
											<td>24.6</td>
										</tr>
										<tr>
											<td id="67121454">Lorca</td>
											<td><img src="modules/fmsdb/img/flags/s/ESP.gif" alt="Spain">  ESP</td>
											<td>Second Division B4</td>
											<td>6K</td>
											<td>Professional</td>
											<td>8,064</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#0050D0"></span></td>
											<td>2003</td>
											<td>25.6</td>
										</tr>
										<tr>
											<td id="1695">Lugo</td>
											<td><img src="modules/fmsdb/img/flags/s/ESP.gif" alt="Spain">  ESP</td>
											<td>Second Division</td>
											<td>832K</td>
											<td>Professional</td>
											<td>7,500</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#E00000"></span></td>
											<td>1953</td>
											<td>25.0</td>
										</tr>
										<tr>
											<td id="2096">Malaga</td>
											<td><img src="modules/fmsdb/img/flags/s/ESP.gif" alt="Spain">  ESP</td>
											<td>First Division</td>
											<td>861K</td>
											<td>Professional</td>
											<td>28,963</td>
											<td><span class="label" style="background:#60A0D0"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1948</td>
											<td>26.0</td>
										</tr>
										<tr>
											<td id="1726">Mallorca</td>
											<td><img src="modules/fmsdb/img/flags/s/ESP.gif" alt="Spain">  ESP</td>
											<td>Second Division</td>
											<td>0</td>
											<td>Professional</td>
											<td>23,142</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#E01828"></span></td>
											<td>1916</td>
											<td>25.8</td>
										</tr>
										<tr>
											<td id="2098">Mallorca B</td>
											<td><img src="modules/fmsdb/img/flags/s/ESP.gif" alt="Spain">  ESP</td>
											<td>Second Division B3</td>
											<td>5K</td>
											<td>Professional</td>
											<td>2,000</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F00000"></span></td>
											<td>1983</td>
											<td>20.1</td>
										</tr>
										<tr>
											<td id="7446375">Mancha Real</td>
											<td><img src="modules/fmsdb/img/flags/s/ESP.gif" alt="Spain">  ESP</td>
											<td>Second Division B4</td>
											<td>0</td>
											<td>Semi-Professional</td>
											<td>2,500</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#00A030"></span></td>
											<td>1984</td>
											<td>25.4</td>
										</tr>
										<tr>
											<td id="1684">Marbella</td>
											<td><img src="modules/fmsdb/img/flags/s/ESP.gif" alt="Spain">  ESP</td>
											<td>Second Division B4</td>
											<td>0</td>
											<td>Professional</td>
											<td>7,000</td>
											<td><span class="label" style="background:#0050D0"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1997</td>
											<td>24.6</td>
										</tr>
										<tr>
											<td id="109027">Melilla</td>
											<td><img src="modules/fmsdb/img/flags/s/ESP.gif" alt="Spain">  ESP</td>
											<td>Second Division B4</td>
											<td>0</td>
											<td>Professional</td>
											<td>12,000</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#0078F8"></span></td>
											<td>1976</td>
											<td>26.2</td>
										</tr>
										<tr>
											<td id="1697">Mensajero</td>
											<td><img src="modules/fmsdb/img/flags/s/ESP.gif" alt="Spain">  ESP</td>
											<td>Second Division B2</td>
											<td>7K</td>
											<td>Semi-Professional</td>
											<td>6,000</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F00000"></span></td>
											<td>1922</td>
											<td>26.8</td>
										</tr>
										<tr>
											<td id="4212284">Merida</td>
											<td><img src="modules/fmsdb/img/flags/s/ESP.gif" alt="Spain">  ESP</td>
											<td>Second Division B4</td>
											<td>0</td>
											<td>Semi-Professional</td>
											<td>14,600</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1990</td>
											<td>24.3</td>
										</tr>
										<tr>
											<td id="109001">Mieres Deportivo</td>
											<td><img src="modules/fmsdb/img/flags/s/ESP.gif" alt="Spain">  ESP</td>
											<td>Second Division B1</td>
											<td>0</td>
											<td>Professional</td>
											<td>7,500</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
											<td>1918</td>
											<td>27.6</td>
										</tr>
										<tr>
											<td id="4212197">Mirandes</td>
											<td><img src="modules/fmsdb/img/flags/s/ESP.gif" alt="Spain">  ESP</td>
											<td>Second Division</td>
											<td>0</td>
											<td>Professional</td>
											<td>4,886</td>
											<td><span class="label" style="background:#D00818"></span> <span class="label" style="background:#981018"></span></td>
											<td>1927</td>
											<td>25.4</td>
										</tr>
										<tr>
											<td id="1739">Murcia</td>
											<td><img src="modules/fmsdb/img/flags/s/ESP.gif" alt="Spain">  ESP</td>
											<td>Second Division B4</td>
											<td>0</td>
											<td>Professional</td>
											<td>33,045</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#E00808"></span></td>
											<td>1908</td>
											<td>24.6</td>
										</tr>
										<tr>
											<td id="7446432">Mutilvera</td>
											<td><img src="modules/fmsdb/img/flags/s/ESP.gif" alt="Spain">  ESP</td>
											<td>Second Division B1</td>
											<td>0</td>
											<td>Semi-Professional</td>
											<td>1,000</td>
											<td><span class="label" style="background:#002060"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1914</td>
											<td>25.2</td>
										</tr>
										<tr>
											<td id="814350">Navalcarnero</td>
											<td><img src="modules/fmsdb/img/flags/s/ESP.gif" alt="Spain">  ESP</td>
											<td>Second Division B2</td>
											<td>0</td>
											<td>Semi-Professional</td>
											<td>2,500</td>
											<td><span class="label" style="background:#E00000"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1953</td>
											<td>24.6</td>
										</tr>
										<tr>
											<td id="1699">Numantia</td>
											<td><img src="modules/fmsdb/img/flags/s/ESP.gif" alt="Spain">  ESP</td>
											<td>Second Division</td>
											<td>0</td>
											<td>Professional</td>
											<td>9,025</td>
											<td><span class="label" style="background:#E00000"></span> <span class="label" style="background:#E00000"></span></td>
											<td>1945</td>
											<td>26.0</td>
										</tr>
										<tr>
											<td id="1741">Oviedo</td>
											<td><img src="modules/fmsdb/img/flags/s/ESP.gif" alt="Spain">  ESP</td>
											<td>Second Division</td>
											<td>86K</td>
											<td>Professional</td>
											<td>30,000</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#0078F8"></span></td>
											<td>1926</td>
											<td>28.0</td>
										</tr>
										<tr>
											<td id="67204085">Palencia</td>
											<td><img src="modules/fmsdb/img/flags/s/ESP.gif" alt="Spain">  ESP</td>
											<td>Second Division B1</td>
											<td>0</td>
											<td>Semi-Professional</td>
											<td>8,078</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#7868C0"></span></td>
											<td>2011</td>
											<td>28.0</td>
										</tr>
										<tr>
											<td id="4212307">Ponferrada</td>
											<td><img src="modules/fmsdb/img/flags/s/ESP.gif" alt="Spain">  ESP</td>
											<td>Second Division B1</td>
											<td>0</td>
											<td>Professional</td>
											<td>8,400</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#0050D0"></span></td>
											<td>1922</td>
											<td>25.1</td>
										</tr>
										<tr>
											<td id="1723">Pontevedra</td>
											<td><img src="modules/fmsdb/img/flags/s/ESP.gif" alt="Spain">  ESP</td>
											<td>Second Division B1</td>
											<td>0</td>
											<td>Professional</td>
											<td>12,000</td>
											<td><span class="label" style="background:#800040"></span> <span class="label" style="background:#800040"></span></td>
											<td>1941</td>
											<td>25.6</td>
										</tr>
										<tr>
											<td id="7442999">Prat</td>
											<td><img src="modules/fmsdb/img/flags/s/ESP.gif" alt="Spain">  ESP</td>
											<td>Second Division B3</td>
											<td>0</td>
											<td>Semi-Professional</td>
											<td>1,000</td>
											<td><span class="label" style="background:#002080"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1945</td>
											<td>26.5</td>
										</tr>
										<tr>
											<td id="2095">R. Jaen</td>
											<td><img src="modules/fmsdb/img/flags/s/ESP.gif" alt="Spain">  ESP</td>
											<td>Second Division B4</td>
											<td>24K</td>
											<td>Professional</td>
											<td>12,569</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1922</td>
											<td>26.1</td>
										</tr>
										<tr>
											<td id="1736">R. Madrid</td>
											<td><img src="modules/fmsdb/img/flags/s/ESP.gif" alt="Spain">  ESP</td>
											<td>First Division</td>
											<td>17M</td>
											<td>Professional</td>
											<td>80,354</td>
											<td><span class="label" style="background:#C0C0C0"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1902</td>
											<td>25.1</td>
										</tr>
										<tr>
											<td id="1737">R. Madrid B</td>
											<td><img src="modules/fmsdb/img/flags/s/ESP.gif" alt="Spain">  ESP</td>
											<td>Second Division B2</td>
											<td>0</td>
											<td>Professional</td>
											<td>8,400</td>
											<td><span class="label" style="background:#C0C0C0"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1972</td>
											<td>19.7</td>
										</tr>
										<tr>
											<td id="4212228">R. Majadahonda</td>
											<td><img src="modules/fmsdb/img/flags/s/ESP.gif" alt="Spain">  ESP</td>
											<td>Second Division B2</td>
											<td>0</td>
											<td>Semi-Professional</td>
											<td>3,865</td>
											<td><span class="label" style="background:#E00000"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1976</td>
											<td>26.7</td>
										</tr>
										<tr>
											<td id="1728">R. Santander</td>
											<td><img src="modules/fmsdb/img/flags/s/ESP.gif" alt="Spain">  ESP</td>
											<td>Second Division B1</td>
											<td>68K</td>
											<td>Professional</td>
											<td>22,124</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1913</td>
											<td>24.3</td>
										</tr>
										<tr>
											<td id="1733">Real Hispalis</td>
											<td><img src="modules/fmsdb/img/flags/s/ESP.gif" alt="Spain">  ESP</td>
											<td>First Division</td>
											<td>3M</td>
											<td>Professional</td>
											<td>52,500</td>
											<td><span class="label" style="background:#009848"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1907</td>
											<td>25.9</td>
										</tr>
										<tr>
											<td id="1746">Real Irun</td>
											<td><img src="modules/fmsdb/img/flags/s/ESP.gif" alt="Spain">  ESP</td>
											<td>Second Division B2</td>
											<td>0</td>
											<td>Professional</td>
											<td>4,600</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1915</td>
											<td>27.2</td>
										</tr>
										<tr>
											<td id="1742">Real San Sebastian</td>
											<td><img src="modules/fmsdb/img/flags/s/ESP.gif" alt="Spain">  ESP</td>
											<td>First Division</td>
											<td>861K</td>
											<td>Professional</td>
											<td>32,000</td>
											<td><span class="label" style="background:#2038B8"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1909</td>
											<td>25.6</td>
										</tr>
										<tr>
											<td id="1743">Real San Sebastian B</td>
											<td><img src="modules/fmsdb/img/flags/s/ESP.gif" alt="Spain">  ESP</td>
											<td>Second Division B2</td>
											<td>0</td>
											<td>Professional</td>
											<td>2,500</td>
											<td><span class="label" style="background:#2038B8"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1951</td>
											<td>20.5</td>
										</tr>
										<tr>
											<td id="4212272">Reus</td>
											<td><img src="modules/fmsdb/img/flags/s/ESP.gif" alt="Spain">  ESP</td>
											<td>Second Division</td>
											<td>16K</td>
											<td>Professional</td>
											<td>4,350</td>
											<td><span class="label" style="background:#E00000"></span> <span class="label" style="background:#000000"></span></td>
											<td>1909</td>
											<td>27.2</td>
										</tr>
										<tr>
											<td id="1744">S. Gijon</td>
											<td><img src="modules/fmsdb/img/flags/s/ESP.gif" alt="Spain">  ESP</td>
											<td>First Division</td>
											<td>0</td>
											<td>Professional</td>
											<td>25,885</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
											<td>1905</td>
											<td>25.0</td>
										</tr>
										<tr>
											<td id="1675">Sabadell</td>
											<td><img src="modules/fmsdb/img/flags/s/ESP.gif" alt="Spain">  ESP</td>
											<td>Second Division B3</td>
											<td>0</td>
											<td>Professional</td>
											<td>11,981</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#0860D0"></span></td>
											<td>1903</td>
											<td>24.4</td>
										</tr>
										<tr>
											<td id="67070379">San Fernando</td>
											<td><img src="modules/fmsdb/img/flags/s/ESP.gif" alt="Spain">  ESP</td>
											<td>Second Division B4</td>
											<td>0</td>
											<td>Professional</td>
											<td>8,000</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#0078F8"></span></td>
											<td>2000</td>
											<td>26.0</td>
										</tr>
										<tr>
											<td id="4212406">Sanluqueno</td>
											<td><img src="modules/fmsdb/img/flags/s/ESP.gif" alt="Spain">  ESP</td>
											<td>Second Division B4</td>
											<td>0</td>
											<td>Semi-Professional</td>
											<td>5,000</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#08C848"></span></td>
											<td>1948</td>
											<td>24.6</td>
										</tr>
										<tr>
											<td id="4200483">Sanse</td>
											<td><img src="modules/fmsdb/img/flags/s/ESP.gif" alt="Spain">  ESP</td>
											<td>Second Division B2</td>
											<td>0</td>
											<td>Semi-Professional</td>
											<td>2,000</td>
											<td><span class="label" style="background:#E00000"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1971</td>
											<td>25.4</td>
										</tr>
										<tr>
											<td id="521643">AC Oulu</td>
											<td><img src="modules/fmsdb/img/flags/s/FIN.gif" alt="Finland">  FIN</td>
											<td>First Division</td>
											<td>861</td>
											<td>Semi-Professional</td>
											<td>4,392</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#002060"></span></td>
											<td>2002</td>
											<td>22.5</td>
										</tr>
										<tr>
											<td id="514046">Ekenas IF</td>
											<td><img src="modules/fmsdb/img/flags/s/FIN.gif" alt="Finland">  FIN</td>
											<td>First Division</td>
											<td>0</td>
											<td>Semi-Professional</td>
											<td>1,900</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#008888"></span></td>
											<td>1905</td>
											<td>24.6</td>
										</tr>
										<tr>
											<td id="1300378">FC Inter</td>
											<td><img src="modules/fmsdb/img/flags/s/FIN.gif" alt="Finland">  FIN</td>
											<td>Premier League</td>
											<td>43K</td>
											<td>Professional</td>
											<td>9,372</td>
											<td><span class="label" style="background:#0030A0"></span> <span class="label" style="background:#000000"></span></td>
											<td>1990</td>
											<td>27.4</td>
										</tr>
										<tr>
											<td id="33004788">FC Jazz</td>
											<td><img src="modules/fmsdb/img/flags/s/FIN.gif" alt="Finland">  FIN</td>
											<td>First Division</td>
											<td>861</td>
											<td>Semi-Professional</td>
											<td>12,300</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#E00000"></span></td>
											<td>2002</td>
											<td>24.2</td>
										</tr>
										<tr>
											<td id="811">FC Lahti</td>
											<td><img src="modules/fmsdb/img/flags/s/FIN.gif" alt="Finland">  FIN</td>
											<td>Premier League</td>
											<td>9K</td>
											<td>Professional</td>
											<td>4,000</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#000000"></span></td>
											<td>1996</td>
											<td>24.6</td>
										</tr>
										<tr>
											<td id="513325">GrIFK</td>
											<td><img src="modules/fmsdb/img/flags/s/FIN.gif" alt="Finland">  FIN</td>
											<td>First Division</td>
											<td>0</td>
											<td>Semi-Professional</td>
											<td>5,100</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#006030"></span></td>
											<td>1925</td>
											<td>26.7</td>
										</tr>
										<tr>
											<td id="817">Haka</td>
											<td><img src="modules/fmsdb/img/flags/s/FIN.gif" alt="Finland">  FIN</td>
											<td>First Division</td>
											<td>861</td>
											<td>Semi-Professional</td>
											<td>3,200</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1934</td>
											<td>22.5</td>
										</tr>
										<tr>
											<td id="129129">HIFK</td>
											<td><img src="modules/fmsdb/img/flags/s/FIN.gif" alt="Finland">  FIN</td>
											<td>Premier League</td>
											<td>9K</td>
											<td>Semi-Professional</td>
											<td>10,770</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#E00000"></span></td>
											<td>1897</td>
											<td>28.1</td>
										</tr>
										<tr>
											<td id="816">HJK</td>
											<td><img src="modules/fmsdb/img/flags/s/FIN.gif" alt="Finland">  FIN</td>
											<td>Premier League</td>
											<td>345K</td>
											<td>Professional</td>
											<td>10,770</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#0030A0"></span></td>
											<td>1907</td>
											<td>24.9</td>
										</tr>
										<tr>
											<td id="129179">IFK Mariehamn</td>
											<td><img src="modules/fmsdb/img/flags/s/FIN.gif" alt="Finland">  FIN</td>
											<td>Premier League</td>
											<td>34K</td>
											<td>Professional</td>
											<td>2,635</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1919</td>
											<td>25.3</td>
										</tr>
										<tr>
											<td id="510307">Ilves</td>
											<td><img src="modules/fmsdb/img/flags/s/FIN.gif" alt="Finland">  FIN</td>
											<td>Premier League</td>
											<td>9K</td>
											<td>Professional</td>
											<td>5,000</td>
											<td><span class="label" style="background:#089060"></span> <span class="label" style="background:#F8F000"></span></td>
											<td>1931</td>
											<td>25.1</td>
										</tr>
										<tr>
											<td id="813">Jaro</td>
											<td><img src="modules/fmsdb/img/flags/s/FIN.gif" alt="Finland">  FIN</td>
											<td>First Division</td>
											<td>4K</td>
											<td>Semi-Professional</td>
											<td>5,611</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#E00000"></span></td>
											<td>1965</td>
											<td>23.7</td>
										</tr>
										<tr>
											<td id="129191">JJK</td>
											<td><img src="modules/fmsdb/img/flags/s/FIN.gif" alt="Finland">  FIN</td>
											<td>First Division</td>
											<td>861</td>
											<td>Semi-Professional</td>
											<td>4,500</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#880828"></span></td>
											<td>1992</td>
											<td>24.1</td>
										</tr>
										<tr>
											<td id="129208">KPV</td>
											<td><img src="modules/fmsdb/img/flags/s/FIN.gif" alt="Finland">  FIN</td>
											<td>First Division</td>
											<td>861</td>
											<td>Semi-Professional</td>
											<td>3,000</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#008030"></span></td>
											<td>1930</td>
											<td>27.6</td>
										</tr>
										<tr>
											<td id="521105">KTP</td>
											<td><img src="modules/fmsdb/img/flags/s/FIN.gif" alt="Finland">  FIN</td>
											<td>First Division</td>
											<td>2K</td>
											<td>Semi-Professional</td>
											<td>4,252</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#008030"></span></td>
											<td>1927</td>
											<td>23.8</td>
										</tr>
										<tr>
											<td id="818">KuPS</td>
											<td><img src="modules/fmsdb/img/flags/s/FIN.gif" alt="Finland">  FIN</td>
											<td>Premier League</td>
											<td>9K</td>
											<td>Professional</td>
											<td>4,700</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F8F000"></span></td>
											<td>1923</td>
											<td>23.9</td>
										</tr>
										<tr>
											<td id="510218">PK-35 Vantaa</td>
											<td><img src="modules/fmsdb/img/flags/s/FIN.gif" alt="Finland">  FIN</td>
											<td>Premier League</td>
											<td>861</td>
											<td>Semi-Professional</td>
											<td>4,600</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#E00000"></span></td>
											<td>1935</td>
											<td>21.1</td>
										</tr>
										<tr>
											<td id="129159">PS Kemi</td>
											<td><img src="modules/fmsdb/img/flags/s/FIN.gif" alt="Finland">  FIN</td>
											<td>Premier League</td>
											<td>9K</td>
											<td>Semi-Professional</td>
											<td>1,200</td>
											<td><span class="label" style="background:#0030A0"></span> <span class="label" style="background:#E00000"></span></td>
											<td>1999</td>
											<td>24.8</td>
										</tr>
										<tr>
											<td id="821">RoPS</td>
											<td><img src="modules/fmsdb/img/flags/s/FIN.gif" alt="Finland">  FIN</td>
											<td>Premier League</td>
											<td>9K</td>
											<td>Professional</td>
											<td>3,203</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#0050D0"></span></td>
											<td>1950</td>
											<td>24.9</td>
										</tr>
										<tr>
											<td id="33007394">SJK</td>
											<td><img src="modules/fmsdb/img/flags/s/FIN.gif" alt="Finland">  FIN</td>
											<td>Premier League</td>
											<td>65K</td>
											<td>Professional</td>
											<td>4,798</td>
											<td><span class="label" style="background:#D8B028"></span> <span class="label" style="background:#000000"></span></td>
											<td>2007</td>
											<td>25.4</td>
										</tr>
										<tr>
											<td id="822">TPS</td>
											<td><img src="modules/fmsdb/img/flags/s/FIN.gif" alt="Finland">  FIN</td>
											<td>First Division</td>
											<td>861</td>
											<td>Semi-Professional</td>
											<td>730</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
											<td>1922</td>
											<td>23.1</td>
										</tr>
										<tr>
											<td id="1300376">VPS</td>
											<td><img src="modules/fmsdb/img/flags/s/FIN.gif" alt="Finland">  FIN</td>
											<td>Premier League</td>
											<td>9K</td>
											<td>Professional</td>
											<td>5,900</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#000000"></span></td>
											<td>1924</td>
											<td>24.7</td>
										</tr>
										<tr>
											<td id="85012713">A.S Beziers</td>
											<td><img src="modules/fmsdb/img/flags/s/FRA.gif" alt="France">  FRA</td>
											<td>National</td>
											<td>0</td>
											<td>Semi-Professional</td>
											<td>12,000</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
											<td>2007</td>
											<td>24.8</td>
										</tr>
										<tr>
											<td id="400362">AC Ajaccio</td>
											<td><img src="modules/fmsdb/img/flags/s/FRA.gif" alt="France">  FRA</td>
											<td>Domino's Ligue 2</td>
											<td>0</td>
											<td>Professional</td>
											<td>10,660</td>
											<td><span class="label" style="background:#E00000"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1910</td>
											<td>25.2</td>
										</tr>
										<tr>
											<td id="824">AJ Auxerre</td>
											<td><img src="modules/fmsdb/img/flags/s/FRA.gif" alt="France">  FRA</td>
											<td>Domino's Ligue 2</td>
											<td>4M</td>
											<td>Professional</td>
											<td>21,379</td>
											<td><span class="label" style="background:#E0E0E0"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1905</td>
											<td>22.9</td>
										</tr>
										<tr>
											<td id="831">Amiens SC</td>
											<td><img src="modules/fmsdb/img/flags/s/FRA.gif" alt="France">  FRA</td>
											<td>Domino's Ligue 2</td>
											<td>0</td>
											<td>Professional</td>
											<td>12,097</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1901</td>
											<td>26.2</td>
										</tr>
										<tr>
											<td id="875">Angers SCO</td>
											<td><img src="modules/fmsdb/img/flags/s/FRA.gif" alt="France">  FRA</td>
											<td>Ligue 1</td>
											<td>861K</td>
											<td>Professional</td>
											<td>17,061</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#000000"></span></td>
											<td>1919</td>
											<td>26.5</td>
										</tr>
										<tr>
											<td id="826">AS Monaco</td>
											<td><img src="modules/fmsdb/img/flags/s/FRA.gif" alt="France">  FRA</td>
											<td>Ligue 1</td>
											<td>22M</td>
											<td>Professional</td>
											<td>18,521</td>
											<td><span class="label" style="background:#E00000"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1924</td>
											<td>24.3</td>
										</tr>
										<tr>
											<td id="827">AS Nancy Lorraine</td>
											<td><img src="modules/fmsdb/img/flags/s/FRA.gif" alt="France">  FRA</td>
											<td>Ligue 1</td>
											<td>1M</td>
											<td>Professional</td>
											<td>20,087</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
											<td>1967</td>
											<td>27.1</td>
										</tr>
										<tr>
											<td id="828">AS Saint-Etienne</td>
											<td><img src="modules/fmsdb/img/flags/s/FRA.gif" alt="France">  FRA</td>
											<td>Ligue 1</td>
											<td>861K</td>
											<td>Professional</td>
											<td>41,965</td>
											<td><span class="label" style="background:#00A840"></span> <span class="label" style="background:#58C870"></span></td>
											<td>1933</td>
											<td>26.2</td>
										</tr>
										<tr>
											<td id="8162173">ASM Belfort</td>
											<td><img src="modules/fmsdb/img/flags/s/FRA.gif" alt="France">  FRA</td>
											<td>National</td>
											<td>0</td>
											<td>Semi-Professional</td>
											<td>5,500</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#083078"></span></td>
											<td>1971</td>
											<td>27.0</td>
										</tr>
										<tr>
											<td id="1980">Bourg-en-Bresse 01</td>
											<td><img src="modules/fmsdb/img/flags/s/FRA.gif" alt="France">  FRA</td>
											<td>Domino's Ligue 2</td>
											<td>0</td>
											<td>Professional</td>
											<td>11,400</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#0050D0"></span></td>
											<td>1942</td>
											<td>26.5</td>
										</tr>
										<tr>
											<td id="6201842">CA Bastia</td>
											<td><img src="modules/fmsdb/img/flags/s/FRA.gif" alt="France">  FRA</td>
											<td>National</td>
											<td>0</td>
											<td>Semi-Professional</td>
											<td>1,300</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#000000"></span></td>
											<td>1920</td>
											<td>24.6</td>
										</tr>
										<tr>
											<td id="838">Chamois Niortais FC</td>
											<td><img src="modules/fmsdb/img/flags/s/FRA.gif" alt="France">  FRA</td>
											<td>Domino's Ligue 2</td>
											<td>0</td>
											<td>Professional</td>
											<td>10,406</td>
											<td><span class="label" style="background:#003068"></span> <span class="label" style="background:#0078F8"></span></td>
											<td>1925</td>
											<td>24.6</td>
										</tr>
										<tr>
											<td id="1992">Clermont Foot</td>
											<td><img src="modules/fmsdb/img/flags/s/FRA.gif" alt="France">  FRA</td>
											<td>Domino's Ligue 2</td>
											<td>0</td>
											<td>Professional</td>
											<td>11,980</td>
											<td><span class="label" style="background:#003068"></span> <span class="label" style="background:#A01048"></span></td>
											<td>1990</td>
											<td>25.0</td>
										</tr>
										<tr>
											<td id="880">CS Sedan Ardennes</td>
											<td><img src="modules/fmsdb/img/flags/s/FRA.gif" alt="France">  FRA</td>
											<td>National</td>
											<td>0</td>
											<td>Semi-Professional</td>
											<td>24,389</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
											<td>1919</td>
											<td>25.3</td>
										</tr>
										<tr>
											<td id="839">Dijon FCO</td>
											<td><img src="modules/fmsdb/img/flags/s/FRA.gif" alt="France">  FRA</td>
											<td>Ligue 1</td>
											<td>861K</td>
											<td>Professional</td>
											<td>16,098</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F00000"></span></td>
											<td>1998</td>
											<td>27.1</td>
										</tr>
										<tr>
											<td id="840">En Avant de Guingamp</td>
											<td><img src="modules/fmsdb/img/flags/s/FRA.gif" alt="France">  FRA</td>
											<td>Ligue 1</td>
											<td>1M</td>
											<td>Professional</td>
											<td>18,378</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#E00000"></span></td>
											<td>1912</td>
											<td>27.2</td>
										</tr>
										<tr>
											<td id="1971">ESTAC Troyes</td>
											<td><img src="modules/fmsdb/img/flags/s/FRA.gif" alt="France">  FRA</td>
											<td>Domino's Ligue 2</td>
											<td>1M</td>
											<td>Professional</td>
											<td>20,842</td>
											<td><span class="label" style="background:#082040"></span> <span class="label" style="background:#0030A0"></span></td>
											<td>1986</td>
											<td>26.2</td>
										</tr>
										<tr>
											<td id="85066817">FC Chambly-Oise</td>
											<td><img src="modules/fmsdb/img/flags/s/FRA.gif" alt="France">  FRA</td>
											<td>National</td>
											<td>49K</td>
											<td>Semi-Professional</td>
											<td>2,500</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#002080"></span></td>
											<td>1989</td>
											<td>26.9</td>
										</tr>
										<tr>
											<td id="2005">FC Lorient</td>
											<td><img src="modules/fmsdb/img/flags/s/FRA.gif" alt="France">  FRA</td>
											<td>Ligue 1</td>
											<td>4M</td>
											<td>Professional</td>
											<td>16,450</td>
											<td><span class="label" style="background:#F86000"></span> <span class="label" style="background:#F87000"></span></td>
											<td>1926</td>
											<td>26.5</td>
										</tr>
										<tr>
											<td id="844">FC Metz</td>
											<td><img src="modules/fmsdb/img/flags/s/FRA.gif" alt="France">  FRA</td>
											<td>Ligue 1</td>
											<td>207K</td>
											<td>Professional</td>
											<td>25,636</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#800020"></span></td>
											<td>1932</td>
											<td>25.9</td>
										</tr>
										<tr>
											<td id="846">FC Nantes</td>
											<td><img src="modules/fmsdb/img/flags/s/FRA.gif" alt="France">  FRA</td>
											<td>Ligue 1</td>
											<td>5M</td>
											<td>Professional</td>
											<td>38,285</td>
											<td><span class="label" style="background:#309060"></span> <span class="label" style="background:#F8F000"></span></td>
											<td>1943</td>
											<td>23.7</td>
										</tr>
										<tr>
											<td id="2009">FC Sochaux-Montbe</td>
											<td><img src="modules/fmsdb/img/flags/s/FRA.gif" alt="France">  FRA</td>
											<td>Domino's Ligue 2</td>
											<td>0</td>
											<td>Professional</td>
											<td>20,005</td>
											<td><span class="label" style="background:#082040"></span> <span class="label" style="background:#F8D828"></span></td>
											<td>1928</td>
											<td>24.5</td>
										</tr>
										<tr>
											<td id="2015">GFC Ajaccio</td>
											<td><img src="modules/fmsdb/img/flags/s/FRA.gif" alt="France">  FRA</td>
											<td>Domino's Ligue 2</td>
											<td>0</td>
											<td>Professional</td>
											<td>5,000</td>
											<td><span class="label" style="background:#203050"></span> <span class="label" style="background:#F03838"></span></td>
											<td>1910</td>
											<td>27.1</td>
										</tr>
										<tr>
											<td id="851">Girondins de Bordeaux</td>
											<td><img src="modules/fmsdb/img/flags/s/FRA.gif" alt="France">  FRA</td>
											<td>Ligue 1</td>
											<td>3M</td>
											<td>Professional</td>
											<td>42,115</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#101838"></span></td>
											<td>1881</td>
											<td>24.7</td>
										</tr>
										<tr>
											<td id="34003361">Groupe Sportif Consolat</td>
											<td><img src="modules/fmsdb/img/flags/s/FRA.gif" alt="France">  FRA</td>
											<td>National</td>
											<td>0</td>
											<td>Semi-Professional</td>
											<td>1,990</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
											<td>1964</td>
											<td>26.9</td>
										</tr>
										<tr>
											<td id="856">Havre Athletic Club</td>
											<td><img src="modules/fmsdb/img/flags/s/FRA.gif" alt="France">  FRA</td>
											<td>Domino's Ligue 2</td>
											<td>431K</td>
											<td>Professional</td>
											<td>25,278</td>
											<td><span class="label" style="background:#002850"></span> <span class="label" style="background:#60C0F8"></span></td>
											<td>1872</td>
											<td>25.0</td>
										</tr>
										<tr>
											<td id="855">La Berrichonne</td>
											<td><img src="modules/fmsdb/img/flags/s/FRA.gif" alt="France">  FRA</td>
											<td>National</td>
											<td>258K</td>
											<td>Professional</td>
											<td>17,072</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
											<td>1883</td>
											<td>25.4</td>
										</tr>
										<tr>
											<td id="858">LOSC</td>
											<td><img src="modules/fmsdb/img/flags/s/FRA.gif" alt="France">  FRA</td>
											<td>Ligue 1</td>
											<td>4M</td>
											<td>Professional</td>
											<td>50,083</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
											<td>1944</td>
											<td>26.7</td>
										</tr>
										<tr>
											<td id="400984">Lyon-Duchere AS</td>
											<td><img src="modules/fmsdb/img/flags/s/FRA.gif" alt="France">  FRA</td>
											<td>National</td>
											<td>43K</td>
											<td>Semi-Professional</td>
											<td>5,438</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F8E848"></span></td>
											<td>1963</td>
											<td>27.4</td>
										</tr>
										<tr>
											<td id="859">Montpellier HSC</td>
											<td><img src="modules/fmsdb/img/flags/s/FRA.gif" alt="France">  FRA</td>
											<td>Ligue 1</td>
											<td>4M</td>
											<td>Professional</td>
											<td>32,950</td>
											<td><span class="label" style="background:#F87000"></span> <span class="label" style="background:#002060"></span></td>
											<td>1974</td>
											<td>26.7</td>
										</tr>
										<tr>
											<td id="860">Nimes Olympique</td>
											<td><img src="modules/fmsdb/img/flags/s/FRA.gif" alt="France">  FRA</td>
											<td>Domino's Ligue 2</td>
											<td>0</td>
											<td>Professional</td>
											<td>18,482</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#E00000"></span></td>
											<td>1937</td>
											<td>24.7</td>
										</tr>
										<tr>
											<td id="862">OGC Nice</td>
											<td><img src="modules/fmsdb/img/flags/s/FRA.gif" alt="France">  FRA</td>
											<td>Ligue 1</td>
											<td>2M</td>
											<td>Professional</td>
											<td>36,178</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#E00000"></span></td>
											<td>1904</td>
											<td>24.0</td>
										</tr>
										<tr>
											<td id="865">Olympique Lyonnais</td>
											<td><img src="modules/fmsdb/img/flags/s/FRA.gif" alt="France">  FRA</td>
											<td>Ligue 1</td>
											<td>3M</td>
											<td>Professional</td>
											<td>59,286</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
											<td>1950</td>
											<td>24.2</td>
										</tr>
										<tr>
											<td id="866">OM</td>
											<td><img src="modules/fmsdb/img/flags/s/FRA.gif" alt="France">  FRA</td>
											<td>Ligue 1</td>
											<td>9M</td>
											<td>Professional</td>
											<td>67,354</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
											<td>1899</td>
											<td>25.7</td>
										</tr>
										<tr>
											<td id="867">Paris FC</td>
											<td><img src="modules/fmsdb/img/flags/s/FRA.gif" alt="France">  FRA</td>
											<td>National</td>
											<td>0</td>
											<td>Professional</td>
											<td>20,000</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#002060"></span></td>
											<td>1969</td>
											<td>26.9</td>
										</tr>
										<tr>
											<td id="868">Paris Saint-Germain</td>
											<td><img src="modules/fmsdb/img/flags/s/FRA.gif" alt="France">  FRA</td>
											<td>Ligue 1</td>
											<td>52M</td>
											<td>Professional</td>
											<td>47,929</td>
											<td><span class="label" style="background:#E00000"></span> <span class="label" style="background:#082040"></span></td>
											<td>1970</td>
											<td>25.1</td>
										</tr>
										<tr>
											<td id="2090">Pau FC</td>
											<td><img src="modules/fmsdb/img/flags/s/FRA.gif" alt="France">  FRA</td>
											<td>National</td>
											<td>50K</td>
											<td>Semi-Professional</td>
											<td>14,500</td>
											<td><span class="label" style="background:#F8F800"></span> <span class="label" style="background:#501080"></span></td>
											<td>1959</td>
											<td>25.3</td>
										</tr>
										<tr>
											<td id="50034825">Quevilly Rouen Metropole</td>
											<td><img src="modules/fmsdb/img/flags/s/FRA.gif" alt="France">  FRA</td>
											<td>National</td>
											<td>43K</td>
											<td>Semi-Professional</td>
											<td>11,037</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
											<td>2015</td>
											<td>26.2</td>
										</tr>
										<tr>
											<td id="871">Racing Club de Lens</td>
											<td><img src="modules/fmsdb/img/flags/s/FRA.gif" alt="France">  FRA</td>
											<td>Domino's Ligue 2</td>
											<td>603K</td>
											<td>Professional</td>
											<td>38,233</td>
											<td><span class="label" style="background:#F8D000"></span> <span class="label" style="background:#F00000"></span></td>
											<td>1906</td>
											<td>25.4</td>
										</tr>
										<tr>
											<td id="872">RC Strasbourg Alsace</td>
											<td><img src="modules/fmsdb/img/flags/s/FRA.gif" alt="France">  FRA</td>
											<td>Domino's Ligue 2</td>
											<td>0</td>
											<td>Professional</td>
											<td>29,000</td>
											<td><span class="label" style="background:#0030A0"></span> <span class="label" style="background:#083078"></span></td>
											<td>1906</td>
											<td>28.0</td>
										</tr>
										<tr>
											<td id="873">Red Star FC</td>
											<td><img src="modules/fmsdb/img/flags/s/FRA.gif" alt="France">  FRA</td>
											<td>Domino's Ligue 2</td>
											<td>0</td>
											<td>Professional</td>
											<td>20,000</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#004030"></span></td>
											<td>1897</td>
											<td>25.0</td>
										</tr>
										<tr>
											<td id="881">SAS Epinal</td>
											<td><img src="modules/fmsdb/img/flags/s/FRA.gif" alt="France">  FRA</td>
											<td>National</td>
											<td>0</td>
											<td>Semi-Professional</td>
											<td>7,200</td>
											<td><span class="label" style="background:#0050D0"></span> <span class="label" style="background:#F8F000"></span></td>
											<td>1941</td>
											<td>25.6</td>
										</tr>
										<tr>
											<td id="876">SC Bastia</td>
											<td><img src="modules/fmsdb/img/flags/s/FRA.gif" alt="France">  FRA</td>
											<td>Ligue 1</td>
											<td>0</td>
											<td>Professional</td>
											<td>17,280</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#0030A0"></span></td>
											<td>1905</td>
											<td>25.8</td>
										</tr>
										<tr>
											<td id="2061">Stade Brestois 29</td>
											<td><img src="modules/fmsdb/img/flags/s/FRA.gif" alt="France">  FRA</td>
											<td>Domino's Ligue 2</td>
											<td>0</td>
											<td>Professional</td>
											<td>15,583</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#E00000"></span></td>
											<td>1950</td>
											<td>24.8</td>
										</tr>
										<tr>
											<td id="2047">Stade de Reims</td>
											<td><img src="modules/fmsdb/img/flags/s/FRA.gif" alt="France">  FRA</td>
											<td>Domino's Ligue 2</td>
											<td>1M</td>
											<td>Professional</td>
											<td>21,684</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#C80000"></span></td>
											<td>1931</td>
											<td>25.8</td>
										</tr>
										<tr>
											<td id="2062">Stade Lavallois MFC</td>
											<td><img src="modules/fmsdb/img/flags/s/FRA.gif" alt="France">  FRA</td>
											<td>Domino's Ligue 2</td>
											<td>0</td>
											<td>Professional</td>
											<td>18,467</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F87000"></span></td>
											<td>1902</td>
											<td>26.5</td>
										</tr>
										<tr>
											<td id="877">Stade Malherbe Caen</td>
											<td><img src="modules/fmsdb/img/flags/s/FRA.gif" alt="France">  FRA</td>
											<td>Ligue 1</td>
											<td>2M</td>
											<td>Professional</td>
											<td>21,000</td>
											<td><span class="label" style="background:#D81820"></span> <span class="label" style="background:#2060A8"></span></td>
											<td>1913</td>
											<td>27.5</td>
										</tr>
										<tr>
											<td id="884">Stade Rennais FC</td>
											<td><img src="modules/fmsdb/img/flags/s/FRA.gif" alt="France">  FRA</td>
											<td>Ligue 1</td>
											<td>4M</td>
											<td>Professional</td>
											<td>29,778</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#E00808"></span></td>
											<td>1901</td>
											<td>26.3</td>
										</tr>
										<tr>
											<td id="886">Toulouse FC</td>
											<td><img src="modules/fmsdb/img/flags/s/FRA.gif" alt="France">  FRA</td>
											<td>Ligue 1</td>
											<td>1M</td>
											<td>Professional</td>
											<td>33,150</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#604090"></span></td>
											<td>1970</td>
											<td>24.7</td>
										</tr>
										<tr>
											<td id="2010">Tours FC</td>
											<td><img src="modules/fmsdb/img/flags/s/FRA.gif" alt="France">  FRA</td>
											<td>Domino's Ligue 2</td>
											<td>0</td>
											<td>Professional</td>
											<td>16,247</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#50C0F0"></span></td>
											<td>1951</td>
											<td>24.2</td>
										</tr>
										<tr>
											<td id="2068">US Avranches</td>
											<td><img src="modules/fmsdb/img/flags/s/FRA.gif" alt="France">  FRA</td>
											<td>National</td>
											<td>0</td>
											<td>Semi-Professional</td>
											<td>2,000</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#0050D0"></span></td>
											<td>1897</td>
											<td>23.8</td>
										</tr>
										<tr>
											<td id="3501956">US Concarneau</td>
											<td><img src="modules/fmsdb/img/flags/s/FRA.gif" alt="France">  FRA</td>
											<td>National</td>
											<td>37K</td>
											<td>Semi-Professional</td>
											<td>6,500</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
											<td>1911</td>
											<td>26.7</td>
										</tr>
										<tr>
											<td id="2069">US Creteil-Lusitanos</td>
											<td><img src="modules/fmsdb/img/flags/s/FRA.gif" alt="France">  FRA</td>
											<td>National</td>
											<td>0</td>
											<td>Professional</td>
											<td>12,150</td>
											<td><span class="label" style="background:#E8C060"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1936</td>
											<td>25.6</td>
										</tr>
										<tr>
											<td id="2075">US Orleans</td>
											<td><img src="modules/fmsdb/img/flags/s/FRA.gif" alt="France">  FRA</td>
											<td>Domino's Ligue 2</td>
											<td>0</td>
											<td>Professional</td>
											<td>6,833</td>
											<td><span class="label" style="background:#E00000"></span> <span class="label" style="background:#F8F000"></span></td>
											<td>1976</td>
											<td>28.3</td>
										</tr>
										<tr>
											<td id="2002">USBCO</td>
											<td><img src="modules/fmsdb/img/flags/s/FRA.gif" alt="France">  FRA</td>
											<td>National</td>
											<td>0</td>
											<td>Semi-Professional</td>
											<td>15,204</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#E00808"></span></td>
											<td>1898</td>
											<td>26.7</td>
										</tr>
										<tr>
											<td id="2072">USL Dunkerque</td>
											<td><img src="modules/fmsdb/img/flags/s/FRA.gif" alt="France">  FRA</td>
											<td>National</td>
											<td>0</td>
											<td>Semi-Professional</td>
											<td>4,200</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
											<td>1954</td>
											<td>26.2</td>
										</tr>
										<tr>
											<td id="888">Valenciennes FC</td>
											<td><img src="modules/fmsdb/img/flags/s/FRA.gif" alt="France">  FRA</td>
											<td>Domino's Ligue 2</td>
											<td>0</td>
											<td>Professional</td>
											<td>24,926</td>
											<td><span class="label" style="background:#A00820"></span> <span class="label" style="background:#E00000"></span></td>
											<td>1913</td>
											<td>24.9</td>
										</tr>
										<tr>
											<td id="6201846">Vendee Herbiers Football</td>
											<td><img src="modules/fmsdb/img/flags/s/FRA.gif" alt="France">  FRA</td>
											<td>National</td>
											<td>57K</td>
											<td>Semi-Professional</td>
											<td>3,000</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
											<td>1949</td>
											<td>25.8</td>
										</tr>
										<tr>
											<td id="121219">Aalen</td>
											<td><img src="modules/fmsdb/img/flags/s/GER.gif" alt="Germany">  GER</td>
											<td>Third Division</td>
											<td>0</td>
											<td>Professional</td>
											<td>14,500</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1921</td>
											<td>23.5</td>
										</tr>
										<tr>
											<td id="121183">Aue</td>
											<td><img src="modules/fmsdb/img/flags/s/GER.gif" alt="Germany">  GER</td>
											<td>Second Division</td>
											<td>0</td>
											<td>Professional</td>
											<td>16,750</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#503098"></span></td>
											<td>1946</td>
											<td>24.5</td>
										</tr>
										<tr>
											<td id="2238">Augsburg</td>
											<td><img src="modules/fmsdb/img/flags/s/GER.gif" alt="Germany">  GER</td>
											<td>First Division</td>
											<td>861K</td>
											<td>Professional</td>
											<td>30,660</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1907</td>
											<td>26.5</td>
										</tr>
										<tr>
											<td id="915">Bayern</td>
											<td><img src="modules/fmsdb/img/flags/s/GER.gif" alt="Germany">  GER</td>
											<td>First Division</td>
											<td>34M</td>
											<td>Professional</td>
											<td>75,024</td>
											<td><span class="label" style="background:#B00000"></span> <span class="label" style="background:#E00000"></span></td>
											<td>1900</td>
											<td>26.0</td>
										</tr>
										<tr>
											<td id="121182">Berlin-Kopenick Dammfeld</td>
											<td><img src="modules/fmsdb/img/flags/s/GER.gif" alt="Germany">  GER</td>
											<td>Second Division</td>
											<td>431K</td>
											<td>Professional</td>
											<td>21,717</td>
											<td><span class="label" style="background:#F0B010"></span> <span class="label" style="background:#C80000"></span></td>
											<td>1966</td>
											<td>26.0</td>
										</tr>
										<tr>
											<td id="904">Bielefeld</td>
											<td><img src="modules/fmsdb/img/flags/s/GER.gif" alt="Germany">  GER</td>
											<td>Second Division</td>
											<td>43K</td>
											<td>Professional</td>
											<td>26,137</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#0050D0"></span></td>
											<td>1905</td>
											<td>26.3</td>
										</tr>
										<tr>
											<td id="908">BMG</td>
											<td><img src="modules/fmsdb/img/flags/s/GER.gif" alt="Germany">  GER</td>
											<td>First Division</td>
											<td>10M</td>
											<td>Professional</td>
											<td>54,010</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1900</td>
											<td>24.6</td>
										</tr>
										<tr>
											<td id="905">Bochum</td>
											<td><img src="modules/fmsdb/img/flags/s/GER.gif" alt="Germany">  GER</td>
											<td>Second Division</td>
											<td>258K</td>
											<td>Professional</td>
											<td>29,299</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#0050D0"></span></td>
											<td>1938</td>
											<td>23.9</td>
										</tr>
										<tr>
											<td id="2237">Braunschweig</td>
											<td><img src="modules/fmsdb/img/flags/s/GER.gif" alt="Germany">  GER</td>
											<td>Second Division</td>
											<td>603K</td>
											<td>Professional</td>
											<td>23,325</td>
											<td><span class="label" style="background:#0078F8"></span> <span class="label" style="background:#F8F000"></span></td>
											<td>1895</td>
											<td>24.9</td>
										</tr>
										<tr>
											<td id="948">Bremen</td>
											<td><img src="modules/fmsdb/img/flags/s/GER.gif" alt="Germany">  GER</td>
											<td>First Division</td>
											<td>3M</td>
											<td>Professional</td>
											<td>42,500</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#088070"></span></td>
											<td>1899</td>
											<td>26.3</td>
										</tr>
										<tr>
											<td id="103285">Bremen II</td>
											<td><img src="modules/fmsdb/img/flags/s/GER.gif" alt="Germany">  GER</td>
											<td>Third Division</td>
											<td>0</td>
											<td>Professional</td>
											<td>5,500</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
											<td>0</td>
											<td>22.6</td>
										</tr>
										<tr>
											<td id="941">Chemnitz</td>
											<td><img src="modules/fmsdb/img/flags/s/GER.gif" alt="Germany">  GER</td>
											<td>Third Division</td>
											<td>0</td>
											<td>Professional</td>
											<td>15,000</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#4898D0"></span></td>
											<td>1966</td>
											<td>23.8</td>
										</tr>
										<tr>
											<td id="108997">Darmstadt</td>
											<td><img src="modules/fmsdb/img/flags/s/GER.gif" alt="Germany">  GER</td>
											<td>First Division</td>
											<td>2M</td>
											<td>Professional</td>
											<td>17,000</td>
											<td><span class="label" style="background:#082040"></span> <span class="label" style="background:#2858B0"></span></td>
											<td>1898</td>
											<td>26.4</td>
										</tr>
										<tr>
											<td id="907">Dortmund</td>
											<td><img src="modules/fmsdb/img/flags/s/GER.gif" alt="Germany">  GER</td>
											<td>First Division</td>
											<td>16M</td>
											<td>Professional</td>
											<td>81,359</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F8F000"></span></td>
											<td>1909</td>
											<td>24.7</td>
										</tr>
										<tr>
											<td id="911">Dresden</td>
											<td><img src="modules/fmsdb/img/flags/s/GER.gif" alt="Germany">  GER</td>
											<td>Second Division</td>
											<td>431K</td>
											<td>Professional</td>
											<td>32,066</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F0B010"></span></td>
											<td>1953</td>
											<td>24.0</td>
										</tr>
										<tr>
											<td id="933">Duisburg</td>
											<td><img src="modules/fmsdb/img/flags/s/GER.gif" alt="Germany">  GER</td>
											<td>Third Division</td>
											<td>0</td>
											<td>Professional</td>
											<td>31,502</td>
											<td><span class="label" style="background:#0078F8"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1902</td>
											<td>25.6</td>
										</tr>
										<tr>
											<td id="921">Dusseldorf</td>
											<td><img src="modules/fmsdb/img/flags/s/GER.gif" alt="Germany">  GER</td>
											<td>Second Division</td>
											<td>258K</td>
											<td>Professional</td>
											<td>54,600</td>
											<td><span class="label" style="background:#E00808"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1895</td>
											<td>25.7</td>
										</tr>
										<tr>
											<td id="2244">Erfurt</td>
											<td><img src="modules/fmsdb/img/flags/s/GER.gif" alt="Germany">  GER</td>
											<td>Third Division</td>
											<td>0</td>
											<td>Professional</td>
											<td>18,611</td>
											<td><span class="label" style="background:#901010"></span> <span class="label" style="background:#E00000"></span></td>
											<td>1966</td>
											<td>24.2</td>
										</tr>
										<tr>
											<td id="922">Fortuna Koln</td>
											<td><img src="modules/fmsdb/img/flags/s/GER.gif" alt="Germany">  GER</td>
											<td>Third Division</td>
											<td>0</td>
											<td>Professional</td>
											<td>14,944</td>
											<td><span class="label" style="background:#E00000"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1948</td>
											<td>26.7</td>
										</tr>
										<tr>
											<td id="912">Frankfurt</td>
											<td><img src="modules/fmsdb/img/flags/s/GER.gif" alt="Germany">  GER</td>
											<td>First Division</td>
											<td>2M</td>
											<td>Professional</td>
											<td>51,500</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1899</td>
											<td>25.0</td>
										</tr>
										<tr>
											<td id="930">Frankfurt Erlenbruch</td>
											<td><img src="modules/fmsdb/img/flags/s/GER.gif" alt="Germany">  GER</td>
											<td>Third Division</td>
											<td>0</td>
											<td>Professional</td>
											<td>12,542</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#2068B0"></span></td>
											<td>1899</td>
											<td>25.4</td>
										</tr>
										<tr>
											<td id="944">Freiburg</td>
											<td><img src="modules/fmsdb/img/flags/s/GER.gif" alt="Germany">  GER</td>
											<td>First Division</td>
											<td>1M</td>
											<td>Professional</td>
											<td>24,000</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#E00000"></span></td>
											<td>1904</td>
											<td>24.4</td>
										</tr>
										<tr>
											<td id="920">Gelsenkirchen</td>
											<td><img src="modules/fmsdb/img/flags/s/GER.gif" alt="Germany">  GER</td>
											<td>First Division</td>
											<td>9M</td>
											<td>Professional</td>
											<td>62,271</td>
											<td><span class="label" style="background:#0030A0"></span> <span class="label" style="background:#0030A0"></span></td>
											<td>1904</td>
											<td>25.2</td>
										</tr>
										<tr>
											<td id="2253">Greuther Furth</td>
											<td><img src="modules/fmsdb/img/flags/s/GER.gif" alt="Germany">  GER</td>
											<td>Second Division</td>
											<td>215K</td>
											<td>Professional</td>
											<td>18,000</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
											<td>1903</td>
											<td>24.4</td>
										</tr>
										<tr>
											<td id="8700474">Gro?aspach</td>
											<td><img src="modules/fmsdb/img/flags/s/GER.gif" alt="Germany">  GER</td>
											<td>Third Division</td>
											<td>0</td>
											<td>Professional</td>
											<td>10,000</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#E00000"></span></td>
											<td>1994</td>
											<td>24.3</td>
										</tr>
										<tr>
											<td id="879516">Halle</td>
											<td><img src="modules/fmsdb/img/flags/s/GER.gif" alt="Germany">  GER</td>
											<td>Third Division</td>
											<td>0</td>
											<td>Professional</td>
											<td>15,057</td>
											<td><span class="label" style="background:#B00810"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1991</td>
											<td>24.3</td>
										</tr>
										<tr>
											<td id="947">Hamburg</td>
											<td><img src="modules/fmsdb/img/flags/s/GER.gif" alt="Germany">  GER</td>
											<td>First Division</td>
											<td>0</td>
											<td>Professional</td>
											<td>57,000</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1887</td>
											<td>24.2</td>
										</tr>
										<tr>
											<td id="946">Hamburg St.Pauli</td>
											<td><img src="modules/fmsdb/img/flags/s/GER.gif" alt="Germany">  GER</td>
											<td>Second Division</td>
											<td>517K</td>
											<td>Professional</td>
											<td>29,546</td>
											<td><span class="label" style="background:#582800"></span> <span class="label" style="background:#582800"></span></td>
											<td>1910</td>
											<td>24.7</td>
										</tr>
										<tr>
											<td id="927">Hannover</td>
											<td><img src="modules/fmsdb/img/flags/s/GER.gif" alt="Germany">  GER</td>
											<td>Second Division</td>
											<td>861K</td>
											<td>Professional</td>
											<td>49,000</td>
											<td><span class="label" style="background:#B00000"></span> <span class="label" style="background:#B00000"></span></td>
											<td>1896</td>
											<td>24.4</td>
										</tr>
										<tr>
											<td id="880295">Heidenheim</td>
											<td><img src="modules/fmsdb/img/flags/s/GER.gif" alt="Germany">  GER</td>
											<td>Second Division</td>
											<td>215K</td>
											<td>Professional</td>
											<td>15,000</td>
											<td><span class="label" style="background:#2850A0"></span> <span class="label" style="background:#081030"></span></td>
											<td>2007</td>
											<td>23.8</td>
										</tr>
										<tr>
											<td id="2247">Hertha</td>
											<td><img src="modules/fmsdb/img/flags/s/GER.gif" alt="Germany">  GER</td>
											<td>First Division</td>
											<td>2M</td>
											<td>Professional</td>
											<td>74,244</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#0050D0"></span></td>
											<td>1892</td>
											<td>25.8</td>
										</tr>
										<tr>
											<td id="879226">Hoffenheim</td>
											<td><img src="modules/fmsdb/img/flags/s/GER.gif" alt="Germany">  GER</td>
											<td>First Division</td>
											<td>4M</td>
											<td>Professional</td>
											<td>30,150</td>
											<td><span class="label" style="background:#002080"></span> <span class="label" style="background:#0078F8"></span></td>
											<td>1899</td>
											<td>23.2</td>
										</tr>
										<tr>
											<td id="8714658">Ingolstadt</td>
											<td><img src="modules/fmsdb/img/flags/s/GER.gif" alt="Germany">  GER</td>
											<td>First Division</td>
											<td>2M</td>
											<td>Professional</td>
											<td>15,445</td>
											<td><span class="label" style="background:#E00000"></span> <span class="label" style="background:#E00000"></span></td>
											<td>2004</td>
											<td>25.0</td>
										</tr>
										<tr>
											<td id="945">Kaiserslautern</td>
											<td><img src="modules/fmsdb/img/flags/s/GER.gif" alt="Germany">  GER</td>
											<td>Second Division</td>
											<td>431K</td>
											<td>Professional</td>
											<td>47,650</td>
											<td><span class="label" style="background:#E00000"></span> <span class="label" style="background:#901000"></span></td>
											<td>1900</td>
											<td>24.2</td>
										</tr>
										<tr>
											<td id="931">Karlsruhe</td>
											<td><img src="modules/fmsdb/img/flags/s/GER.gif" alt="Germany">  GER</td>
											<td>Second Division</td>
											<td>43K</td>
											<td>Professional</td>
											<td>29,699</td>
											<td><span class="label" style="background:#002080"></span> <span class="label" style="background:#0030A0"></span></td>
											<td>1894</td>
											<td>24.6</td>
										</tr>
										<tr>
											<td id="2245">Kiel</td>
											<td><img src="modules/fmsdb/img/flags/s/GER.gif" alt="Germany">  GER</td>
											<td>Third Division</td>
											<td>0</td>
											<td>Professional</td>
											<td>10,200</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#304078"></span></td>
											<td>1900</td>
											<td>25.4</td>
										</tr>
										<tr>
											<td id="916">Koln</td>
											<td><img src="modules/fmsdb/img/flags/s/GER.gif" alt="Germany">  GER</td>
											<td>First Division</td>
											<td>4M</td>
											<td>Professional</td>
											<td>50,000</td>
											<td><span class="label" style="background:#C80000"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1948</td>
											<td>25.0</td>
										</tr>
										<tr>
											<td id="901">Leverkusen</td>
											<td><img src="modules/fmsdb/img/flags/s/GER.gif" alt="Germany">  GER</td>
											<td>First Division</td>
											<td>3M</td>
											<td>Professional</td>
											<td>30,210</td>
											<td><span class="label" style="background:#E00000"></span> <span class="label" style="background:#000000"></span></td>
											<td>1904</td>
											<td>23.6</td>
										</tr>
										<tr>
											<td id="879921">Lotte</td>
											<td><img src="modules/fmsdb/img/flags/s/GER.gif" alt="Germany">  GER</td>
											<td>Third Division</td>
											<td>0</td>
											<td>Professional</td>
											<td>10,000</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#0070C0"></span></td>
											<td>1929</td>
											<td>25.1</td>
										</tr>
										<tr>
											<td id="2233">Magdeburg</td>
											<td><img src="modules/fmsdb/img/flags/s/GER.gif" alt="Germany">  GER</td>
											<td>Third Division</td>
											<td>0</td>
											<td>Professional</td>
											<td>27,250</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#0840B0"></span></td>
											<td>1965</td>
											<td>25.0</td>
										</tr>
										<tr>
											<td id="918">Mainz</td>
											<td><img src="modules/fmsdb/img/flags/s/GER.gif" alt="Germany">  GER</td>
											<td>First Division</td>
											<td>861K</td>
											<td>Professional</td>
											<td>34,000</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#C80000"></span></td>
											<td>1905</td>
											<td>24.5</td>
										</tr>
										<tr>
											<td id="879282">Mainz II</td>
											<td><img src="modules/fmsdb/img/flags/s/GER.gif" alt="Germany">  GER</td>
											<td>Third Division</td>
											<td>0</td>
											<td>Professional</td>
											<td>20,300</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
											<td>0</td>
											<td>20.5</td>
										</tr>
										<tr>
											<td id="955">Munchen Lions</td>
											<td><img src="modules/fmsdb/img/flags/s/GER.gif" alt="Germany">  GER</td>
											<td>Second Division</td>
											<td>0</td>
											<td>Professional</td>
											<td>75,024</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#90C0F0"></span></td>
											<td>1860</td>
											<td>26.3</td>
										</tr>
										<tr>
											<td id="935">Munster</td>
											<td><img src="modules/fmsdb/img/flags/s/GER.gif" alt="Germany">  GER</td>
											<td>Third Division</td>
											<td>0</td>
											<td>Professional</td>
											<td>15,050</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
											<td>1906</td>
											<td>24.8</td>
										</tr>
										<tr>
											<td id="899">Nurnberg</td>
											<td><img src="modules/fmsdb/img/flags/s/GER.gif" alt="Germany">  GER</td>
											<td>Second Division</td>
											<td>215K</td>
											<td>Professional</td>
											<td>50,000</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#A82828"></span></td>
											<td>1900</td>
											<td>25.7</td>
										</tr>
										<tr>
											<td id="937">Osnabruck</td>
											<td><img src="modules/fmsdb/img/flags/s/GER.gif" alt="Germany">  GER</td>
											<td>Third Division</td>
											<td>0</td>
											<td>Professional</td>
											<td>16,000</td>
											<td><span class="label" style="background:#281060"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1899</td>
											<td>25.3</td>
										</tr>
										<tr>
											<td id="121198">Paderborn</td>
											<td><img src="modules/fmsdb/img/flags/s/GER.gif" alt="Germany">  GER</td>
											<td>Third Division</td>
											<td>0</td>
											<td>Professional</td>
											<td>15,000</td>
											<td><span class="label" style="background:#0078F8"></span> <span class="label" style="background:#000000"></span></td>
											<td>1907</td>
											<td>25.6</td>
										</tr>
										<tr>
											<td id="91013388">RBL</td>
											<td><img src="modules/fmsdb/img/flags/s/GER.gif" alt="Germany">  GER</td>
											<td>First Division</td>
											<td>13M</td>
											<td>Professional</td>
											<td>44,345</td>
											<td><span class="label" style="background:#E00000"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>2009</td>
											<td>22.9</td>
										</tr>
										<tr>
											<td id="6000005">Regensburg</td>
											<td><img src="modules/fmsdb/img/flags/s/GER.gif" alt="Germany">  GER</td>
											<td>Third Division</td>
											<td>0</td>
											<td>Professional</td>
											<td>15,115</td>
											<td><span class="label" style="background:#E00000"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1907</td>
											<td>24.8</td>
										</tr>
										<tr>
											<td id="928">Rostock</td>
											<td><img src="modules/fmsdb/img/flags/s/GER.gif" alt="Germany">  GER</td>
											<td>Third Division</td>
											<td>0</td>
											<td>Professional</td>
											<td>29,000</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#2850A0"></span></td>
											<td>1965</td>
											<td>24.9</td>
										</tr>
										<tr>
											<td id="6000006">Sandhausen</td>
											<td><img src="modules/fmsdb/img/flags/s/GER.gif" alt="Germany">  GER</td>
											<td>Second Division</td>
											<td>43K</td>
											<td>Professional</td>
											<td>15,414</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1916</td>
											<td>25.2</td>
										</tr>
										<tr>
											<td id="960">Stuttgart</td>
											<td><img src="modules/fmsdb/img/flags/s/GER.gif" alt="Germany">  GER</td>
											<td>Second Division</td>
											<td>3M</td>
											<td>Professional</td>
											<td>60,449</td>
											<td><span class="label" style="background:#E00000"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1893</td>
											<td>24.7</td>
										</tr>
										<tr>
											<td id="121208">Wehen</td>
											<td><img src="modules/fmsdb/img/flags/s/GER.gif" alt="Germany">  GER</td>
											<td>Third Division</td>
											<td>0</td>
											<td>Professional</td>
											<td>12,566</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
											<td>1926</td>
											<td>24.7</td>
										</tr>
										<tr>
											<td id="961">Wolfsburg</td>
											<td><img src="modules/fmsdb/img/flags/s/GER.gif" alt="Germany">  GER</td>
											<td>First Division</td>
											<td>26M</td>
											<td>Professional</td>
											<td>30,000</td>
											<td><span class="label" style="background:#A0F070"></span> <span class="label" style="background:#A0F070"></span></td>
											<td>1945</td>
											<td>24.9</td>
										</tr>
										<tr>
											<td id="8709077">Wurzburg</td>
											<td><img src="modules/fmsdb/img/flags/s/GER.gif" alt="Germany">  GER</td>
											<td>Second Division</td>
											<td>43K</td>
											<td>Professional</td>
											<td>14,500</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#E81020"></span></td>
											<td>1907</td>
											<td>26.1</td>
										</tr>
										<tr>
											<td id="965">Zwickau</td>
											<td><img src="modules/fmsdb/img/flags/s/GER.gif" alt="Germany">  GER</td>
											<td>Third Division</td>
											<td>0</td>
											<td>Professional</td>
											<td>10,700</td>
											<td><span class="label" style="background:#B00810"></span> <span class="label" style="background:#902830"></span></td>
											<td>1990</td>
											<td>25.3</td>
										</tr>
										<tr>
											<td id="129685">Acharnaikos</td>
											<td><img src="modules/fmsdb/img/flags/s/GRE.gif" alt="Greece">  GRE</td>
											<td>B Division</td>
											<td>0</td>
											<td>Professional</td>
											<td>4,450</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#108830"></span></td>
											<td>1939</td>
											<td>23.0</td>
										</tr>
										<tr>
											<td id="967">AEK</td>
											<td><img src="modules/fmsdb/img/flags/s/GRE.gif" alt="Greece">  GRE</td>
											<td>Superleague</td>
											<td>258K</td>
											<td>Professional</td>
											<td>69,618</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
											<td>1924</td>
											<td>25.1</td>
										</tr>
										<tr>
											<td id="677142">Agr. Asteras</td>
											<td><img src="modules/fmsdb/img/flags/s/GRE.gif" alt="Greece">  GRE</td>
											<td>B Division</td>
											<td>0</td>
											<td>Professional</td>
											<td>2,267</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#006030"></span></td>
											<td>1932</td>
											<td>24.8</td>
										</tr>
										<tr>
											<td id="677832">Aiginiakos</td>
											<td><img src="modules/fmsdb/img/flags/s/GRE.gif" alt="Greece">  GRE</td>
											<td>B Division</td>
											<td>0</td>
											<td>Professional</td>
											<td>1,000</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
											<td>1972</td>
											<td>24.0</td>
										</tr>
										<tr>
											<td id="129658">Anag. Karditsas</td>
											<td><img src="modules/fmsdb/img/flags/s/GRE.gif" alt="Greece">  GRE</td>
											<td>B Division</td>
											<td>0</td>
											<td>Professional</td>
											<td>5,800</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
											<td>1904</td>
											<td>24.9</td>
										</tr>
										<tr>
											<td id="968">Apollon</td>
											<td><img src="modules/fmsdb/img/flags/s/GRE.gif" alt="Greece">  GRE</td>
											<td>B Division</td>
											<td>0</td>
											<td>Professional</td>
											<td>14,856</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
											<td>1891</td>
											<td>26.2</td>
										</tr>
										<tr>
											<td id="969">Aris</td>
											<td><img src="modules/fmsdb/img/flags/s/GRE.gif" alt="Greece">  GRE</td>
											<td>B Division</td>
											<td>0</td>
											<td>Professional</td>
											<td>22,574</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F8F000"></span></td>
											<td>1914</td>
											<td>27.1</td>
										</tr>
										<tr>
											<td id="694366">Ast. Tripolis</td>
											<td><img src="modules/fmsdb/img/flags/s/GRE.gif" alt="Greece">  GRE</td>
											<td>Superleague</td>
											<td>146K</td>
											<td>Professional</td>
											<td>7,493</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
											<td>1931</td>
											<td>24.1</td>
										</tr>
										<tr>
											<td id="129692">Atromitos</td>
											<td><img src="modules/fmsdb/img/flags/s/GRE.gif" alt="Greece">  GRE</td>
											<td>Superleague</td>
											<td>43K</td>
											<td>Professional</td>
											<td>8,969</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
											<td>1923</td>
											<td>25.7</td>
										</tr>
										<tr>
											<td id="36002987">Chania</td>
											<td><img src="modules/fmsdb/img/flags/s/GRE.gif" alt="Greece">  GRE</td>
											<td>B Division</td>
											<td>0</td>
											<td>Professional</td>
											<td>3,700</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#002060"></span></td>
											<td>1945</td>
											<td>23.6</td>
										</tr>
										<tr>
											<td id="976">Iraklis</td>
											<td><img src="modules/fmsdb/img/flags/s/GRE.gif" alt="Greece">  GRE</td>
											<td>Superleague</td>
											<td>0</td>
											<td>Professional</td>
											<td>27,770</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#0030A0"></span></td>
											<td>1908</td>
											<td>23.9</td>
										</tr>
										<tr>
											<td id="129661">Kallithea</td>
											<td><img src="modules/fmsdb/img/flags/s/GRE.gif" alt="Greece">  GRE</td>
											<td>B Division</td>
											<td>0</td>
											<td>Professional</td>
											<td>6,350</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#0050D0"></span></td>
											<td>1966</td>
											<td>22.0</td>
										</tr>
										<tr>
											<td id="36023258">Kalloni</td>
											<td><img src="modules/fmsdb/img/flags/s/GRE.gif" alt="Greece">  GRE</td>
											<td>B Division</td>
											<td>0</td>
											<td>Professional</td>
											<td>3,300</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#0030A0"></span></td>
											<td>1994</td>
											<td>23.6</td>
										</tr>
										<tr>
											<td id="36047244">Kerkyra</td>
											<td><img src="modules/fmsdb/img/flags/s/GRE.gif" alt="Greece">  GRE</td>
											<td>Superleague</td>
											<td>0</td>
											<td>Professional</td>
											<td>2,776</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
											<td>1984</td>
											<td>27.0</td>
										</tr>
										<tr>
											<td id="36043527">Kissamikos</td>
											<td><img src="modules/fmsdb/img/flags/s/GRE.gif" alt="Greece">  GRE</td>
											<td>B Division</td>
											<td>0</td>
											<td>Professional</td>
											<td>3,700</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#0030A0"></span></td>
											<td>1926</td>
											<td>25.1</td>
										</tr>
										<tr>
											<td id="682130">Lamia</td>
											<td><img src="modules/fmsdb/img/flags/s/GRE.gif" alt="Greece">  GRE</td>
											<td>B Division</td>
											<td>0</td>
											<td>Professional</td>
											<td>5,500</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#0050D0"></span></td>
											<td>1964</td>
											<td>25.2</td>
										</tr>
										<tr>
											<td id="978">Larisa</td>
											<td><img src="modules/fmsdb/img/flags/s/GRE.gif" alt="Greece">  GRE</td>
											<td>Superleague</td>
											<td>0</td>
											<td>Professional</td>
											<td>16,118</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#800020"></span></td>
											<td>1964</td>
											<td>24.8</td>
										</tr>
										<tr>
											<td id="979">Levadeiakos</td>
											<td><img src="modules/fmsdb/img/flags/s/GRE.gif" alt="Greece">  GRE</td>
											<td>Superleague</td>
											<td>0</td>
											<td>Professional</td>
											<td>5,915</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
											<td>1961</td>
											<td>26.2</td>
										</tr>
										<tr>
											<td id="980">OFI</td>
											<td><img src="modules/fmsdb/img/flags/s/GRE.gif" alt="Greece">  GRE</td>
											<td>B Division</td>
											<td>0</td>
											<td>Professional</td>
											<td>9,088</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
											<td>1925</td>
											<td>25.5</td>
										</tr>
										<tr>
											<td id="981">Olympiakos</td>
											<td><img src="modules/fmsdb/img/flags/s/GRE.gif" alt="Greece">  GRE</td>
											<td>Superleague</td>
											<td>1M</td>
											<td>Professional</td>
											<td>32,115</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
											<td>1925</td>
											<td>24.3</td>
										</tr>
										<tr>
											<td id="129664">Panaigialeios</td>
											<td><img src="modules/fmsdb/img/flags/s/GRE.gif" alt="Greece">  GRE</td>
											<td>B Division</td>
											<td>0</td>
											<td>Professional</td>
											<td>5,500</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#000000"></span></td>
											<td>1927</td>
											<td>23.4</td>
										</tr>
										<tr>
											<td id="129665">Panaitolikos</td>
											<td><img src="modules/fmsdb/img/flags/s/GRE.gif" alt="Greece">  GRE</td>
											<td>Superleague</td>
											<td>0</td>
											<td>Professional</td>
											<td>6,000</td>
											<td><span class="label" style="background:#0030A0"></span> <span class="label" style="background:#F8F000"></span></td>
											<td>1926</td>
											<td>24.9</td>
										</tr>
										<tr>
											<td id="983">Panathinaikos</td>
											<td><img src="modules/fmsdb/img/flags/s/GRE.gif" alt="Greece">  GRE</td>
											<td>Superleague</td>
											<td>258K</td>
											<td>Professional</td>
											<td>16,003</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
											<td>1908</td>
											<td>26.2</td>
										</tr>
										<tr>
											<td id="114582">Panelefsiniakos</td>
											<td><img src="modules/fmsdb/img/flags/s/GRE.gif" alt="Greece">  GRE</td>
											<td>B Division</td>
											<td>0</td>
											<td>Professional</td>
											<td>1,400</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#0050D0"></span></td>
											<td>1931</td>
											<td>23.9</td>
										</tr>
										<tr>
											<td id="984">Panionios</td>
											<td><img src="modules/fmsdb/img/flags/s/GRE.gif" alt="Greece">  GRE</td>
											<td>Superleague</td>
											<td>0</td>
											<td>Professional</td>
											<td>11,115</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
											<td>1890</td>
											<td>23.4</td>
										</tr>
										<tr>
											<td id="129666">Panserraikos</td>
											<td><img src="modules/fmsdb/img/flags/s/GRE.gif" alt="Greece">  GRE</td>
											<td>B Division</td>
											<td>0</td>
											<td>Professional</td>
											<td>9,500</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#E00000"></span></td>
											<td>1964</td>
											<td>23.0</td>
										</tr>
										<tr>
											<td id="687641">Panthrakikos</td>
											<td><img src="modules/fmsdb/img/flags/s/GRE.gif" alt="Greece">  GRE</td>
											<td>B Division</td>
											<td>0</td>
											<td>Professional</td>
											<td>6,198</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#006030"></span></td>
											<td>1995</td>
											<td>21.4</td>
										</tr>
										<tr>
											<td id="982">PAOK</td>
											<td><img src="modules/fmsdb/img/flags/s/GRE.gif" alt="Greece">  GRE</td>
											<td>Superleague</td>
											<td>2M</td>
											<td>Professional</td>
											<td>28,703</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
											<td>1926</td>
											<td>23.4</td>
										</tr>
										<tr>
											<td id="129667">PAS Giannina</td>
											<td><img src="modules/fmsdb/img/flags/s/GRE.gif" alt="Greece">  GRE</td>
											<td>Superleague</td>
											<td>0</td>
											<td>Professional</td>
											<td>7,534</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
											<td>1966</td>
											<td>24.5</td>
										</tr>
										<tr>
											<td id="36000521">Platanias</td>
											<td><img src="modules/fmsdb/img/flags/s/GRE.gif" alt="Greece">  GRE</td>
											<td>Superleague</td>
											<td>0</td>
											<td>Professional</td>
											<td>3,700</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
											<td>1931</td>
											<td>26.0</td>
										</tr>
										<tr>
											<td id="36023207">Sparti</td>
											<td><img src="modules/fmsdb/img/flags/s/GRE.gif" alt="Greece">  GRE</td>
											<td>B Division</td>
											<td>0</td>
											<td>Professional</td>
											<td>1,680</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
											<td>1998</td>
											<td>25.0</td>
										</tr>
										<tr>
											<td id="129653">Trikala</td>
											<td><img src="modules/fmsdb/img/flags/s/GRE.gif" alt="Greece">  GRE</td>
											<td>B Division</td>
											<td>0</td>
											<td>Professional</td>
											<td>14,000</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
											<td>1963</td>
											<td>27.3</td>
										</tr>
										<tr>
											<td id="1300559">Veroia</td>
											<td><img src="modules/fmsdb/img/flags/s/GRE.gif" alt="Greece">  GRE</td>
											<td>Superleague</td>
											<td>0</td>
											<td>Professional</td>
											<td>6,350</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
											<td>1960</td>
											<td>27.1</td>
										</tr>
										<tr>
											<td id="985">Xanthi</td>
											<td><img src="modules/fmsdb/img/flags/s/GRE.gif" alt="Greece">  GRE</td>
											<td>Superleague</td>
											<td>17K</td>
											<td>Professional</td>
											<td>7,244</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
											<td>1967</td>
											<td>24.9</td>
										</tr>
										<tr>
											<td id="38005140">Balmazujvaros</td>
											<td><img src="modules/fmsdb/img/flags/s/HUN.gif" alt="Hungary">  HUN</td>
											<td>Division II</td>
											<td>0</td>
											<td>Professional</td>
											<td>2,250</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F86000"></span></td>
											<td>2011</td>
											<td>24.9</td>
										</tr>
										<tr>
											<td id="1050">Bekescsaba</td>
											<td><img src="modules/fmsdb/img/flags/s/HUN.gif" alt="Hungary">  HUN</td>
											<td>Division II</td>
											<td>0</td>
											<td>Professional</td>
											<td>10,432</td>
											<td><span class="label" style="background:#501080"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1912</td>
											<td>26.6</td>
										</tr>
										<tr>
											<td id="38000839">Budaors</td>
											<td><img src="modules/fmsdb/img/flags/s/HUN.gif" alt="Hungary">  HUN</td>
											<td>Division II</td>
											<td>9K</td>
											<td>Professional</td>
											<td>1,200</td>
											<td><span class="label" style="background:#A0F070"></span> <span class="label" style="background:#00A030"></span></td>
											<td>1924</td>
											<td>24.2</td>
										</tr>
										<tr>
											<td id="38004838">Cegled</td>
											<td><img src="modules/fmsdb/img/flags/s/HUN.gif" alt="Hungary">  HUN</td>
											<td>Division II</td>
											<td>0</td>
											<td>Professional</td>
											<td>2,000</td>
											<td><span class="label" style="background:#F8F838"></span> <span class="label" style="background:#2090D0"></span></td>
											<td>1924</td>
											<td>24.2</td>
										</tr>
										<tr>
											<td id="38015176">Cigand</td>
											<td><img src="modules/fmsdb/img/flags/s/HUN.gif" alt="Hungary">  HUN</td>
											<td>Division II</td>
											<td>0</td>
											<td>Professional</td>
											<td>500</td>
											<td><span class="label" style="background:#F8D828"></span> <span class="label" style="background:#000000"></span></td>
											<td>1998</td>
											<td>24.8</td>
										</tr>
										<tr>
											<td id="38019804">Csakvar</td>
											<td><img src="modules/fmsdb/img/flags/s/HUN.gif" alt="Hungary">  HUN</td>
											<td>Division II</td>
											<td>6K</td>
											<td>Professional</td>
											<td>2,500</td>
											<td><span class="label" style="background:#F8F000"></span> <span class="label" style="background:#304078"></span></td>
											<td>1947</td>
											<td>23.6</td>
										</tr>
										<tr>
											<td id="1052">Debrecen</td>
											<td><img src="modules/fmsdb/img/flags/s/HUN.gif" alt="Hungary">  HUN</td>
											<td>Division I</td>
											<td>84K</td>
											<td>Professional</td>
											<td>20,020</td>
											<td><span class="label" style="background:#E00000"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1902</td>
											<td>27.4</td>
										</tr>
										<tr>
											<td id="130821">Diosgyor</td>
											<td><img src="modules/fmsdb/img/flags/s/HUN.gif" alt="Hungary">  HUN</td>
											<td>Division I</td>
											<td>0</td>
											<td>Professional</td>
											<td>16,500</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#C00830"></span></td>
											<td>1910</td>
											<td>24.3</td>
										</tr>
										<tr>
											<td id="7521262">Dorog</td>
											<td><img src="modules/fmsdb/img/flags/s/HUN.gif" alt="Hungary">  HUN</td>
											<td>Division II</td>
											<td>14K</td>
											<td>Professional</td>
											<td>3,150</td>
											<td><span class="label" style="background:#F00000"></span> <span class="label" style="background:#000000"></span></td>
											<td>1914</td>
											<td>23.4</td>
										</tr>
										<tr>
											<td id="1055">Ferencvaros</td>
											<td><img src="modules/fmsdb/img/flags/s/HUN.gif" alt="Hungary">  HUN</td>
											<td>Division I</td>
											<td>280K</td>
											<td>Professional</td>
											<td>22,000</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#207830"></span></td>
											<td>1899</td>
											<td>26.1</td>
										</tr>
										<tr>
											<td id="7524224">Gyirmot</td>
											<td><img src="modules/fmsdb/img/flags/s/HUN.gif" alt="Hungary">  HUN</td>
											<td>Division I</td>
											<td>0</td>
											<td>Professional</td>
											<td>2,700</td>
											<td><span class="label" style="background:#0050D0"></span> <span class="label" style="background:#F8F000"></span></td>
											<td>1993</td>
											<td>26.3</td>
										</tr>
										<tr>
											<td id="1056">Haladas</td>
											<td><img src="modules/fmsdb/img/flags/s/HUN.gif" alt="Hungary">  HUN</td>
											<td>Division I</td>
											<td>0</td>
											<td>Professional</td>
											<td>14,000</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#006840"></span></td>
											<td>1919</td>
											<td>24.3</td>
										</tr>
										<tr>
											<td id="1059">Honved</td>
											<td><img src="modules/fmsdb/img/flags/s/HUN.gif" alt="Hungary">  HUN</td>
											<td>Division I</td>
											<td>0</td>
											<td>Professional</td>
											<td>10,000</td>
											<td><span class="label" style="background:#C03008"></span> <span class="label" style="background:#000000"></span></td>
											<td>1909</td>
											<td>24.5</td>
										</tr>
										<tr>
											<td id="38013478">Kisvarda</td>
											<td><img src="modules/fmsdb/img/flags/s/HUN.gif" alt="Hungary">  HUN</td>
											<td>Division II</td>
											<td>23K</td>
											<td>Professional</td>
											<td>2,124</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#C00008"></span></td>
											<td>2003</td>
											<td>26.5</td>
										</tr>
										<tr>
											<td id="38004848">Kozarmisleny</td>
											<td><img src="modules/fmsdb/img/flags/s/HUN.gif" alt="Hungary">  HUN</td>
											<td>Division II</td>
											<td>8K</td>
											<td>Professional</td>
											<td>1,200</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#002060"></span></td>
											<td>1989</td>
											<td>23.6</td>
										</tr>
										<tr>
											<td id="38004842">Mezokovesd</td>
											<td><img src="modules/fmsdb/img/flags/s/HUN.gif" alt="Hungary">  HUN</td>
											<td>Division I</td>
											<td>0</td>
											<td>Professional</td>
											<td>3,000</td>
											<td><span class="label" style="background:#F8F000"></span> <span class="label" style="background:#0050D0"></span></td>
											<td>1975</td>
											<td>25.9</td>
										</tr>
										<tr>
											<td id="7521273">Mosonmagyarovar</td>
											<td><img src="modules/fmsdb/img/flags/s/HUN.gif" alt="Hungary">  HUN</td>
											<td>Division II</td>
											<td>8K</td>
											<td>Professional</td>
											<td>3,375</td>
											<td><span class="label" style="background:#0078F8"></span> <span class="label" style="background:#082040"></span></td>
											<td>1904</td>
											<td>24.6</td>
										</tr>
										<tr>
											<td id="1060">MTK</td>
											<td><img src="modules/fmsdb/img/flags/s/HUN.gif" alt="Hungary">  HUN</td>
											<td>Division I</td>
											<td>0</td>
											<td>Professional</td>
											<td>10,000</td>
											<td><span class="label" style="background:#2850A0"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1888</td>
											<td>25.7</td>
										</tr>
										<tr>
											<td id="130823">Nyiregyhaza</td>
											<td><img src="modules/fmsdb/img/flags/s/HUN.gif" alt="Hungary">  HUN</td>
											<td>Division II</td>
											<td>16K</td>
											<td>Professional</td>
											<td>10,000</td>
											<td><span class="label" style="background:#E00000"></span> <span class="label" style="background:#002080"></span></td>
											<td>1959</td>
											<td>25.0</td>
										</tr>
										<tr>
											<td id="7521327">Paks</td>
											<td><img src="modules/fmsdb/img/flags/s/HUN.gif" alt="Hungary">  HUN</td>
											<td>Division I</td>
											<td>0</td>
											<td>Professional</td>
											<td>4,950</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#00A030"></span></td>
											<td>1952</td>
											<td>26.0</td>
										</tr>
										<tr>
											<td id="38032696">Puskas Akademia</td>
											<td><img src="modules/fmsdb/img/flags/s/HUN.gif" alt="Hungary">  HUN</td>
											<td>Division II</td>
											<td>42K</td>
											<td>Professional</td>
											<td>3,500</td>
											<td><span class="label" style="background:#0050D0"></span> <span class="label" style="background:#F8F000"></span></td>
											<td>2005</td>
											<td>25.9</td>
										</tr>
										<tr>
											<td id="7521258">Siofok</td>
											<td><img src="modules/fmsdb/img/flags/s/HUN.gif" alt="Hungary">  HUN</td>
											<td>Division II</td>
											<td>0</td>
											<td>Professional</td>
											<td>12,000</td>
											<td><span class="label" style="background:#F8F000"></span> <span class="label" style="background:#F8F000"></span></td>
											<td>1921</td>
											<td>24.6</td>
										</tr>
										<tr>
											<td id="7521334">Soproni VSE</td>
											<td><img src="modules/fmsdb/img/flags/s/HUN.gif" alt="Hungary">  HUN</td>
											<td>Division II</td>
											<td>6K</td>
											<td>Professional</td>
											<td>5,800</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#700070"></span></td>
											<td>1921</td>
											<td>24.7</td>
										</tr>
										<tr>
											<td id="7521283">Soroksar</td>
											<td><img src="modules/fmsdb/img/flags/s/HUN.gif" alt="Hungary">  HUN</td>
											<td>Division II</td>
											<td>9K</td>
											<td>Professional</td>
											<td>5,000</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F8F000"></span></td>
											<td>1999</td>
											<td>26.2</td>
										</tr>
										<tr>
											<td id="38017639">Szeged 2011</td>
											<td><img src="modules/fmsdb/img/flags/s/HUN.gif" alt="Hungary">  HUN</td>
											<td>Division II</td>
											<td>6K</td>
											<td>Professional</td>
											<td>8,000</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#002080"></span></td>
											<td>2011</td>
											<td>24.3</td>
										</tr>
										<tr>
											<td id="130825">SZEOL</td>
											<td><img src="modules/fmsdb/img/flags/s/HUN.gif" alt="Hungary">  HUN</td>
											<td>Division II</td>
											<td>0</td>
											<td>Professional</td>
											<td>8,000</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#1860F8"></span></td>
											<td>1993</td>
											<td>23.7</td>
										</tr>
										<tr>
											<td id="7520473">Szolnok</td>
											<td><img src="modules/fmsdb/img/flags/s/HUN.gif" alt="Hungary">  HUN</td>
											<td>Division II</td>
											<td>0</td>
											<td>Professional</td>
											<td>4,000</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#0078F8"></span></td>
											<td>1910</td>
											<td>23.9</td>
										</tr>
										<tr>
											<td id="1064">Ujpest</td>
											<td><img src="modules/fmsdb/img/flags/s/HUN.gif" alt="Hungary">  HUN</td>
											<td>Division I</td>
											<td>0</td>
											<td>Professional</td>
											<td>13,500</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#501080"></span></td>
											<td>1885</td>
											<td>23.8</td>
										</tr>
										<tr>
											<td id="1065">Vac</td>
											<td><img src="modules/fmsdb/img/flags/s/HUN.gif" alt="Hungary">  HUN</td>
											<td>Division II</td>
											<td>0</td>
											<td>Professional</td>
											<td>9,000</td>
											<td><span class="label" style="background:#002060"></span> <span class="label" style="background:#E00000"></span></td>
											<td>1899</td>
											<td>25.3</td>
										</tr>
										<tr>
											<td id="1066">Vasas</td>
											<td><img src="modules/fmsdb/img/flags/s/HUN.gif" alt="Hungary">  HUN</td>
											<td>Division I</td>
											<td>0</td>
											<td>Professional</td>
											<td>18,000</td>
											<td><span class="label" style="background:#304078"></span> <span class="label" style="background:#C81018"></span></td>
											<td>1911</td>
											<td>23.9</td>
										</tr>
										<tr>
											<td id="1062">Videoton</td>
											<td><img src="modules/fmsdb/img/flags/s/HUN.gif" alt="Hungary">  HUN</td>
											<td>Division I</td>
											<td>224K</td>
											<td>Professional</td>
											<td>10,000</td>
											<td><span class="label" style="background:#303850"></span> <span class="label" style="background:#B02030"></span></td>
											<td>1941</td>
											<td>26.8</td>
										</tr>
										<tr>
											<td id="1068">ZTE</td>
											<td><img src="modules/fmsdb/img/flags/s/HUN.gif" alt="Hungary">  HUN</td>
											<td>Division II</td>
											<td>0</td>
											<td>Professional</td>
											<td>13,870</td>
											<td><span class="label" style="background:#0050D0"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1920</td>
											<td>22.1</td>
										</tr>
										<tr>
											<td id="5622736">Arema</td>
											<td><img src="modules/fmsdb/img/flags/s/IDN.gif" alt="Indonesia">  IDN</td>
											<td>Super League</td>
											<td>130K</td>
											<td>Professional</td>
											<td>40,210</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#002080"></span></td>
											<td>1987</td>
											<td>28.1</td>
										</tr>
										<tr>
											<td id="7742801">Bali United</td>
											<td><img src="modules/fmsdb/img/flags/s/IDN.gif" alt="Indonesia">  IDN</td>
											<td>Super League</td>
											<td>94K</td>
											<td>Professional</td>
											<td>25,000</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#E00000"></span></td>
											<td>1930</td>
											<td>24.7</td>
										</tr>
										<tr>
											<td id="135531">Barito Putra</td>
											<td><img src="modules/fmsdb/img/flags/s/IDN.gif" alt="Indonesia">  IDN</td>
											<td>Super League</td>
											<td>300K</td>
											<td>Professional</td>
											<td>17,500</td>
											<td><span class="label" style="background:#0050D0"></span> <span class="label" style="background:#F8F000"></span></td>
											<td>1988</td>
											<td>25.2</td>
										</tr>
										<tr>
											<td id="116145">Bhayangkara FC</td>
											<td><img src="modules/fmsdb/img/flags/s/IDN.gif" alt="Indonesia">  IDN</td>
											<td>Super League</td>
											<td>62K</td>
											<td>Professional</td>
											<td>35,000</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#008030"></span></td>
											<td>1927</td>
											<td>25.2</td>
										</tr>
										<tr>
											<td id="41021352">Borneo FC</td>
											<td><img src="modules/fmsdb/img/flags/s/IDN.gif" alt="Indonesia">  IDN</td>
											<td>Super League</td>
											<td>142K</td>
											<td>Professional</td>
											<td>20,000</td>
											<td><span class="label" style="background:#702020"></span> <span class="label" style="background:#F84000"></span></td>
											<td>2014</td>
											<td>26.6</td>
										</tr>
										<tr>
											<td id="41045083">Celebest FC</td>
											<td><img src="modules/fmsdb/img/flags/s/IDN.gif" alt="Indonesia">  IDN</td>
											<td>Premier Division</td>
											<td>16K</td>
											<td>Professional</td>
											<td>30,000</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F87000"></span></td>
											<td>2000</td>
											<td>27.4</td>
										</tr>
										<tr>
											<td id="41047051">Cilegon United</td>
											<td><img src="modules/fmsdb/img/flags/s/IDN.gif" alt="Indonesia">  IDN</td>
											<td>Premier Division</td>
											<td>7K</td>
											<td>Professional</td>
											<td>10,000</td>
											<td><span class="label" style="background:#F8F000"></span> <span class="label" style="background:#F8D000"></span></td>
											<td>2012</td>
											<td>26.8</td>
										</tr>
										<tr>
											<td id="41003984">Gresik United</td>
											<td><img src="modules/fmsdb/img/flags/s/IDN.gif" alt="Indonesia">  IDN</td>
											<td>Super League</td>
											<td>52K</td>
											<td>Professional</td>
											<td>24,000</td>
											<td><span class="label" style="background:#F8F000"></span> <span class="label" style="background:#F8F838"></span></td>
											<td>2005</td>
											<td>29.0</td>
										</tr>
										<tr>
											<td id="7746334">Kalteng Putra FC</td>
											<td><img src="modules/fmsdb/img/flags/s/IDN.gif" alt="Indonesia">  IDN</td>
											<td>Premier Division</td>
											<td>5K</td>
											<td>Professional</td>
											<td>25,000</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#E00000"></span></td>
											<td>1970</td>
											<td>28.8</td>
										</tr>
										<tr>
											<td id="41021627">Madiun Putra</td>
											<td><img src="modules/fmsdb/img/flags/s/IDN.gif" alt="Indonesia">  IDN</td>
											<td>Premier Division</td>
											<td>45K</td>
											<td>Professional</td>
											<td>15,000</td>
											<td><span class="label" style="background:#60C0F8"></span> <span class="label" style="background:#002060"></span></td>
											<td>1986</td>
											<td>29.0</td>
										</tr>
										<tr>
											<td id="116138">Madura United</td>
											<td><img src="modules/fmsdb/img/flags/s/IDN.gif" alt="Indonesia">  IDN</td>
											<td>Super League</td>
											<td>132K</td>
											<td>Professional</td>
											<td>30,000</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#E00000"></span></td>
											<td>1986</td>
											<td>27.2</td>
										</tr>
										<tr>
											<td id="41042492">Martapura FC</td>
											<td><img src="modules/fmsdb/img/flags/s/IDN.gif" alt="Indonesia">  IDN</td>
											<td>Premier Division</td>
											<td>9K</td>
											<td>Professional</td>
											<td>10,000</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#E00000"></span></td>
											<td>2009</td>
											<td>25.9</td>
										</tr>
										<tr>
											<td id="5622873">Mitra Kukar</td>
											<td><img src="modules/fmsdb/img/flags/s/IDN.gif" alt="Indonesia">  IDN</td>
											<td>Super League</td>
											<td>61K</td>
											<td>Professional</td>
											<td>35,000</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#D8B028"></span></td>
											<td>1979</td>
											<td>26.1</td>
										</tr>
										<tr>
											<td id="7746531">Mojokerto Putra</td>
											<td><img src="modules/fmsdb/img/flags/s/IDN.gif" alt="Indonesia">  IDN</td>
											<td>Premier Division</td>
											<td>4K</td>
											<td>Professional</td>
											<td>10,000</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#E00000"></span></td>
											<td>2001</td>
											<td>27.3</td>
										</tr>
										<tr>
											<td id="41005061">Persatu</td>
											<td><img src="modules/fmsdb/img/flags/s/IDN.gif" alt="Indonesia">  IDN</td>
											<td>Premier Division</td>
											<td>6K</td>
											<td>Semi-Professional</td>
											<td>10,000</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#008030"></span></td>
											<td>1975</td>
											<td>26.9</td>
										</tr>
										<tr>
											<td id="41024320">Persbul</td>
											<td><img src="modules/fmsdb/img/flags/s/IDN.gif" alt="Indonesia">  IDN</td>
											<td>Premier Division</td>
											<td>25K</td>
											<td>Semi-Professional</td>
											<td>8,000</td>
											<td><span class="label" style="background:#F8F000"></span> <span class="label" style="background:#008030"></span></td>
											<td>0</td>
											<td>26.4</td>
										</tr>
										<tr>
											<td id="41039130">Persebo</td>
											<td><img src="modules/fmsdb/img/flags/s/IDN.gif" alt="Indonesia">  IDN</td>
											<td>Premier Division</td>
											<td>14K</td>
											<td>Semi-Professional</td>
											<td>12,000</td>
											<td><span class="label" style="background:#0050D0"></span> <span class="label" style="background:#F8F000"></span></td>
											<td>0</td>
											<td>27.4</td>
										</tr>
										<tr>
											<td id="7748401">Persekam</td>
											<td><img src="modules/fmsdb/img/flags/s/IDN.gif" alt="Indonesia">  IDN</td>
											<td>Premier Division</td>
											<td>20K</td>
											<td>Professional</td>
											<td>10,000</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#E8E060"></span></td>
											<td>0</td>
											<td>24.1</td>
										</tr>
										<tr>
											<td id="41042736">Persekap</td>
											<td><img src="modules/fmsdb/img/flags/s/IDN.gif" alt="Indonesia">  IDN</td>
											<td>Premier Division</td>
											<td>15K</td>
											<td>Semi-Professional</td>
											<td>10,000</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#008030"></span></td>
											<td>1926</td>
											<td>26.2</td>
										</tr>
										<tr>
											<td id="7741454">Persela</td>
											<td><img src="modules/fmsdb/img/flags/s/IDN.gif" alt="Indonesia">  IDN</td>
											<td>Super League</td>
											<td>150K</td>
											<td>Professional</td>
											<td>25,000</td>
											<td><span class="label" style="background:#002060"></span> <span class="label" style="background:#60C0F8"></span></td>
											<td>1967</td>
											<td>27.9</td>
										</tr>
										<tr>
											<td id="41024319">Persepam</td>
											<td><img src="modules/fmsdb/img/flags/s/IDN.gif" alt="Indonesia">  IDN</td>
											<td>Premier Division</td>
											<td>112K</td>
											<td>Professional</td>
											<td>25,000</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#E00000"></span></td>
											<td>1970</td>
											<td>29.4</td>
										</tr>
										<tr>
											<td id="5622859">Perserang</td>
											<td><img src="modules/fmsdb/img/flags/s/IDN.gif" alt="Indonesia">  IDN</td>
											<td>Premier Division</td>
											<td>7K</td>
											<td>Semi-Professional</td>
											<td>15,800</td>
											<td><span class="label" style="background:#002060"></span> <span class="label" style="background:#60C0F8"></span></td>
											<td>1958</td>
											<td>26.2</td>
										</tr>
										<tr>
											<td id="41021353">Perseru</td>
											<td><img src="modules/fmsdb/img/flags/s/IDN.gif" alt="Indonesia">  IDN</td>
											<td>Super League</td>
											<td>137K</td>
											<td>Professional</td>
											<td>10,000</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F87000"></span></td>
											<td>1970</td>
											<td>25.5</td>
										</tr>
										<tr>
											<td id="5622860">Persewangi</td>
											<td><img src="modules/fmsdb/img/flags/s/IDN.gif" alt="Indonesia">  IDN</td>
											<td>Premier Division</td>
											<td>10K</td>
											<td>Professional</td>
											<td>15,000</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#E00000"></span></td>
											<td>1931</td>
											<td>27.8</td>
										</tr>
										<tr>
											<td id="116140">Persib</td>
											<td><img src="modules/fmsdb/img/flags/s/IDN.gif" alt="Indonesia">  IDN</td>
											<td>Super League</td>
											<td>440K</td>
											<td>Professional</td>
											<td>40,000</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#0050D0"></span></td>
											<td>1933</td>
											<td>27.9</td>
										</tr>
										<tr>
											<td id="5623382">Persiba</td>
											<td><img src="modules/fmsdb/img/flags/s/IDN.gif" alt="Indonesia">  IDN</td>
											<td>Super League</td>
											<td>83K</td>
											<td>Professional</td>
											<td>12,500</td>
											<td><span class="label" style="background:#F8F000"></span> <span class="label" style="background:#0050D0"></span></td>
											<td>1950</td>
											<td>26.4</td>
										</tr>
										<tr>
											<td id="7746532">Persiba Bantul</td>
											<td><img src="modules/fmsdb/img/flags/s/IDN.gif" alt="Indonesia">  IDN</td>
											<td>Premier Division</td>
											<td>18K</td>
											<td>Professional</td>
											<td>35,000</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#E00000"></span></td>
											<td>1967</td>
											<td>26.8</td>
										</tr>
										<tr>
											<td id="41024313">Persibangga</td>
											<td><img src="modules/fmsdb/img/flags/s/IDN.gif" alt="Indonesia">  IDN</td>
											<td>Premier Division</td>
											<td>12K</td>
											<td>Semi-Professional</td>
											<td>20,000</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#E00000"></span></td>
											<td>0</td>
											<td>26.4</td>
										</tr>
										<tr>
											<td id="7746529">Persibat</td>
											<td><img src="modules/fmsdb/img/flags/s/IDN.gif" alt="Indonesia">  IDN</td>
											<td>Premier Division</td>
											<td>5K</td>
											<td>Semi-Professional</td>
											<td>15,000</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#E00000"></span></td>
											<td>1974</td>
											<td>29.2</td>
										</tr>
										<tr>
											<td id="7742856">Persigo</td>
											<td><img src="modules/fmsdb/img/flags/s/IDN.gif" alt="Indonesia">  IDN</td>
											<td>Premier Division</td>
											<td>8K</td>
											<td>Semi-Professional</td>
											<td>10,000</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#B00000"></span></td>
											<td>0</td>
											<td>26.5</td>
										</tr>
										<tr>
											<td id="41001020">Persigubin</td>
											<td><img src="modules/fmsdb/img/flags/s/IDN.gif" alt="Indonesia">  IDN</td>
											<td>Premier Division</td>
											<td>4K</td>
											<td>Professional</td>
											<td>15,000</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#F84000"></span></td>
											<td>2003</td>
											<td>28.0</td>
										</tr>
										<tr>
											<td id="116144">Persija</td>
											<td><img src="modules/fmsdb/img/flags/s/IDN.gif" alt="Indonesia">  IDN</td>
											<td>Super League</td>
											<td>68K</td>
											<td>Professional</td>
											<td>88,083</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#E00000"></span></td>
											<td>1928</td>
											<td>25.8</td>
										</tr>
										<tr>
											<td id="5622745">Persijap</td>
											<td><img src="modules/fmsdb/img/flags/s/IDN.gif" alt="Indonesia">  IDN</td>
											<td>Premier Division</td>
											<td>65K</td>
											<td>Professional</td>
											<td>25,000</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#E00000"></span></td>
											<td>1954</td>
											<td>25.9</td>
										</tr>
										<tr>
											<td id="5622879">Persik</td>
											<td><img src="modules/fmsdb/img/flags/s/IDN.gif" alt="Indonesia">  IDN</td>
											<td>Premier Division</td>
											<td>10K</td>
											<td>Professional</td>
											<td>20,000</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#9020B8"></span></td>
											<td>1961</td>
											<td>31.4</td>
										</tr>
										<tr>
											<td id="41001013">Persika</td>
											<td><img src="modules/fmsdb/img/flags/s/IDN.gif" alt="Indonesia">  IDN</td>
											<td>Premier Division</td>
											<td>11K</td>
											<td>Semi-Professional</td>
											<td>25,000</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#E00000"></span></td>
											<td>1951</td>
											<td>28.4</td>
										</tr>
										<tr>
											<td id="5622748">Persikabo</td>
											<td><img src="modules/fmsdb/img/flags/s/IDN.gif" alt="Indonesia">  IDN</td>
											<td>Premier Division</td>
											<td>10K</td>
											<td>Professional</td>
											<td>10,000</td>
											<td><span class="label" style="background:#E00000"></span> <span class="label" style="background:#008030"></span></td>
											<td>1972</td>
											<td>24.3</td>
										</tr>
										<tr>
											<td id="7740896">Persikad</td>
											<td><img src="modules/fmsdb/img/flags/s/IDN.gif" alt="Indonesia">  IDN</td>
											<td>Premier Division</td>
											<td>9K</td>
											<td>Semi-Professional</td>
											<td>3,000</td>
											<td><span class="label" style="background:#F8F000"></span> <span class="label" style="background:#0050D0"></span></td>
											<td>1990</td>
											<td>28.0</td>
										</tr>
										<tr>
											<td id="41042733">Persinga</td>
											<td><img src="modules/fmsdb/img/flags/s/IDN.gif" alt="Indonesia">  IDN</td>
											<td>Premier Division</td>
											<td>0</td>
											<td>Semi-Professional</td>
											<td>10,000</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#E00000"></span></td>
											<td>1958</td>
											<td>27.6</td>
										</tr>
										<tr>
											<td id="41024316">Persip</td>
											<td><img src="modules/fmsdb/img/flags/s/IDN.gif" alt="Indonesia">  IDN</td>
											<td>Premier Division</td>
											<td>0</td>
											<td>Semi-Professional</td>
											<td>25,000</td>
											<td><span class="label" style="background:#008030"></span> <span class="label" style="background:#F8F000"></span></td>
											<td>1972</td>
											<td>27.3</td>
										</tr>
										<tr>
											<td id="7746530">Persipur</td>
											<td><img src="modules/fmsdb/img/flags/s/IDN.gif" alt="Indonesia">  IDN</td>
											<td>Premier Division</td>
											<td>6K</td>
											<td>Semi-Professional</td>
											<td>15,000</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#E00000"></span></td>
											<td>1969</td>
											<td>28.7</td>
										</tr>
										<tr>
											<td id="135515">Persipura</td>
											<td><img src="modules/fmsdb/img/flags/s/IDN.gif" alt="Indonesia">  IDN</td>
											<td>Super League</td>
											<td>70K</td>
											<td>Professional</td>
											<td>50,000</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#E00000"></span></td>
											<td>1950</td>
											<td>28.5</td>
										</tr>
										<tr>
											<td id="135512">Persiraja</td>
											<td><img src="modules/fmsdb/img/flags/s/IDN.gif" alt="Indonesia">  IDN</td>
											<td>Premier Division</td>
											<td>44K</td>
											<td>Professional</td>
											<td>20,000</td>
											<td><span class="label" style="background:#F84000"></span> <span class="label" style="background:#000000"></span></td>
											<td>1957</td>
											<td>25.0</td>
										</tr>
										<tr>
											<td id="41005039">Persiram</td>
											<td><img src="modules/fmsdb/img/flags/s/IDN.gif" alt="Indonesia">  IDN</td>
											<td>Super League</td>
											<td>98K</td>
											<td>Professional</td>
											<td>10,000</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#008030"></span></td>
											<td>2004</td>
											<td>23.2</td>
										</tr>
										<tr>
											<td id="5622862">Persis Solo</td>
											<td><img src="modules/fmsdb/img/flags/s/IDN.gif" alt="Indonesia">  IDN</td>
											<td>Premier Division</td>
											<td>5K</td>
											<td>Professional</td>
											<td>35,000</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#E00000"></span></td>
											<td>1923</td>
											<td>26.6</td>
										</tr>
										<tr>
											<td id="5622746">Persita</td>
											<td><img src="modules/fmsdb/img/flags/s/IDN.gif" alt="Indonesia">  IDN</td>
											<td>Premier Division</td>
											<td>5K</td>
											<td>Professional</td>
											<td>13,000</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#9020B8"></span></td>
											<td>1953</td>
											<td>25.2</td>
										</tr>
										<tr>
											<td id="41049344">Perssu</td>
											<td><img src="modules/fmsdb/img/flags/s/IDN.gif" alt="Indonesia">  IDN</td>
											<td>Premier Division</td>
											<td>0</td>
											<td>Semi-Professional</td>
											<td>15,000</td>
											<td><span class="label" style="background:#F8F000"></span> <span class="label" style="background:#00A030"></span></td>
											<td>1977</td>
											<td>27.4</td>
										</tr>
										<tr>
											<td id="7743260">PPSM</td>
											<td><img src="modules/fmsdb/img/flags/s/IDN.gif" alt="Indonesia">  IDN</td>
											<td>Premier Division</td>
											<td>3K</td>
											<td>Semi-Professional</td>
											<td>5,000</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#F86000"></span></td>
											<td>0</td>
											<td>28.5</td>
										</tr>
										<tr>
											<td id="41021346">PS Bangka</td>
											<td><img src="modules/fmsdb/img/flags/s/IDN.gif" alt="Indonesia">  IDN</td>
											<td>Premier Division</td>
											<td>5K</td>
											<td>Professional</td>
											<td>5,000</td>
											<td><span class="label" style="background:#F86000"></span> <span class="label" style="background:#60C0F8"></span></td>
											<td>1970</td>
											<td>26.3</td>
										</tr>
										<tr>
											<td id="7746746">PS Bengkulu</td>
											<td><img src="modules/fmsdb/img/flags/s/IDN.gif" alt="Indonesia">  IDN</td>
											<td>Premier Division</td>
											<td>30K</td>
											<td>Semi-Professional</td>
											<td>10,000</td>
											<td><span class="label" style="background:#F8D000"></span> <span class="label" style="background:#000000"></span></td>
											<td>0</td>
											<td>25.7</td>
										</tr>
										<tr>
											<td id="41005036">PSBI</td>
											<td><img src="modules/fmsdb/img/flags/s/IDN.gif" alt="Indonesia">  IDN</td>
											<td>Premier Division</td>
											<td>10K</td>
											<td>Semi-Professional</td>
											<td>5,000</td>
											<td><span class="label" style="background:#1030F0"></span> <span class="label" style="background:#E00000"></span></td>
											<td>1928</td>
											<td>28.2</td>
										</tr>
										<tr>
											<td id="41005058">PSBK</td>
											<td><img src="modules/fmsdb/img/flags/s/IDN.gif" alt="Indonesia">  IDN</td>
											<td>Premier Division</td>
											<td>4K</td>
											<td>Semi-Professional</td>
											<td>15,000</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#E00000"></span></td>
											<td>2006</td>
											<td>27.6</td>
										</tr>
										<tr>
											<td id="5622872">PSBL Langsa</td>
											<td><img src="modules/fmsdb/img/flags/s/IDN.gif" alt="Indonesia">  IDN</td>
											<td>Premier Division</td>
											<td>20K</td>
											<td>Semi-Professional</td>
											<td>15,000</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#0010D8"></span></td>
											<td>0</td>
											<td>28.1</td>
										</tr>
										<tr>
											<td id="41010810">PSCS</td>
											<td><img src="modules/fmsdb/img/flags/s/IDN.gif" alt="Indonesia">  IDN</td>
											<td>Premier Division</td>
											<td>25K</td>
											<td>Professional</td>
											<td>10,000</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#1860F8"></span></td>
											<td>0</td>
											<td>28.0</td>
										</tr>
										<tr>
											<td id="41042730">PSGC</td>
											<td><img src="modules/fmsdb/img/flags/s/IDN.gif" alt="Indonesia">  IDN</td>
											<td>Premier Division</td>
											<td>16K</td>
											<td>Professional</td>
											<td>25,000</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#900090"></span></td>
											<td>1990</td>
											<td>26.4</td>
										</tr>
										<tr>
											<td id="135500">PSIM</td>
											<td><img src="modules/fmsdb/img/flags/s/IDN.gif" alt="Indonesia">  IDN</td>
											<td>Premier Division</td>
											<td>8K</td>
											<td>Professional</td>
											<td>25,000</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#1860F8"></span></td>
											<td>1930</td>
											<td>26.3</td>
										</tr>
										<tr>
											<td id="7746766">PSIR</td>
											<td><img src="modules/fmsdb/img/flags/s/IDN.gif" alt="Indonesia">  IDN</td>
											<td>Premier Division</td>
											<td>5K</td>
											<td>Semi-Professional</td>
											<td>5,000</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#F87000"></span></td>
											<td>0</td>
											<td>26.5</td>
										</tr>
										<tr>
											<td id="135497">PSIS</td>
											<td><img src="modules/fmsdb/img/flags/s/IDN.gif" alt="Indonesia">  IDN</td>
											<td>Premier Division</td>
											<td>5K</td>
											<td>Professional</td>
											<td>30,000</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#0050D0"></span></td>
											<td>1932</td>
											<td>24.0</td>
										</tr>
										<tr>
											<td id="135494">PSM</td>
											<td><img src="modules/fmsdb/img/flags/s/IDN.gif" alt="Indonesia">  IDN</td>
											<td>Super League</td>
											<td>345K</td>
											<td>Professional</td>
											<td>30,000</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#C80000"></span></td>
											<td>1915</td>
											<td>26.3</td>
										</tr>
										<tr>
											<td id="135491">PSMS</td>
											<td><img src="modules/fmsdb/img/flags/s/IDN.gif" alt="Indonesia">  IDN</td>
											<td>Premier Division</td>
											<td>55K</td>
											<td>Professional</td>
											<td>25,000</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#008030"></span></td>
											<td>1950</td>
											<td>23.2</td>
										</tr>
										<tr>
											<td id="5622732">PSPS</td>
											<td><img src="modules/fmsdb/img/flags/s/IDN.gif" alt="Indonesia">  IDN</td>
											<td>Premier Division</td>
											<td>40K</td>
											<td>Professional</td>
											<td>25,000</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#008030"></span></td>
											<td>1955</td>
											<td>25.9</td>
										</tr>
										<tr>
											<td id="5622747">PSS</td>
											<td><img src="modules/fmsdb/img/flags/s/IDN.gif" alt="Indonesia">  IDN</td>
											<td>Premier Division</td>
											<td>10K</td>
											<td>Professional</td>
											<td>35,000</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#006030"></span></td>
											<td>1976</td>
											<td>26.2</td>
										</tr>
										<tr>
											<td id="135534">Semen Padang</td>
											<td><img src="modules/fmsdb/img/flags/s/IDN.gif" alt="Indonesia">  IDN</td>
											<td>Super League</td>
											<td>242K</td>
											<td>Professional</td>
											<td>15,000</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#E00000"></span></td>
											<td>1980</td>
											<td>25.9</td>
										</tr>
										<tr>
											<td id="41001018">Sidoarjo United</td>
											<td><img src="modules/fmsdb/img/flags/s/IDN.gif" alt="Indonesia">  IDN</td>
											<td>Premier Division</td>
											<td>8K</td>
											<td>Semi-Professional</td>
											<td>35,000</td>
											<td><span class="label" style="background:#60C0F8"></span> <span class="label" style="background:#0030A0"></span></td>
											<td>1973</td>
											<td>30.8</td>
										</tr>
										<tr>
											<td id="5622744">Sriwijaya FC</td>
											<td><img src="modules/fmsdb/img/flags/s/IDN.gif" alt="Indonesia">  IDN</td>
											<td>Super League</td>
											<td>150K</td>
											<td>Professional</td>
											<td>40,000</td>
											<td><span class="label" style="background:#C82030"></span> <span class="label" style="background:#F0E020"></span></td>
											<td>1976</td>
											<td>27.8</td>
										</tr>
										<tr>
											<td id="41024314">Sumbawa Barat</td>
											<td><img src="modules/fmsdb/img/flags/s/IDN.gif" alt="Indonesia">  IDN</td>
											<td>Premier Division</td>
											<td>6K</td>
											<td>Semi-Professional</td>
											<td>45,000</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#008030"></span></td>
											<td>1976</td>
											<td>26.7</td>
										</tr>
										<tr>
											<td id="41006729">Yahukimo FC</td>
											<td><img src="modules/fmsdb/img/flags/s/IDN.gif" alt="Indonesia">  IDN</td>
											<td>Premier Division</td>
											<td>7K</td>
											<td>Professional</td>
											<td>15,000</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#002080"></span></td>
											<td>2006</td>
											<td>24.8</td>
										</tr>

										<tr>
											<td id="40024212">Bengaluru FC</td>
											<td><img src="modules/fmsdb/img/flags/s/IND.gif" alt="India">  IND</td>
											<td>National Football League</td>
											<td>25K</td>
											<td>Professional</td>
											<td>40,000</td>
											<td><span class="label" style="background:#F84010"></span> <span class="label" style="background:#0030A0"></span></td>
											<td>2013</td>
											<td>24.9</td>
										</tr>
										<tr>
											<td id="5512151">Dempo</td>
											<td><img src="modules/fmsdb/img/flags/s/IND.gif" alt="India">  IND</td>
											<td>National Football League</td>
											<td>14K</td>
											<td>Professional</td>
											<td>19,400</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#0050D0"></span></td>
											<td>1966</td>
											<td>23.5</td>
										</tr>
										<tr>
											<td id="130637">East Bengal</td>
											<td><img src="modules/fmsdb/img/flags/s/IND.gif" alt="India">  IND</td>
											<td>National Football League</td>
											<td>14K</td>
											<td>Professional</td>
											<td>68,000</td>
											<td><span class="label" style="background:#F8F000"></span> <span class="label" style="background:#B00000"></span></td>
											<td>1920</td>
											<td>24.7</td>
										</tr>
										<tr>
											<td id="7642394">Lajong</td>
											<td><img src="modules/fmsdb/img/flags/s/IND.gif" alt="India">  IND</td>
											<td>National Football League</td>
											<td>2K</td>
											<td>Professional</td>
											<td>22,000</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#C80000"></span></td>
											<td>1983</td>
											<td>20.9</td>
										</tr>
										<tr>
											<td id="5512149">Mohun Bagan</td>
											<td><img src="modules/fmsdb/img/flags/s/IND.gif" alt="India">  IND</td>
											<td>National Football League</td>
											<td>1K</td>
											<td>Professional</td>
											<td>68,000</td>
											<td><span class="label" style="background:#800020"></span> <span class="label" style="background:#006060"></span></td>
											<td>1889</td>
											<td>24.5</td>
										</tr>
										<tr>
											<td id="40001008">Mumbai FC</td>
											<td><img src="modules/fmsdb/img/flags/s/IND.gif" alt="India">  IND</td>
											<td>National Football League</td>
											<td>2K</td>
											<td>Professional</td>
											<td>5,000</td>
											<td><span class="label" style="background:#0030A0"></span> <span class="label" style="background:#F8F000"></span></td>
											<td>2007</td>
											<td>25.8</td>
										</tr>
										<tr>
											<td id="5512181">Salgaocar</td>
											<td><img src="modules/fmsdb/img/flags/s/IND.gif" alt="India">  IND</td>
											<td>National Football League</td>
											<td>8K</td>
											<td>Professional</td>
											<td>19,400</td>
											<td><span class="label" style="background:#F8F000"></span> <span class="label" style="background:#108830"></span></td>
											<td>1956</td>
											<td>23.9</td>
										</tr>
										<tr>
											<td id="5623136">SC Goa</td>
											<td><img src="modules/fmsdb/img/flags/s/IND.gif" alt="India">  IND</td>
											<td>National Football League</td>
											<td>17K</td>
											<td>Professional</td>
											<td>19,400</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#F85000"></span></td>
											<td>1999</td>
											<td>22.6</td>
										</tr>
										<tr>
											<td id="40023922">Shivajians</td>
											<td><img src="modules/fmsdb/img/flags/s/IND.gif" alt="India">  IND</td>
											<td>National Football League</td>
											<td>17K</td>
											<td>Professional</td>
											<td>22,000</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#F00000"></span></td>
											<td>1987</td>
											<td>22.8</td>
										</tr>



										<tr>
											<td id="587">Athlone Town</td>
											<td><img src="modules/fmsdb/img/flags/s/IRL.gif" alt="Ireland">  IRL</td>
											<td>First Division</td>
											<td>0</td>
											<td>Semi-Professional</td>
											<td>5,000</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
											<td>1887</td>
											<td>20.6</td>
										</tr>
										<tr>
											<td id="588">Bohemians</td>
											<td><img src="modules/fmsdb/img/flags/s/IRL.gif" alt="Ireland">  IRL</td>
											<td>Premier Division</td>
											<td>0</td>
											<td>Semi-Professional</td>
											<td>10,000</td>
											<td><span class="label" style="background:#E00000"></span> <span class="label" style="background:#000000"></span></td>
											<td>1890</td>
											<td>25.4</td>
										</tr>
										<tr>
											<td id="1300916">Bray Wanderers</td>
											<td><img src="modules/fmsdb/img/flags/s/IRL.gif" alt="Ireland">  IRL</td>
											<td>Premier Division</td>
											<td>0</td>
											<td>Semi-Professional</td>
											<td>8,000</td>
											<td><span class="label" style="background:#006030"></span> <span class="label" style="background:#101010"></span></td>
											<td>1942</td>
											<td>25.5</td>
										</tr>
										<tr>
											<td id="52076833">Cabinteely</td>
											<td><img src="modules/fmsdb/img/flags/s/IRL.gif" alt="Ireland">  IRL</td>
											<td>First Division</td>
											<td>0</td>
											<td>Semi-Professional</td>
											<td>2,000</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
											<td>1967</td>
											<td>20.2</td>
										</tr>
										<tr>
											<td id="589">Cobh Ramblers</td>
											<td><img src="modules/fmsdb/img/flags/s/IRL.gif" alt="Ireland">  IRL</td>
											<td>First Division</td>
											<td>0</td>
											<td>Semi-Professional</td>
											<td>9,000</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
											<td>1922</td>
											<td>21.6</td>
										</tr>
										<tr>
											<td id="590">Cork City</td>
											<td><img src="modules/fmsdb/img/flags/s/IRL.gif" alt="Ireland">  IRL</td>
											<td>Premier Division</td>
											<td>0</td>
											<td>Professional</td>
											<td>7,365</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#006030"></span></td>
											<td>1984</td>
											<td>25.3</td>
										</tr>
										<tr>
											<td id="591">Derry City</td>
											<td><img src="modules/fmsdb/img/flags/s/IRL.gif" alt="Ireland">  IRL</td>
											<td>Premier Division</td>
											<td>0</td>
											<td>Professional</td>
											<td>8,200</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#E00000"></span></td>
											<td>1928</td>
											<td>23.4</td>
										</tr>
										<tr>
											<td id="1300922">Drogheda Utd</td>
											<td><img src="modules/fmsdb/img/flags/s/IRL.gif" alt="Ireland">  IRL</td>
											<td>First Division</td>
											<td>0</td>
											<td>Semi-Professional</td>
											<td>5,400</td>
											<td><span class="label" style="background:#0078F8"></span> <span class="label" style="background:#902830"></span></td>
											<td>1919</td>
											<td>22.0</td>
										</tr>
										<tr>
											<td id="592">Dundalk</td>
											<td><img src="modules/fmsdb/img/flags/s/IRL.gif" alt="Ireland">  IRL</td>
											<td>Premier Division</td>
											<td>0</td>
											<td>Professional</td>
											<td>4,500</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1903</td>
											<td>25.6</td>
										</tr>
										<tr>
											<td id="1300918">Finn Harps</td>
											<td><img src="modules/fmsdb/img/flags/s/IRL.gif" alt="Ireland">  IRL</td>
											<td>Premier Division</td>
											<td>0</td>
											<td>Semi-Professional</td>
											<td>7,500</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#0050D0"></span></td>
											<td>1954</td>
											<td>26.9</td>
										</tr>
										<tr>
											<td id="593">Galway Utd</td>
											<td><img src="modules/fmsdb/img/flags/s/IRL.gif" alt="Ireland">  IRL</td>
											<td>Premier Division</td>
											<td>0</td>
											<td>Professional</td>
											<td>5,000</td>
											<td><span class="label" style="background:#B8D8E8"></span> <span class="label" style="background:#702020"></span></td>
											<td>1937</td>
											<td>22.3</td>
										</tr>
										<tr>
											<td id="129380">Limerick F.C.</td>
											<td><img src="modules/fmsdb/img/flags/s/IRL.gif" alt="Ireland">  IRL</td>
											<td>First Division</td>
											<td>0</td>
											<td>Professional</td>
											<td>3,200</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
											<td>1937</td>
											<td>22.8</td>
										</tr>
										<tr>
											<td id="5100326">Longford</td>
											<td><img src="modules/fmsdb/img/flags/s/IRL.gif" alt="Ireland">  IRL</td>
											<td>Premier Division</td>
											<td>0</td>
											<td>Semi-Professional</td>
											<td>6,850</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#E00000"></span></td>
											<td>1924</td>
											<td>23.6</td>
										</tr>
										<tr>
											<td id="596">Shamrock Rovers</td>
											<td><img src="modules/fmsdb/img/flags/s/IRL.gif" alt="Ireland">  IRL</td>
											<td>Premier Division</td>
											<td>0</td>
											<td>Professional</td>
											<td>6,000</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#008030"></span></td>
											<td>1901</td>
											<td>22.9</td>
										</tr>
										<tr>
											<td id="597">Shelbourne</td>
											<td><img src="modules/fmsdb/img/flags/s/IRL.gif" alt="Ireland">  IRL</td>
											<td>First Division</td>
											<td>0</td>
											<td>Semi-Professional</td>
											<td>9,680</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#E00000"></span></td>
											<td>1895</td>
											<td>23.2</td>
										</tr>
										<tr>
											<td id="598">Sligo Rovers</td>
											<td><img src="modules/fmsdb/img/flags/s/IRL.gif" alt="Ireland">  IRL</td>
											<td>Premier Division</td>
											<td>0</td>
											<td>Professional</td>
											<td>4,500</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#E00000"></span></td>
											<td>1928</td>
											<td>22.7</td>
										</tr>
										<tr>
											<td id="599">St. Pat's Athletic</td>
											<td><img src="modules/fmsdb/img/flags/s/IRL.gif" alt="Ireland">  IRL</td>
											<td>Premier Division</td>
											<td>0</td>
											<td>Professional</td>
											<td>5,400</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#E00000"></span></td>
											<td>1929</td>
											<td>23.5</td>
										</tr>
										<tr>
											<td id="1300920">U.C.D.</td>
											<td><img src="modules/fmsdb/img/flags/s/IRL.gif" alt="Ireland">  IRL</td>
											<td>First Division</td>
											<td>0</td>
											<td>Semi-Professional</td>
											<td>3,000</td>
											<td><span class="label" style="background:#002060"></span> <span class="label" style="background:#60C0F8"></span></td>
											<td>1895</td>
											<td>23.1</td>
										</tr>
										<tr>
											<td id="120533">Waterford Utd</td>
											<td><img src="modules/fmsdb/img/flags/s/IRL.gif" alt="Ireland">  IRL</td>
											<td>First Division</td>
											<td>0</td>
											<td>Semi-Professional</td>
											<td>8,000</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#0050D0"></span></td>
											<td>1930</td>
											<td>20.8</td>
										</tr>
										<tr>
											<td id="156640">Wexford Youths</td>
											<td><img src="modules/fmsdb/img/flags/s/IRL.gif" alt="Ireland">  IRL</td>
											<td>Premier Division</td>
											<td>0</td>
											<td>Semi-Professional</td>
											<td>2,500</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
											<td>2007</td>
											<td>25.1</td>
										</tr>
										<tr>
											<td id="1079">?or</td>
											<td><img src="modules/fmsdb/img/flags/s/ISL.gif" alt="Iceland">  ISL</td>
											<td>First Division</td>
											<td>7K</td>
											<td>Semi-Professional</td>
											<td>1,645</td>
											<td><span class="label" style="background:#C80000"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1915</td>
											<td>23.1</td>
										</tr>
										<tr>
											<td id="3400446">?rottur R.</td>
											<td><img src="modules/fmsdb/img/flags/s/ISL.gif" alt="Iceland">  ISL</td>
											<td>Premier Division</td>
											<td>13K</td>
											<td>Semi-Professional</td>
											<td>2,500</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#E00000"></span></td>
											<td>1949</td>
											<td>24.0</td>
										</tr>
										<tr>
											<td id="1069">Brei?ablik</td>
											<td><img src="modules/fmsdb/img/flags/s/ISL.gif" alt="Iceland">  ISL</td>
											<td>Premier Division</td>
											<td>27K</td>
											<td>Semi-Professional</td>
											<td>3,009</td>
											<td><span class="label" style="background:#105038"></span> <span class="label" style="background:#000000"></span></td>
											<td>1950</td>
											<td>23.4</td>
										</tr>
										<tr>
											<td id="1070">FH</td>
											<td><img src="modules/fmsdb/img/flags/s/ISL.gif" alt="Iceland">  ISL</td>
											<td>Premier Division</td>
											<td>134K</td>
											<td>Professional</td>
											<td>6,450</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1929</td>
											<td>24.8</td>
										</tr>
										<tr>
											<td id="7842823">Fjar?abygg?</td>
											<td><img src="modules/fmsdb/img/flags/s/ISL.gif" alt="Iceland">  ISL</td>
											<td>First Division</td>
											<td>17K</td>
											<td>Semi-Professional</td>
											<td>1,000</td>
											<td><span class="label" style="background:#202030"></span> <span class="label" style="background:#E00000"></span></td>
											<td>2001</td>
											<td>23.5</td>
										</tr>
										<tr>
											<td id="7841979">Fjolnir</td>
											<td><img src="modules/fmsdb/img/flags/s/ISL.gif" alt="Iceland">  ISL</td>
											<td>Premier Division</td>
											<td>13K</td>
											<td>Semi-Professional</td>
											<td>1,030</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#F8F000"></span></td>
											<td>1988</td>
											<td>24.2</td>
										</tr>
										<tr>
											<td id="1071">Fram</td>
											<td><img src="modules/fmsdb/img/flags/s/ISL.gif" alt="Iceland">  ISL</td>
											<td>First Division</td>
											<td>17K</td>
											<td>Semi-Professional</td>
											<td>500</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#0050D0"></span></td>
											<td>1908</td>
											<td>23.4</td>
										</tr>
										<tr>
											<td id="1300641">Fylkir</td>
											<td><img src="modules/fmsdb/img/flags/s/ISL.gif" alt="Iceland">  ISL</td>
											<td>Premier Division</td>
											<td>34K</td>
											<td>Semi-Professional</td>
											<td>2,780</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#F84000"></span></td>
											<td>1967</td>
											<td>25.0</td>
										</tr>
										<tr>
											<td id="1300640">Grindavik</td>
											<td><img src="modules/fmsdb/img/flags/s/ISL.gif" alt="Iceland">  ISL</td>
											<td>First Division</td>
											<td>13K</td>
											<td>Semi-Professional</td>
											<td>1,750</td>
											<td><span class="label" style="background:#0050D0"></span> <span class="label" style="background:#F8F000"></span></td>
											<td>1935</td>
											<td>24.6</td>
										</tr>
										<tr>
											<td id="7840108">Haukar</td>
											<td><img src="modules/fmsdb/img/flags/s/ISL.gif" alt="Iceland">  ISL</td>
											<td>First Division</td>
											<td>5K</td>
											<td>Semi-Professional</td>
											<td>2,120</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#E00000"></span></td>
											<td>1931</td>
											<td>21.6</td>
										</tr>
										<tr>
											<td id="7840140">HK</td>
											<td><img src="modules/fmsdb/img/flags/s/ISL.gif" alt="Iceland">  ISL</td>
											<td>First Division</td>
											<td>10K</td>
											<td>Semi-Professional</td>
											<td>1,600</td>
											<td><span class="label" style="background:#E00000"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1970</td>
											<td>22.8</td>
										</tr>
										<tr>
											<td id="7843560">Huginn</td>
											<td><img src="modules/fmsdb/img/flags/s/ISL.gif" alt="Iceland">  ISL</td>
											<td>First Division</td>
											<td>12K</td>
											<td>Semi-Professional</td>
											<td>600</td>
											<td><span class="label" style="background:#F8C828"></span> <span class="label" style="background:#000000"></span></td>
											<td>1913</td>
											<td>25.4</td>
										</tr>
										<tr>
											<td id="1072">IA</td>
											<td><img src="modules/fmsdb/img/flags/s/ISL.gif" alt="Iceland">  ISL</td>
											<td>Premier Division</td>
											<td>27K</td>
											<td>Semi-Professional</td>
											<td>5,550</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F8D000"></span></td>
											<td>1946</td>
											<td>25.1</td>
										</tr>
										<tr>
											<td id="1074">IBV</td>
											<td><img src="modules/fmsdb/img/flags/s/ISL.gif" alt="Iceland">  ISL</td>
											<td>Premier Division</td>
											<td>50K</td>
											<td>Semi-Professional</td>
											<td>2,834</td>
											<td><span class="label" style="background:#D0D0D0"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1945</td>
											<td>23.0</td>
										</tr>
										<tr>
											<td id="4300030">KA</td>
											<td><img src="modules/fmsdb/img/flags/s/ISL.gif" alt="Iceland">  ISL</td>
											<td>First Division</td>
											<td>34K</td>
											<td>Semi-Professional</td>
											<td>1,645</td>
											<td><span class="label" style="background:#0850A8"></span> <span class="label" style="background:#F8F000"></span></td>
											<td>1928</td>
											<td>25.4</td>
										</tr>
										<tr>
											<td id="1073">Keflavik</td>
											<td><img src="modules/fmsdb/img/flags/s/ISL.gif" alt="Iceland">  ISL</td>
											<td>First Division</td>
											<td>27K</td>
											<td>Semi-Professional</td>
											<td>2,658</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#000000"></span></td>
											<td>1929</td>
											<td>25.6</td>
										</tr>
										<tr>
											<td id="1076">KR</td>
											<td><img src="modules/fmsdb/img/flags/s/ISL.gif" alt="Iceland">  ISL</td>
											<td>Premier Division</td>
											<td>134K</td>
											<td>Professional</td>
											<td>2,781</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#000000"></span></td>
											<td>1899</td>
											<td>23.8</td>
										</tr>
										<tr>
											<td id="7842825">Leiknir F.</td>
											<td><img src="modules/fmsdb/img/flags/s/ISL.gif" alt="Iceland">  ISL</td>
											<td>First Division</td>
											<td>7K</td>
											<td>Semi-Professional</td>
											<td>1,500</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#E00000"></span></td>
											<td>1940</td>
											<td>24.9</td>
										</tr>
										<tr>
											<td id="7840114">Leiknir R.</td>
											<td><img src="modules/fmsdb/img/flags/s/ISL.gif" alt="Iceland">  ISL</td>
											<td>First Division</td>
											<td>13K</td>
											<td>Semi-Professional</td>
											<td>1,025</td>
											<td><span class="label" style="background:#901000"></span> <span class="label" style="background:#0820E0"></span></td>
											<td>1973</td>
											<td>23.4</td>
										</tr>
										<tr>
											<td id="7840005">Selfoss</td>
											<td><img src="modules/fmsdb/img/flags/s/ISL.gif" alt="Iceland">  ISL</td>
											<td>First Division</td>
											<td>20K</td>
											<td>Semi-Professional</td>
											<td>2,910</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#800020"></span></td>
											<td>1936</td>
											<td>23.0</td>
										</tr>
										<tr>
											<td id="1078">Stjarnan</td>
											<td><img src="modules/fmsdb/img/flags/s/ISL.gif" alt="Iceland">  ISL</td>
											<td>Premier Division</td>
											<td>101K</td>
											<td>Semi-Professional</td>
											<td>1,400</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#0850A8"></span></td>
											<td>1960</td>
											<td>24.1</td>
										</tr>
										<tr>
											<td id="1080">Valur</td>
											<td><img src="modules/fmsdb/img/flags/s/ISL.gif" alt="Iceland">  ISL</td>
											<td>Premier Division</td>
											<td>101K</td>
											<td>Semi-Professional</td>
											<td>2,225</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#E00000"></span></td>
											<td>1911</td>
											<td>24.3</td>
										</tr>
										<tr>
											<td id="7842686">Vikingur O.</td>
											<td><img src="modules/fmsdb/img/flags/s/ISL.gif" alt="Iceland">  ISL</td>
											<td>Premier Division</td>
											<td>20K</td>
											<td>Semi-Professional</td>
											<td>1,130</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#0010D8"></span></td>
											<td>1928</td>
											<td>25.5</td>
										</tr>
										<tr>
											<td id="1101637">Vikingur R.</td>
											<td><img src="modules/fmsdb/img/flags/s/ISL.gif" alt="Iceland">  ISL</td>
											<td>Premier Division</td>
											<td>34K</td>
											<td>Semi-Professional</td>
											<td>1,449</td>
											<td><span class="label" style="background:#E00000"></span> <span class="label" style="background:#000000"></span></td>
											<td>1908</td>
											<td>23.8</td>
										</tr>
										<tr>
											<td id="7860422">Ahi Nazareth</td>
											<td><img src="modules/fmsdb/img/flags/s/ISR.gif" alt="Israel">  ISR</td>
											<td>National League</td>
											<td>23K</td>
											<td>Professional</td>
											<td>5,000</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#00A030"></span></td>
											<td>1967</td>
											<td>24.2</td>
										</tr>
										<tr>
											<td id="1083">Beitar Jerusalem</td>
											<td><img src="modules/fmsdb/img/flags/s/ISR.gif" alt="Israel">  ISR</td>
											<td>Premier League</td>
											<td>205K</td>
											<td>Professional</td>
											<td>34,000</td>
											<td><span class="label" style="background:#F8F838"></span> <span class="label" style="background:#F8F000"></span></td>
											<td>1936</td>
											<td>24.3</td>
										</tr>
										<tr>
											<td id="42023935">Beitar Tel-Aviv/Ramla</td>
											<td><img src="modules/fmsdb/img/flags/s/ISR.gif" alt="Israel">  ISR</td>
											<td>National League</td>
											<td>0</td>
											<td>Professional</td>
											<td>1,500</td>
											<td><span class="label" style="background:#1068F8"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>2011</td>
											<td>21.0</td>
										</tr>
										<tr>
											<td id="7867984">Bnei Lod</td>
											<td><img src="modules/fmsdb/img/flags/s/ISR.gif" alt="Israel">  ISR</td>
											<td>National League</td>
											<td>2K</td>
											<td>Professional</td>
											<td>3,000</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
											<td>0</td>
											<td>25.4</td>
										</tr>
										<tr>
											<td id="7860421">Bnei Sakhnin</td>
											<td><img src="modules/fmsdb/img/flags/s/ISR.gif" alt="Israel">  ISR</td>
											<td>Premier League</td>
											<td>0</td>
											<td>Professional</td>
											<td>5,000</td>
											<td><span class="label" style="background:#B00000"></span> <span class="label" style="background:#C80000"></span></td>
											<td>1992</td>
											<td>24.7</td>
										</tr>
										<tr>
											<td id="1082">Bnei Yehuda</td>
											<td><img src="modules/fmsdb/img/flags/s/ISR.gif" alt="Israel">  ISR</td>
											<td>Premier League</td>
											<td>26K</td>
											<td>Professional</td>
											<td>11,500</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F08000"></span></td>
											<td>1935</td>
											<td>23.1</td>
										</tr>
										<tr>
											<td id="7861698">Hapoel Acre</td>
											<td><img src="modules/fmsdb/img/flags/s/ISR.gif" alt="Israel">  ISR</td>
											<td>National League</td>
											<td>10K</td>
											<td>Professional</td>
											<td>5,000</td>
											<td><span class="label" style="background:#0050D0"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1946</td>
											<td>23.8</td>
										</tr>
										<tr>
											<td id="7868750">Hapoel Afula</td>
											<td><img src="modules/fmsdb/img/flags/s/ISR.gif" alt="Israel">  ISR</td>
											<td>National League</td>
											<td>92K</td>
											<td>Professional</td>
											<td>3,500</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
											<td>1951</td>
											<td>24.1</td>
										</tr>
										<tr>
											<td id="7861688">Hapoel Ashkelon</td>
											<td><img src="modules/fmsdb/img/flags/s/ISR.gif" alt="Israel">  ISR</td>
											<td>Premier League</td>
											<td>9K</td>
											<td>Professional</td>
											<td>6,000</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#0010D8"></span></td>
											<td>1955</td>
											<td>25.8</td>
										</tr>
										<tr>
											<td id="1085">Hapoel Be'er-Sheva</td>
											<td><img src="modules/fmsdb/img/flags/s/ISR.gif" alt="Israel">  ISR</td>
											<td>Premier League</td>
											<td>172K</td>
											<td>Professional</td>
											<td>16,126</td>
											<td><span class="label" style="background:#F85048"></span> <span class="label" style="background:#E00000"></span></td>
											<td>1949</td>
											<td>25.6</td>
										</tr>
										<tr>
											<td id="1087">Hapoel Haifa</td>
											<td><img src="modules/fmsdb/img/flags/s/ISR.gif" alt="Israel">  ISR</td>
											<td>Premier League</td>
											<td>4K</td>
											<td>Professional</td>
											<td>5,000</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#E00000"></span></td>
											<td>1924</td>
											<td>25.5</td>
										</tr>
										<tr>
											<td id="1300671">Hapoel Jerusalem</td>
											<td><img src="modules/fmsdb/img/flags/s/ISR.gif" alt="Israel">  ISR</td>
											<td>National League</td>
											<td>0</td>
											<td>Professional</td>
											<td>1,500</td>
											<td><span class="label" style="background:#E00808"></span> <span class="label" style="background:#000000"></span></td>
											<td>1926</td>
											<td>23.1</td>
										</tr>
										<tr>
											<td id="42016459">Hapoel Katamon</td>
											<td><img src="modules/fmsdb/img/flags/s/ISR.gif" alt="Israel">  ISR</td>
											<td>National League</td>
											<td>0</td>
											<td>Professional</td>
											<td>3,000</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#E00000"></span></td>
											<td>2009</td>
											<td>24.1</td>
										</tr>
										<tr>
											<td id="1300665">Hapoel Kfar-Saba</td>
											<td><img src="modules/fmsdb/img/flags/s/ISR.gif" alt="Israel">  ISR</td>
											<td>Premier League</td>
											<td>26K</td>
											<td>Professional</td>
											<td>5,800</td>
											<td><span class="label" style="background:#006030"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1928</td>
											<td>23.9</td>
										</tr>
										<tr>
											<td id="7860420">Hapoel Nazareth-Ilit</td>
											<td><img src="modules/fmsdb/img/flags/s/ISR.gif" alt="Israel">  ISR</td>
											<td>National League</td>
											<td>0</td>
											<td>Professional</td>
											<td>1,500</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#F00000"></span></td>
											<td>1962</td>
											<td>24.3</td>
										</tr>
										<tr>
											<td id="1089">Hapoel Petach-Tikva</td>
											<td><img src="modules/fmsdb/img/flags/s/ISR.gif" alt="Israel">  ISR</td>
											<td>National League</td>
											<td>0</td>
											<td>Professional</td>
											<td>11,500</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#1838F8"></span></td>
											<td>1930</td>
											<td>22.6</td>
										</tr>
										<tr>
											<td id="7860424">Hapoel Ra'anana</td>
											<td><img src="modules/fmsdb/img/flags/s/ISR.gif" alt="Israel">  ISR</td>
											<td>Premier League</td>
											<td>69K</td>
											<td>Professional</td>
											<td>13,610</td>
											<td><span class="label" style="background:#D8B028"></span> <span class="label" style="background:#C00008"></span></td>
											<td>1932</td>
											<td>23.3</td>
										</tr>
										<tr>
											<td id="7860423">Hapoel Ramat-Gan</td>
											<td><img src="modules/fmsdb/img/flags/s/ISR.gif" alt="Israel">  ISR</td>
											<td>National League</td>
											<td>103K</td>
											<td>Professional</td>
											<td>4,200</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#E00000"></span></td>
											<td>1927</td>
											<td>22.1</td>
										</tr>
										<tr>
											<td id="1088">Hapoel Rishon LeZion</td>
											<td><img src="modules/fmsdb/img/flags/s/ISR.gif" alt="Israel">  ISR</td>
											<td>National League</td>
											<td>31K</td>
											<td>Professional</td>
											<td>6,000</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#F87000"></span></td>
											<td>1940</td>
											<td>22.9</td>
										</tr>
										<tr>
											<td id="1090">Hapoel Tel-Aviv</td>
											<td><img src="modules/fmsdb/img/flags/s/ISR.gif" alt="Israel">  ISR</td>
											<td>Premier League</td>
											<td>54K</td>
											<td>Professional</td>
											<td>11,500</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#D02028"></span></td>
											<td>1927</td>
											<td>23.8</td>
										</tr>
										<tr>
											<td id="7861687">Kiryat-Shmona</td>
											<td><img src="modules/fmsdb/img/flags/s/ISR.gif" alt="Israel">  ISR</td>
											<td>Premier League</td>
											<td>115K</td>
											<td>Professional</td>
											<td>5,000</td>
											<td><span class="label" style="background:#0078F8"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>2000</td>
											<td>22.8</td>
										</tr>
										<tr>
											<td id="1093">Maccabi Haifa</td>
											<td><img src="modules/fmsdb/img/flags/s/ISR.gif" alt="Israel">  ISR</td>
											<td>Premier League</td>
											<td>431K</td>
											<td>Professional</td>
											<td>13,610</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#108830"></span></td>
											<td>1913</td>
											<td>23.6</td>
										</tr>
										<tr>
											<td id="1094">Maccabi Herzliya</td>
											<td><img src="modules/fmsdb/img/flags/s/ISR.gif" alt="Israel">  ISR</td>
											<td>National League</td>
											<td>19K</td>
											<td>Professional</td>
											<td>4,200</td>
											<td><span class="label" style="background:#000030"></span> <span class="label" style="background:#F8F000"></span></td>
											<td>1937</td>
											<td>23.1</td>
										</tr>
										<tr>
											<td id="1095">Maccabi Netanya</td>
											<td><img src="modules/fmsdb/img/flags/s/ISR.gif" alt="Israel">  ISR</td>
											<td>National League</td>
											<td>38K</td>
											<td>Professional</td>
											<td>13,610</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F8F000"></span></td>
											<td>1936</td>
											<td>24.4</td>
										</tr>
										<tr>
											<td id="1096">Maccabi Petach-Tikva</td>
											<td><img src="modules/fmsdb/img/flags/s/ISR.gif" alt="Israel">  ISR</td>
											<td>Premier League</td>
											<td>43K</td>
											<td>Professional</td>
											<td>11,500</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#0050D0"></span></td>
											<td>1912</td>
											<td>23.0</td>
										</tr>
										<tr>
											<td id="1097">Maccabi Tel-Aviv</td>
											<td><img src="modules/fmsdb/img/flags/s/ISR.gif" alt="Israel">  ISR</td>
											<td>Premier League</td>
											<td>2M</td>
											<td>Professional</td>
											<td>13,610</td>
											<td><span class="label" style="background:#0050D0"></span> <span class="label" style="background:#F8F000"></span></td>
											<td>1906</td>
											<td>23.8</td>
										</tr>
										<tr>
											<td id="42018773">Nesher</td>
											<td><img src="modules/fmsdb/img/flags/s/ISR.gif" alt="Israel">  ISR</td>
											<td>National League</td>
											<td>0</td>
											<td>Professional</td>
											<td>3,500</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
											<td>2009</td>
											<td>24.0</td>
										</tr>
										<tr>
											<td id="7861702">Ramat HaSharon</td>
											<td><img src="modules/fmsdb/img/flags/s/ISR.gif" alt="Israel">  ISR</td>
											<td>National League</td>
											<td>8K</td>
											<td>Professional</td>
											<td>4,200</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#E00000"></span></td>
											<td>1957</td>
											<td>23.4</td>
										</tr>
										<tr>
											<td id="1091">S.C. Ashdod</td>
											<td><img src="modules/fmsdb/img/flags/s/ISR.gif" alt="Israel">  ISR</td>
											<td>Premier League</td>
											<td>154K</td>
											<td>Professional</td>
											<td>6,000</td>
											<td><span class="label" style="background:#F8F000"></span> <span class="label" style="background:#C80000"></span></td>
											<td>1999</td>
											<td>23.6</td>
										</tr>
										<tr>
											<td id="7860920">Sha'araim</td>
											<td><img src="modules/fmsdb/img/flags/s/ISR.gif" alt="Israel">  ISR</td>
											<td>National League</td>
											<td>6K</td>
											<td>Professional</td>
											<td>3,500</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#0050D0"></span></td>
											<td>1950</td>
											<td>24.3</td>
										</tr>
										<tr>
											<td id="1099">A.C. Milan</td>
											<td><img src="modules/fmsdb/img/flags/s/ITA.gif" alt="Italy">  ITA</td>
											<td>Serie A</td>
											<td>5M</td>
											<td>Professional</td>
											<td>80,018</td>
											<td><span class="label" style="background:#C81018"></span> <span class="label" style="background:#101010"></span></td>
											<td>1899</td>
											<td>26.0</td>
										</tr>
										<tr>
											<td id="7983732">Akragas</td>
											<td><img src="modules/fmsdb/img/flags/s/ITA.gif" alt="Italy">  ITA</td>
											<td>Serie C/C</td>
											<td>60K</td>
											<td>Professional</td>
											<td>12,000</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#0050D0"></span></td>
											<td>1951</td>
											<td>21.8</td>
										</tr>
										<tr>
											<td id="1142">AlbinoLeffe</td>
											<td><img src="modules/fmsdb/img/flags/s/ITA.gif" alt="Italy">  ITA</td>
											<td>Serie C/B</td>
											<td>60K</td>
											<td>Professional</td>
											<td>26,562</td>
											<td><span class="label" style="background:#002060"></span> <span class="label" style="background:#B8D8E8"></span></td>
											<td>1998</td>
											<td>23.9</td>
										</tr>
										<tr>
											<td id="1102">Alessandria</td>
											<td><img src="modules/fmsdb/img/flags/s/ITA.gif" alt="Italy">  ITA</td>
											<td>Serie C/A</td>
											<td>517K</td>
											<td>Professional</td>
											<td>5,827</td>
											<td><span class="label" style="background:#404040"></span> <span class="label" style="background:#B0B0B0"></span></td>
											<td>1912</td>
											<td>25.0</td>
										</tr>
										<tr>
											<td id="829172">Alto Adige</td>
											<td><img src="modules/fmsdb/img/flags/s/ITA.gif" alt="Italy">  ITA</td>
											<td>Serie C/B</td>
											<td>86K</td>
											<td>Professional</td>
											<td>4,041</td>
											<td><span class="label" style="background:#F00000"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1995</td>
											<td>23.5</td>
										</tr>
										<tr>
											<td id="1104">Ancona</td>
											<td><img src="modules/fmsdb/img/flags/s/ITA.gif" alt="Italy">  ITA</td>
											<td>Serie C/B</td>
											<td>129K</td>
											<td>Professional</td>
											<td>23,976</td>
											<td><span class="label" style="background:#F83030"></span> <span class="label" style="background:#C80030"></span></td>
											<td>1948</td>
											<td>23.2</td>
										</tr>
										<tr>
											<td id="2185">Arezzo</td>
											<td><img src="modules/fmsdb/img/flags/s/ITA.gif" alt="Italy">  ITA</td>
											<td>Serie C/A</td>
											<td>345K</td>
											<td>Professional</td>
											<td>13,128</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#800020"></span></td>
											<td>1923</td>
											<td>24.6</td>
										</tr>
										<tr>
											<td id="1105">Ascoli</td>
											<td><img src="modules/fmsdb/img/flags/s/ITA.gif" alt="Italy">  ITA</td>
											<td>Serie B</td>
											<td>258K</td>
											<td>Professional</td>
											<td>20,550</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
											<td>1898</td>
											<td>24.2</td>
										</tr>
										<tr>
											<td id="1106">Atalanta</td>
											<td><img src="modules/fmsdb/img/flags/s/ITA.gif" alt="Italy">  ITA</td>
											<td>Serie A</td>
											<td>3M</td>
											<td>Professional</td>
											<td>26,562</td>
											<td><span class="label" style="background:#2850A0"></span> <span class="label" style="background:#081030"></span></td>
											<td>1907</td>
											<td>26.5</td>
										</tr>
										<tr>
											<td id="1108">Avellino</td>
											<td><img src="modules/fmsdb/img/flags/s/ITA.gif" alt="Italy">  ITA</td>
											<td>Serie B</td>
											<td>517K</td>
											<td>Professional</td>
											<td>26,000</td>
											<td><span class="label" style="background:#009848"></span> <span class="label" style="background:#006030"></span></td>
											<td>1912</td>
											<td>24.3</td>
										</tr>
										<tr>
											<td id="1110">Bari</td>
											<td><img src="modules/fmsdb/img/flags/s/ITA.gif" alt="Italy">  ITA</td>
											<td>Serie B</td>
											<td>861K</td>
											<td>Professional</td>
											<td>58,270</td>
											<td><span class="label" style="background:#E00000"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1908</td>
											<td>26.0</td>
										</tr>
										<tr>
											<td id="6100165">Bassano</td>
											<td><img src="modules/fmsdb/img/flags/s/ITA.gif" alt="Italy">  ITA</td>
											<td>Serie C/B</td>
											<td>172K</td>
											<td>Professional</td>
											<td>2,902</td>
											<td><span class="label" style="background:#E00000"></span> <span class="label" style="background:#F8F000"></span></td>
											<td>1920</td>
											<td>24.0</td>
										</tr>
										<tr>
											<td id="2188">Benevento</td>
											<td><img src="modules/fmsdb/img/flags/s/ITA.gif" alt="Italy">  ITA</td>
											<td>Serie B</td>
											<td>1M</td>
											<td>Professional</td>
											<td>18,000</td>
											<td><span class="label" style="background:#F8F000"></span> <span class="label" style="background:#E00000"></span></td>
											<td>1929</td>
											<td>25.9</td>
										</tr>
										<tr>
											<td id="1111">Bologna</td>
											<td><img src="modules/fmsdb/img/flags/s/ITA.gif" alt="Italy">  ITA</td>
											<td>Serie A</td>
											<td>3M</td>
											<td>Professional</td>
											<td>36,462</td>
											<td><span class="label" style="background:#E00000"></span> <span class="label" style="background:#083078"></span></td>
											<td>1909</td>
											<td>25.5</td>
										</tr>
										<tr>
											<td id="1113">Brescia</td>
											<td><img src="modules/fmsdb/img/flags/s/ITA.gif" alt="Italy">  ITA</td>
											<td>Serie B</td>
											<td>345K</td>
											<td>Professional</td>
											<td>27,547</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#0050D0"></span></td>
											<td>1911</td>
											<td>23.2</td>
										</tr>
										<tr>
											<td id="1114">Cagliari</td>
											<td><img src="modules/fmsdb/img/flags/s/ITA.gif" alt="Italy">  ITA</td>
											<td>Serie A</td>
											<td>2M</td>
											<td>Professional</td>
											<td>16,003</td>
											<td><span class="label" style="background:#002060"></span> <span class="label" style="background:#C80030"></span></td>
											<td>1920</td>
											<td>28.3</td>
										</tr>
										<tr>
											<td id="1115">Carpi</td>
											<td><img src="modules/fmsdb/img/flags/s/ITA.gif" alt="Italy">  ITA</td>
											<td>Serie B</td>
											<td>1M</td>
											<td>Professional</td>
											<td>5,500</td>
											<td><span class="label" style="background:#C80000"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1909</td>
											<td>23.8</td>
										</tr>
										<tr>
											<td id="1116">Carrarese</td>
											<td><img src="modules/fmsdb/img/flags/s/ITA.gif" alt="Italy">  ITA</td>
											<td>Serie C/A</td>
											<td>86K</td>
											<td>Professional</td>
											<td>9,500</td>
											<td><span class="label" style="background:#F8F000"></span> <span class="label" style="background:#005098"></span></td>
											<td>1908</td>
											<td>23.3</td>
										</tr>
										<tr>
											<td id="2191">Casertana</td>
											<td><img src="modules/fmsdb/img/flags/s/ITA.gif" alt="Italy">  ITA</td>
											<td>Serie C/C</td>
											<td>129K</td>
											<td>Professional</td>
											<td>12,000</td>
											<td><span class="label" style="background:#E00000"></span> <span class="label" style="background:#002060"></span></td>
											<td>1908</td>
											<td>25.6</td>
										</tr>
										<tr>
											<td id="2193">Catania</td>
											<td><img src="modules/fmsdb/img/flags/s/ITA.gif" alt="Italy">  ITA</td>
											<td>Serie C/C</td>
											<td>172K</td>
											<td>Professional</td>
											<td>20,016</td>
											<td><span class="label" style="background:#E00000"></span> <span class="label" style="background:#60C0F8"></span></td>
											<td>1946</td>
											<td>24.9</td>
										</tr>
										<tr>
											<td id="1119">Catanzaro</td>
											<td><img src="modules/fmsdb/img/flags/s/ITA.gif" alt="Italy">  ITA</td>
											<td>Serie C/C</td>
											<td>129K</td>
											<td>Professional</td>
											<td>14,650</td>
											<td><span class="label" style="background:#D02028"></span> <span class="label" style="background:#D02028"></span></td>
											<td>1929</td>
											<td>25.0</td>
										</tr>
										<tr>
											<td id="1120">Cesena</td>
											<td><img src="modules/fmsdb/img/flags/s/ITA.gif" alt="Italy">  ITA</td>
											<td>Serie B</td>
											<td>431K</td>
											<td>Professional</td>
											<td>23,860</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1940</td>
											<td>25.7</td>
										</tr>
										<tr>
											<td id="1122">Chievo</td>
											<td><img src="modules/fmsdb/img/flags/s/ITA.gif" alt="Italy">  ITA</td>
											<td>Serie A</td>
											<td>3M</td>
											<td>Professional</td>
											<td>39,211</td>
											<td><span class="label" style="background:#0078F8"></span> <span class="label" style="background:#F8F838"></span></td>
											<td>1929</td>
											<td>29.7</td>
										</tr>
										<tr>
											<td id="2195">Cittadella</td>
											<td><img src="modules/fmsdb/img/flags/s/ITA.gif" alt="Italy">  ITA</td>
											<td>Serie B</td>
											<td>431K</td>
											<td>Professional</td>
											<td>7,623</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#800020"></span></td>
											<td>1973</td>
											<td>25.4</td>
										</tr>
										<tr>
											<td id="1123">Como</td>
											<td><img src="modules/fmsdb/img/flags/s/ITA.gif" alt="Italy">  ITA</td>
											<td>Serie C/A</td>
											<td>258K</td>
											<td>Professional</td>
											<td>13,602</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#0050D0"></span></td>
											<td>1907</td>
											<td>23.7</td>
										</tr>
										<tr>
											<td id="1124">Cosenza</td>
											<td><img src="modules/fmsdb/img/flags/s/ITA.gif" alt="Italy">  ITA</td>
											<td>Serie C/C</td>
											<td>129K</td>
											<td>Professional</td>
											<td>24,209</td>
											<td><span class="label" style="background:#E00000"></span> <span class="label" style="background:#002060"></span></td>
											<td>1914</td>
											<td>24.7</td>
										</tr>
										<tr>
											<td id="1125">Cremonese</td>
											<td><img src="modules/fmsdb/img/flags/s/ITA.gif" alt="Italy">  ITA</td>
											<td>Serie C/A</td>
											<td>258K</td>
											<td>Professional</td>
											<td>20,034</td>
											<td><span class="label" style="background:#E00000"></span> <span class="label" style="background:#C0C0C0"></span></td>
											<td>1903</td>
											<td>27.0</td>
										</tr>
										<tr>
											<td id="707654">Crotone</td>
											<td><img src="modules/fmsdb/img/flags/s/ITA.gif" alt="Italy">  ITA</td>
											<td>Serie A</td>
											<td>1M</td>
											<td>Professional</td>
											<td>12,500</td>
											<td><span class="label" style="background:#002060"></span> <span class="label" style="background:#B00000"></span></td>
											<td>1923</td>
											<td>25.0</td>
										</tr>
										<tr>
											<td id="1126">Empoli</td>
											<td><img src="modules/fmsdb/img/flags/s/ITA.gif" alt="Italy">  ITA</td>
											<td>Serie A</td>
											<td>2M</td>
											<td>Professional</td>
											<td>16,284</td>
											<td><span class="label" style="background:#2068B0"></span> <span class="label" style="background:#2068B0"></span></td>
											<td>1920</td>
											<td>26.2</td>
										</tr>
										<tr>
											<td id="43036943">Entella</td>
											<td><img src="modules/fmsdb/img/flags/s/ITA.gif" alt="Italy">  ITA</td>
											<td>Serie B</td>
											<td>603K</td>
											<td>Professional</td>
											<td>5,535</td>
											<td><span class="label" style="background:#60C0F8"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1914</td>
											<td>25.6</td>
										</tr>
										<tr>
											<td id="2197">Fano</td>
											<td><img src="modules/fmsdb/img/flags/s/ITA.gif" alt="Italy">  ITA</td>
											<td>Serie C/B</td>
											<td>43K</td>
											<td>Professional</td>
											<td>8,800</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#800020"></span></td>
											<td>1906</td>
											<td>24.5</td>
										</tr>
										<tr>
											<td id="43058693">FeralpiSalo</td>
											<td><img src="modules/fmsdb/img/flags/s/ITA.gif" alt="Italy">  ITA</td>
											<td>Serie C/B</td>
											<td>172K</td>
											<td>Professional</td>
											<td>2,364</td>
											<td><span class="label" style="background:#4098F8"></span> <span class="label" style="background:#08C848"></span></td>
											<td>1963</td>
											<td>24.0</td>
										</tr>
										<tr>
											<td id="1128">Fidelis Andria</td>
											<td><img src="modules/fmsdb/img/flags/s/ITA.gif" alt="Italy">  ITA</td>
											<td>Serie C/C</td>
											<td>60K</td>
											<td>Professional</td>
											<td>15,000</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#0050D0"></span></td>
											<td>1920</td>
											<td>23.8</td>
										</tr>
										<tr>
											<td id="1129">Fiorentina</td>
											<td><img src="modules/fmsdb/img/flags/s/ITA.gif" alt="Italy">  ITA</td>
											<td>Serie A</td>
											<td>9M</td>
											<td>Professional</td>
											<td>46,366</td>
											<td><span class="label" style="background:#904090"></span> <span class="label" style="background:#604090"></span></td>
											<td>1926</td>
											<td>25.2</td>
										</tr>
										<tr>
											<td id="1131">Foggia</td>
											<td><img src="modules/fmsdb/img/flags/s/ITA.gif" alt="Italy">  ITA</td>
											<td>Serie C/C</td>
											<td>172K</td>
											<td>Professional</td>
											<td>25,085</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F00000"></span></td>
											<td>1920</td>
											<td>25.9</td>
										</tr>
										<tr>
											<td id="43058718">Fondi</td>
											<td><img src="modules/fmsdb/img/flags/s/ITA.gif" alt="Italy">  ITA</td>
											<td>Serie C/C</td>
											<td>9K</td>
											<td>Professional</td>
											<td>3,000</td>
											<td><span class="label" style="background:#E00000"></span> <span class="label" style="background:#002060"></span></td>
											<td>1922</td>
											<td>24.6</td>
										</tr>
										<tr>
											<td id="2198">Forli</td>
											<td><img src="modules/fmsdb/img/flags/s/ITA.gif" alt="Italy">  ITA</td>
											<td>Serie C/B</td>
											<td>43K</td>
											<td>Professional</td>
											<td>3,466</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#C80000"></span></td>
											<td>1919</td>
											<td>22.5</td>
										</tr>
										<tr>
											<td id="2199">Frosinone</td>
											<td><img src="modules/fmsdb/img/flags/s/ITA.gif" alt="Italy">  ITA</td>
											<td>Serie B</td>
											<td>1M</td>
											<td>Professional</td>
											<td>9,563</td>
											<td><span class="label" style="background:#0050D0"></span> <span class="label" style="background:#F8F838"></span></td>
											<td>1928</td>
											<td>26.3</td>
										</tr>
										<tr>
											<td id="1132">Genoa</td>
											<td><img src="modules/fmsdb/img/flags/s/ITA.gif" alt="Italy">  ITA</td>
											<td>Serie A</td>
											<td>4M</td>
											<td>Professional</td>
											<td>36,599</td>
											<td><span class="label" style="background:#103048"></span> <span class="label" style="background:#B82838"></span></td>
											<td>1893</td>
											<td>25.6</td>
										</tr>
										<tr>
											<td id="7983711">Giana Erminio</td>
											<td><img src="modules/fmsdb/img/flags/s/ITA.gif" alt="Italy">  ITA</td>
											<td>Serie C/A</td>
											<td>86K</td>
											<td>Professional</td>
											<td>3,766</td>
											<td><span class="label" style="background:#60C0F8"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1909</td>
											<td>24.5</td>
										</tr>
										<tr>
											<td id="108985">Gubbio</td>
											<td><img src="modules/fmsdb/img/flags/s/ITA.gif" alt="Italy">  ITA</td>
											<td>Serie C/B</td>
											<td>60K</td>
											<td>Professional</td>
											<td>4,939</td>
											<td><span class="label" style="background:#002060"></span> <span class="label" style="background:#E00000"></span></td>
											<td>1910</td>
											<td>24.1</td>
										</tr>
										<tr>
											<td id="1135">Inter</td>
											<td><img src="modules/fmsdb/img/flags/s/ITA.gif" alt="Italy">  ITA</td>
											<td>Serie A</td>
											<td>17M</td>
											<td>Professional</td>
											<td>80,018</td>
											<td><span class="label" style="background:#0078F8"></span> <span class="label" style="background:#000000"></span></td>
											<td>1908</td>
											<td>27.6</td>
										</tr>
										<tr>
											<td id="1138">Juve Stabia</td>
											<td><img src="modules/fmsdb/img/flags/s/ITA.gif" alt="Italy">  ITA</td>
											<td>Serie C/C</td>
											<td>129K</td>
											<td>Professional</td>
											<td>12,800</td>
											<td><span class="label" style="background:#F8F000"></span> <span class="label" style="background:#083078"></span></td>
											<td>1907</td>
											<td>25.5</td>
										</tr>
										<tr>
											<td id="1139">Juventus</td>
											<td><img src="modules/fmsdb/img/flags/s/ITA.gif" alt="Italy">  ITA</td>
											<td>Serie A</td>
											<td>21M</td>
											<td>Professional</td>
											<td>41,475</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
											<td>1897</td>
											<td>28.0</td>
										</tr>
										<tr>
											<td id="700060">Latina</td>
											<td><img src="modules/fmsdb/img/flags/s/ITA.gif" alt="Italy">  ITA</td>
											<td>Serie B</td>
											<td>345K</td>
											<td>Professional</td>
											<td>7,191</td>
											<td><span class="label" style="background:#0050D0"></span> <span class="label" style="background:#000000"></span></td>
											<td>1945</td>
											<td>24.9</td>
										</tr>
										<tr>
											<td id="1140">Lazio</td>
											<td><img src="modules/fmsdb/img/flags/s/ITA.gif" alt="Italy">  ITA</td>
											<td>Serie A</td>
											<td>6M</td>
											<td>Professional</td>
											<td>70,634</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#A0C8F0"></span></td>
											<td>1900</td>
											<td>24.9</td>
										</tr>
										<tr>
											<td id="1141">Lecce</td>
											<td><img src="modules/fmsdb/img/flags/s/ITA.gif" alt="Italy">  ITA</td>
											<td>Serie C/C</td>
											<td>258K</td>
											<td>Professional</td>
											<td>33,876</td>
											<td><span class="label" style="background:#E00000"></span> <span class="label" style="background:#F8F000"></span></td>
											<td>1908</td>
											<td>26.0</td>
										</tr>
										<tr>
											<td id="2206">Livorno</td>
											<td><img src="modules/fmsdb/img/flags/s/ITA.gif" alt="Italy">  ITA</td>
											<td>Serie C/A</td>
											<td>689K</td>
											<td>Professional</td>
											<td>19,238</td>
											<td><span class="label" style="background:#600000"></span> <span class="label" style="background:#782838"></span></td>
											<td>1915</td>
											<td>26.1</td>
										</tr>
										<tr>
											<td id="1144">Lucchese</td>
											<td><img src="modules/fmsdb/img/flags/s/ITA.gif" alt="Italy">  ITA</td>
											<td>Serie C/A</td>
											<td>86K</td>
											<td>Professional</td>
											<td>11,523</td>
											<td><span class="label" style="background:#E00000"></span> <span class="label" style="background:#000000"></span></td>
											<td>1905</td>
											<td>25.7</td>
										</tr>
										<tr>
											<td id="1145">Lumezzane</td>
											<td><img src="modules/fmsdb/img/flags/s/ITA.gif" alt="Italy">  ITA</td>
											<td>Serie C/B</td>
											<td>60K</td>
											<td>Professional</td>
											<td>4,004</td>
											<td><span class="label" style="background:#002060"></span> <span class="label" style="background:#F00000"></span></td>
											<td>1948</td>
											<td>22.6</td>
										</tr>
										<tr>
											<td id="43152207">Lupa Roma</td>
											<td><img src="modules/fmsdb/img/flags/s/ITA.gif" alt="Italy">  ITA</td>
											<td>Serie C/A</td>
											<td>60K</td>
											<td>Professional</td>
											<td>2,544</td>
											<td><span class="label" style="background:#B00000"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>2013</td>
											<td>22.4</td>
										</tr>
										<tr>
											<td id="2207">Maceratese</td>
											<td><img src="modules/fmsdb/img/flags/s/ITA.gif" alt="Italy">  ITA</td>
											<td>Serie C/B</td>
											<td>86K</td>
											<td>Professional</td>
											<td>5,850</td>
											<td><span class="label" style="background:#E00808"></span> <span class="label" style="background:#F0F0F0"></span></td>
											<td>1922</td>
											<td>23.4</td>
										</tr>
										<tr>
											<td id="700198">Mantova</td>
											<td><img src="modules/fmsdb/img/flags/s/ITA.gif" alt="Italy">  ITA</td>
											<td>Serie C/B</td>
											<td>43K</td>
											<td>Professional</td>
											<td>14,884</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
											<td>1911</td>
											<td>24.4</td>
										</tr>
										<tr>
											<td id="43065077">Matera</td>
											<td><img src="modules/fmsdb/img/flags/s/ITA.gif" alt="Italy">  ITA</td>
											<td>Serie C/C</td>
											<td>301K</td>
											<td>Professional</td>
											<td>7,490</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
											<td>1933</td>
											<td>25.6</td>
										</tr>
										<tr>
											<td id="832143">Melfi</td>
											<td><img src="modules/fmsdb/img/flags/s/ITA.gif" alt="Italy">  ITA</td>
											<td>Serie C/C</td>
											<td>43K</td>
											<td>Professional</td>
											<td>4,100</td>
											<td><span class="label" style="background:#00A030"></span> <span class="label" style="background:#F8F000"></span></td>
											<td>1929</td>
											<td>24.0</td>
										</tr>
										<tr>
											<td id="700206">Messina</td>
											<td><img src="modules/fmsdb/img/flags/s/ITA.gif" alt="Italy">  ITA</td>
											<td>Serie C/C</td>
											<td>129K</td>
											<td>Professional</td>
											<td>38,722</td>
											<td><span class="label" style="background:#C80000"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1900</td>
											<td>23.8</td>
										</tr>
										<tr>
											<td id="1147">Modena</td>
											<td><img src="modules/fmsdb/img/flags/s/ITA.gif" alt="Italy">  ITA</td>
											<td>Serie C/B</td>
											<td>258K</td>
											<td>Professional</td>
											<td>21,092</td>
											<td><span class="label" style="background:#002060"></span> <span class="label" style="background:#F8D000"></span></td>
											<td>1912</td>
											<td>23.3</td>
										</tr>
										<tr>
											<td id="7983734">Monopoli</td>
											<td><img src="modules/fmsdb/img/flags/s/ITA.gif" alt="Italy">  ITA</td>
											<td>Serie C/C</td>
											<td>43K</td>
											<td>Professional</td>
											<td>6,880</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
											<td>1958</td>
											<td>24.1</td>
										</tr>
										<tr>
											<td id="1150">Napoli</td>
											<td><img src="modules/fmsdb/img/flags/s/ITA.gif" alt="Italy">  ITA</td>
											<td>Serie A</td>
											<td>14M</td>
											<td>Professional</td>
											<td>60,240</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#4098D8"></span></td>
											<td>1926</td>
											<td>25.5</td>
										</tr>
										<tr>
											<td id="1153">Novara</td>
											<td><img src="modules/fmsdb/img/flags/s/ITA.gif" alt="Italy">  ITA</td>
											<td>Serie B</td>
											<td>345K</td>
											<td>Professional</td>
											<td>17,875</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#1068F8"></span></td>
											<td>1908</td>
											<td>24.5</td>
										</tr>
										<tr>
											<td id="2212">Olbia</td>
											<td><img src="modules/fmsdb/img/flags/s/ITA.gif" alt="Italy">  ITA</td>
											<td>Serie C/A</td>
											<td>52K</td>
											<td>Professional</td>
											<td>4,000</td>
											<td><span class="label" style="background:#C0C0C0"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1905</td>
											<td>21.7</td>
										</tr>
										<tr>
											<td id="1154">Padova</td>
											<td><img src="modules/fmsdb/img/flags/s/ITA.gif" alt="Italy">  ITA</td>
											<td>Serie C/B</td>
											<td>215K</td>
											<td>Professional</td>
											<td>32,420</td>
											<td><span class="label" style="background:#E00000"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1910</td>
											<td>26.3</td>
										</tr>
										<tr>
											<td id="831361">Paganese</td>
											<td><img src="modules/fmsdb/img/flags/s/ITA.gif" alt="Italy">  ITA</td>
											<td>Serie C/C</td>
											<td>78K</td>
											<td>Professional</td>
											<td>5,093</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#0050D0"></span></td>
											<td>1926</td>
											<td>24.3</td>
										</tr>
										<tr>
											<td id="2194">Palermo</td>
											<td><img src="modules/fmsdb/img/flags/s/ITA.gif" alt="Italy">  ITA</td>
											<td>Serie A</td>
											<td>2M</td>
											<td>Professional</td>
											<td>36,349</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#E8A0B8"></span></td>
											<td>1900</td>
											<td>25.7</td>
										</tr>
										<tr>
											<td id="1156">Parma</td>
											<td><img src="modules/fmsdb/img/flags/s/ITA.gif" alt="Italy">  ITA</td>
											<td>Serie C/B</td>
											<td>258K</td>
											<td>Professional</td>
											<td>28,000</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1913</td>
											<td>27.0</td>
										</tr>
										<tr>
											<td id="1157">Perugia</td>
											<td><img src="modules/fmsdb/img/flags/s/ITA.gif" alt="Italy">  ITA</td>
											<td>Serie B</td>
											<td>1M</td>
											<td>Professional</td>
											<td>23,625</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#E00000"></span></td>
											<td>1905</td>
											<td>25.0</td>
										</tr>
										<tr>
											<td id="1158">Pescara</td>
											<td><img src="modules/fmsdb/img/flags/s/ITA.gif" alt="Italy">  ITA</td>
											<td>Serie A</td>
											<td>2M</td>
											<td>Professional</td>
											<td>20,486</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
											<td>1936</td>
											<td>25.6</td>
										</tr>
										<tr>
											<td id="1159">Piacenza</td>
											<td><img src="modules/fmsdb/img/flags/s/ITA.gif" alt="Italy">  ITA</td>
											<td>Serie C/A</td>
											<td>69K</td>
											<td>Professional</td>
											<td>21,668</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#E00808"></span></td>
											<td>1919</td>
											<td>24.0</td>
										</tr>
										<tr>
											<td id="2215">Pisa</td>
											<td><img src="modules/fmsdb/img/flags/s/ITA.gif" alt="Italy">  ITA</td>
											<td>Serie B</td>
											<td>258K</td>
											<td>Professional</td>
											<td>17,000</td>
											<td><span class="label" style="background:#0078F8"></span> <span class="label" style="background:#000000"></span></td>
											<td>1909</td>
											<td>25.7</td>
										</tr>
										<tr>
											<td id="1160">Pistoiese</td>
											<td><img src="modules/fmsdb/img/flags/s/ITA.gif" alt="Italy">  ITA</td>
											<td>Serie C/A</td>
											<td>86K</td>
											<td>Professional</td>
											<td>13,195</td>
											<td><span class="label" style="background:#002080"></span> <span class="label" style="background:#F06000"></span></td>
											<td>1921</td>
											<td>23.2</td>
										</tr>
										<tr>
											<td id="2216">Pontedera</td>
											<td><img src="modules/fmsdb/img/flags/s/ITA.gif" alt="Italy">  ITA</td>
											<td>Serie C/A</td>
											<td>129K</td>
											<td>Professional</td>
											<td>4,014</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#800020"></span></td>
											<td>1912</td>
											<td>21.2</td>
										</tr>
										<tr>
											<td id="831037">Pordenone</td>
											<td><img src="modules/fmsdb/img/flags/s/ITA.gif" alt="Italy">  ITA</td>
											<td>Serie C/B</td>
											<td>129K</td>
											<td>Professional</td>
											<td>2,582</td>
											<td><span class="label" style="background:#08C848"></span> <span class="label" style="background:#000000"></span></td>
											<td>1920</td>
											<td>25.5</td>
										</tr>
										<tr>
											<td id="1161">Prato</td>
											<td><img src="modules/fmsdb/img/flags/s/ITA.gif" alt="Italy">  ITA</td>
											<td>Serie C/A</td>
											<td>78K</td>
											<td>Professional</td>
											<td>4,084</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#2858B0"></span></td>
											<td>1908</td>
											<td>23.3</td>
										</tr>
										<tr>
											<td id="43076678">Pro Piacenza</td>
											<td><img src="modules/fmsdb/img/flags/s/ITA.gif" alt="Italy">  ITA</td>
											<td>Serie C/A</td>
											<td>60K</td>
											<td>Professional</td>
											<td>21,668</td>
											<td><span class="label" style="background:#F00000"></span> <span class="label" style="background:#000000"></span></td>
											<td>1927</td>
											<td>23.7</td>
										</tr>
										<tr>
											<td id="2218">Pro Vercelli</td>
											<td><img src="modules/fmsdb/img/flags/s/ITA.gif" alt="Italy">  ITA</td>
											<td>Serie B</td>
											<td>517K</td>
											<td>Professional</td>
											<td>5,500</td>
											<td><span class="label" style="background:#D8B028"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1892</td>
											<td>23.8</td>
										</tr>
										<tr>
											<td id="43315316">Racing Roma</td>
											<td><img src="modules/fmsdb/img/flags/s/ITA.gif" alt="Italy">  ITA</td>
											<td>Serie C/A</td>
											<td>52K</td>
											<td>Professional</td>
											<td>2,500</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F8F000"></span></td>
											<td>2016</td>
											<td>21.3</td>
										</tr>
										<tr>
											<td id="1164">Reggiana</td>
											<td><img src="modules/fmsdb/img/flags/s/ITA.gif" alt="Italy">  ITA</td>
											<td>Serie C/B</td>
											<td>215K</td>
											<td>Professional</td>
											<td>21,584</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#A00000"></span></td>
											<td>1919</td>
											<td>24.5</td>
										</tr>
										<tr>
											<td id="1165">Reggina</td>
											<td><img src="modules/fmsdb/img/flags/s/ITA.gif" alt="Italy">  ITA</td>
											<td>Serie C/C</td>
											<td>78K</td>
											<td>Professional</td>
											<td>27,543</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#800020"></span></td>
											<td>1914</td>
											<td>22.6</td>
										</tr>
										<tr>
											<td id="1413274">Renate</td>
											<td><img src="modules/fmsdb/img/flags/s/ITA.gif" alt="Italy">  ITA</td>
											<td>Serie C/A</td>
											<td>60K</td>
											<td>Professional</td>
											<td>2,500</td>
											<td><span class="label" style="background:#0050D0"></span> <span class="label" style="background:#000000"></span></td>
											<td>1947</td>
											<td>24.6</td>
										</tr>
										<tr>
											<td id="1100">Roma</td>
											<td><img src="modules/fmsdb/img/flags/s/ITA.gif" alt="Italy">  ITA</td>
											<td>Serie A</td>
											<td>9M</td>
											<td>Professional</td>
											<td>70,634</td>
											<td><span class="label" style="background:#581020"></span> <span class="label" style="background:#581020"></span></td>
											<td>1927</td>
											<td>25.8</td>
										</tr>
										<tr>
											<td id="1166">Salernitana</td>
											<td><img src="modules/fmsdb/img/flags/s/ITA.gif" alt="Italy">  ITA</td>
											<td>Serie B</td>
											<td>689K</td>
											<td>Professional</td>
											<td>31,300</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#680028"></span></td>
											<td>1919</td>
											<td>25.9</td>
										</tr>
										<tr>
											<td id="700036">Sambenedettese</td>
											<td><img src="modules/fmsdb/img/flags/s/ITA.gif" alt="Italy">  ITA</td>
											<td>Serie C/B</td>
											<td>129K</td>
											<td>Professional</td>
											<td>13,737</td>
											<td><span class="label" style="background:#283850"></span> <span class="label" style="background:#C82030"></span></td>
											<td>1923</td>
											<td>24.3</td>
										</tr>
										<tr>
											<td id="1167">Sampdoria</td>
											<td><img src="modules/fmsdb/img/flags/s/ITA.gif" alt="Italy">  ITA</td>
											<td>Serie A</td>
											<td>4M</td>
											<td>Professional</td>
											<td>36,599</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#2068B0"></span></td>
											<td>1946</td>
											<td>26.0</td>
										</tr>
										<tr>
											<td id="6100016">Santarcangelo</td>
											<td><img src="modules/fmsdb/img/flags/s/ITA.gif" alt="Italy">  ITA</td>
											<td>Serie C/B</td>
											<td>43K</td>
											<td>Professional</td>
											<td>2,610</td>
											<td><span class="label" style="background:#F8F000"></span> <span class="label" style="background:#0050D0"></span></td>
											<td>1926</td>
											<td>24.0</td>
										</tr>
										<tr>
											<td id="3800256">Sassuolo</td>
											<td><img src="modules/fmsdb/img/flags/s/ITA.gif" alt="Italy">  ITA</td>
											<td>Serie A</td>
											<td>7M</td>
											<td>Professional</td>
											<td>21,584</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#187858"></span></td>
											<td>1920</td>
											<td>26.3</td>
										</tr>
										<tr>
											<td id="1170">Siena</td>
											<td><img src="modules/fmsdb/img/flags/s/ITA.gif" alt="Italy">  ITA</td>
											<td>Serie C/A</td>
											<td>129K</td>
											<td>Professional</td>
											<td>15,373</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#000000"></span></td>
											<td>1904</td>
											<td>24.5</td>
										</tr>
										<tr>
											<td id="3804379">Siracusa</td>
											<td><img src="modules/fmsdb/img/flags/s/ITA.gif" alt="Italy">  ITA</td>
											<td>Serie C/C</td>
											<td>26K</td>
											<td>Professional</td>
											<td>6,870</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#0050D0"></span></td>
											<td>1924</td>
											<td>25.5</td>
										</tr>
										<tr>
											<td id="2220">Spal</td>
											<td><img src="modules/fmsdb/img/flags/s/ITA.gif" alt="Italy">  ITA</td>
											<td>Serie B</td>
											<td>431K</td>
											<td>Professional</td>
											<td>19,000</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
											<td>1907</td>
											<td>25.5</td>
										</tr>
										<tr>
											<td id="1173">Spezia</td>
											<td><img src="modules/fmsdb/img/flags/s/ITA.gif" alt="Italy">  ITA</td>
											<td>Serie B</td>
											<td>1M</td>
											<td>Professional</td>
											<td>10,336</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1906</td>
											<td>24.9</td>
										</tr>
										<tr>
											<td id="2224">Taranto</td>
											<td><img src="modules/fmsdb/img/flags/s/ITA.gif" alt="Italy">  ITA</td>
											<td>Serie C/C</td>
											<td>301K</td>
											<td>Professional</td>
											<td>28,384</td>
											<td><span class="label" style="background:#E00000"></span> <span class="label" style="background:#002060"></span></td>
											<td>1906</td>
											<td>24.0</td>
										</tr>
										<tr>
											<td id="2226">Teramo</td>
											<td><img src="modules/fmsdb/img/flags/s/ITA.gif" alt="Italy">  ITA</td>
											<td>Serie C/B</td>
											<td>172K</td>
											<td>Professional</td>
											<td>13,000</td>
											<td><span class="label" style="background:#E00000"></span> <span class="label" style="background:#E00000"></span></td>
											<td>1913</td>
											<td>23.8</td>
										</tr>
										<tr>
											<td id="2227">Ternana</td>
											<td><img src="modules/fmsdb/img/flags/s/ITA.gif" alt="Italy">  ITA</td>
											<td>Serie B</td>
											<td>345K</td>
											<td>Professional</td>
											<td>17,460</td>
											<td><span class="label" style="background:#009830"></span> <span class="label" style="background:#C80030"></span></td>
											<td>1925</td>
											<td>23.9</td>
										</tr>
										<tr>
											<td id="1174">Torino</td>
											<td><img src="modules/fmsdb/img/flags/s/ITA.gif" alt="Italy">  ITA</td>
											<td>Serie A</td>
											<td>4M</td>
											<td>Professional</td>
											<td>27,958</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#481018"></span></td>
											<td>1906</td>
											<td>26.5</td>
										</tr>
										<tr>
											<td id="1175">Trapani</td>
											<td><img src="modules/fmsdb/img/flags/s/ITA.gif" alt="Italy">  ITA</td>
											<td>Serie B</td>
											<td>431K</td>
											<td>Professional</td>
											<td>7,787</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#800020"></span></td>
											<td>1905</td>
											<td>26.2</td>
										</tr>
										<tr>
											<td id="43076615">Tuttocuoio</td>
											<td><img src="modules/fmsdb/img/flags/s/ITA.gif" alt="Italy">  ITA</td>
											<td>Serie C/A</td>
											<td>86K</td>
											<td>Professional</td>
											<td>4,014</td>
											<td><span class="label" style="background:#008030"></span> <span class="label" style="background:#000000"></span></td>
											<td>1957</td>
											<td>21.1</td>
										</tr>
										<tr>
											<td id="1178">Udinese</td>
											<td><img src="modules/fmsdb/img/flags/s/ITA.gif" alt="Italy">  ITA</td>
											<td>Serie A</td>
											<td>3M</td>
											<td>Professional</td>
											<td>25,000</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1896</td>
											<td>25.4</td>
										</tr>
										<tr>
											<td id="1179">Venezia</td>
											<td><img src="modules/fmsdb/img/flags/s/ITA.gif" alt="Italy">  ITA</td>
											<td>Serie C/B</td>
											<td>689K</td>
											<td>Professional</td>
											<td>7,450</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#000000"></span></td>
											<td>1907</td>
											<td>26.6</td>
										</tr>
										<tr>
											<td id="2201">Verona</td>
											<td><img src="modules/fmsdb/img/flags/s/ITA.gif" alt="Italy">  ITA</td>
											<td>Serie B</td>
											<td>3M</td>
											<td>Professional</td>
											<td>39,211</td>
											<td><span class="label" style="background:#081030"></span> <span class="label" style="background:#F8A820"></span></td>
											<td>1903</td>
											<td>26.3</td>
										</tr>
										<tr>
											<td id="832154">Vibonese</td>
											<td><img src="modules/fmsdb/img/flags/s/ITA.gif" alt="Italy">  ITA</td>
											<td>Serie C/C</td>
											<td>43K</td>
											<td>Professional</td>
											<td>4,500</td>
											<td><span class="label" style="background:#E00000"></span> <span class="label" style="background:#002060"></span></td>
											<td>1928</td>
											<td>23.7</td>
										</tr>
										<tr>
											<td id="1181">Vicenza</td>
											<td><img src="modules/fmsdb/img/flags/s/ITA.gif" alt="Italy">  ITA</td>
											<td>Serie B</td>
											<td>431K</td>
											<td>Professional</td>
											<td>12,124</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#E00000"></span></td>
											<td>1902</td>
											<td>24.8</td>
										</tr>
										<tr>
											<td id="136423">Ansan Mugunghwa</td>
											<td><img src="modules/fmsdb/img/flags/s/KOR.gif" alt="South Korea">  KOR</td>
											<td>K LEAGUE Challenge</td>
											<td>23K</td>
											<td>Professional</td>
											<td>35,008</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#008040"></span></td>
											<td>1996</td>
											<td>27.0</td>
										</tr>
										<tr>
											<td id="66029603">Anyang</td>
											<td><img src="modules/fmsdb/img/flags/s/KOR.gif" alt="South Korea">  KOR</td>
											<td>K LEAGUE Challenge</td>
											<td>170K</td>
											<td>Professional</td>
											<td>17,095</td>
											<td><span class="label" style="background:#501080"></span> <span class="label" style="background:#501080"></span></td>
											<td>2013</td>
											<td>26.2</td>
										</tr>
										<tr>
											<td id="66010556">Bucheon 1995</td>
											<td><img src="modules/fmsdb/img/flags/s/KOR.gif" alt="South Korea">  KOR</td>
											<td>K LEAGUE Challenge</td>
											<td>124K</td>
											<td>Professional</td>
											<td>34,545</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#E83810"></span></td>
											<td>2007</td>
											<td>26.1</td>
										</tr>
										<tr>
											<td id="130775">Busan</td>
											<td><img src="modules/fmsdb/img/flags/s/KOR.gif" alt="South Korea">  KOR</td>
											<td>K LEAGUE Challenge</td>
											<td>700K</td>
											<td>Professional</td>
											<td>55,982</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#B82020"></span></td>
											<td>1983</td>
											<td>25.8</td>
										</tr>
										<tr>
											<td id="136420">Chungju Hummel</td>
											<td><img src="modules/fmsdb/img/flags/s/KOR.gif" alt="South Korea">  KOR</td>
											<td>K LEAGUE Challenge</td>
											<td>50K</td>
											<td>Professional</td>
											<td>15,000</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F8C808"></span></td>
											<td>1999</td>
											<td>25.0</td>
										</tr>
										<tr>
											<td id="5705626">Daegu</td>
											<td><img src="modules/fmsdb/img/flags/s/KOR.gif" alt="South Korea">  KOR</td>
											<td>K LEAGUE Challenge</td>
											<td>180K</td>
											<td>Professional</td>
											<td>66,422</td>
											<td><span class="label" style="background:#001040"></span> <span class="label" style="background:#20B0F0"></span></td>
											<td>2002</td>
											<td>25.8</td>
										</tr>
										<tr>
											<td id="130774">Daejeon</td>
											<td><img src="modules/fmsdb/img/flags/s/KOR.gif" alt="South Korea">  KOR</td>
											<td>K LEAGUE Challenge</td>
											<td>200K</td>
											<td>Professional</td>
											<td>41,000</td>
											<td><span class="label" style="background:#B81000"></span> <span class="label" style="background:#B81000"></span></td>
											<td>1997</td>
											<td>24.5</td>
										</tr>
										<tr>
											<td id="66006663">Gangwon</td>
											<td><img src="modules/fmsdb/img/flags/s/KOR.gif" alt="South Korea">  KOR</td>
											<td>K LEAGUE Challenge</td>
											<td>160K</td>
											<td>Professional</td>
											<td>21,274</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F84000"></span></td>
											<td>2008</td>
											<td>27.0</td>
										</tr>
										<tr>
											<td id="136417">Goyang Zaicro FC</td>
											<td><img src="modules/fmsdb/img/flags/s/KOR.gif" alt="South Korea">  KOR</td>
											<td>K LEAGUE Challenge</td>
											<td>30K</td>
											<td>Professional</td>
											<td>41,311</td>
											<td><span class="label" style="background:#080058"></span> <span class="label" style="background:#C80008"></span></td>
											<td>1999</td>
											<td>25.3</td>
										</tr>
										<tr>
											<td id="66011708">Gwangju</td>
											<td><img src="modules/fmsdb/img/flags/s/KOR.gif" alt="South Korea">  KOR</td>
											<td>K LEAGUE Classic</td>
											<td>300K</td>
											<td>Professional</td>
											<td>40,245</td>
											<td><span class="label" style="background:#C82008"></span> <span class="label" style="background:#F0E038"></span></td>
											<td>2011</td>
											<td>24.0</td>
										</tr>
										<tr>
											<td id="5710867">Gyeongnam</td>
											<td><img src="modules/fmsdb/img/flags/s/KOR.gif" alt="South Korea">  KOR</td>
											<td>K LEAGUE Challenge</td>
											<td>200K</td>
											<td>Professional</td>
											<td>15,071</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#D02020"></span></td>
											<td>2006</td>
											<td>27.0</td>
										</tr>
										<tr>
											<td id="5709008">Incheon</td>
											<td><img src="modules/fmsdb/img/flags/s/KOR.gif" alt="South Korea">  KOR</td>
											<td>K LEAGUE Classic</td>
											<td>300K</td>
											<td>Professional</td>
											<td>20,376</td>
											<td><span class="label" style="background:#002060"></span> <span class="label" style="background:#000000"></span></td>
											<td>2003</td>
											<td>25.9</td>
										</tr>
										<tr>
											<td id="106817">Jeju</td>
											<td><img src="modules/fmsdb/img/flags/s/KOR.gif" alt="South Korea">  KOR</td>
											<td>K LEAGUE Classic</td>
											<td>2M</td>
											<td>Professional</td>
											<td>35,657</td>
											<td><span class="label" style="background:#000040"></span> <span class="label" style="background:#F88000"></span></td>
											<td>1982</td>
											<td>26.6</td>
										</tr>
										<tr>
											<td id="130776">Jeonbuk</td>
											<td><img src="modules/fmsdb/img/flags/s/KOR.gif" alt="South Korea">  KOR</td>
											<td>K LEAGUE Classic</td>
											<td>5M</td>
											<td>Professional</td>
											<td>42,477</td>
											<td><span class="label" style="background:#081830"></span> <span class="label" style="background:#50D848"></span></td>
											<td>1994</td>
											<td>26.9</td>
										</tr>
										<tr>
											<td id="106812">Jeonnam</td>
											<td><img src="modules/fmsdb/img/flags/s/KOR.gif" alt="South Korea">  KOR</td>
											<td>K LEAGUE Classic</td>
											<td>1M</td>
											<td>Professional</td>
											<td>14,920</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F8F000"></span></td>
											<td>1994</td>
											<td>26.2</td>
										</tr>
										<tr>
											<td id="106818">Pohang</td>
											<td><img src="modules/fmsdb/img/flags/s/KOR.gif" alt="South Korea">  KOR</td>
											<td>K LEAGUE Classic</td>
											<td>2M</td>
											<td>Professional</td>
											<td>17,443</td>
											<td><span class="label" style="background:#D82020"></span> <span class="label" style="background:#000000"></span></td>
											<td>1973</td>
											<td>25.5</td>
										</tr>
										<tr>
											<td id="106809">Sangju</td>
											<td><img src="modules/fmsdb/img/flags/s/KOR.gif" alt="South Korea">  KOR</td>
											<td>K LEAGUE Classic</td>
											<td>144K</td>
											<td>Professional</td>
											<td>15,000</td>
											<td><span class="label" style="background:#C80000"></span> <span class="label" style="background:#C80000"></span></td>
											<td>2011</td>
											<td>26.3</td>
										</tr>
										<tr>
											<td id="200373">Seongnam</td>
											<td><img src="modules/fmsdb/img/flags/s/KOR.gif" alt="South Korea">  KOR</td>
											<td>K LEAGUE Classic</td>
											<td>9M</td>
											<td>Professional</td>
											<td>16,404</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
											<td>1989</td>
											<td>26.3</td>
										</tr>
										<tr>
											<td id="130777">Seoul</td>
											<td><img src="modules/fmsdb/img/flags/s/KOR.gif" alt="South Korea">  KOR</td>
											<td>K LEAGUE Classic</td>
											<td>4M</td>
											<td>Professional</td>
											<td>66,806</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F00808"></span></td>
											<td>1983</td>
											<td>26.0</td>
										</tr>
										<tr>
											<td id="66034891">Seoul E-Land</td>
											<td><img src="modules/fmsdb/img/flags/s/KOR.gif" alt="South Korea">  KOR</td>
											<td>K LEAGUE Challenge</td>
											<td>170K</td>
											<td>Semi-Professional</td>
											<td>69,841</td>
											<td><span class="label" style="background:#B0C8B0"></span> <span class="label" style="background:#383840"></span></td>
											<td>2014</td>
											<td>26.9</td>
										</tr>
										<tr>
											<td id="106813">Suwon</td>
											<td><img src="modules/fmsdb/img/flags/s/KOR.gif" alt="South Korea">  KOR</td>
											<td>K LEAGUE Classic</td>
											<td>900K</td>
											<td>Professional</td>
											<td>43,959</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#0030A0"></span></td>
											<td>1995</td>
											<td>26.5</td>
										</tr>
										<tr>
											<td id="5707530">Suwon FC</td>
											<td><img src="modules/fmsdb/img/flags/s/KOR.gif" alt="South Korea">  KOR</td>
											<td>K LEAGUE Classic</td>
											<td>210K</td>
											<td>Professional</td>
											<td>24,670</td>
											<td><span class="label" style="background:#082088"></span> <span class="label" style="background:#F00008"></span></td>
											<td>2003</td>
											<td>26.1</td>
										</tr>
										<tr>
											<td id="106808">Ulsan</td>
											<td><img src="modules/fmsdb/img/flags/s/KOR.gif" alt="South Korea">  KOR</td>
											<td>K LEAGUE Classic</td>
											<td>2M</td>
											<td>Professional</td>
											<td>44,055</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#002080"></span></td>
											<td>1983</td>
											<td>26.2</td>
										</tr>
										<tr>
											<td id="102850">Al-Ahli (KSA)</td>
											<td><img src="modules/fmsdb/img/flags/s/KSA.gif" alt="Saudi Arabia">  KSA</td>
											<td>Pro League</td>
											<td>6M</td>
											<td>Professional</td>
											<td>62,241</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#00A030"></span></td>
											<td>1937</td>
											<td>25.7</td>
										</tr>
										<tr>
											<td id="102852">Al-Hilal (KSA)</td>
											<td><img src="modules/fmsdb/img/flags/s/KSA.gif" alt="Saudi Arabia">  KSA</td>
											<td>Pro League</td>
											<td>7M</td>
											<td>Professional</td>
											<td>67,000</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#0030A0"></span></td>
											<td>1957</td>
											<td>25.9</td>
										</tr>
										<tr>
											<td id="106063">Al-Ittihad (KSA)</td>
											<td><img src="modules/fmsdb/img/flags/s/KSA.gif" alt="Saudi Arabia">  KSA</td>
											<td>Pro League</td>
											<td>7M</td>
											<td>Professional</td>
											<td>62,241</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F8F000"></span></td>
											<td>1927</td>
											<td>24.6</td>
										</tr>
										<tr>
											<td id="102862">Al-Nassr (KSA)</td>
											<td><img src="modules/fmsdb/img/flags/s/KSA.gif" alt="Saudi Arabia">  KSA</td>
											<td>Pro League</td>
											<td>6M</td>
											<td>Professional</td>
											<td>67,000</td>
											<td><span class="label" style="background:#0030A0"></span> <span class="label" style="background:#F8F000"></span></td>
											<td>1955</td>
											<td>25.8</td>
										</tr>
										<tr>
											<td id="1535">Al-Shabab (KSA)</td>
											<td><img src="modules/fmsdb/img/flags/s/KSA.gif" alt="Saudi Arabia">  KSA</td>
											<td>Pro League</td>
											<td>5M</td>
											<td>Professional</td>
											<td>67,000</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#000000"></span></td>
											<td>1948</td>
											<td>25.3</td>
										</tr>
										<tr>
											<td id="51008744">Alebrijes</td>
											<td><img src="modules/fmsdb/img/flags/s/MEX.gif" alt="Mexico">  MEX</td>
											<td>Promotion League</td>
											<td>154K</td>
											<td>Professional</td>
											<td>15,200</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F84008"></span></td>
											<td>2013</td>
											<td>25.0</td>
										</tr>
										<tr>
											<td id="1253">America (MEX)</td>
											<td><img src="modules/fmsdb/img/flags/s/MEX.gif" alt="Mexico">  MEX</td>
											<td>First Division</td>
											<td>6M</td>
											<td>Professional</td>
											<td>87,000</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#E8E060"></span></td>
											<td>1916</td>
											<td>25.6</td>
										</tr>
										<tr>
											<td id="102356">Atlante</td>
											<td><img src="modules/fmsdb/img/flags/s/MEX.gif" alt="Mexico">  MEX</td>
											<td>Promotion League</td>
											<td>77K</td>
											<td>Professional</td>
											<td>20,000</td>
											<td><span class="label" style="background:#880828"></span> <span class="label" style="background:#003068"></span></td>
											<td>1916</td>
											<td>25.6</td>
										</tr>
										<tr>
											<td id="106027">Atlas</td>
											<td><img src="modules/fmsdb/img/flags/s/MEX.gif" alt="Mexico">  MEX</td>
											<td>First Division</td>
											<td>3M</td>
											<td>Professional</td>
											<td>56,713</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#E00000"></span></td>
											<td>1916</td>
											<td>26.2</td>
										</tr>
										<tr>
											<td id="51008732">Celaya</td>
											<td><img src="modules/fmsdb/img/flags/s/MEX.gif" alt="Mexico">  MEX</td>
											<td>Promotion League</td>
											<td>154K</td>
											<td>Professional</td>
											<td>23,300</td>
											<td><span class="label" style="background:#0030A0"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1954</td>
											<td>27.8</td>
										</tr>
										<tr>
											<td id="1255">Chivas</td>
											<td><img src="modules/fmsdb/img/flags/s/MEX.gif" alt="Mexico">  MEX</td>
											<td>First Division</td>
											<td>5M</td>
											<td>Professional</td>
											<td>49,850</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#E00000"></span></td>
											<td>1906</td>
											<td>24.4</td>
										</tr>
										<tr>
											<td id="51039162">Cimarrones</td>
											<td><img src="modules/fmsdb/img/flags/s/MEX.gif" alt="Mexico">  MEX</td>
											<td>Promotion League</td>
											<td>192K</td>
											<td>Professional</td>
											<td>21,175</td>
											<td><span class="label" style="background:#002060"></span> <span class="label" style="background:#E00000"></span></td>
											<td>2013</td>
											<td>24.6</td>
										</tr>
										<tr>
											<td id="136013">Correcaminos</td>
											<td><img src="modules/fmsdb/img/flags/s/MEX.gif" alt="Mexico">  MEX</td>
											<td>Promotion League</td>
											<td>77K</td>
											<td>Professional</td>
											<td>18,000</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#F87000"></span></td>
											<td>1980</td>
											<td>28.2</td>
										</tr>
										<tr>
											<td id="1254">Cruz Azul</td>
											<td><img src="modules/fmsdb/img/flags/s/MEX.gif" alt="Mexico">  MEX</td>
											<td>First Division</td>
											<td>5M</td>
											<td>Professional</td>
											<td>35,161</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#0030A0"></span></td>
											<td>1927</td>
											<td>26.8</td>
										</tr>
										<tr>
											<td id="5666338">Dorados</td>
											<td><img src="modules/fmsdb/img/flags/s/MEX.gif" alt="Mexico">  MEX</td>
											<td>Promotion League</td>
											<td>1M</td>
											<td>Professional</td>
											<td>23,333</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#D8B028"></span></td>
											<td>2003</td>
											<td>26.6</td>
										</tr>
										<tr>
											<td id="51051219">FC Juarez</td>
											<td><img src="modules/fmsdb/img/flags/s/MEX.gif" alt="Mexico">  MEX</td>
											<td>Promotion League</td>
											<td>768K</td>
											<td>Professional</td>
											<td>22,300</td>
											<td><span class="label" style="background:#E00000"></span> <span class="label" style="background:#A0F070"></span></td>
											<td>2015</td>
											<td>27.4</td>
										</tr>
										<tr>
											<td id="104388">Jaguares</td>
											<td><img src="modules/fmsdb/img/flags/s/MEX.gif" alt="Mexico">  MEX</td>
											<td>First Division</td>
											<td>1M</td>
											<td>Professional</td>
											<td>25,222</td>
											<td><span class="label" style="background:#00A840"></span> <span class="label" style="background:#08C848"></span></td>
											<td>2002</td>
											<td>26.3</td>
										</tr>
										<tr>
											<td id="1259">Leon</td>
											<td><img src="modules/fmsdb/img/flags/s/MEX.gif" alt="Mexico">  MEX</td>
											<td>First Division</td>
											<td>3M</td>
											<td>Professional</td>
											<td>33,800</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#40B868"></span></td>
											<td>1944</td>
											<td>27.6</td>
										</tr>
										<tr>
											<td id="5666503">Lobos BUAP</td>
											<td><img src="modules/fmsdb/img/flags/s/MEX.gif" alt="Mexico">  MEX</td>
											<td>Promotion League</td>
											<td>115K</td>
											<td>Professional</td>
											<td>21,750</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1966</td>
											<td>26.4</td>
										</tr>
										<tr>
											<td id="51008740">Loros Colima</td>
											<td><img src="modules/fmsdb/img/flags/s/MEX.gif" alt="Mexico">  MEX</td>
											<td>Promotion League</td>
											<td>4K</td>
											<td>Professional</td>
											<td>14,000</td>
											<td><span class="label" style="background:#108830"></span> <span class="label" style="background:#F8D000"></span></td>
											<td>1981</td>
											<td>24.2</td>
										</tr>
										<tr>
											<td id="51045865">Mineros</td>
											<td><img src="modules/fmsdb/img/flags/s/MEX.gif" alt="Mexico">  MEX</td>
											<td>Promotion League</td>
											<td>192K</td>
											<td>Professional</td>
											<td>18,000</td>
											<td><span class="label" style="background:#C80000"></span> <span class="label" style="background:#E00000"></span></td>
											<td>2014</td>
											<td>25.9</td>
										</tr>
										<tr>
											<td id="1257">Monterrey</td>
											<td><img src="modules/fmsdb/img/flags/s/MEX.gif" alt="Mexico">  MEX</td>
											<td>First Division</td>
											<td>6M</td>
											<td>Professional</td>
											<td>52,000</td>
											<td><span class="label" style="background:#002060"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1945</td>
											<td>26.4</td>
										</tr>
										<tr>
											<td id="106028">Morelia</td>
											<td><img src="modules/fmsdb/img/flags/s/MEX.gif" alt="Mexico">  MEX</td>
											<td>First Division</td>
											<td>2M</td>
											<td>Professional</td>
											<td>41,056</td>
											<td><span class="label" style="background:#E00000"></span> <span class="label" style="background:#F8D000"></span></td>
											<td>1924</td>
											<td>27.4</td>
										</tr>
										<tr>
											<td id="51008738">Murcielagos</td>
											<td><img src="modules/fmsdb/img/flags/s/MEX.gif" alt="Mexico">  MEX</td>
											<td>Promotion League</td>
											<td>384K</td>
											<td>Professional</td>
											<td>15,000</td>
											<td><span class="label" style="background:#F8F000"></span> <span class="label" style="background:#000000"></span></td>
											<td>2008</td>
											<td>25.7</td>
										</tr>
										<tr>
											<td id="1258">Necaxa</td>
											<td><img src="modules/fmsdb/img/flags/s/MEX.gif" alt="Mexico">  MEX</td>
											<td>First Division</td>
											<td>231K</td>
											<td>Professional</td>
											<td>25,000</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#E00000"></span></td>
											<td>1923</td>
											<td>28.4</td>
										</tr>
										<tr>
											<td id="116204">Pachuca</td>
											<td><img src="modules/fmsdb/img/flags/s/MEX.gif" alt="Mexico">  MEX</td>
											<td>First Division</td>
											<td>4M</td>
											<td>Professional</td>
											<td>30,024</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#002060"></span></td>
											<td>1901</td>
											<td>23.8</td>
										</tr>
										<tr>
											<td id="5661060">Potros UAEM</td>
											<td><img src="modules/fmsdb/img/flags/s/MEX.gif" alt="Mexico">  MEX</td>
											<td>Promotion League</td>
											<td>4K</td>
											<td>Professional</td>
											<td>35,000</td>
											<td><span class="label" style="background:#006830"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1990</td>
											<td>26.2</td>
										</tr>
										<tr>
											<td id="136007">Puebla</td>
											<td><img src="modules/fmsdb/img/flags/s/MEX.gif" alt="Mexico">  MEX</td>
											<td>First Division</td>
											<td>768K</td>
											<td>Professional</td>
											<td>50,754</td>
											<td><span class="label" style="background:#002080"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1944</td>
											<td>28.9</td>
										</tr>
										<tr>
											<td id="1260">Pumas</td>
											<td><img src="modules/fmsdb/img/flags/s/MEX.gif" alt="Mexico">  MEX</td>
											<td>First Division</td>
											<td>2M</td>
											<td>Professional</td>
											<td>68,954</td>
											<td><span class="label" style="background:#002060"></span> <span class="label" style="background:#D8B028"></span></td>
											<td>1954</td>
											<td>25.8</td>
										</tr>
										<tr>
											<td id="136014">Queretaro</td>
											<td><img src="modules/fmsdb/img/flags/s/MEX.gif" alt="Mexico">  MEX</td>
											<td>First Division</td>
											<td>3M</td>
											<td>Professional</td>
											<td>38,575</td>
											<td><span class="label" style="background:#0030A0"></span> <span class="label" style="background:#000000"></span></td>
											<td>1950</td>
											<td>25.8</td>
										</tr>
										<tr>
											<td id="106029">Santos Laguna</td>
											<td><img src="modules/fmsdb/img/flags/s/MEX.gif" alt="Mexico">  MEX</td>
											<td>First Division</td>
											<td>3M</td>
											<td>Professional</td>
											<td>30,000</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#58D078"></span></td>
											<td>1983</td>
											<td>23.9</td>
										</tr>
										<tr>
											<td id="136016">Tampico Madero</td>
											<td><img src="modules/fmsdb/img/flags/s/MEX.gif" alt="Mexico">  MEX</td>
											<td>Promotion League</td>
											<td>77K</td>
											<td>Professional</td>
											<td>22,500</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#4898D0"></span></td>
											<td>1982</td>
											<td>22.5</td>
										</tr>
										<tr>
											<td id="51051220">Tapachula</td>
											<td><img src="modules/fmsdb/img/flags/s/MEX.gif" alt="Mexico">  MEX</td>
											<td>Promotion League</td>
											<td>77K</td>
											<td>Professional</td>
											<td>13,300</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#008030"></span></td>
											<td>2015</td>
											<td>28.8</td>
										</tr>
										<tr>
											<td id="5661082">Tepic</td>
											<td><img src="modules/fmsdb/img/flags/s/MEX.gif" alt="Mexico">  MEX</td>
											<td>Promotion League</td>
											<td>192K</td>
											<td>Professional</td>
											<td>12,945</td>
											<td><span class="label" style="background:#B00000"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1959</td>
											<td>23.8</td>
										</tr>
										<tr>
											<td id="104360">Tigres</td>
											<td><img src="modules/fmsdb/img/flags/s/MEX.gif" alt="Mexico">  MEX</td>
											<td>First Division</td>
											<td>6M</td>
											<td>Professional</td>
											<td>42,000</td>
											<td><span class="label" style="background:#0030A0"></span> <span class="label" style="background:#F8D000"></span></td>
											<td>1960</td>
											<td>25.3</td>
										</tr>
										<tr>
											<td id="102355">Toluca</td>
											<td><img src="modules/fmsdb/img/flags/s/MEX.gif" alt="Mexico">  MEX</td>
											<td>First Division</td>
											<td>3M</td>
											<td>Professional</td>
											<td>30,000</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#E00000"></span></td>
											<td>1917</td>
											<td>27.8</td>
										</tr>
										<tr>
											<td id="5661084">UdeG</td>
											<td><img src="modules/fmsdb/img/flags/s/MEX.gif" alt="Mexico">  MEX</td>
											<td>Promotion League</td>
											<td>192K</td>
											<td>Professional</td>
											<td>56,713</td>
											<td><span class="label" style="background:#F8F000"></span> <span class="label" style="background:#000000"></span></td>
											<td>1970</td>
											<td>26.9</td>
										</tr>
										<tr>
											<td id="51051210">Venados</td>
											<td><img src="modules/fmsdb/img/flags/s/MEX.gif" alt="Mexico">  MEX</td>
											<td>Promotion League</td>
											<td>77K</td>
											<td>Professional</td>
											<td>18,000</td>
											<td><span class="label" style="background:#F8F000"></span> <span class="label" style="background:#F8F000"></span></td>
											<td>1988</td>
											<td>24.0</td>
										</tr>
										<tr>
											<td id="130799">Veracruz</td>
											<td><img src="modules/fmsdb/img/flags/s/MEX.gif" alt="Mexico">  MEX</td>
											<td>First Division</td>
											<td>2M</td>
											<td>Professional</td>
											<td>30,000</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#C80000"></span></td>
											<td>1943</td>
											<td>27.9</td>
										</tr>
										<tr>
											<td id="136021">Xolos Tijuana</td>
											<td><img src="modules/fmsdb/img/flags/s/MEX.gif" alt="Mexico">  MEX</td>
											<td>First Division</td>
											<td>5M</td>
											<td>Professional</td>
											<td>27,333</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#E00000"></span></td>
											<td>2007</td>
											<td>26.1</td>
										</tr>
										<tr>
											<td id="136020">Zacatepec</td>
											<td><img src="modules/fmsdb/img/flags/s/MEX.gif" alt="Mexico">  MEX</td>
											<td>Promotion League</td>
											<td>154K</td>
											<td>Professional</td>
											<td>24,443</td>
											<td><span class="label" style="background:#006030"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1954</td>
											<td>27.4</td>
										</tr>
										<tr>
											<td id="862787">Achilles</td>
											<td><img src="modules/fmsdb/img/flags/s/NED.gif" alt="Holland">  NED</td>
											<td>Jupiler League</td>
											<td>7K</td>
											<td>Professional</td>
											<td>4,500</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1929</td>
											<td>23.9</td>
										</tr>
										<tr>
											<td id="986">ADO Den Haag</td>
											<td><img src="modules/fmsdb/img/flags/s/NED.gif" alt="Holland">  NED</td>
											<td>Eredivisie</td>
											<td>258K</td>
											<td>Professional</td>
											<td>15,000</td>
											<td><span class="label" style="background:#F8C800"></span> <span class="label" style="background:#187038"></span></td>
											<td>1905</td>
											<td>24.5</td>
										</tr>
										<tr>
											<td id="992">Ajax</td>
											<td><img src="modules/fmsdb/img/flags/s/NED.gif" alt="Holland">  NED</td>
											<td>Eredivisie</td>
											<td>4M</td>
											<td>Professional</td>
											<td>53,346</td>
											<td><span class="label" style="background:#B02830"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1900</td>
											<td>23.0</td>
										</tr>
										<tr>
											<td id="850022">Almere</td>
											<td><img src="modules/fmsdb/img/flags/s/NED.gif" alt="Holland">  NED</td>
											<td>Jupiler League</td>
											<td>172K</td>
											<td>Professional</td>
											<td>2,864</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#C81028"></span></td>
											<td>1997</td>
											<td>24.1</td>
										</tr>
										<tr>
											<td id="991">AZ</td>
											<td><img src="modules/fmsdb/img/flags/s/NED.gif" alt="Holland">  NED</td>
											<td>Eredivisie</td>
											<td>646K</td>
											<td>Professional</td>
											<td>17,023</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#D83038"></span></td>
											<td>1967</td>
											<td>23.5</td>
										</tr>
										<tr>
											<td id="994">Cambuur</td>
											<td><img src="modules/fmsdb/img/flags/s/NED.gif" alt="Holland">  NED</td>
											<td>Jupiler League</td>
											<td>151K</td>
											<td>Professional</td>
											<td>10,000</td>
											<td><span class="label" style="background:#203098"></span> <span class="label" style="background:#F0E028"></span></td>
											<td>1964</td>
											<td>24.8</td>
										</tr>
										<tr>
											<td id="1000">De Graafschap</td>
											<td><img src="modules/fmsdb/img/flags/s/NED.gif" alt="Holland">  NED</td>
											<td>Jupiler League</td>
											<td>129K</td>
											<td>Professional</td>
											<td>12,600</td>
											<td><span class="label" style="background:#2870C0"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1954</td>
											<td>23.2</td>
										</tr>
										<tr>
											<td id="1005">Den Bosch</td>
											<td><img src="modules/fmsdb/img/flags/s/NED.gif" alt="Holland">  NED</td>
											<td>Jupiler League</td>
											<td>0</td>
											<td>Professional</td>
											<td>7,000</td>
											<td><span class="label" style="background:#004888"></span> <span class="label" style="background:#4070F0"></span></td>
											<td>1965</td>
											<td>22.7</td>
										</tr>
										<tr>
											<td id="1001">Dordrecht</td>
											<td><img src="modules/fmsdb/img/flags/s/NED.gif" alt="Holland">  NED</td>
											<td>Jupiler League</td>
											<td>14K</td>
											<td>Professional</td>
											<td>4,100</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#404828"></span></td>
											<td>1972</td>
											<td>21.8</td>
										</tr>
										<tr>
											<td id="1002">Eindhoven</td>
											<td><img src="modules/fmsdb/img/flags/s/NED.gif" alt="Holland">  NED</td>
											<td>Jupiler League</td>
											<td>34K</td>
											<td>Professional</td>
											<td>4,200</td>
											<td><span class="label" style="background:#5090D8"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1909</td>
											<td>23.9</td>
										</tr>
										<tr>
											<td id="1003">Emmen</td>
											<td><img src="modules/fmsdb/img/flags/s/NED.gif" alt="Holland">  NED</td>
											<td>Jupiler League</td>
											<td>43K</td>
											<td>Professional</td>
											<td>8,600</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#E81020"></span></td>
											<td>1925</td>
											<td>24.2</td>
										</tr>
										<tr>
											<td id="1004">Excelsior</td>
											<td><img src="modules/fmsdb/img/flags/s/NED.gif" alt="Holland">  NED</td>
											<td>Eredivisie</td>
											<td>0</td>
											<td>Professional</td>
											<td>4,500</td>
											<td><span class="label" style="background:#C81050"></span> <span class="label" style="background:#101010"></span></td>
											<td>1902</td>
											<td>25.0</td>
										</tr>
										<tr>
											<td id="1007">FC Groningen</td>
											<td><img src="modules/fmsdb/img/flags/s/NED.gif" alt="Holland">  NED</td>
											<td>Eredivisie</td>
											<td>861K</td>
											<td>Professional</td>
											<td>22,579</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#006048"></span></td>
											<td>1971</td>
											<td>24.4</td>
										</tr>
										<tr>
											<td id="1009">FC Twente</td>
											<td><img src="modules/fmsdb/img/flags/s/NED.gif" alt="Holland">  NED</td>
											<td>Eredivisie</td>
											<td>175K</td>
											<td>Professional</td>
											<td>30,014</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#C80000"></span></td>
											<td>1965</td>
											<td>21.8</td>
										</tr>
										<tr>
											<td id="1010">FC Utrecht</td>
											<td><img src="modules/fmsdb/img/flags/s/NED.gif" alt="Holland">  NED</td>
											<td>Eredivisie</td>
											<td>3M</td>
											<td>Professional</td>
											<td>24,426</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#E00000"></span></td>
											<td>1970</td>
											<td>23.4</td>
										</tr>
										<tr>
											<td id="1013">Feyenoord</td>
											<td><img src="modules/fmsdb/img/flags/s/NED.gif" alt="Holland">  NED</td>
											<td>Eredivisie</td>
											<td>2M</td>
											<td>Professional</td>
											<td>51,177</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#E00000"></span></td>
											<td>1908</td>
											<td>24.6</td>
										</tr>
										<tr>
											<td id="1014">Fortuna</td>
											<td><img src="modules/fmsdb/img/flags/s/NED.gif" alt="Holland">  NED</td>
											<td>Jupiler League</td>
											<td>8K</td>
											<td>Professional</td>
											<td>10,300</td>
											<td><span class="label" style="background:#D0C028"></span> <span class="label" style="background:#F8E028"></span></td>
											<td>1968</td>
											<td>22.7</td>
										</tr>
										<tr>
											<td id="1015">Go Ahead Eagles</td>
											<td><img src="modules/fmsdb/img/flags/s/NED.gif" alt="Holland">  NED</td>
											<td>Eredivisie</td>
											<td>172K</td>
											<td>Professional</td>
											<td>10,000</td>
											<td><span class="label" style="background:#F8F000"></span> <span class="label" style="background:#E01808"></span></td>
											<td>1902</td>
											<td>25.7</td>
										</tr>
										<tr>
											<td id="1017">Helmond</td>
											<td><img src="modules/fmsdb/img/flags/s/NED.gif" alt="Holland">  NED</td>
											<td>Jupiler League</td>
											<td>43K</td>
											<td>Professional</td>
											<td>4,200</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#E01018"></span></td>
											<td>1967</td>
											<td>23.7</td>
										</tr>
										<tr>
											<td id="1037">Heracles Almelo</td>
											<td><img src="modules/fmsdb/img/flags/s/NED.gif" alt="Holland">  NED</td>
											<td>Eredivisie</td>
											<td>215K</td>
											<td>Professional</td>
											<td>13,500</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#000000"></span></td>
											<td>1903</td>
											<td>24.7</td>
										</tr>
										<tr>
											<td id="1022">MVV</td>
											<td><img src="modules/fmsdb/img/flags/s/NED.gif" alt="Holland">  NED</td>
											<td>Jupiler League</td>
											<td>7K</td>
											<td>Professional</td>
											<td>8,800</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#E03030"></span></td>
											<td>1902</td>
											<td>21.7</td>
										</tr>
										<tr>
											<td id="1025">N.E.C.</td>
											<td><img src="modules/fmsdb/img/flags/s/NED.gif" alt="Holland">  NED</td>
											<td>Eredivisie</td>
											<td>43K</td>
											<td>Professional</td>
											<td>12,500</td>
											<td><span class="label" style="background:#00A858"></span> <span class="label" style="background:#F03028"></span></td>
											<td>1900</td>
											<td>22.8</td>
										</tr>
										<tr>
											<td id="1024">NAC</td>
											<td><img src="modules/fmsdb/img/flags/s/NED.gif" alt="Holland">  NED</td>
											<td>Jupiler League</td>
											<td>43K</td>
											<td>Professional</td>
											<td>19,000</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#E0B010"></span></td>
											<td>1912</td>
											<td>22.1</td>
										</tr>
										<tr>
											<td id="1042">Oss</td>
											<td><img src="modules/fmsdb/img/flags/s/NED.gif" alt="Holland">  NED</td>
											<td>Jupiler League</td>
											<td>22K</td>
											<td>Professional</td>
											<td>4,700</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#E00000"></span></td>
											<td>1928</td>
											<td>23.9</td>
										</tr>
										<tr>
											<td id="1012">PEC Zwolle</td>
											<td><img src="modules/fmsdb/img/flags/s/NED.gif" alt="Holland">  NED</td>
											<td>Eredivisie</td>
											<td>172K</td>
											<td>Professional</td>
											<td>13,250</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#284898"></span></td>
											<td>1910</td>
											<td>23.6</td>
										</tr>
										<tr>
											<td id="1028">PSV</td>
											<td><img src="modules/fmsdb/img/flags/s/NED.gif" alt="Holland">  NED</td>
											<td>Eredivisie</td>
											<td>3M</td>
											<td>Professional</td>
											<td>35,000</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#B02038"></span></td>
											<td>1913</td>
											<td>23.9</td>
										</tr>
										<tr>
											<td id="1032">RKC</td>
											<td><img src="modules/fmsdb/img/flags/s/NED.gif" alt="Holland">  NED</td>
											<td>Jupiler League</td>
											<td>9K</td>
											<td>Professional</td>
											<td>7,508</td>
											<td><span class="label" style="background:#1848B0"></span> <span class="label" style="background:#F8F000"></span></td>
											<td>1940</td>
											<td>23.7</td>
										</tr>
										<tr>
											<td id="1033">Roda JC</td>
											<td><img src="modules/fmsdb/img/flags/s/NED.gif" alt="Holland">  NED</td>
											<td>Eredivisie</td>
											<td>646K</td>
											<td>Professional</td>
											<td>19,979</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F8D828"></span></td>
											<td>1962</td>
											<td>26.0</td>
										</tr>
										<tr>
											<td id="1036">SC Heerenveen</td>
											<td><img src="modules/fmsdb/img/flags/s/NED.gif" alt="Holland">  NED</td>
											<td>Eredivisie</td>
											<td>3M</td>
											<td>Professional</td>
											<td>26,100</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#004890"></span></td>
											<td>1920</td>
											<td>23.3</td>
										</tr>
										<tr>
											<td id="1039">Sparta Rotterdam</td>
											<td><img src="modules/fmsdb/img/flags/s/NED.gif" alt="Holland">  NED</td>
											<td>Eredivisie</td>
											<td>83K</td>
											<td>Professional</td>
											<td>11,026</td>
											<td><span class="label" style="background:#E81830"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1888</td>
											<td>23.9</td>
										</tr>
										<tr>
											<td id="1043">Telstar</td>
											<td><img src="modules/fmsdb/img/flags/s/NED.gif" alt="Holland">  NED</td>
											<td>Jupiler League</td>
											<td>22K</td>
											<td>Professional</td>
											<td>3,060</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1963</td>
											<td>23.7</td>
										</tr>
										<tr>
											<td id="1046">Vitesse</td>
											<td><img src="modules/fmsdb/img/flags/s/NED.gif" alt="Holland">  NED</td>
											<td>Eredivisie</td>
											<td>1M</td>
											<td>Professional</td>
											<td>25,500</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F8D800"></span></td>
											<td>1892</td>
											<td>23.8</td>
										</tr>
										<tr>
											<td id="1011">Volendam</td>
											<td><img src="modules/fmsdb/img/flags/s/NED.gif" alt="Holland">  NED</td>
											<td>Jupiler League</td>
											<td>43K</td>
											<td>Professional</td>
											<td>7,200</td>
											<td><span class="label" style="background:#E87828"></span> <span class="label" style="background:#E06818"></span></td>
											<td>1920</td>
											<td>23.6</td>
										</tr>
										<tr>
											<td id="1044">VVV</td>
											<td><img src="modules/fmsdb/img/flags/s/NED.gif" alt="Holland">  NED</td>
											<td>Jupiler League</td>
											<td>431K</td>
											<td>Professional</td>
											<td>8,000</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F8F000"></span></td>
											<td>1903</td>
											<td>22.3</td>
										</tr>
										<tr>
											<td id="1047">Willem II</td>
											<td><img src="modules/fmsdb/img/flags/s/NED.gif" alt="Holland">  NED</td>
											<td>Eredivisie</td>
											<td>65K</td>
											<td>Professional</td>
											<td>14,500</td>
											<td><span class="label" style="background:#202838"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1896</td>
											<td>24.3</td>
										</tr>
										<tr>
											<td id="416239">Annagh Utd</td>
											<td><img src="modules/fmsdb/img/flags/s/NIR.gif" alt="N.Ireland">  NIR</td>
											<td>NIFL C1</td>
											<td>0</td>
											<td>Semi-Professional</td>
											<td>1,250</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#E00000"></span></td>
											<td>1963</td>
											<td>25.7</td>
										</tr>
										<tr>
											<td id="1272">Ards</td>
											<td><img src="modules/fmsdb/img/flags/s/NIR.gif" alt="N.Ireland">  NIR</td>
											<td>Danske Bank Premier</td>
											<td>0</td>
											<td>Semi-Professional</td>
											<td>2,750</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
											<td>1900</td>
											<td>25.5</td>
										</tr>
										<tr>
											<td id="130032">Armagh</td>
											<td><img src="modules/fmsdb/img/flags/s/NIR.gif" alt="N.Ireland">  NIR</td>
											<td>NIFL C1</td>
											<td>0</td>
											<td>Semi-Professional</td>
											<td>2,330</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#1070C8"></span></td>
											<td>1964</td>
											<td>25.2</td>
										</tr>
										<tr>
											<td id="130162">Ballinamallard Utd</td>
											<td><img src="modules/fmsdb/img/flags/s/NIR.gif" alt="N.Ireland">  NIR</td>
											<td>Danske Bank Premier</td>
											<td>0</td>
											<td>Semi-Professional</td>
											<td>2,000</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#0050D0"></span></td>
											<td>1975</td>
											<td>24.8</td>
										</tr>
										<tr>
											<td id="1273">Ballyclare</td>
											<td><img src="modules/fmsdb/img/flags/s/NIR.gif" alt="N.Ireland">  NIR</td>
											<td>NIFL C1</td>
											<td>0</td>
											<td>Semi-Professional</td>
											<td>1,800</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#E00000"></span></td>
											<td>1919</td>
											<td>26.6</td>
										</tr>
										<tr>
											<td id="1274">Ballymena Utd</td>
											<td><img src="modules/fmsdb/img/flags/s/NIR.gif" alt="N.Ireland">  NIR</td>
											<td>Danske Bank Premier</td>
											<td>0</td>
											<td>Semi-Professional</td>
											<td>8,000</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#B8D8E8"></span></td>
											<td>1928</td>
											<td>26.6</td>
										</tr>
										<tr>
											<td id="130159">Banbridge</td>
											<td><img src="modules/fmsdb/img/flags/s/NIR.gif" alt="N.Ireland">  NIR</td>
											<td>NIFL C2</td>
											<td>0</td>
											<td>Semi-Professional</td>
											<td>1,500</td>
											<td><span class="label" style="background:#E00000"></span> <span class="label" style="background:#000000"></span></td>
											<td>1947</td>
											<td>28.6</td>
										</tr>
										<tr>
											<td id="1275">Bangor</td>
											<td><img src="modules/fmsdb/img/flags/s/NIR.gif" alt="N.Ireland">  NIR</td>
											<td>NIFL C2</td>
											<td>0</td>
											<td>Semi-Professional</td>
											<td>2,750</td>
											<td><span class="label" style="background:#0050D0"></span> <span class="label" style="background:#F8F000"></span></td>
											<td>1918</td>
											<td>23.6</td>
										</tr>
										<tr>
											<td id="1276">Carrick</td>
											<td><img src="modules/fmsdb/img/flags/s/NIR.gif" alt="N.Ireland">  NIR</td>
											<td>Danske Bank Premier</td>
											<td>0</td>
											<td>Semi-Professional</td>
											<td>4,500</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F86000"></span></td>
											<td>1939</td>
											<td>25.3</td>
										</tr>
										<tr>
											<td id="1277">Cliftonville</td>
											<td><img src="modules/fmsdb/img/flags/s/NIR.gif" alt="N.Ireland">  NIR</td>
											<td>Danske Bank Premier</td>
											<td>10K</td>
											<td>Semi-Professional</td>
											<td>6,224</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#E00000"></span></td>
											<td>1879</td>
											<td>24.8</td>
										</tr>
										<tr>
											<td id="1278">Coleraine</td>
											<td><img src="modules/fmsdb/img/flags/s/NIR.gif" alt="N.Ireland">  NIR</td>
											<td>Danske Bank Premier</td>
											<td>0</td>
											<td>Semi-Professional</td>
											<td>6,500</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
											<td>1927</td>
											<td>26.2</td>
										</tr>
										<tr>
											<td id="1279">Crusaders</td>
											<td><img src="modules/fmsdb/img/flags/s/NIR.gif" alt="N.Ireland">  NIR</td>
											<td>Danske Bank Premier</td>
											<td>50K</td>
											<td>Semi-Professional</td>
											<td>3,383</td>
											<td><span class="label" style="background:#E00000"></span> <span class="label" style="background:#000000"></span></td>
											<td>1898</td>
											<td>27.2</td>
										</tr>
										<tr>
											<td id="416241">Dergview</td>
											<td><img src="modules/fmsdb/img/flags/s/NIR.gif" alt="N.Ireland">  NIR</td>
											<td>NIFL C1</td>
											<td>0</td>
											<td>Semi-Professional</td>
											<td>1,200</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1980</td>
											<td>27.2</td>
										</tr>
										<tr>
											<td id="1280">Distillery</td>
											<td><img src="modules/fmsdb/img/flags/s/NIR.gif" alt="N.Ireland">  NIR</td>
											<td>NIFL C2</td>
											<td>0</td>
											<td>Semi-Professional</td>
											<td>7,000</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1880</td>
											<td>23.4</td>
										</tr>
										<tr>
											<td id="130169">Donegal Celtic</td>
											<td><img src="modules/fmsdb/img/flags/s/NIR.gif" alt="N.Ireland">  NIR</td>
											<td>NIFL C2</td>
											<td>0</td>
											<td>Semi-Professional</td>
											<td>6,254</td>
											<td><span class="label" style="background:#008030"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1970</td>
											<td>26.3</td>
										</tr>
										<tr>
											<td id="130176">Dundela</td>
											<td><img src="modules/fmsdb/img/flags/s/NIR.gif" alt="N.Ireland">  NIR</td>
											<td>NIFL C2</td>
											<td>0</td>
											<td>Semi-Professional</td>
											<td>2,000</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#004030"></span></td>
											<td>1895</td>
											<td>26.6</td>
										</tr>
										<tr>
											<td id="116331">Dungannon</td>
											<td><img src="modules/fmsdb/img/flags/s/NIR.gif" alt="N.Ireland">  NIR</td>
											<td>Danske Bank Premier</td>
											<td>0</td>
											<td>Semi-Professional</td>
											<td>5,000</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
											<td>1949</td>
											<td>26.1</td>
										</tr>
										<tr>
											<td id="1281">Glenavon</td>
											<td><img src="modules/fmsdb/img/flags/s/NIR.gif" alt="N.Ireland">  NIR</td>
											<td>Danske Bank Premier</td>
											<td>0</td>
											<td>Semi-Professional</td>
											<td>4,160</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#0050D0"></span></td>
											<td>1889</td>
											<td>29.3</td>
										</tr>
										<tr>
											<td id="1282">Glentoran</td>
											<td><img src="modules/fmsdb/img/flags/s/NIR.gif" alt="N.Ireland">  NIR</td>
											<td>Danske Bank Premier</td>
											<td>0</td>
											<td>Semi-Professional</td>
											<td>8,000</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#009878"></span></td>
											<td>1882</td>
											<td>28.2</td>
										</tr>
										<tr>
											<td id="130175">H &amp; W Welders</td>
											<td><img src="modules/fmsdb/img/flags/s/NIR.gif" alt="N.Ireland">  NIR</td>
											<td>NIFL C1</td>
											<td>0</td>
											<td>Semi-Professional</td>
											<td>3,000</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F8F000"></span></td>
											<td>1965</td>
											<td>27.4</td>
										</tr>
										<tr>
											<td id="130031">Institute</td>
											<td><img src="modules/fmsdb/img/flags/s/NIR.gif" alt="N.Ireland">  NIR</td>
											<td>NIFL C1</td>
											<td>0</td>
											<td>Semi-Professional</td>
											<td>3,110</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#B8D8E8"></span></td>
											<td>1905</td>
											<td>26.7</td>
										</tr>
										<tr>
											<td id="414230">Knockbreda</td>
											<td><img src="modules/fmsdb/img/flags/s/NIR.gif" alt="N.Ireland">  NIR</td>
											<td>NIFL C1</td>
											<td>0</td>
											<td>Semi-Professional</td>
											<td>2,500</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F8F000"></span></td>
											<td>1947</td>
											<td>25.7</td>
										</tr>
										<tr>
											<td id="1283">Larne</td>
											<td><img src="modules/fmsdb/img/flags/s/NIR.gif" alt="N.Ireland">  NIR</td>
											<td>NIFL C1</td>
											<td>0</td>
											<td>Semi-Professional</td>
											<td>1,100</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#B00000"></span></td>
											<td>1889</td>
											<td>26.0</td>
										</tr>
										<tr>
											<td id="116334">Limavady Utd</td>
											<td><img src="modules/fmsdb/img/flags/s/NIR.gif" alt="N.Ireland">  NIR</td>
											<td>NIFL C2</td>
											<td>0</td>
											<td>Semi-Professional</td>
											<td>550</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#0050D0"></span></td>
											<td>1884</td>
											<td>25.7</td>
										</tr>
										<tr>
											<td id="1284">Linfield</td>
											<td><img src="modules/fmsdb/img/flags/s/NIR.gif" alt="N.Ireland">  NIR</td>
											<td>Danske Bank Premier</td>
											<td>50K</td>
											<td>Semi-Professional</td>
											<td>18,000</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#0050D0"></span></td>
											<td>1886</td>
											<td>26.5</td>
										</tr>
										<tr>
											<td id="130174">Loughgall</td>
											<td><img src="modules/fmsdb/img/flags/s/NIR.gif" alt="N.Ireland">  NIR</td>
											<td>NIFL C1</td>
											<td>0</td>
											<td>Semi-Professional</td>
											<td>3,000</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#0030A0"></span></td>
											<td>1967</td>
											<td>26.5</td>
										</tr>
										<tr>
											<td id="414173">Lurgan Celtic</td>
											<td><img src="modules/fmsdb/img/flags/s/NIR.gif" alt="N.Ireland">  NIR</td>
											<td>NIFL C1</td>
											<td>0</td>
											<td>Semi-Professional</td>
											<td>1,500</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#006030"></span></td>
											<td>1903</td>
											<td>26.3</td>
										</tr>
										<tr>
											<td id="130173">Moyola Park</td>
											<td><img src="modules/fmsdb/img/flags/s/NIR.gif" alt="N.Ireland">  NIR</td>
											<td>NIFL C2</td>
											<td>0</td>
											<td>Semi-Professional</td>
											<td>2,000</td>
											<td><span class="label" style="background:#F8F000"></span> <span class="label" style="background:#0050D0"></span></td>
											<td>1880</td>
											<td>26.9</td>
										</tr>
										<tr>
											<td id="414175">Newington</td>
											<td><img src="modules/fmsdb/img/flags/s/NIR.gif" alt="N.Ireland">  NIR</td>
											<td>NIFL C2</td>
											<td>0</td>
											<td>Semi-Professional</td>
											<td>3,383</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#006030"></span></td>
											<td>1979</td>
											<td>28.4</td>
										</tr>
										<tr>
											<td id="52065322">Newry City AFC</td>
											<td><img src="modules/fmsdb/img/flags/s/NIR.gif" alt="N.Ireland">  NIR</td>
											<td>NIFL C2</td>
											<td>0</td>
											<td>Semi-Professional</td>
											<td>6,000</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#0030A0"></span></td>
											<td>2013</td>
											<td>27.9</td>
										</tr>
										<tr>
											<td id="130172">P.S.N.I.</td>
											<td><img src="modules/fmsdb/img/flags/s/NIR.gif" alt="N.Ireland">  NIR</td>
											<td>NIFL C1</td>
											<td>0</td>
											<td>Semi-Professional</td>
											<td>1,000</td>
											<td><span class="label" style="background:#E00000"></span> <span class="label" style="background:#008030"></span></td>
											<td>1956</td>
											<td>27.5</td>
										</tr>
										<tr>
											<td id="1288">Portadown</td>
											<td><img src="modules/fmsdb/img/flags/s/NIR.gif" alt="N.Ireland">  NIR</td>
											<td>Danske Bank Premier</td>
											<td>0</td>
											<td>Semi-Professional</td>
											<td>3,940</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
											<td>1924</td>
											<td>28.1</td>
										</tr>
										<tr>
											<td id="416240">Queens University</td>
											<td><img src="modules/fmsdb/img/flags/s/NIR.gif" alt="N.Ireland">  NIR</td>
											<td>NIFL C2</td>
											<td>0</td>
											<td>Semi-Professional</td>
											<td>2,000</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1908</td>
											<td>28.4</td>
										</tr>
										<tr>
											<td id="1900740">Sport &amp; Leisure</td>
											<td><img src="modules/fmsdb/img/flags/s/NIR.gif" alt="N.Ireland">  NIR</td>
											<td>NIFL C2</td>
											<td>0</td>
											<td>Semi-Professional</td>
											<td>1,000</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#E00000"></span></td>
											<td>1978</td>
											<td>28.2</td>
										</tr>
										<tr>
											<td id="130171">Tobermore Utd</td>
											<td><img src="modules/fmsdb/img/flags/s/NIR.gif" alt="N.Ireland">  NIR</td>
											<td>NIFL C2</td>
											<td>0</td>
											<td>Semi-Professional</td>
											<td>1,500</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#E00000"></span></td>
											<td>1965</td>
											<td>26.3</td>
										</tr>
										<tr>
											<td id="1900709">Warrenpoint</td>
											<td><img src="modules/fmsdb/img/flags/s/NIR.gif" alt="N.Ireland">  NIR</td>
											<td>NIFL C1</td>
											<td>0</td>
											<td>Semi-Professional</td>
											<td>2,000</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#60C0F8"></span></td>
											<td>1987</td>
											<td>25.2</td>
										</tr>
										<tr>
											<td id="1289">Aalesund</td>
											<td><img src="modules/fmsdb/img/flags/s/NOR.gif" alt="Norway">  NOR</td>
											<td>Premier Division</td>
											<td>142K</td>
											<td>Professional</td>
											<td>10,778</td>
											<td><span class="label" style="background:#0050D0"></span> <span class="label" style="background:#F87000"></span></td>
											<td>1914</td>
											<td>23.7</td>
										</tr>
										<tr>
											<td id="1291">Alta</td>
											<td><img src="modules/fmsdb/img/flags/s/NOR.gif" alt="Norway">  NOR</td>
											<td>Second Division Group 1</td>
											<td>948</td>
											<td>Semi-Professional</td>
											<td>1,250</td>
											<td><span class="label" style="background:#0858F8"></span> <span class="label" style="background:#F8F838"></span></td>
											<td>1927</td>
											<td>24.8</td>
										</tr>
										<tr>
											<td id="759312">Arendal</td>
											<td><img src="modules/fmsdb/img/flags/s/NOR.gif" alt="Norway">  NOR</td>
											<td>Second Division Group 4</td>
											<td>0</td>
											<td>Semi-Professional</td>
											<td>2,500</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>2010</td>
											<td>26.5</td>
										</tr>
										<tr>
											<td id="1430">Asane</td>
											<td><img src="modules/fmsdb/img/flags/s/NOR.gif" alt="Norway">  NOR</td>
											<td>First Division</td>
											<td>5K</td>
											<td>Semi-Professional</td>
											<td>2,158</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F85008"></span></td>
											<td>1971</td>
											<td>23.0</td>
										</tr>
										<tr>
											<td id="101493">Asker</td>
											<td><img src="modules/fmsdb/img/flags/s/NOR.gif" alt="Norway">  NOR</td>
											<td>Second Division Group 4</td>
											<td>9K</td>
											<td>Semi-Professional</td>
											<td>1,500</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1889</td>
											<td>23.6</td>
										</tr>
										<tr>
											<td id="1298">B?rum</td>
											<td><img src="modules/fmsdb/img/flags/s/NOR.gif" alt="Norway">  NOR</td>
											<td>Second Division Group 4</td>
											<td>3K</td>
											<td>Semi-Professional</td>
											<td>3,000</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F8E848"></span></td>
											<td>1910</td>
											<td>26.1</td>
										</tr>
										<tr>
											<td id="1293">Bodo/Glimt</td>
											<td><img src="modules/fmsdb/img/flags/s/NOR.gif" alt="Norway">  NOR</td>
											<td>Premier Division</td>
											<td>95K</td>
											<td>Professional</td>
											<td>7,127</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F8D858"></span></td>
											<td>1916</td>
											<td>23.7</td>
										</tr>
										<tr>
											<td id="1378">Brann</td>
											<td><img src="modules/fmsdb/img/flags/s/NOR.gif" alt="Norway">  NOR</td>
											<td>Premier Division</td>
											<td>237K</td>
											<td>Professional</td>
											<td>17,703</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#E00000"></span></td>
											<td>1908</td>
											<td>25.5</td>
										</tr>
										<tr>
											<td id="1294">Brattvag</td>
											<td><img src="modules/fmsdb/img/flags/s/NOR.gif" alt="Norway">  NOR</td>
											<td>Second Division Group 2</td>
											<td>0</td>
											<td>Semi-Professional</td>
											<td>1,300</td>
											<td><span class="label" style="background:#0000F8"></span> <span class="label" style="background:#F8D800"></span></td>
											<td>1940</td>
											<td>24.6</td>
										</tr>
										<tr>
											<td id="753915">Brumunddal</td>
											<td><img src="modules/fmsdb/img/flags/s/NOR.gif" alt="Norway">  NOR</td>
											<td>Second Division Group 2</td>
											<td>0</td>
											<td>Semi-Professional</td>
											<td>5,000</td>
											<td><span class="label" style="background:#0030A0"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1905</td>
											<td>24.3</td>
										</tr>
										<tr>
											<td id="1295">Bryne</td>
											<td><img src="modules/fmsdb/img/flags/s/NOR.gif" alt="Norway">  NOR</td>
											<td>First Division</td>
											<td>5K</td>
											<td>Professional</td>
											<td>10,500</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#E81800"></span></td>
											<td>1926</td>
											<td>23.9</td>
										</tr>
										<tr>
											<td id="1296">Byasen</td>
											<td><img src="modules/fmsdb/img/flags/s/NOR.gif" alt="Norway">  NOR</td>
											<td>Second Division Group 2</td>
											<td>0</td>
											<td>Semi-Professional</td>
											<td>2,500</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#F80018"></span></td>
											<td>1921</td>
											<td>24.4</td>
										</tr>
										<tr>
											<td id="1301">Egersunds</td>
											<td><img src="modules/fmsdb/img/flags/s/NOR.gif" alt="Norway">  NOR</td>
											<td>Second Division Group 3</td>
											<td>0</td>
											<td>Semi-Professional</td>
											<td>4,425</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F8E848"></span></td>
											<td>1919</td>
											<td>24.6</td>
										</tr>
										<tr>
											<td id="1305">Elverum</td>
											<td><img src="modules/fmsdb/img/flags/s/NOR.gif" alt="Norway">  NOR</td>
											<td>Second Division Group 2</td>
											<td>0</td>
											<td>Semi-Professional</td>
											<td>2,000</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1907</td>
											<td>24.4</td>
										</tr>
										<tr>
											<td id="1307">Fana</td>
											<td><img src="modules/fmsdb/img/flags/s/NOR.gif" alt="Norway">  NOR</td>
											<td>Second Division Group 3</td>
											<td>0</td>
											<td>Semi-Professional</td>
											<td>1,200</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
											<td>1920</td>
											<td>21.1</td>
										</tr>
										<tr>
											<td id="1309">Finnsnes</td>
											<td><img src="modules/fmsdb/img/flags/s/NOR.gif" alt="Norway">  NOR</td>
											<td>Second Division Group 1</td>
											<td>0</td>
											<td>Semi-Professional</td>
											<td>3,400</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#28B080"></span></td>
											<td>1938</td>
											<td>25.5</td>
										</tr>
										<tr>
											<td id="5000210">Floro</td>
											<td><img src="modules/fmsdb/img/flags/s/NOR.gif" alt="Norway">  NOR</td>
											<td>Second Division Group 3</td>
											<td>948</td>
											<td>Semi-Professional</td>
											<td>1,500</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#0840B0"></span></td>
											<td>1912</td>
											<td>21.9</td>
										</tr>
										<tr>
											<td id="766164">Floy</td>
											<td><img src="modules/fmsdb/img/flags/s/NOR.gif" alt="Norway">  NOR</td>
											<td>Second Division Group 4</td>
											<td>28K</td>
											<td>Semi-Professional</td>
											<td>4,000</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#0050D0"></span></td>
											<td>1950</td>
											<td>23.4</td>
										</tr>
										<tr>
											<td id="755788">Follo</td>
											<td><img src="modules/fmsdb/img/flags/s/NOR.gif" alt="Norway">  NOR</td>
											<td>Second Division Group 1</td>
											<td>0</td>
											<td>Semi-Professional</td>
											<td>6,000</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#60C0F8"></span></td>
											<td>2000</td>
											<td>21.1</td>
										</tr>
										<tr>
											<td id="1300615">Forde</td>
											<td><img src="modules/fmsdb/img/flags/s/NOR.gif" alt="Norway">  NOR</td>
											<td>Second Division Group 3</td>
											<td>0</td>
											<td>Semi-Professional</td>
											<td>1,000</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1920</td>
											<td>23.6</td>
										</tr>
										<tr>
											<td id="1339">Fram Larvik</td>
											<td><img src="modules/fmsdb/img/flags/s/NOR.gif" alt="Norway">  NOR</td>
											<td>Second Division Group 4</td>
											<td>5K</td>
											<td>Semi-Professional</td>
											<td>5,000</td>
											<td><span class="label" style="background:#0038F8"></span> <span class="label" style="background:#F00000"></span></td>
											<td>1894</td>
											<td>25.9</td>
										</tr>
										<tr>
											<td id="1312">Fredrikstad</td>
											<td><img src="modules/fmsdb/img/flags/s/NOR.gif" alt="Norway">  NOR</td>
											<td>First Division</td>
											<td>71K</td>
											<td>Professional</td>
											<td>12,525</td>
											<td><span class="label" style="background:#E00000"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1903</td>
											<td>24.0</td>
										</tr>
										<tr>
											<td id="1313">Frigg</td>
											<td><img src="modules/fmsdb/img/flags/s/NOR.gif" alt="Norway">  NOR</td>
											<td>Second Division Group 3</td>
											<td>0</td>
											<td>Semi-Professional</td>
											<td>1,500</td>
											<td><span class="label" style="background:#002080"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1904</td>
											<td>26.7</td>
										</tr>
										<tr>
											<td id="53072600">Fyllingsdalen</td>
											<td><img src="modules/fmsdb/img/flags/s/NOR.gif" alt="Norway">  NOR</td>
											<td>Second Division Group 3</td>
											<td>0</td>
											<td>Semi-Professional</td>
											<td>4,250</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#8000F8"></span></td>
											<td>2011</td>
											<td>22.6</td>
										</tr>
										<tr>
											<td id="53104744">Gjovik-Lyn</td>
											<td><img src="modules/fmsdb/img/flags/s/NOR.gif" alt="Norway">  NOR</td>
											<td>Second Division Group 2</td>
											<td>0</td>
											<td>Semi-Professional</td>
											<td>1,350</td>
											<td><span class="label" style="background:#0000F8"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>2013</td>
											<td>24.8</td>
										</tr>
										<tr>
											<td id="1318">Grorud</td>
											<td><img src="modules/fmsdb/img/flags/s/NOR.gif" alt="Norway">  NOR</td>
											<td>Second Division Group 1</td>
											<td>14K</td>
											<td>Semi-Professional</td>
											<td>1,080</td>
											<td><span class="label" style="background:#0000F8"></span> <span class="label" style="background:#F8F000"></span></td>
											<td>1918</td>
											<td>24.3</td>
										</tr>
										<tr>
											<td id="103283">HamKam</td>
											<td><img src="modules/fmsdb/img/flags/s/NOR.gif" alt="Norway">  NOR</td>
											<td>Second Division Group 2</td>
											<td>5K</td>
											<td>Semi-Professional</td>
											<td>8,068</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#008040"></span></td>
											<td>1918</td>
											<td>22.1</td>
										</tr>
										<tr>
											<td id="1325">Harstad</td>
											<td><img src="modules/fmsdb/img/flags/s/NOR.gif" alt="Norway">  NOR</td>
											<td>Second Division Group 1</td>
											<td>19K</td>
											<td>Semi-Professional</td>
											<td>6,000</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F0F810"></span></td>
											<td>1903</td>
											<td>25.8</td>
										</tr>
										<tr>
											<td id="1326">Haugesund</td>
											<td><img src="modules/fmsdb/img/flags/s/NOR.gif" alt="Norway">  NOR</td>
											<td>Premier Division</td>
											<td>237K</td>
											<td>Professional</td>
											<td>8,983</td>
											<td><span class="label" style="background:#0050B8"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1993</td>
											<td>23.5</td>
										</tr>
										<tr>
											<td id="1328">Hodd</td>
											<td><img src="modules/fmsdb/img/flags/s/NOR.gif" alt="Norway">  NOR</td>
											<td>First Division</td>
											<td>5K</td>
											<td>Semi-Professional</td>
											<td>4,006</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#0050D0"></span></td>
											<td>1919</td>
											<td>25.0</td>
										</tr>
										<tr>
											<td id="1343">Honefoss</td>
											<td><img src="modules/fmsdb/img/flags/s/NOR.gif" alt="Norway">  NOR</td>
											<td>Second Division Group 2</td>
											<td>0</td>
											<td>Semi-Professional</td>
											<td>4,256</td>
											<td><span class="label" style="background:#008888"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1895</td>
											<td>21.8</td>
										</tr>
										<tr>
											<td id="1330">Jerv</td>
											<td><img src="modules/fmsdb/img/flags/s/NOR.gif" alt="Norway">  NOR</td>
											<td>First Division</td>
											<td>5K</td>
											<td>Semi-Professional</td>
											<td>4,000</td>
											<td><span class="label" style="background:#0040F8"></span> <span class="label" style="background:#F8E000"></span></td>
											<td>1921</td>
											<td>24.9</td>
										</tr>
										<tr>
											<td id="800118">KFUM Oslo</td>
											<td><img src="modules/fmsdb/img/flags/s/NOR.gif" alt="Norway">  NOR</td>
											<td>First Division</td>
											<td>2K</td>
											<td>Semi-Professional</td>
											<td>2,200</td>
											<td><span class="label" style="background:#F01000"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1939</td>
											<td>26.9</td>
										</tr>
										<tr>
											<td id="1332">Kjelsas</td>
											<td><img src="modules/fmsdb/img/flags/s/NOR.gif" alt="Norway">  NOR</td>
											<td>Second Division Group 1</td>
											<td>3K</td>
											<td>Semi-Professional</td>
											<td>800</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#0050D0"></span></td>
											<td>1913</td>
											<td>25.5</td>
										</tr>
										<tr>
											<td id="1336">Kongsvinger</td>
											<td><img src="modules/fmsdb/img/flags/s/NOR.gif" alt="Norway">  NOR</td>
											<td>First Division</td>
											<td>6K</td>
											<td>Semi-Professional</td>
											<td>6,300</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#E00000"></span></td>
											<td>1892</td>
											<td>25.9</td>
										</tr>
										<tr>
											<td id="763464">Kristiansund</td>
											<td><img src="modules/fmsdb/img/flags/s/NOR.gif" alt="Norway">  NOR</td>
											<td>First Division</td>
											<td>5K</td>
											<td>Semi-Professional</td>
											<td>3,155</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#002080"></span></td>
											<td>2003</td>
											<td>25.4</td>
										</tr>
										<tr>
											<td id="801870">Kvik Halden</td>
											<td><img src="modules/fmsdb/img/flags/s/NOR.gif" alt="Norway">  NOR</td>
											<td>Second Division Group 4</td>
											<td>6K</td>
											<td>Semi-Professional</td>
											<td>4,000</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#F80000"></span></td>
											<td>1906</td>
											<td>23.6</td>
										</tr>
										<tr>
											<td id="750633">Levanger</td>
											<td><img src="modules/fmsdb/img/flags/s/NOR.gif" alt="Norway">  NOR</td>
											<td>First Division</td>
											<td>0</td>
											<td>Semi-Professional</td>
											<td>1,500</td>
											<td><span class="label" style="background:#E00000"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1996</td>
											<td>26.8</td>
										</tr>
										<tr>
											<td id="1341">Lillestrom</td>
											<td><img src="modules/fmsdb/img/flags/s/NOR.gif" alt="Norway">  NOR</td>
											<td>Premier Division</td>
											<td>57K</td>
											<td>Professional</td>
											<td>12,200</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F0D868"></span></td>
											<td>1917</td>
											<td>23.6</td>
										</tr>
										<tr>
											<td id="1347">Lorenskog</td>
											<td><img src="modules/fmsdb/img/flags/s/NOR.gif" alt="Norway">  NOR</td>
											<td>Second Division Group 3</td>
											<td>10K</td>
											<td>Semi-Professional</td>
											<td>4,275</td>
											<td><span class="label" style="background:#E00000"></span> <span class="label" style="background:#0050D0"></span></td>
											<td>1933</td>
											<td>23.2</td>
										</tr>
										<tr>
											<td id="53090075">Lysekloster</td>
											<td><img src="modules/fmsdb/img/flags/s/NOR.gif" alt="Norway">  NOR</td>
											<td>Second Division Group 3</td>
											<td>9K</td>
											<td>Semi-Professional</td>
											<td>1,000</td>
											<td><span class="label" style="background:#0038E0"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1946</td>
											<td>24.9</td>
										</tr>
										<tr>
											<td id="1351">Mjondalen</td>
											<td><img src="modules/fmsdb/img/flags/s/NOR.gif" alt="Norway">  NOR</td>
											<td>First Division</td>
											<td>7K</td>
											<td>Semi-Professional</td>
											<td>2,100</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#805040"></span></td>
											<td>1910</td>
											<td>27.2</td>
										</tr>
										<tr>
											<td id="1300620">Mo</td>
											<td><img src="modules/fmsdb/img/flags/s/NOR.gif" alt="Norway">  NOR</td>
											<td>Second Division Group 1</td>
											<td>0</td>
											<td>Semi-Professional</td>
											<td>2,600</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#582800"></span></td>
											<td>1904</td>
											<td>22.8</td>
										</tr>
										<tr>
											<td id="1353">Molde</td>
											<td><img src="modules/fmsdb/img/flags/s/NOR.gif" alt="Norway">  NOR</td>
											<td>Premier Division</td>
											<td>2M</td>
											<td>Professional</td>
											<td>11,249</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#0068F8"></span></td>
											<td>1911</td>
											<td>23.8</td>
										</tr>
										<tr>
											<td id="1355">Moss</td>
											<td><img src="modules/fmsdb/img/flags/s/NOR.gif" alt="Norway">  NOR</td>
											<td>Second Division Group 4</td>
											<td>2K</td>
											<td>Semi-Professional</td>
											<td>10,000</td>
											<td><span class="label" style="background:#F8F000"></span> <span class="label" style="background:#F8F000"></span></td>
											<td>1906</td>
											<td>23.7</td>
										</tr>
										<tr>
											<td id="1357">Nardo</td>
											<td><img src="modules/fmsdb/img/flags/s/NOR.gif" alt="Norway">  NOR</td>
											<td>Second Division Group 2</td>
											<td>0</td>
											<td>Semi-Professional</td>
											<td>2,000</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#800020"></span></td>
											<td>1971</td>
											<td>23.7</td>
										</tr>
										<tr>
											<td id="1359">Nest-Sotra</td>
											<td><img src="modules/fmsdb/img/flags/s/NOR.gif" alt="Norway">  NOR</td>
											<td>Second Division Group 3</td>
											<td>0</td>
											<td>Semi-Professional</td>
											<td>1,500</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#60D020"></span></td>
											<td>1968</td>
											<td>22.4</td>
										</tr>
										<tr>
											<td id="755792">Notodden</td>
											<td><img src="modules/fmsdb/img/flags/s/NOR.gif" alt="Norway">  NOR</td>
											<td>Second Division Group 4</td>
											<td>948</td>
											<td>Semi-Professional</td>
											<td>4,000</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#0050D0"></span></td>
											<td>1999</td>
											<td>27.7</td>
										</tr>
										<tr>
											<td id="1363">Nybergsund</td>
											<td><img src="modules/fmsdb/img/flags/s/NOR.gif" alt="Norway">  NOR</td>
											<td>Second Division Group 2</td>
											<td>5K</td>
											<td>Semi-Professional</td>
											<td>1,600</td>
											<td><span class="label" style="background:#0080F8"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1918</td>
											<td>24.4</td>
										</tr>
										<tr>
											<td id="1365">Odd</td>
											<td><img src="modules/fmsdb/img/flags/s/NOR.gif" alt="Norway">  NOR</td>
											<td>Premier Division</td>
											<td>190K</td>
											<td>Professional</td>
											<td>12,293</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1894</td>
											<td>24.9</td>
										</tr>
										<tr>
											<td id="1366">Oppsal</td>
											<td><img src="modules/fmsdb/img/flags/s/NOR.gif" alt="Norway">  NOR</td>
											<td>Second Division Group 1</td>
											<td>0</td>
											<td>Semi-Professional</td>
											<td>500</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#B00000"></span></td>
											<td>1969</td>
											<td>22.3</td>
										</tr>
										<tr>
											<td id="1432">Orn Horten</td>
											<td><img src="modules/fmsdb/img/flags/s/NOR.gif" alt="Norway">  NOR</td>
											<td>Second Division Group 4</td>
											<td>3K</td>
											<td>Semi-Professional</td>
											<td>4,100</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#A05000"></span></td>
											<td>1904</td>
											<td>21.1</td>
										</tr>
										<tr>
											<td id="1370">Pors</td>
											<td><img src="modules/fmsdb/img/flags/s/NOR.gif" alt="Norway">  NOR</td>
											<td>Second Division Group 4</td>
											<td>10K</td>
											<td>Semi-Professional</td>
											<td>8,000</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#0050D0"></span></td>
											<td>1905</td>
											<td>22.1</td>
										</tr>
										<tr>
											<td id="1300612">Ranheim</td>
											<td><img src="modules/fmsdb/img/flags/s/NOR.gif" alt="Norway">  NOR</td>
											<td>First Division</td>
											<td>5K</td>
											<td>Semi-Professional</td>
											<td>2,850</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#0050D0"></span></td>
											<td>1901</td>
											<td>24.2</td>
										</tr>
										<tr>
											<td id="1374">Raufoss</td>
											<td><img src="modules/fmsdb/img/flags/s/NOR.gif" alt="Norway">  NOR</td>
											<td>First Division</td>
											<td>18K</td>
											<td>Semi-Professional</td>
											<td>2,550</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F8E038"></span></td>
											<td>1918</td>
											<td>25.0</td>
										</tr>
										<tr>
											<td id="1376">Rosenborg</td>
											<td><img src="modules/fmsdb/img/flags/s/NOR.gif" alt="Norway">  NOR</td>
											<td>Premier Division</td>
											<td>1M</td>
											<td>Professional</td>
											<td>21,271</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1917</td>
											<td>23.6</td>
										</tr>
										<tr>
											<td id="1380">Sandefjord</td>
											<td><img src="modules/fmsdb/img/flags/s/NOR.gif" alt="Norway">  NOR</td>
											<td>First Division</td>
											<td>95K</td>
											<td>Professional</td>
											<td>6,982</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#0040F0"></span></td>
											<td>1998</td>
											<td>26.0</td>
										</tr>
										<tr>
											<td id="109106">Sandnes Ulf</td>
											<td><img src="modules/fmsdb/img/flags/s/NOR.gif" alt="Norway">  NOR</td>
											<td>First Division</td>
											<td>14K</td>
											<td>Professional</td>
											<td>3,850</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#78C8F8"></span></td>
											<td>1911</td>
											<td>24.0</td>
										</tr>
										<tr>
											<td id="53021327">Sarpsborg</td>
											<td><img src="modules/fmsdb/img/flags/s/NOR.gif" alt="Norway">  NOR</td>
											<td>Premier Division</td>
											<td>0</td>
											<td>Professional</td>
											<td>8,700</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#0050D0"></span></td>
											<td>2007</td>
											<td>24.7</td>
										</tr>
										<tr>
											<td id="1384">Senja</td>
											<td><img src="modules/fmsdb/img/flags/s/NOR.gif" alt="Norway">  NOR</td>
											<td>Second Division Group 1</td>
											<td>3K</td>
											<td>Semi-Professional</td>
											<td>750</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#0050D0"></span></td>
											<td>1949</td>
											<td>24.1</td>
										</tr>
										<tr>
											<td id="1387">Skeid</td>
											<td><img src="modules/fmsdb/img/flags/s/NOR.gif" alt="Norway">  NOR</td>
											<td>Second Division Group 1</td>
											<td>7K</td>
											<td>Semi-Professional</td>
											<td>15,500</td>
											<td><span class="label" style="background:#0030A0"></span> <span class="label" style="background:#E00000"></span></td>
											<td>1915</td>
											<td>22.7</td>
										</tr>
										<tr>
											<td id="1392">Sogndal</td>
											<td><img src="modules/fmsdb/img/flags/s/NOR.gif" alt="Norway">  NOR</td>
											<td>Premier Division</td>
											<td>47K</td>
											<td>Professional</td>
											<td>5,526</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1926</td>
											<td>24.2</td>
										</tr>
										<tr>
											<td id="1393">Sola</td>
											<td><img src="modules/fmsdb/img/flags/s/NOR.gif" alt="Norway">  NOR</td>
											<td>Second Division Group 3</td>
											<td>1K</td>
											<td>Semi-Professional</td>
											<td>2,500</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F8F880"></span></td>
											<td>1934</td>
											<td>26.2</td>
										</tr>
										<tr>
											<td id="1396">Stab?k</td>
											<td><img src="modules/fmsdb/img/flags/s/NOR.gif" alt="Norway">  NOR</td>
											<td>Premier Division</td>
											<td>237K</td>
											<td>Professional</td>
											<td>5,500</td>
											<td><span class="label" style="background:#002060"></span> <span class="label" style="background:#0050D0"></span></td>
											<td>1912</td>
											<td>22.2</td>
										</tr>
										<tr>
											<td id="1397">Start</td>
											<td><img src="modules/fmsdb/img/flags/s/NOR.gif" alt="Norway">  NOR</td>
											<td>Premier Division</td>
											<td>9K</td>
											<td>Professional</td>
											<td>11,700</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F8D000"></span></td>
											<td>1905</td>
											<td>24.3</td>
										</tr>
										<tr>
											<td id="1399">Stjordals-Blink</td>
											<td><img src="modules/fmsdb/img/flags/s/NOR.gif" alt="Norway">  NOR</td>
											<td>Second Division Group 2</td>
											<td>0</td>
											<td>Semi-Professional</td>
											<td>1,250</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F83000"></span></td>
											<td>1910</td>
											<td>24.0</td>
										</tr>
										<tr>
											<td id="760980">Stord</td>
											<td><img src="modules/fmsdb/img/flags/s/NOR.gif" alt="Norway">  NOR</td>
											<td>Second Division Group 3</td>
											<td>7K</td>
											<td>Semi-Professional</td>
											<td>2,000</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1914</td>
											<td>22.3</td>
										</tr>
										<tr>
											<td id="1401">Strindheim</td>
											<td><img src="modules/fmsdb/img/flags/s/NOR.gif" alt="Norway">  NOR</td>
											<td>Second Division Group 2</td>
											<td>0</td>
											<td>Semi-Professional</td>
											<td>2,500</td>
											<td><span class="label" style="background:#F8F030"></span> <span class="label" style="background:#0040F8"></span></td>
											<td>1926</td>
											<td>23.0</td>
										</tr>
										<tr>
											<td id="1403">Strommen</td>
											<td><img src="modules/fmsdb/img/flags/s/NOR.gif" alt="Norway">  NOR</td>
											<td>First Division</td>
											<td>19K</td>
											<td>Semi-Professional</td>
											<td>1,850</td>
											<td><span class="label" style="background:#E00040"></span> <span class="label" style="background:#A8A8C8"></span></td>
											<td>1911</td>
											<td>25.1</td>
										</tr>
										<tr>
											<td id="1404">Stromsgodset</td>
											<td><img src="modules/fmsdb/img/flags/s/NOR.gif" alt="Norway">  NOR</td>
											<td>Premier Division</td>
											<td>711K</td>
											<td>Professional</td>
											<td>8,935</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#002060"></span></td>
											<td>1907</td>
											<td>25.4</td>
										</tr>
										<tr>
											<td id="757668">Tonsberg</td>
											<td><img src="modules/fmsdb/img/flags/s/NOR.gif" alt="Norway">  NOR</td>
											<td>Second Division Group 4</td>
											<td>24K</td>
											<td>Semi-Professional</td>
											<td>5,000</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#E80000"></span></td>
											<td>2001</td>
											<td>22.8</td>
										</tr>
										<tr>
											<td id="1409">Tromsdalen</td>
											<td><img src="modules/fmsdb/img/flags/s/NOR.gif" alt="Norway">  NOR</td>
											<td>Second Division Group 1</td>
											<td>7K</td>
											<td>Semi-Professional</td>
											<td>4,000</td>
											<td><span class="label" style="background:#E00000"></span> <span class="label" style="background:#002060"></span></td>
											<td>1938</td>
											<td>24.9</td>
										</tr>
										<tr>
											<td id="1410">Tromso</td>
											<td><img src="modules/fmsdb/img/flags/s/NOR.gif" alt="Norway">  NOR</td>
											<td>Premier Division</td>
											<td>5K</td>
											<td>Professional</td>
											<td>6,859</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#E00000"></span></td>
											<td>1920</td>
											<td>24.5</td>
										</tr>
										<tr>
											<td id="1413">Tynset</td>
											<td><img src="modules/fmsdb/img/flags/s/NOR.gif" alt="Norway">  NOR</td>
											<td>Second Division Group 2</td>
											<td>0</td>
											<td>Semi-Professional</td>
											<td>750</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#F00000"></span></td>
											<td>1900</td>
											<td>24.2</td>
										</tr>
										<tr>
											<td id="5000207">Ull/Kisa</td>
											<td><img src="modules/fmsdb/img/flags/s/NOR.gif" alt="Norway">  NOR</td>
											<td>First Division</td>
											<td>0</td>
											<td>Semi-Professional</td>
											<td>3,500</td>
											<td><span class="label" style="background:#008080"></span> <span class="label" style="background:#F8F000"></span></td>
											<td>1894</td>
											<td>24.8</td>
										</tr>
										<tr>
											<td id="1414">Ullern</td>
											<td><img src="modules/fmsdb/img/flags/s/NOR.gif" alt="Norway">  NOR</td>
											<td>Second Division Group 1</td>
											<td>48K</td>
											<td>Semi-Professional</td>
											<td>3,200</td>
											<td><span class="label" style="background:#E00000"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1909</td>
											<td>21.3</td>
										</tr>
										<tr>
											<td id="1426">Valerenga</td>
											<td><img src="modules/fmsdb/img/flags/s/NOR.gif" alt="Norway">  NOR</td>
											<td>Premier Division</td>
											<td>47K</td>
											<td>Professional</td>
											<td>27,182</td>
											<td><span class="label" style="background:#E00000"></span> <span class="label" style="background:#0060F8"></span></td>
											<td>1913</td>
											<td>24.8</td>
										</tr>
										<tr>
											<td id="1416">Vard</td>
											<td><img src="modules/fmsdb/img/flags/s/NOR.gif" alt="Norway">  NOR</td>
											<td>Second Division Group 3</td>
											<td>7K</td>
											<td>Semi-Professional</td>
											<td>8,983</td>
											<td><span class="label" style="background:#0030A0"></span> <span class="label" style="background:#E00000"></span></td>
											<td>1916</td>
											<td>22.5</td>
										</tr>
										<tr>
											<td id="1419">Vidar</td>
											<td><img src="modules/fmsdb/img/flags/s/NOR.gif" alt="Norway">  NOR</td>
											<td>Second Division Group 3</td>
											<td>0</td>
											<td>Semi-Professional</td>
											<td>4,650</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#E00000"></span></td>
											<td>1906</td>
											<td>24.3</td>
										</tr>
										<tr>
											<td id="1422">Viking</td>
											<td><img src="modules/fmsdb/img/flags/s/NOR.gif" alt="Norway">  NOR</td>
											<td>Premier Division</td>
											<td>474K</td>
											<td>Professional</td>
											<td>16,300</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#002060"></span></td>
											<td>1899</td>
											<td>22.4</td>
										</tr>
										<tr>
											<td id="1423">Vindbjart</td>
											<td><img src="modules/fmsdb/img/flags/s/NOR.gif" alt="Norway">  NOR</td>
											<td>Second Division Group 4</td>
											<td>5K</td>
											<td>Semi-Professional</td>
											<td>3,000</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#0030A0"></span></td>
											<td>1997</td>
											<td>23.1</td>
										</tr>
										<tr>
											<td id="117754">Alianza</td>
											<td><img src="modules/fmsdb/img/flags/s/PER.gif" alt="Peru">  PER</td>
											<td>First Division</td>
											<td>77K</td>
											<td>Professional</td>
											<td>35,000</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#101050"></span></td>
											<td>1901</td>
											<td>27.3</td>
										</tr>
										<tr>
											<td id="308104">Alianza Atletico</td>
											<td><img src="modules/fmsdb/img/flags/s/PER.gif" alt="Peru">  PER</td>
											<td>First Division</td>
											<td>77K</td>
											<td>Professional</td>
											<td>10,000</td>
											<td><span class="label" style="background:#0030A0"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1920</td>
											<td>26.1</td>
										</tr>
										<tr>
											<td id="77005834">Ayacucho FC</td>
											<td><img src="modules/fmsdb/img/flags/s/PER.gif" alt="Peru">  PER</td>
											<td>First Division</td>
											<td>61K</td>
											<td>Professional</td>
											<td>15,000</td>
											<td><span class="label" style="background:#F08000"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>2007</td>
											<td>26.4</td>
										</tr>
										<tr>
											<td id="5290566">Cesar Vallejo</td>
											<td><img src="modules/fmsdb/img/flags/s/PER.gif" alt="Peru">  PER</td>
											<td>First Division</td>
											<td>615K</td>
											<td>Professional</td>
											<td>25,000</td>
											<td><span class="label" style="background:#002060"></span> <span class="label" style="background:#F84008"></span></td>
											<td>1996</td>
											<td>27.1</td>
										</tr>
										<tr>
											<td id="77016700">Comerciantes</td>
											<td><img src="modules/fmsdb/img/flags/s/PER.gif" alt="Peru">  PER</td>
											<td>First Division</td>
											<td>46K</td>
											<td>Professional</td>
											<td>8,000</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#503098"></span></td>
											<td>2002</td>
											<td>28.5</td>
										</tr>
										<tr>
											<td id="1449">Cristal</td>
											<td><img src="modules/fmsdb/img/flags/s/PER.gif" alt="Peru">  PER</td>
											<td>First Division</td>
											<td>461K</td>
											<td>Professional</td>
											<td>18,000</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#00F8F8"></span></td>
											<td>1955</td>
											<td>24.6</td>
										</tr>
										<tr>
											<td id="77044579">Defensor La Bocana</td>
											<td><img src="modules/fmsdb/img/flags/s/PER.gif" alt="Peru">  PER</td>
											<td>First Division</td>
											<td>31K</td>
											<td>Professional</td>
											<td>10,000</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#68D0E0"></span></td>
											<td>1987</td>
											<td>27.8</td>
										</tr>
										<tr>
											<td id="308111">Juan Aurich</td>
											<td><img src="modules/fmsdb/img/flags/s/PER.gif" alt="Peru">  PER</td>
											<td>First Division</td>
											<td>307K</td>
											<td>Professional</td>
											<td>10,000</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#E00000"></span></td>
											<td>1922</td>
											<td>25.0</td>
										</tr>
										<tr>
											<td id="303815">Melgar</td>
											<td><img src="modules/fmsdb/img/flags/s/PER.gif" alt="Peru">  PER</td>
											<td>First Division</td>
											<td>346K</td>
											<td>Professional</td>
											<td>50,000</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#E00000"></span></td>
											<td>1915</td>
											<td>27.3</td>
										</tr>
										<tr>
											<td id="1446">Municipal</td>
											<td><img src="modules/fmsdb/img/flags/s/PER.gif" alt="Peru">  PER</td>
											<td>First Division</td>
											<td>192K</td>
											<td>Professional</td>
											<td>12,000</td>
											<td><span class="label" style="background:#E00000"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1935</td>
											<td>26.7</td>
										</tr>
										<tr>
											<td id="77017082">Real Garcilaso</td>
											<td><img src="modules/fmsdb/img/flags/s/PER.gif" alt="Peru">  PER</td>
											<td>First Division</td>
											<td>307K</td>
											<td>Professional</td>
											<td>42,000</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#68C8C8"></span></td>
											<td>2009</td>
											<td>25.4</td>
										</tr>
										<tr>
											<td id="77005796">Sport Huancayo</td>
											<td><img src="modules/fmsdb/img/flags/s/PER.gif" alt="Peru">  PER</td>
											<td>First Division</td>
											<td>115K</td>
											<td>Professional</td>
											<td>20,000</td>
											<td><span class="label" style="background:#F8F000"></span> <span class="label" style="background:#E00000"></span></td>
											<td>2007</td>
											<td>29.3</td>
										</tr>
										<tr>
											<td id="77016717">Union Comercio</td>
											<td><img src="modules/fmsdb/img/flags/s/PER.gif" alt="Peru">  PER</td>
											<td>First Division</td>
											<td>115K</td>
											<td>Professional</td>
											<td>10,000</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#E00808"></span></td>
											<td>1994</td>
											<td>25.9</td>
										</tr>
										<tr>
											<td id="8832487">Universidad San Martin</td>
											<td><img src="modules/fmsdb/img/flags/s/PER.gif" alt="Peru">  PER</td>
											<td>First Division</td>
											<td>154K</td>
											<td>Professional</td>
											<td>18,000</td>
											<td><span class="label" style="background:#002060"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>2004</td>
											<td>22.8</td>
										</tr>
										<tr>
											<td id="1450">Universitario</td>
											<td><img src="modules/fmsdb/img/flags/s/PER.gif" alt="Peru">  PER</td>
											<td>First Division</td>
											<td>61K</td>
											<td>Professional</td>
											<td>80,000</td>
											<td><span class="label" style="background:#880828"></span> <span class="label" style="background:#F8F8E0"></span></td>
											<td>1924</td>
											<td>25.6</td>
										</tr>
										<tr>
											<td id="5290571">UTC</td>
											<td><img src="modules/fmsdb/img/flags/s/PER.gif" alt="Peru">  PER</td>
											<td>First Division</td>
											<td>92K</td>
											<td>Professional</td>
											<td>18,000</td>
											<td><span class="label" style="background:#E00000"></span> <span class="label" style="background:#F8F8E0"></span></td>
											<td>1964</td>
											<td>27.1</td>
										</tr>
										<tr>
											<td id="129580">Arka</td>
											<td><img src="modules/fmsdb/img/flags/s/POL.gif" alt="Poland">  POL</td>
											<td>LOTTO Ekstraklasa</td>
											<td>30K</td>
											<td>Professional</td>
											<td>15,139</td>
											<td><span class="label" style="background:#0030A0"></span> <span class="label" style="background:#F8D000"></span></td>
											<td>1929</td>
											<td>27.1</td>
										</tr>
										<tr>
											<td id="96000060">Bruk-Bet Termalica</td>
											<td><img src="modules/fmsdb/img/flags/s/POL.gif" alt="Poland">  POL</td>
											<td>LOTTO Ekstraklasa</td>
											<td>60K</td>
											<td>Professional</td>
											<td>4,660</td>
											<td><span class="label" style="background:#F87000"></span> <span class="label" style="background:#F87000"></span></td>
											<td>1922</td>
											<td>26.2</td>
										</tr>
										<tr>
											<td id="96023087">Bytovia</td>
											<td><img src="modules/fmsdb/img/flags/s/POL.gif" alt="Poland">  POL</td>
											<td>First Division</td>
											<td>20K</td>
											<td>Professional</td>
											<td>2,043</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#E00000"></span></td>
											<td>1946</td>
											<td>25.6</td>
										</tr>
										<tr>
											<td id="96012108">Chojniczanka</td>
											<td><img src="modules/fmsdb/img/flags/s/POL.gif" alt="Poland">  POL</td>
											<td>First Division</td>
											<td>0</td>
											<td>Professional</td>
											<td>3,500</td>
											<td><span class="label" style="background:#F8F000"></span> <span class="label" style="background:#B00000"></span></td>
											<td>1930</td>
											<td>25.6</td>
										</tr>
										<tr>
											<td id="717313">Chrobry</td>
											<td><img src="modules/fmsdb/img/flags/s/POL.gif" alt="Poland">  POL</td>
											<td>First Division</td>
											<td>30K</td>
											<td>Professional</td>
											<td>2,817</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F88000"></span></td>
											<td>1946</td>
											<td>23.6</td>
										</tr>
										<tr>
											<td id="129583">Cracovia</td>
											<td><img src="modules/fmsdb/img/flags/s/POL.gif" alt="Poland">  POL</td>
											<td>LOTTO Ekstraklasa</td>
											<td>401K</td>
											<td>Professional</td>
											<td>15,016</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#E00000"></span></td>
											<td>1906</td>
											<td>25.7</td>
										</tr>
										<tr>
											<td id="1451">GKS Katowice</td>
											<td><img src="modules/fmsdb/img/flags/s/POL.gif" alt="Poland">  POL</td>
											<td>First Division</td>
											<td>72K</td>
											<td>Professional</td>
											<td>6,710</td>
											<td><span class="label" style="background:#F8F000"></span> <span class="label" style="background:#000000"></span></td>
											<td>1964</td>
											<td>24.8</td>
										</tr>
										<tr>
											<td id="54003060">GKS Tychy</td>
											<td><img src="modules/fmsdb/img/flags/s/POL.gif" alt="Poland">  POL</td>
											<td>First Division</td>
											<td>29K</td>
											<td>Professional</td>
											<td>15,150</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
											<td>1971</td>
											<td>25.7</td>
										</tr>
										<tr>
											<td id="129565">Gornik</td>
											<td><img src="modules/fmsdb/img/flags/s/POL.gif" alt="Poland">  POL</td>
											<td>LOTTO Ekstraklasa</td>
											<td>20K</td>
											<td>Professional</td>
											<td>15,500</td>
											<td><span class="label" style="background:#101010"></span> <span class="label" style="background:#08C848"></span></td>
											<td>1979</td>
											<td>28.5</td>
										</tr>
										<tr>
											<td id="1452">Gornik Zabrze</td>
											<td><img src="modules/fmsdb/img/flags/s/POL.gif" alt="Poland">  POL</td>
											<td>First Division</td>
											<td>0</td>
											<td>Professional</td>
											<td>22,400</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
											<td>1948</td>
											<td>24.7</td>
										</tr>
										<tr>
											<td id="96006550">Gwarek</td>
											<td><img src="modules/fmsdb/img/flags/s/POL.gif" alt="Poland">  POL</td>
											<td>100000230</td>
											<td>0</td>
											<td>Semi-Professional</td>
											<td>250</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#F00000"></span></td>
											<td>1974</td>
											<td>19.7</td>
										</tr>
										<tr>
											<td id="710052">Jagiellonia</td>
											<td><img src="modules/fmsdb/img/flags/s/POL.gif" alt="Poland">  POL</td>
											<td>LOTTO Ekstraklasa</td>
											<td>502K</td>
											<td>Professional</td>
											<td>22,386</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
											<td>1920</td>
											<td>25.0</td>
										</tr>
										<tr>
											<td id="1469">KGHM Zaglebie</td>
											<td><img src="modules/fmsdb/img/flags/s/POL.gif" alt="Poland">  POL</td>
											<td>LOTTO Ekstraklasa</td>
											<td>401K</td>
											<td>Professional</td>
											<td>16,068</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F84000"></span></td>
											<td>1946</td>
											<td>25.8</td>
										</tr>
										<tr>
											<td id="129577">Korona</td>
											<td><img src="modules/fmsdb/img/flags/s/POL.gif" alt="Poland">  POL</td>
											<td>LOTTO Ekstraklasa</td>
											<td>10K</td>
											<td>Professional</td>
											<td>15,550</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
											<td>1973</td>
											<td>25.0</td>
										</tr>
										<tr>
											<td id="1455">Lech</td>
											<td><img src="modules/fmsdb/img/flags/s/POL.gif" alt="Poland">  POL</td>
											<td>LOTTO Ekstraklasa</td>
											<td>301K</td>
											<td>Professional</td>
											<td>43,269</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
											<td>1922</td>
											<td>25.7</td>
										</tr>
										<tr>
											<td id="715912">Lechia</td>
											<td><img src="modules/fmsdb/img/flags/s/POL.gif" alt="Poland">  POL</td>
											<td>LOTTO Ekstraklasa</td>
											<td>602K</td>
											<td>Professional</td>
											<td>41,620</td>
											<td><span class="label" style="background:#00A030"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1945</td>
											<td>26.5</td>
										</tr>
										<tr>
											<td id="1456">Legia</td>
											<td><img src="modules/fmsdb/img/flags/s/POL.gif" alt="Poland">  POL</td>
											<td>LOTTO Ekstraklasa</td>
											<td>1M</td>
											<td>Professional</td>
											<td>30,967</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1916</td>
											<td>27.3</td>
										</tr>
										<tr>
											<td id="710017">Miedz</td>
											<td><img src="modules/fmsdb/img/flags/s/POL.gif" alt="Poland">  POL</td>
											<td>First Division</td>
											<td>40K</td>
											<td>Professional</td>
											<td>6,194</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#0050D0"></span></td>
											<td>1971</td>
											<td>27.6</td>
										</tr>
										<tr>
											<td id="54007052">MKS Kluczbork</td>
											<td><img src="modules/fmsdb/img/flags/s/POL.gif" alt="Poland">  POL</td>
											<td>First Division</td>
											<td>0</td>
											<td>Professional</td>
											<td>2,586</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>2003</td>
											<td>25.2</td>
										</tr>
										<tr>
											<td id="54015271">Olimpia Grudziadz</td>
											<td><img src="modules/fmsdb/img/flags/s/POL.gif" alt="Poland">  POL</td>
											<td>First Division</td>
											<td>10K</td>
											<td>Professional</td>
											<td>5,000</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#48A068"></span></td>
											<td>1923</td>
											<td>23.9</td>
										</tr>
										<tr>
											<td id="714209">Piast</td>
											<td><img src="modules/fmsdb/img/flags/s/POL.gif" alt="Poland">  POL</td>
											<td>LOTTO Ekstraklasa</td>
											<td>201K</td>
											<td>Professional</td>
											<td>10,037</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
											<td>1945</td>
											<td>24.5</td>
										</tr>
										<tr>
											<td id="1458">Plock</td>
											<td><img src="modules/fmsdb/img/flags/s/POL.gif" alt="Poland">  POL</td>
											<td>LOTTO Ekstraklasa</td>
											<td>20K</td>
											<td>Professional</td>
											<td>10,978</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
											<td>1947</td>
											<td>26.4</td>
										</tr>
										<tr>
											<td id="714200">Podbeskidzie</td>
											<td><img src="modules/fmsdb/img/flags/s/POL.gif" alt="Poland">  POL</td>
											<td>First Division</td>
											<td>20K</td>
											<td>Professional</td>
											<td>15,292</td>
											<td><span class="label" style="background:#E00000"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1995</td>
											<td>27.1</td>
										</tr>
										<tr>
											<td id="1459">Pogon</td>
											<td><img src="modules/fmsdb/img/flags/s/POL.gif" alt="Poland">  POL</td>
											<td>LOTTO Ekstraklasa</td>
											<td>100K</td>
											<td>Professional</td>
											<td>18,027</td>
											<td><span class="label" style="background:#880818"></span> <span class="label" style="background:#001040"></span></td>
											<td>1948</td>
											<td>23.9</td>
										</tr>
										<tr>
											<td id="96020194">Pogon Siedlce</td>
											<td><img src="modules/fmsdb/img/flags/s/POL.gif" alt="Poland">  POL</td>
											<td>First Division</td>
											<td>6K</td>
											<td>Professional</td>
											<td>2,900</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#0050D0"></span></td>
											<td>1944</td>
											<td>25.0</td>
										</tr>
										<tr>
											<td id="1462">Ruch</td>
											<td><img src="modules/fmsdb/img/flags/s/POL.gif" alt="Poland">  POL</td>
											<td>LOTTO Ekstraklasa</td>
											<td>20K</td>
											<td>Professional</td>
											<td>10,000</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#0010D8"></span></td>
											<td>1920</td>
											<td>25.2</td>
										</tr>
										<tr>
											<td id="714230">Sandecja</td>
											<td><img src="modules/fmsdb/img/flags/s/POL.gif" alt="Poland">  POL</td>
											<td>First Division</td>
											<td>0</td>
											<td>Professional</td>
											<td>4,472</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
											<td>1910</td>
											<td>25.1</td>
										</tr>
										<tr>
											<td id="1300885">Slask</td>
											<td><img src="modules/fmsdb/img/flags/s/POL.gif" alt="Poland">  POL</td>
											<td>LOTTO Ekstraklasa</td>
											<td>80K</td>
											<td>Professional</td>
											<td>44,308</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
											<td>1947</td>
											<td>26.4</td>
										</tr>
										<tr>
											<td id="54007042">SMS Lodz</td>
											<td><img src="modules/fmsdb/img/flags/s/POL.gif" alt="Poland">  POL</td>
											<td>100000232</td>
											<td>0</td>
											<td>Semi-Professional</td>
											<td>2,000</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#0050D0"></span></td>
											<td>1999</td>
											<td>20.0</td>
										</tr>
										<tr>
											<td id="715911">Stal Mielec</td>
											<td><img src="modules/fmsdb/img/flags/s/POL.gif" alt="Poland">  POL</td>
											<td>First Division</td>
											<td>10K</td>
											<td>Professional</td>
											<td>6,864</td>
											<td><span class="label" style="background:#2858B0"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1939</td>
											<td>23.8</td>
										</tr>
										<tr>
											<td id="96021840">Stomil</td>
											<td><img src="modules/fmsdb/img/flags/s/POL.gif" alt="Poland">  POL</td>
											<td>First Division</td>
											<td>0</td>
											<td>Professional</td>
											<td>16,800</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
											<td>1945</td>
											<td>25.5</td>
										</tr>
										<tr>
											<td id="722097">Wigry</td>
											<td><img src="modules/fmsdb/img/flags/s/POL.gif" alt="Poland">  POL</td>
											<td>First Division</td>
											<td>10K</td>
											<td>Professional</td>
											<td>2,910</td>
											<td><span class="label" style="background:#0050D0"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1947</td>
											<td>24.8</td>
										</tr>
										<tr>
											<td id="1300881">Wisla</td>
											<td><img src="modules/fmsdb/img/flags/s/POL.gif" alt="Poland">  POL</td>
											<td>LOTTO Ekstraklasa</td>
											<td>120K</td>
											<td>Professional</td>
											<td>33,130</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#C80000"></span></td>
											<td>1906</td>
											<td>26.2</td>
										</tr>
										<tr>
											<td id="96023666">Wisla Pulawy</td>
											<td><img src="modules/fmsdb/img/flags/s/POL.gif" alt="Poland">  POL</td>
											<td>First Division</td>
											<td>31K</td>
											<td>Professional</td>
											<td>4,418</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
											<td>1923</td>
											<td>25.2</td>
										</tr>
										<tr>
											<td id="129585">Zaglebie Sosnowiec</td>
											<td><img src="modules/fmsdb/img/flags/s/POL.gif" alt="Poland">  POL</td>
											<td>First Division</td>
											<td>16K</td>
											<td>Professional</td>
											<td>5,750</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1906</td>
											<td>24.8</td>
										</tr>
										<tr>
											<td id="714240">Znicz Pruszkow</td>
											<td><img src="modules/fmsdb/img/flags/s/POL.gif" alt="Poland">  POL</td>
											<td>First Division</td>
											<td>25K</td>
											<td>Professional</td>
											<td>1,977</td>
											<td><span class="label" style="background:#E00000"></span> <span class="label" style="background:#F8F000"></span></td>
											<td>1923</td>
											<td>24.8</td>
										</tr>
										<tr>
											<td id="55001110">1? Dezembro</td>
											<td><img src="modules/fmsdb/img/flags/s/POR.gif" alt="Portugal">  POR</td>
											<td>PT Championship</td>
											<td>4K</td>
											<td>Semi-Professional</td>
											<td>2,000</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#E00000"></span></td>
											<td>1880</td>
											<td>22.4</td>
										</tr>
										<tr>
											<td id="2388">Ac. Viseu</td>
											<td><img src="modules/fmsdb/img/flags/s/POR.gif" alt="Portugal">  POR</td>
											<td>Second League</td>
											<td>0</td>
											<td>Professional</td>
											<td>14,368</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#000000"></span></td>
											<td>1914</td>
											<td>25.0</td>
										</tr>
										<tr>
											<td id="2393">Academica</td>
											<td><img src="modules/fmsdb/img/flags/s/POR.gif" alt="Portugal">  POR</td>
											<td>Second League</td>
											<td>43K</td>
											<td>Professional</td>
											<td>29,744</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#000000"></span></td>
											<td>1876</td>
											<td>24.4</td>
										</tr>
										<tr>
											<td id="736267">Academica/SF</td>
											<td><img src="modules/fmsdb/img/flags/s/POR.gif" alt="Portugal">  POR</td>
											<td>PT Championship</td>
											<td>861</td>
											<td>Semi-Professional</td>
											<td>2,500</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#000000"></span></td>
											<td>1887</td>
											<td>22.8</td>
										</tr>
										<tr>
											<td id="55027268">AD Nogueirense</td>
											<td><img src="modules/fmsdb/img/flags/s/POR.gif" alt="Portugal">  POR</td>
											<td>PT Championship</td>
											<td>4K</td>
											<td>Semi-Professional</td>
											<td>3,500</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#E00000"></span></td>
											<td>1973</td>
											<td>23.9</td>
										</tr>
										<tr>
											<td id="55001078">AD Oliveirense</td>
											<td><img src="modules/fmsdb/img/flags/s/POR.gif" alt="Portugal">  POR</td>
											<td>PT Championship</td>
											<td>4K</td>
											<td>Semi-Professional</td>
											<td>3,500</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#E00000"></span></td>
											<td>1952</td>
											<td>23.9</td>
										</tr>
										<tr>
											<td id="2428">AD Sanjoanense</td>
											<td><img src="modules/fmsdb/img/flags/s/POR.gif" alt="Portugal">  POR</td>
											<td>PT Championship</td>
											<td>4K</td>
											<td>Semi-Professional</td>
											<td>11,000</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#000000"></span></td>
											<td>1924</td>
											<td>22.5</td>
										</tr>
										<tr>
											<td id="2462">Agueda</td>
											<td><img src="modules/fmsdb/img/flags/s/POR.gif" alt="Portugal">  POR</td>
											<td>PT Championship</td>
											<td>4K</td>
											<td>Semi-Professional</td>
											<td>10,000</td>
											<td><span class="label" style="background:#0030A0"></span> <span class="label" style="background:#E00808"></span></td>
											<td>1924</td>
											<td>24.5</td>
										</tr>
										<tr>
											<td id="2429">Alcanenense</td>
											<td><img src="modules/fmsdb/img/flags/s/POR.gif" alt="Portugal">  POR</td>
											<td>PT Championship</td>
											<td>3K</td>
											<td>Semi-Professional</td>
											<td>5,400</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F8F000"></span></td>
											<td>1942</td>
											<td>23.0</td>
										</tr>
										<tr>
											<td id="84107060">Alianca Gandra</td>
											<td><img src="modules/fmsdb/img/flags/s/POR.gif" alt="Portugal">  POR</td>
											<td>PT Championship</td>
											<td>4K</td>
											<td>Semi-Professional</td>
											<td>3,000</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#E00000"></span></td>
											<td>1946</td>
											<td>26.6</td>
										</tr>
										<tr>
											<td id="55007141">Aljustrelense</td>
											<td><img src="modules/fmsdb/img/flags/s/POR.gif" alt="Portugal">  POR</td>
											<td>PT Championship</td>
											<td>4K</td>
											<td>Semi-Professional</td>
											<td>5,000</td>
											<td><span class="label" style="background:#E00000"></span> <span class="label" style="background:#0030A0"></span></td>
											<td>1933</td>
											<td>25.6</td>
										</tr>
										<tr>
											<td id="55001122">Almancilense</td>
											<td><img src="modules/fmsdb/img/flags/s/POR.gif" alt="Portugal">  POR</td>
											<td>PT Championship</td>
											<td>4K</td>
											<td>Semi-Professional</td>
											<td>1,500</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#E00000"></span></td>
											<td>1935</td>
											<td>24.2</td>
										</tr>
										<tr>
											<td id="109042">Amarante</td>
											<td><img src="modules/fmsdb/img/flags/s/POR.gif" alt="Portugal">  POR</td>
											<td>PT Championship</td>
											<td>4K</td>
											<td>Semi-Professional</td>
											<td>7,500</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1923</td>
											<td>24.0</td>
										</tr>
										<tr>
											<td id="2460">Anadia</td>
											<td><img src="modules/fmsdb/img/flags/s/POR.gif" alt="Portugal">  POR</td>
											<td>PT Championship</td>
											<td>4K</td>
											<td>Semi-Professional</td>
											<td>7,000</td>
											<td><span class="label" style="background:#0050D0"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1926</td>
											<td>23.6</td>
										</tr>
										<tr>
											<td id="729459">Angrense</td>
											<td><img src="modules/fmsdb/img/flags/s/POR.gif" alt="Portugal">  POR</td>
											<td>PT Championship</td>
											<td>4K</td>
											<td>Semi-Professional</td>
											<td>5,000</td>
											<td><span class="label" style="background:#E00000"></span> <span class="label" style="background:#E00808"></span></td>
											<td>1929</td>
											<td>25.2</td>
										</tr>
										<tr>
											<td id="84107158">ARC Oleiros</td>
											<td><img src="modules/fmsdb/img/flags/s/POR.gif" alt="Portugal">  POR</td>
											<td>PT Championship</td>
											<td>4K</td>
											<td>Semi-Professional</td>
											<td>3,000</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
											<td>1976</td>
											<td>23.8</td>
										</tr>
										<tr>
											<td id="84107167">Armacenenses</td>
											<td><img src="modules/fmsdb/img/flags/s/POR.gif" alt="Portugal">  POR</td>
											<td>PT Championship</td>
											<td>4K</td>
											<td>Semi-Professional</td>
											<td>1,500</td>
											<td><span class="label" style="background:#1068F8"></span> <span class="label" style="background:#1068F8"></span></td>
											<td>1935</td>
											<td>27.4</td>
										</tr>
										<tr>
											<td id="729500">Arouca</td>
											<td><img src="modules/fmsdb/img/flags/s/POR.gif" alt="Portugal">  POR</td>
											<td>Premier League</td>
											<td>151K</td>
											<td>Professional</td>
											<td>5,000</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
											<td>1952</td>
											<td>25.3</td>
										</tr>
										<tr>
											<td id="2440">Atletico CP (SAD)</td>
											<td><img src="modules/fmsdb/img/flags/s/POR.gif" alt="Portugal">  POR</td>
											<td>PT Championship</td>
											<td>4K</td>
											<td>Semi-Professional</td>
											<td>3,500</td>
											<td><span class="label" style="background:#002060"></span> <span class="label" style="background:#F8F000"></span></td>
											<td>1942</td>
											<td>21.7</td>
										</tr>
										<tr>
											<td id="1472">Aves</td>
											<td><img src="modules/fmsdb/img/flags/s/POR.gif" alt="Portugal">  POR</td>
											<td>Second League</td>
											<td>65K</td>
											<td>Professional</td>
											<td>5,441</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
											<td>1930</td>
											<td>26.5</td>
										</tr>
										<tr>
											<td id="2437">Barreirense</td>
											<td><img src="modules/fmsdb/img/flags/s/POR.gif" alt="Portugal">  POR</td>
											<td>PT Championship</td>
											<td>4K</td>
											<td>Semi-Professional</td>
											<td>2,480</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#E00000"></span></td>
											<td>1911</td>
											<td>23.6</td>
										</tr>
										<tr>
											<td id="1474">Belenenses</td>
											<td><img src="modules/fmsdb/img/flags/s/POR.gif" alt="Portugal">  POR</td>
											<td>Premier League</td>
											<td>129K</td>
											<td>Professional</td>
											<td>19,856</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#0030A0"></span></td>
											<td>1919</td>
											<td>23.8</td>
										</tr>
										<tr>
											<td id="2427">Benfica CB</td>
											<td><img src="modules/fmsdb/img/flags/s/POR.gif" alt="Portugal">  POR</td>
											<td>PT Championship</td>
											<td>13K</td>
											<td>Semi-Professional</td>
											<td>12,000</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#E00000"></span></td>
											<td>1924</td>
											<td>24.3</td>
										</tr>
										<tr>
											<td id="1471">Boavista</td>
											<td><img src="modules/fmsdb/img/flags/s/POR.gif" alt="Portugal">  POR</td>
											<td>Premier League</td>
											<td>108K</td>
											<td>Professional</td>
											<td>30,000</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
											<td>1903</td>
											<td>24.1</td>
										</tr>
										<tr>
											<td id="1488">Braga</td>
											<td><img src="modules/fmsdb/img/flags/s/POR.gif" alt="Portugal">  POR</td>
											<td>Premier League</td>
											<td>3M</td>
											<td>Professional</td>
											<td>30,286</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#F00000"></span></td>
											<td>1921</td>
											<td>24.8</td>
										</tr>
										<tr>
											<td id="55000307">Braga B</td>
											<td><img src="modules/fmsdb/img/flags/s/POR.gif" alt="Portugal">  POR</td>
											<td>Second League</td>
											<td>26K</td>
											<td>Professional</td>
											<td>30,000</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#F00000"></span></td>
											<td>0</td>
											<td>20.6</td>
										</tr>
										<tr>
											<td id="725010">Braganca</td>
											<td><img src="modules/fmsdb/img/flags/s/POR.gif" alt="Portugal">  POR</td>
											<td>PT Championship</td>
											<td>7K</td>
											<td>Semi-Professional</td>
											<td>8,393</td>
											<td><span class="label" style="background:#0050D0"></span> <span class="label" style="background:#F8F000"></span></td>
											<td>1947</td>
											<td>25.1</td>
										</tr>
										<tr>
											<td id="2420">Caldas</td>
											<td><img src="modules/fmsdb/img/flags/s/POR.gif" alt="Portugal">  POR</td>
											<td>PT Championship</td>
											<td>4K</td>
											<td>Semi-Professional</td>
											<td>13,000</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#000000"></span></td>
											<td>1916</td>
											<td>24.0</td>
										</tr>
										<tr>
											<td id="2435">Camacha</td>
											<td><img src="modules/fmsdb/img/flags/s/POR.gif" alt="Portugal">  POR</td>
											<td>PT Championship</td>
											<td>4K</td>
											<td>Semi-Professional</td>
											<td>3,500</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#0078F8"></span></td>
											<td>1978</td>
											<td>27.3</td>
										</tr>
										<tr>
											<td id="55001114">Canical</td>
											<td><img src="modules/fmsdb/img/flags/s/POR.gif" alt="Portugal">  POR</td>
											<td>PT Championship</td>
											<td>861</td>
											<td>Semi-Professional</td>
											<td>1,000</td>
											<td><span class="label" style="background:#E00000"></span> <span class="label" style="background:#F8F000"></span></td>
											<td>1981</td>
											<td>26.0</td>
										</tr>
										<tr>
											<td id="55065687">Carapinheirense</td>
											<td><img src="modules/fmsdb/img/flags/s/POR.gif" alt="Portugal">  POR</td>
											<td>PT Championship</td>
											<td>861</td>
											<td>Semi-Professional</td>
											<td>2,000</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
											<td>1959</td>
											<td>23.1</td>
										</tr>
										<tr>
											<td id="2443">Casa Pia</td>
											<td><img src="modules/fmsdb/img/flags/s/POR.gif" alt="Portugal">  POR</td>
											<td>PT Championship</td>
											<td>13K</td>
											<td>Semi-Professional</td>
											<td>2,574</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#000000"></span></td>
											<td>1920</td>
											<td>24.5</td>
										</tr>
										<tr>
											<td id="733653">Cesarense</td>
											<td><img src="modules/fmsdb/img/flags/s/POR.gif" alt="Portugal">  POR</td>
											<td>PT Championship</td>
											<td>4K</td>
											<td>Semi-Professional</td>
											<td>5,000</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#000000"></span></td>
											<td>1932</td>
											<td>22.0</td>
										</tr>
										<tr>
											<td id="1480">Chaves</td>
											<td><img src="modules/fmsdb/img/flags/s/POR.gif" alt="Portugal">  POR</td>
											<td>Premier League</td>
											<td>129K</td>
											<td>Professional</td>
											<td>22,600</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
											<td>1949</td>
											<td>24.8</td>
										</tr>
										<tr>
											<td id="729472">Cinfaes</td>
											<td><img src="modules/fmsdb/img/flags/s/POR.gif" alt="Portugal">  POR</td>
											<td>PT Championship</td>
											<td>4K</td>
											<td>Semi-Professional</td>
											<td>5,000</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#0050D0"></span></td>
											<td>1931</td>
											<td>24.5</td>
										</tr>
										<tr>
											<td id="55012042">Coimbroes</td>
											<td><img src="modules/fmsdb/img/flags/s/POR.gif" alt="Portugal">  POR</td>
											<td>PT Championship</td>
											<td>4K</td>
											<td>Semi-Professional</td>
											<td>3,000</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#006030"></span></td>
											<td>1920</td>
											<td>24.4</td>
										</tr>
										<tr>
											<td id="725036">Cova da Piedade</td>
											<td><img src="modules/fmsdb/img/flags/s/POR.gif" alt="Portugal">  POR</td>
											<td>Second League</td>
											<td>43K</td>
											<td>Professional</td>
											<td>3,500</td>
											<td><span class="label" style="background:#901000"></span> <span class="label" style="background:#901000"></span></td>
											<td>1947</td>
											<td>27.0</td>
										</tr>
										<tr>
											<td id="2461">Estarreja</td>
											<td><img src="modules/fmsdb/img/flags/s/POR.gif" alt="Portugal">  POR</td>
											<td>PT Championship</td>
											<td>4K</td>
											<td>Semi-Professional</td>
											<td>2,500</td>
											<td><span class="label" style="background:#0030A0"></span> <span class="label" style="background:#F87000"></span></td>
											<td>1944</td>
											<td>24.4</td>
										</tr>
										<tr>
											<td id="2390">Estoril</td>
											<td><img src="modules/fmsdb/img/flags/s/POR.gif" alt="Portugal">  POR</td>
											<td>Premier League</td>
											<td>215K</td>
											<td>Professional</td>
											<td>8,000</td>
											<td><span class="label" style="background:#E8E010"></span> <span class="label" style="background:#F8D000"></span></td>
											<td>1939</td>
											<td>23.3</td>
										</tr>
										<tr>
											<td id="729461">Fabril do Barreiro</td>
											<td><img src="modules/fmsdb/img/flags/s/POR.gif" alt="Portugal">  POR</td>
											<td>PT Championship</td>
											<td>2K</td>
											<td>Semi-Professional</td>
											<td>22,500</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#008030"></span></td>
											<td>1937</td>
											<td>25.6</td>
										</tr>
										<tr>
											<td id="2410">Fafe</td>
											<td><img src="modules/fmsdb/img/flags/s/POR.gif" alt="Portugal">  POR</td>
											<td>Second League</td>
											<td>43K</td>
											<td>Professional</td>
											<td>14,000</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
											<td>1958</td>
											<td>25.0</td>
										</tr>
										<tr>
											<td id="2397">Famalicao</td>
											<td><img src="modules/fmsdb/img/flags/s/POR.gif" alt="Portugal">  POR</td>
											<td>Second League</td>
											<td>43K</td>
											<td>Professional</td>
											<td>10,000</td>
											<td><span class="label" style="background:#0050D0"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1931</td>
											<td>26.7</td>
										</tr>
										<tr>
											<td id="1485">Farense</td>
											<td><img src="modules/fmsdb/img/flags/s/POR.gif" alt="Portugal">  POR</td>
											<td>PT Championship</td>
											<td>17K</td>
											<td>Semi-Professional</td>
											<td>12,000</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1910</td>
											<td>24.6</td>
										</tr>
										<tr>
											<td id="2469">Fatima</td>
											<td><img src="modules/fmsdb/img/flags/s/POR.gif" alt="Portugal">  POR</td>
											<td>PT Championship</td>
											<td>9K</td>
											<td>Semi-Professional</td>
											<td>1,545</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#800020"></span></td>
											<td>1966</td>
											<td>26.0</td>
										</tr>
										<tr>
											<td id="1478">FCP</td>
											<td><img src="modules/fmsdb/img/flags/s/POR.gif" alt="Portugal">  POR</td>
											<td>Premier League</td>
											<td>12M</td>
											<td>Professional</td>
											<td>50,035</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
											<td>1893</td>
											<td>24.8</td>
										</tr>
										<tr>
											<td id="55000308">FCP B</td>
											<td><img src="modules/fmsdb/img/flags/s/POR.gif" alt="Portugal">  POR</td>
											<td>Second League</td>
											<td>26K</td>
											<td>Professional</td>
											<td>8,272</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
											<td>0</td>
											<td>19.4</td>
										</tr>
										<tr>
											<td id="2387">Feirense</td>
											<td><img src="modules/fmsdb/img/flags/s/POR.gif" alt="Portugal">  POR</td>
											<td>Premier League</td>
											<td>65K</td>
											<td>Professional</td>
											<td>6,600</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#305098"></span></td>
											<td>1918</td>
											<td>24.0</td>
										</tr>
										<tr>
											<td id="2384">Felgueiras</td>
											<td><img src="modules/fmsdb/img/flags/s/POR.gif" alt="Portugal">  POR</td>
											<td>PT Championship</td>
											<td>17K</td>
											<td>Semi-Professional</td>
											<td>14,000</td>
											<td><span class="label" style="background:#E00808"></span> <span class="label" style="background:#0030A0"></span></td>
											<td>2006</td>
											<td>23.3</td>
										</tr>
										<tr>
											<td id="2409">Freamunde</td>
											<td><img src="modules/fmsdb/img/flags/s/POR.gif" alt="Portugal">  POR</td>
											<td>Second League</td>
											<td>43K</td>
											<td>Professional</td>
											<td>3,919</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#0030A0"></span></td>
											<td>1933</td>
											<td>24.3</td>
										</tr>
										<tr>
											<td id="734127">Gafanha</td>
											<td><img src="modules/fmsdb/img/flags/s/POR.gif" alt="Portugal">  POR</td>
											<td>PT Championship</td>
											<td>9K</td>
											<td>Semi-Professional</td>
											<td>2,000</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#0030A0"></span></td>
											<td>1957</td>
											<td>24.3</td>
										</tr>
										<tr>
											<td id="84107205">Gafetense</td>
											<td><img src="modules/fmsdb/img/flags/s/POR.gif" alt="Portugal">  POR</td>
											<td>PT Championship</td>
											<td>861</td>
											<td>Semi-Professional</td>
											<td>500</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
											<td>1979</td>
											<td>22.5</td>
										</tr>
										<tr>
											<td id="1481">Gil Vicente</td>
											<td><img src="modules/fmsdb/img/flags/s/POR.gif" alt="Portugal">  POR</td>
											<td>Second League</td>
											<td>103K</td>
											<td>Professional</td>
											<td>12,504</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#E00808"></span></td>
											<td>1924</td>
											<td>22.1</td>
										</tr>
										<tr>
											<td id="109043">Ginasio de Alcobaca</td>
											<td><img src="modules/fmsdb/img/flags/s/POR.gif" alt="Portugal">  POR</td>
											<td>PT Championship</td>
											<td>861</td>
											<td>Semi-Professional</td>
											<td>5,000</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#0050D0"></span></td>
											<td>1946</td>
											<td>23.5</td>
										</tr>
										<tr>
											<td id="2423">Gondomar</td>
											<td><img src="modules/fmsdb/img/flags/s/POR.gif" alt="Portugal">  POR</td>
											<td>PT Championship</td>
											<td>17K</td>
											<td>Semi-Professional</td>
											<td>2,500</td>
											<td><span class="label" style="background:#0030A0"></span> <span class="label" style="background:#F8F000"></span></td>
											<td>1921</td>
											<td>22.9</td>
										</tr>
										<tr>
											<td id="725038">Gouveia</td>
											<td><img src="modules/fmsdb/img/flags/s/POR.gif" alt="Portugal">  POR</td>
											<td>PT Championship</td>
											<td>2K</td>
											<td>Semi-Professional</td>
											<td>2,000</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#401060"></span></td>
											<td>1963</td>
											<td>24.3</td>
										</tr>
										<tr>
											<td id="1493">Leiria</td>
											<td><img src="modules/fmsdb/img/flags/s/POR.gif" alt="Portugal">  POR</td>
											<td>PT Championship</td>
											<td>43K</td>
											<td>Professional</td>
											<td>23,888</td>
											<td><span class="label" style="background:#E00000"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1966</td>
											<td>22.9</td>
										</tr>
										<tr>
											<td id="2406">Leixoes</td>
											<td><img src="modules/fmsdb/img/flags/s/POR.gif" alt="Portugal">  POR</td>
											<td>Second League</td>
											<td>43K</td>
											<td>Professional</td>
											<td>8,035</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
											<td>1907</td>
											<td>23.3</td>
										</tr>
										<tr>
											<td id="729707">Limianos</td>
											<td><img src="modules/fmsdb/img/flags/s/POR.gif" alt="Portugal">  POR</td>
											<td>PT Championship</td>
											<td>4K</td>
											<td>Semi-Professional</td>
											<td>3,000</td>
											<td><span class="label" style="background:#F8D000"></span> <span class="label" style="background:#600060"></span></td>
											<td>1953</td>
											<td>21.4</td>
										</tr>
										<tr>
											<td id="2446">Louletano</td>
											<td><img src="modules/fmsdb/img/flags/s/POR.gif" alt="Portugal">  POR</td>
											<td>PT Championship</td>
											<td>4K</td>
											<td>Semi-Professional</td>
											<td>5,000</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#E00000"></span></td>
											<td>1923</td>
											<td>23.7</td>
										</tr>
										<tr>
											<td id="734132">Loures</td>
											<td><img src="modules/fmsdb/img/flags/s/POR.gif" alt="Portugal">  POR</td>
											<td>PT Championship</td>
											<td>13K</td>
											<td>Semi-Professional</td>
											<td>800</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F8D000"></span></td>
											<td>1913</td>
											<td>22.6</td>
										</tr>
										<tr>
											<td id="55027909">Lus. Vildemoinhos</td>
											<td><img src="modules/fmsdb/img/flags/s/POR.gif" alt="Portugal">  POR</td>
											<td>PT Championship</td>
											<td>4K</td>
											<td>Semi-Professional</td>
											<td>7,000</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#000000"></span></td>
											<td>1916</td>
											<td>24.4</td>
										</tr>
										<tr>
											<td id="7000008">Lusitania Acores</td>
											<td><img src="modules/fmsdb/img/flags/s/POR.gif" alt="Portugal">  POR</td>
											<td>PT Championship</td>
											<td>2K</td>
											<td>Semi-Professional</td>
											<td>7,000</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#008030"></span></td>
											<td>1922</td>
											<td>24.8</td>
										</tr>
										<tr>
											<td id="7005001">Lusitano VRSA</td>
											<td><img src="modules/fmsdb/img/flags/s/POR.gif" alt="Portugal">  POR</td>
											<td>PT Championship</td>
											<td>2K</td>
											<td>Semi-Professional</td>
											<td>5,000</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#E00000"></span></td>
											<td>1916</td>
											<td>23.7</td>
										</tr>
										<tr>
											<td id="736258">Mafra</td>
											<td><img src="modules/fmsdb/img/flags/s/POR.gif" alt="Portugal">  POR</td>
											<td>PT Championship</td>
											<td>13K</td>
											<td>Semi-Professional</td>
											<td>2,400</td>
											<td><span class="label" style="background:#108830"></span> <span class="label" style="background:#F8D828"></span></td>
											<td>1965</td>
											<td>24.8</td>
										</tr>
										<tr>
											<td id="2430">Malveira</td>
											<td><img src="modules/fmsdb/img/flags/s/POR.gif" alt="Portugal">  POR</td>
											<td>PT Championship</td>
											<td>4K</td>
											<td>Semi-Professional</td>
											<td>12,000</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#0050D0"></span></td>
											<td>1940</td>
											<td>21.2</td>
										</tr>
										<tr>
											<td id="1476">Maritimo</td>
											<td><img src="modules/fmsdb/img/flags/s/POR.gif" alt="Portugal">  POR</td>
											<td>Premier League</td>
											<td>323K</td>
											<td>Professional</td>
											<td>7,200</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
											<td>1910</td>
											<td>25.7</td>
										</tr>
										<tr>
											<td id="7000097">Maritimo B</td>
											<td><img src="modules/fmsdb/img/flags/s/POR.gif" alt="Portugal">  POR</td>
											<td>PT Championship</td>
											<td>9K</td>
											<td>Semi-Professional</td>
											<td>4,000</td>
											<td><span class="label" style="background:#D02028"></span> <span class="label" style="background:#108830"></span></td>
											<td>1910</td>
											<td>22.7</td>
										</tr>
										<tr>
											<td id="734123">Merelinense</td>
											<td><img src="modules/fmsdb/img/flags/s/POR.gif" alt="Portugal">  POR</td>
											<td>PT Championship</td>
											<td>7K</td>
											<td>Semi-Professional</td>
											<td>500</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#E00000"></span></td>
											<td>1938</td>
											<td>26.4</td>
										</tr>
										<tr>
											<td id="2455">Mirandela</td>
											<td><img src="modules/fmsdb/img/flags/s/POR.gif" alt="Portugal">  POR</td>
											<td>PT Championship</td>
											<td>4K</td>
											<td>Semi-Professional</td>
											<td>5,000</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1926</td>
											<td>23.8</td>
										</tr>
										<tr>
											<td id="55072751">Moimenta da Beira</td>
											<td><img src="modules/fmsdb/img/flags/s/POR.gif" alt="Portugal">  POR</td>
											<td>PT Championship</td>
											<td>861</td>
											<td>Semi-Professional</td>
											<td>1,000</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
											<td>0</td>
											<td>23.4</td>
										</tr>
										<tr>
											<td id="2413">Montalegre</td>
											<td><img src="modules/fmsdb/img/flags/s/POR.gif" alt="Portugal">  POR</td>
											<td>PT Championship</td>
											<td>4K</td>
											<td>Semi-Professional</td>
											<td>7,000</td>
											<td><span class="label" style="background:#0050D0"></span> <span class="label" style="background:#0050D0"></span></td>
											<td>1964</td>
											<td>25.0</td>
										</tr>
										<tr>
											<td id="2389">Moreirense</td>
											<td><img src="modules/fmsdb/img/flags/s/POR.gif" alt="Portugal">  POR</td>
											<td>Premier League</td>
											<td>108K</td>
											<td>Professional</td>
											<td>6,153</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
											<td>1938</td>
											<td>23.9</td>
										</tr>
										<tr>
											<td id="8878352">Mortagua</td>
											<td><img src="modules/fmsdb/img/flags/s/POR.gif" alt="Portugal">  POR</td>
											<td>PT Championship</td>
											<td>4K</td>
											<td>Semi-Professional</td>
											<td>1,000</td>
											<td><span class="label" style="background:#0050D0"></span> <span class="label" style="background:#F8F000"></span></td>
											<td>1937</td>
											<td>24.4</td>
										</tr>
										<tr>
											<td id="55020412">Moura</td>
											<td><img src="modules/fmsdb/img/flags/s/POR.gif" alt="Portugal">  POR</td>
											<td>PT Championship</td>
											<td>9K</td>
											<td>Semi-Professional</td>
											<td>6,000</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F8D000"></span></td>
											<td>1942</td>
											<td>24.4</td>
										</tr>
										<tr>
											<td id="2433">Nacional da Madeira</td>
											<td><img src="modules/fmsdb/img/flags/s/POR.gif" alt="Portugal">  POR</td>
											<td>Premier League</td>
											<td>301K</td>
											<td>Professional</td>
											<td>5,586</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1910</td>
											<td>23.0</td>
										</tr>
										<tr>
											<td id="2415">Naval</td>
											<td><img src="modules/fmsdb/img/flags/s/POR.gif" alt="Portugal">  POR</td>
											<td>PT Championship</td>
											<td>861</td>
											<td>Semi-Professional</td>
											<td>11,800</td>
											<td><span class="label" style="background:#108830"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1893</td>
											<td>22.0</td>
										</tr>
										<tr>
											<td id="2445">Olhanense</td>
											<td><img src="modules/fmsdb/img/flags/s/POR.gif" alt="Portugal">  POR</td>
											<td>Second League</td>
											<td>43K</td>
											<td>Professional</td>
											<td>5,661</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
											<td>1912</td>
											<td>22.8</td>
										</tr>
										<tr>
											<td id="2416">Oliveirense</td>
											<td><img src="modules/fmsdb/img/flags/s/POR.gif" alt="Portugal">  POR</td>
											<td>PT Championship</td>
											<td>43K</td>
											<td>Semi-Professional</td>
											<td>5,000</td>
											<td><span class="label" style="background:#002060"></span> <span class="label" style="background:#E00000"></span></td>
											<td>1922</td>
											<td>25.1</td>
										</tr>
										<tr>
											<td id="109040">Operario Lagoa</td>
											<td><img src="modules/fmsdb/img/flags/s/POR.gif" alt="Portugal">  POR</td>
											<td>PT Championship</td>
											<td>4K</td>
											<td>Semi-Professional</td>
											<td>2,500</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#E00000"></span></td>
											<td>1948</td>
											<td>23.6</td>
										</tr>
										<tr>
											<td id="2444">Oriental</td>
											<td><img src="modules/fmsdb/img/flags/s/POR.gif" alt="Portugal">  POR</td>
											<td>PT Championship</td>
											<td>4K</td>
											<td>Semi-Professional</td>
											<td>8,500</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#901000"></span></td>
											<td>1946</td>
											<td>25.2</td>
										</tr>
										<tr>
											<td id="2386">P. Ferreira</td>
											<td><img src="modules/fmsdb/img/flags/s/POR.gif" alt="Portugal">  POR</td>
											<td>Premier League</td>
											<td>151K</td>
											<td>Professional</td>
											<td>7,500</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
											<td>1950</td>
											<td>24.0</td>
										</tr>
										<tr>
											<td id="744319">Pampilhosa</td>
											<td><img src="modules/fmsdb/img/flags/s/POR.gif" alt="Portugal">  POR</td>
											<td>PT Championship</td>
											<td>2K</td>
											<td>Semi-Professional</td>
											<td>5,000</td>
											<td><span class="label" style="background:#A0A0A0"></span> <span class="label" style="background:#0050D0"></span></td>
											<td>1930</td>
											<td>28.0</td>
										</tr>
										<tr>
											<td id="729457">Pedras Rubras</td>
											<td><img src="modules/fmsdb/img/flags/s/POR.gif" alt="Portugal">  POR</td>
											<td>PT Championship</td>
											<td>4K</td>
											<td>Semi-Professional</td>
											<td>5,000</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#0050D0"></span></td>
											<td>1941</td>
											<td>23.2</td>
										</tr>
										<tr>
											<td id="55038918">Pedras Salgadas</td>
											<td><img src="modules/fmsdb/img/flags/s/POR.gif" alt="Portugal">  POR</td>
											<td>PT Championship</td>
											<td>4K</td>
											<td>Semi-Professional</td>
											<td>5,450</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#0030A0"></span></td>
											<td>1977</td>
											<td>23.2</td>
										</tr>
										<tr>
											<td id="1477">Penafiel</td>
											<td><img src="modules/fmsdb/img/flags/s/POR.gif" alt="Portugal">  POR</td>
											<td>Second League</td>
											<td>65K</td>
											<td>Professional</td>
											<td>5,230</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F00000"></span></td>
											<td>1951</td>
											<td>25.6</td>
										</tr>
										<tr>
											<td id="729749">Pinhalnovense</td>
											<td><img src="modules/fmsdb/img/flags/s/POR.gif" alt="Portugal">  POR</td>
											<td>PT Championship</td>
											<td>17K</td>
											<td>Semi-Professional</td>
											<td>2,500</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#0050D0"></span></td>
											<td>1948</td>
											<td>24.1</td>
										</tr>
										<tr>
											<td id="55027801">Ponte da Barca</td>
											<td><img src="modules/fmsdb/img/flags/s/POR.gif" alt="Portugal">  POR</td>
											<td>PT Championship</td>
											<td>2K</td>
											<td>Semi-Professional</td>
											<td>2,500</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
											<td>1966</td>
											<td>24.0</td>
										</tr>
										<tr>
											<td id="2438">Portimonense</td>
											<td><img src="modules/fmsdb/img/flags/s/POR.gif" alt="Portugal">  POR</td>
											<td>Second League</td>
											<td>103K</td>
											<td>Professional</td>
											<td>6,240</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
											<td>1914</td>
											<td>23.7</td>
										</tr>
										<tr>
											<td id="2487">Praiense</td>
											<td><img src="modules/fmsdb/img/flags/s/POR.gif" alt="Portugal">  POR</td>
											<td>PT Championship</td>
											<td>4K</td>
											<td>Semi-Professional</td>
											<td>1,500</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#F00000"></span></td>
											<td>1947</td>
											<td>25.0</td>
										</tr>
										<tr>
											<td id="741496">Real</td>
											<td><img src="modules/fmsdb/img/flags/s/POR.gif" alt="Portugal">  POR</td>
											<td>PT Championship</td>
											<td>4K</td>
											<td>Semi-Professional</td>
											<td>3,500</td>
											<td><span class="label" style="background:#002080"></span> <span class="label" style="background:#000000"></span></td>
											<td>1951</td>
											<td>22.7</td>
										</tr>
										<tr>
											<td id="2383">Rio Ave</td>
											<td><img src="modules/fmsdb/img/flags/s/POR.gif" alt="Portugal">  POR</td>
											<td>Premier League</td>
											<td>215K</td>
											<td>Professional</td>
											<td>12,820</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
											<td>1939</td>
											<td>23.8</td>
										</tr>
										<tr>
											<td id="2477">Sacavenense</td>
											<td><img src="modules/fmsdb/img/flags/s/POR.gif" alt="Portugal">  POR</td>
											<td>PT Championship</td>
											<td>4K</td>
											<td>Semi-Professional</td>
											<td>3,100</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#E00000"></span></td>
											<td>1910</td>
											<td>24.6</td>
										</tr>
										<tr>
											<td id="1486">Salgueiros</td>
											<td><img src="modules/fmsdb/img/flags/s/POR.gif" alt="Portugal">  POR</td>
											<td>PT Championship</td>
											<td>7K</td>
											<td>Semi-Professional</td>
											<td>16,000</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#E00000"></span></td>
											<td>1911</td>
											<td>25.9</td>
										</tr>
										<tr>
											<td id="2448">Santa Clara</td>
											<td><img src="modules/fmsdb/img/flags/s/POR.gif" alt="Portugal">  POR</td>
											<td>Second League</td>
											<td>43K</td>
											<td>Professional</td>
											<td>12,800</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#E00000"></span></td>
											<td>1921</td>
											<td>26.2</td>
										</tr>
										<tr>
											<td id="84107055">Sao Martinho</td>
											<td><img src="modules/fmsdb/img/flags/s/POR.gif" alt="Portugal">  POR</td>
											<td>PT Championship</td>
											<td>4K</td>
											<td>Semi-Professional</td>
											<td>3,000</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
											<td>1965</td>
											<td>23.3</td>
										</tr>
										<tr>
											<td id="725060">Sertanense</td>
											<td><img src="modules/fmsdb/img/flags/s/POR.gif" alt="Portugal">  POR</td>
											<td>PT Championship</td>
											<td>4K</td>
											<td>Semi-Professional</td>
											<td>1,000</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1934</td>
											<td>22.5</td>
										</tr>
										<tr>
											<td id="2478">Sintrense</td>
											<td><img src="modules/fmsdb/img/flags/s/POR.gif" alt="Portugal">  POR</td>
											<td>PT Championship</td>
											<td>4K</td>
											<td>Semi-Professional</td>
											<td>2,800</td>
											<td><span class="label" style="background:#0030A0"></span> <span class="label" style="background:#F8F000"></span></td>
											<td>1911</td>
											<td>25.4</td>
										</tr>
										<tr>
											<td id="1487">SLB</td>
											<td><img src="modules/fmsdb/img/flags/s/POR.gif" alt="Portugal">  POR</td>
											<td>Premier League</td>
											<td>14M</td>
											<td>Professional</td>
											<td>64,642</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#E00000"></span></td>
											<td>1904</td>
											<td>23.8</td>
										</tr>
										<tr>
											<td id="55000306">SLB B</td>
											<td><img src="modules/fmsdb/img/flags/s/POR.gif" alt="Portugal">  POR</td>
											<td>Second League</td>
											<td>26K</td>
											<td>Professional</td>
											<td>2,720</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#E00000"></span></td>
											<td>0</td>
											<td>19.9</td>
										</tr>
										<tr>
											<td id="55027254">Sousense</td>
											<td><img src="modules/fmsdb/img/flags/s/POR.gif" alt="Portugal">  POR</td>
											<td>PT Championship</td>
											<td>4K</td>
											<td>Semi-Professional</td>
											<td>2,000</td>
											<td><span class="label" style="background:#E00000"></span> <span class="label" style="background:#F8F000"></span></td>
											<td>1937</td>
											<td>24.1</td>
										</tr>
										<tr>
											<td id="57141886">Academica Clinceni</td>
											<td><img src="modules/fmsdb/img/flags/s/ROU.gif" alt="Romania">  ROU</td>
											<td>Liga II</td>
											<td>0</td>
											<td>Professional</td>
											<td>2,000</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#2068B0"></span></td>
											<td>2015</td>
											<td>23.5</td>
										</tr>
										<tr>
											<td id="57036465">ACS Berceni</td>
											<td><img src="modules/fmsdb/img/flags/s/ROU.gif" alt="Romania">  ROU</td>
											<td>Liga II</td>
											<td>0</td>
											<td>Professional</td>
											<td>450</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#E00000"></span></td>
											<td>1957</td>
											<td>22.8</td>
										</tr>
										<tr>
											<td id="57102772">ACS Poli</td>
											<td><img src="modules/fmsdb/img/flags/s/ROU.gif" alt="Romania">  ROU</td>
											<td>Liga I</td>
											<td>0</td>
											<td>Professional</td>
											<td>32,972</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#402880"></span></td>
											<td>2012</td>
											<td>26.4</td>
										</tr>
										<tr>
											<td id="57110823">AFC Astra</td>
											<td><img src="modules/fmsdb/img/flags/s/ROU.gif" alt="Romania">  ROU</td>
											<td>Liga I</td>
											<td>0</td>
											<td>Professional</td>
											<td>8,500</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>2012</td>
											<td>28.6</td>
										</tr>
										<tr>
											<td id="57113409">ASA Tirgu Mures</td>
											<td><img src="modules/fmsdb/img/flags/s/ROU.gif" alt="Romania">  ROU</td>
											<td>Liga I</td>
											<td>0</td>
											<td>Professional</td>
											<td>8,000</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#283850"></span></td>
											<td>2013</td>
											<td>25.9</td>
										</tr>
										<tr>
											<td id="57099588">ASU Poli</td>
											<td><img src="modules/fmsdb/img/flags/s/ROU.gif" alt="Romania">  ROU</td>
											<td>Liga II</td>
											<td>0</td>
											<td>Professional</td>
											<td>32,972</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#604090"></span></td>
											<td>2002</td>
											<td>22.8</td>
										</tr>
										<tr>
											<td id="7540447">Botosani</td>
											<td><img src="modules/fmsdb/img/flags/s/ROU.gif" alt="Romania">  ROU</td>
											<td>Liga I</td>
											<td>0</td>
											<td>Professional</td>
											<td>12,000</td>
											<td><span class="label" style="background:#F0F0F0"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>2001</td>
											<td>24.8</td>
										</tr>
										<tr>
											<td id="7540205">CFR Cluj</td>
											<td><img src="modules/fmsdb/img/flags/s/ROU.gif" alt="Romania">  ROU</td>
											<td>Liga I</td>
											<td>0</td>
											<td>Professional</td>
											<td>23,500</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#800000"></span></td>
											<td>1907</td>
											<td>24.7</td>
										</tr>
										<tr>
											<td id="57000252">Chiajna</td>
											<td><img src="modules/fmsdb/img/flags/s/ROU.gif" alt="Romania">  ROU</td>
											<td>Liga I</td>
											<td>0</td>
											<td>Professional</td>
											<td>5,000</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#006030"></span></td>
											<td>1957</td>
											<td>26.3</td>
										</tr>
										<tr>
											<td id="57066631">Chindia</td>
											<td><img src="modules/fmsdb/img/flags/s/ROU.gif" alt="Romania">  ROU</td>
											<td>Liga II</td>
											<td>0</td>
											<td>Professional</td>
											<td>12,000</td>
											<td><span class="label" style="background:#283850"></span> <span class="label" style="background:#58C0D8"></span></td>
											<td>1950</td>
											<td>24.2</td>
										</tr>
										<tr>
											<td id="57057243">CS Afumati</td>
											<td><img src="modules/fmsdb/img/flags/s/ROU.gif" alt="Romania">  ROU</td>
											<td>Liga II</td>
											<td>0</td>
											<td>Professional</td>
											<td>3,000</td>
											<td><span class="label" style="background:#0030A0"></span> <span class="label" style="background:#F8F000"></span></td>
											<td>0</td>
											<td>24.6</td>
										</tr>
										<tr>
											<td id="57057245">CS Balotesti</td>
											<td><img src="modules/fmsdb/img/flags/s/ROU.gif" alt="Romania">  ROU</td>
											<td>Liga II</td>
											<td>0</td>
											<td>Professional</td>
											<td>3,780</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#2068B0"></span></td>
											<td>2006</td>
											<td>23.9</td>
										</tr>
										<tr>
											<td id="57080206">CS Mioveni</td>
											<td><img src="modules/fmsdb/img/flags/s/ROU.gif" alt="Romania">  ROU</td>
											<td>Liga II</td>
											<td>0</td>
											<td>Professional</td>
											<td>7,400</td>
											<td><span class="label" style="background:#00C030"></span> <span class="label" style="background:#F8F000"></span></td>
											<td>2000</td>
											<td>26.5</td>
										</tr>
										<tr>
											<td id="57111101">CS U Craiova</td>
											<td><img src="modules/fmsdb/img/flags/s/ROU.gif" alt="Romania">  ROU</td>
											<td>Liga I</td>
											<td>0</td>
											<td>Professional</td>
											<td>6,400</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#2858B0"></span></td>
											<td>2013</td>
											<td>24.3</td>
										</tr>
										<tr>
											<td id="57086204">CSM Poli Iasi</td>
											<td><img src="modules/fmsdb/img/flags/s/ROU.gif" alt="Romania">  ROU</td>
											<td>Liga I</td>
											<td>0</td>
											<td>Professional</td>
											<td>12,500</td>
											<td><span class="label" style="background:#081030"></span> <span class="label" style="background:#2850A0"></span></td>
											<td>2010</td>
											<td>25.6</td>
										</tr>
										<tr>
											<td id="7547031">CSM Rm. Valcea</td>
											<td><img src="modules/fmsdb/img/flags/s/ROU.gif" alt="Romania">  ROU</td>
											<td>Liga II</td>
											<td>0</td>
											<td>Professional</td>
											<td>13,500</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#0050D0"></span></td>
											<td>2004</td>
											<td>23.2</td>
										</tr>
										<tr>
											<td id="57000258">D. Calarasi</td>
											<td><img src="modules/fmsdb/img/flags/s/ROU.gif" alt="Romania">  ROU</td>
											<td>Liga II</td>
											<td>0</td>
											<td>Professional</td>
											<td>12,000</td>
											<td><span class="label" style="background:#F8F000"></span> <span class="label" style="background:#1838F8"></span></td>
											<td>1920</td>
											<td>24.2</td>
										</tr>
										<tr>
											<td id="57139475">Dacia Unirea</td>
											<td><img src="modules/fmsdb/img/flags/s/ROU.gif" alt="Romania">  ROU</td>
											<td>Liga II</td>
											<td>0</td>
											<td>Professional</td>
											<td>23,000</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#0050D0"></span></td>
											<td>1922</td>
											<td>25.9</td>
										</tr>
										<tr>
											<td id="1500">Dinamo Buc.</td>
											<td><img src="modules/fmsdb/img/flags/s/ROU.gif" alt="Romania">  ROU</td>
											<td>Liga I</td>
											<td>0</td>
											<td>Professional</td>
											<td>15,300</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#E00000"></span></td>
											<td>1948</td>
											<td>24.4</td>
										</tr>
										<tr>
											<td id="1503">FC Brasov</td>
											<td><img src="modules/fmsdb/img/flags/s/ROU.gif" alt="Romania">  ROU</td>
											<td>Liga II</td>
											<td>0</td>
											<td>Professional</td>
											<td>8,000</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F8D000"></span></td>
											<td>1936</td>
											<td>22.9</td>
										</tr>
										<tr>
											<td id="1513">FC Steaua</td>
											<td><img src="modules/fmsdb/img/flags/s/ROU.gif" alt="Romania">  ROU</td>
											<td>Liga I</td>
											<td>0</td>
											<td>Professional</td>
											<td>55,600</td>
											<td><span class="label" style="background:#2858B0"></span> <span class="label" style="background:#C80000"></span></td>
											<td>1947</td>
											<td>26.9</td>
										</tr>
										<tr>
											<td id="57047936">FC Viitorul</td>
											<td><img src="modules/fmsdb/img/flags/s/ROU.gif" alt="Romania">  ROU</td>
											<td>Liga I</td>
											<td>0</td>
											<td>Professional</td>
											<td>4,500</td>
											<td><span class="label" style="background:#081030"></span> <span class="label" style="background:#2850A0"></span></td>
											<td>2009</td>
											<td>22.8</td>
										</tr>
										<tr>
											<td id="57065222">FC Voluntari</td>
											<td><img src="modules/fmsdb/img/flags/s/ROU.gif" alt="Romania">  ROU</td>
											<td>Liga I</td>
											<td>0</td>
											<td>Professional</td>
											<td>4,600</td>
											<td><span class="label" style="background:#B00810"></span> <span class="label" style="background:#902830"></span></td>
											<td>2010</td>
											<td>27.3</td>
										</tr>
										<tr>
											<td id="57031881">Foresta Suceava</td>
											<td><img src="modules/fmsdb/img/flags/s/ROU.gif" alt="Romania">  ROU</td>
											<td>Liga II</td>
											<td>0</td>
											<td>Professional</td>
											<td>12,000</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1946</td>
											<td>25.3</td>
										</tr>
										<tr>
											<td id="138153">Gaz Metan</td>
											<td><img src="modules/fmsdb/img/flags/s/ROU.gif" alt="Romania">  ROU</td>
											<td>Liga I</td>
											<td>0</td>
											<td>Professional</td>
											<td>7,500</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1945</td>
											<td>26.9</td>
										</tr>
										<tr>
											<td id="7540450">Juventus Buc.</td>
											<td><img src="modules/fmsdb/img/flags/s/ROU.gif" alt="Romania">  ROU</td>
											<td>Liga II</td>
											<td>0</td>
											<td>Professional</td>
											<td>8,000</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1992</td>
											<td>23.5</td>
										</tr>
										<tr>
											<td id="57044148">Luceafarul Or.</td>
											<td><img src="modules/fmsdb/img/flags/s/ROU.gif" alt="Romania">  ROU</td>
											<td>Liga II</td>
											<td>0</td>
											<td>Professional</td>
											<td>7,000</td>
											<td><span class="label" style="background:#304078"></span> <span class="label" style="background:#C81018"></span></td>
											<td>2010</td>
											<td>24.1</td>
										</tr>
										<tr>
											<td id="57113264">Metalul Resita</td>
											<td><img src="modules/fmsdb/img/flags/s/ROU.gif" alt="Romania">  ROU</td>
											<td>Liga II</td>
											<td>0</td>
											<td>Professional</td>
											<td>1,000</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#E00000"></span></td>
											<td>2007</td>
											<td>22.2</td>
										</tr>
										<tr>
											<td id="57036024">Olimpia SM</td>
											<td><img src="modules/fmsdb/img/flags/s/ROU.gif" alt="Romania">  ROU</td>
											<td>Liga II</td>
											<td>0</td>
											<td>Professional</td>
											<td>18,000</td>
											<td><span class="label" style="background:#F8F000"></span> <span class="label" style="background:#2810B8"></span></td>
											<td>1921</td>
											<td>22.7</td>
										</tr>
										<tr>
											<td id="7540061">Pandurii</td>
											<td><img src="modules/fmsdb/img/flags/s/ROU.gif" alt="Romania">  ROU</td>
											<td>Liga I</td>
											<td>0</td>
											<td>Professional</td>
											<td>20,240</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#0050D0"></span></td>
											<td>1963</td>
											<td>26.3</td>
										</tr>
										<tr>
											<td id="57110237">Sepsi OSK</td>
											<td><img src="modules/fmsdb/img/flags/s/ROU.gif" alt="Romania">  ROU</td>
											<td>Liga II</td>
											<td>0</td>
											<td>Professional</td>
											<td>7,000</td>
											<td><span class="label" style="background:#C81018"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>0</td>
											<td>25.2</td>
										</tr>
										<tr>
											<td id="57036012">Soimii Pancota</td>
											<td><img src="modules/fmsdb/img/flags/s/ROU.gif" alt="Romania">  ROU</td>
											<td>Liga II</td>
											<td>0</td>
											<td>Professional</td>
											<td>1,500</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F86820"></span></td>
											<td>1923</td>
											<td>22.6</td>
										</tr>
										<tr>
											<td id="57014875">Tarlungeni</td>
											<td><img src="modules/fmsdb/img/flags/s/ROU.gif" alt="Romania">  ROU</td>
											<td>Liga II</td>
											<td>0</td>
											<td>Professional</td>
											<td>1,000</td>
											<td><span class="label" style="background:#C80000"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1983</td>
											<td>23.1</td>
										</tr>
										<tr>
											<td id="57113687">UTA Batrana Doamna</td>
											<td><img src="modules/fmsdb/img/flags/s/ROU.gif" alt="Romania">  ROU</td>
											<td>Liga II</td>
											<td>0</td>
											<td>Professional</td>
											<td>500</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#E00000"></span></td>
											<td>2013</td>
											<td>23.2</td>
										</tr>
										<tr>
											<td id="1642">Ajax CT</td>
											<td><img src="modules/fmsdb/img/flags/s/RSA.gif" alt="South Africa">  RSA</td>
											<td>South African Premiership</td>
											<td>226K</td>
											<td>Professional</td>
											<td>64,100</td>
											<td><span class="label" style="background:#F84028"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1999</td>
											<td>24.8</td>
										</tr>
										<tr>
											<td id="130772">Amazulu</td>
											<td><img src="modules/fmsdb/img/flags/s/RSA.gif" alt="South Africa">  RSA</td>
											<td>National First Division</td>
											<td>480K</td>
											<td>Professional</td>
											<td>14,000</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#108830"></span></td>
											<td>1932</td>
											<td>25.0</td>
										</tr>
										<tr>
											<td id="65010405">Baroka FC</td>
											<td><img src="modules/fmsdb/img/flags/s/RSA.gif" alt="South Africa">  RSA</td>
											<td>South African Premiership</td>
											<td>113K</td>
											<td>Professional</td>
											<td>15,000</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#080048"></span></td>
											<td>2007</td>
											<td>25.0</td>
										</tr>
										<tr>
											<td id="5680075">Black Leopards</td>
											<td><img src="modules/fmsdb/img/flags/s/RSA.gif" alt="South Africa">  RSA</td>
											<td>National First Division</td>
											<td>141K</td>
											<td>Professional</td>
											<td>10,000</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F8D000"></span></td>
											<td>1983</td>
											<td>25.6</td>
										</tr>
										<tr>
											<td id="130770">Bloem Celtic</td>
											<td><img src="modules/fmsdb/img/flags/s/RSA.gif" alt="South Africa">  RSA</td>
											<td>South African Premiership</td>
											<td>254K</td>
											<td>Professional</td>
											<td>20,000</td>
											<td><span class="label" style="background:#00C030"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1969</td>
											<td>26.2</td>
										</tr>
										<tr>
											<td id="65010452">Cape Town All Stars</td>
											<td><img src="modules/fmsdb/img/flags/s/RSA.gif" alt="South Africa">  RSA</td>
											<td>National First Division</td>
											<td>1M</td>
											<td>Professional</td>
											<td>6,000</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#008040"></span></td>
											<td>2010</td>
											<td>23.4</td>
										</tr>
										<tr>
											<td id="65035889">Cape Town City</td>
											<td><img src="modules/fmsdb/img/flags/s/RSA.gif" alt="South Africa">  RSA</td>
											<td>South African Premiership</td>
											<td>226K</td>
											<td>Professional</td>
											<td>64,100</td>
											<td><span class="label" style="background:#E0B840"></span> <span class="label" style="background:#2060A8"></span></td>
											<td>2016</td>
											<td>25.5</td>
										</tr>
										<tr>
											<td id="65010424">Chippa Utd</td>
											<td><img src="modules/fmsdb/img/flags/s/RSA.gif" alt="South Africa">  RSA</td>
											<td>South African Premiership</td>
											<td>424K</td>
											<td>Professional</td>
											<td>47,592</td>
											<td><span class="label" style="background:#0080F8"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>2010</td>
											<td>25.7</td>
										</tr>
										<tr>
											<td id="5680142">FC Cape Town</td>
											<td><img src="modules/fmsdb/img/flags/s/RSA.gif" alt="South Africa">  RSA</td>
											<td>National First Division</td>
											<td>28K</td>
											<td>Professional</td>
											<td>11,000</td>
											<td><span class="label" style="background:#F8F000"></span> <span class="label" style="background:#0010D8"></span></td>
											<td>2006</td>
											<td>24.8</td>
										</tr>
										<tr>
											<td id="5682513">FS Stars</td>
											<td><img src="modules/fmsdb/img/flags/s/RSA.gif" alt="South Africa">  RSA</td>
											<td>South African Premiership</td>
											<td>141K</td>
											<td>Professional</td>
											<td>20,000</td>
											<td><span class="label" style="background:#002060"></span> <span class="label" style="background:#E00808"></span></td>
											<td>1979</td>
											<td>26.9</td>
										</tr>
										<tr>
											<td id="131270">Golden Arrows</td>
											<td><img src="modules/fmsdb/img/flags/s/RSA.gif" alt="South Africa">  RSA</td>
											<td>South African Premiership</td>
											<td>169K</td>
											<td>Professional</td>
											<td>10,000</td>
											<td><span class="label" style="background:#E8F800"></span> <span class="label" style="background:#00C030"></span></td>
											<td>1996</td>
											<td>25.5</td>
										</tr>
										<tr>
											<td id="5682374">Highlands Park</td>
											<td><img src="modules/fmsdb/img/flags/s/RSA.gif" alt="South Africa">  RSA</td>
											<td>South African Premiership</td>
											<td>141K</td>
											<td>Professional</td>
											<td>10,000</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#E00000"></span></td>
											<td>1959</td>
											<td>27.3</td>
										</tr>
										<tr>
											<td id="106805">Jomo Cosmos</td>
											<td><img src="modules/fmsdb/img/flags/s/RSA.gif" alt="South Africa">  RSA</td>
											<td>National First Division</td>
											<td>113K</td>
											<td>Professional</td>
											<td>15,000</td>
											<td><span class="label" style="background:#002060"></span> <span class="label" style="background:#E00000"></span></td>
											<td>1982</td>
											<td>24.7</td>
										</tr>
										<tr>
											<td id="1643">Kaizer Chiefs</td>
											<td><img src="modules/fmsdb/img/flags/s/RSA.gif" alt="South Africa">  RSA</td>
											<td>South African Premiership</td>
											<td>565K</td>
											<td>Professional</td>
											<td>87,600</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F8D000"></span></td>
											<td>1970</td>
											<td>26.6</td>
										</tr>
										<tr>
											<td id="65025781">Magesi FC</td>
											<td><img src="modules/fmsdb/img/flags/s/RSA.gif" alt="South Africa">  RSA</td>
											<td>National First Division</td>
											<td>150K</td>
											<td>Professional</td>
											<td>15,000</td>
											<td><span class="label" style="background:#80F8F8"></span> <span class="label" style="background:#0000A0"></span></td>
											<td>0</td>
											<td>24.6</td>
										</tr>
										<tr>
											<td id="5682979">Maritzburg Utd</td>
											<td><img src="modules/fmsdb/img/flags/s/RSA.gif" alt="South Africa">  RSA</td>
											<td>South African Premiership</td>
											<td>198K</td>
											<td>Professional</td>
											<td>12,000</td>
											<td><span class="label" style="background:#0000F8"></span> <span class="label" style="background:#000000"></span></td>
											<td>1979</td>
											<td>24.8</td>
										</tr>
										<tr>
											<td id="65010493">Mbombela Utd</td>
											<td><img src="modules/fmsdb/img/flags/s/RSA.gif" alt="South Africa">  RSA</td>
											<td>National First Division</td>
											<td>56K</td>
											<td>Professional</td>
											<td>10,000</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#F80000"></span></td>
											<td>2008</td>
											<td>24.1</td>
										</tr>
										<tr>
											<td id="65010450">Milano Utd</td>
											<td><img src="modules/fmsdb/img/flags/s/RSA.gif" alt="South Africa">  RSA</td>
											<td>National First Division</td>
											<td>45K</td>
											<td>Professional</td>
											<td>35,000</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#E8B810"></span></td>
											<td>1986</td>
											<td>24.0</td>
										</tr>
										<tr>
											<td id="65025796">Mthatha Bucks</td>
											<td><img src="modules/fmsdb/img/flags/s/RSA.gif" alt="South Africa">  RSA</td>
											<td>National First Division</td>
											<td>28K</td>
											<td>Professional</td>
											<td>9,000</td>
											<td><span class="label" style="background:#F0B840"></span> <span class="label" style="background:#000000"></span></td>
											<td>2007</td>
											<td>26.0</td>
										</tr>
										<tr>
											<td id="1645">Orlando Pirates</td>
											<td><img src="modules/fmsdb/img/flags/s/RSA.gif" alt="South Africa">  RSA</td>
											<td>South African Premiership</td>
											<td>847K</td>
											<td>Professional</td>
											<td>40,000</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#000000"></span></td>
											<td>1937</td>
											<td>25.9</td>
										</tr>
										<tr>
											<td id="5680087">Platinum Stars</td>
											<td><img src="modules/fmsdb/img/flags/s/RSA.gif" alt="South Africa">  RSA</td>
											<td>South African Premiership</td>
											<td>254K</td>
											<td>Professional</td>
											<td>44,732</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#000080"></span></td>
											<td>1998</td>
											<td>27.2</td>
										</tr>
										<tr>
											<td id="65028128">Polokwane City</td>
											<td><img src="modules/fmsdb/img/flags/s/RSA.gif" alt="South Africa">  RSA</td>
											<td>South African Premiership</td>
											<td>113K</td>
											<td>Professional</td>
											<td>45,553</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#C0C0C0"></span></td>
											<td>2011</td>
											<td>27.8</td>
										</tr>
										<tr>
											<td id="65026405">Real Kings</td>
											<td><img src="modules/fmsdb/img/flags/s/RSA.gif" alt="South Africa">  RSA</td>
											<td>National First Division</td>
											<td>150K</td>
											<td>Professional</td>
											<td>10,000</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#004080"></span></td>
											<td>2013</td>
											<td>22.7</td>
										</tr>
										<tr>
											<td id="65029901">Royal Eagles</td>
											<td><img src="modules/fmsdb/img/flags/s/RSA.gif" alt="South Africa">  RSA</td>
											<td>National First Division</td>
											<td>424K</td>
											<td>Professional</td>
											<td>12,000</td>
											<td><span class="label" style="background:#F8F800"></span> <span class="label" style="background:#0068F8"></span></td>
											<td>2014</td>
											<td>25.8</td>
										</tr>
										<tr>
											<td id="130766">Santos F.C.</td>
											<td><img src="modules/fmsdb/img/flags/s/RSA.gif" alt="South Africa">  RSA</td>
											<td>National First Division</td>
											<td>254K</td>
											<td>Professional</td>
											<td>35,000</td>
											<td><span class="label" style="background:#E00000"></span> <span class="label" style="background:#F8F000"></span></td>
											<td>1982</td>
											<td>24.3</td>
										</tr>
										<tr>
											<td id="65036389">Stellenbosch FC</td>
											<td><img src="modules/fmsdb/img/flags/s/RSA.gif" alt="South Africa">  RSA</td>
											<td>National First Division</td>
											<td>45K</td>
											<td>Professional</td>
											<td>12,000</td>
											<td><span class="label" style="background:#B06040"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>2016</td>
											<td>25.3</td>
										</tr>
										<tr>
											<td id="1644">Sundowns</td>
											<td><img src="modules/fmsdb/img/flags/s/RSA.gif" alt="South Africa">  RSA</td>
											<td>South African Premiership</td>
											<td>2M</td>
											<td>Professional</td>
											<td>51,762</td>
											<td><span class="label" style="background:#008030"></span> <span class="label" style="background:#F8E010"></span></td>
											<td>1970</td>
											<td>28.0</td>
										</tr>
										<tr>
											<td id="1646">SuperSport Utd</td>
											<td><img src="modules/fmsdb/img/flags/s/RSA.gif" alt="South Africa">  RSA</td>
											<td>South African Premiership</td>
											<td>565K</td>
											<td>Professional</td>
											<td>28,900</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#0010D8"></span></td>
											<td>1985</td>
											<td>27.0</td>
										</tr>
										<tr>
											<td id="5680099">Thanda Royal Zulu</td>
											<td><img src="modules/fmsdb/img/flags/s/RSA.gif" alt="South Africa">  RSA</td>
											<td>National First Division</td>
											<td>141K</td>
											<td>Professional</td>
											<td>5,000</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>2007</td>
											<td>24.2</td>
										</tr>
										<tr>
											<td id="5688086">Tuks</td>
											<td><img src="modules/fmsdb/img/flags/s/RSA.gif" alt="South Africa">  RSA</td>
											<td>National First Division</td>
											<td>226K</td>
											<td>Professional</td>
											<td>15,000</td>
											<td><span class="label" style="background:#E00808"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1983</td>
											<td>24.6</td>
										</tr>
										<tr>
											<td id="5682613">Witbank Spurs</td>
											<td><img src="modules/fmsdb/img/flags/s/RSA.gif" alt="South Africa">  RSA</td>
											<td>National First Division</td>
											<td>99K</td>
											<td>Professional</td>
											<td>35,000</td>
											<td><span class="label" style="background:#60C0F8"></span> <span class="label" style="background:#F08000"></span></td>
											<td>2000</td>
											<td>24.3</td>
										</tr>
										<tr>
											<td id="130763">Wits</td>
											<td><img src="modules/fmsdb/img/flags/s/RSA.gif" alt="South Africa">  RSA</td>
											<td>South African Premiership</td>
											<td>847K</td>
											<td>Professional</td>
											<td>5,515</td>
											<td><span class="label" style="background:#0030A0"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1922</td>
											<td>27.2</td>
										</tr>
										<tr>
											<td id="130500">Amkar</td>
											<td><img src="modules/fmsdb/img/flags/s/RUS.gif" alt="Russia">  RUS</td>
											<td>Premier Division</td>
											<td>24K</td>
											<td>Professional</td>
											<td>16,873</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
											<td>1994</td>
											<td>26.2</td>
										</tr>
										<tr>
											<td id="130495">Anji</td>
											<td><img src="modules/fmsdb/img/flags/s/RUS.gif" alt="Russia">  RUS</td>
											<td>Premier Division</td>
											<td>240K</td>
											<td>Professional</td>
											<td>30,000</td>
											<td><span class="label" style="background:#081030"></span> <span class="label" style="background:#00A030"></span></td>
											<td>1991</td>
											<td>24.2</td>
										</tr>
										<tr>
											<td id="130501">Arsenal Tula</td>
											<td><img src="modules/fmsdb/img/flags/s/RUS.gif" alt="Russia">  RUS</td>
											<td>Premier Division</td>
											<td>44K</td>
											<td>Professional</td>
											<td>20,048</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
											<td>1984</td>
											<td>28.0</td>
										</tr>
										<tr>
											<td id="1301106">Baltika</td>
											<td><img src="modules/fmsdb/img/flags/s/RUS.gif" alt="Russia">  RUS</td>
											<td>First Division</td>
											<td>0</td>
											<td>Professional</td>
											<td>14,660</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#0050D0"></span></td>
											<td>1954</td>
											<td>26.6</td>
										</tr>
										<tr>
											<td id="1518">CSKA Moscow</td>
											<td><img src="modules/fmsdb/img/flags/s/RUS.gif" alt="Russia">  RUS</td>
											<td>Premier Division</td>
											<td>1M</td>
											<td>Professional</td>
											<td>18,636</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
											<td>1911</td>
											<td>26.4</td>
										</tr>
										<tr>
											<td id="1520">Dinamo Moscow</td>
											<td><img src="modules/fmsdb/img/flags/s/RUS.gif" alt="Russia">  RUS</td>
											<td>First Division</td>
											<td>115K</td>
											<td>Professional</td>
											<td>18,636</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#0860D0"></span></td>
											<td>1923</td>
											<td>26.9</td>
										</tr>
										<tr>
											<td id="130496">Fakel</td>
											<td><img src="modules/fmsdb/img/flags/s/RUS.gif" alt="Russia">  RUS</td>
											<td>First Division</td>
											<td>0</td>
											<td>Professional</td>
											<td>34,800</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#0050D0"></span></td>
											<td>1947</td>
											<td>26.4</td>
										</tr>
										<tr>
											<td id="130525">Khimki</td>
											<td><img src="modules/fmsdb/img/flags/s/RUS.gif" alt="Russia">  RUS</td>
											<td>First Division</td>
											<td>1K</td>
											<td>Professional</td>
											<td>5,083</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
											<td>1997</td>
											<td>25.2</td>
										</tr>
										<tr>
											<td id="58029064">Krasnodar</td>
											<td><img src="modules/fmsdb/img/flags/s/RUS.gif" alt="Russia">  RUS</td>
											<td>Premier Division</td>
											<td>861K</td>
											<td>Professional</td>
											<td>35,200</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#004828"></span></td>
											<td>2007</td>
											<td>24.7</td>
										</tr>
										<tr>
											<td id="1523">Krylja Sovetov</td>
											<td><img src="modules/fmsdb/img/flags/s/RUS.gif" alt="Russia">  RUS</td>
											<td>Premier Division</td>
											<td>43K</td>
											<td>Professional</td>
											<td>30,251</td>
											<td><span class="label" style="background:#60C0F8"></span> <span class="label" style="background:#60A0D0"></span></td>
											<td>1942</td>
											<td>25.0</td>
										</tr>
										<tr>
											<td id="130536">Kuban</td>
											<td><img src="modules/fmsdb/img/flags/s/RUS.gif" alt="Russia">  RUS</td>
											<td>First Division</td>
											<td>0</td>
											<td>Professional</td>
											<td>35,200</td>
											<td><span class="label" style="background:#108048"></span> <span class="label" style="background:#F8F000"></span></td>
											<td>1928</td>
											<td>27.1</td>
										</tr>
										<tr>
											<td id="1525">Lokomotiv Moscow</td>
											<td><img src="modules/fmsdb/img/flags/s/RUS.gif" alt="Russia">  RUS</td>
											<td>Premier Division</td>
											<td>861K</td>
											<td>Professional</td>
											<td>28,800</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
											<td>1923</td>
											<td>28.0</td>
										</tr>
										<tr>
											<td id="130558">Luch</td>
											<td><img src="modules/fmsdb/img/flags/s/RUS.gif" alt="Russia">  RUS</td>
											<td>First Division</td>
											<td>0</td>
											<td>Professional</td>
											<td>10,200</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
											<td>1952</td>
											<td>26.5</td>
										</tr>
										<tr>
											<td id="8083031">Mordovia</td>
											<td><img src="modules/fmsdb/img/flags/s/RUS.gif" alt="Russia">  RUS</td>
											<td>First Division</td>
											<td>0</td>
											<td>Professional</td>
											<td>11,613</td>
											<td><span class="label" style="background:#082040"></span> <span class="label" style="background:#B00000"></span></td>
											<td>1961</td>
											<td>27.0</td>
										</tr>
										<tr>
											<td id="130550">Neftekhimik</td>
											<td><img src="modules/fmsdb/img/flags/s/RUS.gif" alt="Russia">  RUS</td>
											<td>First Division</td>
											<td>0</td>
											<td>Professional</td>
											<td>3,140</td>
											<td><span class="label" style="background:#E00000"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1991</td>
											<td>26.4</td>
										</tr>
										<tr>
											<td id="58127493">Orenburg</td>
											<td><img src="modules/fmsdb/img/flags/s/RUS.gif" alt="Russia">  RUS</td>
											<td>Premier Division</td>
											<td>0</td>
											<td>Professional</td>
											<td>4,800</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#0050D0"></span></td>
											<td>1976</td>
											<td>27.8</td>
										</tr>
										<tr>
											<td id="1301104">Rostov</td>
											<td><img src="modules/fmsdb/img/flags/s/RUS.gif" alt="Russia">  RUS</td>
											<td>Premier Division</td>
											<td>43K</td>
											<td>Professional</td>
											<td>15,840</td>
											<td><span class="label" style="background:#0050D0"></span> <span class="label" style="background:#F8F000"></span></td>
											<td>1930</td>
											<td>26.3</td>
										</tr>
										<tr>
											<td id="130509">Rubin</td>
											<td><img src="modules/fmsdb/img/flags/s/RUS.gif" alt="Russia">  RUS</td>
											<td>Premier Division</td>
											<td>431K</td>
											<td>Professional</td>
											<td>27,756</td>
											<td><span class="label" style="background:#D8B028"></span> <span class="label" style="background:#600000"></span></td>
											<td>1958</td>
											<td>25.6</td>
										</tr>
										<tr>
											<td id="130510">Shinnik</td>
											<td><img src="modules/fmsdb/img/flags/s/RUS.gif" alt="Russia">  RUS</td>
											<td>First Division</td>
											<td>0</td>
											<td>Professional</td>
											<td>22,984</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#1068F8"></span></td>
											<td>1957</td>
											<td>25.2</td>
										</tr>
										<tr>
											<td id="58001661">Sibir</td>
											<td><img src="modules/fmsdb/img/flags/s/RUS.gif" alt="Russia">  RUS</td>
											<td>First Division</td>
											<td>0</td>
											<td>Professional</td>
											<td>12,500</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
											<td>1934</td>
											<td>25.8</td>
										</tr>
										<tr>
											<td id="130561">SKA Khabarovsk</td>
											<td><img src="modules/fmsdb/img/flags/s/RUS.gif" alt="Russia">  RUS</td>
											<td>First Division</td>
											<td>0</td>
											<td>Professional</td>
											<td>15,200</td>
											<td><span class="label" style="background:#002060"></span> <span class="label" style="background:#C80000"></span></td>
											<td>1946</td>
											<td>27.3</td>
										</tr>
										<tr>
											<td id="130511">Sokol</td>
											<td><img src="modules/fmsdb/img/flags/s/RUS.gif" alt="Russia">  RUS</td>
											<td>First Division</td>
											<td>0</td>
											<td>Professional</td>
											<td>15,000</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
											<td>1946</td>
											<td>25.5</td>
										</tr>
										<tr>
											<td id="58098003">Spartak M-2</td>
											<td><img src="modules/fmsdb/img/flags/s/RUS.gif" alt="Russia">  RUS</td>
											<td>First Division</td>
											<td>0</td>
											<td>Professional</td>
											<td>2,700</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
											<td>2013</td>
											<td>20.6</td>
										</tr>
										<tr>
											<td id="1529">Spartak Moscow</td>
											<td><img src="modules/fmsdb/img/flags/s/RUS.gif" alt="Russia">  RUS</td>
											<td>Premier Division</td>
											<td>861K</td>
											<td>Professional</td>
											<td>46,990</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
											<td>1922</td>
											<td>25.3</td>
										</tr>
										<tr>
											<td id="130512">Spartak Nalchik</td>
											<td><img src="modules/fmsdb/img/flags/s/RUS.gif" alt="Russia">  RUS</td>
											<td>First Division</td>
											<td>0</td>
											<td>Professional</td>
											<td>13,800</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#E00000"></span></td>
											<td>1935</td>
											<td>24.1</td>
										</tr>
										<tr>
											<td id="58101284">Tambov</td>
											<td><img src="modules/fmsdb/img/flags/s/RUS.gif" alt="Russia">  RUS</td>
											<td>First Division</td>
											<td>0</td>
											<td>Professional</td>
											<td>6,300</td>
											<td><span class="label" style="background:#E00000"></span> <span class="label" style="background:#0050D0"></span></td>
											<td>2013</td>
											<td>27.3</td>
										</tr>
										<tr>
											<td id="477632">Terek</td>
											<td><img src="modules/fmsdb/img/flags/s/RUS.gif" alt="Russia">  RUS</td>
											<td>Premier Division</td>
											<td>43K</td>
											<td>Professional</td>
											<td>30,597</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#108048"></span></td>
											<td>1958</td>
											<td>26.0</td>
										</tr>
										<tr>
											<td id="130514">Tom</td>
											<td><img src="modules/fmsdb/img/flags/s/RUS.gif" alt="Russia">  RUS</td>
											<td>Premier Division</td>
											<td>0</td>
											<td>Professional</td>
											<td>10,028</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#40B868"></span></td>
											<td>1957</td>
											<td>26.8</td>
										</tr>
										<tr>
											<td id="58062109">Tosno</td>
											<td><img src="modules/fmsdb/img/flags/s/RUS.gif" alt="Russia">  RUS</td>
											<td>First Division</td>
											<td>43K</td>
											<td>Professional</td>
											<td>3,223</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>0</td>
											<td>26.1</td>
										</tr>
										<tr>
											<td id="1519">Tyumen</td>
											<td><img src="modules/fmsdb/img/flags/s/RUS.gif" alt="Russia">  RUS</td>
											<td>First Division</td>
											<td>0</td>
											<td>Professional</td>
											<td>15,000</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#000000"></span></td>
											<td>1961</td>
											<td>26.7</td>
										</tr>
										<tr>
											<td id="58064627">Ufa</td>
											<td><img src="modules/fmsdb/img/flags/s/RUS.gif" alt="Russia">  RUS</td>
											<td>Premier Division</td>
											<td>43K</td>
											<td>Professional</td>
											<td>15,200</td>
											<td><span class="label" style="background:#78F800"></span> <span class="label" style="background:#288850"></span></td>
											<td>2010</td>
											<td>25.3</td>
										</tr>
										<tr>
											<td id="1533">Ural</td>
											<td><img src="modules/fmsdb/img/flags/s/RUS.gif" alt="Russia">  RUS</td>
											<td>Premier Division</td>
											<td>86K</td>
											<td>Professional</td>
											<td>10,000</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F07028"></span></td>
											<td>1930</td>
											<td>25.0</td>
										</tr>
										<tr>
											<td id="130515">Volgar</td>
											<td><img src="modules/fmsdb/img/flags/s/RUS.gif" alt="Russia">  RUS</td>
											<td>First Division</td>
											<td>48K</td>
											<td>Professional</td>
											<td>17,712</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1960</td>
											<td>23.5</td>
										</tr>
										<tr>
											<td id="58066512">Yenisey</td>
											<td><img src="modules/fmsdb/img/flags/s/RUS.gif" alt="Russia">  RUS</td>
											<td>First Division</td>
											<td>0</td>
											<td>Professional</td>
											<td>26,000</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
											<td>1937</td>
											<td>26.4</td>
										</tr>
										<tr>
											<td id="1301108">Zenit</td>
											<td><img src="modules/fmsdb/img/flags/s/RUS.gif" alt="Russia">  RUS</td>
											<td>Premier Division</td>
											<td>26M</td>
											<td>Professional</td>
											<td>21,110</td>
											<td><span class="label" style="background:#0050D0"></span> <span class="label" style="background:#0098E0"></span></td>
											<td>1925</td>
											<td>26.3</td>
										</tr>
										<tr>
											<td id="495359">Zenit-2</td>
											<td><img src="modules/fmsdb/img/flags/s/RUS.gif" alt="Russia">  RUS</td>
											<td>First Division</td>
											<td>0</td>
											<td>Professional</td>
											<td>3,033</td>
											<td><span class="label" style="background:#2850A0"></span> <span class="label" style="background:#60A0D0"></span></td>
											<td>0</td>
											<td>22.3</td>
										</tr>
										<tr>
											<td id="1536">Aberdeen</td>
											<td><img src="modules/fmsdb/img/flags/s/SCO.gif" alt="Scotland">  SCO</td>
											<td>Ladbrokes Premiership</td>
											<td>200K</td>
											<td>Professional</td>
											<td>20,866</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#C81018"></span></td>
											<td>1903</td>
											<td>23.6</td>
										</tr>
										<tr>
											<td id="5203872">Airdrie</td>
											<td><img src="modules/fmsdb/img/flags/s/SCO.gif" alt="Scotland">  SCO</td>
											<td>Ladbrokes League 1</td>
											<td>10K</td>
											<td>Professional</td>
											<td>10,101</td>
											<td><span class="label" style="background:#E00000"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>2002</td>
											<td>21.7</td>
										</tr>
										<tr>
											<td id="1538">Albion Rovers</td>
											<td><img src="modules/fmsdb/img/flags/s/SCO.gif" alt="Scotland">  SCO</td>
											<td>Ladbrokes League 1</td>
											<td>20K</td>
											<td>Semi-Professional</td>
											<td>1,238</td>
											<td><span class="label" style="background:#F8F838"></span> <span class="label" style="background:#F8F838"></span></td>
											<td>1882</td>
											<td>24.3</td>
										</tr>
										<tr>
											<td id="1539">Alloa</td>
											<td><img src="modules/fmsdb/img/flags/s/SCO.gif" alt="Scotland">  SCO</td>
											<td>Ladbrokes League 1</td>
											<td>75K</td>
											<td>Semi-Professional</td>
											<td>3,100</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F8A800"></span></td>
											<td>1883</td>
											<td>25.8</td>
										</tr>
										<tr>
											<td id="1540">Annan</td>
											<td><img src="modules/fmsdb/img/flags/s/SCO.gif" alt="Scotland">  SCO</td>
											<td>Ladbrokes League 2</td>
											<td>15K</td>
											<td>Semi-Professional</td>
											<td>2,504</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F8D000"></span></td>
											<td>1942</td>
											<td>22.4</td>
										</tr>
										<tr>
											<td id="1541">Arbroath</td>
											<td><img src="modules/fmsdb/img/flags/s/SCO.gif" alt="Scotland">  SCO</td>
											<td>Ladbrokes League 2</td>
											<td>20K</td>
											<td>Semi-Professional</td>
											<td>6,600</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#880818"></span></td>
											<td>1878</td>
											<td>24.6</td>
										</tr>
										<tr>
											<td id="1542">Ayr</td>
											<td><img src="modules/fmsdb/img/flags/s/SCO.gif" alt="Scotland">  SCO</td>
											<td>Ladbrokes Championship</td>
											<td>8K</td>
											<td>Professional</td>
											<td>10,185</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
											<td>1910</td>
											<td>23.6</td>
										</tr>
										<tr>
											<td id="1543">Berwick</td>
											<td><img src="modules/fmsdb/img/flags/s/SCO.gif" alt="Scotland">  SCO</td>
											<td>Ladbrokes League 2</td>
											<td>3K</td>
											<td>Semi-Professional</td>
											<td>4,099</td>
											<td><span class="label" style="background:#F8D000"></span> <span class="label" style="background:#000000"></span></td>
											<td>1881</td>
											<td>23.2</td>
										</tr>
										<tr>
											<td id="1544">Brechin</td>
											<td><img src="modules/fmsdb/img/flags/s/SCO.gif" alt="Scotland">  SCO</td>
											<td>Ladbrokes League 1</td>
											<td>30K</td>
											<td>Semi-Professional</td>
											<td>4,083</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#D02028"></span></td>
											<td>1906</td>
											<td>26.4</td>
										</tr>
										<tr>
											<td id="1569">Celtic</td>
											<td><img src="modules/fmsdb/img/flags/s/SCO.gif" alt="Scotland">  SCO</td>
											<td>Ladbrokes Premiership</td>
											<td>2M</td>
											<td>Professional</td>
											<td>60,411</td>
											<td><span class="label" style="background:#188848"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1888</td>
											<td>24.2</td>
										</tr>
										<tr>
											<td id="1548">Clyde</td>
											<td><img src="modules/fmsdb/img/flags/s/SCO.gif" alt="Scotland">  SCO</td>
											<td>Ladbrokes League 2</td>
											<td>0</td>
											<td>Professional</td>
											<td>8,086</td>
											<td><span class="label" style="background:#F0F0F0"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1877</td>
											<td>24.2</td>
										</tr>
										<tr>
											<td id="1552">Cowdenbeath</td>
											<td><img src="modules/fmsdb/img/flags/s/SCO.gif" alt="Scotland">  SCO</td>
											<td>Ladbrokes League 2</td>
											<td>0</td>
											<td>Semi-Professional</td>
											<td>4,309</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#0050D0"></span></td>
											<td>1881</td>
											<td>23.8</td>
										</tr>
										<tr>
											<td id="1554">Dumbarton</td>
											<td><img src="modules/fmsdb/img/flags/s/SCO.gif" alt="Scotland">  SCO</td>
											<td>Ladbrokes Championship</td>
											<td>9K</td>
											<td>Semi-Professional</td>
											<td>2,020</td>
											<td><span class="label" style="background:#F8D000"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1872</td>
											<td>25.9</td>
										</tr>
										<tr>
											<td id="1555">Dundee</td>
											<td><img src="modules/fmsdb/img/flags/s/SCO.gif" alt="Scotland">  SCO</td>
											<td>Ladbrokes Premiership</td>
											<td>500K</td>
											<td>Professional</td>
											<td>11,506</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#202030"></span></td>
											<td>1893</td>
											<td>24.1</td>
										</tr>
										<tr>
											<td id="1556">Dundee Utd</td>
											<td><img src="modules/fmsdb/img/flags/s/SCO.gif" alt="Scotland">  SCO</td>
											<td>Ladbrokes Championship</td>
											<td>200K</td>
											<td>Professional</td>
											<td>14,223</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#E07000"></span></td>
											<td>1909</td>
											<td>23.5</td>
										</tr>
										<tr>
											<td id="1557">Dunfermline</td>
											<td><img src="modules/fmsdb/img/flags/s/SCO.gif" alt="Scotland">  SCO</td>
											<td>Ladbrokes Championship</td>
											<td>29K</td>
											<td>Professional</td>
											<td>11,904</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
											<td>1885</td>
											<td>25.5</td>
										</tr>
										<tr>
											<td id="1558">East Fife</td>
											<td><img src="modules/fmsdb/img/flags/s/SCO.gif" alt="Scotland">  SCO</td>
											<td>Ladbrokes League 1</td>
											<td>10K</td>
											<td>Semi-Professional</td>
											<td>1,998</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F8D000"></span></td>
											<td>1903</td>
											<td>23.6</td>
										</tr>
										<tr>
											<td id="5201742">Edinburgh City</td>
											<td><img src="modules/fmsdb/img/flags/s/SCO.gif" alt="Scotland">  SCO</td>
											<td>Ladbrokes League 2</td>
											<td>0</td>
											<td>Semi-Professional</td>
											<td>5,000</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
											<td>1928</td>
											<td>25.1</td>
										</tr>
										<tr>
											<td id="1562">Elgin City</td>
											<td><img src="modules/fmsdb/img/flags/s/SCO.gif" alt="Scotland">  SCO</td>
											<td>Ladbrokes League 2</td>
											<td>20K</td>
											<td>Semi-Professional</td>
											<td>4,520</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#000000"></span></td>
											<td>1893</td>
											<td>23.4</td>
										</tr>
										<tr>
											<td id="1563">Falkirk</td>
											<td><img src="modules/fmsdb/img/flags/s/SCO.gif" alt="Scotland">  SCO</td>
											<td>Ladbrokes Championship</td>
											<td>0</td>
											<td>Professional</td>
											<td>7,937</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#101838"></span></td>
											<td>1876</td>
											<td>24.0</td>
										</tr>
										<tr>
											<td id="1564">Forfar</td>
											<td><img src="modules/fmsdb/img/flags/s/SCO.gif" alt="Scotland">  SCO</td>
											<td>Ladbrokes League 2</td>
											<td>55K</td>
											<td>Semi-Professional</td>
											<td>6,777</td>
											<td><span class="label" style="background:#6098C8"></span> <span class="label" style="background:#082858"></span></td>
											<td>1885</td>
											<td>25.0</td>
										</tr>
										<tr>
											<td id="1572">Hamilton</td>
											<td><img src="modules/fmsdb/img/flags/s/SCO.gif" alt="Scotland">  SCO</td>
											<td>Ladbrokes Premiership</td>
											<td>100K</td>
											<td>Professional</td>
											<td>5,510</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
											<td>1874</td>
											<td>24.7</td>
										</tr>
										<tr>
											<td id="1573">Hearts</td>
											<td><img src="modules/fmsdb/img/flags/s/SCO.gif" alt="Scotland">  SCO</td>
											<td>Ladbrokes Premiership</td>
											<td>200K</td>
											<td>Professional</td>
											<td>17,480</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#800020"></span></td>
											<td>1874</td>
											<td>22.9</td>
										</tr>
										<tr>
											<td id="1575">Hibernian</td>
											<td><img src="modules/fmsdb/img/flags/s/SCO.gif" alt="Scotland">  SCO</td>
											<td>Ladbrokes Championship</td>
											<td>219K</td>
											<td>Professional</td>
											<td>20,421</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#006830"></span></td>
											<td>1875</td>
											<td>23.4</td>
										</tr>
										<tr>
											<td id="1577">Inverness CT</td>
											<td><img src="modules/fmsdb/img/flags/s/SCO.gif" alt="Scotland">  SCO</td>
											<td>Ladbrokes Premiership</td>
											<td>30K</td>
											<td>Professional</td>
											<td>7,512</td>
											<td><span class="label" style="background:#E00000"></span> <span class="label" style="background:#3868B8"></span></td>
											<td>1994</td>
											<td>24.7</td>
										</tr>
										<tr>
											<td id="1580">Kilmarnock</td>
											<td><img src="modules/fmsdb/img/flags/s/SCO.gif" alt="Scotland">  SCO</td>
											<td>Ladbrokes Premiership</td>
											<td>40K</td>
											<td>Professional</td>
											<td>17,891</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
											<td>1869</td>
											<td>23.0</td>
										</tr>
										<tr>
											<td id="1581">Livingston</td>
											<td><img src="modules/fmsdb/img/flags/s/SCO.gif" alt="Scotland">  SCO</td>
											<td>Ladbrokes League 1</td>
											<td>0</td>
											<td>Professional</td>
											<td>8,716</td>
											<td><span class="label" style="background:#F0E020"></span> <span class="label" style="background:#000000"></span></td>
											<td>1974</td>
											<td>21.6</td>
										</tr>
										<tr>
											<td id="1583">Montrose</td>
											<td><img src="modules/fmsdb/img/flags/s/SCO.gif" alt="Scotland">  SCO</td>
											<td>Ladbrokes League 2</td>
											<td>0</td>
											<td>Semi-Professional</td>
											<td>4,936</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#2850A0"></span></td>
											<td>1879</td>
											<td>24.3</td>
										</tr>
										<tr>
											<td id="1571">Morton</td>
											<td><img src="modules/fmsdb/img/flags/s/SCO.gif" alt="Scotland">  SCO</td>
											<td>Ladbrokes Championship</td>
											<td>20K</td>
											<td>Professional</td>
											<td>11,589</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
											<td>1874</td>
											<td>21.6</td>
										</tr>
										<tr>
											<td id="1584">Motherwell</td>
											<td><img src="modules/fmsdb/img/flags/s/SCO.gif" alt="Scotland">  SCO</td>
											<td>Ladbrokes Premiership</td>
											<td>5K</td>
											<td>Professional</td>
											<td>13,677</td>
											<td><span class="label" style="background:#600000"></span> <span class="label" style="background:#F89830"></span></td>
											<td>1886</td>
											<td>24.6</td>
										</tr>
										<tr>
											<td id="1586">Partick Thistle</td>
											<td><img src="modules/fmsdb/img/flags/s/SCO.gif" alt="Scotland">  SCO</td>
											<td>Ladbrokes Premiership</td>
											<td>50K</td>
											<td>Professional</td>
											<td>10,102</td>
											<td><span class="label" style="background:#C82030"></span> <span class="label" style="background:#F0E020"></span></td>
											<td>1876</td>
											<td>23.7</td>
										</tr>
										<tr>
											<td id="1588">Peterhead</td>
											<td><img src="modules/fmsdb/img/flags/s/SCO.gif" alt="Scotland">  SCO</td>
											<td>Ladbrokes League 1</td>
											<td>20K</td>
											<td>Semi-Professional</td>
											<td>3,150</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#304078"></span></td>
											<td>1890</td>
											<td>26.1</td>
										</tr>
										<tr>
											<td id="1590">Queen of Sth</td>
											<td><img src="modules/fmsdb/img/flags/s/SCO.gif" alt="Scotland">  SCO</td>
											<td>Ladbrokes Championship</td>
											<td>75K</td>
											<td>Professional</td>
											<td>8,690</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#003098"></span></td>
											<td>1919</td>
											<td>23.6</td>
										</tr>
										<tr>
											<td id="1591">Queen's Park</td>
											<td><img src="modules/fmsdb/img/flags/s/SCO.gif" alt="Scotland">  SCO</td>
											<td>Ladbrokes League 1</td>
											<td>0</td>
											<td>Amateur</td>
											<td>51,866</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#002060"></span></td>
											<td>1867</td>
											<td>23.9</td>
										</tr>
										<tr>
											<td id="1592">Raith</td>
											<td><img src="modules/fmsdb/img/flags/s/SCO.gif" alt="Scotland">  SCO</td>
											<td>Ladbrokes Championship</td>
											<td>70K</td>
											<td>Professional</td>
											<td>9,031</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#202030"></span></td>
											<td>1883</td>
											<td>24.0</td>
										</tr>
										<tr>
											<td id="1570">Rangers</td>
											<td><img src="modules/fmsdb/img/flags/s/SCO.gif" alt="Scotland">  SCO</td>
											<td>Ladbrokes Premiership</td>
											<td>1M</td>
											<td>Professional</td>
											<td>50,817</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#0058B8"></span></td>
											<td>1872</td>
											<td>24.7</td>
										</tr>
										<tr>
											<td id="1593">Ross County</td>
											<td><img src="modules/fmsdb/img/flags/s/SCO.gif" alt="Scotland">  SCO</td>
											<td>Ladbrokes Premiership</td>
											<td>150K</td>
											<td>Professional</td>
											<td>6,541</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
											<td>1929</td>
											<td>25.2</td>
										</tr>
										<tr>
											<td id="1596">St. Johnstone</td>
											<td><img src="modules/fmsdb/img/flags/s/SCO.gif" alt="Scotland">  SCO</td>
											<td>Ladbrokes Premiership</td>
											<td>80K</td>
											<td>Professional</td>
											<td>10,696</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#2068B0"></span></td>
											<td>1884</td>
											<td>25.5</td>
										</tr>
										<tr>
											<td id="1597">St. Mirren</td>
											<td><img src="modules/fmsdb/img/flags/s/SCO.gif" alt="Scotland">  SCO</td>
											<td>Ladbrokes Championship</td>
											<td>40K</td>
											<td>Professional</td>
											<td>8,023</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1877</td>
											<td>23.9</td>
										</tr>
										<tr>
											<td id="1598">Stenhousemuir</td>
											<td><img src="modules/fmsdb/img/flags/s/SCO.gif" alt="Scotland">  SCO</td>
											<td>Ladbrokes League 1</td>
											<td>15K</td>
											<td>Semi-Professional</td>
											<td>4,096</td>
											<td><span class="label" style="background:#A0C8F0"></span> <span class="label" style="background:#781828"></span></td>
											<td>1884</td>
											<td>23.7</td>
										</tr>
										<tr>
											<td id="1599">Stirling</td>
											<td><img src="modules/fmsdb/img/flags/s/SCO.gif" alt="Scotland">  SCO</td>
											<td>Ladbrokes League 2</td>
											<td>20K</td>
											<td>Semi-Professional</td>
											<td>3,808</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#C80030"></span></td>
											<td>1945</td>
											<td>24.4</td>
										</tr>
										<tr>
											<td id="1600">Stranraer</td>
											<td><img src="modules/fmsdb/img/flags/s/SCO.gif" alt="Scotland">  SCO</td>
											<td>Ladbrokes League 1</td>
											<td>30K</td>
											<td>Semi-Professional</td>
											<td>4,178</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#0050D0"></span></td>
											<td>1870</td>
											<td>24.9</td>
										</tr>
										<tr>
											<td id="5743463">Backa</td>
											<td><img src="modules/fmsdb/img/flags/s/SRB.gif" alt="Serbia">  SRB</td>
											<td>SuperLeague</td>
											<td>69K</td>
											<td>Professional</td>
											<td>14,458</td>
											<td><span class="label" style="background:#005098"></span> <span class="label" style="background:#0078F8"></span></td>
											<td>1945</td>
											<td>25.6</td>
										</tr>
										<tr>
											<td id="5742970">Bezanija</td>
											<td><img src="modules/fmsdb/img/flags/s/SRB.gif" alt="Serbia">  SRB</td>
											<td>First League</td>
											<td>69K</td>
											<td>Professional</td>
											<td>3,000</td>
											<td><span class="label" style="background:#0030A0"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1921</td>
											<td>24.1</td>
										</tr>
										<tr>
											<td id="1301381">Borac</td>
											<td><img src="modules/fmsdb/img/flags/s/SRB.gif" alt="Serbia">  SRB</td>
											<td>SuperLeague</td>
											<td>198K</td>
											<td>Professional</td>
											<td>8,000</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#E00000"></span></td>
											<td>1926</td>
											<td>24.4</td>
										</tr>
										<tr>
											<td id="5742971">BSK Borca</td>
											<td><img src="modules/fmsdb/img/flags/s/SRB.gif" alt="Serbia">  SRB</td>
											<td>First League</td>
											<td>52K</td>
											<td>Professional</td>
											<td>3,000</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#0030A0"></span></td>
											<td>1937</td>
											<td>21.8</td>
										</tr>
										<tr>
											<td id="5756755">Buducnost (D)</td>
											<td><img src="modules/fmsdb/img/flags/s/SRB.gif" alt="Serbia">  SRB</td>
											<td>First League</td>
											<td>34K</td>
											<td>Semi-Professional</td>
											<td>700</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
											<td>1920</td>
											<td>25.8</td>
										</tr>
										<tr>
											<td id="5741146">CSK Pivara</td>
											<td><img src="modules/fmsdb/img/flags/s/SRB.gif" alt="Serbia">  SRB</td>
											<td>First League</td>
											<td>69K</td>
											<td>Professional</td>
											<td>2,360</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1925</td>
											<td>23.7</td>
										</tr>
										<tr>
											<td id="1301372">Cukaricki</td>
											<td><img src="modules/fmsdb/img/flags/s/SRB.gif" alt="Serbia">  SRB</td>
											<td>SuperLeague</td>
											<td>775K</td>
											<td>Professional</td>
											<td>4,070</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#F0F0F0"></span></td>
											<td>1926</td>
											<td>24.4</td>
										</tr>
										<tr>
											<td id="5744698">Dinamo (V)</td>
											<td><img src="modules/fmsdb/img/flags/s/SRB.gif" alt="Serbia">  SRB</td>
											<td>First League</td>
											<td>43K</td>
											<td>Semi-Professional</td>
											<td>5,000</td>
											<td><span class="label" style="background:#0078F8"></span> <span class="label" style="background:#F8D000"></span></td>
											<td>1947</td>
											<td>25.8</td>
										</tr>
										<tr>
											<td id="5745180">Indjija</td>
											<td><img src="modules/fmsdb/img/flags/s/SRB.gif" alt="Serbia">  SRB</td>
											<td>First League</td>
											<td>69K</td>
											<td>Professional</td>
											<td>4,500</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
											<td>1933</td>
											<td>24.1</td>
										</tr>
										<tr>
											<td id="5743586">Jagodina</td>
											<td><img src="modules/fmsdb/img/flags/s/SRB.gif" alt="Serbia">  SRB</td>
											<td>First League</td>
											<td>103K</td>
											<td>Professional</td>
											<td>15,000</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#0050D0"></span></td>
											<td>1918</td>
											<td>25.6</td>
										</tr>
										<tr>
											<td id="5742987">Javor</td>
											<td><img src="modules/fmsdb/img/flags/s/SRB.gif" alt="Serbia">  SRB</td>
											<td>SuperLeague</td>
											<td>103K</td>
											<td>Professional</td>
											<td>4,000</td>
											<td><span class="label" style="background:#904090"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1912</td>
											<td>25.3</td>
										</tr>
										<tr>
											<td id="136460">Kolubara</td>
											<td><img src="modules/fmsdb/img/flags/s/SRB.gif" alt="Serbia">  SRB</td>
											<td>First League</td>
											<td>52K</td>
											<td>Professional</td>
											<td>1,000</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#006030"></span></td>
											<td>1919</td>
											<td>24.8</td>
										</tr>
										<tr>
											<td id="5740640">Macva</td>
											<td><img src="modules/fmsdb/img/flags/s/SRB.gif" alt="Serbia">  SRB</td>
											<td>First League</td>
											<td>43K</td>
											<td>Semi-Professional</td>
											<td>8,000</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#C80000"></span></td>
											<td>1919</td>
											<td>26.8</td>
										</tr>
										<tr>
											<td id="5742993">Metalac</td>
											<td><img src="modules/fmsdb/img/flags/s/SRB.gif" alt="Serbia">  SRB</td>
											<td>SuperLeague</td>
											<td>95K</td>
											<td>Professional</td>
											<td>4,600</td>
											<td><span class="label" style="background:#60C0F8"></span> <span class="label" style="background:#0030A0"></span></td>
											<td>1961</td>
											<td>24.5</td>
										</tr>
										<tr>
											<td id="1301374">Mladost</td>
											<td><img src="modules/fmsdb/img/flags/s/SRB.gif" alt="Serbia">  SRB</td>
											<td>SuperLeague</td>
											<td>146K</td>
											<td>Professional</td>
											<td>8,050</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#0050D0"></span></td>
											<td>1952</td>
											<td>25.9</td>
										</tr>
										<tr>
											<td id="1950">Napredak</td>
											<td><img src="modules/fmsdb/img/flags/s/SRB.gif" alt="Serbia">  SRB</td>
											<td>SuperLeague</td>
											<td>215K</td>
											<td>Professional</td>
											<td>10,331</td>
											<td><span class="label" style="background:#B00000"></span> <span class="label" style="background:#C80000"></span></td>
											<td>1946</td>
											<td>26.5</td>
										</tr>
										<tr>
											<td id="6400020">Novi Pazar</td>
											<td><img src="modules/fmsdb/img/flags/s/SRB.gif" alt="Serbia">  SRB</td>
											<td>SuperLeague</td>
											<td>95K</td>
											<td>Professional</td>
											<td>12,000</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#0030A0"></span></td>
											<td>1928</td>
											<td>26.1</td>
										</tr>
										<tr>
											<td id="62144657">Odzaci</td>
											<td><img src="modules/fmsdb/img/flags/s/SRB.gif" alt="Serbia">  SRB</td>
											<td>First League</td>
											<td>30K</td>
											<td>Semi-Professional</td>
											<td>1,500</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
											<td>1969</td>
											<td>25.7</td>
										</tr>
										<tr>
											<td id="1951">OFK Beograd</td>
											<td><img src="modules/fmsdb/img/flags/s/SRB.gif" alt="Serbia">  SRB</td>
											<td>First League</td>
											<td>78K</td>
											<td>Professional</td>
											<td>19,100</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#0050D0"></span></td>
											<td>1911</td>
											<td>21.2</td>
										</tr>
										<tr>
											<td id="1952">Partizan</td>
											<td><img src="modules/fmsdb/img/flags/s/SRB.gif" alt="Serbia">  SRB</td>
											<td>SuperLeague</td>
											<td>948K</td>
											<td>Professional</td>
											<td>32,710</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
											<td>1945</td>
											<td>24.2</td>
										</tr>
										<tr>
											<td id="62011758">Proleter</td>
											<td><img src="modules/fmsdb/img/flags/s/SRB.gif" alt="Serbia">  SRB</td>
											<td>First League</td>
											<td>52K</td>
											<td>Professional</td>
											<td>2,000</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#E00000"></span></td>
											<td>1951</td>
											<td>21.6</td>
										</tr>
										<tr>
											<td id="1953">Rad</td>
											<td><img src="modules/fmsdb/img/flags/s/SRB.gif" alt="Serbia">  SRB</td>
											<td>SuperLeague</td>
											<td>103K</td>
											<td>Professional</td>
											<td>6,000</td>
											<td><span class="label" style="background:#202848"></span> <span class="label" style="background:#60C0F8"></span></td>
											<td>1958</td>
											<td>27.3</td>
										</tr>
										<tr>
											<td id="1954">Radnicki</td>
											<td><img src="modules/fmsdb/img/flags/s/SRB.gif" alt="Serbia">  SRB</td>
											<td>SuperLeague</td>
											<td>172K</td>
											<td>Professional</td>
											<td>18,151</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#005098"></span></td>
											<td>1923</td>
											<td>23.9</td>
										</tr>
										<tr>
											<td id="5740714">Radnicki (P)</td>
											<td><img src="modules/fmsdb/img/flags/s/SRB.gif" alt="Serbia">  SRB</td>
											<td>First League</td>
											<td>34K</td>
											<td>Professional</td>
											<td>10,816</td>
											<td><span class="label" style="background:#0030A0"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1945</td>
											<td>22.4</td>
										</tr>
										<tr>
											<td id="5748006">Radnik Surdulica</td>
											<td><img src="modules/fmsdb/img/flags/s/SRB.gif" alt="Serbia">  SRB</td>
											<td>SuperLeague</td>
											<td>86K</td>
											<td>Professional</td>
											<td>3,312</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#0050D0"></span></td>
											<td>1926</td>
											<td>26.0</td>
										</tr>
										<tr>
											<td id="1955">Red Star</td>
											<td><img src="modules/fmsdb/img/flags/s/SRB.gif" alt="Serbia">  SRB</td>
											<td>SuperLeague</td>
											<td>948K</td>
											<td>Professional</td>
											<td>55,538</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
											<td>1945</td>
											<td>25.6</td>
										</tr>
										<tr>
											<td id="5751604">Sindjelic</td>
											<td><img src="modules/fmsdb/img/flags/s/SRB.gif" alt="Serbia">  SRB</td>
											<td>First League</td>
											<td>52K</td>
											<td>Professional</td>
											<td>3,000</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#E00000"></span></td>
											<td>1937</td>
											<td>22.4</td>
										</tr>
										<tr>
											<td id="62063172">Sloboda</td>
											<td><img src="modules/fmsdb/img/flags/s/SRB.gif" alt="Serbia">  SRB</td>
											<td>First League</td>
											<td>9K</td>
											<td>Professional</td>
											<td>9,800</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#C80000"></span></td>
											<td>1925</td>
											<td>23.6</td>
										</tr>
										<tr>
											<td id="62031842">Spartak</td>
											<td><img src="modules/fmsdb/img/flags/s/SRB.gif" alt="Serbia">  SRB</td>
											<td>SuperLeague</td>
											<td>146K</td>
											<td>Professional</td>
											<td>14,458</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#60C0F8"></span></td>
											<td>1945</td>
											<td>24.1</td>
										</tr>
										<tr>
											<td id="1957">Vojvodina</td>
											<td><img src="modules/fmsdb/img/flags/s/SRB.gif" alt="Serbia">  SRB</td>
											<td>SuperLeague</td>
											<td>431K</td>
											<td>Professional</td>
											<td>14,458</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#E00000"></span></td>
											<td>1914</td>
											<td>24.2</td>
										</tr>
										<tr>
											<td id="5744631">Vozdovac</td>
											<td><img src="modules/fmsdb/img/flags/s/SRB.gif" alt="Serbia">  SRB</td>
											<td>SuperLeague</td>
											<td>129K</td>
											<td>Professional</td>
											<td>5,200</td>
											<td><span class="label" style="background:#E00000"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1912</td>
											<td>25.0</td>
										</tr>
										<tr>
											<td id="1949">Zemun</td>
											<td><img src="modules/fmsdb/img/flags/s/SRB.gif" alt="Serbia">  SRB</td>
											<td>First League</td>
											<td>52K</td>
											<td>Professional</td>
											<td>10,000</td>
											<td><span class="label" style="background:#00A030"></span> <span class="label" style="background:#002080"></span></td>
											<td>1945</td>
											<td>27.5</td>
										</tr>
										<tr>
											<td id="1848">Aarau</td>
											<td><img src="modules/fmsdb/img/flags/s/SUI.gif" alt="Switzerland">  SUI</td>
											<td>Challenge League</td>
											<td>79K</td>
											<td>Professional</td>
											<td>9,249</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#E00000"></span></td>
											<td>1902</td>
											<td>25.5</td>
										</tr>
										<tr>
											<td id="1849">Basel</td>
											<td><img src="modules/fmsdb/img/flags/s/SUI.gif" alt="Switzerland">  SUI</td>
											<td>Super League</td>
											<td>2M</td>
											<td>Professional</td>
											<td>39,687</td>
											<td><span class="label" style="background:#304078"></span> <span class="label" style="background:#A82030"></span></td>
											<td>1893</td>
											<td>26.3</td>
										</tr>
										<tr>
											<td id="137936">Chiasso</td>
											<td><img src="modules/fmsdb/img/flags/s/SUI.gif" alt="Switzerland">  SUI</td>
											<td>Challenge League</td>
											<td>40K</td>
											<td>Professional</td>
											<td>12,160</td>
											<td><span class="label" style="background:#E00000"></span> <span class="label" style="background:#0030A0"></span></td>
											<td>1905</td>
											<td>22.6</td>
										</tr>
										<tr>
											<td id="1855">Grasshoppers</td>
											<td><img src="modules/fmsdb/img/flags/s/SUI.gif" alt="Switzerland">  SUI</td>
											<td>Super League</td>
											<td>2M</td>
											<td>Professional</td>
											<td>25,000</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#0050D0"></span></td>
											<td>1886</td>
											<td>23.4</td>
										</tr>
										<tr>
											<td id="1856">Lausanne</td>
											<td><img src="modules/fmsdb/img/flags/s/SUI.gif" alt="Switzerland">  SUI</td>
											<td>Super League</td>
											<td>79K</td>
											<td>Professional</td>
											<td>15,770</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#0050D0"></span></td>
											<td>1869</td>
											<td>23.5</td>
										</tr>
										<tr>
											<td id="69005058">Le Mont LS</td>
											<td><img src="modules/fmsdb/img/flags/s/SUI.gif" alt="Switzerland">  SUI</td>
											<td>Challenge League</td>
											<td>6K</td>
											<td>Professional</td>
											<td>2,000</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#E00000"></span></td>
											<td>1942</td>
											<td>25.7</td>
										</tr>
										<tr>
											<td id="1850">Lugano</td>
											<td><img src="modules/fmsdb/img/flags/s/SUI.gif" alt="Switzerland">  SUI</td>
											<td>Super League</td>
											<td>317K</td>
											<td>Professional</td>
											<td>15,000</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#000000"></span></td>
											<td>2003</td>
											<td>24.6</td>
										</tr>
										<tr>
											<td id="1851">Luzern</td>
											<td><img src="modules/fmsdb/img/flags/s/SUI.gif" alt="Switzerland">  SUI</td>
											<td>Super League</td>
											<td>396K</td>
											<td>Professional</td>
											<td>18,000</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#0030A0"></span></td>
											<td>1901</td>
											<td>24.9</td>
										</tr>
										<tr>
											<td id="1857">Neuchatel Xamax</td>
											<td><img src="modules/fmsdb/img/flags/s/SUI.gif" alt="Switzerland">  SUI</td>
											<td>Challenge League</td>
											<td>46K</td>
											<td>Professional</td>
											<td>11,977</td>
											<td><span class="label" style="background:#E00000"></span> <span class="label" style="background:#000000"></span></td>
											<td>1970</td>
											<td>24.5</td>
										</tr>
										<tr>
											<td id="137917">Schaffhausen</td>
											<td><img src="modules/fmsdb/img/flags/s/SUI.gif" alt="Switzerland">  SUI</td>
											<td>Challenge League</td>
											<td>40K</td>
											<td>Professional</td>
											<td>7,300</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F8D000"></span></td>
											<td>1896</td>
											<td>24.0</td>
										</tr>
										<tr>
											<td id="1858">Servette FC</td>
											<td><img src="modules/fmsdb/img/flags/s/SUI.gif" alt="Switzerland">  SUI</td>
											<td>Challenge League</td>
											<td>40K</td>
											<td>Professional</td>
											<td>30,000</td>
											<td><span class="label" style="background:#800020"></span> <span class="label" style="background:#800020"></span></td>
											<td>1890</td>
											<td>24.8</td>
										</tr>
										<tr>
											<td id="1852">Sion</td>
											<td><img src="modules/fmsdb/img/flags/s/SUI.gif" alt="Switzerland">  SUI</td>
											<td>Super League</td>
											<td>950K</td>
											<td>Professional</td>
											<td>20,200</td>
											<td><span class="label" style="background:#E00000"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1909</td>
											<td>25.2</td>
										</tr>
										<tr>
											<td id="1853">St. Gallen</td>
											<td><img src="modules/fmsdb/img/flags/s/SUI.gif" alt="Switzerland">  SUI</td>
											<td>Super League</td>
											<td>792K</td>
											<td>Professional</td>
											<td>19,694</td>
											<td><span class="label" style="background:#40A838"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1879</td>
											<td>24.9</td>
										</tr>
										<tr>
											<td id="514173">Thun</td>
											<td><img src="modules/fmsdb/img/flags/s/SUI.gif" alt="Switzerland">  SUI</td>
											<td>Super League</td>
											<td>79K</td>
											<td>Professional</td>
											<td>10,000</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#E00808"></span></td>
											<td>1898</td>
											<td>24.5</td>
										</tr>
										<tr>
											<td id="5720002">Vaduz</td>
											<td><img src="modules/fmsdb/img/flags/s/SUI.gif" alt="Switzerland">  SUI</td>
											<td>Super League</td>
											<td>79K</td>
											<td>Professional</td>
											<td>7,838</td>
											<td><span class="label" style="background:#E00000"></span> <span class="label" style="background:#901000"></span></td>
											<td>1932</td>
											<td>25.5</td>
										</tr>
										<tr>
											<td id="130820">Wil</td>
											<td><img src="modules/fmsdb/img/flags/s/SUI.gif" alt="Switzerland">  SUI</td>
											<td>Challenge League</td>
											<td>40K</td>
											<td>Professional</td>
											<td>6,000</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1900</td>
											<td>25.7</td>
										</tr>
										<tr>
											<td id="1200101">Winterthur</td>
											<td><img src="modules/fmsdb/img/flags/s/SUI.gif" alt="Switzerland">  SUI</td>
											<td>Challenge League</td>
											<td>40K</td>
											<td>Professional</td>
											<td>9,464</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#E00000"></span></td>
											<td>1896</td>
											<td>23.6</td>
										</tr>
										<tr>
											<td id="137925">Wohlen</td>
											<td><img src="modules/fmsdb/img/flags/s/SUI.gif" alt="Switzerland">  SUI</td>
											<td>Challenge League</td>
											<td>40K</td>
											<td>Professional</td>
											<td>3,734</td>
											<td><span class="label" style="background:#002060"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1904</td>
											<td>23.6</td>
										</tr>
										<tr>
											<td id="1847">Young Boys</td>
											<td><img src="modules/fmsdb/img/flags/s/SUI.gif" alt="Switzerland">  SUI</td>
											<td>Super League</td>
											<td>792K</td>
											<td>Professional</td>
											<td>32,000</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F8D828"></span></td>
											<td>1895</td>
											<td>25.2</td>
										</tr>
										<tr>
											<td id="1854">Zurich</td>
											<td><img src="modules/fmsdb/img/flags/s/SUI.gif" alt="Switzerland">  SUI</td>
											<td>Challenge League</td>
											<td>792K</td>
											<td>Professional</td>
											<td>25,000</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
											<td>1896</td>
											<td>26.5</td>
										</tr>
										<tr>
											<td id="1615">Banska Bystrica</td>
											<td><img src="modules/fmsdb/img/flags/s/SVK.gif" alt="Slovakia">  SVK</td>
											<td>Second Division</td>
											<td>0</td>
											<td>Professional</td>
											<td>10,000</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#B00000"></span></td>
											<td>1965</td>
											<td>23.1</td>
										</tr>
										<tr>
											<td id="1612">Bardejov</td>
											<td><img src="modules/fmsdb/img/flags/s/SVK.gif" alt="Slovakia">  SVK</td>
											<td>Second Division</td>
											<td>9K</td>
											<td>Professional</td>
											<td>2,000</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#E00000"></span></td>
											<td>1922</td>
											<td>23.1</td>
										</tr>
										<tr>
											<td id="1614">Dun. Streda</td>
											<td><img src="modules/fmsdb/img/flags/s/SVK.gif" alt="Slovakia">  SVK</td>
											<td>First Division</td>
											<td>86K</td>
											<td>Professional</td>
											<td>3,264</td>
											<td><span class="label" style="background:#0050D0"></span> <span class="label" style="background:#F8F000"></span></td>
											<td>1904</td>
											<td>24.0</td>
										</tr>
										<tr>
											<td id="63028408">Haniska</td>
											<td><img src="modules/fmsdb/img/flags/s/SVK.gif" alt="Slovakia">  SVK</td>
											<td>Second Division</td>
											<td>0</td>
											<td>Professional</td>
											<td>1,000</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#0030A0"></span></td>
											<td>1931</td>
											<td>24.7</td>
										</tr>
										<tr>
											<td id="7565209">Kosice</td>
											<td><img src="modules/fmsdb/img/flags/s/SVK.gif" alt="Slovakia">  SVK</td>
											<td>Second Division</td>
											<td>4K</td>
											<td>Professional</td>
											<td>9,000</td>
											<td><span class="label" style="background:#0050D0"></span> <span class="label" style="background:#F8F000"></span></td>
											<td>2005</td>
											<td>22.6</td>
										</tr>
										<tr>
											<td id="7564894">Lipany</td>
											<td><img src="modules/fmsdb/img/flags/s/SVK.gif" alt="Slovakia">  SVK</td>
											<td>Second Division</td>
											<td>0</td>
											<td>Professional</td>
											<td>4,000</td>
											<td><span class="label" style="background:#108830"></span> <span class="label" style="background:#108830"></span></td>
											<td>1925</td>
											<td>25.1</td>
										</tr>
										<tr>
											<td id="63000893">Liptovsky Mikulas</td>
											<td><img src="modules/fmsdb/img/flags/s/SVK.gif" alt="Slovakia">  SVK</td>
											<td>Second Division</td>
											<td>5K</td>
											<td>Professional</td>
											<td>1,950</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#E00000"></span></td>
											<td>1934</td>
											<td>22.7</td>
										</tr>
										<tr>
											<td id="1618">Lokomotiva Kosice</td>
											<td><img src="modules/fmsdb/img/flags/s/SVK.gif" alt="Slovakia">  SVK</td>
											<td>Second Division</td>
											<td>10K</td>
											<td>Professional</td>
											<td>650</td>
											<td><span class="label" style="background:#002080"></span> <span class="label" style="background:#0050D0"></span></td>
											<td>1946</td>
											<td>23.9</td>
										</tr>
										<tr>
											<td id="63023671">Martin</td>
											<td><img src="modules/fmsdb/img/flags/s/SVK.gif" alt="Slovakia">  SVK</td>
											<td>Second Division</td>
											<td>0</td>
											<td>Professional</td>
											<td>900</td>
											<td><span class="label" style="background:#0078F8"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1994</td>
											<td>22.7</td>
										</tr>
										<tr>
											<td id="7563783">Michalovce</td>
											<td><img src="modules/fmsdb/img/flags/s/SVK.gif" alt="Slovakia">  SVK</td>
											<td>First Division</td>
											<td>65K</td>
											<td>Professional</td>
											<td>4,440</td>
											<td><span class="label" style="background:#0050D0"></span> <span class="label" style="background:#F8F000"></span></td>
											<td>1911</td>
											<td>22.4</td>
										</tr>
										<tr>
											<td id="63010727">Myjava</td>
											<td><img src="modules/fmsdb/img/flags/s/SVK.gif" alt="Slovakia">  SVK</td>
											<td>First Division</td>
											<td>65K</td>
											<td>Professional</td>
											<td>2,709</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1920</td>
											<td>24.4</td>
										</tr>
										<tr>
											<td id="1301175">Nitra</td>
											<td><img src="modules/fmsdb/img/flags/s/SVK.gif" alt="Slovakia">  SVK</td>
											<td>Second Division</td>
											<td>13K</td>
											<td>Professional</td>
											<td>5,050</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#60C0F8"></span></td>
											<td>1909</td>
											<td>23.8</td>
										</tr>
										<tr>
											<td id="63000906">Nove Mesto</td>
											<td><img src="modules/fmsdb/img/flags/s/SVK.gif" alt="Slovakia">  SVK</td>
											<td>Second Division</td>
											<td>0</td>
											<td>Professional</td>
											<td>2,500</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#008030"></span></td>
											<td>1922</td>
											<td>23.6</td>
										</tr>
										<tr>
											<td id="7560016">Podbrezova</td>
											<td><img src="modules/fmsdb/img/flags/s/SVK.gif" alt="Slovakia">  SVK</td>
											<td>First Division</td>
											<td>43K</td>
											<td>Professional</td>
											<td>4,000</td>
											<td><span class="label" style="background:#901000"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1920</td>
											<td>25.0</td>
										</tr>
										<tr>
											<td id="63011669">Pohronie</td>
											<td><img src="modules/fmsdb/img/flags/s/SVK.gif" alt="Slovakia">  SVK</td>
											<td>Second Division</td>
											<td>0</td>
											<td>Professional</td>
											<td>1,200</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#108830"></span></td>
											<td>1966</td>
											<td>24.8</td>
										</tr>
										<tr>
											<td id="63004281">Poprad</td>
											<td><img src="modules/fmsdb/img/flags/s/SVK.gif" alt="Slovakia">  SVK</td>
											<td>Second Division</td>
											<td>13K</td>
											<td>Professional</td>
											<td>5,700</td>
											<td><span class="label" style="background:#0050D0"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1912</td>
											<td>26.5</td>
										</tr>
										<tr>
											<td id="1624">Presov</td>
											<td><img src="modules/fmsdb/img/flags/s/SVK.gif" alt="Slovakia">  SVK</td>
											<td>First Division</td>
											<td>22K</td>
											<td>Professional</td>
											<td>5,410</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#008030"></span></td>
											<td>1898</td>
											<td>24.7</td>
										</tr>
										<tr>
											<td id="1301171">Rim. Sobota</td>
											<td><img src="modules/fmsdb/img/flags/s/SVK.gif" alt="Slovakia">  SVK</td>
											<td>Second Division</td>
											<td>0</td>
											<td>Professional</td>
											<td>1,970</td>
											<td><span class="label" style="background:#2838A0"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1908</td>
											<td>23.0</td>
										</tr>
										<tr>
											<td id="130873">Ruzomberok</td>
											<td><img src="modules/fmsdb/img/flags/s/SVK.gif" alt="Slovakia">  SVK</td>
											<td>First Division</td>
											<td>129K</td>
											<td>Professional</td>
											<td>4,876</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F87000"></span></td>
											<td>1906</td>
											<td>24.6</td>
										</tr>
										<tr>
											<td id="63011666">Samorin</td>
											<td><img src="modules/fmsdb/img/flags/s/SVK.gif" alt="Slovakia">  SVK</td>
											<td>Second Division</td>
											<td>10K</td>
											<td>Professional</td>
											<td>2,000</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#0050D0"></span></td>
											<td>1914</td>
											<td>23.0</td>
										</tr>
										<tr>
											<td id="7560706">Senica</td>
											<td><img src="modules/fmsdb/img/flags/s/SVK.gif" alt="Slovakia">  SVK</td>
											<td>First Division</td>
											<td>65K</td>
											<td>Professional</td>
											<td>5,070</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#D02028"></span></td>
											<td>1921</td>
											<td>21.8</td>
										</tr>
										<tr>
											<td id="63023681">Sered</td>
											<td><img src="modules/fmsdb/img/flags/s/SVK.gif" alt="Slovakia">  SVK</td>
											<td>Second Division</td>
											<td>4K</td>
											<td>Professional</td>
											<td>3,500</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#E00000"></span></td>
											<td>1914</td>
											<td>23.2</td>
										</tr>
										<tr>
											<td id="63025380">Skalica</td>
											<td><img src="modules/fmsdb/img/flags/s/SVK.gif" alt="Slovakia">  SVK</td>
											<td>Second Division</td>
											<td>17K</td>
											<td>Professional</td>
											<td>3,000</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#108830"></span></td>
											<td>1920</td>
											<td>26.5</td>
										</tr>
										<tr>
											<td id="1622">Slovan Bratislava</td>
											<td><img src="modules/fmsdb/img/flags/s/SVK.gif" alt="Slovakia">  SVK</td>
											<td>First Division</td>
											<td>431K</td>
											<td>Professional</td>
											<td>11,591</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#60C0F8"></span></td>
											<td>1919</td>
											<td>25.3</td>
										</tr>
										<tr>
											<td id="63000895">Spisska Nova Ves</td>
											<td><img src="modules/fmsdb/img/flags/s/SVK.gif" alt="Slovakia">  SVK</td>
											<td>Second Division</td>
											<td>0</td>
											<td>Professional</td>
											<td>10,000</td>
											<td><span class="label" style="background:#60C0F8"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1910</td>
											<td>24.0</td>
										</tr>
										<tr>
											<td id="63031002">Svaty Jur</td>
											<td><img src="modules/fmsdb/img/flags/s/SVK.gif" alt="Slovakia">  SVK</td>
											<td>Second Division</td>
											<td>0</td>
											<td>Professional</td>
											<td>550</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
											<td>1921</td>
											<td>24.6</td>
										</tr>
										<tr>
											<td id="130872">Trencin</td>
											<td><img src="modules/fmsdb/img/flags/s/SVK.gif" alt="Slovakia">  SVK</td>
											<td>First Division</td>
											<td>258K</td>
											<td>Professional</td>
											<td>3,500</td>
											<td><span class="label" style="background:#C80000"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1992</td>
											<td>21.1</td>
										</tr>
										<tr>
											<td id="1623">Trnava</td>
											<td><img src="modules/fmsdb/img/flags/s/SVK.gif" alt="Slovakia">  SVK</td>
											<td>First Division</td>
											<td>215K</td>
											<td>Professional</td>
											<td>18,124</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#E00000"></span></td>
											<td>1923</td>
											<td>24.2</td>
										</tr>
										<tr>
											<td id="1620">Zilina</td>
											<td><img src="modules/fmsdb/img/flags/s/SVK.gif" alt="Slovakia">  SVK</td>
											<td>First Division</td>
											<td>258K</td>
											<td>Professional</td>
											<td>11,310</td>
											<td><span class="label" style="background:#008030"></span> <span class="label" style="background:#F8F000"></span></td>
											<td>1908</td>
											<td>23.7</td>
										</tr>
										<tr>
											<td id="7560050">Zlate Moravce</td>
											<td><img src="modules/fmsdb/img/flags/s/SVK.gif" alt="Slovakia">  SVK</td>
											<td>First Division</td>
											<td>43K</td>
											<td>Professional</td>
											<td>3,787</td>
											<td><span class="label" style="background:#082040"></span> <span class="label" style="background:#E00000"></span></td>
											<td>1995</td>
											<td>24.3</td>
										</tr>
										<tr>
											<td id="63010804">Zvolen</td>
											<td><img src="modules/fmsdb/img/flags/s/SVK.gif" alt="Slovakia">  SVK</td>
											<td>Second Division</td>
											<td>4K</td>
											<td>Professional</td>
											<td>1,870</td>
											<td><span class="label" style="background:#F00000"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1901</td>
											<td>23.5</td>
										</tr>
										<tr>
											<td id="5410642">Aluminij</td>
											<td><img src="modules/fmsdb/img/flags/s/SVN.gif" alt="Slovenia">  SVN</td>
											<td>First League</td>
											<td>86K</td>
											<td>Professional</td>
											<td>600</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#E00000"></span></td>
											<td>1946</td>
											<td>21.1</td>
										</tr>
										<tr>
											<td id="64017018">Ankaran</td>
											<td><img src="modules/fmsdb/img/flags/s/SVN.gif" alt="Slovenia">  SVN</td>
											<td>Second League</td>
											<td>43K</td>
											<td>Semi-Professional</td>
											<td>1,000</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#F87000"></span></td>
											<td>1966</td>
											<td>22.2</td>
										</tr>
										<tr>
											<td id="7580041">Brda</td>
											<td><img src="modules/fmsdb/img/flags/s/SVN.gif" alt="Slovenia">  SVN</td>
											<td>Second League</td>
											<td>43K</td>
											<td>Semi-Professional</td>
											<td>193</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
											<td>1973</td>
											<td>21.5</td>
										</tr>
										<tr>
											<td id="64019293">Brezice</td>
											<td><img src="modules/fmsdb/img/flags/s/SVN.gif" alt="Slovenia">  SVN</td>
											<td>Second League</td>
											<td>43K</td>
											<td>Semi-Professional</td>
											<td>500</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#0078F8"></span></td>
											<td>1919</td>
											<td>22.8</td>
										</tr>
										<tr>
											<td id="1637">Celje</td>
											<td><img src="modules/fmsdb/img/flags/s/SVN.gif" alt="Slovenia">  SVN</td>
											<td>First League</td>
											<td>129K</td>
											<td>Professional</td>
											<td>13,006</td>
											<td><span class="label" style="background:#0078F8"></span> <span class="label" style="background:#F8F000"></span></td>
											<td>1919</td>
											<td>22.7</td>
										</tr>
										<tr>
											<td id="7580966">Dob</td>
											<td><img src="modules/fmsdb/img/flags/s/SVN.gif" alt="Slovenia">  SVN</td>
											<td>Second League</td>
											<td>43K</td>
											<td>Semi-Professional</td>
											<td>287</td>
											<td><span class="label" style="background:#0050D0"></span> <span class="label" style="background:#F8F000"></span></td>
											<td>1926</td>
											<td>23.5</td>
										</tr>
										<tr>
											<td id="128652">Domzale</td>
											<td><img src="modules/fmsdb/img/flags/s/SVN.gif" alt="Slovenia">  SVN</td>
											<td>First League</td>
											<td>129K</td>
											<td>Professional</td>
											<td>2,813</td>
											<td><span class="label" style="background:#0050D0"></span> <span class="label" style="background:#F8F000"></span></td>
											<td>1921</td>
											<td>22.7</td>
										</tr>
										<tr>
											<td id="7580043">Drava</td>
											<td><img src="modules/fmsdb/img/flags/s/SVN.gif" alt="Slovenia">  SVN</td>
											<td>Second League</td>
											<td>78K</td>
											<td>Professional</td>
											<td>4,000</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#0050D0"></span></td>
											<td>1933</td>
											<td>21.3</td>
										</tr>
										<tr>
											<td id="1627">Gorica</td>
											<td><img src="modules/fmsdb/img/flags/s/SVN.gif" alt="Slovenia">  SVN</td>
											<td>First League</td>
											<td>129K</td>
											<td>Professional</td>
											<td>3,066</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#60C0F8"></span></td>
											<td>1947</td>
											<td>21.8</td>
										</tr>
										<tr>
											<td id="1632">Koper</td>
											<td><img src="modules/fmsdb/img/flags/s/SVN.gif" alt="Slovenia">  SVN</td>
											<td>First League</td>
											<td>129K</td>
											<td>Professional</td>
											<td>4,047</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#D0F060"></span></td>
											<td>1920</td>
											<td>22.8</td>
										</tr>
										<tr>
											<td id="7586985">Kranj</td>
											<td><img src="modules/fmsdb/img/flags/s/SVN.gif" alt="Slovenia">  SVN</td>
											<td>Second League</td>
											<td>43K</td>
											<td>Semi-Professional</td>
											<td>1,000</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#C80000"></span></td>
											<td>1973</td>
											<td>21.9</td>
										</tr>
										<tr>
											<td id="5410639">Krka</td>
											<td><img src="modules/fmsdb/img/flags/s/SVN.gif" alt="Slovenia">  SVN</td>
											<td>Second League</td>
											<td>78K</td>
											<td>Professional</td>
											<td>1,500</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#006030"></span></td>
											<td>1922</td>
											<td>21.8</td>
										</tr>
										<tr>
											<td id="7580708">Krsko</td>
											<td><img src="modules/fmsdb/img/flags/s/SVN.gif" alt="Slovenia">  SVN</td>
											<td>First League</td>
											<td>129K</td>
											<td>Professional</td>
											<td>1,470</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#008030"></span></td>
											<td>1922</td>
											<td>22.0</td>
										</tr>
										<tr>
											<td id="1629">Maribor</td>
											<td><img src="modules/fmsdb/img/flags/s/SVN.gif" alt="Slovenia">  SVN</td>
											<td>First League</td>
											<td>775K</td>
											<td>Professional</td>
											<td>12,994</td>
											<td><span class="label" style="background:#F8F000"></span> <span class="label" style="background:#503098"></span></td>
											<td>1960</td>
											<td>27.0</td>
										</tr>
										<tr>
											<td id="1639">Olimpija</td>
											<td><img src="modules/fmsdb/img/flags/s/SVN.gif" alt="Slovenia">  SVN</td>
											<td>First League</td>
											<td>861K</td>
											<td>Professional</td>
											<td>16,038</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
											<td>1911</td>
											<td>23.4</td>
										</tr>
										<tr>
											<td id="7581525">Radomlje</td>
											<td><img src="modules/fmsdb/img/flags/s/SVN.gif" alt="Slovenia">  SVN</td>
											<td>First League</td>
											<td>103K</td>
											<td>Professional</td>
											<td>2,813</td>
											<td><span class="label" style="background:#202848"></span> <span class="label" style="background:#F8F000"></span></td>
											<td>1972</td>
											<td>22.9</td>
										</tr>
										<tr>
											<td id="1638">Rudar Velenje</td>
											<td><img src="modules/fmsdb/img/flags/s/SVN.gif" alt="Slovenia">  SVN</td>
											<td>First League</td>
											<td>103K</td>
											<td>Professional</td>
											<td>2,341</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#006030"></span></td>
											<td>1948</td>
											<td>24.7</td>
										</tr>
										<tr>
											<td id="1641">Triglav</td>
											<td><img src="modules/fmsdb/img/flags/s/SVN.gif" alt="Slovenia">  SVN</td>
											<td>Second League</td>
											<td>78K</td>
											<td>Semi-Professional</td>
											<td>2,029</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#901000"></span></td>
											<td>1920</td>
											<td>22.1</td>
										</tr>
										<tr>
											<td id="64000398">Verzej</td>
											<td><img src="modules/fmsdb/img/flags/s/SVN.gif" alt="Slovenia">  SVN</td>
											<td>Second League</td>
											<td>69K</td>
											<td>Semi-Professional</td>
											<td>405</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#70E088"></span></td>
											<td>1963</td>
											<td>21.2</td>
										</tr>
										<tr>
											<td id="64000339">Zavrc</td>
											<td><img src="modules/fmsdb/img/flags/s/SVN.gif" alt="Slovenia">  SVN</td>
											<td>Second League</td>
											<td>60K</td>
											<td>Professional</td>
											<td>962</td>
											<td><span class="label" style="background:#00A030"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1969</td>
											<td>19.9</td>
										</tr>
										<tr>
											<td id="93052555">AFC United</td>
											<td><img src="modules/fmsdb/img/flags/s/SWE.gif" alt="Sweden">  SWE</td>
											<td>First Division Elite</td>
											<td>0</td>
											<td>Professional</td>
											<td>5,000</td>
											<td><span class="label" style="background:#F86028"></span> <span class="label" style="background:#F86028"></span></td>
											<td>2013</td>
											<td>24.7</td>
										</tr>
										<tr>
											<td id="1780">AIK</td>
											<td><img src="modules/fmsdb/img/flags/s/SWE.gif" alt="Sweden">  SWE</td>
											<td>Premier Division</td>
											<td>89K</td>
											<td>Professional</td>
											<td>53,000</td>
											<td><span class="label" style="background:#F8F838"></span> <span class="label" style="background:#000000"></span></td>
											<td>1891</td>
											<td>25.6</td>
										</tr>
										<tr>
											<td id="8106801">Akropolis IF</td>
											<td><img src="modules/fmsdb/img/flags/s/SWE.gif" alt="Sweden">  SWE</td>
											<td>First Division North</td>
											<td>894</td>
											<td>Semi-Professional</td>
											<td>1,500</td>
											<td><span class="label" style="background:#0050D0"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1968</td>
											<td>24.8</td>
										</tr>
										<tr>
											<td id="93038925">Ange IF</td>
											<td><img src="modules/fmsdb/img/flags/s/SWE.gif" alt="Sweden">  SWE</td>
											<td>Second Division N</td>
											<td>0</td>
											<td>Semi-Professional</td>
											<td>1,000</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1980</td>
											<td>25.4</td>
										</tr>
										<tr>
											<td id="4300347">Angelholms FF</td>
											<td><img src="modules/fmsdb/img/flags/s/SWE.gif" alt="Sweden">  SWE</td>
											<td>First Division Elite</td>
											<td>0</td>
											<td>Professional</td>
											<td>5,000</td>
											<td><span class="label" style="background:#002080"></span> <span class="label" style="background:#F8D830"></span></td>
											<td>1976</td>
											<td>22.1</td>
										</tr>
										<tr>
											<td id="2505">Anundsjo IF</td>
											<td><img src="modules/fmsdb/img/flags/s/SWE.gif" alt="Sweden">  SWE</td>
											<td>Second Division N</td>
											<td>0</td>
											<td>Semi-Professional</td>
											<td>500</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
											<td>1921</td>
											<td>23.6</td>
										</tr>
										<tr>
											<td id="2506">Arameisk-Syrianska IF</td>
											<td><img src="modules/fmsdb/img/flags/s/SWE.gif" alt="Sweden">  SWE</td>
											<td>Second Division SS</td>
											<td>0</td>
											<td>Semi-Professional</td>
											<td>1,000</td>
											<td><span class="label" style="background:#F8F000"></span> <span class="label" style="background:#E00000"></span></td>
											<td>1980</td>
											<td>24.7</td>
										</tr>
										<tr>
											<td id="4300404">Asarums IF</td>
											<td><img src="modules/fmsdb/img/flags/s/SWE.gif" alt="Sweden">  SWE</td>
											<td>Second Division SG</td>
											<td>0</td>
											<td>Semi-Professional</td>
											<td>500</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#0050D0"></span></td>
											<td>0</td>
											<td>23.3</td>
										</tr>
										<tr>
											<td id="8100783">Assyriska BK</td>
											<td><img src="modules/fmsdb/img/flags/s/SWE.gif" alt="Sweden">  SWE</td>
											<td>Second Division WG</td>
											<td>0</td>
											<td>Semi-Professional</td>
											<td>5,500</td>
											<td><span class="label" style="background:#C80000"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1985</td>
											<td>26.1</td>
										</tr>
										<tr>
											<td id="2150">Assyriska FF</td>
											<td><img src="modules/fmsdb/img/flags/s/SWE.gif" alt="Sweden">  SWE</td>
											<td>First Division Elite</td>
											<td>0</td>
											<td>Professional</td>
											<td>6,700</td>
											<td><span class="label" style="background:#E00000"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1974</td>
											<td>25.9</td>
										</tr>
										<tr>
											<td id="68000150">Assyriska IF i Norrkoping</td>
											<td><img src="modules/fmsdb/img/flags/s/SWE.gif" alt="Sweden">  SWE</td>
											<td>Second Division SS</td>
											<td>0</td>
											<td>Semi-Professional</td>
											<td>500</td>
											<td><span class="label" style="background:#E00000"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1977</td>
											<td>25.0</td>
										</tr>
										<tr>
											<td id="1841">Atvidabergs FF</td>
											<td><img src="modules/fmsdb/img/flags/s/SWE.gif" alt="Sweden">  SWE</td>
											<td>First Division Elite</td>
											<td>4K</td>
											<td>Professional</td>
											<td>6,100</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#4860B8"></span></td>
											<td>1907</td>
											<td>22.7</td>
										</tr>
										<tr>
											<td id="2151">BK Forward</td>
											<td><img src="modules/fmsdb/img/flags/s/SWE.gif" alt="Sweden">  SWE</td>
											<td>First Division North</td>
											<td>894</td>
											<td>Semi-Professional</td>
											<td>4,700</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F8F000"></span></td>
											<td>1934</td>
											<td>23.4</td>
										</tr>
										<tr>
											<td id="1783">BK Hacken</td>
											<td><img src="modules/fmsdb/img/flags/s/SWE.gif" alt="Sweden">  SWE</td>
											<td>Premier Division</td>
											<td>716K</td>
											<td>Professional</td>
											<td>6,500</td>
											<td><span class="label" style="background:#F8D820"></span> <span class="label" style="background:#000000"></span></td>
											<td>1940</td>
											<td>26.4</td>
										</tr>
										<tr>
											<td id="2518">BK Olympic</td>
											<td><img src="modules/fmsdb/img/flags/s/SWE.gif" alt="Sweden">  SWE</td>
											<td>Second Division SG</td>
											<td>0</td>
											<td>Semi-Professional</td>
											<td>1,000</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#188058"></span></td>
											<td>1920</td>
											<td>21.2</td>
										</tr>
										<tr>
											<td id="2521">BKV Norrtalje</td>
											<td><img src="modules/fmsdb/img/flags/s/SWE.gif" alt="Sweden">  SWE</td>
											<td>Second Division NS</td>
											<td>0</td>
											<td>Semi-Professional</td>
											<td>3,000</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#E00000"></span></td>
											<td>1933</td>
											<td>23.1</td>
										</tr>
										<tr>
											<td id="1784">Bodens BK</td>
											<td><img src="modules/fmsdb/img/flags/s/SWE.gif" alt="Sweden">  SWE</td>
											<td>Second Division N</td>
											<td>3K</td>
											<td>Semi-Professional</td>
											<td>5,000</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#008030"></span></td>
											<td>1916</td>
											<td>21.7</td>
										</tr>
										<tr>
											<td id="1819">Boo FK</td>
											<td><img src="modules/fmsdb/img/flags/s/SWE.gif" alt="Sweden">  SWE</td>
											<td>Second Division NS</td>
											<td>894</td>
											<td>Semi-Professional</td>
											<td>1,000</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#680028"></span></td>
											<td>1990</td>
											<td>24.7</td>
										</tr>
										<tr>
											<td id="93030441">BW-90 IF</td>
											<td><img src="modules/fmsdb/img/flags/s/SWE.gif" alt="Sweden">  SWE</td>
											<td>Second Division SG</td>
											<td>0</td>
											<td>Semi-Professional</td>
											<td>500</td>
											<td><span class="label" style="background:#00F8F8"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1990</td>
											<td>23.6</td>
										</tr>
										<tr>
											<td id="613670">Carlstad United</td>
											<td><img src="modules/fmsdb/img/flags/s/SWE.gif" alt="Sweden">  SWE</td>
											<td>First Division North</td>
											<td>0</td>
											<td>Semi-Professional</td>
											<td>10,000</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#000000"></span></td>
											<td>1999</td>
											<td>23.4</td>
										</tr>
										<tr>
											<td id="68002700">Dalkurd FF</td>
											<td><img src="modules/fmsdb/img/flags/s/SWE.gif" alt="Sweden">  SWE</td>
											<td>First Division Elite</td>
											<td>45K</td>
											<td>Professional</td>
											<td>6,500</td>
											<td><span class="label" style="background:#E00000"></span> <span class="label" style="background:#288858"></span></td>
											<td>2004</td>
											<td>25.0</td>
										</tr>
										<tr>
											<td id="68002457">Dalstorps IF</td>
											<td><img src="modules/fmsdb/img/flags/s/SWE.gif" alt="Sweden">  SWE</td>
											<td>Second Division WG</td>
											<td>0</td>
											<td>Semi-Professional</td>
											<td>1,000</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F8F000"></span></td>
											<td>1949</td>
											<td>23.7</td>
										</tr>
										<tr>
											<td id="1786">Degerfors IF</td>
											<td><img src="modules/fmsdb/img/flags/s/SWE.gif" alt="Sweden">  SWE</td>
											<td>First Division Elite</td>
											<td>2K</td>
											<td>Professional</td>
											<td>7,500</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#E00000"></span></td>
											<td>1907</td>
											<td>24.5</td>
										</tr>
										<tr>
											<td id="1787">Djurgardens IF</td>
											<td><img src="modules/fmsdb/img/flags/s/SWE.gif" alt="Sweden">  SWE</td>
											<td>Premier Division</td>
											<td>224K</td>
											<td>Professional</td>
											<td>31,200</td>
											<td><span class="label" style="background:#003068"></span> <span class="label" style="background:#68A8E0"></span></td>
											<td>1891</td>
											<td>25.5</td>
										</tr>
										<tr>
											<td id="4300018">Enskede IK</td>
											<td><img src="modules/fmsdb/img/flags/s/SWE.gif" alt="Sweden">  SWE</td>
											<td>First Division North</td>
											<td>894</td>
											<td>Semi-Professional</td>
											<td>2,000</td>
											<td><span class="label" style="background:#E00000"></span> <span class="label" style="background:#000000"></span></td>
											<td>1914</td>
											<td>23.9</td>
										</tr>
										<tr>
											<td id="68017475">Eskilsminne IF</td>
											<td><img src="modules/fmsdb/img/flags/s/SWE.gif" alt="Sweden">  SWE</td>
											<td>Second Division WG</td>
											<td>0</td>
											<td>Semi-Professional</td>
											<td>3,500</td>
											<td><span class="label" style="background:#0050D0"></span> <span class="label" style="background:#F8F000"></span></td>
											<td>1928</td>
											<td>23.8</td>
										</tr>
										<tr>
											<td id="2591">Eskilstuna City</td>
											<td><img src="modules/fmsdb/img/flags/s/SWE.gif" alt="Sweden">  SWE</td>
											<td>Second Division SS</td>
											<td>2K</td>
											<td>Semi-Professional</td>
											<td>7,800</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#0070E8"></span></td>
											<td>1914</td>
											<td>23.6</td>
										</tr>
										<tr>
											<td id="1788">Falkenbergs FF</td>
											<td><img src="modules/fmsdb/img/flags/s/SWE.gif" alt="Sweden">  SWE</td>
											<td>Premier Division</td>
											<td>27K</td>
											<td>Professional</td>
											<td>5,500</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#F8F000"></span></td>
											<td>1928</td>
											<td>24.9</td>
										</tr>
										<tr>
											<td id="1836">FC Gute</td>
											<td><img src="modules/fmsdb/img/flags/s/SWE.gif" alt="Sweden">  SWE</td>
											<td>Second Division NS</td>
											<td>0</td>
											<td>Semi-Professional</td>
											<td>2,050</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
											<td>1904</td>
											<td>20.5</td>
										</tr>
										<tr>
											<td id="2553">FC Hollviken</td>
											<td><img src="modules/fmsdb/img/flags/s/SWE.gif" alt="Sweden">  SWE</td>
											<td>First Division South</td>
											<td>894</td>
											<td>Semi-Professional</td>
											<td>1,750</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#E00000"></span></td>
											<td>1933</td>
											<td>26.0</td>
										</tr>
										<tr>
											<td id="2613">FC Linkoping City</td>
											<td><img src="modules/fmsdb/img/flags/s/SWE.gif" alt="Sweden">  SWE</td>
											<td>Second Division SS</td>
											<td>1K</td>
											<td>Semi-Professional</td>
											<td>8,500</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#1068F8"></span></td>
											<td>2012</td>
											<td>25.4</td>
										</tr>
										<tr>
											<td id="4300693">FC Rosengard</td>
											<td><img src="modules/fmsdb/img/flags/s/SWE.gif" alt="Sweden">  SWE</td>
											<td>Second Division SG</td>
											<td>0</td>
											<td>Semi-Professional</td>
											<td>2,000</td>
											<td><span class="label" style="background:#002080"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1917</td>
											<td>23.2</td>
										</tr>
										<tr>
											<td id="2668">FC Trollhattan</td>
											<td><img src="modules/fmsdb/img/flags/s/SWE.gif" alt="Sweden">  SWE</td>
											<td>First Division South</td>
											<td>0</td>
											<td>Semi-Professional</td>
											<td>5,100</td>
											<td><span class="label" style="background:#C80000"></span> <span class="label" style="background:#000000"></span></td>
											<td>2001</td>
											<td>23.7</td>
										</tr>
										<tr>
											<td id="93053134">FK Karlskrona</td>
											<td><img src="modules/fmsdb/img/flags/s/SWE.gif" alt="Sweden">  SWE</td>
											<td>Second Division SG</td>
											<td>0</td>
											<td>Semi-Professional</td>
											<td>3,000</td>
											<td><span class="label" style="background:#F85000"></span> <span class="label" style="background:#F85000"></span></td>
											<td>2012</td>
											<td>25.5</td>
										</tr>
										<tr>
											<td id="4300655">Friska Viljor FC</td>
											<td><img src="modules/fmsdb/img/flags/s/SWE.gif" alt="Sweden">  SWE</td>
											<td>Second Division N</td>
											<td>0</td>
											<td>Semi-Professional</td>
											<td>1,500</td>
											<td><span class="label" style="background:#F8F000"></span> <span class="label" style="background:#000000"></span></td>
											<td>1994</td>
											<td>21.2</td>
										</tr>
										<tr>
											<td id="2153">GAIS</td>
											<td><img src="modules/fmsdb/img/flags/s/SWE.gif" alt="Sweden">  SWE</td>
											<td>First Division Elite</td>
											<td>13K</td>
											<td>Professional</td>
											<td>18,400</td>
											<td><span class="label" style="background:#18B050"></span> <span class="label" style="background:#000000"></span></td>
											<td>1894</td>
											<td>24.3</td>
										</tr>
										<tr>
											<td id="1795">Gallivare Malmbergets FF</td>
											<td><img src="modules/fmsdb/img/flags/s/SWE.gif" alt="Sweden">  SWE</td>
											<td>Second Division N</td>
											<td>0</td>
											<td>Semi-Professional</td>
											<td>1,300</td>
											<td><span class="label" style="background:#303030"></span> <span class="label" style="background:#303030"></span></td>
											<td>2005</td>
											<td>21.2</td>
										</tr>
										<tr>
											<td id="4300022">Gamla Upsala SK</td>
											<td><img src="modules/fmsdb/img/flags/s/SWE.gif" alt="Sweden">  SWE</td>
											<td>Second Division NS</td>
											<td>0</td>
											<td>Semi-Professional</td>
											<td>2,000</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F8F000"></span></td>
											<td>1947</td>
											<td>24.2</td>
										</tr>
										<tr>
											<td id="1792">Gefle IF</td>
											<td><img src="modules/fmsdb/img/flags/s/SWE.gif" alt="Sweden">  SWE</td>
											<td>Premier Division</td>
											<td>45K</td>
											<td>Professional</td>
											<td>6,400</td>
											<td><span class="label" style="background:#98D0F0"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1882</td>
											<td>24.1</td>
										</tr>
										<tr>
											<td id="1791">GIF Sundsvall</td>
											<td><img src="modules/fmsdb/img/flags/s/SWE.gif" alt="Sweden">  SWE</td>
											<td>Premier Division</td>
											<td>4K</td>
											<td>Professional</td>
											<td>8,500</td>
											<td><span class="label" style="background:#2858B0"></span> <span class="label" style="background:#002060"></span></td>
											<td>1903</td>
											<td>24.1</td>
										</tr>
										<tr>
											<td id="802270">Grebbestads IF</td>
											<td><img src="modules/fmsdb/img/flags/s/SWE.gif" alt="Sweden">  SWE</td>
											<td>Second Division NG</td>
											<td>0</td>
											<td>Semi-Professional</td>
											<td>1,000</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#E00000"></span></td>
											<td>1922</td>
											<td>25.4</td>
										</tr>
										<tr>
											<td id="1794">Gunnilse IS</td>
											<td><img src="modules/fmsdb/img/flags/s/SWE.gif" alt="Sweden">  SWE</td>
											<td>Second Division NG</td>
											<td>0</td>
											<td>Semi-Professional</td>
											<td>1,500</td>
											<td><span class="label" style="background:#B00000"></span> <span class="label" style="background:#0030A0"></span></td>
											<td>1950</td>
											<td>22.4</td>
										</tr>
										<tr>
											<td id="4300049">Habo FF</td>
											<td><img src="modules/fmsdb/img/flags/s/SWE.gif" alt="Sweden">  SWE</td>
											<td>Second Division NS</td>
											<td>0</td>
											<td>Semi-Professional</td>
											<td>1,000</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#E00000"></span></td>
											<td>1996</td>
											<td>22.0</td>
										</tr>
										<tr>
											<td id="1796">Halmstads BK</td>
											<td><img src="modules/fmsdb/img/flags/s/SWE.gif" alt="Sweden">  SWE</td>
											<td>First Division Elite</td>
											<td>4K</td>
											<td>Professional</td>
											<td>15,500</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#1078D0"></span></td>
											<td>1914</td>
											<td>23.2</td>
										</tr>
										<tr>
											<td id="1797">Hammarby</td>
											<td><img src="modules/fmsdb/img/flags/s/SWE.gif" alt="Sweden">  SWE</td>
											<td>Premier Division</td>
											<td>447K</td>
											<td>Professional</td>
											<td>31,200</td>
											<td><span class="label" style="background:#008030"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1897</td>
											<td>26.8</td>
										</tr>
										<tr>
											<td id="68020049">Harnosands FF</td>
											<td><img src="modules/fmsdb/img/flags/s/SWE.gif" alt="Sweden">  SWE</td>
											<td>Second Division N</td>
											<td>0</td>
											<td>Semi-Professional</td>
											<td>1,500</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#E00000"></span></td>
											<td>2007</td>
											<td>26.1</td>
										</tr>
										<tr>
											<td id="68002003">Hassleholms IF</td>
											<td><img src="modules/fmsdb/img/flags/s/SWE.gif" alt="Sweden">  SWE</td>
											<td>Second Division SG</td>
											<td>0</td>
											<td>Semi-Professional</td>
											<td>5,800</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#008030"></span></td>
											<td>1922</td>
											<td>25.6</td>
										</tr>
										<tr>
											<td id="1798">Helsingborgs IF</td>
											<td><img src="modules/fmsdb/img/flags/s/SWE.gif" alt="Sweden">  SWE</td>
											<td>Premier Division</td>
											<td>0</td>
											<td>Professional</td>
											<td>17,100</td>
											<td><span class="label" style="background:#005098"></span> <span class="label" style="background:#E00000"></span></td>
											<td>1907</td>
											<td>26.2</td>
										</tr>
										<tr>
											<td id="2155">Hogaborgs BK</td>
											<td><img src="modules/fmsdb/img/flags/s/SWE.gif" alt="Sweden">  SWE</td>
											<td>Second Division WG</td>
											<td>0</td>
											<td>Semi-Professional</td>
											<td>3,500</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#008030"></span></td>
											<td>1927</td>
											<td>21.4</td>
										</tr>
										<tr>
											<td id="615770">Hoganas BK</td>
											<td><img src="modules/fmsdb/img/flags/s/SWE.gif" alt="Sweden">  SWE</td>
											<td>Second Division WG</td>
											<td>0</td>
											<td>Semi-Professional</td>
											<td>2,500</td>
											<td><span class="label" style="background:#0030A0"></span> <span class="label" style="background:#E00000"></span></td>
											<td>1913</td>
											<td>22.3</td>
										</tr>
										<tr>
											<td id="1800">Huddinge IF</td>
											<td><img src="modules/fmsdb/img/flags/s/SWE.gif" alt="Sweden">  SWE</td>
											<td>Second Division SS</td>
											<td>0</td>
											<td>Semi-Professional</td>
											<td>2,000</td>
											<td><span class="label" style="background:#F8F000"></span> <span class="label" style="background:#000000"></span></td>
											<td>1912</td>
											<td>22.5</td>
										</tr>
										<tr>
											<td id="1801">Hudiksvalls FF</td>
											<td><img src="modules/fmsdb/img/flags/s/SWE.gif" alt="Sweden">  SWE</td>
											<td>Second Division N</td>
											<td>894</td>
											<td>Semi-Professional</td>
											<td>3,000</td>
											<td><span class="label" style="background:#E00000"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>2011</td>
											<td>23.5</td>
										</tr>
										<tr>
											<td id="2557">Husqvarna FF</td>
											<td><img src="modules/fmsdb/img/flags/s/SWE.gif" alt="Sweden">  SWE</td>
											<td>First Division South</td>
											<td>2K</td>
											<td>Semi-Professional</td>
											<td>3,500</td>
											<td><span class="label" style="background:#20A0E0"></span> <span class="label" style="background:#002060"></span></td>
											<td>1987</td>
											<td>23.9</td>
										</tr>
										<tr>
											<td id="2157">IF Brommapojkarna</td>
											<td><img src="modules/fmsdb/img/flags/s/SWE.gif" alt="Sweden">  SWE</td>
											<td>First Division North</td>
											<td>9K</td>
											<td>Semi-Professional</td>
											<td>7,500</td>
											<td><span class="label" style="background:#E00000"></span> <span class="label" style="background:#000000"></span></td>
											<td>1942</td>
											<td>24.3</td>
										</tr>
										<tr>
											<td id="1802">IF Elfsborg</td>
											<td><img src="modules/fmsdb/img/flags/s/SWE.gif" alt="Sweden">  SWE</td>
											<td>Premier Division</td>
											<td>447K</td>
											<td>Professional</td>
											<td>18,800</td>
											<td><span class="label" style="background:#F8F000"></span> <span class="label" style="background:#F8F000"></span></td>
											<td>1904</td>
											<td>25.0</td>
										</tr>
										<tr>
											<td id="2158">IF Sylvia</td>
											<td><img src="modules/fmsdb/img/flags/s/SWE.gif" alt="Sweden">  SWE</td>
											<td>Second Division SS</td>
											<td>0</td>
											<td>Semi-Professional</td>
											<td>3,200</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1922</td>
											<td>18.0</td>
										</tr>
										<tr>
											<td id="93053137">IFK Aspudden-Tellus</td>
											<td><img src="modules/fmsdb/img/flags/s/SWE.gif" alt="Sweden">  SWE</td>
											<td>Second Division SS</td>
											<td>0</td>
											<td>Semi-Professional</td>
											<td>1,000</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#0050D0"></span></td>
											<td>0</td>
											<td>24.3</td>
										</tr>
										<tr>
											<td id="68020055">IFK Berga</td>
											<td><img src="modules/fmsdb/img/flags/s/SWE.gif" alt="Sweden">  SWE</td>
											<td>Second Division SG</td>
											<td>0</td>
											<td>Semi-Professional</td>
											<td>1,000</td>
											<td><span class="label" style="background:#0050D0"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1933</td>
											<td>21.9</td>
										</tr>
										<tr>
											<td id="1803">IFK Goteborg</td>
											<td><img src="modules/fmsdb/img/flags/s/SWE.gif" alt="Sweden">  SWE</td>
											<td>Premier Division</td>
											<td>45K</td>
											<td>Professional</td>
											<td>18,400</td>
											<td><span class="label" style="background:#0050D0"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1904</td>
											<td>26.0</td>
										</tr>
										<tr>
											<td id="1804">IFK Hassleholm</td>
											<td><img src="modules/fmsdb/img/flags/s/SWE.gif" alt="Sweden">  SWE</td>
											<td>Second Division SG</td>
											<td>0</td>
											<td>Semi-Professional</td>
											<td>5,800</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F8F000"></span></td>
											<td>1905</td>
											<td>22.4</td>
										</tr>
										<tr>
											<td id="2574">IFK Kumla</td>
											<td><img src="modules/fmsdb/img/flags/s/SWE.gif" alt="Sweden">  SWE</td>
											<td>Second Division NG</td>
											<td>0</td>
											<td>Semi-Professional</td>
											<td>1,000</td>
											<td><span class="label" style="background:#0050D0"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1913</td>
											<td>23.0</td>
										</tr>
										<tr>
											<td id="1805">IFK Lulea</td>
											<td><img src="modules/fmsdb/img/flags/s/SWE.gif" alt="Sweden">  SWE</td>
											<td>First Division North</td>
											<td>0</td>
											<td>Semi-Professional</td>
											<td>2,500</td>
											<td><span class="label" style="background:#0050D0"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1900</td>
											<td>26.1</td>
										</tr>
										<tr>
											<td id="2159">IFK Malmo</td>
											<td><img src="modules/fmsdb/img/flags/s/SWE.gif" alt="Sweden">  SWE</td>
											<td>Second Division SG</td>
											<td>0</td>
											<td>Semi-Professional</td>
											<td>27,500</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#F8F000"></span></td>
											<td>1899</td>
											<td>23.0</td>
										</tr>
										<tr>
											<td id="1806">IFK Norrkoping</td>
											<td><img src="modules/fmsdb/img/flags/s/SWE.gif" alt="Sweden">  SWE</td>
											<td>Premier Division</td>
											<td>358K</td>
											<td>Professional</td>
											<td>16,700</td>
											<td><span class="label" style="background:#0050D0"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1897</td>
											<td>23.4</td>
										</tr>
										<tr>
											<td id="2662">IFK Timra</td>
											<td><img src="modules/fmsdb/img/flags/s/SWE.gif" alt="Sweden">  SWE</td>
											<td>Second Division N</td>
											<td>0</td>
											<td>Semi-Professional</td>
											<td>1,000</td>
											<td><span class="label" style="background:#0050D0"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1978</td>
											<td>23.6</td>
										</tr>
										<tr>
											<td id="2585">IFK Uddevalla</td>
											<td><img src="modules/fmsdb/img/flags/s/SWE.gif" alt="Sweden">  SWE</td>
											<td>Second Division NG</td>
											<td>0</td>
											<td>Semi-Professional</td>
											<td>1,200</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#0050D0"></span></td>
											<td>1905</td>
											<td>24.2</td>
										</tr>
										<tr>
											<td id="2588">IFK Varnamo</td>
											<td><img src="modules/fmsdb/img/flags/s/SWE.gif" alt="Sweden">  SWE</td>
											<td>First Division Elite</td>
											<td>0</td>
											<td>Professional</td>
											<td>5,000</td>
											<td><span class="label" style="background:#1068F8"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1912</td>
											<td>22.8</td>
										</tr>
										<tr>
											<td id="1807">IK Brage</td>
											<td><img src="modules/fmsdb/img/flags/s/SWE.gif" alt="Sweden">  SWE</td>
											<td>First Division North</td>
											<td>0</td>
											<td>Professional</td>
											<td>6,500</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#108830"></span></td>
											<td>1925</td>
											<td>22.1</td>
										</tr>
										<tr>
											<td id="4303997">IK Franke</td>
											<td><img src="modules/fmsdb/img/flags/s/SWE.gif" alt="Sweden">  SWE</td>
											<td>Second Division NS</td>
											<td>0</td>
											<td>Semi-Professional</td>
											<td>1,500</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#008030"></span></td>
											<td>1943</td>
											<td>23.0</td>
										</tr>
										<tr>
											<td id="618372">IK Frej</td>
											<td><img src="modules/fmsdb/img/flags/s/SWE.gif" alt="Sweden">  SWE</td>
											<td>First Division Elite</td>
											<td>5K</td>
											<td>Professional</td>
											<td>3,000</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F8D000"></span></td>
											<td>1983</td>
											<td>24.2</td>
										</tr>
										<tr>
											<td id="4300353">IK Gauthiod</td>
											<td><img src="modules/fmsdb/img/flags/s/SWE.gif" alt="Sweden">  SWE</td>
											<td>Second Division NG</td>
											<td>0</td>
											<td>Semi-Professional</td>
											<td>1,400</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#E00000"></span></td>
											<td>1924</td>
											<td>24.9</td>
										</tr>
										<tr>
											<td id="1808">IK Oddevold</td>
											<td><img src="modules/fmsdb/img/flags/s/SWE.gif" alt="Sweden">  SWE</td>
											<td>First Division South</td>
											<td>4K</td>
											<td>Semi-Professional</td>
											<td>12,000</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#0078F8"></span></td>
											<td>1932</td>
											<td>23.9</td>
										</tr>
										<tr>
											<td id="2164">IK Sirius</td>
											<td><img src="modules/fmsdb/img/flags/s/SWE.gif" alt="Sweden">  SWE</td>
											<td>First Division Elite</td>
											<td>0</td>
											<td>Professional</td>
											<td>8,000</td>
											<td><span class="label" style="background:#0050D0"></span> <span class="label" style="background:#000000"></span></td>
											<td>1907</td>
											<td>24.8</td>
										</tr>
										<tr>
											<td id="2165">IK Sleipner</td>
											<td><img src="modules/fmsdb/img/flags/s/SWE.gif" alt="Sweden">  SWE</td>
											<td>First Division North</td>
											<td>0</td>
											<td>Semi-Professional</td>
											<td>16,700</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#0050D0"></span></td>
											<td>1903</td>
											<td>24.9</td>
										</tr>
										<tr>
											<td id="2166">IS Halmia</td>
											<td><img src="modules/fmsdb/img/flags/s/SWE.gif" alt="Sweden">  SWE</td>
											<td>Second Division WG</td>
											<td>0</td>
											<td>Semi-Professional</td>
											<td>15,500</td>
											<td><span class="label" style="background:#E00000"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1907</td>
											<td>23.4</td>
										</tr>
										<tr>
											<td id="6410547">Jonkopings Sodra IF</td>
											<td><img src="modules/fmsdb/img/flags/s/SWE.gif" alt="Sweden">  SWE</td>
											<td>Premier Division</td>
											<td>9K</td>
											<td>Professional</td>
											<td>5,200</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#108830"></span></td>
											<td>1922</td>
											<td>25.5</td>
										</tr>
										<tr>
											<td id="1809">Kalmar FF</td>
											<td><img src="modules/fmsdb/img/flags/s/SWE.gif" alt="Sweden">  SWE</td>
											<td>Premier Division</td>
											<td>179K</td>
											<td>Professional</td>
											<td>12,100</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#E00000"></span></td>
											<td>1910</td>
											<td>25.2</td>
										</tr>
										<tr>
											<td id="68012711">Karlbergs BK</td>
											<td><img src="modules/fmsdb/img/flags/s/SWE.gif" alt="Sweden">  SWE</td>
											<td>Second Division NS</td>
											<td>0</td>
											<td>Semi-Professional</td>
											<td>1,000</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#E00000"></span></td>
											<td>1912</td>
											<td>22.0</td>
										</tr>
										<tr>
											<td id="2598">Karlslunds IF</td>
											<td><img src="modules/fmsdb/img/flags/s/SWE.gif" alt="Sweden">  SWE</td>
											<td>Second Division SS</td>
											<td>894</td>
											<td>Semi-Professional</td>
											<td>1,500</td>
											<td><span class="label" style="background:#0030A0"></span> <span class="label" style="background:#E00000"></span></td>
											<td>1920</td>
											<td>20.2</td>
										</tr>
										<tr>
											<td id="2168">Karlstad BK</td>
											<td><img src="modules/fmsdb/img/flags/s/SWE.gif" alt="Sweden">  SWE</td>
											<td>Second Division NG</td>
											<td>894</td>
											<td>Semi-Professional</td>
											<td>10,000</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#0030A0"></span></td>
											<td>1923</td>
											<td>23.3</td>
										</tr>
										<tr>
											<td id="8117093">Konyaspor KIF</td>
											<td><img src="modules/fmsdb/img/flags/s/SWE.gif" alt="Sweden">  SWE</td>
											<td>Second Division SS</td>
											<td>0</td>
											<td>Semi-Professional</td>
											<td>500</td>
											<td><span class="label" style="background:#008030"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1989</td>
											<td>20.6</td>
										</tr>
										<tr>
											<td id="2601">Kortedala IF</td>
											<td><img src="modules/fmsdb/img/flags/s/SWE.gif" alt="Sweden">  SWE</td>
											<td>Second Division NG</td>
											<td>0</td>
											<td>Semi-Professional</td>
											<td>1,000</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#000000"></span></td>
											<td>1956</td>
											<td>25.0</td>
										</tr>
										<tr>
											<td id="2603">Kristianstad FC</td>
											<td><img src="modules/fmsdb/img/flags/s/SWE.gif" alt="Sweden">  SWE</td>
											<td>First Division South</td>
											<td>0</td>
											<td>Semi-Professional</td>
											<td>6,000</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F88000"></span></td>
											<td>1990</td>
											<td>22.4</td>
										</tr>
										<tr>
											<td id="68020053">Kvarnby IK</td>
											<td><img src="modules/fmsdb/img/flags/s/SWE.gif" alt="Sweden">  SWE</td>
											<td>Second Division SG</td>
											<td>0</td>
											<td>Semi-Professional</td>
											<td>500</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#0030A0"></span></td>
											<td>1906</td>
											<td>21.9</td>
										</tr>
										<tr>
											<td id="2608">Kvarnsvedens IK</td>
											<td><img src="modules/fmsdb/img/flags/s/SWE.gif" alt="Sweden">  SWE</td>
											<td>Second Division NS</td>
											<td>0</td>
											<td>Semi-Professional</td>
											<td>2,000</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#E00000"></span></td>
											<td>1907</td>
											<td>23.0</td>
										</tr>
										<tr>
											<td id="2609">Laholms FK</td>
											<td><img src="modules/fmsdb/img/flags/s/SWE.gif" alt="Sweden">  SWE</td>
											<td>Second Division WG</td>
											<td>0</td>
											<td>Semi-Professional</td>
											<td>1,000</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1957</td>
											<td>20.8</td>
										</tr>
										<tr>
											<td id="1811">Landskrona BoIS</td>
											<td><img src="modules/fmsdb/img/flags/s/SWE.gif" alt="Sweden">  SWE</td>
											<td>First Division South</td>
											<td>0</td>
											<td>Professional</td>
											<td>11,900</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1915</td>
											<td>23.4</td>
										</tr>
										<tr>
											<td id="2558">Lidkopings FK</td>
											<td><img src="modules/fmsdb/img/flags/s/SWE.gif" alt="Sweden">  SWE</td>
											<td>Second Division NG</td>
											<td>0</td>
											<td>Semi-Professional</td>
											<td>2,500</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#E00000"></span></td>
											<td>2012</td>
											<td>22.2</td>
										</tr>
										<tr>
											<td id="619816">Lindome GIF</td>
											<td><img src="modules/fmsdb/img/flags/s/SWE.gif" alt="Sweden">  SWE</td>
											<td>Second Division WG</td>
											<td>0</td>
											<td>Semi-Professional</td>
											<td>800</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
											<td>1928</td>
											<td>23.7</td>
										</tr>
										<tr>
											<td id="620928">Lindsdals IF</td>
											<td><img src="modules/fmsdb/img/flags/s/SWE.gif" alt="Sweden">  SWE</td>
											<td>Second Division SG</td>
											<td>0</td>
											<td>Semi-Professional</td>
											<td>1,000</td>
											<td><span class="label" style="background:#F8D000"></span> <span class="label" style="background:#000000"></span></td>
											<td>1926</td>
											<td>22.8</td>
										</tr>
										<tr>
											<td id="2175">Ljungskile SK</td>
											<td><img src="modules/fmsdb/img/flags/s/SWE.gif" alt="Sweden">  SWE</td>
											<td>First Division Elite</td>
											<td>894</td>
											<td>Professional</td>
											<td>4,250</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#48A068"></span></td>
											<td>1926</td>
											<td>26.3</td>
										</tr>
										<tr>
											<td id="2170">Lunds BK</td>
											<td><img src="modules/fmsdb/img/flags/s/SWE.gif" alt="Sweden">  SWE</td>
											<td>Second Division SG</td>
											<td>0</td>
											<td>Semi-Professional</td>
											<td>8,560</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#F8F838"></span></td>
											<td>1919</td>
											<td>23.2</td>
										</tr>
										<tr>
											<td id="1816">Malmo FF</td>
											<td><img src="modules/fmsdb/img/flags/s/SWE.gif" alt="Sweden">  SWE</td>
											<td>Premier Division</td>
											<td>2M</td>
											<td>Professional</td>
											<td>24,000</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#98D0F0"></span></td>
											<td>1910</td>
											<td>24.5</td>
										</tr>
										<tr>
											<td id="1817">Mjallby AIF</td>
											<td><img src="modules/fmsdb/img/flags/s/SWE.gif" alt="Sweden">  SWE</td>
											<td>First Division South</td>
											<td>0</td>
											<td>Semi-Professional</td>
											<td>7,500</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F8F000"></span></td>
											<td>1939</td>
											<td>23.1</td>
										</tr>
										<tr>
											<td id="2624">Moron BK</td>
											<td><img src="modules/fmsdb/img/flags/s/SWE.gif" alt="Sweden">  SWE</td>
											<td>Second Division N</td>
											<td>0</td>
											<td>Semi-Professional</td>
											<td>500</td>
											<td><span class="label" style="background:#008030"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1935</td>
											<td>24.3</td>
										</tr>
										<tr>
											<td id="1818">Motala AIF</td>
											<td><img src="modules/fmsdb/img/flags/s/SWE.gif" alt="Sweden">  SWE</td>
											<td>Second Division SS</td>
											<td>2K</td>
											<td>Semi-Professional</td>
											<td>8,500</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1907</td>
											<td>22.9</td>
										</tr>
										<tr>
											<td id="2172">Norrby IF</td>
											<td><img src="modules/fmsdb/img/flags/s/SWE.gif" alt="Sweden">  SWE</td>
											<td>First Division South</td>
											<td>0</td>
											<td>Semi-Professional</td>
											<td>18,800</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#1068F8"></span></td>
											<td>1927</td>
											<td>23.6</td>
										</tr>
										<tr>
											<td id="2626">Nybro IF</td>
											<td><img src="modules/fmsdb/img/flags/s/SWE.gif" alt="Sweden">  SWE</td>
											<td>Second Division SG</td>
											<td>0</td>
											<td>Semi-Professional</td>
											<td>1,000</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#E00000"></span></td>
											<td>1906</td>
											<td>24.3</td>
										</tr>
										<tr>
											<td id="2627">Nykopings BIS</td>
											<td><img src="modules/fmsdb/img/flags/s/SWE.gif" alt="Sweden">  SWE</td>
											<td>First Division North</td>
											<td>0</td>
											<td>Semi-Professional</td>
											<td>3,200</td>
											<td><span class="label" style="background:#005098"></span> <span class="label" style="background:#E00000"></span></td>
											<td>1966</td>
											<td>22.7</td>
										</tr>
										<tr>
											<td id="1842">Orebro SK</td>
											<td><img src="modules/fmsdb/img/flags/s/SWE.gif" alt="Sweden">  SWE</td>
											<td>Premier Division</td>
											<td>72K</td>
											<td>Professional</td>
											<td>14,400</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1908</td>
											<td>25.2</td>
										</tr>
										<tr>
											<td id="8490994">1461 Trabzon</td>
											<td><img src="modules/fmsdb/img/flags/s/TUR.gif" alt="Turkey">  TUR</td>
											<td>2. League Red</td>
											<td>6K</td>
											<td>Professional</td>
											<td>41,513</td>
											<td><span class="label" style="background:#00A0E0"></span> <span class="label" style="background:#A80030"></span></td>
											<td>1998</td>
											<td>21.4</td>
										</tr>
										<tr>
											<td id="70000106">A. Selcukspor</td>
											<td><img src="modules/fmsdb/img/flags/s/TUR.gif" alt="Turkey">  TUR</td>
											<td>2. League White</td>
											<td>0</td>
											<td>Professional</td>
											<td>22,459</td>
											<td><span class="label" style="background:#008888"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1955</td>
											<td>24.0</td>
										</tr>
										<tr>
											<td id="450542">A. Uskudar</td>
											<td><img src="modules/fmsdb/img/flags/s/TUR.gif" alt="Turkey">  TUR</td>
											<td>2. League White</td>
											<td>0</td>
											<td>Professional</td>
											<td>5,060</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#008030"></span></td>
											<td>1908</td>
											<td>22.8</td>
										</tr>
										<tr>
											<td id="450573">Adana D.S.</td>
											<td><img src="modules/fmsdb/img/flags/s/TUR.gif" alt="Turkey">  TUR</td>
											<td>1. League</td>
											<td>70K</td>
											<td>Professional</td>
											<td>16,095</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
											<td>1940</td>
											<td>26.6</td>
										</tr>
										<tr>
											<td id="1862">Adanaspor</td>
											<td><img src="modules/fmsdb/img/flags/s/TUR.gif" alt="Turkey">  TUR</td>
											<td>Super League</td>
											<td>77K</td>
											<td>Professional</td>
											<td>16,095</td>
											<td><span class="label" style="background:#F86820"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1954</td>
											<td>24.1</td>
										</tr>
										<tr>
											<td id="455778">Akhisar Bld.</td>
											<td><img src="modules/fmsdb/img/flags/s/TUR.gif" alt="Turkey">  TUR</td>
											<td>Super League</td>
											<td>155K</td>
											<td>Professional</td>
											<td>16,597</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
											<td>1970</td>
											<td>28.0</td>
										</tr>
										<tr>
											<td id="458718">Alanyaspor</td>
											<td><img src="modules/fmsdb/img/flags/s/TUR.gif" alt="Turkey">  TUR</td>
											<td>Super League</td>
											<td>77K</td>
											<td>Professional</td>
											<td>10,842</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
											<td>1948</td>
											<td>26.1</td>
										</tr>
										<tr>
											<td id="8478376">Alt?nordu</td>
											<td><img src="modules/fmsdb/img/flags/s/TUR.gif" alt="Turkey">  TUR</td>
											<td>1. League</td>
											<td>20K</td>
											<td>Professional</td>
											<td>51,295</td>
											<td><span class="label" style="background:#F84028"></span> <span class="label" style="background:#F84028"></span></td>
											<td>1923</td>
											<td>23.5</td>
										</tr>
										<tr>
											<td id="455675">Amed Sportif</td>
											<td><img src="modules/fmsdb/img/flags/s/TUR.gif" alt="Turkey">  TUR</td>
											<td>2. League White</td>
											<td>0</td>
											<td>Professional</td>
											<td>1,540</td>
											<td><span class="label" style="background:#E00000"></span> <span class="label" style="background:#008030"></span></td>
											<td>1990</td>
											<td>27.0</td>
										</tr>
										<tr>
											<td id="1864">Ankaragucu</td>
											<td><img src="modules/fmsdb/img/flags/s/TUR.gif" alt="Turkey">  TUR</td>
											<td>2. League Red</td>
											<td>0</td>
											<td>Professional</td>
											<td>19,209</td>
											<td><span class="label" style="background:#E8E010"></span> <span class="label" style="background:#002060"></span></td>
											<td>1910</td>
											<td>25.2</td>
										</tr>
										<tr>
											<td id="1865">Antalyaspor</td>
											<td><img src="modules/fmsdb/img/flags/s/TUR.gif" alt="Turkey">  TUR</td>
											<td>Super League</td>
											<td>61K</td>
											<td>Professional</td>
											<td>32,539</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
											<td>1966</td>
											<td>27.7</td>
										</tr>
										<tr>
											<td id="70043780">Ayd?nspor 1923</td>
											<td><img src="modules/fmsdb/img/flags/s/TUR.gif" alt="Turkey">  TUR</td>
											<td>2. League Red</td>
											<td>0</td>
											<td>Professional</td>
											<td>14,094</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1993</td>
											<td>25.2</td>
										</tr>
										<tr>
											<td id="130300">Bal?kesirspor</td>
											<td><img src="modules/fmsdb/img/flags/s/TUR.gif" alt="Turkey">  TUR</td>
											<td>1. League</td>
											<td>19K</td>
											<td>Professional</td>
											<td>13,423</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
											<td>1966</td>
											<td>25.7</td>
										</tr>
										<tr>
											<td id="130304">Band?rmaspor</td>
											<td><img src="modules/fmsdb/img/flags/s/TUR.gif" alt="Turkey">  TUR</td>
											<td>1. League</td>
											<td>0</td>
											<td>Professional</td>
											<td>12,708</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#901000"></span></td>
											<td>1965</td>
											<td>24.5</td>
										</tr>
										<tr>
											<td id="130343">Basaksehir</td>
											<td><img src="modules/fmsdb/img/flags/s/TUR.gif" alt="Turkey">  TUR</td>
											<td>Super League</td>
											<td>387K</td>
											<td>Professional</td>
											<td>17,319</td>
											<td><span class="label" style="background:#303868"></span> <span class="label" style="background:#F87000"></span></td>
											<td>1990</td>
											<td>28.4</td>
										</tr>
										<tr>
											<td id="1866">Besiktas</td>
											<td><img src="modules/fmsdb/img/flags/s/TUR.gif" alt="Turkey">  TUR</td>
											<td>Super League</td>
											<td>3M</td>
											<td>Professional</td>
											<td>41,903</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#000000"></span></td>
											<td>1903</td>
											<td>27.2</td>
										</tr>
										<tr>
											<td id="130354">Boluspor</td>
											<td><img src="modules/fmsdb/img/flags/s/TUR.gif" alt="Turkey">  TUR</td>
											<td>1. League</td>
											<td>14K</td>
											<td>Professional</td>
											<td>8,881</td>
											<td><span class="label" style="background:#E00000"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1965</td>
											<td>25.0</td>
										</tr>
										<tr>
											<td id="130348">Bucaspor</td>
											<td><img src="modules/fmsdb/img/flags/s/TUR.gif" alt="Turkey">  TUR</td>
											<td>2. League White</td>
											<td>0</td>
											<td>Professional</td>
											<td>10,500</td>
											<td><span class="label" style="background:#0030A0"></span> <span class="label" style="background:#002060"></span></td>
											<td>1928</td>
											<td>25.2</td>
										</tr>
										<tr>
											<td id="8491577">BUGSASSpor</td>
											<td><img src="modules/fmsdb/img/flags/s/TUR.gif" alt="Turkey">  TUR</td>
											<td>2. League Red</td>
											<td>0</td>
											<td>Professional</td>
											<td>4,271</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#002080"></span></td>
											<td>1984</td>
											<td>24.0</td>
										</tr>
										<tr>
											<td id="1867">Bursaspor</td>
											<td><img src="modules/fmsdb/img/flags/s/TUR.gif" alt="Turkey">  TUR</td>
											<td>Super League</td>
											<td>2M</td>
											<td>Professional</td>
											<td>43,331</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
											<td>1963</td>
											<td>27.3</td>
										</tr>
										<tr>
											<td id="1868">Denizlispor</td>
											<td><img src="modules/fmsdb/img/flags/s/TUR.gif" alt="Turkey">  TUR</td>
											<td>1. League</td>
											<td>5K</td>
											<td>Professional</td>
											<td>15,459</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
											<td>1966</td>
											<td>25.1</td>
										</tr>
										<tr>
											<td id="130377">Elaz?gspor</td>
											<td><img src="modules/fmsdb/img/flags/s/TUR.gif" alt="Turkey">  TUR</td>
											<td>1. League</td>
											<td>13K</td>
											<td>Professional</td>
											<td>14,467</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
											<td>1967</td>
											<td>25.7</td>
										</tr>
										<tr>
											<td id="70054558">Erzurum Bld.</td>
											<td><img src="modules/fmsdb/img/flags/s/TUR.gif" alt="Turkey">  TUR</td>
											<td>2. League White</td>
											<td>0</td>
											<td>Professional</td>
											<td>23,700</td>
											<td><span class="label" style="background:#0078F8"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>2010</td>
											<td>25.7</td>
										</tr>
										<tr>
											<td id="1301257">Eskisehirspor</td>
											<td><img src="modules/fmsdb/img/flags/s/TUR.gif" alt="Turkey">  TUR</td>
											<td>1. League</td>
											<td>50K</td>
											<td>Professional</td>
											<td>34,930</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
											<td>1965</td>
											<td>25.1</td>
										</tr>
										<tr>
											<td id="459181">Etimesgut Bld.</td>
											<td><img src="modules/fmsdb/img/flags/s/TUR.gif" alt="Turkey">  TUR</td>
											<td>2. League Red</td>
											<td>0</td>
											<td>Professional</td>
											<td>3,000</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#000000"></span></td>
											<td>1990</td>
											<td>25.8</td>
										</tr>
										<tr>
											<td id="130289">Eyupspor</td>
											<td><img src="modules/fmsdb/img/flags/s/TUR.gif" alt="Turkey">  TUR</td>
											<td>2. League Red</td>
											<td>0</td>
											<td>Professional</td>
											<td>3,250</td>
											<td><span class="label" style="background:#F8F000"></span> <span class="label" style="background:#503098"></span></td>
											<td>1919</td>
											<td>26.1</td>
										</tr>
										<tr>
											<td id="458631">F. Karagumruk</td>
											<td><img src="modules/fmsdb/img/flags/s/TUR.gif" alt="Turkey">  TUR</td>
											<td>2. League White</td>
											<td>0</td>
											<td>Professional</td>
											<td>6,500</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1926</td>
											<td>22.2</td>
										</tr>
										<tr>
											<td id="1870">Fenerbahce</td>
											<td><img src="modules/fmsdb/img/flags/s/TUR.gif" alt="Turkey">  TUR</td>
											<td>Super League</td>
											<td>0</td>
											<td>Professional</td>
											<td>50,509</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
											<td>1907</td>
											<td>26.8</td>
										</tr>
										<tr>
											<td id="457419">Fethiyespor</td>
											<td><img src="modules/fmsdb/img/flags/s/TUR.gif" alt="Turkey">  TUR</td>
											<td>2. League White</td>
											<td>0</td>
											<td>Professional</td>
											<td>8,372</td>
											<td><span class="label" style="background:#E00000"></span> <span class="label" style="background:#002060"></span></td>
											<td>1933</td>
											<td>24.4</td>
										</tr>
										<tr>
											<td id="1871">Galatasaray</td>
											<td><img src="modules/fmsdb/img/flags/s/TUR.gif" alt="Turkey">  TUR</td>
											<td>Super League</td>
											<td>258K</td>
											<td>Professional</td>
											<td>52,652</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
											<td>1905</td>
											<td>26.7</td>
										</tr>
										<tr>
											<td id="130341">Gaziantep Bld.</td>
											<td><img src="modules/fmsdb/img/flags/s/TUR.gif" alt="Turkey">  TUR</td>
											<td>1. League</td>
											<td>7K</td>
											<td>Professional</td>
											<td>16,981</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
											<td>1988</td>
											<td>26.7</td>
										</tr>
										<tr>
											<td id="1872">Gaziantepspor</td>
											<td><img src="modules/fmsdb/img/flags/s/TUR.gif" alt="Turkey">  TUR</td>
											<td>Super League</td>
											<td>194K</td>
											<td>Professional</td>
											<td>16,981</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
											<td>1969</td>
											<td>26.0</td>
										</tr>
										<tr>
											<td id="1873">Genclerbirligi</td>
											<td><img src="modules/fmsdb/img/flags/s/TUR.gif" alt="Turkey">  TUR</td>
											<td>Super League</td>
											<td>65K</td>
											<td>Professional</td>
											<td>19,209</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
											<td>1923</td>
											<td>25.0</td>
										</tr>
										<tr>
											<td id="130367">Giresunspor</td>
											<td><img src="modules/fmsdb/img/flags/s/TUR.gif" alt="Turkey">  TUR</td>
											<td>1. League</td>
											<td>14K</td>
											<td>Professional</td>
											<td>11,060</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
											<td>1967</td>
											<td>27.2</td>
										</tr>
										<tr>
											<td id="130338">Goztepe</td>
											<td><img src="modules/fmsdb/img/flags/s/TUR.gif" alt="Turkey">  TUR</td>
											<td>1. League</td>
											<td>39K</td>
											<td>Professional</td>
											<td>6,700</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
											<td>1925</td>
											<td>25.4</td>
										</tr>
										<tr>
											<td id="450544">Gumushanespor</td>
											<td><img src="modules/fmsdb/img/flags/s/TUR.gif" alt="Turkey">  TUR</td>
											<td>2. League Red</td>
											<td>0</td>
											<td>Professional</td>
											<td>4,000</td>
											<td><span class="label" style="background:#E00000"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1995</td>
											<td>25.1</td>
										</tr>
										<tr>
											<td id="130365">Hacettepe</td>
											<td><img src="modules/fmsdb/img/flags/s/TUR.gif" alt="Turkey">  TUR</td>
											<td>2. League White</td>
											<td>0</td>
											<td>Professional</td>
											<td>37,000</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#383058"></span></td>
											<td>1948</td>
											<td>22.2</td>
										</tr>
										<tr>
											<td id="130342">Hatayspor</td>
											<td><img src="modules/fmsdb/img/flags/s/TUR.gif" alt="Turkey">  TUR</td>
											<td>2. League Red</td>
											<td>0</td>
											<td>Professional</td>
											<td>6,765</td>
											<td><span class="label" style="background:#800020"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1967</td>
											<td>26.0</td>
										</tr>
										<tr>
											<td id="453682">Inegolspor</td>
											<td><img src="modules/fmsdb/img/flags/s/TUR.gif" alt="Turkey">  TUR</td>
											<td>2. League Red</td>
											<td>0</td>
											<td>Professional</td>
											<td>4,975</td>
											<td><span class="label" style="background:#B00000"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1954</td>
											<td>26.0</td>
										</tr>
										<tr>
											<td id="1874">Istanbulspor</td>
											<td><img src="modules/fmsdb/img/flags/s/TUR.gif" alt="Turkey">  TUR</td>
											<td>2. League White</td>
											<td>0</td>
											<td>Professional</td>
											<td>4,338</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F8F000"></span></td>
											<td>1990</td>
											<td>22.8</td>
										</tr>
										<tr>
											<td id="130298">K. Marasspor</td>
											<td><img src="modules/fmsdb/img/flags/s/TUR.gif" alt="Turkey">  TUR</td>
											<td>2. League White</td>
											<td>0</td>
											<td>Professional</td>
											<td>15,050</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#E00000"></span></td>
											<td>1969</td>
											<td>25.5</td>
										</tr>
										<tr>
											<td id="450550">K?rklarelispor</td>
											<td><img src="modules/fmsdb/img/flags/s/TUR.gif" alt="Turkey">  TUR</td>
											<td>2. League Red</td>
											<td>0</td>
											<td>Professional</td>
											<td>2,500</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#008030"></span></td>
											<td>1968</td>
											<td>27.5</td>
										</tr>
										<tr>
											<td id="130368">Karabukspor</td>
											<td><img src="modules/fmsdb/img/flags/s/TUR.gif" alt="Turkey">  TUR</td>
											<td>Super League</td>
											<td>77K</td>
											<td>Professional</td>
											<td>11,300</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
											<td>1969</td>
											<td>28.0</td>
										</tr>
										<tr>
											<td id="1301256">Kars?yaka</td>
											<td><img src="modules/fmsdb/img/flags/s/TUR.gif" alt="Turkey">  TUR</td>
											<td>2. League Red</td>
											<td>53K</td>
											<td>Professional</td>
											<td>10,500</td>
											<td><span class="label" style="background:#E00000"></span> <span class="label" style="background:#007850"></span></td>
											<td>1912</td>
											<td>24.0</td>
										</tr>
										<tr>
											<td id="130360">Kas?mpasa</td>
											<td><img src="modules/fmsdb/img/flags/s/TUR.gif" alt="Turkey">  TUR</td>
											<td>Super League</td>
											<td>774K</td>
											<td>Professional</td>
											<td>14,234</td>
											<td><span class="label" style="background:#2850A0"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1921</td>
											<td>25.6</td>
										</tr>
										<tr>
											<td id="70061804">Kastamonuspor 1966</td>
											<td><img src="modules/fmsdb/img/flags/s/TUR.gif" alt="Turkey">  TUR</td>
											<td>2. League Red</td>
											<td>0</td>
											<td>Professional</td>
											<td>4,033</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
											<td>1942</td>
											<td>25.1</td>
										</tr>
										<tr>
											<td id="8481880">Kayseri Erciyesspor</td>
											<td><img src="modules/fmsdb/img/flags/s/TUR.gif" alt="Turkey">  TUR</td>
											<td>2. League Red</td>
											<td>0</td>
											<td>Professional</td>
											<td>32,864</td>
											<td><span class="label" style="background:#0050D0"></span> <span class="label" style="background:#000000"></span></td>
											<td>1966</td>
											<td>19.7</td>
										</tr>
										<tr>
											<td id="1875">Kayserispor</td>
											<td><img src="modules/fmsdb/img/flags/s/TUR.gif" alt="Turkey">  TUR</td>
											<td>Super League</td>
											<td>361K</td>
											<td>Professional</td>
											<td>32,864</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
											<td>1966</td>
											<td>24.7</td>
										</tr>
										<tr>
											<td id="454840">Keciorengucu</td>
											<td><img src="modules/fmsdb/img/flags/s/TUR.gif" alt="Turkey">  TUR</td>
											<td>2. League White</td>
											<td>0</td>
											<td>Professional</td>
											<td>5,040</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#7868C0"></span></td>
											<td>1987</td>
											<td>26.1</td>
										</tr>
										<tr>
											<td id="459119">Kocaeli Birlik</td>
											<td><img src="modules/fmsdb/img/flags/s/TUR.gif" alt="Turkey">  TUR</td>
											<td>2. League White</td>
											<td>0</td>
											<td>Professional</td>
											<td>2,000</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#008030"></span></td>
											<td>1995</td>
											<td>27.1</td>
										</tr>
										<tr>
											<td id="130344">Konyaspor</td>
											<td><img src="modules/fmsdb/img/flags/s/TUR.gif" alt="Turkey">  TUR</td>
											<td>Super League</td>
											<td>258K</td>
											<td>Professional</td>
											<td>41,981</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
											<td>1981</td>
											<td>25.8</td>
										</tr>
										<tr>
											<td id="456059">Manisaspor</td>
											<td><img src="modules/fmsdb/img/flags/s/TUR.gif" alt="Turkey">  TUR</td>
											<td>1. League</td>
											<td>0</td>
											<td>Professional</td>
											<td>16,597</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
											<td>1965</td>
											<td>23.8</td>
										</tr>
										<tr>
											<td id="70028001">Menemen Bld.</td>
											<td><img src="modules/fmsdb/img/flags/s/TUR.gif" alt="Turkey">  TUR</td>
											<td>2. League Red</td>
											<td>0</td>
											<td>Professional</td>
											<td>2,500</td>
											<td><span class="label" style="background:#002060"></span> <span class="label" style="background:#F8F000"></span></td>
											<td>1993</td>
											<td>26.9</td>
										</tr>
										<tr>
											<td id="130345">Mersin I.Y.</td>
											<td><img src="modules/fmsdb/img/flags/s/TUR.gif" alt="Turkey">  TUR</td>
											<td>1. League</td>
											<td>29K</td>
											<td>Professional</td>
											<td>25,497</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
											<td>1925</td>
											<td>23.4</td>
										</tr>
										<tr>
											<td id="130351">Nazilli Bld.</td>
											<td><img src="modules/fmsdb/img/flags/s/TUR.gif" alt="Turkey">  TUR</td>
											<td>2. League White</td>
											<td>0</td>
											<td>Professional</td>
											<td>5,000</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#000000"></span></td>
											<td>1984</td>
											<td>26.4</td>
										</tr>
										<tr>
											<td id="70054569">Nigde Bld.</td>
											<td><img src="modules/fmsdb/img/flags/s/TUR.gif" alt="Turkey">  TUR</td>
											<td>2. League Red</td>
											<td>0</td>
											<td>Professional</td>
											<td>5,000</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#E00000"></span></td>
											<td>1990</td>
											<td>26.7</td>
										</tr>
										<tr>
											<td id="454646">Ofspor</td>
											<td><img src="modules/fmsdb/img/flags/s/TUR.gif" alt="Turkey">  TUR</td>
											<td>2. League White</td>
											<td>0</td>
											<td>Professional</td>
											<td>2,303</td>
											<td><span class="label" style="background:#C80000"></span> <span class="label" style="background:#0030A0"></span></td>
											<td>1979</td>
											<td>22.3</td>
										</tr>
										<tr>
											<td id="130355">Osmanl?spor</td>
											<td><img src="modules/fmsdb/img/flags/s/TUR.gif" alt="Turkey">  TUR</td>
											<td>Super League</td>
											<td>774K</td>
											<td>Professional</td>
											<td>19,626</td>
											<td><span class="label" style="background:#081030"></span> <span class="label" style="background:#E0D8C8"></span></td>
											<td>1978</td>
											<td>26.9</td>
										</tr>
										<tr>
											<td id="130362">Pendikspor</td>
											<td><img src="modules/fmsdb/img/flags/s/TUR.gif" alt="Turkey">  TUR</td>
											<td>2. League White</td>
											<td>0</td>
											<td>Professional</td>
											<td>2,500</td>
											<td><span class="label" style="background:#E00000"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1950</td>
											<td>24.0</td>
										</tr>
										<tr>
											<td id="130366">Rizespor</td>
											<td><img src="modules/fmsdb/img/flags/s/TUR.gif" alt="Turkey">  TUR</td>
											<td>Super League</td>
											<td>94K</td>
											<td>Professional</td>
											<td>15,558</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
											<td>1953</td>
											<td>24.6</td>
										</tr>
										<tr>
											<td id="1878">Samsunspor</td>
											<td><img src="modules/fmsdb/img/flags/s/TUR.gif" alt="Turkey">  TUR</td>
											<td>1. League</td>
											<td>0</td>
											<td>Professional</td>
											<td>16,679</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#E02818"></span></td>
											<td>1965</td>
											<td>23.1</td>
										</tr>
										<tr>
											<td id="130380">Sanl?urfaspor</td>
											<td><img src="modules/fmsdb/img/flags/s/TUR.gif" alt="Turkey">  TUR</td>
											<td>1. League</td>
											<td>65K</td>
											<td>Professional</td>
											<td>28,695</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
											<td>1969</td>
											<td>26.0</td>
										</tr>
										<tr>
											<td id="1301254">Sar?yer</td>
											<td><img src="modules/fmsdb/img/flags/s/TUR.gif" alt="Turkey">  TUR</td>
											<td>2. League Red</td>
											<td>0</td>
											<td>Professional</td>
											<td>5,000</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#0030A0"></span></td>
											<td>1940</td>
											<td>25.8</td>
										</tr>
										<tr>
											<td id="70054556">Sivas Bld.</td>
											<td><img src="modules/fmsdb/img/flags/s/TUR.gif" alt="Turkey">  TUR</td>
											<td>2. League White</td>
											<td>0</td>
											<td>Professional</td>
											<td>500</td>
											<td><span class="label" style="background:#E00000"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1949</td>
											<td>23.7</td>
										</tr>
										<tr>
											<td id="130382">Sivasspor</td>
											<td><img src="modules/fmsdb/img/flags/s/TUR.gif" alt="Turkey">  TUR</td>
											<td>1. League</td>
											<td>57K</td>
											<td>Professional</td>
											<td>27,532</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
											<td>1967</td>
											<td>27.7</td>
										</tr>
										<tr>
											<td id="455003">Tepecikspor</td>
											<td><img src="modules/fmsdb/img/flags/s/TUR.gif" alt="Turkey">  TUR</td>
											<td>2. League White</td>
											<td>0</td>
											<td>Professional</td>
											<td>2,000</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#008030"></span></td>
											<td>1988</td>
											<td>24.4</td>
										</tr>
										<tr>
											<td id="456152">Tokatspor</td>
											<td><img src="modules/fmsdb/img/flags/s/TUR.gif" alt="Turkey">  TUR</td>
											<td>2. League Red</td>
											<td>0</td>
											<td>Professional</td>
											<td>5,762</td>
											<td><span class="label" style="background:#901000"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1969</td>
											<td>27.0</td>
										</tr>
										<tr>
											<td id="1879">Trabzonspor</td>
											<td><img src="modules/fmsdb/img/flags/s/TUR.gif" alt="Turkey">  TUR</td>
											<td>Super League</td>
											<td>774K</td>
											<td>Professional</td>
											<td>24,169</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
											<td>1967</td>
											<td>24.2</td>
										</tr>
										<tr>
											<td id="70078171">Tuzlaspor</td>
											<td><img src="modules/fmsdb/img/flags/s/TUR.gif" alt="Turkey">  TUR</td>
											<td>2. League Red</td>
											<td>0</td>
											<td>Professional</td>
											<td>2,200</td>
											<td><span class="label" style="background:#0050D0"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1954</td>
											<td>23.3</td>
										</tr>
										<tr>
											<td id="453567">Umraniyespor</td>
											<td><img src="modules/fmsdb/img/flags/s/TUR.gif" alt="Turkey">  TUR</td>
											<td>1. League</td>
											<td>0</td>
											<td>Professional</td>
											<td>500</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#E00000"></span></td>
											<td>1938</td>
											<td>26.2</td>
										</tr>
										<tr>
											<td id="130378">Y. Malatyaspor</td>
											<td><img src="modules/fmsdb/img/flags/s/TUR.gif" alt="Turkey">  TUR</td>
											<td>1. League</td>
											<td>14K</td>
											<td>Professional</td>
											<td>13,020</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
											<td>1986</td>
											<td>26.7</td>
										</tr>
										<tr>
											<td id="70061827">Zonguldak Komurspor</td>
											<td><img src="modules/fmsdb/img/flags/s/TUR.gif" alt="Turkey">  TUR</td>
											<td>2. League White</td>
											<td>0</td>
											<td>Professional</td>
											<td>13,795</td>
											<td><span class="label" style="background:#E00000"></span> <span class="label" style="background:#002060"></span></td>
											<td>1986</td>
											<td>25.8</td>
										</tr>
										<tr>
											<td id="135454">Al-Ahli (UAE)</td>
											<td><img src="modules/fmsdb/img/flags/s/UAE.gif" alt="U.A.E.">  UAE</td>
											<td>Pro League</td>
											<td>3M</td>
											<td>Professional</td>
											<td>12,000</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#E00000"></span></td>
											<td>1970</td>
											<td>23.6</td>
										</tr>
										<tr>
											<td id="950376">Al-Ain</td>
											<td><img src="modules/fmsdb/img/flags/s/UAE.gif" alt="U.A.E.">  UAE</td>
											<td>Pro League</td>
											<td>4M</td>
											<td>Professional</td>
											<td>25,965</td>
											<td><span class="label" style="background:#501080"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1968</td>
											<td>22.7</td>
										</tr>
										<tr>
											<td id="135450">Al-Jazira (UAE)</td>
											<td><img src="modules/fmsdb/img/flags/s/UAE.gif" alt="U.A.E.">  UAE</td>
											<td>Pro League</td>
											<td>3M</td>
											<td>Professional</td>
											<td>42,056</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#000000"></span></td>
											<td>1974</td>
											<td>23.9</td>
										</tr>
										<tr>
											<td id="135443">Al-Shabab (UAE)</td>
											<td><img src="modules/fmsdb/img/flags/s/UAE.gif" alt="U.A.E.">  UAE</td>
											<td>Pro League</td>
											<td>2M</td>
											<td>Professional</td>
											<td>13,000</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#006030"></span></td>
											<td>1958</td>
											<td>23.5</td>
										</tr>
										<tr>
											<td id="135430">Al-Wahda (UAE)</td>
											<td><img src="modules/fmsdb/img/flags/s/UAE.gif" alt="U.A.E.">  UAE</td>
											<td>Pro League</td>
											<td>4M</td>
											<td>Professional</td>
											<td>12,000</td>
											<td><span class="label" style="background:#D8B028"></span> <span class="label" style="background:#781828"></span></td>
											<td>1974</td>
											<td>22.9</td>
										</tr>
										<tr>
											<td id="71089946">Arsenal-Kyiv</td>
											<td><img src="modules/fmsdb/img/flags/s/UKR.gif" alt="Ukraine">  UKR</td>
											<td>First League</td>
											<td>0</td>
											<td>Professional</td>
											<td>0</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
											<td>2014</td>
											<td>25.2</td>
										</tr>
										<tr>
											<td id="71017851">Avangard Kramatorsk</td>
											<td><img src="modules/fmsdb/img/flags/s/UKR.gif" alt="Ukraine">  UKR</td>
											<td>First League</td>
											<td>0</td>
											<td>Professional</td>
											<td>2,500</td>
											<td><span class="label" style="background:#0050D0"></span> <span class="label" style="background:#F8F000"></span></td>
											<td>1955</td>
											<td>24.4</td>
										</tr>
										<tr>
											<td id="484458">Bukovyna</td>
											<td><img src="modules/fmsdb/img/flags/s/UKR.gif" alt="Ukraine">  UKR</td>
											<td>First League</td>
											<td>0</td>
											<td>Professional</td>
											<td>12,000</td>
											<td><span class="label" style="background:#E00000"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1952</td>
											<td>23.8</td>
										</tr>
										<tr>
											<td id="71047450">Cherkaskyi Dnipro</td>
											<td><img src="modules/fmsdb/img/flags/s/UKR.gif" alt="Ukraine">  UKR</td>
											<td>First League</td>
											<td>0</td>
											<td>Professional</td>
											<td>10,321</td>
											<td><span class="label" style="background:#1838F8"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>2010</td>
											<td>26.2</td>
										</tr>
										<tr>
											<td id="1884">Chornomorets</td>
											<td><img src="modules/fmsdb/img/flags/s/UKR.gif" alt="Ukraine">  UKR</td>
											<td>Premier League</td>
											<td>23K</td>
											<td>Professional</td>
											<td>34,164</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#0030A0"></span></td>
											<td>1936</td>
											<td>22.7</td>
										</tr>
										<tr>
											<td id="484484">Desna</td>
											<td><img src="modules/fmsdb/img/flags/s/UKR.gif" alt="Ukraine">  UKR</td>
											<td>First League</td>
											<td>45K</td>
											<td>Professional</td>
											<td>12,500</td>
											<td><span class="label" style="background:#E0E0E0"></span> <span class="label" style="background:#080048"></span></td>
											<td>1960</td>
											<td>25.5</td>
										</tr>
										<tr>
											<td id="1886">Dnipro</td>
											<td><img src="modules/fmsdb/img/flags/s/UKR.gif" alt="Ukraine">  UKR</td>
											<td>Premier League</td>
											<td>768K</td>
											<td>Professional</td>
											<td>31,000</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#0860C0"></span></td>
											<td>1918</td>
											<td>24.0</td>
										</tr>
										<tr>
											<td id="1885">Dynamo Kyiv</td>
											<td><img src="modules/fmsdb/img/flags/s/UKR.gif" alt="Ukraine">  UKR</td>
											<td>Premier League</td>
											<td>12M</td>
											<td>Professional</td>
											<td>70,050</td>
											<td><span class="label" style="background:#0030A0"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1927</td>
											<td>26.7</td>
										</tr>
										<tr>
											<td id="5317918">Gelios</td>
											<td><img src="modules/fmsdb/img/flags/s/UKR.gif" alt="Ukraine">  UKR</td>
											<td>First League</td>
											<td>8K</td>
											<td>Professional</td>
											<td>4,924</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#88E830"></span></td>
											<td>2002</td>
											<td>26.6</td>
										</tr>
										<tr>
											<td id="485831">Girnyk-Sport</td>
											<td><img src="modules/fmsdb/img/flags/s/UKR.gif" alt="Ukraine">  UKR</td>
											<td>First League</td>
											<td>0</td>
											<td>Professional</td>
											<td>2,000</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#E00000"></span></td>
											<td>1989</td>
											<td>24.7</td>
										</tr>
										<tr>
											<td id="130870">Illichivets</td>
											<td><img src="modules/fmsdb/img/flags/s/UKR.gif" alt="Ukraine">  UKR</td>
											<td>First League</td>
											<td>23K</td>
											<td>Professional</td>
											<td>12,673</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#E00000"></span></td>
											<td>1938</td>
											<td>24.6</td>
										</tr>
										<tr>
											<td id="71076802">Ingulets Petrove</td>
											<td><img src="modules/fmsdb/img/flags/s/UKR.gif" alt="Ukraine">  UKR</td>
											<td>First League</td>
											<td>50K</td>
											<td>Professional</td>
											<td>1,720</td>
											<td><span class="label" style="background:#F8D000"></span> <span class="label" style="background:#00C030"></span></td>
											<td>2013</td>
											<td>25.4</td>
										</tr>
										<tr>
											<td id="1887">Karpaty</td>
											<td><img src="modules/fmsdb/img/flags/s/UKR.gif" alt="Ukraine">  UKR</td>
											<td>Premier League</td>
											<td>0</td>
											<td>Professional</td>
											<td>28,051</td>
											<td><span class="label" style="background:#48C078"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1963</td>
											<td>23.3</td>
										</tr>
										<tr>
											<td id="71063212">Kolos Kovalivka</td>
											<td><img src="modules/fmsdb/img/flags/s/UKR.gif" alt="Ukraine">  UKR</td>
											<td>First League</td>
											<td>0</td>
											<td>Professional</td>
											<td>0</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>2012</td>
											<td>26.5</td>
										</tr>
										<tr>
											<td id="1894">Mykolaiv</td>
											<td><img src="modules/fmsdb/img/flags/s/UKR.gif" alt="Ukraine">  UKR</td>
											<td>First League</td>
											<td>0</td>
											<td>Professional</td>
											<td>15,600</td>
											<td><span class="label" style="background:#0040D0"></span> <span class="label" style="background:#0040D0"></span></td>
											<td>1920</td>
											<td>26.7</td>
										</tr>
										<tr>
											<td id="485835">Naftovyk-Ukrnafta</td>
											<td><img src="modules/fmsdb/img/flags/s/UKR.gif" alt="Ukraine">  UKR</td>
											<td>First League</td>
											<td>50K</td>
											<td>Professional</td>
											<td>5,500</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F8F000"></span></td>
											<td>1980</td>
											<td>25.7</td>
										</tr>
										<tr>
											<td id="71075348">Obolon-Brewer</td>
											<td><img src="modules/fmsdb/img/flags/s/UKR.gif" alt="Ukraine">  UKR</td>
											<td>First League</td>
											<td>0</td>
											<td>Professional</td>
											<td>5,000</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#008030"></span></td>
											<td>2013</td>
											<td>27.2</td>
										</tr>
										<tr>
											<td id="484460">Olexandriya</td>
											<td><img src="modules/fmsdb/img/flags/s/UKR.gif" alt="Ukraine">  UKR</td>
											<td>Premier League</td>
											<td>10K</td>
											<td>Professional</td>
											<td>5,692</td>
											<td><span class="label" style="background:#F8F000"></span> <span class="label" style="background:#000000"></span></td>
											<td>1991</td>
											<td>26.3</td>
										</tr>
										<tr>
											<td id="5321800">Olimpik D</td>
											<td><img src="modules/fmsdb/img/flags/s/UKR.gif" alt="Ukraine">  UKR</td>
											<td>Premier League</td>
											<td>0</td>
											<td>Professional</td>
											<td>5,000</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>2001</td>
											<td>24.5</td>
										</tr>
										<tr>
											<td id="71005230">Poltava</td>
											<td><img src="modules/fmsdb/img/flags/s/UKR.gif" alt="Ukraine">  UKR</td>
											<td>First League</td>
											<td>768</td>
											<td>Professional</td>
											<td>3,700</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#000000"></span></td>
											<td>2007</td>
											<td>23.8</td>
										</tr>
										<tr>
											<td id="1895">Shakhtar</td>
											<td><img src="modules/fmsdb/img/flags/s/UKR.gif" alt="Ukraine">  UKR</td>
											<td>Premier League</td>
											<td>23M</td>
											<td>Professional</td>
											<td>33,400</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F87000"></span></td>
											<td>1936</td>
											<td>27.2</td>
										</tr>
										<tr>
											<td id="71028330">Skala Stryi</td>
											<td><img src="modules/fmsdb/img/flags/s/UKR.gif" alt="Ukraine">  UKR</td>
											<td>First League</td>
											<td>0</td>
											<td>Professional</td>
											<td>8,000</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#1068F8"></span></td>
											<td>2004</td>
											<td>22.8</td>
										</tr>
										<tr>
											<td id="5312711">Stal Kam'yans'ke</td>
											<td><img src="modules/fmsdb/img/flags/s/UKR.gif" alt="Ukraine">  UKR</td>
											<td>Premier League</td>
											<td>0</td>
											<td>Professional</td>
											<td>2,900</td>
											<td><span class="label" style="background:#002060"></span> <span class="label" style="background:#F8D000"></span></td>
											<td>1926</td>
											<td>24.8</td>
										</tr>
										<tr>
											<td id="5313097">Sumy</td>
											<td><img src="modules/fmsdb/img/flags/s/UKR.gif" alt="Ukraine">  UKR</td>
											<td>First League</td>
											<td>12K</td>
											<td>Professional</td>
											<td>25,830</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#0010D8"></span></td>
											<td>2008</td>
											<td>22.0</td>
										</tr>
										<tr>
											<td id="71024197">Ternopil</td>
											<td><img src="modules/fmsdb/img/flags/s/UKR.gif" alt="Ukraine">  UKR</td>
											<td>First League</td>
											<td>0</td>
											<td>Professional</td>
											<td>15,150</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
											<td>2007</td>
											<td>23.8</td>
										</tr>
										<tr>
											<td id="1900">Veres</td>
											<td><img src="modules/fmsdb/img/flags/s/UKR.gif" alt="Ukraine">  UKR</td>
											<td>First League</td>
											<td>0</td>
											<td>Professional</td>
											<td>25,000</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#0050D0"></span></td>
											<td>1957</td>
											<td>24.8</td>
										</tr>
										<tr>
											<td id="1901">Volyn</td>
											<td><img src="modules/fmsdb/img/flags/s/UKR.gif" alt="Ukraine">  UKR</td>
											<td>Premier League</td>
											<td>77K</td>
											<td>Professional</td>
											<td>11,345</td>
											<td><span class="label" style="background:#B00000"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1960</td>
											<td>22.9</td>
										</tr>
										<tr>
											<td id="1301293">Vorskla</td>
											<td><img src="modules/fmsdb/img/flags/s/UKR.gif" alt="Ukraine">  UKR</td>
											<td>Premier League</td>
											<td>15K</td>
											<td>Professional</td>
											<td>24,855</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#006030"></span></td>
											<td>1955</td>
											<td>26.1</td>
										</tr>
										<tr>
											<td id="71005232">Zirka</td>
											<td><img src="modules/fmsdb/img/flags/s/UKR.gif" alt="Ukraine">  UKR</td>
											<td>Premier League</td>
											<td>1K</td>
											<td>Professional</td>
											<td>14,000</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F8F000"></span></td>
											<td>1911</td>
											<td>26.0</td>
										</tr>
										<tr>
											<td id="1902">Zorya</td>
											<td><img src="modules/fmsdb/img/flags/s/UKR.gif" alt="Ukraine">  UKR</td>
											<td>Premier League</td>
											<td>77K</td>
											<td>Professional</td>
											<td>11,756</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#000000"></span></td>
											<td>1923</td>
											<td>25.3</td>
										</tr>
										<tr>
											<td id="8825225">Atenas de San Carlos</td>
											<td><img src="modules/fmsdb/img/flags/s/URU.gif" alt="Uruguay">  URU</td>
											<td>Second Division</td>
											<td>2K</td>
											<td>Professional</td>
											<td>4,900</td>
											<td><span class="label" style="background:#E00000"></span> <span class="label" style="background:#002080"></span></td>
											<td>1928</td>
											<td>25.7</td>
										</tr>
										<tr>
											<td id="5512793">Boston River</td>
											<td><img src="modules/fmsdb/img/flags/s/URU.gif" alt="Uruguay">  URU</td>
											<td>First Division</td>
											<td>2K</td>
											<td>Professional</td>
											<td>4,000</td>
											<td><span class="label" style="background:#C80000"></span> <span class="label" style="background:#006030"></span></td>
											<td>1939</td>
											<td>25.8</td>
										</tr>
										<tr>
											<td id="78046974">Canadian S.C.</td>
											<td><img src="modules/fmsdb/img/flags/s/URU.gif" alt="Uruguay">  URU</td>
											<td>Second Division</td>
											<td>768</td>
											<td>Professional</td>
											<td>1,500</td>
											<td><span class="label" style="background:#E00000"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>2010</td>
											<td>22.8</td>
										</tr>
										<tr>
											<td id="1916">Central Espanol</td>
											<td><img src="modules/fmsdb/img/flags/s/URU.gif" alt="Uruguay">  URU</td>
											<td>Second Division</td>
											<td>691</td>
											<td>Professional</td>
											<td>5,000</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#E00000"></span></td>
											<td>1905</td>
											<td>24.2</td>
										</tr>
										<tr>
											<td id="5512780">Cerrito</td>
											<td><img src="modules/fmsdb/img/flags/s/URU.gif" alt="Uruguay">  URU</td>
											<td>Second Division</td>
											<td>691</td>
											<td>Professional</td>
											<td>4,200</td>
											<td><span class="label" style="background:#008030"></span> <span class="label" style="background:#F8F000"></span></td>
											<td>1929</td>
											<td>26.1</td>
										</tr>
										<tr>
											<td id="1917">Cerro</td>
											<td><img src="modules/fmsdb/img/flags/s/URU.gif" alt="Uruguay">  URU</td>
											<td>First Division</td>
											<td>3K</td>
											<td>Professional</td>
											<td>18,000</td>
											<td><span class="label" style="background:#60C0F8"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1922</td>
											<td>25.3</td>
										</tr>
										<tr>
											<td id="8825223">Cerro Largo F.C.</td>
											<td><img src="modules/fmsdb/img/flags/s/URU.gif" alt="Uruguay">  URU</td>
											<td>Second Division</td>
											<td>768</td>
											<td>Professional</td>
											<td>9,500</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#0078F8"></span></td>
											<td>2002</td>
											<td>25.8</td>
										</tr>
										<tr>
											<td id="1918">Danubio</td>
											<td><img src="modules/fmsdb/img/flags/s/URU.gif" alt="Uruguay">  URU</td>
											<td>First Division</td>
											<td>6K</td>
											<td>Professional</td>
											<td>14,401</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1932</td>
											<td>23.5</td>
										</tr>
										<tr>
											<td id="1919">Defensor Sporting</td>
											<td><img src="modules/fmsdb/img/flags/s/URU.gif" alt="Uruguay">  URU</td>
											<td>First Division</td>
											<td>7K</td>
											<td>Professional</td>
											<td>9,357</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#503098"></span></td>
											<td>1913</td>
											<td>24.6</td>
										</tr>
										<tr>
											<td id="116309">Deportivo Maldonado</td>
											<td><img src="modules/fmsdb/img/flags/s/URU.gif" alt="Uruguay">  URU</td>
											<td>Second Division</td>
											<td>3K</td>
											<td>Professional</td>
											<td>22,000</td>
											<td><span class="label" style="background:#C80000"></span> <span class="label" style="background:#00A030"></span></td>
											<td>1928</td>
											<td>24.9</td>
										</tr>
										<tr>
											<td id="5512557">El Tanque Sisley</td>
											<td><img src="modules/fmsdb/img/flags/s/URU.gif" alt="Uruguay">  URU</td>
											<td>Second Division</td>
											<td>768</td>
											<td>Professional</td>
											<td>3,700</td>
											<td><span class="label" style="background:#00A030"></span> <span class="label" style="background:#000000"></span></td>
											<td>1941</td>
											<td>26.6</td>
										</tr>
										<tr>
											<td id="5512337">Fenix</td>
											<td><img src="modules/fmsdb/img/flags/s/URU.gif" alt="Uruguay">  URU</td>
											<td>First Division</td>
											<td>4K</td>
											<td>Professional</td>
											<td>5,550</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#7050B0"></span></td>
											<td>1916</td>
											<td>24.5</td>
										</tr>
										<tr>
											<td id="130848">Juventud de Las Piedras</td>
											<td><img src="modules/fmsdb/img/flags/s/URU.gif" alt="Uruguay">  URU</td>
											<td>First Division</td>
											<td>3K</td>
											<td>Professional</td>
											<td>3,500</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
											<td>1935</td>
											<td>24.2</td>
										</tr>
										<tr>
											<td id="1920">Liverpool de Montevideo</td>
											<td><img src="modules/fmsdb/img/flags/s/URU.gif" alt="Uruguay">  URU</td>
											<td>First Division</td>
											<td>3K</td>
											<td>Professional</td>
											<td>6,589</td>
											<td><span class="label" style="background:#1860F8"></span> <span class="label" style="background:#000000"></span></td>
											<td>1915</td>
											<td>25.2</td>
										</tr>
										<tr>
											<td id="5512559">Miramar Misiones</td>
											<td><img src="modules/fmsdb/img/flags/s/URU.gif" alt="Uruguay">  URU</td>
											<td>Second Division</td>
											<td>768</td>
											<td>Professional</td>
											<td>6,543</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
											<td>1906</td>
											<td>23.0</td>
										</tr>
										<tr>
											<td id="1921">Nacional</td>
											<td><img src="modules/fmsdb/img/flags/s/URU.gif" alt="Uruguay">  URU</td>
											<td>First Division</td>
											<td>27K</td>
											<td>Professional</td>
											<td>24,613</td>
											<td><span class="label" style="background:#0050D0"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1899</td>
											<td>26.0</td>
										</tr>
										<tr>
											<td id="1922">Penarol</td>
											<td><img src="modules/fmsdb/img/flags/s/URU.gif" alt="Uruguay">  URU</td>
											<td>First Division</td>
											<td>27K</td>
											<td>Professional</td>
											<td>40,000</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#E8E010"></span></td>
											<td>1891</td>
											<td>24.4</td>
										</tr>
										<tr>
											<td id="5512779">Plaza Colonia</td>
											<td><img src="modules/fmsdb/img/flags/s/URU.gif" alt="Uruguay">  URU</td>
											<td>First Division</td>
											<td>2K</td>
											<td>Professional</td>
											<td>6,400</td>
											<td><span class="label" style="background:#108830"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1917</td>
											<td>23.9</td>
										</tr>
										<tr>
											<td id="1923">Progreso</td>
											<td><img src="modules/fmsdb/img/flags/s/URU.gif" alt="Uruguay">  URU</td>
											<td>Second Division</td>
											<td>614</td>
											<td>Professional</td>
											<td>5,675</td>
											<td><span class="label" style="background:#E00000"></span> <span class="label" style="background:#E8E010"></span></td>
											<td>1917</td>
											<td>26.4</td>
										</tr>
										<tr>
											<td id="130849">Racing de Montevideo</td>
											<td><img src="modules/fmsdb/img/flags/s/URU.gif" alt="Uruguay">  URU</td>
											<td>First Division</td>
											<td>2K</td>
											<td>Professional</td>
											<td>5,600</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#008030"></span></td>
											<td>1919</td>
											<td>25.0</td>
										</tr>
										<tr>
											<td id="1924">Rampla Juniors</td>
											<td><img src="modules/fmsdb/img/flags/s/URU.gif" alt="Uruguay">  URU</td>
											<td>First Division</td>
											<td>1K</td>
											<td>Professional</td>
											<td>6,929</td>
											<td><span class="label" style="background:#E00000"></span> <span class="label" style="background:#00A030"></span></td>
											<td>1914</td>
											<td>24.8</td>
										</tr>
										<tr>
											<td id="115039">Rentistas</td>
											<td><img src="modules/fmsdb/img/flags/s/URU.gif" alt="Uruguay">  URU</td>
											<td>Second Division</td>
											<td>2K</td>
											<td>Professional</td>
											<td>6,272</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#E00000"></span></td>
											<td>1933</td>
											<td>24.6</td>
										</tr>
										<tr>
											<td id="1925">River Plate de Montevideo</td>
											<td><img src="modules/fmsdb/img/flags/s/URU.gif" alt="Uruguay">  URU</td>
											<td>First Division</td>
											<td>3K</td>
											<td>Professional</td>
											<td>6,224</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#E00000"></span></td>
											<td>1932</td>
											<td>23.6</td>
										</tr>
										<tr>
											<td id="5512556">Sud America</td>
											<td><img src="modules/fmsdb/img/flags/s/URU.gif" alt="Uruguay">  URU</td>
											<td>First Division</td>
											<td>4K</td>
											<td>Professional</td>
											<td>3,810</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F85000"></span></td>
											<td>1914</td>
											<td>25.0</td>
										</tr>
										<tr>
											<td id="130852">Tacuarembo F.C.</td>
											<td><img src="modules/fmsdb/img/flags/s/URU.gif" alt="Uruguay">  URU</td>
											<td>Second Division</td>
											<td>768</td>
											<td>Professional</td>
											<td>8,600</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#E00808"></span></td>
											<td>1998</td>
											<td>26.3</td>
										</tr>
										<tr>
											<td id="78027478">Torque</td>
											<td><img src="modules/fmsdb/img/flags/s/URU.gif" alt="Uruguay">  URU</td>
											<td>Second Division</td>
											<td>768</td>
											<td>Professional</td>
											<td>7,320</td>
											<td><span class="label" style="background:#002080"></span> <span class="label" style="background:#60C0F8"></span></td>
											<td>2007</td>
											<td>26.3</td>
										</tr>
										<tr>
											<td id="130851">Villa Espanola</td>
											<td><img src="modules/fmsdb/img/flags/s/URU.gif" alt="Uruguay">  URU</td>
											<td>First Division</td>
											<td>691</td>
											<td>Professional</td>
											<td>3,700</td>
											<td><span class="label" style="background:#E8E010"></span> <span class="label" style="background:#E00000"></span></td>
											<td>1952</td>
											<td>26.3</td>
										</tr>
										<tr>
											<td id="78012164">Villa Teresa</td>
											<td><img src="modules/fmsdb/img/flags/s/URU.gif" alt="Uruguay">  URU</td>
											<td>Second Division</td>
											<td>0</td>
											<td>Professional</td>
											<td>7,320</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#E00000"></span></td>
											<td>1942</td>
											<td>24.8</td>
										</tr>
										<tr>
											<td id="1926">Wanderers</td>
											<td><img src="modules/fmsdb/img/flags/s/URU.gif" alt="Uruguay">  URU</td>
											<td>First Division</td>
											<td>6K</td>
											<td>Professional</td>
											<td>9,064</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1902</td>
											<td>23.4</td>
										</tr>
										<tr>
											<td id="72047296">Atlanta United</td>
											<td><img src="modules/fmsdb/img/flags/s/USA.gif" alt="U.S.A.">  USA</td>
											<td>Lower Leagues</td>
											<td>1M</td>
											<td>Professional</td>
											<td>60,500</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
											<td>2017</td>
											<td>21.9</td>
										</tr>
										<tr>
											<td id="108893">Chicago</td>
											<td><img src="modules/fmsdb/img/flags/s/USA.gif" alt="U.S.A.">  USA</td>
											<td>MLS</td>
											<td>499K</td>
											<td>Professional</td>
											<td>20,000</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#B82848"></span></td>
											<td>1997</td>
											<td>25.4</td>
										</tr>
										<tr>
											<td id="1903">Colorado</td>
											<td><img src="modules/fmsdb/img/flags/s/USA.gif" alt="U.S.A.">  USA</td>
											<td>MLS</td>
											<td>307K</td>
											<td>Professional</td>
											<td>18,061</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#503040"></span></td>
											<td>1996</td>
											<td>26.4</td>
										</tr>
										<tr>
											<td id="1904">Columbus</td>
											<td><img src="modules/fmsdb/img/flags/s/USA.gif" alt="U.S.A.">  USA</td>
											<td>MLS</td>
											<td>576K</td>
											<td>Professional</td>
											<td>19,968</td>
											<td><span class="label" style="background:#F84010"></span> <span class="label" style="background:#000000"></span></td>
											<td>1996</td>
											<td>25.8</td>
										</tr>
										<tr>
											<td id="1913">D.C. United</td>
											<td><img src="modules/fmsdb/img/flags/s/USA.gif" alt="U.S.A.">  USA</td>
											<td>MLS</td>
											<td>692K</td>
											<td>Professional</td>
											<td>45,596</td>
											<td><span class="label" style="background:#E00000"></span> <span class="label" style="background:#000000"></span></td>
											<td>1996</td>
											<td>26.1</td>
										</tr>
										<tr>
											<td id="1905">FC Dallas</td>
											<td><img src="modules/fmsdb/img/flags/s/USA.gif" alt="U.S.A.">  USA</td>
											<td>MLS</td>
											<td>2M</td>
											<td>Professional</td>
											<td>15,000</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#B00000"></span></td>
											<td>1996</td>
											<td>25.3</td>
										</tr>
										<tr>
											<td id="72000112">Houston</td>
											<td><img src="modules/fmsdb/img/flags/s/USA.gif" alt="U.S.A.">  USA</td>
											<td>MLS</td>
											<td>999K</td>
											<td>Professional</td>
											<td>22,000</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#F8A030"></span></td>
											<td>2006</td>
											<td>26.1</td>
										</tr>
										<tr>
											<td id="1907">Los Angeles</td>
											<td><img src="modules/fmsdb/img/flags/s/USA.gif" alt="U.S.A.">  USA</td>
											<td>MLS</td>
											<td>3M</td>
											<td>Professional</td>
											<td>27,000</td>
											<td><span class="label" style="background:#C89048"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1996</td>
											<td>27.2</td>
										</tr>
										<tr>
											<td id="20030048">Minnesota</td>
											<td><img src="modules/fmsdb/img/flags/s/USA.gif" alt="U.S.A.">  USA</td>
											<td>Second Division</td>
											<td>0</td>
											<td>Professional</td>
											<td>12,000</td>
											<td><span class="label" style="background:#688898"></span> <span class="label" style="background:#303850"></span></td>
											<td>0</td>
											<td>27.8</td>
										</tr>
										<tr>
											<td id="1909">New England</td>
											<td><img src="modules/fmsdb/img/flags/s/USA.gif" alt="U.S.A.">  USA</td>
											<td>MLS</td>
											<td>384K</td>
											<td>Professional</td>
											<td>66,829</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#304058"></span></td>
											<td>1996</td>
											<td>26.0</td>
										</tr>
										<tr>
											<td id="72000160">New York</td>
											<td><img src="modules/fmsdb/img/flags/s/USA.gif" alt="U.S.A.">  USA</td>
											<td>MLS</td>
											<td>2M</td>
											<td>Professional</td>
											<td>25,000</td>
											<td><span class="label" style="background:#B00000"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1996</td>
											<td>25.9</td>
										</tr>
										<tr>
											<td id="72041885">NYCFC</td>
											<td><img src="modules/fmsdb/img/flags/s/USA.gif" alt="U.S.A.">  USA</td>
											<td>MLS</td>
											<td>5M</td>
											<td>Professional</td>
											<td>49,638</td>
											<td><span class="label" style="background:#002060"></span> <span class="label" style="background:#98D0F0"></span></td>
											<td>2015</td>
											<td>26.8</td>
										</tr>
										<tr>
											<td id="72014193">Orlando City</td>
											<td><img src="modules/fmsdb/img/flags/s/USA.gif" alt="U.S.A.">  USA</td>
											<td>MLS</td>
											<td>2M</td>
											<td>Professional</td>
											<td>60,700</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#5848A0"></span></td>
											<td>2010</td>
											<td>24.4</td>
										</tr>
										<tr>
											<td id="72019000">Philadelphia</td>
											<td><img src="modules/fmsdb/img/flags/s/USA.gif" alt="U.S.A.">  USA</td>
											<td>MLS</td>
											<td>231K</td>
											<td>Professional</td>
											<td>18,500</td>
											<td><span class="label" style="background:#988060"></span> <span class="label" style="background:#383840"></span></td>
											<td>2010</td>
											<td>25.6</td>
										</tr>
										<tr>
											<td id="975489">Portland</td>
											<td><img src="modules/fmsdb/img/flags/s/USA.gif" alt="U.S.A.">  USA</td>
											<td>MLS</td>
											<td>1M</td>
											<td>Professional</td>
											<td>22,000</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#405840"></span></td>
											<td>1975</td>
											<td>26.3</td>
										</tr>
										<tr>
											<td id="980543">Real Salt Lake</td>
											<td><img src="modules/fmsdb/img/flags/s/USA.gif" alt="U.S.A.">  USA</td>
											<td>MLS</td>
											<td>615K</td>
											<td>Professional</td>
											<td>20,213</td>
											<td><span class="label" style="background:#283868"></span> <span class="label" style="background:#C84058"></span></td>
											<td>2005</td>
											<td>26.2</td>
										</tr>
										<tr>
											<td id="1910">San Jose</td>
											<td><img src="modules/fmsdb/img/flags/s/USA.gif" alt="U.S.A.">  USA</td>
											<td>MLS</td>
											<td>461K</td>
											<td>Professional</td>
											<td>18,000</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#2850B0"></span></td>
											<td>1974</td>
											<td>27.1</td>
										</tr>
										<tr>
											<td id="72014006">Seattle</td>
											<td><img src="modules/fmsdb/img/flags/s/USA.gif" alt="U.S.A.">  USA</td>
											<td>MLS</td>
											<td>768K</td>
											<td>Professional</td>
											<td>68,000</td>
											<td><span class="label" style="background:#385890"></span> <span class="label" style="background:#80A858"></span></td>
											<td>2009</td>
											<td>27.0</td>
										</tr>
										<tr>
											<td id="72023746">Sporting Kansas City</td>
											<td><img src="modules/fmsdb/img/flags/s/USA.gif" alt="U.S.A.">  USA</td>
											<td>MLS</td>
											<td>999K</td>
											<td>Professional</td>
											<td>18,467</td>
											<td><span class="label" style="background:#183858"></span> <span class="label" style="background:#C0D8F0"></span></td>
											<td>1996</td>
											<td>26.5</td>
										</tr>
										<tr>
											<td id="1927">Aberystwyth</td>
											<td><img src="modules/fmsdb/img/flags/s/WAL.gif" alt="Wales">  WAL</td>
											<td>Welsh Premier League</td>
											<td>10K</td>
											<td>Semi-Professional</td>
											<td>2,502</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#108830"></span></td>
											<td>1884</td>
											<td>22.7</td>
										</tr>
										<tr>
											<td id="350949">Airbus UK</td>
											<td><img src="modules/fmsdb/img/flags/s/WAL.gif" alt="Wales">  WAL</td>
											<td>Welsh Premier League</td>
											<td>3K</td>
											<td>Semi-Professional</td>
											<td>1,600</td>
											<td><span class="label" style="background:#002060"></span> <span class="label" style="background:#0030A0"></span></td>
											<td>1946</td>
											<td>23.9</td>
										</tr>
										<tr>
											<td id="358409">Bala</td>
											<td><img src="modules/fmsdb/img/flags/s/WAL.gif" alt="Wales">  WAL</td>
											<td>Welsh Premier League</td>
											<td>45K</td>
											<td>Semi-Professional</td>
											<td>3,000</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#000000"></span></td>
											<td>1880</td>
											<td>27.9</td>
										</tr>
										<tr>
											<td id="1929">Bangor City</td>
											<td><img src="modules/fmsdb/img/flags/s/WAL.gif" alt="Wales">  WAL</td>
											<td>Welsh Premier League</td>
											<td>25K</td>
											<td>Semi-Professional</td>
											<td>3,400</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#0050D0"></span></td>
											<td>1893</td>
											<td>24.6</td>
										</tr>
										<tr>
											<td id="1938">Cardiff Met Uni</td>
											<td><img src="modules/fmsdb/img/flags/s/WAL.gif" alt="Wales">  WAL</td>
											<td>Welsh Premier League</td>
											<td>0</td>
											<td>Amateur</td>
											<td>2,000</td>
											<td><span class="label" style="background:#001040"></span> <span class="label" style="background:#901818"></span></td>
											<td>2000</td>
											<td>23.3</td>
										</tr>
										<tr>
											<td id="1301340">Carmarthen</td>
											<td><img src="modules/fmsdb/img/flags/s/WAL.gif" alt="Wales">  WAL</td>
											<td>Welsh Premier League</td>
											<td>3K</td>
											<td>Semi-Professional</td>
											<td>3,000</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#D8B028"></span></td>
											<td>1948</td>
											<td>25.8</td>
										</tr>
										<tr>
											<td id="350022">Cefn Druids</td>
											<td><img src="modules/fmsdb/img/flags/s/WAL.gif" alt="Wales">  WAL</td>
											<td>Welsh Premier League</td>
											<td>2K</td>
											<td>Semi-Professional</td>
											<td>3,000</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#000000"></span></td>
											<td>1872</td>
											<td>25.1</td>
										</tr>
										<tr>
											<td id="1932">Connah's Quay</td>
											<td><img src="modules/fmsdb/img/flags/s/WAL.gif" alt="Wales">  WAL</td>
											<td>Welsh Premier League</td>
											<td>50K</td>
											<td>Semi-Professional</td>
											<td>3,500</td>
											<td><span class="label" style="background:#B00000"></span> <span class="label" style="background:#E00000"></span></td>
											<td>1946</td>
											<td>27.2</td>
										</tr>
										<tr>
											<td id="350239">Llandudno</td>
											<td><img src="modules/fmsdb/img/flags/s/WAL.gif" alt="Wales">  WAL</td>
											<td>Welsh Premier League</td>
											<td>30K</td>
											<td>Semi-Professional</td>
											<td>2,000</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#000000"></span></td>
											<td>1921</td>
											<td>24.5</td>
										</tr>
										<tr>
											<td id="1943">Newtown</td>
											<td><img src="modules/fmsdb/img/flags/s/WAL.gif" alt="Wales">  WAL</td>
											<td>Welsh Premier League</td>
											<td>5K</td>
											<td>Semi-Professional</td>
											<td>3,372</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#E00000"></span></td>
											<td>1875</td>
											<td>26.6</td>
										</tr>
										<tr>
											<td id="1945">Rhyl</td>
											<td><img src="modules/fmsdb/img/flags/s/WAL.gif" alt="Wales">  WAL</td>
											<td>Welsh Premier League</td>
											<td>8K</td>
											<td>Semi-Professional</td>
											<td>3,000</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1883</td>
											<td>23.4</td>
										</tr>
										<tr>
											<td id="1940">TNS</td>
											<td><img src="modules/fmsdb/img/flags/s/WAL.gif" alt="Wales">  WAL</td>
											<td>Welsh Premier League</td>
											<td>55K</td>
											<td>Professional</td>
											<td>3,000</td>
											<td><span class="label" style="background:#F0F0F0"></span> <span class="label" style="background:#008030"></span></td>
											<td>1959</td>
											<td>25.9</td>
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
						//"iDisplayLength": -1,
						//"lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]],

					});

				/*	$('#FM td:first-child').each(function() {
						var id=$(this).attr('id');
						$('#'+id).after('<td>'+id+'</td>');
						console.log($(this).attr('id'));
					});*/  



				} );

				//upload_table('2017-08-22','man');
//https://chrome.google.com/webstore/detail/allow-control-allow-origi/nlfbmbojpeacfghkpbjhddihlkkiljbi?hl=es-419&utm_source=chrome-ntp-launcher
</script>
</html>
