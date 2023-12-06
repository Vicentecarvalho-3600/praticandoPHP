<?php

require '../../../bootstrap.php';



$validate = validate([
    'name' => 's',
    'email' => 'e',
    'subjact' => 's',
    'message' => 's'
]);

dd($validate->name);





