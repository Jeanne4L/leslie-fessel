<?php
    $to = 'sandra.petereau@outlook.fr'; // lesliefessel@gmail.com
    $subject = 'Renseignements ou prise de rendez-vous';
    $message = strip_tags($_POST['message'])."\r\n \r\n".strip_tags($_POST['name']).' ( '.strip_tags($_POST['email']).' )';
    $headers = 'From: '.$_POST['name']. "\r\n" .
                'Reply-To: '.$_POST['email']. "\r\n" .
                'X-Priority: 1';

    if (mail($to, $subject, $message, $headers)) { 
        header('Location: index.php?status=ok#contact');
    } else {
        header('Location: index.php?status=error#contact');
    }
?>