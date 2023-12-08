<?php

require '../../../bootstrap.php';



if(isEmpty()){
    flash('message', 'Preencha todos os campos',);

    return redirect('contato');


}

$validate = validate([
    'name' => 's',
    'email' => 'e',
    'subjact' => 's',
    'message' => 's'
]);

$data = [
    'quem'=> $validate->email,
    'para'=> 'tedvicenteps4@gmail.com',
    'message'=> $validate->message,
    'assunto'=> $validate->subjact

];

if(send($data)){
    flash('message', 'Email enviado com sucesso', 'success');
    return redirect('contato');
}





