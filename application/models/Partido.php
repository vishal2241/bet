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

	
	public function getPartido()
	{
		$query = $this->db->query('SELECT ID_PARTIDO FROM partido WHERE ID_PARTIDO='.$this->ID_PARTIDO.' '); 
		
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