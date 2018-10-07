<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 *  Fonctions helper de hash et de verification du hash
 */

if(!function_exists('password_hash_helper')){
    /**
     * @param $password
     * @return bool|mixed|string
     */
	function password_hash_helper($password)
	{
		return password_hash($password, PASSWORD_DEFAULT);
	}
}

if(!function_exists('password_verify_helper')){
    /**
     * @param $password
     * @param $hash
     * @return bool
     */
	function password_verify_helper($password, $hash)
	{
		return password_verify($password, $hash) ? true : false ;
	}
}
