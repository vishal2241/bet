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
										<tr role="row" class="odd">
											<td id="8490994" class="sorting_1">1461 Trabzon</td>
											<td>8490994</td>
											<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/TUR.gif" alt="Turkey">  TUR</td>
											<td>2. League Red</td>
											<td>6K</td>
											<td>Professional</td>
											<td>41,513</td>
											<td><span class="label" style="background:#00A0E0"></span> <span class="label" style="background:#A80030"></span></td>
											<td>1998</td>
											<td>21.4</td>
										</tr><tr role="row" class="even">
										<td id="55001110" class="sorting_1">1? Dezembro</td>
										<td>55001110</td>
										<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/POR.gif" alt="Portugal">  POR</td>
										<td>PT Championship</td>
										<td>4K</td>
										<td>Semi-Professional</td>
										<td>2,000</td>
										<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#E00000"></span></td>
										<td>1880</td>
										<td>22.4</td>
									</tr><tr role="row" class="odd">
									<td id="1079" class="sorting_1">?or</td>
									<td>1079</td>
									<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ISL.gif" alt="Iceland">  ISL</td>
									<td>First Division</td>
									<td>7K</td>
									<td>Semi-Professional</td>
									<td>1,645</td>
									<td><span class="label" style="background:#C80000"></span> <span class="label" style="background:#F8F8F8"></span></td>
									<td>1915</td>
									<td>23.1</td>
								</tr><tr role="row" class="even">
								<td id="3400446" class="sorting_1">?rottur R.</td>
								<td>3400446</td>
								<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ISL.gif" alt="Iceland">  ISL</td>
								<td>Premier Division</td>
								<td>13K</td>
								<td>Semi-Professional</td>
								<td>2,500</td>
								<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#E00000"></span></td>
								<td>1949</td>
								<td>24.0</td>
							</tr><tr role="row" class="odd">
							<td id="810130" class="sorting_1">A. Baleares</td>
							<td>810130</td>
							<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ESP.gif" alt="Spain">  ESP</td>
							<td>Second Division B3</td>
							<td>0</td>
							<td>Professional</td>
							<td>3,000</td>
							<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#0050D0"></span></td>
							<td>1942</td>
							<td>28.6</td>
						</tr><tr role="row" class="even">
						<td id="1664" class="sorting_1">A. Bilbao</td>
						<td>1664</td>
						<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ESP.gif" alt="Spain">  ESP</td>
						<td>First Division</td>
						<td>9M</td>
						<td>Professional</td>
						<td>53,332</td>
						<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#B83020"></span></td>
						<td>1898</td>
						<td>26.9</td>
					</tr><tr role="row" class="odd">
					<td id="1665" class="sorting_1">A. Bilbao B</td>
					<td>1665</td>
					<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ESP.gif" alt="Spain">  ESP</td>
					<td>Second Division B2</td>
					<td>0</td>
					<td>Professional</td>
					<td>2,250</td>
					<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#E00000"></span></td>
					<td>1964</td>
					<td>20.8</td>
				</tr><tr role="row" class="even">
				<td id="1687" class="sorting_1">A. Madrid</td>
				<td>1687</td>
				<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ESP.gif" alt="Spain">  ESP</td>
				<td>First Division</td>
				<td>4M</td>
				<td>Professional</td>
				<td>54,851</td>
				<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
				<td>1903</td>
				<td>25.0</td>
			</tr><tr role="row" class="odd">
			<td id="67118675" class="sorting_1">A. Sagunto</td>
			<td>67118675</td>
			<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ESP.gif" alt="Spain">  ESP</td>
			<td>Second Division B3</td>
			<td>0</td>
			<td>Semi-Professional</td>
			<td>4,000</td>
			<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
			<td>1922</td>
			<td>25.2</td>
		</tr><tr role="row" class="even">
		<td id="70000106" class="sorting_1">A. Selcukspor</td>
		<td>70000106</td>
		<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/TUR.gif" alt="Turkey">  TUR</td>
		<td>2. League White</td>
		<td>0</td>
		<td>Professional</td>
		<td>22,459</td>
		<td><span class="label" style="background:#008888"></span> <span class="label" style="background:#F8F8F8"></span></td>
		<td>1955</td>
		<td>24.0</td>
	</tr><tr role="row" class="odd">
	<td id="450542" class="sorting_1">A. Uskudar</td>
	<td>450542</td>
	<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/TUR.gif" alt="Turkey">  TUR</td>
	<td>2. League White</td>
	<td>0</td>
	<td>Professional</td>
	<td>5,060</td>
	<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#008030"></span></td>
	<td>1908</td>
	<td>22.8</td>
</tr><tr role="row" class="even">
<td id="1099" class="sorting_1">A.C. Milan</td>
<td>1099</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ITA.gif" alt="Italy">  ITA</td>
<td>Serie A</td>
<td>5M</td>
<td>Professional</td>
<td>80,018</td>
<td><span class="label" style="background:#C81018"></span> <span class="label" style="background:#101010"></span></td>
<td>1899</td>
<td>26.0</td>
</tr><tr role="row" class="odd">
<td id="85012713" class="sorting_1">A.S Beziers</td>
<td>85012713</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/FRA.gif" alt="France">  FRA</td>
<td>National</td>
<td>0</td>
<td>Semi-Professional</td>
<td>12,000</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
<td>2007</td>
<td>24.8</td>
</tr><tr role="row" class="even">
<td id="168" class="sorting_1">AA Gent</td>
<td>168</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/BEL.gif" alt="Belgium">  BEL</td>
<td>Pro League</td>
<td>4M</td>
<td>Professional</td>
<td>20,000</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#4890B8"></span></td>
<td>1900</td>
<td>25.4</td>
</tr><tr role="row" class="odd">
<td id="483" class="sorting_1">AaB</td>
<td>483</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/DEN.gif" alt="Denmark">  DEN</td>
<td>Superliga</td>
<td>463K</td>
<td>Professional</td>
<td>13,800</td>
<td><span class="label" style="background:#E00000"></span> <span class="label" style="background:#F8F8F8"></span></td>
<td>1885</td>
<td>23.4</td>
</tr><tr role="row" class="even">
<td id="121219" class="sorting_1">Aalen</td>
<td>121219</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/GER.gif" alt="Germany">  GER</td>
<td>Third Division</td>
<td>0</td>
<td>Professional</td>
<td>14,500</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F8F8F8"></span></td>
<td>1921</td>
<td>23.5</td>
</tr><tr role="row" class="odd">
<td id="1289" class="sorting_1">Aalesund</td>
<td>1289</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/NOR.gif" alt="Norway">  NOR</td>
<td>Premier Division</td>
<td>142K</td>
<td>Professional</td>
<td>10,778</td>
<td><span class="label" style="background:#0050D0"></span> <span class="label" style="background:#F87000"></span></td>
<td>1914</td>
<td>23.7</td>
</tr><tr role="row" class="even">
<td id="1848" class="sorting_1">Aarau</td>
<td>1848</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/SUI.gif" alt="Switzerland">  SUI</td>
<td>Challenge League</td>
<td>79K</td>
<td>Professional</td>
<td>9,249</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#E00000"></span></td>
<td>1902</td>
<td>25.5</td>
</tr><tr role="row" class="odd">
<td id="925050" class="sorting_1">Aarhus Fremad</td>
<td>925050</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/DEN.gif" alt="Denmark">  DEN</td>
<td>Second Division</td>
<td>0</td>
<td>Amateur</td>
<td>5,000</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
<td>1947</td>
<td>25.1</td>
</tr><tr role="row" class="even">
<td id="480" class="sorting_1">AB</td>
<td>480</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/DEN.gif" alt="Denmark">  DEN</td>
<td>First Division</td>
<td>0</td>
<td>Semi-Professional</td>
<td>13,800</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
<td>1889</td>
<td>24.6</td>
</tr><tr role="row" class="odd">
<td id="1536" class="sorting_1">Aberdeen</td>
<td>1536</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/SCO.gif" alt="Scotland">  SCO</td>
<td>Ladbrokes Premiership</td>
<td>200K</td>
<td>Professional</td>
<td>20,866</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#C81018"></span></td>
<td>1903</td>
<td>23.6</td>
</tr><tr role="row" class="even">
<td id="1927" class="sorting_1">Aberystwyth</td>
<td>1927</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/WAL.gif" alt="Wales">  WAL</td>
<td>Welsh Premier League</td>
<td>10K</td>
<td>Semi-Professional</td>
<td>2,502</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#108830"></span></td>
<td>1884</td>
<td>22.7</td>
</tr><tr role="row" class="odd">
<td id="107205" class="sorting_1">ABF</td>
<td>107205</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/BRA.gif" alt="Brazil">  BRA</td>
<td>Third Division</td>
<td>24K</td>
<td>Professional</td>
<td>18,000</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#D00818"></span></td>
<td>1915</td>
<td>27.7</td>
</tr><tr role="row" class="even">
<td id="400362" class="sorting_1">AC Ajaccio</td>
<td>400362</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/FRA.gif" alt="France">  FRA</td>
<td>Domino's Ligue 2</td>
<td>0</td>
<td>Professional</td>
<td>10,660</td>
<td><span class="label" style="background:#E00000"></span> <span class="label" style="background:#F8F8F8"></span></td>
<td>1910</td>
<td>25.2</td>
</tr><tr role="row" class="odd">
<td id="481" class="sorting_1">AC Horsens</td>
<td>481</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/DEN.gif" alt="Denmark">  DEN</td>
<td>Superliga</td>
<td>173K</td>
<td>Professional</td>
<td>10,495</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F8D000"></span></td>
<td>1915</td>
<td>24.9</td>
</tr><tr role="row" class="even">
<td id="521643" class="sorting_1">AC Oulu</td>
<td>521643</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/FIN.gif" alt="Finland">  FIN</td>
<td>First Division</td>
<td>861</td>
<td>Semi-Professional</td>
<td>4,392</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#002060"></span></td>
<td>2002</td>
<td>22.5</td>
</tr><tr role="row" class="odd">
<td id="2388" class="sorting_1">Ac. Viseu</td>
<td>2388</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/POR.gif" alt="Portugal">  POR</td>
<td>Second League</td>
<td>0</td>
<td>Professional</td>
<td>14,368</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#000000"></span></td>
<td>1914</td>
<td>25.0</td>
</tr><tr role="row" class="even">
<td id="2393" class="sorting_1">Academica</td>
<td>2393</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/POR.gif" alt="Portugal">  POR</td>
<td>Second League</td>
<td>43K</td>
<td>Professional</td>
<td>29,744</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#000000"></span></td>
<td>1876</td>
<td>24.4</td>
</tr><tr role="row" class="odd">
<td id="57141886" class="sorting_1">Academica Clinceni</td>
<td>57141886</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ROU.gif" alt="Romania">  ROU</td>
<td>Liga II</td>
<td>0</td>
<td>Professional</td>
<td>2,000</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#2068B0"></span></td>
<td>2015</td>
<td>23.5</td>
</tr><tr role="row" class="even">
<td id="736267" class="sorting_1">Academica/SF</td>
<td>736267</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/POR.gif" alt="Portugal">  POR</td>
<td>PT Championship</td>
<td>861</td>
<td>Semi-Professional</td>
<td>2,500</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#000000"></span></td>
<td>1887</td>
<td>22.8</td>
</tr><tr role="row" class="odd">
<td id="109210" class="sorting_1">Accrington</td>
<td>109210</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ENG.gif" alt="England">  ENG</td>
<td>Sky Bet League Two</td>
<td>0</td>
<td>Professional</td>
<td>5,070</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
<td>1968</td>
<td>25.5</td>
</tr><tr role="row" class="even">
<td id="129685" class="sorting_1">Acharnaikos</td>
<td>129685</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/GRE.gif" alt="Greece">  GRE</td>
<td>B Division</td>
<td>0</td>
<td>Professional</td>
<td>4,450</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#108830"></span></td>
<td>1939</td>
<td>23.0</td>
</tr><tr role="row" class="odd">
<td id="862787" class="sorting_1">Achilles</td>
<td>862787</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/NED.gif" alt="Holland">  NED</td>
<td>Jupiler League</td>
<td>7K</td>
<td>Professional</td>
<td>4,500</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F8F8F8"></span></td>
<td>1929</td>
<td>23.9</td>
</tr><tr role="row" class="even">
<td id="57036465" class="sorting_1">ACS Berceni</td>
<td>57036465</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ROU.gif" alt="Romania">  ROU</td>
<td>Liga II</td>
<td>0</td>
<td>Professional</td>
<td>450</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#E00000"></span></td>
<td>1957</td>
<td>22.8</td>
</tr><tr role="row" class="odd">
<td id="57102772" class="sorting_1">ACS Poli</td>
<td>57102772</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ROU.gif" alt="Romania">  ROU</td>
<td>Liga I</td>
<td>0</td>
<td>Professional</td>
<td>32,972</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#402880"></span></td>
<td>2012</td>
<td>26.4</td>
</tr><tr role="row" class="even">
<td id="55027268" class="sorting_1">AD Nogueirense</td>
<td>55027268</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/POR.gif" alt="Portugal">  POR</td>
<td>PT Championship</td>
<td>4K</td>
<td>Semi-Professional</td>
<td>3,500</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#E00000"></span></td>
<td>1973</td>
<td>23.9</td>
</tr><tr role="row" class="odd">
<td id="55001078" class="sorting_1">AD Oliveirense</td>
<td>55001078</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/POR.gif" alt="Portugal">  POR</td>
<td>PT Championship</td>
<td>4K</td>
<td>Semi-Professional</td>
<td>3,500</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#E00000"></span></td>
<td>1952</td>
<td>23.9</td>
</tr><tr role="row" class="even">
<td id="2428" class="sorting_1">AD Sanjoanense</td>
<td>2428</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/POR.gif" alt="Portugal">  POR</td>
<td>PT Championship</td>
<td>4K</td>
<td>Semi-Professional</td>
<td>11,000</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#000000"></span></td>
<td>1924</td>
<td>22.5</td>
</tr><tr role="row" class="odd">
<td id="450573" class="sorting_1">Adana D.S.</td>
<td>450573</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/TUR.gif" alt="Turkey">  TUR</td>
<td>1. League</td>
<td>70K</td>
<td>Professional</td>
<td>16,095</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
<td>1940</td>
<td>26.6</td>
</tr><tr role="row" class="even">
<td id="1862" class="sorting_1">Adanaspor</td>
<td>1862</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/TUR.gif" alt="Turkey">  TUR</td>
<td>Super League</td>
<td>77K</td>
<td>Professional</td>
<td>16,095</td>
<td><span class="label" style="background:#F86820"></span> <span class="label" style="background:#F8F8F8"></span></td>
<td>1954</td>
<td>24.1</td>
</tr><tr role="row" class="odd">
<td id="8457492" class="sorting_1">Adelaide United</td>
<td>8457492</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/AUS.gif" alt="Australia">  AUS</td>
<td>Hyundai A-League</td>
<td>126K</td>
<td>Professional</td>
<td>16,500</td>
<td><span class="label" style="background:#303030"></span> <span class="label" style="background:#C80030"></span></td>
<td>2003</td>
<td>24.8</td>
</tr><tr role="row" class="even">
<td id="986" class="sorting_1">ADO Den Haag</td>
<td>986</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/NED.gif" alt="Holland">  NED</td>
<td>Eredivisie</td>
<td>258K</td>
<td>Professional</td>
<td>15,000</td>
<td><span class="label" style="background:#F8C800"></span> <span class="label" style="background:#187038"></span></td>
<td>1905</td>
<td>24.5</td>
</tr><tr role="row" class="odd">
<td id="967" class="sorting_1">AEK</td>
<td>967</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/GRE.gif" alt="Greece">  GRE</td>
<td>Superleague</td>
<td>258K</td>
<td>Professional</td>
<td>69,618</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
<td>1924</td>
<td>25.1</td>
</tr><tr role="row" class="even">
<td id="57110823" class="sorting_1">AFC Astra</td>
<td>57110823</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ROU.gif" alt="Romania">  ROU</td>
<td>Liga I</td>
<td>0</td>
<td>Professional</td>
<td>8,500</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F8F8F8"></span></td>
<td>2012</td>
<td>28.6</td>
</tr><tr role="row" class="odd">
<td id="8601358" class="sorting_1">AFC Fylde</td>
<td>8601358</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ENG.gif" alt="England">  ENG</td>
<td>Vanarama North</td>
<td>10K</td>
<td>Professional</td>
<td>5,085</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#F8F8F8"></span></td>
<td>1988</td>
<td>25.5</td>
</tr><tr role="row" class="even">
<td id="8604272" class="sorting_1">AFC Telford</td>
<td>8604272</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ENG.gif" alt="England">  ENG</td>
<td>Vanarama North</td>
<td>0</td>
<td>Semi-Professional</td>
<td>6,000</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F8F8F8"></span></td>
<td>2004</td>
<td>23.1</td>
</tr><tr role="row" class="odd">
<td id="93052555" class="sorting_1">AFC United</td>
<td>93052555</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/SWE.gif" alt="Sweden">  SWE</td>
<td>First Division Elite</td>
<td>0</td>
<td>Professional</td>
<td>5,000</td>
<td><span class="label" style="background:#F86028"></span> <span class="label" style="background:#F86028"></span></td>
<td>2013</td>
<td>24.7</td>
</tr><tr role="row" class="even">
<td id="5110769" class="sorting_1">AFC Wimbledon</td>
<td>5110769</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ENG.gif" alt="England">  ENG</td>
<td>Sky Bet League One</td>
<td>175K</td>
<td>Professional</td>
<td>5,027</td>
<td><span class="label" style="background:#0050D0"></span> <span class="label" style="background:#083880"></span></td>
<td>2002</td>
<td>25.4</td>
</tr><tr role="row" class="odd">
<td id="482" class="sorting_1">AGF</td>
<td>482</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/DEN.gif" alt="Denmark">  DEN</td>
<td>Superliga</td>
<td>116K</td>
<td>Professional</td>
<td>20,200</td>
<td><span class="label" style="background:#083078"></span> <span class="label" style="background:#F8F8F8"></span></td>
<td>1880</td>
<td>24.3</td>
</tr><tr role="row" class="even">
<td id="677142" class="sorting_1">Agr. Asteras</td>
<td>677142</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/GRE.gif" alt="Greece">  GRE</td>
<td>B Division</td>
<td>0</td>
<td>Professional</td>
<td>2,267</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#006030"></span></td>
<td>1932</td>
<td>24.8</td>
</tr><tr role="row" class="odd">
<td id="2462" class="sorting_1">Agueda</td>
<td>2462</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/POR.gif" alt="Portugal">  POR</td>
<td>PT Championship</td>
<td>4K</td>
<td>Semi-Professional</td>
<td>10,000</td>
<td><span class="label" style="background:#0030A0"></span> <span class="label" style="background:#E00808"></span></td>
<td>1924</td>
<td>24.5</td>
</tr><tr role="row" class="even">
<td id="7860422" class="sorting_1">Ahi Nazareth</td>
<td>7860422</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ISR.gif" alt="Israel">  ISR</td>
<td>National League</td>
<td>23K</td>
<td>Professional</td>
<td>5,000</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#00A030"></span></td>
<td>1967</td>
<td>24.2</td>
</tr><tr role="row" class="odd">
<td id="677832" class="sorting_1">Aiginiakos</td>
<td>677832</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/GRE.gif" alt="Greece">  GRE</td>
<td>B Division</td>
<td>0</td>
<td>Professional</td>
<td>1,000</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
<td>1972</td>
<td>24.0</td>
</tr><tr role="row" class="even">
<td id="1780" class="sorting_1">AIK</td>
<td>1780</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/SWE.gif" alt="Sweden">  SWE</td>
<td>Premier Division</td>
<td>89K</td>
<td>Professional</td>
<td>53,000</td>
<td><span class="label" style="background:#F8F838"></span> <span class="label" style="background:#000000"></span></td>
<td>1891</td>
<td>25.6</td>
</tr><tr role="row" class="odd">
<td id="350949" class="sorting_1">Airbus UK</td>
<td>350949</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/WAL.gif" alt="Wales">  WAL</td>
<td>Welsh Premier League</td>
<td>3K</td>
<td>Semi-Professional</td>
<td>1,600</td>
<td><span class="label" style="background:#002060"></span> <span class="label" style="background:#0030A0"></span></td>
<td>1946</td>
<td>23.9</td>
</tr><tr role="row" class="even">
<td id="5203872" class="sorting_1">Airdrie</td>
<td>5203872</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/SCO.gif" alt="Scotland">  SCO</td>
<td>Ladbrokes League 1</td>
<td>10K</td>
<td>Professional</td>
<td>10,101</td>
<td><span class="label" style="background:#E00000"></span> <span class="label" style="background:#F8F8F8"></span></td>
<td>2002</td>
<td>21.7</td>
</tr><tr role="row" class="odd">
<td id="824" class="sorting_1">AJ Auxerre</td>
<td>824</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/FRA.gif" alt="France">  FRA</td>
<td>Domino's Ligue 2</td>
<td>4M</td>
<td>Professional</td>
<td>21,379</td>
<td><span class="label" style="background:#E0E0E0"></span> <span class="label" style="background:#F8F8F8"></span></td>
<td>1905</td>
<td>22.9</td>
</tr><tr role="row" class="even">
<td id="992" class="sorting_1">Ajax</td>
<td>992</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/NED.gif" alt="Holland">  NED</td>
<td>Eredivisie</td>
<td>4M</td>
<td>Professional</td>
<td>53,346</td>
<td><span class="label" style="background:#B02830"></span> <span class="label" style="background:#F8F8F8"></span></td>
<td>1900</td>
<td>23.0</td>
</tr><tr role="row" class="odd">
<td id="1642" class="sorting_1">Ajax CT</td>
<td>1642</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/RSA.gif" alt="South Africa">  RSA</td>
<td>South African Premiership</td>
<td>226K</td>
<td>Professional</td>
<td>64,100</td>
<td><span class="label" style="background:#F84028"></span> <span class="label" style="background:#F8F8F8"></span></td>
<td>1999</td>
<td>24.8</td>
</tr><tr role="row" class="even">
<td id="16009439" class="sorting_1">AKA Burgenland</td>
<td>16009439</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/AUT.gif" alt="Austria">  AUT</td>
<td>100000078</td>
<td>0</td>
<td>Amateur</td>
<td>2,000</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#00C030"></span></td>
<td>0</td>
<td>16.0</td>
</tr><tr role="row" class="odd">
<td id="16009435" class="sorting_1">AKA St. Polten NO</td>
<td>16009435</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/AUT.gif" alt="Austria">  AUT</td>
<td>100000078</td>
<td>0</td>
<td>Amateur</td>
<td>2,000</td>
<td><span class="label" style="background:#1030C0"></span> <span class="label" style="background:#1030C0"></span></td>
<td>2000</td>
<td>16.1</td>
</tr><tr role="row" class="even">
<td id="16009432" class="sorting_1">AKA Tirol</td>
<td>16009432</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/AUT.gif" alt="Austria">  AUT</td>
<td>100000078</td>
<td>0</td>
<td>Amateur</td>
<td>1,000</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#E00000"></span></td>
<td>0</td>
<td>16.3</td>
</tr><tr role="row" class="odd">
<td id="16009433" class="sorting_1">AKA Vorarlberg</td>
<td>16009433</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/AUT.gif" alt="Austria">  AUT</td>
<td>100000078</td>
<td>0</td>
<td>Amateur</td>
<td>2,800</td>
<td><span class="label" style="background:#002080"></span> <span class="label" style="background:#E00000"></span></td>
<td>2003</td>
<td>16.1</td>
</tr><tr role="row" class="even">
<td id="455778" class="sorting_1">Akhisar Bld.</td>
<td>455778</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/TUR.gif" alt="Turkey">  TUR</td>
<td>Super League</td>
<td>155K</td>
<td>Professional</td>
<td>16,597</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
<td>1970</td>
<td>28.0</td>
</tr><tr role="row" class="odd">
<td id="7983732" class="sorting_1">Akragas</td>
<td>7983732</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ITA.gif" alt="Italy">  ITA</td>
<td>Serie C/C</td>
<td>60K</td>
<td>Professional</td>
<td>12,000</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#0050D0"></span></td>
<td>1951</td>
<td>21.8</td>
</tr><tr role="row" class="even">
<td id="8106801" class="sorting_1">Akropolis IF</td>
<td>8106801</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/SWE.gif" alt="Sweden">  SWE</td>
<td>First Division North</td>
<td>894</td>
<td>Semi-Professional</td>
<td>1,500</td>
<td><span class="label" style="background:#0050D0"></span> <span class="label" style="background:#F8F8F8"></span></td>
<td>1968</td>
<td>24.8</td>
</tr><tr role="row" class="odd">
<td id="102850" class="sorting_1">Al-Ahli (KSA)</td>
<td>102850</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/KSA.gif" alt="Saudi Arabia">  KSA</td>
<td>Pro League</td>
<td>6M</td>
<td>Professional</td>
<td>62,241</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#00A030"></span></td>
<td>1937</td>
<td>25.7</td>
</tr><tr role="row" class="even">
<td id="135454" class="sorting_1">Al-Ahli (UAE)</td>
<td>135454</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/UAE.gif" alt="U.A.E.">  UAE</td>
<td>Pro League</td>
<td>3M</td>
<td>Professional</td>
<td>12,000</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#E00000"></span></td>
<td>1970</td>
<td>23.6</td>
</tr><tr role="row" class="odd">
<td id="950376" class="sorting_1">Al-Ain</td>
<td>950376</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/UAE.gif" alt="U.A.E.">  UAE</td>
<td>Pro League</td>
<td>4M</td>
<td>Professional</td>
<td>25,965</td>
<td><span class="label" style="background:#501080"></span> <span class="label" style="background:#F8F8F8"></span></td>
<td>1968</td>
<td>22.7</td>
</tr><tr role="row" class="even">
<td id="102852" class="sorting_1">Al-Hilal (KSA)</td>
<td>102852</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/KSA.gif" alt="Saudi Arabia">  KSA</td>
<td>Pro League</td>
<td>7M</td>
<td>Professional</td>
<td>67,000</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#0030A0"></span></td>
<td>1957</td>
<td>25.9</td>
</tr><tr role="row" class="odd">
<td id="106063" class="sorting_1">Al-Ittihad (KSA)</td>
<td>106063</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/KSA.gif" alt="Saudi Arabia">  KSA</td>
<td>Pro League</td>
<td>7M</td>
<td>Professional</td>
<td>62,241</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F8F000"></span></td>
<td>1927</td>
<td>24.6</td>
</tr><tr role="row" class="even">
<td id="135450" class="sorting_1">Al-Jazira (UAE)</td>
<td>135450</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/UAE.gif" alt="U.A.E.">  UAE</td>
<td>Pro League</td>
<td>3M</td>
<td>Professional</td>
<td>42,056</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#000000"></span></td>
<td>1974</td>
<td>23.9</td>
</tr><tr role="row" class="odd">
<td id="102862" class="sorting_1">Al-Nassr (KSA)</td>
<td>102862</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/KSA.gif" alt="Saudi Arabia">  KSA</td>
<td>Pro League</td>
<td>6M</td>
<td>Professional</td>
<td>67,000</td>
<td><span class="label" style="background:#0030A0"></span> <span class="label" style="background:#F8F000"></span></td>
<td>1955</td>
<td>25.8</td>
</tr><tr role="row" class="even">
<td id="1535" class="sorting_1">Al-Shabab (KSA)</td>
<td>1535</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/KSA.gif" alt="Saudi Arabia">  KSA</td>
<td>Pro League</td>
<td>5M</td>
<td>Professional</td>
<td>67,000</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#000000"></span></td>
<td>1948</td>
<td>25.3</td>
</tr><tr role="row" class="odd">
<td id="135443" class="sorting_1">Al-Shabab (UAE)</td>
<td>135443</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/UAE.gif" alt="U.A.E.">  UAE</td>
<td>Pro League</td>
<td>2M</td>
<td>Professional</td>
<td>13,000</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#006030"></span></td>
<td>1958</td>
<td>23.5</td>
</tr><tr role="row" class="even">
<td id="135430" class="sorting_1">Al-Wahda (UAE)</td>
<td>135430</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/UAE.gif" alt="U.A.E.">  UAE</td>
<td>Pro League</td>
<td>4M</td>
<td>Professional</td>
<td>12,000</td>
<td><span class="label" style="background:#D8B028"></span> <span class="label" style="background:#781828"></span></td>
<td>1974</td>
<td>22.9</td>
</tr><tr role="row" class="odd">
<td id="458718" class="sorting_1">Alanyaspor</td>
<td>458718</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/TUR.gif" alt="Turkey">  TUR</td>
<td>Super League</td>
<td>77K</td>
<td>Professional</td>
<td>10,842</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
<td>1948</td>
<td>26.1</td>
</tr><tr role="row" class="even">
<td id="1688" class="sorting_1">Alaves</td>
<td>1688</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ESP.gif" alt="Spain">  ESP</td>
<td>First Division</td>
<td>0</td>
<td>Professional</td>
<td>19,200</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#2068B0"></span></td>
<td>1921</td>
<td>25.0</td>
</tr><tr role="row" class="odd">
<td id="1660" class="sorting_1">Albacete</td>
<td>1660</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ESP.gif" alt="Spain">  ESP</td>
<td>Second Division B2</td>
<td>25K</td>
<td>Professional</td>
<td>16,551</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F8F8F8"></span></td>
<td>1940</td>
<td>24.5</td>
</tr><tr role="row" class="even">
<td id="1142" class="sorting_1">AlbinoLeffe</td>
<td>1142</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ITA.gif" alt="Italy">  ITA</td>
<td>Serie C/B</td>
<td>60K</td>
<td>Professional</td>
<td>26,562</td>
<td><span class="label" style="background:#002060"></span> <span class="label" style="background:#B8D8E8"></span></td>
<td>1998</td>
<td>23.9</td>
</tr><tr role="row" class="odd">
<td id="1538" class="sorting_1">Albion Rovers</td>
<td>1538</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/SCO.gif" alt="Scotland">  SCO</td>
<td>Ladbrokes League 1</td>
<td>20K</td>
<td>Semi-Professional</td>
<td>1,238</td>
<td><span class="label" style="background:#F8F838"></span> <span class="label" style="background:#F8F838"></span></td>
<td>1882</td>
<td>24.3</td>
</tr><tr role="row" class="even">
<td id="2429" class="sorting_1">Alcanenense</td>
<td>2429</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/POR.gif" alt="Portugal">  POR</td>
<td>PT Championship</td>
<td>3K</td>
<td>Semi-Professional</td>
<td>5,400</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F8F000"></span></td>
<td>1942</td>
<td>23.0</td>
</tr><tr role="row" class="odd">
<td id="810090" class="sorting_1">Alcorcon</td>
<td>810090</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ESP.gif" alt="Spain">  ESP</td>
<td>Second Division</td>
<td>49K</td>
<td>Professional</td>
<td>5,400</td>
<td><span class="label" style="background:#0050D0"></span> <span class="label" style="background:#E8C810"></span></td>
<td>1971</td>
<td>25.4</td>
</tr><tr role="row" class="even">
<td id="1689" class="sorting_1">Alcoyano</td>
<td>1689</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ESP.gif" alt="Spain">  ESP</td>
<td>Second Division B3</td>
<td>0</td>
<td>Professional</td>
<td>5,000</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#0050D0"></span></td>
<td>1929</td>
<td>26.0</td>
</tr><tr role="row" class="odd">
<td id="573" class="sorting_1">Aldershot</td>
<td>573</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ENG.gif" alt="England">  ENG</td>
<td>Vanarama National</td>
<td>0</td>
<td>Professional</td>
<td>7,350</td>
<td><span class="label" style="background:#2050B0"></span> <span class="label" style="background:#B80020"></span></td>
<td>1992</td>
<td>23.4</td>
</tr><tr role="row" class="even">
<td id="108510" class="sorting_1">Aldosivi</td>
<td>108510</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ARG.gif" alt="Argentina">  ARG</td>
<td>Premier Division</td>
<td>10K</td>
<td>Professional</td>
<td>35,354</td>
<td><span class="label" style="background:#F8F000"></span> <span class="label" style="background:#00A030"></span></td>
<td>1913</td>
<td>28.6</td>
</tr><tr role="row" class="odd">
<td id="51008744" class="sorting_1">Alebrijes</td>
<td>51008744</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/MEX.gif" alt="Mexico">  MEX</td>
<td>Promotion League</td>
<td>154K</td>
<td>Professional</td>
<td>15,200</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F84008"></span></td>
<td>2013</td>
<td>25.0</td>
</tr><tr role="row" class="even">
<td id="1102" class="sorting_1">Alessandria</td>
<td>1102</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ITA.gif" alt="Italy">  ITA</td>
<td>Serie C/A</td>
<td>517K</td>
<td>Professional</td>
<td>5,827</td>
<td><span class="label" style="background:#404040"></span> <span class="label" style="background:#B0B0B0"></span></td>
<td>1912</td>
<td>25.0</td>
</tr><tr role="row" class="odd">
<td id="5100015" class="sorting_1">Alfreton</td>
<td>5100015</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ENG.gif" alt="England">  ENG</td>
<td>Vanarama North</td>
<td>10K</td>
<td>Semi-Professional</td>
<td>3,600</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#E00000"></span></td>
<td>1959</td>
<td>25.1</td>
</tr><tr role="row" class="even">
<td id="84107060" class="sorting_1">Alianca Gandra</td>
<td>84107060</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/POR.gif" alt="Portugal">  POR</td>
<td>PT Championship</td>
<td>4K</td>
<td>Semi-Professional</td>
<td>3,000</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#E00000"></span></td>
<td>1946</td>
<td>26.6</td>
</tr><tr role="row" class="odd">
<td id="117754" class="sorting_1">Alianza</td>
<td>117754</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/PER.gif" alt="Peru">  PER</td>
<td>First Division</td>
<td>77K</td>
<td>Professional</td>
<td>35,000</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#101050"></span></td>
<td>1901</td>
<td>27.3</td>
</tr><tr role="row" class="even">
<td id="308104" class="sorting_1">Alianza Atletico</td>
<td>308104</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/PER.gif" alt="Peru">  PER</td>
<td>First Division</td>
<td>77K</td>
<td>Professional</td>
<td>10,000</td>
<td><span class="label" style="background:#0030A0"></span> <span class="label" style="background:#F8F8F8"></span></td>
<td>1920</td>
<td>26.1</td>
</tr><tr role="row" class="odd">
<td id="309345" class="sorting_1">Alianza Petrolera</td>
<td>309345</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/COL.gif" alt="Colombia">  COL</td>
<td>First Division</td>
<td>346K</td>
<td>Professional</td>
<td>10,400</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F8F000"></span></td>
<td>1990</td>
<td>24.7</td>
</tr><tr role="row" class="even">
<td id="55007141" class="sorting_1">Aljustrelense</td>
<td>55007141</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/POR.gif" alt="Portugal">  POR</td>
<td>PT Championship</td>
<td>4K</td>
<td>Semi-Professional</td>
<td>5,000</td>
<td><span class="label" style="background:#E00000"></span> <span class="label" style="background:#0030A0"></span></td>
<td>1933</td>
<td>25.6</td>
</tr><tr role="row" class="odd">
<td id="102490" class="sorting_1">All Boys</td>
<td>102490</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ARG.gif" alt="Argentina">  ARG</td>
<td>Second Division</td>
<td>0</td>
<td>Professional</td>
<td>21,500</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F8F8F8"></span></td>
<td>1913</td>
<td>26.6</td>
</tr><tr role="row" class="even">
<td id="1539" class="sorting_1">Alloa</td>
<td>1539</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/SCO.gif" alt="Scotland">  SCO</td>
<td>Ladbrokes League 1</td>
<td>75K</td>
<td>Semi-Professional</td>
<td>3,100</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F8A800"></span></td>
<td>1883</td>
<td>25.8</td>
</tr><tr role="row" class="odd">
<td id="108514" class="sorting_1">Almagro</td>
<td>108514</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ARG.gif" alt="Argentina">  ARG</td>
<td>Second Division</td>
<td>30K</td>
<td>Professional</td>
<td>16,000</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#0050D0"></span></td>
<td>1911</td>
<td>26.2</td>
</tr><tr role="row" class="even">
<td id="55001122" class="sorting_1">Almancilense</td>
<td>55001122</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/POR.gif" alt="Portugal">  POR</td>
<td>PT Championship</td>
<td>4K</td>
<td>Semi-Professional</td>
<td>1,500</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#E00000"></span></td>
<td>1935</td>
<td>24.2</td>
</tr><tr role="row" class="odd">
<td id="850022" class="sorting_1">Almere</td>
<td>850022</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/NED.gif" alt="Holland">  NED</td>
<td>Jupiler League</td>
<td>172K</td>
<td>Professional</td>
<td>2,864</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#C81028"></span></td>
<td>1997</td>
<td>24.1</td>
</tr><tr role="row" class="even">
<td id="1661" class="sorting_1">Almeria</td>
<td>1661</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ESP.gif" alt="Spain">  ESP</td>
<td>Second Division</td>
<td>431K</td>
<td>Professional</td>
<td>15,200</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#E00000"></span></td>
<td>1989</td>
<td>26.5</td>
</tr><tr role="row" class="odd">
<td id="8478376" class="sorting_1">Alt?nordu</td>
<td>8478376</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/TUR.gif" alt="Turkey">  TUR</td>
<td>1. League</td>
<td>20K</td>
<td>Professional</td>
<td>51,295</td>
<td><span class="label" style="background:#F84028"></span> <span class="label" style="background:#F84028"></span></td>
<td>1923</td>
<td>23.5</td>
</tr><tr role="row" class="even">
<td id="1291" class="sorting_1">Alta</td>
<td>1291</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/NOR.gif" alt="Norway">  NOR</td>
<td>Second Division Group 1</td>
<td>948</td>
<td>Semi-Professional</td>
<td>1,250</td>
<td><span class="label" style="background:#0858F8"></span> <span class="label" style="background:#F8F838"></span></td>
<td>1927</td>
<td>24.8</td>
</tr><tr role="row" class="odd">
<td id="829172" class="sorting_1">Alto Adige</td>
<td>829172</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ITA.gif" alt="Italy">  ITA</td>
<td>Serie C/B</td>
<td>86K</td>
<td>Professional</td>
<td>4,041</td>
<td><span class="label" style="background:#F00000"></span> <span class="label" style="background:#F8F8F8"></span></td>
<td>1995</td>
<td>23.5</td>
</tr><tr role="row" class="even">
<td id="601" class="sorting_1">Altrincham</td>
<td>601</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ENG.gif" alt="England">  ENG</td>
<td>Vanarama North</td>
<td>0</td>
<td>Semi-Professional</td>
<td>6,085</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#E00808"></span></td>
<td>1891</td>
<td>26.2</td>
</tr><tr role="row" class="odd">
<td id="5410642" class="sorting_1">Aluminij</td>
<td>5410642</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/SVN.gif" alt="Slovenia">  SVN</td>
<td>First League</td>
<td>86K</td>
<td>Professional</td>
<td>600</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#E00000"></span></td>
<td>1946</td>
<td>21.1</td>
</tr><tr role="row" class="even">
<td id="109042" class="sorting_1">Amarante</td>
<td>109042</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/POR.gif" alt="Portugal">  POR</td>
<td>PT Championship</td>
<td>4K</td>
<td>Semi-Professional</td>
<td>7,500</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F8F8F8"></span></td>
<td>1923</td>
<td>24.0</td>
</tr><tr role="row" class="odd">
<td id="130772" class="sorting_1">Amazulu</td>
<td>130772</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/RSA.gif" alt="South Africa">  RSA</td>
<td>National First Division</td>
<td>480K</td>
<td>Professional</td>
<td>14,000</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#108830"></span></td>
<td>1932</td>
<td>25.0</td>
</tr><tr role="row" class="even">
<td id="455675" class="sorting_1">Amed Sportif</td>
<td>455675</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/TUR.gif" alt="Turkey">  TUR</td>
<td>2. League White</td>
<td>0</td>
<td>Professional</td>
<td>1,540</td>
<td><span class="label" style="background:#E00000"></span> <span class="label" style="background:#008030"></span></td>
<td>1990</td>
<td>27.0</td>
</tr><tr role="row" class="odd">
<td id="1253" class="sorting_1">America (MEX)</td>
<td>1253</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/MEX.gif" alt="Mexico">  MEX</td>
<td>First Division</td>
<td>6M</td>
<td>Professional</td>
<td>87,000</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#E8E060"></span></td>
<td>1916</td>
<td>25.6</td>
</tr><tr role="row" class="even">
<td id="417" class="sorting_1">America de Cali</td>
<td>417</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/COL.gif" alt="Colombia">  COL</td>
<td>Second Division</td>
<td>538K</td>
<td>Professional</td>
<td>38,648</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#E00000"></span></td>
<td>1927</td>
<td>28.6</td>
</tr><tr role="row" class="odd">
<td id="107201" class="sorting_1">AMG</td>
<td>107201</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/BRA.gif" alt="Brazil">  BRA</td>
<td>First Division</td>
<td>59K</td>
<td>Professional</td>
<td>23,018</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#E00020"></span></td>
<td>1912</td>
<td>26.3</td>
</tr><tr role="row" class="even">
<td id="831" class="sorting_1">Amiens SC</td>
<td>831</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/FRA.gif" alt="France">  FRA</td>
<td>Domino's Ligue 2</td>
<td>0</td>
<td>Professional</td>
<td>12,097</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F8F8F8"></span></td>
<td>1901</td>
<td>26.2</td>
</tr><tr role="row" class="odd">
<td id="130500" class="sorting_1">Amkar</td>
<td>130500</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/RUS.gif" alt="Russia">  RUS</td>
<td>Premier Division</td>
<td>24K</td>
<td>Professional</td>
<td>16,873</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
<td>1994</td>
<td>26.2</td>
</tr><tr role="row" class="even">
<td id="6706354" class="sorting_1">Amorebieta</td>
<td>6706354</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ESP.gif" alt="Spain">  ESP</td>
<td>Second Division B2</td>
<td>0</td>
<td>Professional</td>
<td>2,500</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#0030A0"></span></td>
<td>1925</td>
<td>25.8</td>
</tr><tr role="row" class="odd">
<td id="2460" class="sorting_1">Anadia</td>
<td>2460</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/POR.gif" alt="Portugal">  POR</td>
<td>PT Championship</td>
<td>4K</td>
<td>Semi-Professional</td>
<td>7,000</td>
<td><span class="label" style="background:#0050D0"></span> <span class="label" style="background:#F8F8F8"></span></td>
<td>1926</td>
<td>23.6</td>
</tr><tr role="row" class="even">
<td id="129658" class="sorting_1">Anag. Karditsas</td>
<td>129658</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/GRE.gif" alt="Greece">  GRE</td>
<td>B Division</td>
<td>0</td>
<td>Professional</td>
<td>5,800</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
<td>1904</td>
<td>24.9</td>
</tr><tr role="row" class="odd">
<td id="1104" class="sorting_1">Ancona</td>
<td>1104</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ITA.gif" alt="Italy">  ITA</td>
<td>Serie C/B</td>
<td>129K</td>
<td>Professional</td>
<td>23,976</td>
<td><span class="label" style="background:#F83030"></span> <span class="label" style="background:#C80030"></span></td>
<td>1948</td>
<td>23.2</td>
</tr><tr role="row" class="even">
<td id="256" class="sorting_1">Anderlecht</td>
<td>256</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/BEL.gif" alt="Belgium">  BEL</td>
<td>Pro League</td>
<td>4M</td>
<td>Professional</td>
<td>21,500</td>
<td><span class="label" style="background:#A8A8F8"></span> <span class="label" style="background:#4040A0"></span></td>
<td>1908</td>
<td>24.3</td>
</tr><tr role="row" class="odd">
<td id="93038925" class="sorting_1">Ange IF</td>
<td>93038925</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/SWE.gif" alt="Sweden">  SWE</td>
<td>Second Division N</td>
<td>0</td>
<td>Semi-Professional</td>
<td>1,000</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#F8F8F8"></span></td>
<td>1980</td>
<td>25.4</td>
</tr><tr role="row" class="even">
<td id="4300347" class="sorting_1">Angelholms FF</td>
<td>4300347</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/SWE.gif" alt="Sweden">  SWE</td>
<td>First Division Elite</td>
<td>0</td>
<td>Professional</td>
<td>5,000</td>
<td><span class="label" style="background:#002080"></span> <span class="label" style="background:#F8D830"></span></td>
<td>1976</td>
<td>22.1</td>
</tr><tr role="row" class="odd">
<td id="875" class="sorting_1">Angers SCO</td>
<td>875</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/FRA.gif" alt="France">  FRA</td>
<td>Ligue 1</td>
<td>861K</td>
<td>Professional</td>
<td>17,061</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#000000"></span></td>
<td>1919</td>
<td>26.5</td>
</tr><tr role="row" class="even">
<td id="729459" class="sorting_1">Angrense</td>
<td>729459</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/POR.gif" alt="Portugal">  POR</td>
<td>PT Championship</td>
<td>4K</td>
<td>Semi-Professional</td>
<td>5,000</td>
<td><span class="label" style="background:#E00000"></span> <span class="label" style="background:#E00808"></span></td>
<td>1929</td>
<td>25.2</td>
</tr><tr role="row" class="odd">
<td id="130495" class="sorting_1">Anji</td>
<td>130495</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/RUS.gif" alt="Russia">  RUS</td>
<td>Premier Division</td>
<td>240K</td>
<td>Professional</td>
<td>30,000</td>
<td><span class="label" style="background:#081030"></span> <span class="label" style="background:#00A030"></span></td>
<td>1991</td>
<td>24.2</td>
</tr><tr role="row" class="even">
<td id="1864" class="sorting_1">Ankaragucu</td>
<td>1864</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/TUR.gif" alt="Turkey">  TUR</td>
<td>2. League Red</td>
<td>0</td>
<td>Professional</td>
<td>19,209</td>
<td><span class="label" style="background:#E8E010"></span> <span class="label" style="background:#002060"></span></td>
<td>1910</td>
<td>25.2</td>
</tr><tr role="row" class="odd">
<td id="64017018" class="sorting_1">Ankaran</td>
<td>64017018</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/SVN.gif" alt="Slovenia">  SVN</td>
<td>Second League</td>
<td>43K</td>
<td>Semi-Professional</td>
<td>1,000</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#F87000"></span></td>
<td>1966</td>
<td>22.2</td>
</tr><tr role="row" class="even">
<td id="416239" class="sorting_1">Annagh Utd</td>
<td>416239</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/NIR.gif" alt="N.Ireland">  NIR</td>
<td>NIFL C1</td>
<td>0</td>
<td>Semi-Professional</td>
<td>1,250</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#E00000"></span></td>
<td>1963</td>
<td>25.7</td>
</tr><tr role="row" class="odd">
<td id="1540" class="sorting_1">Annan</td>
<td>1540</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/SCO.gif" alt="Scotland">  SCO</td>
<td>Ladbrokes League 2</td>
<td>15K</td>
<td>Semi-Professional</td>
<td>2,504</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F8D000"></span></td>
<td>1942</td>
<td>22.4</td>
</tr><tr role="row" class="even">
<td id="136423" class="sorting_1">Ansan Mugunghwa</td>
<td>136423</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/KOR.gif" alt="South Korea">  KOR</td>
<td>K LEAGUE Challenge</td>
<td>23K</td>
<td>Professional</td>
<td>35,008</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#008040"></span></td>
<td>1996</td>
<td>27.0</td>
</tr><tr role="row" class="odd">
<td id="1865" class="sorting_1">Antalyaspor</td>
<td>1865</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/TUR.gif" alt="Turkey">  TUR</td>
<td>Super League</td>
<td>61K</td>
<td>Professional</td>
<td>32,539</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
<td>1966</td>
<td>27.7</td>
</tr><tr role="row" class="even">
<td id="262" class="sorting_1">Antwerp</td>
<td>262</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/BEL.gif" alt="Belgium">  BEL</td>
<td>Pro League B</td>
<td>0</td>
<td>Professional</td>
<td>13,373</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#E00000"></span></td>
<td>1880</td>
<td>26.3</td>
</tr><tr role="row" class="odd">
<td id="2505" class="sorting_1">Anundsjo IF</td>
<td>2505</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/SWE.gif" alt="Sweden">  SWE</td>
<td>Second Division N</td>
<td>0</td>
<td>Semi-Professional</td>
<td>500</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
<td>1921</td>
<td>23.6</td>
</tr><tr role="row" class="even">
<td id="66029603" class="sorting_1">Anyang</td>
<td>66029603</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/KOR.gif" alt="South Korea">  KOR</td>
<td>K LEAGUE Challenge</td>
<td>170K</td>
<td>Professional</td>
<td>17,095</td>
<td><span class="label" style="background:#501080"></span> <span class="label" style="background:#501080"></span></td>
<td>2013</td>
<td>26.2</td>
</tr><tr role="row" class="odd">
<td id="968" class="sorting_1">Apollon</td>
<td>968</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/GRE.gif" alt="Greece">  GRE</td>
<td>B Division</td>
<td>0</td>
<td>Professional</td>
<td>14,856</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
<td>1891</td>
<td>26.2</td>
</tr><tr role="row" class="even">
<td id="301100" class="sorting_1">ARA</td>
<td>301100</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/BRA.gif" alt="Brazil">  BRA</td>
<td>Third Division</td>
<td>24K</td>
<td>Professional</td>
<td>12,500</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#C80000"></span></td>
<td>1977</td>
<td>27.1</td>
</tr><tr role="row" class="odd">
<td id="2506" class="sorting_1">Arameisk-Syrianska IF</td>
<td>2506</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/SWE.gif" alt="Sweden">  SWE</td>
<td>Second Division SS</td>
<td>0</td>
<td>Semi-Professional</td>
<td>1,000</td>
<td><span class="label" style="background:#F8F000"></span> <span class="label" style="background:#E00000"></span></td>
<td>1980</td>
<td>24.7</td>
</tr><tr role="row" class="even">
<td id="814437" class="sorting_1">Arandina</td>
<td>814437</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ESP.gif" alt="Spain">  ESP</td>
<td>Second Division B1</td>
<td>0</td>
<td>Semi-Professional</td>
<td>5,000</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#0078F8"></span></td>
<td>1987</td>
<td>24.2</td>
</tr><tr role="row" class="odd">
<td id="1541" class="sorting_1">Arbroath</td>
<td>1541</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/SCO.gif" alt="Scotland">  SCO</td>
<td>Ladbrokes League 2</td>
<td>20K</td>
<td>Semi-Professional</td>
<td>6,600</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#880818"></span></td>
<td>1878</td>
<td>24.6</td>
</tr><tr role="row" class="even">
<td id="84107158" class="sorting_1">ARC Oleiros</td>
<td>84107158</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/POR.gif" alt="Portugal">  POR</td>
<td>PT Championship</td>
<td>4K</td>
<td>Semi-Professional</td>
<td>3,000</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
<td>1976</td>
<td>23.8</td>
</tr><tr role="row" class="odd">
<td id="1272" class="sorting_1">Ards</td>
<td>1272</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/NIR.gif" alt="N.Ireland">  NIR</td>
<td>Danske Bank Premier</td>
<td>0</td>
<td>Semi-Professional</td>
<td>2,750</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
<td>1900</td>
<td>25.5</td>
</tr><tr role="row" class="even">
<td id="5622736" class="sorting_1">Arema</td>
<td>5622736</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/IDN.gif" alt="Indonesia">  IDN</td>
<td>Super League</td>
<td>130K</td>
<td>Professional</td>
<td>40,210</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#002080"></span></td>
<td>1987</td>
<td>28.1</td>
</tr><tr role="row" class="odd">
<td id="759312" class="sorting_1">Arendal</td>
<td>759312</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/NOR.gif" alt="Norway">  NOR</td>
<td>Second Division Group 4</td>
<td>0</td>
<td>Semi-Professional</td>
<td>2,500</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F8F8F8"></span></td>
<td>2010</td>
<td>26.5</td>
</tr><tr role="row" class="even">
<td id="2185" class="sorting_1">Arezzo</td>
<td>2185</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ITA.gif" alt="Italy">  ITA</td>
<td>Serie C/A</td>
<td>345K</td>
<td>Professional</td>
<td>13,128</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#800020"></span></td>
<td>1923</td>
<td>24.6</td>
</tr><tr role="row" class="odd">
<td id="78" class="sorting_1">Argentinos Jrs.</td>
<td>78</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ARG.gif" alt="Argentina">  ARG</td>
<td>Second Division</td>
<td>50K</td>
<td>Professional</td>
<td>24,800</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#E00000"></span></td>
<td>1904</td>
<td>24.7</td>
</tr><tr role="row" class="even">
<td id="969" class="sorting_1">Aris</td>
<td>969</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/GRE.gif" alt="Greece">  GRE</td>
<td>B Division</td>
<td>0</td>
<td>Professional</td>
<td>22,574</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F8F000"></span></td>
<td>1914</td>
<td>27.1</td>
</tr><tr role="row" class="odd">
<td id="129580" class="sorting_1">Arka</td>
<td>129580</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/POL.gif" alt="Poland">  POL</td>
<td>LOTTO Ekstraklasa</td>
<td>30K</td>
<td>Professional</td>
<td>15,139</td>
<td><span class="label" style="background:#0030A0"></span> <span class="label" style="background:#F8D000"></span></td>
<td>1929</td>
<td>27.1</td>
</tr><tr role="row" class="even">
<td id="84107167" class="sorting_1">Armacenenses</td>
<td>84107167</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/POR.gif" alt="Portugal">  POR</td>
<td>PT Championship</td>
<td>4K</td>
<td>Semi-Professional</td>
<td>1,500</td>
<td><span class="label" style="background:#1068F8"></span> <span class="label" style="background:#1068F8"></span></td>
<td>1935</td>
<td>27.4</td>
</tr><tr role="row" class="odd">
<td id="130032" class="sorting_1">Armagh</td>
<td>130032</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/NIR.gif" alt="N.Ireland">  NIR</td>
<td>NIFL C1</td>
<td>0</td>
<td>Semi-Professional</td>
<td>2,330</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#1070C8"></span></td>
<td>1964</td>
<td>25.2</td>
</tr><tr role="row" class="even">
<td id="107203" class="sorting_1">ARN</td>
<td>107203</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/BRA.gif" alt="Brazil">  BRA</td>
<td>Third Division</td>
<td>48K</td>
<td>Professional</td>
<td>32,000</td>
<td><span class="label" style="background:#F8F800"></span> <span class="label" style="background:#0000F8"></span></td>
<td>1915</td>
<td>26.6</td>
</tr><tr role="row" class="odd">
<td id="729500" class="sorting_1">Arouca</td>
<td>729500</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/POR.gif" alt="Portugal">  POR</td>
<td>Premier League</td>
<td>151K</td>
<td>Professional</td>
<td>5,000</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
<td>1952</td>
<td>25.3</td>
</tr><tr role="row" class="even">
<td id="602" class="sorting_1">Arsenal</td>
<td>602</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ENG.gif" alt="England">  ENG</td>
<td>Premier Division</td>
<td>39M</td>
<td>Professional</td>
<td>60,432</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#F02010"></span></td>
<td>1886</td>
<td>26.1</td>
</tr><tr role="row" class="odd">
<td id="102476" class="sorting_1">Arsenal de Sarandi</td>
<td>102476</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ARG.gif" alt="Argentina">  ARG</td>
<td>Premier Division</td>
<td>0</td>
<td>Professional</td>
<td>16,300</td>
<td><span class="label" style="background:#E00000"></span> <span class="label" style="background:#60C0F8"></span></td>
<td>1957</td>
<td>26.1</td>
</tr><tr role="row" class="even">
<td id="130501" class="sorting_1">Arsenal Tula</td>
<td>130501</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/RUS.gif" alt="Russia">  RUS</td>
<td>Premier Division</td>
<td>44K</td>
<td>Professional</td>
<td>20,048</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
<td>1984</td>
<td>28.0</td>
</tr><tr role="row" class="odd">
<td id="71089946" class="sorting_1">Arsenal-Kyiv</td>
<td>71089946</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/UKR.gif" alt="Ukraine">  UKR</td>
<td>First League</td>
<td>0</td>
<td>Professional</td>
<td>0</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
<td>2014</td>
<td>25.2</td>
</tr><tr role="row" class="even">
<td id="826" class="sorting_1">AS Monaco</td>
<td>826</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/FRA.gif" alt="France">  FRA</td>
<td>Ligue 1</td>
<td>22M</td>
<td>Professional</td>
<td>18,521</td>
<td><span class="label" style="background:#E00000"></span> <span class="label" style="background:#F8F8F8"></span></td>
<td>1924</td>
<td>24.3</td>
</tr><tr role="row" class="odd">
<td id="827" class="sorting_1">AS Nancy Lorraine</td>
<td>827</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/FRA.gif" alt="France">  FRA</td>
<td>Ligue 1</td>
<td>1M</td>
<td>Professional</td>
<td>20,087</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
<td>1967</td>
<td>27.1</td>
</tr><tr role="row" class="even">
<td id="828" class="sorting_1">AS Saint-Etienne</td>
<td>828</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/FRA.gif" alt="France">  FRA</td>
<td>Ligue 1</td>
<td>861K</td>
<td>Professional</td>
<td>41,965</td>
<td><span class="label" style="background:#00A840"></span> <span class="label" style="background:#58C870"></span></td>
<td>1933</td>
<td>26.2</td>
</tr><tr role="row" class="odd">
<td id="57113409" class="sorting_1">ASA Tirgu Mures</td>
<td>57113409</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ROU.gif" alt="Romania">  ROU</td>
<td>Liga I</td>
<td>0</td>
<td>Professional</td>
<td>8,000</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#283850"></span></td>
<td>2013</td>
<td>25.9</td>
</tr><tr role="row" class="even">
<td id="1430" class="sorting_1">Asane</td>
<td>1430</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/NOR.gif" alt="Norway">  NOR</td>
<td>First Division</td>
<td>5K</td>
<td>Semi-Professional</td>
<td>2,158</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F85008"></span></td>
<td>1971</td>
<td>23.0</td>
</tr><tr role="row" class="odd">
<td id="4300404" class="sorting_1">Asarums IF</td>
<td>4300404</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/SWE.gif" alt="Sweden">  SWE</td>
<td>Second Division SG</td>
<td>0</td>
<td>Semi-Professional</td>
<td>500</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#0050D0"></span></td>
<td>0</td>
<td>23.3</td>
</tr><tr role="row" class="even">
<td id="1105" class="sorting_1">Ascoli</td>
<td>1105</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ITA.gif" alt="Italy">  ITA</td>
<td>Serie B</td>
<td>258K</td>
<td>Professional</td>
<td>20,550</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
<td>1898</td>
<td>24.2</td>
</tr><tr role="row" class="odd">
<td id="101493" class="sorting_1">Asker</td>
<td>101493</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/NOR.gif" alt="Norway">  NOR</td>
<td>Second Division Group 4</td>
<td>9K</td>
<td>Semi-Professional</td>
<td>1,500</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F8F8F8"></span></td>
<td>1889</td>
<td>23.6</td>
</tr><tr role="row" class="even">
<td id="8162173" class="sorting_1">ASM Belfort</td>
<td>8162173</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/FRA.gif" alt="France">  FRA</td>
<td>National</td>
<td>0</td>
<td>Semi-Professional</td>
<td>5,500</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#083078"></span></td>
<td>1971</td>
<td>27.0</td>
</tr><tr role="row" class="odd">
<td id="8100783" class="sorting_1">Assyriska BK</td>
<td>8100783</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/SWE.gif" alt="Sweden">  SWE</td>
<td>Second Division WG</td>
<td>0</td>
<td>Semi-Professional</td>
<td>5,500</td>
<td><span class="label" style="background:#C80000"></span> <span class="label" style="background:#F8F8F8"></span></td>
<td>1985</td>
<td>26.1</td>
</tr><tr role="row" class="even">
<td id="2150" class="sorting_1">Assyriska FF</td>
<td>2150</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/SWE.gif" alt="Sweden">  SWE</td>
<td>First Division Elite</td>
<td>0</td>
<td>Professional</td>
<td>6,700</td>
<td><span class="label" style="background:#E00000"></span> <span class="label" style="background:#F8F8F8"></span></td>
<td>1974</td>
<td>25.9</td>
</tr><tr role="row" class="odd">
<td id="68000150" class="sorting_1">Assyriska IF i Norrkoping</td>
<td>68000150</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/SWE.gif" alt="Sweden">  SWE</td>
<td>Second Division SS</td>
<td>0</td>
<td>Semi-Professional</td>
<td>500</td>
<td><span class="label" style="background:#E00000"></span> <span class="label" style="background:#F8F8F8"></span></td>
<td>1977</td>
<td>25.0</td>
</tr><tr role="row" class="even">
<td id="694366" class="sorting_1">Ast. Tripolis</td>
<td>694366</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/GRE.gif" alt="Greece">  GRE</td>
<td>Superleague</td>
<td>146K</td>
<td>Professional</td>
<td>7,493</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
<td>1931</td>
<td>24.1</td>
</tr><tr role="row" class="odd">
<td id="603" class="sorting_1">Aston Villa</td>
<td>603</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ENG.gif" alt="England">  ENG</td>
<td>Sky Bet Championship</td>
<td>0</td>
<td>Professional</td>
<td>42,785</td>
<td><span class="label" style="background:#98D0F0"></span> <span class="label" style="background:#882840"></span></td>
<td>1874</td>
<td>26.3</td>
</tr><tr role="row" class="even">
<td id="57099588" class="sorting_1">ASU Poli</td>
<td>57099588</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ROU.gif" alt="Romania">  ROU</td>
<td>Liga II</td>
<td>0</td>
<td>Professional</td>
<td>32,972</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#604090"></span></td>
<td>2002</td>
<td>22.8</td>
</tr><tr role="row" class="odd">
<td id="1106" class="sorting_1">Atalanta</td>
<td>1106</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ITA.gif" alt="Italy">  ITA</td>
<td>Serie A</td>
<td>3M</td>
<td>Professional</td>
<td>26,562</td>
<td><span class="label" style="background:#2850A0"></span> <span class="label" style="background:#081030"></span></td>
<td>1907</td>
<td>26.5</td>
</tr><tr role="row" class="even">
<td id="8825225" class="sorting_1">Atenas de San Carlos</td>
<td>8825225</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/URU.gif" alt="Uruguay">  URU</td>
<td>Second Division</td>
<td>2K</td>
<td>Professional</td>
<td>4,900</td>
<td><span class="label" style="background:#E00000"></span> <span class="label" style="background:#002080"></span></td>
<td>1928</td>
<td>25.7</td>
</tr><tr role="row" class="odd">
<td id="301151" class="sorting_1">ATG</td>
<td>301151</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/BRA.gif" alt="Brazil">  BRA</td>
<td>Second Division</td>
<td>71K</td>
<td>Professional</td>
<td>54,049</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#0050D0"></span></td>
<td>1937</td>
<td>25.8</td>
</tr><tr role="row" class="even">
<td id="587" class="sorting_1">Athlone Town</td>
<td>587</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/IRL.gif" alt="Ireland">  IRL</td>
<td>First Division</td>
<td>0</td>
<td>Semi-Professional</td>
<td>5,000</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
<td>1887</td>
<td>20.6</td>
</tr><tr role="row" class="odd">
<td id="14031194" class="sorting_1">Atl. Parana</td>
<td>14031194</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ARG.gif" alt="Argentina">  ARG</td>
<td>Second Division</td>
<td>6K</td>
<td>Professional</td>
<td>5,625</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#E00000"></span></td>
<td>1907</td>
<td>29.7</td>
</tr><tr role="row" class="even">
<td id="102472" class="sorting_1">Atl. Rafaela</td>
<td>102472</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ARG.gif" alt="Argentina">  ARG</td>
<td>Premier Division</td>
<td>941K</td>
<td>Professional</td>
<td>18,600</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#60C0F8"></span></td>
<td>1907</td>
<td>24.9</td>
</tr><tr role="row" class="odd">
<td id="102474" class="sorting_1">Atl. Tucuman</td>
<td>102474</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ARG.gif" alt="Argentina">  ARG</td>
<td>Premier Division</td>
<td>115K</td>
<td>Professional</td>
<td>32,700</td>
<td><span class="label" style="background:#60C0F8"></span> <span class="label" style="background:#F8F8F8"></span></td>
<td>1902</td>
<td>26.8</td>
</tr><tr role="row" class="even">
<td id="72047296" class="sorting_1">Atlanta United</td>
<td>72047296</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/USA.gif" alt="U.S.A.">  USA</td>
<td>Lower Leagues</td>
<td>1M</td>
<td>Professional</td>
<td>60,500</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
<td>2017</td>
<td>21.9</td>
</tr><tr role="row" class="odd">
<td id="102356" class="sorting_1">Atlante</td>
<td>102356</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/MEX.gif" alt="Mexico">  MEX</td>
<td>Promotion League</td>
<td>77K</td>
<td>Professional</td>
<td>20,000</td>
<td><span class="label" style="background:#880828"></span> <span class="label" style="background:#003068"></span></td>
<td>1916</td>
<td>25.6</td>
</tr><tr role="row" class="even">
<td id="106027" class="sorting_1">Atlas</td>
<td>106027</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/MEX.gif" alt="Mexico">  MEX</td>
<td>First Division</td>
<td>3M</td>
<td>Professional</td>
<td>56,713</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#E00000"></span></td>
<td>1916</td>
<td>26.2</td>
</tr><tr role="row" class="odd">
<td id="2440" class="sorting_1">Atletico CP (SAD)</td>
<td>2440</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/POR.gif" alt="Portugal">  POR</td>
<td>PT Championship</td>
<td>4K</td>
<td>Semi-Professional</td>
<td>3,500</td>
<td><span class="label" style="background:#002060"></span> <span class="label" style="background:#F8F000"></span></td>
<td>1942</td>
<td>21.7</td>
</tr><tr role="row" class="even">
<td id="2200063" class="sorting_1">Atletico F.C.</td>
<td>2200063</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/COL.gif" alt="Colombia">  COL</td>
<td>Second Division</td>
<td>138K</td>
<td>Professional</td>
<td>38,648</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F8F8F8"></span></td>
<td>2005</td>
<td>24.9</td>
</tr><tr role="row" class="odd">
<td id="427" class="sorting_1">Atletico Nacional</td>
<td>427</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/COL.gif" alt="Colombia">  COL</td>
<td>First Division</td>
<td>4M</td>
<td>Professional</td>
<td>48,700</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#00A030"></span></td>
<td>1951</td>
<td>27.2</td>
</tr><tr role="row" class="even">
<td id="1685" class="sorting_1">Atletico Pamplona</td>
<td>1685</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ESP.gif" alt="Spain">  ESP</td>
<td>First Division</td>
<td>0</td>
<td>Professional</td>
<td>19,800</td>
<td><span class="label" style="background:#2838A0"></span> <span class="label" style="background:#A82030"></span></td>
<td>1920</td>
<td>26.2</td>
</tr><tr role="row" class="odd">
<td id="4200564" class="sorting_1">Atletico Pamplona B</td>
<td>4200564</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ESP.gif" alt="Spain">  ESP</td>
<td>Second Division B1</td>
<td>0</td>
<td>Professional</td>
<td>4,000</td>
<td><span class="label" style="background:#E00000"></span> <span class="label" style="background:#E00000"></span></td>
<td>1962</td>
<td>20.0</td>
</tr><tr role="row" class="even">
<td id="314" class="sorting_1">ATM</td>
<td>314</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/BRA.gif" alt="Brazil">  BRA</td>
<td>First Division</td>
<td>2M</td>
<td>Professional</td>
<td>23,018</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#C80000"></span></td>
<td>1908</td>
<td>27.1</td>
</tr><tr role="row" class="odd">
<td id="107206" class="sorting_1">ATP</td>
<td>107206</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/BRA.gif" alt="Brazil">  BRA</td>
<td>First Division</td>
<td>476K</td>
<td>Professional</td>
<td>42,000</td>
<td><span class="label" style="background:#0030A0"></span> <span class="label" style="background:#F8F8F8"></span></td>
<td>1924</td>
<td>23.9</td>
</tr><tr role="row" class="even">
<td id="129692" class="sorting_1">Atromitos</td>
<td>129692</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/GRE.gif" alt="Greece">  GRE</td>
<td>Superleague</td>
<td>43K</td>
<td>Professional</td>
<td>8,969</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
<td>1923</td>
<td>25.7</td>
</tr><tr role="row" class="odd">
<td id="1841" class="sorting_1">Atvidabergs FF</td>
<td>1841</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/SWE.gif" alt="Sweden">  SWE</td>
<td>First Division Elite</td>
<td>4K</td>
<td>Professional</td>
<td>6,100</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#4860B8"></span></td>
<td>1907</td>
<td>22.7</td>
</tr><tr role="row" class="even">
<td id="130778" class="sorting_1">Audax Italiano</td>
<td>130778</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/CHI.gif" alt="Chile">  CHI</td>
<td>First Division</td>
<td>231K</td>
<td>Professional</td>
<td>12,000</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#008030"></span></td>
<td>1910</td>
<td>24.2</td>
</tr><tr role="row" class="odd">
<td id="121183" class="sorting_1">Aue</td>
<td>121183</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/GER.gif" alt="Germany">  GER</td>
<td>Second Division</td>
<td>0</td>
<td>Professional</td>
<td>16,750</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#503098"></span></td>
<td>1946</td>
<td>24.5</td>
</tr><tr role="row" class="even">
<td id="2238" class="sorting_1">Augsburg</td>
<td>2238</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/GER.gif" alt="Germany">  GER</td>
<td>First Division</td>
<td>861K</td>
<td>Professional</td>
<td>30,660</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#F8F8F8"></span></td>
<td>1907</td>
<td>26.5</td>
</tr><tr role="row" class="odd">
<td id="107208" class="sorting_1">AVA</td>
<td>107208</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/BRA.gif" alt="Brazil">  BRA</td>
<td>Second Division</td>
<td>178K</td>
<td>Professional</td>
<td>17,800</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
<td>1923</td>
<td>25.5</td>
</tr><tr role="row" class="even">
<td id="71017851" class="sorting_1">Avangard Kramatorsk</td>
<td>71017851</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/UKR.gif" alt="Ukraine">  UKR</td>
<td>First League</td>
<td>0</td>
<td>Professional</td>
<td>2,500</td>
<td><span class="label" style="background:#0050D0"></span> <span class="label" style="background:#F8F000"></span></td>
<td>1955</td>
<td>24.4</td>
</tr><tr role="row" class="odd">
<td id="2104" class="sorting_1">Avarta</td>
<td>2104</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/DEN.gif" alt="Denmark">  DEN</td>
<td>Second Division</td>
<td>0</td>
<td>Amateur</td>
<td>6,000</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#009878"></span></td>
<td>1953</td>
<td>22.9</td>
</tr><tr role="row" class="even">
<td id="1108" class="sorting_1">Avellino</td>
<td>1108</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ITA.gif" alt="Italy">  ITA</td>
<td>Serie B</td>
<td>517K</td>
<td>Professional</td>
<td>26,000</td>
<td><span class="label" style="background:#009848"></span> <span class="label" style="background:#006030"></span></td>
<td>1912</td>
<td>24.3</td>
</tr><tr role="row" class="odd">
<td id="1472" class="sorting_1">Aves</td>
<td>1472</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/POR.gif" alt="Portugal">  POR</td>
<td>Second League</td>
<td>65K</td>
<td>Professional</td>
<td>5,441</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
<td>1930</td>
<td>26.5</td>
</tr><tr role="row" class="even">
<td id="77005834" class="sorting_1">Ayacucho FC</td>
<td>77005834</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/PER.gif" alt="Peru">  PER</td>
<td>First Division</td>
<td>61K</td>
<td>Professional</td>
<td>15,000</td>
<td><span class="label" style="background:#F08000"></span> <span class="label" style="background:#F8F8F8"></span></td>
<td>2007</td>
<td>26.4</td>
</tr><tr role="row" class="odd">
<td id="70043780" class="sorting_1">Ayd?nspor 1923</td>
<td>70043780</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/TUR.gif" alt="Turkey">  TUR</td>
<td>2. League Red</td>
<td>0</td>
<td>Professional</td>
<td>14,094</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F8F8F8"></span></td>
<td>1993</td>
<td>25.2</td>
</tr><tr role="row" class="even">
<td id="1542" class="sorting_1">Ayr</td>
<td>1542</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/SCO.gif" alt="Scotland">  SCO</td>
<td>Ladbrokes Championship</td>
<td>8K</td>
<td>Professional</td>
<td>10,185</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
<td>1910</td>
<td>23.6</td>
</tr><tr role="row" class="odd">
<td id="991" class="sorting_1">AZ</td>
<td>991</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/NED.gif" alt="Holland">  NED</td>
<td>Eredivisie</td>
<td>646K</td>
<td>Professional</td>
<td>17,023</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#D83038"></span></td>
<td>1967</td>
<td>23.5</td>
</tr><tr role="row" class="even">
<td id="493" class="sorting_1">B 93</td>
<td>493</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/DEN.gif" alt="Denmark">  DEN</td>
<td>Second Division</td>
<td>0</td>
<td>Semi-Professional</td>
<td>4,400</td>
<td><span class="label" style="background:#002060"></span> <span class="label" style="background:#F8F8F8"></span></td>
<td>1893</td>
<td>23.6</td>
</tr><tr role="row" class="odd">
<td id="1298" class="sorting_1">B?rum</td>
<td>1298</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/NOR.gif" alt="Norway">  NOR</td>
<td>Second Division Group 4</td>
<td>3K</td>
<td>Semi-Professional</td>
<td>3,000</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F8E848"></span></td>
<td>1910</td>
<td>26.1</td>
</tr><tr role="row" class="even">
<td id="5743463" class="sorting_1">Backa</td>
<td>5743463</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/SRB.gif" alt="Serbia">  SRB</td>
<td>SuperLeague</td>
<td>69K</td>
<td>Professional</td>
<td>14,458</td>
<td><span class="label" style="background:#005098"></span> <span class="label" style="background:#0078F8"></span></td>
<td>1945</td>
<td>25.6</td>
</tr><tr role="row" class="odd">
<td id="6706380" class="sorting_1">Badalona</td>
<td>6706380</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ESP.gif" alt="Spain">  ESP</td>
<td>Second Division B3</td>
<td>0</td>
<td>Professional</td>
<td>1,000</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
<td>1903</td>
<td>26.5</td>
</tr><tr role="row" class="even">
<td id="315" class="sorting_1">BAH</td>
<td>315</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/BRA.gif" alt="Brazil">  BRA</td>
<td>Second Division</td>
<td>713K</td>
<td>Professional</td>
<td>50,443</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#B00000"></span></td>
<td>1931</td>
<td>25.8</td>
</tr><tr role="row" class="odd">
<td id="130300" class="sorting_1">Bal?kesirspor</td>
<td>130300</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/TUR.gif" alt="Turkey">  TUR</td>
<td>1. League</td>
<td>19K</td>
<td>Professional</td>
<td>13,423</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
<td>1966</td>
<td>25.7</td>
</tr><tr role="row" class="even">
<td id="358409" class="sorting_1">Bala</td>
<td>358409</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/WAL.gif" alt="Wales">  WAL</td>
<td>Welsh Premier League</td>
<td>45K</td>
<td>Semi-Professional</td>
<td>3,000</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#000000"></span></td>
<td>1880</td>
<td>27.9</td>
</tr><tr role="row" class="odd">
<td id="7742801" class="sorting_1">Bali United</td>
<td>7742801</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/IDN.gif" alt="Indonesia">  IDN</td>
<td>Super League</td>
<td>94K</td>
<td>Professional</td>
<td>25,000</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#E00000"></span></td>
<td>1930</td>
<td>24.7</td>
</tr><tr role="row" class="even">
<td id="130162" class="sorting_1">Ballinamallard Utd</td>
<td>130162</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/NIR.gif" alt="N.Ireland">  NIR</td>
<td>Danske Bank Premier</td>
<td>0</td>
<td>Semi-Professional</td>
<td>2,000</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#0050D0"></span></td>
<td>1975</td>
<td>24.8</td>
</tr><tr role="row" class="odd">
<td id="1273" class="sorting_1">Ballyclare</td>
<td>1273</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/NIR.gif" alt="N.Ireland">  NIR</td>
<td>NIFL C1</td>
<td>0</td>
<td>Semi-Professional</td>
<td>1,800</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#E00000"></span></td>
<td>1919</td>
<td>26.6</td>
</tr><tr role="row" class="even">
<td id="1274" class="sorting_1">Ballymena Utd</td>
<td>1274</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/NIR.gif" alt="N.Ireland">  NIR</td>
<td>Danske Bank Premier</td>
<td>0</td>
<td>Semi-Professional</td>
<td>8,000</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#B8D8E8"></span></td>
<td>1928</td>
<td>26.6</td>
</tr><tr role="row" class="odd">
<td id="38005140" class="sorting_1">Balmazujvaros</td>
<td>38005140</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/HUN.gif" alt="Hungary">  HUN</td>
<td>Division II</td>
<td>0</td>
<td>Professional</td>
<td>2,250</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F86000"></span></td>
<td>2011</td>
<td>24.9</td>
</tr><tr role="row" class="even">
<td id="1301106" class="sorting_1">Baltika</td>
<td>1301106</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/RUS.gif" alt="Russia">  RUS</td>
<td>First Division</td>
<td>0</td>
<td>Professional</td>
<td>14,660</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#0050D0"></span></td>
<td>1954</td>
<td>26.6</td>
</tr><tr role="row" class="odd">
<td id="130159" class="sorting_1">Banbridge</td>
<td>130159</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/NIR.gif" alt="N.Ireland">  NIR</td>
<td>NIFL C2</td>
<td>0</td>
<td>Semi-Professional</td>
<td>1,500</td>
<td><span class="label" style="background:#E00000"></span> <span class="label" style="background:#000000"></span></td>
<td>1947</td>
<td>28.6</td>
</tr><tr role="row" class="even">
<td id="130304" class="sorting_1">Band?rmaspor</td>
<td>130304</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/TUR.gif" alt="Turkey">  TUR</td>
<td>1. League</td>
<td>0</td>
<td>Professional</td>
<td>12,708</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#901000"></span></td>
<td>1965</td>
<td>24.5</td>
</tr><tr role="row" class="odd">
<td id="80" class="sorting_1">Banfield</td>
<td>80</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ARG.gif" alt="Argentina">  ARG</td>
<td>Premier Division</td>
<td>324K</td>
<td>Professional</td>
<td>34,901</td>
<td><span class="label" style="background:#008030"></span> <span class="label" style="background:#F8F8F8"></span></td>
<td>1896</td>
<td>26.5</td>
</tr><tr role="row" class="even">
<td id="1275" class="sorting_1">Bangor</td>
<td>1275</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/NIR.gif" alt="N.Ireland">  NIR</td>
<td>NIFL C2</td>
<td>0</td>
<td>Semi-Professional</td>
<td>2,750</td>
<td><span class="label" style="background:#0050D0"></span> <span class="label" style="background:#F8F000"></span></td>
<td>1918</td>
<td>23.6</td>
</tr><tr role="row" class="odd">
<td id="1929" class="sorting_1">Bangor City</td>
<td>1929</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/WAL.gif" alt="Wales">  WAL</td>
<td>Welsh Premier League</td>
<td>25K</td>
<td>Semi-Professional</td>
<td>3,400</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#0050D0"></span></td>
<td>1893</td>
<td>24.6</td>
</tr><tr role="row" class="even">
<td id="1300301" class="sorting_1">Banik Ostrava</td>
<td>1300301</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/CZE.gif" alt="Czech Republic">  CZE</td>
<td>Second Division</td>
<td>239K</td>
<td>Professional</td>
<td>15,275</td>
<td><span class="label" style="background:#0050D0"></span> <span class="label" style="background:#F8F8F8"></span></td>
<td>1922</td>
<td>24.2</td>
</tr><tr role="row" class="odd">
<td id="1615" class="sorting_1">Banska Bystrica</td>
<td>1615</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/SVK.gif" alt="Slovakia">  SVK</td>
<td>Second Division</td>
<td>0</td>
<td>Professional</td>
<td>10,000</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#B00000"></span></td>
<td>1965</td>
<td>23.1</td>
</tr><tr role="row" class="even">
<td id="22011462" class="sorting_1">Bansko</td>
<td>22011462</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/BUL.gif" alt="Bulgaria">  BUL</td>
<td>Second League</td>
<td>1K</td>
<td>Professional</td>
<td>3,000</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#D02028"></span></td>
<td>1951</td>
<td>26.2</td>
</tr><tr role="row" class="odd">
<td id="1667" class="sorting_1">Barakaldo</td>
<td>1667</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ESP.gif" alt="Spain">  ESP</td>
<td>Second Division B2</td>
<td>0</td>
<td>Professional</td>
<td>8,000</td>
<td><span class="label" style="background:#F8F000"></span> <span class="label" style="background:#000000"></span></td>
<td>1917</td>
<td>24.8</td>
</tr><tr role="row" class="even">
<td id="485682" class="sorting_1">Baranovichi</td>
<td>485682</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/BLR.gif" alt="Belarus">  BLR</td>
<td>First League</td>
<td>0</td>
<td>Professional</td>
<td>3,749</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#0030A0"></span></td>
<td>1945</td>
<td>26.7</td>
</tr><tr role="row" class="odd">
<td id="1708" class="sorting_1">Barcelona</td>
<td>1708</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ESP.gif" alt="Spain">  ESP</td>
<td>First Division</td>
<td>10M</td>
<td>Professional</td>
<td>99,394</td>
<td><span class="label" style="background:#D02028"></span> <span class="label" style="background:#204080"></span></td>
<td>1899</td>
<td>25.6</td>
</tr><tr role="row" class="even">
<td id="1668" class="sorting_1">Barcelona B</td>
<td>1668</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ESP.gif" alt="Spain">  ESP</td>
<td>Second Division B3</td>
<td>0</td>
<td>Professional</td>
<td>15,276</td>
<td><span class="label" style="background:#D02028"></span> <span class="label" style="background:#204080"></span></td>
<td>1970</td>
<td>20.1</td>
</tr><tr role="row" class="odd">
<td id="1612" class="sorting_1">Bardejov</td>
<td>1612</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/SVK.gif" alt="Slovakia">  SVK</td>
<td>Second Division</td>
<td>9K</td>
<td>Professional</td>
<td>2,000</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#E00000"></span></td>
<td>1922</td>
<td>23.1</td>
</tr><tr role="row" class="even">
<td id="1110" class="sorting_1">Bari</td>
<td>1110</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ITA.gif" alt="Italy">  ITA</td>
<td>Serie B</td>
<td>861K</td>
<td>Professional</td>
<td>58,270</td>
<td><span class="label" style="background:#E00000"></span> <span class="label" style="background:#F8F8F8"></span></td>
<td>1908</td>
<td>26.0</td>
</tr><tr role="row" class="odd">
<td id="135531" class="sorting_1">Barito Putra</td>
<td>135531</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/IDN.gif" alt="Indonesia">  IDN</td>
<td>Super League</td>
<td>300K</td>
<td>Professional</td>
<td>17,500</td>
<td><span class="label" style="background:#0050D0"></span> <span class="label" style="background:#F8F000"></span></td>
<td>1988</td>
<td>25.2</td>
</tr><tr role="row" class="even">
<td id="605" class="sorting_1">Barnet</td>
<td>605</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ENG.gif" alt="England">  ENG</td>
<td>Sky Bet League Two</td>
<td>10K</td>
<td>Professional</td>
<td>5,233</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
<td>1888</td>
<td>25.5</td>
</tr><tr role="row" class="odd">
<td id="606" class="sorting_1">Barnsley</td>
<td>606</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ENG.gif" alt="England">  ENG</td>
<td>Sky Bet Championship</td>
<td>1M</td>
<td>Professional</td>
<td>23,287</td>
<td><span class="label" style="background:#B00810"></span> <span class="label" style="background:#B00810"></span></td>
<td>1887</td>
<td>22.6</td>
</tr><tr role="row" class="even">
<td id="65010405" class="sorting_1">Baroka FC</td>
<td>65010405</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/RSA.gif" alt="South Africa">  RSA</td>
<td>South African Premiership</td>
<td>113K</td>
<td>Professional</td>
<td>15,000</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#080048"></span></td>
<td>2007</td>
<td>25.0</td>
</tr><tr role="row" class="odd">
<td id="5261738" class="sorting_1">Barranquilla F.C.</td>
<td>5261738</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/COL.gif" alt="Colombia">  COL</td>
<td>Second Division</td>
<td>161K</td>
<td>Professional</td>
<td>20,000</td>
<td><span class="label" style="background:#008030"></span> <span class="label" style="background:#E00000"></span></td>
<td>2005</td>
<td>21.7</td>
</tr><tr role="row" class="even">
<td id="2437" class="sorting_1">Barreirense</td>
<td>2437</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/POR.gif" alt="Portugal">  POR</td>
<td>PT Championship</td>
<td>4K</td>
<td>Semi-Professional</td>
<td>2,480</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#E00000"></span></td>
<td>1911</td>
<td>23.6</td>
</tr><tr role="row" class="odd">
<td id="607" class="sorting_1">Barrow</td>
<td>607</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ENG.gif" alt="England">  ENG</td>
<td>Vanarama National</td>
<td>20K</td>
<td>Professional</td>
<td>4,416</td>
<td><span class="label" style="background:#002090"></span> <span class="label" style="background:#F8F8F8"></span></td>
<td>1901</td>
<td>23.7</td>
</tr><tr role="row" class="even">
<td id="130343" class="sorting_1">Basaksehir</td>
<td>130343</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/TUR.gif" alt="Turkey">  TUR</td>
<td>Super League</td>
<td>387K</td>
<td>Professional</td>
<td>17,319</td>
<td><span class="label" style="background:#303868"></span> <span class="label" style="background:#F87000"></span></td>
<td>1990</td>
<td>28.4</td>
</tr><tr role="row" class="odd">
<td id="1849" class="sorting_1">Basel</td>
<td>1849</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/SUI.gif" alt="Switzerland">  SUI</td>
<td>Super League</td>
<td>2M</td>
<td>Professional</td>
<td>39,687</td>
<td><span class="label" style="background:#304078"></span> <span class="label" style="background:#A82030"></span></td>
<td>1893</td>
<td>26.3</td>
</tr><tr role="row" class="even">
<td id="6100165" class="sorting_1">Bassano</td>
<td>6100165</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ITA.gif" alt="Italy">  ITA</td>
<td>Serie C/B</td>
<td>172K</td>
<td>Professional</td>
<td>2,902</td>
<td><span class="label" style="background:#E00000"></span> <span class="label" style="background:#F8F000"></span></td>
<td>1920</td>
<td>24.0</td>
</tr><tr role="row" class="odd">
<td id="130875" class="sorting_1">BATE</td>
<td>130875</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/BLR.gif" alt="Belarus">  BLR</td>
<td>Highest League</td>
<td>922K</td>
<td>Professional</td>
<td>13,400</td>
<td><span class="label" style="background:#F8F000"></span> <span class="label" style="background:#0078F8"></span></td>
<td>1996</td>
<td>26.3</td>
</tr><tr role="row" class="even">
<td id="608" class="sorting_1">Bath</td>
<td>608</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ENG.gif" alt="England">  ENG</td>
<td>Vanarama South</td>
<td>1K</td>
<td>Semi-Professional</td>
<td>8,840</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#000000"></span></td>
<td>1889</td>
<td>24.4</td>
</tr><tr role="row" class="odd">
<td id="915" class="sorting_1">Bayern</td>
<td>915</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/GER.gif" alt="Germany">  GER</td>
<td>First Division</td>
<td>34M</td>
<td>Professional</td>
<td>75,024</td>
<td><span class="label" style="background:#B00000"></span> <span class="label" style="background:#E00000"></span></td>
<td>1900</td>
<td>26.0</td>
</tr><tr role="row" class="even">
<td id="310700" class="sorting_1">BEC</td>
<td>310700</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/BRA.gif" alt="Brazil">  BRA</td>
<td>Third Division</td>
<td>48K</td>
<td>Professional</td>
<td>13,000</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#008030"></span></td>
<td>1947</td>
<td>25.6</td>
</tr><tr role="row" class="odd">
<td id="298" class="sorting_1">Beerschot-Wilrijk</td>
<td>298</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/BEL.gif" alt="Belgium">  BEL</td>
<td>First Division</td>
<td>0</td>
<td>Semi-Professional</td>
<td>12,296</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#503098"></span></td>
<td>1921</td>
<td>26.9</td>
</tr><tr role="row" class="even">
<td id="406" class="sorting_1">Beijing</td>
<td>406</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/CHN.gif" alt="China">  CHN</td>
<td>Super League</td>
<td>6M</td>
<td>Professional</td>
<td>66,161</td>
<td><span class="label" style="background:#106838"></span> <span class="label" style="background:#00A030"></span></td>
<td>1992</td>
<td>27.7</td>
</tr><tr role="row" class="odd">
<td id="23291963" class="sorting_1">Beikong</td>
<td>23291963</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/CHN.gif" alt="China">  CHN</td>
<td>First Division</td>
<td>576K</td>
<td>Professional</td>
<td>25,000</td>
<td><span class="label" style="background:#0030A0"></span> <span class="label" style="background:#E00000"></span></td>
<td>0</td>
<td>28.6</td>
</tr><tr role="row" class="even">
<td id="1083" class="sorting_1">Beitar Jerusalem</td>
<td>1083</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ISR.gif" alt="Israel">  ISR</td>
<td>Premier League</td>
<td>205K</td>
<td>Professional</td>
<td>34,000</td>
<td><span class="label" style="background:#F8F838"></span> <span class="label" style="background:#F8F000"></span></td>
<td>1936</td>
<td>24.3</td>
</tr><tr role="row" class="odd">
<td id="42023935" class="sorting_1">Beitar Tel-Aviv/Ramla</td>
<td>42023935</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ISR.gif" alt="Israel">  ISR</td>
<td>National League</td>
<td>0</td>
<td>Professional</td>
<td>1,500</td>
<td><span class="label" style="background:#1068F8"></span> <span class="label" style="background:#F8F8F8"></span></td>
<td>2011</td>
<td>21.0</td>
</tr><tr role="row" class="even">
<td id="1050" class="sorting_1">Bekescsaba</td>
<td>1050</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/HUN.gif" alt="Hungary">  HUN</td>
<td>Division II</td>
<td>0</td>
<td>Professional</td>
<td>10,432</td>
<td><span class="label" style="background:#501080"></span> <span class="label" style="background:#F8F8F8"></span></td>
<td>1912</td>
<td>26.6</td>
</tr><tr role="row" class="odd">
<td id="1474" class="sorting_1">Belenenses</td>
<td>1474</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/POR.gif" alt="Portugal">  POR</td>
<td>Premier League</td>
<td>129K</td>
<td>Professional</td>
<td>19,856</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#0030A0"></span></td>
<td>1919</td>
<td>23.8</td>
</tr><tr role="row" class="even">
<td id="81" class="sorting_1">Belgrano</td>
<td>81</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ARG.gif" alt="Argentina">  ARG</td>
<td>Premier Division</td>
<td>14K</td>
<td>Professional</td>
<td>46,083</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#20B0F0"></span></td>
<td>1905</td>
<td>28.4</td>
</tr><tr role="row" class="odd">
<td id="1300111" class="sorting_1">Belshina</td>
<td>1300111</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/BLR.gif" alt="Belarus">  BLR</td>
<td>Highest League</td>
<td>0</td>
<td>Professional</td>
<td>3,709</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#E00000"></span></td>
<td>1977</td>
<td>24.7</td>
</tr><tr role="row" class="even">
<td id="2188" class="sorting_1">Benevento</td>
<td>2188</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ITA.gif" alt="Italy">  ITA</td>
<td>Serie B</td>
<td>1M</td>
<td>Professional</td>
<td>18,000</td>
<td><span class="label" style="background:#F8F000"></span> <span class="label" style="background:#E00000"></span></td>
<td>1929</td>
<td>25.9</td>
</tr><tr role="row" class="odd">
<td id="2427" class="sorting_1">Benfica CB</td>
<td>2427</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/POR.gif" alt="Portugal">  POR</td>
<td>PT Championship</td>
<td>13K</td>
<td>Semi-Professional</td>
<td>12,000</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#E00000"></span></td>
<td>1924</td>
<td>24.3</td>
</tr><tr role="row" class="even">
<td id="40024212" class="sorting_1">Bengaluru FC</td>
<td>40024212</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/IND.gif" alt="India">  IND</td>
<td>National Football League</td>
<td>25K</td>
<td>Professional</td>
<td>40,000</td>
<td><span class="label" style="background:#F84010"></span> <span class="label" style="background:#0030A0"></span></td>
<td>2013</td>
<td>24.9</td>
</tr><tr role="row" class="odd">
<td id="121182" class="sorting_1">Berlin-Kopenick Dammfeld</td>
<td>121182</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/GER.gif" alt="Germany">  GER</td>
<td>Second Division</td>
<td>431K</td>
<td>Professional</td>
<td>21,717</td>
<td><span class="label" style="background:#F0B010"></span> <span class="label" style="background:#C80000"></span></td>
<td>1966</td>
<td>26.0</td>
</tr><tr role="row" class="even">
<td id="341" class="sorting_1">Beroe</td>
<td>341</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/BUL.gif" alt="Bulgaria">  BUL</td>
<td>First League</td>
<td>88K</td>
<td>Professional</td>
<td>13,500</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
<td>1959</td>
<td>25.8</td>
</tr><tr role="row" class="odd">
<td id="1543" class="sorting_1">Berwick</td>
<td>1543</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/SCO.gif" alt="Scotland">  SCO</td>
<td>Ladbrokes League 2</td>
<td>3K</td>
<td>Semi-Professional</td>
<td>4,099</td>
<td><span class="label" style="background:#F8D000"></span> <span class="label" style="background:#000000"></span></td>
<td>1881</td>
<td>23.2</td>
</tr><tr role="row" class="even">
<td id="1866" class="sorting_1">Besiktas</td>
<td>1866</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/TUR.gif" alt="Turkey">  TUR</td>
<td>Super League</td>
<td>3M</td>
<td>Professional</td>
<td>41,903</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#000000"></span></td>
<td>1903</td>
<td>27.2</td>
</tr><tr role="row" class="odd">
<td id="5742970" class="sorting_1">Bezanija</td>
<td>5742970</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/SRB.gif" alt="Serbia">  SRB</td>
<td>First League</td>
<td>69K</td>
<td>Professional</td>
<td>3,000</td>
<td><span class="label" style="background:#0030A0"></span> <span class="label" style="background:#F8F8F8"></span></td>
<td>1921</td>
<td>24.1</td>
</tr><tr role="row" class="even">
<td id="116145" class="sorting_1">Bhayangkara FC</td>
<td>116145</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/IDN.gif" alt="Indonesia">  IDN</td>
<td>Super League</td>
<td>62K</td>
<td>Professional</td>
<td>35,000</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#008030"></span></td>
<td>1927</td>
<td>25.2</td>
</tr><tr role="row" class="odd">
<td id="904" class="sorting_1">Bielefeld</td>
<td>904</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/GER.gif" alt="Germany">  GER</td>
<td>Second Division</td>
<td>43K</td>
<td>Professional</td>
<td>26,137</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#0050D0"></span></td>
<td>1905</td>
<td>26.3</td>
</tr><tr role="row" class="even">
<td id="609" class="sorting_1">Birmingham</td>
<td>609</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ENG.gif" alt="England">  ENG</td>
<td>Sky Bet Championship</td>
<td>500K</td>
<td>Professional</td>
<td>30,016</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#304078"></span></td>
<td>1875</td>
<td>26.9</td>
</tr><tr role="row" class="odd">
<td id="611" class="sorting_1">Bishop's Stortford</td>
<td>611</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ENG.gif" alt="England">  ENG</td>
<td>Vanarama South</td>
<td>1K</td>
<td>Semi-Professional</td>
<td>4,000</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#284890"></span></td>
<td>1874</td>
<td>23.6</td>
</tr><tr role="row" class="even">
<td id="2151" class="sorting_1">BK Forward</td>
<td>2151</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/SWE.gif" alt="Sweden">  SWE</td>
<td>First Division North</td>
<td>894</td>
<td>Semi-Professional</td>
<td>4,700</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F8F000"></span></td>
<td>1934</td>
<td>23.4</td>
</tr><tr role="row" class="odd">
<td id="1783" class="sorting_1">BK Hacken</td>
<td>1783</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/SWE.gif" alt="Sweden">  SWE</td>
<td>Premier Division</td>
<td>716K</td>
<td>Professional</td>
<td>6,500</td>
<td><span class="label" style="background:#F8D820"></span> <span class="label" style="background:#000000"></span></td>
<td>1940</td>
<td>26.4</td>
</tr><tr role="row" class="even">
<td id="2518" class="sorting_1">BK Olympic</td>
<td>2518</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/SWE.gif" alt="Sweden">  SWE</td>
<td>Second Division SG</td>
<td>0</td>
<td>Semi-Professional</td>
<td>1,000</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#188058"></span></td>
<td>1920</td>
<td>21.2</td>
</tr><tr role="row" class="odd">
<td id="2521" class="sorting_1">BKV Norrtalje</td>
<td>2521</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/SWE.gif" alt="Sweden">  SWE</td>
<td>Second Division NS</td>
<td>0</td>
<td>Semi-Professional</td>
<td>3,000</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#E00000"></span></td>
<td>1933</td>
<td>23.1</td>
</tr><tr role="row" class="even">
<td id="5680075" class="sorting_1">Black Leopards</td>
<td>5680075</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/RSA.gif" alt="South Africa">  RSA</td>
<td>National First Division</td>
<td>141K</td>
<td>Professional</td>
<td>10,000</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F8D000"></span></td>
<td>1983</td>
<td>25.6</td>
</tr><tr role="row" class="odd">
<td id="612" class="sorting_1">Blackburn</td>
<td>612</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ENG.gif" alt="England">  ENG</td>
<td>Sky Bet Championship</td>
<td>300K</td>
<td>Professional</td>
<td>31,154</td>
<td><span class="label" style="background:#0030A8"></span> <span class="label" style="background:#F8F8F8"></span></td>
<td>1875</td>
<td>25.8</td>
</tr><tr role="row" class="even">
<td id="613" class="sorting_1">Blackpool</td>
<td>613</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ENG.gif" alt="England">  ENG</td>
<td>Sky Bet League Two</td>
<td>50K</td>
<td>Professional</td>
<td>17,338</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#F08000"></span></td>
<td>1887</td>
<td>25.0</td>
</tr><tr role="row" class="odd">
<td id="130770" class="sorting_1">Bloem Celtic</td>
<td>130770</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/RSA.gif" alt="South Africa">  RSA</td>
<td>South African Premiership</td>
<td>254K</td>
<td>Professional</td>
<td>20,000</td>
<td><span class="label" style="background:#00C030"></span> <span class="label" style="background:#F8F8F8"></span></td>
<td>1969</td>
<td>26.2</td>
</tr><tr role="row" class="even">
<td id="908" class="sorting_1">BMG</td>
<td>908</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/GER.gif" alt="Germany">  GER</td>
<td>First Division</td>
<td>10M</td>
<td>Professional</td>
<td>54,010</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F8F8F8"></span></td>
<td>1900</td>
<td>24.6</td>
</tr><tr role="row" class="odd">
<td id="7867984" class="sorting_1">Bnei Lod</td>
<td>7867984</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ISR.gif" alt="Israel">  ISR</td>
<td>National League</td>
<td>2K</td>
<td>Professional</td>
<td>3,000</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
<td>0</td>
<td>25.4</td>
</tr><tr role="row" class="even">
<td id="7860421" class="sorting_1">Bnei Sakhnin</td>
<td>7860421</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ISR.gif" alt="Israel">  ISR</td>
<td>Premier League</td>
<td>0</td>
<td>Professional</td>
<td>5,000</td>
<td><span class="label" style="background:#B00000"></span> <span class="label" style="background:#C80000"></span></td>
<td>1992</td>
<td>24.7</td>
</tr><tr role="row" class="odd">
<td id="1082" class="sorting_1">Bnei Yehuda</td>
<td>1082</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ISR.gif" alt="Israel">  ISR</td>
<td>Premier League</td>
<td>26K</td>
<td>Professional</td>
<td>11,500</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F08000"></span></td>
<td>1935</td>
<td>23.1</td>
</tr><tr role="row" class="even">
<td id="1471" class="sorting_1">Boavista</td>
<td>1471</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/POR.gif" alt="Portugal">  POR</td>
<td>Premier League</td>
<td>108K</td>
<td>Professional</td>
<td>30,000</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
<td>1903</td>
<td>24.1</td>
</tr><tr role="row" class="odd">
<td id="82" class="sorting_1">Boca</td>
<td>82</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ARG.gif" alt="Argentina">  ARG</td>
<td>Premier Division</td>
<td>77K</td>
<td>Professional</td>
<td>49,000</td>
<td><span class="label" style="background:#F8D000"></span> <span class="label" style="background:#0030A0"></span></td>
<td>1905</td>
<td>24.8</td>
</tr><tr role="row" class="even">
<td id="14006366" class="sorting_1">Boca Unidos</td>
<td>14006366</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ARG.gif" alt="Argentina">  ARG</td>
<td>Second Division</td>
<td>19K</td>
<td>Professional</td>
<td>0</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
<td>1927</td>
<td>29.5</td>
</tr><tr role="row" class="odd">
<td id="905" class="sorting_1">Bochum</td>
<td>905</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/GER.gif" alt="Germany">  GER</td>
<td>Second Division</td>
<td>258K</td>
<td>Professional</td>
<td>29,299</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#0050D0"></span></td>
<td>1938</td>
<td>23.9</td>
</tr><tr role="row" class="even">
<td id="1784" class="sorting_1">Bodens BK</td>
<td>1784</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/SWE.gif" alt="Sweden">  SWE</td>
<td>Second Division N</td>
<td>3K</td>
<td>Semi-Professional</td>
<td>5,000</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#008030"></span></td>
<td>1916</td>
<td>21.7</td>
</tr><tr role="row" class="odd">
<td id="1293" class="sorting_1">Bodo/Glimt</td>
<td>1293</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/NOR.gif" alt="Norway">  NOR</td>
<td>Premier Division</td>
<td>95K</td>
<td>Professional</td>
<td>7,127</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F8D858"></span></td>
<td>1916</td>
<td>23.7</td>
</tr><tr role="row" class="even">
<td id="309353" class="sorting_1">Bogota F.C.</td>
<td>309353</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/COL.gif" alt="Colombia">  COL</td>
<td>Second Division</td>
<td>196K</td>
<td>Professional</td>
<td>12,000</td>
<td><span class="label" style="background:#E00000"></span> <span class="label" style="background:#F8F000"></span></td>
<td>2003</td>
<td>21.3</td>
</tr><tr role="row" class="odd">
<td id="588" class="sorting_1">Bohemians</td>
<td>588</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/IRL.gif" alt="Ireland">  IRL</td>
<td>Premier Division</td>
<td>0</td>
<td>Semi-Professional</td>
<td>10,000</td>
<td><span class="label" style="background:#E00000"></span> <span class="label" style="background:#000000"></span></td>
<td>1890</td>
<td>25.4</td>
</tr><tr role="row" class="even">
<td id="463" class="sorting_1">Bohemians 1905</td>
<td>463</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/CZE.gif" alt="Czech Republic">  CZE</td>
<td>First Division</td>
<td>239K</td>
<td>Professional</td>
<td>5,000</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#006030"></span></td>
<td>1905</td>
<td>26.0</td>
</tr><tr role="row" class="odd">
<td id="67105751" class="sorting_1">Boiro</td>
<td>67105751</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ESP.gif" alt="Spain">  ESP</td>
<td>Second Division B1</td>
<td>0</td>
<td>Semi-Professional</td>
<td>0</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#F8F8F8"></span></td>
<td>1966</td>
<td>26.1</td>
</tr><tr role="row" class="even">
<td id="1111" class="sorting_1">Bologna</td>
<td>1111</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ITA.gif" alt="Italy">  ITA</td>
<td>Serie A</td>
<td>3M</td>
<td>Professional</td>
<td>36,462</td>
<td><span class="label" style="background:#E00000"></span> <span class="label" style="background:#083078"></span></td>
<td>1909</td>
<td>25.5</td>
</tr><tr role="row" class="odd">
<td id="614" class="sorting_1">Bolton</td>
<td>614</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ENG.gif" alt="England">  ENG</td>
<td>Sky Bet League One</td>
<td>0</td>
<td>Professional</td>
<td>28,723</td>
<td><span class="label" style="background:#283868"></span> <span class="label" style="background:#F8F8F8"></span></td>
<td>1874</td>
<td>26.0</td>
</tr><tr role="row" class="even">
<td id="130354" class="sorting_1">Boluspor</td>
<td>130354</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/TUR.gif" alt="Turkey">  TUR</td>
<td>1. League</td>
<td>14K</td>
<td>Professional</td>
<td>8,881</td>
<td><span class="label" style="background:#E00000"></span> <span class="label" style="background:#F8F8F8"></span></td>
<td>1965</td>
<td>25.0</td>
</tr><tr role="row" class="odd">
<td id="1819" class="sorting_1">Boo FK</td>
<td>1819</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/SWE.gif" alt="Sweden">  SWE</td>
<td>Second Division NS</td>
<td>894</td>
<td>Semi-Professional</td>
<td>1,000</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#680028"></span></td>
<td>1990</td>
<td>24.7</td>
</tr><tr role="row" class="even">
<td id="1301381" class="sorting_1">Borac</td>
<td>1301381</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/SRB.gif" alt="Serbia">  SRB</td>
<td>SuperLeague</td>
<td>198K</td>
<td>Professional</td>
<td>8,000</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#E00000"></span></td>
<td>1926</td>
<td>24.4</td>
</tr><tr role="row" class="odd">
<td id="109212" class="sorting_1">Boreham Wood</td>
<td>109212</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ENG.gif" alt="England">  ENG</td>
<td>Vanarama National</td>
<td>3K</td>
<td>Professional</td>
<td>4,502</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F8F8F8"></span></td>
<td>1948</td>
<td>24.1</td>
</tr><tr role="row" class="even">
<td id="41021352" class="sorting_1">Borneo FC</td>
<td>41021352</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/IDN.gif" alt="Indonesia">  IDN</td>
<td>Super League</td>
<td>142K</td>
<td>Professional</td>
<td>20,000</td>
<td><span class="label" style="background:#702020"></span> <span class="label" style="background:#F84000"></span></td>
<td>2014</td>
<td>26.6</td>
</tr><tr role="row" class="odd">
<td id="5512793" class="sorting_1">Boston River</td>
<td>5512793</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/URU.gif" alt="Uruguay">  URU</td>
<td>First Division</td>
<td>2K</td>
<td>Professional</td>
<td>4,000</td>
<td><span class="label" style="background:#C80000"></span> <span class="label" style="background:#006030"></span></td>
<td>1939</td>
<td>25.8</td>
</tr><tr role="row" class="even">
<td id="615" class="sorting_1">Boston Utd</td>
<td>615</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ENG.gif" alt="England">  ENG</td>
<td>Vanarama North</td>
<td>0</td>
<td>Semi-Professional</td>
<td>6,643</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
<td>1933</td>
<td>23.9</td>
</tr><tr role="row" class="odd">
<td id="316" class="sorting_1">BOT</td>
<td>316</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/BRA.gif" alt="Brazil">  BRA</td>
<td>First Division</td>
<td>119K</td>
<td>Professional</td>
<td>44,461</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#E00000"></span></td>
<td>1904</td>
<td>26.4</td>
</tr><tr role="row" class="even">
<td id="7508916" class="sorting_1">Botev Galabovo</td>
<td>7508916</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/BUL.gif" alt="Bulgaria">  BUL</td>
<td>Second League</td>
<td>0</td>
<td>Professional</td>
<td>3,000</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F00000"></span></td>
<td>1945</td>
<td>25.0</td>
</tr><tr role="row" class="odd">
<td id="22033833" class="sorting_1">Botev Plovdiv</td>
<td>22033833</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/BUL.gif" alt="Bulgaria">  BUL</td>
<td>First League</td>
<td>22K</td>
<td>Professional</td>
<td>18,037</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F8F000"></span></td>
<td>1912</td>
<td>23.3</td>
</tr><tr role="row" class="even">
<td id="22003932" class="sorting_1">Botev Vratsa</td>
<td>22003932</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/BUL.gif" alt="Bulgaria">  BUL</td>
<td>Second League</td>
<td>0</td>
<td>Professional</td>
<td>21,000</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#00A030"></span></td>
<td>1921</td>
<td>25.4</td>
</tr><tr role="row" class="odd">
<td id="7540447" class="sorting_1">Botosani</td>
<td>7540447</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ROU.gif" alt="Romania">  ROU</td>
<td>Liga I</td>
<td>0</td>
<td>Professional</td>
<td>12,000</td>
<td><span class="label" style="background:#F0F0F0"></span> <span class="label" style="background:#F8F8F8"></span></td>
<td>2001</td>
<td>24.8</td>
</tr><tr role="row" class="even">
<td id="1980" class="sorting_1">Bourg-en-Bresse 01</td>
<td>1980</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/FRA.gif" alt="France">  FRA</td>
<td>Domino's Ligue 2</td>
<td>0</td>
<td>Professional</td>
<td>11,400</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#0050D0"></span></td>
<td>1942</td>
<td>26.5</td>
</tr><tr role="row" class="odd">
<td id="600" class="sorting_1">Bournemouth</td>
<td>600</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ENG.gif" alt="England">  ENG</td>
<td>Premier Division</td>
<td>4M</td>
<td>Professional</td>
<td>11,464</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#E82010"></span></td>
<td>1899</td>
<td>26.0</td>
</tr><tr role="row" class="even">
<td id="5260325" class="sorting_1">Boyaca Chico F.C.</td>
<td>5260325</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/COL.gif" alt="Colombia">  COL</td>
<td>First Division</td>
<td>446K</td>
<td>Professional</td>
<td>30,000</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F860A8"></span></td>
<td>2002</td>
<td>27.3</td>
</tr><tr role="row" class="odd">
<td id="301208" class="sorting_1">BPB</td>
<td>301208</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/BRA.gif" alt="Brazil">  BRA</td>
<td>Third Division</td>
<td>59K</td>
<td>Professional</td>
<td>19,000</td>
<td><span class="label" style="background:#283030"></span> <span class="label" style="background:#E85888"></span></td>
<td>1931</td>
<td>27.2</td>
</tr><tr role="row" class="even">
<td id="317" class="sorting_1">BRA</td>
<td>317</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/BRA.gif" alt="Brazil">  BRA</td>
<td>Second Division</td>
<td>12K</td>
<td>Professional</td>
<td>16,119</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#C80000"></span></td>
<td>1928</td>
<td>27.0</td>
</tr><tr role="row" class="odd">
<td id="930105" class="sorting_1">Brabrand IF</td>
<td>930105</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/DEN.gif" alt="Denmark">  DEN</td>
<td>Second Division</td>
<td>0</td>
<td>Semi-Professional</td>
<td>1,500</td>
<td><span class="label" style="background:#F88000"></span> <span class="label" style="background:#005098"></span></td>
<td>1934</td>
<td>24.9</td>
</tr><tr role="row" class="even">
<td id="5100088" class="sorting_1">Brackley</td>
<td>5100088</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ENG.gif" alt="England">  ENG</td>
<td>Vanarama North</td>
<td>0</td>
<td>Semi-Professional</td>
<td>3,500</td>
<td><span class="label" style="background:#E00000"></span> <span class="label" style="background:#000000"></span></td>
<td>1890</td>
<td>23.5</td>
</tr><tr role="row" class="odd">
<td id="616" class="sorting_1">Bradford City</td>
<td>616</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ENG.gif" alt="England">  ENG</td>
<td>Sky Bet League One</td>
<td>50K</td>
<td>Professional</td>
<td>25,136</td>
<td><span class="label" style="background:#F8A800"></span> <span class="label" style="background:#780818"></span></td>
<td>1903</td>
<td>26.4</td>
</tr><tr role="row" class="even">
<td id="4002013" class="sorting_1">Bradford PA</td>
<td>4002013</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ENG.gif" alt="England">  ENG</td>
<td>Vanarama North</td>
<td>0</td>
<td>Semi-Professional</td>
<td>5,000</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#70E088"></span></td>
<td>1907</td>
<td>26.6</td>
</tr><tr role="row" class="odd">
<td id="1488" class="sorting_1">Braga</td>
<td>1488</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/POR.gif" alt="Portugal">  POR</td>
<td>Premier League</td>
<td>3M</td>
<td>Professional</td>
<td>30,286</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#F00000"></span></td>
<td>1921</td>
<td>24.8</td>
</tr><tr role="row" class="even">
<td id="55000307" class="sorting_1">Braga B</td>
<td>55000307</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/POR.gif" alt="Portugal">  POR</td>
<td>Second League</td>
<td>26K</td>
<td>Professional</td>
<td>30,000</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#F00000"></span></td>
<td>0</td>
<td>20.6</td>
</tr><tr role="row" class="odd">
<td id="725010" class="sorting_1">Braganca</td>
<td>725010</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/POR.gif" alt="Portugal">  POR</td>
<td>PT Championship</td>
<td>7K</td>
<td>Semi-Professional</td>
<td>8,393</td>
<td><span class="label" style="background:#0050D0"></span> <span class="label" style="background:#F8F000"></span></td>
<td>1947</td>
<td>25.1</td>
</tr><tr role="row" class="even">
<td id="134732" class="sorting_1">Braintree</td>
<td>134732</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ENG.gif" alt="England">  ENG</td>
<td>Vanarama National</td>
<td>8K</td>
<td>Semi-Professional</td>
<td>4,222</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#E87028"></span></td>
<td>1898</td>
<td>24.4</td>
</tr><tr role="row" class="odd">
<td id="1378" class="sorting_1">Brann</td>
<td>1378</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/NOR.gif" alt="Norway">  NOR</td>
<td>Premier Division</td>
<td>237K</td>
<td>Professional</td>
<td>17,703</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#E00000"></span></td>
<td>1908</td>
<td>25.5</td>
</tr><tr role="row" class="even">
<td id="1294" class="sorting_1">Brattvag</td>
<td>1294</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/NOR.gif" alt="Norway">  NOR</td>
<td>Second Division Group 2</td>
<td>0</td>
<td>Semi-Professional</td>
<td>1,300</td>
<td><span class="label" style="background:#0000F8"></span> <span class="label" style="background:#F8D800"></span></td>
<td>1940</td>
<td>24.6</td>
</tr><tr role="row" class="odd">
<td id="2237" class="sorting_1">Braunschweig</td>
<td>2237</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/GER.gif" alt="Germany">  GER</td>
<td>Second Division</td>
<td>603K</td>
<td>Professional</td>
<td>23,325</td>
<td><span class="label" style="background:#0078F8"></span> <span class="label" style="background:#F8F000"></span></td>
<td>1895</td>
<td>24.9</td>
</tr><tr role="row" class="even">
<td id="1300916" class="sorting_1">Bray Wanderers</td>
<td>1300916</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/IRL.gif" alt="Ireland">  IRL</td>
<td>Premier Division</td>
<td>0</td>
<td>Semi-Professional</td>
<td>8,000</td>
<td><span class="label" style="background:#006030"></span> <span class="label" style="background:#101010"></span></td>
<td>1942</td>
<td>25.5</td>
</tr><tr role="row" class="odd">
<td id="7580041" class="sorting_1">Brda</td>
<td>7580041</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/SVN.gif" alt="Slovenia">  SVN</td>
<td>Second League</td>
<td>43K</td>
<td>Semi-Professional</td>
<td>193</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
<td>1973</td>
<td>21.5</td>
</tr><tr role="row" class="even">
<td id="1544" class="sorting_1">Brechin</td>
<td>1544</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/SCO.gif" alt="Scotland">  SCO</td>
<td>Ladbrokes League 1</td>
<td>30K</td>
<td>Semi-Professional</td>
<td>4,083</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#D02028"></span></td>
<td>1906</td>
<td>26.4</td>
</tr><tr role="row" class="odd">
<td id="1069" class="sorting_1">Brei?ablik</td>
<td>1069</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ISL.gif" alt="Iceland">  ISL</td>
<td>Premier Division</td>
<td>27K</td>
<td>Semi-Professional</td>
<td>3,009</td>
<td><span class="label" style="background:#105038"></span> <span class="label" style="background:#000000"></span></td>
<td>1950</td>
<td>23.4</td>
</tr><tr role="row" class="even">
<td id="948" class="sorting_1">Bremen</td>
<td>948</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/GER.gif" alt="Germany">  GER</td>
<td>First Division</td>
<td>3M</td>
<td>Professional</td>
<td>42,500</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#088070"></span></td>
<td>1899</td>
<td>26.3</td>
</tr><tr role="row" class="odd">
<td id="103285" class="sorting_1">Bremen II</td>
<td>103285</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/GER.gif" alt="Germany">  GER</td>
<td>Third Division</td>
<td>0</td>
<td>Professional</td>
<td>5,500</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
<td>0</td>
<td>22.6</td>
</tr><tr role="row" class="even">
<td id="617" class="sorting_1">Brentford</td>
<td>617</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ENG.gif" alt="England">  ENG</td>
<td>Sky Bet Championship</td>
<td>500K</td>
<td>Professional</td>
<td>12,802</td>
<td><span class="label" style="background:#F80020"></span> <span class="label" style="background:#F8F8F8"></span></td>
<td>1889</td>
<td>23.8</td>
</tr><tr role="row" class="odd">
<td id="1113" class="sorting_1">Brescia</td>
<td>1113</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ITA.gif" alt="Italy">  ITA</td>
<td>Serie B</td>
<td>345K</td>
<td>Professional</td>
<td>27,547</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#0050D0"></span></td>
<td>1911</td>
<td>23.2</td>
</tr><tr role="row" class="even">
<td id="64019293" class="sorting_1">Brezice</td>
<td>64019293</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/SVN.gif" alt="Slovenia">  SVN</td>
<td>Second League</td>
<td>43K</td>
<td>Semi-Professional</td>
<td>500</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#0078F8"></span></td>
<td>1919</td>
<td>22.8</td>
</tr><tr role="row" class="odd">
<td id="618" class="sorting_1">Brighton</td>
<td>618</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ENG.gif" alt="England">  ENG</td>
<td>Sky Bet Championship</td>
<td>5M</td>
<td>Professional</td>
<td>30,384</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
<td>1901</td>
<td>27.2</td>
</tr><tr role="row" class="even">
<td id="130220" class="sorting_1">Brisbane Roar</td>
<td>130220</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/AUS.gif" alt="Australia">  AUS</td>
<td>Hyundai A-League</td>
<td>72K</td>
<td>Professional</td>
<td>52,500</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F87000"></span></td>
<td>2005</td>
<td>25.3</td>
</tr><tr role="row" class="odd">
<td id="619" class="sorting_1">Bristol City</td>
<td>619</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ENG.gif" alt="England">  ENG</td>
<td>Sky Bet Championship</td>
<td>6M</td>
<td>Professional</td>
<td>27,000</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#D01028"></span></td>
<td>1897</td>
<td>24.7</td>
</tr><tr role="row" class="even">
<td id="620" class="sorting_1">Bristol Rovers</td>
<td>620</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ENG.gif" alt="England">  ENG</td>
<td>Sky Bet League One</td>
<td>25K</td>
<td>Professional</td>
<td>12,300</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#0060B8"></span></td>
<td>1883</td>
<td>25.7</td>
</tr><tr role="row" class="odd">
<td id="465" class="sorting_1">Brno</td>
<td>465</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/CZE.gif" alt="Czech Republic">  CZE</td>
<td>First Division</td>
<td>239K</td>
<td>Professional</td>
<td>12,550</td>
<td><span class="label" style="background:#000030"></span> <span class="label" style="background:#E00000"></span></td>
<td>1913</td>
<td>25.7</td>
</tr><tr role="row" class="even">
<td id="5100153" class="sorting_1">Bromley</td>
<td>5100153</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ENG.gif" alt="England">  ENG</td>
<td>Vanarama National</td>
<td>10K</td>
<td>Semi-Professional</td>
<td>5,000</td>
<td><span class="label" style="background:#E8E8E8"></span> <span class="label" style="background:#F8F8F8"></span></td>
<td>1892</td>
<td>27.1</td>
</tr><tr role="row" class="odd">
<td id="496" class="sorting_1">Brondby IF</td>
<td>496</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/DEN.gif" alt="Denmark">  DEN</td>
<td>Superliga</td>
<td>810K</td>
<td>Professional</td>
<td>29,000</td>
<td><span class="label" style="background:#0030A0"></span> <span class="label" style="background:#F8F838"></span></td>
<td>1964</td>
<td>24.9</td>
</tr><tr role="row" class="even">
<td id="497" class="sorting_1">Bronshoj</td>
<td>497</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/DEN.gif" alt="Denmark">  DEN</td>
<td>Second Division</td>
<td>0</td>
<td>Semi-Professional</td>
<td>3,000</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
<td>1919</td>
<td>22.5</td>
</tr><tr role="row" class="odd">
<td id="3101502" class="sorting_1">Brown (Adrogue)</td>
<td>3101502</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ARG.gif" alt="Argentina">  ARG</td>
<td>Second Division</td>
<td>12K</td>
<td>Professional</td>
<td>3,000</td>
<td><span class="label" style="background:#901000"></span> <span class="label" style="background:#00D0D0"></span></td>
<td>1945</td>
<td>27.8</td>
</tr><tr role="row" class="even">
<td id="301264" class="sorting_1">BRP</td>
<td>301264</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/BRA.gif" alt="Brazil">  BRA</td>
<td>Second Division</td>
<td>12K</td>
<td>Professional</td>
<td>20,000</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#FFFFFF"></span></td>
<td>1911</td>
<td>30.2</td>
</tr><tr role="row" class="odd">
<td id="96000060" class="sorting_1">Bruk-Bet Termalica</td>
<td>96000060</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/POL.gif" alt="Poland">  POL</td>
<td>LOTTO Ekstraklasa</td>
<td>60K</td>
<td>Professional</td>
<td>4,660</td>
<td><span class="label" style="background:#F87000"></span> <span class="label" style="background:#F87000"></span></td>
<td>1922</td>
<td>26.2</td>
</tr><tr role="row" class="even">
<td id="753915" class="sorting_1">Brumunddal</td>
<td>753915</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/NOR.gif" alt="Norway">  NOR</td>
<td>Second Division Group 2</td>
<td>0</td>
<td>Semi-Professional</td>
<td>5,000</td>
<td><span class="label" style="background:#0030A0"></span> <span class="label" style="background:#F8F8F8"></span></td>
<td>1905</td>
<td>24.3</td>
</tr><tr role="row" class="odd">
<td id="1295" class="sorting_1">Bryne</td>
<td>1295</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/NOR.gif" alt="Norway">  NOR</td>
<td>First Division</td>
<td>5K</td>
<td>Professional</td>
<td>10,500</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#E81800"></span></td>
<td>1926</td>
<td>23.9</td>
</tr><tr role="row" class="even">
<td id="5742971" class="sorting_1">BSK Borca</td>
<td>5742971</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/SRB.gif" alt="Serbia">  SRB</td>
<td>First League</td>
<td>52K</td>
<td>Professional</td>
<td>3,000</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#0030A0"></span></td>
<td>1937</td>
<td>21.8</td>
</tr><tr role="row" class="odd">
<td id="121265" class="sorting_1">BTF</td>
<td>121265</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/BRA.gif" alt="Brazil">  BRA</td>
<td>Third Division</td>
<td>0</td>
<td>Professional</td>
<td>29,292</td>
<td><span class="label" style="background:#E00000"></span> <span class="label" style="background:#F8F000"></span></td>
<td>1918</td>
<td>26.3</td>
</tr><tr role="row" class="even">
<td id="130802" class="sorting_1">Bucaramanga</td>
<td>130802</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/COL.gif" alt="Colombia">  COL</td>
<td>First Division</td>
<td>346K</td>
<td>Professional</td>
<td>30,000</td>
<td><span class="label" style="background:#00A030"></span> <span class="label" style="background:#F8F000"></span></td>
<td>1949</td>
<td>27.8</td>
</tr><tr role="row" class="odd">
<td id="130348" class="sorting_1">Bucaspor</td>
<td>130348</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/TUR.gif" alt="Turkey">  TUR</td>
<td>2. League White</td>
<td>0</td>
<td>Professional</td>
<td>10,500</td>
<td><span class="label" style="background:#0030A0"></span> <span class="label" style="background:#002060"></span></td>
<td>1928</td>
<td>25.2</td>
</tr><tr role="row" class="even">
<td id="66010556" class="sorting_1">Bucheon 1995</td>
<td>66010556</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/KOR.gif" alt="South Korea">  KOR</td>
<td>K LEAGUE Challenge</td>
<td>124K</td>
<td>Professional</td>
<td>34,545</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#E83810"></span></td>
<td>2007</td>
<td>26.1</td>
</tr><tr role="row" class="odd">
<td id="38000839" class="sorting_1">Budaors</td>
<td>38000839</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/HUN.gif" alt="Hungary">  HUN</td>
<td>Division II</td>
<td>9K</td>
<td>Professional</td>
<td>1,200</td>
<td><span class="label" style="background:#A0F070"></span> <span class="label" style="background:#00A030"></span></td>
<td>1924</td>
<td>24.2</td>
</tr><tr role="row" class="even">
<td id="5756755" class="sorting_1">Buducnost (D)</td>
<td>5756755</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/SRB.gif" alt="Serbia">  SRB</td>
<td>First League</td>
<td>34K</td>
<td>Semi-Professional</td>
<td>700</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
<td>1920</td>
<td>25.8</td>
</tr><tr role="row" class="odd">
<td id="8491577" class="sorting_1">BUGSASSpor</td>
<td>8491577</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/TUR.gif" alt="Turkey">  TUR</td>
<td>2. League Red</td>
<td>0</td>
<td>Professional</td>
<td>4,271</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#002080"></span></td>
<td>1984</td>
<td>24.0</td>
</tr><tr role="row" class="even">
<td id="484458" class="sorting_1">Bukovyna</td>
<td>484458</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/UKR.gif" alt="Ukraine">  UKR</td>
<td>First League</td>
<td>0</td>
<td>Professional</td>
<td>12,000</td>
<td><span class="label" style="background:#E00000"></span> <span class="label" style="background:#F8F8F8"></span></td>
<td>1952</td>
<td>23.8</td>
</tr><tr role="row" class="odd">
<td id="4200566" class="sorting_1">Burgos</td>
<td>4200566</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ESP.gif" alt="Spain">  ESP</td>
<td>Second Division B1</td>
<td>0</td>
<td>Professional</td>
<td>12,200</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#F8F8F8"></span></td>
<td>1994</td>
<td>26.3</td>
</tr><tr role="row" class="even">
<td id="622" class="sorting_1">Burnley</td>
<td>622</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ENG.gif" alt="England">  ENG</td>
<td>Premier Division</td>
<td>10M</td>
<td>Professional</td>
<td>22,546</td>
<td><span class="label" style="background:#90C0E0"></span> <span class="label" style="background:#701038"></span></td>
<td>1882</td>
<td>26.0</td>
</tr><tr role="row" class="odd">
<td id="1867" class="sorting_1">Bursaspor</td>
<td>1867</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/TUR.gif" alt="Turkey">  TUR</td>
<td>Super League</td>
<td>2M</td>
<td>Professional</td>
<td>43,331</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
<td>1963</td>
<td>27.3</td>
</tr><tr role="row" class="even">
<td id="4001706" class="sorting_1">Burton</td>
<td>4001706</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ENG.gif" alt="England">  ENG</td>
<td>Sky Bet Championship</td>
<td>150K</td>
<td>Professional</td>
<td>6,972</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F8F000"></span></td>
<td>1950</td>
<td>26.7</td>
</tr><tr role="row" class="odd">
<td id="623" class="sorting_1">Bury</td>
<td>623</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ENG.gif" alt="England">  ENG</td>
<td>Sky Bet League One</td>
<td>0</td>
<td>Professional</td>
<td>11,376</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
<td>1885</td>
<td>25.4</td>
</tr><tr role="row" class="even">
<td id="130775" class="sorting_1">Busan</td>
<td>130775</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/KOR.gif" alt="South Korea">  KOR</td>
<td>K LEAGUE Challenge</td>
<td>700K</td>
<td>Professional</td>
<td>55,982</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#B82020"></span></td>
<td>1983</td>
<td>25.8</td>
</tr><tr role="row" class="odd">
<td id="93030441" class="sorting_1">BW-90 IF</td>
<td>93030441</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/SWE.gif" alt="Sweden">  SWE</td>
<td>Second Division SG</td>
<td>0</td>
<td>Semi-Professional</td>
<td>500</td>
<td><span class="label" style="background:#00F8F8"></span> <span class="label" style="background:#F8F8F8"></span></td>
<td>1990</td>
<td>23.6</td>
</tr><tr role="row" class="even">
<td id="1296" class="sorting_1">Byasen</td>
<td>1296</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/NOR.gif" alt="Norway">  NOR</td>
<td>Second Division Group 2</td>
<td>0</td>
<td>Semi-Professional</td>
<td>2,500</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#F80018"></span></td>
<td>1921</td>
<td>24.4</td>
</tr><tr role="row" class="odd">
<td id="96023087" class="sorting_1">Bytovia</td>
<td>96023087</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/POL.gif" alt="Poland">  POL</td>
<td>First Division</td>
<td>20K</td>
<td>Professional</td>
<td>2,043</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#E00000"></span></td>
<td>1946</td>
<td>25.6</td>
</tr><tr role="row" class="even">
<td id="6201842" class="sorting_1">CA Bastia</td>
<td>6201842</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/FRA.gif" alt="France">  FRA</td>
<td>National</td>
<td>0</td>
<td>Semi-Professional</td>
<td>1,300</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#000000"></span></td>
<td>1920</td>
<td>24.6</td>
</tr><tr role="row" class="odd">
<td id="52076833" class="sorting_1">Cabinteely</td>
<td>52076833</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/IRL.gif" alt="Ireland">  IRL</td>
<td>First Division</td>
<td>0</td>
<td>Semi-Professional</td>
<td>2,000</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
<td>1967</td>
<td>20.2</td>
</tr><tr role="row" class="even">
<td id="1682" class="sorting_1">Cadiz</td>
<td>1682</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ESP.gif" alt="Spain">  ESP</td>
<td>Second Division</td>
<td>74K</td>
<td>Professional</td>
<td>25,033</td>
<td><span class="label" style="background:#0050D0"></span> <span class="label" style="background:#F8F838"></span></td>
<td>1910</td>
<td>27.3</td>
</tr><tr role="row" class="odd">
<td id="1114" class="sorting_1">Cagliari</td>
<td>1114</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ITA.gif" alt="Italy">  ITA</td>
<td>Serie A</td>
<td>2M</td>
<td>Professional</td>
<td>16,003</td>
<td><span class="label" style="background:#002060"></span> <span class="label" style="background:#C80030"></span></td>
<td>1920</td>
<td>28.3</td>
</tr><tr role="row" class="even">
<td id="2420" class="sorting_1">Caldas</td>
<td>2420</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/POR.gif" alt="Portugal">  POR</td>
<td>PT Championship</td>
<td>4K</td>
<td>Semi-Professional</td>
<td>13,000</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#000000"></span></td>
<td>1916</td>
<td>24.0</td>
</tr><tr role="row" class="odd">
<td id="2435" class="sorting_1">Camacha</td>
<td>2435</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/POR.gif" alt="Portugal">  POR</td>
<td>PT Championship</td>
<td>4K</td>
<td>Semi-Professional</td>
<td>3,500</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#0078F8"></span></td>
<td>1978</td>
<td>27.3</td>
</tr><tr role="row" class="even">
<td id="624" class="sorting_1">Cambridge</td>
<td>624</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ENG.gif" alt="England">  ENG</td>
<td>Sky Bet League Two</td>
<td>100K</td>
<td>Professional</td>
<td>8,696</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
<td>1912</td>
<td>24.4</td>
</tr><tr role="row" class="odd">
<td id="994" class="sorting_1">Cambuur</td>
<td>994</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/NED.gif" alt="Holland">  NED</td>
<td>Jupiler League</td>
<td>151K</td>
<td>Professional</td>
<td>10,000</td>
<td><span class="label" style="background:#203098"></span> <span class="label" style="background:#F0E028"></span></td>
<td>1964</td>
<td>24.8</td>
</tr><tr role="row" class="even">
<td id="78046974" class="sorting_1">Canadian S.C.</td>
<td>78046974</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/URU.gif" alt="Uruguay">  URU</td>
<td>Second Division</td>
<td>768</td>
<td>Professional</td>
<td>1,500</td>
<td><span class="label" style="background:#E00000"></span> <span class="label" style="background:#F8F8F8"></span></td>
<td>2010</td>
<td>22.8</td>
</tr><tr role="row" class="odd">
<td id="55001114" class="sorting_1">Canical</td>
<td>55001114</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/POR.gif" alt="Portugal">  POR</td>
<td>PT Championship</td>
<td>861</td>
<td>Semi-Professional</td>
<td>1,000</td>
<td><span class="label" style="background:#E00000"></span> <span class="label" style="background:#F8F000"></span></td>
<td>1981</td>
<td>26.0</td>
</tr><tr role="row" class="even">
<td id="65010452" class="sorting_1">Cape Town All Stars</td>
<td>65010452</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/RSA.gif" alt="South Africa">  RSA</td>
<td>National First Division</td>
<td>1M</td>
<td>Professional</td>
<td>6,000</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#008040"></span></td>
<td>2010</td>
<td>23.4</td>
</tr><tr role="row" class="odd">
<td id="65035889" class="sorting_1">Cape Town City</td>
<td>65035889</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/RSA.gif" alt="South Africa">  RSA</td>
<td>South African Premiership</td>
<td>226K</td>
<td>Professional</td>
<td>64,100</td>
<td><span class="label" style="background:#E0B840"></span> <span class="label" style="background:#2060A8"></span></td>
<td>2016</td>
<td>25.5</td>
</tr><tr role="row" class="even">
<td id="55065687" class="sorting_1">Carapinheirense</td>
<td>55065687</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/POR.gif" alt="Portugal">  POR</td>
<td>PT Championship</td>
<td>861</td>
<td>Semi-Professional</td>
<td>2,000</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
<td>1959</td>
<td>23.1</td>
</tr><tr role="row" class="odd">
<td id="625" class="sorting_1">Cardiff</td>
<td>625</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ENG.gif" alt="England">  ENG</td>
<td>Sky Bet Championship</td>
<td>1M</td>
<td>Professional</td>
<td>33,316</td>
<td><span class="label" style="background:#002080"></span> <span class="label" style="background:#0030A0"></span></td>
<td>1899</td>
<td>26.8</td>
</tr><tr role="row" class="even">
<td id="1938" class="sorting_1">Cardiff Met Uni</td>
<td>1938</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/WAL.gif" alt="Wales">  WAL</td>
<td>Welsh Premier League</td>
<td>0</td>
<td>Amateur</td>
<td>2,000</td>
<td><span class="label" style="background:#001040"></span> <span class="label" style="background:#901818"></span></td>
<td>2000</td>
<td>23.3</td>
</tr><tr role="row" class="odd">
<td id="626" class="sorting_1">Carlisle</td>
<td>626</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ENG.gif" alt="England">  ENG</td>
<td>Sky Bet League Two</td>
<td>64K</td>
<td>Professional</td>
<td>16,683</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
<td>1904</td>
<td>25.2</td>
</tr><tr role="row" class="even">
<td id="613670" class="sorting_1">Carlstad United</td>
<td>613670</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/SWE.gif" alt="Sweden">  SWE</td>
<td>First Division North</td>
<td>0</td>
<td>Semi-Professional</td>
<td>10,000</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#000000"></span></td>
<td>1999</td>
<td>23.4</td>
</tr><tr role="row" class="odd">
<td id="1301340" class="sorting_1">Carmarthen</td>
<td>1301340</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/WAL.gif" alt="Wales">  WAL</td>
<td>Welsh Premier League</td>
<td>3K</td>
<td>Semi-Professional</td>
<td>3,000</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#D8B028"></span></td>
<td>1948</td>
<td>25.8</td>
</tr><tr role="row" class="even">
<td id="1115" class="sorting_1">Carpi</td>
<td>1115</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ITA.gif" alt="Italy">  ITA</td>
<td>Serie B</td>
<td>1M</td>
<td>Professional</td>
<td>5,500</td>
<td><span class="label" style="background:#C80000"></span> <span class="label" style="background:#F8F8F8"></span></td>
<td>1909</td>
<td>23.8</td>
</tr><tr role="row" class="odd">
<td id="1116" class="sorting_1">Carrarese</td>
<td>1116</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ITA.gif" alt="Italy">  ITA</td>
<td>Serie C/A</td>
<td>86K</td>
<td>Professional</td>
<td>9,500</td>
<td><span class="label" style="background:#F8F000"></span> <span class="label" style="background:#005098"></span></td>
<td>1908</td>
<td>23.3</td>
</tr><tr role="row" class="even">
<td id="1276" class="sorting_1">Carrick</td>
<td>1276</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/NIR.gif" alt="N.Ireland">  NIR</td>
<td>Danske Bank Premier</td>
<td>0</td>
<td>Semi-Professional</td>
<td>4,500</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F86000"></span></td>
<td>1939</td>
<td>25.3</td>
</tr><tr role="row" class="odd">
<td id="4203003" class="sorting_1">Cartagena</td>
<td>4203003</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ESP.gif" alt="Spain">  ESP</td>
<td>Second Division B4</td>
<td>0</td>
<td>Professional</td>
<td>16,000</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#000000"></span></td>
<td>1995</td>
<td>26.0</td>
</tr><tr role="row" class="even">
<td id="2443" class="sorting_1">Casa Pia</td>
<td>2443</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/POR.gif" alt="Portugal">  POR</td>
<td>PT Championship</td>
<td>13K</td>
<td>Semi-Professional</td>
<td>2,574</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#000000"></span></td>
<td>1920</td>
<td>24.5</td>
</tr><tr role="row" class="odd">
<td id="2191" class="sorting_1">Casertana</td>
<td>2191</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ITA.gif" alt="Italy">  ITA</td>
<td>Serie C/C</td>
<td>129K</td>
<td>Professional</td>
<td>12,000</td>
<td><span class="label" style="background:#E00000"></span> <span class="label" style="background:#002060"></span></td>
<td>1908</td>
<td>25.6</td>
</tr><tr role="row" class="even">
<td id="2193" class="sorting_1">Catania</td>
<td>2193</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ITA.gif" alt="Italy">  ITA</td>
<td>Serie C/C</td>
<td>172K</td>
<td>Professional</td>
<td>20,016</td>
<td><span class="label" style="background:#E00000"></span> <span class="label" style="background:#60C0F8"></span></td>
<td>1946</td>
<td>24.9</td>
</tr><tr role="row" class="odd">
<td id="1119" class="sorting_1">Catanzaro</td>
<td>1119</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ITA.gif" alt="Italy">  ITA</td>
<td>Serie C/C</td>
<td>129K</td>
<td>Professional</td>
<td>14,650</td>
<td><span class="label" style="background:#D02028"></span> <span class="label" style="background:#D02028"></span></td>
<td>1929</td>
<td>25.0</td>
</tr><tr role="row" class="even">
<td id="301102" class="sorting_1">CBR</td>
<td>301102</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/BRA.gif" alt="Brazil">  BRA</td>
<td>Second Division</td>
<td>119K</td>
<td>Professional</td>
<td>17,126</td>
<td><span class="label" style="background:#101010"></span> <span class="label" style="background:#F8F8F8"></span></td>
<td>1912</td>
<td>28.5</td>
</tr><tr role="row" class="odd">
<td id="104749" class="sorting_1">CEA</td>
<td>104749</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/BRA.gif" alt="Brazil">  BRA</td>
<td>Second Division</td>
<td>238K</td>
<td>Professional</td>
<td>64,846</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
<td>1914</td>
<td>27.3</td>
</tr><tr role="row" class="even">
<td id="321" class="sorting_1">CEC</td>
<td>321</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/BRA.gif" alt="Brazil">  BRA</td>
<td>First Division</td>
<td>2M</td>
<td>Professional</td>
<td>75,783</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#E00000"></span></td>
<td>1921</td>
<td>26.1</td>
</tr><tr role="row" class="odd">
<td id="350022" class="sorting_1">Cefn Druids</td>
<td>350022</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/WAL.gif" alt="Wales">  WAL</td>
<td>Welsh Premier League</td>
<td>2K</td>
<td>Semi-Professional</td>
<td>3,000</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#000000"></span></td>
<td>1872</td>
<td>25.1</td>
</tr><tr role="row" class="even">
<td id="38004838" class="sorting_1">Cegled</td>
<td>38004838</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/HUN.gif" alt="Hungary">  HUN</td>
<td>Division II</td>
<td>0</td>
<td>Professional</td>
<td>2,000</td>
<td><span class="label" style="background:#F8F838"></span> <span class="label" style="background:#2090D0"></span></td>
<td>1924</td>
<td>24.2</td>
</tr><tr role="row" class="odd">
<td id="51008732" class="sorting_1">Celaya</td>
<td>51008732</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/MEX.gif" alt="Mexico">  MEX</td>
<td>Promotion League</td>
<td>154K</td>
<td>Professional</td>
<td>23,300</td>
<td><span class="label" style="background:#0030A0"></span> <span class="label" style="background:#F8F8F8"></span></td>
<td>1954</td>
<td>27.8</td>
</tr><tr role="row" class="even">
<td id="41045083" class="sorting_1">Celebest FC</td>
<td>41045083</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/IDN.gif" alt="Indonesia">  IDN</td>
<td>Premier Division</td>
<td>16K</td>
<td>Professional</td>
<td>30,000</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F87000"></span></td>
<td>2000</td>
<td>27.4</td>
</tr><tr role="row" class="odd">
<td id="1637" class="sorting_1">Celje</td>
<td>1637</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/SVN.gif" alt="Slovenia">  SVN</td>
<td>First League</td>
<td>129K</td>
<td>Professional</td>
<td>13,006</td>
<td><span class="label" style="background:#0078F8"></span> <span class="label" style="background:#F8F000"></span></td>
<td>1919</td>
<td>22.7</td>
</tr><tr role="row" class="even">
<td id="1569" class="sorting_1">Celtic</td>
<td>1569</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/SCO.gif" alt="Scotland">  SCO</td>
<td>Ladbrokes Premiership</td>
<td>2M</td>
<td>Professional</td>
<td>60,411</td>
<td><span class="label" style="background:#188848"></span> <span class="label" style="background:#F8F8F8"></span></td>
<td>1888</td>
<td>24.2</td>
</tr><tr role="row" class="odd">
<td id="1300491" class="sorting_1">Central Coast Mariners</td>
<td>1300491</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/AUS.gif" alt="Australia">  AUS</td>
<td>Hyundai A-League</td>
<td>113K</td>
<td>Professional</td>
<td>20,059</td>
<td><span class="label" style="background:#384058"></span> <span class="label" style="background:#F8D000"></span></td>
<td>2004</td>
<td>23.8</td>
</tr><tr role="row" class="even">
<td id="1916" class="sorting_1">Central Espanol</td>
<td>1916</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/URU.gif" alt="Uruguay">  URU</td>
<td>Second Division</td>
<td>691</td>
<td>Professional</td>
<td>5,000</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#E00000"></span></td>
<td>1905</td>
<td>24.2</td>
</tr><tr role="row" class="odd">
<td id="184" class="sorting_1">Cercle Brugge</td>
<td>184</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/BEL.gif" alt="Belgium">  BEL</td>
<td>Pro League B</td>
<td>0</td>
<td>Professional</td>
<td>29,042</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#006030"></span></td>
<td>1899</td>
<td>23.7</td>
</tr><tr role="row" class="even">
<td id="5512780" class="sorting_1">Cerrito</td>
<td>5512780</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/URU.gif" alt="Uruguay">  URU</td>
<td>Second Division</td>
<td>691</td>
<td>Professional</td>
<td>4,200</td>
<td><span class="label" style="background:#008030"></span> <span class="label" style="background:#F8F000"></span></td>
<td>1929</td>
<td>26.1</td>
</tr><tr role="row" class="odd">
<td id="1917" class="sorting_1">Cerro</td>
<td>1917</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/URU.gif" alt="Uruguay">  URU</td>
<td>First Division</td>
<td>3K</td>
<td>Professional</td>
<td>18,000</td>
<td><span class="label" style="background:#60C0F8"></span> <span class="label" style="background:#F8F8F8"></span></td>
<td>1922</td>
<td>25.3</td>
</tr><tr role="row" class="even">
<td id="8825223" class="sorting_1">Cerro Largo F.C.</td>
<td>8825223</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/URU.gif" alt="Uruguay">  URU</td>
<td>Second Division</td>
<td>768</td>
<td>Professional</td>
<td>9,500</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#0078F8"></span></td>
<td>2002</td>
<td>25.8</td>
</tr><tr role="row" class="odd">
<td id="5290566" class="sorting_1">Cesar Vallejo</td>
<td>5290566</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/PER.gif" alt="Peru">  PER</td>
<td>First Division</td>
<td>615K</td>
<td>Professional</td>
<td>25,000</td>
<td><span class="label" style="background:#002060"></span> <span class="label" style="background:#F84008"></span></td>
<td>1996</td>
<td>27.1</td>
</tr><tr role="row" class="even">
<td id="733653" class="sorting_1">Cesarense</td>
<td>733653</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/POR.gif" alt="Portugal">  POR</td>
<td>PT Championship</td>
<td>4K</td>
<td>Semi-Professional</td>
<td>5,000</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#000000"></span></td>
<td>1932</td>
<td>22.0</td>
</tr><tr role="row" class="odd">
<td id="1120" class="sorting_1">Cesena</td>
<td>1120</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ITA.gif" alt="Italy">  ITA</td>
<td>Serie B</td>
<td>431K</td>
<td>Professional</td>
<td>23,860</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F8F8F8"></span></td>
<td>1940</td>
<td>25.7</td>
</tr><tr role="row" class="even">
<td id="470" class="sorting_1">Ceske Budejovice</td>
<td>470</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/CZE.gif" alt="Czech Republic">  CZE</td>
<td>Second Division</td>
<td>239K</td>
<td>Professional</td>
<td>6,681</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#000000"></span></td>
<td>1905</td>
<td>24.6</td>
</tr><tr role="row" class="odd">
<td id="7540205" class="sorting_1">CFR Cluj</td>
<td>7540205</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ROU.gif" alt="Romania">  ROU</td>
<td>Liga I</td>
<td>0</td>
<td>Professional</td>
<td>23,500</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#800000"></span></td>
<td>1907</td>
<td>24.7</td>
</tr><tr role="row" class="even">
<td id="301304" class="sorting_1">CHA</td>
<td>301304</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/BRA.gif" alt="Brazil">  BRA</td>
<td>First Division</td>
<td>71K</td>
<td>Professional</td>
<td>15,000</td>
<td><span class="label" style="background:#F8F000"></span> <span class="label" style="background:#F8F8F8"></span></td>
<td>1973</td>
<td>27.0</td>
</tr><tr role="row" class="odd">
<td id="102493" class="sorting_1">Chacarita Jrs</td>
<td>102493</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ARG.gif" alt="Argentina">  ARG</td>
<td>Second Division</td>
<td>154K</td>
<td>Professional</td>
<td>14,600</td>
<td><span class="label" style="background:#E00000"></span> <span class="label" style="background:#000000"></span></td>
<td>1906</td>
<td>25.6</td>
</tr><tr role="row" class="even">
<td id="838" class="sorting_1">Chamois Niortais FC</td>
<td>838</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/FRA.gif" alt="France">  FRA</td>
<td>Domino's Ligue 2</td>
<td>0</td>
<td>Professional</td>
<td>10,406</td>
<td><span class="label" style="background:#003068"></span> <span class="label" style="background:#0078F8"></span></td>
<td>1925</td>
<td>24.6</td>
</tr><tr role="row" class="odd">
<td id="131135" class="sorting_1">Changchun</td>
<td>131135</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/CHN.gif" alt="China">  CHN</td>
<td>Super League</td>
<td>1M</td>
<td>Professional</td>
<td>32,000</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#C80000"></span></td>
<td>1996</td>
<td>28.0</td>
</tr><tr role="row" class="even">
<td id="36002987" class="sorting_1">Chania</td>
<td>36002987</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/GRE.gif" alt="Greece">  GRE</td>
<td>B Division</td>
<td>0</td>
<td>Professional</td>
<td>3,700</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#002060"></span></td>
<td>1945</td>
<td>23.6</td>
</tr><tr role="row" class="odd">
<td id="23245672" class="sorting_1">Chaoyue</td>
<td>23245672</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/CHN.gif" alt="China">  CHN</td>
<td>First Division</td>
<td>174K</td>
<td>Professional</td>
<td>30,872</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#0078F8"></span></td>
<td>2013</td>
<td>26.8</td>
</tr><tr role="row" class="even">
<td id="263" class="sorting_1">Charleroi</td>
<td>263</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/BEL.gif" alt="Belgium">  BEL</td>
<td>Pro League</td>
<td>0</td>
<td>Professional</td>
<td>17,824</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#000000"></span></td>
<td>1904</td>
<td>26.0</td>
</tr><tr role="row" class="odd">
<td id="628" class="sorting_1">Charlton</td>
<td>628</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ENG.gif" alt="England">  ENG</td>
<td>Sky Bet League One</td>
<td>0</td>
<td>Professional</td>
<td>27,111</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#E00000"></span></td>
<td>1905</td>
<td>25.1</td>
</tr><tr role="row" class="even">
<td id="1480" class="sorting_1">Chaves</td>
<td>1480</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/POR.gif" alt="Portugal">  POR</td>
<td>Premier League</td>
<td>129K</td>
<td>Professional</td>
<td>22,600</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
<td>1949</td>
<td>24.8</td>
</tr><tr role="row" class="odd">
<td id="629" class="sorting_1">Chelmsford</td>
<td>629</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ENG.gif" alt="England">  ENG</td>
<td>Vanarama South</td>
<td>0</td>
<td>Semi-Professional</td>
<td>3,016</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#800020"></span></td>
<td>1938</td>
<td>24.9</td>
</tr><tr role="row" class="even">
<td id="630" class="sorting_1">Chelsea</td>
<td>630</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ENG.gif" alt="England">  ENG</td>
<td>Premier Division</td>
<td>40M</td>
<td>Professional</td>
<td>41,629</td>
<td><span class="label" style="background:#304898"></span> <span class="label" style="background:#304898"></span></td>
<td>1905</td>
<td>26.2</td>
</tr><tr role="row" class="odd">
<td id="631" class="sorting_1">Cheltenham</td>
<td>631</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ENG.gif" alt="England">  ENG</td>
<td>Sky Bet League Two</td>
<td>0</td>
<td>Professional</td>
<td>7,027</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#E01820"></span></td>
<td>1887</td>
<td>24.0</td>
</tr><tr role="row" class="even">
<td id="941" class="sorting_1">Chemnitz</td>
<td>941</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/GER.gif" alt="Germany">  GER</td>
<td>Third Division</td>
<td>0</td>
<td>Professional</td>
<td>15,000</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#4898D0"></span></td>
<td>1966</td>
<td>23.8</td>
</tr><tr role="row" class="odd">
<td id="71047450" class="sorting_1">Cherkaskyi Dnipro</td>
<td>71047450</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/UKR.gif" alt="Ukraine">  UKR</td>
<td>First League</td>
<td>0</td>
<td>Professional</td>
<td>10,321</td>
<td><span class="label" style="background:#1838F8"></span> <span class="label" style="background:#F8F8F8"></span></td>
<td>2010</td>
<td>26.2</td>
</tr><tr role="row" class="even">
<td id="138156" class="sorting_1">Cherno more</td>
<td>138156</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/BUL.gif" alt="Bulgaria">  BUL</td>
<td>First League</td>
<td>40K</td>
<td>Professional</td>
<td>5,000</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#008030"></span></td>
<td>1913</td>
<td>26.2</td>
</tr><tr role="row" class="odd">
<td id="29066004" class="sorting_1">Chester</td>
<td>29066004</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ENG.gif" alt="England">  ENG</td>
<td>Vanarama National</td>
<td>0</td>
<td>Professional</td>
<td>5,453</td>
<td><span class="label" style="background:#104098"></span> <span class="label" style="background:#F8F8F8"></span></td>
<td>2010</td>
<td>22.0</td>
</tr><tr role="row" class="even">
<td id="634" class="sorting_1">Chesterfield</td>
<td>634</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ENG.gif" alt="England">  ENG</td>
<td>Sky Bet League One</td>
<td>100K</td>
<td>Professional</td>
<td>10,504</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
<td>1866</td>
<td>24.9</td>
</tr><tr role="row" class="odd">
<td id="57000252" class="sorting_1">Chiajna</td>
<td>57000252</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ROU.gif" alt="Romania">  ROU</td>
<td>Liga I</td>
<td>0</td>
<td>Professional</td>
<td>5,000</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#006030"></span></td>
<td>1957</td>
<td>26.3</td>
</tr><tr role="row" class="even">
<td id="137936" class="sorting_1">Chiasso</td>
<td>137936</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/SUI.gif" alt="Switzerland">  SUI</td>
<td>Challenge League</td>
<td>40K</td>
<td>Professional</td>
<td>12,160</td>
<td><span class="label" style="background:#E00000"></span> <span class="label" style="background:#0030A0"></span></td>
<td>1905</td>
<td>22.6</td>
</tr><tr role="row" class="odd">
<td id="108893" class="sorting_1">Chicago</td>
<td>108893</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/USA.gif" alt="U.S.A.">  USA</td>
<td>MLS</td>
<td>499K</td>
<td>Professional</td>
<td>20,000</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#B82848"></span></td>
<td>1997</td>
<td>25.4</td>
</tr><tr role="row" class="even">
<td id="1122" class="sorting_1">Chievo</td>
<td>1122</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ITA.gif" alt="Italy">  ITA</td>
<td>Serie A</td>
<td>3M</td>
<td>Professional</td>
<td>39,211</td>
<td><span class="label" style="background:#0078F8"></span> <span class="label" style="background:#F8F838"></span></td>
<td>1929</td>
<td>29.7</td>
</tr><tr role="row" class="odd">
<td id="57066631" class="sorting_1">Chindia</td>
<td>57066631</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ROU.gif" alt="Romania">  ROU</td>
<td>Liga II</td>
<td>0</td>
<td>Professional</td>
<td>12,000</td>
<td><span class="label" style="background:#283850"></span> <span class="label" style="background:#58C0D8"></span></td>
<td>1950</td>
<td>24.2</td>
</tr><tr role="row" class="even">
<td id="65010424" class="sorting_1">Chippa Utd</td>
<td>65010424</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/RSA.gif" alt="South Africa">  RSA</td>
<td>South African Premiership</td>
<td>424K</td>
<td>Professional</td>
<td>47,592</td>
<td><span class="label" style="background:#0080F8"></span> <span class="label" style="background:#F8F8F8"></span></td>
<td>2010</td>
<td>25.7</td>
</tr><tr role="row" class="odd">
<td id="1255" class="sorting_1">Chivas</td>
<td>1255</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/MEX.gif" alt="Mexico">  MEX</td>
<td>First Division</td>
<td>5M</td>
<td>Professional</td>
<td>49,850</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#E00000"></span></td>
<td>1906</td>
<td>24.4</td>
</tr><tr role="row" class="even">
<td id="96012108" class="sorting_1">Chojniczanka</td>
<td>96012108</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/POL.gif" alt="Poland">  POL</td>
<td>First Division</td>
<td>0</td>
<td>Professional</td>
<td>3,500</td>
<td><span class="label" style="background:#F8F000"></span> <span class="label" style="background:#B00000"></span></td>
<td>1930</td>
<td>25.6</td>
</tr><tr role="row" class="odd">
<td id="115940" class="sorting_1">Chongqing</td>
<td>115940</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/CHN.gif" alt="China">  CHN</td>
<td>Super League</td>
<td>2M</td>
<td>Professional</td>
<td>58,680</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#D00000"></span></td>
<td>2000</td>
<td>28.6</td>
</tr><tr role="row" class="even">
<td id="635" class="sorting_1">Chorley</td>
<td>635</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ENG.gif" alt="England">  ENG</td>
<td>Vanarama North</td>
<td>0</td>
<td>Semi-Professional</td>
<td>4,100</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F8F8F8"></span></td>
<td>1883</td>
<td>26.2</td>
</tr><tr role="row" class="odd">
<td id="1884" class="sorting_1">Chornomorets</td>
<td>1884</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/UKR.gif" alt="Ukraine">  UKR</td>
<td>Premier League</td>
<td>23K</td>
<td>Professional</td>
<td>34,164</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#0030A0"></span></td>
<td>1936</td>
<td>22.7</td>
</tr><tr role="row" class="even">
<td id="717313" class="sorting_1">Chrobry</td>
<td>717313</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/POL.gif" alt="Poland">  POL</td>
<td>First Division</td>
<td>30K</td>
<td>Professional</td>
<td>2,817</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F88000"></span></td>
<td>1946</td>
<td>23.6</td>
</tr><tr role="row" class="odd">
<td id="136420" class="sorting_1">Chungju Hummel</td>
<td>136420</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/KOR.gif" alt="South Korea">  KOR</td>
<td>K LEAGUE Challenge</td>
<td>50K</td>
<td>Professional</td>
<td>15,000</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F8C808"></span></td>
<td>1999</td>
<td>25.0</td>
</tr><tr role="row" class="even">
<td id="430" class="sorting_1">Cibalia</td>
<td>430</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/CRO.gif" alt="Croatia">  CRO</td>
<td>First League</td>
<td>0</td>
<td>Professional</td>
<td>10,000</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#60C0F8"></span></td>
<td>1919</td>
<td>23.0</td>
</tr><tr role="row" class="odd">
<td id="38015176" class="sorting_1">Cigand</td>
<td>38015176</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/HUN.gif" alt="Hungary">  HUN</td>
<td>Division II</td>
<td>0</td>
<td>Professional</td>
<td>500</td>
<td><span class="label" style="background:#F8D828"></span> <span class="label" style="background:#000000"></span></td>
<td>1998</td>
<td>24.8</td>
</tr><tr role="row" class="even">
<td id="41047051" class="sorting_1">Cilegon United</td>
<td>41047051</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/IDN.gif" alt="Indonesia">  IDN</td>
<td>Premier Division</td>
<td>7K</td>
<td>Professional</td>
<td>10,000</td>
<td><span class="label" style="background:#F8F000"></span> <span class="label" style="background:#F8D000"></span></td>
<td>2012</td>
<td>26.8</td>
</tr><tr role="row" class="odd">
<td id="51039162" class="sorting_1">Cimarrones</td>
<td>51039162</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/MEX.gif" alt="Mexico">  MEX</td>
<td>Promotion League</td>
<td>192K</td>
<td>Professional</td>
<td>21,175</td>
<td><span class="label" style="background:#002060"></span> <span class="label" style="background:#E00000"></span></td>
<td>2013</td>
<td>24.6</td>
</tr><tr role="row" class="even">
<td id="729472" class="sorting_1">Cinfaes</td>
<td>729472</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/POR.gif" alt="Portugal">  POR</td>
<td>PT Championship</td>
<td>4K</td>
<td>Semi-Professional</td>
<td>5,000</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#0050D0"></span></td>
<td>1931</td>
<td>24.5</td>
</tr><tr role="row" class="odd">
<td id="2195" class="sorting_1">Cittadella</td>
<td>2195</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ITA.gif" alt="Italy">  ITA</td>
<td>Serie B</td>
<td>431K</td>
<td>Professional</td>
<td>7,623</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#800020"></span></td>
<td>1973</td>
<td>25.4</td>
</tr><tr role="row" class="even">
<td id="1992" class="sorting_1">Clermont Foot</td>
<td>1992</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/FRA.gif" alt="France">  FRA</td>
<td>Domino's Ligue 2</td>
<td>0</td>
<td>Professional</td>
<td>11,980</td>
<td><span class="label" style="background:#003068"></span> <span class="label" style="background:#A01048"></span></td>
<td>1990</td>
<td>25.0</td>
</tr><tr role="row" class="odd">
<td id="1277" class="sorting_1">Cliftonville</td>
<td>1277</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/NIR.gif" alt="N.Ireland">  NIR</td>
<td>Danske Bank Premier</td>
<td>10K</td>
<td>Semi-Professional</td>
<td>6,224</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#E00000"></span></td>
<td>1879</td>
<td>24.8</td>
</tr><tr role="row" class="even">
<td id="186" class="sorting_1">Club Brugge</td>
<td>186</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/BEL.gif" alt="Belgium">  BEL</td>
<td>Pro League</td>
<td>3M</td>
<td>Professional</td>
<td>29,042</td>
<td><span class="label" style="background:#0050D0"></span> <span class="label" style="background:#0050D0"></span></td>
<td>1891</td>
<td>25.2</td>
</tr><tr role="row" class="odd">
<td id="1548" class="sorting_1">Clyde</td>
<td>1548</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/SCO.gif" alt="Scotland">  SCO</td>
<td>Ladbrokes League 2</td>
<td>0</td>
<td>Professional</td>
<td>8,086</td>
<td><span class="label" style="background:#F0F0F0"></span> <span class="label" style="background:#F8F8F8"></span></td>
<td>1877</td>
<td>24.2</td>
</tr><tr role="row" class="even">
<td id="589" class="sorting_1">Cobh Ramblers</td>
<td>589</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/IRL.gif" alt="Ireland">  IRL</td>
<td>First Division</td>
<td>0</td>
<td>Semi-Professional</td>
<td>9,000</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
<td>1922</td>
<td>21.6</td>
</tr><tr role="row" class="odd">
<td id="104359" class="sorting_1">Cobreloa</td>
<td>104359</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/CHI.gif" alt="Chile">  CHI</td>
<td>First Division B</td>
<td>231K</td>
<td>Professional</td>
<td>12,312</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#F87000"></span></td>
<td>1977</td>
<td>24.1</td>
</tr><tr role="row" class="even">
<td id="130795" class="sorting_1">Cobresal</td>
<td>130795</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/CHI.gif" alt="Chile">  CHI</td>
<td>First Division</td>
<td>14K</td>
<td>Professional</td>
<td>20,752</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#F8F8F8"></span></td>
<td>1979</td>
<td>25.7</td>
</tr><tr role="row" class="odd">
<td id="55012042" class="sorting_1">Coimbroes</td>
<td>55012042</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/POR.gif" alt="Portugal">  POR</td>
<td>PT Championship</td>
<td>4K</td>
<td>Semi-Professional</td>
<td>3,000</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#006030"></span></td>
<td>1920</td>
<td>24.4</td>
</tr><tr role="row" class="even">
<td id="636" class="sorting_1">Colchester</td>
<td>636</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ENG.gif" alt="England">  ENG</td>
<td>Sky Bet League Two</td>
<td>20K</td>
<td>Professional</td>
<td>10,105</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
<td>1937</td>
<td>23.7</td>
</tr><tr role="row" class="odd">
<td id="1278" class="sorting_1">Coleraine</td>
<td>1278</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/NIR.gif" alt="N.Ireland">  NIR</td>
<td>Danske Bank Premier</td>
<td>0</td>
<td>Semi-Professional</td>
<td>6,500</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
<td>1927</td>
<td>26.2</td>
</tr><tr role="row" class="even">
<td id="399" class="sorting_1">Colo Colo</td>
<td>399</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/CHI.gif" alt="Chile">  CHI</td>
<td>First Division</td>
<td>692K</td>
<td>Professional</td>
<td>47,017</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F8F8F8"></span></td>
<td>1925</td>
<td>23.5</td>
</tr><tr role="row" class="odd">
<td id="102462" class="sorting_1">Colon</td>
<td>102462</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ARG.gif" alt="Argentina">  ARG</td>
<td>Premier Division</td>
<td>1M</td>
<td>Professional</td>
<td>47,000</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F00000"></span></td>
<td>1905</td>
<td>27.8</td>
</tr><tr role="row" class="even">
<td id="1903" class="sorting_1">Colorado</td>
<td>1903</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/USA.gif" alt="U.S.A.">  USA</td>
<td>MLS</td>
<td>307K</td>
<td>Professional</td>
<td>18,061</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#503040"></span></td>
<td>1996</td>
<td>26.4</td>
</tr><tr role="row" class="odd">
<td id="1904" class="sorting_1">Columbus</td>
<td>1904</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/USA.gif" alt="U.S.A.">  USA</td>
<td>MLS</td>
<td>576K</td>
<td>Professional</td>
<td>19,968</td>
<td><span class="label" style="background:#F84010"></span> <span class="label" style="background:#000000"></span></td>
<td>1996</td>
<td>25.8</td>
</tr><tr role="row" class="even">
<td id="77016700" class="sorting_1">Comerciantes</td>
<td>77016700</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/PER.gif" alt="Peru">  PER</td>
<td>First Division</td>
<td>46K</td>
<td>Professional</td>
<td>8,000</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#503098"></span></td>
<td>2002</td>
<td>28.5</td>
</tr><tr role="row" class="odd">
<td id="1123" class="sorting_1">Como</td>
<td>1123</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ITA.gif" alt="Italy">  ITA</td>
<td>Serie C/A</td>
<td>258K</td>
<td>Professional</td>
<td>13,602</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#0050D0"></span></td>
<td>1907</td>
<td>23.7</td>
</tr><tr role="row" class="even">
<td id="301323" class="sorting_1">CON</td>
<td>301323</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/BRA.gif" alt="Brazil">  BRA</td>
<td>Third Division</td>
<td>0</td>
<td>Professional</td>
<td>15,575</td>
<td><span class="label" style="background:#287850"></span> <span class="label" style="background:#287850"></span></td>
<td>1936</td>
<td>27.9</td>
</tr><tr role="row" class="odd">
<td id="8325133" class="sorting_1">Concord</td>
<td>8325133</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ENG.gif" alt="England">  ENG</td>
<td>Vanarama South</td>
<td>0</td>
<td>Semi-Professional</td>
<td>3,300</td>
<td><span class="label" style="background:#0050D0"></span> <span class="label" style="background:#F8F000"></span></td>
<td>1967</td>
<td>24.3</td>
</tr><tr role="row" class="even">
<td id="1932" class="sorting_1">Connah's Quay</td>
<td>1932</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/WAL.gif" alt="Wales">  WAL</td>
<td>Welsh Premier League</td>
<td>50K</td>
<td>Semi-Professional</td>
<td>3,500</td>
<td><span class="label" style="background:#B00000"></span> <span class="label" style="background:#E00000"></span></td>
<td>1946</td>
<td>27.2</td>
</tr><tr role="row" class="odd">
<td id="120924" class="sorting_1">Coquimbo Unido</td>
<td>120924</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/CHI.gif" alt="Chile">  CHI</td>
<td>First Division B</td>
<td>8K</td>
<td>Professional</td>
<td>18,750</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F8F000"></span></td>
<td>1958</td>
<td>25.2</td>
</tr><tr role="row" class="even">
<td id="319" class="sorting_1">COR</td>
<td>319</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/BRA.gif" alt="Brazil">  BRA</td>
<td>First Division</td>
<td>1M</td>
<td>Professional</td>
<td>48,000</td>
<td><span class="label" style="background:#101010"></span> <span class="label" style="background:#F8D000"></span></td>
<td>1910</td>
<td>24.7</td>
</tr><tr role="row" class="odd">
<td id="1704" class="sorting_1">Cordoba</td>
<td>1704</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ESP.gif" alt="Spain">  ESP</td>
<td>Second Division</td>
<td>23K</td>
<td>Professional</td>
<td>21,822</td>
<td><span class="label" style="background:#008030"></span> <span class="label" style="background:#F8F8F8"></span></td>
<td>1954</td>
<td>26.8</td>
</tr><tr role="row" class="even">
<td id="814485" class="sorting_1">Cordoba B</td>
<td>814485</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ESP.gif" alt="Spain">  ESP</td>
<td>Second Division B4</td>
<td>0</td>
<td>Professional</td>
<td>3,000</td>
<td><span class="label" style="background:#008030"></span> <span class="label" style="background:#F8F8F8"></span></td>
<td>1954</td>
<td>20.1</td>
</tr><tr role="row" class="odd">
<td id="590" class="sorting_1">Cork City</td>
<td>590</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/IRL.gif" alt="Ireland">  IRL</td>
<td>Premier Division</td>
<td>0</td>
<td>Professional</td>
<td>7,365</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#006030"></span></td>
<td>1984</td>
<td>25.3</td>
</tr><tr role="row" class="even">
<td id="814086" class="sorting_1">Cornella</td>
<td>814086</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ESP.gif" alt="Spain">  ESP</td>
<td>Second Division B3</td>
<td>0</td>
<td>Professional</td>
<td>1,500</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#008030"></span></td>
<td>1951</td>
<td>25.0</td>
</tr><tr role="row" class="odd">
<td id="136013" class="sorting_1">Correcaminos</td>
<td>136013</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/MEX.gif" alt="Mexico">  MEX</td>
<td>Promotion League</td>
<td>77K</td>
<td>Professional</td>
<td>18,000</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#F87000"></span></td>
<td>1980</td>
<td>28.2</td>
</tr><tr role="row" class="even">
<td id="312" class="sorting_1">Cortulua</td>
<td>312</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/COL.gif" alt="Colombia">  COL</td>
<td>First Division</td>
<td>423K</td>
<td>Professional</td>
<td>16,000</td>
<td><span class="label" style="background:#008030"></span> <span class="label" style="background:#E00000"></span></td>
<td>1967</td>
<td>23.5</td>
</tr><tr role="row" class="odd">
<td id="1705" class="sorting_1">Coruna</td>
<td>1705</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ESP.gif" alt="Spain">  ESP</td>
<td>First Division</td>
<td>0</td>
<td>Professional</td>
<td>34,611</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#0030A0"></span></td>
<td>1906</td>
<td>26.5</td>
</tr><tr role="row" class="even">
<td id="7452056" class="sorting_1">Coruxo</td>
<td>7452056</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ESP.gif" alt="Spain">  ESP</td>
<td>Second Division B1</td>
<td>0</td>
<td>Professional</td>
<td>1,500</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#00A030"></span></td>
<td>1930</td>
<td>25.9</td>
</tr><tr role="row" class="odd">
<td id="1124" class="sorting_1">Cosenza</td>
<td>1124</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ITA.gif" alt="Italy">  ITA</td>
<td>Serie C/C</td>
<td>129K</td>
<td>Professional</td>
<td>24,209</td>
<td><span class="label" style="background:#E00000"></span> <span class="label" style="background:#002060"></span></td>
<td>1914</td>
<td>24.7</td>
</tr><tr role="row" class="even">
<td id="725036" class="sorting_1">Cova da Piedade</td>
<td>725036</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/POR.gif" alt="Portugal">  POR</td>
<td>Second League</td>
<td>43K</td>
<td>Professional</td>
<td>3,500</td>
<td><span class="label" style="background:#901000"></span> <span class="label" style="background:#901000"></span></td>
<td>1947</td>
<td>27.0</td>
</tr><tr role="row" class="odd">
<td id="639" class="sorting_1">Coventry</td>
<td>639</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ENG.gif" alt="England">  ENG</td>
<td>Sky Bet League One</td>
<td>0</td>
<td>Professional</td>
<td>32,609</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
<td>1883</td>
<td>23.2</td>
</tr><tr role="row" class="even">
<td id="1552" class="sorting_1">Cowdenbeath</td>
<td>1552</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/SCO.gif" alt="Scotland">  SCO</td>
<td>Ladbrokes League 2</td>
<td>0</td>
<td>Semi-Professional</td>
<td>4,309</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#0050D0"></span></td>
<td>1881</td>
<td>23.8</td>
</tr><tr role="row" class="odd">
<td id="539841" class="sorting_1">Coxyde</td>
<td>539841</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/BEL.gif" alt="Belgium">  BEL</td>
<td>First Division</td>
<td>0</td>
<td>Semi-Professional</td>
<td>2,500</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#0078F8"></span></td>
<td>0</td>
<td>21.9</td>
</tr><tr role="row" class="even">
<td id="129583" class="sorting_1">Cracovia</td>
<td>129583</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/POL.gif" alt="Poland">  POL</td>
<td>LOTTO Ekstraklasa</td>
<td>401K</td>
<td>Professional</td>
<td>15,016</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#E00000"></span></td>
<td>1906</td>
<td>25.7</td>
</tr><tr role="row" class="odd">
<td id="640" class="sorting_1">Crawley</td>
<td>640</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ENG.gif" alt="England">  ENG</td>
<td>Sky Bet League Two</td>
<td>10K</td>
<td>Professional</td>
<td>6,134</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F00000"></span></td>
<td>1896</td>
<td>23.7</td>
</tr><tr role="row" class="even">
<td id="1125" class="sorting_1">Cremonese</td>
<td>1125</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ITA.gif" alt="Italy">  ITA</td>
<td>Serie C/A</td>
<td>258K</td>
<td>Professional</td>
<td>20,034</td>
<td><span class="label" style="background:#E00000"></span> <span class="label" style="background:#C0C0C0"></span></td>
<td>1903</td>
<td>27.0</td>
</tr><tr role="row" class="odd">
<td id="641" class="sorting_1">Crewe</td>
<td>641</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ENG.gif" alt="England">  ENG</td>
<td>Sky Bet League Two</td>
<td>30K</td>
<td>Professional</td>
<td>10,153</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
<td>1877</td>
<td>22.6</td>
</tr><tr role="row" class="even">
<td id="320" class="sorting_1">CRI</td>
<td>320</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/BRA.gif" alt="Brazil">  BRA</td>
<td>Second Division</td>
<td>71K</td>
<td>Professional</td>
<td>22,000</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#0030A0"></span></td>
<td>1948</td>
<td>24.8</td>
</tr><tr role="row" class="odd">
<td id="1449" class="sorting_1">Cristal</td>
<td>1449</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/PER.gif" alt="Peru">  PER</td>
<td>First Division</td>
<td>461K</td>
<td>Professional</td>
<td>18,000</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#00F8F8"></span></td>
<td>1955</td>
<td>24.6</td>
</tr><tr role="row" class="even">
<td id="707654" class="sorting_1">Crotone</td>
<td>707654</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ITA.gif" alt="Italy">  ITA</td>
<td>Serie A</td>
<td>1M</td>
<td>Professional</td>
<td>12,500</td>
<td><span class="label" style="background:#002060"></span> <span class="label" style="background:#B00000"></span></td>
<td>1923</td>
<td>25.0</td>
</tr><tr role="row" class="odd">
<td id="14022187" class="sorting_1">Crucero del Norte</td>
<td>14022187</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ARG.gif" alt="Argentina">  ARG</td>
<td>Second Division</td>
<td>518K</td>
<td>Professional</td>
<td>12,000</td>
<td><span class="label" style="background:#F87000"></span> <span class="label" style="background:#F8F000"></span></td>
<td>1989</td>
<td>24.8</td>
</tr><tr role="row" class="even">
<td id="1279" class="sorting_1">Crusaders</td>
<td>1279</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/NIR.gif" alt="N.Ireland">  NIR</td>
<td>Danske Bank Premier</td>
<td>50K</td>
<td>Semi-Professional</td>
<td>3,383</td>
<td><span class="label" style="background:#E00000"></span> <span class="label" style="background:#000000"></span></td>
<td>1898</td>
<td>27.2</td>
</tr><tr role="row" class="odd">
<td id="1254" class="sorting_1">Cruz Azul</td>
<td>1254</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/MEX.gif" alt="Mexico">  MEX</td>
<td>First Division</td>
<td>5M</td>
<td>Professional</td>
<td>35,161</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#0030A0"></span></td>
<td>1927</td>
<td>26.8</td>
</tr><tr role="row" class="even">
<td id="642" class="sorting_1">Crystal Palace</td>
<td>642</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ENG.gif" alt="England">  ENG</td>
<td>Premier Division</td>
<td>11M</td>
<td>Professional</td>
<td>26,297</td>
<td><span class="label" style="background:#003098"></span> <span class="label" style="background:#C80030"></span></td>
<td>1905</td>
<td>27.5</td>
</tr><tr role="row" class="odd">
<td id="57057243" class="sorting_1">CS Afumati</td>
<td>57057243</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ROU.gif" alt="Romania">  ROU</td>
<td>Liga II</td>
<td>0</td>
<td>Professional</td>
<td>3,000</td>
<td><span class="label" style="background:#0030A0"></span> <span class="label" style="background:#F8F000"></span></td>
<td>0</td>
<td>24.6</td>
</tr><tr role="row" class="even">
<td id="57057245" class="sorting_1">CS Balotesti</td>
<td>57057245</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ROU.gif" alt="Romania">  ROU</td>
<td>Liga II</td>
<td>0</td>
<td>Professional</td>
<td>3,780</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#2068B0"></span></td>
<td>2006</td>
<td>23.9</td>
</tr><tr role="row" class="odd">
<td id="57080206" class="sorting_1">CS Mioveni</td>
<td>57080206</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ROU.gif" alt="Romania">  ROU</td>
<td>Liga II</td>
<td>0</td>
<td>Professional</td>
<td>7,400</td>
<td><span class="label" style="background:#00C030"></span> <span class="label" style="background:#F8F000"></span></td>
<td>2000</td>
<td>26.5</td>
</tr><tr role="row" class="even">
<td id="880" class="sorting_1">CS Sedan Ardennes</td>
<td>880</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/FRA.gif" alt="France">  FRA</td>
<td>National</td>
<td>0</td>
<td>Semi-Professional</td>
<td>24,389</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
<td>1919</td>
<td>25.3</td>
</tr><tr role="row" class="odd">
<td id="57111101" class="sorting_1">CS U Craiova</td>
<td>57111101</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ROU.gif" alt="Romania">  ROU</td>
<td>Liga I</td>
<td>0</td>
<td>Professional</td>
<td>6,400</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#2858B0"></span></td>
<td>2013</td>
<td>24.3</td>
</tr><tr role="row" class="even">
<td id="38019804" class="sorting_1">Csakvar</td>
<td>38019804</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/HUN.gif" alt="Hungary">  HUN</td>
<td>Division II</td>
<td>6K</td>
<td>Professional</td>
<td>2,500</td>
<td><span class="label" style="background:#F8F000"></span> <span class="label" style="background:#304078"></span></td>
<td>1947</td>
<td>23.6</td>
</tr><tr role="row" class="odd">
<td id="5741146" class="sorting_1">CSK Pivara</td>
<td>5741146</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/SRB.gif" alt="Serbia">  SRB</td>
<td>First League</td>
<td>69K</td>
<td>Professional</td>
<td>2,360</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F8F8F8"></span></td>
<td>1925</td>
<td>23.7</td>
</tr><tr role="row" class="even">
<td id="1518" class="sorting_1">CSKA Moscow</td>
<td>1518</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/RUS.gif" alt="Russia">  RUS</td>
<td>Premier Division</td>
<td>1M</td>
<td>Professional</td>
<td>18,636</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
<td>1911</td>
<td>26.4</td>
</tr><tr role="row" class="odd">
<td id="22069955" class="sorting_1">CSKA-Sofia</td>
<td>22069955</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/BUL.gif" alt="Bulgaria">  BUL</td>
<td>First League</td>
<td>132K</td>
<td>Professional</td>
<td>22,015</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#C81018"></span></td>
<td>1948</td>
<td>23.8</td>
</tr><tr role="row" class="even">
<td id="57086204" class="sorting_1">CSM Poli Iasi</td>
<td>57086204</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ROU.gif" alt="Romania">  ROU</td>
<td>Liga I</td>
<td>0</td>
<td>Professional</td>
<td>12,500</td>
<td><span class="label" style="background:#081030"></span> <span class="label" style="background:#2850A0"></span></td>
<td>2010</td>
<td>25.6</td>
</tr><tr role="row" class="odd">
<td id="7547031" class="sorting_1">CSM Rm. Valcea</td>
<td>7547031</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ROU.gif" alt="Romania">  ROU</td>
<td>Liga II</td>
<td>0</td>
<td>Professional</td>
<td>13,500</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#0050D0"></span></td>
<td>2004</td>
<td>23.2</td>
</tr><tr role="row" class="even">
<td id="104776" class="sorting_1">CTB</td>
<td>104776</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/BRA.gif" alt="Brazil">  BRA</td>
<td>First Division</td>
<td>119K</td>
<td>Professional</td>
<td>34,872</td>
<td><span class="label" style="background:#C0F888"></span> <span class="label" style="background:#F8F8F8"></span></td>
<td>1909</td>
<td>26.0</td>
</tr><tr role="row" class="odd">
<td id="14018428" class="sorting_1">Ctral. Cordoba (SdE)</td>
<td>14018428</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ARG.gif" alt="Argentina">  ARG</td>
<td>Second Division</td>
<td>27K</td>
<td>Professional</td>
<td>18,000</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#000000"></span></td>
<td>1919</td>
<td>29.3</td>
</tr><tr role="row" class="even">
<td id="309346" class="sorting_1">Cucuta Deportivo</td>
<td>309346</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/COL.gif" alt="Colombia">  COL</td>
<td>Second Division</td>
<td>438K</td>
<td>Professional</td>
<td>45,000</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#E00000"></span></td>
<td>1924</td>
<td>25.7</td>
</tr><tr role="row" class="odd">
<td id="318915" class="sorting_1">CUI</td>
<td>318915</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/BRA.gif" alt="Brazil">  BRA</td>
<td>Third Division</td>
<td>0</td>
<td>Professional</td>
<td>42,958</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#68C0E8"></span></td>
<td>2001</td>
<td>28.0</td>
</tr><tr role="row" class="even">
<td id="1301372" class="sorting_1">Cukaricki</td>
<td>1301372</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/SRB.gif" alt="Serbia">  SRB</td>
<td>SuperLeague</td>
<td>775K</td>
<td>Professional</td>
<td>4,070</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#F0F0F0"></span></td>
<td>1926</td>
<td>24.4</td>
</tr><tr role="row" class="odd">
<td id="5250445" class="sorting_1">Curico Unido</td>
<td>5250445</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/CHI.gif" alt="Chile">  CHI</td>
<td>First Division B</td>
<td>5K</td>
<td>Professional</td>
<td>8,000</td>
<td><span class="label" style="background:#E00000"></span> <span class="label" style="background:#F8F8F8"></span></td>
<td>1973</td>
<td>24.7</td>
</tr><tr role="row" class="even">
<td id="5103697" class="sorting_1">Curzon Ashton</td>
<td>5103697</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ENG.gif" alt="England">  ENG</td>
<td>Vanarama North</td>
<td>0</td>
<td>Semi-Professional</td>
<td>4,200</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#0030A0"></span></td>
<td>1963</td>
<td>24.2</td>
</tr><tr role="row" class="odd">
<td id="57000258" class="sorting_1">D. Calarasi</td>
<td>57000258</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ROU.gif" alt="Romania">  ROU</td>
<td>Liga II</td>
<td>0</td>
<td>Professional</td>
<td>12,000</td>
<td><span class="label" style="background:#F8F000"></span> <span class="label" style="background:#1838F8"></span></td>
<td>1920</td>
<td>24.2</td>
</tr><tr role="row" class="even">
<td id="1913" class="sorting_1">D.C. United</td>
<td>1913</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/USA.gif" alt="U.S.A.">  USA</td>
<td>MLS</td>
<td>692K</td>
<td>Professional</td>
<td>45,596</td>
<td><span class="label" style="background:#E00000"></span> <span class="label" style="background:#000000"></span></td>
<td>1996</td>
<td>26.1</td>
</tr><tr role="row" class="odd">
<td id="57139475" class="sorting_1">Dacia Unirea</td>
<td>57139475</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ROU.gif" alt="Romania">  ROU</td>
<td>Liga II</td>
<td>0</td>
<td>Professional</td>
<td>23,000</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#0050D0"></span></td>
<td>1922</td>
<td>25.9</td>
</tr><tr role="row" class="even">
<td id="5705626" class="sorting_1">Daegu</td>
<td>5705626</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/KOR.gif" alt="South Korea">  KOR</td>
<td>K LEAGUE Challenge</td>
<td>180K</td>
<td>Professional</td>
<td>66,422</td>
<td><span class="label" style="background:#001040"></span> <span class="label" style="background:#20B0F0"></span></td>
<td>2002</td>
<td>25.8</td>
</tr><tr role="row" class="odd">
<td id="130774" class="sorting_1">Daejeon</td>
<td>130774</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/KOR.gif" alt="South Korea">  KOR</td>
<td>K LEAGUE Challenge</td>
<td>200K</td>
<td>Professional</td>
<td>41,000</td>
<td><span class="label" style="background:#B81000"></span> <span class="label" style="background:#B81000"></span></td>
<td>1997</td>
<td>24.5</td>
</tr><tr role="row" class="even">
<td id="643" class="sorting_1">Dag &amp; Red</td>
<td>643</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ENG.gif" alt="England">  ENG</td>
<td>Vanarama National</td>
<td>10K</td>
<td>Professional</td>
<td>6,078</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
<td>1992</td>
<td>24.0</td>
</tr><tr role="row" class="odd">
<td id="68002700" class="sorting_1">Dalkurd FF</td>
<td>68002700</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/SWE.gif" alt="Sweden">  SWE</td>
<td>First Division Elite</td>
<td>45K</td>
<td>Professional</td>
<td>6,500</td>
<td><span class="label" style="background:#E00000"></span> <span class="label" style="background:#288858"></span></td>
<td>2004</td>
<td>25.0</td>
</tr><tr role="row" class="even">
<td id="68002457" class="sorting_1">Dalstorps IF</td>
<td>68002457</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/SWE.gif" alt="Sweden">  SWE</td>
<td>Second Division WG</td>
<td>0</td>
<td>Semi-Professional</td>
<td>1,000</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F8F000"></span></td>
<td>1949</td>
<td>23.7</td>
</tr><tr role="row" class="odd">
<td id="499" class="sorting_1">Dalum</td>
<td>499</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/DEN.gif" alt="Denmark">  DEN</td>
<td>Second Division</td>
<td>0</td>
<td>Amateur</td>
<td>4,000</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#E00000"></span></td>
<td>1931</td>
<td>25.5</td>
</tr><tr role="row" class="even">
<td id="1918" class="sorting_1">Danubio</td>
<td>1918</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/URU.gif" alt="Uruguay">  URU</td>
<td>First Division</td>
<td>6K</td>
<td>Professional</td>
<td>14,401</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F8F8F8"></span></td>
<td>1932</td>
<td>23.5</td>
</tr><tr role="row" class="odd">
<td id="29130446" class="sorting_1">Darlington 1883</td>
<td>29130446</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ENG.gif" alt="England">  ENG</td>
<td>Vanarama North</td>
<td>5K</td>
<td>Semi-Professional</td>
<td>3,000</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F8F8F8"></span></td>
<td>2011</td>
<td>26.6</td>
</tr><tr role="row" class="even">
<td id="108997" class="sorting_1">Darmstadt</td>
<td>108997</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/GER.gif" alt="Germany">  GER</td>
<td>First Division</td>
<td>2M</td>
<td>Professional</td>
<td>17,000</td>
<td><span class="label" style="background:#082040"></span> <span class="label" style="background:#2858B0"></span></td>
<td>1898</td>
<td>26.4</td>
</tr><tr role="row" class="odd">
<td id="5100123" class="sorting_1">Dartford</td>
<td>5100123</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ENG.gif" alt="England">  ENG</td>
<td>Vanarama South</td>
<td>9K</td>
<td>Semi-Professional</td>
<td>6,000</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F8F8F8"></span></td>
<td>1888</td>
<td>25.0</td>
</tr><tr role="row" class="even">
<td id="1000" class="sorting_1">De Graafschap</td>
<td>1000</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/NED.gif" alt="Holland">  NED</td>
<td>Jupiler League</td>
<td>129K</td>
<td>Professional</td>
<td>12,600</td>
<td><span class="label" style="background:#2870C0"></span> <span class="label" style="background:#F8F8F8"></span></td>
<td>1954</td>
<td>23.2</td>
</tr><tr role="row" class="odd">
<td id="1052" class="sorting_1">Debrecen</td>
<td>1052</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/HUN.gif" alt="Hungary">  HUN</td>
<td>Division I</td>
<td>84K</td>
<td>Professional</td>
<td>20,020</td>
<td><span class="label" style="background:#E00000"></span> <span class="label" style="background:#F8F8F8"></span></td>
<td>1902</td>
<td>27.4</td>
</tr><tr role="row" class="even">
<td id="108526" class="sorting_1">Defensa y Justicia</td>
<td>108526</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ARG.gif" alt="Argentina">  ARG</td>
<td>Premier Division</td>
<td>58K</td>
<td>Professional</td>
<td>10,000</td>
<td><span class="label" style="background:#008030"></span> <span class="label" style="background:#F8F000"></span></td>
<td>1935</td>
<td>23.7</td>
</tr><tr role="row" class="odd">
<td id="77044579" class="sorting_1">Defensor La Bocana</td>
<td>77044579</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/PER.gif" alt="Peru">  PER</td>
<td>First Division</td>
<td>31K</td>
<td>Professional</td>
<td>10,000</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#68D0E0"></span></td>
<td>1987</td>
<td>27.8</td>
</tr><tr role="row" class="even">
<td id="1919" class="sorting_1">Defensor Sporting</td>
<td>1919</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/URU.gif" alt="Uruguay">  URU</td>
<td>First Division</td>
<td>7K</td>
<td>Professional</td>
<td>9,357</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#503098"></span></td>
<td>1913</td>
<td>24.6</td>
</tr><tr role="row" class="odd">
<td id="1786" class="sorting_1">Degerfors IF</td>
<td>1786</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/SWE.gif" alt="Sweden">  SWE</td>
<td>First Division Elite</td>
<td>2K</td>
<td>Professional</td>
<td>7,500</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#E00000"></span></td>
<td>1907</td>
<td>24.5</td>
</tr><tr role="row" class="even">
<td id="228" class="sorting_1">Deinze</td>
<td>228</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/BEL.gif" alt="Belgium">  BEL</td>
<td>First Division</td>
<td>30K</td>
<td>Semi-Professional</td>
<td>7,515</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F87000"></span></td>
<td>1926</td>
<td>24.0</td>
</tr><tr role="row" class="odd">
<td id="5512151" class="sorting_1">Dempo</td>
<td>5512151</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/IND.gif" alt="India">  IND</td>
<td>National Football League</td>
<td>14K</td>
<td>Professional</td>
<td>19,400</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#0050D0"></span></td>
<td>1966</td>
<td>23.5</td>
</tr><tr role="row" class="even">
<td id="1005" class="sorting_1">Den Bosch</td>
<td>1005</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/NED.gif" alt="Holland">  NED</td>
<td>Jupiler League</td>
<td>0</td>
<td>Professional</td>
<td>7,000</td>
<td><span class="label" style="background:#004888"></span> <span class="label" style="background:#4070F0"></span></td>
<td>1965</td>
<td>22.7</td>
</tr><tr role="row" class="odd">
<td id="1868" class="sorting_1">Denizlispor</td>
<td>1868</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/TUR.gif" alt="Turkey">  TUR</td>
<td>1. League</td>
<td>5K</td>
<td>Professional</td>
<td>15,459</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
<td>1966</td>
<td>25.1</td>
</tr><tr role="row" class="even">
<td id="130790" class="sorting_1">Deportes Antofagasta</td>
<td>130790</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/CHI.gif" alt="Chile">  CHI</td>
<td>First Division</td>
<td>35K</td>
<td>Professional</td>
<td>21,178</td>
<td><span class="label" style="background:#3088B8"></span> <span class="label" style="background:#F8F8F8"></span></td>
<td>1966</td>
<td>25.3</td>
</tr><tr role="row" class="odd">
<td id="5250434" class="sorting_1">Deportes Copiapo</td>
<td>5250434</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/CHI.gif" alt="Chile">  CHI</td>
<td>First Division B</td>
<td>0</td>
<td>Professional</td>
<td>8,000</td>
<td><span class="label" style="background:#D0D0D0"></span> <span class="label" style="background:#F8F8F8"></span></td>
<td>1999</td>
<td>24.7</td>
</tr><tr role="row" class="even">
<td id="130787" class="sorting_1">Deportes Iquique</td>
<td>130787</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/CHI.gif" alt="Chile">  CHI</td>
<td>First Division</td>
<td>17K</td>
<td>Professional</td>
<td>13,600</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#60C0F8"></span></td>
<td>2002</td>
<td>23.5</td>
</tr><tr role="row" class="odd">
<td id="130796" class="sorting_1">Deportes La Serena</td>
<td>130796</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/CHI.gif" alt="Chile">  CHI</td>
<td>First Division B</td>
<td>9K</td>
<td>Professional</td>
<td>17,641</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#B00000"></span></td>
<td>1955</td>
<td>24.1</td>
</tr><tr role="row" class="even">
<td id="130781" class="sorting_1">Deportes Puerto Montt</td>
<td>130781</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/CHI.gif" alt="Chile">  CHI</td>
<td>First Division B</td>
<td>5K</td>
<td>Professional</td>
<td>10,000</td>
<td><span class="label" style="background:#008000"></span> <span class="label" style="background:#F8F8F8"></span></td>
<td>1983</td>
<td>27.4</td>
</tr><tr role="row" class="odd">
<td id="104363" class="sorting_1">Deportes Temuco</td>
<td>104363</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/CHI.gif" alt="Chile">  CHI</td>
<td>First Division</td>
<td>7K</td>
<td>Professional</td>
<td>18,500</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#008030"></span></td>
<td>1965</td>
<td>24.9</td>
</tr><tr role="row" class="even">
<td id="75000008" class="sorting_1">Deportes Valdivia</td>
<td>75000008</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/CHI.gif" alt="Chile">  CHI</td>
<td>First Division B</td>
<td>0</td>
<td>Professional</td>
<td>5,397</td>
<td><span class="label" style="background:#E00000"></span> <span class="label" style="background:#F8F8F8"></span></td>
<td>2003</td>
<td>22.8</td>
</tr><tr role="row" class="odd">
<td id="421" class="sorting_1">Deportivo Cali</td>
<td>421</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/COL.gif" alt="Colombia">  COL</td>
<td>First Division</td>
<td>3M</td>
<td>Professional</td>
<td>52,000</td>
<td><span class="label" style="background:#008030"></span> <span class="label" style="background:#108830"></span></td>
<td>1912</td>
<td>25.7</td>
</tr><tr role="row" class="even">
<td id="116309" class="sorting_1">Deportivo Maldonado</td>
<td>116309</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/URU.gif" alt="Uruguay">  URU</td>
<td>Second Division</td>
<td>3K</td>
<td>Professional</td>
<td>22,000</td>
<td><span class="label" style="background:#C80000"></span> <span class="label" style="background:#00A030"></span></td>
<td>1928</td>
<td>24.9</td>
</tr><tr role="row" class="odd">
<td id="645" class="sorting_1">Derby</td>
<td>645</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ENG.gif" alt="England">  ENG</td>
<td>Sky Bet Championship</td>
<td>4M</td>
<td>Professional</td>
<td>33,597</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F8F8F8"></span></td>
<td>1884</td>
<td>26.0</td>
</tr><tr role="row" class="even">
<td id="416241" class="sorting_1">Dergview</td>
<td>416241</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/NIR.gif" alt="N.Ireland">  NIR</td>
<td>NIFL C1</td>
<td>0</td>
<td>Semi-Professional</td>
<td>1,200</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F8F8F8"></span></td>
<td>1980</td>
<td>27.2</td>
</tr><tr role="row" class="odd">
<td id="591" class="sorting_1">Derry City</td>
<td>591</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/IRL.gif" alt="Ireland">  IRL</td>
<td>Premier Division</td>
<td>0</td>
<td>Professional</td>
<td>8,200</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#E00000"></span></td>
<td>1928</td>
<td>23.4</td>
</tr><tr role="row" class="even">
<td id="484484" class="sorting_1">Desna</td>
<td>484484</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/UKR.gif" alt="Ukraine">  UKR</td>
<td>First League</td>
<td>45K</td>
<td>Professional</td>
<td>12,500</td>
<td><span class="label" style="background:#E0E0E0"></span> <span class="label" style="background:#080048"></span></td>
<td>1960</td>
<td>25.5</td>
</tr><tr role="row" class="odd">
<td id="188" class="sorting_1">Dessel</td>
<td>188</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/BEL.gif" alt="Belgium">  BEL</td>
<td>First Division</td>
<td>0</td>
<td>Semi-Professional</td>
<td>4,284</td>
<td><span class="label" style="background:#008030"></span> <span class="label" style="background:#F8F8F8"></span></td>
<td>1926</td>
<td>23.5</td>
</tr><tr role="row" class="even">
<td id="839" class="sorting_1">Dijon FCO</td>
<td>839</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/FRA.gif" alt="France">  FRA</td>
<td>Ligue 1</td>
<td>861K</td>
<td>Professional</td>
<td>16,098</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F00000"></span></td>
<td>1998</td>
<td>27.1</td>
</tr><tr role="row" class="odd">
<td id="432" class="sorting_1">Dinamo</td>
<td>432</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/CRO.gif" alt="Croatia">  CRO</td>
<td>First League</td>
<td>2M</td>
<td>Professional</td>
<td>35,123</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#0070C0"></span></td>
<td>1911</td>
<td>24.1</td>
</tr><tr role="row" class="even">
<td id="5744698" class="sorting_1">Dinamo (V)</td>
<td>5744698</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/SRB.gif" alt="Serbia">  SRB</td>
<td>First League</td>
<td>43K</td>
<td>Semi-Professional</td>
<td>5,000</td>
<td><span class="label" style="background:#0078F8"></span> <span class="label" style="background:#F8D000"></span></td>
<td>1947</td>
<td>25.8</td>
</tr><tr role="row" class="odd">
<td id="1300113" class="sorting_1">Dinamo Brest</td>
<td>1300113</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/BLR.gif" alt="Belarus">  BLR</td>
<td>Highest League</td>
<td>23K</td>
<td>Professional</td>
<td>10,169</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#0050D0"></span></td>
<td>1960</td>
<td>24.2</td>
</tr><tr role="row" class="even">
<td id="1500" class="sorting_1">Dinamo Buc.</td>
<td>1500</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ROU.gif" alt="Romania">  ROU</td>
<td>Liga I</td>
<td>0</td>
<td>Professional</td>
<td>15,300</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#E00000"></span></td>
<td>1948</td>
<td>24.4</td>
</tr><tr role="row" class="odd">
<td id="303" class="sorting_1">Dinamo Minsk</td>
<td>303</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/BLR.gif" alt="Belarus">  BLR</td>
<td>Highest League</td>
<td>46K</td>
<td>Professional</td>
<td>17,600</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#0050D0"></span></td>
<td>1927</td>
<td>25.8</td>
</tr><tr role="row" class="even">
<td id="1520" class="sorting_1">Dinamo Moscow</td>
<td>1520</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/RUS.gif" alt="Russia">  RUS</td>
<td>First Division</td>
<td>115K</td>
<td>Professional</td>
<td>18,636</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#0860D0"></span></td>
<td>1923</td>
<td>26.9</td>
</tr><tr role="row" class="odd">
<td id="130821" class="sorting_1">Diosgyor</td>
<td>130821</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/HUN.gif" alt="Hungary">  HUN</td>
<td>Division I</td>
<td>0</td>
<td>Professional</td>
<td>16,500</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#C00830"></span></td>
<td>1910</td>
<td>24.3</td>
</tr><tr role="row" class="even">
<td id="1280" class="sorting_1">Distillery</td>
<td>1280</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/NIR.gif" alt="N.Ireland">  NIR</td>
<td>NIFL C2</td>
<td>0</td>
<td>Semi-Professional</td>
<td>7,000</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F8F8F8"></span></td>
<td>1880</td>
<td>23.4</td>
</tr><tr role="row" class="odd">
<td id="1787" class="sorting_1">Djurgardens IF</td>
<td>1787</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/SWE.gif" alt="Sweden">  SWE</td>
<td>Premier Division</td>
<td>224K</td>
<td>Professional</td>
<td>31,200</td>
<td><span class="label" style="background:#003068"></span> <span class="label" style="background:#68A8E0"></span></td>
<td>1891</td>
<td>25.5</td>
</tr><tr role="row" class="even">
<td id="1300116" class="sorting_1">Dnepr Mogilev</td>
<td>1300116</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/BLR.gif" alt="Belarus">  BLR</td>
<td>First League</td>
<td>276K</td>
<td>Professional</td>
<td>7,350</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#0050D0"></span></td>
<td>1960</td>
<td>25.4</td>
</tr><tr role="row" class="odd">
<td id="1886" class="sorting_1">Dnipro</td>
<td>1886</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/UKR.gif" alt="Ukraine">  UKR</td>
<td>Premier League</td>
<td>768K</td>
<td>Professional</td>
<td>31,000</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#0860C0"></span></td>
<td>1918</td>
<td>24.0</td>
</tr><tr role="row" class="even">
<td id="7580966" class="sorting_1">Dob</td>
<td>7580966</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/SVN.gif" alt="Slovenia">  SVN</td>
<td>Second League</td>
<td>43K</td>
<td>Semi-Professional</td>
<td>287</td>
<td><span class="label" style="background:#0050D0"></span> <span class="label" style="background:#F8F000"></span></td>
<td>1926</td>
<td>23.5</td>
</tr><tr role="row" class="odd">
<td id="128652" class="sorting_1">Domzale</td>
<td>128652</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/SVN.gif" alt="Slovenia">  SVN</td>
<td>First League</td>
<td>129K</td>
<td>Professional</td>
<td>2,813</td>
<td><span class="label" style="background:#0050D0"></span> <span class="label" style="background:#F8F000"></span></td>
<td>1921</td>
<td>22.7</td>
</tr><tr role="row" class="even">
<td id="646" class="sorting_1">Doncaster</td>
<td>646</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ENG.gif" alt="England">  ENG</td>
<td>Sky Bet League Two</td>
<td>50K</td>
<td>Professional</td>
<td>15,231</td>
<td><span class="label" style="background:#E00000"></span> <span class="label" style="background:#F8F8F8"></span></td>
<td>1879</td>
<td>25.3</td>
</tr><tr role="row" class="odd">
<td id="130169" class="sorting_1">Donegal Celtic</td>
<td>130169</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/NIR.gif" alt="N.Ireland">  NIR</td>
<td>NIFL C2</td>
<td>0</td>
<td>Semi-Professional</td>
<td>6,254</td>
<td><span class="label" style="background:#008030"></span> <span class="label" style="background:#F8F8F8"></span></td>
<td>1970</td>
<td>26.3</td>
</tr><tr role="row" class="even">
<td id="5666338" class="sorting_1">Dorados</td>
<td>5666338</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/MEX.gif" alt="Mexico">  MEX</td>
<td>Promotion League</td>
<td>1M</td>
<td>Professional</td>
<td>23,333</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#D8B028"></span></td>
<td>2003</td>
<td>26.6</td>
</tr><tr role="row" class="odd">
<td id="1001" class="sorting_1">Dordrecht</td>
<td>1001</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/NED.gif" alt="Holland">  NED</td>
<td>Jupiler League</td>
<td>14K</td>
<td>Professional</td>
<td>4,100</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#404828"></span></td>
<td>1972</td>
<td>21.8</td>
</tr><tr role="row" class="even">
<td id="7521262" class="sorting_1">Dorog</td>
<td>7521262</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/HUN.gif" alt="Hungary">  HUN</td>
<td>Division II</td>
<td>14K</td>
<td>Professional</td>
<td>3,150</td>
<td><span class="label" style="background:#F00000"></span> <span class="label" style="background:#000000"></span></td>
<td>1914</td>
<td>23.4</td>
</tr><tr role="row" class="odd">
<td id="907" class="sorting_1">Dortmund</td>
<td>907</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/GER.gif" alt="Germany">  GER</td>
<td>First Division</td>
<td>16M</td>
<td>Professional</td>
<td>81,359</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F8F000"></span></td>
<td>1909</td>
<td>24.7</td>
</tr><tr role="row" class="even">
<td id="102483" class="sorting_1">Douglas Haig</td>
<td>102483</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ARG.gif" alt="Argentina">  ARG</td>
<td>Second Division</td>
<td>8K</td>
<td>Professional</td>
<td>18,000</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#B00000"></span></td>
<td>1918</td>
<td>26.4</td>
</tr><tr role="row" class="odd">
<td id="647" class="sorting_1">Dover</td>
<td>647</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ENG.gif" alt="England">  ENG</td>
<td>Vanarama National</td>
<td>8K</td>
<td>Semi-Professional</td>
<td>6,500</td>
<td><span class="label" style="background:#181818"></span> <span class="label" style="background:#F8F8F8"></span></td>
<td>1983</td>
<td>25.5</td>
</tr><tr role="row" class="even">
<td id="7580043" class="sorting_1">Drava</td>
<td>7580043</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/SVN.gif" alt="Slovenia">  SVN</td>
<td>Second League</td>
<td>78K</td>
<td>Professional</td>
<td>4,000</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#0050D0"></span></td>
<td>1933</td>
<td>21.3</td>
</tr><tr role="row" class="odd">
<td id="911" class="sorting_1">Dresden</td>
<td>911</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/GER.gif" alt="Germany">  GER</td>
<td>Second Division</td>
<td>431K</td>
<td>Professional</td>
<td>32,066</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F0B010"></span></td>
<td>1953</td>
<td>24.0</td>
</tr><tr role="row" class="even">
<td id="1300922" class="sorting_1">Drogheda Utd</td>
<td>1300922</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/IRL.gif" alt="Ireland">  IRL</td>
<td>First Division</td>
<td>0</td>
<td>Semi-Professional</td>
<td>5,400</td>
<td><span class="label" style="background:#0078F8"></span> <span class="label" style="background:#902830"></span></td>
<td>1919</td>
<td>22.0</td>
</tr><tr role="row" class="odd">
<td id="661027" class="sorting_1">Dugopolje</td>
<td>661027</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/CRO.gif" alt="Croatia">  CRO</td>
<td>Second League</td>
<td>0</td>
<td>Professional</td>
<td>5,200</td>
<td><span class="label" style="background:#D8B028"></span> <span class="label" style="background:#F8F8F8"></span></td>
<td>1952</td>
<td>21.4</td>
</tr><tr role="row" class="even">
<td id="933" class="sorting_1">Duisburg</td>
<td>933</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/GER.gif" alt="Germany">  GER</td>
<td>Third Division</td>
<td>0</td>
<td>Professional</td>
<td>31,502</td>
<td><span class="label" style="background:#0078F8"></span> <span class="label" style="background:#F8F8F8"></span></td>
<td>1902</td>
<td>25.6</td>
</tr><tr role="row" class="odd">
<td id="5640780" class="sorting_1">Dukla Prague</td>
<td>5640780</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/CZE.gif" alt="Czech Republic">  CZE</td>
<td>First Division</td>
<td>559K</td>
<td>Professional</td>
<td>18,000</td>
<td><span class="label" style="background:#F8F000"></span> <span class="label" style="background:#F8F000"></span></td>
<td>1948</td>
<td>25.0</td>
</tr><tr role="row" class="even">
<td id="1554" class="sorting_1">Dumbarton</td>
<td>1554</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/SCO.gif" alt="Scotland">  SCO</td>
<td>Ladbrokes Championship</td>
<td>9K</td>
<td>Semi-Professional</td>
<td>2,020</td>
<td><span class="label" style="background:#F8D000"></span> <span class="label" style="background:#F8F8F8"></span></td>
<td>1872</td>
<td>25.9</td>
</tr><tr role="row" class="odd">
<td id="1614" class="sorting_1">Dun. Streda</td>
<td>1614</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/SVK.gif" alt="Slovakia">  SVK</td>
<td>First Division</td>
<td>86K</td>
<td>Professional</td>
<td>3,264</td>
<td><span class="label" style="background:#0050D0"></span> <span class="label" style="background:#F8F000"></span></td>
<td>1904</td>
<td>24.0</td>
</tr><tr role="row" class="even">
<td id="22040114" class="sorting_1">Dunav</td>
<td>22040114</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/BUL.gif" alt="Bulgaria">  BUL</td>
<td>First League</td>
<td>5K</td>
<td>Professional</td>
<td>7,622</td>
<td><span class="label" style="background:#60C0F8"></span> <span class="label" style="background:#60C0F8"></span></td>
<td>1949</td>
<td>25.3</td>
</tr><tr role="row" class="odd">
<td id="592" class="sorting_1">Dundalk</td>
<td>592</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/IRL.gif" alt="Ireland">  IRL</td>
<td>Premier Division</td>
<td>0</td>
<td>Professional</td>
<td>4,500</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F8F8F8"></span></td>
<td>1903</td>
<td>25.6</td>
</tr><tr role="row" class="even">
<td id="1555" class="sorting_1">Dundee</td>
<td>1555</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/SCO.gif" alt="Scotland">  SCO</td>
<td>Ladbrokes Premiership</td>
<td>500K</td>
<td>Professional</td>
<td>11,506</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#202030"></span></td>
<td>1893</td>
<td>24.1</td>
</tr><tr role="row" class="odd">
<td id="1556" class="sorting_1">Dundee Utd</td>
<td>1556</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/SCO.gif" alt="Scotland">  SCO</td>
<td>Ladbrokes Championship</td>
<td>200K</td>
<td>Professional</td>
<td>14,223</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#E07000"></span></td>
<td>1909</td>
<td>23.5</td>
</tr><tr role="row" class="even">
<td id="130176" class="sorting_1">Dundela</td>
<td>130176</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/NIR.gif" alt="N.Ireland">  NIR</td>
<td>NIFL C2</td>
<td>0</td>
<td>Semi-Professional</td>
<td>2,000</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#004030"></span></td>
<td>1895</td>
<td>26.6</td>
</tr><tr role="row" class="odd">
<td id="1557" class="sorting_1">Dunfermline</td>
<td>1557</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/SCO.gif" alt="Scotland">  SCO</td>
<td>Ladbrokes Championship</td>
<td>29K</td>
<td>Professional</td>
<td>11,904</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
<td>1885</td>
<td>25.5</td>
</tr><tr role="row" class="even">
<td id="116331" class="sorting_1">Dungannon</td>
<td>116331</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/NIR.gif" alt="N.Ireland">  NIR</td>
<td>Danske Bank Premier</td>
<td>0</td>
<td>Semi-Professional</td>
<td>5,000</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
<td>1949</td>
<td>26.1</td>
</tr><tr role="row" class="odd">
<td id="921" class="sorting_1">Dusseldorf</td>
<td>921</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/GER.gif" alt="Germany">  GER</td>
<td>Second Division</td>
<td>258K</td>
<td>Professional</td>
<td>54,600</td>
<td><span class="label" style="background:#E00808"></span> <span class="label" style="background:#F8F8F8"></span></td>
<td>1895</td>
<td>25.7</td>
</tr><tr role="row" class="even">
<td id="1885" class="sorting_1">Dynamo Kyiv</td>
<td>1885</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/UKR.gif" alt="Ukraine">  UKR</td>
<td>Premier League</td>
<td>12M</td>
<td>Professional</td>
<td>70,050</td>
<td><span class="label" style="background:#0030A0"></span> <span class="label" style="background:#F8F8F8"></span></td>
<td>1927</td>
<td>26.7</td>
</tr><tr role="row" class="odd">
<td id="130637" class="sorting_1">East Bengal</td>
<td>130637</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/IND.gif" alt="India">  IND</td>
<td>National Football League</td>
<td>14K</td>
<td>Professional</td>
<td>68,000</td>
<td><span class="label" style="background:#F8F000"></span> <span class="label" style="background:#B00000"></span></td>
<td>1920</td>
<td>24.7</td>
</tr><tr role="row" class="even">
<td id="1558" class="sorting_1">East Fife</td>
<td>1558</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/SCO.gif" alt="Scotland">  SCO</td>
<td>Ladbrokes League 1</td>
<td>10K</td>
<td>Semi-Professional</td>
<td>1,998</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F8D000"></span></td>
<td>1903</td>
<td>23.6</td>
</tr><tr role="row" class="odd">
<td id="5103648" class="sorting_1">East Thurrock</td>
<td>5103648</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ENG.gif" alt="England">  ENG</td>
<td>Vanarama South</td>
<td>0</td>
<td>Semi-Professional</td>
<td>3,000</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F0B010"></span></td>
<td>1969</td>
<td>24.6</td>
</tr><tr role="row" class="even">
<td id="5103643" class="sorting_1">Eastbourne Boro</td>
<td>5103643</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ENG.gif" alt="England">  ENG</td>
<td>Vanarama South</td>
<td>1K</td>
<td>Semi-Professional</td>
<td>4,121</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#D02028"></span></td>
<td>1964</td>
<td>24.7</td>
</tr><tr role="row" class="odd">
<td id="5103760" class="sorting_1">Eastleigh</td>
<td>5103760</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ENG.gif" alt="England">  ENG</td>
<td>Vanarama National</td>
<td>95K</td>
<td>Professional</td>
<td>5,192</td>
<td><span class="label" style="background:#183878"></span> <span class="label" style="background:#104098"></span></td>
<td>1946</td>
<td>26.2</td>
</tr><tr role="row" class="even">
<td id="5100157" class="sorting_1">Ebbsfleet</td>
<td>5100157</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ENG.gif" alt="England">  ENG</td>
<td>Vanarama South</td>
<td>80K</td>
<td>Professional</td>
<td>4,098</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#E00000"></span></td>
<td>1946</td>
<td>25.4</td>
</tr><tr role="row" class="odd">
<td id="814907" class="sorting_1">Ebro</td>
<td>814907</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ESP.gif" alt="Spain">  ESP</td>
<td>Second Division B3</td>
<td>57K</td>
<td>Professional</td>
<td>1,220</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#0040A8"></span></td>
<td>1942</td>
<td>26.1</td>
</tr><tr role="row" class="even">
<td id="5201742" class="sorting_1">Edinburgh City</td>
<td>5201742</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/SCO.gif" alt="Scotland">  SCO</td>
<td>Ladbrokes League 2</td>
<td>0</td>
<td>Semi-Professional</td>
<td>5,000</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
<td>1928</td>
<td>25.1</td>
</tr><tr role="row" class="odd">
<td id="1301" class="sorting_1">Egersunds</td>
<td>1301</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/NOR.gif" alt="Norway">  NOR</td>
<td>Second Division Group 3</td>
<td>0</td>
<td>Semi-Professional</td>
<td>4,425</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F8E848"></span></td>
<td>1919</td>
<td>24.6</td>
</tr><tr role="row" class="even">
<td id="1753" class="sorting_1">Eibar</td>
<td>1753</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ESP.gif" alt="Spain">  ESP</td>
<td>First Division</td>
<td>431K</td>
<td>Professional</td>
<td>6,300</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
<td>1940</td>
<td>24.4</td>
</tr><tr role="row" class="odd">
<td id="1002" class="sorting_1">Eindhoven</td>
<td>1002</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/NED.gif" alt="Holland">  NED</td>
<td>Jupiler League</td>
<td>34K</td>
<td>Professional</td>
<td>4,200</td>
<td><span class="label" style="background:#5090D8"></span> <span class="label" style="background:#F8F8F8"></span></td>
<td>1909</td>
<td>23.9</td>
</tr><tr role="row" class="even">
<td id="514046" class="sorting_1">Ekenas IF</td>
<td>514046</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/FIN.gif" alt="Finland">  FIN</td>
<td>First Division</td>
<td>0</td>
<td>Semi-Professional</td>
<td>1,900</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#008888"></span></td>
<td>1905</td>
<td>24.6</td>
</tr><tr role="row" class="odd">
<td id="67182750" class="sorting_1">El Ejido</td>
<td>67182750</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ESP.gif" alt="Spain">  ESP</td>
<td>Second Division B4</td>
<td>34K</td>
<td>Professional</td>
<td>7,870</td>
<td><span class="label" style="background:#B0D0E0"></span> <span class="label" style="background:#B0D0E0"></span></td>
<td>2012</td>
<td>23.2</td>
</tr><tr role="row" class="even">
<td id="5512557" class="sorting_1">El Tanque Sisley</td>
<td>5512557</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/URU.gif" alt="Uruguay">  URU</td>
<td>Second Division</td>
<td>768</td>
<td>Professional</td>
<td>3,700</td>
<td><span class="label" style="background:#00A030"></span> <span class="label" style="background:#000000"></span></td>
<td>1941</td>
<td>26.6</td>
</tr><tr role="row" class="odd">
<td id="130377" class="sorting_1">Elaz?gspor</td>
<td>130377</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/TUR.gif" alt="Turkey">  TUR</td>
<td>1. League</td>
<td>13K</td>
<td>Professional</td>
<td>14,467</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
<td>1967</td>
<td>25.7</td>
</tr><tr role="row" class="even">
<td id="1707" class="sorting_1">Elche</td>
<td>1707</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ESP.gif" alt="Spain">  ESP</td>
<td>Second Division</td>
<td>43K</td>
<td>Professional</td>
<td>34,000</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
<td>1923</td>
<td>26.6</td>
</tr><tr role="row" class="odd">
<td id="4212207" class="sorting_1">Eldense</td>
<td>4212207</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ESP.gif" alt="Spain">  ESP</td>
<td>Second Division B3</td>
<td>0</td>
<td>Professional</td>
<td>4,036</td>
<td><span class="label" style="background:#B00000"></span> <span class="label" style="background:#0050D0"></span></td>
<td>1921</td>
<td>25.0</td>
</tr><tr role="row" class="even">
<td id="1562" class="sorting_1">Elgin City</td>
<td>1562</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/SCO.gif" alt="Scotland">  SCO</td>
<td>Ladbrokes League 2</td>
<td>20K</td>
<td>Semi-Professional</td>
<td>4,520</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#000000"></span></td>
<td>1893</td>
<td>23.4</td>
</tr><tr role="row" class="odd">
<td id="1305" class="sorting_1">Elverum</td>
<td>1305</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/NOR.gif" alt="Norway">  NOR</td>
<td>Second Division Group 2</td>
<td>0</td>
<td>Semi-Professional</td>
<td>2,000</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F8F8F8"></span></td>
<td>1907</td>
<td>24.4</td>
</tr><tr role="row" class="even">
<td id="1003" class="sorting_1">Emmen</td>
<td>1003</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/NED.gif" alt="Holland">  NED</td>
<td>Jupiler League</td>
<td>43K</td>
<td>Professional</td>
<td>8,600</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#E81020"></span></td>
<td>1925</td>
<td>24.2</td>
</tr><tr role="row" class="odd">
<td id="1126" class="sorting_1">Empoli</td>
<td>1126</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ITA.gif" alt="Italy">  ITA</td>
<td>Serie A</td>
<td>2M</td>
<td>Professional</td>
<td>16,284</td>
<td><span class="label" style="background:#2068B0"></span> <span class="label" style="background:#2068B0"></span></td>
<td>1920</td>
<td>26.2</td>
</tr><tr role="row" class="even">
<td id="840" class="sorting_1">En Avant de Guingamp</td>
<td>840</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/FRA.gif" alt="France">  FRA</td>
<td>Ligue 1</td>
<td>1M</td>
<td>Professional</td>
<td>18,378</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#E00000"></span></td>
<td>1912</td>
<td>27.2</td>
</tr><tr role="row" class="odd">
<td id="4300018" class="sorting_1">Enskede IK</td>
<td>4300018</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/SWE.gif" alt="Sweden">  SWE</td>
<td>First Division North</td>
<td>894</td>
<td>Semi-Professional</td>
<td>2,000</td>
<td><span class="label" style="background:#E00000"></span> <span class="label" style="background:#000000"></span></td>
<td>1914</td>
<td>23.9</td>
</tr><tr role="row" class="even">
<td id="43036943" class="sorting_1">Entella</td>
<td>43036943</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ITA.gif" alt="Italy">  ITA</td>
<td>Serie B</td>
<td>603K</td>
<td>Professional</td>
<td>5,535</td>
<td><span class="label" style="background:#60C0F8"></span> <span class="label" style="background:#F8F8F8"></span></td>
<td>1914</td>
<td>25.6</td>
</tr><tr role="row" class="odd">
<td id="120936" class="sorting_1">Envigado F.C.</td>
<td>120936</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/COL.gif" alt="Colombia">  COL</td>
<td>First Division</td>
<td>607K</td>
<td>Professional</td>
<td>11,000</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#F88000"></span></td>
<td>1989</td>
<td>22.8</td>
</tr><tr role="row" class="even">
<td id="2244" class="sorting_1">Erfurt</td>
<td>2244</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/GER.gif" alt="Germany">  GER</td>
<td>Third Division</td>
<td>0</td>
<td>Professional</td>
<td>18,611</td>
<td><span class="label" style="background:#901010"></span> <span class="label" style="background:#E00000"></span></td>
<td>1966</td>
<td>24.2</td>
</tr><tr role="row" class="odd">
<td id="70054558" class="sorting_1">Erzurum Bld.</td>
<td>70054558</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/TUR.gif" alt="Turkey">  TUR</td>
<td>2. League White</td>
<td>0</td>
<td>Professional</td>
<td>23,700</td>
<td><span class="label" style="background:#0078F8"></span> <span class="label" style="background:#F8F8F8"></span></td>
<td>2010</td>
<td>25.7</td>
</tr><tr role="row" class="even">
<td id="502" class="sorting_1">Esbjerg fB</td>
<td>502</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/DEN.gif" alt="Denmark">  DEN</td>
<td>Superliga</td>
<td>231K</td>
<td>Professional</td>
<td>18,000</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
<td>1924</td>
<td>24.0</td>
</tr><tr role="row" class="odd">
<td id="68017475" class="sorting_1">Eskilsminne IF</td>
<td>68017475</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/SWE.gif" alt="Sweden">  SWE</td>
<td>Second Division WG</td>
<td>0</td>
<td>Semi-Professional</td>
<td>3,500</td>
<td><span class="label" style="background:#0050D0"></span> <span class="label" style="background:#F8F000"></span></td>
<td>1928</td>
<td>23.8</td>
</tr><tr role="row" class="even">
<td id="2591" class="sorting_1">Eskilstuna City</td>
<td>2591</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/SWE.gif" alt="Sweden">  SWE</td>
<td>Second Division SS</td>
<td>2K</td>
<td>Semi-Professional</td>
<td>7,800</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#0070E8"></span></td>
<td>1914</td>
<td>23.6</td>
</tr><tr role="row" class="odd">
<td id="1301257" class="sorting_1">Eskisehirspor</td>
<td>1301257</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/TUR.gif" alt="Turkey">  TUR</td>
<td>1. League</td>
<td>50K</td>
<td>Professional</td>
<td>34,930</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
<td>1965</td>
<td>25.1</td>
</tr><tr role="row" class="even">
<td id="1725" class="sorting_1">Espanyol</td>
<td>1725</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ESP.gif" alt="Spain">  ESP</td>
<td>First Division</td>
<td>861K</td>
<td>Professional</td>
<td>40,000</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#0050D0"></span></td>
<td>1900</td>
<td>26.2</td>
</tr><tr role="row" class="odd">
<td id="2097" class="sorting_1">Espanyol B</td>
<td>2097</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ESP.gif" alt="Spain">  ESP</td>
<td>Second Division B3</td>
<td>0</td>
<td>Professional</td>
<td>1,500</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#0050D0"></span></td>
<td>1994</td>
<td>19.3</td>
</tr><tr role="row" class="even">
<td id="1971" class="sorting_1">ESTAC Troyes</td>
<td>1971</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/FRA.gif" alt="France">  FRA</td>
<td>Domino's Ligue 2</td>
<td>1M</td>
<td>Professional</td>
<td>20,842</td>
<td><span class="label" style="background:#082040"></span> <span class="label" style="background:#0030A0"></span></td>
<td>1986</td>
<td>26.2</td>
</tr><tr role="row" class="odd">
<td id="2461" class="sorting_1">Estarreja</td>
<td>2461</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/POR.gif" alt="Portugal">  POR</td>
<td>PT Championship</td>
<td>4K</td>
<td>Semi-Professional</td>
<td>2,500</td>
<td><span class="label" style="background:#0030A0"></span> <span class="label" style="background:#F87000"></span></td>
<td>1944</td>
<td>24.4</td>
</tr><tr role="row" class="even">
<td id="2390" class="sorting_1">Estoril</td>
<td>2390</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/POR.gif" alt="Portugal">  POR</td>
<td>Premier League</td>
<td>215K</td>
<td>Professional</td>
<td>8,000</td>
<td><span class="label" style="background:#E8E010"></span> <span class="label" style="background:#F8D000"></span></td>
<td>1939</td>
<td>23.3</td>
</tr><tr role="row" class="odd">
<td id="85" class="sorting_1">Estudiantes (LP)</td>
<td>85</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ARG.gif" alt="Argentina">  ARG</td>
<td>Premier Division</td>
<td>5M</td>
<td>Professional</td>
<td>53,000</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#C00008"></span></td>
<td>1905</td>
<td>25.9</td>
</tr><tr role="row" class="even">
<td id="14037206" class="sorting_1">Estudiantes (San Luis)</td>
<td>14037206</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ARG.gif" alt="Argentina">  ARG</td>
<td>Second Division</td>
<td>8K</td>
<td>Professional</td>
<td>12,000</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#108830"></span></td>
<td>1920</td>
<td>27.3</td>
</tr><tr role="row" class="odd">
<td id="7501927" class="sorting_1">Etar</td>
<td>7501927</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/BUL.gif" alt="Bulgaria">  BUL</td>
<td>Second League</td>
<td>4K</td>
<td>Professional</td>
<td>25,000</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#501080"></span></td>
<td>1924</td>
<td>25.9</td>
</tr><tr role="row" class="even">
<td id="459181" class="sorting_1">Etimesgut Bld.</td>
<td>459181</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/TUR.gif" alt="Turkey">  TUR</td>
<td>2. League Red</td>
<td>0</td>
<td>Professional</td>
<td>3,000</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#000000"></span></td>
<td>1990</td>
<td>25.8</td>
</tr><tr role="row" class="odd">
<td id="194" class="sorting_1">Eupen</td>
<td>194</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/BEL.gif" alt="Belgium">  BEL</td>
<td>Pro League</td>
<td>86K</td>
<td>Professional</td>
<td>8,363</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#000000"></span></td>
<td>1945</td>
<td>23.6</td>
</tr><tr role="row" class="even">
<td id="650" class="sorting_1">Everton</td>
<td>650</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ENG.gif" alt="England">  ENG</td>
<td>Premier Division</td>
<td>45M</td>
<td>Professional</td>
<td>39,572</td>
<td><span class="label" style="background:#F8F870"></span> <span class="label" style="background:#204098"></span></td>
<td>1878</td>
<td>27.4</td>
</tr><tr role="row" class="odd">
<td id="130782" class="sorting_1">Everton (CHI)</td>
<td>130782</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/CHI.gif" alt="Chile">  CHI</td>
<td>First Division</td>
<td>12K</td>
<td>Professional</td>
<td>21,913</td>
<td><span class="label" style="background:#F8D000"></span> <span class="label" style="background:#002080"></span></td>
<td>1909</td>
<td>23.1</td>
</tr><tr role="row" class="even">
<td id="1004" class="sorting_1">Excelsior</td>
<td>1004</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/NED.gif" alt="Holland">  NED</td>
<td>Eredivisie</td>
<td>0</td>
<td>Professional</td>
<td>4,500</td>
<td><span class="label" style="background:#C81050"></span> <span class="label" style="background:#101010"></span></td>
<td>1902</td>
<td>25.0</td>
</tr><tr role="row" class="odd">
<td id="651" class="sorting_1">Exeter</td>
<td>651</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ENG.gif" alt="England">  ENG</td>
<td>Sky Bet League Two</td>
<td>0</td>
<td>Professional</td>
<td>8,830</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#E00000"></span></td>
<td>1901</td>
<td>25.7</td>
</tr><tr role="row" class="even">
<td id="67096539" class="sorting_1">Extremadura</td>
<td>67096539</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ESP.gif" alt="Spain">  ESP</td>
<td>Second Division B4</td>
<td>0</td>
<td>Semi-Professional</td>
<td>12,000</td>
<td><span class="label" style="background:#E00000"></span> <span class="label" style="background:#0030A0"></span></td>
<td>2007</td>
<td>26.2</td>
</tr><tr role="row" class="odd">
<td id="130289" class="sorting_1">Eyupspor</td>
<td>130289</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/TUR.gif" alt="Turkey">  TUR</td>
<td>2. League Red</td>
<td>0</td>
<td>Professional</td>
<td>3,250</td>
<td><span class="label" style="background:#F8F000"></span> <span class="label" style="background:#503098"></span></td>
<td>1919</td>
<td>26.1</td>
</tr><tr role="row" class="even">
<td id="458631" class="sorting_1">F. Karagumruk</td>
<td>458631</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/TUR.gif" alt="Turkey">  TUR</td>
<td>2. League White</td>
<td>0</td>
<td>Professional</td>
<td>6,500</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F8F8F8"></span></td>
<td>1926</td>
<td>22.2</td>
</tr><tr role="row" class="odd">
<td id="729461" class="sorting_1">Fabril do Barreiro</td>
<td>729461</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/POR.gif" alt="Portugal">  POR</td>
<td>PT Championship</td>
<td>2K</td>
<td>Semi-Professional</td>
<td>22,500</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#008030"></span></td>
<td>1937</td>
<td>25.6</td>
</tr><tr role="row" class="even">
<td id="2410" class="sorting_1">Fafe</td>
<td>2410</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/POR.gif" alt="Portugal">  POR</td>
<td>Second League</td>
<td>43K</td>
<td>Professional</td>
<td>14,000</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
<td>1958</td>
<td>25.0</td>
</tr><tr role="row" class="odd">
<td id="130496" class="sorting_1">Fakel</td>
<td>130496</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/RUS.gif" alt="Russia">  RUS</td>
<td>First Division</td>
<td>0</td>
<td>Professional</td>
<td>34,800</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#0050D0"></span></td>
<td>1947</td>
<td>26.4</td>
</tr><tr role="row" class="even">
<td id="16009431" class="sorting_1">FAL Linz</td>
<td>16009431</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/AUT.gif" alt="Austria">  AUT</td>
<td>100000078</td>
<td>0</td>
<td>Amateur</td>
<td>3,000</td>
<td><span class="label" style="background:#205090"></span> <span class="label" style="background:#000000"></span></td>
<td>0</td>
<td>16.3</td>
</tr><tr role="row" class="odd">
<td id="1788" class="sorting_1">Falkenbergs FF</td>
<td>1788</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/SWE.gif" alt="Sweden">  SWE</td>
<td>Premier Division</td>
<td>27K</td>
<td>Professional</td>
<td>5,500</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#F8F000"></span></td>
<td>1928</td>
<td>24.9</td>
</tr><tr role="row" class="even">
<td id="1563" class="sorting_1">Falkirk</td>
<td>1563</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/SCO.gif" alt="Scotland">  SCO</td>
<td>Ladbrokes Championship</td>
<td>0</td>
<td>Professional</td>
<td>7,937</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#101838"></span></td>
<td>1876</td>
<td>24.0</td>
</tr><tr role="row" class="odd">
<td id="2397" class="sorting_1">Famalicao</td>
<td>2397</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/POR.gif" alt="Portugal">  POR</td>
<td>Second League</td>
<td>43K</td>
<td>Professional</td>
<td>10,000</td>
<td><span class="label" style="background:#0050D0"></span> <span class="label" style="background:#F8F8F8"></span></td>
<td>1931</td>
<td>26.7</td>
</tr><tr role="row" class="even">
<td id="1307" class="sorting_1">Fana</td>
<td>1307</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/NOR.gif" alt="Norway">  NOR</td>
<td>Second Division Group 3</td>
<td>0</td>
<td>Semi-Professional</td>
<td>1,200</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
<td>1920</td>
<td>21.1</td>
</tr><tr role="row" class="odd">
<td id="2197" class="sorting_1">Fano</td>
<td>2197</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ITA.gif" alt="Italy">  ITA</td>
<td>Serie C/B</td>
<td>43K</td>
<td>Professional</td>
<td>8,800</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#800020"></span></td>
<td>1906</td>
<td>24.5</td>
</tr><tr role="row" class="even">
<td id="1485" class="sorting_1">Farense</td>
<td>1485</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/POR.gif" alt="Portugal">  POR</td>
<td>PT Championship</td>
<td>17K</td>
<td>Semi-Professional</td>
<td>12,000</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F8F8F8"></span></td>
<td>1910</td>
<td>24.6</td>
</tr><tr role="row" class="odd">
<td id="2469" class="sorting_1">Fatima</td>
<td>2469</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/POR.gif" alt="Portugal">  POR</td>
<td>PT Championship</td>
<td>9K</td>
<td>Semi-Professional</td>
<td>1,545</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#800020"></span></td>
<td>1966</td>
<td>26.0</td>
</tr><tr role="row" class="even">
<td id="5605072" class="sorting_1">FC Admira Wacker Modling</td>
<td>5605072</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/AUT.gif" alt="Austria">  AUT</td>
<td>Premier Division</td>
<td>0</td>
<td>Professional</td>
<td>12,000</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#E00000"></span></td>
<td>2008</td>
<td>23.0</td>
</tr><tr role="row" class="odd">
<td id="1503" class="sorting_1">FC Brasov</td>
<td>1503</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ROU.gif" alt="Romania">  ROU</td>
<td>Liga II</td>
<td>0</td>
<td>Professional</td>
<td>8,000</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F8D000"></span></td>
<td>1936</td>
<td>22.9</td>
</tr><tr role="row" class="even">
<td id="137962" class="sorting_1">FC BW Linz</td>
<td>137962</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/AUT.gif" alt="Austria">  AUT</td>
<td>First Division</td>
<td>30K</td>
<td>Semi-Professional</td>
<td>2,000</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#0030A0"></span></td>
<td>1997</td>
<td>24.1</td>
</tr><tr role="row" class="odd">
<td id="5680142" class="sorting_1">FC Cape Town</td>
<td>5680142</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/RSA.gif" alt="South Africa">  RSA</td>
<td>National First Division</td>
<td>28K</td>
<td>Professional</td>
<td>11,000</td>
<td><span class="label" style="background:#F8F000"></span> <span class="label" style="background:#0010D8"></span></td>
<td>2006</td>
<td>24.8</td>
</tr><tr role="row" class="even">
<td id="85066817" class="sorting_1">FC Chambly-Oise</td>
<td>85066817</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/FRA.gif" alt="France">  FRA</td>
<td>National</td>
<td>49K</td>
<td>Semi-Professional</td>
<td>2,500</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#002080"></span></td>
<td>1989</td>
<td>26.9</td>
</tr><tr role="row" class="odd">
<td id="1905" class="sorting_1">FC Dallas</td>
<td>1905</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/USA.gif" alt="U.S.A.">  USA</td>
<td>MLS</td>
<td>2M</td>
<td>Professional</td>
<td>15,000</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#B00000"></span></td>
<td>1996</td>
<td>25.3</td>
</tr><tr role="row" class="even">
<td id="504" class="sorting_1">FC Fredericia</td>
<td>504</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/DEN.gif" alt="Denmark">  DEN</td>
<td>First Division</td>
<td>29K</td>
<td>Professional</td>
<td>4,000</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#E00000"></span></td>
<td>1991</td>
<td>22.6</td>
</tr><tr role="row" class="odd">
<td id="1007" class="sorting_1">FC Groningen</td>
<td>1007</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/NED.gif" alt="Holland">  NED</td>
<td>Eredivisie</td>
<td>861K</td>
<td>Professional</td>
<td>22,579</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#006048"></span></td>
<td>1971</td>
<td>24.4</td>
</tr><tr role="row" class="even">
<td id="1836" class="sorting_1">FC Gute</td>
<td>1836</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/SWE.gif" alt="Sweden">  SWE</td>
<td>Second Division NS</td>
<td>0</td>
<td>Semi-Professional</td>
<td>2,050</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
<td>1904</td>
<td>20.5</td>
</tr><tr role="row" class="odd">
<td id="90002300" class="sorting_1">FC Halifax</td>
<td>90002300</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ENG.gif" alt="England">  ENG</td>
<td>Vanarama North</td>
<td>40K</td>
<td>Semi-Professional</td>
<td>14,061</td>
<td><span class="label" style="background:#304078"></span> <span class="label" style="background:#0050D0"></span></td>
<td>2008</td>
<td>24.8</td>
</tr><tr role="row" class="even">
<td id="516" class="sorting_1">FC Helsingor</td>
<td>516</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/DEN.gif" alt="Denmark">  DEN</td>
<td>First Division</td>
<td>0</td>
<td>Semi-Professional</td>
<td>4,500</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#60C0F8"></span></td>
<td>1899</td>
<td>24.1</td>
</tr><tr role="row" class="odd">
<td id="2553" class="sorting_1">FC Hollviken</td>
<td>2553</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/SWE.gif" alt="Sweden">  SWE</td>
<td>First Division South</td>
<td>894</td>
<td>Semi-Professional</td>
<td>1,750</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#E00000"></span></td>
<td>1933</td>
<td>26.0</td>
</tr><tr role="row" class="even">
<td id="1300378" class="sorting_1">FC Inter</td>
<td>1300378</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/FIN.gif" alt="Finland">  FIN</td>
<td>Premier League</td>
<td>43K</td>
<td>Professional</td>
<td>9,372</td>
<td><span class="label" style="background:#0030A0"></span> <span class="label" style="background:#000000"></span></td>
<td>1990</td>
<td>27.4</td>
</tr><tr role="row" class="odd">
<td id="33004788" class="sorting_1">FC Jazz</td>
<td>33004788</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/FIN.gif" alt="Finland">  FIN</td>
<td>First Division</td>
<td>861</td>
<td>Semi-Professional</td>
<td>12,300</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#E00000"></span></td>
<td>2002</td>
<td>24.2</td>
</tr><tr role="row" class="even">
<td id="51051219" class="sorting_1">FC Juarez</td>
<td>51051219</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/MEX.gif" alt="Mexico">  MEX</td>
<td>Promotion League</td>
<td>768K</td>
<td>Professional</td>
<td>22,300</td>
<td><span class="label" style="background:#E00000"></span> <span class="label" style="background:#A0F070"></span></td>
<td>2015</td>
<td>27.4</td>
</tr><tr role="row" class="odd">
<td id="505" class="sorting_1">FC Kobenhavn</td>
<td>505</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/DEN.gif" alt="Denmark">  DEN</td>
<td>Superliga</td>
<td>3M</td>
<td>Professional</td>
<td>38,076</td>
<td><span class="label" style="background:#304078"></span> <span class="label" style="background:#F8F8F8"></span></td>
<td>1992</td>
<td>25.2</td>
</tr><tr role="row" class="even">
<td id="811" class="sorting_1">FC Lahti</td>
<td>811</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/FIN.gif" alt="Finland">  FIN</td>
<td>Premier League</td>
<td>9K</td>
<td>Professional</td>
<td>4,000</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#000000"></span></td>
<td>1996</td>
<td>24.6</td>
</tr><tr role="row" class="odd">
<td id="16123919" class="sorting_1">FC Liefering</td>
<td>16123919</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/AUT.gif" alt="Austria">  AUT</td>
<td>First Division</td>
<td>0</td>
<td>Professional</td>
<td>4,330</td>
<td><span class="label" style="background:#E00000"></span> <span class="label" style="background:#F8F8F8"></span></td>
<td>2012</td>
<td>18.2</td>
</tr><tr role="row" class="even">
<td id="2613" class="sorting_1">FC Linkoping City</td>
<td>2613</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/SWE.gif" alt="Sweden">  SWE</td>
<td>Second Division SS</td>
<td>1K</td>
<td>Semi-Professional</td>
<td>8,500</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#1068F8"></span></td>
<td>2012</td>
<td>25.4</td>
</tr><tr role="row" class="odd">
<td id="2005" class="sorting_1">FC Lorient</td>
<td>2005</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/FRA.gif" alt="France">  FRA</td>
<td>Ligue 1</td>
<td>4M</td>
<td>Professional</td>
<td>16,450</td>
<td><span class="label" style="background:#F86000"></span> <span class="label" style="background:#F87000"></span></td>
<td>1926</td>
<td>26.5</td>
</tr><tr role="row" class="even">
<td id="844" class="sorting_1">FC Metz</td>
<td>844</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/FRA.gif" alt="France">  FRA</td>
<td>Ligue 1</td>
<td>207K</td>
<td>Professional</td>
<td>25,636</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#800020"></span></td>
<td>1932</td>
<td>25.9</td>
</tr><tr role="row" class="odd">
<td id="526" class="sorting_1">FC Midtjylland</td>
<td>526</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/DEN.gif" alt="Denmark">  DEN</td>
<td>Superliga</td>
<td>578K</td>
<td>Professional</td>
<td>11,500</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#E01818"></span></td>
<td>1999</td>
<td>24.6</td>
</tr><tr role="row" class="even">
<td id="846" class="sorting_1">FC Nantes</td>
<td>846</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/FRA.gif" alt="France">  FRA</td>
<td>Ligue 1</td>
<td>5M</td>
<td>Professional</td>
<td>38,285</td>
<td><span class="label" style="background:#309060"></span> <span class="label" style="background:#F8F000"></span></td>
<td>1943</td>
<td>23.7</td>
</tr><tr role="row" class="odd">
<td id="932443" class="sorting_1">FC Nordsj?lland</td>
<td>932443</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/DEN.gif" alt="Denmark">  DEN</td>
<td>Superliga</td>
<td>867K</td>
<td>Professional</td>
<td>10,100</td>
<td><span class="label" style="background:#707090"></span> <span class="label" style="background:#B81018"></span></td>
<td>1991</td>
<td>21.9</td>
</tr><tr role="row" class="even">
<td id="158" class="sorting_1">FC Red Bull Salzburg</td>
<td>158</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/AUT.gif" alt="Austria">  AUT</td>
<td>Premier Division</td>
<td>4M</td>
<td>Professional</td>
<td>31,895</td>
<td><span class="label" style="background:#B00000"></span> <span class="label" style="background:#F8F8F8"></span></td>
<td>2005</td>
<td>22.6</td>
</tr><tr role="row" class="odd">
<td id="4300693" class="sorting_1">FC Rosengard</td>
<td>4300693</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/SWE.gif" alt="Sweden">  SWE</td>
<td>Second Division SG</td>
<td>0</td>
<td>Semi-Professional</td>
<td>2,000</td>
<td><span class="label" style="background:#002080"></span> <span class="label" style="background:#F8F8F8"></span></td>
<td>1917</td>
<td>23.2</td>
</tr><tr role="row" class="even">
<td id="943835" class="sorting_1">FC Roskilde</td>
<td>943835</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/DEN.gif" alt="Denmark">  DEN</td>
<td>First Division</td>
<td>29K</td>
<td>Semi-Professional</td>
<td>6,000</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
<td>1906</td>
<td>26.2</td>
</tr><tr role="row" class="odd">
<td id="2009" class="sorting_1">FC Sochaux-Montbe</td>
<td>2009</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/FRA.gif" alt="France">  FRA</td>
<td>Domino's Ligue 2</td>
<td>0</td>
<td>Professional</td>
<td>20,005</td>
<td><span class="label" style="background:#082040"></span> <span class="label" style="background:#F8D828"></span></td>
<td>1928</td>
<td>24.5</td>
</tr><tr role="row" class="even">
<td id="1513" class="sorting_1">FC Steaua</td>
<td>1513</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ROU.gif" alt="Romania">  ROU</td>
<td>Liga I</td>
<td>0</td>
<td>Professional</td>
<td>55,600</td>
<td><span class="label" style="background:#2858B0"></span> <span class="label" style="background:#C80000"></span></td>
<td>1947</td>
<td>26.9</td>
</tr><tr role="row" class="odd">
<td id="557" class="sorting_1">FC Svendborg</td>
<td>557</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/DEN.gif" alt="Denmark">  DEN</td>
<td>Second Division</td>
<td>0</td>
<td>Semi-Professional</td>
<td>7,700</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F85000"></span></td>
<td>1901</td>
<td>25.9</td>
</tr><tr role="row" class="even">
<td id="27032607" class="sorting_1">FC Sydvest</td>
<td>27032607</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/DEN.gif" alt="Denmark">  DEN</td>
<td>Second Division</td>
<td>0</td>
<td>Amateur</td>
<td>1,500</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F8F8F8"></span></td>
<td>2005</td>
<td>24.5</td>
</tr><tr role="row" class="odd">
<td id="2668" class="sorting_1">FC Trollhattan</td>
<td>2668</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/SWE.gif" alt="Sweden">  SWE</td>
<td>First Division South</td>
<td>0</td>
<td>Semi-Professional</td>
<td>5,100</td>
<td><span class="label" style="background:#C80000"></span> <span class="label" style="background:#000000"></span></td>
<td>2001</td>
<td>23.7</td>
</tr><tr role="row" class="even">
<td id="1009" class="sorting_1">FC Twente</td>
<td>1009</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/NED.gif" alt="Holland">  NED</td>
<td>Eredivisie</td>
<td>175K</td>
<td>Professional</td>
<td>30,014</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#C80000"></span></td>
<td>1965</td>
<td>21.8</td>
</tr><tr role="row" class="odd">
<td id="8611092" class="sorting_1">FC United</td>
<td>8611092</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ENG.gif" alt="England">  ENG</td>
<td>Vanarama North</td>
<td>9K</td>
<td>Semi-Professional</td>
<td>4,238</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#C80000"></span></td>
<td>2005</td>
<td>26.3</td>
</tr><tr role="row" class="even">
<td id="1010" class="sorting_1">FC Utrecht</td>
<td>1010</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/NED.gif" alt="Holland">  NED</td>
<td>Eredivisie</td>
<td>3M</td>
<td>Professional</td>
<td>24,426</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#E00000"></span></td>
<td>1970</td>
<td>23.4</td>
</tr><tr role="row" class="odd">
<td id="57047936" class="sorting_1">FC Viitorul</td>
<td>57047936</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ROU.gif" alt="Romania">  ROU</td>
<td>Liga I</td>
<td>0</td>
<td>Professional</td>
<td>4,500</td>
<td><span class="label" style="background:#081030"></span> <span class="label" style="background:#2850A0"></span></td>
<td>2009</td>
<td>22.8</td>
</tr><tr role="row" class="even">
<td id="57065222" class="sorting_1">FC Voluntari</td>
<td>57065222</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ROU.gif" alt="Romania">  ROU</td>
<td>Liga I</td>
<td>0</td>
<td>Professional</td>
<td>4,600</td>
<td><span class="label" style="background:#B00810"></span> <span class="label" style="background:#902830"></span></td>
<td>2010</td>
<td>27.3</td>
</tr><tr role="row" class="odd">
<td id="5603779" class="sorting_1">FC Wacker Innsbruck</td>
<td>5603779</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/AUT.gif" alt="Austria">  AUT</td>
<td>First Division</td>
<td>0</td>
<td>Professional</td>
<td>17,400</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#006030"></span></td>
<td>2002</td>
<td>25.4</td>
</tr><tr role="row" class="even">
<td id="1478" class="sorting_1">FCP</td>
<td>1478</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/POR.gif" alt="Portugal">  POR</td>
<td>Premier League</td>
<td>12M</td>
<td>Professional</td>
<td>50,035</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
<td>1893</td>
<td>24.8</td>
</tr><tr role="row" class="odd">
<td id="55000308" class="sorting_1">FCP B</td>
<td>55000308</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/POR.gif" alt="Portugal">  POR</td>
<td>Second League</td>
<td>26K</td>
<td>Professional</td>
<td>8,272</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
<td>0</td>
<td>19.4</td>
</tr><tr role="row" class="even">
<td id="199" class="sorting_1">FCV Dender</td>
<td>199</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/BEL.gif" alt="Belgium">  BEL</td>
<td>First Division</td>
<td>0</td>
<td>Semi-Professional</td>
<td>8,157</td>
<td><span class="label" style="background:#003068"></span> <span class="label" style="background:#0050D0"></span></td>
<td>1943</td>
<td>23.8</td>
</tr><tr role="row" class="odd">
<td id="2387" class="sorting_1">Feirense</td>
<td>2387</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/POR.gif" alt="Portugal">  POR</td>
<td>Premier League</td>
<td>65K</td>
<td>Professional</td>
<td>6,600</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#305098"></span></td>
<td>1918</td>
<td>24.0</td>
</tr><tr role="row" class="even">
<td id="2384" class="sorting_1">Felgueiras</td>
<td>2384</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/POR.gif" alt="Portugal">  POR</td>
<td>PT Championship</td>
<td>17K</td>
<td>Semi-Professional</td>
<td>14,000</td>
<td><span class="label" style="background:#E00808"></span> <span class="label" style="background:#0030A0"></span></td>
<td>2006</td>
<td>23.3</td>
</tr><tr role="row" class="odd">
<td id="1870" class="sorting_1">Fenerbahce</td>
<td>1870</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/TUR.gif" alt="Turkey">  TUR</td>
<td>Super League</td>
<td>0</td>
<td>Professional</td>
<td>50,509</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
<td>1907</td>
<td>26.8</td>
</tr><tr role="row" class="even">
<td id="5512337" class="sorting_1">Fenix</td>
<td>5512337</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/URU.gif" alt="Uruguay">  URU</td>
<td>First Division</td>
<td>4K</td>
<td>Professional</td>
<td>5,550</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#7050B0"></span></td>
<td>1916</td>
<td>24.5</td>
</tr><tr role="row" class="odd">
<td id="43058693" class="sorting_1">FeralpiSalo</td>
<td>43058693</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ITA.gif" alt="Italy">  ITA</td>
<td>Serie C/B</td>
<td>172K</td>
<td>Professional</td>
<td>2,364</td>
<td><span class="label" style="background:#4098F8"></span> <span class="label" style="background:#08C848"></span></td>
<td>1963</td>
<td>24.0</td>
</tr><tr role="row" class="even">
<td id="1055" class="sorting_1">Ferencvaros</td>
<td>1055</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/HUN.gif" alt="Hungary">  HUN</td>
<td>Division I</td>
<td>280K</td>
<td>Professional</td>
<td>22,000</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#207830"></span></td>
<td>1899</td>
<td>26.1</td>
</tr><tr role="row" class="odd">
<td id="86" class="sorting_1">Ferro</td>
<td>86</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ARG.gif" alt="Argentina">  ARG</td>
<td>Second Division</td>
<td>27K</td>
<td>Professional</td>
<td>24,800</td>
<td><span class="label" style="background:#108830"></span> <span class="label" style="background:#00A030"></span></td>
<td>1904</td>
<td>27.0</td>
</tr><tr role="row" class="even">
<td id="1727" class="sorting_1">Ferrol</td>
<td>1727</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ESP.gif" alt="Spain">  ESP</td>
<td>Second Division B1</td>
<td>11K</td>
<td>Professional</td>
<td>12,042</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#00A030"></span></td>
<td>1919</td>
<td>24.5</td>
</tr><tr role="row" class="odd">
<td id="457419" class="sorting_1">Fethiyespor</td>
<td>457419</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/TUR.gif" alt="Turkey">  TUR</td>
<td>2. League White</td>
<td>0</td>
<td>Professional</td>
<td>8,372</td>
<td><span class="label" style="background:#E00000"></span> <span class="label" style="background:#002060"></span></td>
<td>1933</td>
<td>24.4</td>
</tr><tr role="row" class="even">
<td id="1013" class="sorting_1">Feyenoord</td>
<td>1013</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/NED.gif" alt="Holland">  NED</td>
<td>Eredivisie</td>
<td>2M</td>
<td>Professional</td>
<td>51,177</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#E00000"></span></td>
<td>1908</td>
<td>24.6</td>
</tr><tr role="row" class="odd">
<td id="15055151" class="sorting_1">FFA COE</td>
<td>15055151</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/AUS.gif" alt="Australia">  AUS</td>
<td>100000363</td>
<td>0</td>
<td>Amateur</td>
<td>1,000</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
<td>1981</td>
<td>17.0</td>
</tr><tr role="row" class="even">
<td id="1070" class="sorting_1">FH</td>
<td>1070</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ISL.gif" alt="Iceland">  ISL</td>
<td>Premier Division</td>
<td>134K</td>
<td>Professional</td>
<td>6,450</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F8F8F8"></span></td>
<td>1929</td>
<td>24.8</td>
</tr><tr role="row" class="odd">
<td id="1128" class="sorting_1">Fidelis Andria</td>
<td>1128</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ITA.gif" alt="Italy">  ITA</td>
<td>Serie C/C</td>
<td>60K</td>
<td>Professional</td>
<td>15,000</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#0050D0"></span></td>
<td>1920</td>
<td>23.8</td>
</tr><tr role="row" class="even">
<td id="301306" class="sorting_1">FIG</td>
<td>301306</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/BRA.gif" alt="Brazil">  BRA</td>
<td>First Division</td>
<td>178K</td>
<td>Professional</td>
<td>19,069</td>
<td><span class="label" style="background:#F8F000"></span> <span class="label" style="background:#B00000"></span></td>
<td>1921</td>
<td>25.9</td>
</tr><tr role="row" class="odd">
<td id="1300918" class="sorting_1">Finn Harps</td>
<td>1300918</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/IRL.gif" alt="Ireland">  IRL</td>
<td>Premier Division</td>
<td>0</td>
<td>Semi-Professional</td>
<td>7,500</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#0050D0"></span></td>
<td>1954</td>
<td>26.9</td>
</tr><tr role="row" class="even">
<td id="1309" class="sorting_1">Finnsnes</td>
<td>1309</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/NOR.gif" alt="Norway">  NOR</td>
<td>Second Division Group 1</td>
<td>0</td>
<td>Semi-Professional</td>
<td>3,400</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#28B080"></span></td>
<td>1938</td>
<td>25.5</td>
</tr><tr role="row" class="odd">
<td id="1129" class="sorting_1">Fiorentina</td>
<td>1129</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ITA.gif" alt="Italy">  ITA</td>
<td>Serie A</td>
<td>9M</td>
<td>Professional</td>
<td>46,366</td>
<td><span class="label" style="background:#904090"></span> <span class="label" style="background:#604090"></span></td>
<td>1926</td>
<td>25.2</td>
</tr><tr role="row" class="even">
<td id="7842823" class="sorting_1">Fjar?abygg?</td>
<td>7842823</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ISL.gif" alt="Iceland">  ISL</td>
<td>First Division</td>
<td>17K</td>
<td>Semi-Professional</td>
<td>1,000</td>
<td><span class="label" style="background:#202030"></span> <span class="label" style="background:#E00000"></span></td>
<td>2001</td>
<td>23.5</td>
</tr><tr role="row" class="odd">
<td id="7841979" class="sorting_1">Fjolnir</td>
<td>7841979</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ISL.gif" alt="Iceland">  ISL</td>
<td>Premier Division</td>
<td>13K</td>
<td>Semi-Professional</td>
<td>1,030</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#F8F000"></span></td>
<td>1988</td>
<td>24.2</td>
</tr><tr role="row" class="even">
<td id="152" class="sorting_1">FK Austria Wien</td>
<td>152</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/AUT.gif" alt="Austria">  AUT</td>
<td>Premier Division</td>
<td>3M</td>
<td>Professional</td>
<td>17,500</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#500080"></span></td>
<td>1911</td>
<td>24.7</td>
</tr><tr role="row" class="odd">
<td id="93053134" class="sorting_1">FK Karlskrona</td>
<td>93053134</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/SWE.gif" alt="Sweden">  SWE</td>
<td>Second Division SG</td>
<td>0</td>
<td>Semi-Professional</td>
<td>3,000</td>
<td><span class="label" style="background:#F85000"></span> <span class="label" style="background:#F85000"></span></td>
<td>2012</td>
<td>25.5</td>
</tr><tr role="row" class="even">
<td id="322" class="sorting_1">FLA</td>
<td>322</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/BRA.gif" alt="Brazil">  BRA</td>
<td>First Division</td>
<td>5M</td>
<td>Professional</td>
<td>78,838</td>
<td><span class="label" style="background:#E00000"></span> <span class="label" style="background:#0050D0"></span></td>
<td>1895</td>
<td>26.6</td>
</tr><tr role="row" class="odd">
<td id="3101508" class="sorting_1">Flandria</td>
<td>3101508</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ARG.gif" alt="Argentina">  ARG</td>
<td>Second Division</td>
<td>14K</td>
<td>Professional</td>
<td>5,000</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F8F000"></span></td>
<td>1941</td>
<td>28.5</td>
</tr><tr role="row" class="even">
<td id="5103834" class="sorting_1">Fleetwood</td>
<td>5103834</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ENG.gif" alt="England">  ENG</td>
<td>Sky Bet League One</td>
<td>10K</td>
<td>Professional</td>
<td>5,532</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#E00000"></span></td>
<td>1908</td>
<td>23.9</td>
</tr><tr role="row" class="odd">
<td id="137947" class="sorting_1">Floridsdorfer AC</td>
<td>137947</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/AUT.gif" alt="Austria">  AUT</td>
<td>First Division</td>
<td>0</td>
<td>Professional</td>
<td>3,660</td>
<td><span class="label" style="background:#0050D0"></span> <span class="label" style="background:#F8F8F8"></span></td>
<td>1904</td>
<td>22.2</td>
</tr><tr role="row" class="even">
<td id="5000210" class="sorting_1">Floro</td>
<td>5000210</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/NOR.gif" alt="Norway">  NOR</td>
<td>Second Division Group 3</td>
<td>948</td>
<td>Semi-Professional</td>
<td>1,500</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#0840B0"></span></td>
<td>1912</td>
<td>21.9</td>
</tr><tr role="row" class="odd">
<td id="766164" class="sorting_1">Floy</td>
<td>766164</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/NOR.gif" alt="Norway">  NOR</td>
<td>Second Division Group 4</td>
<td>28K</td>
<td>Semi-Professional</td>
<td>4,000</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#0050D0"></span></td>
<td>1950</td>
<td>23.4</td>
</tr><tr role="row" class="even">
<td id="323" class="sorting_1">FLU</td>
<td>323</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/BRA.gif" alt="Brazil">  BRA</td>
<td>First Division</td>
<td>1M</td>
<td>Professional</td>
<td>78,838</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#E00000"></span></td>
<td>1902</td>
<td>26.2</td>
</tr><tr role="row" class="odd">
<td id="1131" class="sorting_1">Foggia</td>
<td>1131</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ITA.gif" alt="Italy">  ITA</td>
<td>Serie C/C</td>
<td>172K</td>
<td>Professional</td>
<td>25,085</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F00000"></span></td>
<td>1920</td>
<td>25.9</td>
</tr><tr role="row" class="even">
<td id="755788" class="sorting_1">Follo</td>
<td>755788</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/NOR.gif" alt="Norway">  NOR</td>
<td>Second Division Group 1</td>
<td>0</td>
<td>Semi-Professional</td>
<td>6,000</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#60C0F8"></span></td>
<td>2000</td>
<td>21.1</td>
</tr><tr role="row" class="odd">
<td id="43058718" class="sorting_1">Fondi</td>
<td>43058718</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ITA.gif" alt="Italy">  ITA</td>
<td>Serie C/C</td>
<td>9K</td>
<td>Professional</td>
<td>3,000</td>
<td><span class="label" style="background:#E00000"></span> <span class="label" style="background:#002060"></span></td>
<td>1922</td>
<td>24.6</td>
</tr><tr role="row" class="even">
<td id="104750" class="sorting_1">FOR</td>
<td>104750</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/BRA.gif" alt="Brazil">  BRA</td>
<td>Third Division</td>
<td>95K</td>
<td>Professional</td>
<td>64,846</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#60C0F8"></span></td>
<td>1918</td>
<td>28.0</td>
</tr><tr role="row" class="odd">
<td id="1300615" class="sorting_1">Forde</td>
<td>1300615</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/NOR.gif" alt="Norway">  NOR</td>
<td>Second Division Group 3</td>
<td>0</td>
<td>Semi-Professional</td>
<td>1,000</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F8F8F8"></span></td>
<td>1920</td>
<td>23.6</td>
</tr><tr role="row" class="even">
<td id="109206" class="sorting_1">Forest Green</td>
<td>109206</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ENG.gif" alt="England">  ENG</td>
<td>Vanarama National</td>
<td>17K</td>
<td>Professional</td>
<td>5,147</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
<td>1889</td>
<td>24.9</td>
</tr><tr role="row" class="odd">
<td id="57031881" class="sorting_1">Foresta Suceava</td>
<td>57031881</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ROU.gif" alt="Romania">  ROU</td>
<td>Liga II</td>
<td>0</td>
<td>Professional</td>
<td>12,000</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#F8F8F8"></span></td>
<td>1946</td>
<td>25.3</td>
</tr><tr role="row" class="even">
<td id="1564" class="sorting_1">Forfar</td>
<td>1564</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/SCO.gif" alt="Scotland">  SCO</td>
<td>Ladbrokes League 2</td>
<td>55K</td>
<td>Semi-Professional</td>
<td>6,777</td>
<td><span class="label" style="background:#6098C8"></span> <span class="label" style="background:#082858"></span></td>
<td>1885</td>
<td>25.0</td>
</tr><tr role="row" class="odd">
<td id="2198" class="sorting_1">Forli</td>
<td>2198</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ITA.gif" alt="Italy">  ITA</td>
<td>Serie C/B</td>
<td>43K</td>
<td>Professional</td>
<td>3,466</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#C80000"></span></td>
<td>1919</td>
<td>22.5</td>
</tr><tr role="row" class="even">
<td id="76019314" class="sorting_1">Fortaleza F.C.</td>
<td>76019314</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/COL.gif" alt="Colombia">  COL</td>
<td>First Division</td>
<td>346K</td>
<td>Professional</td>
<td>10,000</td>
<td><span class="label" style="background:#082040"></span> <span class="label" style="background:#E00000"></span></td>
<td>2011</td>
<td>26.2</td>
</tr><tr role="row" class="odd">
<td id="1014" class="sorting_1">Fortuna</td>
<td>1014</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/NED.gif" alt="Holland">  NED</td>
<td>Jupiler League</td>
<td>8K</td>
<td>Professional</td>
<td>10,300</td>
<td><span class="label" style="background:#D0C028"></span> <span class="label" style="background:#F8E028"></span></td>
<td>1968</td>
<td>22.7</td>
</tr><tr role="row" class="even">
<td id="922" class="sorting_1">Fortuna Koln</td>
<td>922</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/GER.gif" alt="Germany">  GER</td>
<td>Third Division</td>
<td>0</td>
<td>Professional</td>
<td>14,944</td>
<td><span class="label" style="background:#E00000"></span> <span class="label" style="background:#F8F8F8"></span></td>
<td>1948</td>
<td>26.7</td>
</tr><tr role="row" class="odd">
<td id="1071" class="sorting_1">Fram</td>
<td>1071</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ISL.gif" alt="Iceland">  ISL</td>
<td>First Division</td>
<td>17K</td>
<td>Semi-Professional</td>
<td>500</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#0050D0"></span></td>
<td>1908</td>
<td>23.4</td>
</tr><tr role="row" class="even">
<td id="1339" class="sorting_1">Fram Larvik</td>
<td>1339</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/NOR.gif" alt="Norway">  NOR</td>
<td>Second Division Group 4</td>
<td>5K</td>
<td>Semi-Professional</td>
<td>5,000</td>
<td><span class="label" style="background:#0038F8"></span> <span class="label" style="background:#F00000"></span></td>
<td>1894</td>
<td>25.9</td>
</tr><tr role="row" class="odd">
<td id="912" class="sorting_1">Frankfurt</td>
<td>912</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/GER.gif" alt="Germany">  GER</td>
<td>First Division</td>
<td>2M</td>
<td>Professional</td>
<td>51,500</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F8F8F8"></span></td>
<td>1899</td>
<td>25.0</td>
</tr><tr role="row" class="even">
<td id="930" class="sorting_1">Frankfurt Erlenbruch</td>
<td>930</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/GER.gif" alt="Germany">  GER</td>
<td>Third Division</td>
<td>0</td>
<td>Professional</td>
<td>12,542</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#2068B0"></span></td>
<td>1899</td>
<td>25.4</td>
</tr><tr role="row" class="odd">
<td id="2409" class="sorting_1">Freamunde</td>
<td>2409</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/POR.gif" alt="Portugal">  POR</td>
<td>Second League</td>
<td>43K</td>
<td>Professional</td>
<td>3,919</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#0030A0"></span></td>
<td>1933</td>
<td>24.3</td>
</tr><tr role="row" class="even">
<td id="933929" class="sorting_1">Fredensborg</td>
<td>933929</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/DEN.gif" alt="Denmark">  DEN</td>
<td>Second Division</td>
<td>0</td>
<td>Amateur</td>
<td>2,000</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
<td>1908</td>
<td>25.0</td>
</tr><tr role="row" class="odd">
<td id="1312" class="sorting_1">Fredrikstad</td>
<td>1312</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/NOR.gif" alt="Norway">  NOR</td>
<td>First Division</td>
<td>71K</td>
<td>Professional</td>
<td>12,525</td>
<td><span class="label" style="background:#E00000"></span> <span class="label" style="background:#F8F8F8"></span></td>
<td>1903</td>
<td>24.0</td>
</tr><tr role="row" class="even">
<td id="944" class="sorting_1">Freiburg</td>
<td>944</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/GER.gif" alt="Germany">  GER</td>
<td>First Division</td>
<td>1M</td>
<td>Professional</td>
<td>24,000</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#E00000"></span></td>
<td>1904</td>
<td>24.4</td>
</tr><tr role="row" class="odd">
<td id="507" class="sorting_1">Frem</td>
<td>507</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/DEN.gif" alt="Denmark">  DEN</td>
<td>Second Division</td>
<td>0</td>
<td>Semi-Professional</td>
<td>12,000</td>
<td><span class="label" style="background:#002080"></span> <span class="label" style="background:#E00000"></span></td>
<td>1886</td>
<td>25.6</td>
</tr><tr role="row" class="even">
<td id="508" class="sorting_1">Fremad Amager</td>
<td>508</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/DEN.gif" alt="Denmark">  DEN</td>
<td>First Division</td>
<td>6K</td>
<td>Semi-Professional</td>
<td>7,200</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#0050D0"></span></td>
<td>1910</td>
<td>25.9</td>
</tr><tr role="row" class="odd">
<td id="1313" class="sorting_1">Frigg</td>
<td>1313</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/NOR.gif" alt="Norway">  NOR</td>
<td>Second Division Group 3</td>
<td>0</td>
<td>Semi-Professional</td>
<td>1,500</td>
<td><span class="label" style="background:#002080"></span> <span class="label" style="background:#F8F8F8"></span></td>
<td>1904</td>
<td>26.7</td>
</tr><tr role="row" class="even">
<td id="4300655" class="sorting_1">Friska Viljor FC</td>
<td>4300655</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/SWE.gif" alt="Sweden">  SWE</td>
<td>Second Division N</td>
<td>0</td>
<td>Semi-Professional</td>
<td>1,500</td>
<td><span class="label" style="background:#F8F000"></span> <span class="label" style="background:#000000"></span></td>
<td>1994</td>
<td>21.2</td>
</tr><tr role="row" class="odd">
<td id="2199" class="sorting_1">Frosinone</td>
<td>2199</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ITA.gif" alt="Italy">  ITA</td>
<td>Serie B</td>
<td>1M</td>
<td>Professional</td>
<td>9,563</td>
<td><span class="label" style="background:#0050D0"></span> <span class="label" style="background:#F8F838"></span></td>
<td>1928</td>
<td>26.3</td>
</tr><tr role="row" class="even">
<td id="136181" class="sorting_1">Frydek-Mistek</td>
<td>136181</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/CZE.gif" alt="Czech Republic">  CZE</td>
<td>Second Division</td>
<td>160K</td>
<td>Professional</td>
<td>12,400</td>
<td><span class="label" style="background:#0050D0"></span> <span class="label" style="background:#F8F8F8"></span></td>
<td>1919</td>
<td>24.6</td>
</tr><tr role="row" class="odd">
<td id="5682513" class="sorting_1">FS Stars</td>
<td>5682513</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/RSA.gif" alt="South Africa">  RSA</td>
<td>South African Premiership</td>
<td>141K</td>
<td>Professional</td>
<td>20,000</td>
<td><span class="label" style="background:#002060"></span> <span class="label" style="background:#E00808"></span></td>
<td>1979</td>
<td>26.9</td>
</tr><tr role="row" class="even">
<td id="109017" class="sorting_1">Fuenlabrada</td>
<td>109017</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ESP.gif" alt="Spain">  ESP</td>
<td>Second Division B2</td>
<td>0</td>
<td>Professional</td>
<td>2,500</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#0078F8"></span></td>
<td>1975</td>
<td>27.0</td>
</tr><tr role="row" class="odd">
<td id="654" class="sorting_1">Fulham</td>
<td>654</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ENG.gif" alt="England">  ENG</td>
<td>Sky Bet Championship</td>
<td>400K</td>
<td>Professional</td>
<td>25,700</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
<td>1879</td>
<td>25.7</td>
</tr><tr role="row" class="even">
<td id="23147325" class="sorting_1">Fuli</td>
<td>23147325</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/CHN.gif" alt="China">  CHN</td>
<td>Super League</td>
<td>2M</td>
<td>Professional</td>
<td>30,000</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#B0E0F8"></span></td>
<td>2011</td>
<td>26.3</td>
</tr><tr role="row" class="odd">
<td id="1300641" class="sorting_1">Fylkir</td>
<td>1300641</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ISL.gif" alt="Iceland">  ISL</td>
<td>Premier Division</td>
<td>34K</td>
<td>Semi-Professional</td>
<td>2,780</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#F84000"></span></td>
<td>1967</td>
<td>25.0</td>
</tr><tr role="row" class="even">
<td id="53072600" class="sorting_1">Fyllingsdalen</td>
<td>53072600</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/NOR.gif" alt="Norway">  NOR</td>
<td>Second Division Group 3</td>
<td>0</td>
<td>Semi-Professional</td>
<td>4,250</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#8000F8"></span></td>
<td>2011</td>
<td>22.6</td>
</tr><tr role="row" class="odd">
<td id="734127" class="sorting_1">Gafanha</td>
<td>734127</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/POR.gif" alt="Portugal">  POR</td>
<td>PT Championship</td>
<td>9K</td>
<td>Semi-Professional</td>
<td>2,000</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#0030A0"></span></td>
<td>1957</td>
<td>24.3</td>
</tr><tr role="row" class="even">
<td id="84107205" class="sorting_1">Gafetense</td>
<td>84107205</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/POR.gif" alt="Portugal">  POR</td>
<td>PT Championship</td>
<td>861</td>
<td>Semi-Professional</td>
<td>500</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
<td>1979</td>
<td>22.5</td>
</tr><tr role="row" class="odd">
<td id="4001092" class="sorting_1">Gainsborough</td>
<td>4001092</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ENG.gif" alt="England">  ENG</td>
<td>Vanarama North</td>
<td>0</td>
<td>Semi-Professional</td>
<td>4,304</td>
<td><span class="label" style="background:#2858B0"></span> <span class="label" style="background:#2858B0"></span></td>
<td>1873</td>
<td>24.7</td>
</tr><tr role="row" class="even">
<td id="2153" class="sorting_1">GAIS</td>
<td>2153</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/SWE.gif" alt="Sweden">  SWE</td>
<td>First Division Elite</td>
<td>13K</td>
<td>Professional</td>
<td>18,400</td>
<td><span class="label" style="background:#18B050"></span> <span class="label" style="background:#000000"></span></td>
<td>1894</td>
<td>24.3</td>
</tr><tr role="row" class="odd">
<td id="1871" class="sorting_1">Galatasaray</td>
<td>1871</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/TUR.gif" alt="Turkey">  TUR</td>
<td>Super League</td>
<td>258K</td>
<td>Professional</td>
<td>52,652</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
<td>1905</td>
<td>26.7</td>
</tr><tr role="row" class="even">
<td id="1795" class="sorting_1">Gallivare Malmbergets FF</td>
<td>1795</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/SWE.gif" alt="Sweden">  SWE</td>
<td>Second Division N</td>
<td>0</td>
<td>Semi-Professional</td>
<td>1,300</td>
<td><span class="label" style="background:#303030"></span> <span class="label" style="background:#303030"></span></td>
<td>2005</td>
<td>21.2</td>
</tr><tr role="row" class="odd">
<td id="593" class="sorting_1">Galway Utd</td>
<td>593</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/IRL.gif" alt="Ireland">  IRL</td>
<td>Premier Division</td>
<td>0</td>
<td>Professional</td>
<td>5,000</td>
<td><span class="label" style="background:#B8D8E8"></span> <span class="label" style="background:#702020"></span></td>
<td>1937</td>
<td>22.3</td>
</tr><tr role="row" class="even">
<td id="4300022" class="sorting_1">Gamla Upsala SK</td>
<td>4300022</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/SWE.gif" alt="Sweden">  SWE</td>
<td>Second Division NS</td>
<td>0</td>
<td>Semi-Professional</td>
<td>2,000</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F8F000"></span></td>
<td>1947</td>
<td>24.2</td>
</tr><tr role="row" class="odd">
<td id="66006663" class="sorting_1">Gangwon</td>
<td>66006663</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/KOR.gif" alt="South Korea">  KOR</td>
<td>K LEAGUE Challenge</td>
<td>160K</td>
<td>Professional</td>
<td>21,274</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F84000"></span></td>
<td>2008</td>
<td>27.0</td>
</tr><tr role="row" class="even">
<td id="655" class="sorting_1">Gateshead</td>
<td>655</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ENG.gif" alt="England">  ENG</td>
<td>Vanarama National</td>
<td>35K</td>
<td>Professional</td>
<td>11,800</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F8F8F8"></span></td>
<td>1977</td>
<td>22.3</td>
</tr><tr role="row" class="odd">
<td id="109031" class="sorting_1">Gava</td>
<td>109031</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ESP.gif" alt="Spain">  ESP</td>
<td>Second Division B3</td>
<td>0</td>
<td>Semi-Professional</td>
<td>4,500</td>
<td><span class="label" style="background:#0050D0"></span> <span class="label" style="background:#901000"></span></td>
<td>1921</td>
<td>24.4</td>
</tr><tr role="row" class="even">
<td id="138153" class="sorting_1">Gaz Metan</td>
<td>138153</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ROU.gif" alt="Romania">  ROU</td>
<td>Liga I</td>
<td>0</td>
<td>Professional</td>
<td>7,500</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F8F8F8"></span></td>
<td>1945</td>
<td>26.9</td>
</tr><tr role="row" class="odd">
<td id="130341" class="sorting_1">Gaziantep Bld.</td>
<td>130341</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/TUR.gif" alt="Turkey">  TUR</td>
<td>1. League</td>
<td>7K</td>
<td>Professional</td>
<td>16,981</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
<td>1988</td>
<td>26.7</td>
</tr><tr role="row" class="even">
<td id="1872" class="sorting_1">Gaziantepspor</td>
<td>1872</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/TUR.gif" alt="Turkey">  TUR</td>
<td>Super League</td>
<td>194K</td>
<td>Professional</td>
<td>16,981</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
<td>1969</td>
<td>26.0</td>
</tr><tr role="row" class="odd">
<td id="3200585" class="sorting_1">Geel</td>
<td>3200585</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/BEL.gif" alt="Belgium">  BEL</td>
<td>First Division</td>
<td>4K</td>
<td>Semi-Professional</td>
<td>10,022</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#0050D0"></span></td>
<td>1969</td>
<td>21.7</td>
</tr><tr role="row" class="even">
<td id="1792" class="sorting_1">Gefle IF</td>
<td>1792</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/SWE.gif" alt="Sweden">  SWE</td>
<td>Premier Division</td>
<td>45K</td>
<td>Professional</td>
<td>6,400</td>
<td><span class="label" style="background:#98D0F0"></span> <span class="label" style="background:#F8F8F8"></span></td>
<td>1882</td>
<td>24.1</td>
</tr><tr role="row" class="odd">
<td id="5317918" class="sorting_1">Gelios</td>
<td>5317918</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/UKR.gif" alt="Ukraine">  UKR</td>
<td>First League</td>
<td>8K</td>
<td>Professional</td>
<td>4,924</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#88E830"></span></td>
<td>2002</td>
<td>26.6</td>
</tr><tr role="row" class="even">
<td id="920" class="sorting_1">Gelsenkirchen</td>
<td>920</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/GER.gif" alt="Germany">  GER</td>
<td>First Division</td>
<td>9M</td>
<td>Professional</td>
<td>62,271</td>
<td><span class="label" style="background:#0030A0"></span> <span class="label" style="background:#0030A0"></span></td>
<td>1904</td>
<td>25.2</td>
</tr><tr role="row" class="odd">
<td id="1873" class="sorting_1">Genclerbirligi</td>
<td>1873</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/TUR.gif" alt="Turkey">  TUR</td>
<td>Super League</td>
<td>65K</td>
<td>Professional</td>
<td>19,209</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
<td>1923</td>
<td>25.0</td>
</tr><tr role="row" class="even">
<td id="1132" class="sorting_1">Genoa</td>
<td>1132</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ITA.gif" alt="Italy">  ITA</td>
<td>Serie A</td>
<td>4M</td>
<td>Professional</td>
<td>36,599</td>
<td><span class="label" style="background:#103048"></span> <span class="label" style="background:#B82838"></span></td>
<td>1893</td>
<td>25.6</td>
</tr><tr role="row" class="odd">
<td id="109009" class="sorting_1">Gernika</td>
<td>109009</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ESP.gif" alt="Spain">  ESP</td>
<td>Second Division B2</td>
<td>0</td>
<td>Semi-Professional</td>
<td>2,500</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F8F8F8"></span></td>
<td>1922</td>
<td>25.6</td>
</tr><tr role="row" class="even">
<td id="1710" class="sorting_1">Getafe</td>
<td>1710</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ESP.gif" alt="Spain">  ESP</td>
<td>Second Division</td>
<td>0</td>
<td>Professional</td>
<td>17,700</td>
<td><span class="label" style="background:#002060"></span> <span class="label" style="background:#2068B0"></span></td>
<td>1983</td>
<td>27.9</td>
</tr><tr role="row" class="odd">
<td id="102029" class="sorting_1">Getxo</td>
<td>102029</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ESP.gif" alt="Spain">  ESP</td>
<td>Second Division B2</td>
<td>0</td>
<td>Semi-Professional</td>
<td>1,200</td>
<td><span class="label" style="background:#E00000"></span> <span class="label" style="background:#000000"></span></td>
<td>1909</td>
<td>27.8</td>
</tr><tr role="row" class="even">
<td id="2015" class="sorting_1">GFC Ajaccio</td>
<td>2015</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/FRA.gif" alt="France">  FRA</td>
<td>Domino's Ligue 2</td>
<td>0</td>
<td>Professional</td>
<td>5,000</td>
<td><span class="label" style="background:#203050"></span> <span class="label" style="background:#F03838"></span></td>
<td>1910</td>
<td>27.1</td>
</tr><tr role="row" class="odd">
<td id="314774" class="sorting_1">GFL</td>
<td>314774</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/BRA.gif" alt="Brazil">  BRA</td>
<td>Third Division</td>
<td>24K</td>
<td>Professional</td>
<td>15,769</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#0050D0"></span></td>
<td>1998</td>
<td>21.5</td>
</tr><tr role="row" class="even">
<td id="7983711" class="sorting_1">Giana Erminio</td>
<td>7983711</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ITA.gif" alt="Italy">  ITA</td>
<td>Serie C/A</td>
<td>86K</td>
<td>Professional</td>
<td>3,766</td>
<td><span class="label" style="background:#60C0F8"></span> <span class="label" style="background:#F8F8F8"></span></td>
<td>1909</td>
<td>24.5</td>
</tr><tr role="row" class="odd">
<td id="1791" class="sorting_1">GIF Sundsvall</td>
<td>1791</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/SWE.gif" alt="Sweden">  SWE</td>
<td>Premier Division</td>
<td>4K</td>
<td>Professional</td>
<td>8,500</td>
<td><span class="label" style="background:#2858B0"></span> <span class="label" style="background:#002060"></span></td>
<td>1903</td>
<td>24.1</td>
</tr><tr role="row" class="even">
<td id="1481" class="sorting_1">Gil Vicente</td>
<td>1481</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/POR.gif" alt="Portugal">  POR</td>
<td>Second League</td>
<td>103K</td>
<td>Professional</td>
<td>12,504</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#E00808"></span></td>
<td>1924</td>
<td>22.1</td>
</tr><tr role="row" class="odd">
<td id="656" class="sorting_1">Gillingham</td>
<td>656</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ENG.gif" alt="England">  ENG</td>
<td>Sky Bet League One</td>
<td>50K</td>
<td>Professional</td>
<td>11,440</td>
<td><span class="label" style="background:#002060"></span> <span class="label" style="background:#0840B0"></span></td>
<td>1893</td>
<td>24.9</td>
</tr><tr role="row" class="even">
<td id="102957" class="sorting_1">Gimnasia (Jujuy)</td>
<td>102957</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ARG.gif" alt="Argentina">  ARG</td>
<td>Second Division</td>
<td>115K</td>
<td>Professional</td>
<td>25,000</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#60C0F8"></span></td>
<td>1931</td>
<td>26.8</td>
</tr><tr role="row" class="odd">
<td id="87" class="sorting_1">Gimnasia (LP)</td>
<td>87</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ARG.gif" alt="Argentina">  ARG</td>
<td>Premier Division</td>
<td>461K</td>
<td>Professional</td>
<td>24,544</td>
<td><span class="label" style="background:#002060"></span> <span class="label" style="background:#F8F8F8"></span></td>
<td>1887</td>
<td>27.4</td>
</tr><tr role="row" class="even">
<td id="109043" class="sorting_1">Ginasio de Alcobaca</td>
<td>109043</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/POR.gif" alt="Portugal">  POR</td>
<td>PT Championship</td>
<td>861</td>
<td>Semi-Professional</td>
<td>5,000</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#0050D0"></span></td>
<td>1946</td>
<td>23.5</td>
</tr><tr role="row" class="odd">
<td id="130367" class="sorting_1">Giresunspor</td>
<td>130367</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/TUR.gif" alt="Turkey">  TUR</td>
<td>1. League</td>
<td>14K</td>
<td>Professional</td>
<td>11,060</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
<td>1967</td>
<td>27.2</td>
</tr><tr role="row" class="even">
<td id="485831" class="sorting_1">Girnyk-Sport</td>
<td>485831</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/UKR.gif" alt="Ukraine">  UKR</td>
<td>First League</td>
<td>0</td>
<td>Professional</td>
<td>2,000</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#E00000"></span></td>
<td>1989</td>
<td>24.7</td>
</tr><tr role="row" class="odd">
<td id="814089" class="sorting_1">Girona</td>
<td>814089</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ESP.gif" alt="Spain">  ESP</td>
<td>Second Division</td>
<td>67K</td>
<td>Professional</td>
<td>9,286</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#E00000"></span></td>
<td>1930</td>
<td>25.7</td>
</tr><tr role="row" class="even">
<td id="851" class="sorting_1">Girondins de Bordeaux</td>
<td>851</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/FRA.gif" alt="France">  FRA</td>
<td>Ligue 1</td>
<td>3M</td>
<td>Professional</td>
<td>42,115</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#101838"></span></td>
<td>1881</td>
<td>24.7</td>
</tr><tr role="row" class="odd">
<td id="53104744" class="sorting_1">Gjovik-Lyn</td>
<td>53104744</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/NOR.gif" alt="Norway">  NOR</td>
<td>Second Division Group 2</td>
<td>0</td>
<td>Semi-Professional</td>
<td>1,350</td>
<td><span class="label" style="background:#0000F8"></span> <span class="label" style="background:#F8F8F8"></span></td>
<td>2013</td>
<td>24.8</td>
</tr><tr role="row" class="even">
<td id="1451" class="sorting_1">GKS Katowice</td>
<td>1451</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/POL.gif" alt="Poland">  POL</td>
<td>First Division</td>
<td>72K</td>
<td>Professional</td>
<td>6,710</td>
<td><span class="label" style="background:#F8F000"></span> <span class="label" style="background:#000000"></span></td>
<td>1964</td>
<td>24.8</td>
</tr><tr role="row" class="odd">
<td id="54003060" class="sorting_1">GKS Tychy</td>
<td>54003060</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/POL.gif" alt="Poland">  POL</td>
<td>First Division</td>
<td>29K</td>
<td>Professional</td>
<td>15,150</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
<td>1971</td>
<td>25.7</td>
</tr><tr role="row" class="even">
<td id="1281" class="sorting_1">Glenavon</td>
<td>1281</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/NIR.gif" alt="N.Ireland">  NIR</td>
<td>Danske Bank Premier</td>
<td>0</td>
<td>Semi-Professional</td>
<td>4,160</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#0050D0"></span></td>
<td>1889</td>
<td>29.3</td>
</tr><tr role="row" class="odd">
<td id="1282" class="sorting_1">Glentoran</td>
<td>1282</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/NIR.gif" alt="N.Ireland">  NIR</td>
<td>Danske Bank Premier</td>
<td>0</td>
<td>Semi-Professional</td>
<td>8,000</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#009878"></span></td>
<td>1882</td>
<td>28.2</td>
</tr><tr role="row" class="even">
<td id="657" class="sorting_1">Gloucester</td>
<td>657</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ENG.gif" alt="England">  ENG</td>
<td>Vanarama North</td>
<td>0</td>
<td>Semi-Professional</td>
<td>7,027</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#E8E010"></span></td>
<td>1889</td>
<td>23.6</td>
</tr><tr role="row" class="odd">
<td id="1015" class="sorting_1">Go Ahead Eagles</td>
<td>1015</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/NED.gif" alt="Holland">  NED</td>
<td>Eredivisie</td>
<td>172K</td>
<td>Professional</td>
<td>10,000</td>
<td><span class="label" style="background:#F8F000"></span> <span class="label" style="background:#E01808"></span></td>
<td>1902</td>
<td>25.7</td>
</tr><tr role="row" class="even">
<td id="102491" class="sorting_1">Godoy Cruz</td>
<td>102491</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ARG.gif" alt="Argentina">  ARG</td>
<td>Premier Division</td>
<td>211K</td>
<td>Professional</td>
<td>32,268</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#0050D0"></span></td>
<td>1921</td>
<td>24.3</td>
</tr><tr role="row" class="odd">
<td id="102555" class="sorting_1">GOI</td>
<td>102555</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/BRA.gif" alt="Brazil">  BRA</td>
<td>Second Division</td>
<td>214K</td>
<td>Professional</td>
<td>54,049</td>
<td><span class="label" style="background:#F8F000"></span> <span class="label" style="background:#003068"></span></td>
<td>1943</td>
<td>27.0</td>
</tr><tr role="row" class="even">
<td id="131270" class="sorting_1">Golden Arrows</td>
<td>131270</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/RSA.gif" alt="South Africa">  RSA</td>
<td>South African Premiership</td>
<td>169K</td>
<td>Professional</td>
<td>10,000</td>
<td><span class="label" style="background:#E8F800"></span> <span class="label" style="background:#00C030"></span></td>
<td>1996</td>
<td>25.5</td>
</tr><tr role="row" class="odd">
<td id="5410568" class="sorting_1">Gomel</td>
<td>5410568</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/BLR.gif" alt="Belarus">  BLR</td>
<td>First League</td>
<td>15K</td>
<td>Professional</td>
<td>14,307</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F8F8F8"></span></td>
<td>1945</td>
<td>24.9</td>
</tr><tr role="row" class="even">
<td id="2423" class="sorting_1">Gondomar</td>
<td>2423</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/POR.gif" alt="Portugal">  POR</td>
<td>PT Championship</td>
<td>17K</td>
<td>Semi-Professional</td>
<td>2,500</td>
<td><span class="label" style="background:#0030A0"></span> <span class="label" style="background:#F8F000"></span></td>
<td>1921</td>
<td>22.9</td>
</tr><tr role="row" class="odd">
<td id="1627" class="sorting_1">Gorica</td>
<td>1627</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/SVN.gif" alt="Slovenia">  SVN</td>
<td>First League</td>
<td>129K</td>
<td>Professional</td>
<td>3,066</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#60C0F8"></span></td>
<td>1947</td>
<td>21.8</td>
</tr><tr role="row" class="even">
<td id="129565" class="sorting_1">Gornik</td>
<td>129565</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/POL.gif" alt="Poland">  POL</td>
<td>LOTTO Ekstraklasa</td>
<td>20K</td>
<td>Professional</td>
<td>15,500</td>
<td><span class="label" style="background:#101010"></span> <span class="label" style="background:#08C848"></span></td>
<td>1979</td>
<td>28.5</td>
</tr><tr role="row" class="odd">
<td id="1452" class="sorting_1">Gornik Zabrze</td>
<td>1452</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/POL.gif" alt="Poland">  POL</td>
<td>First Division</td>
<td>0</td>
<td>Professional</td>
<td>22,400</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
<td>1948</td>
<td>24.7</td>
</tr><tr role="row" class="even">
<td id="17004081" class="sorting_1">Gorodeya</td>
<td>17004081</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/BLR.gif" alt="Belarus">  BLR</td>
<td>Highest League</td>
<td>8K</td>
<td>Professional</td>
<td>1,625</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#008030"></span></td>
<td>2004</td>
<td>27.9</td>
</tr><tr role="row" class="odd">
<td id="5103761" class="sorting_1">Gosport</td>
<td>5103761</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ENG.gif" alt="England">  ENG</td>
<td>Vanarama South</td>
<td>0</td>
<td>Semi-Professional</td>
<td>4,500</td>
<td><span class="label" style="background:#083078"></span> <span class="label" style="background:#F8F000"></span></td>
<td>1944</td>
<td>26.6</td>
</tr><tr role="row" class="even">
<td id="725038" class="sorting_1">Gouveia</td>
<td>725038</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/POR.gif" alt="Portugal">  POR</td>
<td>PT Championship</td>
<td>2K</td>
<td>Semi-Professional</td>
<td>2,000</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#401060"></span></td>
<td>1963</td>
<td>24.3</td>
</tr><tr role="row" class="odd">
<td id="136417" class="sorting_1">Goyang Zaicro FC</td>
<td>136417</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/KOR.gif" alt="South Korea">  KOR</td>
<td>K LEAGUE Challenge</td>
<td>30K</td>
<td>Professional</td>
<td>41,311</td>
<td><span class="label" style="background:#080058"></span> <span class="label" style="background:#C80008"></span></td>
<td>1999</td>
<td>25.3</td>
</tr><tr role="row" class="even">
<td id="130338" class="sorting_1">Goztepe</td>
<td>130338</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/TUR.gif" alt="Turkey">  TUR</td>
<td>1. League</td>
<td>39K</td>
<td>Professional</td>
<td>6,700</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
<td>1925</td>
<td>25.4</td>
</tr><tr role="row" class="odd">
<td id="1714" class="sorting_1">Granada</td>
<td>1714</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ESP.gif" alt="Spain">  ESP</td>
<td>First Division</td>
<td>861K</td>
<td>Professional</td>
<td>23,000</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#F00000"></span></td>
<td>1931</td>
<td>25.0</td>
</tr><tr role="row" class="even">
<td id="67040821" class="sorting_1">Granada B</td>
<td>67040821</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ESP.gif" alt="Spain">  ESP</td>
<td>Second Division B4</td>
<td>0</td>
<td>Professional</td>
<td>23,000</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#F00000"></span></td>
<td>1947</td>
<td>20.1</td>
</tr><tr role="row" class="odd">
<td id="485663" class="sorting_1">Granit</td>
<td>485663</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/BLR.gif" alt="Belarus">  BLR</td>
<td>Highest League</td>
<td>0</td>
<td>Professional</td>
<td>3,090</td>
<td><span class="label" style="background:#60C0F8"></span> <span class="label" style="background:#002060"></span></td>
<td>1978</td>
<td>22.9</td>
</tr><tr role="row" class="even">
<td id="1855" class="sorting_1">Grasshoppers</td>
<td>1855</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/SUI.gif" alt="Switzerland">  SUI</td>
<td>Super League</td>
<td>2M</td>
<td>Professional</td>
<td>25,000</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#0050D0"></span></td>
<td>1886</td>
<td>23.4</td>
</tr><tr role="row" class="odd">
<td id="324" class="sorting_1">GRE</td>
<td>324</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/BRA.gif" alt="Brazil">  BRA</td>
<td>First Division</td>
<td>1M</td>
<td>Professional</td>
<td>60,170</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#C80000"></span></td>
<td>1903</td>
<td>24.2</td>
</tr><tr role="row" class="even">
<td id="802270" class="sorting_1">Grebbestads IF</td>
<td>802270</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/SWE.gif" alt="Sweden">  SWE</td>
<td>Second Division NG</td>
<td>0</td>
<td>Semi-Professional</td>
<td>1,000</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#E00000"></span></td>
<td>1922</td>
<td>25.4</td>
</tr><tr role="row" class="odd">
<td id="41003984" class="sorting_1">Gresik United</td>
<td>41003984</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/IDN.gif" alt="Indonesia">  IDN</td>
<td>Super League</td>
<td>52K</td>
<td>Professional</td>
<td>24,000</td>
<td><span class="label" style="background:#F8F000"></span> <span class="label" style="background:#F8F838"></span></td>
<td>2005</td>
<td>29.0</td>
</tr><tr role="row" class="even">
<td id="2253" class="sorting_1">Greuther Furth</td>
<td>2253</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/GER.gif" alt="Germany">  GER</td>
<td>Second Division</td>
<td>215K</td>
<td>Professional</td>
<td>18,000</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
<td>1903</td>
<td>24.4</td>
</tr><tr role="row" class="odd">
<td id="2112" class="sorting_1">Greve</td>
<td>2112</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/DEN.gif" alt="Denmark">  DEN</td>
<td>Second Division</td>
<td>0</td>
<td>Amateur</td>
<td>7,000</td>
<td><span class="label" style="background:#002080"></span> <span class="label" style="background:#0030A0"></span></td>
<td>1935</td>
<td>24.1</td>
</tr><tr role="row" class="even">
<td id="513325" class="sorting_1">GrIFK</td>
<td>513325</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/FIN.gif" alt="Finland">  FIN</td>
<td>First Division</td>
<td>0</td>
<td>Semi-Professional</td>
<td>5,100</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#006030"></span></td>
<td>1925</td>
<td>26.7</td>
</tr><tr role="row" class="odd">
<td id="658" class="sorting_1">Grimsby</td>
<td>658</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ENG.gif" alt="England">  ENG</td>
<td>Sky Bet League Two</td>
<td>10K</td>
<td>Professional</td>
<td>9,052</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
<td>1878</td>
<td>26.2</td>
</tr><tr role="row" class="even">
<td id="1300640" class="sorting_1">Grindavik</td>
<td>1300640</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ISL.gif" alt="Iceland">  ISL</td>
<td>First Division</td>
<td>13K</td>
<td>Semi-Professional</td>
<td>1,750</td>
<td><span class="label" style="background:#0050D0"></span> <span class="label" style="background:#F8F000"></span></td>
<td>1935</td>
<td>24.6</td>
</tr><tr role="row" class="odd">
<td id="8700474" class="sorting_1">Gro?aspach</td>
<td>8700474</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/GER.gif" alt="Germany">  GER</td>
<td>Third Division</td>
<td>0</td>
<td>Professional</td>
<td>10,000</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#E00000"></span></td>
<td>1994</td>
<td>24.3</td>
</tr><tr role="row" class="even">
<td id="1318" class="sorting_1">Grorud</td>
<td>1318</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/NOR.gif" alt="Norway">  NOR</td>
<td>Second Division Group 1</td>
<td>14K</td>
<td>Semi-Professional</td>
<td>1,080</td>
<td><span class="label" style="background:#0000F8"></span> <span class="label" style="background:#F8F000"></span></td>
<td>1918</td>
<td>24.3</td>
</tr><tr role="row" class="odd">
<td id="34003361" class="sorting_1">Groupe Sportif Consolat</td>
<td>34003361</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/FRA.gif" alt="France">  FRA</td>
<td>National</td>
<td>0</td>
<td>Semi-Professional</td>
<td>1,990</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
<td>1964</td>
<td>26.9</td>
</tr><tr role="row" class="even">
<td id="325" class="sorting_1">GUA</td>
<td>325</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/BRA.gif" alt="Brazil">  BRA</td>
<td>Third Division</td>
<td>24K</td>
<td>Professional</td>
<td>30,888</td>
<td><span class="label" style="background:#101010"></span> <span class="label" style="background:#A8F828"></span></td>
<td>1911</td>
<td>27.0</td>
</tr><tr role="row" class="odd">
<td id="409" class="sorting_1">Guangzhou</td>
<td>409</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/CHN.gif" alt="China">  CHN</td>
<td>Super League</td>
<td>23M</td>
<td>Professional</td>
<td>58,500</td>
<td><span class="label" style="background:#D8B028"></span> <span class="label" style="background:#C80000"></span></td>
<td>1994</td>
<td>27.3</td>
</tr><tr role="row" class="even">
<td id="108985" class="sorting_1">Gubbio</td>
<td>108985</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ITA.gif" alt="Italy">  ITA</td>
<td>Serie C/B</td>
<td>60K</td>
<td>Professional</td>
<td>4,939</td>
<td><span class="label" style="background:#002060"></span> <span class="label" style="background:#E00000"></span></td>
<td>1910</td>
<td>24.1</td>
</tr><tr role="row" class="odd">
<td id="7442930" class="sorting_1">Guijuelo</td>
<td>7442930</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ESP.gif" alt="Spain">  ESP</td>
<td>Second Division B1</td>
<td>0</td>
<td>Professional</td>
<td>1,500</td>
<td><span class="label" style="background:#48A068"></span> <span class="label" style="background:#48A068"></span></td>
<td>1974</td>
<td>25.3</td>
</tr><tr role="row" class="even">
<td id="958199" class="sorting_1">Guillermo Brown (PM)</td>
<td>958199</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ARG.gif" alt="Argentina">  ARG</td>
<td>Second Division</td>
<td>10K</td>
<td>Professional</td>
<td>14,500</td>
<td><span class="label" style="background:#0030A0"></span> <span class="label" style="background:#F8F8F8"></span></td>
<td>1945</td>
<td>25.2</td>
</tr><tr role="row" class="odd">
<td id="578" class="sorting_1">Guiseley</td>
<td>578</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ENG.gif" alt="England">  ENG</td>
<td>Vanarama National</td>
<td>0</td>
<td>Semi-Professional</td>
<td>4,000</td>
<td><span class="label" style="background:#D8D8D0"></span> <span class="label" style="background:#F8F8F0"></span></td>
<td>1909</td>
<td>27.4</td>
</tr><tr role="row" class="even">
<td id="450544" class="sorting_1">Gumushanespor</td>
<td>450544</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/TUR.gif" alt="Turkey">  TUR</td>
<td>2. League Red</td>
<td>0</td>
<td>Professional</td>
<td>4,000</td>
<td><span class="label" style="background:#E00000"></span> <span class="label" style="background:#F8F8F8"></span></td>
<td>1995</td>
<td>25.1</td>
</tr><tr role="row" class="odd">
<td id="1794" class="sorting_1">Gunnilse IS</td>
<td>1794</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/SWE.gif" alt="Sweden">  SWE</td>
<td>Second Division NG</td>
<td>0</td>
<td>Semi-Professional</td>
<td>1,500</td>
<td><span class="label" style="background:#B00000"></span> <span class="label" style="background:#0030A0"></span></td>
<td>1950</td>
<td>22.4</td>
</tr><tr role="row" class="even">
<td id="66011708" class="sorting_1">Gwangju</td>
<td>66011708</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/KOR.gif" alt="South Korea">  KOR</td>
<td>K LEAGUE Classic</td>
<td>300K</td>
<td>Professional</td>
<td>40,245</td>
<td><span class="label" style="background:#C82008"></span> <span class="label" style="background:#F0E038"></span></td>
<td>2011</td>
<td>24.0</td>
</tr><tr role="row" class="odd">
<td id="96006550" class="sorting_1">Gwarek</td>
<td>96006550</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/POL.gif" alt="Poland">  POL</td>
<td>100000230</td>
<td>0</td>
<td>Semi-Professional</td>
<td>250</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#F00000"></span></td>
<td>1974</td>
<td>19.7</td>
</tr><tr role="row" class="even">
<td id="5710867" class="sorting_1">Gyeongnam</td>
<td>5710867</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/KOR.gif" alt="South Korea">  KOR</td>
<td>K LEAGUE Challenge</td>
<td>200K</td>
<td>Professional</td>
<td>15,071</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#D02020"></span></td>
<td>2006</td>
<td>27.0</td>
</tr><tr role="row" class="odd">
<td id="7524224" class="sorting_1">Gyirmot</td>
<td>7524224</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/HUN.gif" alt="Hungary">  HUN</td>
<td>Division I</td>
<td>0</td>
<td>Professional</td>
<td>2,700</td>
<td><span class="label" style="background:#0050D0"></span> <span class="label" style="background:#F8F000"></span></td>
<td>1993</td>
<td>26.3</td>
</tr><tr role="row" class="even">
<td id="130175" class="sorting_1">H &amp; W Welders</td>
<td>130175</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/NIR.gif" alt="N.Ireland">  NIR</td>
<td>NIFL C1</td>
<td>0</td>
<td>Semi-Professional</td>
<td>3,000</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F8F000"></span></td>
<td>1965</td>
<td>27.4</td>
</tr><tr role="row" class="odd">
<td id="4300049" class="sorting_1">Habo FF</td>
<td>4300049</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/SWE.gif" alt="Sweden">  SWE</td>
<td>Second Division NS</td>
<td>0</td>
<td>Semi-Professional</td>
<td>1,000</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#E00000"></span></td>
<td>1996</td>
<td>22.0</td>
</tr><tr role="row" class="even">
<td id="130365" class="sorting_1">Hacettepe</td>
<td>130365</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/TUR.gif" alt="Turkey">  TUR</td>
<td>2. League White</td>
<td>0</td>
<td>Professional</td>
<td>37,000</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#383058"></span></td>
<td>1948</td>
<td>22.2</td>
</tr><tr role="row" class="odd">
<td id="433" class="sorting_1">Hajduk</td>
<td>433</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/CRO.gif" alt="Croatia">  CRO</td>
<td>First League</td>
<td>129K</td>
<td>Professional</td>
<td>34,448</td>
<td><span class="label" style="background:#0030A0"></span> <span class="label" style="background:#F8F8F8"></span></td>
<td>1911</td>
<td>22.6</td>
</tr><tr role="row" class="even">
<td id="817" class="sorting_1">Haka</td>
<td>817</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/FIN.gif" alt="Finland">  FIN</td>
<td>First Division</td>
<td>861</td>
<td>Semi-Professional</td>
<td>3,200</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F8F8F8"></span></td>
<td>1934</td>
<td>22.5</td>
</tr><tr role="row" class="odd">
<td id="1056" class="sorting_1">Haladas</td>
<td>1056</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/HUN.gif" alt="Hungary">  HUN</td>
<td>Division I</td>
<td>0</td>
<td>Professional</td>
<td>14,000</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#006840"></span></td>
<td>1919</td>
<td>24.3</td>
</tr><tr role="row" class="even">
<td id="879516" class="sorting_1">Halle</td>
<td>879516</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/GER.gif" alt="Germany">  GER</td>
<td>Third Division</td>
<td>0</td>
<td>Professional</td>
<td>15,057</td>
<td><span class="label" style="background:#B00810"></span> <span class="label" style="background:#F8F8F8"></span></td>
<td>1991</td>
<td>24.3</td>
</tr><tr role="row" class="odd">
<td id="1796" class="sorting_1">Halmstads BK</td>
<td>1796</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/SWE.gif" alt="Sweden">  SWE</td>
<td>First Division Elite</td>
<td>4K</td>
<td>Professional</td>
<td>15,500</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#1078D0"></span></td>
<td>1914</td>
<td>23.2</td>
</tr><tr role="row" class="even">
<td id="947" class="sorting_1">Hamburg</td>
<td>947</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/GER.gif" alt="Germany">  GER</td>
<td>First Division</td>
<td>0</td>
<td>Professional</td>
<td>57,000</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#F8F8F8"></span></td>
<td>1887</td>
<td>24.2</td>
</tr><tr role="row" class="odd">
<td id="946" class="sorting_1">Hamburg St.Pauli</td>
<td>946</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/GER.gif" alt="Germany">  GER</td>
<td>Second Division</td>
<td>517K</td>
<td>Professional</td>
<td>29,546</td>
<td><span class="label" style="background:#582800"></span> <span class="label" style="background:#582800"></span></td>
<td>1910</td>
<td>24.7</td>
</tr><tr role="row" class="even">
<td id="1572" class="sorting_1">Hamilton</td>
<td>1572</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/SCO.gif" alt="Scotland">  SCO</td>
<td>Ladbrokes Premiership</td>
<td>100K</td>
<td>Professional</td>
<td>5,510</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
<td>1874</td>
<td>24.7</td>
</tr><tr role="row" class="odd">
<td id="103283" class="sorting_1">HamKam</td>
<td>103283</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/NOR.gif" alt="Norway">  NOR</td>
<td>Second Division Group 2</td>
<td>5K</td>
<td>Semi-Professional</td>
<td>8,068</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#008040"></span></td>
<td>1918</td>
<td>22.1</td>
</tr><tr role="row" class="even">
<td id="1797" class="sorting_1">Hammarby</td>
<td>1797</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/SWE.gif" alt="Sweden">  SWE</td>
<td>Premier Division</td>
<td>447K</td>
<td>Professional</td>
<td>31,200</td>
<td><span class="label" style="background:#008030"></span> <span class="label" style="background:#F8F8F8"></span></td>
<td>1897</td>
<td>26.8</td>
</tr><tr role="row" class="odd">
<td id="5100186" class="sorting_1">Hampton &amp; Richmond</td>
<td>5100186</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ENG.gif" alt="England">  ENG</td>
<td>Vanarama South</td>
<td>0</td>
<td>Semi-Professional</td>
<td>3,000</td>
<td><span class="label" style="background:#E00000"></span> <span class="label" style="background:#003068"></span></td>
<td>1920</td>
<td>26.6</td>
</tr><tr role="row" class="even">
<td id="23077977" class="sorting_1">Hangzhou</td>
<td>23077977</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/CHN.gif" alt="China">  CHN</td>
<td>Super League</td>
<td>806K</td>
<td>Professional</td>
<td>52,672</td>
<td><span class="label" style="background:#F8E860"></span> <span class="label" style="background:#00C030"></span></td>
<td>1998</td>
<td>26.2</td>
</tr><tr role="row" class="odd">
<td id="63028408" class="sorting_1">Haniska</td>
<td>63028408</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/SVK.gif" alt="Slovakia">  SVK</td>
<td>Second Division</td>
<td>0</td>
<td>Professional</td>
<td>1,000</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#0030A0"></span></td>
<td>1931</td>
<td>24.7</td>
</tr><tr role="row" class="even">
<td id="927" class="sorting_1">Hannover</td>
<td>927</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/GER.gif" alt="Germany">  GER</td>
<td>Second Division</td>
<td>861K</td>
<td>Professional</td>
<td>49,000</td>
<td><span class="label" style="background:#B00000"></span> <span class="label" style="background:#B00000"></span></td>
<td>1896</td>
<td>24.4</td>
</tr><tr role="row" class="odd">
<td id="7861698" class="sorting_1">Hapoel Acre</td>
<td>7861698</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ISR.gif" alt="Israel">  ISR</td>
<td>National League</td>
<td>10K</td>
<td>Professional</td>
<td>5,000</td>
<td><span class="label" style="background:#0050D0"></span> <span class="label" style="background:#F8F8F8"></span></td>
<td>1946</td>
<td>23.8</td>
</tr><tr role="row" class="even">
<td id="7868750" class="sorting_1">Hapoel Afula</td>
<td>7868750</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ISR.gif" alt="Israel">  ISR</td>
<td>National League</td>
<td>92K</td>
<td>Professional</td>
<td>3,500</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
<td>1951</td>
<td>24.1</td>
</tr><tr role="row" class="odd">
<td id="7861688" class="sorting_1">Hapoel Ashkelon</td>
<td>7861688</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ISR.gif" alt="Israel">  ISR</td>
<td>Premier League</td>
<td>9K</td>
<td>Professional</td>
<td>6,000</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#0010D8"></span></td>
<td>1955</td>
<td>25.8</td>
</tr><tr role="row" class="even">
<td id="1085" class="sorting_1">Hapoel Be'er-Sheva</td>
<td>1085</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ISR.gif" alt="Israel">  ISR</td>
<td>Premier League</td>
<td>172K</td>
<td>Professional</td>
<td>16,126</td>
<td><span class="label" style="background:#F85048"></span> <span class="label" style="background:#E00000"></span></td>
<td>1949</td>
<td>25.6</td>
</tr><tr role="row" class="odd">
<td id="1087" class="sorting_1">Hapoel Haifa</td>
<td>1087</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ISR.gif" alt="Israel">  ISR</td>
<td>Premier League</td>
<td>4K</td>
<td>Professional</td>
<td>5,000</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#E00000"></span></td>
<td>1924</td>
<td>25.5</td>
</tr><tr role="row" class="even">
<td id="1300671" class="sorting_1">Hapoel Jerusalem</td>
<td>1300671</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ISR.gif" alt="Israel">  ISR</td>
<td>National League</td>
<td>0</td>
<td>Professional</td>
<td>1,500</td>
<td><span class="label" style="background:#E00808"></span> <span class="label" style="background:#000000"></span></td>
<td>1926</td>
<td>23.1</td>
</tr><tr role="row" class="odd">
<td id="42016459" class="sorting_1">Hapoel Katamon</td>
<td>42016459</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ISR.gif" alt="Israel">  ISR</td>
<td>National League</td>
<td>0</td>
<td>Professional</td>
<td>3,000</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#E00000"></span></td>
<td>2009</td>
<td>24.1</td>
</tr><tr role="row" class="even">
<td id="1300665" class="sorting_1">Hapoel Kfar-Saba</td>
<td>1300665</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ISR.gif" alt="Israel">  ISR</td>
<td>Premier League</td>
<td>26K</td>
<td>Professional</td>
<td>5,800</td>
<td><span class="label" style="background:#006030"></span> <span class="label" style="background:#F8F8F8"></span></td>
<td>1928</td>
<td>23.9</td>
</tr><tr role="row" class="odd">
<td id="7860420" class="sorting_1">Hapoel Nazareth-Ilit</td>
<td>7860420</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ISR.gif" alt="Israel">  ISR</td>
<td>National League</td>
<td>0</td>
<td>Professional</td>
<td>1,500</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#F00000"></span></td>
<td>1962</td>
<td>24.3</td>
</tr><tr role="row" class="even">
<td id="1089" class="sorting_1">Hapoel Petach-Tikva</td>
<td>1089</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ISR.gif" alt="Israel">  ISR</td>
<td>National League</td>
<td>0</td>
<td>Professional</td>
<td>11,500</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#1838F8"></span></td>
<td>1930</td>
<td>22.6</td>
</tr><tr role="row" class="odd">
<td id="7860424" class="sorting_1">Hapoel Ra'anana</td>
<td>7860424</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ISR.gif" alt="Israel">  ISR</td>
<td>Premier League</td>
<td>69K</td>
<td>Professional</td>
<td>13,610</td>
<td><span class="label" style="background:#D8B028"></span> <span class="label" style="background:#C00008"></span></td>
<td>1932</td>
<td>23.3</td>
</tr><tr role="row" class="even">
<td id="7860423" class="sorting_1">Hapoel Ramat-Gan</td>
<td>7860423</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ISR.gif" alt="Israel">  ISR</td>
<td>National League</td>
<td>103K</td>
<td>Professional</td>
<td>4,200</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#E00000"></span></td>
<td>1927</td>
<td>22.1</td>
</tr><tr role="row" class="odd">
<td id="1088" class="sorting_1">Hapoel Rishon LeZion</td>
<td>1088</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ISR.gif" alt="Israel">  ISR</td>
<td>National League</td>
<td>31K</td>
<td>Professional</td>
<td>6,000</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#F87000"></span></td>
<td>1940</td>
<td>22.9</td>
</tr><tr role="row" class="even">
<td id="1090" class="sorting_1">Hapoel Tel-Aviv</td>
<td>1090</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ISR.gif" alt="Israel">  ISR</td>
<td>Premier League</td>
<td>54K</td>
<td>Professional</td>
<td>11,500</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#D02028"></span></td>
<td>1927</td>
<td>23.8</td>
</tr><tr role="row" class="odd">
<td id="68020049" class="sorting_1">Harnosands FF</td>
<td>68020049</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/SWE.gif" alt="Sweden">  SWE</td>
<td>Second Division N</td>
<td>0</td>
<td>Semi-Professional</td>
<td>1,500</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#E00000"></span></td>
<td>2007</td>
<td>26.1</td>
</tr><tr role="row" class="even">
<td id="5100047" class="sorting_1">Harrogate</td>
<td>5100047</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ENG.gif" alt="England">  ENG</td>
<td>Vanarama North</td>
<td>6K</td>
<td>Semi-Professional</td>
<td>3,800</td>
<td><span class="label" style="background:#F8F000"></span> <span class="label" style="background:#000000"></span></td>
<td>1919</td>
<td>26.3</td>
</tr><tr role="row" class="odd">
<td id="1325" class="sorting_1">Harstad</td>
<td>1325</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/NOR.gif" alt="Norway">  NOR</td>
<td>Second Division Group 1</td>
<td>19K</td>
<td>Semi-Professional</td>
<td>6,000</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F0F810"></span></td>
<td>1903</td>
<td>25.8</td>
</tr><tr role="row" class="even">
<td id="661" class="sorting_1">Hartlepool</td>
<td>661</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ENG.gif" alt="England">  ENG</td>
<td>Sky Bet League Two</td>
<td>25K</td>
<td>Professional</td>
<td>7,856</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
<td>1908</td>
<td>25.0</td>
</tr><tr role="row" class="odd">
<td id="234" class="sorting_1">Hasselt</td>
<td>234</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/BEL.gif" alt="Belgium">  BEL</td>
<td>First Division</td>
<td>4K</td>
<td>Semi-Professional</td>
<td>8,800</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#0030A0"></span></td>
<td>1941</td>
<td>26.4</td>
</tr><tr role="row" class="even">
<td id="68002003" class="sorting_1">Hassleholms IF</td>
<td>68002003</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/SWE.gif" alt="Sweden">  SWE</td>
<td>Second Division SG</td>
<td>0</td>
<td>Semi-Professional</td>
<td>5,800</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#008030"></span></td>
<td>1922</td>
<td>25.6</td>
</tr><tr role="row" class="odd">
<td id="130342" class="sorting_1">Hatayspor</td>
<td>130342</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/TUR.gif" alt="Turkey">  TUR</td>
<td>2. League Red</td>
<td>0</td>
<td>Professional</td>
<td>6,765</td>
<td><span class="label" style="background:#800020"></span> <span class="label" style="background:#F8F8F8"></span></td>
<td>1967</td>
<td>26.0</td>
</tr><tr role="row" class="even">
<td id="1326" class="sorting_1">Haugesund</td>
<td>1326</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/NOR.gif" alt="Norway">  NOR</td>
<td>Premier Division</td>
<td>237K</td>
<td>Professional</td>
<td>8,983</td>
<td><span class="label" style="background:#0050B8"></span> <span class="label" style="background:#F8F8F8"></span></td>
<td>1993</td>
<td>23.5</td>
</tr><tr role="row" class="odd">
<td id="7840108" class="sorting_1">Haukar</td>
<td>7840108</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ISL.gif" alt="Iceland">  ISL</td>
<td>First Division</td>
<td>5K</td>
<td>Semi-Professional</td>
<td>2,120</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#E00000"></span></td>
<td>1931</td>
<td>21.6</td>
</tr><tr role="row" class="even">
<td id="856" class="sorting_1">Havre Athletic Club</td>
<td>856</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/FRA.gif" alt="France">  FRA</td>
<td>Domino's Ligue 2</td>
<td>431K</td>
<td>Professional</td>
<td>25,278</td>
<td><span class="label" style="background:#002850"></span> <span class="label" style="background:#60C0F8"></span></td>
<td>1872</td>
<td>25.0</td>
</tr><tr role="row" class="odd">
<td id="27035536" class="sorting_1">HB Koge</td>
<td>27035536</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/DEN.gif" alt="Denmark">  DEN</td>
<td>First Division</td>
<td>6K</td>
<td>Semi-Professional</td>
<td>8,000</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
<td>2009</td>
<td>21.1</td>
</tr><tr role="row" class="even">
<td id="1573" class="sorting_1">Hearts</td>
<td>1573</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/SCO.gif" alt="Scotland">  SCO</td>
<td>Ladbrokes Premiership</td>
<td>200K</td>
<td>Professional</td>
<td>17,480</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#800020"></span></td>
<td>1874</td>
<td>22.9</td>
</tr><tr role="row" class="odd">
<td id="880295" class="sorting_1">Heidenheim</td>
<td>880295</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/GER.gif" alt="Germany">  GER</td>
<td>Second Division</td>
<td>215K</td>
<td>Professional</td>
<td>15,000</td>
<td><span class="label" style="background:#2850A0"></span> <span class="label" style="background:#081030"></span></td>
<td>2007</td>
<td>23.8</td>
</tr><tr role="row" class="even">
<td id="202" class="sorting_1">Heist</td>
<td>202</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/BEL.gif" alt="Belgium">  BEL</td>
<td>First Division</td>
<td>0</td>
<td>Semi-Professional</td>
<td>3,549</td>
<td><span class="label" style="background:#0030A0"></span> <span class="label" style="background:#F8F8F8"></span></td>
<td>1941</td>
<td>25.2</td>
</tr><tr role="row" class="odd">
<td id="1017" class="sorting_1">Helmond</td>
<td>1017</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/NED.gif" alt="Holland">  NED</td>
<td>Jupiler League</td>
<td>43K</td>
<td>Professional</td>
<td>4,200</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#E01018"></span></td>
<td>1967</td>
<td>23.7</td>
</tr><tr role="row" class="even">
<td id="1798" class="sorting_1">Helsingborgs IF</td>
<td>1798</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/SWE.gif" alt="Sweden">  SWE</td>
<td>Premier Division</td>
<td>0</td>
<td>Professional</td>
<td>17,100</td>
<td><span class="label" style="background:#005098"></span> <span class="label" style="background:#E00000"></span></td>
<td>1907</td>
<td>26.2</td>
</tr><tr role="row" class="odd">
<td id="5100225" class="sorting_1">Hemel Hempstead</td>
<td>5100225</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ENG.gif" alt="England">  ENG</td>
<td>Vanarama South</td>
<td>2K</td>
<td>Semi-Professional</td>
<td>3,152</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#E00000"></span></td>
<td>1885</td>
<td>25.8</td>
</tr><tr role="row" class="even">
<td id="131162" class="sorting_1">Henan</td>
<td>131162</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/CHN.gif" alt="China">  CHN</td>
<td>Super League</td>
<td>1M</td>
<td>Professional</td>
<td>29,860</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#B00000"></span></td>
<td>1994</td>
<td>25.3</td>
</tr><tr role="row" class="odd">
<td id="1716" class="sorting_1">Heracles</td>
<td>1716</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ESP.gif" alt="Spain">  ESP</td>
<td>Second Division B3</td>
<td>34K</td>
<td>Professional</td>
<td>29,500</td>
<td><span class="label" style="background:#2070B0"></span> <span class="label" style="background:#F8F8F8"></span></td>
<td>1922</td>
<td>26.0</td>
</tr><tr role="row" class="even">
<td id="1037" class="sorting_1">Heracles Almelo</td>
<td>1037</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/NED.gif" alt="Holland">  NED</td>
<td>Eredivisie</td>
<td>215K</td>
<td>Professional</td>
<td>13,500</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#000000"></span></td>
<td>1903</td>
<td>24.7</td>
</tr><tr role="row" class="odd">
<td id="2247" class="sorting_1">Hertha</td>
<td>2247</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/GER.gif" alt="Germany">  GER</td>
<td>First Division</td>
<td>2M</td>
<td>Professional</td>
<td>74,244</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#0050D0"></span></td>
<td>1892</td>
<td>25.8</td>
</tr><tr role="row" class="even">
<td id="1575" class="sorting_1">Hibernian</td>
<td>1575</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/SCO.gif" alt="Scotland">  SCO</td>
<td>Ladbrokes Championship</td>
<td>219K</td>
<td>Professional</td>
<td>20,421</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#006830"></span></td>
<td>1875</td>
<td>23.4</td>
</tr><tr role="row" class="odd">
<td id="129129" class="sorting_1">HIFK</td>
<td>129129</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/FIN.gif" alt="Finland">  FIN</td>
<td>Premier League</td>
<td>9K</td>
<td>Semi-Professional</td>
<td>10,770</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#E00000"></span></td>
<td>1897</td>
<td>28.1</td>
</tr><tr role="row" class="even">
<td id="5682374" class="sorting_1">Highlands Park</td>
<td>5682374</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/RSA.gif" alt="South Africa">  RSA</td>
<td>South African Premiership</td>
<td>141K</td>
<td>Professional</td>
<td>10,000</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#E00000"></span></td>
<td>1959</td>
<td>27.3</td>
</tr><tr role="row" class="odd">
<td id="512" class="sorting_1">HIK</td>
<td>512</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/DEN.gif" alt="Denmark">  DEN</td>
<td>Second Division</td>
<td>0</td>
<td>Semi-Professional</td>
<td>10,000</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#F8F8F8"></span></td>
<td>1900</td>
<td>22.8</td>
</tr><tr role="row" class="even">
<td id="816" class="sorting_1">HJK</td>
<td>816</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/FIN.gif" alt="Finland">  FIN</td>
<td>Premier League</td>
<td>345K</td>
<td>Professional</td>
<td>10,770</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#0030A0"></span></td>
<td>1907</td>
<td>24.9</td>
</tr><tr role="row" class="odd">
<td id="7840140" class="sorting_1">HK</td>
<td>7840140</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ISL.gif" alt="Iceland">  ISL</td>
<td>First Division</td>
<td>10K</td>
<td>Semi-Professional</td>
<td>1,600</td>
<td><span class="label" style="background:#E00000"></span> <span class="label" style="background:#F8F8F8"></span></td>
<td>1970</td>
<td>22.8</td>
</tr><tr role="row" class="even">
<td id="24013516" class="sorting_1">HNK Gorica</td>
<td>24013516</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/CRO.gif" alt="Croatia">  CRO</td>
<td>Second League</td>
<td>0</td>
<td>Professional</td>
<td>8,000</td>
<td><span class="label" style="background:#303030"></span> <span class="label" style="background:#F8F8F8"></span></td>
<td>2009</td>
<td>23.5</td>
</tr><tr role="row" class="odd">
<td id="930210" class="sorting_1">Hobro IK</td>
<td>930210</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/DEN.gif" alt="Denmark">  DEN</td>
<td>First Division</td>
<td>29K</td>
<td>Professional</td>
<td>10,225</td>
<td><span class="label" style="background:#002060"></span> <span class="label" style="background:#F8F000"></span></td>
<td>1913</td>
<td>25.5</td>
</tr><tr role="row" class="even">
<td id="1328" class="sorting_1">Hodd</td>
<td>1328</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/NOR.gif" alt="Norway">  NOR</td>
<td>First Division</td>
<td>5K</td>
<td>Semi-Professional</td>
<td>4,006</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#0050D0"></span></td>
<td>1919</td>
<td>25.0</td>
</tr><tr role="row" class="odd">
<td id="879226" class="sorting_1">Hoffenheim</td>
<td>879226</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/GER.gif" alt="Germany">  GER</td>
<td>First Division</td>
<td>4M</td>
<td>Professional</td>
<td>30,150</td>
<td><span class="label" style="background:#002080"></span> <span class="label" style="background:#0078F8"></span></td>
<td>1899</td>
<td>23.2</td>
</tr><tr role="row" class="even">
<td id="2155" class="sorting_1">Hogaborgs BK</td>
<td>2155</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/SWE.gif" alt="Sweden">  SWE</td>
<td>Second Division WG</td>
<td>0</td>
<td>Semi-Professional</td>
<td>3,500</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#008030"></span></td>
<td>1927</td>
<td>21.4</td>
</tr><tr role="row" class="odd">
<td id="615770" class="sorting_1">Hoganas BK</td>
<td>615770</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/SWE.gif" alt="Sweden">  SWE</td>
<td>Second Division WG</td>
<td>0</td>
<td>Semi-Professional</td>
<td>2,500</td>
<td><span class="label" style="background:#0030A0"></span> <span class="label" style="background:#E00000"></span></td>
<td>1913</td>
<td>22.3</td>
</tr><tr role="row" class="even">
<td id="27017889" class="sorting_1">Holb?k</td>
<td>27017889</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/DEN.gif" alt="Denmark">  DEN</td>
<td>Second Division</td>
<td>0</td>
<td>Semi-Professional</td>
<td>10,000</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#0050D0"></span></td>
<td>1931</td>
<td>22.3</td>
</tr><tr role="row" class="odd">
<td id="1343" class="sorting_1">Honefoss</td>
<td>1343</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/NOR.gif" alt="Norway">  NOR</td>
<td>Second Division Group 2</td>
<td>0</td>
<td>Semi-Professional</td>
<td>4,256</td>
<td><span class="label" style="background:#008888"></span> <span class="label" style="background:#F8F8F8"></span></td>
<td>1895</td>
<td>21.8</td>
</tr><tr role="row" class="even">
<td id="1059" class="sorting_1">Honved</td>
<td>1059</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/HUN.gif" alt="Hungary">  HUN</td>
<td>Division I</td>
<td>0</td>
<td>Professional</td>
<td>10,000</td>
<td><span class="label" style="background:#C03008"></span> <span class="label" style="background:#000000"></span></td>
<td>1909</td>
<td>24.5</td>
</tr><tr role="row" class="odd">
<td id="4203009" class="sorting_1">Hospitalet</td>
<td>4203009</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ESP.gif" alt="Spain">  ESP</td>
<td>Second Division B3</td>
<td>0</td>
<td>Professional</td>
<td>6,740</td>
<td><span class="label" style="background:#E00000"></span> <span class="label" style="background:#F8F8F8"></span></td>
<td>1957</td>
<td>24.5</td>
</tr><tr role="row" class="even">
<td id="72000112" class="sorting_1">Houston</td>
<td>72000112</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/USA.gif" alt="U.S.A.">  USA</td>
<td>MLS</td>
<td>999K</td>
<td>Professional</td>
<td>22,000</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#F8A030"></span></td>
<td>2006</td>
<td>26.1</td>
</tr><tr role="row" class="odd">
<td id="1300241" class="sorting_1">Hr. Dragovoljac</td>
<td>1300241</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/CRO.gif" alt="Croatia">  CRO</td>
<td>Second League</td>
<td>0</td>
<td>Professional</td>
<td>5,000</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#000000"></span></td>
<td>1994</td>
<td>23.6</td>
</tr><tr role="row" class="even">
<td id="472" class="sorting_1">Hradec Kralove</td>
<td>472</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/CZE.gif" alt="Czech Republic">  CZE</td>
<td>First Division</td>
<td>239K</td>
<td>Professional</td>
<td>5,000</td>
<td><span class="label" style="background:#E8E8E8"></span> <span class="label" style="background:#F8F8F8"></span></td>
<td>1905</td>
<td>25.6</td>
</tr><tr role="row" class="odd">
<td id="104362" class="sorting_1">Huachipato</td>
<td>104362</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/CHI.gif" alt="Chile">  CHI</td>
<td>First Division</td>
<td>11K</td>
<td>Professional</td>
<td>10,500</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#0030A0"></span></td>
<td>1947</td>
<td>21.7</td>
</tr><tr role="row" class="even">
<td id="23257514" class="sorting_1">Huanghai</td>
<td>23257514</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/CHN.gif" alt="China">  CHN</td>
<td>First Division</td>
<td>346K</td>
<td>Professional</td>
<td>45,000</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F8F8F8"></span></td>
<td>2012</td>
<td>27.4</td>
</tr><tr role="row" class="odd">
<td id="23295502" class="sorting_1">Huaxia Xingfu</td>
<td>23295502</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/CHN.gif" alt="China">  CHN</td>
<td>Super League</td>
<td>14M</td>
<td>Professional</td>
<td>35,000</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#E00000"></span></td>
<td>2010</td>
<td>26.4</td>
</tr><tr role="row" class="even">
<td id="664" class="sorting_1">Huddersfield</td>
<td>664</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ENG.gif" alt="England">  ENG</td>
<td>Sky Bet Championship</td>
<td>1M</td>
<td>Professional</td>
<td>24,590</td>
<td><span class="label" style="background:#3878B0"></span> <span class="label" style="background:#F8F8F8"></span></td>
<td>1908</td>
<td>25.2</td>
</tr><tr role="row" class="odd">
<td id="1800" class="sorting_1">Huddinge IF</td>
<td>1800</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/SWE.gif" alt="Sweden">  SWE</td>
<td>Second Division SS</td>
<td>0</td>
<td>Semi-Professional</td>
<td>2,000</td>
<td><span class="label" style="background:#F8F000"></span> <span class="label" style="background:#000000"></span></td>
<td>1912</td>
<td>22.5</td>
</tr><tr role="row" class="even">
<td id="1801" class="sorting_1">Hudiksvalls FF</td>
<td>1801</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/SWE.gif" alt="Sweden">  SWE</td>
<td>Second Division N</td>
<td>894</td>
<td>Semi-Professional</td>
<td>3,000</td>
<td><span class="label" style="background:#E00000"></span> <span class="label" style="background:#F8F8F8"></span></td>
<td>2011</td>
<td>23.5</td>
</tr><tr role="row" class="odd">
<td id="1751" class="sorting_1">Huelva</td>
<td>1751</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ESP.gif" alt="Spain">  ESP</td>
<td>Second Division B4</td>
<td>89K</td>
<td>Professional</td>
<td>19,860</td>
<td><span class="label" style="background:#0050D0"></span> <span class="label" style="background:#F8F8F8"></span></td>
<td>1889</td>
<td>24.1</td>
</tr><tr role="row" class="even">
<td id="4212294" class="sorting_1">Huesca</td>
<td>4212294</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ESP.gif" alt="Spain">  ESP</td>
<td>Second Division</td>
<td>0</td>
<td>Professional</td>
<td>5,000</td>
<td><span class="label" style="background:#A83040"></span> <span class="label" style="background:#2068B0"></span></td>
<td>1960</td>
<td>26.6</td>
</tr><tr role="row" class="odd">
<td id="7843560" class="sorting_1">Huginn</td>
<td>7843560</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ISL.gif" alt="Iceland">  ISL</td>
<td>First Division</td>
<td>12K</td>
<td>Semi-Professional</td>
<td>600</td>
<td><span class="label" style="background:#F8C828"></span> <span class="label" style="background:#000000"></span></td>
<td>1913</td>
<td>25.4</td>
</tr><tr role="row" class="even">
<td id="130804" class="sorting_1">Huila</td>
<td>130804</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/COL.gif" alt="Colombia">  COL</td>
<td>First Division</td>
<td>538K</td>
<td>Professional</td>
<td>27,000</td>
<td><span class="label" style="background:#008030"></span> <span class="label" style="background:#F8F000"></span></td>
<td>1990</td>
<td>24.3</td>
</tr><tr role="row" class="odd">
<td id="665" class="sorting_1">Hull</td>
<td>665</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ENG.gif" alt="England">  ENG</td>
<td>Premier Division</td>
<td>6M</td>
<td>Professional</td>
<td>25,586</td>
<td><span class="label" style="background:#F8A800"></span> <span class="label" style="background:#000000"></span></td>
<td>1904</td>
<td>26.0</td>
</tr><tr role="row" class="even">
<td id="5103652" class="sorting_1">Hungerford</td>
<td>5103652</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ENG.gif" alt="England">  ENG</td>
<td>Vanarama South</td>
<td>1K</td>
<td>Semi-Professional</td>
<td>2,500</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F8F8F8"></span></td>
<td>1886</td>
<td>26.6</td>
</tr><tr role="row" class="odd">
<td id="88" class="sorting_1">Huracan</td>
<td>88</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ARG.gif" alt="Argentina">  ARG</td>
<td>Premier Division</td>
<td>768K</td>
<td>Professional</td>
<td>48,314</td>
<td><span class="label" style="background:#E00000"></span> <span class="label" style="background:#F8F8F8"></span></td>
<td>1908</td>
<td>28.8</td>
</tr><tr role="row" class="even">
<td id="2557" class="sorting_1">Husqvarna FF</td>
<td>2557</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/SWE.gif" alt="Sweden">  SWE</td>
<td>First Division South</td>
<td>2K</td>
<td>Semi-Professional</td>
<td>3,500</td>
<td><span class="label" style="background:#20A0E0"></span> <span class="label" style="background:#002060"></span></td>
<td>1987</td>
<td>23.9</td>
</tr><tr role="row" class="odd">
<td id="524" class="sorting_1">Hvidovre IF</td>
<td>524</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/DEN.gif" alt="Denmark">  DEN</td>
<td>Second Division</td>
<td>0</td>
<td>Semi-Professional</td>
<td>1,200</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#C80000"></span></td>
<td>1925</td>
<td>24.2</td>
</tr><tr role="row" class="even">
<td id="1072" class="sorting_1">IA</td>
<td>1072</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ISL.gif" alt="Iceland">  ISL</td>
<td>Premier Division</td>
<td>27K</td>
<td>Semi-Professional</td>
<td>5,550</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F8D000"></span></td>
<td>1946</td>
<td>25.1</td>
</tr><tr role="row" class="odd">
<td id="5251725" class="sorting_1">Iberia</td>
<td>5251725</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/CHI.gif" alt="Chile">  CHI</td>
<td>First Division B</td>
<td>0</td>
<td>Professional</td>
<td>3,210</td>
<td><span class="label" style="background:#E00000"></span> <span class="label" style="background:#0030A0"></span></td>
<td>1933</td>
<td>27.0</td>
</tr><tr role="row" class="even">
<td id="1074" class="sorting_1">IBV</td>
<td>1074</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ISL.gif" alt="Iceland">  ISL</td>
<td>Premier Division</td>
<td>50K</td>
<td>Semi-Professional</td>
<td>2,834</td>
<td><span class="label" style="background:#D0D0D0"></span> <span class="label" style="background:#F8F8F8"></span></td>
<td>1945</td>
<td>23.0</td>
</tr><tr role="row" class="odd">
<td id="2157" class="sorting_1">IF Brommapojkarna</td>
<td>2157</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/SWE.gif" alt="Sweden">  SWE</td>
<td>First Division North</td>
<td>9K</td>
<td>Semi-Professional</td>
<td>7,500</td>
<td><span class="label" style="background:#E00000"></span> <span class="label" style="background:#000000"></span></td>
<td>1942</td>
<td>24.3</td>
</tr><tr role="row" class="even">
<td id="1802" class="sorting_1">IF Elfsborg</td>
<td>1802</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/SWE.gif" alt="Sweden">  SWE</td>
<td>Premier Division</td>
<td>447K</td>
<td>Professional</td>
<td>18,800</td>
<td><span class="label" style="background:#F8F000"></span> <span class="label" style="background:#F8F000"></span></td>
<td>1904</td>
<td>25.0</td>
</tr><tr role="row" class="odd">
<td id="2158" class="sorting_1">IF Sylvia</td>
<td>2158</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/SWE.gif" alt="Sweden">  SWE</td>
<td>Second Division SS</td>
<td>0</td>
<td>Semi-Professional</td>
<td>3,200</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F8F8F8"></span></td>
<td>1922</td>
<td>18.0</td>
</tr><tr role="row" class="even">
<td id="93053137" class="sorting_1">IFK Aspudden-Tellus</td>
<td>93053137</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/SWE.gif" alt="Sweden">  SWE</td>
<td>Second Division SS</td>
<td>0</td>
<td>Semi-Professional</td>
<td>1,000</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#0050D0"></span></td>
<td>0</td>
<td>24.3</td>
</tr><tr role="row" class="odd">
<td id="68020055" class="sorting_1">IFK Berga</td>
<td>68020055</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/SWE.gif" alt="Sweden">  SWE</td>
<td>Second Division SG</td>
<td>0</td>
<td>Semi-Professional</td>
<td>1,000</td>
<td><span class="label" style="background:#0050D0"></span> <span class="label" style="background:#F8F8F8"></span></td>
<td>1933</td>
<td>21.9</td>
</tr><tr role="row" class="even">
<td id="1803" class="sorting_1">IFK Goteborg</td>
<td>1803</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/SWE.gif" alt="Sweden">  SWE</td>
<td>Premier Division</td>
<td>45K</td>
<td>Professional</td>
<td>18,400</td>
<td><span class="label" style="background:#0050D0"></span> <span class="label" style="background:#F8F8F8"></span></td>
<td>1904</td>
<td>26.0</td>
</tr><tr role="row" class="odd">
<td id="1804" class="sorting_1">IFK Hassleholm</td>
<td>1804</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/SWE.gif" alt="Sweden">  SWE</td>
<td>Second Division SG</td>
<td>0</td>
<td>Semi-Professional</td>
<td>5,800</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F8F000"></span></td>
<td>1905</td>
<td>22.4</td>
</tr><tr role="row" class="even">
<td id="2574" class="sorting_1">IFK Kumla</td>
<td>2574</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/SWE.gif" alt="Sweden">  SWE</td>
<td>Second Division NG</td>
<td>0</td>
<td>Semi-Professional</td>
<td>1,000</td>
<td><span class="label" style="background:#0050D0"></span> <span class="label" style="background:#F8F8F8"></span></td>
<td>1913</td>
<td>23.0</td>
</tr><tr role="row" class="odd">
<td id="1805" class="sorting_1">IFK Lulea</td>
<td>1805</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/SWE.gif" alt="Sweden">  SWE</td>
<td>First Division North</td>
<td>0</td>
<td>Semi-Professional</td>
<td>2,500</td>
<td><span class="label" style="background:#0050D0"></span> <span class="label" style="background:#F8F8F8"></span></td>
<td>1900</td>
<td>26.1</td>
</tr><tr role="row" class="even">
<td id="2159" class="sorting_1">IFK Malmo</td>
<td>2159</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/SWE.gif" alt="Sweden">  SWE</td>
<td>Second Division SG</td>
<td>0</td>
<td>Semi-Professional</td>
<td>27,500</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#F8F000"></span></td>
<td>1899</td>
<td>23.0</td>
</tr><tr role="row" class="odd">
<td id="129179" class="sorting_1">IFK Mariehamn</td>
<td>129179</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/FIN.gif" alt="Finland">  FIN</td>
<td>Premier League</td>
<td>34K</td>
<td>Professional</td>
<td>2,635</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#F8F8F8"></span></td>
<td>1919</td>
<td>25.3</td>
</tr><tr role="row" class="even">
<td id="1806" class="sorting_1">IFK Norrkoping</td>
<td>1806</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/SWE.gif" alt="Sweden">  SWE</td>
<td>Premier Division</td>
<td>358K</td>
<td>Professional</td>
<td>16,700</td>
<td><span class="label" style="background:#0050D0"></span> <span class="label" style="background:#F8F8F8"></span></td>
<td>1897</td>
<td>23.4</td>
</tr><tr role="row" class="odd">
<td id="2662" class="sorting_1">IFK Timra</td>
<td>2662</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/SWE.gif" alt="Sweden">  SWE</td>
<td>Second Division N</td>
<td>0</td>
<td>Semi-Professional</td>
<td>1,000</td>
<td><span class="label" style="background:#0050D0"></span> <span class="label" style="background:#F8F8F8"></span></td>
<td>1978</td>
<td>23.6</td>
</tr><tr role="row" class="even">
<td id="2585" class="sorting_1">IFK Uddevalla</td>
<td>2585</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/SWE.gif" alt="Sweden">  SWE</td>
<td>Second Division NG</td>
<td>0</td>
<td>Semi-Professional</td>
<td>1,200</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#0050D0"></span></td>
<td>1905</td>
<td>24.2</td>
</tr><tr role="row" class="odd">
<td id="2588" class="sorting_1">IFK Varnamo</td>
<td>2588</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/SWE.gif" alt="Sweden">  SWE</td>
<td>First Division Elite</td>
<td>0</td>
<td>Professional</td>
<td>5,000</td>
<td><span class="label" style="background:#1068F8"></span> <span class="label" style="background:#F8F8F8"></span></td>
<td>1912</td>
<td>22.8</td>
</tr><tr role="row" class="even">
<td id="1807" class="sorting_1">IK Brage</td>
<td>1807</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/SWE.gif" alt="Sweden">  SWE</td>
<td>First Division North</td>
<td>0</td>
<td>Professional</td>
<td>6,500</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#108830"></span></td>
<td>1925</td>
<td>22.1</td>
</tr><tr role="row" class="odd">
<td id="4303997" class="sorting_1">IK Franke</td>
<td>4303997</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/SWE.gif" alt="Sweden">  SWE</td>
<td>Second Division NS</td>
<td>0</td>
<td>Semi-Professional</td>
<td>1,500</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#008030"></span></td>
<td>1943</td>
<td>23.0</td>
</tr><tr role="row" class="even">
<td id="618372" class="sorting_1">IK Frej</td>
<td>618372</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/SWE.gif" alt="Sweden">  SWE</td>
<td>First Division Elite</td>
<td>5K</td>
<td>Professional</td>
<td>3,000</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F8D000"></span></td>
<td>1983</td>
<td>24.2</td>
</tr><tr role="row" class="odd">
<td id="4300353" class="sorting_1">IK Gauthiod</td>
<td>4300353</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/SWE.gif" alt="Sweden">  SWE</td>
<td>Second Division NG</td>
<td>0</td>
<td>Semi-Professional</td>
<td>1,400</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#E00000"></span></td>
<td>1924</td>
<td>24.9</td>
</tr><tr role="row" class="even">
<td id="1808" class="sorting_1">IK Oddevold</td>
<td>1808</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/SWE.gif" alt="Sweden">  SWE</td>
<td>First Division South</td>
<td>4K</td>
<td>Semi-Professional</td>
<td>12,000</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#0078F8"></span></td>
<td>1932</td>
<td>23.9</td>
</tr><tr role="row" class="odd">
<td id="2164" class="sorting_1">IK Sirius</td>
<td>2164</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/SWE.gif" alt="Sweden">  SWE</td>
<td>First Division Elite</td>
<td>0</td>
<td>Professional</td>
<td>8,000</td>
<td><span class="label" style="background:#0050D0"></span> <span class="label" style="background:#000000"></span></td>
<td>1907</td>
<td>24.8</td>
</tr><tr role="row" class="even">
<td id="2165" class="sorting_1">IK Sleipner</td>
<td>2165</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/SWE.gif" alt="Sweden">  SWE</td>
<td>First Division North</td>
<td>0</td>
<td>Semi-Professional</td>
<td>16,700</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#0050D0"></span></td>
<td>1903</td>
<td>24.9</td>
</tr><tr role="row" class="odd">
<td id="130870" class="sorting_1">Illichivets</td>
<td>130870</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/UKR.gif" alt="Ukraine">  UKR</td>
<td>First League</td>
<td>23K</td>
<td>Professional</td>
<td>12,673</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#E00000"></span></td>
<td>1938</td>
<td>24.6</td>
</tr><tr role="row" class="even">
<td id="510307" class="sorting_1">Ilves</td>
<td>510307</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/FIN.gif" alt="Finland">  FIN</td>
<td>Premier League</td>
<td>9K</td>
<td>Professional</td>
<td>5,000</td>
<td><span class="label" style="background:#089060"></span> <span class="label" style="background:#F8F000"></span></td>
<td>1931</td>
<td>25.1</td>
</tr><tr role="row" class="odd">
<td id="129872" class="sorting_1">Imotski</td>
<td>129872</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/CRO.gif" alt="Croatia">  CRO</td>
<td>Second League</td>
<td>0</td>
<td>Semi-Professional</td>
<td>4,000</td>
<td><span class="label" style="background:#101010"></span> <span class="label" style="background:#E00000"></span></td>
<td>1991</td>
<td>24.4</td>
</tr><tr role="row" class="even">
<td id="5709008" class="sorting_1">Incheon</td>
<td>5709008</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/KOR.gif" alt="South Korea">  KOR</td>
<td>K LEAGUE Classic</td>
<td>300K</td>
<td>Professional</td>
<td>20,376</td>
<td><span class="label" style="background:#002060"></span> <span class="label" style="background:#000000"></span></td>
<td>2003</td>
<td>25.9</td>
</tr><tr role="row" class="odd">
<td id="89" class="sorting_1">Independiente</td>
<td>89</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ARG.gif" alt="Argentina">  ARG</td>
<td>Premier Division</td>
<td>0</td>
<td>Professional</td>
<td>45,562</td>
<td><span class="label" style="background:#D80000"></span> <span class="label" style="background:#D80000"></span></td>
<td>1905</td>
<td>26.1</td>
</tr><tr role="row" class="even">
<td id="3101453" class="sorting_1">Independiente Rivadavia</td>
<td>3101453</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ARG.gif" alt="Argentina">  ARG</td>
<td>Second Division</td>
<td>77K</td>
<td>Professional</td>
<td>25,000</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#002060"></span></td>
<td>1913</td>
<td>27.4</td>
</tr><tr role="row" class="odd">
<td id="5745180" class="sorting_1">Indjija</td>
<td>5745180</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/SRB.gif" alt="Serbia">  SRB</td>
<td>First League</td>
<td>69K</td>
<td>Professional</td>
<td>4,500</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
<td>1933</td>
<td>24.1</td>
</tr><tr role="row" class="even">
<td id="453682" class="sorting_1">Inegolspor</td>
<td>453682</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/TUR.gif" alt="Turkey">  TUR</td>
<td>2. League Red</td>
<td>0</td>
<td>Professional</td>
<td>4,975</td>
<td><span class="label" style="background:#B00000"></span> <span class="label" style="background:#F8F8F8"></span></td>
<td>1954</td>
<td>26.0</td>
</tr><tr role="row" class="odd">
<td id="8714658" class="sorting_1">Ingolstadt</td>
<td>8714658</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/GER.gif" alt="Germany">  GER</td>
<td>First Division</td>
<td>2M</td>
<td>Professional</td>
<td>15,445</td>
<td><span class="label" style="background:#E00000"></span> <span class="label" style="background:#E00000"></span></td>
<td>2004</td>
<td>25.0</td>
</tr><tr role="row" class="even">
<td id="71076802" class="sorting_1">Ingulets Petrove</td>
<td>71076802</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/UKR.gif" alt="Ukraine">  UKR</td>
<td>First League</td>
<td>50K</td>
<td>Professional</td>
<td>1,720</td>
<td><span class="label" style="background:#F8D000"></span> <span class="label" style="background:#00C030"></span></td>
<td>2013</td>
<td>25.4</td>
</tr><tr role="row" class="odd">
<td id="130031" class="sorting_1">Institute</td>
<td>130031</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/NIR.gif" alt="N.Ireland">  NIR</td>
<td>NIFL C1</td>
<td>0</td>
<td>Semi-Professional</td>
<td>3,110</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#B8D8E8"></span></td>
<td>1905</td>
<td>26.7</td>
</tr><tr role="row" class="even">
<td id="102485" class="sorting_1">Instituto</td>
<td>102485</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ARG.gif" alt="Argentina">  ARG</td>
<td>Second Division</td>
<td>0</td>
<td>Professional</td>
<td>32,535</td>
<td><span class="label" style="background:#E00000"></span> <span class="label" style="background:#F8F8F8"></span></td>
<td>1918</td>
<td>25.3</td>
</tr><tr role="row" class="odd">
<td id="326" class="sorting_1">INT</td>
<td>326</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/BRA.gif" alt="Brazil">  BRA</td>
<td>First Division</td>
<td>2M</td>
<td>Professional</td>
<td>50,128</td>
<td><span class="label" style="background:#800040"></span> <span class="label" style="background:#F8F8F8"></span></td>
<td>1909</td>
<td>25.5</td>
</tr><tr role="row" class="even">
<td id="1135" class="sorting_1">Inter</td>
<td>1135</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ITA.gif" alt="Italy">  ITA</td>
<td>Serie A</td>
<td>17M</td>
<td>Professional</td>
<td>80,018</td>
<td><span class="label" style="background:#0078F8"></span> <span class="label" style="background:#000000"></span></td>
<td>1908</td>
<td>27.6</td>
</tr><tr role="row" class="odd">
<td id="659403" class="sorting_1">Inter Zapresic</td>
<td>659403</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/CRO.gif" alt="Croatia">  CRO</td>
<td>First League</td>
<td>86K</td>
<td>Professional</td>
<td>5,528</td>
<td><span class="label" style="background:#0050D0"></span> <span class="label" style="background:#F8F000"></span></td>
<td>1929</td>
<td>22.8</td>
</tr><tr role="row" class="even">
<td id="1577" class="sorting_1">Inverness CT</td>
<td>1577</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/SCO.gif" alt="Scotland">  SCO</td>
<td>Ladbrokes Premiership</td>
<td>30K</td>
<td>Professional</td>
<td>7,512</td>
<td><span class="label" style="background:#E00000"></span> <span class="label" style="background:#3868B8"></span></td>
<td>1994</td>
<td>24.7</td>
</tr><tr role="row" class="odd">
<td id="667" class="sorting_1">Ipswich</td>
<td>667</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ENG.gif" alt="England">  ENG</td>
<td>Sky Bet Championship</td>
<td>500K</td>
<td>Professional</td>
<td>30,311</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#1830E8"></span></td>
<td>1878</td>
<td>26.0</td>
</tr><tr role="row" class="even">
<td id="976" class="sorting_1">Iraklis</td>
<td>976</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/GRE.gif" alt="Greece">  GRE</td>
<td>Superleague</td>
<td>0</td>
<td>Professional</td>
<td>27,770</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#0030A0"></span></td>
<td>1908</td>
<td>23.9</td>
</tr><tr role="row" class="odd">
<td id="2166" class="sorting_1">IS Halmia</td>
<td>2166</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/SWE.gif" alt="Sweden">  SWE</td>
<td>Second Division WG</td>
<td>0</td>
<td>Semi-Professional</td>
<td>15,500</td>
<td><span class="label" style="background:#E00000"></span> <span class="label" style="background:#F8F8F8"></span></td>
<td>1907</td>
<td>23.4</td>
</tr><tr role="row" class="even">
<td id="7485067" class="sorting_1">Isloch</td>
<td>7485067</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/BLR.gif" alt="Belarus">  BLR</td>
<td>Highest League</td>
<td>12K</td>
<td>Professional</td>
<td>4,800</td>
<td><span class="label" style="background:#707090"></span> <span class="label" style="background:#F8F8F8"></span></td>
<td>2007</td>
<td>28.0</td>
</tr><tr role="row" class="odd">
<td id="1874" class="sorting_1">Istanbulspor</td>
<td>1874</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/TUR.gif" alt="Turkey">  TUR</td>
<td>2. League White</td>
<td>0</td>
<td>Professional</td>
<td>4,338</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F8F000"></span></td>
<td>1990</td>
<td>22.8</td>
</tr><tr role="row" class="even">
<td id="662735" class="sorting_1">Istra 1961</td>
<td>662735</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/CRO.gif" alt="Croatia">  CRO</td>
<td>First League</td>
<td>43K</td>
<td>Professional</td>
<td>9,200</td>
<td><span class="label" style="background:#181818"></span> <span class="label" style="background:#E0F810"></span></td>
<td>1961</td>
<td>24.1</td>
</tr><tr role="row" class="odd">
<td id="4212275" class="sorting_1">Izarra</td>
<td>4212275</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ESP.gif" alt="Spain">  ESP</td>
<td>Second Division B1</td>
<td>0</td>
<td>Semi-Professional</td>
<td>3,500</td>
<td><span class="label" style="background:#0050D0"></span> <span class="label" style="background:#F8F8F8"></span></td>
<td>1924</td>
<td>24.3</td>
</tr><tr role="row" class="even">
<td id="468" class="sorting_1">Jablonec</td>
<td>468</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/CZE.gif" alt="Czech Republic">  CZE</td>
<td>First Division</td>
<td>559K</td>
<td>Professional</td>
<td>6,108</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#006030"></span></td>
<td>1945</td>
<td>24.5</td>
</tr><tr role="row" class="odd">
<td id="710052" class="sorting_1">Jagiellonia</td>
<td>710052</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/POL.gif" alt="Poland">  POL</td>
<td>LOTTO Ekstraklasa</td>
<td>502K</td>
<td>Professional</td>
<td>22,386</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
<td>1920</td>
<td>25.0</td>
</tr><tr role="row" class="even">
<td id="5743586" class="sorting_1">Jagodina</td>
<td>5743586</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/SRB.gif" alt="Serbia">  SRB</td>
<td>First League</td>
<td>103K</td>
<td>Professional</td>
<td>15,000</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#0050D0"></span></td>
<td>1918</td>
<td>25.6</td>
</tr><tr role="row" class="odd">
<td id="104388" class="sorting_1">Jaguares</td>
<td>104388</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/MEX.gif" alt="Mexico">  MEX</td>
<td>First Division</td>
<td>1M</td>
<td>Professional</td>
<td>25,222</td>
<td><span class="label" style="background:#00A840"></span> <span class="label" style="background:#08C848"></span></td>
<td>2002</td>
<td>26.3</td>
</tr><tr role="row" class="even">
<td id="76034968" class="sorting_1">Jaguares (COL)</td>
<td>76034968</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/COL.gif" alt="Colombia">  COL</td>
<td>First Division</td>
<td>423K</td>
<td>Professional</td>
<td>8,000</td>
<td><span class="label" style="background:#60C0F8"></span> <span class="label" style="background:#0078F8"></span></td>
<td>2012</td>
<td>26.8</td>
</tr><tr role="row" class="odd">
<td id="2116" class="sorting_1">Jammerbugt FC</td>
<td>2116</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/DEN.gif" alt="Denmark">  DEN</td>
<td>Second Division</td>
<td>0</td>
<td>Semi-Professional</td>
<td>6,000</td>
<td><span class="label" style="background:#00A8E8"></span> <span class="label" style="background:#00A8E8"></span></td>
<td>1973</td>
<td>22.1</td>
</tr><tr role="row" class="even">
<td id="813" class="sorting_1">Jaro</td>
<td>813</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/FIN.gif" alt="Finland">  FIN</td>
<td>First Division</td>
<td>4K</td>
<td>Semi-Professional</td>
<td>5,611</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#E00000"></span></td>
<td>1965</td>
<td>23.7</td>
</tr><tr role="row" class="odd">
<td id="5742987" class="sorting_1">Javor</td>
<td>5742987</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/SRB.gif" alt="Serbia">  SRB</td>
<td>SuperLeague</td>
<td>103K</td>
<td>Professional</td>
<td>4,000</td>
<td><span class="label" style="background:#904090"></span> <span class="label" style="background:#F8F8F8"></span></td>
<td>1912</td>
<td>25.3</td>
</tr><tr role="row" class="even">
<td id="106817" class="sorting_1">Jeju</td>
<td>106817</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/KOR.gif" alt="South Korea">  KOR</td>
<td>K LEAGUE Classic</td>
<td>2M</td>
<td>Professional</td>
<td>35,657</td>
<td><span class="label" style="background:#000040"></span> <span class="label" style="background:#F88000"></span></td>
<td>1982</td>
<td>26.6</td>
</tr><tr role="row" class="odd">
<td id="130776" class="sorting_1">Jeonbuk</td>
<td>130776</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/KOR.gif" alt="South Korea">  KOR</td>
<td>K LEAGUE Classic</td>
<td>5M</td>
<td>Professional</td>
<td>42,477</td>
<td><span class="label" style="background:#081830"></span> <span class="label" style="background:#50D848"></span></td>
<td>1994</td>
<td>26.9</td>
</tr><tr role="row" class="even">
<td id="106812" class="sorting_1">Jeonnam</td>
<td>106812</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/KOR.gif" alt="South Korea">  KOR</td>
<td>K LEAGUE Classic</td>
<td>1M</td>
<td>Professional</td>
<td>14,920</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F8F000"></span></td>
<td>1994</td>
<td>26.2</td>
</tr><tr role="row" class="odd">
<td id="1330" class="sorting_1">Jerv</td>
<td>1330</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/NOR.gif" alt="Norway">  NOR</td>
<td>First Division</td>
<td>5K</td>
<td>Semi-Professional</td>
<td>4,000</td>
<td><span class="label" style="background:#0040F8"></span> <span class="label" style="background:#F8E000"></span></td>
<td>1921</td>
<td>24.9</td>
</tr><tr role="row" class="even">
<td id="131169" class="sorting_1">Jiangsu</td>
<td>131169</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/CHN.gif" alt="China">  CHN</td>
<td>Super League</td>
<td>17M</td>
<td>Professional</td>
<td>61,443</td>
<td><span class="label" style="background:#F8F000"></span> <span class="label" style="background:#0030A0"></span></td>
<td>2000</td>
<td>25.8</td>
</tr><tr role="row" class="odd">
<td id="136153" class="sorting_1">Jihlava</td>
<td>136153</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/CZE.gif" alt="Czech Republic">  CZE</td>
<td>First Division</td>
<td>399K</td>
<td>Professional</td>
<td>4,155</td>
<td><span class="label" style="background:#0020F8"></span> <span class="label" style="background:#002080"></span></td>
<td>1948</td>
<td>25.2</td>
</tr><tr role="row" class="even">
<td id="129191" class="sorting_1">JJK</td>
<td>129191</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/FIN.gif" alt="Finland">  FIN</td>
<td>First Division</td>
<td>861</td>
<td>Semi-Professional</td>
<td>4,500</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#880828"></span></td>
<td>1992</td>
<td>24.1</td>
</tr><tr role="row" class="odd">
<td id="301310" class="sorting_1">JOI</td>
<td>301310</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/BRA.gif" alt="Brazil">  BRA</td>
<td>Second Division</td>
<td>71K</td>
<td>Professional</td>
<td>22,000</td>
<td><span class="label" style="background:#C80000"></span> <span class="label" style="background:#F8F8F8"></span></td>
<td>1976</td>
<td>26.7</td>
</tr><tr role="row" class="even">
<td id="106805" class="sorting_1">Jomo Cosmos</td>
<td>106805</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/RSA.gif" alt="South Africa">  RSA</td>
<td>National First Division</td>
<td>113K</td>
<td>Professional</td>
<td>15,000</td>
<td><span class="label" style="background:#002060"></span> <span class="label" style="background:#E00000"></span></td>
<td>1982</td>
<td>24.7</td>
</tr><tr role="row" class="odd">
<td id="6410547" class="sorting_1">Jonkopings Sodra IF</td>
<td>6410547</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/SWE.gif" alt="Sweden">  SWE</td>
<td>Premier Division</td>
<td>9K</td>
<td>Professional</td>
<td>5,200</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#108830"></span></td>
<td>1922</td>
<td>25.5</td>
</tr><tr role="row" class="even">
<td id="308111" class="sorting_1">Juan Aurich</td>
<td>308111</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/PER.gif" alt="Peru">  PER</td>
<td>First Division</td>
<td>307K</td>
<td>Professional</td>
<td>10,000</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#E00000"></span></td>
<td>1922</td>
<td>25.0</td>
</tr><tr role="row" class="odd">
<td id="67156328" class="sorting_1">Jumilla</td>
<td>67156328</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ESP.gif" alt="Spain">  ESP</td>
<td>Second Division B4</td>
<td>0</td>
<td>Professional</td>
<td>3,000</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#0050D0"></span></td>
<td>2011</td>
<td>27.0</td>
</tr><tr role="row" class="even">
<td id="419" class="sorting_1">Junior</td>
<td>419</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/COL.gif" alt="Colombia">  COL</td>
<td>First Division</td>
<td>3M</td>
<td>Professional</td>
<td>49,612</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#E00000"></span></td>
<td>1924</td>
<td>27.1</td>
</tr><tr role="row" class="odd">
<td id="327" class="sorting_1">JUV</td>
<td>327</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/BRA.gif" alt="Brazil">  BRA</td>
<td>Third Division</td>
<td>0</td>
<td>Professional</td>
<td>23,726</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#008030"></span></td>
<td>1913</td>
<td>25.9</td>
</tr><tr role="row" class="even">
<td id="14031213" class="sorting_1">Juv. Unida (Gualeguaychu)</td>
<td>14031213</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ARG.gif" alt="Argentina">  ARG</td>
<td>Second Division</td>
<td>0</td>
<td>Professional</td>
<td>0</td>
<td><span class="label" style="background:#60C0F8"></span> <span class="label" style="background:#F8F8F8"></span></td>
<td>1907</td>
<td>30.2</td>
</tr><tr role="row" class="odd">
<td id="1138" class="sorting_1">Juve Stabia</td>
<td>1138</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ITA.gif" alt="Italy">  ITA</td>
<td>Serie C/C</td>
<td>129K</td>
<td>Professional</td>
<td>12,800</td>
<td><span class="label" style="background:#F8F000"></span> <span class="label" style="background:#083078"></span></td>
<td>1907</td>
<td>25.5</td>
</tr><tr role="row" class="even">
<td id="130848" class="sorting_1">Juventud de Las Piedras</td>
<td>130848</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/URU.gif" alt="Uruguay">  URU</td>
<td>First Division</td>
<td>3K</td>
<td>Professional</td>
<td>3,500</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
<td>1935</td>
<td>24.2</td>
</tr><tr role="row" class="odd">
<td id="1139" class="sorting_1">Juventus</td>
<td>1139</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ITA.gif" alt="Italy">  ITA</td>
<td>Serie A</td>
<td>21M</td>
<td>Professional</td>
<td>41,475</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
<td>1897</td>
<td>28.0</td>
</tr><tr role="row" class="even">
<td id="7540450" class="sorting_1">Juventus Buc.</td>
<td>7540450</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ROU.gif" alt="Romania">  ROU</td>
<td>Liga II</td>
<td>0</td>
<td>Professional</td>
<td>8,000</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F8F8F8"></span></td>
<td>1992</td>
<td>23.5</td>
</tr><tr role="row" class="odd">
<td id="130298" class="sorting_1">K. Marasspor</td>
<td>130298</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/TUR.gif" alt="Turkey">  TUR</td>
<td>2. League White</td>
<td>0</td>
<td>Professional</td>
<td>15,050</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#E00000"></span></td>
<td>1969</td>
<td>25.5</td>
</tr><tr role="row" class="even">
<td id="450550" class="sorting_1">K?rklarelispor</td>
<td>450550</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/TUR.gif" alt="Turkey">  TUR</td>
<td>2. League Red</td>
<td>0</td>
<td>Professional</td>
<td>2,500</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#008030"></span></td>
<td>1968</td>
<td>27.5</td>
</tr><tr role="row" class="odd">
<td id="4300030" class="sorting_1">KA</td>
<td>4300030</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ISL.gif" alt="Iceland">  ISL</td>
<td>First Division</td>
<td>34K</td>
<td>Semi-Professional</td>
<td>1,645</td>
<td><span class="label" style="background:#0850A8"></span> <span class="label" style="background:#F8F000"></span></td>
<td>1928</td>
<td>25.4</td>
</tr><tr role="row" class="even">
<td id="945" class="sorting_1">Kaiserslautern</td>
<td>945</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/GER.gif" alt="Germany">  GER</td>
<td>Second Division</td>
<td>431K</td>
<td>Professional</td>
<td>47,650</td>
<td><span class="label" style="background:#E00000"></span> <span class="label" style="background:#901000"></span></td>
<td>1900</td>
<td>24.2</td>
</tr><tr role="row" class="odd">
<td id="1643" class="sorting_1">Kaizer Chiefs</td>
<td>1643</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/RSA.gif" alt="South Africa">  RSA</td>
<td>South African Premiership</td>
<td>565K</td>
<td>Professional</td>
<td>87,600</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F8D000"></span></td>
<td>1970</td>
<td>26.6</td>
</tr><tr role="row" class="even">
<td id="129661" class="sorting_1">Kallithea</td>
<td>129661</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/GRE.gif" alt="Greece">  GRE</td>
<td>B Division</td>
<td>0</td>
<td>Professional</td>
<td>6,350</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#0050D0"></span></td>
<td>1966</td>
<td>22.0</td>
</tr><tr role="row" class="odd">
<td id="36023258" class="sorting_1">Kalloni</td>
<td>36023258</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/GRE.gif" alt="Greece">  GRE</td>
<td>B Division</td>
<td>0</td>
<td>Professional</td>
<td>3,300</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#0030A0"></span></td>
<td>1994</td>
<td>23.6</td>
</tr><tr role="row" class="even">
<td id="1809" class="sorting_1">Kalmar FF</td>
<td>1809</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/SWE.gif" alt="Sweden">  SWE</td>
<td>Premier Division</td>
<td>179K</td>
<td>Professional</td>
<td>12,100</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#E00000"></span></td>
<td>1910</td>
<td>25.2</td>
</tr><tr role="row" class="odd">
<td id="7746334" class="sorting_1">Kalteng Putra FC</td>
<td>7746334</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/IDN.gif" alt="Indonesia">  IDN</td>
<td>Premier Division</td>
<td>5K</td>
<td>Professional</td>
<td>25,000</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#E00000"></span></td>
<td>1970</td>
<td>28.8</td>
</tr><tr role="row" class="even">
<td id="137958" class="sorting_1">Kapfenberger SV 1919</td>
<td>137958</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/AUT.gif" alt="Austria">  AUT</td>
<td>First Division</td>
<td>0</td>
<td>Professional</td>
<td>10,000</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#E00000"></span></td>
<td>1919</td>
<td>22.7</td>
</tr><tr role="row" class="odd">
<td id="130368" class="sorting_1">Karabukspor</td>
<td>130368</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/TUR.gif" alt="Turkey">  TUR</td>
<td>Super League</td>
<td>77K</td>
<td>Professional</td>
<td>11,300</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
<td>1969</td>
<td>28.0</td>
</tr><tr role="row" class="even">
<td id="68012711" class="sorting_1">Karlbergs BK</td>
<td>68012711</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/SWE.gif" alt="Sweden">  SWE</td>
<td>Second Division NS</td>
<td>0</td>
<td>Semi-Professional</td>
<td>1,000</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#E00000"></span></td>
<td>1912</td>
<td>22.0</td>
</tr><tr role="row" class="odd">
<td id="2598" class="sorting_1">Karlslunds IF</td>
<td>2598</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/SWE.gif" alt="Sweden">  SWE</td>
<td>Second Division SS</td>
<td>894</td>
<td>Semi-Professional</td>
<td>1,500</td>
<td><span class="label" style="background:#0030A0"></span> <span class="label" style="background:#E00000"></span></td>
<td>1920</td>
<td>20.2</td>
</tr><tr role="row" class="even">
<td id="931" class="sorting_1">Karlsruhe</td>
<td>931</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/GER.gif" alt="Germany">  GER</td>
<td>Second Division</td>
<td>43K</td>
<td>Professional</td>
<td>29,699</td>
<td><span class="label" style="background:#002080"></span> <span class="label" style="background:#0030A0"></span></td>
<td>1894</td>
<td>24.6</td>
</tr><tr role="row" class="odd">
<td id="2168" class="sorting_1">Karlstad BK</td>
<td>2168</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/SWE.gif" alt="Sweden">  SWE</td>
<td>Second Division NG</td>
<td>894</td>
<td>Semi-Professional</td>
<td>10,000</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#0030A0"></span></td>
<td>1923</td>
<td>23.3</td>
</tr><tr role="row" class="even">
<td id="1887" class="sorting_1">Karpaty</td>
<td>1887</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/UKR.gif" alt="Ukraine">  UKR</td>
<td>Premier League</td>
<td>0</td>
<td>Professional</td>
<td>28,051</td>
<td><span class="label" style="background:#48C078"></span> <span class="label" style="background:#F8F8F8"></span></td>
<td>1963</td>
<td>23.3</td>
</tr><tr role="row" class="odd">
<td id="1301256" class="sorting_1">Kars?yaka</td>
<td>1301256</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/TUR.gif" alt="Turkey">  TUR</td>
<td>2. League Red</td>
<td>53K</td>
<td>Professional</td>
<td>10,500</td>
<td><span class="label" style="background:#E00000"></span> <span class="label" style="background:#007850"></span></td>
<td>1912</td>
<td>24.0</td>
</tr><tr role="row" class="even">
<td id="1300307" class="sorting_1">Karvina</td>
<td>1300307</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/CZE.gif" alt="Czech Republic">  CZE</td>
<td>First Division</td>
<td>239K</td>
<td>Professional</td>
<td>4,833</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F8F8F8"></span></td>
<td>1920</td>
<td>24.8</td>
</tr><tr role="row" class="odd">
<td id="130360" class="sorting_1">Kas?mpasa</td>
<td>130360</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/TUR.gif" alt="Turkey">  TUR</td>
<td>Super League</td>
<td>774K</td>
<td>Professional</td>
<td>14,234</td>
<td><span class="label" style="background:#2850A0"></span> <span class="label" style="background:#F8F8F8"></span></td>
<td>1921</td>
<td>25.6</td>
</tr><tr role="row" class="even">
<td id="70061804" class="sorting_1">Kastamonuspor 1966</td>
<td>70061804</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/TUR.gif" alt="Turkey">  TUR</td>
<td>2. League Red</td>
<td>0</td>
<td>Professional</td>
<td>4,033</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
<td>1942</td>
<td>25.1</td>
</tr><tr role="row" class="odd">
<td id="8481880" class="sorting_1">Kayseri Erciyesspor</td>
<td>8481880</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/TUR.gif" alt="Turkey">  TUR</td>
<td>2. League Red</td>
<td>0</td>
<td>Professional</td>
<td>32,864</td>
<td><span class="label" style="background:#0050D0"></span> <span class="label" style="background:#000000"></span></td>
<td>1966</td>
<td>19.7</td>
</tr><tr role="row" class="even">
<td id="1875" class="sorting_1">Kayserispor</td>
<td>1875</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/TUR.gif" alt="Turkey">  TUR</td>
<td>Super League</td>
<td>361K</td>
<td>Professional</td>
<td>32,864</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
<td>1966</td>
<td>24.7</td>
</tr><tr role="row" class="odd">
<td id="454840" class="sorting_1">Keciorengucu</td>
<td>454840</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/TUR.gif" alt="Turkey">  TUR</td>
<td>2. League White</td>
<td>0</td>
<td>Professional</td>
<td>5,040</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#7868C0"></span></td>
<td>1987</td>
<td>26.1</td>
</tr><tr role="row" class="even">
<td id="1073" class="sorting_1">Keflavik</td>
<td>1073</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ISL.gif" alt="Iceland">  ISL</td>
<td>First Division</td>
<td>27K</td>
<td>Semi-Professional</td>
<td>2,658</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#000000"></span></td>
<td>1929</td>
<td>25.6</td>
</tr><tr role="row" class="odd">
<td id="36047244" class="sorting_1">Kerkyra</td>
<td>36047244</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/GRE.gif" alt="Greece">  GRE</td>
<td>Superleague</td>
<td>0</td>
<td>Professional</td>
<td>2,776</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
<td>1984</td>
<td>27.0</td>
</tr><tr role="row" class="even">
<td id="800118" class="sorting_1">KFUM Oslo</td>
<td>800118</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/NOR.gif" alt="Norway">  NOR</td>
<td>First Division</td>
<td>2K</td>
<td>Semi-Professional</td>
<td>2,200</td>
<td><span class="label" style="background:#F01000"></span> <span class="label" style="background:#F8F8F8"></span></td>
<td>1939</td>
<td>26.9</td>
</tr><tr role="row" class="odd">
<td id="1469" class="sorting_1">KGHM Zaglebie</td>
<td>1469</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/POL.gif" alt="Poland">  POL</td>
<td>LOTTO Ekstraklasa</td>
<td>401K</td>
<td>Professional</td>
<td>16,068</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F84000"></span></td>
<td>1946</td>
<td>25.8</td>
</tr><tr role="row" class="even">
<td id="485669" class="sorting_1">Khimik Svetlogorsk</td>
<td>485669</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/BLR.gif" alt="Belarus">  BLR</td>
<td>First League</td>
<td>0</td>
<td>Professional</td>
<td>1,500</td>
<td><span class="label" style="background:#E00808"></span> <span class="label" style="background:#F8F8F8"></span></td>
<td>1971</td>
<td>26.8</td>
</tr><tr role="row" class="odd">
<td id="130525" class="sorting_1">Khimki</td>
<td>130525</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/RUS.gif" alt="Russia">  RUS</td>
<td>First Division</td>
<td>1K</td>
<td>Professional</td>
<td>5,083</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
<td>1997</td>
<td>25.2</td>
</tr><tr role="row" class="even">
<td id="669" class="sorting_1">Kidderminster</td>
<td>669</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ENG.gif" alt="England">  ENG</td>
<td>Vanarama North</td>
<td>18K</td>
<td>Professional</td>
<td>6,444</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#E00000"></span></td>
<td>1886</td>
<td>22.3</td>
</tr><tr role="row" class="odd">
<td id="2245" class="sorting_1">Kiel</td>
<td>2245</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/GER.gif" alt="Germany">  GER</td>
<td>Third Division</td>
<td>0</td>
<td>Professional</td>
<td>10,200</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#304078"></span></td>
<td>1900</td>
<td>25.4</td>
</tr><tr role="row" class="even">
<td id="1580" class="sorting_1">Kilmarnock</td>
<td>1580</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/SCO.gif" alt="Scotland">  SCO</td>
<td>Ladbrokes Premiership</td>
<td>40K</td>
<td>Professional</td>
<td>17,891</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
<td>1869</td>
<td>23.0</td>
</tr><tr role="row" class="odd">
<td id="7861687" class="sorting_1">Kiryat-Shmona</td>
<td>7861687</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ISR.gif" alt="Israel">  ISR</td>
<td>Premier League</td>
<td>115K</td>
<td>Professional</td>
<td>5,000</td>
<td><span class="label" style="background:#0078F8"></span> <span class="label" style="background:#F8F8F8"></span></td>
<td>2000</td>
<td>22.8</td>
</tr><tr role="row" class="even">
<td id="36043527" class="sorting_1">Kissamikos</td>
<td>36043527</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/GRE.gif" alt="Greece">  GRE</td>
<td>B Division</td>
<td>0</td>
<td>Professional</td>
<td>3,700</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#0030A0"></span></td>
<td>1926</td>
<td>25.1</td>
</tr><tr role="row" class="odd">
<td id="38013478" class="sorting_1">Kisvarda</td>
<td>38013478</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/HUN.gif" alt="Hungary">  HUN</td>
<td>Division II</td>
<td>23K</td>
<td>Professional</td>
<td>2,124</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#C00008"></span></td>
<td>2003</td>
<td>26.5</td>
</tr><tr role="row" class="even">
<td id="27010375" class="sorting_1">Kjellerup</td>
<td>27010375</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/DEN.gif" alt="Denmark">  DEN</td>
<td>Second Division</td>
<td>0</td>
<td>Amateur</td>
<td>1,500</td>
<td><span class="label" style="background:#0078F8"></span> <span class="label" style="background:#F8F000"></span></td>
<td>1907</td>
<td>24.4</td>
</tr><tr role="row" class="odd">
<td id="1332" class="sorting_1">Kjelsas</td>
<td>1332</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/NOR.gif" alt="Norway">  NOR</td>
<td>Second Division Group 1</td>
<td>3K</td>
<td>Semi-Professional</td>
<td>800</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#0050D0"></span></td>
<td>1913</td>
<td>25.5</td>
</tr><tr role="row" class="even">
<td id="414230" class="sorting_1">Knockbreda</td>
<td>414230</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/NIR.gif" alt="N.Ireland">  NIR</td>
<td>NIFL C1</td>
<td>0</td>
<td>Semi-Professional</td>
<td>2,500</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F8F000"></span></td>
<td>1947</td>
<td>25.7</td>
</tr><tr role="row" class="odd">
<td id="459119" class="sorting_1">Kocaeli Birlik</td>
<td>459119</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/TUR.gif" alt="Turkey">  TUR</td>
<td>2. League White</td>
<td>0</td>
<td>Professional</td>
<td>2,000</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#008030"></span></td>
<td>1995</td>
<td>27.1</td>
</tr><tr role="row" class="even">
<td id="2121" class="sorting_1">Kolding IF</td>
<td>2121</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/DEN.gif" alt="Denmark">  DEN</td>
<td>Second Division</td>
<td>0</td>
<td>Semi-Professional</td>
<td>12,000</td>
<td><span class="label" style="background:#0050D0"></span> <span class="label" style="background:#F8F8F8"></span></td>
<td>0</td>
<td>23.4</td>
</tr><tr role="row" class="odd">
<td id="916" class="sorting_1">Koln</td>
<td>916</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/GER.gif" alt="Germany">  GER</td>
<td>First Division</td>
<td>4M</td>
<td>Professional</td>
<td>50,000</td>
<td><span class="label" style="background:#C80000"></span> <span class="label" style="background:#F8F8F8"></span></td>
<td>1948</td>
<td>25.0</td>
</tr><tr role="row" class="even">
<td id="71063212" class="sorting_1">Kolos Kovalivka</td>
<td>71063212</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/UKR.gif" alt="Ukraine">  UKR</td>
<td>First League</td>
<td>0</td>
<td>Professional</td>
<td>0</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F8F8F8"></span></td>
<td>2012</td>
<td>26.5</td>
</tr><tr role="row" class="odd">
<td id="136460" class="sorting_1">Kolubara</td>
<td>136460</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/SRB.gif" alt="Serbia">  SRB</td>
<td>First League</td>
<td>52K</td>
<td>Professional</td>
<td>1,000</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#006030"></span></td>
<td>1919</td>
<td>24.8</td>
</tr><tr role="row" class="even">
<td id="1336" class="sorting_1">Kongsvinger</td>
<td>1336</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/NOR.gif" alt="Norway">  NOR</td>
<td>First Division</td>
<td>6K</td>
<td>Semi-Professional</td>
<td>6,300</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#E00000"></span></td>
<td>1892</td>
<td>25.9</td>
</tr><tr role="row" class="odd">
<td id="130344" class="sorting_1">Konyaspor</td>
<td>130344</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/TUR.gif" alt="Turkey">  TUR</td>
<td>Super League</td>
<td>258K</td>
<td>Professional</td>
<td>41,981</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
<td>1981</td>
<td>25.8</td>
</tr><tr role="row" class="even">
<td id="8117093" class="sorting_1">Konyaspor KIF</td>
<td>8117093</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/SWE.gif" alt="Sweden">  SWE</td>
<td>Second Division SS</td>
<td>0</td>
<td>Semi-Professional</td>
<td>500</td>
<td><span class="label" style="background:#008030"></span> <span class="label" style="background:#F8F8F8"></span></td>
<td>1989</td>
<td>20.6</td>
</tr><tr role="row" class="odd">
<td id="1632" class="sorting_1">Koper</td>
<td>1632</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/SVN.gif" alt="Slovenia">  SVN</td>
<td>First League</td>
<td>129K</td>
<td>Professional</td>
<td>4,047</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#D0F060"></span></td>
<td>1920</td>
<td>22.8</td>
</tr><tr role="row" class="even">
<td id="129577" class="sorting_1">Korona</td>
<td>129577</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/POL.gif" alt="Poland">  POL</td>
<td>LOTTO Ekstraklasa</td>
<td>10K</td>
<td>Professional</td>
<td>15,550</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
<td>1973</td>
<td>25.0</td>
</tr><tr role="row" class="odd">
<td id="2601" class="sorting_1">Kortedala IF</td>
<td>2601</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/SWE.gif" alt="Sweden">  SWE</td>
<td>Second Division NG</td>
<td>0</td>
<td>Semi-Professional</td>
<td>1,000</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#000000"></span></td>
<td>1956</td>
<td>25.0</td>
</tr><tr role="row" class="even">
<td id="7565209" class="sorting_1">Kosice</td>
<td>7565209</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/SVK.gif" alt="Slovakia">  SVK</td>
<td>Second Division</td>
<td>4K</td>
<td>Professional</td>
<td>9,000</td>
<td><span class="label" style="background:#0050D0"></span> <span class="label" style="background:#F8F000"></span></td>
<td>2005</td>
<td>22.6</td>
</tr><tr role="row" class="odd">
<td id="38004848" class="sorting_1">Kozarmisleny</td>
<td>38004848</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/HUN.gif" alt="Hungary">  HUN</td>
<td>Division II</td>
<td>8K</td>
<td>Professional</td>
<td>1,200</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#002060"></span></td>
<td>1989</td>
<td>23.6</td>
</tr><tr role="row" class="even">
<td id="129208" class="sorting_1">KPV</td>
<td>129208</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/FIN.gif" alt="Finland">  FIN</td>
<td>First Division</td>
<td>861</td>
<td>Semi-Professional</td>
<td>3,000</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#008030"></span></td>
<td>1930</td>
<td>27.6</td>
</tr><tr role="row" class="odd">
<td id="1076" class="sorting_1">KR</td>
<td>1076</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ISL.gif" alt="Iceland">  ISL</td>
<td>Premier Division</td>
<td>134K</td>
<td>Professional</td>
<td>2,781</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#000000"></span></td>
<td>1899</td>
<td>23.8</td>
</tr><tr role="row" class="even">
<td id="7586985" class="sorting_1">Kranj</td>
<td>7586985</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/SVN.gif" alt="Slovenia">  SVN</td>
<td>Second League</td>
<td>43K</td>
<td>Semi-Professional</td>
<td>1,000</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#C80000"></span></td>
<td>1973</td>
<td>21.9</td>
</tr><tr role="row" class="odd">
<td id="58029064" class="sorting_1">Krasnodar</td>
<td>58029064</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/RUS.gif" alt="Russia">  RUS</td>
<td>Premier Division</td>
<td>861K</td>
<td>Professional</td>
<td>35,200</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#004828"></span></td>
<td>2007</td>
<td>24.7</td>
</tr><tr role="row" class="even">
<td id="258" class="sorting_1">KRC Genk</td>
<td>258</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/BEL.gif" alt="Belgium">  BEL</td>
<td>Pro League</td>
<td>2M</td>
<td>Professional</td>
<td>24,604</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#0050D0"></span></td>
<td>1923</td>
<td>22.0</td>
</tr><tr role="row" class="odd">
<td id="2603" class="sorting_1">Kristianstad FC</td>
<td>2603</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/SWE.gif" alt="Sweden">  SWE</td>
<td>First Division South</td>
<td>0</td>
<td>Semi-Professional</td>
<td>6,000</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F88000"></span></td>
<td>1990</td>
<td>22.4</td>
</tr><tr role="row" class="even">
<td id="763464" class="sorting_1">Kristiansund</td>
<td>763464</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/NOR.gif" alt="Norway">  NOR</td>
<td>First Division</td>
<td>5K</td>
<td>Semi-Professional</td>
<td>3,155</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#002080"></span></td>
<td>2003</td>
<td>25.4</td>
</tr><tr role="row" class="odd">
<td id="5410639" class="sorting_1">Krka</td>
<td>5410639</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/SVN.gif" alt="Slovenia">  SVN</td>
<td>Second League</td>
<td>78K</td>
<td>Professional</td>
<td>1,500</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#006030"></span></td>
<td>1922</td>
<td>21.8</td>
</tr><tr role="row" class="even">
<td id="7580708" class="sorting_1">Krsko</td>
<td>7580708</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/SVN.gif" alt="Slovenia">  SVN</td>
<td>First League</td>
<td>129K</td>
<td>Professional</td>
<td>1,470</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#008030"></span></td>
<td>1922</td>
<td>22.0</td>
</tr><tr role="row" class="odd">
<td id="17029580" class="sorting_1">Krumkachy</td>
<td>17029580</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/BLR.gif" alt="Belarus">  BLR</td>
<td>Highest League</td>
<td>9K</td>
<td>Professional</td>
<td>3,000</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#000000"></span></td>
<td>2014</td>
<td>25.0</td>
</tr><tr role="row" class="even">
<td id="1523" class="sorting_1">Krylja Sovetov</td>
<td>1523</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/RUS.gif" alt="Russia">  RUS</td>
<td>Premier Division</td>
<td>43K</td>
<td>Professional</td>
<td>30,251</td>
<td><span class="label" style="background:#60C0F8"></span> <span class="label" style="background:#60A0D0"></span></td>
<td>1942</td>
<td>25.0</td>
</tr><tr role="row" class="odd">
<td id="521105" class="sorting_1">KTP</td>
<td>521105</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/FIN.gif" alt="Finland">  FIN</td>
<td>First Division</td>
<td>2K</td>
<td>Semi-Professional</td>
<td>4,252</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#008030"></span></td>
<td>1927</td>
<td>23.8</td>
</tr><tr role="row" class="even">
<td id="130536" class="sorting_1">Kuban</td>
<td>130536</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/RUS.gif" alt="Russia">  RUS</td>
<td>First Division</td>
<td>0</td>
<td>Professional</td>
<td>35,200</td>
<td><span class="label" style="background:#108048"></span> <span class="label" style="background:#F8F000"></span></td>
<td>1928</td>
<td>27.1</td>
</tr><tr role="row" class="odd">
<td id="818" class="sorting_1">KuPS</td>
<td>818</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/FIN.gif" alt="Finland">  FIN</td>
<td>Premier League</td>
<td>9K</td>
<td>Professional</td>
<td>4,700</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F8F000"></span></td>
<td>1923</td>
<td>23.9</td>
</tr><tr role="row" class="even">
<td id="231" class="sorting_1">KV Kortrijk</td>
<td>231</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/BEL.gif" alt="Belgium">  BEL</td>
<td>Pro League</td>
<td>0</td>
<td>Professional</td>
<td>9,399</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#E00000"></span></td>
<td>1901</td>
<td>26.0</td>
</tr><tr role="row" class="odd">
<td id="232" class="sorting_1">KV Mechelen</td>
<td>232</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/BEL.gif" alt="Belgium">  BEL</td>
<td>Pro League</td>
<td>258K</td>
<td>Professional</td>
<td>17,500</td>
<td><span class="label" style="background:#F8F000"></span> <span class="label" style="background:#E00000"></span></td>
<td>1904</td>
<td>24.7</td>
</tr><tr role="row" class="even">
<td id="68020053" class="sorting_1">Kvarnby IK</td>
<td>68020053</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/SWE.gif" alt="Sweden">  SWE</td>
<td>Second Division SG</td>
<td>0</td>
<td>Semi-Professional</td>
<td>500</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#0030A0"></span></td>
<td>1906</td>
<td>21.9</td>
</tr><tr role="row" class="odd">
<td id="2608" class="sorting_1">Kvarnsvedens IK</td>
<td>2608</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/SWE.gif" alt="Sweden">  SWE</td>
<td>Second Division NS</td>
<td>0</td>
<td>Semi-Professional</td>
<td>2,000</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#E00000"></span></td>
<td>1907</td>
<td>23.0</td>
</tr><tr role="row" class="even">
<td id="801870" class="sorting_1">Kvik Halden</td>
<td>801870</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/NOR.gif" alt="Norway">  NOR</td>
<td>Second Division Group 4</td>
<td>6K</td>
<td>Semi-Professional</td>
<td>4,000</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#F80000"></span></td>
<td>1906</td>
<td>23.6</td>
</tr><tr role="row" class="odd">
<td id="855" class="sorting_1">La Berrichonne</td>
<td>855</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/FRA.gif" alt="France">  FRA</td>
<td>National</td>
<td>258K</td>
<td>Professional</td>
<td>17,072</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
<td>1883</td>
<td>25.4</td>
</tr><tr role="row" class="even">
<td id="5261741" class="sorting_1">La Equidad</td>
<td>5261741</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/COL.gif" alt="Colombia">  COL</td>
<td>First Division</td>
<td>538K</td>
<td>Professional</td>
<td>10,000</td>
<td><span class="label" style="background:#80E030"></span> <span class="label" style="background:#008030"></span></td>
<td>1982</td>
<td>26.2</td>
</tr><tr role="row" class="odd">
<td id="7446450" class="sorting_1">La Roda</td>
<td>7446450</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ESP.gif" alt="Spain">  ESP</td>
<td>Second Division B4</td>
<td>6K</td>
<td>Professional</td>
<td>3,000</td>
<td><span class="label" style="background:#0030A0"></span> <span class="label" style="background:#F00000"></span></td>
<td>1999</td>
<td>24.4</td>
</tr><tr role="row" class="even">
<td id="2609" class="sorting_1">Laholms FK</td>
<td>2609</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/SWE.gif" alt="Sweden">  SWE</td>
<td>Second Division WG</td>
<td>0</td>
<td>Semi-Professional</td>
<td>1,000</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F8F8F8"></span></td>
<td>1957</td>
<td>20.8</td>
</tr><tr role="row" class="odd">
<td id="7642394" class="sorting_1">Lajong</td>
<td>7642394</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/IND.gif" alt="India">  IND</td>
<td>National Football League</td>
<td>2K</td>
<td>Professional</td>
<td>22,000</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#C80000"></span></td>
<td>1983</td>
<td>20.9</td>
</tr><tr role="row" class="even">
<td id="682130" class="sorting_1">Lamia</td>
<td>682130</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/GRE.gif" alt="Greece">  GRE</td>
<td>B Division</td>
<td>0</td>
<td>Professional</td>
<td>5,500</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#0050D0"></span></td>
<td>1964</td>
<td>25.2</td>
</tr><tr role="row" class="odd">
<td id="1811" class="sorting_1">Landskrona BoIS</td>
<td>1811</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/SWE.gif" alt="Sweden">  SWE</td>
<td>First Division South</td>
<td>0</td>
<td>Professional</td>
<td>11,900</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F8F8F8"></span></td>
<td>1915</td>
<td>23.4</td>
</tr><tr role="row" class="even">
<td id="90" class="sorting_1">Lanus</td>
<td>90</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ARG.gif" alt="Argentina">  ARG</td>
<td>Premier Division</td>
<td>768K</td>
<td>Professional</td>
<td>46,619</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#680810"></span></td>
<td>1915</td>
<td>26.9</td>
</tr><tr role="row" class="odd">
<td id="978" class="sorting_1">Larisa</td>
<td>978</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/GRE.gif" alt="Greece">  GRE</td>
<td>Superleague</td>
<td>0</td>
<td>Professional</td>
<td>16,118</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#800020"></span></td>
<td>1964</td>
<td>24.8</td>
</tr><tr role="row" class="even">
<td id="1283" class="sorting_1">Larne</td>
<td>1283</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/NIR.gif" alt="N.Ireland">  NIR</td>
<td>NIFL C1</td>
<td>0</td>
<td>Semi-Professional</td>
<td>1,100</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#B00000"></span></td>
<td>1889</td>
<td>26.0</td>
</tr><tr role="row" class="odd">
<td id="1772" class="sorting_1">Las Palmas</td>
<td>1772</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ESP.gif" alt="Spain">  ESP</td>
<td>First Division</td>
<td>431K</td>
<td>Professional</td>
<td>32,000</td>
<td><span class="label" style="background:#1068F8"></span> <span class="label" style="background:#F8F000"></span></td>
<td>1949</td>
<td>27.0</td>
</tr><tr role="row" class="even">
<td id="154" class="sorting_1">LASK Linz</td>
<td>154</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/AUT.gif" alt="Austria">  AUT</td>
<td>First Division</td>
<td>0</td>
<td>Professional</td>
<td>7,152</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F8F8F8"></span></td>
<td>1908</td>
<td>21.3</td>
</tr><tr role="row" class="odd">
<td id="700060" class="sorting_1">Latina</td>
<td>700060</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ITA.gif" alt="Italy">  ITA</td>
<td>Serie B</td>
<td>345K</td>
<td>Professional</td>
<td>7,191</td>
<td><span class="label" style="background:#0050D0"></span> <span class="label" style="background:#000000"></span></td>
<td>1945</td>
<td>24.9</td>
</tr><tr role="row" class="even">
<td id="1856" class="sorting_1">Lausanne</td>
<td>1856</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/SUI.gif" alt="Switzerland">  SUI</td>
<td>Super League</td>
<td>79K</td>
<td>Professional</td>
<td>15,770</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#0050D0"></span></td>
<td>1869</td>
<td>23.5</td>
</tr><tr role="row" class="odd">
<td id="1140" class="sorting_1">Lazio</td>
<td>1140</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ITA.gif" alt="Italy">  ITA</td>
<td>Serie A</td>
<td>6M</td>
<td>Professional</td>
<td>70,634</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#A0C8F0"></span></td>
<td>1900</td>
<td>24.9</td>
</tr><tr role="row" class="even">
<td id="69005058" class="sorting_1">Le Mont LS</td>
<td>69005058</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/SUI.gif" alt="Switzerland">  SUI</td>
<td>Challenge League</td>
<td>6K</td>
<td>Professional</td>
<td>2,000</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#E00000"></span></td>
<td>1942</td>
<td>25.7</td>
</tr><tr role="row" class="odd">
<td id="109003" class="sorting_1">Lealtad</td>
<td>109003</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ESP.gif" alt="Spain">  ESP</td>
<td>Second Division B1</td>
<td>0</td>
<td>Semi-Professional</td>
<td>3,000</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#000000"></span></td>
<td>1919</td>
<td>24.9</td>
</tr><tr role="row" class="even">
<td id="900678" class="sorting_1">LEC</td>
<td>900678</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/BRA.gif" alt="Brazil">  BRA</td>
<td>Second Division</td>
<td>83K</td>
<td>Professional</td>
<td>31,000</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#008030"></span></td>
<td>1956</td>
<td>26.3</td>
</tr><tr role="row" class="odd">
<td id="1141" class="sorting_1">Lecce</td>
<td>1141</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ITA.gif" alt="Italy">  ITA</td>
<td>Serie C/C</td>
<td>258K</td>
<td>Professional</td>
<td>33,876</td>
<td><span class="label" style="background:#E00000"></span> <span class="label" style="background:#F8F000"></span></td>
<td>1908</td>
<td>26.0</td>
</tr><tr role="row" class="even">
<td id="1455" class="sorting_1">Lech</td>
<td>1455</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/POL.gif" alt="Poland">  POL</td>
<td>LOTTO Ekstraklasa</td>
<td>301K</td>
<td>Professional</td>
<td>43,269</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
<td>1922</td>
<td>25.7</td>
</tr><tr role="row" class="odd">
<td id="715912" class="sorting_1">Lechia</td>
<td>715912</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/POL.gif" alt="Poland">  POL</td>
<td>LOTTO Ekstraklasa</td>
<td>602K</td>
<td>Professional</td>
<td>41,620</td>
<td><span class="label" style="background:#00A030"></span> <span class="label" style="background:#F8F8F8"></span></td>
<td>1945</td>
<td>26.5</td>
</tr><tr role="row" class="even">
<td id="671" class="sorting_1">Leeds</td>
<td>671</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ENG.gif" alt="England">  ENG</td>
<td>Sky Bet Championship</td>
<td>100K</td>
<td>Professional</td>
<td>37,890</td>
<td><span class="label" style="background:#0030A0"></span> <span class="label" style="background:#F8F8F8"></span></td>
<td>1919</td>
<td>24.8</td>
</tr><tr role="row" class="odd">
<td id="1678" class="sorting_1">Leganes</td>
<td>1678</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ESP.gif" alt="Spain">  ESP</td>
<td>First Division</td>
<td>0</td>
<td>Professional</td>
<td>11,000</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#0050D0"></span></td>
<td>1928</td>
<td>25.3</td>
</tr><tr role="row" class="even">
<td id="1456" class="sorting_1">Legia</td>
<td>1456</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/POL.gif" alt="Poland">  POL</td>
<td>LOTTO Ekstraklasa</td>
<td>1M</td>
<td>Professional</td>
<td>30,967</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F8F8F8"></span></td>
<td>1916</td>
<td>27.3</td>
</tr><tr role="row" class="odd">
<td id="673" class="sorting_1">Leicester</td>
<td>673</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ENG.gif" alt="England">  ENG</td>
<td>Premier Division</td>
<td>10M</td>
<td>Professional</td>
<td>32,312</td>
<td><span class="label" style="background:#0030A0"></span> <span class="label" style="background:#002080"></span></td>
<td>1884</td>
<td>27.2</td>
</tr><tr role="row" class="even">
<td id="7842825" class="sorting_1">Leiknir F.</td>
<td>7842825</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ISL.gif" alt="Iceland">  ISL</td>
<td>First Division</td>
<td>7K</td>
<td>Semi-Professional</td>
<td>1,500</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#E00000"></span></td>
<td>1940</td>
<td>24.9</td>
</tr><tr role="row" class="odd">
<td id="7840114" class="sorting_1">Leiknir R.</td>
<td>7840114</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ISL.gif" alt="Iceland">  ISL</td>
<td>First Division</td>
<td>13K</td>
<td>Semi-Professional</td>
<td>1,025</td>
<td><span class="label" style="background:#901000"></span> <span class="label" style="background:#0820E0"></span></td>
<td>1973</td>
<td>23.4</td>
</tr><tr role="row" class="even">
<td id="67059945" class="sorting_1">Leioa</td>
<td>67059945</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ESP.gif" alt="Spain">  ESP</td>
<td>Second Division B2</td>
<td>0</td>
<td>Semi-Professional</td>
<td>2,000</td>
<td><span class="label" style="background:#0030A0"></span> <span class="label" style="background:#D02028"></span></td>
<td>1948</td>
<td>23.9</td>
</tr><tr role="row" class="odd">
<td id="1493" class="sorting_1">Leiria</td>
<td>1493</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/POR.gif" alt="Portugal">  POR</td>
<td>PT Championship</td>
<td>43K</td>
<td>Professional</td>
<td>23,888</td>
<td><span class="label" style="background:#E00000"></span> <span class="label" style="background:#F8F8F8"></span></td>
<td>1966</td>
<td>22.9</td>
</tr><tr role="row" class="even">
<td id="2406" class="sorting_1">Leixoes</td>
<td>2406</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/POR.gif" alt="Portugal">  POR</td>
<td>Second League</td>
<td>43K</td>
<td>Professional</td>
<td>8,035</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
<td>1907</td>
<td>23.3</td>
</tr><tr role="row" class="odd">
<td id="1259" class="sorting_1">Leon</td>
<td>1259</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/MEX.gif" alt="Mexico">  MEX</td>
<td>First Division</td>
<td>3M</td>
<td>Professional</td>
<td>33,800</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#40B868"></span></td>
<td>1944</td>
<td>27.6</td>
</tr><tr role="row" class="even">
<td id="309348" class="sorting_1">Leones F.C.</td>
<td>309348</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/COL.gif" alt="Colombia">  COL</td>
<td>Second Division</td>
<td>192K</td>
<td>Professional</td>
<td>12,000</td>
<td><span class="label" style="background:#00A030"></span> <span class="label" style="background:#F8F000"></span></td>
<td>1957</td>
<td>22.4</td>
</tr><tr role="row" class="odd">
<td id="2093" class="sorting_1">Leonesa</td>
<td>2093</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ESP.gif" alt="Spain">  ESP</td>
<td>Second Division B1</td>
<td>43K</td>
<td>Professional</td>
<td>13,451</td>
<td><span class="label" style="background:#800020"></span> <span class="label" style="background:#F8F8F8"></span></td>
<td>1923</td>
<td>24.0</td>
</tr><tr role="row" class="even">
<td id="979" class="sorting_1">Levadeiakos</td>
<td>979</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/GRE.gif" alt="Greece">  GRE</td>
<td>Superleague</td>
<td>0</td>
<td>Professional</td>
<td>5,915</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
<td>1961</td>
<td>26.2</td>
</tr><tr role="row" class="odd">
<td id="750633" class="sorting_1">Levanger</td>
<td>750633</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/NOR.gif" alt="Norway">  NOR</td>
<td>First Division</td>
<td>0</td>
<td>Semi-Professional</td>
<td>1,500</td>
<td><span class="label" style="background:#E00000"></span> <span class="label" style="background:#F8F8F8"></span></td>
<td>1996</td>
<td>26.8</td>
</tr><tr role="row" class="even">
<td id="1717" class="sorting_1">Levante</td>
<td>1717</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ESP.gif" alt="Spain">  ESP</td>
<td>Second Division</td>
<td>0</td>
<td>Professional</td>
<td>25,354</td>
<td><span class="label" style="background:#982028"></span> <span class="label" style="background:#2850A0"></span></td>
<td>1909</td>
<td>25.4</td>
</tr><tr role="row" class="odd">
<td id="814092" class="sorting_1">Levante B</td>
<td>814092</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ESP.gif" alt="Spain">  ESP</td>
<td>Second Division B3</td>
<td>0</td>
<td>Professional</td>
<td>2,500</td>
<td><span class="label" style="background:#E00000"></span> <span class="label" style="background:#305098"></span></td>
<td>1939</td>
<td>20.5</td>
</tr><tr role="row" class="even">
<td id="901" class="sorting_1">Leverkusen</td>
<td>901</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/GER.gif" alt="Germany">  GER</td>
<td>First Division</td>
<td>3M</td>
<td>Professional</td>
<td>30,210</td>
<td><span class="label" style="background:#E00000"></span> <span class="label" style="background:#000000"></span></td>
<td>1904</td>
<td>23.6</td>
</tr><tr role="row" class="odd">
<td id="349" class="sorting_1">Levski</td>
<td>349</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/BUL.gif" alt="Bulgaria">  BUL</td>
<td>First League</td>
<td>132K</td>
<td>Professional</td>
<td>19,000</td>
<td><span class="label" style="background:#2838A0"></span> <span class="label" style="background:#1068F8"></span></td>
<td>1914</td>
<td>25.8</td>
</tr><tr role="row" class="even">
<td id="7508944" class="sorting_1">Levski Karlovo</td>
<td>7508944</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/BUL.gif" alt="Bulgaria">  BUL</td>
<td>Second League</td>
<td>0</td>
<td>Professional</td>
<td>5,000</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#0050D0"></span></td>
<td>1923</td>
<td>27.5</td>
</tr><tr role="row" class="odd">
<td id="674" class="sorting_1">Leyton Orient</td>
<td>674</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ENG.gif" alt="England">  ENG</td>
<td>Sky Bet League Two</td>
<td>0</td>
<td>Professional</td>
<td>9,311</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F00000"></span></td>
<td>1881</td>
<td>24.1</td>
</tr><tr role="row" class="even">
<td id="128051" class="sorting_1">Liaoning</td>
<td>128051</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/CHN.gif" alt="China">  CHN</td>
<td>Super League</td>
<td>461K</td>
<td>Professional</td>
<td>60,000</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#E00000"></span></td>
<td>1995</td>
<td>27.7</td>
</tr><tr role="row" class="odd">
<td id="130881" class="sorting_1">Lida</td>
<td>130881</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/BLR.gif" alt="Belarus">  BLR</td>
<td>First League</td>
<td>0</td>
<td>Professional</td>
<td>3,000</td>
<td><span class="label" style="background:#E00000"></span> <span class="label" style="background:#F8F8F8"></span></td>
<td>1962</td>
<td>24.9</td>
</tr><tr role="row" class="even">
<td id="2558" class="sorting_1">Lidkopings FK</td>
<td>2558</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/SWE.gif" alt="Sweden">  SWE</td>
<td>Second Division NG</td>
<td>0</td>
<td>Semi-Professional</td>
<td>2,500</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#E00000"></span></td>
<td>2012</td>
<td>22.2</td>
</tr><tr role="row" class="odd">
<td id="268" class="sorting_1">Lierse</td>
<td>268</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/BEL.gif" alt="Belgium">  BEL</td>
<td>Pro League B</td>
<td>0</td>
<td>Professional</td>
<td>14,538</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F8F000"></span></td>
<td>1906</td>
<td>23.5</td>
</tr><tr role="row" class="even">
<td id="1341" class="sorting_1">Lillestrom</td>
<td>1341</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/NOR.gif" alt="Norway">  NOR</td>
<td>Premier Division</td>
<td>57K</td>
<td>Professional</td>
<td>12,200</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F0D868"></span></td>
<td>1917</td>
<td>23.6</td>
</tr><tr role="row" class="odd">
<td id="116334" class="sorting_1">Limavady Utd</td>
<td>116334</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/NIR.gif" alt="N.Ireland">  NIR</td>
<td>NIFL C2</td>
<td>0</td>
<td>Semi-Professional</td>
<td>550</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#0050D0"></span></td>
<td>1884</td>
<td>25.7</td>
</tr><tr role="row" class="even">
<td id="129380" class="sorting_1">Limerick F.C.</td>
<td>129380</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/IRL.gif" alt="Ireland">  IRL</td>
<td>First Division</td>
<td>0</td>
<td>Professional</td>
<td>3,200</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
<td>1937</td>
<td>22.8</td>
</tr><tr role="row" class="odd">
<td id="729707" class="sorting_1">Limianos</td>
<td>729707</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/POR.gif" alt="Portugal">  POR</td>
<td>PT Championship</td>
<td>4K</td>
<td>Semi-Professional</td>
<td>3,000</td>
<td><span class="label" style="background:#F8D000"></span> <span class="label" style="background:#600060"></span></td>
<td>1953</td>
<td>21.4</td>
</tr><tr role="row" class="even">
<td id="67174187" class="sorting_1">Linares</td>
<td>67174187</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ESP.gif" alt="Spain">  ESP</td>
<td>Second Division B4</td>
<td>0</td>
<td>Professional</td>
<td>10,000</td>
<td><span class="label" style="background:#0030A0"></span> <span class="label" style="background:#002080"></span></td>
<td>2009</td>
<td>24.1</td>
</tr><tr role="row" class="odd">
<td id="675" class="sorting_1">Lincoln</td>
<td>675</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ENG.gif" alt="England">  ENG</td>
<td>Vanarama National</td>
<td>86K</td>
<td>Professional</td>
<td>10,120</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#E00000"></span></td>
<td>1884</td>
<td>25.4</td>
</tr><tr role="row" class="even">
<td id="619816" class="sorting_1">Lindome GIF</td>
<td>619816</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/SWE.gif" alt="Sweden">  SWE</td>
<td>Second Division WG</td>
<td>0</td>
<td>Semi-Professional</td>
<td>800</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
<td>1928</td>
<td>23.7</td>
</tr><tr role="row" class="odd">
<td id="620928" class="sorting_1">Lindsdals IF</td>
<td>620928</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/SWE.gif" alt="Sweden">  SWE</td>
<td>Second Division SG</td>
<td>0</td>
<td>Semi-Professional</td>
<td>1,000</td>
<td><span class="label" style="background:#F8D000"></span> <span class="label" style="background:#000000"></span></td>
<td>1926</td>
<td>22.8</td>
</tr><tr role="row" class="even">
<td id="4212111" class="sorting_1">Linense</td>
<td>4212111</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ESP.gif" alt="Spain">  ESP</td>
<td>Second Division B4</td>
<td>7K</td>
<td>Professional</td>
<td>15,000</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F8F8F8"></span></td>
<td>1912</td>
<td>25.2</td>
</tr><tr role="row" class="odd">
<td id="1284" class="sorting_1">Linfield</td>
<td>1284</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/NIR.gif" alt="N.Ireland">  NIR</td>
<td>Danske Bank Premier</td>
<td>50K</td>
<td>Semi-Professional</td>
<td>18,000</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#0050D0"></span></td>
<td>1886</td>
<td>26.5</td>
</tr><tr role="row" class="even">
<td id="7564894" class="sorting_1">Lipany</td>
<td>7564894</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/SVK.gif" alt="Slovakia">  SVK</td>
<td>Second Division</td>
<td>0</td>
<td>Professional</td>
<td>4,000</td>
<td><span class="label" style="background:#108830"></span> <span class="label" style="background:#108830"></span></td>
<td>1925</td>
<td>25.1</td>
</tr><tr role="row" class="odd">
<td id="63000893" class="sorting_1">Liptovsky Mikulas</td>
<td>63000893</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/SVK.gif" alt="Slovakia">  SVK</td>
<td>Second Division</td>
<td>5K</td>
<td>Professional</td>
<td>1,950</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#E00000"></span></td>
<td>1934</td>
<td>22.7</td>
</tr><tr role="row" class="even">
<td id="676" class="sorting_1">Liverpool</td>
<td>676</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ENG.gif" alt="England">  ENG</td>
<td>Premier Division</td>
<td>40M</td>
<td>Professional</td>
<td>54,074</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#D81818"></span></td>
<td>1892</td>
<td>24.7</td>
</tr><tr role="row" class="odd">
<td id="1920" class="sorting_1">Liverpool de Montevideo</td>
<td>1920</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/URU.gif" alt="Uruguay">  URU</td>
<td>First Division</td>
<td>3K</td>
<td>Professional</td>
<td>6,589</td>
<td><span class="label" style="background:#1860F8"></span> <span class="label" style="background:#000000"></span></td>
<td>1915</td>
<td>25.2</td>
</tr><tr role="row" class="even">
<td id="1581" class="sorting_1">Livingston</td>
<td>1581</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/SCO.gif" alt="Scotland">  SCO</td>
<td>Ladbrokes League 1</td>
<td>0</td>
<td>Professional</td>
<td>8,716</td>
<td><span class="label" style="background:#F0E020"></span> <span class="label" style="background:#000000"></span></td>
<td>1974</td>
<td>21.6</td>
</tr><tr role="row" class="odd">
<td id="2206" class="sorting_1">Livorno</td>
<td>2206</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ITA.gif" alt="Italy">  ITA</td>
<td>Serie C/A</td>
<td>689K</td>
<td>Professional</td>
<td>19,238</td>
<td><span class="label" style="background:#600000"></span> <span class="label" style="background:#782838"></span></td>
<td>1915</td>
<td>26.1</td>
</tr><tr role="row" class="even">
<td id="2175" class="sorting_1">Ljungskile SK</td>
<td>2175</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/SWE.gif" alt="Sweden">  SWE</td>
<td>First Division Elite</td>
<td>894</td>
<td>Professional</td>
<td>4,250</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#48A068"></span></td>
<td>1926</td>
<td>26.3</td>
</tr><tr role="row" class="odd">
<td id="67083594" class="sorting_1">Llagostera</td>
<td>67083594</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ESP.gif" alt="Spain">  ESP</td>
<td>Second Division B3</td>
<td>11K</td>
<td>Professional</td>
<td>5,824</td>
<td><span class="label" style="background:#C82030"></span> <span class="label" style="background:#304078"></span></td>
<td>1947</td>
<td>26.0</td>
</tr><tr role="row" class="even">
<td id="350239" class="sorting_1">Llandudno</td>
<td>350239</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/WAL.gif" alt="Wales">  WAL</td>
<td>Welsh Premier League</td>
<td>30K</td>
<td>Semi-Professional</td>
<td>2,000</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#000000"></span></td>
<td>1921</td>
<td>24.5</td>
</tr><tr role="row" class="odd">
<td id="76033284" class="sorting_1">Llaneros F.C.</td>
<td>76033284</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/COL.gif" alt="Colombia">  COL</td>
<td>Second Division</td>
<td>177K</td>
<td>Professional</td>
<td>15,000</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F8F8F8"></span></td>
<td>2012</td>
<td>23.5</td>
</tr><tr role="row" class="even">
<td id="67148466" class="sorting_1">Lleida</td>
<td>67148466</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ESP.gif" alt="Spain">  ESP</td>
<td>Second Division B3</td>
<td>10K</td>
<td>Professional</td>
<td>13,500</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#1850F8"></span></td>
<td>2011</td>
<td>24.8</td>
</tr><tr role="row" class="odd">
<td id="5666503" class="sorting_1">Lobos BUAP</td>
<td>5666503</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/MEX.gif" alt="Mexico">  MEX</td>
<td>Promotion League</td>
<td>115K</td>
<td>Professional</td>
<td>21,750</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F8F8F8"></span></td>
<td>1966</td>
<td>26.4</td>
</tr><tr role="row" class="even">
<td id="67089705" class="sorting_1">Logrones</td>
<td>67089705</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ESP.gif" alt="Spain">  ESP</td>
<td>Second Division B2</td>
<td>74K</td>
<td>Professional</td>
<td>16,000</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#E00000"></span></td>
<td>2009</td>
<td>24.6</td>
</tr><tr role="row" class="odd">
<td id="265" class="sorting_1">Lokeren</td>
<td>265</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/BEL.gif" alt="Belgium">  BEL</td>
<td>Pro League</td>
<td>775K</td>
<td>Professional</td>
<td>12,461</td>
<td><span class="label" style="background:#F8D000"></span> <span class="label" style="background:#000000"></span></td>
<td>1915</td>
<td>26.8</td>
</tr><tr role="row" class="even">
<td id="350" class="sorting_1">Lokomotiv Gorna</td>
<td>350</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/BUL.gif" alt="Bulgaria">  BUL</td>
<td>First League</td>
<td>15K</td>
<td>Professional</td>
<td>11,800</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#000000"></span></td>
<td>1932</td>
<td>26.6</td>
</tr><tr role="row" class="odd">
<td id="1525" class="sorting_1">Lokomotiv Moscow</td>
<td>1525</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/RUS.gif" alt="Russia">  RUS</td>
<td>Premier Division</td>
<td>861K</td>
<td>Professional</td>
<td>28,800</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
<td>1923</td>
<td>28.0</td>
</tr><tr role="row" class="even">
<td id="351" class="sorting_1">Lokomotiv Plovdiv</td>
<td>351</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/BUL.gif" alt="Bulgaria">  BUL</td>
<td>First League</td>
<td>15K</td>
<td>Professional</td>
<td>11,800</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#000000"></span></td>
<td>1936</td>
<td>26.3</td>
</tr><tr role="row" class="odd">
<td id="352" class="sorting_1">Lokomotiv Sofia</td>
<td>352</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/BUL.gif" alt="Bulgaria">  BUL</td>
<td>Second League</td>
<td>0</td>
<td>Professional</td>
<td>15,000</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
<td>1929</td>
<td>23.8</td>
</tr><tr role="row" class="even">
<td id="129859" class="sorting_1">Lokomotiva</td>
<td>129859</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/CRO.gif" alt="Croatia">  CRO</td>
<td>First League</td>
<td>43K</td>
<td>Professional</td>
<td>8,850</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#2850A0"></span></td>
<td>1914</td>
<td>21.0</td>
</tr><tr role="row" class="odd">
<td id="1618" class="sorting_1">Lokomotiva Kosice</td>
<td>1618</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/SVK.gif" alt="Slovakia">  SVK</td>
<td>Second Division</td>
<td>10K</td>
<td>Professional</td>
<td>650</td>
<td><span class="label" style="background:#002080"></span> <span class="label" style="background:#0050D0"></span></td>
<td>1946</td>
<td>23.9</td>
</tr><tr role="row" class="even">
<td id="8157175" class="sorting_1">Lommel United</td>
<td>8157175</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/BEL.gif" alt="Belgium">  BEL</td>
<td>Pro League B</td>
<td>0</td>
<td>Professional</td>
<td>12,500</td>
<td><span class="label" style="background:#008030"></span> <span class="label" style="background:#F8F8F8"></span></td>
<td>1937</td>
<td>22.7</td>
</tr><tr role="row" class="odd">
<td id="5100326" class="sorting_1">Longford</td>
<td>5100326</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/IRL.gif" alt="Ireland">  IRL</td>
<td>Premier Division</td>
<td>0</td>
<td>Semi-Professional</td>
<td>6,850</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#E00000"></span></td>
<td>1924</td>
<td>23.6</td>
</tr><tr role="row" class="even">
<td id="67121454" class="sorting_1">Lorca</td>
<td>67121454</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ESP.gif" alt="Spain">  ESP</td>
<td>Second Division B4</td>
<td>6K</td>
<td>Professional</td>
<td>8,064</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#0050D0"></span></td>
<td>2003</td>
<td>25.6</td>
</tr><tr role="row" class="odd">
<td id="1347" class="sorting_1">Lorenskog</td>
<td>1347</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/NOR.gif" alt="Norway">  NOR</td>
<td>Second Division Group 3</td>
<td>10K</td>
<td>Semi-Professional</td>
<td>4,275</td>
<td><span class="label" style="background:#E00000"></span> <span class="label" style="background:#0050D0"></span></td>
<td>1933</td>
<td>23.2</td>
</tr><tr role="row" class="even">
<td id="51008740" class="sorting_1">Loros Colima</td>
<td>51008740</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/MEX.gif" alt="Mexico">  MEX</td>
<td>Promotion League</td>
<td>4K</td>
<td>Professional</td>
<td>14,000</td>
<td><span class="label" style="background:#108830"></span> <span class="label" style="background:#F8D000"></span></td>
<td>1981</td>
<td>24.2</td>
</tr><tr role="row" class="odd">
<td id="102495" class="sorting_1">Los Andes</td>
<td>102495</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ARG.gif" alt="Argentina">  ARG</td>
<td>Second Division</td>
<td>29K</td>
<td>Professional</td>
<td>33,942</td>
<td><span class="label" style="background:#E00000"></span> <span class="label" style="background:#F8F8F8"></span></td>
<td>1917</td>
<td>26.4</td>
</tr><tr role="row" class="even">
<td id="1907" class="sorting_1">Los Angeles</td>
<td>1907</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/USA.gif" alt="U.S.A.">  USA</td>
<td>MLS</td>
<td>3M</td>
<td>Professional</td>
<td>27,000</td>
<td><span class="label" style="background:#C89048"></span> <span class="label" style="background:#F8F8F8"></span></td>
<td>1996</td>
<td>27.2</td>
</tr><tr role="row" class="odd">
<td id="858" class="sorting_1">LOSC</td>
<td>858</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/FRA.gif" alt="France">  FRA</td>
<td>Ligue 1</td>
<td>4M</td>
<td>Professional</td>
<td>50,083</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
<td>1944</td>
<td>26.7</td>
</tr><tr role="row" class="even">
<td id="879921" class="sorting_1">Lotte</td>
<td>879921</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/GER.gif" alt="Germany">  GER</td>
<td>Third Division</td>
<td>0</td>
<td>Professional</td>
<td>10,000</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#0070C0"></span></td>
<td>1929</td>
<td>25.1</td>
</tr><tr role="row" class="odd">
<td id="130174" class="sorting_1">Loughgall</td>
<td>130174</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/NIR.gif" alt="N.Ireland">  NIR</td>
<td>NIFL C1</td>
<td>0</td>
<td>Semi-Professional</td>
<td>3,000</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#0030A0"></span></td>
<td>1967</td>
<td>26.5</td>
</tr><tr role="row" class="even">
<td id="2446" class="sorting_1">Louletano</td>
<td>2446</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/POR.gif" alt="Portugal">  POR</td>
<td>PT Championship</td>
<td>4K</td>
<td>Semi-Professional</td>
<td>5,000</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#E00000"></span></td>
<td>1923</td>
<td>23.7</td>
</tr><tr role="row" class="odd">
<td id="734132" class="sorting_1">Loures</td>
<td>734132</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/POR.gif" alt="Portugal">  POR</td>
<td>PT Championship</td>
<td>13K</td>
<td>Semi-Professional</td>
<td>800</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F8D000"></span></td>
<td>1913</td>
<td>22.6</td>
</tr><tr role="row" class="even">
<td id="1144" class="sorting_1">Lucchese</td>
<td>1144</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ITA.gif" alt="Italy">  ITA</td>
<td>Serie C/A</td>
<td>86K</td>
<td>Professional</td>
<td>11,523</td>
<td><span class="label" style="background:#E00000"></span> <span class="label" style="background:#000000"></span></td>
<td>1905</td>
<td>25.7</td>
</tr><tr role="row" class="odd">
<td id="57044148" class="sorting_1">Luceafarul Or.</td>
<td>57044148</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ROU.gif" alt="Romania">  ROU</td>
<td>Liga II</td>
<td>0</td>
<td>Professional</td>
<td>7,000</td>
<td><span class="label" style="background:#304078"></span> <span class="label" style="background:#C81018"></span></td>
<td>2010</td>
<td>24.1</td>
</tr><tr role="row" class="even">
<td id="130558" class="sorting_1">Luch</td>
<td>130558</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/RUS.gif" alt="Russia">  RUS</td>
<td>First Division</td>
<td>0</td>
<td>Professional</td>
<td>10,200</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
<td>1952</td>
<td>26.5</td>
</tr><tr role="row" class="odd">
<td id="17027934" class="sorting_1">Luch Minsk</td>
<td>17027934</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/BLR.gif" alt="Belarus">  BLR</td>
<td>First League</td>
<td>0</td>
<td>Professional</td>
<td>852</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#082040"></span></td>
<td>2007</td>
<td>22.7</td>
</tr><tr role="row" class="even">
<td id="653229" class="sorting_1">Lucko</td>
<td>653229</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/CRO.gif" alt="Croatia">  CRO</td>
<td>Second League</td>
<td>0</td>
<td>Professional</td>
<td>1,500</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#F8F8F8"></span></td>
<td>1931</td>
<td>21.7</td>
</tr><tr role="row" class="odd">
<td id="22003969" class="sorting_1">Ludogorets</td>
<td>22003969</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/BUL.gif" alt="Bulgaria">  BUL</td>
<td>First League</td>
<td>1M</td>
<td>Professional</td>
<td>7,622</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#008030"></span></td>
<td>1945</td>
<td>27.0</td>
</tr><tr role="row" class="even">
<td id="1850" class="sorting_1">Lugano</td>
<td>1850</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/SUI.gif" alt="Switzerland">  SUI</td>
<td>Super League</td>
<td>317K</td>
<td>Professional</td>
<td>15,000</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#000000"></span></td>
<td>2003</td>
<td>24.6</td>
</tr><tr role="row" class="odd">
<td id="1695" class="sorting_1">Lugo</td>
<td>1695</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ESP.gif" alt="Spain">  ESP</td>
<td>Second Division</td>
<td>832K</td>
<td>Professional</td>
<td>7,500</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#E00000"></span></td>
<td>1953</td>
<td>25.0</td>
</tr><tr role="row" class="even">
<td id="1145" class="sorting_1">Lumezzane</td>
<td>1145</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ITA.gif" alt="Italy">  ITA</td>
<td>Serie C/B</td>
<td>60K</td>
<td>Professional</td>
<td>4,004</td>
<td><span class="label" style="background:#002060"></span> <span class="label" style="background:#F00000"></span></td>
<td>1948</td>
<td>22.6</td>
</tr><tr role="row" class="odd">
<td id="2170" class="sorting_1">Lunds BK</td>
<td>2170</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/SWE.gif" alt="Sweden">  SWE</td>
<td>Second Division SG</td>
<td>0</td>
<td>Semi-Professional</td>
<td>8,560</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#F8F838"></span></td>
<td>1919</td>
<td>23.2</td>
</tr><tr role="row" class="even">
<td id="43152207" class="sorting_1">Lupa Roma</td>
<td>43152207</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ITA.gif" alt="Italy">  ITA</td>
<td>Serie C/A</td>
<td>60K</td>
<td>Professional</td>
<td>2,544</td>
<td><span class="label" style="background:#B00000"></span> <span class="label" style="background:#F8F8F8"></span></td>
<td>2013</td>
<td>22.4</td>
</tr><tr role="row" class="odd">
<td id="414173" class="sorting_1">Lurgan Celtic</td>
<td>414173</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/NIR.gif" alt="N.Ireland">  NIR</td>
<td>NIFL C1</td>
<td>0</td>
<td>Semi-Professional</td>
<td>1,500</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#006030"></span></td>
<td>1903</td>
<td>26.3</td>
</tr><tr role="row" class="even">
<td id="55027909" class="sorting_1">Lus. Vildemoinhos</td>
<td>55027909</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/POR.gif" alt="Portugal">  POR</td>
<td>PT Championship</td>
<td>4K</td>
<td>Semi-Professional</td>
<td>7,000</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#000000"></span></td>
<td>1916</td>
<td>24.4</td>
</tr><tr role="row" class="odd">
<td id="7000008" class="sorting_1">Lusitania Acores</td>
<td>7000008</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/POR.gif" alt="Portugal">  POR</td>
<td>PT Championship</td>
<td>2K</td>
<td>Semi-Professional</td>
<td>7,000</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#008030"></span></td>
<td>1922</td>
<td>24.8</td>
</tr><tr role="row" class="even">
<td id="7005001" class="sorting_1">Lusitano VRSA</td>
<td>7005001</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/POR.gif" alt="Portugal">  POR</td>
<td>PT Championship</td>
<td>2K</td>
<td>Semi-Professional</td>
<td>5,000</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#E00000"></span></td>
<td>1916</td>
<td>23.7</td>
</tr><tr role="row" class="odd">
<td id="677" class="sorting_1">Luton</td>
<td>677</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ENG.gif" alt="England">  ENG</td>
<td>Sky Bet League Two</td>
<td>70K</td>
<td>Professional</td>
<td>10,110</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#E85020"></span></td>
<td>1885</td>
<td>23.9</td>
</tr><tr role="row" class="even">
<td id="8832317" class="sorting_1">LUV</td>
<td>8832317</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/BRA.gif" alt="Brazil">  BRA</td>
<td>Second Division</td>
<td>12K</td>
<td>Professional</td>
<td>5,000</td>
<td><span class="label" style="background:#0050D0"></span> <span class="label" style="background:#008030"></span></td>
<td>2004</td>
<td>25.8</td>
</tr><tr role="row" class="odd">
<td id="1851" class="sorting_1">Luzern</td>
<td>1851</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/SUI.gif" alt="Switzerland">  SUI</td>
<td>Super League</td>
<td>396K</td>
<td>Professional</td>
<td>18,000</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#0030A0"></span></td>
<td>1901</td>
<td>24.9</td>
</tr><tr role="row" class="even">
<td id="533" class="sorting_1">Lyngby</td>
<td>533</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/DEN.gif" alt="Denmark">  DEN</td>
<td>Superliga</td>
<td>58K</td>
<td>Professional</td>
<td>10,106</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
<td>1921</td>
<td>27.1</td>
</tr><tr role="row" class="odd">
<td id="400984" class="sorting_1">Lyon-Duchere AS</td>
<td>400984</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/FRA.gif" alt="France">  FRA</td>
<td>National</td>
<td>43K</td>
<td>Semi-Professional</td>
<td>5,438</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F8E848"></span></td>
<td>1963</td>
<td>27.4</td>
</tr><tr role="row" class="even">
<td id="53090075" class="sorting_1">Lysekloster</td>
<td>53090075</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/NOR.gif" alt="Norway">  NOR</td>
<td>Second Division Group 3</td>
<td>9K</td>
<td>Semi-Professional</td>
<td>1,000</td>
<td><span class="label" style="background:#0038E0"></span> <span class="label" style="background:#F8F8F8"></span></td>
<td>1946</td>
<td>24.9</td>
</tr><tr role="row" class="odd">
<td id="311971" class="sorting_1">MAC</td>
<td>311971</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/BRA.gif" alt="Brazil">  BRA</td>
<td>Third Division</td>
<td>36K</td>
<td>Professional</td>
<td>15,000</td>
<td><span class="label" style="background:#FFFFFF"></span> <span class="label" style="background:#0030A0"></span></td>
<td>1990</td>
<td>26.1</td>
</tr><tr role="row" class="even">
<td id="1093" class="sorting_1">Maccabi Haifa</td>
<td>1093</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ISR.gif" alt="Israel">  ISR</td>
<td>Premier League</td>
<td>431K</td>
<td>Professional</td>
<td>13,610</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#108830"></span></td>
<td>1913</td>
<td>23.6</td>
</tr><tr role="row" class="odd">
<td id="1094" class="sorting_1">Maccabi Herzliya</td>
<td>1094</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ISR.gif" alt="Israel">  ISR</td>
<td>National League</td>
<td>19K</td>
<td>Professional</td>
<td>4,200</td>
<td><span class="label" style="background:#000030"></span> <span class="label" style="background:#F8F000"></span></td>
<td>1937</td>
<td>23.1</td>
</tr><tr role="row" class="even">
<td id="1095" class="sorting_1">Maccabi Netanya</td>
<td>1095</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ISR.gif" alt="Israel">  ISR</td>
<td>National League</td>
<td>38K</td>
<td>Professional</td>
<td>13,610</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F8F000"></span></td>
<td>1936</td>
<td>24.4</td>
</tr><tr role="row" class="odd">
<td id="1096" class="sorting_1">Maccabi Petach-Tikva</td>
<td>1096</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ISR.gif" alt="Israel">  ISR</td>
<td>Premier League</td>
<td>43K</td>
<td>Professional</td>
<td>11,500</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#0050D0"></span></td>
<td>1912</td>
<td>23.0</td>
</tr><tr role="row" class="even">
<td id="1097" class="sorting_1">Maccabi Tel-Aviv</td>
<td>1097</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ISR.gif" alt="Israel">  ISR</td>
<td>Premier League</td>
<td>2M</td>
<td>Professional</td>
<td>13,610</td>
<td><span class="label" style="background:#0050D0"></span> <span class="label" style="background:#F8F000"></span></td>
<td>1906</td>
<td>23.8</td>
</tr><tr role="row" class="odd">
<td id="678" class="sorting_1">Macclesfield</td>
<td>678</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ENG.gif" alt="England">  ENG</td>
<td>Vanarama National</td>
<td>0</td>
<td>Professional</td>
<td>5,988</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#204098"></span></td>
<td>1874</td>
<td>24.7</td>
</tr><tr role="row" class="even">
<td id="2207" class="sorting_1">Maceratese</td>
<td>2207</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ITA.gif" alt="Italy">  ITA</td>
<td>Serie C/B</td>
<td>86K</td>
<td>Professional</td>
<td>5,850</td>
<td><span class="label" style="background:#E00808"></span> <span class="label" style="background:#F0F0F0"></span></td>
<td>1922</td>
<td>23.4</td>
</tr><tr role="row" class="odd">
<td id="5740640" class="sorting_1">Macva</td>
<td>5740640</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/SRB.gif" alt="Serbia">  SRB</td>
<td>First League</td>
<td>43K</td>
<td>Semi-Professional</td>
<td>8,000</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#C80000"></span></td>
<td>1919</td>
<td>26.8</td>
</tr><tr role="row" class="even">
<td id="41021627" class="sorting_1">Madiun Putra</td>
<td>41021627</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/IDN.gif" alt="Indonesia">  IDN</td>
<td>Premier Division</td>
<td>45K</td>
<td>Professional</td>
<td>15,000</td>
<td><span class="label" style="background:#60C0F8"></span> <span class="label" style="background:#002060"></span></td>
<td>1986</td>
<td>29.0</td>
</tr><tr role="row" class="odd">
<td id="116138" class="sorting_1">Madura United</td>
<td>116138</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/IDN.gif" alt="Indonesia">  IDN</td>
<td>Super League</td>
<td>132K</td>
<td>Professional</td>
<td>30,000</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#E00000"></span></td>
<td>1986</td>
<td>27.2</td>
</tr><tr role="row" class="even">
<td id="736258" class="sorting_1">Mafra</td>
<td>736258</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/POR.gif" alt="Portugal">  POR</td>
<td>PT Championship</td>
<td>13K</td>
<td>Semi-Professional</td>
<td>2,400</td>
<td><span class="label" style="background:#108830"></span> <span class="label" style="background:#F8D828"></span></td>
<td>1965</td>
<td>24.8</td>
</tr><tr role="row" class="odd">
<td id="130797" class="sorting_1">Magallanes</td>
<td>130797</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/CHI.gif" alt="Chile">  CHI</td>
<td>First Division B</td>
<td>3K</td>
<td>Professional</td>
<td>4,000</td>
<td><span class="label" style="background:#0078F8"></span> <span class="label" style="background:#F8F8F8"></span></td>
<td>1897</td>
<td>24.0</td>
</tr><tr role="row" class="even">
<td id="2233" class="sorting_1">Magdeburg</td>
<td>2233</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/GER.gif" alt="Germany">  GER</td>
<td>Third Division</td>
<td>0</td>
<td>Professional</td>
<td>27,250</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#0840B0"></span></td>
<td>1965</td>
<td>25.0</td>
</tr><tr role="row" class="odd">
<td id="65025781" class="sorting_1">Magesi FC</td>
<td>65025781</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/RSA.gif" alt="South Africa">  RSA</td>
<td>National First Division</td>
<td>150K</td>
<td>Professional</td>
<td>15,000</td>
<td><span class="label" style="background:#80F8F8"></span> <span class="label" style="background:#0000A0"></span></td>
<td>0</td>
<td>24.6</td>
</tr><tr role="row" class="even">
<td id="5100192" class="sorting_1">Maidenhead</td>
<td>5100192</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ENG.gif" alt="England">  ENG</td>
<td>Vanarama South</td>
<td>1K</td>
<td>Semi-Professional</td>
<td>4,500</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F8F8F8"></span></td>
<td>1870</td>
<td>25.9</td>
</tr><tr role="row" class="odd">
<td id="8325049" class="sorting_1">Maidstone</td>
<td>8325049</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ENG.gif" alt="England">  ENG</td>
<td>Vanarama National</td>
<td>10K</td>
<td>Semi-Professional</td>
<td>2,500</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F8A808"></span></td>
<td>1992</td>
<td>24.4</td>
</tr><tr role="row" class="even">
<td id="918" class="sorting_1">Mainz</td>
<td>918</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/GER.gif" alt="Germany">  GER</td>
<td>First Division</td>
<td>861K</td>
<td>Professional</td>
<td>34,000</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#C80000"></span></td>
<td>1905</td>
<td>24.5</td>
</tr><tr role="row" class="odd">
<td id="879282" class="sorting_1">Mainz II</td>
<td>879282</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/GER.gif" alt="Germany">  GER</td>
<td>Third Division</td>
<td>0</td>
<td>Professional</td>
<td>20,300</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
<td>0</td>
<td>20.5</td>
</tr><tr role="row" class="even">
<td id="2096" class="sorting_1">Malaga</td>
<td>2096</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ESP.gif" alt="Spain">  ESP</td>
<td>First Division</td>
<td>861K</td>
<td>Professional</td>
<td>28,963</td>
<td><span class="label" style="background:#60A0D0"></span> <span class="label" style="background:#F8F8F8"></span></td>
<td>1948</td>
<td>26.0</td>
</tr><tr role="row" class="odd">
<td id="1726" class="sorting_1">Mallorca</td>
<td>1726</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ESP.gif" alt="Spain">  ESP</td>
<td>Second Division</td>
<td>0</td>
<td>Professional</td>
<td>23,142</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#E01828"></span></td>
<td>1916</td>
<td>25.8</td>
</tr><tr role="row" class="even">
<td id="2098" class="sorting_1">Mallorca B</td>
<td>2098</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ESP.gif" alt="Spain">  ESP</td>
<td>Second Division B3</td>
<td>5K</td>
<td>Professional</td>
<td>2,000</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F00000"></span></td>
<td>1983</td>
<td>20.1</td>
</tr><tr role="row" class="odd">
<td id="1816" class="sorting_1">Malmo FF</td>
<td>1816</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/SWE.gif" alt="Sweden">  SWE</td>
<td>Premier Division</td>
<td>2M</td>
<td>Professional</td>
<td>24,000</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#98D0F0"></span></td>
<td>1910</td>
<td>24.5</td>
</tr><tr role="row" class="even">
<td id="2430" class="sorting_1">Malveira</td>
<td>2430</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/POR.gif" alt="Portugal">  POR</td>
<td>PT Championship</td>
<td>4K</td>
<td>Semi-Professional</td>
<td>12,000</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#0050D0"></span></td>
<td>1940</td>
<td>21.2</td>
</tr><tr role="row" class="odd">
<td id="679" class="sorting_1">Man City</td>
<td>679</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ENG.gif" alt="England">  ENG</td>
<td>Premier Division</td>
<td>29M</td>
<td>Professional</td>
<td>55,097</td>
<td><span class="label" style="background:#304878"></span> <span class="label" style="background:#98D0F0"></span></td>
<td>1880</td>
<td>27.6</td>
</tr><tr role="row" class="even">
<td id="680" class="sorting_1">Man Utd</td>
<td>680</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ENG.gif" alt="England">  ENG</td>
<td>Premier Division</td>
<td>31M</td>
<td>Professional</td>
<td>75,635</td>
<td><span class="label" style="background:#E00000"></span> <span class="label" style="background:#C80000"></span></td>
<td>1878</td>
<td>26.1</td>
</tr><tr role="row" class="odd">
<td id="7446375" class="sorting_1">Mancha Real</td>
<td>7446375</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ESP.gif" alt="Spain">  ESP</td>
<td>Second Division B4</td>
<td>0</td>
<td>Semi-Professional</td>
<td>2,500</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#00A030"></span></td>
<td>1984</td>
<td>25.4</td>
</tr><tr role="row" class="even">
<td id="456059" class="sorting_1">Manisaspor</td>
<td>456059</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/TUR.gif" alt="Turkey">  TUR</td>
<td>1. League</td>
<td>0</td>
<td>Professional</td>
<td>16,597</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
<td>1965</td>
<td>23.8</td>
</tr><tr role="row" class="odd">
<td id="681" class="sorting_1">Mansfield</td>
<td>681</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ENG.gif" alt="England">  ENG</td>
<td>Sky Bet League Two</td>
<td>25K</td>
<td>Professional</td>
<td>9,186</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
<td>1897</td>
<td>25.8</td>
</tr><tr role="row" class="even">
<td id="700198" class="sorting_1">Mantova</td>
<td>700198</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ITA.gif" alt="Italy">  ITA</td>
<td>Serie C/B</td>
<td>43K</td>
<td>Professional</td>
<td>14,884</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
<td>1911</td>
<td>24.4</td>
</tr><tr role="row" class="odd">
<td id="1684" class="sorting_1">Marbella</td>
<td>1684</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ESP.gif" alt="Spain">  ESP</td>
<td>Second Division B4</td>
<td>0</td>
<td>Professional</td>
<td>7,000</td>
<td><span class="label" style="background:#0050D0"></span> <span class="label" style="background:#F8F8F8"></span></td>
<td>1997</td>
<td>24.6</td>
</tr><tr role="row" class="even">
<td id="5100134" class="sorting_1">Margate</td>
<td>5100134</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ENG.gif" alt="England">  ENG</td>
<td>Vanarama South</td>
<td>5K</td>
<td>Semi-Professional</td>
<td>3,000</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#3860D0"></span></td>
<td>1896</td>
<td>24.5</td>
</tr><tr role="row" class="odd">
<td id="1629" class="sorting_1">Maribor</td>
<td>1629</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/SVN.gif" alt="Slovenia">  SVN</td>
<td>First League</td>
<td>775K</td>
<td>Professional</td>
<td>12,994</td>
<td><span class="label" style="background:#F8F000"></span> <span class="label" style="background:#503098"></span></td>
<td>1960</td>
<td>27.0</td>
</tr><tr role="row" class="even">
<td id="930181" class="sorting_1">Marienlyst</td>
<td>930181</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/DEN.gif" alt="Denmark">  DEN</td>
<td>Second Division</td>
<td>0</td>
<td>Amateur</td>
<td>1,200</td>
<td><span class="label" style="background:#E00000"></span> <span class="label" style="background:#F8F8F8"></span></td>
<td>1922</td>
<td>24.9</td>
</tr><tr role="row" class="odd">
<td id="1476" class="sorting_1">Maritimo</td>
<td>1476</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/POR.gif" alt="Portugal">  POR</td>
<td>Premier League</td>
<td>323K</td>
<td>Professional</td>
<td>7,200</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
<td>1910</td>
<td>25.7</td>
</tr><tr role="row" class="even">
<td id="7000097" class="sorting_1">Maritimo B</td>
<td>7000097</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/POR.gif" alt="Portugal">  POR</td>
<td>PT Championship</td>
<td>9K</td>
<td>Semi-Professional</td>
<td>4,000</td>
<td><span class="label" style="background:#D02028"></span> <span class="label" style="background:#108830"></span></td>
<td>1910</td>
<td>22.7</td>
</tr><tr role="row" class="odd">
<td id="5682979" class="sorting_1">Maritzburg Utd</td>
<td>5682979</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/RSA.gif" alt="South Africa">  RSA</td>
<td>South African Premiership</td>
<td>198K</td>
<td>Professional</td>
<td>12,000</td>
<td><span class="label" style="background:#0000F8"></span> <span class="label" style="background:#000000"></span></td>
<td>1979</td>
<td>24.8</td>
</tr><tr role="row" class="even">
<td id="41042492" class="sorting_1">Martapura FC</td>
<td>41042492</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/IDN.gif" alt="Indonesia">  IDN</td>
<td>Premier Division</td>
<td>9K</td>
<td>Professional</td>
<td>10,000</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#E00000"></span></td>
<td>2009</td>
<td>25.9</td>
</tr><tr role="row" class="odd">
<td id="63023671" class="sorting_1">Martin</td>
<td>63023671</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/SVK.gif" alt="Slovakia">  SVK</td>
<td>Second Division</td>
<td>0</td>
<td>Professional</td>
<td>900</td>
<td><span class="label" style="background:#0078F8"></span> <span class="label" style="background:#F8F8F8"></span></td>
<td>1994</td>
<td>22.7</td>
</tr><tr role="row" class="even">
<td id="43065077" class="sorting_1">Matera</td>
<td>43065077</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ITA.gif" alt="Italy">  ITA</td>
<td>Serie C/C</td>
<td>301K</td>
<td>Professional</td>
<td>7,490</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
<td>1933</td>
<td>25.6</td>
</tr><tr role="row" class="odd">
<td id="65010493" class="sorting_1">Mbombela Utd</td>
<td>65010493</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/RSA.gif" alt="South Africa">  RSA</td>
<td>National First Division</td>
<td>56K</td>
<td>Professional</td>
<td>10,000</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#F80000"></span></td>
<td>2008</td>
<td>24.1</td>
</tr><tr role="row" class="even">
<td id="425" class="sorting_1">Medellin</td>
<td>425</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/COL.gif" alt="Colombia">  COL</td>
<td>First Division</td>
<td>3M</td>
<td>Professional</td>
<td>48,700</td>
<td><span class="label" style="background:#101050"></span> <span class="label" style="background:#E00000"></span></td>
<td>1914</td>
<td>26.2</td>
</tr><tr role="row" class="odd">
<td id="23199255" class="sorting_1">Meizhou</td>
<td>23199255</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/CHN.gif" alt="China">  CHN</td>
<td>First Division</td>
<td>230K</td>
<td>Professional</td>
<td>15,000</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#E00000"></span></td>
<td>2013</td>
<td>27.5</td>
</tr><tr role="row" class="even">
<td id="15051934" class="sorting_1">Melbourne City</td>
<td>15051934</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/AUS.gif" alt="Australia">  AUS</td>
<td>Hyundai A-League</td>
<td>195K</td>
<td>Professional</td>
<td>30,050</td>
<td><span class="label" style="background:#98D0F0"></span> <span class="label" style="background:#F8F8F8"></span></td>
<td>2009</td>
<td>25.8</td>
</tr><tr role="row" class="odd">
<td id="1300489" class="sorting_1">Melbourne Victory</td>
<td>1300489</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/AUS.gif" alt="Australia">  AUS</td>
<td>Hyundai A-League</td>
<td>145K</td>
<td>Professional</td>
<td>30,050</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#001040"></span></td>
<td>2004</td>
<td>23.9</td>
</tr><tr role="row" class="even">
<td id="832143" class="sorting_1">Melfi</td>
<td>832143</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ITA.gif" alt="Italy">  ITA</td>
<td>Serie C/C</td>
<td>43K</td>
<td>Professional</td>
<td>4,100</td>
<td><span class="label" style="background:#00A030"></span> <span class="label" style="background:#F8F000"></span></td>
<td>1929</td>
<td>24.0</td>
</tr><tr role="row" class="odd">
<td id="303815" class="sorting_1">Melgar</td>
<td>303815</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/PER.gif" alt="Peru">  PER</td>
<td>First Division</td>
<td>346K</td>
<td>Professional</td>
<td>50,000</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#E00000"></span></td>
<td>1915</td>
<td>27.3</td>
</tr><tr role="row" class="even">
<td id="109027" class="sorting_1">Melilla</td>
<td>109027</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ESP.gif" alt="Spain">  ESP</td>
<td>Second Division B4</td>
<td>0</td>
<td>Professional</td>
<td>12,000</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#0078F8"></span></td>
<td>1976</td>
<td>26.2</td>
</tr><tr role="row" class="odd">
<td id="70028001" class="sorting_1">Menemen Bld.</td>
<td>70028001</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/TUR.gif" alt="Turkey">  TUR</td>
<td>2. League Red</td>
<td>0</td>
<td>Professional</td>
<td>2,500</td>
<td><span class="label" style="background:#002060"></span> <span class="label" style="background:#F8F000"></span></td>
<td>1993</td>
<td>26.9</td>
</tr><tr role="row" class="even">
<td id="1697" class="sorting_1">Mensajero</td>
<td>1697</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ESP.gif" alt="Spain">  ESP</td>
<td>Second Division B2</td>
<td>7K</td>
<td>Semi-Professional</td>
<td>6,000</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F00000"></span></td>
<td>1922</td>
<td>26.8</td>
</tr><tr role="row" class="odd">
<td id="734123" class="sorting_1">Merelinense</td>
<td>734123</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/POR.gif" alt="Portugal">  POR</td>
<td>PT Championship</td>
<td>7K</td>
<td>Semi-Professional</td>
<td>500</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#E00000"></span></td>
<td>1938</td>
<td>26.4</td>
</tr><tr role="row" class="even">
<td id="4212284" class="sorting_1">Merida</td>
<td>4212284</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ESP.gif" alt="Spain">  ESP</td>
<td>Second Division B4</td>
<td>0</td>
<td>Semi-Professional</td>
<td>14,600</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F8F8F8"></span></td>
<td>1990</td>
<td>24.3</td>
</tr><tr role="row" class="odd">
<td id="130345" class="sorting_1">Mersin I.Y.</td>
<td>130345</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/TUR.gif" alt="Turkey">  TUR</td>
<td>1. League</td>
<td>29K</td>
<td>Professional</td>
<td>25,497</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
<td>1925</td>
<td>23.4</td>
</tr><tr role="row" class="even">
<td id="700206" class="sorting_1">Messina</td>
<td>700206</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ITA.gif" alt="Italy">  ITA</td>
<td>Serie C/C</td>
<td>129K</td>
<td>Professional</td>
<td>38,722</td>
<td><span class="label" style="background:#C80000"></span> <span class="label" style="background:#F8F8F8"></span></td>
<td>1900</td>
<td>23.8</td>
</tr><tr role="row" class="odd">
<td id="5742993" class="sorting_1">Metalac</td>
<td>5742993</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/SRB.gif" alt="Serbia">  SRB</td>
<td>SuperLeague</td>
<td>95K</td>
<td>Professional</td>
<td>4,600</td>
<td><span class="label" style="background:#60C0F8"></span> <span class="label" style="background:#0030A0"></span></td>
<td>1961</td>
<td>24.5</td>
</tr><tr role="row" class="even">
<td id="57113264" class="sorting_1">Metalul Resita</td>
<td>57113264</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ROU.gif" alt="Romania">  ROU</td>
<td>Liga II</td>
<td>0</td>
<td>Professional</td>
<td>1,000</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#E00000"></span></td>
<td>2007</td>
<td>22.2</td>
</tr><tr role="row" class="odd">
<td id="38004842" class="sorting_1">Mezokovesd</td>
<td>38004842</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/HUN.gif" alt="Hungary">  HUN</td>
<td>Division I</td>
<td>0</td>
<td>Professional</td>
<td>3,000</td>
<td><span class="label" style="background:#F8F000"></span> <span class="label" style="background:#0050D0"></span></td>
<td>1975</td>
<td>25.9</td>
</tr><tr role="row" class="even">
<td id="7563783" class="sorting_1">Michalovce</td>
<td>7563783</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/SVK.gif" alt="Slovakia">  SVK</td>
<td>First Division</td>
<td>65K</td>
<td>Professional</td>
<td>4,440</td>
<td><span class="label" style="background:#0050D0"></span> <span class="label" style="background:#F8F000"></span></td>
<td>1911</td>
<td>22.4</td>
</tr><tr role="row" class="odd">
<td id="930248" class="sorting_1">Middelfart</td>
<td>930248</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/DEN.gif" alt="Denmark">  DEN</td>
<td>Second Division</td>
<td>0</td>
<td>Semi-Professional</td>
<td>4,000</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#0078F8"></span></td>
<td>1964</td>
<td>22.4</td>
</tr><tr role="row" class="even">
<td id="685" class="sorting_1">Middlesbrough</td>
<td>685</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ENG.gif" alt="England">  ENG</td>
<td>Premier Division</td>
<td>3M</td>
<td>Professional</td>
<td>34,746</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
<td>1876</td>
<td>26.4</td>
</tr><tr role="row" class="odd">
<td id="710017" class="sorting_1">Miedz</td>
<td>710017</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/POL.gif" alt="Poland">  POL</td>
<td>First Division</td>
<td>40K</td>
<td>Professional</td>
<td>6,194</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#0050D0"></span></td>
<td>1971</td>
<td>27.6</td>
</tr><tr role="row" class="even">
<td id="109001" class="sorting_1">Mieres Deportivo</td>
<td>109001</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ESP.gif" alt="Spain">  ESP</td>
<td>Second Division B1</td>
<td>0</td>
<td>Professional</td>
<td>7,500</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
<td>1918</td>
<td>27.6</td>
</tr><tr role="row" class="odd">
<td id="65010450" class="sorting_1">Milano Utd</td>
<td>65010450</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/RSA.gif" alt="South Africa">  RSA</td>
<td>National First Division</td>
<td>45K</td>
<td>Professional</td>
<td>35,000</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#E8B810"></span></td>
<td>1986</td>
<td>24.0</td>
</tr><tr role="row" class="even">
<td id="426" class="sorting_1">Millonarios</td>
<td>426</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/COL.gif" alt="Colombia">  COL</td>
<td>First Division</td>
<td>2M</td>
<td>Professional</td>
<td>40,312</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#0050D0"></span></td>
<td>1946</td>
<td>27.3</td>
</tr><tr role="row" class="odd">
<td id="686" class="sorting_1">Millwall</td>
<td>686</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ENG.gif" alt="England">  ENG</td>
<td>Sky Bet League One</td>
<td>0</td>
<td>Professional</td>
<td>20,146</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
<td>1885</td>
<td>24.4</td>
</tr><tr role="row" class="even">
<td id="51045865" class="sorting_1">Mineros</td>
<td>51045865</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/MEX.gif" alt="Mexico">  MEX</td>
<td>Promotion League</td>
<td>192K</td>
<td>Professional</td>
<td>18,000</td>
<td><span class="label" style="background:#C80000"></span> <span class="label" style="background:#E00000"></span></td>
<td>2014</td>
<td>25.9</td>
</tr><tr role="row" class="odd">
<td id="20030048" class="sorting_1">Minnesota</td>
<td>20030048</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/USA.gif" alt="U.S.A.">  USA</td>
<td>Second Division</td>
<td>0</td>
<td>Professional</td>
<td>12,000</td>
<td><span class="label" style="background:#688898"></span> <span class="label" style="background:#303850"></span></td>
<td>0</td>
<td>27.8</td>
</tr><tr role="row" class="even">
<td id="17000059" class="sorting_1">Minsk</td>
<td>17000059</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/BLR.gif" alt="Belarus">  BLR</td>
<td>Highest League</td>
<td>31K</td>
<td>Professional</td>
<td>3,000</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#E00000"></span></td>
<td>1954</td>
<td>24.2</td>
</tr><tr role="row" class="odd">
<td id="5512559" class="sorting_1">Miramar Misiones</td>
<td>5512559</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/URU.gif" alt="Uruguay">  URU</td>
<td>Second Division</td>
<td>768</td>
<td>Professional</td>
<td>6,543</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
<td>1906</td>
<td>23.0</td>
</tr><tr role="row" class="even">
<td id="2455" class="sorting_1">Mirandela</td>
<td>2455</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/POR.gif" alt="Portugal">  POR</td>
<td>PT Championship</td>
<td>4K</td>
<td>Semi-Professional</td>
<td>5,000</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F8F8F8"></span></td>
<td>1926</td>
<td>23.8</td>
</tr><tr role="row" class="odd">
<td id="4212197" class="sorting_1">Mirandes</td>
<td>4212197</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ESP.gif" alt="Spain">  ESP</td>
<td>Second Division</td>
<td>0</td>
<td>Professional</td>
<td>4,886</td>
<td><span class="label" style="background:#D00818"></span> <span class="label" style="background:#981018"></span></td>
<td>1927</td>
<td>25.4</td>
</tr><tr role="row" class="even">
<td id="5622873" class="sorting_1">Mitra Kukar</td>
<td>5622873</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/IDN.gif" alt="Indonesia">  IDN</td>
<td>Super League</td>
<td>61K</td>
<td>Professional</td>
<td>35,000</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#D8B028"></span></td>
<td>1979</td>
<td>26.1</td>
</tr><tr role="row" class="odd">
<td id="1817" class="sorting_1">Mjallby AIF</td>
<td>1817</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/SWE.gif" alt="Sweden">  SWE</td>
<td>First Division South</td>
<td>0</td>
<td>Semi-Professional</td>
<td>7,500</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F8F000"></span></td>
<td>1939</td>
<td>23.1</td>
</tr><tr role="row" class="even">
<td id="1351" class="sorting_1">Mjondalen</td>
<td>1351</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/NOR.gif" alt="Norway">  NOR</td>
<td>First Division</td>
<td>7K</td>
<td>Semi-Professional</td>
<td>2,100</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#805040"></span></td>
<td>1910</td>
<td>27.2</td>
</tr><tr role="row" class="odd">
<td id="151027" class="sorting_1">MK Dons</td>
<td>151027</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ENG.gif" alt="England">  ENG</td>
<td>Sky Bet League One</td>
<td>50K</td>
<td>Professional</td>
<td>30,582</td>
<td><span class="label" style="background:#D8B028"></span> <span class="label" style="background:#F8F8F8"></span></td>
<td>2004</td>
<td>24.2</td>
</tr><tr role="row" class="even">
<td id="54007052" class="sorting_1">MKS Kluczbork</td>
<td>54007052</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/POL.gif" alt="Poland">  POL</td>
<td>First Division</td>
<td>0</td>
<td>Professional</td>
<td>2,586</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#F8F8F8"></span></td>
<td>2003</td>
<td>25.2</td>
</tr><tr role="row" class="odd">
<td id="136156" class="sorting_1">Mlada Boleslav</td>
<td>136156</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/CZE.gif" alt="Czech Republic">  CZE</td>
<td>First Division</td>
<td>559K</td>
<td>Professional</td>
<td>5,000</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#F8F8F8"></span></td>
<td>1902</td>
<td>26.8</td>
</tr><tr role="row" class="even">
<td id="1301374" class="sorting_1">Mladost</td>
<td>1301374</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/SRB.gif" alt="Serbia">  SRB</td>
<td>SuperLeague</td>
<td>146K</td>
<td>Professional</td>
<td>8,050</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#0050D0"></span></td>
<td>1952</td>
<td>25.9</td>
</tr><tr role="row" class="odd">
<td id="1300620" class="sorting_1">Mo</td>
<td>1300620</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/NOR.gif" alt="Norway">  NOR</td>
<td>Second Division Group 1</td>
<td>0</td>
<td>Semi-Professional</td>
<td>2,600</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#582800"></span></td>
<td>1904</td>
<td>22.8</td>
</tr><tr role="row" class="even">
<td id="1147" class="sorting_1">Modena</td>
<td>1147</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ITA.gif" alt="Italy">  ITA</td>
<td>Serie C/B</td>
<td>258K</td>
<td>Professional</td>
<td>21,092</td>
<td><span class="label" style="background:#002060"></span> <span class="label" style="background:#F8D000"></span></td>
<td>1912</td>
<td>23.3</td>
</tr><tr role="row" class="odd">
<td id="107222" class="sorting_1">MOG</td>
<td>107222</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/BRA.gif" alt="Brazil">  BRA</td>
<td>Third Division</td>
<td>0</td>
<td>Professional</td>
<td>26,400</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#B00000"></span></td>
<td>1932</td>
<td>25.2</td>
</tr><tr role="row" class="even">
<td id="5512149" class="sorting_1">Mohun Bagan</td>
<td>5512149</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/IND.gif" alt="India">  IND</td>
<td>National Football League</td>
<td>1K</td>
<td>Professional</td>
<td>68,000</td>
<td><span class="label" style="background:#800020"></span> <span class="label" style="background:#006060"></span></td>
<td>1889</td>
<td>24.5</td>
</tr><tr role="row" class="odd">
<td id="55072751" class="sorting_1">Moimenta da Beira</td>
<td>55072751</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/POR.gif" alt="Portugal">  POR</td>
<td>PT Championship</td>
<td>861</td>
<td>Semi-Professional</td>
<td>1,000</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
<td>0</td>
<td>23.4</td>
</tr><tr role="row" class="even">
<td id="7746531" class="sorting_1">Mojokerto Putra</td>
<td>7746531</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/IDN.gif" alt="Indonesia">  IDN</td>
<td>Premier Division</td>
<td>4K</td>
<td>Professional</td>
<td>10,000</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#E00000"></span></td>
<td>2001</td>
<td>27.3</td>
</tr><tr role="row" class="odd">
<td id="1353" class="sorting_1">Molde</td>
<td>1353</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/NOR.gif" alt="Norway">  NOR</td>
<td>Premier Division</td>
<td>2M</td>
<td>Professional</td>
<td>11,249</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#0068F8"></span></td>
<td>1911</td>
<td>23.8</td>
</tr><tr role="row" class="even">
<td id="7983734" class="sorting_1">Monopoli</td>
<td>7983734</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ITA.gif" alt="Italy">  ITA</td>
<td>Serie C/C</td>
<td>43K</td>
<td>Professional</td>
<td>6,880</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
<td>1958</td>
<td>24.1</td>
</tr><tr role="row" class="odd">
<td id="2413" class="sorting_1">Montalegre</td>
<td>2413</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/POR.gif" alt="Portugal">  POR</td>
<td>PT Championship</td>
<td>4K</td>
<td>Semi-Professional</td>
<td>7,000</td>
<td><span class="label" style="background:#0050D0"></span> <span class="label" style="background:#0050D0"></span></td>
<td>1964</td>
<td>25.0</td>
</tr><tr role="row" class="even">
<td id="353" class="sorting_1">Montana</td>
<td>353</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/BUL.gif" alt="Bulgaria">  BUL</td>
<td>First League</td>
<td>15K</td>
<td>Professional</td>
<td>8,114</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#0050D0"></span></td>
<td>1921</td>
<td>25.2</td>
</tr><tr role="row" class="odd">
<td id="1257" class="sorting_1">Monterrey</td>
<td>1257</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/MEX.gif" alt="Mexico">  MEX</td>
<td>First Division</td>
<td>6M</td>
<td>Professional</td>
<td>52,000</td>
<td><span class="label" style="background:#002060"></span> <span class="label" style="background:#F8F8F8"></span></td>
<td>1945</td>
<td>26.4</td>
</tr><tr role="row" class="even">
<td id="859" class="sorting_1">Montpellier HSC</td>
<td>859</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/FRA.gif" alt="France">  FRA</td>
<td>Ligue 1</td>
<td>4M</td>
<td>Professional</td>
<td>32,950</td>
<td><span class="label" style="background:#F87000"></span> <span class="label" style="background:#002060"></span></td>
<td>1974</td>
<td>26.7</td>
</tr><tr role="row" class="odd">
<td id="105180" class="sorting_1">Montreal Impact</td>
<td>105180</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/CAN.gif" alt="Canada">  CAN</td>
<td>MLS</td>
<td>1M</td>
<td>Professional</td>
<td>20,800</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#2870B0"></span></td>
<td>1993</td>
<td>26.7</td>
</tr><tr role="row" class="even">
<td id="1583" class="sorting_1">Montrose</td>
<td>1583</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/SCO.gif" alt="Scotland">  SCO</td>
<td>Ladbrokes League 2</td>
<td>0</td>
<td>Semi-Professional</td>
<td>4,936</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#2850A0"></span></td>
<td>1879</td>
<td>24.3</td>
</tr><tr role="row" class="odd">
<td id="8083031" class="sorting_1">Mordovia</td>
<td>8083031</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/RUS.gif" alt="Russia">  RUS</td>
<td>First Division</td>
<td>0</td>
<td>Professional</td>
<td>11,613</td>
<td><span class="label" style="background:#082040"></span> <span class="label" style="background:#B00000"></span></td>
<td>1961</td>
<td>27.0</td>
</tr><tr role="row" class="even">
<td id="687" class="sorting_1">Morecambe</td>
<td>687</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ENG.gif" alt="England">  ENG</td>
<td>Sky Bet League Two</td>
<td>0</td>
<td>Professional</td>
<td>6,476</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
<td>1920</td>
<td>24.1</td>
</tr><tr role="row" class="odd">
<td id="2389" class="sorting_1">Moreirense</td>
<td>2389</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/POR.gif" alt="Portugal">  POR</td>
<td>Premier League</td>
<td>108K</td>
<td>Professional</td>
<td>6,153</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
<td>1938</td>
<td>23.9</td>
</tr><tr role="row" class="even">
<td id="106028" class="sorting_1">Morelia</td>
<td>106028</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/MEX.gif" alt="Mexico">  MEX</td>
<td>First Division</td>
<td>2M</td>
<td>Professional</td>
<td>41,056</td>
<td><span class="label" style="background:#E00000"></span> <span class="label" style="background:#F8D000"></span></td>
<td>1924</td>
<td>27.4</td>
</tr><tr role="row" class="odd">
<td id="2624" class="sorting_1">Moron BK</td>
<td>2624</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/SWE.gif" alt="Sweden">  SWE</td>
<td>Second Division N</td>
<td>0</td>
<td>Semi-Professional</td>
<td>500</td>
<td><span class="label" style="background:#008030"></span> <span class="label" style="background:#F8F8F8"></span></td>
<td>1935</td>
<td>24.3</td>
</tr><tr role="row" class="even">
<td id="8878352" class="sorting_1">Mortagua</td>
<td>8878352</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/POR.gif" alt="Portugal">  POR</td>
<td>PT Championship</td>
<td>4K</td>
<td>Semi-Professional</td>
<td>1,000</td>
<td><span class="label" style="background:#0050D0"></span> <span class="label" style="background:#F8F000"></span></td>
<td>1937</td>
<td>24.4</td>
</tr><tr role="row" class="odd">
<td id="1571" class="sorting_1">Morton</td>
<td>1571</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/SCO.gif" alt="Scotland">  SCO</td>
<td>Ladbrokes Championship</td>
<td>20K</td>
<td>Professional</td>
<td>11,589</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
<td>1874</td>
<td>21.6</td>
</tr><tr role="row" class="even">
<td id="7521273" class="sorting_1">Mosonmagyarovar</td>
<td>7521273</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/HUN.gif" alt="Hungary">  HUN</td>
<td>Division II</td>
<td>8K</td>
<td>Professional</td>
<td>3,375</td>
<td><span class="label" style="background:#0078F8"></span> <span class="label" style="background:#082040"></span></td>
<td>1904</td>
<td>24.6</td>
</tr><tr role="row" class="odd">
<td id="1355" class="sorting_1">Moss</td>
<td>1355</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/NOR.gif" alt="Norway">  NOR</td>
<td>Second Division Group 4</td>
<td>2K</td>
<td>Semi-Professional</td>
<td>10,000</td>
<td><span class="label" style="background:#F8F000"></span> <span class="label" style="background:#F8F000"></span></td>
<td>1906</td>
<td>23.7</td>
</tr><tr role="row" class="even">
<td id="1818" class="sorting_1">Motala AIF</td>
<td>1818</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/SWE.gif" alt="Sweden">  SWE</td>
<td>Second Division SS</td>
<td>2K</td>
<td>Semi-Professional</td>
<td>8,500</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F8F8F8"></span></td>
<td>1907</td>
<td>22.9</td>
</tr><tr role="row" class="odd">
<td id="1584" class="sorting_1">Motherwell</td>
<td>1584</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/SCO.gif" alt="Scotland">  SCO</td>
<td>Ladbrokes Premiership</td>
<td>5K</td>
<td>Professional</td>
<td>13,677</td>
<td><span class="label" style="background:#600000"></span> <span class="label" style="background:#F89830"></span></td>
<td>1886</td>
<td>24.6</td>
</tr><tr role="row" class="even">
<td id="55020412" class="sorting_1">Moura</td>
<td>55020412</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/POR.gif" alt="Portugal">  POR</td>
<td>PT Championship</td>
<td>9K</td>
<td>Semi-Professional</td>
<td>6,000</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F8D000"></span></td>
<td>1942</td>
<td>24.4</td>
</tr><tr role="row" class="odd">
<td id="8154758" class="sorting_1">Mouscron</td>
<td>8154758</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/BEL.gif" alt="Belgium">  BEL</td>
<td>Pro League</td>
<td>0</td>
<td>Professional</td>
<td>10,571</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#B00000"></span></td>
<td>1922</td>
<td>23.4</td>
</tr><tr role="row" class="even">
<td id="130173" class="sorting_1">Moyola Park</td>
<td>130173</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/NIR.gif" alt="N.Ireland">  NIR</td>
<td>NIFL C2</td>
<td>0</td>
<td>Semi-Professional</td>
<td>2,000</td>
<td><span class="label" style="background:#F8F000"></span> <span class="label" style="background:#0050D0"></span></td>
<td>1880</td>
<td>26.9</td>
</tr><tr role="row" class="odd">
<td id="65025796" class="sorting_1">Mthatha Bucks</td>
<td>65025796</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/RSA.gif" alt="South Africa">  RSA</td>
<td>National First Division</td>
<td>28K</td>
<td>Professional</td>
<td>9,000</td>
<td><span class="label" style="background:#F0B840"></span> <span class="label" style="background:#000000"></span></td>
<td>2007</td>
<td>26.0</td>
</tr><tr role="row" class="even">
<td id="1060" class="sorting_1">MTK</td>
<td>1060</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/HUN.gif" alt="Hungary">  HUN</td>
<td>Division I</td>
<td>0</td>
<td>Professional</td>
<td>10,000</td>
<td><span class="label" style="background:#2850A0"></span> <span class="label" style="background:#F8F8F8"></span></td>
<td>1888</td>
<td>25.7</td>
</tr><tr role="row" class="odd">
<td id="40001008" class="sorting_1">Mumbai FC</td>
<td>40001008</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/IND.gif" alt="India">  IND</td>
<td>National Football League</td>
<td>2K</td>
<td>Professional</td>
<td>5,000</td>
<td><span class="label" style="background:#0030A0"></span> <span class="label" style="background:#F8F000"></span></td>
<td>2007</td>
<td>25.8</td>
</tr><tr role="row" class="even">
<td id="955" class="sorting_1">Munchen Lions</td>
<td>955</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/GER.gif" alt="Germany">  GER</td>
<td>Second Division</td>
<td>0</td>
<td>Professional</td>
<td>75,024</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#90C0F0"></span></td>
<td>1860</td>
<td>26.3</td>
</tr><tr role="row" class="odd">
<td id="1446" class="sorting_1">Municipal</td>
<td>1446</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/PER.gif" alt="Peru">  PER</td>
<td>First Division</td>
<td>192K</td>
<td>Professional</td>
<td>12,000</td>
<td><span class="label" style="background:#E00000"></span> <span class="label" style="background:#F8F8F8"></span></td>
<td>1935</td>
<td>26.7</td>
</tr><tr role="row" class="even">
<td id="935" class="sorting_1">Munster</td>
<td>935</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/GER.gif" alt="Germany">  GER</td>
<td>Third Division</td>
<td>0</td>
<td>Professional</td>
<td>15,050</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
<td>1906</td>
<td>24.8</td>
</tr><tr role="row" class="odd">
<td id="1739" class="sorting_1">Murcia</td>
<td>1739</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ESP.gif" alt="Spain">  ESP</td>
<td>Second Division B4</td>
<td>0</td>
<td>Professional</td>
<td>33,045</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#E00808"></span></td>
<td>1908</td>
<td>24.6</td>
</tr><tr role="row" class="even">
<td id="51008738" class="sorting_1">Murcielagos</td>
<td>51008738</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/MEX.gif" alt="Mexico">  MEX</td>
<td>Promotion League</td>
<td>384K</td>
<td>Professional</td>
<td>15,000</td>
<td><span class="label" style="background:#F8F000"></span> <span class="label" style="background:#000000"></span></td>
<td>2008</td>
<td>25.7</td>
</tr><tr role="row" class="odd">
<td id="7446432" class="sorting_1">Mutilvera</td>
<td>7446432</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ESP.gif" alt="Spain">  ESP</td>
<td>Second Division B1</td>
<td>0</td>
<td>Semi-Professional</td>
<td>1,000</td>
<td><span class="label" style="background:#002060"></span> <span class="label" style="background:#F8F8F8"></span></td>
<td>1914</td>
<td>25.2</td>
</tr><tr role="row" class="even">
<td id="1022" class="sorting_1">MVV</td>
<td>1022</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/NED.gif" alt="Holland">  NED</td>
<td>Jupiler League</td>
<td>7K</td>
<td>Professional</td>
<td>8,800</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#E03030"></span></td>
<td>1902</td>
<td>21.7</td>
</tr><tr role="row" class="odd">
<td id="63010727" class="sorting_1">Myjava</td>
<td>63010727</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/SVK.gif" alt="Slovakia">  SVK</td>
<td>First Division</td>
<td>65K</td>
<td>Professional</td>
<td>2,709</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F8F8F8"></span></td>
<td>1920</td>
<td>24.4</td>
</tr><tr role="row" class="even">
<td id="1894" class="sorting_1">Mykolaiv</td>
<td>1894</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/UKR.gif" alt="Ukraine">  UKR</td>
<td>First League</td>
<td>0</td>
<td>Professional</td>
<td>15,600</td>
<td><span class="label" style="background:#0040D0"></span> <span class="label" style="background:#0040D0"></span></td>
<td>1920</td>
<td>26.7</td>
</tr><tr role="row" class="odd">
<td id="1025" class="sorting_1">N.E.C.</td>
<td>1025</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/NED.gif" alt="Holland">  NED</td>
<td>Eredivisie</td>
<td>43K</td>
<td>Professional</td>
<td>12,500</td>
<td><span class="label" style="background:#00A858"></span> <span class="label" style="background:#F03028"></span></td>
<td>1900</td>
<td>22.8</td>
</tr><tr role="row" class="even">
<td id="541" class="sorting_1">N?sby</td>
<td>541</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/DEN.gif" alt="Denmark">  DEN</td>
<td>Second Division</td>
<td>0</td>
<td>Amateur</td>
<td>2,500</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#0050D0"></span></td>
<td>1938</td>
<td>25.1</td>
</tr><tr role="row" class="odd">
<td id="542" class="sorting_1">N?stved</td>
<td>542</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/DEN.gif" alt="Denmark">  DEN</td>
<td>First Division</td>
<td>12K</td>
<td>Semi-Professional</td>
<td>17,500</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#008888"></span></td>
<td>1939</td>
<td>25.1</td>
</tr><tr role="row" class="even">
<td id="1024" class="sorting_1">NAC</td>
<td>1024</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/NED.gif" alt="Holland">  NED</td>
<td>Jupiler League</td>
<td>43K</td>
<td>Professional</td>
<td>19,000</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#E0B010"></span></td>
<td>1912</td>
<td>22.1</td>
</tr><tr role="row" class="odd">
<td id="1921" class="sorting_1">Nacional</td>
<td>1921</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/URU.gif" alt="Uruguay">  URU</td>
<td>First Division</td>
<td>27K</td>
<td>Professional</td>
<td>24,613</td>
<td><span class="label" style="background:#0050D0"></span> <span class="label" style="background:#F8F8F8"></span></td>
<td>1899</td>
<td>26.0</td>
</tr><tr role="row" class="even">
<td id="2433" class="sorting_1">Nacional da Madeira</td>
<td>2433</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/POR.gif" alt="Portugal">  POR</td>
<td>Premier League</td>
<td>301K</td>
<td>Professional</td>
<td>5,586</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F8F8F8"></span></td>
<td>1910</td>
<td>23.0</td>
</tr><tr role="row" class="odd">
<td id="1300134" class="sorting_1">Naftan</td>
<td>1300134</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/BLR.gif" alt="Belarus">  BLR</td>
<td>Highest League</td>
<td>0</td>
<td>Professional</td>
<td>4,522</td>
<td><span class="label" style="background:#F8F000"></span> <span class="label" style="background:#0050D0"></span></td>
<td>1963</td>
<td>25.9</td>
</tr><tr role="row" class="even">
<td id="485835" class="sorting_1">Naftovyk-Ukrnafta</td>
<td>485835</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/UKR.gif" alt="Ukraine">  UKR</td>
<td>First League</td>
<td>50K</td>
<td>Professional</td>
<td>5,500</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F8F000"></span></td>
<td>1980</td>
<td>25.7</td>
</tr><tr role="row" class="odd">
<td id="1150" class="sorting_1">Napoli</td>
<td>1150</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ITA.gif" alt="Italy">  ITA</td>
<td>Serie A</td>
<td>14M</td>
<td>Professional</td>
<td>60,240</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#4098D8"></span></td>
<td>1926</td>
<td>25.5</td>
</tr><tr role="row" class="even">
<td id="1950" class="sorting_1">Napredak</td>
<td>1950</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/SRB.gif" alt="Serbia">  SRB</td>
<td>SuperLeague</td>
<td>215K</td>
<td>Professional</td>
<td>10,331</td>
<td><span class="label" style="background:#B00000"></span> <span class="label" style="background:#C80000"></span></td>
<td>1946</td>
<td>26.5</td>
</tr><tr role="row" class="odd">
<td id="1357" class="sorting_1">Nardo</td>
<td>1357</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/NOR.gif" alt="Norway">  NOR</td>
<td>Second Division Group 2</td>
<td>0</td>
<td>Semi-Professional</td>
<td>2,000</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#800020"></span></td>
<td>1971</td>
<td>23.7</td>
</tr><tr role="row" class="even">
<td id="328" class="sorting_1">NAU</td>
<td>328</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/BRA.gif" alt="Brazil">  BRA</td>
<td>Second Division</td>
<td>119K</td>
<td>Professional</td>
<td>45,500</td>
<td><span class="label" style="background:#0078F8"></span> <span class="label" style="background:#205090"></span></td>
<td>1901</td>
<td>25.6</td>
</tr><tr role="row" class="odd">
<td id="2415" class="sorting_1">Naval</td>
<td>2415</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/POR.gif" alt="Portugal">  POR</td>
<td>PT Championship</td>
<td>861</td>
<td>Semi-Professional</td>
<td>11,800</td>
<td><span class="label" style="background:#108830"></span> <span class="label" style="background:#F8F8F8"></span></td>
<td>1893</td>
<td>22.0</td>
</tr><tr role="row" class="even">
<td id="814350" class="sorting_1">Navalcarnero</td>
<td>814350</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ESP.gif" alt="Spain">  ESP</td>
<td>Second Division B2</td>
<td>0</td>
<td>Semi-Professional</td>
<td>2,500</td>
<td><span class="label" style="background:#E00000"></span> <span class="label" style="background:#F8F8F8"></span></td>
<td>1953</td>
<td>24.6</td>
</tr><tr role="row" class="odd">
<td id="130351" class="sorting_1">Nazilli Bld.</td>
<td>130351</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/TUR.gif" alt="Turkey">  TUR</td>
<td>2. League White</td>
<td>0</td>
<td>Professional</td>
<td>5,000</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#000000"></span></td>
<td>1984</td>
<td>26.4</td>
</tr><tr role="row" class="even">
<td id="1258" class="sorting_1">Necaxa</td>
<td>1258</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/MEX.gif" alt="Mexico">  MEX</td>
<td>First Division</td>
<td>231K</td>
<td>Professional</td>
<td>25,000</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#E00000"></span></td>
<td>1923</td>
<td>28.4</td>
</tr><tr role="row" class="odd">
<td id="130550" class="sorting_1">Neftekhimik</td>
<td>130550</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/RUS.gif" alt="Russia">  RUS</td>
<td>First Division</td>
<td>0</td>
<td>Professional</td>
<td>3,140</td>
<td><span class="label" style="background:#E00000"></span> <span class="label" style="background:#F8F8F8"></span></td>
<td>1991</td>
<td>26.4</td>
</tr><tr role="row" class="even">
<td id="22029000" class="sorting_1">Neftochimic 1962</td>
<td>22029000</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/BUL.gif" alt="Bulgaria">  BUL</td>
<td>First League</td>
<td>15K</td>
<td>Professional</td>
<td>18,037</td>
<td><span class="label" style="background:#00A030"></span> <span class="label" style="background:#108830"></span></td>
<td>1962</td>
<td>26.5</td>
</tr><tr role="row" class="odd">
<td id="307" class="sorting_1">Neman Grodno</td>
<td>307</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/BLR.gif" alt="Belarus">  BLR</td>
<td>Highest League</td>
<td>4K</td>
<td>Professional</td>
<td>8,800</td>
<td><span class="label" style="background:#308058"></span> <span class="label" style="background:#F0C808"></span></td>
<td>1964</td>
<td>26.0</td>
</tr><tr role="row" class="even">
<td id="7500423" class="sorting_1">Nesebar</td>
<td>7500423</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/BUL.gif" alt="Bulgaria">  BUL</td>
<td>Second League</td>
<td>0</td>
<td>Professional</td>
<td>8,000</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#0050D0"></span></td>
<td>1946</td>
<td>24.8</td>
</tr><tr role="row" class="odd">
<td id="42018773" class="sorting_1">Nesher</td>
<td>42018773</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ISR.gif" alt="Israel">  ISR</td>
<td>National League</td>
<td>0</td>
<td>Professional</td>
<td>3,500</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
<td>2009</td>
<td>24.0</td>
</tr><tr role="row" class="even">
<td id="1359" class="sorting_1">Nest-Sotra</td>
<td>1359</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/NOR.gif" alt="Norway">  NOR</td>
<td>Second Division Group 3</td>
<td>0</td>
<td>Semi-Professional</td>
<td>1,500</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#60D020"></span></td>
<td>1968</td>
<td>22.4</td>
</tr><tr role="row" class="odd">
<td id="1857" class="sorting_1">Neuchatel Xamax</td>
<td>1857</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/SUI.gif" alt="Switzerland">  SUI</td>
<td>Challenge League</td>
<td>46K</td>
<td>Professional</td>
<td>11,977</td>
<td><span class="label" style="background:#E00000"></span> <span class="label" style="background:#000000"></span></td>
<td>1970</td>
<td>24.5</td>
</tr><tr role="row" class="even">
<td id="1909" class="sorting_1">New England</td>
<td>1909</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/USA.gif" alt="U.S.A.">  USA</td>
<td>MLS</td>
<td>384K</td>
<td>Professional</td>
<td>66,829</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#304058"></span></td>
<td>1996</td>
<td>26.0</td>
</tr><tr role="row" class="odd">
<td id="72000160" class="sorting_1">New York</td>
<td>72000160</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/USA.gif" alt="U.S.A.">  USA</td>
<td>MLS</td>
<td>2M</td>
<td>Professional</td>
<td>25,000</td>
<td><span class="label" style="background:#B00000"></span> <span class="label" style="background:#F8F8F8"></span></td>
<td>1996</td>
<td>25.9</td>
</tr><tr role="row" class="even">
<td id="426430" class="sorting_1">Newcastle Jets</td>
<td>426430</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/AUS.gif" alt="Australia">  AUS</td>
<td>Hyundai A-League</td>
<td>75K</td>
<td>Professional</td>
<td>33,000</td>
<td><span class="label" style="background:#D0A838"></span> <span class="label" style="background:#2850A0"></span></td>
<td>2000</td>
<td>23.9</td>
</tr><tr role="row" class="odd">
<td id="91" class="sorting_1">Newell's</td>
<td>91</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ARG.gif" alt="Argentina">  ARG</td>
<td>Premier Division</td>
<td>2M</td>
<td>Professional</td>
<td>42,000</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#C00008"></span></td>
<td>1903</td>
<td>27.5</td>
</tr><tr role="row" class="even">
<td id="414175" class="sorting_1">Newington</td>
<td>414175</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/NIR.gif" alt="N.Ireland">  NIR</td>
<td>NIFL C2</td>
<td>0</td>
<td>Semi-Professional</td>
<td>3,383</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#006030"></span></td>
<td>1979</td>
<td>28.4</td>
</tr><tr role="row" class="odd">
<td id="52065322" class="sorting_1">Newry City AFC</td>
<td>52065322</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/NIR.gif" alt="N.Ireland">  NIR</td>
<td>NIFL C2</td>
<td>0</td>
<td>Semi-Professional</td>
<td>6,000</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#0030A0"></span></td>
<td>2013</td>
<td>27.9</td>
</tr><tr role="row" class="even">
<td id="1943" class="sorting_1">Newtown</td>
<td>1943</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/WAL.gif" alt="Wales">  WAL</td>
<td>Welsh Premier League</td>
<td>5K</td>
<td>Semi-Professional</td>
<td>3,372</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#E00000"></span></td>
<td>1875</td>
<td>26.6</td>
</tr><tr role="row" class="odd">
<td id="70054569" class="sorting_1">Nigde Bld.</td>
<td>70054569</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/TUR.gif" alt="Turkey">  TUR</td>
<td>2. League Red</td>
<td>0</td>
<td>Professional</td>
<td>5,000</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#E00000"></span></td>
<td>1990</td>
<td>26.7</td>
</tr><tr role="row" class="even">
<td id="860" class="sorting_1">Nimes Olympique</td>
<td>860</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/FRA.gif" alt="France">  FRA</td>
<td>Domino's Ligue 2</td>
<td>0</td>
<td>Professional</td>
<td>18,482</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#E00000"></span></td>
<td>1937</td>
<td>24.7</td>
</tr><tr role="row" class="odd">
<td id="1301175" class="sorting_1">Nitra</td>
<td>1301175</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/SVK.gif" alt="Slovakia">  SVK</td>
<td>Second Division</td>
<td>13K</td>
<td>Professional</td>
<td>5,050</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#60C0F8"></span></td>
<td>1909</td>
<td>23.8</td>
</tr><tr role="row" class="even">
<td id="2172" class="sorting_1">Norrby IF</td>
<td>2172</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/SWE.gif" alt="Sweden">  SWE</td>
<td>First Division South</td>
<td>0</td>
<td>Semi-Professional</td>
<td>18,800</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#1068F8"></span></td>
<td>1927</td>
<td>23.6</td>
</tr><tr role="row" class="odd">
<td id="755792" class="sorting_1">Notodden</td>
<td>755792</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/NOR.gif" alt="Norway">  NOR</td>
<td>Second Division Group 4</td>
<td>948</td>
<td>Semi-Professional</td>
<td>4,000</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#0050D0"></span></td>
<td>1999</td>
<td>27.7</td>
</tr><tr role="row" class="even">
<td id="1153" class="sorting_1">Novara</td>
<td>1153</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ITA.gif" alt="Italy">  ITA</td>
<td>Serie B</td>
<td>345K</td>
<td>Professional</td>
<td>17,875</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#1068F8"></span></td>
<td>1908</td>
<td>24.5</td>
</tr><tr role="row" class="odd">
<td id="63000906" class="sorting_1">Nove Mesto</td>
<td>63000906</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/SVK.gif" alt="Slovakia">  SVK</td>
<td>Second Division</td>
<td>0</td>
<td>Professional</td>
<td>2,500</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#008030"></span></td>
<td>1922</td>
<td>23.6</td>
</tr><tr role="row" class="even">
<td id="6400020" class="sorting_1">Novi Pazar</td>
<td>6400020</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/SRB.gif" alt="Serbia">  SRB</td>
<td>SuperLeague</td>
<td>95K</td>
<td>Professional</td>
<td>12,000</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#0030A0"></span></td>
<td>1928</td>
<td>26.1</td>
</tr><tr role="row" class="odd">
<td id="24021033" class="sorting_1">Novigrad</td>
<td>24021033</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/CRO.gif" alt="Croatia">  CRO</td>
<td>Second League</td>
<td>420K</td>
<td>Semi-Professional</td>
<td>1,000</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#E00000"></span></td>
<td>0</td>
<td>23.4</td>
</tr><tr role="row" class="even">
<td id="130798" class="sorting_1">Nublense</td>
<td>130798</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/CHI.gif" alt="Chile">  CHI</td>
<td>First Division B</td>
<td>9K</td>
<td>Professional</td>
<td>12,000</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#E00000"></span></td>
<td>1916</td>
<td>25.3</td>
</tr><tr role="row" class="odd">
<td id="102486" class="sorting_1">Nueva Chicago</td>
<td>102486</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ARG.gif" alt="Argentina">  ARG</td>
<td>Second Division</td>
<td>77K</td>
<td>Professional</td>
<td>28,500</td>
<td><span class="label" style="background:#00A030"></span> <span class="label" style="background:#000000"></span></td>
<td>1911</td>
<td>25.9</td>
</tr><tr role="row" class="even">
<td id="1699" class="sorting_1">Numantia</td>
<td>1699</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ESP.gif" alt="Spain">  ESP</td>
<td>Second Division</td>
<td>0</td>
<td>Professional</td>
<td>9,025</td>
<td><span class="label" style="background:#E00000"></span> <span class="label" style="background:#E00000"></span></td>
<td>1945</td>
<td>26.0</td>
</tr><tr role="row" class="odd">
<td id="899" class="sorting_1">Nurnberg</td>
<td>899</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/GER.gif" alt="Germany">  GER</td>
<td>Second Division</td>
<td>215K</td>
<td>Professional</td>
<td>50,000</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#A82828"></span></td>
<td>1900</td>
<td>25.7</td>
</tr><tr role="row" class="even">
<td id="1363" class="sorting_1">Nybergsund</td>
<td>1363</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/NOR.gif" alt="Norway">  NOR</td>
<td>Second Division Group 2</td>
<td>5K</td>
<td>Semi-Professional</td>
<td>1,600</td>
<td><span class="label" style="background:#0080F8"></span> <span class="label" style="background:#F8F8F8"></span></td>
<td>1918</td>
<td>24.4</td>
</tr><tr role="row" class="odd">
<td id="2626" class="sorting_1">Nybro IF</td>
<td>2626</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/SWE.gif" alt="Sweden">  SWE</td>
<td>Second Division SG</td>
<td>0</td>
<td>Semi-Professional</td>
<td>1,000</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#E00000"></span></td>
<td>1906</td>
<td>24.3</td>
</tr><tr role="row" class="even">
<td id="72041885" class="sorting_1">NYCFC</td>
<td>72041885</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/USA.gif" alt="U.S.A.">  USA</td>
<td>MLS</td>
<td>5M</td>
<td>Professional</td>
<td>49,638</td>
<td><span class="label" style="background:#002060"></span> <span class="label" style="background:#98D0F0"></span></td>
<td>2015</td>
<td>26.8</td>
</tr><tr role="row" class="odd">
<td id="130823" class="sorting_1">Nyiregyhaza</td>
<td>130823</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/HUN.gif" alt="Hungary">  HUN</td>
<td>Division II</td>
<td>16K</td>
<td>Professional</td>
<td>10,000</td>
<td><span class="label" style="background:#E00000"></span> <span class="label" style="background:#002080"></span></td>
<td>1959</td>
<td>25.0</td>
</tr><tr role="row" class="even">
<td id="539" class="sorting_1">Nykobing FC</td>
<td>539</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/DEN.gif" alt="Denmark">  DEN</td>
<td>First Division</td>
<td>116K</td>
<td>Semi-Professional</td>
<td>10,000</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
<td>1994</td>
<td>25.8</td>
</tr><tr role="row" class="odd">
<td id="2627" class="sorting_1">Nykopings BIS</td>
<td>2627</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/SWE.gif" alt="Sweden">  SWE</td>
<td>First Division North</td>
<td>0</td>
<td>Semi-Professional</td>
<td>3,200</td>
<td><span class="label" style="background:#005098"></span> <span class="label" style="background:#E00000"></span></td>
<td>1966</td>
<td>22.7</td>
</tr><tr role="row" class="even">
<td id="400" class="sorting_1">O'Higgins</td>
<td>400</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/CHI.gif" alt="Chile">  CHI</td>
<td>First Division</td>
<td>77K</td>
<td>Professional</td>
<td>13,839</td>
<td><span class="label" style="background:#60C0F8"></span> <span class="label" style="background:#60C0F8"></span></td>
<td>1955</td>
<td>23.2</td>
</tr><tr role="row" class="odd">
<td id="545" class="sorting_1">OB</td>
<td>545</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/DEN.gif" alt="Denmark">  DEN</td>
<td>Superliga</td>
<td>347K</td>
<td>Professional</td>
<td>15,761</td>
<td><span class="label" style="background:#2858B0"></span> <span class="label" style="background:#F8F8F8"></span></td>
<td>1887</td>
<td>23.7</td>
</tr><tr role="row" class="even">
<td id="71075348" class="sorting_1">Obolon-Brewer</td>
<td>71075348</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/UKR.gif" alt="Ukraine">  UKR</td>
<td>First League</td>
<td>0</td>
<td>Professional</td>
<td>5,000</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#008030"></span></td>
<td>2013</td>
<td>27.2</td>
</tr><tr role="row" class="odd">
<td id="22029419" class="sorting_1">Oborishte</td>
<td>22029419</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/BUL.gif" alt="Bulgaria">  BUL</td>
<td>Second League</td>
<td>2K</td>
<td>Professional</td>
<td>3,000</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#008030"></span></td>
<td>1925</td>
<td>24.4</td>
</tr><tr role="row" class="even">
<td id="1365" class="sorting_1">Odd</td>
<td>1365</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/NOR.gif" alt="Norway">  NOR</td>
<td>Premier Division</td>
<td>190K</td>
<td>Professional</td>
<td>12,293</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F8F8F8"></span></td>
<td>1894</td>
<td>24.9</td>
</tr><tr role="row" class="odd">
<td id="930256" class="sorting_1">Odder</td>
<td>930256</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/DEN.gif" alt="Denmark">  DEN</td>
<td>Second Division</td>
<td>0</td>
<td>Amateur</td>
<td>2,000</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#0050D0"></span></td>
<td>1899</td>
<td>23.6</td>
</tr><tr role="row" class="even">
<td id="62144657" class="sorting_1">Odzaci</td>
<td>62144657</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/SRB.gif" alt="Serbia">  SRB</td>
<td>First League</td>
<td>30K</td>
<td>Semi-Professional</td>
<td>1,500</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
<td>1969</td>
<td>25.7</td>
</tr><tr role="row" class="odd">
<td id="311028" class="sorting_1">OES</td>
<td>311028</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/BRA.gif" alt="Brazil">  BRA</td>
<td>Second Division</td>
<td>12K</td>
<td>Professional</td>
<td>14,074</td>
<td><span class="label" style="background:#008030"></span> <span class="label" style="background:#F8F000"></span></td>
<td>1921</td>
<td>25.6</td>
</tr><tr role="row" class="even">
<td id="980" class="sorting_1">OFI</td>
<td>980</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/GRE.gif" alt="Greece">  GRE</td>
<td>B Division</td>
<td>0</td>
<td>Professional</td>
<td>9,088</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
<td>1925</td>
<td>25.5</td>
</tr><tr role="row" class="odd">
<td id="1951" class="sorting_1">OFK Beograd</td>
<td>1951</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/SRB.gif" alt="Serbia">  SRB</td>
<td>First League</td>
<td>78K</td>
<td>Professional</td>
<td>19,100</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#0050D0"></span></td>
<td>1911</td>
<td>21.2</td>
</tr><tr role="row" class="even">
<td id="454646" class="sorting_1">Ofspor</td>
<td>454646</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/TUR.gif" alt="Turkey">  TUR</td>
<td>2. League White</td>
<td>0</td>
<td>Professional</td>
<td>2,303</td>
<td><span class="label" style="background:#C80000"></span> <span class="label" style="background:#0030A0"></span></td>
<td>1979</td>
<td>22.3</td>
</tr><tr role="row" class="odd">
<td id="862" class="sorting_1">OGC Nice</td>
<td>862</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/FRA.gif" alt="France">  FRA</td>
<td>Ligue 1</td>
<td>2M</td>
<td>Professional</td>
<td>36,178</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#E00000"></span></td>
<td>1904</td>
<td>24.0</td>
</tr><tr role="row" class="even">
<td id="280" class="sorting_1">OHL</td>
<td>280</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/BEL.gif" alt="Belgium">  BEL</td>
<td>Pro League B</td>
<td>0</td>
<td>Professional</td>
<td>10,019</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F8F8F8"></span></td>
<td>1958</td>
<td>24.3</td>
</tr><tr role="row" class="odd">
<td id="2212" class="sorting_1">Olbia</td>
<td>2212</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ITA.gif" alt="Italy">  ITA</td>
<td>Serie C/A</td>
<td>52K</td>
<td>Professional</td>
<td>4,000</td>
<td><span class="label" style="background:#C0C0C0"></span> <span class="label" style="background:#F8F8F8"></span></td>
<td>1905</td>
<td>21.7</td>
</tr><tr role="row" class="even">
<td id="484460" class="sorting_1">Olexandriya</td>
<td>484460</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/UKR.gif" alt="Ukraine">  UKR</td>
<td>Premier League</td>
<td>10K</td>
<td>Professional</td>
<td>5,692</td>
<td><span class="label" style="background:#F8F000"></span> <span class="label" style="background:#000000"></span></td>
<td>1991</td>
<td>26.3</td>
</tr><tr role="row" class="odd">
<td id="2445" class="sorting_1">Olhanense</td>
<td>2445</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/POR.gif" alt="Portugal">  POR</td>
<td>Second League</td>
<td>43K</td>
<td>Professional</td>
<td>5,661</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
<td>1912</td>
<td>22.8</td>
</tr><tr role="row" class="even">
<td id="54015271" class="sorting_1">Olimpia Grudziadz</td>
<td>54015271</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/POL.gif" alt="Poland">  POL</td>
<td>First Division</td>
<td>10K</td>
<td>Professional</td>
<td>5,000</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#48A068"></span></td>
<td>1923</td>
<td>23.9</td>
</tr><tr role="row" class="odd">
<td id="57036024" class="sorting_1">Olimpia SM</td>
<td>57036024</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ROU.gif" alt="Romania">  ROU</td>
<td>Liga II</td>
<td>0</td>
<td>Professional</td>
<td>18,000</td>
<td><span class="label" style="background:#F8F000"></span> <span class="label" style="background:#2810B8"></span></td>
<td>1921</td>
<td>22.7</td>
</tr><tr role="row" class="even">
<td id="1639" class="sorting_1">Olimpija</td>
<td>1639</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/SVN.gif" alt="Slovenia">  SVN</td>
<td>First League</td>
<td>861K</td>
<td>Professional</td>
<td>16,038</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
<td>1911</td>
<td>23.4</td>
</tr><tr role="row" class="odd">
<td id="5321800" class="sorting_1">Olimpik D</td>
<td>5321800</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/UKR.gif" alt="Ukraine">  UKR</td>
<td>Premier League</td>
<td>0</td>
<td>Professional</td>
<td>5,000</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F8F8F8"></span></td>
<td>2001</td>
<td>24.5</td>
</tr><tr role="row" class="even">
<td id="108542" class="sorting_1">Olimpo</td>
<td>108542</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ARG.gif" alt="Argentina">  ARG</td>
<td>Premier Division</td>
<td>74K</td>
<td>Professional</td>
<td>18,000</td>
<td><span class="label" style="background:#F8F000"></span> <span class="label" style="background:#000000"></span></td>
<td>1910</td>
<td>27.3</td>
</tr><tr role="row" class="odd">
<td id="2416" class="sorting_1">Oliveirense</td>
<td>2416</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/POR.gif" alt="Portugal">  POR</td>
<td>PT Championship</td>
<td>43K</td>
<td>Semi-Professional</td>
<td>5,000</td>
<td><span class="label" style="background:#002060"></span> <span class="label" style="background:#E00000"></span></td>
<td>1922</td>
<td>25.1</td>
</tr><tr role="row" class="even">
<td id="981" class="sorting_1">Olympiakos</td>
<td>981</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/GRE.gif" alt="Greece">  GRE</td>
<td>Superleague</td>
<td>1M</td>
<td>Professional</td>
<td>32,115</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
<td>1925</td>
<td>24.3</td>
</tr><tr role="row" class="odd">
<td id="865" class="sorting_1">Olympique Lyonnais</td>
<td>865</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/FRA.gif" alt="France">  FRA</td>
<td>Ligue 1</td>
<td>3M</td>
<td>Professional</td>
<td>59,286</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
<td>1950</td>
<td>24.2</td>
</tr><tr role="row" class="even">
<td id="866" class="sorting_1">OM</td>
<td>866</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/FRA.gif" alt="France">  FRA</td>
<td>Ligue 1</td>
<td>9M</td>
<td>Professional</td>
<td>67,354</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
<td>1899</td>
<td>25.7</td>
</tr><tr role="row" class="odd">
<td id="420" class="sorting_1">Once Caldas</td>
<td>420</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/COL.gif" alt="Colombia">  COL</td>
<td>First Division</td>
<td>845K</td>
<td>Professional</td>
<td>28,678</td>
<td><span class="label" style="background:#E00000"></span> <span class="label" style="background:#F8F8F8"></span></td>
<td>1961</td>
<td>26.1</td>
</tr><tr role="row" class="even">
<td id="233" class="sorting_1">Oostende</td>
<td>233</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/BEL.gif" alt="Belgium">  BEL</td>
<td>Pro League</td>
<td>65K</td>
<td>Professional</td>
<td>8,432</td>
<td><span class="label" style="background:#008030"></span> <span class="label" style="background:#E00000"></span></td>
<td>1905</td>
<td>26.1</td>
</tr><tr role="row" class="odd">
<td id="18008817" class="sorting_1">Oosterzonen</td>
<td>18008817</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/BEL.gif" alt="Belgium">  BEL</td>
<td>First Division</td>
<td>0</td>
<td>Semi-Professional</td>
<td>1,000</td>
<td><span class="label" style="background:#F8F838"></span> <span class="label" style="background:#F8F000"></span></td>
<td>0</td>
<td>22.8</td>
</tr><tr role="row" class="even">
<td id="130859" class="sorting_1">Opava</td>
<td>130859</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/CZE.gif" alt="Czech Republic">  CZE</td>
<td>Second Division</td>
<td>160K</td>
<td>Professional</td>
<td>7,724</td>
<td><span class="label" style="background:#F8F000"></span> <span class="label" style="background:#002060"></span></td>
<td>1907</td>
<td>26.3</td>
</tr><tr role="row" class="odd">
<td id="109040" class="sorting_1">Operario Lagoa</td>
<td>109040</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/POR.gif" alt="Portugal">  POR</td>
<td>PT Championship</td>
<td>4K</td>
<td>Semi-Professional</td>
<td>2,500</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#E00000"></span></td>
<td>1948</td>
<td>23.6</td>
</tr><tr role="row" class="even">
<td id="1366" class="sorting_1">Oppsal</td>
<td>1366</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/NOR.gif" alt="Norway">  NOR</td>
<td>Second Division Group 1</td>
<td>0</td>
<td>Semi-Professional</td>
<td>500</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#B00000"></span></td>
<td>1969</td>
<td>22.3</td>
</tr><tr role="row" class="odd">
<td id="1842" class="sorting_1">Orebro SK</td>
<td>1842</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/SWE.gif" alt="Sweden">  SWE</td>
<td>Premier Division</td>
<td>72K</td>
<td>Professional</td>
<td>14,400</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F8F8F8"></span></td>
<td>1908</td>
<td>25.2</td>
</tr><tr role="row" class="even">
<td id="58127493" class="sorting_1">Orenburg</td>
<td>58127493</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/RUS.gif" alt="Russia">  RUS</td>
<td>Premier Division</td>
<td>0</td>
<td>Professional</td>
<td>4,800</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#0050D0"></span></td>
<td>1976</td>
<td>27.8</td>
</tr><tr role="row" class="odd">
<td id="2444" class="sorting_1">Oriental</td>
<td>2444</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/POR.gif" alt="Portugal">  POR</td>
<td>PT Championship</td>
<td>4K</td>
<td>Semi-Professional</td>
<td>8,500</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#901000"></span></td>
<td>1946</td>
<td>25.2</td>
</tr><tr role="row" class="even">
<td id="72014193" class="sorting_1">Orlando City</td>
<td>72014193</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/USA.gif" alt="U.S.A.">  USA</td>
<td>MLS</td>
<td>2M</td>
<td>Professional</td>
<td>60,700</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#5848A0"></span></td>
<td>2010</td>
<td>24.4</td>
</tr><tr role="row" class="odd">
<td id="1645" class="sorting_1">Orlando Pirates</td>
<td>1645</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/RSA.gif" alt="South Africa">  RSA</td>
<td>South African Premiership</td>
<td>847K</td>
<td>Professional</td>
<td>40,000</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#000000"></span></td>
<td>1937</td>
<td>25.9</td>
</tr><tr role="row" class="even">
<td id="1432" class="sorting_1">Orn Horten</td>
<td>1432</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/NOR.gif" alt="Norway">  NOR</td>
<td>Second Division Group 4</td>
<td>3K</td>
<td>Semi-Professional</td>
<td>4,100</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#A05000"></span></td>
<td>1904</td>
<td>21.1</td>
</tr><tr role="row" class="odd">
<td id="7483392" class="sorting_1">Orsha</td>
<td>7483392</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/BLR.gif" alt="Belarus">  BLR</td>
<td>First League</td>
<td>123K</td>
<td>Professional</td>
<td>2,652</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#0078F8"></span></td>
<td>1951</td>
<td>25.4</td>
</tr><tr role="row" class="even">
<td id="76045729" class="sorting_1">Orsomarso S.C.</td>
<td>76045729</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/COL.gif" alt="Colombia">  COL</td>
<td>Second Division</td>
<td>146K</td>
<td>Professional</td>
<td>9,000</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#0050D0"></span></td>
<td>2012</td>
<td>25.2</td>
</tr><tr role="row" class="odd">
<td id="17030315" class="sorting_1">Oshmyany</td>
<td>17030315</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/BLR.gif" alt="Belarus">  BLR</td>
<td>First League</td>
<td>0</td>
<td>Professional</td>
<td>500</td>
<td><span class="label" style="background:#002060"></span> <span class="label" style="background:#60C0F8"></span></td>
<td>1989</td>
<td>25.0</td>
</tr><tr role="row" class="even">
<td id="440" class="sorting_1">Osijek</td>
<td>440</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/CRO.gif" alt="Croatia">  CRO</td>
<td>First League</td>
<td>861K</td>
<td>Professional</td>
<td>19,500</td>
<td><span class="label" style="background:#2850A0"></span> <span class="label" style="background:#F8F8F8"></span></td>
<td>1947</td>
<td>26.1</td>
</tr><tr role="row" class="odd">
<td id="130355" class="sorting_1">Osmanl?spor</td>
<td>130355</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/TUR.gif" alt="Turkey">  TUR</td>
<td>Super League</td>
<td>774K</td>
<td>Professional</td>
<td>19,626</td>
<td><span class="label" style="background:#081030"></span> <span class="label" style="background:#E0D8C8"></span></td>
<td>1978</td>
<td>26.9</td>
</tr><tr role="row" class="even">
<td id="937" class="sorting_1">Osnabruck</td>
<td>937</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/GER.gif" alt="Germany">  GER</td>
<td>Third Division</td>
<td>0</td>
<td>Professional</td>
<td>16,000</td>
<td><span class="label" style="background:#281060"></span> <span class="label" style="background:#F8F8F8"></span></td>
<td>1899</td>
<td>25.3</td>
</tr><tr role="row" class="odd">
<td id="1042" class="sorting_1">Oss</td>
<td>1042</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/NED.gif" alt="Holland">  NED</td>
<td>Jupiler League</td>
<td>22K</td>
<td>Professional</td>
<td>4,700</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#E00000"></span></td>
<td>1928</td>
<td>23.9</td>
</tr><tr role="row" class="even">
<td id="6600093" class="sorting_1">Oudenaarde</td>
<td>6600093</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/BEL.gif" alt="Belgium">  BEL</td>
<td>First Division</td>
<td>0</td>
<td>Semi-Professional</td>
<td>3,500</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F8F000"></span></td>
<td>1911</td>
<td>23.4</td>
</tr><tr role="row" class="odd">
<td id="1741" class="sorting_1">Oviedo</td>
<td>1741</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ESP.gif" alt="Spain">  ESP</td>
<td>Second Division</td>
<td>86K</td>
<td>Professional</td>
<td>30,000</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#0078F8"></span></td>
<td>1926</td>
<td>28.0</td>
</tr><tr role="row" class="even">
<td id="2386" class="sorting_1">P. Ferreira</td>
<td>2386</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/POR.gif" alt="Portugal">  POR</td>
<td>Premier League</td>
<td>151K</td>
<td>Professional</td>
<td>7,500</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
<td>1950</td>
<td>24.0</td>
</tr><tr role="row" class="odd">
<td id="130172" class="sorting_1">P.S.N.I.</td>
<td>130172</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/NIR.gif" alt="N.Ireland">  NIR</td>
<td>NIFL C1</td>
<td>0</td>
<td>Semi-Professional</td>
<td>1,000</td>
<td><span class="label" style="background:#E00000"></span> <span class="label" style="background:#008030"></span></td>
<td>1956</td>
<td>27.5</td>
</tr><tr role="row" class="even">
<td id="116204" class="sorting_1">Pachuca</td>
<td>116204</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/MEX.gif" alt="Mexico">  MEX</td>
<td>First Division</td>
<td>4M</td>
<td>Professional</td>
<td>30,024</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#002060"></span></td>
<td>1901</td>
<td>23.8</td>
</tr><tr role="row" class="odd">
<td id="121198" class="sorting_1">Paderborn</td>
<td>121198</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/GER.gif" alt="Germany">  GER</td>
<td>Third Division</td>
<td>0</td>
<td>Professional</td>
<td>15,000</td>
<td><span class="label" style="background:#0078F8"></span> <span class="label" style="background:#000000"></span></td>
<td>1907</td>
<td>25.6</td>
</tr><tr role="row" class="even">
<td id="1154" class="sorting_1">Padova</td>
<td>1154</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ITA.gif" alt="Italy">  ITA</td>
<td>Serie C/B</td>
<td>215K</td>
<td>Professional</td>
<td>32,420</td>
<td><span class="label" style="background:#E00000"></span> <span class="label" style="background:#F8F8F8"></span></td>
<td>1910</td>
<td>26.3</td>
</tr><tr role="row" class="odd">
<td id="831361" class="sorting_1">Paganese</td>
<td>831361</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ITA.gif" alt="Italy">  ITA</td>
<td>Serie C/C</td>
<td>78K</td>
<td>Professional</td>
<td>5,093</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#0050D0"></span></td>
<td>1926</td>
<td>24.3</td>
</tr><tr role="row" class="even">
<td id="7521327" class="sorting_1">Paks</td>
<td>7521327</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/HUN.gif" alt="Hungary">  HUN</td>
<td>Division I</td>
<td>0</td>
<td>Professional</td>
<td>4,950</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#00A030"></span></td>
<td>1952</td>
<td>26.0</td>
</tr><tr role="row" class="odd">
<td id="67204085" class="sorting_1">Palencia</td>
<td>67204085</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ESP.gif" alt="Spain">  ESP</td>
<td>Second Division B1</td>
<td>0</td>
<td>Semi-Professional</td>
<td>8,078</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#7868C0"></span></td>
<td>2011</td>
<td>28.0</td>
</tr><tr role="row" class="even">
<td id="2194" class="sorting_1">Palermo</td>
<td>2194</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ITA.gif" alt="Italy">  ITA</td>
<td>Serie A</td>
<td>2M</td>
<td>Professional</td>
<td>36,349</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#E8A0B8"></span></td>
<td>1900</td>
<td>25.7</td>
</tr><tr role="row" class="odd">
<td id="130780" class="sorting_1">Palestino</td>
<td>130780</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/CHI.gif" alt="Chile">  CHI</td>
<td>First Division</td>
<td>154K</td>
<td>Professional</td>
<td>10,000</td>
<td><span class="label" style="background:#108830"></span> <span class="label" style="background:#F8F8F8"></span></td>
<td>1920</td>
<td>23.5</td>
</tr><tr role="row" class="even">
<td id="744319" class="sorting_1">Pampilhosa</td>
<td>744319</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/POR.gif" alt="Portugal">  POR</td>
<td>PT Championship</td>
<td>2K</td>
<td>Semi-Professional</td>
<td>5,000</td>
<td><span class="label" style="background:#A0A0A0"></span> <span class="label" style="background:#0050D0"></span></td>
<td>1930</td>
<td>28.0</td>
</tr><tr role="row" class="odd">
<td id="129664" class="sorting_1">Panaigialeios</td>
<td>129664</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/GRE.gif" alt="Greece">  GRE</td>
<td>B Division</td>
<td>0</td>
<td>Professional</td>
<td>5,500</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#000000"></span></td>
<td>1927</td>
<td>23.4</td>
</tr><tr role="row" class="even">
<td id="129665" class="sorting_1">Panaitolikos</td>
<td>129665</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/GRE.gif" alt="Greece">  GRE</td>
<td>Superleague</td>
<td>0</td>
<td>Professional</td>
<td>6,000</td>
<td><span class="label" style="background:#0030A0"></span> <span class="label" style="background:#F8F000"></span></td>
<td>1926</td>
<td>24.9</td>
</tr><tr role="row" class="odd">
<td id="983" class="sorting_1">Panathinaikos</td>
<td>983</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/GRE.gif" alt="Greece">  GRE</td>
<td>Superleague</td>
<td>258K</td>
<td>Professional</td>
<td>16,003</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
<td>1908</td>
<td>26.2</td>
</tr><tr role="row" class="even">
<td id="7540061" class="sorting_1">Pandurii</td>
<td>7540061</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ROU.gif" alt="Romania">  ROU</td>
<td>Liga I</td>
<td>0</td>
<td>Professional</td>
<td>20,240</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#0050D0"></span></td>
<td>1963</td>
<td>26.3</td>
</tr><tr role="row" class="odd">
<td id="114582" class="sorting_1">Panelefsiniakos</td>
<td>114582</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/GRE.gif" alt="Greece">  GRE</td>
<td>B Division</td>
<td>0</td>
<td>Professional</td>
<td>1,400</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#0050D0"></span></td>
<td>1931</td>
<td>23.9</td>
</tr><tr role="row" class="even">
<td id="984" class="sorting_1">Panionios</td>
<td>984</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/GRE.gif" alt="Greece">  GRE</td>
<td>Superleague</td>
<td>0</td>
<td>Professional</td>
<td>11,115</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
<td>1890</td>
<td>23.4</td>
</tr><tr role="row" class="odd">
<td id="129666" class="sorting_1">Panserraikos</td>
<td>129666</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/GRE.gif" alt="Greece">  GRE</td>
<td>B Division</td>
<td>0</td>
<td>Professional</td>
<td>9,500</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#E00000"></span></td>
<td>1964</td>
<td>23.0</td>
</tr><tr role="row" class="even">
<td id="687641" class="sorting_1">Panthrakikos</td>
<td>687641</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/GRE.gif" alt="Greece">  GRE</td>
<td>B Division</td>
<td>0</td>
<td>Professional</td>
<td>6,198</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#006030"></span></td>
<td>1995</td>
<td>21.4</td>
</tr><tr role="row" class="odd">
<td id="982" class="sorting_1">PAOK</td>
<td>982</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/GRE.gif" alt="Greece">  GRE</td>
<td>Superleague</td>
<td>2M</td>
<td>Professional</td>
<td>28,703</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
<td>1926</td>
<td>23.4</td>
</tr><tr role="row" class="even">
<td id="330" class="sorting_1">PAR</td>
<td>330</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/BRA.gif" alt="Brazil">  BRA</td>
<td>Second Division</td>
<td>0</td>
<td>Professional</td>
<td>17,000</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#0078F8"></span></td>
<td>1989</td>
<td>27.3</td>
</tr><tr role="row" class="odd">
<td id="5647950" class="sorting_1">Pardubice</td>
<td>5647950</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/CZE.gif" alt="Czech Republic">  CZE</td>
<td>Second Division</td>
<td>160K</td>
<td>Professional</td>
<td>3,000</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#E00000"></span></td>
<td>2008</td>
<td>22.5</td>
</tr><tr role="row" class="even">
<td id="867" class="sorting_1">Paris FC</td>
<td>867</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/FRA.gif" alt="France">  FRA</td>
<td>National</td>
<td>0</td>
<td>Professional</td>
<td>20,000</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#002060"></span></td>
<td>1969</td>
<td>26.9</td>
</tr><tr role="row" class="odd">
<td id="868" class="sorting_1">Paris Saint-Germain</td>
<td>868</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/FRA.gif" alt="France">  FRA</td>
<td>Ligue 1</td>
<td>52M</td>
<td>Professional</td>
<td>47,929</td>
<td><span class="label" style="background:#E00000"></span> <span class="label" style="background:#082040"></span></td>
<td>1970</td>
<td>25.1</td>
</tr><tr role="row" class="even">
<td id="1156" class="sorting_1">Parma</td>
<td>1156</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ITA.gif" alt="Italy">  ITA</td>
<td>Serie C/B</td>
<td>258K</td>
<td>Professional</td>
<td>28,000</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F8F8F8"></span></td>
<td>1913</td>
<td>27.0</td>
</tr><tr role="row" class="odd">
<td id="1586" class="sorting_1">Partick Thistle</td>
<td>1586</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/SCO.gif" alt="Scotland">  SCO</td>
<td>Ladbrokes Premiership</td>
<td>50K</td>
<td>Professional</td>
<td>10,102</td>
<td><span class="label" style="background:#C82030"></span> <span class="label" style="background:#F0E020"></span></td>
<td>1876</td>
<td>23.7</td>
</tr><tr role="row" class="even">
<td id="1952" class="sorting_1">Partizan</td>
<td>1952</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/SRB.gif" alt="Serbia">  SRB</td>
<td>SuperLeague</td>
<td>948K</td>
<td>Professional</td>
<td>32,710</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
<td>1945</td>
<td>24.2</td>
</tr><tr role="row" class="odd">
<td id="129667" class="sorting_1">PAS Giannina</td>
<td>129667</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/GRE.gif" alt="Greece">  GRE</td>
<td>Superleague</td>
<td>0</td>
<td>Professional</td>
<td>7,534</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
<td>1966</td>
<td>24.5</td>
</tr><tr role="row" class="even">
<td id="130800" class="sorting_1">Pasto</td>
<td>130800</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/COL.gif" alt="Colombia">  COL</td>
<td>First Division</td>
<td>692K</td>
<td>Professional</td>
<td>28,400</td>
<td><span class="label" style="background:#E00000"></span> <span class="label" style="background:#0030A0"></span></td>
<td>1949</td>
<td>26.8</td>
</tr><tr role="row" class="odd">
<td id="5261740" class="sorting_1">Patriotas Boyaca</td>
<td>5261740</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/COL.gif" alt="Colombia">  COL</td>
<td>First Division</td>
<td>538K</td>
<td>Professional</td>
<td>30,000</td>
<td><span class="label" style="background:#E00000"></span> <span class="label" style="background:#E00000"></span></td>
<td>2003</td>
<td>25.4</td>
</tr><tr role="row" class="even">
<td id="248" class="sorting_1">Patro Eisden</td>
<td>248</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/BEL.gif" alt="Belgium">  BEL</td>
<td>First Division</td>
<td>4K</td>
<td>Semi-Professional</td>
<td>4,900</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#503098"></span></td>
<td>1942</td>
<td>21.8</td>
</tr><tr role="row" class="odd">
<td id="3101457" class="sorting_1">Patronato</td>
<td>3101457</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ARG.gif" alt="Argentina">  ARG</td>
<td>Premier Division</td>
<td>14K</td>
<td>Professional</td>
<td>22,000</td>
<td><span class="label" style="background:#E00000"></span> <span class="label" style="background:#000000"></span></td>
<td>1914</td>
<td>28.6</td>
</tr><tr role="row" class="even">
<td id="2090" class="sorting_1">Pau FC</td>
<td>2090</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/FRA.gif" alt="France">  FRA</td>
<td>National</td>
<td>50K</td>
<td>Semi-Professional</td>
<td>14,500</td>
<td><span class="label" style="background:#F8F800"></span> <span class="label" style="background:#501080"></span></td>
<td>1959</td>
<td>25.3</td>
</tr><tr role="row" class="odd">
<td id="331" class="sorting_1">PAY</td>
<td>331</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/BRA.gif" alt="Brazil">  BRA</td>
<td>Second Division</td>
<td>29K</td>
<td>Professional</td>
<td>15,000</td>
<td><span class="label" style="background:#E00000"></span> <span class="label" style="background:#F8F8F8"></span></td>
<td>1914</td>
<td>27.2</td>
</tr><tr role="row" class="even">
<td id="1012" class="sorting_1">PEC Zwolle</td>
<td>1012</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/NED.gif" alt="Holland">  NED</td>
<td>Eredivisie</td>
<td>172K</td>
<td>Professional</td>
<td>13,250</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#284898"></span></td>
<td>1910</td>
<td>23.6</td>
</tr><tr role="row" class="odd">
<td id="729457" class="sorting_1">Pedras Rubras</td>
<td>729457</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/POR.gif" alt="Portugal">  POR</td>
<td>PT Championship</td>
<td>4K</td>
<td>Semi-Professional</td>
<td>5,000</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#0050D0"></span></td>
<td>1941</td>
<td>23.2</td>
</tr><tr role="row" class="even">
<td id="55038918" class="sorting_1">Pedras Salgadas</td>
<td>55038918</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/POR.gif" alt="Portugal">  POR</td>
<td>PT Championship</td>
<td>4K</td>
<td>Semi-Professional</td>
<td>5,450</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#0030A0"></span></td>
<td>1977</td>
<td>23.2</td>
</tr><tr role="row" class="odd">
<td id="1477" class="sorting_1">Penafiel</td>
<td>1477</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/POR.gif" alt="Portugal">  POR</td>
<td>Second League</td>
<td>65K</td>
<td>Professional</td>
<td>5,230</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F00000"></span></td>
<td>1951</td>
<td>25.6</td>
</tr><tr role="row" class="even">
<td id="1922" class="sorting_1">Penarol</td>
<td>1922</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/URU.gif" alt="Uruguay">  URU</td>
<td>First Division</td>
<td>27K</td>
<td>Professional</td>
<td>40,000</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#E8E010"></span></td>
<td>1891</td>
<td>24.4</td>
</tr><tr role="row" class="odd">
<td id="130362" class="sorting_1">Pendikspor</td>
<td>130362</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/TUR.gif" alt="Turkey">  TUR</td>
<td>2. League White</td>
<td>0</td>
<td>Professional</td>
<td>2,500</td>
<td><span class="label" style="background:#E00000"></span> <span class="label" style="background:#F8F8F8"></span></td>
<td>1950</td>
<td>24.0</td>
</tr><tr role="row" class="even">
<td id="308516" class="sorting_1">Pereira</td>
<td>308516</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/COL.gif" alt="Colombia">  COL</td>
<td>Second Division</td>
<td>330K</td>
<td>Professional</td>
<td>30,297</td>
<td><span class="label" style="background:#E00000"></span> <span class="label" style="background:#F8F000"></span></td>
<td>1944</td>
<td>28.0</td>
</tr><tr role="row" class="odd">
<td id="41005061" class="sorting_1">Persatu</td>
<td>41005061</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/IDN.gif" alt="Indonesia">  IDN</td>
<td>Premier Division</td>
<td>6K</td>
<td>Semi-Professional</td>
<td>10,000</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#008030"></span></td>
<td>1975</td>
<td>26.9</td>
</tr><tr role="row" class="even">
<td id="41024320" class="sorting_1">Persbul</td>
<td>41024320</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/IDN.gif" alt="Indonesia">  IDN</td>
<td>Premier Division</td>
<td>25K</td>
<td>Semi-Professional</td>
<td>8,000</td>
<td><span class="label" style="background:#F8F000"></span> <span class="label" style="background:#008030"></span></td>
<td>0</td>
<td>26.4</td>
</tr><tr role="row" class="odd">
<td id="41039130" class="sorting_1">Persebo</td>
<td>41039130</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/IDN.gif" alt="Indonesia">  IDN</td>
<td>Premier Division</td>
<td>14K</td>
<td>Semi-Professional</td>
<td>12,000</td>
<td><span class="label" style="background:#0050D0"></span> <span class="label" style="background:#F8F000"></span></td>
<td>0</td>
<td>27.4</td>
</tr><tr role="row" class="even">
<td id="7748401" class="sorting_1">Persekam</td>
<td>7748401</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/IDN.gif" alt="Indonesia">  IDN</td>
<td>Premier Division</td>
<td>20K</td>
<td>Professional</td>
<td>10,000</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#E8E060"></span></td>
<td>0</td>
<td>24.1</td>
</tr><tr role="row" class="odd">
<td id="41042736" class="sorting_1">Persekap</td>
<td>41042736</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/IDN.gif" alt="Indonesia">  IDN</td>
<td>Premier Division</td>
<td>15K</td>
<td>Semi-Professional</td>
<td>10,000</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#008030"></span></td>
<td>1926</td>
<td>26.2</td>
</tr><tr role="row" class="even">
<td id="7741454" class="sorting_1">Persela</td>
<td>7741454</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/IDN.gif" alt="Indonesia">  IDN</td>
<td>Super League</td>
<td>150K</td>
<td>Professional</td>
<td>25,000</td>
<td><span class="label" style="background:#002060"></span> <span class="label" style="background:#60C0F8"></span></td>
<td>1967</td>
<td>27.9</td>
</tr><tr role="row" class="odd">
<td id="41024319" class="sorting_1">Persepam</td>
<td>41024319</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/IDN.gif" alt="Indonesia">  IDN</td>
<td>Premier Division</td>
<td>112K</td>
<td>Professional</td>
<td>25,000</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#E00000"></span></td>
<td>1970</td>
<td>29.4</td>
</tr><tr role="row" class="even">
<td id="5622859" class="sorting_1">Perserang</td>
<td>5622859</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/IDN.gif" alt="Indonesia">  IDN</td>
<td>Premier Division</td>
<td>7K</td>
<td>Semi-Professional</td>
<td>15,800</td>
<td><span class="label" style="background:#002060"></span> <span class="label" style="background:#60C0F8"></span></td>
<td>1958</td>
<td>26.2</td>
</tr><tr role="row" class="odd">
<td id="41021353" class="sorting_1">Perseru</td>
<td>41021353</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/IDN.gif" alt="Indonesia">  IDN</td>
<td>Super League</td>
<td>137K</td>
<td>Professional</td>
<td>10,000</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F87000"></span></td>
<td>1970</td>
<td>25.5</td>
</tr><tr role="row" class="even">
<td id="5622860" class="sorting_1">Persewangi</td>
<td>5622860</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/IDN.gif" alt="Indonesia">  IDN</td>
<td>Premier Division</td>
<td>10K</td>
<td>Professional</td>
<td>15,000</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#E00000"></span></td>
<td>1931</td>
<td>27.8</td>
</tr><tr role="row" class="odd">
<td id="116140" class="sorting_1">Persib</td>
<td>116140</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/IDN.gif" alt="Indonesia">  IDN</td>
<td>Super League</td>
<td>440K</td>
<td>Professional</td>
<td>40,000</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#0050D0"></span></td>
<td>1933</td>
<td>27.9</td>
</tr><tr role="row" class="even">
<td id="5623382" class="sorting_1">Persiba</td>
<td>5623382</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/IDN.gif" alt="Indonesia">  IDN</td>
<td>Super League</td>
<td>83K</td>
<td>Professional</td>
<td>12,500</td>
<td><span class="label" style="background:#F8F000"></span> <span class="label" style="background:#0050D0"></span></td>
<td>1950</td>
<td>26.4</td>
</tr><tr role="row" class="odd">
<td id="7746532" class="sorting_1">Persiba Bantul</td>
<td>7746532</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/IDN.gif" alt="Indonesia">  IDN</td>
<td>Premier Division</td>
<td>18K</td>
<td>Professional</td>
<td>35,000</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#E00000"></span></td>
<td>1967</td>
<td>26.8</td>
</tr><tr role="row" class="even">
<td id="41024313" class="sorting_1">Persibangga</td>
<td>41024313</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/IDN.gif" alt="Indonesia">  IDN</td>
<td>Premier Division</td>
<td>12K</td>
<td>Semi-Professional</td>
<td>20,000</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#E00000"></span></td>
<td>0</td>
<td>26.4</td>
</tr><tr role="row" class="odd">
<td id="7746529" class="sorting_1">Persibat</td>
<td>7746529</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/IDN.gif" alt="Indonesia">  IDN</td>
<td>Premier Division</td>
<td>5K</td>
<td>Semi-Professional</td>
<td>15,000</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#E00000"></span></td>
<td>1974</td>
<td>29.2</td>
</tr><tr role="row" class="even">
<td id="7742856" class="sorting_1">Persigo</td>
<td>7742856</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/IDN.gif" alt="Indonesia">  IDN</td>
<td>Premier Division</td>
<td>8K</td>
<td>Semi-Professional</td>
<td>10,000</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#B00000"></span></td>
<td>0</td>
<td>26.5</td>
</tr><tr role="row" class="odd">
<td id="41001020" class="sorting_1">Persigubin</td>
<td>41001020</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/IDN.gif" alt="Indonesia">  IDN</td>
<td>Premier Division</td>
<td>4K</td>
<td>Professional</td>
<td>15,000</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#F84000"></span></td>
<td>2003</td>
<td>28.0</td>
</tr><tr role="row" class="even">
<td id="116144" class="sorting_1">Persija</td>
<td>116144</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/IDN.gif" alt="Indonesia">  IDN</td>
<td>Super League</td>
<td>68K</td>
<td>Professional</td>
<td>88,083</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#E00000"></span></td>
<td>1928</td>
<td>25.8</td>
</tr><tr role="row" class="odd">
<td id="5622745" class="sorting_1">Persijap</td>
<td>5622745</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/IDN.gif" alt="Indonesia">  IDN</td>
<td>Premier Division</td>
<td>65K</td>
<td>Professional</td>
<td>25,000</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#E00000"></span></td>
<td>1954</td>
<td>25.9</td>
</tr><tr role="row" class="even">
<td id="5622879" class="sorting_1">Persik</td>
<td>5622879</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/IDN.gif" alt="Indonesia">  IDN</td>
<td>Premier Division</td>
<td>10K</td>
<td>Professional</td>
<td>20,000</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#9020B8"></span></td>
<td>1961</td>
<td>31.4</td>
</tr><tr role="row" class="odd">
<td id="41001013" class="sorting_1">Persika</td>
<td>41001013</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/IDN.gif" alt="Indonesia">  IDN</td>
<td>Premier Division</td>
<td>11K</td>
<td>Semi-Professional</td>
<td>25,000</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#E00000"></span></td>
<td>1951</td>
<td>28.4</td>
</tr><tr role="row" class="even">
<td id="5622748" class="sorting_1">Persikabo</td>
<td>5622748</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/IDN.gif" alt="Indonesia">  IDN</td>
<td>Premier Division</td>
<td>10K</td>
<td>Professional</td>
<td>10,000</td>
<td><span class="label" style="background:#E00000"></span> <span class="label" style="background:#008030"></span></td>
<td>1972</td>
<td>24.3</td>
</tr><tr role="row" class="odd">
<td id="7740896" class="sorting_1">Persikad</td>
<td>7740896</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/IDN.gif" alt="Indonesia">  IDN</td>
<td>Premier Division</td>
<td>9K</td>
<td>Semi-Professional</td>
<td>3,000</td>
<td><span class="label" style="background:#F8F000"></span> <span class="label" style="background:#0050D0"></span></td>
<td>1990</td>
<td>28.0</td>
</tr><tr role="row" class="even">
<td id="41042733" class="sorting_1">Persinga</td>
<td>41042733</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/IDN.gif" alt="Indonesia">  IDN</td>
<td>Premier Division</td>
<td>0</td>
<td>Semi-Professional</td>
<td>10,000</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#E00000"></span></td>
<td>1958</td>
<td>27.6</td>
</tr><tr role="row" class="odd">
<td id="41024316" class="sorting_1">Persip</td>
<td>41024316</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/IDN.gif" alt="Indonesia">  IDN</td>
<td>Premier Division</td>
<td>0</td>
<td>Semi-Professional</td>
<td>25,000</td>
<td><span class="label" style="background:#008030"></span> <span class="label" style="background:#F8F000"></span></td>
<td>1972</td>
<td>27.3</td>
</tr><tr role="row" class="even">
<td id="7746530" class="sorting_1">Persipur</td>
<td>7746530</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/IDN.gif" alt="Indonesia">  IDN</td>
<td>Premier Division</td>
<td>6K</td>
<td>Semi-Professional</td>
<td>15,000</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#E00000"></span></td>
<td>1969</td>
<td>28.7</td>
</tr><tr role="row" class="odd">
<td id="135515" class="sorting_1">Persipura</td>
<td>135515</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/IDN.gif" alt="Indonesia">  IDN</td>
<td>Super League</td>
<td>70K</td>
<td>Professional</td>
<td>50,000</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#E00000"></span></td>
<td>1950</td>
<td>28.5</td>
</tr><tr role="row" class="even">
<td id="135512" class="sorting_1">Persiraja</td>
<td>135512</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/IDN.gif" alt="Indonesia">  IDN</td>
<td>Premier Division</td>
<td>44K</td>
<td>Professional</td>
<td>20,000</td>
<td><span class="label" style="background:#F84000"></span> <span class="label" style="background:#000000"></span></td>
<td>1957</td>
<td>25.0</td>
</tr><tr role="row" class="odd">
<td id="41005039" class="sorting_1">Persiram</td>
<td>41005039</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/IDN.gif" alt="Indonesia">  IDN</td>
<td>Super League</td>
<td>98K</td>
<td>Professional</td>
<td>10,000</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#008030"></span></td>
<td>2004</td>
<td>23.2</td>
</tr><tr role="row" class="even">
<td id="5622862" class="sorting_1">Persis Solo</td>
<td>5622862</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/IDN.gif" alt="Indonesia">  IDN</td>
<td>Premier Division</td>
<td>5K</td>
<td>Professional</td>
<td>35,000</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#E00000"></span></td>
<td>1923</td>
<td>26.6</td>
</tr><tr role="row" class="odd">
<td id="5622746" class="sorting_1">Persita</td>
<td>5622746</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/IDN.gif" alt="Indonesia">  IDN</td>
<td>Premier Division</td>
<td>5K</td>
<td>Professional</td>
<td>13,000</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#9020B8"></span></td>
<td>1953</td>
<td>25.2</td>
</tr><tr role="row" class="even">
<td id="41049344" class="sorting_1">Perssu</td>
<td>41049344</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/IDN.gif" alt="Indonesia">  IDN</td>
<td>Premier Division</td>
<td>0</td>
<td>Semi-Professional</td>
<td>15,000</td>
<td><span class="label" style="background:#F8F000"></span> <span class="label" style="background:#00A030"></span></td>
<td>1977</td>
<td>27.4</td>
</tr><tr role="row" class="odd">
<td id="123001" class="sorting_1">Perth Glory</td>
<td>123001</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/AUS.gif" alt="Australia">  AUS</td>
<td>Hyundai A-League</td>
<td>91K</td>
<td>Professional</td>
<td>20,500</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#500080"></span></td>
<td>1996</td>
<td>25.0</td>
</tr><tr role="row" class="even">
<td id="1157" class="sorting_1">Perugia</td>
<td>1157</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ITA.gif" alt="Italy">  ITA</td>
<td>Serie B</td>
<td>1M</td>
<td>Professional</td>
<td>23,625</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#E00000"></span></td>
<td>1905</td>
<td>25.0</td>
</tr><tr role="row" class="odd">
<td id="1158" class="sorting_1">Pescara</td>
<td>1158</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ITA.gif" alt="Italy">  ITA</td>
<td>Serie A</td>
<td>2M</td>
<td>Professional</td>
<td>20,486</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
<td>1936</td>
<td>25.6</td>
</tr><tr role="row" class="even">
<td id="1588" class="sorting_1">Peterhead</td>
<td>1588</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/SCO.gif" alt="Scotland">  SCO</td>
<td>Ladbrokes League 1</td>
<td>20K</td>
<td>Semi-Professional</td>
<td>3,150</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#304078"></span></td>
<td>1890</td>
<td>26.1</td>
</tr><tr role="row" class="odd">
<td id="72019000" class="sorting_1">Philadelphia</td>
<td>72019000</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/USA.gif" alt="U.S.A.">  USA</td>
<td>MLS</td>
<td>231K</td>
<td>Professional</td>
<td>18,500</td>
<td><span class="label" style="background:#988060"></span> <span class="label" style="background:#383840"></span></td>
<td>2010</td>
<td>25.6</td>
</tr><tr role="row" class="even">
<td id="1159" class="sorting_1">Piacenza</td>
<td>1159</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ITA.gif" alt="Italy">  ITA</td>
<td>Serie C/A</td>
<td>69K</td>
<td>Professional</td>
<td>21,668</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#E00808"></span></td>
<td>1919</td>
<td>24.0</td>
</tr><tr role="row" class="odd">
<td id="714209" class="sorting_1">Piast</td>
<td>714209</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/POL.gif" alt="Poland">  POL</td>
<td>LOTTO Ekstraklasa</td>
<td>201K</td>
<td>Professional</td>
<td>10,037</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
<td>1945</td>
<td>24.5</td>
</tr><tr role="row" class="even">
<td id="729749" class="sorting_1">Pinhalnovense</td>
<td>729749</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/POR.gif" alt="Portugal">  POR</td>
<td>PT Championship</td>
<td>17K</td>
<td>Semi-Professional</td>
<td>2,500</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#0050D0"></span></td>
<td>1948</td>
<td>24.1</td>
</tr><tr role="row" class="odd">
<td id="354" class="sorting_1">Pirin Blagoevgrad</td>
<td>354</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/BUL.gif" alt="Bulgaria">  BUL</td>
<td>First League</td>
<td>9K</td>
<td>Professional</td>
<td>8,250</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#48A068"></span></td>
<td>1934</td>
<td>25.2</td>
</tr><tr role="row" class="even">
<td id="2215" class="sorting_1">Pisa</td>
<td>2215</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ITA.gif" alt="Italy">  ITA</td>
<td>Serie B</td>
<td>258K</td>
<td>Professional</td>
<td>17,000</td>
<td><span class="label" style="background:#0078F8"></span> <span class="label" style="background:#000000"></span></td>
<td>1909</td>
<td>25.7</td>
</tr><tr role="row" class="odd">
<td id="1160" class="sorting_1">Pistoiese</td>
<td>1160</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ITA.gif" alt="Italy">  ITA</td>
<td>Serie C/A</td>
<td>86K</td>
<td>Professional</td>
<td>13,195</td>
<td><span class="label" style="background:#002080"></span> <span class="label" style="background:#F06000"></span></td>
<td>1921</td>
<td>23.2</td>
</tr><tr role="row" class="even">
<td id="510218" class="sorting_1">PK-35 Vantaa</td>
<td>510218</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/FIN.gif" alt="Finland">  FIN</td>
<td>Premier League</td>
<td>861</td>
<td>Semi-Professional</td>
<td>4,600</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#E00000"></span></td>
<td>1935</td>
<td>21.1</td>
</tr><tr role="row" class="odd">
<td id="36000521" class="sorting_1">Platanias</td>
<td>36000521</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/GRE.gif" alt="Greece">  GRE</td>
<td>Superleague</td>
<td>0</td>
<td>Professional</td>
<td>3,700</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
<td>1931</td>
<td>26.0</td>
</tr><tr role="row" class="even">
<td id="5680087" class="sorting_1">Platinum Stars</td>
<td>5680087</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/RSA.gif" alt="South Africa">  RSA</td>
<td>South African Premiership</td>
<td>254K</td>
<td>Professional</td>
<td>44,732</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#000080"></span></td>
<td>1998</td>
<td>27.2</td>
</tr><tr role="row" class="odd">
<td id="5512779" class="sorting_1">Plaza Colonia</td>
<td>5512779</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/URU.gif" alt="Uruguay">  URU</td>
<td>First Division</td>
<td>2K</td>
<td>Professional</td>
<td>6,400</td>
<td><span class="label" style="background:#108830"></span> <span class="label" style="background:#F8F8F8"></span></td>
<td>1917</td>
<td>23.9</td>
</tr><tr role="row" class="even">
<td id="1458" class="sorting_1">Plock</td>
<td>1458</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/POL.gif" alt="Poland">  POL</td>
<td>LOTTO Ekstraklasa</td>
<td>20K</td>
<td>Professional</td>
<td>10,978</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
<td>1947</td>
<td>26.4</td>
</tr><tr role="row" class="odd">
<td id="714200" class="sorting_1">Podbeskidzie</td>
<td>714200</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/POL.gif" alt="Poland">  POL</td>
<td>First Division</td>
<td>20K</td>
<td>Professional</td>
<td>15,292</td>
<td><span class="label" style="background:#E00000"></span> <span class="label" style="background:#F8F8F8"></span></td>
<td>1995</td>
<td>27.1</td>
</tr><tr role="row" class="even">
<td id="7560016" class="sorting_1">Podbrezova</td>
<td>7560016</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/SVK.gif" alt="Slovakia">  SVK</td>
<td>First Division</td>
<td>43K</td>
<td>Professional</td>
<td>4,000</td>
<td><span class="label" style="background:#901000"></span> <span class="label" style="background:#F8F8F8"></span></td>
<td>1920</td>
<td>25.0</td>
</tr><tr role="row" class="odd">
<td id="1459" class="sorting_1">Pogon</td>
<td>1459</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/POL.gif" alt="Poland">  POL</td>
<td>LOTTO Ekstraklasa</td>
<td>100K</td>
<td>Professional</td>
<td>18,027</td>
<td><span class="label" style="background:#880818"></span> <span class="label" style="background:#001040"></span></td>
<td>1948</td>
<td>23.9</td>
</tr><tr role="row" class="even">
<td id="96020194" class="sorting_1">Pogon Siedlce</td>
<td>96020194</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/POL.gif" alt="Poland">  POL</td>
<td>First Division</td>
<td>6K</td>
<td>Professional</td>
<td>2,900</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#0050D0"></span></td>
<td>1944</td>
<td>25.0</td>
</tr><tr role="row" class="odd">
<td id="106818" class="sorting_1">Pohang</td>
<td>106818</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/KOR.gif" alt="South Korea">  KOR</td>
<td>K LEAGUE Classic</td>
<td>2M</td>
<td>Professional</td>
<td>17,443</td>
<td><span class="label" style="background:#D82020"></span> <span class="label" style="background:#000000"></span></td>
<td>1973</td>
<td>25.5</td>
</tr><tr role="row" class="even">
<td id="63011669" class="sorting_1">Pohronie</td>
<td>63011669</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/SVK.gif" alt="Slovakia">  SVK</td>
<td>Second Division</td>
<td>0</td>
<td>Professional</td>
<td>1,200</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#108830"></span></td>
<td>1966</td>
<td>24.8</td>
</tr><tr role="row" class="odd">
<td id="65028128" class="sorting_1">Polokwane City</td>
<td>65028128</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/RSA.gif" alt="South Africa">  RSA</td>
<td>South African Premiership</td>
<td>113K</td>
<td>Professional</td>
<td>45,553</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#C0C0C0"></span></td>
<td>2011</td>
<td>27.8</td>
</tr><tr role="row" class="even">
<td id="71005230" class="sorting_1">Poltava</td>
<td>71005230</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/UKR.gif" alt="Ukraine">  UKR</td>
<td>First League</td>
<td>768</td>
<td>Professional</td>
<td>3,700</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#000000"></span></td>
<td>2007</td>
<td>23.8</td>
</tr><tr role="row" class="odd">
<td id="7500426" class="sorting_1">Pomorie</td>
<td>7500426</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/BUL.gif" alt="Bulgaria">  BUL</td>
<td>Second League</td>
<td>0</td>
<td>Professional</td>
<td>3,300</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#0078F8"></span></td>
<td>1964</td>
<td>24.4</td>
</tr><tr role="row" class="even">
<td id="332" class="sorting_1">PON</td>
<td>332</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/BRA.gif" alt="Brazil">  BRA</td>
<td>First Division</td>
<td>119K</td>
<td>Professional</td>
<td>19,722</td>
<td><span class="label" style="background:#E00000"></span> <span class="label" style="background:#F8F8F8"></span></td>
<td>1900</td>
<td>25.5</td>
</tr><tr role="row" class="odd">
<td id="4212307" class="sorting_1">Ponferrada</td>
<td>4212307</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ESP.gif" alt="Spain">  ESP</td>
<td>Second Division B1</td>
<td>0</td>
<td>Professional</td>
<td>8,400</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#0050D0"></span></td>
<td>1922</td>
<td>25.1</td>
</tr><tr role="row" class="even">
<td id="55027801" class="sorting_1">Ponte da Barca</td>
<td>55027801</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/POR.gif" alt="Portugal">  POR</td>
<td>PT Championship</td>
<td>2K</td>
<td>Semi-Professional</td>
<td>2,500</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
<td>1966</td>
<td>24.0</td>
</tr><tr role="row" class="odd">
<td id="2216" class="sorting_1">Pontedera</td>
<td>2216</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ITA.gif" alt="Italy">  ITA</td>
<td>Serie C/A</td>
<td>129K</td>
<td>Professional</td>
<td>4,014</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#800020"></span></td>
<td>1912</td>
<td>21.2</td>
</tr><tr role="row" class="even">
<td id="1723" class="sorting_1">Pontevedra</td>
<td>1723</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ESP.gif" alt="Spain">  ESP</td>
<td>Second Division B1</td>
<td>0</td>
<td>Professional</td>
<td>12,000</td>
<td><span class="label" style="background:#800040"></span> <span class="label" style="background:#800040"></span></td>
<td>1941</td>
<td>25.6</td>
</tr><tr role="row" class="odd">
<td id="63004281" class="sorting_1">Poprad</td>
<td>63004281</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/SVK.gif" alt="Slovakia">  SVK</td>
<td>Second Division</td>
<td>13K</td>
<td>Professional</td>
<td>5,700</td>
<td><span class="label" style="background:#0050D0"></span> <span class="label" style="background:#F8F8F8"></span></td>
<td>1912</td>
<td>26.5</td>
</tr><tr role="row" class="even">
<td id="333" class="sorting_1">POR</td>
<td>333</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/BRA.gif" alt="Brazil">  BRA</td>
<td>Third Division</td>
<td>119K</td>
<td>Professional</td>
<td>25,470</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#008030"></span></td>
<td>1920</td>
<td>25.9</td>
</tr><tr role="row" class="odd">
<td id="831037" class="sorting_1">Pordenone</td>
<td>831037</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ITA.gif" alt="Italy">  ITA</td>
<td>Serie C/B</td>
<td>129K</td>
<td>Professional</td>
<td>2,582</td>
<td><span class="label" style="background:#08C848"></span> <span class="label" style="background:#000000"></span></td>
<td>1920</td>
<td>25.5</td>
</tr><tr role="row" class="even">
<td id="1370" class="sorting_1">Pors</td>
<td>1370</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/NOR.gif" alt="Norway">  NOR</td>
<td>Second Division Group 4</td>
<td>10K</td>
<td>Semi-Professional</td>
<td>8,000</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#0050D0"></span></td>
<td>1905</td>
<td>22.1</td>
</tr><tr role="row" class="odd">
<td id="1288" class="sorting_1">Portadown</td>
<td>1288</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/NIR.gif" alt="N.Ireland">  NIR</td>
<td>Danske Bank Premier</td>
<td>0</td>
<td>Semi-Professional</td>
<td>3,940</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
<td>1924</td>
<td>28.1</td>
</tr><tr role="row" class="even">
<td id="2438" class="sorting_1">Portimonense</td>
<td>2438</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/POR.gif" alt="Portugal">  POR</td>
<td>Second League</td>
<td>103K</td>
<td>Professional</td>
<td>6,240</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
<td>1914</td>
<td>23.7</td>
</tr><tr role="row" class="odd">
<td id="975489" class="sorting_1">Portland</td>
<td>975489</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/USA.gif" alt="U.S.A.">  USA</td>
<td>MLS</td>
<td>1M</td>
<td>Professional</td>
<td>22,000</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#405840"></span></td>
<td>1975</td>
<td>26.3</td>
</tr><tr role="row" class="even">
<td id="5661060" class="sorting_1">Potros UAEM</td>
<td>5661060</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/MEX.gif" alt="Mexico">  MEX</td>
<td>Promotion League</td>
<td>4K</td>
<td>Professional</td>
<td>35,000</td>
<td><span class="label" style="background:#006830"></span> <span class="label" style="background:#F8F8F8"></span></td>
<td>1990</td>
<td>26.2</td>
</tr><tr role="row" class="odd">
<td id="7743260" class="sorting_1">PPSM</td>
<td>7743260</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/IDN.gif" alt="Indonesia">  IDN</td>
<td>Premier Division</td>
<td>3K</td>
<td>Semi-Professional</td>
<td>5,000</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#F86000"></span></td>
<td>0</td>
<td>28.5</td>
</tr><tr role="row" class="even">
<td id="2487" class="sorting_1">Praiense</td>
<td>2487</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/POR.gif" alt="Portugal">  POR</td>
<td>PT Championship</td>
<td>4K</td>
<td>Semi-Professional</td>
<td>1,500</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#F00000"></span></td>
<td>1947</td>
<td>25.0</td>
</tr><tr role="row" class="odd">
<td id="7442999" class="sorting_1">Prat</td>
<td>7442999</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ESP.gif" alt="Spain">  ESP</td>
<td>Second Division B3</td>
<td>0</td>
<td>Semi-Professional</td>
<td>1,000</td>
<td><span class="label" style="background:#002080"></span> <span class="label" style="background:#F8F8F8"></span></td>
<td>1945</td>
<td>26.5</td>
</tr><tr role="row" class="even">
<td id="1161" class="sorting_1">Prato</td>
<td>1161</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ITA.gif" alt="Italy">  ITA</td>
<td>Serie C/A</td>
<td>78K</td>
<td>Professional</td>
<td>4,084</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#2858B0"></span></td>
<td>1908</td>
<td>23.3</td>
</tr><tr role="row" class="odd">
<td id="1624" class="sorting_1">Presov</td>
<td>1624</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/SVK.gif" alt="Slovakia">  SVK</td>
<td>First Division</td>
<td>22K</td>
<td>Professional</td>
<td>5,410</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#008030"></span></td>
<td>1898</td>
<td>24.7</td>
</tr><tr role="row" class="even">
<td id="116156" class="sorting_1">Pribram</td>
<td>116156</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/CZE.gif" alt="Czech Republic">  CZE</td>
<td>First Division</td>
<td>239K</td>
<td>Professional</td>
<td>9,100</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
<td>1948</td>
<td>25.7</td>
</tr><tr role="row" class="odd">
<td id="43076678" class="sorting_1">Pro Piacenza</td>
<td>43076678</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ITA.gif" alt="Italy">  ITA</td>
<td>Serie C/A</td>
<td>60K</td>
<td>Professional</td>
<td>21,668</td>
<td><span class="label" style="background:#F00000"></span> <span class="label" style="background:#000000"></span></td>
<td>1927</td>
<td>23.7</td>
</tr><tr role="row" class="even">
<td id="2218" class="sorting_1">Pro Vercelli</td>
<td>2218</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ITA.gif" alt="Italy">  ITA</td>
<td>Serie B</td>
<td>517K</td>
<td>Professional</td>
<td>5,500</td>
<td><span class="label" style="background:#D8B028"></span> <span class="label" style="background:#F8F8F8"></span></td>
<td>1892</td>
<td>23.8</td>
</tr><tr role="row" class="odd">
<td id="1923" class="sorting_1">Progreso</td>
<td>1923</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/URU.gif" alt="Uruguay">  URU</td>
<td>Second Division</td>
<td>614</td>
<td>Professional</td>
<td>5,675</td>
<td><span class="label" style="background:#E00000"></span> <span class="label" style="background:#E8E010"></span></td>
<td>1917</td>
<td>26.4</td>
</tr><tr role="row" class="even">
<td id="62011758" class="sorting_1">Proleter</td>
<td>62011758</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/SRB.gif" alt="Serbia">  SRB</td>
<td>First League</td>
<td>52K</td>
<td>Professional</td>
<td>2,000</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#E00000"></span></td>
<td>1951</td>
<td>21.6</td>
</tr><tr role="row" class="odd">
<td id="136158" class="sorting_1">Prostejov</td>
<td>136158</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/CZE.gif" alt="Czech Republic">  CZE</td>
<td>Second Division</td>
<td>80K</td>
<td>Professional</td>
<td>3,500</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#0050D0"></span></td>
<td>1904</td>
<td>23.8</td>
</tr><tr role="row" class="even">
<td id="41021346" class="sorting_1">PS Bangka</td>
<td>41021346</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/IDN.gif" alt="Indonesia">  IDN</td>
<td>Premier Division</td>
<td>5K</td>
<td>Professional</td>
<td>5,000</td>
<td><span class="label" style="background:#F86000"></span> <span class="label" style="background:#60C0F8"></span></td>
<td>1970</td>
<td>26.3</td>
</tr><tr role="row" class="odd">
<td id="7746746" class="sorting_1">PS Bengkulu</td>
<td>7746746</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/IDN.gif" alt="Indonesia">  IDN</td>
<td>Premier Division</td>
<td>30K</td>
<td>Semi-Professional</td>
<td>10,000</td>
<td><span class="label" style="background:#F8D000"></span> <span class="label" style="background:#000000"></span></td>
<td>0</td>
<td>25.7</td>
</tr><tr role="row" class="even">
<td id="129159" class="sorting_1">PS Kemi</td>
<td>129159</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/FIN.gif" alt="Finland">  FIN</td>
<td>Premier League</td>
<td>9K</td>
<td>Semi-Professional</td>
<td>1,200</td>
<td><span class="label" style="background:#0030A0"></span> <span class="label" style="background:#E00000"></span></td>
<td>1999</td>
<td>24.8</td>
</tr><tr role="row" class="odd">
<td id="41005036" class="sorting_1">PSBI</td>
<td>41005036</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/IDN.gif" alt="Indonesia">  IDN</td>
<td>Premier Division</td>
<td>10K</td>
<td>Semi-Professional</td>
<td>5,000</td>
<td><span class="label" style="background:#1030F0"></span> <span class="label" style="background:#E00000"></span></td>
<td>1928</td>
<td>28.2</td>
</tr><tr role="row" class="even">
<td id="41005058" class="sorting_1">PSBK</td>
<td>41005058</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/IDN.gif" alt="Indonesia">  IDN</td>
<td>Premier Division</td>
<td>4K</td>
<td>Semi-Professional</td>
<td>15,000</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#E00000"></span></td>
<td>2006</td>
<td>27.6</td>
</tr><tr role="row" class="odd">
<td id="5622872" class="sorting_1">PSBL Langsa</td>
<td>5622872</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/IDN.gif" alt="Indonesia">  IDN</td>
<td>Premier Division</td>
<td>20K</td>
<td>Semi-Professional</td>
<td>15,000</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#0010D8"></span></td>
<td>0</td>
<td>28.1</td>
</tr><tr role="row" class="even">
<td id="41010810" class="sorting_1">PSCS</td>
<td>41010810</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/IDN.gif" alt="Indonesia">  IDN</td>
<td>Premier Division</td>
<td>25K</td>
<td>Professional</td>
<td>10,000</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#1860F8"></span></td>
<td>0</td>
<td>28.0</td>
</tr><tr role="row" class="odd">
<td id="41042730" class="sorting_1">PSGC</td>
<td>41042730</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/IDN.gif" alt="Indonesia">  IDN</td>
<td>Premier Division</td>
<td>16K</td>
<td>Professional</td>
<td>25,000</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#900090"></span></td>
<td>1990</td>
<td>26.4</td>
</tr><tr role="row" class="even">
<td id="135500" class="sorting_1">PSIM</td>
<td>135500</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/IDN.gif" alt="Indonesia">  IDN</td>
<td>Premier Division</td>
<td>8K</td>
<td>Professional</td>
<td>25,000</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#1860F8"></span></td>
<td>1930</td>
<td>26.3</td>
</tr><tr role="row" class="odd">
<td id="7746766" class="sorting_1">PSIR</td>
<td>7746766</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/IDN.gif" alt="Indonesia">  IDN</td>
<td>Premier Division</td>
<td>5K</td>
<td>Semi-Professional</td>
<td>5,000</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#F87000"></span></td>
<td>0</td>
<td>26.5</td>
</tr><tr role="row" class="even">
<td id="135497" class="sorting_1">PSIS</td>
<td>135497</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/IDN.gif" alt="Indonesia">  IDN</td>
<td>Premier Division</td>
<td>5K</td>
<td>Professional</td>
<td>30,000</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#0050D0"></span></td>
<td>1932</td>
<td>24.0</td>
</tr><tr role="row" class="odd">
<td id="135494" class="sorting_1">PSM</td>
<td>135494</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/IDN.gif" alt="Indonesia">  IDN</td>
<td>Super League</td>
<td>345K</td>
<td>Professional</td>
<td>30,000</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#C80000"></span></td>
<td>1915</td>
<td>26.3</td>
</tr><tr role="row" class="even">
<td id="135491" class="sorting_1">PSMS</td>
<td>135491</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/IDN.gif" alt="Indonesia">  IDN</td>
<td>Premier Division</td>
<td>55K</td>
<td>Professional</td>
<td>25,000</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#008030"></span></td>
<td>1950</td>
<td>23.2</td>
</tr><tr role="row" class="odd">
<td id="5622732" class="sorting_1">PSPS</td>
<td>5622732</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/IDN.gif" alt="Indonesia">  IDN</td>
<td>Premier Division</td>
<td>40K</td>
<td>Professional</td>
<td>25,000</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#008030"></span></td>
<td>1955</td>
<td>25.9</td>
</tr><tr role="row" class="even">
<td id="5622747" class="sorting_1">PSS</td>
<td>5622747</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/IDN.gif" alt="Indonesia">  IDN</td>
<td>Premier Division</td>
<td>10K</td>
<td>Professional</td>
<td>35,000</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#006030"></span></td>
<td>1976</td>
<td>26.2</td>
</tr><tr role="row" class="odd">
<td id="1028" class="sorting_1">PSV</td>
<td>1028</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/NED.gif" alt="Holland">  NED</td>
<td>Eredivisie</td>
<td>3M</td>
<td>Professional</td>
<td>35,000</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#B02038"></span></td>
<td>1913</td>
<td>23.9</td>
</tr><tr role="row" class="even">
<td id="136007" class="sorting_1">Puebla</td>
<td>136007</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/MEX.gif" alt="Mexico">  MEX</td>
<td>First Division</td>
<td>768K</td>
<td>Professional</td>
<td>50,754</td>
<td><span class="label" style="background:#002080"></span> <span class="label" style="background:#F8F8F8"></span></td>
<td>1944</td>
<td>28.9</td>
</tr><tr role="row" class="odd">
<td id="1260" class="sorting_1">Pumas</td>
<td>1260</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/MEX.gif" alt="Mexico">  MEX</td>
<td>First Division</td>
<td>2M</td>
<td>Professional</td>
<td>68,954</td>
<td><span class="label" style="background:#002060"></span> <span class="label" style="background:#D8B028"></span></td>
<td>1954</td>
<td>25.8</td>
</tr><tr role="row" class="even">
<td id="38032696" class="sorting_1">Puskas Akademia</td>
<td>38032696</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/HUN.gif" alt="Hungary">  HUN</td>
<td>Division II</td>
<td>42K</td>
<td>Professional</td>
<td>3,500</td>
<td><span class="label" style="background:#0050D0"></span> <span class="label" style="background:#F8F000"></span></td>
<td>2005</td>
<td>25.9</td>
</tr><tr role="row" class="odd">
<td id="412" class="sorting_1">Qingdao</td>
<td>412</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/CHN.gif" alt="China">  CHN</td>
<td>First Division</td>
<td>115K</td>
<td>Professional</td>
<td>23,000</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#F85000"></span></td>
<td>1993</td>
<td>26.7</td>
</tr><tr role="row" class="even">
<td id="23325084" class="sorting_1">Quanjian</td>
<td>23325084</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/CHN.gif" alt="China">  CHN</td>
<td>First Division</td>
<td>9M</td>
<td>Professional</td>
<td>30,000</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#A0C8F0"></span></td>
<td>2007</td>
<td>27.4</td>
</tr><tr role="row" class="odd">
<td id="1590" class="sorting_1">Queen of Sth</td>
<td>1590</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/SCO.gif" alt="Scotland">  SCO</td>
<td>Ladbrokes Championship</td>
<td>75K</td>
<td>Professional</td>
<td>8,690</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#003098"></span></td>
<td>1919</td>
<td>23.6</td>
</tr><tr role="row" class="even">
<td id="1591" class="sorting_1">Queen's Park</td>
<td>1591</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/SCO.gif" alt="Scotland">  SCO</td>
<td>Ladbrokes League 1</td>
<td>0</td>
<td>Amateur</td>
<td>51,866</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#002060"></span></td>
<td>1867</td>
<td>23.9</td>
</tr><tr role="row" class="odd">
<td id="416240" class="sorting_1">Queens University</td>
<td>416240</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/NIR.gif" alt="N.Ireland">  NIR</td>
<td>NIFL C2</td>
<td>0</td>
<td>Semi-Professional</td>
<td>2,000</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F8F8F8"></span></td>
<td>1908</td>
<td>28.4</td>
</tr><tr role="row" class="even">
<td id="136014" class="sorting_1">Queretaro</td>
<td>136014</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/MEX.gif" alt="Mexico">  MEX</td>
<td>First Division</td>
<td>3M</td>
<td>Professional</td>
<td>38,575</td>
<td><span class="label" style="background:#0030A0"></span> <span class="label" style="background:#000000"></span></td>
<td>1950</td>
<td>25.8</td>
</tr><tr role="row" class="odd">
<td id="50034825" class="sorting_1">Quevilly Rouen Metropole</td>
<td>50034825</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/FRA.gif" alt="France">  FRA</td>
<td>National</td>
<td>43K</td>
<td>Semi-Professional</td>
<td>11,037</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
<td>2015</td>
<td>26.2</td>
</tr><tr role="row" class="even">
<td id="102487" class="sorting_1">Quilmes</td>
<td>102487</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ARG.gif" alt="Argentina">  ARG</td>
<td>Premier Division</td>
<td>0</td>
<td>Professional</td>
<td>30,200</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#F8F8F8"></span></td>
<td>1887</td>
<td>27.0</td>
</tr><tr role="row" class="odd">
<td id="130803" class="sorting_1">Quindio</td>
<td>130803</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/COL.gif" alt="Colombia">  COL</td>
<td>Second Division</td>
<td>254K</td>
<td>Professional</td>
<td>21,900</td>
<td><span class="label" style="background:#00A030"></span> <span class="label" style="background:#00A030"></span></td>
<td>1951</td>
<td>25.9</td>
</tr><tr role="row" class="even">
<td id="2095" class="sorting_1">R. Jaen</td>
<td>2095</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ESP.gif" alt="Spain">  ESP</td>
<td>Second Division B4</td>
<td>24K</td>
<td>Professional</td>
<td>12,569</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#F8F8F8"></span></td>
<td>1922</td>
<td>26.1</td>
</tr><tr role="row" class="odd">
<td id="1736" class="sorting_1">R. Madrid</td>
<td>1736</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ESP.gif" alt="Spain">  ESP</td>
<td>First Division</td>
<td>17M</td>
<td>Professional</td>
<td>80,354</td>
<td><span class="label" style="background:#C0C0C0"></span> <span class="label" style="background:#F8F8F8"></span></td>
<td>1902</td>
<td>25.1</td>
</tr><tr role="row" class="even">
<td id="1737" class="sorting_1">R. Madrid B</td>
<td>1737</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ESP.gif" alt="Spain">  ESP</td>
<td>Second Division B2</td>
<td>0</td>
<td>Professional</td>
<td>8,400</td>
<td><span class="label" style="background:#C0C0C0"></span> <span class="label" style="background:#F8F8F8"></span></td>
<td>1972</td>
<td>19.7</td>
</tr><tr role="row" class="odd">
<td id="4212228" class="sorting_1">R. Majadahonda</td>
<td>4212228</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ESP.gif" alt="Spain">  ESP</td>
<td>Second Division B2</td>
<td>0</td>
<td>Semi-Professional</td>
<td>3,865</td>
<td><span class="label" style="background:#E00000"></span> <span class="label" style="background:#F8F8F8"></span></td>
<td>1976</td>
<td>26.7</td>
</tr><tr role="row" class="even">
<td id="1728" class="sorting_1">R. Santander</td>
<td>1728</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ESP.gif" alt="Spain">  ESP</td>
<td>Second Division B1</td>
<td>68K</td>
<td>Professional</td>
<td>22,124</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F8F8F8"></span></td>
<td>1913</td>
<td>24.3</td>
</tr><tr role="row" class="odd">
<td id="93" class="sorting_1">Racing Club</td>
<td>93</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ARG.gif" alt="Argentina">  ARG</td>
<td>Premier Division</td>
<td>768K</td>
<td>Professional</td>
<td>50,000</td>
<td><span class="label" style="background:#60C0F8"></span> <span class="label" style="background:#F8F8F8"></span></td>
<td>1903</td>
<td>27.1</td>
</tr><tr role="row" class="even">
<td id="871" class="sorting_1">Racing Club de Lens</td>
<td>871</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/FRA.gif" alt="France">  FRA</td>
<td>Domino's Ligue 2</td>
<td>603K</td>
<td>Professional</td>
<td>38,233</td>
<td><span class="label" style="background:#F8D000"></span> <span class="label" style="background:#F00000"></span></td>
<td>1906</td>
<td>25.4</td>
</tr><tr role="row" class="odd">
<td id="130849" class="sorting_1">Racing de Montevideo</td>
<td>130849</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/URU.gif" alt="Uruguay">  URU</td>
<td>First Division</td>
<td>2K</td>
<td>Professional</td>
<td>5,600</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#008030"></span></td>
<td>1919</td>
<td>25.0</td>
</tr><tr role="row" class="even">
<td id="43315316" class="sorting_1">Racing Roma</td>
<td>43315316</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ITA.gif" alt="Italy">  ITA</td>
<td>Serie C/A</td>
<td>52K</td>
<td>Professional</td>
<td>2,500</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F8F000"></span></td>
<td>2016</td>
<td>21.3</td>
</tr><tr role="row" class="odd">
<td id="1953" class="sorting_1">Rad</td>
<td>1953</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/SRB.gif" alt="Serbia">  SRB</td>
<td>SuperLeague</td>
<td>103K</td>
<td>Professional</td>
<td>6,000</td>
<td><span class="label" style="background:#202848"></span> <span class="label" style="background:#60C0F8"></span></td>
<td>1958</td>
<td>27.3</td>
</tr><tr role="row" class="even">
<td id="1954" class="sorting_1">Radnicki</td>
<td>1954</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/SRB.gif" alt="Serbia">  SRB</td>
<td>SuperLeague</td>
<td>172K</td>
<td>Professional</td>
<td>18,151</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#005098"></span></td>
<td>1923</td>
<td>23.9</td>
</tr><tr role="row" class="odd">
<td id="5740714" class="sorting_1">Radnicki (P)</td>
<td>5740714</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/SRB.gif" alt="Serbia">  SRB</td>
<td>First League</td>
<td>34K</td>
<td>Professional</td>
<td>10,816</td>
<td><span class="label" style="background:#0030A0"></span> <span class="label" style="background:#F8F8F8"></span></td>
<td>1945</td>
<td>22.4</td>
</tr><tr role="row" class="even">
<td id="5748006" class="sorting_1">Radnik Surdulica</td>
<td>5748006</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/SRB.gif" alt="Serbia">  SRB</td>
<td>SuperLeague</td>
<td>86K</td>
<td>Professional</td>
<td>3,312</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#0050D0"></span></td>
<td>1926</td>
<td>26.0</td>
</tr><tr role="row" class="odd">
<td id="7581525" class="sorting_1">Radomlje</td>
<td>7581525</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/SVN.gif" alt="Slovenia">  SVN</td>
<td>First League</td>
<td>103K</td>
<td>Professional</td>
<td>2,813</td>
<td><span class="label" style="background:#202848"></span> <span class="label" style="background:#F8F000"></span></td>
<td>1972</td>
<td>22.9</td>
</tr><tr role="row" class="even">
<td id="1592" class="sorting_1">Raith</td>
<td>1592</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/SCO.gif" alt="Scotland">  SCO</td>
<td>Ladbrokes Championship</td>
<td>70K</td>
<td>Professional</td>
<td>9,031</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#202030"></span></td>
<td>1883</td>
<td>24.0</td>
</tr><tr role="row" class="odd">
<td id="7861702" class="sorting_1">Ramat HaSharon</td>
<td>7861702</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ISR.gif" alt="Israel">  ISR</td>
<td>National League</td>
<td>8K</td>
<td>Professional</td>
<td>4,200</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#E00000"></span></td>
<td>1957</td>
<td>23.4</td>
</tr><tr role="row" class="even">
<td id="1924" class="sorting_1">Rampla Juniors</td>
<td>1924</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/URU.gif" alt="Uruguay">  URU</td>
<td>First Division</td>
<td>1K</td>
<td>Professional</td>
<td>6,929</td>
<td><span class="label" style="background:#E00000"></span> <span class="label" style="background:#00A030"></span></td>
<td>1914</td>
<td>24.8</td>
</tr><tr role="row" class="odd">
<td id="930621" class="sorting_1">Randers FC</td>
<td>930621</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/DEN.gif" alt="Denmark">  DEN</td>
<td>Superliga</td>
<td>289K</td>
<td>Professional</td>
<td>11,000</td>
<td><span class="label" style="background:#101050"></span> <span class="label" style="background:#B8D8E8"></span></td>
<td>1898</td>
<td>24.6</td>
</tr><tr role="row" class="even">
<td id="1570" class="sorting_1">Rangers</td>
<td>1570</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/SCO.gif" alt="Scotland">  SCO</td>
<td>Ladbrokes Premiership</td>
<td>1M</td>
<td>Professional</td>
<td>50,817</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#0058B8"></span></td>
<td>1872</td>
<td>24.7</td>
</tr><tr role="row" class="odd">
<td id="130788" class="sorting_1">Rangers (CHI)</td>
<td>130788</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/CHI.gif" alt="Chile">  CHI</td>
<td>First Division B</td>
<td>8K</td>
<td>Professional</td>
<td>8,324</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#E00000"></span></td>
<td>1902</td>
<td>24.3</td>
</tr><tr role="row" class="even">
<td id="1300612" class="sorting_1">Ranheim</td>
<td>1300612</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/NOR.gif" alt="Norway">  NOR</td>
<td>First Division</td>
<td>5K</td>
<td>Semi-Professional</td>
<td>2,850</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#0050D0"></span></td>
<td>1901</td>
<td>24.2</td>
</tr><tr role="row" class="odd">
<td id="1374" class="sorting_1">Raufoss</td>
<td>1374</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/NOR.gif" alt="Norway">  NOR</td>
<td>First Division</td>
<td>18K</td>
<td>Semi-Professional</td>
<td>2,550</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F8E038"></span></td>
<td>1918</td>
<td>25.0</td>
</tr><tr role="row" class="even">
<td id="91013388" class="sorting_1">RBL</td>
<td>91013388</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/GER.gif" alt="Germany">  GER</td>
<td>First Division</td>
<td>13M</td>
<td>Professional</td>
<td>44,345</td>
<td><span class="label" style="background:#E00000"></span> <span class="label" style="background:#F8F8F8"></span></td>
<td>2009</td>
<td>22.9</td>
</tr><tr role="row" class="odd">
<td id="872" class="sorting_1">RC Strasbourg Alsace</td>
<td>872</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/FRA.gif" alt="France">  FRA</td>
<td>Domino's Ligue 2</td>
<td>0</td>
<td>Professional</td>
<td>29,000</td>
<td><span class="label" style="background:#0030A0"></span> <span class="label" style="background:#083078"></span></td>
<td>1906</td>
<td>28.0</td>
</tr><tr role="row" class="even">
<td id="741496" class="sorting_1">Real</td>
<td>741496</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/POR.gif" alt="Portugal">  POR</td>
<td>PT Championship</td>
<td>4K</td>
<td>Semi-Professional</td>
<td>3,500</td>
<td><span class="label" style="background:#002080"></span> <span class="label" style="background:#000000"></span></td>
<td>1951</td>
<td>22.7</td>
</tr><tr role="row" class="odd">
<td id="130801" class="sorting_1">Real Cartagena</td>
<td>130801</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/COL.gif" alt="Colombia">  COL</td>
<td>Second Division</td>
<td>269K</td>
<td>Professional</td>
<td>20,000</td>
<td><span class="label" style="background:#108830"></span> <span class="label" style="background:#F8F000"></span></td>
<td>1971</td>
<td>28.0</td>
</tr><tr role="row" class="even">
<td id="77017082" class="sorting_1">Real Garcilaso</td>
<td>77017082</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/PER.gif" alt="Peru">  PER</td>
<td>First Division</td>
<td>307K</td>
<td>Professional</td>
<td>42,000</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#68C8C8"></span></td>
<td>2009</td>
<td>25.4</td>
</tr><tr role="row" class="odd">
<td id="1733" class="sorting_1">Real Hispalis</td>
<td>1733</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ESP.gif" alt="Spain">  ESP</td>
<td>First Division</td>
<td>3M</td>
<td>Professional</td>
<td>52,500</td>
<td><span class="label" style="background:#009848"></span> <span class="label" style="background:#F8F8F8"></span></td>
<td>1907</td>
<td>25.9</td>
</tr><tr role="row" class="even">
<td id="1746" class="sorting_1">Real Irun</td>
<td>1746</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ESP.gif" alt="Spain">  ESP</td>
<td>Second Division B2</td>
<td>0</td>
<td>Professional</td>
<td>4,600</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#F8F8F8"></span></td>
<td>1915</td>
<td>27.2</td>
</tr><tr role="row" class="odd">
<td id="65026405" class="sorting_1">Real Kings</td>
<td>65026405</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/RSA.gif" alt="South Africa">  RSA</td>
<td>National First Division</td>
<td>150K</td>
<td>Professional</td>
<td>10,000</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#004080"></span></td>
<td>2013</td>
<td>22.7</td>
</tr><tr role="row" class="even">
<td id="980543" class="sorting_1">Real Salt Lake</td>
<td>980543</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/USA.gif" alt="U.S.A.">  USA</td>
<td>MLS</td>
<td>615K</td>
<td>Professional</td>
<td>20,213</td>
<td><span class="label" style="background:#283868"></span> <span class="label" style="background:#C84058"></span></td>
<td>2005</td>
<td>26.2</td>
</tr><tr role="row" class="odd">
<td id="1742" class="sorting_1">Real San Sebastian</td>
<td>1742</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ESP.gif" alt="Spain">  ESP</td>
<td>First Division</td>
<td>861K</td>
<td>Professional</td>
<td>32,000</td>
<td><span class="label" style="background:#2038B8"></span> <span class="label" style="background:#F8F8F8"></span></td>
<td>1909</td>
<td>25.6</td>
</tr><tr role="row" class="even">
<td id="1743" class="sorting_1">Real San Sebastian B</td>
<td>1743</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ESP.gif" alt="Spain">  ESP</td>
<td>Second Division B2</td>
<td>0</td>
<td>Professional</td>
<td>2,500</td>
<td><span class="label" style="background:#2038B8"></span> <span class="label" style="background:#F8F8F8"></span></td>
<td>1951</td>
<td>20.5</td>
</tr><tr role="row" class="odd">
<td id="76003535" class="sorting_1">Real Santander</td>
<td>76003535</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/COL.gif" alt="Colombia">  COL</td>
<td>Second Division</td>
<td>138K</td>
<td>Professional</td>
<td>12,000</td>
<td><span class="label" style="background:#0078F8"></span> <span class="label" style="background:#F8F8F8"></span></td>
<td>2006</td>
<td>23.8</td>
</tr><tr role="row" class="even">
<td id="1955" class="sorting_1">Red Star</td>
<td>1955</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/SRB.gif" alt="Serbia">  SRB</td>
<td>SuperLeague</td>
<td>948K</td>
<td>Professional</td>
<td>55,538</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
<td>1945</td>
<td>25.6</td>
</tr><tr role="row" class="odd">
<td id="873" class="sorting_1">Red Star FC</td>
<td>873</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/FRA.gif" alt="France">  FRA</td>
<td>Domino's Ligue 2</td>
<td>0</td>
<td>Professional</td>
<td>20,000</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#004030"></span></td>
<td>1897</td>
<td>25.0</td>
</tr><tr role="row" class="even">
<td id="6000005" class="sorting_1">Regensburg</td>
<td>6000005</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/GER.gif" alt="Germany">  GER</td>
<td>Third Division</td>
<td>0</td>
<td>Professional</td>
<td>15,115</td>
<td><span class="label" style="background:#E00000"></span> <span class="label" style="background:#F8F8F8"></span></td>
<td>1907</td>
<td>24.8</td>
</tr><tr role="row" class="odd">
<td id="1164" class="sorting_1">Reggiana</td>
<td>1164</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ITA.gif" alt="Italy">  ITA</td>
<td>Serie C/B</td>
<td>215K</td>
<td>Professional</td>
<td>21,584</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#A00000"></span></td>
<td>1919</td>
<td>24.5</td>
</tr><tr role="row" class="even">
<td id="1165" class="sorting_1">Reggina</td>
<td>1165</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ITA.gif" alt="Italy">  ITA</td>
<td>Serie C/C</td>
<td>78K</td>
<td>Professional</td>
<td>27,543</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#800020"></span></td>
<td>1914</td>
<td>22.6</td>
</tr><tr role="row" class="odd">
<td id="334" class="sorting_1">REM</td>
<td>334</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/BRA.gif" alt="Brazil">  BRA</td>
<td>Third Division</td>
<td>24K</td>
<td>Professional</td>
<td>20,000</td>
<td><span class="label" style="background:#F8F000"></span> <span class="label" style="background:#1838F8"></span></td>
<td>1905</td>
<td>29.1</td>
</tr><tr role="row" class="even">
<td id="1413274" class="sorting_1">Renate</td>
<td>1413274</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ITA.gif" alt="Italy">  ITA</td>
<td>Serie C/A</td>
<td>60K</td>
<td>Professional</td>
<td>2,500</td>
<td><span class="label" style="background:#0050D0"></span> <span class="label" style="background:#000000"></span></td>
<td>1947</td>
<td>24.6</td>
</tr><tr role="row" class="odd">
<td id="23172080" class="sorting_1">Renhe</td>
<td>23172080</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/CHN.gif" alt="China">  CHN</td>
<td>First Division</td>
<td>3M</td>
<td>Professional</td>
<td>33,000</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F88000"></span></td>
<td>0</td>
<td>28.5</td>
</tr><tr role="row" class="even">
<td id="115039" class="sorting_1">Rentistas</td>
<td>115039</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/URU.gif" alt="Uruguay">  URU</td>
<td>Second Division</td>
<td>2K</td>
<td>Professional</td>
<td>6,272</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#E00000"></span></td>
<td>1933</td>
<td>24.6</td>
</tr><tr role="row" class="odd">
<td id="4212272" class="sorting_1">Reus</td>
<td>4212272</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ESP.gif" alt="Spain">  ESP</td>
<td>Second Division</td>
<td>16K</td>
<td>Professional</td>
<td>4,350</td>
<td><span class="label" style="background:#E00000"></span> <span class="label" style="background:#000000"></span></td>
<td>1909</td>
<td>27.2</td>
</tr><tr role="row" class="even">
<td id="1945" class="sorting_1">Rhyl</td>
<td>1945</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/WAL.gif" alt="Wales">  WAL</td>
<td>Welsh Premier League</td>
<td>8K</td>
<td>Semi-Professional</td>
<td>3,000</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F8F8F8"></span></td>
<td>1883</td>
<td>23.4</td>
</tr><tr role="row" class="odd">
<td id="441" class="sorting_1">Rijeka</td>
<td>441</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/CRO.gif" alt="Croatia">  CRO</td>
<td>First League</td>
<td>1M</td>
<td>Professional</td>
<td>8,000</td>
<td><span class="label" style="background:#20B0F0"></span> <span class="label" style="background:#F8F8F8"></span></td>
<td>1946</td>
<td>24.1</td>
</tr><tr role="row" class="even">
<td id="1301171" class="sorting_1">Rim. Sobota</td>
<td>1301171</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/SVK.gif" alt="Slovakia">  SVK</td>
<td>Second Division</td>
<td>0</td>
<td>Professional</td>
<td>1,970</td>
<td><span class="label" style="background:#2838A0"></span> <span class="label" style="background:#F8F8F8"></span></td>
<td>1908</td>
<td>23.0</td>
</tr><tr role="row" class="odd">
<td id="2383" class="sorting_1">Rio Ave</td>
<td>2383</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/POR.gif" alt="Portugal">  POR</td>
<td>Premier League</td>
<td>215K</td>
<td>Professional</td>
<td>12,820</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
<td>1939</td>
<td>23.8</td>
</tr><tr role="row" class="even">
<td id="8830831" class="sorting_1">Rionegro Aguilas</td>
<td>8830831</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/COL.gif" alt="Colombia">  COL</td>
<td>First Division</td>
<td>400K</td>
<td>Professional</td>
<td>14,000</td>
<td><span class="label" style="background:#F00000"></span> <span class="label" style="background:#C00008"></span></td>
<td>2008</td>
<td>27.3</td>
</tr><tr role="row" class="odd">
<td id="301245" class="sorting_1">RIV</td>
<td>301245</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/BRA.gif" alt="Brazil">  BRA</td>
<td>Third Division</td>
<td>0</td>
<td>Professional</td>
<td>52,296</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F87000"></span></td>
<td>1946</td>
<td>29.0</td>
</tr><tr role="row" class="even">
<td id="94" class="sorting_1">River</td>
<td>94</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ARG.gif" alt="Argentina">  ARG</td>
<td>Premier Division</td>
<td>371K</td>
<td>Professional</td>
<td>65,645</td>
<td><span class="label" style="background:#C81018"></span> <span class="label" style="background:#F8F8F8"></span></td>
<td>1901</td>
<td>26.2</td>
</tr><tr role="row" class="odd">
<td id="1925" class="sorting_1">River Plate de Montevideo</td>
<td>1925</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/URU.gif" alt="Uruguay">  URU</td>
<td>First Division</td>
<td>3K</td>
<td>Professional</td>
<td>6,224</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#E00000"></span></td>
<td>1932</td>
<td>23.6</td>
</tr><tr role="row" class="even">
<td id="130366" class="sorting_1">Rizespor</td>
<td>130366</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/TUR.gif" alt="Turkey">  TUR</td>
<td>Super League</td>
<td>94K</td>
<td>Professional</td>
<td>15,558</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
<td>1953</td>
<td>24.6</td>
</tr><tr role="row" class="odd">
<td id="1032" class="sorting_1">RKC</td>
<td>1032</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/NED.gif" alt="Holland">  NED</td>
<td>Jupiler League</td>
<td>9K</td>
<td>Professional</td>
<td>7,508</td>
<td><span class="label" style="background:#1848B0"></span> <span class="label" style="background:#F8F000"></span></td>
<td>1940</td>
<td>23.7</td>
</tr><tr role="row" class="even">
<td id="1033" class="sorting_1">Roda JC</td>
<td>1033</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/NED.gif" alt="Holland">  NED</td>
<td>Eredivisie</td>
<td>646K</td>
<td>Professional</td>
<td>19,979</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F8D828"></span></td>
<td>1962</td>
<td>26.0</td>
</tr><tr role="row" class="odd">
<td id="6600032" class="sorting_1">Roeselare</td>
<td>6600032</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/BEL.gif" alt="Belgium">  BEL</td>
<td>Pro League B</td>
<td>0</td>
<td>Professional</td>
<td>8,950</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F8F8F8"></span></td>
<td>1921</td>
<td>25.2</td>
</tr><tr role="row" class="even">
<td id="1100" class="sorting_1">Roma</td>
<td>1100</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ITA.gif" alt="Italy">  ITA</td>
<td>Serie A</td>
<td>9M</td>
<td>Professional</td>
<td>70,634</td>
<td><span class="label" style="background:#581020"></span> <span class="label" style="background:#581020"></span></td>
<td>1927</td>
<td>25.8</td>
</tr><tr role="row" class="odd">
<td id="821" class="sorting_1">RoPS</td>
<td>821</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/FIN.gif" alt="Finland">  FIN</td>
<td>Premier League</td>
<td>9K</td>
<td>Professional</td>
<td>3,203</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#0050D0"></span></td>
<td>1950</td>
<td>24.9</td>
</tr><tr role="row" class="even">
<td id="95" class="sorting_1">Rosario Central</td>
<td>95</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ARG.gif" alt="Argentina">  ARG</td>
<td>Premier Division</td>
<td>192K</td>
<td>Professional</td>
<td>41,654</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
<td>1889</td>
<td>28.2</td>
</tr><tr role="row" class="odd">
<td id="1376" class="sorting_1">Rosenborg</td>
<td>1376</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/NOR.gif" alt="Norway">  NOR</td>
<td>Premier Division</td>
<td>1M</td>
<td>Professional</td>
<td>21,271</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F8F8F8"></span></td>
<td>1917</td>
<td>23.6</td>
</tr><tr role="row" class="even">
<td id="1593" class="sorting_1">Ross County</td>
<td>1593</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/SCO.gif" alt="Scotland">  SCO</td>
<td>Ladbrokes Premiership</td>
<td>150K</td>
<td>Professional</td>
<td>6,541</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
<td>1929</td>
<td>25.2</td>
</tr><tr role="row" class="odd">
<td id="928" class="sorting_1">Rostock</td>
<td>928</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/GER.gif" alt="Germany">  GER</td>
<td>Third Division</td>
<td>0</td>
<td>Professional</td>
<td>29,000</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#2850A0"></span></td>
<td>1965</td>
<td>24.9</td>
</tr><tr role="row" class="even">
<td id="1301104" class="sorting_1">Rostov</td>
<td>1301104</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/RUS.gif" alt="Russia">  RUS</td>
<td>Premier Division</td>
<td>43K</td>
<td>Professional</td>
<td>15,840</td>
<td><span class="label" style="background:#0050D0"></span> <span class="label" style="background:#F8F000"></span></td>
<td>1930</td>
<td>26.3</td>
</tr><tr role="row" class="odd">
<td id="65029901" class="sorting_1">Royal Eagles</td>
<td>65029901</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/RSA.gif" alt="South Africa">  RSA</td>
<td>National First Division</td>
<td>424K</td>
<td>Professional</td>
<td>12,000</td>
<td><span class="label" style="background:#F8F800"></span> <span class="label" style="background:#0068F8"></span></td>
<td>2014</td>
<td>25.8</td>
</tr><tr role="row" class="even">
<td id="130509" class="sorting_1">Rubin</td>
<td>130509</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/RUS.gif" alt="Russia">  RUS</td>
<td>Premier Division</td>
<td>431K</td>
<td>Professional</td>
<td>27,756</td>
<td><span class="label" style="background:#D8B028"></span> <span class="label" style="background:#600000"></span></td>
<td>1958</td>
<td>25.6</td>
</tr><tr role="row" class="odd">
<td id="1462" class="sorting_1">Ruch</td>
<td>1462</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/POL.gif" alt="Poland">  POL</td>
<td>LOTTO Ekstraklasa</td>
<td>20K</td>
<td>Professional</td>
<td>10,000</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#0010D8"></span></td>
<td>1920</td>
<td>25.2</td>
</tr><tr role="row" class="even">
<td id="1638" class="sorting_1">Rudar Velenje</td>
<td>1638</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/SVN.gif" alt="Slovenia">  SVN</td>
<td>First League</td>
<td>103K</td>
<td>Professional</td>
<td>2,341</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#006030"></span></td>
<td>1948</td>
<td>24.7</td>
</tr><tr role="row" class="odd">
<td id="658353" class="sorting_1">Rudes</td>
<td>658353</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/CRO.gif" alt="Croatia">  CRO</td>
<td>Second League</td>
<td>0</td>
<td>Semi-Professional</td>
<td>3,000</td>
<td><span class="label" style="background:#901000"></span> <span class="label" style="background:#002080"></span></td>
<td>1957</td>
<td>22.9</td>
</tr><tr role="row" class="even">
<td id="130873" class="sorting_1">Ruzomberok</td>
<td>130873</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/SVK.gif" alt="Slovakia">  SVK</td>
<td>First Division</td>
<td>129K</td>
<td>Professional</td>
<td>4,876</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F87000"></span></td>
<td>1906</td>
<td>24.6</td>
</tr><tr role="row" class="odd">
<td id="1744" class="sorting_1">S. Gijon</td>
<td>1744</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ESP.gif" alt="Spain">  ESP</td>
<td>First Division</td>
<td>0</td>
<td>Professional</td>
<td>25,885</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
<td>1905</td>
<td>25.0</td>
</tr><tr role="row" class="even">
<td id="1091" class="sorting_1">S.C. Ashdod</td>
<td>1091</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ISR.gif" alt="Israel">  ISR</td>
<td>Premier League</td>
<td>154K</td>
<td>Professional</td>
<td>6,000</td>
<td><span class="label" style="background:#F8F000"></span> <span class="label" style="background:#C80000"></span></td>
<td>1999</td>
<td>23.6</td>
</tr><tr role="row" class="odd">
<td id="1675" class="sorting_1">Sabadell</td>
<td>1675</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ESP.gif" alt="Spain">  ESP</td>
<td>Second Division B3</td>
<td>0</td>
<td>Professional</td>
<td>11,981</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#0860D0"></span></td>
<td>1903</td>
<td>24.4</td>
</tr><tr role="row" class="even">
<td id="2477" class="sorting_1">Sacavenense</td>
<td>2477</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/POR.gif" alt="Portugal">  POR</td>
<td>PT Championship</td>
<td>4K</td>
<td>Semi-Professional</td>
<td>3,100</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#E00000"></span></td>
<td>1910</td>
<td>24.6</td>
</tr><tr role="row" class="odd">
<td id="19005119" class="sorting_1">SAL</td>
<td>19005119</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/BRA.gif" alt="Brazil">  BRA</td>
<td>Third Division</td>
<td>71K</td>
<td>Professional</td>
<td>9,916</td>
<td><span class="label" style="background:#E00000"></span> <span class="label" style="background:#F8F8F8"></span></td>
<td>1972</td>
<td>27.8</td>
</tr><tr role="row" class="even">
<td id="1166" class="sorting_1">Salernitana</td>
<td>1166</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ITA.gif" alt="Italy">  ITA</td>
<td>Serie B</td>
<td>689K</td>
<td>Professional</td>
<td>31,300</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#680028"></span></td>
<td>1919</td>
<td>25.9</td>
</tr><tr role="row" class="odd">
<td id="5512181" class="sorting_1">Salgaocar</td>
<td>5512181</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/IND.gif" alt="India">  IND</td>
<td>National Football League</td>
<td>8K</td>
<td>Professional</td>
<td>19,400</td>
<td><span class="label" style="background:#F8F000"></span> <span class="label" style="background:#108830"></span></td>
<td>1956</td>
<td>23.9</td>
</tr><tr role="row" class="even">
<td id="1486" class="sorting_1">Salgueiros</td>
<td>1486</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/POR.gif" alt="Portugal">  POR</td>
<td>PT Championship</td>
<td>7K</td>
<td>Semi-Professional</td>
<td>16,000</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#E00000"></span></td>
<td>1911</td>
<td>25.9</td>
</tr><tr role="row" class="odd">
<td id="107230" class="sorting_1">SAM</td>
<td>107230</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/BRA.gif" alt="Brazil">  BRA</td>
<td>Second Division</td>
<td>14K</td>
<td>Professional</td>
<td>40,000</td>
<td><span class="label" style="background:#004068"></span> <span class="label" style="background:#F8F8F8"></span></td>
<td>1923</td>
<td>27.8</td>
</tr><tr role="row" class="even">
<td id="700036" class="sorting_1">Sambenedettese</td>
<td>700036</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ITA.gif" alt="Italy">  ITA</td>
<td>Serie C/B</td>
<td>129K</td>
<td>Professional</td>
<td>13,737</td>
<td><span class="label" style="background:#283850"></span> <span class="label" style="background:#C82030"></span></td>
<td>1923</td>
<td>24.3</td>
</tr><tr role="row" class="odd">
<td id="63011666" class="sorting_1">Samorin</td>
<td>63011666</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/SVK.gif" alt="Slovakia">  SVK</td>
<td>Second Division</td>
<td>10K</td>
<td>Professional</td>
<td>2,000</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#0050D0"></span></td>
<td>1914</td>
<td>23.0</td>
</tr><tr role="row" class="even">
<td id="1167" class="sorting_1">Sampdoria</td>
<td>1167</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ITA.gif" alt="Italy">  ITA</td>
<td>Serie A</td>
<td>4M</td>
<td>Professional</td>
<td>36,599</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#2068B0"></span></td>
<td>1946</td>
<td>26.0</td>
</tr><tr role="row" class="odd">
<td id="1878" class="sorting_1">Samsunspor</td>
<td>1878</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/TUR.gif" alt="Turkey">  TUR</td>
<td>1. League</td>
<td>0</td>
<td>Professional</td>
<td>16,679</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#E02818"></span></td>
<td>1965</td>
<td>23.1</td>
</tr><tr role="row" class="even">
<td id="335" class="sorting_1">SAN</td>
<td>335</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/BRA.gif" alt="Brazil">  BRA</td>
<td>First Division</td>
<td>238K</td>
<td>Professional</td>
<td>17,000</td>
<td><span class="label" style="background:#002060"></span> <span class="label" style="background:#002060"></span></td>
<td>1912</td>
<td>25.1</td>
</tr><tr role="row" class="odd">
<td id="67070379" class="sorting_1">San Fernando</td>
<td>67070379</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ESP.gif" alt="Spain">  ESP</td>
<td>Second Division B4</td>
<td>0</td>
<td>Professional</td>
<td>8,000</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#0078F8"></span></td>
<td>2000</td>
<td>26.0</td>
</tr><tr role="row" class="even">
<td id="1910" class="sorting_1">San Jose</td>
<td>1910</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/USA.gif" alt="U.S.A.">  USA</td>
<td>MLS</td>
<td>461K</td>
<td>Professional</td>
<td>18,000</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#2850B0"></span></td>
<td>1974</td>
<td>27.1</td>
</tr><tr role="row" class="odd">
<td id="96" class="sorting_1">San Lorenzo</td>
<td>96</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ARG.gif" alt="Argentina">  ARG</td>
<td>Premier Division</td>
<td>7K</td>
<td>Professional</td>
<td>43,494</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
<td>1908</td>
<td>28.5</td>
</tr><tr role="row" class="even">
<td id="5250433" class="sorting_1">San Luis (CHI)</td>
<td>5250433</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/CHI.gif" alt="Chile">  CHI</td>
<td>First Division</td>
<td>8K</td>
<td>Professional</td>
<td>7,680</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F8F000"></span></td>
<td>1919</td>
<td>24.9</td>
</tr><tr role="row" class="odd">
<td id="130785" class="sorting_1">San Marcos de Arica</td>
<td>130785</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/CHI.gif" alt="Chile">  CHI</td>
<td>First Division B</td>
<td>5K</td>
<td>Professional</td>
<td>9,746</td>
<td><span class="label" style="background:#0000F8"></span> <span class="label" style="background:#002080"></span></td>
<td>1978</td>
<td>24.6</td>
</tr><tr role="row" class="even">
<td id="108546" class="sorting_1">San Martin (SJ)</td>
<td>108546</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ARG.gif" alt="Argentina">  ARG</td>
<td>Premier Division</td>
<td>427K</td>
<td>Professional</td>
<td>19,000</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#008030"></span></td>
<td>1907</td>
<td>27.6</td>
</tr><tr role="row" class="odd">
<td id="102466" class="sorting_1">San Martin (Tucuman)</td>
<td>102466</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ARG.gif" alt="Argentina">  ARG</td>
<td>Second Division</td>
<td>77K</td>
<td>Professional</td>
<td>26,500</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#E00000"></span></td>
<td>1909</td>
<td>27.7</td>
</tr><tr role="row" class="even">
<td id="714230" class="sorting_1">Sandecja</td>
<td>714230</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/POL.gif" alt="Poland">  POL</td>
<td>First Division</td>
<td>0</td>
<td>Professional</td>
<td>4,472</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
<td>1910</td>
<td>25.1</td>
</tr><tr role="row" class="odd">
<td id="1380" class="sorting_1">Sandefjord</td>
<td>1380</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/NOR.gif" alt="Norway">  NOR</td>
<td>First Division</td>
<td>95K</td>
<td>Professional</td>
<td>6,982</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#0040F0"></span></td>
<td>1998</td>
<td>26.0</td>
</tr><tr role="row" class="even">
<td id="6000006" class="sorting_1">Sandhausen</td>
<td>6000006</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/GER.gif" alt="Germany">  GER</td>
<td>Second Division</td>
<td>43K</td>
<td>Professional</td>
<td>15,414</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F8F8F8"></span></td>
<td>1916</td>
<td>25.2</td>
</tr><tr role="row" class="odd">
<td id="109106" class="sorting_1">Sandnes Ulf</td>
<td>109106</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/NOR.gif" alt="Norway">  NOR</td>
<td>First Division</td>
<td>14K</td>
<td>Professional</td>
<td>3,850</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#78C8F8"></span></td>
<td>1911</td>
<td>24.0</td>
</tr><tr role="row" class="even">
<td id="106809" class="sorting_1">Sangju</td>
<td>106809</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/KOR.gif" alt="South Korea">  KOR</td>
<td>K LEAGUE Classic</td>
<td>144K</td>
<td>Professional</td>
<td>15,000</td>
<td><span class="label" style="background:#C80000"></span> <span class="label" style="background:#C80000"></span></td>
<td>2011</td>
<td>26.3</td>
</tr><tr role="row" class="odd">
<td id="130380" class="sorting_1">Sanl?urfaspor</td>
<td>130380</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/TUR.gif" alt="Turkey">  TUR</td>
<td>1. League</td>
<td>65K</td>
<td>Professional</td>
<td>28,695</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
<td>1969</td>
<td>26.0</td>
</tr><tr role="row" class="even">
<td id="4212406" class="sorting_1">Sanluqueno</td>
<td>4212406</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ESP.gif" alt="Spain">  ESP</td>
<td>Second Division B4</td>
<td>0</td>
<td>Semi-Professional</td>
<td>5,000</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#08C848"></span></td>
<td>1948</td>
<td>24.6</td>
</tr><tr role="row" class="odd">
<td id="4200483" class="sorting_1">Sanse</td>
<td>4200483</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ESP.gif" alt="Spain">  ESP</td>
<td>Second Division B2</td>
<td>0</td>
<td>Semi-Professional</td>
<td>2,000</td>
<td><span class="label" style="background:#E00000"></span> <span class="label" style="background:#F8F8F8"></span></td>
<td>1971</td>
<td>25.4</td>
</tr><tr role="row" class="even">
<td id="2448" class="sorting_1">Santa Clara</td>
<td>2448</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/POR.gif" alt="Portugal">  POR</td>
<td>Second League</td>
<td>43K</td>
<td>Professional</td>
<td>12,800</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#E00000"></span></td>
<td>1921</td>
<td>26.2</td>
</tr><tr role="row" class="odd">
<td id="423" class="sorting_1">Santa Fe</td>
<td>423</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/COL.gif" alt="Colombia">  COL</td>
<td>First Division</td>
<td>3M</td>
<td>Professional</td>
<td>40,312</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#E00000"></span></td>
<td>1941</td>
<td>26.5</td>
</tr><tr role="row" class="even">
<td id="14002964" class="sorting_1">Santamarina</td>
<td>14002964</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ARG.gif" alt="Argentina">  ARG</td>
<td>Second Division</td>
<td>19K</td>
<td>Professional</td>
<td>8,000</td>
<td><span class="label" style="background:#F8F000"></span> <span class="label" style="background:#000000"></span></td>
<td>1913</td>
<td>25.5</td>
</tr><tr role="row" class="odd">
<td id="6100016" class="sorting_1">Santarcangelo</td>
<td>6100016</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ITA.gif" alt="Italy">  ITA</td>
<td>Serie C/B</td>
<td>43K</td>
<td>Professional</td>
<td>2,610</td>
<td><span class="label" style="background:#F8F000"></span> <span class="label" style="background:#0050D0"></span></td>
<td>1926</td>
<td>24.0</td>
</tr><tr role="row" class="even">
<td id="130779" class="sorting_1">Santiago Morning</td>
<td>130779</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/CHI.gif" alt="Chile">  CHI</td>
<td>First Division B</td>
<td>6K</td>
<td>Professional</td>
<td>4,000</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F8F8F8"></span></td>
<td>1936</td>
<td>23.6</td>
</tr><tr role="row" class="odd">
<td id="120921" class="sorting_1">Santiago Wanderers</td>
<td>120921</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/CHI.gif" alt="Chile">  CHI</td>
<td>First Division</td>
<td>77K</td>
<td>Professional</td>
<td>23,062</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#006030"></span></td>
<td>1892</td>
<td>22.5</td>
</tr><tr role="row" class="even">
<td id="130766" class="sorting_1">Santos F.C.</td>
<td>130766</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/RSA.gif" alt="South Africa">  RSA</td>
<td>National First Division</td>
<td>254K</td>
<td>Professional</td>
<td>35,000</td>
<td><span class="label" style="background:#E00000"></span> <span class="label" style="background:#F8F000"></span></td>
<td>1982</td>
<td>24.3</td>
</tr><tr role="row" class="odd">
<td id="106029" class="sorting_1">Santos Laguna</td>
<td>106029</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/MEX.gif" alt="Mexico">  MEX</td>
<td>First Division</td>
<td>3M</td>
<td>Professional</td>
<td>30,000</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#58D078"></span></td>
<td>1983</td>
<td>23.9</td>
</tr><tr role="row" class="even">
<td id="84107055" class="sorting_1">Sao Martinho</td>
<td>84107055</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/POR.gif" alt="Portugal">  POR</td>
<td>PT Championship</td>
<td>4K</td>
<td>Semi-Professional</td>
<td>3,000</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
<td>1965</td>
<td>23.3</td>
</tr><tr role="row" class="odd">
<td id="1301254" class="sorting_1">Sar?yer</td>
<td>1301254</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/TUR.gif" alt="Turkey">  TUR</td>
<td>2. League Red</td>
<td>0</td>
<td>Professional</td>
<td>5,000</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#0030A0"></span></td>
<td>1940</td>
<td>25.8</td>
</tr><tr role="row" class="even">
<td id="3101516" class="sorting_1">Sarmiento (Junin)</td>
<td>3101516</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ARG.gif" alt="Argentina">  ARG</td>
<td>Premier Division</td>
<td>36K</td>
<td>Professional</td>
<td>22,000</td>
<td><span class="label" style="background:#00A030"></span> <span class="label" style="background:#00A030"></span></td>
<td>1911</td>
<td>26.1</td>
</tr><tr role="row" class="odd">
<td id="53021327" class="sorting_1">Sarpsborg</td>
<td>53021327</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/NOR.gif" alt="Norway">  NOR</td>
<td>Premier Division</td>
<td>0</td>
<td>Professional</td>
<td>8,700</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#0050D0"></span></td>
<td>2007</td>
<td>24.7</td>
</tr><tr role="row" class="even">
<td id="881" class="sorting_1">SAS Epinal</td>
<td>881</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/FRA.gif" alt="France">  FRA</td>
<td>National</td>
<td>0</td>
<td>Semi-Professional</td>
<td>7,200</td>
<td><span class="label" style="background:#0050D0"></span> <span class="label" style="background:#F8F000"></span></td>
<td>1941</td>
<td>25.6</td>
</tr><tr role="row" class="odd">
<td id="3800256" class="sorting_1">Sassuolo</td>
<td>3800256</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ITA.gif" alt="Italy">  ITA</td>
<td>Serie A</td>
<td>7M</td>
<td>Professional</td>
<td>21,584</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#187858"></span></td>
<td>1920</td>
<td>26.3</td>
</tr><tr role="row" class="even">
<td id="106363" class="sorting_1">SC Austria Lustenau</td>
<td>106363</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/AUT.gif" alt="Austria">  AUT</td>
<td>First Division</td>
<td>0</td>
<td>Professional</td>
<td>8,800</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F8F8F8"></span></td>
<td>1914</td>
<td>23.6</td>
</tr><tr role="row" class="odd">
<td id="876" class="sorting_1">SC Bastia</td>
<td>876</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/FRA.gif" alt="France">  FRA</td>
<td>Ligue 1</td>
<td>0</td>
<td>Professional</td>
<td>17,280</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#0030A0"></span></td>
<td>1905</td>
<td>25.8</td>
</tr><tr role="row" class="even">
<td id="5623136" class="sorting_1">SC Goa</td>
<td>5623136</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/IND.gif" alt="India">  IND</td>
<td>National Football League</td>
<td>17K</td>
<td>Professional</td>
<td>19,400</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#F85000"></span></td>
<td>1999</td>
<td>22.6</td>
</tr><tr role="row" class="odd">
<td id="1036" class="sorting_1">SC Heerenveen</td>
<td>1036</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/NED.gif" alt="Holland">  NED</td>
<td>Eredivisie</td>
<td>3M</td>
<td>Professional</td>
<td>26,100</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#004890"></span></td>
<td>1920</td>
<td>23.3</td>
</tr><tr role="row" class="even">
<td id="16011091" class="sorting_1">SC Wiener Neustadt</td>
<td>16011091</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/AUT.gif" alt="Austria">  AUT</td>
<td>First Division</td>
<td>0</td>
<td>Professional</td>
<td>7,700</td>
<td><span class="label" style="background:#0050D0"></span> <span class="label" style="background:#F8F8F8"></span></td>
<td>2008</td>
<td>22.2</td>
</tr><tr role="row" class="odd">
<td id="137917" class="sorting_1">Schaffhausen</td>
<td>137917</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/SUI.gif" alt="Switzerland">  SUI</td>
<td>Challenge League</td>
<td>40K</td>
<td>Professional</td>
<td>7,300</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F8D000"></span></td>
<td>1896</td>
<td>24.0</td>
</tr><tr role="row" class="even">
<td id="137973" class="sorting_1">SCR Altach</td>
<td>137973</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/AUT.gif" alt="Austria">  AUT</td>
<td>Premier Division</td>
<td>0</td>
<td>Professional</td>
<td>8,500</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F8F8F8"></span></td>
<td>1929</td>
<td>25.7</td>
</tr><tr role="row" class="odd">
<td id="72014006" class="sorting_1">Seattle</td>
<td>72014006</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/USA.gif" alt="U.S.A.">  USA</td>
<td>MLS</td>
<td>768K</td>
<td>Professional</td>
<td>68,000</td>
<td><span class="label" style="background:#385890"></span> <span class="label" style="background:#80A858"></span></td>
<td>2009</td>
<td>27.0</td>
</tr><tr role="row" class="even">
<td id="7840005" class="sorting_1">Selfoss</td>
<td>7840005</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ISL.gif" alt="Iceland">  ISL</td>
<td>First Division</td>
<td>20K</td>
<td>Semi-Professional</td>
<td>2,910</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#800020"></span></td>
<td>1936</td>
<td>23.0</td>
</tr><tr role="row" class="odd">
<td id="135534" class="sorting_1">Semen Padang</td>
<td>135534</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/IDN.gif" alt="Indonesia">  IDN</td>
<td>Super League</td>
<td>242K</td>
<td>Professional</td>
<td>15,000</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#E00000"></span></td>
<td>1980</td>
<td>25.9</td>
</tr><tr role="row" class="even">
<td id="7560706" class="sorting_1">Senica</td>
<td>7560706</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/SVK.gif" alt="Slovakia">  SVK</td>
<td>First Division</td>
<td>65K</td>
<td>Professional</td>
<td>5,070</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#D02028"></span></td>
<td>1921</td>
<td>21.8</td>
</tr><tr role="row" class="odd">
<td id="1384" class="sorting_1">Senja</td>
<td>1384</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/NOR.gif" alt="Norway">  NOR</td>
<td>Second Division Group 1</td>
<td>3K</td>
<td>Semi-Professional</td>
<td>750</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#0050D0"></span></td>
<td>1949</td>
<td>24.1</td>
</tr><tr role="row" class="even">
<td id="200373" class="sorting_1">Seongnam</td>
<td>200373</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/KOR.gif" alt="South Korea">  KOR</td>
<td>K LEAGUE Classic</td>
<td>9M</td>
<td>Professional</td>
<td>16,404</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
<td>1989</td>
<td>26.3</td>
</tr><tr role="row" class="odd">
<td id="130777" class="sorting_1">Seoul</td>
<td>130777</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/KOR.gif" alt="South Korea">  KOR</td>
<td>K LEAGUE Classic</td>
<td>4M</td>
<td>Professional</td>
<td>66,806</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F00808"></span></td>
<td>1983</td>
<td>26.0</td>
</tr><tr role="row" class="even">
<td id="66034891" class="sorting_1">Seoul E-Land</td>
<td>66034891</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/KOR.gif" alt="South Korea">  KOR</td>
<td>K LEAGUE Challenge</td>
<td>170K</td>
<td>Semi-Professional</td>
<td>69,841</td>
<td><span class="label" style="background:#B0C8B0"></span> <span class="label" style="background:#383840"></span></td>
<td>2014</td>
<td>26.9</td>
</tr><tr role="row" class="odd">
<td id="329" class="sorting_1">SEP</td>
<td>329</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/BRA.gif" alt="Brazil">  BRA</td>
<td>First Division</td>
<td>2M</td>
<td>Professional</td>
<td>43,603</td>
<td><span class="label" style="background:#0030A0"></span> <span class="label" style="background:#E00000"></span></td>
<td>1914</td>
<td>26.6</td>
</tr><tr role="row" class="even">
<td id="57110237" class="sorting_1">Sepsi OSK</td>
<td>57110237</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ROU.gif" alt="Romania">  ROU</td>
<td>Liga II</td>
<td>0</td>
<td>Professional</td>
<td>7,000</td>
<td><span class="label" style="background:#C81018"></span> <span class="label" style="background:#F8F8F8"></span></td>
<td>0</td>
<td>25.2</td>
</tr><tr role="row" class="odd">
<td id="116384" class="sorting_1">Septemvri Sofia</td>
<td>116384</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/BUL.gif" alt="Bulgaria">  BUL</td>
<td>Second League</td>
<td>0</td>
<td>Professional</td>
<td>2,000</td>
<td><span class="label" style="background:#5898E0"></span> <span class="label" style="background:#B00000"></span></td>
<td>1944</td>
<td>23.8</td>
</tr><tr role="row" class="even">
<td id="216" class="sorting_1">Seraing Utd</td>
<td>216</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/BEL.gif" alt="Belgium">  BEL</td>
<td>First Division</td>
<td>0</td>
<td>Semi-Professional</td>
<td>1,000</td>
<td><span class="label" style="background:#E00000"></span> <span class="label" style="background:#000000"></span></td>
<td>1922</td>
<td>22.4</td>
</tr><tr role="row" class="odd">
<td id="63023681" class="sorting_1">Sered</td>
<td>63023681</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/SVK.gif" alt="Slovakia">  SVK</td>
<td>Second Division</td>
<td>4K</td>
<td>Professional</td>
<td>3,500</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#E00000"></span></td>
<td>1914</td>
<td>23.2</td>
</tr><tr role="row" class="even">
<td id="725060" class="sorting_1">Sertanense</td>
<td>725060</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/POR.gif" alt="Portugal">  POR</td>
<td>PT Championship</td>
<td>4K</td>
<td>Semi-Professional</td>
<td>1,000</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F8F8F8"></span></td>
<td>1934</td>
<td>22.5</td>
</tr><tr role="row" class="odd">
<td id="1858" class="sorting_1">Servette FC</td>
<td>1858</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/SUI.gif" alt="Switzerland">  SUI</td>
<td>Challenge League</td>
<td>40K</td>
<td>Professional</td>
<td>30,000</td>
<td><span class="label" style="background:#800020"></span> <span class="label" style="background:#800020"></span></td>
<td>1890</td>
<td>24.8</td>
</tr><tr role="row" class="even">
<td id="24014012" class="sorting_1">Sesvete</td>
<td>24014012</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/CRO.gif" alt="Croatia">  CRO</td>
<td>Second League</td>
<td>0</td>
<td>Professional</td>
<td>1,000</td>
<td><span class="label" style="background:#E00000"></span> <span class="label" style="background:#000000"></span></td>
<td>1941</td>
<td>22.6</td>
</tr><tr role="row" class="odd">
<td id="7860920" class="sorting_1">Sha'araim</td>
<td>7860920</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ISR.gif" alt="Israel">  ISR</td>
<td>National League</td>
<td>6K</td>
<td>Professional</td>
<td>3,500</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#0050D0"></span></td>
<td>1950</td>
<td>24.3</td>
</tr><tr role="row" class="even">
<td id="1895" class="sorting_1">Shakhtar</td>
<td>1895</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/UKR.gif" alt="Ukraine">  UKR</td>
<td>Premier League</td>
<td>23M</td>
<td>Professional</td>
<td>33,400</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F87000"></span></td>
<td>1936</td>
<td>27.2</td>
</tr><tr role="row" class="odd">
<td id="1300125" class="sorting_1">Shakhter Soligorsk</td>
<td>1300125</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/BLR.gif" alt="Belarus">  BLR</td>
<td>Highest League</td>
<td>19K</td>
<td>Professional</td>
<td>4,200</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F8F000"></span></td>
<td>1963</td>
<td>27.2</td>
</tr><tr role="row" class="even">
<td id="596" class="sorting_1">Shamrock Rovers</td>
<td>596</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/IRL.gif" alt="Ireland">  IRL</td>
<td>Premier Division</td>
<td>0</td>
<td>Professional</td>
<td>6,000</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#008030"></span></td>
<td>1901</td>
<td>22.9</td>
</tr><tr role="row" class="odd">
<td id="116403" class="sorting_1">Shandong</td>
<td>116403</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/CHN.gif" alt="China">  CHN</td>
<td>Super League</td>
<td>12M</td>
<td>Professional</td>
<td>56,808</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#F87000"></span></td>
<td>1998</td>
<td>27.0</td>
</tr><tr role="row" class="even">
<td id="23292170" class="sorting_1">Shanggang</td>
<td>23292170</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/CHN.gif" alt="China">  CHN</td>
<td>Super League</td>
<td>9M</td>
<td>Professional</td>
<td>56,842</td>
<td><span class="label" style="background:#901000"></span> <span class="label" style="background:#E00000"></span></td>
<td>2005</td>
<td>25.5</td>
</tr><tr role="row" class="odd">
<td id="597" class="sorting_1">Shelbourne</td>
<td>597</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/IRL.gif" alt="Ireland">  IRL</td>
<td>First Division</td>
<td>0</td>
<td>Semi-Professional</td>
<td>9,680</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#E00000"></span></td>
<td>1895</td>
<td>23.2</td>
</tr><tr role="row" class="even">
<td id="414" class="sorting_1">Shenhua</td>
<td>414</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/CHN.gif" alt="China">  CHN</td>
<td>Super League</td>
<td>691K</td>
<td>Professional</td>
<td>33,060</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#0050D0"></span></td>
<td>1993</td>
<td>28.1</td>
</tr><tr role="row" class="odd">
<td id="23176734" class="sorting_1">Shenxin</td>
<td>23176734</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/CHN.gif" alt="China">  CHN</td>
<td>First Division</td>
<td>346K</td>
<td>Professional</td>
<td>30,000</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#F8F038"></span></td>
<td>2004</td>
<td>25.1</td>
</tr><tr role="row" class="even">
<td id="115942" class="sorting_1">Shenzhen</td>
<td>115942</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/CHN.gif" alt="China">  CHN</td>
<td>First Division</td>
<td>346K</td>
<td>Professional</td>
<td>33,000</td>
<td><span class="label" style="background:#C0C8C8"></span> <span class="label" style="background:#2070B0"></span></td>
<td>1994</td>
<td>27.8</td>
</tr><tr role="row" class="odd">
<td id="130510" class="sorting_1">Shinnik</td>
<td>130510</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/RUS.gif" alt="Russia">  RUS</td>
<td>First Division</td>
<td>0</td>
<td>Professional</td>
<td>22,984</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#1068F8"></span></td>
<td>1957</td>
<td>25.2</td>
</tr><tr role="row" class="even">
<td id="40023922" class="sorting_1">Shivajians</td>
<td>40023922</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/IND.gif" alt="India">  IND</td>
<td>National Football League</td>
<td>17K</td>
<td>Professional</td>
<td>22,000</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#F00000"></span></td>
<td>1987</td>
<td>22.8</td>
</tr><tr role="row" class="odd">
<td id="442" class="sorting_1">Sibenik</td>
<td>442</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/CRO.gif" alt="Croatia">  CRO</td>
<td>Second League</td>
<td>0</td>
<td>Professional</td>
<td>5,500</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F88000"></span></td>
<td>1932</td>
<td>23.1</td>
</tr><tr role="row" class="even">
<td id="58001661" class="sorting_1">Sibir</td>
<td>58001661</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/RUS.gif" alt="Russia">  RUS</td>
<td>First Division</td>
<td>0</td>
<td>Professional</td>
<td>12,500</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
<td>1934</td>
<td>25.8</td>
</tr><tr role="row" class="odd">
<td id="41001018" class="sorting_1">Sidoarjo United</td>
<td>41001018</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/IDN.gif" alt="Indonesia">  IDN</td>
<td>Premier Division</td>
<td>8K</td>
<td>Semi-Professional</td>
<td>35,000</td>
<td><span class="label" style="background:#60C0F8"></span> <span class="label" style="background:#0030A0"></span></td>
<td>1973</td>
<td>30.8</td>
</tr><tr role="row" class="even">
<td id="1170" class="sorting_1">Siena</td>
<td>1170</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ITA.gif" alt="Italy">  ITA</td>
<td>Serie C/A</td>
<td>129K</td>
<td>Professional</td>
<td>15,373</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#000000"></span></td>
<td>1904</td>
<td>24.5</td>
</tr><tr role="row" class="odd">
<td id="473" class="sorting_1">Sigma Olomouc</td>
<td>473</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/CZE.gif" alt="Czech Republic">  CZE</td>
<td>Second Division</td>
<td>319K</td>
<td>Professional</td>
<td>12,541</td>
<td><span class="label" style="background:#0050A0"></span> <span class="label" style="background:#0050D0"></span></td>
<td>1919</td>
<td>24.2</td>
</tr><tr role="row" class="even">
<td id="551" class="sorting_1">Silkeborg IF</td>
<td>551</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/DEN.gif" alt="Denmark">  DEN</td>
<td>Superliga</td>
<td>116K</td>
<td>Professional</td>
<td>10,000</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#E00000"></span></td>
<td>1917</td>
<td>23.6</td>
</tr><tr role="row" class="odd">
<td id="5751604" class="sorting_1">Sindjelic</td>
<td>5751604</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/SRB.gif" alt="Serbia">  SRB</td>
<td>First League</td>
<td>52K</td>
<td>Professional</td>
<td>3,000</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#E00000"></span></td>
<td>1937</td>
<td>22.4</td>
</tr><tr role="row" class="even">
<td id="2478" class="sorting_1">Sintrense</td>
<td>2478</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/POR.gif" alt="Portugal">  POR</td>
<td>PT Championship</td>
<td>4K</td>
<td>Semi-Professional</td>
<td>2,800</td>
<td><span class="label" style="background:#0030A0"></span> <span class="label" style="background:#F8F000"></span></td>
<td>1911</td>
<td>25.4</td>
</tr><tr role="row" class="odd">
<td id="7521258" class="sorting_1">Siofok</td>
<td>7521258</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/HUN.gif" alt="Hungary">  HUN</td>
<td>Division II</td>
<td>0</td>
<td>Professional</td>
<td>12,000</td>
<td><span class="label" style="background:#F8F000"></span> <span class="label" style="background:#F8F000"></span></td>
<td>1921</td>
<td>24.6</td>
</tr><tr role="row" class="even">
<td id="1852" class="sorting_1">Sion</td>
<td>1852</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/SUI.gif" alt="Switzerland">  SUI</td>
<td>Super League</td>
<td>950K</td>
<td>Professional</td>
<td>20,200</td>
<td><span class="label" style="background:#E00000"></span> <span class="label" style="background:#F8F8F8"></span></td>
<td>1909</td>
<td>25.2</td>
</tr><tr role="row" class="odd">
<td id="3804379" class="sorting_1">Siracusa</td>
<td>3804379</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ITA.gif" alt="Italy">  ITA</td>
<td>Serie C/C</td>
<td>26K</td>
<td>Professional</td>
<td>6,870</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#0050D0"></span></td>
<td>1924</td>
<td>25.5</td>
</tr><tr role="row" class="even">
<td id="70054556" class="sorting_1">Sivas Bld.</td>
<td>70054556</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/TUR.gif" alt="Turkey">  TUR</td>
<td>2. League White</td>
<td>0</td>
<td>Professional</td>
<td>500</td>
<td><span class="label" style="background:#E00000"></span> <span class="label" style="background:#F8F8F8"></span></td>
<td>1949</td>
<td>23.7</td>
</tr><tr role="row" class="odd">
<td id="130382" class="sorting_1">Sivasspor</td>
<td>130382</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/TUR.gif" alt="Turkey">  TUR</td>
<td>1. League</td>
<td>57K</td>
<td>Professional</td>
<td>27,532</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
<td>1967</td>
<td>27.7</td>
</tr><tr role="row" class="even">
<td id="33007394" class="sorting_1">SJK</td>
<td>33007394</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/FIN.gif" alt="Finland">  FIN</td>
<td>Premier League</td>
<td>65K</td>
<td>Professional</td>
<td>4,798</td>
<td><span class="label" style="background:#D8B028"></span> <span class="label" style="background:#000000"></span></td>
<td>2007</td>
<td>25.4</td>
</tr><tr role="row" class="odd">
<td id="155" class="sorting_1">SK Rapid Wien</td>
<td>155</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/AUT.gif" alt="Austria">  AUT</td>
<td>Premier Division</td>
<td>3M</td>
<td>Professional</td>
<td>28,385</td>
<td><span class="label" style="background:#006030"></span> <span class="label" style="background:#006850"></span></td>
<td>1899</td>
<td>24.4</td>
</tr><tr role="row" class="even">
<td id="156" class="sorting_1">SK Sturm Graz</td>
<td>156</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/AUT.gif" alt="Austria">  AUT</td>
<td>Premier Division</td>
<td>0</td>
<td>Professional</td>
<td>16,364</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#000000"></span></td>
<td>1909</td>
<td>25.4</td>
</tr><tr role="row" class="odd">
<td id="130561" class="sorting_1">SKA Khabarovsk</td>
<td>130561</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/RUS.gif" alt="Russia">  RUS</td>
<td>First Division</td>
<td>0</td>
<td>Professional</td>
<td>15,200</td>
<td><span class="label" style="background:#002060"></span> <span class="label" style="background:#C80000"></span></td>
<td>1946</td>
<td>27.3</td>
</tr><tr role="row" class="even">
<td id="71028330" class="sorting_1">Skala Stryi</td>
<td>71028330</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/UKR.gif" alt="Ukraine">  UKR</td>
<td>First League</td>
<td>0</td>
<td>Professional</td>
<td>8,000</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#1068F8"></span></td>
<td>2004</td>
<td>22.8</td>
</tr><tr role="row" class="odd">
<td id="63025380" class="sorting_1">Skalica</td>
<td>63025380</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/SVK.gif" alt="Slovakia">  SVK</td>
<td>Second Division</td>
<td>17K</td>
<td>Professional</td>
<td>3,000</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#108830"></span></td>
<td>1920</td>
<td>26.5</td>
</tr><tr role="row" class="even">
<td id="1387" class="sorting_1">Skeid</td>
<td>1387</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/NOR.gif" alt="Norway">  NOR</td>
<td>Second Division Group 1</td>
<td>7K</td>
<td>Semi-Professional</td>
<td>15,500</td>
<td><span class="label" style="background:#0030A0"></span> <span class="label" style="background:#E00000"></span></td>
<td>1915</td>
<td>22.7</td>
</tr><tr role="row" class="odd">
<td id="552" class="sorting_1">Skive IK</td>
<td>552</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/DEN.gif" alt="Denmark">  DEN</td>
<td>First Division</td>
<td>17K</td>
<td>Semi-Professional</td>
<td>5,500</td>
<td><span class="label" style="background:#0050D0"></span> <span class="label" style="background:#F8F000"></span></td>
<td>1901</td>
<td>22.1</td>
</tr><tr role="row" class="even">
<td id="160" class="sorting_1">SKN St. Polten</td>
<td>160</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/AUT.gif" alt="Austria">  AUT</td>
<td>Premier Division</td>
<td>0</td>
<td>Professional</td>
<td>8,000</td>
<td><span class="label" style="background:#002060"></span> <span class="label" style="background:#002060"></span></td>
<td>2000</td>
<td>26.7</td>
</tr><tr role="row" class="odd">
<td id="1300885" class="sorting_1">Slask</td>
<td>1300885</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/POL.gif" alt="Poland">  POL</td>
<td>LOTTO Ekstraklasa</td>
<td>80K</td>
<td>Professional</td>
<td>44,308</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
<td>1947</td>
<td>26.4</td>
</tr><tr role="row" class="even">
<td id="106749" class="sorting_1">Slaven Belupo</td>
<td>106749</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/CRO.gif" alt="Croatia">  CRO</td>
<td>First League</td>
<td>43K</td>
<td>Professional</td>
<td>3,134</td>
<td><span class="label" style="background:#002060"></span> <span class="label" style="background:#0030A0"></span></td>
<td>1907</td>
<td>24.2</td>
</tr><tr role="row" class="odd">
<td id="130879" class="sorting_1">Slavia Mozyr</td>
<td>130879</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/BLR.gif" alt="Belarus">  BLR</td>
<td>Highest League</td>
<td>4K</td>
<td>Professional</td>
<td>5,253</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#E00000"></span></td>
<td>1987</td>
<td>26.1</td>
</tr><tr role="row" class="even">
<td id="474" class="sorting_1">Slavia Prague</td>
<td>474</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/CZE.gif" alt="Czech Republic">  CZE</td>
<td>First Division</td>
<td>2M</td>
<td>Professional</td>
<td>20,800</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#E00000"></span></td>
<td>1892</td>
<td>25.1</td>
</tr><tr role="row" class="odd">
<td id="356" class="sorting_1">Slavia Sofia</td>
<td>356</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/BUL.gif" alt="Bulgaria">  BUL</td>
<td>First League</td>
<td>40K</td>
<td>Professional</td>
<td>43,208</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
<td>1913</td>
<td>24.4</td>
</tr><tr role="row" class="even">
<td id="1487" class="sorting_1">SLB</td>
<td>1487</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/POR.gif" alt="Portugal">  POR</td>
<td>Premier League</td>
<td>14M</td>
<td>Professional</td>
<td>64,642</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#E00000"></span></td>
<td>1904</td>
<td>23.8</td>
</tr><tr role="row" class="odd">
<td id="55000306" class="sorting_1">SLB B</td>
<td>55000306</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/POR.gif" alt="Portugal">  POR</td>
<td>Second League</td>
<td>26K</td>
<td>Professional</td>
<td>2,720</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#E00000"></span></td>
<td>0</td>
<td>19.9</td>
</tr><tr role="row" class="even">
<td id="598" class="sorting_1">Sligo Rovers</td>
<td>598</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/IRL.gif" alt="Ireland">  IRL</td>
<td>Premier Division</td>
<td>0</td>
<td>Professional</td>
<td>4,500</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#E00000"></span></td>
<td>1928</td>
<td>22.7</td>
</tr><tr role="row" class="odd">
<td id="62063172" class="sorting_1">Sloboda</td>
<td>62063172</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/SRB.gif" alt="Serbia">  SRB</td>
<td>First League</td>
<td>9K</td>
<td>Professional</td>
<td>9,800</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#C80000"></span></td>
<td>1925</td>
<td>23.6</td>
</tr><tr role="row" class="even">
<td id="17026902" class="sorting_1">Slonim</td>
<td>17026902</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/BLR.gif" alt="Belarus">  BLR</td>
<td>First League</td>
<td>0</td>
<td>Professional</td>
<td>2,220</td>
<td><span class="label" style="background:#0050D0"></span> <span class="label" style="background:#F8F000"></span></td>
<td>2012</td>
<td>25.9</td>
</tr><tr role="row" class="odd">
<td id="131289" class="sorting_1">Slovacko</td>
<td>131289</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/CZE.gif" alt="Czech Republic">  CZE</td>
<td>First Division</td>
<td>239K</td>
<td>Professional</td>
<td>8,000</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#F8F8F8"></span></td>
<td>2000</td>
<td>24.9</td>
</tr><tr role="row" class="even">
<td id="1622" class="sorting_1">Slovan Bratislava</td>
<td>1622</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/SVK.gif" alt="Slovakia">  SVK</td>
<td>First Division</td>
<td>431K</td>
<td>Professional</td>
<td>11,591</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#60C0F8"></span></td>
<td>1919</td>
<td>25.3</td>
</tr><tr role="row" class="odd">
<td id="475" class="sorting_1">Slovan Liberec</td>
<td>475</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/CZE.gif" alt="Czech Republic">  CZE</td>
<td>First Division</td>
<td>559K</td>
<td>Professional</td>
<td>9,900</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#0050D0"></span></td>
<td>1958</td>
<td>24.1</td>
</tr><tr role="row" class="even">
<td id="17004083" class="sorting_1">Slutsk</td>
<td>17004083</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/BLR.gif" alt="Belarus">  BLR</td>
<td>Highest League</td>
<td>8K</td>
<td>Professional</td>
<td>1,896</td>
<td><span class="label" style="background:#0030A0"></span> <span class="label" style="background:#002060"></span></td>
<td>1998</td>
<td>26.5</td>
</tr><tr role="row" class="odd">
<td id="17012001" class="sorting_1">Smolevichi</td>
<td>17012001</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/BLR.gif" alt="Belarus">  BLR</td>
<td>First League</td>
<td>0</td>
<td>Professional</td>
<td>1,600</td>
<td><span class="label" style="background:#0078F8"></span> <span class="label" style="background:#F8F000"></span></td>
<td>2009</td>
<td>26.3</td>
</tr><tr role="row" class="even">
<td id="485674" class="sorting_1">Smorgon</td>
<td>485674</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/BLR.gif" alt="Belarus">  BLR</td>
<td>First League</td>
<td>0</td>
<td>Professional</td>
<td>3,200</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#B00000"></span></td>
<td>1978</td>
<td>27.5</td>
</tr><tr role="row" class="odd">
<td id="54007042" class="sorting_1">SMS Lodz</td>
<td>54007042</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/POL.gif" alt="Poland">  POL</td>
<td>100000232</td>
<td>0</td>
<td>Semi-Professional</td>
<td>2,000</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#0050D0"></span></td>
<td>1999</td>
<td>20.0</td>
</tr><tr role="row" class="even">
<td id="1392" class="sorting_1">Sogndal</td>
<td>1392</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/NOR.gif" alt="Norway">  NOR</td>
<td>Premier Division</td>
<td>47K</td>
<td>Professional</td>
<td>5,526</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F8F8F8"></span></td>
<td>1926</td>
<td>24.2</td>
</tr><tr role="row" class="odd">
<td id="57036012" class="sorting_1">Soimii Pancota</td>
<td>57036012</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ROU.gif" alt="Romania">  ROU</td>
<td>Liga II</td>
<td>0</td>
<td>Professional</td>
<td>1,500</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F86820"></span></td>
<td>1923</td>
<td>22.6</td>
</tr><tr role="row" class="even">
<td id="130511" class="sorting_1">Sokol</td>
<td>130511</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/RUS.gif" alt="Russia">  RUS</td>
<td>First Division</td>
<td>0</td>
<td>Professional</td>
<td>15,000</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
<td>1946</td>
<td>25.5</td>
</tr><tr role="row" class="odd">
<td id="5652959" class="sorting_1">Sokolov</td>
<td>5652959</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/CZE.gif" alt="Czech Republic">  CZE</td>
<td>Second Division</td>
<td>160K</td>
<td>Professional</td>
<td>5,000</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F8F000"></span></td>
<td>1948</td>
<td>24.2</td>
</tr><tr role="row" class="even">
<td id="1393" class="sorting_1">Sola</td>
<td>1393</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/NOR.gif" alt="Norway">  NOR</td>
<td>Second Division Group 3</td>
<td>1K</td>
<td>Semi-Professional</td>
<td>2,500</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F8F880"></span></td>
<td>1934</td>
<td>26.2</td>
</tr><tr role="row" class="odd">
<td id="126423" class="sorting_1">Solin</td>
<td>126423</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/CRO.gif" alt="Croatia">  CRO</td>
<td>Second League</td>
<td>0</td>
<td>Semi-Professional</td>
<td>5,000</td>
<td><span class="label" style="background:#D0C090"></span> <span class="label" style="background:#0030A0"></span></td>
<td>1919</td>
<td>22.7</td>
</tr><tr role="row" class="even">
<td id="926867" class="sorting_1">SonderjyskE</td>
<td>926867</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/DEN.gif" alt="Denmark">  DEN</td>
<td>Superliga</td>
<td>405K</td>
<td>Professional</td>
<td>10,000</td>
<td><span class="label" style="background:#C0D0E0"></span> <span class="label" style="background:#D0E0E8"></span></td>
<td>1906</td>
<td>25.2</td>
</tr><tr role="row" class="odd">
<td id="7521334" class="sorting_1">Soproni VSE</td>
<td>7521334</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/HUN.gif" alt="Hungary">  HUN</td>
<td>Division II</td>
<td>6K</td>
<td>Professional</td>
<td>5,800</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#700070"></span></td>
<td>1921</td>
<td>24.7</td>
</tr><tr role="row" class="even">
<td id="7521283" class="sorting_1">Soroksar</td>
<td>7521283</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/HUN.gif" alt="Hungary">  HUN</td>
<td>Division II</td>
<td>9K</td>
<td>Professional</td>
<td>5,000</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F8F000"></span></td>
<td>1999</td>
<td>26.2</td>
</tr><tr role="row" class="odd">
<td id="55027254" class="sorting_1">Sousense</td>
<td>55027254</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/POR.gif" alt="Portugal">  POR</td>
<td>PT Championship</td>
<td>4K</td>
<td>Semi-Professional</td>
<td>2,000</td>
<td><span class="label" style="background:#E00000"></span> <span class="label" style="background:#F8F000"></span></td>
<td>1937</td>
<td>24.1</td>
</tr><tr role="row" class="even">
<td id="7508658" class="sorting_1">Sozopol</td>
<td>7508658</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/BUL.gif" alt="Bulgaria">  BUL</td>
<td>Second League</td>
<td>9K</td>
<td>Professional</td>
<td>3,000</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#B0E0F8"></span></td>
<td>2008</td>
<td>25.6</td>
</tr><tr role="row" class="odd">
<td id="2220" class="sorting_1">Spal</td>
<td>2220</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ITA.gif" alt="Italy">  ITA</td>
<td>Serie B</td>
<td>431K</td>
<td>Professional</td>
<td>19,000</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
<td>1907</td>
<td>25.5</td>
</tr><tr role="row" class="even">
<td id="476" class="sorting_1">Sparta Prague</td>
<td>476</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/CZE.gif" alt="Czech Republic">  CZE</td>
<td>First Division</td>
<td>2M</td>
<td>Professional</td>
<td>18,994</td>
<td><span class="label" style="background:#901000"></span> <span class="label" style="background:#B00000"></span></td>
<td>1893</td>
<td>26.1</td>
</tr><tr role="row" class="odd">
<td id="1039" class="sorting_1">Sparta Rotterdam</td>
<td>1039</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/NED.gif" alt="Holland">  NED</td>
<td>Eredivisie</td>
<td>83K</td>
<td>Professional</td>
<td>11,026</td>
<td><span class="label" style="background:#E81830"></span> <span class="label" style="background:#F8F8F8"></span></td>
<td>1888</td>
<td>23.9</td>
</tr><tr role="row" class="even">
<td id="62031842" class="sorting_1">Spartak</td>
<td>62031842</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/SRB.gif" alt="Serbia">  SRB</td>
<td>SuperLeague</td>
<td>146K</td>
<td>Professional</td>
<td>14,458</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#60C0F8"></span></td>
<td>1945</td>
<td>24.1</td>
</tr><tr role="row" class="odd">
<td id="58098003" class="sorting_1">Spartak M-2</td>
<td>58098003</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/RUS.gif" alt="Russia">  RUS</td>
<td>First Division</td>
<td>0</td>
<td>Professional</td>
<td>2,700</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
<td>2013</td>
<td>20.6</td>
</tr><tr role="row" class="even">
<td id="1529" class="sorting_1">Spartak Moscow</td>
<td>1529</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/RUS.gif" alt="Russia">  RUS</td>
<td>Premier Division</td>
<td>861K</td>
<td>Professional</td>
<td>46,990</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
<td>1922</td>
<td>25.3</td>
</tr><tr role="row" class="odd">
<td id="130512" class="sorting_1">Spartak Nalchik</td>
<td>130512</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/RUS.gif" alt="Russia">  RUS</td>
<td>First Division</td>
<td>0</td>
<td>Professional</td>
<td>13,800</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#E00000"></span></td>
<td>1935</td>
<td>24.1</td>
</tr><tr role="row" class="even">
<td id="22033716" class="sorting_1">Spartak Pleven</td>
<td>22033716</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/BUL.gif" alt="Bulgaria">  BUL</td>
<td>Second League</td>
<td>0</td>
<td>Professional</td>
<td>21,000</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#2858B0"></span></td>
<td>1919</td>
<td>23.4</td>
</tr><tr role="row" class="odd">
<td id="36023207" class="sorting_1">Sparti</td>
<td>36023207</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/GRE.gif" alt="Greece">  GRE</td>
<td>B Division</td>
<td>0</td>
<td>Professional</td>
<td>1,680</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
<td>1998</td>
<td>25.0</td>
</tr><tr role="row" class="even">
<td id="1173" class="sorting_1">Spezia</td>
<td>1173</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ITA.gif" alt="Italy">  ITA</td>
<td>Serie B</td>
<td>1M</td>
<td>Professional</td>
<td>10,336</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F8F8F8"></span></td>
<td>1906</td>
<td>24.9</td>
</tr><tr role="row" class="odd">
<td id="63000895" class="sorting_1">Spisska Nova Ves</td>
<td>63000895</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/SVK.gif" alt="Slovakia">  SVK</td>
<td>Second Division</td>
<td>0</td>
<td>Professional</td>
<td>10,000</td>
<td><span class="label" style="background:#60C0F8"></span> <span class="label" style="background:#F8F8F8"></span></td>
<td>1910</td>
<td>24.0</td>
</tr><tr role="row" class="even">
<td id="126424" class="sorting_1">Split</td>
<td>126424</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/CRO.gif" alt="Croatia">  CRO</td>
<td>First League</td>
<td>172K</td>
<td>Professional</td>
<td>4,075</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#C80000"></span></td>
<td>1912</td>
<td>22.6</td>
</tr><tr role="row" class="odd">
<td id="337" class="sorting_1">SPO</td>
<td>337</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/BRA.gif" alt="Brazil">  BRA</td>
<td>First Division</td>
<td>1M</td>
<td>Professional</td>
<td>77,011</td>
<td><span class="label" style="background:#C80000"></span> <span class="label" style="background:#F8F8F8"></span></td>
<td>1930</td>
<td>25.0</td>
</tr><tr role="row" class="even">
<td id="1900740" class="sorting_1">Sport &amp; Leisure</td>
<td>1900740</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/NIR.gif" alt="N.Ireland">  NIR</td>
<td>NIFL C2</td>
<td>0</td>
<td>Semi-Professional</td>
<td>1,000</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#E00000"></span></td>
<td>1978</td>
<td>28.2</td>
</tr><tr role="row" class="odd">
<td id="77005796" class="sorting_1">Sport Huancayo</td>
<td>77005796</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/PER.gif" alt="Peru">  PER</td>
<td>First Division</td>
<td>115K</td>
<td>Professional</td>
<td>20,000</td>
<td><span class="label" style="background:#F8F000"></span> <span class="label" style="background:#E00000"></span></td>
<td>2007</td>
<td>29.3</td>
</tr><tr role="row" class="even">
<td id="72023746" class="sorting_1">Sporting Kansas City</td>
<td>72023746</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/USA.gif" alt="U.S.A.">  USA</td>
<td>MLS</td>
<td>999K</td>
<td>Professional</td>
<td>18,467</td>
<td><span class="label" style="background:#183858"></span> <span class="label" style="background:#C0D8F0"></span></td>
<td>1996</td>
<td>26.5</td>
</tr><tr role="row" class="odd">
<td id="3200568" class="sorting_1">Sprimont</td>
<td>3200568</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/BEL.gif" alt="Belgium">  BEL</td>
<td>First Division</td>
<td>14K</td>
<td>Semi-Professional</td>
<td>2,500</td>
<td><span class="label" style="background:#0050D0"></span> <span class="label" style="background:#F8F000"></span></td>
<td>1921</td>
<td>24.5</td>
</tr><tr role="row" class="even">
<td id="338" class="sorting_1">SPT</td>
<td>338</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/BRA.gif" alt="Brazil">  BRA</td>
<td>First Division</td>
<td>476K</td>
<td>Professional</td>
<td>30,520</td>
<td><span class="label" style="background:#002060"></span> <span class="label" style="background:#F8F8F8"></span></td>
<td>1905</td>
<td>26.8</td>
</tr><tr role="row" class="odd">
<td id="5622744" class="sorting_1">Sriwijaya FC</td>
<td>5622744</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/IDN.gif" alt="Indonesia">  IDN</td>
<td>Super League</td>
<td>150K</td>
<td>Professional</td>
<td>40,000</td>
<td><span class="label" style="background:#C82030"></span> <span class="label" style="background:#F0E020"></span></td>
<td>1976</td>
<td>27.8</td>
</tr><tr role="row" class="even">
<td id="1853" class="sorting_1">St. Gallen</td>
<td>1853</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/SUI.gif" alt="Switzerland">  SUI</td>
<td>Super League</td>
<td>792K</td>
<td>Professional</td>
<td>19,694</td>
<td><span class="label" style="background:#40A838"></span> <span class="label" style="background:#F8F8F8"></span></td>
<td>1879</td>
<td>24.9</td>
</tr><tr role="row" class="odd">
<td id="1596" class="sorting_1">St. Johnstone</td>
<td>1596</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/SCO.gif" alt="Scotland">  SCO</td>
<td>Ladbrokes Premiership</td>
<td>80K</td>
<td>Professional</td>
<td>10,696</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#2068B0"></span></td>
<td>1884</td>
<td>25.5</td>
</tr><tr role="row" class="even">
<td id="1597" class="sorting_1">St. Mirren</td>
<td>1597</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/SCO.gif" alt="Scotland">  SCO</td>
<td>Ladbrokes Championship</td>
<td>40K</td>
<td>Professional</td>
<td>8,023</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F8F8F8"></span></td>
<td>1877</td>
<td>23.9</td>
</tr><tr role="row" class="odd">
<td id="599" class="sorting_1">St. Pat's Athletic</td>
<td>599</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/IRL.gif" alt="Ireland">  IRL</td>
<td>Premier Division</td>
<td>0</td>
<td>Professional</td>
<td>5,400</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#E00000"></span></td>
<td>1929</td>
<td>23.5</td>
</tr><tr role="row" class="even">
<td id="107232" class="sorting_1">STA</td>
<td>107232</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/BRA.gif" alt="Brazil">  BRA</td>
<td>First Division</td>
<td>238K</td>
<td>Professional</td>
<td>60,044</td>
<td><span class="label" style="background:#C80000"></span> <span class="label" style="background:#202020"></span></td>
<td>1914</td>
<td>26.3</td>
</tr><tr role="row" class="odd">
<td id="1396" class="sorting_1">Stab?k</td>
<td>1396</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/NOR.gif" alt="Norway">  NOR</td>
<td>Premier Division</td>
<td>237K</td>
<td>Professional</td>
<td>5,500</td>
<td><span class="label" style="background:#002060"></span> <span class="label" style="background:#0050D0"></span></td>
<td>1912</td>
<td>22.2</td>
</tr><tr role="row" class="even">
<td id="2061" class="sorting_1">Stade Brestois 29</td>
<td>2061</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/FRA.gif" alt="France">  FRA</td>
<td>Domino's Ligue 2</td>
<td>0</td>
<td>Professional</td>
<td>15,583</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#E00000"></span></td>
<td>1950</td>
<td>24.8</td>
</tr><tr role="row" class="odd">
<td id="2047" class="sorting_1">Stade de Reims</td>
<td>2047</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/FRA.gif" alt="France">  FRA</td>
<td>Domino's Ligue 2</td>
<td>1M</td>
<td>Professional</td>
<td>21,684</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#C80000"></span></td>
<td>1931</td>
<td>25.8</td>
</tr><tr role="row" class="even">
<td id="2062" class="sorting_1">Stade Lavallois MFC</td>
<td>2062</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/FRA.gif" alt="France">  FRA</td>
<td>Domino's Ligue 2</td>
<td>0</td>
<td>Professional</td>
<td>18,467</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F87000"></span></td>
<td>1902</td>
<td>26.5</td>
</tr><tr role="row" class="odd">
<td id="877" class="sorting_1">Stade Malherbe Caen</td>
<td>877</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/FRA.gif" alt="France">  FRA</td>
<td>Ligue 1</td>
<td>2M</td>
<td>Professional</td>
<td>21,000</td>
<td><span class="label" style="background:#D81820"></span> <span class="label" style="background:#2060A8"></span></td>
<td>1913</td>
<td>27.5</td>
</tr><tr role="row" class="even">
<td id="884" class="sorting_1">Stade Rennais FC</td>
<td>884</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/FRA.gif" alt="France">  FRA</td>
<td>Ligue 1</td>
<td>4M</td>
<td>Professional</td>
<td>29,778</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#E00808"></span></td>
<td>1901</td>
<td>26.3</td>
</tr><tr role="row" class="odd">
<td id="5312711" class="sorting_1">Stal Kam'yans'ke</td>
<td>5312711</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/UKR.gif" alt="Ukraine">  UKR</td>
<td>Premier League</td>
<td>0</td>
<td>Professional</td>
<td>2,900</td>
<td><span class="label" style="background:#002060"></span> <span class="label" style="background:#F8D000"></span></td>
<td>1926</td>
<td>24.8</td>
</tr><tr role="row" class="even">
<td id="715911" class="sorting_1">Stal Mielec</td>
<td>715911</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/POL.gif" alt="Poland">  POL</td>
<td>First Division</td>
<td>10K</td>
<td>Professional</td>
<td>6,864</td>
<td><span class="label" style="background:#2858B0"></span> <span class="label" style="background:#F8F8F8"></span></td>
<td>1939</td>
<td>23.8</td>
</tr><tr role="row" class="odd">
<td id="250" class="sorting_1">Standard</td>
<td>250</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/BEL.gif" alt="Belgium">  BEL</td>
<td>Pro League</td>
<td>2M</td>
<td>Professional</td>
<td>26,659</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#E00000"></span></td>
<td>1898</td>
<td>24.5</td>
</tr><tr role="row" class="even">
<td id="1397" class="sorting_1">Start</td>
<td>1397</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/NOR.gif" alt="Norway">  NOR</td>
<td>Premier Division</td>
<td>9K</td>
<td>Professional</td>
<td>11,700</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F8D000"></span></td>
<td>1905</td>
<td>24.3</td>
</tr><tr role="row" class="odd">
<td id="65036389" class="sorting_1">Stellenbosch FC</td>
<td>65036389</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/RSA.gif" alt="South Africa">  RSA</td>
<td>National First Division</td>
<td>45K</td>
<td>Professional</td>
<td>12,000</td>
<td><span class="label" style="background:#B06040"></span> <span class="label" style="background:#F8F8F8"></span></td>
<td>2016</td>
<td>25.3</td>
</tr><tr role="row" class="even">
<td id="1598" class="sorting_1">Stenhousemuir</td>
<td>1598</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/SCO.gif" alt="Scotland">  SCO</td>
<td>Ladbrokes League 1</td>
<td>15K</td>
<td>Semi-Professional</td>
<td>4,096</td>
<td><span class="label" style="background:#A0C8F0"></span> <span class="label" style="background:#781828"></span></td>
<td>1884</td>
<td>23.7</td>
</tr><tr role="row" class="odd">
<td id="1599" class="sorting_1">Stirling</td>
<td>1599</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/SCO.gif" alt="Scotland">  SCO</td>
<td>Ladbrokes League 2</td>
<td>20K</td>
<td>Semi-Professional</td>
<td>3,808</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#C80030"></span></td>
<td>1945</td>
<td>24.4</td>
</tr><tr role="row" class="even">
<td id="1078" class="sorting_1">Stjarnan</td>
<td>1078</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ISL.gif" alt="Iceland">  ISL</td>
<td>Premier Division</td>
<td>101K</td>
<td>Semi-Professional</td>
<td>1,400</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#0850A8"></span></td>
<td>1960</td>
<td>24.1</td>
</tr><tr role="row" class="odd">
<td id="1399" class="sorting_1">Stjordals-Blink</td>
<td>1399</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/NOR.gif" alt="Norway">  NOR</td>
<td>Second Division Group 2</td>
<td>0</td>
<td>Semi-Professional</td>
<td>1,250</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F83000"></span></td>
<td>1910</td>
<td>24.0</td>
</tr><tr role="row" class="even">
<td id="96021840" class="sorting_1">Stomil</td>
<td>96021840</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/POL.gif" alt="Poland">  POL</td>
<td>First Division</td>
<td>0</td>
<td>Professional</td>
<td>16,800</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
<td>1945</td>
<td>25.5</td>
</tr><tr role="row" class="odd">
<td id="760980" class="sorting_1">Stord</td>
<td>760980</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/NOR.gif" alt="Norway">  NOR</td>
<td>Second Division Group 3</td>
<td>7K</td>
<td>Semi-Professional</td>
<td>2,000</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F8F8F8"></span></td>
<td>1914</td>
<td>22.3</td>
</tr><tr role="row" class="even">
<td id="1600" class="sorting_1">Stranraer</td>
<td>1600</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/SCO.gif" alt="Scotland">  SCO</td>
<td>Ladbrokes League 1</td>
<td>30K</td>
<td>Semi-Professional</td>
<td>4,178</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#0050D0"></span></td>
<td>1870</td>
<td>24.9</td>
</tr><tr role="row" class="odd">
<td id="1401" class="sorting_1">Strindheim</td>
<td>1401</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/NOR.gif" alt="Norway">  NOR</td>
<td>Second Division Group 2</td>
<td>0</td>
<td>Semi-Professional</td>
<td>2,500</td>
<td><span class="label" style="background:#F8F030"></span> <span class="label" style="background:#0040F8"></span></td>
<td>1926</td>
<td>23.0</td>
</tr><tr role="row" class="even">
<td id="1403" class="sorting_1">Strommen</td>
<td>1403</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/NOR.gif" alt="Norway">  NOR</td>
<td>First Division</td>
<td>19K</td>
<td>Semi-Professional</td>
<td>1,850</td>
<td><span class="label" style="background:#E00040"></span> <span class="label" style="background:#A8A8C8"></span></td>
<td>1911</td>
<td>25.1</td>
</tr><tr role="row" class="odd">
<td id="1404" class="sorting_1">Stromsgodset</td>
<td>1404</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/NOR.gif" alt="Norway">  NOR</td>
<td>Premier Division</td>
<td>711K</td>
<td>Professional</td>
<td>8,935</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#002060"></span></td>
<td>1907</td>
<td>25.4</td>
</tr><tr role="row" class="even">
<td id="960" class="sorting_1">Stuttgart</td>
<td>960</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/GER.gif" alt="Germany">  GER</td>
<td>Second Division</td>
<td>3M</td>
<td>Professional</td>
<td>60,449</td>
<td><span class="label" style="background:#E00000"></span> <span class="label" style="background:#F8F8F8"></span></td>
<td>1893</td>
<td>24.7</td>
</tr><tr role="row" class="odd">
<td id="278" class="sorting_1">STVV</td>
<td>278</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/BEL.gif" alt="Belgium">  BEL</td>
<td>Pro League</td>
<td>0</td>
<td>Professional</td>
<td>14,600</td>
<td><span class="label" style="background:#0050D0"></span> <span class="label" style="background:#E8F800"></span></td>
<td>1924</td>
<td>24.1</td>
</tr><tr role="row" class="even">
<td id="5512556" class="sorting_1">Sud America</td>
<td>5512556</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/URU.gif" alt="Uruguay">  URU</td>
<td>First Division</td>
<td>4K</td>
<td>Professional</td>
<td>3,810</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F85000"></span></td>
<td>1914</td>
<td>25.0</td>
</tr><tr role="row" class="odd">
<td id="41024314" class="sorting_1">Sumbawa Barat</td>
<td>41024314</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/IDN.gif" alt="Indonesia">  IDN</td>
<td>Premier Division</td>
<td>6K</td>
<td>Semi-Professional</td>
<td>45,000</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#008030"></span></td>
<td>1976</td>
<td>26.7</td>
</tr><tr role="row" class="even">
<td id="5313097" class="sorting_1">Sumy</td>
<td>5313097</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/UKR.gif" alt="Ukraine">  UKR</td>
<td>First League</td>
<td>12K</td>
<td>Professional</td>
<td>25,830</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#0010D8"></span></td>
<td>2008</td>
<td>22.0</td>
</tr><tr role="row" class="odd">
<td id="1644" class="sorting_1">Sundowns</td>
<td>1644</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/RSA.gif" alt="South Africa">  RSA</td>
<td>South African Premiership</td>
<td>2M</td>
<td>Professional</td>
<td>51,762</td>
<td><span class="label" style="background:#008030"></span> <span class="label" style="background:#F8E010"></span></td>
<td>1970</td>
<td>28.0</td>
</tr><tr role="row" class="even">
<td id="1646" class="sorting_1">SuperSport Utd</td>
<td>1646</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/RSA.gif" alt="South Africa">  RSA</td>
<td>South African Premiership</td>
<td>565K</td>
<td>Professional</td>
<td>28,900</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#0010D8"></span></td>
<td>1985</td>
<td>27.0</td>
</tr><tr role="row" class="odd">
<td id="106813" class="sorting_1">Suwon</td>
<td>106813</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/KOR.gif" alt="South Korea">  KOR</td>
<td>K LEAGUE Classic</td>
<td>900K</td>
<td>Professional</td>
<td>43,959</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#0030A0"></span></td>
<td>1995</td>
<td>26.5</td>
</tr><tr role="row" class="even">
<td id="5707530" class="sorting_1">Suwon FC</td>
<td>5707530</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/KOR.gif" alt="South Korea">  KOR</td>
<td>K LEAGUE Classic</td>
<td>210K</td>
<td>Professional</td>
<td>24,670</td>
<td><span class="label" style="background:#082088"></span> <span class="label" style="background:#F00008"></span></td>
<td>2003</td>
<td>26.1</td>
</tr><tr role="row" class="odd">
<td id="5609646" class="sorting_1">SV Horn</td>
<td>5609646</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/AUT.gif" alt="Austria">  AUT</td>
<td>First Division</td>
<td>30K</td>
<td>Professional</td>
<td>3,600</td>
<td><span class="label" style="background:#0030A0"></span> <span class="label" style="background:#F8F8F8"></span></td>
<td>1922</td>
<td>23.6</td>
</tr><tr role="row" class="even">
<td id="652653" class="sorting_1">SV Mattersburg</td>
<td>652653</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/AUT.gif" alt="Austria">  AUT</td>
<td>Premier Division</td>
<td>0</td>
<td>Professional</td>
<td>15,700</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#006030"></span></td>
<td>1922</td>
<td>25.6</td>
</tr><tr role="row" class="odd">
<td id="159" class="sorting_1">SV Ried</td>
<td>159</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/AUT.gif" alt="Austria">  AUT</td>
<td>Premier Division</td>
<td>0</td>
<td>Professional</td>
<td>7,680</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#188860"></span></td>
<td>1912</td>
<td>24.0</td>
</tr><tr role="row" class="even">
<td id="63031002" class="sorting_1">Svaty Jur</td>
<td>63031002</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/SVK.gif" alt="Slovakia">  SVK</td>
<td>Second Division</td>
<td>0</td>
<td>Professional</td>
<td>550</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
<td>1921</td>
<td>24.6</td>
</tr><tr role="row" class="odd">
<td id="1300490" class="sorting_1">Sydney FC</td>
<td>1300490</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/AUS.gif" alt="Australia">  AUS</td>
<td>Hyundai A-League</td>
<td>162K</td>
<td>Professional</td>
<td>45,500</td>
<td><span class="label" style="background:#003068"></span> <span class="label" style="background:#68C0E8"></span></td>
<td>2004</td>
<td>26.1</td>
</tr><tr role="row" class="even">
<td id="38017639" class="sorting_1">Szeged 2011</td>
<td>38017639</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/HUN.gif" alt="Hungary">  HUN</td>
<td>Division II</td>
<td>6K</td>
<td>Professional</td>
<td>8,000</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#002080"></span></td>
<td>2011</td>
<td>24.3</td>
</tr><tr role="row" class="odd">
<td id="130825" class="sorting_1">SZEOL</td>
<td>130825</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/HUN.gif" alt="Hungary">  HUN</td>
<td>Division II</td>
<td>0</td>
<td>Professional</td>
<td>8,000</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#1860F8"></span></td>
<td>1993</td>
<td>23.7</td>
</tr><tr role="row" class="even">
<td id="7520473" class="sorting_1">Szolnok</td>
<td>7520473</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/HUN.gif" alt="Hungary">  HUN</td>
<td>Division II</td>
<td>0</td>
<td>Professional</td>
<td>4,000</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#0078F8"></span></td>
<td>1910</td>
<td>23.9</td>
</tr><tr role="row" class="odd">
<td id="136237" class="sorting_1">Taborsko</td>
<td>136237</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/CZE.gif" alt="Czech Republic">  CZE</td>
<td>Second Division</td>
<td>239K</td>
<td>Professional</td>
<td>2,500</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#0050D0"></span></td>
<td>1921</td>
<td>26.0</td>
</tr><tr role="row" class="even">
<td id="130852" class="sorting_1">Tacuarembo F.C.</td>
<td>130852</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/URU.gif" alt="Uruguay">  URU</td>
<td>Second Division</td>
<td>768</td>
<td>Professional</td>
<td>8,600</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#E00808"></span></td>
<td>1998</td>
<td>26.3</td>
</tr><tr role="row" class="odd">
<td id="102489" class="sorting_1">Talleres Cba.</td>
<td>102489</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ARG.gif" alt="Argentina">  ARG</td>
<td>Premier Division</td>
<td>0</td>
<td>Professional</td>
<td>46,083</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#00A030"></span></td>
<td>1913</td>
<td>27.0</td>
</tr><tr role="row" class="even">
<td id="58101284" class="sorting_1">Tambov</td>
<td>58101284</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/RUS.gif" alt="Russia">  RUS</td>
<td>First Division</td>
<td>0</td>
<td>Professional</td>
<td>6,300</td>
<td><span class="label" style="background:#E00000"></span> <span class="label" style="background:#0050D0"></span></td>
<td>2013</td>
<td>27.3</td>
</tr><tr role="row" class="odd">
<td id="136016" class="sorting_1">Tampico Madero</td>
<td>136016</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/MEX.gif" alt="Mexico">  MEX</td>
<td>Promotion League</td>
<td>77K</td>
<td>Professional</td>
<td>22,500</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#4898D0"></span></td>
<td>1982</td>
<td>22.5</td>
</tr><tr role="row" class="even">
<td id="51051220" class="sorting_1">Tapachula</td>
<td>51051220</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/MEX.gif" alt="Mexico">  MEX</td>
<td>Promotion League</td>
<td>77K</td>
<td>Professional</td>
<td>13,300</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#008030"></span></td>
<td>2015</td>
<td>28.8</td>
</tr><tr role="row" class="odd">
<td id="2224" class="sorting_1">Taranto</td>
<td>2224</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ITA.gif" alt="Italy">  ITA</td>
<td>Serie C/C</td>
<td>301K</td>
<td>Professional</td>
<td>28,384</td>
<td><span class="label" style="background:#E00000"></span> <span class="label" style="background:#002060"></span></td>
<td>1906</td>
<td>24.0</td>
</tr><tr role="row" class="even">
<td id="57014875" class="sorting_1">Tarlungeni</td>
<td>57014875</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ROU.gif" alt="Romania">  ROU</td>
<td>Liga II</td>
<td>0</td>
<td>Professional</td>
<td>1,000</td>
<td><span class="label" style="background:#C80000"></span> <span class="label" style="background:#F8F8F8"></span></td>
<td>1983</td>
<td>23.1</td>
</tr><tr role="row" class="odd">
<td id="1043" class="sorting_1">Telstar</td>
<td>1043</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/NED.gif" alt="Holland">  NED</td>
<td>Jupiler League</td>
<td>22K</td>
<td>Professional</td>
<td>3,060</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F8F8F8"></span></td>
<td>1963</td>
<td>23.7</td>
</tr><tr role="row" class="even">
<td id="3100019" class="sorting_1">Temperley</td>
<td>3100019</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ARG.gif" alt="Argentina">  ARG</td>
<td>Premier Division</td>
<td>431K</td>
<td>Professional</td>
<td>19,000</td>
<td><span class="label" style="background:#082848"></span> <span class="label" style="background:#60C0F8"></span></td>
<td>1912</td>
<td>26.9</td>
</tr><tr role="row" class="odd">
<td id="455003" class="sorting_1">Tepecikspor</td>
<td>455003</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/TUR.gif" alt="Turkey">  TUR</td>
<td>2. League White</td>
<td>0</td>
<td>Professional</td>
<td>2,000</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#008030"></span></td>
<td>1988</td>
<td>24.4</td>
</tr><tr role="row" class="even">
<td id="5661082" class="sorting_1">Tepic</td>
<td>5661082</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/MEX.gif" alt="Mexico">  MEX</td>
<td>Promotion League</td>
<td>192K</td>
<td>Professional</td>
<td>12,945</td>
<td><span class="label" style="background:#B00000"></span> <span class="label" style="background:#F8F8F8"></span></td>
<td>1959</td>
<td>23.8</td>
</tr><tr role="row" class="odd">
<td id="1300309" class="sorting_1">Teplice</td>
<td>1300309</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/CZE.gif" alt="Czech Republic">  CZE</td>
<td>First Division</td>
<td>399K</td>
<td>Professional</td>
<td>18,221</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#F8F000"></span></td>
<td>1945</td>
<td>25.8</td>
</tr><tr role="row" class="even">
<td id="2226" class="sorting_1">Teramo</td>
<td>2226</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ITA.gif" alt="Italy">  ITA</td>
<td>Serie C/B</td>
<td>172K</td>
<td>Professional</td>
<td>13,000</td>
<td><span class="label" style="background:#E00000"></span> <span class="label" style="background:#E00000"></span></td>
<td>1913</td>
<td>23.8</td>
</tr><tr role="row" class="odd">
<td id="477632" class="sorting_1">Terek</td>
<td>477632</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/RUS.gif" alt="Russia">  RUS</td>
<td>Premier Division</td>
<td>43K</td>
<td>Professional</td>
<td>30,597</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#108048"></span></td>
<td>1958</td>
<td>26.0</td>
</tr><tr role="row" class="even">
<td id="2227" class="sorting_1">Ternana</td>
<td>2227</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ITA.gif" alt="Italy">  ITA</td>
<td>Serie B</td>
<td>345K</td>
<td>Professional</td>
<td>17,460</td>
<td><span class="label" style="background:#009830"></span> <span class="label" style="background:#C80030"></span></td>
<td>1925</td>
<td>23.9</td>
</tr><tr role="row" class="odd">
<td id="71024197" class="sorting_1">Ternopil</td>
<td>71024197</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/UKR.gif" alt="Ukraine">  UKR</td>
<td>First League</td>
<td>0</td>
<td>Professional</td>
<td>15,150</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
<td>2007</td>
<td>23.8</td>
</tr><tr role="row" class="even">
<td id="5680099" class="sorting_1">Thanda Royal Zulu</td>
<td>5680099</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/RSA.gif" alt="South Africa">  RSA</td>
<td>National First Division</td>
<td>141K</td>
<td>Professional</td>
<td>5,000</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F8F8F8"></span></td>
<td>2007</td>
<td>24.2</td>
</tr><tr role="row" class="odd">
<td id="562" class="sorting_1">Thisted FC</td>
<td>562</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/DEN.gif" alt="Denmark">  DEN</td>
<td>Second Division</td>
<td>0</td>
<td>Semi-Professional</td>
<td>6,000</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
<td>1904</td>
<td>23.1</td>
</tr><tr role="row" class="even">
<td id="514173" class="sorting_1">Thun</td>
<td>514173</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/SUI.gif" alt="Switzerland">  SUI</td>
<td>Super League</td>
<td>79K</td>
<td>Professional</td>
<td>10,000</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#E00808"></span></td>
<td>1898</td>
<td>24.5</td>
</tr><tr role="row" class="odd">
<td id="416" class="sorting_1">Tianjin</td>
<td>416</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/CHN.gif" alt="China">  CHN</td>
<td>Super League</td>
<td>6M</td>
<td>Professional</td>
<td>60,000</td>
<td><span class="label" style="background:#501080"></span> <span class="label" style="background:#F8F8F8"></span></td>
<td>1998</td>
<td>27.0</td>
</tr><tr role="row" class="even">
<td id="23245287" class="sorting_1">Tianshan</td>
<td>23245287</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/CHN.gif" alt="China">  CHN</td>
<td>First Division</td>
<td>12K</td>
<td>Professional</td>
<td>45,000</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#008030"></span></td>
<td>2012</td>
<td>26.8</td>
</tr><tr role="row" class="odd">
<td id="3100018" class="sorting_1">Tigre</td>
<td>3100018</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ARG.gif" alt="Argentina">  ARG</td>
<td>Premier Division</td>
<td>0</td>
<td>Professional</td>
<td>26,282</td>
<td><span class="label" style="background:#E00000"></span> <span class="label" style="background:#0030A0"></span></td>
<td>1902</td>
<td>27.5</td>
</tr><tr role="row" class="even">
<td id="104360" class="sorting_1">Tigres</td>
<td>104360</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/MEX.gif" alt="Mexico">  MEX</td>
<td>First Division</td>
<td>6M</td>
<td>Professional</td>
<td>42,000</td>
<td><span class="label" style="background:#0030A0"></span> <span class="label" style="background:#F8D000"></span></td>
<td>1960</td>
<td>25.3</td>
</tr><tr role="row" class="odd">
<td id="5261737" class="sorting_1">Tigres F.C.</td>
<td>5261737</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/COL.gif" alt="Colombia">  COL</td>
<td>Second Division</td>
<td>138K</td>
<td>Professional</td>
<td>5,000</td>
<td><span class="label" style="background:#B0C0E0"></span> <span class="label" style="background:#708090"></span></td>
<td>1997</td>
<td>24.9</td>
</tr><tr role="row" class="even">
<td id="1940" class="sorting_1">TNS</td>
<td>1940</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/WAL.gif" alt="Wales">  WAL</td>
<td>Welsh Premier League</td>
<td>55K</td>
<td>Professional</td>
<td>3,000</td>
<td><span class="label" style="background:#F0F0F0"></span> <span class="label" style="background:#008030"></span></td>
<td>1959</td>
<td>25.9</td>
</tr><tr role="row" class="odd">
<td id="130171" class="sorting_1">Tobermore Utd</td>
<td>130171</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/NIR.gif" alt="N.Ireland">  NIR</td>
<td>NIFL C2</td>
<td>0</td>
<td>Semi-Professional</td>
<td>1,500</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#E00000"></span></td>
<td>1965</td>
<td>26.3</td>
</tr><tr role="row" class="even">
<td id="456152" class="sorting_1">Tokatspor</td>
<td>456152</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/TUR.gif" alt="Turkey">  TUR</td>
<td>2. League Red</td>
<td>0</td>
<td>Professional</td>
<td>5,762</td>
<td><span class="label" style="background:#901000"></span> <span class="label" style="background:#F8F8F8"></span></td>
<td>1969</td>
<td>27.0</td>
</tr><tr role="row" class="odd">
<td id="429" class="sorting_1">Tolima</td>
<td>429</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/COL.gif" alt="Colombia">  COL</td>
<td>First Division</td>
<td>730K</td>
<td>Professional</td>
<td>26,000</td>
<td><span class="label" style="background:#D8B028"></span> <span class="label" style="background:#701030"></span></td>
<td>1954</td>
<td>26.7</td>
</tr><tr role="row" class="even">
<td id="102355" class="sorting_1">Toluca</td>
<td>102355</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/MEX.gif" alt="Mexico">  MEX</td>
<td>First Division</td>
<td>3M</td>
<td>Professional</td>
<td>30,000</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#E00000"></span></td>
<td>1917</td>
<td>27.8</td>
</tr><tr role="row" class="odd">
<td id="318860" class="sorting_1">TOM</td>
<td>318860</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/BRA.gif" alt="Brazil">  BRA</td>
<td>Third Division</td>
<td>2K</td>
<td>Professional</td>
<td>2,000</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F8F8F8"></span></td>
<td>1914</td>
<td>26.3</td>
</tr><tr role="row" class="even">
<td id="130514" class="sorting_1">Tom</td>
<td>130514</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/RUS.gif" alt="Russia">  RUS</td>
<td>Premier Division</td>
<td>0</td>
<td>Professional</td>
<td>10,028</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#40B868"></span></td>
<td>1957</td>
<td>26.8</td>
</tr><tr role="row" class="odd">
<td id="757668" class="sorting_1">Tonsberg</td>
<td>757668</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/NOR.gif" alt="Norway">  NOR</td>
<td>Second Division Group 4</td>
<td>24K</td>
<td>Semi-Professional</td>
<td>5,000</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#E80000"></span></td>
<td>2001</td>
<td>22.8</td>
</tr><tr role="row" class="even">
<td id="1174" class="sorting_1">Torino</td>
<td>1174</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ITA.gif" alt="Italy">  ITA</td>
<td>Serie A</td>
<td>4M</td>
<td>Professional</td>
<td>27,958</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#481018"></span></td>
<td>1906</td>
<td>26.5</td>
</tr><tr role="row" class="odd">
<td id="72000789" class="sorting_1">Toronto FC</td>
<td>72000789</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/CAN.gif" alt="Canada">  CAN</td>
<td>MLS</td>
<td>2M</td>
<td>Professional</td>
<td>28,000</td>
<td><span class="label" style="background:#383838"></span> <span class="label" style="background:#D02848"></span></td>
<td>2007</td>
<td>25.7</td>
</tr><tr role="row" class="even">
<td id="308" class="sorting_1">Torpedo Minsk</td>
<td>308</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/BLR.gif" alt="Belarus">  BLR</td>
<td>First League</td>
<td>23K</td>
<td>Professional</td>
<td>5,200</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F8F8F8"></span></td>
<td>1947</td>
<td>23.8</td>
</tr><tr role="row" class="odd">
<td id="485665" class="sorting_1">Torpedo Zhodino</td>
<td>485665</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/BLR.gif" alt="Belarus">  BLR</td>
<td>Highest League</td>
<td>12K</td>
<td>Professional</td>
<td>6,522</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F8F8F8"></span></td>
<td>1961</td>
<td>25.8</td>
</tr><tr role="row" class="even">
<td id="78027478" class="sorting_1">Torque</td>
<td>78027478</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/URU.gif" alt="Uruguay">  URU</td>
<td>Second Division</td>
<td>768</td>
<td>Professional</td>
<td>7,320</td>
<td><span class="label" style="background:#002080"></span> <span class="label" style="background:#60C0F8"></span></td>
<td>2007</td>
<td>26.3</td>
</tr><tr role="row" class="odd">
<td id="58062109" class="sorting_1">Tosno</td>
<td>58062109</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/RUS.gif" alt="Russia">  RUS</td>
<td>First Division</td>
<td>43K</td>
<td>Professional</td>
<td>3,223</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F8F8F8"></span></td>
<td>0</td>
<td>26.1</td>
</tr><tr role="row" class="even">
<td id="886" class="sorting_1">Toulouse FC</td>
<td>886</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/FRA.gif" alt="France">  FRA</td>
<td>Ligue 1</td>
<td>1M</td>
<td>Professional</td>
<td>33,150</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#604090"></span></td>
<td>1970</td>
<td>24.7</td>
</tr><tr role="row" class="odd">
<td id="2010" class="sorting_1">Tours FC</td>
<td>2010</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/FRA.gif" alt="France">  FRA</td>
<td>Domino's Ligue 2</td>
<td>0</td>
<td>Professional</td>
<td>16,247</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#50C0F0"></span></td>
<td>1951</td>
<td>24.2</td>
</tr><tr role="row" class="even">
<td id="301198" class="sorting_1">TPC</td>
<td>301198</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/BRA.gif" alt="Brazil">  BRA</td>
<td>Second Division</td>
<td>24K</td>
<td>Professional</td>
<td>14,185</td>
<td><span class="label" style="background:#0030A0"></span> <span class="label" style="background:#F8D000"></span></td>
<td>1912</td>
<td>25.7</td>
</tr><tr role="row" class="odd">
<td id="822" class="sorting_1">TPS</td>
<td>822</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/FIN.gif" alt="Finland">  FIN</td>
<td>First Division</td>
<td>861</td>
<td>Semi-Professional</td>
<td>730</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
<td>1922</td>
<td>23.1</td>
</tr><tr role="row" class="even">
<td id="1879" class="sorting_1">Trabzonspor</td>
<td>1879</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/TUR.gif" alt="Turkey">  TUR</td>
<td>Super League</td>
<td>774K</td>
<td>Professional</td>
<td>24,169</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
<td>1967</td>
<td>24.2</td>
</tr><tr role="row" class="odd">
<td id="1175" class="sorting_1">Trapani</td>
<td>1175</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ITA.gif" alt="Italy">  ITA</td>
<td>Serie B</td>
<td>431K</td>
<td>Professional</td>
<td>7,787</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#800020"></span></td>
<td>1905</td>
<td>26.2</td>
</tr><tr role="row" class="even">
<td id="130872" class="sorting_1">Trencin</td>
<td>130872</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/SVK.gif" alt="Slovakia">  SVK</td>
<td>First Division</td>
<td>258K</td>
<td>Professional</td>
<td>3,500</td>
<td><span class="label" style="background:#C80000"></span> <span class="label" style="background:#F8F8F8"></span></td>
<td>1992</td>
<td>21.1</td>
</tr><tr role="row" class="odd">
<td id="1641" class="sorting_1">Triglav</td>
<td>1641</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/SVN.gif" alt="Slovenia">  SVN</td>
<td>Second League</td>
<td>78K</td>
<td>Semi-Professional</td>
<td>2,029</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#901000"></span></td>
<td>1920</td>
<td>22.1</td>
</tr><tr role="row" class="even">
<td id="129653" class="sorting_1">Trikala</td>
<td>129653</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/GRE.gif" alt="Greece">  GRE</td>
<td>B Division</td>
<td>0</td>
<td>Professional</td>
<td>14,000</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
<td>1963</td>
<td>27.3</td>
</tr><tr role="row" class="odd">
<td id="136157" class="sorting_1">Trinec</td>
<td>136157</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/CZE.gif" alt="Czech Republic">  CZE</td>
<td>Second Division</td>
<td>80K</td>
<td>Professional</td>
<td>2,200</td>
<td><span class="label" style="background:#E00000"></span> <span class="label" style="background:#E00000"></span></td>
<td>1921</td>
<td>26.0</td>
</tr><tr role="row" class="even">
<td id="1623" class="sorting_1">Trnava</td>
<td>1623</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/SVK.gif" alt="Slovakia">  SVK</td>
<td>First Division</td>
<td>215K</td>
<td>Professional</td>
<td>18,124</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#E00000"></span></td>
<td>1923</td>
<td>24.2</td>
</tr><tr role="row" class="odd">
<td id="1409" class="sorting_1">Tromsdalen</td>
<td>1409</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/NOR.gif" alt="Norway">  NOR</td>
<td>Second Division Group 1</td>
<td>7K</td>
<td>Semi-Professional</td>
<td>4,000</td>
<td><span class="label" style="background:#E00000"></span> <span class="label" style="background:#002060"></span></td>
<td>1938</td>
<td>24.9</td>
</tr><tr role="row" class="even">
<td id="1410" class="sorting_1">Tromso</td>
<td>1410</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/NOR.gif" alt="Norway">  NOR</td>
<td>Premier Division</td>
<td>5K</td>
<td>Professional</td>
<td>6,859</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#E00000"></span></td>
<td>1920</td>
<td>24.5</td>
</tr><tr role="row" class="odd">
<td id="22070141" class="sorting_1">Tsarsko selo</td>
<td>22070141</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/BUL.gif" alt="Bulgaria">  BUL</td>
<td>Second League</td>
<td>0</td>
<td>Professional</td>
<td>15,000</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#E00000"></span></td>
<td>2007</td>
<td>24.4</td>
</tr><tr role="row" class="even">
<td id="172" class="sorting_1">Tubize</td>
<td>172</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/BEL.gif" alt="Belgium">  BEL</td>
<td>Pro League B</td>
<td>0</td>
<td>Professional</td>
<td>8,100</td>
<td><span class="label" style="background:#F8F000"></span> <span class="label" style="background:#C80000"></span></td>
<td>1953</td>
<td>24.8</td>
</tr><tr role="row" class="odd">
<td id="5688086" class="sorting_1">Tuks</td>
<td>5688086</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/RSA.gif" alt="South Africa">  RSA</td>
<td>National First Division</td>
<td>226K</td>
<td>Professional</td>
<td>15,000</td>
<td><span class="label" style="background:#E00808"></span> <span class="label" style="background:#F8F8F8"></span></td>
<td>1983</td>
<td>24.6</td>
</tr><tr role="row" class="even">
<td id="43076615" class="sorting_1">Tuttocuoio</td>
<td>43076615</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ITA.gif" alt="Italy">  ITA</td>
<td>Serie C/A</td>
<td>86K</td>
<td>Professional</td>
<td>4,014</td>
<td><span class="label" style="background:#008030"></span> <span class="label" style="background:#000000"></span></td>
<td>1957</td>
<td>21.1</td>
</tr><tr role="row" class="odd">
<td id="70078171" class="sorting_1">Tuzlaspor</td>
<td>70078171</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/TUR.gif" alt="Turkey">  TUR</td>
<td>2. League Red</td>
<td>0</td>
<td>Professional</td>
<td>2,200</td>
<td><span class="label" style="background:#0050D0"></span> <span class="label" style="background:#F8F8F8"></span></td>
<td>1954</td>
<td>23.3</td>
</tr><tr role="row" class="even">
<td id="1413" class="sorting_1">Tynset</td>
<td>1413</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/NOR.gif" alt="Norway">  NOR</td>
<td>Second Division Group 2</td>
<td>0</td>
<td>Semi-Professional</td>
<td>750</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#F00000"></span></td>
<td>1900</td>
<td>24.2</td>
</tr><tr role="row" class="odd">
<td id="1519" class="sorting_1">Tyumen</td>
<td>1519</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/RUS.gif" alt="Russia">  RUS</td>
<td>First Division</td>
<td>0</td>
<td>Professional</td>
<td>15,000</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#000000"></span></td>
<td>1961</td>
<td>26.7</td>
</tr><tr role="row" class="even">
<td id="1300920" class="sorting_1">U.C.D.</td>
<td>1300920</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/IRL.gif" alt="Ireland">  IRL</td>
<td>First Division</td>
<td>0</td>
<td>Semi-Professional</td>
<td>3,000</td>
<td><span class="label" style="background:#002060"></span> <span class="label" style="background:#60C0F8"></span></td>
<td>1895</td>
<td>23.1</td>
</tr><tr role="row" class="odd">
<td id="5661084" class="sorting_1">UdeG</td>
<td>5661084</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/MEX.gif" alt="Mexico">  MEX</td>
<td>Promotion League</td>
<td>192K</td>
<td>Professional</td>
<td>56,713</td>
<td><span class="label" style="background:#F8F000"></span> <span class="label" style="background:#000000"></span></td>
<td>1970</td>
<td>26.9</td>
</tr><tr role="row" class="even">
<td id="1178" class="sorting_1">Udinese</td>
<td>1178</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ITA.gif" alt="Italy">  ITA</td>
<td>Serie A</td>
<td>3M</td>
<td>Professional</td>
<td>25,000</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F8F8F8"></span></td>
<td>1896</td>
<td>25.4</td>
</tr><tr role="row" class="odd">
<td id="58064627" class="sorting_1">Ufa</td>
<td>58064627</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/RUS.gif" alt="Russia">  RUS</td>
<td>Premier Division</td>
<td>43K</td>
<td>Professional</td>
<td>15,200</td>
<td><span class="label" style="background:#78F800"></span> <span class="label" style="background:#288850"></span></td>
<td>2010</td>
<td>25.3</td>
</tr><tr role="row" class="even">
<td id="1064" class="sorting_1">Ujpest</td>
<td>1064</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/HUN.gif" alt="Hungary">  HUN</td>
<td>Division I</td>
<td>0</td>
<td>Professional</td>
<td>13,500</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#501080"></span></td>
<td>1885</td>
<td>23.8</td>
</tr><tr role="row" class="odd">
<td id="5000207" class="sorting_1">Ull/Kisa</td>
<td>5000207</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/NOR.gif" alt="Norway">  NOR</td>
<td>First Division</td>
<td>0</td>
<td>Semi-Professional</td>
<td>3,500</td>
<td><span class="label" style="background:#008080"></span> <span class="label" style="background:#F8F000"></span></td>
<td>1894</td>
<td>24.8</td>
</tr><tr role="row" class="even">
<td id="1414" class="sorting_1">Ullern</td>
<td>1414</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/NOR.gif" alt="Norway">  NOR</td>
<td>Second Division Group 1</td>
<td>48K</td>
<td>Semi-Professional</td>
<td>3,200</td>
<td><span class="label" style="background:#E00000"></span> <span class="label" style="background:#F8F8F8"></span></td>
<td>1909</td>
<td>21.3</td>
</tr><tr role="row" class="odd">
<td id="106808" class="sorting_1">Ulsan</td>
<td>106808</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/KOR.gif" alt="South Korea">  KOR</td>
<td>K LEAGUE Classic</td>
<td>2M</td>
<td>Professional</td>
<td>44,055</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#002080"></span></td>
<td>1983</td>
<td>26.2</td>
</tr><tr role="row" class="even">
<td id="453567" class="sorting_1">Umraniyespor</td>
<td>453567</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/TUR.gif" alt="Turkey">  TUR</td>
<td>1. League</td>
<td>0</td>
<td>Professional</td>
<td>500</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#E00000"></span></td>
<td>1938</td>
<td>26.2</td>
</tr><tr role="row" class="odd">
<td id="102467" class="sorting_1">Union (SF)</td>
<td>102467</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ARG.gif" alt="Argentina">  ARG</td>
<td>Premier Division</td>
<td>669K</td>
<td>Professional</td>
<td>22,300</td>
<td><span class="label" style="background:#E00000"></span> <span class="label" style="background:#F8F8F8"></span></td>
<td>1907</td>
<td>25.4</td>
</tr><tr role="row" class="even">
<td id="77016717" class="sorting_1">Union Comercio</td>
<td>77016717</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/PER.gif" alt="Peru">  PER</td>
<td>First Division</td>
<td>115K</td>
<td>Professional</td>
<td>10,000</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#E00808"></span></td>
<td>1994</td>
<td>25.9</td>
</tr><tr role="row" class="odd">
<td id="120064" class="sorting_1">Union Espanola</td>
<td>120064</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/CHI.gif" alt="Chile">  CHI</td>
<td>First Division</td>
<td>692K</td>
<td>Professional</td>
<td>22,000</td>
<td><span class="label" style="background:#F8D000"></span> <span class="label" style="background:#E00000"></span></td>
<td>1897</td>
<td>22.4</td>
</tr><tr role="row" class="even">
<td id="5250019" class="sorting_1">Union La Calera</td>
<td>5250019</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/CHI.gif" alt="Chile">  CHI</td>
<td>First Division B</td>
<td>77K</td>
<td>Professional</td>
<td>12,000</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#E00000"></span></td>
<td>1954</td>
<td>24.3</td>
</tr><tr role="row" class="odd">
<td id="104386" class="sorting_1">Union Magdalena</td>
<td>104386</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/COL.gif" alt="Colombia">  COL</td>
<td>Second Division</td>
<td>246K</td>
<td>Professional</td>
<td>4,500</td>
<td><span class="label" style="background:#E00000"></span> <span class="label" style="background:#0030A0"></span></td>
<td>1953</td>
<td>26.6</td>
</tr><tr role="row" class="even">
<td id="130784" class="sorting_1">Union San Felipe</td>
<td>130784</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/CHI.gif" alt="Chile">  CHI</td>
<td>First Division B</td>
<td>9K</td>
<td>Professional</td>
<td>12,000</td>
<td><span class="label" style="background:#E00000"></span> <span class="label" style="background:#F8F8F8"></span></td>
<td>1956</td>
<td>22.7</td>
</tr><tr role="row" class="odd">
<td id="288" class="sorting_1">Union SG</td>
<td>288</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/BEL.gif" alt="Belgium">  BEL</td>
<td>Pro League B</td>
<td>19K</td>
<td>Professional</td>
<td>50,000</td>
<td><span class="label" style="background:#0050D0"></span> <span class="label" style="background:#F8F000"></span></td>
<td>1897</td>
<td>25.4</td>
</tr><tr role="row" class="even">
<td id="403" class="sorting_1">Universidad Catolica</td>
<td>403</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/CHI.gif" alt="Chile">  CHI</td>
<td>First Division</td>
<td>2M</td>
<td>Professional</td>
<td>16,000</td>
<td><span class="label" style="background:#0030A0"></span> <span class="label" style="background:#F8F8F8"></span></td>
<td>1937</td>
<td>23.8</td>
</tr><tr role="row" class="odd">
<td id="404" class="sorting_1">Universidad de Chile</td>
<td>404</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/CHI.gif" alt="Chile">  CHI</td>
<td>First Division</td>
<td>3M</td>
<td>Professional</td>
<td>49,000</td>
<td><span class="label" style="background:#E00000"></span> <span class="label" style="background:#0030A0"></span></td>
<td>1927</td>
<td>23.0</td>
</tr><tr role="row" class="even">
<td id="130789" class="sorting_1">Universidad de Concepcion</td>
<td>130789</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/CHI.gif" alt="Chile">  CHI</td>
<td>First Division</td>
<td>38K</td>
<td>Professional</td>
<td>30,000</td>
<td><span class="label" style="background:#000080"></span> <span class="label" style="background:#F8F800"></span></td>
<td>1994</td>
<td>24.8</td>
</tr><tr role="row" class="odd">
<td id="8832487" class="sorting_1">Universidad San Martin</td>
<td>8832487</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/PER.gif" alt="Peru">  PER</td>
<td>First Division</td>
<td>154K</td>
<td>Professional</td>
<td>18,000</td>
<td><span class="label" style="background:#002060"></span> <span class="label" style="background:#F8F8F8"></span></td>
<td>2004</td>
<td>22.8</td>
</tr><tr role="row" class="even">
<td id="1450" class="sorting_1">Universitario</td>
<td>1450</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/PER.gif" alt="Peru">  PER</td>
<td>First Division</td>
<td>61K</td>
<td>Professional</td>
<td>80,000</td>
<td><span class="label" style="background:#880828"></span> <span class="label" style="background:#F8F8E0"></span></td>
<td>1924</td>
<td>25.6</td>
</tr><tr role="row" class="odd">
<td id="5261646" class="sorting_1">Universitario Popayan</td>
<td>5261646</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/COL.gif" alt="Colombia">  COL</td>
<td>Second Division</td>
<td>154K</td>
<td>Professional</td>
<td>5,000</td>
<td><span class="label" style="background:#E00000"></span> <span class="label" style="background:#0050D0"></span></td>
<td>2012</td>
<td>23.3</td>
</tr><tr role="row" class="even">
<td id="1533" class="sorting_1">Ural</td>
<td>1533</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/RUS.gif" alt="Russia">  RUS</td>
<td>Premier Division</td>
<td>86K</td>
<td>Professional</td>
<td>10,000</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F07028"></span></td>
<td>1930</td>
<td>25.0</td>
</tr><tr role="row" class="odd">
<td id="2068" class="sorting_1">US Avranches</td>
<td>2068</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/FRA.gif" alt="France">  FRA</td>
<td>National</td>
<td>0</td>
<td>Semi-Professional</td>
<td>2,000</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#0050D0"></span></td>
<td>1897</td>
<td>23.8</td>
</tr><tr role="row" class="even">
<td id="3501956" class="sorting_1">US Concarneau</td>
<td>3501956</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/FRA.gif" alt="France">  FRA</td>
<td>National</td>
<td>37K</td>
<td>Semi-Professional</td>
<td>6,500</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
<td>1911</td>
<td>26.7</td>
</tr><tr role="row" class="odd">
<td id="2069" class="sorting_1">US Creteil-Lusitanos</td>
<td>2069</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/FRA.gif" alt="France">  FRA</td>
<td>National</td>
<td>0</td>
<td>Professional</td>
<td>12,150</td>
<td><span class="label" style="background:#E8C060"></span> <span class="label" style="background:#F8F8F8"></span></td>
<td>1936</td>
<td>25.6</td>
</tr><tr role="row" class="even">
<td id="2075" class="sorting_1">US Orleans</td>
<td>2075</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/FRA.gif" alt="France">  FRA</td>
<td>Domino's Ligue 2</td>
<td>0</td>
<td>Professional</td>
<td>6,833</td>
<td><span class="label" style="background:#E00000"></span> <span class="label" style="background:#F8F000"></span></td>
<td>1976</td>
<td>28.3</td>
</tr><tr role="row" class="odd">
<td id="2002" class="sorting_1">USBCO</td>
<td>2002</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/FRA.gif" alt="France">  FRA</td>
<td>National</td>
<td>0</td>
<td>Semi-Professional</td>
<td>15,204</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#E00808"></span></td>
<td>1898</td>
<td>26.7</td>
</tr><tr role="row" class="even">
<td id="2072" class="sorting_1">USL Dunkerque</td>
<td>2072</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/FRA.gif" alt="France">  FRA</td>
<td>National</td>
<td>0</td>
<td>Semi-Professional</td>
<td>4,200</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
<td>1954</td>
<td>26.2</td>
</tr><tr role="row" class="odd">
<td id="136249" class="sorting_1">Usti nad Labem</td>
<td>136249</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/CZE.gif" alt="Czech Republic">  CZE</td>
<td>Second Division</td>
<td>160K</td>
<td>Professional</td>
<td>4,000</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#0050D0"></span></td>
<td>1927</td>
<td>24.0</td>
</tr><tr role="row" class="even">
<td id="57113687" class="sorting_1">UTA Batrana Doamna</td>
<td>57113687</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ROU.gif" alt="Romania">  ROU</td>
<td>Liga II</td>
<td>0</td>
<td>Professional</td>
<td>500</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#E00000"></span></td>
<td>2013</td>
<td>23.2</td>
</tr><tr role="row" class="odd">
<td id="5290571" class="sorting_1">UTC</td>
<td>5290571</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/PER.gif" alt="Peru">  PER</td>
<td>First Division</td>
<td>92K</td>
<td>Professional</td>
<td>18,000</td>
<td><span class="label" style="background:#E00000"></span> <span class="label" style="background:#F8F8E0"></span></td>
<td>1964</td>
<td>27.1</td>
</tr><tr role="row" class="even">
<td id="1065" class="sorting_1">Vac</td>
<td>1065</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/HUN.gif" alt="Hungary">  HUN</td>
<td>Division II</td>
<td>0</td>
<td>Professional</td>
<td>9,000</td>
<td><span class="label" style="background:#002060"></span> <span class="label" style="background:#E00000"></span></td>
<td>1899</td>
<td>25.3</td>
</tr><tr role="row" class="odd">
<td id="5720002" class="sorting_1">Vaduz</td>
<td>5720002</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/SUI.gif" alt="Switzerland">  SUI</td>
<td>Super League</td>
<td>79K</td>
<td>Professional</td>
<td>7,838</td>
<td><span class="label" style="background:#E00000"></span> <span class="label" style="background:#901000"></span></td>
<td>1932</td>
<td>25.5</td>
</tr><tr role="row" class="even">
<td id="888" class="sorting_1">Valenciennes FC</td>
<td>888</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/FRA.gif" alt="France">  FRA</td>
<td>Domino's Ligue 2</td>
<td>0</td>
<td>Professional</td>
<td>24,926</td>
<td><span class="label" style="background:#A00820"></span> <span class="label" style="background:#E00000"></span></td>
<td>1913</td>
<td>24.9</td>
</tr><tr role="row" class="odd">
<td id="1426" class="sorting_1">Valerenga</td>
<td>1426</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/NOR.gif" alt="Norway">  NOR</td>
<td>Premier Division</td>
<td>47K</td>
<td>Professional</td>
<td>27,182</td>
<td><span class="label" style="background:#E00000"></span> <span class="label" style="background:#0060F8"></span></td>
<td>1913</td>
<td>24.8</td>
</tr><tr role="row" class="even">
<td id="8830832" class="sorting_1">Valledupar F.C.</td>
<td>8830832</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/COL.gif" alt="Colombia">  COL</td>
<td>Second Division</td>
<td>146K</td>
<td>Professional</td>
<td>10,000</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#108048"></span></td>
<td>2003</td>
<td>25.7</td>
</tr><tr role="row" class="odd">
<td id="1080" class="sorting_1">Valur</td>
<td>1080</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ISL.gif" alt="Iceland">  ISL</td>
<td>Premier Division</td>
<td>101K</td>
<td>Semi-Professional</td>
<td>2,225</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#E00000"></span></td>
<td>1911</td>
<td>24.3</td>
</tr><tr role="row" class="even">
<td id="4400014" class="sorting_1">Vancouver</td>
<td>4400014</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/CAN.gif" alt="Canada">  CAN</td>
<td>MLS</td>
<td>576K</td>
<td>Professional</td>
<td>54,320</td>
<td><span class="label" style="background:#C0C8C8"></span> <span class="label" style="background:#F8F8F8"></span></td>
<td>1974</td>
<td>25.3</td>
</tr><tr role="row" class="odd">
<td id="1416" class="sorting_1">Vard</td>
<td>1416</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/NOR.gif" alt="Norway">  NOR</td>
<td>Second Division Group 3</td>
<td>7K</td>
<td>Semi-Professional</td>
<td>8,983</td>
<td><span class="label" style="background:#0030A0"></span> <span class="label" style="background:#E00000"></span></td>
<td>1916</td>
<td>22.5</td>
</tr><tr role="row" class="even">
<td id="136208" class="sorting_1">Varnsdorf</td>
<td>136208</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/CZE.gif" alt="Czech Republic">  CZE</td>
<td>Second Division</td>
<td>160K</td>
<td>Professional</td>
<td>2,500</td>
<td><span class="label" style="background:#F8F080"></span> <span class="label" style="background:#F8F000"></span></td>
<td>1938</td>
<td>23.1</td>
</tr><tr role="row" class="odd">
<td id="1066" class="sorting_1">Vasas</td>
<td>1066</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/HUN.gif" alt="Hungary">  HUN</td>
<td>Division I</td>
<td>0</td>
<td>Professional</td>
<td>18,000</td>
<td><span class="label" style="background:#304078"></span> <span class="label" style="background:#C81018"></span></td>
<td>1911</td>
<td>23.9</td>
</tr><tr role="row" class="even">
<td id="339" class="sorting_1">VDG</td>
<td>339</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/BRA.gif" alt="Brazil">  BRA</td>
<td>Second Division</td>
<td>1M</td>
<td>Professional</td>
<td>24,311</td>
<td><span class="label" style="background:#F8D000"></span> <span class="label" style="background:#C80000"></span></td>
<td>1898</td>
<td>28.6</td>
</tr><tr role="row" class="odd">
<td id="2141" class="sorting_1">Vejgaard</td>
<td>2141</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/DEN.gif" alt="Denmark">  DEN</td>
<td>Second Division</td>
<td>0</td>
<td>Amateur</td>
<td>1,200</td>
<td><span class="label" style="background:#0030A0"></span> <span class="label" style="background:#F8F8F8"></span></td>
<td>0</td>
<td>23.7</td>
</tr><tr role="row" class="even">
<td id="2142" class="sorting_1">Vejle</td>
<td>2142</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/DEN.gif" alt="Denmark">  DEN</td>
<td>First Division</td>
<td>173K</td>
<td>Professional</td>
<td>10,418</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#F00000"></span></td>
<td>1891</td>
<td>22.7</td>
</tr><tr role="row" class="odd">
<td id="98" class="sorting_1">Velez</td>
<td>98</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ARG.gif" alt="Argentina">  ARG</td>
<td>Premier Division</td>
<td>0</td>
<td>Professional</td>
<td>49,540</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
<td>1910</td>
<td>25.8</td>
</tr><tr role="row" class="even">
<td id="51051210" class="sorting_1">Venados</td>
<td>51051210</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/MEX.gif" alt="Mexico">  MEX</td>
<td>Promotion League</td>
<td>77K</td>
<td>Professional</td>
<td>18,000</td>
<td><span class="label" style="background:#F8F000"></span> <span class="label" style="background:#F8F000"></span></td>
<td>1988</td>
<td>24.0</td>
</tr><tr role="row" class="odd">
<td id="6201846" class="sorting_1">Vendee Herbiers Football</td>
<td>6201846</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/FRA.gif" alt="France">  FRA</td>
<td>National</td>
<td>57K</td>
<td>Semi-Professional</td>
<td>3,000</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
<td>1949</td>
<td>25.8</td>
</tr><tr role="row" class="even">
<td id="521" class="sorting_1">Vendsyssel FF</td>
<td>521</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/DEN.gif" alt="Denmark">  DEN</td>
<td>First Division</td>
<td>58K</td>
<td>Professional</td>
<td>7,500</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F8F8F8"></span></td>
<td>1886</td>
<td>24.8</td>
</tr><tr role="row" class="odd">
<td id="1179" class="sorting_1">Venezia</td>
<td>1179</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ITA.gif" alt="Italy">  ITA</td>
<td>Serie C/B</td>
<td>689K</td>
<td>Professional</td>
<td>7,450</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#000000"></span></td>
<td>1907</td>
<td>26.6</td>
</tr><tr role="row" class="even">
<td id="130799" class="sorting_1">Veracruz</td>
<td>130799</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/MEX.gif" alt="Mexico">  MEX</td>
<td>First Division</td>
<td>2M</td>
<td>Professional</td>
<td>30,000</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#C80000"></span></td>
<td>1943</td>
<td>27.9</td>
</tr><tr role="row" class="odd">
<td id="1900" class="sorting_1">Veres</td>
<td>1900</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/UKR.gif" alt="Ukraine">  UKR</td>
<td>First League</td>
<td>0</td>
<td>Professional</td>
<td>25,000</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#0050D0"></span></td>
<td>1957</td>
<td>24.8</td>
</tr><tr role="row" class="even">
<td id="22006538" class="sorting_1">Vereya</td>
<td>22006538</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/BUL.gif" alt="Bulgaria">  BUL</td>
<td>First League</td>
<td>15K</td>
<td>Professional</td>
<td>13,500</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#0050D0"></span></td>
<td>2001</td>
<td>26.6</td>
</tr><tr role="row" class="odd">
<td id="1300559" class="sorting_1">Veroia</td>
<td>1300559</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/GRE.gif" alt="Greece">  GRE</td>
<td>Superleague</td>
<td>0</td>
<td>Professional</td>
<td>6,350</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
<td>1960</td>
<td>27.1</td>
</tr><tr role="row" class="even">
<td id="2201" class="sorting_1">Verona</td>
<td>2201</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ITA.gif" alt="Italy">  ITA</td>
<td>Serie B</td>
<td>3M</td>
<td>Professional</td>
<td>39,211</td>
<td><span class="label" style="background:#081030"></span> <span class="label" style="background:#F8A820"></span></td>
<td>1903</td>
<td>26.3</td>
</tr><tr role="row" class="odd">
<td id="64000398" class="sorting_1">Verzej</td>
<td>64000398</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/SVN.gif" alt="Slovenia">  SVN</td>
<td>Second League</td>
<td>69K</td>
<td>Semi-Professional</td>
<td>405</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#70E088"></span></td>
<td>1963</td>
<td>21.2</td>
</tr><tr role="row" class="even">
<td id="832154" class="sorting_1">Vibonese</td>
<td>832154</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ITA.gif" alt="Italy">  ITA</td>
<td>Serie C/C</td>
<td>43K</td>
<td>Professional</td>
<td>4,500</td>
<td><span class="label" style="background:#E00000"></span> <span class="label" style="background:#002060"></span></td>
<td>1928</td>
<td>23.7</td>
</tr><tr role="row" class="odd">
<td id="569" class="sorting_1">Viborg FF</td>
<td>569</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/DEN.gif" alt="Denmark">  DEN</td>
<td>Superliga</td>
<td>173K</td>
<td>Professional</td>
<td>9,566</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
<td>1896</td>
<td>26.0</td>
</tr><tr role="row" class="even">
<td id="1181" class="sorting_1">Vicenza</td>
<td>1181</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ITA.gif" alt="Italy">  ITA</td>
<td>Serie B</td>
<td>431K</td>
<td>Professional</td>
<td>12,124</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#E00000"></span></td>
<td>1902</td>
<td>24.8</td>
</tr><tr role="row" class="odd">
<td id="1419" class="sorting_1">Vidar</td>
<td>1419</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/NOR.gif" alt="Norway">  NOR</td>
<td>Second Division Group 3</td>
<td>0</td>
<td>Semi-Professional</td>
<td>4,650</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#E00000"></span></td>
<td>1906</td>
<td>24.3</td>
</tr><tr role="row" class="even">
<td id="1062" class="sorting_1">Videoton</td>
<td>1062</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/HUN.gif" alt="Hungary">  HUN</td>
<td>Division I</td>
<td>224K</td>
<td>Professional</td>
<td>10,000</td>
<td><span class="label" style="background:#303850"></span> <span class="label" style="background:#B02030"></span></td>
<td>1941</td>
<td>26.8</td>
</tr><tr role="row" class="odd">
<td id="1422" class="sorting_1">Viking</td>
<td>1422</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/NOR.gif" alt="Norway">  NOR</td>
<td>Premier Division</td>
<td>474K</td>
<td>Professional</td>
<td>16,300</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#002060"></span></td>
<td>1899</td>
<td>22.4</td>
</tr><tr role="row" class="even">
<td id="7842686" class="sorting_1">Vikingur O.</td>
<td>7842686</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ISL.gif" alt="Iceland">  ISL</td>
<td>Premier Division</td>
<td>20K</td>
<td>Semi-Professional</td>
<td>1,130</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#0010D8"></span></td>
<td>1928</td>
<td>25.5</td>
</tr><tr role="row" class="odd">
<td id="1101637" class="sorting_1">Vikingur R.</td>
<td>1101637</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ISL.gif" alt="Iceland">  ISL</td>
<td>Premier Division</td>
<td>34K</td>
<td>Semi-Professional</td>
<td>1,449</td>
<td><span class="label" style="background:#E00000"></span> <span class="label" style="background:#000000"></span></td>
<td>1908</td>
<td>23.8</td>
</tr><tr role="row" class="even">
<td id="477" class="sorting_1">Viktoria Plzen</td>
<td>477</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/CZE.gif" alt="Czech Republic">  CZE</td>
<td>First Division</td>
<td>1M</td>
<td>Professional</td>
<td>11,700</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#E00000"></span></td>
<td>1911</td>
<td>26.3</td>
</tr><tr role="row" class="odd">
<td id="478" class="sorting_1">Viktoria Zizkov</td>
<td>478</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/CZE.gif" alt="Czech Republic">  CZE</td>
<td>Second Division</td>
<td>160K</td>
<td>Professional</td>
<td>5,334</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#E00000"></span></td>
<td>1903</td>
<td>25.1</td>
</tr><tr role="row" class="even">
<td id="107236" class="sorting_1">VIL</td>
<td>107236</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/BRA.gif" alt="Brazil">  BRA</td>
<td>Second Division</td>
<td>12K</td>
<td>Professional</td>
<td>54,049</td>
<td><span class="label" style="background:#282890"></span> <span class="label" style="background:#F8F8F8"></span></td>
<td>1943</td>
<td>27.8</td>
</tr><tr role="row" class="odd">
<td id="952724" class="sorting_1">Villa Dalmine</td>
<td>952724</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/ARG.gif" alt="Argentina">  ARG</td>
<td>Second Division</td>
<td>11K</td>
<td>Professional</td>
<td>8,000</td>
<td><span class="label" style="background:#584898"></span> <span class="label" style="background:#8070C8"></span></td>
<td>1957</td>
<td>28.3</td>
</tr><tr role="row" class="even">
<td id="130851" class="sorting_1">Villa Espanola</td>
<td>130851</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/URU.gif" alt="Uruguay">  URU</td>
<td>First Division</td>
<td>691</td>
<td>Professional</td>
<td>3,700</td>
<td><span class="label" style="background:#E8E010"></span> <span class="label" style="background:#E00000"></span></td>
<td>1952</td>
<td>26.3</td>
</tr><tr role="row" class="odd">
<td id="78012164" class="sorting_1">Villa Teresa</td>
<td>78012164</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/URU.gif" alt="Uruguay">  URU</td>
<td>Second Division</td>
<td>0</td>
<td>Professional</td>
<td>7,320</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#E00000"></span></td>
<td>1942</td>
<td>24.8</td>
</tr><tr role="row" class="even">
<td id="1423" class="sorting_1">Vindbjart</td>
<td>1423</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/NOR.gif" alt="Norway">  NOR</td>
<td>Second Division Group 4</td>
<td>5K</td>
<td>Semi-Professional</td>
<td>3,000</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#0030A0"></span></td>
<td>1997</td>
<td>23.1</td>
</tr><tr role="row" class="odd">
<td id="292" class="sorting_1">Virton</td>
<td>292</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/BEL.gif" alt="Belgium">  BEL</td>
<td>First Division</td>
<td>0</td>
<td>Semi-Professional</td>
<td>4,087</td>
<td><span class="label" style="background:#00C030"></span> <span class="label" style="background:#F8F8F8"></span></td>
<td>1922</td>
<td>23.0</td>
</tr><tr role="row" class="even">
<td id="340" class="sorting_1">VIT</td>
<td>340</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/BRA.gif" alt="Brazil">  BRA</td>
<td>First Division</td>
<td>238K</td>
<td>Professional</td>
<td>38,000</td>
<td><span class="label" style="background:#006030"></span> <span class="label" style="background:#F8F8F8"></span></td>
<td>1899</td>
<td>25.3</td>
</tr><tr role="row" class="odd">
<td id="130877" class="sorting_1">Vitebsk</td>
<td>130877</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/BLR.gif" alt="Belarus">  BLR</td>
<td>Highest League</td>
<td>23K</td>
<td>Professional</td>
<td>8,144</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#0050D0"></span></td>
<td>1960</td>
<td>26.3</td>
</tr><tr role="row" class="even">
<td id="1046" class="sorting_1">Vitesse</td>
<td>1046</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/NED.gif" alt="Holland">  NED</td>
<td>Eredivisie</td>
<td>1M</td>
<td>Professional</td>
<td>25,500</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F8D800"></span></td>
<td>1892</td>
<td>23.8</td>
</tr><tr role="row" class="odd">
<td id="136152" class="sorting_1">Vitkovice</td>
<td>136152</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/CZE.gif" alt="Czech Republic">  CZE</td>
<td>Second Division</td>
<td>80K</td>
<td>Professional</td>
<td>15,275</td>
<td><span class="label" style="background:#0050D0"></span> <span class="label" style="background:#0050D0"></span></td>
<td>1919</td>
<td>24.4</td>
</tr><tr role="row" class="even">
<td id="7508865" class="sorting_1">Vitosha Bistritsa</td>
<td>7508865</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/BUL.gif" alt="Bulgaria">  BUL</td>
<td>Second League</td>
<td>10K</td>
<td>Professional</td>
<td>2,000</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#48A068"></span></td>
<td>1958</td>
<td>26.6</td>
</tr><tr role="row" class="odd">
<td id="25001307" class="sorting_1">Vlasim</td>
<td>25001307</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/CZE.gif" alt="Czech Republic">  CZE</td>
<td>Second Division</td>
<td>160K</td>
<td>Professional</td>
<td>1,200</td>
<td><span class="label" style="background:#0050D0"></span> <span class="label" style="background:#0050D0"></span></td>
<td>1969</td>
<td>23.5</td>
</tr><tr role="row" class="even">
<td id="1957" class="sorting_1">Vojvodina</td>
<td>1957</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/SRB.gif" alt="Serbia">  SRB</td>
<td>SuperLeague</td>
<td>431K</td>
<td>Professional</td>
<td>14,458</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#E00000"></span></td>
<td>1914</td>
<td>24.2</td>
</tr><tr role="row" class="odd">
<td id="1011" class="sorting_1">Volendam</td>
<td>1011</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/NED.gif" alt="Holland">  NED</td>
<td>Jupiler League</td>
<td>43K</td>
<td>Professional</td>
<td>7,200</td>
<td><span class="label" style="background:#E87828"></span> <span class="label" style="background:#E06818"></span></td>
<td>1920</td>
<td>23.6</td>
</tr><tr role="row" class="even">
<td id="130515" class="sorting_1">Volgar</td>
<td>130515</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/RUS.gif" alt="Russia">  RUS</td>
<td>First Division</td>
<td>48K</td>
<td>Professional</td>
<td>17,712</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F8F8F8"></span></td>
<td>1960</td>
<td>23.5</td>
</tr><tr role="row" class="odd">
<td id="1901" class="sorting_1">Volyn</td>
<td>1901</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/UKR.gif" alt="Ukraine">  UKR</td>
<td>Premier League</td>
<td>77K</td>
<td>Professional</td>
<td>11,345</td>
<td><span class="label" style="background:#B00000"></span> <span class="label" style="background:#F8F8F8"></span></td>
<td>1960</td>
<td>22.9</td>
</tr><tr role="row" class="even">
<td id="1301293" class="sorting_1">Vorskla</td>
<td>1301293</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/UKR.gif" alt="Ukraine">  UKR</td>
<td>Premier League</td>
<td>15K</td>
<td>Professional</td>
<td>24,855</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#006030"></span></td>
<td>1955</td>
<td>26.1</td>
</tr><tr role="row" class="odd">
<td id="5744631" class="sorting_1">Vozdovac</td>
<td>5744631</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/SRB.gif" alt="Serbia">  SRB</td>
<td>SuperLeague</td>
<td>129K</td>
<td>Professional</td>
<td>5,200</td>
<td><span class="label" style="background:#E00000"></span> <span class="label" style="background:#F8F8F8"></span></td>
<td>1912</td>
<td>25.0</td>
</tr><tr role="row" class="even">
<td id="1300376" class="sorting_1">VPS</td>
<td>1300376</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/FIN.gif" alt="Finland">  FIN</td>
<td>Premier League</td>
<td>9K</td>
<td>Professional</td>
<td>5,900</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#000000"></span></td>
<td>1924</td>
<td>24.7</td>
</tr><tr role="row" class="odd">
<td id="27128372" class="sorting_1">VSK Aarhus</td>
<td>27128372</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/DEN.gif" alt="Denmark">  DEN</td>
<td>Second Division</td>
<td>0</td>
<td>Amateur</td>
<td>1,000</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
<td>2016</td>
<td>22.4</td>
</tr><tr role="row" class="even">
<td id="1044" class="sorting_1">VVV</td>
<td>1044</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/NED.gif" alt="Holland">  NED</td>
<td>Jupiler League</td>
<td>431K</td>
<td>Professional</td>
<td>8,000</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F8F000"></span></td>
<td>1903</td>
<td>22.3</td>
</tr><tr role="row" class="odd">
<td id="215" class="sorting_1">VW Hamme</td>
<td>215</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/BEL.gif" alt="Belgium">  BEL</td>
<td>First Division</td>
<td>0</td>
<td>Semi-Professional</td>
<td>6,000</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#0050D0"></span></td>
<td>1908</td>
<td>23.5</td>
</tr><tr role="row" class="even">
<td id="539089" class="sorting_1">Waasland-Beveren</td>
<td>539089</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/BEL.gif" alt="Belgium">  BEL</td>
<td>Pro League</td>
<td>0</td>
<td>Professional</td>
<td>13,290</td>
<td><span class="label" style="background:#0050D0"></span> <span class="label" style="background:#F8F000"></span></td>
<td>1936</td>
<td>22.9</td>
</tr><tr role="row" class="odd">
<td id="1926" class="sorting_1">Wanderers</td>
<td>1926</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/URU.gif" alt="Uruguay">  URU</td>
<td>First Division</td>
<td>6K</td>
<td>Professional</td>
<td>9,064</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F8F8F8"></span></td>
<td>1902</td>
<td>23.4</td>
</tr><tr role="row" class="even">
<td id="1900709" class="sorting_1">Warrenpoint</td>
<td>1900709</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/NIR.gif" alt="N.Ireland">  NIR</td>
<td>NIFL C1</td>
<td>0</td>
<td>Semi-Professional</td>
<td>2,000</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#60C0F8"></span></td>
<td>1987</td>
<td>25.2</td>
</tr><tr role="row" class="odd">
<td id="120533" class="sorting_1">Waterford Utd</td>
<td>120533</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/IRL.gif" alt="Ireland">  IRL</td>
<td>First Division</td>
<td>0</td>
<td>Semi-Professional</td>
<td>8,000</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#0050D0"></span></td>
<td>1930</td>
<td>20.8</td>
</tr><tr role="row" class="even">
<td id="121208" class="sorting_1">Wehen</td>
<td>121208</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/GER.gif" alt="Germany">  GER</td>
<td>Third Division</td>
<td>0</td>
<td>Professional</td>
<td>12,566</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
<td>1926</td>
<td>24.7</td>
</tr><tr role="row" class="odd">
<td id="15004168" class="sorting_1">Wellington Phoenix</td>
<td>15004168</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/AUS.gif" alt="Australia">  AUS</td>
<td>Hyundai A-League</td>
<td>113K</td>
<td>Professional</td>
<td>34,500</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F8F000"></span></td>
<td>2007</td>
<td>24.5</td>
</tr><tr role="row" class="even">
<td id="289" class="sorting_1">Westerlo</td>
<td>289</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/BEL.gif" alt="Belgium">  BEL</td>
<td>Pro League</td>
<td>0</td>
<td>Professional</td>
<td>7,783</td>
<td><span class="label" style="background:#0050D0"></span> <span class="label" style="background:#E8F800"></span></td>
<td>1933</td>
<td>25.7</td>
</tr><tr role="row" class="odd">
<td id="15035999" class="sorting_1">Western Sydney Wanderers</td>
<td>15035999</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/AUS.gif" alt="Australia">  AUS</td>
<td>Hyundai A-League</td>
<td>147K</td>
<td>Professional</td>
<td>24,000</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#E00000"></span></td>
<td>2012</td>
<td>25.8</td>
</tr><tr role="row" class="even">
<td id="156640" class="sorting_1">Wexford Youths</td>
<td>156640</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/IRL.gif" alt="Ireland">  IRL</td>
<td>Premier Division</td>
<td>0</td>
<td>Semi-Professional</td>
<td>2,500</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
<td>2007</td>
<td>25.1</td>
</tr><tr role="row" class="odd">
<td id="722097" class="sorting_1">Wigry</td>
<td>722097</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/POL.gif" alt="Poland">  POL</td>
<td>First Division</td>
<td>10K</td>
<td>Professional</td>
<td>2,910</td>
<td><span class="label" style="background:#0050D0"></span> <span class="label" style="background:#F8F8F8"></span></td>
<td>1947</td>
<td>24.8</td>
</tr><tr role="row" class="even">
<td id="130820" class="sorting_1">Wil</td>
<td>130820</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/SUI.gif" alt="Switzerland">  SUI</td>
<td>Challenge League</td>
<td>40K</td>
<td>Professional</td>
<td>6,000</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F8F8F8"></span></td>
<td>1900</td>
<td>25.7</td>
</tr><tr role="row" class="odd">
<td id="1047" class="sorting_1">Willem II</td>
<td>1047</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/NED.gif" alt="Holland">  NED</td>
<td>Eredivisie</td>
<td>65K</td>
<td>Professional</td>
<td>14,500</td>
<td><span class="label" style="background:#202838"></span> <span class="label" style="background:#F8F8F8"></span></td>
<td>1896</td>
<td>24.3</td>
</tr><tr role="row" class="even">
<td id="1200101" class="sorting_1">Winterthur</td>
<td>1200101</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/SUI.gif" alt="Switzerland">  SUI</td>
<td>Challenge League</td>
<td>40K</td>
<td>Professional</td>
<td>9,464</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#E00000"></span></td>
<td>1896</td>
<td>23.6</td>
</tr><tr role="row" class="odd">
<td id="1300881" class="sorting_1">Wisla</td>
<td>1300881</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/POL.gif" alt="Poland">  POL</td>
<td>LOTTO Ekstraklasa</td>
<td>120K</td>
<td>Professional</td>
<td>33,130</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#C80000"></span></td>
<td>1906</td>
<td>26.2</td>
</tr><tr role="row" class="even">
<td id="96023666" class="sorting_1">Wisla Pulawy</td>
<td>96023666</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/POL.gif" alt="Poland">  POL</td>
<td>First Division</td>
<td>31K</td>
<td>Professional</td>
<td>4,418</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
<td>1923</td>
<td>25.2</td>
</tr><tr role="row" class="odd">
<td id="5682613" class="sorting_1">Witbank Spurs</td>
<td>5682613</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/RSA.gif" alt="South Africa">  RSA</td>
<td>National First Division</td>
<td>99K</td>
<td>Professional</td>
<td>35,000</td>
<td><span class="label" style="background:#60C0F8"></span> <span class="label" style="background:#F08000"></span></td>
<td>2000</td>
<td>24.3</td>
</tr><tr role="row" class="even">
<td id="130763" class="sorting_1">Wits</td>
<td>130763</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/RSA.gif" alt="South Africa">  RSA</td>
<td>South African Premiership</td>
<td>847K</td>
<td>Professional</td>
<td>5,515</td>
<td><span class="label" style="background:#0030A0"></span> <span class="label" style="background:#F8F8F8"></span></td>
<td>1922</td>
<td>27.2</td>
</tr><tr role="row" class="odd">
<td id="137925" class="sorting_1">Wohlen</td>
<td>137925</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/SUI.gif" alt="Switzerland">  SUI</td>
<td>Challenge League</td>
<td>40K</td>
<td>Professional</td>
<td>3,734</td>
<td><span class="label" style="background:#002060"></span> <span class="label" style="background:#F8F8F8"></span></td>
<td>1904</td>
<td>23.6</td>
</tr><tr role="row" class="even">
<td id="16034828" class="sorting_1">Wolfsberger AC</td>
<td>16034828</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/AUT.gif" alt="Austria">  AUT</td>
<td>Premier Division</td>
<td>0</td>
<td>Professional</td>
<td>8,100</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#000000"></span></td>
<td>1931</td>
<td>27.0</td>
</tr><tr role="row" class="odd">
<td id="961" class="sorting_1">Wolfsburg</td>
<td>961</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/GER.gif" alt="Germany">  GER</td>
<td>First Division</td>
<td>26M</td>
<td>Professional</td>
<td>30,000</td>
<td><span class="label" style="background:#A0F070"></span> <span class="label" style="background:#A0F070"></span></td>
<td>1945</td>
<td>24.9</td>
</tr><tr role="row" class="even">
<td id="8150905" class="sorting_1">WS Bruxelles</td>
<td>8150905</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/BEL.gif" alt="Belgium">  BEL</td>
<td>First Division</td>
<td>0</td>
<td>Professional</td>
<td>12,434</td>
<td><span class="label" style="background:#F08000"></span> <span class="label" style="background:#F08000"></span></td>
<td>1947</td>
<td>22.2</td>
</tr><tr role="row" class="odd">
<td id="136550" class="sorting_1">WSG Wattens</td>
<td>136550</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/AUT.gif" alt="Austria">  AUT</td>
<td>First Division</td>
<td>3K</td>
<td>Professional</td>
<td>5,500</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#287850"></span></td>
<td>1930</td>
<td>24.3</td>
</tr><tr role="row" class="even">
<td id="23165273" class="sorting_1">Wuhan</td>
<td>23165273</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/CHN.gif" alt="China">  CHN</td>
<td>First Division</td>
<td>230K</td>
<td>Professional</td>
<td>32,203</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F84000"></span></td>
<td>2009</td>
<td>26.7</td>
</tr><tr role="row" class="odd">
<td id="8709077" class="sorting_1">Wurzburg</td>
<td>8709077</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/GER.gif" alt="Germany">  GER</td>
<td>Second Division</td>
<td>43K</td>
<td>Professional</td>
<td>14,500</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#E81020"></span></td>
<td>1907</td>
<td>26.1</td>
</tr><tr role="row" class="even">
<td id="985" class="sorting_1">Xanthi</td>
<td>985</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/GRE.gif" alt="Greece">  GRE</td>
<td>Superleague</td>
<td>17K</td>
<td>Professional</td>
<td>7,244</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
<td>1967</td>
<td>24.9</td>
</tr><tr role="row" class="odd">
<td id="23025595" class="sorting_1">Xiangtao</td>
<td>23025595</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/CHN.gif" alt="China">  CHN</td>
<td>First Division</td>
<td>58K</td>
<td>Professional</td>
<td>30,000</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#E00000"></span></td>
<td>2007</td>
<td>27.1</td>
</tr><tr role="row" class="even">
<td id="136021" class="sorting_1">Xolos Tijuana</td>
<td>136021</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/MEX.gif" alt="Mexico">  MEX</td>
<td>First Division</td>
<td>5M</td>
<td>Professional</td>
<td>27,333</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#E00000"></span></td>
<td>2007</td>
<td>26.1</td>
</tr><tr role="row" class="odd">
<td id="130378" class="sorting_1">Y. Malatyaspor</td>
<td>130378</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/TUR.gif" alt="Turkey">  TUR</td>
<td>1. League</td>
<td>14K</td>
<td>Professional</td>
<td>13,020</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
<td>1986</td>
<td>26.7</td>
</tr><tr role="row" class="even">
<td id="41006729" class="sorting_1">Yahukimo FC</td>
<td>41006729</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/IDN.gif" alt="Indonesia">  IDN</td>
<td>Premier Division</td>
<td>7K</td>
<td>Professional</td>
<td>15,000</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#002080"></span></td>
<td>2006</td>
<td>24.8</td>
</tr><tr role="row" class="odd">
<td id="115946" class="sorting_1">Yanbian</td>
<td>115946</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/CHN.gif" alt="China">  CHN</td>
<td>Super League</td>
<td>806K</td>
<td>Professional</td>
<td>30,000</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#E00000"></span></td>
<td>1994</td>
<td>25.7</td>
</tr><tr role="row" class="even">
<td id="58066512" class="sorting_1">Yenisey</td>
<td>58066512</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/RUS.gif" alt="Russia">  RUS</td>
<td>First Division</td>
<td>0</td>
<td>Professional</td>
<td>26,000</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
<td>1937</td>
<td>26.4</td>
</tr><tr role="row" class="odd">
<td id="23325085" class="sorting_1">Yifang</td>
<td>23325085</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/CHN.gif" alt="China">  CHN</td>
<td>First Division</td>
<td>806K</td>
<td>Professional</td>
<td>60,000</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#0030A0"></span></td>
<td>2009</td>
<td>25.9</td>
</tr><tr role="row" class="even">
<td id="131225" class="sorting_1">Yiteng</td>
<td>131225</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/CHN.gif" alt="China">  CHN</td>
<td>First Division</td>
<td>35K</td>
<td>Professional</td>
<td>40,000</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#0050D0"></span></td>
<td>1994</td>
<td>27.2</td>
</tr><tr role="row" class="odd">
<td id="23194491" class="sorting_1">Yongchang</td>
<td>23194491</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/CHN.gif" alt="China">  CHN</td>
<td>Super League</td>
<td>2M</td>
<td>Professional</td>
<td>30,000</td>
<td><span class="label" style="background:#F8B000"></span> <span class="label" style="background:#002060"></span></td>
<td>2012</td>
<td>28.2</td>
</tr><tr role="row" class="even">
<td id="1847" class="sorting_1">Young Boys</td>
<td>1847</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/SUI.gif" alt="Switzerland">  SUI</td>
<td>Super League</td>
<td>792K</td>
<td>Professional</td>
<td>32,000</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F8D828"></span></td>
<td>1895</td>
<td>25.2</td>
</tr><tr role="row" class="odd">
<td id="319160" class="sorting_1">YPI</td>
<td>319160</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/BRA.gif" alt="Brazil">  BRA</td>
<td>Third Division</td>
<td>0</td>
<td>Professional</td>
<td>30,000</td>
<td><span class="label" style="background:#F8F000"></span> <span class="label" style="background:#002080"></span></td>
<td>1924</td>
<td>27.6</td>
</tr><tr role="row" class="even">
<td id="136020" class="sorting_1">Zacatepec</td>
<td>136020</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/MEX.gif" alt="Mexico">  MEX</td>
<td>Promotion League</td>
<td>154K</td>
<td>Professional</td>
<td>24,443</td>
<td><span class="label" style="background:#006030"></span> <span class="label" style="background:#F8F8F8"></span></td>
<td>1954</td>
<td>27.4</td>
</tr><tr role="row" class="odd">
<td id="129585" class="sorting_1">Zaglebie Sosnowiec</td>
<td>129585</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/POL.gif" alt="Poland">  POL</td>
<td>First Division</td>
<td>16K</td>
<td>Professional</td>
<td>5,750</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#F8F8F8"></span></td>
<td>1906</td>
<td>24.8</td>
</tr><tr role="row" class="even">
<td id="444" class="sorting_1">Zagreb</td>
<td>444</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/CRO.gif" alt="Croatia">  CRO</td>
<td>Second League</td>
<td>17K</td>
<td>Professional</td>
<td>8,850</td>
<td><span class="label" style="background:#E00000"></span> <span class="label" style="background:#F8F8F8"></span></td>
<td>1903</td>
<td>21.6</td>
</tr><tr role="row" class="odd">
<td id="64000339" class="sorting_1">Zavrc</td>
<td>64000339</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/SVN.gif" alt="Slovenia">  SVN</td>
<td>Second League</td>
<td>60K</td>
<td>Professional</td>
<td>962</td>
<td><span class="label" style="background:#00A030"></span> <span class="label" style="background:#F8F8F8"></span></td>
<td>1969</td>
<td>19.9</td>
</tr><tr role="row" class="even">
<td id="1949" class="sorting_1">Zemun</td>
<td>1949</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/SRB.gif" alt="Serbia">  SRB</td>
<td>First League</td>
<td>52K</td>
<td>Professional</td>
<td>10,000</td>
<td><span class="label" style="background:#00A030"></span> <span class="label" style="background:#002080"></span></td>
<td>1945</td>
<td>27.5</td>
</tr><tr role="row" class="odd">
<td id="1301108" class="sorting_1">Zenit</td>
<td>1301108</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/RUS.gif" alt="Russia">  RUS</td>
<td>Premier Division</td>
<td>26M</td>
<td>Professional</td>
<td>21,110</td>
<td><span class="label" style="background:#0050D0"></span> <span class="label" style="background:#0098E0"></span></td>
<td>1925</td>
<td>26.3</td>
</tr><tr role="row" class="even">
<td id="495359" class="sorting_1">Zenit-2</td>
<td>495359</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/RUS.gif" alt="Russia">  RUS</td>
<td>First Division</td>
<td>0</td>
<td>Professional</td>
<td>3,033</td>
<td><span class="label" style="background:#2850A0"></span> <span class="label" style="background:#60A0D0"></span></td>
<td>0</td>
<td>22.3</td>
</tr><tr role="row" class="odd">
<td id="17012003" class="sorting_1">Zheldor</td>
<td>17012003</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/BLR.gif" alt="Belarus">  BLR</td>
<td>First League</td>
<td>0</td>
<td>Professional</td>
<td>800</td>
<td><span class="label" style="background:#0050D0"></span> <span class="label" style="background:#F8F8F8"></span></td>
<td>2008</td>
<td>30.2</td>
</tr><tr role="row" class="even">
<td id="23025593" class="sorting_1">Zhicheng</td>
<td>23025593</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/CHN.gif" alt="China">  CHN</td>
<td>First Division</td>
<td>12K</td>
<td>Professional</td>
<td>52,888</td>
<td><span class="label" style="background:#E00000"></span> <span class="label" style="background:#F8F8F8"></span></td>
<td>2005</td>
<td>26.7</td>
</tr><tr role="row" class="odd">
<td id="23291989" class="sorting_1">Zhongyou</td>
<td>23291989</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/CHN.gif" alt="China">  CHN</td>
<td>First Division</td>
<td>58K</td>
<td>Professional</td>
<td>60,000</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F8F838"></span></td>
<td>2011</td>
<td>26.7</td>
</tr><tr role="row" class="even">
<td id="1620" class="sorting_1">Zilina</td>
<td>1620</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/SVK.gif" alt="Slovakia">  SVK</td>
<td>First Division</td>
<td>258K</td>
<td>Professional</td>
<td>11,310</td>
<td><span class="label" style="background:#008030"></span> <span class="label" style="background:#F8F000"></span></td>
<td>1908</td>
<td>23.7</td>
</tr><tr role="row" class="odd">
<td id="71005232" class="sorting_1">Zirka</td>
<td>71005232</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/UKR.gif" alt="Ukraine">  UKR</td>
<td>Premier League</td>
<td>1K</td>
<td>Professional</td>
<td>14,000</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#F8F000"></span></td>
<td>1911</td>
<td>26.0</td>
</tr><tr role="row" class="even">
<td id="7560050" class="sorting_1">Zlate Moravce</td>
<td>7560050</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/SVK.gif" alt="Slovakia">  SVK</td>
<td>First Division</td>
<td>43K</td>
<td>Professional</td>
<td>3,787</td>
<td><span class="label" style="background:#082040"></span> <span class="label" style="background:#E00000"></span></td>
<td>1995</td>
<td>24.3</td>
</tr><tr role="row" class="odd">
<td id="467" class="sorting_1">Zlin</td>
<td>467</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/CZE.gif" alt="Czech Republic">  CZE</td>
<td>First Division</td>
<td>239K</td>
<td>Professional</td>
<td>5,783</td>
<td><span class="label" style="background:#F8F000"></span> <span class="label" style="background:#F8F000"></span></td>
<td>1919</td>
<td>24.5</td>
</tr><tr role="row" class="even">
<td id="714240" class="sorting_1">Znicz Pruszkow</td>
<td>714240</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/POL.gif" alt="Poland">  POL</td>
<td>First Division</td>
<td>25K</td>
<td>Professional</td>
<td>1,977</td>
<td><span class="label" style="background:#E00000"></span> <span class="label" style="background:#F8F000"></span></td>
<td>1923</td>
<td>24.8</td>
</tr><tr role="row" class="odd">
<td id="136289" class="sorting_1">Znojmo</td>
<td>136289</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/CZE.gif" alt="Czech Republic">  CZE</td>
<td>Second Division</td>
<td>239K</td>
<td>Professional</td>
<td>2,599</td>
<td><span class="label" style="background:#0030A0"></span> <span class="label" style="background:#F8F8F8"></span></td>
<td>1953</td>
<td>24.3</td>
</tr><tr role="row" class="even">
<td id="70061827" class="sorting_1">Zonguldak Komurspor</td>
<td>70061827</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/TUR.gif" alt="Turkey">  TUR</td>
<td>2. League White</td>
<td>0</td>
<td>Professional</td>
<td>13,795</td>
<td><span class="label" style="background:#E00000"></span> <span class="label" style="background:#002060"></span></td>
<td>1986</td>
<td>25.8</td>
</tr><tr role="row" class="odd">
<td id="1902" class="sorting_1">Zorya</td>
<td>1902</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/UKR.gif" alt="Ukraine">  UKR</td>
<td>Premier League</td>
<td>77K</td>
<td>Professional</td>
<td>11,756</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#000000"></span></td>
<td>1923</td>
<td>25.3</td>
</tr><tr role="row" class="even">
<td id="1068" class="sorting_1">ZTE</td>
<td>1068</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/HUN.gif" alt="Hungary">  HUN</td>
<td>Division II</td>
<td>0</td>
<td>Professional</td>
<td>13,870</td>
<td><span class="label" style="background:#0050D0"></span> <span class="label" style="background:#F8F8F8"></span></td>
<td>1920</td>
<td>22.1</td>
</tr><tr role="row" class="odd">
<td id="299" class="sorting_1">Zulte Waregem</td>
<td>299</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/BEL.gif" alt="Belgium">  BEL</td>
<td>Pro League</td>
<td>0</td>
<td>Professional</td>
<td>11,000</td>
<td><span class="label" style="background:#006030"></span> <span class="label" style="background:#A00000"></span></td>
<td>1950</td>
<td>25.0</td>
</tr><tr role="row" class="even">
<td id="1854" class="sorting_1">Zurich</td>
<td>1854</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/SUI.gif" alt="Switzerland">  SUI</td>
<td>Challenge League</td>
<td>792K</td>
<td>Professional</td>
<td>25,000</td>
<td><span class="label" style="background:#000000"></span> <span class="label" style="background:#000000"></span></td>
<td>1896</td>
<td>26.5</td>
</tr><tr role="row" class="odd">
<td id="485662" class="sorting_1">Zvezda-BGU</td>
<td>485662</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/BLR.gif" alt="Belarus">  BLR</td>
<td>First League</td>
<td>12K</td>
<td>Professional</td>
<td>1,600</td>
<td><span class="label" style="background:#F8F8F8"></span> <span class="label" style="background:#082040"></span></td>
<td>1995</td>
<td>20.0</td>
</tr><tr role="row" class="even">
<td id="63010804" class="sorting_1">Zvolen</td>
<td>63010804</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/SVK.gif" alt="Slovakia">  SVK</td>
<td>Second Division</td>
<td>4K</td>
<td>Professional</td>
<td>1,870</td>
<td><span class="label" style="background:#F00000"></span> <span class="label" style="background:#F8F8F8"></span></td>
<td>1901</td>
<td>23.5</td>
</tr><tr role="row" class="odd">
<td id="965" class="sorting_1">Zwickau</td>
<td>965</td>
<td><img src="http://www.fmscout.com/modules/fmsdb/img/flags//s/GER.gif" alt="Germany">  GER</td>
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
			"iDisplayLength": -1,
			"lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]],

		});

		/*$('#FM td:first-child').each(function() {
			var id=$(this).attr('id');
			$('#'+id).after('<td>'+id+'</td>');
			console.log($(this).attr('id'));
		});*/



	} );

				//upload_table('2017-08-22','man');
//https://chrome.google.com/webstore/detail/allow-control-allow-origi/nlfbmbojpeacfghkpbjhddihlkkiljbi?hl=es-419&utm_source=chrome-ntp-launcher
</script>
</html>
