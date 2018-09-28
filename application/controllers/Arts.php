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

		$data['list_arts'] = $this->arts_model->list_arts();

		$this->load->view('templates/_header', $data);
        $this->load->view('templates/_nav');
        $this->load->view('arts/index_arts_view', $data);
        $this->load->view('templates/_footer');
	}

	public function create()
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
        $this->load->view('arts/create_arts_view', $data);
        $this->load->view('templates/_footer');
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

	public function save_title()
	{
		$this->form_validation->set_rules('titre', 'Titre', 'required|min_length[1]|alpha_dash|encode_php_tags');
		
		$title = $this->input->post('titre');

		$data = $this->arts_model->save_title($title);

		echo json_encode($data);
	}

	public function load_title_saved()
	{
		$titre = $this->arts_model->load_title_saved_model();

		echo json_encode($titre);
	}
}
