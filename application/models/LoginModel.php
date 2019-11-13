<?php
include_once APPPATH. 'libraries/LoginLib.php';

class LoginModel extends CI_Model{

    public function login(){
        if(sizeof($_POST) == 0) return;

        $this->form_validation->set_rules('email', 'Email do Usuario', 'required|valid_email');
        $this->form_validation->set_rules('senha', 'Senha', 'required|min_length[8]');

        if($this->form_validation->run()){
            $data = $this->input->post();
            $login = new LoginLib();
            $user = $login->validate($data);

            if($user){
                $this->session->set_userdata('usuario', $user);
                $this->session->set_userdata('logado', true);

                //DEPOIS DE VALIDAR OS DADOS DO USUARIO
                //INSERIR OS DADOS DO USUARIO NA SESSÃO 
                //REDIRECIONAR O USUARIO PARA A PAGINA INICIAL
                redirect('clinica/administrador');
            }
            else{
                echo 'Burro pra carai';
                $this->session->set_userdata('logado', true);
            }
        }
        else{
            echo 'Email e/ou senha invalidos';
        }
    }

    public function register(){
        if(sizeof($_POST) ==0) return;

        $this->form_validation->set_rules('nome', 'Nome do Usuario', 'required|min_length[5]');
        $this->form_validation->set_rules('email', 'Email do Usuario', 'required|valid_email');
        $this->form_validation->set_rules('senha', 'Senha', 'required|min_length[8]');
        $this->form_validation->set_rules('confirma_senha', 'Confirmacao da Senha', 'required|matches[senha]');
            
        if($this->form_validation->run()){
            $data = $this->input->post();
            $login = new LoginLib();
            $login->write($data);    
        }
        else{
            echo 'NÃO CONSEGUE NÉ MOISÉS?';
            echo validation_errors('<p class="alert">', '</p>');
        }
    }
}