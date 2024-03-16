<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer-master/src/Exception.php';
require 'PHPMailer-master/src/PHPMailer.php';
require 'PHPMailer-master/src/SMTP.php';

// Get the form fields
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];

// Email recipient
$to = "udhetojmebashke@gmail.com"; // Change this to your email address

// Email subject
$subject = "New Message from $name";

// Email message
$email_message = "Name: $name\n";
$email_message .= "Email: $email\n";
$email_message .= "Phone: $phone\n";
$email_message .= "Message:\n$message\n";

// PHPMailer
$mail = new PHPMailer(true);
try {
    //Server settings
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com'; // Change this to your SMTP server
    $mail->SMTPAuth = true;
    $mail->Username = 'udhetojmebashke@gmail.com'; // Change this to your SMTP username
    $mail->Password = 'gwsnvomlatgbcmdb'; // Change this to your SMTP password
    $mail->SMTPSecure = 'tls';
    $mail->Port = 587; // Change this to your SMTP port

    //Recipients
    $mail->setFrom($email, $name);
    $mail->addAddress($to);

    //Content
    $mail->isHTML(false);
    $mail->Subject = $subject;
    $mail->Body = $email_message;

    $mail->send();
    
    echo "Message sent successfully!";
    
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
?>
