<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {

	public function connexion() // home remplacera la page d'accueil du frameworks
	{
		
		$this->load->view('templates/_header');	
		$this->load->view('users/connexion');
		$this->load->view('templates/_footer');
		
	}

	public function inscription()
	{
		$this->load->view('templates/_header');
		$this->load->view('users/inscription');
		$this->load->view('templates/_footer');
	}

	public function deconnexion()
	{
		
	}
}
