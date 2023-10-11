<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
//$routes->get('/about/contact/(num)/(:any)/(:num)', 'Home::about_contact/$1/$2//$3');



$routes->get('/', 'Page::index');
$routes->get('/about', 'Home::about_index');
$routes->get('/about/(:any)/(:num)', 'About::contact/$1/$2');
$routes->get('/about/contact', 'About::contact');
$routes->get('/about/contact/(:alpha)/(:num)', 'About::contact/$2/$1');