<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Deconnexion extends CI_Controller
{
    function index()
    {
        if(!$this->session->userdata('connect'))
        {
            redirect('connexion');
        }
        else
        {
            // destruction de la session
			$this->session->sess_destroy();
			
            // destruction des cookies
            setcookie('pseudo', '', time() - 3600);
            setcookie('password', '', time() - 3600);

            // set message flash logout session
            $this->session->set_flashdata('Déconnexion', 'Vous êtes à présent déconnecté');

            // redirect to home page
            redirect('connexion');
        }
    }
}





