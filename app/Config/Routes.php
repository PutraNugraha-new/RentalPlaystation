<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

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
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');

// $routes->get('/home', 'Home::index', ['filter' => 'login']);
// $routes->get('/db-login', 'Login::index');
$routes->get('/profile', 'Admin\Profile::index');
$routes->get('/transaksi', 'Admin\Transaksi::index');
$routes->get('/playstation', 'Admin\Playstation::index');
$routes->get('/pelanggan', 'Admin\Pelanggan::index');
$routes->get('/settings', 'Admin\Settings::index');

$routes->get('/playstation', 'Admin\Playstation::edit');
$routes->delete('/playstation/(:num)', 'Admin\playstation::delete/$1');

$routes->get('/pelanggan', 'Admin\pelanggan::edit');
$routes->delete('/pelanggan/(:num)', 'Admin\pelanggan::delete/$1');

$routes->get('/transaksi', 'Admin\transaksi::getHargaSewa');
$routes->delete('/transaksi/(:num)', 'Admin\transaksi::delete/$1');
$routes->get('/struk/(:num)', 'Admin\Transaksi::cetak/$1');


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
