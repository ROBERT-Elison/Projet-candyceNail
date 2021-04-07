<?php
if (isset($_POST['sendMailBtn'])) {
    $fromEmail = $_POST['fromEmail'];
    $toEmail = 'elisonrobert00@gmail.com'; //adresse de reception du message

    //tout les valeurs que je redcupere depuis le form
    $nom = $_POST['name'];
    $prenom = $_POST['prenom'];
    $email = $_POST['fromEmail'];
    $telephone = $_POST['telephone'];
    $date_reservation = $_POST['date_reservation'];
    $heure_reservation = $_POST['heure_reservation'];

    $to = $toEmail;
    $subject = 'Reservation';//sujet du mail
    // la c'est pour que le mail fonction tous ca voila quoi
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    $headers .= 'From: ' . $fromEmail . '<' . $fromEmail . '>' . "\r\n" . 'Reply-To: ' . $fromEmail . "\r\n" . 'X-Mailer: PHP/' . phpversion();

    $message =  $message = 
                "Voici la reservation de $nom-$prenom 
                Son numero de telephone:$telephone
                Son adresse mail: $fromEmail        
                Il veut reserver le $date_reservation
                à $heure_reservation";
    $result = @mail($to, $subject, $message, $headers);

    echo '<script>alert("Email sent successfully !")</script>';
    echo '<script>window.location.href="index-mail.php";</script>';
}
//mdp_000webhost"JxSfB@DaJFufsD^bNKee"