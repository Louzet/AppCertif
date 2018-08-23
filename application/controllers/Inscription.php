<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Inscription extends  CI_Controller
{

    public function __construct()
    {
        parent::__construct();

    }


    public function index()
    {
        if ($this->session->userdata('user_id')) {
            redirect('home');
        } else {
            /* validation du formulaire */
            $this->form_validation->set_rules('nom', 'Nom', 'trim|required|alpha_dash|encode_php_tags');
            $this->form_validation->set_rules('prenom', 'Prenom', 'trim|required|alpha_dash|encode_php_tags');
            $this->form_validation->set_rules('pseudo', 'Pseudo', 'trim|required|alpha_dash|encode_php_tags');
            $this->form_validation->set_rules('email', 'Email', 'is_unique[users.email]|trim|required|encode_php_tags');
            $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[6]|alpha_dash|encode_php_tags');

            if ($this->form_validation->run() === false) {
                /* redirection vers la page d'inscription */
                $this->load->view('templates/_header');
                $this->load->view('templates/_nav');
                $this->load->view('inscription_view');
                $this->load->view('templates/_footer');
            } else {

                $nom = $this->input->post('nom');
                $prenom = $this->input->post('prenom');
                $pseudo = $this->input->post('pseudo');
                $email = $this->input->post('email');
                $password = sha1($this->input->post('password'));

                setlocale(LC_TIME, 'fr', 'fr_FR', 'fr_FR.utf8');
                $created_at = strftime("%A %d %B %Y", 'NOW');


                $this->users_model->register($nom, $prenom, $pseudo, $email, $password, $created_at);

                $this->session->set_flashdata('Enregistrement réussis', 'Votre inscription a bien été pris en compte ! Connectez vous à présent');

                redirect('connexion');
            }
        }
    }


}