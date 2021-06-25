<?php 


$nombre=$_POST['NOMBRE'];
$email=$_POST['CORREO'];
$telefono=$_POST['TELEFONO'];
$mensaje=$_POST['MENSAJE'];

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;


require 'PHPMAILER/Exception.php ' ; 
require  'PHPMAILER/PHPMailer.php ' ; 
require  'PHPMAILER/SMTP.php';


// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug =0;                      // Enable verbose debug output
    $mail->isSMTP();                                            // Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'CUENTA DE EMAIL';                     // SMTP username
    $mail->Password   = '2332434';                               // SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

    //Recipients-DESTINATARIOS
    $mail->setFrom('aquilesibaeza1@gmail.com', 'Mailer');
    $mail->addAddress('johnrnriquezmunoz@gmail.com', 'Joe User');     // Add a recipient
    $mail->addAddress('enriquezmunozjohnfredy@gmail.com');               // Name is optional
  
    
    
    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'PAGINA WEB';
    $mail->Body    = 'ESTE ES UN MENSAJE DE UN CLIENTE'.$nombre.' '.$telefono.' '.$mensaje.' '.$email;
    

    $mail->send();
    require "../views/gracias.php";

} catch (Exception $e) {
	require "../views/error.php";
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}

 ?>