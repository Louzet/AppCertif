<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Network extends CI_Controller {

	public function view($page = 'home') // home remplacera la page d'accueil du frameworks
	{
		$data['title'] = ucfirst($page);
		$title = $data['title'].'- App Code Igniter';

        // charger les infos user contenu dans $data dans ce controller pour afficher la photo de profil utilisateur

		$this->load->view('templates/_header', $data);	
		$this->load->view('network/'.$page, $data, $title);
		$this->load->view('templates/_footer');
		
	}

<<<<<<< HEAD
	public function home($id = FALSE, $hash = FALSE)
    {
        if($this->session->userdata('connect') == NULL)
        {
            redirect('users/login');
        }
        $data['user'] = $this->users_model->profil($id);

        $data['hash'] = sha1(md5($data['user'][0]['created_at'].$data['user'][0]['pseudo']));

        $hash = $data['hash'];

        // $data['title'] = ucfirst($page);
        $data['title'] = 'Home - App Code Igniter';

        // charger les infos user contenu dans $data dans ce controller pour afficher la photo de profil utilisateur

        //$this->output->enable_profiler(true);

        $this->load->view('templates/_header', $data, $hash);
        $this->load->view('network/home', $data);
        $this->load->view('templates/_footer');
    }


=======
>>>>>>> dev-correction

}
