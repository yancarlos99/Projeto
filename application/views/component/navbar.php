<header class="header navbar-fixed-top">
    <nav class="navbar" role="navigation">
        <div class="container">
            <div class="menu-container js_nav-item">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".nav-collapse">
                            <span class="sr-only">Pet Store Lilicão</span>
                            <span class="toggle-icon"></span>
                        </button>

                        <div class="logo">
                            <a class="logo-wrap" href="<?= base_url('clinica/inicio') ?>">
                                <!--/// 
				                colocando os base_url para fazer o bootstrap e o css funcionar colocando base_url para reconhecer as imagens que vem das assets
							    \\\ -->
                                <img class="logo-img logo-img-main" src="<?= base_url('assets/img/logo.png') ?>" alt="" >
                                <img class="logo-img logo-img-active" src="<?= base_url('assets/img/logo.png') ?>" alt="">
                            </a>
                        </div>
            </div>

                <div class="collapse navbar-collapse nav-collapse">
                    <div class="menu-container">
                            <ul class="nav navbar-nav navbar-nav-right">
                                <li class="js_nav-item nav-item"><a class="nav-item-child nav-item-hover" href="<?= base_url('clinica/inicio') ?>"><?= $home ?></a></li>
                                <li class="js_nav-item nav-item"><a class="nav-item-child nav-item-hover" href="<?= base_url('clinica/objetivos') ?>"><?= $objetivo ?></a></li>
                                <li class="js_nav-item nav-item"><a class="nav-item-child nav-item-hover" href="<?= base_url('clinica/servicos') ?>"><?= $Servicos ?></a></li>
                                <li class="js_nav-item nav-item"><a class="nav-item-child nav-item-hover" href="<?= base_url('clinica/informativos') ?>"><?= $info ?></a></li>
                                <li class="js_nav-item nav-item"><a class="nav-item-child nav-item-hover" href="<?= base_url('clinica/agendamento') ?>"><?= $agendamento ?></a></li>
                                <li class="js_nav-item nav-item"><a class="nav-item-child nav-item-hover" href="<?= base_url('clinica/contato') ?>"><?= $contact ?></a></li>
                            </ul>
                    </div>
                </div>
        </div>
    </nav>
</header>