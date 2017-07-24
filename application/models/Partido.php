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


	public function index()
	{
		$query = $this->db->query('SELECT * FROM partido'); 
		return $query->result();
	} 

	
	public function add($data=null)
	{
		if ($data!=null) {
			$this->ID_PARTIDO      = $data['ID_PARTIDO'];
			$this->ID_COMPETENCIA  = $data['ID_COMPETENCIA'];
			$this->FECHA           = $data['FECHA'];
			$this->HORARIO         = $data['HORARIO'];
			$this->ESTADO          = $data['ESTADO'];
			$this->LOCAL           = $data['LOCAL'];
			$this->VISITANTE       = $data['VISITANTE'];
			$this->GOLES_LOCAL     = $data['GOLES_LOCAL'];
			$this->GOLES_VISITANTE = $data['GOLES_VISITANTE'];
			$this->db->insert('partido', $this);
		}
	}

	public function update($pais=null)
	{

		if ($pais!=null) {
			$this->ID_COMPETENCIA  = $data['ID_COMPETENCIA'];
			$this->FECHA           = $data['FECHA'];
			$this->HORARIO         = $data['HORARIO'];
			$this->ESTADO          = $data['ESTADO'];
			$this->LOCAL           = $data['LOCAL'];
			$this->VISITANTE       = $data['VISITANTE'];
			$this->GOLES_LOCAL     = $data['GOLES_LOCAL'];
			$this->GOLES_VISITANTE = $data['GOLES_VISITANTE'];
			$this->db->where('ID_PARTIDO', $this->ID_PARTIDO); 
			$this->db->update('partido', $this);
		}
	}

	public function delete($id='')
	{
		if ($id!='') {
			$this->ID_PAIS = $id;
			$this->db->where('ID_PARTIDO', $this->ID_PARTIDO);
			$this->db->delete('partido');
		}
	}



}
?> 