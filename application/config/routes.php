<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['quien-soy-yo'] = "welcome/yo";
$route['contacto'] = "welcome/contacto";
$route['planes-integrales'] = "welcome/planes";
$route['plan-12-semanas'] = "welcome/plan12seman";
$route['plan-24-semanas'] = "welcome/plan24seman";
$route['plan-36-semanas'] = "welcome/plan36seman";
$route['plan-48-semanas'] = "welcome/plan48seman";
$route['plan-60-semanas'] = "welcome/plan60seman";
$route['plan-72-semanas'] = "welcome/plan72seman";
$route['plan-96-semanas'] = "welcome/plan96seman";
$route['ponencia-academica'] = "welcome/ponenciaaca";
$route['mensaje-enviado'] = "welcome/eviarEmail";
$route['clase-privada-academica'] = "welcome/clase";
$route['equipo-para-seguimiento-consulta'] = "welcome/equipo";
$route['normativa-de-servicio'] = "welcome/normativa";

