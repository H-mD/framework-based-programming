<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/admin', 'Admin::index');
$routes->get('/auth/login', 'Auth::login');
$routes->post('/auth/cek_login_user', 'Auth::cek_login_user');
$routes->get('/auth/logout', 'Auth::logout');
