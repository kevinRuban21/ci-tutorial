<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/tentang_kami', 'Home::tentang_kami');
$routes->get('/kontak', 'Home::kontak');
$routes->get('/kontak/(:any)/(:num)', 'Home::kontak/$1/$2');
$routes->get('/tentang_kami/(:any)/(:num)', 'Home::tentang_kami/$1/$2');