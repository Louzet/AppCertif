<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Inscription extends  CI_Controller
{

    public function __construct()
    {
		parent::__construct();
    }

	public function index()
	{
		$this->inscription();
	}

    public function inscription()
    {
        if ($this->session->userdata('user_id')) {
            redirect('accueil');
        } else {
            $data['title'] = 'Inscription';
            
            /* validation du formulaire */
            $this->form_validation->set_rules('nom', 'Nom', 'trim|required|alpha_dash|encode_php_tags');
            $this->form_validation->set_rules('prenom', 'Prenom', 'trim|required|alpha_dash|encode_php_tags');
            $this->form_validation->set_rules('pseudo', 'Pseudo', 'trim|required|alpha_dash|encode_php_tags');
            $this->form_validation->set_rules('email', 'Email', 'is_unique[users.email]|trim|required|encode_php_tags');
			$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[6]|alpha_dash|encode_php_tags');
			
            if ($this->form_validation->run() === false) {
                /* redirection vers la page d'inscription */

                $this->load->view('templates/_header', $data);
                $this->load->view('templates/_nav');
                $this->load->view('inscription_view');
                $this->load->view('templates/_footer');

            } else {

				$nom = strtolower($this->input->post('nom'));
				
				$prenom = strtolower($this->input->post('prenom'));
				
				$pseudo = strtolower($this->input->post('pseudo'));
				
				$email = strtolower($this->input->post('email'));


				// load helper password hash
				$this->load->helper('password_helper');

                $password = password_hash_helper($this->input->post('password'));

                
				/**
				 * enregistrement de l'utilisateur dans la bdd
				 */
				$this->inscription_model->inscription($nom, $prenom, $pseudo, $email, $password);
				
				/**
				 * envoie d'un email servant à activer le compte de l'utilisateur
				 */
				$this->create_account_email($email, $pseudo);

				/**
				 * message flash pour signifier à l'utilisateur qu'il a bien été inscrit
				 */
                $this->session->set_flashdata('Enregistrement réussis', 'Votre inscription a bien été pris en compte ! Consultez votre boite email');

                redirect('connexion');
            }
        }
	}
	
	public function pseudo_exists()
	{
		if($this->inscription_model->pseudo_exists_model())
		{
			
			$this->form_validation->set_message('pseudo_exists', "Ce pseudo existe déjà");
		}
	}

	public function email_exists()
	{
		if($this->inscription_model->email_exists_model())
		{
			$this->form_validation->set_message('email_exists', "Cet adresse email est déjà utilisée");
		}
	}

	public function create_account_email($email, $pseudo)
	{
		$this->load->library('email');

		$this->load->helper('email_helper');

		confirm_inscription($email, $pseudo);

	}

	public function active_account()
	{
		if (!empty($_GET['id'])) {

			$token_verif = $_GET['id'];

			$infos = $this->inscription_model->get_pseudo_email_model();

			foreach ($infos as $info)
			{
				var_dump($info);
					
				$tasks[] = $info->pseudo;
				$tasks[] = $info->email;

				var_dump($tasks);

				die();

				$data[] = $infos[$i];
				$tasks = [];

				foreach($data as $value){
					$tasks[] = $value->pseudo;
					$tasks[] = $value->email;

					var_dump($tasks);
				}
			}
			


			die();

			$data['pseudo'] = $info->pseudo;

			$data['email'] = $info->email;

			$tok = sha1($data['email'].$data['pseudo']);

			

			foreach($data as $k => $v){

				
				
				if($token_verif === $v){

					redirect("conneion");

				}
			}
			
		}
	}


}
