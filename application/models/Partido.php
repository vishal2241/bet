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
		SELECT *
		FROM partido p LEFT JOIN odds c ON (p.ID_PARTIDO=c.ID_PARTIDO)
		WHERE
		p.FECHA = '".$date."'";
		#Si la fecha es mayor a la de hoy no se condiciona la hora
		if (date("Y-m-d")==$date ) {
			$sql.=" AND p.HORA > '".$hour."' ";
		}
		$sql.="
		AND p.ID_COMPETENCIA='".$compe."' 
		GROUP BY p.ID_PARTIDO 
		ORDER BY p.HORA ASC
		";
		$query = $this->db->query($sql); 
		if ($query->num_rows() > 0) {
			return $query->result();
		} else {
			return null;
		} 
	}

	//Para editar partidos y sincronizar
	public function all($from, $to, $filtro, $campos)
	{
		$sql="SELECT"; 
		switch ($campos) {
			case '*':
			$sql.="
			p.ID_PARTIDO,
			p.LOCAL,
			p.VISITANTE,
			p.ESTADO,
			p.FECHA,
			p.HORA,
			p.AUTORIZADO,
			co.NOMBRE AS TORNEO";
			break;
			
			default:
			$sql.=
			" ".$campos." ";
			break;
		}
		$sql.="
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
			case 'hora':
			$sql.="  p.HORA> '".date("H:i")."' AND  ";
			break;
		}
	 	$sql.="
		(SELECT COUNT(o.ID_PARTIDO) AS ODDS FROM odds o WHERE o.ID_PARTIDO=p.ID_PARTIDO) ='13'
		AND p.FECHA BETWEEN '".$from."'   AND '".$to."'
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