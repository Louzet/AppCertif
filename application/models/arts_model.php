<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class arts_model extends CI_Model{

	private $table_arts = "arts";

	public function create_arts_model()
	{

		$this->load->helper('functions_helper');

		$get_user = find_user_by_id($this->session->userdata('user_id'));

		$id_auteur = $get_user->id;

		$auteur = $get_user->pseudo;

		var_dump($id_auteur . ' '  . $auteur . ' ' );

		$titre = $this->input->post('#c-titre');

		$contenu = $this->input->post('editor');

		$data = [
            'titre'                 =>     $titre,
            'id_auteur'             =>     $id_auteur,
            'auteur'                =>     $auteur,
            'date_creation'         =>     'NOW()',
            'derniere_modification' =>     'NOW()',
            'contenu'               =>     $contenu
        ];

        return $query = $this->db->insert($this->table_arts, $data);

	}

	public function list_arts_model()
	{

		$this->db->select('*');

		$this->db->from($this->table_arts);

		$this->db->order_by('date_creation','DESC');

		$query = $this->db->get();

		if($query->num_rows() > 0)
		{
			return $query->result();
		}
		else{
			return false;
		}
	}

	public function delete_arts_model()
	{

		/*$id_auteur = $_GET['id'];*/

        /*$id = $this->input->get('dataid');

        $id_auteur = $this->input->get('id');

        $this->db->where('id', $id);

        $this->db->where('id_auteur', $id_auteur);

        $this->db->delete($this->table_arts);

        return true;*/

        $id = $this->input->get('id');

        $this->db->where('id', $id);

        $this->db->delete($this->table_arts);

        if($this->db->affected_rows() > 0){

            return true;

        }else{

            return false;

        }

	}

	public function show_arts_model($titre, $id_auteur)
	{
		$this->db->where('titre', $titre);

		$this->db->where('id_auteur', $id_auteur);

		$query = $this->db->get($this->table_arts);

		return $query->result();
	}

	public function edit_arts_model($titre, $id_auteur)
	{
		$this->db->where('titre', $titre);

		$this->db->where('id_auteur', $id_auteur);

		$this->db->set('derniere_modification', 'NOW()');

		$query = $this->db->get($this->table_arts);

		return $query->result();
	}

	public function save_arts()
	{

	}

	public function save_title_model($title)
	{
		$this->load->helper('functions_helper');

		$get_user = find_user_by_id($this->session->userdata('user_id'));

		$id_auteur = $get_user->id;

		$auteur = $get_user->pseudo;

		$this->db->set('titre', strtolower(str_replace(' ', '_', $title)));

		$this->db->set('id_auteur', $id_auteur);

		$this->db->where('auteur', $auteur);

		/* enregistrement des données dans la BDD */
		return $this->db->insert($this->table_arts);
	}

	public function load_title_saved_model()
	{
		$this->load->helper('functions_helper');

		$get_user = find_user_by_id($this->session->userdata('user_id'));

		$id_auteur = $get_user->id;

		$this->db->where('id_auteur', $id_auteur);

		$this->db->order_by('date_creation', 'DESC');

		$this->db->limit(1);

		$query = $this->db->get($this->table_arts);

		if($query->num_rows() === 1)
		{
			return $query->result()[0]->titre;
		}
	}

}
