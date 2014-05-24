<?php

$to = "consultoriodememoria@gmail.com";
$subject = "Consulta online desde www.eugeniatabernero.com.ar";

$paciente = $_POST['nombre'] . ' ' . $_POST['apellido'];
$mail = $_POST['mail'];
$message = "Enviado por: " . $paciente . '\n';
$message .= "Mail del paciente: " . $mail . '\n\n';
$message .= $_POST['consulta'];

$mail = mail($to, $subject, $message);

if ($mail == false) {
	$error = '<div class="mailError">Ha ocurrido un problema con el envío del mail.<br>Por favor, intente nuevamente mas tarde';
	$error .= '<a href="contacto.php" title="Volver al form">Volver al formulario</a>';
	$error .= '</div>';
	return $error;
}
else {
	$mailSuccess = '<div class="mailSuccess">El correo se ha enviado con éxito!<br>En breve me pondré en contacto con usted.';
	$mailSuccess .= '<a href="index.php" title="Volver al inicio">Volver al formulario</a>';
	$mailSuccess .= '</div>';

	return $mailSuccess;
	
}
