<?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';


class Enviaremaila 
{
    
    public function enviaremail($email,$token)
    {
        $mail = new PHPMailer(true);                              // Passing `true` enables exceptions
        try {
            //Server settings
            $mail->SMTPDebug = 1;
            $mail->SMTPOptions = array(
            'ssl' => array(
            'verify_peer' => false,
            'verify_peer_name' => false,
            'allow_self_signed' => true
            )
            );            
            $mail->isSMTP();                                      // Set mailer to use SMTP
            $mail->Host = 'smtp.sendgrid.net';  // Specify main and backup SMTP servers
            $mail->SMTPAuth = true;                               // Enable SMTP authentication
            $mail->Username = 'inventcorp34';                 // [CAMBIAR CUENTA POR QUE ME BANEARON!!]
            $mail->Password = '93915491H';
            $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
            $mail->Port = 587;                                    // TCP port to connect to

            //Recipients
            $mail->setFrom('inventcorp34@gmail.com', 'inventcorp');
            $mail->addAddress($email);   

            $body = '<p><strong>Hola</strong> hemos notado que quiere cambiar su contrasena
            <br> para cambiarla por favor haga click en el siguiente link: www.inventcorpp1.epizy.com
            <br> e ingrese el siguiento codigo.</p>'.'<h1>'.$token.'</h1>';

            $mail->isHTML(true);                                  // Set email format to HTML
            $mail->Subject = 'Cambio de contrasena Inventcorp';
            $mail->Body    = $body;
            $mail->AltBody = strip_tags($body);

            $mail->send();
            echo 'Message has been sent';
        } catch (Exception $e) {
            echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
        }
    }
}

?>