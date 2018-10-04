<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
require_once(dirname(__FILE__)."/Cookies.php");
class Connexion extends  CI_Controller
{
	public function __construct(){

		parent::__construct();

		$this->load->helper('cookie');

	}

    public function index()
    {
		if($this->session->userdata('user_id'))
		{
            redirect('accueil');
        }
        
        $data['title'] = 'Connexion';

        /* validation form */
		$this->form_validation->set_rules('pseudo', 'Pseudo', 'trim|required|min_length[3]|encode_php_tags');
		
		$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[6]|alpha_dash|encode_php_tags');

        if($this->form_validation->run() == false)
        {

            /* chargement de la vue page login */
            $this->load->view('templates/_header', $data);
            $this->load->view('templates/_nav', $data);
            $this->load->view('connexion_view');
			$this->load->view('templates/_footer');
			
        }
        else
        {
			
			/**
			 * On insert le pseudo et le password de l'utilisateur
			 * dans le model, pour vérifier leurs existences et connecter l'utilisateur
			 */

			// get pseudo
			$pseudo = strtolower($this->input->post('pseudo'));

			// get password encrypted
			$password = $this->input->post('password');
			

			/**
			 *  enregistrement des données en cookies, si l'utilisateur
			 *  coché le "remember me";
			 */
            $user_id  = $this->connexion_model->login($pseudo, $password);

			if($this->input->post('remember') != NULL){

				$value = [
					'pseudo'   => $pseudo,
					'password' => $password
				];

				$cookie = array(
					'name'     =>   'connexion',
					'value'    =>   $value,
					'expire'   =>   time()+60*60*24*30,
					'domaine'  =>   'www.thag.fr',
					'path'     =>   '/',
					// 'prefix' => 'thag_',
					'secure'   =>   TRUE
				);


				$this->input->set_cookie( $cookie );
			}

			/**
			 *  Enregistrement des données en session
			 */
			if( count($user_id) > 0 )
            {
                // create session
                $user_data = array(

					'user_id' => $user_id,
					
					'pseudo' => $pseudo,
					
					'connect' => TRUE
				);

                // set userdata in session
                $this->session->set_userdata($user_data);

                // set message flashdata login success
				$this->session->set_flashdata('Connexion réussie', 'Vous êtes maintenant connecté');

				$id_session = $this->session->userdata('user_id');
				
                redirect("accueil?id=".$id_session);
            }
            else
            {
                var_dump($user_id  = $this->connexion_model->login($pseudo, $password));
                /* message flash echec de connexion */
                $this->session->set_flashdata('Connexion échouée', 'Impossible de se connecter ! verifiez vos identifiants');

                die();
                /* redirect vers la page login */
                redirect('connexion');
            }
        }
	}
	
	/**
	 * Fonction remember, mettre en cookie le pseudo, et le mot de passe
	 */
	public function set_remember_me()
	{

		if($this->input->post('remember'))

		{                    
			$pseudo = $this->input->post('pseudo');

			$password = $this->input->post('password');

			$data_cookie = [$pseudo, $password];

			$this->load->helper('cookie');

			$cookie = [

				'name'   => 'thag_remember_me',

				'value'  => $data_cookie, 

				'expire' => time()+60*60*24*30,

				'path'   => '/',

				'secure' => TRUE
			];
					
			var_dump($this->input->set_cookie($cookie));                 
		}
		

	}	

	

	/**
	 * fonction permattant d'envoyer un email à l'utilisateur afin de réinitialiser le mot de passe
	 */
	public function mot_de_passe_perdu()
    {
		
		$this->load->library('email');

		$email = strtolower($this->input->post("email_password_forget"));
		
		/* $data contient toutes les infos de l'utilisateur, récupéré grace à l'email saisie */

		$datas = $this->connexion_model->mot_de_passe_perdu_model($email);

		$this->load->helper('email_helper');

		/**
		 *  fonction envoie d'email venant du helper email
		 */

		reinit_password_email($email);

		/**
		 *  message flash informant l'utilisateur qu'un mail lui a été envoyé
		 */
		$this->session->set_flashdata('email envoyé', "Un email a été envoyé à votre adresse");

		/**
		 * redirect vers la page de connexion
		 */
		redirect("connexion");

	}
	
	/**
	 * page permettant de réinitialiser le mot de passe utilisateur
	 */

	public function reinit_mot_de_passe()
    {
        $data['title'] = 'verification url';


        if (!empty($_GET['id'])) {

            $token_verif = $_GET['id'];

			$infos = $this->connexion_model->reinit_pass_model();
			
			foreach ($infos as $k=>$info)
			{
				$data[] = sha1($info->email);

				foreach($data as $k => $v){

					if($token_verif === $v){

						$data['toto'] = $info->email;

						$data['title'] = 'changez de mot de passe';

						// $this->session->set_flashdata('data',$data);
						$this->load->view('templates/_header', $data);
						$this->load->view('reinit/reinit_mot_de_passe_view', $data);
						$this->load->view('templates/_footer');
						// redirect("connexion/change_password");
						// $this->change_password($data);
					
					
						$this->form_validation->set_rules('pass', 'Password', 'trim|required|encode_php_tags');
						$this->form_validation->set_rules('passconf', 'Password Confirmation', 'trim|required|encode_php_tags|matches[pass]');
				
						/**
						 *  Validation du formulaire
						 */
				
						if($this->form_validation->run() == false ){
							var_dump($_GET);
							$uri = $_SERVER['REQUEST_URI'];
							var_dump($uri);
							// var_dump(current_url());
							// die();
							// $id = $_GET['id'];
							// $uri = $this->uri->uri_string();
							// $uri_page = $uri.'?id='.$id;
							// redirect($uri_page);
							// $this->load->view('templates/_header', $data);
							// $this->load->view('reinit/reinit_mot_de_passe_view', $data);
							// $this->load->view('templates/_footer');
							
						}
						$pass = $this->input->post('pass');
				
						$this->connexion_model->change_password_model($pass);
						
					}
				}
			}

        }
	}
	
	


   


}


