<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if (!function_exists('load_controller'))
{
    function load_controller($controller)
    {
        require_once(base_url() . APPPATH . 'controllers/' . $controller . '.php');

        return $controller = new $controller();

    }
}
