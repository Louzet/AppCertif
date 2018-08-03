<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Network extends CI_Controller {

	public function index()
	{
		$this->load->view('network/home');
	}
}
