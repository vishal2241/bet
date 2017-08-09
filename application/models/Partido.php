<?php 

class Partido extends CI_Model
{
	
	public $ID_PARTIDO;
	public $ID_COMPETENCIA;
	public $ID_PAIS;
	public $TIMEZONE;
	public $FECHA;
	public $HORA;
	public $LOCAL;
	public $VISITANTE;
	public $ESTADO;
	public $MARKET_COUNT;


	public function __construct()
	{
		parent::__construct();
		$this->ID_PARTIDO     = null;
		$this->ID_COMPETENCIA = null;
		$this->ID_PAIS        = null;
		$this->TIMEZONE       = null;
		$this->FECHA          = null;
		$this->HORA           = null;
		$this->LOCAL          = null;
		$this->VISITANTE      = null;
		$this->MARKET_COUNT   = null;
		$this->ESTADO         = null;
	}

	public function getPartido()
	{
		$query = $this->db->query('SELECT * FROM partido WHERE ID_PARTIDO='.$this->ID_PARTIDO.''); 

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
		p.ID_PARTIDO AS ID,
		p.ID_COMPETENCIA AS COMPE,
		p.FECHA,
		p.ESTADO,
		SUBSTR(p.HORARIO, 1, 5) AS HORARIO,
		p.LOCAL,
		p.VISITANTE,
		c._1,
		c._X,
		c._2,
		c._1X,
		c._12,
		c._2X,
		c.GG,
		c.NG,
		c.OVER_25,
		c.UNDER_25
		FROM partido p LEFT JOIN cuota c ON (p.ID_PARTIDO=c.ID_PARTIDO)
		WHERE
		p.FECHA = '".$date."'";
		#Si la fecha es mayor a la de hoy no se condiciona la hora
		if (date("Y-m-d")==$date ) {
			$sql.=" AND p.HORARIO > '".$hour."' ";
		}

		$sql.="
		AND p.ID_COMPETENCIA='".$compe."' 
		AND p.ESTADO!='FT' 
		AND p.ESTADO!='Canc.' 
		AND p.AUTORIZADO='SI' 
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

	//Para editar partidos y sincronizar
	public function all($from, $to, $filtro)
	{
		$sql="SELECT 
		p.ID_PARTIDO,
		p.LOCAL,
		p.VISITANTE,
		p.ESTADO,
		p.FECHA,
		p.HORA,
		p.AUTORIZADO,
		co.NOMBRE AS TORNEO
		FROM partido p
		LEFT JOIN competencia co ON (co.ID_COMPETENCIA=p.ID_COMPETENCIA)  
		WHERE ";

		switch ($filtro) {
			case 'Autorizados':
			$sql.="  p.AUTORIZADO='SI' AND";
			break;
			case 'NoAutorizados':
			$sql.="  p.AUTORIZADO='NO' AND";
			break;
			case 'Cancelados':
			$sql.="  p.ESTADO='Canc.' AND";
			break;
			case 'sinCuota':
			$sql.="  p.ID_PARTIDO NOT IN (SELECT c.ID_PARTIDO FROM cuota c) AND";
			break;
		}
		$sql.="
		p.FECHA BETWEEN '".$from."'   AND '".$to."'
		ORDER BY p.FECHA ASC, p.HORA ASC";
		
		$query = $this->db->query($sql); 
		if ($query->num_rows() > 0) {
			return $query->result();
		} else {
			return null;
		} 
	}





}
?> 