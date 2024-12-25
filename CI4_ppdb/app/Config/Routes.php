<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/register', 'User::register');
$routes->post('/user/create', 'User::create');
$routes->get('/login', 'User::login');
$routes->post('/user/authenticate', 'User::authenticate');
$routes->get('/logout', 'User::logout');
$routes->get('/pendaftaran', 'Pendaftaran::index');
$routes->get('/pendaftaran/create', 'Pendaftaran::create');
$routes->post('/pendaftaran/store', 'Pendaftaran::store');