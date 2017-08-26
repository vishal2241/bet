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
