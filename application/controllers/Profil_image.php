<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if (! function_exists('profil_image'))
{
    function profil_image()
    {
        $this->load->helper('inflector');
        $data['user'] = $this->users_model->profil();
        if($data['user'][0]['id'] === $this->session->userdata['user_id']){
            $this->form_validation->set_rules('userfile', 'Userfile', 'trim|alpha_dash|encode_php_tags');
            if($this->form_validation->run() === FALSE){
                $this->load->view('templates/_header', $data);
                $this->load->view('users/profil', $data);
                $this->load->view('templates/_footer');
            }
            else{
                $data['title'] = 'profil de ' . $data['user'][0]['pseudo'];
                $config['upload_path'] = './assets/images/profil_pictures';
                $config['allowed_types'] = 'jpg|png|gif';
                $config['max_size'] = '20480';
                $config['max_width'] = '1960';
                $this->load->library('upload', $config);
                if(!$this->upload->do_upload()){
                    $errors = array('error' => $this->upload->display_errors());
                    $profil_image = 'noimage.png';
                }
                else{
                    $data = array('upload_data' => $this->upload->data());
                    $profil_image = humanize(preg_replace('/\s/','', $_FILES['userfile']['name']), '_');
                    $this->users_model->edit_profil_image($profil_image);
                    redirect('profil_view', auto);
                }
            }
        }
    }
}
