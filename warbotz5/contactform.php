<?php

if (isset($_POST['submit-contact-form'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $mailTo = "warbotz@sinuo.us";
    $headers = "From: " . $email;
    $txt = "You have receieved an email from " . $name . ".\n\n" . $message;

    mail($mailTo, $subject, $txt, $headers);
    header("Location: contact.php?mailsend");
}
