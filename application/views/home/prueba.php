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
											<td class="coltop">ID</td>
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
										
										

									<tr role="row" class="odd">
											<td id="1099" class="sorting_1">A.C. Milan</td><td>1099</td>
											<td><img src="./Bet_files/ITA.gif" alt="Italy">  ITA</td>
											<td>Serie A</td>
											<td>5M</td>
											<td>Professional</td>
											<td>80,018</td>
											<td><span class="label" style="background:#C81018"></span> <span class="label" style="background:#101010"></span></td>
											<td>1899</td>
											<td>26.0</td>
										</tr><tr role="row" class="even">
											<td id="168" class="sorting_1">AA Gent</td><td>168</td>
											<td><img src="./Bet_files/BEL.gif" alt="Belgium">  BEL</td>
											<td>Pro League</td>
											<td>4M</td>
											<td>Professional</td>
											<td>20,000</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#4890B8"></span></td>
											<td>1900</td>
											<td>25.4</td>
										</tr><tr role="row" class="odd">
											<td id="483" class="sorting_1">AaB</td><td>483</td>
											<td><img src="./Bet_files/DEN.gif" alt="Denmark">  DEN</td>
											<td>Superliga</td>
											<td>463K</td>
											<td>Professional</td>
											<td>13,800</td>
											<td><span class="label" style="background:#E00000"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1885</td>
											<td>23.4</td>
										</tr><tr role="row" class="even">
											<td id="1289" class="sorting_1">Aalesund</td><td>1289</td>
											<td><img src="./Bet_files/NOR.gif" alt="Norway">  NOR</td>
											<td>Premier Division</td>
											<td>142K</td>
											<td>Professional</td>
											<td>10,778</td>
											<td><span class="label" style="background:#0050D0"></span> <span class="label" style="background:#F87000"></span></td>
											<td>1914</td>
											<td>23.7</td>
										</tr><tr role="row" class="odd">
											<td id="1536" class="sorting_1">Aberdeen</td><td>1536</td>
											<td><img src="./Bet_files/SCO.gif" alt="Scotland">  SCO</td>
											<td>Ladbrokes Premiership</td>
											<td>200K</td>
											<td>Professional</td>
											<td>20,866</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#C81018"></span></td>
											<td>1903</td>
											<td>23.6</td>
										</tr><tr role="row" class="even">
											<td id="481" class="sorting_1">AC Horsens</td><td>481</td>
											<td><img src="./Bet_files/DEN.gif" alt="Denmark">  DEN</td>
											<td>Superliga</td>
											<td>173K</td>
											<td>Professional</td>
											<td>10,495</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F8D000"></span></td>
											<td>1915</td>
											<td>24.9</td>
										</tr><tr role="row" class="odd">
											<td id="986" class="sorting_1">ADO Den Haag</td><td>986</td>
											<td><img src="./Bet_files/NED.gif" alt="Holland">  NED</td>
											<td>Eredivisie</td>
											<td>258K</td>
											<td>Professional</td>
											<td>15,000</td>
											<td><span class="label" style="background:#F8C800"></span> <span class="label" style="background:#187038"></span></td>
											<td>1905</td>
											<td>24.5</td>
										</tr><tr role="row" class="even">
											<td id="967" class="sorting_1">AEK</td><td>967</td>
											<td><img src="./Bet_files/GRE.gif" alt="Greece">  GRE</td>
											<td>Superleague</td>
											<td>258K</td>
											<td>Professional</td>
											<td>69,618</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
											<td>1924</td>
											<td>25.1</td>
										</tr><tr role="row" class="odd">
											<td id="482" class="sorting_1">AGF</td><td>482</td>
											<td><img src="./Bet_files/DEN.gif" alt="Denmark">  DEN</td>
											<td>Superliga</td>
											<td>116K</td>
											<td>Professional</td>
											<td>20,200</td>
											<td><span class="label" style="background:#083078"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1880</td>
											<td>24.3</td>
										</tr><tr role="row" class="even">
											<td id="824" class="sorting_1">AJ Auxerre</td><td>824</td>
											<td><img src="./Bet_files/FRA.gif" alt="France">  FRA</td>
											<td>Domino's Ligue 2</td>
											<td>4M</td>
											<td>Professional</td>
											<td>21,379</td>
											<td><span class="label" style="background:#E0E0E0"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1905</td>
											<td>22.9</td>
										</tr><tr role="row" class="odd">
											<td id="992" class="sorting_1">Ajax</td><td>992</td>
											<td><img src="./Bet_files/NED.gif" alt="Holland">  NED</td>
											<td>Eredivisie</td>
											<td>4M</td>
											<td>Professional</td>
											<td>53,346</td>
											<td><span class="label" style="background:#B02830"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1900</td>
											<td>23.0</td>
										</tr><tr role="row" class="even">
											<td id="1535" class="sorting_1">Al-Shabab (KSA)</td><td>1535</td>
											<td><img src="./Bet_files/KSA.gif" alt="Saudi Arabia">  KSA</td>
											<td>Pro League</td>
											<td>5M</td>
											<td>Professional</td>
											<td>67,000</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#000000"></span></td>
											<td>1948</td>
											<td>25.3</td>
										</tr><tr role="row" class="odd">
											<td id="1142" class="sorting_1">AlbinoLeffe</td><td>1142</td>
											<td><img src="./Bet_files/ITA.gif" alt="Italy">  ITA</td>
											<td>Serie C/B</td>
											<td>60K</td>
											<td>Professional</td>
											<td>26,562</td>
											<td><span class="label" style="background:#002060"></span> <span class="label" style="background:#B8D8E8"></span></td>
											<td>1998</td>
											<td>23.9</td>
										</tr><tr role="row" class="even">
											<td id="573" class="sorting_1">Aldershot</td><td>573</td>
											<td><img src="./Bet_files/ENG.gif" alt="England">  ENG</td>
											<td>Vanarama National</td>
											<td>0</td>
											<td>Professional</td>
											<td>7,350</td>
											<td><span class="label" style="background:#2050B0"></span> <span class="label" style="background:#B80020"></span></td>
											<td>1992</td>
											<td>23.4</td>
										</tr><tr role="row" class="odd">
											<td id="1102" class="sorting_1">Alessandria</td><td>1102</td>
											<td><img src="./Bet_files/ITA.gif" alt="Italy">  ITA</td>
											<td>Serie C/A</td>
											<td>517K</td>
											<td>Professional</td>
											<td>5,827</td>
											<td><span class="label" style="background:#404040"></span> <span class="label" style="background:#B0B0B0"></span></td>
											<td>1912</td>
											<td>25.0</td>
										</tr><tr role="row" class="even">
											<td id="1253" class="sorting_1">America (MEX)</td><td>1253</td>
											<td><img src="./Bet_files/MEX.gif" alt="Mexico">  MEX</td>
											<td>First Division</td>
											<td>6M</td>
											<td>Professional</td>
											<td>87,000</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#E8E060"></span></td>
											<td>1916</td>
											<td>25.6</td>
										</tr><tr role="row" class="odd">
											<td id="417" class="sorting_1">America de Cali</td><td>417</td>
											<td><img src="./Bet_files/COL.gif" alt="Colombia">  COL</td>
											<td>Second Division</td>
											<td>538K</td>
											<td>Professional</td>
											<td>38,648</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#E00000"></span></td>
											<td>1927</td>
											<td>28.6</td>
										</tr><tr role="row" class="even">
											<td id="831" class="sorting_1">Amiens SC</td><td>831</td>
											<td><img src="./Bet_files/FRA.gif" alt="France">  FRA</td>
											<td>Domino's Ligue 2</td>
											<td>0</td>
											<td>Professional</td>
											<td>12,097</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1901</td>
											<td>26.2</td>
										</tr><tr role="row" class="odd">
											<td id="1104" class="sorting_1">Ancona</td><td>1104</td>
											<td><img src="./Bet_files/ITA.gif" alt="Italy">  ITA</td>
											<td>Serie C/B</td>
											<td>129K</td>
											<td>Professional</td>
											<td>23,976</td>
											<td><span class="label" style="background:#F83030"></span> <span class="label" style="background:#C80030"></span></td>
											<td>1948</td>
											<td>23.2</td>
										</tr><tr role="row" class="even">
											<td id="256" class="sorting_1">Anderlecht</td><td>256</td>
											<td><img src="./Bet_files/BEL.gif" alt="Belgium">  BEL</td>
											<td>Pro League</td>
											<td>4M</td>
											<td>Professional</td>
											<td>21,500</td>
											<td><span class="label" style="background:#A8A8F8"></span> <span class="label" style="background:#4040A0"></span></td>
											<td>1908</td>
											<td>24.3</td>
										</tr><tr role="row" class="odd">
											<td id="875" class="sorting_1">Angers SCO</td><td>875</td>
											<td><img src="./Bet_files/FRA.gif" alt="France">  FRA</td>
											<td>Ligue 1</td>
											<td>861K</td>
											<td>Professional</td>
											<td>17,061</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#000000"></span></td>
											<td>1919</td>
											<td>26.5</td>
										</tr><tr role="row" class="even">
											<td id="262" class="sorting_1">Antwerp</td><td>262</td>
											<td><img src="./Bet_files/BEL.gif" alt="Belgium">  BEL</td>
											<td>Pro League B</td>
											<td>0</td>
											<td>Professional</td>
											<td>13,373</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#E00000"></span></td>
											<td>1880</td>
											<td>26.3</td>
										</tr><tr role="row" class="odd">
											<td id="968" class="sorting_1">Apollon</td><td>968</td>
											<td><img src="./Bet_files/GRE.gif" alt="Greece">  GRE</td>
											<td>B Division</td>
											<td>0</td>
											<td>Professional</td>
											<td>14,856</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
											<td>1891</td>
											<td>26.2</td>
										</tr><tr role="row" class="even">
											<td id="969" class="sorting_1">Aris</td><td>969</td>
											<td><img src="./Bet_files/GRE.gif" alt="Greece">  GRE</td>
											<td>B Division</td>
											<td>0</td>
											<td>Professional</td>
											<td>22,574</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F8F000"></span></td>
											<td>1914</td>
											<td>27.1</td>
										</tr><tr role="row" class="odd">
											<td id="602" class="sorting_1">Arsenal</td><td>602</td>
											<td><img src="./Bet_files/ENG.gif" alt="England">  ENG</td>
											<td>Premier Division</td>
											<td>39M</td>
											<td>Professional</td>
											<td>60,432</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#F02010"></span></td>
											<td>1886</td>
											<td>26.1</td>
										</tr><tr role="row" class="even">
											<td id="826" class="sorting_1">AS Monaco</td><td>826</td>
											<td><img src="./Bet_files/FRA.gif" alt="France">  FRA</td>
											<td>Ligue 1</td>
											<td>22M</td>
											<td>Professional</td>
											<td>18,521</td>
											<td><span class="label" style="background:#E00000"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1924</td>
											<td>24.3</td>
										</tr><tr role="row" class="odd">
											<td id="827" class="sorting_1">AS Nancy Lorraine</td><td>827</td>
											<td><img src="./Bet_files/FRA.gif" alt="France">  FRA</td>
											<td>Ligue 1</td>
											<td>1M</td>
											<td>Professional</td>
											<td>20,087</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
											<td>1967</td>
											<td>27.1</td>
										</tr><tr role="row" class="even">
											<td id="828" class="sorting_1">AS Saint-Etienne</td><td>828</td>
											<td><img src="./Bet_files/FRA.gif" alt="France">  FRA</td>
											<td>Ligue 1</td>
											<td>861K</td>
											<td>Professional</td>
											<td>41,965</td>
											<td><span class="label" style="background:#00A840"></span> <span class="label" style="background:#58C870"></span></td>
											<td>1933</td>
											<td>26.2</td>
										</tr><tr role="row" class="odd">
											<td id="1105" class="sorting_1">Ascoli</td><td>1105</td>
											<td><img src="./Bet_files/ITA.gif" alt="Italy">  ITA</td>
											<td>Serie B</td>
											<td>258K</td>
											<td>Professional</td>
											<td>20,550</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
											<td>1898</td>
											<td>24.2</td>
										</tr><tr role="row" class="even">
											<td id="603" class="sorting_1">Aston Villa</td><td>603</td>
											<td><img src="./Bet_files/ENG.gif" alt="England">  ENG</td>
											<td>Sky Bet Championship</td>
											<td>0</td>
											<td>Professional</td>
											<td>42,785</td>
											<td><span class="label" style="background:#98D0F0"></span> <span class="label" style="background:#882840"></span></td>
											<td>1874</td>
											<td>26.3</td>
										</tr><tr role="row" class="odd">
											<td id="1106" class="sorting_1">Atalanta</td><td>1106</td>
											<td><img src="./Bet_files/ITA.gif" alt="Italy">  ITA</td>
											<td>Serie A</td>
											<td>3M</td>
											<td>Professional</td>
											<td>26,562</td>
											<td><span class="label" style="background:#2850A0"></span> <span class="label" style="background:#081030"></span></td>
											<td>1907</td>
											<td>26.5</td>
										</tr><tr role="row" class="even">
											<td id="427" class="sorting_1">Atletico Nacional</td><td>427</td>
											<td><img src="./Bet_files/COL.gif" alt="Colombia">  COL</td>
											<td>First Division</td>
											<td>4M</td>
											<td>Professional</td>
											<td>48,700</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#00A030"></span></td>
											<td>1951</td>
											<td>27.2</td>
										</tr><tr role="row" class="odd">
											<td id="314" class="sorting_1">ATM</td><td>314</td>
											<td><img src="./Bet_files/BRA.gif" alt="Brazil">  BRA</td>
											<td>First Division</td>
											<td>2M</td>
											<td>Professional</td>
											<td>23,018</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#C80000"></span></td>
											<td>1908</td>
											<td>27.1</td>
										</tr><tr role="row" class="even">
											<td id="1108" class="sorting_1">Avellino</td><td>1108</td>
											<td><img src="./Bet_files/ITA.gif" alt="Italy">  ITA</td>
											<td>Serie B</td>
											<td>517K</td>
											<td>Professional</td>
											<td>26,000</td>
											<td><span class="label" style="background:#009848"></span> <span class="label" style="background:#006030"></span></td>
											<td>1912</td>
											<td>24.3</td>
										</tr><tr role="row" class="odd">
											<td id="1472" class="sorting_1">Aves</td><td>1472</td>
											<td><img src="./Bet_files/POR.gif" alt="Portugal">  POR</td>
											<td>Second League</td>
											<td>65K</td>
											<td>Professional</td>
											<td>5,441</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
											<td>1930</td>
											<td>26.5</td>
										</tr><tr role="row" class="even">
											<td id="1542" class="sorting_1">Ayr</td><td>1542</td>
											<td><img src="./Bet_files/SCO.gif" alt="Scotland">  SCO</td>
											<td>Ladbrokes Championship</td>
											<td>8K</td>
											<td>Professional</td>
											<td>10,185</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
											<td>1910</td>
											<td>23.6</td>
										</tr><tr role="row" class="odd">
											<td id="991" class="sorting_1">AZ</td><td>991</td>
											<td><img src="./Bet_files/NED.gif" alt="Holland">  NED</td>
											<td>Eredivisie</td>
											<td>646K</td>
											<td>Professional</td>
											<td>17,023</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#D83038"></span></td>
											<td>1967</td>
											<td>23.5</td>
										</tr><tr role="row" class="even">
											<td id="315" class="sorting_1">BAH</td><td>315</td>
											<td><img src="./Bet_files/BRA.gif" alt="Brazil">  BRA</td>
											<td>Second Division</td>
											<td>713K</td>
											<td>Professional</td>
											<td>50,443</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#B00000"></span></td>
											<td>1931</td>
											<td>25.8</td>
										</tr><tr role="row" class="odd">
											<td id="80" class="sorting_1">Banfield</td><td>80</td>
											<td><img src="./Bet_files/ARG.gif" alt="Argentina">  ARG</td>
											<td>Premier Division</td>
											<td>324K</td>
											<td>Professional</td>
											<td>34,901</td>
											<td><span class="label" style="background:#008030"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1896</td>
											<td>26.5</td>
										</tr><tr role="row" class="even">
											<td id="1110" class="sorting_1">Bari</td><td>1110</td>
											<td><img src="./Bet_files/ITA.gif" alt="Italy">  ITA</td>
											<td>Serie B</td>
											<td>861K</td>
											<td>Professional</td>
											<td>58,270</td>
											<td><span class="label" style="background:#E00000"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1908</td>
											<td>26.0</td>
										</tr><tr role="row" class="odd">
											<td id="605" class="sorting_1">Barnet</td><td>605</td>
											<td><img src="./Bet_files/ENG.gif" alt="England">  ENG</td>
											<td>Sky Bet League Two</td>
											<td>10K</td>
											<td>Professional</td>
											<td>5,233</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
											<td>1888</td>
											<td>25.5</td>
										</tr><tr role="row" class="even">
											<td id="606" class="sorting_1">Barnsley</td><td>606</td>
											<td><img src="./Bet_files/ENG.gif" alt="England">  ENG</td>
											<td>Sky Bet Championship</td>
											<td>1M</td>
											<td>Professional</td>
											<td>23,287</td>
											<td><span class="label" style="background:#B00810"></span> <span class="label" style="background:#B00810"></span></td>
											<td>1887</td>
											<td>22.6</td>
										</tr><tr role="row" class="odd">
											<td id="607" class="sorting_1">Barrow</td><td>607</td>
											<td><img src="./Bet_files/ENG.gif" alt="England">  ENG</td>
											<td>Vanarama National</td>
											<td>20K</td>
											<td>Professional</td>
											<td>4,416</td>
											<td><span class="label" style="background:#002090"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1901</td>
											<td>23.7</td>
										</tr><tr role="row" class="even">
											<td id="915" class="sorting_1">Bayern</td><td>915</td>
											<td><img src="./Bet_files/GER.gif" alt="Germany">  GER</td>
											<td>First Division</td>
											<td>34M</td>
											<td>Professional</td>
											<td>75,024</td>
											<td><span class="label" style="background:#B00000"></span> <span class="label" style="background:#E00000"></span></td>
											<td>1900</td>
											<td>26.0</td>
										</tr><tr role="row" class="odd">
											<td id="406" class="sorting_1">Beijing</td><td>406</td>
											<td><img src="./Bet_files/CHN.gif" alt="China">  CHN</td>
											<td>Super League</td>
											<td>6M</td>
											<td>Professional</td>
											<td>66,161</td>
											<td><span class="label" style="background:#106838"></span> <span class="label" style="background:#00A030"></span></td>
											<td>1992</td>
											<td>27.7</td>
										</tr><tr role="row" class="even">
											<td id="1083" class="sorting_1">Beitar Jerusalem</td><td>1083</td>
											<td><img src="./Bet_files/ISR.gif" alt="Israel">  ISR</td>
											<td>Premier League</td>
											<td>205K</td>
											<td>Professional</td>
											<td>34,000</td>
											<td><span class="label" style="background:#F8F838"></span> <span class="label" style="background:#F8F000"></span></td>
											<td>1936</td>
											<td>24.3</td>
										</tr><tr role="row" class="odd">
											<td id="1050" class="sorting_1">Bekescsaba</td><td>1050</td>
											<td><img src="./Bet_files/HUN.gif" alt="Hungary">  HUN</td>
											<td>Division II</td>
											<td>0</td>
											<td>Professional</td>
											<td>10,432</td>
											<td><span class="label" style="background:#501080"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1912</td>
											<td>26.6</td>
										</tr><tr role="row" class="even">
											<td id="1474" class="sorting_1">Belenenses</td><td>1474</td>
											<td><img src="./Bet_files/POR.gif" alt="Portugal">  POR</td>
											<td>Premier League</td>
											<td>129K</td>
											<td>Professional</td>
											<td>19,856</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#0030A0"></span></td>
											<td>1919</td>
											<td>23.8</td>
										</tr><tr role="row" class="odd">
											<td id="81" class="sorting_1">Belgrano</td><td>81</td>
											<td><img src="./Bet_files/ARG.gif" alt="Argentina">  ARG</td>
											<td>Premier Division</td>
											<td>14K</td>
											<td>Professional</td>
											<td>46,083</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#20B0F0"></span></td>
											<td>1905</td>
											<td>28.4</td>
										</tr><tr role="row" class="even">
											<td id="341" class="sorting_1">Beroe</td><td>341</td>
											<td><img src="./Bet_files/BUL.gif" alt="Bulgaria">  BUL</td>
											<td>First League</td>
											<td>88K</td>
											<td>Professional</td>
											<td>13,500</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
											<td>1959</td>
											<td>25.8</td>
										</tr><tr role="row" class="odd">
											<td id="904" class="sorting_1">Bielefeld</td><td>904</td>
											<td><img src="./Bet_files/GER.gif" alt="Germany">  GER</td>
											<td>Second Division</td>
											<td>43K</td>
											<td>Professional</td>
											<td>26,137</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#0050D0"></span></td>
											<td>1905</td>
											<td>26.3</td>
										</tr><tr role="row" class="even">
											<td id="609" class="sorting_1">Birmingham</td><td>609</td>
											<td><img src="./Bet_files/ENG.gif" alt="England">  ENG</td>
											<td>Sky Bet Championship</td>
											<td>500K</td>
											<td>Professional</td>
											<td>30,016</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#304078"></span></td>
											<td>1875</td>
											<td>26.9</td>
										</tr><tr role="row" class="odd">
											<td id="612" class="sorting_1">Blackburn</td><td>612</td>
											<td><img src="./Bet_files/ENG.gif" alt="England">  ENG</td>
											<td>Sky Bet Championship</td>
											<td>300K</td>
											<td>Professional</td>
											<td>31,154</td>
											<td><span class="label" style="background:#0030A8"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1875</td>
											<td>25.8</td>
										</tr><tr role="row" class="even">
											<td id="613" class="sorting_1">Blackpool</td><td>613</td>
											<td><img src="./Bet_files/ENG.gif" alt="England">  ENG</td>
											<td>Sky Bet League Two</td>
											<td>50K</td>
											<td>Professional</td>
											<td>17,338</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#F08000"></span></td>
											<td>1887</td>
											<td>25.0</td>
										</tr><tr role="row" class="odd">
											<td id="908" class="sorting_1">BMG</td><td>908</td>
											<td><img src="./Bet_files/GER.gif" alt="Germany">  GER</td>
											<td>First Division</td>
											<td>10M</td>
											<td>Professional</td>
											<td>54,010</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1900</td>
											<td>24.6</td>
										</tr><tr role="row" class="even">
											<td id="1082" class="sorting_1">Bnei Yehuda</td><td>1082</td>
											<td><img src="./Bet_files/ISR.gif" alt="Israel">  ISR</td>
											<td>Premier League</td>
											<td>26K</td>
											<td>Professional</td>
											<td>11,500</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F08000"></span></td>
											<td>1935</td>
											<td>23.1</td>
										</tr><tr role="row" class="odd">
											<td id="1471" class="sorting_1">Boavista</td><td>1471</td>
											<td><img src="./Bet_files/POR.gif" alt="Portugal">  POR</td>
											<td>Premier League</td>
											<td>108K</td>
											<td>Professional</td>
											<td>30,000</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
											<td>1903</td>
											<td>24.1</td>
										</tr><tr role="row" class="even">
											<td id="82" class="sorting_1">Boca</td><td>82</td>
											<td><img src="./Bet_files/ARG.gif" alt="Argentina">  ARG</td>
											<td>Premier Division</td>
											<td>77K</td>
											<td>Professional</td>
											<td>49,000</td>
											<td><span class="label" style="background:#F8D000"></span> <span class="label" style="background:#0030A0"></span></td>
											<td>1905</td>
											<td>24.8</td>
										</tr><tr role="row" class="odd">
											<td id="905" class="sorting_1">Bochum</td><td>905</td>
											<td><img src="./Bet_files/GER.gif" alt="Germany">  GER</td>
											<td>Second Division</td>
											<td>258K</td>
											<td>Professional</td>
											<td>29,299</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#0050D0"></span></td>
											<td>1938</td>
											<td>23.9</td>
										</tr><tr role="row" class="even">
											<td id="1293" class="sorting_1">Bodo/Glimt</td><td>1293</td>
											<td><img src="./Bet_files/NOR.gif" alt="Norway">  NOR</td>
											<td>Premier Division</td>
											<td>95K</td>
											<td>Professional</td>
											<td>7,127</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F8D858"></span></td>
											<td>1916</td>
											<td>23.7</td>
										</tr><tr role="row" class="odd">
											<td id="463" class="sorting_1">Bohemians 1905</td><td>463</td>
											<td><img src="./Bet_files/CZE.gif" alt="Czech Republic">  CZE</td>
											<td>First Division</td>
											<td>239K</td>
											<td>Professional</td>
											<td>5,000</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#006030"></span></td>
											<td>1905</td>
											<td>26.0</td>
										</tr><tr role="row" class="even">
											<td id="1111" class="sorting_1">Bologna</td><td>1111</td>
											<td><img src="./Bet_files/ITA.gif" alt="Italy">  ITA</td>
											<td>Serie A</td>
											<td>3M</td>
											<td>Professional</td>
											<td>36,462</td>
											<td><span class="label" style="background:#E00000"></span> <span class="label" style="background:#083078"></span></td>
											<td>1909</td>
											<td>25.5</td>
										</tr><tr role="row" class="odd">
											<td id="614" class="sorting_1">Bolton</td><td>614</td>
											<td><img src="./Bet_files/ENG.gif" alt="England">  ENG</td>
											<td>Sky Bet League One</td>
											<td>0</td>
											<td>Professional</td>
											<td>28,723</td>
											<td><span class="label" style="background:#283868"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1874</td>
											<td>26.0</td>
										</tr><tr role="row" class="even">
											<td id="316" class="sorting_1">BOT</td><td>316</td>
											<td><img src="./Bet_files/BRA.gif" alt="Brazil">  BRA</td>
											<td>First Division</td>
											<td>119K</td>
											<td>Professional</td>
											<td>44,461</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#E00000"></span></td>
											<td>1904</td>
											<td>26.4</td>
										</tr><tr role="row" class="odd">
											<td id="600" class="sorting_1">Bournemouth</td><td>600</td>
											<td><img src="./Bet_files/ENG.gif" alt="England">  ENG</td>
											<td>Premier Division</td>
											<td>4M</td>
											<td>Professional</td>
											<td>11,464</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#E82010"></span></td>
											<td>1899</td>
											<td>26.0</td>
										</tr><tr role="row" class="even">
											<td id="317" class="sorting_1">BRA</td><td>317</td>
											<td><img src="./Bet_files/BRA.gif" alt="Brazil">  BRA</td>
											<td>Second Division</td>
											<td>12K</td>
											<td>Professional</td>
											<td>16,119</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#C80000"></span></td>
											<td>1928</td>
											<td>27.0</td>
										</tr><tr role="row" class="odd">
											<td id="616" class="sorting_1">Bradford City</td><td>616</td>
											<td><img src="./Bet_files/ENG.gif" alt="England">  ENG</td>
											<td>Sky Bet League One</td>
											<td>50K</td>
											<td>Professional</td>
											<td>25,136</td>
											<td><span class="label" style="background:#F8A800"></span> <span class="label" style="background:#780818"></span></td>
											<td>1903</td>
											<td>26.4</td>
										</tr><tr role="row" class="even">
											<td id="1488" class="sorting_1">Braga</td><td>1488</td>
											<td><img src="./Bet_files/POR.gif" alt="Portugal">  POR</td>
											<td>Premier League</td>
											<td>3M</td>
											<td>Professional</td>
											<td>30,286</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#F00000"></span></td>
											<td>1921</td>
											<td>24.8</td>
										</tr><tr role="row" class="odd">
											<td id="1378" class="sorting_1">Brann</td><td>1378</td>
											<td><img src="./Bet_files/NOR.gif" alt="Norway">  NOR</td>
											<td>Premier Division</td>
											<td>237K</td>
											<td>Professional</td>
											<td>17,703</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#E00000"></span></td>
											<td>1908</td>
											<td>25.5</td>
										</tr><tr role="row" class="even">
											<td id="948" class="sorting_1">Bremen</td><td>948</td>
											<td><img src="./Bet_files/GER.gif" alt="Germany">  GER</td>
											<td>First Division</td>
											<td>3M</td>
											<td>Professional</td>
											<td>42,500</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#088070"></span></td>
											<td>1899</td>
											<td>26.3</td>
										</tr><tr role="row" class="odd">
											<td id="617" class="sorting_1">Brentford</td><td>617</td>
											<td><img src="./Bet_files/ENG.gif" alt="England">  ENG</td>
											<td>Sky Bet Championship</td>
											<td>500K</td>
											<td>Professional</td>
											<td>12,802</td>
											<td><span class="label" style="background:#F80020"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1889</td>
											<td>23.8</td>
										</tr><tr role="row" class="even">
											<td id="1113" class="sorting_1">Brescia</td><td>1113</td>
											<td><img src="./Bet_files/ITA.gif" alt="Italy">  ITA</td>
											<td>Serie B</td>
											<td>345K</td>
											<td>Professional</td>
											<td>27,547</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#0050D0"></span></td>
											<td>1911</td>
											<td>23.2</td>
										</tr><tr role="row" class="odd">
											<td id="618" class="sorting_1">Brighton</td><td>618</td>
											<td><img src="./Bet_files/ENG.gif" alt="England">  ENG</td>
											<td>Sky Bet Championship</td>
											<td>5M</td>
											<td>Professional</td>
											<td>30,384</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
											<td>1901</td>
											<td>27.2</td>
										</tr><tr role="row" class="even">
											<td id="619" class="sorting_1">Bristol City</td><td>619</td>
											<td><img src="./Bet_files/ENG.gif" alt="England">  ENG</td>
											<td>Sky Bet Championship</td>
											<td>6M</td>
											<td>Professional</td>
											<td>27,000</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#D01028"></span></td>
											<td>1897</td>
											<td>24.7</td>
										</tr><tr role="row" class="odd">
											<td id="620" class="sorting_1">Bristol Rovers</td><td>620</td>
											<td><img src="./Bet_files/ENG.gif" alt="England">  ENG</td>
											<td>Sky Bet League One</td>
											<td>25K</td>
											<td>Professional</td>
											<td>12,300</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#0060B8"></span></td>
											<td>1883</td>
											<td>25.7</td>
										</tr><tr role="row" class="even">
											<td id="465" class="sorting_1">Brno</td><td>465</td>
											<td><img src="./Bet_files/CZE.gif" alt="Czech Republic">  CZE</td>
											<td>First Division</td>
											<td>239K</td>
											<td>Professional</td>
											<td>12,550</td>
											<td><span class="label" style="background:#000030"></span> <span class="label" style="background:#E00000"></span></td>
											<td>1913</td>
											<td>25.7</td>
										</tr><tr role="row" class="odd">
											<td id="496" class="sorting_1">Brondby IF</td><td>496</td>
											<td><img src="./Bet_files/DEN.gif" alt="Denmark">  DEN</td>
											<td>Superliga</td>
											<td>810K</td>
											<td>Professional</td>
											<td>29,000</td>
											<td><span class="label" style="background:#0030A0"></span> <span class="label" style="background:#F8F838"></span></td>
											<td>1964</td>
											<td>24.9</td>
										</tr><tr role="row" class="even">
											<td id="1295" class="sorting_1">Bryne</td><td>1295</td>
											<td><img src="./Bet_files/NOR.gif" alt="Norway">  NOR</td>
											<td>First Division</td>
											<td>5K</td>
											<td>Professional</td>
											<td>10,500</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#E81800"></span></td>
											<td>1926</td>
											<td>23.9</td>
										</tr><tr role="row" class="odd">
											<td id="622" class="sorting_1">Burnley</td><td>622</td>
											<td><img src="./Bet_files/ENG.gif" alt="England">  ENG</td>
											<td>Premier Division</td>
											<td>10M</td>
											<td>Professional</td>
											<td>22,546</td>
											<td><span class="label" style="background:#90C0E0"></span> <span class="label" style="background:#701038"></span></td>
											<td>1882</td>
											<td>26.0</td>
										</tr><tr role="row" class="even">
											<td id="623" class="sorting_1">Bury</td><td>623</td>
											<td><img src="./Bet_files/ENG.gif" alt="England">  ENG</td>
											<td>Sky Bet League One</td>
											<td>0</td>
											<td>Professional</td>
											<td>11,376</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
											<td>1885</td>
											<td>25.4</td>
										</tr><tr role="row" class="odd">
											<td id="1114" class="sorting_1">Cagliari</td><td>1114</td>
											<td><img src="./Bet_files/ITA.gif" alt="Italy">  ITA</td>
											<td>Serie A</td>
											<td>2M</td>
											<td>Professional</td>
											<td>16,003</td>
											<td><span class="label" style="background:#002060"></span> <span class="label" style="background:#C80030"></span></td>
											<td>1920</td>
											<td>28.3</td>
										</tr><tr role="row" class="even">
											<td id="624" class="sorting_1">Cambridge</td><td>624</td>
											<td><img src="./Bet_files/ENG.gif" alt="England">  ENG</td>
											<td>Sky Bet League Two</td>
											<td>100K</td>
											<td>Professional</td>
											<td>8,696</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
											<td>1912</td>
											<td>24.4</td>
										</tr><tr role="row" class="odd">
											<td id="994" class="sorting_1">Cambuur</td><td>994</td>
											<td><img src="./Bet_files/NED.gif" alt="Holland">  NED</td>
											<td>Jupiler League</td>
											<td>151K</td>
											<td>Professional</td>
											<td>10,000</td>
											<td><span class="label" style="background:#203098"></span> <span class="label" style="background:#F0E028"></span></td>
											<td>1964</td>
											<td>24.8</td>
										</tr><tr role="row" class="even">
											<td id="625" class="sorting_1">Cardiff</td><td>625</td>
											<td><img src="./Bet_files/ENG.gif" alt="England">  ENG</td>
											<td>Sky Bet Championship</td>
											<td>1M</td>
											<td>Professional</td>
											<td>33,316</td>
											<td><span class="label" style="background:#002080"></span> <span class="label" style="background:#0030A0"></span></td>
											<td>1899</td>
											<td>26.8</td>
										</tr><tr role="row" class="odd">
											<td id="626" class="sorting_1">Carlisle</td><td>626</td>
											<td><img src="./Bet_files/ENG.gif" alt="England">  ENG</td>
											<td>Sky Bet League Two</td>
											<td>64K</td>
											<td>Professional</td>
											<td>16,683</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
											<td>1904</td>
											<td>25.2</td>
										</tr><tr role="row" class="even">
											<td id="1115" class="sorting_1">Carpi</td><td>1115</td>
											<td><img src="./Bet_files/ITA.gif" alt="Italy">  ITA</td>
											<td>Serie B</td>
											<td>1M</td>
											<td>Professional</td>
											<td>5,500</td>
											<td><span class="label" style="background:#C80000"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1909</td>
											<td>23.8</td>
										</tr><tr role="row" class="odd">
											<td id="1116" class="sorting_1">Carrarese</td><td>1116</td>
											<td><img src="./Bet_files/ITA.gif" alt="Italy">  ITA</td>
											<td>Serie C/A</td>
											<td>86K</td>
											<td>Professional</td>
											<td>9,500</td>
											<td><span class="label" style="background:#F8F000"></span> <span class="label" style="background:#005098"></span></td>
											<td>1908</td>
											<td>23.3</td>
										</tr><tr role="row" class="even">
											<td id="1119" class="sorting_1">Catanzaro</td><td>1119</td>
											<td><img src="./Bet_files/ITA.gif" alt="Italy">  ITA</td>
											<td>Serie C/C</td>
											<td>129K</td>
											<td>Professional</td>
											<td>14,650</td>
											<td><span class="label" style="background:#D02028"></span> <span class="label" style="background:#D02028"></span></td>
											<td>1929</td>
											<td>25.0</td>
										</tr><tr role="row" class="odd">
											<td id="321" class="sorting_1">CEC</td><td>321</td>
											<td><img src="./Bet_files/BRA.gif" alt="Brazil">  BRA</td>
											<td>First Division</td>
											<td>2M</td>
											<td>Professional</td>
											<td>75,783</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#E00000"></span></td>
											<td>1921</td>
											<td>26.1</td>
										</tr><tr role="row" class="even">
											<td id="1569" class="sorting_1">Celtic</td><td>1569</td>
											<td><img src="./Bet_files/SCO.gif" alt="Scotland">  SCO</td>
											<td>Ladbrokes Premiership</td>
											<td>2M</td>
											<td>Professional</td>
											<td>60,411</td>
											<td><span class="label" style="background:#188848"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1888</td>
											<td>24.2</td>
										</tr><tr role="row" class="odd">
											<td id="184" class="sorting_1">Cercle Brugge</td><td>184</td>
											<td><img src="./Bet_files/BEL.gif" alt="Belgium">  BEL</td>
											<td>Pro League B</td>
											<td>0</td>
											<td>Professional</td>
											<td>29,042</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#006030"></span></td>
											<td>1899</td>
											<td>23.7</td>
										</tr><tr role="row" class="even">
											<td id="1120" class="sorting_1">Cesena</td><td>1120</td>
											<td><img src="./Bet_files/ITA.gif" alt="Italy">  ITA</td>
											<td>Serie B</td>
											<td>431K</td>
											<td>Professional</td>
											<td>23,860</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1940</td>
											<td>25.7</td>
										</tr><tr role="row" class="odd">
											<td id="470" class="sorting_1">Ceske Budejovice</td><td>470</td>
											<td><img src="./Bet_files/CZE.gif" alt="Czech Republic">  CZE</td>
											<td>Second Division</td>
											<td>239K</td>
											<td>Professional</td>
											<td>6,681</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#000000"></span></td>
											<td>1905</td>
											<td>24.6</td>
										</tr><tr role="row" class="even">
											<td id="838" class="sorting_1">Chamois Niortais FC</td><td>838</td>
											<td><img src="./Bet_files/FRA.gif" alt="France">  FRA</td>
											<td>Domino's Ligue 2</td>
											<td>0</td>
											<td>Professional</td>
											<td>10,406</td>
											<td><span class="label" style="background:#003068"></span> <span class="label" style="background:#0078F8"></span></td>
											<td>1925</td>
											<td>24.6</td>
										</tr><tr role="row" class="odd">
											<td id="263" class="sorting_1">Charleroi</td><td>263</td>
											<td><img src="./Bet_files/BEL.gif" alt="Belgium">  BEL</td>
											<td>Pro League</td>
											<td>0</td>
											<td>Professional</td>
											<td>17,824</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#000000"></span></td>
											<td>1904</td>
											<td>26.0</td>
										</tr><tr role="row" class="even">
											<td id="628" class="sorting_1">Charlton</td><td>628</td>
											<td><img src="./Bet_files/ENG.gif" alt="England">  ENG</td>
											<td>Sky Bet League One</td>
											<td>0</td>
											<td>Professional</td>
											<td>27,111</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#E00000"></span></td>
											<td>1905</td>
											<td>25.1</td>
										</tr><tr role="row" class="odd">
											<td id="1480" class="sorting_1">Chaves</td><td>1480</td>
											<td><img src="./Bet_files/POR.gif" alt="Portugal">  POR</td>
											<td>Premier League</td>
											<td>129K</td>
											<td>Professional</td>
											<td>22,600</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
											<td>1949</td>
											<td>24.8</td>
										</tr><tr role="row" class="even">
											<td id="630" class="sorting_1">Chelsea</td><td>630</td>
											<td><img src="./Bet_files/ENG.gif" alt="England">  ENG</td>
											<td>Premier Division</td>
											<td>40M</td>
											<td>Professional</td>
											<td>41,629</td>
											<td><span class="label" style="background:#304898"></span> <span class="label" style="background:#304898"></span></td>
											<td>1905</td>
											<td>26.2</td>
										</tr><tr role="row" class="odd">
											<td id="631" class="sorting_1">Cheltenham</td><td>631</td>
											<td><img src="./Bet_files/ENG.gif" alt="England">  ENG</td>
											<td>Sky Bet League Two</td>
											<td>0</td>
											<td>Professional</td>
											<td>7,027</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#E01820"></span></td>
											<td>1887</td>
											<td>24.0</td>
										</tr><tr role="row" class="even">
											<td id="941" class="sorting_1">Chemnitz</td><td>941</td>
											<td><img src="./Bet_files/GER.gif" alt="Germany">  GER</td>
											<td>Third Division</td>
											<td>0</td>
											<td>Professional</td>
											<td>15,000</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#4898D0"></span></td>
											<td>1966</td>
											<td>23.8</td>
										</tr><tr role="row" class="odd">
											<td id="634" class="sorting_1">Chesterfield</td><td>634</td>
											<td><img src="./Bet_files/ENG.gif" alt="England">  ENG</td>
											<td>Sky Bet League One</td>
											<td>100K</td>
											<td>Professional</td>
											<td>10,504</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
											<td>1866</td>
											<td>24.9</td>
										</tr><tr role="row" class="even">
											<td id="1122" class="sorting_1">Chievo</td><td>1122</td>
											<td><img src="./Bet_files/ITA.gif" alt="Italy">  ITA</td>
											<td>Serie A</td>
											<td>3M</td>
											<td>Professional</td>
											<td>39,211</td>
											<td><span class="label" style="background:#0078F8"></span> <span class="label" style="background:#F8F838"></span></td>
											<td>1929</td>
											<td>29.7</td>
										</tr><tr role="row" class="odd">
											<td id="1255" class="sorting_1">Chivas</td><td>1255</td>
											<td><img src="./Bet_files/MEX.gif" alt="Mexico">  MEX</td>
											<td>First Division</td>
											<td>5M</td>
											<td>Professional</td>
											<td>49,850</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#E00000"></span></td>
											<td>1906</td>
											<td>24.4</td>
										</tr><tr role="row" class="even">
											<td id="430" class="sorting_1">Cibalia</td><td>430</td>
											<td><img src="./Bet_files/CRO.gif" alt="Croatia">  CRO</td>
											<td>First League</td>
											<td>0</td>
											<td>Professional</td>
											<td>10,000</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#60C0F8"></span></td>
											<td>1919</td>
											<td>23.0</td>
										</tr><tr role="row" class="odd">
											<td id="186" class="sorting_1">Club Brugge</td><td>186</td>
											<td><img src="./Bet_files/BEL.gif" alt="Belgium">  BEL</td>
											<td>Pro League</td>
											<td>3M</td>
											<td>Professional</td>
											<td>29,042</td>
											<td><span class="label" style="background:#0050D0"></span> <span class="label" style="background:#0050D0"></span></td>
											<td>1891</td>
											<td>25.2</td>
										</tr><tr role="row" class="even">
											<td id="1548" class="sorting_1">Clyde</td><td>1548</td>
											<td><img src="./Bet_files/SCO.gif" alt="Scotland">  SCO</td>
											<td>Ladbrokes League 2</td>
											<td>0</td>
											<td>Professional</td>
											<td>8,086</td>
											<td><span class="label" style="background:#F0F0F0"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1877</td>
											<td>24.2</td>
										</tr><tr role="row" class="odd">
											<td id="636" class="sorting_1">Colchester</td><td>636</td>
											<td><img src="./Bet_files/ENG.gif" alt="England">  ENG</td>
											<td>Sky Bet League Two</td>
											<td>20K</td>
											<td>Professional</td>
											<td>10,105</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
											<td>1937</td>
											<td>23.7</td>
										</tr><tr role="row" class="even">
											<td id="399" class="sorting_1">Colo Colo</td><td>399</td>
											<td><img src="./Bet_files/CHI.gif" alt="Chile">  CHI</td>
											<td>First Division</td>
											<td>692K</td>
											<td>Professional</td>
											<td>47,017</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1925</td>
											<td>23.5</td>
										</tr><tr role="row" class="odd">
											<td id="1123" class="sorting_1">Como</td><td>1123</td>
											<td><img src="./Bet_files/ITA.gif" alt="Italy">  ITA</td>
											<td>Serie C/A</td>
											<td>258K</td>
											<td>Professional</td>
											<td>13,602</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#0050D0"></span></td>
											<td>1907</td>
											<td>23.7</td>
										</tr><tr role="row" class="even">
											<td id="319" class="sorting_1">COR</td><td>319</td>
											<td><img src="./Bet_files/BRA.gif" alt="Brazil">  BRA</td>
											<td>First Division</td>
											<td>1M</td>
											<td>Professional</td>
											<td>48,000</td>
											<td><span class="label" style="background:#101010"></span> <span class="label" style="background:#F8D000"></span></td>
											<td>1910</td>
											<td>24.7</td>
										</tr><tr role="row" class="odd">
											<td id="590" class="sorting_1">Cork City</td><td>590</td>
											<td><img src="./Bet_files/IRL.gif" alt="Ireland">  IRL</td>
											<td>Premier Division</td>
											<td>0</td>
											<td>Professional</td>
											<td>7,365</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#006030"></span></td>
											<td>1984</td>
											<td>25.3</td>
										</tr><tr role="row" class="even">
											<td id="312" class="sorting_1">Cortulua</td><td>312</td>
											<td><img src="./Bet_files/COL.gif" alt="Colombia">  COL</td>
											<td>First Division</td>
											<td>423K</td>
											<td>Professional</td>
											<td>16,000</td>
											<td><span class="label" style="background:#008030"></span> <span class="label" style="background:#E00000"></span></td>
											<td>1967</td>
											<td>23.5</td>
										</tr><tr role="row" class="odd">
											<td id="1124" class="sorting_1">Cosenza</td><td>1124</td>
											<td><img src="./Bet_files/ITA.gif" alt="Italy">  ITA</td>
											<td>Serie C/C</td>
											<td>129K</td>
											<td>Professional</td>
											<td>24,209</td>
											<td><span class="label" style="background:#E00000"></span> <span class="label" style="background:#002060"></span></td>
											<td>1914</td>
											<td>24.7</td>
										</tr><tr role="row" class="even">
											<td id="639" class="sorting_1">Coventry</td><td>639</td>
											<td><img src="./Bet_files/ENG.gif" alt="England">  ENG</td>
											<td>Sky Bet League One</td>
											<td>0</td>
											<td>Professional</td>
											<td>32,609</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
											<td>1883</td>
											<td>23.2</td>
										</tr><tr role="row" class="odd">
											<td id="640" class="sorting_1">Crawley</td><td>640</td>
											<td><img src="./Bet_files/ENG.gif" alt="England">  ENG</td>
											<td>Sky Bet League Two</td>
											<td>10K</td>
											<td>Professional</td>
											<td>6,134</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F00000"></span></td>
											<td>1896</td>
											<td>23.7</td>
										</tr><tr role="row" class="even">
											<td id="1125" class="sorting_1">Cremonese</td><td>1125</td>
											<td><img src="./Bet_files/ITA.gif" alt="Italy">  ITA</td>
											<td>Serie C/A</td>
											<td>258K</td>
											<td>Professional</td>
											<td>20,034</td>
											<td><span class="label" style="background:#E00000"></span> <span class="label" style="background:#C0C0C0"></span></td>
											<td>1903</td>
											<td>27.0</td>
										</tr><tr role="row" class="odd">
											<td id="641" class="sorting_1">Crewe</td><td>641</td>
											<td><img src="./Bet_files/ENG.gif" alt="England">  ENG</td>
											<td>Sky Bet League Two</td>
											<td>30K</td>
											<td>Professional</td>
											<td>10,153</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
											<td>1877</td>
											<td>22.6</td>
										</tr><tr role="row" class="even">
											<td id="320" class="sorting_1">CRI</td><td>320</td>
											<td><img src="./Bet_files/BRA.gif" alt="Brazil">  BRA</td>
											<td>Second Division</td>
											<td>71K</td>
											<td>Professional</td>
											<td>22,000</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#0030A0"></span></td>
											<td>1948</td>
											<td>24.8</td>
										</tr><tr role="row" class="odd">
											<td id="1449" class="sorting_1">Cristal</td><td>1449</td>
											<td><img src="./Bet_files/PER.gif" alt="Peru">  PER</td>
											<td>First Division</td>
											<td>461K</td>
											<td>Professional</td>
											<td>18,000</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#00F8F8"></span></td>
											<td>1955</td>
											<td>24.6</td>
										</tr><tr role="row" class="even">
											<td id="1254" class="sorting_1">Cruz Azul</td><td>1254</td>
											<td><img src="./Bet_files/MEX.gif" alt="Mexico">  MEX</td>
											<td>First Division</td>
											<td>5M</td>
											<td>Professional</td>
											<td>35,161</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#0030A0"></span></td>
											<td>1927</td>
											<td>26.8</td>
										</tr><tr role="row" class="odd">
											<td id="642" class="sorting_1">Crystal Palace</td><td>642</td>
											<td><img src="./Bet_files/ENG.gif" alt="England">  ENG</td>
											<td>Premier Division</td>
											<td>11M</td>
											<td>Professional</td>
											<td>26,297</td>
											<td><span class="label" style="background:#003098"></span> <span class="label" style="background:#C80030"></span></td>
											<td>1905</td>
											<td>27.5</td>
										</tr><tr role="row" class="even">
											<td id="1518" class="sorting_1">CSKA Moscow</td><td>1518</td>
											<td><img src="./Bet_files/RUS.gif" alt="Russia">  RUS</td>
											<td>Premier Division</td>
											<td>1M</td>
											<td>Professional</td>
											<td>18,636</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
											<td>1911</td>
											<td>26.4</td>
										</tr><tr role="row" class="odd">
											<td id="643" class="sorting_1">Dag &amp; Red</td><td>643</td>
											<td><img src="./Bet_files/ENG.gif" alt="England">  ENG</td>
											<td>Vanarama National</td>
											<td>10K</td>
											<td>Professional</td>
											<td>6,078</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
											<td>1992</td>
											<td>24.0</td>
										</tr><tr role="row" class="even">
											<td id="1000" class="sorting_1">De Graafschap</td><td>1000</td>
											<td><img src="./Bet_files/NED.gif" alt="Holland">  NED</td>
											<td>Jupiler League</td>
											<td>129K</td>
											<td>Professional</td>
											<td>12,600</td>
											<td><span class="label" style="background:#2870C0"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1954</td>
											<td>23.2</td>
										</tr><tr role="row" class="odd">
											<td id="1052" class="sorting_1">Debrecen</td><td>1052</td>
											<td><img src="./Bet_files/HUN.gif" alt="Hungary">  HUN</td>
											<td>Division I</td>
											<td>84K</td>
											<td>Professional</td>
											<td>20,020</td>
											<td><span class="label" style="background:#E00000"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1902</td>
											<td>27.4</td>
										</tr><tr role="row" class="even">
											<td id="1005" class="sorting_1">Den Bosch</td><td>1005</td>
											<td><img src="./Bet_files/NED.gif" alt="Holland">  NED</td>
											<td>Jupiler League</td>
											<td>0</td>
											<td>Professional</td>
											<td>7,000</td>
											<td><span class="label" style="background:#004888"></span> <span class="label" style="background:#4070F0"></span></td>
											<td>1965</td>
											<td>22.7</td>
										</tr><tr role="row" class="odd">
											<td id="421" class="sorting_1">Deportivo Cali</td><td>421</td>
											<td><img src="./Bet_files/COL.gif" alt="Colombia">  COL</td>
											<td>First Division</td>
											<td>3M</td>
											<td>Professional</td>
											<td>52,000</td>
											<td><span class="label" style="background:#008030"></span> <span class="label" style="background:#108830"></span></td>
											<td>1912</td>
											<td>25.7</td>
										</tr><tr role="row" class="even">
											<td id="645" class="sorting_1">Derby</td><td>645</td>
											<td><img src="./Bet_files/ENG.gif" alt="England">  ENG</td>
											<td>Sky Bet Championship</td>
											<td>4M</td>
											<td>Professional</td>
											<td>33,597</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1884</td>
											<td>26.0</td>
										</tr><tr role="row" class="odd">
											<td id="591" class="sorting_1">Derry City</td><td>591</td>
											<td><img src="./Bet_files/IRL.gif" alt="Ireland">  IRL</td>
											<td>Premier Division</td>
											<td>0</td>
											<td>Professional</td>
											<td>8,200</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#E00000"></span></td>
											<td>1928</td>
											<td>23.4</td>
										</tr><tr role="row" class="even">
											<td id="839" class="sorting_1">Dijon FCO</td><td>839</td>
											<td><img src="./Bet_files/FRA.gif" alt="France">  FRA</td>
											<td>Ligue 1</td>
											<td>861K</td>
											<td>Professional</td>
											<td>16,098</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F00000"></span></td>
											<td>1998</td>
											<td>27.1</td>
										</tr><tr role="row" class="odd">
											<td id="432" class="sorting_1">Dinamo</td><td>432</td>
											<td><img src="./Bet_files/CRO.gif" alt="Croatia">  CRO</td>
											<td>First League</td>
											<td>2M</td>
											<td>Professional</td>
											<td>35,123</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#0070C0"></span></td>
											<td>1911</td>
											<td>24.1</td>
										</tr><tr role="row" class="even">
											<td id="1500" class="sorting_1">Dinamo Buc.</td><td>1500</td>
											<td><img src="./Bet_files/ROU.gif" alt="Romania">  ROU</td>
											<td>Liga I</td>
											<td>0</td>
											<td>Professional</td>
											<td>15,300</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#E00000"></span></td>
											<td>1948</td>
											<td>24.4</td>
										</tr><tr role="row" class="odd">
											<td id="303" class="sorting_1">Dinamo Minsk</td><td>303</td>
											<td><img src="./Bet_files/BLR.gif" alt="Belarus">  BLR</td>
											<td>Highest League</td>
											<td>46K</td>
											<td>Professional</td>
											<td>17,600</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#0050D0"></span></td>
											<td>1927</td>
											<td>25.8</td>
										</tr><tr role="row" class="even">
											<td id="1520" class="sorting_1">Dinamo Moscow</td><td>1520</td>
											<td><img src="./Bet_files/RUS.gif" alt="Russia">  RUS</td>
											<td>First Division</td>
											<td>115K</td>
											<td>Professional</td>
											<td>18,636</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#0860D0"></span></td>
											<td>1923</td>
											<td>26.9</td>
										</tr><tr role="row" class="odd">
											<td id="646" class="sorting_1">Doncaster</td><td>646</td>
											<td><img src="./Bet_files/ENG.gif" alt="England">  ENG</td>
											<td>Sky Bet League Two</td>
											<td>50K</td>
											<td>Professional</td>
											<td>15,231</td>
											<td><span class="label" style="background:#E00000"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1879</td>
											<td>25.3</td>
										</tr><tr role="row" class="even">
											<td id="1001" class="sorting_1">Dordrecht</td><td>1001</td>
											<td><img src="./Bet_files/NED.gif" alt="Holland">  NED</td>
											<td>Jupiler League</td>
											<td>14K</td>
											<td>Professional</td>
											<td>4,100</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#404828"></span></td>
											<td>1972</td>
											<td>21.8</td>
										</tr><tr role="row" class="odd">
											<td id="907" class="sorting_1">Dortmund</td><td>907</td>
											<td><img src="./Bet_files/GER.gif" alt="Germany">  GER</td>
											<td>First Division</td>
											<td>16M</td>
											<td>Professional</td>
											<td>81,359</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F8F000"></span></td>
											<td>1909</td>
											<td>24.7</td>
										</tr><tr role="row" class="even">
											<td id="911" class="sorting_1">Dresden</td><td>911</td>
											<td><img src="./Bet_files/GER.gif" alt="Germany">  GER</td>
											<td>Second Division</td>
											<td>431K</td>
											<td>Professional</td>
											<td>32,066</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F0B010"></span></td>
											<td>1953</td>
											<td>24.0</td>
										</tr><tr role="row" class="odd">
											<td id="933" class="sorting_1">Duisburg</td><td>933</td>
											<td><img src="./Bet_files/GER.gif" alt="Germany">  GER</td>
											<td>Third Division</td>
											<td>0</td>
											<td>Professional</td>
											<td>31,502</td>
											<td><span class="label" style="background:#0078F8"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1902</td>
											<td>25.6</td>
										</tr><tr role="row" class="even">
											<td id="592" class="sorting_1">Dundalk</td><td>592</td>
											<td><img src="./Bet_files/IRL.gif" alt="Ireland">  IRL</td>
											<td>Premier Division</td>
											<td>0</td>
											<td>Professional</td>
											<td>4,500</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1903</td>
											<td>25.6</td>
										</tr><tr role="row" class="odd">
											<td id="1555" class="sorting_1">Dundee</td><td>1555</td>
											<td><img src="./Bet_files/SCO.gif" alt="Scotland">  SCO</td>
											<td>Ladbrokes Premiership</td>
											<td>500K</td>
											<td>Professional</td>
											<td>11,506</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#202030"></span></td>
											<td>1893</td>
											<td>24.1</td>
										</tr><tr role="row" class="even">
											<td id="1556" class="sorting_1">Dundee Utd</td><td>1556</td>
											<td><img src="./Bet_files/SCO.gif" alt="Scotland">  SCO</td>
											<td>Ladbrokes Championship</td>
											<td>200K</td>
											<td>Professional</td>
											<td>14,223</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#E07000"></span></td>
											<td>1909</td>
											<td>23.5</td>
										</tr><tr role="row" class="odd">
											<td id="1557" class="sorting_1">Dunfermline</td><td>1557</td>
											<td><img src="./Bet_files/SCO.gif" alt="Scotland">  SCO</td>
											<td>Ladbrokes Championship</td>
											<td>29K</td>
											<td>Professional</td>
											<td>11,904</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
											<td>1885</td>
											<td>25.5</td>
										</tr><tr role="row" class="even">
											<td id="921" class="sorting_1">Dusseldorf</td><td>921</td>
											<td><img src="./Bet_files/GER.gif" alt="Germany">  GER</td>
											<td>Second Division</td>
											<td>258K</td>
											<td>Professional</td>
											<td>54,600</td>
											<td><span class="label" style="background:#E00808"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1895</td>
											<td>25.7</td>
										</tr><tr role="row" class="odd">
											<td id="1002" class="sorting_1">Eindhoven</td><td>1002</td>
											<td><img src="./Bet_files/NED.gif" alt="Holland">  NED</td>
											<td>Jupiler League</td>
											<td>34K</td>
											<td>Professional</td>
											<td>4,200</td>
											<td><span class="label" style="background:#5090D8"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1909</td>
											<td>23.9</td>
										</tr><tr role="row" class="even">
											<td id="1003" class="sorting_1">Emmen</td><td>1003</td>
											<td><img src="./Bet_files/NED.gif" alt="Holland">  NED</td>
											<td>Jupiler League</td>
											<td>43K</td>
											<td>Professional</td>
											<td>8,600</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#E81020"></span></td>
											<td>1925</td>
											<td>24.2</td>
										</tr><tr role="row" class="odd">
											<td id="1126" class="sorting_1">Empoli</td><td>1126</td>
											<td><img src="./Bet_files/ITA.gif" alt="Italy">  ITA</td>
											<td>Serie A</td>
											<td>2M</td>
											<td>Professional</td>
											<td>16,284</td>
											<td><span class="label" style="background:#2068B0"></span> <span class="label" style="background:#2068B0"></span></td>
											<td>1920</td>
											<td>26.2</td>
										</tr><tr role="row" class="even">
											<td id="840" class="sorting_1">En Avant de Guingamp</td><td>840</td>
											<td><img src="./Bet_files/FRA.gif" alt="France">  FRA</td>
											<td>Ligue 1</td>
											<td>1M</td>
											<td>Professional</td>
											<td>18,378</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#E00000"></span></td>
											<td>1912</td>
											<td>27.2</td>
										</tr><tr role="row" class="odd">
											<td id="502" class="sorting_1">Esbjerg fB</td><td>502</td>
											<td><img src="./Bet_files/DEN.gif" alt="Denmark">  DEN</td>
											<td>Superliga</td>
											<td>231K</td>
											<td>Professional</td>
											<td>18,000</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
											<td>1924</td>
											<td>24.0</td>
										</tr><tr role="row" class="even">
											<td id="85" class="sorting_1">Estudiantes (LP)</td><td>85</td>
											<td><img src="./Bet_files/ARG.gif" alt="Argentina">  ARG</td>
											<td>Premier Division</td>
											<td>5M</td>
											<td>Professional</td>
											<td>53,000</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#C00008"></span></td>
											<td>1905</td>
											<td>25.9</td>
										</tr><tr role="row" class="odd">
											<td id="194" class="sorting_1">Eupen</td><td>194</td>
											<td><img src="./Bet_files/BEL.gif" alt="Belgium">  BEL</td>
											<td>Pro League</td>
											<td>86K</td>
											<td>Professional</td>
											<td>8,363</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#000000"></span></td>
											<td>1945</td>
											<td>23.6</td>
										</tr><tr role="row" class="even">
											<td id="650" class="sorting_1">Everton</td><td>650</td>
											<td><img src="./Bet_files/ENG.gif" alt="England">  ENG</td>
											<td>Premier Division</td>
											<td>45M</td>
											<td>Professional</td>
											<td>39,572</td>
											<td><span class="label" style="background:#F8F870"></span> <span class="label" style="background:#204098"></span></td>
											<td>1878</td>
											<td>27.4</td>
										</tr><tr role="row" class="odd">
											<td id="1004" class="sorting_1">Excelsior</td><td>1004</td>
											<td><img src="./Bet_files/NED.gif" alt="Holland">  NED</td>
											<td>Eredivisie</td>
											<td>0</td>
											<td>Professional</td>
											<td>4,500</td>
											<td><span class="label" style="background:#C81050"></span> <span class="label" style="background:#101010"></span></td>
											<td>1902</td>
											<td>25.0</td>
										</tr><tr role="row" class="even">
											<td id="651" class="sorting_1">Exeter</td><td>651</td>
											<td><img src="./Bet_files/ENG.gif" alt="England">  ENG</td>
											<td>Sky Bet League Two</td>
											<td>0</td>
											<td>Professional</td>
											<td>8,830</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#E00000"></span></td>
											<td>1901</td>
											<td>25.7</td>
										</tr><tr role="row" class="odd">
											<td id="1563" class="sorting_1">Falkirk</td><td>1563</td>
											<td><img src="./Bet_files/SCO.gif" alt="Scotland">  SCO</td>
											<td>Ladbrokes Championship</td>
											<td>0</td>
											<td>Professional</td>
											<td>7,937</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#101838"></span></td>
											<td>1876</td>
											<td>24.0</td>
										</tr><tr role="row" class="even">
											<td id="1503" class="sorting_1">FC Brasov</td><td>1503</td>
											<td><img src="./Bet_files/ROU.gif" alt="Romania">  ROU</td>
											<td>Liga II</td>
											<td>0</td>
											<td>Professional</td>
											<td>8,000</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F8D000"></span></td>
											<td>1936</td>
											<td>22.9</td>
										</tr><tr role="row" class="odd">
											<td id="504" class="sorting_1">FC Fredericia</td><td>504</td>
											<td><img src="./Bet_files/DEN.gif" alt="Denmark">  DEN</td>
											<td>First Division</td>
											<td>29K</td>
											<td>Professional</td>
											<td>4,000</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#E00000"></span></td>
											<td>1991</td>
											<td>22.6</td>
										</tr><tr role="row" class="even">
											<td id="1007" class="sorting_1">FC Groningen</td><td>1007</td>
											<td><img src="./Bet_files/NED.gif" alt="Holland">  NED</td>
											<td>Eredivisie</td>
											<td>861K</td>
											<td>Professional</td>
											<td>22,579</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#006048"></span></td>
											<td>1971</td>
											<td>24.4</td>
										</tr><tr role="row" class="odd">
											<td id="505" class="sorting_1">FC Kobenhavn</td><td>505</td>
											<td><img src="./Bet_files/DEN.gif" alt="Denmark">  DEN</td>
											<td>Superliga</td>
											<td>3M</td>
											<td>Professional</td>
											<td>38,076</td>
											<td><span class="label" style="background:#304078"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1992</td>
											<td>25.2</td>
										</tr><tr role="row" class="even">
											<td id="811" class="sorting_1">FC Lahti</td><td>811</td>
											<td><img src="./Bet_files/FIN.gif" alt="Finland">  FIN</td>
											<td>Premier League</td>
											<td>9K</td>
											<td>Professional</td>
											<td>4,000</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#000000"></span></td>
											<td>1996</td>
											<td>24.6</td>
										</tr><tr role="row" class="odd">
											<td id="844" class="sorting_1">FC Metz</td><td>844</td>
											<td><img src="./Bet_files/FRA.gif" alt="France">  FRA</td>
											<td>Ligue 1</td>
											<td>207K</td>
											<td>Professional</td>
											<td>25,636</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#800020"></span></td>
											<td>1932</td>
											<td>25.9</td>
										</tr><tr role="row" class="even">
											<td id="526" class="sorting_1">FC Midtjylland</td><td>526</td>
											<td><img src="./Bet_files/DEN.gif" alt="Denmark">  DEN</td>
											<td>Superliga</td>
											<td>578K</td>
											<td>Professional</td>
											<td>11,500</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#E01818"></span></td>
											<td>1999</td>
											<td>24.6</td>
										</tr><tr role="row" class="odd">
											<td id="846" class="sorting_1">FC Nantes</td><td>846</td>
											<td><img src="./Bet_files/FRA.gif" alt="France">  FRA</td>
											<td>Ligue 1</td>
											<td>5M</td>
											<td>Professional</td>
											<td>38,285</td>
											<td><span class="label" style="background:#309060"></span> <span class="label" style="background:#F8F000"></span></td>
											<td>1943</td>
											<td>23.7</td>
										</tr><tr role="row" class="even">
											<td id="158" class="sorting_1">FC Red Bull Salzburg</td><td>158</td>
											<td><img src="./Bet_files/AUT.gif" alt="Austria">  AUT</td>
											<td>Premier Division</td>
											<td>4M</td>
											<td>Professional</td>
											<td>31,895</td>
											<td><span class="label" style="background:#B00000"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>2005</td>
											<td>22.6</td>
										</tr><tr role="row" class="odd">
											<td id="1513" class="sorting_1">FC Steaua</td><td>1513</td>
											<td><img src="./Bet_files/ROU.gif" alt="Romania">  ROU</td>
											<td>Liga I</td>
											<td>0</td>
											<td>Professional</td>
											<td>55,600</td>
											<td><span class="label" style="background:#2858B0"></span> <span class="label" style="background:#C80000"></span></td>
											<td>1947</td>
											<td>26.9</td>
										</tr><tr role="row" class="even">
											<td id="1009" class="sorting_1">FC Twente</td><td>1009</td>
											<td><img src="./Bet_files/NED.gif" alt="Holland">  NED</td>
											<td>Eredivisie</td>
											<td>175K</td>
											<td>Professional</td>
											<td>30,014</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#C80000"></span></td>
											<td>1965</td>
											<td>21.8</td>
										</tr><tr role="row" class="odd">
											<td id="1010" class="sorting_1">FC Utrecht</td><td>1010</td>
											<td><img src="./Bet_files/NED.gif" alt="Holland">  NED</td>
											<td>Eredivisie</td>
											<td>3M</td>
											<td>Professional</td>
											<td>24,426</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#E00000"></span></td>
											<td>1970</td>
											<td>23.4</td>
										</tr><tr role="row" class="even">
											<td id="1478" class="sorting_1">FCP</td><td>1478</td>
											<td><img src="./Bet_files/POR.gif" alt="Portugal">  POR</td>
											<td>Premier League</td>
											<td>12M</td>
											<td>Professional</td>
											<td>50,035</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
											<td>1893</td>
											<td>24.8</td>
										</tr><tr role="row" class="odd">
											<td id="1055" class="sorting_1">Ferencvaros</td><td>1055</td>
											<td><img src="./Bet_files/HUN.gif" alt="Hungary">  HUN</td>
											<td>Division I</td>
											<td>280K</td>
											<td>Professional</td>
											<td>22,000</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#207830"></span></td>
											<td>1899</td>
											<td>26.1</td>
										</tr><tr role="row" class="even">
											<td id="86" class="sorting_1">Ferro</td><td>86</td>
											<td><img src="./Bet_files/ARG.gif" alt="Argentina">  ARG</td>
											<td>Second Division</td>
											<td>27K</td>
											<td>Professional</td>
											<td>24,800</td>
											<td><span class="label" style="background:#108830"></span> <span class="label" style="background:#00A030"></span></td>
											<td>1904</td>
											<td>27.0</td>
										</tr><tr role="row" class="odd">
											<td id="1013" class="sorting_1">Feyenoord</td><td>1013</td>
											<td><img src="./Bet_files/NED.gif" alt="Holland">  NED</td>
											<td>Eredivisie</td>
											<td>2M</td>
											<td>Professional</td>
											<td>51,177</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#E00000"></span></td>
											<td>1908</td>
											<td>24.6</td>
										</tr><tr role="row" class="even">
											<td id="1070" class="sorting_1">FH</td><td>1070</td>
											<td><img src="./Bet_files/ISL.gif" alt="Iceland">  ISL</td>
											<td>Premier Division</td>
											<td>134K</td>
											<td>Professional</td>
											<td>6,450</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1929</td>
											<td>24.8</td>
										</tr><tr role="row" class="odd">
											<td id="1128" class="sorting_1">Fidelis Andria</td><td>1128</td>
											<td><img src="./Bet_files/ITA.gif" alt="Italy">  ITA</td>
											<td>Serie C/C</td>
											<td>60K</td>
											<td>Professional</td>
											<td>15,000</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#0050D0"></span></td>
											<td>1920</td>
											<td>23.8</td>
										</tr><tr role="row" class="even">
											<td id="1129" class="sorting_1">Fiorentina</td><td>1129</td>
											<td><img src="./Bet_files/ITA.gif" alt="Italy">  ITA</td>
											<td>Serie A</td>
											<td>9M</td>
											<td>Professional</td>
											<td>46,366</td>
											<td><span class="label" style="background:#904090"></span> <span class="label" style="background:#604090"></span></td>
											<td>1926</td>
											<td>25.2</td>
										</tr><tr role="row" class="odd">
											<td id="152" class="sorting_1">FK Austria Wien</td><td>152</td>
											<td><img src="./Bet_files/AUT.gif" alt="Austria">  AUT</td>
											<td>Premier Division</td>
											<td>3M</td>
											<td>Professional</td>
											<td>17,500</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#500080"></span></td>
											<td>1911</td>
											<td>24.7</td>
										</tr><tr role="row" class="even">
											<td id="322" class="sorting_1">FLA</td><td>322</td>
											<td><img src="./Bet_files/BRA.gif" alt="Brazil">  BRA</td>
											<td>First Division</td>
											<td>5M</td>
											<td>Professional</td>
											<td>78,838</td>
											<td><span class="label" style="background:#E00000"></span> <span class="label" style="background:#0050D0"></span></td>
											<td>1895</td>
											<td>26.6</td>
										</tr><tr role="row" class="odd">
											<td id="323" class="sorting_1">FLU</td><td>323</td>
											<td><img src="./Bet_files/BRA.gif" alt="Brazil">  BRA</td>
											<td>First Division</td>
											<td>1M</td>
											<td>Professional</td>
											<td>78,838</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#E00000"></span></td>
											<td>1902</td>
											<td>26.2</td>
										</tr><tr role="row" class="even">
											<td id="1131" class="sorting_1">Foggia</td><td>1131</td>
											<td><img src="./Bet_files/ITA.gif" alt="Italy">  ITA</td>
											<td>Serie C/C</td>
											<td>172K</td>
											<td>Professional</td>
											<td>25,085</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F00000"></span></td>
											<td>1920</td>
											<td>25.9</td>
										</tr><tr role="row" class="odd">
											<td id="1014" class="sorting_1">Fortuna</td><td>1014</td>
											<td><img src="./Bet_files/NED.gif" alt="Holland">  NED</td>
											<td>Jupiler League</td>
											<td>8K</td>
											<td>Professional</td>
											<td>10,300</td>
											<td><span class="label" style="background:#D0C028"></span> <span class="label" style="background:#F8E028"></span></td>
											<td>1968</td>
											<td>22.7</td>
										</tr><tr role="row" class="even">
											<td id="922" class="sorting_1">Fortuna Koln</td><td>922</td>
											<td><img src="./Bet_files/GER.gif" alt="Germany">  GER</td>
											<td>Third Division</td>
											<td>0</td>
											<td>Professional</td>
											<td>14,944</td>
											<td><span class="label" style="background:#E00000"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1948</td>
											<td>26.7</td>
										</tr><tr role="row" class="odd">
											<td id="912" class="sorting_1">Frankfurt</td><td>912</td>
											<td><img src="./Bet_files/GER.gif" alt="Germany">  GER</td>
											<td>First Division</td>
											<td>2M</td>
											<td>Professional</td>
											<td>51,500</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1899</td>
											<td>25.0</td>
										</tr><tr role="row" class="even">
											<td id="930" class="sorting_1">Frankfurt Erlenbruch</td><td>930</td>
											<td><img src="./Bet_files/GER.gif" alt="Germany">  GER</td>
											<td>Third Division</td>
											<td>0</td>
											<td>Professional</td>
											<td>12,542</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#2068B0"></span></td>
											<td>1899</td>
											<td>25.4</td>
										</tr><tr role="row" class="odd">
											<td id="1312" class="sorting_1">Fredrikstad</td><td>1312</td>
											<td><img src="./Bet_files/NOR.gif" alt="Norway">  NOR</td>
											<td>First Division</td>
											<td>71K</td>
											<td>Professional</td>
											<td>12,525</td>
											<td><span class="label" style="background:#E00000"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1903</td>
											<td>24.0</td>
										</tr><tr role="row" class="even">
											<td id="944" class="sorting_1">Freiburg</td><td>944</td>
											<td><img src="./Bet_files/GER.gif" alt="Germany">  GER</td>
											<td>First Division</td>
											<td>1M</td>
											<td>Professional</td>
											<td>24,000</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#E00000"></span></td>
											<td>1904</td>
											<td>24.4</td>
										</tr><tr role="row" class="odd">
											<td id="654" class="sorting_1">Fulham</td><td>654</td>
											<td><img src="./Bet_files/ENG.gif" alt="England">  ENG</td>
											<td>Sky Bet Championship</td>
											<td>400K</td>
											<td>Professional</td>
											<td>25,700</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
											<td>1879</td>
											<td>25.7</td>
										</tr><tr role="row" class="even">
											<td id="593" class="sorting_1">Galway Utd</td><td>593</td>
											<td><img src="./Bet_files/IRL.gif" alt="Ireland">  IRL</td>
											<td>Premier Division</td>
											<td>0</td>
											<td>Professional</td>
											<td>5,000</td>
											<td><span class="label" style="background:#B8D8E8"></span> <span class="label" style="background:#702020"></span></td>
											<td>1937</td>
											<td>22.3</td>
										</tr><tr role="row" class="odd">
											<td id="655" class="sorting_1">Gateshead</td><td>655</td>
											<td><img src="./Bet_files/ENG.gif" alt="England">  ENG</td>
											<td>Vanarama National</td>
											<td>35K</td>
											<td>Professional</td>
											<td>11,800</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1977</td>
											<td>22.3</td>
										</tr><tr role="row" class="even">
											<td id="920" class="sorting_1">Gelsenkirchen</td><td>920</td>
											<td><img src="./Bet_files/GER.gif" alt="Germany">  GER</td>
											<td>First Division</td>
											<td>9M</td>
											<td>Professional</td>
											<td>62,271</td>
											<td><span class="label" style="background:#0030A0"></span> <span class="label" style="background:#0030A0"></span></td>
											<td>1904</td>
											<td>25.2</td>
										</tr><tr role="row" class="odd">
											<td id="1132" class="sorting_1">Genoa</td><td>1132</td>
											<td><img src="./Bet_files/ITA.gif" alt="Italy">  ITA</td>
											<td>Serie A</td>
											<td>4M</td>
											<td>Professional</td>
											<td>36,599</td>
											<td><span class="label" style="background:#103048"></span> <span class="label" style="background:#B82838"></span></td>
											<td>1893</td>
											<td>25.6</td>
										</tr><tr role="row" class="even">
											<td id="1481" class="sorting_1">Gil Vicente</td><td>1481</td>
											<td><img src="./Bet_files/POR.gif" alt="Portugal">  POR</td>
											<td>Second League</td>
											<td>103K</td>
											<td>Professional</td>
											<td>12,504</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#E00808"></span></td>
											<td>1924</td>
											<td>22.1</td>
										</tr><tr role="row" class="odd">
											<td id="656" class="sorting_1">Gillingham</td><td>656</td>
											<td><img src="./Bet_files/ENG.gif" alt="England">  ENG</td>
											<td>Sky Bet League One</td>
											<td>50K</td>
											<td>Professional</td>
											<td>11,440</td>
											<td><span class="label" style="background:#002060"></span> <span class="label" style="background:#0840B0"></span></td>
											<td>1893</td>
											<td>24.9</td>
										</tr><tr role="row" class="even">
											<td id="87" class="sorting_1">Gimnasia (LP)</td><td>87</td>
											<td><img src="./Bet_files/ARG.gif" alt="Argentina">  ARG</td>
											<td>Premier Division</td>
											<td>461K</td>
											<td>Professional</td>
											<td>24,544</td>
											<td><span class="label" style="background:#002060"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1887</td>
											<td>27.4</td>
										</tr><tr role="row" class="odd">
											<td id="851" class="sorting_1">Girondins de Bordeaux</td><td>851</td>
											<td><img src="./Bet_files/FRA.gif" alt="France">  FRA</td>
											<td>Ligue 1</td>
											<td>3M</td>
											<td>Professional</td>
											<td>42,115</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#101838"></span></td>
											<td>1881</td>
											<td>24.7</td>
										</tr><tr role="row" class="even">
											<td id="1451" class="sorting_1">GKS Katowice</td><td>1451</td>
											<td><img src="./Bet_files/POL.gif" alt="Poland">  POL</td>
											<td>First Division</td>
											<td>72K</td>
											<td>Professional</td>
											<td>6,710</td>
											<td><span class="label" style="background:#F8F000"></span> <span class="label" style="background:#000000"></span></td>
											<td>1964</td>
											<td>24.8</td>
										</tr><tr role="row" class="odd">
											<td id="1015" class="sorting_1">Go Ahead Eagles</td><td>1015</td>
											<td><img src="./Bet_files/NED.gif" alt="Holland">  NED</td>
											<td>Eredivisie</td>
											<td>172K</td>
											<td>Professional</td>
											<td>10,000</td>
											<td><span class="label" style="background:#F8F000"></span> <span class="label" style="background:#E01808"></span></td>
											<td>1902</td>
											<td>25.7</td>
										</tr><tr role="row" class="even">
											<td id="1452" class="sorting_1">Gornik Zabrze</td><td>1452</td>
											<td><img src="./Bet_files/POL.gif" alt="Poland">  POL</td>
											<td>First Division</td>
											<td>0</td>
											<td>Professional</td>
											<td>22,400</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
											<td>1948</td>
											<td>24.7</td>
										</tr><tr role="row" class="odd">
											<td id="324" class="sorting_1">GRE</td><td>324</td>
											<td><img src="./Bet_files/BRA.gif" alt="Brazil">  BRA</td>
											<td>First Division</td>
											<td>1M</td>
											<td>Professional</td>
											<td>60,170</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#C80000"></span></td>
											<td>1903</td>
											<td>24.2</td>
										</tr><tr role="row" class="even">
											<td id="658" class="sorting_1">Grimsby</td><td>658</td>
											<td><img src="./Bet_files/ENG.gif" alt="England">  ENG</td>
											<td>Sky Bet League Two</td>
											<td>10K</td>
											<td>Professional</td>
											<td>9,052</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
											<td>1878</td>
											<td>26.2</td>
										</tr><tr role="row" class="odd">
											<td id="325" class="sorting_1">GUA</td><td>325</td>
											<td><img src="./Bet_files/BRA.gif" alt="Brazil">  BRA</td>
											<td>Third Division</td>
											<td>24K</td>
											<td>Professional</td>
											<td>30,888</td>
											<td><span class="label" style="background:#101010"></span> <span class="label" style="background:#A8F828"></span></td>
											<td>1911</td>
											<td>27.0</td>
										</tr><tr role="row" class="even">
											<td id="409" class="sorting_1">Guangzhou</td><td>409</td>
											<td><img src="./Bet_files/CHN.gif" alt="China">  CHN</td>
											<td>Super League</td>
											<td>23M</td>
											<td>Professional</td>
											<td>58,500</td>
											<td><span class="label" style="background:#D8B028"></span> <span class="label" style="background:#C80000"></span></td>
											<td>1994</td>
											<td>27.3</td>
										</tr><tr role="row" class="odd">
											<td id="433" class="sorting_1">Hajduk</td><td>433</td>
											<td><img src="./Bet_files/CRO(1).gif" alt="Croatia">  CRO</td>
											<td>First League</td>
											<td>129K</td>
											<td>Professional</td>
											<td>34,448</td>
											<td><span class="label" style="background:#0030A0"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1911</td>
											<td>22.6</td>
										</tr><tr role="row" class="even">
											<td id="1056" class="sorting_1">Haladas</td><td>1056</td>
											<td><img src="./Bet_files/HUN.gif" alt="Hungary">  HUN</td>
											<td>Division I</td>
											<td>0</td>
											<td>Professional</td>
											<td>14,000</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#006840"></span></td>
											<td>1919</td>
											<td>24.3</td>
										</tr><tr role="row" class="odd">
											<td id="947" class="sorting_1">Hamburg</td><td>947</td>
											<td><img src="./Bet_files/GER.gif" alt="Germany">  GER</td>
											<td>First Division</td>
											<td>0</td>
											<td>Professional</td>
											<td>57,000</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1887</td>
											<td>24.2</td>
										</tr><tr role="row" class="even">
											<td id="946" class="sorting_1">Hamburg St.Pauli</td><td>946</td>
											<td><img src="./Bet_files/GER.gif" alt="Germany">  GER</td>
											<td>Second Division</td>
											<td>517K</td>
											<td>Professional</td>
											<td>29,546</td>
											<td><span class="label" style="background:#582800"></span> <span class="label" style="background:#582800"></span></td>
											<td>1910</td>
											<td>24.7</td>
										</tr><tr role="row" class="odd">
											<td id="1572" class="sorting_1">Hamilton</td><td>1572</td>
											<td><img src="./Bet_files/SCO.gif" alt="Scotland">  SCO</td>
											<td>Ladbrokes Premiership</td>
											<td>100K</td>
											<td>Professional</td>
											<td>5,510</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
											<td>1874</td>
											<td>24.7</td>
										</tr><tr role="row" class="even">
											<td id="927" class="sorting_1">Hannover</td><td>927</td>
											<td><img src="./Bet_files/GER.gif" alt="Germany">  GER</td>
											<td>Second Division</td>
											<td>861K</td>
											<td>Professional</td>
											<td>49,000</td>
											<td><span class="label" style="background:#B00000"></span> <span class="label" style="background:#B00000"></span></td>
											<td>1896</td>
											<td>24.4</td>
										</tr><tr role="row" class="odd">
											<td id="1085" class="sorting_1">Hapoel Be'er-Sheva</td><td>1085</td>
											<td><img src="./Bet_files/ISR.gif" alt="Israel">  ISR</td>
											<td>Premier League</td>
											<td>172K</td>
											<td>Professional</td>
											<td>16,126</td>
											<td><span class="label" style="background:#F85048"></span> <span class="label" style="background:#E00000"></span></td>
											<td>1949</td>
											<td>25.6</td>
										</tr><tr role="row" class="even">
											<td id="1087" class="sorting_1">Hapoel Haifa</td><td>1087</td>
											<td><img src="./Bet_files/ISR.gif" alt="Israel">  ISR</td>
											<td>Premier League</td>
											<td>4K</td>
											<td>Professional</td>
											<td>5,000</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#E00000"></span></td>
											<td>1924</td>
											<td>25.5</td>
										</tr><tr role="row" class="odd">
											<td id="1089" class="sorting_1">Hapoel Petach-Tikva</td><td>1089</td>
											<td><img src="./Bet_files/ISR.gif" alt="Israel">  ISR</td>
											<td>National League</td>
											<td>0</td>
											<td>Professional</td>
											<td>11,500</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#1838F8"></span></td>
											<td>1930</td>
											<td>22.6</td>
										</tr><tr role="row" class="even">
											<td id="1088" class="sorting_1">Hapoel Rishon LeZion</td><td>1088</td>
											<td><img src="./Bet_files/ISR.gif" alt="Israel">  ISR</td>
											<td>National League</td>
											<td>31K</td>
											<td>Professional</td>
											<td>6,000</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#F87000"></span></td>
											<td>1940</td>
											<td>22.9</td>
										</tr><tr role="row" class="odd">
											<td id="1090" class="sorting_1">Hapoel Tel-Aviv</td><td>1090</td>
											<td><img src="./Bet_files/ISR.gif" alt="Israel">  ISR</td>
											<td>Premier League</td>
											<td>54K</td>
											<td>Professional</td>
											<td>11,500</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#D02028"></span></td>
											<td>1927</td>
											<td>23.8</td>
										</tr><tr role="row" class="even">
											<td id="661" class="sorting_1">Hartlepool</td><td>661</td>
											<td><img src="./Bet_files/ENG.gif" alt="England">  ENG</td>
											<td>Sky Bet League Two</td>
											<td>25K</td>
											<td>Professional</td>
											<td>7,856</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
											<td>1908</td>
											<td>25.0</td>
										</tr><tr role="row" class="odd">
											<td id="1326" class="sorting_1">Haugesund</td><td>1326</td>
											<td><img src="./Bet_files/NOR.gif" alt="Norway">  NOR</td>
											<td>Premier Division</td>
											<td>237K</td>
											<td>Professional</td>
											<td>8,983</td>
											<td><span class="label" style="background:#0050B8"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1993</td>
											<td>23.5</td>
										</tr><tr role="row" class="even">
											<td id="856" class="sorting_1">Havre Athletic Club</td><td>856</td>
											<td><img src="./Bet_files/FRA.gif" alt="France">  FRA</td>
											<td>Domino's Ligue 2</td>
											<td>431K</td>
											<td>Professional</td>
											<td>25,278</td>
											<td><span class="label" style="background:#002850"></span> <span class="label" style="background:#60C0F8"></span></td>
											<td>1872</td>
											<td>25.0</td>
										</tr><tr role="row" class="odd">
											<td id="1573" class="sorting_1">Hearts</td><td>1573</td>
											<td><img src="./Bet_files/SCO.gif" alt="Scotland">  SCO</td>
											<td>Ladbrokes Premiership</td>
											<td>200K</td>
											<td>Professional</td>
											<td>17,480</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#800020"></span></td>
											<td>1874</td>
											<td>22.9</td>
										</tr><tr role="row" class="even">
											<td id="1017" class="sorting_1">Helmond</td><td>1017</td>
											<td><img src="./Bet_files/NED.gif" alt="Holland">  NED</td>
											<td>Jupiler League</td>
											<td>43K</td>
											<td>Professional</td>
											<td>4,200</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#E01018"></span></td>
											<td>1967</td>
											<td>23.7</td>
										</tr><tr role="row" class="odd">
											<td id="1037" class="sorting_1">Heracles Almelo</td><td>1037</td>
											<td><img src="./Bet_files/NED.gif" alt="Holland">  NED</td>
											<td>Eredivisie</td>
											<td>215K</td>
											<td>Professional</td>
											<td>13,500</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#000000"></span></td>
											<td>1903</td>
											<td>24.7</td>
										</tr><tr role="row" class="even">
											<td id="1575" class="sorting_1">Hibernian</td><td>1575</td>
											<td><img src="./Bet_files/SCO.gif" alt="Scotland">  SCO</td>
											<td>Ladbrokes Championship</td>
											<td>219K</td>
											<td>Professional</td>
											<td>20,421</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#006830"></span></td>
											<td>1875</td>
											<td>23.4</td>
										</tr><tr role="row" class="odd">
											<td id="816" class="sorting_1">HJK</td><td>816</td>
											<td><img src="./Bet_files/FIN.gif" alt="Finland">  FIN</td>
											<td>Premier League</td>
											<td>345K</td>
											<td>Professional</td>
											<td>10,770</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#0030A0"></span></td>
											<td>1907</td>
											<td>24.9</td>
										</tr><tr role="row" class="even">
											<td id="1059" class="sorting_1">Honved</td><td>1059</td>
											<td><img src="./Bet_files/HUN.gif" alt="Hungary">  HUN</td>
											<td>Division I</td>
											<td>0</td>
											<td>Professional</td>
											<td>10,000</td>
											<td><span class="label" style="background:#C03008"></span> <span class="label" style="background:#000000"></span></td>
											<td>1909</td>
											<td>24.5</td>
										</tr><tr role="row" class="odd">
											<td id="472" class="sorting_1">Hradec Kralove</td><td>472</td>
											<td><img src="./Bet_files/CZE.gif" alt="Czech Republic">  CZE</td>
											<td>First Division</td>
											<td>239K</td>
											<td>Professional</td>
											<td>5,000</td>
											<td><span class="label" style="background:#E8E8E8"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1905</td>
											<td>25.6</td>
										</tr><tr role="row" class="even">
											<td id="664" class="sorting_1">Huddersfield</td><td>664</td>
											<td><img src="./Bet_files/ENG.gif" alt="England">  ENG</td>
											<td>Sky Bet Championship</td>
											<td>1M</td>
											<td>Professional</td>
											<td>24,590</td>
											<td><span class="label" style="background:#3878B0"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1908</td>
											<td>25.2</td>
										</tr><tr role="row" class="odd">
											<td id="665" class="sorting_1">Hull</td><td>665</td>
											<td><img src="./Bet_files/ENG.gif" alt="England">  ENG</td>
											<td>Premier Division</td>
											<td>6M</td>
											<td>Professional</td>
											<td>25,586</td>
											<td><span class="label" style="background:#F8A800"></span> <span class="label" style="background:#000000"></span></td>
											<td>1904</td>
											<td>26.0</td>
										</tr><tr role="row" class="even">
											<td id="88" class="sorting_1">Huracan</td><td>88</td>
											<td><img src="./Bet_files/ARG.gif" alt="Argentina">  ARG</td>
											<td>Premier Division</td>
											<td>768K</td>
											<td>Professional</td>
											<td>48,314</td>
											<td><span class="label" style="background:#E00000"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1908</td>
											<td>28.8</td>
										</tr><tr role="row" class="odd">
											<td id="89" class="sorting_1">Independiente</td><td>89</td>
											<td><img src="./Bet_files/ARG.gif" alt="Argentina">  ARG</td>
											<td>Premier Division</td>
											<td>0</td>
											<td>Professional</td>
											<td>45,562</td>
											<td><span class="label" style="background:#D80000"></span> <span class="label" style="background:#D80000"></span></td>
											<td>1905</td>
											<td>26.1</td>
										</tr><tr role="row" class="even">
											<td id="326" class="sorting_1">INT</td><td>326</td>
											<td><img src="./Bet_files/BRA.gif" alt="Brazil">  BRA</td>
											<td>First Division</td>
											<td>2M</td>
											<td>Professional</td>
											<td>50,128</td>
											<td><span class="label" style="background:#800040"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1909</td>
											<td>25.5</td>
										</tr><tr role="row" class="odd">
											<td id="1135" class="sorting_1">Inter</td><td>1135</td>
											<td><img src="./Bet_files/ITA.gif" alt="Italy">  ITA</td>
											<td>Serie A</td>
											<td>17M</td>
											<td>Professional</td>
											<td>80,018</td>
											<td><span class="label" style="background:#0078F8"></span> <span class="label" style="background:#000000"></span></td>
											<td>1908</td>
											<td>27.6</td>
										</tr><tr role="row" class="even">
											<td id="667" class="sorting_1">Ipswich</td><td>667</td>
											<td><img src="./Bet_files/ENG.gif" alt="England">  ENG</td>
											<td>Sky Bet Championship</td>
											<td>500K</td>
											<td>Professional</td>
											<td>30,311</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#1830E8"></span></td>
											<td>1878</td>
											<td>26.0</td>
										</tr><tr role="row" class="odd">
											<td id="976" class="sorting_1">Iraklis</td><td>976</td>
											<td><img src="./Bet_files/GRE.gif" alt="Greece">  GRE</td>
											<td>Superleague</td>
											<td>0</td>
											<td>Professional</td>
											<td>27,770</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#0030A0"></span></td>
											<td>1908</td>
											<td>23.9</td>
										</tr><tr role="row" class="even">
											<td id="468" class="sorting_1">Jablonec</td><td>468</td>
											<td><img src="./Bet_files/CZE.gif" alt="Czech Republic">  CZE</td>
											<td>First Division</td>
											<td>559K</td>
											<td>Professional</td>
											<td>6,108</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#006030"></span></td>
											<td>1945</td>
											<td>24.5</td>
										</tr><tr role="row" class="odd">
											<td id="419" class="sorting_1">Junior</td><td>419</td>
											<td><img src="./Bet_files/COL.gif" alt="Colombia">  COL</td>
											<td>First Division</td>
											<td>3M</td>
											<td>Professional</td>
											<td>49,612</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#E00000"></span></td>
											<td>1924</td>
											<td>27.1</td>
										</tr><tr role="row" class="even">
											<td id="327" class="sorting_1">JUV</td><td>327</td>
											<td><img src="./Bet_files/BRA.gif" alt="Brazil">  BRA</td>
											<td>Third Division</td>
											<td>0</td>
											<td>Professional</td>
											<td>23,726</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#008030"></span></td>
											<td>1913</td>
											<td>25.9</td>
										</tr><tr role="row" class="odd">
											<td id="1138" class="sorting_1">Juve Stabia</td><td>1138</td>
											<td><img src="./Bet_files/ITA.gif" alt="Italy">  ITA</td>
											<td>Serie C/C</td>
											<td>129K</td>
											<td>Professional</td>
											<td>12,800</td>
											<td><span class="label" style="background:#F8F000"></span> <span class="label" style="background:#083078"></span></td>
											<td>1907</td>
											<td>25.5</td>
										</tr><tr role="row" class="even">
											<td id="1139" class="sorting_1">Juventus</td><td>1139</td>
											<td><img src="./Bet_files/ITA.gif" alt="Italy">  ITA</td>
											<td>Serie A</td>
											<td>21M</td>
											<td>Professional</td>
											<td>41,475</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
											<td>1897</td>
											<td>28.0</td>
										</tr><tr role="row" class="odd">
											<td id="945" class="sorting_1">Kaiserslautern</td><td>945</td>
											<td><img src="./Bet_files/GER.gif" alt="Germany">  GER</td>
											<td>Second Division</td>
											<td>431K</td>
											<td>Professional</td>
											<td>47,650</td>
											<td><span class="label" style="background:#E00000"></span> <span class="label" style="background:#901000"></span></td>
											<td>1900</td>
											<td>24.2</td>
										</tr><tr role="row" class="even">
											<td id="931" class="sorting_1">Karlsruhe</td><td>931</td>
											<td><img src="./Bet_files/GER.gif" alt="Germany">  GER</td>
											<td>Second Division</td>
											<td>43K</td>
											<td>Professional</td>
											<td>29,699</td>
											<td><span class="label" style="background:#002080"></span> <span class="label" style="background:#0030A0"></span></td>
											<td>1894</td>
											<td>24.6</td>
										</tr><tr role="row" class="odd">
											<td id="1469" class="sorting_1">KGHM Zaglebie</td><td>1469</td>
											<td><img src="./Bet_files/POL.gif" alt="Poland">  POL</td>
											<td>LOTTO Ekstraklasa</td>
											<td>401K</td>
											<td>Professional</td>
											<td>16,068</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F84000"></span></td>
											<td>1946</td>
											<td>25.8</td>
										</tr><tr role="row" class="even">
											<td id="669" class="sorting_1">Kidderminster</td><td>669</td>
											<td><img src="./Bet_files/ENG.gif" alt="England">  ENG</td>
											<td>Vanarama North</td>
											<td>18K</td>
											<td>Professional</td>
											<td>6,444</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#E00000"></span></td>
											<td>1886</td>
											<td>22.3</td>
										</tr><tr role="row" class="odd">
											<td id="916" class="sorting_1">Koln</td><td>916</td>
											<td><img src="./Bet_files/GER.gif" alt="Germany">  GER</td>
											<td>First Division</td>
											<td>4M</td>
											<td>Professional</td>
											<td>50,000</td>
											<td><span class="label" style="background:#C80000"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1948</td>
											<td>25.0</td>
										</tr><tr role="row" class="even">
											<td id="1076" class="sorting_1">KR</td><td>1076</td>
											<td><img src="./Bet_files/ISL.gif" alt="Iceland">  ISL</td>
											<td>Premier Division</td>
											<td>134K</td>
											<td>Professional</td>
											<td>2,781</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#000000"></span></td>
											<td>1899</td>
											<td>23.8</td>
										</tr><tr role="row" class="odd">
											<td id="258" class="sorting_1">KRC Genk</td><td>258</td>
											<td><img src="./Bet_files/BEL.gif" alt="Belgium">  BEL</td>
											<td>Pro League</td>
											<td>2M</td>
											<td>Professional</td>
											<td>24,604</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#0050D0"></span></td>
											<td>1923</td>
											<td>22.0</td>
										</tr><tr role="row" class="even">
											<td id="1523" class="sorting_1">Krylja Sovetov</td><td>1523</td>
											<td><img src="./Bet_files/RUS.gif" alt="Russia">  RUS</td>
											<td>Premier Division</td>
											<td>43K</td>
											<td>Professional</td>
											<td>30,251</td>
											<td><span class="label" style="background:#60C0F8"></span> <span class="label" style="background:#60A0D0"></span></td>
											<td>1942</td>
											<td>25.0</td>
										</tr><tr role="row" class="odd">
											<td id="818" class="sorting_1">KuPS</td><td>818</td>
											<td><img src="./Bet_files/FIN.gif" alt="Finland">  FIN</td>
											<td>Premier League</td>
											<td>9K</td>
											<td>Professional</td>
											<td>4,700</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F8F000"></span></td>
											<td>1923</td>
											<td>23.9</td>
										</tr><tr role="row" class="even">
											<td id="231" class="sorting_1">KV Kortrijk</td><td>231</td>
											<td><img src="./Bet_files/BEL.gif" alt="Belgium">  BEL</td>
											<td>Pro League</td>
											<td>0</td>
											<td>Professional</td>
											<td>9,399</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#E00000"></span></td>
											<td>1901</td>
											<td>26.0</td>
										</tr><tr role="row" class="odd">
											<td id="232" class="sorting_1">KV Mechelen</td><td>232</td>
											<td><img src="./Bet_files/BEL.gif" alt="Belgium">  BEL</td>
											<td>Pro League</td>
											<td>258K</td>
											<td>Professional</td>
											<td>17,500</td>
											<td><span class="label" style="background:#F8F000"></span> <span class="label" style="background:#E00000"></span></td>
											<td>1904</td>
											<td>24.7</td>
										</tr><tr role="row" class="even">
											<td id="855" class="sorting_1">La Berrichonne</td><td>855</td>
											<td><img src="./Bet_files/FRA.gif" alt="France">  FRA</td>
											<td>National</td>
											<td>258K</td>
											<td>Professional</td>
											<td>17,072</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
											<td>1883</td>
											<td>25.4</td>
										</tr><tr role="row" class="odd">
											<td id="90" class="sorting_1">Lanus</td><td>90</td>
											<td><img src="./Bet_files/ARG.gif" alt="Argentina">  ARG</td>
											<td>Premier Division</td>
											<td>768K</td>
											<td>Professional</td>
											<td>46,619</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#680810"></span></td>
											<td>1915</td>
											<td>26.9</td>
										</tr><tr role="row" class="even">
											<td id="978" class="sorting_1">Larisa</td><td>978</td>
											<td><img src="./Bet_files/GRE.gif" alt="Greece">  GRE</td>
											<td>Superleague</td>
											<td>0</td>
											<td>Professional</td>
											<td>16,118</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#800020"></span></td>
											<td>1964</td>
											<td>24.8</td>
										</tr><tr role="row" class="odd">
											<td id="154" class="sorting_1">LASK Linz</td><td>154</td>
											<td><img src="./Bet_files/AUT.gif" alt="Austria">  AUT</td>
											<td>First Division</td>
											<td>0</td>
											<td>Professional</td>
											<td>7,152</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1908</td>
											<td>21.3</td>
										</tr><tr role="row" class="even">
											<td id="1140" class="sorting_1">Lazio</td><td>1140</td>
											<td><img src="./Bet_files/ITA.gif" alt="Italy">  ITA</td>
											<td>Serie A</td>
											<td>6M</td>
											<td>Professional</td>
											<td>70,634</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#A0C8F0"></span></td>
											<td>1900</td>
											<td>24.9</td>
										</tr><tr role="row" class="odd">
											<td id="1141" class="sorting_1">Lecce</td><td>1141</td>
											<td><img src="./Bet_files/ITA.gif" alt="Italy">  ITA</td>
											<td>Serie C/C</td>
											<td>258K</td>
											<td>Professional</td>
											<td>33,876</td>
											<td><span class="label" style="background:#E00000"></span> <span class="label" style="background:#F8F000"></span></td>
											<td>1908</td>
											<td>26.0</td>
										</tr><tr role="row" class="even">
											<td id="1455" class="sorting_1">Lech</td><td>1455</td>
											<td><img src="./Bet_files/POL.gif" alt="Poland">  POL</td>
											<td>LOTTO Ekstraklasa</td>
											<td>301K</td>
											<td>Professional</td>
											<td>43,269</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
											<td>1922</td>
											<td>25.7</td>
										</tr><tr role="row" class="odd">
											<td id="671" class="sorting_1">Leeds</td><td>671</td>
											<td><img src="./Bet_files/ENG.gif" alt="England">  ENG</td>
											<td>Sky Bet Championship</td>
											<td>100K</td>
											<td>Professional</td>
											<td>37,890</td>
											<td><span class="label" style="background:#0030A0"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1919</td>
											<td>24.8</td>
										</tr><tr role="row" class="even">
											<td id="1456" class="sorting_1">Legia</td><td>1456</td>
											<td><img src="./Bet_files/POL.gif" alt="Poland">  POL</td>
											<td>LOTTO Ekstraklasa</td>
											<td>1M</td>
											<td>Professional</td>
											<td>30,967</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1916</td>
											<td>27.3</td>
										</tr><tr role="row" class="odd">
											<td id="673" class="sorting_1">Leicester</td><td>673</td>
											<td><img src="./Bet_files/ENG.gif" alt="England">  ENG</td>
											<td>Premier Division</td>
											<td>10M</td>
											<td>Professional</td>
											<td>32,312</td>
											<td><span class="label" style="background:#0030A0"></span> <span class="label" style="background:#002080"></span></td>
											<td>1884</td>
											<td>27.2</td>
										</tr><tr role="row" class="even">
											<td id="1493" class="sorting_1">Leiria</td><td>1493</td>
											<td><img src="./Bet_files/POR.gif" alt="Portugal">  POR</td>
											<td>PT Championship</td>
											<td>43K</td>
											<td>Professional</td>
											<td>23,888</td>
											<td><span class="label" style="background:#E00000"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1966</td>
											<td>22.9</td>
										</tr><tr role="row" class="odd">
											<td id="1259" class="sorting_1">Leon</td><td>1259</td>
											<td><img src="./Bet_files/MEX.gif" alt="Mexico">  MEX</td>
											<td>First Division</td>
											<td>3M</td>
											<td>Professional</td>
											<td>33,800</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#40B868"></span></td>
											<td>1944</td>
											<td>27.6</td>
										</tr><tr role="row" class="even">
											<td id="979" class="sorting_1">Levadeiakos</td><td>979</td>
											<td><img src="./Bet_files/GRE.gif" alt="Greece">  GRE</td>
											<td>Superleague</td>
											<td>0</td>
											<td>Professional</td>
											<td>5,915</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
											<td>1961</td>
											<td>26.2</td>
										</tr><tr role="row" class="odd">
											<td id="901" class="sorting_1">Leverkusen</td><td>901</td>
											<td><img src="./Bet_files/GER.gif" alt="Germany">  GER</td>
											<td>First Division</td>
											<td>3M</td>
											<td>Professional</td>
											<td>30,210</td>
											<td><span class="label" style="background:#E00000"></span> <span class="label" style="background:#000000"></span></td>
											<td>1904</td>
											<td>23.6</td>
										</tr><tr role="row" class="even">
											<td id="349" class="sorting_1">Levski</td><td>349</td>
											<td><img src="./Bet_files/BUL.gif" alt="Bulgaria">  BUL</td>
											<td>First League</td>
											<td>132K</td>
											<td>Professional</td>
											<td>19,000</td>
											<td><span class="label" style="background:#2838A0"></span> <span class="label" style="background:#1068F8"></span></td>
											<td>1914</td>
											<td>25.8</td>
										</tr><tr role="row" class="odd">
											<td id="674" class="sorting_1">Leyton Orient</td><td>674</td>
											<td><img src="./Bet_files/ENG.gif" alt="England">  ENG</td>
											<td>Sky Bet League Two</td>
											<td>0</td>
											<td>Professional</td>
											<td>9,311</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F00000"></span></td>
											<td>1881</td>
											<td>24.1</td>
										</tr><tr role="row" class="even">
											<td id="268" class="sorting_1">Lierse</td><td>268</td>
											<td><img src="./Bet_files/BEL.gif" alt="Belgium">  BEL</td>
											<td>Pro League B</td>
											<td>0</td>
											<td>Professional</td>
											<td>14,538</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F8F000"></span></td>
											<td>1906</td>
											<td>23.5</td>
										</tr><tr role="row" class="odd">
											<td id="1341" class="sorting_1">Lillestrom</td><td>1341</td>
											<td><img src="./Bet_files/NOR.gif" alt="Norway">  NOR</td>
											<td>Premier Division</td>
											<td>57K</td>
											<td>Professional</td>
											<td>12,200</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F0D868"></span></td>
											<td>1917</td>
											<td>23.6</td>
										</tr><tr role="row" class="even">
											<td id="675" class="sorting_1">Lincoln</td><td>675</td>
											<td><img src="./Bet_files/ENG.gif" alt="England">  ENG</td>
											<td>Vanarama National</td>
											<td>86K</td>
											<td>Professional</td>
											<td>10,120</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#E00000"></span></td>
											<td>1884</td>
											<td>25.4</td>
										</tr><tr role="row" class="odd">
											<td id="676" class="sorting_1">Liverpool</td><td>676</td>
											<td><img src="./Bet_files/ENG.gif" alt="England">  ENG</td>
											<td>Premier Division</td>
											<td>40M</td>
											<td>Professional</td>
											<td>54,074</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#D81818"></span></td>
											<td>1892</td>
											<td>24.7</td>
										</tr><tr role="row" class="even">
											<td id="265" class="sorting_1">Lokeren</td><td>265</td>
											<td><img src="./Bet_files/BEL.gif" alt="Belgium">  BEL</td>
											<td>Pro League</td>
											<td>775K</td>
											<td>Professional</td>
											<td>12,461</td>
											<td><span class="label" style="background:#F8D000"></span> <span class="label" style="background:#000000"></span></td>
											<td>1915</td>
											<td>26.8</td>
										</tr><tr role="row" class="odd">
											<td id="350" class="sorting_1">Lokomotiv Gorna</td><td>350</td>
											<td><img src="./Bet_files/BUL.gif" alt="Bulgaria">  BUL</td>
											<td>First League</td>
											<td>15K</td>
											<td>Professional</td>
											<td>11,800</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#000000"></span></td>
											<td>1932</td>
											<td>26.6</td>
										</tr><tr role="row" class="even">
											<td id="1525" class="sorting_1">Lokomotiv Moscow</td><td>1525</td>
											<td><img src="./Bet_files/RUS.gif" alt="Russia">  RUS</td>
											<td>Premier Division</td>
											<td>861K</td>
											<td>Professional</td>
											<td>28,800</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
											<td>1923</td>
											<td>28.0</td>
										</tr><tr role="row" class="odd">
											<td id="351" class="sorting_1">Lokomotiv Plovdiv</td><td>351</td>
											<td><img src="./Bet_files/BUL.gif" alt="Bulgaria">  BUL</td>
											<td>First League</td>
											<td>15K</td>
											<td>Professional</td>
											<td>11,800</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#000000"></span></td>
											<td>1936</td>
											<td>26.3</td>
										</tr><tr role="row" class="even">
											<td id="352" class="sorting_1">Lokomotiv Sofia</td><td>352</td>
											<td><img src="./Bet_files/BUL.gif" alt="Bulgaria">  BUL</td>
											<td>Second League</td>
											<td>0</td>
											<td>Professional</td>
											<td>15,000</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
											<td>1929</td>
											<td>23.8</td>
										</tr><tr role="row" class="odd">
											<td id="858" class="sorting_1">LOSC</td><td>858</td>
											<td><img src="./Bet_files/FRA.gif" alt="France">  FRA</td>
											<td>Ligue 1</td>
											<td>4M</td>
											<td>Professional</td>
											<td>50,083</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
											<td>1944</td>
											<td>26.7</td>
										</tr><tr role="row" class="even">
											<td id="1144" class="sorting_1">Lucchese</td><td>1144</td>
											<td><img src="./Bet_files/ITA.gif" alt="Italy">  ITA</td>
											<td>Serie C/A</td>
											<td>86K</td>
											<td>Professional</td>
											<td>11,523</td>
											<td><span class="label" style="background:#E00000"></span> <span class="label" style="background:#000000"></span></td>
											<td>1905</td>
											<td>25.7</td>
										</tr><tr role="row" class="odd">
											<td id="1145" class="sorting_1">Lumezzane</td><td>1145</td>
											<td><img src="./Bet_files/ITA.gif" alt="Italy">  ITA</td>
											<td>Serie C/B</td>
											<td>60K</td>
											<td>Professional</td>
											<td>4,004</td>
											<td><span class="label" style="background:#002060"></span> <span class="label" style="background:#F00000"></span></td>
											<td>1948</td>
											<td>22.6</td>
										</tr><tr role="row" class="even">
											<td id="677" class="sorting_1">Luton</td><td>677</td>
											<td><img src="./Bet_files/ENG.gif" alt="England">  ENG</td>
											<td>Sky Bet League Two</td>
											<td>70K</td>
											<td>Professional</td>
											<td>10,110</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#E85020"></span></td>
											<td>1885</td>
											<td>23.9</td>
										</tr><tr role="row" class="odd">
											<td id="533" class="sorting_1">Lyngby</td><td>533</td>
											<td><img src="./Bet_files/DEN.gif" alt="Denmark">  DEN</td>
											<td>Superliga</td>
											<td>58K</td>
											<td>Professional</td>
											<td>10,106</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
											<td>1921</td>
											<td>27.1</td>
										</tr><tr role="row" class="even">
											<td id="1093" class="sorting_1">Maccabi Haifa</td><td>1093</td>
											<td><img src="./Bet_files/ISR.gif" alt="Israel">  ISR</td>
											<td>Premier League</td>
											<td>431K</td>
											<td>Professional</td>
											<td>13,610</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#108830"></span></td>
											<td>1913</td>
											<td>23.6</td>
										</tr><tr role="row" class="odd">
											<td id="1094" class="sorting_1">Maccabi Herzliya</td><td>1094</td>
											<td><img src="./Bet_files/ISR.gif" alt="Israel">  ISR</td>
											<td>National League</td>
											<td>19K</td>
											<td>Professional</td>
											<td>4,200</td>
											<td><span class="label" style="background:#000030"></span> <span class="label" style="background:#F8F000"></span></td>
											<td>1937</td>
											<td>23.1</td>
										</tr><tr role="row" class="even">
											<td id="1095" class="sorting_1">Maccabi Netanya</td><td>1095</td>
											<td><img src="./Bet_files/ISR.gif" alt="Israel">  ISR</td>
											<td>National League</td>
											<td>38K</td>
											<td>Professional</td>
											<td>13,610</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F8F000"></span></td>
											<td>1936</td>
											<td>24.4</td>
										</tr><tr role="row" class="odd">
											<td id="1096" class="sorting_1">Maccabi Petach-Tikva</td><td>1096</td>
											<td><img src="./Bet_files/ISR.gif" alt="Israel">  ISR</td>
											<td>Premier League</td>
											<td>43K</td>
											<td>Professional</td>
											<td>11,500</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#0050D0"></span></td>
											<td>1912</td>
											<td>23.0</td>
										</tr><tr role="row" class="even">
											<td id="1097" class="sorting_1">Maccabi Tel-Aviv</td><td>1097</td>
											<td><img src="./Bet_files/ISR.gif" alt="Israel">  ISR</td>
											<td>Premier League</td>
											<td>2M</td>
											<td>Professional</td>
											<td>13,610</td>
											<td><span class="label" style="background:#0050D0"></span> <span class="label" style="background:#F8F000"></span></td>
											<td>1906</td>
											<td>23.8</td>
										</tr><tr role="row" class="odd">
											<td id="678" class="sorting_1">Macclesfield</td><td>678</td>
											<td><img src="./Bet_files/ENG.gif" alt="England">  ENG</td>
											<td>Vanarama National</td>
											<td>0</td>
											<td>Professional</td>
											<td>5,988</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#204098"></span></td>
											<td>1874</td>
											<td>24.7</td>
										</tr><tr role="row" class="even">
											<td id="918" class="sorting_1">Mainz</td><td>918</td>
											<td><img src="./Bet_files/GER.gif" alt="Germany">  GER</td>
											<td>First Division</td>
											<td>861K</td>
											<td>Professional</td>
											<td>34,000</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#C80000"></span></td>
											<td>1905</td>
											<td>24.5</td>
										</tr><tr role="row" class="odd">
											<td id="679" class="sorting_1">Man City</td><td>679</td>
											<td><img src="./Bet_files/ENG.gif" alt="England">  ENG</td>
											<td>Premier Division</td>
											<td>29M</td>
											<td>Professional</td>
											<td>55,097</td>
											<td><span class="label" style="background:#304878"></span> <span class="label" style="background:#98D0F0"></span></td>
											<td>1880</td>
											<td>27.6</td>
										</tr><tr role="row" class="even">
											<td id="680" class="sorting_1">Man Utd</td><td>680</td>
											<td><img src="./Bet_files/ENG.gif" alt="England">  ENG</td>
											<td>Premier Division</td>
											<td>31M</td>
											<td>Professional</td>
											<td>75,635</td>
											<td><span class="label" style="background:#E00000"></span> <span class="label" style="background:#C80000"></span></td>
											<td>1878</td>
											<td>26.1</td>
										</tr><tr role="row" class="odd">
											<td id="681" class="sorting_1">Mansfield</td><td>681</td>
											<td><img src="./Bet_files/ENG.gif" alt="England">  ENG</td>
											<td>Sky Bet League Two</td>
											<td>25K</td>
											<td>Professional</td>
											<td>9,186</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
											<td>1897</td>
											<td>25.8</td>
										</tr><tr role="row" class="even">
											<td id="1476" class="sorting_1">Maritimo</td><td>1476</td>
											<td><img src="./Bet_files/POR.gif" alt="Portugal">  POR</td>
											<td>Premier League</td>
											<td>323K</td>
											<td>Professional</td>
											<td>7,200</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
											<td>1910</td>
											<td>25.7</td>
										</tr><tr role="row" class="odd">
											<td id="425" class="sorting_1">Medellin</td><td>425</td>
											<td><img src="./Bet_files/COL.gif" alt="Colombia">  COL</td>
											<td>First Division</td>
											<td>3M</td>
											<td>Professional</td>
											<td>48,700</td>
											<td><span class="label" style="background:#101050"></span> <span class="label" style="background:#E00000"></span></td>
											<td>1914</td>
											<td>26.2</td>
										</tr><tr role="row" class="even">
											<td id="685" class="sorting_1">Middlesbrough</td><td>685</td>
											<td><img src="./Bet_files/ENG.gif" alt="England">  ENG</td>
											<td>Premier Division</td>
											<td>3M</td>
											<td>Professional</td>
											<td>34,746</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
											<td>1876</td>
											<td>26.4</td>
										</tr><tr role="row" class="odd">
											<td id="426" class="sorting_1">Millonarios</td><td>426</td>
											<td><img src="./Bet_files/COL.gif" alt="Colombia">  COL</td>
											<td>First Division</td>
											<td>2M</td>
											<td>Professional</td>
											<td>40,312</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#0050D0"></span></td>
											<td>1946</td>
											<td>27.3</td>
										</tr><tr role="row" class="even">
											<td id="686" class="sorting_1">Millwall</td><td>686</td>
											<td><img src="./Bet_files/ENG.gif" alt="England">  ENG</td>
											<td>Sky Bet League One</td>
											<td>0</td>
											<td>Professional</td>
											<td>20,146</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
											<td>1885</td>
											<td>24.4</td>
										</tr><tr role="row" class="odd">
											<td id="1147" class="sorting_1">Modena</td><td>1147</td>
											<td><img src="./Bet_files/ITA.gif" alt="Italy">  ITA</td>
											<td>Serie C/B</td>
											<td>258K</td>
											<td>Professional</td>
											<td>21,092</td>
											<td><span class="label" style="background:#002060"></span> <span class="label" style="background:#F8D000"></span></td>
											<td>1912</td>
											<td>23.3</td>
										</tr><tr role="row" class="even">
											<td id="1353" class="sorting_1">Molde</td><td>1353</td>
											<td><img src="./Bet_files/NOR.gif" alt="Norway">  NOR</td>
											<td>Premier Division</td>
											<td>2M</td>
											<td>Professional</td>
											<td>11,249</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#0068F8"></span></td>
											<td>1911</td>
											<td>23.8</td>
										</tr><tr role="row" class="odd">
											<td id="353" class="sorting_1">Montana</td><td>353</td>
											<td><img src="./Bet_files/BUL.gif" alt="Bulgaria">  BUL</td>
											<td>First League</td>
											<td>15K</td>
											<td>Professional</td>
											<td>8,114</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#0050D0"></span></td>
											<td>1921</td>
											<td>25.2</td>
										</tr><tr role="row" class="even">
											<td id="1257" class="sorting_1">Monterrey</td><td>1257</td>
											<td><img src="./Bet_files/MEX.gif" alt="Mexico">  MEX</td>
											<td>First Division</td>
											<td>6M</td>
											<td>Professional</td>
											<td>52,000</td>
											<td><span class="label" style="background:#002060"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1945</td>
											<td>26.4</td>
										</tr><tr role="row" class="odd">
											<td id="859" class="sorting_1">Montpellier HSC</td><td>859</td>
											<td><img src="./Bet_files/FRA.gif" alt="France">  FRA</td>
											<td>Ligue 1</td>
											<td>4M</td>
											<td>Professional</td>
											<td>32,950</td>
											<td><span class="label" style="background:#F87000"></span> <span class="label" style="background:#002060"></span></td>
											<td>1974</td>
											<td>26.7</td>
										</tr><tr role="row" class="even">
											<td id="687" class="sorting_1">Morecambe</td><td>687</td>
											<td><img src="./Bet_files/ENG.gif" alt="England">  ENG</td>
											<td>Sky Bet League Two</td>
											<td>0</td>
											<td>Professional</td>
											<td>6,476</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
											<td>1920</td>
											<td>24.1</td>
										</tr><tr role="row" class="odd">
											<td id="1571" class="sorting_1">Morton</td><td>1571</td>
											<td><img src="./Bet_files/SCO.gif" alt="Scotland">  SCO</td>
											<td>Ladbrokes Championship</td>
											<td>20K</td>
											<td>Professional</td>
											<td>11,589</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
											<td>1874</td>
											<td>21.6</td>
										</tr><tr role="row" class="even">
											<td id="1060" class="sorting_1">MTK</td><td>1060</td>
											<td><img src="./Bet_files/HUN.gif" alt="Hungary">  HUN</td>
											<td>Division I</td>
											<td>0</td>
											<td>Professional</td>
											<td>10,000</td>
											<td><span class="label" style="background:#2850A0"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1888</td>
											<td>25.7</td>
										</tr><tr role="row" class="odd">
											<td id="955" class="sorting_1">Munchen Lions</td><td>955</td>
											<td><img src="./Bet_files/GER.gif" alt="Germany">  GER</td>
											<td>Second Division</td>
											<td>0</td>
											<td>Professional</td>
											<td>75,024</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#90C0F0"></span></td>
											<td>1860</td>
											<td>26.3</td>
										</tr><tr role="row" class="even">
											<td id="1446" class="sorting_1">Municipal</td><td>1446</td>
											<td><img src="./Bet_files/PER.gif" alt="Peru">  PER</td>
											<td>First Division</td>
											<td>192K</td>
											<td>Professional</td>
											<td>12,000</td>
											<td><span class="label" style="background:#E00000"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1935</td>
											<td>26.7</td>
										</tr><tr role="row" class="odd">
											<td id="935" class="sorting_1">Munster</td><td>935</td>
											<td><img src="./Bet_files/GER.gif" alt="Germany">  GER</td>
											<td>Third Division</td>
											<td>0</td>
											<td>Professional</td>
											<td>15,050</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
											<td>1906</td>
											<td>24.8</td>
										</tr><tr role="row" class="even">
											<td id="1022" class="sorting_1">MVV</td><td>1022</td>
											<td><img src="./Bet_files/NED.gif" alt="Holland">  NED</td>
											<td>Jupiler League</td>
											<td>7K</td>
											<td>Professional</td>
											<td>8,800</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#E03030"></span></td>
											<td>1902</td>
											<td>21.7</td>
										</tr><tr role="row" class="odd">
											<td id="1025" class="sorting_1">N.E.C.</td><td>1025</td>
											<td><img src="./Bet_files/NED.gif" alt="Holland">  NED</td>
											<td>Eredivisie</td>
											<td>43K</td>
											<td>Professional</td>
											<td>12,500</td>
											<td><span class="label" style="background:#00A858"></span> <span class="label" style="background:#F03028"></span></td>
											<td>1900</td>
											<td>22.8</td>
										</tr><tr role="row" class="even">
											<td id="1024" class="sorting_1">NAC</td><td>1024</td>
											<td><img src="./Bet_files/NED.gif" alt="Holland">  NED</td>
											<td>Jupiler League</td>
											<td>43K</td>
											<td>Professional</td>
											<td>19,000</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#E0B010"></span></td>
											<td>1912</td>
											<td>22.1</td>
										</tr><tr role="row" class="odd">
											<td id="1150" class="sorting_1">Napoli</td><td>1150</td>
											<td><img src="./Bet_files/ITA.gif" alt="Italy">  ITA</td>
											<td>Serie A</td>
											<td>14M</td>
											<td>Professional</td>
											<td>60,240</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#4098D8"></span></td>
											<td>1926</td>
											<td>25.5</td>
										</tr><tr role="row" class="even">
											<td id="328" class="sorting_1">NAU</td><td>328</td>
											<td><img src="./Bet_files/BRA.gif" alt="Brazil">  BRA</td>
											<td>Second Division</td>
											<td>119K</td>
											<td>Professional</td>
											<td>45,500</td>
											<td><span class="label" style="background:#0078F8"></span> <span class="label" style="background:#205090"></span></td>
											<td>1901</td>
											<td>25.6</td>
										</tr><tr role="row" class="odd">
											<td id="1258" class="sorting_1">Necaxa</td><td>1258</td>
											<td><img src="./Bet_files/MEX.gif" alt="Mexico">  MEX</td>
											<td>First Division</td>
											<td>231K</td>
											<td>Professional</td>
											<td>25,000</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#E00000"></span></td>
											<td>1923</td>
											<td>28.4</td>
										</tr><tr role="row" class="even">
											<td id="307" class="sorting_1">Neman Grodno</td><td>307</td>
											<td><img src="./Bet_files/BLR.gif" alt="Belarus">  BLR</td>
											<td>Highest League</td>
											<td>4K</td>
											<td>Professional</td>
											<td>8,800</td>
											<td><span class="label" style="background:#308058"></span> <span class="label" style="background:#F0C808"></span></td>
											<td>1964</td>
											<td>26.0</td>
										</tr><tr role="row" class="odd">
											<td id="688" class="sorting_1">Newcastle</td><td>688</td>
											<td><img src="./Bet_files/ENG.gif" alt="England">  ENG</td>
											<td>Sky Bet Championship</td>
											<td>5M</td>
											<td>Professional</td>
											<td>52,404</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#000000"></span></td>
											<td>1892</td>
											<td>25.3</td>
										</tr><tr role="row" class="even">
											<td id="91" class="sorting_1">Newell's</td><td>91</td>
											<td><img src="./Bet_files/ARG.gif" alt="Argentina">  ARG</td>
											<td>Premier Division</td>
											<td>2M</td>
											<td>Professional</td>
											<td>42,000</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#C00008"></span></td>
											<td>1903</td>
											<td>27.5</td>
										</tr><tr role="row" class="odd">
											<td id="581" class="sorting_1">Newport Co</td><td>581</td>
											<td><img src="./Bet_files/ENG.gif" alt="England">  ENG</td>
											<td>Sky Bet League Two</td>
											<td>20K</td>
											<td>Professional</td>
											<td>11,676</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F8A800"></span></td>
											<td>1989</td>
											<td>24.0</td>
										</tr><tr role="row" class="even">
											<td id="860" class="sorting_1">Nimes Olympique</td><td>860</td>
											<td><img src="./Bet_files/FRA.gif" alt="France">  FRA</td>
											<td>Domino's Ligue 2</td>
											<td>0</td>
											<td>Professional</td>
											<td>18,482</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#E00000"></span></td>
											<td>1937</td>
											<td>24.7</td>
										</tr><tr role="row" class="odd">
											<td id="689" class="sorting_1">Northampton</td><td>689</td>
											<td><img src="./Bet_files/ENG.gif" alt="England">  ENG</td>
											<td>Sky Bet League One</td>
											<td>0</td>
											<td>Professional</td>
											<td>7,798</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#702030"></span></td>
											<td>1897</td>
											<td>26.2</td>
										</tr><tr role="row" class="even">
											<td id="691" class="sorting_1">Norwich</td><td>691</td>
											<td><img src="./Bet_files/ENG.gif" alt="England">  ENG</td>
											<td>Sky Bet Championship</td>
											<td>10M</td>
											<td>Professional</td>
											<td>27,244</td>
											<td><span class="label" style="background:#007860"></span> <span class="label" style="background:#F8F838"></span></td>
											<td>1902</td>
											<td>27.7</td>
										</tr><tr role="row" class="odd">
											<td id="692" class="sorting_1">Nottm Forest</td><td>692</td>
											<td><img src="./Bet_files/ENG.gif" alt="England">  ENG</td>
											<td>Sky Bet Championship</td>
											<td>500K</td>
											<td>Professional</td>
											<td>30,576</td>
											<td><span class="label" style="background:#B02030"></span> <span class="label" style="background:#C01810"></span></td>
											<td>1865</td>
											<td>26.8</td>
										</tr><tr role="row" class="even">
											<td id="693" class="sorting_1">Notts Co</td><td>693</td>
											<td><img src="./Bet_files/ENG.gif" alt="England">  ENG</td>
											<td>Sky Bet League Two</td>
											<td>75K</td>
											<td>Professional</td>
											<td>20,300</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#000000"></span></td>
											<td>1862</td>
											<td>26.7</td>
										</tr><tr role="row" class="odd">
											<td id="1153" class="sorting_1">Novara</td><td>1153</td>
											<td><img src="./Bet_files/ITA.gif" alt="Italy">  ITA</td>
											<td>Serie B</td>
											<td>345K</td>
											<td>Professional</td>
											<td>17,875</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#1068F8"></span></td>
											<td>1908</td>
											<td>24.5</td>
										</tr><tr role="row" class="even">
											<td id="899" class="sorting_1">Nurnberg</td><td>899</td>
											<td><img src="./Bet_files/GER.gif" alt="Germany">  GER</td>
											<td>Second Division</td>
											<td>215K</td>
											<td>Professional</td>
											<td>50,000</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#A82828"></span></td>
											<td>1900</td>
											<td>25.7</td>
										</tr><tr role="row" class="odd">
											<td id="400" class="sorting_1">O'Higgins</td><td>400</td>
											<td><img src="./Bet_files/CHI.gif" alt="Chile">  CHI</td>
											<td>First Division</td>
											<td>77K</td>
											<td>Professional</td>
											<td>13,839</td>
											<td><span class="label" style="background:#60C0F8"></span> <span class="label" style="background:#60C0F8"></span></td>
											<td>1955</td>
											<td>23.2</td>
										</tr><tr role="row" class="even">
											<td id="545" class="sorting_1">OB</td><td>545</td>
											<td><img src="./Bet_files/DEN.gif" alt="Denmark">  DEN</td>
											<td>Superliga</td>
											<td>347K</td>
											<td>Professional</td>
											<td>15,761</td>
											<td><span class="label" style="background:#2858B0"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1887</td>
											<td>23.7</td>
										</tr><tr role="row" class="odd">
											<td id="1365" class="sorting_1">Odd</td><td>1365</td>
											<td><img src="./Bet_files/NOR.gif" alt="Norway">  NOR</td>
											<td>Premier Division</td>
											<td>190K</td>
											<td>Professional</td>
											<td>12,293</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1894</td>
											<td>24.9</td>
										</tr><tr role="row" class="even">
											<td id="980" class="sorting_1">OFI</td><td>980</td>
											<td><img src="./Bet_files/GRE.gif" alt="Greece">  GRE</td>
											<td>B Division</td>
											<td>0</td>
											<td>Professional</td>
											<td>9,088</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
											<td>1925</td>
											<td>25.5</td>
										</tr><tr role="row" class="odd">
											<td id="862" class="sorting_1">OGC Nice</td><td>862</td>
											<td><img src="./Bet_files/FRA.gif" alt="France">  FRA</td>
											<td>Ligue 1</td>
											<td>2M</td>
											<td>Professional</td>
											<td>36,178</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#E00000"></span></td>
											<td>1904</td>
											<td>24.0</td>
										</tr><tr role="row" class="even">
											<td id="280" class="sorting_1">OHL</td><td>280</td>
											<td><img src="./Bet_files/BEL.gif" alt="Belgium">  BEL</td>
											<td>Pro League B</td>
											<td>0</td>
											<td>Professional</td>
											<td>10,019</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1958</td>
											<td>24.3</td>
										</tr><tr role="row" class="odd">
											<td id="694" class="sorting_1">Oldham</td><td>694</td>
											<td><img src="./Bet_files/ENG.gif" alt="England">  ENG</td>
											<td>Sky Bet League One</td>
											<td>0</td>
											<td>Professional</td>
											<td>13,488</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#2850B0"></span></td>
											<td>1895</td>
											<td>24.5</td>
										</tr><tr role="row" class="even">
											<td id="981" class="sorting_1">Olympiakos</td><td>981</td>
											<td><img src="./Bet_files/GRE.gif" alt="Greece">  GRE</td>
											<td>Superleague</td>
											<td>1M</td>
											<td>Professional</td>
											<td>32,115</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
											<td>1925</td>
											<td>24.3</td>
										</tr><tr role="row" class="odd">
											<td id="865" class="sorting_1">Olympique Lyonnais</td><td>865</td>
											<td><img src="./Bet_files/FRA.gif" alt="France">  FRA</td>
											<td>Ligue 1</td>
											<td>3M</td>
											<td>Professional</td>
											<td>59,286</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
											<td>1950</td>
											<td>24.2</td>
										</tr><tr role="row" class="even">
											<td id="866" class="sorting_1">OM</td><td>866</td>
											<td><img src="./Bet_files/FRA.gif" alt="France">  FRA</td>
											<td>Ligue 1</td>
											<td>9M</td>
											<td>Professional</td>
											<td>67,354</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
											<td>1899</td>
											<td>25.7</td>
										</tr><tr role="row" class="odd">
											<td id="420" class="sorting_1">Once Caldas</td><td>420</td>
											<td><img src="./Bet_files/COL.gif" alt="Colombia">  COL</td>
											<td>First Division</td>
											<td>845K</td>
											<td>Professional</td>
											<td>28,678</td>
											<td><span class="label" style="background:#E00000"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1961</td>
											<td>26.1</td>
										</tr><tr role="row" class="even">
											<td id="233" class="sorting_1">Oostende</td><td>233</td>
											<td><img src="./Bet_files/BEL.gif" alt="Belgium">  BEL</td>
											<td>Pro League</td>
											<td>65K</td>
											<td>Professional</td>
											<td>8,432</td>
											<td><span class="label" style="background:#008030"></span> <span class="label" style="background:#E00000"></span></td>
											<td>1905</td>
											<td>26.1</td>
										</tr><tr role="row" class="odd">
											<td id="440" class="sorting_1">Osijek</td><td>440</td>
											<td><img src="./Bet_files/CRO(1).gif" alt="Croatia">  CRO</td>
											<td>First League</td>
											<td>861K</td>
											<td>Professional</td>
											<td>19,500</td>
											<td><span class="label" style="background:#2850A0"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1947</td>
											<td>26.1</td>
										</tr><tr role="row" class="even">
											<td id="937" class="sorting_1">Osnabruck</td><td>937</td>
											<td><img src="./Bet_files/GER.gif" alt="Germany">  GER</td>
											<td>Third Division</td>
											<td>0</td>
											<td>Professional</td>
											<td>16,000</td>
											<td><span class="label" style="background:#281060"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1899</td>
											<td>25.3</td>
										</tr><tr role="row" class="odd">
											<td id="1042" class="sorting_1">Oss</td><td>1042</td>
											<td><img src="./Bet_files/NED.gif" alt="Holland">  NED</td>
											<td>Jupiler League</td>
											<td>22K</td>
											<td>Professional</td>
											<td>4,700</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#E00000"></span></td>
											<td>1928</td>
											<td>23.9</td>
										</tr><tr role="row" class="even">
											<td id="695" class="sorting_1">Oxford</td><td>695</td>
											<td><img src="./Bet_files/ENG.gif" alt="England">  ENG</td>
											<td>Sky Bet League One</td>
											<td>0</td>
											<td>Professional</td>
											<td>12,205</td>
											<td><span class="label" style="background:#202838"></span> <span class="label" style="background:#F8E020"></span></td>
											<td>1893</td>
											<td>24.0</td>
										</tr><tr role="row" class="odd">
											<td id="1154" class="sorting_1">Padova</td><td>1154</td>
											<td><img src="./Bet_files/ITA.gif" alt="Italy">  ITA</td>
											<td>Serie C/B</td>
											<td>215K</td>
											<td>Professional</td>
											<td>32,420</td>
											<td><span class="label" style="background:#E00000"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1910</td>
											<td>26.3</td>
										</tr><tr role="row" class="even">
											<td id="983" class="sorting_1">Panathinaikos</td><td>983</td>
											<td><img src="./Bet_files/GRE.gif" alt="Greece">  GRE</td>
											<td>Superleague</td>
											<td>258K</td>
											<td>Professional</td>
											<td>16,003</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
											<td>1908</td>
											<td>26.2</td>
										</tr><tr role="row" class="odd">
											<td id="984" class="sorting_1">Panionios</td><td>984</td>
											<td><img src="./Bet_files/GRE.gif" alt="Greece">  GRE</td>
											<td>Superleague</td>
											<td>0</td>
											<td>Professional</td>
											<td>11,115</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
											<td>1890</td>
											<td>23.4</td>
										</tr><tr role="row" class="even">
											<td id="982" class="sorting_1">PAOK</td><td>982</td>
											<td><img src="./Bet_files/GRE.gif" alt="Greece">  GRE</td>
											<td>Superleague</td>
											<td>2M</td>
											<td>Professional</td>
											<td>28,703</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
											<td>1926</td>
											<td>23.4</td>
										</tr><tr role="row" class="odd">
											<td id="330" class="sorting_1">PAR</td><td>330</td>
											<td><img src="./Bet_files/BRA.gif" alt="Brazil">  BRA</td>
											<td>Second Division</td>
											<td>0</td>
											<td>Professional</td>
											<td>17,000</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#0078F8"></span></td>
											<td>1989</td>
											<td>27.3</td>
										</tr><tr role="row" class="even">
											<td id="867" class="sorting_1">Paris FC</td><td>867</td>
											<td><img src="./Bet_files/FRA.gif" alt="France">  FRA</td>
											<td>National</td>
											<td>0</td>
											<td>Professional</td>
											<td>20,000</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#002060"></span></td>
											<td>1969</td>
											<td>26.9</td>
										</tr><tr role="row" class="odd">
											<td id="868" class="sorting_1">Paris Saint-Germain</td><td>868</td>
											<td><img src="./Bet_files/FRA.gif" alt="France">  FRA</td>
											<td>Ligue 1</td>
											<td>52M</td>
											<td>Professional</td>
											<td>47,929</td>
											<td><span class="label" style="background:#E00000"></span> <span class="label" style="background:#082040"></span></td>
											<td>1970</td>
											<td>25.1</td>
										</tr><tr role="row" class="even">
											<td id="1156" class="sorting_1">Parma</td><td>1156</td>
											<td><img src="./Bet_files/ITA.gif" alt="Italy">  ITA</td>
											<td>Serie C/B</td>
											<td>258K</td>
											<td>Professional</td>
											<td>28,000</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1913</td>
											<td>27.0</td>
										</tr><tr role="row" class="odd">
											<td id="331" class="sorting_1">PAY</td><td>331</td>
											<td><img src="./Bet_files/BRA.gif" alt="Brazil">  BRA</td>
											<td>Second Division</td>
											<td>29K</td>
											<td>Professional</td>
											<td>15,000</td>
											<td><span class="label" style="background:#E00000"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1914</td>
											<td>27.2</td>
										</tr><tr role="row" class="even">
											<td id="1012" class="sorting_1">PEC Zwolle</td><td>1012</td>
											<td><img src="./Bet_files/NED.gif" alt="Holland">  NED</td>
											<td>Eredivisie</td>
											<td>172K</td>
											<td>Professional</td>
											<td>13,250</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#284898"></span></td>
											<td>1910</td>
											<td>23.6</td>
										</tr><tr role="row" class="odd">
											<td id="1477" class="sorting_1">Penafiel</td><td>1477</td>
											<td><img src="./Bet_files/POR.gif" alt="Portugal">  POR</td>
											<td>Second League</td>
											<td>65K</td>
											<td>Professional</td>
											<td>5,230</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F00000"></span></td>
											<td>1951</td>
											<td>25.6</td>
										</tr><tr role="row" class="even">
											<td id="1157" class="sorting_1">Perugia</td><td>1157</td>
											<td><img src="./Bet_files/ITA.gif" alt="Italy">  ITA</td>
											<td>Serie B</td>
											<td>1M</td>
											<td>Professional</td>
											<td>23,625</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#E00000"></span></td>
											<td>1905</td>
											<td>25.0</td>
										</tr><tr role="row" class="odd">
											<td id="1158" class="sorting_1">Pescara</td><td>1158</td>
											<td><img src="./Bet_files/ITA.gif" alt="Italy">  ITA</td>
											<td>Serie A</td>
											<td>2M</td>
											<td>Professional</td>
											<td>20,486</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
											<td>1936</td>
											<td>25.6</td>
										</tr><tr role="row" class="even">
											<td id="696" class="sorting_1">Peterborough</td><td>696</td>
											<td><img src="./Bet_files/ENG.gif" alt="England">  ENG</td>
											<td>Sky Bet League One</td>
											<td>400K</td>
											<td>Professional</td>
											<td>14,084</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#2850A0"></span></td>
											<td>1934</td>
											<td>23.0</td>
										</tr><tr role="row" class="odd">
											<td id="1159" class="sorting_1">Piacenza</td><td>1159</td>
											<td><img src="./Bet_files/ITA.gif" alt="Italy">  ITA</td>
											<td>Serie C/A</td>
											<td>69K</td>
											<td>Professional</td>
											<td>21,668</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#E00808"></span></td>
											<td>1919</td>
											<td>24.0</td>
										</tr><tr role="row" class="even">
											<td id="354" class="sorting_1">Pirin Blagoevgrad</td><td>354</td>
											<td><img src="./Bet_files/BUL.gif" alt="Bulgaria">  BUL</td>
											<td>First League</td>
											<td>9K</td>
											<td>Professional</td>
											<td>8,250</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#48A068"></span></td>
											<td>1934</td>
											<td>25.2</td>
										</tr><tr role="row" class="odd">
											<td id="1160" class="sorting_1">Pistoiese</td><td>1160</td>
											<td><img src="./Bet_files/ITA.gif" alt="Italy">  ITA</td>
											<td>Serie C/A</td>
											<td>86K</td>
											<td>Professional</td>
											<td>13,195</td>
											<td><span class="label" style="background:#002080"></span> <span class="label" style="background:#F06000"></span></td>
											<td>1921</td>
											<td>23.2</td>
										</tr><tr role="row" class="even">
											<td id="1458" class="sorting_1">Plock</td><td>1458</td>
											<td><img src="./Bet_files/POL.gif" alt="Poland">  POL</td>
											<td>LOTTO Ekstraklasa</td>
											<td>20K</td>
											<td>Professional</td>
											<td>10,978</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
											<td>1947</td>
											<td>26.4</td>
										</tr><tr role="row" class="odd">
											<td id="697" class="sorting_1">Plymouth</td><td>697</td>
											<td><img src="./Bet_files/ENG.gif" alt="England">  ENG</td>
											<td>Sky Bet League Two</td>
											<td>0</td>
											<td>Professional</td>
											<td>16,388</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
											<td>1886</td>
											<td>24.8</td>
										</tr><tr role="row" class="even">
											<td id="1459" class="sorting_1">Pogon</td><td>1459</td>
											<td><img src="./Bet_files/POL.gif" alt="Poland">  POL</td>
											<td>LOTTO Ekstraklasa</td>
											<td>100K</td>
											<td>Professional</td>
											<td>18,027</td>
											<td><span class="label" style="background:#880818"></span> <span class="label" style="background:#001040"></span></td>
											<td>1948</td>
											<td>23.9</td>
										</tr><tr role="row" class="odd">
											<td id="332" class="sorting_1">PON</td><td>332</td>
											<td><img src="./Bet_files/BRA.gif" alt="Brazil">  BRA</td>
											<td>First Division</td>
											<td>119K</td>
											<td>Professional</td>
											<td>19,722</td>
											<td><span class="label" style="background:#E00000"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1900</td>
											<td>25.5</td>
										</tr><tr role="row" class="even">
											<td id="333" class="sorting_1">POR</td><td>333</td>
											<td><img src="./Bet_files/BRA.gif" alt="Brazil">  BRA</td>
											<td>Third Division</td>
											<td>119K</td>
											<td>Professional</td>
											<td>25,470</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#008030"></span></td>
											<td>1920</td>
											<td>25.9</td>
										</tr><tr role="row" class="odd">
											<td id="698" class="sorting_1">Port Vale</td><td>698</td>
											<td><img src="./Bet_files/ENG.gif" alt="England">  ENG</td>
											<td>Sky Bet League One</td>
											<td>67K</td>
											<td>Professional</td>
											<td>19,148</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1876</td>
											<td>25.2</td>
										</tr><tr role="row" class="even">
											<td id="699" class="sorting_1">Portsmouth</td><td>699</td>
											<td><img src="./Bet_files/ENG.gif" alt="England">  ENG</td>
											<td>Sky Bet League Two</td>
											<td>150K</td>
											<td>Professional</td>
											<td>18,931</td>
											<td><span class="label" style="background:#F0F0F0"></span> <span class="label" style="background:#003880"></span></td>
											<td>1898</td>
											<td>25.7</td>
										</tr><tr role="row" class="odd">
											<td id="1161" class="sorting_1">Prato</td><td>1161</td>
											<td><img src="./Bet_files/ITA.gif" alt="Italy">  ITA</td>
											<td>Serie C/A</td>
											<td>78K</td>
											<td>Professional</td>
											<td>4,084</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#2858B0"></span></td>
											<td>1908</td>
											<td>23.3</td>
										</tr><tr role="row" class="even">
											<td id="700" class="sorting_1">Preston</td><td>700</td>
											<td><img src="./Bet_files/ENG.gif" alt="England">  ENG</td>
											<td>Sky Bet Championship</td>
											<td>500K</td>
											<td>Professional</td>
											<td>23,404</td>
											<td><span class="label" style="background:#082040"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1880</td>
											<td>26.6</td>
										</tr><tr role="row" class="odd">
											<td id="1028" class="sorting_1">PSV</td><td>1028</td>
											<td><img src="./Bet_files/NED.gif" alt="Holland">  NED</td>
											<td>Eredivisie</td>
											<td>3M</td>
											<td>Professional</td>
											<td>35,000</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#B02038"></span></td>
											<td>1913</td>
											<td>23.9</td>
										</tr><tr role="row" class="even">
											<td id="1260" class="sorting_1">Pumas</td><td>1260</td>
											<td><img src="./Bet_files/MEX.gif" alt="Mexico">  MEX</td>
											<td>First Division</td>
											<td>2M</td>
											<td>Professional</td>
											<td>68,954</td>
											<td><span class="label" style="background:#002060"></span> <span class="label" style="background:#D8B028"></span></td>
											<td>1954</td>
											<td>25.8</td>
										</tr><tr role="row" class="odd">
											<td id="412" class="sorting_1">Qingdao</td><td>412</td>
											<td><img src="./Bet_files/CHN.gif" alt="China">  CHN</td>
											<td>First Division</td>
											<td>115K</td>
											<td>Professional</td>
											<td>23,000</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#F85000"></span></td>
											<td>1993</td>
											<td>26.7</td>
										</tr><tr role="row" class="even">
											<td id="701" class="sorting_1">QPR</td><td>701</td>
											<td><img src="./Bet_files/ENG.gif" alt="England">  ENG</td>
											<td>Sky Bet Championship</td>
											<td>1M</td>
											<td>Professional</td>
											<td>18,224</td>
											<td><span class="label" style="background:#0028A8"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1882</td>
											<td>25.6</td>
										</tr><tr role="row" class="odd">
											<td id="93" class="sorting_1">Racing Club</td><td>93</td>
											<td><img src="./Bet_files/ARG.gif" alt="Argentina">  ARG</td>
											<td>Premier Division</td>
											<td>768K</td>
											<td>Professional</td>
											<td>50,000</td>
											<td><span class="label" style="background:#60C0F8"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1903</td>
											<td>27.1</td>
										</tr><tr role="row" class="even">
											<td id="871" class="sorting_1">Racing Club de Lens</td><td>871</td>
											<td><img src="./Bet_files/FRA.gif" alt="France">  FRA</td>
											<td>Domino's Ligue 2</td>
											<td>603K</td>
											<td>Professional</td>
											<td>38,233</td>
											<td><span class="label" style="background:#F8D000"></span> <span class="label" style="background:#F00000"></span></td>
											<td>1906</td>
											<td>25.4</td>
										</tr><tr role="row" class="odd">
											<td id="1570" class="sorting_1">Rangers</td><td>1570</td>
											<td><img src="./Bet_files/SCO.gif" alt="Scotland">  SCO</td>
											<td>Ladbrokes Premiership</td>
											<td>1M</td>
											<td>Professional</td>
											<td>50,817</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#0058B8"></span></td>
											<td>1872</td>
											<td>24.7</td>
										</tr><tr role="row" class="even">
											<td id="872" class="sorting_1">RC Strasbourg Alsace</td><td>872</td>
											<td><img src="./Bet_files/FRA.gif" alt="France">  FRA</td>
											<td>Domino's Ligue 2</td>
											<td>0</td>
											<td>Professional</td>
											<td>29,000</td>
											<td><span class="label" style="background:#0030A0"></span> <span class="label" style="background:#083078"></span></td>
											<td>1906</td>
											<td>28.0</td>
										</tr><tr role="row" class="odd">
											<td id="702" class="sorting_1">Reading</td><td>702</td>
											<td><img src="./Bet_files/ENG.gif" alt="England">  ENG</td>
											<td>Sky Bet Championship</td>
											<td>3M</td>
											<td>Professional</td>
											<td>24,197</td>
											<td><span class="label" style="background:#104098"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1871</td>
											<td>25.3</td>
										</tr><tr role="row" class="even">
											<td id="873" class="sorting_1">Red Star FC</td><td>873</td>
											<td><img src="./Bet_files/FRA.gif" alt="France">  FRA</td>
											<td>Domino's Ligue 2</td>
											<td>0</td>
											<td>Professional</td>
											<td>20,000</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#004030"></span></td>
											<td>1897</td>
											<td>25.0</td>
										</tr><tr role="row" class="odd">
											<td id="1164" class="sorting_1">Reggiana</td><td>1164</td>
											<td><img src="./Bet_files/ITA.gif" alt="Italy">  ITA</td>
											<td>Serie C/B</td>
											<td>215K</td>
											<td>Professional</td>
											<td>21,584</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#A00000"></span></td>
											<td>1919</td>
											<td>24.5</td>
										</tr><tr role="row" class="even">
											<td id="1165" class="sorting_1">Reggina</td><td>1165</td>
											<td><img src="./Bet_files/ITA.gif" alt="Italy">  ITA</td>
											<td>Serie C/C</td>
											<td>78K</td>
											<td>Professional</td>
											<td>27,543</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#800020"></span></td>
											<td>1914</td>
											<td>22.6</td>
										</tr><tr role="row" class="odd">
											<td id="334" class="sorting_1">REM</td><td>334</td>
											<td><img src="./Bet_files/BRA.gif" alt="Brazil">  BRA</td>
											<td>Third Division</td>
											<td>24K</td>
											<td>Professional</td>
											<td>20,000</td>
											<td><span class="label" style="background:#F8F000"></span> <span class="label" style="background:#1838F8"></span></td>
											<td>1905</td>
											<td>29.1</td>
										</tr><tr role="row" class="even">
											<td id="441" class="sorting_1">Rijeka</td><td>441</td>
											<td><img src="./Bet_files/CRO(1).gif" alt="Croatia">  CRO</td>
											<td>First League</td>
											<td>1M</td>
											<td>Professional</td>
											<td>8,000</td>
											<td><span class="label" style="background:#20B0F0"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1946</td>
											<td>24.1</td>
										</tr><tr role="row" class="odd">
											<td id="94" class="sorting_1">River</td><td>94</td>
											<td><img src="./Bet_files/ARG.gif" alt="Argentina">  ARG</td>
											<td>Premier Division</td>
											<td>371K</td>
											<td>Professional</td>
											<td>65,645</td>
											<td><span class="label" style="background:#C81018"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1901</td>
											<td>26.2</td>
										</tr><tr role="row" class="even">
											<td id="1032" class="sorting_1">RKC</td><td>1032</td>
											<td><img src="./Bet_files/NED.gif" alt="Holland">  NED</td>
											<td>Jupiler League</td>
											<td>9K</td>
											<td>Professional</td>
											<td>7,508</td>
											<td><span class="label" style="background:#1848B0"></span> <span class="label" style="background:#F8F000"></span></td>
											<td>1940</td>
											<td>23.7</td>
										</tr><tr role="row" class="odd">
											<td id="703" class="sorting_1">Rochdale</td><td>703</td>
											<td><img src="./Bet_files/ENG.gif" alt="England">  ENG</td>
											<td>Sky Bet League One</td>
											<td>40K</td>
											<td>Professional</td>
											<td>10,208</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
											<td>1907</td>
											<td>24.9</td>
										</tr><tr role="row" class="even">
											<td id="1033" class="sorting_1">Roda JC</td><td>1033</td>
											<td><img src="./Bet_files/NED.gif" alt="Holland">  NED</td>
											<td>Eredivisie</td>
											<td>646K</td>
											<td>Professional</td>
											<td>19,979</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F8D828"></span></td>
											<td>1962</td>
											<td>26.0</td>
										</tr><tr role="row" class="odd">
											<td id="1100" class="sorting_1">Roma</td><td>1100</td>
											<td><img src="./Bet_files/ITA.gif" alt="Italy">  ITA</td>
											<td>Serie A</td>
											<td>9M</td>
											<td>Professional</td>
											<td>70,634</td>
											<td><span class="label" style="background:#581020"></span> <span class="label" style="background:#581020"></span></td>
											<td>1927</td>
											<td>25.8</td>
										</tr><tr role="row" class="even">
											<td id="821" class="sorting_1">RoPS</td><td>821</td>
											<td><img src="./Bet_files/FIN.gif" alt="Finland">  FIN</td>
											<td>Premier League</td>
											<td>9K</td>
											<td>Professional</td>
											<td>3,203</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#0050D0"></span></td>
											<td>1950</td>
											<td>24.9</td>
										</tr><tr role="row" class="odd">
											<td id="95" class="sorting_1">Rosario Central</td><td>95</td>
											<td><img src="./Bet_files/ARG.gif" alt="Argentina">  ARG</td>
											<td>Premier Division</td>
											<td>192K</td>
											<td>Professional</td>
											<td>41,654</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
											<td>1889</td>
											<td>28.2</td>
										</tr><tr role="row" class="even">
											<td id="1376" class="sorting_1">Rosenborg</td><td>1376</td>
											<td><img src="./Bet_files/NOR.gif" alt="Norway">  NOR</td>
											<td>Premier Division</td>
											<td>1M</td>
											<td>Professional</td>
											<td>21,271</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1917</td>
											<td>23.6</td>
										</tr><tr role="row" class="odd">
											<td id="928" class="sorting_1">Rostock</td><td>928</td>
											<td><img src="./Bet_files/GER.gif" alt="Germany">  GER</td>
											<td>Third Division</td>
											<td>0</td>
											<td>Professional</td>
											<td>29,000</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#2850A0"></span></td>
											<td>1965</td>
											<td>24.9</td>
										</tr><tr role="row" class="even">
											<td id="704" class="sorting_1">Rotherham</td><td>704</td>
											<td><img src="./Bet_files/ENG.gif" alt="England">  ENG</td>
											<td>Sky Bet Championship</td>
											<td>250K</td>
											<td>Professional</td>
											<td>12,053</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#B00810"></span></td>
											<td>1884</td>
											<td>25.8</td>
										</tr><tr role="row" class="odd">
											<td id="1462" class="sorting_1">Ruch</td><td>1462</td>
											<td><img src="./Bet_files/POL.gif" alt="Poland">  POL</td>
											<td>LOTTO Ekstraklasa</td>
											<td>20K</td>
											<td>Professional</td>
											<td>10,000</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#0010D8"></span></td>
											<td>1920</td>
											<td>25.2</td>
										</tr><tr role="row" class="even">
											<td id="1091" class="sorting_1">S.C. Ashdod</td><td>1091</td>
											<td><img src="./Bet_files/ISR.gif" alt="Israel">  ISR</td>
											<td>Premier League</td>
											<td>154K</td>
											<td>Professional</td>
											<td>6,000</td>
											<td><span class="label" style="background:#F8F000"></span> <span class="label" style="background:#C80000"></span></td>
											<td>1999</td>
											<td>23.6</td>
										</tr><tr role="row" class="odd">
											<td id="1166" class="sorting_1">Salernitana</td><td>1166</td>
											<td><img src="./Bet_files/ITA.gif" alt="Italy">  ITA</td>
											<td>Serie B</td>
											<td>689K</td>
											<td>Professional</td>
											<td>31,300</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#680028"></span></td>
											<td>1919</td>
											<td>25.9</td>
										</tr><tr role="row" class="even">
											<td id="1167" class="sorting_1">Sampdoria</td><td>1167</td>
											<td><img src="./Bet_files/ITA.gif" alt="Italy">  ITA</td>
											<td>Serie A</td>
											<td>4M</td>
											<td>Professional</td>
											<td>36,599</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#2068B0"></span></td>
											<td>1946</td>
											<td>26.0</td>
										</tr><tr role="row" class="odd">
											<td id="335" class="sorting_1">SAN</td><td>335</td>
											<td><img src="./Bet_files/BRA.gif" alt="Brazil">  BRA</td>
											<td>First Division</td>
											<td>238K</td>
											<td>Professional</td>
											<td>17,000</td>
											<td><span class="label" style="background:#002060"></span> <span class="label" style="background:#002060"></span></td>
											<td>1912</td>
											<td>25.1</td>
										</tr><tr role="row" class="even">
											<td id="96" class="sorting_1">San Lorenzo</td><td>96</td>
											<td><img src="./Bet_files/ARG.gif" alt="Argentina">  ARG</td>
											<td>Premier Division</td>
											<td>7K</td>
											<td>Professional</td>
											<td>43,494</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
											<td>1908</td>
											<td>28.5</td>
										</tr><tr role="row" class="odd">
											<td id="1380" class="sorting_1">Sandefjord</td><td>1380</td>
											<td><img src="./Bet_files/NOR.gif" alt="Norway">  NOR</td>
											<td>First Division</td>
											<td>95K</td>
											<td>Professional</td>
											<td>6,982</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#0040F0"></span></td>
											<td>1998</td>
											<td>26.0</td>
										</tr><tr role="row" class="even">
											<td id="423" class="sorting_1">Santa Fe</td><td>423</td>
											<td><img src="./Bet_files/COL.gif" alt="Colombia">  COL</td>
											<td>First Division</td>
											<td>3M</td>
											<td>Professional</td>
											<td>40,312</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#E00000"></span></td>
											<td>1941</td>
											<td>26.5</td>
										</tr><tr role="row" class="odd">
											<td id="876" class="sorting_1">SC Bastia</td><td>876</td>
											<td><img src="./Bet_files/FRA.gif" alt="France">  FRA</td>
											<td>Ligue 1</td>
											<td>0</td>
											<td>Professional</td>
											<td>17,280</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#0030A0"></span></td>
											<td>1905</td>
											<td>25.8</td>
										</tr><tr role="row" class="even">
											<td id="1036" class="sorting_1">SC Heerenveen</td><td>1036</td>
											<td><img src="./Bet_files/NED.gif" alt="Holland">  NED</td>
											<td>Eredivisie</td>
											<td>3M</td>
											<td>Professional</td>
											<td>26,100</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#004890"></span></td>
											<td>1920</td>
											<td>23.3</td>
										</tr><tr role="row" class="odd">
											<td id="707" class="sorting_1">Scunthorpe</td><td>707</td>
											<td><img src="./Bet_files/ENG.gif" alt="England">  ENG</td>
											<td>Sky Bet League One</td>
											<td>100K</td>
											<td>Professional</td>
											<td>9,144</td>
											<td><span class="label" style="background:#A01010"></span> <span class="label" style="background:#2080C0"></span></td>
											<td>1899</td>
											<td>24.7</td>
										</tr><tr role="row" class="even">
											<td id="329" class="sorting_1">SEP</td><td>329</td>
											<td><img src="./Bet_files/BRA.gif" alt="Brazil">  BRA</td>
											<td>First Division</td>
											<td>2M</td>
											<td>Professional</td>
											<td>43,603</td>
											<td><span class="label" style="background:#0030A0"></span> <span class="label" style="background:#E00000"></span></td>
											<td>1914</td>
											<td>26.6</td>
										</tr><tr role="row" class="odd">
											<td id="596" class="sorting_1">Shamrock Rovers</td><td>596</td>
											<td><img src="./Bet_files/IRL.gif" alt="Ireland">  IRL</td>
											<td>Premier Division</td>
											<td>0</td>
											<td>Professional</td>
											<td>6,000</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#008030"></span></td>
											<td>1901</td>
											<td>22.9</td>
										</tr><tr role="row" class="even">
											<td id="708" class="sorting_1">Sheff Utd</td><td>708</td>
											<td><img src="./Bet_files/ENG.gif" alt="England">  ENG</td>
											<td>Sky Bet League One</td>
											<td>300K</td>
											<td>Professional</td>
											<td>32,609</td>
											<td><span class="label" style="background:#A82030"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1889</td>
											<td>24.9</td>
										</tr><tr role="row" class="odd">
											<td id="709" class="sorting_1">Sheff Wed</td><td>709</td>
											<td><img src="./Bet_files/ENG.gif" alt="England">  ENG</td>
											<td>Sky Bet Championship</td>
											<td>2M</td>
											<td>Professional</td>
											<td>39,812</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#0030A0"></span></td>
											<td>1867</td>
											<td>27.0</td>
										</tr><tr role="row" class="even">
											<td id="414" class="sorting_1">Shenhua</td><td>414</td>
											<td><img src="./Bet_files/CHN.gif" alt="China">  CHN</td>
											<td>Super League</td>
											<td>691K</td>
											<td>Professional</td>
											<td>33,060</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#0050D0"></span></td>
											<td>1993</td>
											<td>28.1</td>
										</tr><tr role="row" class="odd">
											<td id="710" class="sorting_1">Shrewsbury</td><td>710</td>
											<td><img src="./Bet_files/ENG.gif" alt="England">  ENG</td>
											<td>Sky Bet League One</td>
											<td>20K</td>
											<td>Professional</td>
											<td>9,875</td>
											<td><span class="label" style="background:#F8B030"></span> <span class="label" style="background:#0058A8"></span></td>
											<td>1886</td>
											<td>26.0</td>
										</tr><tr role="row" class="even">
											<td id="442" class="sorting_1">Sibenik</td><td>442</td>
											<td><img src="./Bet_files/CRO(1).gif" alt="Croatia">  CRO</td>
											<td>Second League</td>
											<td>0</td>
											<td>Professional</td>
											<td>5,500</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F88000"></span></td>
											<td>1932</td>
											<td>23.1</td>
										</tr><tr role="row" class="odd">
											<td id="1170" class="sorting_1">Siena</td><td>1170</td>
											<td><img src="./Bet_files/ITA.gif" alt="Italy">  ITA</td>
											<td>Serie C/A</td>
											<td>129K</td>
											<td>Professional</td>
											<td>15,373</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#000000"></span></td>
											<td>1904</td>
											<td>24.5</td>
										</tr><tr role="row" class="even">
											<td id="473" class="sorting_1">Sigma Olomouc</td><td>473</td>
											<td><img src="./Bet_files/CZE.gif" alt="Czech Republic">  CZE</td>
											<td>Second Division</td>
											<td>319K</td>
											<td>Professional</td>
											<td>12,541</td>
											<td><span class="label" style="background:#0050A0"></span> <span class="label" style="background:#0050D0"></span></td>
											<td>1919</td>
											<td>24.2</td>
										</tr><tr role="row" class="odd">
											<td id="551" class="sorting_1">Silkeborg IF</td><td>551</td>
											<td><img src="./Bet_files/DEN.gif" alt="Denmark">  DEN</td>
											<td>Superliga</td>
											<td>116K</td>
											<td>Professional</td>
											<td>10,000</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#E00000"></span></td>
											<td>1917</td>
											<td>23.6</td>
										</tr><tr role="row" class="even">
											<td id="155" class="sorting_1">SK Rapid Wien</td><td>155</td>
											<td><img src="./Bet_files/AUT.gif" alt="Austria">  AUT</td>
											<td>Premier Division</td>
											<td>3M</td>
											<td>Professional</td>
											<td>28,385</td>
											<td><span class="label" style="background:#006030"></span> <span class="label" style="background:#006850"></span></td>
											<td>1899</td>
											<td>24.4</td>
										</tr><tr role="row" class="odd">
											<td id="156" class="sorting_1">SK Sturm Graz</td><td>156</td>
											<td><img src="./Bet_files/AUT.gif" alt="Austria">  AUT</td>
											<td>Premier Division</td>
											<td>0</td>
											<td>Professional</td>
											<td>16,364</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#000000"></span></td>
											<td>1909</td>
											<td>25.4</td>
										</tr><tr role="row" class="even">
											<td id="160" class="sorting_1">SKN St. Polten</td><td>160</td>
											<td><img src="./Bet_files/AUT.gif" alt="Austria">  AUT</td>
											<td>Premier Division</td>
											<td>0</td>
											<td>Professional</td>
											<td>8,000</td>
											<td><span class="label" style="background:#002060"></span> <span class="label" style="background:#002060"></span></td>
											<td>2000</td>
											<td>26.7</td>
										</tr><tr role="row" class="odd">
											<td id="474" class="sorting_1">Slavia Prague</td><td>474</td>
											<td><img src="./Bet_files/CZE.gif" alt="Czech Republic">  CZE</td>
											<td>First Division</td>
											<td>2M</td>
											<td>Professional</td>
											<td>20,800</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#E00000"></span></td>
											<td>1892</td>
											<td>25.1</td>
										</tr><tr role="row" class="even">
											<td id="356" class="sorting_1">Slavia Sofia</td><td>356</td>
											<td><img src="./Bet_files/BUL.gif" alt="Bulgaria">  BUL</td>
											<td>First League</td>
											<td>40K</td>
											<td>Professional</td>
											<td>43,208</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
											<td>1913</td>
											<td>24.4</td>
										</tr><tr role="row" class="odd">
											<td id="1487" class="sorting_1">SLB</td><td>1487</td>
											<td><img src="./Bet_files/POR.gif" alt="Portugal">  POR</td>
											<td>Premier League</td>
											<td>14M</td>
											<td>Professional</td>
											<td>64,642</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#E00000"></span></td>
											<td>1904</td>
											<td>23.8</td>
										</tr><tr role="row" class="even">
											<td id="598" class="sorting_1">Sligo Rovers</td><td>598</td>
											<td><img src="./Bet_files/IRL.gif" alt="Ireland">  IRL</td>
											<td>Premier Division</td>
											<td>0</td>
											<td>Professional</td>
											<td>4,500</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#E00000"></span></td>
											<td>1928</td>
											<td>22.7</td>
										</tr><tr role="row" class="odd">
											<td id="475" class="sorting_1">Slovan Liberec</td><td>475</td>
											<td><img src="./Bet_files/CZE.gif" alt="Czech Republic">  CZE</td>
											<td>First Division</td>
											<td>559K</td>
											<td>Professional</td>
											<td>9,900</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#0050D0"></span></td>
											<td>1958</td>
											<td>24.1</td>
										</tr><tr role="row" class="even">
											<td id="1392" class="sorting_1">Sogndal</td><td>1392</td>
											<td><img src="./Bet_files/NOR.gif" alt="Norway">  NOR</td>
											<td>Premier Division</td>
											<td>47K</td>
											<td>Professional</td>
											<td>5,526</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1926</td>
											<td>24.2</td>
										</tr><tr role="row" class="odd">
											<td id="713" class="sorting_1">Southampton</td><td>713</td>
											<td><img src="./Bet_files/ENG.gif" alt="England">  ENG</td>
											<td>Premier Division</td>
											<td>31M</td>
											<td>Professional</td>
											<td>32,505</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#C80000"></span></td>
											<td>1885</td>
											<td>25.1</td>
										</tr><tr role="row" class="even">
											<td id="714" class="sorting_1">Southend</td><td>714</td>
											<td><img src="./Bet_files/ENG.gif" alt="England">  ENG</td>
											<td>Sky Bet League One</td>
											<td>75K</td>
											<td>Professional</td>
											<td>12,163</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#081030"></span></td>
											<td>1906</td>
											<td>26.4</td>
										</tr><tr role="row" class="odd">
											<td id="476" class="sorting_1">Sparta Prague</td><td>476</td>
											<td><img src="./Bet_files/CZE.gif" alt="Czech Republic">  CZE</td>
											<td>First Division</td>
											<td>2M</td>
											<td>Professional</td>
											<td>18,994</td>
											<td><span class="label" style="background:#901000"></span> <span class="label" style="background:#B00000"></span></td>
											<td>1893</td>
											<td>26.1</td>
										</tr><tr role="row" class="even">
											<td id="1039" class="sorting_1">Sparta Rotterdam</td><td>1039</td>
											<td><img src="./Bet_files/NED.gif" alt="Holland">  NED</td>
											<td>Eredivisie</td>
											<td>83K</td>
											<td>Professional</td>
											<td>11,026</td>
											<td><span class="label" style="background:#E81830"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1888</td>
											<td>23.9</td>
										</tr><tr role="row" class="odd">
											<td id="1529" class="sorting_1">Spartak Moscow</td><td>1529</td>
											<td><img src="./Bet_files/RUS.gif" alt="Russia">  RUS</td>
											<td>Premier Division</td>
											<td>861K</td>
											<td>Professional</td>
											<td>46,990</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
											<td>1922</td>
											<td>25.3</td>
										</tr><tr role="row" class="even">
											<td id="1173" class="sorting_1">Spezia</td><td>1173</td>
											<td><img src="./Bet_files/ITA.gif" alt="Italy">  ITA</td>
											<td>Serie B</td>
											<td>1M</td>
											<td>Professional</td>
											<td>10,336</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1906</td>
											<td>24.9</td>
										</tr><tr role="row" class="odd">
											<td id="337" class="sorting_1">SPO</td><td>337</td>
											<td><img src="./Bet_files/BRA.gif" alt="Brazil">  BRA</td>
											<td>First Division</td>
											<td>1M</td>
											<td>Professional</td>
											<td>77,011</td>
											<td><span class="label" style="background:#C80000"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1930</td>
											<td>25.0</td>
										</tr><tr role="row" class="even">
											<td id="1489" class="sorting_1">Sporting (POR)</td><td>1489</td>
											<td><img src="./Bet_files/POR.gif" alt="Portugal">  POR</td>
											<td>Premier League</td>
											<td>6M</td>
											<td>Professional</td>
											<td>50,044</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
											<td>1906</td>
											<td>24.9</td>
										</tr><tr role="row" class="odd">
											<td id="338" class="sorting_1">SPT</td><td>338</td>
											<td><img src="./Bet_files/BRA.gif" alt="Brazil">  BRA</td>
											<td>First Division</td>
											<td>476K</td>
											<td>Professional</td>
											<td>30,520</td>
											<td><span class="label" style="background:#002060"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1905</td>
											<td>26.8</td>
										</tr><tr role="row" class="even">
											<td id="599" class="sorting_1">St. Pat's Athletic</td><td>599</td>
											<td><img src="./Bet_files/IRL.gif" alt="Ireland">  IRL</td>
											<td>Premier Division</td>
											<td>0</td>
											<td>Professional</td>
											<td>5,400</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#E00000"></span></td>
											<td>1929</td>
											<td>23.5</td>
										</tr><tr role="row" class="odd">
											<td id="1396" class="sorting_1">Stab?k</td><td>1396</td>
											<td><img src="./Bet_files/NOR.gif" alt="Norway">  NOR</td>
											<td>Premier Division</td>
											<td>237K</td>
											<td>Professional</td>
											<td>5,500</td>
											<td><span class="label" style="background:#002060"></span> <span class="label" style="background:#0050D0"></span></td>
											<td>1912</td>
											<td>22.2</td>
										</tr><tr role="row" class="even">
											<td id="877" class="sorting_1">Stade Malherbe Caen</td><td>877</td>
											<td><img src="./Bet_files/FRA.gif" alt="France">  FRA</td>
											<td>Ligue 1</td>
											<td>2M</td>
											<td>Professional</td>
											<td>21,000</td>
											<td><span class="label" style="background:#D81820"></span> <span class="label" style="background:#2060A8"></span></td>
											<td>1913</td>
											<td>27.5</td>
										</tr><tr role="row" class="odd">
											<td id="884" class="sorting_1">Stade Rennais FC</td><td>884</td>
											<td><img src="./Bet_files/FRA.gif" alt="France">  FRA</td>
											<td>Ligue 1</td>
											<td>4M</td>
											<td>Professional</td>
											<td>29,778</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#E00808"></span></td>
											<td>1901</td>
											<td>26.3</td>
										</tr><tr role="row" class="even">
											<td id="250" class="sorting_1">Standard</td><td>250</td>
											<td><img src="./Bet_files/BEL.gif" alt="Belgium">  BEL</td>
											<td>Pro League</td>
											<td>2M</td>
											<td>Professional</td>
											<td>26,659</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#E00000"></span></td>
											<td>1898</td>
											<td>24.5</td>
										</tr><tr role="row" class="odd">
											<td id="1397" class="sorting_1">Start</td><td>1397</td>
											<td><img src="./Bet_files/NOR.gif" alt="Norway">  NOR</td>
											<td>Premier Division</td>
											<td>9K</td>
											<td>Professional</td>
											<td>11,700</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F8D000"></span></td>
											<td>1905</td>
											<td>24.3</td>
										</tr><tr role="row" class="even">
											<td id="719" class="sorting_1">Stevenage</td><td>719</td>
											<td><img src="./Bet_files/ENG.gif" alt="England">  ENG</td>
											<td>Sky Bet League Two</td>
											<td>10K</td>
											<td>Professional</td>
											<td>6,722</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
											<td>1976</td>
											<td>25.8</td>
										</tr><tr role="row" class="odd">
											<td id="721" class="sorting_1">Stoke</td><td>721</td>
											<td><img src="./Bet_files/ENG.gif" alt="England">  ENG</td>
											<td>Premier Division</td>
											<td>10M</td>
											<td>Professional</td>
											<td>28,384</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
											<td>1863</td>
											<td>27.0</td>
										</tr><tr role="row" class="even">
											<td id="1404" class="sorting_1">Stromsgodset</td><td>1404</td>
											<td><img src="./Bet_files/NOR.gif" alt="Norway">  NOR</td>
											<td>Premier Division</td>
											<td>711K</td>
											<td>Professional</td>
											<td>8,935</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#002060"></span></td>
											<td>1907</td>
											<td>25.4</td>
										</tr><tr role="row" class="odd">
											<td id="960" class="sorting_1">Stuttgart</td><td>960</td>
											<td><img src="./Bet_files/GER.gif" alt="Germany">  GER</td>
											<td>Second Division</td>
											<td>3M</td>
											<td>Professional</td>
											<td>60,449</td>
											<td><span class="label" style="background:#E00000"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1893</td>
											<td>24.7</td>
										</tr><tr role="row" class="even">
											<td id="278" class="sorting_1">STVV</td><td>278</td>
											<td><img src="./Bet_files/BEL.gif" alt="Belgium">  BEL</td>
											<td>Pro League</td>
											<td>0</td>
											<td>Professional</td>
											<td>14,600</td>
											<td><span class="label" style="background:#0050D0"></span> <span class="label" style="background:#E8F800"></span></td>
											<td>1924</td>
											<td>24.1</td>
										</tr><tr role="row" class="odd">
											<td id="722" class="sorting_1">Sunderland</td><td>722</td>
											<td><img src="./Bet_files/ENG.gif" alt="England">  ENG</td>
											<td>Premier Division</td>
											<td>12M</td>
											<td>Professional</td>
											<td>48,707</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#C81018"></span></td>
											<td>1879</td>
											<td>25.9</td>
										</tr><tr role="row" class="even">
											<td id="723" class="sorting_1">Sutton Utd</td><td>723</td>
											<td><img src="./Bet_files/ENG.gif" alt="England">  ENG</td>
											<td>Vanarama National</td>
											<td>5K</td>
											<td>Professional</td>
											<td>5,013</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
											<td>1898</td>
											<td>28.7</td>
										</tr><tr role="row" class="odd">
											<td id="159" class="sorting_1">SV Ried</td><td>159</td>
											<td><img src="./Bet_files/AUT.gif" alt="Austria">  AUT</td>
											<td>Premier Division</td>
											<td>0</td>
											<td>Professional</td>
											<td>7,680</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#188860"></span></td>
											<td>1912</td>
											<td>24.0</td>
										</tr><tr role="row" class="even">
											<td id="724" class="sorting_1">Swansea</td><td>724</td>
											<td><img src="./Bet_files/ENG.gif" alt="England">  ENG</td>
											<td>Premier Division</td>
											<td>24M</td>
											<td>Professional</td>
											<td>20,750</td>
											<td><span class="label" style="background:#303030"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1912</td>
											<td>26.2</td>
										</tr><tr role="row" class="odd">
											<td id="725" class="sorting_1">Swindon</td><td>725</td>
											<td><img src="./Bet_files/ENG.gif" alt="England">  ENG</td>
											<td>Sky Bet League One</td>
											<td>150K</td>
											<td>Professional</td>
											<td>15,547</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#E00818"></span></td>
											<td>1879</td>
											<td>22.0</td>
										</tr><tr role="row" class="even">
											<td id="1043" class="sorting_1">Telstar</td><td>1043</td>
											<td><img src="./Bet_files/NED.gif" alt="Holland">  NED</td>
											<td>Jupiler League</td>
											<td>22K</td>
											<td>Professional</td>
											<td>3,060</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1963</td>
											<td>23.7</td>
										</tr><tr role="row" class="odd">
											<td id="416" class="sorting_1">Tianjin</td><td>416</td>
											<td><img src="./Bet_files/CHN.gif" alt="China">  CHN</td>
											<td>Super League</td>
											<td>6M</td>
											<td>Professional</td>
											<td>60,000</td>
											<td><span class="label" style="background:#501080"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1998</td>
											<td>27.0</td>
										</tr><tr role="row" class="even">
											<td id="429" class="sorting_1">Tolima</td><td>429</td>
											<td><img src="./Bet_files/COL.gif" alt="Colombia">  COL</td>
											<td>First Division</td>
											<td>730K</td>
											<td>Professional</td>
											<td>26,000</td>
											<td><span class="label" style="background:#D8B028"></span> <span class="label" style="background:#701030"></span></td>
											<td>1954</td>
											<td>26.7</td>
										</tr><tr role="row" class="odd">
											<td id="1174" class="sorting_1">Torino</td><td>1174</td>
											<td><img src="./Bet_files/ITA.gif" alt="Italy">  ITA</td>
											<td>Serie A</td>
											<td>4M</td>
											<td>Professional</td>
											<td>27,958</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#481018"></span></td>
											<td>1906</td>
											<td>26.5</td>
										</tr><tr role="row" class="even">
											<td id="308" class="sorting_1">Torpedo Minsk</td><td>308</td>
											<td><img src="./Bet_files/BLR.gif" alt="Belarus">  BLR</td>
											<td>First League</td>
											<td>23K</td>
											<td>Professional</td>
											<td>5,200</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1947</td>
											<td>23.8</td>
										</tr><tr role="row" class="odd">
											<td id="727" class="sorting_1">Torquay</td><td>727</td>
											<td><img src="./Bet_files/ENG.gif" alt="England">  ENG</td>
											<td>Vanarama National</td>
											<td>0</td>
											<td>Professional</td>
											<td>6,200</td>
											<td><span class="label" style="background:#2068B0"></span> <span class="label" style="background:#F0E020"></span></td>
											<td>1899</td>
											<td>23.8</td>
										</tr><tr role="row" class="even">
											<td id="728" class="sorting_1">Tottenham</td><td>728</td>
											<td><img src="./Bet_files/ENG.gif" alt="England">  ENG</td>
											<td>Premier Division</td>
											<td>50M</td>
											<td>Professional</td>
											<td>32,241</td>
											<td><span class="label" style="background:#001040"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1882</td>
											<td>23.8</td>
										</tr><tr role="row" class="odd">
											<td id="886" class="sorting_1">Toulouse FC</td><td>886</td>
											<td><img src="./Bet_files/FRA.gif" alt="France">  FRA</td>
											<td>Ligue 1</td>
											<td>1M</td>
											<td>Professional</td>
											<td>33,150</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#604090"></span></td>
											<td>1970</td>
											<td>24.7</td>
										</tr><tr role="row" class="even">
											<td id="729" class="sorting_1">Tranmere</td><td>729</td>
											<td><img src="./Bet_files/ENG.gif" alt="England">  ENG</td>
											<td>Vanarama National</td>
											<td>30K</td>
											<td>Professional</td>
											<td>16,567</td>
											<td><span class="label" style="background:#104098"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1884</td>
											<td>24.9</td>
										</tr><tr role="row" class="odd">
											<td id="1175" class="sorting_1">Trapani</td><td>1175</td>
											<td><img src="./Bet_files/ITA.gif" alt="Italy">  ITA</td>
											<td>Serie B</td>
											<td>431K</td>
											<td>Professional</td>
											<td>7,787</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#800020"></span></td>
											<td>1905</td>
											<td>26.2</td>
										</tr><tr role="row" class="even">
											<td id="1410" class="sorting_1">Tromso</td><td>1410</td>
											<td><img src="./Bet_files/NOR.gif" alt="Norway">  NOR</td>
											<td>Premier Division</td>
											<td>5K</td>
											<td>Professional</td>
											<td>6,859</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#E00000"></span></td>
											<td>1920</td>
											<td>24.5</td>
										</tr><tr role="row" class="odd">
											<td id="172" class="sorting_1">Tubize</td><td>172</td>
											<td><img src="./Bet_files/BEL.gif" alt="Belgium">  BEL</td>
											<td>Pro League B</td>
											<td>0</td>
											<td>Professional</td>
											<td>8,100</td>
											<td><span class="label" style="background:#F8F000"></span> <span class="label" style="background:#C80000"></span></td>
											<td>1953</td>
											<td>24.8</td>
										</tr><tr role="row" class="even">
											<td id="1519" class="sorting_1">Tyumen</td><td>1519</td>
											<td><img src="./Bet_files/RUS.gif" alt="Russia">  RUS</td>
											<td>First Division</td>
											<td>0</td>
											<td>Professional</td>
											<td>15,000</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#000000"></span></td>
											<td>1961</td>
											<td>26.7</td>
										</tr><tr role="row" class="odd">
											<td id="1178" class="sorting_1">Udinese</td><td>1178</td>
											<td><img src="./Bet_files/ITA.gif" alt="Italy">  ITA</td>
											<td>Serie A</td>
											<td>3M</td>
											<td>Professional</td>
											<td>25,000</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1896</td>
											<td>25.4</td>
										</tr><tr role="row" class="even">
											<td id="1064" class="sorting_1">Ujpest</td><td>1064</td>
											<td><img src="./Bet_files/HUN.gif" alt="Hungary">  HUN</td>
											<td>Division I</td>
											<td>0</td>
											<td>Professional</td>
											<td>13,500</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#501080"></span></td>
											<td>1885</td>
											<td>23.8</td>
										</tr><tr role="row" class="odd">
											<td id="1475" class="sorting_1">Uniao da Madeira</td><td>1475</td>
											<td><img src="./Bet_files/POR.gif" alt="Portugal">  POR</td>
											<td>Second League</td>
											<td>86K</td>
											<td>Professional</td>
											<td>2,500</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
											<td>1913</td>
											<td>26.4</td>
										</tr><tr role="row" class="even">
											<td id="288" class="sorting_1">Union SG</td><td>288</td>
											<td><img src="./Bet_files/BEL.gif" alt="Belgium">  BEL</td>
											<td>Pro League B</td>
											<td>19K</td>
											<td>Professional</td>
											<td>50,000</td>
											<td><span class="label" style="background:#0050D0"></span> <span class="label" style="background:#F8F000"></span></td>
											<td>1897</td>
											<td>25.4</td>
										</tr><tr role="row" class="odd">
											<td id="403" class="sorting_1">Universidad Catolica</td><td>403</td>
											<td><img src="./Bet_files/CHI.gif" alt="Chile">  CHI</td>
											<td>First Division</td>
											<td>2M</td>
											<td>Professional</td>
											<td>16,000</td>
											<td><span class="label" style="background:#0030A0"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1937</td>
											<td>23.8</td>
										</tr><tr role="row" class="even">
											<td id="404" class="sorting_1">Universidad de Chile</td><td>404</td>
											<td><img src="./Bet_files/CHI.gif" alt="Chile">  CHI</td>
											<td>First Division</td>
											<td>3M</td>
											<td>Professional</td>
											<td>49,000</td>
											<td><span class="label" style="background:#E00000"></span> <span class="label" style="background:#0030A0"></span></td>
											<td>1927</td>
											<td>23.0</td>
										</tr><tr role="row" class="odd">
											<td id="1450" class="sorting_1">Universitario</td><td>1450</td>
											<td><img src="./Bet_files/PER.gif" alt="Peru">  PER</td>
											<td>First Division</td>
											<td>61K</td>
											<td>Professional</td>
											<td>80,000</td>
											<td><span class="label" style="background:#880828"></span> <span class="label" style="background:#F8F8E0"></span></td>
											<td>1924</td>
											<td>25.6</td>
										</tr><tr role="row" class="even">
											<td id="1533" class="sorting_1">Ural</td><td>1533</td>
											<td><img src="./Bet_files/RUS.gif" alt="Russia">  RUS</td>
											<td>Premier Division</td>
											<td>86K</td>
											<td>Professional</td>
											<td>10,000</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F07028"></span></td>
											<td>1930</td>
											<td>25.0</td>
										</tr><tr role="row" class="odd">
											<td id="1065" class="sorting_1">Vac</td><td>1065</td>
											<td><img src="./Bet_files/HUN.gif" alt="Hungary">  HUN</td>
											<td>Division II</td>
											<td>0</td>
											<td>Professional</td>
											<td>9,000</td>
											<td><span class="label" style="background:#002060"></span> <span class="label" style="background:#E00000"></span></td>
											<td>1899</td>
											<td>25.3</td>
										</tr><tr role="row" class="even">
											<td id="888" class="sorting_1">Valenciennes FC</td><td>888</td>
											<td><img src="./Bet_files/FRA.gif" alt="France">  FRA</td>
											<td>Domino's Ligue 2</td>
											<td>0</td>
											<td>Professional</td>
											<td>24,926</td>
											<td><span class="label" style="background:#A00820"></span> <span class="label" style="background:#E00000"></span></td>
											<td>1913</td>
											<td>24.9</td>
										</tr><tr role="row" class="odd">
											<td id="1426" class="sorting_1">Valerenga</td><td>1426</td>
											<td><img src="./Bet_files/NOR.gif" alt="Norway">  NOR</td>
											<td>Premier Division</td>
											<td>47K</td>
											<td>Professional</td>
											<td>27,182</td>
											<td><span class="label" style="background:#E00000"></span> <span class="label" style="background:#0060F8"></span></td>
											<td>1913</td>
											<td>24.8</td>
										</tr><tr role="row" class="even">
											<td id="1066" class="sorting_1">Vasas</td><td>1066</td>
											<td><img src="./Bet_files/HUN.gif" alt="Hungary">  HUN</td>
											<td>Division I</td>
											<td>0</td>
											<td>Professional</td>
											<td>18,000</td>
											<td><span class="label" style="background:#304078"></span> <span class="label" style="background:#C81018"></span></td>
											<td>1911</td>
											<td>23.9</td>
										</tr><tr role="row" class="odd">
											<td id="339" class="sorting_1">VDG</td><td>339</td>
											<td><img src="./Bet_files/BRA.gif" alt="Brazil">  BRA</td>
											<td>Second Division</td>
											<td>1M</td>
											<td>Professional</td>
											<td>24,311</td>
											<td><span class="label" style="background:#F8D000"></span> <span class="label" style="background:#C80000"></span></td>
											<td>1898</td>
											<td>28.6</td>
										</tr><tr role="row" class="even">
											<td id="98" class="sorting_1">Velez</td><td>98</td>
											<td><img src="./Bet_files/ARG.gif" alt="Argentina">  ARG</td>
											<td>Premier Division</td>
											<td>0</td>
											<td>Professional</td>
											<td>49,540</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
											<td>1910</td>
											<td>25.8</td>
										</tr><tr role="row" class="odd">
											<td id="521" class="sorting_1">Vendsyssel FF</td><td>521</td>
											<td><img src="./Bet_files/DEN.gif" alt="Denmark">  DEN</td>
											<td>First Division</td>
											<td>58K</td>
											<td>Professional</td>
											<td>7,500</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1886</td>
											<td>24.8</td>
										</tr><tr role="row" class="even">
											<td id="1179" class="sorting_1">Venezia</td><td>1179</td>
											<td><img src="./Bet_files/ITA.gif" alt="Italy">  ITA</td>
											<td>Serie C/B</td>
											<td>689K</td>
											<td>Professional</td>
											<td>7,450</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#000000"></span></td>
											<td>1907</td>
											<td>26.6</td>
										</tr><tr role="row" class="odd">
											<td id="569" class="sorting_1">Viborg FF</td><td>569</td>
											<td><img src="./Bet_files/DEN.gif" alt="Denmark">  DEN</td>
											<td>Superliga</td>
											<td>173K</td>
											<td>Professional</td>
											<td>9,566</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
											<td>1896</td>
											<td>26.0</td>
										</tr><tr role="row" class="even">
											<td id="1181" class="sorting_1">Vicenza</td><td>1181</td>
											<td><img src="./Bet_files/ITA.gif" alt="Italy">  ITA</td>
											<td>Serie B</td>
											<td>431K</td>
											<td>Professional</td>
											<td>12,124</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#E00000"></span></td>
											<td>1902</td>
											<td>24.8</td>
										</tr><tr role="row" class="odd">
											<td id="1062" class="sorting_1">Videoton</td><td>1062</td>
											<td><img src="./Bet_files/HUN.gif" alt="Hungary">  HUN</td>
											<td>Division I</td>
											<td>224K</td>
											<td>Professional</td>
											<td>10,000</td>
											<td><span class="label" style="background:#303850"></span> <span class="label" style="background:#B02030"></span></td>
											<td>1941</td>
											<td>26.8</td>
										</tr><tr role="row" class="even">
											<td id="1422" class="sorting_1">Viking</td><td>1422</td>
											<td><img src="./Bet_files/NOR.gif" alt="Norway">  NOR</td>
											<td>Premier Division</td>
											<td>474K</td>
											<td>Professional</td>
											<td>16,300</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#002060"></span></td>
											<td>1899</td>
											<td>22.4</td>
										</tr><tr role="row" class="odd">
											<td id="477" class="sorting_1">Viktoria Plzen</td><td>477</td>
											<td><img src="./Bet_files/CZE.gif" alt="Czech Republic">  CZE</td>
											<td>First Division</td>
											<td>1M</td>
											<td>Professional</td>
											<td>11,700</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#E00000"></span></td>
											<td>1911</td>
											<td>26.3</td>
										</tr><tr role="row" class="even">
											<td id="478" class="sorting_1">Viktoria Zizkov</td><td>478</td>
											<td><img src="./Bet_files/CZE.gif" alt="Czech Republic">  CZE</td>
											<td>Second Division</td>
											<td>160K</td>
											<td>Professional</td>
											<td>5,334</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#E00000"></span></td>
											<td>1903</td>
											<td>25.1</td>
										</tr><tr role="row" class="odd">
											<td id="340" class="sorting_1">VIT</td><td>340</td>
											<td><img src="./Bet_files/BRA.gif" alt="Brazil">  BRA</td>
											<td>First Division</td>
											<td>238K</td>
											<td>Professional</td>
											<td>38,000</td>
											<td><span class="label" style="background:#006030"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1899</td>
											<td>25.3</td>
										</tr><tr role="row" class="even">
											<td id="1494" class="sorting_1">Vit. Guimaraes</td><td>1494</td>
											<td><img src="./Bet_files/POR.gif" alt="Portugal">  POR</td>
											<td>Premier League</td>
											<td>151K</td>
											<td>Professional</td>
											<td>30,008</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1922</td>
											<td>24.5</td>
										</tr><tr role="row" class="odd">
											<td id="1495" class="sorting_1">Vit. Setubal</td><td>1495</td>
											<td><img src="./Bet_files/POR.gif" alt="Portugal">  POR</td>
											<td>Premier League</td>
											<td>65K</td>
											<td>Professional</td>
											<td>13,468</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
											<td>1910</td>
											<td>24.0</td>
										</tr><tr role="row" class="even">
											<td id="1046" class="sorting_1">Vitesse</td><td>1046</td>
											<td><img src="./Bet_files/NED.gif" alt="Holland">  NED</td>
											<td>Eredivisie</td>
											<td>1M</td>
											<td>Professional</td>
											<td>25,500</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F8D800"></span></td>
											<td>1892</td>
											<td>23.8</td>
										</tr><tr role="row" class="odd">
											<td id="1011" class="sorting_1">Volendam</td><td>1011</td>
											<td><img src="./Bet_files/NED.gif" alt="Holland">  NED</td>
											<td>Jupiler League</td>
											<td>43K</td>
											<td>Professional</td>
											<td>7,200</td>
											<td><span class="label" style="background:#E87828"></span> <span class="label" style="background:#E06818"></span></td>
											<td>1920</td>
											<td>23.6</td>
										</tr><tr role="row" class="even">
											<td id="1044" class="sorting_1">VVV</td><td>1044</td>
											<td><img src="./Bet_files/NED.gif" alt="Holland">  NED</td>
											<td>Jupiler League</td>
											<td>431K</td>
											<td>Professional</td>
											<td>8,000</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F8F000"></span></td>
											<td>1903</td>
											<td>22.3</td>
										</tr><tr role="row" class="odd">
											<td id="731" class="sorting_1">Walsall</td><td>731</td>
											<td><img src="./Bet_files/ENG.gif" alt="England">  ENG</td>
											<td>Sky Bet League One</td>
											<td>100K</td>
											<td>Professional</td>
											<td>10,989</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
											<td>1888</td>
											<td>23.0</td>
										</tr><tr role="row" class="even">
											<td id="732" class="sorting_1">Watford</td><td>732</td>
											<td><img src="./Bet_files/ENG.gif" alt="England">  ENG</td>
											<td>Premier Division</td>
											<td>8M</td>
											<td>Professional</td>
											<td>21,250</td>
											<td><span class="label" style="background:#F8C800"></span> <span class="label" style="background:#F8C800"></span></td>
											<td>1881</td>
											<td>27.6</td>
										</tr><tr role="row" class="odd">
											<td id="734" class="sorting_1">West Brom</td><td>734</td>
											<td><img src="./Bet_files/ENG.gif" alt="England">  ENG</td>
											<td>Premier Division</td>
											<td>10M</td>
											<td>Professional</td>
											<td>26,445</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
											<td>1878</td>
											<td>26.9</td>
										</tr><tr role="row" class="even">
											<td id="735" class="sorting_1">West Ham</td><td>735</td>
											<td><img src="./Bet_files/ENG.gif" alt="England">  ENG</td>
											<td>Premier Division</td>
											<td>6M</td>
											<td>Professional</td>
											<td>60,000</td>
											<td><span class="label" style="background:#80D0E8"></span> <span class="label" style="background:#782038"></span></td>
											<td>1895</td>
											<td>26.4</td>
										</tr><tr role="row" class="odd">
											<td id="289" class="sorting_1">Westerlo</td><td>289</td>
											<td><img src="./Bet_files/BEL.gif" alt="Belgium">  BEL</td>
											<td>Pro League</td>
											<td>0</td>
											<td>Professional</td>
											<td>7,783</td>
											<td><span class="label" style="background:#0050D0"></span> <span class="label" style="background:#E8F800"></span></td>
											<td>1933</td>
											<td>25.7</td>
										</tr><tr role="row" class="even">
											<td id="737" class="sorting_1">Wigan</td><td>737</td>
											<td><img src="./Bet_files/ENG.gif" alt="England">  ENG</td>
											<td>Sky Bet Championship</td>
											<td>1M</td>
											<td>Professional</td>
											<td>25,133</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
											<td>1932</td>
											<td>26.2</td>
										</tr><tr role="row" class="odd">
											<td id="1047" class="sorting_1">Willem II</td><td>1047</td>
											<td><img src="./Bet_files/NED.gif" alt="Holland">  NED</td>
											<td>Eredivisie</td>
											<td>65K</td>
											<td>Professional</td>
											<td>14,500</td>
											<td><span class="label" style="background:#202838"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1896</td>
											<td>24.3</td>
										</tr><tr role="row" class="even">
											<td id="96023666" class="sorting_1">Wisla Pulawy</td><td>96023666</td>
											<td><img src="./Bet_files/POL(1).gif" alt="Poland">  POL</td>
											<td>First Division</td>
											<td>31K</td>
											<td>Professional</td>
											<td>4,418</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
											<td>1923</td>
											<td>25.2</td>
										</tr><tr role="row" class="odd">
											<td id="961" class="sorting_1">Wolfsburg</td><td>961</td>
											<td><img src="./Bet_files/GER.gif" alt="Germany">  GER</td>
											<td>First Division</td>
											<td>26M</td>
											<td>Professional</td>
											<td>30,000</td>
											<td><span class="label" style="background:#A0F070"></span> <span class="label" style="background:#A0F070"></span></td>
											<td>1945</td>
											<td>24.9</td>
										</tr><tr role="row" class="even">
											<td id="740" class="sorting_1">Wolves</td><td>740</td>
											<td><img src="./Bet_files/ENG.gif" alt="England">  ENG</td>
											<td>Sky Bet Championship</td>
											<td>3M</td>
											<td>Professional</td>
											<td>30,852</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F88000"></span></td>
											<td>1877</td>
											<td>24.7</td>
										</tr><tr role="row" class="odd">
											<td id="741" class="sorting_1">Wrexham</td><td>741</td>
											<td><img src="./Bet_files/ENG.gif" alt="England">  ENG</td>
											<td>Vanarama National</td>
											<td>42K</td>
											<td>Professional</td>
											<td>15,500</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#C80030"></span></td>
											<td>1864</td>
											<td>24.5</td>
										</tr><tr role="row" class="even">
											<td id="742" class="sorting_1">Wycombe</td><td>742</td>
											<td><img src="./Bet_files/ENG.gif" alt="England">  ENG</td>
											<td>Sky Bet League Two</td>
											<td>0</td>
											<td>Professional</td>
											<td>10,264</td>
											<td><span class="label" style="background:#001040"></span> <span class="label" style="background:#80E8F8"></span></td>
											<td>1887</td>
											<td>26.8</td>
										</tr><tr role="row" class="odd">
											<td id="985" class="sorting_1">Xanthi</td><td>985</td>
											<td><img src="./Bet_files/GRE.gif" alt="Greece">  GRE</td>
											<td>Superleague</td>
											<td>17K</td>
											<td>Professional</td>
											<td>7,244</td>
											<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
											<td>1967</td>
											<td>24.9</td>
										</tr><tr role="row" class="even">
											<td id="743" class="sorting_1">Yeovil</td><td>743</td>
											<td><img src="./Bet_files/ENG.gif" alt="England">  ENG</td>
											<td>Sky Bet League Two</td>
											<td>0</td>
											<td>Professional</td>
											<td>9,565</td>
											<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#189048"></span></td>
											<td>1895</td>
											<td>23.8</td>
										</tr><tr role="row" class="odd">
											<td id="744" class="sorting_1">York</td><td>744</td>
											<td><img src="./Bet_files/ENG.gif" alt="England">  ENG</td>
											<td>Vanarama National</td>
											<td>5K</td>
											<td>Professional</td>
											<td>9,196</td>
											<td><span class="label" style="background:#C00830"></span> <span class="label" style="background:#C00830"></span></td>
											<td>1922</td>
											<td>23.3</td>
										</tr><tr role="row" class="even">
											<td id="444" class="sorting_1">Zagreb</td><td>444</td>
											<td><img src="./Bet_files/CRO(1).gif" alt="Croatia">  CRO</td>
											<td>Second League</td>
											<td>17K</td>
											<td>Professional</td>
											<td>8,850</td>
											<td><span class="label" style="background:#E00000"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1903</td>
											<td>21.6</td>
										</tr><tr role="row" class="odd">
											<td id="467" class="sorting_1">Zlin</td><td>467</td>
											<td><img src="./Bet_files/CZE.gif" alt="Czech Republic">  CZE</td>
											<td>First Division</td>
											<td>239K</td>
											<td>Professional</td>
											<td>5,783</td>
											<td><span class="label" style="background:#F8F000"></span> <span class="label" style="background:#F8F000"></span></td>
											<td>1919</td>
											<td>24.5</td>
										</tr><tr role="row" class="even">
											<td id="1068" class="sorting_1">ZTE</td><td>1068</td>
											<td><img src="./Bet_files/HUN.gif" alt="Hungary">  HUN</td>
											<td>Division II</td>
											<td>0</td>
											<td>Professional</td>
											<td>13,870</td>
											<td><span class="label" style="background:#0050D0"></span> <span class="label" style="background:#F8F8F8"></span></td>
											<td>1920</td>
											<td>22.1</td>
										</tr><tr role="row" class="odd">
											<td id="299" class="sorting_1">Zulte Waregem</td><td>299</td>
											<td><img src="./Bet_files/BEL.gif" alt="Belgium">  BEL</td>
											<td>Pro League</td>
											<td>0</td>
											<td>Professional</td>
											<td>11,000</td>
											<td><span class="label" style="background:#006030"></span> <span class="label" style="background:#A00000"></span></td>
											<td>1950</td>
											<td>25.0</td>
										</tr><tr role="row" class="even">
											<td id="965" class="sorting_1">Zwickau</td><td>965</td>
											<td><img src="./Bet_files/GER.gif" alt="Germany">  GER</td>
											<td>Third Division</td>
											<td>0</td>
											<td>Professional</td>
											<td>10,700</td>
											<td><span class="label" style="background:#B00810"></span> <span class="label" style="background:#902830"></span></td>
											<td>1990</td>
											<td>25.3</td>
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
