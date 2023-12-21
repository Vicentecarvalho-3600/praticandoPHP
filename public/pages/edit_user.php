<h2>Editar Usuario</h2>

<?= get('message'); ?>

<?php
    $user = find('user', 'id', $_GET['id']);
?>

<form action="./pages/forms/update_user.php" method="POST" role="form">
    

    <div class="form-group">
        <label for="">Nome</label>
        <input type="text" class="form-control" name="name" placeholder="Digite seu nome" value="<?= $user->name; ?>" >
    </div>

    <input type="hidden" name="id" value="<?= $user->id; ?>">

    <div class="form-group">
        <label for="">Sobrenome</label>
        <input type="text" class="form-control" name="sobrenome" placeholder="Digite seu sobrenome" value="<?= $user->sobrenome; ?>">
    </div>

    <div class="form-group">
        <label for="">Email</label>
        <input type="email" class="form-control" name="email" placeholder="Digite seu email" value="<?= $user->email; ?>">
    </div>

   

    <button type="submit" class="btn btn-primary">enviar</button>
</form>