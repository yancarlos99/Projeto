<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            <div class="container">
                <ol class="carousel-indicators">
                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                </ol>
            </div>

            <div class="carousel-inner" role="listbox">
                <div class="item active">
                <!--/// 
				colocando os base_url para fazer o bootstrap e o css funcionar colocando base_url para reconhecer as imagens que vem das assets
							\\\ -->
                    <img class="img-responsive" alt="Slider Image" src="<?= base_url('assets/img/1920x1080/bannercachorro1.jpg') ?>">
                    <div class="container">
                        <div class="carousel-centered">
                            <div class="margin-b-40">
                                <h1 class="carousel-title">Centro Veterinário</h1>
                            </div>
                            <a href="<?= base_url('clinica/servicos') ?>" class="btn-theme btn-theme-sm btn-white-brd text-uppercase">Conheça nossos serviços</a>
                        </div>
                    </div>
                </div>
                <div class="item">
                <!--/// 
				colocando os base_url para fazer o bootstrap e o css funcionar colocando base_url para reconhecer as imagens que vem das assets
							\\\ -->
                    <img class="img-responsive" alt="Slider Image" src="<?= base_url('assets/img/1920x1080/bannergato2.jpg') ?>">
                    <div class="container">
                        <div class="carousel-centered">
                            <div class="margin-b-40">
                                <h2 class="carousel-title">Pet Shop</h2>
                                
                            </div>
                            <a href="<?= base_url('clinica/servicos') ?>" class="btn-theme btn-theme-sm btn-white-brd text-uppercase">Conheça nossos serviços</a>
                        </div>
                    </div>
                </div>
            </div>
</div>