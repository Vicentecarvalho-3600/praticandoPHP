<?php 

// function send(array $data){
//     $to = 'vicentecarvalho.cooknet@gamil.com';
//     $subject = $data->subject;
//     $message = $data->message;
//     $headers = "From {$data->email}" . "\r\n" . 
//     'Replay-To: tedvicente3600@gmail.com' . "\r\n". 
//     'X-Mailer: PHP'. phpversion();

//     return mail($to, $subject, $message, $headers);

// }

function send(array $data){
    $email = new \PHPMailer\PHPMailer\PHPMailer;
    $email->CharSet = "UTF-8";
    $email->SMTPSecure = 'plan';
    $email->isSMTP();
    $email->Host = 'sandbox.smtp.mailtrap.io';
    $email->Port = 465;
    $email->SMTPAuth = true;
    $email->Username = "d8bbfe56926d6b";
    $email->Password = "b47b18a46403b3";
    $email->isHTML(true);
    $email->setFrom('tedvicente3600@gmail.com');
    $email->FromName = $data['quem'];
    $email->addAddress($data['para']);
    $email->Body = $data['message'];
    $email->Subject =$data['assunto'];
    $email->AltBody = "para ver email tenha certeza de esta vendo em um programa que aceita ver html";
    $email->msgHTML($data['message']);
    return $email->send();
}