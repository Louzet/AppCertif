<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /parametres_view.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
    public function index($data, $hash = FALSE)
    {

        $data['hash'] = sha1(md5($data['user'][0]['created_at'].$data['user'][0]['pseudo']));
        $hash = $data['hash'];
        if($this->session->userdata('connect'))
        {
            redirect('network/home/{$hash}');
        }
        else
        {
            redirect("network/home");
        }
    }
}
