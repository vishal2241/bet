<?php 

class Partido extends CI_Model
{
	
	public $ID_PARTIDO;
	public $ID_COMPETENCIA;
	public $FECHA;
	public $HORARIO;
	public $ESTADO;
	public $LOCAL;
	public $VISITANTE;
	public $SCORE_1;
	public $SCORE_2;	
	public $SCORE_1_HT;
	public $SCORE_2_HT;
	public $AUTORIZADO;
	public $VERIFICADO;


	public function __construct()
	{
		parent::__construct();
		$this->ID_PARTIDO     = null;
		$this->ID_COMPETENCIA = null;
		$this->FECHA          = null;
		$this->HORARIO        = null;
		$this->ESTADO         = null;
		$this->LOCAL          = null;
		$this->VISITANTE      = null;
		$this->SCORE_1        = null;
		$this->SCORE_2        = null;
		$this->SCORE_1_HT     = null;
		$this->SCORE_2_HT     = null;
		$this->AUTORIZADO     = 'NO';
		$this->VERIFICADO     = 'NO';
	}

	public function getPartido()
	{
		$query = $this->db->query('SELECT * FROM partido WHERE ID_PARTIDO='.$this->ID_PARTIDO.' '); 

		if ($query->num_rows() > 0) {
			return $query->result();
		} else {
			return null;
		} 

	} 

	public function setScore()
	{
		$sql='UPDATE partido SET SCORE_1="'.$this->SCORE_1.'", SCORE_2="'.$this->SCORE_2.'", ESTADO="'.$this->ESTADO.'"   WHERE ID_PARTIDO='.$this->ID_PARTIDO.' ';
		$query = $this->db->query($sql); 
	} 

	public function add()
	{

		$this->db->insert('partido', $this);
	}

	public function update()
	{
		$this->db->where('ID_PARTIDO', $this->ID_PARTIDO); 
		$this->db->update('partido', $this);
	}

	//pagina principal, publico
	public function getPartidoByCompe2($date, $hour, $compe)
	{
		$sql="
		SELECT 
		p.ID_PARTIDO, SUBSTR(p.HORARIO,1,5) AS HORARIO,
		p.FECHA, l.NOMBRE  AS LOCAL,
		v.NOMBRE  AS VISITANTE,
		l.IMG AS IMG_L,
		v.IMG AS IMG_V,
		pl.IMG AS PAIS_L,
		pv.IMG AS PAIS_V
		FROM partido p 
		LEFT JOIN equipo l ON (l.ID_EQUIPO=p.LOCAL) 
		LEFT JOIN equipo v ON (v.ID_EQUIPO=p.VISITANTE)  
		LEFT JOIN pais pl ON (pl.ID_PAIS=l.ID_PAIS)  
		LEFT JOIN pais pv ON (pv.ID_PAIS=v.ID_PAIS)  
		WHERE
		p.FECHA = '".$date."'";
		#Si la fecha es mayor a la de hoy no se condiciona la HORARIO
		if (date("Y-m-d")==$date ) {
			$sql.=" AND p.HORARIO > '".$hour."' ";
		}
		$sql.="
		AND p.ID_COMPETENCIA='".$compe."' 
		GROUP BY p.ID_PARTIDO 
		ORDER BY p.HORARIO DESC
		";
		$query = $this->db->query($sql); 
		if ($query->num_rows() > 0) {
			return $query->result();
		} else {
			return null;
		} 
	}

