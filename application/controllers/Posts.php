<?php if( ! defined('BASEPATH')) exit('No script access allowed');

class Posts extends CI_Controller
{

	public function create_posts()
	{
		$this->form_validation->set_rules('contenu_posts', 'Contenu Posts', 'required|max_length[128]|encode_php_tags');

		$this->form_validation->set_rules('img_posts', 'Img Posts', 'xss_clean|trim|encode_php_tags');

		if($this->form_validation->run() == false)
		{
			redirect('accueil');
		}

		else
		{
			if (!empty($_FILES['userfile']['name']))
			{
				
				// Specify configuration for File 1
				$config['upload_path'] = './assets/images/posts_images';
				$config['allowed_types'] = 'gif|jpg|png|mp4';
				$config['max_size'] = '5000';
				$config['max_width']  = '5120';
				$config['max_height']  = '768';	  

				// Initialize config for File 1
				$this->load->library('upload', $config);

				// Upload file 1
				if ( !$this->upload->do_upload('userfile') )
				{
					echo $this->upload->display_errors();
				}
				else
				{
					$contenu = $this->input->post('contenu_posts');

					$file_data = $this->upload->data('file_name');

					$data['img_posts'] = preg_replace('/\s/','_', $file_data);

					$img_posts = $data['img_posts'];

					$this->posts_model->create_posts_model($contenu, $img_posts);

					redirect('accueil', $data);
				}

			}
			else{
				$contenu = $this->input->post('contenu_posts');

				$img_posts = FALSE;

				$this->posts_model->create_posts_model($contenu);

				redirect('accueil', $data);
			}
		}
	}






	/** $data['img_posts'] = preg_replace('/\s/','_', $file_data); **/
	// public function create_posts()
	// {
	// 	/* validation form */
	// 	$this->form_validation->set_rules('contenu_posts', 'Contenu Posts', 'max_length[128]|encode_php_tags');

	// 	$this->form_validation->set_rules('img_posts', 'Img Posts', 'encode_php_tags');
		
	// 	$contenu    = $this->input->post('contenu_posts');

	// 	$userfile   = $this->input->post('userfile');

	// 	if($this->form_validation->run() == false)
	// 	{
	// 		die('fail form validation');

	// 		redirect('accueil');
	// 	}
	// 	else{
	// 		if( $_FILES['userfile']['name'] != '')
	// 		{
			
	// 			$this->uploadfile();

	// 			$this->posts_model->create_posts_model($contenu, $img_posts = FALSE);

	// 			$data['img_posts'] = false;

	// 			$img_posts == $data['img_posts'];

	// 			$this->posts_model->create_posts_model($contenu, $img_posts = false);

	// 			redirect('accueil', $data);
					
	// 		}
	// 		else
	// 		{

	// 			$file_data = $this->upload->data('file_name');

	// 			$data['img_posts'] = preg_replace('/\s/','_', $file_data);

	// 			$this->posts_model->create_posts_model($contenu, $img_posts = $data['img_posts']);

	// 			redirect('accueil', $data);
	// 		}
					
	// 	}
	// }

	public function delete_posts()
	{

	}

}
