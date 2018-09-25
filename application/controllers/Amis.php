<?php if(! defined('BASEPATH')) exit('No direct script access allowed');

// amis?ajouter_amis.php&<?= $post['pseudo_users'].sha1($post['pseudo_users'])

class Amis extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		

	}

	public function index()
	{

		$data['title'] = 'Liste d\'amis';

		$this->load->view('templates/_header', $data);

		$this->load->view('templates/_nav', $data);

		$this->load->view('crud_amis/liste_amis_view');

		$this->load->view('templates/_footer', $data);
	}

	public function liste_amis()
	{
		$result = $this->amis_model->liste_amis_model();

		echo json_encode($result);
	}

	public function search_amis()
	{

		$query  = '';
		
		if($this->input->post('query')){

			$query = $this->input->post('query');
		}

		$data = $this->amis_model->search_friends($query);

		if( $data->num_rows() > 0 ){

			echo json_encode($data->result());
		}


		// $output .= 
		// '<ul>';
		

		// if( $data->num_rows() > 0 ){

		// 	foreach($data->result() as $row)
		// 	{
		// 		$output .= '
		// 			<li>
		// 				<td><a class="nav-item" href="#">' . $row->pseudo . '</a></td>
		// 			</li>
		// 				';
		// 	}
		// }
		// else{
		// 	$output .= '<li>
		// 					<a class="nav-item">No data found</a>
		// 				</li>';
		// }

		// $output .= '</ul>';

		// echo json_encode($output);


	}
	
	public function ajouter_amis()
	{
		
	}

}
