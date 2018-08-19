<?php
class Users_model extends CI_Model
{
    private $table = 'users';

	public function register()
	{
		$data = array(
			'nom' => $this->input->post('nom'),
			'prenom' => $this->input->post('prenom'),
			'pseudo' => $this->input->post('pseudo'),
			'email' => $this->input->post('email'),
			'password' => sha1($this->input->post('password'))
		);
		$created_at = array(
            'created_at' => unix_to_human(time(), TRUE, 'eu')
        );
		/* enregistrement des données dans la BDD */
		return $this->db->insert($this->table, $data, $created_at);
	}

	public function login($pseudo, $password)
	{
		// matches data
		$this->db->where('pseudo', $pseudo);
		$this->db->where('password', $password);

		$result = $this->db->get($this->table);

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

    public function profil()
    {
        // $query = $this->db->get_where($this->table, array('id' => $id));
        // return $query->row_array();

        // $query = $this->db->select('*')->get($this->table, array('id' => $id));
        // return $query->result_array();

        // $where = $this->db->where('id', $id);
        // $query = $this->db->get_where($this->table, $where);
        // return $query->result_array();
        $id_sess = $this->session->userdata('user_id');
        $id = $id_sess;
        $where = array('id' => $id);
        return $query = $this->db->select("*")
                                ->from($this->table)
                                ->where($where)
                                ->limit(1)
                                ->get()
                                ->result_array();
    }

    public function edit_profil_image($profil_image)
    {
        $id_sess = $this->session->userdata('user_id');
        $id = $id_sess;
        $where = array(
            'id' => $id
        );

        $data = array(
            'profil_image' => str_replace('&nbsp;/_/', '', preg_replace('/\s/','', $profil_image))
        );

        // return $query = $this->db->insert($this->table, $data);
        return $query = $this->db->set($data)
                            ->where($where)
                            ->update($this->table);


    }


}


