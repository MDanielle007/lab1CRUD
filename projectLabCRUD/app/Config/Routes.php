<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'StudentController::index');
$routes->get('studentPage', 'StudentController::studentPage');
$routes->post('save', 'StudentController::save');
$routes->get('edit/(:any)', 'StudentController::editStudent/$1');
$routes->get('delete/(:any)', 'StudentController::deleteStudent/$1');