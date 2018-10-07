<?php

class connexion_model extends CI_Model
{
	private $table = "users";
	
	public function __construct()
	{
		parent::__construct();
	}

    /**
     * @param $pseudo
     * @param $password
     * @return mixed
     */
	public function login($pseudo, $password)
	{
		$this->db->select("*");

		$this->db->from($this->table);

		$this->db->where('pseudo', strtolower($pseudo));

		$result = $this->db->get();

		$query = $result->result();

		if(!empty($query))
		{
			/**
			 * load helper password, pour verifier la correspondance entre le password hashé en bdd, et celui rentré par l'utilisateur
			 */
			$this->load->helper('password_helper');

			if(password_verify_helper($password, $query[0]->password))
			{
				return $query[0]->id;
			}
		}
		else
		{
		 	return FALSE;
		}
    }
 
   
	public function mot_de_passe_perdu_model($email)
    {
        $this->db->where("email", $email);

        $query = $this->db->get($this->table);

		$result_model = $query->row();

		// return mot de passe de la base de donnée pour l'email associée
		if($result_model)
		{
			
			return $result_model;
		}
		else
		{
			return "aucun résultat";
		}
	}
	
	/**
	 * on va rechercher tous les emails et les hash, celui qui correspond à notre GET['token]
	 * nous permettra d'identifier notre utilisateur
	 * si l'email hashé est différent de l'email qui a demandé à reinitialiser son mot de passe on stop tout
	 */
	public function reinit_pass_model()
	{
		$query = $this->db->get($this->table);

        return $query->result();

        /*$query = $this->db->select('*')
            ->from($this->table)
            ->get()
            ->result();

        return $query;*/

	}

	/**
	 * function permettant de changer le mot de passe dans la bdd
	 *
	 * @param [string] $pass
	 * @return void
	 */
	public function change_password_model($pass)
	{
		$this->db->set('password', $pass); // table = "users"

		return $this->db->insert($this->table);
	}


}
