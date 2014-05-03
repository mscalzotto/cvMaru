<?php

function htmlHead($title = 'María Eugenia Tabernero') {
	$head  = '<head>';
	$head .= '<title>'. $title .'</title>';
	$head .= '<meta charset="utf-8">';
	$head .= '<meta keywords="psicologa, psicología, psicologia, conicet, memoria, neuropsicología, neuropsicologia">';
	$head .= '<meta name="viewport" content="width=device-width, initial-scale=1">';
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
	$nav .= '<p class="logoSpecialty">psicoterapeuta</p>';
	$nav .= '</div>';
	$nav .= '<div class="iconoMail">';
	$nav .= '<a href="contacto.php">m</a>';
	$nav .= '</div>';
	$nav .= '</div>';
	$nav .= '</div>';
	$nav .= '</div>';

	return $nav;
}