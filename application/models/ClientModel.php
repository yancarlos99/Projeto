<?php

include APPPATH . 'libraries/Cliente.php';


class ClientModel extends CI_Model{

    public function getAll(){
      $cliente = new Cliente();
      //delegação de método
      return $cliente->getAll();
    }
    public function getCliente($id){

      $cliente = new Cliente();
      //delegação de método
      return $cliente->getCliente($id);
    }
    public function delete($id){
    $cliente = new Cliente();
    $cliente->delete($id);
    }


    public function registra(){
        if(sizeof($_POST) == 0) return;

        $nome      = $this->input->post('nome');
        $email   = $this->input->post('email');
        $assunto     = $this->input->post('assunto');
        $menssagem      = $this->input->post('menssagem');


        $form       = new Cliente($nome);
        $form->setEmail($email);
        $form->setAssunto($assunto);
        $form->setMenssagem($menssagem);
        
        $form->grava();
    }



    public function edita(){
    
        if(sizeof($_POST)== 0) return;

            $id        = $this->input->post('id_cliente'); 
            $nome    = $this->input->post('nome');
            $email    = $this->input->post('email');
            $assunto = $this->input->post('assunto');
            $menssagem     = $this->input->post('menssagem');

        
            $cliente = new Cliente($nome, $email);
            $cliente->setAssunto($assunto);
            $cliente->setMenssagem($menssagem);
            $cliente->atualiza($id);

        }
    }