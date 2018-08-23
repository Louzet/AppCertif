<?php
class Users_model extends CI_Model
{
    private $table = 'users';

	public function register($nom, $prenom, $pseudo, $email, $password, $created_at)
	{
        $this->db->set('nom', $nom);
        $this->db->set('prenom', $prenom);
        $this->db->set('pseudo', $pseudo);
        $this->db->set('email', $email);
        $this->db->set('password', $password);

        $this->db->set('created_at', $created_at);

		/* enregistrement des données dans la BDD */
		return $this->db->insert($this->table);
	}

	public function login($pseudo, $password)
	{
		// matches data
		$this->db->where('pseudo', $pseudo);
		$this->db->where('password', $password);

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


