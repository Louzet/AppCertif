<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if (! function_exists('deconnexion'))
{
    function deconnexion()
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

}

