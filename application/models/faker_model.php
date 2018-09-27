<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class fixtures extends CI_Model{

	public function __construct()
	{
		parent::__construct();
	}

	public function load($fixtures)
	{
		for ($i=0; $i < 10; $i++) {
			$this->db->set('name', $faker->name);
		}
	}

}

