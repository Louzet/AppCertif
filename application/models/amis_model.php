<?php if( ! defined('BASEPATH')) exit('not allowed script');

class amis_model extends CI_Model
{
	private $table = "liste_amis";

	public function liste_amis_model()
	{
		$query = $this->db->get($this->table);

		if($query->num_rows() > 0)
		{
			return $query->result();
		}
		else{
			return false;
		}
	}

	public function search_friends($query)
	{
		$this->db->select('pseudo');

		$this->db->from($this->table);

		$this->db->like("pseudo", $query);

		$this->db->order_by('pseudo','ASC');

		return $this->db->get();
	}



}
