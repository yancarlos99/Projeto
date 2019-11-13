<?php

class Login extends MY_Controller{

    public function index(){
        
        $this->load->model('LoginModel', 'login');
        $this->login->login();

        $html = $this->load->view('clinica/form_login', null, true);
        $this->show($html);     
    }
   
    public function register(){
        $this->load->model('LoginModel', 'login');
        $this->login->register();
        
        $html = $this->load->view('clinica/form_register', null, true);
        $this->show($html);
    }

    function show($html){
        $this->load->helper('url');
        $this->load->view('component/cabecalho'); 
        echo $html;
        $this->load->view('component/rodape');  
    }

    function logout(){
        $this->session->sess_destroy();
        redirect('/login');
    }

    function teste(){
        $this->usuario_logado();
        echo 'Exibir conteudo dessa pagina para: ';
        echo $this->session->usuario->nome;

    }
}