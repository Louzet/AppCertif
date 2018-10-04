<?php if( ! defined('BASEPATH')) exit('No script access allowed');

class Posts_model extends CI_Model
{
	private $table_posts = "posts";
	private $table_users = "users";


	public function liste_posts_model($id)
	{
		return $this->db->select('*')
						->from($this->table_posts)
						->where("id_users", $id)
						->order_by("published_at", "desc")
						->get()
						->result_array();
		
	}

	public function create_posts_model($contenu, $img_posts = FALSE)
	{
		$id = $this->session->userdata('user_id');
		
		$pseudo = $this->session->userdata('pseudo');

		$profil_image_bdd = $this->db->select('profil_image')
						->from($this->table_users)
						->where('id', $id)
						->get()
						->row_array();

		if($profil_image_bdd == '' || $profil_image_bdd == NULL)
		{
			$profil_image_bdd = base_url('/assets/images/profil_pictures/noimage.png');
		}

		date_default_timezone_set('Europe/Paris');

		$now = date('Y-m-d H:i');
		
		$this->db->set('id_users', $id);
		$this->db->set('pseudo_users', $pseudo);
		$this->db->set('photo_profil_users', $profil_image_bdd['profil_image']);
		$this->db->set('img_posts', $img_posts);
		$this->db->set('published_at', $now);
		$this->db->set('like_posts', $like_posts = 0);
		$this->db->set('dislike_posts', $dislike_posts = 0);
		$this->db->set('content', $contenu);

		return $this->db->insert($this->table_posts);
	}

	public function delete_posts_model()
	{

	}




}
