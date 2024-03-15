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
$routes->setDefaultController('Auth');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
//$routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.

// authentikasi
$routes->get('/login', 'Auth::index'); //halaman login
$routes->post('/login/auth', 'Auth::login'); //proses login
$routes->get('/logout', 'Auth::logout'); //halaman logout

$routes->get('/', 'Auth::index');
$routes->get('/user', 'User::index');
$routes->get('/user/new', 'User::new');
$routes->post('/user', 'User::create');
$routes->get('/user/(:any)/edit', 'User::edit/$1');
$routes->post('/user/(:any)', 'User::update/$1');
$routes->get('/user/(:any)/delete', 'User::delete/$1');


$routes->get('/jenispaket', 'JenisPaket::index');
$routes->get('/jenispaket/new', 'JenisPaket::new');
$routes->post('/jenispaket', 'JenisPaket::create');
$routes->get('/jenispaket/(:any)/edit', 'JenisPaket::edit/$1');
$routes->post('/jenispaket/(:any)', 'JenisPaket::update/$1');
$routes->get('/jenispaket/(:any)/delete', 'JenisPaket::delete/$1');


$routes->get('dashboard/admin','dashboard::admin');
$routes->get('dashboard/kasir','dashboard::kasir');
$routes->get('dashboard/owner','dashboard::owner');
$routes->get('dashboard/paket','dashboard::paket');
$routes->get('dashboard/tambahpaket','dashboard::tambahpaket');
$routes->post('dashboard/tambahpaket','dashboard::tambahpaket');

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
