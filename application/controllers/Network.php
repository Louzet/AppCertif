<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Network extends CI_Controller {

	public function view($page = 'home') // home remplacera la page d'accueil du frameworks
	{
		$data['title'] = ucfirst($page);
		$title = $data['title'].'- App Code Igniter';


		$this->load->view('templates/_header');	
		$this->load->view('network/'.$page, $data, $title);
		$this->load->view('templates/_footer');
		
	}
}
