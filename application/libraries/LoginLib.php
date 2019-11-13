<?php

class LoginLib{
    private $db;

    function __construct(){
        $ci = & get_instance();
        $this->db = $ci->db;
    }

    public function write(array $data){
        $aux['nome'] = $data['nome'];
        $aux['email'] = $data['email'];
        $aux['senha'] = md5($data['senha']);
        $this->db->insert('login', $aux);
        return $this->db->insert_id();
    }
    public function validate(array $data){
        $aux['email'] = $data['email'];
        $aux['senha'] = md5($data['senha']);
        $rs = $this->db->get_where('login', $aux);
        if(sizeof($rs->row()) == 1)
            return $rs->row();
        return false;  
    }

}