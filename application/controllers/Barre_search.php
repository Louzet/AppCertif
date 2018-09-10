<?php if(! defined('BASEPATH')) exit('No direct script access allowed');

// amis?ajouter_amis.php&<?= $post['pseudo_users'].sha1($post['pseudo_users'])

class Barre_search extends CI_Controller
{
	public function index()
	{
		
		$query = $this->input->post('query');
		
		$data = $this->barre_search_model->fetch_search($query);

		echo json_encode($data);
	}
}
