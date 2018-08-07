<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {

	public function login() // home remplacera la page d'accueil du frameworks
	{
		/* validation form */
		$this->form_validation->set_rules('pseudo', 'Pseudo', 'trim|required|alpha_dash|encode_php_tags');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[6]|alpha_dash|encode_php_tags');

		if($this->form_validation->run() == false)
		{
			/* chargement de la vue page login */
			$this->load->view('templates/_header');	
			$this->load->view('users/login');
			$this->load->view('templates/_footer');

		}
		else
		{
			// get pseudo
			$pseudo = $this->input->post('pseudo');

			// get password encrypted
			$password = sha1($this->input->post('password'));

			// get nom

			

			// login user(id)
			$user_id = $this->users_model->login($pseudo, $password);

			if($user_id)
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

				// redirect la page d'accueil
				redirect('home');
			}
			else
			{
				/* message flash echec de connexion */
				$this->session->set_flashdata('Connexion échouée', 'Impossible de se connecter ! verifiez vos identifiants');
				
				/* redirect vers la page login */
				redirect('users/login');

	
			}
		}
	}

	public function register()
	{
		/* validation du formulaire */
		$this->form_validation->set_rules('nom', 'Nom', 'trim|required|alpha_dash|encode_php_tags');
		$this->form_validation->set_rules('prenom', 'Prenom', 'trim|required|alpha_dash|encode_php_tags');
		$this->form_validation->set_rules('pseudo', 'Pseudo', 'trim|required|alpha_dash|encode_php_tags');
		$this->form_validation->set_rules('email', 'Email', 'is_unique[users.email]|trim|required|encode_php_tags');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[6]|alpha_dash|encode_php_tags');

		if($this->form_validation->run() === false)
		{
			/* redirection vers la page d'inscription */
			$this->load->view('templates/_header');
			$this->load->view('users/register');
			$this->load->view('templates/_footer');
		}
		else
		{
			$this->users_model->register();

			$this->session->set_flashdata('Enregistrement réussis', 'Votre inscription a bien été pris en compte ! Connectez vous à présent');

			redirect('users/login');
		}
	}

	public function logout()
	{
		if(!$this->session->userdata('connect'))
		{
			redirect('users/login');
		}
		else
		{
			// destruction de la session
			$this->session->sess_destroy();
	
			// set message flash logout session
			$this->session->set_flashdata('Déconnexion', 'Vous êtes à présent déconnecté');
	
			// redirect to home page
			redirect('users/login');
		}
	}


	public function profil()
	{
		$this->load->view('templates/_header');
		$this->load->view('users/profil');
		$this->load->view('templates/_footer');
	}
}
