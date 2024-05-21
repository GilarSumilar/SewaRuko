<?php

use CodeIgniter\Router\RouteCollection;
use App\Controllers\Home;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', [Home::class, 'beranda']);
$routes->get('/daftar-ruko', [Home::class, 'daftar_ruko']);
$routes->get('/kontak', [Home::class, 'kontak']);
