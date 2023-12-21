<a href="?page=create_user">Cadastrar user</a>

<h2>home</h2>

<?= get('message'); ?>

<table class="table table-striped table-hover">
    <thead>
        <tr>
            <th>Id</th>
            <th>Nome</th>
            <th>Email</th>
            <th></th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        <?php
            $users = all('user');
            foreach($users as $user):
        ?>
        <tr>
            <td><?= $user->id ?></td>
            <td><?= $user->name ?></td>
            <td><?= $user->email ?></td>
            <td>
                <a class="btn btn-success" href="?page=edit_user&id=<?= $user->id; ?>">Editar</a>
            </td>
            <td>
                <a class="btn btn-danger" href="?page=delete_user&id=<?= $user->id; ?>">Deletar</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>