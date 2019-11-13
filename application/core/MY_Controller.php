<?php 

class MY_Controller extends CI_Controller{
	function __construct(){
		parent:: __construct();
	}

	/**
	* Verfica se o usuario esta logado
	*/
	function usuario_logado(){
	if(! $this->session->logado)
		redirect('/login');
		
	}

	function show($html){
		$this->load->view('component/cabecalho'); 
		echo $html;
		$this->load->view('component/rodape');  
	}
}
	