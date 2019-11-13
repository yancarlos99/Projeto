<?php

class NavbarModel extends CI_Model{
    // colocando na $labels o nome de cada pagina para aparecer na barra
    public function getNavbarLabels(){
        $labels['home'] =  'Home';
        $labels['objetivo'] = 'Valores e Objetivos'; 
        $labels['Servicos'] = 'Serviços';       
        $labels['info'] = 'Informativos';
        $labels['agendamento'] = 'Agendamento';
        $labels['contact'] = 'Contato';


        return $labels;
    }

}
