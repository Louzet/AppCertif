<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Accueil extends CI_Controller
{
    public function __construct()
    {
        $this->load->database();
        $this->session->userdata();
    }
    
    function index($id = FALSE, $hash = FALSE)
    {
        if ($this->session->userdata('connect') == NULL) {
            redirect('connexion');
        } else {
            // get the user's data
            $data['user'] = $this->users_model->profil($id);

            // hash for the uri
            $data['hash'] = sha1(md5($data['user'][0]['created_at'] . $data['user'][0]['pseudo']));
            $hash = $data['hash'];

            // $data['title'] = ucfirst($page);
            $data['title'] = 'Home - App Code Igniter';
            // charger les infos user contenu dans $data dans ce controller pour afficher la photo de profil utilisateur
            //$this->output->enable_profiler(true);
            $this->load->view('templates/_header', $data, $hash);
            $this->load->view('accueil_view', $data);
            $this->load->view('templates/_footer');
        }
    }
}





