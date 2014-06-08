<?php

function htmlHead($title = 'Consultorio de memoria') {
	$head  = '<head>';
	$head .= '<title>'. $title .'</title>';
	$head .= '<meta charset="utf-8">';
	$head .= '<meta name="keywords" content="tabernero, eugenia, psicologa, psicologia, conicet, memoria, neuropsicología, consultorio, neurocognitivo">';
	$head .= '<meta name="description" content="Consultorio de memoria - Maria Eugenia Tabernero">';
	$head .= '<meta name="author" content="Maria Eugenia Tabernero">';
	$head .= '<script src="js/jquery-latest.js"></script>';
	$head .= '<script src="js/main.js"></script>';
	$head .= '<link rel="stylesheet" type="text/css" href="css/normalize.css">';
	$head .= '<link rel="stylesheet" type="text/css" href="css/main.css">';
	$head .= '</head>';

	return $head;
}

function htmlNav() {
	$nav =  '<div class="navbar navbar-default navbar-fixed-top" role="navigation">';
	$nav .= '<div class="container">';
	$nav .= '<div id="mainNav" class="clearfix">';
	$nav .= '<div class="logoMaru">';
	$nav .= '<p class="logoName">M.Eugenia</p>';
	$nav .= '<p class="logoSurname">Tabernero</p>';
	$nav .= '<p class="logoSpecialty">psicóloga</p>';
	$nav .= '</div>';
	$nav .= '<div class="iconoMail">';
	$nav .= '<a href="contacto.php">m</a>';
	$nav .= '</div>';
	$nav .= '</div>';
	$nav .= '</div>';
	$nav .= '</div>';

	return $nav;
}