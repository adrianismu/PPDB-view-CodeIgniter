<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->get('/hello', 'Home::hello');

$routes->get('/ppdb', 'Home::ppdb');

