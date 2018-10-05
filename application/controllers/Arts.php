<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Arts extends CI_Controller{

	public function __construct()
	{
		parent::__construct();

        $this->load->helper('functions_helper');
		
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

		if(!empty($_GET['id'])){

            $data['user_by_id'] = find_user_by_id($_GET['id']);

            if(!$data['user_by_id']){

                redirect("connexion");
            }

        }
        else{

            $user_id = $this->session->userdata('user_id');

            redirect("arts?id=".$user_id);

        }
		
		$id = $this->session->userdata('user_id');
		
		// get the user's data
		$data['user'] = $this->users_model->profil($id);

		$data['title'] = 'Arts';

        $data['list_arts'] = $this->arts_model->list_arts_model();

		$this->load->view('templates/_header', $data);
        $this->load->view('templates/_nav');
        $this->load->view('arts/index_arts_view', $data);
        $this->load->view('templates/_footer');
	}

	public function create_art()
	{
        $data['title'] = 'Arts';
		/**
		 * empêcher d'arriver sur cette page, si on est pas connecté
		 */
		if(!$this->session->userdata('connect'))
        {
            redirect('connexion');
		}

        if(!empty($_GET['id'])){

            /**
             * Load function helper, pour retrouver l'utilisateur grâce à son id
             */

            $data['user_by_id'] = find_user_by_id($_GET['id']);

            if(!$data['user_by_id']){

                redirect("connexion");
            }

        }
        else{

            $user_id = $this->session->userdata('user_id');

            redirect("arts/create_art?id=".$user_id);

        }

		$id = $this->session->userdata('user_id');

		// get the user's data
		$data['user'] = $this->users_model->profil($id);

		$this->load->view('templates/_header', $data);
        $this->load->view('templates/_nav');
        $this->load->view('arts/create_arts_view', $data);
		$this->load->view('templates/_footer');

	}

	public function create_art_action()
    {
        /**
         * form validation
         */
        $this->form_validation->set_rules('c-titre', 'c-titre', 'required|encode_php_tags');

        $this->form_validation->set_rules('editor', 'Editor', 'required|encode_php_tags');

        if ($this->form_validation->run() === true) {

            $this->arts_model->create_arts_model();

            $validator['success'] = true;
            $validator['message'] = "Votre art a bien été enregistré ! ";

        }
        else{
            $validator['success'] = false;
        }
        echo json_encode($validator);
    }

	public function edit_art()
	{
		/**
		 * empêcher d'arriver sur cette page, si on est pas connecté
		 */
		if(!$this->session->userdata('connect'))
        {
            redirect('connexion');
		}
		
		$data['title'] = 'edit Arts';

		$id_auteur = $this->session->userdata('user_id');

		$titre = $_GET['title'];
		
		$data['edit_arts'] = $this->arts_model->edit_arts_model($titre, $id_auteur);

		$this->load->view('templates/_header', $data);
        $this->load->view('templates/_nav');
        $this->load->view('arts/edit_arts_view', $data);
        $this->load->view('templates/_footer');
	}

	public function show_art()
	{
		/**
		 * empêcher d'arriver sur cette page, si on est pas connecté
		 */
		if(!$this->session->userdata('connect'))
        {
            redirect('connexion');
		}
		
		$data['title'] = 'edit Arts';

		$titre = $_GET['titre'];

		$id_auteur = $this->session->userdata('user_id');
		
		$data['show_arts'] = $this->arts_model->show_arts_model($titre, $id_auteur);

		$this->load->view('templates/_header', $data);
        $this->load->view('templates/_nav');
        $this->load->view('arts/show_arts_view', $data);
        $this->load->view('templates/_footer');
	}

	public function delete_art()
	{

		$this->arts_model->delete_arts_model($id);

		$validator['message'] = "Art supprimé ! ";

		echo json_encode($validator);

	}

	public function save_title()
	{
		$this->form_validation->set_rules('titre', 'Titre', 'required|min_length[1]|alpha_dash|encode_php_tags');
		
		$title = $this->input->post('titre');

		$art_id = $this->arts_model->save_title_model($title);

		echo json_encode($art_id);
	}

	public function load_title_saved()
	{
		$titre = $this->arts_model->load_title_saved_model();

		echo json_encode($titre);
	}
}
