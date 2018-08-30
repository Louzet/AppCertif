<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if (! function_exists('profil'))
{
    function profil($id = NULL, $hash = FALSE)
    {
        $data['user'] = $this->users_model->profil($id);

        $data['title'] = "Profil de "  . $data['user'][0]['pseudo'];
        $data['hash'] = sha1(md5($data['user'][0]['created_at'].$data['user'][0]['pseudo']));
        $hash = $data['hash'];
        foreach ($data['user'] as $user)
        {
            if($user['id'] === $this->session->userdata('user_id')){
                $this->load->view('templates/_header', $data, $hash);
                $this->load->view('users/profil', $data, $user);
                $this->load->view('templates/_footer');
            }
            else{
                show_404();
            }
        }
    }

}
