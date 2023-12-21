<h2>Usuario</h2>

<?= get('message'); ?>

<form action="./pages/forms/create_user.php" method="POST" role="form">
    

    <div class="form-group">
        <label for="">Nome</label>
        <input type="text" class="form-control" name="name" placeholder="Digite seu nome">
    </div>


    <div class="form-group">
        <label for="">Sobrenome</label>
        <input type="text" class="form-control" name="sobrenome" placeholder="Digite seu sobrenome">
    </div>

    <div class="form-group">
        <label for="">Email</label>
        <input type="email" class="form-control" name="email" placeholder="Digite seu email">
    </div>

    <div class="form-group">
        <label for="">Senha</label>
        <input type="password" class="form-control" name="senha" placeholder="Digite um assunto">
    </div>
   

    <button type="submit" class="btn btn-primary">enviar</button>
</form>