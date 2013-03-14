<?php
if (!isset($_POST['email'])) {
?>

<?php
}else{
  $mensaje="Mensaje del formulario de contacto de nnatali.com";
  $mensaje.= "\nNombre: ". $_POST['nombre'];
  $mensaje.= "\nEmail: ".$_POST['email'];
  $mensaje.= "\nTelefono: ". $_POST['telefono'];
  $mensaje.= "\nMensaje: \n".$_POST['mensaje'];
  $destino= "soporte.gdl@e-shelby.com";
  $remitente = $_POST['email'];
  $asunto = "Mensaje enviado por: ".$_POST['nombre'];
  mail($destino,$asunto,$mensaje,"FROM: $remitente");
?>
  <p><strong>Mensaje enviado.</strong></p>
<?php
}
?>