<?php

require '../../../bootstrap.php';



if(isEmpty()){
    flash('message', 'Preencha todos os campos',);

    header('location: /php-quem-entende/public/?page=contato');

}

$validate = validate([
    'name' => 's',
    'email' => 'e',
    'subjact' => 's',
    'message' => 's'
]);

dd($validate->name);





