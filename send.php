
<?php

require_once('PHPMailer/class.phpmailer.php');
require_once('PHPMailer/class.smtp.php');
require_once('PHPMailer/PHPMailerAutoload.php');

$name = $_POST["name"];  
$subject = $_POST["subject"]; 
$email = $_POST["email"];  
$message = $_POST["message"];
$terms = $_POST["terms"];   // Get field values

$Submit = "Name: $name\n\n<br><br>E-mail: $email\n\n<br><br>Subject: $subject\n\n<br><br>Message: $message\n<br><br>Terms: $terms\n<br>";

$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
    //Server settings
    $mail->CharSet = 'UTF-8';
    $mail->SMTPDebug = 0;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'email.domain.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'email@domain.com';                 // SMTP username
    $mail->Password = 'password';                           // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('email@domain.com', 'Sends');
    $mail->addAddress('email@domain.com', 'receive');     // Add a recipient

    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Subject';
    $mail->Body    = $Submit;
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

if(!$mail->send()) {
    echo '<br><b>Form not sent :(<b>';
} else {
    echo '<br><b>Form sent successfully!<b>';
}