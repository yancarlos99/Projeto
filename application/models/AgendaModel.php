<?php

include APPPATH . 'libraries/Agenda.php';


class AgendaModel extends CI_Model{

    public function getAll(){
        $agenda = new Agenda();
        //delegação de método
        return $agenda->getAll();
      }
      public function getAgenda($id){
  
        $agenda = new Agenda();
        //delegação de método
        return $agenda->getAgenda($id);
      }
      public function deleteAgenda($id){
      $agenda = new Agenda();
      $agenda->deleteAgenda($id);
      }

    public function registra_agenda(){
        if(sizeof($_POST) == 0) return;

        $this->load->library('form_validation');

        $this->form_validation->set_rules('nome', 'Nome do cliente', 'required');
        $this->form_validation->set_rules('email', 'Email do Usuario', 'valid_email');
        $this->form_validation->set_rules('qual_pet', 'Qual  o seu pet', 'required');
        $this->form_validation->set_rules('nome_pet', 'Nome do seu pet', 'required');
        $this->form_validation->set_rules('raca_pet', 'Raça do seu Pet', 'required');
        $this->form_validation->set_rules('servico', 'Servico', 'required');
        $this->form_validation->set_rules('data', 'Data desejada', 'required');
        $this->form_validation->set_rules('hora', 'Hora desejada', 'required');

        if($this->form_validation->run()){
        $nome      = $this->input->post('nome');
        $email   = $this->input->post('email');
        $qual_pet     = $this->input->post('qual_pet');
        $nome_pet      = $this->input->post('nome_pet');
        $raca_pet      = $this->input->post('raca_pet');
        $servico     = $this->input->post('servico');
        $data      = $this->input->post('data');
        $hora      = $this->input->post('hora');


        $form       = new Agenda($nome);
        $form->setEmail($email);
        $form->setQual_pet($qual_pet);
        $form->setNome_pet($nome_pet);
        $form->setRaca_pet($raca_pet);
        $form->setServico($servico);
        $form->setData($data);
        $form->setHora($hora);
        
        $form->grava();

    }
    else{
        //4. tratamento de erro do formulario
        echo validation_errors('<p class="alert alert-danger">', '</p>');
    }
    }

    public function editaAgenda(){
        
            if(sizeof($_POST)== 0) return;
    
                $id        = $this->input->post('id_cliente'); 
                $nome    = $this->input->post('nome');
                $qual_pet    = $this->input->post('qual_pet');
                $nome_pet = $this->input->post('nome_pet');
                $raca_pet     = $this->input->post('raca_pet');
                $servico     = $this->input->post('servico');
                $data     = $this->input->post('data');
                $hora     = $this->input->post('hora');
    
            
                $agenda = new Agenda($nome, $email);
                $agenda->setQual_pet($qual_pet);
                $agenda->setNome_pet($nome_pet);
                $agenda->setRaca_pet($raca_pet);
                $agenda->setServico($servico);
                $agenda->setData($data);
                $agenda->setHora($hora);
                $agenda->atualiza($id);
    
            
        }
    

}