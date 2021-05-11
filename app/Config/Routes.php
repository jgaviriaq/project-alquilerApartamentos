<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php'))
{
	require SYSTEMPATH . 'Config/Routes.php';
}

/**
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');
$routes->get('/home', 'HomeController::index');
$routes->get('/login', 'SesionController::index');
$routes->get('/salir', 'SesionController::salir');
$routes->get('/regiterUser', 'RegisterUsuariosController::index');
$routes->get('/totalApartments', 'TotalApartmentsController::index');
$routes->POST('/listUsers', 'RegisterUsuariosController::listUsers');
$routes->get('/registerApartment', 'RegistroApartamentosController::index');
$routes->get('/apartments', 'ListApartmentsController::index');
$routes->POST('/listApartments', 'RegistroApartamentosController::listApartments');
$routes->get('/perfil', 'PerfilController::index');
$routes->get('/accesoDenegado', 'RegistroApartamentosController::index');
$routes->post('/sesion', 'SesionController::sesion');
$routes->get('/deleteApartment', 'ListApartmentsController::deleteApartment');
$routes->POST('/updateApartment', 'ListApartmentsController::updateApartment');
$routes->POST('/updatePerfil', 'PerfilController::updatePerfil');

/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php'))
{
	require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
