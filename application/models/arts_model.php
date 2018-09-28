<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class arts_model extends CI_Model{

	private $table_arts = "arts";


	public function list_arts()
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

	public function save_title($title)
	{
		$this->load->helper('functions_helper');

		$get_user = find_user_by_id($this->session->userdata('user_id'));

		$id_auteur = $get_user->id;

		$auteur = $get_user->pseudo;

		$this->db->set('titre', $title);

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
