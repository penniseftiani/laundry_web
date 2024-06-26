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

$routes->get('/', 'Home::index');
$routes->get('/cek_invoice', 'Home::cek_invoice');

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

$routes->get('/paket', 'Paket::index');
$routes->get('/paket/new', 'Paket::new');
$routes->post('/paket', 'Paket::create');
$routes->get('/paket/(:any)/edit', 'Paket::edit/$1');
$routes->post('/paket/(:any)', 'Paket::update/$1');
$routes->get('/paket/(:any)/delete', 'Paket::delete/$1');

$routes->get('/member', 'Member::index');
$routes->get('/member/new', 'Member::new');
$routes->post('/member', 'Member::create');
$routes->get('/member/(:any)/edit', 'Member::edit/$1');
$routes->post('/member/(:any)', 'Member::update/$1');
$routes->get('/member/(:any)/delete', 'Member::delete/$1');

$routes->get('/transaksi', 'Transaksi::index');
$routes->get('/transaksi/new', 'Transaksi::new');
$routes->post('/transaksi/add_detail', 'Transaksi::add_detail');
$routes->get('/transaksi/dell_detail/(:any)', 'Transaksi::dell_detail/$1');
$routes->post('/transaksi', 'Transaksi::create');
$routes->get('/transaksi/(:any)/edit', 'Transaksi::edit/$1');
$routes->get('/transaksi/(:any)/detail', 'Transaksi::detail/$1');
$routes->post('/transaksi/(:any)', 'Transaksi::update/$1');
$routes->get('/transaksi/(:any)/cancel', 'Transaksi::cancel/$1');
$routes->get('/transaksi/(:any)/cetak', 'Transaksi::cetak/$1');

$routes->get('/pembayaran', 'Pembayaran::index');
$routes->get('/pembayaran/new', 'Pembayaran::new');
$routes->post('/pembayaran', 'Pembayaran::create');
$routes->get('/pembayaran/(:any)/edit', 'Pembayaran::edit/$1');
$routes->get('/pembayaran/(:any)/detail', 'Pembayaran::detail/$1');
$routes->post('/pembayaran/(:any)', 'Pembayaran::update/$1');
$routes->get('/pembayaran/(:any)/cancel', 'Pembayaran::cancel/$1');

$routes->get('/dashboard', 'Dashboard::admin');
$routes->get('/dashboard/kasir', 'Dashboard::kasir');
$routes->get('/dashboard/owner', 'Dashboard::owner');
$routes->post('/dashboard', 'Dashboard::index');

$routes->get('/ajax_member', 'Transaksi::ajax_member');
$routes->get('/ajax_transaksi', 'Pembayaran::ajax_transaksi');

$routes->get('/lap_transaksi', 'Laporan::transaksi');
$routes->get('/lap_pembayaran', 'Laporan::pembayaran');
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
