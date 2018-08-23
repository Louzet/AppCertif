<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Connexion extends  CI_Controller {

    public function index()
    {
        /*
        if($this->session->userdata('user_id')){
            redirect('network/home');
        }
        */

        $data['title'] = 'page de connexion';

        /* validation form */
        $this->form_validation->set_rules('pseudo', 'Pseudo', 'trim|required|alpha_dash|encode_php_tags');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[6]|alpha_dash|encode_php_tags');

        if($this->form_validation->run() == false)
        {
            /* chargement de la vue page login */
            $this->load->view('templates/_header', $data);
            $this->load->view('connexion_view');
            $this->load->view('templates/_footer');
        }
        else
        {
            // get pseudo
            $pseudo = $this->input->post('pseudo');

            // get password encrypted
            $password = sha1($this->input->post('password'));

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
                redirect('accueil');
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


}


