<?
ob_start();
?>

<?php

$nom=$_GET['name'];
$em=$_GET['empresa'];
$email=$_GET['email'];
//$mes= array($_GET['mensaje']);



require("phpmail/class.phpmailer.php");


$mail = new PHPMailer();

$body = $_GET['message'];

// Comprobamos si esta SMTP.
$mail->IsSMTP();

// Esto es para gestionar el Debug.
//1. Muestra errores y mensajes.
//2. Muestra solo mensajes.
$mail->SMTPDebug = 2;

// Si el servidor requiere autentificaciÃ³n.
$mail->SMTPAuth = true;

// El host del servidor de correos.
$mail->Host = "mail.e-shelby.com";

// El puerto del servidor de correos.
$mail->Port = 587;

// El correo y contraseÃ±a de donde saldran los mensajes.
$mail->Username = "soporte.gdl@e-shelby.com";
$mail->Password = "lcd1020";

// Incluimos el From que llegara al los correos enviados.
$mail->SetFrom($email, $nom);

// El asunto del mensaje.
$mail->Subject = "Contacto para screen Mexico";

// El cuerpo del mensaje se envia aquÃ­.
$mail->MsgHTML($body);

// Se asigna la direcciÃ³n de correo a donde se enviarÃ¡ el mensaje.
$address = "soporte.gdl@e-shelby.com";
$mail->AddAddress($address, "screen mexico");

// Comprobamos que el correo se ha enviado.
if(!$mail->Send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
} else {
    header("Location:http://screenmexico.mx/");
		}
?>