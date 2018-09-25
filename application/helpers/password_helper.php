<?php 

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if(!function_exists('password_hash_helper')){

	function password_hash_helper($password)
	{
		return password_hash($password, PASSWORD_DEFAULT);
	}

}

if(!function_exists('password_verify_helper')){

	function password_verify_helper($password, $hash)
	{
		return password_verify($password, $hash) ? true : false ;
	}

}
