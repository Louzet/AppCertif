<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Accueil extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();

	}
	
	
    function index($id = FALSE, $hash = FALSE)
    {
        if(!empty($_GET['id'])){

            /**
             * Load function helper, pour retrouver l'utilisateur grâce à son id
             */
            $data['user_by_id'] = find_user_by_id($_GET['id']);

            if(!$data['user_by_id']){
                redirect("connexion");
            }
        }
        else{
            $user_id = $this->session->userdata('user_id');

            redirect("accueil?id=".$user_id);
        }
		
        if ($this->session->userdata('connect') == NULL) {

            redirect('connexion');

        } else {

			// $data['title'] = ucfirst($page);
			$data['title'] = 'Accueil';
			
            // get the user's data
            $data['user'] = $this->users_model->profil($id);
			
			/**
			 * Liste des derniers postes personnels
			 */

			$id = $this->session->userdata('user_id');
	
			$data['posts'] = $this->posts_model->liste_posts_model($id);

			// // get the user's data
			// $data['user'] = $this->users_model->profil($id);

			// // hash for the uri
			// $data['hash'] = sha1(md5($data['user'][0]['created_at'] . $data['user'][0]['pseudo']));

			// $hash['key'] = substr($data['hash'], 0, 6);

			// $pseudo = $this->session->userdata['pseudo'];

			// $hash = $pseudo.'-'.$hash['key'];
            
            // charger les infos user content dans $data dans ce controller pour afficher la photo de profil utilisateur
            //$this->output->enable_profiler(true);
            $this->load->view('templates/_header', $data, $hash);
            $this->load->view('templates/_nav', $data, $hash);
			$this->load->view('accueil_view', $data);
            $this->load->view('templates/_footer');
            
        }
    }
}





