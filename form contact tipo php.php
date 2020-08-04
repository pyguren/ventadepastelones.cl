<?php
$nombre = $_POST['nombre'];
$telefono = $_POST[telefono];
$comuna = $_POST['comuna'];
$email = $_POST['email'];
$mensaje = $_POST['mensaje'];
$para = 'ELREYDELPASTELON@GMAIL.CL';
$titulo = 'FORMULARIO DE CONTACTO';
$header = 'From: ' . $email;
$msjCorreo = "Nombre: $nombre\n Telefono:\n $telefono Comuna: $comuna\n Email: $email\n Mensaje:\n $mensaje";
  
if ($_POST['submit']) {
if (mail($para, $titulo, $msjCorreo, $header)) {
echo "<script language='javascript'>
alert('Mensaje enviado, muchas gracias.');
window.location.href = 'https://elreydelpastelon-405e9.web.app/';
</script>";
} else {
echo 'Falló el envio';
}
}
?>