<?php
require('../PHPMailer-master/src/PHPMailer.php');
require('../PHPMailer-master/src/SMTP.php');
use PHPMailer\PHPMailer\PHPMailer;

if (isset($_POST['id_reclamation']) && isset($_POST['mail_to']) && isset($_POST['mail_body'])) {
    $idReclamation = $_POST['id_reclamation'];
    $email = $_POST['mail_to'];
    $mailBody = $_POST['mail_body'];
    include "../core/reclamationC.php";
    $reclamation1C = new reclamationC();
    $reclamation1C->traiterReclamationierreclamation($idReclamation);



    // Load Composer's autoloader


    $mail = new PHPMailer();
    $mail->isSMTP();
    $mail->SMTPAuth = true;
    $mail->SMTPSecure = 'ssl';

    $mail->Host = 'smtp.gmail.com';
    $mail->Port = '465';
    $mail->isHTML();
    $mail->Username = 'syrine.chebbi@esprit.tn';
    $mail->Password = '13015138S';

    $mail->setFrom('no-reply@gmail.com');
    $mail->Subject = 'Reclamation';
    $mail->Body = $mailBody;
    $mail->addAddress($email);
    $mail->send();


    header('Location: afficherReclamation.php');
} else {
    header('Location: afficherReclamation.php');
}
