<?php

$validarForm = validarMail($_POST['nombre'], $_POST['apellido'], $_POST['mail']);

if ($validarForm == false) {
	return false;
}

$to = "consultoriodememoria@gmail.com";
$subject = "Consulta online desde www.eugeniatabernero.com.ar";

$paciente = $_POST['nombre'] . ' ' . $_POST['apellido'];
$mail = $_POST['mail'];
$message = "Enviado por: " . $paciente . "\r\n";
$message .= "Mail del paciente: " . $mail . "\r\n\r";
$message .= "Mensaje: \r\n" . $_POST['consulta'];
$extraHeader = 'From: ' . $to;
$extraHeader = 'Reply-To: ' . $mail;

$mail = mail($to, $subject, $message, $extraHeader);

if ($mail == false) {
	$error = '<div class="mailError">Ha ocurrido un problema con el envío del mail.<br>Por favor, intente nuevamente mas tarde';
	$error .= '<a href="contacto.php" title="Volver al form">Volver al formulario</a>';
	$error .= '</div>';
	return print $error;
}
else {
	$mailSuccess = '<div class="mailSuccess">El correo se ha enviado con éxito!<br>En breve me pondré en contacto con usted.<br>';
	$mailSuccess .= '<a class="volverAlForm" href="contacto.php" title="Volver al inicio">Volver al formulario</a>';
	$mailSuccess .= '</div>';

	return print $mailSuccess;
}

function validarMail($nombre, $apellido, $mail) {
	$textRegex = '/^[A-Za-z\\s]{1,40}$/';
	$emailRegex = '/^[_a-z0-9\-]+(\.[_a-z0-9\-]+)*@[a-z0-9\-]+(\.[a-z0-9\-]+)*(\.[a-z]{2,4})$/';
	$valid = array();

	$valid['valid'] = true;

	if (empty($nombre) || !(preg_match($textRegex, $nombre))) {
		$valid['valid'] = false;
		$valid['nombre'] = 'El nombre no es valido';
	}
	
	if (empty($apellido) || !(preg_match($textRegex, $apellido))) {
		$valid['valid'] = false;
		$valid['apellido'] = 'El apellido no es valido';
	}
	
	if (empty($mail) || !(preg_match($emailRegex, $mail))) {
		$valid['valid'] = false;
		$valid['mail'] = 'El mail no es valido';
	}

	if ($valid['valid'] == false) {
		foreach ($valid as $type => $message) {
			if ($type != 'valid') {
				print '<h2>' . $message . '</h2>';
			}
		}
		return false;
	}
	else {
		return true;
	}
}
