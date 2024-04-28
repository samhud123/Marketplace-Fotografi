<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/order', 'Home::order', ['filter' => 'role:Customer']);
$routes->post('/order', 'Home::attemptOrder', ['filter' => 'role:Customer']);

// routes searching
$routes->get('/photo', 'Search::index');

// routes admin
$routes->get('/admin', 'Admin::index', ['filter' => 'role:Admin']);
$routes->get('/admin/profile', 'Admin::profile', ['filter' => 'role:Admin']);
$routes->get('/admin/mitra', 'AdminMitra::index', ['filter' => 'role:Admin']);
$routes->delete('/admin/mitra/(:num)', 'AdminMitra::delete/$1', ['filter' => 'role:Admin']);
$routes->get('/admin/customers', 'AdminCustomers::index', ['filter' => 'role:Admin']);

// routes mitra
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
$routes->get('/mitra/orders/detail/(:num)', 'MitraOrders::detail/$1', ['filter' => 'role:Mitra']);
$routes->get('/mitra/orders/confirm/(:num)', 'MitraOrders::confirm/$1', ['filter' => 'role:Mitra']);
$routes->get('/mitra/orders/reject/(:num)', 'MitraOrders::reject/$1', ['filter' => 'role:Mitra']);

// routes mitra gallery 
$routes->get('/mitra/gallery', 'MitraGallery::index', ['filter' => 'role:Mitra']);
$routes->get('/mitra/gallery/add', 'MitraGallery::add', ['filter' => 'role:Mitra']);
$routes->post('/mitra/gallery/add', 'MitraGallery::save', ['filter' => 'role:Mitra']);
$routes->get('/mitra/gallery/edit/(:num)', 'MitraGallery::edit/$1', ['filter' => 'role:Mitra']);
$routes->post('/mitra/gallery/edit/(:num)', 'MitraGallery::update/$1', ['filter' => 'role:Mitra']);
$routes->delete('/mitra/gallery/delete/(:num)', 'MitraGallery::delete/$1', ['filter' => 'role:Mitra']);

// routes customers
$routes->get('/customer', 'Customer::index', ['filter' => 'role:Customer']);
$routes->get('/customer/order', 'Customer::order', ['filter' => 'role:Customer']);
$routes->get('/customer/order/finish/(:num)', 'Customer::finish/$1', ['filter' => 'role:Customer']);
