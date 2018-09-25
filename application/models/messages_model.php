<?php if( ! defined('BASEPATH')) exit('not allowed script');

class messages_model extends CI_Model
{
	private $table_users = "users";

	public function all_users_model()
	{
		$query = $this->db->get($this->table_users);

		if($query->num_rows() > 0)
		{
			return $query->result();
		}
		else{
			return false;
		}
	
	}
}
