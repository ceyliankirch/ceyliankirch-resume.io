<?php

$name = htmlspecialchars($_POST['name']);
$firstname = htmlspecialchars($_POST['firstname']);
$email = htmlspecialchars($_POST['email']);
$object = htmlspecialchars($_POST['object']);
$message = htmlspecialchars($_POST['usermessage']);


$to = "ceyliankirch@gmail.com";  
$subject = "Contact: $object";
$body = "Nom: $name $firstname\nEmail: $email\nObjet: $object\nMessage:\n$message";


$headers = "From: $email\r\n";
$headers .= "Reply-To: $email\r\n";
$headers .= "Content-Type: text/plain; charset=UTF-8";


if (mail($to, $subject, $body, $headers)) {
    echo "Message envoyé avec succès.";
} else {
    echo "Erreur lors de l'envoi du message.";
}
?>