<?php 
// Esto es para activar la visualización de errores en el servidor, por si los hubiese
error_reporting(-1);
ini_set('display_errors', 'On');
set_error_handler("var_dump");

$name = $_POST['name'];
$from = $_POST['email'];
$telefono = $_POST['telefono'];
$message = $_POST['message'];
$subject = "Prueba";

// El from DEBE corresponder a una cuenta de correo real creada en el servidor
$headers = "From: contacto@citricoscs.com\r\n"; 
$headers .= "Reply-To: $from\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=utf-8\r\n"; 
 
if(mail($from, $subject, $message,$headers)){
 echo "mail enviado";
 }else{
 $errorMessage = error_get_last()['msg'];
 echo $errorMessage;
}
?>