<div class="item">
<!--/// 
	 colocando base_url para reconhecer os arquivos que vem das assets
\\\ -->
        <img class="img-responsive" alt="Slider Image" src="<?= base_url('assets/img/banner.jpg') ?>">                            
</div>



<div class="container mt-3 ">

    <form method="POST" action="<?= base_url('index.php/clinica/agendamento') ?>">

        <h2 class="text-center">Sistema de agendamento</h2><br>
        <div class="col-md-6">
            <div class="md-form" >
                <input type="text" value="<?= isset($agenda->nome) ? $agenda->nome: '' ?>"name="nome" id="nome" class="form-control">
                <label for="nome">Nome</label>
            </div>
        </div>
        <div class="col-md-6">
            <div class="md-form">
                <input type="text" name="email" id="email" class="form-control">
                <label for="email">Email</label>
            </div>
        </div>
        <div class="col-md-6">
            <div class="md-form">
                <input type="text" name="qual_pet" id="qual_pet" class="form-control">
                <label for="qual_pet">Qual é o seu pet</label>
            </div>
        </div>

        <div class="col-md-6">
            <div class="md-form">
                <input type="text" name="nome_pet" id="nome_pet" class="form-control">
                <label for="nome_pet">Nome do seu pet</label>
            </div>
        </div>
        <div class="col-md-6">
            <div class="md-form">
                <input type="text" name="raca_pet" id="raca_pet" class="form-control">
                <label for="raca_pet">Raça do seu Pet</label>
            </div>
        </div>

        <div class="col-md-6">
            <div class="md-form">
                <input type="text" name="servico" id="servico" class="form-control">
                <label for="servico">Serviços</label>
                
            </div>
        </div>
        <div class="col-md-6">
            <div class="md-form">
                <input type="date" name="data" id="data" class="form-control">
                <label for="data"></label>
            </div>
        </div>
        <div class="col-md-6">
            <div class="md-form">
                <input type="time" name="hora" id="hora" class="form-control">
                <label for="hora"></label>
            </div>
        </div>



        <div class="text-center">
            <button class="btn btn-unique">Enviar <i class="fa fa-paper-plane-o ml-1"></i></button>
        </div>

    </form>

