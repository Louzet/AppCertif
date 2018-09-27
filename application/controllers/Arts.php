<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Arts extends CI_Controller{

	public function __construct()
	{
		parent::__construct();
	}

	/**
	 * Listes de tous les livrés crées, en édition, ou achevés et rendu public
	 *
	 * @return array livres
	 */
	public function index()
	{
		/**
		 * empêcher d'arriver sur cette page, si on est pas connecté
		 */
		if(!$this->session->userdata('connect'))
        {
            redirect('connexion');
		}

		$data['title'] = 'Arts';

		$this->load->view('templates/_header', $data);
        $this->load->view('templates/_nav');
        $this->load->view('arts/index_arts_view', $data);
        $this->load->view('templates/_footer');
	}

	public function create()
	{

	}

	public function edit($id)
	{

	}

	public function show($id)
	{

	}

	public function delete($id)
	{

	}
}
