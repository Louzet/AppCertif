<?php

if(! function_exists ('find_user_by_id')){

	function find_user_by_id($id)
	{
		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "appcodeigniter";

		try{
			$db = new PDO("mysql:host=$servername; dbname=$dbname", $username, $password);

			$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

			$query = $db->prepare("SELECT nom, prenom, pseudo, email, created_at, profil_image FROM users WHERE id = ?");
		 
			$query->execute([$id]);

			$data = $query->fetch(PDO::FETCH_OBJ);

			return $data;

		}
		catch(PDOException $e)
		{
			echo $e->getMessage();
		}

		




		// $this->db->select('nom, prenom, pseudo, email, created_at, profil_image');

		// $this->db->from('users');

		// $this->db->where("id", $id);

		// $query = $this->db->get();

		// if($query->nums_row() > 0){

		// 	return $query->result_array();
		// }
		// else{
		//  	return FALSE;
		// }
	}






}
