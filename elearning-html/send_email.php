
<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

// Start PHP session
session_start();

function sendMail($subject, $message) {
    $mail = new PHPMailer(true);
    $mail->isSMTP();
    $mail->SMTPAuth = true;
    $mail->Host = 'smtp.gmail.com'; // Update with your SMTP host
    $mail->Username = 'websiteelearning723@gmail.com'; // Update with your Gmail username
    $mail->Password = 'ytkmyaswqsoowjlv'; // Update with your Gmail password
    $mail->SMTPSecure = 'tls';
    $mail->Port = 587;
    $mail->setFrom('kemogneprince06@gmail.com', 'Guy prince kemogne penka');
    $mail->addAddress('websiteelearning723@gmail.com');
    $mail->addReplyTo('websiteelearning723@gmail.com', 'Elearning Website');
    $mail->isHTML(true);
    $mail->Subject = $subject;
    $mail->Body = $message;
    $mail->AltBody = $message;

    try {
        $mail->send();
        $_SESSION['message'] = "success"; // Store success message in session variable
    } catch (Exception $e) {
        $_SESSION['message'] = "Email not sent. Error: {$mail->ErrorInfo}"; // Store error message in session variable
    }
}

if(isset($_POST['submit'])) {
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    sendMail($subject, $message);
    // Redirect to index.php
    header('Location: index.php');
    exit; // Terminate script after redirection
}
?>
