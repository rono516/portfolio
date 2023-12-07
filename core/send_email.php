<?php

$name = $_POST['contactName'];
$email = $_POST['contactEmail'];
$message = $_POST['contactMessage'];

// function test_input($data)
// {
//     $data = trim($data);
//     $data = stripslashes($data);
//     $data = htmlspecialchars($data);
// }

require "./vendor/autoload.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

$mail = new PHPMailer(true);
$mail->isSMTP();

// MAIL_MAILER=smtp
// MAIL_HOST=smtp.mailtrap.io
// MAIL_PORT=2525
// MAIL_USERNAME=4b8c565e646807
// MAIL_PASSWORD=15308757631838

$mail->SMTPAuth = true;
$mail->Host = "sandbox.smtp.mailtrap.io";
$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
$mail->Port = 2525;

$mail->Username = "4b8c565e646807";
$mail->Password = "15308757631838";
$mail->setFrom($email, $name);
$mail->addAddress("ronocollins2000@gmail.com", "Contact Porfolio");

$mail->Subject = "Message from Contact Form Portfolio";
$mail->Body = $message;

try {
    $mail->send();
    header("Location: ./index.html");
} catch (Exception $e) {
    exit;
    header("Location: ./index.html");

} finally {
    header("Location: ./index.html");
}
