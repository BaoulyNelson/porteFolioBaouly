<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer les données du formulaire
    $name = $_POST['Name'];
    $email = $_POST['Email'];
    $subject = $_POST['Subject'];
    $message = $_POST['Message'];

    // Adresse email de destination
    $to = "elconquistadorbaoulyn@gmail.com";

    // Entête de l'email
    $headers = "From: $name <$email>" . "\r\n" .
               "Reply-To: $email" . "\r\n" .
               "X-Mailer: PHP/" . phpversion();

    // Envoi de l'email
    mail($to, $subject, $message, $headers);

    // Redirection après envoi de l'email
    header("Location: confirmation.html");
    exit;
}
?>
