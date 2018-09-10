<?php if( ! defined('BASEPATH')) exit('not allowed script');

class Barre_search_model extends CI_Model
{
	private $table = "users";

	public function fetch_search($query)
	{
		$this->db->select('*');

		$this->db->from($this->table);

		if ($query != ''){

			$this->db->like("pseudo", $query);
			$this->db->or_like("nom", $query);
			$this->db->or_like("prenom", $query);

		}

		$this->db->limit(5);

		$this->db->order_by('pseudo','ASC');

		$query = $this->db->get();

		return $query->result_array();
	}



}
