<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
require 'PHPMAILER/Exception.php';
require 'PHPMAILER/PHPMailer.php';
require 'PHPMAILER/SMTP.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    try {
        $mail = new PHPMailer(true);
        // Server settings
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'nasirwaqas744@gmail.com'; // Your Gmail
        $mail->Password = 'jfal kqki mmdy vjqj'; // <-- Gmail App Password (not your Gmail password!)
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
        $mail->Port = 465;
        $mail->CharSet = 'UTF-8';
        // Recipients
        $mail->setFrom('nasirwaqas744@gmail.com', 'Finance Form');
        $mail->addAddress('nasirwaqas744@gmail.com'); // send to yourself for testing
        // Content
        $mail->isHTML(true);
        $mail->Subject = 'New Finance Application Submission';
        // Build message as HTML table
        $message = "<h2>Finance Application Form</h2><table border='1' cellpadding='8' cellspacing='0'>";
        foreach ($_POST as $key => $value) {
            if (is_array($value)) {
                $value = implode(', ', $value);
            }
            $field = ucfirst(str_replace('_', ' ', $key));
            // Only show image if value is a valid data URL
            if ($key === 'applicant_signature') {
                if (!empty($value) && strpos($value, 'data:image') === 0) {
                    $message .= "<tr><th style='text-align:left;'>$field</th><td><img src='cid:applicant_signature_cid' alt='Applicant Signature' style='max-width:200px;'/></td></tr>";
                } else {
                    $message .= "<tr><th style='text-align:left;'>$field</th><td>No signature provided</td></tr>";
                }
            } elseif ($key === 'consent_signature') {
                if (!empty($value) && strpos($value, 'data:image') === 0) {
                    $message .= "<tr><th style='text-align:left;'>$field</th><td><img src='cid:consent_signature_cid' alt='Consent Signature' style='max-width:200px;'/></td></tr>";
                } else {
                    $message .= "<tr><th style='text-align:left;'>$field</th><td>No consent signature provided</td></tr>";
                }
            } else {
                $message .= "<tr><th style='text-align:left;'>$field</th><td>" . htmlspecialchars($value) . "</td></tr>";
            }
        }
        $message .= "</table>";
        $mail->Body = $message;

        // Attach applicant signature if present and valid
        $signature = $_POST['applicant_signature'] ?? '';
        if (!empty($signature) && strpos($signature, 'data:image') === 0) {
            $data = preg_replace('#^data:image/\w+;base64,#i', '', $signature);
            $data = base64_decode($data);
            $mail->addStringEmbeddedImage($data, 'applicant_signature_cid', 'applicant_signature.png', 'base64', 'image/png');
        }
        // Attach consent signature if present and valid
        $consent_signature = $_POST['consent_signature'] ?? '';
        if (!empty($consent_signature) && strpos($consent_signature, 'data:image') === 0) {
            $data2 = preg_replace('#^data:image/\w+;base64,#i', '', $consent_signature);
            $data2 = base64_decode($data2);
            $mail->addStringEmbeddedImage($data2, 'consent_signature_cid', 'consent_signature.png', 'base64', 'image/png');
        }
        $mail->send();
        echo "✅ Application submitted successfully!";
    } catch (Exception $e) {
        echo "❌ Failed to send application. Mailer Error: {$mail->ErrorInfo}. \nMake sure you are using a Gmail **App Password** and that IMAP/SMTP is enabled.";
    }
} else {
    echo "Invalid request.";
}
