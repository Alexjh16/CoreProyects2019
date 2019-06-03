<?php 
function fecha(){
	date_default_timezone_set('America/Bogota');
	$day = date("d");
	$month = date("m");
	$year = date("Y");

	switch($month){
		case 01:
		$month = "Enero";
		break;

		case 02:
		$month = "Febrero";
		break;

		case 03:
		$month = "Marzo";
		break;

		case 04:
		$month = "Abril";
		break;

		case 05:
		$month = "Mayo";
		break;

		case 06:
		$month = "Junio";
		break;

		case 07:
		$month = "Julio";
		break;

		case 08:
		$month = "Agosto";
		break;

		case 09:
		$month = "Septiembre";
		break;

		case 10:
		$month = "Octubre";
		break;

		case 11:
		$month = "Enero";
		break;

		case 12:
		$month = "Diciembre";
		break;
	}

	$fecha = ($day." de "." $month del ".$year);
	print($fecha);
}
?>