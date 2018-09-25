<?php



class inscription_model extends CI_Model
{
	private $table_users = "users";

	private $table_active = "active";

	public function index()
	{
		$this->inscription();

		
	}

	public function inscription($nom, $prenom, $pseudo, $email, $password, $profil_image)
	{
		setlocale(LC_TIME, 'fr', 'fr_FR', 'fr_FR.utf8');

        $this->db->set('nom', $nom);
        $this->db->set('prenom', $prenom);
        $this->db->set('pseudo', $pseudo);
        $this->db->set('email', $email);
    	$this->db->set('password', $password);
		
		$this->db->set('created_at', 'NOW()', false);

		$this->db->set('profil_image', 'noimage.png');
		
		/* enregistrement des données dans la BDD */
		return $this->db->insert($this->table_users);

	}


	public function pseudo_exists_model()
	{
		$pseudo = $this->input->post('pseudo');

		$pseudos_bdd = $this->db->select('pseudo')
						->from($this->table_users)
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

	public function email_exists_model()
	{
		$email = $this->input->post('pseudo');

		$emails_bdd = $this->db->select('email')
						->from($this->table_users)
						->where('email', $email)
						->limit(1)
						->get()
						->result();
		
		foreach($emails_bdd as $email_bdd) {
			
			if ($email_bdd->email == trim($email)){

				return TRUE;

			}
			
		}
	}

	public function get_pseudo_email_model()
	{

		$query = $this->db->get($this->table_users);

		return $query->result_object();
	}

	public function active_account_model($id)
	{
		$this->db->set('actif', 1);

		$this->db->set('id_account', $id);

		return $this->db->get($this->table_actif);
	}
}
