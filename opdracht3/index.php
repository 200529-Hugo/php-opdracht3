<?php

// Require composer autoloader
require __DIR__ . '/vendor/autoload.php';

// Create Router instance
$router = new \Bramus\Router\Router();

$router->get('/admin', function() {
    include __DIR__ . '/admin/index.php';
});

//Customer pages
$router->get('/admin/customer', function() {
    include __DIR__ . '/admin/customer/index.php';
});

$router->get('/admin/customer/add', function() {
    include __DIR__ . '/admin/customer/add_customer.php';
});

$router->get('/admin/customer/edit', function() {
    include __DIR__ . '/admin/customer/edit_customer.php';
});

$router->get('/admin/customer/delete', function() {
    include __DIR__ . '/admin/customer/delete_customer.php';
});

//product
$router->get('/admin/product', function() {
    include __DIR__ . '/admin/product/index.php';
});

$router->get('/admin/product/add', function() {
    include __DIR__ . '/admin/product/add_product.php';
});

$router->get('/admin/product/delete', function() {
    include __DIR__ . '/admin/product/delete_product.php';
});

$router->get('/admin/product/add', function() {
    include __DIR__ . '/admin/product/edit_product.php';
});

//basket
$router->get('/admin/basket', function() {
    include __DIR__ . '/admin/basket/index.php';
});

$router->get('/admin/basket/edit', function() {
    include __DIR__ . '/admin/product/edit_basket.php';
});

// Run it!
$router->run();

?>