<div class="container mt-3">
    <form method="POST" class="col-md-6 mx-auto" action="<?= base_url('login/register')?>">
        <p class="h5 text-center mb-4">Cadastro do Usuário</p>

        <div class="md-form">
            <i class="fa fa-user prefix grey-text"></i>
            <input type="text" id="nome" name="nome" class="form-control">
            <label for="nome">Nome</label>
        </div>

        <div class="md-form">
            <i class="fa fa-envelope prefix grey-text"></i>
            <input type="text" id="email" name="email" class="form-control">
            <label for="email">Email</label>
        </div>

        <div class="md-form">
            <i class="fa fa-lock prefix grey-text"></i>
            <input type="password" id="senha" name="senha" class="form-control">
            <label for="senha">Senha</label>
        </div>

        <div class="md-form">
            <i class="fa fa-lock prefix grey-text"></i>
            <input type="password" id="confirma_senha" name="confirma_senha" class="form-control">
            <label for="confirma_senha">Confirme sua Senha</label>
        </div>        

        <div class="text-center">
            <button class="btn btn-indigo">Registrar</button>
        </div>

    </form>
</div>