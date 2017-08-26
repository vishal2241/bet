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
											<td class="coltop">Name</td>
											<!--<td class="coltop">ID</td>-->
											<td class="coltop">Nation</td>
											<td class="coltop">Division</td>
											<td class="coltop">Transfer Budget</td>
											<td class="coltop">Status</td>
											<td class="coltop">Stadium Capacity</td>
											<td class="coltop">Colors</td>
											<td class="coltop">Founded</td>
											<td class="coltop">Average Age</td>
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
											<td id="688">Newcastle</td>
											<td><img src="modules/fmsdb/img/flags/s/ENG.gif" alt="England">  ENG</td>
											<td>Sky Bet Championship</td>
											<td>5M</td>
											<td>Professional</td>
											<td>52,404</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#000000"></span></td>
											<td>1892</td>
											<td>25.3</td>
										</tr>
										<tr>
											<td id="581">Newport Co</td>
											<td><img src="modules/fmsdb/img/flags/s/ENG.gif" alt="England">  ENG</td>
											<td>Sky Bet League Two</td>
											<td>20K</td>
											<td>Professional</td>
											<td>11,676</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F8A800"></span></td>
											<td>1989</td>
											<td>24.0</td>
										</tr>
										<tr>
											<td id="689">Northampton</td>
											<td><img src="modules/fmsdb/img/flags/s/ENG.gif" alt="England">  ENG</td>
											<td>Sky Bet League One</td>
											<td>0</td>
											<td>Professional</td>
											<td>7,798</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#702030"></span></td>
											<td>1897</td>
											<td>26.2</td>
										</tr>
										<tr>
											<td id="691">Norwich</td>
											<td><img src="modules/fmsdb/img/flags/s/ENG.gif" alt="England">  ENG</td>
											<td>Sky Bet Championship</td>
											<td>10M</td>
											<td>Professional</td>
											<td>27,244</td>
											<td><span class="label" style="background:#007860"></span> <span class="label" style="background:#F8F838"></span></td>
											<td>1902</td>
											<td>27.7</td>
										</tr>
										<tr>
											<td id="692">Nottm Forest</td>
											<td><img src="modules/fmsdb/img/flags/s/ENG.gif" alt="England">  ENG</td>
											<td>Sky Bet Championship</td>
											<td>500K</td>
											<td>Professional</td>
											<td>30,576</td>
											<td><span class="label" style="background:#B02030"></span> <span class="label" style="background:#C01810"></span></td>
											<td>1865</td>
											<td>26.8</td>
										</tr>
										<tr>
											<td id="693">Notts Co</td>
											<td><img src="modules/fmsdb/img/flags/s/ENG.gif" alt="England">  ENG</td>
											<td>Sky Bet League Two</td>
											<td>75K</td>
											<td>Professional</td>
											<td>20,300</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#000000"></span></td>
											<td>1862</td>
											<td>26.7</td>
										</tr>
										<tr>
											<td id="94001831">Nuneaton</td>
											<td><img src="modules/fmsdb/img/flags/s/ENG.gif" alt="England">  ENG</td>
											<td>Vanarama North</td>
											<td>0</td>
											<td>Professional</td>
											<td>4,714</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#0030A0"></span></td>
											<td>2008</td>
											<td>21.1</td>
										</tr>
										<tr>
											<td id="694">Oldham</td>
											<td><img src="modules/fmsdb/img/flags/s/ENG.gif" alt="England">  ENG</td>
											<td>Sky Bet League One</td>
											<td>0</td>
											<td>Professional</td>
											<td>13,488</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#2850B0"></span></td>
											<td>1895</td>
											<td>24.5</td>
										</tr>
										<tr>
											<td id="695">Oxford</td>
											<td><img src="modules/fmsdb/img/flags/s/ENG.gif" alt="England">  ENG</td>
											<td>Sky Bet League One</td>
											<td>0</td>
											<td>Professional</td>
											<td>12,205</td>
											<td><span class="label" style="background:#202838"></span> <span class="label" style="background:#F8E020"></span></td>
											<td>1893</td>
											<td>24.0</td>
										</tr>
										<tr>
											<td id="696">Peterborough</td>
											<td><img src="modules/fmsdb/img/flags/s/ENG.gif" alt="England">  ENG</td>
											<td>Sky Bet League One</td>
											<td>400K</td>
											<td>Professional</td>
											<td>14,084</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#2850A0"></span></td>
											<td>1934</td>
											<td>23.0</td>
										</tr>
										<tr>
											<td id="697">Plymouth</td>
											<td><img src="modules/fmsdb/img/flags/s/ENG.gif" alt="England">  ENG</td>
											<td>Sky Bet League Two</td>
											<td>0</td>
											<td>Professional</td>
											<td>16,388</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
											<td>1886</td>
											<td>24.8</td>
										</tr>
										<tr>
											<td id="698">Port Vale</td>
											<td><img src="modules/fmsdb/img/flags/s/ENG.gif" alt="England">  ENG</td>
											<td>Sky Bet League One</td>
											<td>67K</td>
											<td>Professional</td>
											<td>19,148</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1876</td>
											<td>25.2</td>
										</tr>
										<tr>
											<td id="699">Portsmouth</td>
											<td><img src="modules/fmsdb/img/flags/s/ENG.gif" alt="England">  ENG</td>
											<td>Sky Bet League Two</td>
											<td>150K</td>
											<td>Professional</td>
											<td>18,931</td>
											<td><span class="label" style="background:#F0F0F0"></span> <span class="label" style="background:#003880"></span></td>
											<td>1898</td>
											<td>25.7</td>
										</tr>
										<tr>
											<td id="700">Preston</td>
											<td><img src="modules/fmsdb/img/flags/s/ENG.gif" alt="England">  ENG</td>
											<td>Sky Bet Championship</td>
											<td>500K</td>
											<td>Professional</td>
											<td>23,404</td>
											<td><span class="label" style="background:#082040"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1880</td>
											<td>26.6</td>
										</tr>
										<tr>
											<td id="701">QPR</td>
											<td><img src="modules/fmsdb/img/flags/s/ENG.gif" alt="England">  ENG</td>
											<td>Sky Bet Championship</td>
											<td>1M</td>
											<td>Professional</td>
											<td>18,224</td>
											<td><span class="label" style="background:#0028A8"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1882</td>
											<td>25.6</td>
										</tr>
										<tr>
											<td id="702">Reading</td>
											<td><img src="modules/fmsdb/img/flags/s/ENG.gif" alt="England">  ENG</td>
											<td>Sky Bet Championship</td>
											<td>3M</td>
											<td>Professional</td>
											<td>24,197</td>
											<td><span class="label" style="background:#104098"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1871</td>
											<td>25.3</td>
										</tr>
										<tr>
											<td id="703">Rochdale</td>
											<td><img src="modules/fmsdb/img/flags/s/ENG.gif" alt="England">  ENG</td>
											<td>Sky Bet League One</td>
											<td>40K</td>
											<td>Professional</td>
											<td>10,208</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
											<td>1907</td>
											<td>24.9</td>
										</tr>
										<tr>
											<td id="704">Rotherham</td>
											<td><img src="modules/fmsdb/img/flags/s/ENG.gif" alt="England">  ENG</td>
											<td>Sky Bet Championship</td>
											<td>250K</td>
											<td>Professional</td>
											<td>12,053</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#B00810"></span></td>
											<td>1884</td>
											<td>25.8</td>
										</tr>
										<tr>
											<td id="707">Scunthorpe</td>
											<td><img src="modules/fmsdb/img/flags/s/ENG.gif" alt="England">  ENG</td>
											<td>Sky Bet League One</td>
											<td>100K</td>
											<td>Professional</td>
											<td>9,144</td>
											<td><span class="label" style="background:#A01010"></span> <span class="label" style="background:#2080C0"></span></td>
											<td>1899</td>
											<td>24.7</td>
										</tr>
										<tr>
											<td id="708">Sheff Utd</td>
											<td><img src="modules/fmsdb/img/flags/s/ENG.gif" alt="England">  ENG</td>
											<td>Sky Bet League One</td>
											<td>300K</td>
											<td>Professional</td>
											<td>32,609</td>
											<td><span class="label" style="background:#A82030"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1889</td>
											<td>24.9</td>
										</tr>
										<tr>
											<td id="709">Sheff Wed</td>
											<td><img src="modules/fmsdb/img/flags/s/ENG.gif" alt="England">  ENG</td>
											<td>Sky Bet Championship</td>
											<td>2M</td>
											<td>Professional</td>
											<td>39,812</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#0030A0"></span></td>
											<td>1867</td>
											<td>27.0</td>
										</tr>
										<tr>
											<td id="710">Shrewsbury</td>
											<td><img src="modules/fmsdb/img/flags/s/ENG.gif" alt="England">  ENG</td>
											<td>Sky Bet League One</td>
											<td>20K</td>
											<td>Professional</td>
											<td>9,875</td>
											<td><span class="label" style="background:#F8B030"></span> <span class="label" style="background:#0058A8"></span></td>
											<td>1886</td>
											<td>26.0</td>
										</tr>
										<tr>
											<td id="713">Southampton</td>
											<td><img src="modules/fmsdb/img/flags/s/ENG.gif" alt="England">  ENG</td>
											<td>Premier Division</td>
											<td>31M</td>
											<td>Professional</td>
											<td>32,505</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#C80000"></span></td>
											<td>1885</td>
											<td>25.1</td>
										</tr>
										<tr>
											<td id="714">Southend</td>
											<td><img src="modules/fmsdb/img/flags/s/ENG.gif" alt="England">  ENG</td>
											<td>Sky Bet League One</td>
											<td>75K</td>
											<td>Professional</td>
											<td>12,163</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#081030"></span></td>
											<td>1906</td>
											<td>26.4</td>
										</tr>
										<tr>
											<td id="719">Stevenage</td>
											<td><img src="modules/fmsdb/img/flags/s/ENG.gif" alt="England">  ENG</td>
											<td>Sky Bet League Two</td>
											<td>10K</td>
											<td>Professional</td>
											<td>6,722</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
											<td>1976</td>
											<td>25.8</td>
										</tr>
										<tr>
											<td id="721">Stoke</td>
											<td><img src="modules/fmsdb/img/flags/s/ENG.gif" alt="England">  ENG</td>
											<td>Premier Division</td>
											<td>10M</td>
											<td>Professional</td>
											<td>28,384</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
											<td>1863</td>
											<td>27.0</td>
										</tr>
										<tr>
											<td id="722">Sunderland</td>
											<td><img src="modules/fmsdb/img/flags/s/ENG.gif" alt="England">  ENG</td>
											<td>Premier Division</td>
											<td>12M</td>
											<td>Professional</td>
											<td>48,707</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#C81018"></span></td>
											<td>1879</td>
											<td>25.9</td>
										</tr>
										<tr>
											<td id="723">Sutton Utd</td>
											<td><img src="modules/fmsdb/img/flags/s/ENG.gif" alt="England">  ENG</td>
											<td>Vanarama National</td>
											<td>5K</td>
											<td>Professional</td>
											<td>5,013</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
											<td>1898</td>
											<td>28.7</td>
										</tr>
										<tr>
											<td id="724">Swansea</td>
											<td><img src="modules/fmsdb/img/flags/s/ENG.gif" alt="England">  ENG</td>
											<td>Premier Division</td>
											<td>24M</td>
											<td>Professional</td>
											<td>20,750</td>
											<td><span class="label" style="background:#303030"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1912</td>
											<td>26.2</td>
										</tr>
										<tr>
											<td id="725">Swindon</td>
											<td><img src="modules/fmsdb/img/flags/s/ENG.gif" alt="England">  ENG</td>
											<td>Sky Bet League One</td>
											<td>150K</td>
											<td>Professional</td>
											<td>15,547</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#E00818"></span></td>
											<td>1879</td>
											<td>22.0</td>
										</tr>
										<tr>
											<td id="727">Torquay</td>
											<td><img src="modules/fmsdb/img/flags/s/ENG.gif" alt="England">  ENG</td>
											<td>Vanarama National</td>
											<td>0</td>
											<td>Professional</td>
											<td>6,200</td>
											<td><span class="label" style="background:#2068B0"></span> <span class="label" style="background:#F0E020"></span></td>
											<td>1899</td>
											<td>23.8</td>
										</tr>
										<tr>
											<td id="728">Tottenham</td>
											<td><img src="modules/fmsdb/img/flags/s/ENG.gif" alt="England">  ENG</td>
											<td>Premier Division</td>
											<td>50M</td>
											<td>Professional</td>
											<td>32,241</td>
											<td><span class="label" style="background:#001040"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1882</td>
											<td>23.8</td>
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
											<td id="6706369">Sestao</td>
											<td><img src="modules/fmsdb/img/flags/s/ESP.gif" alt="Spain">  ESP</td>
											<td>Second Division B2</td>
											<td>0</td>
											<td>Professional</td>
											<td>7,000</td>
											<td><span class="label" style="background:#209068"></span> <span class="label" style="background:#000000"></span></td>
											<td>1996</td>
											<td>24.5</td>
										</tr>
										<tr>
											<td id="1759">Sevilla</td>
											<td><img src="modules/fmsdb/img/flags/s/ESP.gif" alt="Spain">  ESP</td>
											<td>First Division</td>
											<td>3M</td>
											<td>Professional</td>
											<td>45,500</td>
											<td><span class="label" style="background:#E00808"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1890</td>
											<td>26.2</td>
										</tr>
										<tr>
											<td id="4202262">Sevilla B</td>
											<td><img src="modules/fmsdb/img/flags/s/ESP.gif" alt="Spain">  ESP</td>
											<td>Second Division</td>
											<td>0</td>
											<td>Professional</td>
											<td>5,100</td>
											<td><span class="label" style="background:#E00000"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1958</td>
											<td>20.0</td>
										</tr>
										<tr>
											<td id="814957">Socuellamos</td>
											<td><img src="modules/fmsdb/img/flags/s/ESP.gif" alt="Spain">  ESP</td>
											<td>Second Division B2</td>
											<td>6K</td>
											<td>Professional</td>
											<td>2,000</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#0050D0"></span></td>
											<td>1940</td>
											<td>27.3</td>
										</tr>
										<tr>
											<td id="4203006">Tarragona</td>
											<td><img src="modules/fmsdb/img/flags/s/ESP.gif" alt="Spain">  ESP</td>
											<td>Second Division</td>
											<td>0</td>
											<td>Professional</td>
											<td>16,600</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#E00000"></span></td>
											<td>1914</td>
											<td>26.2</td>
										</tr>
										<tr>
											<td id="1680">Tenerife</td>
											<td><img src="modules/fmsdb/img/flags/s/ESP.gif" alt="Spain">  ESP</td>
											<td>Second Division</td>
											<td>345K</td>
											<td>Professional</td>
											<td>23,660</td>
											<td><span class="label" style="background:#0078F8"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1922</td>
											<td>26.0</td>
										</tr>
										<tr>
											<td id="1671">Toledo</td>
											<td><img src="modules/fmsdb/img/flags/s/ESP.gif" alt="Spain">  ESP</td>
											<td>Second Division B2</td>
											<td>8K</td>
											<td>Professional</td>
											<td>5,500</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#106840"></span></td>
											<td>1928</td>
											<td>25.7</td>
										</tr>
										<tr>
											<td id="4212419">Tudelano</td>
											<td><img src="modules/fmsdb/img/flags/s/ESP.gif" alt="Spain">  ESP</td>
											<td>Second Division B1</td>
											<td>0</td>
											<td>Professional</td>
											<td>11,000</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1935</td>
											<td>28.0</td>
										</tr>
										<tr>
											<td id="67152828">U. Murcia</td>
											<td><img src="modules/fmsdb/img/flags/s/ESP.gif" alt="Spain">  ESP</td>
											<td>Second Division</td>
											<td>12K</td>
											<td>Professional</td>
											<td>16,823</td>
											<td><span class="label" style="background:#D8B028"></span> <span class="label" style="background:#002060"></span></td>
											<td>1999</td>
											<td>28.2</td>
										</tr>
										<tr>
											<td id="1775">Valencia</td>
											<td><img src="modules/fmsdb/img/flags/s/ESP.gif" alt="Spain">  ESP</td>
											<td>First Division</td>
											<td>13M</td>
											<td>Professional</td>
											<td>55,000</td>
											<td><span class="label" style="background:#E87800"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1919</td>
											<td>25.0</td>
										</tr>
										<tr>
											<td id="1776">Valencia B</td>
											<td><img src="modules/fmsdb/img/flags/s/ESP.gif" alt="Spain">  ESP</td>
											<td>Second Division B3</td>
											<td>0</td>
											<td>Professional</td>
											<td>4,000</td>
											<td><span class="label" style="background:#E87800"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1919</td>
											<td>20.0</td>
										</tr>
										<tr>
											<td id="1747">Valladolid</td>
											<td><img src="modules/fmsdb/img/flags/s/ESP.gif" alt="Spain">  ESP</td>
											<td>Second Division</td>
											<td>0</td>
											<td>Professional</td>
											<td>26,512</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
											<td>1928</td>
											<td>25.4</td>
										</tr>
										<tr>
											<td id="4200575">Valladolid B</td>
											<td><img src="modules/fmsdb/img/flags/s/ESP.gif" alt="Spain">  ESP</td>
											<td>Second Division B1</td>
											<td>0</td>
											<td>Professional</td>
											<td>500</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
											<td>1972</td>
											<td>20.3</td>
										</tr>
										<tr>
											<td id="1729">Vallecano</td>
											<td><img src="modules/fmsdb/img/flags/s/ESP.gif" alt="Spain">  ESP</td>
											<td>Second Division</td>
											<td>0</td>
											<td>Professional</td>
											<td>14,708</td>
											<td><span class="label" style="background:#E00000"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1924</td>
											<td>28.4</td>
										</tr>
										<tr>
											<td id="1724">Vigo</td>
											<td><img src="modules/fmsdb/img/flags/s/ESP.gif" alt="Spain">  ESP</td>
											<td>First Division</td>
											<td>3M</td>
											<td>Professional</td>
											<td>31,800</td>
											<td><span class="label" style="background:#5078D8"></span> <span class="label" style="background:#98B8D0"></span></td>
											<td>1923</td>
											<td>25.2</td>
										</tr>
										<tr>
											<td id="2092">Vigo B</td>
											<td><img src="modules/fmsdb/img/flags/s/ESP.gif" alt="Spain">  ESP</td>
											<td>Second Division B1</td>
											<td>0</td>
											<td>Professional</td>
											<td>4,500</td>
											<td><span class="label" style="background:#5078D8"></span> <span class="label" style="background:#98B8D8"></span></td>
											<td>1989</td>
											<td>20.2</td>
										</tr>
										<tr>
											<td id="6706364">Villanovense</td>
											<td><img src="modules/fmsdb/img/flags/s/ESP.gif" alt="Spain">  ESP</td>
											<td>Second Division B4</td>
											<td>0</td>
											<td>Professional</td>
											<td>5,000</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#48A068"></span></td>
											<td>1992</td>
											<td>26.0</td>
										</tr>
										<tr>
											<td id="1777">Villarreal</td>
											<td><img src="modules/fmsdb/img/flags/s/ESP.gif" alt="Spain">  ESP</td>
											<td>First Division</td>
											<td>3M</td>
											<td>Professional</td>
											<td>25,000</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F8E818"></span></td>
											<td>1923</td>
											<td>26.1</td>
										</tr>
										<tr>
											<td id="7452072">Villarreal B</td>
											<td><img src="modules/fmsdb/img/flags/s/ESP.gif" alt="Spain">  ESP</td>
											<td>Second Division B3</td>
											<td>7K</td>
											<td>Professional</td>
											<td>1,500</td>
											<td><span class="label" style="background:#F8F000"></span> <span class="label" style="background:#F8F000"></span></td>
											<td>1999</td>
											<td>21.0</td>
										</tr>
										<tr>
											<td id="1749">Zaragoza</td>
											<td><img src="modules/fmsdb/img/flags/s/ESP.gif" alt="Spain">  ESP</td>
											<td>Second Division</td>
											<td>0</td>
											<td>Professional</td>
											<td>34,700</td>
											<td><span class="label" style="background:#E8E8E8"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1932</td>
											<td>25.8</td>
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
