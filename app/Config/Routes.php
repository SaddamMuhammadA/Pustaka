<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('Home', 'Home::index');
$routes->get('Buku', 'Buku::index');
$routes->get('Buku/addbuku', 'Buku::addbuku');
$routes->add('Buku/save', 'Buku::save');