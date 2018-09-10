<?php

class connexion_model extends CI_Model
{
    private $table = "users";
    
	public function login($pseudo, $password)
	{
		
		// matches data
		$this->db->where('pseudo', ucfirst($pseudo));
		
		$this->db->where('password', ucfirst($password));

		$result = $this->db->get($this->table);

		// get id from database, if existe this pseudo and password
		if($result->num_rows() > 0)
		{
			return $result->row(0)->id;
		}
		else
		{
			return FALSE;
		}
		
    }
 
   
	public function pseudo_exists_model()
	{
		$pseudo = $this->input->post('pseudo');

		$pseudos_bdd = $this->db->select('pseudo')
						->from($this->table)
						->where('pseudo', $pseudo)
						->limit(1)
						->get()
						->result();
		
		foreach($pseudos_bdd as $pseudo_bdd) {
			
			if (ucfirst($pseudo_bdd->pseudo) == trim(ucfirst($pseudo))){

				return TRUE;

			}
			
		}
	}


}
