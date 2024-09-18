<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true); // Adjust the path if you’re not using Composer

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Collect input data
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $name = htmlspecialchars($_POST['subject']);
    $message = htmlspecialchars($_POST['message']);


    try {
        //Server settings
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com'; // Your SMTP server
        $mail->SMTPAuth = true;
        $mail->Username = 'fatlindhamza0127@gmail.com'; // Your email
        $mail->Password = 'oidprtxrwcckwenb'; // Your email password
        $mail->SMTPSecure = 'tls'; // Enable TLS
        $mail->Port = 587; // TCP port to connect to

        // Recipients
        $mail->setFrom('fatlindhamza0127@gmail.com', 'Mailer'); // Sender's email and name
        $mail->addAddress('fatlindhamza0127@gmail.com'); // Recipient's email
        $mail->addReplyTo($email, $name); // Reply-to address

        // Content
        $mail->isHTML(true);
        $mail->Subject = 'New Message from Contact Form';
        $mail->Body    = "<strong>Name:</strong> $name<br><strong>Email:</strong> $email<br><strong>Message:</strong><br>$message";
        $mail->AltBody = "Name: $name\nEmail: $email\nMessage:\n$message";

        $mail->send();
        echo 'Message has been sent successfully!';
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
} else {
    echo 'Invalid request method.';
}





