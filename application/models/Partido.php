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
	public $GOLES_LOCAL;
	public $GOLES_VISITANTE;
	public $EN_VIVO;
	#public $FROM;
	#public $TO;

	public function __construct()
	{
		parent::__construct();
		$this->ID_PARTIDO=null;
		$this->ID_COMPETENCIA=null;
		$this->FECHA=null;
		$this->HORARIO=null;
		$this->ESTADO=null;
		$this->LOCAL=null;
		$this->VISITANTE=null;
		$this->GOLES_LOCAL=null;
		$this->GOLES_VISITANTE=null;
		$this->EN_VIVO=null;
	}



	public function all()
	{
		$query = $this->db->query("SELECT p.*, co.NOMBRE AS TORNEO, pa.NOMBRE as PAIS FROM partido p
			LEFT JOIN competencia co ON (co.ID_COMPETENCIA=p.ID_COMPETENCIA)  
			LEFT JOIN pais pa ON (co.ID_PAIS=pa.ID_PAIS) 
			ORDER BY p.FECHA DESC, p.HORARIO ASC"); 
		if ($query->num_rows() > 0) {
			return $query->result();
		} else {
			return null;
		} 
	}

	public function index()
	{
		$query = $this->db->query("
			SELECT p.*, co.NOMBRE AS TORNEO, pa.NOMBRE as PAIS FROM partido p
			LEFT JOIN competencia co ON (co.ID_COMPETENCIA=p.ID_COMPETENCIA)  
			LEFT JOIN pais pa ON (co.ID_PAIS=pa.ID_PAIS) 
			WHERE
			p.HORARIO>='".$this->HORARIO."' 
			AND  p.FECHA BETWEEN '".$this->FROM."' AND '".$this->TO."' 
			ORDER BY p.FECHA ASC, p.HORARIO ASC"); 

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





}
?> 