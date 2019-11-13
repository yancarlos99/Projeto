<?php

class Agenda{

    private $db;
    private $nome;
    private $email;
    private $qual_pet;
    private $nome_pet;
    private $raca_pet;
    private $servico;
    private $data;
    private $hora;



    public function __construct($nome = null, $email = null){

        $this->nome = $nome;
        $this->email = $email;
        
   

        $ci = & get_instance();
        $this->db = $ci->db;

    }
    
    //metodos acessores

    public function setEmail($valor){
        $this->email = $valor;
    }

        public function setQual_pet($valor){
        $this->qual_pet = $valor;
    }

    public function setNome_pet($valor){
        $this->nome_pet = $valor;
    }

    public function setRaca_pet($valor){
        $this->raca_pet = $valor;
    }

    public function setServico($valor){
        $this->servico = $valor;
    }

    public function setData($valor){
        $this->data = $valor;
    }

    public function sethora($valor){
        $this->hora = $valor;
    }

    public function selecionar(){
        $sql = "SELECT count(*) FROM agendamento WHERE data = '$this->data' and hora = '$this->hora'";
        $resultado = $this->db->query($sql);
        if ($resultado > 0);
             echo 'Já existe esse horario marcado';
        return;
        

    }



    public function grava(){
        $sql = "INSERT INTO agendamento (nome, email, qual_pet, nome_pet, raca_pet, servico, data, hora) VALUES ('$this->nome', '$this->email', '$this->qual_pet', '$this->nome_pet', '$this->raca_pet', '$this->servico', '$this->data', '$this->hora')";
        $this->db->query($sql);

    }

    public function getAgenda($id){
        $args['id'] = $id;
        $rs = $this->db->get_where('agendamento', $args);
        return $rs->row();
    }
    public function atualiza_agenda(){
    
        $agenda['nome']    = $this->nome;
        $agenda['email'] = $this->email;
        $agenda['qual_pet']     = $this->qual_pet;
        $agenda['nome_pet']       = $this->nome_pet;
        $agenda['raca_pet']       = $this->raca_pet;
        $agenda['servico']       = $this->servico;
        $agenda['data']       = $this->data;
        $agenda['hora']       = $this->horas;
        $this->db->update('agendamento', $agenda, "id = $id");

    }

    public function getAll(){
    $html   = '';    
    $rs     = $this->db->get('agendamento');
    $agendamento = $rs->result();
    foreach($agendamento AS $agenda){
    $html   .=$this->getRow($agenda);
       
      
    }
    return $html;
}

    private function getRow($agenda){


    $edit = '<a href='.base_url('clinica/editaAgenda/'.$agenda->id).'"<i class="fa fa-edit pull-right" aria-hidden="true"></i></a>';
    $remove = '<a href='.base_url('clinica/deleteagenda/'.$agenda->id).'"<i class="fa fa-remove pull-right" aria-hidden="true"></i></a>';
    



    $html = '<div class="card card-body">
                       <h4 class="card-title">Nome: '.$agenda->nome.' <br> Email: '.$agenda->email.' '.$remove.'</h4>
                       <p class="card-text">Qual é o pet: '.$agenda->qual_pet.' <br>Nome do pet: '.$agenda->nome_pet.' <br>Raça do pet: '.$agenda->raca_pet.' <br>Serviço: '.$agenda->servico.' <br> Data: '.$agenda->data.' <br>Hora: '.$agenda->hora.' </p>
                   <div class="flex-row">
                       </div>
                   </div><br>';
              
                   return $html;
    }
    
    public function deleteAgenda($id){
    $this->db->delete('agendamento', array('id' => $id));
    header('location:http://localhost/dw/yan/clinica/agendaadm');
    
    }

       

}