<?php

// Declaración de variables del formulario
$nombre = $_POST['name'];
$email = $_POST['email'];
$telefono = $_POST['telefono'];
$mensaje = $_POST['message'];

// Datos del email
$para = "contacto@citricoscs.com";
$titulo = 'Solicitud de Informacioón';
$header = 'From: ' . $email;
$msjCorreo = "Nombre: $nombre\n Teléfono: $telefono\n E-Mail: $email\n Mensaje:\n $mensaje";



    if (mail($para, $titulo, $msjCorreo, $header)) {

    echo "<script language='javascript'>
    alert('Mensaje enviado, muchas gracias por contactar con nosotros.');
    </script>";
    } else {
        echo 'Falló el envio';
    }


?>