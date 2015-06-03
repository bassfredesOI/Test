<?php

$rut = $_POST['rut'];
$nombre = $_POST['nombre'];
$mail = $_POST['email'];
$tel = $_POST['tel'];
$empresa = $_POST['empresa'];
$rutEmpresa = $_POST['rutEmpresa'];
$sitio = $_POST['sitio'];
$inversion= $_POST['inversion'];

$asunto = "Financiamiento Be Capitals";

$nombreDestino = $nombre;
$mailDestino = $mail;


require './includes/PHPMailer/PHPMailerAutoload.php';
$CFG['smtp_debug'] = 0;
$CFG['smtp_debugoutput'] = 'html';
$CFG['smtp_server'] = 'localhost';
$CFG['smtp_port'] = 25;
$CFG['smtp_authenticate'] = false;
$CFG['smtp_username'] = 'name@example.com';
$CFG['smtp_password'] = 'yourpassword';
$CFG['smtp_secure'] = 'None';
$from_name = $nombre;
$from_email = "info@moletto.cl";
$to_name = $nombreDestino;
$to_email = $mailDestino;

$subject = $asunto;
$message0 = $mensaje;

$message = "
<center>
    <strong>
       Gracias por confiar en nosotros<br> 
    </strong>
    <table border='0' cellpadding='0' cellspacing='0' height='100%' width='100%'>
    <tr><td align='center' valign='top'>
        <table border='0' cellpadding='10' cellspacing='0' width='600'>
            <tr>
                <td valign='top'>
                    <table border='0' cellpadding='10' cellspacing='0' width='100%'>
                        <tr>
                            <td valign='top' align='center' style='padding: 2px;'><p>A continuación se detallan los datos ingresados en el formulario de solicitud..</p></td>
                        </tr>
                    </table>
                </td>
            </tr>
            <tr>
            <td valign='top'>
            <table border='0' cellpadding='10' cellspacing='0' width='100%'><tr><td valign='top' width='120' style='padding: 0px;'>
            <strong>Nombre Completo:</strong></td><td valign='top' style='padding: 0px;'>";
$message .= $nombre;
$message .= "</td></tr></table></td></tr><tr><td valign='top'><table border='0' cellpadding='10' cellspacing='0' width='100%'><tr><td valign='top' width='120' style='padding: 0px;'>
            <strong>E-Mail:</strong></td><td valign='top' style='padding: 0px;'>";
$message .= $mail;
$message .= "</td></tr></table></td></tr><tr><td valign='top'><table border='0' cellpadding='10' cellspacing='0' width='100%'><tr><td valign='top' width='120' style='padding: 0px;'>
            <strong>RUT:</strong></td><td valign='top' style='padding: 0px;'>";
$message .= $rut;
$message .= "</td></tr></table></td></tr><tr><td valign='top'><table border='0' cellpadding='10' cellspacing='0' width='100%'><tr><td valign='top' width='120' style='padding: 0px;'>
            <strong>Tel&eacute;fono:</strong></td><td valign='top' style='padding: 0px;'>";
$message .= $tel;
$message .= "</td></tr></table></td></tr><tr><td valign='top'><table border='0' cellpadding='10' cellspacing='0' width='100%'><tr><td valign='top' width='120' style='padding: 0px;'>
            <strong>Empresa:</strong></td><td valign='top' style='padding: 0px;'>";
$message .= $empresa;
$message .= "</td></tr></table></td></tr><tr><td valign='top'><table border='0' cellpadding='10' cellspacing='0' width='100%'><tr><td valign='top' width='120' style='padding: 0px;'>
            <strong>Rut Empresa:</strong></td><td valign='top' style='padding: 0px;'>";
$message .= $rutEmpresa;
$message .= "</td></tr></table></td></tr><tr><td valign='top'><table border='0' cellpadding='10' cellspacing='0' width='100%'><tr><td valign='top' width='120' style='padding: 0px;'>
            <strong>Sitio:</strong></td><td valign='top' style='padding: 0px;'>";
