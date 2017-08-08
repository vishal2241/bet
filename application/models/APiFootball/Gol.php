<?php 

class Gol extends CI_Model
{
	
	public $ID_GOL;
	public $ID_PARTIDO;
	public $TIEMPO;
	public $MARCADOR_PARCIAL;
	public $JUGADOR;


	public function __construct()
	{
		parent::__construct();
		$this->ID_GOL=null;
		$this->ID_PARTIDO=null;
		$this->TIEMPO=null;
		$this->MARCADOR_PARCIAL=null;
		$this->JUGADOR=null;
	}


	public function add()
	{

		$this->db->insert('goles', $this);
	}

	public function update()
	{
		$this->db->where('ID_GOL', $this->ID_GOL); 
		$this->db->update('goles', $this);
	}


	public function delete()
	{
		$this->db->where('ID_PARTIDO', $this->ID_PARTIDO); 
		$this->db->delete('goles');
	} 

}
?> 