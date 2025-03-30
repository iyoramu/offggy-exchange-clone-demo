<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php'; // If using Composer
// require 'PHPMailer/src/PHPMailer.php'; // If manually installed
// require 'PHPMailer/src/SMTP.php';
// require 'PHPMailer/src/Exception.php';

function sendEmail($to, $subject, $body) {
    $mail = new PHPMailer(true);

    try {
        // SMTP configuration
        $mail->isSMTP();
        $mail->Host       = 'mail.ikigugugroup.rw'; // Use your SMTP server
        $mail->SMTPAuth   = true;
        $mail->Username   = 'yoramu@ikigugugroup.rw'; // Your email address
        $mail->Password   = 'ikigugu1359787533@?'; // Use an App Password for security
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port       = 587; // Use 465 for SSL

        // Email details
        $mail->setFrom('yoramu@ikigugugroup.rw', 'Offggy');
        $mail->addAddress($to);
        $mail->Subject = $subject;
        $mail->Body    = $body;
        $mail->isHTML(true);

        // Send email
        $mail->send();
        return true;
    } catch (Exception $e) {
        return "Email could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}
?>
