<?php

use CodeIgniter\Router\RouteCollection;

/** @var RouteCollection $routes */

$routes->get('landing', 'Index::landing');
$routes->get('/', 'Index::landing');
$routes->get('about', 'Index::about');
$routes->get('customers', 'Index::customer');
$routes->get('users', 'Index::user');

return $routes;