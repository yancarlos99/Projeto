<div class="container mt-3">
    <p class=" text-center mb-4">Login</p>
    <form method="POST" action="<?= base_url('login')?>">
        

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

        <div class="text-center">
            <button class="btn btn-indigo">Entrar</button>
        </div>

    </form>
</div>