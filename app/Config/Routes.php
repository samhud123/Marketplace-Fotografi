<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->get('/admin', 'Admin::index', ['filter' => 'role:Admin']);
$routes->get('/admin/mitra', 'AdminMitra::index', ['filter' => 'role:Admin']);

$routes->get('/mitra', 'Mitra::index', ['filter' => 'role:Mitra']);
$routes->get('/mitra/profile', 'Mitra::profile', ['filter' => 'role:Mitra']);

// routes mitra service
$routes->get('/mitra/service', 'MitraService::index', ['filter' => 'role:Mitra']);
$routes->get('/mitra/service/add', 'MitraService::add', ['filter' => 'role:Mitra']);
$routes->post('/mitra/service/save', 'MitraService::save', ['filter' => 'role:Mitra']);
$routes->get('/mitra/service/edit/(:num)', 'MitraService::edit/$1', ['filter' => 'role:Mitra']);
$routes->post('/mitra/service/update/(:num)', 'MitraService::update/$1', ['filter' => 'role:Mitra']);
$routes->delete('/mitra/service/delete/(:num)', 'MitraService::delete/$1', ['filter' => 'role:Mitra']);

// routes mitra orders
$routes->get('/mitra/orders', 'MitraOrders::index', ['filter' => 'role:Mitra']);

// routes mitra gallery 
$routes->get('/mitra/gallery', 'MitraGallery::index', ['filter' => 'role:Mitra']);
$routes->get('/mitra/gallery/add', 'MitraGallery::add', ['filter' => 'role:Mitra']);
$routes->post('/mitra/gallery/add', 'MitraGallery::save', ['filter' => 'role:Mitra']);
$routes->get('/mitra/gallery/edit/(:num)', 'MitraGallery::edit/$1', ['filter' => 'role:Mitra']);
$routes->post('/mitra/gallery/edit/(:num)', 'MitraGallery::update/$1', ['filter' => 'role:Mitra']);
$routes->delete('/mitra/gallery/delete/(:num)', 'MitraGallery::delete/$1', ['filter' => 'role:Mitra']);
