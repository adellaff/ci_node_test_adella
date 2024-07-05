<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Auth::index');
$routes->get('/login', 'Auth::index');
$routes->post('/auth/login', 'Auth::login');
$routes->get('/logout', 'Auth::logout');
$routes->get('/register', 'Auth::register');
$routes->post('/auth/registerSave', 'Auth::registerSave');
$routes->get('/dashboard', 'Dashboard::index');

$routes->get('/employees', 'EmployeeController::index');
$routes->get('/employees/create', 'EmployeeController::create');
$routes->post('/employees/store', 'EmployeeController::store');
$routes->get('/employees/edit/(:num)', 'EmployeeController::edit/$1');
$routes->post('/employees/update/(:num)', 'EmployeeController::update/$1');
$routes->get('/employees/delete/(:num)', 'EmployeeController::delete/$1');

