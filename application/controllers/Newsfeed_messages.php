<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Newsfeed_messages extends CI_Controller{

    public function __construct()
    {
        parent::__construct();

        
    }
    public function index()
    {
        $this->boite_reception();
    }

    public function boite_reception()
    {
		if(!$this->session->userdata('connect'))
        {
            redirect('connexion');
		}
		/**
		 * load tous les membres du site (à voir, si je continue le système d'amis)
		 */
		

		$data['all_users'] = $this->messages_model->all_users_model();

		$id = $this->session->userdata('id');
		// get the user's data
		$data['user'] = $this->users_model->profil($id);

        $data['title'] = 'Boite de reception';

        $this->load->view('templates/_header', $data);
        $this->load->view('templates/_nav');
        $this->load->view('messages/boite_reception_view', $data);
        $this->load->view('templates/_footer');
    }

    public function create()
    {
        die('edit');
    }

    public function show($id)
    {
        die('show');
    }

    public function edit($id)
    {
        die('edit');
    }

    public function delete($id)
    {
        die('delete');
	}

	public function get_users()
	{
		$data = $this->messages_model->all_users_model();
		echo json_encode($data);
	}
	
}
