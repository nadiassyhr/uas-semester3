<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Student::index');
 
// CRUD Routes
$routes->get('student', 'Student::index');
$routes->post('student/store', 'Student::store');
$routes->get('student/edit/(:num)', 'Student::edit/$1');
$routes->get('student/delete/(:num)', 'Student::delete/$1');

service('auth')->routes($routes);
$routes->post('student/update', 'Student::update'); 