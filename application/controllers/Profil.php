<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Profil extends CI_Controller
{
	public function __construct(){

		parent::__construct();

	}

	function index($id = NULL)
	{
        if(!empty($_GET['id'])){

            $data['user_by_id'] = find_user_by_id($_GET['id']);

            if(!$data['user_by_id']){

                redirect("connexion");
            }

        }
        else{

            $user_id = $this->session->userdata('user_id');

            redirect("profil?id=".$user_id);

        }

		$data['user'] = $this->users_model->profil($id);
	
		$data['title'] = "Profil de "  . $data['user_by_id']->pseudo;

		$data['hash'] = sha1(md5($data['user_by_id']->created_at.$data['user_by_id']->pseudo));

		$hash = $data['hash'];

		foreach ($data['user'] as $user)
		{
			if($user['id'] === $this->session->userdata('user_id')){
				$this->load->view('templates/_header', $data, $hash);
				$this->load->view('templates/_nav');
				$this->load->view('profil_view', $data, $user);
				$this->load->view('templates/_footer', $data);
			}
			else{
				show_404();
			}
		}
	}
}



