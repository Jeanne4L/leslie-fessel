<?php
    $to = 'sandra.petereau@outlook.fr'; // lesliefessel@gmail.com
    $subject = 'Renseignements ou prise de rendez-vous';
    $message = strip_tags($_POST['message'])."\r\n \r\n".strip_tags($_POST['name']).' ( '.strip_tags($_POST['email']).' )';
    $headers = 'From: '.$_POST['name']. "\r\n" .
                'Reply-To: '.$_POST['email']. "\r\n" .
                'X-Priority: 1';

    if (mail($to, $subject, $message, $headers)) { 
        header('Location: index.php#contact?status=ok');
        // echo '<p id="validSend">Votre message a bien été envoyé, je vous recontacte au plus vite.</p>';
    } else {
        header('Location: index.php#contact?status=error');
        // echo '<p id="invalidSend">Une erreur est survenue, merci de réessayer plus tard.</p>';
    }
?>