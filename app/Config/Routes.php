<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/register','Home::register_view');
$routes->get('/login', 'Home::login_view');
$routes->post('/save_user', 'Home::register');
