<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Connexion extends  CI_Controller
{
    public function index()
    {
		if($this->session->userdata('user_id'))
		{
            redirect('accueil');
        }
        
        $data['title'] = 'Connexion';

        /* validation form */
		$this->form_validation->set_rules('pseudo', 'Pseudo', 'trim|required|encode_php_tags|callback_pseudo_exists');
		
		$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[6]|alpha_dash|encode_php_tags');
		
		// get pseudo
		$pseudo = $this->input->post('pseudo');

		$pseudo = ucfirst($pseudo);

		
		// get password encrypted
		$password = sha1($this->input->post('password'));

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

			// login user(id)
			$user_id = $this->connexion_model->login(ucfirst($pseudo), ucfirst($password));

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
				
				// get the user's data
				// $data['user'] = $this->users_model->profil($id);

				// // hash for the uri
				// $data['hash'] = sha1(md5($data['user'][0]['created_at'] . $data['user'][0]['pseudo']));
	
				// $hash['key'] = substr($data['hash'], 0, 6);
	
				// $pseudo = $this->session->userdata['pseudo'];
	
				// $hash = $pseudo.'-'.$hash['key'];

				// redirect la page d'accueil

				$id_session = $this->session->userdata('user_id');
				
                redirect("accueil?id=".$id_session);
            }
            else
            {
                /* message flash echec de connexion */
                $this->session->set_flashdata('Connexion échouée', 'Impossible de se connecter ! verifiez vos identifiants');

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
		$remember = $this->input->post('remember');

		if($remember == 1 || $remember == 'on')
		{
			// die("exist");

			$pseudo = $this->input->post('pseudo');

			$password = $this->input->post('password');

			$data_cookie = [$pseudo, $password];

			$cookie= array(
 
				'name'   => 'thag_Cookie_connexion',
	  
				'value'  => $data_cookie,
	  
				'expire' => time()+60*60*24*30,

				'path'   => '/',
 
   				'secure' => TRUE
	  
			);

			$this->input->set_cookie($cookie);

		}

		elseif ($remember == '' ) 
		{
			
			$cookie = array(

				'name'   => 'thag_Cookie_connexion',
				
				'value'  => '',
				
			    'expire' => '0',

				'path'   => '/',
 
   				'secure' => TRUE
			);

			delete_cookie($cookie);
		} 
	}	

	public function pseudo_exists()
	{
		if($this->connexion_model->pseudo_exists_model())
		{
			return TRUE;
		}
			
		$this->form_validation->set_message('pseudo_exists', "Ce pseudo n'existe pas.");

		return FALSE;
	}	

}


