<?php

//I have change the name of this file from php to html because github pages dont support php format so the newsletter functionalibility wont work.
error_reporting(E_ALL);
ini_set('display_errors', 1);

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

// Cecking if the form is submitted 
if (isset($_POST["send"])) {
    $userEmail = $_POST["email"];
    if (filter_var($userEmail, FILTER_VALIDATE_EMAIL)) {
        $mail = new PHPMailer(true);

        try {
            // Server settings 
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'toru2675@gmail.com';
            $mail->Password = 'laej awdr urwk rree';
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
            $mail->Port = 465;

            // Gmail Settings
            $mail->setFrom('toru2675@gmail.com', 'Shoe-App');
            $mail->addAddress($userEmail);
            $mail->Subject = 'NEWSLETTER';
            $mail->Body = "Dear User,\n\nThankYou for Subscribing to our newsletter.We're excited to have you on board.\n\nBest regards,\nShoe-App";

            // Send Email
            $mail->send();
            echo "Congratulations! A welcome email has been sent to $userEmail.";
        } catch (Exception $e) {
            echo ("Failed To send Email . Error: {$mail->ErrorInfo}");
        }
    } else {
        echo "Invalid Email Adrress.Plz try Again";
    }
}
