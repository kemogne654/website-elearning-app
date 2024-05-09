<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

require 'phpmailer/src/SMTP.php';
require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'config.php';
function sendMail($email, $subject, $message) {
    $mail = new PHPMailer(true);
    $mail->isSMTP();
    $mail->SMTPAuth = true;
    $mail->Host = MAILHOST;
    $mail->Username = USERNAME;
    $mail->Password = PASSWORD;
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = 587;
    $mail->setFrom(SEND_FROM);
    $mail->addAddress($email);
    $mail->addReplyTo(REPLY_TO, REPLY_TO_NAME);
    $mail->IsHTML(true);
    $mail->Subject = $subject;
    $mail->Body = $message;
    $mail->AltBody = $message;

    if(!$mail->send()) {
        return "Email not send. Please try again";
    } else {
        return "success";
    }
}

// Process form data and send email
if(isset($_POST['submit'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $result = sendMail($email, $subject, $message);
    echo $result;
}
?>
