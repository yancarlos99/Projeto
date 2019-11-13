<?php

class Cliente{

    private $db;
    private $nome;
    private $email;
    private $assunto;
    private $menssagem;


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

        public function setAssunto($valor){
        $this->assunto = $valor;
    }

    public function setMenssagem($valor){
        $this->menssagem = $valor;
    }



    public function grava(){
        $sql = "INSERT INTO cliente (nome, email, assunto, menssagem) VALUES ('$this->nome', '$this->email', '$this->assunto', '$this->menssagem' )";
        $this->db->query($sql);

    }




   public function getCliente($id){
        $args['id'] = $id;
        $rs = $this->db->get_where('cliente', $args);
        return $rs->row();
    }
    public function atualiza(){
    
        $cliente['nome']    = $this->nome;
        $cliente['email'] = $this->email;
        $cliente['assunto']     = $this->assunto;
        $cliente['menssagem']       = $this->menssagem;
        $this->db->update('cliente', $cliente, "id = $id");

    }

    public function getAll(){
    $html   = '';    
    $rs     = $this->db->get('cliente');
    $livros = $rs->result();
    foreach($livros AS $cliente){
    $html   .=$this->getRow($cliente);
       
      
    }
    return $html;
}

    private function getRow($cliente){

   
    $remove = '<a href='.base_url('clinica/delete/'.$cliente->id).'"<i class="fa fa-remove pull-right" aria-hidden="true"></i></a>';
    



    $html = '<div class="card card-body">
                       <h4 class="card-title">Nome: '.$cliente->nome.' <br> Email: '.$cliente->email.' '.$remove.'</h4>
                       <p class="card-text">Assunto: '.$cliente->assunto.' <br> Mensagem do cliente: '.$cliente->menssagem.'</p>
                   <div class="flex-row">
                       </div>
                   </div><br>';
              
                   return $html;
    }
    
    public function delete($id){
    $this->db->delete('cliente', array('id' => $id));
    header('location:http://localhost/dw/yan/clinica/mensagemadm');
    
    }
    
    
}

    

