<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (is_file(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
// $routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');
$routes->match(['get', 'post'], 'register', 'Register::create', ['filter' => 'noauth']);
$routes->match(['get', 'post'], 'login', 'Profile::login', ['filter' => 'noauth']);

//fundraise
$routes->match(['get', 'post'], 'create', 'Fundraiser::create', ['filter' => 'auth']);
$routes->match(['get', 'post'], 'edit/(:num)', 'Fundraiser::edit/$1', ['filter' => 'auth']);
$routes->match(['get', 'post'], 'delete/(:num)', 'Fundraiser::deleteFund/$1', ['filter' => 'auth']);
$routes->match(['get', 'post'], 'detail/(:num)', 'Fundraiser::detail/$1');
$routes->match(['get'], 'user-funds', 'Profile::funds', ['filter' => 'auth']);
$routes->match(['get', 'post'], 'settings/(:num)', 'Profile::settings/$1', ['filter' => 'auth']);
$routes->match(['get', 'post'], '(:num)/donate', 'Fundraiser::donate/$1');

$routes->get('dashboard', 'Profile::index', ['filter' => 'auth']);
$routes->get('profile', 'Profile::index', ['filter' => 'auth']);
$routes->get('logout', 'Profile::logout');

//admin
$routes->match(['get', 'post'], 'admin', 'AdminController::index', ['filter' => 'auth']);
$routes->match(['get', 'post'], 'admin/users', 'AdminController::users');
$routes->match(['get', 'post'], 'admin/funds', 'AdminController::funds');
$routes->match(['get', 'post'], 'admin/fund/(:num)', 'AdminController::toggleActivateFundRaiser/$1', ['filter' => 'auth']);
$routes->match(['get', 'post'], 'admin/fund/delete/(:num)', 'AdminController::deleteFundRaider/$1', ['filter' => 'auth']);
$routes->match(['get', 'post'], 'admin/user/delete/(:num)', 'AdminController::deleteUser/$1', ['filter' => 'auth']);
$routes->match(['get', 'post'], 'admin/user/enableadmin/(:num)', 'AdminController::enableAdmin/$1', ['filter' => 'auth']);

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
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