$message .= $sitio;
$message .= "</td></tr></table></td></tr><tr><td valign='top'><table border='0' cellpadding='10' cellspacing='0' width='100%'><tr><td valign='top' width='120' style='padding: 0px;'>
            <strong>Inversi&oacute;n</strong></td><td valign='top' style='padding: 0px;'>";
$message .= $inversion;

$message .= "</td></tr></table></td></tr><tr><td valign='top'><table border='0' cellpadding='10' cellspacing='0' width='100%'><tr><td valign='top' width='120' style='padding: 0px;'><a href=''>Pronto nos contactaremos.</a>";

$message .= "</td></tr></table></td></tr><tr><td valign='top'><table border='0' cellpadding='10' cellspacing='0' width='100%'><tr><td valign='top' align='center'>
<img width='200' src='http://oninteractive.cl/desarrollo2015/carousel/assets/img/50-cuotas.png' alt='50 cuotas'><img width='150' height='150' src='http://www.becapitals.cl/img/logo-becapital.png' alt='Be Capitals'>

</td></tr></table></td></tr></table></td></tr></table></center>";

$test_type = 'smtp';
$smtp_debug = $CFG['smtp_debug'];
$smtp_server = $CFG['smtp_server'];
$smtp_port = $CFG['smtp_port'];
$smtp_secure = strtolower($CFG['smtp_secure']);
$smtp_authenticate = $CFG['smtp_authenticate'];
$authenticate_password = $CFG['smtp_password'];
$authenticate_username = $CFG['smtp_username'];

$mail = new PHPMailer(true);  //PHPMailer instance with exceptions enabled

$mail->CharSet = 'utf-8';
$mail->Debugoutput = $CFG['smtp_debugoutput'];

class phpmailerAppException extends phpmailerException
{
}
try {
     
    $to = $mailDestino;   
    if (!PHPMailer::validateAddress($to)) {
        throw new phpmailerAppException("Email address " . $to . " is invalid -- aborting!");
    }

    switch ($test_type) {
        case 'smtp':
            $mail->isSMTP(); // telling the class to use SMTP
            $mail->SMTPDebug = $smtp_debug;
            $mail->Host = $smtp_server; // SMTP server
            $mail->Port = $smtp_port; // set the SMTP port
            if ($smtp_secure) {
                $mail->SMTPSecure = strtolower($smtp_secure);
            }
            $mail->SMTPAuth = $smtp_authenticate; // enable SMTP authentication?
            if ($smtp_authenticate) {
                $mail->Username = $authenticate_username; // SMTP account username
                $mail->Password = $authenticate_password; // SMTP account password
            }
            break;
        case 'mail':
            $mail->isMail(); // telling the class to use PHP's mail()
            break;
        case 'sendmail':
            $mail->isSendmail(); // telling the class to use Sendmail
            break;
        case 'qmail':
            $mail->isQmail(); // telling the class to use Qmail
            break;
        default:
            throw new phpmailerAppException('Invalid test_type provided');
    }

    try {
        if ($from_name != '') {
            $mail->addReplyTo($from_email, $from_name);
            $mail->From = $from_email;
            $mail->FromName = $from_name;
        } else {
            $mail->addReplyTo($from_email);
            $mail->From = $from_email;
            $mail->FromName = $from_email;
        }

        if ($to_name != '') {
            $mail->addAddress($to, $to_name);
        } else {
            $mail->addAddress($to);
        }
    } catch (phpmailerException $e) { //Catch all kinds of bad addressing
        throw new phpmailerAppException($e->getMessage());
    }
    $mail->Subject = $subject;

    if ($message == '') {
        $body = file_get_contents('contents.html');
    } else {
        $body = $message;
    }

    $mail->WordWrap = 78; // set word wrap to the RFC2822 limit
    $mail->msgHTML($body, dirname(__FILE__), true); //Create message bodies and embed images

    try {
        $mail->send();
        $results_messages[] = "Message has been sent using " . strtoupper($test_type);
    } catch (phpmailerException $e) {
        throw new phpmailerAppException("Unable to send to: " . $to . ': ' . $e->getMessage());
    }
} catch (phpmailerAppException $e) {
    $results_messages[] = $e->errorMessage();
}

?>