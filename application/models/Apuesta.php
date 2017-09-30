<?php 

class Apuesta extends CI_Model
{
	
	public $ID_APUESTA;
	public $FECHA;
	public $NRO_EVENTOS;
	public $ID_USER;
	public $VALOR;
	public $GANANCIA;
	public $ESTADO;
	public $TOTAL_CREDITOS;

	public function __construct()
	{
		parent::__construct();
		$this->ID_APUESTA  = null;
		$this->FECHA       = date("Y-m-d H:i");
		$this->NRO_EVENTOS = null;
		$this->ID_USER     = null;
		$this->VALOR       = 0;
		$this->GANANCIA    = 0;
		$this->TOTAL_CREDITOS      = 1;
		$this->ESTADO      = null;
	}



	public function index()
	{
		$query = $this->db->query('SELECT * FROM apuesta  ');
		if ($query->num_rows() > 0) {
			return $query->result();
		} else {
			return null;
		} 
	}

	public function setResultado($resultado)
	{
		$sql='UPDATE apuesta SET RESULTADO="'.$resultado.'" WHERE ID_APUESTA='.$this->ID_APUESTA.' '; 
		$query = $this->db->query($sql);
	}


	public function getApuesta()
	{
		$query = $this->db->query('SELECT * FROM apuesta WHERE ID_APUESTA='.$this->ID_APUESTA.' ');
		if ($query->num_rows() > 0) {
			return $query->result();
		} else {
			return null;
		} 

	}

	public function getApuestasByUser($from, $to, $user)
	{
		$sql='SELECT * FROM apuesta WHERE ID_USER="'.$user.'" AND FECHA BETWEEN "'.$from.' 00:00:00" AND "'.$to.' 23:59:59"  ORDER BY FECHA DESC ';
		$query = $this->db->query($sql);
		if ($query->num_rows() > 0) {
			return $query->result();
		} else {
			return null;
		} 

	}

	public function getApuestasByDate($from, $to)
	{
		$sql='SELECT * FROM apuesta a LEFT JOIN usuario u ON (a.ID_USER=u.CEDULA) WHERE a.ESTADO="FINISHED" AND a.FECHA BETWEEN "'.$from.' 00:00:00" AND "'.$to.' 23:59:59"  ORDER BY a.FECHA DESC ';
		$query = $this->db->query($sql);
		if ($query->num_rows() > 0) {
			return $query->result();
		} else {
			return null;
		} 

	}

	public function add()
	{
		$this->db->insert('apuesta', $this);
	}


	public function update()
	{
		$this->db->where('ID_APUESTA', $this->ID_APUESTA); 
		$this->db->update('apuesta', $this);
	}

	public function delete()
	{
		$this->db->where('ID_APUESTA', $this->ID_APUESTA); 
		$this->db->delete('apuesta', $this);
	} 

}
?> 