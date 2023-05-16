<?php
$destinatario = $_POST['email'];
$asunto = 'Gracias por suscribirte a nuestro servicio';
$mensaje = '¡Gracias por suscribirte a nuestro servicio! En breve recibirás más información acerca de nuestra empresa.';
$cabeceras = 'From: stwherrerasystem@gmail.com' . "\r\n" .
             'Reply-To: stwherrerasystem@gmail.com' . "\r\n" .
             'X-Mailer: PHP/' . phpversion();

mail($destinatario, $asunto, $mensaje, $cabeceras);

echo 'Gracias por suscribirte a nuestro servicio. En breve recibirás un correo electrónico con más información acerca de nuestra empresa.';
?>