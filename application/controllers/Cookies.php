<?php

if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Cookies extends CI_Controller {
 
   	function __construct()
   	{
		parent::__construct();
	
		$this->load->helper('cookie');
   	}
 
 
 
	function set($data_cookie)
	{
	
		$this->load->helper('cookie');

		$cookie = [

			'name'   => 'thag_remember_me',

			'value'  => $data_cookie, 

			'expire' => time()+60*60*24*30,

			'path'   => '/',

			'secure' => TRUE
		];
				
	   	$this->input->set_cookie($cookie); 
		
		echo "Congragulation Cookie Set";
	}
 
 
 
	function get()
	{
	
		echo $this->input->cookie('thag_remember_me', true);
	
	}
	
}
