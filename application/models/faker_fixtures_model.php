<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class faker_fixtures_model extends CI_Model{

	private $table_faker = "faker_fixtures";

	public function __construct()
	{
		parent::__construct();
		
	}

	public function load()
	{
		$faker = Faker\Factory::create('FR_fr');
		$hasard = mt_rand(6, 15);
		for ($i=0; $i < 8; $i++) {

			$this->db->set('titre', $faker->sentence(3));
			$this->db->set('auteur', $faker->name);
			$this->db->set('date_creation', $faker->dateTimeBetween('-1 months')->format('Y-m-d H:i'));
			$this->db->set('derniere_modification', $faker->dateTimeBetween('-1 months')->format('Y-m-d H:i'));
			$this->db->set('image_couverture', $faker->imageUrl($width = 640, $height = 480));
			$this->db->set('contenu', $faker->paragraph(5));

			return $this->db->insert($this->table_faker);

		}
	}

}

