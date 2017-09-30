<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sync extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->User->check();
		$this->User->is_admin();
		ini_set('memory_limit','16000000M');
		set_time_limit(0);
	}

	public function syncScores(){

		$scores = array();
		$pendientes=$this->Partido->getAllPartidos('','','Score');
		foreach ($pendientes as $key => $row) {
			$getScore                     = $this->Request->getScores($row->ID_PARTIDO);
			$status                    = $this->Request->getStatus($row->ID_PARTIDO);
			if ($getScore!=null and $status!=null) {
				$score                     = explode(':', $getScore['EventScore']);
				$this->Partido->ID_PARTIDO = $row->ID_PARTIDO;
				$this->Partido->SCORE_1    = $score[0];
				$this->Partido->SCORE_2    = $score[1];
				$this->Partido->ESTADO     = $status['result'];
				$this->Partido->setScore();
				array_push($scores,  
					array(
						'PARTIDO' => $row->LOCAL.' vs... '.$row->VISITANTE ,
						'FECHA' => $row->FECHA ,
						'HORARIO' => $row->HORARIO ,
						'ESTADO' => $status['result'] ,
						'MARCADOR' => $getScore['EventScore'] ,
						));
			}
		}
		$data = array(
			'scores' => $scores
			);
		$this->load->view('sync/index', $data);
	}

	public function syncBets(){
		$arrayApuestas = array();
		$apuestas=$this->Apuesta->index();

		foreach ($apuestas as $key => $rowApuesta) {
			$id_apuesta=$rowApuesta->ID_APUESTA;
			$this->DetalleApuesta->ID_APUESTA=$id_apuesta;
			$estadoApuesta="GANADOR";
			$detalle=$this->DetalleApuesta->getDetalleByApuesta();
			foreach ($detalle as $key => $rowDetalle) {
				#Cuota
				$id_cuota= $rowDetalle->ID_CUOTA;
				$this->Cuota->ID_CUOTA=$id_cuota;
				$cuota=$this->Cuota->getCuota('');
				$cuota_seleccionada = $cuota[0]->NOMBRE;

				#Partido
				$id_partido = $cuota[0]->ID_PARTIDO;
				$this->Partido->ID_PARTIDO=$id_partido;
				$partido=$this->Partido->getPartido();

				$estado_partido=$partido[0]->ESTADO;
				$score_1=$partido[0]->SCORE_1;
				$score_2=$partido[0]->SCORE_2;
				$totalGoles=$score_1+$score_2;
				$odd='PERDEDOR';

				if ($estado_partido=="Finished") {

					switch ($cuota_seleccionada) {
						case '_1':
						if ($score_1>$score_2) {  
							$odd='GANADOR';
						} else {
							$odd='PERDEDOR';
						}
						break;
						case '_X':
						if ($score_1==$score_2) {  
							$odd='GANADOR';
						} else {
							$odd='PERDEDOR';
						}
						break;
						case '_2':
						if ($score_1<$score_2) {  
							$odd='GANADOR';
						} else {
							$odd='PERDEDOR';
						}
						break;
						case 'under':
						if ($totalGoles<=2) {  
							$odd='GANADOR';
						} else {
							$odd='PERDEDOR';
						}
						break;
						case 'over':
						if ($totalGoles>2) {  
							$odd='GANADOR';
						} else {
							$odd='PERDEDOR';
						}
						break;
						case '_1X':
						if ($score_1>$score_2 || $score_1==$score_2) {  
							$odd='GANADOR';
						} else {
							$odd='PERDEDOR';
						}
						break;
						case '_2X':
						if ($score_1<$score_2  || $score_1==$score_2) {  
							$odd='GANADOR';
						} else {
							$odd='PERDEDOR';
						}
						break;
						case '_12':
						if ($score_1!=$score_2) {  
							$odd='GANADOR';
						} else {
							$odd='PERDEDOR';
						}
						break;
						case '_1HT':

						break;
						case '_XHT':

						break;
						case '_2HT':

						break;
						case 'GG':
						if ($score_1> 0 && $score_2>0) {  
							$odd='GANADOR';
						} else {
							$odd='PERDEDOR';
						}
						break;
						case 'NG':
						if ($score_1== 0 || $score_2==0) {  
							$odd='GANADOR';
						} else {
							$odd='PERDEDOR';
						}
						break;

					}
				}

				// SE ACTUALIZA DETALLE DE CADA APUESTA POR QUE SON MENOS QUE TODAS LAS OODS DEL SISTEMA
				$this->DetalleApuesta->ID_DETALLE=$rowDetalle->ID_DETALLE;
				$this->DetalleApuesta->setResultado($odd);

				if ($odd=="PERDEDOR") {
					$estadoApuesta="PERDEDOR";
				}
				
			}
			$this->Apuesta->ID_APUESTA=$rowApuesta->ID_APUESTA; 
			$this->Apuesta->setResultado($estadoApuesta);

			array_push($arrayApuestas,  
				array(
					'RESULTADO' => $estadoApuesta ,
					'FECHA' => $rowApuesta->FECHA ,
					'NRO_EVENTOS' => $rowApuesta->NRO_EVENTOS ,
					'GANANCIA' => $rowApuesta->GANANCIA ,
					'VALOR' => $rowApuesta->VALOR ,
					'ESTADO' => $rowApuesta->ESTADO ,
					));
			//print_r($arrayApuestas); exit();
		} //if apuestas

		$data = array(
			'apuestas' => $arrayApuestas
			);
		$this->load->view('sync/apuestas', $data);

	}


	public function syncDetalles(){
		$scores = array();
		$pendientes=$this->Partido->getAllPartidos('','','Score');
		foreach ($pendientes as $key => $row) {
			$getScore                     = $this->Request->getScores($row->ID_PARTIDO);
			$status                    = $this->Request->getStatus($row->ID_PARTIDO);
			if ($getScore!=null and $status!=null) {
				$score                     = explode(':', $getScore['EventScore']);
				$this->Partido->ID_PARTIDO = $row->ID_PARTIDO;
				$this->Partido->SCORE_1    = $score[0];
				$this->Partido->SCORE_2    = $score[1];
				$this->Partido->ESTADO     = $status['result'];
				$this->Partido->setScore();
				array_push($scores,  
					array(
						'PARTIDO' => $row->LOCAL.' vs... '.$row->VISITANTE ,
						'FECHA' => $row->FECHA ,
						'HORARIO' => $row->HORARIO ,
						'ESTADO' => $status['result'] ,
						'MARCADOR' => $getScore['EventScore'] ,
						));
			}
		}
		$data = array(
			'scores' => $scores
			);
		$this->load->view('sync/index', $data);
	}

	/*******************************************************/
	/*                        API                          */
	/*******************************************************/

	public function syncMatches(){
		$this->Request->FECHA=5;  
		$matches=$this->Request->getMatches();  
		#echo count($matches);  
		#print_r($matches); exit();
		if (count($matches)>0) {
			foreach ($matches as $key => $row) {
				if (isset($row['id_torneo']) or $row['id_torneo']!='') {
				//print_r($row); exit();
				# AGREGAMOS PAISES
					$this->Pais->ID_PAIS = $row['id_country'];
					$this->Pais->NOMBRE  = $row['name_country'];
					$pais=$this->Pais->getPais();
					if ($pais==null) {
					#echo "<b>add</b> ".$row['name_country']."<br>";
						$this->Pais->add();
					} 
				# AGREGAMOS COMPETENCIA-> Si no existe
					$this->Competencia->ID_COMPETENCIA  = $row['id_torneo'];
					$this->Competencia->ID_PAIS         = $row['id_country'];
					$this->Competencia->NOMBRE          = $row['name_torne'];
					$compe=$this->Competencia->getCompe();
					if ($compe==null) {
					#echo "<b>add</b> ".$row['name_torne']."<br>";
						$this->Competencia->add();
					}

				# AGREGAMOS EQUIPO LOCAL-> Si no existe
					$this->Equipo->ID_EQUIPO = $row['id_l'];
					$this->Equipo->NOMBRE    = $row['l'];
					$this->Equipo->ID_PAIS   = $row['id_country'];
					$local=$this->Equipo->getEquipo();
					if ($local==null) {
					#echo "<b>add</b> ".$row['l']."<br>";
						$this->Equipo->add();
					} else {
						if ($row['id_country']!='248') {
						//	$this->Equipo->update();
						}

					}

				# AGREGAMOS EQUIPO VISITANTE -> Si no existe
					$this->Equipo->ID_EQUIPO = 	$row['id_v'];
					$this->Equipo->NOMBRE    =  $row['v'];
					$visitante=$this->Equipo->getEquipo();
					if ($visitante==null) {
					#echo "<b>add</b> ".$row['v']."<br>";
						$this->Equipo->add();
					} else {
						if ($row['id_country']!='248') {
						//	$this->Equipo->update();
						}
					}

				# AGREGAMOS PARTIDO
					$fecha = new DateTime($row['fecha_event']);
					$this->Partido->ID_PARTIDO     = $row['id_match'];
					$this->Partido->ID_COMPETENCIA = $row['id_torneo'];
					$this->Partido->FECHA          = $fecha->format('Y-m-d');
					$this->Partido->HORARIO        = $fecha->format('H:i');
					$this->Partido->ESTADO         = $row['status'];
					$this->Partido->LOCAL          = $row['id_l'];
					$this->Partido->VISITANTE      = $row['id_v'];

					$partido=$this->Partido->getPartido();
					if ($partido==null) {
					#echo "<b>add Partido</b> ".$row['l']." ".$row['v']."<br>";
						$this->Partido->add();
					} else {
					#echo "<b>Update Partido</b> ".$row['l']." ".$row['v']."<br>";
						$this->Partido->update();
					}

				# AGREGAMOS CUOTAS DEL PARTIDO
				// Gana local
					$this->Cuota->ID_PARTIDO = $row['id_match'];
					$this->Cuota->ID_TIPO    = 1; 
					$this->Cuota->VALOR      = isset($row['_1e']) ? $row['_1e'] : 1;  
					$_1=$this->Cuota->getCuota("sync");
					if ($_1==null) {
						$this->Cuota->add();
					} else {
						$this->Cuota->update();
					}
				// Empata
					$this->Cuota->ID_TIPO    = 2; 
					$this->Cuota->VALOR      = isset($row['_xe']) ? $row['_xe'] : 1;  
					$_X=$this->Cuota->getCuota("sync");
					if ($_X==null) {
						$this->Cuota->add();
					} else {
						$this->Cuota->update();
					}
				// Gana visitante
					$this->Cuota->ID_TIPO    = 3; 
					$this->Cuota->VALOR      = isset($row['_2e']) ? $row['_2e'] : 1; 
					$_2=$this->Cuota->getCuota("sync");
					if ($_2==null) {
						$this->Cuota->add();
					} else {
						$this->Cuota->update();
					}
				// Under
					$this->Cuota->ID_TIPO    = 4; 
					$this->Cuota->VALOR      = isset($row['undere']) ? $row['undere'] : 1; 
					$under=$this->Cuota->getCuota("sync");
					if ($under==null) {
						$this->Cuota->add();
					} else {
						$this->Cuota->update();
					}
				// Over
					$this->Cuota->ID_TIPO    = 5; 
					$this->Cuota->VALOR      = isset($row['overe']) ? $row['overe'] : 1; 
					$over=$this->Cuota->getCuota("sync");
					if ($over==null) {
						$this->Cuota->add();
					} else {
						$this->Cuota->update();
					}
				// Gana empata local
					$this->Cuota->ID_TIPO    = 6; 
					$this->Cuota->VALOR      = isset($row['_1xe']) ? $row['_1xe'] : 1; 
					$_1X=$this->Cuota->getCuota("sync");
					if ($_1X==null) {
						$this->Cuota->add();
					} else {
						$this->Cuota->update();
					}
				// Gana empata visitante
					$this->Cuota->ID_TIPO    = 7; 
					$this->Cuota->VALOR      = isset($row['_2xe']) ? $row['_2xe'] : 1; 
					$_2X=$this->Cuota->getCuota("sync");
					if ($_2X==null) {
						$this->Cuota->add();
					} else {
						$this->Cuota->update();
					}
				// Sin empate
					$this->Cuota->ID_TIPO    = 8; 
					$this->Cuota->VALOR      = isset($row['_12e']) ? $row['_12e'] : 1; 
					$_12=$this->Cuota->getCuota("sync");
					if ($_12==null) {
						$this->Cuota->add();
					} else {
						$this->Cuota->update();
					}
				// Gana 1 primer tiempo
					$this->Cuota->ID_TIPO    = 9; 
					$this->Cuota->VALOR      = isset($row['1ste']) ? $row['1ste'] : 1; 
					$_1ht=$this->Cuota->getCuota("sync");
					if ($_1ht==null) {
						$this->Cuota->add();
					} else {
						$this->Cuota->update();
					}
				// Empate  primer tiempo
					$this->Cuota->ID_TIPO    = 10; 
					$this->Cuota->VALOR      = isset($row['xste']) ? $row['xste'] : 1; 
					$Xht=$this->Cuota->getCuota("sync");
					if ($Xht==null) {
						$this->Cuota->add();
					} else {
						$this->Cuota->update();
					}
				// Gana 2 primer tiempo
					$this->Cuota->ID_TIPO    = 11; 
					$this->Cuota->VALOR      =isset($row['2ste']) ? $row['2ste'] : 1; 
					$_2ht=$this->Cuota->getCuota("sync");
					if ($_2ht==null) {
						$this->Cuota->add();
					} else {
						$this->Cuota->update();
					}
				// Ambos marcan
					$this->Cuota->ID_TIPO    = 12; 
					$this->Cuota->VALOR      = isset($row['gg']) ? $row['gg'] : 1; 
					$ng=$this->Cuota->getCuota("sync");
					if ($ng==null) {
						$this->Cuota->add();
					} else {
						$this->Cuota->update();
					}
				// No marcan ambos
					$this->Cuota->ID_TIPO    = 13; 
					$this->Cuota->VALOR      = isset($row['gn']) ? $row['gn'] : 1; 
					$gg=$this->Cuota->getCuota("sync");
					if ($gg==null) {
						$this->Cuota->add();
					} else {
						$this->Cuota->update();
					}
}// if compe
			} // end foreach

			$data = array(
				'sync' => $matches
				);

		} else {
			
			$data = array(
				'sync' => null
				);
		}


		$this->load->view('sync/index', $data);


	} // End sync

}



