<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
// $routes->get('/', 'Home::index');
$routes->get('/', 'Url::index');
$routes->post('/shorten', 'Url::shorten');
$routes->get('/short/(:any)', 'Url::short/$1');
