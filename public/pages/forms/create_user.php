<?php

require '../../../bootstrap.php';



if(isEmpty()){
    flash('message', 'Preencha todos os campos',);

    return redirect('create_user');


}

$validate = validate([
    'name' => 's',
    'sobrenome' => 's',
    'email' => 'e',
    'senha' => 's'
]);


$cadastrado = create('user', $validate);

// dd($cadastrado);

if($cadastrado){
    flash('message', "Cadastrado com sucesso", "success");

    return redirect('create_user');
}

flash('message', "error ao cadastar");
redirect('create_user');