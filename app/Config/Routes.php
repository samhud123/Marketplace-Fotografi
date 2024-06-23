<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/order', 'Home::order', ['filter' => 'role:Customer']);
$routes->post('/order', 'Home::attemptOrder', ['filter' => 'role:Customer']);
$routes->get('/M/(:num)', 'Home::mitra/$1');

// routes searching
$routes->get('/photo', 'Search::index');
$routes->get('/photo/detail/(:num)', 'Search::detail/$1');

// routes admin
$routes->get('/admin', 'Admin::index', ['filter' => 'role:Admin']);
$routes->get('/admin/profile', 'Admin::profile', ['filter' => 'role:Admin']);
$routes->get('/admin/profile/edit', 'Admin::editProfile', ['filter' => 'role:Admin']);
$routes->post('/admin/profile/edit', 'Admin::saveProfile', ['filter' => 'role:Admin']);

$routes->get('/admin/mitra', 'AdminMitra::index', ['filter' => 'role:Admin']);
$routes->get('/admin/mitra/detail/(:num)', 'AdminMitra::detail/$1', ['filter' => 'role:Admin']);
$routes->get('/admin/mitra/disabled/(:num)', 'AdminMitra::disabled/$1', ['filter' => 'role:Admin']);
$routes->get('/admin/mitra/enabled/(:num)', 'AdminMitra::enabled/$1', ['filter' => 'role:Admin']);

$routes->get('/admin/customers', 'AdminCustomers::index', ['filter' => 'role:Admin']);
$routes->get('/admin/customers/detail/(:num)', 'AdminCustomers::detail/$1', ['filter' => 'role:Admin']);
$routes->get('/admin/customers/disabled/(:num)', 'AdminCustomers::disabled/$1', ['filter' => 'role:Admin']);
$routes->get('/admin/customers/enabled/(:num)', 'AdminCustomers::enabled/$1', ['filter' => 'role:Admin']);

$routes->get('/admin/transaction', 'AdminTrans::index', ['filter' => 'role:Admin']);
$routes->get('/admin/transaction/detail/(:num)', 'AdminTrans::detail/$1', ['filter' => 'role:Admin']);

// routes mitra
$routes->get('/mitra', 'Mitra::index', ['filter' => 'role:Mitra']);
$routes->get('/mitra/profile', 'Mitra::profile', ['filter' => 'role:Mitra']);
$routes->get('/mitra/profile/edit/', 'Mitra::editProfile', ['filter' => 'role:Mitra']);
$routes->post('/mitra/profile/edit/', 'Mitra::saveProfile', ['filter' => 'role:Mitra']);

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
$routes->post('/customer/profile', 'Customer::saveProfile', ['filter' => 'role:Customer']);
$routes->post('/customer/photo', 'Customer::updateFoto', ['filter' => 'role:Customer']);
$routes->get('/customer/order', 'Customer::order', ['filter' => 'role:Customer']);
$routes->get('/customer/order/detail/(:num)', 'Customer::orderDetail/$1', ['filter' => 'role:Customer']);
$routes->get('/customer/history', 'Customer::history', ['filter' => 'role:Customer']);
$routes->get('/customer/history/comment/(:num)', 'Customer::comment/$1', ['filter' => 'role:Customer']);
$routes->post('/customer/history/comment/(:num)', 'Customer::postComment/$1', ['filter' => 'role:Customer']);
$routes->get('/customer/history/detail/(:num)', 'Customer::historyDetail/$1', ['filter' => 'role:Customer']);
$routes->get('/customer/order/cancel/(:num)', 'Customer::cancel/$1', ['filter' => 'role:Customer']);
$routes->get('/customer/order/finish/(:num)', 'Customer::finish/$1', ['filter' => 'role:Customer']);