	public function getTablePartidos($date, $hour, $compe)
	{
		$sql="
		SELECT 
		p.ID_PARTIDO,
		SUBSTR(p.HORARIO,1,5) AS HORARIO,
		p.FECHA, l.NOMBRE  AS LOCAL,
		v.NOMBRE  AS VISITANTE,
		l.IMG AS IMG_L,
		v.IMG AS IMG_V,
		pl.IMG AS PAIS_L,
		pv.IMG AS PAIS_V,
		co.NOMBRE AS COMPE,
		co.ID_COMPETENCIA AS ID_COMPE,
		pa.NOMBRE AS PAIS_CO,
		pa.ID_PAIS AS ID_PAIS_CO,
		pa.IMG AS IMG_PA,
		co.FAVORITA AS FAV,
		(
		SELECT  c.VALOR  FROM cuota c WHERE c.ID_PARTIDO = p.ID_PARTIDO AND c.ID_TIPO ='1' 
		) as 'VALOR_1',
		(
		SELECT  c.VALOR  FROM cuota c WHERE c.ID_PARTIDO = p.ID_PARTIDO AND c.ID_TIPO ='2' 
		) as 'VALOR_2',
		(
		SELECT  c.VALOR  FROM cuota c WHERE c.ID_PARTIDO = p.ID_PARTIDO AND c.ID_TIPO ='3' 
		) as 'VALOR_3',
		(
		SELECT  c.VALOR  FROM cuota c WHERE c.ID_PARTIDO = p.ID_PARTIDO AND c.ID_TIPO ='4' 
		) as 'VALOR_4',
		(
		SELECT  c.VALOR  FROM cuota c WHERE c.ID_PARTIDO = p.ID_PARTIDO AND c.ID_TIPO ='5' 
		) as 'VALOR_5',
		(
		SELECT  c.VALOR  FROM cuota c WHERE c.ID_PARTIDO = p.ID_PARTIDO AND c.ID_TIPO ='6' 
		) as 'VALOR_6',
		(
		SELECT  c.VALOR  FROM cuota c WHERE c.ID_PARTIDO = p.ID_PARTIDO AND c.ID_TIPO ='7' 
		) as 'VALOR_7',
		(
		SELECT  c.VALOR  FROM cuota c WHERE c.ID_PARTIDO = p.ID_PARTIDO AND c.ID_TIPO ='8' 
		) as 'VALOR_8',
		(
		SELECT  c.VALOR  FROM cuota c WHERE c.ID_PARTIDO = p.ID_PARTIDO AND c.ID_TIPO ='12' 
		) as 'VALOR_12',
		(
		SELECT  c.VALOR  FROM cuota c WHERE c.ID_PARTIDO = p.ID_PARTIDO AND c.ID_TIPO ='13' 
		) as 'VALOR_13',

		(
		SELECT t.DESCRIPCION  FROM cuota c LEFT JOIN tipo_cuota t ON (t.ID_TIPO=c.ID_TIPO) WHERE c.ID_PARTIDO = p.ID_PARTIDO AND t.ID_TIPO ='1' 
		) as 'DESC_1',
		(
		SELECT t.DESCRIPCION  FROM cuota c LEFT JOIN tipo_cuota t ON (t.ID_TIPO=c.ID_TIPO) WHERE c.ID_PARTIDO = p.ID_PARTIDO AND t.ID_TIPO ='2' 
		) as 'DESC_2',
		(
		SELECT t.DESCRIPCION  FROM cuota c LEFT JOIN tipo_cuota t ON (t.ID_TIPO=c.ID_TIPO) WHERE c.ID_PARTIDO = p.ID_PARTIDO AND t.ID_TIPO ='3' 
		) as 'DESC_3',
		(
		SELECT t.DESCRIPCION  FROM cuota c LEFT JOIN tipo_cuota t ON (t.ID_TIPO=c.ID_TIPO) WHERE c.ID_PARTIDO = p.ID_PARTIDO AND t.ID_TIPO ='4' 
		) as 'DESC_4',
		(
		SELECT t.DESCRIPCION  FROM cuota c LEFT JOIN tipo_cuota t ON (t.ID_TIPO=c.ID_TIPO) WHERE c.ID_PARTIDO = p.ID_PARTIDO AND t.ID_TIPO ='5' 
		) as 'DESC_5',
		(
		SELECT t.DESCRIPCION  FROM cuota c LEFT JOIN tipo_cuota t ON (t.ID_TIPO=c.ID_TIPO) WHERE c.ID_PARTIDO = p.ID_PARTIDO AND t.ID_TIPO ='6' 
		) as 'DESC_6',
		(
		SELECT t.DESCRIPCION  FROM cuota c LEFT JOIN tipo_cuota t ON (t.ID_TIPO=c.ID_TIPO) WHERE c.ID_PARTIDO = p.ID_PARTIDO AND t.ID_TIPO ='7' 
		) as 'DESC_7',
		(
		SELECT t.DESCRIPCION  FROM cuota c LEFT JOIN tipo_cuota t ON (t.ID_TIPO=c.ID_TIPO) WHERE c.ID_PARTIDO = p.ID_PARTIDO AND t.ID_TIPO ='8' 
		) as 'DESC_8',
		(
		SELECT t.DESCRIPCION  FROM cuota c LEFT JOIN tipo_cuota t ON (t.ID_TIPO=c.ID_TIPO) WHERE c.ID_PARTIDO = p.ID_PARTIDO AND t.ID_TIPO ='12' 
		) as 'DESC_12',
		(
		SELECT t.DESCRIPCION  FROM cuota c LEFT JOIN tipo_cuota t ON (t.ID_TIPO=c.ID_TIPO) WHERE c.ID_PARTIDO = p.ID_PARTIDO AND t.ID_TIPO ='13' 
		) as 'DESC_13',


		(
		SELECT c.ID_CUOTA  FROM cuota c LEFT JOIN tipo_cuota t ON (t.ID_TIPO=c.ID_TIPO) WHERE c.ID_PARTIDO = p.ID_PARTIDO AND t.ID_TIPO ='1' 
		) as 'CONSE_1',
		(
		SELECT c.ID_CUOTA  FROM cuota c LEFT JOIN tipo_cuota t ON (t.ID_TIPO=c.ID_TIPO) WHERE c.ID_PARTIDO = p.ID_PARTIDO AND t.ID_TIPO ='2' 
		) as 'CONSE_2',
		(
		SELECT c.ID_CUOTA  FROM cuota c LEFT JOIN tipo_cuota t ON (t.ID_TIPO=c.ID_TIPO) WHERE c.ID_PARTIDO = p.ID_PARTIDO AND t.ID_TIPO ='3' 
		) as 'CONSE_3',
		(
		SELECT c.ID_CUOTA  FROM cuota c LEFT JOIN tipo_cuota t ON (t.ID_TIPO=c.ID_TIPO) WHERE c.ID_PARTIDO = p.ID_PARTIDO AND t.ID_TIPO ='4' 
		) as 'CONSE_4',
		(
		SELECT c.ID_CUOTA  FROM cuota c LEFT JOIN tipo_cuota t ON (t.ID_TIPO=c.ID_TIPO) WHERE c.ID_PARTIDO = p.ID_PARTIDO AND t.ID_TIPO ='5' 
		) as 'CONSE_5',
		(
		SELECT c.ID_CUOTA  FROM cuota c LEFT JOIN tipo_cuota t ON (t.ID_TIPO=c.ID_TIPO) WHERE c.ID_PARTIDO = p.ID_PARTIDO AND t.ID_TIPO ='6' 
		) as 'CONSE_6',
		(
		SELECT c.ID_CUOTA  FROM cuota c LEFT JOIN tipo_cuota t ON (t.ID_TIPO=c.ID_TIPO) WHERE c.ID_PARTIDO = p.ID_PARTIDO AND t.ID_TIPO ='7' 
		) as 'CONSE_7',
		(
		SELECT c.ID_CUOTA  FROM cuota c LEFT JOIN tipo_cuota t ON (t.ID_TIPO=c.ID_TIPO) WHERE c.ID_PARTIDO = p.ID_PARTIDO AND t.ID_TIPO ='8' 
		) as 'CONSE_8',
		(
		SELECT c.ID_CUOTA  FROM cuota c LEFT JOIN tipo_cuota t ON (t.ID_TIPO=c.ID_TIPO) WHERE c.ID_PARTIDO = p.ID_PARTIDO AND t.ID_TIPO ='12' 
		) as 'CONSE_12',
		(
		SELECT c.ID_CUOTA  FROM cuota c LEFT JOIN tipo_cuota t ON (t.ID_TIPO=c.ID_TIPO) WHERE c.ID_PARTIDO = p.ID_PARTIDO AND t.ID_TIPO ='13' 
		) as 'CONSE_13'

		FROM partido p 
		LEFT JOIN equipo l ON (l.ID_EQUIPO=p.LOCAL) 
		LEFT JOIN equipo v ON (v.ID_EQUIPO=p.VISITANTE)  
		LEFT JOIN pais pl ON (pl.ID_PAIS=l.ID_PAIS)  
		LEFT JOIN pais pv ON (pv.ID_PAIS=v.ID_PAIS) 
		LEFT JOIN competencia co ON (co.ID_COMPETENCIA=p.ID_COMPETENCIA) 
		LEFT JOIN pais pa ON (pa.ID_PAIS=co.ID_PAIS)
		WHERE
		p.FECHA = '".$date."'";
		#Si la fecha es mayor a la de hoy no se condiciona la HORARIO
		if (date("Y-m-d")==$date ) {
			$sql.=" AND p.HORARIO > '".$hour."' ";
		}
		$sql.="
		/*AND p.ID_COMPETENCIA='".$compe."' */
		GROUP BY p.ID_PARTIDO 
		ORDER BY pa.NOMBRE ASC, co.NOMBRE ASC, p.HORARIO ASC
		";
		$query = $this->db->query($sql); 
		if ($query->num_rows() > 0) {
			return $query->result();
		} else {
			return null;
		} 
	}

