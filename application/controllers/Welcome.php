<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Primeira aula
	 */
    
	public function index()
	{
		//$this->load->view('welcome_message');
        echo 'DW is the best discipline ever!';
	}
}
