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

			$query = $db->prepare("SELECT id, nom, prenom, metier, pseudo, email, created_at, profil_image FROM users WHERE id = ?");
		 
			$query->execute([$id]);

			$data = $query->fetch(PDO::FETCH_OBJ);

			return $data;

		}
		catch(PDOException $e)
		{
			echo $e->getMessage();
		}
	}
}

// if(! function_exists ('find_user_by_email')){

// 	function find_user_by_email()
// 	{
// 		$servername = "localhost";
// 		$username = "root";
// 		$password = "";
// 		$dbname = "appcodeigniter";

// 		try{
// 			$db = new PDO("mysql:host=$servername; dbname=$dbname", $username, $password);

// 			$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// 			$query1 = $db->prepare("SELECT nom, prenom, pseudo, email, created_at, profil_image FROM users");
		 
// 			$query1->execute();

// 			$data1 = $query1->fetch(PDO::FETCH_OBJ);

// 			var_dump($data1);

// 			return $data1;

// 		}
// 		catch(PDOException $e)
// 		{
// 			echo $e->getMessage();
// 		}
// 	}
// }







