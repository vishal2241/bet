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
	public function getPartidoByCompe($date, $hour, $compe)
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
		ORDER BY p.HORARIO ASC
		";
		$query = $this->db->query($sql); 
		if ($query->num_rows() > 0) {
			return $query->result();
		} else {
			return null;
		} 
	}

	public function getTotalMatch($date)
	{
		$sql="
		SELECT count(*) AS TOTAL
		FROM partido p 
		WHERE
		p.FECHA = '".$date."'";
		if (date("Y-m-d")==$date ) {
			$sql.=" AND p.HORARIO > '".date('H:i')."' ";
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
	public function getAllPartidos($from, $to, $filtro)
	{
		$sql="SELECT 
		p.ID_PARTIDO,
		l.NOMBRE AS LOCAL,
		v.NOMBRE AS VISITANTE,
		p.ESTADO,
		p.FECHA,
		p.HORARIO,
		p.AUTORIZADO,
		co.NOMBRE AS TORNEO,
		pa.NOMBRE as PAIS 
		FROM partido p
		LEFT JOIN competencia co ON (co.ID_COMPETENCIA=p.ID_COMPETENCIA)  
		LEFT JOIN pais pa ON (co.ID_PAIS=pa.ID_PAIS) 
		LEFT JOIN equipo l ON (l.ID_EQUIPO=p.LOCAL) 
		LEFT JOIN equipo v ON (v.ID_EQUIPO=p.VISITANTE) 
		WHERE ";

		switch ($filtro) {
			case 'Autorizados':
			$sql.="  p.AUTORIZADO='SI' AND";
			break;
			case 'NoAutorizados':
			$sql.="  p.AUTORIZADO='NO' AND";
			break;
			case 'Cancelados':
			$sql.="  p.ESTADO='Cancelado' AND";
			break;
		}
		$sql.="
		p.FECHA BETWEEN '".$from."'   AND '".$to."'
		ORDER BY p.FECHA DESC, p.HORARIO ASC";

		$query = $this->db->query($sql); 
		if ($query->num_rows() > 0) {
			return $query->result();
		} else {
			return null;
		} 
	}





}
?> 