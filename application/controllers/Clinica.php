<?php 

class Clinica extends CI_Controller{
    public function inicio(){
        $this->load->helper('url');
        $this->load->view('component/cabecalho');
        // aqui vai o seu código da página
        $this->load->model('NavbarModel' , 'navbar');
        $data = $this->navbar->getNavbarLabels();
        $this->load->view('component/navbar', $data);
        // aqui vai o conteúdo da página
        $this->load->view('clinica/carousel');
        $this->load->view('clinica/container');
        $this->load->view('clinica/footer');

        // o último arquivo a ser carregado
        $this->load->view('component/rodape');

    }

    public function objetivos(){
        $this->load->helper('url');
        $this->load->view('component/cabecalho');
        // aqui vai o seu código da página
        $this->load->model('NavbarModel' , 'navbar');
        $data = $this->navbar->getNavbarLabels();
        $this->load->view('component/navbar', $data);
        // aqui vai o seu código da página
        $this->load->view('clinica/objetivos');

        $this->load->view('clinica/footer');
        // o último arquivo a ser carregado
        $this->load->view('component/rodape');

   
    }

    public function servicos(){
        $this->load->helper('url');
        $this->load->view('component/cabecalho');
        // aqui vai o seu código da página
        $this->load->model('NavbarModel' , 'navbar');
        $data = $this->navbar->getNavbarLabels();
        $this->load->view('component/navbar', $data);
        // aqui vai o seu código da página
        $this->load->view('clinica/servicos');
        $this->load->view('clinica/footer');
        // o último arquivo a ser carregado
        $this->load->view('component/rodape');





    }

    public function informativos(){

        $this->load->helper('url');
        $this->load->view('component/cabecalho');
        // aqui vai o seu código da página
        $this->load->model('NavbarModel' , 'navbar');
        $data = $this->navbar->getNavbarLabels();
        $this->load->view('component/navbar', $data);
        // aqui vai o seu código da página
        $this->load->view('clinica/info');
        $this->load->view('clinica/footer');
        // o último arquivo a ser carregado
        $this->load->view('component/rodape');

    }

    public function contato(){
        $this->load->helper('url');
        $this->load->view('component/cabecalho');
        // aqui vai o seu código da página
        $this->load->model('NavbarModel' , 'navbar');
        $data = $this->navbar->getNavbarLabels();
        $this->load->view('component/navbar', $data);
        // aqui vai o seu código da página
        $this->load->model('ClientModel' , 'cliente');
        $this->cliente->registra();       
        $this->load->view('clinica/contato');
        $this->load->view('clinica/footer');
        // o último arquivo a ser carregado
        $this->load->view('component/rodape');

    }

    public function agendamento(){
        $this->load->helper('url');
        $this->load->view('component/cabecalho');
        // aqui vai o seu código da página
        $this->load->model('NavbarModel' , 'navbar');
        $data = $this->navbar->getNavbarLabels();
        $this->load->view('component/navbar', $data);
        // aqui vai o seu código da página


        

        $this->load->model('AgendaModel' , 'agenda');
        $this->agenda->registra_agenda();

        $this->load->view('clinica/agendamento');

        $this->load->view('clinica/footer');
        // o último arquivo a ser carregado
        $this->load->view('component/rodape');


    }

    public function logout(){
      unset($_SESSION);
      session_destroy();
      redirect("clinica/login");		
    }

    public function login(){
        $this->load->helper('url');
        $this->load->view('component/cabecalho');
        $this->load->model('LoginModel');
        $this->load->view('clinica/login');
        $this->load->view('component/rodape');
    }

    public function termo(){
        $this->load->helper('url');
        $this->load->view('component/cabecalho');
        // aqui vai o seu código da página
        $this->load->model('NavbarModel' , 'navbar');
        $data = $this->navbar->getNavbarLabels();
        $this->load->view('component/navbar', $data);
        
        $this->load->view('clinica/termo');

        $this->load->view('clinica/footer');
        // o último arquivo a ser carregado
        $this->load->view('component/rodape');
        
    }

    public function politica(){
        $this->load->helper('url');
        $this->load->view('component/cabecalho');
        // aqui vai o seu código da página
        $this->load->model('NavbarModel' , 'navbar');
        $data = $this->navbar->getNavbarLabels();
        $this->load->view('component/navbar', $data);
        
        $this->load->view('clinica/politica');

        $this->load->view('clinica/footer');
        // o último arquivo a ser carregado
        $this->load->view('component/rodape');

    }

    public function administrador(){
        $this->load->helper('url');
        $this->load->view('component/cabecalho_adm');

        $this->load->view('component/navbar_adm');

        $this->load->view('clinica/administrador');

        $this->load->view('component/rodape_adm');


    }

    public function mensagemadm(){
        $this->load->helper('url');
        $this->load->view('component/cabecalho_adm');

        $this->load->view('component/navbar_adm');

        $this->load->model('ClientModel', 'cliente');
        $data['lista'] = $this->cliente->getAll();
        $this->load->view('clinica/lista-cliente', $data);

       

        $this->load->view('component/rodape_adm');



    }

    public function edita($id = 0){
    

            $this->load->helper('url');
            $this->load->view('component/cabecalho');
            
            
            $this->load->model('NavbarModel', 'navbar');
            $data = $this->navbar->getNavbarLabels();
            $this->load->view('component/navbar', $data);
        
        
            //aqui vai o seu código da página
            $this->load->model('clientModel', 'cliente');
            $this->cliente->editaCliente();

            $data['cliente'] = $this->cliente->getCliente($id);
            $data['action'] = 'cliente/edita';
            $this->load->view('cliente/contato', $data);
        
            //o ultimo arquivo a ser carregado
            $this->load->view('clinica/rodape'); 
        
    }

    public function delete($id = 0){
        $this->load->helper('url');
        $this->load->model('ClientModel', 'cliente');
        $this->cliente->delete($id);
    }

    public function agendaadm(){
        $this->load->helper('url');
        $this->load->view('component/cabecalho_adm');

        $this->load->view('component/navbar_adm');

        $this->load->model('AgendaModel', 'agenda');
        $data['agendamento'] = $this->agenda->getAll();
        $this->load->view('clinica/lista-agenda', $data);

        $this->load->view('component/rodape_adm');

    }

    public function editaAgenda($id = 0){
        
    
                $this->load->helper('url');
                $this->load->view('component/cabecalho');
                
                
                $this->load->model('NavbarModel', 'navbar');
                $data = $this->navbar->getNavbarLabels();
                $this->load->view('component/navbar', $data);
            
            
                //aqui vai o seu código da página
                $this->load->model('agendaModel', 'agenda');
                $this->agenda->editaAgenda();
                $data['agenda'] = $this->agenda->getAgenda($id);
                $data['action'] = 'agenda/editaAgenda';
                $this->load->view('clinica/agendamento', $data);
            
                //o ultimo arquivo a ser carregado
                $this->load->view('clinica/rodape'); 
            
        }

        public function deleteAgenda($id = 0){
            $this->load->helper('url');
            $this->load->model('AgendaModel', 'agenda');
            $this->agenda->deleteAgenda($id);

        }




}