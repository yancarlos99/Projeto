<div class="item">
<!--/// 
	 colocando base_url para reconhecer os arquivos que vem das assets
\\\ -->
        <img class="img-responsive" alt="Slider Image" src="<?= base_url('assets/img/banner.jpg') ?>">                            
</div>

<div class="bg-color-sky-light">
    <div class="content-lg container">
        <div class="row">
            <div class="col-md-5 col-sm-5 md-margin-b-60">
                    <div class="margin-t-50 margin-b-30">
                        <h2>Informações de contato</h2>
                        <p>Endereço:</p>
                        <p>Av. Silvestre Pires Freitas, 754 Lojas 15, 16 e 17 Jardim Paraíso - Guarulhos</p>
                        <hr class="primary">
                         
                        <p>Telefone:</p>
                        <p>(11) 2835-1614</p>
                        <hr class="primary">

                        <p>email:</p>
                        <p>atendimento@petstorelilicao.com.br</p>
                        <hr class="primary">
                    </div>
                </div>

                <div class="margin-t-50 margin-b-30">
                    <div class="panel-heading" role="tab" id="headingThree">
                        <div class="container col-md-5 mt-4">
                                <!--/// 
				                colocando os base_url para fazer o bootstrap e o css funcionar colocando base_url para reconhecer os arquivos que vem das assets
							    \\\ -->
                            <form method="POST" action="<?= base_url('index.php/clinica/contato') ?>">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="md-form">
                                            <i class="fa fa-user prefix grey-text"></i>
                                            <input type="text" value="<?= isset($cliente->nome) ? $cliente->nome: '' ?>" name="nome" id="nome" class="form-control validate" required>
                                            <label for="nome" data-error="wrong" data-success="right">Nome</label>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="md-form">
                                            <i class="fa fa-envelope prefix grey-text"></i>
                                            <input type="text" name="email" id="email" class="form-control validate" required>
                                            <label for="email" data-error="wrong" data-success="right">Email</label>
                                        </div>
                                    </div>
                                
                                
                                    <div class="col-md-12">
                                        <div class="md-form">
                                            <i class="fa fa-tag prefix grey-text"></i>
                                            <input type="text" name="assunto" id="assunto" class="form-control" required>
                                            <label for="assunto" class="">Assunto</label>
                                        </div>
                                    </div>
                                </div>

                                
                                
                                <div class="md-form">
                                    <i class="fa fa-pencil prefix grey-text"></i>
                                    <textarea type="text" name="menssagem" id="menssagem" class="md-textarea" style="height: 100px"></textarea>
                                    <label for="menssagem" class="">Mensagem </label>
                                </div>
                                
                            
                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary">Enviar</button>
                                </div>
                                
                                
                            </form>
                        </div> 
                    </div>             
                </div>
            </div>
        </div>
    </div>        
</div>

<div class="map height-300">
			<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3660.9997027920667!2d-46.507028!3d-23.4243779!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce8b2648994d51%3A0xd586aa03434c7775!2sPet+Store+Lilic%C3%A3o!5e0!3m2!1spt-BR!2sbr!4v1507987062392" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
</div>