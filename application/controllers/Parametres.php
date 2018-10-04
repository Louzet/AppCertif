<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Parametres extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
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

            redirect("parametres?id=".$user_id);

        }

        $data['title'] = "Paramètres";

        $this->load->view('templates/_header', $data);
        $this->load->view('templates/_nav');
        $this->load->view('parametres/parametres_view', $data);
        $this->load->view('templates/_footer', $data);
    }

    public function do_upload()
    {
        $id = $this->input->get('id');

        $config['upload_path']          = './assets/images/profil_pictures';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 100;
        $config['max_width']            = 1024;
        $config['max_height']           = 768;

        $this->load->library('upload', $config);

        if ( ! $this->upload->do_upload('userfile'))
        {
            $error = array('error' => $this->upload->display_errors());

            $errors = array('error' => $this->upload->display_errors());

            $profil_image = 'noimage.png';
        }
        else
        {

            $data = array('upload_data' => $this->upload->data());

            $profil_image = strtok(preg_replace('/\s/','', $_FILES['userfile']['name']), '_');

            $query = $this->users_model->edit_profil_image($profil_image);

            redirect('parametres?id='.$id, auto);
        }
    }

    public function update_profil_config()
    {
        $get_user = find_user_by_id($this->session->userdata('user_id'));

        $id = $get_user->id;

        $nom = $this->input->post('nom');

        $prenom = $this->input->post('prenom');

        $pseudo = $this->input->post('pseudo');

        $email = $this->input->post('email');

        $metier = $this->input->post('metier');

        $data = $this->parametres_model->profil_update_model($id, $nom, $prenom, $pseudo, $email, $metier);

        echo json_encode($data);
    }



}