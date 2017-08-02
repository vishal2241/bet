<?php 

class Bookmaker extends CI_Model
{
	
	public $ID_BOOKMAKER;
	public $BOOKMAKER;


	public function __construct()
	{
		parent::__construct();
		$this->ID_BOOKMAKER=null;
		$this->BOOKMAKER=null;
	}

	public function getBookmaker()
	{
		$query = $this->db->query('SELECT * FROM bookmaker WHERE ID_BOOKMAKER='.$this->ID_BOOKMAKER.' '); 
		
		if ($query->num_rows() > 0) {
			return $query->result();
		} else {
			return null;
		} 

	} 

	public function add()
	{

		$this->db->insert('bookmaker', $this);
	}

	public function update()
	{
		$this->db->where('ID_BOOKMAKER', $this->ID_BOOKMAKER); 
		$this->db->update('bookmaker', $this);
	}





}
?>