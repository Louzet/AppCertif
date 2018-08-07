<?php
class Users_model extends CI_Model
{
	public function register()
	{
		$data = array(
			'nom' => $this->input->post('nom'),
			'prenom' => $this->input->post('prenom'),
			'pseudo' => $this->input->post('pseudo'),
			'email' => $this->input->post('email'),
			'password' => sha1($this->input->post('password'))
		);

		/* enregistrement des données dans la BDD */
		return $this->db->insert('users', $data);
	}

	public function login($pseudo, $password)
	{
		// matches data
		$this->db->where('pseudo', $pseudo);
		$this->db->where('password', $password);

		$result = $this->db->get('users');

		// get id from database, if existe this pseudo and password
		if($result->num_rows() === 1)
		{
			return $result->row(0)->id;
		}
		else
		{
			return FALSE;
		}
		
	}

	



}