	public function getTotalMatch($date, $id)
	{
		$sql="
		SELECT count(*) AS TOTAL
		FROM partido p 
		WHERE
		p.FECHA = '".$date."'";
		if (date("Y-m-d")==$date ) {
			$sql.=" AND p.HORARIO > '".date('H:i')."' ";
		}
		if ($id!='') {
			$sql.=" AND p.ID_PARTIDO = '".$id."' ";
		}

		#echo $sql;
		$query = $this->db->query($sql); 
		if ($query->num_rows() > 0) {
			return $query->result();
		} else {
			return null;
		} 
	}


	//Para editar partidos y sincronizar
	public function getAllPartidos($from, $to, $filtro, $value) // get partidos index
	{
		$sql="SELECT 
		p.ID_PARTIDO,
		l.NOMBRE AS LOCAL,
		v.NOMBRE AS VISITANTE,
		p.ESTADO,
		p.FECHA,
		p.HORARIO,
		p.SCORE_1,
		p.SCORE_2,
		p.HORARIO,
		p.AUTORIZADO,
		co.NOMBRE AS TORNEO,
		pa.NOMBRE as PAIS,
		CONCAT(p.FECHA, ' ', p.HORARIO) AS FECHA_TIME
		FROM partido p
		LEFT JOIN competencia co ON (co.ID_COMPETENCIA=p.ID_COMPETENCIA)  
		LEFT JOIN pais pa ON (co.ID_PAIS=pa.ID_PAIS) 
		LEFT JOIN equipo l ON (l.ID_EQUIPO=p.LOCAL) 
		LEFT JOIN equipo v ON (v.ID_EQUIPO=p.VISITANTE) 
		WHERE ";

		switch ($filtro) {
			case 'autorizado':
			$sql.="  p.AUTORIZADO='".$value."' AND";
			break;
			case 'verificado':
			$sql.="  p.VERIFICADO='".$value."' AND";
			break;
			case 'estado':
			$sql.="  p.ESTADO='".$value."' AND";
			break;
			case 'Score':
			$hora = new DateTime(date('H:i'));
			$hora->sub(new DateInterval('PT2H00M')); // partidos iniciados hace dos horas y media (evita en vivo)
			$sql.="  p.ESTADO IN ('NSY','inprogress', 'Interrupted', 'Postponed', 'Abandoned', 'AboutToStart' )  AND CONCAT(p.FECHA, ' ', p.HORARIO)<='".date("Y-m-d").' '.$hora->format('H:i')."'  ";
			break;
		}

		if ($filtro!='Score') {
			$sql.=" p.FECHA BETWEEN '".$from."'   AND '".$to."' ";
		}

		$sql.="
		ORDER BY p.FECHA ASC, p.HORARIO ASC"; 

		
		$query = $this->db->query($sql); 
		if ($query->num_rows() > 0) {
			return $query->result();
		} else {
			return null;
		} 
	}





}
?> 