<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
// $routes->get('/', 'Home::index');
$routes->get('/', 'Auth::index');

$routes->get('dashboardUser', 'Home::index');

$routes->get('daftarTiket', 'Daftar::index');

$routes->get('formPermohonanBaru', 'Form::index');
$routes->get('formPermohonan', 'Form::forminputdatapermohonan');
$routes->get('formPermohonanRalat', 'Form::formPermohonanRalat');
