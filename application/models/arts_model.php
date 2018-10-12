<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class arts_model extends CI_Model{

	private $table_arts = "arts";

	public function create_arts_model()
	{
        $this->load->helper('functions_helper');

        $get_user = find_user_by_id($this->session->userdata('user_id'));

        $id_auteur = $get_user->id;

        $auteur = $get_user->pseudo;

        /**
         *  enregistrement des datas du nouvel art
         */

		$this->db->set('titre', $this->input->post('c-titre'));

		$this->db->set('id_auteur', $id_auteur);

		$this->db->set('auteur', $auteur);

		$this->db->set('date_creation', 'NOW()', false);

		$this->db->set('derniere_modification', 'NOW()', false);

		$this->db->set('contenu', $this->input->post('editor'));

        $query = $this->db->insert($this->table_arts);

        return $query;

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

	public function delete_arts_model($id)
	{
        $id_auteur = $this->input->get('id');

        $this->db->where('id_auteur', $id_auteur);

        $this->db->where('id', $id);

        $this->db->delete($this->table_arts);

        if($this->db->affected_rows() > 0){

            return true;

        }else{

            return false;

        }

	}

	public function show_arts_model()
	{
	    $titre = $this->input->get('titre');

	    $id_auteur = $this->input->get('titre');

	    var_dump($titre);

        $this->db->select('*');

        $this->db->from($this->table_arts);

		$this->db->where('titre', $titre);

		$query = $this->db->get();

        if($this->db->affected_rows() > 0){

            return $query->result();

        }else{

            return false;

        }
	}

	public function edit_arts_model($titre, $id_auteur)
	{
		$this->db->where('titre', $titre);

		$this->db->where('id_auteur', $id_auteur);

		$this->db->set('derniere_modification', 'NOW()');

		$query = $this->db->get($this->table_arts);

		return $query->result();
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
